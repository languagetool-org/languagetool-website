<?php
$page = "contact";
$title = "LanguageTool";
$title2 = "Contact";
$lastmod = "2012-12-19 12:39:00 CET";
include("../../include/header.php");
?>

<h3 class="firstpara">Contact</h3>

<p>If you have a problem with LanguageTool, please make sure to read the
<?=show_link("list of common problems", "/issues", 0)?> first.</p>

<ul>
    <li><?=show_link("Post to our forum", "/forum", 0)?> - this is the easiest way of contacting us</li>
	<li>Mailing list:
      <ul>
        <li>Post to our mailing list at <span style="color:#777777">languagetool-devel <span>a&#116;</span> lists.sourceforge.net</span>
          (note that your message requires manual moderation if you are not subscribed, this might take up to 24 hours)</li>
        <li><?=show_simple_link("Subscribe/Unsubscribe",  "http://lists.sourceforge.net/mailman/listinfo/languagetool-devel") ?></li>
        <li><?=show_simple_link("Archive (mail-archive.com)", "http://www.mail-archive.com/languagetool-devel@lists.sourceforge.net/")?></li>
        <li><?=show_simple_link("Archive (Sourceforge)", "http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-devel")?></li>
      </ul>
  </li>
  <li>If you don't want to post to public forums or mailing lists you can contact the maintainers directly:
    <ul>
      <li><?=show_simple_link("Daniel Naber", "http://www.danielnaber.de", 0)?> - contact by sending an email to
          <span style="color:#777777">naber <span>a&#116;</span> danielnaber<span>.</span>de</span></li>
      <li><?=show_simple_link("Marcin Miłkowski", "http://marcinmilkowski.pl", 0)?> - contact by using his
          <?=show_simple_link("contact form", "http://marcinmilkowski.pl/en/Contact/", 0)?></li>
    </ul>
</ul>


<h3>Imprint</h3>

<p>This page is run by:</p>

<div style="margin-left: 10px">
Daniel Naber<br/>
Friesenstr. 3<br/>
14482 Potsdam<br/>
email: <span style="color:#777777">naber <span>a&#116;</span> danielnaber<span>.</span>de</span>
</div>


<h3>Privacy</h3>

<p>This website uses <a href="http://www.piwik.org">Piwik</a> for web analytics. We're shortening your
IP address (to a form like 192.168.xxx.xxx) to protect your privacy. If you don't want your
visit to be recorded at all by Piwik, you can opt out here:</p>

<iframe frameborder="no" width="600px" height="200px" src="http://openthesaurus.stats.mysnip-hosting.de/index.php?module=CoreAdminHome&amp;action=optOut"></iframe>

<?php
include("../../include/footer.php");
?>

<div style="height:300px"></div>
