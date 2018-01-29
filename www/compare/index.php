<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "Comparison";
    $title = "Comparison of LanguageTool Editions";
    ?>
    <?php include("../../include/header.php"); ?>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 12px 8px;
            text-align: center;
        }
        .light {
            color: #777777;
        }
    </style>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Comparison of LanguageTool Editions</h1>

    <?php
    $yes = "<img src='../images/check2.png' alt='yes'>";
    $no = "<img src='../images/cancel.png' alt='no'>";
    ?>
    <table style="">
        <tr>
            <th style="width:20%"></th>
            <th style="width:13%">languagetool.org</th>
            <th style="width:13%">LT for Firefox</th>
            <th style="width:13%">LT for Chrome</th>
            <th style="width:13%">LT for Google Docs</th>
            <th style="width:13%">LT for LibreOffice / OpenOffice</th>
            <th style="width:13%">LT stand-alone</th>
        </tr>
        <tr>
            <th>Min. Requirements</th>
            <td class="cell">any recent browser</td>
            <td class="cell">Firefox 57</td>
            <td class="cell">current Chrome</td>
            <td class="cell">Google Docs</td>
            <td class="cell">
                LibreOffice / OpenOffice 4.0 +
                <a href="https://www.java.com/en/download/">Java 8</a>
            </td>
            <td class=cell"><a href="https://www.java.com/en/download/">Java 8</a></td>
        </tr>
        <tr>
            <th>Works offline</th>
            <td class="cell" colspan="4"><?=$no?><span class="light"><br>no, text sent to languagetool.org<br>over encrypted connection</span></td>
            <td class="cell" colspan="2"><?=$yes?><span class="light"><br>yes, no text sent over the internet</span></td>
        </tr>
        <tr>
            <th>Automatically uses latest error detection rules</th>
            <td class="cell" colspan="4"><?=$yes?></td>
            <td class="cell" colspan="2"><?=$no?></td>
        </tr>
        <tr>
            <th>Additional homophone rules for English, German, Spanish, French</th>
            <td class="cell" colspan="4"><?=$yes?><br>&nbsp;</td>
            <td class="cell" colspan="2"><?=$no?><span class="light"><br>only when <a href="http://wiki.languagetool.org/finding-errors-using-n-gram-data">installed manually</a></span></td>
        </tr>
    </table>

    <p>
    <br>
    Looking for more software that integrates LanguageTool?
    <a href="http://wiki.languagetool.org/software-that-supports-languagetool-as-a-plug-in-or-add-on">See this list.</a>    
    </p>
    
    <br>
    <br>
    <br>
    <br>
    <br>

</div>

<?php
include("../../include/footer.php");
?>

</body>
</html>
