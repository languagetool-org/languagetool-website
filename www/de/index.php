<!doctype html>
<html lang=de>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "de";

    // ------------- TRANSLATIONS START HERE -------------
    
    $title = "LanguageTool Stil- und Grammatikprüfung";

    $checkSubmitButtonValue = "Text Prüfen";
    $checkLanguage = array(
        'ast' => 'Asturisch',
        'br'  => 'Bretonisch',
        'zh'  => 'Chinesisch',
        'da'  => 'Dänisch',
        'de-DE' => 'Deutsch',
        'en-US' => 'Englisch',
        'eo'  => 'Esperanto',
        'fr'  => 'Französisch',
        'gl'  => 'Galicisch',
        'el'  => 'Griechisch',
        'is'  => 'Isländisch',
        'it'  => 'Italienisch',
        'ja'  => 'Japanisch',
        'ca'  => 'Katalanisch',
        'km'  => 'Khmer',
        'lt'  => 'Litauisch',
        'ml'  => 'Malayalam',
        'nl'  => 'Niederländisch',
        'pl'  => 'Polnisch',
        'pt'  => 'Portugiesisch',
        'ro'  => 'Rumänisch',
        'ru'  => 'Russisch',
        'sv'  => 'Schwedisch',
        'sk'  => 'Slowakisch',
        'sl'  => 'Slowenisch',
        'es'  => 'Spanisch',
        'tl'  => 'Tagalog',
        'uk'  => 'Ukrainisch',
        'be'  => 'Weißrussisch'
    );

    $checkSubmitButtonValue = "Text Prüfen";
    $checkSubmitButtonTitle = "Text prüfen - auch mit Strg+Return";

    $introText1 = "<strong>LanguageTool</strong> ist eine freie Stil- und Grammatikprüfung, die neben Deutsch noch <a href='/languages/'>mehr als 20 weitere Sprachen</a> unterstützt.";
    $introText2 = "";

    $downloadRequiresJava = "Benötigt Java {version}";
    $downloadTitle = "LanguageTool für <strong>LibreOffice/OpenOffice</strong>";
    $downloadTitleStandAlone = "LanguageTool als <strong>Desktop-Programm</strong>";
    $downloadLabelFx = "LanguageTool als Erweiterung für <strong>Firefox</strong>";
    
    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>

