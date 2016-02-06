<!doctype html>
<html lang=ru>
<head>
    <?php
    $page = "other";
    $title = "Проверка грамматики и стиля в Firefox";
    ?>
    <?php include("../../../include/header.php"); ?>
</head>
<body>
<?php include("../../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Style and Grammar Checking for Firefox</h1>
    
    <p>Mozilla Firefox содержит проверку правописания, но эта проверка не сможет найти 
    ошибки в употреблении похожих слов ("Children resemble <u>there</u> parents") или обнаружить опечатку, которая
    приводит к грамматической ошибке ("I talk<u>s</u> to him yesterday"). LanguageTool –
    это система с открытым исходным кодом для проверки грамматики и стиля. Система поможет найти много ошибок в тексте,
    которые стандартная проверка правописания по словарю не сможет найти. Сейчас LanguageTool доступен и как расширение для браузера Firefox.
    Теперь текст можно проверить перед тем, как отправить его в Интернет.
    
    <p>It's free, no registration is required, and <a href="../../../privacy/">we don't collect your text data.</a>
    It supports English, Spanish, French, Russian, German, Polish, <a href="../../../languages/">and more</a>.</p>

    <div id="download" style="margin-top: 20px;">
        <div style="width:280px;" class="button_container">
            <a href="https://addons.mozilla.org/ru-RU/firefox/addon/languagetoolfx/" class="piwik_download">
                <div class="inner_button" style="text-align: center">
                    <div class="title"><strong>Щёлкните здесь</strong> для установки</div>
                </div>
            </a>
        </div>
    </div>
    <div style="clear: both;"></div>

    <p>After installation, an icon will show up next to your search bar:
    
    <p><img src="../../images/lt-icon.png">
    
    <p>To check a text, click on the extension icon while your cursor is in the text field you'd
    like to check. A pop up will show the potential errors:
        
    <video style="margin-top:20px" src="../../firefox/video/screencast1.webm" autoplay loop controls>
    
    <p>Most errors that LanguageTool can detect come with one or more suggestions to fix the
    error. Click it to have the error replaced in your text. 
    You can also select text outside of an input area and have it checked. You won't be able to
    click the suggestions then, as the extension cannot edit static text.
    The extension's default shortcut is <tt>Ctrl</tt>+<tt>Shift</tt>+<tt>Return</tt>.
    
    <!--
    <h2>Advanced Options</h2>
    <p>run server locally
    -->
  
  
  <h2>Известные проблемы</h2>

    <ul>
        <li>It is not possible to check texts on websites which were loaded before the installation of the extension.</li>
        <li>If you select a headline and the following paragraph, you might get a warning about wrong case because LanguageTool doesn't consider the paragraph. It might also happen that the last word of the first paragraph and the first word of the second paragraph are joined together.</li>
        <li>If your text contains an error but the add-on doesn't detect it, that's probably
            because we don't have an error detection rule for that error yet. Please consider <a href="../contribute/">contributing</a>.
        </li>
    </ul>
        
    <h2>Исходный код</h2>

    <pИсходный код этого расширения доступен <a href="https://github.com/languagetool-org/languagetool-browser-addon/tree/master/firefox">на Github</a>.
    Он опубликован на условиях лицензии <a href="http://www.gnu.org/licenses/gpl-3.0.html">GPL 3.0 or later</a>.</p>

    <h2>Chrome</h2>
    
    <p>Для пользователей Chrome мы предлагаем <a href="../chrome/">LanguageTool для Chrome</a>, который работает аналогично этому расширению.
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
