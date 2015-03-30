<!doctype html>
<html lang=ru>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "ru";
    $checkDefaultLangWithCountry = "ru-RU";

    // ------------- TRANSLATIONS START HERE -------------

    $title = "LanguageTool. Программа для проверки грамматики, пунктуации и стиля";

    // TODO: translate language names and sort them alphabetically (by translation, not by code)
    $checkLanguage = array(
        'ast' => 'Asturian',
        'be'  => 'Belarusian',
        'br'  => 'Breton',
        'ca'  => 'Catalan',
        'zh'  => 'Chinese',
        'da'  => 'Danish',
        'nl'  => 'Dutch',
        'en-US'  => 'English',
        'eo'  => 'Esperanto',
        'fr'  => 'French',
        'gl'  => 'Galician',
        'de-DE'  => 'German',
        'el'  => 'Greek',
        'is'  => 'Icelandic',
        'it'  => 'Italian',
        'ja'  => 'Japanese',
        'km'  => 'Khmer',
        'lt'  => 'Lithuanian',
        'ml'  => 'Malayalam',
        'fa'  => 'Persian',
        'pl'  => 'Polish',
        'pt'  => 'Portuguese',
        'ro'  => 'Romanian',
        'ru'  => 'Русский',
        'sk'  => 'Slovak',
        'sl'  => 'Slovenian',
        'es'  => 'Spanish',
        'sv'  => 'Swedish',
        'tl'  => 'Tagalog',
        'uk'  => 'Ukrainian'
    );

    $checkSubmitButtonValue = "Проверить...";
    $checkSubmitButtonTitle = "Проверить...";   //TODO: add "also possible by using Ctrl+Return"
    $toggleFullscreenMode = "переключить полноэкранный режим" ;

    // TODO: add &shy; to make long words break in the browser
    $introText1 = "<strong>LanguageTool</strong> - это свободное программное обеспечение для проверки грамматики, пунктуации, орфографии и стиля.";
    $introText2 = "Программа поддерживает более <a href='/languages/'>20 языков</a>";

    $downloadHeadline = "Скачать";
    $downloadRequiresJava = "Требуется Java {version}";
    $downloadTitle = "Скачать LanguageTool для <strong>LibreOffice/OpenOffice</strong>";
    $downloadTitleStandAlone = "Скачать LanguageTool независимая версия";
    $downloadLabelFx = "Скачать LanguageToolFx Расширение для <strong>Firefox</strong>";
    $checklistText = "Посмотрите, пожалуйста, <a href='/ru/issues/'>наш список</a>, если вы столкнулись с проблемами.";
    $otherDownloadsText = "Скачать <a href='/download/'>старые релизы</a> или <a href='/download/snapshots/?C=M;O=D'>ежедневные сборки</a>.";
    $webstartText = "Запустить <a href='/webstart/web/LanguageTool.jnlp'>с Java WebStart</a>.";

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

<a title="LanguageTool работает в качестве расширения LibreOffice 3.3" class="fancyboxImage"
   href="/ru/screenshots/screenshot-lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="/ru/screenshots/screenshot-lo3-very_small.png" alt="Screenshot of LanguageTool"/></a>


<p>LanguageTool - это <a href="http://ru.wikipedia.org/wiki/Свободное_программное_обеспечение" target="_blank">свободное программное обеспечение</a> для проверки грамматики, пунктуации и стиля.

<h2>Функциональность</h2>

В состав LanguageTool входит <a href="http://community.languagetool.org/rule/list?lang=ru"> 430 правил</a> для проверки русскоязычных текстов.<br/><br/>
Правила разделены на группы:
<br/>
<!--
<small>(Наведите курсор мыши на ошибки для отображения сообщения программы.)</small>
-->
<ul>
    <li>Грамматика
        <ul>
        </ul>
    </li>
    <li>Стиль
        <ul>
        </ul>
    </li>
    <li>Пунктуация
        <ul>
        </ul>
    </li>
    <li>Заглавные/строчные буквы
        <ul>
        </ul>
    </li>
    <li>Типографика
        <ul>
        </ul>
    </li>
   <li>Логические ошибки
        <ul>
        </ul>
    </li>
    <li>Общие правила
        <ul>
        </ul>
    </li>
       <li>Дополнительные правила
        <ul>
        </ul>
    </li>
    <li>Проверка орфографии (не входит в состав расширения LibreOffice/OpenOffice)
        <ul>
        </ul>
    </li>
