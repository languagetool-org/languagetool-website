<?php
$page = "zh";
$title = "LanguageTool";
$title2 = "文体和语法检测器";
$lastmod = "2012-04-27 20:00:00 CET";
$enable_fancybox = 1;
include("../../include/header.php");
?>

<p class="firstpara"><strong>LanguageTool是一个开源的文体和语法校正的软件，包括对英语、中文、法语、德语、波兰语、荷兰语、罗马尼亚语等很多 <?=show_link("其他语言", "../languages/", 0) ?>的支持。</strong>
你可以认为LanguageTool是一个能够检测出简单拼写错误检查器所无法检测的文本错误软件，例如：<em>二个人/两个人</em>这样的量词错误. 它也能发现一些语法错误，但不包括拼写检查。</p>

<p>LanguageTool将错误规则定义在特定语言的配置文件里面从而查找错误。还可以编写Java规则来检测更为复杂的错误。</p>

<h2 style="margin-top: 40px">在线试用</h2>

<p><?=show_link("在LibreOffice/OpenOffice.org中使用，或者作为独立应用程序使用，或者嵌入到其他系统中使用", "../usage/", 0)?>，或者在这里使用：</p>

<?php
$checkSubmitButtonValue = "检测文本";
$showLanguageBox = 1;
$checkDefaultLang = "zh";
$checkDefaultText = "将文本粘贴在此，或者检测以下文本：我和她去看了二部电影。";
include("../../include/checkform.php");
?>

<p><strong>使用WebStart免安装试用LanguageTool。</strong>
需要 <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?>及以上版本：<br />
<strong><?=show_link("运行LanguageTool (29&nbsp;MB)", "../webstart/web/LanguageTool.jnlp", 0) ?></strong></p>


<h2>下载</h2>

<div class="downloadSection">
	<div id="downloadButton">
        <?php
        $downloadPath = "../download";
        include("../../include/download.php");
        ?>
	</div>
	<ul>
		<li>需要 <?=show_link("Java&nbsp;6", "http://www.java.com/en/download/manual.jsp", 0)?>及以上版本。</li>
        <li>在LibreOffice/OpenOffice.org中安装方法：<em>Tools -&gt; Extension Manager -&gt; Add...</em>或者查看 <?=show_link("其他的方法来使用LanguageTool", "../usage/", 0)?>。</li>
        <li>在安装这个插件之后<strong>重启OpenOffice.org/LibreOffice</strong>。</li>
        <li>如果你正在使用LibreOffice 3.5并且你想检测中文文本:
  			使用<em>Options -> Language Settings -> Writing Aids -> Edit...</em>来关闭LightProof并启动LanguageTool的中文检测功能。</li>
        <li>如果有问题，请查看<?=show_link("常见问题列表", "../issues", 0)?>。</li>
		<li>请在<?=show_link("我们的论坛", "../forum", 0)?>或者
          <?=show_link("Sourceforge bug tracker", "http://sourceforge.net/tracker/?group_id=110216&amp;atid=655717", 0)?>中报告程序bug。</li>
	</ul>
</div>

<p>未经测试的当前版本的daily builds可在
<?=show_link("快照目录", "download/snapshots/", 0) ?>
 (<?=show_link("CHANGES.txt", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/CHANGES.txt", 0) ?>)中获得。
 旧版本仍然可以在<?=show_link("下载目录", "../download/", 0) ?>中下载。</p>

<h2>新闻</h2>

<p><strong>2012-03-25：</strong>LanguageTool 1.7版本发布。变化包括：</p>
<ul>
    <li><?=show_link("规则更新", "../changes/V_1_6_to_V_1_7/", 0) ?>若干语言（法语、英语、 布列塔尼语、俄语、 世界语和德语)</li>
    <li>修正了几个程序小bug</li>
    <li>详细变化内容列表：<?=show_link("Changelog", "../download/CHANGES.txt", 0) ?></li>
</ul>

<p><strong>2012-02-04：</strong>看看我们的特定语言的新页面：<?=show_link("德语", "../de/", 0) ?>, <?=show_link("俄语", "../ru/", 0) ?>, and <?=show_link("世界语", "../eo/", 0) ?></p>

<p><strong>2011-12-31：</strong>LanguageTool 1.6版本发布。变化包括：</p>
<ul>
    <li><?=show_link("规则更新", "../changes/V_1_5_to_V_1_6/", 0) ?>若干语言（中文、法语和布列塔尼语等)</li>
    <li>将Java包从de.danielnaber.languagetool.*更名为org.languagetool.*</li>
    <li>详细变化内容列表：<?=show_link("Changelog", "../download/CHANGES.txt", 0) ?></li>
</ul>

<p><strong>2011-11-18：</strong>我们现在提供<?=show_link("Wikicheck，一个使用LanguageTool检测维基百科页面的新服务", "http://community.languagetool.org/wikiCheck/index", 0)?></p>

<?=show_link("在twitter上", "http://twitter.com/languagetoolorg", 0) ?>（以及 <?=show_link("在RSS上", "http://api.twitter.com/1/statuses/user_timeline.rss?screen_name=languagetoolorg", 0) ?>）跟踪我们的最新消息。
在<?=show_link("新闻档案", "../news/", 0) ?>中看以前的新闻。


<h2>许可证和源代码</h2>

<p>LanguageTool可在<?=show_link("LGPL", "http://www.fsf.org/licensing/licenses/lgpl.html#SEC1", 0)?>许可证下免费使用。
源代码可<?=show_link("在Sourceforge上", "http://sourceforge.net/projects/languagetool/", 0) ?>通过SVN获取。
本网页提供内容遵从<?=show_link("CC BY-SA 3.0", "http://creativecommons.org/licenses/by-sa/3.0/", 0) ?>许可证。</p>

<h2>LanguageTool中文支持研究组</h2>
<p>研究组负责人：<?=show_link("姜赢", "mailto:jpz6311whu@bnuz.edu.cn") ?>（博士），北京师范大学珠海分校管理学院讲师</p>
<p>本网页由研究组成员（信息管理与信息系统专业学生）<b>林耿锐</b>、<b>吕洋</b>、<b>刘轩伟</b>、<b>闫洪滔</b>和<b>程文婷</b>更新和翻译。</p>

<div style="height:50px"></div>

<?php
include("../../include/footer.php");
?>
