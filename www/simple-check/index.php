<?php
$page = "de";
$title = "LanguageTool";
$title2 = "Style and Grammar Checker";
$lastmod = "2013-04-29 18:43:00 CET";
include("../../include/header.php");
?>

<p>Please use this form if the <?=show_link("form on our homepage", "../", 0)?> doesn't work for you
(note: this may use a different version of LanguageTool than the form on the homepage):</p>

<form action="http://community.languagetool.org" method="post">
    <textarea style="width:100%;height:300px;margin-bottom:5px" name="text">Paste your own text here... or check this text too see an few of of the problems that LanguageTool can detecd.</textarea>
    <br/>
    <select name="lang">
        <option value="ast-ES">Asturian</option>
        <option value="be-BY">Belarusian</option>
        <option value="br-FR">Breton</option>
        <option value="ca-ES">Catalan</option>
        <option value="zh-CN">Chinese</option>
        <option value="da-DK">Danish</option>
        <option value="nl">Dutch</option>
        <option value="en-AU">English (Australian)</option>
        <option value="en-CA">English (Canadian)</option>
        <option value="en-GB">English (GB)</option>
        <option value="en-NZ">English (New Zealand)</option>
        <option value="en-ZA">English (South African)</option>
        <option value="en-US" selected="selected">English (US)</option>
        <option value="eo">Esperanto</option>
        <option value="fr">French</option>
        <option value="gl-ES">Galician</option>
        <option value="de-AT">German (Austria)</option>
        <option value="de-AT">German (Germany)</option>
        <option value="de-CH">German (Swiss)</option>
        <option value="el-GR">Greek</option>
        <option value="is-IS">Icelandic</option>
        <option value="it">Italian</option>
        <option value="ja-JP">Japanese</option>
        <option value="km-KH">Khmer</option>
        <option value="lt-LT">Lithuanian</option>
        <option value="ml-IN">Malayalam</option>
        <option value="pl-PL">Polish</option>
        <option value="pt-BR">Portuguese (Brazil)</option>
        <option value="pt-PT">Portuguese (Portugal)</option>
        <option value="ro-RO">Romanian</option>
        <option value="ru-RU">Russian</option>
        <option value="de-DE-x-simple-language-DE">Simple German</option>
        <option value="sk-SK">Slovak</option>
        <option value="sl-SI">Slovenian</option>
        <option value="es">Spanish</option>
        <option value="sv">Swedish</option>
        <option value="tl-PH">Tagalog</option>
        <option value="uk-UA">Ukrainian</option>
    </select>
    <input type="submit" name="_action_checkText" value="Check Text"/>
</form>

<?php
include("../../include/footer.php");
?>
