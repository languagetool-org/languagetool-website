<?php
if( !isset($downloadTitleFx) )      $downloadTitleFx = 'Download LanguageToolFx';
if( !isset($downloadLabelFx) )      $downloadLabelFx = 'extension for Mozilla Firefox';
?>

<div class="downloadButtonSmallContainer">
<div class="downloadButton downloadButtonSmall">
<a class='piwik_download' href="https://addons.mozilla.org/firefox/addon/languagetoolfx/">
    <img class="downloadButtonLogo" src="<?php print $rootUrl ?>/images/extension.png" alt="extension"/>
    <span class="languagetool"><?php print $downloadTitleFx ?></span><br/>
    <span class="download"><?php print $downloadLabelFx ?></span><br/>
</a>
</div>
</div>
