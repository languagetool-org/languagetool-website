<?php

  error_reporting(E_ALL);

  // basic configuration
  $page = "homepage";
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

  $languagesWithPage = array("br", "ca", "zh", "eo", "fr", "de", "it", "pl", "ru", "pt");
  $languageNamesWithPage = array("Breton", "Catalan", "Chinese", "Esperanto", "French", "German", "Italian", "Polish", "Russian", "Portuguese");
  $defaultLang = getDefaultLanguage();

  $pages = array('start', 'screenshots');
  
  if (isset($_GET['page'])) {
    if (in_array($_GET['page'], $pages)) {
      $requestPage = htmlspecialchars($_GET['page']);
    } else {
      $requestPage = '404';
    }
  } else {
    $requestPage = 'start';
  }

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

  /* TODO
  foreach ($languagesWithPage as $i => $value) {
      if ($value == $defaultLang || substr($defaultLang, 0, 3) == $value."-") {
        $langName = $languageNamesWithPage[$i];
        print "<div class='alt_lang_message'>";
        switch ($langName) {
          case "Breton":
            print "Remerk: ur <a href='$rootUrl?lang=$value'>bajenn vrezhonek</a> hon eus ivez.";
          break;
          case "Esperanto":
            print "Rimarko: ni ankaŭ havas <a href='$rootUrl?lang=$value'>hejmpaĝon en Esperanto</a>.";
          break;
          case "French":
            print "Remarque : nous avons aussi une <a href='$rootUrl?lang=$value'>page en français</a>.";
          break;
          case "German":
            print "Hinweis: Es gibt auch eine <a href='$rootUrl?lang=$value'>Seite auf Deutsch</a>.";
          break;
          case "Italian":
            print "Nota: abbiamo anche una <a href='$rootUrl?lang=$value'>pagina in italiano</a>.";
          break;
          case "Catalan":
            print "Nota: també tenim una <a href='$rootUrl?lang=$value'>pàgina en català</a>.";
          break;
          case "Russian":
            print "Внимание: у нас есть <a href='$rootUrl?lang=$value'>страничка на русском языке</a>!";
          break;
          case "Portuguese":
            print "Nota: também temos uma <a href='$rootUrl?lang=$value'>página em Português</a>.";
          break;
          default;
            print "Note: we also have a <a href='$rootUrl?lang=$value'>page in $langName</a>.";
        }
        print "</div>";
      }
  }*/

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
