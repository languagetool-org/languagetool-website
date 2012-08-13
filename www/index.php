<?php
$page = "homepage";
$title = "LanguageTool";
$title2 = "Style and Grammar Checker";
$lastmod = "2012-08-13 18:21:00 CET";
$enable_fancybox = 1;
include("../include/header.php");
?>

<a title="LanguageTool installed as an add-on in LibreOffice 3.3" class="fancyboxImage"
   href="screenshots/art/screenshot_lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="screenshots/art/screenshot_lo3_very_small.png" alt="Screenshot of LanguageTool"/></a>

<p class="firstpara"><strong>LanguageTool is an Open Source proofreading software for English, French, German, Polish,
Romanian, and <?=show_link("more than 20 other languages", "languages/", 0) ?>. It finds many errors that a simple
spell checker cannot detect like mixing up <em>there/their</em> and it detects some grammar problems.</strong></p>

<p>LanguageTool finds errors by looking for text patterns defined in an XML file. Alternatively, error detection
rules can be written in Java.</p>


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
<strong><?=show_link("Start LanguageTool (&gt;30&nbsp;MB)", "webstart/web/LanguageTool.jnlp", 0) ?></strong></p>

<h2>Download</h2>

<p>LanguageTool requires <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?> or later - we recommend Java 6 for now,
as some users have performance problems when using LanguageTool with Java 7.
Having problems? Please see the <?=show_link("list of common problems", "issues", 0)?>.</p>

<div class="downloadSection">
    <table width="100%">
      <tr>
        <td>
           <?php
           $downloadPath = "download";
           include("../include/download.php");
           ?>
        </td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
           <?php
           $downloadPath = "download";
           include("../include/downloadStandAlone.php");
           ?>
        </td>
      </tr>
      <tr>
        <td valign="top">

          <ul style="padding-left: 20px">
            <li><strong>We strongly recommend using
              <a href="http://www.libreoffice.org/download">LibreOffice 3.5.4</a> or later</strong>, as older versions of both LibreOffice and OpenOffice have a bug
              that causes a freeze on startup</li>
            <li>Use <em>Tools -&gt; Extension Manager -&gt; Add...</em> in LibreOffice/OpenOffice.org to install this file</li>
            <li><strong>Restart OpenOffice.org/LibreOffice</strong> after installation of the extension</li>
            <li>If you are using LibreOffice 3.5.x and you want to check English texts:
              Use <em>Options -> Language Settings -> Writing Aids -> Edit...</em> to disable LightProof and enable LanguageTool for English</li>
          </ul>

        </td>

        <td></td>

        <td valign="top">

          <ul style="padding-left: 20px">
            <li>Unzip the file and start LanguageToolGUI.jar by double clicking it.
              Also see <?=show_link("other ways to use LanguageTool", "usage/", 0)?>.</li>
          </ul>

        </td>

      </tr>
    </table>
</div>

<p>Please report bugs <?=show_link("in our forum", "/forum", 0)?> or
  <?=show_link("in the Sourceforge bug tracker", "http://sourceforge.net/tracker/?group_id=110216&amp;atid=655717", 0)?>.</p>

<p>Untested daily builds of the current development version are available at
<?=show_link("the snapshot directory", "download/snapshots/?C=M;O=D", 0) ?>
 (<?=show_link("CHANGES.txt", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/CHANGES.txt", 0) ?>).
 Old releases are still available in the <?=show_link("download directory", "download/", 0) ?>.</p>

<h2>News</h2>

<p><strong>2012-06-30:</strong> Released LanguageTool 1.8. Changes include:</p>
<ul>
  <li>Spell checking is now included (not used in LibreOffice/OpenOffice)</li>
  <li>Many <?=show_link("updates for the error detection rules", "changes/V_1_7_to_V_1_8/", 0) ?> for German, English, Catalan, Italian, French, Breton, Polish, Esperanto</li>
  <li>Initial support for Greek and Portuguese with a few rules</li>
  <li>Support for language variants like British English, American English, Swiss German, ...</li>
  <li>Several bug fixes</li>
</ul>

<p><strong>2012-06-01:</strong> Use our new <?=show_link("rule creator", "ruleeditor/", 0) ?> to easily create XML error detection rules for LanguageTool.</p>

<p><strong>2012-05-27:</strong> Want to improve LanguageTool? Read our new <?=show_link("three-minute introduction", "development/#intro", 0) ?>!</p>

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
