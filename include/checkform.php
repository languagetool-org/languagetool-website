<?php
function printLangOption($langCode, $lang) {
    global $checkDefaultLang;
    $checked = "";
    if ($langCode == $checkDefaultLang) {
        $checked = " selected='selected'";
    }
    print "<option value=\"$langCode\" $checked>$lang</option>\n";
}
?>

<form name="checkform" action="http://community.languagetool.org" method="post">
        
  <p><textarea name="text" style="width: 100%" 
               rows="6"><?php print $checkDefaultText ?></textarea></p>
        
  <div style="margin-top:0px; text-align: right">
    <!-- always activate language selection box as we don't have feedback yet about which language was auto-detected -->
    <?php if (1 || $showLanguageBox) { ?>
      <select name="lang" id="lang" >
          <!--<option value="auto">try to auto-detect</option>-->
          <?php printLangOption("ast", "Asturian") ?>
          <?php printLangOption("be", "Belarusian") ?>
          <?php printLangOption("br", "Breton") ?>
          <?php printLangOption("ca", "Catalan") ?>
          <?php printLangOption("zh", "Chinese") ?>
          <?php printLangOption("da", "Danish") ?>
          <?php printLangOption("nl", "Dutch") ?>
          <?php printLangOption("en-US", "English") ?>
          <?php printLangOption("eo", "Esperanto") ?>
          <?php printLangOption("fr", "French") ?>
          <?php printLangOption("gl", "Galician") ?>
          <?php printLangOption("de-DE", "German") ?>
          <?php printLangOption("is", "Icelandic") ?>
          <?php printLangOption("it", "Italian") ?>
          <?php printLangOption("km", "Khmer") ?>
          <?php printLangOption("lt", "Lithuanian") ?>
          <?php printLangOption("ml", "Malayalam") ?>
          <?php printLangOption("pl", "Polish") ?>
          <?php printLangOption("pt", "Portuguese") ?>
          <?php printLangOption("ro", "Romanian") ?>
          <?php printLangOption("ru", "Russian") ?>
          <?php printLangOption("sk", "Slovak") ?>
          <?php printLangOption("sl", "Slovenian") ?>
          <?php printLangOption("es", "Spanish") ?>
          <?php printLangOption("sv", "Swedish") ?>
          <?php printLangOption("tl", "Tagalog") ?>
          <?php printLangOption("uk", "Ukrainian") ?>
      </select>
    <?php } else { ?>
        <input type="hidden" name="lang" value="<?php print $checkDefaultLang ?>"/> 
    <?php } ?>
    <input type="submit" name="_action_checkText" value="<?php print $checkSubmitButtonValue ?>" onClick="doit();return false;">
  </div>
  
</form>

<script language="javascript" type="text/javascript">
/*var languageCode = window.navigator.userLanguage || window.navigator.language;
if (document.checkform.lang.value) {
  for (var i = 0; i < document.checkform.lang.options.length; i++) {
    if (document.checkform.lang.options[i].value == languageCode) {
      document.checkform.lang.value = languageCode;
      break;
    }
  }
  if (languageCode == 'de-DE') {
    document.checkform.text.value = "Fügen Sie hier Ihren Text ein. oder nutzen Sie. diesen Text als Biespiel für ein Paar Fehler ,die LanguageTool erkennen kann: Nachdem wir die ABM-Maßnahme bemängelten, wurden die Problem sofort behoben. Ihm wurde Angst und bange, als er davon hörte.";
    //document.checkform.text.value = "Fügen Sie hier Ihren Text<br/>nein. oder nutzen Sie. diesen Text als<br/>Biespiel.";
    document.checkform.lang.value = "de-DE";
  }
}*/
</script>
