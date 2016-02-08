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
    
    <p>Google Chrome содержит проверку правописания, но эта проверка не сможет найти 
    ошибки в употреблении похожих слов ("Children resemble <u>there</u> parents") или обнаружить опечатку, которая
    приводит к грамматической ошибке ("I talk<u>s</u> to him yesterday"). LanguageTool –
    это система с открытым исходным кодом для проверки грамматики и стиля. Система поможет найти много ошибок в тексте,
    которые стандартная проверка правописания не сможет найти. Сейчас LanguageTool доступен и как расширение для браузера Google
    Chrome. Теперь можно проверить текст перед тем, как опубликовать его в Интернете.
    
    <p>LanguageTool свободен, не требует регистрации и <a href="../../../privacy/">мы не собираем ваши тексты.</a>
    Он поддерживает английский, русский, испанский, французский, немецкий, польский <a href="../../../languages/">и другие языки</a>.</p>
    
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
    Во всплывающем окне будут отображены ошибки:
        
    <video style="margin-top:20px" src="../../chrome/video/output.webm" autoplay loop controls>
    
    <p>Для большинства ошибок LanguageTool может показать одно или несколько предложений по их исправлению.
    Щёлкните по ним для исправления ошибки в проверяемом тексте. 
    Ещё можно проверить текст веб-страницы. Но к этому тексту нельзя применить варианты исправления, так как расширение не может изменять текст веб-страницы. 
    Для расширения определены горячие клавиши <tt>Ctrl</tt>+<tt>Shift</tt>+<tt>Space</tt>.
    
    <!--
    <h2>Advanced Options</h2>
    <p>run server locally
    -->
    
    <h2>Известные проблемы</h2>
    
    <p>Это расширение не поддерживает только очень небольшое число сайтов. Одним из таких сайтов является 
    Google Docs. Если найдётся другой такой сайт, <a href="../../support/">дайте нам знать</a>.
    Если проверяемый текст содержит ошибку, но расширение его не может обнаружить, то скорей всего
    причиной этого является отсутствие правила для обнаружения этой конкретной ошибки. Пожалуйста, присылайте 
    <a href="../../contribute/">предложения</a>.
    
    <h2>Исходный код</h2>

    <p>Исходный код этого расширения доступен[ <a href="https://github.com/languagetool-org/languagetool-browser-addon/tree/master/chrome">на Github</a>.
    Он опубликован на условиях лицензии <a href="http://www.gnu.org/licenses/old-licenses/lgpl-2.1">LGPL 2.1</a>.</p>

    <h2>Firefox</h2>
    
    <p>Для пользователей Firefox мы предлагаем <a href="../firefox/">LanguageToolFx</a>,
    который работает аналогично этому расширению.
    
</div>

<?php include("../../../include/footer.php"); ?>

</body>
</html>
