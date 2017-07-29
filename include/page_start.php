<?php include("partials/nav.php"); ?>
<?php include("partials/banner.php"); ?>

<div id="stage" class="start">
    <div class="inner">
      <div id="text">

          <p><?= $introText1 ?></p>
          <?php if(isset($contributeLink)) { ?>
              <p class="small"><a href="../contribute/"><?= $contributeLink ?></a></p>
          <?php } ?>

      </div>
        <div id="editor">
            <div class="inner">
                <?php
                include("checkform.php");
                ?>
                <div id='maintainedInfo' class='languageHomepage'></div>
            </div>
            <div id="text2">
                <p class="small"><?= $introText2 ?></p>
            </div>
        </div>
    </div>
</div>

<?php include("pages/downloads.php"); ?>
