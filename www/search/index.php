<?php
$page = "search";
$title = "LanguageTool";
$title2 = "Search";
$show_date = 0;
include("../../include/header.php");
?>

<p>This is a test, please move on...</p>

<form accept-charset="UTF-8" action="http://www.jrank.org/api/search/v2" method="get">
    <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /></div>
    <fieldset style="border: 1px solid rgb(175, 175, 175); display: inline;">
        <legend><a href="http://www.jrank.org/" style="font-size: 10pt; font-family: Arial, sans-serif;">Site Search</a></legend>
        <a href="http://www.jrank.org/"><img alt="Site Search" src="http://www.jrank.org/images/jrank_88_31-fs8.png" style="border: none; vertical-align: middle;" title="Site Search" /></a>
        <input id="key" name="key" type="hidden" value="b4434460d2e23b942cfded2b6c8c6c04df3e3800" />
        <input name="ie_utf8_fix" type="hidden" value="☠" />
        <input id="q" name="q" style="display: inline; vertical-align: middle;" type="text" value="" />
        <input name="commit" style="display: inline; vertical-align: middle;" type="submit" value="Search" />
    </fieldset>
</form>

<div style="height:500px"/>

<?php
include("../../include/footer.php");
?>
