<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "Uninstallation successful";
    ?>
    <?php include("../../include/header.php"); ?>
    <style>
        .detail {
            margin-left: 20px;
            display: none;
        }
        .detailBox {
            width: 300px;
            height: 100px
        }
        .detailInput {
            width: 400px;
        }
    </style>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Uninstallation successful</h1>

    <p>Sorry to see you've uninstalled our extension. Please
    <noscript>email the developer (turn on Javascript to see the email address)</noscript>
    <script>
    <!--
      var firstPart = "daniel.naber";
      var lastPart = "languagetool.org";
      document.write("<a href='mail" + "to:" + firstPart + "@" + lastPart + "'>email the developer<" + "/a>");
    // -->
    </script>
    if there was a problem. We'd like to fix it.</p>

    <p>You can always use the latest version of LanguageTool without installing
    anything on <a href="/">our homepage</a>.</p>
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
