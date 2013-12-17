<?php if ($requestPage == 'start') { ?>
  <div id="stage" class="start">
    <div class="inner">
      <div id="editor">
        <div class="inner">
          <?php
            $checkSubmitButtonValue = "Check Text";
            $showLanguageBox = 1;
            $checkDefaultLang = "en-US";
            $checkDefaultText = "Paste your own text here... or check this text too see an few of of the problems that LanguageTool can detecd.";
            include("../include/checkform.php");
          ?>
        </div>
      </div>
      <div id="text">
        <?php
          $content = array(
            'en' => array(
              '<strong>LanguageTool</strong> is an Open Source proofreading software for English, French, German, Polish, and more than 20 other languages.',
              'It finds many errors that a simple spell checker cannot detect like mixing up there/their and it detects some grammar problems.'
            ),
            'pl' => array(
              'LanguageTool to wolnodostępne narzędzie korektorskie, które oprócz języka polskiego obsługuje jeszcze 25 innych języków.',
              ''
            )
          );
        ?>
        <!--<p>
          <?php print $content[$currentLang][0]; ?>
        </p>
        <p class="small">
          <?php print $content[$currentLang][1]; ?>
        </p>-->
        
        <p><strong>LanguageTool</strong> is an Open Source proofreading software for English, French, German, Polish, and more than 20 other languages.</p>
        <p class="small">It finds many errors that a simple spell checker cannot detect and several grammar problems.</p>

      </div>
      <div style="clear:both;"></div>
    </div>
  </div>
<?php } ?>

<?php if ($requestPage == 'screenshots') { ?>
  <div id="stage" class="download">
    <div class="inner">
      <div id="text">
        <p>
          TODO: add text here
        </p>
        <p class="small">
            TODO: add more text here
        </p>
      </div>
      <div id="image">
        <img src="<?php print $rootUrl; ?>/images/screenshot.png">
      </div>
      <div style="clear:both;"></div>
    </div>
  </div>
<?php } ?>
