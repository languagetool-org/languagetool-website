/*
 * atd.core.js - A building block to create a front-end for AtD
 * Author      : Raphael Mudge, Automattic; Daniel Naber, LanguageTool.org
 * License     : LGPL
 * Project     : http://www.afterthedeadline.com/developers.slp
 * Contact     : raffi@automattic.com
 *
 * Note: this has been simplified for use with LanguageTool - it now assumes there's no markup 
 * anymore in the text field (not even bold etc)!
 */

/* EXPORTED_SYMBOLS is set so this file can be a JavaScript Module */
var EXPORTED_SYMBOLS = ['AtDCore'];

//
// TODO:
// 1. cursor position gets lost on check
// 2. "ignore" and "ignore this kind of error" only works until the next check
//
// fixed: "ignore all" doesn't work
// fixed: current cursor position is ignored when incorrect (it has its own node)
// fixed: text with markup (even bold) messes up everything
//

function AtDCore() {
	/* these are the categories of errors AtD should ignore */
	this.ignore_types = [];

	/* these are the phrases AtD should ignore */
	this.ignore_strings = {};

	/* Localized strings */
	this.i18n = {};
    
    /* We have to mis-use an existing valid HTML attribute to get our meta information
     * about errors in the text:
     */
    this.surrogateAttribute = "onkeypress";
    this.surrogateAttributeDelimiter = "---#---";
};

/*
 * Internationalization Functions
 */

AtDCore.prototype.getLang = function(key, defaultk) {
	if (this.i18n[key] == undefined)
		return defaultk;

	return this.i18n[key];
};

AtDCore.prototype.addI18n = function(localizations) {
	this.i18n = localizations;
};

/*
 * Setters
 */

AtDCore.prototype.setIgnoreStrings = function(string) {
	var parent = this;

	this.map(string.split(/,\s*/g), function(string) {
		parent.ignore_strings[string] = 1;
	});
};

AtDCore.prototype.showTypes = function(string) {
	var show_types = string.split(/,\s*/g);
	var types = {};

	/* set some default types that we want to make optional */

		/* grammar checker options */
	types["Double Negatives"]     = 1;
	types["Hidden Verbs"]         = 1;
	types["Passive voice"]        = 1;
	types["Bias Language"]        = 1;

		/* style checker options */
	types["Cliches"]              = 1;
	types["Complex Expression"]   = 1;
	types["Diacritical Marks"]    = 1;
	types["Jargon Language"]      = 1;
	types["Phrases to Avoid"]     = 1;
	types["Redundant Expression"] = 1;

        var ignore_types = [];

        this.map(show_types, function(string) {
                types[string] = undefined;
        });

        this.map(this.ignore_types, function(string) {
                if (types[string] != undefined) 
                        ignore_types.push(string);
        });

        this.ignore_types = ignore_types;
};

