<!doctype html>
<html lang=ru>
<head>
    <?php
    $page = "other";
    $title = "Проверка грамматики и стиля в Google Chrome";
    ?>
    <?php include("../../../include/header.php"); ?>
</head>
<body>
<?php include("../../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Проверка грамматики и стиля для Chrome</h1>
    
    <p>Google Chrome содержит проверку правописания, but even for native speakers it's easy
    to mix up words ("Children resemble <u>there</u> parents") или сделать опечатку, которая
    приведёт к грамматической ошибкеa ("I talk<u>s</u> to him yesterday"). LanguageTool --
    это система с открытым исходным кодом для проверки грамматики и стиля, которая поможет найти много ошибок в тексте,
    которые стандартная проверка правописания не сможет найти. |It's now available as an extension for the Google
    Chrome browser so you can conveniently check text before you submit it on the web.
    
    <p>Он свободен, не требует регистрации, и <a href="../../privacy/">мы не собираем ваши тексты.</a>
    Есть поддержка для английского, французского, русского, испанского, немецкого, польского <a href="../../languages/"> и других языков</a>.</p>

    <div id="download" style="margin-top: 20px">
        <div style="width:280px" class="button_container">
            <a href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji"
               onclick="return installChromeExtension()" class="piwik_download">
                <div class="inner_button" style="text-align: center">
                    <div class="title"><strong>Щёлкните здесь</strong> для установки</div>
                </div>
            </a>
        </div>
    </div>
    <div style="clear: both;"></div>

    <p>После установки значок LT появится рядом с адресной строкой браузера:
    
    <p><img src="../../chrome/images/lt-icon.png">
    
    <p>Для проверки текста щёлкните мышкой по значку расширения, когда курсор находится в текстовом поле, которое надо проверить.
    Всплывающее окно покажет возможные ошибки:
        
    <video style="margin-top:20px" src="../../chrome/video/output.webm" autoplay loop controls>
    
    <p>Most errors that LanguageTool can detect come with one or more suggestions to fix the
    error. Click it to have the error replaced in your text. 
    You can also select text outside of an input area and have it checked. You won't be able to
    click the suggestions then, as the extension cannot edit static text.
    The extension's default shortcut is <tt>Ctrl</tt>+<tt>Shift</tt>+<tt>Space</tt>.
    
    <!--
    <h2>Advanced Options</h2>
    <p>run server locally
    -->
    
    <h2>Известные проблемы</h2>
    
    <p>Это расширение не поддерживает только очень небольшое число сайтов. Одним из таких сайтов является 
    Google Docs. Если найдётся другой такой сайт, <a href="../../support/">дайте нам знать</a>.
    If your text contains an error but the extension doesn't detect it, that's probably
    because we don't have an error detection rule for that error yet. Please consider
    <a href="../../contribute/">contributing</a>.
    
    <h2>Исходный код</h2>

    <p>Исходный код этого расширения доступен по адресу <a href="https://github.com/languagetool-org/languagetool-browser-addon/tree/master/chrome">на Github</a>.
    Он опубликован на условиях лицензии <a href="http://www.gnu.org/licenses/old-licenses/lgpl-2.1">LGPL 2.1</a>.</p>

    <h2>Firefox</h2>
    
    <p>Для пользователей Firefox мы предлагаем <a href="../../firefox/">LanguageToolFx</a>,
    который работает аналогично этому расширению.
    
</div>

<?php include("../../../include/footer.php"); ?>

</body>
</html>
