<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "LanguageTool API Migration";
    ?>
    <?php include("../../include/header.php"); ?>
    <style>
        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
        table {
            border-collapse: collapse
        }
        h3 {
            margin-top: 20px;
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>LanguageTool HTTP API Migration</h1>
    
    <p>2016-06-04</p>
    
    <p>LanguageTool has offered an HTTP/HTTPS API that has been stable for about ten years. Over time, the XML response
    format had become inconsistent. Thus, new versions of LanguageTool will not support the old XML format anymore.
    A new JSON-based output will replace the XML-based format. Some parameter names will also be changed to provide
    more consistency.</p>
    
    <h3>Who is Affected by the Change?</h3>
    <ul>
        <li>Anyone using our <a href="http://wiki.languagetool.org/public-http-api">public HTTP API</a>: you will need to change 
            your software to send new parameters and interpret the new JSON response format.</li>
        <li>Anyone running their own instance of LanguageTool to access it via HTTP/HTTPS, e.g. using <tt>languagetool-server.jar</tt>:
            you will either need to stay with an old version of LanguageTool or change your software (see above).</li>
        <li>Anyone who has embedded LanguageTool into their web page <a href="http://wiki.languagetool.org/integration-on-websites">as
            documented here</a>: you will need to re-read the documentation we provide for embedding LanguageTool on
            web pages and make sure your website is up-to-date.</li>
    </ul>
    
    <p>The <tt>--api</tt> switch of the command line version of LanguageTool will not be affected for now, but we
    strongly recommend using the server mode with the new API anyway.</p>
    
    <h3>Road map</h3>
    <ul>
        <li>LanguageTool &lt;= 3.3 supports only the old API</li>
        <li>LanguageTool 3.4 and 3.5 will support both the old and the new API</li>
        <li>From 2016-10-01, the <a href="http://wiki.languagetool.org/public-http-api">public HTTP API</a> will only support the new API</li>
        <li>LanguageTool &gt;= 3.6 (planned for 2016-12-28) will only support the new API</li>
    </ul>
    
    <h3>Changes in Input Parameters</h3>
    <table>
        <tr>
            <td>Old parameter</td>
            <td>New parameter</td>
        </tr>
        <tr>
            <td><tt>enabled</tt></td>
            <td><tt>enabledRules</tt></td>
        </tr>
        <tr>
            <td><tt>disabled</tt></td>
            <td><tt>disabledRules</tt></td>
        </tr>
        <tr>
            <td><tt>autodetect=1</tt></td>
            <td><tt>language=auto</tt></td>
        </tr>
    </table>
    <p>Other parameters keep their name.</p>
    
    <h3>Changes in Result Format</h3>
    
    <p>The old format was an XML format. The new format is JSON and <a href="swagger-ui/#/default">documented here</a>.</p>

</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
