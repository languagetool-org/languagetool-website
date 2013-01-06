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

       var replaceString = errorString.replace(/\s+/, this._getSeparators());
       replaceString = RegExp.escape(replaceString);
       suggestion["matcher"]     = new RegExp('^' + replaceString + '$');
       suggestion["string"]      = errorString;
       suggestion["offset"]      = errorOffset;
       suggestion["errorlength"] = errorLength;
       suggestion["context"]     = "";
       suggestion["type"]        = errors[i].getAttribute("category");
       suggestion["ruleid"]        = errors[i].getAttribute("ruleId");
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
 *  code to manage highlighting of errors
 */
AtDCore.prototype.markMyWords = function(container_nodes) {
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

    //var newText = "";
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
                        
                        var ruleId = suggestion.ruleid;
                        var cssName;
                        if (ruleId.indexOf("SPELLER_RULE") >= 0 || ruleId.indexOf("MORFOLOGIK_RULE") == 0 || ruleId == "HUNSPELL_NO_SUGGEST_RULE" || ruleId == "HUNSPELL_RULE") {
                            cssName = "hiddenSpellError";
                        }
                        else {
                            cssName = "hiddenGrammarError";
                        }

                        newString = newString.substring(0, spanStart)
                                + '<span class="' + cssName + '" desc="' + suggestion.description
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
            //newText += newString;
            var newNode = parent.create(newString, false);
            //console.log("##newString: '" + newString + "'");
            parent.replaceWith(n, newNode);
            pos += cleanNodeValue.length;
        } else {
            //console.log("##IGNORED nodeValue: '" + nodeValue + "' (len: " + nodeValue.length + ")");
        }
    });
    
    //tinyMCE.activeEditor.setContent('<span>' + newText + '</span>');
    //console.log("========>"+newText);

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
