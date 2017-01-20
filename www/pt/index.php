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
        'is'  => 'Islandês',
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
<h2><strong>Versão 3.6</strong> (lançada a 28 de dezembro de 2016)</h2>
<h3>Novidades</h3>
    <ul>
        <li><strong>Gramática</strong>
            <ul>
                <li>Concordância nominal de género e número;<!-- <span class="errorMarker" title="Möglicherweise fehlende grammatische Übereinstimmung zwischen Artikel und Nomen bezüglich Genus">Der Haus</span> ist groß.--></li>
                <li>Concordância verbal entre sujeito e verbo;<!-- <span class="errorMarker" title="Möglicherweise fehlende grammatische Übereinstimmung zwischen Artikel, Adjektiv und Nomen">das roten Blatt</span> Papier auf.--></li>
                <li>Verificação de homónimos e parónimos acentuados.<!--  <span class="errorMarker" title="Die Präposition 'wegen' erfordert i.d.R. den Genitiv.">wegen diesem</span> Stau zu spät gekommen.--></li>
            </ul>
        </li>
        <li><strong>Palavras compostas</strong>
            <ul>
                <li>Novas regras para deteção de palavras compostas;<!--  <span class="errorMarker" title="Meinten Sie 'Französische' Revolution (1789–1799)? Zu mehrteiligen Namen gehörende Adjektive werden großgeschrieben.">französische</span> Revolution war ein wichtiges historisches Ereignis.--></li>
                <li>Melhorias significativas no reconhecimento de palavras hifenizadas;<!-- <span class="errorMarker" title="Dieser Satz fängt nicht mit einem großgeschriebenen Wort an">überprüfen</span> der Großschreibung am Satzanfang.--></li>
            </ul>
        </li>
        <li><strong>Regras para duplicação de elementos</strong>
            <!-- <ul>
                <li>Er hat <span class="errorMarker" title="'dieselbe' wird zusammengeschrieben.">die selbe</span> Frage gestellt.</li>
            </ul>-->
        </li>
        <li><strong>Regras para reconhecimento de vícios de linguagem</strong>
            <ul>
                <li>Redundâncias;<!--  <span class="errorMarker" title="Nur hinter einem Komma steht ein Leerzeichen, aber nicht davor."> ,</span> ob sie kommen möchte.--></li>
                <li>Clichés;<!--  <span class="errorMarker" title="Ein mit der Subjunktion 'weil' eingeleiteter Nebensatz wird i.d.R. mit (mindestens) einem Komma vom Hauptsatz abgetrennt.">weil</span> ich gute Noten haben will.--></li>
                <li>Repetições;<!--  <span class="errorMarker" title="Ein mit der Subjunktion 'weil' eingeleiteter Nebensatz wird i.d.R. mit (mindestens) einem Komma vom Hauptsatz abgetrennt.">weil</span> ich gute Noten haben will.--></li>
            </ul>
        </li>
        <li><strong>Regras de tipografia</strong>
            <ul>
                <li>Símbolos monetários;<!--  <span class="errorMarker" title="Nur hinter einem Komma steht ein Leerzeichen, aber nicht davor."> ,</span> ob sie kommen möchte.--></li>
                <li>Espaçamento;<!--  <span class="errorMarker" title="Ein mit der Subjunktion 'weil' eingeleiteter Nebensatz wird i.d.R. mit (mindestens) einem Komma vom Hauptsatz abgetrennt.">weil</span> ich gute Noten haben will.--></li>
                <li>Sinais tipográficos;<!--  <span class="errorMarker" title="Ein mit der Subjunktion 'weil' eingeleiteter Nebensatz wird i.d.R. mit (mindestens) einem Komma vom Hauptsatz abgetrennt.">weil</span> ich gute Noten haben will.--></li>
            </ul>
        </li>
        <li><strong>Regras de semântica</strong>
            <ul>
                <li>Reconhecimento e validação de datas;<!--  <span class="errorMarker" title="Möglicher Rechtschreibfehler gefunden. Vorschlag: normale">nromale</span> Rechtschreibprüfung:--></li>
            </ul>
        </li>
        <li><strong>Regras de estilo</strong>
            <ul>
                <li>Repetições;<!--  <span class="errorMarker" title="Meinten Sie 'elektrische Spannung'? 'Volt-Zahl' ist eine umgangssprachliche Ausdrucksweise.">Volt-Zahl</span> benötigt.--></li>
                <li>Gerundismo;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                <li>Voz passiva;<!-- <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                <li>Frases longas; <!-- <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                <li>Deteção de fragmentos;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
            </ul>
        </li>
        <li><strong>Reconhecimento das várias variantes de Português</strong>
            <ul>
                <li>Regras específicas para Português de Portugal;<!--  <span class="errorMarker" title="Meinten Sie 'elektrische Spannung'? 'Volt-Zahl' ist eine umgangssprachliche Ausdrucksweise.">Volt-Zahl</span> benötigt.--></li>
                <li>Regras específicas para o Novo Acordo Ortográfico;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                <li>Suporte adicionado para Português de Angola, Cabo Verde, Timor Leste, Guiné-Bissau, Macau, Moçambique e São Tomé e Príncipe;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                <li>Atualização de dicionários e da base de dados morfológica;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                <!-- <li> <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?</li>-->
            </ul>
        </li>
        <li><strong>Correções e melhorias diversas nos componentes antigos;</strong> <!-- <a href="http://de.wikipedia.org/wiki/Falscher_Freund" target="_blank">falsche Freunde</a> hin:
            <ul>
                <li>My <span class="errorMarker" title="'chef' bedeutet 'Chefkoch'/'Koch'. Meinten Sie 'chief' oder 'boss'?">chef</span> told me I'm not allowed to take vacation days.</li>
            </ul>-->
        </li>
        <li><strong>E muito mais…</strong></li>
    </ul>

    <h2>LibreOffice</h2>

    <a title="O LanguageTool instalado como um complemento do LibreOffice" class="fancyboxImage"
   href="./images/LO_screenshot.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="./images/LO_screenshot_small.png" alt="Screenshot do LanguageTool"/></a>

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
