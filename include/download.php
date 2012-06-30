<?php
$version= "1.8";
$filesize = "24";
if( !isset($downloadTitle) )       $downloadTitle = "Download LanguageTool";
if( !isset($downloadLabel) )       $downloadLabel = "for LibreOffice/OpenOffice";
if( !isset($downloadVersionLabel ) $downloadVersionLabel = "Version";
if( !isset($downloadPath) )        $downloadPath = "download";
?>

<div class="downloadButton">
   <a class='piwik_download' style="display: block" href="<?php print $downloadPath ?>/LanguageTool-stable.oxt?<?php print $version ?>">
     <span class="languagetool"><?php print $downloadTitle ?></span><br/>
     <span class="download"><?php print $downloadLabel ?><br/></span>
     <span class="version"><?php print $downloadVersionLabel ?> <?php print $version ?> (<?php print $filesize ?>&nbsp;MB)</span>
   </a>
</div> 
