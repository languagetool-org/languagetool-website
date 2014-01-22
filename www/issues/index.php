<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "LanguageTool Common Problems";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

<h1><a name="commonproblems">Checklist in Case of Problems</a></h1>

<ul>
<li>If installation of LanguageTool in LibreOffice/OpenOffice didn't throw an error but you are not sure if it 
    actually works, please <strong><a href="languagetool-test.odt">load this document</a></strong> and follow the instructions in it.</li>
<li><strong>For Mac users:</strong> LanguageTool now requires Java 7, which is available for the Mac only as a 64 bit version.
    LibreOffice and OpenOffice are only available in 32 bit, leading to an incompatibility so that LanguageTool
    cannot be used as an LibreOffice/OpenOffice plugin on the Mac. The only known workaround is to use
    <strong>LanguageTool 2.2</strong>, which is still available from the <a href="http://languagetool.org/download/">download archive</a>, for which a 32 bit version
    of Java 6 still exists. LanguageTool 2.2 doesn't require Java 7 but also works with Java 6.</li>
<li>LibreOffice 3.5 and later comes with its own integrated grammar checker (LightProof) which disables LanguageTool for
    English and Russian.
    Use Options -> Language Settings -> Writing aids -> Edit... to disable LightProof and enable LanguageTool for the language
    you are working with to make LanguageTool work.</li>
<li>Make sure <a href="http://www.java.com/en/download/manual.jsp">Java 7 or later from Oracle</a>
    is installed on your system. On Windows, use the 32-bit version of Java if you want to use LanguageTool
    as an add-on in LibreOffice or OpenOffice.org.
    Java versions which are not from Oracle may not work. If you're using an
    old version of Java you'll see a confusing error message <a href="../images/version-error.jpg">like this</a>.</li>
<li>Make sure this version of Java is selected in LibreOffice (<em>Tools -&gt; Options -&gt; Advanced</em>) or OpenOffice.org
    (<em>Tools -&gt; Options -&gt; Java</em>).</li>
