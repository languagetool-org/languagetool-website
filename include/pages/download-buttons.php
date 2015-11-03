<?php

$javaMinVersion = "7";
if (isset($downloadRequiresJava)) {
    $downloadRequiresJava = str_replace("{version}", $javaMinVersion, $downloadRequiresJava);
} else {
    $downloadRequiresJava = "Requires Java $javaMinVersion+";
}
$buttons = array(
    array(
      'title' => isset($downloadTitle) ? $downloadTitle : 'For <strong>LibreOffice</strong><br/>and <strong>OpenOffice</strong>',
      'link' => '/download/LanguageTool-3.1.oxt',
      // protect the call with a test because the language-specific pages might not have that function:
      'onclick' => 'onclick="if (typeof showDownloadOfficeThanks == \'function\') { setTimeout(function(){showDownloadOfficeThanks()},500) }"',
      'additional_info' => 'v3.1, 55 MB, ' . $downloadRequiresJava,
      'release_info' => 'released 2015-09-28',
      'width' => 260
      //'width' => 220
    ),
    array(
      'title' => isset($downloadTitleStandAlone) ? $downloadTitleStandAlone : 'Stand-alone for<br/>your <strong>Desktop</strong>',
      'link' => '/download/LanguageTool-3.1.zip',
      'onclick' => 'onclick="if (typeof showDownloadStandaloneThanks == \'function\') { setTimeout(function(){showDownloadStandaloneThanks()},500) }"',
      'additional_info' => 'v3.1, 87 MB, ' . $downloadRequiresJava,
      'release_info' => 'released 2015-09-28',
      'width' => 260
      //'width' => 220
    ),
    array(
      'title' => isset($downloadLabelFx) ? $downloadLabelFx: 'For <strong>Firefox</strong>',
      'link' => 'https://addons.mozilla.org/firefox/addon/languagetoolfx?src=external-lt-homepage',
      'onclick' => '',
      'additional_info' => isset($downloadLabelBrowserAddOn) ? $downloadLabelBrowserAddOn : 'Browser Add-on',
      'release_info' => '',
      'width' => 180
      //'width' => 220
    ),
    array(
      'title' => isset($downloadLabelChrome) ? $downloadLabelChrome: 'For <strong>Chrome</strong>',
      'link' => 'https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji',
      'onclick' => '',
      'additional_info' => isset($downloadLabelBrowserAddOn) ? $downloadLabelBrowserAddOn : 'Browser Add-on',
      'release_info' => '',
      'width' => 180
      //'width' => 220
    )
);

foreach ($buttons as $button) {
  print sprintf('<a href="%s" %s class="piwik_download"><div style="width:%spx" class="button_container"><div class="inner_button"><div class="title">%s</div><div title="%s" class="meta">%s</div></div></div></a>',
    $button['link'],
    $button['onclick'],
    $button['width'],
    $button['title'],
    $button['release_info'],
    $button['additional_info']
  );
}
?>

<div style="clear:both;"></div>
