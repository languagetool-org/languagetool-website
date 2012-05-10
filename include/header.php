<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php print $title." ".$title2 ?></title>
  <?php
  //online:
  $rootUrl = "";
  //local:
  //$rootUrl = "/languagetool";
  ?>
  <link href="<?php print $rootUrl ?>/css/style.css?2" rel="stylesheet" type="text/css" />
  <?php if ($enable_fancybox) { ?>
    <script type="text/javascript" src="<?php print $rootUrl ?>/js/jquery-1.4.min.js"></script>
    <script type="text/javascript" src="<?php print $rootUrl ?>/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" href="<?php print $rootUrl ?>/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    <script type="text/javascript">
    <!--
      $(document).ready(function() {
        $("a.fancyboxImage").fancybox({
          'hideOnContentClick': true,
          'titlePosition': 'inside'
        });
      });
    // -->
    </script>
  <?php } ?>
  <?php if ($enable_tablesorter) { ?>
    <link href="<?php print $rootUrl ?>/css/tablesorter-style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php print $rootUrl ?>/js/jquery-1.4.min.js"></script>
    <script type="text/javascript" src="<?php print $rootUrl ?>/js/tablesorter/jquery.tablesorter.js"></script>
    <script type="text/javascript">
    <!--
      $(document).ready(function() {
          $(".sortable").tablesorter({
            headers: {
              2: {
                sorter: false
              }
            }
          });
      }
    );
    // -->
    </script>
  <?php } ?>
</head>
<body>

<?php
list($usec, $sec) = explode(" ", microtime()); 
$start_time = ((float)$usec + (float)$sec);
include("help.php");

function makeEntry($name, $visName) {
	global $page;
	if ($page == $name || ($name == "." && $page == "homepage")) {
		?>
		<div class="menuitem activeMenuitem"><? print $visName ?></div>
		<?php
	} else {
		$url = $name;
		if ($page == "homepage") {
			$url = $name;
		} else {
			if (substr($name, 0, 7) == "http://") {
				$url = $name;
			} else {
				$url = "../".$name;
			}
		}
		?>
        <div class="menuitem"><a href="<?php print $url ?>" style="display: block;"><? print $visName ?></a></div>
		<?php
	}
	if ($name == "development") {
		?>
		<div class="submenuitem"><a href="http://sourceforge.net/tracker/?limit=25&amp;func=&amp;group_id=110216&amp;atid=655717&amp;assignee=&amp;status=&amp;category=&amp;artgroup=&amp;keyword=&amp;submitter=&amp;artifact_id=&amp;assignee=&amp;status=1&amp;category=&amp;artgroup=&amp;submitter=&amp;keyword=&amp;artifact_id=&amp;submit=Filter">Bug Reports</a></div>
		<?php
	}
}
?>

<table border="0" width="100%">
<tr>
	<td></td>
	<td>
		<?php if ($page == "homepage") { ?>
			<h1><?php print $title ?></h1>
		<?php } else { ?>
			<h1 id="hplink"><a href="/"><?php print $title ?></a></h1>
		<?php } ?>
	</td>
	<td><h1 style="text-align:left"><?php print $title2 ?></h1></td>
</tr>
<tr>
	<td width="43"></td>
	<td width="201" valign="top">
		<div id="menu">
			<?php makeEntry(".", "Homepage"); ?>
			<?php makeEntry("screenshots", "Screenshots"); ?>
			<?php makeEntry("languages", "Supported Languages"); ?>
			<?php makeEntry("usage", "Usage"); ?>
			<?php makeEntry("forum", "Forum"); ?>
			<?php makeEntry("development", "Development"); ?>
			<?php makeEntry("http://languagetool.wikidot.com/", "Wiki"); ?>
			<?php makeEntry("links", "Links &amp; Resources"); ?>

			<div style="margin-top:70px;font-size:12px">
              <table>
                <tr>
                  <td valign="top"><a href="http://twitter.com/languagetoolorg"><img border="0" style="margin-left:10px;margin-right:5px" src="http://www.languagetool.org/images/twitter_link16x16.png" alt="twitter logo"/></a></td>
                  <td><a href="http://twitter.com/languagetoolorg">Follow us on twitter</a><br/>
                    <span style="color:#777777">(also <a href="http://api.twitter.com/1/statuses/user_timeline.rss?screen_name=languagetoolorg">via RSS</a>)</span>
                  </td>
                </tr>
              </table>
            </div>
		</div>
	</td>
	<td class="content">

		<!-- MAIN TEXT -->
