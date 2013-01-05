<?php
$page = "homepage";
$title = "LanguageTool";
$title2 = "Correcteur grammatical";
$lastmod = "2013-01-05 14:00:00 CET";
include("../../include/header.php");
?>

<p class="firstpara"><strong>LanguageTool est un correcteur grammatical libre plurilingue pour le
français, l’anglais, l’allemand, le polonais, le breton, l’espéranto, et <?=show_link("plus de 20 autres langues", "languages/", 0) ?>.
Il trouve de nombreuses erreurs qui ne peuvent pas être signalées par un simple correcteur orthographique
comme les confusions d’homonyme (<em>des, dès, dés…</em>), les erreurs de grammaire telles que les
accords en genre ou en nombre, les conjugaisons incorrectes, etc.</strong></p>

<p>LanguageTool trouve des erreurs en recherchant des motifs définis par des règles XML.
Il est aussi possible de définir des règles en Java.</p>

<h2 style="margin-top: 40px">Essayer LanguageTool en-ligne</h2>

<p>Utilisez LanguageTool <?=show_link("dans LibreOffice/OpenOffice.org, comme une application autonome, ou intégrée à d’autres applications", "../usage/", 0)?>
  ou essayez-le ici sur cette page :</p>

<form name="checkform" action="http://community.languagetool.org" method="post">
    <textarea onfocus="javascript: if(document.checkform.text.value == 'Copiez votre texte ici ou vérifiez cet exemple contenant plusieurs erreur que LanguageTool doit doit pouvoir detecter.') { document.checkform.text.value='' } "
        style="width:100%; max-width:700px;height:100px" name="text">Copiez votre texte ici ou vérifiez cet exemple contenant plusieurs erreur que LanguageTool doit doit pouvoir detecter.</textarea>
    <br />
    <input type="submit" name="_action_checkText" value="Vérifier le texte"/>
    Langue : <select name="lang" id="lang" >

        <option value="auto">détection automatique</option>
        <option value="en" >anglais</option>
        <option value="ast" >asturien</option>
        <option value="be" >biélorusse</option>
        <option value="br" >breton</option>
        <option value="zh" >chinois</option>
        <option value="da" >danois</option>
        <option value="eo" >espéranto</option>
        <option selected value="fr" >français</option>
        <option value="gl" >galicien</option>
        <option value="de" >allemand</option>
        <option value="es" >espagnol</option>
        <option value="is" >islandais</option>
        <option value="it" >italien</option>
        <option value="ca" >catalan</option>
        <option value="km" >khmer</option>
        <option value="lt" >lituanien</option>
        <option value="ml" >malayalam</option>
        <option value="nl" >néerlandais</option>
        <option value="pl" >polonais</option>
        <option value="ro" >roumain</option>
        <option value="ru" >russe</option>
        <option value="sk" >slovaque</option>
        <option value="sl" >slovène</option>
        <option value="sv" >suédois</option>
        <option value="tl" >tagalog</option>
        <option value="uk" >ukrainien</option>
    </select>
</form>

<p><strong>Essayer LanguageTool sans installation, avec Java WebStart.</strong>
L’application LanguageTool nécessite <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?> ou plus récent :<br />
<strong><?=show_link("Démarrer LanguageTool (&gt;30&nbsp;Mo)", "../webstart/web/LanguageTool.jnlp", 0) ?></strong></p>

<h2>Télécharger</h2>

<p>LanguageTool nécessite <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?> ou plus récent - nous recommandons Java 6 pour l’instant, car certains utilisateurs ont eu des problèmes de performance en utilisant LanguageTool avec Java 7.
<strong>Avez-vous des problèmes ? Contrôlez s’il vous plait la <?=show_link("liste des problèmes les plus fréquents", "issues", 0)?>.</strong></p>

