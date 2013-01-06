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

function AtDCore() {
	/* these are the categories of errors AtD should ignore */
	this.ignore_types = [];

	/* these are the phrases AtD should ignore */
	this.ignore_strings = {};

	/* Localized strings */
	this.i18n = {};
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

/* 
 * Error Parsing Code
 */

AtDCore.prototype.makeError = function(error_s, tokens, type, seps, pre) {
    error_s = RegExp.escape(error_s);
	var struct = new Object();
	struct.type = type;
	struct.string = error_s;
	struct.tokens = tokens;

    console.log("~~" + error_s + "~~");
	if (new RegExp("\\b" + error_s + "\\b").test(error_s)) {
		struct.regexp = new RegExp("(?!"+error_s+"<)\\b" + error_s.replace(/\s+/g, seps) + "\\b");
	}
	else if (new RegExp(error_s + "\\b").test(error_s)) {
		struct.regexp = new RegExp("(?!"+error_s+"<)" + error_s.replace(/\s+/g, seps) + "\\b");
	}
	else if (new RegExp("\\b" + error_s).test(error_s)) {
		struct.regexp = new RegExp("(?!"+error_s+"<)\\b" + error_s.replace(/\s+/g, seps));
	}
	else {
		struct.regexp = new RegExp("(?!"+error_s+"<)" + error_s.replace(/\s+/g, seps));
	}

	struct.used   = false; /* flag whether we've used this rule or not */

	return struct;
};

AtDCore.prototype.addToErrorStructure = function(errors, list, type, seps) {
	var parent = this;                  

	this.map(list, function(error) {
		var tokens = error["word"].split(/\s+/);
		var pre    = error["pre"];
		var first  = tokens[0];

		if (errors['__' + first] == undefined) {      
			errors['__' + first] = new Object();
			errors['__' + first].pretoks  = {};
			errors['__' + first].defaults = new Array();
		}

		if (pre == "") {
            //console.log("LL " + tokens);
			errors['__' + first].defaults.push(parent.makeError(error["word"], tokens, type, seps, pre));
		} else {
			if (errors['__' + first].pretoks['__' + pre] == undefined)
				errors['__' + first].pretoks['__' + pre] = new Array();

			errors['__' + first].pretoks['__' + pre].push(parent.makeError(error["word"], tokens, type, seps, pre));
		}
	});
};

AtDCore.prototype.buildErrorStructure = function(spellingList, enrichmentList, grammarList) {
	var seps   = this._getSeparators();
	var errors = {};

	this.addToErrorStructure(errors, spellingList, "hiddenSpellError", seps);            
	this.addToErrorStructure(errors, grammarList, "hiddenGrammarError", seps);
	this.addToErrorStructure(errors, enrichmentList, "hiddenSuggestion", seps);
	return errors;
};

AtDCore.prototype._getSeparators = function() {
	var re = '', i;
	var str = '"s!#$%&()*+,./:;<=>?@[\]^_{|}';

	// Build word separator regexp
	for (i=0; i<str.length; i++)
		re += '\\' + str.charAt(i);

	return "(?:(?:[\xa0" + re  + "])|(?:\\-\\-))+";
};        

// source: http://simonwillison.net/2006/Jan/20/escape/ (modified to not escape \s)
RegExp.escape = function(text) {
    return text.replace(/[-[\]{}()*+?.,\\^$|#]/g, "\\$&");
};

AtDCore.prototype.processXML = function(responseXML) {

    this.suggestions = [];

   	/* words to mark */
   	var grammarErrors    = [];
   	var spellingErrors   = [];
   	var enrichment       = [];

    var ecount = 0;
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
       var context = errors[i].getAttribute("context");
       var errorOffset = errors[i].getAttribute("offset");
       var errorLength = errors[i].getAttribute("errorlength");
       var startInContext = errors[i].getAttribute("contextoffset");
       var errorString = context.substr(startInContext, errorLength);
       var errorContext = "";

       console.log("1>>>errorString: '" + errorString + "'");

       var replaceString = errorString.replace(/\s+/, this._getSeparators());
       replaceString = RegExp.escape(replaceString);
       suggestion["matcher"]     = new RegExp('^' + replaceString + '$');
       suggestion["string"]      = errorString;
       suggestion["offset"]      = errorOffset;
       suggestion["errorlength"] = errorLength;
       suggestion["context"]     = "";
       suggestion["type"]        = errors[i].getAttribute("category");
       var url = errors[i].getAttribute("url");
       if (url) {
           suggestion["moreinfo"] = url;
       }
       this.suggestions.push(suggestion);
       var ruleId = errors[i].getAttribute("ruleId");
       if (ruleId == "HUNSPELL_NO_SUGGEST_RULE" || ruleId == "HUNSPELL_RULE" || ruleId.indexOf("MORFOLOGIK_RULE") == 0) {
           spellingErrors.push({ word: errorString, pre: errorContext });
       } else {
           grammarErrors.push({ word: errorString, pre: errorContext });
       }
       ecount++;
    }

    if (ecount > 0)
   		errorStruct = this.buildErrorStructure(spellingErrors, enrichment, grammarErrors);
   	else
   		errorStruct = undefined;

    //console.log("######" + errorStruct);
    //console.log("######" + this.suggestions);
    //console.log("######ecount: " + ecount);

    return { errors: errorStruct, count: ecount, suggestions: this.suggestions };
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

    return str.match( RegExp(regex, 'g') ).join( brk );
};
// End of wrapper code by James Padolsey

AtDCore.prototype.findSuggestion = function(element) {
        var text = element.innerHTML;
    //console.log("##findSuggestion text: " + text);
    //console.log("##findSuggestion att: " + element.getAttribute("suggestions"));
    //console.log("##findSuggestion desc: " + element.getAttribute("desc"));

    var errorDescription = {};
    errorDescription["description"] = element.getAttribute("desc");
    var suggestions =  element.getAttribute("suggestions");
    if (suggestions) {
        errorDescription["suggestions"] = suggestions.split("#");
    } else {
        errorDescription["suggestions"] = "";
    }
    var infoUrl =  element.getAttribute("url");
    if (infoUrl) {
        errorDescription["moreinfo"] = infoUrl;
    }
    return errorDescription;
};

/*
 * TokenIterator class
 */

function TokenIterator(tokens) {
	this.tokens = tokens;
	this.index  = 0;
	this.count  = 0;
	this.last   = 0;
};

TokenIterator.prototype.next = function() {
	var current = this.tokens[this.index];
	this.count = this.last;
	this.last += current.length + 1;
	this.index++;

	/* strip single quotes from token, AtD does this when presenting errors */
	if (current != "") {
		if (current[0] == "'")
			current = current.substring(1, current.length);

		if (current[current.length - 1] == "'") 
			current = current.substring(0, current.length - 1);
	}

	return current;
};

TokenIterator.prototype.hasNext = function() {
	return this.index < this.tokens.length;
};

TokenIterator.prototype.hasNextN = function(n) {
	return (this.index + n) < this.tokens.length;            
};

TokenIterator.prototype.skip = function(m, n) {
	this.index += m;
	this.last += n;

	if (this.index < this.tokens.length)
		this.count = this.last - this.tokens[this.index].length;
};

TokenIterator.prototype.getCount = function() {
	return this.count;
};

TokenIterator.prototype.peek = function(n) {
	var peepers = new Array();
	var end = this.index + n;
	for (var x = this.index; x < end; x++)
		peepers.push(this.tokens[x]);
	return peepers;
};

/* 
 *  code to manage highlighting of errors
 */
AtDCore.prototype.markMyWords = function(container_nodes, errors) {           
	var seps  = new RegExp(this._getSeparators());
	var nl = new Array();
	var ecount = 0; /* track number of highlighted errors */
	var parent = this;

	/* Collect all text nodes */
	/* Our goal--ignore nodes that are already wrapped */

    //console.log("========== MARK My WORDS =================");

	this._walk(container_nodes, function(n) {
		if (n.nodeType == 3 && !parent.isMarkedNode(n))
			nl.push(n);
	});
 
	/* walk through the relevant nodes */  
   
	var iterator;
    var pos = 0;

    this.map(nl, function(n) {
        if (n.nodeType == 3) {
            var nodeValue = n.nodeValue;
            //console.log("##------------------------------");
            //console.log("##nodeValue: '" + nodeValue + "' (len: " + nodeValue.length + ", type: " + n.nodeType + ")");
            var i;
            var cleanNodeValue = "";
            for (i = 0; i < nodeValue.length; i++) {
                if (nodeValue.charCodeAt(i) != 65279) {   // cursor has its own node, ignore it
                    cleanNodeValue += nodeValue.charAt(i);
                }
            }
            var newString = cleanNodeValue;
            for (var suggestionIndex = parent.suggestions.length-1; suggestionIndex >= 0; suggestionIndex--) {
                var suggestion = parent.suggestions[suggestionIndex];
                if (!suggestion.used) {
                    var currentNodeStart = pos;
                    var currentNodeEnd = pos + nodeValue.length;
                    var suggestionStart = parseInt(suggestion.offset);
                    var suggestionEnd = suggestionStart + parseInt(suggestion.errorlength);
                    if (suggestionStart >= currentNodeStart && suggestionEnd <= currentNodeEnd) {
                        var spanStart = suggestionStart - currentNodeStart;
                        //console.log("pos: " + pos + ", spanStart: " + suggestionStart + " - " + currentNodeStart +  " + 1 => " + spanStart);
                        var spanEnd = suggestionEnd - currentNodeStart;
                        var urlAttribute = "";
                        if (suggestion.moreinfo) {
                            urlAttribute = ' url="' + suggestion.moreinfo + '"';
                        }

                        newString = newString.substring(0, spanStart)
                                + '<span class="hiddenGrammarError" desc="' + suggestion.description
                                + '" suggestions="' + suggestion.suggestions + '"'
                                + urlAttribute
                                + '>'
                                + newString.substring(spanStart, spanEnd)
                                + '</span>'
                                + newString.substring(spanEnd);
                        suggestion.used = true;
                    }
                }
            }
            var newNode = parent.create(newString, false);
            //console.log("##newString: '" + newString + "'");
            parent.replaceWith(n, newNode);
            pos += cleanNodeValue.length;
        } else {
            //console.log("##IGNORED nodeValue: '" + nodeValue + "' (len: " + nodeValue.length + ")");
        }
    });

	return ecount;
};

AtDCore.prototype._walk = function(elements, f) {
	var i;
	for (i = 0; i < elements.length; i++) {
		f.call(f, elements[i]);
		this._walk(this.contents(elements[i]), f);
	}
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
	    longname :  'After The Deadline',
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

            /* checks if a global var for click stats exists and increments it if it does... */
            if (typeof AtD_proofread_click_count != "undefined")
               AtD_proofread_click_count++;

            /* create the nifty spinny thing that says "hizzo, I'm doing something fo realz" */
            plugin.editor.setProgressState(1);

            /* remove the previous errors */
            plugin._removeWords();

            /* send request to our service */
            //plugin.sendRequest('checkDocument', ed.getContent({ format: 'raw' }), function(data, request, someObject)
            var textContent = ed.getContent().replace(/<.*?>/g, "");
            plugin.sendRequest('checkDocument', textContent, languageCode, function(data, request, someObject)
            {
               /* turn off the spinning thingie */
               plugin.editor.setProgressState(0);

               /* if the server is not accepting requests, let the user know */
               if (request.status != 200 || request.responseText.substr(1, 4) == 'html' || request.responseText == '')
               {
                  ed.windowManager.alert( plugin.editor.getLang('AtD.message_server_error', 'There was a problem communicating with the After the Deadline service. Try again in one minute.') );
                  return;
               }

               /* check to see if things are broken first and foremost */
               if (request.responseXML.getElementsByTagName('message').item(0) != null)
               {
                  ed.windowManager.alert(request.responseXML.getElementsByTagName('message').item(0).firstChild.data);
                  return;
               }

               var results = core.processXML(request.responseXML);
               var ecount  = 0;

               if (results.count > 0)
               {
                  ecount = plugin.markMyWords(results.errors);
                  ed.suggestions = results.suggestions; 
               }

               if (results.suggestions.length == 0) {
                  ed.windowManager.alert(plugin.editor.getLang('AtD.message_no_errors_found', 'No errors were found.'));
               }
               /*if (ecount == 0 && (!callback || callback == undefined))
                  ed.windowManager.alert(plugin.editor.getLang('AtD.message_no_errors_found', 'No writing errors were found.'));
               else if (callback)
                  callback(ecount);*/
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
	 editor.onContextMenu.add(plugin._showMenu, plugin);

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

      markMyWords : function(errors)
      {
         var ed  = this.editor;
         var se = ed.selection, b = se.getBookmark();

         var ecount = ed.core.markMyWords(ed.core.contents(this.editor.getBody()), errors);

         se.moveToBookmark(b);
         return ecount;
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
                  title : plugin.editor.getLang('menu_option_ignore_all', 'Ignore all'),
                  onclick : function() 
                  {
                     t._removeWords(e.target.innerHTML);
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
         plugin._removeWords();

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
