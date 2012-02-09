<?php
$version= "1.6";
$filesize = "29";
if( !isset($downloadPath) ) $downloadPath = "download";
if( !isset($downloadLabel) ) $downloadLabel = "Download";
?>

<div id="downloadButton">
   <?php print "<a style=\"display: block\" href=\"$downloadPath/LanguageTool-$version.oxt\">"; ?>
     <span class="languagetool">LanguageTool</span><br/>
     <?php print "<span class=\"download\">$downloadLabel<br/></span>"; ?>
     <?php print "<span class=\"version\">Version $version ($filesize&nbsp;MB)</span>"; ?>
   </a>
</div> 
