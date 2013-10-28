<?php
$page = "development";
$title = "LanguageTool";
$title2 = "Development";
$lastmod = "2013-10-28 18:40:00 CET";
include("../../include/header.php");
include('../../include/geshi/geshi.php');
?>

<?php include('../../include/github_ribbon.php'); ?>

<div class="longPage">

<p class="firstpara">This page has everything you need to know to teach LanguageTool
new error detection rules, plus more. You don't even have to be a programmer for that.</p>

<ul>
    <li><a href="#intro">The three-minute introduction</a></li>
    <li><a href="#helpwanted">Help wanted!</a></li>
    <li><a href="#checkout">Source code checkout (Java developers only)</a></li>
    <li><a href="#process">Language checking process</a></li>
    <li><a href="#xmlrules">Adding new XML rules</a>
    <ul>
      <li><a href="#simpleexample">A simple example</a></li>
      <li><a href="#basicelements">The basic elements of a rule</a></li>
      <li><a href="#testing">Testing rules</a></li>
      <li><a href="#inflection">Inflection</a></li>
      <li><a href="#grouping">Grouping rules</a></li>
      <li><a href="#categories">Categories</a></li>
      <li><a href="#turningoff">Turning rules off by default</a></li>
      <li><a href="#minmax">Min/Max</a></li>
      <li><a href="#skip">Skip</a></li>
      <li><a href="#variables">Variables</a></li>
    </ul>
    </li>
    <li><a href="#javarules">Adding new Java rules</a></li>
    <li><a href="#translation">Translating the user interface</a></li>
    <!--<li><a href="#newlanguage">Adding support for a new language</a></li>-->
    <li><a href="#background">Background information</a></li>
</ul>

<h2><a name="intro">The three-minute introduction</a></h2>

<p>This section tells you in a nutshell how to write your own LanguageTool rules for detecting errors:</p>

