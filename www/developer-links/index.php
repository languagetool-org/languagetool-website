<?php
$page = "developer-links";
$title = "LanguageTool";
$title2 = "Links &amp; Resources for Developers";
$lastmod = "2013-03-29 12:35:00 CET";
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
          <li><?=show_simple_link("Subscribe/Unsubscribe", "http://lists.sourceforge.net/mailman/listinfo/languagetool-commits") ?></li>
          <li><?=show_simple_link("Archive (mail-archive.com)", "http://www.mail-archive.com/languagetool-commits@lists.sourceforge.net/")?></li>
          <li><?=show_simple_link("Archive (Sourceforge)", "http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-commits")?></li>
          <li>Old archives (up to September 2012):
            <ul>
              <li><?=show_simple_link("Archive (mail-archive.com)", "http://www.mail-archive.com/languagetool-cvs@lists.sourceforge.net/")?></li>
              <li><?=show_simple_link("Archive (Sourceforge)", "http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-cvs")?></li>
            </ul>
          </li>
        </ul>
    </li>
</ul>

<h3>Source Code and Development Versions</h3>

<ul>
    <li>
      <?=show_simple_link("Source code in Subversion", "https://languagetool.svn.sourceforge.net/svnroot/languagetool/trunk/languagetool")?>
      (<?=show_simple_link("browser view", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/languagetool/")?>)
    </li>
    <li><?=show_simple_link("Source code mirrored at github", "https://github.com/danielnaber/languagetool-mirror/")?> (does not include the website etc)</li>
    <li><?=show_simple_link("Daily builds of the current development version", "/download/snapshots/") ?>
      (<?=show_simple_link("CHANGES.txt", "http://www.languagetool.org/download/CHANGES.txt") ?>)</li>
    <li><?=show_simple_link("API documentation (Javadoc)", "/development/api/")?></li>
</ul>

<h3>Development Tools and Resources</h3>

<ul>
    <li><?=show_simple_link("Nightly rule match diffs", "http://www.languagetool.org/regression-tests/?C=M;O=D")?></li>
    <li><?=show_simple_link("User interface translation (i18n) at Transifex", "http://www.transifex.net/projects/p/languagetool/resource/messagesbundleproperties/")?></li>
    <li><?=show_simple_link("Continuous integration at CloudBees", "http://languagetool.ci.cloudbees.com")?></li>
    <li><?=show_simple_link("This website's usage statistics", "http://www.languagetool.org/stats")?></li>
    <li><?=show_simple_link("LibreOffice bug reports related to LanguageTool", "https://bugs.freedesktop.org/buglist.cgi?quicksearch=%22language%20tool%22%20OR%20languagetool&amp;list_id=43548")?></li>
    <li><?=show_simple_link("Apache OpenOffice bug reports related to LanguageTool", "https://issues.apache.org/ooo/buglist.cgi?bug_status=UNCONFIRMED&amp;bug_status=CONFIRMED&amp;bug_status=ACCEPTED&amp;bug_status=REOPENED&amp;field0-0-0=product&amp;field0-0-1=component&amp;field0-0-10=status_whiteboard&amp;field0-0-11=content&amp;field0-0-2=alias&amp;field0-0-3=short_desc&amp;field0-0-4=status_whiteboard&amp;field0-0-5=content&amp;field0-0-6=product&amp;field0-0-7=component&amp;field0-0-8=alias&amp;field0-0-9=short_desc&amp;query_format=advanced&amp;type0-0-0=substring&amp;type0-0-1=substring&amp;type0-0-10=substring&amp;type0-0-11=matches&amp;type0-0-2=substring&amp;type0-0-3=substring&amp;type0-0-4=substring&amp;type0-0-5=matches&amp;type0-0-6=substring&amp;type0-0-7=substring&amp;type0-0-8=substring&amp;type0-0-9=substring&amp;value0-0-0=languagetool&amp;value0-0-1=languagetool&amp;value0-0-10=language%20tool&amp;value0-0-11=%22language%20tool%22&amp;value0-0-2=languagetool&amp;value0-0-3=languagetool&amp;value0-0-4=languagetool&amp;value0-0-5=%22languagetool%22&amp;value0-0-6=language%20tool&amp;value0-0-7=language%20tool&amp;value0-0-8=language%20tool&amp;value0-0-9=language%20tool&amp;order=bug_id%20DESC&amp;query_based_on=")?></li>
</ul>

<h3>Grammar Error Collections and Corpora</h3>

<ul>
    <li><?=show_simple_link("HOO: Helping Our Own", "http://clt.mq.edu.au/research/projects/hoo/") ?></li>
    <li><?=show_simple_link("Learner corpora around the world", "http://www.uclouvain.be/en-cecl-lcworld.html") ?></li>
    <li><?=show_simple_link("LanguageTool's small German error collection", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/languagetool/languagetool-language-modules/de/src/main/resources/org/languagetool/resource/de/errors.txt") ?></li>
    <li>English
      <ul>
        <li><?=show_simple_link("LanguageTool's small English error collection", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/languagetool/languagetool-language-modules/en/src/main/resources/org/languagetool/resource/en/errors.txt") ?></li>
        <li><?=show_simple_link("COCA - Corpus of Contemporary American English", "http://corpus.byu.edu/coca/") ?></li>
        <li><?=show_simple_link("XML file with 221 collected English grammar errors", "/download/errors.xml") ?></li>
      </ul>
    </li>
</ul>

<h3>Other</h3>
    
<ul>
    <li><?=show_simple_link("Building a regex engine — online resources", "http://stackoverflow.com/questions/1084069/building-a-regex-engine-online-resources")?></li>
    <li><?=show_simple_link("OpenRegex", "https://github.com/knowitall/openregex")?> - an efficient and flexible token-based regular expression language and engine (LGPL v3)</li>
    <li><?=show_simple_link("GExp graph-expression", "http://code.google.com/p/graph-expression/")?> - high level automaton library for information extraction (Apache License)</li>
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
