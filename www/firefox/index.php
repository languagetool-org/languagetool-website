<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "Style and Grammar Checking for Firefox";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Style and Grammar Checking for Firefox</h1>
    
    <p>Mozilla Firefox  supports spell checking, but even for native speakers it's easy
    to mix up words ("Children resemble <u>there</u> parents") or to make
    typos that result in grammar errors ("I talk<u>s</u> to him yesterday"). LanguageTool
    is an Open Source style and grammar checker that detects many of the problems
    a common spell checker will miss. It's available as an extension for the Firefox
    so you can conveniently check text before you submit it on the web.
    
    <p>It's free, no registration is required, and <a href="../privacy/">we don't collect your text data.</a>
    It supports English, Spanish, French, Russian, German, Polish, <a href="../languages/">and more</a>.</p>

    <div id="download" style="margin-top: 20px;">
        <div style="width:280px;" class="button_container">
            <a href="https://addons.mozilla.org/en-US/firefox/addon/languagetoolfx/" class="piwik_download">
                <div class="inner_button" style="text-align: center">
                    <div class="title"><strong>Click here</strong> to install</div>
                </div>
            </a>
        </div>
    </div>
    <div style="clear: both;"></div>

    <p>After installation, an icon will show up next to your search bar:
    
    <p><img src="images/lt-icon.png">
    
    <p>To check a text, click on the extension icon while your cursor is in the text field you'd
    like to check. A pop up will show the potential errors:
        
    <video style="margin-top:20px" src="video/screencast1.webm" autoplay loop controls>
    
    <p>Most errors that LanguageTool can detect come with one or more suggestions to fix the
    error. Click it to have the error replaced in your text. 
    You can also select text outside of an input area and have it checked. You won't be able to
    click the suggestions then, as the extension cannot edit static text.
    The extension's default shortcut is <tt>Ctrl</tt>+<tt>Shift</tt>+<tt>Return</tt>.
    
    <!--
    <h2>Advanced Options</h2>
    <p>run server locally
    -->
    
    <h2>Known Issues</h2>

    <ul>
        <li>It is not possible to check texts on websites which were loaded before the installation of the extension.</li>
        <li>If you select a headline and the following paragraph, you might get a warning about wrong case because LanguageTool doesn't consider the paragraph. It might also happen that the last word of the first paragraph and the first word of the second paragraph are joined together.</li>
        <li>If your text contains an error but the add-on doesn't detect it, that's probably
            because we don't have an error detection rule for that error yet. Please consider <a href="../contribute/">contributing</a>.
        </li>
    </ul>
        
    <h2>Source</h2>

    <p>The source code of this add-on is available <a href="https://github.com/languagetool-org/languagetool-browser-addon/tree/master/firefox">at Github</a>.
    It's released under the <a href="http://www.gnu.org/licenses/gpl-3.0.html">GPL 3.0 or later</a>.</p>

    <h2>Chrome</h2>
    
    <p>For Chrome users we offer <a href="../chrome/">LanguageTool for Chrome</a>, which works almost the same.
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
