<!doctype html>
<html lang=br>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "br";
    $checkDefaultLangWithCountry = "br-FR";

    // ------------- TRANSLATIONS START HERE -------------

    $title = "LanguageTool - An difazier yezhadurel frank evit ar brezhoneg";

    $checkLanguage = array(
        'de-DE' => 'alamaneg',
        'ast' => 'astureg',
        'be' => 'belaruseg',
        'br' => 'brezhoneg',
        'da' => 'daneg',
        'eo' => 'esperanteg',
        'fr' => 'galleg',
        'gl' => 'galizeg',
        'el' => 'gresianeg',
        //'is' => 'islandeg',
        'it' => 'italianeg',
        'ja' => 'japaneg',
        'ca' => 'katalaneg',
        'km' => 'khmer',
        //'lt' => 'lituaneg',
        //'ml' => 'malayalam',
        'nl' => 'nederlandeg',
        'fa' => 'perseg',
        'pl' => 'poloneg',
        'pt' => 'portugaleg',
        'ro' => 'roumaneg',
        'ru' => 'rusianeg',
        'en-US' => 'saozneg',
        'zh' => 'sinaeg',
        'sk' => 'slovakeg',
        'sl' => 'sloveneg',
        'es' => 'spagnoleg',
        'sv' => 'svedeg',
        'tl' => 'tagalog',
        'ta' => 'tamileg',
        'uk' => 'ukraineg'
    );

    $checkSubmitButtonValue = 'Gwiriañ';
    $checkSubmitButtonTitle = "Gwiriañ an destenn, pe Reol-Enankañ";
    $toggleFullscreenMode = "skrammad a-bezh pe get";

    $introText1 = "Un difazier yezhadurel liesyezhek frank ha digoust eo <strong>Language&shy;Tool</strong>.";
    $introText2 = "Barrek eo da wiriañ testennoù e brezhoneg pe e <a href='/languages/'>yezhoù all</a>.";
    $contributeLink = "Kenober!";

    $downloadHeadline = "Pellgargit";
    $downloadRequiresJava = "Ret eo kaout Java {version}+";
    $downloadTitle = "Evit <strong>LibreOffice</strong> / <strong>OpenOffice</strong>";
    $downloadTitleStandAlone = "Emren";
    $downloadLabelFx = "Evit <strong>Firefox</strong>";
    $downloadLabelChrome = "Evit <strong>Chrome</strong>";
    $downloadLabelBrowserAddOn = "Enlugellad";
    $checklistText = "Please see <a href='/issues/'>our checklist</a> if you experience problems.";
    $otherDownloadsText = "Download <a href='/download/'>old releases</a> or <a href='/download/snapshots/?C=M;O=D'>daily builds</a>.";
    $webstartText = "Start <a href='/webstart/web/LanguageTool.jnlp'>with Java WebStart</a>.";
    $firefoxLink = '<a href="/firefox/">Muioc’h a ditouroù</a>';
    $chromeLink = '<a href="/chrome/">Muioc’h a ditouroù</a>';

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>

<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

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
Philippe Basciano-Le Gall, Stefan Carpentier, Pierre Morvan ha
Gurvan Parscau.</p>
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
<a href="http://www.drouizig.org/index.php/fr/binviou-fr/an-drouizig-difazier/238-an-drouizig-difazier-l-outil">hini An Drouizig</a>.</p>

<h2>Aotre-implijout</h2>
<p>
Gallout a rit implijout LanguageTool gant an aotre
<a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
</p>
<div style="height:30px"></div>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
