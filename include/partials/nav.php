<div id="header">
  <div id="container">
    <div id="logo">
      <a href="/">
        <img src="/images/logo36x38.png" alt="LanguageTool logo">
      </a>
    </div>
    <div id="nav">
      <?php
        $pages = array(
          array('name'=>'Home', 'url' => '/'),
          array('name'=>'Screenshots', 'url' => '/screenshots/'),
          array('name'=>'Support', 'url' => '/support/'),
          array('name'=>'Development', 'url' => '/development/'),
          array('name'=>'WikiCheck', 'url' => 'https://tools.wmflabs.org/languagetool/')
        );

        foreach ($pages as $aPage) {
          $activeClass = '';
          if (isset($page) && $page == $aPage['name']) {
            $activeClass = 'active';
          }
          print '<a class="'.$activeClass.'" href="'.$aPage['url'].'">'.$aPage['name'].'</a>';
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
