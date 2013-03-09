<?php
$page = "de-simple-language";
$title = "LanguageTool";
$title2 = "Prüfung auf Leichte Sprache";
$lastmod = "2013-03-09 13:40:00 CET";
$enable_textcheck = 1;
include("../../../include/header.php");
?>

<p class="firstpara">Die Leichte Sprache ist eine besonders leicht verständliche Ausdrucksweise.
Es existiert kein offizieller Standard, was genau Leichte Sprache ausmacht, es gibt zur Orientierung allerdings 
einige Regeln. Mit dieser Seite können Sie LanguageTool benutzen, um Texte gegen einige (nicht alle) dieser
Regeln zu prüfen. Mehr Informationen zu Leichter Sprache finden Sie beim
<a href="http://www.leichtesprache.org/">Netzwerk Leichte Sprache</a>.</p>

<?php
$checkSubmitButtonValue = "Text prüfen";
$showLanguageBox = 1;
$checkDefaultLang = "de-DE-x-simple-language";
$checkLanguage["de-DE"] = "Deutsch" ;
$addedLanguages["de-DE-x-simple-language"] = "Leichte Sprache";
$checkDefaultText = "Fügen Sie hier Ihren Text ein oder benutzen Sie diesen Text als Beispiel. Dieser Text wurde nur zum Testen geschrieben. Die Donaudampfschifffahrt darf da nicht fehlen. Und die Nutzung des Genitivs auch nicht.";
include("../../../include/checkform.php");
?>

<p>Die normale Textprüfung ohne Berücksichtigung der Leichten Sprache finden Sie <a href="../">auf unserer deutschen Startseite</a>.</p>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<?php
include("../../../include/footer.php");
?>
