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

    <p style="margin-top: 20px">Once subscribed, you can post to the list at <tt>languagetool-devel <span>at</span> lists.sourceforge.net</tt>.<br/>
        If you want to unsubscribe, <a href="https://lists.sourceforge.net/lists/listinfo/languagetool-devel">visit the Sourceforge page</a>.</p>
    
    <p>Archives:</p>
    <ul>
        <li><a href="http://www.mail-archive.com/languagetool-devel@lists.sourceforge.net/">mail-archive.com</a></li>
        <li><a href="http://markmail.org/search/?q=list%3Anet.sourceforge.lists.languagetool-devel">markmail.org</a></li>
        <li><a href="http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-devel">Sourceforge</a></li>
    </ul>
    
</div>

<?php
include("../../include/footer.php");
?>

</body>
</html>
