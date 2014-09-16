<!doctype html>
<html lang=nl>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "nl";

    // ------------- TRANSLATIONS START HERE -------------
    
    $title = "Spellingcontrole en grammaticacontrole met LanguageTool";

    $checkLanguage = array(
        'ast' => 'Asturisch',
        'br'  => 'Bretons',
        'zh'  => 'Chinees',
        'da'  => 'Deens',
        'de-DE' => 'Duits',
        'en-US' => 'Engels',
        'eo'  => 'Esperanto',
        'fr'  => 'Frans',
        'gl'  => 'Galicisch',
        'el'  => 'Grieks',
        'is'  => 'IJslands',
        'it'  => 'Italiaans',
        'ja'  => 'Japans',
        'ca'  => 'Catalaans',
        'km'  => 'Khmer',
        'lt'  => 'Litouws',
        'ml'  => 'Malayalam',
        'nl'  => 'Nederlands',
        'pl'  => 'Pools',
        'pt'  => 'Portugees',
        'ro'  => 'Roemeens',
        'ru'  => 'Russisch',
        'sv'  => 'Zweeds',
        'sk'  => 'Slowaaks',
        'sl'  => 'Sloveens',
        'es'  => 'Spaans',
        'tl'  => 'Tagalog',
        'uk'  => 'Oekraïens',
        'be'  => 'Witrussisch'
    );

    $addYourTextHere = "Hier uw tekst";  // used for languages that have no demo text
    $checkSubmitButtonValue = "Tekst controleren";
    $checkSubmitButtonTitle = "Tekst controleren - ook met Ctrl-Enter";
    $toggleFullscreenMode = "Omschakelen beeldvullend";

    $introText1 = "<strong>LanguageTool</strong> is een gratis tekstcontrole op grammatica-, stijl- en spelfouten. U kunt LanguageTool hier gratis gebruiken of kosteloos downloaden.";
    $introText2 = "Naast Nederlands kent het meer dan <a href='/languages/'>20 andere talen</a>.";
    $contributeLink = "Meedoen!";

    $downloadHeadline = "Download";
    $downloadRequiresJava = "Heeft Java {version}+ nodig.";
    $downloadTitle = "LanguageTool voor <strong>LibreOffice/OpenOffice</strong>";
    $downloadTitleStandAlone = "LanguageTool als <strong>los programma</strong>";
    $downloadLabelFx = "LanguageTool als uitbreiding voor <strong>Firefox</strong>";
    $checklistText = "Problemen? Kijk op <a href='/issues/'>onze hulppagina</a>.";
    $otherDownloadsText = "<a href='/download/'>Oudere versies</a> en <a href='/download/snapshots/?C=M;O=D'>dagelijkse updates</a> downloaden.";
    $webstartText = "LanguageTool <a href='/webstart/web/LanguageTool.jnlp'>met Java WebStart starten</a>.";
    
    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>

<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

    <h2>Functionaliteit</h2>

    LanguageTool herkent <a href="http://community.languagetool.org/rule/list?lang=nl">meer dan 500</a> mogelijke fouten in Nederlandse tekst:<br/><br/>

    <small>(Beweeg met de muispijl over een aandachtspunt, om de melding te zien.)</small>

    <div style="float: right;margin: 15px">
        <a class="fancyboxImage" title="LanguageTool als uitbreiding van LibreOffice" href="images/screenshot.png"><img src="images/screenshot_small.png" alt="Schermafdruk van LanguageTool in LibreOffice"/></a>
        <br/>
        <span style="color:#777">LanguageTool als uitbreiding van LibreOffice</span> 
    </div>

    <ul>
        <li>Grammatica
            <ul>
                <li><span class="errorMarker" title="Juist is: 'het huis'">De huis</span> is groot.</li>
                <li>Voeg <span class="errorMarker" title="Juist is: het spek">de spek</span> toe en bak die even mee.</li>
            </ul>
        </li>
        <li>Hoofd- en kleine letters
            <ul>
                <li>Communicatiemensen kijken alleen maar naar <span class="errorMarker" title="Het helemaal in hoofdletters schrijven van woorden met meer dan 4 letters wordt afgeraden.">COMMUNICATIEVE</span> functies.</li>
                <li><span class="errorMarker" title="Deze zin begint niet met een hoofdletter">de</span> feiten vliegen ons om de oren.</li>
            </ul>
        </li>
        <li>Spatiefouten
            <ul>
                <li>voor <span class="errorMarker" title="Juist is 'eenieder'">een ieder</span> die het vraagt.</li>
            </ul>
        </li>
        <li>Interpunctie, punten en komma's
            <ul>
                <li>Nou juf Jantine<span class="errorMarker" title="Zet een spatie na de komma">,dat</span> heb je mooi voor elkaar.</li>
                <li>Klopt dit<span class="errorMarker" title="voor een ? hoort geen punt, tenzij het om een afkorting gaat.">.?</span></li>
            </ul>
        </li>
        <li>Spel- en typefouten
            <ul>
                <li>LanguageTool kan natuurlijk <span class="errorMarker" title="Mogelijke spelfout gevonden. Suggestie: normale">nromale</span> typefouten vinden.</li>
                <li>Maar <span class="errorMarker" title="Beter is naar 'verluidt'. Overigens wordt het gebruik van deze vultekst afgeraden.">naar verluid</span> ook ander vergissingen.</li>
            </ul>
        </li>
        <li>Informeel of stuitend taalgebruik
            <ul>
                <li>Dat is ook heel <span class="errorMarker" title="Dit taalgebruik kan als grof of beledigend worden ervaren.">lullig</span>!</li>
            </ul>
        </li>
