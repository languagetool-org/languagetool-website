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
$checkSubmitButtonValuer= 'Kontroli';
$showLanguageBox = 1;

$checkDefaultLang = 'eo';

$checkLanguage['auto'] = 'aŭtomate detekti';
$checkLanguage['en']   = 'angla';
$checkLanguage['ast']  = 'asturia';
$checkLanguage['be']   = 'belarusa';
$checkLanguage['br']   = 'bretona';
$checkLanguage['zh']   = 'ĉina';
$checkLanguage['da']   = 'dana';
$checkLanguage['eo']   = 'Esperanto';
$checkLanguage['fr']   = 'franca';
$checkLanguage['gl']   = 'galega';
$checkLanguage['de']   = 'germana';
$checkLanguage['es']   = 'hispana';
$checkLanguage['is']   = 'islanda';
$checkLanguage['it']   = 'itala';
$checkLanguage['ca']   = 'kataluna';
$checkLanguage['km']   = 'kmera';
$checkLanguage['lt']   = 'litova';
$checkLanguage['ml']   = 'malajala';
$checkLanguage['nl']   = 'nederlanda';
$checkLanguage['pl']   = 'pola';
$checkLanguage['ro']   = 'rumana';
$checkLanguage['ru']   = 'rusa';
$checkLanguage['sk']   = 'slovaka';
$checkLanguage['sl']   = 'slovena';
$checkLanguage['sv']   = 'sveda';
$checkLanguage['tl']   = 'tagaloga';
$checkLanguage['uk']   = 'ukraina';

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
  </table>
</div>

<ul>
<li><a href="http://www.java.com/en/download/manual.jsp">Java 6</a> aŭ pli nova estas bezonata.</li>

<li>Pli freŝaj sed malpli testitaj versioj de Lingvoilo ĝisdatigitaj ĉiutage
<a href="../download/snapshots/">haveblas tie</a> (<a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/CHANGES.txt">CHANGES.txt</a>).</li>
</ul>

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
