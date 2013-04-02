<?php
$page = "news";
$title = "LanguageTool";
$title2 = "News";
$lastmod = "2013-04-02 17:37:00 CET";
include("../../include/header.php");
?>

<p><?=show_link("Follow us on twitter", "http://twitter.com/languagetoolorg", 0) ?>
  (also <?=show_link("via RSS", "http://api.twitter.com/1/statuses/user_timeline.rss?screen_name=languagetoolorg", 0) ?>) for the latest news.</p>

<p class="firstpara"><strong>2013-03-31:</strong> Released LanguageTool 2.1. Changes include:</p>
<ul>
  <li>Many <?=show_link("updates for the error detection rules", "../changes/V_2_0_to_languagetool-2.1/", 0) ?> for English, French, German, Portuguese, Polish, Russian, Breton, Esperanto, Catalan and Italian</li>
  <li>For Java developers LanguageTool is now modular: instead of one big JAR, there are several. 
    They can be found <?=show_link("at Maven Central", "http://search.maven.org/#search|ga|1|languagetool", 0) ?>.</li>
  <li>Small bug fixes</li>
  <li>See the <?=show_link("Change Log", "../download/CHANGES.txt", 0) ?> for a complete list of changes</li>
</ul>

<p class="firstpara"><strong>2012-12-30:</strong> Released LanguageTool 2.0. Changes include:</p>
<ul>
  <li>Many <?=show_link("updates for the error detection rules", "../changes/V_1_9_to_V_2_0/", 0) ?> for English, Spanish, French, German, Portuguese, Russian, Breton, Catalan, Esperanto, and Ukrainian</li>
  <li>The embedded HTTP server can now be started from the context menu if LanguageTool is running in the system tray</li>
  <li>Small bug fixes</li>
  <li>See the <?=show_link("Change Log", "../download/CHANGES.txt", 0) ?> for a complete list of changes</li>
</ul>

<p class="firstpara"><strong>2012-10-10:</strong> LanguageTool 1.9 is now available
  <?=show_link("on Maven Central", "http://search.maven.org/#search|ga|1|languagetool", 0) ?> for Java developers</p>

<p class="firstpara"><strong>2012-09-30:</strong> Released LanguageTool 1.9. Changes include:</p>
<ul>
  <li>Initial support for Japanese with about 20 rules</li>
  <li>Many <?=show_link("updates for the error detection rules", "../changes/V_1_8_to_V_1_9/", 0) ?> for Danish, German, English, Catalan, Russian, Chinese, French, Breton, Portuguese, Esperanto</li>
  <li>Several bug fixes</li>
</ul>

<p class="firstpara"><strong>2012-06-30:</strong> Released LanguageTool 1.8. Changes include:</p>
<ul>
  <li>Spell checking is now included (not used in LibreOffice/OpenOffice)</li>
  <li>Many <?=show_link("updates for the error detection rules", "../changes/V_1_7_to_V_1_8/", 0) ?> for German, English, Catalan, Italian, French, Breton, Polish, Esperanto</li>
  <li>Initial support for Greek and Portuguese with a few rules</li>
  <li>Support for language variants like British English, American English, Swiss German, ...</li>
  <li>Several bug fixes</li>
</ul>

<p><strong>2012-06-01:</strong> Use our new <?=show_link("rule creator", "../ruleeditor/", 0) ?> to easily create XML error detection rules for LanguageTool.</p>

<p><strong>2012-05-27:</strong> Want to improve LanguageTool? Read our new <?=show_link("three-minute introduction", "../development/#intro", 0) ?>!</p>

<p>See <?=show_link("the news archive", "archive.php", 0) ?> for old news.</p>

<div style="height: 400px"></div>

<?php
include("../../include/footer.php");
?>