<li>Did you restart LibreOffice/OpenOffice.org - including the QuickStarter - after installation of LanguageTool? This is required,
    even though there is no dialog saying so. (<a href="https://bugs.freedesktop.org/show_bug.cgi?id=46279">#46279</a>, <a href="http://issues.apache.org/ooo/show_bug.cgi?id=88692">#88692</a>)</li>
<li>If LanguageTool doesn't start and you see no error message, please
    check if the extension is enabled in the Extension manager
    (under <em>Tools -&gt; Extension Manager</em>).</li>
</ul>

<h2>Common Problems with LibreOffice/OpenOffice.org Integration</h2>

<ul>
    
<li>Note that if you have a <strong>32-bit version of LibreOffice/OpenOffice</strong>, you will also need a 32-bit version of Java - LanguageTool will not 
    work otherwise. LibreOffice/OpenOffice doesn't provide official 64-bit versions for Windows and Mac yet, so you will need a 32-bit Java
    on Windows and Mac.</li>

<li>If you get <strong>"Could not create Java implementation loader"</strong>, please work through
    <a href="http://www.zotero.org/support/word_processor_plugin_troubleshooting#could_not_create_java_implementation_loader">these suggestions</a>.
    <strong>Note: </strong> if you have this problem on 64-bit Windows,
    it may be caused by a 64-bit version of Java. LibreOffice and Apache OpenOffice are only built as 32-bit applications
    and will not work with a 64-bit Java. You need to use a <a href="http://www.java.com/en/download/faq/java_win64bit.xml#Java for 32-bit">32-bit build of Java for Windows</a>.
    (<a href="https://issues.apache.org/ooo/show_bug.cgi?id=118346">OOo bug #118346</a>)
    </li>
    
<li><strong>On Ubuntu</strong>, install the <tt>libreoffice-java-common</tt> or <tt>openoffice.org-java-common</tt> package.
    One problem solved by this is getting <a href="../images/class_not_found.png">a long error message with "NoClassDefFoundError"</a> during installation.
    See
    <a href="http://nancib.wordpress.com/2008/05/03/fixing-the-openofficeorg-grammar-glitch-in-ubuntu-hardy/">this blog posting</a>
    for details.</li>

<li><strong>On Ubuntu</strong>, if you get a message similar to <tt>Exception in thread "Thread-402" java.awt.HeadlessException</tt> in LibreOffice/OpenOffice,
    see <a href="http://stackoverflow.com/questions/5362512/unable-to-run-java-gui-programs-with-ubuntu/5362572#5362572">this stackoverflow answer</a>.
    Note that the message might not appear in a dialog but only on the command line, so you might want to start LibreOffice/OpenOffice from a terminal window.</li>

<li>If you get <strong>"This media-type is not supported: application/vnd.sun.star.package-bundle2.0.00"</strong> during installation, please consider
    <a href="http://user.services.openoffice.org/en/forum/viewtopic.php?p=58403#p58403">resetting your OpenOffice user profile</a>.</li>

<li>If you get <strong>Failed to load rules for language ... Caused by java.lang.ClassNotFoundException: Loading rules failed: Duplicate class definition</strong>:
    For some reason LanguageTool is installed twice as an extension in OpenOffice.org. You can try deleting the directories listed
    in the error message after making a backup. (The directories to be deleted have random names like "EE31.tmp_" or similar - exit OpenOffice.org
    before deleting anything).</li>
<li>The <strong>menu items in LibreOffice/OpenOffice.org get mixed up</strong> when both <a href="http://open.afterthedeadline.com/">After the Deadline</a>
    and LanguageTool are installed. <a href="http://www.oooforum.org/forum/viewtopic.phtml?t=122665#428635">The macro</a> mentioned here
    might help you. This issue is tracked as <a href="http://openatd.trac.wordpress.org/ticket/215">ticket #215 at After the Deadline</a>.</li>

<li class="oldInformation">If you are using an older version of LanguageTool and/or OpenOffice.org, these issues may affect you:
    <ul>
        <li>Freeze on startup: for some people, LanguageTool freezes LibreOffice or OpenOffice.org on startup for seconds to minutes.
            This bug has been fixed in LibreOffice 3.5.4 and Apache OpenOffice 3.4.1 - all older versions are affected
            by this, so we strongly recommend to use at least these releases. <a href="http://sourceforge.net/p/languagetool/bugs/66/">Bug report</a>.
        </li>
        <li>LanguageTool installation fails if the name of your user account contains
            special characters. The only workaround so far seems to be to use a different
            user account. (<a href="http://issues.apache.org/ooo/show_bug.cgi?id=95162">#95162</a>)</li>
        <li>If you get a message "Can not activate the factory for com.sun.star.help.HelpIndexer because java.lang.NoClassDefFoundError: org/apache/lucene/analysis/cjk/CJKAnalyzer":
            this was a bug In OpenOffice.org 3.1, it was fixed in version 3.2 (<a href="http://issues.apache.org/ooo/show_bug.cgi?id=98680">#98680</a>)</li>
        <li>If you get "Failed to load rules for language English" when opening the configuration dialog, try the latest version of LanguageTool, as this should be fixed in 1.3
            (problem occurred on openSUSE 11.3 with LanguageTool 1.2 pre-installed)
            <!-- 2011-03-18 --></li>
        <li>LanguageTool didn't work together with the <a href="http://extensions.services.openoffice.org/en/project/DeltaXMLODTCompare">DeltaXML
            ODT Compare</a> extension - use version 1.2.0 of DeltaXML ODT Compare, which fixes the problem.</li>
    </ul>
</li>

</ul>

<h2>Known Limitations</h2>

<ul>
    <li>Some errors are not detected: LanguageTool uses rules to detect errors, i.e. it will only complain about errors for which there 
        is a rule that detects it. Please consider learning <b><a href="http://wiki.languagetool.org/development-overview#toc0">how to write rules</a></b> and 
        <b><a href="http://wiki.languagetool.org/make-languagetool-better">help make LanguageTool better</a></b> by contributing your rules.</li>
    <!--<li>Some rules that work across sentences don't work in LibreOffice/OpenOffice.org. This also affects the rule that checks whether
        three sentences start with the same word.</li>-->
    <!--<li>For some rules there are a lot of false alarms, i.e., LanguageTool complains about text which is actually correct</li>-->
    <li>LanguageTool doesn't work correctly with documents that contain revisions
        (<a href="https://bugs.freedesktop.org/show_bug.cgi?id=36540">LibreOffice #36540</a>, <a href="https://issues.apache.org/ooo/show_bug.cgi?id=92013">OOo #92013</a>)
    </li>
</ul>

<h2>Still need Help?</h2>

<p>If LanguageTool still doesn't work properly for you, please <a href="/forum">post to the forum</a> describing the problem
and letting us know which version of LanguageTool, LibreOffice/OpenOffice.org and which operating system you are using.</p>

</div>

<?php
include("../../include/footer.php");
?>

</body>
</html>
