<?php
$page = "ru";
$title = "LanguageTool";
$title2 = "Программа для проверки грамматики и стиля";
$lastmod = "2013-09-02 19:00:00 CET";
$enable_textcheck = 1;
$enable_fancybox = 1;
include("../../include/header.php");
?>

<a title="LanguageTool работает в качестве расширения LibreOffice 3.3" class="fancyboxImage"
   href="/ru/screenshots/screenshot-lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="/ru/screenshots/screenshot-lo3-very_small.png" alt="Screenshot of LanguageTool"/></a>


<p class="firstpara">LanguageTool - это <a href="http://ru.wikipedia.org/wiki/Свободное_программное_обеспечение" target="_blank">свободное программное обеспечение</a> для проверки грамматики и стиля.

<h2>Функциональность</h2>

В состав LanguageTool входит <a href="http://community.languagetool.org/rule/list?lang=ru"> 227 правил</a> для проверки русскоязычных текстов.<br/><br/>
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
    <li>Прочие правила (настройки)
        <ul>
        </ul>
    </li>
    <li>Опечатка (проверка орфографии)
        <ul>
        </ul>
    </li>
</ul>

<p>Программа для большинства найденных грамматических ошибок предлагает варианты их исправления.
</p>
<p>В независимую версию программы дополнительно включена проверка орфографии с коррекцией ошибок.
</p>
<h2>Проверить текст</h2>

<?php
$checkSubmitButtonValue = "Проверить текст";
$showLanguageBox = 0;
$checkDefaultLang = "ru";
$checkDefaultText = "Вставьте ваш текст сюда .. или проверьте этот текстт.";
include("../../include/checkform.php");
?>

<h2>Демонстрация возможностей LanguageTool</h2>

<p><a href="http://community.languagetool.org/?lang=ru"/>Здесь</a> можно запустить  LanguageTool непосредственно в браузере.
</p>


<h2>Скачать</h2>
       <div class="downloadSection">
    <table width="100%">
      <tr>
        <td>
           <?php     
           $downloadTitle = "Скачать LanguageTool";
           $downloadLabel = "для LibreOffice/OpenOffice";
           $downloadVersionLabel = "Версия";
           $downloadPath = "/download"; 
           include("../../include/download.php");
           ?>
        </td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
           <?php         
           $downloadTitleStandAlone = "Скачать  LanguageTool";
           $downloadLabelStandAlone = "независимая версия";
           $downloadVersionLabelStandAlone = "Версия";                
           $downloadPathStandAlone  = "/download";
           include("../../include/downloadStandAlone.php");
           ?>
        </td>
      </tr>
      </table>
        
</div>

<?php
          $downloadTitleFx = "Скачать  LanguageToolFx";
          $downloadLabelFx = "Расширение для Firefox"; 
          include("../../include/downloadFx.php");
?>

<p>LanguageTool можно скачать и <a href="../">с главной страницы</a> сайта.</p>

<p>Доступны 
<?=show_link("ежедневные нетестированные сборки", "../download/snapshots/", 0) ?>
 (<?=show_link("Список изменений", "http://www.languagetool.org/download/CHANGES.txt", 0) ?>).
</p>


<h2>Установка для LibreOffice/OpenOffice.org</h2>
<ul>
    <li>Открыть LibreOffice/OpenOffice.Org. </li> 
    <li>Выбрать Сервис - > Управление расширениями - > Добавить. </li> 
    <li>Выбрать файл с расширением.</li> 
    <li>Нажать «ОК».</li>
    <li>Обязательно перезапустить LibreOffice/OpenOffice.Org (включая и быстрый запуск).</li>
</ul>
<p>Системные требования: как минимум OpenOffice.org 3.0.1 (или <a href="http://ru.libreoffice.org/">LibreOffice</a>), <a href="http://www.java.com/ru/download/manual.jsp">Java 1.6.0_04 или новее</a>. 
</p>
<p>Рекомендуется как минимум Apache OpenOffice 3.4.1 (или LibreOffice 3.5.4). 
</p>
<p>LibreOffice 3.5 и старше уже включает в себя лёгкую систему проверки грамматики (LightProof), которая блокирует работу LanguageTool для английского и русского языков.
Отключить LightProof и включить LanguageTool для указанных языков можно через меню   Сервис -> Параметры -> LibreOffice -> Настройки языка -> Лингвистика -> Доступные языковые модули -> Правка ...
Необходимо поставить галочку для LanguageTool и убрать для LightProof. 
</p>


