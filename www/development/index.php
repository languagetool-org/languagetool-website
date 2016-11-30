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
    
    <h2>API</h2>

    <ul>
        <li><a href="http://wiki.languagetool.org/public-http-api">Using LanguageTool via HTTP/HTTPS</a></li>
        <li><a href="http://wiki.languagetool.org/java-api">Using LanguageTool from a Java application</a> (<a href="api/index.html?org/languagetool/JLanguageTool.html">Javadoc API documentation</a>)</li>
    </ul>

    
    <h2>Improving LanguageTool</h2>
    
    <p>LanguageTool is an Open Source project and we're looking forward to your contributions.</p>
    
    <ul>
        <li style="font-size: large"><a href="https://github.com/languagetool-org/languagetool"><strong>Source code at github</strong></a></li>
        <li style="font-size: large"><a href="http://wiki.languagetool.org"><strong>wiki.languagetool.org</strong></a> contains the complete development documentation, including:
            <ul>
                <li><a href="http://wiki.languagetool.org/development-overview">Development Overview</a>, for users who want to extend LanguageTool with their own rules
            </ul>
        </li>
        <li style="font-size: large"><a href="http://community.languagetool.org"><strong>community.languagetool.org</strong></a>, 
            includes <a href="http://community.languagetool.org/ruleEditor2/index?lang=en">a rule editor</a> and
            <a href="http://community.languagetool.org/analysis">a text analyzer</a></li>
        <li style="font-size: large"><a href="http://forum.languagetool.org/c/development"><strong>Development discussion in our forum</strong></a>
            <ul>
                <li><a href="http://www.mail-archive.com/languagetool-devel@lists.sourceforge.net/">Mailing list archive at mail-archive.com</a>
                    (alternatively, use the archive at <a href="http://markmail.org/search/?q=list%3Anet.sourceforge.lists.languagetool-devel">markmail.org</a> or
                    <a href="http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-devel">Sourceforge</a>) (up to September 2016)</li>
            </ul>
        </li>
        <li><a href="https://github.com/languagetool-org/languagetool/issues?state=open">Issues / bug tracking at github</a>
            <ul>
                <li><a href="https://github.com/languagetool-org/languagetool/issues?labels=easy+fix&amp;state=open">Easy fixes</a>, easy issues for new contributors</li>
            </ul>
        </li>
        <li><a href="https://github.com/languagetool-org">Source code of related projects (like this website) at github</a></li>
        <li><a href="http://wiki.languagetool.org/development-links">See all development-related links</a></li>
    </ul>


    <h2>Embedding LanguageTool on a Web Page</h2>

    <ul>
        <li><a href="http://wiki.languagetool.org/integration-on-websites">Integration on Websites</a></li>
    </ul>
    
    <h2>Thanks to</h2>

    <ul>
        <li>Syncro Soft for a free license of the <a href="http://www.oxygenxml.com">oXygen XML editor</a></li>
        <li><a href="https://www.jetbrains.com">JetBrains</a> for free licenses of the IntelliJ Ultimate Edition</li>
        <li><a href="http://www.cloudbees.com/">CloudBees</a> for free access to a hosted Jenkins instance</li>
        <li>ej-technologies for providing us with free licenses of their <a href="http://www.ej-technologies.com/products/jprofiler/overview.html">Java profiler</a></li>
        <li><a href="https://www.discoursehosting.com">DiscourseHosting.com</a> for sponsoring <a href="http://forum.languagetool.org/">our forum</a></li>
    </ul>

    <a href="http://www.oxygenxml.com" title="Oxygen XML Editor"><img src="/images/oxygen190x62.png" width="190" height="62" alt="Oxygen XML Editor" border="0"/></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="https://www.jetbrains.com/idea/"><img src="/images/logo_intellij_idea.png" alt="IntelliJ logo"/></a>
    <br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.cloudbees.com/"><img src="/images/cloudbees-logo.png" alt="CloudBees logo"/></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.ej-technologies.com/products/jprofiler/overview.html"><img style="margin-right: 15px; margin-bottom: 2px" src="/images/jprofiler_large.png" alt="JProfiler Java profiler logo"/></a>

</div>

<?php
include("../../include/footer.php");
?>

</body>
</html>
