<?php include("partials/nav.php"); ?>
<?php include("partials/banner.php"); ?>

<div id="detectedLanguage"></div>

<div id="stage" class="start">
    <div class="inner">
      <div id="text">

          <p><?= $introText1 ?></p>
          <?php if(isset($contributeLink)) { ?>
              <p class="small"><a href="../contribute/"><?= $contributeLink ?></a></p>
          <?php } ?>

          <?php if (rand(0, 1) > 0.25) { ?>
              <div id="addToBrowser">
                  <a href="#" onclick="contactForm();return false;">LanguageTool in Ihrer Firma nutzen?<span>&nbsp;&nbsp;Kontaktieren Sie uns</span></a>
              </div>
          <?php } else { ?>
              <?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Chrome/") !== false && strpos($_SERVER['HTTP_USER_AGENT'], "Android") === false) { ?>
                  <div id="addToBrowser">
                      <a onclick="return installChromeExtension('calltoaction')"
                         href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji"
                      >
                          <?= isset($addToChrome) ? $addToChrome : 'Add to Chrome <span>free, no sign up required</span>' ?>
                  </div>
                  <?php
              } else if (strpos($_SERVER['HTTP_USER_AGENT'], "Firefox/") !== false && strpos($_SERVER['HTTP_USER_AGENT'], "Android") === false) { ?>
                  <div id="addToBrowser">
                      <a target="_blank" href="https://addons.mozilla.org/firefox/addon/languagetool/?src=external-lt-homepage">
                          <?= isset($addToFirefox) ? $addToFirefox : 'Add to Firefox <span>free, no sign up required</span>' ?>
                  </div>
              <?php } ?>
          <?php } ?>           

      </div>
        <div id="editor">
            <div class="inner">
                <?php include("checkform.php"); ?>
                <div id='maintainedInfo' class='languageHomepage'></div>
            </div>
            <div id="text2">
                <p class="small"><?= $introText2 ?></p>
                <?php include("partials/sub-checkform.php"); ?>
            </div>
        </div>
    </div>
</div>

<?php include("pages/downloads.php"); ?>
