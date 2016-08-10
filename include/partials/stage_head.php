
<?php include("banner.php"); ?>

<div id="stage" class="start">
<div class="inner">
  <div id="editor">
    <div class="inner">
      <?php
        $checkSubmitButtonValue = "Check Text";
        $checkSubmitButtonTitle = "Check text - you can also use Ctrl+Return";
        include("../include/checkform.php");
      ?>
      <div id='maintainedInfo' class='languageHomepage'></div>
      <div id='languageInfo' class='languageHomepage'></div>
    </div>
  </div>
  <div id="text">
    
    <p><strong>LanguageTool</strong> is an Open Source proof&shy;reading program for English, French, German,
        Polish, and more than <a href="languages/">20 other languages</a>.</p>
    <p class="small">It finds many errors that a simple spell checker cannot detect and several grammar problems.</p>
    
    <script>
      if (navigator.userAgent.indexOf("Chrome/") !== -1) {
        document.write('<p class="small"><a onclick="return installChromeExtension()" href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji">Add to Chrome</a></p>');
      } else if (navigator.userAgent.indexOf("Firefox/") !== -1) {
        document.write('<p class="small"><a href="https://addons.mozilla.org/firefox/addon/languagetool?src=external-lt-homepage">Add to Firefox</a></p>');
      }
    </script>

    <!--
    <div style="border-color: #7772ee; border-width: 2px; border-style: solid; padding: 10px; margin-top: 25px">
      <p><a onclick="return installChromeExtension()" href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji">Add to Chrome</a></p>
    </div>
    -->

  </div>
  <div style="clear:both;"></div>
</div>
</div>
