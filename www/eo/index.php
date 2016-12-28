<!doctype html>
<html lang=eo>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "eo";
    $checkDefaultLangWithCountry = "eo";

    // ------------- TRANSLATIONS START HERE -------------

    $title = "Lingvoilo Stila kaj gramatika kontrolilo";

    $checkLanguage = array(
        'ast' => 'asturia',
        //'auto' => 'aŭtomate detekti',
        'be' => 'belarusa',
        'br' => 'bretona',
        'zh' => 'ĉina',
        'da' => 'dana',
        'de-DE' => 'germana',
        'en-US' => 'angla',
        'eo' => 'Esperanto',
        'el' => 'greka',
        'es' => 'hispana',
        'fr' => 'franca',
        'gl' => 'galega',
        'is' => 'islanda',
        'it' => 'itala',
        'ja' => 'japana',
        'ca' => 'kataluna',
        'km' => 'kmera',
        //'lt' => 'litova',
        //'ml' => 'malajala',
        'nl' => 'nederlanda',
        'fa' => 'persa',
        'pl' => 'pola',
        'pt' => 'portugala',
        'ro' => 'rumana',
        'ru' => 'rusa',
        'sk' => 'slovaka',
        'sl' => 'slovena',
        'sv' => 'sveda',
        'tl' => 'tagaloga',
        'ta' => 'tamila',
        'uk' => 'ukraina',
    );

    $checkSubmitButtonValue = 'Kontroli';
    $checkSubmitButtonTitle = "Kontroli la tekston, aŭ Ktrl-Enenklavo";
    $toggleFullscreenMode = "baskuli plenekrane";

    $introText1 = "<strong>Lingvoilo (LanguageTool)</strong> estas libera plurlingva programo por kontroli stilon kaj gramatikon en Esperanto, sed ankaŭ en <a href='/languages/'>multaj aliaj lingvoj</a>.";
    $introText2 = "Ĝi atentigas pri eraroj ne trovitaj per simpla literuma kontrolilo.";
    $contributeLink = "Kunhelpi !";

    $downloadHeadline = "Elŝuti";
    $downloadRequiresJava = "Bezonas Java {version}+";
    $downloadTitle = "Por <strong>LibreOffice</strong> / <strong>OpenOffice</strong>";
    $downloadTitleStandAlone = "Memstara";
    $downloadLabelFx = "Por <strong>Firefox</strong>";
    $downloadLabelChrome = "Por <strong>Chrome</strong>";
    $downloadLabelBrowserAddOn = "Kromaĵo de retumilo";
    $checklistText = "Bonvolu vidi <a href='/issues/'>liston de problemoj</a>, se vi havas problemojn.";
    $otherDownloadsText = "Elŝuti <a href='/download/'>malnovajn versiojn</a> aŭ <a href='/download/snapshots/?C=M;O=D'>ĉiutagan version</a>.";
    $webstartText = "Startigi per <a href='/webstart/web/LanguageTool.jnlp'>Java WebStart</a>.";
    $firefoxLink = '<a href="/firefox/">Pliaj informoj</a>';
    $chromeLink = '<a href="/chrome/">Pliaj informoj</a>';

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

<p><Lingvoilo atentigas pri tiuj eraroj, kiujn literuma kontrolilo ne trovas.
Lingvoilo povas ankaŭ atentigi pri literumaj eraroj, sed la versio por
Libreoffice/OpenOffice nur atentigas pri gramatikaj eraroj. Uzu Esperantan vortaron
kune kun Lingvoilo por literumaj eraroj en Libreoffice/OpenOffice.</p>

<p>Por iuj eraroj, Lingvoilo sugestas korektojn, kaj
fojfoje havas ligilon al retaj gramatikoj
(<a href="http://bertilow.com/pmeg/enhavo.html">PMEG</a> de B. Wennergren,
<a href="http://www.esperanto.mv.ru/Seppik/index.html">La tuta Esperanto</a> de H. Seppik,
aŭ <a href="http://www.lernu.net">Lernu!</a>) aŭ al la
<a href="http://www.reta-vortaro.de/revo/">Reta Vortaro</a>
por pliaj detalaj klarigoj pri la eraro.</p>

<p>Lingvoilo daŭre pliboniĝas. Reguloj estas ofte aldonitaj aŭ ŝanĝitaj.
Por tiuj, kiuj deziras uzi la plej freŝan version,
<a href="../download/snapshots/?C=M;O=D">versioj ĝisdatigitaj ĉiu-tage</a> el
la lasta versio en la git-deponejo ankaŭ haveblas
(<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.md">liston de ŝanĝoj</a>).
Sed atentu: tiuj versioj estas malpli testitaj ol la oficiala versio.
Tamen, Lingvoilo enhavas multajn aŭtomatajn testojn, do la ĉiu-tagaj versioj
estas ankaŭ sufiĉe sencimaj.
Pli malnovaj oficialaj versioj ankoraŭ haveblas en la
<a href="../download/">dosierujo de elŝuto</a>.</p>

<h2>Ekrankopio en LibreOffice</h2>

<img src="images/Lingvoilo-LibreOffice.png" alt="Lingvoilo"/>
<p>Lingvoilo povas atentigi pri pli da eraroj ol tiuj en la ĉi-supra ekrankopio. Gramatikaj eraroj trovitaj per Lingvoilo estas blue emfazitaj. Literumaj eraroj trovitaj per la Esperanta vortaro de LibreOffice/OpenOffice estas ruĝe emfazitaj.</p>
<p>Certigu, ke la elektita lingvo de la teksto en LibreOffice/OpenOffice estas Esperanto, por ke la korektilo povu atentigi pri Esperantaj eraroj.</p>

<h2>Ĉu vi bezonas helpon?</h2>

<p>Bonvolu vidi <a href="../issues">liston de la plej oftaj problemoj</a>.
Por plia helpo, vi povas demandi aŭ en <a href="http://www.languagetool.org/forum/">la
forumo</a>, aŭ en la <a href="https://lists.sourceforge.net/lists/listinfo/languagetool-devel">retpoŝta
dissendlisto</a> aŭ retpoŝti al la
<a href="mailto:dominique.pelle@gmail.com">verkisto de la Esperanta versio</a>.</p>

<h2>Ligiloj al aliaj Esperantaj kontroliloj</h2>

Lingvoilo ne estas la nura Esperanta gramatika kontrolilo. Vidu ankaŭ:

<ul>
  <li><a href="http://lingvohelpilo.ikso.net/">Lingvohelpilo</a></li>
  <li><a href="http://www.esperantilo.org/index.html">Esperantilo</a></li>
</ul>

<h2>Permesilo kaj kodofonto</h2>

<p>Lingvoilo libere haveblas sub la permesilo <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
Kodofonto elŝuteblas ĉe <a href="https://github.com/languagetool-org/languagetool">github</a> per git:
<pre>$ git clone https://github.com/languagetool-org/languagetool.git
</pre></p>

<p>La enhavo de la hejmpaĝo haveblas sub la permesilo
<a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>.</p>

<div style="height:30px"></div>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
