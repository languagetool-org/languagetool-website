<?php
$page = "wikicheck";
$title = "LanguageTool";
$title2 = "WikiCheck";
$lastmod = "2012-05-20 13:06:00 CET";
include("../../include/header.php");
?>

<!-- NOTE: also see http://community.languagetool.org/wikiCheck/ -->

<p class="firstpara">This page helps you to check Wikipedia articles using LanguageTool. Please be aware
that automatically extracting plain text from Wikipedia isn't that easy, so you will probably get quite some
false alarms due to formatting issues.<p>

<p>If you fix an error in the Wikipedia found with this page, please mention "LanguageTool" in your change comment
at Wikipedia. Please share your experiences in our <a href="/forum">Forum</a> or
<a href="https://lists.sourceforge.net/lists/listinfo/languagetool-devel">mailing list</a>.</p>


<table>
  <tr>
    <td><label for="wikipediaUrl">Wikipedia URL:</label></td>
    <td>

      <form action="http://community.languagetool.org/wikiCheck/index" method="get" >
        <label id="wikipediaUrl">
          <input style="width:350px" name="url" value="http://en.wikipedia.org/wiki/Grammar"/>
        </label>
        <input type="submit" value="Check Page"/>
      </form>

    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label for="language">Language:</label></td>
    <td>

      <form action="http://community.languagetool.org/wikiCheck/index" method="get" >
        <label id="language">
          <select name="url">
            <option value="random:en">English</option>
            <optgroup label="all languages">
              <!--<option value="random:ast">Asturian</option>-->
              <!--<option value="random:be">Belarusian</option>-->
              <option value="random:br">Breton</option>
              <option value="random:ca">Catalan</option>
              <option value="random:zh">Chinese</option>
              <option value="random:da">Danish</option>
              <option value="random:nl">Dutch</option>
              <option value="random:en">English</option>
              <option value="random:eo">Esperanto</option>
              <option value="random:fr">French</option>
              <option value="random:gl">Galician</option>
              <option value="random:de">German</option>
              <option value="random:is">Icelandic</option>
              <option value="random:it">Italian</option>
              <option value="random:km">Khmer</option>
              <!--<option value="random:lt">Lithuanian</option>-->
              <option value="random:ml">Malayalam</option>
              <option value="random:pl">Polish</option>
              <option value="random:ro">Romanian</option>
              <option value="random:ru">Russian</option>
              <option value="random:sk">Slovak</option>
              <option value="random:sl">Slovenian</option>
              <option value="random:es">Spanish</option>
              <option value="random:tl">Tagalog</option>
              <option value="random:uk">Ukrainian</option>
            </optgroup>
          </select>
        </label>
        <input type="submit" value="Check Random Page"/>
      </form>

    </td>
  </tr>
</table>

<h2>Bookmarklet</h2>

<p>
Bookmark the following link and then open the bookmark when you are on a Wikipedia page - LanguageTool will then check that page:
<a href="javascript:(function(){%20window.open('http://community.languagetool.org/wikiCheck/index?url='+escape(location.href));%20})();">WikiCheck Bookmarklet</a></p>

<div style="height: 400px"></div>

<?php
include("../../include/footer.php");
?>
