<!doctype html>
<html lang=pt>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LanguageTool, o corretor gramatical livre e gratuito, com suporte para mais de 20 idiomas, incluíndo todas as variantes do português.">
    <meta name="keywords" content="languageTool,gramática,corretor,corrector,gramatical,livre,
         open-source,código,aberto,gratuito,grátis,verificação,
         verificar,português,portuguesa,portugal,brasileiro,brasil,libreOffice,
         openoffice,firefox,chrome">
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "pt";
    $checkDefaultLangWithCountry = "pt-PT";

    // ------------- TRANSLATIONS START HERE -------------

    $title = "LanguageTool Corretor Gramatical e de Estilo";

    $checkLanguage = array(
        'de-DE'  => 'Alemão',
        'ast' => 'Asturiano',
        'be'  => 'Biolorusso',
        'br'  => 'Bretão',
        'ca'  => 'Catalão',
        'zh'  => 'Chinês',
        'da'  => 'Dinamarquês',
        'en-US'  => 'Inglês',
        'sk'  => 'Eslovaco',
        'sl'  => 'Esloveno',
        'es'  => 'Espanhol',
        'eo'  => 'Esperanto',
        'tl'  => 'Filipino',
        'fr'  => 'Francês',
        'gl'  => 'Galego',
        'nl'  => 'Holandês',
        'el'  => 'Grego',
        //'is'  => 'Islandês',
        'it'  => 'Italiano',
        'ja'  => 'Japonês',
        'km'  => 'Khmer',
        //'lt'  => 'Lithuanian',
        //'ml'  => 'Malayalam',
        'fa'  => 'Persa',
        'pl'  => 'Polaco',
        'pt'  => 'Português',
        'ro'  => 'Romeno',
        'ru'  => 'Russo',
        'sv'  => 'Sueco',
        'uk'  => 'Ucraniano'
    );

    $checkSubmitButtonValue = "Verificar Texto";
    $checkSubmitButtonTitle = "Verificar Texto (Ctrl+Return)";
    $toggleFullscreenMode = "Ecrã inteiro";

    $introText1 = "O <strong>LanguageTool</strong> é um programa livre e de código aberto para verificação gramatical em Português, Inglês, Francês, Alemão, Polaco, entre outros <a href='/languages/'>20 idiomas</a>.";
    $introText2 = "Encontra muitos erros que um corretor ortográfico não consegue detetar, e também deteta problemas de gramática.";

    $downloadHeadline = "Transferir";
    $downloadRequiresJava = "Requer Java {version}+";
    $downloadTitle = "Para o <strong>LibreOffice</strong> e <strong>OpenOffice</strong>";
    $downloadTitleStandAlone = "Para o <strong>Desktop</strong>";
    $downloadLabelFx = "Para o <strong>Firefox</strong>";
    $downloadLabelChrome = "Para o <strong>Chrome</strong>";
    $downloadLabelBrowserAddOn = "Extra para o Navegador Web";
    $downloadLabelGoogleDocs = "Para o <strong>Google Docs</strong>";
    $downloadLabelAddOn = "Complemento";
    $checklistText = "Se tiver problemas, por favor, veja a <a href='/issues/'>lista de soluções</a>.";
    $otherDownloadsText = "Também pode transferir <a href='/download/'>versões anteriores</a> ou <a href='/download/snapshots/?C=M;O=D'><em>builds</em> diários</a>.";
    $webstartText = "Inicie-o com o <a href='/webstart/web/LanguageTool.jnlp'>Java WebStart</a>.";

    $firefoxLink = '<a href="/firefox/">Mais Informações</a>';
    $chromeLink = '<a href="/chrome/">Mais Informações</a>';

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/page_start.php"); ?>

<div id="languageContent">
<h2><strong>Versão 3.8</strong> (lançada a 27 de julho de 2017)</h2>

    <a title="O LanguageTool instalado como um complemento do LibreOffice" class="fancyboxImage"
   href="./images/LO_screenshot.png"><img style="margin-left: 15px" width="200" height="118" align="right"
   src="./images/LO_screenshot_small.png" alt="Screenshot do LanguageTool"/></a>

