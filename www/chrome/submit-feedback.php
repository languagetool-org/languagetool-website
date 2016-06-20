<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "Thanks for your Feedback";

    $myAddress = "daniel.naber" ."@". "languagetool.org";
    mail($myAddress,
         "WebExtension uninstall feedback",
         $_POST['message'] . "\n\nFrom: ".$_POST['email'],
         "From: $myAddress\n".
         "Browser: ".$_SERVER['HTTP_USER_AGENT']);
    
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Thanks</h1>

    <p>We'll try to address your feedback.</p>

</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
