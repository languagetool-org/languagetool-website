<div id="download">

  <?php if(isset($downloadHeadline)) { ?>
      <h2><?= $downloadHeadline ?></h2>
  <?php } else { ?>
      <h2>Download</h2>
  <?php } ?>

    <script>
        if (navigator.userAgent.indexOf("Edge/") !== -1 || navigator.userAgent.indexOf("Trident/") !== -1) {
            document.write('<div class="warning" style="width:90%">');
            document.write('Important note for LibreOffice/OpenOffice:<br>MSIE and Edge might rename the *.oxt file to *.zip.');
            document.write(' Please use <a href="https://www.mozilla.org/en-US/firefox/new/">Firefox</a> for download or rename the file back to *.oxt after download');
            document.write('</div><br>');
        }
    </script>

    <?php include("download-buttons.php"); ?>
  
  <br>
  <p class="small">
      <?php if(isset($checklistText)) { ?>
          <?= $checklistText ?>
      <?php } else { ?>
          Please see <a href='/issues/'>our checklist</a> if you experience problems.
      <?php } ?>

      <?php if(isset($otherDownloadsText)) { ?>
          <?= $otherDownloadsText ?>
      <?php } else { ?>
          Download <a href="/download/">old releases</a> or <a href="/download/snapshots/?C=M;O=D">daily builds</a>.
      <?php } ?>

      <!--
      <?php if(isset($webstartText)) { ?>
          <?= $webstartText ?>
      <?php } else { ?>
          Start with <a href="/webstart/web/LanguageTool.jnlp">Java WebStart</a>.
      <?php } ?>
      -->
      
  </p>

</div>
