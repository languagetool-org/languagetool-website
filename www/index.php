<?php

  error_reporting(E_ALL);

  // basic configuration
  $page = "Home";
  $title = "LanguageTool";
  $title2 = "Style and Grammar Checker";
  $lastmod = "2013-09-30 14:00:00 CET";
  //$rootUrl = "http://janoelze.de/projects/languagetool-website/www";
  $rootUrl = "";

  $enable_tablesorter = 0;
  $enable_fancybox = 1;
  $enable_textcheck = 1;
  $enable_download_dialogs = 1;

  include("../include/browser_language.php");

  $checkDefaultLang = getDefaultLanguage();
  //$checkDefaultLang = "en";  // comment in for testing

  $currentLang = 'en';

  // here we are getting the lang either from
  // the URL parameter or the cookie
  if (isset($_GET['lang'])) {
    $lang = htmlspecialchars($_GET['lang']);
    setcookie("lang", $lang);
    header('Location: ' . $rootUrl);
  } elseif (isset($_COOKIE['lang'])) {
    $currentLang = htmlspecialchars($_COOKIE['lang']);
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
