<!doctype html>
<html lang=fr>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "fr";
    $checkDefaultLangWithCountry = "fr-FR";

    // ------------- TRANSLATIONS START HERE -------------

    $title = "LanguageTool Correcteur grammatical";

    $checkLanguage = array(
        //'auto' => 'détecter automatiquement',
        'de-DE' => 'allemand',
        'en-US' => 'anglais',
        'ast' => 'asturien',
        'be' => 'biélorusse',
        'br' => 'breton',
        'ca' => 'catalan',
        'zh' => 'chinois',
        'da' => 'danois',
        'es' => 'espagnol',
        'eo' => 'espéranto',
        'fr' => 'français',
        'gl' => 'galicien',
        'el' => 'grec',
        'is' => 'islandais',
        'it' => 'italien',
        'ja' => 'japonais',
        'km' => 'khmer',
        'lt' => 'lituanien',
        'ml' => 'malayalam',
        'nl' => 'néerlandais',
        'fa' => 'persan',
        'pl' => 'polonais',
        'pt' => 'portugais',
        'ro' => 'roumain',
        'ru' => 'russe',
        'sk' => 'slovaque',
        'sl' => 'slovène',
        'sv' => 'suédois',
        'tl' => 'tagalog',
        'ta' => 'tamoul',
        'uk' => 'ukrainien'
    );

    $checkSubmitButtonValue = "Vérifier";
    $checkSubmitButtonTitle = "Vérifier le text, ou Ctrl-Entrée";
    $toggleFullscreenMode = "basculer le mode plein écran";

    $introText1 = "<strong>LanguageTool</strong> est un correcteur grammatical libre pour le français et <a href='/languages/'>plus de 20 autres langues</a>.";
    $introText2 = "Il trouve des erreurs qui ne sont pas signalées par un correcteur orthographique.";
    $contributeLink = "Contribuer !";

    $downloadHeadline = "Télécharger";
    $downloadRequiresJava = "Nécessite Java {version}+";
    $downloadTitle = "Pour <strong>LibreOffice</strong> / <strong>OpenOffice</strong>";
    $downloadTitleStandAlone = "<strong>Autonome</strong>";
    $downloadLabelFx = "Pour <strong>Firefox</strong>";
    $downloadLabelChrome = "Pour <strong>Chrome</strong>";
    $downloadLabelBrowserAddOn = "Module de navigateur";
    $checklistText = "Consulter la <a href='/issues/'>liste de problèmes</a> si vous rencontrez un problème.";
    $otherDownloadsText = "Télécharger une <a href='/download/'>vieille version</a> ou la <a href='/download/snapshots/?C=M;O=D'>dernière version quotidienne</a>.";
    $webstartText = "Démarrer avec <a href='/webstart/web/LanguageTool.jnlp'>Java WebStart</a>.";
    $firefoxLink = '<a href="/fr/firefox/">Plus d’informations</a>';
    $chromeLink = '<a href="/fr/chrome/">Plus d’informations</a>';

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

<p><strong>LanguageTool est un correcteur grammatical libre plurilingue pour le
français, l’anglais, l’allemand, le polonais, le breton, l’espéranto et <a href="../languages/">plus de 20 autres langues</a>.
Il trouve de nombreuses erreurs qui ne peuvent pas être signalées par un simple correcteur orthographique
comme les confusions d’homonyme (<em>des, dès, dés…</em>), les erreurs de grammaire telles que les
accords en genre ou en nombre, les conjugaisons incorrectes, etc.</strong></p>

<p>LanguageTool s’améliore en permanence. Des règles sont ajoutées ou modifiées presque tous les jours. Pour ceux qui désirent utiliser la version la plus récente, des versions mises à jours quotidiennement depuis la dernière version dans le dépôt git sont disponibles dans le
<a href="../download/snapshots/?C=M;O=D">répertoire snapshot</a>.

 Mais attention : ces versions sont moins testées que les versions officielles. Toutefois, LanguageTool comprend de
 nombreux tests unitaires et les versions quotidiennes sont donc assez stables en général.
 Les anciennes versions sont toujours disponibles dans le <a href="../download/">répertoire de téléchargement</a>.</p>

<h2>Copie d’écran dans LibreOffice</h2>

<img src="images/LanguageTool-LibreOffice.png" alt="LanguageTool (fr)"/>
<p>LanguageTool peut signaler bien plus d’erreurs que sur cette copie d’écran puisque LanguageTool contient plus de 2000 règles XML pour détecter des erreurs. Les fautes de grammaire trouvées par LanguageTool sous soulignées en bleu. Les fautes d’orthographe trouvées par le dictionnaire français de LibreOffice sont soulignées en rouge.</p>
<p>Veuillez vous assurer que la langue sélectionnée pour le texte dans LibreOffice/OpenOffice est bien le français afin que le correcteur grammatical puisse fonctionner correctement en français.</p>

<h3>Licence &amp; code source</h3>

<p>LanguageTool est disponible sous la licence <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
Le code source est disponible dans le dépôt <a href="https://github.com/languagetool-org/languagetool.git">git de github</a>.
Le contenu de cette page est disponible sous la licence <a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>.</p>

<p>LanguageTool utilise le dictionnaire français <a href="http://www.dicollecte.org/home.php?prj=fr">dicollecte</a> pour l’étiquetage grammatical des mots et la correction orthographique dans la version autonome (sans LibreOffice/OpenOffice).</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
