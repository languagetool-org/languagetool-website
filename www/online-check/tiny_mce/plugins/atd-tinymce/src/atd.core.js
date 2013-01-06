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
