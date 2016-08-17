#!/bin/bash

# combine source files into a single JS file

cw_dir=`pwd`
dest_dir="../AtD"

cat src/atd.core.js src/editor_plugin.js >$dest_dir/editor_plugin.js
cat src/atd.core2.js src/editor_plugin2.js >$dest_dir/editor_plugin2.js

# checks for jsmin, if it exists, uses it to minify the combined file
# http://crockford.com/javascript/jsmin
cd $dest_dir
if which jsmin 1>/dev/null 2>/dev/null; then
	mv editor_plugin.js editor_plugin.tmp.js
	jsmin <editor_plugin.tmp.js >editor_plugin.js
	rm -f editor_plugin.tmp.js
fi
cd $cw_dir