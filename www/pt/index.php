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
        'lt'  => 'Lithuanian',
        'ml'  => 'Malayalam',
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

    $downloadHeadline = "Descarregar";
    $downloadRequiresJava = "Requer Java {version}+";
    $downloadTitle = "LanguageTool para o <strong>LibreOffice/OpenOffice</strong>";
    $downloadTitleStandAlone = "LanguageTool para uso <strong>independente</strong>";
    $downloadLabelFx = "LanguageToolFx extensão para o <strong>Firefox</strong>";
    $checklistText = "Por favor vê a <a href='/issues/'>lista de problemas comuns</a> se experienciares problemas.";
    $otherDownloadsText = "Descarrega <a href='/download/'>versões anteriores</a> ou <a href='/download/snapshots/?C=M;O=D'>builds diários</a>.";
    $webstartText = "Inicia-o com o <a href='/webstart/web/LanguageTool.jnlp'>Java WebStart</a>.";

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

<a title="O LanguageTool instalado como um add-on no LibreOffice 3.3" class="fancyboxImage"
   href="../screenshots/art/screenshot_lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="../screenshots/art/screenshot_lo3_very_small.png" alt="Screenshot do LanguageTool"/></a>


<h2 style="margin-top: 40px">Experimentar <em>on-line</em></h2>


<p style="margin-top: 10px"><strong>Testa o LanguageTool sem o instalar, usando o Java WebStart.<br/></strong>
<strong><a href="../webstart/web/LanguageTool.jnlp">Iniciar o LanguageTool</a></strong> 
 (&gt;30&nbsp;MB, requer o <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;7</a> ou acima)</p>

<h2>Descarregar</h2>

<p>Usar o LanguageTool localmente requer o <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;7</a> ou acima.
<strong>Tens problemas? Por favor lê a <a href="../issues">lista de problemas comuns</a>.</strong></p>

<noscript class="warning">Por favor activa o Javascript - é usado para mostrar algumas dicas após iniciares uma transferência</noscript>

    <!--
    <div class="downloadSection">
    <table width="90%">
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
            <li>Faz unzip ao ficheiro e inicia o languagetool.jar com um 
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
-->

<p>Builds diários não testados, do estado actual de desenvolvimento, estão 
disponíveis na
<a href="../download/snapshots/?C=M;O=D">directoria de snapshots</a>
 (<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.txt">CHANGES.txt</a>).
 Versões antigas continuam disponíveis na <a href="../download/">directoria de download</a>.</p>


<h3>Licença &amp; Código-Fonte</h3>

<p>O LanguageTool está disponível gratuitamente sob a <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
O código-fonte está disponível em <a href="https://github.com/languagetool-org/">GitHub</a>.</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
