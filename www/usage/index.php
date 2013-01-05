<?php
$page = "usage";
$title = "LanguageTool";
$title2 = "Usage";
$lastmod = "2012-01-05 17:40:00 CET";
include("../../include/header.php");
include('../../include/geshi/geshi.php');
?>
		
<p class="firstpara">LanguageTool can be used in a different number of ways:</p>


<h2>As a LibreOffice/OpenOffice.org extension</h2>
    <p>Double click the downloaded <tt>LanguageTool-2.x.oxt</tt> to install it.
  	If that doesn't work, call <em>Tools -&gt; Extension Manager -&gt; Add...</em>.
    Close LibreOffice/OpenOffice.org and re-start it. Type some text
  	with an error that LanguageTool can detect and you should see a blue underline.
    You might want to use "This is an test." as en example &ndash; make sure the text language is set
    to English for this example.</p>


<h2>As a stand-alone application</h2>
	<p>Download the *.zip version (not the *.oxt one) and unzip it.
	Then start <tt>LanguageToolGUI.jar</tt> by double clicking on it.
    If your computer isn't
	configured to start jar archives, start it from the command line using:
	<tt>java -jar LanguageToolGUI.jar</tt></p>
	
    <p>You can use the <tt>--tray</tt> option to start LanguageTool inside the system tray.
	After you copy any text to the clipboard, clicking LanguageTool in the system tray will
	cause the application to open and check the contents of the clipboard automatically. This way
	you can use LanguageTool for applications that do not support direct integration of the checker.</p>

    <p>The file size of the stand-alone version is so much larger than that of the LibreOffice/OpenOffice
    extension because it contains spell checking and thus dictionaries for most languages.</p>


<h2>As a stand-alone application on the command line</h2>
	<p>See "as a stand-alone application" above, but start LanguageTool.jar using:</p>
	<tt>java -jar LanguageTool.jar &lt;filename&gt;</tt>
	<p>Use <tt>java -jar LanguageTool.jar --help</tt> to get detailed usage information.</p>


<h2>Embedding LanguageTool from other Applications</h2>

<ul>
  <li><?=show_link("Using LanguageTool from a Java application", "$rootUrl/java-api/", 0) ?></li>
  <li><?=show_link("Using LanguageTool via HTTP", "$rootUrl/http-api/", 0) ?></li>
</ul>

<?php
include("../../include/footer.php");
?>