</ul>

<p>Программа для большинства найденных грамматических ошибок предлагает варианты их исправления.
</p>
<p>В независимую версию программы дополнительно включена проверка орфографии с коррекцией ошибок.
</p>

<h2>Демонстрация возможностей LanguageTool</h2>

<p><a href="http://community.languagetool.org/?lang=ru">Здесь</a> можно запустить  LanguageTool непосредственно в браузере.
</p>

<h2>Скачать</h2>

<p>LanguageTool можно скачать и <a href="../">с главной страницы</a> сайта.</p>

<p>Доступны 
<a href="../download/snapshots/">ежедневные нетестированные сборки</a>
 (<a href="http://www.languagetool.org/download/CHANGES.txt">Список изменений</a>).
</p>


<h2>Установка для LibreOffice/OpenOffice.org</h2>
<ul>
    <li>Открыть LibreOffice/OpenOffice.Org. </li> 
    <li>Выбрать Сервис - > Управление расширениями - > Добавить. </li> 
    <li>Выбрать файл с расширением.</li> 
    <li>Нажать «ОК».</li>
    <li>Обязательно перезапустить LibreOffice/OpenOffice.Org (включая и быстрый запуск).</li>
</ul>
<p>Системные требования: как минимум <a href="http://ru.libreoffice.org/">LibreOffice 3.5.4</a> или Apache OpenOffice 3.4.1+, <a href="http://www.java.com/ru/download/manual.jsp">Java 7 от Oracle </a> или IcedTea. 
</p>
<p>Для работы в Windows требуется 32-битная версия <a href="http://www.java.com/ru/download/manual.jsp">Java 7+</a>. 
</p>
<p>LibreOffice 3.5 и старше уже включает в себя лёгкую систему проверки грамматики (LightProof), которая блокирует работу LanguageTool для английского и русского языков.
Отключить LightProof и включить LanguageTool для указанных языков можно через меню   Сервис -> Параметры -> LibreOffice -> Настройки языка -> Лингвистика -> Доступные языковые модули -> Правка ...
Необходимо поставить галочку для LanguageTool и убрать для LightProof. 
</p>


<h2>Использование в качестве независимого приложения</h2>
Системные требования:   <a href="http://www.java.com/ru/download/manual.jsp">Java 7+</a> от Oracle или IcedTea.
<a title="LanguageTool 2.5-SNAPSHOT работает как независимое графическое приложение" class="fancyboxImage"
   href="/ru/screenshots/LT-GUI-ru-2.5.png"><img style="margin-left: 15px" width="200" height="208" align="right"
   src="/ru/screenshots/LT-GUI-ru-2.5-very_small.png" alt="Screenshot of LanguageToolGUI"/></a>

<ul>
    <li>Скачать программу.</li>
    <li>Распаковать полученный архив.</li>
    <li>Запустить программу languagetool.jar двойным щелчком мышки или командой java -jar languagetool.jar</li>
</ul>

LanguageTool можно использовать для проверки грамматики в любом тексте, который предварительно скопирован в буфер обмена.
Вызывается проверка командой меню: "Файл -> Проверить текст в буфере обмена". 
Для удобства использования LanguageTool можно свернуть в трей (Команда меню: "Файл -> Спрятать в трей"). 
Щелчок мышкой по значку  LanguageTool в трее открывает меню. Проверка текста вызывается командой "Проверить текст в буфере обмена". 


<h2>Использование в качестве консольного приложения</h2>
Системные требования:  <a href="http://www.java.com/ru/download/manual.jsp">Java 7+</a> от Oracle или IcedTea.
<ul>
    <li>Скачать программу.</li>
    <li>Распаковать полученный архив.</li>
    <li>Подготовить файл Example.txt с текстом для проверки.</li>
    <li>Запустить программу командой java -jar languagetool-commandline.jar -l ru Example.txt</li>
</ul>
<a href="http://wiki.languagetool.org/command-line-options">Ключи командной строки консольного приложения</a>


