<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "Development-Mailing-List";
    $title = "LanguageTool Development Mailing List";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Development Mailing List</h1>
    
    <p>Join our developer mailing list if you need help or if you want to join development.</p>

    <form method="post" action="https://lists.sourceforge.net/lists/subscribe/languagetool-devel">
        <input type="Text" name="email" size="30" value="" placeholder="you@provider.org" autofocus/>
        <input type="Submit" name="email-button" value="Subscribe"/>
    </form>

    <p style="margin-top: 20px">Visit the Sourceforge page to <a href="https://lists.sourceforge.net/lists/listinfo/languagetool-devel">unsubscribe</a>.</p>
    
    <p>Archives:</p>
    <ul>
        <li><a href="http://www.mail-archive.com/languagetool-devel@lists.sourceforge.net/">mail-archive.com</a></li>
        <li><a href="http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-devel">Sourceforge</a></li>
    </ul>
    
</div>

<?php
include("../../include/footer.php");
?>

</body>
</html>
