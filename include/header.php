<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php print $title." ".$title2 ?></title>
  <?php
  //online:
  $rootUrl = "";
  //local:
  if (gethostname() == 'lisa') {   // Daniel's local server for testing
    $rootUrl = "/languagetool";
  }
  ?>
  <link href="<?php print $rootUrl ?>/css/style.css?2" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="<?php print $rootUrl ?>/favicon.ico?20120923" />
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
  
  <?php if ($enable_textcheck) { ?>
    <script language="javascript" type="text/javascript" src="<?php print $rootUrl ?>/online-check/tiny_mce/tiny_mce.js"></script>
    <script language="javascript" type="text/javascript" src="<?php print $rootUrl ?>/online-check/tiny_mce/plugins/atd-tinymce/editor_plugin.js"></script>
    <script language="javascript" type="text/javascript">
    
     tinyMCE.init({
         mode : "textareas",
         plugins                     : "AtD,paste",
       
         //Keeps Paste Text feature active until user deselects the Paste as Text button
         paste_text_sticky : true,
         //select pasteAsPlainText on startup
         setup : function(ed) {
             ed.onInit.add(function(ed) {
                 ed.pasteAsPlainText = true;
             });
         },
    
         /* translations: */
         languagetool_i18n_no_errors : 
            {
             // "No errors were found.":
             'de-DE': 'Keine Fehler gefunden.'
            },
         languagetool_i18n_explain : 
            {
             // "Explain..." - shown if there's an URL with a more detailed description:
             'de-DE': 'Mehr Informationen...'
            },
         languagetool_i18n_ignore_once : 
            {
             // "Ignore suggestion":
             'de-DE': 'Hier ignorieren'
            },
         languagetool_i18n_ignore_all : 
            {
             // "Ignore this kind of error":
             'de-DE': 'Fehler dieses Typs ignorieren'
            },
            
         languagetool_i18n_current_lang :    function() { return document.checkform.lang.value; },
         /* the URL of your proxy file: */
         languagetool_rpc_url                 : "<?php print $rootUrl ?>/online-check/tiny_mce/plugins/atd-tinymce/server/proxy.php?url=",
         /* edit this file to customize how LanguageTool shows errors: */
         languagetool_css_url                 : "<?php print $rootUrl ?>/online-check/tiny_mce/plugins/atd-tinymce/css/content.css",
         /* this stuff is a matter of preference: */
         theme                              : "advanced",
         theme_advanced_buttons1            : "",
         theme_advanced_buttons2            : "",
         theme_advanced_buttons3            : "",
         theme_advanced_toolbar_location    : "none",
         theme_advanced_toolbar_align       : "left",
         theme_advanced_statusbar_location  : "bottom",  // activated so we have a resize button
         theme_advanced_path                : false,     // don't display path in status bar
         theme_advanced_resizing            : true,
         theme_advanced_resizing_use_cookie : false,
         /* disable the gecko spellcheck since AtD provides one */
         gecko_spellcheck                   : false
     });
    
     function doit() {
         var langCode = document.checkform.lang.value;
         tinyMCE.activeEditor.execCommand('mceWritingImprovementTool', langCode);
     }
     </script>
  <?php } ?>

</head>
<body>

<?php
list($usec, $sec) = explode(" ", microtime()); 
$start_time = ((float)$usec + (float)$sec);
include("help.php");

