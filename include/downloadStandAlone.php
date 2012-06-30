<?php
$version= "1.8";
$filesize = "49";
if( !isset($downloadTitleStandAlone) )       $downloadTitleStandAlone = "Download LanguageTool";
if( !isset($downloadLabelStandAlone) )       $downloadLabelStandAlone = "for stand-alone use";
if( !isset($downloadVersionLabelStandAlone ) $downloadVersionLabel = "Version";
if( !isset($downloadPathStandAlone) )        $downloadPathStandAlone = "download";
?>

<table>
  <tr>
    <td>
      <div class="downloadButton">
         <a class='piwik_download' style="display: block" href="<?php print $downloadPathStandAlone ?>/LanguageTool-stable.zip?<?php print $version ?>">
           <span class="languagetool"><?php print $downloadTitleStandAlone ?></span><br/>
           <span class="download"><?php print $downloadLabelStandAlone ?><br/></span>
           <span class="version"><?php print $downloadVersionLabel ?> <?php print $version ?> (<?php print $filesize ?>&nbsp;MB)</span>
         </a>
      </div>
    </td>
  </tr>
</table>
