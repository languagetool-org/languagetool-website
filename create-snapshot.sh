#!/bin/sh
# compiles the current LanguageTool code and moves the result to a snapshots directory

export JAVA_HOME=/home/languagetool/java
export MAVEN_OPTS="-Xmx500M"

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
echo "--- Using ZIP: $STANDALONE_TARGET ---"
rm -r /home/languagetool/api/lt_bak
unzip -o -d /home/languagetool/api/lt_neu $STANDALONE_TARGET && \
  mv /home/languagetool/api/lt_neu/LanguageTool-*-SNAPSHOT/* /home/languagetool/api/lt_neu && \
  mv /home/languagetool/api/lt /home/languagetool/api/lt_bak && \
  mv /home/languagetool/api/lt_neu /home/languagetool/api/lt && \
  cd /home/languagetool/ && \
  ./restart-api-server.sh
  
# =====================================================================
# deploy community.languagetool.org web app:
# =====================================================================
echo "--- Deploying web app at community.languagetool.org ---"
cd /home/languagetool/languagetool.org/git-checkout
mvn install -DskipTests

# there's a Grails bug that causes Grails to not get new SNAPSHOT
# artifacts, so they need to be deleted manually:
rm -r ~/.grails/ivy-cache/org.languagetool/

cd /home/languagetool/languagetool.org/languagetool-community-website
# stash because e.g. Config.groovy is modified (locally it contains a password):
git stash
git pull -r
git stash pop
GRAILS_HOME=/home/languagetool/grails
PATH=$GRAILS_HOME/bin:$PATH
grails war
rm -r /home/languagetool/tomcat/webapps/ROOT/
unzip -o -d /home/languagetool/tomcat/webapps/ROOT/ target/ltcommunity-0.1.war
### Tomcat restart needs root permission, but that happens automatically by cron job

# since shortly after 4.1-SNAPSHOT there's a problem with dependencies (wrong slf4j-api
# version used) which we work around with this hack:
rm ~/tomcat/webapps/ROOT/WEB-INF/lib/slf4j-api-1.7.5.jar
cp ~/api/lt/libs/slf4j-api.jar ~/tomcat/webapps/ROOT/WEB-INF/lib/
