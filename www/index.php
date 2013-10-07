<?php
$page = "homepage";
$title = "LanguageTool";
$title2 = "Style and Grammar Checker";
$lastmod = "2013-09-30 14:00:00 CET";
$enable_fancybox = 1;
$enable_textcheck = 1;
$enable_download_dialogs = 1;
include("../include/header.php");
include("../include/browser_language.php");
?>

<a title="LanguageTool installed as an add-on in LibreOffice" class="fancyboxImage"
   href="screenshots/art/screenshot_lo3.png"><img style="margin-left: 15px" width="216" height="160" align="right"
   src="screenshots/art/screenshot_lo3_very_small.png" alt="Screenshot of LanguageTool"/></a>

<p class="homepageIntroText"><strong>LanguageTool is an Open Source proofreading software for English, French, German, Polish,
and <?=show_link("more than 20 other languages", "languages/", 0) ?>. It finds many errors that a simple
spell checker cannot detect like mixing up <em>there/their</em> and it detects some grammar problems.</strong></p>

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
          print "Внимание: у нас есть <a href='$value/'>страничка на русском языке</a>!";
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

<?php
$checkSubmitButtonValue = "Check Text";
$showLanguageBox = 1;
$checkDefaultLang = "en-US";
$checkDefaultText = "Paste your own text here... or check this text too see an few of of the problems that LanguageTool can detecd.";
include("../include/checkform.php");
?>

<p>Try LanguageTool without installation, using Java WebStart:<br/>
<?=show_link("Start LanguageTool", "webstart/web/LanguageTool.jnlp", 0) ?> (requires
<a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;7</a> or later)</p>

<h2>Download</h2>

<p>Using LanguageTool locally requires <?=show_link("Java&nbsp;7", "http://www.java.com/en/download/manual.jsp", 0)?> or later.
<strong>Having problems? Please see the <?=show_link("list of common problems", "issues", 0)?>.</strong></p>

<noscript class="warning">Please activate Javascript - we use it to display some tips after you start a download</noscript>

<div class="downloadSection">
    <table width="100%">
      <tr>
        <td>
           <?php
           $downloadPath = "download";
           $onclick = "onclick=\"setTimeout(function(){showDownloadOfficeThanks()},500)\"";
           include("../include/download.php");
           ?>
            <div style="margin-left: 5px">
                <a href="#" onclick="showDownloadOfficeThanks()">Help</a>
            </div>
        </td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
           <?php
           $downloadPath = "download";
           $onclick = "onclick=\"setTimeout(function(){showDownloadStandaloneThanks()},500)\"";
           include("../include/downloadStandAlone.php");
           ?>
            <div style="margin-left: 5px">
                <a href="#" onclick="showDownloadStandaloneThanks()">Help</a>
            </div>
        </td>
      </tr>
      <tr>

        <td valign="top" align="middle" colspan="3">

          <br/>

          <?php
          include("../include/downloadFx.php");
          ?>

          <div style="margin-left: 5px">
              Check selected text on websites and<br/>text in text fields. No Java required!
          </div>

        </td>

      </tr>
    </table>
</div>

<p>Untested daily builds of the current development version are available at
<?=show_link("the snapshot directory", "download/snapshots/?C=M;O=D", 0) ?>
 (<?=show_link("CHANGES.txt", "https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.txt", 0) ?>).
 Old releases are still available in the <?=show_link("download directory", "download/", 0) ?>.</p>


<h3>License &amp; Source Code</h3>

<p>LanguageTool is freely available under the <?=show_link("LGPL", "http://www.fsf.org/licensing/licenses/lgpl.html#SEC1", 0)?>.
The source is available <?=show_link("on github", "https://github.com/languagetool-org/", 0) ?>.</p>

<?php
include("../include/footer.php");
?>
