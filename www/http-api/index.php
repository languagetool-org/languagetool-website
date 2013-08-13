<?php
$page = "development";
$sub_page = "http-api";
$title = "LanguageTool";
$title2 = "HTTP API";
$lastmod = "2013-07-15 09:20:00 CET";
include("../../include/header.php");
?>

<?php include('../../include/github_ribbon.php'); ?>

<h2 class="firstpara">Public REST API</h2>

<p>We offer an HTTPS REST service that anybody can use to check text with LanguageTool.
When using it, please keep the following rules in mind:</p>

<ul>
  <li>Please do not send automated requests. For that, set up
      <?=show_link("your own instance of LanguageTool", "../http-server/") ?>, which is very easy.</li>
  <li>Access is currently limited to 20 requests per IP per minute.</li>
  <li>The maximum text size is limited (currently to 50KB).</li>
  <li>Only HTTPS is supported, not HTTP.</li>
  <li>This is a free service, thus there are no guarantees about performance or availability.</li>
  <li>The LanguageTool version installed may be the latest official release or some snapshot. We will simply
      deploy new versions, thus the behavior might change without any warning.</li>
  <li>We promise that we only log meta data of your requests (date/time, text length, language, HTTP referrer), not the actual text.</li>
</ul>

<h2>URL</h2>

<p>The service is running at languagetool.org port 8081, so you can test it like this:</p>

<code><a href="https://languagetool.org:8081/?language=en-US&amp;text=my+texd">https://languagetool.org:8081/?language=en-US&amp;text=my+texd</a></code>

<p>If you're not just testing you should use POST to transfer your data. You
can test it like this, using <?=show_link("curl", "http://curl.haxx.se/") ?>:</p>

<tt>curl --sslv3 --data "language=en-US&text=my texd" https://languagetool.org:8081</tt>

<p>Note that the text needs to be URL-encoded, even for POST requests.</p>

<p>Please see <?=show_link("HTTP server", "../http-server/") ?> for information
about the parameters you can supply.</p>

<br/><br/><br/><br/><br/><br/><br/><br/>

<?php
include("../../include/footer.php");
?>
