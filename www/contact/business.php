<?php
if (!isset($_POST['name'])) {
    print "Error: missing form field 'name'\n";
    return;
}
?>
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

    //print $body;
    $ok = mail($myAddress,
        "Contact via languagetool.org",
        $body,
        "From: ".$_POST['email']."\nContent-Type:text/plain;charset=utf-8\n");
    if (!$ok) {
        error_log("Sending mail failed: $body");
    } else {
        error_log("Sending mail ok: $body");
    }
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <?php if ($ok) { ?>
 
        <h1>Vielen Dank für Ihre Anfrage</h1>

        <p>Wir werden Sie möglichst bald kontaktieren. Informationen zur
            Enterprise-Version von LanguageTool erhalten Sie auch auf
            <a href="https://languagetoolplus.com">languagetoolplus.com</a>.</p>
 
    <?php } else { ?>
        
        Leider ist ein Fehler aufgetreten. Bitte wenden Sie sich an support@languagetoolplus.com
        
    <?php } ?>
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
