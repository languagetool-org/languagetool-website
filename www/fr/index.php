<!doctype html>
<html lang=fr>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "fr";

    // ------------- TRANSLATIONS START HERE -------------

    $title = "LanguageTool Correcteur grammatical";

    $checkLanguage = array(
        //'auto' => 'détecter automatiquement',
        'en-US' => 'anglais',
        'ast' => 'asturien',
        'be' => 'biélorusse',
        'br' => 'breton',
        'zh' => 'chinois',
        'da' => 'danois',
        'eo' => 'espéranto',
        'fr' => 'français',
        'gl' => 'galicien',
        'de-DE' => 'allemand',
        'es' => 'espagnol',
        'is' => 'islandais',
        'it' => 'italien',
        'ca' => 'catalan',
        'km' => 'khmer',
        'lt' => 'lituanien',
        'ml' => 'malayalam',
        'nl' => 'néerlandais',
        'pl' => 'polonais',
        'pt' => 'portugais',
        'ro' => 'roumain',
        'ru' => 'russe',
        'sk' => 'slovaque',
        'sl' => 'slovène',
        'sv' => 'suédois',
        'tl' => 'tagalog',
        'uk' => 'ukrainien'
    );

    $checkSubmitButtonTitle = "Vérifier";    //TODO: add "also possible by using Ctrl+Return"
    $toggleFullscreenMode = "basculer le mode plein écran";

    $introText1 = "<strong>LanguageTool</strong> est un correcteur grammatical libre plurilingue pour le français, l’anglais, l’allemand, le polonais, le breton, l’espéranto et <a href='/languages/'>plus de 20 autres langues</a>.";
    $introText2 = "";

    $downloadHeadline = "Télécharger";
    $downloadRequiresJava = "Nécessite Java {version}";
    $downloadTitle = "Télécharger LanguageTool pour <strong>LibreOffice/OpenOffice</strong>";
    $downloadTitleStandAlone = "Télécharger LanguageTool <strong>autonome</strong>";
    $downloadLabelFx = "Télécharger LanguageTool pour <strong>Firefox</strong>";
    $checklistText = "Consuler la <a href='/issues/'>liste de problèmes</a> si vous rencontrez un problème.";
    $otherDownloadsText = "Télécharger une <a href='/download/'>vieille version</a> ou la <a href='/download/snapshots/?C=M;O=D'>dernière version quotidienne</a>.";
    $webstartText = "Démarrer avec <a href='/webstart/web/LanguageTool.jnlp'>Java WebStart</a>.";

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

<p>LanguageTool trouve des erreurs en recherchant des motifs définis par des règles XML.
Il est aussi possible de définir des règles en Java.</p>

<h2 style="margin-top: 40px">Essayer LanguageTool en ligne</h2>

<p>Utilisez LanguageTool <a href="../usage/">dans LibreOffice/OpenOffice.org, comme une application autonome, ou intégrée à d’autres applications</a>
  ou essayez-le ici sur cette page :</p>

<p><strong>Essayer LanguageTool sans installation, avec Java WebStart.</strong>
L’application LanguageTool nécessite <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;7</a> :<br />
<strong><a href="../webstart/web/LanguageTool.jnlp">Démarrer LanguageTool (&gt;30&nbsp;Mo)</a></strong></p>

<h2>Télécharger</h2>

<p>LanguageTool nécessite <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;7</a>. <strong>Avez-vous des problèmes ? Contrôlez s’il vous plait la <a href="../issues">liste des problèmes les plus fréquents</a>.</strong></p>

