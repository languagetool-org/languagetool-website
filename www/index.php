<?php
$page = "homepage";
$title = "LanguageTool";
$title2 = "Style and Grammar Checker";
$lastmod = "2013-01-05 15:00:00 CET";
$enable_fancybox = 1;
include("../include/header.php");
include("../include/browser_language.php");
?>

<a title="LanguageTool installed as an add-on in LibreOffice 3.3" class="fancyboxImage"
   href="screenshots/art/screenshot_lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="screenshots/art/screenshot_lo3_very_small.png" alt="Screenshot of LanguageTool"/></a>

<p class="firstpara"><strong>LanguageTool is an Open Source proofreading software for English, French, German, Polish,
Romanian, and <?=show_link("more than 20 other languages", "languages/", 0) ?>. It finds many errors that a simple
spell checker cannot detect like mixing up <em>there/their</em> and it detects some grammar problems.</strong></p>

<p>LanguageTool finds errors by looking for text patterns defined in an XML file. Alternatively, error detection
rules can be written in Java.</p>

<?php
// language codes of languages that have their own page:
$languagesWithPage = array("br", "ca", "zh", "eo", "de", "it", "pl", "ru");
// names of those languages:
$languageNamesWithPage = array("Breton", "Catalan", "Chinese", "Esperanto", "German", "Italian", "Polish", "Russian");
$defaultLang = getDefaultLanguage();
error_reporting(E_ALL);
foreach ($languagesWithPage as $i => $value) {
    if ($value == $defaultLang || substr($defaultLang, 0, 3) == $value."-") {
      $langName = $languageNamesWithPage[$i];
      switch ($langName) {
        case "Italian":
          print "<p style='width:50%;padding:10px;background-color:#f1ffa9'>Nota: abbiamo anche una <a href='$value/'>pagina in Italiano</a>.</p>";
        break;
        default;
          print "<p style='width:50%;padding:10px;background-color:#f1ffa9'>Note: we also have a <a href='$value/'>page in $langName</a>.</p>";
      }
    }
}
?>

<h2 style="margin-top: 40px">Try it online</h2>

<p>Use LanguageTool <?=show_link("in LibreOffice/OpenOffice.org, as a stand-alone application, or embedded in other applications", "usage/", 0)?>
  or try it out here:</p>

<?php
$checkSubmitButtonValue = "Check Text";
$showLanguageBox = 1;
$checkDefaultLang = "auto";
$checkDefaultText = "Paste your own text here... or check this text too see an few of of the problems that LanguageTool can detecd.";
include("../include/checkform.php");
?>

<p><strong>Try LanguageTool without installation, using Java WebStart.</strong>
Requires <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?> or later:<br />
<strong><?=show_link("Start LanguageTool (&gt;30&nbsp;MB)", "webstart/web/LanguageTool.jnlp", 0) ?></strong></p>

<h2>Download</h2>

<p>LanguageTool requires <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?> or later - we recommend Java 6 for now,
as some users have performance problems when using LanguageTool with Java 7.
<strong>Having problems? Please see the <?=show_link("list of common problems", "issues", 0)?>.</strong></p>

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
              <a href="http://www.libreoffice.org/download">LibreOffice 3.5.4</a></strong> (or later) or
              <strong><a href="http://www.openoffice.org/download/">Apache OpenOffice 3.4.1</a></strong> (or later) as older versions
              have a bug that causes a freeze on startup</li>
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

<p>Untested daily builds of the current development version are available at
<?=show_link("the snapshot directory", "download/snapshots/?C=M;O=D", 0) ?>
 (<?=show_link("CHANGES.txt", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/CHANGES.txt", 0) ?>).
 Old releases are still available in the <?=show_link("download directory", "download/", 0) ?>.</p>


<h3>License &amp; Source Code</h3>

<p>LanguageTool is freely available under the <?=show_link("LGPL", "http://www.fsf.org/licensing/licenses/lgpl.html#SEC1", 0)?>.
The source is available <?=show_link("in SVN at Sourceforge", "http://sourceforge.net/scm/?type=svn&group_id=110216", 0) ?>.
The contents of this homepage is available under <?=show_link("CC BY-SA 3.0", "http://creativecommons.org/licenses/by-sa/3.0/", 0) ?>.</p>

<?php
include("../include/footer.php");
?>
