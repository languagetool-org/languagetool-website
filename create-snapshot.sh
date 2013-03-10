#!/bin/sh
# compiles the current LanguageTool code and moves the result to a snapshots directory

SNAPSHOT_DIR=../website-from-svn/www/download/snapshots

cd /home/languagetool/languagetool.org
svn up svn-checkout
cd svn-checkout

M2_HOME=/home/languagetool/apache-maven-3.0.4
M2=$M2_HOME/bin
PATH=$M2:$PATH
MAVEN_OPTS="-Xmx512m -XX:MaxPermSize=128m"

# We need to build like this - building the top-level project and then taking the
# artifacts will aggregate *all* languages into the language-module.properties, even
# for those projects that don't depend on all of the languages:
mvn clean &&
mvn --projects languagetool-office-extension --also-make package -DskipTests &&
mv languagetool-office-extension/target/LanguageTool*.zip $SNAPSHOT_DIR/LanguageTool-`date +%Y%m%d`-snapshot.oxt &&
mvn --projects languagetool-standalone --also-make package -DskipTests &&
mv languagetool-standalone/target/LanguageTool*.zip $SNAPSHOT_DIR/LanguageTool-`date +%Y%m%d`-snapshot.zip &&
mvn --projects languagetool-wikipedia --also-make package -DskipTests &&
mv languagetool-wikipedia/target/LanguageTool*.zip $SNAPSHOT_DIR/LanguageTool-wikipedia-`date +%Y%m%d`-snapshot.zip

# delete files older than 10 days:
rm `find $SNAPSHOT_DIR -name "*.oxt" -mtime +10`
rm `find $SNAPSHOT_DIR -name "*.zip" -mtime +10`
