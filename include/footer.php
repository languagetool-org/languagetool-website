<div id="footer">
  <?php

    $footer_pages = array(
      array( 'name'=>'Contact', 'url' => $rootUrl . '/contact' ),
      //array( 'name' => 'Wiki', 'url' => 'http://wiki.languagetool.org/')
    );

    foreach ($footer_pages as $page) {
      print '<span><a href="'.$page['url'].'">'.$page['name'].'</a></span>';
    }

  ?>
</div>

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
