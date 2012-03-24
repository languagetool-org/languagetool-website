<?php
$version= "1.6";
$filesize = "29";
if( !isset($downloadPath) ) $downloadPath = "download";
if( !isset($downloadLabel) ) $downloadLabel = "Download";
?>

<div id="downloadButton">
   <a style="display: block" href="<?php print $downloadPath ?>/LanguageTool-stable.oxt?<?php print $version ?>">
     <span class="languagetool">LanguageTool</span><br/>
     <span class="download"><?php print $downloadLabel ?><br/></span>
     <span class="version">Version <?php print $version ?> (<?php print $filesize ?>&nbsp;MB)</span>
   </a>
</div> 
