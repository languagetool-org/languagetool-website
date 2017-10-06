<!doctype html>
<html lang=uk>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "uk";
    $checkDefaultLangWithCountry = "uk-UK";

    // ------------- TRANSLATIONS START HERE -------------

    $title = "LanguageTool — програмний засіб перевірки граматики та стилю української мови";

    // TODO: translate language names and sort them alphabetically (by translation, not by code)
    $checkLanguage = array(
        'auto' => 'auto-detect',
        'en-US'  => 'англійська',
        'ast' => 'астурійська',
        'be'  => 'білоруська',
        'br'  => 'бретонська',
        'da'  => 'данська',
        'eo'  => 'есперанто',
        'gl'  => 'галіційська',
        'nl'  => 'голандська',
        'el'  => 'грецька',
        //'is'  => 'ісландська',
        'es'  => 'іспаньска',
        'it'  => 'італійська',
        'ca'  => 'каталонська',
        'zh'  => 'китайська',
        'km'  => 'кхмерська',
        'de-DE'  => 'німецька',
        //'lt'  => 'литовська',
        //'ml'  => 'малаялам',
        'pl'  => 'польська',
        'pt'  => 'португальська',
        'ru'  => 'російська',
        'ro'  => 'румунська',
        'sk'  => 'словацька',
        'sl'  => 'словенська',
        'tl'  => 'тагальська',
        'uk'  => 'українська',
        'fr'  => 'французька',
        'sv'  => 'шведська',
        'ja'  => 'японська',
    );

    $checkSubmitButtonValue = "Перевірити";
    $checkSubmitButtonTitle = "Перевірити";   //TODO: "also possible by using Ctrl+Return"
    $toggleFullscreenMode = "перемикнути повноекранний режим";

    $introText1 = "<strong>LanguageTool</strong> - вільний програмний засіб для перевірки граматики та стилю для української мови, також підтримує <a href='/languages/'>25 інших мов</a>.";
    $introText2 = "";

    $downloadHeadline = "Звантажити";
    $downloadRequiresJava = "Потрібна Java версії&nbsp;{version}";
    $downloadTitle = "Для <strong>LibreOffice</strong> / <strong>OpenOffice</strong>";
    $downloadTitleStandAlone = "Окрема програма для стільниці";
    $downloadLabelFx = "Для <strong>Firefox</strong>";
    $downloadLabelChrome = "Для <strong>Chrome</strong>";
    $downloadLabelBrowserAddOn = "Додаток для браузера";
    $checklistText = "Якщо ви стикнулися з проблемами, зазирніть в наш <a href='/issues/'>список типових проблем</a> (англійською).";
    $otherDownloadsText = "Звантажити <a href='/download/'>старішу версію</a> або <a href='/download/snapshots/?C=M;O=D'>щоденну тестову версію</a>.";
    $webstartText = "Запустити <a href='/webstart/web/LanguageTool.jnlp'>через інтерфейс Java WebStart</a>.";

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

<h2>Зв'язок</h2>

<p>Запитання можна ставити <a href="../forum">на форумі LanguageTool</a>, або <a href="http://r2u.org.ua/forum/viewforum.php?f=45">на форумі r2u.org.ua</a>.</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
