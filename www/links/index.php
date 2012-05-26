<?php
$page = "links";
$title = "LanguageTool";
$title2 = "Links &amp; Resources";
$lastmod = "2012-05-26 10:35:00 CET";
include("../../include/header.php");
?>

<h2 class="firstpara">Links for Users</h2>

<p><strong>Issue tracking:</strong></p>

<ul>
	<li><?=show_simple_link("Open Bug Reports", "http://sourceforge.net/tracker/?limit=25&amp;func=&amp;group_id=110216&amp;atid=655717&amp;assignee=&amp;status=&amp;category=&amp;artgroup=&amp;keyword=&amp;submitter=&amp;artifact_id=&amp;assignee=&amp;status=1&amp;category=&amp;artgroup=&amp;submitter=&amp;keyword=&amp;artifact_id=&amp;submit=Filter")?></li>
	<li><?=show_simple_link("Open Feature Requests", "http://sourceforge.net/tracker/?limit=25&amp;func=&amp;group_id=110216&amp;atid=655720&amp;assignee=&amp;status=&amp;category=&amp;artgroup=&amp;keyword=&amp;submitter=&amp;artifact_id=&amp;assignee=&amp;status=1&amp;category=&amp;artgroup=&amp;submitter=&amp;keyword=&amp;artifact_id=&amp;submit=Filter")?></li>
	<li><?=show_simple_link("Create a new Issue", "http://sourceforge.net/tracker/?func=add&amp;group_id=110216&amp;atid=655717")?></li>
</ul>

<p><strong>LanguageTool integration</strong>:</p>

<ul>
	<li><?=show_simple_link("LanguageTool for vim", "http://www.vim.org/scripts/script.php?script_id=3223") ?></li>
	<li><?=show_simple_link("LanguageTool for LyX", "http://wiki.lyx.org/Tools/LyX-GrammarChecker") ?></li>
	<li><?=show_simple_link("LanguageTool plugin for OmegaT", "https://sourceforge.net/projects/omegat-plugins/files/OmegaT-LanguageTool/")?>
		a plugin that enables grammar-checking in computer-aided translation tool OmegaT (open source)</li>
	<li><?=show_simple_link("LanguageTool in CheckMate", "http://www.opentag.com/okapi/wiki/index.php?title=CheckMate")?> used as a server to enhance translation QA</li>
	<li><?=show_simple_link("LanguageTool for Thunderbird", "https://addons.mozilla.org/en-US/thunderbird/addon/14781")?></li>
        <li><?=show_simple_link("LanguageTool for Emacs", "http://www.emacswiki.org/emacs/langtool.el")?></li>
</ul>

<p><strong>Contact:</strong></p>

