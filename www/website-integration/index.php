<?php
$page = "web-integration";
$title = "LanguageTool";
$title2 = "Integration on Websites";
$lastmod = "2013-03-10 17:40:00 CET";
include("../../include/header.php");
include('../../include/geshi/geshi.php');
?>

<p class="firstpara">You can offer a text area for proofreading texts on own web page, just
like we do on <a href="../">our homepage</a>. This will make use of <a href="../http-api/">our public REST service</a>
so you don't have to install anything but a few files. The text will be sent to our server, and the result
will be send back to the user's browser where potential errors will be underlined.
For now, this way of integration assumes that your server supports PHP and that its PHP
has <a href="http://php.net/manual/en/book.curl.php">support for curl</a>.</p>

<p>These are the three steps needed to integrate LanguageTool on a web page:</p>

<ol>
  <li>Add Javascript includes and initialization code of the textarea in the <tt>&lt;head&gt;</tt> section of your page</li>
  <li>Add HTML code for the textarea</li>
  <li>Add the PHP proxy</li>
</ol>

<p>We will now describe the installation in detail.</p>

<h2>Javascript includes and initialization code</h2>

<p>Add the following code to the <tt>&lt;head&gt;</tt> section of your page:</p>

<div class="xmlrule">
<?php hlJavascript('<script type="text/javascript"
    src="http://www.languagetool.org/js/jquery-1.4.min.js"></script>
<script type="text/javascript"
    src="http://www.languagetool.org/online-check/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript"
    src="http://www.languagetool.org/online-check/tiny_mce/plugins/atd-tinymce/editor_plugin.js"></script>

<script language="javascript" type="text/javascript">  
  tinyMCE.init({
     mode : "textareas",
     plugins : "AtD,paste",
     paste_text_sticky : true,
     setup : function(ed) {
         ed.onInit.add(function(ed) {
             ed.pasteAsPlainText = true;
         });
     },  
     /* translations: */
     languagetool_i18n_no_errors : {
         // "No errors were found.":
         "de-DE": "Keine Fehler gefunden."
     },
     languagetool_i18n_explain : {
         // "Explain..." - shown if there is an URL with a detailed description:
         "de-DE": "Mehr Informationen..."
     },
     languagetool_i18n_ignore_once : {
         // "Ignore this error":
         "de-DE": "Hier ignorieren"
     },
     languagetool_i18n_ignore_all : {
         // "Ignore this kind of error":
         "de-DE": "Fehler dieses Typs ignorieren"
     },
  
     languagetool_i18n_current_lang :
         function() { return document.checkform.lang.value; },
     /* the URL of your proxy file - must be hosted on your domain: */
     languagetool_rpc_url : "proxy.php?url=",
     /* edit this file to customize how LanguageTool shows errors: */
     languagetool_css_url :
         "http://www.languagetool.org/online-check/" +
         "tiny_mce/plugins/atd-tinymce/css/content.css",
     /* this stuff is a matter of preference: */
     theme                              : "advanced",
     theme_advanced_buttons1            : "",
     theme_advanced_buttons2            : "",
     theme_advanced_buttons3            : "",
     theme_advanced_toolbar_location    : "none",
     theme_advanced_toolbar_align       : "left",
     theme_advanced_statusbar_location  : "bottom",
     theme_advanced_path                : false,
     theme_advanced_resizing            : true,
     theme_advanced_resizing_use_cookie : false,
     gecko_spellcheck                   : false
  });
  
  function doit() {
     var langCode = document.checkform.lang.value;
     tinyMCE.activeEditor.execCommand("mceWritingImprovementTool", langCode);
  }
</script>
'); ?>
</div>

<p>To be robust against changes on our server, you might want to download the files linked
in the <tt>script</tt> elements and adapt the code accordingly. You can add translations
for your language in the "translations" section.</p>



<h2>HTML code for the textarea</h2>

<p>Add this code at the place where you want the textarea to show up:</p>

<div class="xmlrule">
<?php hlHtml('<form name="checkform" action="http://community.languagetool.org" method="post">
              
  <p id="checktextpara">
      <textarea id="checktext" name="text" style="width: 100%" 
        rows="6">Paste your own text here... or check check this text.</textarea>
  </p>
  
  <div style="margin-top:0px; text-align: right">
      <select name="lang" id="lang">
          <option value="en-US">English</option>
          <option value="de-DE">German</option>
          <option value="it">Italian</option>
      </select>
      <input type="submit" name="_action_checkText"
          value="Check Text" onClick="doit();return false;">
  </div>

</form>'); ?>
</div>

<ul>
  <li>You can add as many languages as you want to the <tt>select</tt> element - see the 
      <a href="../languages/">list of languages supported by LanguageTool</a>.</li>
  <li>This textarea requires Javascript to work - if Javascript is not activated in the user's browser
      or there's some other technical problem, the user will not get underlined errors but will instead
      be redirected to <a href="http://community.languagetool.org">community.languagetool.org</a> where
      the checking result will be shown.</li>
  <li>Depending on what kind of texts you expect your users to submit, you should consider supporting https
      for encryption. The communication between the proxy on your server and our public server is encrypted, but the
      communication between the user's browser and your proxy is not if you're using http instead of https.</li>
</ul>



<h2>PHP Proxy</h2>

<p>Download the 
<a href="http://svn.code.sf.net/p/languagetool/code/trunk/website/www/online-check/tiny_mce/plugins/atd-tinymce/server/proxy.php">proxy.php</a>
and place it on your server, in the same directory as your page. If you want to place it somewhere else you
need to adapt <tt>languagetool_rpc_url</tt> in the page's <tt>&lt;head&gt;</tt> section. In any case, the proxy script
needs to be placed on the same domain as the page with the textarea. By the way, if you open the 
proxy page with your browser, you will just see a message that it only supports POST.</p>



<h2>Done!</h2>

<p>That's it - your page should now show a text area with the default text and as soon as you click the "Check Text"
button, errors detected by LanguageTool should become underlined. If you experience problems, please
go to <a href="../forum">our forum</a> and post a description of your issue, including an URL where your page can be found.</p>

<p>Please add a link back to <a href="http://www.languagetool.org">www.languagetool.org</a> so your users know
what the functionality is based on.</p> 

<p>Finally, we'd like you to be aware of the fact that we provide the LanguageTool service for free, which
implies that we cannot give any guarantees about the service's availability.</p>

<?php
include("../../include/footer.php");
?>
