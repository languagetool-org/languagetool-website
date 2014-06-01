<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "Development";
    $title = "LanguageTool Development";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Development</h1>
    
    <p>LanguageTool is an Open Source project and we're looking forward to your contributions.</p>
    
    <ul>
        <li style="font-size: large"><a href="http://wiki.languagetool.org"><strong>wiki.languagetool.org</strong></a> contains the complete development documentation, including:
            <ul>
                <li><a href="http://wiki.languagetool.org/development-overview#toc0">The three-minute introduction</a></li>
                <li><a href="http://wiki.languagetool.org/development-overview">Development Overview</a>, for users who want to extend LanguageTool with their own rules
            </ul>
        </li>
        <li style="font-size: large"><a href="https://github.com/languagetool-org/languagetool"><strong>Source code at github</strong></a></li>
        <li style="font-size: large"><a href="http://community.languagetool.org"><strong>community.languagetool.org</strong></a>, 
            includes <a href="http://community.languagetool.org/ruleEditor2/index?lang=en">a rule editor</a>,
            <a href="http://community.languagetool.org/analysis">a text analyzer</a>, and Wikipedia checks</li>
        <li><a href="mailing-list.php">Development mailing list</a> (<a href="http://www.mail-archive.com/languagetool-devel@lists.sourceforge.net/">archive</a>)</li>
        <li><a href="api/">API documentation (Javadoc)</a></li>
        <li><a href="https://github.com/languagetool-org/languagetool/issues?state=open">Issues / bug tracking at github</a>
            <ul>
                <li><a href="https://github.com/languagetool-org/languagetool/issues?labels=easy+fix&amp;state=open">Easy fixes</a>, easy issues for new contributors</li>
            </ul>
        </li>
        <li><a href="https://github.com/languagetool-org">Source code of related projects (like this website) at github</a></li>
        <li><a href="http://wiki.languagetool.org/development-links">See all development-related links</a></li>
    </ul>


    <h2>Using LanguageTool from other Applications</h2>

    <ul>
        <li><a href="http://wiki.languagetool.org/java-api">Using LanguageTool from a Java application</a> (<a href="api/">API documentation</a>)</li>
        <li><a href="http://wiki.languagetool.org/public-http-api">Using LanguageTool via HTTP/HTTPS</a></li>
    </ul>


    <h2>Embedding LanguageTool on a Web Page</h2>

    <ul>
        <li><a href="http://wiki.languagetool.org/integration-on-websites">Integration on Websites</a></li>
    </ul>

</div>

<?php
include("../../include/footer.php");
?>

</body>
</html>
