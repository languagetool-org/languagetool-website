#!/bin/sh
# compiles the current LanguageTool code and moves the result to a snapshots directory

export JAVA_HOME=/home/languagetool/java
export MAVEN_OPTS="-Xmx500M -XX:MaxPermSize=300M"

SNAPSHOT_DIR=../languagetool-website/www/download/snapshots
if [ $# -eq 1 ]
then
  BUILD_DATE=$1
else
  BUILD_DATE=`date +%Y%m%d`
fi

STANDALONE_TARGET=$SNAPSHOT_DIR/LanguageTool-$BUILD_DATE-snapshot.zip

cd /home/languagetool/languagetool.org/git-checkout
git fetch && git rebase origin/master

# We need to build like this - building the top-level project and then taking the
# artifacts will aggregate *all* languages into the language-module.properties, even
# for those projects that don't depend on all of the languages:
mvn clean &&
mvn --projects languagetool-wikipedia --also-make package -DskipTests &&
mv languagetool-wikipedia/target/LanguageTool*.zip $SNAPSHOT_DIR/LanguageTool-wikipedia-`date +%Y%m%d`-snapshot.zip &&
mvn --projects languagetool-office-extension --also-make package -DskipTests &&
mv languagetool-office-extension/target/LanguageTool*.zip $SNAPSHOT_DIR/LanguageTool-`date +%Y%m%d`-snapshot.oxt &&
mvn --projects languagetool-standalone --also-make package -DskipTests &&
mv languagetool-standalone/target/LanguageTool*.zip $STANDALONE_TARGET

# delete files older than 10 days:
rm `find $SNAPSHOT_DIR -name "*.oxt" -mtime +10`
rm `find $SNAPSHOT_DIR -name "*.zip" -mtime +10`

# =====================================================================
# run tests:
# =====================================================================
export LANG=de_DE.UTF-8
cd /home/languagetool/languagetool.org/git-checkout
mvn -Dlt.default.port=8082 test
BUILD_SUCCESS=$?

if [ $BUILD_SUCCESS -ne 0 ]
then
    echo "Tests failed, stopping deployment"
    exit
fi

# =====================================================================
# deploy JARs to community.languagetool.org:
# =====================================================================
echo "--- Deploying JARs to community.languagetool.org ---"
/bin/sh /home/languagetool/languagetool.org/languagetool-website/deploy-jars.sh

# =====================================================================
# deploy to API server:
# =====================================================================
echo "--- Deploying software snapshot to API server ---"
unzip -o -d /home/languagetool/api $STANDALONE_TARGET && \
  cp -r /home/languagetool/api/LanguageTool-[1-9].[0-9]*/* /home/languagetool/api/ && \
  rm -rf /home/languagetool/api/LanguageTool-[1-9].[0-9]*/ && \
  cd /home/languagetool/ && \
  ./restart-api-server.sh

# =====================================================================
# deploy WikiCheck web app:
# =====================================================================
echo "--- Deploying WikiCheck web app at community.languagetool.org ---"
cd /home/languagetool/languagetool.org/git-checkout
mvn install -DskipTests

# there's a Grails bug that causes Grails to not get new SNAPSHOT
# artifacts, so they need to be deleted manually:
rm -r ~/.grails/ivy-cache/org.languagetool/

echo "-- Getting latest version from git --"
cd /home/languagetool/languagetool.org/git-checkout-wikicheck
# stash because e.g. DataSource.groovy is modified (locally it contains a password):
git stash
git pull -r
git stash pop

JAVA_HOME
GRAILS_HOME=/home/languagetool/grails
PATH=$GRAILS_HOME/bin:$PATH
echo "-- Building and deploying WAR for community.languagetool.org/wikiCheck --"
grails war
unzip -o -d /home/languagetool/tomcat/webapps/wikiCheck/ target/languagetool-wikicheck-0.1.war
# Tomcat restart needs root permission, but happens automatically by cron job

# =====================================================================
# deploy command-line tools (Feed Checker) for WikiCheck at Tool Labs:
# =====================================================================
#echo "--- Deploying command line feed checker at Tool Labs ---"
#ssh -i $SSH_KEY_FILE dnaber@tools-login.wmflabs.org "become languagetool /data/project/languagetool/redeploy-feedchecker.sh"
