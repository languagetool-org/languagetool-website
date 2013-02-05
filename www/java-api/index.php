<?php
$page = "development";
$sub_page = "java-api";
$title = "LanguageTool";
$title2 = "Java API";
$lastmod = "2013-02-05 23:20:00 CET";
include("../../include/header.php");
include('../../include/geshi/geshi.php');
?>

<h2 class="firstpara">Embedding LanguageTool in Java applications</h2>

    <p>Get LanguageTool by downloading the *.zip package from the homepage or by adding this dependency to your
    <?=show_link("Maven", "http://maven.apache.org/run-maven/", 0) ?> pom.xml:</p>

<div class="xmlrule" style="margin-top:5px">
<?php hl('<dependency>
  <groupId>org.languagetool</groupId>
  <artifactId>languagetool</artifactId>
  <version>2.0.1</version>
</dependency>'); ?>
</div>

    <p>The Maven artifact contains both code and resources for all languages and is thus quite large (48MB).</p>

    <p>If you download the ZIP instead, you will need most JARs, <tt>org/languagetool/rules</tt> and <tt>org/languagetool/resources</tt>
    in your classpath. You can skip the following JARs as they are not needed at runtime:
    lucene-*.jar, junit.jar, bliki-3.0.3.jar, RuleConverterGUI.jar, RuleConverter.jar</p>

    <p>To use LanguageTool, you just need to create a <tt>JLanguageTool</tt> object and use that
	to check your text. Also see <?=show_link("the API documentation", "/development/api/", 0) ?>. For example:</p>

<div class="xmlrule" style="margin-top:5px">
	<?php hljava('JLanguageTool langTool = new JLanguageTool(Language.BRITISH_ENGLISH);
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
    e.g. <tt>Language.AMERICAN_ENGLISH</tt> instead of just <tt>Language.ENGLISH</tt>.</p>

<?php
include("../../include/footer.php");
?>
