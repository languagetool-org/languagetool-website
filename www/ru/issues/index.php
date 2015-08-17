<!doctype html>
<html lang=ru>
<head>
<?php
$page = "other";
$title = "Известные проблемы LanguageTool и способы их устранения";
?>
<?php include("../../../include/header.php"); ?>
</head>
<body>
<?php include("../../../include/partials/nav.php"); ?>
<div id="textContent">
<h1><a name="commonproblems">Контрольный список при возникновении проблем</a></h1>
<ul>
<li>Если установка LanguageTool в LibreOffice/OpenOffice не вызвала ошибки, но необходимо проверить его работоспособность,
загрузите <strong><a href="/issues//languagetool-test.odt">тестовый документ</a></strong> и следуйте инструкциям, изложенным в нём.</li>
<li><strong>Для пользователей Mac:</strong> Для  LanguageTool необходима Java 7 или новее, которая доступна для Mac только в качестве 64-битной версии.
В связи с этим, необходимо использовать <strong>64-битную версию LibreOffice 4.2 или новее</strong> для работы LanguageTool на Mac.
<strong><em>Так же</em> необходимо установить '<a href="http://support.apple.com/kb/DL1572">Java для OS X</a>'</strong>,
дополнительно к Java&nbsp;7 или старше (Источник: <a href="https://bugs.freedesktop.org/show_bug.cgi?id=74877">#74877</a>).
<br/><span class="oldInformation">Старые версии LibreOffice и OpenOffice доступны только как 32-битные версии, что делает их несовместимыми с LanguageTool в 
качестве расширения на Mac. Способом решения проблемы является использование более старых версий, например
LanguageTool 2.2, который доступен в <a href="http://languagetool.org/download/">архиве загрузок</a>, и может быть использован для 32-битных версий
или для Java 6. LanguageTool 2.2 не требует обязательного наличия Java 7, но зато хорошо работает с Java 6.</span></li>
<li>LibreOffice 3.5 и новее поставляется со встроенной программой для проверки грамматики (LightProof), которая отключает LanguageTool для
английского и русского языков.
Используйте Options -> Language Settings -> Writing aids -> Edit... для отключения LightProof и включения LanguageTool для того языка,
с которым LanguageTool будет использоваться.</li>
<li>Убедитесь, что <a href="http://www.java.com/en/download/manual.jsp">Java 7 или новее от Oracle</a>  или IcedTea
установлена в вашей системе. Используйте 32-битную версию Java, если используете LanguageTool
в качестве расширения 32-битных версий LibreOffice  или OpenOffice.org. Для 64-битных версий  LibreOffice  или OpenOffice.org надо использовать 64-битную версию Java.
Версии Java не от Oracle могут не работать. При использовании
старых версий Java может появиться сообщение  <a href="../../../images/version-error.jpg">типа этого</a>.</li>
<li>Убедитесь, что корректная версия Java выбрана в LibreOffice (<em>Tools -&gt; Options -&gt; Advanced</em>) или OpenOffice.org
(<em>Tools -&gt; Options -&gt; Java</em>).</li>
<li>Необходимо перезапустить LibreOffice/OpenOffice.org, включая быстрый запуск,  после установки LanguageTool. Это требуется 
даже если не появляется сообщения об этом. (<a href="https://bugs.freedesktop.org/show_bug.cgi?id=46279">#46279</a>, <a href="http://issues.apache.org/ooo/show_bug.cgi?id=88692">#88692</a>)</li>
<li>Если LanguageTool не запускается и не появляется сообщение об ошибке,
проверьте, включено ли расширение в менеджере расширений
(в меню <em>Tools -&gt; Extension Manager</em>).</li>
</ul>
<h2>Общие проблемы с интеграцией в LibreOffice/OpenOffice.org</h2>
<ul>
<li>Пользователям LanguageTool 2.9: Если возникает ошибка <strong>osl::Thread::Create failed</strong>, пожалуйста, обновите LanguageTool до версии 2.9.1 (<a href="https://bugs.documentfoundation.org/show_bug.cgi?id=90740">#90740</a>)</li>
<li>Для использования совместно с <strong>32-битной версией LibreOffice/OpenOffice</strong>, необходимо использовать 32-битную версию Java, иначе LanguageTool не будет
работать. Для использования совместно с <strong>64-битной версией LibreOffice/OpenOffice</strong>, необходимо использовать 64-битную версию Java </li>
<li>Если появляется сообщение <strong>"Could not create Java implementation loader"</strong>, можно воспользоваться
<a href="http://www.zotero.org/support/word_processor_plugin_troubleshooting#could_not_create_java_implementation_loader">этими советами</a>.
<strong>Примечание: </strong> Если возникают проблемы на 64-разрядной Windows,
то они могут быть вызваны использованием 64-битной версии Java. Используйте 32-битную версию Java, если используете LanguageTool
в качестве расширения 32-битных версий LibreOffice  или OpenOffice.org. Для 64-битных версий  LibreOffice  или OpenOffice.org надо использовать 64-битную версию Java.
</li>
<li><strong>На Ubuntu</strong> установите пакеты <tt>libreoffice-java-common</tt> or <tt>openoffice.org-java-common</tt> .
Это поможет устранить проблему, проявляющуюся в возникновении сообщения об ошибке "NoClassDefFoundError" во время установки
(<a href="../../../images/class_not_found.png">скриншот</a>).</li>
<li><strong>На Ubuntu</strong>, если появляется сообщение <tt>Exception in thread "Thread-402" java.awt.HeadlessException</tt> в LibreOffice/OpenOffice,
смотри <a href="http://stackoverflow.com/questions/5362512/unable-to-run-java-gui-programs-with-ubuntu/5362572#5362572">this stackoverflow answer</a>.
Примечание. Это сообщение не появляется в виде диалогового окна, а выводится только при запуске из командной строки. Поэтому, чтобы его увидеть, необходимо запустить LibreOffice/OpenOffice из окна терминала.</li>
<li>Если возникает сообщение <strong>"This media-type is not supported: application/vnd.sun.star.package-bundle2.0.00"</strong> во время установки,необходимо выполнить
<a href="http://wiki.forumooo.ru/wiki/Profile">очистку (удаление) пользовательского профиля  OpenOffice</a>.</li>
<li>Если появляется сообщение <strong>Failed to load rules for language ... Caused by java.lang.ClassNotFoundException: Loading rules failed: Duplicate class definition</strong>:
В некоторых случаях LanguageTool может быть установлен дважды в качестве расширения OpenOffice.org. Можно удалить каталоги, которые перечислены
в сообщении об ошибке (предварительно сделав резервную копию). (Эти каталоги могут иметь произвольные имена типа "EE31.tmp_" или подобные.  Необходимо закрыть OpenOffice.org
перед удалением каталога).</li>
<li><strong>Пункты меню в LibreOffice/OpenOffice.org могут быть смешаны</strong> когда оба расширения <a href="http://open.afterthedeadline.com/">After the Deadline</a>
и LanguageTool установлены. <a href="http://www.oooforum.org/forum/viewtopic.phtml?t=122665#428635">Макрос</a>, представленный здесь,
поможет в решении этой проблемы. Эта ошибка отражена в <a href="http://openatd.trac.wordpress.org/ticket/215">ticket #215 at After the Deadline</a>.</li>
<li>Если при запуске LibreOffice/OpenOffice из командной строки появляется сообщение <strong>NoClassDefFoundError</strong>, убедитесь,
что запуск LibreOffice/OpenOffice происходит <em>НЕ</em> из каталога установки LanguageTool.</li>
<li class="oldInformation">При использовании старых версий LanguageTool и/или OpenOffice.org, могут возникать следующие проблемы:
<ul style="margin-top: 8px">
<li>Зависание при старте: на слабых машинах LanguageTool может вызывать зависание LibreOffice или OpenOffice.org при запуске на секунды или минуту.
Эта ошибка исправлена в LibreOffice 3.5.4 и Apache OpenOffice 3.4.1, но все более старые версии содержат эту ошибку,
и мы настоятельно рекомендуем использовать как минимум эти версии. <a href="http://sourceforge.net/p/languagetool/bugs/66/">Описание ошибки</a>.
</li>
</ul>
</li>
</ul>
<h2>Известные ограничения</h2>
<ul>
<li>Некоторые ошибки не определяются: LanguageTool использует правила для поиска ошибок, то есть может найти только те ошибки
которые описаны в правилах. Подробнее о <b><a href="http://wiki.languagetool.org/development-overview#toc0">создании правил</a></b> и
<b><a href="http://wiki.languagetool.org/make-languagetool-better">расширении возможностей LanguageTool</a></b> путём создания новых правил и включения их в проект.</li>

<li>LanguageTool не может корректно работать с документами, которые содержат историю изменений
(<a href="https://bugs.freedesktop.org/show_bug.cgi?id=36540">LibreOffice #36540</a>, <a href="https://issues.apache.org/ooo/show_bug.cgi?id=92013">OO #92013</a>)
</li>
</ul>
<h2>Всё ещё нужна помощь?</h2>
<p>Обсудить работу программы можно на форуме <a href="http://forumooo.ru">forumooo.ru</a>, посвящённом работе в офисных пакетах LibreOffice и OpenOffice.org.
В обращении укажите, какую версию LanguageTool, LibreOffice/OpenOffice.org и операционной системы используете.</p>
</div>
<?php
include("../../../include/footer.php");
?>
</body>
</html>