<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

    <h2>Funktionen</h2>

    LanguageTool erkennt <a href="http://community.languagetool.org/rule/list?lang=de">mehr als 1700</a> Fehler in deutschsprachigen Texten:<br/><br/>

    <small>(Zeigen Sie mit der Maus auf einen Fehler, um die dazugehörige Meldung anzuzeigen.)</small>

    <a class="fancyboxImage" title="LanguageTool als Erweiterung in LibreOffice" href="images/screenshot.png"><img style="margin: 15px" align="right" src="images/screenshot_small.png" alt="Bilschirmfoto von LanguageTool in LibreOffice"/></a>

    <ul>
        <li>Grammatik
            <ul>
                <li><span class="errorMarker" title="Möglicherweise fehlende grammatische Übereinstimmung zwischen Artikel und Nomen bezüglich Genus">Der Haus</span> ist groß.</li>
                <li>Ich bin <span class="errorMarker" title="Die Präposition 'wegen' erfordert i.d.R. den Genitiv.">wegen diesem</span> Stau zu spät gekommen.</li>
            </ul>
        </li>
        <li>Groß-/Kleinschreibung
            <ul>
                <li>Die <span class="errorMarker" title="Meinten Sie 'Französische' Revolution (1789–1799)? Zu mehrteiligen Namen gehörende Adjektive werden großgeschrieben.">französische</span> Revolution war ein wichtiges historisches Ereignis.</li>
                <li><span class="errorMarker" title="Dieser Satz fängt nicht mit einem großgeschriebenen Wort an">überprüfen</span> der Großschreibung am Satzanfang.</li>
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
                <li>Er verzieht keine <span class="errorMarker" title="Meinten Sie 'Miene'? (Mine = unterirdischer Gang, Sprengkörper, Kugelschreibermine)">Mine</span>.</li>
                <li>Ich werde dir eine <span class="errorMarker" title="Meinten Sie 'E-Mail' (elektronische Post) statt 'Email' (Schmelzüberzug)?">Email</span> schicken.</li>
                <li>Geht es<span class="errorMarker" title="Möglicher Tippfehler: mehr als ein Leerzeichen hintereinander">&nbsp;&nbsp;</span>dir gut?</li>
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


    <h2 id="liboinstall">LanguageTool in LibreOffice/OpenOffice nutzen</h2>

    <p>LanguageTool steht als sogenannte Extension (Erweiterung) für die <a href="http://de.wikipedia.org/wiki/Freie_Software" target="_blank">freien</a> Office-Pakete <a href="http://de.libreoffice.org/" target="_blank">LibreOffice</a> und <a href="http://de.openoffice.org/" target="_blank">Apache OpenOffice</a> zur Verfügung. Um LanguageTool in dem Office-Paket zu nutzen, folgen Sie einfach folgenden Schritten:</p>

    <ol>
        <li>Falls Java nicht auf Ihrem Computer installiert ist, laden Sie es sich <a href="http://www.java.com/de/download/manual.jsp" target="_blank">hier kostenlos herunter</a> und installieren Sie es. Ubuntu-Nutzer installieren bitte das Paket <a href="apt:libreoffice-java-common">libreoffice-java-common</a>.</li>
        <li>Laden Sie sich die aktuelle Version von LanguageTool herunter. (Der Downloadbutton befindet sich oben auf dieser Seite.)</li>
        <li>Öffnen Sie LibreOffice bzw. OpenOffice.org und wählen Sie im Menü <i>Extras</i> den Punkt <i>Extension Manager</i>.</li>
        <li>Klicken Sie nun auf <i>Hinzufügen&hellip;</i>, wählen Sie die in Schritt 2 heruntergeladene Datei aus und klicken Sie auf <i>Öffnen</i>.</li>
        <li>Starten Sie nach der Installation LibreOffice bzw. OpenOffice.org neu.</li>
    </ol>

    Sofern die automatische Rechtschreibprüfung aktiviert ist, werden die von LanguageTool gefundenen Probleme im Text blau markiert. Die Einstellungen von LanguageTool können Sie über <i>Extras &rarr; LanguageTool &rarr; Konfiguration&hellip;</i> ändern.

    <h2 id="standalone">LanguageTool als eigenständiges Programm benutzen</h2>

    <ol>
        <li>Entpacken Sie die heruntergeladene zip-Datei (z.&nbsp;B. durch Rechtsklick &rarr; Entpacken &rarr; Hier o.&nbsp;ä.).</li>
        <li>Führen Sie die Datei languagetool.jar mit Java aus (i.&nbsp;d.&nbsp;R. durch Doppelklick möglich).</li>
    </ol>

    <p>
        In <a target="_blank" href="http://www.freiesmagazin.de/mobil/freiesMagazin-2012-08-bilder.html#12_08_languagetool1">freiesMagazin 08/2012</a> ist ein ausführlicher Artikel, in dem die Verwendungsmöglichkeiten und die Funktionsweise von LanguageTool beschrieben werden, erschienen.
    </p>

    <h2>Spezielle Varianten</h2>

    <p>LanguageTool unterstützt auch <a href="leichte-sprache/">eine Prüfung auf Leichte Sprache</a>.</p>

    <p></p>

    <h2>Kontakt</h2>

    <p>Fragen beantworten wir im <a href="../forum">Forum</a>, wo Sie auch gerne Einträge auf Deutsch hinterlassen können. Dort ist es auch möglich, Fehlalarme von LanguageTool zu melden oder neue Regeln vorzuschlagen.</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>