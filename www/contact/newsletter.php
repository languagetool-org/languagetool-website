<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "Newsletter";
    $title = "LanguageTool Newsletter";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Newsletter</h1>
    
    <p>Subscribe to our newsletter to stay up-to-date on new releases and other major LanguageTool-related events (4-8 messages per year):</p>

    <?php include("../../include/newsletter.php") ?>
    
</div>

<?php
include("../../include/footer.php");
?>

</body>
</html>
