<?php
$page = "screenshots";
$title = "LanguageTool";
$title2 = "Screenshots";
$lastmod = "2013-01-03 21:45:00 CET";
$enable_fancybox = 1;
include("../../include/header.php");
?>

<div class="imgboxcontainer">
    <p class="imgbox">
        <a title="LanguageTool installed as an add-on in LibreOffice 3.3" class="fancyboxImage" href="art/screenshot_lo3.png">
        <img src="art/screenshot_lo3_small.png" alt="LanguageTool in LibreOffice 3.3"/>
        </a>
        <br/>
        LanguageTool installed as an add-on in LibreOffice&nbsp;3.3
        <br/>
        <?=show_link("Download LibreOffice", "http://libreoffice.org/", 0) ?>
    </p>
    <p class="imgbox">
        <a title="LanguageTool installed as an add-on in Polish OpenOffice.org 3.0.1" class="fancyboxImage" href="art/screenshot_ooo3_pl.png">
        <img src="art/screenshot_ooo3_pl_small.png" alt="LanguageTool in Polish OpenOffice.org 3.0"/>
        </a>
        <br/>
        LanguageTool installed as an add-on in Polish OpenOffice.org&nbsp;3.0.1
        <br/>
        <?=show_link("Download Apache OpenOffice", "http://openoffice.org/", 0) ?>
    </p>
    <p class="imgbox">
        <a title="The simple stand-alone user interface which lets you type in or paste text and check it" class="fancyboxImage" href="art/screenshot.png">
        <img src="art/screenshot_small.png" alt="stand-alone version of LanguageTool"/>
        </a>
        <br/>
        The simple stand-alone user interface which lets you type in or paste text and check it
        <br/>
        <?=show_link("Download LanguageTool for stand-alone use", "http://languagetool.org/", 0) ?>
    </p>
    <p class="imgbox">
        <a title="LanguageTool may be used to check translations in CheckMate" class="fancyboxImage" href="art/lt-checkmate.png">
        <img src="art/lt-checkmate-small.png" alt="LanguageTool in CheckMate GUI"/>
        </a>
        <br/>
        LanguageTool in the server mode is used in CheckMate to check translations using a comfortable GUI
        <br/>
        <?=show_link("Download CheckMate", "http://www.opentag.com/okapi/wiki/index.php?title=CheckMate", 0) ?>
    </p>
    <p class="imgbox">
        <a title="Check selected text on websites with the Firefox extension" class="fancyboxImage" href="art/lt-thunderbird.png">
        <img src="art/lt-thunderbird_small.png" alt="Grammar Checker Thunderbird extension"/>
        </a>
        <br/>
        Check text in emails with the Grammar Checker extension for <a href="http://mozilla.org/thunderbird/" target="_blank">Mozilla&nbsp;Thunderbird</a>
        <br/>
        <?=show_link("Download Grammar Checker", "https://addons.mozilla.org/thunderbird/addon/grammar-checker/", 0) ?>
    </p>
    <p class="imgbox">
        <a title="Check selected text on websites with the Firefox extension" class="fancyboxImage" href="art/languagetoolfx.png">
        <img src="art/languagetoolfx_small.png" alt="LanguageToolFx Firefox extension"/>
        </a>
        <br/>
        Check text on websites with the extension for <a href="http://mozilla.org/firefox/" target="_blank">Mozilla&nbsp;Firefox</a>
        <br/>
        <?=show_link("Download LanguageToolFx", "https://addons.mozilla.org/firefox/addon/languagetoolfx/", 0) ?>
    </p>
    <p class="imgbox">
        <a title="The simple LanguageTool plugin in OmegaT that helps to check your translation on the go" class="fancyboxImage" href="art/lt-omegat.png">
        <img src="art/lt-omegat_small.png" alt="LanguageTool plugin in OmegaT"/>
        </a>
        <br/>
        The simple LanguageTool plugin in <a href="http://omegat.org/" target="_blank"/>OmegaT</a> that helps to check your translation on the go
        <br/>
        <?=show_link("Download plugin for OmegaT", "https://sourceforge.net/projects/omegat-plugins/files/OmegaT-LanguageTool/", 0) ?>
    </p>
    <p class="imgbox">
        <a title="Check text in Vim" class="fancyboxImage" href="art/lt-vim.png">
        <img src="art/lt-vim.png" alt="Grammar Checker plugin for Vim"/>
        </a>
        <br/>
        Check text within the <a href="http://www.vim.org" target="_blank">Vim text editor</a>
        <br/>
        <?=show_link("Download the Vim LanguageTool plugin", "http://www.vim.org/scripts/script.php?script_id=3223", 0) ?>
    </p>
</div>

<?php
include("../../include/footer.php");
?>
