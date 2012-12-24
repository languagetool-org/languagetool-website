<?php
$page = "hejmpaĝo";
$title = "LanguageTool";
$title2 = "Stila kaj gramatika kontrolilo";
$lastmod = "2012-06-30 20:00 CET";
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

<form name="checkform" action="http://community.languagetool.org" method="post">
    <textarea onfocus="javascript: if(document.checkform.text.value == 'Alglui vian kontrolendan tekston ĉi tie... Aŭ nur kontrolu tiun ekzemplon. Ĉu vi vi rimarkis, ke estas gramatikaj eraro en tiu frazo? Rimarku ankaŭ, ke Lingvoilo ankaŭ atentigas pri literumaj erraroj kiel tiu.') { document.checkform.text.value='' } "
        style="width:100%; max-width:700px;height:100px" name="text">Alglui vian kontrolendan tekston ĉi tie... Aŭ nur kontrolu tiun ekzemplon. Ĉu vi vi rimarkis, ke estas gramatikaj eraro en tiu frazo? Rimarku ankaŭ, ke Lingvoilo ne atentigas pri literumaj erraroj kiel tiu.</textarea>
    <br />
    <input type="submit" name="_action_checkText" value="Kontroli tekston"/>
    Lingvo: <select name="lang" id="lang" >

        <option value="auto">aŭtomate detekti</option>
        <option value="en" >angla</option>
        <option value="ast" >asturia</option>
        <option value="be" >belarusa</option>
        <option value="br" >bretona</option>
        <option value="zh" >ĉina</option>
        <option value="da" >dana</option>
        <option selected value="eo" >Esperanto</option>
        <option value="fr" >franca</option>
        <option value="gl" >galega</option>
        <option value="de" >germana</option>
        <option value="es" >hispana</option>
        <option value="is" >islanda</option>
        <option value="it" >itala</option>
        <option value="ca" >kataluna</option>
        <option value="km" >kmera</option>
        <option value="lt" >litova</option>
        <option value="ml" >malajala</option>
        <option value="nl" >nederlanda</option>
        <option value="pl" >pola</option>
        <option value="ro" >rumana</option>
        <option value="ru" >rusa</option>
        <option value="sk" >slovaka</option>
        <option value="sl" >slovena</option>
        <option value="sv" >sveda</option>
        <option value="tl" >togaloga</option>
        <option value="uk" >ukraina</option>
    </select>
</form>

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
