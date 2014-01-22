<div id="download">

  <?php if(isset($downloadHeadline)) { ?>
      <h2><?php print $downloadHeadline ?></h2>
  <?php } else { ?>
      <h2>Download</h2>
  <?php } ?>

  <?php include("download-buttons.php"); ?>
    
  <br>
  <p class="small">
    Please see <a href="/issues/">our checklist</a> if you experience problems.
      Download <a href="/download/">old releases</a> or <a href="/download/snapshots/?C=M;O=D">daily builds</a>.
      Start with <a href="/webstart/web/LanguageTool.jnlp">Java WebStart</a>.
  </p>

</div>
