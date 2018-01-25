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

  function getRoot() {
    return isset($rootUrl) ? $rootUrl : '';
  }

  $hasJQuery = 0;

  $assets = array(
    'links' => array(
      array(
        'src' => getRoot() . '/css/style.css?v34',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => 'screen'
      ),
      array(
        'src' => getRoot() . '/favicon.ico',
        'rel' => "shortcut icon",
        'type' => "",
        'media' => ''
      ),
      array(
        'src' => getRoot() . '/js/fancybox/jquery.fancybox-1.3.4.css',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => 'screen'
      ),
      array(
        'src' => getRoot() . '/css/zebra_dialog.css',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => ''
      ),
      array(
        'src' => getRoot() . '/css/tablesorter-style.css',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => ''
      ),
      array(
        'src' => getRoot() . '/css/lib/dropkick/dropkick.css?v2',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => ''
      ),
      array(
        'src' => getRoot() . '/css/jquery-ui/jquery-ui.min.css',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => ''
      ),
      array(
        'src' => getRoot() . '/css/jquery-ui/jquery-ui.structure.min.css',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => ''
      ),
      array(
        'src' => getRoot() . '/css/jquery-ui/jquery-ui.theme.min.css',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => ''
      ),
	  array(
        'src' => getRoot() . '/css/tooltip.css',
        'rel' => "stylesheet",
        'type' => "text/css",
        'media' => ''
      ),
    )
  );
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= $title ?></title>
<?php if (!isset($page) || $page != 'Human Proofreading') { ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php } ?>
<link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/oldceeleldhonbafppcapldpdifcinji">

<?php if ($_SERVER['PHP_SELF'] == "/index.php" || $_SERVER['PHP_SELF'] == "/de/index.php") { ?>
    <script src="/js/stacktrace.min.js"></script>
    <script type="text/javascript">
        var callback = function(stackframes) {
            var stringifiedStack = stackframes.map(function(sf) {
                return sf.toString();
            }).join('\n');
            $.post("/log.php", { "msg": "FastSpringErrorViaStackTraceJS: " + stringifiedStack });
            console.log("FastSpringErrorViaStackTraceJS: " + stringifiedStack);
        };
        var errback = function(err) {};
        function errorCallback(code, string) {
            console.log("Error: ", code, string);
            if (typeof(_paq) !== 'undefined') {  // Piwik tracking
                _paq.push(['trackEvent', "FastSpringError", code, string]);
            }
            $.post("/log.php", { "msg": "FastSpringError: " + code + ": " + string });
            StackTrace.get().then(callback).catch(errback);
        }
        function closedCallback(orderObjOrNull) {
            console.log("orderObjOrNull: ", orderObjOrNull);
            if (typeof(_paq) !== 'undefined') {  // Piwik tracking
                if (orderObjOrNull === null) {
                    _paq.push(['trackEvent', "FastSpring", "OrderPopupClosed"]);
                } else {
                    _paq.push(['trackEvent', "FastSpring", "OrderFinished"]);
                    fastspring.builder.reset();
                    window.location.replace("https://languagetoolplus.com/subscribe/?orderId=" + orderObjOrNull.id);
                }
            }
        }
        function contactForm() {
            if (typeof(_paq) !== 'undefined') {  // Piwik tracking
                _paq.push(['trackEvent', "Business Contact", "DialogOpened"]);
            }
            vex.dialog.open({
                unsafeMessage: "<p style='margin-bottom: 8px'>Wir erklären Ihnen gerne, wie Sie die Premium-Version von LanguageTool " +
                    "für Ihr Unternehmen nutzen können. Ihre Vorteile:</p>" +
                    "<ul style='margin-left:20px'>" +
                    "  <li>eigener Server - keine Daten verlassen Ihr Unternehmen</li>" +
                    "  <li>Integration in Microsoft Word als Add-on</li>" +
                    "  <li>erweiterte Fehlerprüfung</li>" +
                    //"  <li>einheitliches, firmenweites Wörterbuch</li>" +
                    "</ul>" +
                    "<p style='margin-top:8px'>Schreiben Sie uns unter <a href='mailto:support@" + "languagetoolplus.com'>support@" + "languagetoolplus.com</a>!</p>",
                buttons: [
                    $.extend({}, vex.dialog.buttons.YES, { text: "OK" })
                ]
            });
        }
        
        // source: https://stackoverflow.com/questions/133925/javascript-post-request-like-a-form-submit
        function post(path, params) {
            // The rest of this code assumes you are not using a library.
            // It can be made less wordy if you use one.
            var form = document.createElement("form");
            form.setAttribute("method", "POST");
            form.setAttribute("action", path);
            for(var key in params) {
                if(params.hasOwnProperty(key)) {
                    var hiddenField = document.createElement("input");
                    hiddenField.setAttribute("type", "hidden");
                    hiddenField.setAttribute("name", key);
                    hiddenField.setAttribute("value", params[key]);
                    form.appendChild(hiddenField);
                }
            }
            document.body.appendChild(form);
            form.submit();
        }
    </script>
    <?php
    $fsStorefront = "languagetooler.onfastspring.com/popup-languagetool-org";
    if (isset($_SERVER['QUERY_STRING']) && strpos($_SERVER['QUERY_STRING'], 'testmode') !== false) {
        $fsStorefront = "languagetooler.test.onfastspring.com/popup-languagetool-org";
    }
    ?>
    <script id="fsc-api"
            src="https://d1f8f9xcsvx3ha.cloudfront.net/sbl/0.7.4/fastspring-builder.min.js"
            type="text/javascript"
            data-storefront="<?=$fsStorefront?>"
            data-error-callback="errorCallback"
            data-popup-closed="closedCallback"
            >
    </script>   
<?php } ?>

