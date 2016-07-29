<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "Thanks for your Feedback";

    $myAddress = "daniel.naber" ."@". "languagetool.org";
    $body = "Reason: " . $_POST['reason']."\n".
            "Message: " .
            $_POST['message1']."\n".
            $_POST['message2']."\n".
            $_POST['message3']."\n".
            $_POST['message4']."\n".
            "\n\n".
            "From: ".$_POST['email']."\n".
            "Browser: ".$_SERVER['HTTP_USER_AGENT'];
    mail($myAddress,
         "WebExtension uninstall feedback",
         $body,
         "From: $myAddress\nContent-Type:text/plain;charset=utf-8\n");
    
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
