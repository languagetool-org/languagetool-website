<?php
  error_reporting(E_ALL);

  $page = "Home";
  $title = "LanguageTool Style and Grammar Check";
  $rootUrl = "";

  $enable_tablesorter = 0;
  $enable_fancybox = 1;
  $enable_textcheck = 1;
  $enable_download_dialogs = 1;

  include("../include/browser_language.php");
  $checkDefaultLang = getDefaultLanguage();
  $checkDefaultLangWithCountry = getDefaultLanguageAndCountry();
  //$checkDefaultLang = "en";  // comment in for testing

  $currentLang = 'en';
  
  $isProofreadingTest = false;
  if ($checkDefaultLang == 'en') {
    if (isset($_COOKIE["proofreading_test"])) {
      $isProofreadingTest = $_COOKIE["proofreading_test"] == '1';
    } else {
      $cookieValue = time() % 2 == 1 ? "1" : "0";
      setcookie("proofreading_test", $cookieValue, time() + 60*60*24*365);
      $isProofreadingTest = $cookieValue == '1';
    }
  }
?>
<!doctype html>
<html lang=en>
  <head>
    <?php include("../include/header.php"); ?>
  </head>
  <body>
    <?php include("../include/partials/nav.php"); ?>
    <?php include("../include/partials/stage_head.php"); ?>
    <div id="content">
      <?php include("../include/pages/downloads.php"); ?>
      <?php include("../include/partials/start_actions.php"); ?>
    </div>
    <?php include("../include/footer.php"); ?>
  </body>
</html>
