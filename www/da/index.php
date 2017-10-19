<!doctype html>
<html lang=da>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LanguageTool, den grammatikkontrol fri og åben, med understøttelse af mere end 20 sprog, herunder alle varianter af den portugisiske.">
    <meta name="keywords" content="languageTool,grammatik,korrektor,korrektor,grammatik,gratis,
         open source,kode,åben,fri,gratis,verifikation,verificere,
         portugisisk,portugisisk,portugisisk,brasiliansk,brasiliansk,Libreoffice,
         OpenOffice,Firefox,Chrome">
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "da";
    $checkDefaultLangWithCountry = "da-DA";

    // ------------- TRANSLATIONS START HERE -------------

    $title = "LanguageTool grammatik og Style Broker";

    $checkLanguage = array(
        'auto'  =>  'automatisk',
        'de-DE'  =>  'tysk',
        'ast'  =>  'Asturian',
        'be'  =>  'hviderussisk'
        'br'  =>  'Bretón',
        'ca'  =>  'catalansk'
        'zh'  =>  'kinesisk',
        'da'  =>  'dansk',
        'en-US'  =>  'Engelsk',
        'sk'  =>  'slovakisk',
        'sl'  =>  'slovensk'
        'es'  =>  'spansk',
        'eo'  =>  'esperanto',
        'tl'  =>  'filippinsk',
        'fr'  =>  'fransk',
        'gl'  =>  'galiciske'
        'nl'  =>  'hollandsk',
        'el'  =>  'græsk'
        //'is'  =>  'islandsk',
        'it'  =>  'italiensk'
        'ja'  =>  'japansk',
        'km'  =>  'cambodjansk',
        //'lt'  =>  'Litauisk',
        //'ml'  =>  'Malay',
        'fa'  =>  'persisk',
        'pl'  =>  'polsk'
        'pt'  =>  'portugisisk',
        'ro'  =>  'Rómeno',
        'ru'  =>  'russisk',
        'sv'  =>  'svensk',
        'uk'  =>  'ukrainsk'
    );


    $ addYourTextHere = "Sæt din tekst her";
    $ checkSubmitButtonValue = "Bekræft tekst";
    $ checkSubmitButtonTitle = "Check Text (Ctrl + Return)";
    $ toggleFullscreenMode = "Fuld skærm";

    $ IntroText1 = "<strong>LanguageTool</strong> er et gratis og open source for at tjekke grammatik på portugisisk, engelsk, fransk, tysk, polsk, og andre <a href='/languages/'>20 sprog</a>.";
    $ introText2 = "Find mange grammatik og stilproblemer, samt kontroller stavning effektivt.";
    $ addToChrome = "Tilføj til Chrome";
    $ addToFirefox = "Tilføj til Firefox";

    $ forumHeadline = "Forum";
    $ developmentHeadline = "Udvikling";
    $ compareEditionsText = "Sammenlign versioner";
    $ moreIntegrationsText = "Flere integrationer";
    $ downloadHeadline = "Download";
    $ downloadRequiresJava = "Java {version} +";
    $ downloadTitle = "For <strong>eller LibreOffice</strong>";
    $ downloadTitleStandAlone = "<strong>Executable independent</strong>";
    $ downloadLabelFx = "For <strong>eller Firefox</strong>";
    $ downloadLabelChrome = "For <strong>eller Chrome</strong>";
    $ downloadLabelBrowserAddOn = "Ekstra til webbrowseren";
    $ downloadLabelGoogleDocs = "For <strong>eller Google Dokumenter</strong>";
    $ downloadLabelAddOn = "Complement";
    $ checklistText = "Hvis du har problemer, skal du se <a href='/issues/'> listen over løsninger</a>.";
    $ OtherDownloadsText = "Du kan også overføre <a href='/download/'>tidligere</a> eller <a href='/download/snapshots/?C=M;O=D'><em>bygger</em>dagbøger</a>.";
    $ WebstartText = "indlede <a href='/webstart/web/LanguageTool.jnlp'> JavaWebStart</a>.";

    $firefoxLink = '<a href="/firefox/">Flere oplysninger</a>';
    $chromeLink = '<a href="/chrome/">Flere oplysninger</a>';

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/page_start.php"); ?>

<div id="languageContent">
    <h2>LibreOffice</h2>

    <a title="LanguageTool installeret som en LibreOffice add-in" class="fancyboxImage"
   href="./images/LO_screenshot.png"><img style="margin-left: 15px" width="200" height="118" align="right"
   src="./images/LO_screenshot_small.png" alt="Skærmbillede af LanguageTool"/></a>

    <ul>
       <li><strong><a href="https://da.libreoffice.org/">bruge LibreOffice</a> anbefale den nyeste version</strong>. Nogle ældre versioner har problemer med at starte op.</li>
       <li>Brug <em>Værktøjer - &gt; Extension Manager - &gt; Tilføj…</em> til LibreOffice for at installere udvidelsen;</li>
       <li><strong>Genstart</strong> eller LibreOffice efter installationen af ​​udvidelsen;</li>
       <li> Hvis du bruger LibreOffice 3.5.x (eller højere), <strong>deaktivere den aktive og lystæt LanguageTool</strong> Indstillinger <em>-> Sprogindstillinger -> Skrivehjælp -> Rediger...</em>.</li>
    </ul>

</div>

