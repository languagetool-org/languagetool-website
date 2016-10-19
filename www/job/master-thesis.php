<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "Master thesis job: development of a machine learning approach to detect grammar errors in English text";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h2>Master thesis job: development of a machine learning approach to detect grammar errors in English text</h2>

    <p>LanguageTool is an Open Source style and grammar checker that supports more than 20 languages.
    To further improve it, we're looking for a student to extend it with error detection rules based
    on machine learning. LanguageTool is still mostly based on manually written rules.
    For some errors, it also makes use of statistics based on the Google ngram corpus.

    <p>We assume that most grammar problems can be interpreted as a
    classification issue with categories "correct" and "incorrect". For example:

    <ul>
        <li>Mixing up "you're" and "your" or "there" and "their"
        <li>Missing determiner, especially in texts written by non-native speakers
        <li>Word order issues like the order of adjectives, especially in texts written by non-native speakers
    </ul>

    <h3>Tasks</h3>

    <ul>
        <li>build a training corpus of (mostly) correct sentences, e.g. from Wikipedia and Tatoeba
        <li>synthesize incorrect sentences, for example by replacing "you're" with "your" in originally correct sentences
        <li>implement the machine learning algorithm using a common framework (Deeplearning4j, TensorFlow, ...)
        <li>evaluate precision and recall
        <li>modify the network architecture to improve precision and recall
        <li>measure performance in sentences per second
        <li>evaluate how the neural net can be used inside a Java software
    </ul>

    <h3>Your Profile</h3>

    <ul>
        <li>student of computer science, computational linguistics, mathematics, or similar
        <li>knowledge of machine learning, especially deep learning
        <li>programming knowledge (Java preferred)
        <li>you need to find a supervisor from your university
    </ul>

    <p>This master thesis project lets you work on an established Open Source
    software with more than 100,000 users per month. Your work will be Open Source
    too, and you'll be part of our developer community.

    <p><b>Start date:</b> as soon as possible<br>
    <b>Location:</b> anywhere (work from home)<br>
    <b>Payment:</b> common local payment for a part-time student job<br>
    <b>Homepage:</b> <a href="https://languagetool.org">https://languagetool.org</a>

    <p><strong>Interested? Please contact the LanguageTool maintainer, daniel.naber@languagetool.org</strong>

    <h3>About languagetool.org</h3>

    <p>languagetool.org is a team of software and language enthusiasts, working on LanguageTool
    in their spare time. The team is spread all over Europe. We're committed to develop the
    world's best Open Source style and grammar checker.
    

</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
