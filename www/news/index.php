<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "LanguageTool News";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textcontent">

<p><a href="http://twitter.com/languagetoolorg">Follow us on twitter</a> for the latest news.</p>

<p><strong>2013-12-30:</strong> Released LanguageTool 2.4. Changes include:</p>
<ul>
  <li>Many <a href="../changes/languagetool-2.3_to_languagetool-2.4/">updates for the error detection rules</a> for
      English, French, Catalan, Polish, Portuguese, German, and Breton.</li>
  <li>Frequency data can be used to improve the spell checker suggestions</li>
  <li>Renamed the stand-alone JAR file from <tt>languagetool-standalone.jar</tt> to <tt>languagetool.jar</tt></li>
  <li>Show example sentences in the stand-alone GUI</li>
  <li>Several bug fixes</li>
  <li>Small cleanups in the Java API</li>
  <li>See the <a href="../download/CHANGES.txt">Change Log</a> for a complete list of changes</li>
</ul>

<p><strong>2013-09-30:</strong> Released LanguageTool 2.3. Changes include:</p>
<ul>
  <li>Many <a href="../changes/languagetool-2.2_to_languagetool-2.3/">updates for the error detection rules</a> for
      English, French, Catalan, Ukrainian, Portuguese, German, and Breton.</li>
    <li>LanguageTool requires Java 7 now</li>
    <li>Use of multiple threads for text checking on modern hardware, improving performance</li>
    <li>Rule syntax improvements</li>
    <li>English now has a chunker to detect singular and plural noun chunks</li>
    <li>The standalone version now underlines errors with a red or blue line</li>
    <li>Java API cleanups and improved thread-safety</li>
    <li>Other small bug fixes</li>
    <li>See the <a href="../download/CHANGES.txt">Change Log</a> for a complete list of changes</li>
</ul>

<p class="firstpara"><strong>2013-06-30:</strong> Released LanguageTool 2.2. Changes include:</p>
<ul>
  <li>Many <a href="../changes/languagetool-2.1_to_languagetool-2.2/">updates for the error detection rules</a> for French, Catalan, German, Portuguese, Russian, Esperanto, and Breton.</li>
  <li>Small bug fixes</li>
  <li>See the <a href="../download/CHANGES.txt">Change Log</a> for a complete list of changes</li>
</ul>

<p class="firstpara"><strong>2013-03-31:</strong> Released LanguageTool 2.1. Changes include:</p>
<ul>
  <li>Many <a href="../changes/V_2_0_to_languagetool-2.1/">updates for the error detection rules</a> for English, French, German, Portuguese, Polish, Russian, Breton, Esperanto, Catalan and Italian</li>
  <li>For Java developers LanguageTool is now modular: instead of one big JAR, there are several.
    They can be found <a href="http://search.maven.org/#search|ga|1|languagetool">at Maven Central</a>.</li>
  <li>Small bug fixes</li>
  <li>See the <a href="../download/CHANGES.txt">Change Log</a> for a complete list of changes</li>
</ul>

<p class="firstpara"><strong>2012-12-30:</strong> Released LanguageTool 2.0. Changes include:</p>
<ul>
  <li>Many <a href="../changes/V_1_9_to_V_2_0/">updates for the error detection rules</a> for English, Spanish, French, German, Portuguese, Russian, Breton, Catalan, Esperanto, and Ukrainian</li>
  <li>The embedded HTTP server can now be started from the context menu if LanguageTool is running in the system tray</li>
  <li>Small bug fixes</li>
  <li>See the <a href="../download/CHANGES.txt">Change Log</a> for a complete list of changes</li>
</ul>

<p class="firstpara"><strong>2012-10-10:</strong> LanguageTool 1.9 is now available
  <a href="http://search.maven.org/#search|ga|1|languagetool">on Maven Central</a> for Java developers</p>

<p class="firstpara"><strong>2012-09-30:</strong> Released LanguageTool 1.9. Changes include:</p>
<ul>
  <li>Initial support for Japanese with about 20 rules</li>
  <li>Many <a href="../changes/V_1_8_to_V_1_9/">updates for the error detection rules</a> for Danish, German, English, Catalan, Russian, Chinese, French, Breton, Portuguese, Esperanto</li>
  <li>Several bug fixes</li>
</ul>

<p class="firstpara"><strong>2012-06-30:</strong> Released LanguageTool 1.8. Changes include:</p>
<ul>
  <li>Spell checking is now included (not used in LibreOffice/OpenOffice)</li>
  <li>Many <a href="../changes/V_1_7_to_V_1_8/">updates for the error detection rules</a> for German, English, Catalan, Italian, French, Breton, Polish, Esperanto</li>
  <li>Initial support for Greek and Portuguese with a few rules</li>
  <li>Support for language variants like British English, American English, Swiss German, ...</li>
  <li>Several bug fixes</li>
</ul>

<p><strong>2012-06-01:</strong> Use our new <a href="../ruleeditor/">rule creator</a> to easily create XML error detection rules for LanguageTool.</p>

<p><strong>2012-05-27:</strong> Want to improve LanguageTool? Read our new <a href="http://wiki.languagetool.org/development-overview#toc0">three-minute introduction</a>!</p>

<p>See <a href="archive.php">the news archive</a> for old news.</p>

</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
