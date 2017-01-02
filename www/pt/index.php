<!doctype html>
<html lang=pt>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "pt";
    $checkDefaultLangWithCountry = "pt-PT";

    // ------------- TRANSLATIONS START HERE -------------

    $title = "LanguageTool Corrector Gramatical e de Estilo";

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
        'pt'  => 'Português',
        'ro'  => 'Romanian',
        'ru'  => 'Russian',
        'sk'  => 'Slovak',
        'sl'  => 'Slovenian',
        'es'  => 'Spanish',
        'sv'  => 'Swedish',
        'tl'  => 'Tagalog',
        'uk'  => 'Ukrainian'
    );

    $checkSubmitButtonValue = "Verificar Texto";
    $checkSubmitButtonTitle = "Verificar Texto";    //TODO: add "also possible by using Ctrl+Return"
    $toggleFullscreenMode = "Alternar o modo de ecrã inteiro";

    $introText1 = "O <strong>LanguageTool</strong> é <em>software</em> de Código Aberto de verificação gramatical para o Inglês, Francês, Alemão, Polaco, e mais de <a href='/languages/'>20 idiomas</a>.";
    $introText2 = "";

    $downloadHeadline = "Transferir";
    $downloadRequiresJava = "Requer Java {version}+";
    $downloadTitle = "Para <strong>LibreOffice</strong> e <strong>OpenOffice</strong>";
    $downloadTitleStandAlone = "Para <strong>Desktop</strong>";
    $downloadLabelFx = "Para <strong>Firefox</strong>";
    $downloadLabelChrome = "Para <strong>Chrome</strong>";
    $downloadLabelBrowserAddOn = "Extra do Navegador";
    $checklistText = "Por favor, veja a <a href='/issues/'>lista de problemas comuns</a> se tiver problemas.";
    $otherDownloadsText = "Descarregue <a href='/download/'>versões anteriores</a> ou os <a href='/download/snapshots/?C=M;O=D'>builds diários</a>.";
    $webstartText = "Inicie-o com o <a href='/webstart/web/LanguageTool.jnlp'>Java WebStart</a>.";

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

<a title="O LanguageTool instalado como um complemento do LibreOffice" class="fancyboxImage"
   href="../screenshots/art/screenshot_lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="../screenshots/art/screenshot_lo3_very_small.png" alt="Screenshot do LanguageTool"/></a>

<h2>Requisitos</h2>

<p>Utilizar o LanguageTool localmente requer o <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;<span lang="en-gb">8</span></a> ou superior.
<strong>Tem problemas? Por favor leia a <a href="../issues">lista de problemas comuns</a>.</strong></p>

<noscript class="warning">Por favor, active o Javascript - ele é utilizado para mostrar dicas após iniciar a transferência</noscript>

    <div class="downloadSection">
    <table width="90%">
        <td valign="top">

<h2>LibreOffice</h2>

          <ul style="padding-left: 20px">
            <li><strong>Recomendamos utilizar a versão mais recente do
			<a href="http://www.libreoffice.org/download">LibreOffice</a></strong> 
			visto que algumas versões mais antigas têm um erro que causa problemas 
			no arranque.</li>
            <li>Utilize <em>Ferramentas -&gt; Gestor de Extensões -&gt; Adicionar...</em> no OpenOffice/LibreOffice 
			para instalar a extensão;</li>
            <li><strong>Reinicie o OpenOffice/LibreOffice</strong> após a 
			instalação da extensão;</li>
            <li>Se utilizar o LibreOffice 3.5.x (ou superior), <strong>desative o LightProof e ative o LanguageTool</strong>
		em <em>Opções -> Definições de idioma -> Auxiliares de escrita -> Editar...</em>.</li>
          </ul>
        </td>
        <td></td>

<!--
        <td valign="top">
          <ul style="padding-left: 20px">
            <li>Descomprima o ficheiro e inicie o languagetool.jar com um 
			duplo clique. Veja também <a href="../usage/">outras formas de utilizar o LanguageTool</a>.</li>
          </ul>
        </td>

        <td valign="top">
          <div style="margin-left: 5px">
              Verifique o texto seleccionado em páginas web e<br/>em campos de texto. Não necessita Java!
          </div>
        </td>
-->
      </tr>
    </table>
</div>

<p>Builds diários não testados, no estado actual de desenvolvimento, estão 
disponíveis em
<a href="../download/snapshots/?C=M;O=D">SNAPSHOTS</a>
 (<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.md">lista de novidades</a>).
  As versões antigas continuam disponíveis no diretório de <a href="../download/">transferências</a>.</p>


<h2>Licença e Código-Fonte</h3>

<p>O LanguageTool está disponível gratuitamente sob a licença <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
O código-fonte está disponível em <a href="https://github.com/languagetool-org/">GitHub</a>.</p>

<h3>Versão Português Brasileiro</h2>
<p>O LanguageTool também possui uma página especial para o português brasileiro, <a href="https://languagetool.org/pt-BR/">carregue aqui</a>
para ser redirecionado.</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
