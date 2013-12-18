<!doctype html>
<html lang=br>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $title = "LanguageTool - An difazier yezhadurel frank evit ar brezhoneg";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textcontent">

<p class="firstpara"><strong>Un difazier yezhadurel liesyezhek frank ha digoust eo LanguageTool.</strong>
Barrek eo da wiriañ testennoù e brezhoneg pe e <a href="http://www.languagetool.org/languages/">yezhoù all</a>.
Mont a ra mat en-dro dindan Windows, Linux pe MacOs gant LibreOffice/OpenOffice.
</p>
<p>
LanguageTool a gav fazioù evel ar c’hemmadurioù direizh
(ar paotred → ar baotred) hag all, fazioù na vezont ket kavet
gant un difazier skrivadurel. Displegañ a ra ar fazioù ha
kinnig a ra reizhadennoù a-wechoù. LanguageTool evit
OpenOffice/LibreOfice ne gav ket fazioù reizhskrivañ avat.
Met posupl eo implijout ur
<a href="http://extensions.libreoffice.org/extension-center/an-drouizig-breton-spellchecker">
geriadur brezhoneg</a> gant LanguageTool ivez.
</p>

<h2>LanguageTool enlinenn</h2>

<?php
$checkSubmitButtonValue = 'Gwiriañ an destenn';
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
$checkLanguage['pt']    = 'portugaleg';
$checkLanguage['ro']    = 'roumaneg';
$checkLanguage['ru']    = 'rusianeg';
$checkLanguage['sk']    = 'slovakeg';
$checkLanguage['sl']    = 'sloveneg';
$checkLanguage['sv']    = 'svedeg';
$checkLanguage['tl']    = 'tagalog';
$checkLanguage['uk']    = 'ukraineg';
$checkLanguage['zh']    = 'sinaeg';

$checkDefaultText = "Lakait amañ ho testenn vrezhonek da vezañ gwiriet. Pe implijit an frazenn-mañ gant meur a fazioù yezhadurel.";
include("../../include/checkform-embedded.php");
?>

<h2>Pellgargañ</h2>

<?php
$downloadTitle = "Pellgargit LanguageTool evit <strong>LibreOffice/OpenOffice</strong>";
$downloadTitleStandAlone = "Pellgargit LanguageTool hep <strong>LibreOffice/OpenOffice</strong>";
$downloadLabelFx = "Pellgargit LanguageToolFx <strong>evit Firefox</strong>";
?>
<div id="download" style="margin: 0">
    <?php include("../../include/pages/download-buttons.php"); ?>
</div>

<p>Ar restr da bellgargañ a dalvez evit ar brezhoneg hag an holl yezhoù all.</p>

<h2>Skramm skouer</h2>

<img src="images/languagetool-brezhoneg.png" alt="LanguageTool"/>

<h2>Ho skoazell</h2>
<p>
Ezhomm hon eus eus ho skoazell evit gwellaat LanguageTool e brezhoneg.
Mennozhioù evit diskoachañ muioc’h a fazioù hoc’h eus marteze? Pe marteze hoc’h eus
kavet ur gudenn bennak gant LanguageTool brezhoneg? Skrivit da
<a href="mailto:dominique.pelle@gmail.com">zDominique Pellé</a>,
pe skrivit er <a href="http://www.languagetool.org/forum/">forom</a>.</p>

<h2>Trugarez</h2>
<p>
Trugarez d’ar re o deus sikouret da sevel LanguageTool e brezhoneg:
Fulup Jakez, Joseph Monfort, Denis Arnaud, Thierry Vignaud,
Philippe Basciano-Le Gall ha Stefan Carpentier.</p>
<p>
Ne vefe ket posupl an difazier LanguageTool hep ar geriadur
brezhonek Apertium. Trugarez neuze da Francis Tyers ha
Fulup Jakez evit o labour gant ar raktres
<a href="http://www.apertium.org/">Apertium</a>. 
<p>
Trugarez ivez d’ar gevredigezh
<a href="http://www.drouizig.org">An Drouizig</a> evit ar
<a href="http://extensions.libreoffice.org/extension-center/an-drouizig-breton-spellchecker">geriadur brezhonek Hunspell</a>
hag a zo implijet evit kavout fazioù reizhskrivañ gant LanguageTool.
Diwallit avat: disheñvel eo difazier yezhadurel LanguageTool diouzh
<a href="http://www.drouizig.org/index.php?option=com_content&view=category&id=38&Itemid=58&lang=br">hini An Drouizig</a>.</p>

<h2>Aotre-implijout</h2>
<p>
Gallout a rit implijout LanguageTool gant an aotre
<a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
</p>
<div style="height:30px"></div>

</div>

<?php
include("../../include/footer.php");
?>

</body>
</html>
