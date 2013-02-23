/*
 * TinyMCE Writing Improvement Tool Plugin 
 * Original Author: Raphael Mudge (raffi@automattic.com)
 * Heavily modified by Daniel Naber for LanguageTool (http://www.languagetool.org)
 *
 * http://www.languagetool.org
 * http://www.afterthedeadline.com
 *
 * Distributed under the LGPL
 *
 * Derived from:
 *    $Id: editor_plugin_src.js 425 2007-11-21 15:17:39Z spocke $
 *
 *    @author Moxiecode
 *    @copyright Copyright (C) 2004-2008, Moxiecode Systems AB, All rights reserved.
 *
 *    Moxiecode Spell Checker plugin released under the LGPL with TinyMCE
 */

(function() 
{
   var JSONRequest = tinymce.util.JSONRequest, each = tinymce.each, DOM = tinymce.DOM; 

   tinymce.create('tinymce.plugins.AfterTheDeadlinePlugin', 
   {
      getInfo : function() 
      {
         return 
         ({
            longname :  'After The Deadline / LanguageTool',
            author :    'Raphael Mudge, Daniel Naber',
            authorurl : 'http://blog.afterthedeadline.com',
            infourl :   'http://www.afterthedeadline.com',
            version :   tinymce.majorVersion + "." + tinymce.minorVersion
         });
      },

      /* initializes the functions used by the AtD Core UI Module */
      initAtDCore : function(editor, plugin)
      {
         var core = new AtDCore();

         core.map = each;

         core.getAttrib = function(node, key) 
         { 
            return editor.dom.getAttrib(node, key); 
         };

         core.findSpans = function(parent) 
         {
            if (parent == undefined)
               return editor.dom.select('span');
            else
               return editor.dom.select('span', parent);
         };

         core.hasClass = function(node, className) 
         { 
            return editor.dom.hasClass(node, className); 
         };
         
         core.contents = function(node) 
         { 
            return node.childNodes;  
         };

         core.replaceWith = function(old_node, new_node) 
         { 
            return editor.dom.replace(new_node, old_node); 
         };

         core.create = function(node_html) 
         { 
            return editor.dom.create('span', { 'class': 'mceItemHidden' }, node_html);
         };

         core.removeParent = function(node) 
         {
            editor.dom.remove(node, 1);
            return node;
         };

         core.remove = function(node) 
         { 
            editor.dom.remove(node); 
         };

         core.getLang = function(key, defaultk) 
         { 
             return editor.getLang("AtD." + key, defaultk);
         };

         return core;
      },
 
      /* called when the plugin is initialized */
      init : function(ed, url) 
      {
         var t = this;
         var plugin  = this;
         var editor  = ed;
         var core = this.initAtDCore(editor, plugin);

         this.url    = url;
         this.editor = ed;
         this.menuVisible = false;
         ed.core = core;

         /* add a command to request a document check and process the results. */
         editor.addCommand('mceWritingImprovementTool', function(languageCode)
         {
             
            if (plugin.menuVisible) {
              plugin._menu.hideMenu();
            }

            /* checks if a global var for click stats exists and increments it if it does... */
            if (typeof AtD_proofread_click_count != "undefined")
               AtD_proofread_click_count++;

            /* create the nifty spinny thing that says "hizzo, I'm doing something fo realz" */
            plugin.editor.setProgressState(1);

            /* remove the previous errors */
            plugin._removeWords();

            /* send request to our service */
            var textContent = plugin.editor.core.getPlainText();
            plugin.sendRequest('', textContent, languageCode, function(data, request, jqXHR)
            {
               /* turn off the spinning thingie */
               plugin.editor.setProgressState(0);

               /* if the server is not accepting requests, let the user know */
               if (jqXHR.status != 200 || jqXHR.responseText.substr(1, 4) == 'html' || jqXHR.responseText == '')
               {
                  ed.windowManager.alert( plugin.editor.getLang('AtD.message_server_error', 'There was a problem communicating with the service. Try again in one minute.') );
                  return;
               }

               /* check to see if things are broken first and foremost */
               if (jqXHR.responseXML.getElementsByTagName('message').item(0) != null)
               {
                  ed.windowManager.alert(jqXHR.responseXML.getElementsByTagName('message').item(0).firstChild.data);
                  return;
               }

               var results = core.processXML(jqXHR.responseXML);

               if (results.length == 0) {
                  var lang = plugin.editor.getParam('languagetool_i18n_current_lang')();
                  var noErrorsText = plugin.editor.getParam('languagetool_i18n_no_errors')[lang] || "No errors were found.";
                  ed.windowManager.alert(noErrorsText);
               }
               else {
                  plugin.markMyWords();
                  ed.suggestions = results; 
               }
            });
         });
          
         /* load cascading style sheet for this plugin */
          editor.onInit.add(function() 
         {
            /* loading the content.css file, why? I have no clue */
            if (editor.settings.content_css !== false)
            {
               editor.dom.loadCSS(editor.getParam("languagetool_css_url", url + '/css/content.css'));
            }
         });

         /* again showing a menu, I have no clue what */
         editor.onClick.add(plugin._showMenu, plugin);

         /* comment this in and comment out the line below to get the browser's standard context menu on right click: */
         //editor.onContextMenu.add(plugin._showMenu, plugin);
         // without this, the context menu opens but nothing in it can be selected:
         editor.onContextMenu.add(plugin._doNotShowMenu, plugin);

         /* strip out the markup before the contents is serialized (and do it on a copy of the markup so we don't affect the user experience) */
         editor.onPreProcess.add(function(sender, object) 
         {
            var dom = sender.dom;

            each(dom.select('span', object.node).reverse(), function(n) 
            {
               if (n && (dom.hasClass(n, 'hiddenGrammarError') || dom.hasClass(n, 'hiddenSpellError') || dom.hasClass(n, 'hiddenSuggestion') || dom.hasClass(n, 'mceItemHidden') || (dom.getAttrib(n, 'class') == "" && dom.getAttrib(n, 'style') == "" && dom.getAttrib(n, 'id') == "" && !dom.hasClass(n, 'Apple-style-span') && dom.getAttrib(n, 'mce_name') == ""))) 
               {
                  dom.remove(n, 1);
               }
            });
         });

         /* cleanup the HTML before executing certain commands */
         editor.onBeforeExecCommand.add(function(editor, command) 
         {
            if (command == 'mceCodeEditor')
            {
               plugin._removeWords();
            }
            else if (command == 'mceFullScreen')
            {
               plugin._done();
            }
         });
      },

      createControl : function(name, controlManager) 
      {
      },

      _removeWords : function(w) 
      {
         var ed = this.editor, dom = ed.dom, se = ed.selection, b = se.getBookmark();

         ed.core.removeWords(undefined, w);

         /* force a rebuild of the DOM... even though the right elements are stripped, the DOM is still organized
            as if the span were there and this breaks my code */

         dom.setHTML(dom.getRoot(), dom.getRoot().innerHTML);

         se.moveToBookmark(b);
      },

      _removeWordsByRuleId : function(ruleId) 
      {
         var ed = this.editor, dom = ed.dom, se = ed.selection, b = se.getBookmark();

         ed.core.removeWordsByRuleId(undefined, ruleId);

         /* force a rebuild of the DOM... even though the right elements are stripped, the DOM is still organized
            as if the span were there and this breaks my code */

         dom.setHTML(dom.getRoot(), dom.getRoot().innerHTML);

         se.moveToBookmark(b);
      },

      markMyWords : function()
      {
         var ed  = this.editor;
         var se = ed.selection, b = se.getBookmark();

         ed.core.markMyWords();

         se.moveToBookmark(b);
      },

      _doNotShowMenu : function(ed, e) 
      {
        return tinymce.dom.Event.cancel(e);
      },
       
      _showMenu : function(ed, e) 
      {
         var t = this, ed = t.editor, m = t._menu, p1, dom = ed.dom, vp = dom.getViewPort(ed.getWin());
         var plugin = this;

         if (!m) 
         {
            p1 = DOM.getPos(ed.getContentAreaContainer());
            //p2 = DOM.getPos(ed.getContainer());

            m = ed.controlManager.createDropMenu('spellcheckermenu', 
            {
               offset_x : p1.x,
               offset_y : p1.y,
               'class' : 'mceNoIcons'
            });

            t._menu = m;
         }
         
         if (this.menuVisible) {
             // second click: close popup again
             m.hideMenu();
             this.menuVisible = false;
             return;
         }

         if (ed.core.isMarkedNode(e.target))
         {
            /* remove these other lame-o elements */
            m.removeAll();

            /* find the correct suggestions object */
            var errorDescription = ed.core.findSuggestion(e.target);

            if (errorDescription == undefined)
            {
               m.add({title : plugin.editor.getLang('AtD.menu_title_no_suggestions', 'No suggestions'), 'class' : 'mceMenuItemTitle'}).setDisabled(1);
            }
            else if (errorDescription["suggestions"].length == 0)
            {
               m.add({title : errorDescription["description"], 'class' : 'mceMenuItemTitle'}).setDisabled(1);
            }
            else
            {
               m.add({ title : errorDescription["description"], 'class' : 'mceMenuItemTitle' }).setDisabled(1);

               for (var i = 0; i < errorDescription["suggestions"].length; i++)
               {
                  if (i >= 5) {
                      break;
                  }
                  (function(sugg)
                   {
                      m.add({
                         title   : sugg, 
                         onclick : function() 
                         {
                            ed.core.applySuggestion(e.target, sugg);
                            t._checkDone();
                         }
                      });
                   })(errorDescription["suggestions"][i]);
               }

               m.addSeparator();
            }
             
            var lang = plugin.editor.getParam('languagetool_i18n_current_lang')();
            var explainText = plugin.editor.getParam('languagetool_i18n_explain')[lang] || "No errors were found.";
            var ignoreThisText = plugin.editor.getParam('languagetool_i18n_ignore_once')[lang] || "Ignore this error";
            var ignoreThisKindOfErrorText = plugin.editor.getParam('languagetool_i18n_ignore_all')[lang] || "Ignore this kind of error";
             
            if (errorDescription != undefined && errorDescription["moreinfo"] != null)
            {
               (function(url)
                {
                   m.add({
                     title : explainText,
                     onclick : function() { window.open(url, '_errorExplain'); }
                  });
               })(errorDescription["moreinfo"]);

               m.addSeparator();
            }

            m.add({
               title : ignoreThisText,
               onclick : function() 
               {
                  dom.remove(e.target, 1);
                  t._checkDone();
               }
            });

            m.add({
              title : ignoreThisKindOfErrorText,
              onclick : function() 
              {
                 var surrogate = e.target.getAttribute(plugin.editor.core.surrogateAttribute);
                 var ruleId = plugin.editor.core.getSurrogatePart(surrogate, 'id');
                 t._removeWordsByRuleId(ruleId);
                 t._checkDone();
              }
           });

           /* show the menu please */
           ed.selection.select(e.target);
           p1 = dom.getPos(e.target);
           var xPos = p1.x;
           m.showMenu(xPos, p1.y + e.target.offsetHeight - vp.y);
           this.menuVisible =  true;
           var menuDiv = $('#menu_checktext_spellcheckermenu_co');
           if (menuDiv) {
               var menuWidth = menuDiv.width();
               var textBoxWidth = $('#checktextpara').width();  // not sure why we cannot directly use the textarea's width
               if (xPos + menuWidth > textBoxWidth) {
                   // menu runs out of screen, move it to the left
                   var diff = xPos + menuWidth - textBoxWidth;
                   menuDiv.css({ left: '-' + diff + 'px' });
               } else {
                   menuDiv.css({ left: '0px' });
               }
           }

           return tinymce.dom.Event.cancel(e);
         } 
         else
         {
            m.hideMenu();
            this.menuVisible = false;
         }
      },

      /* loop through editor DOM, call _done if no mce tags exist. */
      _checkDone : function() 
      {
         var t = this, ed = t.editor, dom = ed.dom, o;

         this.menuVisible = false;
          
         each(dom.select('span'), function(n) 
         {
            if (n && dom.hasClass(n, 'mceItemHidden'))
            {
               o = true;
               return false;
            }
         });

         if (!o)
         {
            t._done();
         }
      },

      /* remove all tags, hide the menu, and fire a dom change event */
      _done : function() 
      {
         var plugin    = this;
         //plugin._removeWords();

         if (plugin._menu)
         {
            plugin._menu.hideMenu();
            this.menuVisible = false;
         }

         plugin.editor.nodeChanged();
      },

      sendRequest : function(file, data, languageCode, success)
      {
         var url = this.editor.getParam("languagetool_rpc_url", "{backend}");
         var plugin = this;

         if (url == '{backend}') 
         {
            this.editor.setProgressState(0);
            alert('Please specify: languagetool_rpc_url');
            return;
         }
          
         jQuery.ajax({
            url:   url + "/" + file,
            type:  "POST",
            data:  "text=" + encodeURI(data).replace(/&/g, '%26') + "&language=" + encodeURI(languageCode),
            success: success,
            error: function(type, req, o) {
               plugin.editor.setProgressState(0);
               alert("Could not send request to\n" + o.url + "\nError: " + type + "\nStatus code: " + req.status + "\nPlease make sure your network connection works."); 
            }
         });
   
         /* this causes an OPTIONS request to be send as a preflight - LT server doesn't support that,
         thus we're using jQuery.ajax() instead
         tinymce.util.XHR.send({
            url          : url + "/" + file,
            content_type : 'text/xml',
            type         : "POST",
            data         : "text=" + encodeURI(data).replace(/&/g, '%26')
                           + "&language=" + encodeURI(languageCode),
            async        : true,
            success      : success,
            error        : function( type, req, o )
            {
               plugin.editor.setProgressState(0);
               alert("Could not send request to\n" + o.url + "\nError: " + type + "\nStatus code: " + req.status + "\nPlease make sure your network connection works."); 
            }
         });*/
      }
   });

   // Register plugin
   tinymce.PluginManager.add('AtD', tinymce.plugins.AfterTheDeadlinePlugin);
})();
