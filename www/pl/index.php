<!doctype html>
<html lang=pl>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "pl";

    // ------------- TRANSLATIONS START HERE -------------

    $title = "LanguageTool &mdash; Narzędzie korektorskie";

    // TODO: translate language names and sort them alphabetically (by translation, not by code)
    $checkLanguage = array(
        'ast' => 'Asturian',
        'be'  => 'Belarusian',
        'br'  => 'Breton',
        'ca'  => 'Catalan',
        'zh'  => 'Chinese',
        'da'  => 'Danish',
        'nl'  => 'Dutch',
        'en-US'  => 'English',
        'eo'  => 'Esperanto',
        'fr'  => 'French',
        'gl'  => 'Galician',
        'de-DE'  => 'German',
        'el'  => 'Greek',
        'is'  => 'Icelandic',
        'it'  => 'Italian',
        'ja'  => 'Japanese',
        'km'  => 'Khmer',
        'lt'  => 'Lithuanian',
        'ml'  => 'Malayalam',
        'pl'  => 'Polish',
        'pt'  => 'Portuguese',
        'ro'  => 'Romanian',
        'ru'  => 'Russian',
        'sk'  => 'Slovak',
        'sl'  => 'Slovenian',
        'es'  => 'Spanish',
        'sv'  => 'Swedish',
        'tl'  => 'Tagalog',
        'uk'  => 'Ukrainian'
    );

    $checkSubmitButtonValue = "Sprawdź tekst";
    $checkSubmitButtonTitle = "Sprawdź tekst";   //TODO: "also possible by using Ctrl+Return"
    $toggleFullscreenMode = "toggle fullscreen mode";

    $introText1 = "<span style='font-family: verdana, geneva, arial, helvetica, sans-serif;'><strong>LanguageTool</strong> to wolnodostępne narzędzie korektorskie, które oprócz języka polskiego obsługuje jeszcze <a href='/languages/'>25 innych języków</a>.</span>";
    $introText2 = "";

    $downloadHeadline = "Pobierz";
    $downloadRequiresJava = "Wymaga środowiska Java w wersji {version}";
    $downloadTitle = "LanguageTool dla <strong>LibreOffice/OpenOffice</strong>";
    $downloadTitleStandAlone = "LanguageTool &mdash; pakiet samodzielny";
    $downloadLabelFx = "LanguageToolFx &mdash; dodatek do przeglądarki Firefox";
    $checklistText = "W razie kłopotów z instalacją lub uruchomieniem warto zajrzeć na <a href='/issues/'>listę typowych problemów</a> (w języku angielskim).";
    $otherDownloadsText = "Pobierz <a href='/download/'>starsze wersje</a> lub <a href='/download/snapshots/?C=M;O=D'>codzienne kompilacje próbne</a>.";
    $webstartText = "Uruchom <a href='/webstart/web/LanguageTool.jnlp'>za pomocą interfejsu Java WebStart</a>.";

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

<p>LanguageTool to <a href="http://pl.wikipedia.org/wiki/Wolnodost%C4%99pne_oprogramowanie" target="_blank">wolnodostępne</a> narzędzie korektorskie, które oprócz języka polskiego obsługuje jeszcze <a href="/languages/">25 innych języków</a>.</p>

<div style="color:grey;font-size:smaller">
   <a href="#liboinstall" style="color:grey;">Instalacja w pakiecie LibreOffice/OpenOffice.org</a> – <a href="../usage/"  style="color:grey;">inne możliwości zastosowania (opis w języku angielskim)</a>
</div> 


<h2>Możliwości programu</h2>

LanguageTool wykrywa <a href="http://community.languagetool.org/rule/list?lang=pl">ponad 1000</a> błędów w polskich tekstach. Tu znajduje się <a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pl/src/main/resources/org/languagetool/rules/pl/grammar.xml">lista aktualnie stosowanych reguł</a>.<br/><br/>

<small>(Po przesunięciu kursora myszy nad błędem wyświetli się odpowiedni opis).</small>

<a class="fancyboxImage" title="LanguageTool jako rozszerzenie w programie LibreOffice" href="images/screenshot.png"><img style="margin: 15px" align="right" src="images/screenshot_small.png" alt="Screenshot"/></a>

