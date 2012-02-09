<?php
$page = "Pajenn degemer";
$title = "LanguageTool";
$title2 = "An difazier yezhadurel frank evit ar brezhoneg";
$lastmod = "2012-02-05 11:24 CET";
include("../../include/header.php");
?>
		
<p class="firstpara"><strong>Un difazier yezhadurel liesyezhek frank ha digoust eo LanguageTool.</strong>
Barrek eo da wiriañ testennoù e brezhoneg pe e <a href="http://www.languagetool.org/languages/">yezhoù all</a>.
Mont a ra mat dindan Windows, Linux pe MacOs gant LibreOffice/OpenOffice. 
</p>
<p>
LanguageTool a gav fazioù evel kemmadurioù direizh (ar paotred → ar baotred) hag all ha na
vezont ket kavet gant un difazier skrivadurel. Displegañ a ra ar fazioù ha kinnig a ra
reizhadennoù. Ne gav ket fazioù skrivadurel avat. Met posupl
eo implijout ur <a href="http://extensions.libreoffice.org/extension-center/an-drouizig-breton-spellchecker">
geriadur brezhoneg</a> gant LanguageTool ivez.
</p>

<h2>LanguageTool enlinenn</h2>

<form name="checkform" action="http://community.languagetool.org" method="post">
    <textarea onfocus="javascript: if(document.checkform.text.value == 'Lakait amañ ho testenn vrezhonek da vezañ gwiriaet…') { document.checkform.text.value='' } " 
        style="width:100%; max-width:700px;height:100px" name="text">Lakait amañ ho testenn vrezhonek da vezañ gwiriaet…</textarea>
    <br />
    <input type="submit" name="_action_checkText" value="Gwiriañ an destenn"/>
    Yezh: <select name="lang" id="lang" >
    
        <option value="de" >alamaneg</option>
        <option value="ast" >astureg</option>
        <option value="be" >belaruseg</option>
        <option selected value="br" value="br" >brezhoneg</option>
        <option value="da" >daneg</option>
        <option value="eo" >esperanteg</option>
        <option value="gl" >galizeg</option>
        <option value="fr" >galleg</option>
        <option value="is" >islandeg</option>
        <option value="it" >italianeg</option>
        <option value="ca" >kataluneg</option>
        <option value="km" >khmer</option>
        <option value="lt" >lituaneg</option>
        <option value="ml" >malayalam</option>
        <option value="nl" >nederlandeg</option>
        <option value="pl" >poloneg</option>
        <option value="ro" >roumaneg</option>
        <option value="ru" >rusianeg</option>
        <option value="en" >saozneg</option>
        <option value="zh" >sinaeg</option>
        <option value="sk" >slovakeg</option>
        <option value="sl" >sloveneg</option>
        <option value="es" >spagnoleg</option>
        <option value="sv" >svedeg</option>
        <option value="tl" >togalog</option>
        <option value="uk" >ukraineg</option>
    </select>
</form>

<h2>Pellgargañ</h2>

<div class="downloadSection">
  <div id="downloadButton">
  <a href="../download/LanguageTool-1.6.oxt"><span
  class="languagetool">LanguageTool</span><br/><span class="download">Pellgargit<br/>
  </span><span class="version">Handelv 1.6 (29&nbsp;MB)</span></a>
</div>

Ar restr da bellgargañ a zo evit brezhoneg hag an holl yezhoù all.

<h2>Skramm skouer</h2>

<img src="images/languagetool-brezhoneg.png" alt="LanguageTool"/>

<h2>Ho skoazell</h2>
<p>
Ho skoazell hon eus ezhomm evit gwellaat LanguageTool e brezhonek.
Ijinoù evit kavout muioc’h a fazioù ho peus marteze? Pe kudennoù
bennak ho peus kavet gant LanguageTool brezhonek? Skrivit da
<a href="mailto:dominique.pelle@gmail.com">zDominique Pellé</a>,
pe skrivit er <a href="http://www.languagetool.org/forum/">forum</a>.
</p>
<p>
Trugarez d’ar re ho peus sikouret evit LanguageTool e brezhoneg: 
Fulup Jakez, Joseph Monfort ha Denis Arnaud.
</p>
<h2>Aotre-implijout</h2>
<p>
Gallout a rit implijout LanguageTool gant an aotre
<a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
</p>
<div style="height:30px"></div>

<?php
include("../../include/footer.php");
?>