<ul>
    <li>LanguageTool was originally written by <?=show_link("Daniel Naber", "http://www.danielnaber.de", 0)?>
    (<strong>naber <span>a&#116;</span> danielnaber<span>.</span>de</strong>) and is now maintained by
    Daniel Naber and Marcin Miłkowski (<?=show_link("contact form", "http://marcinmilkowski.pl/en/Contact/", 0)?>)</li>
    <li>Contact us via email or <?=show_link("post to the forum", "/forum", 0)?></li>
	<li>Mailing list for development and user discussion:<br/>
 		<?=show_simple_link("Subscribe/Unsubscribe",  "http://lists.sourceforge.net/mailman/listinfo/languagetool-devel") ?>,
 		<?=show_simple_link("Archive (mail-archive.com)", "http://www.mail-archive.com/languagetool-devel@lists.sourceforge.net/")?>,
 		<?=show_simple_link("Archive (Sourceforge)", "http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-devel")?></li>
</ul>

<p><strong>Other Open Source language tools:</strong></p>

<ul>
	<li><?=show_simple_link("After the Deadline", "http://open.afterthedeadline.com/")?>,
		a grammar checker for English which integrates LanguageTool to support German and French</li>
	<!-- <li><?=show_simple_link("LangBot", "http://apoema.net/langbot/en/gc.lb")?>,
		an on-line grammar checker which uses LanguageTool, and includes integration
		for Firefox via <?=show_simple_link("Ubiquity", "http://ubiquity.mozilla.com/") ?> plugin</li> -->				
	<li><?=show_simple_link("An Gramad&oacute;ir", "http://borel.slu.edu/gramadoir/")?>,
		a grammar checker for the Irish language</li>
	<li><?=show_simple_link("CoGrOO", "http://cogroo.sourceforge.net/")?>
		a Grammar Checker for Portuguese</li>
	<li><?=show_simple_link("Grammalecte", "http://www.dicollecte.org/grammalecte/")?>
		a Grammar Checker for French written in Python, based on Lightproof</li>
	<li><?=show_simple_link("GRAC", "http://grac.sourceforge.net/")?>
		corpus-based grammar checker written in Python</li>
    <li><?=show_simple_link("Lightproof", "http://numbertext.org/lightproof/")?>,
   		a Python-based grammar checker embedded in LibreOffice since 3.5,
        <?=show_simple_link("Lightproof editor", "http://extensions.libreoffice.org/extension-center/lightproof-editor")?>
    </li>
	<li><?=show_simple_link("Queequeg", "http://queequeg.sourceforge.net/index-e.html")?>
		agreement checker written in Python</li>
	<li><?=show_simple_link("Virastyar", "https://sourceforge.net/projects/virastyar/")?>
		spelling and punctuation checker for Persian for MS Word, written in C#</li>		
	<li><?=show_simple_link("Old version of LanguageTool in Python", "http://tkltrans.sourceforge.net/#r03") ?>, a much older
		and less powerful version without OpenOffice.org integration but support for Hungarian</li>
</ul>



<h2>Links for Developers</h2>

<a href="http://www.cloudbees.com"><img border="0" src="../images/cloudbees-logo.png" alt="CloudBees Logo" align="right"/></a>

<p><strong>Source Code and Development Versions:</strong></p>

<ul>
	<li><?=show_simple_link("Source code (Subversion)", "https://languagetool.svn.sourceforge.net/svnroot/languagetool/trunk/JLanguageTool")?></li>
	<li>Subversion commit messages mailing list:<br/><?=show_simple_link("Subscribe/Unsubscribe", "http://lists.sourceforge.net/mailman/listinfo/languagetool-cvs") ?>,
		<?=show_simple_link("Archive (mail-archive.com)", "http://www.mail-archive.com/languagetool-cvs@lists.sourceforge.net/")?>,
		<?=show_simple_link("Archive (Sourceforge)", "http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-cvs")?></li>
	<li><?=show_simple_link("API documentation (Javadoc)", "/development/api/")?></li>
    <li><?=show_simple_link("Daily builds of the current development version", "/download/snapshots/") ?>
      (<?=show_simple_link("CHANGES.txt", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/CHANGES.txt") ?>)</li>
</ul>

<p><strong>Development Tools and Resources:</strong></p>

<ul>
	<li><?=show_simple_link("User interface translation (i18n) at Transifex", "http://www.transifex.net/projects/p/languagetool/resource/messagesbundleproperties/")?></li>
	<li><?=show_simple_link("Continuous integration at CloudBees", "http://languagetool.ci.cloudbees.com")?></li>
	<li><?=show_simple_link("This website's usage statistics", "http://www.languagetool.org/stats")?></li>
	<li><?=show_simple_link("LibreOffice bug reports related to LanguageTool", "https://bugs.freedesktop.org/buglist.cgi?quicksearch=%22language%20tool%22%20OR%20languagetool&amp;list_id=43548")?></li>
</ul>

<p><strong>Grammar Error Collection:</strong></p>

<ul>
	<li><?=show_simple_link("XML file with 221 collected English grammar errors", "/download/errors.xml") ?></li>
	<li><?=show_simple_link("Another English error collection", 
		"http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/resource/en/errors.txt?view=markup") ?></li>
	<li><?=show_simple_link("German error collection", 
		"http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/resource/de/errors.txt?view=markup") ?></li>
	<li><?=show_simple_link("HOO: Helping Our Own", 
		"http://clt.mq.edu.au/research/projects/hoo/") ?></li>
	
</ul>

<p><strong>Corpora:</strong></p>

<ul>
	<li><?=show_simple_link("COCA - Corpus of Contemporary American English", "http://corpus.byu.edu/coca/") ?></li>
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
