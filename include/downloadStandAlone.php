<?php
$version= "2.3";
$filesize = "67";   //MB
if( !isset($downloadTitleStandAlone) )        $downloadTitleStandAlone = "Download LanguageTool";
if( !isset($downloadLabelStandAlone) )        $downloadLabelStandAlone = "for stand-alone use";
if( !isset($downloadVersionLabelStandAlone) ) $downloadVersionLabel    = "Version";
if( !isset($downloadLabelMB) )                $downloadLabelMB         = "MB";
if( !isset($onclick) )                        $onclick                 = "";
?>

<div class="downloadButton">
  <a <?php print $onclick ?> class='piwik_download' href="/download/LanguageTool-<?php print $version ?>.zip">
    <img class="downloadButtonLogo" src="<?php print $rootUrl ?>/images/LanguageToolBig.png" alt="LT logo"/>
    <span class="languagetool"><?php print $downloadTitleStandAlone ?></span><br/>
    <span class="download"><?php print $downloadLabelStandAlone ?></span><br/>
    <span class="version"><?php print $downloadVersionLabel ?> <?php print $version ?> (<?php print $filesize ?>&nbsp;<?php print $downloadLabelMB?>)</span>
  </a>
</div>
