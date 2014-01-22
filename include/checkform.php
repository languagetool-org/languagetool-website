<?php

if (!isset($checkLanguage)) {
    $checkLanguage = array(
        'ast' => 'Asturian',
        'be'  => 'Belarusian',
        'br'  => 'Breton',
        'ca'  => 'Catalan',
        'zh'  => 'Chinese',
        'da'  => 'Danish',
        'nl'  => 'Dutch',
        'en-US'  => 'English',
        'eo'  => 'Esperanto',
        'fr'  => 'French',
        'gl'  => 'Galician',
        'de-DE'  => 'German',
        'el'  => 'Greek',
        'is'  => 'Icelandic',
        'it'  => 'Italian',
        'ja'  => 'Japanese',
        'km'  => 'Khmer',
        'lt'  => 'Lithuanian',
        'ml'  => 'Malayalam',
        'pl'  => 'Polish',
        'pt'  => 'Portuguese',
        'ro'  => 'Romanian',
        'ru'  => 'Russian',
        'sk'  => 'Slovak',
        'sl'  => 'Slovenian',
        'es'  => 'Spanish',
        'sv'  => 'Swedish',
        'tl'  => 'Tagalog',
        'uk'  => 'Ukrainian'
    );
}

function printLangOption($langCode) {
    global $checkDefaultLang;
    global $checkLanguage;
    
    //print "checkDefaultLang: $checkDefaultLang";

    if (strpos($langCode, '-') !== false) {
        // e.g. de-DE
        $shortLangCode = substr($langCode, 0, strpos($langCode, '-'));
        $checked = ($shortLangCode == $checkDefaultLang) ? " selected='selected'" : "";
    } else {
        $checked = ($langCode == $checkDefaultLang) ? " selected='selected'" : "";
    }

    $lang = $checkLanguage[$langCode];
    print "<option value=\"$langCode\" $checked>$lang</option>\n";
}
?>

<noscript class="warning">Please turn on Javascript to use this form, or use <a href="simple-check/">the fallback form</a></noscript>

<form id="checkform" class="" name="checkform" action="#" method="post">
    <div id="handle"><div id="feedbackMessage"></div></div>
    <div class="window">
        <div class="fullscreen-toggle">
            <a href="#" title="toggle fullscreen mode" onClick="fullscreen_toggle();return false;"></a>
        </div>
        <p id="checktextpara" style="margin: 0">
            <?php
            require_once("default_texts.php");
            $checkDefaultText = getDefaultDemoText($checkDefaultLang);
            if ($checkDefaultLang == "") {
                // fallback to English:
                $checkDefaultLang = "en";
                $checkDefaultText = getDefaultDemoText("en");
            }
            ?>
            <textarea id="checktext" name="text" style="width: 100%" rows="10"><?= $checkDefaultText ?></textarea>
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
                        <?php
                        foreach ($checkLanguage as $key => $val) {
                            printLangOption($key);
                        }
                        ?>
                    </select>
            </div>
            <div class="submit">
                <input type="submit" name="_action_checkText" value="<?= $checkSubmitButtonValue ?>" 
                       onClick="doit();return false;" title="<?= $checkSubmitButtonTitle ?>">
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
</form>
