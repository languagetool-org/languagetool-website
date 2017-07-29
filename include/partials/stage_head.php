
<?php include("banner.php"); ?>

<div id="stage" class="start">
  <div class="inner">
    <div id="text">
    
      <p>LanguageTool is a <strong>proof&shy;reading service</strong> for English, French, German,
          Polish, and more than <a href="languages/">20 other languages</a>.</p>
    </div>
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
      <div id="text2">
        <p class="small">LanguageTool finds many errors that a simple spell checker cannot detect and several grammar problems.</p>
      </div>
    </div>
  </div>
</div>