<script src="/js/vex/vex.combined.min.js"></script>
<script>vex.defaultOptions.className = 'vex-theme-os'</script>
<link rel="stylesheet" href="/js/vex/vex.css" />
<link rel="stylesheet" href="/js/vex/vex-theme-os.css" />

<?php foreach ($assets['links'] as $link) { ?>
  <link href="<?= $link['src'] ?>" rel="<?= $link['rel'] ?>"
    <?php if ($link['type']) { ?>
        type="<?= $link['type'] ?>"
    <?php } ?>
    <?php if ($link['media']) { ?>
        media="<?= $link['media'] ?>"
    <?php } ?>
  />
<?php } ?>

<script>
<!--
    window.onerror = function (msg, url, line) {
        var message = "Error in " + url + " on line " + line + ": " + msg;
        $.post("/log.php", { "msg": message });
        //if (typeof(_paq) !== 'undefined') {
        //    _paq.push(['trackEvent', 'JSError', msg, url, line]);   // Piwik tracking
        //}
    }
//-->
</script>
<script type="text/javascript" src="/js/jquery-1.7.0.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
<script type='text/javascript' src='/js/touchHover.js'></script>

<link rel="stylesheet" type="text/css" href="/css/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="/css/slick/slick-theme.css"/>
<script type="text/javascript" src="/js/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#testimonialsSlider').slick({autoplay: true, autoplaySpeed: 5000});
    });
</script>
<!-- used only for development:
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.5.0/less.min.js"></script>
-->

