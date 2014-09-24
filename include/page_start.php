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

            <p><?= $introText1 ?></p>
            <p class="small"><?= $introText2 ?></p>
            <?php if(isset($contributeLink)) { ?>
                <p class="small"><a href="../contribute/"><?= $contributeLink ?></a></p>
            <?php } ?>

        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<?php include("pages/downloads.php"); ?>
