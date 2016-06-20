<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "Uninstallation successful";
    ?>
    <?php include("../../include/header.php"); ?>
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
    if there was a problem. We'd like to fix it. Or tell us your feedback here:</p>

    <form action="submit-feedback.php" method="post">
        <textarea style="width:500px;height:150px" name="message" placeholder="Please describe what didn't work as expected"></textarea><br>
        <input style="width:500px" type="text" name="email" placeholder="your email address"><br>
        <input style="margin-top: 10px;margin-bottom: 15px" type="submit" value="Submit feedback">
    </form>
    <!--
    <iframe src="https://www.speakpipe.com/widget/inline/am45pg807w9he467icv1xj45wq4i0lfp" frameborder="0" width="100%" height="180px"></iframe>
    -->

    <p>You can always use the latest version of LanguageTool without installing
    anything on <a href="/">our homepage</a>. To stay up to date on news about
    LanguageTool, <a href="/contact/newsletter.php">subscribe to our newsletter</a>.</p>
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
