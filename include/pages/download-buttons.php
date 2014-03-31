<?php

$javaMinVersion = "7";
if ($downloadRequiresJava) {
    $downloadRequiresJava = str_replace("{version}", $javaMinVersion, $downloadRequiresJava);
} else {
    $downloadRequiresJava = "Requires Java $javaMinVersion+";
}
$buttons = array(
    array(
      'title' => $downloadTitle ? $downloadTitle : 'LanguageTool for <strong>LibreOffice</strong> and <strong>OpenOffice</strong>',
      'link' => '/download/LanguageTool-2.5.oxt',
      // protect the call with a test because the language-specific pages might not have that function:
      'onclick' => 'onclick="if (typeof showDownloadOfficeThanks == \'function\') { setTimeout(function(){showDownloadOfficeThanks()},500) }"',
      'additional_info' => 'Version 2.5 &mdash; 45 MB &mdash; ' . $downloadRequiresJava
    ),
    array(
      'title' => $downloadTitleStandAlone ? $downloadTitleStandAlone : 'LanguageTool stand-alone for your <strong>Desktop</strong>',
      'link' => '/download/LanguageTool-2.5.zip',
      'onclick' => 'onclick="if (typeof showDownloadStandaloneThanks == \'function\') { setTimeout(function(){showDownloadStandaloneThanks()},500) }"',
      'additional_info' => 'Version 2.5 &mdash; 70 MB &mdash; ' . $downloadRequiresJava
    ),
    array(
      'title' => $downloadLabelFx ? $downloadLabelFx: 'LanguageTool browser extension for <strong>Firefox</strong>',
      'link' => 'https://addons.mozilla.org/firefox/addon/languagetoolfx/',
      'onclick' => '',
      'additional_info' => '&nbsp;'
    )
);

foreach ($buttons as $button) {
  print sprintf('<a href="%s" %s class="piwik_download"><div class="button_container"><div class="inner_button"><div class="title">%s</div><div class="meta">%s</div></div></div></a>',
    $button['link'],
    $button['onclick'],
    $button['title'],
    $button['additional_info']
  );
}
?>

<div style="clear:both;"></div>