<h2>Использование в качестве независимого приложения</h2>
Системные требования:   <a href="http://www.java.com/ru/download/manual.jsp">Java 1.6.0_04 или новее </a> от Sun или Oracle.
<a title="LanguageTool 1.9 работает как независимое графическое приложение" class="fancyboxImage"
   href="/ru/screenshots/LT-GUI-ru-1.9.png"><img style="margin-left: 15px" width="200" height="208" align="right"
   src="/ru/screenshots/LT-GUI-ru-1.9-very_small.png" alt="Screenshot of LanguageToolGUI"/></a>

<ul>
    <li>Скачать программу.</li>
    <li>Распаковать полученный архив.</li>
    <li>Запустить программу languagetool-standalone.jar двойным щелчком мышки или командой java -jar languagetool-standalone.jar</li>
</ul>

LanguageTool можно использовать для проверки грамматики в любом тексте, который предварительно скопирован в буфер обмена.
Вызывается проверка командой меню: "Файл -> Проверить текст в буфере обмена". 
Для удобства использования LanguageTool можно свернуть в трей (Команда меню: "Файл -> Спрятать в трей"). 
Щелчок мышкой по значку  LanguageTool в трее открывает меню. Проверка текста вызывается командой "Проверить текст в буфере обмена". 


<h2>Использование в качестве консольного приложения</h2>
Системные требования:  <a href="http://www.java.com/ru/download/manual.jsp">Java 1.6.0_04 или новее</a> от Sun или Oracle.
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


<p class="firstpara"><strong>Интеграция LanguageTool с приложениями</strong>:</p>

<ul style="list-style:none"><a href="http://www.languagetool.org/webstart/web/LanguageTool.jnlp">
	<li><?=show_link("LanguageTool для vim", "http://www.vim.org/scripts/script.php?script_id=3223", 1) ?></li>
	<li><?=show_link("LanguageTool для LyX", "http://wiki.lyx.org/Tools/LyX-GrammarChecker", 1) ?></li>
	<li><?=show_link("LanguageTool плагин для OmegaT", "https://sourceforge.net/projects/omegat-plugins/files/OmegaT-LanguageTool/", 1)?>
		добавляет проверку грамматики в систему автоматизированных переводов OmegaT с открытыми исходными кодами.</li>
	<li><?=show_link("LanguageTool и CheckMate", "http://www.opentag.com/okapi/wiki/index.php?title=CheckMate", 1)?> используется как сервер для расширения возможностей контроля качества переводов.</li>
	<li><?=show_link("LanguageTool для Thunderbird", "https://addons.mozilla.org/en-US/thunderbird/addon/14781", 1)?></li>
        <li><?=show_link("LanguageToolFx для Firefox", "https://addons.mozilla.org/firefox/addon/languagetoolfx/", 1)?></li>
</ul>


<h2>Контакты</h2>
<!-- TODO:  -->

<p>Обсудить работу программы можно на <a href="http://forumooo.ru/index.php/topic,231.0.html">форуме forumooo.ru</a>,  
посвящённом работе в офисных пакетах LibreOffice и OpenOffice.org</p>

<h2>Новости</h2>

<p><strong>30.06.2013:</strong> Вышла версия LanguageTool 2.2. Для русского языка  изменения включают:</p>
<ul>
  <li>Созданы новые правила для проверки стиля.</li>
  <li>Добавлено несколько новых грамматических правил.</li>
  <li>Выполнена оптимизация существующих правил.</li>
  <li>Созданы правила для поиска межъязыковых омонимов и ошибок переводчика (по одному правилу).</li>
  <li>Дополнены правила деления текста на предложения.</li>
</ul>
<p>Остальные изменения:</p>
<ul>
    <li>Обновлены и доработаны правила для французского, каталанского, немецкого, португальского, русского, бретонского, эсперанто и украинского языков.</li>       
    <li>Внесены дополнения и улучшения в основной код программы.</li>
    <li>Основные <a href="http://languagetool.org/changes/languagetool-2.1_to_languagetool-2.2/">изменения в xml-правилах.</a></li>
    <li>Полный <a href="http://languagetool.org/download/CHANGES.txt">список изменений</a></li>
