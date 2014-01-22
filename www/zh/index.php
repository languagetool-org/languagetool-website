<!doctype html>
<html lang=zh>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "zh";

    // ------------- TRANSLATIONS START HERE -------------

    $title = "LanguageTool 文体和语法检测器";

    $checkSubmitButtonValue = "检测文本";
    //$checkSubmitButtonTitle = "检测文本";
    $toggleFullscreenMode = "toggle fullscreen mode";

    $introText1 = "<strong>LanguageTool</strong>是一个开源的文体和语法校正的软件，包括对英语、中文、法语、德语、波兰语、荷兰语、罗马尼亚语等很多 <a href='/languages/'>其他语言</a>的支持。";
    $introText2 = "";

    $downloadHeadline = "Download";
    $downloadRequiresJava = "Requires Java {version}";
    //$downloadTitle = "...";
    //$downloadTitleStandAlone = "...";
    //$downloadLabelFx = "...";
    $checklistText = "Please see <a href='/issues/'>our checklist</a> if you experience problems.";
    $otherDownloadsText = "Download <a href='/download/'>old releases</a> or <a href='/download/snapshots/?C=M;O=D'>daily builds</a>.";
    $webstartText = "Start <a href='/webstart/web/LanguageTool.jnlp'>with Java WebStart</a>.";

    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

<p><strong>LanguageTool是一个开源的文体和语法校正的软件，包括对英语、中文、法语、德语、波兰语、荷兰语、罗马尼亚语等很多 <a href="../languages/">其他语言</a>的支持。</strong>
你可以认为LanguageTool是一个能够检测出简单拼写错误检查器所无法检测的文本错误软件，例如：<em>二个人/两个人</em>这样的量词错误. 它也能发现一些语法错误，但不包括拼写检查。</p>

<p>LanguageTool将错误规则定义在特定语言的配置文件里面从而查找错误。还可以编写Java规则来检测更为复杂的错误。</p>

<h2 style="margin-top: 40px">在线试用</h2>

<p><a href="../usage/">在LibreOffice/OpenOffice.org中使用，或者作为独立应用程序使用，或者嵌入到其他系统中使用</a>，或者在这里使用：</p>

<p style="margin-top: 10px"><strong>使用WebStart免安装试用LanguageTool。</strong>
需要 <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;7</a>及以上版本：<br />
<strong><a href="../webstart/web/LanguageTool.jnlp">运行LanguageTool (29&nbsp;MB)</a></strong></p>


<h2>新闻</h2>

<p><strong>2012-03-25：</strong>LanguageTool 1.7版本发布。变化包括：</p>
<ul>
    <li><a href="../changes/V_1_6_to_V_1_7/">规则更新</a>若干语言（法语、英语、 布列塔尼语、俄语、 世界语和德语)</li>
    <li>修正了几个程序小bug</li>
    <li>详细变化内容列表：<a href="../download/CHANGES.txt">Changelog</a></li>
</ul>

<p><strong>2012-02-04：</strong>看看我们的特定语言的新页面：<a href="../de/">德语</a>, <a href="../ru/">俄语</a>, and <a href="../eo/">世界语</a></p>

<p><strong>2011-12-31：</strong>LanguageTool 1.6版本发布。变化包括：</p>
<ul>
    <li><a href="../changes/V_1_5_to_V_1_6/">规则更新</a>若干语言（中文、法语和布列塔尼语等)</li>
    <li>将Java包从de.danielnaber.languagetool.*更名为org.languagetool.*</li>
    <li>详细变化内容列表：<a href="../download/CHANGES.txt">Changelog</a></li>
</ul>

<p><strong>2011-11-18：</strong>我们现在提供<a href="http://community.languagetool.org/wikiCheck/index">Wikicheck，一个使用LanguageTool检测维基百科页面的新服务</a></p>

<a href="http://twitter.com/languagetoolorg">在twitter上</a> 跟踪我们的最新消息。
在<a href="../news/">新闻档案</a>中看以前的新闻。


<h2>许可证和源代码</h2>

<p>LanguageTool可在<a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>许可证下免费使用。
源代码可<a href="http://sourceforge.net/projects/languagetool/">在Sourceforge上</a>通过SVN获取。
本网页提供内容遵从<a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>许可证。</p>

<h2>LanguageTool中文支持研究组</h2>
<p>研究组负责人：<a href="mailto:jpz6311whu@bnuz.edu.cn">姜赢</a>（博士），北京师范大学珠海分校管理学院讲师</p>
<p>本网页由研究组成员（信息管理与信息系统专业学生）<b>林耿锐</b>、<b>吕洋</b>、<b>刘轩伟</b>、<b>闫洪滔</b>和<b>程文婷</b>更新和翻译。</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
