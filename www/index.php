<?php
$page = "homepage";
$title = "LanguageTool";
$title2 = "Style and Grammar Checker";
$lastmod = "2013-04-01 17:00:00 CET";
$enable_fancybox = 1;
$enable_textcheck = 1;
include("../include/header.php");
include("../include/browser_language.php");
?>

<a title="LanguageTool installed as an add-on in LibreOffice" class="fancyboxImage"
   href="screenshots/art/screenshot_lo3.png"><img style="margin-left: 15px" width="216" height="160" align="right"
   src="screenshots/art/screenshot_lo3_very_small.png" alt="Screenshot of LanguageTool"/></a>

<p class="firstpara"><strong>LanguageTool is an Open Source proofreading software for English, French, German, Polish,
Romanian, and <?=show_link("more than 20 other languages", "languages/", 0) ?>. It finds many errors that a simple
spell checker cannot detect like mixing up <em>there/their</em> and it detects some grammar problems.</strong></p>

<p>LanguageTool finds errors by looking for text patterns defined in an XML file. Alternatively, error detection
rules can be written in Java.</p>

<?php
// language codes of languages that have their own page:
$languagesWithPage = array("br", "ca", "zh", "eo", "fr", "de", "it", "pl", "ru", "pt");
// names of those languages:
$languageNamesWithPage = array("Breton", "Catalan", "Chinese", "Esperanto", "French", "German", "Italian", "Polish", "Russian", "Portuguese");
$defaultLang = getDefaultLanguage();
error_reporting(E_ALL);
foreach ($languagesWithPage as $i => $value) {
    if ($value == $defaultLang || substr($defaultLang, 0, 3) == $value."-") {
      $langName = $languageNamesWithPage[$i];
      print "<p style='width:50%;padding:10px;background-color:#f1ffa9'>";
      switch ($langName) {
        case "Breton":
          print "Remerk: ur <a href='$value/'>bajenn vrezhonek</a> hon eus ivez.";
        break;
        case "Esperanto":
          print "Rimarko: ni ankaŭ havas <a href='$value/'>hejmpaĝon en Esperanto</a>.";
        break;
        case "French":
          print "Remarque : nous avons aussi une <a href='$value/'>page en français</a>.";
        break;
        case "German":
          print "Hinweis: Es gibt auch eine <a href='$value/'>Seite auf Deutsch</a>.";
        break;
        case "Italian":
          print "Nota: abbiamo anche una <a href='$value/'>pagina in italiano</a>.";
        break;
        case "Catalan":
          print "Nota: també tenim una <a href='$value/'>pàgina en català</a>.";
        break;
        case "Russian":
          print "Примечание: ещё у нас есть <a href='$value/'>страничка на русском языке</a>.";
        break;
        case "Portuguese":
          print "Nota: também temos uma <a href='$value/'>página em Português</a>.";
        break;
        default;
          print "Note: we also have a <a href='$value/'>page in $langName</a>.";
      }
      print "</p>";
    }
}
?>

<h2 style="margin-top: 40px">Try it online</h2>

<p>Use LanguageTool <?=show_link("in LibreOffice/OpenOffice.org, as a stand-alone application, or embedded in other applications", "usage/", 0)?>
  or try it out here:</p>

<?php
$checkSubmitButtonValue = "Check Text";
$showLanguageBox = 1;
$checkDefaultLang = "en-US";
$checkDefaultText = "Paste your own text here... or check this text too see an few of of the problems that LanguageTool can detecd.";
include("../include/checkform.php");
?>

<p>Try LanguageTool without installation, using Java WebStart.
Requires <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?> or later:<br />
<strong><?=show_link("Start LanguageTool (&gt;30&nbsp;MB)", "webstart/web/LanguageTool.jnlp", 0) ?></strong></p>

<h2>Download</h2>

<p>Using LanguageTool locally requires <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?> or later.
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
            <li>Use <em>Tools &rarr; Extension Manager &rarr; Add&hellip;</em> in LibreOffice/OpenOffice.org to install this file</li>
            <li><strong>Restart LibreOffice/OpenOffice.org</strong> after installation of the extension</li>
            <li>If you are using LibreOffice <!--3.5 or later--> and you want to check English texts:
              Use <em>Options &rarr; Language Settings &rarr; Writing Aids &rarr; Edit&hellip;</em> to disable LightProof and enable LanguageTool for English</li>
            <li>We recommend using
              <a href="http://www.libreoffice.org/download">LibreOffice 3.5.4 or later</a> or
              <a href="http://www.openoffice.org/download/">Apache OpenOffice 3.4.1 or later</a> as older versions
              have a bug that causes a freeze on startup</li>
          </ul>

        </td>

        <td></td>

        <td valign="top">

          <ul style="padding-left: 20px">
            <li>Unzip the file and start LanguageToolGUI.jar by double clicking it.
              Also see <?=show_link("other ways to use LanguageTool", "usage/", 0)?>.</li>
          </ul>
          
          <br/>
          
          <?php
          include("../include/downloadFx.php");
          ?>
          
          <ul style="padding-left: 20px">
            <li>Check selected text on websites and text in text fields. No Java required!</li>
          </ul>
          
        </td>

      </tr>
    </table>
</div>

<p>Untested daily builds of the current development version are available at
<?=show_link("the snapshot directory", "download/snapshots/?C=M;O=D", 0) ?>
 (<?=show_link("CHANGES.txt", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/languagetool/languagetool-core/CHANGES.txt", 0) ?>).
 Old releases are still available in the <?=show_link("download directory", "download/", 0) ?>.</p>


<h3>License &amp; Source Code</h3>

<p>LanguageTool is freely available under the <?=show_link("LGPL", "http://www.fsf.org/licensing/licenses/lgpl.html#SEC1", 0)?>.
The source is available <?=show_link("in SVN at Sourceforge", "http://sourceforge.net/scm/?type=svn&group_id=110216", 0) ?>.
The contents of this homepage is available under <?=show_link("CC BY-SA 3.0", "http://creativecommons.org/licenses/by-sa/3.0/", 0) ?>.</p>

<?php
include("../include/footer.php");
?>
