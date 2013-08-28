<?php
$page = "fr";
$title = "LanguageTool";
$title2 = "Correcteur grammatical";
$lastmod = "2013-01-05 14:00:00 CET";
$enable_textcheck = 1;
$enable_fancybox = 1;
include("../../include/header.php");
?>

<p class="firstpara"><strong>LanguageTool est un correcteur grammatical libre plurilingue pour le
français, l’anglais, l’allemand, le polonais, le breton, l’espéranto et <?=show_link("plus de 20 autres langues", "../languages/", 0) ?>.
Il trouve de nombreuses erreurs qui ne peuvent pas être signalées par un simple correcteur orthographique
comme les confusions d’homonyme (<em>des, dès, dés…</em>), les erreurs de grammaire telles que les
accords en genre ou en nombre, les conjugaisons incorrectes, etc.</strong></p>

<p>LanguageTool trouve des erreurs en recherchant des motifs définis par des règles XML.
Il est aussi possible de définir des règles en Java.</p>

<h2 style="margin-top: 40px">Essayer LanguageTool en ligne</h2>

<p>Utilisez LanguageTool <?=show_link("dans LibreOffice/OpenOffice.org, comme une application autonome, ou intégrée à d’autres applications", "../usage/", 0)?>
  ou essayez-le ici sur cette page :</p>

<?php
$checkSubmitButtonValue = 'Vérifier';
$showLanguageBox = 1;

$checkDefaultLang = 'fr';

$checkLanguage['auto']  = 'détecter automatiquement';
$checkLanguage['en-US'] = 'anglais';
$checkLanguage['ast']   = 'asturien';
$checkLanguage['be']    = 'biélorusse';
$checkLanguage['br']    = 'breton';
$checkLanguage['zh']    = 'chinois';
$checkLanguage['da']    = 'danois';
$checkLanguage['eo']    = 'espéranto';
$checkLanguage['fr']    = 'français';
$checkLanguage['gl']    = 'galicien';
$checkLanguage['de-DE'] = 'allemand';
$checkLanguage['es']    = 'espagnol';
$checkLanguage['is']    = 'islandais';
$checkLanguage['it']    = 'italien';
$checkLanguage['ca']    = 'catalan';
$checkLanguage['km']    = 'khmer';
$checkLanguage['lt']    = 'lituanien';
$checkLanguage['ml']    = 'malayalam';
$checkLanguage['nl']    = 'néerlandais';
$checkLanguage['pl']    = 'polonais';
$checkLanguage['pt']    = 'portugais';
$checkLanguage['ro']    = 'roumain';
$checkLanguage['ru']    = 'russe';
$checkLanguage['sk']    = 'slovaque';
$checkLanguage['sl']    = 'slovène';
$checkLanguage['sv']    = 'suédois';
$checkLanguage['tl']    = 'tagalog';
$checkLanguage['uk']    = 'ukrainien';

$checkDefaultText = "Copiez votre texte ici ou vérifiez cet exemple contenant plusieurs erreur que LanguageTool doit doit pouvoir detecter.";
include("../../include/checkform.php");
?>

<p><strong>Essayer LanguageTool sans installation, avec Java WebStart.</strong>
L’application LanguageTool nécessite <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?> ou plus récent :<br />
<strong><?=show_link("Démarrer LanguageTool (&gt;30&nbsp;Mo)", "../webstart/web/LanguageTool.jnlp", 0) ?></strong></p>

<h2>Télécharger</h2>

<p>LanguageTool nécessite <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?> ou plus récent - nous recommandons Java 6 pour l’instant, car certains utilisateurs ont eu des problèmes de performance en utilisant LanguageTool avec Java 7.
<strong>Avez-vous des problèmes ? Contrôlez s’il vous plait la <?=show_link("liste des problèmes les plus fréquents", "../issues", 0)?>.</strong></p>

<div class="downloadSection">
    <table width="100%">
      <tr>
        <td>
           <?php
           $downloadTitle        = "Télécharger LanguageTool";
           $downloadLabel        = "pour LibreOffice/OpenOffice";
           $downloadVersionLabel = "version";
           $downloadPath         = "/download";
           $downloadLabelMB      = "Mo";
           include("../../include/download.php");
           ?>
        </td>
        <td>
           <?php
            $downloadTitleStandAlone = "Télécharger LanguageTool";
            $downloadLabelStandAlone = "autonome";
            $downloadVersionLabelStandAlone = "version";
            $downloadPathStandAlone  = "/download";
            $downloadLabelMB         = "Mo";
            include("../../include/downloadStandAlone.php");
           ?>
        </td>
      </tr>
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
            <li>Dézippez le fichier et démarrez languagetool-standalone.jar en
                double-cliquant dessus. Voyez aussi les
                <?=show_link("autres manières d’utiliser LanguageTool", "../usage/", 0)?>.</li>
          </ul>
          <br/>
          <?php
          $downloadTitleFx = "Télécharger LanguageToolFx";
          $downloadLabelFx = "pour Firefox";
          include("../../include/downloadFx.php");
          ?>
          <ul style="padding-left: 20px">
            <li>Cette extension de Firefox contrôle la grammaire dans la sélection de texte des pages web, ou dans les champs de texte. Java n’est pas requis.</li>
          </ul>
        </td>
      </tr>
    </table>
</div>

<p>LanguageTool s’améliore en permanence. Des règles sont ajoutées ou modifiées presque tous les jours. Pour ceux qui désirent utiliser la version la plus récente, des versions mises à jours quotidiennement depuis la dernière version dans le dépôt git sont disponibles dans le
<?=show_link("répertoire snapshot", "../download/snapshots/?C=M;O=D", 0) ?>
 (<?=show_link("CHANGES.txt", "http://www.languagetool.org/download/CHANGES.txt", 0) ?>).

 Mais attention : ces versions sont moins testées que les versions officielles. Toutefois, LanguageTool comprend de 
 nombreux tests unitaires et les versions quotidiennes sont donc assez stables en général.
 Les anciennes versions sont toujours disponibles dans le <?=show_link("répertoire de téléchargement", "../download/", 0) ?>.</p>

<h2>Copie d’écran dans LibreOffice</h2>

<img src="images/LanguageTool-LibreOffice.png" alt="LanguageTool (fr)"/>
<p>LanguageTool peut signaler bien plus d’erreurs que sur cette copie d’écran puisque LanguageTool contient plus de 2000 règles XML pour détecter des erreurs. Les fautes de grammaire trouvées par LanguageTool sous soulignées en bleu. Les fautes d’orthographe trouvées par le dictionnaire français de LibreOffice sont soulignées en rouge.</p>
<p>Veuillez vous assurer que la langue sélectionnée pour le texte dans LibreOffice/OpenOffice est bien le français afin que le correcteur grammatical puisse fonctionner correctement en français.</p>

<h3>License &amp; code source</h3>

<p>LanguageTool est disponible sous la licence <?=show_link("LGPL", "http://www.fsf.org/licensing/licenses/lgpl.html#SEC1", 0)?>.
Le code source est disponible dans le dépôt <?=show_link("git de github", "https://github.com/languagetool-org/languagetool.git", 0) ?>.
Le contenu de cette page est disponible sous la licence <?=show_link("CC BY-SA 3.0", "http://creativecommons.org/licenses/by-sa/3.0/", 0) ?>.</p>

<p>LanguageTool utilise le dictionnaire français <a href="http://www.dicollecte.org/home.php?prj=fr">dicollecte</a> pour l’étiquetage grammatical des mots et la correction orthographique dans la version autonome (sans LibreOffice/OpenOffice).</p>

<?php
include("../../include/footer.php");
?>
