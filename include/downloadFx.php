<?php
if( !isset($downloadTitleFx) )      $downloadTitleFx = 'Download LanguageToolFx&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
if( !isset($downloadLabelFx) )      $downloadLabelFx = 'extension for Mozilla Firefox';
if( !isset($downloadUrlFx) )        $downloadUrlFx = 'https://addons.mozilla.org/firefox/addon/languagetoolfx/';
?>

<div class="downloadButtonSmallContainer">
<div class="downloadButton downloadButtonSmall">
<a class='piwik_download' href="<?php print $downloadUrlFx ?>">
    <img class="downloadButtonLogo" src="<?php print $rootUrl ?>/images/extension.png" alt="extension"/>
    <span class="languagetool"><?php print $downloadTitleFx ?></span><br/>
    <span class="download"><?php print $downloadLabelFx ?></span><br/>
</a>
</div>
</div>
