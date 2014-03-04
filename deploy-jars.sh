#!/bin/sh
# Copy the latest LanguageTool JARs to Tomcat for community.languagetool.org
# Run this after a new snapshot has been created.
# dnaber, 2014-03-04

SNAPSHOT_DIR=../languagetool-website/www/download/snapshots
WEB_LIB=/home/languagetool/tomcat/webapps/ROOT/WEB-INF/lib

cd /home/languagetool/languagetool.org/git-checkout
rm -r /tmp/lt-snapshot
unzip -d /tmp/lt-snapshot $SNAPSHOT_DIR/LanguageTool-`date +%Y%m%d`-snapshot.zip

# backup of libs:
rm -r /home/languagetool/tomcat/lib-bak/
mkdir /home/languagetool/tomcat/lib-bak/
cp -r $WEB_LIB /home/languagetool/tomcat/lib-bak/

cp /tmp/lt-snapshot/LanguageTool-*-SNAPSHOT/libs/languagetool-core.jar $WEB_LIB
cp /tmp/lt-snapshot/LanguageTool-*-SNAPSHOT/libs/languagetool-core-tests.jar $WEB_LIB

cd /tmp/lt-snapshot/LanguageTool-*-SNAPSHOT/
rm /tmp/lt-not-in-jars.jar
zip -r /tmp/lt-not-in-jars.jar org/
cp /tmp/lt-not-in-jars.jar $WEB_LIB
# get rid of language-it-2.5-SNAPSHOT.jar etc to avoid duplication:
rm $WEB_LIB/language-..-*-SNAPSHOT.jar

mkdir -p /home/languagetool/tomcat/webapps/ROOT/WEB-INF/classes/META-INF/org/languagetool/
cp /tmp/lt-snapshot/LanguageTool-*-SNAPSHOT/META-INF/org/languagetool/language-module.properties /home/languagetool/tomcat/webapps/ROOT/WEB-INF/classes/META-INF/org/languagetool/

/home/languagetool/restart-tomcat.sh
