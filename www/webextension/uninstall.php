<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "Uninstallation successful";
    ?>
    <?php include("../../include/header.php"); ?>
    <script>
        function checkLength() {
            var textArea = document.getElementById("message");
            if (textArea.value.length < 15) {
                alert("Please be more specific and describe *exactly* what the issue was");
                return false;
            }
            return true;
        }
        function show(id, messageFieldId) {
            hide('site-fail-detail', 'message1');
            hide('error-not-found-detail', 'message2');
            hide('too-many-false-alarms-detail', 'message3');
            hide('something-else-detail', 'message4');
            var elem = document.getElementById(id);
            if (elem) {
                elem.style.display = 'block';
                document.getElementById(messageFieldId).required = true;
            }
        }
        function hide(id, messageFieldId) {
            var elem = document.getElementById(id);
            if (elem) {
                elem.style.display = 'none';
                document.getElementById(messageFieldId).required = false;
            }
        }
    </script>
    <style>
        .detail {
            margin-left: 20px;
            display: none;
        }
        .detailBox {
            width: 300px;
            height: 100px
        }
        .detailInput {
            width: 400px;
        }
        #Smallchat iframe {
            right: auto !important;
            left: 40% !important;
            top: 210px !important;
        }
    </style>
    <script src="https://embed.small.chat/T7AHSH8BGG7928QAAC.js" async></script>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Uninstallation successful</h1>

    <p>Sorry to see you've uninstalled our extension. Please
    <noscript>email the developer (turn on Javascript to see the email address)</noscript>
    <script>
        <!--
        var firstPart = "daniel.naber";
        var lastPart = "languagetool.org";
        document.write("<a href='mail" + "to:" + firstPart + "@" + lastPart + "'>email the developer<" + "/a>");
        // -->
    </script>
    if there was a problem. We'd like to fix it.</p>

    <p>You can always use the latest version of LanguageTool without installing
        anything on <a href="/">our homepage</a>.</p>
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
