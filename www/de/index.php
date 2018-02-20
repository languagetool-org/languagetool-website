<!doctype html>
<html lang=de>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    include("../../include/browser_language.php");
    $checkDefaultLang = getDefaultLanguage("de");
    $checkDefaultLangWithCountry = getDefaultLanguageAndCountry("de-DE");

    // ------------- TRANSLATIONS START HERE -------------
    
    $title = "Rechtschreibprüfung und Grammatikprüfung mit LanguageTool";

    $checkLanguage = array(
        'auto' => 'Autom. erkennen',
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
        //'is'  => 'Isländisch',
        'it'  => 'Italienisch',
        'ja'  => 'Japanisch',
        'ca'  => 'Katalanisch',
        'km'  => 'Khmer',
        //'lt'  => 'Litauisch',
        //'ml'  => 'Malayalam',
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
    $demoTextLink = "Demo-Text einfügen";
    $checkSubmitButtonTitle = "Text prüfen - auch mit Strg+Return";
    $toggleFullscreenMode = "Vollbild-Ansicht umschalten";

    $introText1 = "LanguageTool ist eine kostenlose <strong>Textprüfung</strong> für Grammatik, Stil und&nbsp;Rechtschreibung.";
    $introText2 = "Neben Deutsch werden <a href='/'>Englisch</a> und <a href='/languages/'>viele weitere Sprachen</a> unter&shy;stützt.";
    $addToChrome = "In Chrome installieren <span>kostenlos und ohne Anmeldung</span>";
    $addToFirefox = "In Firefox installieren <span>kostenlos und ohne Anmeldung</span>";
    $gsoc1 = "Informatik-Student?";
    $gsoc2 = "Jetzt für GSoC 2018 bewerben!";

    $forumHeadline = "Forum";
    $compareEditionsText = "Vergleich";
    $moreIntegrationsText = "Weitere Add-ons";
    $downloadHeadline = "Download";
    $downloadRequiresJava = "benötigt Java {version}+";
    $downloadTitle = "Für <strong>LibreOffice</strong>";
    $downloadTitleStandAlone = "Als <strong>Desktop-Programm</strong>";
    $downloadLabelFx = "Für <strong>Firefox</strong>";
    $downloadLabelChrome = "Für <strong>Chrome</strong>";
    $downloadLabelBrowserAddOn = "Browser-Erweiterung";
    $downloadLabelGoogleDocs = "Für <strong>Google Docs</strong>";
    $downloadLabelAddOn = "Add-on";
    $checklistText = "Probleme? Siehe <a href='/issues/'>unsere Hilfeseite</a>.";
    $otherDownloadsText = "<a href='/download/'>Ältere Versionen</a> und <a href='/download/snapshots/?C=M;O=D'>täglich neue Versionen</a> herunterladen.";
    $webstartText = "LanguageTool <a href='/webstart/web/LanguageTool.jnlp'>mit Java WebStart ausführen</a>.";
    $firefoxLink = '<a href="/firefox/">Mehr Informationen</a>';
    $chromeLink = '<a href="/chrome/">Mehr Informationen</a>';

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
    <?php include("../../include/header2.php"); ?>
    <?php include("../../include/header_touchhover.php"); ?>
</head>
<body>

<?php include("../../include/page_start.php"); ?>
<?php include("../../include/pages/pricing.php"); ?>

<div id="testimonials">

    <h2>Nutzermeinungen</h2>

    <div style="text-align: center" id="testimonialsSlider">
        <div>
            <h3>Rechtschreib- und Grammatik-Prüfungen sind mit dem LanguageTool schnell und zuverlässig erledigt.</h3>
            <p><a href="http://www.chip.de/webapps/LanguageTool_66786809.html">chip.de</a></p>
        </div>
        <div>
            <h3>Absolut genial, erkennt Dinge, die mir selbst nie aufgefallen wären!</h3>
            <p>Mathias Bacher</p>
        </div>
        <div>
            <h3>Eine Rechtschreibprüfung ist für jeden Office-Anwender Pflicht.
                Die Erweiterung ist für die wichtigsten Korrekturen sehr hilfreich.</h3>
            <p><a href="https://www.netzwelt.de/download/10324-languagetool.html">netzwelt.de</a></p>
        </div>
    </div>

</div>

<div id="languageContent">

    <h2>Funktionen</h2>

    LanguageTool erkennt <a href="http://community.languagetool.org/rule/list?lang=de">mehr als 2500</a> Fehler in deutschsprachigen Texten:<br/><br/>

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
                <li>Wie geht es Dir? Bist <span class="errorMarker" title="Vorher wurde bereits 'Dir' großgeschrieben. Aus Gründen der Einheitlichkeit 'Du' hier auch großschreiben?">du</span> wieder fit?</li>
            </ul>
        </li>
        <li>Zusammen-/Getrenntschreibung
            <ul>
                <li>Er hat <span class="errorMarker" title="'dieselbe' wird zusammengeschrieben.">die selbe</span> Frage gestellt.</li>
                <li>Deutscher Ärzteverband: Der <span class="errorMarker" title="Uneinheitliche Verwendung von Bindestrichen.<br>Der Text enthält sowohl 'Ärzte-Verband' als auch 'Ärzteverband'.">Ärzte-Verband</span> ist die Interessenvertretung der Ärzte.</li>
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
                <!--<li>Geht es<span class="errorMarker" title="Möglicher Tippfehler: mehr als ein Leerzeichen hintereinander">&nbsp;&nbsp;</span>dir gut?</li>-->
            </ul>
        </li>
        <li>Umgangssprache
            <ul>
                <li>Es wird eine höhere <span class="errorMarker" title="Meinten Sie 'elektrische Spannung'? 'Volt-Zahl' ist eine umgangssprachliche Ausdrucksweise.">Volt-Zahl</span> benötigt.</li>
                <li>Können Sie mir die <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?</li>
            </ul>
        </li>
        <li>Wenn Sie Deutsch als Ihre Muttersprache einstellen, weist LanguageTool in fremdsprachigen Texten auf "falsche Freunde" hin - Wörter,
            die in Deutsch und einer Fremdsprache ähnlich oder gleich klingen oder geschrieben werden, aber etwas anderes bedeuten:
            <ul>
                <li>My <span class="errorMarker" title="Hinweis: 'chef' (Englisch) bedeutet 'Chefkoch', 'Koch' (Deutsch). Meinten Sie vielleicht 'boss', 'chief'?">chef</span> told me I'm not allowed to take vacation days.</li>
                <li>The <span class="errorMarker" title="Hinweis: 'actual/actually' (Englisch) bedeutet 'eigentlich' (Deutsch). Meinten Sie vielleicht 'current', '(the) latest', 'up-to-date'?">actual</span> status and impact of 3D printing</li>
            </ul>
        </li>
        <li>Datumsprüfung
            <ul>
                <li>Ich habe am <span class="errorMarker" title="Der Februar hat nur 28 Tage (bzw. 29 in Schaltjahren)">30. Februar</span> Geburtstag.</li>
            </ul>
        </li>
        <li>u.v.m.</li>
    </ul>


    <h2>LanguageTool benutzen</h2>
    
    <h3 id="browserinstall">LanguageTool im Browser</h3>
    
    <p>Firefox- und Chrome-User können LanguageTool als Erweiterung direkt im Browser installieren. So können Sie
    einfach und schnell Texte prüfen, die Sie im Browser tippen, z.&nbsp;B. in Ihrem Webmailer:</p>
    
    <ul>
        <li><a href="https://addons.mozilla.org/firefox/addon/languagetool?src=external-lt-homepage">LanguageTool im Verzeichnis der Firefox-Add-ons</a></li>
        <li><a href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji">LanguageTool im Chrome Web Store</a></li>
    </ul>
    
    
    <h3 id="liboinstall">LanguageTool in LibreOffice</h3>

    <p>LanguageTool steht als Erweiterung ("Extension") für das <a href="http://de.wikipedia.org/wiki/Freie_Software" target="_blank">freie</a> Office-Paket <a href="http://de.libreoffice.org/" target="_blank">LibreOffice</a> (und <a href="http://de.openoffice.org/" target="_blank">Apache OpenOffice</a>) zur Verfügung. Um LanguageTool in dem Office-Paket zu nutzen, folgen Sie einfach diesen Schritten:</p>

    <ol>
        <li>Falls Java nicht auf Ihrem Computer installiert ist, laden Sie es sich <a href="http://www.java.com/de/download/manual.jsp" target="_blank">hier kostenlos herunter</a> und installieren Sie es. Ubuntu-Nutzer installieren bitte das Paket <a href="apt:libreoffice-java-common">libreoffice-java-common</a>.</li>
        <li>Laden Sie sich die aktuelle Version von LanguageTool herunter. Der Downloadbutton befindet sich oben auf dieser Seite mit
            der Bezeichnung "Für LibreOffice" (dieser Download sollte auch für Apache OpenOffice funktionieren).</li>
        <li>Öffnen Sie LibreOffice und wählen Sie im Menü <i>Extras</i> den Punkt <i>Extension Manager</i>.</li>
        <li>Klicken Sie nun auf <i>Hinzufügen&hellip;</i>, wählen Sie die in Schritt 2 heruntergeladene Datei aus und klicken Sie auf <i>Öffnen</i>.</li>
        <li>Starten Sie nach der Installation LibreOffice neu.</li>
    </ol>

    Sofern die automatische Rechtschreibprüfung aktiviert ist, werden die von LanguageTool gefundenen Probleme im Text blau markiert. Die Einstellungen von LanguageTool können Sie über <i>Extras &rarr; LanguageTool &rarr; Konfiguration&hellip;</i> ändern.


    <h3 id="standalone">LanguageTool als eigenständiges Programm</h3>
    
    <p>Wer die oben beschriebenen Integrationen nicht nutzen kann oder will, kann es auch als offline-fähige Version
    herunterladen:</p>

    <ol>
        <li>Entpacken Sie die heruntergeladene ZIP-Datei (z.&nbsp;B. durch Rechtsklick &rarr; Entpacken &rarr; Hier o.&nbsp;ä.).</li>
        <li>Führen Sie die Datei <tt>languagetool.jar</tt> mit Java aus (i.&nbsp;d.&nbsp;R. durch Doppelklick möglich).</li>
        <li>In das LanguageTool-Fenster können Sie dann per Kopieren und Einfügen Texte zur Prüfung eingeben.</li>
    </ol>

    <h3>Sonstige</h3>
    
    <p>Unsere Community hat weitere Add-ons entwickelt, u.&nbsp;a. für Eclipse, Sublime und MS Word. In unserem Wiki finden Sie
    <a href="http://wiki.languagetool.org/software-that-supports-languagetool-as-a-plug-in-or-add-on">eine vollständige Liste</a>.</p>


    <h2>Neue Versionen</h2>
    
    <p>Alle drei Monate veröffentlichen wir eine neue Version zum Download (<a href="http://wiki.languagetool.org/roadmap">hier die Planung</a>).
    Wer LanguageTool hier auf der Homepage oder als Firefox/Chrome-Add-on benutzt, nutzt automatisch immer die ganz aktuelle Version,
    die täglich aktualisiert wird.</p>
    
    
    <h2>Sprachvarianten</h2>
    
    <p>Neben <em>Deutsch (Deutschland)</em> kann auch <em>Deutsch (Österreich)</em> und <em>Deutsch (Schweiz)</em>
    als Sprache gewählt werden. Die Stil- und Grammatikregeln sind für alle drei Varianten die gleichen, die
    Prüfung der Rechtschreibung wird aber entsprechend angepasst. Für die Schweiz wird auch beachtet, dass dort "ss" statt "ß"
    benutzt wird.</p>

    <p>LanguageTool unterstützt auch <a href="leichte-sprache/">eine Prüfung auf Leichte Sprache</a>. Außerdem
    werden <a href="../languages/">mehr als 20 weitere Sprachen</a> unterstützt, darunter auch <a href="../">Englisch</a>,
    <a href="../fr/">Französisch</a> und <a href="../es/">Spanisch</a>.</p>


    <h2>Mitmachen</h2>

    <p>Als Open-Source-Projekt ist LanguageTool auf die Mitarbeit von Freiwilligen angewiesen. In unserem
        Wiki findet sich eine Beschreibung, <a href="http://wiki.languagetool.org/development-overview">wie man eigene Regeln
            erstellt</a>, um in Zukunft noch mehr Fehler in Texten erkennen zu können.
        Auch für Entwickler und Übersetzer gibt es bei LanguageTool <a href="http://wiki.languagetool.org/make-languagetool-better">spannende
            Aufgaben</a>. </p>

    <p>
        In <a target="_blank" href="http://www.freiesmagazin.de/mobil/freiesMagazin-2012-08-bilder.html#12_08_languagetool1">freiesMagazin 08/2012</a> ist ein ausführlicher Artikel, in dem die Verwendungsmöglichkeiten und die Funktionsweise von LanguageTool beschrieben werden, erschienen.
    </p>


    <h2>Kontakt</h2>

    <p>Fragen beantworten wir im <a href="https://forum.languagetool.org">Forum</a>, wo Sie auch gerne Einträge auf Deutsch hinterlassen können. Dort ist es auch möglich, Fehlalarme von LanguageTool zu melden oder neue Regeln vorzuschlagen.</p>

    
    <h2>Wie funktioniert's?</h2>

    <p>LanguageTool prüft jeden Text gleichzeitig mit drei Verfahren:</p>
    
    <ul>
        <li><b>Rechtschreibprüfung:</b> LanguageTool prüft jedes Wort auf seine Rechtschreibung und benutzt dazu
            das gleiche Wörterbuch wie LibreOffice, allerdings um mehr als 10.000 Wörter erweitert.</li>
        <li><b>Fehlermuster:</b> LanguageTool verfügt für Deutsch über etwa 2200 Fehlermuster, die bestimmte Probleme in Texten 
            erkennen. Diese Muster beziehen sich auf eine Folge von bestimmten Wörtern und Wortarten. Beispielsweise 
            wird "ja schneller, desto" als Fehler erkannt, weil eine Regel existiert, die die Folge "ja",
            gesteigertes Adjektiv, "desto" als wahrscheinlichen Fehler erkennt und statt "ja" das Wort "je" vorschlägt.</li>
        <li><b>Statistik:</b> Viele Wortpaare aus ähnlichen Wörtern werden daraufhin geprüft, ob nicht möglicherweise
            das andere Wort gemeint sein könnte. Dazu wird geprüft, wie oft das Wort üblicherweise in welchem
            Kontext wie häufig vorkommt. Kommt ein Wort im konkreten Kontext wesentlich häufiger vor als das andere,
            wird es als korrekt angenommen und das weniger häufig vorkommende als falsch.
            Als Kontext werden jeweils zwei Wörter vor und nach dem betroffenen Wort benutzt.
            Ein Beispiel dafür ist das Wortpaar dich/doch. Beide sind jeweils für sich genommen korrekt geschrieben &ndash; erst
            durch den Kontext ergibt sich, welches Wort korrekt ist.
            (<a href="http://wiki.languagetool.org/finding-errors-using-big-data">Details</a>)
        </li>
    </ul>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>