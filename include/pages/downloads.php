<div id="download">

  <?php if(isset($downloadHeadline)) { ?>
      <h2><?= $downloadHeadline ?></h2>
  <?php } else { ?>
      <h2>Download</h2>
  <?php } ?>

  <?php include("download-buttons.php"); ?>
  
  <p style="text-align:right">
      <a href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji"><b>New:</b> a beta version of LanguageTool for Chrome</a>
  </p>
    
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

      <?php if(isset($webstartText)) { ?>
          <?= $webstartText ?>
      <?php } else { ?>
          Start with <a href="/webstart/web/LanguageTool.jnlp">Java WebStart</a>.
      <?php } ?>
      
  </p>

</div>
