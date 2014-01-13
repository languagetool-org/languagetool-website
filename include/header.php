<?php

  function current_url(){
    $s = &$_SERVER;
    $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;
    $sp = strtolower($s['SERVER_PROTOCOL']);
    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
    $port = $s['SERVER_PORT'];
    $port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
    $host = isset($s['HTTP_X_FORWARDED_HOST']) ? $s['HTTP_X_FORWARDED_HOST'] : isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : $s['SERVER_NAME'];
    $full_current_url = $protocol . '://' . $host . $port . $s['REQUEST_URI'];
    return $full_current_url;
  }

  $hasJQuery = 0;

  $assets = array(
    'links' => array(
      array(
        'src' => $rootUrl . '/css/style.css?v3',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => 'screen'
      ),
      array(
        'src' => $rootUrl . '/favicon.ico?',
        'rel' => "shortcut icon",
        'type' => "",
        'media' => ''
      ),
      array(
        'src' => $rootUrl . '/js/fancybox/jquery.fancybox-1.3.4.css',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => 'screen'
      ),
      array(
        'src' => $rootUrl . '/css/zebra_dialog.css',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => ''
      ),
      array(
        'src' => $rootUrl . '/css/tablesorter-style.css',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => ''
      ),
      array(
        'src' => $rootUrl . '/css/lib/dropkick/dropkick.css',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => ''
      ),
    )
  );
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php print $title." ".$title2 ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<?php foreach ($assets['links'] as $link) { ?>
  <link href="<?= $link['src'] ?>" rel="<?= $link['rel'] ?>" type="<?= $link['type'] ?>" media="<?= $link['media'] ?>" />
<?php } ?>

<script type="text/javascript" src="/js/jquery-1.7.0.min.js"></script>
<!-- used only for development:
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.5.0/less.min.js"></script>
-->

<?php if ($enable_fancybox) { ?>
  <script type="text/javascript" src="<?php print $rootUrl ?>/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <?php $hasJQuery = 1; ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a.fancyboxImage").fancybox({
          'hideOnContentClick': true,
          'titlePosition': 'inside'
        });
      });
    </script>
<?php } ?>

<?php if ($enable_download_dialogs) { ?>
  <script type="text/javascript" src="<?php print $rootUrl ?>/js/zebra_dialog.js"></script>
  <script type="text/javascript">
    function showDownloadOfficeThanks() {
        $.Zebra_Dialog('<b>Thanks for downloading LanguageTool!</b>' +
            '<ul>' +
            '<li>Note that if you have a 32-bit version of LibreOffice/OpenOffice, you will also need a 32-bit version of Java - ' +
            '  LanguageTool will not work otherwise.</li>' + 
            '<li>Use <em>Tools &rarr; Extension Manager &rarr; Add&hellip;</em> in LibreOffice/OpenOffice to install this file</li>' +
            '  <li><strong>Restart LibreOffice/OpenOffice</strong> (including quickstarter) after installation of this extension</li>' +
            '  <li>If you are using LibreOffice and you want to check English texts:' +
            '  Use <em>Options &rarr; Language Settings &rarr; Writing Aids &rarr; Edit&hellip;</em> to disable LightProof and enable LanguageTool for English</li>' +
            '  <li><strong>Having problems? Please see <a href="<?php print $rootUrl ?>/issues">our checklist</a>.</strong></li>' +
            '</ul>',
            {width: 600});
    }
    function showDownloadStandaloneThanks() {
        $.Zebra_Dialog('<b>Thanks for downloading LanguageTool!</b><p>Unzip the file and start languagetool.jar by double clicking it.</p>',
            {width: 600});
    }
  </script>
<?php } ?>

<?php if ($enable_tablesorter) { ?>
  <?php $hasJQuery = 1; ?>
  <script type="text/javascript" src="<?php print $rootUrl ?>/js/tablesorter/jquery.tablesorter.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".sortable").tablesorter({
        headers: {
          2: {
            sorter: false
          }
        }
      });
    });
  </script>
<?php } ?>

