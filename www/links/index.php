<?php
$page = "links";
$title = "LanguageTool";
$title2 = "Links &amp; Resources";
$lastmod = "2012-01-24 22:35:00 CET";
include("../../include/header.php");
?>

<h2>Links for Users</h2>

<p><strong>Contact:</strong><br />

<ul style="list-style:none">
    <li>LanguageTool was originally written by <a href="http://www.danielnaber.de">Daniel Naber</a> 
    (<strong>naber <span>a&#116;</span> danielnaber<span>.</span>de</strong>) and is now maintained by 
    Daniel Naber and Marcin Miłkowski (<a href="http://marcinmilkowski.pl/en/Contact/">contact form</a>)</li>
    <li>Contact us via email or <?=show_link("post to the forum", "/forum", 0)?></li>
	<li>Mailing list for development and user discussion:
 		<?=show_link("Subscribe/Unsubscribe",  "http://lists.sourceforge.net/mailman/listinfo/languagetool-devel", 0) ?>,
 		<?=show_link("Archive", "http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-devel", 0)?></li>
</ul>

<p><strong>Issue tracking:</strong></p>

<ul style="list-style:none">
	<li><?=show_link("Bug Reports", "http://sourceforge.net/tracker/?limit=25&amp;func=&amp;group_id=110216&amp;atid=655717&amp;assignee=&amp;status=&amp;category=&amp;artgroup=&amp;keyword=&amp;submitter=&amp;artifact_id=&amp;assignee=&amp;status=1&amp;category=&amp;artgroup=&amp;submitter=&amp;keyword=&amp;artifact_id=&amp;submit=Filter", 0)?></li>
	<li><?=show_link("Feature Requests", "http://sourceforge.net/tracker/?limit=25&amp;func=&amp;group_id=110216&amp;atid=655720&amp;assignee=&amp;status=&amp;category=&amp;artgroup=&amp;keyword=&amp;submitter=&amp;artifact_id=&amp;assignee=&amp;status=1&amp;category=&amp;artgroup=&amp;submitter=&amp;keyword=&amp;artifact_id=&amp;submit=Filter", 0)?></li>
</ul>

<p class="firstpara"><strong>LanguageTool integration</strong>:</p>

<ul style="list-style:none">
	<li><?=show_link("LanguageTool for vim", "http://www.vim.org/scripts/script.php?script_id=3223", 0) ?></li>
	<li><?=show_link("LanguageTool for LyX", "http://wiki.lyx.org/Tools/LyX-GrammarChecker", 0) ?></li>
	<li><?=show_link("LanguageTool plugin for OmegaT", "https://sourceforge.net/projects/omegat-plugins/files/OmegaT-LanguageTool/", 0)?>
		a plugin that enables grammar-checking in computer-aided translation tool OmegaT (open source)</li>
	<li><?=show_link("LanguageTool in CheckMate", "http://www.opentag.com/okapi/wiki/index.php?title=CheckMate", 0)?> used as a server to enhance translation QA</li>
	<li><?=show_link("LanguageTool for Thunderbird", "https://addons.mozilla.org/en-US/thunderbird/addon/14781", 0)?></li>
</ul>
		
<p class="firstpara"><strong>Other Open Source language tools:</strong></p>

<ul style="list-style:none">
	<li><?=show_link("After the Deadline", "http://open.afterthedeadline.com/", 0)?>,
		a grammar checker for English which integrates LanguageTool to support German and French</li>
	<!-- <li><?=show_link("LangBot", "http://apoema.net/langbot/en/gc.lb", 0)?>,
		an on-line grammar checker which uses LanguageTool, and includes integration
		for Firefox via <?=show_link("Ubiquity", "http://ubiquity.mozilla.com/", 0) ?> plugin</li> -->				
	<li><?=show_link("An Gramad&oacute;ir", "http://borel.slu.edu/gramadoir/", 0)?>,
		a grammar checker for the Irish language</li>
	<li><?=show_link("CoGrOO", "http://cogroo.sourceforge.net/", 0)?>
		a Grammar Checker for Portuguese</li>
	<li><?=show_link("Grammalecte", "http://www.dicollecte.org/grammalecte/", 0)?>
		a Grammar Checker for French written in Python, based on Lightproof.</li>
	<li><?=show_link("GRAC", "http://grac.sourceforge.net/", 0)?>
		corpus-based grammar checker written in Python</li>
	<li><?=show_link("Queequeg", "http://queequeg.sourceforge.net/index-e.html", 0)?>
		agreement checker written in Python</li>
	<li><?=show_link("LanguageTool in Python", "http://tkltrans.sourceforge.net/#r03", 0) ?>, a much older
		and less powerful version without OpenOffice.org integration but support for Hungarian</li>
</ul>



<h2>Links for Developers</h2>

<a href="http://www.cloudbees.com"><img border="0" src="../images/cloudbees-logo.png" alt="CloudBees Logo" align="right"/></a>

<p><strong>Source Code:</strong></p>

<ul style="list-style:none">
	<li><?=show_link("Source code (Subversion)", "https://languagetool.svn.sourceforge.net/svnroot/languagetool/trunk/JLanguageTool", 0)?></li>
	<li>Subversion commit messages mailing list: <?=show_link("Subscribe/Unsubscribe", "http://lists.sourceforge.net/mailman/listinfo/languagetool-cvs", 0) ?>,
		<?=show_link("Archive", "http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-cvs", 0)?></li>
	<li><?=show_link("API documentation (Javadoc)", "/development/api/", 0)?></li>
</ul>

<p><strong>Development Tools:</strong></p>

<ul style="list-style:none">
	<li><?=show_link("User interface translation (i18n) at Transifex", "http://www.transifex.net/projects/p/languagetool/resource/messagesbundleproperties/", 0)?></li>
	<li><?=show_link("Continuous integration at CloudBees", "http://languagetool.ci.cloudbees.com", 0)?></li>
	<li><?=show_link("This website's usage statistics", "http://www.languagetool.org/stats", 0)?></li>
</ul>

<p><strong>Grammar Error Collection:</strong></p>

<ul style="list-style:none">
	<li><?=show_link("XML file with 221 collected English grammar errors", "/download/errors.xml", 0) ?></li>
	<li><?=show_link("Another English error collection", 
		"http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/resource/en/errors.txt?view=markup", 0) ?></li>
	<li><?=show_link("German error collection", 
		"http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/resource/de/errors.txt?view=markup", 0) ?></li>
</ul>

<br /><br /><br />

<p>Website design inspired by <!-- Please leave this if you use our template. Thank you -->
<a href="http://www.darjanpanic.com" target="_blank"
	title="Freelance Graphic artist">Darjan Panic</a> &amp; <a
	href="http://www.briangreens.com" target="_blank">Brian Green</a> <!-- Please leave this if you use our template. Thank you -->
</p>

<?php
include("../../include/footer.php");
?>
