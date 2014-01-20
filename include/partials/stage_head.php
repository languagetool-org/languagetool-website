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
    $languagesWithPage = array("br", "ca", "zh", "eo", "fr", "de", "it", "pl", "ru", "pt");
    $languageNamesWithPage = array("Breton", "Catalan", "Chinese", "Esperanto", "French", "German", "Italian", "Polish", "Russian", "Portuguese");
    $content = "";
    foreach ($languagesWithPage as $i => $value) {
        if ($value == $checkDefaultLang || substr($defaultLang, 0, 3) == $value."-") {
            $langName = $languageNamesWithPage[$i];
            switch ($langName) {
                case "Breton":
                    $content = "Ur <a href='$value/'>bajenn vrezhonek</a> hon eus ivez.";
                    break;
                case "Esperanto":
                    $content = "Ni ankaŭ havas <a href='$value/'>hejmpaĝon en Esperanto</a>.";
                    break;
                case "French":
                    $content = "Nous avons aussi une <a href='$value/'>page en français</a>.";
                    break;
                case "German":
                    $content = "Es gibt auch eine <a href='$value/'>Seite auf Deutsch</a>.";
                    break;
                case "Italian":
                    $content = "Abbiamo anche una <a href='$value/'>pagina in italiano</a>.";
                    break;
                case "Catalan":
                    $content = "També tenim una <a href='$value/'>pàgina en català</a>.";
                    break;
                case "Russian":
                    $content = "Внимание: у нас есть <a href='$value/'>страничка на русском языке</a>!";
                    break;
                case "Portuguese":
                    $content = "Também temos uma <a href='$value/'>página em Português</a>.";
                    break;
                default;
                    $content = "We also have a <a href='$value/'>page in $langName</a>.";
            }
        }
    }
    if ($content != "") {
        # TODO: comment in
        #print "<div class='languageHomepage'>$content</div>";
    }
    ?>
    </div>
  </div>
  <div id="text">
    
    <p><strong>LanguageTool</strong> is an Open Source proof&shy;reading soft&shy;ware for English, French, German, Polish, and more than <a href="languages/">20 other languages</a>.</p>
    <p class="small">It finds many errors that a simple spell checker cannot detect and several grammar problems.</p>

  </div>
  <div style="clear:both;"></div>
</div>
</div>
