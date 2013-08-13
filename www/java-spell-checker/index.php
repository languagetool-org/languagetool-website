<?php
$page = "development";
$sub_page = "java-spell-checker";
$title = "LanguageTool";
$title2 = "Java-based spell checker";
$lastmod = "2013-05-05 18:20:00 CET";
include("../../include/header.php");
include('../../include/geshi/geshi.php');
?>

<?php include('../../include/github_ribbon.php'); ?>

<h2 class="firstpara">Why?</h2>

<p>It's easy to use LanguageTool as a spell checker in your Java projects. While you can also
use existing projects like <a href="https://github.com/dren-dk/HunspellJNA">HunspellJNA</a> or
<a href="https://github.com/thomas-joiner/HunspellBridJ">HunspellBridJ</a>
(<a href="http://search.maven.org/#search|ga|1|a%3A%22hunspell-bridj%22">at Maven Central</a>),
LanguageTool has some advantages:
</p>

<ol>
    <li>It provides spell checking, but adding more powerful checks, including several grammar checks, is very easy.</li>
    <li>Our goal is to provide 100% pure Java code, whereas the <a href="http://hunspell.sourceforge.net/">Hunspell</a>-based
        alternatives linked above require native code.
        We're not there yet for all languages - if in doubt, run <tt>mvn dependency:tree</tt> on your
        LanguageTool-based Maven project. If the dependencies contain <tt>hunspell-native-libs</tt>, LanguageTool also
        uses Hunspell internally for your language(s) and thus also requires native libraries.</li>
    <li>Hunspell can be slow when it comes to generating suggestions for misspelled words. For languages
        where LanguageTool does not internally use Hunspell (see item 2), it's faster in generating
        suggestions.</li>
    <li>LanguageTool is available at Maven Central and comes with dictionaries included. Those dictionaries
        are the Hunspell dictionaries also used for LibreOffice/OpenOffice.</li>
</ol>

<h2>How?</h2>

<p>See <a href="../java-api">our Java API page</a> for the Maven
dependency you need to specify. Then, use code like this to find
spelling errors in a string:</p>

<div class="xmlrule" style="margin-top:5px">
    <?php hljava('JLanguageTool langTool = new JLanguageTool(new BritishEnglish());
for (Rule rule : langTool.getAllRules()) {
  if (!rule.isSpellingRule()) {
    langTool.disableRule(rule.getId());
  }
}
List<RuleMatch> matches = langTool.check("A speling error");
for (RuleMatch match : matches) {
  System.out.println("Potential typo at line " +
          match.getLine() + ", column " +
          match.getColumn() + ": " + match.getMessage());
  System.out.println("Suggested correction(s): " +
          match.getSuggestedReplacements());
}'); ?>
</div>

<p>If you want more than just spell checking, just remove the first <tt>for</tt> loop and
add a call <tt>langTool.activateDefaultPatternRules()</tt> to activate all rules.
See <a href="../development/">our development documentation</a> for how those rules work.
Need help? Just ask in <a href="../forum">our forum</a> or <a href="../developer-links/">on
the mailing list</a>.</p>

<?php
include("../../include/footer.php");
?>
