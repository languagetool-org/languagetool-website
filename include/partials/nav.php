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
          array('name'=>'WikiCheck', 'url' => 'http://community.languagetool.org/wikiCheck/')
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
      <a class="facebook" href="http://www.facebook.com/LanguageTool" title="get news at facebook"></a>
      <a class="twitter" href="http://twitter.com/languagetoolorg" title="get news at twitter"></a>
      <a class="github" href="https://github.com/languagetool-org/" title="get the source code at GitHub"></a>
    </div>
    <div style="clear:both;"></div>
  </div>
</div>

<div id="bounty" style="background-color: #fffbdd; color: black; font-size: large; text-align: center; padding: 10px">
    <a style="text-decoration: none" href="https://www.bountysource.com/issues/9358930-develop-an-interface-for-grammar-checkers"
        >Post a bounty so that Firefox can have a better LanguageTool integration</a>
    <!--<a style="text-decoration: none" href="#" onclick="$('#bounty').hide()">[close]</a>-->
</div>
