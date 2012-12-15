<?php
$page = "screenshots";
$title = "LanguageTool";
$title2 = "Screenshots";
$lastmod = "2012-12-15 22:25:00 CET";
$enable_fancybox = 1;
include("../../include/header.php");

<div class="imgboxcontainer">
    <p class="imgbox">
        <a title="LanguageTool installed as an add-on in LibreOffice 3.3" class="fancyboxImage" href="art/screenshot_lo3.png">
        <img src="art/screenshot_lo3_small.png" alt="LanguageTool in LibreOffice 3.3"/>
        </a>
        <br/>
        <a href="art/screenshot_lo3.png">LanguageTool installed as an add-on in LibreOffice 3.3</a>
        <br/>
        <?=show_link("Download LibreOffice", "http://libreoffice.org/", 0) ?>
    </p>
    <p class="imgbox">
        <a title="LanguageTool installed as an add-on in Polish OpenOffice.org 3.0.1" class="fancyboxImage" href="art/screenshot_ooo3_pl.png">
        <img src="art/screenshot_ooo3_pl_small.png" alt="LanguageTool in Polish OpenOffice.org 3.0"/>
        </a>
        <br/>
        <a href="art/screenshot_ooo3_pl.png">LanguageTool installed as an add-on in Polish OpenOffice.org 3.0.1</a>
        <br/>
        <?=show_link("Download Apache OpenOffice", "http://openoffice.org/", 0) ?>
    </p>
    <p class="imgbox">
        <a title="The simple stand-alone user interface which lets you type in or paste text and check it" class="fancyboxImage" href="art/screenshot.png">
        <img src="art/screenshot_small.png" alt="stand-alone version of LanguageTool"/>
        </a>
        <br/>
        <a href="art/screenshot.png">The simple stand-alone user interface which lets you type in or paste text and check it</a>
        <br/>
        <?=show_link("Download LanguageTool for stand-alone use", "http://languagetool.org/", 0) ?>
    </p>
    <p class="imgbox">
        <a title="The simple LanguageTool plugin in OmegaT that helps to check your translation on the go" class="fancyboxImage" href="art/lt-omegat.png">
        <img src="art/lt-omegat_small.png" alt="LanguageTool plugin in OmegaT"/>
        </a>
        <br/>
        <a href="art/lt-omegat.png">The simple LanguageTool plugin in OmegaT that helps to check your translation on the go</a>
        <br/>
        <?=show_link("Download OmegaT", "http://omegat.org/", 0) ?>
    </p>
    <p class="imgbox">
        <a title="LanguageTool may be used to check translations in CheckMate" class="fancyboxImage" href="art/lt-checkmate.png">
        <img src="art/lt-checkmate-small.png" alt="LanguageTool in CheckMate GUI"/>
        </a>
        <br/>
        <a href="art/lt-checkmate.png">LanguageTool in the server mode is used in CheckMate to check translations using a comfortable GUI</a>
        <br/>
        <?=show_link("Download CheckMate", "http://www.opentag.com/okapi/wiki/index.php?title=CheckMate", 0) ?>
    </p>
</div>

<?php
include("../../include/footer.php");
?>
