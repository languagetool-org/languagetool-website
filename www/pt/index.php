<!doctype html>
<html lang=pt>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $title = "LanguageTool Corrector Gramatical e de Estilo";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textcontent">

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
$checkDefaultLang = "pt";
include("../../include/checkform-embedded.php");
?>

<p style="margin-top: 10px"><strong>Testa o LanguageTool sem o instalar, usando o Java WebStart.<br/></strong>
<strong><a href="../webstart/web/LanguageTool.jnlp">Iniciar o LanguageTool</a></strong> 
 (&gt;30&nbsp;MB, requer o <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;7</a> ou acima)</p>

<h2>Descarregar</h2>

<p>Usar o LanguageTool localmente requer o <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;7</a> ou acima.
<strong>Tens problemas? Por favor lê a <a href="../issues">lista de problemas comuns</a>.</strong></p>

<noscript class="warning">Por favor activa o Javascript - é usado para mostrar algumas dicas após iniciares uma transferência</noscript>

<?php
$downloadTitle = "Descarregar LanguageTool para o <strong>LibreOffice/OpenOffice</strong>";
$downloadTitleStandAlone = "Descarregar LanguageTool para uso <strong>independente</strong>";
$downloadLabelFx = "Descarregar LanguageToolFx Extensão para o Mozilla <strong>Firefox</strong>";
?>
<div id="download" style="margin: 0">
    <?php include("../../include/pages/download-buttons.php"); ?>
</div>

    <div class="downloadSection">
    <table width="100%">
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
			duplo clique. Vê também <a href="../usage/">outras formas de usar o LanguageTool</a>.</li>
          </ul>
        </td>

        <td valign="top">
          <div style="margin-left: 5px">
              Verifica o texto seleccionado em páginas web e<br/>em campos de texto. Não necessita Java!
          </div>
        </td>

      </tr>
    </table>
</div>

<p>Builds diários não testados, do estado actual de desenvolvimento, estão 
disponíveis na
<a href="../download/snapshots/?C=M;O=D">directoria de snapshots</a>
 (<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.txt">CHANGES.txt</a>).
 Versões antigas continuam disponíveis na <a href="../download/">directoria de download</a>.</p>


<h3>Licença &amp; Código-Fonte</h3>

<p>O LanguageTool está disponível gratuitamente sob a <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
O código-fonte está disponível em <a href="https://github.com/languagetool-org/">GitHub</a>.</p>

</div>

<?php
include("../../include/footer.php");
?>

</body>
</html>
