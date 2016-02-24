<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "Job: Machine Learning Developer";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h2>Job: Machine Learning Developer</h2>
    
    <p>The LanguageTool project is looking for a volunteer who supports us with machine learning.
    So far, LanguageTool uses both rules and <a href="http://wiki.languagetool.org/finding-errors-using-n-gram-data">ngram data</a>
    to detect errors. We'd like to extend and improve our use of ngram data and corpora to find more errors
    with a higher precision and recall.</p>

    <p>Why do we need help with this? We're a small team that maintains LanguageTool's support for many languages
    and several add-ons, so our resources are limited.</p>

    <p>There are no formal requirements to contribute. It helps if you're familiar with Java, but other languages are fine, too
    (we'd port your solutions to Java so they can become part of LanguageTool).
    Like the other developers, you won't get paid with money but with the chance to be part
    of the team that develops the world's most powerful Open Source style and grammar checker (and a languagetool.org
    email address).</p>
    
    <!--
    <p>Some ideas of what you could work on:</p>
    
    <ul>
        <li>Improve recall and precision of the <a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/en/src/main/resources/org/languagetool/resource/en/confusion_sets.txt">confusion set word pairs</a></li>
        <li>Develop confusion sets for more languages</li>
        <li>research how <a href="http://deeplearning4j.org/thoughtvectors.html">thought vectors</a> could be used to find semantic problems</li>
    </ul>
    -->

    <p>Would you like to work on this? Then please contact
    <a href="mailto:daniel.naber@languagetool-removeme-.org"
       onmouseover="this.href=this.href.replace(/-removeme-/,'');">LanguageTool maintainer Daniel Naber</a>
    with a short introduction of yourself. Alternatively, subscribe to the <a href="https://languagetool.org/development/mailing-list.php">mailing
    list</a>, introduce yourself and start contributing!</p>
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
