<div id="footer">
  <?php
    $footer_pages = array(
      array( 'name'=>'Development', 'url' => getRoot() . '/development/' ),
      array( 'name'=>'Screenshots', 'url' => getRoot() . '/screenshots/' ),
      array( 'name'=>'Team', 'url' => getRoot() . '/team/' ),
      array( 'name' => 'Privacy Policy', 'url' => getRoot() . '/privacy/'),
      array( 'name'=>'Imprint &amp; Terms of Service', 'url' => getRoot() . '/legal/' )
    );

    foreach ($footer_pages as $page) {
      print '<span><a href="'.$page['url'].'">'.$page['name'].'</a></span>';
    }

  ?>
</div>

<!-- Piwik -->
<script type="text/javascript">
var _paq = _paq || [];
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
  var u=(("https:" == document.location.protocol) ? "https" : "http") + "://openthesaurus.stats.mysnip-hosting.de/";
  _paq.push(['setTrackerUrl', u+'piwik.php']);
  _paq.push(['setSiteId', <?php echo (isset($isProofreadingTest) && $isProofreadingTest) ? "13" : "2"; ?>]);
  var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
  g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
})();
</script>
<noscript><p><img src="http://openthesaurus.stats.mysnip-hosting.de/piwik.php?idsite=<?php echo (isset($isProofreadingTest) && $isProofreadingTest) ? "13" : "2"; ?>" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<script type="text/javascript">
    $(document).ready(function() {
        // try to log who could have the add-on (desktop only) but doesn't:
        if (screen.width > 1000 && typeof(_paq) !== 'undefined') {
            if ($('#extension-is-installed').length > 0) {
                _paq.push(['trackEvent', 'AddonInstalledYesNo', 'Yes']);
            } else {
                _paq.push(['trackEvent', 'AddonInstalledYesNo', 'No']);
            }
        }
    });
</script>
