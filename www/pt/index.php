<?php
$page = "pt";
$title = "LanguageTool";
$title2 = "Corrector Gramatical e de Estilo";
$lastmod = "2013-04-14 23:27:00 CET";
$enable_textcheck = 1;
$enable_fancybox = 1;
include("../../include/header.php");
include("../../include/browser_language.php");
?>

<a title="LanguageTool installed as an add-on in LibreOffice 3.3" class="fancyboxImage"
   href="../screenshots/art/screenshot_lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="../screenshots/art/screenshot_lo3_very_small.png" alt="Screenshot of LanguageTool"/></a>

<p class="firstpara"><strong>O LanguageTool é <em>software</em> Open Source de verificação gramatical para o Inglês, o Francês, o Alemão, o Polaco, o Romeno, etc.. Ele 
encontra muitos erros que um simples corrector ortográfico não detecta, 
tal como misturar <em>there</em>/<em>their</em> e detecta alguns problemas 
gramaticais.<br/><br/><br/></strong></p>

<h2 style="margin-top: 40px">Experimenta-o <em>on-line</em></h2>


<?php
$checkSubmitButtonValue = "Verificar Texto";
$showLanguageBox = 1;
$checkDefaultLang = "pt";
$checkDefaultText = "Cola o teu próprio texto aqui... ou verifica este texto para ver alguns dos dos problemas que o LanguageTool consegue detectar.";
include("../../include/checkform.php");
?>



<p><strong>Testa o LanguageTool sem o instalar, usando o Java WebStart.<br/></strong>
<strong><?=show_link("Iniciar o LanguageTool", "../webstart/web/LanguageTool.jnlp", 0) ?></strong> 
 (&gt;30&nbsp;MB, requer o <?=show_link("Java&nbsp;7", "http://www.java.com/en/download/manual.jsp", 0)?> ou acima)</p>

<h2>Descarregar</h2>

<p>Usar o LanguageTool localmente requer o <?=show_link("Java&nbsp;7", "http://www.java.com/en/download/manual.jsp", 0)?> ou acima.
<strong>Tens problemas? Por favor lê a <?=show_link("lista de problemas comuns", "../issues", 0)?>.</strong></p>

<noscript class="warning">Por favor activa o Javascript - é usado para mostrar algumas dicas após iniciares uma transferência</noscript>

<div class="downloadSection">
    <table width="100%">
      <tr>
        <td>
           <?php
           $downloadTitle = "Descarregar LanguageTool";
           $downloadLabel = "para o LibreOffice/OpenOffice";
           $downloadPath = "download";
           include("../../include/download.php");
           ?>
        </td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
           <?php
           $downloadTitleStandAlone = "Descarregar LanguageTool";
           $downloadLabelStandAlone = "para uso independente";
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
            <li>Usa <em>Tools -&gt; Extension Manager -&gt; Add...</em> no LibreOffice/OpenOffice 
			para instalar este ficheiro</li>
            <li><strong>Reinicia o OpenOffice/LibreOffice</strong> após a 
			instalação da extensão</li>
            <li>Se usares o LibreOffice 3.5.x e queres verificar textos em 
			Inglês: Usa <em>Options -> Language Settings -> Writing Aids -> Edit...</em> 
			para desactivar o LightProof e activar o LanguageTool para o Inglês</li>
          </ul>

        </td>

        <td></td>

        <td valign="top">

          <ul style="padding-left: 20px">
            <li>Faz unzip ao ficheiro e inicia o languagetool-standalone.jar com um 
			duplo clique. Vê também <?=show_link("outras formas de usar o LanguageTool", "../usage/", 0)?>.</li>
          </ul>

          <?php
            $downloadTitleFx = "Descarregar LanguageToolFx";
            $downloadLabelFx = "Extensão para o Mozilla Firefox"; 
            include("../../include/downloadFx.php");
          ?>
          <div style="margin-left: 5px">
              Verifica o texto seleccionado em páginas web e<br/>em campos de texto. Não necessita Java!
          </div>
		  
        </td>

      </tr>
    </table>
</div>

<p>Builds diários não testados, do estado actual de desenvolvimento, estão 
disponíveis na
<?=show_link("directoria de snapshots", "../download/snapshots/?C=M;O=D", 0) ?>
 (<?=show_link("CHANGES.txt", "https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.txt", 0) ?>).
 Versões antigas continuam disponíveis na <?=show_link("directoria de download", "../download/", 0) ?>.</p>


<h3>Licença &amp; Código-Fonte</h3>

<p>O LanguageTool está disponível gratuitamente sob a <?=show_link("LGPL", "http://www.fsf.org/licensing/licenses/lgpl.html#SEC1", 0)?>.
O código-fonte está disponível em <?=show_link("GitHub", "https://github.com/languagetool-org/", 0) ?>.</p>

<?php
include("../../include/footer.php");
?>