<!--
        <li>LanguageTool weist in fremdsprachigen Texten auf <a href="http://de.wikipedia.org/wiki/Falscher_Freund" target="_blank">falsche Freunde</a> hin:
            <ul>
                <li>My <span class="errorMarker" title="'chef' bedeutet 'Chefkoch'/'Koch'. Meinten Sie 'chief' oder 'boss'?">chef</span> told me I'm not allowed to take vacation days.</li>
            </ul>
        </li>
-->
        <li>en veel meer.</li>
    </ul>


    <h2 id="liboinstall">LanguageTool in LibreOffice/OpenOffice</h2>

    <p>LanguageTool is beschikbaar als uitbreiding voor de  
<a href="http://de.wikipedia.org/wiki/Freie_Software" target="_blank">gratis</a> kantoorprogrammatuur 
<a href="http://de.libreoffice.org/" target="_blank">LibreOffice</a> en 
<a href="http://de.openoffice.org/" target="_blank">Apache OpenOffice</a> 
. Om LanguageTool in het pakket op te nemen, doet u het volgende:</p>

    <ol>
        <li>Als er nog geen Java op uw computer staat, haalt u dat dan eerst 
<a href="http://www.java.com/nl/download/manual.jsp" target="_blank">hier gratis op</a> en installeert u het. 
Ubuntu-gebruikers installeren <a href="apt:libreoffice-java-common">libreoffice-java-common</a>.</li>
        <li>Download de huidige versie van LanguageTool. (De downloadknop staat bovenaan deze pagina.)</li>
        <li>Start LibreOffice of OpenOffice.org en kies in het menu <i>Extra</i> de optie <i>Extensiebeheer</i>.</li>
        <li>Klik dan op <i>Toevoegen</i>, selecteer het in stap 2 opgehaalde bestand en klik op <i>Openen</i>.</li>
        <li>Start na de instalallatie LibreOffice of OpenOffice.org opnieuw op.</li>
    </ol>

    Wanneer tekstcontrole ingeschakeld is, worden de door LanguageTool gesignaleerde aandachtspunten blauw onderstreept. 
De instellingen van LanguageTool kunt u  <i>Extra &rarr; LanguageTool &rarr; Instellingen&hellip;</i> aanpassen.


    <h2 id="standalone">LanguageTool als los programma</h2>

    <ol>
        <li>Pak het opgehaalde zip-bestand uit.</li>
        <li>Start languagetool.jar met Java (met een dubbelklik of java -jar languagetool.jar).</li>
    </ol>


    <h2>Meedoen</h2>
    
    <p>Als open-source-project is LanguageTool volledig aangewezen op de bijdragen van vrijwilligers. 
    In onze wiki is een beschrijving te vinden over <a href="http://wiki.languagetool.org/development-overview"> het maken van eigen regels
</a>, om in de toekomst nog meer aandachtspunten te signaleren.
    Ook voor ontwikkelaars zijn er  
<a href="http://wiki.languagetool.org/make-languagetool-better">uitdagingen</a> te vinden bij LanguageTool.</p>
    
    
    <h2>Contact</h2>

    <p>Vragen beantwoorden we op het <a href="../forum">forum</a>, waar u ook vragen in het Nederlands kunt stellen. 
Daar kunnen ook onterechte meldingen van LanguageTool gemeld worden, of voorstellen voor regels gedaan worden.</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>