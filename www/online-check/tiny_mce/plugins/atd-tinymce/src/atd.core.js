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
// 1. "ignore" and "ignore this kind of error" only works until the next check
// 2. Ctrl-Z (undo) make the error markers go away
//
// fixed: cursor position gets lost on check
// fixed: "ignore all" doesn't work
// fixed: current cursor position is ignored when incorrect (it has its own node)
// fixed: text with markup (even bold) messes up everything
//

String.prototype.insert = function (index, string) {
  if (index > 0)
    return this.substring(0, index) + string + this.substring(index, this.length);
  else
    return string + this;
};

function AtDCore() {
    /* Localized strings */
    this.i18n = {};
    /* We have to mis-use an existing valid HTML attribute to get our meta information
     * about errors in the text: */
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
AtDCore.prototype.markMyWords = function() {
    var ed = tinyMCE.activeEditor;
    var textWithCursor = this.getPlainTextWithCursorMarker();
    var cursorPos = textWithCursor.indexOf("\ufeff");
    var newText = this.getPlainText();
    
    var previousSpanStart = -1;
    // iterate backwards as we change the text and thus modify positions:
    for (var suggestionIndex = this.suggestions.length-1; suggestionIndex >= 0; suggestionIndex--) {
        var suggestion = this.suggestions[suggestionIndex];
        if (!suggestion.used) {
            var spanStart = suggestion.offset;
            var spanEnd = spanStart + suggestion.errorlength;
            if (previousSpanStart != -1 && spanEnd > previousSpanStart) {
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
            var delim = this.surrogateAttributeDelimiter;
            var metaInfo = ruleId + delim + suggestion.description + delim + suggestion.suggestions;
            if (suggestion.moreinfo) {
                metaInfo += delim + suggestion.moreinfo;
            }
            metaInfo = metaInfo.replace(/&/g, "&amp;").replace(/"/g, "&quot;").replace(/'/g, "&apos;")
                    .replace(/</g, "&lt;").replace(/>/g, "&gt;");  // escape HTML
            newText = newText.substring(0, spanStart)
                    + '<span ' + this.surrogateAttribute + '="' + metaInfo + '" class="' + cssName + '">'
                    + newText.substring(spanStart, spanEnd)
                    + '</span>'
                    + newText.substring(spanEnd);
            suggestion.used = true;
        }
    }
    
    // now insert a span into the location of the original cursor position,
    // only considering real text content of course:
    newText = this._insertCursorSpan(newText, cursorPos);
    
    newText = newText.replace(/^\n/, "");
    newText = newText.replace(/^\n/, "");
    newText = newText.replace(/\n/g, "<br/>");
    ed.setContent(newText);
    // now place the cursor where it was:
    ed.selection.select(ed.dom.select('span#caret_pos_holder')[0]);
    ed.dom.remove(ed.dom.select('span#caret_pos_holder')[0]);
};

AtDCore.prototype._insertCursorSpan = function(text, cursorPos) {
    var newTextParts = text.split(/([<>])/);
    var inTag = 0;
    var textPos = 0;
    var stringPos = 0;
    for (var i = 0; i < newTextParts.length; i++) {
        if (newTextParts[i] == "<" || newTextParts[i] == ">") {
            if (newTextParts[i] == "<") {
                inTag++;
            } else {
                inTag--;
            }
        } else if (inTag == 0) {
            var partLength = newTextParts[i].length;
            if (cursorPos >= textPos && cursorPos <= textPos + partLength) {
                var relativePos = cursorPos - textPos;
                text = text.insert(stringPos + relativePos, "<span id='caret_pos_holder'></span>");
                break;
            }
            textPos += partLength;
        }
        stringPos += newTextParts[i].length;
    }
    return text;
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

AtDCore.prototype.getPlainTextWithCursorMarker = function() {
    return this._getPlainText(false);
};

AtDCore.prototype.getPlainText = function() {
    return this._getPlainText(true);
};

AtDCore.prototype._getPlainText = function(removeCursor) {
    var plainText = tinyMCE.activeEditor.getContent({ format: 'raw' })
            .replace(/<p>/g, "\n\n")
            .replace(/<br>/g, "\n")
            .replace(/<br\s*\/>/g, "\n")
            .replace(/<.*?>/g, "")
            .replace(/&nbsp;/g, " ");  // for Chrome - no idea where this comes from
    if (removeCursor) {
        plainText = plainText.replace(/\ufeff/g, "");  // feff = 65279 = cursor code
    }
    return plainText;
};

AtDCore.prototype.removeWords = function(node, w) {
    var count = 0;
    var parent = this;

    this.map(this.findSpans(node).reverse(), function(n) {
        if (n && (parent.isMarkedNode(n) || parent.hasClass(n, 'mceItemHidden') || parent.isEmptySpan(n)) ) {
            if (n.innerHTML == '&nbsp;') {
                var nnode = document.createTextNode(' '); /* hax0r */
                parent.replaceWith(n, nnode);
            } else if (!w || n.innerHTML == w) {
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
            } else {
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