// source: http://simonwillison.net/2006/Jan/20/escape/ (modified to not escape \s)
RegExp.escape = function(text) {
    return text.replace(/[-[\]{}()*+?.,\\^$|#]/g, "\\$&");
};

AtDCore.prototype.processXML = function(responseXML) {

    this.suggestions = [];
    var errors = responseXML.getElementsByTagName('error');
    for (var i = 0; i < errors.length; i++) {
       var suggestion = {};
       // I didn't manage to make the CSS break the text, so we add breaks with Javascript:
       suggestion["description"] = this._wordwrap(errors[i].getAttribute("msg"), 50, "<br/>");
       suggestion["suggestions"] = [];
       var suggestionsStr = errors[i].getAttribute("replacements");
       if (suggestionsStr) {
           suggestion["suggestions"] = suggestionsStr;
       }
       var errorOffset = parseInt(errors[i].getAttribute("offset"));
       var errorLength = parseInt(errors[i].getAttribute("errorlength"));
       suggestion["offset"]      = errorOffset;
       suggestion["errorlength"] = errorLength;
       suggestion["type"]        = errors[i].getAttribute("category");
       suggestion["ruleid"]      = errors[i].getAttribute("ruleId");
       var url = errors[i].getAttribute("url");
       if (url) {
           suggestion["moreinfo"] = url;
       }
       this.suggestions.push(suggestion);
    }

    return this.suggestions;
};

// Wrapper code by James Padolsey
// Source: http://james.padolsey.com/javascript/wordwrap-for-javascript/
// License: "This is free and unencumbered software released into the public domain.",
// see http://james.padolsey.com/terms-conditions/
AtDCore.prototype._wordwrap = function(str, width, brk, cut) {
    brk = brk || '\n';
    width = width || 75;
    cut = cut || false;
    if (!str) { return str; }
    var regex = '.{1,' +width+ '}(\\s|$)' + (cut ? '|.{' +width+ '}|.+$' : '|\\S+?(\\s|$)');
    return str.match( new RegExp(regex, 'g') ).join( brk );
};
// End of wrapper code by James Padolsey

AtDCore.prototype.findSuggestion = function(element) {
    var text = element.innerHTML;
    var metaInfo = element.getAttribute(this.surrogateAttribute);
    var errorDescription = {};
    errorDescription["description"] = this.getSurrogatePart(metaInfo, 'description');
    var suggestions = this.getSurrogatePart(metaInfo, 'suggestions');
    if (suggestions) {
        errorDescription["suggestions"] = suggestions.split("#");
    } else {
        errorDescription["suggestions"] = "";
    }
    var url = this.getSurrogatePart(metaInfo, 'url');
    if (url) {
        errorDescription["moreinfo"] = url;
    }
    return errorDescription;
};

/* 
 * code to manage highlighting of errors
 */
AtDCore.prototype.markMyWords = function(container_nodes) {
    var newText = this.getText();
    
    var previousSpanStart = -1;
    // iterate backwards as we change the text and thus modify positions:
    for (var suggestionIndex = this.suggestions.length-1; suggestionIndex >= 0; suggestionIndex--) {
        var suggestion = this.suggestions[suggestionIndex];
        if (!suggestion.used) {
            var spanStart = suggestion.offset;
            var spanEnd = spanStart + suggestion.errorlength;
            if (previousSpanStart != -1 && spanEnd >= previousSpanStart) {
                // overlapping errors - these are not supported by our underline approach,
                // as we would need overlapping <span>s for that, so skip the error:
                continue;
            }
            previousSpanStart = spanStart;
            
            var ruleId = suggestion.ruleid;
            var cssName;
            if (ruleId.indexOf("SPELLER_RULE") >= 0 || ruleId.indexOf("MORFOLOGIK_RULE") == 0 || ruleId == "HUNSPELL_NO_SUGGEST_RULE" || ruleId == "HUNSPELL_RULE") {
                cssName = "hiddenSpellError";
            }
            else {
                cssName = "hiddenGrammarError";
            }
            // TODO: escape metaInfo!?
            var delim = this.surrogateAttributeDelimiter;
            var metaInfo = ruleId + delim + suggestion.description + delim + suggestion.suggestions;
            if (suggestion.moreinfo) {
                metaInfo += delim + suggestion.moreinfo;
            }
            newText = newText.substring(0, spanStart)
                    + '<span ' + this.surrogateAttribute + '="' + metaInfo + '" class="' + cssName + '">'
                    + newText.substring(spanStart, spanEnd)
                    + '</span>'
                    + newText.substring(spanEnd);
            suggestion.used = true;
        }
    }
    
    tinyMCE.activeEditor.setContent(newText);
};

AtDCore.prototype.getSurrogatePart = function(surrogateString, part) {
    var parts = surrogateString.split(this.surrogateAttributeDelimiter);
    if (part == 'id') {
        return parts[0];
    } else if (part == 'description') {
        return parts[1];
    } else if (part == 'suggestions') {
        return parts[2];
    } else if (part == 'url' && parts.length >= 3) {
        return parts[3];
    }
    return null;
};

AtDCore.prototype.getText = function() {
    return tinyMCE.activeEditor.getContent({ format: 'text' }).replace(/<.*?>/g, "").replace(/\ufeff/g, "");  // feff = 65279 = cursor code
};

AtDCore.prototype.removeWords = function(node, w) {
	var count = 0;
	var parent = this;

	this.map(this.findSpans(node).reverse(), function(n) {
		if (n && (parent.isMarkedNode(n) || parent.hasClass(n, 'mceItemHidden') || parent.isEmptySpan(n)) ) {
			if (n.innerHTML == '&nbsp;') {
				var nnode = document.createTextNode(' '); /* hax0r */
				parent.replaceWith(n, nnode);
			}
			else if (!w || n.innerHTML == w) {
				parent.removeParent(n);
				count++;
			}
		}
	});

	return count;
};

AtDCore.prototype.removeWordsByRuleId = function(node, ruleId) {
	var count = 0;
	var parent = this;

	this.map(this.findSpans(node).reverse(), function(n) {
		if (n && (parent.isMarkedNode(n) || parent.hasClass(n, 'mceItemHidden') || parent.isEmptySpan(n)) ) {
			if (n.innerHTML == '&nbsp;') {
				var nnode = document.createTextNode(' '); /* hax0r */
				parent.replaceWith(n, nnode);
			}
			else {
        var surrogate = n.getAttribute(parent.surrogateAttribute);
        if (!ruleId || (surrogate && parent.getSurrogatePart(surrogate, 'id') == ruleId)) {
            parent.removeParent(n);
            count++;
        }
      }
		}
	});

	return count;
};

AtDCore.prototype.isEmptySpan = function(node) {
	return (this.getAttrib(node, 'class') == "" && this.getAttrib(node, 'style') == "" && this.getAttrib(node, 'id') == "" && !this.hasClass(node, 'Apple-style-span') && this.getAttrib(node, 'mce_name') == "");
};

AtDCore.prototype.isMarkedNode = function(node) {
	return (this.hasClass(node, 'hiddenGrammarError') || this.hasClass(node, 'hiddenSpellError') || this.hasClass(node, 'hiddenSuggestion'));
};

/*
 * Context Menu Helpers
 */
AtDCore.prototype.applySuggestion = function(element, suggestion) {
	if (suggestion == '(omit)') {
		this.remove(element);
	}
	else {
		var node = this.create(suggestion);
		this.replaceWith(element, node);
		this.removeParent(node);
	}
};

/* 
 * Check for an error
 */
AtDCore.prototype.hasErrorMessage = function(xmlr) {
	return (xmlr != undefined && xmlr.getElementsByTagName('message').item(0) != null);
};

AtDCore.prototype.getErrorMessage = function(xmlr) {
	return xmlr.getElementsByTagName('message').item(0);
};

/* this should always be an error, alas... not practical */
AtDCore.prototype.isIE = function() {
	return navigator.appName == 'Microsoft Internet Explorer';
};
/*
 * TinyMCE Writing Improvement Tool Plugin 
 * Author: Raphael Mudge (raffi@automattic.com)
 * Modified by Daniel Naber for LanguageTool (http://www.languagetool.org)
 *
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

         core.setIgnoreStrings(editor.getParam("atd_ignore_strings", ""));
         core.showTypes(editor.getParam("atd_show_types", ""));
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

         /* look at the atd_ignore variable and put that stuff into a hash */
         var ignore = tinymce.util.Cookie.getHash('atd_ignore');

         if (ignore == undefined)
         {
            ignore = {};
         }

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
            var textContent = plugin.editor.core.getText();
            plugin.sendRequest('checkDocument', textContent, languageCode, function(data, request, someObject)
            {
               /* turn off the spinning thingie */
               plugin.editor.setProgressState(0);

               /* if the server is not accepting requests, let the user know */
               if (request.status != 200 || request.responseText.substr(1, 4) == 'html' || request.responseText == '')
               {
                  ed.windowManager.alert( plugin.editor.getLang('AtD.message_server_error', 'There was a problem communicating with the service. Try again in one minute.') );
                  return;
               }

               /* check to see if things are broken first and foremost */
               if (request.responseXML.getElementsByTagName('message').item(0) != null)
               {
                  ed.windowManager.alert(request.responseXML.getElementsByTagName('message').item(0).firstChild.data);
                  return;
               }

               var results = core.processXML(request.responseXML);

               if (results.length == 0) {
                  ed.windowManager.alert(plugin.editor.getLang('AtD.message_no_errors_found', 'No errors were found.'));
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
               editor.dom.loadCSS(editor.getParam("atd_css_url", url + '/css/content.css'));
            }
	 });

         /* again showing a menu, I have no clue what */
	 editor.onClick.add(plugin._showMenu, plugin);

         /* we're showing some sort of menu, no idea what */
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
         var control = this;

         if (name == 'AtD') 
         {
            return controlManager.createButton(name, { 
               title: this.editor.getLang('AtD.button_proofread_tooltip', 'Proofread Writing'),
               image: this.editor.getParam('atd_button_url', this.url + '/atdbuttontr.gif'), 
               cmd: 'mceWritingImprovementTool', 
               scope: control 
            });
         }
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

         ed.core.markMyWords(ed.core.contents(this.editor.getBody()));

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
             
            if (errorDescription != undefined && errorDescription["moreinfo"] != null)
            {
               (function(url)
                {
                   m.add({
                     title : plugin.editor.getLang('AtD.menu_option_explain', 'Explain...'),
                     onclick : function() { window.open(url, '_errorExplain'); }
                  });
               })(errorDescription["moreinfo"]);

               m.addSeparator();
            }

            m.add({
               title : plugin.editor.getLang('AtD.menu_option_ignore_once', 'Ignore suggestion'),
               onclick : function() 
               {
                  dom.remove(e.target, 1);
                  t._checkDone();
	       }
            });

            if (String(this.editor.getParam("atd_ignore_enable",  "false")) == "true")
            {
                m.add({
                  title : plugin.editor.getLang('AtD.menu_option_ignore_always', 'Ignore always'),
                  onclick : function() 
                  {
                      var url = t.editor.getParam('atd_ignore_rpc_url', '{backend}');

                      if (url == '{backend}')
                      {
                         /* Default scheme is to save ignore preferences in a cookie */

                         var ignore = tinymce.util.Cookie.getHash('atd_ignore'); 
                         if (ignore == undefined) { ignore = {}; }
                         ignore[e.target.innerHTML] = 1;
                  
                         tinymce.util.Cookie.setHash('atd_ignore', ignore, new Date( (new Date().getTime()) + 157680000000) );
                      }
                      else
                      {
                         /* Plugin is configured to send ignore preferences to server, do that */

                         var id  = t.editor.getParam("atd_rpc_id",  "12345678");

                         tinymce.util.XHR.send({
                             url          : url + encodeURI(e.target.innerHTML).replace(/&/g, '%26') + "&key=" + id,
                             content_type : 'text/xml',
                             async        : true,
                             type         : 'GET',
                             success      : function( type, req, o )
                             {
                                /* do nothing */
                             },
                             error        : function( type, req, o )
                             {
                                alert( "Ignore preference save failed\n" + type + "\n" + req.status + "\nAt: " + o.url ); 
                             }
                         });

                         /* update atd_ignore_strings with the new value */
                         t.editor.core.setIgnoreStrings(e.target.innerHTML); /* this does an update */
                     }

                     t._removeWords(e.target.innerHTML);
                     t._checkDone();
                  }
               });
            }
            else
            {
                m.add({
                  title : plugin.editor.getLang('menu_option_ignore_all', 'Ignore this kind of error'),
                  onclick : function() 
                  {
                     var surrogate = e.target.getAttribute(plugin.editor.core.surrogateAttribute);
                     var ruleId = plugin.editor.core.getSurrogatePart(surrogate, 'id');
                     t._removeWordsByRuleId(ruleId);
                     t._checkDone();
                  }
               });
            }

            /* show the menu please */
            ed.selection.select(e.target);
            p1 = dom.getPos(e.target);
            m.showMenu(p1.x, p1.y + e.target.offsetHeight - vp.y);
            this.menuVisible =  true;

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
         var id  = this.editor.getParam("atd_rpc_id",  "12345678");
         var url = this.editor.getParam("atd_rpc_url", "{backend}");
         var plugin = this;

         if (url == '{backend}' || id == '12345678') 
         {
            this.editor.setProgressState(0);
            alert('Please specify: atd_rpc_url and atd_rpc_id');
            return;
         }
   
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
               alert( type + "\n" + req.status + "\nAt: " + o.url ); 
            }
         });
      }
   });

   // Register plugin
   tinymce.PluginManager.add('AtD', tinymce.plugins.AfterTheDeadlinePlugin);
})();
