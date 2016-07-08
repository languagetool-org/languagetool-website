<!doctype html>
<html lang=de>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "de";
    $checkDefaultLangWithCountry = "de-DE";

    // ------------- TRANSLATIONS START HERE -------------
    
    $title = "Rechtschreibprüfung und Grammatikprüfung mit LanguageTool";

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
        'fa'  => 'Persisch',
        'pl'  => 'Polnisch',
        'pt'  => 'Portugiesisch',
        'ro'  => 'Rumänisch',
        'ru'  => 'Russisch',
        'sv'  => 'Schwedisch',
        'sk'  => 'Slowakisch',
        'sl'  => 'Slowenisch',
        'es'  => 'Spanisch',
        'ta'  => 'Tamil',
        'tl'  => 'Tagalog',
        'uk'  => 'Ukrainisch',
        'be'  => 'Weißrussisch'
    );

    $addYourTextHere = "Hier Text einfügen";  // used for languages that have no demo text
    $checkSubmitButtonValue = "Text prüfen";
    $checkSubmitButtonTitle = "Text prüfen - auch mit Strg+Return";
    $toggleFullscreenMode = "Vollbild-Ansicht umschalten";

    $introText1 = "<strong>LanguageTool</strong> ist eine freie Textprüfung für Grammatik, Stil und Rechtschreibung. Sie können LanguageTool auf dieser Seite benutzen oder kostenlos herunterladen.";
    $introText2 = "Neben Deutsch werden mehr als <a href='/languages/'>20 weitere Sprachen</a> unter&shy;stützt.";
    $contributeLink = "Mitmachen!";

    $downloadHeadline = "Download";
    $downloadRequiresJava = "benötigt Java {version}+";
    $downloadTitle = "Für <strong>LibreOffice</strong><br/>und <strong>OpenOffice</strong>";
    $downloadTitleStandAlone = "Als <strong>Desktop-Programm</strong>";
    $downloadLabelFx = "Für <strong>Firefox</strong>";
    $downloadLabelChrome = "Für <strong>Chrome</strong>";
    $downloadLabelBrowserAddOn = "Browser-Erweiterung";
    $checklistText = "Probleme? Siehe <a href='/issues/'>unsere Hilfeseite</a>.";
    $otherDownloadsText = "<a href='/download/'>Ältere Versionen</a> und <a href='/download/snapshots/?C=M;O=D'>täglich neue Versionen</a> herunterladen.";
    $webstartText = "LanguageTool <a href='/webstart/web/LanguageTool.jnlp'>mit Java WebStart ausführen</a>.";
    $firefoxLink = '<a href="/de/firefox/">Mehr Informationen</a>';
    $chromeLink = '<a href="/de/chrome/">Mehr Informationen</a>';

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>

<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

    <h2>Funktionen</h2>

    LanguageTool erkennt <a href="http://community.languagetool.org/rule/list?lang=de">mehr als 1800</a> Fehler in deutschsprachigen Texten:<br/><br/>

    <small>(Zeigen Sie mit der Maus auf einen Fehler, um die dazugehörige Meldung anzuzeigen.)</small>

    <div style="float: right;margin: 15px">
        <a class="fancyboxImage" title="LanguageTool als Erweiterung in LibreOffice" href="images/screenshot.png"><img src="images/screenshot_small.png" alt="Bildschirmfoto von LanguageTool in LibreOffice"/></a>
        <br/>
        <span style="color:#777">LanguageTool als Erweiterung in LibreOffice</span> 
    </div>

    <ul>
        <li>Grammatik
            <ul>
                <li><span class="errorMarker" title="Möglicherweise fehlende grammatische Übereinstimmung zwischen Artikel und Nomen bezüglich Genus">Der Haus</span> ist groß.</li>
                <li>Sie hob <span class="errorMarker" title="Möglicherweise fehlende grammatische Übereinstimmung zwischen Artikel, Adjektiv und Nomen">das roten Blatt</span> Papier auf.</li>
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
                <li>Aber LanguageTool kann mehr als eine <span class="errorMarker" title="Möglicher Rechtschreibfehler gefunden. Vorschlag: normale">nromale</span> Rechtschreibprüfung:</li>
                <li>Er verzieht keine <span class="errorMarker" title="Meinten Sie 'Miene'? (Mine = unterirdischer Gang, Sprengkörper, Kugelschreibermine)">Mine</span>.</li>
                <li>Ich werde dir eine <span class="errorMarker" title="Meinten Sie 'E-Mail' (elektronische Post) statt 'Email' (Schmelzüberzug)?">Email</span> schicken.</li>
                <li>Geht es<span class="errorMarker" title="Möglicher Tippfehler: mehr als ein Leerzeichen hintereinander">&nbsp;&nbsp;</span>dir gut?</li>
            </ul>
        </li>
        <li>Umgangssprache
            <ul>
                <li>Es wird eine höhere <span class="errorMarker" title="Meinten Sie 'elektrische Spannung'? 'Volt-Zahl' ist eine umgangssprachliche Ausdrucksweise.">Volt-Zahl</span> benötigt.</li>
                <li>Können Sie mir die <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?</li>
            </ul>
        </li>
        <li>LanguageTool weist in fremdsprachigen Texten auf <a href="http://de.wikipedia.org/wiki/Falscher_Freund" target="_blank">falsche Freunde</a> hin:
            <ul>
                <li>My <span class="errorMarker" title="'chef' bedeutet 'Chefkoch'/'Koch'. Meinten Sie 'chief' oder 'boss'?">chef</span> told me I'm not allowed to take vacation days.</li>
            </ul>
        </li>
        <li>u.v.m.</li>
    </ul>


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


    <h2>Mitmachen</h2>
    
    <p>Als Open-Source-Projekt ist LanguageTool auf die Mitarbeit von Freiwilligen angewiesen. In unserem
    Wiki findet sich eine Beschreibung, <a href="http://wiki.languagetool.org/development-overview">wie man eigene Regeln
    erstellt</a>, um in Zukunft noch mehr Fehler in Texten erkennen zu können.
    Auch für Entwickler und Übersetzer gibt es bei LanguageTool <a href="http://wiki.languagetool.org/make-languagetool-better">spannende
    Aufgaben</a>. </p>
    
    
    <h2>Varianten</h2>

    <p>LanguageTool unterstützt auch <a href="leichte-sprache/">eine Prüfung auf Leichte Sprache</a>. Außerdem
    werden <a href="../languages/">mehr als 20 weitere Sprachen</a> unterstützt, darunter auch <a href="../">Englisch</a>,
    <a href="../fr/">Französisch</a> und <a href="../es/">Spanisch</a>.</p>


    <h2>Kontakt</h2>

    <p>Fragen beantworten wir im <a href="../forum">Forum</a>, wo Sie auch gerne Einträge auf Deutsch hinterlassen können. Dort ist es auch möglich, Fehlalarme von LanguageTool zu melden oder neue Regeln vorzuschlagen.</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>