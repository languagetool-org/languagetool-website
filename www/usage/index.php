<!doctype html>
<html lang=en>
<head>
    <?php
    $title = "LanguageTool Usage";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textcontent">

<h1>Usage</h1>
    
<p>LanguageTool can be used in a different number of ways:</p>


<h2>As a LibreOffice/OpenOffice.org Extension</h2>
    <p>Double click the downloaded <tt>LanguageTool-2.x.oxt</tt> to install it.
  	If that doesn't work, call <em>Tools -&gt; Extension Manager -&gt; Add...</em>.
    Close LibreOffice/OpenOffice.org and re-start it. Type some text
  	with an error that LanguageTool can detect and you should see a blue underline.
    You might want to use "This is an test." as an example &ndash; make sure the text language is set
    to English for this example.</p>


<h2>As a Stand-alone Application</h2>
	<p>Download the *.zip version (not the *.oxt one) and unzip it.
	Then start <tt>languagetool-standalone.jar</tt> by double clicking it.
    If your computer isn't
	configured to start *.jar archives, start it from the command line using
	<tt>java -jar languagetool-standalone.jar</tt>.</p>
	
    <p>You can use the <tt>--tray</tt> option to start LanguageTool inside the system tray.
	After you copy any text to the clipboard, clicking LanguageTool in the system tray will
	cause the application to open and check the contents of the clipboard automatically. This way
	you can use LanguageTool for applications that do not support direct integration of the checker.</p>

    <!--<p>By the way, the file size of the stand-alone version is much larger than that of the LibreOffice/OpenOffice
    extension because it contains spell checking and thus dictionaries for most languages.</p>-->


<h2>As a stand-alone Application on the Command Line</h2>
	<p>See "as a stand-alone application" above, but start LanguageTool using:</p>

	<p><tt>java -jar languagetool-commandline.jar &lt;filename&gt;</tt></p>

	<p>Use <tt>java -jar languagetool-commandline.jar --help</tt> to get detailed usage information.</p>

    <p><a href="http://wiki.languagetool.org/command-line-options">A list of all command-line options</a>
    is also available in our Wiki.</p>


<h2>As a Firefox Add-On</h2>

<ul>
    <li><a href="https://addons.mozilla.org/en-US/firefox/addon/languagetoolfx/">Download the Add-On</a></li>
</ul>

<h2>As an Add-On in other Programs</h2>

<ul>
    <li><a href="http://wiki.languagetool.org/software-that-supports-languagetool-as-a-plug-in-or-add-on">Software that supports LanguageTool as a Plug-in or Add-on</a></li>
</ul>

<h2>For Developers</h2>

See <a href="../development/">development</a> for how to use LanguageTool in your own software.

</div>

<?php
include("../../include/footer.php");
?>

</body>
</html>
