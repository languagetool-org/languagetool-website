
<?php include("banner.php"); ?>

<div id="stage" class="start">
  <div class="inner">
    <div id="text">
        <p>LanguageTool is a <strong>proof&shy;reading service</strong> for English, <a href="de/">German</a>,
            <a href="pl/">Polish</a>, <a href="ru/">Russian</a>, and more than <a href="languages/">20 other languages</a>.
            <br>
            <?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Chrome/") !== false && strpos($_SERVER['HTTP_USER_AGENT'], "Android") === false) { ?>
                <div id="addToBrowser">
                    <a onclick="return installChromeExtension('calltoaction')" href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji">Add to Chrome<span>&nbsp;&nbsp;free, no sign up required</span></a>
                </div>
            <?php } else if (strpos($_SERVER['HTTP_USER_AGENT'], "Firefox/") !== false && strpos($_SERVER['HTTP_USER_AGENT'], "Android") === false) { ?>
                <div id="addToBrowser">
                    <a target="_blank" href="https://addons.mozilla.org/firefox/addon/languagetool/?src=external-lt-homepage">Add to Firefox<span>&nbsp;&nbsp;free, no sign up required</span></a>
                </div>
            <?php } ?>
        </p>
    </div>
    <div id="editor">
      <div class="inner">
        <?php
          if (isset($isProofreadingTest) && $isProofreadingTest) {
            $checkSubmitButtonValue = "Basic Check";
          } else {
            $checkSubmitButtonValue = "Check Text";
          }
          $checkSubmitButtonTitle = "Check text - you can also use Ctrl+Return";
          include("../include/checkform.php");
        ?>
        <div id='maintainedInfo' class='languageHomepage'></div>
        <div id='languageInfo' class='languageHomepage'></div>
      </div>
      <div id="text2">
        <p class="small">LanguageTool identifies many grammatical and stylistic issues that a simple spell checker cannot detect.</p>
      </div>
    </div>
  </div>
</div>
