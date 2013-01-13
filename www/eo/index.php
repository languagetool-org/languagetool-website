<?php
$page = "eo";
$title = "Lingvoilo";
$title2 = "Stila kaj gramatika kontrolilo";
$lastmod = "2013-01-05 20:20 CET";
$enable_textcheck = 1;
$enable_fancybox = 1;
include("../../include/header.php");
?>

<p class="firstpara"><strong>Lingvoilo (LanguageTool) estas libera plurlingva
programo por kontroli stilon kaj gramatikon en Esperanto sed ankaŭ en
<a href="../languages/">multaj aliaj lingvoj</a>.</strong>
Lingvoilo atentigas pri tiuj eraroj, kiujn literuma kontrolilo ne trovas.

Lingvoilo povas ankaŭ atentigi pri literumaj eraroj, sed la versio por
Libreoffice nur atentigas pri gramatikaj eraroj. Uzu Esperantan vortaron
kune kun Lingvoilo por literumaj eraroj en Libreoffice.

<h2>Provu Lingvoilo-n rete sen instali ĝin</h2>

<?php
$checkSubmitButtonValue = 'Kontroli';
$showLanguageBox = 1;

$checkDefaultLang = 'eo';

$checkLanguage['auto']  = 'aŭtomate detekti';
$checkLanguage['en-US'] = 'angla';
$checkLanguage['ast']   = 'asturia';
$checkLanguage['be']    = 'belarusa';
$checkLanguage['br']    = 'bretona';
$checkLanguage['zh']    = 'ĉina';
$checkLanguage['da']    = 'dana';
$checkLanguage['eo']    = 'Esperanto';
$checkLanguage['fr']    = 'franca';
$checkLanguage['gl']    = 'galega';
$checkLanguage['de-DE'] = 'germana';
$checkLanguage['es']    = 'hispana';
$checkLanguage['is']    = 'islanda';
$checkLanguage['it']    = 'itala';
$checkLanguage['ca']    = 'kataluna';
$checkLanguage['km']    = 'kmera';
$checkLanguage['lt']    = 'litova';
$checkLanguage['ml']    = 'malajala';
$checkLanguage['nl']    = 'nederlanda';
$checkLanguage['pl']    = 'pola';
$checkLanguage['ro']    = 'rumana';
$checkLanguage['ru']    = 'rusa';
$checkLanguage['sk']    = 'slovaka';
$checkLanguage['sl']    = 'slovena';
$checkLanguage['sv']    = 'sveda';
$checkLanguage['tl']    = 'tagaloga';
$checkLanguage['uk']    = 'ukraina';

$checkDefaultText = "Alglui vian kontrolendan tekston ĉi tie... Aŭ nur kontrolu tiun ekzemplon. Ĉu vi vi rimarkis, ke estas gramatikaj eraro en tiu frazo? Rimarku ankaŭ, ke Lingvoilo ankaŭ atentigas pri literumaj erraroj kiel tiu.";
include("../../include/checkform.php");
?>

<h2>Elŝutado</h2>

