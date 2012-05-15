<?php
$page = "ru";
$title = "LanguageTool";
$title2 = "Программа для проверки грамматики и стиля";
$lastmod = "2012-05-15 16:51:00 CET";
$enable_fancybox = 1;
include("../../include/header.php");
?>

<a title="LanguageTool работает в качестве расширения LibreOffice 3.3" class="fancyboxImage"
   href="/ru/screenshots/screenshot-lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="/ru/screenshots/screenshot-lo3-very_small.png" alt="Screenshot of LanguageTool"/></a>


<p class="firstpara">LanguageTool - это <a href="http://ru.wikipedia.org/wiki/Свободное_программное_обеспечение" target="_blank">свободное программное обеспечение</a> для проверки грамматики и стиля.

<h2>Функциональность</h2>

В состав LanguageTool входит <a href="http://community.languagetool.org/rule/list?lang=ru">около 150 правил</a> для проверки русскоязычных текстов.<br/><br/>
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
    <li>Прочие правила (настройки)
        <ul>
        </ul>
    </li>

</ul>

<p>Программа для большинства найденных грамматических ошибок предлагает варианты их исправления.
</p>
<p>LanguageTool не предназначен для проверки орфографии. Но в группе настроек "Стиль" для русского языка есть правило для поиска  слов, которых нет в словаре.
</p>
<h2>Проверить текст</h2>

<form name="checkform" action="http://community.languagetool.org" method="post">
    <?php
    $demoText = "Вставьте ваш текст сюда .. или проверьте этот текст.";
    ?>
    <textarea onfocus="javascript: if(document.checkform.text.value == '<?php print $demoText ?>') { document.checkform.text.value='' } " 
        style="width:100%; max-width:800px;height:100px" name="text"><?php print $demoText ?></textarea>
    <div style="margin-top:4px">
        <input type="submit" name="_action_checkText" value="Проверить текст"/>
        Язык: <select name="lang" id="lang" >
        
            <option value="auto">автоматически определить</option>
            <option value="ast" >Астурийский</option>
            <option value="be" >Белорусский</option>
            <option value="br" >Бретонский</option>
            <option value="ca" >Каталонский</option>
            <option value="zh" >Китайский</option>
            <option value="da" >Датский</option>
            <option value="nl" >Нидерландский</option>
            <option value="en" >Английский</option>
            
            <option value="eo" >Эсперанто</option>
            <option value="fr" >Французский</option>
            <option value="gl" >Галисийский</option>
            <option value="de" >Немецкий</option>
            <option value="is" >Исландский</option>
            <option value="it" >Итальянский</option>
            <option value="km" >Кхмерский</option>
            <option value="lt" >Литовский</option>
            <option value="ml" >Малайский</option>
            
            <option value="pl" >Польский</option>
            <option value="ro" >Румынский</option>
            <option value="ru" >Русский</option>
            <option value="sk" >Словацкий</option>
            <option value="sl" >Словенский</option>
            <option value="es" >Испанский</option>
            <option value="sv" >Шведский</option>
            <option value="tl" >Тагалог</option>
            <option value="uk" >Украинский</option>
        
        </select>
    </div>
</form>



<h2>Демонстрация возможностей LanguageTool</h2>

<p><a href="http://community.languagetool.org/?lang=ru"/>Здесь<a> можно запустить  LanguageTool непосредственно в браузере.
</p>


<h2>Скачать</h2>
<div class="downloadSection">
	<div id="downloadButton">
        <a style="display: block" href="../download/LanguageTool-1.7.oxt"><span
           class="languagetool">LanguageTool</span><br/><span class="download">Скачать!<br/>
        </span><span class="version">Версия 1.7 (29&nbsp;MB)</span></a>
	</div>

<p>LanguageTool можно скачать и <a href="../">с главной страницы</a> сайта.</p>

