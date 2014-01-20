<?php include("partials/nav.php"); ?>

<div id="stage" class="start">
    <div class="inner">
        <div id="editor">
            <div class="inner">
                <?php
                include("checkform.php");
                ?>
            </div>
        </div>
        <div id="text">

            <p><?php print $introText1 ?></p>
            <p class="small"><?php print $introText2 ?></p>

        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<?php include("pages/downloads.php"); ?>
