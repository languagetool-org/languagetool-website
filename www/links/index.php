<?php
$page = "links";
$title = "LanguageTool";
$title2 = "Links &amp; Resources";
$lastmod = "2013-02-06 20:35:00 CET";
include("../../include/header.php");
?>

<h3 class="firstpara">Issue Tracking</h3>

<ul>
	<li><?=show_simple_link("Open Bug Reports", "http://sourceforge.net/tracker/?limit=25&amp;func=&amp;group_id=110216&amp;atid=655717&amp;assignee=&amp;status=&amp;category=&amp;artgroup=&amp;keyword=&amp;submitter=&amp;artifact_id=&amp;assignee=&amp;status=1&amp;category=&amp;artgroup=&amp;submitter=&amp;keyword=&amp;artifact_id=&amp;submit=Filter")?></li>
	<li><?=show_simple_link("Open Feature Requests", "http://sourceforge.net/tracker/?limit=25&amp;func=&amp;group_id=110216&amp;atid=655720&amp;assignee=&amp;status=&amp;category=&amp;artgroup=&amp;keyword=&amp;submitter=&amp;artifact_id=&amp;assignee=&amp;status=1&amp;category=&amp;artgroup=&amp;submitter=&amp;keyword=&amp;artifact_id=&amp;submit=Filter")?></li>
	<li><?=show_simple_link("Create a new Bug Report or Feature Request", "http://sourceforge.net/tracker/?func=add&amp;group_id=110216&amp;atid=655717")?></li>
</ul>

<h3>LanguageTool Integration</h3>

<ul>
	<li><?=show_simple_link("LanguageTool for vim", "http://www.vim.org/scripts/script.php?script_id=3223") ?></li>
	<li><?=show_simple_link("LanguageTool for LyX", "http://wiki.lyx.org/Tools/LyX-GrammarChecker") ?></li>
	<li><?=show_simple_link("LanguageTool plugin for OmegaT", "https://sourceforge.net/projects/omegat-plugins/files/OmegaT-LanguageTool/")?>
		a plugin that enables grammar-checking in computer-aided translation tool OmegaT (open source)</li>
	<li><?=show_simple_link("LanguageTool in CheckMate", "http://www.opentag.com/okapi/wiki/index.php?title=CheckMate")?> used as a server to enhance translation QA</li>
	<li><?=show_simple_link("LanguageToolFx for Firefox", "https://addons.mozilla.org/firefox/addon/languagetoolfx/")?></li>
        <li><?=show_simple_link("LanguageTool for Thunderbird", "https://addons.mozilla.org/thunderbird/addon/14781")?></li>
        <li><?=show_simple_link("LanguageTool for Emacs", "http://www.emacswiki.org/emacs/langtool.el")?></li>
</ul>

<h3>Other Open Source Grammar Checkers</h3>

<ul>
	<li><?=show_simple_link("After the Deadline", "http://open.afterthedeadline.com/")?>,
		a grammar checker for English which integrates LanguageTool to support German and French</li>
	<!-- <li><?=show_simple_link("LangBot", "http://apoema.net/langbot/en/gc.lb")?>,
		an on-line grammar checker which uses LanguageTool, and includes integration
		for Firefox via <?=show_simple_link("Ubiquity", "http://ubiquity.mozilla.com/") ?> plugin</li> -->				
	<li><?=show_simple_link("An Gramad&oacute;ir", "http://borel.slu.edu/gramadoir/")?>,
		a grammar checker for the Irish language</li>
	<li><?=show_simple_link("CoGrOO", "http://cogroo.sourceforge.net/")?>
		a grammar checker for Portuguese</li>
	<li><?=show_simple_link("Grammalecte", "http://www.dicollecte.org/grammalecte/")?>
		a grammar checker for French written in Python, based on Lightproof</li>
	<li><?=show_simple_link("GRAC", "http://grac.sourceforge.net/")?>
		corpus-based grammar checker written in Python</li>
    <li><?=show_simple_link("Lightproof", "http://numbertext.org/lightproof/")?>,
   		a Python-based grammar checker embedded in LibreOffice since 3.5,
        <?=show_simple_link("Lightproof editor", "http://extensions.libreoffice.org/extension-center/lightproof-editor")?>
    </li>
    <li><?=show_simple_link("Link Grammar", "http://www.abisource.com/projects/link-grammar/")?>, a syntactic parser for English</li>
	<li><?=show_simple_link("Queequeg", "http://queequeg.sourceforge.net/index-e.html")?>,
		agreement checker written in Python</li>
	<li><?=show_simple_link("Virastyar", "https://sourceforge.net/projects/virastyar/")?>,
		spelling and punctuation checker for Persian for MS Word, written in C#</li>		
	<li><?=show_simple_link("Old version of LanguageTool in Python", "http://tkltrans.sourceforge.net/#r03") ?>, a much older
		and less powerful version without OpenOffice.org integration</li>
</ul>

<?php
include("../../include/footer.php");
?>
