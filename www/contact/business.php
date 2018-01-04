<!doctype html>
<html>
<head>
    <?php
    $page = "other";
    $title = "Vielen Dank für Ihre Anfrage";

    $myAddress = "support" 
        ."@".
        "languagetoolplus.com";

    $body = "Contact via form at languagetool.org:\n\n".
        "Name: ".$_POST['name']."\n".
        "Firma: ".$_POST['company']."\n".
        "Telefon: ".$_POST['phone']."\n".
        "E-Mail: ".$_POST['email']."\n".
        "Anmerkung: ".$_POST['comment']."\n".
        "\n\n".
        "Browser: ".$_SERVER['HTTP_USER_AGENT']."\n".
        "Languages: ".$_SERVER['HTTP_ACCEPT_LANGUAGE'];

    mail($myAddress,
        "Contact via languagetool.org",
        $body,
        "From: ".$_POST['email']."\nContent-Type:text/plain;charset=utf-8\n");
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Vielen Dank für Ihre Anfrage</h1>

    <p>Wir werden Sie möglichst bald kontaktieren. Informationen zur
        Enterprise-Version von LanguageTool erhalten Sie auch auf
        <a href="https://languagetoolplus.com">languagetoolplus.com</a>.</p>
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
