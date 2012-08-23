#!/bin/sh
# compiles the current LanguageTool code and moves the result to a snapshots directory

SNAPSHOT_DIR=../website-from-svn/www/download/snapshots

cd /home/languagetool/languagetool.org
svn up svn-checkout
cd svn-checkout

ant dist && mv dist/LanguageTool-*-dev.oxt $SNAPSHOT_DIR/LanguageTool-`date +%Y%m%d`-snapshot.oxt

ant dist-standalone && mv dist/LanguageTool-*-dev.zip $SNAPSHOT_DIR/LanguageTool-`date +%Y%m%d`-snapshot.zip

# delete *.oxt files older than 5 days:
rm `find $SNAPSHOT_DIR -name "*.oxt" -mtime +5`
rm `find $SNAPSHOT_DIR -name "*.zip" -mtime +5`
