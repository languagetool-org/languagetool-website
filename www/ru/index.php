<!doctype html>
<html lang=ru>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $enable_download_dialogs = 1;
    include("../../include/browser_language.php");
    $checkDefaultLang = getDefaultLanguage("ru");
    $checkDefaultLangWithCountry = getDefaultLanguageAndCountry("ru-RU");

    // ------------- TRANSLATIONS START HERE -------------

    $title = "LanguageTool. Система для проверки грамматики, орфографии, пунктуации и стиля";

    // TODO: translate language names and sort them alphabetically (by translation, not by code)
    $checkLanguage = array(
        'auto' => 'auto-detect',
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
        //'is'  => 'Icelandic',
        'it'  => 'Italian',
        'ja'  => 'Japanese',
        'km'  => 'Khmer',
        //'lt'  => 'Lithuanian',
        //'ml'  => 'Malayalam',
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
    $introText1 = "<strong>LanguageTool</strong> &mdash; это свободное программное обеспечение для проверки грамматики, пунктуации, орфографии и стиля.";
    $introText2 = "В состав LanguageTool входят грамматические правила для <a href='/languages/'>30 языков</a>.";
    $addToChrome = "Добавить LT в Chrome";
    $addToFirefox = "Добавить LT в Firefox";
	
    $forumHeadline = "Форум";
    $developmentHeadline = "Разработка";
    $compareEditionsText = "Сравнить редакции";
    $moreIntegrationsText = "Больше дополнений";
    $downloadHeadline = "Скачать";
    $downloadRequiresJava = "Требуется Java {version}+";
    $downloadTitle = "Для <strong>LibreOffice и OpenOffice</strong>";
    $downloadTitleStandAlone = "Независимая версия";
    $downloadLabelFx = "Для <strong>Firefox</strong>";
    $downloadLabelChrome = "Для <strong>Chrome</strong>";
    $downloadLabelBrowserAddOn = "Расширение для браузера";
    $downloadLabelGoogleDocs = "Для <strong>Google Docs</strong>";
    $downloadLabelAddOn = "Расширение";
    $checklistText = "Посмотрите, пожалуйста, <a href='/ru/issues/'>наш список</a>, если вы столкнулись с проблемами.";
    $otherDownloadsText = "Скачать <a href='/download/'>старые релизы</a> или <a href='/download/snapshots/?C=M;O=D'>ежедневные сборки</a>  (<a href='https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.md'>список изменений</a>).";
    $webstartText = "Запустить <a href='/webstart/web/LanguageTool.jnlp'>с Java WebStart</a>.";
    $firefoxLink = '<a href="/ru/firefox/">Подробнее...</a>';
    $chromeLink = '<a href="/ru/chrome/">Подробнее...</a>';

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
    <?php include("../../include/header2.php"); ?>
    
</head>
<body>
<?php include("../../include/page_start.php"); ?>
<?php
include("../../include/pages/pricing.php");
?>

<div id="languageContent">

<a title="LanguageTool работает в качестве расширения LibreOffice 3.3" class="fancyboxImage"
   href="/ru/screenshots/screenshot-lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="/ru/screenshots/screenshot-lo3-very_small.png" alt="Screenshot of LanguageTool"/></a>


<p>LanguageTool &mdash; это <a href="http://ru.wikipedia.org/wiki/Свободное_программное_обеспечение" target="_blank">свободное программное обеспечение</a> для проверки грамматики, пунктуации и стиля.

<h2>Функциональность</h2>

В состав LanguageTool входит <a href="http://community.languagetool.org/rule/list?lang=ru"> 740 правил</a> для проверки русскоязычных текстов.<br/><br/>
Правила разделены на группы:
<br/>
<!--
<small>(Наведите курсор мыши на ошибки для отображения сообщения программы.)</small>
-->
<ul>
    <li>грамматика;
        <ul>
        </ul>
    </li>
    <li>стиль;
        <ul>
        </ul>
    </li>
    <li>пунктуация;
        <ul>
        </ul>
    </li>
    <li>заглавные/строчные буквы;
        <ul>
        </ul>
    </li>
    <li>типографика;
        <ul>
        </ul>
    </li>
   <li>логические ошибки;
        <ul>
        </ul>
    </li>
    <li>общие правила;
        <ul>
        </ul>
    </li>
       <li>дополнительные правила;
        <ul>
        </ul>
    </li>
    <li>проверка орфографии (не входит в состав расширения LibreOffice/OpenOffice).
        <ul>
        </ul>
    </li>
</ul>

<p>Программа для большинства найденных грамматических ошибок предлагает варианты их исправления.
</p>
<p>В независимую версию программы дополнительно включена проверка орфографии с коррекцией ошибок.
</p>
<p>Доступны расширения для проверки грамматики и стиля в браузерах <a href="/ru/chrome/">Google Chrome</a> и <a href="/ru/firefox/">FireFox</a>.
</p>



<h2>Демонстрация возможностей LanguageTool</h2>

На этой странице доступна форма для онлайн проверки орфографии и грамматики. 
<p>А <a href="http://community.languagetool.org/?lang=ru">здесь</a> можно протестировать расширенные возможности LanguageTool непосредственно в браузере.
</p>

<h2>Скачать</h2>

<p>LanguageTool можно скачать и <a href="../">с главной страницы</a> сайта.</p>

<p>Доступны 
<a href="../download/snapshots/">ежедневные сборки</a>
 (<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.md">список изменений</a>).
</p>


<h2>Установка для LibreOffice/OpenOffice.org</h2>
<br>
Установка:
<ul>
    <li>Открыть LibreOffice/OpenOffice.Org. </li> 
    <li>Выбрать Сервис - > Управление расширениями - > Добавить. </li> 
    <li>Выбрать файл «LanguageTool-3.x.oxt».</li> 
    <li>Нажать «ОК».</li>
    <li>Обязательно перезапустить LibreOffice/OpenOffice.Org (включая и быстрый запуск).</li>
</ul>
<p>Системные требования: как минимум <a href="http://ru.libreoffice.org/">LibreOffice 3.5.4</a> или Apache OpenOffice 3.4.1+, <a href="http://www.java.com/ru/download/manual.jsp">Java 8 от Oracle </a> или IcedTea. 
</p>
<p>Для 32-битной версии Apache OpenOffice или LibreOffice требуется 32-битная версия <a href="http://www.java.com/ru/download/manual.jsp">Java 8+</a>. 
</p>
<p>Для 64-битной версии Apache OpenOffice или LibreOffice необходима 64-битная версия <a href="http://www.java.com/ru/download/manual.jsp">Java 8+</a>. 
</p>
<p>LibreOffice 3.5 и старше уже включает в себя лёгкую систему проверки грамматики (LightProof), которая блокирует работу LanguageTool для английского и русского языков.
Отключить LightProof и включить LanguageTool для указанных языков можно через меню   Сервис -> Параметры -> LibreOffice -> Настройки языка -> Лингвистика -> Доступные языковые модули -> Правка ...
Необходимо поставить галочку для LanguageTool и убрать для LightProof. 
</p>


<h2>Использование в качестве независимого приложения</h2>
Системные требования:   <a href="http://www.java.com/ru/download/manual.jsp">Java 8+</a> от Oracle или IcedTea.
<a title="LanguageTool 2.5-SNAPSHOT работает как независимое графическое приложение" class="fancyboxImage"
   href="/ru/screenshots/LT-GUI-ru-2.5.png"><img style="margin-left: 15px" width="200" height="208" align="right"
   src="/ru/screenshots/LT-GUI-ru-2.5-very_small.png" alt="Screenshot of LanguageToolGUI"/></a>
<br>
Использование:
<ul>
    <li>Скачать программу.</li>
    <li>Распаковать полученный архив.</li>
    <li>Запустить программу languagetool.jar двойным щелчком мышки или командой «java -jar languagetool.jar».</li>
</ul>

LanguageTool можно использовать для проверки грамматики в любом тексте, который предварительно скопирован в буфер обмена.
Вызывается проверка командой меню: «Файл -> Проверить текст в буфере обмена». 
Для удобства использования LanguageTool можно свернуть в трей (Команда меню: «Файл -> Спрятать в трей»). 
Щелчок мышкой по значку  LanguageTool в трее открывает меню. Проверка текста вызывается командой «Проверить текст в буфере обмена». 


<h2>Использование в качестве консольного приложения</h2>
Системные требования:  <a href="http://www.java.com/ru/download/manual.jsp">Java 8+</a> от Oracle или IcedTea.
<br>
Использование:
<ul>
    <li>Скачать программу.</li>
    <li>Распаковать полученный архив.</li>
    <li>Подготовить файл «Example.txt» с текстом для проверки.</li>
    <li>Запустить программу командой «java -jar languagetool-commandline.jar -l ru Example.txt».</li>
</ul>
<a href="http://wiki.languagetool.org/command-line-options">Ключи командной строки консольного приложения</a>


<h2>Примеры интеграции</h2>
<ul>
    <li> <a href="../usage">Примеры программного кода для интеграции с другими программами</a></li>
</ul>


<p><strong>Интеграция LanguageTool с приложениями</strong>:</p>

<ul style="list-style:none">
	<li><a href="http://www.vim.org/scripts/script.php?script_id=3223">LanguageTool для vim</a>;</li>
	<li><a href="http://wiki.lyx.org/Tools/LyX-GrammarChecker">LanguageTool для LyX</a>;</li>
	<li><a href="https://sourceforge.net/projects/omegat-plugins/files/OmegaT-LanguageTool/">LanguageTool плагин для OmegaT</a>
		добавляет проверку грамматики в систему автоматизированных переводов OmegaT с открытыми исходными кодами;</li>
	<li><a href="http://www.opentag.com/okapi/wiki/index.php?title=CheckMate">LanguageTool и CheckMate</a> проверка грамматики в системе контроля качества переводов;</li>
	<li><a href="https://addons.mozilla.org/en-US/thunderbird/addon/14781">LanguageTool для Thunderbird;</a></li>
        <li><a href="https://addons.mozilla.org/ru/firefox/addon/languagetool?src=external-lt-homepage-ru">LanguageTool для Firefox</a>;</li>
        <li><a href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji">LanguageTool для Google Chrome</a>;</li>
        <li><a href="https://play.google.com/store/apps/details?id=org.softcatala.corrector">LanguageTool proofreader для Android</a>.</li>
</ul>


<h2>Контакты</h2>
<!-- TODO:  -->

<p>Обсудить работу программы можно на <a href="http://forumooo.ru/index.php/topic,231.0.html">форуме forumooo.ru</a>,  
посвящённом работе в офисных пакетах LibreOffice и OpenOffice.</p>

<h2>Новости</h2>

<p><strong>27.03.2018: </strong>Вышла версия 4.1 LanguageTool!</p>
<ul>
<li>Обновлены модули проверки для русского, английского, немецкого, украинского, каталанского, китайского, польского, эсперанто, португальского, испанского, французского, галисийского и нидерландского языков.</li>
<li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
 Изменения для русскоязычного модуля включают:
<li>Улучшены правила разбиения текста на предложения.</li>
<li>Созданы новые и улучшены существующие правила для проверки пунктуации и грамматики.</li>
<li>Расширен словарь частей речи.</li>
<li>В словарь независимой версии добавлены новые слова для орфографической проверки.</li>
</ul>
	
<p><strong>29.12.2017: </strong>Вышла версия 4.0 LanguageTool!</p>
<ul>
<li>Обновлены модули проверки для русского, английского, португальского, польского, немецкого, украинского,  каталанского,  французского, галисийского и нидерландского языков.</li>
<li>Добавлены правила поиска <a href="https://ru.wikipedia.org/wiki/%D0%9B%D0%BE%D0%B6%D0%BD%D1%8B%D0%B5_%D0%B4%D1%80%D1%83%D0%B7%D1%8C%D1%8F_%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4%D1%87%D0%B8%D0%BA%D0%B0">«ложных друзей переводчика»</a> для переводов между русским и английским языками.</li>
<li>Для английского, немецкого и португальского языков реализована новая модель нейросети — word2vec. <a href="https://fscs.hhu.de/languagetool/summary.pdf">Описание релизации (англ. в формате pdf)</a>.  Для работы этой нейросети необходим файл данных <a href="https://fscs.hhu.de/languagetool/word2vec.tar.gz">word2vec.tar.gz</a>.</li>
<li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
 Изменения для русскоязычного модуля включают:
<li>Созданы новые и улучшены существующие правила для проверки пунктуации и грамматики.</li>
<li>В словарь независимой версии добавлены новые слова для орфографической проверки.</li>
</ul>
	
<p><strong>26.09.2017: </strong>Вышла версия 3.9 LanguageTool!</p>
<ul>
<li>Обновлены модули проверки для португальского, немецкого, украинского, испанского, каталанского, бретонского, английского, французского, эсперанто, нидерландского и русского языков.</li>
<li>Внесены дополнения в Java API.</li>
<li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
Изменения для русскоязычного модуля включают:
<li>Создано несколько новых и улучшены существующие правила.</li>
<li>Добавлены новые слова для орфографической проверки в независимую версию.</li>
</ul>	
	
<p><strong>27.06.2017: </strong>Вышла версия 3.8 LanguageTool!</p>
<ul>
<li>Обновлены модули проверки для русского, португальского, каталанского, английского, немецкого, польского, словацкого, нидерландского и украинского языков.</li>
<li>Улучшена работа сервера LT для независимой версии, внесены изменения в настройки сервера по умолчанию.</li>
<li>Java API: удалены устаревшие методы.</li>
<li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
Изменения для русскоязычного модуля включают:
<li>Созданы новые и улучшены существующие правила.</li>
</ul>
	
<p><strong>27.03.2017: </strong>Вышла версия 3.7 LanguageTool!</p>
<ul>
<li>Обновлены модули проверки для португальского, бретонского, каталанского, английского, французского, немецкого, русского, украинского, греческого, итальянского языков.</li>
<li>Диалог настроек для LibreOffice/Apache OpenOffice использует системный стиль окна вместо ранее предопределённого стиля Nimbus.</li>
<li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
Изменения для русскоязычного модуля включают:
<li>Созданы новые правила.</li>
<li>Усовершенствованы существующие грамматические правила.</li>
<li>Обновлён встроенный словарь частей речи, улучшена система идентификаторов частей речи.</li>
<li>Добавлены новые слова для орфографической проверки в независимую версию.</li>
</ul>
	
<p><strong>28.12.2016: </strong>Вышла версия 3.6 LanguageTool!</p>
<ul>
<li>Обновлены модули для проверки следующих языков: английского, русского, каталанского, французского, немецкого, польского, португальского, испанского и украинского.</li>
<li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
Изменения для русскоязычного модуля включают:
<li>Создано около 80 новых правил.</li>
<li>Усовершенствованы существующие грамматические правила.</li>
<li>Создано гибридное xml/Java правило «правописание «н/нн» в причастиях и прилагательных».</li>
<li>Добавлено Java правило «RussianWordCoherencyRule».</li>
<li>Обновлён встроенный словарь частей речи, улучшена система идентификаторов частей речи.</li>
<li>Переписаны правила для устранения грамматической неоднозначности.</li>
<li>Добавлены новые слова для орфографической проверки в независимую версию.</li>
</ul>
	
<p><strong>30.09.2016: </strong>Вышла версия 3.5 LanguageTool!</p>
<ul>
<li>Обновлены модули для проверки следующих языков: английского, русского, эсперанто, каталанского, французского, немецкого, польского, португальского, испанского и украинского.</li>
<li>Увеличена скорость проверки текста в независимой версии программы.</li>
<li>Обновлён словарь английского языка (en_GB, Великобритания) для проверки орфографии. Теперь используется кодировка UTF-8.</li>
<li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
Изменения для русскоязычного модуля включают:
<li>Создано более 100 новых правил.</li>
<li>Переписаны и улучшены существующие грамматические правила.</li>
<li>Добавлены новые слова для орфографической проверки.</li>
<li>Теперь программа понимает текст со знаками ударения.</li>
</ul>	
	
	
	
<p><strong>03.08.2016: </strong>Вышла версия расширения <a href="https://addons.mozilla.org/ru/firefox/addon/languagetool/">LanguageTool для FireFox48+</a>!</p>
Эта версия заменяет старое расширение LanguageToolFX.
<ul>
<li>Расширение полностью переписано с использованием технологии WebExtension.</li>
<li>Так как WebExtension в FireFox реализовано не полностью, то клавиши быстрой проверки пока не работают.</li>
</ul>

<p><strong>27.06.2016: </strong>Вышла версия 3.4 LanguageTool!</p>
<ul>
<li>Обновлены модули для проверки следующих языков: английского, русского, каталанского, французского, немецкого, греческого, польского, португальского, испанского и украинского.</li>
<li>Обновлён интерфейс независимой версии приложения.</li>
<li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
 Изменения для русскоязычного модуля включают:
<li>Улучшен и существенно дополнен словарь для проверки орфографии (в независимой версии).</li>
<li>Добавлено несколько новых правил.</li>
<li>Улучшены существующие правила.</li>
</ul>


<p><strong>28.03.2016: </strong>Вышла версия 3.3 LanguageTool!</p>
<ul>
Изменения для русскоязычного модуля включают:
<li>Добавлено 20 новых правил.</li>
<li>Улучшены существующие правила.</li>
<li>Для Java правил добавлены примеры.</li>
<li>Обновлён словарь для проверки орфографии (в независимой версии).</li>

Остальные изменения:
<li>В программу включён новый словарь немецкого языка для проверки орфографии (в независимой версии).</li>
<li>Обновлены модули для проверки следующих языков: английского, русского, немецкого, французского, эсперанто, украинского, датского, каталанского, португальского, греческого, польского.</li>
<li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
</ul>


<p><strong>10.03.2016: </strong> Появилась бета-версия LanguageTool для Android &mdash; LanguageTool proofreader!</p>

Установить <a href="https://play.google.com/store/apps/details?id=org.softcatala.corrector">LanguageTool proofreader (Корректор LanguageTool) для Android</a>.</li>
ОЧЕНЬ ВАЖНО: После установки программы зайдите в настройки Android: Settings -> Language Input -> Spell Checker (Настройки -> Языки ввода -> Проверка орфографии) и выберите "LanguageTool proofreader" (корректор LanguageTool).

<br>
<br>

 <a href="/ru/news">Остальные новости</a>


<h2>Нужна помощь?</h2>

<p><a href="http://myooo.ru/content/view/83/43/">Домашняя страничка расширения для OpenOffice.org/LibreOffice на русском языке</a></p>

<p><a href="/ru/issues">Список известных проблем</a></p>

<p>Задать вопросы и обсудить LaguageTool можно на <a href="http://forumooo.ru/index.php/topic,231.0.html">форуме forumooo.ru</a>,  
посвящённом работе в офисных пакетах LibreOffice и OpenOffice.</p>



<h2>Лицензия и исходный код</h2>

<p>LanguageTool свободно распространятся по лицензии <a href="http://www.gnu.org/licenses/old-licenses/lgpl-2.1">LGPL</a> версии 2.1 или новее.
Исходный код доступен <a href="https://github.com/languagetool-org/">на GitHub</a> через Git или SVN.
Содержимое этой домашней страницы доступно по лицензии <a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>.</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