<!--h2><strong>Versão 3.9</strong> (lançada a 26 de setembro de 2017)</h2>

    <ul>
        <li>Esta edição teve principal foco na melhoria de regras e da verificação ortográfica, aumentando a capacidade de deteção, e diminuindo o número de avisos desnecessários.</li>
   </ul>

<h3>Novidades</h3>

    <ul>
        <li><strong>Estilo</strong>
            <ul>
                <li>Deteção de expressões propagandísticas, palavras que revelam fragilidade, ou enviesamentos de opinião (opcional);</li>
           </ul>
       </li>
        <li><strong>Gramática</strong>
            <ul>
                <li>Concordância de tempos verbais;</li>
           </ul>
       </li>
        <li><strong>Tipografia</strong>
            <ul>
                <li>Melhorias significativas na deteção de espaçamentos incorretos, formatação de números e de operadores matemáticos;</li>
           </ul>
       </li>
        <li><strong>Pontuação</strong>
            <ul>
                <li>Pontuação em abreviaturas, cumprimentos e despedidas em cartas formais;</li>
           </ul>
       </li>
        <li><strong>Novas categorias</strong>
            <ul>
                <li>Sintaxe;</li>
           </ul>
       </li>
        <li><strong>Atualização dos dicionários Dicionários Portugueses Complementares 2.0</strong>
        <li><strong>Exceções à verificação ortográfica para abreviaturas, variáveis em fórmulas, unidades de medida, e vocabulário estatístico diverso.</strong>
       </li>
        <li><strong>Correções e melhorias diversas nos componentes antigos;</strong>
       </li>
   </ul>

<h2><strong>Versão 3.8</strong> (lançada a 27 de julho de 2017)</h2>

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
           </ul>
       </li>
        <li><strong>Regras de tipografia</strong>
            <ul>
                <li>Regras para unidades do Sistema Internacional;</li>
                <li>Melhorias significativas na formatação de números e símbolos matemáticos;</li>
           </ul>
       </li>
        <li><strong>Novas categorias</strong>
            <ul>
                <li>Identificador de palavras alteradas pelo AO90;</li>
                <li>Nomes Personalidades;</li>
                <li>Regionalismos;</li>
           </ul>
       </li>
        <li><strong>Gramática</strong>
            <ul>
                <li>Regras para coerência de grafias;</li>
                <li>Melhorias significativas em todos os subgrupos de regras;</li>
           </ul>
       </li>
        <li><strong>Atualização dos dicionários Dicionários Portugueses Complementares 1.4</strong>
        <li><strong>Exceções à verificação ortográfica para expressões comuns em Inglês e Francês. Melhorias na deteção de expressões em Latim.</strong>
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
                <li>Símbolos monetários; Espaçamento; Sinais tipográficos;--> <!--  <span class="errorMarker" title="Ein mit der Subjunktion 'weil' eingeleiteter Nebensatz wird i.d.R. mit (mindestens) einem Komma vom Hauptsatz abgetrennt.">weil</span> ich gute Noten haben will.--><!--/li>
           </ul>
       </li>
        <li><strong>Regras de semântica</strong>
            <ul>
                <li>Reconhecimento e validação de datas;--><!--  <span class="errorMarker" title="Möglicher Rechtschreibfehler gefunden. Vorschlag: normale">nromale</span> Rechtschreibprüfung:--><!--/li>
           </ul>
       </li>
        <li><strong>Regras de estilo</strong>
            <ul>
                <li>Repetições; Gerundismo; Voz passiva; Frases longas;  Deteção de fragmentos;--><!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--><!--/li>
           </ul>
       </li>
        <li><strong>Reconhecimento das várias variantes de Português</strong>
            <ul>
                <li>Regras específicas para Português de Portugal; Regras específicas para o Novo Acordo Ortográfico; Suporte adicionado para Português de Angola, Cabo Verde, Timor Leste, Guiné-Bissau, Macau, Moçambique e São Tomé e Príncipe; Atualização de dicionários e da base de dados morfológica;--><!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--><!--</li-->
                <!-- <li> <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?</li>
           </ul>
       </li>
        <li><strong>Correções e melhorias diversas nos componentes antigos;</strong> --><!-- <a href="http://de.wikipedia.org/wiki/Falscher_Freund" target="_blank">falsche Freunde</a> hin:>
       </li>
        <li><strong>E muito mais…</strong></li>
   </ul-->

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
     </tr>
   </table>
 </div>
-->

<!-- TODO Information is repeated. Consider removal.
<h2>Requisitos</h2>

<p>Utilizar o LanguageTool localmente requer o <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;<span lang="en-gb">8</span></a> ou superior.
<strong>Tem problemas? Por favor leia a <a href="../issues">lista de problemas comuns</a>.</strong></p>
-->

<div id="languageContent">
<h2>Andre versioner</h2>

<p>De eksperimentelle <em>logfiler</em> med den nyeste udviklingsstatus er tilgængelige i SNAPSHOTS <a href="../download/snapshots/?C=M;O=D"></a>
 (<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.md">nyhedsliste</a>).</p>
<p>Gamle versioner er stadig tilgængelige i <a href="../download/"></a> overførselsmappen.</p>

<h2> Licens og kildekode</h2>

<p>LanguageTool er tilgængelig gratis under licens <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>. For information om komponentlicenser henvises til <a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/src/main/resources/third-party-licenses/README.txt">README.txt</a>.</p>
<p>Kildekoden er tilgængelig på GitHub <a href="https://github.com/languagetool-org/"></a>.</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