<ol>
  <li>Download the stand-alone version of LanguageTool <?=show_link("from the homepage", "../", 0)?> and unzip it.</li>
  <li>Open <tt>org/languagetool/rules/en/grammar.xml</tt> in your preferred text editor or in an XML editor.</li>
  <li>Search for <tt>name="Possible Typos"</tt> (it's quite at the top), copy and paste this snippet just after
    that <tt>&lt;category ...&gt;</tt> tag and save the file:
    <div class="xmlrule" style="margin-top:5px">
    <?php hl('<rule id="EXAMPLE_RULE" name="My example rule">
    <pattern>
      <token>foo</token>
      <token>bar</token>
    </pattern>
    <message>Did you mean <suggestion>bicycle</suggestion>?</message>
    <example type="incorrect">My <marker>foo bar</marker> is broken.</example>
    <example type="correct">My bicycle is broken.</example>
</rule>'); ?>
    </div>
  </li>
  <li>Run <tt>languagetool-standalone.jar</tt> by clicking it or by calling <tt>java -jar languagetool-standalone.jar</tt> on the command line.</li>
  <li>Select English as the text language and type something like "A foo bar test", then start text checking.</li>
  <li>LanguageTool will now check your text and suggest "bicycle" as a replacement for "foo bar", because that's
    what the rule which we just added says.</li>
</ol>

<p>That's it! You have just added a new rule. Keep on reading to get a grasp on what the elements of a rule mean
and how to build more complex rules or <?=show_link("use the rule creator", "../ruleeditor", 0)?> to build simple rules.
<a href="../contact/">Send us</a> your rules so we can add them to the next release of LanguageTool.
</p>


<h2><a name="helpwanted">Help wanted!</a></h2>
We're looking for people who support us writing new rules so LanguageTool can
detect more errors. Also see <?=show_link("the list of supported languages", "../languages/", 0)?>.

<p>How can you help?</p>

<ol>
	<li>Read this page (some features described here are quite advanced, so you won't need everything)</li>
	<li>Start writing rules for the error you'd like LanguageTool to detect</li>
	<li>See <?=show_link("our wiki", "http://wiki.languagetool.org", 0)?> for more tips and tricks</li>
	<li>Post your rules <?=show_link("to the forum",
            "../forum", 0)?> or <?=show_link("to our mailing list",
      "http://lists.sourceforge.net/lists/listinfo/languagetool-devel", 0)?>  
      so we can include them in LanguageTool</li>
    <li>Subscribe to our development mailing list:
        <!-- code copied from https://lists.sourceforge.net/lists/listinfo/languagetool-devel: -->
        <FORM Method=POST ACTION="https://lists.sourceforge.net/lists/subscribe/languagetool-devel">
            <INPUT placeholder="your email address" type="Text" name="email" size="30" value="">
            <INPUT type="Submit" name="email-button" value="Subscribe">
        </FORM>
    </li>
</ol>

<p>If your language isn't supported yet, you can add it by following the
<a href="http://wiki.languagetool.org/adding-a-new-language">documentation in our wiki</a>.</p>


<h2><a name="checkout">Source code checkout (Java developers only)</a></h2>

<p>If you are a Java developer and you want to extend LanguageTool or if you
want to use the latest development version, check out LanguageTool from <a href="https://github.com/languagetool-org/languagetool/">github</a>:</p>

<code class="command">
git clone https://github.com/languagetool-org/languagetool.git
</code>

<p>You can then build the code with <tt>mvn clean package</tt> or just run the tests with <tt>mvn clean test</tt>.
Maven's default memory settings are often too low, so you will probably need to set your environment
variable <tt>MAVEN_OPTS</tt> to:</p>

<code class="command">
-Xmx512m -XX:MaxPermSize=256m
</code>

<p>After the build, the LibreOffice/OpenOffice extension can be found in <tt>languagetool-office-extension/target</tt>,
the stand-alone version in <tt>languagetool-standalone/target</tt>.
See the <?=show_link("Usage page", "/usage/", 0) ?> for information on how to use those files.
See <a href="http://wiki.languagetool.org/maven-tips">Maven tips</a> on the Wiki for hints on how to build faster.</p>

<h2><a name="process">Language checking process</a></h2>

<p>This is what LanguageTool does when it analyzes a text for errors:</p>

<ol>
	<li>The text is split into sentences</li>
	<li>Each sentence is split into words, so called <em>tokens</em></li>
	<li>Each word is assigned its part-of-speech tag(s) (e.g. <em>cars</em>
		= plural noun, <em>talked</em> = simple past verb)</li>
	<li>The analyzed text is then matched against the built-in rules and against
		the rules loaded from the grammar.xml file</li>
</ol>

<p>The most important thing you need to keep in mind that LanguageTool's rules describe what errors
look like, not what correct sentences look like (this is the opposite of how you learn a new
language).</p>

<h2><a name="xmlrules">Adding new XML rules</a></h2>
Most rules are contained in <tt>rules/xx/grammar.xml</tt>, whereas <tt>xx</tt> is
a language code like <tt>en</tt> or <tt>de</tt>. A rule is basically a pattern
which shows an error message to the user if the pattern matches. A pattern can
address words or part-of-speech tags.
Here are some examples of patterns that can be used in that file:

<ul class="largelist">
	<li><?php hl('<token>think</token>', "xmlcodeNoIndent"); ?>
		matches the word <em>think</em>
	</li>
	<li><?php hl('<token>think</token>
<token>about</token>', "xmlcodeNoIndent"); ?>
 		Matches the phrase <em>think about</em> - as the text is split into words, you need to list
      each word separately as a token. This will not work: <span style="text-decoration: line-through"><?php hl('<token>think about</token>', "xmlcodeNoIndent"); ?></span>
	</li>
	<li><?php hl('<token regexp="yes">think|say</token>', "xmlcodeNoIndent"); ?>
		matches the regular expression
		<tt>think|say</tt>, i.e. the word <em>think</em> or <em>say</em>. You can write simple rules without
        knowing regular expressions, but if you want to learn more about them you can try
        <?=show_link("this tutorial", "http://www.regular-expressions.info/tutorialcnt.html")?>.
    </li>
	<li><?php hl('<token postag="VB" />
<token>house</token>', "xmlcodeNoIndent"); ?>
		matches a base form verb followed by the word <em>house</em>.
		See <?=show_link("resource/en/tagset.txt", "https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/en/src/main/resources/org/languagetool/resource/en/tagset.txt", 0) ?>
        for a list of possible English part-of-speech tags.
    </li>
	<li><?php hl('<token>cause</token>
<token regexp="yes" negate="yes">and|to</token>', "xmlcodeNoIndent"); ?>
		matches the word <em>cause</em> followed
		by any word that is not <em>and</em> or <em>to</em>
    </li>
	<li><?php hl('<token postag="SENT_START" />
<token>foobar</token>', "xmlcodeNoIndent"); ?>
		matches the word <em>foobar</em> only
		at the beginning of a sentence. The corresponding postag for the end of a sentence
		is <tt>SENT_END</tt>.
    </li>
</ul>

<p>A pattern's tokens are matched case-insensitively by default. This can be changed
for the whole pattern by setting the pattern's <tt>case_sensitive</tt> attribute
to <tt>yes</tt>.</p> Alternatively, case-sensitive matching can be turned on for
single tokens by using
<tt><a href="http://docs.oracle.com/javase/7/docs/api/java/util/regex/Pattern.html">(?-i)</a></tt>
in regular expressions (ex: <tt>&lt;token regexp="yes"&gt;(?-i)Bill&lt;/token&gt;</tt> will match
"Bill" but not "bill").

<h3><a name="simpleexample">A simple example</a></h3>

<p>Here's an example of a complete rule that marks "bed English", "bat attitude"
etc as an error:</p>

<div class="xmlrule">
<?php hl('<rule id="BED_ENGLISH" name="Possible typo &apos;bed/bat(bad) English/...&apos;">
    <pattern>
      <marker>
        <token regexp="yes">bed|bat</token>
      </marker>
      <token regexp="yes">English|attitude</token>
    </pattern>
    <message>Did you mean <suggestion>bad</suggestion>?</message>
    <url>http://some-server.org/the-bed-bad-error</url>
    <example type="correct">Sorry for my <marker>bad</marker> English.</example>
    <example correction="bad" type="incorrect">Sorry for my <marker>bed</marker> English.</example>
</rule>'); ?>
</div>

<h3><a name="basicelements">The basic elements of a rule</a></h3>

<p>A short description of the elements and their attributes:</p>

<ul class="largelist">
	<li>element <tt>rule</tt>, attribute <tt>id</tt>: An internal identifier used to address this rule. This must be unique.</li>
	<li>element <tt>rule</tt>, attribute <tt>name</tt>: The text displayed in the configuration.</li>
	<li>element <tt>pattern</tt>, attributes <tt>mark_from</tt> and <tt>mark_to</tt> (LanguageTool &lt;= 1.7): What part of the original
		text should be marked as an error. The default, <tt>mark_from="0"</tt> and <tt>mark_to="0"</tt>, means to mark
		the complete matching token. For example, if the pattern contains three token
		elements that match the input text, those three matching words will be marked in the text.
		<tt>mark_to="-1"</tt> in the example above means that the last token of the match will not
		be marked.</li>
    <li>element <tt>pattern</tt>, sub element <tt>marker</tt> (LanguageTool &gt;= 1.8): What part of the original
		text should be marked as an error. If all tokens are part of the error you can omit this element.</li>
	<li>element <tt>token</tt>, attribute <tt>regexp</tt>: interpret the given token
		as a regular expression</li>
	<li>element <tt>message</tt>: The text displayed to the user if this rule matches.
		Use sub-element <tt>suggestion</tt> to suggest a possible replacement that corrects the error.		
		Since version 1.8, it is possible to conditionally suppress parts of suggestions if they are misspelled
		(for this, you need to use element <tt>match</tt> with attribute <tt>suppress_misspelled</tt> set to 
		<tt>yes</tt>). You can even suppress the whole rule from being matched if you use the same attribute for
		any <tt>suggestion</tt> element. Note: the tagger of the given language is used to make it work, so if
		you don't have a tagger yet, you cannot use this feature.		 	
		</li>
    <li>element <tt>url</tt> (optional, since LanguageTool 1.7): An URL to a page that explains the rule leading to the error in more
        detail. <!--LT 1.8: Will be displayed in LibreOffice 3.5 or later when the user clicks the "More..." button.--></li>
	<li>element <tt>example</tt>: At least two examples with one correct and one incorrect sentence.
		The sentence with the attribute <tt>type="incorrect"</tt> is supposed to be matched by this rule. The position of the error
		must be marked up with the sub-element <tt>marker</tt>. You can use the optional <tt>correction</tt> attribute
        to make the test also check whether the correction suggested by LanguageTool is what you expect.
        These sentences are used by the
		automatic test cases that can be run using <tt>sh testrules.sh</tt> (on Linux), <tt>testrules.bat</tt> (on Windows),
        or <tt>mvn clean test</tt> (for Java developers).</li>
</ul>


<h3><a name="testing">Testing rules</a></h3>

<p>The LanguageTool user interface (languagetool-standalone.jar) needs to be restarted if you have changed the <tt>grammar.xml</tt> file.
Testing rules is faster with our embedded test case feature: just call
<tt>sh testrules.sh en</tt> on Linux or <tt>testrules.bat en</tt> on Windows, using your language code instead of <tt>en</tt>.

<p>This will test your rule with its <tt>example</tt> sentences: the incorrect sentence is supposed to be
detected by your rule, while the correct sentence is not supposed to give an error. If that is not the case
you will get a message. In that case, either your rule or your example sentences are not quite right yet.</p>

<p>Using <tt>testrules.sh/bat</tt> is not only much faster than manually starting the user interface over and over again,
it will always test all rules, so we recommend you use that during rule development.</p>


<h3><a name="inflection">Inflection</a></h3>

    <p>The <tt>inflected</tt> attribute of the <tt>token</tt> element is used to match not only the given form but
    also all of its inflected forms. For example <tt>&lt;token inflected="yes"&gt;bicycle&lt;/token&gt;</tt> will
    match <em>bicycle</em>, <em>bicycles</em>, <em>bicycling</em> etc.</p>


<h3><a name="grouping">Grouping rules</a></h3>

	<p>Sometimes it requires more than one <tt>rule</tt> to find all occurrences of an error.
    You can put all those <tt>rule</tt>s in one <tt>rulegroup</tt> element. The <tt>rulegroup</tt>'s
    <tt>id</tt> and <tt>name</tt> attribute will be use for all the rules of that group.
    Starting with LanguageTool 1.8, overlapping matches for rules in the same rulegroup are filtered out
    to avoid duplicate matches for the same error.</p>

<h3><a name="categories">Categories</a></h3>
    <p>The rules are best put into categories that describe their purpose, and allow to enable or disable
        a number of rules at the same time. When creating a category, you can use the <tt>type</tt>
        attribute to describe the type of the error according to the <a href="http://www.w3.org/International/multilingualweb/lt/drafts/its20/its20.html#lqissue-typevalues">Quality Issue Type</a> 
        from the W3 Internationalization Tag Set. This will make integration of LT with other tools easier.        
    </p>

<h3><a name="turningoff">Turning rules off by default</a></h3>

    <p>Some rules can be optional, useful only in specific registers,
      or very sensitive. You can turn them off by default by using an
      attribute <tt>default="off"</tt>. The user can turn the rule on/off in the
      Options dialog box, and this setting is being saved in the configuration
      file.</p>


<h3><a name="minmax">Min/Max</a></h3>

    <p>To match a token optionally, use the <tt>min</tt> attribute with a value of <tt>0</tt>. For example, to
    match "a person" or "a nice person":</p>

<?php hl('<token>a</token>
<token min="0">nice</token>
<token>person</token>'); ?>

    <p>You can combine this with <tt>max</tt> to specify the maximum number of occurrences possible.
    For example, to match "a person", "a nice person", or "a nice nice person":</p>

<?php hl('<token>a</token>
<token min="0" max="2">nice</token>
<token>person</token>'); ?>

<!--
    <p>By not specifying a word you can use this to skip overs any tokens.
    For example, to match "a person", "a tall person", or "a nice xyz person":</p>

<?php hl('<token>a</token>
<token min="0" max="2"/>
<token>person</token>'); ?>-->

    <p>Note than <tt>min</tt> only accepts values <tt>0</tt> or <tt>1</tt>.</p>

<h3><a name="skip">Skip</a></h3>

    <p>The <tt>skip</tt> attribute of the <tt>token</tt> element is used in two situations:</p>

    <ol>
      <li>
        <p><strong>Simulate a simple chunker</strong> for languages with flexible word order,
        e.g., for matching errors of <?=show_link("rection", "http://en.wikipedia.org/wiki/Case_government")?>;
        we could for example skip possible adverbs in some rule. <tt>skip="1"</tt> works exactly as two rules, i.e.</p>

    	<?php hl('<token skip="1">A</token>
<token>B</token>'); ?>

    	<p>is equivalent to the pair of rules:</p>

    	<?php hl('<token>A</token>
<token/>
<token>B</token>

<token>A</token>
<token>B</token>'); ?>

    	<p>Using negative value, we can match until the B is found, no matter how
    	many tokens are skipped. This cannot be easily encoded using empty
    	tokens as above because the sentence could be of any length.</p>
      </li>

      <li>
        <p><strong>Match coordinated words</strong>, for example to match
       	"both ... as well as" we could write:</p>

       	<?php hl('<token skip="-1">both<exception scope="next">and</exception></token>
<token>as</token>
<token>well</token>
<token>as</token>'); ?>

       	<p>Here the exception is applied only to the skipped tokens.</p>

       	<p>The scope attribute of the exception is used to make exception valid
       	only for the token the exception is specified (scope="current") or for
       	skipped tokens (scope="next"). Default behavior is scope="current".
       	Using scopes is useful where several different exceptions should be
       	applied to avoid false alarms. In some cases, it's useful to use
       	<tt>scope="previous"</tt> in rules that already have <tt>skip="-1"</tt>.
       	This way, you can set an exception against a single token that immediately
       	precedes the matched token. For example, we want to match "tak" after "jak"
       	which is not preceded by a comma:</p>

       	<? hl('<token>tak</token>
<token skip="-1">jak</token>
<token>tak<exception scope="previous">,</exception></token>'); ?>

       	<p>In this case, the rule excludes all sentences, where there is a comma
       	before "tak". Note that it's very hard to make such an exclusion otherwise.
       	</p>

      </li>
    </ol>


<h3><a name="variables">Variables</a></h3>

	<p>In XML rules, you can refer to previously matched tokens in the pattern. For example:</p>
	
	<?php hl('<pattern>
 <token regexp="yes" skip="-1">ani|ni|i|lub|albo|czy|oraz<exception scope="next">,</exception></token>
 <token><match no="0"/></token>
</pattern>'); ?>
	
	<p>This rule matches sequences like <b>ani... ani, ni... ni, i... i</b> but you don't have to 
	write all these cases explicitly. The first match (matches are numbered from zero, so it's 
	&lt;match no="0"/&gt;) is automatically inserted into the second token. Note 
	that this rule will match sentences like:</p>
	
	<tt>Nie	kupiłem ani gruszek ani jabłek. Kupię to lub to lub tamto.</tt>
	
	<p>A similar mechanism could be used in suggestions, however there are more features, and tokens are
	numbered from 1 (for compatibility with the older notation \1 for the first matched token). For example:</p>
	
	<?php hl('<suggestion><match no="1"/></suggestion>'); ?>

	<p>A more complicated example:</p>

	<?php hl('<pattern>
<token regexp="yes">^(\p{Lu}{2}+[i]*\p{Lu}+[\p{L}&amp;
&amp;[^\p{Lu}]]{1,4}+)</token>
</pattern>
<message>Prawdopodobny błąd zapisu odmiany;
  skrótowce odmieniamy z dywizem:
  <suggestion><match no="1" regexp_match="^(\p{Lu}{2}+[i]*\p{Lu}+)([\p{L}&amp;
&amp;[^\p{Lu}]]{1,4}+)" regexp_replace="$1-$2"/></suggestion></message>'); ?>
		
	<p>This rule matches Polish inflected acronyms such as "SMSem" that should be written with 
	a hyphen: "SMS-em". So the acronym is matched with a complicated regular expression, and the 
	match replaces the match using Java regular expression notation. Basically, the regular expression 
	only shows two parts and inserts a hyphen between them.</p>
	
	<p>For some languages (currently Polish, English, Catalan, Spanish, Galician, Dutch, Romanian, Slovak and Russian), element &lt;match/&gt; can be used to 
	insert an inflected matched token (or another word with a specified part of speech 
	tag). For example:</p>

	<?php hl('<pattern>
 <token regexp="yes">has|have</token>
 <marker>
   <token postag="VBD|VBP|VB" postag_regexp="yes">
     <exception postag="VBN|NN:U.*|JJ.*|RB" postag_regexp="yes"/>
   </token>
 </marker>
 <token><exception postag="VBG"/></token>
</pattern>
<message>
  Possible agreement error -- use past participle here:
  <suggestion><match no="2" postag="VBN"/></suggestion>.
</message>'); ?>
		
	<p>The above rule takes the second verb with a POS tag "VBN", "VBP" or "VB" and displays its 
	form with a POS tag "VBN" in the suggestion. You can also specify POS tags using 
	regular expressions (<tt>postag_regexp="yes"</tt>) and replace POS tags – just like 
	in the above example with acronyms. This is useful for large and complicated 
	tagsets (for many examples, see the Polish rule file: <a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pl/src/main/resources/org/languagetool/rules/pl/grammar.xml"
            ><tt>rules/pl/grammar.xml</tt></a>).</p>
	
	<p>Sometimes the rule should change the case of the matched word. For this purpose, 
	you can use <tt>case_conversion</tt> attribute values: <tt>startlower</tt>, <tt>startupper</tt>,
	<tt>allupper</tt> and <tt>alllower</tt>.</p>
	
	<p>Another useful thing is that &lt;match&gt; can refer to a token, but apply its POS 
	to another word. This is useful for suggesting another word with the same part 
	of speech. There is a special abbreviated syntax used for this purpose:</p>
	
	<?php hl('<match no="1" postag="verb:.*perf">kierować</match>'); ?>
	
	<p>This syntax means: take the POS tag of the first matched token that matches the regular expression specified 
	in the <tt>postag</tt> attribute, and then apply this POS tag to the verb "kierować". This way the verb 
	will be inflected just the way the matched verb was originally inflected. The reason why you 
	need to specify the POS tag is that the matched token can have several POS tags (several readings).</p>

	<p>Note that by default <tt>&lt;match&gt;</tt> element inside the <tt>&lt;token&gt;</tt> element inserts only a string –
	so it matches a string, and not part of speech tags. So even if it refers to 
	a token with a POS tag, it copies the matched token, and not its POS token. However, 
	you can use all above attributes to change the form of the token.</p>

    <p>You can however use the <tt>&lt;match&gt;</tt> element to copy POS tags alone but to do so,
	you must use the attribute <tt>setpos="yes"</tt>. All other attributes can be applied so that
	the POS could be converted appropriately. This can be useful for creating rules specifying grammatical 
	agreement. Currently, such rules must be quite wordy, somewhat more terse syntax is in 
	development.</p>

    <p>You can use <tt>postag_replace</tt> to require the suggestion to have only <em>some</em> of the same POS
    tags as the matching word. As always with regular expressions, you put the relevant parts
    in parenthesis and then refer to them using <tt>$1</tt>, <tt>$2</tt> etc:</p>

    <?php hl('<match no="1"
       postag="(adj|ppas|pact):sg:inst.*(:pos)"
       postag_regex="yes"
       postag_replace="$1:sg:.*nom.*:n1\.n2.*$2"></match>'); ?>


<h2><a name="javarules">Adding new Java rules</a></h2>

<p>Rules that cannot be expressed with a simple pattern in <tt>grammar.xml</tt>
can be developed as a Java class. As a developer, extend LanguageTool's
<a href="api/org/languagetool/rules/Rule.html">Rule</a> class and implement the
<tt><a href="api/org/languagetool/rules/Rule.html#match(org.languagetool.AnalyzedSentence)">match(AnalyzedSentence text)</a></tt>
method.</p>

<p>See <tt><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-core/src/main/java/org/languagetool/rules/WordRepeatRule.java">rules/WordRepeatRule.java</a></tt>
for a simple
example which you can use to develop your own rules. You will also need to
add your rule's class to the <tt>getRelevantRules()</tt> method in <tt>&lt;YourLanguage&gt;.java</tt> to activate it.


<h2><a name="translation">Translating the user interface</a></h2>

<p>We use <a href="https://www.transifex.net/projects/p/languagetool/">Transifex</a> to translate our property
files. Updated translations are only copied to the LanguageTool source before a release, so
if you need an early preview, say so on the LanguageTool mailing list and we'll update the files accordingly.</p>


<h2><a name="background">Background information</a></h2>

<p>For some background information, Daniel Naber's diploma thesis
about the original version of LanguageTool from 2003 is available - please note that this refers to an earlier version of LanguageTool
which was written in Python:</p>

<ul>
  <li><?=show_link("PDF, 650 KB", "http://www.danielnaber.de/languagetool/download/style_and_grammar_checker.pdf", 0) ?></li>
  <li><?=show_link("Postscript (.ps.gz), 630 KB", "http://www.danielnaber.de/languagetool/download/style_and_grammar_checker.ps.gz", 0) ?></li>
</ul>

</div>

<!-- -->
<div style="height: 400px"></div>

<?php
include("../../include/footer.php");
?>
