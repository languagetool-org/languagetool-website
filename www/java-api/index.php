<?php
$page = "development";
$sub_page = "java-api";
$title = "LanguageTool";
$title2 = "Java API";
$lastmod = "2013-04-02 23:20:00 CET";
include("../../include/header.php");
include('../../include/geshi/geshi.php');
?>

<h2 class="firstpara">Embedding LanguageTool in Java applications</h2>

    <p>Get LanguageTool by downloading the *.zip package from the homepage or by adding a
    dependency like this to your <?=show_link("Maven", "http://maven.apache.org/run-maven/", 0) ?> pom.xml:</p>

<div class="xmlrule" style="margin-top:5px">
<?php hl('<dependency>
  <groupId>org.languagetool</groupId>
  <artifactId>language-en</artifactId>
  <version>2.1</version>
</dependency>'); ?>
</div>

    <p>This will get the dependencies needed to check English. Use <tt>language-de</tt> as an artifactId for German etc.
    (<?=show_link("see all artifacts", "http://search.maven.org/#search|ga|1|languagetool")?>).
    If you want to use all languages that LanguageTool supports, use <tt>language-all</tt>.</p>

    <p>If you download the ZIP instead, you will need the JAR files and everything under <tt>org/languagetool</tt> 
    in your classpath.</p>

    <p>To use LanguageTool, you just need to create a <tt>JLanguageTool</tt> object and use that
	to check your text. Also see <?=show_link("the API documentation", "/development/api/", 0) ?>. For example:</p>

<div class="xmlrule" style="margin-top:5px">
	<?php hljava('JLanguageTool langTool = new JLanguageTool(new BritishEnglish());
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
</div>
	
    <p>If you want spell checking, you will need to specify a language variant in the <tt>JLanguageTool</tt> constructor,
    e.g. <tt>new AmericanEnglish()</tt> instead of just <tt>new English()</tt>.</p>

<?php
include("../../include/footer.php");
?>
