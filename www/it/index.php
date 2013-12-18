<?php
$page = "it";
$title = "LanguageTool";
$title2 = "Correttore di Stile e Grammatica";
$lastmod = "2013-01-06 10:30:00 CET";
$enable_textcheck = 1;
$enable_fancybox = 1;
include("../../include/header.php");
?>

<a title="LanguageTool installato come add-on in LibreOffice 3.3" class="fancyboxImage"
   href="../screenshots/art/screenshot_lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="../screenshots/art/screenshot_lo3_very_small.png" alt="Screenshot di LanguageTool"/></a>

<p class="firstpara"><strong>LanguageTool è uno strumento Open Source che permette la correzione di testi scritti in <a href="../languages/">più di 20 lingue</a>. Tra i linguaggi supportati abbiamo: italiano, inglese, francese e tedesco. Permette di identificare errori che un semplice correttore ortografico non può riconoscere. Suggerisce, ad esempio, l'uso corretto delle <em>eufoniche</em> o il corretto articolo per la parola <em>pneumatico</em>. Effettua numerosi controlli di tipo grammaticale grazie al contributo della community degli utenti stessi.</strong></p>

<p>LanguageTool, infatti, è uno strumento molto potente che trova errori ricercando, all'interno del testo, delle combinazioni definite in regole di tipo XML ovvero codificate in Java.</p>


<h2 style="margin-top: 40px">Provatelo ora</h2>

<p>Potete utilizzare LanguageTool <a href="../usage/">in LibreOffice/OpenOffice.org, come applicazione a sé stante o inclusa in altre applicazioni</a>.</p>
<p>In alternativa, potete provarlo direttamente dal sito scrivendo nel riquadro sottostante:</p>

<?php
$checkSubmitButtonValue = "Controlla";
$showLanguageBox = 1;
$checkDefaultLang = "it";
$checkDefaultText = "Inserite qui lo vostro testo... oppure controlate direttamente questo ed avrete un assaggio di quali errori possono essere identificati con LanguageTool.";
include("../../include/checkform.php");
?>

<p><strong>Provate LanguageTool senza installazione utilizzando Java WebStart.</strong>
Richiede <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;7</a> o versioni successive:<br />
<strong><a href="../webstart/web/LanguageTool.jnlp">Start LanguageTool (&gt;30&nbsp;MB)</a></strong></p>

<h2>Scaricatelo</h2>

<p>LanguageTool richiede <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;7</a> o versioni successive.
<strong>State riscontrando dei problemi? Controllate la <a href="../issues">lista dei problemi noti</a>.</strong></p>

<div class="downloadSection">
    <table width="100%">
      <tr>
        <td>
           <?php
           $downloadTitle        = "Scarica LanguageTool";
           $downloadLabel        = "per LibreOffice/OpenOffice";
           $downloadVersionLabel = "Versione";
           $downloadPath         = "/download";
           $downloadLabelMB      = "MB";
           include("../../include/download.php");
           ?>
        </td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
           <?php
           $downloadTitleStandAlone = "Scarica LanguageTool";
           $downloadLabelStandAlone = "applicazione Java";
           $downloadVersionLabelStandAlone = "Versione";
           $downloadPathStandAlone  = "/download";
           $downloadLabelMB         = "MB";
           include("../../include/downloadStandAlone.php");
           ?>
        </td>
      </tr>
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
            <li>Scompattate lo zip scaricato file e fate doppio click sul file languagetool-standalone.jar.
              Per ulteriori informazioni fate riferimento a <a href="../usage/">altre modalità di utilizzo di LanguageTool</a>.</li>
          </ul>
          
          <br/>
          
          <?php
          include("../../include/downloadFx.php");
          ?>
          
          <ul style="padding-left: 20px">
            <li>Controlla il testo selezionato in siti web e in campi testo nel browser. Non richiede Java!</li>
          </ul>

        </td>

      </tr>
    </table>
</div>

<p>Versioni non testate e aggiornate giornalmente del tool sono disponibili al link
<a href="../download/snapshots/?C=M;O=D">versioni di sviluppo</a>
 (<a href="http://www.languagetool.org/download/CHANGES.txt">CHANGES.txt</a>).
 Rilasci precedenti sono disponibili al link <a href="../download/">versioni scaricabili</a>.</p>


<h3>Licenza e Codice Sorgente</h3>

<p>LanguageTool è aperto al contributo di tutti. LanguageTool è disponibile sotto licenza <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>. Il codice 
sorgente è disponibile <a href="http://sourceforge.net/scm/?type=svn&group_id=110216">in SVN su Sourceforge</a>. I contenuti di questa homepage sono disponibili sotto 
licenza <a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>.</p>

<?php
include("../../include/footer.php");
?>
