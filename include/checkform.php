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
    <textarea onfocus="javascript: if(document.checkform.text.value == '<?php print $checkDefaultText ?>') { document.checkform.text.value='' } " 
        style="width:100%; height:100px" name="text"><?php print $checkDefaultText ?></textarea>
    <div style="margin-top:4px; text-align: right">
        <?php if ($showLanguageBox) { ?>
            Language: <select name="lang" id="lang" >
            <option value="auto">try to auto-detect</option>
            <?php printLangOption("ast", "Asturian") ?>
            <?php printLangOption("be", "Belarusian") ?>
            <?php printLangOption("br", "Breton") ?>
            <?php printLangOption("ca", "Catalan") ?>
            <?php printLangOption("zh", "Chinese") ?>
            <?php printLangOption("da", "Danish") ?>
            <?php printLangOption("nl", "Dutch") ?>
            <?php printLangOption("en", "English") ?>
            <?php printLangOption("eo", "Esperanto") ?>
            <?php printLangOption("fr", "French") ?>
            <?php printLangOption("gl", "Galician") ?>
            <?php printLangOption("de", "German") ?>
            <?php printLangOption("is", "Icelandic") ?>
            <?php printLangOption("it", "Italian") ?>
            <?php printLangOption("km", "Khmer") ?>
            <?php printLangOption("lt", "Lithuanian") ?>
            <?php printLangOption("ml", "Malayalam") ?>
            <?php printLangOption("pl", "Polish") ?>
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
        <input style="margin-left: 10px" type="submit" name="_action_checkText" value="<?php print $checkSubmitButtonValue ?>"/>
    </div>
</form>
