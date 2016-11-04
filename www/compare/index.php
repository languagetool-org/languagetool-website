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
    $yes = "<img src='../images/check.png' alt='yes'>";
    $no = "<img src='../images/cancel.png' alt='no'>";
    ?>
    <table style="">
        <tr>
            <th style="width:20%"></th>
            <th style="width:16%">languagetool.org</th>
            <th style="width:16%">LanguageTool for Firefox</th>
            <th style="width:16%">LanguageTool for Chrome</th>
            <th style="width:16%">LanguageTool for LibreOffice/OpenOffice</th>
            <th style="width:16%">LanguageTool stand-alone</th>
        </tr>
        <tr>
            <th>Min. Requirements</th>
            <td class="cell">any recent browser</td>
            <td class="cell">Firefox 48</td>
            <td class="cell">current Chrome</td>
            <td class="cell">
                LibreOffice/OpenOffice 4.0 +
                <a href="https://www.java.com/en/download/">Java 8</a>
            </td>
            <td class=cell"><a href="https://www.java.com/en/download/">Java 8</a></td>
        </tr>
        <tr>
            <th>Works offline</th>
            <td class="cell" colspan="3"><?=$no?><span class="light"><br>text sent to languagetool.org<br>over encrypted connection</span></td>
            <td class="cell" colspan="2"><?=$yes?><span class="light"><br>no text sent over the internet<br>&nbsp;</span></td>
        </tr>
        <tr>
            <th>Automatically uses latest error detection rules</th>
            <td class="cell" colspan="3"><?=$yes?></td>
            <td class="cell" colspan="2"><?=$no?></td>
        </tr>
        <tr>
            <th>Additional homophone rules for English, German, Spanish, French</th>
            <td class="cell" colspan="3"><?=$yes?><br>&nbsp;</td>
            <td class="cell" colspan="2"><?=$no?><span class="light"><br>only when <a href="http://wiki.languagetool.org/finding-errors-using-n-gram-data">installed manually</a></span></td>
        </tr>
    </table>

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