function makeEntry($name, $visName) {
	global $page, $sub_page, $rootUrl;
	if (($page == $name && !$sub_page) || ($name == "." && $page == "homepage")) {
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
	if ($name == ".") {
	    if ($page == "news") {
	      ?>
          <div class="submenuitem activeMenuitem">News</div>
          <?php
	    } else {
	      ?>
          <div class="submenuitem"><a href="<?php print $rootUrl ?>/news">News</a></div>
          <?php
	    }

	    if ($page == "screenshots") {
	      ?>
          <div class="submenuitem activeMenuitem">Screenshots</div>
          <?php
	    } else {
	      ?>
          <div class="submenuitem"><a href="<?php print $rootUrl ?>/screenshots">Screenshots</a></div>
          <?php
	    }

	    if ($page == "languages") {
	      ?>
          <div class="submenuitem activeMenuitem">Supported Languages</div>
          <?php
	    } else {
	      ?>
          <div class="submenuitem"><a href="<?php print $rootUrl ?>/languages">Supported Languages</a></div>
          <?php
	    }

	    if ($page == "usage") {
	      ?>
          <div class="submenuitem activeMenuitem">Usage</div>
          <?php
	    } else {
	      ?>
          <div class="submenuitem"><a href="<?php print $rootUrl ?>/usage">Usage</a></div>
          <?php
	    }

	    if ($page == "links") {
	      ?>
          <div class="submenuitem activeMenuitem">Links</div>
          <?php
	    } else {
	      ?>
          <div class="submenuitem"><a href="<?php print $rootUrl ?>/links">Links</a></div>
          <?php
	    }
	}
	if ($name == "development") {
	    if ($sub_page == "ruleeditor") {
	      ?>
          <div class="submenuitem activeMenuitem">Rule Creator</div>
          <?php
	    } else {
	      ?>
          <div class="submenuitem"><a href="<?php print $rootUrl ?>/ruleeditor">Rule Creator</a></div>
          <?php
	    }
		?>
        <div class="submenuitem"><a href="http://sourceforge.net/tracker/?limit=25&amp;func=&amp;group_id=110216&amp;atid=655717&amp;assignee=&amp;status=&amp;category=&amp;artgroup=&amp;keyword=&amp;submitter=&amp;artifact_id=&amp;assignee=&amp;status=1&amp;category=&amp;artgroup=&amp;submitter=&amp;keyword=&amp;artifact_id=&amp;submit=Filter">Bug Reports</a></div>
        <?php
        if ($sub_page == "java-api") {
          ?>
           <div class="submenuitem activeMenuitem">Java API</div>
           <?php
        } else {
          ?>
           <div class="submenuitem"><a href="<?php print $rootUrl ?>/java-api/">Java API</a></div>
           <?php
        }
        ?>
		<div class="submenuitem"><a href="<?php print $rootUrl ?>/development/api/">Javadoc</a></div>
        <?php
        if ($sub_page == "http-api") {
          ?>
           <div class="submenuitem activeMenuitem">HTTP API</div>
           <?php
        } else {
          ?>
           <div class="submenuitem"><a href="<?php print $rootUrl ?>/http-api/">HTTP API</a></div>
           <?php
        }
        ?>
        <div class="submenuitem"><a href="http://wiki.languagetool.org">Wiki</a></div>
        <?php
        if ($page == "developer-links") {
          ?>
             <div class="submenuitem activeMenuitem">Links</div>
             <?php
        } else {
          ?>
             <div class="submenuitem"><a href="<?php print $rootUrl ?>/developer-links">Links</a></div>
             <?php
        }
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
			<?php makeEntry("forum", "Forum"); ?>
			<?php makeEntry("wikicheck", "WikiCheck"); ?>
			<?php makeEntry("development", "Development"); ?>
			<?php makeEntry("contact", "Contact"); ?>

			<div style="margin-top:70px;font-size:12px">
              <table>
                <tr>
                  <td valign="top"><a href="http://twitter.com/languagetoolorg"><img border="0" style="margin-left:10px;margin-right:5px" src="http://www.languagetool.org/images/twitter_link16x16.png" alt="twitter logo"/></a></td>
                  <td><a href="http://twitter.com/languagetoolorg">Follow us on twitter</a><br/>
                    <span style="color:#777777">(also <a href="http://api.twitter.com/1/statuses/user_timeline.rss?screen_name=languagetoolorg">via RSS</a>)</span>
                  </td>
                </tr>
                <tr>
                  <td valign="top"><a href="http://www.facebook.com/LanguageTool"><img border="0" style="margin-left:10px;margin-right:5px" src="http://www.languagetool.org/images/facebook_link16x16.png" alt="facebook logo"/></a></td>
                  <td><a href="http://www.facebook.com/LanguageTool">Find us on Facebook</a>
                  </td>
                </tr>
              </table>
            </div>
		</div>
	</td>
	<td class="content">

		<!-- MAIN TEXT -->
