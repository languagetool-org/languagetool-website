<div id="header">
  <div id="container">
    <div id="logo">
      <a href="/">
        <img src="/images/logo36x38.png" title="LanguageTool logo">
      </a>
    </div>
    <div id="nav">
      <?php
        $pages = array(
          array('name'=>'Home', 'url' => '/'),
          array('name'=>'Screenshots', 'url' => '/screenshots/'),
          array('name'=>'Support', 'url' => '/support/'),
          array('name'=>'Development', 'url' => '/development/')
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
