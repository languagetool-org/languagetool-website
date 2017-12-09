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

    <a href=".">English</a> | <a href="?lang=de">Deutsch</a>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'lang=de') !== false) { ?>

    <h1>Datenschutzerklärung</h1>

    <p>LanguageTool ist eine Software zur Textprüfung. Ihre Texte werden dazu vom Browser
        über eine verschlüsselte Verbindung an unsere Server übertragen. Auf dieser Seite beschreiben wir,
        welche Daten wir speichern.</p>

    <ul>
        <li>Ihre zur Prüfung abgeschickten Texte werden nicht gespeichert, mit folgenden Ausnahmen:
            <ul>
                <li>Wenn Sie explizit Feedback geben, z.&nbsp;B. über Fehlalarme oder nicht erkannte Fehler, speichern wir dieses Feedback.</li>
                <li>Wenn Sie Korrekturvorschläge akzeptieren oder Regeln abstellen, speichern wir die interne ID dieser Regel
                    (z.&nbsp;B. <tt>EIN_PAAR</tt> für die Regel, die Verwechslungen zwischen Paar/paar findet).
                </li>
                <li>Im Fall eines internen Softwarefehlers speichern wir den Satz, der den Fehler ausgelöst hat, um so die Ursache zu finden und den Fehler zu beheben.</li>
            </ul>
        </li>
        <li>Um unser Angebot zu verbessern, speichern wir folgende Informationen:
            <ul>
                <li>Datum und Zeit, Länge des Textes, Sprache des Textes, Dauer der Verarbeitung, Anzahl
                    der erkannten Fehler (aber nicht den fehlerhaften Text, außer Sie haben dem zugestimmt),</li>
                <li>die Seite, von der die Anfrage abgeschickt wurde (normalerweise languagetool.org),</li>
                <li>interne Fehler (wenn z.&nbsp;B. das Browser Add-on auf den zu prüfenden Text nicht zugreifen kann),</li>
                <li>die Anzahl der Nutzungen des Browser-Add-ons (nur bei einer Deinstallation übertragen)</li>
            </ul>
        </li>
        <li>In unseren Logdateien wird Ihre IP-Adresse in gekürzter Form (wie <tt>192.168.xxx.xxx</tt>) gespeichert,
            so dass sie nicht benutzt werden kann, um Sie zu identifizieren. Fehlermeldungen wie bei der Überschreitung des
            Anfragelimits werden mit der vollständigen IP-Adresse gespeichert, damit wir gegen Missbrauch vorgehen können.</li>
        <li>Wenn Sie <a href="../contact/newsletter.php">unseren Newsletter</a> abonnieren, wird Ihre E-Mail-Adresse bei
            unserem Newsletter-Anbieter (newsletter2go.com) gespeichert.</li>
        <li>Sie können die "Stand-alone"-Version von <a href="/">unserer Homepage</a> herunterladen, die lokal läuft und
            keinerlei Daten ins Internet überträgt.
        </li>
        <li>
            <p>Die meisten Browser sind automatisch so eingestellt, dass Cookies akzeptiert werden. Auf Wunsch können
                Sie Ihren Browser jedoch durch Änderung Ihrer Browser-Einstellungen so konfigurieren, dass Cookies eingeschränkt
                oder völlig blockiert werden. Umfassende Informationen dazu, wie man dies auf einer Vielzahl von Browsern
                bewerkstelligen kann, erhalten Sie auf den folgenden Internetseiten: <a href="http://www.youronlinechoices.com/de/">youronlinechoices</a>,
                <a href="https://www.networkadvertising.org/choices/">Network Advertising Initiative</a>
                und/oder <a href="http://www.aboutads.info/choices/">Digital Advertising Alliance</a>. Sie finden dort auch Angaben dazu, wie Sie Cookies von
                Ihrem Computer löschen können sowie allgemeine Informationen über Cookies.

            <p>Für Informationen dazu, wie Sie diese Einstellungen auf dem Browser Ihres Handys
                vornehmen können, ziehen Sie bitte die Bedienungsanleitung Ihres Mobiltelefons heran.

            <p>Nachstehend finden Sie eine Liste von Anbietern, die befugt sind, Cookies auf unserer Website zu setzen sowie Informationen
                darüber, wie Sie sich entsprechend abmelden können.

            <ul>
                <li>Yieldlove GmbH, Neuer Pferdemarkt 1, 20359 Hamburg („Yieldlove“) vermarktet
                    Online-Werbeflächen auf unseren Angeboten languagetool.org und der mobilen
                    Website von languagetool.org. Um die Werbeauslieferung auf den Webseiten zu
                    optimieren, werden durch Yieldlove Cookies eingesetzt.
                    Alle Informationen dazu, wie Yieldlove Daten verarbeitet und welche Daten
                    betroffen sind, erhalten Sie in der Privacy Policy von Yieldlove. Zudem
                    können Sie unter dem angegebenen Link dem Einsatz von Cookies durch
                    Yieldlove für die Zukunft widersprechen (Opt-out):
                    <a href="http://www.yieldlove.com/cookie-policy">http://www.yieldlove.com/cookie-policy</a></li>
            </ul>
        </li>
        <li>
            <p>Diese Website benutzt <a href="http://www.piwik.org">Piwik</a> für die Analyse der Zugriffszahlen. Auch hier wird Ihre
                IP-Adresse nur in gekürzter Form gespeichert (z.&nbsp;B. <tt>192.168.xxx.xxx</tt>). Wenn Ihre Besuche trotzdem über
                Piwik gar nicht erfasst werden sollen, können Sie hier Ihre Zustimmung verweigern:</p>

            <iframe frameborder="no" width="600px" height="250px" src="//openthesaurus.stats.mysnip-hosting.de/index.php?module=CoreAdminHome&amp;action=optOut"></iframe>
        </li>
    </ul>

    <p><a href="https://github.com/languagetool-org/languagetool-website/commits/master/www/privacy/index.php">Änderungshistorie dieser Seite</a></p>

    <?php } else { ?>
    
    <h1>Privacy Policy</h1>
    
    <p>LanguageTool is a proofreading software. It works by sending the text to be checked to our servers over an
    encrypted connection. This policy describes what kind of data we store.</p>
    
    <ul>
        <li>We don't store the text that you submit for style and grammar checking on languagetool.org, with the following exceptions:
            <ul>
                <li>If you explicitly submit feedback, for example about false alarms or undetected errors, we store that feedback.</li>
                <li>If you accept or explicitly ignore corrections or open examples for an error, we log the internal rule id of that error
                    (this is something like <tt>ENGLISH_WORD_REPEAT_RULE</tt> for word repetition errors)</li>
                <li>In case of an internal software error, we log the sentence that caused the error so we can reproduce and fix the error.
                    This is extremely rare and even then, we don't store that sentence with your
                    IP address or any other meta information that would allow us to identify you.</li>
            </ul>
        </li>
        <li>To improve our proofreading service, we keep a log of the following information:
            <ul>
                <li>date and time, length of submitted text, text language, processing time on server, number of detected errors (but not the actual errors unless you have agreed to that),</li>
                <li>the page on which you submitted the request (referrer),</li>
                <li>internal errors that occur (e.g. the <a href="../firefox">browser add-on</a> not being able to access the text to be checked),</li>
                <li>the number of times you used the browser add-on (only transferred when you uninstall the add-on)</li>
            </ul>
            This is an example of a log entry that LanguageTool generates on our server:<br/>
            <tt>2014-02-24 12:10:24 Check done: 793 chars, en-US, https://languagetool.org/, handlers:1, 3 matches, 132ms, sent</tt>
        </li>
        <li>In our web server log files, your IP address is stored in an abbreviated form (like <tt>192.168.xxx.xxx</tt>)
            so it cannot be used to identify you. Error messages like for exceeding the query limit are stored with the
            full IP so we can prevent abuse.</li>
        <li>If you subscribe to <a href="../contact/newsletter.php">our newsletter</a>, your email address will be stored
            at our newsletter provider (newsletter2go.com) </li>
        <li>If you don't want any information to be transferred, download the stand-alone version from 
            <a href="/">our homepage</a>. It works locally without internet access and thus doesn't transfer any data.
        </li>
        <li>
            <p>Most browsers are configured to accept cookies. However, you can change your 
                browser settings to configure your browser so that cookies are limited or completely blocked. 
                For more information on how to do this, please visit the following 
                websites: <a href="http://www.youronlinechoices.com/de/">youronlinechoices</a>,
                <a href="https://www.networkadvertising.org/choices/">Network Advertising Initiative</a>
                and/or <a href="http://www.aboutads.info/choices/">Digital Advertising Alliance</a>.
                You will also find information there about how to delete cookies from your computer and general information about cookies.

            <p>For information on how to make these settings on your phone's browser, please refer to your mobile phone's manual.

            <p>Below is a list of providers who are authorized to set cookies on our website and information about how to opt out of cookies.

            <ul>
                <li>Yieldlove GmbH, Neuer Pferdemarkt 1, 20359 Hamburg ("Yieldlove") markets online advertising space 
                    on languagetool.org and the mobile website of languagetool.org. In order to optimise 
                    the delivery of advertising on the websites, Yieldlove uses cookies. For information on 
                    how Yieldlove processes data and which data is affected, please refer to Yieldlove's 
                    Privacy Policy. You can also opt-out of the use of cookies by Yieldlove by 
                    clicking on the link provided: 
                    <a href="http://www.yieldlove.com/cookie-policy">http://www.yieldlove.com/cookie-policy</a></li>
            </ul>
        </li>
        <li>
            <p>For accesses from web browsers and browser add-ons, this website uses <a href="http://www.piwik.org">Piwik</a> for web analytics. We're shortening your
                IP address (to a form like <tt>192.168.xxx.xxx</tt>) to protect your privacy. If you don't want your
                visit to be recorded at all by Piwik, you can opt out here:</p>

            <iframe frameborder="no" width="600px" height="250px" src="//openthesaurus.stats.mysnip-hosting.de/index.php?module=CoreAdminHome&amp;action=optOut"></iframe>            
        </li>
    </ul>
    
    <p><a href="https://github.com/languagetool-org/languagetool-website/commits/master/www/privacy/index.php">Change log of this page</a></p>

    <?php } ?>
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
