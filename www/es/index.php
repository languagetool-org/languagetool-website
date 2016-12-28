<!doctype html>
<html lang=es>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "es";
    $checkDefaultLangWithCountry = "es-ES";

    // ------------- TRANSLATIONS START HERE -------------
    
    $title = "LanguageTool - corrector gramatical y de estilo";

    $checkLanguage = array(
        'ast' => 'asturiano',
        'br' => 'bretón',
        'zh' => 'chino',
        'da' => 'danés',
        'de-DE' => 'alemán',
        'en-US' => 'inglés',
        'eo' => 'esperanto',
        'fr' => 'francés',
        'gl' => 'gallego',
        'el' => 'griego',
        'is' => 'islandés',
        'it' => 'italiano',
        'ja' => 'japonés',
        'ca' => 'catalán',
        'km' => 'camboyano',
        //'lt' => 'lituano',
        //'ml' => 'malayalam',
        'nl' => 'holandés',
        'pl' => 'polaco',
        'pt' => 'portugués',
        'ro' => 'rumano',
        'ru' => 'ruso',
        'sv' => 'sueco',
        'sk' => 'eslovaco',
        'sl' => 'esloveno',
        'es' => 'español',
        'tl' => 'tagalo',
        'uk' => 'ucraniano',
        'be' => 'bielorruso'
    );

    $addYourTextHere = "Escriba un texto aquí"; // used for languages that have no demo text
    $checkSubmitButtonValue = "Verificar texto";
    $checkSubmitButtonTitle = "Verificar texto - también sirve presionar Ctrl+Return";
    $toggleFullscreenMode = "Cambiar a pantalla completa";

    $introText1 = "<strong>LanguageTool</strong> es un software de Código Abierto de verificación gramatical, ortográfica y de estilo. Puedes utilizarlo en esta página o descargarlo gratuitamente.";
    $introText2 = "Además de español, soporta más de <a href='/languages/'>20 idiomas</a>.";

    $downloadHeadline = "Descargar";
    $downloadRequiresJava = "Requiere Java {version}+";
    $downloadTitle = "Para <strong>LibreOffice</strong> / <strong>OpenOffice</strong>";
    $downloadTitleStandAlone = "Para <strong>tu escritorio</strong>";
    $downloadLabelFx = "Para <strong>Firefox</strong>";
    $downloadLabelChrome = "Para <strong>Chrome</strong>";
    //$downloadLabelBrowserAddOn = "Browser Add-on";
    $checklistText = "¿Problemas? Mira nuestra <a href='/issues/'>página de ayuda</a>.";
    $otherDownloadsText = "Descarga versiones <a href='/download/'>antiguas</a> o <a href='/download/snapshots/?C=M;O=D'>diarias</a>.";
    $webstartText = "LanguageTool funciona con <a href='/webstart/web/LanguageTool.jnlp'>Java WebStart</a>.";
    
    // ------------- TRANSLATIONS END HERE -------------
    ?>
<?php include("../../include/header.php"); ?>
</head>
<body>

<?php include("../../include/page_start.php"); ?>

<!--
<div id="languageContent">
</div>-->

<?php include("../../include/page_end.php"); ?>

</body>
</html>