<!--
    <div class="downloadSection">
    <table width="90%">
      <tr>
        <td valign="top">

          <ul style="padding-left: 20px">
            <li>Cette version est une extension pour LibreOffice/OpenOffice.
                 Elle signale les erreurs de grammaire mais pas les fautes
                 d’orthographe puisque LibreOffice/OpenOffice peut déjà
                 signaler les fautes d’orthographe en téléchargeant un
                 <a href="http://extensions.services.openoffice.org/fr/dictionaries?">dictionnaire
                 pour LibreOffice/OpenOffice</a>.</li>
            <li><strong>Nous recommandons fortement d’utiliser
                <a href="http://www.libreoffice.org/download">LibreOffice 3.5.4</a></strong>
                (ou plus récent) ou <strong><a href="http://www.openoffice.org/download/">Apache
                OpenOffice 3.4.1</a></strong> (ou plus récent), car les versions plus anciennes
                ont un bug qui cause un long délai au démarrage.</li>
            <li>Utilisez <em>Outils… → Gestionnaire des extensions… → Ajouter…</em> dans
                LibreOffice/OpenOffice.org pour installer ce fichier.</li>
            <li><strong>Redémarrer OpenOffice.org/LibreOffice</strong> après
                l’installation de l’extension.</li>
            <li>Si vous utilisez LibreOffice 3.5.x et vous désirez contrôler
                des textes en anglais, choisissez :
                <em>Outils… → Options… → Paramètres linguistiques → Linguistique</em>
                pour désactiver LightProof et activer LanguageTool pour l’anglais.</li>
          </ul>
        </td>

        <td valign="top">
          <ul style="padding-left: 20px">
            <li>Cette version est pour ceux qui désirent utiliser LanguageTool
                en dehors de LibreOffice/OpenOffice en utilisant par exemple
                l’interface graphique Java de LanguageTool, ou en ligne
                de commande, ou comme serveur, ou intégrée à d’autres
                applications telles que
                l’<a href="http://www.vim.org/scripts/script.php?script_id=3223">éditeur de texte Vim</a>.
                Cette version signale non seulement les fautes de grammaire
                mais aussi les fautes d’orthographe grâce à des dictionnaires
                intégrés à LanguageTool.</li>
            <li>Dézippez le fichier et démarrez languagetool.jar en
                double-cliquant dessus. Voyez aussi les
                <a href="../usage/">autres manières d’utiliser LanguageTool</a>.</li>
          </ul>
        </td>
        <td valign="top">
          <ul style="padding-left: 20px">
            <li>Cette extension de Firefox contrôle la grammaire dans la sélection de texte des pages web, ou dans les champs de texte. Java n’est pas requis.</li>
          </ul>
        </td>
      </tr>
    </table>
</div>
-->
    
<p>LanguageTool s’améliore en permanence. Des règles sont ajoutées ou modifiées presque tous les jours. Pour ceux qui désirent utiliser la version la plus récente, des versions mises à jours quotidiennement depuis la dernière version dans le dépôt git sont disponibles dans le
<a href="../download/snapshots/?C=M;O=D">répertoire snapshot</a>
 (<a href="http://www.languagetool.org/download/CHANGES.txt">CHANGES.txt</a>).

 Mais attention : ces versions sont moins testées que les versions officielles. Toutefois, LanguageTool comprend de 
 nombreux tests unitaires et les versions quotidiennes sont donc assez stables en général.
 Les anciennes versions sont toujours disponibles dans le <a href="../download/">répertoire de téléchargement</a>.</p>

<h2>Copie d’écran dans LibreOffice</h2>

<img src="images/LanguageTool-LibreOffice.png" alt="LanguageTool (fr)"/>
<p>LanguageTool peut signaler bien plus d’erreurs que sur cette copie d’écran puisque LanguageTool contient plus de 2000 règles XML pour détecter des erreurs. Les fautes de grammaire trouvées par LanguageTool sous soulignées en bleu. Les fautes d’orthographe trouvées par le dictionnaire français de LibreOffice sont soulignées en rouge.</p>
<p>Veuillez vous assurer que la langue sélectionnée pour le texte dans LibreOffice/OpenOffice est bien le français afin que le correcteur grammatical puisse fonctionner correctement en français.</p>

<h3>License &amp; code source</h3>

<p>LanguageTool est disponible sous la licence <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
Le code source est disponible dans le dépôt <a href="https://github.com/languagetool-org/languagetool.git">git de github</a>.
Le contenu de cette page est disponible sous la licence <a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>.</p>

<p>LanguageTool utilise le dictionnaire français <a href="http://www.dicollecte.org/home.php?prj=fr">dicollecte</a> pour l’étiquetage grammatical des mots et la correction orthographique dans la version autonome (sans LibreOffice/OpenOffice).</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
