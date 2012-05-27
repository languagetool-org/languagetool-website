<?php
$page = "homepage";
$title = "LanguageTool";
$title2 = "Style and Grammar Checker";
$lastmod = "2012-05-27 10:21:00 CET";
$enable_fancybox = 1;
include("../include/header.php");
?>

<a title="LanguageTool installed as an add-on in LibreOffice 3.3" class="fancyboxImage"
   href="screenshots/art/screenshot_lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="screenshots/art/screenshot_lo3_very_small.png" alt="Screenshot of LanguageTool"/></a>

<p class="firstpara"><strong>LanguageTool is an Open Source style and grammar proofreading software for English, French, German, Polish,
Dutch, Romanian, and a lot of <?=show_link("other languages", "languages/", 0) ?>.</strong>
You can think of LanguageTool as a software to detect errors that a simple spell checker cannot detect, e.g. mixing
up <em>there/their</em>, <em>no/now</em> etc. It can also detect some grammar mistakes. It does not include spell checking.</p>

<p>LanguageTool will find errors for which a rule is defined in its 
language-specific configuration files. Rules for detecting more complicated errors can be written in Java.</p>

<h2 style="margin-top: 40px">Try it online</h2>

<p>Use LanguageTool <?=show_link("in LibreOffice/OpenOffice.org, as a stand-alone application, or embedded in other applications", "usage/", 0)?>
  or try it out here:</p>

<?php
$checkSubmitButtonValue = "Check Text";
$showLanguageBox = 1;
$checkDefaultLang = "auto";
$checkDefaultText = "Paste your own text here... or check this text too see a few of the problems that ".
  "that LanguageTool can detect. Did you notice that their is no spelcheckin included?";
include("../include/checkform.php");
?>

<p><strong>Try LanguageTool without installation, using Java WebStart.</strong>
Requires <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?> or later:<br />
<strong><?=show_link("Start LanguageTool (29&nbsp;MB)", "webstart/web/LanguageTool.jnlp", 0) ?></strong></p>


<h2>Download</h2>

<div class="downloadSection">
	<div id="downloadButton">
        <?php
        $downloadPath = "download";
        include("../include/download.php");
        ?>
	</div>
	<ul>
		<li>Requires <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?> or later -<strong> we recommend Java 6 for now,
          as many users have performance problems when using LanguageTool with Java 7</strong></li>
        <li>Use <em>Tools -&gt; Extension Manager -&gt; Add...</em> in LibreOffice/OpenOffice.org to install it
          or see <?=show_link("other ways to use LanguageTool", "usage/", 0)?>.</li>
        <li><strong>Restart OpenOffice.org/LibreOffice</strong> after installation of this extension.</li>
        <li>If you are using LibreOffice 3.5 and you want to check English texts:
          Use <em>Options -> Language Settings -> Writing Aids -> Edit...</em> to disable LightProof and enable LanguageTool for English</li>
        <li>Having problems? Please see the <?=show_link("list of common problems", "issues", 0)?>.</li>
		<li>Please report bugs <?=show_link("in our forum", "/forum", 0)?> or
          <?=show_link("in the Sourceforge bug tracker", "http://sourceforge.net/tracker/?group_id=110216&amp;atid=655717", 0)?>.</li>
	</ul>
</div>

<p>Untested daily builds of the current development version are available at
<?=show_link("the snapshot directory", "download/snapshots/", 0) ?>
 (<?=show_link("CHANGES.txt", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/CHANGES.txt", 0) ?>).
 Old releases are still available in the <?=show_link("download directory", "download/", 0) ?>.</p>

<h2>News</h2>

<p><strong>2012-05-27:</strong> Want to improve LanguageTool? Read our new <?=show_link("three minute introduction", "development/#intro") ?>!

<p><strong>2012-03-25:</strong> Released LanguageTool 1.7. Changes include:</p>
<ul>
    <li><?=show_link("Rule updates", "changes/V_1_6_to_V_1_7/", 0) ?> for several languages (French, English, Breton, Russian, Esperanto, German)</li>
    <li>Several small bug fixes</li>
    <li>For a detailed list of changes, see the <?=show_link("Changelog", "download/CHANGES.txt", 0) ?></li>
</ul>

<p><strong>2012-02-04:</strong> See our new language-specific pages for <?=show_link("German", "de/", 0) ?>, <?=show_link("Russian", "ru/", 0) ?>, and <?=show_link("Esperanto", "eo/", 0) ?></p>

<?=show_link("Follow us on twitter", "http://twitter.com/languagetoolorg", 0) ?> (also <?=show_link("via RSS", "http://api.twitter.com/1/statuses/user_timeline.rss?screen_name=languagetoolorg", 0) ?>) for the latest news.
See <?=show_link("the news archive", "news/", 0) ?> for old news.


<h2>License &amp; Source Code</h2>

<p>LanguageTool is freely available under the <?=show_link("LGPL", "http://www.fsf.org/licensing/licenses/lgpl.html#SEC1", 0)?>.
The source is available <?=show_link("at Sourceforge", "http://sourceforge.net/projects/languagetool/", 0) ?> via SVN.
The contents of this homepage is available under <?=show_link("CC BY-SA 3.0", "http://creativecommons.org/licenses/by-sa/3.0/", 0) ?>.</p>

<div style="height:50px"></div>

<?php
include("../include/footer.php");
?>