</ul>
<p>Ещё вышла версия 0.3 <a href="https://addons.mozilla.org/ru/firefox/addon/languagetoolfx/">LanguageToolFX</a> - расширения Mozilla FireFox для проверки грамматики с помощью LanguageTool 2.2.</p>

<p><strong>31.03.2013:</strong> Вышла версия LanguageTool 2.1. Для русского языка  изменения включают:</p>
<ul>
  <li>Добавлено несколько новых грамматических правил.</li>
  <li>Выполнена оптимизация существующих правил.</li>
  <li>Исправлена работа Java-правила "Предложение должно начинаться с большой буквы".</li>
</ul>
<p>Остальные изменения:</p>
<ul>
    <li>Обновлены и доработаны правила для  английского, французского, немецкого, португальского, польского, русского, бретонского, эсперанто и итальянского языков.</li>       
    <li>Внесено много дополнений и улучшений в основной код программы.</li>
    <li>Основные <a href="http://languagetool.org/changes/V_2_0_to_languagetool-2.1/">изменения в xml-правилах.</a></li>
    <li>Теперь для разработки программы используется Apache Maven. Это позволило разделить программу на модули.</li>
</ul>


<p><strong>30.12.2012:</strong> Вышла версия LanguageTool 2.0. Для русского языка  изменения включают:</p>
<ul>
  <li>Добавлено 8 новых грамматических правил.</li>
  <li>Выполнена оптимизация существующих правил</li>
  <li>Обновлена и исправлена локализация интерфейса программы.</li>
  <li>Исправлены некоторые ошибки в русском словаре и алгоритме определения частей речи.</li>
</ul>
<p>Остальные изменения:</p>
<ul>
    <li>Исправлено Java-правило "Предложение должно начинаться с большой буквы".</li>
    <li>Встроенный Http-сервер теперь может быть запущен из контекстного меню, если LT cвернут в значок в системном трее</li>
    <li>Теперь значок в сисемном трее отображается корректно при размере места для значка 16х16 пикселей.</li>
    <li>Обновлены и доработаны правила для  английского, испанского, французского, немецкого, датского, каталанского, китайского,  бретонского, португальского, эсперанто и украинского языков.</li>   
    <li>Внесено много дополнений и улучшений в основной код программы.</li>
    <li>Основные <a href="http://languagetool.org/changes/V_1_9_to_V_2_0/">изменения в xml-правилах.</a></li>
</ul>



<p><strong>30.09.2012:</strong> Вышла версия LanguageTool 1.9. Для русского языка  изменения включают:</p>
<ul>
  <li>Добавлено несколько новых грамматических правил.</li>
  <li>Выполнена оптимизация существующих правил</li>
  <li>Обновлена и исправлена локализация интерфейса программы.</li>
</ul>
<p>Остальные изменения:</p>
<ul>
    <li>Добавлена поддержка японского языка (20 правил).</li>
    <li>Обновлены и доработаны правила для немецкого, английского, датского, каталанского, китайского, французского, бретонского, португальского, эсперанто.</li>   
    <li>Внесено много дополнений и улучшений в основной код программы.</li>
</ul>


<p><strong>30.06.2012:</strong> Вышла версия LanguageTool 1.8. Для русского языка  изменения включают:</p>
<ul>
  <li>Проверка орфографии (не используется в версии для LibreOffice/OpenOffice)</li>
  <li>Проведена работа по улучшению существующих правил</li>
  <li>В LibreOffice 3.5 для некоторых правил теперь доступно online описание ошибок.</li>
  <li>Добавлено правило по поиску повторов слов в предложении (отключено в начальных настройках)</li>

</ul>
<p>Остальные изменения:</p>
<ul>
    <li>Поддержка вариантов языков: британский английский, американский английский, ...</li>
    <li>Устранение ошибок</li>   
    <li>Начальная поддержка для греческого и португальского языков.</li>
    <li>Внесено много дополнений и улучшений в грамматические правила для языков: немецкого, английского, каталанского, итальянского, французского, бретонского, польского, эсперанто.</li>
    <li>Проверка орфографии (не используется в версии для LibreOffice/OpenOffice)</li>
</ul>


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
