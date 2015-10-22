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
            <strong>I want to help LanguageTool</strong> (but I'm not a software developer)<br/>
            <ul>
                <li style="margin-top:5px">twitter or blog about LanguageTool</li>
                <li><a href="http://languagetool-user-forum.2306527.n4.nabble.com/">Post improvement ideas to our forum</a></li>
                <li><a href="https://github.com/languagetool-org/languagetool/issues">Post bugs to our issue tracker</a></li>
                <li>
                    Improve error detection: LanguageTool detects most
                    errors by looking for error patterns which we call <em>rules</em>. You can write such rules
                    yourself with our online editor and contribute them:
                    <h2 style="margin-top: 0"><a href="http://community.languagetool.org/ruleEditor2/">&gt;&gt;&nbsp;Try our Rule Editor</a></h2>
                </li>
            </ul>
        </li>
        <li>
            <strong>I'm a software developer</strong>
            <ul>
                <li style="margin-top:5px">
                    <a href="https://github.com/languagetool-org/">Check out the code from github</a>.
                    <a href="http://wiki.languagetool.org/development-overview#toc2">More detailed instructions</a>.
                </li>
                <li>Write a plug-in / add-on / extension for your favorite software to integrate LanguageTool
                    (<a href="http://wiki.languagetool.org/software-that-supports-languagetool-as-a-plug-in-or-add-on">list of existing plug-ins</a>)</li>
            </ul>
        </li>
    </ul>
    
    
    <p style="margin-top: 20px">To join the LanguageTool community, please subscribe to our <a href="../development/mailing-list.php">development
    mailing list</a>, where all the discussion happens.</p>
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
