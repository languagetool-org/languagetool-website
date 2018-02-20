<!doctype html>
<html lang=es>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    include("../../include/browser_language.php");
    $checkDefaultLang = getDefaultLanguage("es");
    $checkDefaultLangWithCountry = getDefaultLanguageAndCountry("es-ES");

    // ------------- TRANSLATIONS START HERE -------------
    
    $title = "LanguageTool - corrector gramatical y de estilo";

    $checkLanguage = array(
        'auto' => 'detección automática',    
        'de-DE' => 'alemán',
        'ast' => 'asturiano',
        'be' => 'bielorruso',
        'br' => 'bretón',
        'km' => 'camboyano',
        'ca' => 'catalán',
        'zh' => 'chino',
        'da' => 'danés',
        'sk' => 'eslovaco',
        'sl' => 'esloveno',
        'es' => 'español',
        'eo' => 'esperanto',
        'fr' => 'francés',
        'gl' => 'gallego',
        'el' => 'griego',
        'nl' => 'holandés',
        'en-US' => 'inglés',
        //'is' => 'islandés',
        'it' => 'italiano',
        'ja' => 'japonés',
        //'lt' => 'lituano',
        //'ml' => 'malayalam',
        'fa' => 'persa',
        'pl' => 'polaco',
        'pt' => 'portugués',
        'ro' => 'rumano',
        'ru' => 'ruso',
        'sv' => 'sueco',
        'tl' => 'tagalo',
        'ta' => 'tamil',
        'uk' => 'ucraniano'
    );

    $addYourTextHere = "Escriba un texto aquí"; // used for languages that have no demo text
    $checkSubmitButtonValue = "Verificar texto";
    $checkSubmitButtonTitle = "Verificar texto - también sirve presionar Ctrl+Return";
    $demoTextLink = "Insertar texto de demostración";
    $toggleFullscreenMode = "Cambiar a pantalla completa";

    $introText1 = "<strong>LanguageTool</strong> es un software de Código Abierto de verificación gramatical, ortográfica y de estilo. Puedes utilizarlo en esta página o descargarlo gratuitamente.";
    $introText2 = "Además de español, soporta más de <a href='/languages/'>20 idiomas</a>.";
    $addToChrome = "Añadir a Chrome <span>gratis y sin registro</span>";
    $addToFirefox = "Añadir a Firefox <span>gratis y sin registro</span>";
    $gsoc1 = "¿Eres estudiante de Informática?";
    $gsoc2 = "¡Inscríbete para el GSoC 2018!";

    $contributeLink = "¡Colabora!";
    $forumHeadline = "Foro";
    $developmentHeadline = "Desarrollo";
    $compareEditionsText = "Comparar versiones";
    $moreIntegrationsText = "Otros complementos";
    $downloadHeadline = "Descargar";
    $downloadRequiresJava = "Requiere Java {version}+";
    $downloadTitle = "Para <strong>LibreOffice</strong> / <strong>OpenOffice</strong>";
    $downloadTitleStandAlone = "Para <strong>tu escritorio</strong>";
    $downloadLabelFx = "Para <strong>Firefox</strong>";
    $downloadLabelChrome = "Para <strong>Chrome</strong>";
    $downloadLabelBrowserAddOn = "Extensión para el navegador";
    $downloadLabelGoogleDocs = "Para <strong>Google Docs</strong>";
    $downloadLabelAddOn = "Extensión";
    $checklistText = "¿Problemas? Mira nuestra <a href='/issues/'>página de ayuda</a>.";
    $otherDownloadsText = "Descarga versiones <a href='/download/'>antiguas</a> o <a href='/download/snapshots/?C=M;O=D'>diarias</a>.";
    $webstartText = "LanguageTool funciona con <a href='/webstart/web/LanguageTool.jnlp'>Java WebStart</a>.";
    $firefoxLink = '<a href="/firefox/">Más información</a>';
    $chromeLink = '<a href="/chrome/">Más información</a>';
    
    // ------------- TRANSLATIONS END HERE -------------
    ?>
<?php include("../../include/header.php"); ?>
<?php include("../../include/header2.php"); ?>
</head>
<body>

<?php include("../../include/page_start.php"); ?>

<!--
<div id="languageContent">
</div>-->

<?php include("../../include/page_end.php"); ?>

</body>
</html>
