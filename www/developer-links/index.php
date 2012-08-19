<?php
$page = "developer-links";
$title = "LanguageTool";
$title2 = "Links &amp; Resources for Developers";
$lastmod = "2012-08-19 12:35:00 CET";
include("../../include/header.php");
?>

<a href="http://www.cloudbees.com"><img border="0" src="../images/cloudbees-logo.png" alt="CloudBees Logo" align="right"/></a>

<h3 class="firstpara">Mailing Lists</h3>

<ul>
    <li>Development discussion:
        <ul>
          <li><?=show_simple_link("Subscribe/Unsubscribe",  "http://lists.sourceforge.net/mailman/listinfo/languagetool-devel") ?></li>
          <li><?=show_simple_link("Archive (mail-archive.com)", "http://www.mail-archive.com/languagetool-devel@lists.sourceforge.net/")?></li>
          <li><?=show_simple_link("Archive (Sourceforge)", "http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-devel")?></li>
        </ul>
    </li>
	<li>Subversion commit messages:
        <ul>
          <li><?=show_simple_link("Subscribe/Unsubscribe", "http://lists.sourceforge.net/mailman/listinfo/languagetool-cvs") ?></li>
          <li><?=show_simple_link("Archive (mail-archive.com)", "http://www.mail-archive.com/languagetool-cvs@lists.sourceforge.net/")?></li>
          <li><?=show_simple_link("Archive (Sourceforge)", "http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-cvs")?></li>
        </ul>
    </li>
</ul>

<h3>Source Code and Development Versions</h3>

<ul>
	<li><?=show_simple_link("Source code in Subversion", "https://languagetool.svn.sourceforge.net/svnroot/languagetool/trunk/JLanguageTool")?></li>
    <li><?=show_simple_link("Daily builds of the current development version", "/download/snapshots/") ?>
      (<?=show_simple_link("CHANGES.txt", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/CHANGES.txt") ?>)</li>
    <li><?=show_simple_link("API documentation (Javadoc)", "/development/api/")?></li>
</ul>

<h3>Development Tools and Resources</h3>

<ul>
	<li><?=show_simple_link("User interface translation (i18n) at Transifex", "http://www.transifex.net/projects/p/languagetool/resource/messagesbundleproperties/")?></li>
	<li><?=show_simple_link("Continuous integration at CloudBees", "http://languagetool.ci.cloudbees.com")?></li>
	<li><?=show_simple_link("This website's usage statistics", "http://www.languagetool.org/stats")?></li>
	<li><?=show_simple_link("LibreOffice bug reports related to LanguageTool", "https://bugs.freedesktop.org/buglist.cgi?quicksearch=%22language%20tool%22%20OR%20languagetool&amp;list_id=43548")?></li>
</ul>

<h3>Grammar Error Collections and Corpora</h3>

<ul>
	<li><?=show_simple_link("HOO: Helping Our Own", "http://clt.mq.edu.au/research/projects/hoo/") ?></li>
    <li><?=show_simple_link("Learner corpora around the world", "http://www.uclouvain.be/en-cecl-lcworld.html") ?></li>
    <li><?=show_simple_link("LanguageTool's small German error collection", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/resource/de/errors.txt?view=markup") ?></li>
    <li>English
      <ul>
        <li><?=show_simple_link("LanguageTool's small English error collection", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/resource/en/errors.txt?view=markup") ?></li>
        <li><?=show_simple_link("COCA - Corpus of Contemporary American English", "http://corpus.byu.edu/coca/") ?></li>
        <li><?=show_simple_link("XML file with 221 collected English grammar errors", "/download/errors.xml") ?></li>
      </ul>
    </li>
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
