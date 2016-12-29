<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "Donate to LanguageTool";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">
    
    <p>LanguageTool currently has expenses of around €50/month: we pay for a virtual server (€40)
    and for hosting of <a href="http://forum.languagetool.org">our forum</a> (€10). We are asking
    for donations to cover new expenses:</p>
    
    <ul>
        <li>Have two servers and a load balancer (EC2 instances at Amazon AWS) for better robustness
        of our service. This would not only help languagetool.org, but also the Firefox, Chrome,
        and Google Docs add-on.</li>
        <li>Pay a student to work on <a href="/job/master-thesis.php">machine
        learning approaches to text checking</a>.</li>
    </ul>

    <h2>Donate by Credit Card</h2>

    <p>LanguageTool is looking for donations to improve its language checking capabilities and to make the service
    on languagetool.org more stable by adding more servers.</p>

    <script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/extend-languagetool?recurring=true&hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px" seamless="seamless" id="dbox-form-embed" name="donorbox" frameborder="0" scrolling="no"></iframe>
    
    <!--<p>Using this form, you'll receive a receipt via email.</p>-->


    <h2>Donate by PayPal</h2>

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick" />
        <input type="hidden" name="hosted_button_id" value="DZ7EREANKYKXW" />
        <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate" />
        <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
    </form>

    
    <h2>Donate by Wire Transfer</h2>

    <p>If you live in the eurozone you can wire transfer your donation directly via SEPA.
    If you're outside the eurozone, please donate by credit card or PayPal instead (see above)
    to avoid high fees.</p>
    
    <table>
        <tr>
            <td>IBAN</td>
            <td>&nbsp;</td>
            <td>DE89 4306 0967 8028 2887 03</td>
        </tr>
        <tr>
            <td>BIC</td>
            <td></td>
            <td>GENODEM1GLS</td>
        </tr>
        <tr>
            <td>Reference / Verwendungszweck</td>
            <td></td>
            <td>LanguageTool donation</td>
        </tr>
    </table>
    
    <h2>History</h2>
    
    <p>We keep a log of donations in
    <a href="https://docs.google.com/spreadsheets/d/1enGPqRUHMSDOsWK_HfP-1eVebz-WNWstHUpj76VlJRo/edit?usp=sharing">this
    spread sheet</a>.</p>

</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
