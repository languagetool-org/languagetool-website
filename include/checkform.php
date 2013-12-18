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
            case 'de-DE-x-simple-language':
                $lang = 'Deutsch, Leichte Sprache'; break;
            case 'is':    $lang = 'Icelandic';  break;
            case 'it':    $lang = 'Italian';    break;
            case 'ja':    $lang = 'Japanese';   break;
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

<noscript class="warning">Please turn on Javascript to use this form, or use <a href="simple-check/">the fallback form</a></noscript>

<form id="checkform" class="" name="checkform" action="#" method="post">
    <div class="handle"></div>
    <div class="window">
        <!-- TODO: comment in once problem with error popup position is solved:
        <div class="fullscreen-toggle">
            <a href="#" title="toggle fullscreen mode" onClick="fullscreen_toggle();return false;"></a>
        </div>
        -->
        <p id="checktextpara" style="margin: 0">
            <textarea id="checktext" name="text" style="width: 100%" rows="10"><?php print $checkDefaultText ?></textarea>
        </p>
        <div id="editor_controls">
            <!--
            <div class="message">
                <?php if ($checkDefaultLang == "en-US") { ?>
                    Error not found? <a href="http://wiki.languagetool.org/development-overview#toc0">Improve LanguageTool by writing rules that detect errors</a>. The form doesn't work for you? Please use <a href="simple-check/">the fallback form</a>.
                <?php } ?>
            </div>
            -->
            <div class="dropdown">
                    <select class="dropkick" name="lang" id="lang">
                        <?php foreach ($addedLanguages as $key => $val) { ?>
                            <?php printLangOption($key) ?>
                        <?php } ?>
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
                        <?php printLangOption("ja") ?>
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
            </div>
            <div class="submit">
                <input type="submit" name="_action_checkText" value="<?php print $checkSubmitButtonValue ?>" onClick="doit();return false;">
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
</form>
