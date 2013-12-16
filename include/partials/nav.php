<div id="header">
  <div id="container">
    <div id="logo">
      <a href="<?php print $rootUrl; ?>">
        <img src="https://s3-eu-west-1.amazonaws.com/51e3d489f1e/2013-11-28-04-38-25-5297637114adc.png">
      </a>
    </div>
    <div id="nav">
      <?php
        $pages = array(
          array('name'=>'Home', 'url' => $rootUrl . '/'),
          // TODO: comment in when done: array('name'=>'Screenshots', 'url' => $rootUrl . '/?page=screenshots'),
          array('name'=>'Support', 'url' => $rootUrl . '/?page=support'),
          array('name'=>'Development', 'url' => 'http://wiki.languagetool.org/development-overview')
        );

        foreach ($pages as $page) {
          $activeClass = '';
          if ($page['url'] == current_url()) {
            $activeClass = 'active';
          }
          print '<a class="'.$activeClass.'" href="'.$page['url'].'">'.$page['name'].'</a>';
        }
      ?>
    </div>
    <div id="social">
      <a class="facebook" href="http://www.facebook.com/LanguageTool" title="facebook"></a>
      <a class="twitter" href="http://twitter.com/languagetoolorg" title="twitter"></a>
    </div>
    <div style="clear:both;"></div>
  </div>
</div>
