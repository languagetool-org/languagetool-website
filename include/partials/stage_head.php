<div id="stage" class="start">
<div class="inner">
  <div id="editor">
    <div class="inner">
      <?php
        $checkSubmitButtonValue = "Check Text";
        $checkSubmitButtonTitle = "Check text - you can also use Ctrl+Return";
        include("../include/checkform.php");
      ?>
    <?php
    $languagesWithMaintainerNeed = array(
        "be" => "Belarusian",
        "da" => "Danish",
        "en" => "English",
        "gl" => "Galician",
        "is" => "Icelandic",
        "ja" => "Japanese",
        "lt" => "Lithuanian",
        "ml" => "Malayalam",
        "pt" => "Portuguese",
        "ro" => "Romanian",
        "sv" => "Swedish",
        "zh" => "Chinese"
    );
    $languagesWithPage = array("br", "ca", "zh", "eo", "fr", "de", "it", "pl", "ru", "pt", "es");
    $content = "";
    $defaultLang = getDefaultLanguage();
    foreach ($languagesWithMaintainerNeed as $langCode => $langName) {
        if ($langCode == $defaultLang) {
            $content = "<a href='http://wiki.languagetool.org/make-languagetool-better'>We're looking for a maintainer to improve support for $langName!</a>";
        }
    }
    foreach ($languagesWithPage as $i => $value) {
        if ($value == $checkDefaultLang) {
            switch ($value) {
                case "br":
                    $content = "Ur <a href='$value/'>bajenn vrezhonek</a> hon eus ivez.";
                    break;
                case "eo":
                    $content = "Ni ankaŭ havas <a href='$value/'>hejmpaĝon en Esperanto</a>.";
                    break;
                case "fr":
                    $content = "Nous avons aussi une <a href='$value/'>page en français</a>.";
                    break;
                case "de":
                    $content = "<a href='$value/'>Informationen zu LanguageTool auf Deutsch</a>";
                    break;
                case "it":
                    $content = "Abbiamo anche una <a href='$value/'>pagina in italiano</a>.";
                    break;
                case "ca":
                    $content = "També tenim una <a href='$value/'>pàgina en català</a>.";
                    break;
                case "ru":
                    $content = "Внимание: у нас есть <a href='$value/'>страничка на русском языке</a>!";
                    break;
                case "pt":
                    $content = "Também temos uma <a href='$value/'>página em Português</a>.";
                    break;
                case "es":
                    $content = "También tenemos uma <a href='$value/'>página en español</a>.";
                    break;
            }
        }
    }
    ?>
    <div id="feedbackErrorMessage"></div>
    <?php
    if ($content != "") {
        print "<div class='languageHomepage'>$content</div>";
    }
    ?>
    </div>
  </div>
  <div id="text">
    
    <p><strong>LanguageTool</strong> is an Open Source proof&shy;reading soft&shy;ware for English, French, German,
        Polish, and more than <a href="languages/">20 other languages</a>.</p>
    <p class="small">It finds many errors that a simple spell checker cannot detect and several grammar problems.</p>

    <p class="small"><a href="contribute/">Contribute!</a></p>

    <p id="noEditorHint" class="small">Make your browser window wider to get a text field
    where you can try out LanguageTool directly.</p>

  </div>
  <div style="clear:both;"></div>
</div>
</div>