<h3>Novidades</h3>
    <ul>
        <li><strong>Estilo</strong>
            <ul>
                <li>Deteção de expressões prolixas;</li>
                <li>Reconhecimento de formas infletidas de barbarismos e redundâncias;</li>
                <li>Reconhecimento de cacofonias;</li>
            </ul>
        </li>
        <li><strong>Níveis de discurso (Discurso formal)</strong>
            <ul>
                <li>Identificação de arcaísmos, linguagem infantil e gírias;</li>
                <li>Melhorias significativas na deteção de linguagem informal;</li>
                <li>Validador de URLs.</li>
            </ul>
        </li>
        <li><strong>Regras de tipografia</strong>
            <ul>
                <li>Regras para o unidades do Sistema Internacional;</li>
                <li>Melhorias significativas na formatação de números e símbolos matemáticos;</li>
            </ul>
        </li>
        <li><strong>Novas categorias</strong>
            <ul>
                <li>Identificador de palavras alteradas pelo AO90;</li>
                <li>Nomes Personalidades;</li>
                <li>Regionalismos.</li>
            </ul>
        </li>
        <li><strong>Gramática</strong>
            <ul>
                <li>Melhorias significativas em todas os sub-grupos de regras;</li>
            </ul>
        </li>
        <li><strong>Atualização dos dicionários Dicionários Portugueses Complementares 1.4</strong>
        <li><strong>Exceções à verificação ortográfica para expressões comuns em Inglês, Francês e melhorias na deteção de expressões em Latim.</strong>
        </li>
        <li><strong>Correções e melhorias diversas nos componentes antigos;</strong>
        </li>
    </ul>

<h2><strong>Versão 3.7</strong> (lançada a 27 de março de 2017)</h2>

    <a title="O LanguageTool instalado como um complemento do LibreOffice" class="fancyboxImage"
   href="./images/LO_screenshot.png"><img style="margin-left: 15px" width="200" height="118" align="right"
   src="./images/LO_screenshot_small.png" alt="Screenshot do LanguageTool"/></a>

<h3>Novidades</h3>
    <ul>
        <li><strong>Gramática</strong>
            <ul>
                <li>Regras para erros de crase;</li>
                <li>Utilização de verbos impessoais;</li>
                <li>Ajustes nas regras de concordância nominal e verbal;</li>
                <li>Melhorias significativas na deteção de fragmentos;</li>
                <li>Melhorias significativas na deteção de homónimos e parónimos acentuados (p.ex. mau-mal);</li>
                <li>Melhorias significativas nas regras de colocação pronominal.</li>
                <li>Novas regras gramaticais em categorias diversas</li>
            </ul>
        </li>
        <li><strong>Capitalização</strong>
            <ul>
                <li>Novas regras para ambos os Acordos Ortográficos.</li>
            </ul>
        </li>
        <li><strong>Estilo</strong>
            <ul>
                <li>Mais regras para deteção de duplicações;</li>
                <li>Barbarismos;</li>
                <li>Formatação de estrangeirismos.</li>
            </ul>
        </li>
        <li><strong>Regras de tipografia</strong>
            <ul>
                <li>Pontuação de abreviaturas, reticências e unidades de medida;</li>
                <li>Formatação de números;</li>
                <li>Fórmulas químicas;</li>
                <li>Graus, minutos e segundos;</li>
                <li>Hífenes e travessões;</li>
            </ul>
        </li>
        <li><strong>Regras de semântica (contexto)</strong>
            <ul>
                <li>Identificação de palavras mal utilizadas por identificação do contexto;</li>
                <li>Melhorias significativas na verificação de datas;</li>
                <li>Validador de URLs.</li>
            </ul>
        </li>
        <li><strong>Novas categorias</strong>
            <ul>
                <li>Marcas comercias;</li>
                <li>Erros de tradução.</li>
            </ul>
        </li>
        <li><strong>Suporte para falsos cognatos</strong>
            <ul>
                <li>Português para Alemão, Espanhol, Francês, Galego e Inglês.</li>
            </ul>
        </li>
        <li><strong>Novos dicionários baseados num fork do Projecto Natura (integram mais palavras derivadas)</strong>
        <li><strong>Exceções à verificação ortográfica para certos nomes científicos, expressões estrangeiras ou em latim</strong>
        </li>
        <li><strong>Correções e melhorias diversas nos componentes antigos;</strong>
        </li>
        <li><strong>E muito mais…</strong></li>
    </ul>

<h2><strong>Versão 3.6</strong> (lançada a 28 de dezembro de 2016)</h2>

