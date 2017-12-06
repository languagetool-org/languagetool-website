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
            if (typeof(_paq) !== 'undefined') {
                // Piwik tracking
                _paq.push(['trackEvent', 'UninstallFeedback', document.querySelector('input[name="reason"]:checked').value]);
            }
            setTimeout(function() {
                document.getElementById("mainform").submit();
            }, 500);
            return false;
        }
        function show(id, messageFieldId) {
            hide('site-fail-detail', 'message1');
            hide('error-not-found-detail', 'message2');
            hide('too-many-false-alarms-detail', 'message3');
            hide('something-else-detail', 'message4');
            hide('browser-slow-down-detail', 'message5');
            var elem = document.getElementById(id);
            if (elem) {
                elem.style.display = 'block';
                //document.getElementById(messageFieldId).required = true;
                document.getElementById(messageFieldId).focus();
            }
        }
        function hide(id, messageFieldId) {
            var elem = document.getElementById(id);
            if (elem) {
                elem.style.display = 'none';
                //document.getElementById(messageFieldId).required = false;
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
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Uninstallation successful</h1>

    <?php if (isset($_GET['lastUsedOn'])) { ?>
        We’re sorry to see you’ve uninstalled our extension. It seems you last used it on
        <?= htmlspecialchars($_GET['lastUsedOn']) ?> - was the issue that made you uninstall
        the add-on related to that site? Please let us know below:
    <?php } else { ?>
        <p>We’re sorry to see you’ve uninstalled our extension. It would be great if you told us the 
            reason for your decision, so that we can fix it and improve LanguageTool:</p>
    <?php } ?>
        
    <form id="mainform" action="submit-feedback.php" method="post" onsubmit="return checkLength()">
        <input id="version" name="version" type="hidden" value="<?= htmlspecialchars($_GET['version']) ?>">
        <?php if (isset($_GET['usageCounter'])) { ?>
            <input id="usageCounter" name="usageCounter" type="hidden" value="<?= intval($_GET['usageCounter']) ?>">
        <?php } else { ?>
            <input id="usageCounter" name="usageCounter" type="hidden" value="-1">
        <?php } ?>
        
        <label><input name="reason" value="site-fail" type="radio" onclick="show('site-fail-detail', 'message1')"> it did not work on a site I use, e.g.:</label><br>
        <div id="site-fail-detail" class="detail">
            <?php if (isset($_GET['lastUsedOn'])) { ?>
                <input class="detailInput" id="message1" name="message1" value="<?= htmlspecialchars($_GET['lastUsedOn']) ?>"><br>
            <?php } else { ?>
                <input class="detailInput" id="message1" name="message1" placeholder="Link to the site that didn't work"><br>
            <?php } ?>
        </div>

        <label><input name="reason" value="checking-too-slow" type="radio"> the checking is too slow</label><br>
        
        <label><input name="reason" value="browser-slow-down" type="radio" onclick="show('browser-slow-down-detail', 'message5')"> it slows down my browser</label><br>
        <div id="browser-slow-down-detail" class="detail">
            We're currently debugging whether other add-ons can cause these slowdowns.<br>Please let us know what other add-ons you're using:<br>
            <textarea class="detailBox" id="message5" name="message5"></textarea><br>
        </div>

        <label><input name="reason" value="error-not-found" type="radio" onclick="show('error-not-found-detail', 'message2')"> it did not find errors like this one:</label><br>
        <div id="error-not-found-detail" class="detail">
            <?php if (isset($_GET['usageCounter']) && intval($_GET['usageCounter']) < 5) { ?>
            It seems you haven't used the add-on much yet - we recommend using it at least
            for a few days. If you only tried checking a few artificial errors that you deliberately entered,
            it might not work, as those kinds of errors are often not the errors people really make.
            Anyway, please provide an example of an error that was not found:
            <br>
            <?php } ?>
            <textarea class="detailBox" id="message2" name="message2" placeholder="Please add the text for which no errors where found"></textarea><br>
        </div>

        <label><input name="reason" value="too-many-false-alarms" type="radio" onclick="track('too-many-false-alarms');show('too-many-false-alarms-detail', 'message3')"> found too many 'errors' that are not really errors, e.g.:</label><br>
        <div id="too-many-false-alarms-detail" class="detail">
            <textarea class="detailBox" id="message3" name="message3" placeholder="Please the text for which incorrect errors were reported"></textarea><br>
        </div>

        <label><input name="reason" value="something-else" type="radio" onclick="show('something-else-detail', 'message4')"> something else:</label><br>
        <div id="something-else-detail" class="detail">
            <textarea class="detailBox" id="message4" name="message4" placeholder="Please describe exactly what didn't work. 'It does not work' is not a useful feedback, unfortunately."></textarea><br>
        </div>
        <br>
        <div style="width:500px">
            <b>Please provide contact information</b> (e.g. email) so we can contact you in case we have questions.
            We promise we will only contact you about your feedback and will not send you any newsletters:
            <input style="width:300px" type="text" name="email" placeholder="you@provider.org">
        </div>
        <input style="margin-top: 10px;margin-bottom: 15px" type="submit" value="Submit feedback">
    </form>
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
