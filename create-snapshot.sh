#!/bin/sh
# compiles the current LanguageTool code and moves the result to a snapshots directory

export JAVA_HOME=/home/languagetool/jdk1.7.0_07
export MAVEN_OPTS="-Xmx500M -XX:MaxPermSize=300M"

SNAPSHOT_DIR=../languagetool-website/www/download/snapshots
STANDALONE_TARGET=$SNAPSHOT_DIR/LanguageTool-`date +%Y%m%d`-snapshot.zip

cd /home/languagetool/languagetool.org/git-checkout
git fetch && git rebase origin/master

M2_HOME=/home/languagetool/apache-maven-3.0.4
M2=$M2_HOME/bin
PATH=$M2:$PATH

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
# deploy web app to WikiCheck at Tool Labs:
# =====================================================================
cd /home/languagetool/languagetool.org/git-checkout-wikicheck
mvn install -DskipTests

# there's a Grails bug that causes Grails to not get new SNAPSHOT
# artifacts, so they need to be deleted manually:
rm -r ~/.grails/ivy-cache/org.languagetool/

cd /home/languagetool/languagetool.org/git-checkout-wikicheck
git stash
git pull -r
git stash pop

SSH_KEY_FILE=~/.ssh/wikipedia/toollabs
grails war && \
  scp -i $SSH_KEY_FILE target/languagetool-wikicheck-0.1.war dnaber@tools-login.wmflabs.org:/data/project/languagetool/ && \
  ssh -i $SSH_KEY_FILE dnaber@tools-login.wmflabs.org "become languagetool /data/project/languagetool/deploy-wikicheck.sh"

# =====================================================================
# deploy command-line tools (Feed Checker) for WikiCheck at Tool Labs:
# =====================================================================
### TODO: comment in again if it works reliably:
###ssh -i $SSH_KEY_FILE dnaber@tools-login.wmflabs.org "become languagetool /data/project/languagetool/redeploy-feedchecker.sh"
