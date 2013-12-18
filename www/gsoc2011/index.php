<?php
$page = "other";
$title = "LanguageTool";
$title2 = "Google Summer of Code 2011";
$lastmod = "2011-08-28 12:30:00 CET";
include("../../include/header.php");
?>
		
<p class="firstpara">LanguageTool participated in Google's Summer of Code 2011 (GSoC2011). What is it?
Quoting the <a href="http://code.google.com/soc/">GSoC Homepage</a>, "Google Summer 
of Code is a global program that offers student developers stipends to write code for various open source software projects." </p>

<p>Both LanguageTool projects have been successfully completed this year:</p>

<p><b>Michael Bryant's</b> project was to add language identification and enable us to reuse
linguistic resources from other projects. These were the rules
included in the <a href="http://www.afterthedeadline.com/">After the Deadline grammar checker</a> (some of them will
be included in version 1.5 after some additional checking)
and conversion of <a href="http://en.wikipedia.org/wiki/Constraint_Grammar">Constraint Grammar</a> (CG) rules into the format of
disambiguation rules. CG is widely used for Scandinavian languages and
we hope that adding an easy option to convert them will enable further
steps to add deeper linguistic analysis or parsing to LanguageTool without
making it too heavy on resources. As far as we know, Michael's
conversion of CG rules is the first open-source Java implementation of
CG. It is also a practical proof that our disambiguation rules have
similar expressive power as CG.</p>

<p><b>Tao Lin's</b> project was twofold: the first part was to develop a Lucene-based indexing
tool that makes it possible to run a rule against a large amount of text. Usually checking
large texts needs a lot of time, but thanks to this tool, the rule can be tested within seconds.
The other part of Tao's project was to add support for Chinese to LanguageTool. The upcoming
version 1.5 of LanguageTool will thus contain more than 200 rules for Chinese text.</p>

<h3>Documentation by the GSoC participants</h3>

<ul>
    <li><a href="http://wiki.languagetool.org/how-to-use-indexer-and-searcher-for-fast-rule-evaluation">How to Use Indexer and Searcher for Fast Rule Evaluation</a> (Tao Lin)</li>
    <li><a href="http://wiki.languagetool.org/developing-chinese-rules">Developing Chinese rules</a> (Tao Lin)</li>
    <li><a href="http://wiki.languagetool.org/adding-a-new-language-to-automatic-language-detection">Adding A New Language To Automatic Language Detection</a> (Michael Bryant)</li>
</ul>

<h3>Other links</h3>

<ul>
    <li><a href="http://wiki.languagetool.org/missing-features">LanguageTool Project ideas</a></li>
    <li><a href="http://code.google.com/soc/">Google Summer of Code 2011 Homepage</a></li>
    <li><a href="http://www.google-melange.com/document/show/gsoc_program/google/gsoc2011/timeline">Google Summer of Code 2011 Timeline</a></li>
</ul>

<?php
include("../../include/footer.php");
?>