<?php if (isset($enable_fancybox) && $enable_fancybox) { ?>
  <script type="text/javascript" src="<?= getRoot() ?>/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
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

<script type="text/javascript">
    function installTrack(trackEventDetail) {
        if (typeof(_paq) !== 'undefined') {  // Piwik tracking
            _paq.push(['trackEvent', 'Extension', 'InstallChromeExtension', trackEventDetail]);
        }
    }
    function installChromeExtension(trackEventDetail) {
        if ($('#extension-is-installed').length > 0) {  // requires 0.8.7 or later of the extension to work
            $.Zebra_Dialog('<b>Looks like the extension is installed already.</b>' +
                '<p>Look for the <img src="/images/logo16x16.png"> icon in the upper right corner of the Chrome window. ' +
                'Click that icon to check your text when you&apos;re in a text area.</p>',
                {width: 600});
            installTrack("alreadyInstalled");
        } else {
            chrome.webstore.install("https://chrome.google.com/webstore/detail/oldceeleldhonbafppcapldpdifcinji",
                function() {
                    installTrack("success:" + trackEventDetail);
                },
                function(reason) {
                    installTrack("failure:" + trackEventDetail + ":" + reason);
                    console.log("Chrome extension not installed: " + reason);
                }
            );
            installTrack(trackEventDetail);
            //debug: chrome.webstore.install('', function() {alert('success');}, function(e) {alert('fail:'+e);});
        }
        return false;
    }
</script>

<script type="text/javascript" src="<?= getRoot() ?>/js/zebra_dialog.js"></script>

<?php if (isset($enable_download_dialogs) && $enable_download_dialogs) { ?>
  <script type="text/javascript">
    function showDownloadOfficeThanks() {
        $.Zebra_Dialog('<b>Thanks for downloading LanguageTool!</b>' +
            '<ul>' +
            '<li><strong>Having problems? Please see <a href="<?= getRoot() ?>/issues">our checklist</a>.</strong></li>' +
            '<li>Note that if you have a 32-bit version of LibreOffice/OpenOffice, you will also need a 32-bit version of Java - ' +
            '  LanguageTool will not work otherwise.</li>' +
            '<li>Use <em>Tools &rarr; Extension Manager &rarr; Add&hellip;</em> in LibreOffice/OpenOffice to install this file</li>' +
            '<li><strong>Restart LibreOffice/OpenOffice</strong> (including quickstarter) after installation of this extension</li>' +
            '<li>If you are using LibreOffice and you want to check <strong>English</strong> or <strong>Russian</strong> texts:' +
            '  Use <em>Options &rarr; Language Settings &rarr; Writing Aids &rarr; Edit&hellip;</em> to disable LightProof and enable' +
            '  LanguageTool for English and/or Russian.</li>' +
            '<li><a href="<?= getRoot() ?>/contact/newsletter.php">Subscribe to our newsletter</a> to get information about new releases</li>' +
            '</ul>',
            {width: 600});
    }
    function showDownloadStandaloneThanks() {
        $.Zebra_Dialog('<b>Thanks for downloading LanguageTool!</b>' +
            '<p>Unzip the file and start languagetool.jar by double clicking it.</p>' +
            '<p><a href="<?= getRoot() ?>/contact/newsletter.php">Subscribe to our newsletter</a> to get information about new releases.</p>',
            {width: 600});
    }
  </script>
<?php } ?>

<script>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
</script>

<?php if (isset($enable_tablesorter) && $enable_tablesorter) { ?>
  <?php $hasJQuery = 1; ?>
  <script type="text/javascript" src="<?= getRoot() ?>/js/tablesorter/jquery.tablesorter.js"></script>
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

<?php if (isset($enable_textcheck) && $enable_textcheck) { ?>

  <script type="text/javascript" src="<?= getRoot() ?>/online-check/tiny_mce/tiny_mce.js"></script>
  <script type="text/javascript" src="<?= getRoot() ?>/online-check/tiny_mce/plugins/atd-tinymce/editor_plugin2.js?v20171221"></script>
  <?php if ($hasJQuery == 0) { ?>
    <script type="text/javascript" src="<?= getRoot() ?>/js/jquery-1.7.0.min.js"></script>
  <?php } ?>
  <script type="text/javascript">

   // translation of language variant names:
   var lt_i18n = {
       'de': {
           'DE': 'Deutschland',
           'AT': 'Österreich',
           'CH': 'Schweiz'
       }
   };

   tinyMCE.init({
       mode : "textareas",
       plugins                     : "AtD,paste",
       //directionality              : 'auto',   // will display e.g. Persian in right-to-left -- doesn't work in MSIE

       //Keeps Paste Text feature active until user deselects the Paste as Text button
       paste_text_sticky : true,
       content_style: "@media (max-width: 750px) { body { margin: 8px 16px !important; } }",
       //select pasteAsPlainText on startup
       setup : function(ed) {
           ed.onInit.add(function(ed) {
               ed.pasteAsPlainText = true;
               if (document.checkform.lang.value) {
                   // needed so we don't get invalid lang + subLang combinations when
                   // user enters the page via back button:
                   fillSubLanguageSelect(document.checkform.lang.value.replace(/-..$/, ""));
               }
               doit();  // check immediately when entering the page
           });
           ed.onKeyDown.add(function(ed, e) {
               if (e.ctrlKey && e.keyCode == 13) {  // Ctrl+Return
                   doit(true);
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
           ed.onKeyUp.add(function(ed, e) {
               if (!e.keyCode || e.keyCode != 17) {  // don't hide if user used Ctrl+Return
                   $('#feedbackMessage').html('');
               }
           });
           ed.onPaste.add(function(ed, e) {
               $('#feedbackMessage').html('');
           });
       },

       /* translations: */
       languagetool_i18n_no_errors :
          {
           // "No errors were found.":
           'ast': 'Nun s\'atoparon errores',
           'br': 'Fazi ebet.',
           'ca': 'No s\'ha trobat cap error',
           'de-DE': 'Keine Fehler gefunden.',
           'de-DE-x-simple-language': 'Keine möglichen Verstöße gegen Leichte Sprache gefunden.',
           'eo': 'Neniuj eraroj trovitaj.',
           'fr': 'Aucune erreur trouvée.',
           'nl': 'Geen aandachtspunten gevonden.',
           'pl': 'Nie znaleziono błędów',
           'pt': 'Não foram encontrados erros.',
           'ru': 'Ошибки не найдены.',
           'fake': 'last entry so all previous items can end with a comma'
          },
       languagetool_i18n_explain :
          {
           // "Explain..." - shown if there's an URL with a more detailed description:
           'ast': 'Más información…',
           'br': 'Muioc’h a ditouroù…',
           'ca': 'Més informació…',
           'de-DE': 'Mehr Informationen...',
           'de-DE-x-simple-language': 'Mehr Informationen...',
           'eo': 'Pliaj klarigoj…',
           'fr': 'Plus d’informations…',
           'nl': 'Uitleg...',
           'pl': 'Więcej informacji…',
           'pt': 'Explicação…',
           'ru': 'Подробнее…',
           'fake': 'last entry so all previous items can end with a comma'
          },

       languagetool_i18n_ignore_once :
          {
           // "Ignore this type of error" -- for non-spelling errors:
           'br': 'Na ober van ouzh fazi a seurt-se',
           'ca': 'Ignora aquesta classe d\'errors',
           'de-DE': 'Fehler dieser Art ignorieren',
           'de-DE-x-simple-language': 'Fehler dieser Art ignorieren',
           'eo': 'Ignori tiun tipon de eraro',
           'es': 'Ignorar este tipo de error',
           'fr': 'Ignorer ce type d’erreur',
           'nl': 'Negeer dergelijke fouten',
           'pl': 'Pomijaj błędy tego typu',
           'pt': 'Ignorar este tipo de erros',
           'sl': 'Prezri te vrste napako',
           'ru': 'Пропустить этот вид ошибок',
           'fake': 'last entry so all previous items can end with a comma'
          },
       languagetool_i18n_ignore_all :
       {
           // "Ignore error for this word" -- for spelling errors:
           'ca': 'Ignora l\'error d\'aquesta paraula',
           'de-DE': 'Fehlermeldung für dieses Wort ignorieren',
           'de-DE-x-simple-language': 'Fehlermeldung für dieses Wort ignorieren',
           'eo': 'Ignori eraron por tiu vorto',
           'es': 'Ignorar el error para esta palabra',
           'fr': 'Ignorer l’erreur pour ce mot',
           'nl': 'Negeer deze spelfout',
           'pl': 'Pomijaj błąd w tym słowie',
           'pt': 'Ignorar erros para esta palavra',
           'sl': 'Prezri napako za to besedo',
           'ru': 'Игнорировать эту ошибку',
           'fake': 'last entry so all previous items can end with a comma'
       },

       languagetool_i18n_ignore_success :
       {
           // after ignoring spelling errors:
           // "Word will be ignored in this session - <a href='https://languagetoolplus.com'>Visit languagetoolplus.com</a> to store ignore words" 
           'de-DE': "Wort wird in dieser Sitzung ignoriert. Tipp: unter <a href='https://languagetoolplus.com'>languagetoolplus.com</a> können Sie Wörter dauerhaft ignorieren",
           'de-DE-x-simple-language': 'xxx'
       },

       languagetool_i18n_rule_examples :
          {
           // "Examples", i.e. examples of incorrect and correct sentences for the matching rule:
           'br': 'Skouerioù…',
           'ca': 'Exemples...',
           'de-DE': 'Beispiele...',
           'de-DE-x-simple-language': 'Beispiele...',
           'eo': 'Ekzemploj…',
           'fr': 'Exemples…',
           'pl': 'Przykłady...',
           'pt': 'Exemplos…',
           'ru': 'Примеры...',
           'sl': 'Primeri ...',
           'fake': 'last entry so all previous items can end with a comma'
          },

       languagetool_i18n_rule_no_examples :
          {
           // "Sorry, no examples found for this rule.":
           'ca': 'No s\'han trobat exemmples per a aquesta regla.',
           'de-DE': 'Leider wurden keine Beispiele für diese Regel gefunden.',
           'eo': 'Neniu ekzemplo trovita por tiu regulo.',
           'fr': 'Aucun exemple trouvé pour cette règle.',
           'pl': 'Niestety nie znaleziono żadnych przykładów',
           'pt': 'Não encontramos exemplos para esta regra.',
           'ru': 'Ни одного примера для этого правила не было найдено.',
           'sl': 'Žal za to napako ni primerov.',
           'fake': 'last entry so all previous items can end with a comma'
          },

       languagetool_i18n_rule_implementation :
          {
           // "Rule implementation":
           'ca': 'Implementació de la regla...',
           'de-DE': 'Technische Details...',
           'de-DE-x-simple-language': 'Technische Details...',
           'eo': 'Realigo de la regulo…',
           'fr': 'Implémentation de la règle…',
           'nl': 'De techniek erachter...',
           'pl': 'Dodatkowe informacje o regule…',
           'pt': 'Detalhes técnicos…',
           'ru': 'Описание реализации правила...',
           'sl': 'Implementacija pravila ...',
           'fake': 'last entry so all previous items can end with a comma'
          },

       languagetool_i18n_suggest_word :
          {
           // "Suggest word for dictionary...":
           // *** Also set languagetool_i18n_suggest_word_url below if you set this ***
           'ca': 'Suggereix una paraula per al diccionari...',
           'de-DE': 'Wort zur Aufnahme vorschlagen...',
           'eo': 'Sugesti vorton por la vortaro…',
           'fr': 'Suggerer un mot pour le dictionnaire…',
           'nl': 'Suggest word for dictionary...',
           'pl': 'Zaproponuj dodanie wyrazu do słownika...',
           'pt': 'Adicionar ao dicionário…',
           'ru': 'Предложить слово для словаря...',
           'fake': 'last entry so all previous items can end with a comma'
          },
       languagetool_i18n_suggest_word_url :
          {
           // "Suggest word for dictionary..." - if you add a community.languagetool.org URL,
           // ask Daniel for the password to the web tool that helps managing the suggestions:
           'ca': 'https://community.languagetool.org/suggestion?word={word}&lang=ca',
           'de-DE': 'https://community.languagetool.org/suggestion?word={word}&lang=de&email=off',
           'nl': 'http://www.opentaal.org/suggesties?word={word}',
           'pl': 'http://www.sjp.pl',
           'pt': 'https://community.languagetool.org/suggestion?word={word}&lang=pt',
           'ru': 'http://myooo.ru/index.php?option=com_addtodictsuggest&Itemid=135&word={word}',
           'fake': 'last entry so all previous items can end with a comma'
          },

       languagetool_i18n_track_message :
           {
               'de-DE': 'Um LanguageTool zu verbessern, brauchen wir Daten über die Art der Nutzung. ' +
                        'Bitte erlauben Sie uns, Ihre korrigierten Sätze anynonym zu speichern ' +
                        '(Ihre IP-Adresse wird nicht gespeichert).',
               'ru'   : 'Для дальнейшего улучшения LanguageTool нам необходимы данные о том, как он используется. Пожалуйста, позвольте нам сохранять анонимно исправленные предложения (т.е. ваш IP-адрес не будет сохраняться).',
               'fr'   : "Afin de perfectionner LanguageTool, nous sommes à la recherche de données d'utilisation. Nous vous prions de nous autoriser anonymement le stockage des expressions corrigées. (ndlr : votre adresse IP ne sera pas mémorisée)",
               'pt'   : "É possível melhorar o LanguageTool, sabendo como é utilizado. Pode ajudar-nos, se permitir que armazenemos anonimamente as frases corretas (isto é, guardar as frases, sem que o seu IP seja guardado).",
               'es'   : "Para seguir mejorando LanguageTool buscamos datos sobre cómo está utilizado. Por favor, permítenos guardar tus frases corregidas anónimo (p.ej. nunca guardaremos tu dirección IP).",
               'uk'   : "Щоб ще більше вдосконалити LanguageTool, ми збираємо дані про те, як його використовують. Будь ласка, дозвольте нам зберігати ваші виправлення для речень анонімно (тобто ваша адреса IP збегрігатися не буде).",
               'it'   : "Al fine di migliorare ulteriormente LanguageTool, stiamo raccogliendo informazioni sul suo utilizzo. Ti chiediamo il permesso di memorizzare le tue frasi corrette in modo anonimo (ad esempio, il tuo indirizzo IP non sarà memorizzato).",
               'nl'   : "Om LanguageTool nog beter te maken verzamelen we gegevens over het gebruik ervan. Sta ons s.v.p. toe om de gecorrigeerde zinnen te bewaren. (Uw IP-adres wordt niet bewaard.)",
               'zh'   : "为了进一步改进LanguageTool，我们需要该工具的使用数据。请允许我们以匿名方式储存你校正的句子（你的IP地址不会被记录）。",
               'pl'   : "Do dalszego rozwoju korektora LanguageTool potrzebujemy danych na temat jego użycia. Prosimy o zezwolenie na zapisanie poprawionych zdań w postaci anonimowej (tj. adres IP nie zostanie zapisany)."
           },

       languagetool_i18n_track_message_sentence :
           {
               'de-DE': 'Satz:',
               'ru'   : 'Предложение:',
               'fr'   : 'Expression:',
               'pt'   : "Frase:",
               'es'   : "Frase:",
               'uk'   : "Речення:",
               'it'   : "Frase:",
               'nl'   : "Zin:",
               'zh'   : "句子：",
               'pl'   : "Zdanie:"
           },

       languagetool_i18n_track_remember_message :
           {
               'de-DE': 'Entscheidung merken',
               'ru'   : 'Запомнить выбор',
               'fr'   : 'Mémoriser ce choix',
               'pt'   : "Memorizar esta escolha",
               'es'   : "memorizar ésta decisión",
               'uk'   : "Запам'ятати вибір",
               'it'   : "Ricorda questa decisione",
               'nl'   : "Onthoud deze keuze",
               'zh'   : "记住该决定",
               'pl'   : "Zapamiętaj ten wybór"
           },

       languagetool_i18n_track_no :
           {
               'de-DE': 'Nein',
               'ru'   : 'Нет',
               'fr'   : 'Non',
               'pt'   : "Não",
               'es'   : "No",
               'uk'   : "Ні",
               'it'   : "No",
               'nl'   : "Nee",
               'zh'   : "不同意",
               'pl'   : "Nie"
           },

       languagetool_i18n_track_yes :
           {
               'de-DE': 'Ja, Satz speichern',
               'ru'   : 'Да, сохранить предложение',
               'fr'   : "Okay, enregistrer l'expression",
               'pt'   : "OK. Guardar a frase.",
               'es'   : "Vale, guardar la frase.",
               'uk'   : "Так, зберегти це речення",
               'it'   : "Va bene, memorizza questa frase",
               'nl'   : "Oké, sla de zin op",
               'zh'   : "好，储存句子",
               'pl'   : "Tak, zapisz zdanie"
           },

       languagetool_i18n_track_yes_plural :
           {
               'de-DE': 'Ja, Sätze speichern',
               'ru'   : 'Да, сохранять фрагменты текста',
               'fr'   : 'Okay, enregistrer les expressions',
               'pt'   : "OK. Guardar as frases.",
               'es'   : "Vale, guardar las frases.",
               'uk'   : "Так, зберігати речення",
               'it'   : "Va bene, acconsento a inviare le frasi",
               'nl'   : "Oké, sla de zinnen op",
               'zh'   : "好，储存句子",
               'pl'   : "Tak, zapisz zdania"
           },
       
       languagetool_i18n_track_ask :
           {
               'de-DE': 'Jedes Mal fragen',
               'ru'   : 'Спрашивать каждый раз',
               'fr'   : 'Toujours demander',
               'pt'   : "Perguntar sempre",
               'es'   : "preguntar siempre",
               'uk'   : "Запитувати кожного разу",
               'it'   : "Chiedi il permesso ogni volta",
               'nl'   : "Vraag dit altijd",
               'zh'   : "每次都询问",
               'pl'   : "Pytaj za każdym razem"
           },

       languagetool_i18n_do_track :
           {
               'de-DE': 'Danke, dass Sie Ihre Korrekturen speichern lassen.',
               'ru'   : 'Благодарим за предложенные варианты исправлений.',
               'fr'   : 'Merci pour votre contribution.',
               'pt'   : "Obrigado pela sua contribuição.",
               'es'   : "Gracias por contribuir correcciones.",
               'uk'   : "Дякуємо, що ділитеся виправленнями.",
               'it'   : "Grazie per aver contribuito con le tue correzioni",
               'nl'   : "Bedankt voor uw bijdragen.",
               'zh'   : "谢谢你的校正",
               'pl'   : "Dziękujemy za przesłanie poprawek."
           },

       languagetool_i18n_do_not_track :
           {
               'de-DE': 'Sie lassen Ihre Korrekturen nicht speichern.',
               'ru'   : 'Варианты исправлений не сохраняются.',
               'fr'   : 'Vous avez choisi de ne pas contribuer aux corrections.',
               'pt'   : "Não está a contribuir com correções.",
               'es'   : "No estás contribuyendo correcciones.",
               'uk'   : "Ви не ділитеся своїми виправленнями.",
               'it'   : "Non stai contribuendo con le correzioni",
               'nl'   : "U draagt niet bij.",
               'zh'   : "你没有做任何校正",
               'pl'   : "Poprawki nie są przesyłane."
           },

       languagetool_i18n_tracking_change :
           {
               'de-DE': 'Einstellung ändern',
               'ru'   : 'Изменить настройки',
               'fr'   : 'Configuration',
               'pt'   : "Alterar as definições.",
               'es'   : "Cambiar la configuración",
               'uk'   : "Змінити цей параметр",
               'it'   : "Cambia le impostazioni",
               'nl'   : "Wijzig instelling",
               'zh'   : "更改设置",
               'pl'   : "Zmień ustawienia"
           },

       languagetool_i18n_other_suggestion_dialog :
           {
               'de-DE': 'Ersetzen mit:',
	           'ru'   : 'Заменить на:'  
           },


       languagetool_i18n_other_suggestion :
           {
               'de-DE': '(andere Ersetzung)',
	           'ru'   : '(другая замена)'   
           },

       languagetool_i18n_other_replace_by :
           {
               'de-DE': 'Ersetzen mit...',
	           'ru'   : 'Заменить...'
           },

       languagetool_i18n_track_false_alarm_menu :
           {
               'de-DE': 'Als Fehlalarm melden...',
	       'ru'   : 'Сообщить о ложной ошибке...',
           },
       languagetool_i18n_track_false_alarm1 :
           {
               'de-DE': 'Die Fehlermeldung als Fehlalarm an LanguageTool schicken, zusammen mit diesem Satz?',
	       'ru'   : 'Сообщить о ложной ошибке LanguageTool и отправить сообщение разработчикам вместе с этим предложением?',
           },
       languagetool_i18n_track_false_alarm2 :
           {
               'de-DE': 'Wenn Sie zustimmen, werden diese Daten anonym gespeichert.',
	       'ru'   : 'Если вы согласитесь, то эта информация будет храниться анонимно.',
           },


       languagetool_i18n_current_lang :    function() { return document.checkform.lang.value; },
       /* the URL of your LanguageTool server or the URL of your proxy file: */
       languagetool_rpc_url                 : "https://languagetool.org/api/v2/check",  // requires the server to be started with '--allow-origin ...'
       languagetool_rpc_url2                : "https://api.languagetool.org/v2/check",  // requires the server to be started with '--allow-origin ...'
       //languagetool_rpc_url                 : "http://localhost:8081/v2/check",
       /* edit this file to customize how LanguageTool shows errors: */
       languagetool_css_url                 : "<?= getRoot() ?>/online-check/tiny_mce/plugins/atd-tinymce/css/content.css?v6",
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
        if (typeof(_paq) !== 'undefined') { _paq.push(['trackEvent', 'Action', 'SwitchToFullscreen']); } // Piwik tracking
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

   function doit(doLog) {
       document.checkform._action_checkText.disabled = true;
       var langCode = document.checkform.lang.value;
       if (document.checkform.subLang && document.checkform.subLang.value) {
           langCode = langCode.replace(/-..$/, "")  // en-US -> en
               + "-" + document.checkform.subLang.value;
       }
       if (doLog) {
           if (typeof(_paq) !== 'undefined') { _paq.push(['trackEvent', 'Action', 'CheckText', langCode]); } // Piwik tracking
       }
       // save language as default for next visit:
       document.cookie = "lt-language=" + langCode + ";max-age=1314000;path=/";  // one year
       tinyMCE.activeEditor.execCommand('mceWritingImprovementTool', langCode);
   }

   function proofread() {
     var textarea = document.createElement('textarea');
     textarea.style.display = 'none';
     textarea.name = 'proofread_text';
     var langCode = document.checkform.lang.value;
     var $dummy = $("<div>").html(tinymce.activeEditor.getContent());
     if (typeof(_paq) !== 'undefined') { _paq.push(['trackEvent', 'Action', 'ClickProofread', langCode]); } // Piwik tracking
     textarea.value = $dummy.text();
     document.checkform.action = '/human-proofreading/';
     document.checkform.appendChild(textarea);
   }

   <?php
   require_once("default_texts.php");
   print getDefaultDemoTextMappingForJavaScript();
   ?>
   function setDemoText() {
       var lang = $('#lang').val().replace(/-..$/, "");
       var demoText = languageToText[lang];
       if (demoText) {
           tinyMCE.activeEditor.setContent(demoText);
           doit();
       }
       return false;
   }

   $(function(){
    $(window).resize(function(){
      if ($('form#checkform').hasClass('fullscreen')) {
        $('iframe#checktext_ifr').height( $(window).height() - $('#editor_controls').outerHeight() );
      }
    });
    $('#dialog').dialog({autoOpen: false, modal: true, width: '50%'});
   });

   </script>

    <script type="text/javascript" src="<?= getRoot() ?>/css/lib/dropkick/jquery.dropkick.js"></script>
    <script type="text/javascript">
        function fillSubLanguageSelect(langCode) {
            //console.log("fillSubLanguageSelect " + langCode);
            var unmaintainedLanguages = {   // see https://languagetool.org/languages/ 
                "be": "Belarusian",
                "da": "Danish",
                // "gl": "Galician",
                "is": "Icelandic",
                "ja": "Japanese",
                "lt": "Lithuanian",
                "ml": "Malayalam",
                // "pt": "Portuguese",
                "ro": "Romanian",
                "sv": "Swedish",
                "zh": "Chinese"
            };
            var halfMaintainedLanguages = { 
            };
            if (unmaintainedLanguages[langCode]) {
                $('#maintainedInfo').html("<div class='unmaintainedWarning'>" + unmaintainedLanguages[langCode] + " has " + 
                    "very incomplete support in LanguageTool and " +
                    "there is nobody taking care of it. " +
                    "<a href='/contribute/'>Would you like to help?</a></div>");
            } else if (halfMaintainedLanguages[langCode]) {
                $('#maintainedInfo').html("<div class='unmaintainedWarning'>" + halfMaintainedLanguages[langCode] + " has " + 
                    "incomplete support in LanguageTool. " +
                    "<a href='/contribute/'>Would you like to help?</a></div>");
            //if (langCode === 'gl') {
            //    $('#maintainedInfo').html("<div class='unmaintainedWarning'>" + "O Galego ten " + 
            //        "o suporte incompleto no LanguageTool. " +
            //        "<a href='/contribute/'>Está interessado em ajudar-nos?</a></div>");
            //} else if (langCode === 'de') {
            //    $('#maintainedInfo').html("<div class='unmaintainedWarning'>Kannst Du helfen, LanguageTool zu verbessern? " +
            //        "<a href='/contribute/'>Hier steht, wie.</a></div>");
            } else {
                $('#maintainedInfo').html("");
            }
            
            var languagesWithOwnPage = {   // see https://languagetool.org/languages/ 
                "br": "Ur bajenn vrezhonek hon eus ivez",
                "eo": "Ni ankaŭ havas hejmpaĝon en Esperanto",
                "fr": "Nous avons aussi une page en français",
                "de": "Informationen zu LanguageTool auf Deutsch",
                "gl": "Também temos uma página em Galego",
                "it": "Abbiamo anche una pagina in italiano",
                "nl": "Meer over LanguageTool voor het Nederlands",
                "ca": "També tenim una pàgina en català",
                "ru": "Посетите страничку LanguageTool на русском языке!",
                "pt": "Também temos uma página em Português",
                "es": "También tenemos una página en español",
                "uk": "Докладніше про українську в LanguageTool",
                "pl": "Odwiedź stronę programu LanguageTool po polsku",
                "zh": "Visit our Chinese page about LanguageTool"
            };
            if (languagesWithOwnPage[langCode]) {
                $('#languageInfo').html("<a href='" + langCode + "/'>" + languagesWithOwnPage[langCode] + "</a>");
            } else {
                $('#languageInfo').html("");
            }
            
            // 'auto' doesn't work in MSIE, so we switch manually:
            if (langCode === 'fa') {
                tinymce.get('checktext').getBody().dir = "rtl";
            } else {
                tinymce.get('checktext').getBody().dir = "ltr";
            }
            
            var subLang = $('#subLang');
            subLang.find('option').remove();
            // For languages that have variants, offer those in a different select:
            // NOTE: keep in sync with checkform.php!
            var langToSubLang = {
                'en': [
                    {code: 'US', name: 'American'},
                    {code: 'GB', name: 'British'},
                    {code: 'ZA', name: 'South Africa'},
                    {code: 'CA', name: 'Canada'},
                    {code: 'AU', name: 'Australia'},
                    {code: 'NZ', name: 'New Zealand'}
                    ],
                'de': [
                    {code: 'DE', name: 'Germany'},
                    {code: 'AT', name: 'Austria'},
                    {code: 'CH', name: 'Switzerland'}],
                'pt': [{code: 'PT', name: 'Portugal'}, {code: 'BR', name: 'Brazil'}, {code: 'AO', name: 'Angola'}, {code: 'MZ', name: 'Mozambique'}],
                'ca': [{code: 'ES', name: 'General'}, {code: 'ES-Valencia', name: 'Valencian'}]
            };
            if (langToSubLang[langCode]) {
                var subLangs = langToSubLang[langCode];
                var langCodeWithCountry = "<?=$checkDefaultLangWithCountry?>";
                var langCountry = langCodeWithCountry.replace(/^.*-/, "").toUpperCase();
                var urlLang;
                if (window.location.href) {
                    urlLang = window.location.href.replace(/.*\/(..)\/.*/, "$1");
                    if (urlLang.length != 2) {
                      urlLang = null;
                    }
                }
                var i18n = lt_i18n[urlLang];
                //var i18n = lt_i18n['<?= $checkDefaultLang?>'];
                //var i18n = lt_i18n[langCode];
                subLangs.forEach(function(entry) {
                    var displayName = entry.name;
                    if (i18n && i18n[entry.code]) {
                      displayName = i18n[entry.code];
                    }
                    if (entry.code == langCountry) {
                      subLang.append($("<option selected/>").val(entry.code).text(displayName));
                    } else {
                      subLang.append($("<option />").val(entry.code).text(displayName));
                    }
                });
                $('#subLangDropDown').show();
                subLang.dropkick('refresh');
            } else {
                $('#subLangDropDown').hide();
            }
        }
        $(function(){
            var prevLang = $('#lang').val().replace(/-..$/, "");
            $('#lang').dropkick({
                change: function (value, label) {
                    value = value.replace(/-..$/, "");  // en-US -> en
                    fillSubLanguageSelect(value);
                    var newText = languageToText[value];  // 'languageToText' comes from default_texts.php
                    if (newText) {
                        var oldDemoText = languageToText[prevLang];
                        var currentText = tinyMCE.activeEditor.getContent({format: 'text'});
                        if (currentText.trim() === "" || currentText === oldDemoText) {
                            tinyMCE.activeEditor.setContent(newText);
                            tinyMCE.get('checktext').focus();
                            doit();
                            $('#feedbackMessage').html('');
                        } else {
                            $('#feedbackMessage').html('<a href="#" onclick="return setDemoText()"><?= isset($demoTextLink) ? $demoTextLink : "insert demo text" ?></a>');
                        }
                    } else {
                        <?php if(isset($addYourTextHere)) { ?>
                        tinyMCE.activeEditor.setContent("<?= $addYourTextHere ?>");
                        <?php } else { ?>
                        if (value !== "auto") {
                            tinyMCE.activeEditor.setContent("Add your text here");
                        }
                        <?php } ?>
                        tinyMCE.get('checktext').focus();
                        tinyMCE.activeEditor.selection.select(tinyMCE.activeEditor.getBody(), true);
                        $('#feedbackMessage').html('');
                    }
                    prevLang = value;
                }
            });
            $('#subLang').dropkick({
                // TODO: this messes up the text - it gets called more than once after the main
                // language has been changed:
                /*change: function (value, label) {
                    //doit();
                }*/
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

<?php } ?>
