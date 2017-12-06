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
        }
    </script>
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
        
        <label><input name="reason" value="site-fail" type="radio" onclick="show('site-fail-detail', 'message1')"> it did not work on a site I use</label><br>
        <label><input name="reason" value="checking-too-slow" type="radio"> the checking is too slow</label><br>
        <label><input name="reason" value="browser-slow-down" type="radio" onclick="show('browser-slow-down-detail', 'message5')"> it slows down my browser</label><br>
        <label><input name="reason" value="error-not-found" type="radio" onclick="show('error-not-found-detail', 'message2')"> it did not find enough errors</label><br>
        <label><input name="reason" value="too-many-false-alarms" type="radio" onclick="track('too-many-false-alarms');show('too-many-false-alarms-detail', 'message3')"> found too many 'errors' that are not really errors</label><br>
        <!--<label><input name="reason" value="something-else" type="radio" onclick="show('something-else-detail', 'message4')"> something else:</label><br>-->
        <br>
        <div style="width:500px">
            <b>Your email: <input style="width:300px" type="text" name="email" placeholder="you@provider.org">
        </div>
        <input style="margin-top: 10px;margin-bottom: 15px" type="submit" value="Submit feedback">
    </form>
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
