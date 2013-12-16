<div id="download">

  <h2>Download</h2>

  <?php

    $buttons = array(
        array(
          'title' => 'LanguageTool for <strong>LibreOffice</strong> and <strong>OpenOffice</strong>',
          'link' => 'download/LanguageTool-2.3.oxt',
          'onclick' => 'onclick="setTimeout(function(){showDownloadOfficeThanks()},500)"',
          'additional_info' => 'Version 2.3 &mdash; 45 MB &mdash; Requires Java7+'
        ),
        array(
          'title' => 'LanguageTool stand-alone for your <strong>Desktop</strong>',
          'link' => 'download/LanguageTool-2.3.zip',
          'onclick' => 'onclick="setTimeout(function(){showDownloadStandaloneThanks()},500)"',
          'additional_info' => 'Version 2.3 &mdash; 67 MB &mdash; Requires Java7+'
        ),
        array(
          'title' => 'LanguageTool browser extension for <strong>Firefox</strong>',
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
  <br>
  <p class="small">
    Having problems? Please see the <a href="issues/">list of common problems</a>.
  </p>

</div>
