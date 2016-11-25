<?php

$javaMinVersion = "8";
if (isset($downloadRequiresJava)) {
    $downloadRequiresJava = str_replace("{version}", $javaMinVersion, $downloadRequiresJava);
} else {
    $downloadRequiresJava = "Needs Java $javaMinVersion+";
}
$newImg = "<img src='/images/new.png'>";
$buttons1 = array(
    array(
        'title' => isset($downloadLabelFx) ? $downloadLabelFx : 'For <strong>Firefox</strong>',
        'link' => 'https://addons.mozilla.org/firefox/addon/languagetool?src=external-lt-homepage',
        'onclick' => '',
        'additional_info' => isset($downloadLabelBrowserAddOn) ? $downloadLabelBrowserAddOn : 'Browser Add-on',
        'release_info' => '',
        'width' => 220,
        'below' => isset($firefoxLink) ? $firefoxLink : '<a href="/firefox/">More information</a>'
    ),
    array(
        'title' => isset($downloadLabelChrome) ? $downloadLabelChrome : 'For <strong>Chrome</strong>',
        'link' => 'https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji',
        'onclick' => 'onclick="return installChromeExtension()"',
        'additional_info' => isset($downloadLabelBrowserAddOn) ? $downloadLabelBrowserAddOn : 'Browser Add-on',
        'release_info' => '',
        'width' => 220,
        'below' => isset($chromeLink) ? $chromeLink : '<a href="/chrome/">More information</a>'
    ),
    array(
        'title' => isset($downloadLabelGoogleDocs) ? $downloadLabelGoogleDocs.$newImg : "For <strong>Google Docs</strong>$newImg",
        'link' => 'https://chrome.google.com/webstore/detail/languagetool/kjcoklfhicmkbfifghaecedbohbmofkm',
        'additional_info' => isset($downloadLabelAddOn) ? $downloadLabelAddOn : 'Add-on',
        'release_info' => '',
        'width' => 220,
        'below' => ''
    )
);

$buttons2 = array(
    array(
      'title' => isset($downloadTitle) ? $downloadTitle : 'For <strong>LibreOffice</strong><br/>and <strong>OpenOffice</strong>',
      'link' => '/download/LanguageTool-3.5.oxt',
      // protect the call with a test because the language-specific pages might not have that function:
      'onclick' => 'onclick="if (typeof showDownloadOfficeThanks == \'function\') { setTimeout(function(){showDownloadOfficeThanks()},500) }"',
      'additional_info' => 'v3.5, 56 MB, ' . $downloadRequiresJava,
      'release_info' => 'released 2016-09-30',
      'width' => 220,
      'below' => ''
    ),
    array(
      'title' => isset($downloadTitleStandAlone) ? $downloadTitleStandAlone : 'Stand-alone for<br/>your <strong>Desktop</strong>',
      'link' => '/download/LanguageTool-3.5.zip',
      'onclick' => 'onclick="if (typeof showDownloadStandaloneThanks == \'function\') { setTimeout(function(){showDownloadStandaloneThanks()},500) }"',
      'additional_info' => 'v3.5, 92 MB, ' . $downloadRequiresJava,
      'release_info' => 'released 2016-09-30',
      'width' => 220,
      'below' => ''
    )
);

printButtons($buttons1);
print "<div style=\"clear:both;height: 30px\"></div>";
printButtons($buttons2);

function printButtons($buttons) {
    foreach ($buttons as $button) {
        $below = '';
        if ($button['below']) {
            $below = "<div class='details'>" . $button['below'] . "</div>";
        }
        print sprintf('<div style="width:%spx" class="button_container">'.
            '  <a href="%s" %s class="piwik_download">'.
            '    <div class="inner_button">'.
            '      <div class="title">%s</div>'.
            '      <div title="%s" class="meta">%s</div>'.
            '    </div>'.
            '  </a>%s'.
            '</div>'."\n",
            $button['width'],
            $button['link'],
            $button['onclick'],
            $button['title'],
            $button['release_info'],
            $button['additional_info'],
            $below
        );
    }
}
?>

<div style="clear:both;"></div>
