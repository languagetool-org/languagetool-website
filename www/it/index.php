<!doctype html>
<html lang=it>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "it";
    $checkDefaultLangWithCountry = "it-IT";

    // ------------- TRANSLATIONS START HERE -------------

    $title = "LanguageTool Correttore di Stile e Grammatica";

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
        //'lt'  => 'Lithuanian',
        //'ml'  => 'Malayalam',
        'fa'  => 'Persian',
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

    $checkSubmitButtonValue = "Controlla";
    $checkSubmitButtonTitle = "Controlla";   //TODO: add "also by using Ctrl+Return"
    $toggleFullscreenMode = "toggle fullscreen mode";

    $introText1 = "<strong>LanguageTool</strong> è uno strumento Open Source che permette la correzione di testi scritti in <a href='/languages/'>più di 20 lingue</a>.";
    $introText2 = "Provate LanguageTool online su questa pagina oppure scaricatelo gratuitamente.";

    $downloadHeadline = "Scarica";
    $downloadRequiresJava = "Richiede Java {version}";
    $downloadTitle = "Per <strong>LibreOffice</strong> / <strong>OpenOffice</strong>";
    $downloadTitleStandAlone = "<strong>Applicazione Java</strong>";
    $downloadLabelFx = "Per <strong>Firefox</strong>";
    $downloadLabelChrome = "Per <strong>Chrome</strong>";
    //$downloadLabelBrowserAddOn = "Browser Add-on";
    $checklistText = "Si prega di fare rifeimento alla <a href='/issues/'>nostra lista</a> per problemi.";
    $otherDownloadsText = "Scarica le <a href='/download/'>vecchie versioni</a> o le <a href='/download/snapshots/?C=M;O=D'>build giornaliere</a>.";

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

<a title="LanguageTool installato come add-on in LibreOffice 3.3" class="fancyboxImage"
   href="../screenshots/art/screenshot_lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="../screenshots/art/screenshot_lo3_very_small.png" alt="Screenshot di LanguageTool"/></a>

<p><strong>LanguageTool è uno strumento Open Source che permette la correzione di testi scritti in <a href="../languages/">più di 20 lingue</a>. Tra i linguaggi supportati abbiamo: italiano, inglese, francese e tedesco. Permette di identificare errori che un semplice correttore ortografico non può riconoscere. Suggerisce, ad esempio, l'uso corretto delle <em>eufoniche</em> o il corretto articolo per la parola <em>pneumatico</em>. Effettua numerosi controlli di tipo grammaticale grazie al contributo della community degli utenti stessi.</strong></p>

<p>LanguageTool, infatti, è uno strumento molto potente che trova errori ricercando, all'interno del testo, delle combinazioni definite in regole di tipo XML ovvero codificate in Java.</p>


<h2 style="margin-top: 40px">Provatelo ora</h2>

<p>Potete utilizzare LanguageTool <a href="../usage/">in LibreOffice/OpenOffice.org, come applicazione a sé stante o inclusa in altre applicazioni</a>.</p>

<h2>Scaricatelo</h2>

<p>LanguageTool richiede <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;8</a> o versioni successive.
<strong>State riscontrando dei problemi? Controllate la <a href="../issues">lista dei problemi noti</a>.</strong></p>

<!--
    <div class="downloadSection">
    <table width="90%">
      <tr>
        <td valign="top">

          <ul style="padding-left: 20px">
            <li><strong>Raccomandiamo di utilizzare le più recenti versioni di
              <a href="http://www.libreoffice.org/download">LibreOffice</a></strong> o di 
              <strong><a href="http://www.openoffice.org/download/">Apache OpenOffice</a></strong> in quanto le versioni più vecchie 
              hanno un problema che causa uno stallo in partenza</li>
            <li>Utilizzate poi il menu <em>Tools -&gt; Extension Manager -&gt; Add...</em> per installare il fole che scaricate</li>
            <li><strong>Riavviare OpenOffice.org/LibreOffice</strong> dopo l'installazione della estensione</li>
            <li>Se volete utilizzare LanguageTool in LibreOffice 3.5.x e volete controllare testi in Inglese:
              Utilizzate <em>Options -> Language Settings -> Writing Aids -> Edit...</em> per disabilitare LightProof e abilitare LanguageTool</li>
          </ul>

        </td>

        <td></td>

        <td valign="top">

          <ul style="padding-left: 20px">
            <li>Scompattate lo zip scaricato file e fate doppio click sul file languagetool.jar.
              Per ulteriori informazioni fate riferimento a <a href="../usage/">altre modalità di utilizzo di LanguageTool</a>.</li>
          </ul>
          
        </td>
        <td valign="top">
          
          <ul style="padding-left: 20px">
            <li>Controlla il testo selezionato in siti web e in campi testo nel browser. Non richiede Java!</li>
          </ul>

        </td>

      </tr>
    </table>
</div>
-->
    
<p>Versioni non testate e aggiornate giornalmente del tool sono disponibili al link
<a href="../download/snapshots/?C=M;O=D">versioni di sviluppo</a>
 (<a href="http://www.languagetool.org/download/CHANGES.md">CHANGES.md</a>).
 Rilasci precedenti sono disponibili al link <a href="../download/">versioni scaricabili</a>.</p>


<h3>Licenza e Codice Sorgente</h3>

<p>LanguageTool è aperto al contributo di tutti. LanguageTool è disponibile sotto licenza <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
<!--Il codice 
sorgente è disponibile <a href="http://sourceforge.net/scm/?type=svn&group_id=110216">in SVN su Sourceforge</a>.--> I contenuti di questa homepage sono disponibili sotto 
licenza <a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>.</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
