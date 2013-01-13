<?php
$page = "fr";
$title = "LanguageTool";
$title2 = "An difazier yezhadurel frank evit ar brezhoneg";
$lastmod = "2013-01-13 10:50 CET";
$enable_textcheck = 1;
$enable_fancybox = 1;
include("../../include/header.php");
?>

<p class="firstpara"><strong>Un difazier yezhadurel liesyezhek frank ha digoust eo LanguageTool.</strong>
Barrek eo da wiriañ testennoù e brezhoneg pe e <a href="http://www.languagetool.org/languages/">yezhoù all</a>.
Mont a ra mat en-dro dindan Windows, Linux pe MacOs gant LibreOffice/OpenOffice.
</p>
<p>
LanguageTool a gav fazioù evel ar c’hemmadurioù direizh (ar paotred → ar baotred) hag all, fazioù na
vezont ket kavet gant un difazier skrivadurel. Displegañ a ra ar fazioù ha kinnig a ra
reizhadennoù. Ne gav ket fazioù skrivadurel avat. Met posupl
eo implijout ur <a href="http://extensions.libreoffice.org/extension-center/an-drouizig-breton-spellchecker">
geriadur brezhoneg</a> gant LanguageTool ivez.
</p>

<h2>LanguageTool enlinenn</h2>

<?php
$checkSubmitButtonValue = 'Gwiriañ an desten';
$showLanguageBox = 1;

$checkDefaultLang = 'br';

$checkLanguage['ast']   = 'astureg';
$checkLanguage['be']    = 'belaruseg';
$checkLanguage['br']    = 'brezhoneg';
$checkLanguage['ca']    = 'katalaneg';
$checkLanguage['da']    = 'daneg';
$checkLanguage['de-DE'] = 'alamaneg';
$checkLanguage['en-US'] = 'saozneg';
$checkLanguage['eo']    = 'esperanteg';
$checkLanguage['es']    = 'spagnoleg';
$checkLanguage['fr']    = 'galleg';
$checkLanguage['gl']    = 'galizeg';
$checkLanguage['is']    = 'islandeg';
$checkLanguage['it']    = 'italianeg';
$checkLanguage['km']    = 'khmer';
$checkLanguage['lt']    = 'lituaneg';
$checkLanguage['ml']    = 'malayalam';
$checkLanguage['nl']    = 'nederlandeg';
$checkLanguage['pl']    = 'poloneg';
$checkLanguage['ro']    = 'roumaneg';
$checkLanguage['ru']    = 'rusianeg';
$checkLanguage['sk']    = 'slovakeg';
$checkLanguage['sl']    = 'sloveneg';
$checkLanguage['sv']    = 'svedeg';
$checkLanguage['tl']    = 'tagalog';
$checkLanguage['uk']    = 'ukraineg';
$checkLanguage['zh']    = 'sinaeg';

$checkDefaultText = "Lakait amañ ho testenn vrezhonek da vezañ gwiriet. Pe implijit an frazenn-mañ gant meur a fazioù yezharel.";
include("../../include/checkform.php");
?>

<h2>Pellgargañ</h2>

<div class="downloadSection">
  <table width="100%">
    <tr>
      <td>
        <?php
          $downloadTitle = "Pellgargit LanguageTool";
          $downloadLabel = "evit LibreOffice/OpenOffice";
          $downloadVersionLabel = "Stumm";
          $downloadPath  = "/download";
          include("../../include/download.php");
        ?>
      </td>
      <td>
        <?php
          $downloadTitleStandAlone = "Pellgargit LanguageTool";
          $downloadLabelStandAlone = "hep LibreOffice/OpenOffice";
          $downloadVersionLabelStandAlone = "Stumm";
          $downloadPathStandAlone  = "/download";
          include("../../include/downloadStandAlone.php");
        ?>
      </td>
    </tr>
  </table>
</div>

Ar restr da bellgargañ a dalvez evit ar brezhoneg hag an holl yezhoù all.

<h2>Skramm skouer</h2>

<img src="images/languagetool-brezhoneg.png" alt="LanguageTool"/>

<h2>Ho skoazell</h2>
<p>
Ezhomm hon eus eus ho skoazell evit gwellaat LanguageTool e brezhoneg.
Mennozhioù evit diskoachañ muioc’h a fazioù hoc’h eus marteze? Pe marteze hoc’h eus
kavet ur gudenn bennak gant LanguageTool brezhoneg? Skrivit da
<a href="mailto:dominique.pelle@gmail.com">zDominique Pellé</a>,
pe skrivit er <a href="http://www.languagetool.org/forum/">forom</a>.
</p>
<p>
Trugarez d’ar re o deus sikouret da sevel LanguageTool e brezhoneg:
Fulup Jakez, Joseph Monfort, Denis Arnaud ha Thierry Vignaud.
</p>
<h2>Aotre-implijout</h2>
<p>
Gallout a rit implijout LanguageTool gant an aotre
<a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
</p>
<div style="height:30px"></div>

<?php
include("../../include/footer.php");
?>