<h2>Примеры интеграции</h2>
<ul>
    <li> <a href="../usage">Примеры программного кода для интеграции с другими программами</a></li>
</ul>


<p><strong>Интеграция LanguageTool с приложениями</strong>:</p>

<ul style="list-style:none">
	<li><a href="http://www.vim.org/scripts/script.php?script_id=3223">LanguageTool для vim</a></li>
	<li><a href="http://wiki.lyx.org/Tools/LyX-GrammarChecker">LanguageTool для LyX</a></li>
	<li><a href="https://sourceforge.net/projects/omegat-plugins/files/OmegaT-LanguageTool/">LanguageTool плагин для OmegaT</a>
		добавляет проверку грамматики в систему автоматизированных переводов OmegaT с открытыми исходными кодами.</li>
	<li><a href="http://www.opentag.com/okapi/wiki/index.php?title=CheckMate">LanguageTool и CheckMate</a> используется как сервер для расширения возможностей контроля качества переводов.</li>
	<li><a href="https://addons.mozilla.org/en-US/thunderbird/addon/14781">LanguageTool для Thunderbird</a></li>
        <li><a href="https://addons.mozilla.org/ru/firefox/addon/languagetoolfx/">LanguageToolFx для Firefox</a></li>
</ul>


<h2>Контакты</h2>
<!-- TODO:  -->

<p>Обсудить работу программы можно на <a href="http://forumooo.ru/index.php/topic,231.0.html">форуме forumooo.ru</a>,  
посвящённом работе в офисных пакетах LibreOffice и OpenOffice.org</p>

<h2>Новости</h2>

<p><strong>30.03.2015:</strong> Вышла версия LanguageTool 2.9</p>
<ul>
Изменения для русского модуля включают:
	<li>Добавлено около 60 новых правил.</li>
        <li>Переработаны старые правила для улучшения качества проверки.</li>


    Остальные изменения:    
        <li>Обновлены модули для проверки следующих языков: английского, немецкого, французского, украинского, польского, эсперанто,  итальянского,  польского, португальского.</li>
        <li>Теперь для автоопределения языка при проверке текстов независимой версией программы используется  language-detector.</li>
        <li>Упрощён формат грамматических файлов</li>
        <li>Создано простое правило в помощь переводчикам: проверяется, чтобы предложения в оригинале и в переводе оканчивались на одни и те же знаки препинания (доступно в режиме bitext и обрабатывает только эти знаки препинания .?! )</li>
        <li>Появились пользовательские словари, используемые для проверки орфографии  (это  файлы <КодЯзыка>/hunspell/spelling.txt) </li>
        <li>Полный <a href="http://languagetool.org/download/CHANGES.txt">список изменений</a></li>
</ul>


<p><strong>30.12.2014:</strong> Вышла версия LanguageTool 2.8</p>
<ul>
Изменения для русского модуля включают:
	<li>Добавлено много новых правил.</li>
        <li>Переработаны старые правила для улучшения качества проверки.</li>
	<li>Добавлены правила для поиска "ложных друзей переводчика"</li>

    Остальные изменения:    
        <li>Обновлены модули для проверки следующих языков: английского, немецкого, французского, украинского, польского, португальского, испанского, тагальского, бретонского, каталанского, астурийского, голландского.</li>
        <li>Основные <a href="http://languagetool.org/changes/languagetool-2.7_to_languagetool-2.8/">изменения в xml-правилах.</a></li>
        <li>Полный <a href="http://languagetool.org/download/CHANGES.txt">список изменений</a></li>
</ul>

 <a href="/ru/news">Остальные новости</a>


<h2>Нужна помощь?</h2>

<p><a href="http://myooo.ru/content/view/83/43/">Домашняя страничка расширения для OpenOffice.org/LibreOffice на русском языке.</a></p>

<p><a href="/ru/issues">Список известных проблем</a>.</p>


<h2>Лицензия и исходный код</h2>

<p>LanguageTool свободно распространятся по лицензии <a href="http://www.gnu.org/licenses/old-licenses/lgpl-2.1">LGPL</a> версии 2.1 или новее.
Исходный код доступен <a href="https://github.com/languagetool-org/">на GitHub</a> через Git или SVN.
Содержимое этой домашней страницы доступно по лицензии <a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>.</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