<ul>
    <li>Błędy fonetyczne
        <ul>
            <li>Teraz nie mogę dnia zacząć <span class="errorMarker" title="Ten przyimek należy zapisać tak: bez">beze</span> tego.</li>
            <li>Ludwik ma randkę z Przemysławem <span class="errorMarker" title="Prawdopodobnie ten przyimek należy zapisać tak: w Łodzi.">we Łodzi</span>.</li>
        </ul>
    </li>
    <li>Błędy frazeologiczne
        <ul>
            <li><span class="errorMarker" title="Poprawnie: Odwrotna strona medalu|Druga strona medalu">Inna strona medalu</span> jest taka, że nie chce być wyśmiana przez innych.</li>
            <li><span class="errorMarker" title="To wyrażenie jest niepoprawne. Poprawnie: Bogiem a prawdą">Między Bogiem a prawdą</span> jedynymi osobami, które mogą mieć niekłamaną satysfakcję ze zdobycia Everestu, są Hilary i Tenzing.</li>
        </ul>
    </li>
    <li>Błędy interpunkcyjne
        <ul>
            <li>Przemysław wstąpił do <span class="errorMarker" title="Przecinek stawiamy przed całym spójnikiem złożonym: domu, dopiero gdy.">domu dopiero gdy</span>  poczuł brak Przemysławki.</li>
        </ul>
    </li>
    <li>Błędy leksykalne
        <ul>
            <li>Ależ to <span class="errorMarker" title="Błąd leksykalny (bajońskie mogą być tylko sumy). Poprawnie: ogromne ceny.">bajońskie ceny</span>!</li>
        </ul>
    </li>
    <li>Błędy odmiany
        <ul>
            <li>Organizacja <span class="errorMarker" title="Niepoprawna odmiana. Powinno być: balów.">bali</span> sylwestrowych to nasza specjalność.</li>
        </ul>
    </li>   
    <li>Błędy ortograficzne
    	<ul>
    	<li>Próbujmy wiele razy, bo a <span class="errorMarker" title="Prawdopodobny błąd ortograficzny, powinno być: nuż.">nóż</span> się uda.</li>
    	</ul>
    <li>Błędy rodzaju gramatycznego
    	<ul>
    		<li>Lech z Antonim jedli pyszne <span class="errorMarker" title="Poprawnie: golonkę">golonko</span>.</li>
    	</ul>
    </li>
    <li>Błędy składniowe
        <ul>
            <li>To jest <span class="errorMarker" title="Prosty stopień najwyższy przymiotnika nie powinien być używany z wyrazem „bardziej”. Wystarczy powiedzieć: najważniejsze.">bardziej najważniejsze</span>.</li>
        </ul>
    </li>
    <li>Błędy typograficzne
        <ul>
            <li>To jest <span class="errorMarker" title="Zbędna spacja. Powinno być: „przykład.">„ przykład”</span>.</li>
        </ul>
    </li>
    <li>Błędy w szyku wyrazów</li>
	<li>Pisownia małą i wielką literą</li>
	<li>Pleonazmy</li>
	<li>Prawdopodobne literówki</li>
	<li>Wyrazy modne i nadużywane</li>
    <li>i inne.</li>
</ul>

Poza tym w tekstach obcojęzycznych LanguageTool wykrywa <a href="http://pl.wikipedia.org/wiki/Fa%C5%82szywy_przyjaciel" target="_blank">fałszywych przyjaciół tłumacza</a>.<br/><br/>


<h2 id="liboinstall">Użycie korektora LanguageTool w pakiecie LibreOffice/OpenOffice.org</h2>
LanguageTool to tak zwane rozszerzenie <a href="http://pl.wikipedia.org/wiki/Wolnodost%C4%99pne_oprogramowanie" target="_blank">wolnodostępnego</a> pakietu biurowego <a href="http://pl.libreoffice.org/" target="_blank">LibreOffice</a> i <a href="http://pl.openoffice.org/" target="_blank">OpenOffice.org</a>. Aby używać korektora LanguageTool w pakiecie, wykonaj następujące czynności:

<ol>
    <li>Jeśli na komputerze nie jest zainstalowana Java, pobierz ją <a href="http://www.java.com/de/download/manual.jsp" target="_blank">tutaj</a> bezpłatnie i zainstaluj. 
    Użytkownicy systemu Ubuntu muszą zainstalować pakiet <a href="apt:libreoffice-java-common">libreoffice-java-common</a>.</li>
    <li>Pobierz aktualną wersję korektora LanguageTool. (Przycisk pobierania znajduje się wyżej na tej stronie).</li>
    <li>Otwórz pakiet LibreOffice lub OpenOffice.org i w menu <i>Narzędzia</i> wybierz polecenie <i>Menedżer rozszerzeń</i>.</li>
    <li>Kliknij przycisk <i>Dodaj</i>, w drugim kroku wybierz pobrany z tej strony plik i kliknij przycisk <i>Otwórz</i>. Wykonaj polecenia kreatora instalacji.</li>
    <li>Uruchom ponownie pakiet LibreOffice lub OpenOffice.org (należy wyłączyć funkcję szybkiego uruchamiania).</li>
</ol>

Po włączeniu funkcji automatycznego sprawdzania pisowni problemy znalezione przez korektor LanguageTool zostaną oznaczone niebieskim podkreśleniem. Ustawienia korektora LanguageTool można zmienić w menu <i>Dodatki &rarr; LanguageTool &rarr; Konfiguracja</i>.


<h2>Kontakt</h2>
<!-- TODO: link do mojego formularza kontaktowego? -->

<p>Na pytania odpowiadamy na <a href="../forum">forum</a>, gdzie można także pisać po polsku. Można tam też proponować nowe reguły lub zgłaszać fałszywe alarmy generowane w trakcie korekty przez LanguageTool.
Informacje na temat rozwoju projektu podajemy też na polskim blogu <a href="http://morfologik.blogspot.com">Morfologik</a>.
</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