<p>Доступны 
<?=show_link("ежедневные нетестированные сборки", "../download/snapshots/", 0) ?>
 (<?=show_link("Список изменений", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/CHANGES.txt", 0) ?>).
</p>


<h2>Установка для LibreOffice/OpenOffice.org</h2>
<ul>
    <li>Открыть LibreOffice/OpenOffice.Org. </li> 
    <li>Выбрать Сервис - > Управление расширениями - > Добавить. </li> 
    <li>Выбрать файл с расширением.</li> 
    <li>Нажать «ОК».</li>
    <li>Обязательно перезапустить LibreOffice/OpenOffice.Org (включая и быстрый запуск).</li>
</ul>
<p>Системные требования: как минимум OpenOffice.org 3.0.1 (или LibreOffice), Java 1.6.0_04 или новее. 
</p>
<p>LibreOffice 3.5 уже включает в себя лёгкую систему проверки грамматики (LightProof), которая блокирует работу LanguageTool для английского и русского языков.
Отключить LightProof и включить LanguageTool для указанных языков можно через меню   Сервис -> Параметры -> LibreOffice -> Настройки языка -> Лингвистика -> Доступные языковые модули -> Правка ...
Необходимо поставить галочку для LanguageTool и убрать для LightProof. 
</p>


<h2>Использование в качестве независимого приложения</h2>
Системные требования: Java 1.6.0_04 или новее от Sun или Oracle.
<a title="LanguageTool работает как независимое графическое приложение" class="fancyboxImage"
   href="/ru/screenshots/LT-GUI-ru-1.8-dev.png"><img style="margin-left: 15px" width="200" height="156" align="right"
   src="/ru/screenshots/LT-GUI-ru-1.8-dev-very_small.png" alt="Screenshot of LanguageToolGUI"/></a>

<ul>
    <li>Скачать программу.</li>
    <li>Переименовать расширение файла из *.oxt в *.zip.</li>
    <li>Распаковать полученный архив.</li>
    <li>Запустить программу LanguageToolGUI.jar двойным щелчком мышки или командой java -jar LanguageToolGUI.jar</li>
</ul>

LanguageTool можно использовать для проверки грамматики в любом тексте, который предварительно скопирован в буфер обмена.
Вызывается проверка командой меню: "Файл -> Проверить текст в буфере обмена". 
Для удобства использования LanguageTool можно свернуть в трей (Команда меню: "Файл -> Спрятать в трей"). 
Щелчок мышкой по значку  LanguageTool в трее открывает меню. Проверка текста вызывается командой "Проверить текст в буфере обмена". 


<h2>Использование в качестве консольного приложения</h2>
Системные требования: Java 1.6.0_04 или новее от Sun или Oracle.
<ul>
    <li>Скачать программу.</li>
    <li>Переименовать расширение файла из *.oxt в *.zip.</li>
    <li>Распаковать полученный архив.</li>
    <li>Подготовить файл Example.txt с текстом для проверки.</li>
    <li>Запустить программу командой java -jar LanguageTool.jar -l ru Example.txt</li>
</ul>
<a href="http://languagetool.wikidot.com/command-line-options">Ключи командной строки консольного приложения</a>


<h2>Примеры интеграции</h2>
<ul>
    <li> <a href="../usage">Примеры программного кода для интеграции с другими программами</a></li>
</ul>


<p class="firstpara"><strong>Интеграция LanguageTool с приложениями</strong>:</p>

<ul style="list-style:none"><a href="http://www.languagetool.org/webstart/web/LanguageTool.jnlp">
	<li><?=show_link("LanguageTool для vim", "http://www.vim.org/scripts/script.php?script_id=3223", 1) ?></li>
	<li><?=show_link("LanguageTool для LyX", "http://wiki.lyx.org/Tools/LyX-GrammarChecker", 1) ?></li>
	<li><?=show_link("LanguageTool плагин для OmegaT", "https://sourceforge.net/projects/omegat-plugins/files/OmegaT-LanguageTool/", 1)?>
		добавляет проверку грамматики в систему автоматизированных переводов OmegaT с открытыми исходными кодами.</li>
	<li><?=show_link("LanguageTool и CheckMate", "http://www.opentag.com/okapi/wiki/index.php?title=CheckMate", 1)?> используется как сервер для расширения возможностей контроля качества переводов.</li>
	<li><?=show_link("LanguageTool для Thunderbird", "https://addons.mozilla.org/en-US/thunderbird/addon/14781", 1)?></li>
</ul>


<h2>Контакты</h2>
<!-- TODO:  -->

<p>Обсудить работу программы можно на <a href="http://forumooo.ru/index.php/topic,231.0.html">форуме forumooo.ru</a>,  
посвящённом работе в офисных пакетах LibreOffice и OpenOffice.org</p>



<h2>Нужна помощь?</h2>

<p><a href="http://myooo.ru/content/view/83/43/">Домашняя страничка расширения для OpenOffice.org/LibreOffice на русском языке.</a></p>

<p><?=show_link("Список известных проблем", "../issues", 0)?>.</p>


<h2>Лицензия и исходный код</h2>

<p>LanguageTool свободно распространятся по лицензии <?=show_link("LGPL", "http://www.fsf.org/licensing/licenses/lgpl.html#SEC1", 0)?>.
Исходный код доступен <?=show_link("на Sourceforge", "http://sourceforge.net/projects/languagetool/", 1) ?> через SVN.
Содержимое этой домашней страницы доступно по лицензии <?=show_link("CC BY-SA 3.0", "http://creativecommons.org/licenses/by-sa/3.0/", 1) ?>.</p>

<div style="height:50px"></div>


<?php
include("../../include/footer.php");
?>
