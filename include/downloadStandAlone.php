<?php
$version= "1.9";
$filesize = "57";   //MB
if( !isset($downloadTitleStandAlone) )        $downloadTitleStandAlone = "Download LanguageTool";
if( !isset($downloadLabelStandAlone) )        $downloadLabelStandAlone = "for stand-alone use";
if( !isset($downloadVersionLabelStandAlone) ) $downloadVersionLabel = "Version";
if( !isset($downloadPathStandAlone) )         $downloadPathStandAlone = "download";
?>

<table>
  <tr>
    <td>
      <div class="downloadButton">
         <a class='piwik_download' style="display: block" href="<?php print $downloadPathStandAlone ?>/LanguageTool-<?php print $version ?>.zip">
           <span class="languagetool"><?php print $downloadTitleStandAlone ?></span><br/>
           <span class="download"><?php print $downloadLabelStandAlone ?><br/></span>
           <span class="version"><?php print $downloadVersionLabel ?> <?php print $version ?> (<?php print $filesize ?>&nbsp;MB)</span>
         </a>
      </div>
    </td>
  </tr>
</table>
