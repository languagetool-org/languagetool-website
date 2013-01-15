<?php
function printLangOption($langCode) {
    global $checkDefaultLang;
    global $checkLanguage;

    $checked = ($langCode == $checkDefaultLang) ? " selected='selected'" : "";

    if (isset($checkLanguage[$langCode])) {
      // User defined translation.
      $lang = $checkLanguage[$langCode];
    } else {
      // No user defined translation -> default to language names in English.
      switch ($langCode) {
      case 'ast':   $lang = 'Asturian';   break;
      case 'be':    $lang = 'Belarusian'; break;
      case 'br':    $lang = 'Breton';     break;
      case 'ca':    $lang = 'Catalan';    break;
      case 'zh':    $lang = 'Chinese';    break;
      case 'da':    $lang = 'Danish';     break;
      case 'nl':    $lang = 'Dutch';      break;
      case 'en-US': $lang = 'English';    break;
      case 'eo':    $lang = 'Esperanto';  break;
      case 'fr':    $lang = 'French';     break;
      case 'gl':    $lang = 'Galician';   break;
      case 'de-DE': $lang = 'German';     break;
      case 'is':    $lang = 'Icelandic';  break;
      case 'it':    $lang = 'Italian';    break;
      case 'km':    $lang = 'Khmer';      break;
      case 'lt':    $lang = 'Lithuanian'; break;
      case 'ml':    $lang = 'Malayalam';  break;
      case 'pl':    $lang = 'Polish';     break;
      case 'pt':    $lang = 'Portuguese'; break;
      case 'ro':    $lang = 'Romanian';   break;
      case 'ru':    $lang = 'Russian';    break;
      case 'sk':    $lang = 'Slovak';     break;
      case 'sl':    $lang = 'Slovenian';  break;
      case 'es':    $lang = 'Spanish';    break;
      case 'sv':    $lang = 'Swedish';    break;
      case 'tl':    $lang = 'Tagalog';    break;
      case 'uk':    $lang = 'Ukrainian';  break;

      default:      $lang = 'Automatic';  break;
      }
    }
    print "<option value=\"$langCode\" $checked>$lang</option>\n";
}
?>

<form name="checkform" action="http://community.languagetool.org" method="post">

  <p id="checktextpara"><textarea id="checktext" name="text" style="width: 100%"
               rows="6"><?php print $checkDefaultText ?></textarea></p>

  <div style="margin-top:0px; text-align: right">
    <!-- always activate language selection box as we don't have feedback yet about which language was auto-detected -->
    <?php if (1 || $showLanguageBox) { ?>
      <select name="lang" id="lang" >
          <!--<option value="auto">try to auto-detect</option>-->
          <?php printLangOption("ast") ?>
          <?php printLangOption("be") ?>
          <?php printLangOption("br") ?>
          <?php printLangOption("ca") ?>
          <?php printLangOption("zh") ?>
          <?php printLangOption("da") ?>
          <?php printLangOption("nl") ?>
          <?php printLangOption("en-US") ?>
          <?php printLangOption("eo") ?>
          <?php printLangOption("fr") ?>
          <?php printLangOption("gl") ?>
          <?php printLangOption("de-DE") ?>
          <?php printLangOption("is") ?>
          <?php printLangOption("it") ?>
          <?php printLangOption("km") ?>
          <?php printLangOption("lt") ?>
          <?php printLangOption("ml") ?>
          <?php printLangOption("pl") ?>
          <?php printLangOption("pt") ?>
          <?php printLangOption("ro") ?>
          <?php printLangOption("ru") ?>
          <?php printLangOption("sk") ?>
          <?php printLangOption("sl") ?>
          <?php printLangOption("es") ?>
          <?php printLangOption("sv") ?>
          <?php printLangOption("tl") ?>
          <?php printLangOption("uk") ?>
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