<div class="downloadSection">
  <table width="100%">
    <tr>
      <td>
        <?php
          $downloadTitle = "Elŝuti Lingvoilon";
          $downloadLabel = "por LibreOffice/OpenOffice";
          $downloadVersionLabel = "versio";
          $downloadPath  = "/download";
          include("../../include/download.php");
        ?>
      </td>
      <td>&nbsp;&nbsp;&nbsp;</td>
      <td>
        <?php
          $downloadTitleStandAlone = "Elŝuti Lingvoilon";
          $downloadLabelStandAlone = "memstara";
          $downloadVersionLabelStandAlone = "versio";
          $downloadPathStandAlone  = "/download";
          include("../../include/downloadStandAlone.php");
        ?>
      </td>
    </tr>
    <tr>
      <td valig="top">
          <ul style="padding-left: 20px">
            <li>Tiu versio estas kromaĵo por LibreOffice/OpenOffice.
                Ĝi atentigas pri gramatikaj eraroj, sed ne pri literumaj
                eraroj, ĉar LibreOffice/OpenOffice jam faras tion
                post alŝuto de
                 <a href="http://extensions.services.openoffice.org/fr/dictionaries?">Esperanta vortaro
                 por LibreOffice/OpenOffice</a>.</li>
            <li><strong>Ni forte konsilas uzi
                <a href="http://www.libreoffice.org/download">LibreOffice-3.5.4</a></strong>
                (aŭ pli nova ) aŭ <strong><a href="http://www.openoffice.org/download/">Apache
                OpenOffice-3.4.1</a></strong> (aŭ pli nova), ĉar pli malnovaj versioj
                havas cimon, kiu kaŭzas longan paŭzon je la startigo de la programo.</li>
            <li>Uzi <em>Iloj… → Aldonaĵa mastrumilo… → Aldoni…</em> en
                LibreOffice/OpenOffice.org por instali tiun dosieron.</li>
            <li><strong>Restartigi OpenOffice.org/LibreOffice</strong> post la
                instalado de la kromaĵo.</li>
            <li>Se vi uzas LibreOffice-3.5.x kaj deziras kontroli
                tekstojn en la angla, elektu:
                <em>Iloj… → Agodaĵoj… → Lingvaj agordoj→ Skribhelpoj</em>
                por malŝalti LightProof kaj ŝalti Lingvoilon por la angla.</li>
          </ul>
        </td>
        <td></td>

        <td valign="top">
          <ul style="padding-left: 20px">
            <li>Tiu versio estas por tiuj, kiuj deziras uzi Lingvoilon
                sen LibreOffice/OpenOffice, uzante ekzemple la
                grafika Java-interfaco, aŭ en komanda linio,
                aŭ kiel servilo, aŭ ene de aliaj programoj kiel
                ene de la
                <a href="http://www.vim.org/scripts/script.php?script_id=3223">tekstoredaktilo Vim</a>.
                Tiu versio ne nur atentigas pri gramatikaj eraroj
                sed ankaŭ pri literumaj eraroj dank’ al vortaroj
                en Lingvoilo.</li>
            <li>Duoble-klaku sur la dosieron kaj startigu LanguageToolGUI.jar.
                Vidu ankaŭ la
                <?=show_link("aliajn manierojn por uzi Lingvoilon", "../usage/", 0)?>.</li>
          </ul>
        </td>
      </tr>
    </table>
</div>

<p>Lingvoilo daŭre pliboniĝas. Reguloj estas ofte aldonitaj aŭ ŝanĝitaj.
Por tiuj, kiuj deziras uzi la plej freŝan version,
<?=show_link("versioj ĝisdatigitaj ĉiu-tage", "../download/snapshots/?C=M;O=D", 0) ?>
el la lasta versio en la SVN-deponejo ankaŭ haveblas
(<?=show_link("liston de ŝanĝon", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/CHANGES.txt", 0) ?>).
Sed atentu: tiuj versioj estas malpli testitaj ol la la oficiala versio.
Tamen, Lingvoilo enhavas multajn aŭtomataj testoj, do la ĉiu-tagaj versioj
estas ankaŭ sufiĉe sencimaj.
Pli malnovaj oficialaj versioj ankoraŭ haveblas en la
<?=show_link("dosierujo de elŝuto", "../download/", 0) ?>.</p>

<h2>Ekrankopio en LibreOffice</h2>

<img src="images/Lingvoilo-LibreOffice.png" alt="Lingvoilo"/>

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
Kodofonto elŝuteblas ĉe <a href="http://sourceforge.net/projects/languagetool/">Sourceforge</a> per SVN:
<pre>$ svn co https://languagetool.svn.sourceforge.net/svnroot/languagetool/trunk/JLanguageTool languagetool
</pre></p>

<p>La enhavo de la hejmpaĝo haveblas sub la permesilo
<a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>.</p>

<div style="height:30px"></div>

<?php
include("../../include/footer.php");
?>
