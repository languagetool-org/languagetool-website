<?php
$page = "search";
$title = "LanguageTool";
$title2 = "Search";
$show_date = 0;
include("../../include/header.php");
?>

<TABLE WIDTH="100%">
    <FORM name="searchform" METHOD=GET ACTION="http://languagetool.org.master.com/texis/master/search/">
        <TR><TD ALIGN=CENTER width="80%" NOWRAP><INPUT SIZE=30 name="q" value="" placeholder="search terms"><INPUT TYPE=submit name=xsubmit VALUE="Search:" id="mastercom-but_search" class="mastercom-searchbut"><SELECT NAME=s ONCHANGE="var val = this.form.s.options[this.form.s.selectedIndex].value; if (val != 'SS') this.form.submit()">
                        <OPTION VALUE=SS SELECTED>All of Languagetool.org
                        <OPTION VALUE=.1 >Only Javadoc
                        <OPTION VALUE=.2 >Only Wiki
                            <!--{Services}--></SELECT></TD>
            <TD ALIGN=RIGHT WIDTH="10%"><A HREF="http://www.master.com/texis/master/app/home.html" target="_top"><IMG WIDTH=96 HEIGHT=26 SRC="http://www.master.com/img/ms.gif" ALT="master.com" BORDER=0></A></TD>
        </TR>
    </FORM>
</TABLE>

<div style="height:500px"/>

<script type="text/javascript">
    <!--
    if (document.searchform && document.searchform.q) {
        document.searchform.q.focus();
    }
    // -->
</script>

<?php
include("../../include/footer.php");
?>
