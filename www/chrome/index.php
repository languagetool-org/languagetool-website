<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "Style and Grammar Checking for Chrome";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Style and Grammar Checking for Chrome</h1>
    
    <p>Google Chrome supports spell checking, but even for native speakers it's easy
    to mix up words ("Children resemble <u>there</u> parents") or to make
    typos that result in grammar errors ("I talk<u>s</u> to him yesterday"). LanguageTool
    is an Open Source style and grammar checker that detects many of the problems
    a common spell checker will miss. It's now available as an extension for the Google
    Chrome browser so you can conveniently check text before you submit it on the web.
    
    <p>It's free, no registration is required, and <a href="../privacy/">we don't collect your text data.</a>
    It supports English, Spanish, French, Russian, German, Polish, <a href="../languages/">and more</a>.</p>

    <div id="download" style="margin-top: 20px">
        <div style="width:280px" class="button_container">
            <a href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji"
               onclick="return installChromeExtension()" class="piwik_download">
                <div class="inner_button" style="text-align: center">
                    <div class="title"><strong>Click here</strong> to install</div>
                </div>
            </a>
        </div>
    </div>
    <div style="clear: both;"></div>

    <p>After installation, an icon will show up next to your address bar:
    
    <p><img src="images/lt-icon.png">
    
    <p>To check a text, click on the extension icon while your cursor is in the text field you'd
    like to check. A pop up will show the potential errors:
        
    <video style="margin-top:20px" src="video/output.webm" autoplay loop controls>
    
    <p>Most errors that LanguageTool can detect come with one or more suggestions to fix the
    error. Click it to have the error replaced in your text. 
    You can also select text outside of an input area and have it checked. You won't be able to
    click the suggestions then, as the extension cannot edit static text.
    
    <p>The extension's default shortcut is <tt>Ctrl</tt>+<tt>Shift</tt>+<tt>Space</tt>.
    In the popup, you can use the cursor keys to navigate between the errors and <tt>Return</tt>
    to accept a suggestion.</p>
    
    <!--
    <h2>Advanced Options</h2>
    <p>run server locally
    -->
    
    <h2>Known Issues</h2>
    
    <p>There's a small number of sites that the extension won't work on. One of them
    is Google Docs - this one has <a href="https://chrome.google.com/webstore/detail/languagetool/kjcoklfhicmkbfifghaecedbohbmofkm">its own add-on</a>.
    If your text contains an error but the extension doesn't detect it, that's probably
    because we don't have an error detection rule for that error yet. Please consider
    <a href="../contribute/">contributing</a>.
    
    <h2>Source</h2>

    <p>The source code of this extension is available <a href="https://github.com/languagetool-org/languagetool-browser-addon/tree/master/chrome">at Github</a>.
    It's released under the <a href="http://www.gnu.org/licenses/old-licenses/lgpl-2.1">LGPL 2.1</a>.</p>

    <h2>Firefox</h2>
    
    <p>For Firefox users we offer <a href="../firefox/">an add-on that works the same</a>.
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
