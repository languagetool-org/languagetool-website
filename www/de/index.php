<?php
$page = "de";
$title = "LanguageTool";
$title2 = "Stil- und Grammatikprüfung";
$lastmod = "2012-01-26 17:57:00 CET";
include("../../include/header.php");
?>

<p>LanguageTool ist eine <a href="http://de.wikipedia.org/wiki/Freie_Software" target="_blank">freie</a> Stil- und Grammatikprüfung, die neben Deutsch noch weitere <a href="http://www.languagetool.org/languages/">25 Sprachen</a> unterstützt.

<h2>Funktionen</h2>

LanguageTool erkennt <a href="http://community.languagetool.org/rule/list?lang=de">mehr als 600</a> Fehler in deutschsprachigen Texten:<br/><br/>

<small>(Zeigen Sie mit der Maus auf einen Fehler, um die dazugehörige Meldung anzuzeigen.)</small>

<ul>
    <li>Grammatik
        <ul>
            <li><span class="errorMarker" title="Möglicherweise fehlende grammatische Übereinstimmung zwischen Artikel und Nomen bezüglich Genus">Der Haus</span> ist groß.</li>
            <li>Ich bin <span class="errorMarker" title="Die Präposition 'wegen' erfordert i.d.R. den Genitiv.">wegen diesem</span> Stau zu spät gekommen.</span></li>
        </ul>
    </li>
    <li>Groß-/Kleinschreibung
        <ul>
            <li>Die <span class="errorMarker" title="Meinten Sie 'Französische' Revolution (1789–1799)? Zu mehrteiligen Namen gehörende Adjektive werden großgeschrieben.">französische</span> Revolution war ein wichtiges historisches Ereignis.</li>
            <li><span class="errorMarker" title="Dieser Satz fängt nicht mit einem großgeschriebenen Wort an">prüfung</span> der Großschreibung am Satzanfang.</li>
        </ul>
    </li>
    <li>Zusammen-/Getrenntschreibung
        <ul>
            <li>Er hat <span class="errorMarker" title="'dieselbe' wird zusammengeschrieben.">die selbe</span> Frage gestellt.</li>
        </ul>
    </li>
    <li>Zeichensetzung
        <ul>
            <li>Ich fragte sie<span class="errorMarker" title="Nur hinter einem Komma steht ein Leerzeichen, aber nicht davor."> ,</span> ob sie kommen möchte.</li>
            <li>Ich lerne <span class="errorMarker" title="Ein mit der Subjunktion 'weil' eingeleiteter Nebensatz wird i.d.R. mit (mindestens) einem Komma vom Hauptsatz abgetrennt.">weil</span> ich gute Noten haben will.</li>
        </ul>
    </li>
    <li>Mögliche Tippfehler
        <ul>
            <li>Er verzieht keine <span class="errorMarker" title="Meinten Sie 'Miene'? (Mine = unterirdischer Gang, Sprengkörper, Kugelschreibermine)">Mine</span>.</span></li>
            <li>Ich werde dir eine <span class="errorMarker" title="Meinten Sie 'E-Mail' (elektronische Post) statt 'Email' (Schmelzüberzug)?">Email</span> schicken.</span></li>
            <li>Geht es<span class="errorMarker" title="Möglicher Tippfehler: mehr als ein Leerzeichen hintereinander">&nbsp;&nbsp;</span>dir gut?
        </ul>
    </li>
    <li>Umgangssprache
        <ul>
            <li>Es wird eine höhere <span class="errorMarker" title="Meinten Sie 'elektrische Spannung'? 'Volt-Zahl' ist eine umgangssprachliche Ausdrucksweise.">Volt-Zahl</span> benötigt.</li>
        </ul>
    </li>
    <li>Redundanz
        <ul>
            <li>Können Sie mir die <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?</li>
        </ul>
    </li>
    <li>u.v.m.</li>
</ul>

Außerdem weist LanguageTool in fremdsprachigen Texten auf <a href="http://de.wikipedia.org/wiki/Falscher_Freund" target="_blank">falsche Freunde</a> hin.<br/><br/>

Aber bitte beachten Sie: LanguageTool selbst beinhaltet keine Rechtschreibprüfung!

<h2>LanguageTool ausprobieren</h2>

Sie können LanguageTool <a href="http://www.languagetool.org/webstart/web/LanguageTool.jnlp">per Java WebStart testen</a> oder 
direkt hier im Browser ausprobieren:<br/><br/>

<?php
$checkSubmitButtonValue = "Text Prüfen";
$showLanguageBox = 0;
$checkDefaultLang = "de";
$checkDefaultText = "Fügen Sie hier Ihren Text ein. oder nutzen Sie diesen Text als Beispiel für ein Paar Fehler , ".
    "die LanguageTool erkennen kann. Was ist zum Beispiel ein ökonomischer Gottesdienst? ".
    "Eine Rectschreibprüfunk findet findet übrigens nicht statt.";
include("../../include/checkform.php");
?>


<h2>Download</h2>

<p>LanguageTool kann auf der <a href="../">Startseite</a> heruntergeladen werden.</p>

<h2>LanguageTool in LibreOffice/OpenOffice.org nutzen</h2>
LanguageTool steht als sogenannte Extension (Erweiterung) für die <a href="http://de.wikipedia.org/wiki/Freie_Software" target="_blank">freien</a> Office-Pakete <a href="http://de.libreoffice.org/" target="_blank">LibreOffice</a> und <a href="http://de.openoffice.org/" target="_blank">OpenOffice.org</a> zur Verfügung. Um LanguageTool in dem Office-Paket zu nutzen, folgen Sie einfach folgenden Schritten:

<ol>
    <li>Falls Java nicht auf Ihrem Computer installiert ist, laden Sie es sich <a href="http://www.java.com/de/download/manual.jsp" target="_blank">hier</a> kostenlos herunter und installieren Sie es. Ubuntu-Nutzer installieren bitte das Paket <a href="apt:libreoffice-java-common">libreoffice-java-common</a>.</li>
    <li>Laden Sie sich die aktuelle Version von LanguageTool von der <a href="../">Startseite</a> herunter.</li>
    <li>Öffnen Sie LibreOffice bzw. OpenOffice.org und wählen Sie im Menü <i>Extras</i> den Punkt <i>Extension Manager</i>.</li>
    <li>Klicken Sie nun auf <i>Hinzufügen&hellip;</i>, wählen Sie die in Schritt 2 heruntergeladene Datei aus und klicken Sie auf <i>Öffnen</i>.</li>
    <li>Starten Sie nach der Installation LibreOffice bzw. OpenOffice.org neu.</li>
</ol>

Sofern die automatische Rechtschreibprüfung aktiviert ist, werden die von LanguageTool gefundenen Probleme im Text blau markiert. Die Einstellungen von LanguageTool können Sie über <i>Extras &rarr; LanguageTool &rarr; Konfiguration&hellip;</i> ändern.


<h2>Kontakt</h2>
<!-- TODO: direkter Kontakt? -->

<p>Fragen beantworten wir im <a href="../forum">Forum</a>, wo Sie auch gerne Einträge auf Deutsch hinterlassen können. Dort ist es auch möglich, Fehlalarme von LanguageTool zu melden oder neue Regeln vorzuschlagen.</p>


<?php
include("../../include/footer.php");
?>