<h3>Novidades</h3>
    <ul>
        <li><strong>Gramática</strong>
            <ul>
                <li>Concordância nominal de género e número; Concordância verbal entre sujeito e verbo; Verificação de homónimos e parónimos acentuados.</li>
            </ul>
        </li>
        <li><strong>Palavras compostas</strong>
            <ul>
                <li>Novas regras para deteção de palavras compostas; Melhorias significativas no reconhecimento de palavras hifenizadas;</li>
            </ul>
        </li>
        <li><strong>Regras para duplicação de elementos</strong>
        </li>
        <li><strong>Regras para reconhecimento de vícios de linguagem</strong>
            <ul>
                <li>Redundâncias; Clichés; Repetições;</li>
            </ul>
        </li>
        <li><strong>Regras de tipografia</strong>
            <ul>
                <li>Símbolos monetários; Espaçamento; Sinais tipográficos;<!--  <span class="errorMarker" title="Ein mit der Subjunktion 'weil' eingeleiteter Nebensatz wird i.d.R. mit (mindestens) einem Komma vom Hauptsatz abgetrennt.">weil</span> ich gute Noten haben will.--></li>
            </ul>
        </li>
        <li><strong>Regras de semântica</strong>
            <ul>
                <li>Reconhecimento e validação de datas;<!--  <span class="errorMarker" title="Möglicher Rechtschreibfehler gefunden. Vorschlag: normale">nromale</span> Rechtschreibprüfung:--></li>
            </ul>
        </li>
        <li><strong>Regras de estilo</strong>
            <ul>
                <li>Repetições; Gerundismo; Voz passiva; Frases longas;  Deteção de fragmentos;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
            </ul>
        </li>
        <li><strong>Reconhecimento das várias variantes de Português</strong>
            <ul>
                <li>Regras específicas para Português de Portugal; Regras específicas para o Novo Acordo Ortográfico; Suporte adicionado para Português de Angola, Cabo Verde, Timor Leste, Guiné-Bissau, Macau, Moçambique e São Tomé e Príncipe; Atualização de dicionários e da base de dados morfológica;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                <!-- <li> <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?</li>-->
            </ul>
        </li>
        <li><strong>Correções e melhorias diversas nos componentes antigos;</strong> <!-- <a href="http://de.wikipedia.org/wiki/Falscher_Freund" target="_blank">falsche Freunde</a> hin:-->
        </li>
        <li><strong>E muito mais…</strong></li>
    </ul>

    <h2>LibreOffice</h2>

    <ul>
       <li><strong>Recomendamos utilizar a versão mais recente do <a href="http://www.libreoffice.org/download">LibreOffice</a></strong>. Algumas versões mais antigas têm problemas no arranque.</li>
       <li>Utilize <em>Ferramentas -&gt; Gestor de Extensões -&gt; Adicionar…</em> no OpenOffice/LibreOffice para instalar a extensão;</li>
       <li><strong>Reinicie</strong> o OpenOffice/LibreOffice após a instalação da extensão;</li>
       <li>Se utilizar o LibreOffice 3.5.x (ou superior), <strong>desative o LightProof e ative o LanguageTool</strong> em <em>Opções -> Definições de idioma -> Auxiliares de escrita -> Editar…</em>.</li>
     </ul>

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

<!-- TODO Information is repeated. Consider removal.
<h2>Requisitos</h2>

<p>Utilizar o LanguageTool localmente requer o <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;<span lang="en-gb">8</span></a> ou superior.
<strong>Tem problemas? Por favor leia a <a href="../issues">lista de problemas comuns</a>.</strong></p>
-->

<div id="languageContent">
<h2>Outras versões</h2>

<p>Os <em>builds</em> diários não testados, no estado actual de desenvolvimento, estão disponíveis em <a href="../download/snapshots/?C=M;O=D">SNAPSHOTS</a>
 (<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.md">lista de novidades</a>).</p>
<p>As versões antigas continuam disponíveis no diretório de <a href="../download/">transferências</a>.</p>

<h2>Licença e Código-Fonte</h2>

<p>O LanguageTool está disponível gratuitamente sob a licença <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>. Os dicionários de verificação ortográfica utilizados são os <a href="http://natura.di.uminho.pt/wiki/doku.php?id=dicionarios:main">Dicionários Natura</a>. O sintetizador e o dicionário morfológico são baseados numa derivação do <a href="https://github.com/TiagoSantos81/FreeLing">Freeling</a>. Para informações sobre as licenças dos componentes consulte o <a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/src/main/resources/third-party-licenses/README.txt">README.txt</a>.</p>
<p>O código-fonte está disponível em <a href="https://github.com/languagetool-org/">GitHub</a>.</p>

<h2>Versão em Português do Brasil</h2>
<p>Também pode visitar a página na versão para Português do Brasil, <a href="https://languagetool.org/pt-BR/">aqui</a>.</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
