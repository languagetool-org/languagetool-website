<?php
$page = "pt";
$title = "LanguageTool";
$title2 = "Corrector Gramatical e de Estilo";
$lastmod = "2013-01-05 11:27:00 CET";
$enable_fancybox = 1;
include("../../include/header.php");
include("../../include/browser_language.php");
?>

<a title="LanguageTool installed as an add-on in LibreOffice 3.3" class="fancyboxImage"
   href="../screenshots/art/screenshot_lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="../screenshots/art/screenshot_lo3_very_small.png" alt="Screenshot of LanguageTool"/></a>

<p class="firstpara"><strong>O LanguageTool é <em>software</em> Open Source de verificação gramatical para o Inglês, Francês, Alemão, Polaco, Romeno, etc. Ele 
descobre muitos erros que um simples corrector ortográfico não consegue detectar, 
tal como misturar <em>there</em>/<em>their</em> e detecta alguns problemas 
gramaticais.</strong></p>

<p>O LanguageTool encontra erros em padrões de texto definidos num ficheiro 
XML. Alternativamente, as regras de detecção de erros podem ser escritas em 
Java.</p>

<h2 style="margin-top: 40px">Experimenta-o <em>on-line</em></h2>

<p>Usa o LanguageTool ou testa-o aqui:</p>

<?php
$checkSubmitButtonValue = "Check Text";
$showLanguageBox = 1;
$checkDefaultLang = "auto";
$checkDefaultText = "Paste your own text here... or check this text too see an few of of the problems that LanguageTool can detecd.";
include("../../include/checkform.php");
?>

<p><strong>Testa o LanguageTool sem o instalar, usando o Java WebStart.</strong> 
Requer o ou acima:<br />
<strong><?=show_link("Start LanguageTool (&gt;30&nbsp;MB)", "../webstart/web/LanguageTool.jnlp", 0) ?></strong></p>

<h2>Download</h2>

<p>O LanguageTool requer o ou acima - recomendamos de momento o Java 6, visto 
alguns utilizadores enfrentarem alguns problemas de performance ao usar o Java 7.
<strong>Tens problemas? Por favor lê o .</strong></p>

<div class="downloadSection">
    <table width="100%">
      <tr>
        <td>
           <?php
           $downloadPath = "download";
           include("../../include/download.php");
           ?>
        </td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
           <?php
           $downloadPath = "download";
           include("../../include/downloadStandAlone.php");
           ?>
        </td>
      </tr>
      <tr>
        <td valign="top">

          <ul style="padding-left: 20px">
            <li><strong>Recomendamos fortemente usar o
			<a href="http://www.libreoffice.org/download">LibreOffice 3.5.4</a></strong> (ou 
			acima) ou o
              <strong><a href="http://www.openoffice.org/download/">Apache OpenOffice 3.4.1</a></strong> (ou 
			acima) visto as versões anteriores terem um bug que causa uma pausa 
			no arranque.</li>
            <li>Usa <em>Tools -&gt; Extension Manager -&gt; Add...</em> no LibreOffice/OpenOffice.org 
			para instalar este ficheiro</li>
            <li><strong>Reinicia o OpenOffice.org/LibreOffice</strong> após a 
			instalação da extensão</li>
            <li>Se usares o LibreOffice 3.5.x e queres verificar textos em 
			Inglês: Usa <em>Options -> Language Settings -> Writing Aids -> Edit...</em> 
			para desactivar o LightProof e activar o LanguageTool para o Inglês</li>
          </ul>

        </td>

        <td></td>

        <td valign="top">

          <ul style="padding-left: 20px">
            <li>Faz Unzip ao ficheiro e inicia o LanguageToolGUI.jar com um 
			duplo clique nele. Vê também <?=show_link("other ways to use LanguageTool", "../usage/", 0)?>.</li>
          </ul>

        </td>

      </tr>
    </table>
</div>

<p>Builds diários não testados, do estado actual de desenvolvimento, estão 
disponíveis em
<?=show_link("the snapshot directory", "../download/snapshots/?C=M;O=D", 0) ?>
 (<?=show_link("CHANGES.txt", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/CHANGES.txt", 0) ?>).
 Versões antigas continuam disponíveis no .</p>


<h3>Licença &amp; Código Fonte</h3>

<p>O LanguageTool está disponível gratuitamente sob o . O código-fonte está 
disponível . O conteúdo desta homepage está disponível sob . </p>

<?php
include("../../include/footer.php");
?>