<div class="downloadSection">
    <table width="100%">
      <tr>
        <td>
           <?php
           $downloadTitle = "Télécharger LanguageTool";
           $downloadLabel = "pour LibreOffice/OpenOffice";
           $downloadVersionLabel = "version";
           $downloadPath = "/download";
           include("../../include/download.php");
           ?>
        </td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
           <?php
            $downloadTitleStandAlone = "Télécharger LanguageTool";
            $downloadLabelStandAlone = "autonome";
            $downloadVersionLabelStandAlone = "version";
            $downloadPathStandAlone  = "/download";
            include("../../include/downloadStandAlone.php");
           ?>
        </td>
      </tr>
      <tr>
        <td valign="top">

          <ul style="padding-left: 20px">
            <li><strong>Nous recommandons fortement d’utiliser
              <a href="http://www.libreoffice.org/download">LibreOffice 3.5.4</a></strong> (ou plus récent) ou
              <strong><a href="http://www.openoffice.org/download/">Apache OpenOffice 3.4.1</a></strong> (ou plus récent),
              car les versions plus anciennes ont un bug qui cause un long délai au démarrage</li>
            <li>Utilisez <em>Outils… → Gestionnaire des extensions… → Ajouter…</em> dans LibreOffice/OpenOffice.org pour installer ce fichier</li>
            <li><strong>Redémarrer OpenOffice.org/LibreOffice</strong> après l’installation de l’extension</li>
            <li>Si vous utilisez LibreOffice 3.5.x et vous désirez contrôler des textes en anglais :
              Use <em>Outils… → Options… → Paramètres linguistiques → Linquistique</em> pour désactiver LightProof et activer LanguageTool pour l’anglais</li>
          </ul>
        </td>
        <td></td>

        <td valign="top">
          <ul style="padding-left: 20px">
            <li>Dézippez le fichier et démarrez LanguageToolGUI.jar en double-cliquant dessus.
              Voyez aussi les <?=show_link("autres manières d’utiliser LanguageTool", "../usage/", 0)?>.</li>
          </ul>
        </td>
      </tr>
    </table>
</div>

<p>LanguageTool s’améliore en permanence. Des règles sont ajoutées ou modifiées presque tous les jours. Pour ceux qui désirent utiliser la version la plus récente, des versions mises à jours quotidiennement depuis la dernière version dans le dépôt SVN sont disponibles dans le
<?=show_link("répertoire snapshot", "../download/snapshots/?C=M;O=D", 0) ?>
 (<?=show_link("CHANGES.txt", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/CHANGES.txt", 0) ?>).

 Mais attentions : ces versions sont moins testées que les versions officielles. Toutefois, LanguageTool comprends de 
 nombreux tests unitaires et les versions quotidiennes sont donc assez stables en général.
 Les anciennes versions sont toujours disponibles dans le <?=show_link("répertoire de téléchargement", "../download/", 0) ?>.</p>

<h2>Copie d’écran dans LibreOffice</h2>

<img src="images/LanguageTool-LibreOffice.png" alt="LanguageTool (fr)"/>
<p>Les fautes de grammaire trouvées par LanguageTool sous soulignées en bleu. Les fautes d’orthographe trouvées par le dictionnaire français de LibreOffice sont soulignées en rouge.</p>
<p>Veuillez vous assurer que la langue sélectionnée pour le texte dans LibreOffice/OpenOffice est bien le français afin que le correcteur grammatical fonctionne correctement.</p>

<h3>License &amp; code source</h3>

<p>LanguageTool est disponible sous la licence <?=show_link("LGPL", "http://www.fsf.org/licensing/licenses/lgpl.html#SEC1", 0)?>.
Le code source est disponible dans le dépôt <?=show_link("SVN de Sourceforge", "http://sourceforge.net/scm/?type=svn&group_id=110216", 0) ?>.
Le contenu de cette page est disponible sous la licence <?=show_link("CC BY-SA 3.0", "http://creativecommons.org/licenses/by-sa/3.0/", 0) ?>.</p>

LanguageTool utilise le dictionnaire français <a href="http://www.dicollecte.org/home.php?prj=fr">dicollecte</a> pour l’étiquetage grammatical des mots et la correction orthographique dans la version autonome (sans LibreOffice/OpenOffice).

<?php
include("../../include/footer.php");
?>
