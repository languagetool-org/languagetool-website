<?php

$javaMinVersion = "7";
if (isset($downloadRequiresJava)) {
    $downloadRequiresJava = str_replace("{version}", $javaMinVersion, $downloadRequiresJava);
} else {
    $downloadRequiresJava = "Requires Java $javaMinVersion+";
}
$buttons = array(
    array(
      'title' => isset($downloadTitle) ? $downloadTitle : 'LanguageTool for <strong>LibreOffice</strong> and <strong>OpenOffice</strong>',
      'link' => '/download/LanguageTool-2.7.oxt',
      // protect the call with a test because the language-specific pages might not have that function:
      'onclick' => 'onclick="if (typeof showDownloadOfficeThanks == \'function\') { setTimeout(function(){showDownloadOfficeThanks()},500) }"',
      'additional_info' => 'Version 2.7 &mdash; 50 MB &mdash; ' . $downloadRequiresJava,
      'release_info' => 'released 2014-09-29'
    ),
    array(
      'title' => isset($downloadTitleStandAlone) ? $downloadTitleStandAlone : 'LanguageTool stand-alone for your <strong>Desktop</strong>',
      'link' => '/download/LanguageTool-2.7.zip',
      'onclick' => 'onclick="if (typeof showDownloadStandaloneThanks == \'function\') { setTimeout(function(){showDownloadStandaloneThanks()},500) }"',
      'additional_info' => 'Version 2.7 &mdash; 81 MB &mdash; ' . $downloadRequiresJava,
      'release_info' => 'released 2014-09-29'
    ),
    array(
      'title' => isset($downloadLabelFx) ? $downloadLabelFx: 'LanguageTool browser extension for <strong>Firefox</strong>',
      'link' => 'https://addons.mozilla.org/firefox/addon/languagetoolfx/',
      'onclick' => '',
      'additional_info' => '&nbsp;',
      'release_info' => ''
    )
);

foreach ($buttons as $button) {
  print sprintf('<a href="%s" %s class="piwik_download"><div class="button_container"><div class="inner_button"><div class="title">%s</div><div title="%s" class="meta">%s</div></div></div></a>',
    $button['link'],
    $button['onclick'],
    $button['title'],
    $button['release_info'],
    $button['additional_info']
  );
}
?>

<div style="clear:both;"></div>
