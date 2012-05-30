		<!-- /MAIN TEXT -->

        <p class="lastmod">Page last modified:
        	<?php
        	list($date, $time, $cet) = split(" ", $lastmod);
        	print $date;
        	?>
        </p>

	</td>
</tr>
</table>

<p class="invisible">Time to generate page:
<?php
	print sprintf("%.2fs", getmicrotime()-$start_time);
?>
</p>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://openthesaurus.stats.mysnip-hosting.de/" : "http://openthesaurus.stats.mysnip-hosting.de/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 2);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://openthesaurus.stats.mysnip-hosting.de/piwik.php?idsite=2" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

</body>
</html>