<?php if ($enable_textcheck) { ?>
  <script language="javascript" type="text/javascript" src="<?php print $rootUrl ?>/online-check/tiny_mce/tiny_mce.js"></script>
  <script language="javascript" type="text/javascript" src="<?php print $rootUrl ?>/online-check/tiny_mce/plugins/atd-tinymce/editor_plugin.js?v2014013"></script>
  <?php if ($hasJQuery == 0) { ?>
    <script language="javascript" type="text/javascript" src="<?php print $rootUrl ?>/js/jquery-1.7.0.min.js"></script>
  <?php } ?>
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
           ed.onKeyDown.add(function(ed, e) {
               if (e.ctrlKey && e.keyCode == 13) {  // Ctrl+Return
                   doit();
                   tinymce.dom.Event.cancel(e);
               } else if (e.keyCode == 27) {   // Escape
                   // doesn't work in firefox, the re-init in turnOffFullScreenView()
                   // might clash with event handling:
                   if ($('form#checkform').hasClass('fullscreen')) {
                       setTimeout(turnOffFullScreenView, 100);  // use timeout to prevent problems on Firefox
                   }
               }
           });
           // remove any 'no errors found' message:
           ed.onPaste.add(function(ed, e) {
               $('#feedbackMessage').html('');
           });
       },

       /* translations: */
       languagetool_i18n_no_errors :
          {
           // "No errors were found.":
           'br': 'Fazi ebet.',
           'de-DE': 'Keine Fehler gefunden.',
           'de-DE-x-simple-language': 'Keine möglichen Verstöße gegen Leichte Sprache gefunden.',
           'eo': 'Neniuj eraroj trovitaj.',
           'fr': 'Aucune erreur trouvée.',
           'ru': 'Ошибки не найдены.',
           'ca': 'No s\'ha trobat cap error',
           'ast': 'Nun s\'atoparon errores',
           'pl': 'Nie znaleziono błędów'
          },
       languagetool_i18n_explain :
          {
           // "Explain..." - shown if there's an URL with a more detailed description:
           'br': 'Muioc’h a ditouroù…',
           'de-DE': 'Mehr Informationen...',
           'de-DE-x-simple-language': 'Mehr Informationen...',
           'eo': 'Pliaj klarigoj…',
           'fr': 'Plus d’informations…',
           'ru': 'Подробнее…',
           'ca': 'Més informació…',
           'ast': 'Más información…',
           'pl': 'Więcej informacji…'
          },
       languagetool_i18n_ignore_once :
          {
           // "Ignore this error":
           'br': 'Na ober van ouzh ar fazi-mañ',
           'de-DE': 'Hier ignorieren',
           'de-DE-x-simple-language': 'Hier ignorieren',
           'eo': 'Ignori tiun eraron',
           'fr': 'Ignorer cette erreur',
           'ru': 'Пропустить эту ошибку',
           'ca': 'Ignora el suggeriment',
           'ast': 'Inorar esti error',
           'pl': 'Ignoruj ten błąd'
          },
       /*languagetool_i18n_ignore_all :
          {
           // "Ignore this kind of error":
           'br': 'Na ober van ouzh ar fazioù seurt-se',
           'de-DE': 'Fehler dieses Typs ignorieren',
           'de-DE-x-simple-language': 'Fehler dieses Typs ignorieren',
           'eo': 'Ignori tiun specon de eraroj',
           'fr': 'Ignorer ce type d’erreurs',
           'ru': 'Пропустить этот тип ошибок',
           'ca': 'Ignora aquesta classe d\'errors',
           'ast': 'Inorar esta mena d'errores'
          },*/

       languagetool_i18n_current_lang :    function() { return document.checkform.lang.value; },
       /* the URL of your proxy file: */
       languagetool_rpc_url                 : "<?php print $rootUrl ?>/online-check/tiny_mce/plugins/atd-tinymce/server/proxy.php?url=",
       /* edit this file to customize how LanguageTool shows errors: */
       languagetool_css_url                 : "<?php print $rootUrl ?>/online-check/tiny_mce/plugins/atd-tinymce/css/content.css?v3",
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

    function fullscreen_toggle() {
      if ($('form#checkform').hasClass('fullscreen')) {
        turnOffFullScreenView();
      } else {
        turnOnFullScreenView();
      }
      return false;
    }

   function turnOffFullScreenView() {
       // re-init the editor - this way we lose the error markers, but it's needed
       // to get proper position of the context menu:
       // source: http://stackoverflow.com/questions/4651676/how-do-i-remove-tinymce-and-then-re-add-it
       tinymce.EditorManager.execCommand('mceRemoveControl',true, 'checktext');
       tinymce.EditorManager.execCommand('mceAddControl', true, 'checktext');
       $('form#checkform').removeClass('fullscreen');
       $('body').removeClass('fullscreen');
       $('iframe#checktext_ifr').height(270);
       tinymce.execCommand('mceFocus', false, 'checktext');
   }

   function turnOnFullScreenView() {
       tinymce.EditorManager.execCommand('mceRemoveControl',true, 'checktext');
       tinymce.EditorManager.execCommand('mceAddControl', true, 'checktext');
       $('body').addClass('fullscreen');
       $('form#checkform').addClass('fullscreen');
       $('iframe#checktext_ifr').height( $(window).height() - $('#editor_controls').outerHeight() - $('#handle').outerHeight() );
       tinymce.execCommand('mceFocus', false, 'checktext');
   }

   function doit() {
       document.checkform._action_checkText.disabled = true;
       var langCode = document.checkform.lang.value;
       tinyMCE.activeEditor.execCommand('mceWritingImprovementTool', langCode);
   }

   $(function(){
    $(window).resize(function(){
      if ($('form#checkform').hasClass('fullscreen')) {
        $('iframe#checktext_ifr').height( $(window).height() - $('#editor_controls').outerHeight() );
      }
    });
   });

   </script>
<?php } ?>

<script type="text/javascript" src="<?php print $rootUrl ?>/css/lib/dropkick/jquery.dropkick.js"></script>
<script type="text/javascript">
  $(function(){
    <?php
    require_once("default_texts.php");
    print getDefaultDemoTextMappingForJavaScript();
    ?>
    $('.dropkick').dropkick({
      change: function (value, label) {
          value = value.replace(/-..$/, "");  // en-US -> en
          var newText = languageToText[value];  // 'languageToText' comes from default_texts.php
          if (newText) {
              tinyMCE.activeEditor.setContent(newText);
              tinyMCE.get('checktext').focus();
          } else {
              tinyMCE.activeEditor.setContent("Add your text here");
              tinyMCE.get('checktext').focus();
              tinyMCE.activeEditor.selection.select(tinyMCE.activeEditor.getBody(), true);
              // TODO: set real placeholder instead?
          }
      }
    });
  });
</script>

<script type="text/javascript">
  function resize_buttons(){
    var max_height = 0;
    $('.button_container .title').each(function(){
      $(this).height('auto');
      if ($(this).height() > max_height) {
        max_height = $(this).height();
      }
    });
    $('.button_container .title').height(max_height);    
  }
  $(function(){
    $(window).resize(function(){
      resize_buttons();
    });
    resize_buttons();
  });
</script>
