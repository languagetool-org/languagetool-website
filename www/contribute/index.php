<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "Contribute to LanguageTool";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h2>Contribute to LanguageTool</h2>
    
    <p>LanguageTool is an Open Source project, so you can contribute to improve it!</p>
    
    <ul>
        <li>
            <strong>I want LanguageTool to detect more errors</strong> (but I'm not a software developer)<br/>
            You don't have to be a developer to help improve LanguageTool. LanguageTool detects most
            errors by looking for error patterns which we call <em>rules</em>. You can write such rules
            yourself with our online editor (nothing needs to be installed) and contribute them:
            <h2 style="margin-top: 0"><a href="http://community.languagetool.org/ruleEditor2/">&gt;&gt;&nbsp;Try our Rule Editor</a></h2>
        </li>
        <li>
            <strong>I'm a Java developer.</strong><br/>
            <a href="https://github.com/languagetool-org/">Check out the code from github</a>.
            <a href="http://wiki.languagetool.org/development-overview#toc2">More detailed instructions</a>.
        </li>
    </ul>
    
    
    <p style="margin-top: 20px">To join the LanguageTool community, please subscribe to our <a href="../development/mailing-list.php">development
    mailing list</a>, where all the discussion happens.</p>
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
