<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "languagetool.org Privacy Policy";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Privacy Policy</h1>
    
    <ul>
        <li>We <strong>never store the text</strong> that you submit for style and grammar checking on languagetool.org.</li>
        <li>To improve our proofreading service, we keep a log of the following information:
            date and time,
            length of submitted text,
            text language,
            referrer (the page on which you submitted the request),
            processing time,
            number of detected errors (but not the actual errors),
            internal errors that occur, e.g. the <a href="../firefox">browser add-on</a> not being able to access the text to be checked.<br>
            This is an example of a log entry that LanguageTool generates:<br/>
            <tt>2014-02-24 12:10:24 Check done: 793 chars, en-US, https://languagetool.org/, handlers:1, 3 matches, 132ms, sent</tt>
        </li>
        <li>In our web server log files, your IP address is stored in an abbreviated form (like <tt>192.168.xxx.xxx</tt>)
            so it cannot be used to identify you. Error messages like for exceeding the query limit are stored with the
            full IP so we can prevent abuse.</li>
        <li>If you don't want any information to be transferred, download the stand-alone version from 
            <a href="/">our homepage</a>. It works locally without internet access.</li>
        <li>
            <p>For accesses from web browsers, this website uses <a href="http://www.piwik.org">Piwik</a> for web analytics. We're shortening your
                IP address (to a form like 192.168.xxx.xxx) to protect your privacy. If you don't want your
                visit to be recorded at all by Piwik, you can opt out here:</p>

            <iframe frameborder="no" width="600px" height="200px" src="//openthesaurus.stats.mysnip-hosting.de/index.php?module=CoreAdminHome&amp;action=optOut"></iframe>            
        </li>
    </ul>


</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
