<?php
$page = "usage";
$title = "LanguageTool";
$title2 = "Usage";
$lastmod = "2012-03-04 20:20:00 CET";
include("../../include/header.php");
include('../../include/geshi/geshi.php');
?>
		
<p>LanguageTool can be used in a different number of ways:</p>


<h2>As a LibreOffice/OpenOffice.org extension</h2>
    <p>Double click the downloaded <tt>LanguageTool-1.x.oxt</tt> to install it.
  	If that doesn't work, call <em>Tools -&gt; Extension Manager -&gt; Add...</em>.
    Close LibreOffice/OpenOffice.org and re-start it. Type some text
  	with an error that LanguageTool can detect and you should see a blue underline.
    You might want to use "This is an test." as en example &ndash; make sure the text language is set
    to English for this example.</p>


<h2>As a stand-alone application</h2>
	<p>Rename the *.oxt file so it ends with ".zip" and unzip it.
	Then start <tt>LanguageToolGUI.jar</tt> by double clicking on it. If your computer isn't
	configured to start jar archives, start it from the command line using:</p>
	<tt>java -jar LanguageToolGUI.jar</tt>
	
    <p>You can use the <tt>--tray</tt> option to start LanguageTool inside the system tray.
	After you copy any text to the clipboard, clicking LanguageTool in the system tray will
	cause the application to open and check the contents of the clipboard automatically. This way
	you can use LanguageTool for applications that do not support direct integration of the checker.</p>


<h2>As a stand-alone application on the command line</h2>
	<p>See above, but start LanguageTool.jar using:</p>
	<tt>java -jar LanguageTool.jar &lt;filename></tt>
	<p>LanguageTool only supports plain text files.</p>


<h2>Embedding LanguageTool in Java applications</h2>
    <p>You just need to create a <tt>JLanguageTool</tt> object and use that
	to check your text. Also see <?=show_link("the API documentation", "/development/api/", 0) ?>. For example:</p>
	
	<?php hljava('JLanguageTool langTool = new JLanguageTool(Language.ENGLISH);
langTool.activateDefaultPatternRules();
List<RuleMatch> matches = langTool.check("A sentence " + 
    "with a error in the Hitchhiker\'s Guide tot he Galaxy");
for (RuleMatch match : matches) {
  System.out.println("Potential error at line " +
      match.getEndLine() + ", column " +
      match.getColumn() + ": " + match.getMessage());
  System.out.println("Suggested correction: " +
      match.getSuggestedReplacements());
}'); ?>
	<br />		


<h2>Using LanguageTool from other applications</h2>

    <p>Start the stand-alone
	application and configure it (<em>File -&gt; Options...</em>) to listen on a port that is not used yet (the default
	port, 8081, should often be okay). This way LanguageTool will also be available in server mode
	until you stop it. The client that wants to use LanguageTool can now send its text to an URL like this:</p>
	
    <tt>http://localhost:8081/?language=xx&amp;text=my+text</tt><br />

    <p>The <tt>language</tt> parameter must specify the two-character language code
	of the text to be checked. You can also specify <tt>motherTongue</tt>
	parameter to specify your mother tongue (for false friend checks). The <tt>text</tt> parameter is the
	text itself - you may need to encode it for URLs. If you want to test bilingual text (containing
	source and translation), simply specify also the <tt>srctext</tt> parameter. This way bitext mode will be
	activated automatically. You can use both POST and GET to send your requests to the LanguageTool server.</p>

    <p>For the input "this is a test" the LanguageTool server will reply with this
	XML response:</p>
	
<?php hl('<?xml version="1.0" encoding="UTF-8"?>
<matches>
<error fromy="0" fromx="0" toy="0" tox="5" 
  ruleId="UPPERCASE_SENTENCE_START" 
  msg="This sentence does not start with an uppercase letter" 
  replacements="This" context="this is a test." 
  contextoffset="0"
  errorlength="4"/>
</matches>'); ?>
        
    <p>You can call <tt>http://localhost:8081/Languages</tt> to get a list of all languages available.</p>

	<p>The server can also be started in a server-only mode (no GUI) on the command line using this command:</p>
	<tt>java -cp LanguageTool.jar org.languagetool.server.HTTPServer</tt>
    <p>You can use the <tt>--port</tt> or <tt>-p</tt> option to specify the port number. If
    no port number is specified, the default (8081) is used. For security reasons, the server will
    not be accessible from other hosts. If you want to run a server for remote users you will
    need to write a small Java program that creates an instance of
    <tt><a href="http://www.languagetool.org/development/api/index.html?org/languagetool/server/HTTPServer.html">org.languagetool.server.HTTPServer</a></tt>.</p>

<?php
include("../../include/footer.php");
?>
