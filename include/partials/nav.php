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
          array('name'=>'Forum', 'url' => 'https://forum.languagetool.org'),
          array('name'=>'add_to_browser', 'url' => ''),
          array('name'=>'Development', 'url' => '/development/'),
        );

        foreach ($pages as $aPage) {
          if ($aPage['name'] == 'add_to_browser') {
              ?>
              <script>
                  if (navigator.userAgent.indexOf("Android") === -1) {
                      if (navigator.userAgent.indexOf("Chrome/") !== -1) {
                          document.write('<a onclick="return installChromeExtension()" href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji">Add to Chrome</a>');
                      } else if (navigator.userAgent.indexOf("Firefox/") !== -1) {
                          document.write('<a href="https://addons.mozilla.org/firefox/addon/languagetool?src=external-lt-homepage">Add to Firefox</a>');
                      }
                  }
              </script>
              <?php
          } else {
              $activeClass = '';
              if (isset($page) && $page == $aPage['name']) {
                  $activeClass = 'active';
              }
              print '<a class="'.$activeClass.'" href="'.$aPage['url'].'">'.$aPage['name'].'</a>';
          }
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

<div id="dialog"></div>
