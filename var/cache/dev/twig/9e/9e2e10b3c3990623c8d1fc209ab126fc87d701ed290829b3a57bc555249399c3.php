<?php

/* resident/vendor/jquery/jquery.js */
class __TwigTemplate_d2bc17283bb0b3e3f8fe6a133dcd1acf3c616dfbcd05a4cc8dec9a06373f5141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb9d9eb8301fa995470ae9fca5d9ab8e6a03b6ccae8bdb065a4877c6601ed332 = $this->env->getExtension("native_profiler");
        $__internal_cb9d9eb8301fa995470ae9fca5d9ab8e6a03b6ccae8bdb065a4877c6601ed332->enter($__internal_cb9d9eb8301fa995470ae9fca5d9ab8e6a03b6ccae8bdb065a4877c6601ed332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resident/vendor/jquery/jquery.js"));

        // line 1
        echo "/*!
 * jQuery JavaScript Library v1.12.4
 * http://jquery.com/
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2016-05-20T17:17Z
 */

(function( global, factory ) {

\tif ( typeof module === \"object\" && typeof module.exports === \"object\" ) {
\t\t// For CommonJS and CommonJS-like environments where a proper `window`
\t\t// is present, execute the factory and get jQuery.
\t\t// For environments that do not have a `window` with a `document`
\t\t// (such as Node.js), expose a factory as module.exports.
\t\t// This accentuates the need for the creation of a real `window`.
\t\t// e.g. var jQuery = require(\"jquery\")(window);
\t\t// See ticket #14549 for more info.
\t\tmodule.exports = global.document ?
\t\t\tfactory( global, true ) :
\t\t\tfunction( w ) {
\t\t\t\tif ( !w.document ) {
\t\t\t\t\tthrow new Error( \"jQuery requires a window with a document\" );
\t\t\t\t}
\t\t\t\treturn factory( w );
\t\t\t};
\t} else {
\t\tfactory( global );
\t}

// Pass this if window is not defined yet
}(typeof window !== \"undefined\" ? window : this, function( window, noGlobal ) {

// Support: Firefox 18+
// Can't be in strict mode, several libs including ASP.NET trace
// the stack via arguments.caller.callee and Firefox dies if
// you try to trace through \"use strict\" call chains. (#13335)
//\"use strict\";
var deletedIds = [];

var document = window.document;

var slice = deletedIds.slice;

var concat = deletedIds.concat;

var push = deletedIds.push;

var indexOf = deletedIds.indexOf;

var class2type = {};

var toString = class2type.toString;

var hasOwn = class2type.hasOwnProperty;

var support = {};



var
\tversion = \"1.12.4\",

\t// Define a local copy of jQuery
\tjQuery = function( selector, context ) {

\t\t// The jQuery object is actually just the init constructor 'enhanced'
\t\t// Need init if jQuery is called (just allow error to be thrown if not included)
\t\treturn new jQuery.fn.init( selector, context );
\t},

\t// Support: Android<4.1, IE<9
\t// Make sure we trim BOM and NBSP
\trtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g,

\t// Matches dashed string for camelizing
\trmsPrefix = /^-ms-/,
\trdashAlpha = /-([\\da-z])/gi,

\t// Used by jQuery.camelCase as callback to replace()
\tfcamelCase = function( all, letter ) {
\t\treturn letter.toUpperCase();
\t};

jQuery.fn = jQuery.prototype = {

\t// The current version of jQuery being used
\tjquery: version,

\tconstructor: jQuery,

\t// Start with an empty selector
\tselector: \"\",

\t// The default length of a jQuery object is 0
\tlength: 0,

\ttoArray: function() {
\t\treturn slice.call( this );
\t},

\t// Get the Nth element in the matched element set OR
\t// Get the whole matched element set as a clean array
\tget: function( num ) {
\t\treturn num != null ?

\t\t\t// Return just the one element from the set
\t\t\t( num < 0 ? this[ num + this.length ] : this[ num ] ) :

\t\t\t// Return all the elements in a clean array
\t\t\tslice.call( this );
\t},

\t// Take an array of elements and push it onto the stack
\t// (returning the new matched element set)
\tpushStack: function( elems ) {

\t\t// Build a new jQuery matched element set
\t\tvar ret = jQuery.merge( this.constructor(), elems );

\t\t// Add the old object onto the stack (as a reference)
\t\tret.prevObject = this;
\t\tret.context = this.context;

\t\t// Return the newly-formed element set
\t\treturn ret;
\t},

\t// Execute a callback for every element in the matched set.
\teach: function( callback ) {
\t\treturn jQuery.each( this, callback );
\t},

\tmap: function( callback ) {
\t\treturn this.pushStack( jQuery.map( this, function( elem, i ) {
\t\t\treturn callback.call( elem, i, elem );
\t\t} ) );
\t},

\tslice: function() {
\t\treturn this.pushStack( slice.apply( this, arguments ) );
\t},

\tfirst: function() {
\t\treturn this.eq( 0 );
\t},

\tlast: function() {
\t\treturn this.eq( -1 );
\t},

\teq: function( i ) {
\t\tvar len = this.length,
\t\t\tj = +i + ( i < 0 ? len : 0 );
\t\treturn this.pushStack( j >= 0 && j < len ? [ this[ j ] ] : [] );
\t},

\tend: function() {
\t\treturn this.prevObject || this.constructor();
\t},

\t// For internal use only.
\t// Behaves like an Array's method, not like a jQuery method.
\tpush: push,
\tsort: deletedIds.sort,
\tsplice: deletedIds.splice
};

jQuery.extend = jQuery.fn.extend = function() {
\tvar src, copyIsArray, copy, name, options, clone,
\t\ttarget = arguments[ 0 ] || {},
\t\ti = 1,
\t\tlength = arguments.length,
\t\tdeep = false;

\t// Handle a deep copy situation
\tif ( typeof target === \"boolean\" ) {
\t\tdeep = target;

\t\t// skip the boolean and the target
\t\ttarget = arguments[ i ] || {};
\t\ti++;
\t}

\t// Handle case when target is a string or something (possible in deep copy)
\tif ( typeof target !== \"object\" && !jQuery.isFunction( target ) ) {
\t\ttarget = {};
\t}

\t// extend jQuery itself if only one argument is passed
\tif ( i === length ) {
\t\ttarget = this;
\t\ti--;
\t}

\tfor ( ; i < length; i++ ) {

\t\t// Only deal with non-null/undefined values
\t\tif ( ( options = arguments[ i ] ) != null ) {

\t\t\t// Extend the base object
\t\t\tfor ( name in options ) {
\t\t\t\tsrc = target[ name ];
\t\t\t\tcopy = options[ name ];

\t\t\t\t// Prevent never-ending loop
\t\t\t\tif ( target === copy ) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\t// Recurse if we're merging plain objects or arrays
\t\t\t\tif ( deep && copy && ( jQuery.isPlainObject( copy ) ||
\t\t\t\t\t( copyIsArray = jQuery.isArray( copy ) ) ) ) {

\t\t\t\t\tif ( copyIsArray ) {
\t\t\t\t\t\tcopyIsArray = false;
\t\t\t\t\t\tclone = src && jQuery.isArray( src ) ? src : [];

\t\t\t\t\t} else {
\t\t\t\t\t\tclone = src && jQuery.isPlainObject( src ) ? src : {};
\t\t\t\t\t}

\t\t\t\t\t// Never move original objects, clone them
\t\t\t\t\ttarget[ name ] = jQuery.extend( deep, clone, copy );

\t\t\t\t// Don't bring in undefined values
\t\t\t\t} else if ( copy !== undefined ) {
\t\t\t\t\ttarget[ name ] = copy;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Return the modified object
\treturn target;
};

jQuery.extend( {

\t// Unique for each copy of jQuery on the page
\texpando: \"jQuery\" + ( version + Math.random() ).replace( /\\D/g, \"\" ),

\t// Assume jQuery is ready without the ready module
\tisReady: true,

\terror: function( msg ) {
\t\tthrow new Error( msg );
\t},

\tnoop: function() {},

\t// See test/unit/core.js for details concerning isFunction.
\t// Since version 1.3, DOM methods and functions like alert
\t// aren't supported. They return false on IE (#2968).
\tisFunction: function( obj ) {
\t\treturn jQuery.type( obj ) === \"function\";
\t},

\tisArray: Array.isArray || function( obj ) {
\t\treturn jQuery.type( obj ) === \"array\";
\t},

\tisWindow: function( obj ) {
\t\t/* jshint eqeqeq: false */
\t\treturn obj != null && obj == obj.window;
\t},

\tisNumeric: function( obj ) {

\t\t// parseFloat NaNs numeric-cast false positives (null|true|false|\"\")
\t\t// ...but misinterprets leading-number strings, particularly hex literals (\"0x...\")
\t\t// subtraction forces infinities to NaN
\t\t// adding 1 corrects loss of precision from parseFloat (#15100)
\t\tvar realStringObj = obj && obj.toString();
\t\treturn !jQuery.isArray( obj ) && ( realStringObj - parseFloat( realStringObj ) + 1 ) >= 0;
\t},

\tisEmptyObject: function( obj ) {
\t\tvar name;
\t\tfor ( name in obj ) {
\t\t\treturn false;
\t\t}
\t\treturn true;
\t},

\tisPlainObject: function( obj ) {
\t\tvar key;

\t\t// Must be an Object.
\t\t// Because of IE, we also have to check the presence of the constructor property.
\t\t// Make sure that DOM nodes and window objects don't pass through, as well
\t\tif ( !obj || jQuery.type( obj ) !== \"object\" || obj.nodeType || jQuery.isWindow( obj ) ) {
\t\t\treturn false;
\t\t}

\t\ttry {

\t\t\t// Not own constructor property must be Object
\t\t\tif ( obj.constructor &&
\t\t\t\t!hasOwn.call( obj, \"constructor\" ) &&
\t\t\t\t!hasOwn.call( obj.constructor.prototype, \"isPrototypeOf\" ) ) {
\t\t\t\treturn false;
\t\t\t}
\t\t} catch ( e ) {

\t\t\t// IE8,9 Will throw exceptions on certain host objects #9897
\t\t\treturn false;
\t\t}

\t\t// Support: IE<9
\t\t// Handle iteration over inherited properties before own properties.
\t\tif ( !support.ownFirst ) {
\t\t\tfor ( key in obj ) {
\t\t\t\treturn hasOwn.call( obj, key );
\t\t\t}
\t\t}

\t\t// Own properties are enumerated firstly, so to speed up,
\t\t// if last one is own, then all properties are own.
\t\tfor ( key in obj ) {}

\t\treturn key === undefined || hasOwn.call( obj, key );
\t},

\ttype: function( obj ) {
\t\tif ( obj == null ) {
\t\t\treturn obj + \"\";
\t\t}
\t\treturn typeof obj === \"object\" || typeof obj === \"function\" ?
\t\t\tclass2type[ toString.call( obj ) ] || \"object\" :
\t\t\ttypeof obj;
\t},

\t// Workarounds based on findings by Jim Driscoll
\t// http://weblogs.java.net/blog/driscoll/archive/2009/09/08/eval-javascript-global-context
\tglobalEval: function( data ) {
\t\tif ( data && jQuery.trim( data ) ) {

\t\t\t// We use execScript on Internet Explorer
\t\t\t// We use an anonymous function so that context is window
\t\t\t// rather than jQuery in Firefox
\t\t\t( window.execScript || function( data ) {
\t\t\t\twindow[ \"eval\" ].call( window, data ); // jscs:ignore requireDotNotation
\t\t\t} )( data );
\t\t}
\t},

\t// Convert dashed to camelCase; used by the css and data modules
\t// Microsoft forgot to hump their vendor prefix (#9572)
\tcamelCase: function( string ) {
\t\treturn string.replace( rmsPrefix, \"ms-\" ).replace( rdashAlpha, fcamelCase );
\t},

\tnodeName: function( elem, name ) {
\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();
\t},

\teach: function( obj, callback ) {
\t\tvar length, i = 0;

\t\tif ( isArrayLike( obj ) ) {
\t\t\tlength = obj.length;
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tif ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tfor ( i in obj ) {
\t\t\t\tif ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn obj;
\t},

\t// Support: Android<4.1, IE<9
\ttrim: function( text ) {
\t\treturn text == null ?
\t\t\t\"\" :
\t\t\t( text + \"\" ).replace( rtrim, \"\" );
\t},

\t// results is for internal usage only
\tmakeArray: function( arr, results ) {
\t\tvar ret = results || [];

\t\tif ( arr != null ) {
\t\t\tif ( isArrayLike( Object( arr ) ) ) {
\t\t\t\tjQuery.merge( ret,
\t\t\t\t\ttypeof arr === \"string\" ?
\t\t\t\t\t[ arr ] : arr
\t\t\t\t);
\t\t\t} else {
\t\t\t\tpush.call( ret, arr );
\t\t\t}
\t\t}

\t\treturn ret;
\t},

\tinArray: function( elem, arr, i ) {
\t\tvar len;

\t\tif ( arr ) {
\t\t\tif ( indexOf ) {
\t\t\t\treturn indexOf.call( arr, elem, i );
\t\t\t}

\t\t\tlen = arr.length;
\t\t\ti = i ? i < 0 ? Math.max( 0, len + i ) : i : 0;

\t\t\tfor ( ; i < len; i++ ) {

\t\t\t\t// Skip accessing in sparse arrays
\t\t\t\tif ( i in arr && arr[ i ] === elem ) {
\t\t\t\t\treturn i;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn -1;
\t},

\tmerge: function( first, second ) {
\t\tvar len = +second.length,
\t\t\tj = 0,
\t\t\ti = first.length;

\t\twhile ( j < len ) {
\t\t\tfirst[ i++ ] = second[ j++ ];
\t\t}

\t\t// Support: IE<9
\t\t// Workaround casting of .length to NaN on otherwise arraylike objects (e.g., NodeLists)
\t\tif ( len !== len ) {
\t\t\twhile ( second[ j ] !== undefined ) {
\t\t\t\tfirst[ i++ ] = second[ j++ ];
\t\t\t}
\t\t}

\t\tfirst.length = i;

\t\treturn first;
\t},

\tgrep: function( elems, callback, invert ) {
\t\tvar callbackInverse,
\t\t\tmatches = [],
\t\t\ti = 0,
\t\t\tlength = elems.length,
\t\t\tcallbackExpect = !invert;

\t\t// Go through the array, only saving the items
\t\t// that pass the validator function
\t\tfor ( ; i < length; i++ ) {
\t\t\tcallbackInverse = !callback( elems[ i ], i );
\t\t\tif ( callbackInverse !== callbackExpect ) {
\t\t\t\tmatches.push( elems[ i ] );
\t\t\t}
\t\t}

\t\treturn matches;
\t},

\t// arg is for internal usage only
\tmap: function( elems, callback, arg ) {
\t\tvar length, value,
\t\t\ti = 0,
\t\t\tret = [];

\t\t// Go through the array, translating each of the items to their new values
\t\tif ( isArrayLike( elems ) ) {
\t\t\tlength = elems.length;
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}

\t\t// Go through every key on the object,
\t\t} else {
\t\t\tfor ( i in elems ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Flatten any nested arrays
\t\treturn concat.apply( [], ret );
\t},

\t// A global GUID counter for objects
\tguid: 1,

\t// Bind a function to a context, optionally partially applying any
\t// arguments.
\tproxy: function( fn, context ) {
\t\tvar args, proxy, tmp;

\t\tif ( typeof context === \"string\" ) {
\t\t\ttmp = fn[ context ];
\t\t\tcontext = fn;
\t\t\tfn = tmp;
\t\t}

\t\t// Quick check to determine if target is callable, in the spec
\t\t// this throws a TypeError, but we will just return undefined.
\t\tif ( !jQuery.isFunction( fn ) ) {
\t\t\treturn undefined;
\t\t}

\t\t// Simulated bind
\t\targs = slice.call( arguments, 2 );
\t\tproxy = function() {
\t\t\treturn fn.apply( context || this, args.concat( slice.call( arguments ) ) );
\t\t};

\t\t// Set the guid of unique handler to the same of original handler, so it can be removed
\t\tproxy.guid = fn.guid = fn.guid || jQuery.guid++;

\t\treturn proxy;
\t},

\tnow: function() {
\t\treturn +( new Date() );
\t},

\t// jQuery.support is not used in Core but other projects attach their
\t// properties to it so it needs to exist.
\tsupport: support
} );

// JSHint would error on this code due to the Symbol not being defined in ES5.
// Defining this global in .jshintrc would create a danger of using the global
// unguarded in another place, it seems safer to just disable JSHint for these
// three lines.
/* jshint ignore: start */
if ( typeof Symbol === \"function\" ) {
\tjQuery.fn[ Symbol.iterator ] = deletedIds[ Symbol.iterator ];
}
/* jshint ignore: end */

// Populate the class2type map
jQuery.each( \"Boolean Number String Function Array Date RegExp Object Error Symbol\".split( \" \" ),
function( i, name ) {
\tclass2type[ \"[object \" + name + \"]\" ] = name.toLowerCase();
} );

function isArrayLike( obj ) {

\t// Support: iOS 8.2 (not reproducible in simulator)
\t// `in` check used to prevent JIT error (gh-2145)
\t// hasOwn isn't used here due to false negatives
\t// regarding Nodelist length in IE
\tvar length = !!obj && \"length\" in obj && obj.length,
\t\ttype = jQuery.type( obj );

\tif ( type === \"function\" || jQuery.isWindow( obj ) ) {
\t\treturn false;
\t}

\treturn type === \"array\" || length === 0 ||
\t\ttypeof length === \"number\" && length > 0 && ( length - 1 ) in obj;
}
var Sizzle =
/*!
 * Sizzle CSS Selector Engine v2.2.1
 * http://sizzlejs.com/
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2015-10-17
 */
(function( window ) {

var i,
\tsupport,
\tExpr,
\tgetText,
\tisXML,
\ttokenize,
\tcompile,
\tselect,
\toutermostContext,
\tsortInput,
\thasDuplicate,

\t// Local document vars
\tsetDocument,
\tdocument,
\tdocElem,
\tdocumentIsHTML,
\trbuggyQSA,
\trbuggyMatches,
\tmatches,
\tcontains,

\t// Instance-specific data
\texpando = \"sizzle\" + 1 * new Date(),
\tpreferredDoc = window.document,
\tdirruns = 0,
\tdone = 0,
\tclassCache = createCache(),
\ttokenCache = createCache(),
\tcompilerCache = createCache(),
\tsortOrder = function( a, b ) {
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t}
\t\treturn 0;
\t},

\t// General-purpose constants
\tMAX_NEGATIVE = 1 << 31,

\t// Instance methods
\thasOwn = ({}).hasOwnProperty,
\tarr = [],
\tpop = arr.pop,
\tpush_native = arr.push,
\tpush = arr.push,
\tslice = arr.slice,
\t// Use a stripped-down indexOf as it's faster than native
\t// http://jsperf.com/thor-indexof-vs-for/5
\tindexOf = function( list, elem ) {
\t\tvar i = 0,
\t\t\tlen = list.length;
\t\tfor ( ; i < len; i++ ) {
\t\t\tif ( list[i] === elem ) {
\t\t\t\treturn i;
\t\t\t}
\t\t}
\t\treturn -1;
\t},

\tbooleans = \"checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped\",

\t// Regular expressions

\t// http://www.w3.org/TR/css3-selectors/#whitespace
\twhitespace = \"[\\\\x20\\\\t\\\\r\\\\n\\\\f]\",

\t// http://www.w3.org/TR/CSS21/syndata.html#value-def-identifier
\tidentifier = \"(?:\\\\\\\\.|[\\\\w-]|[^\\\\x00-\\\\xa0])+\",

\t// Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors
\tattributes = \"\\\\[\" + whitespace + \"*(\" + identifier + \")(?:\" + whitespace +
\t\t// Operator (capture 2)
\t\t\"*([*^\$|!~]?=)\" + whitespace +
\t\t// \"Attribute values must be CSS identifiers [capture 5] or strings [capture 3 or capture 4]\"
\t\t\"*(?:'((?:\\\\\\\\.|[^\\\\\\\\'])*)'|\\\"((?:\\\\\\\\.|[^\\\\\\\\\\\"])*)\\\"|(\" + identifier + \"))|)\" + whitespace +
\t\t\"*\\\\]\",

\tpseudos = \":(\" + identifier + \")(?:\\\\((\" +
\t\t// To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:
\t\t// 1. quoted (capture 3; capture 4 or capture 5)
\t\t\"('((?:\\\\\\\\.|[^\\\\\\\\'])*)'|\\\"((?:\\\\\\\\.|[^\\\\\\\\\\\"])*)\\\")|\" +
\t\t// 2. simple (capture 6)
\t\t\"((?:\\\\\\\\.|[^\\\\\\\\()[\\\\]]|\" + attributes + \")*)|\" +
\t\t// 3. anything else (capture 2)
\t\t\".*\" +
\t\t\")\\\\)|)\",

\t// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
\trwhitespace = new RegExp( whitespace + \"+\", \"g\" ),
\trtrim = new RegExp( \"^\" + whitespace + \"+|((?:^|[^\\\\\\\\])(?:\\\\\\\\.)*)\" + whitespace + \"+\$\", \"g\" ),

\trcomma = new RegExp( \"^\" + whitespace + \"*,\" + whitespace + \"*\" ),
\trcombinators = new RegExp( \"^\" + whitespace + \"*([>+~]|\" + whitespace + \")\" + whitespace + \"*\" ),

\trattributeQuotes = new RegExp( \"=\" + whitespace + \"*([^\\\\]'\\\"]*?)\" + whitespace + \"*\\\\]\", \"g\" ),

\trpseudo = new RegExp( pseudos ),
\tridentifier = new RegExp( \"^\" + identifier + \"\$\" ),

\tmatchExpr = {
\t\t\"ID\": new RegExp( \"^#(\" + identifier + \")\" ),
\t\t\"CLASS\": new RegExp( \"^\\\\.(\" + identifier + \")\" ),
\t\t\"TAG\": new RegExp( \"^(\" + identifier + \"|[*])\" ),
\t\t\"ATTR\": new RegExp( \"^\" + attributes ),
\t\t\"PSEUDO\": new RegExp( \"^\" + pseudos ),
\t\t\"CHILD\": new RegExp( \"^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\\\(\" + whitespace +
\t\t\t\"*(even|odd|(([+-]|)(\\\\d*)n|)\" + whitespace + \"*(?:([+-]|)\" + whitespace +
\t\t\t\"*(\\\\d+)|))\" + whitespace + \"*\\\\)|)\", \"i\" ),
\t\t\"bool\": new RegExp( \"^(?:\" + booleans + \")\$\", \"i\" ),
\t\t// For use in libraries implementing .is()
\t\t// We use this for POS matching in `select`
\t\t\"needsContext\": new RegExp( \"^\" + whitespace + \"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\\\(\" +
\t\t\twhitespace + \"*((?:-\\\\d)?\\\\d*)\" + whitespace + \"*\\\\)|)(?=[^-]|\$)\", \"i\" )
\t},

\trinputs = /^(?:input|select|textarea|button)\$/i,
\trheader = /^h\\d\$/i,

\trnative = /^[^{]+\\{\\s*\\[native \\w/,

\t// Easily-parseable/retrievable ID or TAG or CLASS selectors
\trquickExpr = /^(?:#([\\w-]+)|(\\w+)|\\.([\\w-]+))\$/,

\trsibling = /[+~]/,
\trescape = /'|\\\\/g,

\t// CSS escapes http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
\trunescape = new RegExp( \"\\\\\\\\([\\\\da-f]{1,6}\" + whitespace + \"?|(\" + whitespace + \")|.)\", \"ig\" ),
\tfunescape = function( _, escaped, escapedWhitespace ) {
\t\tvar high = \"0x\" + escaped - 0x10000;
\t\t// NaN means non-codepoint
\t\t// Support: Firefox<24
\t\t// Workaround erroneous numeric interpretation of +\"0x\"
\t\treturn high !== high || escapedWhitespace ?
\t\t\tescaped :
\t\t\thigh < 0 ?
\t\t\t\t// BMP codepoint
\t\t\t\tString.fromCharCode( high + 0x10000 ) :
\t\t\t\t// Supplemental Plane codepoint (surrogate pair)
\t\t\t\tString.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
\t},

\t// Used for iframes
\t// See setDocument()
\t// Removing the function wrapper causes a \"Permission Denied\"
\t// error in IE
\tunloadHandler = function() {
\t\tsetDocument();
\t};

// Optimize for push.apply( _, NodeList )
try {
\tpush.apply(
\t\t(arr = slice.call( preferredDoc.childNodes )),
\t\tpreferredDoc.childNodes
\t);
\t// Support: Android<4.0
\t// Detect silently failing push.apply
\tarr[ preferredDoc.childNodes.length ].nodeType;
} catch ( e ) {
\tpush = { apply: arr.length ?

\t\t// Leverage slice if possible
\t\tfunction( target, els ) {
\t\t\tpush_native.apply( target, slice.call(els) );
\t\t} :

\t\t// Support: IE<9
\t\t// Otherwise append directly
\t\tfunction( target, els ) {
\t\t\tvar j = target.length,
\t\t\t\ti = 0;
\t\t\t// Can't trust NodeList.length
\t\t\twhile ( (target[j++] = els[i++]) ) {}
\t\t\ttarget.length = j - 1;
\t\t}
\t};
}

function Sizzle( selector, context, results, seed ) {
\tvar m, i, elem, nid, nidselect, match, groups, newSelector,
\t\tnewContext = context && context.ownerDocument,

\t\t// nodeType defaults to 9, since context defaults to document
\t\tnodeType = context ? context.nodeType : 9;

\tresults = results || [];

\t// Return early from calls with invalid selector or context
\tif ( typeof selector !== \"string\" || !selector ||
\t\tnodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {

\t\treturn results;
\t}

\t// Try to shortcut find operations (as opposed to filters) in HTML documents
\tif ( !seed ) {

\t\tif ( ( context ? context.ownerDocument || context : preferredDoc ) !== document ) {
\t\t\tsetDocument( context );
\t\t}
\t\tcontext = context || document;

\t\tif ( documentIsHTML ) {

\t\t\t// If the selector is sufficiently simple, try using a \"get*By*\" DOM method
\t\t\t// (excepting DocumentFragment context, where the methods don't exist)
\t\t\tif ( nodeType !== 11 && (match = rquickExpr.exec( selector )) ) {

\t\t\t\t// ID selector
\t\t\t\tif ( (m = match[1]) ) {

\t\t\t\t\t// Document context
\t\t\t\t\tif ( nodeType === 9 ) {
\t\t\t\t\t\tif ( (elem = context.getElementById( m )) ) {

\t\t\t\t\t\t\t// Support: IE, Opera, Webkit
\t\t\t\t\t\t\t// TODO: identify versions
\t\t\t\t\t\t\t// getElementById can match elements by name instead of ID
\t\t\t\t\t\t\tif ( elem.id === m ) {
\t\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t}

\t\t\t\t\t// Element context
\t\t\t\t\t} else {

\t\t\t\t\t\t// Support: IE, Opera, Webkit
\t\t\t\t\t\t// TODO: identify versions
\t\t\t\t\t\t// getElementById can match elements by name instead of ID
\t\t\t\t\t\tif ( newContext && (elem = newContext.getElementById( m )) &&
\t\t\t\t\t\t\tcontains( context, elem ) &&
\t\t\t\t\t\t\telem.id === m ) {

\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t// Type selector
\t\t\t\t} else if ( match[2] ) {
\t\t\t\t\tpush.apply( results, context.getElementsByTagName( selector ) );
\t\t\t\t\treturn results;

\t\t\t\t// Class selector
\t\t\t\t} else if ( (m = match[3]) && support.getElementsByClassName &&
\t\t\t\t\tcontext.getElementsByClassName ) {

\t\t\t\t\tpush.apply( results, context.getElementsByClassName( m ) );
\t\t\t\t\treturn results;
\t\t\t\t}
\t\t\t}

\t\t\t// Take advantage of querySelectorAll
\t\t\tif ( support.qsa &&
\t\t\t\t!compilerCache[ selector + \" \" ] &&
\t\t\t\t(!rbuggyQSA || !rbuggyQSA.test( selector )) ) {

\t\t\t\tif ( nodeType !== 1 ) {
\t\t\t\t\tnewContext = context;
\t\t\t\t\tnewSelector = selector;

\t\t\t\t// qSA looks outside Element context, which is not what we want
\t\t\t\t// Thanks to Andrew Dupont for this workaround technique
\t\t\t\t// Support: IE <=8
\t\t\t\t// Exclude object elements
\t\t\t\t} else if ( context.nodeName.toLowerCase() !== \"object\" ) {

\t\t\t\t\t// Capture the context ID, setting it first if necessary
\t\t\t\t\tif ( (nid = context.getAttribute( \"id\" )) ) {
\t\t\t\t\t\tnid = nid.replace( rescape, \"\\\\\$&\" );
\t\t\t\t\t} else {
\t\t\t\t\t\tcontext.setAttribute( \"id\", (nid = expando) );
\t\t\t\t\t}

\t\t\t\t\t// Prefix every selector in the list
\t\t\t\t\tgroups = tokenize( selector );
\t\t\t\t\ti = groups.length;
\t\t\t\t\tnidselect = ridentifier.test( nid ) ? \"#\" + nid : \"[id='\" + nid + \"']\";
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tgroups[i] = nidselect + \" \" + toSelector( groups[i] );
\t\t\t\t\t}
\t\t\t\t\tnewSelector = groups.join( \",\" );

\t\t\t\t\t// Expand context for sibling selectors
\t\t\t\t\tnewContext = rsibling.test( selector ) && testContext( context.parentNode ) ||
\t\t\t\t\t\tcontext;
\t\t\t\t}

\t\t\t\tif ( newSelector ) {
\t\t\t\t\ttry {
\t\t\t\t\t\tpush.apply( results,
\t\t\t\t\t\t\tnewContext.querySelectorAll( newSelector )
\t\t\t\t\t\t);
\t\t\t\t\t\treturn results;
\t\t\t\t\t} catch ( qsaError ) {
\t\t\t\t\t} finally {
\t\t\t\t\t\tif ( nid === expando ) {
\t\t\t\t\t\t\tcontext.removeAttribute( \"id\" );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// All others
\treturn select( selector.replace( rtrim, \"\$1\" ), context, results, seed );
}

/**
 * Create key-value caches of limited size
 * @returns {function(string, object)} Returns the Object data after storing it on itself with
 *\tproperty name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
 *\tdeleting the oldest entry
 */
function createCache() {
\tvar keys = [];

\tfunction cache( key, value ) {
\t\t// Use (key + \" \") to avoid collision with native prototype properties (see Issue #157)
\t\tif ( keys.push( key + \" \" ) > Expr.cacheLength ) {
\t\t\t// Only keep the most recent entries
\t\t\tdelete cache[ keys.shift() ];
\t\t}
\t\treturn (cache[ key + \" \" ] = value);
\t}
\treturn cache;
}

/**
 * Mark a function for special use by Sizzle
 * @param {Function} fn The function to mark
 */
function markFunction( fn ) {
\tfn[ expando ] = true;
\treturn fn;
}

/**
 * Support testing using an element
 * @param {Function} fn Passed the created div and expects a boolean result
 */
function assert( fn ) {
\tvar div = document.createElement(\"div\");

\ttry {
\t\treturn !!fn( div );
\t} catch (e) {
\t\treturn false;
\t} finally {
\t\t// Remove from its parent by default
\t\tif ( div.parentNode ) {
\t\t\tdiv.parentNode.removeChild( div );
\t\t}
\t\t// release memory in IE
\t\tdiv = null;
\t}
}

/**
 * Adds the same handler for all of the specified attrs
 * @param {String} attrs Pipe-separated list of attributes
 * @param {Function} handler The method that will be applied
 */
function addHandle( attrs, handler ) {
\tvar arr = attrs.split(\"|\"),
\t\ti = arr.length;

\twhile ( i-- ) {
\t\tExpr.attrHandle[ arr[i] ] = handler;
\t}
}

/**
 * Checks document order of two siblings
 * @param {Element} a
 * @param {Element} b
 * @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b
 */
function siblingCheck( a, b ) {
\tvar cur = b && a,
\t\tdiff = cur && a.nodeType === 1 && b.nodeType === 1 &&
\t\t\t( ~b.sourceIndex || MAX_NEGATIVE ) -
\t\t\t( ~a.sourceIndex || MAX_NEGATIVE );

\t// Use IE sourceIndex if available on both nodes
\tif ( diff ) {
\t\treturn diff;
\t}

\t// Check if b follows a
\tif ( cur ) {
\t\twhile ( (cur = cur.nextSibling) ) {
\t\t\tif ( cur === b ) {
\t\t\t\treturn -1;
\t\t\t}
\t\t}
\t}

\treturn a ? 1 : -1;
}

/**
 * Returns a function to use in pseudos for input types
 * @param {String} type
 */
function createInputPseudo( type ) {
\treturn function( elem ) {
\t\tvar name = elem.nodeName.toLowerCase();
\t\treturn name === \"input\" && elem.type === type;
\t};
}

/**
 * Returns a function to use in pseudos for buttons
 * @param {String} type
 */
function createButtonPseudo( type ) {
\treturn function( elem ) {
\t\tvar name = elem.nodeName.toLowerCase();
\t\treturn (name === \"input\" || name === \"button\") && elem.type === type;
\t};
}

/**
 * Returns a function to use in pseudos for positionals
 * @param {Function} fn
 */
function createPositionalPseudo( fn ) {
\treturn markFunction(function( argument ) {
\t\targument = +argument;
\t\treturn markFunction(function( seed, matches ) {
\t\t\tvar j,
\t\t\t\tmatchIndexes = fn( [], seed.length, argument ),
\t\t\t\ti = matchIndexes.length;

\t\t\t// Match elements found at the specified indexes
\t\t\twhile ( i-- ) {
\t\t\t\tif ( seed[ (j = matchIndexes[i]) ] ) {
\t\t\t\t\tseed[j] = !(matches[j] = seed[j]);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
}

/**
 * Checks a node for validity as a Sizzle context
 * @param {Element|Object=} context
 * @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value
 */
function testContext( context ) {
\treturn context && typeof context.getElementsByTagName !== \"undefined\" && context;
}

// Expose support vars for convenience
support = Sizzle.support = {};

/**
 * Detects XML nodes
 * @param {Element|Object} elem An element or a document
 * @returns {Boolean} True iff elem is a non-HTML XML node
 */
isXML = Sizzle.isXML = function( elem ) {
\t// documentElement is verified for cases where it doesn't yet exist
\t// (such as loading iframes in IE - #4833)
\tvar documentElement = elem && (elem.ownerDocument || elem).documentElement;
\treturn documentElement ? documentElement.nodeName !== \"HTML\" : false;
};

/**
 * Sets document-related variables once based on the current document
 * @param {Element|Object} [doc] An element or document object to use to set the document
 * @returns {Object} Returns the current document
 */
setDocument = Sizzle.setDocument = function( node ) {
\tvar hasCompare, parent,
\t\tdoc = node ? node.ownerDocument || node : preferredDoc;

\t// Return early if doc is invalid or already selected
\tif ( doc === document || doc.nodeType !== 9 || !doc.documentElement ) {
\t\treturn document;
\t}

\t// Update global variables
\tdocument = doc;
\tdocElem = document.documentElement;
\tdocumentIsHTML = !isXML( document );

\t// Support: IE 9-11, Edge
\t// Accessing iframe documents after unload throws \"permission denied\" errors (jQuery #13936)
\tif ( (parent = document.defaultView) && parent.top !== parent ) {
\t\t// Support: IE 11
\t\tif ( parent.addEventListener ) {
\t\t\tparent.addEventListener( \"unload\", unloadHandler, false );

\t\t// Support: IE 9 - 10 only
\t\t} else if ( parent.attachEvent ) {
\t\t\tparent.attachEvent( \"onunload\", unloadHandler );
\t\t}
\t}

\t/* Attributes
\t---------------------------------------------------------------------- */

\t// Support: IE<8
\t// Verify that getAttribute really returns attributes and not properties
\t// (excepting IE8 booleans)
\tsupport.attributes = assert(function( div ) {
\t\tdiv.className = \"i\";
\t\treturn !div.getAttribute(\"className\");
\t});

\t/* getElement(s)By*
\t---------------------------------------------------------------------- */

\t// Check if getElementsByTagName(\"*\") returns only elements
\tsupport.getElementsByTagName = assert(function( div ) {
\t\tdiv.appendChild( document.createComment(\"\") );
\t\treturn !div.getElementsByTagName(\"*\").length;
\t});

\t// Support: IE<9
\tsupport.getElementsByClassName = rnative.test( document.getElementsByClassName );

\t// Support: IE<10
\t// Check if getElementById returns elements by name
\t// The broken getElementById methods don't pick up programatically-set names,
\t// so use a roundabout getElementsByName test
\tsupport.getById = assert(function( div ) {
\t\tdocElem.appendChild( div ).id = expando;
\t\treturn !document.getElementsByName || !document.getElementsByName( expando ).length;
\t});

\t// ID find and filter
\tif ( support.getById ) {
\t\tExpr.find[\"ID\"] = function( id, context ) {
\t\t\tif ( typeof context.getElementById !== \"undefined\" && documentIsHTML ) {
\t\t\t\tvar m = context.getElementById( id );
\t\t\t\treturn m ? [ m ] : [];
\t\t\t}
\t\t};
\t\tExpr.filter[\"ID\"] = function( id ) {
\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\treturn elem.getAttribute(\"id\") === attrId;
\t\t\t};
\t\t};
\t} else {
\t\t// Support: IE6/7
\t\t// getElementById is not reliable as a find shortcut
\t\tdelete Expr.find[\"ID\"];

\t\tExpr.filter[\"ID\"] =  function( id ) {
\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\tvar node = typeof elem.getAttributeNode !== \"undefined\" &&
\t\t\t\t\telem.getAttributeNode(\"id\");
\t\t\t\treturn node && node.value === attrId;
\t\t\t};
\t\t};
\t}

\t// Tag
\tExpr.find[\"TAG\"] = support.getElementsByTagName ?
\t\tfunction( tag, context ) {
\t\t\tif ( typeof context.getElementsByTagName !== \"undefined\" ) {
\t\t\t\treturn context.getElementsByTagName( tag );

\t\t\t// DocumentFragment nodes don't have gEBTN
\t\t\t} else if ( support.qsa ) {
\t\t\t\treturn context.querySelectorAll( tag );
\t\t\t}
\t\t} :

\t\tfunction( tag, context ) {
\t\t\tvar elem,
\t\t\t\ttmp = [],
\t\t\t\ti = 0,
\t\t\t\t// By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too
\t\t\t\tresults = context.getElementsByTagName( tag );

\t\t\t// Filter out possible comments
\t\t\tif ( tag === \"*\" ) {
\t\t\t\twhile ( (elem = results[i++]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\ttmp.push( elem );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn tmp;
\t\t\t}
\t\t\treturn results;
\t\t};

\t// Class
\tExpr.find[\"CLASS\"] = support.getElementsByClassName && function( className, context ) {
\t\tif ( typeof context.getElementsByClassName !== \"undefined\" && documentIsHTML ) {
\t\t\treturn context.getElementsByClassName( className );
\t\t}
\t};

\t/* QSA/matchesSelector
\t---------------------------------------------------------------------- */

\t// QSA and matchesSelector support

\t// matchesSelector(:active) reports false when true (IE9/Opera 11.5)
\trbuggyMatches = [];

\t// qSa(:focus) reports false when true (Chrome 21)
\t// We allow this because of a bug in IE8/9 that throws an error
\t// whenever `document.activeElement` is accessed on an iframe
\t// So, we allow :focus to pass through QSA all the time to avoid the IE error
\t// See http://bugs.jquery.com/ticket/13378
\trbuggyQSA = [];

\tif ( (support.qsa = rnative.test( document.querySelectorAll )) ) {
\t\t// Build QSA regex
\t\t// Regex strategy adopted from Diego Perini
\t\tassert(function( div ) {
\t\t\t// Select is set to empty string on purpose
\t\t\t// This is to test IE's treatment of not explicitly
\t\t\t// setting a boolean content attribute,
\t\t\t// since its presence should be enough
\t\t\t// http://bugs.jquery.com/ticket/12359
\t\t\tdocElem.appendChild( div ).innerHTML = \"<a id='\" + expando + \"'></a>\" +
\t\t\t\t\"<select id='\" + expando + \"-\\r\\\\' msallowcapture=''>\" +
\t\t\t\t\"<option selected=''></option></select>\";

\t\t\t// Support: IE8, Opera 11-12.16
\t\t\t// Nothing should be selected when empty strings follow ^= or \$= or *=
\t\t\t// The test attribute must be unknown in Opera but \"safe\" for WinRT
\t\t\t// http://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
\t\t\tif ( div.querySelectorAll(\"[msallowcapture^='']\").length ) {
\t\t\t\trbuggyQSA.push( \"[*^\$]=\" + whitespace + \"*(?:''|\\\"\\\")\" );
\t\t\t}

\t\t\t// Support: IE8
\t\t\t// Boolean attributes and \"value\" are not treated correctly
\t\t\tif ( !div.querySelectorAll(\"[selected]\").length ) {
\t\t\t\trbuggyQSA.push( \"\\\\[\" + whitespace + \"*(?:value|\" + booleans + \")\" );
\t\t\t}

\t\t\t// Support: Chrome<29, Android<4.4, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.8+
\t\t\tif ( !div.querySelectorAll( \"[id~=\" + expando + \"-]\" ).length ) {
\t\t\t\trbuggyQSA.push(\"~=\");
\t\t\t}

\t\t\t// Webkit/Opera - :checked should return selected option elements
\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\t// IE8 throws error here and will not see later tests
\t\t\tif ( !div.querySelectorAll(\":checked\").length ) {
\t\t\t\trbuggyQSA.push(\":checked\");
\t\t\t}

\t\t\t// Support: Safari 8+, iOS 8+
\t\t\t// https://bugs.webkit.org/show_bug.cgi?id=136851
\t\t\t// In-page `selector#id sibing-combinator selector` fails
\t\t\tif ( !div.querySelectorAll( \"a#\" + expando + \"+*\" ).length ) {
\t\t\t\trbuggyQSA.push(\".#.+[+~]\");
\t\t\t}
\t\t});

\t\tassert(function( div ) {
\t\t\t// Support: Windows 8 Native Apps
\t\t\t// The type and name attributes are restricted during .innerHTML assignment
\t\t\tvar input = document.createElement(\"input\");
\t\t\tinput.setAttribute( \"type\", \"hidden\" );
\t\t\tdiv.appendChild( input ).setAttribute( \"name\", \"D\" );

\t\t\t// Support: IE8
\t\t\t// Enforce case-sensitivity of name attribute
\t\t\tif ( div.querySelectorAll(\"[name=d]\").length ) {
\t\t\t\trbuggyQSA.push( \"name\" + whitespace + \"*[*^\$|!~]?=\" );
\t\t\t}

\t\t\t// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
\t\t\t// IE8 throws error here and will not see later tests
\t\t\tif ( !div.querySelectorAll(\":enabled\").length ) {
\t\t\t\trbuggyQSA.push( \":enabled\", \":disabled\" );
\t\t\t}

\t\t\t// Opera 10-11 does not throw on post-comma invalid pseudos
\t\t\tdiv.querySelectorAll(\"*,:x\");
\t\t\trbuggyQSA.push(\",.*:\");
\t\t});
\t}

\tif ( (support.matchesSelector = rnative.test( (matches = docElem.matches ||
\t\tdocElem.webkitMatchesSelector ||
\t\tdocElem.mozMatchesSelector ||
\t\tdocElem.oMatchesSelector ||
\t\tdocElem.msMatchesSelector) )) ) {

\t\tassert(function( div ) {
\t\t\t// Check to see if it's possible to do matchesSelector
\t\t\t// on a disconnected node (IE 9)
\t\t\tsupport.disconnectedMatch = matches.call( div, \"div\" );

\t\t\t// This should fail with an exception
\t\t\t// Gecko does not error, returns false instead
\t\t\tmatches.call( div, \"[s!='']:x\" );
\t\t\trbuggyMatches.push( \"!=\", pseudos );
\t\t});
\t}

\trbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join(\"|\") );
\trbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join(\"|\") );

\t/* Contains
\t---------------------------------------------------------------------- */
\thasCompare = rnative.test( docElem.compareDocumentPosition );

\t// Element contains another
\t// Purposefully self-exclusive
\t// As in, an element does not contain itself
\tcontains = hasCompare || rnative.test( docElem.contains ) ?
\t\tfunction( a, b ) {
\t\t\tvar adown = a.nodeType === 9 ? a.documentElement : a,
\t\t\t\tbup = b && b.parentNode;
\t\t\treturn a === bup || !!( bup && bup.nodeType === 1 && (
\t\t\t\tadown.contains ?
\t\t\t\t\tadown.contains( bup ) :
\t\t\t\t\ta.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
\t\t\t));
\t\t} :
\t\tfunction( a, b ) {
\t\t\tif ( b ) {
\t\t\t\twhile ( (b = b.parentNode) ) {
\t\t\t\t\tif ( b === a ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t};

\t/* Sorting
\t---------------------------------------------------------------------- */

\t// Document order sorting
\tsortOrder = hasCompare ?
\tfunction( a, b ) {

\t\t// Flag for duplicate removal
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t\treturn 0;
\t\t}

\t\t// Sort on method existence if only one input has compareDocumentPosition
\t\tvar compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
\t\tif ( compare ) {
\t\t\treturn compare;
\t\t}

\t\t// Calculate position if both inputs belong to the same document
\t\tcompare = ( a.ownerDocument || a ) === ( b.ownerDocument || b ) ?
\t\t\ta.compareDocumentPosition( b ) :

\t\t\t// Otherwise we know they are disconnected
\t\t\t1;

\t\t// Disconnected nodes
\t\tif ( compare & 1 ||
\t\t\t(!support.sortDetached && b.compareDocumentPosition( a ) === compare) ) {

\t\t\t// Choose the first element that is related to our preferred document
\t\t\tif ( a === document || a.ownerDocument === preferredDoc && contains(preferredDoc, a) ) {
\t\t\t\treturn -1;
\t\t\t}
\t\t\tif ( b === document || b.ownerDocument === preferredDoc && contains(preferredDoc, b) ) {
\t\t\t\treturn 1;
\t\t\t}

\t\t\t// Maintain original order
\t\t\treturn sortInput ?
\t\t\t\t( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
\t\t\t\t0;
\t\t}

\t\treturn compare & 4 ? -1 : 1;
\t} :
\tfunction( a, b ) {
\t\t// Exit early if the nodes are identical
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t\treturn 0;
\t\t}

\t\tvar cur,
\t\t\ti = 0,
\t\t\taup = a.parentNode,
\t\t\tbup = b.parentNode,
\t\t\tap = [ a ],
\t\t\tbp = [ b ];

\t\t// Parentless nodes are either documents or disconnected
\t\tif ( !aup || !bup ) {
\t\t\treturn a === document ? -1 :
\t\t\t\tb === document ? 1 :
\t\t\t\taup ? -1 :
\t\t\t\tbup ? 1 :
\t\t\t\tsortInput ?
\t\t\t\t( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
\t\t\t\t0;

\t\t// If the nodes are siblings, we can do a quick check
\t\t} else if ( aup === bup ) {
\t\t\treturn siblingCheck( a, b );
\t\t}

\t\t// Otherwise we need full lists of their ancestors for comparison
\t\tcur = a;
\t\twhile ( (cur = cur.parentNode) ) {
\t\t\tap.unshift( cur );
\t\t}
\t\tcur = b;
\t\twhile ( (cur = cur.parentNode) ) {
\t\t\tbp.unshift( cur );
\t\t}

\t\t// Walk down the tree looking for a discrepancy
\t\twhile ( ap[i] === bp[i] ) {
\t\t\ti++;
\t\t}

\t\treturn i ?
\t\t\t// Do a sibling check if the nodes have a common ancestor
\t\t\tsiblingCheck( ap[i], bp[i] ) :

\t\t\t// Otherwise nodes in our document sort first
\t\t\tap[i] === preferredDoc ? -1 :
\t\t\tbp[i] === preferredDoc ? 1 :
\t\t\t0;
\t};

\treturn document;
};

Sizzle.matches = function( expr, elements ) {
\treturn Sizzle( expr, null, null, elements );
};

Sizzle.matchesSelector = function( elem, expr ) {
\t// Set document vars if needed
\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\tsetDocument( elem );
\t}

\t// Make sure that attribute selectors are quoted
\texpr = expr.replace( rattributeQuotes, \"='\$1']\" );

\tif ( support.matchesSelector && documentIsHTML &&
\t\t!compilerCache[ expr + \" \" ] &&
\t\t( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&
\t\t( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {

\t\ttry {
\t\t\tvar ret = matches.call( elem, expr );

\t\t\t// IE 9's matchesSelector returns false on disconnected nodes
\t\t\tif ( ret || support.disconnectedMatch ||
\t\t\t\t\t// As well, disconnected nodes are said to be in a document
\t\t\t\t\t// fragment in IE 9
\t\t\t\t\telem.document && elem.document.nodeType !== 11 ) {
\t\t\t\treturn ret;
\t\t\t}
\t\t} catch (e) {}
\t}

\treturn Sizzle( expr, document, null, [ elem ] ).length > 0;
};

Sizzle.contains = function( context, elem ) {
\t// Set document vars if needed
\tif ( ( context.ownerDocument || context ) !== document ) {
\t\tsetDocument( context );
\t}
\treturn contains( context, elem );
};

Sizzle.attr = function( elem, name ) {
\t// Set document vars if needed
\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\tsetDocument( elem );
\t}

\tvar fn = Expr.attrHandle[ name.toLowerCase() ],
\t\t// Don't get fooled by Object.prototype properties (jQuery #13807)
\t\tval = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?
\t\t\tfn( elem, name, !documentIsHTML ) :
\t\t\tundefined;

\treturn val !== undefined ?
\t\tval :
\t\tsupport.attributes || !documentIsHTML ?
\t\t\telem.getAttribute( name ) :
\t\t\t(val = elem.getAttributeNode(name)) && val.specified ?
\t\t\t\tval.value :
\t\t\t\tnull;
};

Sizzle.error = function( msg ) {
\tthrow new Error( \"Syntax error, unrecognized expression: \" + msg );
};

/**
 * Document sorting and removing duplicates
 * @param {ArrayLike} results
 */
Sizzle.uniqueSort = function( results ) {
\tvar elem,
\t\tduplicates = [],
\t\tj = 0,
\t\ti = 0;

\t// Unless we *know* we can detect duplicates, assume their presence
\thasDuplicate = !support.detectDuplicates;
\tsortInput = !support.sortStable && results.slice( 0 );
\tresults.sort( sortOrder );

\tif ( hasDuplicate ) {
\t\twhile ( (elem = results[i++]) ) {
\t\t\tif ( elem === results[ i ] ) {
\t\t\t\tj = duplicates.push( i );
\t\t\t}
\t\t}
\t\twhile ( j-- ) {
\t\t\tresults.splice( duplicates[ j ], 1 );
\t\t}
\t}

\t// Clear input after sorting to release objects
\t// See https://github.com/jquery/sizzle/pull/225
\tsortInput = null;

\treturn results;
};

/**
 * Utility function for retrieving the text value of an array of DOM nodes
 * @param {Array|Element} elem
 */
getText = Sizzle.getText = function( elem ) {
\tvar node,
\t\tret = \"\",
\t\ti = 0,
\t\tnodeType = elem.nodeType;

\tif ( !nodeType ) {
\t\t// If no nodeType, this is expected to be an array
\t\twhile ( (node = elem[i++]) ) {
\t\t\t// Do not traverse comment nodes
\t\t\tret += getText( node );
\t\t}
\t} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {
\t\t// Use textContent for elements
\t\t// innerText usage removed for consistency of new lines (jQuery #11153)
\t\tif ( typeof elem.textContent === \"string\" ) {
\t\t\treturn elem.textContent;
\t\t} else {
\t\t\t// Traverse its children
\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\tret += getText( elem );
\t\t\t}
\t\t}
\t} else if ( nodeType === 3 || nodeType === 4 ) {
\t\treturn elem.nodeValue;
\t}
\t// Do not include comment or processing instruction nodes

\treturn ret;
};

Expr = Sizzle.selectors = {

\t// Can be adjusted by the user
\tcacheLength: 50,

\tcreatePseudo: markFunction,

\tmatch: matchExpr,

\tattrHandle: {},

\tfind: {},

\trelative: {
\t\t\">\": { dir: \"parentNode\", first: true },
\t\t\" \": { dir: \"parentNode\" },
\t\t\"+\": { dir: \"previousSibling\", first: true },
\t\t\"~\": { dir: \"previousSibling\" }
\t},

\tpreFilter: {
\t\t\"ATTR\": function( match ) {
\t\t\tmatch[1] = match[1].replace( runescape, funescape );

\t\t\t// Move the given value to match[3] whether quoted or unquoted
\t\t\tmatch[3] = ( match[3] || match[4] || match[5] || \"\" ).replace( runescape, funescape );

\t\t\tif ( match[2] === \"~=\" ) {
\t\t\t\tmatch[3] = \" \" + match[3] + \" \";
\t\t\t}

\t\t\treturn match.slice( 0, 4 );
\t\t},

\t\t\"CHILD\": function( match ) {
\t\t\t/* matches from matchExpr[\"CHILD\"]
\t\t\t\t1 type (only|nth|...)
\t\t\t\t2 what (child|of-type)
\t\t\t\t3 argument (even|odd|\\d*|\\d*n([+-]\\d+)?|...)
\t\t\t\t4 xn-component of xn+y argument ([+-]?\\d*n|)
\t\t\t\t5 sign of xn-component
\t\t\t\t6 x of xn-component
\t\t\t\t7 sign of y-component
\t\t\t\t8 y of y-component
\t\t\t*/
\t\t\tmatch[1] = match[1].toLowerCase();

\t\t\tif ( match[1].slice( 0, 3 ) === \"nth\" ) {
\t\t\t\t// nth-* requires argument
\t\t\t\tif ( !match[3] ) {
\t\t\t\t\tSizzle.error( match[0] );
\t\t\t\t}

\t\t\t\t// numeric x and y parameters for Expr.filter.CHILD
\t\t\t\t// remember that false/true cast respectively to 0/1
\t\t\t\tmatch[4] = +( match[4] ? match[5] + (match[6] || 1) : 2 * ( match[3] === \"even\" || match[3] === \"odd\" ) );
\t\t\t\tmatch[5] = +( ( match[7] + match[8] ) || match[3] === \"odd\" );

\t\t\t// other types prohibit arguments
\t\t\t} else if ( match[3] ) {
\t\t\t\tSizzle.error( match[0] );
\t\t\t}

\t\t\treturn match;
\t\t},

\t\t\"PSEUDO\": function( match ) {
\t\t\tvar excess,
\t\t\t\tunquoted = !match[6] && match[2];

\t\t\tif ( matchExpr[\"CHILD\"].test( match[0] ) ) {
\t\t\t\treturn null;
\t\t\t}

\t\t\t// Accept quoted arguments as-is
\t\t\tif ( match[3] ) {
\t\t\t\tmatch[2] = match[4] || match[5] || \"\";

\t\t\t// Strip excess characters from unquoted arguments
\t\t\t} else if ( unquoted && rpseudo.test( unquoted ) &&
\t\t\t\t// Get excess from tokenize (recursively)
\t\t\t\t(excess = tokenize( unquoted, true )) &&
\t\t\t\t// advance to the next closing parenthesis
\t\t\t\t(excess = unquoted.indexOf( \")\", unquoted.length - excess ) - unquoted.length) ) {

\t\t\t\t// excess is a negative index
\t\t\t\tmatch[0] = match[0].slice( 0, excess );
\t\t\t\tmatch[2] = unquoted.slice( 0, excess );
\t\t\t}

\t\t\t// Return only captures needed by the pseudo filter method (type and argument)
\t\t\treturn match.slice( 0, 3 );
\t\t}
\t},

\tfilter: {

\t\t\"TAG\": function( nodeNameSelector ) {
\t\t\tvar nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();
\t\t\treturn nodeNameSelector === \"*\" ?
\t\t\t\tfunction() { return true; } :
\t\t\t\tfunction( elem ) {
\t\t\t\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
\t\t\t\t};
\t\t},

\t\t\"CLASS\": function( className ) {
\t\t\tvar pattern = classCache[ className + \" \" ];

\t\t\treturn pattern ||
\t\t\t\t(pattern = new RegExp( \"(^|\" + whitespace + \")\" + className + \"(\" + whitespace + \"|\$)\" )) &&
\t\t\t\tclassCache( className, function( elem ) {
\t\t\t\t\treturn pattern.test( typeof elem.className === \"string\" && elem.className || typeof elem.getAttribute !== \"undefined\" && elem.getAttribute(\"class\") || \"\" );
\t\t\t\t});
\t\t},

\t\t\"ATTR\": function( name, operator, check ) {
\t\t\treturn function( elem ) {
\t\t\t\tvar result = Sizzle.attr( elem, name );

\t\t\t\tif ( result == null ) {
\t\t\t\t\treturn operator === \"!=\";
\t\t\t\t}
\t\t\t\tif ( !operator ) {
\t\t\t\t\treturn true;
\t\t\t\t}

\t\t\t\tresult += \"\";

\t\t\t\treturn operator === \"=\" ? result === check :
\t\t\t\t\toperator === \"!=\" ? result !== check :
\t\t\t\t\toperator === \"^=\" ? check && result.indexOf( check ) === 0 :
\t\t\t\t\toperator === \"*=\" ? check && result.indexOf( check ) > -1 :
\t\t\t\t\toperator === \"\$=\" ? check && result.slice( -check.length ) === check :
\t\t\t\t\toperator === \"~=\" ? ( \" \" + result.replace( rwhitespace, \" \" ) + \" \" ).indexOf( check ) > -1 :
\t\t\t\t\toperator === \"|=\" ? result === check || result.slice( 0, check.length + 1 ) === check + \"-\" :
\t\t\t\t\tfalse;
\t\t\t};
\t\t},

\t\t\"CHILD\": function( type, what, argument, first, last ) {
\t\t\tvar simple = type.slice( 0, 3 ) !== \"nth\",
\t\t\t\tforward = type.slice( -4 ) !== \"last\",
\t\t\t\tofType = what === \"of-type\";

\t\t\treturn first === 1 && last === 0 ?

\t\t\t\t// Shortcut for :nth-*(n)
\t\t\t\tfunction( elem ) {
\t\t\t\t\treturn !!elem.parentNode;
\t\t\t\t} :

\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\tvar cache, uniqueCache, outerCache, node, nodeIndex, start,
\t\t\t\t\t\tdir = simple !== forward ? \"nextSibling\" : \"previousSibling\",
\t\t\t\t\t\tparent = elem.parentNode,
\t\t\t\t\t\tname = ofType && elem.nodeName.toLowerCase(),
\t\t\t\t\t\tuseCache = !xml && !ofType,
\t\t\t\t\t\tdiff = false;

\t\t\t\t\tif ( parent ) {

\t\t\t\t\t\t// :(first|last|only)-(child|of-type)
\t\t\t\t\t\tif ( simple ) {
\t\t\t\t\t\t\twhile ( dir ) {
\t\t\t\t\t\t\t\tnode = elem;
\t\t\t\t\t\t\t\twhile ( (node = node[ dir ]) ) {
\t\t\t\t\t\t\t\t\tif ( ofType ?
\t\t\t\t\t\t\t\t\t\tnode.nodeName.toLowerCase() === name :
\t\t\t\t\t\t\t\t\t\tnode.nodeType === 1 ) {

\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t// Reverse direction for :only-* (if we haven't yet done so)
\t\t\t\t\t\t\t\tstart = dir = type === \"only\" && !start && \"nextSibling\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}

\t\t\t\t\t\tstart = [ forward ? parent.firstChild : parent.lastChild ];

\t\t\t\t\t\t// non-xml :nth-child(...) stores cache data on `parent`
\t\t\t\t\t\tif ( forward && useCache ) {

\t\t\t\t\t\t\t// Seek `elem` from a previously-cached index

\t\t\t\t\t\t\t// ...in a gzip-friendly way
\t\t\t\t\t\t\tnode = parent;
\t\t\t\t\t\t\touterCache = node[ expando ] || (node[ expando ] = {});

\t\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\t\tuniqueCache = outerCache[ node.uniqueID ] ||
\t\t\t\t\t\t\t\t(outerCache[ node.uniqueID ] = {});

\t\t\t\t\t\t\tcache = uniqueCache[ type ] || [];
\t\t\t\t\t\t\tnodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
\t\t\t\t\t\t\tdiff = nodeIndex && cache[ 2 ];
\t\t\t\t\t\t\tnode = nodeIndex && parent.childNodes[ nodeIndex ];

\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||

\t\t\t\t\t\t\t\t// Fallback to seeking `elem` from the start
\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\t// When found, cache indexes on `parent` and break
\t\t\t\t\t\t\t\tif ( node.nodeType === 1 && ++diff && node === elem ) {
\t\t\t\t\t\t\t\t\tuniqueCache[ type ] = [ dirruns, nodeIndex, diff ];
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Use previously-cached element index if available
\t\t\t\t\t\t\tif ( useCache ) {
\t\t\t\t\t\t\t\t// ...in a gzip-friendly way
\t\t\t\t\t\t\t\tnode = elem;
\t\t\t\t\t\t\t\touterCache = node[ expando ] || (node[ expando ] = {});

\t\t\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\t\t\tuniqueCache = outerCache[ node.uniqueID ] ||
\t\t\t\t\t\t\t\t\t(outerCache[ node.uniqueID ] = {});

\t\t\t\t\t\t\t\tcache = uniqueCache[ type ] || [];
\t\t\t\t\t\t\t\tnodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
\t\t\t\t\t\t\t\tdiff = nodeIndex;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// xml :nth-child(...)
\t\t\t\t\t\t\t// or :nth-last-child(...) or :nth(-last)?-of-type(...)
\t\t\t\t\t\t\tif ( diff === false ) {
\t\t\t\t\t\t\t\t// Use the same loop as above to seek `elem` from the start
\t\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||
\t\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\t\tif ( ( ofType ?
\t\t\t\t\t\t\t\t\t\tnode.nodeName.toLowerCase() === name :
\t\t\t\t\t\t\t\t\t\tnode.nodeType === 1 ) &&
\t\t\t\t\t\t\t\t\t\t++diff ) {

\t\t\t\t\t\t\t\t\t\t// Cache the index of each encountered element
\t\t\t\t\t\t\t\t\t\tif ( useCache ) {
\t\t\t\t\t\t\t\t\t\t\touterCache = node[ expando ] || (node[ expando ] = {});

\t\t\t\t\t\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\t\t\t\t\t\tuniqueCache = outerCache[ node.uniqueID ] ||
\t\t\t\t\t\t\t\t\t\t\t\t(outerCache[ node.uniqueID ] = {});

\t\t\t\t\t\t\t\t\t\t\tuniqueCache[ type ] = [ dirruns, diff ];
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tif ( node === elem ) {
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Incorporate the offset, then check against cycle size
\t\t\t\t\t\tdiff -= last;
\t\t\t\t\t\treturn diff === first || ( diff % first === 0 && diff / first >= 0 );
\t\t\t\t\t}
\t\t\t\t};
\t\t},

\t\t\"PSEUDO\": function( pseudo, argument ) {
\t\t\t// pseudo-class names are case-insensitive
\t\t\t// http://www.w3.org/TR/selectors/#pseudo-classes
\t\t\t// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
\t\t\t// Remember that setFilters inherits from pseudos
\t\t\tvar args,
\t\t\t\tfn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
\t\t\t\t\tSizzle.error( \"unsupported pseudo: \" + pseudo );

\t\t\t// The user may use createPseudo to indicate that
\t\t\t// arguments are needed to create the filter function
\t\t\t// just as Sizzle does
\t\t\tif ( fn[ expando ] ) {
\t\t\t\treturn fn( argument );
\t\t\t}

\t\t\t// But maintain support for old signatures
\t\t\tif ( fn.length > 1 ) {
\t\t\t\targs = [ pseudo, pseudo, \"\", argument ];
\t\t\t\treturn Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
\t\t\t\t\tmarkFunction(function( seed, matches ) {
\t\t\t\t\t\tvar idx,
\t\t\t\t\t\t\tmatched = fn( seed, argument ),
\t\t\t\t\t\t\ti = matched.length;
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tidx = indexOf( seed, matched[i] );
\t\t\t\t\t\t\tseed[ idx ] = !( matches[ idx ] = matched[i] );
\t\t\t\t\t\t}
\t\t\t\t\t}) :
\t\t\t\t\tfunction( elem ) {
\t\t\t\t\t\treturn fn( elem, 0, args );
\t\t\t\t\t};
\t\t\t}

\t\t\treturn fn;
\t\t}
\t},

\tpseudos: {
\t\t// Potentially complex pseudos
\t\t\"not\": markFunction(function( selector ) {
\t\t\t// Trim the selector passed to compile
\t\t\t// to avoid treating leading and trailing
\t\t\t// spaces as combinators
\t\t\tvar input = [],
\t\t\t\tresults = [],
\t\t\t\tmatcher = compile( selector.replace( rtrim, \"\$1\" ) );

\t\t\treturn matcher[ expando ] ?
\t\t\t\tmarkFunction(function( seed, matches, context, xml ) {
\t\t\t\t\tvar elem,
\t\t\t\t\t\tunmatched = matcher( seed, null, xml, [] ),
\t\t\t\t\t\ti = seed.length;

\t\t\t\t\t// Match elements unmatched by `matcher`
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tif ( (elem = unmatched[i]) ) {
\t\t\t\t\t\t\tseed[i] = !(matches[i] = elem);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}) :
\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\tinput[0] = elem;
\t\t\t\t\tmatcher( input, null, xml, results );
\t\t\t\t\t// Don't keep the element (issue #299)
\t\t\t\t\tinput[0] = null;
\t\t\t\t\treturn !results.pop();
\t\t\t\t};
\t\t}),

\t\t\"has\": markFunction(function( selector ) {
\t\t\treturn function( elem ) {
\t\t\t\treturn Sizzle( selector, elem ).length > 0;
\t\t\t};
\t\t}),

\t\t\"contains\": markFunction(function( text ) {
\t\t\ttext = text.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\treturn ( elem.textContent || elem.innerText || getText( elem ) ).indexOf( text ) > -1;
\t\t\t};
\t\t}),

\t\t// \"Whether an element is represented by a :lang() selector
\t\t// is based solely on the element's language value
\t\t// being equal to the identifier C,
\t\t// or beginning with the identifier C immediately followed by \"-\".
\t\t// The matching of C against the element's language value is performed case-insensitively.
\t\t// The identifier C does not have to be a valid language name.\"
\t\t// http://www.w3.org/TR/selectors/#lang-pseudo
\t\t\"lang\": markFunction( function( lang ) {
\t\t\t// lang value must be a valid identifier
\t\t\tif ( !ridentifier.test(lang || \"\") ) {
\t\t\t\tSizzle.error( \"unsupported lang: \" + lang );
\t\t\t}
\t\t\tlang = lang.replace( runescape, funescape ).toLowerCase();
\t\t\treturn function( elem ) {
\t\t\t\tvar elemLang;
\t\t\t\tdo {
\t\t\t\t\tif ( (elemLang = documentIsHTML ?
\t\t\t\t\t\telem.lang :
\t\t\t\t\t\telem.getAttribute(\"xml:lang\") || elem.getAttribute(\"lang\")) ) {

\t\t\t\t\t\telemLang = elemLang.toLowerCase();
\t\t\t\t\t\treturn elemLang === lang || elemLang.indexOf( lang + \"-\" ) === 0;
\t\t\t\t\t}
\t\t\t\t} while ( (elem = elem.parentNode) && elem.nodeType === 1 );
\t\t\t\treturn false;
\t\t\t};
\t\t}),

\t\t// Miscellaneous
\t\t\"target\": function( elem ) {
\t\t\tvar hash = window.location && window.location.hash;
\t\t\treturn hash && hash.slice( 1 ) === elem.id;
\t\t},

\t\t\"root\": function( elem ) {
\t\t\treturn elem === docElem;
\t\t},

\t\t\"focus\": function( elem ) {
\t\t\treturn elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex);
\t\t},

\t\t// Boolean properties
\t\t\"enabled\": function( elem ) {
\t\t\treturn elem.disabled === false;
\t\t},

\t\t\"disabled\": function( elem ) {
\t\t\treturn elem.disabled === true;
\t\t},

\t\t\"checked\": function( elem ) {
\t\t\t// In CSS3, :checked should return both checked and selected elements
\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\tvar nodeName = elem.nodeName.toLowerCase();
\t\t\treturn (nodeName === \"input\" && !!elem.checked) || (nodeName === \"option\" && !!elem.selected);
\t\t},

\t\t\"selected\": function( elem ) {
\t\t\t// Accessing this property makes selected-by-default
\t\t\t// options in Safari work properly
\t\t\tif ( elem.parentNode ) {
\t\t\t\telem.parentNode.selectedIndex;
\t\t\t}

\t\t\treturn elem.selected === true;
\t\t},

\t\t// Contents
\t\t\"empty\": function( elem ) {
\t\t\t// http://www.w3.org/TR/selectors/#empty-pseudo
\t\t\t// :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),
\t\t\t//   but not by others (comment: 8; processing instruction: 7; etc.)
\t\t\t// nodeType < 6 works because attributes (2) do not appear as children
\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\tif ( elem.nodeType < 6 ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t},

\t\t\"parent\": function( elem ) {
\t\t\treturn !Expr.pseudos[\"empty\"]( elem );
\t\t},

\t\t// Element/input types
\t\t\"header\": function( elem ) {
\t\t\treturn rheader.test( elem.nodeName );
\t\t},

\t\t\"input\": function( elem ) {
\t\t\treturn rinputs.test( elem.nodeName );
\t\t},

\t\t\"button\": function( elem ) {
\t\t\tvar name = elem.nodeName.toLowerCase();
\t\t\treturn name === \"input\" && elem.type === \"button\" || name === \"button\";
\t\t},

\t\t\"text\": function( elem ) {
\t\t\tvar attr;
\t\t\treturn elem.nodeName.toLowerCase() === \"input\" &&
\t\t\t\telem.type === \"text\" &&

\t\t\t\t// Support: IE<8
\t\t\t\t// New HTML5 attribute values (e.g., \"search\") appear with elem.type === \"text\"
\t\t\t\t( (attr = elem.getAttribute(\"type\")) == null || attr.toLowerCase() === \"text\" );
\t\t},

\t\t// Position-in-collection
\t\t\"first\": createPositionalPseudo(function() {
\t\t\treturn [ 0 ];
\t\t}),

\t\t\"last\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\treturn [ length - 1 ];
\t\t}),

\t\t\"eq\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\treturn [ argument < 0 ? argument + length : argument ];
\t\t}),

\t\t\"even\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"odd\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\tvar i = 1;
\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"lt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\tvar i = argument < 0 ? argument + length : argument;
\t\t\tfor ( ; --i >= 0; ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"gt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\tvar i = argument < 0 ? argument + length : argument;
\t\t\tfor ( ; ++i < length; ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t})
\t}
};

Expr.pseudos[\"nth\"] = Expr.pseudos[\"eq\"];

// Add button/input type pseudos
for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
\tExpr.pseudos[ i ] = createInputPseudo( i );
}
for ( i in { submit: true, reset: true } ) {
\tExpr.pseudos[ i ] = createButtonPseudo( i );
}

// Easy API for creating new setFilters
function setFilters() {}
setFilters.prototype = Expr.filters = Expr.pseudos;
Expr.setFilters = new setFilters();

tokenize = Sizzle.tokenize = function( selector, parseOnly ) {
\tvar matched, match, tokens, type,
\t\tsoFar, groups, preFilters,
\t\tcached = tokenCache[ selector + \" \" ];

\tif ( cached ) {
\t\treturn parseOnly ? 0 : cached.slice( 0 );
\t}

\tsoFar = selector;
\tgroups = [];
\tpreFilters = Expr.preFilter;

\twhile ( soFar ) {

\t\t// Comma and first run
\t\tif ( !matched || (match = rcomma.exec( soFar )) ) {
\t\t\tif ( match ) {
\t\t\t\t// Don't consume trailing commas as valid
\t\t\t\tsoFar = soFar.slice( match[0].length ) || soFar;
\t\t\t}
\t\t\tgroups.push( (tokens = []) );
\t\t}

\t\tmatched = false;

\t\t// Combinators
\t\tif ( (match = rcombinators.exec( soFar )) ) {
\t\t\tmatched = match.shift();
\t\t\ttokens.push({
\t\t\t\tvalue: matched,
\t\t\t\t// Cast descendant combinators to space
\t\t\t\ttype: match[0].replace( rtrim, \" \" )
\t\t\t});
\t\t\tsoFar = soFar.slice( matched.length );
\t\t}

\t\t// Filters
\t\tfor ( type in Expr.filter ) {
\t\t\tif ( (match = matchExpr[ type ].exec( soFar )) && (!preFilters[ type ] ||
\t\t\t\t(match = preFilters[ type ]( match ))) ) {
\t\t\t\tmatched = match.shift();
\t\t\t\ttokens.push({
\t\t\t\t\tvalue: matched,
\t\t\t\t\ttype: type,
\t\t\t\t\tmatches: match
\t\t\t\t});
\t\t\t\tsoFar = soFar.slice( matched.length );
\t\t\t}
\t\t}

\t\tif ( !matched ) {
\t\t\tbreak;
\t\t}
\t}

\t// Return the length of the invalid excess
\t// if we're just parsing
\t// Otherwise, throw an error or return tokens
\treturn parseOnly ?
\t\tsoFar.length :
\t\tsoFar ?
\t\t\tSizzle.error( selector ) :
\t\t\t// Cache the tokens
\t\t\ttokenCache( selector, groups ).slice( 0 );
};

function toSelector( tokens ) {
\tvar i = 0,
\t\tlen = tokens.length,
\t\tselector = \"\";
\tfor ( ; i < len; i++ ) {
\t\tselector += tokens[i].value;
\t}
\treturn selector;
}

function addCombinator( matcher, combinator, base ) {
\tvar dir = combinator.dir,
\t\tcheckNonElements = base && dir === \"parentNode\",
\t\tdoneName = done++;

\treturn combinator.first ?
\t\t// Check against closest ancestor/preceding element
\t\tfunction( elem, context, xml ) {
\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\treturn matcher( elem, context, xml );
\t\t\t\t}
\t\t\t}
\t\t} :

\t\t// Check against all ancestor/preceding elements
\t\tfunction( elem, context, xml ) {
\t\t\tvar oldCache, uniqueCache, outerCache,
\t\t\t\tnewCache = [ dirruns, doneName ];

\t\t\t// We can't set arbitrary data on XML nodes, so they don't benefit from combinator caching
\t\t\tif ( xml ) {
\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\tif ( matcher( elem, context, xml ) ) {
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\touterCache = elem[ expando ] || (elem[ expando ] = {});

\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\tuniqueCache = outerCache[ elem.uniqueID ] || (outerCache[ elem.uniqueID ] = {});

\t\t\t\t\t\tif ( (oldCache = uniqueCache[ dir ]) &&
\t\t\t\t\t\t\toldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {

\t\t\t\t\t\t\t// Assign to newCache so results back-propagate to previous elements
\t\t\t\t\t\t\treturn (newCache[ 2 ] = oldCache[ 2 ]);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Reuse newcache so results back-propagate to previous elements
\t\t\t\t\t\t\tuniqueCache[ dir ] = newCache;

\t\t\t\t\t\t\t// A match means we're done; a fail means we have to keep checking
\t\t\t\t\t\t\tif ( (newCache[ 2 ] = matcher( elem, context, xml )) ) {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t};
}

function elementMatcher( matchers ) {
\treturn matchers.length > 1 ?
\t\tfunction( elem, context, xml ) {
\t\t\tvar i = matchers.length;
\t\t\twhile ( i-- ) {
\t\t\t\tif ( !matchers[i]( elem, context, xml ) ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t} :
\t\tmatchers[0];
}

function multipleContexts( selector, contexts, results ) {
\tvar i = 0,
\t\tlen = contexts.length;
\tfor ( ; i < len; i++ ) {
\t\tSizzle( selector, contexts[i], results );
\t}
\treturn results;
}

function condense( unmatched, map, filter, context, xml ) {
\tvar elem,
\t\tnewUnmatched = [],
\t\ti = 0,
\t\tlen = unmatched.length,
\t\tmapped = map != null;

\tfor ( ; i < len; i++ ) {
\t\tif ( (elem = unmatched[i]) ) {
\t\t\tif ( !filter || filter( elem, context, xml ) ) {
\t\t\t\tnewUnmatched.push( elem );
\t\t\t\tif ( mapped ) {
\t\t\t\t\tmap.push( i );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn newUnmatched;
}

function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
\tif ( postFilter && !postFilter[ expando ] ) {
\t\tpostFilter = setMatcher( postFilter );
\t}
\tif ( postFinder && !postFinder[ expando ] ) {
\t\tpostFinder = setMatcher( postFinder, postSelector );
\t}
\treturn markFunction(function( seed, results, context, xml ) {
\t\tvar temp, i, elem,
\t\t\tpreMap = [],
\t\t\tpostMap = [],
\t\t\tpreexisting = results.length,

\t\t\t// Get initial elements from seed or context
\t\t\telems = seed || multipleContexts( selector || \"*\", context.nodeType ? [ context ] : context, [] ),

\t\t\t// Prefilter to get matcher input, preserving a map for seed-results synchronization
\t\t\tmatcherIn = preFilter && ( seed || !selector ) ?
\t\t\t\tcondense( elems, preMap, preFilter, context, xml ) :
\t\t\t\telems,

\t\t\tmatcherOut = matcher ?
\t\t\t\t// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
\t\t\t\tpostFinder || ( seed ? preFilter : preexisting || postFilter ) ?

\t\t\t\t\t// ...intermediate processing is necessary
\t\t\t\t\t[] :

\t\t\t\t\t// ...otherwise use results directly
\t\t\t\t\tresults :
\t\t\t\tmatcherIn;

\t\t// Find primary matches
\t\tif ( matcher ) {
\t\t\tmatcher( matcherIn, matcherOut, context, xml );
\t\t}

\t\t// Apply postFilter
\t\tif ( postFilter ) {
\t\t\ttemp = condense( matcherOut, postMap );
\t\t\tpostFilter( temp, [], context, xml );

\t\t\t// Un-match failing elements by moving them back to matcherIn
\t\t\ti = temp.length;
\t\t\twhile ( i-- ) {
\t\t\t\tif ( (elem = temp[i]) ) {
\t\t\t\t\tmatcherOut[ postMap[i] ] = !(matcherIn[ postMap[i] ] = elem);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif ( seed ) {
\t\t\tif ( postFinder || preFilter ) {
\t\t\t\tif ( postFinder ) {
\t\t\t\t\t// Get the final matcherOut by condensing this intermediate into postFinder contexts
\t\t\t\t\ttemp = [];
\t\t\t\t\ti = matcherOut.length;
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tif ( (elem = matcherOut[i]) ) {
\t\t\t\t\t\t\t// Restore matcherIn since elem is not yet a final match
\t\t\t\t\t\t\ttemp.push( (matcherIn[i] = elem) );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tpostFinder( null, (matcherOut = []), temp, xml );
\t\t\t\t}

\t\t\t\t// Move matched elements from seed to results to keep them synchronized
\t\t\t\ti = matcherOut.length;
\t\t\t\twhile ( i-- ) {
\t\t\t\t\tif ( (elem = matcherOut[i]) &&
\t\t\t\t\t\t(temp = postFinder ? indexOf( seed, elem ) : preMap[i]) > -1 ) {

\t\t\t\t\t\tseed[temp] = !(results[temp] = elem);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t// Add elements to results, through postFinder if defined
\t\t} else {
\t\t\tmatcherOut = condense(
\t\t\t\tmatcherOut === results ?
\t\t\t\t\tmatcherOut.splice( preexisting, matcherOut.length ) :
\t\t\t\t\tmatcherOut
\t\t\t);
\t\t\tif ( postFinder ) {
\t\t\t\tpostFinder( null, results, matcherOut, xml );
\t\t\t} else {
\t\t\t\tpush.apply( results, matcherOut );
\t\t\t}
\t\t}
\t});
}

function matcherFromTokens( tokens ) {
\tvar checkContext, matcher, j,
\t\tlen = tokens.length,
\t\tleadingRelative = Expr.relative[ tokens[0].type ],
\t\timplicitRelative = leadingRelative || Expr.relative[\" \"],
\t\ti = leadingRelative ? 1 : 0,

\t\t// The foundational matcher ensures that elements are reachable from top-level context(s)
\t\tmatchContext = addCombinator( function( elem ) {
\t\t\treturn elem === checkContext;
\t\t}, implicitRelative, true ),
\t\tmatchAnyContext = addCombinator( function( elem ) {
\t\t\treturn indexOf( checkContext, elem ) > -1;
\t\t}, implicitRelative, true ),
\t\tmatchers = [ function( elem, context, xml ) {
\t\t\tvar ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
\t\t\t\t(checkContext = context).nodeType ?
\t\t\t\t\tmatchContext( elem, context, xml ) :
\t\t\t\t\tmatchAnyContext( elem, context, xml ) );
\t\t\t// Avoid hanging onto element (issue #299)
\t\t\tcheckContext = null;
\t\t\treturn ret;
\t\t} ];

\tfor ( ; i < len; i++ ) {
\t\tif ( (matcher = Expr.relative[ tokens[i].type ]) ) {
\t\t\tmatchers = [ addCombinator(elementMatcher( matchers ), matcher) ];
\t\t} else {
\t\t\tmatcher = Expr.filter[ tokens[i].type ].apply( null, tokens[i].matches );

\t\t\t// Return special upon seeing a positional matcher
\t\t\tif ( matcher[ expando ] ) {
\t\t\t\t// Find the next relative operator (if any) for proper handling
\t\t\t\tj = ++i;
\t\t\t\tfor ( ; j < len; j++ ) {
\t\t\t\t\tif ( Expr.relative[ tokens[j].type ] ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn setMatcher(
\t\t\t\t\ti > 1 && elementMatcher( matchers ),
\t\t\t\t\ti > 1 && toSelector(
\t\t\t\t\t\t// If the preceding token was a descendant combinator, insert an implicit any-element `*`
\t\t\t\t\t\ttokens.slice( 0, i - 1 ).concat({ value: tokens[ i - 2 ].type === \" \" ? \"*\" : \"\" })
\t\t\t\t\t).replace( rtrim, \"\$1\" ),
\t\t\t\t\tmatcher,
\t\t\t\t\ti < j && matcherFromTokens( tokens.slice( i, j ) ),
\t\t\t\t\tj < len && matcherFromTokens( (tokens = tokens.slice( j )) ),
\t\t\t\t\tj < len && toSelector( tokens )
\t\t\t\t);
\t\t\t}
\t\t\tmatchers.push( matcher );
\t\t}
\t}

\treturn elementMatcher( matchers );
}

function matcherFromGroupMatchers( elementMatchers, setMatchers ) {
\tvar bySet = setMatchers.length > 0,
\t\tbyElement = elementMatchers.length > 0,
\t\tsuperMatcher = function( seed, context, xml, results, outermost ) {
\t\t\tvar elem, j, matcher,
\t\t\t\tmatchedCount = 0,
\t\t\t\ti = \"0\",
\t\t\t\tunmatched = seed && [],
\t\t\t\tsetMatched = [],
\t\t\t\tcontextBackup = outermostContext,
\t\t\t\t// We must always have either seed elements or outermost context
\t\t\t\telems = seed || byElement && Expr.find[\"TAG\"]( \"*\", outermost ),
\t\t\t\t// Use integer dirruns iff this is the outermost matcher
\t\t\t\tdirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1),
\t\t\t\tlen = elems.length;

\t\t\tif ( outermost ) {
\t\t\t\toutermostContext = context === document || context || outermost;
\t\t\t}

\t\t\t// Add elements passing elementMatchers directly to results
\t\t\t// Support: IE<9, Safari
\t\t\t// Tolerate NodeList properties (IE: \"length\"; Safari: <number>) matching elements by id
\t\t\tfor ( ; i !== len && (elem = elems[i]) != null; i++ ) {
\t\t\t\tif ( byElement && elem ) {
\t\t\t\t\tj = 0;
\t\t\t\t\tif ( !context && elem.ownerDocument !== document ) {
\t\t\t\t\t\tsetDocument( elem );
\t\t\t\t\t\txml = !documentIsHTML;
\t\t\t\t\t}
\t\t\t\t\twhile ( (matcher = elementMatchers[j++]) ) {
\t\t\t\t\t\tif ( matcher( elem, context || document, xml) ) {
\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( outermost ) {
\t\t\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Track unmatched elements for set filters
\t\t\t\tif ( bySet ) {
\t\t\t\t\t// They will have gone through all possible matchers
\t\t\t\t\tif ( (elem = !matcher && elem) ) {
\t\t\t\t\t\tmatchedCount--;
\t\t\t\t\t}

\t\t\t\t\t// Lengthen the array for every element, matched or not
\t\t\t\t\tif ( seed ) {
\t\t\t\t\t\tunmatched.push( elem );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// `i` is now the count of elements visited above, and adding it to `matchedCount`
\t\t\t// makes the latter nonnegative.
\t\t\tmatchedCount += i;

\t\t\t// Apply set filters to unmatched elements
\t\t\t// NOTE: This can be skipped if there are no unmatched elements (i.e., `matchedCount`
\t\t\t// equals `i`), unless we didn't visit _any_ elements in the above loop because we have
\t\t\t// no element matchers and no seed.
\t\t\t// Incrementing an initially-string \"0\" `i` allows `i` to remain a string only in that
\t\t\t// case, which will result in a \"00\" `matchedCount` that differs from `i` but is also
\t\t\t// numerically zero.
\t\t\tif ( bySet && i !== matchedCount ) {
\t\t\t\tj = 0;
\t\t\t\twhile ( (matcher = setMatchers[j++]) ) {
\t\t\t\t\tmatcher( unmatched, setMatched, context, xml );
\t\t\t\t}

\t\t\t\tif ( seed ) {
\t\t\t\t\t// Reintegrate element matches to eliminate the need for sorting
\t\t\t\t\tif ( matchedCount > 0 ) {
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tif ( !(unmatched[i] || setMatched[i]) ) {
\t\t\t\t\t\t\t\tsetMatched[i] = pop.call( results );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Discard index placeholder values to get only actual matches
\t\t\t\t\tsetMatched = condense( setMatched );
\t\t\t\t}

\t\t\t\t// Add matches to results
\t\t\t\tpush.apply( results, setMatched );

\t\t\t\t// Seedless set matches succeeding multiple successful matchers stipulate sorting
\t\t\t\tif ( outermost && !seed && setMatched.length > 0 &&
\t\t\t\t\t( matchedCount + setMatchers.length ) > 1 ) {

\t\t\t\t\tSizzle.uniqueSort( results );
\t\t\t\t}
\t\t\t}

\t\t\t// Override manipulation of globals by nested matchers
\t\t\tif ( outermost ) {
\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\toutermostContext = contextBackup;
\t\t\t}

\t\t\treturn unmatched;
\t\t};

\treturn bySet ?
\t\tmarkFunction( superMatcher ) :
\t\tsuperMatcher;
}

compile = Sizzle.compile = function( selector, match /* Internal Use Only */ ) {
\tvar i,
\t\tsetMatchers = [],
\t\telementMatchers = [],
\t\tcached = compilerCache[ selector + \" \" ];

\tif ( !cached ) {
\t\t// Generate a function of recursive functions that can be used to check each element
\t\tif ( !match ) {
\t\t\tmatch = tokenize( selector );
\t\t}
\t\ti = match.length;
\t\twhile ( i-- ) {
\t\t\tcached = matcherFromTokens( match[i] );
\t\t\tif ( cached[ expando ] ) {
\t\t\t\tsetMatchers.push( cached );
\t\t\t} else {
\t\t\t\telementMatchers.push( cached );
\t\t\t}
\t\t}

\t\t// Cache the compiled function
\t\tcached = compilerCache( selector, matcherFromGroupMatchers( elementMatchers, setMatchers ) );

\t\t// Save selector and tokenization
\t\tcached.selector = selector;
\t}
\treturn cached;
};

/**
 * A low-level selection function that works with Sizzle's compiled
 *  selector functions
 * @param {String|Function} selector A selector or a pre-compiled
 *  selector function built with Sizzle.compile
 * @param {Element} context
 * @param {Array} [results]
 * @param {Array} [seed] A set of elements to match against
 */
select = Sizzle.select = function( selector, context, results, seed ) {
\tvar i, tokens, token, type, find,
\t\tcompiled = typeof selector === \"function\" && selector,
\t\tmatch = !seed && tokenize( (selector = compiled.selector || selector) );

\tresults = results || [];

\t// Try to minimize operations if there is only one selector in the list and no seed
\t// (the latter of which guarantees us context)
\tif ( match.length === 1 ) {

\t\t// Reduce context if the leading compound selector is an ID
\t\ttokens = match[0] = match[0].slice( 0 );
\t\tif ( tokens.length > 2 && (token = tokens[0]).type === \"ID\" &&
\t\t\t\tsupport.getById && context.nodeType === 9 && documentIsHTML &&
\t\t\t\tExpr.relative[ tokens[1].type ] ) {

\t\t\tcontext = ( Expr.find[\"ID\"]( token.matches[0].replace(runescape, funescape), context ) || [] )[0];
\t\t\tif ( !context ) {
\t\t\t\treturn results;

\t\t\t// Precompiled matchers will still verify ancestry, so step up a level
\t\t\t} else if ( compiled ) {
\t\t\t\tcontext = context.parentNode;
\t\t\t}

\t\t\tselector = selector.slice( tokens.shift().value.length );
\t\t}

\t\t// Fetch a seed set for right-to-left matching
\t\ti = matchExpr[\"needsContext\"].test( selector ) ? 0 : tokens.length;
\t\twhile ( i-- ) {
\t\t\ttoken = tokens[i];

\t\t\t// Abort if we hit a combinator
\t\t\tif ( Expr.relative[ (type = token.type) ] ) {
\t\t\t\tbreak;
\t\t\t}
\t\t\tif ( (find = Expr.find[ type ]) ) {
\t\t\t\t// Search, expanding context for leading sibling combinators
\t\t\t\tif ( (seed = find(
\t\t\t\t\ttoken.matches[0].replace( runescape, funescape ),
\t\t\t\t\trsibling.test( tokens[0].type ) && testContext( context.parentNode ) || context
\t\t\t\t)) ) {

\t\t\t\t\t// If seed is empty or no tokens remain, we can return early
\t\t\t\t\ttokens.splice( i, 1 );
\t\t\t\t\tselector = seed.length && toSelector( tokens );
\t\t\t\t\tif ( !selector ) {
\t\t\t\t\t\tpush.apply( results, seed );
\t\t\t\t\t\treturn results;
\t\t\t\t\t}

\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Compile and execute a filtering function if one is not provided
\t// Provide `match` to avoid retokenization if we modified the selector above
\t( compiled || compile( selector, match ) )(
\t\tseed,
\t\tcontext,
\t\t!documentIsHTML,
\t\tresults,
\t\t!context || rsibling.test( selector ) && testContext( context.parentNode ) || context
\t);
\treturn results;
};

// One-time assignments

// Sort stability
support.sortStable = expando.split(\"\").sort( sortOrder ).join(\"\") === expando;

// Support: Chrome 14-35+
// Always assume duplicates if they aren't passed to the comparison function
support.detectDuplicates = !!hasDuplicate;

// Initialize against the default document
setDocument();

// Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)
// Detached nodes confoundingly follow *each other*
support.sortDetached = assert(function( div1 ) {
\t// Should return 1, but returns 4 (following)
\treturn div1.compareDocumentPosition( document.createElement(\"div\") ) & 1;
});

// Support: IE<8
// Prevent attribute/property \"interpolation\"
// http://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !assert(function( div ) {
\tdiv.innerHTML = \"<a href='#'></a>\";
\treturn div.firstChild.getAttribute(\"href\") === \"#\" ;
}) ) {
\taddHandle( \"type|href|height|width\", function( elem, name, isXML ) {
\t\tif ( !isXML ) {
\t\t\treturn elem.getAttribute( name, name.toLowerCase() === \"type\" ? 1 : 2 );
\t\t}
\t});
}

// Support: IE<9
// Use defaultValue in place of getAttribute(\"value\")
if ( !support.attributes || !assert(function( div ) {
\tdiv.innerHTML = \"<input/>\";
\tdiv.firstChild.setAttribute( \"value\", \"\" );
\treturn div.firstChild.getAttribute( \"value\" ) === \"\";
}) ) {
\taddHandle( \"value\", function( elem, name, isXML ) {
\t\tif ( !isXML && elem.nodeName.toLowerCase() === \"input\" ) {
\t\t\treturn elem.defaultValue;
\t\t}
\t});
}

// Support: IE<9
// Use getAttributeNode to fetch booleans when getAttribute lies
if ( !assert(function( div ) {
\treturn div.getAttribute(\"disabled\") == null;
}) ) {
\taddHandle( booleans, function( elem, name, isXML ) {
\t\tvar val;
\t\tif ( !isXML ) {
\t\t\treturn elem[ name ] === true ? name.toLowerCase() :
\t\t\t\t\t(val = elem.getAttributeNode( name )) && val.specified ?
\t\t\t\t\tval.value :
\t\t\t\tnull;
\t\t}
\t});
}

return Sizzle;

})( window );



jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;
jQuery.expr[ \":\" ] = jQuery.expr.pseudos;
jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;



var dir = function( elem, dir, until ) {
\tvar matched = [],
\t\ttruncate = until !== undefined;

\twhile ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {
\t\tif ( elem.nodeType === 1 ) {
\t\t\tif ( truncate && jQuery( elem ).is( until ) ) {
\t\t\t\tbreak;
\t\t\t}
\t\t\tmatched.push( elem );
\t\t}
\t}
\treturn matched;
};


var siblings = function( n, elem ) {
\tvar matched = [];

\tfor ( ; n; n = n.nextSibling ) {
\t\tif ( n.nodeType === 1 && n !== elem ) {
\t\t\tmatched.push( n );
\t\t}
\t}

\treturn matched;
};


var rneedsContext = jQuery.expr.match.needsContext;

var rsingleTag = ( /^<([\\w-]+)\\s*\\/?>(?:<\\/\\1>|)\$/ );



var risSimple = /^.[^:#\\[\\.,]*\$/;

// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
\tif ( jQuery.isFunction( qualifier ) ) {
\t\treturn jQuery.grep( elements, function( elem, i ) {
\t\t\t/* jshint -W018 */
\t\t\treturn !!qualifier.call( elem, i, elem ) !== not;
\t\t} );

\t}

\tif ( qualifier.nodeType ) {
\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\treturn ( elem === qualifier ) !== not;
\t\t} );

\t}

\tif ( typeof qualifier === \"string\" ) {
\t\tif ( risSimple.test( qualifier ) ) {
\t\t\treturn jQuery.filter( qualifier, elements, not );
\t\t}

\t\tqualifier = jQuery.filter( qualifier, elements );
\t}

\treturn jQuery.grep( elements, function( elem ) {
\t\treturn ( jQuery.inArray( elem, qualifier ) > -1 ) !== not;
\t} );
}

jQuery.filter = function( expr, elems, not ) {
\tvar elem = elems[ 0 ];

\tif ( not ) {
\t\texpr = \":not(\" + expr + \")\";
\t}

\treturn elems.length === 1 && elem.nodeType === 1 ?
\t\tjQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [] :
\t\tjQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
\t\t\treturn elem.nodeType === 1;
\t\t} ) );
};

jQuery.fn.extend( {
\tfind: function( selector ) {
\t\tvar i,
\t\t\tret = [],
\t\t\tself = this,
\t\t\tlen = self.length;

\t\tif ( typeof selector !== \"string\" ) {
\t\t\treturn this.pushStack( jQuery( selector ).filter( function() {
\t\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\t\tif ( jQuery.contains( self[ i ], this ) ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} ) );
\t\t}

\t\tfor ( i = 0; i < len; i++ ) {
\t\t\tjQuery.find( selector, self[ i ], ret );
\t\t}

\t\t// Needed because \$( selector, context ) becomes \$( context ).find( selector )
\t\tret = this.pushStack( len > 1 ? jQuery.unique( ret ) : ret );
\t\tret.selector = this.selector ? this.selector + \" \" + selector : selector;
\t\treturn ret;
\t},
\tfilter: function( selector ) {
\t\treturn this.pushStack( winnow( this, selector || [], false ) );
\t},
\tnot: function( selector ) {
\t\treturn this.pushStack( winnow( this, selector || [], true ) );
\t},
\tis: function( selector ) {
\t\treturn !!winnow(
\t\t\tthis,

\t\t\t// If this is a positional/relative selector, check membership in the returned set
\t\t\t// so \$(\"p:first\").is(\"p:last\") won't return true for a doc with two \"p\".
\t\t\ttypeof selector === \"string\" && rneedsContext.test( selector ) ?
\t\t\t\tjQuery( selector ) :
\t\t\t\tselector || [],
\t\t\tfalse
\t\t).length;
\t}
} );


// Initialize a jQuery object


// A central reference to the root jQuery(document)
var rootjQuery,

\t// A simple way to check for HTML strings
\t// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
\t// Strict HTML recognition (#11290: must start with <)
\trquickExpr = /^(?:\\s*(<[\\w\\W]+>)[^>]*|#([\\w-]*))\$/,

\tinit = jQuery.fn.init = function( selector, context, root ) {
\t\tvar match, elem;

\t\t// HANDLE: \$(\"\"), \$(null), \$(undefined), \$(false)
\t\tif ( !selector ) {
\t\t\treturn this;
\t\t}

\t\t// init accepts an alternate rootjQuery
\t\t// so migrate can support jQuery.sub (gh-2101)
\t\troot = root || rootjQuery;

\t\t// Handle HTML strings
\t\tif ( typeof selector === \"string\" ) {
\t\t\tif ( selector.charAt( 0 ) === \"<\" &&
\t\t\t\tselector.charAt( selector.length - 1 ) === \">\" &&
\t\t\t\tselector.length >= 3 ) {

\t\t\t\t// Assume that strings that start and end with <> are HTML and skip the regex check
\t\t\t\tmatch = [ null, selector, null ];

\t\t\t} else {
\t\t\t\tmatch = rquickExpr.exec( selector );
\t\t\t}

\t\t\t// Match html or make sure no context is specified for #id
\t\t\tif ( match && ( match[ 1 ] || !context ) ) {

\t\t\t\t// HANDLE: \$(html) -> \$(array)
\t\t\t\tif ( match[ 1 ] ) {
\t\t\t\t\tcontext = context instanceof jQuery ? context[ 0 ] : context;

\t\t\t\t\t// scripts is true for back-compat
\t\t\t\t\t// Intentionally let the error be thrown if parseHTML is not present
\t\t\t\t\tjQuery.merge( this, jQuery.parseHTML(
\t\t\t\t\t\tmatch[ 1 ],
\t\t\t\t\t\tcontext && context.nodeType ? context.ownerDocument || context : document,
\t\t\t\t\t\ttrue
\t\t\t\t\t) );

\t\t\t\t\t// HANDLE: \$(html, props)
\t\t\t\t\tif ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {
\t\t\t\t\t\tfor ( match in context ) {

\t\t\t\t\t\t\t// Properties of context are called as methods if possible
\t\t\t\t\t\t\tif ( jQuery.isFunction( this[ match ] ) ) {
\t\t\t\t\t\t\t\tthis[ match ]( context[ match ] );

\t\t\t\t\t\t\t// ...and otherwise set as attributes
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tthis.attr( match, context[ match ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\treturn this;

\t\t\t\t// HANDLE: \$(#id)
\t\t\t\t} else {
\t\t\t\t\telem = document.getElementById( match[ 2 ] );

\t\t\t\t\t// Check parentNode to catch when Blackberry 4.6 returns
\t\t\t\t\t// nodes that are no longer in the document #6963
\t\t\t\t\tif ( elem && elem.parentNode ) {

\t\t\t\t\t\t// Handle the case where IE and Opera return items
\t\t\t\t\t\t// by name instead of ID
\t\t\t\t\t\tif ( elem.id !== match[ 2 ] ) {
\t\t\t\t\t\t\treturn rootjQuery.find( selector );
\t\t\t\t\t\t}

\t\t\t\t\t\t// Otherwise, we inject the element directly into the jQuery object
\t\t\t\t\t\tthis.length = 1;
\t\t\t\t\t\tthis[ 0 ] = elem;
\t\t\t\t\t}

\t\t\t\t\tthis.context = document;
\t\t\t\t\tthis.selector = selector;
\t\t\t\t\treturn this;
\t\t\t\t}

\t\t\t// HANDLE: \$(expr, \$(...))
\t\t\t} else if ( !context || context.jquery ) {
\t\t\t\treturn ( context || root ).find( selector );

\t\t\t// HANDLE: \$(expr, context)
\t\t\t// (which is just equivalent to: \$(context).find(expr)
\t\t\t} else {
\t\t\t\treturn this.constructor( context ).find( selector );
\t\t\t}

\t\t// HANDLE: \$(DOMElement)
\t\t} else if ( selector.nodeType ) {
\t\t\tthis.context = this[ 0 ] = selector;
\t\t\tthis.length = 1;
\t\t\treturn this;

\t\t// HANDLE: \$(function)
\t\t// Shortcut for document ready
\t\t} else if ( jQuery.isFunction( selector ) ) {
\t\t\treturn typeof root.ready !== \"undefined\" ?
\t\t\t\troot.ready( selector ) :

\t\t\t\t// Execute immediately if ready is not present
\t\t\t\tselector( jQuery );
\t\t}

\t\tif ( selector.selector !== undefined ) {
\t\t\tthis.selector = selector.selector;
\t\t\tthis.context = selector.context;
\t\t}

\t\treturn jQuery.makeArray( selector, this );
\t};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );


var rparentsprev = /^(?:parents|prev(?:Until|All))/,

\t// methods guaranteed to produce a unique set when starting from a unique set
\tguaranteedUnique = {
\t\tchildren: true,
\t\tcontents: true,
\t\tnext: true,
\t\tprev: true
\t};

jQuery.fn.extend( {
\thas: function( target ) {
\t\tvar i,
\t\t\ttargets = jQuery( target, this ),
\t\t\tlen = targets.length;

\t\treturn this.filter( function() {
\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\tif ( jQuery.contains( this, targets[ i ] ) ) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t} );
\t},

\tclosest: function( selectors, context ) {
\t\tvar cur,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tmatched = [],
\t\t\tpos = rneedsContext.test( selectors ) || typeof selectors !== \"string\" ?
\t\t\t\tjQuery( selectors, context || this.context ) :
\t\t\t\t0;

\t\tfor ( ; i < l; i++ ) {
\t\t\tfor ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {

\t\t\t\t// Always skip document fragments
\t\t\t\tif ( cur.nodeType < 11 && ( pos ?
\t\t\t\t\tpos.index( cur ) > -1 :

\t\t\t\t\t// Don't pass non-elements to Sizzle
\t\t\t\t\tcur.nodeType === 1 &&
\t\t\t\t\t\tjQuery.find.matchesSelector( cur, selectors ) ) ) {

\t\t\t\t\tmatched.push( cur );
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );
\t},

\t// Determine the position of an element within
\t// the matched set of elements
\tindex: function( elem ) {

\t\t// No argument, return index in parent
\t\tif ( !elem ) {
\t\t\treturn ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
\t\t}

\t\t// index in selector
\t\tif ( typeof elem === \"string\" ) {
\t\t\treturn jQuery.inArray( this[ 0 ], jQuery( elem ) );
\t\t}

\t\t// Locate the position of the desired element
\t\treturn jQuery.inArray(

\t\t\t// If it receives a jQuery object, the first element is used
\t\t\telem.jquery ? elem[ 0 ] : elem, this );
\t},

\tadd: function( selector, context ) {
\t\treturn this.pushStack(
\t\t\tjQuery.uniqueSort(
\t\t\t\tjQuery.merge( this.get(), jQuery( selector, context ) )
\t\t\t)
\t\t);
\t},

\taddBack: function( selector ) {
\t\treturn this.add( selector == null ?
\t\t\tthis.prevObject : this.prevObject.filter( selector )
\t\t);
\t}
} );

function sibling( cur, dir ) {
\tdo {
\t\tcur = cur[ dir ];
\t} while ( cur && cur.nodeType !== 1 );

\treturn cur;
}

jQuery.each( {
\tparent: function( elem ) {
\t\tvar parent = elem.parentNode;
\t\treturn parent && parent.nodeType !== 11 ? parent : null;
\t},
\tparents: function( elem ) {
\t\treturn dir( elem, \"parentNode\" );
\t},
\tparentsUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"parentNode\", until );
\t},
\tnext: function( elem ) {
\t\treturn sibling( elem, \"nextSibling\" );
\t},
\tprev: function( elem ) {
\t\treturn sibling( elem, \"previousSibling\" );
\t},
\tnextAll: function( elem ) {
\t\treturn dir( elem, \"nextSibling\" );
\t},
\tprevAll: function( elem ) {
\t\treturn dir( elem, \"previousSibling\" );
\t},
\tnextUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"nextSibling\", until );
\t},
\tprevUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"previousSibling\", until );
\t},
\tsiblings: function( elem ) {
\t\treturn siblings( ( elem.parentNode || {} ).firstChild, elem );
\t},
\tchildren: function( elem ) {
\t\treturn siblings( elem.firstChild );
\t},
\tcontents: function( elem ) {
\t\treturn jQuery.nodeName( elem, \"iframe\" ) ?
\t\t\telem.contentDocument || elem.contentWindow.document :
\t\t\tjQuery.merge( [], elem.childNodes );
\t}
}, function( name, fn ) {
\tjQuery.fn[ name ] = function( until, selector ) {
\t\tvar ret = jQuery.map( this, fn, until );

\t\tif ( name.slice( -5 ) !== \"Until\" ) {
\t\t\tselector = until;
\t\t}

\t\tif ( selector && typeof selector === \"string\" ) {
\t\t\tret = jQuery.filter( selector, ret );
\t\t}

\t\tif ( this.length > 1 ) {

\t\t\t// Remove duplicates
\t\t\tif ( !guaranteedUnique[ name ] ) {
\t\t\t\tret = jQuery.uniqueSort( ret );
\t\t\t}

\t\t\t// Reverse order for parents* and prev-derivatives
\t\t\tif ( rparentsprev.test( name ) ) {
\t\t\t\tret = ret.reverse();
\t\t\t}
\t\t}

\t\treturn this.pushStack( ret );
\t};
} );
var rnotwhite = ( /\\S+/g );



// Convert String-formatted options into Object-formatted ones
function createOptions( options ) {
\tvar object = {};
\tjQuery.each( options.match( rnotwhite ) || [], function( _, flag ) {
\t\tobject[ flag ] = true;
\t} );
\treturn object;
}

/*
 * Create a callback list using the following parameters:
 *
 *\toptions: an optional list of space-separated options that will change how
 *\t\t\tthe callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * \"fired\" multiple times.
 *
 * Possible options:
 *
 *\tonce:\t\t\twill ensure the callback list can only be fired once (like a Deferred)
 *
 *\tmemory:\t\t\twill keep track of previous values and will call any callback added
 *\t\t\t\t\tafter the list has been fired right away with the latest \"memorized\"
 *\t\t\t\t\tvalues (like a Deferred)
 *
 *\tunique:\t\t\twill ensure a callback can only be added once (no duplicate in the list)
 *
 *\tstopOnFalse:\tinterrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

\t// Convert options from String-formatted to Object-formatted if needed
\t// (we check in cache first)
\toptions = typeof options === \"string\" ?
\t\tcreateOptions( options ) :
\t\tjQuery.extend( {}, options );

\tvar // Flag to know if list is currently firing
\t\tfiring,

\t\t// Last fire value for non-forgettable lists
\t\tmemory,

\t\t// Flag to know if list was already fired
\t\tfired,

\t\t// Flag to prevent firing
\t\tlocked,

\t\t// Actual callback list
\t\tlist = [],

\t\t// Queue of execution data for repeatable lists
\t\tqueue = [],

\t\t// Index of currently firing callback (modified by add/remove as needed)
\t\tfiringIndex = -1,

\t\t// Fire callbacks
\t\tfire = function() {

\t\t\t// Enforce single-firing
\t\t\tlocked = options.once;

\t\t\t// Execute callbacks for all pending executions,
\t\t\t// respecting firingIndex overrides and runtime changes
\t\t\tfired = firing = true;
\t\t\tfor ( ; queue.length; firingIndex = -1 ) {
\t\t\t\tmemory = queue.shift();
\t\t\t\twhile ( ++firingIndex < list.length ) {

\t\t\t\t\t// Run callback and check for early termination
\t\t\t\t\tif ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&
\t\t\t\t\t\toptions.stopOnFalse ) {

\t\t\t\t\t\t// Jump to end and forget the data so .add doesn't re-fire
\t\t\t\t\t\tfiringIndex = list.length;
\t\t\t\t\t\tmemory = false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Forget the data if we're done with it
\t\t\tif ( !options.memory ) {
\t\t\t\tmemory = false;
\t\t\t}

\t\t\tfiring = false;

\t\t\t// Clean up if we're done firing for good
\t\t\tif ( locked ) {

\t\t\t\t// Keep an empty list if we have data for future add calls
\t\t\t\tif ( memory ) {
\t\t\t\t\tlist = [];

\t\t\t\t// Otherwise, this object is spent
\t\t\t\t} else {
\t\t\t\t\tlist = \"\";
\t\t\t\t}
\t\t\t}
\t\t},

\t\t// Actual Callbacks object
\t\tself = {

\t\t\t// Add a callback or a collection of callbacks to the list
\t\t\tadd: function() {
\t\t\t\tif ( list ) {

\t\t\t\t\t// If we have memory from a past run, we should fire after adding
\t\t\t\t\tif ( memory && !firing ) {
\t\t\t\t\t\tfiringIndex = list.length - 1;
\t\t\t\t\t\tqueue.push( memory );
\t\t\t\t\t}

\t\t\t\t\t( function add( args ) {
\t\t\t\t\t\tjQuery.each( args, function( _, arg ) {
\t\t\t\t\t\t\tif ( jQuery.isFunction( arg ) ) {
\t\t\t\t\t\t\t\tif ( !options.unique || !self.has( arg ) ) {
\t\t\t\t\t\t\t\t\tlist.push( arg );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else if ( arg && arg.length && jQuery.type( arg ) !== \"string\" ) {

\t\t\t\t\t\t\t\t// Inspect recursively
\t\t\t\t\t\t\t\tadd( arg );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} );
\t\t\t\t\t} )( arguments );

\t\t\t\t\tif ( memory && !firing ) {
\t\t\t\t\t\tfire();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Remove a callback from the list
\t\t\tremove: function() {
\t\t\t\tjQuery.each( arguments, function( _, arg ) {
\t\t\t\t\tvar index;
\t\t\t\t\twhile ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
\t\t\t\t\t\tlist.splice( index, 1 );

\t\t\t\t\t\t// Handle firing indexes
\t\t\t\t\t\tif ( index <= firingIndex ) {
\t\t\t\t\t\t\tfiringIndex--;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Check if a given callback is in the list.
\t\t\t// If no argument is given, return whether or not list has callbacks attached.
\t\t\thas: function( fn ) {
\t\t\t\treturn fn ?
\t\t\t\t\tjQuery.inArray( fn, list ) > -1 :
\t\t\t\t\tlist.length > 0;
\t\t\t},

\t\t\t// Remove all callbacks from the list
\t\t\tempty: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\tlist = [];
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Disable .fire and .add
\t\t\t// Abort any current/pending executions
\t\t\t// Clear all callbacks and values
\t\t\tdisable: function() {
\t\t\t\tlocked = queue = [];
\t\t\t\tlist = memory = \"\";
\t\t\t\treturn this;
\t\t\t},
\t\t\tdisabled: function() {
\t\t\t\treturn !list;
\t\t\t},

\t\t\t// Disable .fire
\t\t\t// Also disable .add unless we have memory (since it would have no effect)
\t\t\t// Abort any pending executions
\t\t\tlock: function() {
\t\t\t\tlocked = true;
\t\t\t\tif ( !memory ) {
\t\t\t\t\tself.disable();
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\tlocked: function() {
\t\t\t\treturn !!locked;
\t\t\t},

\t\t\t// Call all callbacks with the given context and arguments
\t\t\tfireWith: function( context, args ) {
\t\t\t\tif ( !locked ) {
\t\t\t\t\targs = args || [];
\t\t\t\t\targs = [ context, args.slice ? args.slice() : args ];
\t\t\t\t\tqueue.push( args );
\t\t\t\t\tif ( !firing ) {
\t\t\t\t\t\tfire();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Call all the callbacks with the given arguments
\t\t\tfire: function() {
\t\t\t\tself.fireWith( this, arguments );
\t\t\t\treturn this;
\t\t\t},

\t\t\t// To know if the callbacks have already been called at least once
\t\t\tfired: function() {
\t\t\t\treturn !!fired;
\t\t\t}
\t\t};

\treturn self;
};


jQuery.extend( {

\tDeferred: function( func ) {
\t\tvar tuples = [

\t\t\t\t// action, add listener, listener list, final state
\t\t\t\t[ \"resolve\", \"done\", jQuery.Callbacks( \"once memory\" ), \"resolved\" ],
\t\t\t\t[ \"reject\", \"fail\", jQuery.Callbacks( \"once memory\" ), \"rejected\" ],
\t\t\t\t[ \"notify\", \"progress\", jQuery.Callbacks( \"memory\" ) ]
\t\t\t],
\t\t\tstate = \"pending\",
\t\t\tpromise = {
\t\t\t\tstate: function() {
\t\t\t\t\treturn state;
\t\t\t\t},
\t\t\t\talways: function() {
\t\t\t\t\tdeferred.done( arguments ).fail( arguments );
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tthen: function( /* fnDone, fnFail, fnProgress */ ) {
\t\t\t\t\tvar fns = arguments;
\t\t\t\t\treturn jQuery.Deferred( function( newDefer ) {
\t\t\t\t\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\t\t\t\t\tvar fn = jQuery.isFunction( fns[ i ] ) && fns[ i ];

\t\t\t\t\t\t\t// deferred[ done | fail | progress ] for forwarding actions to newDefer
\t\t\t\t\t\t\tdeferred[ tuple[ 1 ] ]( function() {
\t\t\t\t\t\t\t\tvar returned = fn && fn.apply( this, arguments );
\t\t\t\t\t\t\t\tif ( returned && jQuery.isFunction( returned.promise ) ) {
\t\t\t\t\t\t\t\t\treturned.promise()
\t\t\t\t\t\t\t\t\t\t.progress( newDefer.notify )
\t\t\t\t\t\t\t\t\t\t.done( newDefer.resolve )
\t\t\t\t\t\t\t\t\t\t.fail( newDefer.reject );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tnewDefer[ tuple[ 0 ] + \"With\" ](
\t\t\t\t\t\t\t\t\t\tthis === promise ? newDefer.promise() : this,
\t\t\t\t\t\t\t\t\t\tfn ? [ returned ] : arguments
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t} );
\t\t\t\t\t\tfns = null;
\t\t\t\t\t} ).promise();
\t\t\t\t},

\t\t\t\t// Get a promise for this deferred
\t\t\t\t// If obj is provided, the promise aspect is added to the object
\t\t\t\tpromise: function( obj ) {
\t\t\t\t\treturn obj != null ? jQuery.extend( obj, promise ) : promise;
\t\t\t\t}
\t\t\t},
\t\t\tdeferred = {};

\t\t// Keep pipe for back-compat
\t\tpromise.pipe = promise.then;

\t\t// Add list-specific methods
\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\tvar list = tuple[ 2 ],
\t\t\t\tstateString = tuple[ 3 ];

\t\t\t// promise[ done | fail | progress ] = list.add
\t\t\tpromise[ tuple[ 1 ] ] = list.add;

\t\t\t// Handle state
\t\t\tif ( stateString ) {
\t\t\t\tlist.add( function() {

\t\t\t\t\t// state = [ resolved | rejected ]
\t\t\t\t\tstate = stateString;

\t\t\t\t// [ reject_list | resolve_list ].disable; progress_list.lock
\t\t\t\t}, tuples[ i ^ 1 ][ 2 ].disable, tuples[ 2 ][ 2 ].lock );
\t\t\t}

\t\t\t// deferred[ resolve | reject | notify ]
\t\t\tdeferred[ tuple[ 0 ] ] = function() {
\t\t\t\tdeferred[ tuple[ 0 ] + \"With\" ]( this === deferred ? promise : this, arguments );
\t\t\t\treturn this;
\t\t\t};
\t\t\tdeferred[ tuple[ 0 ] + \"With\" ] = list.fireWith;
\t\t} );

\t\t// Make the deferred a promise
\t\tpromise.promise( deferred );

\t\t// Call given func if any
\t\tif ( func ) {
\t\t\tfunc.call( deferred, deferred );
\t\t}

\t\t// All done!
\t\treturn deferred;
\t},

\t// Deferred helper
\twhen: function( subordinate /* , ..., subordinateN */ ) {
\t\tvar i = 0,
\t\t\tresolveValues = slice.call( arguments ),
\t\t\tlength = resolveValues.length,

\t\t\t// the count of uncompleted subordinates
\t\t\tremaining = length !== 1 ||
\t\t\t\t( subordinate && jQuery.isFunction( subordinate.promise ) ) ? length : 0,

\t\t\t// the master Deferred.
\t\t\t// If resolveValues consist of only a single Deferred, just use that.
\t\t\tdeferred = remaining === 1 ? subordinate : jQuery.Deferred(),

\t\t\t// Update function for both resolve and progress values
\t\t\tupdateFunc = function( i, contexts, values ) {
\t\t\t\treturn function( value ) {
\t\t\t\t\tcontexts[ i ] = this;
\t\t\t\t\tvalues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
\t\t\t\t\tif ( values === progressValues ) {
\t\t\t\t\t\tdeferred.notifyWith( contexts, values );

\t\t\t\t\t} else if ( !( --remaining ) ) {
\t\t\t\t\t\tdeferred.resolveWith( contexts, values );
\t\t\t\t\t}
\t\t\t\t};
\t\t\t},

\t\t\tprogressValues, progressContexts, resolveContexts;

\t\t// add listeners to Deferred subordinates; treat others as resolved
\t\tif ( length > 1 ) {
\t\t\tprogressValues = new Array( length );
\t\t\tprogressContexts = new Array( length );
\t\t\tresolveContexts = new Array( length );
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tif ( resolveValues[ i ] && jQuery.isFunction( resolveValues[ i ].promise ) ) {
\t\t\t\t\tresolveValues[ i ].promise()
\t\t\t\t\t\t.progress( updateFunc( i, progressContexts, progressValues ) )
\t\t\t\t\t\t.done( updateFunc( i, resolveContexts, resolveValues ) )
\t\t\t\t\t\t.fail( deferred.reject );
\t\t\t\t} else {
\t\t\t\t\t--remaining;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// if we're not waiting on anything, resolve the master
\t\tif ( !remaining ) {
\t\t\tdeferred.resolveWith( resolveContexts, resolveValues );
\t\t}

\t\treturn deferred.promise();
\t}
} );


// The deferred used on DOM ready
var readyList;

jQuery.fn.ready = function( fn ) {

\t// Add the callback
\tjQuery.ready.promise().done( fn );

\treturn this;
};

jQuery.extend( {

\t// Is the DOM ready to be used? Set to true once it occurs.
\tisReady: false,

\t// A counter to track how many items to wait for before
\t// the ready event fires. See #6781
\treadyWait: 1,

\t// Hold (or release) the ready event
\tholdReady: function( hold ) {
\t\tif ( hold ) {
\t\t\tjQuery.readyWait++;
\t\t} else {
\t\t\tjQuery.ready( true );
\t\t}
\t},

\t// Handle when the DOM is ready
\tready: function( wait ) {

\t\t// Abort if there are pending holds or we're already ready
\t\tif ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
\t\t\treturn;
\t\t}

\t\t// Remember that the DOM is ready
\t\tjQuery.isReady = true;

\t\t// If a normal DOM Ready event fired, decrement, and wait if need be
\t\tif ( wait !== true && --jQuery.readyWait > 0 ) {
\t\t\treturn;
\t\t}

\t\t// If there are functions bound, to execute
\t\treadyList.resolveWith( document, [ jQuery ] );

\t\t// Trigger any bound ready events
\t\tif ( jQuery.fn.triggerHandler ) {
\t\t\tjQuery( document ).triggerHandler( \"ready\" );
\t\t\tjQuery( document ).off( \"ready\" );
\t\t}
\t}
} );

/**
 * Clean-up method for dom ready events
 */
function detach() {
\tif ( document.addEventListener ) {
\t\tdocument.removeEventListener( \"DOMContentLoaded\", completed );
\t\twindow.removeEventListener( \"load\", completed );

\t} else {
\t\tdocument.detachEvent( \"onreadystatechange\", completed );
\t\twindow.detachEvent( \"onload\", completed );
\t}
}

/**
 * The ready event handler and self cleanup method
 */
function completed() {

\t// readyState === \"complete\" is good enough for us to call the dom ready in oldIE
\tif ( document.addEventListener ||
\t\twindow.event.type === \"load\" ||
\t\tdocument.readyState === \"complete\" ) {

\t\tdetach();
\t\tjQuery.ready();
\t}
}

jQuery.ready.promise = function( obj ) {
\tif ( !readyList ) {

\t\treadyList = jQuery.Deferred();

\t\t// Catch cases where \$(document).ready() is called
\t\t// after the browser event has already occurred.
\t\t// Support: IE6-10
\t\t// Older IE sometimes signals \"interactive\" too soon
\t\tif ( document.readyState === \"complete\" ||
\t\t\t( document.readyState !== \"loading\" && !document.documentElement.doScroll ) ) {

\t\t\t// Handle it asynchronously to allow scripts the opportunity to delay ready
\t\t\twindow.setTimeout( jQuery.ready );

\t\t// Standards-based browsers support DOMContentLoaded
\t\t} else if ( document.addEventListener ) {

\t\t\t// Use the handy event callback
\t\t\tdocument.addEventListener( \"DOMContentLoaded\", completed );

\t\t\t// A fallback to window.onload, that will always work
\t\t\twindow.addEventListener( \"load\", completed );

\t\t// If IE event model is used
\t\t} else {

\t\t\t// Ensure firing before onload, maybe late but safe also for iframes
\t\t\tdocument.attachEvent( \"onreadystatechange\", completed );

\t\t\t// A fallback to window.onload, that will always work
\t\t\twindow.attachEvent( \"onload\", completed );

\t\t\t// If IE and not a frame
\t\t\t// continually check to see if the document is ready
\t\t\tvar top = false;

\t\t\ttry {
\t\t\t\ttop = window.frameElement == null && document.documentElement;
\t\t\t} catch ( e ) {}

\t\t\tif ( top && top.doScroll ) {
\t\t\t\t( function doScrollCheck() {
\t\t\t\t\tif ( !jQuery.isReady ) {

\t\t\t\t\t\ttry {

\t\t\t\t\t\t\t// Use the trick by Diego Perini
\t\t\t\t\t\t\t// http://javascript.nwbox.com/IEContentLoaded/
\t\t\t\t\t\t\ttop.doScroll( \"left\" );
\t\t\t\t\t\t} catch ( e ) {
\t\t\t\t\t\t\treturn window.setTimeout( doScrollCheck, 50 );
\t\t\t\t\t\t}

\t\t\t\t\t\t// detach all dom ready events
\t\t\t\t\t\tdetach();

\t\t\t\t\t\t// and execute any waiting functions
\t\t\t\t\t\tjQuery.ready();
\t\t\t\t\t}
\t\t\t\t} )();
\t\t\t}
\t\t}
\t}
\treturn readyList.promise( obj );
};

// Kick off the DOM ready check even if the user does not
jQuery.ready.promise();




// Support: IE<9
// Iteration over object's inherited properties before its own
var i;
for ( i in jQuery( support ) ) {
\tbreak;
}
support.ownFirst = i === \"0\";

// Note: most support tests are defined in their respective modules.
// false until the test is run
support.inlineBlockNeedsLayout = false;

// Execute ASAP in case we need to set body.style.zoom
jQuery( function() {

\t// Minified: var a,b,c,d
\tvar val, div, body, container;

\tbody = document.getElementsByTagName( \"body\" )[ 0 ];
\tif ( !body || !body.style ) {

\t\t// Return for frameset docs that don't have a body
\t\treturn;
\t}

\t// Setup
\tdiv = document.createElement( \"div\" );
\tcontainer = document.createElement( \"div\" );
\tcontainer.style.cssText = \"position:absolute;border:0;width:0;height:0;top:0;left:-9999px\";
\tbody.appendChild( container ).appendChild( div );

\tif ( typeof div.style.zoom !== \"undefined\" ) {

\t\t// Support: IE<8
\t\t// Check if natively block-level elements act like inline-block
\t\t// elements when setting their display to 'inline' and giving
\t\t// them layout
\t\tdiv.style.cssText = \"display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1\";

\t\tsupport.inlineBlockNeedsLayout = val = div.offsetWidth === 3;
\t\tif ( val ) {

\t\t\t// Prevent IE 6 from affecting layout for positioned elements #11048
\t\t\t// Prevent IE from shrinking the body in IE 7 mode #12869
\t\t\t// Support: IE<8
\t\t\tbody.style.zoom = 1;
\t\t}
\t}

\tbody.removeChild( container );
} );


( function() {
\tvar div = document.createElement( \"div\" );

\t// Support: IE<9
\tsupport.deleteExpando = true;
\ttry {
\t\tdelete div.test;
\t} catch ( e ) {
\t\tsupport.deleteExpando = false;
\t}

\t// Null elements to avoid leaks in IE.
\tdiv = null;
} )();
var acceptData = function( elem ) {
\tvar noData = jQuery.noData[ ( elem.nodeName + \" \" ).toLowerCase() ],
\t\tnodeType = +elem.nodeType || 1;

\t// Do not set data on non-element DOM nodes because it will not be cleared (#8335).
\treturn nodeType !== 1 && nodeType !== 9 ?
\t\tfalse :

\t\t// Nodes accept data unless otherwise specified; rejection can be conditional
\t\t!noData || noData !== true && elem.getAttribute( \"classid\" ) === noData;
};




var rbrace = /^(?:\\{[\\w\\W]*\\}|\\[[\\w\\W]*\\])\$/,
\trmultiDash = /([A-Z])/g;

function dataAttr( elem, key, data ) {

\t// If nothing was found internally, try to fetch any
\t// data from the HTML5 data-* attribute
\tif ( data === undefined && elem.nodeType === 1 ) {

\t\tvar name = \"data-\" + key.replace( rmultiDash, \"-\$1\" ).toLowerCase();

\t\tdata = elem.getAttribute( name );

\t\tif ( typeof data === \"string\" ) {
\t\t\ttry {
\t\t\t\tdata = data === \"true\" ? true :
\t\t\t\t\tdata === \"false\" ? false :
\t\t\t\t\tdata === \"null\" ? null :

\t\t\t\t\t// Only convert to a number if it doesn't change the string
\t\t\t\t\t+data + \"\" === data ? +data :
\t\t\t\t\trbrace.test( data ) ? jQuery.parseJSON( data ) :
\t\t\t\t\tdata;
\t\t\t} catch ( e ) {}

\t\t\t// Make sure we set the data so it isn't changed later
\t\t\tjQuery.data( elem, key, data );

\t\t} else {
\t\t\tdata = undefined;
\t\t}
\t}

\treturn data;
}

// checks a cache object for emptiness
function isEmptyDataObject( obj ) {
\tvar name;
\tfor ( name in obj ) {

\t\t// if the public data object is empty, the private is still empty
\t\tif ( name === \"data\" && jQuery.isEmptyObject( obj[ name ] ) ) {
\t\t\tcontinue;
\t\t}
\t\tif ( name !== \"toJSON\" ) {
\t\t\treturn false;
\t\t}
\t}

\treturn true;
}

function internalData( elem, name, data, pvt /* Internal Use Only */ ) {
\tif ( !acceptData( elem ) ) {
\t\treturn;
\t}

\tvar ret, thisCache,
\t\tinternalKey = jQuery.expando,

\t\t// We have to handle DOM nodes and JS objects differently because IE6-7
\t\t// can't GC object references properly across the DOM-JS boundary
\t\tisNode = elem.nodeType,

\t\t// Only DOM nodes need the global jQuery cache; JS object data is
\t\t// attached directly to the object so GC can occur automatically
\t\tcache = isNode ? jQuery.cache : elem,

\t\t// Only defining an ID for JS objects if its cache already exists allows
\t\t// the code to shortcut on the same path as a DOM node with no cache
\t\tid = isNode ? elem[ internalKey ] : elem[ internalKey ] && internalKey;

\t// Avoid doing any more work than we need to when trying to get data on an
\t// object that has no data at all
\tif ( ( !id || !cache[ id ] || ( !pvt && !cache[ id ].data ) ) &&
\t\tdata === undefined && typeof name === \"string\" ) {
\t\treturn;
\t}

\tif ( !id ) {

\t\t// Only DOM nodes need a new unique ID for each element since their data
\t\t// ends up in the global cache
\t\tif ( isNode ) {
\t\t\tid = elem[ internalKey ] = deletedIds.pop() || jQuery.guid++;
\t\t} else {
\t\t\tid = internalKey;
\t\t}
\t}

\tif ( !cache[ id ] ) {

\t\t// Avoid exposing jQuery metadata on plain JS objects when the object
\t\t// is serialized using JSON.stringify
\t\tcache[ id ] = isNode ? {} : { toJSON: jQuery.noop };
\t}

\t// An object can be passed to jQuery.data instead of a key/value pair; this gets
\t// shallow copied over onto the existing cache
\tif ( typeof name === \"object\" || typeof name === \"function\" ) {
\t\tif ( pvt ) {
\t\t\tcache[ id ] = jQuery.extend( cache[ id ], name );
\t\t} else {
\t\t\tcache[ id ].data = jQuery.extend( cache[ id ].data, name );
\t\t}
\t}

\tthisCache = cache[ id ];

\t// jQuery data() is stored in a separate object inside the object's internal data
\t// cache in order to avoid key collisions between internal data and user-defined
\t// data.
\tif ( !pvt ) {
\t\tif ( !thisCache.data ) {
\t\t\tthisCache.data = {};
\t\t}

\t\tthisCache = thisCache.data;
\t}

\tif ( data !== undefined ) {
\t\tthisCache[ jQuery.camelCase( name ) ] = data;
\t}

\t// Check for both converted-to-camel and non-converted data property names
\t// If a data property was specified
\tif ( typeof name === \"string\" ) {

\t\t// First Try to find as-is property data
\t\tret = thisCache[ name ];

\t\t// Test for null|undefined property data
\t\tif ( ret == null ) {

\t\t\t// Try to find the camelCased property
\t\t\tret = thisCache[ jQuery.camelCase( name ) ];
\t\t}
\t} else {
\t\tret = thisCache;
\t}

\treturn ret;
}

function internalRemoveData( elem, name, pvt ) {
\tif ( !acceptData( elem ) ) {
\t\treturn;
\t}

\tvar thisCache, i,
\t\tisNode = elem.nodeType,

\t\t// See jQuery.data for more information
\t\tcache = isNode ? jQuery.cache : elem,
\t\tid = isNode ? elem[ jQuery.expando ] : jQuery.expando;

\t// If there is already no cache entry for this object, there is no
\t// purpose in continuing
\tif ( !cache[ id ] ) {
\t\treturn;
\t}

\tif ( name ) {

\t\tthisCache = pvt ? cache[ id ] : cache[ id ].data;

\t\tif ( thisCache ) {

\t\t\t// Support array or space separated string names for data keys
\t\t\tif ( !jQuery.isArray( name ) ) {

\t\t\t\t// try the string as a key before any manipulation
\t\t\t\tif ( name in thisCache ) {
\t\t\t\t\tname = [ name ];
\t\t\t\t} else {

\t\t\t\t\t// split the camel cased version by spaces unless a key with the spaces exists
\t\t\t\t\tname = jQuery.camelCase( name );
\t\t\t\t\tif ( name in thisCache ) {
\t\t\t\t\t\tname = [ name ];
\t\t\t\t\t} else {
\t\t\t\t\t\tname = name.split( \" \" );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {

\t\t\t\t// If \"name\" is an array of keys...
\t\t\t\t// When data is initially created, via (\"key\", \"val\") signature,
\t\t\t\t// keys will be converted to camelCase.
\t\t\t\t// Since there is no way to tell _how_ a key was added, remove
\t\t\t\t// both plain key and camelCase key. #12786
\t\t\t\t// This will only penalize the array argument path.
\t\t\t\tname = name.concat( jQuery.map( name, jQuery.camelCase ) );
\t\t\t}

\t\t\ti = name.length;
\t\t\twhile ( i-- ) {
\t\t\t\tdelete thisCache[ name[ i ] ];
\t\t\t}

\t\t\t// If there is no data left in the cache, we want to continue
\t\t\t// and let the cache object itself get destroyed
\t\t\tif ( pvt ? !isEmptyDataObject( thisCache ) : !jQuery.isEmptyObject( thisCache ) ) {
\t\t\t\treturn;
\t\t\t}
\t\t}
\t}

\t// See jQuery.data for more information
\tif ( !pvt ) {
\t\tdelete cache[ id ].data;

\t\t// Don't destroy the parent cache unless the internal data object
\t\t// had been the only thing left in it
\t\tif ( !isEmptyDataObject( cache[ id ] ) ) {
\t\t\treturn;
\t\t}
\t}

\t// Destroy the cache
\tif ( isNode ) {
\t\tjQuery.cleanData( [ elem ], true );

\t// Use delete when supported for expandos or `cache` is not a window per isWindow (#10080)
\t/* jshint eqeqeq: false */
\t} else if ( support.deleteExpando || cache != cache.window ) {
\t\t/* jshint eqeqeq: true */
\t\tdelete cache[ id ];

\t// When all else fails, undefined
\t} else {
\t\tcache[ id ] = undefined;
\t}
}

jQuery.extend( {
\tcache: {},

\t// The following elements (space-suffixed to avoid Object.prototype collisions)
\t// throw uncatchable exceptions if you attempt to set expando properties
\tnoData: {
\t\t\"applet \": true,
\t\t\"embed \": true,

\t\t// ...but Flash objects (which have this classid) *can* handle expandos
\t\t\"object \": \"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\"
\t},

\thasData: function( elem ) {
\t\telem = elem.nodeType ? jQuery.cache[ elem[ jQuery.expando ] ] : elem[ jQuery.expando ];
\t\treturn !!elem && !isEmptyDataObject( elem );
\t},

\tdata: function( elem, name, data ) {
\t\treturn internalData( elem, name, data );
\t},

\tremoveData: function( elem, name ) {
\t\treturn internalRemoveData( elem, name );
\t},

\t// For internal use only.
\t_data: function( elem, name, data ) {
\t\treturn internalData( elem, name, data, true );
\t},

\t_removeData: function( elem, name ) {
\t\treturn internalRemoveData( elem, name, true );
\t}
} );

jQuery.fn.extend( {
\tdata: function( key, value ) {
\t\tvar i, name, data,
\t\t\telem = this[ 0 ],
\t\t\tattrs = elem && elem.attributes;

\t\t// Special expections of .data basically thwart jQuery.access,
\t\t// so implement the relevant behavior ourselves

\t\t// Gets all values
\t\tif ( key === undefined ) {
\t\t\tif ( this.length ) {
\t\t\t\tdata = jQuery.data( elem );

\t\t\t\tif ( elem.nodeType === 1 && !jQuery._data( elem, \"parsedAttrs\" ) ) {
\t\t\t\t\ti = attrs.length;
\t\t\t\t\twhile ( i-- ) {

\t\t\t\t\t\t// Support: IE11+
\t\t\t\t\t\t// The attrs elements can be null (#14894)
\t\t\t\t\t\tif ( attrs[ i ] ) {
\t\t\t\t\t\t\tname = attrs[ i ].name;
\t\t\t\t\t\t\tif ( name.indexOf( \"data-\" ) === 0 ) {
\t\t\t\t\t\t\t\tname = jQuery.camelCase( name.slice( 5 ) );
\t\t\t\t\t\t\t\tdataAttr( elem, name, data[ name ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tjQuery._data( elem, \"parsedAttrs\", true );
\t\t\t\t}
\t\t\t}

\t\t\treturn data;
\t\t}

\t\t// Sets multiple values
\t\tif ( typeof key === \"object\" ) {
\t\t\treturn this.each( function() {
\t\t\t\tjQuery.data( this, key );
\t\t\t} );
\t\t}

\t\treturn arguments.length > 1 ?

\t\t\t// Sets one value
\t\t\tthis.each( function() {
\t\t\t\tjQuery.data( this, key, value );
\t\t\t} ) :

\t\t\t// Gets one value
\t\t\t// Try to fetch any internally stored data first
\t\t\telem ? dataAttr( elem, key, jQuery.data( elem, key ) ) : undefined;
\t},

\tremoveData: function( key ) {
\t\treturn this.each( function() {
\t\t\tjQuery.removeData( this, key );
\t\t} );
\t}
} );


jQuery.extend( {
\tqueue: function( elem, type, data ) {
\t\tvar queue;

\t\tif ( elem ) {
\t\t\ttype = ( type || \"fx\" ) + \"queue\";
\t\t\tqueue = jQuery._data( elem, type );

\t\t\t// Speed up dequeue by getting out quickly if this is just a lookup
\t\t\tif ( data ) {
\t\t\t\tif ( !queue || jQuery.isArray( data ) ) {
\t\t\t\t\tqueue = jQuery._data( elem, type, jQuery.makeArray( data ) );
\t\t\t\t} else {
\t\t\t\t\tqueue.push( data );
\t\t\t\t}
\t\t\t}
\t\t\treturn queue || [];
\t\t}
\t},

\tdequeue: function( elem, type ) {
\t\ttype = type || \"fx\";

\t\tvar queue = jQuery.queue( elem, type ),
\t\t\tstartLength = queue.length,
\t\t\tfn = queue.shift(),
\t\t\thooks = jQuery._queueHooks( elem, type ),
\t\t\tnext = function() {
\t\t\t\tjQuery.dequeue( elem, type );
\t\t\t};

\t\t// If the fx queue is dequeued, always remove the progress sentinel
\t\tif ( fn === \"inprogress\" ) {
\t\t\tfn = queue.shift();
\t\t\tstartLength--;
\t\t}

\t\tif ( fn ) {

\t\t\t// Add a progress sentinel to prevent the fx queue from being
\t\t\t// automatically dequeued
\t\t\tif ( type === \"fx\" ) {
\t\t\t\tqueue.unshift( \"inprogress\" );
\t\t\t}

\t\t\t// clear up the last queue stop function
\t\t\tdelete hooks.stop;
\t\t\tfn.call( elem, next, hooks );
\t\t}

\t\tif ( !startLength && hooks ) {
\t\t\thooks.empty.fire();
\t\t}
\t},

\t// not intended for public consumption - generates a queueHooks object,
\t// or returns the current one
\t_queueHooks: function( elem, type ) {
\t\tvar key = type + \"queueHooks\";
\t\treturn jQuery._data( elem, key ) || jQuery._data( elem, key, {
\t\t\tempty: jQuery.Callbacks( \"once memory\" ).add( function() {
\t\t\t\tjQuery._removeData( elem, type + \"queue\" );
\t\t\t\tjQuery._removeData( elem, key );
\t\t\t} )
\t\t} );
\t}
} );

jQuery.fn.extend( {
\tqueue: function( type, data ) {
\t\tvar setter = 2;

\t\tif ( typeof type !== \"string\" ) {
\t\t\tdata = type;
\t\t\ttype = \"fx\";
\t\t\tsetter--;
\t\t}

\t\tif ( arguments.length < setter ) {
\t\t\treturn jQuery.queue( this[ 0 ], type );
\t\t}

\t\treturn data === undefined ?
\t\t\tthis :
\t\t\tthis.each( function() {
\t\t\t\tvar queue = jQuery.queue( this, type, data );

\t\t\t\t// ensure a hooks for this queue
\t\t\t\tjQuery._queueHooks( this, type );

\t\t\t\tif ( type === \"fx\" && queue[ 0 ] !== \"inprogress\" ) {
\t\t\t\t\tjQuery.dequeue( this, type );
\t\t\t\t}
\t\t\t} );
\t},
\tdequeue: function( type ) {
\t\treturn this.each( function() {
\t\t\tjQuery.dequeue( this, type );
\t\t} );
\t},
\tclearQueue: function( type ) {
\t\treturn this.queue( type || \"fx\", [] );
\t},

\t// Get a promise resolved when queues of a certain type
\t// are emptied (fx is the type by default)
\tpromise: function( type, obj ) {
\t\tvar tmp,
\t\t\tcount = 1,
\t\t\tdefer = jQuery.Deferred(),
\t\t\telements = this,
\t\t\ti = this.length,
\t\t\tresolve = function() {
\t\t\t\tif ( !( --count ) ) {
\t\t\t\t\tdefer.resolveWith( elements, [ elements ] );
\t\t\t\t}
\t\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tobj = type;
\t\t\ttype = undefined;
\t\t}
\t\ttype = type || \"fx\";

\t\twhile ( i-- ) {
\t\t\ttmp = jQuery._data( elements[ i ], type + \"queueHooks\" );
\t\t\tif ( tmp && tmp.empty ) {
\t\t\t\tcount++;
\t\t\t\ttmp.empty.add( resolve );
\t\t\t}
\t\t}
\t\tresolve();
\t\treturn defer.promise( obj );
\t}
} );


( function() {
\tvar shrinkWrapBlocksVal;

\tsupport.shrinkWrapBlocks = function() {
\t\tif ( shrinkWrapBlocksVal != null ) {
\t\t\treturn shrinkWrapBlocksVal;
\t\t}

\t\t// Will be changed later if needed.
\t\tshrinkWrapBlocksVal = false;

\t\t// Minified: var b,c,d
\t\tvar div, body, container;

\t\tbody = document.getElementsByTagName( \"body\" )[ 0 ];
\t\tif ( !body || !body.style ) {

\t\t\t// Test fired too early or in an unsupported environment, exit.
\t\t\treturn;
\t\t}

\t\t// Setup
\t\tdiv = document.createElement( \"div\" );
\t\tcontainer = document.createElement( \"div\" );
\t\tcontainer.style.cssText = \"position:absolute;border:0;width:0;height:0;top:0;left:-9999px\";
\t\tbody.appendChild( container ).appendChild( div );

\t\t// Support: IE6
\t\t// Check if elements with layout shrink-wrap their children
\t\tif ( typeof div.style.zoom !== \"undefined\" ) {

\t\t\t// Reset CSS: box-sizing; display; margin; border
\t\t\tdiv.style.cssText =

\t\t\t\t// Support: Firefox<29, Android 2.3
\t\t\t\t// Vendor-prefix box-sizing
\t\t\t\t\"-webkit-box-sizing:content-box;-moz-box-sizing:content-box;\" +
\t\t\t\t\"box-sizing:content-box;display:block;margin:0;border:0;\" +
\t\t\t\t\"padding:1px;width:1px;zoom:1\";
\t\t\tdiv.appendChild( document.createElement( \"div\" ) ).style.width = \"5px\";
\t\t\tshrinkWrapBlocksVal = div.offsetWidth !== 3;
\t\t}

\t\tbody.removeChild( container );

\t\treturn shrinkWrapBlocksVal;
\t};

} )();
var pnum = ( /[+-]?(?:\\d*\\.|)\\d+(?:[eE][+-]?\\d+|)/ ).source;

var rcssNum = new RegExp( \"^(?:([+-])=|)(\" + pnum + \")([a-z%]*)\$\", \"i\" );


var cssExpand = [ \"Top\", \"Right\", \"Bottom\", \"Left\" ];

var isHidden = function( elem, el ) {

\t\t// isHidden might be called from jQuery#filter function;
\t\t// in that case, element will be second argument
\t\telem = el || elem;
\t\treturn jQuery.css( elem, \"display\" ) === \"none\" ||
\t\t\t!jQuery.contains( elem.ownerDocument, elem );
\t};



function adjustCSS( elem, prop, valueParts, tween ) {
\tvar adjusted,
\t\tscale = 1,
\t\tmaxIterations = 20,
\t\tcurrentValue = tween ?
\t\t\tfunction() { return tween.cur(); } :
\t\t\tfunction() { return jQuery.css( elem, prop, \"\" ); },
\t\tinitial = currentValue(),
\t\tunit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" ),

\t\t// Starting value computation is required for potential unit mismatches
\t\tinitialInUnit = ( jQuery.cssNumber[ prop ] || unit !== \"px\" && +initial ) &&
\t\t\trcssNum.exec( jQuery.css( elem, prop ) );

\tif ( initialInUnit && initialInUnit[ 3 ] !== unit ) {

\t\t// Trust units reported by jQuery.css
\t\tunit = unit || initialInUnit[ 3 ];

\t\t// Make sure we update the tween properties later on
\t\tvalueParts = valueParts || [];

\t\t// Iteratively approximate from a nonzero starting point
\t\tinitialInUnit = +initial || 1;

\t\tdo {

\t\t\t// If previous iteration zeroed out, double until we get *something*.
\t\t\t// Use string for doubling so we don't accidentally see scale as unchanged below
\t\t\tscale = scale || \".5\";

\t\t\t// Adjust and apply
\t\t\tinitialInUnit = initialInUnit / scale;
\t\t\tjQuery.style( elem, prop, initialInUnit + unit );

\t\t// Update scale, tolerating zero or NaN from tween.cur()
\t\t// Break the loop if scale is unchanged or perfect, or if we've just had enough.
\t\t} while (
\t\t\tscale !== ( scale = currentValue() / initial ) && scale !== 1 && --maxIterations
\t\t);
\t}

\tif ( valueParts ) {
\t\tinitialInUnit = +initialInUnit || +initial || 0;

\t\t// Apply relative offset (+=/-=) if specified
\t\tadjusted = valueParts[ 1 ] ?
\t\t\tinitialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :
\t\t\t+valueParts[ 2 ];
\t\tif ( tween ) {
\t\t\ttween.unit = unit;
\t\t\ttween.start = initialInUnit;
\t\t\ttween.end = adjusted;
\t\t}
\t}
\treturn adjusted;
}


// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
\tvar i = 0,
\t\tlength = elems.length,
\t\tbulk = key == null;

\t// Sets many values
\tif ( jQuery.type( key ) === \"object\" ) {
\t\tchainable = true;
\t\tfor ( i in key ) {
\t\t\taccess( elems, fn, i, key[ i ], true, emptyGet, raw );
\t\t}

\t// Sets one value
\t} else if ( value !== undefined ) {
\t\tchainable = true;

\t\tif ( !jQuery.isFunction( value ) ) {
\t\t\traw = true;
\t\t}

\t\tif ( bulk ) {

\t\t\t// Bulk operations run against the entire set
\t\t\tif ( raw ) {
\t\t\t\tfn.call( elems, value );
\t\t\t\tfn = null;

\t\t\t// ...except when executing function values
\t\t\t} else {
\t\t\t\tbulk = fn;
\t\t\t\tfn = function( elem, key, value ) {
\t\t\t\t\treturn bulk.call( jQuery( elem ), value );
\t\t\t\t};
\t\t\t}
\t\t}

\t\tif ( fn ) {
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tfn(
\t\t\t\t\telems[ i ],
\t\t\t\t\tkey,
\t\t\t\t\traw ? value : value.call( elems[ i ], i, fn( elems[ i ], key ) )
\t\t\t\t);
\t\t\t}
\t\t}
\t}

\treturn chainable ?
\t\telems :

\t\t// Gets
\t\tbulk ?
\t\t\tfn.call( elems ) :
\t\t\tlength ? fn( elems[ 0 ], key ) : emptyGet;
};
var rcheckableType = ( /^(?:checkbox|radio)\$/i );

var rtagName = ( /<([\\w:-]+)/ );

var rscriptType = ( /^\$|\\/(?:java|ecma)script/i );

var rleadingWhitespace = ( /^\\s+/ );

var nodeNames = \"abbr|article|aside|audio|bdi|canvas|data|datalist|\" +
\t\t\"details|dialog|figcaption|figure|footer|header|hgroup|main|\" +
\t\t\"mark|meter|nav|output|picture|progress|section|summary|template|time|video\";



function createSafeFragment( document ) {
\tvar list = nodeNames.split( \"|\" ),
\t\tsafeFrag = document.createDocumentFragment();

\tif ( safeFrag.createElement ) {
\t\twhile ( list.length ) {
\t\t\tsafeFrag.createElement(
\t\t\t\tlist.pop()
\t\t\t);
\t\t}
\t}
\treturn safeFrag;
}


( function() {
\tvar div = document.createElement( \"div\" ),
\t\tfragment = document.createDocumentFragment(),
\t\tinput = document.createElement( \"input\" );

\t// Setup
\tdiv.innerHTML = \"  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>\";

\t// IE strips leading whitespace when .innerHTML is used
\tsupport.leadingWhitespace = div.firstChild.nodeType === 3;

\t// Make sure that tbody elements aren't automatically inserted
\t// IE will insert them into empty tables
\tsupport.tbody = !div.getElementsByTagName( \"tbody\" ).length;

\t// Make sure that link elements get serialized correctly by innerHTML
\t// This requires a wrapper element in IE
\tsupport.htmlSerialize = !!div.getElementsByTagName( \"link\" ).length;

\t// Makes sure cloning an html5 element does not cause problems
\t// Where outerHTML is undefined, this still works
\tsupport.html5Clone =
\t\tdocument.createElement( \"nav\" ).cloneNode( true ).outerHTML !== \"<:nav></:nav>\";

\t// Check if a disconnected checkbox will retain its checked
\t// value of true after appended to the DOM (IE6/7)
\tinput.type = \"checkbox\";
\tinput.checked = true;
\tfragment.appendChild( input );
\tsupport.appendChecked = input.checked;

\t// Make sure textarea (and checkbox) defaultValue is properly cloned
\t// Support: IE6-IE11+
\tdiv.innerHTML = \"<textarea>x</textarea>\";
\tsupport.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;

\t// #11217 - WebKit loses check when the name is after the checked attribute
\tfragment.appendChild( div );

\t// Support: Windows Web Apps (WWA)
\t// `name` and `type` must use .setAttribute for WWA (#14901)
\tinput = document.createElement( \"input\" );
\tinput.setAttribute( \"type\", \"radio\" );
\tinput.setAttribute( \"checked\", \"checked\" );
\tinput.setAttribute( \"name\", \"t\" );

\tdiv.appendChild( input );

\t// Support: Safari 5.1, iOS 5.1, Android 4.x, Android 2.3
\t// old WebKit doesn't clone checked state correctly in fragments
\tsupport.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

\t// Support: IE<9
\t// Cloned elements keep attachEvent handlers, we use addEventListener on IE9+
\tsupport.noCloneEvent = !!div.addEventListener;

\t// Support: IE<9
\t// Since attributes and properties are the same in IE,
\t// cleanData must set properties to undefined rather than use removeAttribute
\tdiv[ jQuery.expando ] = 1;
\tsupport.attributes = !div.getAttribute( jQuery.expando );
} )();


// We have to close these tags to support XHTML (#13200)
var wrapMap = {
\toption: [ 1, \"<select multiple='multiple'>\", \"</select>\" ],
\tlegend: [ 1, \"<fieldset>\", \"</fieldset>\" ],
\tarea: [ 1, \"<map>\", \"</map>\" ],

\t// Support: IE8
\tparam: [ 1, \"<object>\", \"</object>\" ],
\tthead: [ 1, \"<table>\", \"</table>\" ],
\ttr: [ 2, \"<table><tbody>\", \"</tbody></table>\" ],
\tcol: [ 2, \"<table><tbody></tbody><colgroup>\", \"</colgroup></table>\" ],
\ttd: [ 3, \"<table><tbody><tr>\", \"</tr></tbody></table>\" ],

\t// IE6-8 can't serialize link, script, style, or any html5 (NoScope) tags,
\t// unless wrapped in a div with non-breaking characters in front of it.
\t_default: support.htmlSerialize ? [ 0, \"\", \"\" ] : [ 1, \"X<div>\", \"</div>\" ]
};

// Support: IE8-IE9
wrapMap.optgroup = wrapMap.option;

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;


function getAll( context, tag ) {
\tvar elems, elem,
\t\ti = 0,
\t\tfound = typeof context.getElementsByTagName !== \"undefined\" ?
\t\t\tcontext.getElementsByTagName( tag || \"*\" ) :
\t\t\ttypeof context.querySelectorAll !== \"undefined\" ?
\t\t\t\tcontext.querySelectorAll( tag || \"*\" ) :
\t\t\t\tundefined;

\tif ( !found ) {
\t\tfor ( found = [], elems = context.childNodes || context;
\t\t\t( elem = elems[ i ] ) != null;
\t\t\ti++
\t\t) {
\t\t\tif ( !tag || jQuery.nodeName( elem, tag ) ) {
\t\t\t\tfound.push( elem );
\t\t\t} else {
\t\t\t\tjQuery.merge( found, getAll( elem, tag ) );
\t\t\t}
\t\t}
\t}

\treturn tag === undefined || tag && jQuery.nodeName( context, tag ) ?
\t\tjQuery.merge( [ context ], found ) :
\t\tfound;
}


// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
\tvar elem,
\t\ti = 0;
\tfor ( ; ( elem = elems[ i ] ) != null; i++ ) {
\t\tjQuery._data(
\t\t\telem,
\t\t\t\"globalEval\",
\t\t\t!refElements || jQuery._data( refElements[ i ], \"globalEval\" )
\t\t);
\t}
}


var rhtml = /<|&#?\\w+;/,
\trtbody = /<tbody/i;

function fixDefaultChecked( elem ) {
\tif ( rcheckableType.test( elem.type ) ) {
\t\telem.defaultChecked = elem.checked;
\t}
}

function buildFragment( elems, context, scripts, selection, ignored ) {
\tvar j, elem, contains,
\t\ttmp, tag, tbody, wrap,
\t\tl = elems.length,

\t\t// Ensure a safe fragment
\t\tsafe = createSafeFragment( context ),

\t\tnodes = [],
\t\ti = 0;

\tfor ( ; i < l; i++ ) {
\t\telem = elems[ i ];

\t\tif ( elem || elem === 0 ) {

\t\t\t// Add nodes directly
\t\t\tif ( jQuery.type( elem ) === \"object\" ) {
\t\t\t\tjQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

\t\t\t// Convert non-html into a text node
\t\t\t} else if ( !rhtml.test( elem ) ) {
\t\t\t\tnodes.push( context.createTextNode( elem ) );

\t\t\t// Convert html into DOM nodes
\t\t\t} else {
\t\t\t\ttmp = tmp || safe.appendChild( context.createElement( \"div\" ) );

\t\t\t\t// Deserialize a standard representation
\t\t\t\ttag = ( rtagName.exec( elem ) || [ \"\", \"\" ] )[ 1 ].toLowerCase();
\t\t\t\twrap = wrapMap[ tag ] || wrapMap._default;

\t\t\t\ttmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];

\t\t\t\t// Descend through wrappers to the right content
\t\t\t\tj = wrap[ 0 ];
\t\t\t\twhile ( j-- ) {
\t\t\t\t\ttmp = tmp.lastChild;
\t\t\t\t}

\t\t\t\t// Manually add leading whitespace removed by IE
\t\t\t\tif ( !support.leadingWhitespace && rleadingWhitespace.test( elem ) ) {
\t\t\t\t\tnodes.push( context.createTextNode( rleadingWhitespace.exec( elem )[ 0 ] ) );
\t\t\t\t}

\t\t\t\t// Remove IE's autoinserted <tbody> from table fragments
\t\t\t\tif ( !support.tbody ) {

\t\t\t\t\t// String was a <table>, *may* have spurious <tbody>
\t\t\t\t\telem = tag === \"table\" && !rtbody.test( elem ) ?
\t\t\t\t\t\ttmp.firstChild :

\t\t\t\t\t\t// String was a bare <thead> or <tfoot>
\t\t\t\t\t\twrap[ 1 ] === \"<table>\" && !rtbody.test( elem ) ?
\t\t\t\t\t\t\ttmp :
\t\t\t\t\t\t\t0;

\t\t\t\t\tj = elem && elem.childNodes.length;
\t\t\t\t\twhile ( j-- ) {
\t\t\t\t\t\tif ( jQuery.nodeName( ( tbody = elem.childNodes[ j ] ), \"tbody\" ) &&
\t\t\t\t\t\t\t!tbody.childNodes.length ) {

\t\t\t\t\t\t\telem.removeChild( tbody );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tjQuery.merge( nodes, tmp.childNodes );

\t\t\t\t// Fix #12392 for WebKit and IE > 9
\t\t\t\ttmp.textContent = \"\";

\t\t\t\t// Fix #12392 for oldIE
\t\t\t\twhile ( tmp.firstChild ) {
\t\t\t\t\ttmp.removeChild( tmp.firstChild );
\t\t\t\t}

\t\t\t\t// Remember the top-level container for proper cleanup
\t\t\t\ttmp = safe.lastChild;
\t\t\t}
\t\t}
\t}

\t// Fix #11356: Clear elements from fragment
\tif ( tmp ) {
\t\tsafe.removeChild( tmp );
\t}

\t// Reset defaultChecked for any radios and checkboxes
\t// about to be appended to the DOM in IE 6/7 (#8060)
\tif ( !support.appendChecked ) {
\t\tjQuery.grep( getAll( nodes, \"input\" ), fixDefaultChecked );
\t}

\ti = 0;
\twhile ( ( elem = nodes[ i++ ] ) ) {

\t\t// Skip elements already in the context collection (trac-4087)
\t\tif ( selection && jQuery.inArray( elem, selection ) > -1 ) {
\t\t\tif ( ignored ) {
\t\t\t\tignored.push( elem );
\t\t\t}

\t\t\tcontinue;
\t\t}

\t\tcontains = jQuery.contains( elem.ownerDocument, elem );

\t\t// Append to fragment
\t\ttmp = getAll( safe.appendChild( elem ), \"script\" );

\t\t// Preserve script evaluation history
\t\tif ( contains ) {
\t\t\tsetGlobalEval( tmp );
\t\t}

\t\t// Capture executables
\t\tif ( scripts ) {
\t\t\tj = 0;
\t\t\twhile ( ( elem = tmp[ j++ ] ) ) {
\t\t\t\tif ( rscriptType.test( elem.type || \"\" ) ) {
\t\t\t\t\tscripts.push( elem );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\ttmp = null;

\treturn safe;
}


( function() {
\tvar i, eventName,
\t\tdiv = document.createElement( \"div\" );

\t// Support: IE<9 (lack submit/change bubble), Firefox (lack focus(in | out) events)
\tfor ( i in { submit: true, change: true, focusin: true } ) {
\t\teventName = \"on\" + i;

\t\tif ( !( support[ i ] = eventName in window ) ) {

\t\t\t// Beware of CSP restrictions (https://developer.mozilla.org/en/Security/CSP)
\t\t\tdiv.setAttribute( eventName, \"t\" );
\t\t\tsupport[ i ] = div.attributes[ eventName ].expando === false;
\t\t}
\t}

\t// Null elements to avoid leaks in IE.
\tdiv = null;
} )();


var rformElems = /^(?:input|select|textarea)\$/i,
\trkeyEvent = /^key/,
\trmouseEvent = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
\trfocusMorph = /^(?:focusinfocus|focusoutblur)\$/,
\trtypenamespace = /^([^.]*)(?:\\.(.+)|)/;

function returnTrue() {
\treturn true;
}

function returnFalse() {
\treturn false;
}

// Support: IE9
// See #13393 for more info
function safeActiveElement() {
\ttry {
\t\treturn document.activeElement;
\t} catch ( err ) { }
}

function on( elem, types, selector, data, fn, one ) {
\tvar origFn, type;

\t// Types can be a map of types/handlers
\tif ( typeof types === \"object\" ) {

\t\t// ( types-Object, selector, data )
\t\tif ( typeof selector !== \"string\" ) {

\t\t\t// ( types-Object, data )
\t\t\tdata = data || selector;
\t\t\tselector = undefined;
\t\t}
\t\tfor ( type in types ) {
\t\t\ton( elem, type, selector, data, types[ type ], one );
\t\t}
\t\treturn elem;
\t}

\tif ( data == null && fn == null ) {

\t\t// ( types, fn )
\t\tfn = selector;
\t\tdata = selector = undefined;
\t} else if ( fn == null ) {
\t\tif ( typeof selector === \"string\" ) {

\t\t\t// ( types, selector, fn )
\t\t\tfn = data;
\t\t\tdata = undefined;
\t\t} else {

\t\t\t// ( types, data, fn )
\t\t\tfn = data;
\t\t\tdata = selector;
\t\t\tselector = undefined;
\t\t}
\t}
\tif ( fn === false ) {
\t\tfn = returnFalse;
\t} else if ( !fn ) {
\t\treturn elem;
\t}

\tif ( one === 1 ) {
\t\torigFn = fn;
\t\tfn = function( event ) {

\t\t\t// Can use an empty set, since event contains the info
\t\t\tjQuery().off( event );
\t\t\treturn origFn.apply( this, arguments );
\t\t};

\t\t// Use same guid so caller can remove using origFn
\t\tfn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
\t}
\treturn elem.each( function() {
\t\tjQuery.event.add( this, types, fn, data, selector );
\t} );
}

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

\tglobal: {},

\tadd: function( elem, types, handler, data, selector ) {
\t\tvar tmp, events, t, handleObjIn,
\t\t\tspecial, eventHandle, handleObj,
\t\t\thandlers, type, namespaces, origType,
\t\t\telemData = jQuery._data( elem );

\t\t// Don't attach events to noData or text/comment nodes (but allow plain objects)
\t\tif ( !elemData ) {
\t\t\treturn;
\t\t}

\t\t// Caller can pass in an object of custom data in lieu of the handler
\t\tif ( handler.handler ) {
\t\t\thandleObjIn = handler;
\t\t\thandler = handleObjIn.handler;
\t\t\tselector = handleObjIn.selector;
\t\t}

\t\t// Make sure that the handler has a unique ID, used to find/remove it later
\t\tif ( !handler.guid ) {
\t\t\thandler.guid = jQuery.guid++;
\t\t}

\t\t// Init the element's event structure and main handler, if this is the first
\t\tif ( !( events = elemData.events ) ) {
\t\t\tevents = elemData.events = {};
\t\t}
\t\tif ( !( eventHandle = elemData.handle ) ) {
\t\t\teventHandle = elemData.handle = function( e ) {

\t\t\t\t// Discard the second event of a jQuery.event.trigger() and
\t\t\t\t// when an event is called after a page has unloaded
\t\t\t\treturn typeof jQuery !== \"undefined\" &&
\t\t\t\t\t( !e || jQuery.event.triggered !== e.type ) ?
\t\t\t\t\tjQuery.event.dispatch.apply( eventHandle.elem, arguments ) :
\t\t\t\t\tundefined;
\t\t\t};

\t\t\t// Add elem as a property of the handle fn to prevent a memory leak
\t\t\t// with IE non-native events
\t\t\teventHandle.elem = elem;
\t\t}

\t\t// Handle multiple events separated by a space
\t\ttypes = ( types || \"\" ).match( rnotwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[ t ] ) || [];
\t\t\ttype = origType = tmp[ 1 ];
\t\t\tnamespaces = ( tmp[ 2 ] || \"\" ).split( \".\" ).sort();

\t\t\t// There *must* be a type, no attaching namespace-only handlers
\t\t\tif ( !type ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// If event changes its type, use the special event handlers for the changed type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// If selector defined, determine special event api type, otherwise given type
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;

\t\t\t// Update special based on newly reset type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// handleObj is passed to all event handlers
\t\t\thandleObj = jQuery.extend( {
\t\t\t\ttype: type,
\t\t\t\torigType: origType,
\t\t\t\tdata: data,
\t\t\t\thandler: handler,
\t\t\t\tguid: handler.guid,
\t\t\t\tselector: selector,
\t\t\t\tneedsContext: selector && jQuery.expr.match.needsContext.test( selector ),
\t\t\t\tnamespace: namespaces.join( \".\" )
\t\t\t}, handleObjIn );

\t\t\t// Init the event handler queue if we're the first
\t\t\tif ( !( handlers = events[ type ] ) ) {
\t\t\t\thandlers = events[ type ] = [];
\t\t\t\thandlers.delegateCount = 0;

\t\t\t\t// Only use addEventListener/attachEvent if the special events handler returns false
\t\t\t\tif ( !special.setup ||
\t\t\t\t\tspecial.setup.call( elem, data, namespaces, eventHandle ) === false ) {

\t\t\t\t\t// Bind the global event handler to the element
\t\t\t\t\tif ( elem.addEventListener ) {
\t\t\t\t\t\telem.addEventListener( type, eventHandle, false );

\t\t\t\t\t} else if ( elem.attachEvent ) {
\t\t\t\t\t\telem.attachEvent( \"on\" + type, eventHandle );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif ( special.add ) {
\t\t\t\tspecial.add.call( elem, handleObj );

\t\t\t\tif ( !handleObj.handler.guid ) {
\t\t\t\t\thandleObj.handler.guid = handler.guid;
\t\t\t\t}
\t\t\t}

\t\t\t// Add to the element's handler list, delegates in front
\t\t\tif ( selector ) {
\t\t\t\thandlers.splice( handlers.delegateCount++, 0, handleObj );
\t\t\t} else {
\t\t\t\thandlers.push( handleObj );
\t\t\t}

\t\t\t// Keep track of which events have ever been used, for event optimization
\t\t\tjQuery.event.global[ type ] = true;
\t\t}

\t\t// Nullify elem to prevent memory leaks in IE
\t\telem = null;
\t},

\t// Detach an event or set of events from an element
\tremove: function( elem, types, handler, selector, mappedTypes ) {
\t\tvar j, handleObj, tmp,
\t\t\torigCount, t, events,
\t\t\tspecial, handlers, type,
\t\t\tnamespaces, origType,
\t\t\telemData = jQuery.hasData( elem ) && jQuery._data( elem );

\t\tif ( !elemData || !( events = elemData.events ) ) {
\t\t\treturn;
\t\t}

\t\t// Once for each type.namespace in types; type may be omitted
\t\ttypes = ( types || \"\" ).match( rnotwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[ t ] ) || [];
\t\t\ttype = origType = tmp[ 1 ];
\t\t\tnamespaces = ( tmp[ 2 ] || \"\" ).split( \".\" ).sort();

\t\t\t// Unbind all events (on this namespace, if provided) for the element
\t\t\tif ( !type ) {
\t\t\t\tfor ( type in events ) {
\t\t\t\t\tjQuery.event.remove( elem, type + types[ t ], handler, selector, true );
\t\t\t\t}
\t\t\t\tcontinue;
\t\t\t}

\t\t\tspecial = jQuery.event.special[ type ] || {};
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;
\t\t\thandlers = events[ type ] || [];
\t\t\ttmp = tmp[ 2 ] &&
\t\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join( \"\\\\.(?:.*\\\\.|)\" ) + \"(\\\\.|\$)\" );

\t\t\t// Remove matching events
\t\t\torigCount = j = handlers.length;
\t\t\twhile ( j-- ) {
\t\t\t\thandleObj = handlers[ j ];

\t\t\t\tif ( ( mappedTypes || origType === handleObj.origType ) &&
\t\t\t\t\t( !handler || handler.guid === handleObj.guid ) &&
\t\t\t\t\t( !tmp || tmp.test( handleObj.namespace ) ) &&
\t\t\t\t\t( !selector || selector === handleObj.selector ||
\t\t\t\t\t\tselector === \"**\" && handleObj.selector ) ) {
\t\t\t\t\thandlers.splice( j, 1 );

\t\t\t\t\tif ( handleObj.selector ) {
\t\t\t\t\t\thandlers.delegateCount--;
\t\t\t\t\t}
\t\t\t\t\tif ( special.remove ) {
\t\t\t\t\t\tspecial.remove.call( elem, handleObj );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Remove generic event handler if we removed something and no more handlers exist
\t\t\t// (avoids potential for endless recursion during removal of special event handlers)
\t\t\tif ( origCount && !handlers.length ) {
\t\t\t\tif ( !special.teardown ||
\t\t\t\t\tspecial.teardown.call( elem, namespaces, elemData.handle ) === false ) {

\t\t\t\t\tjQuery.removeEvent( elem, type, elemData.handle );
\t\t\t\t}

\t\t\t\tdelete events[ type ];
\t\t\t}
\t\t}

\t\t// Remove the expando if it's no longer used
\t\tif ( jQuery.isEmptyObject( events ) ) {
\t\t\tdelete elemData.handle;

\t\t\t// removeData also checks for emptiness and clears the expando if empty
\t\t\t// so use it instead of delete
\t\t\tjQuery._removeData( elem, \"events\" );
\t\t}
\t},

\ttrigger: function( event, data, elem, onlyHandlers ) {
\t\tvar handle, ontype, cur,
\t\t\tbubbleType, special, tmp, i,
\t\t\teventPath = [ elem || document ],
\t\t\ttype = hasOwn.call( event, \"type\" ) ? event.type : event,
\t\t\tnamespaces = hasOwn.call( event, \"namespace\" ) ? event.namespace.split( \".\" ) : [];

\t\tcur = tmp = elem = elem || document;

\t\t// Don't do events on text and comment nodes
\t\tif ( elem.nodeType === 3 || elem.nodeType === 8 ) {
\t\t\treturn;
\t\t}

\t\t// focus/blur morphs to focusin/out; ensure we're not firing them right now
\t\tif ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
\t\t\treturn;
\t\t}

\t\tif ( type.indexOf( \".\" ) > -1 ) {

\t\t\t// Namespaced trigger; create a regexp to match event type in handle()
\t\t\tnamespaces = type.split( \".\" );
\t\t\ttype = namespaces.shift();
\t\t\tnamespaces.sort();
\t\t}
\t\tontype = type.indexOf( \":\" ) < 0 && \"on\" + type;

\t\t// Caller can pass in a jQuery.Event object, Object, or just an event type string
\t\tevent = event[ jQuery.expando ] ?
\t\t\tevent :
\t\t\tnew jQuery.Event( type, typeof event === \"object\" && event );

\t\t// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
\t\tevent.isTrigger = onlyHandlers ? 2 : 3;
\t\tevent.namespace = namespaces.join( \".\" );
\t\tevent.rnamespace = event.namespace ?
\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join( \"\\\\.(?:.*\\\\.|)\" ) + \"(\\\\.|\$)\" ) :
\t\t\tnull;

\t\t// Clean up the event in case it is being reused
\t\tevent.result = undefined;
\t\tif ( !event.target ) {
\t\t\tevent.target = elem;
\t\t}

\t\t// Clone any incoming data and prepend the event, creating the handler arg list
\t\tdata = data == null ?
\t\t\t[ event ] :
\t\t\tjQuery.makeArray( data, [ event ] );

\t\t// Allow special events to draw outside the lines
\t\tspecial = jQuery.event.special[ type ] || {};
\t\tif ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine event propagation path in advance, per W3C events spec (#9951)
\t\t// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
\t\tif ( !onlyHandlers && !special.noBubble && !jQuery.isWindow( elem ) ) {

\t\t\tbubbleType = special.delegateType || type;
\t\t\tif ( !rfocusMorph.test( bubbleType + type ) ) {
\t\t\t\tcur = cur.parentNode;
\t\t\t}
\t\t\tfor ( ; cur; cur = cur.parentNode ) {
\t\t\t\teventPath.push( cur );
\t\t\t\ttmp = cur;
\t\t\t}

\t\t\t// Only add window if we got to document (e.g., not plain obj or detached DOM)
\t\t\tif ( tmp === ( elem.ownerDocument || document ) ) {
\t\t\t\teventPath.push( tmp.defaultView || tmp.parentWindow || window );
\t\t\t}
\t\t}

\t\t// Fire handlers on the event path
\t\ti = 0;
\t\twhile ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {

\t\t\tevent.type = i > 1 ?
\t\t\t\tbubbleType :
\t\t\t\tspecial.bindType || type;

\t\t\t// jQuery handler
\t\t\thandle = ( jQuery._data( cur, \"events\" ) || {} )[ event.type ] &&
\t\t\t\tjQuery._data( cur, \"handle\" );

\t\t\tif ( handle ) {
\t\t\t\thandle.apply( cur, data );
\t\t\t}

\t\t\t// Native handler
\t\t\thandle = ontype && cur[ ontype ];
\t\t\tif ( handle && handle.apply && acceptData( cur ) ) {
\t\t\t\tevent.result = handle.apply( cur, data );
\t\t\t\tif ( event.result === false ) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t}
\t\t\t}
\t\t}
\t\tevent.type = type;

\t\t// If nobody prevented the default action, do it now
\t\tif ( !onlyHandlers && !event.isDefaultPrevented() ) {

\t\t\tif (
\t\t\t\t( !special._default ||
\t\t\t\t special._default.apply( eventPath.pop(), data ) === false
\t\t\t\t) && acceptData( elem )
\t\t\t) {

\t\t\t\t// Call a native DOM method on the target with the same name name as the event.
\t\t\t\t// Can't use an .isFunction() check here because IE6/7 fails that test.
\t\t\t\t// Don't do default actions on window, that's where global variables be (#6170)
\t\t\t\tif ( ontype && elem[ type ] && !jQuery.isWindow( elem ) ) {

\t\t\t\t\t// Don't re-trigger an onFOO event when we call its FOO() method
\t\t\t\t\ttmp = elem[ ontype ];

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = null;
\t\t\t\t\t}

\t\t\t\t\t// Prevent re-triggering of the same event, since we already bubbled it above
\t\t\t\t\tjQuery.event.triggered = type;
\t\t\t\t\ttry {
\t\t\t\t\t\telem[ type ]();
\t\t\t\t\t} catch ( e ) {

\t\t\t\t\t\t// IE<9 dies on focus/blur to hidden element (#1486,#12518)
\t\t\t\t\t\t// only reproducible on winXP IE8 native, not IE9 in IE8 mode
\t\t\t\t\t}
\t\t\t\t\tjQuery.event.triggered = undefined;

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = tmp;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn event.result;
\t},

\tdispatch: function( event ) {

\t\t// Make a writable jQuery.Event from the native event object
\t\tevent = jQuery.event.fix( event );

\t\tvar i, j, ret, matched, handleObj,
\t\t\thandlerQueue = [],
\t\t\targs = slice.call( arguments ),
\t\t\thandlers = ( jQuery._data( this, \"events\" ) || {} )[ event.type ] || [],
\t\t\tspecial = jQuery.event.special[ event.type ] || {};

\t\t// Use the fix-ed jQuery.Event rather than the (read-only) native event
\t\targs[ 0 ] = event;
\t\tevent.delegateTarget = this;

\t\t// Call the preDispatch hook for the mapped type, and let it bail if desired
\t\tif ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine handlers
\t\thandlerQueue = jQuery.event.handlers.call( this, event, handlers );

\t\t// Run delegates first; they may want to stop propagation beneath us
\t\ti = 0;
\t\twhile ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {
\t\t\tevent.currentTarget = matched.elem;

\t\t\tj = 0;
\t\t\twhile ( ( handleObj = matched.handlers[ j++ ] ) &&
\t\t\t\t!event.isImmediatePropagationStopped() ) {

\t\t\t\t// Triggered event must either 1) have no namespace, or 2) have namespace(s)
\t\t\t\t// a subset or equal to those in the bound event (both can have no namespace).
\t\t\t\tif ( !event.rnamespace || event.rnamespace.test( handleObj.namespace ) ) {

\t\t\t\t\tevent.handleObj = handleObj;
\t\t\t\t\tevent.data = handleObj.data;

\t\t\t\t\tret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||
\t\t\t\t\t\thandleObj.handler ).apply( matched.elem, args );

\t\t\t\t\tif ( ret !== undefined ) {
\t\t\t\t\t\tif ( ( event.result = ret ) === false ) {
\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\tevent.stopPropagation();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Call the postDispatch hook for the mapped type
\t\tif ( special.postDispatch ) {
\t\t\tspecial.postDispatch.call( this, event );
\t\t}

\t\treturn event.result;
\t},

\thandlers: function( event, handlers ) {
\t\tvar i, matches, sel, handleObj,
\t\t\thandlerQueue = [],
\t\t\tdelegateCount = handlers.delegateCount,
\t\t\tcur = event.target;

\t\t// Support (at least): Chrome, IE9
\t\t// Find delegate handlers
\t\t// Black-hole SVG <use> instance trees (#13180)
\t\t//
\t\t// Support: Firefox<=42+
\t\t// Avoid non-left-click in FF but don't block IE radio events (#3861, gh-2343)
\t\tif ( delegateCount && cur.nodeType &&
\t\t\t( event.type !== \"click\" || isNaN( event.button ) || event.button < 1 ) ) {

\t\t\t/* jshint eqeqeq: false */
\t\t\tfor ( ; cur != this; cur = cur.parentNode || this ) {
\t\t\t\t/* jshint eqeqeq: true */

\t\t\t\t// Don't check non-elements (#13208)
\t\t\t\t// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
\t\t\t\tif ( cur.nodeType === 1 && ( cur.disabled !== true || event.type !== \"click\" ) ) {
\t\t\t\t\tmatches = [];
\t\t\t\t\tfor ( i = 0; i < delegateCount; i++ ) {
\t\t\t\t\t\thandleObj = handlers[ i ];

\t\t\t\t\t\t// Don't conflict with Object.prototype properties (#13203)
\t\t\t\t\t\tsel = handleObj.selector + \" \";

\t\t\t\t\t\tif ( matches[ sel ] === undefined ) {
\t\t\t\t\t\t\tmatches[ sel ] = handleObj.needsContext ?
\t\t\t\t\t\t\t\tjQuery( sel, this ).index( cur ) > -1 :
\t\t\t\t\t\t\t\tjQuery.find( sel, this, null, [ cur ] ).length;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( matches[ sel ] ) {
\t\t\t\t\t\t\tmatches.push( handleObj );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( matches.length ) {
\t\t\t\t\t\thandlerQueue.push( { elem: cur, handlers: matches } );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Add the remaining (directly-bound) handlers
\t\tif ( delegateCount < handlers.length ) {
\t\t\thandlerQueue.push( { elem: this, handlers: handlers.slice( delegateCount ) } );
\t\t}

\t\treturn handlerQueue;
\t},

\tfix: function( event ) {
\t\tif ( event[ jQuery.expando ] ) {
\t\t\treturn event;
\t\t}

\t\t// Create a writable copy of the event object and normalize some properties
\t\tvar i, prop, copy,
\t\t\ttype = event.type,
\t\t\toriginalEvent = event,
\t\t\tfixHook = this.fixHooks[ type ];

\t\tif ( !fixHook ) {
\t\t\tthis.fixHooks[ type ] = fixHook =
\t\t\t\trmouseEvent.test( type ) ? this.mouseHooks :
\t\t\t\trkeyEvent.test( type ) ? this.keyHooks :
\t\t\t\t{};
\t\t}
\t\tcopy = fixHook.props ? this.props.concat( fixHook.props ) : this.props;

\t\tevent = new jQuery.Event( originalEvent );

\t\ti = copy.length;
\t\twhile ( i-- ) {
\t\t\tprop = copy[ i ];
\t\t\tevent[ prop ] = originalEvent[ prop ];
\t\t}

\t\t// Support: IE<9
\t\t// Fix target property (#1925)
\t\tif ( !event.target ) {
\t\t\tevent.target = originalEvent.srcElement || document;
\t\t}

\t\t// Support: Safari 6-8+
\t\t// Target should not be a text node (#504, #13143)
\t\tif ( event.target.nodeType === 3 ) {
\t\t\tevent.target = event.target.parentNode;
\t\t}

\t\t// Support: IE<9
\t\t// For mouse/key events, metaKey==false if it's undefined (#3368, #11328)
\t\tevent.metaKey = !!event.metaKey;

\t\treturn fixHook.filter ? fixHook.filter( event, originalEvent ) : event;
\t},

\t// Includes some event props shared by KeyEvent and MouseEvent
\tprops: ( \"altKey bubbles cancelable ctrlKey currentTarget detail eventPhase \" +
\t\t\"metaKey relatedTarget shiftKey target timeStamp view which\" ).split( \" \" ),

\tfixHooks: {},

\tkeyHooks: {
\t\tprops: \"char charCode key keyCode\".split( \" \" ),
\t\tfilter: function( event, original ) {

\t\t\t// Add which for key events
\t\t\tif ( event.which == null ) {
\t\t\t\tevent.which = original.charCode != null ? original.charCode : original.keyCode;
\t\t\t}

\t\t\treturn event;
\t\t}
\t},

\tmouseHooks: {
\t\tprops: ( \"button buttons clientX clientY fromElement offsetX offsetY \" +
\t\t\t\"pageX pageY screenX screenY toElement\" ).split( \" \" ),
\t\tfilter: function( event, original ) {
\t\t\tvar body, eventDoc, doc,
\t\t\t\tbutton = original.button,
\t\t\t\tfromElement = original.fromElement;

\t\t\t// Calculate pageX/Y if missing and clientX/Y available
\t\t\tif ( event.pageX == null && original.clientX != null ) {
\t\t\t\teventDoc = event.target.ownerDocument || document;
\t\t\t\tdoc = eventDoc.documentElement;
\t\t\t\tbody = eventDoc.body;

\t\t\t\tevent.pageX = original.clientX +
\t\t\t\t\t( doc && doc.scrollLeft || body && body.scrollLeft || 0 ) -
\t\t\t\t\t( doc && doc.clientLeft || body && body.clientLeft || 0 );
\t\t\t\tevent.pageY = original.clientY +
\t\t\t\t\t( doc && doc.scrollTop  || body && body.scrollTop  || 0 ) -
\t\t\t\t\t( doc && doc.clientTop  || body && body.clientTop  || 0 );
\t\t\t}

\t\t\t// Add relatedTarget, if necessary
\t\t\tif ( !event.relatedTarget && fromElement ) {
\t\t\t\tevent.relatedTarget = fromElement === event.target ?
\t\t\t\t\toriginal.toElement :
\t\t\t\t\tfromElement;
\t\t\t}

\t\t\t// Add which for click: 1 === left; 2 === middle; 3 === right
\t\t\t// Note: button is not normalized, so don't use it
\t\t\tif ( !event.which && button !== undefined ) {
\t\t\t\tevent.which = ( button & 1 ? 1 : ( button & 2 ? 3 : ( button & 4 ? 2 : 0 ) ) );
\t\t\t}

\t\t\treturn event;
\t\t}
\t},

\tspecial: {
\t\tload: {

\t\t\t// Prevent triggered image.load events from bubbling to window.load
\t\t\tnoBubble: true
\t\t},
\t\tfocus: {

\t\t\t// Fire native event if possible so blur/focus sequence is correct
\t\t\ttrigger: function() {
\t\t\t\tif ( this !== safeActiveElement() && this.focus ) {
\t\t\t\t\ttry {
\t\t\t\t\t\tthis.focus();
\t\t\t\t\t\treturn false;
\t\t\t\t\t} catch ( e ) {

\t\t\t\t\t\t// Support: IE<9
\t\t\t\t\t\t// If we error on focus to hidden element (#1486, #12518),
\t\t\t\t\t\t// let .trigger() run the handlers
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\tdelegateType: \"focusin\"
\t\t},
\t\tblur: {
\t\t\ttrigger: function() {
\t\t\t\tif ( this === safeActiveElement() && this.blur ) {
\t\t\t\t\tthis.blur();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},
\t\t\tdelegateType: \"focusout\"
\t\t},
\t\tclick: {

\t\t\t// For checkbox, fire native event so checked state will be right
\t\t\ttrigger: function() {
\t\t\t\tif ( jQuery.nodeName( this, \"input\" ) && this.type === \"checkbox\" && this.click ) {
\t\t\t\t\tthis.click();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},

\t\t\t// For cross-browser consistency, don't fire native .click() on links
\t\t\t_default: function( event ) {
\t\t\t\treturn jQuery.nodeName( event.target, \"a\" );
\t\t\t}
\t\t},

\t\tbeforeunload: {
\t\t\tpostDispatch: function( event ) {

\t\t\t\t// Support: Firefox 20+
\t\t\t\t// Firefox doesn't alert if the returnValue field is not set.
\t\t\t\tif ( event.result !== undefined && event.originalEvent ) {
\t\t\t\t\tevent.originalEvent.returnValue = event.result;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\t// Piggyback on a donor event to simulate a different one
\tsimulate: function( type, elem, event ) {
\t\tvar e = jQuery.extend(
\t\t\tnew jQuery.Event(),
\t\t\tevent,
\t\t\t{
\t\t\t\ttype: type,
\t\t\t\tisSimulated: true

\t\t\t\t// Previously, `originalEvent: {}` was set here, so stopPropagation call
\t\t\t\t// would not be triggered on donor event, since in our own
\t\t\t\t// jQuery.event.stopPropagation function we had a check for existence of
\t\t\t\t// originalEvent.stopPropagation method, so, consequently it would be a noop.
\t\t\t\t//
\t\t\t\t// Guard for simulated events was moved to jQuery.event.stopPropagation function
\t\t\t\t// since `originalEvent` should point to the original event for the
\t\t\t\t// constancy with other events and for more focused logic
\t\t\t}
\t\t);

\t\tjQuery.event.trigger( e, null, elem );

\t\tif ( e.isDefaultPrevented() ) {
\t\t\tevent.preventDefault();
\t\t}
\t}
};

jQuery.removeEvent = document.removeEventListener ?
\tfunction( elem, type, handle ) {

\t\t// This \"if\" is needed for plain objects
\t\tif ( elem.removeEventListener ) {
\t\t\telem.removeEventListener( type, handle );
\t\t}
\t} :
\tfunction( elem, type, handle ) {
\t\tvar name = \"on\" + type;

\t\tif ( elem.detachEvent ) {

\t\t\t// #8545, #7054, preventing memory leaks for custom events in IE6-8
\t\t\t// detachEvent needed property on element, by name of that event,
\t\t\t// to properly expose it to GC
\t\t\tif ( typeof elem[ name ] === \"undefined\" ) {
\t\t\t\telem[ name ] = null;
\t\t\t}

\t\t\telem.detachEvent( name, handle );
\t\t}
\t};

jQuery.Event = function( src, props ) {

\t// Allow instantiation without the 'new' keyword
\tif ( !( this instanceof jQuery.Event ) ) {
\t\treturn new jQuery.Event( src, props );
\t}

\t// Event object
\tif ( src && src.type ) {
\t\tthis.originalEvent = src;
\t\tthis.type = src.type;

\t\t// Events bubbling up the document may have been marked as prevented
\t\t// by a handler lower down the tree; reflect the correct value.
\t\tthis.isDefaultPrevented = src.defaultPrevented ||
\t\t\t\tsrc.defaultPrevented === undefined &&

\t\t\t\t// Support: IE < 9, Android < 4.0
\t\t\t\tsrc.returnValue === false ?
\t\t\treturnTrue :
\t\t\treturnFalse;

\t// Event type
\t} else {
\t\tthis.type = src;
\t}

\t// Put explicitly provided properties onto the event object
\tif ( props ) {
\t\tjQuery.extend( this, props );
\t}

\t// Create a timestamp if incoming event doesn't have one
\tthis.timeStamp = src && src.timeStamp || jQuery.now();

\t// Mark it as fixed
\tthis[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
\tconstructor: jQuery.Event,
\tisDefaultPrevented: returnFalse,
\tisPropagationStopped: returnFalse,
\tisImmediatePropagationStopped: returnFalse,

\tpreventDefault: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isDefaultPrevented = returnTrue;
\t\tif ( !e ) {
\t\t\treturn;
\t\t}

\t\t// If preventDefault exists, run it on the original event
\t\tif ( e.preventDefault ) {
\t\t\te.preventDefault();

\t\t// Support: IE
\t\t// Otherwise set the returnValue property of the original event to false
\t\t} else {
\t\t\te.returnValue = false;
\t\t}
\t},
\tstopPropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isPropagationStopped = returnTrue;

\t\tif ( !e || this.isSimulated ) {
\t\t\treturn;
\t\t}

\t\t// If stopPropagation exists, run it on the original event
\t\tif ( e.stopPropagation ) {
\t\t\te.stopPropagation();
\t\t}

\t\t// Support: IE
\t\t// Set the cancelBubble property of the original event to true
\t\te.cancelBubble = true;
\t},
\tstopImmediatePropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isImmediatePropagationStopped = returnTrue;

\t\tif ( e && e.stopImmediatePropagation ) {
\t\t\te.stopImmediatePropagation();
\t\t}

\t\tthis.stopPropagation();
\t}
};

// Create mouseenter/leave events using mouseover/out and event-time checks
// so that event delegation works in jQuery.
// Do the same for pointerenter/pointerleave and pointerover/pointerout
//
// Support: Safari 7 only
// Safari sends mouseenter too often; see:
// https://code.google.com/p/chromium/issues/detail?id=470258
// for the description of the bug (it existed in older Chrome versions as well).
jQuery.each( {
\tmouseenter: \"mouseover\",
\tmouseleave: \"mouseout\",
\tpointerenter: \"pointerover\",
\tpointerleave: \"pointerout\"
}, function( orig, fix ) {
\tjQuery.event.special[ orig ] = {
\t\tdelegateType: fix,
\t\tbindType: fix,

\t\thandle: function( event ) {
\t\t\tvar ret,
\t\t\t\ttarget = this,
\t\t\t\trelated = event.relatedTarget,
\t\t\t\thandleObj = event.handleObj;

\t\t\t// For mouseenter/leave call the handler if related is outside the target.
\t\t\t// NB: No relatedTarget if the mouse left/entered the browser window
\t\t\tif ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {
\t\t\t\tevent.type = handleObj.origType;
\t\t\t\tret = handleObj.handler.apply( this, arguments );
\t\t\t\tevent.type = fix;
\t\t\t}
\t\t\treturn ret;
\t\t}
\t};
} );

// IE submit delegation
if ( !support.submit ) {

\tjQuery.event.special.submit = {
\t\tsetup: function() {

\t\t\t// Only need this for delegated form submit events
\t\t\tif ( jQuery.nodeName( this, \"form\" ) ) {
\t\t\t\treturn false;
\t\t\t}

\t\t\t// Lazy-add a submit handler when a descendant form may potentially be submitted
\t\t\tjQuery.event.add( this, \"click._submit keypress._submit\", function( e ) {

\t\t\t\t// Node name check avoids a VML-related crash in IE (#9807)
\t\t\t\tvar elem = e.target,
\t\t\t\t\tform = jQuery.nodeName( elem, \"input\" ) || jQuery.nodeName( elem, \"button\" ) ?

\t\t\t\t\t\t// Support: IE <=8
\t\t\t\t\t\t// We use jQuery.prop instead of elem.form
\t\t\t\t\t\t// to allow fixing the IE8 delegated submit issue (gh-2332)
\t\t\t\t\t\t// by 3rd party polyfills/workarounds.
\t\t\t\t\t\tjQuery.prop( elem, \"form\" ) :
\t\t\t\t\t\tundefined;

\t\t\t\tif ( form && !jQuery._data( form, \"submit\" ) ) {
\t\t\t\t\tjQuery.event.add( form, \"submit._submit\", function( event ) {
\t\t\t\t\t\tevent._submitBubble = true;
\t\t\t\t\t} );
\t\t\t\t\tjQuery._data( form, \"submit\", true );
\t\t\t\t}
\t\t\t} );

\t\t\t// return undefined since we don't need an event listener
\t\t},

\t\tpostDispatch: function( event ) {

\t\t\t// If form was submitted by the user, bubble the event up the tree
\t\t\tif ( event._submitBubble ) {
\t\t\t\tdelete event._submitBubble;
\t\t\t\tif ( this.parentNode && !event.isTrigger ) {
\t\t\t\t\tjQuery.event.simulate( \"submit\", this.parentNode, event );
\t\t\t\t}
\t\t\t}
\t\t},

\t\tteardown: function() {

\t\t\t// Only need this for delegated form submit events
\t\t\tif ( jQuery.nodeName( this, \"form\" ) ) {
\t\t\t\treturn false;
\t\t\t}

\t\t\t// Remove delegated handlers; cleanData eventually reaps submit handlers attached above
\t\t\tjQuery.event.remove( this, \"._submit\" );
\t\t}
\t};
}

// IE change delegation and checkbox/radio fix
if ( !support.change ) {

\tjQuery.event.special.change = {

\t\tsetup: function() {

\t\t\tif ( rformElems.test( this.nodeName ) ) {

\t\t\t\t// IE doesn't fire change on a check/radio until blur; trigger it on click
\t\t\t\t// after a propertychange. Eat the blur-change in special.change.handle.
\t\t\t\t// This still fires onchange a second time for check/radio after blur.
\t\t\t\tif ( this.type === \"checkbox\" || this.type === \"radio\" ) {
\t\t\t\t\tjQuery.event.add( this, \"propertychange._change\", function( event ) {
\t\t\t\t\t\tif ( event.originalEvent.propertyName === \"checked\" ) {
\t\t\t\t\t\t\tthis._justChanged = true;
\t\t\t\t\t\t}
\t\t\t\t\t} );
\t\t\t\t\tjQuery.event.add( this, \"click._change\", function( event ) {
\t\t\t\t\t\tif ( this._justChanged && !event.isTrigger ) {
\t\t\t\t\t\t\tthis._justChanged = false;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Allow triggered, simulated change events (#11500)
\t\t\t\t\t\tjQuery.event.simulate( \"change\", this, event );
\t\t\t\t\t} );
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t}

\t\t\t// Delegated event; lazy-add a change handler on descendant inputs
\t\t\tjQuery.event.add( this, \"beforeactivate._change\", function( e ) {
\t\t\t\tvar elem = e.target;

\t\t\t\tif ( rformElems.test( elem.nodeName ) && !jQuery._data( elem, \"change\" ) ) {
\t\t\t\t\tjQuery.event.add( elem, \"change._change\", function( event ) {
\t\t\t\t\t\tif ( this.parentNode && !event.isSimulated && !event.isTrigger ) {
\t\t\t\t\t\t\tjQuery.event.simulate( \"change\", this.parentNode, event );
\t\t\t\t\t\t}
\t\t\t\t\t} );
\t\t\t\t\tjQuery._data( elem, \"change\", true );
\t\t\t\t}
\t\t\t} );
\t\t},

\t\thandle: function( event ) {
\t\t\tvar elem = event.target;

\t\t\t// Swallow native change events from checkbox/radio, we already triggered them above
\t\t\tif ( this !== elem || event.isSimulated || event.isTrigger ||
\t\t\t\t( elem.type !== \"radio\" && elem.type !== \"checkbox\" ) ) {

\t\t\t\treturn event.handleObj.handler.apply( this, arguments );
\t\t\t}
\t\t},

\t\tteardown: function() {
\t\t\tjQuery.event.remove( this, \"._change\" );

\t\t\treturn !rformElems.test( this.nodeName );
\t\t}
\t};
}

// Support: Firefox
// Firefox doesn't have focus(in | out) events
// Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
//
// Support: Chrome, Safari
// focus(in | out) events fire after focus & blur events,
// which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
// Related ticket - https://code.google.com/p/chromium/issues/detail?id=449857
if ( !support.focusin ) {
\tjQuery.each( { focus: \"focusin\", blur: \"focusout\" }, function( orig, fix ) {

\t\t// Attach a single capturing handler on the document while someone wants focusin/focusout
\t\tvar handler = function( event ) {
\t\t\tjQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );
\t\t};

\t\tjQuery.event.special[ fix ] = {
\t\t\tsetup: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = jQuery._data( doc, fix );

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.addEventListener( orig, handler, true );
\t\t\t\t}
\t\t\t\tjQuery._data( doc, fix, ( attaches || 0 ) + 1 );
\t\t\t},
\t\t\tteardown: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = jQuery._data( doc, fix ) - 1;

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.removeEventListener( orig, handler, true );
\t\t\t\t\tjQuery._removeData( doc, fix );
\t\t\t\t} else {
\t\t\t\t\tjQuery._data( doc, fix, attaches );
\t\t\t\t}
\t\t\t}
\t\t};
\t} );
}

jQuery.fn.extend( {

\ton: function( types, selector, data, fn ) {
\t\treturn on( this, types, selector, data, fn );
\t},
\tone: function( types, selector, data, fn ) {
\t\treturn on( this, types, selector, data, fn, 1 );
\t},
\toff: function( types, selector, fn ) {
\t\tvar handleObj, type;
\t\tif ( types && types.preventDefault && types.handleObj ) {

\t\t\t// ( event )  dispatched jQuery.Event
\t\t\thandleObj = types.handleObj;
\t\t\tjQuery( types.delegateTarget ).off(
\t\t\t\thandleObj.namespace ?
\t\t\t\t\thandleObj.origType + \".\" + handleObj.namespace :
\t\t\t\t\thandleObj.origType,
\t\t\t\thandleObj.selector,
\t\t\t\thandleObj.handler
\t\t\t);
\t\t\treturn this;
\t\t}
\t\tif ( typeof types === \"object\" ) {

\t\t\t// ( types-object [, selector] )
\t\t\tfor ( type in types ) {
\t\t\t\tthis.off( type, selector, types[ type ] );
\t\t\t}
\t\t\treturn this;
\t\t}
\t\tif ( selector === false || typeof selector === \"function\" ) {

\t\t\t// ( types [, fn] )
\t\t\tfn = selector;
\t\t\tselector = undefined;
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t}
\t\treturn this.each( function() {
\t\t\tjQuery.event.remove( this, types, fn, selector );
\t\t} );
\t},

\ttrigger: function( type, data ) {
\t\treturn this.each( function() {
\t\t\tjQuery.event.trigger( type, data, this );
\t\t} );
\t},
\ttriggerHandler: function( type, data ) {
\t\tvar elem = this[ 0 ];
\t\tif ( elem ) {
\t\t\treturn jQuery.event.trigger( type, data, elem, true );
\t\t}
\t}
} );


var rinlinejQuery = / jQuery\\d+=\"(?:null|\\d+)\"/g,
\trnoshimcache = new RegExp( \"<(?:\" + nodeNames + \")[\\\\s/>]\", \"i\" ),
\trxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\\w:-]+)[^>]*)\\/>/gi,

\t// Support: IE 10-11, Edge 10240+
\t// In IE/Edge using regex groups here causes severe slowdowns.
\t// See https://connect.microsoft.com/IE/feedback/details/1736512/
\trnoInnerhtml = /<script|<style|<link/i,

\t// checked=\"checked\" or checked
\trchecked = /checked\\s*(?:[^=]|=\\s*.checked.)/i,
\trscriptTypeMasked = /^true\\/(.*)/,
\trcleanScript = /^\\s*<!(?:\\[CDATA\\[|--)|(?:\\]\\]|--)>\\s*\$/g,
\tsafeFragment = createSafeFragment( document ),
\tfragmentDiv = safeFragment.appendChild( document.createElement( \"div\" ) );

// Support: IE<8
// Manipulating tables requires a tbody
function manipulationTarget( elem, content ) {
\treturn jQuery.nodeName( elem, \"table\" ) &&
\t\tjQuery.nodeName( content.nodeType !== 11 ? content : content.firstChild, \"tr\" ) ?

\t\telem.getElementsByTagName( \"tbody\" )[ 0 ] ||
\t\t\telem.appendChild( elem.ownerDocument.createElement( \"tbody\" ) ) :
\t\telem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
\telem.type = ( jQuery.find.attr( elem, \"type\" ) !== null ) + \"/\" + elem.type;
\treturn elem;
}
function restoreScript( elem ) {
\tvar match = rscriptTypeMasked.exec( elem.type );
\tif ( match ) {
\t\telem.type = match[ 1 ];
\t} else {
\t\telem.removeAttribute( \"type\" );
\t}
\treturn elem;
}

function cloneCopyEvent( src, dest ) {
\tif ( dest.nodeType !== 1 || !jQuery.hasData( src ) ) {
\t\treturn;
\t}

\tvar type, i, l,
\t\toldData = jQuery._data( src ),
\t\tcurData = jQuery._data( dest, oldData ),
\t\tevents = oldData.events;

\tif ( events ) {
\t\tdelete curData.handle;
\t\tcurData.events = {};

\t\tfor ( type in events ) {
\t\t\tfor ( i = 0, l = events[ type ].length; i < l; i++ ) {
\t\t\t\tjQuery.event.add( dest, type, events[ type ][ i ] );
\t\t\t}
\t\t}
\t}

\t// make the cloned public data object a copy from the original
\tif ( curData.data ) {
\t\tcurData.data = jQuery.extend( {}, curData.data );
\t}
}

function fixCloneNodeIssues( src, dest ) {
\tvar nodeName, e, data;

\t// We do not need to do anything for non-Elements
\tif ( dest.nodeType !== 1 ) {
\t\treturn;
\t}

\tnodeName = dest.nodeName.toLowerCase();

\t// IE6-8 copies events bound via attachEvent when using cloneNode.
\tif ( !support.noCloneEvent && dest[ jQuery.expando ] ) {
\t\tdata = jQuery._data( dest );

\t\tfor ( e in data.events ) {
\t\t\tjQuery.removeEvent( dest, e, data.handle );
\t\t}

\t\t// Event data gets referenced instead of copied if the expando gets copied too
\t\tdest.removeAttribute( jQuery.expando );
\t}

\t// IE blanks contents when cloning scripts, and tries to evaluate newly-set text
\tif ( nodeName === \"script\" && dest.text !== src.text ) {
\t\tdisableScript( dest ).text = src.text;
\t\trestoreScript( dest );

\t// IE6-10 improperly clones children of object elements using classid.
\t// IE10 throws NoModificationAllowedError if parent is null, #12132.
\t} else if ( nodeName === \"object\" ) {
\t\tif ( dest.parentNode ) {
\t\t\tdest.outerHTML = src.outerHTML;
\t\t}

\t\t// This path appears unavoidable for IE9. When cloning an object
\t\t// element in IE9, the outerHTML strategy above is not sufficient.
\t\t// If the src has innerHTML and the destination does not,
\t\t// copy the src.innerHTML into the dest.innerHTML. #10324
\t\tif ( support.html5Clone && ( src.innerHTML && !jQuery.trim( dest.innerHTML ) ) ) {
\t\t\tdest.innerHTML = src.innerHTML;
\t\t}

\t} else if ( nodeName === \"input\" && rcheckableType.test( src.type ) ) {

\t\t// IE6-8 fails to persist the checked state of a cloned checkbox
\t\t// or radio button. Worse, IE6-7 fail to give the cloned element
\t\t// a checked appearance if the defaultChecked value isn't also set

\t\tdest.defaultChecked = dest.checked = src.checked;

\t\t// IE6-7 get confused and end up setting the value of a cloned
\t\t// checkbox/radio button to an empty string instead of \"on\"
\t\tif ( dest.value !== src.value ) {
\t\t\tdest.value = src.value;
\t\t}

\t// IE6-8 fails to return the selected option to the default selected
\t// state when cloning options
\t} else if ( nodeName === \"option\" ) {
\t\tdest.defaultSelected = dest.selected = src.defaultSelected;

\t// IE6-8 fails to set the defaultValue to the correct value when
\t// cloning other types of input fields
\t} else if ( nodeName === \"input\" || nodeName === \"textarea\" ) {
\t\tdest.defaultValue = src.defaultValue;
\t}
}

function domManip( collection, args, callback, ignored ) {

\t// Flatten any nested arrays
\targs = concat.apply( [], args );

\tvar first, node, hasScripts,
\t\tscripts, doc, fragment,
\t\ti = 0,
\t\tl = collection.length,
\t\tiNoClone = l - 1,
\t\tvalue = args[ 0 ],
\t\tisFunction = jQuery.isFunction( value );

\t// We can't cloneNode fragments that contain checked, in WebKit
\tif ( isFunction ||
\t\t\t( l > 1 && typeof value === \"string\" &&
\t\t\t\t!support.checkClone && rchecked.test( value ) ) ) {
\t\treturn collection.each( function( index ) {
\t\t\tvar self = collection.eq( index );
\t\t\tif ( isFunction ) {
\t\t\t\targs[ 0 ] = value.call( this, index, self.html() );
\t\t\t}
\t\t\tdomManip( self, args, callback, ignored );
\t\t} );
\t}

\tif ( l ) {
\t\tfragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );
\t\tfirst = fragment.firstChild;

\t\tif ( fragment.childNodes.length === 1 ) {
\t\t\tfragment = first;
\t\t}

\t\t// Require either new content or an interest in ignored elements to invoke the callback
\t\tif ( first || ignored ) {
\t\t\tscripts = jQuery.map( getAll( fragment, \"script\" ), disableScript );
\t\t\thasScripts = scripts.length;

\t\t\t// Use the original fragment for the last item
\t\t\t// instead of the first because it can end up
\t\t\t// being emptied incorrectly in certain situations (#8070).
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tnode = fragment;

\t\t\t\tif ( i !== iNoClone ) {
\t\t\t\t\tnode = jQuery.clone( node, true, true );

\t\t\t\t\t// Keep references to cloned scripts for later restoration
\t\t\t\t\tif ( hasScripts ) {

\t\t\t\t\t\t// Support: Android<4.1, PhantomJS<2
\t\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\t\tjQuery.merge( scripts, getAll( node, \"script\" ) );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tcallback.call( collection[ i ], node, i );
\t\t\t}

\t\t\tif ( hasScripts ) {
\t\t\t\tdoc = scripts[ scripts.length - 1 ].ownerDocument;

\t\t\t\t// Reenable scripts
\t\t\t\tjQuery.map( scripts, restoreScript );

\t\t\t\t// Evaluate executable scripts on first document insertion
\t\t\t\tfor ( i = 0; i < hasScripts; i++ ) {
\t\t\t\t\tnode = scripts[ i ];
\t\t\t\t\tif ( rscriptType.test( node.type || \"\" ) &&
\t\t\t\t\t\t!jQuery._data( node, \"globalEval\" ) &&
\t\t\t\t\t\tjQuery.contains( doc, node ) ) {

\t\t\t\t\t\tif ( node.src ) {

\t\t\t\t\t\t\t// Optional AJAX dependency, but won't run scripts if not present
\t\t\t\t\t\t\tif ( jQuery._evalUrl ) {
\t\t\t\t\t\t\t\tjQuery._evalUrl( node.src );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tjQuery.globalEval(
\t\t\t\t\t\t\t\t( node.text || node.textContent || node.innerHTML || \"\" )
\t\t\t\t\t\t\t\t\t.replace( rcleanScript, \"\" )
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Fix #11809: Avoid leaking memory
\t\t\tfragment = first = null;
\t\t}
\t}

\treturn collection;
}

function remove( elem, selector, keepData ) {
\tvar node,
\t\telems = selector ? jQuery.filter( selector, elem ) : elem,
\t\ti = 0;

\tfor ( ; ( node = elems[ i ] ) != null; i++ ) {

\t\tif ( !keepData && node.nodeType === 1 ) {
\t\t\tjQuery.cleanData( getAll( node ) );
\t\t}

\t\tif ( node.parentNode ) {
\t\t\tif ( keepData && jQuery.contains( node.ownerDocument, node ) ) {
\t\t\t\tsetGlobalEval( getAll( node, \"script\" ) );
\t\t\t}
\t\t\tnode.parentNode.removeChild( node );
\t\t}
\t}

\treturn elem;
}

jQuery.extend( {
\thtmlPrefilter: function( html ) {
\t\treturn html.replace( rxhtmlTag, \"<\$1></\$2>\" );
\t},

\tclone: function( elem, dataAndEvents, deepDataAndEvents ) {
\t\tvar destElements, node, clone, i, srcElements,
\t\t\tinPage = jQuery.contains( elem.ownerDocument, elem );

\t\tif ( support.html5Clone || jQuery.isXMLDoc( elem ) ||
\t\t\t!rnoshimcache.test( \"<\" + elem.nodeName + \">\" ) ) {

\t\t\tclone = elem.cloneNode( true );

\t\t// IE<=8 does not properly clone detached, unknown element nodes
\t\t} else {
\t\t\tfragmentDiv.innerHTML = elem.outerHTML;
\t\t\tfragmentDiv.removeChild( clone = fragmentDiv.firstChild );
\t\t}

\t\tif ( ( !support.noCloneEvent || !support.noCloneChecked ) &&
\t\t\t\t( elem.nodeType === 1 || elem.nodeType === 11 ) && !jQuery.isXMLDoc( elem ) ) {

\t\t\t// We eschew Sizzle here for performance reasons: http://jsperf.com/getall-vs-sizzle/2
\t\t\tdestElements = getAll( clone );
\t\t\tsrcElements = getAll( elem );

\t\t\t// Fix all IE cloning issues
\t\t\tfor ( i = 0; ( node = srcElements[ i ] ) != null; ++i ) {

\t\t\t\t// Ensure that the destination node is not null; Fixes #9587
\t\t\t\tif ( destElements[ i ] ) {
\t\t\t\t\tfixCloneNodeIssues( node, destElements[ i ] );
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Copy the events from the original to the clone
\t\tif ( dataAndEvents ) {
\t\t\tif ( deepDataAndEvents ) {
\t\t\t\tsrcElements = srcElements || getAll( elem );
\t\t\t\tdestElements = destElements || getAll( clone );

\t\t\t\tfor ( i = 0; ( node = srcElements[ i ] ) != null; i++ ) {
\t\t\t\t\tcloneCopyEvent( node, destElements[ i ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tcloneCopyEvent( elem, clone );
\t\t\t}
\t\t}

\t\t// Preserve script evaluation history
\t\tdestElements = getAll( clone, \"script\" );
\t\tif ( destElements.length > 0 ) {
\t\t\tsetGlobalEval( destElements, !inPage && getAll( elem, \"script\" ) );
\t\t}

\t\tdestElements = srcElements = node = null;

\t\t// Return the cloned set
\t\treturn clone;
\t},

\tcleanData: function( elems, /* internal */ forceAcceptData ) {
\t\tvar elem, type, id, data,
\t\t\ti = 0,
\t\t\tinternalKey = jQuery.expando,
\t\t\tcache = jQuery.cache,
\t\t\tattributes = support.attributes,
\t\t\tspecial = jQuery.event.special;

\t\tfor ( ; ( elem = elems[ i ] ) != null; i++ ) {
\t\t\tif ( forceAcceptData || acceptData( elem ) ) {

\t\t\t\tid = elem[ internalKey ];
\t\t\t\tdata = id && cache[ id ];

\t\t\t\tif ( data ) {
\t\t\t\t\tif ( data.events ) {
\t\t\t\t\t\tfor ( type in data.events ) {
\t\t\t\t\t\t\tif ( special[ type ] ) {
\t\t\t\t\t\t\t\tjQuery.event.remove( elem, type );

\t\t\t\t\t\t\t// This is a shortcut to avoid jQuery.event.remove's overhead
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tjQuery.removeEvent( elem, type, data.handle );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Remove cache only if it was not already removed by jQuery.event.remove
\t\t\t\t\tif ( cache[ id ] ) {

\t\t\t\t\t\tdelete cache[ id ];

\t\t\t\t\t\t// Support: IE<9
\t\t\t\t\t\t// IE does not allow us to delete expando properties from nodes
\t\t\t\t\t\t// IE creates expando attributes along with the property
\t\t\t\t\t\t// IE does not have a removeAttribute function on Document nodes
\t\t\t\t\t\tif ( !attributes && typeof elem.removeAttribute !== \"undefined\" ) {
\t\t\t\t\t\t\telem.removeAttribute( internalKey );

\t\t\t\t\t\t// Webkit & Blink performance suffers when deleting properties
\t\t\t\t\t\t// from DOM nodes, so set to undefined instead
\t\t\t\t\t\t// https://code.google.com/p/chromium/issues/detail?id=378607
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telem[ internalKey ] = undefined;
\t\t\t\t\t\t}

\t\t\t\t\t\tdeletedIds.push( id );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}
} );

jQuery.fn.extend( {

\t// Keep domManip exposed until 3.0 (gh-2225)
\tdomManip: domManip,

\tdetach: function( selector ) {
\t\treturn remove( this, selector, true );
\t},

\tremove: function( selector ) {
\t\treturn remove( this, selector );
\t},

\ttext: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\treturn value === undefined ?
\t\t\t\tjQuery.text( this ) :
\t\t\t\tthis.empty().append(
\t\t\t\t\t( this[ 0 ] && this[ 0 ].ownerDocument || document ).createTextNode( value )
\t\t\t\t);
\t\t}, null, value, arguments.length );
\t},

\tappend: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.appendChild( elem );
\t\t\t}
\t\t} );
\t},

\tprepend: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.insertBefore( elem, target.firstChild );
\t\t\t}
\t\t} );
\t},

\tbefore: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this );
\t\t\t}
\t\t} );
\t},

\tafter: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this.nextSibling );
\t\t\t}
\t\t} );
\t},

\tempty: function() {
\t\tvar elem,
\t\t\ti = 0;

\t\tfor ( ; ( elem = this[ i ] ) != null; i++ ) {

\t\t\t// Remove element nodes and prevent memory leaks
\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\tjQuery.cleanData( getAll( elem, false ) );
\t\t\t}

\t\t\t// Remove any remaining nodes
\t\t\twhile ( elem.firstChild ) {
\t\t\t\telem.removeChild( elem.firstChild );
\t\t\t}

\t\t\t// If this is a select, ensure that it displays empty (#12336)
\t\t\t// Support: IE<9
\t\t\tif ( elem.options && jQuery.nodeName( elem, \"select\" ) ) {
\t\t\t\telem.options.length = 0;
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tclone: function( dataAndEvents, deepDataAndEvents ) {
\t\tdataAndEvents = dataAndEvents == null ? false : dataAndEvents;
\t\tdeepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

\t\treturn this.map( function() {
\t\t\treturn jQuery.clone( this, dataAndEvents, deepDataAndEvents );
\t\t} );
\t},

\thtml: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\tvar elem = this[ 0 ] || {},
\t\t\t\ti = 0,
\t\t\t\tl = this.length;

\t\t\tif ( value === undefined ) {
\t\t\t\treturn elem.nodeType === 1 ?
\t\t\t\t\telem.innerHTML.replace( rinlinejQuery, \"\" ) :
\t\t\t\t\tundefined;
\t\t\t}

\t\t\t// See if we can take a shortcut and just use innerHTML
\t\t\tif ( typeof value === \"string\" && !rnoInnerhtml.test( value ) &&
\t\t\t\t( support.htmlSerialize || !rnoshimcache.test( value )  ) &&
\t\t\t\t( support.leadingWhitespace || !rleadingWhitespace.test( value ) ) &&
\t\t\t\t!wrapMap[ ( rtagName.exec( value ) || [ \"\", \"\" ] )[ 1 ].toLowerCase() ] ) {

\t\t\t\tvalue = jQuery.htmlPrefilter( value );

\t\t\t\ttry {
\t\t\t\t\tfor ( ; i < l; i++ ) {

\t\t\t\t\t\t// Remove element nodes and prevent memory leaks
\t\t\t\t\t\telem = this[ i ] || {};
\t\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\t\tjQuery.cleanData( getAll( elem, false ) );
\t\t\t\t\t\t\telem.innerHTML = value;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\telem = 0;

\t\t\t\t// If using innerHTML throws an exception, use the fallback method
\t\t\t\t} catch ( e ) {}
\t\t\t}

\t\t\tif ( elem ) {
\t\t\t\tthis.empty().append( value );
\t\t\t}
\t\t}, null, value, arguments.length );
\t},

\treplaceWith: function() {
\t\tvar ignored = [];

\t\t// Make the changes, replacing each non-ignored context element with the new content
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tvar parent = this.parentNode;

\t\t\tif ( jQuery.inArray( this, ignored ) < 0 ) {
\t\t\t\tjQuery.cleanData( getAll( this ) );
\t\t\t\tif ( parent ) {
\t\t\t\t\tparent.replaceChild( elem, this );
\t\t\t\t}
\t\t\t}

\t\t// Force callback invocation
\t\t}, ignored );
\t}
} );

jQuery.each( {
\tappendTo: \"append\",
\tprependTo: \"prepend\",
\tinsertBefore: \"before\",
\tinsertAfter: \"after\",
\treplaceAll: \"replaceWith\"
}, function( name, original ) {
\tjQuery.fn[ name ] = function( selector ) {
\t\tvar elems,
\t\t\ti = 0,
\t\t\tret = [],
\t\t\tinsert = jQuery( selector ),
\t\t\tlast = insert.length - 1;

\t\tfor ( ; i <= last; i++ ) {
\t\t\telems = i === last ? this : this.clone( true );
\t\t\tjQuery( insert[ i ] )[ original ]( elems );

\t\t\t// Modern browsers can apply jQuery collections as arrays, but oldIE needs a .get()
\t\t\tpush.apply( ret, elems.get() );
\t\t}

\t\treturn this.pushStack( ret );
\t};
} );


var iframe,
\telemdisplay = {

\t\t// Support: Firefox
\t\t// We have to pre-define these values for FF (#10227)
\t\tHTML: \"block\",
\t\tBODY: \"block\"
\t};

/**
 * Retrieve the actual display of a element
 * @param {String} name nodeName of the element
 * @param {Object} doc Document object
 */

// Called only from within defaultDisplay
function actualDisplay( name, doc ) {
\tvar elem = jQuery( doc.createElement( name ) ).appendTo( doc.body ),

\t\tdisplay = jQuery.css( elem[ 0 ], \"display\" );

\t// We don't have any data stored on the element,
\t// so use \"detach\" method as fast way to get rid of the element
\telem.detach();

\treturn display;
}

/**
 * Try to determine the default display value of an element
 * @param {String} nodeName
 */
function defaultDisplay( nodeName ) {
\tvar doc = document,
\t\tdisplay = elemdisplay[ nodeName ];

\tif ( !display ) {
\t\tdisplay = actualDisplay( nodeName, doc );

\t\t// If the simple way fails, read from inside an iframe
\t\tif ( display === \"none\" || !display ) {

\t\t\t// Use the already-created iframe if possible
\t\t\tiframe = ( iframe || jQuery( \"<iframe frameborder='0' width='0' height='0'/>\" ) )
\t\t\t\t.appendTo( doc.documentElement );

\t\t\t// Always write a new HTML skeleton so Webkit and Firefox don't choke on reuse
\t\t\tdoc = ( iframe[ 0 ].contentWindow || iframe[ 0 ].contentDocument ).document;

\t\t\t// Support: IE
\t\t\tdoc.write();
\t\t\tdoc.close();

\t\t\tdisplay = actualDisplay( nodeName, doc );
\t\t\tiframe.detach();
\t\t}

\t\t// Store the correct default display
\t\telemdisplay[ nodeName ] = display;
\t}

\treturn display;
}
var rmargin = ( /^margin/ );

var rnumnonpx = new RegExp( \"^(\" + pnum + \")(?!px)[a-z%]+\$\", \"i\" );

var swap = function( elem, options, callback, args ) {
\tvar ret, name,
\t\told = {};

\t// Remember the old values, and insert the new ones
\tfor ( name in options ) {
\t\told[ name ] = elem.style[ name ];
\t\telem.style[ name ] = options[ name ];
\t}

\tret = callback.apply( elem, args || [] );

\t// Revert the old values
\tfor ( name in options ) {
\t\telem.style[ name ] = old[ name ];
\t}

\treturn ret;
};


var documentElement = document.documentElement;



( function() {
\tvar pixelPositionVal, pixelMarginRightVal, boxSizingReliableVal,
\t\treliableHiddenOffsetsVal, reliableMarginRightVal, reliableMarginLeftVal,
\t\tcontainer = document.createElement( \"div\" ),
\t\tdiv = document.createElement( \"div\" );

\t// Finish early in limited (non-browser) environments
\tif ( !div.style ) {
\t\treturn;
\t}

\tdiv.style.cssText = \"float:left;opacity:.5\";

\t// Support: IE<9
\t// Make sure that element opacity exists (as opposed to filter)
\tsupport.opacity = div.style.opacity === \"0.5\";

\t// Verify style float existence
\t// (IE uses styleFloat instead of cssFloat)
\tsupport.cssFloat = !!div.style.cssFloat;

\tdiv.style.backgroundClip = \"content-box\";
\tdiv.cloneNode( true ).style.backgroundClip = \"\";
\tsupport.clearCloneStyle = div.style.backgroundClip === \"content-box\";

\tcontainer = document.createElement( \"div\" );
\tcontainer.style.cssText = \"border:0;width:8px;height:0;top:0;left:-9999px;\" +
\t\t\"padding:0;margin-top:1px;position:absolute\";
\tdiv.innerHTML = \"\";
\tcontainer.appendChild( div );

\t// Support: Firefox<29, Android 2.3
\t// Vendor-prefix box-sizing
\tsupport.boxSizing = div.style.boxSizing === \"\" || div.style.MozBoxSizing === \"\" ||
\t\tdiv.style.WebkitBoxSizing === \"\";

\tjQuery.extend( support, {
\t\treliableHiddenOffsets: function() {
\t\t\tif ( pixelPositionVal == null ) {
\t\t\t\tcomputeStyleTests();
\t\t\t}
\t\t\treturn reliableHiddenOffsetsVal;
\t\t},

\t\tboxSizingReliable: function() {

\t\t\t// We're checking for pixelPositionVal here instead of boxSizingReliableVal
\t\t\t// since that compresses better and they're computed together anyway.
\t\t\tif ( pixelPositionVal == null ) {
\t\t\t\tcomputeStyleTests();
\t\t\t}
\t\t\treturn boxSizingReliableVal;
\t\t},

\t\tpixelMarginRight: function() {

\t\t\t// Support: Android 4.0-4.3
\t\t\tif ( pixelPositionVal == null ) {
\t\t\t\tcomputeStyleTests();
\t\t\t}
\t\t\treturn pixelMarginRightVal;
\t\t},

\t\tpixelPosition: function() {
\t\t\tif ( pixelPositionVal == null ) {
\t\t\t\tcomputeStyleTests();
\t\t\t}
\t\t\treturn pixelPositionVal;
\t\t},

\t\treliableMarginRight: function() {

\t\t\t// Support: Android 2.3
\t\t\tif ( pixelPositionVal == null ) {
\t\t\t\tcomputeStyleTests();
\t\t\t}
\t\t\treturn reliableMarginRightVal;
\t\t},

\t\treliableMarginLeft: function() {

\t\t\t// Support: IE <=8 only, Android 4.0 - 4.3 only, Firefox <=3 - 37
\t\t\tif ( pixelPositionVal == null ) {
\t\t\t\tcomputeStyleTests();
\t\t\t}
\t\t\treturn reliableMarginLeftVal;
\t\t}
\t} );

\tfunction computeStyleTests() {
\t\tvar contents, divStyle,
\t\t\tdocumentElement = document.documentElement;

\t\t// Setup
\t\tdocumentElement.appendChild( container );

\t\tdiv.style.cssText =

\t\t\t// Support: Android 2.3
\t\t\t// Vendor-prefix box-sizing
\t\t\t\"-webkit-box-sizing:border-box;box-sizing:border-box;\" +
\t\t\t\"position:relative;display:block;\" +
\t\t\t\"margin:auto;border:1px;padding:1px;\" +
\t\t\t\"top:1%;width:50%\";

\t\t// Support: IE<9
\t\t// Assume reasonable values in the absence of getComputedStyle
\t\tpixelPositionVal = boxSizingReliableVal = reliableMarginLeftVal = false;
\t\tpixelMarginRightVal = reliableMarginRightVal = true;

\t\t// Check for getComputedStyle so that this code is not run in IE<9.
\t\tif ( window.getComputedStyle ) {
\t\t\tdivStyle = window.getComputedStyle( div );
\t\t\tpixelPositionVal = ( divStyle || {} ).top !== \"1%\";
\t\t\treliableMarginLeftVal = ( divStyle || {} ).marginLeft === \"2px\";
\t\t\tboxSizingReliableVal = ( divStyle || { width: \"4px\" } ).width === \"4px\";

\t\t\t// Support: Android 4.0 - 4.3 only
\t\t\t// Some styles come back with percentage values, even though they shouldn't
\t\t\tdiv.style.marginRight = \"50%\";
\t\t\tpixelMarginRightVal = ( divStyle || { marginRight: \"4px\" } ).marginRight === \"4px\";

\t\t\t// Support: Android 2.3 only
\t\t\t// Div with explicit width and no margin-right incorrectly
\t\t\t// gets computed margin-right based on width of container (#3333)
\t\t\t// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right
\t\t\tcontents = div.appendChild( document.createElement( \"div\" ) );

\t\t\t// Reset CSS: box-sizing; display; margin; border; padding
\t\t\tcontents.style.cssText = div.style.cssText =

\t\t\t\t// Support: Android 2.3
\t\t\t\t// Vendor-prefix box-sizing
\t\t\t\t\"-webkit-box-sizing:content-box;-moz-box-sizing:content-box;\" +
\t\t\t\t\"box-sizing:content-box;display:block;margin:0;border:0;padding:0\";
\t\t\tcontents.style.marginRight = contents.style.width = \"0\";
\t\t\tdiv.style.width = \"1px\";

\t\t\treliableMarginRightVal =
\t\t\t\t!parseFloat( ( window.getComputedStyle( contents ) || {} ).marginRight );

\t\t\tdiv.removeChild( contents );
\t\t}

\t\t// Support: IE6-8
\t\t// First check that getClientRects works as expected
\t\t// Check if table cells still have offsetWidth/Height when they are set
\t\t// to display:none and there are still other visible table cells in a
\t\t// table row; if so, offsetWidth/Height are not reliable for use when
\t\t// determining if an element has been hidden directly using
\t\t// display:none (it is still safe to use offsets if a parent element is
\t\t// hidden; don safety goggles and see bug #4512 for more information).
\t\tdiv.style.display = \"none\";
\t\treliableHiddenOffsetsVal = div.getClientRects().length === 0;
\t\tif ( reliableHiddenOffsetsVal ) {
\t\t\tdiv.style.display = \"\";
\t\t\tdiv.innerHTML = \"<table><tr><td></td><td>t</td></tr></table>\";
\t\t\tdiv.childNodes[ 0 ].style.borderCollapse = \"separate\";
\t\t\tcontents = div.getElementsByTagName( \"td\" );
\t\t\tcontents[ 0 ].style.cssText = \"margin:0;border:0;padding:0;display:none\";
\t\t\treliableHiddenOffsetsVal = contents[ 0 ].offsetHeight === 0;
\t\t\tif ( reliableHiddenOffsetsVal ) {
\t\t\t\tcontents[ 0 ].style.display = \"\";
\t\t\t\tcontents[ 1 ].style.display = \"none\";
\t\t\t\treliableHiddenOffsetsVal = contents[ 0 ].offsetHeight === 0;
\t\t\t}
\t\t}

\t\t// Teardown
\t\tdocumentElement.removeChild( container );
\t}

} )();


var getStyles, curCSS,
\trposition = /^(top|right|bottom|left)\$/;

if ( window.getComputedStyle ) {
\tgetStyles = function( elem ) {

\t\t// Support: IE<=11+, Firefox<=30+ (#15098, #14150)
\t\t// IE throws on elements created in popups
\t\t// FF meanwhile throws on frame elements through \"defaultView.getComputedStyle\"
\t\tvar view = elem.ownerDocument.defaultView;

\t\tif ( !view || !view.opener ) {
\t\t\tview = window;
\t\t}

\t\treturn view.getComputedStyle( elem );
\t};

\tcurCSS = function( elem, name, computed ) {
\t\tvar width, minWidth, maxWidth, ret,
\t\t\tstyle = elem.style;

\t\tcomputed = computed || getStyles( elem );

\t\t// getPropertyValue is only needed for .css('filter') in IE9, see #12537
\t\tret = computed ? computed.getPropertyValue( name ) || computed[ name ] : undefined;

\t\t// Support: Opera 12.1x only
\t\t// Fall back to style even without computed
\t\t// computed is undefined for elems on document fragments
\t\tif ( ( ret === \"\" || ret === undefined ) && !jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\tret = jQuery.style( elem, name );
\t\t}

\t\tif ( computed ) {

\t\t\t// A tribute to the \"awesome hack by Dean Edwards\"
\t\t\t// Chrome < 17 and Safari 5.0 uses \"computed value\"
\t\t\t// instead of \"used value\" for margin-right
\t\t\t// Safari 5.1.7 (at least) returns percentage for a larger set of values,
\t\t\t// but width seems to be reliably pixels
\t\t\t// this is against the CSSOM draft spec:
\t\t\t// http://dev.w3.org/csswg/cssom/#resolved-values
\t\t\tif ( !support.pixelMarginRight() && rnumnonpx.test( ret ) && rmargin.test( name ) ) {

\t\t\t\t// Remember the original values
\t\t\t\twidth = style.width;
\t\t\t\tminWidth = style.minWidth;
\t\t\t\tmaxWidth = style.maxWidth;

\t\t\t\t// Put in the new values to get a computed value out
\t\t\t\tstyle.minWidth = style.maxWidth = style.width = ret;
\t\t\t\tret = computed.width;

\t\t\t\t// Revert the changed values
\t\t\t\tstyle.width = width;
\t\t\t\tstyle.minWidth = minWidth;
\t\t\t\tstyle.maxWidth = maxWidth;
\t\t\t}
\t\t}

\t\t// Support: IE
\t\t// IE returns zIndex value as an integer.
\t\treturn ret === undefined ?
\t\t\tret :
\t\t\tret + \"\";
\t};
} else if ( documentElement.currentStyle ) {
\tgetStyles = function( elem ) {
\t\treturn elem.currentStyle;
\t};

\tcurCSS = function( elem, name, computed ) {
\t\tvar left, rs, rsLeft, ret,
\t\t\tstyle = elem.style;

\t\tcomputed = computed || getStyles( elem );
\t\tret = computed ? computed[ name ] : undefined;

\t\t// Avoid setting ret to empty string here
\t\t// so we don't default to auto
\t\tif ( ret == null && style && style[ name ] ) {
\t\t\tret = style[ name ];
\t\t}

\t\t// From the awesome hack by Dean Edwards
\t\t// http://erik.eae.net/archives/2007/07/27/18.54.15/#comment-102291

\t\t// If we're not dealing with a regular pixel number
\t\t// but a number that has a weird ending, we need to convert it to pixels
\t\t// but not position css attributes, as those are
\t\t// proportional to the parent element instead
\t\t// and we can't measure the parent instead because it
\t\t// might trigger a \"stacking dolls\" problem
\t\tif ( rnumnonpx.test( ret ) && !rposition.test( name ) ) {

\t\t\t// Remember the original values
\t\t\tleft = style.left;
\t\t\trs = elem.runtimeStyle;
\t\t\trsLeft = rs && rs.left;

\t\t\t// Put in the new values to get a computed value out
\t\t\tif ( rsLeft ) {
\t\t\t\trs.left = elem.currentStyle.left;
\t\t\t}
\t\t\tstyle.left = name === \"fontSize\" ? \"1em\" : ret;
\t\t\tret = style.pixelLeft + \"px\";

\t\t\t// Revert the changed values
\t\t\tstyle.left = left;
\t\t\tif ( rsLeft ) {
\t\t\t\trs.left = rsLeft;
\t\t\t}
\t\t}

\t\t// Support: IE
\t\t// IE returns zIndex value as an integer.
\t\treturn ret === undefined ?
\t\t\tret :
\t\t\tret + \"\" || \"auto\";
\t};
}




function addGetHookIf( conditionFn, hookFn ) {

\t// Define the hook, we'll check on the first run if it's really needed.
\treturn {
\t\tget: function() {
\t\t\tif ( conditionFn() ) {

\t\t\t\t// Hook not needed (or it's not possible to use it due
\t\t\t\t// to missing dependency), remove it.
\t\t\t\tdelete this.get;
\t\t\t\treturn;
\t\t\t}

\t\t\t// Hook needed; redefine it so that the support test is not executed again.
\t\t\treturn ( this.get = hookFn ).apply( this, arguments );
\t\t}
\t};
}


var

\t\tralpha = /alpha\\([^)]*\\)/i,
\tropacity = /opacity\\s*=\\s*([^)]*)/i,

\t// swappable if display is none or starts with table except
\t// \"table\", \"table-cell\", or \"table-caption\"
\t// see here for display values:
\t// https://developer.mozilla.org/en-US/docs/CSS/display
\trdisplayswap = /^(none|table(?!-c[ea]).+)/,
\trnumsplit = new RegExp( \"^(\" + pnum + \")(.*)\$\", \"i\" ),

\tcssShow = { position: \"absolute\", visibility: \"hidden\", display: \"block\" },
\tcssNormalTransform = {
\t\tletterSpacing: \"0\",
\t\tfontWeight: \"400\"
\t},

\tcssPrefixes = [ \"Webkit\", \"O\", \"Moz\", \"ms\" ],
\temptyStyle = document.createElement( \"div\" ).style;


// return a css property mapped to a potentially vendor prefixed property
function vendorPropName( name ) {

\t// shortcut for names that are not vendor prefixed
\tif ( name in emptyStyle ) {
\t\treturn name;
\t}

\t// check for vendor prefixed names
\tvar capName = name.charAt( 0 ).toUpperCase() + name.slice( 1 ),
\t\ti = cssPrefixes.length;

\twhile ( i-- ) {
\t\tname = cssPrefixes[ i ] + capName;
\t\tif ( name in emptyStyle ) {
\t\t\treturn name;
\t\t}
\t}
}

function showHide( elements, show ) {
\tvar display, elem, hidden,
\t\tvalues = [],
\t\tindex = 0,
\t\tlength = elements.length;

\tfor ( ; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}

\t\tvalues[ index ] = jQuery._data( elem, \"olddisplay\" );
\t\tdisplay = elem.style.display;
\t\tif ( show ) {

\t\t\t// Reset the inline display of this element to learn if it is
\t\t\t// being hidden by cascaded rules or not
\t\t\tif ( !values[ index ] && display === \"none\" ) {
\t\t\t\telem.style.display = \"\";
\t\t\t}

\t\t\t// Set elements which have been overridden with display: none
\t\t\t// in a stylesheet to whatever the default browser style is
\t\t\t// for such an element
\t\t\tif ( elem.style.display === \"\" && isHidden( elem ) ) {
\t\t\t\tvalues[ index ] =
\t\t\t\t\tjQuery._data( elem, \"olddisplay\", defaultDisplay( elem.nodeName ) );
\t\t\t}
\t\t} else {
\t\t\thidden = isHidden( elem );

\t\t\tif ( display && display !== \"none\" || !hidden ) {
\t\t\t\tjQuery._data(
\t\t\t\t\telem,
\t\t\t\t\t\"olddisplay\",
\t\t\t\t\thidden ? display : jQuery.css( elem, \"display\" )
\t\t\t\t);
\t\t\t}
\t\t}
\t}

\t// Set the display of most of the elements in a second loop
\t// to avoid the constant reflow
\tfor ( index = 0; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}
\t\tif ( !show || elem.style.display === \"none\" || elem.style.display === \"\" ) {
\t\t\telem.style.display = show ? values[ index ] || \"\" : \"none\";
\t\t}
\t}

\treturn elements;
}

function setPositiveNumber( elem, value, subtract ) {
\tvar matches = rnumsplit.exec( value );
\treturn matches ?

\t\t// Guard against undefined \"subtract\", e.g., when used as in cssHooks
\t\tMath.max( 0, matches[ 1 ] - ( subtract || 0 ) ) + ( matches[ 2 ] || \"px\" ) :
\t\tvalue;
}

function augmentWidthOrHeight( elem, name, extra, isBorderBox, styles ) {
\tvar i = extra === ( isBorderBox ? \"border\" : \"content\" ) ?

\t\t// If we already have the right measurement, avoid augmentation
\t\t4 :

\t\t// Otherwise initialize for horizontal or vertical properties
\t\tname === \"width\" ? 1 : 0,

\t\tval = 0;

\tfor ( ; i < 4; i += 2 ) {

\t\t// both box models exclude margin, so add it if we want it
\t\tif ( extra === \"margin\" ) {
\t\t\tval += jQuery.css( elem, extra + cssExpand[ i ], true, styles );
\t\t}

\t\tif ( isBorderBox ) {

\t\t\t// border-box includes padding, so remove it if we want content
\t\t\tif ( extra === \"content\" ) {
\t\t\t\tval -= jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );
\t\t\t}

\t\t\t// at this point, extra isn't border nor margin, so remove border
\t\t\tif ( extra !== \"margin\" ) {
\t\t\t\tval -= jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t} else {

\t\t\t// at this point, extra isn't content, so add padding
\t\t\tval += jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );

\t\t\t// at this point, extra isn't content nor padding, so add border
\t\t\tif ( extra !== \"padding\" ) {
\t\t\t\tval += jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t}
\t}

\treturn val;
}

function getWidthOrHeight( elem, name, extra ) {

\t// Start with offset property, which is equivalent to the border-box value
\tvar valueIsBorderBox = true,
\t\tval = name === \"width\" ? elem.offsetWidth : elem.offsetHeight,
\t\tstyles = getStyles( elem ),
\t\tisBorderBox = support.boxSizing &&
\t\t\tjQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\";

\t// some non-html elements return undefined for offsetWidth, so check for null/undefined
\t// svg - https://bugzilla.mozilla.org/show_bug.cgi?id=649285
\t// MathML - https://bugzilla.mozilla.org/show_bug.cgi?id=491668
\tif ( val <= 0 || val == null ) {

\t\t// Fall back to computed then uncomputed css if necessary
\t\tval = curCSS( elem, name, styles );
\t\tif ( val < 0 || val == null ) {
\t\t\tval = elem.style[ name ];
\t\t}

\t\t// Computed unit is not pixels. Stop here and return.
\t\tif ( rnumnonpx.test( val ) ) {
\t\t\treturn val;
\t\t}

\t\t// we need the check for style in case a browser which returns unreliable values
\t\t// for getComputedStyle silently falls back to the reliable elem.style
\t\tvalueIsBorderBox = isBorderBox &&
\t\t\t( support.boxSizingReliable() || val === elem.style[ name ] );

\t\t// Normalize \"\", auto, and prepare for extra
\t\tval = parseFloat( val ) || 0;
\t}

\t// use the active box-sizing model to add/subtract irrelevant styles
\treturn ( val +
\t\taugmentWidthOrHeight(
\t\t\telem,
\t\t\tname,
\t\t\textra || ( isBorderBox ? \"border\" : \"content\" ),
\t\t\tvalueIsBorderBox,
\t\t\tstyles
\t\t)
\t) + \"px\";
}

jQuery.extend( {

\t// Add in style property hooks for overriding the default
\t// behavior of getting and setting a style property
\tcssHooks: {
\t\topacity: {
\t\t\tget: function( elem, computed ) {
\t\t\t\tif ( computed ) {

\t\t\t\t\t// We should always get a number back from opacity
\t\t\t\t\tvar ret = curCSS( elem, \"opacity\" );
\t\t\t\t\treturn ret === \"\" ? \"1\" : ret;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\t// Don't automatically add \"px\" to these possibly-unitless properties
\tcssNumber: {
\t\t\"animationIterationCount\": true,
\t\t\"columnCount\": true,
\t\t\"fillOpacity\": true,
\t\t\"flexGrow\": true,
\t\t\"flexShrink\": true,
\t\t\"fontWeight\": true,
\t\t\"lineHeight\": true,
\t\t\"opacity\": true,
\t\t\"order\": true,
\t\t\"orphans\": true,
\t\t\"widows\": true,
\t\t\"zIndex\": true,
\t\t\"zoom\": true
\t},

\t// Add in properties whose names you wish to fix before
\t// setting or getting the value
\tcssProps: {

\t\t// normalize float css property
\t\t\"float\": support.cssFloat ? \"cssFloat\" : \"styleFloat\"
\t},

\t// Get and set the style property on a DOM Node
\tstyle: function( elem, name, value, extra ) {

\t\t// Don't set styles on text and comment nodes
\t\tif ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
\t\t\treturn;
\t\t}

\t\t// Make sure that we're working with the right name
\t\tvar ret, type, hooks,
\t\t\torigName = jQuery.camelCase( name ),
\t\t\tstyle = elem.style;

\t\tname = jQuery.cssProps[ origName ] ||
\t\t\t( jQuery.cssProps[ origName ] = vendorPropName( origName ) || origName );

\t\t// gets hook for the prefixed version
\t\t// followed by the unprefixed version
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// Check if we're setting a value
\t\tif ( value !== undefined ) {
\t\t\ttype = typeof value;

\t\t\t// Convert \"+=\" or \"-=\" to relative numbers (#7345)
\t\t\tif ( type === \"string\" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {
\t\t\t\tvalue = adjustCSS( elem, name, ret );

\t\t\t\t// Fixes bug #9237
\t\t\t\ttype = \"number\";
\t\t\t}

\t\t\t// Make sure that null and NaN values aren't set. See: #7116
\t\t\tif ( value == null || value !== value ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// If a number was passed in, add the unit (except for certain CSS properties)
\t\t\tif ( type === \"number\" ) {
\t\t\t\tvalue += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? \"\" : \"px\" );
\t\t\t}

\t\t\t// Fixes #8908, it can be done more correctly by specifing setters in cssHooks,
\t\t\t// but it would mean to define eight
\t\t\t// (for every problematic property) identical functions
\t\t\tif ( !support.clearCloneStyle && value === \"\" && name.indexOf( \"background\" ) === 0 ) {
\t\t\t\tstyle[ name ] = \"inherit\";
\t\t\t}

\t\t\t// If a hook was provided, use that value, otherwise just set the specified value
\t\t\tif ( !hooks || !( \"set\" in hooks ) ||
\t\t\t\t( value = hooks.set( elem, value, extra ) ) !== undefined ) {

\t\t\t\t// Support: IE
\t\t\t\t// Swallow errors from 'invalid' CSS values (#5509)
\t\t\t\ttry {
\t\t\t\t\tstyle[ name ] = value;
\t\t\t\t} catch ( e ) {}
\t\t\t}

\t\t} else {

\t\t\t// If a hook was provided get the non-computed value from there
\t\t\tif ( hooks && \"get\" in hooks &&
\t\t\t\t( ret = hooks.get( elem, false, extra ) ) !== undefined ) {

\t\t\t\treturn ret;
\t\t\t}

\t\t\t// Otherwise just get the value from the style object
\t\t\treturn style[ name ];
\t\t}
\t},

\tcss: function( elem, name, extra, styles ) {
\t\tvar num, val, hooks,
\t\t\torigName = jQuery.camelCase( name );

\t\t// Make sure that we're working with the right name
\t\tname = jQuery.cssProps[ origName ] ||
\t\t\t( jQuery.cssProps[ origName ] = vendorPropName( origName ) || origName );

\t\t// gets hook for the prefixed version
\t\t// followed by the unprefixed version
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// If a hook was provided get the computed value from there
\t\tif ( hooks && \"get\" in hooks ) {
\t\t\tval = hooks.get( elem, true, extra );
\t\t}

\t\t// Otherwise, if a way to get the computed value exists, use that
\t\tif ( val === undefined ) {
\t\t\tval = curCSS( elem, name, styles );
\t\t}

\t\t//convert \"normal\" to computed value
\t\tif ( val === \"normal\" && name in cssNormalTransform ) {
\t\t\tval = cssNormalTransform[ name ];
\t\t}

\t\t// Return, converting to number if forced or a qualifier was provided and val looks numeric
\t\tif ( extra === \"\" || extra ) {
\t\t\tnum = parseFloat( val );
\t\t\treturn extra === true || isFinite( num ) ? num || 0 : val;
\t\t}
\t\treturn val;
\t}
} );

jQuery.each( [ \"height\", \"width\" ], function( i, name ) {
\tjQuery.cssHooks[ name ] = {
\t\tget: function( elem, computed, extra ) {
\t\t\tif ( computed ) {

\t\t\t\t// certain elements can have dimension info if we invisibly show them
\t\t\t\t// however, it must have a current display style that would benefit from this
\t\t\t\treturn rdisplayswap.test( jQuery.css( elem, \"display\" ) ) &&
\t\t\t\t\telem.offsetWidth === 0 ?
\t\t\t\t\t\tswap( elem, cssShow, function() {
\t\t\t\t\t\t\treturn getWidthOrHeight( elem, name, extra );
\t\t\t\t\t\t} ) :
\t\t\t\t\t\tgetWidthOrHeight( elem, name, extra );
\t\t\t}
\t\t},

\t\tset: function( elem, value, extra ) {
\t\t\tvar styles = extra && getStyles( elem );
\t\t\treturn setPositiveNumber( elem, value, extra ?
\t\t\t\taugmentWidthOrHeight(
\t\t\t\t\telem,
\t\t\t\t\tname,
\t\t\t\t\textra,
\t\t\t\t\tsupport.boxSizing &&
\t\t\t\t\t\tjQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\t\t\t\tstyles
\t\t\t\t) : 0
\t\t\t);
\t\t}
\t};
} );

if ( !support.opacity ) {
\tjQuery.cssHooks.opacity = {
\t\tget: function( elem, computed ) {

\t\t\t// IE uses filters for opacity
\t\t\treturn ropacity.test( ( computed && elem.currentStyle ?
\t\t\t\telem.currentStyle.filter :
\t\t\t\telem.style.filter ) || \"\" ) ?
\t\t\t\t\t( 0.01 * parseFloat( RegExp.\$1 ) ) + \"\" :
\t\t\t\t\tcomputed ? \"1\" : \"\";
\t\t},

\t\tset: function( elem, value ) {
\t\t\tvar style = elem.style,
\t\t\t\tcurrentStyle = elem.currentStyle,
\t\t\t\topacity = jQuery.isNumeric( value ) ? \"alpha(opacity=\" + value * 100 + \")\" : \"\",
\t\t\t\tfilter = currentStyle && currentStyle.filter || style.filter || \"\";

\t\t\t// IE has trouble with opacity if it does not have layout
\t\t\t// Force it by setting the zoom level
\t\t\tstyle.zoom = 1;

\t\t\t// if setting opacity to 1, and no other filters exist -
\t\t\t// attempt to remove filter attribute #6652
\t\t\t// if value === \"\", then remove inline opacity #12685
\t\t\tif ( ( value >= 1 || value === \"\" ) &&
\t\t\t\t\tjQuery.trim( filter.replace( ralpha, \"\" ) ) === \"\" &&
\t\t\t\t\tstyle.removeAttribute ) {

\t\t\t\t// Setting style.filter to null, \"\" & \" \" still leave \"filter:\" in the cssText
\t\t\t\t// if \"filter:\" is present at all, clearType is disabled, we want to avoid this
\t\t\t\t// style.removeAttribute is IE Only, but so apparently is this code path...
\t\t\t\tstyle.removeAttribute( \"filter\" );

\t\t\t\t// if there is no filter style applied in a css rule
\t\t\t\t// or unset inline opacity, we are done
\t\t\t\tif ( value === \"\" || currentStyle && !currentStyle.filter ) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t}

\t\t\t// otherwise, set new filter values
\t\t\tstyle.filter = ralpha.test( filter ) ?
\t\t\t\tfilter.replace( ralpha, opacity ) :
\t\t\t\tfilter + \" \" + opacity;
\t\t}
\t};
}

jQuery.cssHooks.marginRight = addGetHookIf( support.reliableMarginRight,
\tfunction( elem, computed ) {
\t\tif ( computed ) {
\t\t\treturn swap( elem, { \"display\": \"inline-block\" },
\t\t\t\tcurCSS, [ elem, \"marginRight\" ] );
\t\t}
\t}
);

jQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,
\tfunction( elem, computed ) {
\t\tif ( computed ) {
\t\t\treturn (
\t\t\t\tparseFloat( curCSS( elem, \"marginLeft\" ) ) ||

\t\t\t\t// Support: IE<=11+
\t\t\t\t// Running getBoundingClientRect on a disconnected node in IE throws an error
\t\t\t\t// Support: IE8 only
\t\t\t\t// getClientRects() errors on disconnected elems
\t\t\t\t( jQuery.contains( elem.ownerDocument, elem ) ?
\t\t\t\t\telem.getBoundingClientRect().left -
\t\t\t\t\t\tswap( elem, { marginLeft: 0 }, function() {
\t\t\t\t\t\t\treturn elem.getBoundingClientRect().left;
\t\t\t\t\t\t} ) :
\t\t\t\t\t0
\t\t\t\t)
\t\t\t) + \"px\";
\t\t}
\t}
);

// These hooks are used by animate to expand properties
jQuery.each( {
\tmargin: \"\",
\tpadding: \"\",
\tborder: \"Width\"
}, function( prefix, suffix ) {
\tjQuery.cssHooks[ prefix + suffix ] = {
\t\texpand: function( value ) {
\t\t\tvar i = 0,
\t\t\t\texpanded = {},

\t\t\t\t// assumes a single number if not a string
\t\t\t\tparts = typeof value === \"string\" ? value.split( \" \" ) : [ value ];

\t\t\tfor ( ; i < 4; i++ ) {
\t\t\t\texpanded[ prefix + cssExpand[ i ] + suffix ] =
\t\t\t\t\tparts[ i ] || parts[ i - 2 ] || parts[ 0 ];
\t\t\t}

\t\t\treturn expanded;
\t\t}
\t};

\tif ( !rmargin.test( prefix ) ) {
\t\tjQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
\t}
} );

jQuery.fn.extend( {
\tcss: function( name, value ) {
\t\treturn access( this, function( elem, name, value ) {
\t\t\tvar styles, len,
\t\t\t\tmap = {},
\t\t\t\ti = 0;

\t\t\tif ( jQuery.isArray( name ) ) {
\t\t\t\tstyles = getStyles( elem );
\t\t\t\tlen = name.length;

\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\tmap[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
\t\t\t\t}

\t\t\t\treturn map;
\t\t\t}

\t\t\treturn value !== undefined ?
\t\t\t\tjQuery.style( elem, name, value ) :
\t\t\t\tjQuery.css( elem, name );
\t\t}, name, value, arguments.length > 1 );
\t},
\tshow: function() {
\t\treturn showHide( this, true );
\t},
\thide: function() {
\t\treturn showHide( this );
\t},
\ttoggle: function( state ) {
\t\tif ( typeof state === \"boolean\" ) {
\t\t\treturn state ? this.show() : this.hide();
\t\t}

\t\treturn this.each( function() {
\t\t\tif ( isHidden( this ) ) {
\t\t\t\tjQuery( this ).show();
\t\t\t} else {
\t\t\t\tjQuery( this ).hide();
\t\t\t}
\t\t} );
\t}
} );


function Tween( elem, options, prop, end, easing ) {
\treturn new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
\tconstructor: Tween,
\tinit: function( elem, options, prop, end, easing, unit ) {
\t\tthis.elem = elem;
\t\tthis.prop = prop;
\t\tthis.easing = easing || jQuery.easing._default;
\t\tthis.options = options;
\t\tthis.start = this.now = this.cur();
\t\tthis.end = end;
\t\tthis.unit = unit || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" );
\t},
\tcur: function() {
\t\tvar hooks = Tween.propHooks[ this.prop ];

\t\treturn hooks && hooks.get ?
\t\t\thooks.get( this ) :
\t\t\tTween.propHooks._default.get( this );
\t},
\trun: function( percent ) {
\t\tvar eased,
\t\t\thooks = Tween.propHooks[ this.prop ];

\t\tif ( this.options.duration ) {
\t\t\tthis.pos = eased = jQuery.easing[ this.easing ](
\t\t\t\tpercent, this.options.duration * percent, 0, 1, this.options.duration
\t\t\t);
\t\t} else {
\t\t\tthis.pos = eased = percent;
\t\t}
\t\tthis.now = ( this.end - this.start ) * eased + this.start;

\t\tif ( this.options.step ) {
\t\t\tthis.options.step.call( this.elem, this.now, this );
\t\t}

\t\tif ( hooks && hooks.set ) {
\t\t\thooks.set( this );
\t\t} else {
\t\t\tTween.propHooks._default.set( this );
\t\t}
\t\treturn this;
\t}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
\t_default: {
\t\tget: function( tween ) {
\t\t\tvar result;

\t\t\t// Use a property on the element directly when it is not a DOM element,
\t\t\t// or when there is no matching style property that exists.
\t\t\tif ( tween.elem.nodeType !== 1 ||
\t\t\t\ttween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {
\t\t\t\treturn tween.elem[ tween.prop ];
\t\t\t}

\t\t\t// passing an empty string as a 3rd parameter to .css will automatically
\t\t\t// attempt a parseFloat and fallback to a string if the parse fails
\t\t\t// so, simple values such as \"10px\" are parsed to Float.
\t\t\t// complex values such as \"rotate(1rad)\" are returned as is.
\t\t\tresult = jQuery.css( tween.elem, tween.prop, \"\" );

\t\t\t// Empty strings, null, undefined and \"auto\" are converted to 0.
\t\t\treturn !result || result === \"auto\" ? 0 : result;
\t\t},
\t\tset: function( tween ) {

\t\t\t// use step hook for back compat - use cssHook if its there - use .style if its
\t\t\t// available and use plain properties where available
\t\t\tif ( jQuery.fx.step[ tween.prop ] ) {
\t\t\t\tjQuery.fx.step[ tween.prop ]( tween );
\t\t\t} else if ( tween.elem.nodeType === 1 &&
\t\t\t\t( tween.elem.style[ jQuery.cssProps[ tween.prop ] ] != null ||
\t\t\t\t\tjQuery.cssHooks[ tween.prop ] ) ) {
\t\t\t\tjQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
\t\t\t} else {
\t\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t\t}
\t\t}
\t}
};

// Support: IE <=9
// Panic based approach to setting things on disconnected nodes

Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
\tset: function( tween ) {
\t\tif ( tween.elem.nodeType && tween.elem.parentNode ) {
\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t}
\t}
};

jQuery.easing = {
\tlinear: function( p ) {
\t\treturn p;
\t},
\tswing: function( p ) {
\t\treturn 0.5 - Math.cos( p * Math.PI ) / 2;
\t},
\t_default: \"swing\"
};

jQuery.fx = Tween.prototype.init;

// Back Compat <1.8 extension point
jQuery.fx.step = {};




var
\tfxNow, timerId,
\trfxtypes = /^(?:toggle|show|hide)\$/,
\trrun = /queueHooks\$/;

// Animations created synchronously will run synchronously
function createFxNow() {
\twindow.setTimeout( function() {
\t\tfxNow = undefined;
\t} );
\treturn ( fxNow = jQuery.now() );
}

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
\tvar which,
\t\tattrs = { height: type },
\t\ti = 0;

\t// if we include width, step value is 1 to do all cssExpand values,
\t// if we don't include width, step value is 2 to skip over Left and Right
\tincludeWidth = includeWidth ? 1 : 0;
\tfor ( ; i < 4 ; i += 2 - includeWidth ) {
\t\twhich = cssExpand[ i ];
\t\tattrs[ \"margin\" + which ] = attrs[ \"padding\" + which ] = type;
\t}

\tif ( includeWidth ) {
\t\tattrs.opacity = attrs.width = type;
\t}

\treturn attrs;
}

function createTween( value, prop, animation ) {
\tvar tween,
\t\tcollection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ \"*\" ] ),
\t\tindex = 0,
\t\tlength = collection.length;
\tfor ( ; index < length; index++ ) {
\t\tif ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {

\t\t\t// we're done with this property
\t\t\treturn tween;
\t\t}
\t}
}

function defaultPrefilter( elem, props, opts ) {
\t/* jshint validthis: true */
\tvar prop, value, toggle, tween, hooks, oldfire, display, checkDisplay,
\t\tanim = this,
\t\torig = {},
\t\tstyle = elem.style,
\t\thidden = elem.nodeType && isHidden( elem ),
\t\tdataShow = jQuery._data( elem, \"fxshow\" );

\t// handle queue: false promises
\tif ( !opts.queue ) {
\t\thooks = jQuery._queueHooks( elem, \"fx\" );
\t\tif ( hooks.unqueued == null ) {
\t\t\thooks.unqueued = 0;
\t\t\toldfire = hooks.empty.fire;
\t\t\thooks.empty.fire = function() {
\t\t\t\tif ( !hooks.unqueued ) {
\t\t\t\t\toldfire();
\t\t\t\t}
\t\t\t};
\t\t}
\t\thooks.unqueued++;

\t\tanim.always( function() {

\t\t\t// doing this makes sure that the complete handler will be called
\t\t\t// before this completes
\t\t\tanim.always( function() {
\t\t\t\thooks.unqueued--;
\t\t\t\tif ( !jQuery.queue( elem, \"fx\" ).length ) {
\t\t\t\t\thooks.empty.fire();
\t\t\t\t}
\t\t\t} );
\t\t} );
\t}

\t// height/width overflow pass
\tif ( elem.nodeType === 1 && ( \"height\" in props || \"width\" in props ) ) {

\t\t// Make sure that nothing sneaks out
\t\t// Record all 3 overflow attributes because IE does not
\t\t// change the overflow attribute when overflowX and
\t\t// overflowY are set to the same value
\t\topts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

\t\t// Set display property to inline-block for height/width
\t\t// animations on inline elements that are having width/height animated
\t\tdisplay = jQuery.css( elem, \"display\" );

\t\t// Test default display if display is currently \"none\"
\t\tcheckDisplay = display === \"none\" ?
\t\t\tjQuery._data( elem, \"olddisplay\" ) || defaultDisplay( elem.nodeName ) : display;

\t\tif ( checkDisplay === \"inline\" && jQuery.css( elem, \"float\" ) === \"none\" ) {

\t\t\t// inline-level elements accept inline-block;
\t\t\t// block-level elements need to be inline with layout
\t\t\tif ( !support.inlineBlockNeedsLayout || defaultDisplay( elem.nodeName ) === \"inline\" ) {
\t\t\t\tstyle.display = \"inline-block\";
\t\t\t} else {
\t\t\t\tstyle.zoom = 1;
\t\t\t}
\t\t}
\t}

\tif ( opts.overflow ) {
\t\tstyle.overflow = \"hidden\";
\t\tif ( !support.shrinkWrapBlocks() ) {
\t\t\tanim.always( function() {
\t\t\t\tstyle.overflow = opts.overflow[ 0 ];
\t\t\t\tstyle.overflowX = opts.overflow[ 1 ];
\t\t\t\tstyle.overflowY = opts.overflow[ 2 ];
\t\t\t} );
\t\t}
\t}

\t// show/hide pass
\tfor ( prop in props ) {
\t\tvalue = props[ prop ];
\t\tif ( rfxtypes.exec( value ) ) {
\t\t\tdelete props[ prop ];
\t\t\ttoggle = toggle || value === \"toggle\";
\t\t\tif ( value === ( hidden ? \"hide\" : \"show\" ) ) {

\t\t\t\t// If there is dataShow left over from a stopped hide or show
\t\t\t\t// and we are going to proceed with show, we should pretend to be hidden
\t\t\t\tif ( value === \"show\" && dataShow && dataShow[ prop ] !== undefined ) {
\t\t\t\t\thidden = true;
\t\t\t\t} else {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t}
\t\t\torig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );

\t\t// Any non-fx value stops us from restoring the original display value
\t\t} else {
\t\t\tdisplay = undefined;
\t\t}
\t}

\tif ( !jQuery.isEmptyObject( orig ) ) {
\t\tif ( dataShow ) {
\t\t\tif ( \"hidden\" in dataShow ) {
\t\t\t\thidden = dataShow.hidden;
\t\t\t}
\t\t} else {
\t\t\tdataShow = jQuery._data( elem, \"fxshow\", {} );
\t\t}

\t\t// store state if its toggle - enables .stop().toggle() to \"reverse\"
\t\tif ( toggle ) {
\t\t\tdataShow.hidden = !hidden;
\t\t}
\t\tif ( hidden ) {
\t\t\tjQuery( elem ).show();
\t\t} else {
\t\t\tanim.done( function() {
\t\t\t\tjQuery( elem ).hide();
\t\t\t} );
\t\t}
\t\tanim.done( function() {
\t\t\tvar prop;
\t\t\tjQuery._removeData( elem, \"fxshow\" );
\t\t\tfor ( prop in orig ) {
\t\t\t\tjQuery.style( elem, prop, orig[ prop ] );
\t\t\t}
\t\t} );
\t\tfor ( prop in orig ) {
\t\t\ttween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );

\t\t\tif ( !( prop in dataShow ) ) {
\t\t\t\tdataShow[ prop ] = tween.start;
\t\t\t\tif ( hidden ) {
\t\t\t\t\ttween.end = tween.start;
\t\t\t\t\ttween.start = prop === \"width\" || prop === \"height\" ? 1 : 0;
\t\t\t\t}
\t\t\t}
\t\t}

\t// If this is a noop like .hide().hide(), restore an overwritten display value
\t} else if ( ( display === \"none\" ? defaultDisplay( elem.nodeName ) : display ) === \"inline\" ) {
\t\tstyle.display = display;
\t}
}

function propFilter( props, specialEasing ) {
\tvar index, name, easing, value, hooks;

\t// camelCase, specialEasing and expand cssHook pass
\tfor ( index in props ) {
\t\tname = jQuery.camelCase( index );
\t\teasing = specialEasing[ name ];
\t\tvalue = props[ index ];
\t\tif ( jQuery.isArray( value ) ) {
\t\t\teasing = value[ 1 ];
\t\t\tvalue = props[ index ] = value[ 0 ];
\t\t}

\t\tif ( index !== name ) {
\t\t\tprops[ name ] = value;
\t\t\tdelete props[ index ];
\t\t}

\t\thooks = jQuery.cssHooks[ name ];
\t\tif ( hooks && \"expand\" in hooks ) {
\t\t\tvalue = hooks.expand( value );
\t\t\tdelete props[ name ];

\t\t\t// not quite \$.extend, this wont overwrite keys already present.
\t\t\t// also - reusing 'index' from above because we have the correct \"name\"
\t\t\tfor ( index in value ) {
\t\t\t\tif ( !( index in props ) ) {
\t\t\t\t\tprops[ index ] = value[ index ];
\t\t\t\t\tspecialEasing[ index ] = easing;
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tspecialEasing[ name ] = easing;
\t\t}
\t}
}

function Animation( elem, properties, options ) {
\tvar result,
\t\tstopped,
\t\tindex = 0,
\t\tlength = Animation.prefilters.length,
\t\tdeferred = jQuery.Deferred().always( function() {

\t\t\t// don't match elem in the :animated selector
\t\t\tdelete tick.elem;
\t\t} ),
\t\ttick = function() {
\t\t\tif ( stopped ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar currentTime = fxNow || createFxNow(),
\t\t\t\tremaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),

\t\t\t\t// Support: Android 2.3
\t\t\t\t// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
\t\t\t\ttemp = remaining / animation.duration || 0,
\t\t\t\tpercent = 1 - temp,
\t\t\t\tindex = 0,
\t\t\t\tlength = animation.tweens.length;

\t\t\tfor ( ; index < length ; index++ ) {
\t\t\t\tanimation.tweens[ index ].run( percent );
\t\t\t}

\t\t\tdeferred.notifyWith( elem, [ animation, percent, remaining ] );

\t\t\tif ( percent < 1 && length ) {
\t\t\t\treturn remaining;
\t\t\t} else {
\t\t\t\tdeferred.resolveWith( elem, [ animation ] );
\t\t\t\treturn false;
\t\t\t}
\t\t},
\t\tanimation = deferred.promise( {
\t\t\telem: elem,
\t\t\tprops: jQuery.extend( {}, properties ),
\t\t\topts: jQuery.extend( true, {
\t\t\t\tspecialEasing: {},
\t\t\t\teasing: jQuery.easing._default
\t\t\t}, options ),
\t\t\toriginalProperties: properties,
\t\t\toriginalOptions: options,
\t\t\tstartTime: fxNow || createFxNow(),
\t\t\tduration: options.duration,
\t\t\ttweens: [],
\t\t\tcreateTween: function( prop, end ) {
\t\t\t\tvar tween = jQuery.Tween( elem, animation.opts, prop, end,
\t\t\t\t\t\tanimation.opts.specialEasing[ prop ] || animation.opts.easing );
\t\t\t\tanimation.tweens.push( tween );
\t\t\t\treturn tween;
\t\t\t},
\t\t\tstop: function( gotoEnd ) {
\t\t\t\tvar index = 0,

\t\t\t\t\t// if we are going to the end, we want to run all the tweens
\t\t\t\t\t// otherwise we skip this part
\t\t\t\t\tlength = gotoEnd ? animation.tweens.length : 0;
\t\t\t\tif ( stopped ) {
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t\tstopped = true;
\t\t\t\tfor ( ; index < length ; index++ ) {
\t\t\t\t\tanimation.tweens[ index ].run( 1 );
\t\t\t\t}

\t\t\t\t// resolve when we played the last frame
\t\t\t\t// otherwise, reject
\t\t\t\tif ( gotoEnd ) {
\t\t\t\t\tdeferred.notifyWith( elem, [ animation, 1, 0 ] );
\t\t\t\t\tdeferred.resolveWith( elem, [ animation, gotoEnd ] );
\t\t\t\t} else {
\t\t\t\t\tdeferred.rejectWith( elem, [ animation, gotoEnd ] );
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t}
\t\t} ),
\t\tprops = animation.props;

\tpropFilter( props, animation.opts.specialEasing );

\tfor ( ; index < length ; index++ ) {
\t\tresult = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );
\t\tif ( result ) {
\t\t\tif ( jQuery.isFunction( result.stop ) ) {
\t\t\t\tjQuery._queueHooks( animation.elem, animation.opts.queue ).stop =
\t\t\t\t\tjQuery.proxy( result.stop, result );
\t\t\t}
\t\t\treturn result;
\t\t}
\t}

\tjQuery.map( props, createTween, animation );

\tif ( jQuery.isFunction( animation.opts.start ) ) {
\t\tanimation.opts.start.call( elem, animation );
\t}

\tjQuery.fx.timer(
\t\tjQuery.extend( tick, {
\t\t\telem: elem,
\t\t\tanim: animation,
\t\t\tqueue: animation.opts.queue
\t\t} )
\t);

\t// attach callbacks from options
\treturn animation.progress( animation.opts.progress )
\t\t.done( animation.opts.done, animation.opts.complete )
\t\t.fail( animation.opts.fail )
\t\t.always( animation.opts.always );
}

jQuery.Animation = jQuery.extend( Animation, {

\ttweeners: {
\t\t\"*\": [ function( prop, value ) {
\t\t\tvar tween = this.createTween( prop, value );
\t\t\tadjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );
\t\t\treturn tween;
\t\t} ]
\t},

\ttweener: function( props, callback ) {
\t\tif ( jQuery.isFunction( props ) ) {
\t\t\tcallback = props;
\t\t\tprops = [ \"*\" ];
\t\t} else {
\t\t\tprops = props.match( rnotwhite );
\t\t}

\t\tvar prop,
\t\t\tindex = 0,
\t\t\tlength = props.length;

\t\tfor ( ; index < length ; index++ ) {
\t\t\tprop = props[ index ];
\t\t\tAnimation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];
\t\t\tAnimation.tweeners[ prop ].unshift( callback );
\t\t}
\t},

\tprefilters: [ defaultPrefilter ],

\tprefilter: function( callback, prepend ) {
\t\tif ( prepend ) {
\t\t\tAnimation.prefilters.unshift( callback );
\t\t} else {
\t\t\tAnimation.prefilters.push( callback );
\t\t}
\t}
} );

jQuery.speed = function( speed, easing, fn ) {
\tvar opt = speed && typeof speed === \"object\" ? jQuery.extend( {}, speed ) : {
\t\tcomplete: fn || !fn && easing ||
\t\t\tjQuery.isFunction( speed ) && speed,
\t\tduration: speed,
\t\teasing: fn && easing || easing && !jQuery.isFunction( easing ) && easing
\t};

\topt.duration = jQuery.fx.off ? 0 : typeof opt.duration === \"number\" ? opt.duration :
\t\topt.duration in jQuery.fx.speeds ?
\t\t\tjQuery.fx.speeds[ opt.duration ] : jQuery.fx.speeds._default;

\t// normalize opt.queue - true/undefined/null -> \"fx\"
\tif ( opt.queue == null || opt.queue === true ) {
\t\topt.queue = \"fx\";
\t}

\t// Queueing
\topt.old = opt.complete;

\topt.complete = function() {
\t\tif ( jQuery.isFunction( opt.old ) ) {
\t\t\topt.old.call( this );
\t\t}

\t\tif ( opt.queue ) {
\t\t\tjQuery.dequeue( this, opt.queue );
\t\t}
\t};

\treturn opt;
};

jQuery.fn.extend( {
\tfadeTo: function( speed, to, easing, callback ) {

\t\t// show any hidden elements after setting opacity to 0
\t\treturn this.filter( isHidden ).css( \"opacity\", 0 ).show()

\t\t\t// animate to the value specified
\t\t\t.end().animate( { opacity: to }, speed, easing, callback );
\t},
\tanimate: function( prop, speed, easing, callback ) {
\t\tvar empty = jQuery.isEmptyObject( prop ),
\t\t\toptall = jQuery.speed( speed, easing, callback ),
\t\t\tdoAnimation = function() {

\t\t\t\t// Operate on a copy of prop so per-property easing won't be lost
\t\t\t\tvar anim = Animation( this, jQuery.extend( {}, prop ), optall );

\t\t\t\t// Empty animations, or finishing resolves immediately
\t\t\t\tif ( empty || jQuery._data( this, \"finish\" ) ) {
\t\t\t\t\tanim.stop( true );
\t\t\t\t}
\t\t\t};
\t\t\tdoAnimation.finish = doAnimation;

\t\treturn empty || optall.queue === false ?
\t\t\tthis.each( doAnimation ) :
\t\t\tthis.queue( optall.queue, doAnimation );
\t},
\tstop: function( type, clearQueue, gotoEnd ) {
\t\tvar stopQueue = function( hooks ) {
\t\t\tvar stop = hooks.stop;
\t\t\tdelete hooks.stop;
\t\t\tstop( gotoEnd );
\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tgotoEnd = clearQueue;
\t\t\tclearQueue = type;
\t\t\ttype = undefined;
\t\t}
\t\tif ( clearQueue && type !== false ) {
\t\t\tthis.queue( type || \"fx\", [] );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar dequeue = true,
\t\t\t\tindex = type != null && type + \"queueHooks\",
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tdata = jQuery._data( this );

\t\t\tif ( index ) {
\t\t\t\tif ( data[ index ] && data[ index ].stop ) {
\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( index in data ) {
\t\t\t\t\tif ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
\t\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this &&
\t\t\t\t\t( type == null || timers[ index ].queue === type ) ) {

\t\t\t\t\ttimers[ index ].anim.stop( gotoEnd );
\t\t\t\t\tdequeue = false;
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// start the next in the queue if the last step wasn't forced
\t\t\t// timers currently will call their complete callbacks, which will dequeue
\t\t\t// but only if they were gotoEnd
\t\t\tif ( dequeue || !gotoEnd ) {
\t\t\t\tjQuery.dequeue( this, type );
\t\t\t}
\t\t} );
\t},
\tfinish: function( type ) {
\t\tif ( type !== false ) {
\t\t\ttype = type || \"fx\";
\t\t}
\t\treturn this.each( function() {
\t\t\tvar index,
\t\t\t\tdata = jQuery._data( this ),
\t\t\t\tqueue = data[ type + \"queue\" ],
\t\t\t\thooks = data[ type + \"queueHooks\" ],
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tlength = queue ? queue.length : 0;

\t\t\t// enable finishing flag on private data
\t\t\tdata.finish = true;

\t\t\t// empty the queue first
\t\t\tjQuery.queue( this, type, [] );

\t\t\tif ( hooks && hooks.stop ) {
\t\t\t\thooks.stop.call( this, true );
\t\t\t}

\t\t\t// look for any active animations, and finish them
\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this && timers[ index ].queue === type ) {
\t\t\t\t\ttimers[ index ].anim.stop( true );
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// look for any animations in the old queue and finish them
\t\t\tfor ( index = 0; index < length; index++ ) {
\t\t\t\tif ( queue[ index ] && queue[ index ].finish ) {
\t\t\t\t\tqueue[ index ].finish.call( this );
\t\t\t\t}
\t\t\t}

\t\t\t// turn off finishing flag
\t\t\tdelete data.finish;
\t\t} );
\t}
} );

jQuery.each( [ \"toggle\", \"show\", \"hide\" ], function( i, name ) {
\tvar cssFn = jQuery.fn[ name ];
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn speed == null || typeof speed === \"boolean\" ?
\t\t\tcssFn.apply( this, arguments ) :
\t\t\tthis.animate( genFx( name, true ), speed, easing, callback );
\t};
} );

// Generate shortcuts for custom animations
jQuery.each( {
\tslideDown: genFx( \"show\" ),
\tslideUp: genFx( \"hide\" ),
\tslideToggle: genFx( \"toggle\" ),
\tfadeIn: { opacity: \"show\" },
\tfadeOut: { opacity: \"hide\" },
\tfadeToggle: { opacity: \"toggle\" }
}, function( name, props ) {
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn this.animate( props, speed, easing, callback );
\t};
} );

jQuery.timers = [];
jQuery.fx.tick = function() {
\tvar timer,
\t\ttimers = jQuery.timers,
\t\ti = 0;

\tfxNow = jQuery.now();

\tfor ( ; i < timers.length; i++ ) {
\t\ttimer = timers[ i ];

\t\t// Checks the timer has not already been removed
\t\tif ( !timer() && timers[ i ] === timer ) {
\t\t\ttimers.splice( i--, 1 );
\t\t}
\t}

\tif ( !timers.length ) {
\t\tjQuery.fx.stop();
\t}
\tfxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
\tjQuery.timers.push( timer );
\tif ( timer() ) {
\t\tjQuery.fx.start();
\t} else {
\t\tjQuery.timers.pop();
\t}
};

jQuery.fx.interval = 13;

jQuery.fx.start = function() {
\tif ( !timerId ) {
\t\ttimerId = window.setInterval( jQuery.fx.tick, jQuery.fx.interval );
\t}
};

jQuery.fx.stop = function() {
\twindow.clearInterval( timerId );
\ttimerId = null;
};

jQuery.fx.speeds = {
\tslow: 600,
\tfast: 200,

\t// Default speed
\t_default: 400
};


// Based off of the plugin by Clint Helfers, with permission.
// http://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
\ttime = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
\ttype = type || \"fx\";

\treturn this.queue( type, function( next, hooks ) {
\t\tvar timeout = window.setTimeout( next, time );
\t\thooks.stop = function() {
\t\t\twindow.clearTimeout( timeout );
\t\t};
\t} );
};


( function() {
\tvar a,
\t\tinput = document.createElement( \"input\" ),
\t\tdiv = document.createElement( \"div\" ),
\t\tselect = document.createElement( \"select\" ),
\t\topt = select.appendChild( document.createElement( \"option\" ) );

\t// Setup
\tdiv = document.createElement( \"div\" );
\tdiv.setAttribute( \"className\", \"t\" );
\tdiv.innerHTML = \"  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>\";
\ta = div.getElementsByTagName( \"a\" )[ 0 ];

\t// Support: Windows Web Apps (WWA)
\t// `type` must use .setAttribute for WWA (#14901)
\tinput.setAttribute( \"type\", \"checkbox\" );
\tdiv.appendChild( input );

\ta = div.getElementsByTagName( \"a\" )[ 0 ];

\t// First batch of tests.
\ta.style.cssText = \"top:1px\";

\t// Test setAttribute on camelCase class.
\t// If it works, we need attrFixes when doing get/setAttribute (ie6/7)
\tsupport.getSetAttribute = div.className !== \"t\";

\t// Get the style information from getAttribute
\t// (IE uses .cssText instead)
\tsupport.style = /top/.test( a.getAttribute( \"style\" ) );

\t// Make sure that URLs aren't manipulated
\t// (IE normalizes it by default)
\tsupport.hrefNormalized = a.getAttribute( \"href\" ) === \"/a\";

\t// Check the default checkbox/radio value (\"\" on WebKit; \"on\" elsewhere)
\tsupport.checkOn = !!input.value;

\t// Make sure that a selected-by-default option has a working selected property.
\t// (WebKit defaults to false instead of true, IE too, if it's in an optgroup)
\tsupport.optSelected = opt.selected;

\t// Tests for enctype support on a form (#6743)
\tsupport.enctype = !!document.createElement( \"form\" ).enctype;

\t// Make sure that the options inside disabled selects aren't marked as disabled
\t// (WebKit marks them as disabled)
\tselect.disabled = true;
\tsupport.optDisabled = !opt.disabled;

\t// Support: IE8 only
\t// Check if we can trust getAttribute(\"value\")
\tinput = document.createElement( \"input\" );
\tinput.setAttribute( \"value\", \"\" );
\tsupport.input = input.getAttribute( \"value\" ) === \"\";

\t// Check if an input maintains its value after becoming a radio
\tinput.value = \"t\";
\tinput.setAttribute( \"type\", \"radio\" );
\tsupport.radioValue = input.value === \"t\";
} )();


var rreturn = /\\r/g,
\trspaces = /[\\x20\\t\\r\\n\\f]+/g;

jQuery.fn.extend( {
\tval: function( value ) {
\t\tvar hooks, ret, isFunction,
\t\t\telem = this[ 0 ];

\t\tif ( !arguments.length ) {
\t\t\tif ( elem ) {
\t\t\t\thooks = jQuery.valHooks[ elem.type ] ||
\t\t\t\t\tjQuery.valHooks[ elem.nodeName.toLowerCase() ];

\t\t\t\tif (
\t\t\t\t\thooks &&
\t\t\t\t\t\"get\" in hooks &&
\t\t\t\t\t( ret = hooks.get( elem, \"value\" ) ) !== undefined
\t\t\t\t) {
\t\t\t\t\treturn ret;
\t\t\t\t}

\t\t\t\tret = elem.value;

\t\t\t\treturn typeof ret === \"string\" ?

\t\t\t\t\t// handle most common string cases
\t\t\t\t\tret.replace( rreturn, \"\" ) :

\t\t\t\t\t// handle cases where value is null/undef or number
\t\t\t\t\tret == null ? \"\" : ret;
\t\t\t}

\t\t\treturn;
\t\t}

\t\tisFunction = jQuery.isFunction( value );

\t\treturn this.each( function( i ) {
\t\t\tvar val;

\t\t\tif ( this.nodeType !== 1 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( isFunction ) {
\t\t\t\tval = value.call( this, i, jQuery( this ).val() );
\t\t\t} else {
\t\t\t\tval = value;
\t\t\t}

\t\t\t// Treat null/undefined as \"\"; convert numbers to string
\t\t\tif ( val == null ) {
\t\t\t\tval = \"\";
\t\t\t} else if ( typeof val === \"number\" ) {
\t\t\t\tval += \"\";
\t\t\t} else if ( jQuery.isArray( val ) ) {
\t\t\t\tval = jQuery.map( val, function( value ) {
\t\t\t\t\treturn value == null ? \"\" : value + \"\";
\t\t\t\t} );
\t\t\t}

\t\t\thooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

\t\t\t// If set returns undefined, fall back to normal setting
\t\t\tif ( !hooks || !( \"set\" in hooks ) || hooks.set( this, val, \"value\" ) === undefined ) {
\t\t\t\tthis.value = val;
\t\t\t}
\t\t} );
\t}
} );

jQuery.extend( {
\tvalHooks: {
\t\toption: {
\t\t\tget: function( elem ) {
\t\t\t\tvar val = jQuery.find.attr( elem, \"value\" );
\t\t\t\treturn val != null ?
\t\t\t\t\tval :

\t\t\t\t\t// Support: IE10-11+
\t\t\t\t\t// option.text throws exceptions (#14686, #14858)
\t\t\t\t\t// Strip and collapse whitespace
\t\t\t\t\t// https://html.spec.whatwg.org/#strip-and-collapse-whitespace
\t\t\t\t\tjQuery.trim( jQuery.text( elem ) ).replace( rspaces, \" \" );
\t\t\t}
\t\t},
\t\tselect: {
\t\t\tget: function( elem ) {
\t\t\t\tvar value, option,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tindex = elem.selectedIndex,
\t\t\t\t\tone = elem.type === \"select-one\" || index < 0,
\t\t\t\t\tvalues = one ? null : [],
\t\t\t\t\tmax = one ? index + 1 : options.length,
\t\t\t\t\ti = index < 0 ?
\t\t\t\t\t\tmax :
\t\t\t\t\t\tone ? index : 0;

\t\t\t\t// Loop through all the selected options
\t\t\t\tfor ( ; i < max; i++ ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t// oldIE doesn't update selected after form reset (#2551)
\t\t\t\t\tif ( ( option.selected || i === index ) &&

\t\t\t\t\t\t\t// Don't return options that are disabled or in a disabled optgroup
\t\t\t\t\t\t\t( support.optDisabled ?
\t\t\t\t\t\t\t\t!option.disabled :
\t\t\t\t\t\t\t\toption.getAttribute( \"disabled\" ) === null ) &&
\t\t\t\t\t\t\t( !option.parentNode.disabled ||
\t\t\t\t\t\t\t\t!jQuery.nodeName( option.parentNode, \"optgroup\" ) ) ) {

\t\t\t\t\t\t// Get the specific value for the option
\t\t\t\t\t\tvalue = jQuery( option ).val();

\t\t\t\t\t\t// We don't need an array for one selects
\t\t\t\t\t\tif ( one ) {
\t\t\t\t\t\t\treturn value;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Multi-Selects return an array
\t\t\t\t\t\tvalues.push( value );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn values;
\t\t\t},

\t\t\tset: function( elem, value ) {
\t\t\t\tvar optionSet, option,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tvalues = jQuery.makeArray( value ),
\t\t\t\t\ti = options.length;

\t\t\t\twhile ( i-- ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\tif ( jQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1 ) {

\t\t\t\t\t\t// Support: IE6
\t\t\t\t\t\t// When new option element is added to select box we need to
\t\t\t\t\t\t// force reflow of newly added node in order to workaround delay
\t\t\t\t\t\t// of initialization properties
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\toption.selected = optionSet = true;

\t\t\t\t\t\t} catch ( _ ) {

\t\t\t\t\t\t\t// Will be executed only in IE6
\t\t\t\t\t\t\toption.scrollHeight;
\t\t\t\t\t\t}

\t\t\t\t\t} else {
\t\t\t\t\t\toption.selected = false;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Force browsers to behave consistently when non-matching value is set
\t\t\t\tif ( !optionSet ) {
\t\t\t\t\telem.selectedIndex = -1;
\t\t\t\t}

\t\t\t\treturn options;
\t\t\t}
\t\t}
\t}
} );

// Radios and checkboxes getter/setter
jQuery.each( [ \"radio\", \"checkbox\" ], function() {
\tjQuery.valHooks[ this ] = {
\t\tset: function( elem, value ) {
\t\t\tif ( jQuery.isArray( value ) ) {
\t\t\t\treturn ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );
\t\t\t}
\t\t}
\t};
\tif ( !support.checkOn ) {
\t\tjQuery.valHooks[ this ].get = function( elem ) {
\t\t\treturn elem.getAttribute( \"value\" ) === null ? \"on\" : elem.value;
\t\t};
\t}
} );




var nodeHook, boolHook,
\tattrHandle = jQuery.expr.attrHandle,
\truseDefault = /^(?:checked|selected)\$/i,
\tgetSetAttribute = support.getSetAttribute,
\tgetSetInput = support.input;

jQuery.fn.extend( {
\tattr: function( name, value ) {
\t\treturn access( this, jQuery.attr, name, value, arguments.length > 1 );
\t},

\tremoveAttr: function( name ) {
\t\treturn this.each( function() {
\t\t\tjQuery.removeAttr( this, name );
\t\t} );
\t}
} );

jQuery.extend( {
\tattr: function( elem, name, value ) {
\t\tvar ret, hooks,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set attributes on text, comment and attribute nodes
\t\tif ( nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\t// Fallback to prop when attributes are not supported
\t\tif ( typeof elem.getAttribute === \"undefined\" ) {
\t\t\treturn jQuery.prop( elem, name, value );
\t\t}

\t\t// All attributes are lowercase
\t\t// Grab necessary hook if one is defined
\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
\t\t\tname = name.toLowerCase();
\t\t\thooks = jQuery.attrHooks[ name ] ||
\t\t\t\t( jQuery.expr.match.bool.test( name ) ? boolHook : nodeHook );
\t\t}

\t\tif ( value !== undefined ) {
\t\t\tif ( value === null ) {
\t\t\t\tjQuery.removeAttr( elem, name );
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( hooks && \"set\" in hooks &&
\t\t\t\t( ret = hooks.set( elem, value, name ) ) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\telem.setAttribute( name, value + \"\" );
\t\t\treturn value;
\t\t}

\t\tif ( hooks && \"get\" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
\t\t\treturn ret;
\t\t}

\t\tret = jQuery.find.attr( elem, name );

\t\t// Non-existent attributes return null, we normalize to undefined
\t\treturn ret == null ? undefined : ret;
\t},

\tattrHooks: {
\t\ttype: {
\t\t\tset: function( elem, value ) {
\t\t\t\tif ( !support.radioValue && value === \"radio\" &&
\t\t\t\t\tjQuery.nodeName( elem, \"input\" ) ) {

\t\t\t\t\t// Setting the type on a radio button after the value resets the value in IE8-9
\t\t\t\t\t// Reset value to default in case type is set after value during creation
\t\t\t\t\tvar val = elem.value;
\t\t\t\t\telem.setAttribute( \"type\", value );
\t\t\t\t\tif ( val ) {
\t\t\t\t\t\telem.value = val;
\t\t\t\t\t}
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\tremoveAttr: function( elem, value ) {
\t\tvar name, propName,
\t\t\ti = 0,
\t\t\tattrNames = value && value.match( rnotwhite );

\t\tif ( attrNames && elem.nodeType === 1 ) {
\t\t\twhile ( ( name = attrNames[ i++ ] ) ) {
\t\t\t\tpropName = jQuery.propFix[ name ] || name;

\t\t\t\t// Boolean attributes get special treatment (#10870)
\t\t\t\tif ( jQuery.expr.match.bool.test( name ) ) {

\t\t\t\t\t// Set corresponding property to false
\t\t\t\t\tif ( getSetInput && getSetAttribute || !ruseDefault.test( name ) ) {
\t\t\t\t\t\telem[ propName ] = false;

\t\t\t\t\t// Support: IE<9
\t\t\t\t\t// Also clear defaultChecked/defaultSelected (if appropriate)
\t\t\t\t\t} else {
\t\t\t\t\t\telem[ jQuery.camelCase( \"default-\" + name ) ] =
\t\t\t\t\t\t\telem[ propName ] = false;
\t\t\t\t\t}

\t\t\t\t// See #9699 for explanation of this approach (setting first, then removal)
\t\t\t\t} else {
\t\t\t\t\tjQuery.attr( elem, name, \"\" );
\t\t\t\t}

\t\t\t\telem.removeAttribute( getSetAttribute ? name : propName );
\t\t\t}
\t\t}
\t}
} );

// Hooks for boolean attributes
boolHook = {
\tset: function( elem, value, name ) {
\t\tif ( value === false ) {

\t\t\t// Remove boolean attributes when set to false
\t\t\tjQuery.removeAttr( elem, name );
\t\t} else if ( getSetInput && getSetAttribute || !ruseDefault.test( name ) ) {

\t\t\t// IE<8 needs the *property* name
\t\t\telem.setAttribute( !getSetAttribute && jQuery.propFix[ name ] || name, name );

\t\t} else {

\t\t\t// Support: IE<9
\t\t\t// Use defaultChecked and defaultSelected for oldIE
\t\t\telem[ jQuery.camelCase( \"default-\" + name ) ] = elem[ name ] = true;
\t\t}
\t\treturn name;
\t}
};

jQuery.each( jQuery.expr.match.bool.source.match( /\\w+/g ), function( i, name ) {
\tvar getter = attrHandle[ name ] || jQuery.find.attr;

\tif ( getSetInput && getSetAttribute || !ruseDefault.test( name ) ) {
\t\tattrHandle[ name ] = function( elem, name, isXML ) {
\t\t\tvar ret, handle;
\t\t\tif ( !isXML ) {

\t\t\t\t// Avoid an infinite loop by temporarily removing this function from the getter
\t\t\t\thandle = attrHandle[ name ];
\t\t\t\tattrHandle[ name ] = ret;
\t\t\t\tret = getter( elem, name, isXML ) != null ?
\t\t\t\t\tname.toLowerCase() :
\t\t\t\t\tnull;
\t\t\t\tattrHandle[ name ] = handle;
\t\t\t}
\t\t\treturn ret;
\t\t};
\t} else {
\t\tattrHandle[ name ] = function( elem, name, isXML ) {
\t\t\tif ( !isXML ) {
\t\t\t\treturn elem[ jQuery.camelCase( \"default-\" + name ) ] ?
\t\t\t\t\tname.toLowerCase() :
\t\t\t\t\tnull;
\t\t\t}
\t\t};
\t}
} );

// fix oldIE attroperties
if ( !getSetInput || !getSetAttribute ) {
\tjQuery.attrHooks.value = {
\t\tset: function( elem, value, name ) {
\t\t\tif ( jQuery.nodeName( elem, \"input\" ) ) {

\t\t\t\t// Does not return so that setAttribute is also used
\t\t\t\telem.defaultValue = value;
\t\t\t} else {

\t\t\t\t// Use nodeHook if defined (#1954); otherwise setAttribute is fine
\t\t\t\treturn nodeHook && nodeHook.set( elem, value, name );
\t\t\t}
\t\t}
\t};
}

// IE6/7 do not support getting/setting some attributes with get/setAttribute
if ( !getSetAttribute ) {

\t// Use this for any attribute in IE6/7
\t// This fixes almost every IE6/7 issue
\tnodeHook = {
\t\tset: function( elem, value, name ) {

\t\t\t// Set the existing or create a new attribute node
\t\t\tvar ret = elem.getAttributeNode( name );
\t\t\tif ( !ret ) {
\t\t\t\telem.setAttributeNode(
\t\t\t\t\t( ret = elem.ownerDocument.createAttribute( name ) )
\t\t\t\t);
\t\t\t}

\t\t\tret.value = value += \"\";

\t\t\t// Break association with cloned elements by also using setAttribute (#9646)
\t\t\tif ( name === \"value\" || value === elem.getAttribute( name ) ) {
\t\t\t\treturn value;
\t\t\t}
\t\t}
\t};

\t// Some attributes are constructed with empty-string values when not defined
\tattrHandle.id = attrHandle.name = attrHandle.coords =
\t\tfunction( elem, name, isXML ) {
\t\t\tvar ret;
\t\t\tif ( !isXML ) {
\t\t\t\treturn ( ret = elem.getAttributeNode( name ) ) && ret.value !== \"\" ?
\t\t\t\t\tret.value :
\t\t\t\t\tnull;
\t\t\t}
\t\t};

\t// Fixing value retrieval on a button requires this module
\tjQuery.valHooks.button = {
\t\tget: function( elem, name ) {
\t\t\tvar ret = elem.getAttributeNode( name );
\t\t\tif ( ret && ret.specified ) {
\t\t\t\treturn ret.value;
\t\t\t}
\t\t},
\t\tset: nodeHook.set
\t};

\t// Set contenteditable to false on removals(#10429)
\t// Setting to empty string throws an error as an invalid value
\tjQuery.attrHooks.contenteditable = {
\t\tset: function( elem, value, name ) {
\t\t\tnodeHook.set( elem, value === \"\" ? false : value, name );
\t\t}
\t};

\t// Set width and height to auto instead of 0 on empty string( Bug #8150 )
\t// This is for removals
\tjQuery.each( [ \"width\", \"height\" ], function( i, name ) {
\t\tjQuery.attrHooks[ name ] = {
\t\t\tset: function( elem, value ) {
\t\t\t\tif ( value === \"\" ) {
\t\t\t\t\telem.setAttribute( name, \"auto\" );
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t};
\t} );
}

if ( !support.style ) {
\tjQuery.attrHooks.style = {
\t\tget: function( elem ) {

\t\t\t// Return undefined in the case of empty string
\t\t\t// Note: IE uppercases css property names, but if we were to .toLowerCase()
\t\t\t// .cssText, that would destroy case sensitivity in URL's, like in \"background\"
\t\t\treturn elem.style.cssText || undefined;
\t\t},
\t\tset: function( elem, value ) {
\t\t\treturn ( elem.style.cssText = value + \"\" );
\t\t}
\t};
}




var rfocusable = /^(?:input|select|textarea|button|object)\$/i,
\trclickable = /^(?:a|area)\$/i;

jQuery.fn.extend( {
\tprop: function( name, value ) {
\t\treturn access( this, jQuery.prop, name, value, arguments.length > 1 );
\t},

\tremoveProp: function( name ) {
\t\tname = jQuery.propFix[ name ] || name;
\t\treturn this.each( function() {

\t\t\t// try/catch handles cases where IE balks (such as removing a property on window)
\t\t\ttry {
\t\t\t\tthis[ name ] = undefined;
\t\t\t\tdelete this[ name ];
\t\t\t} catch ( e ) {}
\t\t} );
\t}
} );

jQuery.extend( {
\tprop: function( elem, name, value ) {
\t\tvar ret, hooks,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set properties on text, comment and attribute nodes
\t\tif ( nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {

\t\t\t// Fix name and attach hooks
\t\t\tname = jQuery.propFix[ name ] || name;
\t\t\thooks = jQuery.propHooks[ name ];
\t\t}

\t\tif ( value !== undefined ) {
\t\t\tif ( hooks && \"set\" in hooks &&
\t\t\t\t( ret = hooks.set( elem, value, name ) ) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\treturn ( elem[ name ] = value );
\t\t}

\t\tif ( hooks && \"get\" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
\t\t\treturn ret;
\t\t}

\t\treturn elem[ name ];
\t},

\tpropHooks: {
\t\ttabIndex: {
\t\t\tget: function( elem ) {

\t\t\t\t// elem.tabIndex doesn't always return the
\t\t\t\t// correct value when it hasn't been explicitly set
\t\t\t\t// http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
\t\t\t\t// Use proper attribute retrieval(#12072)
\t\t\t\tvar tabindex = jQuery.find.attr( elem, \"tabindex\" );

\t\t\t\treturn tabindex ?
\t\t\t\t\tparseInt( tabindex, 10 ) :
\t\t\t\t\trfocusable.test( elem.nodeName ) ||
\t\t\t\t\t\trclickable.test( elem.nodeName ) && elem.href ?
\t\t\t\t\t\t\t0 :
\t\t\t\t\t\t\t-1;
\t\t\t}
\t\t}
\t},

\tpropFix: {
\t\t\"for\": \"htmlFor\",
\t\t\"class\": \"className\"
\t}
} );

// Some attributes require a special call on IE
// http://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !support.hrefNormalized ) {

\t// href/src property should get the full normalized URL (#10299/#12915)
\tjQuery.each( [ \"href\", \"src\" ], function( i, name ) {
\t\tjQuery.propHooks[ name ] = {
\t\t\tget: function( elem ) {
\t\t\t\treturn elem.getAttribute( name, 4 );
\t\t\t}
\t\t};
\t} );
}

// Support: Safari, IE9+
// Accessing the selectedIndex property
// forces the browser to respect setting selected
// on the option
// The getter ensures a default option is selected
// when in an optgroup
if ( !support.optSelected ) {
\tjQuery.propHooks.selected = {
\t\tget: function( elem ) {
\t\t\tvar parent = elem.parentNode;

\t\t\tif ( parent ) {
\t\t\t\tparent.selectedIndex;

\t\t\t\t// Make sure that it also works with optgroups, see #5701
\t\t\t\tif ( parent.parentNode ) {
\t\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t\t}
\t\t\t}
\t\t\treturn null;
\t\t},
\t\tset: function( elem ) {
\t\t\tvar parent = elem.parentNode;
\t\t\tif ( parent ) {
\t\t\t\tparent.selectedIndex;

\t\t\t\tif ( parent.parentNode ) {
\t\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t\t}
\t\t\t}
\t\t}
\t};
}

jQuery.each( [
\t\"tabIndex\",
\t\"readOnly\",
\t\"maxLength\",
\t\"cellSpacing\",
\t\"cellPadding\",
\t\"rowSpan\",
\t\"colSpan\",
\t\"useMap\",
\t\"frameBorder\",
\t\"contentEditable\"
], function() {
\tjQuery.propFix[ this.toLowerCase() ] = this;
} );

// IE6/7 call enctype encoding
if ( !support.enctype ) {
\tjQuery.propFix.enctype = \"encoding\";
}




var rclass = /[\\t\\r\\n\\f]/g;

function getClass( elem ) {
\treturn jQuery.attr( elem, \"class\" ) || \"\";
}

jQuery.fn.extend( {
\taddClass: function( value ) {
\t\tvar classes, elem, cur, curValue, clazz, j, finalValue,
\t\t\ti = 0;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each( function( j ) {
\t\t\t\tjQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
\t\t\t} );
\t\t}

\t\tif ( typeof value === \"string\" && value ) {
\t\t\tclasses = value.match( rnotwhite ) || [];

\t\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\t\tcurValue = getClass( elem );
\t\t\t\tcur = elem.nodeType === 1 &&
\t\t\t\t\t( \" \" + curValue + \" \" ).replace( rclass, \" \" );

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( ( clazz = classes[ j++ ] ) ) {
\t\t\t\t\t\tif ( cur.indexOf( \" \" + clazz + \" \" ) < 0 ) {
\t\t\t\t\t\t\tcur += clazz + \" \";
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = jQuery.trim( cur );
\t\t\t\t\tif ( curValue !== finalValue ) {
\t\t\t\t\t\tjQuery.attr( elem, \"class\", finalValue );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tremoveClass: function( value ) {
\t\tvar classes, elem, cur, curValue, clazz, j, finalValue,
\t\t\ti = 0;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each( function( j ) {
\t\t\t\tjQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
\t\t\t} );
\t\t}

\t\tif ( !arguments.length ) {
\t\t\treturn this.attr( \"class\", \"\" );
\t\t}

\t\tif ( typeof value === \"string\" && value ) {
\t\t\tclasses = value.match( rnotwhite ) || [];

\t\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\t\tcurValue = getClass( elem );

\t\t\t\t// This expression is here for better compressibility (see addClass)
\t\t\t\tcur = elem.nodeType === 1 &&
\t\t\t\t\t( \" \" + curValue + \" \" ).replace( rclass, \" \" );

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( ( clazz = classes[ j++ ] ) ) {

\t\t\t\t\t\t// Remove *all* instances
\t\t\t\t\t\twhile ( cur.indexOf( \" \" + clazz + \" \" ) > -1 ) {
\t\t\t\t\t\t\tcur = cur.replace( \" \" + clazz + \" \", \" \" );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = jQuery.trim( cur );
\t\t\t\t\tif ( curValue !== finalValue ) {
\t\t\t\t\t\tjQuery.attr( elem, \"class\", finalValue );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\ttoggleClass: function( value, stateVal ) {
\t\tvar type = typeof value;

\t\tif ( typeof stateVal === \"boolean\" && type === \"string\" ) {
\t\t\treturn stateVal ? this.addClass( value ) : this.removeClass( value );
\t\t}

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each( function( i ) {
\t\t\t\tjQuery( this ).toggleClass(
\t\t\t\t\tvalue.call( this, i, getClass( this ), stateVal ),
\t\t\t\t\tstateVal
\t\t\t\t);
\t\t\t} );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar className, i, self, classNames;

\t\t\tif ( type === \"string\" ) {

\t\t\t\t// Toggle individual class names
\t\t\t\ti = 0;
\t\t\t\tself = jQuery( this );
\t\t\t\tclassNames = value.match( rnotwhite ) || [];

\t\t\t\twhile ( ( className = classNames[ i++ ] ) ) {

\t\t\t\t\t// Check each className given, space separated list
\t\t\t\t\tif ( self.hasClass( className ) ) {
\t\t\t\t\t\tself.removeClass( className );
\t\t\t\t\t} else {
\t\t\t\t\t\tself.addClass( className );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Toggle whole class name
\t\t\t} else if ( value === undefined || type === \"boolean\" ) {
\t\t\t\tclassName = getClass( this );
\t\t\t\tif ( className ) {

\t\t\t\t\t// store className if set
\t\t\t\t\tjQuery._data( this, \"__className__\", className );
\t\t\t\t}

\t\t\t\t// If the element has a class name or if we're passed \"false\",
\t\t\t\t// then remove the whole classname (if there was one, the above saved it).
\t\t\t\t// Otherwise bring back whatever was previously saved (if anything),
\t\t\t\t// falling back to the empty string if nothing was stored.
\t\t\t\tjQuery.attr( this, \"class\",
\t\t\t\t\tclassName || value === false ?
\t\t\t\t\t\"\" :
\t\t\t\t\tjQuery._data( this, \"__className__\" ) || \"\"
\t\t\t\t);
\t\t\t}
\t\t} );
\t},

\thasClass: function( selector ) {
\t\tvar className, elem,
\t\t\ti = 0;

\t\tclassName = \" \" + selector + \" \";
\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\tif ( elem.nodeType === 1 &&
\t\t\t\t( \" \" + getClass( elem ) + \" \" ).replace( rclass, \" \" )
\t\t\t\t\t.indexOf( className ) > -1
\t\t\t) {
\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\treturn false;
\t}
} );




// Return jQuery for attributes-only inclusion


jQuery.each( ( \"blur focus focusin focusout load resize scroll unload click dblclick \" +
\t\"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave \" +
\t\"change select submit keydown keypress keyup error contextmenu\" ).split( \" \" ),
\tfunction( i, name ) {

\t// Handle event binding
\tjQuery.fn[ name ] = function( data, fn ) {
\t\treturn arguments.length > 0 ?
\t\t\tthis.on( name, null, data, fn ) :
\t\t\tthis.trigger( name );
\t};
} );

jQuery.fn.extend( {
\thover: function( fnOver, fnOut ) {
\t\treturn this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
\t}
} );


var location = window.location;

var nonce = jQuery.now();

var rquery = ( /\\?/ );



var rvalidtokens = /(,)|(\\[|{)|(}|])|\"(?:[^\"\\\\\\r\\n]|\\\\[\"\\\\\\/bfnrt]|\\\\u[\\da-fA-F]{4})*\"\\s*:?|true|false|null|-?(?!0\\d)\\d+(?:\\.\\d+|)(?:[eE][+-]?\\d+|)/g;

jQuery.parseJSON = function( data ) {

\t// Attempt to parse using the native JSON parser first
\tif ( window.JSON && window.JSON.parse ) {

\t\t// Support: Android 2.3
\t\t// Workaround failure to string-cast null input
\t\treturn window.JSON.parse( data + \"\" );
\t}

\tvar requireNonComma,
\t\tdepth = null,
\t\tstr = jQuery.trim( data + \"\" );

\t// Guard against invalid (and possibly dangerous) input by ensuring that nothing remains
\t// after removing valid tokens
\treturn str && !jQuery.trim( str.replace( rvalidtokens, function( token, comma, open, close ) {

\t\t// Force termination if we see a misplaced comma
\t\tif ( requireNonComma && comma ) {
\t\t\tdepth = 0;
\t\t}

\t\t// Perform no more replacements after returning to outermost depth
\t\tif ( depth === 0 ) {
\t\t\treturn token;
\t\t}

\t\t// Commas must not follow \"[\", \"{\", or \",\"
\t\trequireNonComma = open || comma;

\t\t// Determine new depth
\t\t// array/object open (\"[\" or \"{\"): depth += true - false (increment)
\t\t// array/object close (\"]\" or \"}\"): depth += false - true (decrement)
\t\t// other cases (\",\" or primitive): depth += true - true (numeric cast)
\t\tdepth += !close - !open;

\t\t// Remove this token
\t\treturn \"\";
\t} ) ) ?
\t\t( Function( \"return \" + str ) )() :
\t\tjQuery.error( \"Invalid JSON: \" + data );
};


// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
\tvar xml, tmp;
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}
\ttry {
\t\tif ( window.DOMParser ) { // Standard
\t\t\ttmp = new window.DOMParser();
\t\t\txml = tmp.parseFromString( data, \"text/xml\" );
\t\t} else { // IE
\t\t\txml = new window.ActiveXObject( \"Microsoft.XMLDOM\" );
\t\t\txml.async = \"false\";
\t\t\txml.loadXML( data );
\t\t}
\t} catch ( e ) {
\t\txml = undefined;
\t}
\tif ( !xml || !xml.documentElement || xml.getElementsByTagName( \"parsererror\" ).length ) {
\t\tjQuery.error( \"Invalid XML: \" + data );
\t}
\treturn xml;
};


var
\trhash = /#.*\$/,
\trts = /([?&])_=[^&]*/,

\t// IE leaves an \\r character at EOL
\trheaders = /^(.*?):[ \\t]*([^\\r\\n]*)\\r?\$/mg,

\t// #7653, #8125, #8152: local protocol detection
\trlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):\$/,
\trnoContent = /^(?:GET|HEAD)\$/,
\trprotocol = /^\\/\\//,
\trurl = /^([\\w.+-]+:)(?:\\/\\/(?:[^\\/?#]*@|)([^\\/?#:]*)(?::(\\d+)|)|)/,

\t/* Prefilters
\t * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
\t * 2) These are called:
\t *    - BEFORE asking for a transport
\t *    - AFTER param serialization (s.data is a string if s.processData is true)
\t * 3) key is the dataType
\t * 4) the catchall symbol \"*\" can be used
\t * 5) execution will start with transport dataType and THEN continue down to \"*\" if needed
\t */
\tprefilters = {},

\t/* Transports bindings
\t * 1) key is the dataType
\t * 2) the catchall symbol \"*\" can be used
\t * 3) selection will start with transport dataType and THEN go to \"*\" if needed
\t */
\ttransports = {},

\t// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
\tallTypes = \"*/\".concat( \"*\" ),

\t// Document location
\tajaxLocation = location.href,

\t// Segment location into parts
\tajaxLocParts = rurl.exec( ajaxLocation.toLowerCase() ) || [];

// Base \"constructor\" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
function addToPrefiltersOrTransports( structure ) {

\t// dataTypeExpression is optional and defaults to \"*\"
\treturn function( dataTypeExpression, func ) {

\t\tif ( typeof dataTypeExpression !== \"string\" ) {
\t\t\tfunc = dataTypeExpression;
\t\t\tdataTypeExpression = \"*\";
\t\t}

\t\tvar dataType,
\t\t\ti = 0,
\t\t\tdataTypes = dataTypeExpression.toLowerCase().match( rnotwhite ) || [];

\t\tif ( jQuery.isFunction( func ) ) {

\t\t\t// For each dataType in the dataTypeExpression
\t\t\twhile ( ( dataType = dataTypes[ i++ ] ) ) {

\t\t\t\t// Prepend if requested
\t\t\t\tif ( dataType.charAt( 0 ) === \"+\" ) {
\t\t\t\t\tdataType = dataType.slice( 1 ) || \"*\";
\t\t\t\t\t( structure[ dataType ] = structure[ dataType ] || [] ).unshift( func );

\t\t\t\t// Otherwise append
\t\t\t\t} else {
\t\t\t\t\t( structure[ dataType ] = structure[ dataType ] || [] ).push( func );
\t\t\t\t}
\t\t\t}
\t\t}
\t};
}

// Base inspection function for prefilters and transports
function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

\tvar inspected = {},
\t\tseekingTransport = ( structure === transports );

\tfunction inspect( dataType ) {
\t\tvar selected;
\t\tinspected[ dataType ] = true;
\t\tjQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
\t\t\tvar dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
\t\t\tif ( typeof dataTypeOrTransport === \"string\" &&
\t\t\t\t!seekingTransport && !inspected[ dataTypeOrTransport ] ) {

\t\t\t\toptions.dataTypes.unshift( dataTypeOrTransport );
\t\t\t\tinspect( dataTypeOrTransport );
\t\t\t\treturn false;
\t\t\t} else if ( seekingTransport ) {
\t\t\t\treturn !( selected = dataTypeOrTransport );
\t\t\t}
\t\t} );
\t\treturn selected;
\t}

\treturn inspect( options.dataTypes[ 0 ] ) || !inspected[ \"*\" ] && inspect( \"*\" );
}

// A special extend for ajax options
// that takes \"flat\" options (not to be deep extended)
// Fixes #9887
function ajaxExtend( target, src ) {
\tvar deep, key,
\t\tflatOptions = jQuery.ajaxSettings.flatOptions || {};

\tfor ( key in src ) {
\t\tif ( src[ key ] !== undefined ) {
\t\t\t( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];
\t\t}
\t}
\tif ( deep ) {
\t\tjQuery.extend( true, target, deep );
\t}

\treturn target;
}

/* Handles responses to an ajax request:
 * - finds the right dataType (mediates between content-type and expected dataType)
 * - returns the corresponding response
 */
function ajaxHandleResponses( s, jqXHR, responses ) {
\tvar firstDataType, ct, finalDataType, type,
\t\tcontents = s.contents,
\t\tdataTypes = s.dataTypes;

\t// Remove auto dataType and get content-type in the process
\twhile ( dataTypes[ 0 ] === \"*\" ) {
\t\tdataTypes.shift();
\t\tif ( ct === undefined ) {
\t\t\tct = s.mimeType || jqXHR.getResponseHeader( \"Content-Type\" );
\t\t}
\t}

\t// Check if we're dealing with a known content-type
\tif ( ct ) {
\t\tfor ( type in contents ) {
\t\t\tif ( contents[ type ] && contents[ type ].test( ct ) ) {
\t\t\t\tdataTypes.unshift( type );
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}

\t// Check to see if we have a response for the expected dataType
\tif ( dataTypes[ 0 ] in responses ) {
\t\tfinalDataType = dataTypes[ 0 ];
\t} else {

\t\t// Try convertible dataTypes
\t\tfor ( type in responses ) {
\t\t\tif ( !dataTypes[ 0 ] || s.converters[ type + \" \" + dataTypes[ 0 ] ] ) {
\t\t\t\tfinalDataType = type;
\t\t\t\tbreak;
\t\t\t}
\t\t\tif ( !firstDataType ) {
\t\t\t\tfirstDataType = type;
\t\t\t}
\t\t}

\t\t// Or just use first one
\t\tfinalDataType = finalDataType || firstDataType;
\t}

\t// If we found a dataType
\t// We add the dataType to the list if needed
\t// and return the corresponding response
\tif ( finalDataType ) {
\t\tif ( finalDataType !== dataTypes[ 0 ] ) {
\t\t\tdataTypes.unshift( finalDataType );
\t\t}
\t\treturn responses[ finalDataType ];
\t}
}

/* Chain conversions given the request and the original response
 * Also sets the responseXXX fields on the jqXHR instance
 */
function ajaxConvert( s, response, jqXHR, isSuccess ) {
\tvar conv2, current, conv, tmp, prev,
\t\tconverters = {},

\t\t// Work with a copy of dataTypes in case we need to modify it for conversion
\t\tdataTypes = s.dataTypes.slice();

\t// Create converters map with lowercased keys
\tif ( dataTypes[ 1 ] ) {
\t\tfor ( conv in s.converters ) {
\t\t\tconverters[ conv.toLowerCase() ] = s.converters[ conv ];
\t\t}
\t}

\tcurrent = dataTypes.shift();

\t// Convert to each sequential dataType
\twhile ( current ) {

\t\tif ( s.responseFields[ current ] ) {
\t\t\tjqXHR[ s.responseFields[ current ] ] = response;
\t\t}

\t\t// Apply the dataFilter if provided
\t\tif ( !prev && isSuccess && s.dataFilter ) {
\t\t\tresponse = s.dataFilter( response, s.dataType );
\t\t}

\t\tprev = current;
\t\tcurrent = dataTypes.shift();

\t\tif ( current ) {

\t\t\t// There's only work to do if current dataType is non-auto
\t\t\tif ( current === \"*\" ) {

\t\t\t\tcurrent = prev;

\t\t\t// Convert response if prev dataType is non-auto and differs from current
\t\t\t} else if ( prev !== \"*\" && prev !== current ) {

\t\t\t\t// Seek a direct converter
\t\t\t\tconv = converters[ prev + \" \" + current ] || converters[ \"* \" + current ];

\t\t\t\t// If none found, seek a pair
\t\t\t\tif ( !conv ) {
\t\t\t\t\tfor ( conv2 in converters ) {

\t\t\t\t\t\t// If conv2 outputs current
\t\t\t\t\t\ttmp = conv2.split( \" \" );
\t\t\t\t\t\tif ( tmp[ 1 ] === current ) {

\t\t\t\t\t\t\t// If prev can be converted to accepted input
\t\t\t\t\t\t\tconv = converters[ prev + \" \" + tmp[ 0 ] ] ||
\t\t\t\t\t\t\t\tconverters[ \"* \" + tmp[ 0 ] ];
\t\t\t\t\t\t\tif ( conv ) {

\t\t\t\t\t\t\t\t// Condense equivalence converters
\t\t\t\t\t\t\t\tif ( conv === true ) {
\t\t\t\t\t\t\t\t\tconv = converters[ conv2 ];

\t\t\t\t\t\t\t\t// Otherwise, insert the intermediate dataType
\t\t\t\t\t\t\t\t} else if ( converters[ conv2 ] !== true ) {
\t\t\t\t\t\t\t\t\tcurrent = tmp[ 0 ];
\t\t\t\t\t\t\t\t\tdataTypes.unshift( tmp[ 1 ] );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Apply converter (if not an equivalence)
\t\t\t\tif ( conv !== true ) {

\t\t\t\t\t// Unless errors are allowed to bubble, catch and return them
\t\t\t\t\tif ( conv && s[ \"throws\" ] ) { // jscs:ignore requireDotNotation
\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t} else {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t\t} catch ( e ) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tstate: \"parsererror\",
\t\t\t\t\t\t\t\terror: conv ? e : \"No conversion from \" + prev + \" to \" + current
\t\t\t\t\t\t\t};
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn { state: \"success\", data: response };
}

jQuery.extend( {

\t// Counter for holding the number of active queries
\tactive: 0,

\t// Last-Modified header cache for next request
\tlastModified: {},
\tetag: {},

\tajaxSettings: {
\t\turl: ajaxLocation,
\t\ttype: \"GET\",
\t\tisLocal: rlocalProtocol.test( ajaxLocParts[ 1 ] ),
\t\tglobal: true,
\t\tprocessData: true,
\t\tasync: true,
\t\tcontentType: \"application/x-www-form-urlencoded; charset=UTF-8\",
\t\t/*
\t\ttimeout: 0,
\t\tdata: null,
\t\tdataType: null,
\t\tusername: null,
\t\tpassword: null,
\t\tcache: null,
\t\tthrows: false,
\t\ttraditional: false,
\t\theaders: {},
\t\t*/

\t\taccepts: {
\t\t\t\"*\": allTypes,
\t\t\ttext: \"text/plain\",
\t\t\thtml: \"text/html\",
\t\t\txml: \"application/xml, text/xml\",
\t\t\tjson: \"application/json, text/javascript\"
\t\t},

\t\tcontents: {
\t\t\txml: /\\bxml\\b/,
\t\t\thtml: /\\bhtml/,
\t\t\tjson: /\\bjson\\b/
\t\t},

\t\tresponseFields: {
\t\t\txml: \"responseXML\",
\t\t\ttext: \"responseText\",
\t\t\tjson: \"responseJSON\"
\t\t},

\t\t// Data converters
\t\t// Keys separate source (or catchall \"*\") and destination types with a single space
\t\tconverters: {

\t\t\t// Convert anything to text
\t\t\t\"* text\": String,

\t\t\t// Text to html (true = no transformation)
\t\t\t\"text html\": true,

\t\t\t// Evaluate text as a json expression
\t\t\t\"text json\": jQuery.parseJSON,

\t\t\t// Parse text as xml
\t\t\t\"text xml\": jQuery.parseXML
\t\t},

\t\t// For options that shouldn't be deep extended:
\t\t// you can add your own custom options here if
\t\t// and when you create one that shouldn't be
\t\t// deep extended (see ajaxExtend)
\t\tflatOptions: {
\t\t\turl: true,
\t\t\tcontext: true
\t\t}
\t},

\t// Creates a full fledged settings object into target
\t// with both ajaxSettings and settings fields.
\t// If target is omitted, writes into ajaxSettings.
\tajaxSetup: function( target, settings ) {
\t\treturn settings ?

\t\t\t// Building a settings object
\t\t\tajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

\t\t\t// Extending ajaxSettings
\t\t\tajaxExtend( jQuery.ajaxSettings, target );
\t},

\tajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
\tajaxTransport: addToPrefiltersOrTransports( transports ),

\t// Main method
\tajax: function( url, options ) {

\t\t// If url is an object, simulate pre-1.5 signature
\t\tif ( typeof url === \"object\" ) {
\t\t\toptions = url;
\t\t\turl = undefined;
\t\t}

\t\t// Force options to be an object
\t\toptions = options || {};

\t\tvar

\t\t\t// Cross-domain detection vars
\t\t\tparts,

\t\t\t// Loop variable
\t\t\ti,

\t\t\t// URL without anti-cache param
\t\t\tcacheURL,

\t\t\t// Response headers as string
\t\t\tresponseHeadersString,

\t\t\t// timeout handle
\t\t\ttimeoutTimer,

\t\t\t// To know if global events are to be dispatched
\t\t\tfireGlobals,

\t\t\ttransport,

\t\t\t// Response headers
\t\t\tresponseHeaders,

\t\t\t// Create the final options object
\t\t\ts = jQuery.ajaxSetup( {}, options ),

\t\t\t// Callbacks context
\t\t\tcallbackContext = s.context || s,

\t\t\t// Context for global events is callbackContext if it is a DOM node or jQuery collection
\t\t\tglobalEventContext = s.context &&
\t\t\t\t( callbackContext.nodeType || callbackContext.jquery ) ?
\t\t\t\t\tjQuery( callbackContext ) :
\t\t\t\t\tjQuery.event,

\t\t\t// Deferreds
\t\t\tdeferred = jQuery.Deferred(),
\t\t\tcompleteDeferred = jQuery.Callbacks( \"once memory\" ),

\t\t\t// Status-dependent callbacks
\t\t\tstatusCode = s.statusCode || {},

\t\t\t// Headers (they are sent all at once)
\t\t\trequestHeaders = {},
\t\t\trequestHeadersNames = {},

\t\t\t// The jqXHR state
\t\t\tstate = 0,

\t\t\t// Default abort message
\t\t\tstrAbort = \"canceled\",

\t\t\t// Fake xhr
\t\t\tjqXHR = {
\t\t\t\treadyState: 0,

\t\t\t\t// Builds headers hashtable if needed
\t\t\t\tgetResponseHeader: function( key ) {
\t\t\t\t\tvar match;
\t\t\t\t\tif ( state === 2 ) {
\t\t\t\t\t\tif ( !responseHeaders ) {
\t\t\t\t\t\t\tresponseHeaders = {};
\t\t\t\t\t\t\twhile ( ( match = rheaders.exec( responseHeadersString ) ) ) {
\t\t\t\t\t\t\t\tresponseHeaders[ match[ 1 ].toLowerCase() ] = match[ 2 ];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tmatch = responseHeaders[ key.toLowerCase() ];
\t\t\t\t\t}
\t\t\t\t\treturn match == null ? null : match;
\t\t\t\t},

\t\t\t\t// Raw string
\t\t\t\tgetAllResponseHeaders: function() {
\t\t\t\t\treturn state === 2 ? responseHeadersString : null;
\t\t\t\t},

\t\t\t\t// Caches the header
\t\t\t\tsetRequestHeader: function( name, value ) {
\t\t\t\t\tvar lname = name.toLowerCase();
\t\t\t\t\tif ( !state ) {
\t\t\t\t\t\tname = requestHeadersNames[ lname ] = requestHeadersNames[ lname ] || name;
\t\t\t\t\t\trequestHeaders[ name ] = value;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Overrides response content-type header
\t\t\t\toverrideMimeType: function( type ) {
\t\t\t\t\tif ( !state ) {
\t\t\t\t\t\ts.mimeType = type;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Status-dependent callbacks
\t\t\t\tstatusCode: function( map ) {
\t\t\t\t\tvar code;
\t\t\t\t\tif ( map ) {
\t\t\t\t\t\tif ( state < 2 ) {
\t\t\t\t\t\t\tfor ( code in map ) {

\t\t\t\t\t\t\t\t// Lazy-add the new callback in a way that preserves old ones
\t\t\t\t\t\t\t\tstatusCode[ code ] = [ statusCode[ code ], map[ code ] ];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t// Execute the appropriate callbacks
\t\t\t\t\t\t\tjqXHR.always( map[ jqXHR.status ] );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Cancel the request
\t\t\t\tabort: function( statusText ) {
\t\t\t\t\tvar finalText = statusText || strAbort;
\t\t\t\t\tif ( transport ) {
\t\t\t\t\t\ttransport.abort( finalText );
\t\t\t\t\t}
\t\t\t\t\tdone( 0, finalText );
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t};

\t\t// Attach deferreds
\t\tdeferred.promise( jqXHR ).complete = completeDeferred.add;
\t\tjqXHR.success = jqXHR.done;
\t\tjqXHR.error = jqXHR.fail;

\t\t// Remove hash character (#7531: and string promotion)
\t\t// Add protocol if not provided (#5866: IE7 issue with protocol-less urls)
\t\t// Handle falsy url in the settings object (#10093: consistency with old signature)
\t\t// We also use the url parameter if available
\t\ts.url = ( ( url || s.url || ajaxLocation ) + \"\" )
\t\t\t.replace( rhash, \"\" )
\t\t\t.replace( rprotocol, ajaxLocParts[ 1 ] + \"//\" );

\t\t// Alias method option to type as per ticket #12004
\t\ts.type = options.method || options.type || s.method || s.type;

\t\t// Extract dataTypes list
\t\ts.dataTypes = jQuery.trim( s.dataType || \"*\" ).toLowerCase().match( rnotwhite ) || [ \"\" ];

\t\t// A cross-domain request is in order when we have a protocol:host:port mismatch
\t\tif ( s.crossDomain == null ) {
\t\t\tparts = rurl.exec( s.url.toLowerCase() );
\t\t\ts.crossDomain = !!( parts &&
\t\t\t\t( parts[ 1 ] !== ajaxLocParts[ 1 ] || parts[ 2 ] !== ajaxLocParts[ 2 ] ||
\t\t\t\t\t( parts[ 3 ] || ( parts[ 1 ] === \"http:\" ? \"80\" : \"443\" ) ) !==
\t\t\t\t\t\t( ajaxLocParts[ 3 ] || ( ajaxLocParts[ 1 ] === \"http:\" ? \"80\" : \"443\" ) ) )
\t\t\t);
\t\t}

\t\t// Convert data if not already a string
\t\tif ( s.data && s.processData && typeof s.data !== \"string\" ) {
\t\t\ts.data = jQuery.param( s.data, s.traditional );
\t\t}

\t\t// Apply prefilters
\t\tinspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

\t\t// If request was aborted inside a prefilter, stop there
\t\tif ( state === 2 ) {
\t\t\treturn jqXHR;
\t\t}

\t\t// We can fire global events as of now if asked to
\t\t// Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)
\t\tfireGlobals = jQuery.event && s.global;

\t\t// Watch for a new set of requests
\t\tif ( fireGlobals && jQuery.active++ === 0 ) {
\t\t\tjQuery.event.trigger( \"ajaxStart\" );
\t\t}

\t\t// Uppercase the type
\t\ts.type = s.type.toUpperCase();

\t\t// Determine if request has content
\t\ts.hasContent = !rnoContent.test( s.type );

\t\t// Save the URL in case we're toying with the If-Modified-Since
\t\t// and/or If-None-Match header later on
\t\tcacheURL = s.url;

\t\t// More options handling for requests with no content
\t\tif ( !s.hasContent ) {

\t\t\t// If data is available, append data to url
\t\t\tif ( s.data ) {
\t\t\t\tcacheURL = ( s.url += ( rquery.test( cacheURL ) ? \"&\" : \"?\" ) + s.data );

\t\t\t\t// #9682: remove data so that it's not used in an eventual retry
\t\t\t\tdelete s.data;
\t\t\t}

\t\t\t// Add anti-cache in url if needed
\t\t\tif ( s.cache === false ) {
\t\t\t\ts.url = rts.test( cacheURL ) ?

\t\t\t\t\t// If there is already a '_' parameter, set its value
\t\t\t\t\tcacheURL.replace( rts, \"\$1_=\" + nonce++ ) :

\t\t\t\t\t// Otherwise add one to the end
\t\t\t\t\tcacheURL + ( rquery.test( cacheURL ) ? \"&\" : \"?\" ) + \"_=\" + nonce++;
\t\t\t}
\t\t}

\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\tif ( s.ifModified ) {
\t\t\tif ( jQuery.lastModified[ cacheURL ] ) {
\t\t\t\tjqXHR.setRequestHeader( \"If-Modified-Since\", jQuery.lastModified[ cacheURL ] );
\t\t\t}
\t\t\tif ( jQuery.etag[ cacheURL ] ) {
\t\t\t\tjqXHR.setRequestHeader( \"If-None-Match\", jQuery.etag[ cacheURL ] );
\t\t\t}
\t\t}

\t\t// Set the correct header, if data is being sent
\t\tif ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
\t\t\tjqXHR.setRequestHeader( \"Content-Type\", s.contentType );
\t\t}

\t\t// Set the Accepts header for the server, depending on the dataType
\t\tjqXHR.setRequestHeader(
\t\t\t\"Accept\",
\t\t\ts.dataTypes[ 0 ] && s.accepts[ s.dataTypes[ 0 ] ] ?
\t\t\t\ts.accepts[ s.dataTypes[ 0 ] ] +
\t\t\t\t\t( s.dataTypes[ 0 ] !== \"*\" ? \", \" + allTypes + \"; q=0.01\" : \"\" ) :
\t\t\t\ts.accepts[ \"*\" ]
\t\t);

\t\t// Check for headers option
\t\tfor ( i in s.headers ) {
\t\t\tjqXHR.setRequestHeader( i, s.headers[ i ] );
\t\t}

\t\t// Allow custom headers/mimetypes and early abort
\t\tif ( s.beforeSend &&
\t\t\t( s.beforeSend.call( callbackContext, jqXHR, s ) === false || state === 2 ) ) {

\t\t\t// Abort if not done already and return
\t\t\treturn jqXHR.abort();
\t\t}

\t\t// aborting is no longer a cancellation
\t\tstrAbort = \"abort\";

\t\t// Install callbacks on deferreds
\t\tfor ( i in { success: 1, error: 1, complete: 1 } ) {
\t\t\tjqXHR[ i ]( s[ i ] );
\t\t}

\t\t// Get transport
\t\ttransport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

\t\t// If no transport, we auto-abort
\t\tif ( !transport ) {
\t\t\tdone( -1, \"No Transport\" );
\t\t} else {
\t\t\tjqXHR.readyState = 1;

\t\t\t// Send global event
\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( \"ajaxSend\", [ jqXHR, s ] );
\t\t\t}

\t\t\t// If request was aborted inside ajaxSend, stop there
\t\t\tif ( state === 2 ) {
\t\t\t\treturn jqXHR;
\t\t\t}

\t\t\t// Timeout
\t\t\tif ( s.async && s.timeout > 0 ) {
\t\t\t\ttimeoutTimer = window.setTimeout( function() {
\t\t\t\t\tjqXHR.abort( \"timeout\" );
\t\t\t\t}, s.timeout );
\t\t\t}

\t\t\ttry {
\t\t\t\tstate = 1;
\t\t\t\ttransport.send( requestHeaders, done );
\t\t\t} catch ( e ) {

\t\t\t\t// Propagate exception as error if not done
\t\t\t\tif ( state < 2 ) {
\t\t\t\t\tdone( -1, e );

\t\t\t\t// Simply rethrow otherwise
\t\t\t\t} else {
\t\t\t\t\tthrow e;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Callback for when everything is done
\t\tfunction done( status, nativeStatusText, responses, headers ) {
\t\t\tvar isSuccess, success, error, response, modified,
\t\t\t\tstatusText = nativeStatusText;

\t\t\t// Called once
\t\t\tif ( state === 2 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// State is \"done\" now
\t\t\tstate = 2;

\t\t\t// Clear timeout if it exists
\t\t\tif ( timeoutTimer ) {
\t\t\t\twindow.clearTimeout( timeoutTimer );
\t\t\t}

\t\t\t// Dereference transport for early garbage collection
\t\t\t// (no matter how long the jqXHR object will be used)
\t\t\ttransport = undefined;

\t\t\t// Cache response headers
\t\t\tresponseHeadersString = headers || \"\";

\t\t\t// Set readyState
\t\t\tjqXHR.readyState = status > 0 ? 4 : 0;

\t\t\t// Determine if successful
\t\t\tisSuccess = status >= 200 && status < 300 || status === 304;

\t\t\t// Get response data
\t\t\tif ( responses ) {
\t\t\t\tresponse = ajaxHandleResponses( s, jqXHR, responses );
\t\t\t}

\t\t\t// Convert no matter what (that way responseXXX fields are always set)
\t\t\tresponse = ajaxConvert( s, response, jqXHR, isSuccess );

\t\t\t// If successful, handle type chaining
\t\t\tif ( isSuccess ) {

\t\t\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\t\t\tif ( s.ifModified ) {
\t\t\t\t\tmodified = jqXHR.getResponseHeader( \"Last-Modified\" );
\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\tjQuery.lastModified[ cacheURL ] = modified;
\t\t\t\t\t}
\t\t\t\t\tmodified = jqXHR.getResponseHeader( \"etag\" );
\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\tjQuery.etag[ cacheURL ] = modified;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// if no content
\t\t\t\tif ( status === 204 || s.type === \"HEAD\" ) {
\t\t\t\t\tstatusText = \"nocontent\";

\t\t\t\t// if not modified
\t\t\t\t} else if ( status === 304 ) {
\t\t\t\t\tstatusText = \"notmodified\";

\t\t\t\t// If we have data, let's convert it
\t\t\t\t} else {
\t\t\t\t\tstatusText = response.state;
\t\t\t\t\tsuccess = response.data;
\t\t\t\t\terror = response.error;
\t\t\t\t\tisSuccess = !error;
\t\t\t\t}
\t\t\t} else {

\t\t\t\t// We extract error from statusText
\t\t\t\t// then normalize statusText and status for non-aborts
\t\t\t\terror = statusText;
\t\t\t\tif ( status || !statusText ) {
\t\t\t\t\tstatusText = \"error\";
\t\t\t\t\tif ( status < 0 ) {
\t\t\t\t\t\tstatus = 0;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Set data for the fake xhr object
\t\t\tjqXHR.status = status;
\t\t\tjqXHR.statusText = ( nativeStatusText || statusText ) + \"\";

\t\t\t// Success/Error
\t\t\tif ( isSuccess ) {
\t\t\t\tdeferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
\t\t\t} else {
\t\t\t\tdeferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
\t\t\t}

\t\t\t// Status-dependent callbacks
\t\t\tjqXHR.statusCode( statusCode );
\t\t\tstatusCode = undefined;

\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( isSuccess ? \"ajaxSuccess\" : \"ajaxError\",
\t\t\t\t\t[ jqXHR, s, isSuccess ? success : error ] );
\t\t\t}

\t\t\t// Complete
\t\t\tcompleteDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( \"ajaxComplete\", [ jqXHR, s ] );

\t\t\t\t// Handle the global AJAX counter
\t\t\t\tif ( !( --jQuery.active ) ) {
\t\t\t\t\tjQuery.event.trigger( \"ajaxStop\" );
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn jqXHR;
\t},

\tgetJSON: function( url, data, callback ) {
\t\treturn jQuery.get( url, data, callback, \"json\" );
\t},

\tgetScript: function( url, callback ) {
\t\treturn jQuery.get( url, undefined, callback, \"script\" );
\t}
} );

jQuery.each( [ \"get\", \"post\" ], function( i, method ) {
\tjQuery[ method ] = function( url, data, callback, type ) {

\t\t// shift arguments if data argument was omitted
\t\tif ( jQuery.isFunction( data ) ) {
\t\t\ttype = type || callback;
\t\t\tcallback = data;
\t\t\tdata = undefined;
\t\t}

\t\t// The url can be an options object (which then must have .url)
\t\treturn jQuery.ajax( jQuery.extend( {
\t\t\turl: url,
\t\t\ttype: method,
\t\t\tdataType: type,
\t\t\tdata: data,
\t\t\tsuccess: callback
\t\t}, jQuery.isPlainObject( url ) && url ) );
\t};
} );


jQuery._evalUrl = function( url ) {
\treturn jQuery.ajax( {
\t\turl: url,

\t\t// Make this explicit, since user can override this through ajaxSetup (#11264)
\t\ttype: \"GET\",
\t\tdataType: \"script\",
\t\tcache: true,
\t\tasync: false,
\t\tglobal: false,
\t\t\"throws\": true
\t} );
};


jQuery.fn.extend( {
\twrapAll: function( html ) {
\t\tif ( jQuery.isFunction( html ) ) {
\t\t\treturn this.each( function( i ) {
\t\t\t\tjQuery( this ).wrapAll( html.call( this, i ) );
\t\t\t} );
\t\t}

\t\tif ( this[ 0 ] ) {

\t\t\t// The elements to wrap the target around
\t\t\tvar wrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

\t\t\tif ( this[ 0 ].parentNode ) {
\t\t\t\twrap.insertBefore( this[ 0 ] );
\t\t\t}

\t\t\twrap.map( function() {
\t\t\t\tvar elem = this;

\t\t\t\twhile ( elem.firstChild && elem.firstChild.nodeType === 1 ) {
\t\t\t\t\telem = elem.firstChild;
\t\t\t\t}

\t\t\t\treturn elem;
\t\t\t} ).append( this );
\t\t}

\t\treturn this;
\t},

\twrapInner: function( html ) {
\t\tif ( jQuery.isFunction( html ) ) {
\t\t\treturn this.each( function( i ) {
\t\t\t\tjQuery( this ).wrapInner( html.call( this, i ) );
\t\t\t} );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar self = jQuery( this ),
\t\t\t\tcontents = self.contents();

\t\t\tif ( contents.length ) {
\t\t\t\tcontents.wrapAll( html );

\t\t\t} else {
\t\t\t\tself.append( html );
\t\t\t}
\t\t} );
\t},

\twrap: function( html ) {
\t\tvar isFunction = jQuery.isFunction( html );

\t\treturn this.each( function( i ) {
\t\t\tjQuery( this ).wrapAll( isFunction ? html.call( this, i ) : html );
\t\t} );
\t},

\tunwrap: function() {
\t\treturn this.parent().each( function() {
\t\t\tif ( !jQuery.nodeName( this, \"body\" ) ) {
\t\t\t\tjQuery( this ).replaceWith( this.childNodes );
\t\t\t}
\t\t} ).end();
\t}
} );


function getDisplay( elem ) {
\treturn elem.style && elem.style.display || jQuery.css( elem, \"display\" );
}

function filterHidden( elem ) {

\t// Disconnected elements are considered hidden
\tif ( !jQuery.contains( elem.ownerDocument || document, elem ) ) {
\t\treturn true;
\t}
\twhile ( elem && elem.nodeType === 1 ) {
\t\tif ( getDisplay( elem ) === \"none\" || elem.type === \"hidden\" ) {
\t\t\treturn true;
\t\t}
\t\telem = elem.parentNode;
\t}
\treturn false;
}

jQuery.expr.filters.hidden = function( elem ) {

\t// Support: Opera <= 12.12
\t// Opera reports offsetWidths and offsetHeights less than zero on some elements
\treturn support.reliableHiddenOffsets() ?
\t\t( elem.offsetWidth <= 0 && elem.offsetHeight <= 0 &&
\t\t\t!elem.getClientRects().length ) :
\t\t\tfilterHidden( elem );
};

jQuery.expr.filters.visible = function( elem ) {
\treturn !jQuery.expr.filters.hidden( elem );
};




var r20 = /%20/g,
\trbracket = /\\[\\]\$/,
\trCRLF = /\\r?\\n/g,
\trsubmitterTypes = /^(?:submit|button|image|reset|file)\$/i,
\trsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
\tvar name;

\tif ( jQuery.isArray( obj ) ) {

\t\t// Serialize array item.
\t\tjQuery.each( obj, function( i, v ) {
\t\t\tif ( traditional || rbracket.test( prefix ) ) {

\t\t\t\t// Treat each array item as a scalar.
\t\t\t\tadd( prefix, v );

\t\t\t} else {

\t\t\t\t// Item is non-scalar (array or object), encode its numeric index.
\t\t\t\tbuildParams(
\t\t\t\t\tprefix + \"[\" + ( typeof v === \"object\" && v != null ? i : \"\" ) + \"]\",
\t\t\t\t\tv,
\t\t\t\t\ttraditional,
\t\t\t\t\tadd
\t\t\t\t);
\t\t\t}
\t\t} );

\t} else if ( !traditional && jQuery.type( obj ) === \"object\" ) {

\t\t// Serialize object item.
\t\tfor ( name in obj ) {
\t\t\tbuildParams( prefix + \"[\" + name + \"]\", obj[ name ], traditional, add );
\t\t}

\t} else {

\t\t// Serialize scalar item.
\t\tadd( prefix, obj );
\t}
}

// Serialize an array of form elements or a set of
// key/values into a query string
jQuery.param = function( a, traditional ) {
\tvar prefix,
\t\ts = [],
\t\tadd = function( key, value ) {

\t\t\t// If value is a function, invoke it and return its value
\t\t\tvalue = jQuery.isFunction( value ) ? value() : ( value == null ? \"\" : value );
\t\t\ts[ s.length ] = encodeURIComponent( key ) + \"=\" + encodeURIComponent( value );
\t\t};

\t// Set traditional to true for jQuery <= 1.3.2 behavior.
\tif ( traditional === undefined ) {
\t\ttraditional = jQuery.ajaxSettings && jQuery.ajaxSettings.traditional;
\t}

\t// If an array was passed in, assume that it is an array of form elements.
\tif ( jQuery.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {

\t\t// Serialize the form elements
\t\tjQuery.each( a, function() {
\t\t\tadd( this.name, this.value );
\t\t} );

\t} else {

\t\t// If traditional, encode the \"old\" way (the way 1.3.2 or older
\t\t// did it), otherwise encode params recursively.
\t\tfor ( prefix in a ) {
\t\t\tbuildParams( prefix, a[ prefix ], traditional, add );
\t\t}
\t}

\t// Return the resulting serialization
\treturn s.join( \"&\" ).replace( r20, \"+\" );
};

jQuery.fn.extend( {
\tserialize: function() {
\t\treturn jQuery.param( this.serializeArray() );
\t},
\tserializeArray: function() {
\t\treturn this.map( function() {

\t\t\t// Can add propHook for \"elements\" to filter or add form elements
\t\t\tvar elements = jQuery.prop( this, \"elements\" );
\t\t\treturn elements ? jQuery.makeArray( elements ) : this;
\t\t} )
\t\t.filter( function() {
\t\t\tvar type = this.type;

\t\t\t// Use .is(\":disabled\") so that fieldset[disabled] works
\t\t\treturn this.name && !jQuery( this ).is( \":disabled\" ) &&
\t\t\t\trsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
\t\t\t\t( this.checked || !rcheckableType.test( type ) );
\t\t} )
\t\t.map( function( i, elem ) {
\t\t\tvar val = jQuery( this ).val();

\t\t\treturn val == null ?
\t\t\t\tnull :
\t\t\t\tjQuery.isArray( val ) ?
\t\t\t\t\tjQuery.map( val, function( val ) {
\t\t\t\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t\t\t\t} ) :
\t\t\t\t\t{ name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t} ).get();
\t}
} );


// Create the request object
// (This is still attached to ajaxSettings for backward compatibility)
jQuery.ajaxSettings.xhr = window.ActiveXObject !== undefined ?

\t// Support: IE6-IE8
\tfunction() {

\t\t// XHR cannot access local files, always use ActiveX for that case
\t\tif ( this.isLocal ) {
\t\t\treturn createActiveXHR();
\t\t}

\t\t// Support: IE 9-11
\t\t// IE seems to error on cross-domain PATCH requests when ActiveX XHR
\t\t// is used. In IE 9+ always use the native XHR.
\t\t// Note: this condition won't catch Edge as it doesn't define
\t\t// document.documentMode but it also doesn't support ActiveX so it won't
\t\t// reach this code.
\t\tif ( document.documentMode > 8 ) {
\t\t\treturn createStandardXHR();
\t\t}

\t\t// Support: IE<9
\t\t// oldIE XHR does not support non-RFC2616 methods (#13240)
\t\t// See http://msdn.microsoft.com/en-us/library/ie/ms536648(v=vs.85).aspx
\t\t// and http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html#sec9
\t\t// Although this check for six methods instead of eight
\t\t// since IE also does not support \"trace\" and \"connect\"
\t\treturn /^(get|post|head|put|delete|options)\$/i.test( this.type ) &&
\t\t\tcreateStandardXHR() || createActiveXHR();
\t} :

\t// For all other browsers, use the standard XMLHttpRequest object
\tcreateStandardXHR;

var xhrId = 0,
\txhrCallbacks = {},
\txhrSupported = jQuery.ajaxSettings.xhr();

// Support: IE<10
// Open requests must be manually aborted on unload (#5280)
// See https://support.microsoft.com/kb/2856746 for more info
if ( window.attachEvent ) {
\twindow.attachEvent( \"onunload\", function() {
\t\tfor ( var key in xhrCallbacks ) {
\t\t\txhrCallbacks[ key ]( undefined, true );
\t\t}
\t} );
}

// Determine support properties
support.cors = !!xhrSupported && ( \"withCredentials\" in xhrSupported );
xhrSupported = support.ajax = !!xhrSupported;

// Create transport if the browser can provide an xhr
if ( xhrSupported ) {

\tjQuery.ajaxTransport( function( options ) {

\t\t// Cross domain only allowed if supported through XMLHttpRequest
\t\tif ( !options.crossDomain || support.cors ) {

\t\t\tvar callback;

\t\t\treturn {
\t\t\t\tsend: function( headers, complete ) {
\t\t\t\t\tvar i,
\t\t\t\t\t\txhr = options.xhr(),
\t\t\t\t\t\tid = ++xhrId;

\t\t\t\t\t// Open the socket
\t\t\t\t\txhr.open(
\t\t\t\t\t\toptions.type,
\t\t\t\t\t\toptions.url,
\t\t\t\t\t\toptions.async,
\t\t\t\t\t\toptions.username,
\t\t\t\t\t\toptions.password
\t\t\t\t\t);

\t\t\t\t\t// Apply custom fields if provided
\t\t\t\t\tif ( options.xhrFields ) {
\t\t\t\t\t\tfor ( i in options.xhrFields ) {
\t\t\t\t\t\t\txhr[ i ] = options.xhrFields[ i ];
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Override mime type if needed
\t\t\t\t\tif ( options.mimeType && xhr.overrideMimeType ) {
\t\t\t\t\t\txhr.overrideMimeType( options.mimeType );
\t\t\t\t\t}

\t\t\t\t\t// X-Requested-With header
\t\t\t\t\t// For cross-domain requests, seeing as conditions for a preflight are
\t\t\t\t\t// akin to a jigsaw puzzle, we simply never set it to be sure.
\t\t\t\t\t// (it can always be set on a per-request basis or even using ajaxSetup)
\t\t\t\t\t// For same-domain requests, won't change header if already provided.
\t\t\t\t\tif ( !options.crossDomain && !headers[ \"X-Requested-With\" ] ) {
\t\t\t\t\t\theaders[ \"X-Requested-With\" ] = \"XMLHttpRequest\";
\t\t\t\t\t}

\t\t\t\t\t// Set headers
\t\t\t\t\tfor ( i in headers ) {

\t\t\t\t\t\t// Support: IE<9
\t\t\t\t\t\t// IE's ActiveXObject throws a 'Type Mismatch' exception when setting
\t\t\t\t\t\t// request header to a null-value.
\t\t\t\t\t\t//
\t\t\t\t\t\t// To keep consistent with other XHR implementations, cast the value
\t\t\t\t\t\t// to string and ignore `undefined`.
\t\t\t\t\t\tif ( headers[ i ] !== undefined ) {
\t\t\t\t\t\t\txhr.setRequestHeader( i, headers[ i ] + \"\" );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Do send the request
\t\t\t\t\t// This may raise an exception which is actually
\t\t\t\t\t// handled in jQuery.ajax (so no try/catch here)
\t\t\t\t\txhr.send( ( options.hasContent && options.data ) || null );

\t\t\t\t\t// Listener
\t\t\t\t\tcallback = function( _, isAbort ) {
\t\t\t\t\t\tvar status, statusText, responses;

\t\t\t\t\t\t// Was never called and is aborted or complete
\t\t\t\t\t\tif ( callback && ( isAbort || xhr.readyState === 4 ) ) {

\t\t\t\t\t\t\t// Clean up
\t\t\t\t\t\t\tdelete xhrCallbacks[ id ];
\t\t\t\t\t\t\tcallback = undefined;
\t\t\t\t\t\t\txhr.onreadystatechange = jQuery.noop;

\t\t\t\t\t\t\t// Abort manually if needed
\t\t\t\t\t\t\tif ( isAbort ) {
\t\t\t\t\t\t\t\tif ( xhr.readyState !== 4 ) {
\t\t\t\t\t\t\t\t\txhr.abort();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tresponses = {};
\t\t\t\t\t\t\t\tstatus = xhr.status;

\t\t\t\t\t\t\t\t// Support: IE<10
\t\t\t\t\t\t\t\t// Accessing binary-data responseText throws an exception
\t\t\t\t\t\t\t\t// (#11426)
\t\t\t\t\t\t\t\tif ( typeof xhr.responseText === \"string\" ) {
\t\t\t\t\t\t\t\t\tresponses.text = xhr.responseText;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Firefox throws an exception when accessing
\t\t\t\t\t\t\t\t// statusText for faulty cross-domain requests
\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\tstatusText = xhr.statusText;
\t\t\t\t\t\t\t\t} catch ( e ) {

\t\t\t\t\t\t\t\t\t// We normalize with Webkit giving an empty statusText
\t\t\t\t\t\t\t\t\tstatusText = \"\";
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Filter status for non standard behaviors

\t\t\t\t\t\t\t\t// If the request is local and we have data: assume a success
\t\t\t\t\t\t\t\t// (success with no data won't get notified, that's the best we
\t\t\t\t\t\t\t\t// can do given current implementations)
\t\t\t\t\t\t\t\tif ( !status && options.isLocal && !options.crossDomain ) {
\t\t\t\t\t\t\t\t\tstatus = responses.text ? 200 : 404;

\t\t\t\t\t\t\t\t// IE - #1450: sometimes returns 1223 when it should be 204
\t\t\t\t\t\t\t\t} else if ( status === 1223 ) {
\t\t\t\t\t\t\t\t\tstatus = 204;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Call complete if needed
\t\t\t\t\t\tif ( responses ) {
\t\t\t\t\t\t\tcomplete( status, statusText, responses, xhr.getAllResponseHeaders() );
\t\t\t\t\t\t}
\t\t\t\t\t};

\t\t\t\t\t// Do send the request
\t\t\t\t\t// `xhr.send` may raise an exception, but it will be
\t\t\t\t\t// handled in jQuery.ajax (so no try/catch here)
\t\t\t\t\tif ( !options.async ) {

\t\t\t\t\t\t// If we're in sync mode we fire the callback
\t\t\t\t\t\tcallback();
\t\t\t\t\t} else if ( xhr.readyState === 4 ) {

\t\t\t\t\t\t// (IE6 & IE7) if it's in cache and has been
\t\t\t\t\t\t// retrieved directly we need to fire the callback
\t\t\t\t\t\twindow.setTimeout( callback );
\t\t\t\t\t} else {

\t\t\t\t\t\t// Register the callback, but delay it in case `xhr.send` throws
\t\t\t\t\t\t// Add to the list of active xhr callbacks
\t\t\t\t\t\txhr.onreadystatechange = xhrCallbacks[ id ] = callback;
\t\t\t\t\t}
\t\t\t\t},

\t\t\t\tabort: function() {
\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\tcallback( undefined, true );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t};
\t\t}
\t} );
}

// Functions to create xhrs
function createStandardXHR() {
\ttry {
\t\treturn new window.XMLHttpRequest();
\t} catch ( e ) {}
}

function createActiveXHR() {
\ttry {
\t\treturn new window.ActiveXObject( \"Microsoft.XMLHTTP\" );
\t} catch ( e ) {}
}




// Install script dataType
jQuery.ajaxSetup( {
\taccepts: {
\t\tscript: \"text/javascript, application/javascript, \" +
\t\t\t\"application/ecmascript, application/x-ecmascript\"
\t},
\tcontents: {
\t\tscript: /\\b(?:java|ecma)script\\b/
\t},
\tconverters: {
\t\t\"text script\": function( text ) {
\t\t\tjQuery.globalEval( text );
\t\t\treturn text;
\t\t}
\t}
} );

// Handle cache's special case and global
jQuery.ajaxPrefilter( \"script\", function( s ) {
\tif ( s.cache === undefined ) {
\t\ts.cache = false;
\t}
\tif ( s.crossDomain ) {
\t\ts.type = \"GET\";
\t\ts.global = false;
\t}
} );

// Bind script tag hack transport
jQuery.ajaxTransport( \"script\", function( s ) {

\t// This transport only deals with cross domain requests
\tif ( s.crossDomain ) {

\t\tvar script,
\t\t\thead = document.head || jQuery( \"head\" )[ 0 ] || document.documentElement;

\t\treturn {

\t\t\tsend: function( _, callback ) {

\t\t\t\tscript = document.createElement( \"script\" );

\t\t\t\tscript.async = true;

\t\t\t\tif ( s.scriptCharset ) {
\t\t\t\t\tscript.charset = s.scriptCharset;
\t\t\t\t}

\t\t\t\tscript.src = s.url;

\t\t\t\t// Attach handlers for all browsers
\t\t\t\tscript.onload = script.onreadystatechange = function( _, isAbort ) {

\t\t\t\t\tif ( isAbort || !script.readyState || /loaded|complete/.test( script.readyState ) ) {

\t\t\t\t\t\t// Handle memory leak in IE
\t\t\t\t\t\tscript.onload = script.onreadystatechange = null;

\t\t\t\t\t\t// Remove the script
\t\t\t\t\t\tif ( script.parentNode ) {
\t\t\t\t\t\t\tscript.parentNode.removeChild( script );
\t\t\t\t\t\t}

\t\t\t\t\t\t// Dereference the script
\t\t\t\t\t\tscript = null;

\t\t\t\t\t\t// Callback if not abort
\t\t\t\t\t\tif ( !isAbort ) {
\t\t\t\t\t\t\tcallback( 200, \"success\" );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t};

\t\t\t\t// Circumvent IE6 bugs with base elements (#2709 and #4378) by prepending
\t\t\t\t// Use native DOM manipulation to avoid our domManip AJAX trickery
\t\t\t\thead.insertBefore( script, head.firstChild );
\t\t\t},

\t\t\tabort: function() {
\t\t\t\tif ( script ) {
\t\t\t\t\tscript.onload( undefined, true );
\t\t\t\t}
\t\t\t}
\t\t};
\t}
} );




var oldCallbacks = [],
\trjsonp = /(=)\\?(?=&|\$)|\\?\\?/;

// Default jsonp settings
jQuery.ajaxSetup( {
\tjsonp: \"callback\",
\tjsonpCallback: function() {
\t\tvar callback = oldCallbacks.pop() || ( jQuery.expando + \"_\" + ( nonce++ ) );
\t\tthis[ callback ] = true;
\t\treturn callback;
\t}
} );

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( \"json jsonp\", function( s, originalSettings, jqXHR ) {

\tvar callbackName, overwritten, responseContainer,
\t\tjsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
\t\t\t\"url\" :
\t\t\ttypeof s.data === \"string\" &&
\t\t\t\t( s.contentType || \"\" )
\t\t\t\t\t.indexOf( \"application/x-www-form-urlencoded\" ) === 0 &&
\t\t\t\trjsonp.test( s.data ) && \"data\"
\t\t);

\t// Handle iff the expected data type is \"jsonp\" or we have a parameter to set
\tif ( jsonProp || s.dataTypes[ 0 ] === \"jsonp\" ) {

\t\t// Get callback name, remembering preexisting value associated with it
\t\tcallbackName = s.jsonpCallback = jQuery.isFunction( s.jsonpCallback ) ?
\t\t\ts.jsonpCallback() :
\t\t\ts.jsonpCallback;

\t\t// Insert callback into url or form data
\t\tif ( jsonProp ) {
\t\t\ts[ jsonProp ] = s[ jsonProp ].replace( rjsonp, \"\$1\" + callbackName );
\t\t} else if ( s.jsonp !== false ) {
\t\t\ts.url += ( rquery.test( s.url ) ? \"&\" : \"?\" ) + s.jsonp + \"=\" + callbackName;
\t\t}

\t\t// Use data converter to retrieve json after script execution
\t\ts.converters[ \"script json\" ] = function() {
\t\t\tif ( !responseContainer ) {
\t\t\t\tjQuery.error( callbackName + \" was not called\" );
\t\t\t}
\t\t\treturn responseContainer[ 0 ];
\t\t};

\t\t// force json dataType
\t\ts.dataTypes[ 0 ] = \"json\";

\t\t// Install callback
\t\toverwritten = window[ callbackName ];
\t\twindow[ callbackName ] = function() {
\t\t\tresponseContainer = arguments;
\t\t};

\t\t// Clean-up function (fires after converters)
\t\tjqXHR.always( function() {

\t\t\t// If previous value didn't exist - remove it
\t\t\tif ( overwritten === undefined ) {
\t\t\t\tjQuery( window ).removeProp( callbackName );

\t\t\t// Otherwise restore preexisting value
\t\t\t} else {
\t\t\t\twindow[ callbackName ] = overwritten;
\t\t\t}

\t\t\t// Save back as free
\t\t\tif ( s[ callbackName ] ) {

\t\t\t\t// make sure that re-using the options doesn't screw things around
\t\t\t\ts.jsonpCallback = originalSettings.jsonpCallback;

\t\t\t\t// save the callback name for future use
\t\t\t\toldCallbacks.push( callbackName );
\t\t\t}

\t\t\t// Call if it was a function and we have a response
\t\t\tif ( responseContainer && jQuery.isFunction( overwritten ) ) {
\t\t\t\toverwritten( responseContainer[ 0 ] );
\t\t\t}

\t\t\tresponseContainer = overwritten = undefined;
\t\t} );

\t\t// Delegate to script
\t\treturn \"script\";
\t}
} );




// data: string of html
// context (optional): If specified, the fragment will be created in this context,
// defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}
\tif ( typeof context === \"boolean\" ) {
\t\tkeepScripts = context;
\t\tcontext = false;
\t}
\tcontext = context || document;

\tvar parsed = rsingleTag.exec( data ),
\t\tscripts = !keepScripts && [];

\t// Single tag
\tif ( parsed ) {
\t\treturn [ context.createElement( parsed[ 1 ] ) ];
\t}

\tparsed = buildFragment( [ data ], context, scripts );

\tif ( scripts && scripts.length ) {
\t\tjQuery( scripts ).remove();
\t}

\treturn jQuery.merge( [], parsed.childNodes );
};


// Keep a copy of the old load method
var _load = jQuery.fn.load;

/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
\tif ( typeof url !== \"string\" && _load ) {
\t\treturn _load.apply( this, arguments );
\t}

\tvar selector, type, response,
\t\tself = this,
\t\toff = url.indexOf( \" \" );

\tif ( off > -1 ) {
\t\tselector = jQuery.trim( url.slice( off, url.length ) );
\t\turl = url.slice( 0, off );
\t}

\t// If it's a function
\tif ( jQuery.isFunction( params ) ) {

\t\t// We assume that it's the callback
\t\tcallback = params;
\t\tparams = undefined;

\t// Otherwise, build a param string
\t} else if ( params && typeof params === \"object\" ) {
\t\ttype = \"POST\";
\t}

\t// If we have elements to modify, make the request
\tif ( self.length > 0 ) {
\t\tjQuery.ajax( {
\t\t\turl: url,

\t\t\t// If \"type\" variable is undefined, then \"GET\" method will be used.
\t\t\t// Make value of this field explicit since
\t\t\t// user can override it through ajaxSetup method
\t\t\ttype: type || \"GET\",
\t\t\tdataType: \"html\",
\t\t\tdata: params
\t\t} ).done( function( responseText ) {

\t\t\t// Save response for use in complete callback
\t\t\tresponse = arguments;

\t\t\tself.html( selector ?

\t\t\t\t// If a selector was specified, locate the right elements in a dummy div
\t\t\t\t// Exclude scripts to avoid IE 'Permission Denied' errors
\t\t\t\tjQuery( \"<div>\" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :

\t\t\t\t// Otherwise use the full result
\t\t\t\tresponseText );

\t\t// If the request succeeds, this function gets \"data\", \"status\", \"jqXHR\"
\t\t// but they are ignored because response was set above.
\t\t// If it fails, this function gets \"jqXHR\", \"status\", \"error\"
\t\t} ).always( callback && function( jqXHR, status ) {
\t\t\tself.each( function() {
\t\t\t\tcallback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );
\t\t\t} );
\t\t} );
\t}

\treturn this;
};




// Attach a bunch of functions for handling common AJAX events
jQuery.each( [
\t\"ajaxStart\",
\t\"ajaxStop\",
\t\"ajaxComplete\",
\t\"ajaxError\",
\t\"ajaxSuccess\",
\t\"ajaxSend\"
], function( i, type ) {
\tjQuery.fn[ type ] = function( fn ) {
\t\treturn this.on( type, fn );
\t};
} );




jQuery.expr.filters.animated = function( elem ) {
\treturn jQuery.grep( jQuery.timers, function( fn ) {
\t\treturn elem === fn.elem;
\t} ).length;
};





/**
 * Gets a window from an element
 */
function getWindow( elem ) {
\treturn jQuery.isWindow( elem ) ?
\t\telem :
\t\telem.nodeType === 9 ?
\t\t\telem.defaultView || elem.parentWindow :
\t\t\tfalse;
}

jQuery.offset = {
\tsetOffset: function( elem, options, i ) {
\t\tvar curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
\t\t\tposition = jQuery.css( elem, \"position\" ),
\t\t\tcurElem = jQuery( elem ),
\t\t\tprops = {};

\t\t// set position first, in-case top/left are set even on static elem
\t\tif ( position === \"static\" ) {
\t\t\telem.style.position = \"relative\";
\t\t}

\t\tcurOffset = curElem.offset();
\t\tcurCSSTop = jQuery.css( elem, \"top\" );
\t\tcurCSSLeft = jQuery.css( elem, \"left\" );
\t\tcalculatePosition = ( position === \"absolute\" || position === \"fixed\" ) &&
\t\t\tjQuery.inArray( \"auto\", [ curCSSTop, curCSSLeft ] ) > -1;

\t\t// need to be able to calculate position if either top or left
\t\t// is auto and position is either absolute or fixed
\t\tif ( calculatePosition ) {
\t\t\tcurPosition = curElem.position();
\t\t\tcurTop = curPosition.top;
\t\t\tcurLeft = curPosition.left;
\t\t} else {
\t\t\tcurTop = parseFloat( curCSSTop ) || 0;
\t\t\tcurLeft = parseFloat( curCSSLeft ) || 0;
\t\t}

\t\tif ( jQuery.isFunction( options ) ) {

\t\t\t// Use jQuery.extend here to allow modification of coordinates argument (gh-1848)
\t\t\toptions = options.call( elem, i, jQuery.extend( {}, curOffset ) );
\t\t}

\t\tif ( options.top != null ) {
\t\t\tprops.top = ( options.top - curOffset.top ) + curTop;
\t\t}
\t\tif ( options.left != null ) {
\t\t\tprops.left = ( options.left - curOffset.left ) + curLeft;
\t\t}

\t\tif ( \"using\" in options ) {
\t\t\toptions.using.call( elem, props );
\t\t} else {
\t\t\tcurElem.css( props );
\t\t}
\t}
};

jQuery.fn.extend( {
\toffset: function( options ) {
\t\tif ( arguments.length ) {
\t\t\treturn options === undefined ?
\t\t\t\tthis :
\t\t\t\tthis.each( function( i ) {
\t\t\t\t\tjQuery.offset.setOffset( this, options, i );
\t\t\t\t} );
\t\t}

\t\tvar docElem, win,
\t\t\tbox = { top: 0, left: 0 },
\t\t\telem = this[ 0 ],
\t\t\tdoc = elem && elem.ownerDocument;

\t\tif ( !doc ) {
\t\t\treturn;
\t\t}

\t\tdocElem = doc.documentElement;

\t\t// Make sure it's not a disconnected DOM node
\t\tif ( !jQuery.contains( docElem, elem ) ) {
\t\t\treturn box;
\t\t}

\t\t// If we don't have gBCR, just use 0,0 rather than error
\t\t// BlackBerry 5, iOS 3 (original iPhone)
\t\tif ( typeof elem.getBoundingClientRect !== \"undefined\" ) {
\t\t\tbox = elem.getBoundingClientRect();
\t\t}
\t\twin = getWindow( doc );
\t\treturn {
\t\t\ttop: box.top  + ( win.pageYOffset || docElem.scrollTop )  - ( docElem.clientTop  || 0 ),
\t\t\tleft: box.left + ( win.pageXOffset || docElem.scrollLeft ) - ( docElem.clientLeft || 0 )
\t\t};
\t},

\tposition: function() {
\t\tif ( !this[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tvar offsetParent, offset,
\t\t\tparentOffset = { top: 0, left: 0 },
\t\t\telem = this[ 0 ];

\t\t// Fixed elements are offset from window (parentOffset = {top:0, left: 0},
\t\t// because it is its only offset parent
\t\tif ( jQuery.css( elem, \"position\" ) === \"fixed\" ) {

\t\t\t// we assume that getBoundingClientRect is available when computed position is fixed
\t\t\toffset = elem.getBoundingClientRect();
\t\t} else {

\t\t\t// Get *real* offsetParent
\t\t\toffsetParent = this.offsetParent();

\t\t\t// Get correct offsets
\t\t\toffset = this.offset();
\t\t\tif ( !jQuery.nodeName( offsetParent[ 0 ], \"html\" ) ) {
\t\t\t\tparentOffset = offsetParent.offset();
\t\t\t}

\t\t\t// Add offsetParent borders
\t\t\tparentOffset.top  += jQuery.css( offsetParent[ 0 ], \"borderTopWidth\", true );
\t\t\tparentOffset.left += jQuery.css( offsetParent[ 0 ], \"borderLeftWidth\", true );
\t\t}

\t\t// Subtract parent offsets and element margins
\t\t// note: when an element has margin: auto the offsetLeft and marginLeft
\t\t// are the same in Safari causing offset.left to incorrectly be 0
\t\treturn {
\t\t\ttop:  offset.top  - parentOffset.top - jQuery.css( elem, \"marginTop\", true ),
\t\t\tleft: offset.left - parentOffset.left - jQuery.css( elem, \"marginLeft\", true )
\t\t};
\t},

\toffsetParent: function() {
\t\treturn this.map( function() {
\t\t\tvar offsetParent = this.offsetParent;

\t\t\twhile ( offsetParent && ( !jQuery.nodeName( offsetParent, \"html\" ) &&
\t\t\t\tjQuery.css( offsetParent, \"position\" ) === \"static\" ) ) {
\t\t\t\toffsetParent = offsetParent.offsetParent;
\t\t\t}
\t\t\treturn offsetParent || documentElement;
\t\t} );
\t}
} );

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: \"pageXOffset\", scrollTop: \"pageYOffset\" }, function( method, prop ) {
\tvar top = /Y/.test( prop );

\tjQuery.fn[ method ] = function( val ) {
\t\treturn access( this, function( elem, method, val ) {
\t\t\tvar win = getWindow( elem );

\t\t\tif ( val === undefined ) {
\t\t\t\treturn win ? ( prop in win ) ? win[ prop ] :
\t\t\t\t\twin.document.documentElement[ method ] :
\t\t\t\t\telem[ method ];
\t\t\t}

\t\t\tif ( win ) {
\t\t\t\twin.scrollTo(
\t\t\t\t\t!top ? val : jQuery( win ).scrollLeft(),
\t\t\t\t\ttop ? val : jQuery( win ).scrollTop()
\t\t\t\t);

\t\t\t} else {
\t\t\t\telem[ method ] = val;
\t\t\t}
\t\t}, method, val, arguments.length, null );
\t};
} );

// Support: Safari<7-8+, Chrome<37-44+
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// getComputedStyle returns percent when specified for top/left/bottom/right
// rather than make the css module depend on the offset module, we just check for it here
jQuery.each( [ \"top\", \"left\" ], function( i, prop ) {
\tjQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
\t\tfunction( elem, computed ) {
\t\t\tif ( computed ) {
\t\t\t\tcomputed = curCSS( elem, prop );

\t\t\t\t// if curCSS returns percentage, fallback to offset
\t\t\t\treturn rnumnonpx.test( computed ) ?
\t\t\t\t\tjQuery( elem ).position()[ prop ] + \"px\" :
\t\t\t\t\tcomputed;
\t\t\t}
\t\t}
\t);
} );


// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: \"height\", Width: \"width\" }, function( name, type ) {
\tjQuery.each( { padding: \"inner\" + name, content: type, \"\": \"outer\" + name },
\tfunction( defaultExtra, funcName ) {

\t\t// margin is only for outerHeight, outerWidth
\t\tjQuery.fn[ funcName ] = function( margin, value ) {
\t\t\tvar chainable = arguments.length && ( defaultExtra || typeof margin !== \"boolean\" ),
\t\t\t\textra = defaultExtra || ( margin === true || value === true ? \"margin\" : \"border\" );

\t\t\treturn access( this, function( elem, type, value ) {
\t\t\t\tvar doc;

\t\t\t\tif ( jQuery.isWindow( elem ) ) {

\t\t\t\t\t// As of 5/8/2012 this will yield incorrect results for Mobile Safari, but there
\t\t\t\t\t// isn't a whole lot we can do. See pull request at this URL for discussion:
\t\t\t\t\t// https://github.com/jquery/jquery/pull/764
\t\t\t\t\treturn elem.document.documentElement[ \"client\" + name ];
\t\t\t\t}

\t\t\t\t// Get document width or height
\t\t\t\tif ( elem.nodeType === 9 ) {
\t\t\t\t\tdoc = elem.documentElement;

\t\t\t\t\t// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
\t\t\t\t\t// whichever is greatest
\t\t\t\t\t// unfortunately, this causes bug #3838 in IE6/8 only,
\t\t\t\t\t// but there is currently no good, small way to fix it.
\t\t\t\t\treturn Math.max(
\t\t\t\t\t\telem.body[ \"scroll\" + name ], doc[ \"scroll\" + name ],
\t\t\t\t\t\telem.body[ \"offset\" + name ], doc[ \"offset\" + name ],
\t\t\t\t\t\tdoc[ \"client\" + name ]
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\treturn value === undefined ?

\t\t\t\t\t// Get width or height on the element, requesting but not forcing parseFloat
\t\t\t\t\tjQuery.css( elem, type, extra ) :

\t\t\t\t\t// Set width or height on the element
\t\t\t\t\tjQuery.style( elem, type, value, extra );
\t\t\t}, type, chainable ? margin : undefined, chainable, null );
\t\t};
\t} );
} );


jQuery.fn.extend( {

\tbind: function( types, data, fn ) {
\t\treturn this.on( types, null, data, fn );
\t},
\tunbind: function( types, fn ) {
\t\treturn this.off( types, null, fn );
\t},

\tdelegate: function( selector, types, data, fn ) {
\t\treturn this.on( types, selector, data, fn );
\t},
\tundelegate: function( selector, types, fn ) {

\t\t// ( namespace ) or ( selector, types [, fn] )
\t\treturn arguments.length === 1 ?
\t\t\tthis.off( selector, \"**\" ) :
\t\t\tthis.off( types, selector || \"**\", fn );
\t}
} );

// The number of elements contained in the matched element set
jQuery.fn.size = function() {
\treturn this.length;
};

jQuery.fn.andSelf = jQuery.fn.addBack;




// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if ( typeof define === \"function\" && define.amd ) {
\tdefine( \"jquery\", [], function() {
\t\treturn jQuery;
\t} );
}



var

\t// Map over jQuery in case of overwrite
\t_jQuery = window.jQuery,

\t// Map over the \$ in case of overwrite
\t_\$ = window.\$;

jQuery.noConflict = function( deep ) {
\tif ( window.\$ === jQuery ) {
\t\twindow.\$ = _\$;
\t}

\tif ( deep && window.jQuery === jQuery ) {
\t\twindow.jQuery = _jQuery;
\t}

\treturn jQuery;
};

// Expose jQuery and \$ identifiers, even in
// AMD (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
if ( !noGlobal ) {
\twindow.jQuery = window.\$ = jQuery;
}

return jQuery;
}));
";
        
        $__internal_cb9d9eb8301fa995470ae9fca5d9ab8e6a03b6ccae8bdb065a4877c6601ed332->leave($__internal_cb9d9eb8301fa995470ae9fca5d9ab8e6a03b6ccae8bdb065a4877c6601ed332_prof);

    }

    public function getTemplateName()
    {
        return "resident/vendor/jquery/jquery.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /*!*/
/*  * jQuery JavaScript Library v1.12.4*/
/*  * http://jquery.com/*/
/*  **/
/*  * Includes Sizzle.js*/
/*  * http://sizzlejs.com/*/
/*  **/
/*  * Copyright jQuery Foundation and other contributors*/
/*  * Released under the MIT license*/
/*  * http://jquery.org/license*/
/*  **/
/*  * Date: 2016-05-20T17:17Z*/
/*  *//* */
/* */
/* (function( global, factory ) {*/
/* */
/* 	if ( typeof module === "object" && typeof module.exports === "object" ) {*/
/* 		// For CommonJS and CommonJS-like environments where a proper `window`*/
/* 		// is present, execute the factory and get jQuery.*/
/* 		// For environments that do not have a `window` with a `document`*/
/* 		// (such as Node.js), expose a factory as module.exports.*/
/* 		// This accentuates the need for the creation of a real `window`.*/
/* 		// e.g. var jQuery = require("jquery")(window);*/
/* 		// See ticket #14549 for more info.*/
/* 		module.exports = global.document ?*/
/* 			factory( global, true ) :*/
/* 			function( w ) {*/
/* 				if ( !w.document ) {*/
/* 					throw new Error( "jQuery requires a window with a document" );*/
/* 				}*/
/* 				return factory( w );*/
/* 			};*/
/* 	} else {*/
/* 		factory( global );*/
/* 	}*/
/* */
/* // Pass this if window is not defined yet*/
/* }(typeof window !== "undefined" ? window : this, function( window, noGlobal ) {*/
/* */
/* // Support: Firefox 18+*/
/* // Can't be in strict mode, several libs including ASP.NET trace*/
/* // the stack via arguments.caller.callee and Firefox dies if*/
/* // you try to trace through "use strict" call chains. (#13335)*/
/* //"use strict";*/
/* var deletedIds = [];*/
/* */
/* var document = window.document;*/
/* */
/* var slice = deletedIds.slice;*/
/* */
/* var concat = deletedIds.concat;*/
/* */
/* var push = deletedIds.push;*/
/* */
/* var indexOf = deletedIds.indexOf;*/
/* */
/* var class2type = {};*/
/* */
/* var toString = class2type.toString;*/
/* */
/* var hasOwn = class2type.hasOwnProperty;*/
/* */
/* var support = {};*/
/* */
/* */
/* */
/* var*/
/* 	version = "1.12.4",*/
/* */
/* 	// Define a local copy of jQuery*/
/* 	jQuery = function( selector, context ) {*/
/* */
/* 		// The jQuery object is actually just the init constructor 'enhanced'*/
/* 		// Need init if jQuery is called (just allow error to be thrown if not included)*/
/* 		return new jQuery.fn.init( selector, context );*/
/* 	},*/
/* */
/* 	// Support: Android<4.1, IE<9*/
/* 	// Make sure we trim BOM and NBSP*/
/* 	rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,*/
/* */
/* 	// Matches dashed string for camelizing*/
/* 	rmsPrefix = /^-ms-/,*/
/* 	rdashAlpha = /-([\da-z])/gi,*/
/* */
/* 	// Used by jQuery.camelCase as callback to replace()*/
/* 	fcamelCase = function( all, letter ) {*/
/* 		return letter.toUpperCase();*/
/* 	};*/
/* */
/* jQuery.fn = jQuery.prototype = {*/
/* */
/* 	// The current version of jQuery being used*/
/* 	jquery: version,*/
/* */
/* 	constructor: jQuery,*/
/* */
/* 	// Start with an empty selector*/
/* 	selector: "",*/
/* */
/* 	// The default length of a jQuery object is 0*/
/* 	length: 0,*/
/* */
/* 	toArray: function() {*/
/* 		return slice.call( this );*/
/* 	},*/
/* */
/* 	// Get the Nth element in the matched element set OR*/
/* 	// Get the whole matched element set as a clean array*/
/* 	get: function( num ) {*/
/* 		return num != null ?*/
/* */
/* 			// Return just the one element from the set*/
/* 			( num < 0 ? this[ num + this.length ] : this[ num ] ) :*/
/* */
/* 			// Return all the elements in a clean array*/
/* 			slice.call( this );*/
/* 	},*/
/* */
/* 	// Take an array of elements and push it onto the stack*/
/* 	// (returning the new matched element set)*/
/* 	pushStack: function( elems ) {*/
/* */
/* 		// Build a new jQuery matched element set*/
/* 		var ret = jQuery.merge( this.constructor(), elems );*/
/* */
/* 		// Add the old object onto the stack (as a reference)*/
/* 		ret.prevObject = this;*/
/* 		ret.context = this.context;*/
/* */
/* 		// Return the newly-formed element set*/
/* 		return ret;*/
/* 	},*/
/* */
/* 	// Execute a callback for every element in the matched set.*/
/* 	each: function( callback ) {*/
/* 		return jQuery.each( this, callback );*/
/* 	},*/
/* */
/* 	map: function( callback ) {*/
/* 		return this.pushStack( jQuery.map( this, function( elem, i ) {*/
/* 			return callback.call( elem, i, elem );*/
/* 		} ) );*/
/* 	},*/
/* */
/* 	slice: function() {*/
/* 		return this.pushStack( slice.apply( this, arguments ) );*/
/* 	},*/
/* */
/* 	first: function() {*/
/* 		return this.eq( 0 );*/
/* 	},*/
/* */
/* 	last: function() {*/
/* 		return this.eq( -1 );*/
/* 	},*/
/* */
/* 	eq: function( i ) {*/
/* 		var len = this.length,*/
/* 			j = +i + ( i < 0 ? len : 0 );*/
/* 		return this.pushStack( j >= 0 && j < len ? [ this[ j ] ] : [] );*/
/* 	},*/
/* */
/* 	end: function() {*/
/* 		return this.prevObject || this.constructor();*/
/* 	},*/
/* */
/* 	// For internal use only.*/
/* 	// Behaves like an Array's method, not like a jQuery method.*/
/* 	push: push,*/
/* 	sort: deletedIds.sort,*/
/* 	splice: deletedIds.splice*/
/* };*/
/* */
/* jQuery.extend = jQuery.fn.extend = function() {*/
/* 	var src, copyIsArray, copy, name, options, clone,*/
/* 		target = arguments[ 0 ] || {},*/
/* 		i = 1,*/
/* 		length = arguments.length,*/
/* 		deep = false;*/
/* */
/* 	// Handle a deep copy situation*/
/* 	if ( typeof target === "boolean" ) {*/
/* 		deep = target;*/
/* */
/* 		// skip the boolean and the target*/
/* 		target = arguments[ i ] || {};*/
/* 		i++;*/
/* 	}*/
/* */
/* 	// Handle case when target is a string or something (possible in deep copy)*/
/* 	if ( typeof target !== "object" && !jQuery.isFunction( target ) ) {*/
/* 		target = {};*/
/* 	}*/
/* */
/* 	// extend jQuery itself if only one argument is passed*/
/* 	if ( i === length ) {*/
/* 		target = this;*/
/* 		i--;*/
/* 	}*/
/* */
/* 	for ( ; i < length; i++ ) {*/
/* */
/* 		// Only deal with non-null/undefined values*/
/* 		if ( ( options = arguments[ i ] ) != null ) {*/
/* */
/* 			// Extend the base object*/
/* 			for ( name in options ) {*/
/* 				src = target[ name ];*/
/* 				copy = options[ name ];*/
/* */
/* 				// Prevent never-ending loop*/
/* 				if ( target === copy ) {*/
/* 					continue;*/
/* 				}*/
/* */
/* 				// Recurse if we're merging plain objects or arrays*/
/* 				if ( deep && copy && ( jQuery.isPlainObject( copy ) ||*/
/* 					( copyIsArray = jQuery.isArray( copy ) ) ) ) {*/
/* */
/* 					if ( copyIsArray ) {*/
/* 						copyIsArray = false;*/
/* 						clone = src && jQuery.isArray( src ) ? src : [];*/
/* */
/* 					} else {*/
/* 						clone = src && jQuery.isPlainObject( src ) ? src : {};*/
/* 					}*/
/* */
/* 					// Never move original objects, clone them*/
/* 					target[ name ] = jQuery.extend( deep, clone, copy );*/
/* */
/* 				// Don't bring in undefined values*/
/* 				} else if ( copy !== undefined ) {*/
/* 					target[ name ] = copy;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// Return the modified object*/
/* 	return target;*/
/* };*/
/* */
/* jQuery.extend( {*/
/* */
/* 	// Unique for each copy of jQuery on the page*/
/* 	expando: "jQuery" + ( version + Math.random() ).replace( /\D/g, "" ),*/
/* */
/* 	// Assume jQuery is ready without the ready module*/
/* 	isReady: true,*/
/* */
/* 	error: function( msg ) {*/
/* 		throw new Error( msg );*/
/* 	},*/
/* */
/* 	noop: function() {},*/
/* */
/* 	// See test/unit/core.js for details concerning isFunction.*/
/* 	// Since version 1.3, DOM methods and functions like alert*/
/* 	// aren't supported. They return false on IE (#2968).*/
/* 	isFunction: function( obj ) {*/
/* 		return jQuery.type( obj ) === "function";*/
/* 	},*/
/* */
/* 	isArray: Array.isArray || function( obj ) {*/
/* 		return jQuery.type( obj ) === "array";*/
/* 	},*/
/* */
/* 	isWindow: function( obj ) {*/
/* 		/* jshint eqeqeq: false *//* */
/* 		return obj != null && obj == obj.window;*/
/* 	},*/
/* */
/* 	isNumeric: function( obj ) {*/
/* */
/* 		// parseFloat NaNs numeric-cast false positives (null|true|false|"")*/
/* 		// ...but misinterprets leading-number strings, particularly hex literals ("0x...")*/
/* 		// subtraction forces infinities to NaN*/
/* 		// adding 1 corrects loss of precision from parseFloat (#15100)*/
/* 		var realStringObj = obj && obj.toString();*/
/* 		return !jQuery.isArray( obj ) && ( realStringObj - parseFloat( realStringObj ) + 1 ) >= 0;*/
/* 	},*/
/* */
/* 	isEmptyObject: function( obj ) {*/
/* 		var name;*/
/* 		for ( name in obj ) {*/
/* 			return false;*/
/* 		}*/
/* 		return true;*/
/* 	},*/
/* */
/* 	isPlainObject: function( obj ) {*/
/* 		var key;*/
/* */
/* 		// Must be an Object.*/
/* 		// Because of IE, we also have to check the presence of the constructor property.*/
/* 		// Make sure that DOM nodes and window objects don't pass through, as well*/
/* 		if ( !obj || jQuery.type( obj ) !== "object" || obj.nodeType || jQuery.isWindow( obj ) ) {*/
/* 			return false;*/
/* 		}*/
/* */
/* 		try {*/
/* */
/* 			// Not own constructor property must be Object*/
/* 			if ( obj.constructor &&*/
/* 				!hasOwn.call( obj, "constructor" ) &&*/
/* 				!hasOwn.call( obj.constructor.prototype, "isPrototypeOf" ) ) {*/
/* 				return false;*/
/* 			}*/
/* 		} catch ( e ) {*/
/* */
/* 			// IE8,9 Will throw exceptions on certain host objects #9897*/
/* 			return false;*/
/* 		}*/
/* */
/* 		// Support: IE<9*/
/* 		// Handle iteration over inherited properties before own properties.*/
/* 		if ( !support.ownFirst ) {*/
/* 			for ( key in obj ) {*/
/* 				return hasOwn.call( obj, key );*/
/* 			}*/
/* 		}*/
/* */
/* 		// Own properties are enumerated firstly, so to speed up,*/
/* 		// if last one is own, then all properties are own.*/
/* 		for ( key in obj ) {}*/
/* */
/* 		return key === undefined || hasOwn.call( obj, key );*/
/* 	},*/
/* */
/* 	type: function( obj ) {*/
/* 		if ( obj == null ) {*/
/* 			return obj + "";*/
/* 		}*/
/* 		return typeof obj === "object" || typeof obj === "function" ?*/
/* 			class2type[ toString.call( obj ) ] || "object" :*/
/* 			typeof obj;*/
/* 	},*/
/* */
/* 	// Workarounds based on findings by Jim Driscoll*/
/* 	// http://weblogs.java.net/blog/driscoll/archive/2009/09/08/eval-javascript-global-context*/
/* 	globalEval: function( data ) {*/
/* 		if ( data && jQuery.trim( data ) ) {*/
/* */
/* 			// We use execScript on Internet Explorer*/
/* 			// We use an anonymous function so that context is window*/
/* 			// rather than jQuery in Firefox*/
/* 			( window.execScript || function( data ) {*/
/* 				window[ "eval" ].call( window, data ); // jscs:ignore requireDotNotation*/
/* 			} )( data );*/
/* 		}*/
/* 	},*/
/* */
/* 	// Convert dashed to camelCase; used by the css and data modules*/
/* 	// Microsoft forgot to hump their vendor prefix (#9572)*/
/* 	camelCase: function( string ) {*/
/* 		return string.replace( rmsPrefix, "ms-" ).replace( rdashAlpha, fcamelCase );*/
/* 	},*/
/* */
/* 	nodeName: function( elem, name ) {*/
/* 		return elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();*/
/* 	},*/
/* */
/* 	each: function( obj, callback ) {*/
/* 		var length, i = 0;*/
/* */
/* 		if ( isArrayLike( obj ) ) {*/
/* 			length = obj.length;*/
/* 			for ( ; i < length; i++ ) {*/
/* 				if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {*/
/* 					break;*/
/* 				}*/
/* 			}*/
/* 		} else {*/
/* 			for ( i in obj ) {*/
/* 				if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {*/
/* 					break;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return obj;*/
/* 	},*/
/* */
/* 	// Support: Android<4.1, IE<9*/
/* 	trim: function( text ) {*/
/* 		return text == null ?*/
/* 			"" :*/
/* 			( text + "" ).replace( rtrim, "" );*/
/* 	},*/
/* */
/* 	// results is for internal usage only*/
/* 	makeArray: function( arr, results ) {*/
/* 		var ret = results || [];*/
/* */
/* 		if ( arr != null ) {*/
/* 			if ( isArrayLike( Object( arr ) ) ) {*/
/* 				jQuery.merge( ret,*/
/* 					typeof arr === "string" ?*/
/* 					[ arr ] : arr*/
/* 				);*/
/* 			} else {*/
/* 				push.call( ret, arr );*/
/* 			}*/
/* 		}*/
/* */
/* 		return ret;*/
/* 	},*/
/* */
/* 	inArray: function( elem, arr, i ) {*/
/* 		var len;*/
/* */
/* 		if ( arr ) {*/
/* 			if ( indexOf ) {*/
/* 				return indexOf.call( arr, elem, i );*/
/* 			}*/
/* */
/* 			len = arr.length;*/
/* 			i = i ? i < 0 ? Math.max( 0, len + i ) : i : 0;*/
/* */
/* 			for ( ; i < len; i++ ) {*/
/* */
/* 				// Skip accessing in sparse arrays*/
/* 				if ( i in arr && arr[ i ] === elem ) {*/
/* 					return i;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return -1;*/
/* 	},*/
/* */
/* 	merge: function( first, second ) {*/
/* 		var len = +second.length,*/
/* 			j = 0,*/
/* 			i = first.length;*/
/* */
/* 		while ( j < len ) {*/
/* 			first[ i++ ] = second[ j++ ];*/
/* 		}*/
/* */
/* 		// Support: IE<9*/
/* 		// Workaround casting of .length to NaN on otherwise arraylike objects (e.g., NodeLists)*/
/* 		if ( len !== len ) {*/
/* 			while ( second[ j ] !== undefined ) {*/
/* 				first[ i++ ] = second[ j++ ];*/
/* 			}*/
/* 		}*/
/* */
/* 		first.length = i;*/
/* */
/* 		return first;*/
/* 	},*/
/* */
/* 	grep: function( elems, callback, invert ) {*/
/* 		var callbackInverse,*/
/* 			matches = [],*/
/* 			i = 0,*/
/* 			length = elems.length,*/
/* 			callbackExpect = !invert;*/
/* */
/* 		// Go through the array, only saving the items*/
/* 		// that pass the validator function*/
/* 		for ( ; i < length; i++ ) {*/
/* 			callbackInverse = !callback( elems[ i ], i );*/
/* 			if ( callbackInverse !== callbackExpect ) {*/
/* 				matches.push( elems[ i ] );*/
/* 			}*/
/* 		}*/
/* */
/* 		return matches;*/
/* 	},*/
/* */
/* 	// arg is for internal usage only*/
/* 	map: function( elems, callback, arg ) {*/
/* 		var length, value,*/
/* 			i = 0,*/
/* 			ret = [];*/
/* */
/* 		// Go through the array, translating each of the items to their new values*/
/* 		if ( isArrayLike( elems ) ) {*/
/* 			length = elems.length;*/
/* 			for ( ; i < length; i++ ) {*/
/* 				value = callback( elems[ i ], i, arg );*/
/* */
/* 				if ( value != null ) {*/
/* 					ret.push( value );*/
/* 				}*/
/* 			}*/
/* */
/* 		// Go through every key on the object,*/
/* 		} else {*/
/* 			for ( i in elems ) {*/
/* 				value = callback( elems[ i ], i, arg );*/
/* */
/* 				if ( value != null ) {*/
/* 					ret.push( value );*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		// Flatten any nested arrays*/
/* 		return concat.apply( [], ret );*/
/* 	},*/
/* */
/* 	// A global GUID counter for objects*/
/* 	guid: 1,*/
/* */
/* 	// Bind a function to a context, optionally partially applying any*/
/* 	// arguments.*/
/* 	proxy: function( fn, context ) {*/
/* 		var args, proxy, tmp;*/
/* */
/* 		if ( typeof context === "string" ) {*/
/* 			tmp = fn[ context ];*/
/* 			context = fn;*/
/* 			fn = tmp;*/
/* 		}*/
/* */
/* 		// Quick check to determine if target is callable, in the spec*/
/* 		// this throws a TypeError, but we will just return undefined.*/
/* 		if ( !jQuery.isFunction( fn ) ) {*/
/* 			return undefined;*/
/* 		}*/
/* */
/* 		// Simulated bind*/
/* 		args = slice.call( arguments, 2 );*/
/* 		proxy = function() {*/
/* 			return fn.apply( context || this, args.concat( slice.call( arguments ) ) );*/
/* 		};*/
/* */
/* 		// Set the guid of unique handler to the same of original handler, so it can be removed*/
/* 		proxy.guid = fn.guid = fn.guid || jQuery.guid++;*/
/* */
/* 		return proxy;*/
/* 	},*/
/* */
/* 	now: function() {*/
/* 		return +( new Date() );*/
/* 	},*/
/* */
/* 	// jQuery.support is not used in Core but other projects attach their*/
/* 	// properties to it so it needs to exist.*/
/* 	support: support*/
/* } );*/
/* */
/* // JSHint would error on this code due to the Symbol not being defined in ES5.*/
/* // Defining this global in .jshintrc would create a danger of using the global*/
/* // unguarded in another place, it seems safer to just disable JSHint for these*/
/* // three lines.*/
/* /* jshint ignore: start *//* */
/* if ( typeof Symbol === "function" ) {*/
/* 	jQuery.fn[ Symbol.iterator ] = deletedIds[ Symbol.iterator ];*/
/* }*/
/* /* jshint ignore: end *//* */
/* */
/* // Populate the class2type map*/
/* jQuery.each( "Boolean Number String Function Array Date RegExp Object Error Symbol".split( " " ),*/
/* function( i, name ) {*/
/* 	class2type[ "[object " + name + "]" ] = name.toLowerCase();*/
/* } );*/
/* */
/* function isArrayLike( obj ) {*/
/* */
/* 	// Support: iOS 8.2 (not reproducible in simulator)*/
/* 	// `in` check used to prevent JIT error (gh-2145)*/
/* 	// hasOwn isn't used here due to false negatives*/
/* 	// regarding Nodelist length in IE*/
/* 	var length = !!obj && "length" in obj && obj.length,*/
/* 		type = jQuery.type( obj );*/
/* */
/* 	if ( type === "function" || jQuery.isWindow( obj ) ) {*/
/* 		return false;*/
/* 	}*/
/* */
/* 	return type === "array" || length === 0 ||*/
/* 		typeof length === "number" && length > 0 && ( length - 1 ) in obj;*/
/* }*/
/* var Sizzle =*/
/* /*!*/
/*  * Sizzle CSS Selector Engine v2.2.1*/
/*  * http://sizzlejs.com/*/
/*  **/
/*  * Copyright jQuery Foundation and other contributors*/
/*  * Released under the MIT license*/
/*  * http://jquery.org/license*/
/*  **/
/*  * Date: 2015-10-17*/
/*  *//* */
/* (function( window ) {*/
/* */
/* var i,*/
/* 	support,*/
/* 	Expr,*/
/* 	getText,*/
/* 	isXML,*/
/* 	tokenize,*/
/* 	compile,*/
/* 	select,*/
/* 	outermostContext,*/
/* 	sortInput,*/
/* 	hasDuplicate,*/
/* */
/* 	// Local document vars*/
/* 	setDocument,*/
/* 	document,*/
/* 	docElem,*/
/* 	documentIsHTML,*/
/* 	rbuggyQSA,*/
/* 	rbuggyMatches,*/
/* 	matches,*/
/* 	contains,*/
/* */
/* 	// Instance-specific data*/
/* 	expando = "sizzle" + 1 * new Date(),*/
/* 	preferredDoc = window.document,*/
/* 	dirruns = 0,*/
/* 	done = 0,*/
/* 	classCache = createCache(),*/
/* 	tokenCache = createCache(),*/
/* 	compilerCache = createCache(),*/
/* 	sortOrder = function( a, b ) {*/
/* 		if ( a === b ) {*/
/* 			hasDuplicate = true;*/
/* 		}*/
/* 		return 0;*/
/* 	},*/
/* */
/* 	// General-purpose constants*/
/* 	MAX_NEGATIVE = 1 << 31,*/
/* */
/* 	// Instance methods*/
/* 	hasOwn = ({}).hasOwnProperty,*/
/* 	arr = [],*/
/* 	pop = arr.pop,*/
/* 	push_native = arr.push,*/
/* 	push = arr.push,*/
/* 	slice = arr.slice,*/
/* 	// Use a stripped-down indexOf as it's faster than native*/
/* 	// http://jsperf.com/thor-indexof-vs-for/5*/
/* 	indexOf = function( list, elem ) {*/
/* 		var i = 0,*/
/* 			len = list.length;*/
/* 		for ( ; i < len; i++ ) {*/
/* 			if ( list[i] === elem ) {*/
/* 				return i;*/
/* 			}*/
/* 		}*/
/* 		return -1;*/
/* 	},*/
/* */
/* 	booleans = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",*/
/* */
/* 	// Regular expressions*/
/* */
/* 	// http://www.w3.org/TR/css3-selectors/#whitespace*/
/* 	whitespace = "[\\x20\\t\\r\\n\\f]",*/
/* */
/* 	// http://www.w3.org/TR/CSS21/syndata.html#value-def-identifier*/
/* 	identifier = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",*/
/* */
/* 	// Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors*/
/* 	attributes = "\\[" + whitespace + "*(" + identifier + ")(?:" + whitespace +*/
/* 		// Operator (capture 2)*/
/* 		"*([*^$|!~]?=)" + whitespace +*/
/* 		// "Attribute values must be CSS identifiers [capture 5] or strings [capture 3 or capture 4]"*/
/* 		"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + identifier + "))|)" + whitespace +*/
/* 		"*\\]",*/
/* */
/* 	pseudos = ":(" + identifier + ")(?:\\((" +*/
/* 		// To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:*/
/* 		// 1. quoted (capture 3; capture 4 or capture 5)*/
/* 		"('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|" +*/
/* 		// 2. simple (capture 6)*/
/* 		"((?:\\\\.|[^\\\\()[\\]]|" + attributes + ")*)|" +*/
/* 		// 3. anything else (capture 2)*/
/* 		".*" +*/
/* 		")\\)|)",*/
/* */
/* 	// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter*/
/* 	rwhitespace = new RegExp( whitespace + "+", "g" ),*/
/* 	rtrim = new RegExp( "^" + whitespace + "+|((?:^|[^\\\\])(?:\\\\.)*)" + whitespace + "+$", "g" ),*/
/* */
/* 	rcomma = new RegExp( "^" + whitespace + "*," + whitespace + "*" ),*/
/* 	rcombinators = new RegExp( "^" + whitespace + "*([>+~]|" + whitespace + ")" + whitespace + "*" ),*/
/* */
/* 	rattributeQuotes = new RegExp( "=" + whitespace + "*([^\\]'\"]*?)" + whitespace + "*\\]", "g" ),*/
/* */
/* 	rpseudo = new RegExp( pseudos ),*/
/* 	ridentifier = new RegExp( "^" + identifier + "$" ),*/
/* */
/* 	matchExpr = {*/
/* 		"ID": new RegExp( "^#(" + identifier + ")" ),*/
/* 		"CLASS": new RegExp( "^\\.(" + identifier + ")" ),*/
/* 		"TAG": new RegExp( "^(" + identifier + "|[*])" ),*/
/* 		"ATTR": new RegExp( "^" + attributes ),*/
/* 		"PSEUDO": new RegExp( "^" + pseudos ),*/
/* 		"CHILD": new RegExp( "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + whitespace +*/
/* 			"*(even|odd|(([+-]|)(\\d*)n|)" + whitespace + "*(?:([+-]|)" + whitespace +*/
/* 			"*(\\d+)|))" + whitespace + "*\\)|)", "i" ),*/
/* 		"bool": new RegExp( "^(?:" + booleans + ")$", "i" ),*/
/* 		// For use in libraries implementing .is()*/
/* 		// We use this for POS matching in `select`*/
/* 		"needsContext": new RegExp( "^" + whitespace + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" +*/
/* 			whitespace + "*((?:-\\d)?\\d*)" + whitespace + "*\\)|)(?=[^-]|$)", "i" )*/
/* 	},*/
/* */
/* 	rinputs = /^(?:input|select|textarea|button)$/i,*/
/* 	rheader = /^h\d$/i,*/
/* */
/* 	rnative = /^[^{]+\{\s*\[native \w/,*/
/* */
/* 	// Easily-parseable/retrievable ID or TAG or CLASS selectors*/
/* 	rquickExpr = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,*/
/* */
/* 	rsibling = /[+~]/,*/
/* 	rescape = /'|\\/g,*/
/* */
/* 	// CSS escapes http://www.w3.org/TR/CSS21/syndata.html#escaped-characters*/
/* 	runescape = new RegExp( "\\\\([\\da-f]{1,6}" + whitespace + "?|(" + whitespace + ")|.)", "ig" ),*/
/* 	funescape = function( _, escaped, escapedWhitespace ) {*/
/* 		var high = "0x" + escaped - 0x10000;*/
/* 		// NaN means non-codepoint*/
/* 		// Support: Firefox<24*/
/* 		// Workaround erroneous numeric interpretation of +"0x"*/
/* 		return high !== high || escapedWhitespace ?*/
/* 			escaped :*/
/* 			high < 0 ?*/
/* 				// BMP codepoint*/
/* 				String.fromCharCode( high + 0x10000 ) :*/
/* 				// Supplemental Plane codepoint (surrogate pair)*/
/* 				String.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );*/
/* 	},*/
/* */
/* 	// Used for iframes*/
/* 	// See setDocument()*/
/* 	// Removing the function wrapper causes a "Permission Denied"*/
/* 	// error in IE*/
/* 	unloadHandler = function() {*/
/* 		setDocument();*/
/* 	};*/
/* */
/* // Optimize for push.apply( _, NodeList )*/
/* try {*/
/* 	push.apply(*/
/* 		(arr = slice.call( preferredDoc.childNodes )),*/
/* 		preferredDoc.childNodes*/
/* 	);*/
/* 	// Support: Android<4.0*/
/* 	// Detect silently failing push.apply*/
/* 	arr[ preferredDoc.childNodes.length ].nodeType;*/
/* } catch ( e ) {*/
/* 	push = { apply: arr.length ?*/
/* */
/* 		// Leverage slice if possible*/
/* 		function( target, els ) {*/
/* 			push_native.apply( target, slice.call(els) );*/
/* 		} :*/
/* */
/* 		// Support: IE<9*/
/* 		// Otherwise append directly*/
/* 		function( target, els ) {*/
/* 			var j = target.length,*/
/* 				i = 0;*/
/* 			// Can't trust NodeList.length*/
/* 			while ( (target[j++] = els[i++]) ) {}*/
/* 			target.length = j - 1;*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* function Sizzle( selector, context, results, seed ) {*/
/* 	var m, i, elem, nid, nidselect, match, groups, newSelector,*/
/* 		newContext = context && context.ownerDocument,*/
/* */
/* 		// nodeType defaults to 9, since context defaults to document*/
/* 		nodeType = context ? context.nodeType : 9;*/
/* */
/* 	results = results || [];*/
/* */
/* 	// Return early from calls with invalid selector or context*/
/* 	if ( typeof selector !== "string" || !selector ||*/
/* 		nodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {*/
/* */
/* 		return results;*/
/* 	}*/
/* */
/* 	// Try to shortcut find operations (as opposed to filters) in HTML documents*/
/* 	if ( !seed ) {*/
/* */
/* 		if ( ( context ? context.ownerDocument || context : preferredDoc ) !== document ) {*/
/* 			setDocument( context );*/
/* 		}*/
/* 		context = context || document;*/
/* */
/* 		if ( documentIsHTML ) {*/
/* */
/* 			// If the selector is sufficiently simple, try using a "get*By*" DOM method*/
/* 			// (excepting DocumentFragment context, where the methods don't exist)*/
/* 			if ( nodeType !== 11 && (match = rquickExpr.exec( selector )) ) {*/
/* */
/* 				// ID selector*/
/* 				if ( (m = match[1]) ) {*/
/* */
/* 					// Document context*/
/* 					if ( nodeType === 9 ) {*/
/* 						if ( (elem = context.getElementById( m )) ) {*/
/* */
/* 							// Support: IE, Opera, Webkit*/
/* 							// TODO: identify versions*/
/* 							// getElementById can match elements by name instead of ID*/
/* 							if ( elem.id === m ) {*/
/* 								results.push( elem );*/
/* 								return results;*/
/* 							}*/
/* 						} else {*/
/* 							return results;*/
/* 						}*/
/* */
/* 					// Element context*/
/* 					} else {*/
/* */
/* 						// Support: IE, Opera, Webkit*/
/* 						// TODO: identify versions*/
/* 						// getElementById can match elements by name instead of ID*/
/* 						if ( newContext && (elem = newContext.getElementById( m )) &&*/
/* 							contains( context, elem ) &&*/
/* 							elem.id === m ) {*/
/* */
/* 							results.push( elem );*/
/* 							return results;*/
/* 						}*/
/* 					}*/
/* */
/* 				// Type selector*/
/* 				} else if ( match[2] ) {*/
/* 					push.apply( results, context.getElementsByTagName( selector ) );*/
/* 					return results;*/
/* */
/* 				// Class selector*/
/* 				} else if ( (m = match[3]) && support.getElementsByClassName &&*/
/* 					context.getElementsByClassName ) {*/
/* */
/* 					push.apply( results, context.getElementsByClassName( m ) );*/
/* 					return results;*/
/* 				}*/
/* 			}*/
/* */
/* 			// Take advantage of querySelectorAll*/
/* 			if ( support.qsa &&*/
/* 				!compilerCache[ selector + " " ] &&*/
/* 				(!rbuggyQSA || !rbuggyQSA.test( selector )) ) {*/
/* */
/* 				if ( nodeType !== 1 ) {*/
/* 					newContext = context;*/
/* 					newSelector = selector;*/
/* */
/* 				// qSA looks outside Element context, which is not what we want*/
/* 				// Thanks to Andrew Dupont for this workaround technique*/
/* 				// Support: IE <=8*/
/* 				// Exclude object elements*/
/* 				} else if ( context.nodeName.toLowerCase() !== "object" ) {*/
/* */
/* 					// Capture the context ID, setting it first if necessary*/
/* 					if ( (nid = context.getAttribute( "id" )) ) {*/
/* 						nid = nid.replace( rescape, "\\$&" );*/
/* 					} else {*/
/* 						context.setAttribute( "id", (nid = expando) );*/
/* 					}*/
/* */
/* 					// Prefix every selector in the list*/
/* 					groups = tokenize( selector );*/
/* 					i = groups.length;*/
/* 					nidselect = ridentifier.test( nid ) ? "#" + nid : "[id='" + nid + "']";*/
/* 					while ( i-- ) {*/
/* 						groups[i] = nidselect + " " + toSelector( groups[i] );*/
/* 					}*/
/* 					newSelector = groups.join( "," );*/
/* */
/* 					// Expand context for sibling selectors*/
/* 					newContext = rsibling.test( selector ) && testContext( context.parentNode ) ||*/
/* 						context;*/
/* 				}*/
/* */
/* 				if ( newSelector ) {*/
/* 					try {*/
/* 						push.apply( results,*/
/* 							newContext.querySelectorAll( newSelector )*/
/* 						);*/
/* 						return results;*/
/* 					} catch ( qsaError ) {*/
/* 					} finally {*/
/* 						if ( nid === expando ) {*/
/* 							context.removeAttribute( "id" );*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// All others*/
/* 	return select( selector.replace( rtrim, "$1" ), context, results, seed );*/
/* }*/
/* */
/* /***/
/*  * Create key-value caches of limited size*/
/*  * @returns {function(string, object)} Returns the Object data after storing it on itself with*/
/*  *	property name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)*/
/*  *	deleting the oldest entry*/
/*  *//* */
/* function createCache() {*/
/* 	var keys = [];*/
/* */
/* 	function cache( key, value ) {*/
/* 		// Use (key + " ") to avoid collision with native prototype properties (see Issue #157)*/
/* 		if ( keys.push( key + " " ) > Expr.cacheLength ) {*/
/* 			// Only keep the most recent entries*/
/* 			delete cache[ keys.shift() ];*/
/* 		}*/
/* 		return (cache[ key + " " ] = value);*/
/* 	}*/
/* 	return cache;*/
/* }*/
/* */
/* /***/
/*  * Mark a function for special use by Sizzle*/
/*  * @param {Function} fn The function to mark*/
/*  *//* */
/* function markFunction( fn ) {*/
/* 	fn[ expando ] = true;*/
/* 	return fn;*/
/* }*/
/* */
/* /***/
/*  * Support testing using an element*/
/*  * @param {Function} fn Passed the created div and expects a boolean result*/
/*  *//* */
/* function assert( fn ) {*/
/* 	var div = document.createElement("div");*/
/* */
/* 	try {*/
/* 		return !!fn( div );*/
/* 	} catch (e) {*/
/* 		return false;*/
/* 	} finally {*/
/* 		// Remove from its parent by default*/
/* 		if ( div.parentNode ) {*/
/* 			div.parentNode.removeChild( div );*/
/* 		}*/
/* 		// release memory in IE*/
/* 		div = null;*/
/* 	}*/
/* }*/
/* */
/* /***/
/*  * Adds the same handler for all of the specified attrs*/
/*  * @param {String} attrs Pipe-separated list of attributes*/
/*  * @param {Function} handler The method that will be applied*/
/*  *//* */
/* function addHandle( attrs, handler ) {*/
/* 	var arr = attrs.split("|"),*/
/* 		i = arr.length;*/
/* */
/* 	while ( i-- ) {*/
/* 		Expr.attrHandle[ arr[i] ] = handler;*/
/* 	}*/
/* }*/
/* */
/* /***/
/*  * Checks document order of two siblings*/
/*  * @param {Element} a*/
/*  * @param {Element} b*/
/*  * @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b*/
/*  *//* */
/* function siblingCheck( a, b ) {*/
/* 	var cur = b && a,*/
/* 		diff = cur && a.nodeType === 1 && b.nodeType === 1 &&*/
/* 			( ~b.sourceIndex || MAX_NEGATIVE ) -*/
/* 			( ~a.sourceIndex || MAX_NEGATIVE );*/
/* */
/* 	// Use IE sourceIndex if available on both nodes*/
/* 	if ( diff ) {*/
/* 		return diff;*/
/* 	}*/
/* */
/* 	// Check if b follows a*/
/* 	if ( cur ) {*/
/* 		while ( (cur = cur.nextSibling) ) {*/
/* 			if ( cur === b ) {*/
/* 				return -1;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	return a ? 1 : -1;*/
/* }*/
/* */
/* /***/
/*  * Returns a function to use in pseudos for input types*/
/*  * @param {String} type*/
/*  *//* */
/* function createInputPseudo( type ) {*/
/* 	return function( elem ) {*/
/* 		var name = elem.nodeName.toLowerCase();*/
/* 		return name === "input" && elem.type === type;*/
/* 	};*/
/* }*/
/* */
/* /***/
/*  * Returns a function to use in pseudos for buttons*/
/*  * @param {String} type*/
/*  *//* */
/* function createButtonPseudo( type ) {*/
/* 	return function( elem ) {*/
/* 		var name = elem.nodeName.toLowerCase();*/
/* 		return (name === "input" || name === "button") && elem.type === type;*/
/* 	};*/
/* }*/
/* */
/* /***/
/*  * Returns a function to use in pseudos for positionals*/
/*  * @param {Function} fn*/
/*  *//* */
/* function createPositionalPseudo( fn ) {*/
/* 	return markFunction(function( argument ) {*/
/* 		argument = +argument;*/
/* 		return markFunction(function( seed, matches ) {*/
/* 			var j,*/
/* 				matchIndexes = fn( [], seed.length, argument ),*/
/* 				i = matchIndexes.length;*/
/* */
/* 			// Match elements found at the specified indexes*/
/* 			while ( i-- ) {*/
/* 				if ( seed[ (j = matchIndexes[i]) ] ) {*/
/* 					seed[j] = !(matches[j] = seed[j]);*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	});*/
/* }*/
/* */
/* /***/
/*  * Checks a node for validity as a Sizzle context*/
/*  * @param {Element|Object=} context*/
/*  * @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value*/
/*  *//* */
/* function testContext( context ) {*/
/* 	return context && typeof context.getElementsByTagName !== "undefined" && context;*/
/* }*/
/* */
/* // Expose support vars for convenience*/
/* support = Sizzle.support = {};*/
/* */
/* /***/
/*  * Detects XML nodes*/
/*  * @param {Element|Object} elem An element or a document*/
/*  * @returns {Boolean} True iff elem is a non-HTML XML node*/
/*  *//* */
/* isXML = Sizzle.isXML = function( elem ) {*/
/* 	// documentElement is verified for cases where it doesn't yet exist*/
/* 	// (such as loading iframes in IE - #4833)*/
/* 	var documentElement = elem && (elem.ownerDocument || elem).documentElement;*/
/* 	return documentElement ? documentElement.nodeName !== "HTML" : false;*/
/* };*/
/* */
/* /***/
/*  * Sets document-related variables once based on the current document*/
/*  * @param {Element|Object} [doc] An element or document object to use to set the document*/
/*  * @returns {Object} Returns the current document*/
/*  *//* */
/* setDocument = Sizzle.setDocument = function( node ) {*/
/* 	var hasCompare, parent,*/
/* 		doc = node ? node.ownerDocument || node : preferredDoc;*/
/* */
/* 	// Return early if doc is invalid or already selected*/
/* 	if ( doc === document || doc.nodeType !== 9 || !doc.documentElement ) {*/
/* 		return document;*/
/* 	}*/
/* */
/* 	// Update global variables*/
/* 	document = doc;*/
/* 	docElem = document.documentElement;*/
/* 	documentIsHTML = !isXML( document );*/
/* */
/* 	// Support: IE 9-11, Edge*/
/* 	// Accessing iframe documents after unload throws "permission denied" errors (jQuery #13936)*/
/* 	if ( (parent = document.defaultView) && parent.top !== parent ) {*/
/* 		// Support: IE 11*/
/* 		if ( parent.addEventListener ) {*/
/* 			parent.addEventListener( "unload", unloadHandler, false );*/
/* */
/* 		// Support: IE 9 - 10 only*/
/* 		} else if ( parent.attachEvent ) {*/
/* 			parent.attachEvent( "onunload", unloadHandler );*/
/* 		}*/
/* 	}*/
/* */
/* 	/* Attributes*/
/* 	---------------------------------------------------------------------- *//* */
/* */
/* 	// Support: IE<8*/
/* 	// Verify that getAttribute really returns attributes and not properties*/
/* 	// (excepting IE8 booleans)*/
/* 	support.attributes = assert(function( div ) {*/
/* 		div.className = "i";*/
/* 		return !div.getAttribute("className");*/
/* 	});*/
/* */
/* 	/* getElement(s)By**/
/* 	---------------------------------------------------------------------- *//* */
/* */
/* 	// Check if getElementsByTagName("*") returns only elements*/
/* 	support.getElementsByTagName = assert(function( div ) {*/
/* 		div.appendChild( document.createComment("") );*/
/* 		return !div.getElementsByTagName("*").length;*/
/* 	});*/
/* */
/* 	// Support: IE<9*/
/* 	support.getElementsByClassName = rnative.test( document.getElementsByClassName );*/
/* */
/* 	// Support: IE<10*/
/* 	// Check if getElementById returns elements by name*/
/* 	// The broken getElementById methods don't pick up programatically-set names,*/
/* 	// so use a roundabout getElementsByName test*/
/* 	support.getById = assert(function( div ) {*/
/* 		docElem.appendChild( div ).id = expando;*/
/* 		return !document.getElementsByName || !document.getElementsByName( expando ).length;*/
/* 	});*/
/* */
/* 	// ID find and filter*/
/* 	if ( support.getById ) {*/
/* 		Expr.find["ID"] = function( id, context ) {*/
/* 			if ( typeof context.getElementById !== "undefined" && documentIsHTML ) {*/
/* 				var m = context.getElementById( id );*/
/* 				return m ? [ m ] : [];*/
/* 			}*/
/* 		};*/
/* 		Expr.filter["ID"] = function( id ) {*/
/* 			var attrId = id.replace( runescape, funescape );*/
/* 			return function( elem ) {*/
/* 				return elem.getAttribute("id") === attrId;*/
/* 			};*/
/* 		};*/
/* 	} else {*/
/* 		// Support: IE6/7*/
/* 		// getElementById is not reliable as a find shortcut*/
/* 		delete Expr.find["ID"];*/
/* */
/* 		Expr.filter["ID"] =  function( id ) {*/
/* 			var attrId = id.replace( runescape, funescape );*/
/* 			return function( elem ) {*/
/* 				var node = typeof elem.getAttributeNode !== "undefined" &&*/
/* 					elem.getAttributeNode("id");*/
/* 				return node && node.value === attrId;*/
/* 			};*/
/* 		};*/
/* 	}*/
/* */
/* 	// Tag*/
/* 	Expr.find["TAG"] = support.getElementsByTagName ?*/
/* 		function( tag, context ) {*/
/* 			if ( typeof context.getElementsByTagName !== "undefined" ) {*/
/* 				return context.getElementsByTagName( tag );*/
/* */
/* 			// DocumentFragment nodes don't have gEBTN*/
/* 			} else if ( support.qsa ) {*/
/* 				return context.querySelectorAll( tag );*/
/* 			}*/
/* 		} :*/
/* */
/* 		function( tag, context ) {*/
/* 			var elem,*/
/* 				tmp = [],*/
/* 				i = 0,*/
/* 				// By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too*/
/* 				results = context.getElementsByTagName( tag );*/
/* */
/* 			// Filter out possible comments*/
/* 			if ( tag === "*" ) {*/
/* 				while ( (elem = results[i++]) ) {*/
/* 					if ( elem.nodeType === 1 ) {*/
/* 						tmp.push( elem );*/
/* 					}*/
/* 				}*/
/* */
/* 				return tmp;*/
/* 			}*/
/* 			return results;*/
/* 		};*/
/* */
/* 	// Class*/
/* 	Expr.find["CLASS"] = support.getElementsByClassName && function( className, context ) {*/
/* 		if ( typeof context.getElementsByClassName !== "undefined" && documentIsHTML ) {*/
/* 			return context.getElementsByClassName( className );*/
/* 		}*/
/* 	};*/
/* */
/* 	/* QSA/matchesSelector*/
/* 	---------------------------------------------------------------------- *//* */
/* */
/* 	// QSA and matchesSelector support*/
/* */
/* 	// matchesSelector(:active) reports false when true (IE9/Opera 11.5)*/
/* 	rbuggyMatches = [];*/
/* */
/* 	// qSa(:focus) reports false when true (Chrome 21)*/
/* 	// We allow this because of a bug in IE8/9 that throws an error*/
/* 	// whenever `document.activeElement` is accessed on an iframe*/
/* 	// So, we allow :focus to pass through QSA all the time to avoid the IE error*/
/* 	// See http://bugs.jquery.com/ticket/13378*/
/* 	rbuggyQSA = [];*/
/* */
/* 	if ( (support.qsa = rnative.test( document.querySelectorAll )) ) {*/
/* 		// Build QSA regex*/
/* 		// Regex strategy adopted from Diego Perini*/
/* 		assert(function( div ) {*/
/* 			// Select is set to empty string on purpose*/
/* 			// This is to test IE's treatment of not explicitly*/
/* 			// setting a boolean content attribute,*/
/* 			// since its presence should be enough*/
/* 			// http://bugs.jquery.com/ticket/12359*/
/* 			docElem.appendChild( div ).innerHTML = "<a id='" + expando + "'></a>" +*/
/* 				"<select id='" + expando + "-\r\\' msallowcapture=''>" +*/
/* 				"<option selected=''></option></select>";*/
/* */
/* 			// Support: IE8, Opera 11-12.16*/
/* 			// Nothing should be selected when empty strings follow ^= or $= or *=*/
/* 			// The test attribute must be unknown in Opera but "safe" for WinRT*/
/* 			// http://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section*/
/* 			if ( div.querySelectorAll("[msallowcapture^='']").length ) {*/
/* 				rbuggyQSA.push( "[*^$]=" + whitespace + "*(?:''|\"\")" );*/
/* 			}*/
/* */
/* 			// Support: IE8*/
/* 			// Boolean attributes and "value" are not treated correctly*/
/* 			if ( !div.querySelectorAll("[selected]").length ) {*/
/* 				rbuggyQSA.push( "\\[" + whitespace + "*(?:value|" + booleans + ")" );*/
/* 			}*/
/* */
/* 			// Support: Chrome<29, Android<4.4, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.8+*/
/* 			if ( !div.querySelectorAll( "[id~=" + expando + "-]" ).length ) {*/
/* 				rbuggyQSA.push("~=");*/
/* 			}*/
/* */
/* 			// Webkit/Opera - :checked should return selected option elements*/
/* 			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked*/
/* 			// IE8 throws error here and will not see later tests*/
/* 			if ( !div.querySelectorAll(":checked").length ) {*/
/* 				rbuggyQSA.push(":checked");*/
/* 			}*/
/* */
/* 			// Support: Safari 8+, iOS 8+*/
/* 			// https://bugs.webkit.org/show_bug.cgi?id=136851*/
/* 			// In-page `selector#id sibing-combinator selector` fails*/
/* 			if ( !div.querySelectorAll( "a#" + expando + "+*" ).length ) {*/
/* 				rbuggyQSA.push(".#.+[+~]");*/
/* 			}*/
/* 		});*/
/* */
/* 		assert(function( div ) {*/
/* 			// Support: Windows 8 Native Apps*/
/* 			// The type and name attributes are restricted during .innerHTML assignment*/
/* 			var input = document.createElement("input");*/
/* 			input.setAttribute( "type", "hidden" );*/
/* 			div.appendChild( input ).setAttribute( "name", "D" );*/
/* */
/* 			// Support: IE8*/
/* 			// Enforce case-sensitivity of name attribute*/
/* 			if ( div.querySelectorAll("[name=d]").length ) {*/
/* 				rbuggyQSA.push( "name" + whitespace + "*[*^$|!~]?=" );*/
/* 			}*/
/* */
/* 			// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)*/
/* 			// IE8 throws error here and will not see later tests*/
/* 			if ( !div.querySelectorAll(":enabled").length ) {*/
/* 				rbuggyQSA.push( ":enabled", ":disabled" );*/
/* 			}*/
/* */
/* 			// Opera 10-11 does not throw on post-comma invalid pseudos*/
/* 			div.querySelectorAll("*,:x");*/
/* 			rbuggyQSA.push(",.*:");*/
/* 		});*/
/* 	}*/
/* */
/* 	if ( (support.matchesSelector = rnative.test( (matches = docElem.matches ||*/
/* 		docElem.webkitMatchesSelector ||*/
/* 		docElem.mozMatchesSelector ||*/
/* 		docElem.oMatchesSelector ||*/
/* 		docElem.msMatchesSelector) )) ) {*/
/* */
/* 		assert(function( div ) {*/
/* 			// Check to see if it's possible to do matchesSelector*/
/* 			// on a disconnected node (IE 9)*/
/* 			support.disconnectedMatch = matches.call( div, "div" );*/
/* */
/* 			// This should fail with an exception*/
/* 			// Gecko does not error, returns false instead*/
/* 			matches.call( div, "[s!='']:x" );*/
/* 			rbuggyMatches.push( "!=", pseudos );*/
/* 		});*/
/* 	}*/
/* */
/* 	rbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join("|") );*/
/* 	rbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join("|") );*/
/* */
/* 	/* Contains*/
/* 	---------------------------------------------------------------------- *//* */
/* 	hasCompare = rnative.test( docElem.compareDocumentPosition );*/
/* */
/* 	// Element contains another*/
/* 	// Purposefully self-exclusive*/
/* 	// As in, an element does not contain itself*/
/* 	contains = hasCompare || rnative.test( docElem.contains ) ?*/
/* 		function( a, b ) {*/
/* 			var adown = a.nodeType === 9 ? a.documentElement : a,*/
/* 				bup = b && b.parentNode;*/
/* 			return a === bup || !!( bup && bup.nodeType === 1 && (*/
/* 				adown.contains ?*/
/* 					adown.contains( bup ) :*/
/* 					a.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16*/
/* 			));*/
/* 		} :*/
/* 		function( a, b ) {*/
/* 			if ( b ) {*/
/* 				while ( (b = b.parentNode) ) {*/
/* 					if ( b === a ) {*/
/* 						return true;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 			return false;*/
/* 		};*/
/* */
/* 	/* Sorting*/
/* 	---------------------------------------------------------------------- *//* */
/* */
/* 	// Document order sorting*/
/* 	sortOrder = hasCompare ?*/
/* 	function( a, b ) {*/
/* */
/* 		// Flag for duplicate removal*/
/* 		if ( a === b ) {*/
/* 			hasDuplicate = true;*/
/* 			return 0;*/
/* 		}*/
/* */
/* 		// Sort on method existence if only one input has compareDocumentPosition*/
/* 		var compare = !a.compareDocumentPosition - !b.compareDocumentPosition;*/
/* 		if ( compare ) {*/
/* 			return compare;*/
/* 		}*/
/* */
/* 		// Calculate position if both inputs belong to the same document*/
/* 		compare = ( a.ownerDocument || a ) === ( b.ownerDocument || b ) ?*/
/* 			a.compareDocumentPosition( b ) :*/
/* */
/* 			// Otherwise we know they are disconnected*/
/* 			1;*/
/* */
/* 		// Disconnected nodes*/
/* 		if ( compare & 1 ||*/
/* 			(!support.sortDetached && b.compareDocumentPosition( a ) === compare) ) {*/
/* */
/* 			// Choose the first element that is related to our preferred document*/
/* 			if ( a === document || a.ownerDocument === preferredDoc && contains(preferredDoc, a) ) {*/
/* 				return -1;*/
/* 			}*/
/* 			if ( b === document || b.ownerDocument === preferredDoc && contains(preferredDoc, b) ) {*/
/* 				return 1;*/
/* 			}*/
/* */
/* 			// Maintain original order*/
/* 			return sortInput ?*/
/* 				( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :*/
/* 				0;*/
/* 		}*/
/* */
/* 		return compare & 4 ? -1 : 1;*/
/* 	} :*/
/* 	function( a, b ) {*/
/* 		// Exit early if the nodes are identical*/
/* 		if ( a === b ) {*/
/* 			hasDuplicate = true;*/
/* 			return 0;*/
/* 		}*/
/* */
/* 		var cur,*/
/* 			i = 0,*/
/* 			aup = a.parentNode,*/
/* 			bup = b.parentNode,*/
/* 			ap = [ a ],*/
/* 			bp = [ b ];*/
/* */
/* 		// Parentless nodes are either documents or disconnected*/
/* 		if ( !aup || !bup ) {*/
/* 			return a === document ? -1 :*/
/* 				b === document ? 1 :*/
/* 				aup ? -1 :*/
/* 				bup ? 1 :*/
/* 				sortInput ?*/
/* 				( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :*/
/* 				0;*/
/* */
/* 		// If the nodes are siblings, we can do a quick check*/
/* 		} else if ( aup === bup ) {*/
/* 			return siblingCheck( a, b );*/
/* 		}*/
/* */
/* 		// Otherwise we need full lists of their ancestors for comparison*/
/* 		cur = a;*/
/* 		while ( (cur = cur.parentNode) ) {*/
/* 			ap.unshift( cur );*/
/* 		}*/
/* 		cur = b;*/
/* 		while ( (cur = cur.parentNode) ) {*/
/* 			bp.unshift( cur );*/
/* 		}*/
/* */
/* 		// Walk down the tree looking for a discrepancy*/
/* 		while ( ap[i] === bp[i] ) {*/
/* 			i++;*/
/* 		}*/
/* */
/* 		return i ?*/
/* 			// Do a sibling check if the nodes have a common ancestor*/
/* 			siblingCheck( ap[i], bp[i] ) :*/
/* */
/* 			// Otherwise nodes in our document sort first*/
/* 			ap[i] === preferredDoc ? -1 :*/
/* 			bp[i] === preferredDoc ? 1 :*/
/* 			0;*/
/* 	};*/
/* */
/* 	return document;*/
/* };*/
/* */
/* Sizzle.matches = function( expr, elements ) {*/
/* 	return Sizzle( expr, null, null, elements );*/
/* };*/
/* */
/* Sizzle.matchesSelector = function( elem, expr ) {*/
/* 	// Set document vars if needed*/
/* 	if ( ( elem.ownerDocument || elem ) !== document ) {*/
/* 		setDocument( elem );*/
/* 	}*/
/* */
/* 	// Make sure that attribute selectors are quoted*/
/* 	expr = expr.replace( rattributeQuotes, "='$1']" );*/
/* */
/* 	if ( support.matchesSelector && documentIsHTML &&*/
/* 		!compilerCache[ expr + " " ] &&*/
/* 		( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&*/
/* 		( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {*/
/* */
/* 		try {*/
/* 			var ret = matches.call( elem, expr );*/
/* */
/* 			// IE 9's matchesSelector returns false on disconnected nodes*/
/* 			if ( ret || support.disconnectedMatch ||*/
/* 					// As well, disconnected nodes are said to be in a document*/
/* 					// fragment in IE 9*/
/* 					elem.document && elem.document.nodeType !== 11 ) {*/
/* 				return ret;*/
/* 			}*/
/* 		} catch (e) {}*/
/* 	}*/
/* */
/* 	return Sizzle( expr, document, null, [ elem ] ).length > 0;*/
/* };*/
/* */
/* Sizzle.contains = function( context, elem ) {*/
/* 	// Set document vars if needed*/
/* 	if ( ( context.ownerDocument || context ) !== document ) {*/
/* 		setDocument( context );*/
/* 	}*/
/* 	return contains( context, elem );*/
/* };*/
/* */
/* Sizzle.attr = function( elem, name ) {*/
/* 	// Set document vars if needed*/
/* 	if ( ( elem.ownerDocument || elem ) !== document ) {*/
/* 		setDocument( elem );*/
/* 	}*/
/* */
/* 	var fn = Expr.attrHandle[ name.toLowerCase() ],*/
/* 		// Don't get fooled by Object.prototype properties (jQuery #13807)*/
/* 		val = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?*/
/* 			fn( elem, name, !documentIsHTML ) :*/
/* 			undefined;*/
/* */
/* 	return val !== undefined ?*/
/* 		val :*/
/* 		support.attributes || !documentIsHTML ?*/
/* 			elem.getAttribute( name ) :*/
/* 			(val = elem.getAttributeNode(name)) && val.specified ?*/
/* 				val.value :*/
/* 				null;*/
/* };*/
/* */
/* Sizzle.error = function( msg ) {*/
/* 	throw new Error( "Syntax error, unrecognized expression: " + msg );*/
/* };*/
/* */
/* /***/
/*  * Document sorting and removing duplicates*/
/*  * @param {ArrayLike} results*/
/*  *//* */
/* Sizzle.uniqueSort = function( results ) {*/
/* 	var elem,*/
/* 		duplicates = [],*/
/* 		j = 0,*/
/* 		i = 0;*/
/* */
/* 	// Unless we *know* we can detect duplicates, assume their presence*/
/* 	hasDuplicate = !support.detectDuplicates;*/
/* 	sortInput = !support.sortStable && results.slice( 0 );*/
/* 	results.sort( sortOrder );*/
/* */
/* 	if ( hasDuplicate ) {*/
/* 		while ( (elem = results[i++]) ) {*/
/* 			if ( elem === results[ i ] ) {*/
/* 				j = duplicates.push( i );*/
/* 			}*/
/* 		}*/
/* 		while ( j-- ) {*/
/* 			results.splice( duplicates[ j ], 1 );*/
/* 		}*/
/* 	}*/
/* */
/* 	// Clear input after sorting to release objects*/
/* 	// See https://github.com/jquery/sizzle/pull/225*/
/* 	sortInput = null;*/
/* */
/* 	return results;*/
/* };*/
/* */
/* /***/
/*  * Utility function for retrieving the text value of an array of DOM nodes*/
/*  * @param {Array|Element} elem*/
/*  *//* */
/* getText = Sizzle.getText = function( elem ) {*/
/* 	var node,*/
/* 		ret = "",*/
/* 		i = 0,*/
/* 		nodeType = elem.nodeType;*/
/* */
/* 	if ( !nodeType ) {*/
/* 		// If no nodeType, this is expected to be an array*/
/* 		while ( (node = elem[i++]) ) {*/
/* 			// Do not traverse comment nodes*/
/* 			ret += getText( node );*/
/* 		}*/
/* 	} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {*/
/* 		// Use textContent for elements*/
/* 		// innerText usage removed for consistency of new lines (jQuery #11153)*/
/* 		if ( typeof elem.textContent === "string" ) {*/
/* 			return elem.textContent;*/
/* 		} else {*/
/* 			// Traverse its children*/
/* 			for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {*/
/* 				ret += getText( elem );*/
/* 			}*/
/* 		}*/
/* 	} else if ( nodeType === 3 || nodeType === 4 ) {*/
/* 		return elem.nodeValue;*/
/* 	}*/
/* 	// Do not include comment or processing instruction nodes*/
/* */
/* 	return ret;*/
/* };*/
/* */
/* Expr = Sizzle.selectors = {*/
/* */
/* 	// Can be adjusted by the user*/
/* 	cacheLength: 50,*/
/* */
/* 	createPseudo: markFunction,*/
/* */
/* 	match: matchExpr,*/
/* */
/* 	attrHandle: {},*/
/* */
/* 	find: {},*/
/* */
/* 	relative: {*/
/* 		">": { dir: "parentNode", first: true },*/
/* 		" ": { dir: "parentNode" },*/
/* 		"+": { dir: "previousSibling", first: true },*/
/* 		"~": { dir: "previousSibling" }*/
/* 	},*/
/* */
/* 	preFilter: {*/
/* 		"ATTR": function( match ) {*/
/* 			match[1] = match[1].replace( runescape, funescape );*/
/* */
/* 			// Move the given value to match[3] whether quoted or unquoted*/
/* 			match[3] = ( match[3] || match[4] || match[5] || "" ).replace( runescape, funescape );*/
/* */
/* 			if ( match[2] === "~=" ) {*/
/* 				match[3] = " " + match[3] + " ";*/
/* 			}*/
/* */
/* 			return match.slice( 0, 4 );*/
/* 		},*/
/* */
/* 		"CHILD": function( match ) {*/
/* 			/* matches from matchExpr["CHILD"]*/
/* 				1 type (only|nth|...)*/
/* 				2 what (child|of-type)*/
/* 				3 argument (even|odd|\d*|\d*n([+-]\d+)?|...)*/
/* 				4 xn-component of xn+y argument ([+-]?\d*n|)*/
/* 				5 sign of xn-component*/
/* 				6 x of xn-component*/
/* 				7 sign of y-component*/
/* 				8 y of y-component*/
/* 			*//* */
/* 			match[1] = match[1].toLowerCase();*/
/* */
/* 			if ( match[1].slice( 0, 3 ) === "nth" ) {*/
/* 				// nth-* requires argument*/
/* 				if ( !match[3] ) {*/
/* 					Sizzle.error( match[0] );*/
/* 				}*/
/* */
/* 				// numeric x and y parameters for Expr.filter.CHILD*/
/* 				// remember that false/true cast respectively to 0/1*/
/* 				match[4] = +( match[4] ? match[5] + (match[6] || 1) : 2 * ( match[3] === "even" || match[3] === "odd" ) );*/
/* 				match[5] = +( ( match[7] + match[8] ) || match[3] === "odd" );*/
/* */
/* 			// other types prohibit arguments*/
/* 			} else if ( match[3] ) {*/
/* 				Sizzle.error( match[0] );*/
/* 			}*/
/* */
/* 			return match;*/
/* 		},*/
/* */
/* 		"PSEUDO": function( match ) {*/
/* 			var excess,*/
/* 				unquoted = !match[6] && match[2];*/
/* */
/* 			if ( matchExpr["CHILD"].test( match[0] ) ) {*/
/* 				return null;*/
/* 			}*/
/* */
/* 			// Accept quoted arguments as-is*/
/* 			if ( match[3] ) {*/
/* 				match[2] = match[4] || match[5] || "";*/
/* */
/* 			// Strip excess characters from unquoted arguments*/
/* 			} else if ( unquoted && rpseudo.test( unquoted ) &&*/
/* 				// Get excess from tokenize (recursively)*/
/* 				(excess = tokenize( unquoted, true )) &&*/
/* 				// advance to the next closing parenthesis*/
/* 				(excess = unquoted.indexOf( ")", unquoted.length - excess ) - unquoted.length) ) {*/
/* */
/* 				// excess is a negative index*/
/* 				match[0] = match[0].slice( 0, excess );*/
/* 				match[2] = unquoted.slice( 0, excess );*/
/* 			}*/
/* */
/* 			// Return only captures needed by the pseudo filter method (type and argument)*/
/* 			return match.slice( 0, 3 );*/
/* 		}*/
/* 	},*/
/* */
/* 	filter: {*/
/* */
/* 		"TAG": function( nodeNameSelector ) {*/
/* 			var nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();*/
/* 			return nodeNameSelector === "*" ?*/
/* 				function() { return true; } :*/
/* 				function( elem ) {*/
/* 					return elem.nodeName && elem.nodeName.toLowerCase() === nodeName;*/
/* 				};*/
/* 		},*/
/* */
/* 		"CLASS": function( className ) {*/
/* 			var pattern = classCache[ className + " " ];*/
/* */
/* 			return pattern ||*/
/* 				(pattern = new RegExp( "(^|" + whitespace + ")" + className + "(" + whitespace + "|$)" )) &&*/
/* 				classCache( className, function( elem ) {*/
/* 					return pattern.test( typeof elem.className === "string" && elem.className || typeof elem.getAttribute !== "undefined" && elem.getAttribute("class") || "" );*/
/* 				});*/
/* 		},*/
/* */
/* 		"ATTR": function( name, operator, check ) {*/
/* 			return function( elem ) {*/
/* 				var result = Sizzle.attr( elem, name );*/
/* */
/* 				if ( result == null ) {*/
/* 					return operator === "!=";*/
/* 				}*/
/* 				if ( !operator ) {*/
/* 					return true;*/
/* 				}*/
/* */
/* 				result += "";*/
/* */
/* 				return operator === "=" ? result === check :*/
/* 					operator === "!=" ? result !== check :*/
/* 					operator === "^=" ? check && result.indexOf( check ) === 0 :*/
/* 					operator === "*=" ? check && result.indexOf( check ) > -1 :*/
/* 					operator === "$=" ? check && result.slice( -check.length ) === check :*/
/* 					operator === "~=" ? ( " " + result.replace( rwhitespace, " " ) + " " ).indexOf( check ) > -1 :*/
/* 					operator === "|=" ? result === check || result.slice( 0, check.length + 1 ) === check + "-" :*/
/* 					false;*/
/* 			};*/
/* 		},*/
/* */
/* 		"CHILD": function( type, what, argument, first, last ) {*/
/* 			var simple = type.slice( 0, 3 ) !== "nth",*/
/* 				forward = type.slice( -4 ) !== "last",*/
/* 				ofType = what === "of-type";*/
/* */
/* 			return first === 1 && last === 0 ?*/
/* */
/* 				// Shortcut for :nth-*(n)*/
/* 				function( elem ) {*/
/* 					return !!elem.parentNode;*/
/* 				} :*/
/* */
/* 				function( elem, context, xml ) {*/
/* 					var cache, uniqueCache, outerCache, node, nodeIndex, start,*/
/* 						dir = simple !== forward ? "nextSibling" : "previousSibling",*/
/* 						parent = elem.parentNode,*/
/* 						name = ofType && elem.nodeName.toLowerCase(),*/
/* 						useCache = !xml && !ofType,*/
/* 						diff = false;*/
/* */
/* 					if ( parent ) {*/
/* */
/* 						// :(first|last|only)-(child|of-type)*/
/* 						if ( simple ) {*/
/* 							while ( dir ) {*/
/* 								node = elem;*/
/* 								while ( (node = node[ dir ]) ) {*/
/* 									if ( ofType ?*/
/* 										node.nodeName.toLowerCase() === name :*/
/* 										node.nodeType === 1 ) {*/
/* */
/* 										return false;*/
/* 									}*/
/* 								}*/
/* 								// Reverse direction for :only-* (if we haven't yet done so)*/
/* 								start = dir = type === "only" && !start && "nextSibling";*/
/* 							}*/
/* 							return true;*/
/* 						}*/
/* */
/* 						start = [ forward ? parent.firstChild : parent.lastChild ];*/
/* */
/* 						// non-xml :nth-child(...) stores cache data on `parent`*/
/* 						if ( forward && useCache ) {*/
/* */
/* 							// Seek `elem` from a previously-cached index*/
/* */
/* 							// ...in a gzip-friendly way*/
/* 							node = parent;*/
/* 							outerCache = node[ expando ] || (node[ expando ] = {});*/
/* */
/* 							// Support: IE <9 only*/
/* 							// Defend against cloned attroperties (jQuery gh-1709)*/
/* 							uniqueCache = outerCache[ node.uniqueID ] ||*/
/* 								(outerCache[ node.uniqueID ] = {});*/
/* */
/* 							cache = uniqueCache[ type ] || [];*/
/* 							nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];*/
/* 							diff = nodeIndex && cache[ 2 ];*/
/* 							node = nodeIndex && parent.childNodes[ nodeIndex ];*/
/* */
/* 							while ( (node = ++nodeIndex && node && node[ dir ] ||*/
/* */
/* 								// Fallback to seeking `elem` from the start*/
/* 								(diff = nodeIndex = 0) || start.pop()) ) {*/
/* */
/* 								// When found, cache indexes on `parent` and break*/
/* 								if ( node.nodeType === 1 && ++diff && node === elem ) {*/
/* 									uniqueCache[ type ] = [ dirruns, nodeIndex, diff ];*/
/* 									break;*/
/* 								}*/
/* 							}*/
/* */
/* 						} else {*/
/* 							// Use previously-cached element index if available*/
/* 							if ( useCache ) {*/
/* 								// ...in a gzip-friendly way*/
/* 								node = elem;*/
/* 								outerCache = node[ expando ] || (node[ expando ] = {});*/
/* */
/* 								// Support: IE <9 only*/
/* 								// Defend against cloned attroperties (jQuery gh-1709)*/
/* 								uniqueCache = outerCache[ node.uniqueID ] ||*/
/* 									(outerCache[ node.uniqueID ] = {});*/
/* */
/* 								cache = uniqueCache[ type ] || [];*/
/* 								nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];*/
/* 								diff = nodeIndex;*/
/* 							}*/
/* */
/* 							// xml :nth-child(...)*/
/* 							// or :nth-last-child(...) or :nth(-last)?-of-type(...)*/
/* 							if ( diff === false ) {*/
/* 								// Use the same loop as above to seek `elem` from the start*/
/* 								while ( (node = ++nodeIndex && node && node[ dir ] ||*/
/* 									(diff = nodeIndex = 0) || start.pop()) ) {*/
/* */
/* 									if ( ( ofType ?*/
/* 										node.nodeName.toLowerCase() === name :*/
/* 										node.nodeType === 1 ) &&*/
/* 										++diff ) {*/
/* */
/* 										// Cache the index of each encountered element*/
/* 										if ( useCache ) {*/
/* 											outerCache = node[ expando ] || (node[ expando ] = {});*/
/* */
/* 											// Support: IE <9 only*/
/* 											// Defend against cloned attroperties (jQuery gh-1709)*/
/* 											uniqueCache = outerCache[ node.uniqueID ] ||*/
/* 												(outerCache[ node.uniqueID ] = {});*/
/* */
/* 											uniqueCache[ type ] = [ dirruns, diff ];*/
/* 										}*/
/* */
/* 										if ( node === elem ) {*/
/* 											break;*/
/* 										}*/
/* 									}*/
/* 								}*/
/* 							}*/
/* 						}*/
/* */
/* 						// Incorporate the offset, then check against cycle size*/
/* 						diff -= last;*/
/* 						return diff === first || ( diff % first === 0 && diff / first >= 0 );*/
/* 					}*/
/* 				};*/
/* 		},*/
/* */
/* 		"PSEUDO": function( pseudo, argument ) {*/
/* 			// pseudo-class names are case-insensitive*/
/* 			// http://www.w3.org/TR/selectors/#pseudo-classes*/
/* 			// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters*/
/* 			// Remember that setFilters inherits from pseudos*/
/* 			var args,*/
/* 				fn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||*/
/* 					Sizzle.error( "unsupported pseudo: " + pseudo );*/
/* */
/* 			// The user may use createPseudo to indicate that*/
/* 			// arguments are needed to create the filter function*/
/* 			// just as Sizzle does*/
/* 			if ( fn[ expando ] ) {*/
/* 				return fn( argument );*/
/* 			}*/
/* */
/* 			// But maintain support for old signatures*/
/* 			if ( fn.length > 1 ) {*/
/* 				args = [ pseudo, pseudo, "", argument ];*/
/* 				return Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?*/
/* 					markFunction(function( seed, matches ) {*/
/* 						var idx,*/
/* 							matched = fn( seed, argument ),*/
/* 							i = matched.length;*/
/* 						while ( i-- ) {*/
/* 							idx = indexOf( seed, matched[i] );*/
/* 							seed[ idx ] = !( matches[ idx ] = matched[i] );*/
/* 						}*/
/* 					}) :*/
/* 					function( elem ) {*/
/* 						return fn( elem, 0, args );*/
/* 					};*/
/* 			}*/
/* */
/* 			return fn;*/
/* 		}*/
/* 	},*/
/* */
/* 	pseudos: {*/
/* 		// Potentially complex pseudos*/
/* 		"not": markFunction(function( selector ) {*/
/* 			// Trim the selector passed to compile*/
/* 			// to avoid treating leading and trailing*/
/* 			// spaces as combinators*/
/* 			var input = [],*/
/* 				results = [],*/
/* 				matcher = compile( selector.replace( rtrim, "$1" ) );*/
/* */
/* 			return matcher[ expando ] ?*/
/* 				markFunction(function( seed, matches, context, xml ) {*/
/* 					var elem,*/
/* 						unmatched = matcher( seed, null, xml, [] ),*/
/* 						i = seed.length;*/
/* */
/* 					// Match elements unmatched by `matcher`*/
/* 					while ( i-- ) {*/
/* 						if ( (elem = unmatched[i]) ) {*/
/* 							seed[i] = !(matches[i] = elem);*/
/* 						}*/
/* 					}*/
/* 				}) :*/
/* 				function( elem, context, xml ) {*/
/* 					input[0] = elem;*/
/* 					matcher( input, null, xml, results );*/
/* 					// Don't keep the element (issue #299)*/
/* 					input[0] = null;*/
/* 					return !results.pop();*/
/* 				};*/
/* 		}),*/
/* */
/* 		"has": markFunction(function( selector ) {*/
/* 			return function( elem ) {*/
/* 				return Sizzle( selector, elem ).length > 0;*/
/* 			};*/
/* 		}),*/
/* */
/* 		"contains": markFunction(function( text ) {*/
/* 			text = text.replace( runescape, funescape );*/
/* 			return function( elem ) {*/
/* 				return ( elem.textContent || elem.innerText || getText( elem ) ).indexOf( text ) > -1;*/
/* 			};*/
/* 		}),*/
/* */
/* 		// "Whether an element is represented by a :lang() selector*/
/* 		// is based solely on the element's language value*/
/* 		// being equal to the identifier C,*/
/* 		// or beginning with the identifier C immediately followed by "-".*/
/* 		// The matching of C against the element's language value is performed case-insensitively.*/
/* 		// The identifier C does not have to be a valid language name."*/
/* 		// http://www.w3.org/TR/selectors/#lang-pseudo*/
/* 		"lang": markFunction( function( lang ) {*/
/* 			// lang value must be a valid identifier*/
/* 			if ( !ridentifier.test(lang || "") ) {*/
/* 				Sizzle.error( "unsupported lang: " + lang );*/
/* 			}*/
/* 			lang = lang.replace( runescape, funescape ).toLowerCase();*/
/* 			return function( elem ) {*/
/* 				var elemLang;*/
/* 				do {*/
/* 					if ( (elemLang = documentIsHTML ?*/
/* 						elem.lang :*/
/* 						elem.getAttribute("xml:lang") || elem.getAttribute("lang")) ) {*/
/* */
/* 						elemLang = elemLang.toLowerCase();*/
/* 						return elemLang === lang || elemLang.indexOf( lang + "-" ) === 0;*/
/* 					}*/
/* 				} while ( (elem = elem.parentNode) && elem.nodeType === 1 );*/
/* 				return false;*/
/* 			};*/
/* 		}),*/
/* */
/* 		// Miscellaneous*/
/* 		"target": function( elem ) {*/
/* 			var hash = window.location && window.location.hash;*/
/* 			return hash && hash.slice( 1 ) === elem.id;*/
/* 		},*/
/* */
/* 		"root": function( elem ) {*/
/* 			return elem === docElem;*/
/* 		},*/
/* */
/* 		"focus": function( elem ) {*/
/* 			return elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex);*/
/* 		},*/
/* */
/* 		// Boolean properties*/
/* 		"enabled": function( elem ) {*/
/* 			return elem.disabled === false;*/
/* 		},*/
/* */
/* 		"disabled": function( elem ) {*/
/* 			return elem.disabled === true;*/
/* 		},*/
/* */
/* 		"checked": function( elem ) {*/
/* 			// In CSS3, :checked should return both checked and selected elements*/
/* 			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked*/
/* 			var nodeName = elem.nodeName.toLowerCase();*/
/* 			return (nodeName === "input" && !!elem.checked) || (nodeName === "option" && !!elem.selected);*/
/* 		},*/
/* */
/* 		"selected": function( elem ) {*/
/* 			// Accessing this property makes selected-by-default*/
/* 			// options in Safari work properly*/
/* 			if ( elem.parentNode ) {*/
/* 				elem.parentNode.selectedIndex;*/
/* 			}*/
/* */
/* 			return elem.selected === true;*/
/* 		},*/
/* */
/* 		// Contents*/
/* 		"empty": function( elem ) {*/
/* 			// http://www.w3.org/TR/selectors/#empty-pseudo*/
/* 			// :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),*/
/* 			//   but not by others (comment: 8; processing instruction: 7; etc.)*/
/* 			// nodeType < 6 works because attributes (2) do not appear as children*/
/* 			for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {*/
/* 				if ( elem.nodeType < 6 ) {*/
/* 					return false;*/
/* 				}*/
/* 			}*/
/* 			return true;*/
/* 		},*/
/* */
/* 		"parent": function( elem ) {*/
/* 			return !Expr.pseudos["empty"]( elem );*/
/* 		},*/
/* */
/* 		// Element/input types*/
/* 		"header": function( elem ) {*/
/* 			return rheader.test( elem.nodeName );*/
/* 		},*/
/* */
/* 		"input": function( elem ) {*/
/* 			return rinputs.test( elem.nodeName );*/
/* 		},*/
/* */
/* 		"button": function( elem ) {*/
/* 			var name = elem.nodeName.toLowerCase();*/
/* 			return name === "input" && elem.type === "button" || name === "button";*/
/* 		},*/
/* */
/* 		"text": function( elem ) {*/
/* 			var attr;*/
/* 			return elem.nodeName.toLowerCase() === "input" &&*/
/* 				elem.type === "text" &&*/
/* */
/* 				// Support: IE<8*/
/* 				// New HTML5 attribute values (e.g., "search") appear with elem.type === "text"*/
/* 				( (attr = elem.getAttribute("type")) == null || attr.toLowerCase() === "text" );*/
/* 		},*/
/* */
/* 		// Position-in-collection*/
/* 		"first": createPositionalPseudo(function() {*/
/* 			return [ 0 ];*/
/* 		}),*/
/* */
/* 		"last": createPositionalPseudo(function( matchIndexes, length ) {*/
/* 			return [ length - 1 ];*/
/* 		}),*/
/* */
/* 		"eq": createPositionalPseudo(function( matchIndexes, length, argument ) {*/
/* 			return [ argument < 0 ? argument + length : argument ];*/
/* 		}),*/
/* */
/* 		"even": createPositionalPseudo(function( matchIndexes, length ) {*/
/* 			var i = 0;*/
/* 			for ( ; i < length; i += 2 ) {*/
/* 				matchIndexes.push( i );*/
/* 			}*/
/* 			return matchIndexes;*/
/* 		}),*/
/* */
/* 		"odd": createPositionalPseudo(function( matchIndexes, length ) {*/
/* 			var i = 1;*/
/* 			for ( ; i < length; i += 2 ) {*/
/* 				matchIndexes.push( i );*/
/* 			}*/
/* 			return matchIndexes;*/
/* 		}),*/
/* */
/* 		"lt": createPositionalPseudo(function( matchIndexes, length, argument ) {*/
/* 			var i = argument < 0 ? argument + length : argument;*/
/* 			for ( ; --i >= 0; ) {*/
/* 				matchIndexes.push( i );*/
/* 			}*/
/* 			return matchIndexes;*/
/* 		}),*/
/* */
/* 		"gt": createPositionalPseudo(function( matchIndexes, length, argument ) {*/
/* 			var i = argument < 0 ? argument + length : argument;*/
/* 			for ( ; ++i < length; ) {*/
/* 				matchIndexes.push( i );*/
/* 			}*/
/* 			return matchIndexes;*/
/* 		})*/
/* 	}*/
/* };*/
/* */
/* Expr.pseudos["nth"] = Expr.pseudos["eq"];*/
/* */
/* // Add button/input type pseudos*/
/* for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {*/
/* 	Expr.pseudos[ i ] = createInputPseudo( i );*/
/* }*/
/* for ( i in { submit: true, reset: true } ) {*/
/* 	Expr.pseudos[ i ] = createButtonPseudo( i );*/
/* }*/
/* */
/* // Easy API for creating new setFilters*/
/* function setFilters() {}*/
/* setFilters.prototype = Expr.filters = Expr.pseudos;*/
/* Expr.setFilters = new setFilters();*/
/* */
/* tokenize = Sizzle.tokenize = function( selector, parseOnly ) {*/
/* 	var matched, match, tokens, type,*/
/* 		soFar, groups, preFilters,*/
/* 		cached = tokenCache[ selector + " " ];*/
/* */
/* 	if ( cached ) {*/
/* 		return parseOnly ? 0 : cached.slice( 0 );*/
/* 	}*/
/* */
/* 	soFar = selector;*/
/* 	groups = [];*/
/* 	preFilters = Expr.preFilter;*/
/* */
/* 	while ( soFar ) {*/
/* */
/* 		// Comma and first run*/
/* 		if ( !matched || (match = rcomma.exec( soFar )) ) {*/
/* 			if ( match ) {*/
/* 				// Don't consume trailing commas as valid*/
/* 				soFar = soFar.slice( match[0].length ) || soFar;*/
/* 			}*/
/* 			groups.push( (tokens = []) );*/
/* 		}*/
/* */
/* 		matched = false;*/
/* */
/* 		// Combinators*/
/* 		if ( (match = rcombinators.exec( soFar )) ) {*/
/* 			matched = match.shift();*/
/* 			tokens.push({*/
/* 				value: matched,*/
/* 				// Cast descendant combinators to space*/
/* 				type: match[0].replace( rtrim, " " )*/
/* 			});*/
/* 			soFar = soFar.slice( matched.length );*/
/* 		}*/
/* */
/* 		// Filters*/
/* 		for ( type in Expr.filter ) {*/
/* 			if ( (match = matchExpr[ type ].exec( soFar )) && (!preFilters[ type ] ||*/
/* 				(match = preFilters[ type ]( match ))) ) {*/
/* 				matched = match.shift();*/
/* 				tokens.push({*/
/* 					value: matched,*/
/* 					type: type,*/
/* 					matches: match*/
/* 				});*/
/* 				soFar = soFar.slice( matched.length );*/
/* 			}*/
/* 		}*/
/* */
/* 		if ( !matched ) {*/
/* 			break;*/
/* 		}*/
/* 	}*/
/* */
/* 	// Return the length of the invalid excess*/
/* 	// if we're just parsing*/
/* 	// Otherwise, throw an error or return tokens*/
/* 	return parseOnly ?*/
/* 		soFar.length :*/
/* 		soFar ?*/
/* 			Sizzle.error( selector ) :*/
/* 			// Cache the tokens*/
/* 			tokenCache( selector, groups ).slice( 0 );*/
/* };*/
/* */
/* function toSelector( tokens ) {*/
/* 	var i = 0,*/
/* 		len = tokens.length,*/
/* 		selector = "";*/
/* 	for ( ; i < len; i++ ) {*/
/* 		selector += tokens[i].value;*/
/* 	}*/
/* 	return selector;*/
/* }*/
/* */
/* function addCombinator( matcher, combinator, base ) {*/
/* 	var dir = combinator.dir,*/
/* 		checkNonElements = base && dir === "parentNode",*/
/* 		doneName = done++;*/
/* */
/* 	return combinator.first ?*/
/* 		// Check against closest ancestor/preceding element*/
/* 		function( elem, context, xml ) {*/
/* 			while ( (elem = elem[ dir ]) ) {*/
/* 				if ( elem.nodeType === 1 || checkNonElements ) {*/
/* 					return matcher( elem, context, xml );*/
/* 				}*/
/* 			}*/
/* 		} :*/
/* */
/* 		// Check against all ancestor/preceding elements*/
/* 		function( elem, context, xml ) {*/
/* 			var oldCache, uniqueCache, outerCache,*/
/* 				newCache = [ dirruns, doneName ];*/
/* */
/* 			// We can't set arbitrary data on XML nodes, so they don't benefit from combinator caching*/
/* 			if ( xml ) {*/
/* 				while ( (elem = elem[ dir ]) ) {*/
/* 					if ( elem.nodeType === 1 || checkNonElements ) {*/
/* 						if ( matcher( elem, context, xml ) ) {*/
/* 							return true;*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			} else {*/
/* 				while ( (elem = elem[ dir ]) ) {*/
/* 					if ( elem.nodeType === 1 || checkNonElements ) {*/
/* 						outerCache = elem[ expando ] || (elem[ expando ] = {});*/
/* */
/* 						// Support: IE <9 only*/
/* 						// Defend against cloned attroperties (jQuery gh-1709)*/
/* 						uniqueCache = outerCache[ elem.uniqueID ] || (outerCache[ elem.uniqueID ] = {});*/
/* */
/* 						if ( (oldCache = uniqueCache[ dir ]) &&*/
/* 							oldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {*/
/* */
/* 							// Assign to newCache so results back-propagate to previous elements*/
/* 							return (newCache[ 2 ] = oldCache[ 2 ]);*/
/* 						} else {*/
/* 							// Reuse newcache so results back-propagate to previous elements*/
/* 							uniqueCache[ dir ] = newCache;*/
/* */
/* 							// A match means we're done; a fail means we have to keep checking*/
/* 							if ( (newCache[ 2 ] = matcher( elem, context, xml )) ) {*/
/* 								return true;*/
/* 							}*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		};*/
/* }*/
/* */
/* function elementMatcher( matchers ) {*/
/* 	return matchers.length > 1 ?*/
/* 		function( elem, context, xml ) {*/
/* 			var i = matchers.length;*/
/* 			while ( i-- ) {*/
/* 				if ( !matchers[i]( elem, context, xml ) ) {*/
/* 					return false;*/
/* 				}*/
/* 			}*/
/* 			return true;*/
/* 		} :*/
/* 		matchers[0];*/
/* }*/
/* */
/* function multipleContexts( selector, contexts, results ) {*/
/* 	var i = 0,*/
/* 		len = contexts.length;*/
/* 	for ( ; i < len; i++ ) {*/
/* 		Sizzle( selector, contexts[i], results );*/
/* 	}*/
/* 	return results;*/
/* }*/
/* */
/* function condense( unmatched, map, filter, context, xml ) {*/
/* 	var elem,*/
/* 		newUnmatched = [],*/
/* 		i = 0,*/
/* 		len = unmatched.length,*/
/* 		mapped = map != null;*/
/* */
/* 	for ( ; i < len; i++ ) {*/
/* 		if ( (elem = unmatched[i]) ) {*/
/* 			if ( !filter || filter( elem, context, xml ) ) {*/
/* 				newUnmatched.push( elem );*/
/* 				if ( mapped ) {*/
/* 					map.push( i );*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	return newUnmatched;*/
/* }*/
/* */
/* function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {*/
/* 	if ( postFilter && !postFilter[ expando ] ) {*/
/* 		postFilter = setMatcher( postFilter );*/
/* 	}*/
/* 	if ( postFinder && !postFinder[ expando ] ) {*/
/* 		postFinder = setMatcher( postFinder, postSelector );*/
/* 	}*/
/* 	return markFunction(function( seed, results, context, xml ) {*/
/* 		var temp, i, elem,*/
/* 			preMap = [],*/
/* 			postMap = [],*/
/* 			preexisting = results.length,*/
/* */
/* 			// Get initial elements from seed or context*/
/* 			elems = seed || multipleContexts( selector || "*", context.nodeType ? [ context ] : context, [] ),*/
/* */
/* 			// Prefilter to get matcher input, preserving a map for seed-results synchronization*/
/* 			matcherIn = preFilter && ( seed || !selector ) ?*/
/* 				condense( elems, preMap, preFilter, context, xml ) :*/
/* 				elems,*/
/* */
/* 			matcherOut = matcher ?*/
/* 				// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,*/
/* 				postFinder || ( seed ? preFilter : preexisting || postFilter ) ?*/
/* */
/* 					// ...intermediate processing is necessary*/
/* 					[] :*/
/* */
/* 					// ...otherwise use results directly*/
/* 					results :*/
/* 				matcherIn;*/
/* */
/* 		// Find primary matches*/
/* 		if ( matcher ) {*/
/* 			matcher( matcherIn, matcherOut, context, xml );*/
/* 		}*/
/* */
/* 		// Apply postFilter*/
/* 		if ( postFilter ) {*/
/* 			temp = condense( matcherOut, postMap );*/
/* 			postFilter( temp, [], context, xml );*/
/* */
/* 			// Un-match failing elements by moving them back to matcherIn*/
/* 			i = temp.length;*/
/* 			while ( i-- ) {*/
/* 				if ( (elem = temp[i]) ) {*/
/* 					matcherOut[ postMap[i] ] = !(matcherIn[ postMap[i] ] = elem);*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		if ( seed ) {*/
/* 			if ( postFinder || preFilter ) {*/
/* 				if ( postFinder ) {*/
/* 					// Get the final matcherOut by condensing this intermediate into postFinder contexts*/
/* 					temp = [];*/
/* 					i = matcherOut.length;*/
/* 					while ( i-- ) {*/
/* 						if ( (elem = matcherOut[i]) ) {*/
/* 							// Restore matcherIn since elem is not yet a final match*/
/* 							temp.push( (matcherIn[i] = elem) );*/
/* 						}*/
/* 					}*/
/* 					postFinder( null, (matcherOut = []), temp, xml );*/
/* 				}*/
/* */
/* 				// Move matched elements from seed to results to keep them synchronized*/
/* 				i = matcherOut.length;*/
/* 				while ( i-- ) {*/
/* 					if ( (elem = matcherOut[i]) &&*/
/* 						(temp = postFinder ? indexOf( seed, elem ) : preMap[i]) > -1 ) {*/
/* */
/* 						seed[temp] = !(results[temp] = elem);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 		// Add elements to results, through postFinder if defined*/
/* 		} else {*/
/* 			matcherOut = condense(*/
/* 				matcherOut === results ?*/
/* 					matcherOut.splice( preexisting, matcherOut.length ) :*/
/* 					matcherOut*/
/* 			);*/
/* 			if ( postFinder ) {*/
/* 				postFinder( null, results, matcherOut, xml );*/
/* 			} else {*/
/* 				push.apply( results, matcherOut );*/
/* 			}*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* function matcherFromTokens( tokens ) {*/
/* 	var checkContext, matcher, j,*/
/* 		len = tokens.length,*/
/* 		leadingRelative = Expr.relative[ tokens[0].type ],*/
/* 		implicitRelative = leadingRelative || Expr.relative[" "],*/
/* 		i = leadingRelative ? 1 : 0,*/
/* */
/* 		// The foundational matcher ensures that elements are reachable from top-level context(s)*/
/* 		matchContext = addCombinator( function( elem ) {*/
/* 			return elem === checkContext;*/
/* 		}, implicitRelative, true ),*/
/* 		matchAnyContext = addCombinator( function( elem ) {*/
/* 			return indexOf( checkContext, elem ) > -1;*/
/* 		}, implicitRelative, true ),*/
/* 		matchers = [ function( elem, context, xml ) {*/
/* 			var ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (*/
/* 				(checkContext = context).nodeType ?*/
/* 					matchContext( elem, context, xml ) :*/
/* 					matchAnyContext( elem, context, xml ) );*/
/* 			// Avoid hanging onto element (issue #299)*/
/* 			checkContext = null;*/
/* 			return ret;*/
/* 		} ];*/
/* */
/* 	for ( ; i < len; i++ ) {*/
/* 		if ( (matcher = Expr.relative[ tokens[i].type ]) ) {*/
/* 			matchers = [ addCombinator(elementMatcher( matchers ), matcher) ];*/
/* 		} else {*/
/* 			matcher = Expr.filter[ tokens[i].type ].apply( null, tokens[i].matches );*/
/* */
/* 			// Return special upon seeing a positional matcher*/
/* 			if ( matcher[ expando ] ) {*/
/* 				// Find the next relative operator (if any) for proper handling*/
/* 				j = ++i;*/
/* 				for ( ; j < len; j++ ) {*/
/* 					if ( Expr.relative[ tokens[j].type ] ) {*/
/* 						break;*/
/* 					}*/
/* 				}*/
/* 				return setMatcher(*/
/* 					i > 1 && elementMatcher( matchers ),*/
/* 					i > 1 && toSelector(*/
/* 						// If the preceding token was a descendant combinator, insert an implicit any-element `*`*/
/* 						tokens.slice( 0, i - 1 ).concat({ value: tokens[ i - 2 ].type === " " ? "*" : "" })*/
/* 					).replace( rtrim, "$1" ),*/
/* 					matcher,*/
/* 					i < j && matcherFromTokens( tokens.slice( i, j ) ),*/
/* 					j < len && matcherFromTokens( (tokens = tokens.slice( j )) ),*/
/* 					j < len && toSelector( tokens )*/
/* 				);*/
/* 			}*/
/* 			matchers.push( matcher );*/
/* 		}*/
/* 	}*/
/* */
/* 	return elementMatcher( matchers );*/
/* }*/
/* */
/* function matcherFromGroupMatchers( elementMatchers, setMatchers ) {*/
/* 	var bySet = setMatchers.length > 0,*/
/* 		byElement = elementMatchers.length > 0,*/
/* 		superMatcher = function( seed, context, xml, results, outermost ) {*/
/* 			var elem, j, matcher,*/
/* 				matchedCount = 0,*/
/* 				i = "0",*/
/* 				unmatched = seed && [],*/
/* 				setMatched = [],*/
/* 				contextBackup = outermostContext,*/
/* 				// We must always have either seed elements or outermost context*/
/* 				elems = seed || byElement && Expr.find["TAG"]( "*", outermost ),*/
/* 				// Use integer dirruns iff this is the outermost matcher*/
/* 				dirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1),*/
/* 				len = elems.length;*/
/* */
/* 			if ( outermost ) {*/
/* 				outermostContext = context === document || context || outermost;*/
/* 			}*/
/* */
/* 			// Add elements passing elementMatchers directly to results*/
/* 			// Support: IE<9, Safari*/
/* 			// Tolerate NodeList properties (IE: "length"; Safari: <number>) matching elements by id*/
/* 			for ( ; i !== len && (elem = elems[i]) != null; i++ ) {*/
/* 				if ( byElement && elem ) {*/
/* 					j = 0;*/
/* 					if ( !context && elem.ownerDocument !== document ) {*/
/* 						setDocument( elem );*/
/* 						xml = !documentIsHTML;*/
/* 					}*/
/* 					while ( (matcher = elementMatchers[j++]) ) {*/
/* 						if ( matcher( elem, context || document, xml) ) {*/
/* 							results.push( elem );*/
/* 							break;*/
/* 						}*/
/* 					}*/
/* 					if ( outermost ) {*/
/* 						dirruns = dirrunsUnique;*/
/* 					}*/
/* 				}*/
/* */
/* 				// Track unmatched elements for set filters*/
/* 				if ( bySet ) {*/
/* 					// They will have gone through all possible matchers*/
/* 					if ( (elem = !matcher && elem) ) {*/
/* 						matchedCount--;*/
/* 					}*/
/* */
/* 					// Lengthen the array for every element, matched or not*/
/* 					if ( seed ) {*/
/* 						unmatched.push( elem );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			// `i` is now the count of elements visited above, and adding it to `matchedCount`*/
/* 			// makes the latter nonnegative.*/
/* 			matchedCount += i;*/
/* */
/* 			// Apply set filters to unmatched elements*/
/* 			// NOTE: This can be skipped if there are no unmatched elements (i.e., `matchedCount`*/
/* 			// equals `i`), unless we didn't visit _any_ elements in the above loop because we have*/
/* 			// no element matchers and no seed.*/
/* 			// Incrementing an initially-string "0" `i` allows `i` to remain a string only in that*/
/* 			// case, which will result in a "00" `matchedCount` that differs from `i` but is also*/
/* 			// numerically zero.*/
/* 			if ( bySet && i !== matchedCount ) {*/
/* 				j = 0;*/
/* 				while ( (matcher = setMatchers[j++]) ) {*/
/* 					matcher( unmatched, setMatched, context, xml );*/
/* 				}*/
/* */
/* 				if ( seed ) {*/
/* 					// Reintegrate element matches to eliminate the need for sorting*/
/* 					if ( matchedCount > 0 ) {*/
/* 						while ( i-- ) {*/
/* 							if ( !(unmatched[i] || setMatched[i]) ) {*/
/* 								setMatched[i] = pop.call( results );*/
/* 							}*/
/* 						}*/
/* 					}*/
/* */
/* 					// Discard index placeholder values to get only actual matches*/
/* 					setMatched = condense( setMatched );*/
/* 				}*/
/* */
/* 				// Add matches to results*/
/* 				push.apply( results, setMatched );*/
/* */
/* 				// Seedless set matches succeeding multiple successful matchers stipulate sorting*/
/* 				if ( outermost && !seed && setMatched.length > 0 &&*/
/* 					( matchedCount + setMatchers.length ) > 1 ) {*/
/* */
/* 					Sizzle.uniqueSort( results );*/
/* 				}*/
/* 			}*/
/* */
/* 			// Override manipulation of globals by nested matchers*/
/* 			if ( outermost ) {*/
/* 				dirruns = dirrunsUnique;*/
/* 				outermostContext = contextBackup;*/
/* 			}*/
/* */
/* 			return unmatched;*/
/* 		};*/
/* */
/* 	return bySet ?*/
/* 		markFunction( superMatcher ) :*/
/* 		superMatcher;*/
/* }*/
/* */
/* compile = Sizzle.compile = function( selector, match /* Internal Use Only *//*  ) {*/
/* 	var i,*/
/* 		setMatchers = [],*/
/* 		elementMatchers = [],*/
/* 		cached = compilerCache[ selector + " " ];*/
/* */
/* 	if ( !cached ) {*/
/* 		// Generate a function of recursive functions that can be used to check each element*/
/* 		if ( !match ) {*/
/* 			match = tokenize( selector );*/
/* 		}*/
/* 		i = match.length;*/
/* 		while ( i-- ) {*/
/* 			cached = matcherFromTokens( match[i] );*/
/* 			if ( cached[ expando ] ) {*/
/* 				setMatchers.push( cached );*/
/* 			} else {*/
/* 				elementMatchers.push( cached );*/
/* 			}*/
/* 		}*/
/* */
/* 		// Cache the compiled function*/
/* 		cached = compilerCache( selector, matcherFromGroupMatchers( elementMatchers, setMatchers ) );*/
/* */
/* 		// Save selector and tokenization*/
/* 		cached.selector = selector;*/
/* 	}*/
/* 	return cached;*/
/* };*/
/* */
/* /***/
/*  * A low-level selection function that works with Sizzle's compiled*/
/*  *  selector functions*/
/*  * @param {String|Function} selector A selector or a pre-compiled*/
/*  *  selector function built with Sizzle.compile*/
/*  * @param {Element} context*/
/*  * @param {Array} [results]*/
/*  * @param {Array} [seed] A set of elements to match against*/
/*  *//* */
/* select = Sizzle.select = function( selector, context, results, seed ) {*/
/* 	var i, tokens, token, type, find,*/
/* 		compiled = typeof selector === "function" && selector,*/
/* 		match = !seed && tokenize( (selector = compiled.selector || selector) );*/
/* */
/* 	results = results || [];*/
/* */
/* 	// Try to minimize operations if there is only one selector in the list and no seed*/
/* 	// (the latter of which guarantees us context)*/
/* 	if ( match.length === 1 ) {*/
/* */
/* 		// Reduce context if the leading compound selector is an ID*/
/* 		tokens = match[0] = match[0].slice( 0 );*/
/* 		if ( tokens.length > 2 && (token = tokens[0]).type === "ID" &&*/
/* 				support.getById && context.nodeType === 9 && documentIsHTML &&*/
/* 				Expr.relative[ tokens[1].type ] ) {*/
/* */
/* 			context = ( Expr.find["ID"]( token.matches[0].replace(runescape, funescape), context ) || [] )[0];*/
/* 			if ( !context ) {*/
/* 				return results;*/
/* */
/* 			// Precompiled matchers will still verify ancestry, so step up a level*/
/* 			} else if ( compiled ) {*/
/* 				context = context.parentNode;*/
/* 			}*/
/* */
/* 			selector = selector.slice( tokens.shift().value.length );*/
/* 		}*/
/* */
/* 		// Fetch a seed set for right-to-left matching*/
/* 		i = matchExpr["needsContext"].test( selector ) ? 0 : tokens.length;*/
/* 		while ( i-- ) {*/
/* 			token = tokens[i];*/
/* */
/* 			// Abort if we hit a combinator*/
/* 			if ( Expr.relative[ (type = token.type) ] ) {*/
/* 				break;*/
/* 			}*/
/* 			if ( (find = Expr.find[ type ]) ) {*/
/* 				// Search, expanding context for leading sibling combinators*/
/* 				if ( (seed = find(*/
/* 					token.matches[0].replace( runescape, funescape ),*/
/* 					rsibling.test( tokens[0].type ) && testContext( context.parentNode ) || context*/
/* 				)) ) {*/
/* */
/* 					// If seed is empty or no tokens remain, we can return early*/
/* 					tokens.splice( i, 1 );*/
/* 					selector = seed.length && toSelector( tokens );*/
/* 					if ( !selector ) {*/
/* 						push.apply( results, seed );*/
/* 						return results;*/
/* 					}*/
/* */
/* 					break;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// Compile and execute a filtering function if one is not provided*/
/* 	// Provide `match` to avoid retokenization if we modified the selector above*/
/* 	( compiled || compile( selector, match ) )(*/
/* 		seed,*/
/* 		context,*/
/* 		!documentIsHTML,*/
/* 		results,*/
/* 		!context || rsibling.test( selector ) && testContext( context.parentNode ) || context*/
/* 	);*/
/* 	return results;*/
/* };*/
/* */
/* // One-time assignments*/
/* */
/* // Sort stability*/
/* support.sortStable = expando.split("").sort( sortOrder ).join("") === expando;*/
/* */
/* // Support: Chrome 14-35+*/
/* // Always assume duplicates if they aren't passed to the comparison function*/
/* support.detectDuplicates = !!hasDuplicate;*/
/* */
/* // Initialize against the default document*/
/* setDocument();*/
/* */
/* // Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)*/
/* // Detached nodes confoundingly follow *each other**/
/* support.sortDetached = assert(function( div1 ) {*/
/* 	// Should return 1, but returns 4 (following)*/
/* 	return div1.compareDocumentPosition( document.createElement("div") ) & 1;*/
/* });*/
/* */
/* // Support: IE<8*/
/* // Prevent attribute/property "interpolation"*/
/* // http://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx*/
/* if ( !assert(function( div ) {*/
/* 	div.innerHTML = "<a href='#'></a>";*/
/* 	return div.firstChild.getAttribute("href") === "#" ;*/
/* }) ) {*/
/* 	addHandle( "type|href|height|width", function( elem, name, isXML ) {*/
/* 		if ( !isXML ) {*/
/* 			return elem.getAttribute( name, name.toLowerCase() === "type" ? 1 : 2 );*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* // Support: IE<9*/
/* // Use defaultValue in place of getAttribute("value")*/
/* if ( !support.attributes || !assert(function( div ) {*/
/* 	div.innerHTML = "<input/>";*/
/* 	div.firstChild.setAttribute( "value", "" );*/
/* 	return div.firstChild.getAttribute( "value" ) === "";*/
/* }) ) {*/
/* 	addHandle( "value", function( elem, name, isXML ) {*/
/* 		if ( !isXML && elem.nodeName.toLowerCase() === "input" ) {*/
/* 			return elem.defaultValue;*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* // Support: IE<9*/
/* // Use getAttributeNode to fetch booleans when getAttribute lies*/
/* if ( !assert(function( div ) {*/
/* 	return div.getAttribute("disabled") == null;*/
/* }) ) {*/
/* 	addHandle( booleans, function( elem, name, isXML ) {*/
/* 		var val;*/
/* 		if ( !isXML ) {*/
/* 			return elem[ name ] === true ? name.toLowerCase() :*/
/* 					(val = elem.getAttributeNode( name )) && val.specified ?*/
/* 					val.value :*/
/* 				null;*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* return Sizzle;*/
/* */
/* })( window );*/
/* */
/* */
/* */
/* jQuery.find = Sizzle;*/
/* jQuery.expr = Sizzle.selectors;*/
/* jQuery.expr[ ":" ] = jQuery.expr.pseudos;*/
/* jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;*/
/* jQuery.text = Sizzle.getText;*/
/* jQuery.isXMLDoc = Sizzle.isXML;*/
/* jQuery.contains = Sizzle.contains;*/
/* */
/* */
/* */
/* var dir = function( elem, dir, until ) {*/
/* 	var matched = [],*/
/* 		truncate = until !== undefined;*/
/* */
/* 	while ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {*/
/* 		if ( elem.nodeType === 1 ) {*/
/* 			if ( truncate && jQuery( elem ).is( until ) ) {*/
/* 				break;*/
/* 			}*/
/* 			matched.push( elem );*/
/* 		}*/
/* 	}*/
/* 	return matched;*/
/* };*/
/* */
/* */
/* var siblings = function( n, elem ) {*/
/* 	var matched = [];*/
/* */
/* 	for ( ; n; n = n.nextSibling ) {*/
/* 		if ( n.nodeType === 1 && n !== elem ) {*/
/* 			matched.push( n );*/
/* 		}*/
/* 	}*/
/* */
/* 	return matched;*/
/* };*/
/* */
/* */
/* var rneedsContext = jQuery.expr.match.needsContext;*/
/* */
/* var rsingleTag = ( /^<([\w-]+)\s*\/?>(?:<\/\1>|)$/ );*/
/* */
/* */
/* */
/* var risSimple = /^.[^:#\[\.,]*$/;*/
/* */
/* // Implement the identical functionality for filter and not*/
/* function winnow( elements, qualifier, not ) {*/
/* 	if ( jQuery.isFunction( qualifier ) ) {*/
/* 		return jQuery.grep( elements, function( elem, i ) {*/
/* 			/* jshint -W018 *//* */
/* 			return !!qualifier.call( elem, i, elem ) !== not;*/
/* 		} );*/
/* */
/* 	}*/
/* */
/* 	if ( qualifier.nodeType ) {*/
/* 		return jQuery.grep( elements, function( elem ) {*/
/* 			return ( elem === qualifier ) !== not;*/
/* 		} );*/
/* */
/* 	}*/
/* */
/* 	if ( typeof qualifier === "string" ) {*/
/* 		if ( risSimple.test( qualifier ) ) {*/
/* 			return jQuery.filter( qualifier, elements, not );*/
/* 		}*/
/* */
/* 		qualifier = jQuery.filter( qualifier, elements );*/
/* 	}*/
/* */
/* 	return jQuery.grep( elements, function( elem ) {*/
/* 		return ( jQuery.inArray( elem, qualifier ) > -1 ) !== not;*/
/* 	} );*/
/* }*/
/* */
/* jQuery.filter = function( expr, elems, not ) {*/
/* 	var elem = elems[ 0 ];*/
/* */
/* 	if ( not ) {*/
/* 		expr = ":not(" + expr + ")";*/
/* 	}*/
/* */
/* 	return elems.length === 1 && elem.nodeType === 1 ?*/
/* 		jQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [] :*/
/* 		jQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {*/
/* 			return elem.nodeType === 1;*/
/* 		} ) );*/
/* };*/
/* */
/* jQuery.fn.extend( {*/
/* 	find: function( selector ) {*/
/* 		var i,*/
/* 			ret = [],*/
/* 			self = this,*/
/* 			len = self.length;*/
/* */
/* 		if ( typeof selector !== "string" ) {*/
/* 			return this.pushStack( jQuery( selector ).filter( function() {*/
/* 				for ( i = 0; i < len; i++ ) {*/
/* 					if ( jQuery.contains( self[ i ], this ) ) {*/
/* 						return true;*/
/* 					}*/
/* 				}*/
/* 			} ) );*/
/* 		}*/
/* */
/* 		for ( i = 0; i < len; i++ ) {*/
/* 			jQuery.find( selector, self[ i ], ret );*/
/* 		}*/
/* */
/* 		// Needed because $( selector, context ) becomes $( context ).find( selector )*/
/* 		ret = this.pushStack( len > 1 ? jQuery.unique( ret ) : ret );*/
/* 		ret.selector = this.selector ? this.selector + " " + selector : selector;*/
/* 		return ret;*/
/* 	},*/
/* 	filter: function( selector ) {*/
/* 		return this.pushStack( winnow( this, selector || [], false ) );*/
/* 	},*/
/* 	not: function( selector ) {*/
/* 		return this.pushStack( winnow( this, selector || [], true ) );*/
/* 	},*/
/* 	is: function( selector ) {*/
/* 		return !!winnow(*/
/* 			this,*/
/* */
/* 			// If this is a positional/relative selector, check membership in the returned set*/
/* 			// so $("p:first").is("p:last") won't return true for a doc with two "p".*/
/* 			typeof selector === "string" && rneedsContext.test( selector ) ?*/
/* 				jQuery( selector ) :*/
/* 				selector || [],*/
/* 			false*/
/* 		).length;*/
/* 	}*/
/* } );*/
/* */
/* */
/* // Initialize a jQuery object*/
/* */
/* */
/* // A central reference to the root jQuery(document)*/
/* var rootjQuery,*/
/* */
/* 	// A simple way to check for HTML strings*/
/* 	// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)*/
/* 	// Strict HTML recognition (#11290: must start with <)*/
/* 	rquickExpr = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,*/
/* */
/* 	init = jQuery.fn.init = function( selector, context, root ) {*/
/* 		var match, elem;*/
/* */
/* 		// HANDLE: $(""), $(null), $(undefined), $(false)*/
/* 		if ( !selector ) {*/
/* 			return this;*/
/* 		}*/
/* */
/* 		// init accepts an alternate rootjQuery*/
/* 		// so migrate can support jQuery.sub (gh-2101)*/
/* 		root = root || rootjQuery;*/
/* */
/* 		// Handle HTML strings*/
/* 		if ( typeof selector === "string" ) {*/
/* 			if ( selector.charAt( 0 ) === "<" &&*/
/* 				selector.charAt( selector.length - 1 ) === ">" &&*/
/* 				selector.length >= 3 ) {*/
/* */
/* 				// Assume that strings that start and end with <> are HTML and skip the regex check*/
/* 				match = [ null, selector, null ];*/
/* */
/* 			} else {*/
/* 				match = rquickExpr.exec( selector );*/
/* 			}*/
/* */
/* 			// Match html or make sure no context is specified for #id*/
/* 			if ( match && ( match[ 1 ] || !context ) ) {*/
/* */
/* 				// HANDLE: $(html) -> $(array)*/
/* 				if ( match[ 1 ] ) {*/
/* 					context = context instanceof jQuery ? context[ 0 ] : context;*/
/* */
/* 					// scripts is true for back-compat*/
/* 					// Intentionally let the error be thrown if parseHTML is not present*/
/* 					jQuery.merge( this, jQuery.parseHTML(*/
/* 						match[ 1 ],*/
/* 						context && context.nodeType ? context.ownerDocument || context : document,*/
/* 						true*/
/* 					) );*/
/* */
/* 					// HANDLE: $(html, props)*/
/* 					if ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {*/
/* 						for ( match in context ) {*/
/* */
/* 							// Properties of context are called as methods if possible*/
/* 							if ( jQuery.isFunction( this[ match ] ) ) {*/
/* 								this[ match ]( context[ match ] );*/
/* */
/* 							// ...and otherwise set as attributes*/
/* 							} else {*/
/* 								this.attr( match, context[ match ] );*/
/* 							}*/
/* 						}*/
/* 					}*/
/* */
/* 					return this;*/
/* */
/* 				// HANDLE: $(#id)*/
/* 				} else {*/
/* 					elem = document.getElementById( match[ 2 ] );*/
/* */
/* 					// Check parentNode to catch when Blackberry 4.6 returns*/
/* 					// nodes that are no longer in the document #6963*/
/* 					if ( elem && elem.parentNode ) {*/
/* */
/* 						// Handle the case where IE and Opera return items*/
/* 						// by name instead of ID*/
/* 						if ( elem.id !== match[ 2 ] ) {*/
/* 							return rootjQuery.find( selector );*/
/* 						}*/
/* */
/* 						// Otherwise, we inject the element directly into the jQuery object*/
/* 						this.length = 1;*/
/* 						this[ 0 ] = elem;*/
/* 					}*/
/* */
/* 					this.context = document;*/
/* 					this.selector = selector;*/
/* 					return this;*/
/* 				}*/
/* */
/* 			// HANDLE: $(expr, $(...))*/
/* 			} else if ( !context || context.jquery ) {*/
/* 				return ( context || root ).find( selector );*/
/* */
/* 			// HANDLE: $(expr, context)*/
/* 			// (which is just equivalent to: $(context).find(expr)*/
/* 			} else {*/
/* 				return this.constructor( context ).find( selector );*/
/* 			}*/
/* */
/* 		// HANDLE: $(DOMElement)*/
/* 		} else if ( selector.nodeType ) {*/
/* 			this.context = this[ 0 ] = selector;*/
/* 			this.length = 1;*/
/* 			return this;*/
/* */
/* 		// HANDLE: $(function)*/
/* 		// Shortcut for document ready*/
/* 		} else if ( jQuery.isFunction( selector ) ) {*/
/* 			return typeof root.ready !== "undefined" ?*/
/* 				root.ready( selector ) :*/
/* */
/* 				// Execute immediately if ready is not present*/
/* 				selector( jQuery );*/
/* 		}*/
/* */
/* 		if ( selector.selector !== undefined ) {*/
/* 			this.selector = selector.selector;*/
/* 			this.context = selector.context;*/
/* 		}*/
/* */
/* 		return jQuery.makeArray( selector, this );*/
/* 	};*/
/* */
/* // Give the init function the jQuery prototype for later instantiation*/
/* init.prototype = jQuery.fn;*/
/* */
/* // Initialize central reference*/
/* rootjQuery = jQuery( document );*/
/* */
/* */
/* var rparentsprev = /^(?:parents|prev(?:Until|All))/,*/
/* */
/* 	// methods guaranteed to produce a unique set when starting from a unique set*/
/* 	guaranteedUnique = {*/
/* 		children: true,*/
/* 		contents: true,*/
/* 		next: true,*/
/* 		prev: true*/
/* 	};*/
/* */
/* jQuery.fn.extend( {*/
/* 	has: function( target ) {*/
/* 		var i,*/
/* 			targets = jQuery( target, this ),*/
/* 			len = targets.length;*/
/* */
/* 		return this.filter( function() {*/
/* 			for ( i = 0; i < len; i++ ) {*/
/* 				if ( jQuery.contains( this, targets[ i ] ) ) {*/
/* 					return true;*/
/* 				}*/
/* 			}*/
/* 		} );*/
/* 	},*/
/* */
/* 	closest: function( selectors, context ) {*/
/* 		var cur,*/
/* 			i = 0,*/
/* 			l = this.length,*/
/* 			matched = [],*/
/* 			pos = rneedsContext.test( selectors ) || typeof selectors !== "string" ?*/
/* 				jQuery( selectors, context || this.context ) :*/
/* 				0;*/
/* */
/* 		for ( ; i < l; i++ ) {*/
/* 			for ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {*/
/* */
/* 				// Always skip document fragments*/
/* 				if ( cur.nodeType < 11 && ( pos ?*/
/* 					pos.index( cur ) > -1 :*/
/* */
/* 					// Don't pass non-elements to Sizzle*/
/* 					cur.nodeType === 1 &&*/
/* 						jQuery.find.matchesSelector( cur, selectors ) ) ) {*/
/* */
/* 					matched.push( cur );*/
/* 					break;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );*/
/* 	},*/
/* */
/* 	// Determine the position of an element within*/
/* 	// the matched set of elements*/
/* 	index: function( elem ) {*/
/* */
/* 		// No argument, return index in parent*/
/* 		if ( !elem ) {*/
/* 			return ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;*/
/* 		}*/
/* */
/* 		// index in selector*/
/* 		if ( typeof elem === "string" ) {*/
/* 			return jQuery.inArray( this[ 0 ], jQuery( elem ) );*/
/* 		}*/
/* */
/* 		// Locate the position of the desired element*/
/* 		return jQuery.inArray(*/
/* */
/* 			// If it receives a jQuery object, the first element is used*/
/* 			elem.jquery ? elem[ 0 ] : elem, this );*/
/* 	},*/
/* */
/* 	add: function( selector, context ) {*/
/* 		return this.pushStack(*/
/* 			jQuery.uniqueSort(*/
/* 				jQuery.merge( this.get(), jQuery( selector, context ) )*/
/* 			)*/
/* 		);*/
/* 	},*/
/* */
/* 	addBack: function( selector ) {*/
/* 		return this.add( selector == null ?*/
/* 			this.prevObject : this.prevObject.filter( selector )*/
/* 		);*/
/* 	}*/
/* } );*/
/* */
/* function sibling( cur, dir ) {*/
/* 	do {*/
/* 		cur = cur[ dir ];*/
/* 	} while ( cur && cur.nodeType !== 1 );*/
/* */
/* 	return cur;*/
/* }*/
/* */
/* jQuery.each( {*/
/* 	parent: function( elem ) {*/
/* 		var parent = elem.parentNode;*/
/* 		return parent && parent.nodeType !== 11 ? parent : null;*/
/* 	},*/
/* 	parents: function( elem ) {*/
/* 		return dir( elem, "parentNode" );*/
/* 	},*/
/* 	parentsUntil: function( elem, i, until ) {*/
/* 		return dir( elem, "parentNode", until );*/
/* 	},*/
/* 	next: function( elem ) {*/
/* 		return sibling( elem, "nextSibling" );*/
/* 	},*/
/* 	prev: function( elem ) {*/
/* 		return sibling( elem, "previousSibling" );*/
/* 	},*/
/* 	nextAll: function( elem ) {*/
/* 		return dir( elem, "nextSibling" );*/
/* 	},*/
/* 	prevAll: function( elem ) {*/
/* 		return dir( elem, "previousSibling" );*/
/* 	},*/
/* 	nextUntil: function( elem, i, until ) {*/
/* 		return dir( elem, "nextSibling", until );*/
/* 	},*/
/* 	prevUntil: function( elem, i, until ) {*/
/* 		return dir( elem, "previousSibling", until );*/
/* 	},*/
/* 	siblings: function( elem ) {*/
/* 		return siblings( ( elem.parentNode || {} ).firstChild, elem );*/
/* 	},*/
/* 	children: function( elem ) {*/
/* 		return siblings( elem.firstChild );*/
/* 	},*/
/* 	contents: function( elem ) {*/
/* 		return jQuery.nodeName( elem, "iframe" ) ?*/
/* 			elem.contentDocument || elem.contentWindow.document :*/
/* 			jQuery.merge( [], elem.childNodes );*/
/* 	}*/
/* }, function( name, fn ) {*/
/* 	jQuery.fn[ name ] = function( until, selector ) {*/
/* 		var ret = jQuery.map( this, fn, until );*/
/* */
/* 		if ( name.slice( -5 ) !== "Until" ) {*/
/* 			selector = until;*/
/* 		}*/
/* */
/* 		if ( selector && typeof selector === "string" ) {*/
/* 			ret = jQuery.filter( selector, ret );*/
/* 		}*/
/* */
/* 		if ( this.length > 1 ) {*/
/* */
/* 			// Remove duplicates*/
/* 			if ( !guaranteedUnique[ name ] ) {*/
/* 				ret = jQuery.uniqueSort( ret );*/
/* 			}*/
/* */
/* 			// Reverse order for parents* and prev-derivatives*/
/* 			if ( rparentsprev.test( name ) ) {*/
/* 				ret = ret.reverse();*/
/* 			}*/
/* 		}*/
/* */
/* 		return this.pushStack( ret );*/
/* 	};*/
/* } );*/
/* var rnotwhite = ( /\S+/g );*/
/* */
/* */
/* */
/* // Convert String-formatted options into Object-formatted ones*/
/* function createOptions( options ) {*/
/* 	var object = {};*/
/* 	jQuery.each( options.match( rnotwhite ) || [], function( _, flag ) {*/
/* 		object[ flag ] = true;*/
/* 	} );*/
/* 	return object;*/
/* }*/
/* */
/* /**/
/*  * Create a callback list using the following parameters:*/
/*  **/
/*  *	options: an optional list of space-separated options that will change how*/
/*  *			the callback list behaves or a more traditional option object*/
/*  **/
/*  * By default a callback list will act like an event callback list and can be*/
/*  * "fired" multiple times.*/
/*  **/
/*  * Possible options:*/
/*  **/
/*  *	once:			will ensure the callback list can only be fired once (like a Deferred)*/
/*  **/
/*  *	memory:			will keep track of previous values and will call any callback added*/
/*  *					after the list has been fired right away with the latest "memorized"*/
/*  *					values (like a Deferred)*/
/*  **/
/*  *	unique:			will ensure a callback can only be added once (no duplicate in the list)*/
/*  **/
/*  *	stopOnFalse:	interrupt callings when a callback returns false*/
/*  **/
/*  *//* */
/* jQuery.Callbacks = function( options ) {*/
/* */
/* 	// Convert options from String-formatted to Object-formatted if needed*/
/* 	// (we check in cache first)*/
/* 	options = typeof options === "string" ?*/
/* 		createOptions( options ) :*/
/* 		jQuery.extend( {}, options );*/
/* */
/* 	var // Flag to know if list is currently firing*/
/* 		firing,*/
/* */
/* 		// Last fire value for non-forgettable lists*/
/* 		memory,*/
/* */
/* 		// Flag to know if list was already fired*/
/* 		fired,*/
/* */
/* 		// Flag to prevent firing*/
/* 		locked,*/
/* */
/* 		// Actual callback list*/
/* 		list = [],*/
/* */
/* 		// Queue of execution data for repeatable lists*/
/* 		queue = [],*/
/* */
/* 		// Index of currently firing callback (modified by add/remove as needed)*/
/* 		firingIndex = -1,*/
/* */
/* 		// Fire callbacks*/
/* 		fire = function() {*/
/* */
/* 			// Enforce single-firing*/
/* 			locked = options.once;*/
/* */
/* 			// Execute callbacks for all pending executions,*/
/* 			// respecting firingIndex overrides and runtime changes*/
/* 			fired = firing = true;*/
/* 			for ( ; queue.length; firingIndex = -1 ) {*/
/* 				memory = queue.shift();*/
/* 				while ( ++firingIndex < list.length ) {*/
/* */
/* 					// Run callback and check for early termination*/
/* 					if ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&*/
/* 						options.stopOnFalse ) {*/
/* */
/* 						// Jump to end and forget the data so .add doesn't re-fire*/
/* 						firingIndex = list.length;*/
/* 						memory = false;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			// Forget the data if we're done with it*/
/* 			if ( !options.memory ) {*/
/* 				memory = false;*/
/* 			}*/
/* */
/* 			firing = false;*/
/* */
/* 			// Clean up if we're done firing for good*/
/* 			if ( locked ) {*/
/* */
/* 				// Keep an empty list if we have data for future add calls*/
/* 				if ( memory ) {*/
/* 					list = [];*/
/* */
/* 				// Otherwise, this object is spent*/
/* 				} else {*/
/* 					list = "";*/
/* 				}*/
/* 			}*/
/* 		},*/
/* */
/* 		// Actual Callbacks object*/
/* 		self = {*/
/* */
/* 			// Add a callback or a collection of callbacks to the list*/
/* 			add: function() {*/
/* 				if ( list ) {*/
/* */
/* 					// If we have memory from a past run, we should fire after adding*/
/* 					if ( memory && !firing ) {*/
/* 						firingIndex = list.length - 1;*/
/* 						queue.push( memory );*/
/* 					}*/
/* */
/* 					( function add( args ) {*/
/* 						jQuery.each( args, function( _, arg ) {*/
/* 							if ( jQuery.isFunction( arg ) ) {*/
/* 								if ( !options.unique || !self.has( arg ) ) {*/
/* 									list.push( arg );*/
/* 								}*/
/* 							} else if ( arg && arg.length && jQuery.type( arg ) !== "string" ) {*/
/* */
/* 								// Inspect recursively*/
/* 								add( arg );*/
/* 							}*/
/* 						} );*/
/* 					} )( arguments );*/
/* */
/* 					if ( memory && !firing ) {*/
/* 						fire();*/
/* 					}*/
/* 				}*/
/* 				return this;*/
/* 			},*/
/* */
/* 			// Remove a callback from the list*/
/* 			remove: function() {*/
/* 				jQuery.each( arguments, function( _, arg ) {*/
/* 					var index;*/
/* 					while ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {*/
/* 						list.splice( index, 1 );*/
/* */
/* 						// Handle firing indexes*/
/* 						if ( index <= firingIndex ) {*/
/* 							firingIndex--;*/
/* 						}*/
/* 					}*/
/* 				} );*/
/* 				return this;*/
/* 			},*/
/* */
/* 			// Check if a given callback is in the list.*/
/* 			// If no argument is given, return whether or not list has callbacks attached.*/
/* 			has: function( fn ) {*/
/* 				return fn ?*/
/* 					jQuery.inArray( fn, list ) > -1 :*/
/* 					list.length > 0;*/
/* 			},*/
/* */
/* 			// Remove all callbacks from the list*/
/* 			empty: function() {*/
/* 				if ( list ) {*/
/* 					list = [];*/
/* 				}*/
/* 				return this;*/
/* 			},*/
/* */
/* 			// Disable .fire and .add*/
/* 			// Abort any current/pending executions*/
/* 			// Clear all callbacks and values*/
/* 			disable: function() {*/
/* 				locked = queue = [];*/
/* 				list = memory = "";*/
/* 				return this;*/
/* 			},*/
/* 			disabled: function() {*/
/* 				return !list;*/
/* 			},*/
/* */
/* 			// Disable .fire*/
/* 			// Also disable .add unless we have memory (since it would have no effect)*/
/* 			// Abort any pending executions*/
/* 			lock: function() {*/
/* 				locked = true;*/
/* 				if ( !memory ) {*/
/* 					self.disable();*/
/* 				}*/
/* 				return this;*/
/* 			},*/
/* 			locked: function() {*/
/* 				return !!locked;*/
/* 			},*/
/* */
/* 			// Call all callbacks with the given context and arguments*/
/* 			fireWith: function( context, args ) {*/
/* 				if ( !locked ) {*/
/* 					args = args || [];*/
/* 					args = [ context, args.slice ? args.slice() : args ];*/
/* 					queue.push( args );*/
/* 					if ( !firing ) {*/
/* 						fire();*/
/* 					}*/
/* 				}*/
/* 				return this;*/
/* 			},*/
/* */
/* 			// Call all the callbacks with the given arguments*/
/* 			fire: function() {*/
/* 				self.fireWith( this, arguments );*/
/* 				return this;*/
/* 			},*/
/* */
/* 			// To know if the callbacks have already been called at least once*/
/* 			fired: function() {*/
/* 				return !!fired;*/
/* 			}*/
/* 		};*/
/* */
/* 	return self;*/
/* };*/
/* */
/* */
/* jQuery.extend( {*/
/* */
/* 	Deferred: function( func ) {*/
/* 		var tuples = [*/
/* */
/* 				// action, add listener, listener list, final state*/
/* 				[ "resolve", "done", jQuery.Callbacks( "once memory" ), "resolved" ],*/
/* 				[ "reject", "fail", jQuery.Callbacks( "once memory" ), "rejected" ],*/
/* 				[ "notify", "progress", jQuery.Callbacks( "memory" ) ]*/
/* 			],*/
/* 			state = "pending",*/
/* 			promise = {*/
/* 				state: function() {*/
/* 					return state;*/
/* 				},*/
/* 				always: function() {*/
/* 					deferred.done( arguments ).fail( arguments );*/
/* 					return this;*/
/* 				},*/
/* 				then: function( /* fnDone, fnFail, fnProgress *//*  ) {*/
/* 					var fns = arguments;*/
/* 					return jQuery.Deferred( function( newDefer ) {*/
/* 						jQuery.each( tuples, function( i, tuple ) {*/
/* 							var fn = jQuery.isFunction( fns[ i ] ) && fns[ i ];*/
/* */
/* 							// deferred[ done | fail | progress ] for forwarding actions to newDefer*/
/* 							deferred[ tuple[ 1 ] ]( function() {*/
/* 								var returned = fn && fn.apply( this, arguments );*/
/* 								if ( returned && jQuery.isFunction( returned.promise ) ) {*/
/* 									returned.promise()*/
/* 										.progress( newDefer.notify )*/
/* 										.done( newDefer.resolve )*/
/* 										.fail( newDefer.reject );*/
/* 								} else {*/
/* 									newDefer[ tuple[ 0 ] + "With" ](*/
/* 										this === promise ? newDefer.promise() : this,*/
/* 										fn ? [ returned ] : arguments*/
/* 									);*/
/* 								}*/
/* 							} );*/
/* 						} );*/
/* 						fns = null;*/
/* 					} ).promise();*/
/* 				},*/
/* */
/* 				// Get a promise for this deferred*/
/* 				// If obj is provided, the promise aspect is added to the object*/
/* 				promise: function( obj ) {*/
/* 					return obj != null ? jQuery.extend( obj, promise ) : promise;*/
/* 				}*/
/* 			},*/
/* 			deferred = {};*/
/* */
/* 		// Keep pipe for back-compat*/
/* 		promise.pipe = promise.then;*/
/* */
/* 		// Add list-specific methods*/
/* 		jQuery.each( tuples, function( i, tuple ) {*/
/* 			var list = tuple[ 2 ],*/
/* 				stateString = tuple[ 3 ];*/
/* */
/* 			// promise[ done | fail | progress ] = list.add*/
/* 			promise[ tuple[ 1 ] ] = list.add;*/
/* */
/* 			// Handle state*/
/* 			if ( stateString ) {*/
/* 				list.add( function() {*/
/* */
/* 					// state = [ resolved | rejected ]*/
/* 					state = stateString;*/
/* */
/* 				// [ reject_list | resolve_list ].disable; progress_list.lock*/
/* 				}, tuples[ i ^ 1 ][ 2 ].disable, tuples[ 2 ][ 2 ].lock );*/
/* 			}*/
/* */
/* 			// deferred[ resolve | reject | notify ]*/
/* 			deferred[ tuple[ 0 ] ] = function() {*/
/* 				deferred[ tuple[ 0 ] + "With" ]( this === deferred ? promise : this, arguments );*/
/* 				return this;*/
/* 			};*/
/* 			deferred[ tuple[ 0 ] + "With" ] = list.fireWith;*/
/* 		} );*/
/* */
/* 		// Make the deferred a promise*/
/* 		promise.promise( deferred );*/
/* */
/* 		// Call given func if any*/
/* 		if ( func ) {*/
/* 			func.call( deferred, deferred );*/
/* 		}*/
/* */
/* 		// All done!*/
/* 		return deferred;*/
/* 	},*/
/* */
/* 	// Deferred helper*/
/* 	when: function( subordinate /* , ..., subordinateN *//*  ) {*/
/* 		var i = 0,*/
/* 			resolveValues = slice.call( arguments ),*/
/* 			length = resolveValues.length,*/
/* */
/* 			// the count of uncompleted subordinates*/
/* 			remaining = length !== 1 ||*/
/* 				( subordinate && jQuery.isFunction( subordinate.promise ) ) ? length : 0,*/
/* */
/* 			// the master Deferred.*/
/* 			// If resolveValues consist of only a single Deferred, just use that.*/
/* 			deferred = remaining === 1 ? subordinate : jQuery.Deferred(),*/
/* */
/* 			// Update function for both resolve and progress values*/
/* 			updateFunc = function( i, contexts, values ) {*/
/* 				return function( value ) {*/
/* 					contexts[ i ] = this;*/
/* 					values[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;*/
/* 					if ( values === progressValues ) {*/
/* 						deferred.notifyWith( contexts, values );*/
/* */
/* 					} else if ( !( --remaining ) ) {*/
/* 						deferred.resolveWith( contexts, values );*/
/* 					}*/
/* 				};*/
/* 			},*/
/* */
/* 			progressValues, progressContexts, resolveContexts;*/
/* */
/* 		// add listeners to Deferred subordinates; treat others as resolved*/
/* 		if ( length > 1 ) {*/
/* 			progressValues = new Array( length );*/
/* 			progressContexts = new Array( length );*/
/* 			resolveContexts = new Array( length );*/
/* 			for ( ; i < length; i++ ) {*/
/* 				if ( resolveValues[ i ] && jQuery.isFunction( resolveValues[ i ].promise ) ) {*/
/* 					resolveValues[ i ].promise()*/
/* 						.progress( updateFunc( i, progressContexts, progressValues ) )*/
/* 						.done( updateFunc( i, resolveContexts, resolveValues ) )*/
/* 						.fail( deferred.reject );*/
/* 				} else {*/
/* 					--remaining;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		// if we're not waiting on anything, resolve the master*/
/* 		if ( !remaining ) {*/
/* 			deferred.resolveWith( resolveContexts, resolveValues );*/
/* 		}*/
/* */
/* 		return deferred.promise();*/
/* 	}*/
/* } );*/
/* */
/* */
/* // The deferred used on DOM ready*/
/* var readyList;*/
/* */
/* jQuery.fn.ready = function( fn ) {*/
/* */
/* 	// Add the callback*/
/* 	jQuery.ready.promise().done( fn );*/
/* */
/* 	return this;*/
/* };*/
/* */
/* jQuery.extend( {*/
/* */
/* 	// Is the DOM ready to be used? Set to true once it occurs.*/
/* 	isReady: false,*/
/* */
/* 	// A counter to track how many items to wait for before*/
/* 	// the ready event fires. See #6781*/
/* 	readyWait: 1,*/
/* */
/* 	// Hold (or release) the ready event*/
/* 	holdReady: function( hold ) {*/
/* 		if ( hold ) {*/
/* 			jQuery.readyWait++;*/
/* 		} else {*/
/* 			jQuery.ready( true );*/
/* 		}*/
/* 	},*/
/* */
/* 	// Handle when the DOM is ready*/
/* 	ready: function( wait ) {*/
/* */
/* 		// Abort if there are pending holds or we're already ready*/
/* 		if ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Remember that the DOM is ready*/
/* 		jQuery.isReady = true;*/
/* */
/* 		// If a normal DOM Ready event fired, decrement, and wait if need be*/
/* 		if ( wait !== true && --jQuery.readyWait > 0 ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// If there are functions bound, to execute*/
/* 		readyList.resolveWith( document, [ jQuery ] );*/
/* */
/* 		// Trigger any bound ready events*/
/* 		if ( jQuery.fn.triggerHandler ) {*/
/* 			jQuery( document ).triggerHandler( "ready" );*/
/* 			jQuery( document ).off( "ready" );*/
/* 		}*/
/* 	}*/
/* } );*/
/* */
/* /***/
/*  * Clean-up method for dom ready events*/
/*  *//* */
/* function detach() {*/
/* 	if ( document.addEventListener ) {*/
/* 		document.removeEventListener( "DOMContentLoaded", completed );*/
/* 		window.removeEventListener( "load", completed );*/
/* */
/* 	} else {*/
/* 		document.detachEvent( "onreadystatechange", completed );*/
/* 		window.detachEvent( "onload", completed );*/
/* 	}*/
/* }*/
/* */
/* /***/
/*  * The ready event handler and self cleanup method*/
/*  *//* */
/* function completed() {*/
/* */
/* 	// readyState === "complete" is good enough for us to call the dom ready in oldIE*/
/* 	if ( document.addEventListener ||*/
/* 		window.event.type === "load" ||*/
/* 		document.readyState === "complete" ) {*/
/* */
/* 		detach();*/
/* 		jQuery.ready();*/
/* 	}*/
/* }*/
/* */
/* jQuery.ready.promise = function( obj ) {*/
/* 	if ( !readyList ) {*/
/* */
/* 		readyList = jQuery.Deferred();*/
/* */
/* 		// Catch cases where $(document).ready() is called*/
/* 		// after the browser event has already occurred.*/
/* 		// Support: IE6-10*/
/* 		// Older IE sometimes signals "interactive" too soon*/
/* 		if ( document.readyState === "complete" ||*/
/* 			( document.readyState !== "loading" && !document.documentElement.doScroll ) ) {*/
/* */
/* 			// Handle it asynchronously to allow scripts the opportunity to delay ready*/
/* 			window.setTimeout( jQuery.ready );*/
/* */
/* 		// Standards-based browsers support DOMContentLoaded*/
/* 		} else if ( document.addEventListener ) {*/
/* */
/* 			// Use the handy event callback*/
/* 			document.addEventListener( "DOMContentLoaded", completed );*/
/* */
/* 			// A fallback to window.onload, that will always work*/
/* 			window.addEventListener( "load", completed );*/
/* */
/* 		// If IE event model is used*/
/* 		} else {*/
/* */
/* 			// Ensure firing before onload, maybe late but safe also for iframes*/
/* 			document.attachEvent( "onreadystatechange", completed );*/
/* */
/* 			// A fallback to window.onload, that will always work*/
/* 			window.attachEvent( "onload", completed );*/
/* */
/* 			// If IE and not a frame*/
/* 			// continually check to see if the document is ready*/
/* 			var top = false;*/
/* */
/* 			try {*/
/* 				top = window.frameElement == null && document.documentElement;*/
/* 			} catch ( e ) {}*/
/* */
/* 			if ( top && top.doScroll ) {*/
/* 				( function doScrollCheck() {*/
/* 					if ( !jQuery.isReady ) {*/
/* */
/* 						try {*/
/* */
/* 							// Use the trick by Diego Perini*/
/* 							// http://javascript.nwbox.com/IEContentLoaded/*/
/* 							top.doScroll( "left" );*/
/* 						} catch ( e ) {*/
/* 							return window.setTimeout( doScrollCheck, 50 );*/
/* 						}*/
/* */
/* 						// detach all dom ready events*/
/* 						detach();*/
/* */
/* 						// and execute any waiting functions*/
/* 						jQuery.ready();*/
/* 					}*/
/* 				} )();*/
/* 			}*/
/* 		}*/
/* 	}*/
/* 	return readyList.promise( obj );*/
/* };*/
/* */
/* // Kick off the DOM ready check even if the user does not*/
/* jQuery.ready.promise();*/
/* */
/* */
/* */
/* */
/* // Support: IE<9*/
/* // Iteration over object's inherited properties before its own*/
/* var i;*/
/* for ( i in jQuery( support ) ) {*/
/* 	break;*/
/* }*/
/* support.ownFirst = i === "0";*/
/* */
/* // Note: most support tests are defined in their respective modules.*/
/* // false until the test is run*/
/* support.inlineBlockNeedsLayout = false;*/
/* */
/* // Execute ASAP in case we need to set body.style.zoom*/
/* jQuery( function() {*/
/* */
/* 	// Minified: var a,b,c,d*/
/* 	var val, div, body, container;*/
/* */
/* 	body = document.getElementsByTagName( "body" )[ 0 ];*/
/* 	if ( !body || !body.style ) {*/
/* */
/* 		// Return for frameset docs that don't have a body*/
/* 		return;*/
/* 	}*/
/* */
/* 	// Setup*/
/* 	div = document.createElement( "div" );*/
/* 	container = document.createElement( "div" );*/
/* 	container.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px";*/
/* 	body.appendChild( container ).appendChild( div );*/
/* */
/* 	if ( typeof div.style.zoom !== "undefined" ) {*/
/* */
/* 		// Support: IE<8*/
/* 		// Check if natively block-level elements act like inline-block*/
/* 		// elements when setting their display to 'inline' and giving*/
/* 		// them layout*/
/* 		div.style.cssText = "display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1";*/
/* */
/* 		support.inlineBlockNeedsLayout = val = div.offsetWidth === 3;*/
/* 		if ( val ) {*/
/* */
/* 			// Prevent IE 6 from affecting layout for positioned elements #11048*/
/* 			// Prevent IE from shrinking the body in IE 7 mode #12869*/
/* 			// Support: IE<8*/
/* 			body.style.zoom = 1;*/
/* 		}*/
/* 	}*/
/* */
/* 	body.removeChild( container );*/
/* } );*/
/* */
/* */
/* ( function() {*/
/* 	var div = document.createElement( "div" );*/
/* */
/* 	// Support: IE<9*/
/* 	support.deleteExpando = true;*/
/* 	try {*/
/* 		delete div.test;*/
/* 	} catch ( e ) {*/
/* 		support.deleteExpando = false;*/
/* 	}*/
/* */
/* 	// Null elements to avoid leaks in IE.*/
/* 	div = null;*/
/* } )();*/
/* var acceptData = function( elem ) {*/
/* 	var noData = jQuery.noData[ ( elem.nodeName + " " ).toLowerCase() ],*/
/* 		nodeType = +elem.nodeType || 1;*/
/* */
/* 	// Do not set data on non-element DOM nodes because it will not be cleared (#8335).*/
/* 	return nodeType !== 1 && nodeType !== 9 ?*/
/* 		false :*/
/* */
/* 		// Nodes accept data unless otherwise specified; rejection can be conditional*/
/* 		!noData || noData !== true && elem.getAttribute( "classid" ) === noData;*/
/* };*/
/* */
/* */
/* */
/* */
/* var rbrace = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,*/
/* 	rmultiDash = /([A-Z])/g;*/
/* */
/* function dataAttr( elem, key, data ) {*/
/* */
/* 	// If nothing was found internally, try to fetch any*/
/* 	// data from the HTML5 data-* attribute*/
/* 	if ( data === undefined && elem.nodeType === 1 ) {*/
/* */
/* 		var name = "data-" + key.replace( rmultiDash, "-$1" ).toLowerCase();*/
/* */
/* 		data = elem.getAttribute( name );*/
/* */
/* 		if ( typeof data === "string" ) {*/
/* 			try {*/
/* 				data = data === "true" ? true :*/
/* 					data === "false" ? false :*/
/* 					data === "null" ? null :*/
/* */
/* 					// Only convert to a number if it doesn't change the string*/
/* 					+data + "" === data ? +data :*/
/* 					rbrace.test( data ) ? jQuery.parseJSON( data ) :*/
/* 					data;*/
/* 			} catch ( e ) {}*/
/* */
/* 			// Make sure we set the data so it isn't changed later*/
/* 			jQuery.data( elem, key, data );*/
/* */
/* 		} else {*/
/* 			data = undefined;*/
/* 		}*/
/* 	}*/
/* */
/* 	return data;*/
/* }*/
/* */
/* // checks a cache object for emptiness*/
/* function isEmptyDataObject( obj ) {*/
/* 	var name;*/
/* 	for ( name in obj ) {*/
/* */
/* 		// if the public data object is empty, the private is still empty*/
/* 		if ( name === "data" && jQuery.isEmptyObject( obj[ name ] ) ) {*/
/* 			continue;*/
/* 		}*/
/* 		if ( name !== "toJSON" ) {*/
/* 			return false;*/
/* 		}*/
/* 	}*/
/* */
/* 	return true;*/
/* }*/
/* */
/* function internalData( elem, name, data, pvt /* Internal Use Only *//*  ) {*/
/* 	if ( !acceptData( elem ) ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	var ret, thisCache,*/
/* 		internalKey = jQuery.expando,*/
/* */
/* 		// We have to handle DOM nodes and JS objects differently because IE6-7*/
/* 		// can't GC object references properly across the DOM-JS boundary*/
/* 		isNode = elem.nodeType,*/
/* */
/* 		// Only DOM nodes need the global jQuery cache; JS object data is*/
/* 		// attached directly to the object so GC can occur automatically*/
/* 		cache = isNode ? jQuery.cache : elem,*/
/* */
/* 		// Only defining an ID for JS objects if its cache already exists allows*/
/* 		// the code to shortcut on the same path as a DOM node with no cache*/
/* 		id = isNode ? elem[ internalKey ] : elem[ internalKey ] && internalKey;*/
/* */
/* 	// Avoid doing any more work than we need to when trying to get data on an*/
/* 	// object that has no data at all*/
/* 	if ( ( !id || !cache[ id ] || ( !pvt && !cache[ id ].data ) ) &&*/
/* 		data === undefined && typeof name === "string" ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	if ( !id ) {*/
/* */
/* 		// Only DOM nodes need a new unique ID for each element since their data*/
/* 		// ends up in the global cache*/
/* 		if ( isNode ) {*/
/* 			id = elem[ internalKey ] = deletedIds.pop() || jQuery.guid++;*/
/* 		} else {*/
/* 			id = internalKey;*/
/* 		}*/
/* 	}*/
/* */
/* 	if ( !cache[ id ] ) {*/
/* */
/* 		// Avoid exposing jQuery metadata on plain JS objects when the object*/
/* 		// is serialized using JSON.stringify*/
/* 		cache[ id ] = isNode ? {} : { toJSON: jQuery.noop };*/
/* 	}*/
/* */
/* 	// An object can be passed to jQuery.data instead of a key/value pair; this gets*/
/* 	// shallow copied over onto the existing cache*/
/* 	if ( typeof name === "object" || typeof name === "function" ) {*/
/* 		if ( pvt ) {*/
/* 			cache[ id ] = jQuery.extend( cache[ id ], name );*/
/* 		} else {*/
/* 			cache[ id ].data = jQuery.extend( cache[ id ].data, name );*/
/* 		}*/
/* 	}*/
/* */
/* 	thisCache = cache[ id ];*/
/* */
/* 	// jQuery data() is stored in a separate object inside the object's internal data*/
/* 	// cache in order to avoid key collisions between internal data and user-defined*/
/* 	// data.*/
/* 	if ( !pvt ) {*/
/* 		if ( !thisCache.data ) {*/
/* 			thisCache.data = {};*/
/* 		}*/
/* */
/* 		thisCache = thisCache.data;*/
/* 	}*/
/* */
/* 	if ( data !== undefined ) {*/
/* 		thisCache[ jQuery.camelCase( name ) ] = data;*/
/* 	}*/
/* */
/* 	// Check for both converted-to-camel and non-converted data property names*/
/* 	// If a data property was specified*/
/* 	if ( typeof name === "string" ) {*/
/* */
/* 		// First Try to find as-is property data*/
/* 		ret = thisCache[ name ];*/
/* */
/* 		// Test for null|undefined property data*/
/* 		if ( ret == null ) {*/
/* */
/* 			// Try to find the camelCased property*/
/* 			ret = thisCache[ jQuery.camelCase( name ) ];*/
/* 		}*/
/* 	} else {*/
/* 		ret = thisCache;*/
/* 	}*/
/* */
/* 	return ret;*/
/* }*/
/* */
/* function internalRemoveData( elem, name, pvt ) {*/
/* 	if ( !acceptData( elem ) ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	var thisCache, i,*/
/* 		isNode = elem.nodeType,*/
/* */
/* 		// See jQuery.data for more information*/
/* 		cache = isNode ? jQuery.cache : elem,*/
/* 		id = isNode ? elem[ jQuery.expando ] : jQuery.expando;*/
/* */
/* 	// If there is already no cache entry for this object, there is no*/
/* 	// purpose in continuing*/
/* 	if ( !cache[ id ] ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	if ( name ) {*/
/* */
/* 		thisCache = pvt ? cache[ id ] : cache[ id ].data;*/
/* */
/* 		if ( thisCache ) {*/
/* */
/* 			// Support array or space separated string names for data keys*/
/* 			if ( !jQuery.isArray( name ) ) {*/
/* */
/* 				// try the string as a key before any manipulation*/
/* 				if ( name in thisCache ) {*/
/* 					name = [ name ];*/
/* 				} else {*/
/* */
/* 					// split the camel cased version by spaces unless a key with the spaces exists*/
/* 					name = jQuery.camelCase( name );*/
/* 					if ( name in thisCache ) {*/
/* 						name = [ name ];*/
/* 					} else {*/
/* 						name = name.split( " " );*/
/* 					}*/
/* 				}*/
/* 			} else {*/
/* */
/* 				// If "name" is an array of keys...*/
/* 				// When data is initially created, via ("key", "val") signature,*/
/* 				// keys will be converted to camelCase.*/
/* 				// Since there is no way to tell _how_ a key was added, remove*/
/* 				// both plain key and camelCase key. #12786*/
/* 				// This will only penalize the array argument path.*/
/* 				name = name.concat( jQuery.map( name, jQuery.camelCase ) );*/
/* 			}*/
/* */
/* 			i = name.length;*/
/* 			while ( i-- ) {*/
/* 				delete thisCache[ name[ i ] ];*/
/* 			}*/
/* */
/* 			// If there is no data left in the cache, we want to continue*/
/* 			// and let the cache object itself get destroyed*/
/* 			if ( pvt ? !isEmptyDataObject( thisCache ) : !jQuery.isEmptyObject( thisCache ) ) {*/
/* 				return;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// See jQuery.data for more information*/
/* 	if ( !pvt ) {*/
/* 		delete cache[ id ].data;*/
/* */
/* 		// Don't destroy the parent cache unless the internal data object*/
/* 		// had been the only thing left in it*/
/* 		if ( !isEmptyDataObject( cache[ id ] ) ) {*/
/* 			return;*/
/* 		}*/
/* 	}*/
/* */
/* 	// Destroy the cache*/
/* 	if ( isNode ) {*/
/* 		jQuery.cleanData( [ elem ], true );*/
/* */
/* 	// Use delete when supported for expandos or `cache` is not a window per isWindow (#10080)*/
/* 	/* jshint eqeqeq: false *//* */
/* 	} else if ( support.deleteExpando || cache != cache.window ) {*/
/* 		/* jshint eqeqeq: true *//* */
/* 		delete cache[ id ];*/
/* */
/* 	// When all else fails, undefined*/
/* 	} else {*/
/* 		cache[ id ] = undefined;*/
/* 	}*/
/* }*/
/* */
/* jQuery.extend( {*/
/* 	cache: {},*/
/* */
/* 	// The following elements (space-suffixed to avoid Object.prototype collisions)*/
/* 	// throw uncatchable exceptions if you attempt to set expando properties*/
/* 	noData: {*/
/* 		"applet ": true,*/
/* 		"embed ": true,*/
/* */
/* 		// ...but Flash objects (which have this classid) *can* handle expandos*/
/* 		"object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"*/
/* 	},*/
/* */
/* 	hasData: function( elem ) {*/
/* 		elem = elem.nodeType ? jQuery.cache[ elem[ jQuery.expando ] ] : elem[ jQuery.expando ];*/
/* 		return !!elem && !isEmptyDataObject( elem );*/
/* 	},*/
/* */
/* 	data: function( elem, name, data ) {*/
/* 		return internalData( elem, name, data );*/
/* 	},*/
/* */
/* 	removeData: function( elem, name ) {*/
/* 		return internalRemoveData( elem, name );*/
/* 	},*/
/* */
/* 	// For internal use only.*/
/* 	_data: function( elem, name, data ) {*/
/* 		return internalData( elem, name, data, true );*/
/* 	},*/
/* */
/* 	_removeData: function( elem, name ) {*/
/* 		return internalRemoveData( elem, name, true );*/
/* 	}*/
/* } );*/
/* */
/* jQuery.fn.extend( {*/
/* 	data: function( key, value ) {*/
/* 		var i, name, data,*/
/* 			elem = this[ 0 ],*/
/* 			attrs = elem && elem.attributes;*/
/* */
/* 		// Special expections of .data basically thwart jQuery.access,*/
/* 		// so implement the relevant behavior ourselves*/
/* */
/* 		// Gets all values*/
/* 		if ( key === undefined ) {*/
/* 			if ( this.length ) {*/
/* 				data = jQuery.data( elem );*/
/* */
/* 				if ( elem.nodeType === 1 && !jQuery._data( elem, "parsedAttrs" ) ) {*/
/* 					i = attrs.length;*/
/* 					while ( i-- ) {*/
/* */
/* 						// Support: IE11+*/
/* 						// The attrs elements can be null (#14894)*/
/* 						if ( attrs[ i ] ) {*/
/* 							name = attrs[ i ].name;*/
/* 							if ( name.indexOf( "data-" ) === 0 ) {*/
/* 								name = jQuery.camelCase( name.slice( 5 ) );*/
/* 								dataAttr( elem, name, data[ name ] );*/
/* 							}*/
/* 						}*/
/* 					}*/
/* 					jQuery._data( elem, "parsedAttrs", true );*/
/* 				}*/
/* 			}*/
/* */
/* 			return data;*/
/* 		}*/
/* */
/* 		// Sets multiple values*/
/* 		if ( typeof key === "object" ) {*/
/* 			return this.each( function() {*/
/* 				jQuery.data( this, key );*/
/* 			} );*/
/* 		}*/
/* */
/* 		return arguments.length > 1 ?*/
/* */
/* 			// Sets one value*/
/* 			this.each( function() {*/
/* 				jQuery.data( this, key, value );*/
/* 			} ) :*/
/* */
/* 			// Gets one value*/
/* 			// Try to fetch any internally stored data first*/
/* 			elem ? dataAttr( elem, key, jQuery.data( elem, key ) ) : undefined;*/
/* 	},*/
/* */
/* 	removeData: function( key ) {*/
/* 		return this.each( function() {*/
/* 			jQuery.removeData( this, key );*/
/* 		} );*/
/* 	}*/
/* } );*/
/* */
/* */
/* jQuery.extend( {*/
/* 	queue: function( elem, type, data ) {*/
/* 		var queue;*/
/* */
/* 		if ( elem ) {*/
/* 			type = ( type || "fx" ) + "queue";*/
/* 			queue = jQuery._data( elem, type );*/
/* */
/* 			// Speed up dequeue by getting out quickly if this is just a lookup*/
/* 			if ( data ) {*/
/* 				if ( !queue || jQuery.isArray( data ) ) {*/
/* 					queue = jQuery._data( elem, type, jQuery.makeArray( data ) );*/
/* 				} else {*/
/* 					queue.push( data );*/
/* 				}*/
/* 			}*/
/* 			return queue || [];*/
/* 		}*/
/* 	},*/
/* */
/* 	dequeue: function( elem, type ) {*/
/* 		type = type || "fx";*/
/* */
/* 		var queue = jQuery.queue( elem, type ),*/
/* 			startLength = queue.length,*/
/* 			fn = queue.shift(),*/
/* 			hooks = jQuery._queueHooks( elem, type ),*/
/* 			next = function() {*/
/* 				jQuery.dequeue( elem, type );*/
/* 			};*/
/* */
/* 		// If the fx queue is dequeued, always remove the progress sentinel*/
/* 		if ( fn === "inprogress" ) {*/
/* 			fn = queue.shift();*/
/* 			startLength--;*/
/* 		}*/
/* */
/* 		if ( fn ) {*/
/* */
/* 			// Add a progress sentinel to prevent the fx queue from being*/
/* 			// automatically dequeued*/
/* 			if ( type === "fx" ) {*/
/* 				queue.unshift( "inprogress" );*/
/* 			}*/
/* */
/* 			// clear up the last queue stop function*/
/* 			delete hooks.stop;*/
/* 			fn.call( elem, next, hooks );*/
/* 		}*/
/* */
/* 		if ( !startLength && hooks ) {*/
/* 			hooks.empty.fire();*/
/* 		}*/
/* 	},*/
/* */
/* 	// not intended for public consumption - generates a queueHooks object,*/
/* 	// or returns the current one*/
/* 	_queueHooks: function( elem, type ) {*/
/* 		var key = type + "queueHooks";*/
/* 		return jQuery._data( elem, key ) || jQuery._data( elem, key, {*/
/* 			empty: jQuery.Callbacks( "once memory" ).add( function() {*/
/* 				jQuery._removeData( elem, type + "queue" );*/
/* 				jQuery._removeData( elem, key );*/
/* 			} )*/
/* 		} );*/
/* 	}*/
/* } );*/
/* */
/* jQuery.fn.extend( {*/
/* 	queue: function( type, data ) {*/
/* 		var setter = 2;*/
/* */
/* 		if ( typeof type !== "string" ) {*/
/* 			data = type;*/
/* 			type = "fx";*/
/* 			setter--;*/
/* 		}*/
/* */
/* 		if ( arguments.length < setter ) {*/
/* 			return jQuery.queue( this[ 0 ], type );*/
/* 		}*/
/* */
/* 		return data === undefined ?*/
/* 			this :*/
/* 			this.each( function() {*/
/* 				var queue = jQuery.queue( this, type, data );*/
/* */
/* 				// ensure a hooks for this queue*/
/* 				jQuery._queueHooks( this, type );*/
/* */
/* 				if ( type === "fx" && queue[ 0 ] !== "inprogress" ) {*/
/* 					jQuery.dequeue( this, type );*/
/* 				}*/
/* 			} );*/
/* 	},*/
/* 	dequeue: function( type ) {*/
/* 		return this.each( function() {*/
/* 			jQuery.dequeue( this, type );*/
/* 		} );*/
/* 	},*/
/* 	clearQueue: function( type ) {*/
/* 		return this.queue( type || "fx", [] );*/
/* 	},*/
/* */
/* 	// Get a promise resolved when queues of a certain type*/
/* 	// are emptied (fx is the type by default)*/
/* 	promise: function( type, obj ) {*/
/* 		var tmp,*/
/* 			count = 1,*/
/* 			defer = jQuery.Deferred(),*/
/* 			elements = this,*/
/* 			i = this.length,*/
/* 			resolve = function() {*/
/* 				if ( !( --count ) ) {*/
/* 					defer.resolveWith( elements, [ elements ] );*/
/* 				}*/
/* 			};*/
/* */
/* 		if ( typeof type !== "string" ) {*/
/* 			obj = type;*/
/* 			type = undefined;*/
/* 		}*/
/* 		type = type || "fx";*/
/* */
/* 		while ( i-- ) {*/
/* 			tmp = jQuery._data( elements[ i ], type + "queueHooks" );*/
/* 			if ( tmp && tmp.empty ) {*/
/* 				count++;*/
/* 				tmp.empty.add( resolve );*/
/* 			}*/
/* 		}*/
/* 		resolve();*/
/* 		return defer.promise( obj );*/
/* 	}*/
/* } );*/
/* */
/* */
/* ( function() {*/
/* 	var shrinkWrapBlocksVal;*/
/* */
/* 	support.shrinkWrapBlocks = function() {*/
/* 		if ( shrinkWrapBlocksVal != null ) {*/
/* 			return shrinkWrapBlocksVal;*/
/* 		}*/
/* */
/* 		// Will be changed later if needed.*/
/* 		shrinkWrapBlocksVal = false;*/
/* */
/* 		// Minified: var b,c,d*/
/* 		var div, body, container;*/
/* */
/* 		body = document.getElementsByTagName( "body" )[ 0 ];*/
/* 		if ( !body || !body.style ) {*/
/* */
/* 			// Test fired too early or in an unsupported environment, exit.*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Setup*/
/* 		div = document.createElement( "div" );*/
/* 		container = document.createElement( "div" );*/
/* 		container.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px";*/
/* 		body.appendChild( container ).appendChild( div );*/
/* */
/* 		// Support: IE6*/
/* 		// Check if elements with layout shrink-wrap their children*/
/* 		if ( typeof div.style.zoom !== "undefined" ) {*/
/* */
/* 			// Reset CSS: box-sizing; display; margin; border*/
/* 			div.style.cssText =*/
/* */
/* 				// Support: Firefox<29, Android 2.3*/
/* 				// Vendor-prefix box-sizing*/
/* 				"-webkit-box-sizing:content-box;-moz-box-sizing:content-box;" +*/
/* 				"box-sizing:content-box;display:block;margin:0;border:0;" +*/
/* 				"padding:1px;width:1px;zoom:1";*/
/* 			div.appendChild( document.createElement( "div" ) ).style.width = "5px";*/
/* 			shrinkWrapBlocksVal = div.offsetWidth !== 3;*/
/* 		}*/
/* */
/* 		body.removeChild( container );*/
/* */
/* 		return shrinkWrapBlocksVal;*/
/* 	};*/
/* */
/* } )();*/
/* var pnum = ( /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/ ).source;*/
/* */
/* var rcssNum = new RegExp( "^(?:([+-])=|)(" + pnum + ")([a-z%]*)$", "i" );*/
/* */
/* */
/* var cssExpand = [ "Top", "Right", "Bottom", "Left" ];*/
/* */
/* var isHidden = function( elem, el ) {*/
/* */
/* 		// isHidden might be called from jQuery#filter function;*/
/* 		// in that case, element will be second argument*/
/* 		elem = el || elem;*/
/* 		return jQuery.css( elem, "display" ) === "none" ||*/
/* 			!jQuery.contains( elem.ownerDocument, elem );*/
/* 	};*/
/* */
/* */
/* */
/* function adjustCSS( elem, prop, valueParts, tween ) {*/
/* 	var adjusted,*/
/* 		scale = 1,*/
/* 		maxIterations = 20,*/
/* 		currentValue = tween ?*/
/* 			function() { return tween.cur(); } :*/
/* 			function() { return jQuery.css( elem, prop, "" ); },*/
/* 		initial = currentValue(),*/
/* 		unit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? "" : "px" ),*/
/* */
/* 		// Starting value computation is required for potential unit mismatches*/
/* 		initialInUnit = ( jQuery.cssNumber[ prop ] || unit !== "px" && +initial ) &&*/
/* 			rcssNum.exec( jQuery.css( elem, prop ) );*/
/* */
/* 	if ( initialInUnit && initialInUnit[ 3 ] !== unit ) {*/
/* */
/* 		// Trust units reported by jQuery.css*/
/* 		unit = unit || initialInUnit[ 3 ];*/
/* */
/* 		// Make sure we update the tween properties later on*/
/* 		valueParts = valueParts || [];*/
/* */
/* 		// Iteratively approximate from a nonzero starting point*/
/* 		initialInUnit = +initial || 1;*/
/* */
/* 		do {*/
/* */
/* 			// If previous iteration zeroed out, double until we get *something*.*/
/* 			// Use string for doubling so we don't accidentally see scale as unchanged below*/
/* 			scale = scale || ".5";*/
/* */
/* 			// Adjust and apply*/
/* 			initialInUnit = initialInUnit / scale;*/
/* 			jQuery.style( elem, prop, initialInUnit + unit );*/
/* */
/* 		// Update scale, tolerating zero or NaN from tween.cur()*/
/* 		// Break the loop if scale is unchanged or perfect, or if we've just had enough.*/
/* 		} while (*/
/* 			scale !== ( scale = currentValue() / initial ) && scale !== 1 && --maxIterations*/
/* 		);*/
/* 	}*/
/* */
/* 	if ( valueParts ) {*/
/* 		initialInUnit = +initialInUnit || +initial || 0;*/
/* */
/* 		// Apply relative offset (+=/-=) if specified*/
/* 		adjusted = valueParts[ 1 ] ?*/
/* 			initialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :*/
/* 			+valueParts[ 2 ];*/
/* 		if ( tween ) {*/
/* 			tween.unit = unit;*/
/* 			tween.start = initialInUnit;*/
/* 			tween.end = adjusted;*/
/* 		}*/
/* 	}*/
/* 	return adjusted;*/
/* }*/
/* */
/* */
/* // Multifunctional method to get and set values of a collection*/
/* // The value/s can optionally be executed if it's a function*/
/* var access = function( elems, fn, key, value, chainable, emptyGet, raw ) {*/
/* 	var i = 0,*/
/* 		length = elems.length,*/
/* 		bulk = key == null;*/
/* */
/* 	// Sets many values*/
/* 	if ( jQuery.type( key ) === "object" ) {*/
/* 		chainable = true;*/
/* 		for ( i in key ) {*/
/* 			access( elems, fn, i, key[ i ], true, emptyGet, raw );*/
/* 		}*/
/* */
/* 	// Sets one value*/
/* 	} else if ( value !== undefined ) {*/
/* 		chainable = true;*/
/* */
/* 		if ( !jQuery.isFunction( value ) ) {*/
/* 			raw = true;*/
/* 		}*/
/* */
/* 		if ( bulk ) {*/
/* */
/* 			// Bulk operations run against the entire set*/
/* 			if ( raw ) {*/
/* 				fn.call( elems, value );*/
/* 				fn = null;*/
/* */
/* 			// ...except when executing function values*/
/* 			} else {*/
/* 				bulk = fn;*/
/* 				fn = function( elem, key, value ) {*/
/* 					return bulk.call( jQuery( elem ), value );*/
/* 				};*/
/* 			}*/
/* 		}*/
/* */
/* 		if ( fn ) {*/
/* 			for ( ; i < length; i++ ) {*/
/* 				fn(*/
/* 					elems[ i ],*/
/* 					key,*/
/* 					raw ? value : value.call( elems[ i ], i, fn( elems[ i ], key ) )*/
/* 				);*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	return chainable ?*/
/* 		elems :*/
/* */
/* 		// Gets*/
/* 		bulk ?*/
/* 			fn.call( elems ) :*/
/* 			length ? fn( elems[ 0 ], key ) : emptyGet;*/
/* };*/
/* var rcheckableType = ( /^(?:checkbox|radio)$/i );*/
/* */
/* var rtagName = ( /<([\w:-]+)/ );*/
/* */
/* var rscriptType = ( /^$|\/(?:java|ecma)script/i );*/
/* */
/* var rleadingWhitespace = ( /^\s+/ );*/
/* */
/* var nodeNames = "abbr|article|aside|audio|bdi|canvas|data|datalist|" +*/
/* 		"details|dialog|figcaption|figure|footer|header|hgroup|main|" +*/
/* 		"mark|meter|nav|output|picture|progress|section|summary|template|time|video";*/
/* */
/* */
/* */
/* function createSafeFragment( document ) {*/
/* 	var list = nodeNames.split( "|" ),*/
/* 		safeFrag = document.createDocumentFragment();*/
/* */
/* 	if ( safeFrag.createElement ) {*/
/* 		while ( list.length ) {*/
/* 			safeFrag.createElement(*/
/* 				list.pop()*/
/* 			);*/
/* 		}*/
/* 	}*/
/* 	return safeFrag;*/
/* }*/
/* */
/* */
/* ( function() {*/
/* 	var div = document.createElement( "div" ),*/
/* 		fragment = document.createDocumentFragment(),*/
/* 		input = document.createElement( "input" );*/
/* */
/* 	// Setup*/
/* 	div.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>";*/
/* */
/* 	// IE strips leading whitespace when .innerHTML is used*/
/* 	support.leadingWhitespace = div.firstChild.nodeType === 3;*/
/* */
/* 	// Make sure that tbody elements aren't automatically inserted*/
/* 	// IE will insert them into empty tables*/
/* 	support.tbody = !div.getElementsByTagName( "tbody" ).length;*/
/* */
/* 	// Make sure that link elements get serialized correctly by innerHTML*/
/* 	// This requires a wrapper element in IE*/
/* 	support.htmlSerialize = !!div.getElementsByTagName( "link" ).length;*/
/* */
/* 	// Makes sure cloning an html5 element does not cause problems*/
/* 	// Where outerHTML is undefined, this still works*/
/* 	support.html5Clone =*/
/* 		document.createElement( "nav" ).cloneNode( true ).outerHTML !== "<:nav></:nav>";*/
/* */
/* 	// Check if a disconnected checkbox will retain its checked*/
/* 	// value of true after appended to the DOM (IE6/7)*/
/* 	input.type = "checkbox";*/
/* 	input.checked = true;*/
/* 	fragment.appendChild( input );*/
/* 	support.appendChecked = input.checked;*/
/* */
/* 	// Make sure textarea (and checkbox) defaultValue is properly cloned*/
/* 	// Support: IE6-IE11+*/
/* 	div.innerHTML = "<textarea>x</textarea>";*/
/* 	support.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;*/
/* */
/* 	// #11217 - WebKit loses check when the name is after the checked attribute*/
/* 	fragment.appendChild( div );*/
/* */
/* 	// Support: Windows Web Apps (WWA)*/
/* 	// `name` and `type` must use .setAttribute for WWA (#14901)*/
/* 	input = document.createElement( "input" );*/
/* 	input.setAttribute( "type", "radio" );*/
/* 	input.setAttribute( "checked", "checked" );*/
/* 	input.setAttribute( "name", "t" );*/
/* */
/* 	div.appendChild( input );*/
/* */
/* 	// Support: Safari 5.1, iOS 5.1, Android 4.x, Android 2.3*/
/* 	// old WebKit doesn't clone checked state correctly in fragments*/
/* 	support.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;*/
/* */
/* 	// Support: IE<9*/
/* 	// Cloned elements keep attachEvent handlers, we use addEventListener on IE9+*/
/* 	support.noCloneEvent = !!div.addEventListener;*/
/* */
/* 	// Support: IE<9*/
/* 	// Since attributes and properties are the same in IE,*/
/* 	// cleanData must set properties to undefined rather than use removeAttribute*/
/* 	div[ jQuery.expando ] = 1;*/
/* 	support.attributes = !div.getAttribute( jQuery.expando );*/
/* } )();*/
/* */
/* */
/* // We have to close these tags to support XHTML (#13200)*/
/* var wrapMap = {*/
/* 	option: [ 1, "<select multiple='multiple'>", "</select>" ],*/
/* 	legend: [ 1, "<fieldset>", "</fieldset>" ],*/
/* 	area: [ 1, "<map>", "</map>" ],*/
/* */
/* 	// Support: IE8*/
/* 	param: [ 1, "<object>", "</object>" ],*/
/* 	thead: [ 1, "<table>", "</table>" ],*/
/* 	tr: [ 2, "<table><tbody>", "</tbody></table>" ],*/
/* 	col: [ 2, "<table><tbody></tbody><colgroup>", "</colgroup></table>" ],*/
/* 	td: [ 3, "<table><tbody><tr>", "</tr></tbody></table>" ],*/
/* */
/* 	// IE6-8 can't serialize link, script, style, or any html5 (NoScope) tags,*/
/* 	// unless wrapped in a div with non-breaking characters in front of it.*/
/* 	_default: support.htmlSerialize ? [ 0, "", "" ] : [ 1, "X<div>", "</div>" ]*/
/* };*/
/* */
/* // Support: IE8-IE9*/
/* wrapMap.optgroup = wrapMap.option;*/
/* */
/* wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;*/
/* wrapMap.th = wrapMap.td;*/
/* */
/* */
/* function getAll( context, tag ) {*/
/* 	var elems, elem,*/
/* 		i = 0,*/
/* 		found = typeof context.getElementsByTagName !== "undefined" ?*/
/* 			context.getElementsByTagName( tag || "*" ) :*/
/* 			typeof context.querySelectorAll !== "undefined" ?*/
/* 				context.querySelectorAll( tag || "*" ) :*/
/* 				undefined;*/
/* */
/* 	if ( !found ) {*/
/* 		for ( found = [], elems = context.childNodes || context;*/
/* 			( elem = elems[ i ] ) != null;*/
/* 			i++*/
/* 		) {*/
/* 			if ( !tag || jQuery.nodeName( elem, tag ) ) {*/
/* 				found.push( elem );*/
/* 			} else {*/
/* 				jQuery.merge( found, getAll( elem, tag ) );*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	return tag === undefined || tag && jQuery.nodeName( context, tag ) ?*/
/* 		jQuery.merge( [ context ], found ) :*/
/* 		found;*/
/* }*/
/* */
/* */
/* // Mark scripts as having already been evaluated*/
/* function setGlobalEval( elems, refElements ) {*/
/* 	var elem,*/
/* 		i = 0;*/
/* 	for ( ; ( elem = elems[ i ] ) != null; i++ ) {*/
/* 		jQuery._data(*/
/* 			elem,*/
/* 			"globalEval",*/
/* 			!refElements || jQuery._data( refElements[ i ], "globalEval" )*/
/* 		);*/
/* 	}*/
/* }*/
/* */
/* */
/* var rhtml = /<|&#?\w+;/,*/
/* 	rtbody = /<tbody/i;*/
/* */
/* function fixDefaultChecked( elem ) {*/
/* 	if ( rcheckableType.test( elem.type ) ) {*/
/* 		elem.defaultChecked = elem.checked;*/
/* 	}*/
/* }*/
/* */
/* function buildFragment( elems, context, scripts, selection, ignored ) {*/
/* 	var j, elem, contains,*/
/* 		tmp, tag, tbody, wrap,*/
/* 		l = elems.length,*/
/* */
/* 		// Ensure a safe fragment*/
/* 		safe = createSafeFragment( context ),*/
/* */
/* 		nodes = [],*/
/* 		i = 0;*/
/* */
/* 	for ( ; i < l; i++ ) {*/
/* 		elem = elems[ i ];*/
/* */
/* 		if ( elem || elem === 0 ) {*/
/* */
/* 			// Add nodes directly*/
/* 			if ( jQuery.type( elem ) === "object" ) {*/
/* 				jQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );*/
/* */
/* 			// Convert non-html into a text node*/
/* 			} else if ( !rhtml.test( elem ) ) {*/
/* 				nodes.push( context.createTextNode( elem ) );*/
/* */
/* 			// Convert html into DOM nodes*/
/* 			} else {*/
/* 				tmp = tmp || safe.appendChild( context.createElement( "div" ) );*/
/* */
/* 				// Deserialize a standard representation*/
/* 				tag = ( rtagName.exec( elem ) || [ "", "" ] )[ 1 ].toLowerCase();*/
/* 				wrap = wrapMap[ tag ] || wrapMap._default;*/
/* */
/* 				tmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];*/
/* */
/* 				// Descend through wrappers to the right content*/
/* 				j = wrap[ 0 ];*/
/* 				while ( j-- ) {*/
/* 					tmp = tmp.lastChild;*/
/* 				}*/
/* */
/* 				// Manually add leading whitespace removed by IE*/
/* 				if ( !support.leadingWhitespace && rleadingWhitespace.test( elem ) ) {*/
/* 					nodes.push( context.createTextNode( rleadingWhitespace.exec( elem )[ 0 ] ) );*/
/* 				}*/
/* */
/* 				// Remove IE's autoinserted <tbody> from table fragments*/
/* 				if ( !support.tbody ) {*/
/* */
/* 					// String was a <table>, *may* have spurious <tbody>*/
/* 					elem = tag === "table" && !rtbody.test( elem ) ?*/
/* 						tmp.firstChild :*/
/* */
/* 						// String was a bare <thead> or <tfoot>*/
/* 						wrap[ 1 ] === "<table>" && !rtbody.test( elem ) ?*/
/* 							tmp :*/
/* 							0;*/
/* */
/* 					j = elem && elem.childNodes.length;*/
/* 					while ( j-- ) {*/
/* 						if ( jQuery.nodeName( ( tbody = elem.childNodes[ j ] ), "tbody" ) &&*/
/* 							!tbody.childNodes.length ) {*/
/* */
/* 							elem.removeChild( tbody );*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				jQuery.merge( nodes, tmp.childNodes );*/
/* */
/* 				// Fix #12392 for WebKit and IE > 9*/
/* 				tmp.textContent = "";*/
/* */
/* 				// Fix #12392 for oldIE*/
/* 				while ( tmp.firstChild ) {*/
/* 					tmp.removeChild( tmp.firstChild );*/
/* 				}*/
/* */
/* 				// Remember the top-level container for proper cleanup*/
/* 				tmp = safe.lastChild;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// Fix #11356: Clear elements from fragment*/
/* 	if ( tmp ) {*/
/* 		safe.removeChild( tmp );*/
/* 	}*/
/* */
/* 	// Reset defaultChecked for any radios and checkboxes*/
/* 	// about to be appended to the DOM in IE 6/7 (#8060)*/
/* 	if ( !support.appendChecked ) {*/
/* 		jQuery.grep( getAll( nodes, "input" ), fixDefaultChecked );*/
/* 	}*/
/* */
/* 	i = 0;*/
/* 	while ( ( elem = nodes[ i++ ] ) ) {*/
/* */
/* 		// Skip elements already in the context collection (trac-4087)*/
/* 		if ( selection && jQuery.inArray( elem, selection ) > -1 ) {*/
/* 			if ( ignored ) {*/
/* 				ignored.push( elem );*/
/* 			}*/
/* */
/* 			continue;*/
/* 		}*/
/* */
/* 		contains = jQuery.contains( elem.ownerDocument, elem );*/
/* */
/* 		// Append to fragment*/
/* 		tmp = getAll( safe.appendChild( elem ), "script" );*/
/* */
/* 		// Preserve script evaluation history*/
/* 		if ( contains ) {*/
/* 			setGlobalEval( tmp );*/
/* 		}*/
/* */
/* 		// Capture executables*/
/* 		if ( scripts ) {*/
/* 			j = 0;*/
/* 			while ( ( elem = tmp[ j++ ] ) ) {*/
/* 				if ( rscriptType.test( elem.type || "" ) ) {*/
/* 					scripts.push( elem );*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	tmp = null;*/
/* */
/* 	return safe;*/
/* }*/
/* */
/* */
/* ( function() {*/
/* 	var i, eventName,*/
/* 		div = document.createElement( "div" );*/
/* */
/* 	// Support: IE<9 (lack submit/change bubble), Firefox (lack focus(in | out) events)*/
/* 	for ( i in { submit: true, change: true, focusin: true } ) {*/
/* 		eventName = "on" + i;*/
/* */
/* 		if ( !( support[ i ] = eventName in window ) ) {*/
/* */
/* 			// Beware of CSP restrictions (https://developer.mozilla.org/en/Security/CSP)*/
/* 			div.setAttribute( eventName, "t" );*/
/* 			support[ i ] = div.attributes[ eventName ].expando === false;*/
/* 		}*/
/* 	}*/
/* */
/* 	// Null elements to avoid leaks in IE.*/
/* 	div = null;*/
/* } )();*/
/* */
/* */
/* var rformElems = /^(?:input|select|textarea)$/i,*/
/* 	rkeyEvent = /^key/,*/
/* 	rmouseEvent = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,*/
/* 	rfocusMorph = /^(?:focusinfocus|focusoutblur)$/,*/
/* 	rtypenamespace = /^([^.]*)(?:\.(.+)|)/;*/
/* */
/* function returnTrue() {*/
/* 	return true;*/
/* }*/
/* */
/* function returnFalse() {*/
/* 	return false;*/
/* }*/
/* */
/* // Support: IE9*/
/* // See #13393 for more info*/
/* function safeActiveElement() {*/
/* 	try {*/
/* 		return document.activeElement;*/
/* 	} catch ( err ) { }*/
/* }*/
/* */
/* function on( elem, types, selector, data, fn, one ) {*/
/* 	var origFn, type;*/
/* */
/* 	// Types can be a map of types/handlers*/
/* 	if ( typeof types === "object" ) {*/
/* */
/* 		// ( types-Object, selector, data )*/
/* 		if ( typeof selector !== "string" ) {*/
/* */
/* 			// ( types-Object, data )*/
/* 			data = data || selector;*/
/* 			selector = undefined;*/
/* 		}*/
/* 		for ( type in types ) {*/
/* 			on( elem, type, selector, data, types[ type ], one );*/
/* 		}*/
/* 		return elem;*/
/* 	}*/
/* */
/* 	if ( data == null && fn == null ) {*/
/* */
/* 		// ( types, fn )*/
/* 		fn = selector;*/
/* 		data = selector = undefined;*/
/* 	} else if ( fn == null ) {*/
/* 		if ( typeof selector === "string" ) {*/
/* */
/* 			// ( types, selector, fn )*/
/* 			fn = data;*/
/* 			data = undefined;*/
/* 		} else {*/
/* */
/* 			// ( types, data, fn )*/
/* 			fn = data;*/
/* 			data = selector;*/
/* 			selector = undefined;*/
/* 		}*/
/* 	}*/
/* 	if ( fn === false ) {*/
/* 		fn = returnFalse;*/
/* 	} else if ( !fn ) {*/
/* 		return elem;*/
/* 	}*/
/* */
/* 	if ( one === 1 ) {*/
/* 		origFn = fn;*/
/* 		fn = function( event ) {*/
/* */
/* 			// Can use an empty set, since event contains the info*/
/* 			jQuery().off( event );*/
/* 			return origFn.apply( this, arguments );*/
/* 		};*/
/* */
/* 		// Use same guid so caller can remove using origFn*/
/* 		fn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );*/
/* 	}*/
/* 	return elem.each( function() {*/
/* 		jQuery.event.add( this, types, fn, data, selector );*/
/* 	} );*/
/* }*/
/* */
/* /**/
/*  * Helper functions for managing events -- not part of the public interface.*/
/*  * Props to Dean Edwards' addEvent library for many of the ideas.*/
/*  *//* */
/* jQuery.event = {*/
/* */
/* 	global: {},*/
/* */
/* 	add: function( elem, types, handler, data, selector ) {*/
/* 		var tmp, events, t, handleObjIn,*/
/* 			special, eventHandle, handleObj,*/
/* 			handlers, type, namespaces, origType,*/
/* 			elemData = jQuery._data( elem );*/
/* */
/* 		// Don't attach events to noData or text/comment nodes (but allow plain objects)*/
/* 		if ( !elemData ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Caller can pass in an object of custom data in lieu of the handler*/
/* 		if ( handler.handler ) {*/
/* 			handleObjIn = handler;*/
/* 			handler = handleObjIn.handler;*/
/* 			selector = handleObjIn.selector;*/
/* 		}*/
/* */
/* 		// Make sure that the handler has a unique ID, used to find/remove it later*/
/* 		if ( !handler.guid ) {*/
/* 			handler.guid = jQuery.guid++;*/
/* 		}*/
/* */
/* 		// Init the element's event structure and main handler, if this is the first*/
/* 		if ( !( events = elemData.events ) ) {*/
/* 			events = elemData.events = {};*/
/* 		}*/
/* 		if ( !( eventHandle = elemData.handle ) ) {*/
/* 			eventHandle = elemData.handle = function( e ) {*/
/* */
/* 				// Discard the second event of a jQuery.event.trigger() and*/
/* 				// when an event is called after a page has unloaded*/
/* 				return typeof jQuery !== "undefined" &&*/
/* 					( !e || jQuery.event.triggered !== e.type ) ?*/
/* 					jQuery.event.dispatch.apply( eventHandle.elem, arguments ) :*/
/* 					undefined;*/
/* 			};*/
/* */
/* 			// Add elem as a property of the handle fn to prevent a memory leak*/
/* 			// with IE non-native events*/
/* 			eventHandle.elem = elem;*/
/* 		}*/
/* */
/* 		// Handle multiple events separated by a space*/
/* 		types = ( types || "" ).match( rnotwhite ) || [ "" ];*/
/* 		t = types.length;*/
/* 		while ( t-- ) {*/
/* 			tmp = rtypenamespace.exec( types[ t ] ) || [];*/
/* 			type = origType = tmp[ 1 ];*/
/* 			namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();*/
/* */
/* 			// There *must* be a type, no attaching namespace-only handlers*/
/* 			if ( !type ) {*/
/* 				continue;*/
/* 			}*/
/* */
/* 			// If event changes its type, use the special event handlers for the changed type*/
/* 			special = jQuery.event.special[ type ] || {};*/
/* */
/* 			// If selector defined, determine special event api type, otherwise given type*/
/* 			type = ( selector ? special.delegateType : special.bindType ) || type;*/
/* */
/* 			// Update special based on newly reset type*/
/* 			special = jQuery.event.special[ type ] || {};*/
/* */
/* 			// handleObj is passed to all event handlers*/
/* 			handleObj = jQuery.extend( {*/
/* 				type: type,*/
/* 				origType: origType,*/
/* 				data: data,*/
/* 				handler: handler,*/
/* 				guid: handler.guid,*/
/* 				selector: selector,*/
/* 				needsContext: selector && jQuery.expr.match.needsContext.test( selector ),*/
/* 				namespace: namespaces.join( "." )*/
/* 			}, handleObjIn );*/
/* */
/* 			// Init the event handler queue if we're the first*/
/* 			if ( !( handlers = events[ type ] ) ) {*/
/* 				handlers = events[ type ] = [];*/
/* 				handlers.delegateCount = 0;*/
/* */
/* 				// Only use addEventListener/attachEvent if the special events handler returns false*/
/* 				if ( !special.setup ||*/
/* 					special.setup.call( elem, data, namespaces, eventHandle ) === false ) {*/
/* */
/* 					// Bind the global event handler to the element*/
/* 					if ( elem.addEventListener ) {*/
/* 						elem.addEventListener( type, eventHandle, false );*/
/* */
/* 					} else if ( elem.attachEvent ) {*/
/* 						elem.attachEvent( "on" + type, eventHandle );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			if ( special.add ) {*/
/* 				special.add.call( elem, handleObj );*/
/* */
/* 				if ( !handleObj.handler.guid ) {*/
/* 					handleObj.handler.guid = handler.guid;*/
/* 				}*/
/* 			}*/
/* */
/* 			// Add to the element's handler list, delegates in front*/
/* 			if ( selector ) {*/
/* 				handlers.splice( handlers.delegateCount++, 0, handleObj );*/
/* 			} else {*/
/* 				handlers.push( handleObj );*/
/* 			}*/
/* */
/* 			// Keep track of which events have ever been used, for event optimization*/
/* 			jQuery.event.global[ type ] = true;*/
/* 		}*/
/* */
/* 		// Nullify elem to prevent memory leaks in IE*/
/* 		elem = null;*/
/* 	},*/
/* */
/* 	// Detach an event or set of events from an element*/
/* 	remove: function( elem, types, handler, selector, mappedTypes ) {*/
/* 		var j, handleObj, tmp,*/
/* 			origCount, t, events,*/
/* 			special, handlers, type,*/
/* 			namespaces, origType,*/
/* 			elemData = jQuery.hasData( elem ) && jQuery._data( elem );*/
/* */
/* 		if ( !elemData || !( events = elemData.events ) ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Once for each type.namespace in types; type may be omitted*/
/* 		types = ( types || "" ).match( rnotwhite ) || [ "" ];*/
/* 		t = types.length;*/
/* 		while ( t-- ) {*/
/* 			tmp = rtypenamespace.exec( types[ t ] ) || [];*/
/* 			type = origType = tmp[ 1 ];*/
/* 			namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();*/
/* */
/* 			// Unbind all events (on this namespace, if provided) for the element*/
/* 			if ( !type ) {*/
/* 				for ( type in events ) {*/
/* 					jQuery.event.remove( elem, type + types[ t ], handler, selector, true );*/
/* 				}*/
/* 				continue;*/
/* 			}*/
/* */
/* 			special = jQuery.event.special[ type ] || {};*/
/* 			type = ( selector ? special.delegateType : special.bindType ) || type;*/
/* 			handlers = events[ type ] || [];*/
/* 			tmp = tmp[ 2 ] &&*/
/* 				new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" );*/
/* */
/* 			// Remove matching events*/
/* 			origCount = j = handlers.length;*/
/* 			while ( j-- ) {*/
/* 				handleObj = handlers[ j ];*/
/* */
/* 				if ( ( mappedTypes || origType === handleObj.origType ) &&*/
/* 					( !handler || handler.guid === handleObj.guid ) &&*/
/* 					( !tmp || tmp.test( handleObj.namespace ) ) &&*/
/* 					( !selector || selector === handleObj.selector ||*/
/* 						selector === "**" && handleObj.selector ) ) {*/
/* 					handlers.splice( j, 1 );*/
/* */
/* 					if ( handleObj.selector ) {*/
/* 						handlers.delegateCount--;*/
/* 					}*/
/* 					if ( special.remove ) {*/
/* 						special.remove.call( elem, handleObj );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			// Remove generic event handler if we removed something and no more handlers exist*/
/* 			// (avoids potential for endless recursion during removal of special event handlers)*/
/* 			if ( origCount && !handlers.length ) {*/
/* 				if ( !special.teardown ||*/
/* 					special.teardown.call( elem, namespaces, elemData.handle ) === false ) {*/
/* */
/* 					jQuery.removeEvent( elem, type, elemData.handle );*/
/* 				}*/
/* */
/* 				delete events[ type ];*/
/* 			}*/
/* 		}*/
/* */
/* 		// Remove the expando if it's no longer used*/
/* 		if ( jQuery.isEmptyObject( events ) ) {*/
/* 			delete elemData.handle;*/
/* */
/* 			// removeData also checks for emptiness and clears the expando if empty*/
/* 			// so use it instead of delete*/
/* 			jQuery._removeData( elem, "events" );*/
/* 		}*/
/* 	},*/
/* */
/* 	trigger: function( event, data, elem, onlyHandlers ) {*/
/* 		var handle, ontype, cur,*/
/* 			bubbleType, special, tmp, i,*/
/* 			eventPath = [ elem || document ],*/
/* 			type = hasOwn.call( event, "type" ) ? event.type : event,*/
/* 			namespaces = hasOwn.call( event, "namespace" ) ? event.namespace.split( "." ) : [];*/
/* */
/* 		cur = tmp = elem = elem || document;*/
/* */
/* 		// Don't do events on text and comment nodes*/
/* 		if ( elem.nodeType === 3 || elem.nodeType === 8 ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// focus/blur morphs to focusin/out; ensure we're not firing them right now*/
/* 		if ( rfocusMorph.test( type + jQuery.event.triggered ) ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		if ( type.indexOf( "." ) > -1 ) {*/
/* */
/* 			// Namespaced trigger; create a regexp to match event type in handle()*/
/* 			namespaces = type.split( "." );*/
/* 			type = namespaces.shift();*/
/* 			namespaces.sort();*/
/* 		}*/
/* 		ontype = type.indexOf( ":" ) < 0 && "on" + type;*/
/* */
/* 		// Caller can pass in a jQuery.Event object, Object, or just an event type string*/
/* 		event = event[ jQuery.expando ] ?*/
/* 			event :*/
/* 			new jQuery.Event( type, typeof event === "object" && event );*/
/* */
/* 		// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)*/
/* 		event.isTrigger = onlyHandlers ? 2 : 3;*/
/* 		event.namespace = namespaces.join( "." );*/
/* 		event.rnamespace = event.namespace ?*/
/* 			new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" ) :*/
/* 			null;*/
/* */
/* 		// Clean up the event in case it is being reused*/
/* 		event.result = undefined;*/
/* 		if ( !event.target ) {*/
/* 			event.target = elem;*/
/* 		}*/
/* */
/* 		// Clone any incoming data and prepend the event, creating the handler arg list*/
/* 		data = data == null ?*/
/* 			[ event ] :*/
/* 			jQuery.makeArray( data, [ event ] );*/
/* */
/* 		// Allow special events to draw outside the lines*/
/* 		special = jQuery.event.special[ type ] || {};*/
/* 		if ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Determine event propagation path in advance, per W3C events spec (#9951)*/
/* 		// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)*/
/* 		if ( !onlyHandlers && !special.noBubble && !jQuery.isWindow( elem ) ) {*/
/* */
/* 			bubbleType = special.delegateType || type;*/
/* 			if ( !rfocusMorph.test( bubbleType + type ) ) {*/
/* 				cur = cur.parentNode;*/
/* 			}*/
/* 			for ( ; cur; cur = cur.parentNode ) {*/
/* 				eventPath.push( cur );*/
/* 				tmp = cur;*/
/* 			}*/
/* */
/* 			// Only add window if we got to document (e.g., not plain obj or detached DOM)*/
/* 			if ( tmp === ( elem.ownerDocument || document ) ) {*/
/* 				eventPath.push( tmp.defaultView || tmp.parentWindow || window );*/
/* 			}*/
/* 		}*/
/* */
/* 		// Fire handlers on the event path*/
/* 		i = 0;*/
/* 		while ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {*/
/* */
/* 			event.type = i > 1 ?*/
/* 				bubbleType :*/
/* 				special.bindType || type;*/
/* */
/* 			// jQuery handler*/
/* 			handle = ( jQuery._data( cur, "events" ) || {} )[ event.type ] &&*/
/* 				jQuery._data( cur, "handle" );*/
/* */
/* 			if ( handle ) {*/
/* 				handle.apply( cur, data );*/
/* 			}*/
/* */
/* 			// Native handler*/
/* 			handle = ontype && cur[ ontype ];*/
/* 			if ( handle && handle.apply && acceptData( cur ) ) {*/
/* 				event.result = handle.apply( cur, data );*/
/* 				if ( event.result === false ) {*/
/* 					event.preventDefault();*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 		event.type = type;*/
/* */
/* 		// If nobody prevented the default action, do it now*/
/* 		if ( !onlyHandlers && !event.isDefaultPrevented() ) {*/
/* */
/* 			if (*/
/* 				( !special._default ||*/
/* 				 special._default.apply( eventPath.pop(), data ) === false*/
/* 				) && acceptData( elem )*/
/* 			) {*/
/* */
/* 				// Call a native DOM method on the target with the same name name as the event.*/
/* 				// Can't use an .isFunction() check here because IE6/7 fails that test.*/
/* 				// Don't do default actions on window, that's where global variables be (#6170)*/
/* 				if ( ontype && elem[ type ] && !jQuery.isWindow( elem ) ) {*/
/* */
/* 					// Don't re-trigger an onFOO event when we call its FOO() method*/
/* 					tmp = elem[ ontype ];*/
/* */
/* 					if ( tmp ) {*/
/* 						elem[ ontype ] = null;*/
/* 					}*/
/* */
/* 					// Prevent re-triggering of the same event, since we already bubbled it above*/
/* 					jQuery.event.triggered = type;*/
/* 					try {*/
/* 						elem[ type ]();*/
/* 					} catch ( e ) {*/
/* */
/* 						// IE<9 dies on focus/blur to hidden element (#1486,#12518)*/
/* 						// only reproducible on winXP IE8 native, not IE9 in IE8 mode*/
/* 					}*/
/* 					jQuery.event.triggered = undefined;*/
/* */
/* 					if ( tmp ) {*/
/* 						elem[ ontype ] = tmp;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return event.result;*/
/* 	},*/
/* */
/* 	dispatch: function( event ) {*/
/* */
/* 		// Make a writable jQuery.Event from the native event object*/
/* 		event = jQuery.event.fix( event );*/
/* */
/* 		var i, j, ret, matched, handleObj,*/
/* 			handlerQueue = [],*/
/* 			args = slice.call( arguments ),*/
/* 			handlers = ( jQuery._data( this, "events" ) || {} )[ event.type ] || [],*/
/* 			special = jQuery.event.special[ event.type ] || {};*/
/* */
/* 		// Use the fix-ed jQuery.Event rather than the (read-only) native event*/
/* 		args[ 0 ] = event;*/
/* 		event.delegateTarget = this;*/
/* */
/* 		// Call the preDispatch hook for the mapped type, and let it bail if desired*/
/* 		if ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Determine handlers*/
/* 		handlerQueue = jQuery.event.handlers.call( this, event, handlers );*/
/* */
/* 		// Run delegates first; they may want to stop propagation beneath us*/
/* 		i = 0;*/
/* 		while ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {*/
/* 			event.currentTarget = matched.elem;*/
/* */
/* 			j = 0;*/
/* 			while ( ( handleObj = matched.handlers[ j++ ] ) &&*/
/* 				!event.isImmediatePropagationStopped() ) {*/
/* */
/* 				// Triggered event must either 1) have no namespace, or 2) have namespace(s)*/
/* 				// a subset or equal to those in the bound event (both can have no namespace).*/
/* 				if ( !event.rnamespace || event.rnamespace.test( handleObj.namespace ) ) {*/
/* */
/* 					event.handleObj = handleObj;*/
/* 					event.data = handleObj.data;*/
/* */
/* 					ret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||*/
/* 						handleObj.handler ).apply( matched.elem, args );*/
/* */
/* 					if ( ret !== undefined ) {*/
/* 						if ( ( event.result = ret ) === false ) {*/
/* 							event.preventDefault();*/
/* 							event.stopPropagation();*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		// Call the postDispatch hook for the mapped type*/
/* 		if ( special.postDispatch ) {*/
/* 			special.postDispatch.call( this, event );*/
/* 		}*/
/* */
/* 		return event.result;*/
/* 	},*/
/* */
/* 	handlers: function( event, handlers ) {*/
/* 		var i, matches, sel, handleObj,*/
/* 			handlerQueue = [],*/
/* 			delegateCount = handlers.delegateCount,*/
/* 			cur = event.target;*/
/* */
/* 		// Support (at least): Chrome, IE9*/
/* 		// Find delegate handlers*/
/* 		// Black-hole SVG <use> instance trees (#13180)*/
/* 		//*/
/* 		// Support: Firefox<=42+*/
/* 		// Avoid non-left-click in FF but don't block IE radio events (#3861, gh-2343)*/
/* 		if ( delegateCount && cur.nodeType &&*/
/* 			( event.type !== "click" || isNaN( event.button ) || event.button < 1 ) ) {*/
/* */
/* 			/* jshint eqeqeq: false *//* */
/* 			for ( ; cur != this; cur = cur.parentNode || this ) {*/
/* 				/* jshint eqeqeq: true *//* */
/* */
/* 				// Don't check non-elements (#13208)*/
/* 				// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)*/
/* 				if ( cur.nodeType === 1 && ( cur.disabled !== true || event.type !== "click" ) ) {*/
/* 					matches = [];*/
/* 					for ( i = 0; i < delegateCount; i++ ) {*/
/* 						handleObj = handlers[ i ];*/
/* */
/* 						// Don't conflict with Object.prototype properties (#13203)*/
/* 						sel = handleObj.selector + " ";*/
/* */
/* 						if ( matches[ sel ] === undefined ) {*/
/* 							matches[ sel ] = handleObj.needsContext ?*/
/* 								jQuery( sel, this ).index( cur ) > -1 :*/
/* 								jQuery.find( sel, this, null, [ cur ] ).length;*/
/* 						}*/
/* 						if ( matches[ sel ] ) {*/
/* 							matches.push( handleObj );*/
/* 						}*/
/* 					}*/
/* 					if ( matches.length ) {*/
/* 						handlerQueue.push( { elem: cur, handlers: matches } );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		// Add the remaining (directly-bound) handlers*/
/* 		if ( delegateCount < handlers.length ) {*/
/* 			handlerQueue.push( { elem: this, handlers: handlers.slice( delegateCount ) } );*/
/* 		}*/
/* */
/* 		return handlerQueue;*/
/* 	},*/
/* */
/* 	fix: function( event ) {*/
/* 		if ( event[ jQuery.expando ] ) {*/
/* 			return event;*/
/* 		}*/
/* */
/* 		// Create a writable copy of the event object and normalize some properties*/
/* 		var i, prop, copy,*/
/* 			type = event.type,*/
/* 			originalEvent = event,*/
/* 			fixHook = this.fixHooks[ type ];*/
/* */
/* 		if ( !fixHook ) {*/
/* 			this.fixHooks[ type ] = fixHook =*/
/* 				rmouseEvent.test( type ) ? this.mouseHooks :*/
/* 				rkeyEvent.test( type ) ? this.keyHooks :*/
/* 				{};*/
/* 		}*/
/* 		copy = fixHook.props ? this.props.concat( fixHook.props ) : this.props;*/
/* */
/* 		event = new jQuery.Event( originalEvent );*/
/* */
/* 		i = copy.length;*/
/* 		while ( i-- ) {*/
/* 			prop = copy[ i ];*/
/* 			event[ prop ] = originalEvent[ prop ];*/
/* 		}*/
/* */
/* 		// Support: IE<9*/
/* 		// Fix target property (#1925)*/
/* 		if ( !event.target ) {*/
/* 			event.target = originalEvent.srcElement || document;*/
/* 		}*/
/* */
/* 		// Support: Safari 6-8+*/
/* 		// Target should not be a text node (#504, #13143)*/
/* 		if ( event.target.nodeType === 3 ) {*/
/* 			event.target = event.target.parentNode;*/
/* 		}*/
/* */
/* 		// Support: IE<9*/
/* 		// For mouse/key events, metaKey==false if it's undefined (#3368, #11328)*/
/* 		event.metaKey = !!event.metaKey;*/
/* */
/* 		return fixHook.filter ? fixHook.filter( event, originalEvent ) : event;*/
/* 	},*/
/* */
/* 	// Includes some event props shared by KeyEvent and MouseEvent*/
/* 	props: ( "altKey bubbles cancelable ctrlKey currentTarget detail eventPhase " +*/
/* 		"metaKey relatedTarget shiftKey target timeStamp view which" ).split( " " ),*/
/* */
/* 	fixHooks: {},*/
/* */
/* 	keyHooks: {*/
/* 		props: "char charCode key keyCode".split( " " ),*/
/* 		filter: function( event, original ) {*/
/* */
/* 			// Add which for key events*/
/* 			if ( event.which == null ) {*/
/* 				event.which = original.charCode != null ? original.charCode : original.keyCode;*/
/* 			}*/
/* */
/* 			return event;*/
/* 		}*/
/* 	},*/
/* */
/* 	mouseHooks: {*/
/* 		props: ( "button buttons clientX clientY fromElement offsetX offsetY " +*/
/* 			"pageX pageY screenX screenY toElement" ).split( " " ),*/
/* 		filter: function( event, original ) {*/
/* 			var body, eventDoc, doc,*/
/* 				button = original.button,*/
/* 				fromElement = original.fromElement;*/
/* */
/* 			// Calculate pageX/Y if missing and clientX/Y available*/
/* 			if ( event.pageX == null && original.clientX != null ) {*/
/* 				eventDoc = event.target.ownerDocument || document;*/
/* 				doc = eventDoc.documentElement;*/
/* 				body = eventDoc.body;*/
/* */
/* 				event.pageX = original.clientX +*/
/* 					( doc && doc.scrollLeft || body && body.scrollLeft || 0 ) -*/
/* 					( doc && doc.clientLeft || body && body.clientLeft || 0 );*/
/* 				event.pageY = original.clientY +*/
/* 					( doc && doc.scrollTop  || body && body.scrollTop  || 0 ) -*/
/* 					( doc && doc.clientTop  || body && body.clientTop  || 0 );*/
/* 			}*/
/* */
/* 			// Add relatedTarget, if necessary*/
/* 			if ( !event.relatedTarget && fromElement ) {*/
/* 				event.relatedTarget = fromElement === event.target ?*/
/* 					original.toElement :*/
/* 					fromElement;*/
/* 			}*/
/* */
/* 			// Add which for click: 1 === left; 2 === middle; 3 === right*/
/* 			// Note: button is not normalized, so don't use it*/
/* 			if ( !event.which && button !== undefined ) {*/
/* 				event.which = ( button & 1 ? 1 : ( button & 2 ? 3 : ( button & 4 ? 2 : 0 ) ) );*/
/* 			}*/
/* */
/* 			return event;*/
/* 		}*/
/* 	},*/
/* */
/* 	special: {*/
/* 		load: {*/
/* */
/* 			// Prevent triggered image.load events from bubbling to window.load*/
/* 			noBubble: true*/
/* 		},*/
/* 		focus: {*/
/* */
/* 			// Fire native event if possible so blur/focus sequence is correct*/
/* 			trigger: function() {*/
/* 				if ( this !== safeActiveElement() && this.focus ) {*/
/* 					try {*/
/* 						this.focus();*/
/* 						return false;*/
/* 					} catch ( e ) {*/
/* */
/* 						// Support: IE<9*/
/* 						// If we error on focus to hidden element (#1486, #12518),*/
/* 						// let .trigger() run the handlers*/
/* 					}*/
/* 				}*/
/* 			},*/
/* 			delegateType: "focusin"*/
/* 		},*/
/* 		blur: {*/
/* 			trigger: function() {*/
/* 				if ( this === safeActiveElement() && this.blur ) {*/
/* 					this.blur();*/
/* 					return false;*/
/* 				}*/
/* 			},*/
/* 			delegateType: "focusout"*/
/* 		},*/
/* 		click: {*/
/* */
/* 			// For checkbox, fire native event so checked state will be right*/
/* 			trigger: function() {*/
/* 				if ( jQuery.nodeName( this, "input" ) && this.type === "checkbox" && this.click ) {*/
/* 					this.click();*/
/* 					return false;*/
/* 				}*/
/* 			},*/
/* */
/* 			// For cross-browser consistency, don't fire native .click() on links*/
/* 			_default: function( event ) {*/
/* 				return jQuery.nodeName( event.target, "a" );*/
/* 			}*/
/* 		},*/
/* */
/* 		beforeunload: {*/
/* 			postDispatch: function( event ) {*/
/* */
/* 				// Support: Firefox 20+*/
/* 				// Firefox doesn't alert if the returnValue field is not set.*/
/* 				if ( event.result !== undefined && event.originalEvent ) {*/
/* 					event.originalEvent.returnValue = event.result;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	},*/
/* */
/* 	// Piggyback on a donor event to simulate a different one*/
/* 	simulate: function( type, elem, event ) {*/
/* 		var e = jQuery.extend(*/
/* 			new jQuery.Event(),*/
/* 			event,*/
/* 			{*/
/* 				type: type,*/
/* 				isSimulated: true*/
/* */
/* 				// Previously, `originalEvent: {}` was set here, so stopPropagation call*/
/* 				// would not be triggered on donor event, since in our own*/
/* 				// jQuery.event.stopPropagation function we had a check for existence of*/
/* 				// originalEvent.stopPropagation method, so, consequently it would be a noop.*/
/* 				//*/
/* 				// Guard for simulated events was moved to jQuery.event.stopPropagation function*/
/* 				// since `originalEvent` should point to the original event for the*/
/* 				// constancy with other events and for more focused logic*/
/* 			}*/
/* 		);*/
/* */
/* 		jQuery.event.trigger( e, null, elem );*/
/* */
/* 		if ( e.isDefaultPrevented() ) {*/
/* 			event.preventDefault();*/
/* 		}*/
/* 	}*/
/* };*/
/* */
/* jQuery.removeEvent = document.removeEventListener ?*/
/* 	function( elem, type, handle ) {*/
/* */
/* 		// This "if" is needed for plain objects*/
/* 		if ( elem.removeEventListener ) {*/
/* 			elem.removeEventListener( type, handle );*/
/* 		}*/
/* 	} :*/
/* 	function( elem, type, handle ) {*/
/* 		var name = "on" + type;*/
/* */
/* 		if ( elem.detachEvent ) {*/
/* */
/* 			// #8545, #7054, preventing memory leaks for custom events in IE6-8*/
/* 			// detachEvent needed property on element, by name of that event,*/
/* 			// to properly expose it to GC*/
/* 			if ( typeof elem[ name ] === "undefined" ) {*/
/* 				elem[ name ] = null;*/
/* 			}*/
/* */
/* 			elem.detachEvent( name, handle );*/
/* 		}*/
/* 	};*/
/* */
/* jQuery.Event = function( src, props ) {*/
/* */
/* 	// Allow instantiation without the 'new' keyword*/
/* 	if ( !( this instanceof jQuery.Event ) ) {*/
/* 		return new jQuery.Event( src, props );*/
/* 	}*/
/* */
/* 	// Event object*/
/* 	if ( src && src.type ) {*/
/* 		this.originalEvent = src;*/
/* 		this.type = src.type;*/
/* */
/* 		// Events bubbling up the document may have been marked as prevented*/
/* 		// by a handler lower down the tree; reflect the correct value.*/
/* 		this.isDefaultPrevented = src.defaultPrevented ||*/
/* 				src.defaultPrevented === undefined &&*/
/* */
/* 				// Support: IE < 9, Android < 4.0*/
/* 				src.returnValue === false ?*/
/* 			returnTrue :*/
/* 			returnFalse;*/
/* */
/* 	// Event type*/
/* 	} else {*/
/* 		this.type = src;*/
/* 	}*/
/* */
/* 	// Put explicitly provided properties onto the event object*/
/* 	if ( props ) {*/
/* 		jQuery.extend( this, props );*/
/* 	}*/
/* */
/* 	// Create a timestamp if incoming event doesn't have one*/
/* 	this.timeStamp = src && src.timeStamp || jQuery.now();*/
/* */
/* 	// Mark it as fixed*/
/* 	this[ jQuery.expando ] = true;*/
/* };*/
/* */
/* // jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding*/
/* // http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html*/
/* jQuery.Event.prototype = {*/
/* 	constructor: jQuery.Event,*/
/* 	isDefaultPrevented: returnFalse,*/
/* 	isPropagationStopped: returnFalse,*/
/* 	isImmediatePropagationStopped: returnFalse,*/
/* */
/* 	preventDefault: function() {*/
/* 		var e = this.originalEvent;*/
/* */
/* 		this.isDefaultPrevented = returnTrue;*/
/* 		if ( !e ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// If preventDefault exists, run it on the original event*/
/* 		if ( e.preventDefault ) {*/
/* 			e.preventDefault();*/
/* */
/* 		// Support: IE*/
/* 		// Otherwise set the returnValue property of the original event to false*/
/* 		} else {*/
/* 			e.returnValue = false;*/
/* 		}*/
/* 	},*/
/* 	stopPropagation: function() {*/
/* 		var e = this.originalEvent;*/
/* */
/* 		this.isPropagationStopped = returnTrue;*/
/* */
/* 		if ( !e || this.isSimulated ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// If stopPropagation exists, run it on the original event*/
/* 		if ( e.stopPropagation ) {*/
/* 			e.stopPropagation();*/
/* 		}*/
/* */
/* 		// Support: IE*/
/* 		// Set the cancelBubble property of the original event to true*/
/* 		e.cancelBubble = true;*/
/* 	},*/
/* 	stopImmediatePropagation: function() {*/
/* 		var e = this.originalEvent;*/
/* */
/* 		this.isImmediatePropagationStopped = returnTrue;*/
/* */
/* 		if ( e && e.stopImmediatePropagation ) {*/
/* 			e.stopImmediatePropagation();*/
/* 		}*/
/* */
/* 		this.stopPropagation();*/
/* 	}*/
/* };*/
/* */
/* // Create mouseenter/leave events using mouseover/out and event-time checks*/
/* // so that event delegation works in jQuery.*/
/* // Do the same for pointerenter/pointerleave and pointerover/pointerout*/
/* //*/
/* // Support: Safari 7 only*/
/* // Safari sends mouseenter too often; see:*/
/* // https://code.google.com/p/chromium/issues/detail?id=470258*/
/* // for the description of the bug (it existed in older Chrome versions as well).*/
/* jQuery.each( {*/
/* 	mouseenter: "mouseover",*/
/* 	mouseleave: "mouseout",*/
/* 	pointerenter: "pointerover",*/
/* 	pointerleave: "pointerout"*/
/* }, function( orig, fix ) {*/
/* 	jQuery.event.special[ orig ] = {*/
/* 		delegateType: fix,*/
/* 		bindType: fix,*/
/* */
/* 		handle: function( event ) {*/
/* 			var ret,*/
/* 				target = this,*/
/* 				related = event.relatedTarget,*/
/* 				handleObj = event.handleObj;*/
/* */
/* 			// For mouseenter/leave call the handler if related is outside the target.*/
/* 			// NB: No relatedTarget if the mouse left/entered the browser window*/
/* 			if ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {*/
/* 				event.type = handleObj.origType;*/
/* 				ret = handleObj.handler.apply( this, arguments );*/
/* 				event.type = fix;*/
/* 			}*/
/* 			return ret;*/
/* 		}*/
/* 	};*/
/* } );*/
/* */
/* // IE submit delegation*/
/* if ( !support.submit ) {*/
/* */
/* 	jQuery.event.special.submit = {*/
/* 		setup: function() {*/
/* */
/* 			// Only need this for delegated form submit events*/
/* 			if ( jQuery.nodeName( this, "form" ) ) {*/
/* 				return false;*/
/* 			}*/
/* */
/* 			// Lazy-add a submit handler when a descendant form may potentially be submitted*/
/* 			jQuery.event.add( this, "click._submit keypress._submit", function( e ) {*/
/* */
/* 				// Node name check avoids a VML-related crash in IE (#9807)*/
/* 				var elem = e.target,*/
/* 					form = jQuery.nodeName( elem, "input" ) || jQuery.nodeName( elem, "button" ) ?*/
/* */
/* 						// Support: IE <=8*/
/* 						// We use jQuery.prop instead of elem.form*/
/* 						// to allow fixing the IE8 delegated submit issue (gh-2332)*/
/* 						// by 3rd party polyfills/workarounds.*/
/* 						jQuery.prop( elem, "form" ) :*/
/* 						undefined;*/
/* */
/* 				if ( form && !jQuery._data( form, "submit" ) ) {*/
/* 					jQuery.event.add( form, "submit._submit", function( event ) {*/
/* 						event._submitBubble = true;*/
/* 					} );*/
/* 					jQuery._data( form, "submit", true );*/
/* 				}*/
/* 			} );*/
/* */
/* 			// return undefined since we don't need an event listener*/
/* 		},*/
/* */
/* 		postDispatch: function( event ) {*/
/* */
/* 			// If form was submitted by the user, bubble the event up the tree*/
/* 			if ( event._submitBubble ) {*/
/* 				delete event._submitBubble;*/
/* 				if ( this.parentNode && !event.isTrigger ) {*/
/* 					jQuery.event.simulate( "submit", this.parentNode, event );*/
/* 				}*/
/* 			}*/
/* 		},*/
/* */
/* 		teardown: function() {*/
/* */
/* 			// Only need this for delegated form submit events*/
/* 			if ( jQuery.nodeName( this, "form" ) ) {*/
/* 				return false;*/
/* 			}*/
/* */
/* 			// Remove delegated handlers; cleanData eventually reaps submit handlers attached above*/
/* 			jQuery.event.remove( this, "._submit" );*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* // IE change delegation and checkbox/radio fix*/
/* if ( !support.change ) {*/
/* */
/* 	jQuery.event.special.change = {*/
/* */
/* 		setup: function() {*/
/* */
/* 			if ( rformElems.test( this.nodeName ) ) {*/
/* */
/* 				// IE doesn't fire change on a check/radio until blur; trigger it on click*/
/* 				// after a propertychange. Eat the blur-change in special.change.handle.*/
/* 				// This still fires onchange a second time for check/radio after blur.*/
/* 				if ( this.type === "checkbox" || this.type === "radio" ) {*/
/* 					jQuery.event.add( this, "propertychange._change", function( event ) {*/
/* 						if ( event.originalEvent.propertyName === "checked" ) {*/
/* 							this._justChanged = true;*/
/* 						}*/
/* 					} );*/
/* 					jQuery.event.add( this, "click._change", function( event ) {*/
/* 						if ( this._justChanged && !event.isTrigger ) {*/
/* 							this._justChanged = false;*/
/* 						}*/
/* */
/* 						// Allow triggered, simulated change events (#11500)*/
/* 						jQuery.event.simulate( "change", this, event );*/
/* 					} );*/
/* 				}*/
/* 				return false;*/
/* 			}*/
/* */
/* 			// Delegated event; lazy-add a change handler on descendant inputs*/
/* 			jQuery.event.add( this, "beforeactivate._change", function( e ) {*/
/* 				var elem = e.target;*/
/* */
/* 				if ( rformElems.test( elem.nodeName ) && !jQuery._data( elem, "change" ) ) {*/
/* 					jQuery.event.add( elem, "change._change", function( event ) {*/
/* 						if ( this.parentNode && !event.isSimulated && !event.isTrigger ) {*/
/* 							jQuery.event.simulate( "change", this.parentNode, event );*/
/* 						}*/
/* 					} );*/
/* 					jQuery._data( elem, "change", true );*/
/* 				}*/
/* 			} );*/
/* 		},*/
/* */
/* 		handle: function( event ) {*/
/* 			var elem = event.target;*/
/* */
/* 			// Swallow native change events from checkbox/radio, we already triggered them above*/
/* 			if ( this !== elem || event.isSimulated || event.isTrigger ||*/
/* 				( elem.type !== "radio" && elem.type !== "checkbox" ) ) {*/
/* */
/* 				return event.handleObj.handler.apply( this, arguments );*/
/* 			}*/
/* 		},*/
/* */
/* 		teardown: function() {*/
/* 			jQuery.event.remove( this, "._change" );*/
/* */
/* 			return !rformElems.test( this.nodeName );*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* // Support: Firefox*/
/* // Firefox doesn't have focus(in | out) events*/
/* // Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787*/
/* //*/
/* // Support: Chrome, Safari*/
/* // focus(in | out) events fire after focus & blur events,*/
/* // which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order*/
/* // Related ticket - https://code.google.com/p/chromium/issues/detail?id=449857*/
/* if ( !support.focusin ) {*/
/* 	jQuery.each( { focus: "focusin", blur: "focusout" }, function( orig, fix ) {*/
/* */
/* 		// Attach a single capturing handler on the document while someone wants focusin/focusout*/
/* 		var handler = function( event ) {*/
/* 			jQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );*/
/* 		};*/
/* */
/* 		jQuery.event.special[ fix ] = {*/
/* 			setup: function() {*/
/* 				var doc = this.ownerDocument || this,*/
/* 					attaches = jQuery._data( doc, fix );*/
/* */
/* 				if ( !attaches ) {*/
/* 					doc.addEventListener( orig, handler, true );*/
/* 				}*/
/* 				jQuery._data( doc, fix, ( attaches || 0 ) + 1 );*/
/* 			},*/
/* 			teardown: function() {*/
/* 				var doc = this.ownerDocument || this,*/
/* 					attaches = jQuery._data( doc, fix ) - 1;*/
/* */
/* 				if ( !attaches ) {*/
/* 					doc.removeEventListener( orig, handler, true );*/
/* 					jQuery._removeData( doc, fix );*/
/* 				} else {*/
/* 					jQuery._data( doc, fix, attaches );*/
/* 				}*/
/* 			}*/
/* 		};*/
/* 	} );*/
/* }*/
/* */
/* jQuery.fn.extend( {*/
/* */
/* 	on: function( types, selector, data, fn ) {*/
/* 		return on( this, types, selector, data, fn );*/
/* 	},*/
/* 	one: function( types, selector, data, fn ) {*/
/* 		return on( this, types, selector, data, fn, 1 );*/
/* 	},*/
/* 	off: function( types, selector, fn ) {*/
/* 		var handleObj, type;*/
/* 		if ( types && types.preventDefault && types.handleObj ) {*/
/* */
/* 			// ( event )  dispatched jQuery.Event*/
/* 			handleObj = types.handleObj;*/
/* 			jQuery( types.delegateTarget ).off(*/
/* 				handleObj.namespace ?*/
/* 					handleObj.origType + "." + handleObj.namespace :*/
/* 					handleObj.origType,*/
/* 				handleObj.selector,*/
/* 				handleObj.handler*/
/* 			);*/
/* 			return this;*/
/* 		}*/
/* 		if ( typeof types === "object" ) {*/
/* */
/* 			// ( types-object [, selector] )*/
/* 			for ( type in types ) {*/
/* 				this.off( type, selector, types[ type ] );*/
/* 			}*/
/* 			return this;*/
/* 		}*/
/* 		if ( selector === false || typeof selector === "function" ) {*/
/* */
/* 			// ( types [, fn] )*/
/* 			fn = selector;*/
/* 			selector = undefined;*/
/* 		}*/
/* 		if ( fn === false ) {*/
/* 			fn = returnFalse;*/
/* 		}*/
/* 		return this.each( function() {*/
/* 			jQuery.event.remove( this, types, fn, selector );*/
/* 		} );*/
/* 	},*/
/* */
/* 	trigger: function( type, data ) {*/
/* 		return this.each( function() {*/
/* 			jQuery.event.trigger( type, data, this );*/
/* 		} );*/
/* 	},*/
/* 	triggerHandler: function( type, data ) {*/
/* 		var elem = this[ 0 ];*/
/* 		if ( elem ) {*/
/* 			return jQuery.event.trigger( type, data, elem, true );*/
/* 		}*/
/* 	}*/
/* } );*/
/* */
/* */
/* var rinlinejQuery = / jQuery\d+="(?:null|\d+)"/g,*/
/* 	rnoshimcache = new RegExp( "<(?:" + nodeNames + ")[\\s/>]", "i" ),*/
/* 	rxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:-]+)[^>]*)\/>/gi,*/
/* */
/* 	// Support: IE 10-11, Edge 10240+*/
/* 	// In IE/Edge using regex groups here causes severe slowdowns.*/
/* 	// See https://connect.microsoft.com/IE/feedback/details/1736512/*/
/* 	rnoInnerhtml = /<script|<style|<link/i,*/
/* */
/* 	// checked="checked" or checked*/
/* 	rchecked = /checked\s*(?:[^=]|=\s*.checked.)/i,*/
/* 	rscriptTypeMasked = /^true\/(.*)/,*/
/* 	rcleanScript = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,*/
/* 	safeFragment = createSafeFragment( document ),*/
/* 	fragmentDiv = safeFragment.appendChild( document.createElement( "div" ) );*/
/* */
/* // Support: IE<8*/
/* // Manipulating tables requires a tbody*/
/* function manipulationTarget( elem, content ) {*/
/* 	return jQuery.nodeName( elem, "table" ) &&*/
/* 		jQuery.nodeName( content.nodeType !== 11 ? content : content.firstChild, "tr" ) ?*/
/* */
/* 		elem.getElementsByTagName( "tbody" )[ 0 ] ||*/
/* 			elem.appendChild( elem.ownerDocument.createElement( "tbody" ) ) :*/
/* 		elem;*/
/* }*/
/* */
/* // Replace/restore the type attribute of script elements for safe DOM manipulation*/
/* function disableScript( elem ) {*/
/* 	elem.type = ( jQuery.find.attr( elem, "type" ) !== null ) + "/" + elem.type;*/
/* 	return elem;*/
/* }*/
/* function restoreScript( elem ) {*/
/* 	var match = rscriptTypeMasked.exec( elem.type );*/
/* 	if ( match ) {*/
/* 		elem.type = match[ 1 ];*/
/* 	} else {*/
/* 		elem.removeAttribute( "type" );*/
/* 	}*/
/* 	return elem;*/
/* }*/
/* */
/* function cloneCopyEvent( src, dest ) {*/
/* 	if ( dest.nodeType !== 1 || !jQuery.hasData( src ) ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	var type, i, l,*/
/* 		oldData = jQuery._data( src ),*/
/* 		curData = jQuery._data( dest, oldData ),*/
/* 		events = oldData.events;*/
/* */
/* 	if ( events ) {*/
/* 		delete curData.handle;*/
/* 		curData.events = {};*/
/* */
/* 		for ( type in events ) {*/
/* 			for ( i = 0, l = events[ type ].length; i < l; i++ ) {*/
/* 				jQuery.event.add( dest, type, events[ type ][ i ] );*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// make the cloned public data object a copy from the original*/
/* 	if ( curData.data ) {*/
/* 		curData.data = jQuery.extend( {}, curData.data );*/
/* 	}*/
/* }*/
/* */
/* function fixCloneNodeIssues( src, dest ) {*/
/* 	var nodeName, e, data;*/
/* */
/* 	// We do not need to do anything for non-Elements*/
/* 	if ( dest.nodeType !== 1 ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	nodeName = dest.nodeName.toLowerCase();*/
/* */
/* 	// IE6-8 copies events bound via attachEvent when using cloneNode.*/
/* 	if ( !support.noCloneEvent && dest[ jQuery.expando ] ) {*/
/* 		data = jQuery._data( dest );*/
/* */
/* 		for ( e in data.events ) {*/
/* 			jQuery.removeEvent( dest, e, data.handle );*/
/* 		}*/
/* */
/* 		// Event data gets referenced instead of copied if the expando gets copied too*/
/* 		dest.removeAttribute( jQuery.expando );*/
/* 	}*/
/* */
/* 	// IE blanks contents when cloning scripts, and tries to evaluate newly-set text*/
/* 	if ( nodeName === "script" && dest.text !== src.text ) {*/
/* 		disableScript( dest ).text = src.text;*/
/* 		restoreScript( dest );*/
/* */
/* 	// IE6-10 improperly clones children of object elements using classid.*/
/* 	// IE10 throws NoModificationAllowedError if parent is null, #12132.*/
/* 	} else if ( nodeName === "object" ) {*/
/* 		if ( dest.parentNode ) {*/
/* 			dest.outerHTML = src.outerHTML;*/
/* 		}*/
/* */
/* 		// This path appears unavoidable for IE9. When cloning an object*/
/* 		// element in IE9, the outerHTML strategy above is not sufficient.*/
/* 		// If the src has innerHTML and the destination does not,*/
/* 		// copy the src.innerHTML into the dest.innerHTML. #10324*/
/* 		if ( support.html5Clone && ( src.innerHTML && !jQuery.trim( dest.innerHTML ) ) ) {*/
/* 			dest.innerHTML = src.innerHTML;*/
/* 		}*/
/* */
/* 	} else if ( nodeName === "input" && rcheckableType.test( src.type ) ) {*/
/* */
/* 		// IE6-8 fails to persist the checked state of a cloned checkbox*/
/* 		// or radio button. Worse, IE6-7 fail to give the cloned element*/
/* 		// a checked appearance if the defaultChecked value isn't also set*/
/* */
/* 		dest.defaultChecked = dest.checked = src.checked;*/
/* */
/* 		// IE6-7 get confused and end up setting the value of a cloned*/
/* 		// checkbox/radio button to an empty string instead of "on"*/
/* 		if ( dest.value !== src.value ) {*/
/* 			dest.value = src.value;*/
/* 		}*/
/* */
/* 	// IE6-8 fails to return the selected option to the default selected*/
/* 	// state when cloning options*/
/* 	} else if ( nodeName === "option" ) {*/
/* 		dest.defaultSelected = dest.selected = src.defaultSelected;*/
/* */
/* 	// IE6-8 fails to set the defaultValue to the correct value when*/
/* 	// cloning other types of input fields*/
/* 	} else if ( nodeName === "input" || nodeName === "textarea" ) {*/
/* 		dest.defaultValue = src.defaultValue;*/
/* 	}*/
/* }*/
/* */
/* function domManip( collection, args, callback, ignored ) {*/
/* */
/* 	// Flatten any nested arrays*/
/* 	args = concat.apply( [], args );*/
/* */
/* 	var first, node, hasScripts,*/
/* 		scripts, doc, fragment,*/
/* 		i = 0,*/
/* 		l = collection.length,*/
/* 		iNoClone = l - 1,*/
/* 		value = args[ 0 ],*/
/* 		isFunction = jQuery.isFunction( value );*/
/* */
/* 	// We can't cloneNode fragments that contain checked, in WebKit*/
/* 	if ( isFunction ||*/
/* 			( l > 1 && typeof value === "string" &&*/
/* 				!support.checkClone && rchecked.test( value ) ) ) {*/
/* 		return collection.each( function( index ) {*/
/* 			var self = collection.eq( index );*/
/* 			if ( isFunction ) {*/
/* 				args[ 0 ] = value.call( this, index, self.html() );*/
/* 			}*/
/* 			domManip( self, args, callback, ignored );*/
/* 		} );*/
/* 	}*/
/* */
/* 	if ( l ) {*/
/* 		fragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );*/
/* 		first = fragment.firstChild;*/
/* */
/* 		if ( fragment.childNodes.length === 1 ) {*/
/* 			fragment = first;*/
/* 		}*/
/* */
/* 		// Require either new content or an interest in ignored elements to invoke the callback*/
/* 		if ( first || ignored ) {*/
/* 			scripts = jQuery.map( getAll( fragment, "script" ), disableScript );*/
/* 			hasScripts = scripts.length;*/
/* */
/* 			// Use the original fragment for the last item*/
/* 			// instead of the first because it can end up*/
/* 			// being emptied incorrectly in certain situations (#8070).*/
/* 			for ( ; i < l; i++ ) {*/
/* 				node = fragment;*/
/* */
/* 				if ( i !== iNoClone ) {*/
/* 					node = jQuery.clone( node, true, true );*/
/* */
/* 					// Keep references to cloned scripts for later restoration*/
/* 					if ( hasScripts ) {*/
/* */
/* 						// Support: Android<4.1, PhantomJS<2*/
/* 						// push.apply(_, arraylike) throws on ancient WebKit*/
/* 						jQuery.merge( scripts, getAll( node, "script" ) );*/
/* 					}*/
/* 				}*/
/* */
/* 				callback.call( collection[ i ], node, i );*/
/* 			}*/
/* */
/* 			if ( hasScripts ) {*/
/* 				doc = scripts[ scripts.length - 1 ].ownerDocument;*/
/* */
/* 				// Reenable scripts*/
/* 				jQuery.map( scripts, restoreScript );*/
/* */
/* 				// Evaluate executable scripts on first document insertion*/
/* 				for ( i = 0; i < hasScripts; i++ ) {*/
/* 					node = scripts[ i ];*/
/* 					if ( rscriptType.test( node.type || "" ) &&*/
/* 						!jQuery._data( node, "globalEval" ) &&*/
/* 						jQuery.contains( doc, node ) ) {*/
/* */
/* 						if ( node.src ) {*/
/* */
/* 							// Optional AJAX dependency, but won't run scripts if not present*/
/* 							if ( jQuery._evalUrl ) {*/
/* 								jQuery._evalUrl( node.src );*/
/* 							}*/
/* 						} else {*/
/* 							jQuery.globalEval(*/
/* 								( node.text || node.textContent || node.innerHTML || "" )*/
/* 									.replace( rcleanScript, "" )*/
/* 							);*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			// Fix #11809: Avoid leaking memory*/
/* 			fragment = first = null;*/
/* 		}*/
/* 	}*/
/* */
/* 	return collection;*/
/* }*/
/* */
/* function remove( elem, selector, keepData ) {*/
/* 	var node,*/
/* 		elems = selector ? jQuery.filter( selector, elem ) : elem,*/
/* 		i = 0;*/
/* */
/* 	for ( ; ( node = elems[ i ] ) != null; i++ ) {*/
/* */
/* 		if ( !keepData && node.nodeType === 1 ) {*/
/* 			jQuery.cleanData( getAll( node ) );*/
/* 		}*/
/* */
/* 		if ( node.parentNode ) {*/
/* 			if ( keepData && jQuery.contains( node.ownerDocument, node ) ) {*/
/* 				setGlobalEval( getAll( node, "script" ) );*/
/* 			}*/
/* 			node.parentNode.removeChild( node );*/
/* 		}*/
/* 	}*/
/* */
/* 	return elem;*/
/* }*/
/* */
/* jQuery.extend( {*/
/* 	htmlPrefilter: function( html ) {*/
/* 		return html.replace( rxhtmlTag, "<$1></$2>" );*/
/* 	},*/
/* */
/* 	clone: function( elem, dataAndEvents, deepDataAndEvents ) {*/
/* 		var destElements, node, clone, i, srcElements,*/
/* 			inPage = jQuery.contains( elem.ownerDocument, elem );*/
/* */
/* 		if ( support.html5Clone || jQuery.isXMLDoc( elem ) ||*/
/* 			!rnoshimcache.test( "<" + elem.nodeName + ">" ) ) {*/
/* */
/* 			clone = elem.cloneNode( true );*/
/* */
/* 		// IE<=8 does not properly clone detached, unknown element nodes*/
/* 		} else {*/
/* 			fragmentDiv.innerHTML = elem.outerHTML;*/
/* 			fragmentDiv.removeChild( clone = fragmentDiv.firstChild );*/
/* 		}*/
/* */
/* 		if ( ( !support.noCloneEvent || !support.noCloneChecked ) &&*/
/* 				( elem.nodeType === 1 || elem.nodeType === 11 ) && !jQuery.isXMLDoc( elem ) ) {*/
/* */
/* 			// We eschew Sizzle here for performance reasons: http://jsperf.com/getall-vs-sizzle/2*/
/* 			destElements = getAll( clone );*/
/* 			srcElements = getAll( elem );*/
/* */
/* 			// Fix all IE cloning issues*/
/* 			for ( i = 0; ( node = srcElements[ i ] ) != null; ++i ) {*/
/* */
/* 				// Ensure that the destination node is not null; Fixes #9587*/
/* 				if ( destElements[ i ] ) {*/
/* 					fixCloneNodeIssues( node, destElements[ i ] );*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		// Copy the events from the original to the clone*/
/* 		if ( dataAndEvents ) {*/
/* 			if ( deepDataAndEvents ) {*/
/* 				srcElements = srcElements || getAll( elem );*/
/* 				destElements = destElements || getAll( clone );*/
/* */
/* 				for ( i = 0; ( node = srcElements[ i ] ) != null; i++ ) {*/
/* 					cloneCopyEvent( node, destElements[ i ] );*/
/* 				}*/
/* 			} else {*/
/* 				cloneCopyEvent( elem, clone );*/
/* 			}*/
/* 		}*/
/* */
/* 		// Preserve script evaluation history*/
/* 		destElements = getAll( clone, "script" );*/
/* 		if ( destElements.length > 0 ) {*/
/* 			setGlobalEval( destElements, !inPage && getAll( elem, "script" ) );*/
/* 		}*/
/* */
/* 		destElements = srcElements = node = null;*/
/* */
/* 		// Return the cloned set*/
/* 		return clone;*/
/* 	},*/
/* */
/* 	cleanData: function( elems, /* internal *//*  forceAcceptData ) {*/
/* 		var elem, type, id, data,*/
/* 			i = 0,*/
/* 			internalKey = jQuery.expando,*/
/* 			cache = jQuery.cache,*/
/* 			attributes = support.attributes,*/
/* 			special = jQuery.event.special;*/
/* */
/* 		for ( ; ( elem = elems[ i ] ) != null; i++ ) {*/
/* 			if ( forceAcceptData || acceptData( elem ) ) {*/
/* */
/* 				id = elem[ internalKey ];*/
/* 				data = id && cache[ id ];*/
/* */
/* 				if ( data ) {*/
/* 					if ( data.events ) {*/
/* 						for ( type in data.events ) {*/
/* 							if ( special[ type ] ) {*/
/* 								jQuery.event.remove( elem, type );*/
/* */
/* 							// This is a shortcut to avoid jQuery.event.remove's overhead*/
/* 							} else {*/
/* 								jQuery.removeEvent( elem, type, data.handle );*/
/* 							}*/
/* 						}*/
/* 					}*/
/* */
/* 					// Remove cache only if it was not already removed by jQuery.event.remove*/
/* 					if ( cache[ id ] ) {*/
/* */
/* 						delete cache[ id ];*/
/* */
/* 						// Support: IE<9*/
/* 						// IE does not allow us to delete expando properties from nodes*/
/* 						// IE creates expando attributes along with the property*/
/* 						// IE does not have a removeAttribute function on Document nodes*/
/* 						if ( !attributes && typeof elem.removeAttribute !== "undefined" ) {*/
/* 							elem.removeAttribute( internalKey );*/
/* */
/* 						// Webkit & Blink performance suffers when deleting properties*/
/* 						// from DOM nodes, so set to undefined instead*/
/* 						// https://code.google.com/p/chromium/issues/detail?id=378607*/
/* 						} else {*/
/* 							elem[ internalKey ] = undefined;*/
/* 						}*/
/* */
/* 						deletedIds.push( id );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* } );*/
/* */
/* jQuery.fn.extend( {*/
/* */
/* 	// Keep domManip exposed until 3.0 (gh-2225)*/
/* 	domManip: domManip,*/
/* */
/* 	detach: function( selector ) {*/
/* 		return remove( this, selector, true );*/
/* 	},*/
/* */
/* 	remove: function( selector ) {*/
/* 		return remove( this, selector );*/
/* 	},*/
/* */
/* 	text: function( value ) {*/
/* 		return access( this, function( value ) {*/
/* 			return value === undefined ?*/
/* 				jQuery.text( this ) :*/
/* 				this.empty().append(*/
/* 					( this[ 0 ] && this[ 0 ].ownerDocument || document ).createTextNode( value )*/
/* 				);*/
/* 		}, null, value, arguments.length );*/
/* 	},*/
/* */
/* 	append: function() {*/
/* 		return domManip( this, arguments, function( elem ) {*/
/* 			if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {*/
/* 				var target = manipulationTarget( this, elem );*/
/* 				target.appendChild( elem );*/
/* 			}*/
/* 		} );*/
/* 	},*/
/* */
/* 	prepend: function() {*/
/* 		return domManip( this, arguments, function( elem ) {*/
/* 			if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {*/
/* 				var target = manipulationTarget( this, elem );*/
/* 				target.insertBefore( elem, target.firstChild );*/
/* 			}*/
/* 		} );*/
/* 	},*/
/* */
/* 	before: function() {*/
/* 		return domManip( this, arguments, function( elem ) {*/
/* 			if ( this.parentNode ) {*/
/* 				this.parentNode.insertBefore( elem, this );*/
/* 			}*/
/* 		} );*/
/* 	},*/
/* */
/* 	after: function() {*/
/* 		return domManip( this, arguments, function( elem ) {*/
/* 			if ( this.parentNode ) {*/
/* 				this.parentNode.insertBefore( elem, this.nextSibling );*/
/* 			}*/
/* 		} );*/
/* 	},*/
/* */
/* 	empty: function() {*/
/* 		var elem,*/
/* 			i = 0;*/
/* */
/* 		for ( ; ( elem = this[ i ] ) != null; i++ ) {*/
/* */
/* 			// Remove element nodes and prevent memory leaks*/
/* 			if ( elem.nodeType === 1 ) {*/
/* 				jQuery.cleanData( getAll( elem, false ) );*/
/* 			}*/
/* */
/* 			// Remove any remaining nodes*/
/* 			while ( elem.firstChild ) {*/
/* 				elem.removeChild( elem.firstChild );*/
/* 			}*/
/* */
/* 			// If this is a select, ensure that it displays empty (#12336)*/
/* 			// Support: IE<9*/
/* 			if ( elem.options && jQuery.nodeName( elem, "select" ) ) {*/
/* 				elem.options.length = 0;*/
/* 			}*/
/* 		}*/
/* */
/* 		return this;*/
/* 	},*/
/* */
/* 	clone: function( dataAndEvents, deepDataAndEvents ) {*/
/* 		dataAndEvents = dataAndEvents == null ? false : dataAndEvents;*/
/* 		deepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;*/
/* */
/* 		return this.map( function() {*/
/* 			return jQuery.clone( this, dataAndEvents, deepDataAndEvents );*/
/* 		} );*/
/* 	},*/
/* */
/* 	html: function( value ) {*/
/* 		return access( this, function( value ) {*/
/* 			var elem = this[ 0 ] || {},*/
/* 				i = 0,*/
/* 				l = this.length;*/
/* */
/* 			if ( value === undefined ) {*/
/* 				return elem.nodeType === 1 ?*/
/* 					elem.innerHTML.replace( rinlinejQuery, "" ) :*/
/* 					undefined;*/
/* 			}*/
/* */
/* 			// See if we can take a shortcut and just use innerHTML*/
/* 			if ( typeof value === "string" && !rnoInnerhtml.test( value ) &&*/
/* 				( support.htmlSerialize || !rnoshimcache.test( value )  ) &&*/
/* 				( support.leadingWhitespace || !rleadingWhitespace.test( value ) ) &&*/
/* 				!wrapMap[ ( rtagName.exec( value ) || [ "", "" ] )[ 1 ].toLowerCase() ] ) {*/
/* */
/* 				value = jQuery.htmlPrefilter( value );*/
/* */
/* 				try {*/
/* 					for ( ; i < l; i++ ) {*/
/* */
/* 						// Remove element nodes and prevent memory leaks*/
/* 						elem = this[ i ] || {};*/
/* 						if ( elem.nodeType === 1 ) {*/
/* 							jQuery.cleanData( getAll( elem, false ) );*/
/* 							elem.innerHTML = value;*/
/* 						}*/
/* 					}*/
/* */
/* 					elem = 0;*/
/* */
/* 				// If using innerHTML throws an exception, use the fallback method*/
/* 				} catch ( e ) {}*/
/* 			}*/
/* */
/* 			if ( elem ) {*/
/* 				this.empty().append( value );*/
/* 			}*/
/* 		}, null, value, arguments.length );*/
/* 	},*/
/* */
/* 	replaceWith: function() {*/
/* 		var ignored = [];*/
/* */
/* 		// Make the changes, replacing each non-ignored context element with the new content*/
/* 		return domManip( this, arguments, function( elem ) {*/
/* 			var parent = this.parentNode;*/
/* */
/* 			if ( jQuery.inArray( this, ignored ) < 0 ) {*/
/* 				jQuery.cleanData( getAll( this ) );*/
/* 				if ( parent ) {*/
/* 					parent.replaceChild( elem, this );*/
/* 				}*/
/* 			}*/
/* */
/* 		// Force callback invocation*/
/* 		}, ignored );*/
/* 	}*/
/* } );*/
/* */
/* jQuery.each( {*/
/* 	appendTo: "append",*/
/* 	prependTo: "prepend",*/
/* 	insertBefore: "before",*/
/* 	insertAfter: "after",*/
/* 	replaceAll: "replaceWith"*/
/* }, function( name, original ) {*/
/* 	jQuery.fn[ name ] = function( selector ) {*/
/* 		var elems,*/
/* 			i = 0,*/
/* 			ret = [],*/
/* 			insert = jQuery( selector ),*/
/* 			last = insert.length - 1;*/
/* */
/* 		for ( ; i <= last; i++ ) {*/
/* 			elems = i === last ? this : this.clone( true );*/
/* 			jQuery( insert[ i ] )[ original ]( elems );*/
/* */
/* 			// Modern browsers can apply jQuery collections as arrays, but oldIE needs a .get()*/
/* 			push.apply( ret, elems.get() );*/
/* 		}*/
/* */
/* 		return this.pushStack( ret );*/
/* 	};*/
/* } );*/
/* */
/* */
/* var iframe,*/
/* 	elemdisplay = {*/
/* */
/* 		// Support: Firefox*/
/* 		// We have to pre-define these values for FF (#10227)*/
/* 		HTML: "block",*/
/* 		BODY: "block"*/
/* 	};*/
/* */
/* /***/
/*  * Retrieve the actual display of a element*/
/*  * @param {String} name nodeName of the element*/
/*  * @param {Object} doc Document object*/
/*  *//* */
/* */
/* // Called only from within defaultDisplay*/
/* function actualDisplay( name, doc ) {*/
/* 	var elem = jQuery( doc.createElement( name ) ).appendTo( doc.body ),*/
/* */
/* 		display = jQuery.css( elem[ 0 ], "display" );*/
/* */
/* 	// We don't have any data stored on the element,*/
/* 	// so use "detach" method as fast way to get rid of the element*/
/* 	elem.detach();*/
/* */
/* 	return display;*/
/* }*/
/* */
/* /***/
/*  * Try to determine the default display value of an element*/
/*  * @param {String} nodeName*/
/*  *//* */
/* function defaultDisplay( nodeName ) {*/
/* 	var doc = document,*/
/* 		display = elemdisplay[ nodeName ];*/
/* */
/* 	if ( !display ) {*/
/* 		display = actualDisplay( nodeName, doc );*/
/* */
/* 		// If the simple way fails, read from inside an iframe*/
/* 		if ( display === "none" || !display ) {*/
/* */
/* 			// Use the already-created iframe if possible*/
/* 			iframe = ( iframe || jQuery( "<iframe frameborder='0' width='0' height='0'/>" ) )*/
/* 				.appendTo( doc.documentElement );*/
/* */
/* 			// Always write a new HTML skeleton so Webkit and Firefox don't choke on reuse*/
/* 			doc = ( iframe[ 0 ].contentWindow || iframe[ 0 ].contentDocument ).document;*/
/* */
/* 			// Support: IE*/
/* 			doc.write();*/
/* 			doc.close();*/
/* */
/* 			display = actualDisplay( nodeName, doc );*/
/* 			iframe.detach();*/
/* 		}*/
/* */
/* 		// Store the correct default display*/
/* 		elemdisplay[ nodeName ] = display;*/
/* 	}*/
/* */
/* 	return display;*/
/* }*/
/* var rmargin = ( /^margin/ );*/
/* */
/* var rnumnonpx = new RegExp( "^(" + pnum + ")(?!px)[a-z%]+$", "i" );*/
/* */
/* var swap = function( elem, options, callback, args ) {*/
/* 	var ret, name,*/
/* 		old = {};*/
/* */
/* 	// Remember the old values, and insert the new ones*/
/* 	for ( name in options ) {*/
/* 		old[ name ] = elem.style[ name ];*/
/* 		elem.style[ name ] = options[ name ];*/
/* 	}*/
/* */
/* 	ret = callback.apply( elem, args || [] );*/
/* */
/* 	// Revert the old values*/
/* 	for ( name in options ) {*/
/* 		elem.style[ name ] = old[ name ];*/
/* 	}*/
/* */
/* 	return ret;*/
/* };*/
/* */
/* */
/* var documentElement = document.documentElement;*/
/* */
/* */
/* */
/* ( function() {*/
/* 	var pixelPositionVal, pixelMarginRightVal, boxSizingReliableVal,*/
/* 		reliableHiddenOffsetsVal, reliableMarginRightVal, reliableMarginLeftVal,*/
/* 		container = document.createElement( "div" ),*/
/* 		div = document.createElement( "div" );*/
/* */
/* 	// Finish early in limited (non-browser) environments*/
/* 	if ( !div.style ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	div.style.cssText = "float:left;opacity:.5";*/
/* */
/* 	// Support: IE<9*/
/* 	// Make sure that element opacity exists (as opposed to filter)*/
/* 	support.opacity = div.style.opacity === "0.5";*/
/* */
/* 	// Verify style float existence*/
/* 	// (IE uses styleFloat instead of cssFloat)*/
/* 	support.cssFloat = !!div.style.cssFloat;*/
/* */
/* 	div.style.backgroundClip = "content-box";*/
/* 	div.cloneNode( true ).style.backgroundClip = "";*/
/* 	support.clearCloneStyle = div.style.backgroundClip === "content-box";*/
/* */
/* 	container = document.createElement( "div" );*/
/* 	container.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;" +*/
/* 		"padding:0;margin-top:1px;position:absolute";*/
/* 	div.innerHTML = "";*/
/* 	container.appendChild( div );*/
/* */
/* 	// Support: Firefox<29, Android 2.3*/
/* 	// Vendor-prefix box-sizing*/
/* 	support.boxSizing = div.style.boxSizing === "" || div.style.MozBoxSizing === "" ||*/
/* 		div.style.WebkitBoxSizing === "";*/
/* */
/* 	jQuery.extend( support, {*/
/* 		reliableHiddenOffsets: function() {*/
/* 			if ( pixelPositionVal == null ) {*/
/* 				computeStyleTests();*/
/* 			}*/
/* 			return reliableHiddenOffsetsVal;*/
/* 		},*/
/* */
/* 		boxSizingReliable: function() {*/
/* */
/* 			// We're checking for pixelPositionVal here instead of boxSizingReliableVal*/
/* 			// since that compresses better and they're computed together anyway.*/
/* 			if ( pixelPositionVal == null ) {*/
/* 				computeStyleTests();*/
/* 			}*/
/* 			return boxSizingReliableVal;*/
/* 		},*/
/* */
/* 		pixelMarginRight: function() {*/
/* */
/* 			// Support: Android 4.0-4.3*/
/* 			if ( pixelPositionVal == null ) {*/
/* 				computeStyleTests();*/
/* 			}*/
/* 			return pixelMarginRightVal;*/
/* 		},*/
/* */
/* 		pixelPosition: function() {*/
/* 			if ( pixelPositionVal == null ) {*/
/* 				computeStyleTests();*/
/* 			}*/
/* 			return pixelPositionVal;*/
/* 		},*/
/* */
/* 		reliableMarginRight: function() {*/
/* */
/* 			// Support: Android 2.3*/
/* 			if ( pixelPositionVal == null ) {*/
/* 				computeStyleTests();*/
/* 			}*/
/* 			return reliableMarginRightVal;*/
/* 		},*/
/* */
/* 		reliableMarginLeft: function() {*/
/* */
/* 			// Support: IE <=8 only, Android 4.0 - 4.3 only, Firefox <=3 - 37*/
/* 			if ( pixelPositionVal == null ) {*/
/* 				computeStyleTests();*/
/* 			}*/
/* 			return reliableMarginLeftVal;*/
/* 		}*/
/* 	} );*/
/* */
/* 	function computeStyleTests() {*/
/* 		var contents, divStyle,*/
/* 			documentElement = document.documentElement;*/
/* */
/* 		// Setup*/
/* 		documentElement.appendChild( container );*/
/* */
/* 		div.style.cssText =*/
/* */
/* 			// Support: Android 2.3*/
/* 			// Vendor-prefix box-sizing*/
/* 			"-webkit-box-sizing:border-box;box-sizing:border-box;" +*/
/* 			"position:relative;display:block;" +*/
/* 			"margin:auto;border:1px;padding:1px;" +*/
/* 			"top:1%;width:50%";*/
/* */
/* 		// Support: IE<9*/
/* 		// Assume reasonable values in the absence of getComputedStyle*/
/* 		pixelPositionVal = boxSizingReliableVal = reliableMarginLeftVal = false;*/
/* 		pixelMarginRightVal = reliableMarginRightVal = true;*/
/* */
/* 		// Check for getComputedStyle so that this code is not run in IE<9.*/
/* 		if ( window.getComputedStyle ) {*/
/* 			divStyle = window.getComputedStyle( div );*/
/* 			pixelPositionVal = ( divStyle || {} ).top !== "1%";*/
/* 			reliableMarginLeftVal = ( divStyle || {} ).marginLeft === "2px";*/
/* 			boxSizingReliableVal = ( divStyle || { width: "4px" } ).width === "4px";*/
/* */
/* 			// Support: Android 4.0 - 4.3 only*/
/* 			// Some styles come back with percentage values, even though they shouldn't*/
/* 			div.style.marginRight = "50%";*/
/* 			pixelMarginRightVal = ( divStyle || { marginRight: "4px" } ).marginRight === "4px";*/
/* */
/* 			// Support: Android 2.3 only*/
/* 			// Div with explicit width and no margin-right incorrectly*/
/* 			// gets computed margin-right based on width of container (#3333)*/
/* 			// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right*/
/* 			contents = div.appendChild( document.createElement( "div" ) );*/
/* */
/* 			// Reset CSS: box-sizing; display; margin; border; padding*/
/* 			contents.style.cssText = div.style.cssText =*/
/* */
/* 				// Support: Android 2.3*/
/* 				// Vendor-prefix box-sizing*/
/* 				"-webkit-box-sizing:content-box;-moz-box-sizing:content-box;" +*/
/* 				"box-sizing:content-box;display:block;margin:0;border:0;padding:0";*/
/* 			contents.style.marginRight = contents.style.width = "0";*/
/* 			div.style.width = "1px";*/
/* */
/* 			reliableMarginRightVal =*/
/* 				!parseFloat( ( window.getComputedStyle( contents ) || {} ).marginRight );*/
/* */
/* 			div.removeChild( contents );*/
/* 		}*/
/* */
/* 		// Support: IE6-8*/
/* 		// First check that getClientRects works as expected*/
/* 		// Check if table cells still have offsetWidth/Height when they are set*/
/* 		// to display:none and there are still other visible table cells in a*/
/* 		// table row; if so, offsetWidth/Height are not reliable for use when*/
/* 		// determining if an element has been hidden directly using*/
/* 		// display:none (it is still safe to use offsets if a parent element is*/
/* 		// hidden; don safety goggles and see bug #4512 for more information).*/
/* 		div.style.display = "none";*/
/* 		reliableHiddenOffsetsVal = div.getClientRects().length === 0;*/
/* 		if ( reliableHiddenOffsetsVal ) {*/
/* 			div.style.display = "";*/
/* 			div.innerHTML = "<table><tr><td></td><td>t</td></tr></table>";*/
/* 			div.childNodes[ 0 ].style.borderCollapse = "separate";*/
/* 			contents = div.getElementsByTagName( "td" );*/
/* 			contents[ 0 ].style.cssText = "margin:0;border:0;padding:0;display:none";*/
/* 			reliableHiddenOffsetsVal = contents[ 0 ].offsetHeight === 0;*/
/* 			if ( reliableHiddenOffsetsVal ) {*/
/* 				contents[ 0 ].style.display = "";*/
/* 				contents[ 1 ].style.display = "none";*/
/* 				reliableHiddenOffsetsVal = contents[ 0 ].offsetHeight === 0;*/
/* 			}*/
/* 		}*/
/* */
/* 		// Teardown*/
/* 		documentElement.removeChild( container );*/
/* 	}*/
/* */
/* } )();*/
/* */
/* */
/* var getStyles, curCSS,*/
/* 	rposition = /^(top|right|bottom|left)$/;*/
/* */
/* if ( window.getComputedStyle ) {*/
/* 	getStyles = function( elem ) {*/
/* */
/* 		// Support: IE<=11+, Firefox<=30+ (#15098, #14150)*/
/* 		// IE throws on elements created in popups*/
/* 		// FF meanwhile throws on frame elements through "defaultView.getComputedStyle"*/
/* 		var view = elem.ownerDocument.defaultView;*/
/* */
/* 		if ( !view || !view.opener ) {*/
/* 			view = window;*/
/* 		}*/
/* */
/* 		return view.getComputedStyle( elem );*/
/* 	};*/
/* */
/* 	curCSS = function( elem, name, computed ) {*/
/* 		var width, minWidth, maxWidth, ret,*/
/* 			style = elem.style;*/
/* */
/* 		computed = computed || getStyles( elem );*/
/* */
/* 		// getPropertyValue is only needed for .css('filter') in IE9, see #12537*/
/* 		ret = computed ? computed.getPropertyValue( name ) || computed[ name ] : undefined;*/
/* */
/* 		// Support: Opera 12.1x only*/
/* 		// Fall back to style even without computed*/
/* 		// computed is undefined for elems on document fragments*/
/* 		if ( ( ret === "" || ret === undefined ) && !jQuery.contains( elem.ownerDocument, elem ) ) {*/
/* 			ret = jQuery.style( elem, name );*/
/* 		}*/
/* */
/* 		if ( computed ) {*/
/* */
/* 			// A tribute to the "awesome hack by Dean Edwards"*/
/* 			// Chrome < 17 and Safari 5.0 uses "computed value"*/
/* 			// instead of "used value" for margin-right*/
/* 			// Safari 5.1.7 (at least) returns percentage for a larger set of values,*/
/* 			// but width seems to be reliably pixels*/
/* 			// this is against the CSSOM draft spec:*/
/* 			// http://dev.w3.org/csswg/cssom/#resolved-values*/
/* 			if ( !support.pixelMarginRight() && rnumnonpx.test( ret ) && rmargin.test( name ) ) {*/
/* */
/* 				// Remember the original values*/
/* 				width = style.width;*/
/* 				minWidth = style.minWidth;*/
/* 				maxWidth = style.maxWidth;*/
/* */
/* 				// Put in the new values to get a computed value out*/
/* 				style.minWidth = style.maxWidth = style.width = ret;*/
/* 				ret = computed.width;*/
/* */
/* 				// Revert the changed values*/
/* 				style.width = width;*/
/* 				style.minWidth = minWidth;*/
/* 				style.maxWidth = maxWidth;*/
/* 			}*/
/* 		}*/
/* */
/* 		// Support: IE*/
/* 		// IE returns zIndex value as an integer.*/
/* 		return ret === undefined ?*/
/* 			ret :*/
/* 			ret + "";*/
/* 	};*/
/* } else if ( documentElement.currentStyle ) {*/
/* 	getStyles = function( elem ) {*/
/* 		return elem.currentStyle;*/
/* 	};*/
/* */
/* 	curCSS = function( elem, name, computed ) {*/
/* 		var left, rs, rsLeft, ret,*/
/* 			style = elem.style;*/
/* */
/* 		computed = computed || getStyles( elem );*/
/* 		ret = computed ? computed[ name ] : undefined;*/
/* */
/* 		// Avoid setting ret to empty string here*/
/* 		// so we don't default to auto*/
/* 		if ( ret == null && style && style[ name ] ) {*/
/* 			ret = style[ name ];*/
/* 		}*/
/* */
/* 		// From the awesome hack by Dean Edwards*/
/* 		// http://erik.eae.net/archives/2007/07/27/18.54.15/#comment-102291*/
/* */
/* 		// If we're not dealing with a regular pixel number*/
/* 		// but a number that has a weird ending, we need to convert it to pixels*/
/* 		// but not position css attributes, as those are*/
/* 		// proportional to the parent element instead*/
/* 		// and we can't measure the parent instead because it*/
/* 		// might trigger a "stacking dolls" problem*/
/* 		if ( rnumnonpx.test( ret ) && !rposition.test( name ) ) {*/
/* */
/* 			// Remember the original values*/
/* 			left = style.left;*/
/* 			rs = elem.runtimeStyle;*/
/* 			rsLeft = rs && rs.left;*/
/* */
/* 			// Put in the new values to get a computed value out*/
/* 			if ( rsLeft ) {*/
/* 				rs.left = elem.currentStyle.left;*/
/* 			}*/
/* 			style.left = name === "fontSize" ? "1em" : ret;*/
/* 			ret = style.pixelLeft + "px";*/
/* */
/* 			// Revert the changed values*/
/* 			style.left = left;*/
/* 			if ( rsLeft ) {*/
/* 				rs.left = rsLeft;*/
/* 			}*/
/* 		}*/
/* */
/* 		// Support: IE*/
/* 		// IE returns zIndex value as an integer.*/
/* 		return ret === undefined ?*/
/* 			ret :*/
/* 			ret + "" || "auto";*/
/* 	};*/
/* }*/
/* */
/* */
/* */
/* */
/* function addGetHookIf( conditionFn, hookFn ) {*/
/* */
/* 	// Define the hook, we'll check on the first run if it's really needed.*/
/* 	return {*/
/* 		get: function() {*/
/* 			if ( conditionFn() ) {*/
/* */
/* 				// Hook not needed (or it's not possible to use it due*/
/* 				// to missing dependency), remove it.*/
/* 				delete this.get;*/
/* 				return;*/
/* 			}*/
/* */
/* 			// Hook needed; redefine it so that the support test is not executed again.*/
/* 			return ( this.get = hookFn ).apply( this, arguments );*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* */
/* var*/
/* */
/* 		ralpha = /alpha\([^)]*\)/i,*/
/* 	ropacity = /opacity\s*=\s*([^)]*)/i,*/
/* */
/* 	// swappable if display is none or starts with table except*/
/* 	// "table", "table-cell", or "table-caption"*/
/* 	// see here for display values:*/
/* 	// https://developer.mozilla.org/en-US/docs/CSS/display*/
/* 	rdisplayswap = /^(none|table(?!-c[ea]).+)/,*/
/* 	rnumsplit = new RegExp( "^(" + pnum + ")(.*)$", "i" ),*/
/* */
/* 	cssShow = { position: "absolute", visibility: "hidden", display: "block" },*/
/* 	cssNormalTransform = {*/
/* 		letterSpacing: "0",*/
/* 		fontWeight: "400"*/
/* 	},*/
/* */
/* 	cssPrefixes = [ "Webkit", "O", "Moz", "ms" ],*/
/* 	emptyStyle = document.createElement( "div" ).style;*/
/* */
/* */
/* // return a css property mapped to a potentially vendor prefixed property*/
/* function vendorPropName( name ) {*/
/* */
/* 	// shortcut for names that are not vendor prefixed*/
/* 	if ( name in emptyStyle ) {*/
/* 		return name;*/
/* 	}*/
/* */
/* 	// check for vendor prefixed names*/
/* 	var capName = name.charAt( 0 ).toUpperCase() + name.slice( 1 ),*/
/* 		i = cssPrefixes.length;*/
/* */
/* 	while ( i-- ) {*/
/* 		name = cssPrefixes[ i ] + capName;*/
/* 		if ( name in emptyStyle ) {*/
/* 			return name;*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* function showHide( elements, show ) {*/
/* 	var display, elem, hidden,*/
/* 		values = [],*/
/* 		index = 0,*/
/* 		length = elements.length;*/
/* */
/* 	for ( ; index < length; index++ ) {*/
/* 		elem = elements[ index ];*/
/* 		if ( !elem.style ) {*/
/* 			continue;*/
/* 		}*/
/* */
/* 		values[ index ] = jQuery._data( elem, "olddisplay" );*/
/* 		display = elem.style.display;*/
/* 		if ( show ) {*/
/* */
/* 			// Reset the inline display of this element to learn if it is*/
/* 			// being hidden by cascaded rules or not*/
/* 			if ( !values[ index ] && display === "none" ) {*/
/* 				elem.style.display = "";*/
/* 			}*/
/* */
/* 			// Set elements which have been overridden with display: none*/
/* 			// in a stylesheet to whatever the default browser style is*/
/* 			// for such an element*/
/* 			if ( elem.style.display === "" && isHidden( elem ) ) {*/
/* 				values[ index ] =*/
/* 					jQuery._data( elem, "olddisplay", defaultDisplay( elem.nodeName ) );*/
/* 			}*/
/* 		} else {*/
/* 			hidden = isHidden( elem );*/
/* */
/* 			if ( display && display !== "none" || !hidden ) {*/
/* 				jQuery._data(*/
/* 					elem,*/
/* 					"olddisplay",*/
/* 					hidden ? display : jQuery.css( elem, "display" )*/
/* 				);*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// Set the display of most of the elements in a second loop*/
/* 	// to avoid the constant reflow*/
/* 	for ( index = 0; index < length; index++ ) {*/
/* 		elem = elements[ index ];*/
/* 		if ( !elem.style ) {*/
/* 			continue;*/
/* 		}*/
/* 		if ( !show || elem.style.display === "none" || elem.style.display === "" ) {*/
/* 			elem.style.display = show ? values[ index ] || "" : "none";*/
/* 		}*/
/* 	}*/
/* */
/* 	return elements;*/
/* }*/
/* */
/* function setPositiveNumber( elem, value, subtract ) {*/
/* 	var matches = rnumsplit.exec( value );*/
/* 	return matches ?*/
/* */
/* 		// Guard against undefined "subtract", e.g., when used as in cssHooks*/
/* 		Math.max( 0, matches[ 1 ] - ( subtract || 0 ) ) + ( matches[ 2 ] || "px" ) :*/
/* 		value;*/
/* }*/
/* */
/* function augmentWidthOrHeight( elem, name, extra, isBorderBox, styles ) {*/
/* 	var i = extra === ( isBorderBox ? "border" : "content" ) ?*/
/* */
/* 		// If we already have the right measurement, avoid augmentation*/
/* 		4 :*/
/* */
/* 		// Otherwise initialize for horizontal or vertical properties*/
/* 		name === "width" ? 1 : 0,*/
/* */
/* 		val = 0;*/
/* */
/* 	for ( ; i < 4; i += 2 ) {*/
/* */
/* 		// both box models exclude margin, so add it if we want it*/
/* 		if ( extra === "margin" ) {*/
/* 			val += jQuery.css( elem, extra + cssExpand[ i ], true, styles );*/
/* 		}*/
/* */
/* 		if ( isBorderBox ) {*/
/* */
/* 			// border-box includes padding, so remove it if we want content*/
/* 			if ( extra === "content" ) {*/
/* 				val -= jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );*/
/* 			}*/
/* */
/* 			// at this point, extra isn't border nor margin, so remove border*/
/* 			if ( extra !== "margin" ) {*/
/* 				val -= jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );*/
/* 			}*/
/* 		} else {*/
/* */
/* 			// at this point, extra isn't content, so add padding*/
/* 			val += jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );*/
/* */
/* 			// at this point, extra isn't content nor padding, so add border*/
/* 			if ( extra !== "padding" ) {*/
/* 				val += jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	return val;*/
/* }*/
/* */
/* function getWidthOrHeight( elem, name, extra ) {*/
/* */
/* 	// Start with offset property, which is equivalent to the border-box value*/
/* 	var valueIsBorderBox = true,*/
/* 		val = name === "width" ? elem.offsetWidth : elem.offsetHeight,*/
/* 		styles = getStyles( elem ),*/
/* 		isBorderBox = support.boxSizing &&*/
/* 			jQuery.css( elem, "boxSizing", false, styles ) === "border-box";*/
/* */
/* 	// some non-html elements return undefined for offsetWidth, so check for null/undefined*/
/* 	// svg - https://bugzilla.mozilla.org/show_bug.cgi?id=649285*/
/* 	// MathML - https://bugzilla.mozilla.org/show_bug.cgi?id=491668*/
/* 	if ( val <= 0 || val == null ) {*/
/* */
/* 		// Fall back to computed then uncomputed css if necessary*/
/* 		val = curCSS( elem, name, styles );*/
/* 		if ( val < 0 || val == null ) {*/
/* 			val = elem.style[ name ];*/
/* 		}*/
/* */
/* 		// Computed unit is not pixels. Stop here and return.*/
/* 		if ( rnumnonpx.test( val ) ) {*/
/* 			return val;*/
/* 		}*/
/* */
/* 		// we need the check for style in case a browser which returns unreliable values*/
/* 		// for getComputedStyle silently falls back to the reliable elem.style*/
/* 		valueIsBorderBox = isBorderBox &&*/
/* 			( support.boxSizingReliable() || val === elem.style[ name ] );*/
/* */
/* 		// Normalize "", auto, and prepare for extra*/
/* 		val = parseFloat( val ) || 0;*/
/* 	}*/
/* */
/* 	// use the active box-sizing model to add/subtract irrelevant styles*/
/* 	return ( val +*/
/* 		augmentWidthOrHeight(*/
/* 			elem,*/
/* 			name,*/
/* 			extra || ( isBorderBox ? "border" : "content" ),*/
/* 			valueIsBorderBox,*/
/* 			styles*/
/* 		)*/
/* 	) + "px";*/
/* }*/
/* */
/* jQuery.extend( {*/
/* */
/* 	// Add in style property hooks for overriding the default*/
/* 	// behavior of getting and setting a style property*/
/* 	cssHooks: {*/
/* 		opacity: {*/
/* 			get: function( elem, computed ) {*/
/* 				if ( computed ) {*/
/* */
/* 					// We should always get a number back from opacity*/
/* 					var ret = curCSS( elem, "opacity" );*/
/* 					return ret === "" ? "1" : ret;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	},*/
/* */
/* 	// Don't automatically add "px" to these possibly-unitless properties*/
/* 	cssNumber: {*/
/* 		"animationIterationCount": true,*/
/* 		"columnCount": true,*/
/* 		"fillOpacity": true,*/
/* 		"flexGrow": true,*/
/* 		"flexShrink": true,*/
/* 		"fontWeight": true,*/
/* 		"lineHeight": true,*/
/* 		"opacity": true,*/
/* 		"order": true,*/
/* 		"orphans": true,*/
/* 		"widows": true,*/
/* 		"zIndex": true,*/
/* 		"zoom": true*/
/* 	},*/
/* */
/* 	// Add in properties whose names you wish to fix before*/
/* 	// setting or getting the value*/
/* 	cssProps: {*/
/* */
/* 		// normalize float css property*/
/* 		"float": support.cssFloat ? "cssFloat" : "styleFloat"*/
/* 	},*/
/* */
/* 	// Get and set the style property on a DOM Node*/
/* 	style: function( elem, name, value, extra ) {*/
/* */
/* 		// Don't set styles on text and comment nodes*/
/* 		if ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Make sure that we're working with the right name*/
/* 		var ret, type, hooks,*/
/* 			origName = jQuery.camelCase( name ),*/
/* 			style = elem.style;*/
/* */
/* 		name = jQuery.cssProps[ origName ] ||*/
/* 			( jQuery.cssProps[ origName ] = vendorPropName( origName ) || origName );*/
/* */
/* 		// gets hook for the prefixed version*/
/* 		// followed by the unprefixed version*/
/* 		hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];*/
/* */
/* 		// Check if we're setting a value*/
/* 		if ( value !== undefined ) {*/
/* 			type = typeof value;*/
/* */
/* 			// Convert "+=" or "-=" to relative numbers (#7345)*/
/* 			if ( type === "string" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {*/
/* 				value = adjustCSS( elem, name, ret );*/
/* */
/* 				// Fixes bug #9237*/
/* 				type = "number";*/
/* 			}*/
/* */
/* 			// Make sure that null and NaN values aren't set. See: #7116*/
/* 			if ( value == null || value !== value ) {*/
/* 				return;*/
/* 			}*/
/* */
/* 			// If a number was passed in, add the unit (except for certain CSS properties)*/
/* 			if ( type === "number" ) {*/
/* 				value += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? "" : "px" );*/
/* 			}*/
/* */
/* 			// Fixes #8908, it can be done more correctly by specifing setters in cssHooks,*/
/* 			// but it would mean to define eight*/
/* 			// (for every problematic property) identical functions*/
/* 			if ( !support.clearCloneStyle && value === "" && name.indexOf( "background" ) === 0 ) {*/
/* 				style[ name ] = "inherit";*/
/* 			}*/
/* */
/* 			// If a hook was provided, use that value, otherwise just set the specified value*/
/* 			if ( !hooks || !( "set" in hooks ) ||*/
/* 				( value = hooks.set( elem, value, extra ) ) !== undefined ) {*/
/* */
/* 				// Support: IE*/
/* 				// Swallow errors from 'invalid' CSS values (#5509)*/
/* 				try {*/
/* 					style[ name ] = value;*/
/* 				} catch ( e ) {}*/
/* 			}*/
/* */
/* 		} else {*/
/* */
/* 			// If a hook was provided get the non-computed value from there*/
/* 			if ( hooks && "get" in hooks &&*/
/* 				( ret = hooks.get( elem, false, extra ) ) !== undefined ) {*/
/* */
/* 				return ret;*/
/* 			}*/
/* */
/* 			// Otherwise just get the value from the style object*/
/* 			return style[ name ];*/
/* 		}*/
/* 	},*/
/* */
/* 	css: function( elem, name, extra, styles ) {*/
/* 		var num, val, hooks,*/
/* 			origName = jQuery.camelCase( name );*/
/* */
/* 		// Make sure that we're working with the right name*/
/* 		name = jQuery.cssProps[ origName ] ||*/
/* 			( jQuery.cssProps[ origName ] = vendorPropName( origName ) || origName );*/
/* */
/* 		// gets hook for the prefixed version*/
/* 		// followed by the unprefixed version*/
/* 		hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];*/
/* */
/* 		// If a hook was provided get the computed value from there*/
/* 		if ( hooks && "get" in hooks ) {*/
/* 			val = hooks.get( elem, true, extra );*/
/* 		}*/
/* */
/* 		// Otherwise, if a way to get the computed value exists, use that*/
/* 		if ( val === undefined ) {*/
/* 			val = curCSS( elem, name, styles );*/
/* 		}*/
/* */
/* 		//convert "normal" to computed value*/
/* 		if ( val === "normal" && name in cssNormalTransform ) {*/
/* 			val = cssNormalTransform[ name ];*/
/* 		}*/
/* */
/* 		// Return, converting to number if forced or a qualifier was provided and val looks numeric*/
/* 		if ( extra === "" || extra ) {*/
/* 			num = parseFloat( val );*/
/* 			return extra === true || isFinite( num ) ? num || 0 : val;*/
/* 		}*/
/* 		return val;*/
/* 	}*/
/* } );*/
/* */
/* jQuery.each( [ "height", "width" ], function( i, name ) {*/
/* 	jQuery.cssHooks[ name ] = {*/
/* 		get: function( elem, computed, extra ) {*/
/* 			if ( computed ) {*/
/* */
/* 				// certain elements can have dimension info if we invisibly show them*/
/* 				// however, it must have a current display style that would benefit from this*/
/* 				return rdisplayswap.test( jQuery.css( elem, "display" ) ) &&*/
/* 					elem.offsetWidth === 0 ?*/
/* 						swap( elem, cssShow, function() {*/
/* 							return getWidthOrHeight( elem, name, extra );*/
/* 						} ) :*/
/* 						getWidthOrHeight( elem, name, extra );*/
/* 			}*/
/* 		},*/
/* */
/* 		set: function( elem, value, extra ) {*/
/* 			var styles = extra && getStyles( elem );*/
/* 			return setPositiveNumber( elem, value, extra ?*/
/* 				augmentWidthOrHeight(*/
/* 					elem,*/
/* 					name,*/
/* 					extra,*/
/* 					support.boxSizing &&*/
/* 						jQuery.css( elem, "boxSizing", false, styles ) === "border-box",*/
/* 					styles*/
/* 				) : 0*/
/* 			);*/
/* 		}*/
/* 	};*/
/* } );*/
/* */
/* if ( !support.opacity ) {*/
/* 	jQuery.cssHooks.opacity = {*/
/* 		get: function( elem, computed ) {*/
/* */
/* 			// IE uses filters for opacity*/
/* 			return ropacity.test( ( computed && elem.currentStyle ?*/
/* 				elem.currentStyle.filter :*/
/* 				elem.style.filter ) || "" ) ?*/
/* 					( 0.01 * parseFloat( RegExp.$1 ) ) + "" :*/
/* 					computed ? "1" : "";*/
/* 		},*/
/* */
/* 		set: function( elem, value ) {*/
/* 			var style = elem.style,*/
/* 				currentStyle = elem.currentStyle,*/
/* 				opacity = jQuery.isNumeric( value ) ? "alpha(opacity=" + value * 100 + ")" : "",*/
/* 				filter = currentStyle && currentStyle.filter || style.filter || "";*/
/* */
/* 			// IE has trouble with opacity if it does not have layout*/
/* 			// Force it by setting the zoom level*/
/* 			style.zoom = 1;*/
/* */
/* 			// if setting opacity to 1, and no other filters exist -*/
/* 			// attempt to remove filter attribute #6652*/
/* 			// if value === "", then remove inline opacity #12685*/
/* 			if ( ( value >= 1 || value === "" ) &&*/
/* 					jQuery.trim( filter.replace( ralpha, "" ) ) === "" &&*/
/* 					style.removeAttribute ) {*/
/* */
/* 				// Setting style.filter to null, "" & " " still leave "filter:" in the cssText*/
/* 				// if "filter:" is present at all, clearType is disabled, we want to avoid this*/
/* 				// style.removeAttribute is IE Only, but so apparently is this code path...*/
/* 				style.removeAttribute( "filter" );*/
/* */
/* 				// if there is no filter style applied in a css rule*/
/* 				// or unset inline opacity, we are done*/
/* 				if ( value === "" || currentStyle && !currentStyle.filter ) {*/
/* 					return;*/
/* 				}*/
/* 			}*/
/* */
/* 			// otherwise, set new filter values*/
/* 			style.filter = ralpha.test( filter ) ?*/
/* 				filter.replace( ralpha, opacity ) :*/
/* 				filter + " " + opacity;*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* jQuery.cssHooks.marginRight = addGetHookIf( support.reliableMarginRight,*/
/* 	function( elem, computed ) {*/
/* 		if ( computed ) {*/
/* 			return swap( elem, { "display": "inline-block" },*/
/* 				curCSS, [ elem, "marginRight" ] );*/
/* 		}*/
/* 	}*/
/* );*/
/* */
/* jQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,*/
/* 	function( elem, computed ) {*/
/* 		if ( computed ) {*/
/* 			return (*/
/* 				parseFloat( curCSS( elem, "marginLeft" ) ) ||*/
/* */
/* 				// Support: IE<=11+*/
/* 				// Running getBoundingClientRect on a disconnected node in IE throws an error*/
/* 				// Support: IE8 only*/
/* 				// getClientRects() errors on disconnected elems*/
/* 				( jQuery.contains( elem.ownerDocument, elem ) ?*/
/* 					elem.getBoundingClientRect().left -*/
/* 						swap( elem, { marginLeft: 0 }, function() {*/
/* 							return elem.getBoundingClientRect().left;*/
/* 						} ) :*/
/* 					0*/
/* 				)*/
/* 			) + "px";*/
/* 		}*/
/* 	}*/
/* );*/
/* */
/* // These hooks are used by animate to expand properties*/
/* jQuery.each( {*/
/* 	margin: "",*/
/* 	padding: "",*/
/* 	border: "Width"*/
/* }, function( prefix, suffix ) {*/
/* 	jQuery.cssHooks[ prefix + suffix ] = {*/
/* 		expand: function( value ) {*/
/* 			var i = 0,*/
/* 				expanded = {},*/
/* */
/* 				// assumes a single number if not a string*/
/* 				parts = typeof value === "string" ? value.split( " " ) : [ value ];*/
/* */
/* 			for ( ; i < 4; i++ ) {*/
/* 				expanded[ prefix + cssExpand[ i ] + suffix ] =*/
/* 					parts[ i ] || parts[ i - 2 ] || parts[ 0 ];*/
/* 			}*/
/* */
/* 			return expanded;*/
/* 		}*/
/* 	};*/
/* */
/* 	if ( !rmargin.test( prefix ) ) {*/
/* 		jQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;*/
/* 	}*/
/* } );*/
/* */
/* jQuery.fn.extend( {*/
/* 	css: function( name, value ) {*/
/* 		return access( this, function( elem, name, value ) {*/
/* 			var styles, len,*/
/* 				map = {},*/
/* 				i = 0;*/
/* */
/* 			if ( jQuery.isArray( name ) ) {*/
/* 				styles = getStyles( elem );*/
/* 				len = name.length;*/
/* */
/* 				for ( ; i < len; i++ ) {*/
/* 					map[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );*/
/* 				}*/
/* */
/* 				return map;*/
/* 			}*/
/* */
/* 			return value !== undefined ?*/
/* 				jQuery.style( elem, name, value ) :*/
/* 				jQuery.css( elem, name );*/
/* 		}, name, value, arguments.length > 1 );*/
/* 	},*/
/* 	show: function() {*/
/* 		return showHide( this, true );*/
/* 	},*/
/* 	hide: function() {*/
/* 		return showHide( this );*/
/* 	},*/
/* 	toggle: function( state ) {*/
/* 		if ( typeof state === "boolean" ) {*/
/* 			return state ? this.show() : this.hide();*/
/* 		}*/
/* */
/* 		return this.each( function() {*/
/* 			if ( isHidden( this ) ) {*/
/* 				jQuery( this ).show();*/
/* 			} else {*/
/* 				jQuery( this ).hide();*/
/* 			}*/
/* 		} );*/
/* 	}*/
/* } );*/
/* */
/* */
/* function Tween( elem, options, prop, end, easing ) {*/
/* 	return new Tween.prototype.init( elem, options, prop, end, easing );*/
/* }*/
/* jQuery.Tween = Tween;*/
/* */
/* Tween.prototype = {*/
/* 	constructor: Tween,*/
/* 	init: function( elem, options, prop, end, easing, unit ) {*/
/* 		this.elem = elem;*/
/* 		this.prop = prop;*/
/* 		this.easing = easing || jQuery.easing._default;*/
/* 		this.options = options;*/
/* 		this.start = this.now = this.cur();*/
/* 		this.end = end;*/
/* 		this.unit = unit || ( jQuery.cssNumber[ prop ] ? "" : "px" );*/
/* 	},*/
/* 	cur: function() {*/
/* 		var hooks = Tween.propHooks[ this.prop ];*/
/* */
/* 		return hooks && hooks.get ?*/
/* 			hooks.get( this ) :*/
/* 			Tween.propHooks._default.get( this );*/
/* 	},*/
/* 	run: function( percent ) {*/
/* 		var eased,*/
/* 			hooks = Tween.propHooks[ this.prop ];*/
/* */
/* 		if ( this.options.duration ) {*/
/* 			this.pos = eased = jQuery.easing[ this.easing ](*/
/* 				percent, this.options.duration * percent, 0, 1, this.options.duration*/
/* 			);*/
/* 		} else {*/
/* 			this.pos = eased = percent;*/
/* 		}*/
/* 		this.now = ( this.end - this.start ) * eased + this.start;*/
/* */
/* 		if ( this.options.step ) {*/
/* 			this.options.step.call( this.elem, this.now, this );*/
/* 		}*/
/* */
/* 		if ( hooks && hooks.set ) {*/
/* 			hooks.set( this );*/
/* 		} else {*/
/* 			Tween.propHooks._default.set( this );*/
/* 		}*/
/* 		return this;*/
/* 	}*/
/* };*/
/* */
/* Tween.prototype.init.prototype = Tween.prototype;*/
/* */
/* Tween.propHooks = {*/
/* 	_default: {*/
/* 		get: function( tween ) {*/
/* 			var result;*/
/* */
/* 			// Use a property on the element directly when it is not a DOM element,*/
/* 			// or when there is no matching style property that exists.*/
/* 			if ( tween.elem.nodeType !== 1 ||*/
/* 				tween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {*/
/* 				return tween.elem[ tween.prop ];*/
/* 			}*/
/* */
/* 			// passing an empty string as a 3rd parameter to .css will automatically*/
/* 			// attempt a parseFloat and fallback to a string if the parse fails*/
/* 			// so, simple values such as "10px" are parsed to Float.*/
/* 			// complex values such as "rotate(1rad)" are returned as is.*/
/* 			result = jQuery.css( tween.elem, tween.prop, "" );*/
/* */
/* 			// Empty strings, null, undefined and "auto" are converted to 0.*/
/* 			return !result || result === "auto" ? 0 : result;*/
/* 		},*/
/* 		set: function( tween ) {*/
/* */
/* 			// use step hook for back compat - use cssHook if its there - use .style if its*/
/* 			// available and use plain properties where available*/
/* 			if ( jQuery.fx.step[ tween.prop ] ) {*/
/* 				jQuery.fx.step[ tween.prop ]( tween );*/
/* 			} else if ( tween.elem.nodeType === 1 &&*/
/* 				( tween.elem.style[ jQuery.cssProps[ tween.prop ] ] != null ||*/
/* 					jQuery.cssHooks[ tween.prop ] ) ) {*/
/* 				jQuery.style( tween.elem, tween.prop, tween.now + tween.unit );*/
/* 			} else {*/
/* 				tween.elem[ tween.prop ] = tween.now;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* };*/
/* */
/* // Support: IE <=9*/
/* // Panic based approach to setting things on disconnected nodes*/
/* */
/* Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {*/
/* 	set: function( tween ) {*/
/* 		if ( tween.elem.nodeType && tween.elem.parentNode ) {*/
/* 			tween.elem[ tween.prop ] = tween.now;*/
/* 		}*/
/* 	}*/
/* };*/
/* */
/* jQuery.easing = {*/
/* 	linear: function( p ) {*/
/* 		return p;*/
/* 	},*/
/* 	swing: function( p ) {*/
/* 		return 0.5 - Math.cos( p * Math.PI ) / 2;*/
/* 	},*/
/* 	_default: "swing"*/
/* };*/
/* */
/* jQuery.fx = Tween.prototype.init;*/
/* */
/* // Back Compat <1.8 extension point*/
/* jQuery.fx.step = {};*/
/* */
/* */
/* */
/* */
/* var*/
/* 	fxNow, timerId,*/
/* 	rfxtypes = /^(?:toggle|show|hide)$/,*/
/* 	rrun = /queueHooks$/;*/
/* */
/* // Animations created synchronously will run synchronously*/
/* function createFxNow() {*/
/* 	window.setTimeout( function() {*/
/* 		fxNow = undefined;*/
/* 	} );*/
/* 	return ( fxNow = jQuery.now() );*/
/* }*/
/* */
/* // Generate parameters to create a standard animation*/
/* function genFx( type, includeWidth ) {*/
/* 	var which,*/
/* 		attrs = { height: type },*/
/* 		i = 0;*/
/* */
/* 	// if we include width, step value is 1 to do all cssExpand values,*/
/* 	// if we don't include width, step value is 2 to skip over Left and Right*/
/* 	includeWidth = includeWidth ? 1 : 0;*/
/* 	for ( ; i < 4 ; i += 2 - includeWidth ) {*/
/* 		which = cssExpand[ i ];*/
/* 		attrs[ "margin" + which ] = attrs[ "padding" + which ] = type;*/
/* 	}*/
/* */
/* 	if ( includeWidth ) {*/
/* 		attrs.opacity = attrs.width = type;*/
/* 	}*/
/* */
/* 	return attrs;*/
/* }*/
/* */
/* function createTween( value, prop, animation ) {*/
/* 	var tween,*/
/* 		collection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ "*" ] ),*/
/* 		index = 0,*/
/* 		length = collection.length;*/
/* 	for ( ; index < length; index++ ) {*/
/* 		if ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {*/
/* */
/* 			// we're done with this property*/
/* 			return tween;*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* function defaultPrefilter( elem, props, opts ) {*/
/* 	/* jshint validthis: true *//* */
/* 	var prop, value, toggle, tween, hooks, oldfire, display, checkDisplay,*/
/* 		anim = this,*/
/* 		orig = {},*/
/* 		style = elem.style,*/
/* 		hidden = elem.nodeType && isHidden( elem ),*/
/* 		dataShow = jQuery._data( elem, "fxshow" );*/
/* */
/* 	// handle queue: false promises*/
/* 	if ( !opts.queue ) {*/
/* 		hooks = jQuery._queueHooks( elem, "fx" );*/
/* 		if ( hooks.unqueued == null ) {*/
/* 			hooks.unqueued = 0;*/
/* 			oldfire = hooks.empty.fire;*/
/* 			hooks.empty.fire = function() {*/
/* 				if ( !hooks.unqueued ) {*/
/* 					oldfire();*/
/* 				}*/
/* 			};*/
/* 		}*/
/* 		hooks.unqueued++;*/
/* */
/* 		anim.always( function() {*/
/* */
/* 			// doing this makes sure that the complete handler will be called*/
/* 			// before this completes*/
/* 			anim.always( function() {*/
/* 				hooks.unqueued--;*/
/* 				if ( !jQuery.queue( elem, "fx" ).length ) {*/
/* 					hooks.empty.fire();*/
/* 				}*/
/* 			} );*/
/* 		} );*/
/* 	}*/
/* */
/* 	// height/width overflow pass*/
/* 	if ( elem.nodeType === 1 && ( "height" in props || "width" in props ) ) {*/
/* */
/* 		// Make sure that nothing sneaks out*/
/* 		// Record all 3 overflow attributes because IE does not*/
/* 		// change the overflow attribute when overflowX and*/
/* 		// overflowY are set to the same value*/
/* 		opts.overflow = [ style.overflow, style.overflowX, style.overflowY ];*/
/* */
/* 		// Set display property to inline-block for height/width*/
/* 		// animations on inline elements that are having width/height animated*/
/* 		display = jQuery.css( elem, "display" );*/
/* */
/* 		// Test default display if display is currently "none"*/
/* 		checkDisplay = display === "none" ?*/
/* 			jQuery._data( elem, "olddisplay" ) || defaultDisplay( elem.nodeName ) : display;*/
/* */
/* 		if ( checkDisplay === "inline" && jQuery.css( elem, "float" ) === "none" ) {*/
/* */
/* 			// inline-level elements accept inline-block;*/
/* 			// block-level elements need to be inline with layout*/
/* 			if ( !support.inlineBlockNeedsLayout || defaultDisplay( elem.nodeName ) === "inline" ) {*/
/* 				style.display = "inline-block";*/
/* 			} else {*/
/* 				style.zoom = 1;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	if ( opts.overflow ) {*/
/* 		style.overflow = "hidden";*/
/* 		if ( !support.shrinkWrapBlocks() ) {*/
/* 			anim.always( function() {*/
/* 				style.overflow = opts.overflow[ 0 ];*/
/* 				style.overflowX = opts.overflow[ 1 ];*/
/* 				style.overflowY = opts.overflow[ 2 ];*/
/* 			} );*/
/* 		}*/
/* 	}*/
/* */
/* 	// show/hide pass*/
/* 	for ( prop in props ) {*/
/* 		value = props[ prop ];*/
/* 		if ( rfxtypes.exec( value ) ) {*/
/* 			delete props[ prop ];*/
/* 			toggle = toggle || value === "toggle";*/
/* 			if ( value === ( hidden ? "hide" : "show" ) ) {*/
/* */
/* 				// If there is dataShow left over from a stopped hide or show*/
/* 				// and we are going to proceed with show, we should pretend to be hidden*/
/* 				if ( value === "show" && dataShow && dataShow[ prop ] !== undefined ) {*/
/* 					hidden = true;*/
/* 				} else {*/
/* 					continue;*/
/* 				}*/
/* 			}*/
/* 			orig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );*/
/* */
/* 		// Any non-fx value stops us from restoring the original display value*/
/* 		} else {*/
/* 			display = undefined;*/
/* 		}*/
/* 	}*/
/* */
/* 	if ( !jQuery.isEmptyObject( orig ) ) {*/
/* 		if ( dataShow ) {*/
/* 			if ( "hidden" in dataShow ) {*/
/* 				hidden = dataShow.hidden;*/
/* 			}*/
/* 		} else {*/
/* 			dataShow = jQuery._data( elem, "fxshow", {} );*/
/* 		}*/
/* */
/* 		// store state if its toggle - enables .stop().toggle() to "reverse"*/
/* 		if ( toggle ) {*/
/* 			dataShow.hidden = !hidden;*/
/* 		}*/
/* 		if ( hidden ) {*/
/* 			jQuery( elem ).show();*/
/* 		} else {*/
/* 			anim.done( function() {*/
/* 				jQuery( elem ).hide();*/
/* 			} );*/
/* 		}*/
/* 		anim.done( function() {*/
/* 			var prop;*/
/* 			jQuery._removeData( elem, "fxshow" );*/
/* 			for ( prop in orig ) {*/
/* 				jQuery.style( elem, prop, orig[ prop ] );*/
/* 			}*/
/* 		} );*/
/* 		for ( prop in orig ) {*/
/* 			tween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );*/
/* */
/* 			if ( !( prop in dataShow ) ) {*/
/* 				dataShow[ prop ] = tween.start;*/
/* 				if ( hidden ) {*/
/* 					tween.end = tween.start;*/
/* 					tween.start = prop === "width" || prop === "height" ? 1 : 0;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 	// If this is a noop like .hide().hide(), restore an overwritten display value*/
/* 	} else if ( ( display === "none" ? defaultDisplay( elem.nodeName ) : display ) === "inline" ) {*/
/* 		style.display = display;*/
/* 	}*/
/* }*/
/* */
/* function propFilter( props, specialEasing ) {*/
/* 	var index, name, easing, value, hooks;*/
/* */
/* 	// camelCase, specialEasing and expand cssHook pass*/
/* 	for ( index in props ) {*/
/* 		name = jQuery.camelCase( index );*/
/* 		easing = specialEasing[ name ];*/
/* 		value = props[ index ];*/
/* 		if ( jQuery.isArray( value ) ) {*/
/* 			easing = value[ 1 ];*/
/* 			value = props[ index ] = value[ 0 ];*/
/* 		}*/
/* */
/* 		if ( index !== name ) {*/
/* 			props[ name ] = value;*/
/* 			delete props[ index ];*/
/* 		}*/
/* */
/* 		hooks = jQuery.cssHooks[ name ];*/
/* 		if ( hooks && "expand" in hooks ) {*/
/* 			value = hooks.expand( value );*/
/* 			delete props[ name ];*/
/* */
/* 			// not quite $.extend, this wont overwrite keys already present.*/
/* 			// also - reusing 'index' from above because we have the correct "name"*/
/* 			for ( index in value ) {*/
/* 				if ( !( index in props ) ) {*/
/* 					props[ index ] = value[ index ];*/
/* 					specialEasing[ index ] = easing;*/
/* 				}*/
/* 			}*/
/* 		} else {*/
/* 			specialEasing[ name ] = easing;*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* function Animation( elem, properties, options ) {*/
/* 	var result,*/
/* 		stopped,*/
/* 		index = 0,*/
/* 		length = Animation.prefilters.length,*/
/* 		deferred = jQuery.Deferred().always( function() {*/
/* */
/* 			// don't match elem in the :animated selector*/
/* 			delete tick.elem;*/
/* 		} ),*/
/* 		tick = function() {*/
/* 			if ( stopped ) {*/
/* 				return false;*/
/* 			}*/
/* 			var currentTime = fxNow || createFxNow(),*/
/* 				remaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),*/
/* */
/* 				// Support: Android 2.3*/
/* 				// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)*/
/* 				temp = remaining / animation.duration || 0,*/
/* 				percent = 1 - temp,*/
/* 				index = 0,*/
/* 				length = animation.tweens.length;*/
/* */
/* 			for ( ; index < length ; index++ ) {*/
/* 				animation.tweens[ index ].run( percent );*/
/* 			}*/
/* */
/* 			deferred.notifyWith( elem, [ animation, percent, remaining ] );*/
/* */
/* 			if ( percent < 1 && length ) {*/
/* 				return remaining;*/
/* 			} else {*/
/* 				deferred.resolveWith( elem, [ animation ] );*/
/* 				return false;*/
/* 			}*/
/* 		},*/
/* 		animation = deferred.promise( {*/
/* 			elem: elem,*/
/* 			props: jQuery.extend( {}, properties ),*/
/* 			opts: jQuery.extend( true, {*/
/* 				specialEasing: {},*/
/* 				easing: jQuery.easing._default*/
/* 			}, options ),*/
/* 			originalProperties: properties,*/
/* 			originalOptions: options,*/
/* 			startTime: fxNow || createFxNow(),*/
/* 			duration: options.duration,*/
/* 			tweens: [],*/
/* 			createTween: function( prop, end ) {*/
/* 				var tween = jQuery.Tween( elem, animation.opts, prop, end,*/
/* 						animation.opts.specialEasing[ prop ] || animation.opts.easing );*/
/* 				animation.tweens.push( tween );*/
/* 				return tween;*/
/* 			},*/
/* 			stop: function( gotoEnd ) {*/
/* 				var index = 0,*/
/* */
/* 					// if we are going to the end, we want to run all the tweens*/
/* 					// otherwise we skip this part*/
/* 					length = gotoEnd ? animation.tweens.length : 0;*/
/* 				if ( stopped ) {*/
/* 					return this;*/
/* 				}*/
/* 				stopped = true;*/
/* 				for ( ; index < length ; index++ ) {*/
/* 					animation.tweens[ index ].run( 1 );*/
/* 				}*/
/* */
/* 				// resolve when we played the last frame*/
/* 				// otherwise, reject*/
/* 				if ( gotoEnd ) {*/
/* 					deferred.notifyWith( elem, [ animation, 1, 0 ] );*/
/* 					deferred.resolveWith( elem, [ animation, gotoEnd ] );*/
/* 				} else {*/
/* 					deferred.rejectWith( elem, [ animation, gotoEnd ] );*/
/* 				}*/
/* 				return this;*/
/* 			}*/
/* 		} ),*/
/* 		props = animation.props;*/
/* */
/* 	propFilter( props, animation.opts.specialEasing );*/
/* */
/* 	for ( ; index < length ; index++ ) {*/
/* 		result = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );*/
/* 		if ( result ) {*/
/* 			if ( jQuery.isFunction( result.stop ) ) {*/
/* 				jQuery._queueHooks( animation.elem, animation.opts.queue ).stop =*/
/* 					jQuery.proxy( result.stop, result );*/
/* 			}*/
/* 			return result;*/
/* 		}*/
/* 	}*/
/* */
/* 	jQuery.map( props, createTween, animation );*/
/* */
/* 	if ( jQuery.isFunction( animation.opts.start ) ) {*/
/* 		animation.opts.start.call( elem, animation );*/
/* 	}*/
/* */
/* 	jQuery.fx.timer(*/
/* 		jQuery.extend( tick, {*/
/* 			elem: elem,*/
/* 			anim: animation,*/
/* 			queue: animation.opts.queue*/
/* 		} )*/
/* 	);*/
/* */
/* 	// attach callbacks from options*/
/* 	return animation.progress( animation.opts.progress )*/
/* 		.done( animation.opts.done, animation.opts.complete )*/
/* 		.fail( animation.opts.fail )*/
/* 		.always( animation.opts.always );*/
/* }*/
/* */
/* jQuery.Animation = jQuery.extend( Animation, {*/
/* */
/* 	tweeners: {*/
/* 		"*": [ function( prop, value ) {*/
/* 			var tween = this.createTween( prop, value );*/
/* 			adjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );*/
/* 			return tween;*/
/* 		} ]*/
/* 	},*/
/* */
/* 	tweener: function( props, callback ) {*/
/* 		if ( jQuery.isFunction( props ) ) {*/
/* 			callback = props;*/
/* 			props = [ "*" ];*/
/* 		} else {*/
/* 			props = props.match( rnotwhite );*/
/* 		}*/
/* */
/* 		var prop,*/
/* 			index = 0,*/
/* 			length = props.length;*/
/* */
/* 		for ( ; index < length ; index++ ) {*/
/* 			prop = props[ index ];*/
/* 			Animation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];*/
/* 			Animation.tweeners[ prop ].unshift( callback );*/
/* 		}*/
/* 	},*/
/* */
/* 	prefilters: [ defaultPrefilter ],*/
/* */
/* 	prefilter: function( callback, prepend ) {*/
/* 		if ( prepend ) {*/
/* 			Animation.prefilters.unshift( callback );*/
/* 		} else {*/
/* 			Animation.prefilters.push( callback );*/
/* 		}*/
/* 	}*/
/* } );*/
/* */
/* jQuery.speed = function( speed, easing, fn ) {*/
/* 	var opt = speed && typeof speed === "object" ? jQuery.extend( {}, speed ) : {*/
/* 		complete: fn || !fn && easing ||*/
/* 			jQuery.isFunction( speed ) && speed,*/
/* 		duration: speed,*/
/* 		easing: fn && easing || easing && !jQuery.isFunction( easing ) && easing*/
/* 	};*/
/* */
/* 	opt.duration = jQuery.fx.off ? 0 : typeof opt.duration === "number" ? opt.duration :*/
/* 		opt.duration in jQuery.fx.speeds ?*/
/* 			jQuery.fx.speeds[ opt.duration ] : jQuery.fx.speeds._default;*/
/* */
/* 	// normalize opt.queue - true/undefined/null -> "fx"*/
/* 	if ( opt.queue == null || opt.queue === true ) {*/
/* 		opt.queue = "fx";*/
/* 	}*/
/* */
/* 	// Queueing*/
/* 	opt.old = opt.complete;*/
/* */
/* 	opt.complete = function() {*/
/* 		if ( jQuery.isFunction( opt.old ) ) {*/
/* 			opt.old.call( this );*/
/* 		}*/
/* */
/* 		if ( opt.queue ) {*/
/* 			jQuery.dequeue( this, opt.queue );*/
/* 		}*/
/* 	};*/
/* */
/* 	return opt;*/
/* };*/
/* */
/* jQuery.fn.extend( {*/
/* 	fadeTo: function( speed, to, easing, callback ) {*/
/* */
/* 		// show any hidden elements after setting opacity to 0*/
/* 		return this.filter( isHidden ).css( "opacity", 0 ).show()*/
/* */
/* 			// animate to the value specified*/
/* 			.end().animate( { opacity: to }, speed, easing, callback );*/
/* 	},*/
/* 	animate: function( prop, speed, easing, callback ) {*/
/* 		var empty = jQuery.isEmptyObject( prop ),*/
/* 			optall = jQuery.speed( speed, easing, callback ),*/
/* 			doAnimation = function() {*/
/* */
/* 				// Operate on a copy of prop so per-property easing won't be lost*/
/* 				var anim = Animation( this, jQuery.extend( {}, prop ), optall );*/
/* */
/* 				// Empty animations, or finishing resolves immediately*/
/* 				if ( empty || jQuery._data( this, "finish" ) ) {*/
/* 					anim.stop( true );*/
/* 				}*/
/* 			};*/
/* 			doAnimation.finish = doAnimation;*/
/* */
/* 		return empty || optall.queue === false ?*/
/* 			this.each( doAnimation ) :*/
/* 			this.queue( optall.queue, doAnimation );*/
/* 	},*/
/* 	stop: function( type, clearQueue, gotoEnd ) {*/
/* 		var stopQueue = function( hooks ) {*/
/* 			var stop = hooks.stop;*/
/* 			delete hooks.stop;*/
/* 			stop( gotoEnd );*/
/* 		};*/
/* */
/* 		if ( typeof type !== "string" ) {*/
/* 			gotoEnd = clearQueue;*/
/* 			clearQueue = type;*/
/* 			type = undefined;*/
/* 		}*/
/* 		if ( clearQueue && type !== false ) {*/
/* 			this.queue( type || "fx", [] );*/
/* 		}*/
/* */
/* 		return this.each( function() {*/
/* 			var dequeue = true,*/
/* 				index = type != null && type + "queueHooks",*/
/* 				timers = jQuery.timers,*/
/* 				data = jQuery._data( this );*/
/* */
/* 			if ( index ) {*/
/* 				if ( data[ index ] && data[ index ].stop ) {*/
/* 					stopQueue( data[ index ] );*/
/* 				}*/
/* 			} else {*/
/* 				for ( index in data ) {*/
/* 					if ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {*/
/* 						stopQueue( data[ index ] );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			for ( index = timers.length; index--; ) {*/
/* 				if ( timers[ index ].elem === this &&*/
/* 					( type == null || timers[ index ].queue === type ) ) {*/
/* */
/* 					timers[ index ].anim.stop( gotoEnd );*/
/* 					dequeue = false;*/
/* 					timers.splice( index, 1 );*/
/* 				}*/
/* 			}*/
/* */
/* 			// start the next in the queue if the last step wasn't forced*/
/* 			// timers currently will call their complete callbacks, which will dequeue*/
/* 			// but only if they were gotoEnd*/
/* 			if ( dequeue || !gotoEnd ) {*/
/* 				jQuery.dequeue( this, type );*/
/* 			}*/
/* 		} );*/
/* 	},*/
/* 	finish: function( type ) {*/
/* 		if ( type !== false ) {*/
/* 			type = type || "fx";*/
/* 		}*/
/* 		return this.each( function() {*/
/* 			var index,*/
/* 				data = jQuery._data( this ),*/
/* 				queue = data[ type + "queue" ],*/
/* 				hooks = data[ type + "queueHooks" ],*/
/* 				timers = jQuery.timers,*/
/* 				length = queue ? queue.length : 0;*/
/* */
/* 			// enable finishing flag on private data*/
/* 			data.finish = true;*/
/* */
/* 			// empty the queue first*/
/* 			jQuery.queue( this, type, [] );*/
/* */
/* 			if ( hooks && hooks.stop ) {*/
/* 				hooks.stop.call( this, true );*/
/* 			}*/
/* */
/* 			// look for any active animations, and finish them*/
/* 			for ( index = timers.length; index--; ) {*/
/* 				if ( timers[ index ].elem === this && timers[ index ].queue === type ) {*/
/* 					timers[ index ].anim.stop( true );*/
/* 					timers.splice( index, 1 );*/
/* 				}*/
/* 			}*/
/* */
/* 			// look for any animations in the old queue and finish them*/
/* 			for ( index = 0; index < length; index++ ) {*/
/* 				if ( queue[ index ] && queue[ index ].finish ) {*/
/* 					queue[ index ].finish.call( this );*/
/* 				}*/
/* 			}*/
/* */
/* 			// turn off finishing flag*/
/* 			delete data.finish;*/
/* 		} );*/
/* 	}*/
/* } );*/
/* */
/* jQuery.each( [ "toggle", "show", "hide" ], function( i, name ) {*/
/* 	var cssFn = jQuery.fn[ name ];*/
/* 	jQuery.fn[ name ] = function( speed, easing, callback ) {*/
/* 		return speed == null || typeof speed === "boolean" ?*/
/* 			cssFn.apply( this, arguments ) :*/
/* 			this.animate( genFx( name, true ), speed, easing, callback );*/
/* 	};*/
/* } );*/
/* */
/* // Generate shortcuts for custom animations*/
/* jQuery.each( {*/
/* 	slideDown: genFx( "show" ),*/
/* 	slideUp: genFx( "hide" ),*/
/* 	slideToggle: genFx( "toggle" ),*/
/* 	fadeIn: { opacity: "show" },*/
/* 	fadeOut: { opacity: "hide" },*/
/* 	fadeToggle: { opacity: "toggle" }*/
/* }, function( name, props ) {*/
/* 	jQuery.fn[ name ] = function( speed, easing, callback ) {*/
/* 		return this.animate( props, speed, easing, callback );*/
/* 	};*/
/* } );*/
/* */
/* jQuery.timers = [];*/
/* jQuery.fx.tick = function() {*/
/* 	var timer,*/
/* 		timers = jQuery.timers,*/
/* 		i = 0;*/
/* */
/* 	fxNow = jQuery.now();*/
/* */
/* 	for ( ; i < timers.length; i++ ) {*/
/* 		timer = timers[ i ];*/
/* */
/* 		// Checks the timer has not already been removed*/
/* 		if ( !timer() && timers[ i ] === timer ) {*/
/* 			timers.splice( i--, 1 );*/
/* 		}*/
/* 	}*/
/* */
/* 	if ( !timers.length ) {*/
/* 		jQuery.fx.stop();*/
/* 	}*/
/* 	fxNow = undefined;*/
/* };*/
/* */
/* jQuery.fx.timer = function( timer ) {*/
/* 	jQuery.timers.push( timer );*/
/* 	if ( timer() ) {*/
/* 		jQuery.fx.start();*/
/* 	} else {*/
/* 		jQuery.timers.pop();*/
/* 	}*/
/* };*/
/* */
/* jQuery.fx.interval = 13;*/
/* */
/* jQuery.fx.start = function() {*/
/* 	if ( !timerId ) {*/
/* 		timerId = window.setInterval( jQuery.fx.tick, jQuery.fx.interval );*/
/* 	}*/
/* };*/
/* */
/* jQuery.fx.stop = function() {*/
/* 	window.clearInterval( timerId );*/
/* 	timerId = null;*/
/* };*/
/* */
/* jQuery.fx.speeds = {*/
/* 	slow: 600,*/
/* 	fast: 200,*/
/* */
/* 	// Default speed*/
/* 	_default: 400*/
/* };*/
/* */
/* */
/* // Based off of the plugin by Clint Helfers, with permission.*/
/* // http://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/*/
/* jQuery.fn.delay = function( time, type ) {*/
/* 	time = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;*/
/* 	type = type || "fx";*/
/* */
/* 	return this.queue( type, function( next, hooks ) {*/
/* 		var timeout = window.setTimeout( next, time );*/
/* 		hooks.stop = function() {*/
/* 			window.clearTimeout( timeout );*/
/* 		};*/
/* 	} );*/
/* };*/
/* */
/* */
/* ( function() {*/
/* 	var a,*/
/* 		input = document.createElement( "input" ),*/
/* 		div = document.createElement( "div" ),*/
/* 		select = document.createElement( "select" ),*/
/* 		opt = select.appendChild( document.createElement( "option" ) );*/
/* */
/* 	// Setup*/
/* 	div = document.createElement( "div" );*/
/* 	div.setAttribute( "className", "t" );*/
/* 	div.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>";*/
/* 	a = div.getElementsByTagName( "a" )[ 0 ];*/
/* */
/* 	// Support: Windows Web Apps (WWA)*/
/* 	// `type` must use .setAttribute for WWA (#14901)*/
/* 	input.setAttribute( "type", "checkbox" );*/
/* 	div.appendChild( input );*/
/* */
/* 	a = div.getElementsByTagName( "a" )[ 0 ];*/
/* */
/* 	// First batch of tests.*/
/* 	a.style.cssText = "top:1px";*/
/* */
/* 	// Test setAttribute on camelCase class.*/
/* 	// If it works, we need attrFixes when doing get/setAttribute (ie6/7)*/
/* 	support.getSetAttribute = div.className !== "t";*/
/* */
/* 	// Get the style information from getAttribute*/
/* 	// (IE uses .cssText instead)*/
/* 	support.style = /top/.test( a.getAttribute( "style" ) );*/
/* */
/* 	// Make sure that URLs aren't manipulated*/
/* 	// (IE normalizes it by default)*/
/* 	support.hrefNormalized = a.getAttribute( "href" ) === "/a";*/
/* */
/* 	// Check the default checkbox/radio value ("" on WebKit; "on" elsewhere)*/
/* 	support.checkOn = !!input.value;*/
/* */
/* 	// Make sure that a selected-by-default option has a working selected property.*/
/* 	// (WebKit defaults to false instead of true, IE too, if it's in an optgroup)*/
/* 	support.optSelected = opt.selected;*/
/* */
/* 	// Tests for enctype support on a form (#6743)*/
/* 	support.enctype = !!document.createElement( "form" ).enctype;*/
/* */
/* 	// Make sure that the options inside disabled selects aren't marked as disabled*/
/* 	// (WebKit marks them as disabled)*/
/* 	select.disabled = true;*/
/* 	support.optDisabled = !opt.disabled;*/
/* */
/* 	// Support: IE8 only*/
/* 	// Check if we can trust getAttribute("value")*/
/* 	input = document.createElement( "input" );*/
/* 	input.setAttribute( "value", "" );*/
/* 	support.input = input.getAttribute( "value" ) === "";*/
/* */
/* 	// Check if an input maintains its value after becoming a radio*/
/* 	input.value = "t";*/
/* 	input.setAttribute( "type", "radio" );*/
/* 	support.radioValue = input.value === "t";*/
/* } )();*/
/* */
/* */
/* var rreturn = /\r/g,*/
/* 	rspaces = /[\x20\t\r\n\f]+/g;*/
/* */
/* jQuery.fn.extend( {*/
/* 	val: function( value ) {*/
/* 		var hooks, ret, isFunction,*/
/* 			elem = this[ 0 ];*/
/* */
/* 		if ( !arguments.length ) {*/
/* 			if ( elem ) {*/
/* 				hooks = jQuery.valHooks[ elem.type ] ||*/
/* 					jQuery.valHooks[ elem.nodeName.toLowerCase() ];*/
/* */
/* 				if (*/
/* 					hooks &&*/
/* 					"get" in hooks &&*/
/* 					( ret = hooks.get( elem, "value" ) ) !== undefined*/
/* 				) {*/
/* 					return ret;*/
/* 				}*/
/* */
/* 				ret = elem.value;*/
/* */
/* 				return typeof ret === "string" ?*/
/* */
/* 					// handle most common string cases*/
/* 					ret.replace( rreturn, "" ) :*/
/* */
/* 					// handle cases where value is null/undef or number*/
/* 					ret == null ? "" : ret;*/
/* 			}*/
/* */
/* 			return;*/
/* 		}*/
/* */
/* 		isFunction = jQuery.isFunction( value );*/
/* */
/* 		return this.each( function( i ) {*/
/* 			var val;*/
/* */
/* 			if ( this.nodeType !== 1 ) {*/
/* 				return;*/
/* 			}*/
/* */
/* 			if ( isFunction ) {*/
/* 				val = value.call( this, i, jQuery( this ).val() );*/
/* 			} else {*/
/* 				val = value;*/
/* 			}*/
/* */
/* 			// Treat null/undefined as ""; convert numbers to string*/
/* 			if ( val == null ) {*/
/* 				val = "";*/
/* 			} else if ( typeof val === "number" ) {*/
/* 				val += "";*/
/* 			} else if ( jQuery.isArray( val ) ) {*/
/* 				val = jQuery.map( val, function( value ) {*/
/* 					return value == null ? "" : value + "";*/
/* 				} );*/
/* 			}*/
/* */
/* 			hooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];*/
/* */
/* 			// If set returns undefined, fall back to normal setting*/
/* 			if ( !hooks || !( "set" in hooks ) || hooks.set( this, val, "value" ) === undefined ) {*/
/* 				this.value = val;*/
/* 			}*/
/* 		} );*/
/* 	}*/
/* } );*/
/* */
/* jQuery.extend( {*/
/* 	valHooks: {*/
/* 		option: {*/
/* 			get: function( elem ) {*/
/* 				var val = jQuery.find.attr( elem, "value" );*/
/* 				return val != null ?*/
/* 					val :*/
/* */
/* 					// Support: IE10-11+*/
/* 					// option.text throws exceptions (#14686, #14858)*/
/* 					// Strip and collapse whitespace*/
/* 					// https://html.spec.whatwg.org/#strip-and-collapse-whitespace*/
/* 					jQuery.trim( jQuery.text( elem ) ).replace( rspaces, " " );*/
/* 			}*/
/* 		},*/
/* 		select: {*/
/* 			get: function( elem ) {*/
/* 				var value, option,*/
/* 					options = elem.options,*/
/* 					index = elem.selectedIndex,*/
/* 					one = elem.type === "select-one" || index < 0,*/
/* 					values = one ? null : [],*/
/* 					max = one ? index + 1 : options.length,*/
/* 					i = index < 0 ?*/
/* 						max :*/
/* 						one ? index : 0;*/
/* */
/* 				// Loop through all the selected options*/
/* 				for ( ; i < max; i++ ) {*/
/* 					option = options[ i ];*/
/* */
/* 					// oldIE doesn't update selected after form reset (#2551)*/
/* 					if ( ( option.selected || i === index ) &&*/
/* */
/* 							// Don't return options that are disabled or in a disabled optgroup*/
/* 							( support.optDisabled ?*/
/* 								!option.disabled :*/
/* 								option.getAttribute( "disabled" ) === null ) &&*/
/* 							( !option.parentNode.disabled ||*/
/* 								!jQuery.nodeName( option.parentNode, "optgroup" ) ) ) {*/
/* */
/* 						// Get the specific value for the option*/
/* 						value = jQuery( option ).val();*/
/* */
/* 						// We don't need an array for one selects*/
/* 						if ( one ) {*/
/* 							return value;*/
/* 						}*/
/* */
/* 						// Multi-Selects return an array*/
/* 						values.push( value );*/
/* 					}*/
/* 				}*/
/* */
/* 				return values;*/
/* 			},*/
/* */
/* 			set: function( elem, value ) {*/
/* 				var optionSet, option,*/
/* 					options = elem.options,*/
/* 					values = jQuery.makeArray( value ),*/
/* 					i = options.length;*/
/* */
/* 				while ( i-- ) {*/
/* 					option = options[ i ];*/
/* */
/* 					if ( jQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1 ) {*/
/* */
/* 						// Support: IE6*/
/* 						// When new option element is added to select box we need to*/
/* 						// force reflow of newly added node in order to workaround delay*/
/* 						// of initialization properties*/
/* 						try {*/
/* 							option.selected = optionSet = true;*/
/* */
/* 						} catch ( _ ) {*/
/* */
/* 							// Will be executed only in IE6*/
/* 							option.scrollHeight;*/
/* 						}*/
/* */
/* 					} else {*/
/* 						option.selected = false;*/
/* 					}*/
/* 				}*/
/* */
/* 				// Force browsers to behave consistently when non-matching value is set*/
/* 				if ( !optionSet ) {*/
/* 					elem.selectedIndex = -1;*/
/* 				}*/
/* */
/* 				return options;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* } );*/
/* */
/* // Radios and checkboxes getter/setter*/
/* jQuery.each( [ "radio", "checkbox" ], function() {*/
/* 	jQuery.valHooks[ this ] = {*/
/* 		set: function( elem, value ) {*/
/* 			if ( jQuery.isArray( value ) ) {*/
/* 				return ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );*/
/* 			}*/
/* 		}*/
/* 	};*/
/* 	if ( !support.checkOn ) {*/
/* 		jQuery.valHooks[ this ].get = function( elem ) {*/
/* 			return elem.getAttribute( "value" ) === null ? "on" : elem.value;*/
/* 		};*/
/* 	}*/
/* } );*/
/* */
/* */
/* */
/* */
/* var nodeHook, boolHook,*/
/* 	attrHandle = jQuery.expr.attrHandle,*/
/* 	ruseDefault = /^(?:checked|selected)$/i,*/
/* 	getSetAttribute = support.getSetAttribute,*/
/* 	getSetInput = support.input;*/
/* */
/* jQuery.fn.extend( {*/
/* 	attr: function( name, value ) {*/
/* 		return access( this, jQuery.attr, name, value, arguments.length > 1 );*/
/* 	},*/
/* */
/* 	removeAttr: function( name ) {*/
/* 		return this.each( function() {*/
/* 			jQuery.removeAttr( this, name );*/
/* 		} );*/
/* 	}*/
/* } );*/
/* */
/* jQuery.extend( {*/
/* 	attr: function( elem, name, value ) {*/
/* 		var ret, hooks,*/
/* 			nType = elem.nodeType;*/
/* */
/* 		// Don't get/set attributes on text, comment and attribute nodes*/
/* 		if ( nType === 3 || nType === 8 || nType === 2 ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Fallback to prop when attributes are not supported*/
/* 		if ( typeof elem.getAttribute === "undefined" ) {*/
/* 			return jQuery.prop( elem, name, value );*/
/* 		}*/
/* */
/* 		// All attributes are lowercase*/
/* 		// Grab necessary hook if one is defined*/
/* 		if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {*/
/* 			name = name.toLowerCase();*/
/* 			hooks = jQuery.attrHooks[ name ] ||*/
/* 				( jQuery.expr.match.bool.test( name ) ? boolHook : nodeHook );*/
/* 		}*/
/* */
/* 		if ( value !== undefined ) {*/
/* 			if ( value === null ) {*/
/* 				jQuery.removeAttr( elem, name );*/
/* 				return;*/
/* 			}*/
/* */
/* 			if ( hooks && "set" in hooks &&*/
/* 				( ret = hooks.set( elem, value, name ) ) !== undefined ) {*/
/* 				return ret;*/
/* 			}*/
/* */
/* 			elem.setAttribute( name, value + "" );*/
/* 			return value;*/
/* 		}*/
/* */
/* 		if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {*/
/* 			return ret;*/
/* 		}*/
/* */
/* 		ret = jQuery.find.attr( elem, name );*/
/* */
/* 		// Non-existent attributes return null, we normalize to undefined*/
/* 		return ret == null ? undefined : ret;*/
/* 	},*/
/* */
/* 	attrHooks: {*/
/* 		type: {*/
/* 			set: function( elem, value ) {*/
/* 				if ( !support.radioValue && value === "radio" &&*/
/* 					jQuery.nodeName( elem, "input" ) ) {*/
/* */
/* 					// Setting the type on a radio button after the value resets the value in IE8-9*/
/* 					// Reset value to default in case type is set after value during creation*/
/* 					var val = elem.value;*/
/* 					elem.setAttribute( "type", value );*/
/* 					if ( val ) {*/
/* 						elem.value = val;*/
/* 					}*/
/* 					return value;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	},*/
/* */
/* 	removeAttr: function( elem, value ) {*/
/* 		var name, propName,*/
/* 			i = 0,*/
/* 			attrNames = value && value.match( rnotwhite );*/
/* */
/* 		if ( attrNames && elem.nodeType === 1 ) {*/
/* 			while ( ( name = attrNames[ i++ ] ) ) {*/
/* 				propName = jQuery.propFix[ name ] || name;*/
/* */
/* 				// Boolean attributes get special treatment (#10870)*/
/* 				if ( jQuery.expr.match.bool.test( name ) ) {*/
/* */
/* 					// Set corresponding property to false*/
/* 					if ( getSetInput && getSetAttribute || !ruseDefault.test( name ) ) {*/
/* 						elem[ propName ] = false;*/
/* */
/* 					// Support: IE<9*/
/* 					// Also clear defaultChecked/defaultSelected (if appropriate)*/
/* 					} else {*/
/* 						elem[ jQuery.camelCase( "default-" + name ) ] =*/
/* 							elem[ propName ] = false;*/
/* 					}*/
/* */
/* 				// See #9699 for explanation of this approach (setting first, then removal)*/
/* 				} else {*/
/* 					jQuery.attr( elem, name, "" );*/
/* 				}*/
/* */
/* 				elem.removeAttribute( getSetAttribute ? name : propName );*/
/* 			}*/
/* 		}*/
/* 	}*/
/* } );*/
/* */
/* // Hooks for boolean attributes*/
/* boolHook = {*/
/* 	set: function( elem, value, name ) {*/
/* 		if ( value === false ) {*/
/* */
/* 			// Remove boolean attributes when set to false*/
/* 			jQuery.removeAttr( elem, name );*/
/* 		} else if ( getSetInput && getSetAttribute || !ruseDefault.test( name ) ) {*/
/* */
/* 			// IE<8 needs the *property* name*/
/* 			elem.setAttribute( !getSetAttribute && jQuery.propFix[ name ] || name, name );*/
/* */
/* 		} else {*/
/* */
/* 			// Support: IE<9*/
/* 			// Use defaultChecked and defaultSelected for oldIE*/
/* 			elem[ jQuery.camelCase( "default-" + name ) ] = elem[ name ] = true;*/
/* 		}*/
/* 		return name;*/
/* 	}*/
/* };*/
/* */
/* jQuery.each( jQuery.expr.match.bool.source.match( /\w+/g ), function( i, name ) {*/
/* 	var getter = attrHandle[ name ] || jQuery.find.attr;*/
/* */
/* 	if ( getSetInput && getSetAttribute || !ruseDefault.test( name ) ) {*/
/* 		attrHandle[ name ] = function( elem, name, isXML ) {*/
/* 			var ret, handle;*/
/* 			if ( !isXML ) {*/
/* */
/* 				// Avoid an infinite loop by temporarily removing this function from the getter*/
/* 				handle = attrHandle[ name ];*/
/* 				attrHandle[ name ] = ret;*/
/* 				ret = getter( elem, name, isXML ) != null ?*/
/* 					name.toLowerCase() :*/
/* 					null;*/
/* 				attrHandle[ name ] = handle;*/
/* 			}*/
/* 			return ret;*/
/* 		};*/
/* 	} else {*/
/* 		attrHandle[ name ] = function( elem, name, isXML ) {*/
/* 			if ( !isXML ) {*/
/* 				return elem[ jQuery.camelCase( "default-" + name ) ] ?*/
/* 					name.toLowerCase() :*/
/* 					null;*/
/* 			}*/
/* 		};*/
/* 	}*/
/* } );*/
/* */
/* // fix oldIE attroperties*/
/* if ( !getSetInput || !getSetAttribute ) {*/
/* 	jQuery.attrHooks.value = {*/
/* 		set: function( elem, value, name ) {*/
/* 			if ( jQuery.nodeName( elem, "input" ) ) {*/
/* */
/* 				// Does not return so that setAttribute is also used*/
/* 				elem.defaultValue = value;*/
/* 			} else {*/
/* */
/* 				// Use nodeHook if defined (#1954); otherwise setAttribute is fine*/
/* 				return nodeHook && nodeHook.set( elem, value, name );*/
/* 			}*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* // IE6/7 do not support getting/setting some attributes with get/setAttribute*/
/* if ( !getSetAttribute ) {*/
/* */
/* 	// Use this for any attribute in IE6/7*/
/* 	// This fixes almost every IE6/7 issue*/
/* 	nodeHook = {*/
/* 		set: function( elem, value, name ) {*/
/* */
/* 			// Set the existing or create a new attribute node*/
/* 			var ret = elem.getAttributeNode( name );*/
/* 			if ( !ret ) {*/
/* 				elem.setAttributeNode(*/
/* 					( ret = elem.ownerDocument.createAttribute( name ) )*/
/* 				);*/
/* 			}*/
/* */
/* 			ret.value = value += "";*/
/* */
/* 			// Break association with cloned elements by also using setAttribute (#9646)*/
/* 			if ( name === "value" || value === elem.getAttribute( name ) ) {*/
/* 				return value;*/
/* 			}*/
/* 		}*/
/* 	};*/
/* */
/* 	// Some attributes are constructed with empty-string values when not defined*/
/* 	attrHandle.id = attrHandle.name = attrHandle.coords =*/
/* 		function( elem, name, isXML ) {*/
/* 			var ret;*/
/* 			if ( !isXML ) {*/
/* 				return ( ret = elem.getAttributeNode( name ) ) && ret.value !== "" ?*/
/* 					ret.value :*/
/* 					null;*/
/* 			}*/
/* 		};*/
/* */
/* 	// Fixing value retrieval on a button requires this module*/
/* 	jQuery.valHooks.button = {*/
/* 		get: function( elem, name ) {*/
/* 			var ret = elem.getAttributeNode( name );*/
/* 			if ( ret && ret.specified ) {*/
/* 				return ret.value;*/
/* 			}*/
/* 		},*/
/* 		set: nodeHook.set*/
/* 	};*/
/* */
/* 	// Set contenteditable to false on removals(#10429)*/
/* 	// Setting to empty string throws an error as an invalid value*/
/* 	jQuery.attrHooks.contenteditable = {*/
/* 		set: function( elem, value, name ) {*/
/* 			nodeHook.set( elem, value === "" ? false : value, name );*/
/* 		}*/
/* 	};*/
/* */
/* 	// Set width and height to auto instead of 0 on empty string( Bug #8150 )*/
/* 	// This is for removals*/
/* 	jQuery.each( [ "width", "height" ], function( i, name ) {*/
/* 		jQuery.attrHooks[ name ] = {*/
/* 			set: function( elem, value ) {*/
/* 				if ( value === "" ) {*/
/* 					elem.setAttribute( name, "auto" );*/
/* 					return value;*/
/* 				}*/
/* 			}*/
/* 		};*/
/* 	} );*/
/* }*/
/* */
/* if ( !support.style ) {*/
/* 	jQuery.attrHooks.style = {*/
/* 		get: function( elem ) {*/
/* */
/* 			// Return undefined in the case of empty string*/
/* 			// Note: IE uppercases css property names, but if we were to .toLowerCase()*/
/* 			// .cssText, that would destroy case sensitivity in URL's, like in "background"*/
/* 			return elem.style.cssText || undefined;*/
/* 		},*/
/* 		set: function( elem, value ) {*/
/* 			return ( elem.style.cssText = value + "" );*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* */
/* */
/* */
/* var rfocusable = /^(?:input|select|textarea|button|object)$/i,*/
/* 	rclickable = /^(?:a|area)$/i;*/
/* */
/* jQuery.fn.extend( {*/
/* 	prop: function( name, value ) {*/
/* 		return access( this, jQuery.prop, name, value, arguments.length > 1 );*/
/* 	},*/
/* */
/* 	removeProp: function( name ) {*/
/* 		name = jQuery.propFix[ name ] || name;*/
/* 		return this.each( function() {*/
/* */
/* 			// try/catch handles cases where IE balks (such as removing a property on window)*/
/* 			try {*/
/* 				this[ name ] = undefined;*/
/* 				delete this[ name ];*/
/* 			} catch ( e ) {}*/
/* 		} );*/
/* 	}*/
/* } );*/
/* */
/* jQuery.extend( {*/
/* 	prop: function( elem, name, value ) {*/
/* 		var ret, hooks,*/
/* 			nType = elem.nodeType;*/
/* */
/* 		// Don't get/set properties on text, comment and attribute nodes*/
/* 		if ( nType === 3 || nType === 8 || nType === 2 ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {*/
/* */
/* 			// Fix name and attach hooks*/
/* 			name = jQuery.propFix[ name ] || name;*/
/* 			hooks = jQuery.propHooks[ name ];*/
/* 		}*/
/* */
/* 		if ( value !== undefined ) {*/
/* 			if ( hooks && "set" in hooks &&*/
/* 				( ret = hooks.set( elem, value, name ) ) !== undefined ) {*/
/* 				return ret;*/
/* 			}*/
/* */
/* 			return ( elem[ name ] = value );*/
/* 		}*/
/* */
/* 		if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {*/
/* 			return ret;*/
/* 		}*/
/* */
/* 		return elem[ name ];*/
/* 	},*/
/* */
/* 	propHooks: {*/
/* 		tabIndex: {*/
/* 			get: function( elem ) {*/
/* */
/* 				// elem.tabIndex doesn't always return the*/
/* 				// correct value when it hasn't been explicitly set*/
/* 				// http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/*/
/* 				// Use proper attribute retrieval(#12072)*/
/* 				var tabindex = jQuery.find.attr( elem, "tabindex" );*/
/* */
/* 				return tabindex ?*/
/* 					parseInt( tabindex, 10 ) :*/
/* 					rfocusable.test( elem.nodeName ) ||*/
/* 						rclickable.test( elem.nodeName ) && elem.href ?*/
/* 							0 :*/
/* 							-1;*/
/* 			}*/
/* 		}*/
/* 	},*/
/* */
/* 	propFix: {*/
/* 		"for": "htmlFor",*/
/* 		"class": "className"*/
/* 	}*/
/* } );*/
/* */
/* // Some attributes require a special call on IE*/
/* // http://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx*/
/* if ( !support.hrefNormalized ) {*/
/* */
/* 	// href/src property should get the full normalized URL (#10299/#12915)*/
/* 	jQuery.each( [ "href", "src" ], function( i, name ) {*/
/* 		jQuery.propHooks[ name ] = {*/
/* 			get: function( elem ) {*/
/* 				return elem.getAttribute( name, 4 );*/
/* 			}*/
/* 		};*/
/* 	} );*/
/* }*/
/* */
/* // Support: Safari, IE9+*/
/* // Accessing the selectedIndex property*/
/* // forces the browser to respect setting selected*/
/* // on the option*/
/* // The getter ensures a default option is selected*/
/* // when in an optgroup*/
/* if ( !support.optSelected ) {*/
/* 	jQuery.propHooks.selected = {*/
/* 		get: function( elem ) {*/
/* 			var parent = elem.parentNode;*/
/* */
/* 			if ( parent ) {*/
/* 				parent.selectedIndex;*/
/* */
/* 				// Make sure that it also works with optgroups, see #5701*/
/* 				if ( parent.parentNode ) {*/
/* 					parent.parentNode.selectedIndex;*/
/* 				}*/
/* 			}*/
/* 			return null;*/
/* 		},*/
/* 		set: function( elem ) {*/
/* 			var parent = elem.parentNode;*/
/* 			if ( parent ) {*/
/* 				parent.selectedIndex;*/
/* */
/* 				if ( parent.parentNode ) {*/
/* 					parent.parentNode.selectedIndex;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* jQuery.each( [*/
/* 	"tabIndex",*/
/* 	"readOnly",*/
/* 	"maxLength",*/
/* 	"cellSpacing",*/
/* 	"cellPadding",*/
/* 	"rowSpan",*/
/* 	"colSpan",*/
/* 	"useMap",*/
/* 	"frameBorder",*/
/* 	"contentEditable"*/
/* ], function() {*/
/* 	jQuery.propFix[ this.toLowerCase() ] = this;*/
/* } );*/
/* */
/* // IE6/7 call enctype encoding*/
/* if ( !support.enctype ) {*/
/* 	jQuery.propFix.enctype = "encoding";*/
/* }*/
/* */
/* */
/* */
/* */
/* var rclass = /[\t\r\n\f]/g;*/
/* */
/* function getClass( elem ) {*/
/* 	return jQuery.attr( elem, "class" ) || "";*/
/* }*/
/* */
/* jQuery.fn.extend( {*/
/* 	addClass: function( value ) {*/
/* 		var classes, elem, cur, curValue, clazz, j, finalValue,*/
/* 			i = 0;*/
/* */
/* 		if ( jQuery.isFunction( value ) ) {*/
/* 			return this.each( function( j ) {*/
/* 				jQuery( this ).addClass( value.call( this, j, getClass( this ) ) );*/
/* 			} );*/
/* 		}*/
/* */
/* 		if ( typeof value === "string" && value ) {*/
/* 			classes = value.match( rnotwhite ) || [];*/
/* */
/* 			while ( ( elem = this[ i++ ] ) ) {*/
/* 				curValue = getClass( elem );*/
/* 				cur = elem.nodeType === 1 &&*/
/* 					( " " + curValue + " " ).replace( rclass, " " );*/
/* */
/* 				if ( cur ) {*/
/* 					j = 0;*/
/* 					while ( ( clazz = classes[ j++ ] ) ) {*/
/* 						if ( cur.indexOf( " " + clazz + " " ) < 0 ) {*/
/* 							cur += clazz + " ";*/
/* 						}*/
/* 					}*/
/* */
/* 					// only assign if different to avoid unneeded rendering.*/
/* 					finalValue = jQuery.trim( cur );*/
/* 					if ( curValue !== finalValue ) {*/
/* 						jQuery.attr( elem, "class", finalValue );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return this;*/
/* 	},*/
/* */
/* 	removeClass: function( value ) {*/
/* 		var classes, elem, cur, curValue, clazz, j, finalValue,*/
/* 			i = 0;*/
/* */
/* 		if ( jQuery.isFunction( value ) ) {*/
/* 			return this.each( function( j ) {*/
/* 				jQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );*/
/* 			} );*/
/* 		}*/
/* */
/* 		if ( !arguments.length ) {*/
/* 			return this.attr( "class", "" );*/
/* 		}*/
/* */
/* 		if ( typeof value === "string" && value ) {*/
/* 			classes = value.match( rnotwhite ) || [];*/
/* */
/* 			while ( ( elem = this[ i++ ] ) ) {*/
/* 				curValue = getClass( elem );*/
/* */
/* 				// This expression is here for better compressibility (see addClass)*/
/* 				cur = elem.nodeType === 1 &&*/
/* 					( " " + curValue + " " ).replace( rclass, " " );*/
/* */
/* 				if ( cur ) {*/
/* 					j = 0;*/
/* 					while ( ( clazz = classes[ j++ ] ) ) {*/
/* */
/* 						// Remove *all* instances*/
/* 						while ( cur.indexOf( " " + clazz + " " ) > -1 ) {*/
/* 							cur = cur.replace( " " + clazz + " ", " " );*/
/* 						}*/
/* 					}*/
/* */
/* 					// Only assign if different to avoid unneeded rendering.*/
/* 					finalValue = jQuery.trim( cur );*/
/* 					if ( curValue !== finalValue ) {*/
/* 						jQuery.attr( elem, "class", finalValue );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return this;*/
/* 	},*/
/* */
/* 	toggleClass: function( value, stateVal ) {*/
/* 		var type = typeof value;*/
/* */
/* 		if ( typeof stateVal === "boolean" && type === "string" ) {*/
/* 			return stateVal ? this.addClass( value ) : this.removeClass( value );*/
/* 		}*/
/* */
/* 		if ( jQuery.isFunction( value ) ) {*/
/* 			return this.each( function( i ) {*/
/* 				jQuery( this ).toggleClass(*/
/* 					value.call( this, i, getClass( this ), stateVal ),*/
/* 					stateVal*/
/* 				);*/
/* 			} );*/
/* 		}*/
/* */
/* 		return this.each( function() {*/
/* 			var className, i, self, classNames;*/
/* */
/* 			if ( type === "string" ) {*/
/* */
/* 				// Toggle individual class names*/
/* 				i = 0;*/
/* 				self = jQuery( this );*/
/* 				classNames = value.match( rnotwhite ) || [];*/
/* */
/* 				while ( ( className = classNames[ i++ ] ) ) {*/
/* */
/* 					// Check each className given, space separated list*/
/* 					if ( self.hasClass( className ) ) {*/
/* 						self.removeClass( className );*/
/* 					} else {*/
/* 						self.addClass( className );*/
/* 					}*/
/* 				}*/
/* */
/* 			// Toggle whole class name*/
/* 			} else if ( value === undefined || type === "boolean" ) {*/
/* 				className = getClass( this );*/
/* 				if ( className ) {*/
/* */
/* 					// store className if set*/
/* 					jQuery._data( this, "__className__", className );*/
/* 				}*/
/* */
/* 				// If the element has a class name or if we're passed "false",*/
/* 				// then remove the whole classname (if there was one, the above saved it).*/
/* 				// Otherwise bring back whatever was previously saved (if anything),*/
/* 				// falling back to the empty string if nothing was stored.*/
/* 				jQuery.attr( this, "class",*/
/* 					className || value === false ?*/
/* 					"" :*/
/* 					jQuery._data( this, "__className__" ) || ""*/
/* 				);*/
/* 			}*/
/* 		} );*/
/* 	},*/
/* */
/* 	hasClass: function( selector ) {*/
/* 		var className, elem,*/
/* 			i = 0;*/
/* */
/* 		className = " " + selector + " ";*/
/* 		while ( ( elem = this[ i++ ] ) ) {*/
/* 			if ( elem.nodeType === 1 &&*/
/* 				( " " + getClass( elem ) + " " ).replace( rclass, " " )*/
/* 					.indexOf( className ) > -1*/
/* 			) {*/
/* 				return true;*/
/* 			}*/
/* 		}*/
/* */
/* 		return false;*/
/* 	}*/
/* } );*/
/* */
/* */
/* */
/* */
/* // Return jQuery for attributes-only inclusion*/
/* */
/* */
/* jQuery.each( ( "blur focus focusin focusout load resize scroll unload click dblclick " +*/
/* 	"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave " +*/
/* 	"change select submit keydown keypress keyup error contextmenu" ).split( " " ),*/
/* 	function( i, name ) {*/
/* */
/* 	// Handle event binding*/
/* 	jQuery.fn[ name ] = function( data, fn ) {*/
/* 		return arguments.length > 0 ?*/
/* 			this.on( name, null, data, fn ) :*/
/* 			this.trigger( name );*/
/* 	};*/
/* } );*/
/* */
/* jQuery.fn.extend( {*/
/* 	hover: function( fnOver, fnOut ) {*/
/* 		return this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );*/
/* 	}*/
/* } );*/
/* */
/* */
/* var location = window.location;*/
/* */
/* var nonce = jQuery.now();*/
/* */
/* var rquery = ( /\?/ );*/
/* */
/* */
/* */
/* var rvalidtokens = /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;*/
/* */
/* jQuery.parseJSON = function( data ) {*/
/* */
/* 	// Attempt to parse using the native JSON parser first*/
/* 	if ( window.JSON && window.JSON.parse ) {*/
/* */
/* 		// Support: Android 2.3*/
/* 		// Workaround failure to string-cast null input*/
/* 		return window.JSON.parse( data + "" );*/
/* 	}*/
/* */
/* 	var requireNonComma,*/
/* 		depth = null,*/
/* 		str = jQuery.trim( data + "" );*/
/* */
/* 	// Guard against invalid (and possibly dangerous) input by ensuring that nothing remains*/
/* 	// after removing valid tokens*/
/* 	return str && !jQuery.trim( str.replace( rvalidtokens, function( token, comma, open, close ) {*/
/* */
/* 		// Force termination if we see a misplaced comma*/
/* 		if ( requireNonComma && comma ) {*/
/* 			depth = 0;*/
/* 		}*/
/* */
/* 		// Perform no more replacements after returning to outermost depth*/
/* 		if ( depth === 0 ) {*/
/* 			return token;*/
/* 		}*/
/* */
/* 		// Commas must not follow "[", "{", or ","*/
/* 		requireNonComma = open || comma;*/
/* */
/* 		// Determine new depth*/
/* 		// array/object open ("[" or "{"): depth += true - false (increment)*/
/* 		// array/object close ("]" or "}"): depth += false - true (decrement)*/
/* 		// other cases ("," or primitive): depth += true - true (numeric cast)*/
/* 		depth += !close - !open;*/
/* */
/* 		// Remove this token*/
/* 		return "";*/
/* 	} ) ) ?*/
/* 		( Function( "return " + str ) )() :*/
/* 		jQuery.error( "Invalid JSON: " + data );*/
/* };*/
/* */
/* */
/* // Cross-browser xml parsing*/
/* jQuery.parseXML = function( data ) {*/
/* 	var xml, tmp;*/
/* 	if ( !data || typeof data !== "string" ) {*/
/* 		return null;*/
/* 	}*/
/* 	try {*/
/* 		if ( window.DOMParser ) { // Standard*/
/* 			tmp = new window.DOMParser();*/
/* 			xml = tmp.parseFromString( data, "text/xml" );*/
/* 		} else { // IE*/
/* 			xml = new window.ActiveXObject( "Microsoft.XMLDOM" );*/
/* 			xml.async = "false";*/
/* 			xml.loadXML( data );*/
/* 		}*/
/* 	} catch ( e ) {*/
/* 		xml = undefined;*/
/* 	}*/
/* 	if ( !xml || !xml.documentElement || xml.getElementsByTagName( "parsererror" ).length ) {*/
/* 		jQuery.error( "Invalid XML: " + data );*/
/* 	}*/
/* 	return xml;*/
/* };*/
/* */
/* */
/* var*/
/* 	rhash = /#.*$/,*/
/* 	rts = /([?&])_=[^&]*//* ,*/
/* */
/* 	// IE leaves an \r character at EOL*/
/* 	rheaders = /^(.*?):[ \t]*([^\r\n]*)\r?$/mg,*/
/* */
/* 	// #7653, #8125, #8152: local protocol detection*/
/* 	rlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,*/
/* 	rnoContent = /^(?:GET|HEAD)$/,*/
/* 	rprotocol = /^\/\//,*/
/* 	rurl = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,*/
/* */
/* 	/* Prefilters*/
/* 	 * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)*/
/* 	 * 2) These are called:*/
/* 	 *    - BEFORE asking for a transport*/
/* 	 *    - AFTER param serialization (s.data is a string if s.processData is true)*/
/* 	 * 3) key is the dataType*/
/* 	 * 4) the catchall symbol "*" can be used*/
/* 	 * 5) execution will start with transport dataType and THEN continue down to "*" if needed*/
/* 	 *//* */
/* 	prefilters = {},*/
/* */
/* 	/* Transports bindings*/
/* 	 * 1) key is the dataType*/
/* 	 * 2) the catchall symbol "*" can be used*/
/* 	 * 3) selection will start with transport dataType and THEN go to "*" if needed*/
/* 	 *//* */
/* 	transports = {},*/
/* */
/* 	// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression*/
/* 	allTypes = "*//* ".concat( "*" ),*/
/* */
/* 	// Document location*/
/* 	ajaxLocation = location.href,*/
/* */
/* 	// Segment location into parts*/
/* 	ajaxLocParts = rurl.exec( ajaxLocation.toLowerCase() ) || [];*/
/* */
/* // Base "constructor" for jQuery.ajaxPrefilter and jQuery.ajaxTransport*/
/* function addToPrefiltersOrTransports( structure ) {*/
/* */
/* 	// dataTypeExpression is optional and defaults to "*"*/
/* 	return function( dataTypeExpression, func ) {*/
/* */
/* 		if ( typeof dataTypeExpression !== "string" ) {*/
/* 			func = dataTypeExpression;*/
/* 			dataTypeExpression = "*";*/
/* 		}*/
/* */
/* 		var dataType,*/
/* 			i = 0,*/
/* 			dataTypes = dataTypeExpression.toLowerCase().match( rnotwhite ) || [];*/
/* */
/* 		if ( jQuery.isFunction( func ) ) {*/
/* */
/* 			// For each dataType in the dataTypeExpression*/
/* 			while ( ( dataType = dataTypes[ i++ ] ) ) {*/
/* */
/* 				// Prepend if requested*/
/* 				if ( dataType.charAt( 0 ) === "+" ) {*/
/* 					dataType = dataType.slice( 1 ) || "*";*/
/* 					( structure[ dataType ] = structure[ dataType ] || [] ).unshift( func );*/
/* */
/* 				// Otherwise append*/
/* 				} else {*/
/* 					( structure[ dataType ] = structure[ dataType ] || [] ).push( func );*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* // Base inspection function for prefilters and transports*/
/* function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {*/
/* */
/* 	var inspected = {},*/
/* 		seekingTransport = ( structure === transports );*/
/* */
/* 	function inspect( dataType ) {*/
/* 		var selected;*/
/* 		inspected[ dataType ] = true;*/
/* 		jQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {*/
/* 			var dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );*/
/* 			if ( typeof dataTypeOrTransport === "string" &&*/
/* 				!seekingTransport && !inspected[ dataTypeOrTransport ] ) {*/
/* */
/* 				options.dataTypes.unshift( dataTypeOrTransport );*/
/* 				inspect( dataTypeOrTransport );*/
/* 				return false;*/
/* 			} else if ( seekingTransport ) {*/
/* 				return !( selected = dataTypeOrTransport );*/
/* 			}*/
/* 		} );*/
/* 		return selected;*/
/* 	}*/
/* */
/* 	return inspect( options.dataTypes[ 0 ] ) || !inspected[ "*" ] && inspect( "*" );*/
/* }*/
/* */
/* // A special extend for ajax options*/
/* // that takes "flat" options (not to be deep extended)*/
/* // Fixes #9887*/
/* function ajaxExtend( target, src ) {*/
/* 	var deep, key,*/
/* 		flatOptions = jQuery.ajaxSettings.flatOptions || {};*/
/* */
/* 	for ( key in src ) {*/
/* 		if ( src[ key ] !== undefined ) {*/
/* 			( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];*/
/* 		}*/
/* 	}*/
/* 	if ( deep ) {*/
/* 		jQuery.extend( true, target, deep );*/
/* 	}*/
/* */
/* 	return target;*/
/* }*/
/* */
/* /* Handles responses to an ajax request:*/
/*  * - finds the right dataType (mediates between content-type and expected dataType)*/
/*  * - returns the corresponding response*/
/*  *//* */
/* function ajaxHandleResponses( s, jqXHR, responses ) {*/
/* 	var firstDataType, ct, finalDataType, type,*/
/* 		contents = s.contents,*/
/* 		dataTypes = s.dataTypes;*/
/* */
/* 	// Remove auto dataType and get content-type in the process*/
/* 	while ( dataTypes[ 0 ] === "*" ) {*/
/* 		dataTypes.shift();*/
/* 		if ( ct === undefined ) {*/
/* 			ct = s.mimeType || jqXHR.getResponseHeader( "Content-Type" );*/
/* 		}*/
/* 	}*/
/* */
/* 	// Check if we're dealing with a known content-type*/
/* 	if ( ct ) {*/
/* 		for ( type in contents ) {*/
/* 			if ( contents[ type ] && contents[ type ].test( ct ) ) {*/
/* 				dataTypes.unshift( type );*/
/* 				break;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// Check to see if we have a response for the expected dataType*/
/* 	if ( dataTypes[ 0 ] in responses ) {*/
/* 		finalDataType = dataTypes[ 0 ];*/
/* 	} else {*/
/* */
/* 		// Try convertible dataTypes*/
/* 		for ( type in responses ) {*/
/* 			if ( !dataTypes[ 0 ] || s.converters[ type + " " + dataTypes[ 0 ] ] ) {*/
/* 				finalDataType = type;*/
/* 				break;*/
/* 			}*/
/* 			if ( !firstDataType ) {*/
/* 				firstDataType = type;*/
/* 			}*/
/* 		}*/
/* */
/* 		// Or just use first one*/
/* 		finalDataType = finalDataType || firstDataType;*/
/* 	}*/
/* */
/* 	// If we found a dataType*/
/* 	// We add the dataType to the list if needed*/
/* 	// and return the corresponding response*/
/* 	if ( finalDataType ) {*/
/* 		if ( finalDataType !== dataTypes[ 0 ] ) {*/
/* 			dataTypes.unshift( finalDataType );*/
/* 		}*/
/* 		return responses[ finalDataType ];*/
/* 	}*/
/* }*/
/* */
/* /* Chain conversions given the request and the original response*/
/*  * Also sets the responseXXX fields on the jqXHR instance*/
/*  *//* */
/* function ajaxConvert( s, response, jqXHR, isSuccess ) {*/
/* 	var conv2, current, conv, tmp, prev,*/
/* 		converters = {},*/
/* */
/* 		// Work with a copy of dataTypes in case we need to modify it for conversion*/
/* 		dataTypes = s.dataTypes.slice();*/
/* */
/* 	// Create converters map with lowercased keys*/
/* 	if ( dataTypes[ 1 ] ) {*/
/* 		for ( conv in s.converters ) {*/
/* 			converters[ conv.toLowerCase() ] = s.converters[ conv ];*/
/* 		}*/
/* 	}*/
/* */
/* 	current = dataTypes.shift();*/
/* */
/* 	// Convert to each sequential dataType*/
/* 	while ( current ) {*/
/* */
/* 		if ( s.responseFields[ current ] ) {*/
/* 			jqXHR[ s.responseFields[ current ] ] = response;*/
/* 		}*/
/* */
/* 		// Apply the dataFilter if provided*/
/* 		if ( !prev && isSuccess && s.dataFilter ) {*/
/* 			response = s.dataFilter( response, s.dataType );*/
/* 		}*/
/* */
/* 		prev = current;*/
/* 		current = dataTypes.shift();*/
/* */
/* 		if ( current ) {*/
/* */
/* 			// There's only work to do if current dataType is non-auto*/
/* 			if ( current === "*" ) {*/
/* */
/* 				current = prev;*/
/* */
/* 			// Convert response if prev dataType is non-auto and differs from current*/
/* 			} else if ( prev !== "*" && prev !== current ) {*/
/* */
/* 				// Seek a direct converter*/
/* 				conv = converters[ prev + " " + current ] || converters[ "* " + current ];*/
/* */
/* 				// If none found, seek a pair*/
/* 				if ( !conv ) {*/
/* 					for ( conv2 in converters ) {*/
/* */
/* 						// If conv2 outputs current*/
/* 						tmp = conv2.split( " " );*/
/* 						if ( tmp[ 1 ] === current ) {*/
/* */
/* 							// If prev can be converted to accepted input*/
/* 							conv = converters[ prev + " " + tmp[ 0 ] ] ||*/
/* 								converters[ "* " + tmp[ 0 ] ];*/
/* 							if ( conv ) {*/
/* */
/* 								// Condense equivalence converters*/
/* 								if ( conv === true ) {*/
/* 									conv = converters[ conv2 ];*/
/* */
/* 								// Otherwise, insert the intermediate dataType*/
/* 								} else if ( converters[ conv2 ] !== true ) {*/
/* 									current = tmp[ 0 ];*/
/* 									dataTypes.unshift( tmp[ 1 ] );*/
/* 								}*/
/* 								break;*/
/* 							}*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				// Apply converter (if not an equivalence)*/
/* 				if ( conv !== true ) {*/
/* */
/* 					// Unless errors are allowed to bubble, catch and return them*/
/* 					if ( conv && s[ "throws" ] ) { // jscs:ignore requireDotNotation*/
/* 						response = conv( response );*/
/* 					} else {*/
/* 						try {*/
/* 							response = conv( response );*/
/* 						} catch ( e ) {*/
/* 							return {*/
/* 								state: "parsererror",*/
/* 								error: conv ? e : "No conversion from " + prev + " to " + current*/
/* 							};*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	return { state: "success", data: response };*/
/* }*/
/* */
/* jQuery.extend( {*/
/* */
/* 	// Counter for holding the number of active queries*/
/* 	active: 0,*/
/* */
/* 	// Last-Modified header cache for next request*/
/* 	lastModified: {},*/
/* 	etag: {},*/
/* */
/* 	ajaxSettings: {*/
/* 		url: ajaxLocation,*/
/* 		type: "GET",*/
/* 		isLocal: rlocalProtocol.test( ajaxLocParts[ 1 ] ),*/
/* 		global: true,*/
/* 		processData: true,*/
/* 		async: true,*/
/* 		contentType: "application/x-www-form-urlencoded; charset=UTF-8",*/
/* 		/**/
/* 		timeout: 0,*/
/* 		data: null,*/
/* 		dataType: null,*/
/* 		username: null,*/
/* 		password: null,*/
/* 		cache: null,*/
/* 		throws: false,*/
/* 		traditional: false,*/
/* 		headers: {},*/
/* 		*//* */
/* */
/* 		accepts: {*/
/* 			"*": allTypes,*/
/* 			text: "text/plain",*/
/* 			html: "text/html",*/
/* 			xml: "application/xml, text/xml",*/
/* 			json: "application/json, text/javascript"*/
/* 		},*/
/* */
/* 		contents: {*/
/* 			xml: /\bxml\b/,*/
/* 			html: /\bhtml/,*/
/* 			json: /\bjson\b/*/
/* 		},*/
/* */
/* 		responseFields: {*/
/* 			xml: "responseXML",*/
/* 			text: "responseText",*/
/* 			json: "responseJSON"*/
/* 		},*/
/* */
/* 		// Data converters*/
/* 		// Keys separate source (or catchall "*") and destination types with a single space*/
/* 		converters: {*/
/* */
/* 			// Convert anything to text*/
/* 			"* text": String,*/
/* */
/* 			// Text to html (true = no transformation)*/
/* 			"text html": true,*/
/* */
/* 			// Evaluate text as a json expression*/
/* 			"text json": jQuery.parseJSON,*/
/* */
/* 			// Parse text as xml*/
/* 			"text xml": jQuery.parseXML*/
/* 		},*/
/* */
/* 		// For options that shouldn't be deep extended:*/
/* 		// you can add your own custom options here if*/
/* 		// and when you create one that shouldn't be*/
/* 		// deep extended (see ajaxExtend)*/
/* 		flatOptions: {*/
/* 			url: true,*/
/* 			context: true*/
/* 		}*/
/* 	},*/
/* */
/* 	// Creates a full fledged settings object into target*/
/* 	// with both ajaxSettings and settings fields.*/
/* 	// If target is omitted, writes into ajaxSettings.*/
/* 	ajaxSetup: function( target, settings ) {*/
/* 		return settings ?*/
/* */
/* 			// Building a settings object*/
/* 			ajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :*/
/* */
/* 			// Extending ajaxSettings*/
/* 			ajaxExtend( jQuery.ajaxSettings, target );*/
/* 	},*/
/* */
/* 	ajaxPrefilter: addToPrefiltersOrTransports( prefilters ),*/
/* 	ajaxTransport: addToPrefiltersOrTransports( transports ),*/
/* */
/* 	// Main method*/
/* 	ajax: function( url, options ) {*/
/* */
/* 		// If url is an object, simulate pre-1.5 signature*/
/* 		if ( typeof url === "object" ) {*/
/* 			options = url;*/
/* 			url = undefined;*/
/* 		}*/
/* */
/* 		// Force options to be an object*/
/* 		options = options || {};*/
/* */
/* 		var*/
/* */
/* 			// Cross-domain detection vars*/
/* 			parts,*/
/* */
/* 			// Loop variable*/
/* 			i,*/
/* */
/* 			// URL without anti-cache param*/
/* 			cacheURL,*/
/* */
/* 			// Response headers as string*/
/* 			responseHeadersString,*/
/* */
/* 			// timeout handle*/
/* 			timeoutTimer,*/
/* */
/* 			// To know if global events are to be dispatched*/
/* 			fireGlobals,*/
/* */
/* 			transport,*/
/* */
/* 			// Response headers*/
/* 			responseHeaders,*/
/* */
/* 			// Create the final options object*/
/* 			s = jQuery.ajaxSetup( {}, options ),*/
/* */
/* 			// Callbacks context*/
/* 			callbackContext = s.context || s,*/
/* */
/* 			// Context for global events is callbackContext if it is a DOM node or jQuery collection*/
/* 			globalEventContext = s.context &&*/
/* 				( callbackContext.nodeType || callbackContext.jquery ) ?*/
/* 					jQuery( callbackContext ) :*/
/* 					jQuery.event,*/
/* */
/* 			// Deferreds*/
/* 			deferred = jQuery.Deferred(),*/
/* 			completeDeferred = jQuery.Callbacks( "once memory" ),*/
/* */
/* 			// Status-dependent callbacks*/
/* 			statusCode = s.statusCode || {},*/
/* */
/* 			// Headers (they are sent all at once)*/
/* 			requestHeaders = {},*/
/* 			requestHeadersNames = {},*/
/* */
/* 			// The jqXHR state*/
/* 			state = 0,*/
/* */
/* 			// Default abort message*/
/* 			strAbort = "canceled",*/
/* */
/* 			// Fake xhr*/
/* 			jqXHR = {*/
/* 				readyState: 0,*/
/* */
/* 				// Builds headers hashtable if needed*/
/* 				getResponseHeader: function( key ) {*/
/* 					var match;*/
/* 					if ( state === 2 ) {*/
/* 						if ( !responseHeaders ) {*/
/* 							responseHeaders = {};*/
/* 							while ( ( match = rheaders.exec( responseHeadersString ) ) ) {*/
/* 								responseHeaders[ match[ 1 ].toLowerCase() ] = match[ 2 ];*/
/* 							}*/
/* 						}*/
/* 						match = responseHeaders[ key.toLowerCase() ];*/
/* 					}*/
/* 					return match == null ? null : match;*/
/* 				},*/
/* */
/* 				// Raw string*/
/* 				getAllResponseHeaders: function() {*/
/* 					return state === 2 ? responseHeadersString : null;*/
/* 				},*/
/* */
/* 				// Caches the header*/
/* 				setRequestHeader: function( name, value ) {*/
/* 					var lname = name.toLowerCase();*/
/* 					if ( !state ) {*/
/* 						name = requestHeadersNames[ lname ] = requestHeadersNames[ lname ] || name;*/
/* 						requestHeaders[ name ] = value;*/
/* 					}*/
/* 					return this;*/
/* 				},*/
/* */
/* 				// Overrides response content-type header*/
/* 				overrideMimeType: function( type ) {*/
/* 					if ( !state ) {*/
/* 						s.mimeType = type;*/
/* 					}*/
/* 					return this;*/
/* 				},*/
/* */
/* 				// Status-dependent callbacks*/
/* 				statusCode: function( map ) {*/
/* 					var code;*/
/* 					if ( map ) {*/
/* 						if ( state < 2 ) {*/
/* 							for ( code in map ) {*/
/* */
/* 								// Lazy-add the new callback in a way that preserves old ones*/
/* 								statusCode[ code ] = [ statusCode[ code ], map[ code ] ];*/
/* 							}*/
/* 						} else {*/
/* */
/* 							// Execute the appropriate callbacks*/
/* 							jqXHR.always( map[ jqXHR.status ] );*/
/* 						}*/
/* 					}*/
/* 					return this;*/
/* 				},*/
/* */
/* 				// Cancel the request*/
/* 				abort: function( statusText ) {*/
/* 					var finalText = statusText || strAbort;*/
/* 					if ( transport ) {*/
/* 						transport.abort( finalText );*/
/* 					}*/
/* 					done( 0, finalText );*/
/* 					return this;*/
/* 				}*/
/* 			};*/
/* */
/* 		// Attach deferreds*/
/* 		deferred.promise( jqXHR ).complete = completeDeferred.add;*/
/* 		jqXHR.success = jqXHR.done;*/
/* 		jqXHR.error = jqXHR.fail;*/
/* */
/* 		// Remove hash character (#7531: and string promotion)*/
/* 		// Add protocol if not provided (#5866: IE7 issue with protocol-less urls)*/
/* 		// Handle falsy url in the settings object (#10093: consistency with old signature)*/
/* 		// We also use the url parameter if available*/
/* 		s.url = ( ( url || s.url || ajaxLocation ) + "" )*/
/* 			.replace( rhash, "" )*/
/* 			.replace( rprotocol, ajaxLocParts[ 1 ] + "//" );*/
/* */
/* 		// Alias method option to type as per ticket #12004*/
/* 		s.type = options.method || options.type || s.method || s.type;*/
/* */
/* 		// Extract dataTypes list*/
/* 		s.dataTypes = jQuery.trim( s.dataType || "*" ).toLowerCase().match( rnotwhite ) || [ "" ];*/
/* */
/* 		// A cross-domain request is in order when we have a protocol:host:port mismatch*/
/* 		if ( s.crossDomain == null ) {*/
/* 			parts = rurl.exec( s.url.toLowerCase() );*/
/* 			s.crossDomain = !!( parts &&*/
/* 				( parts[ 1 ] !== ajaxLocParts[ 1 ] || parts[ 2 ] !== ajaxLocParts[ 2 ] ||*/
/* 					( parts[ 3 ] || ( parts[ 1 ] === "http:" ? "80" : "443" ) ) !==*/
/* 						( ajaxLocParts[ 3 ] || ( ajaxLocParts[ 1 ] === "http:" ? "80" : "443" ) ) )*/
/* 			);*/
/* 		}*/
/* */
/* 		// Convert data if not already a string*/
/* 		if ( s.data && s.processData && typeof s.data !== "string" ) {*/
/* 			s.data = jQuery.param( s.data, s.traditional );*/
/* 		}*/
/* */
/* 		// Apply prefilters*/
/* 		inspectPrefiltersOrTransports( prefilters, s, options, jqXHR );*/
/* */
/* 		// If request was aborted inside a prefilter, stop there*/
/* 		if ( state === 2 ) {*/
/* 			return jqXHR;*/
/* 		}*/
/* */
/* 		// We can fire global events as of now if asked to*/
/* 		// Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)*/
/* 		fireGlobals = jQuery.event && s.global;*/
/* */
/* 		// Watch for a new set of requests*/
/* 		if ( fireGlobals && jQuery.active++ === 0 ) {*/
/* 			jQuery.event.trigger( "ajaxStart" );*/
/* 		}*/
/* */
/* 		// Uppercase the type*/
/* 		s.type = s.type.toUpperCase();*/
/* */
/* 		// Determine if request has content*/
/* 		s.hasContent = !rnoContent.test( s.type );*/
/* */
/* 		// Save the URL in case we're toying with the If-Modified-Since*/
/* 		// and/or If-None-Match header later on*/
/* 		cacheURL = s.url;*/
/* */
/* 		// More options handling for requests with no content*/
/* 		if ( !s.hasContent ) {*/
/* */
/* 			// If data is available, append data to url*/
/* 			if ( s.data ) {*/
/* 				cacheURL = ( s.url += ( rquery.test( cacheURL ) ? "&" : "?" ) + s.data );*/
/* */
/* 				// #9682: remove data so that it's not used in an eventual retry*/
/* 				delete s.data;*/
/* 			}*/
/* */
/* 			// Add anti-cache in url if needed*/
/* 			if ( s.cache === false ) {*/
/* 				s.url = rts.test( cacheURL ) ?*/
/* */
/* 					// If there is already a '_' parameter, set its value*/
/* 					cacheURL.replace( rts, "$1_=" + nonce++ ) :*/
/* */
/* 					// Otherwise add one to the end*/
/* 					cacheURL + ( rquery.test( cacheURL ) ? "&" : "?" ) + "_=" + nonce++;*/
/* 			}*/
/* 		}*/
/* */
/* 		// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.*/
/* 		if ( s.ifModified ) {*/
/* 			if ( jQuery.lastModified[ cacheURL ] ) {*/
/* 				jqXHR.setRequestHeader( "If-Modified-Since", jQuery.lastModified[ cacheURL ] );*/
/* 			}*/
/* 			if ( jQuery.etag[ cacheURL ] ) {*/
/* 				jqXHR.setRequestHeader( "If-None-Match", jQuery.etag[ cacheURL ] );*/
/* 			}*/
/* 		}*/
/* */
/* 		// Set the correct header, if data is being sent*/
/* 		if ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {*/
/* 			jqXHR.setRequestHeader( "Content-Type", s.contentType );*/
/* 		}*/
/* */
/* 		// Set the Accepts header for the server, depending on the dataType*/
/* 		jqXHR.setRequestHeader(*/
/* 			"Accept",*/
/* 			s.dataTypes[ 0 ] && s.accepts[ s.dataTypes[ 0 ] ] ?*/
/* 				s.accepts[ s.dataTypes[ 0 ] ] +*/
/* 					( s.dataTypes[ 0 ] !== "*" ? ", " + allTypes + "; q=0.01" : "" ) :*/
/* 				s.accepts[ "*" ]*/
/* 		);*/
/* */
/* 		// Check for headers option*/
/* 		for ( i in s.headers ) {*/
/* 			jqXHR.setRequestHeader( i, s.headers[ i ] );*/
/* 		}*/
/* */
/* 		// Allow custom headers/mimetypes and early abort*/
/* 		if ( s.beforeSend &&*/
/* 			( s.beforeSend.call( callbackContext, jqXHR, s ) === false || state === 2 ) ) {*/
/* */
/* 			// Abort if not done already and return*/
/* 			return jqXHR.abort();*/
/* 		}*/
/* */
/* 		// aborting is no longer a cancellation*/
/* 		strAbort = "abort";*/
/* */
/* 		// Install callbacks on deferreds*/
/* 		for ( i in { success: 1, error: 1, complete: 1 } ) {*/
/* 			jqXHR[ i ]( s[ i ] );*/
/* 		}*/
/* */
/* 		// Get transport*/
/* 		transport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );*/
/* */
/* 		// If no transport, we auto-abort*/
/* 		if ( !transport ) {*/
/* 			done( -1, "No Transport" );*/
/* 		} else {*/
/* 			jqXHR.readyState = 1;*/
/* */
/* 			// Send global event*/
/* 			if ( fireGlobals ) {*/
/* 				globalEventContext.trigger( "ajaxSend", [ jqXHR, s ] );*/
/* 			}*/
/* */
/* 			// If request was aborted inside ajaxSend, stop there*/
/* 			if ( state === 2 ) {*/
/* 				return jqXHR;*/
/* 			}*/
/* */
/* 			// Timeout*/
/* 			if ( s.async && s.timeout > 0 ) {*/
/* 				timeoutTimer = window.setTimeout( function() {*/
/* 					jqXHR.abort( "timeout" );*/
/* 				}, s.timeout );*/
/* 			}*/
/* */
/* 			try {*/
/* 				state = 1;*/
/* 				transport.send( requestHeaders, done );*/
/* 			} catch ( e ) {*/
/* */
/* 				// Propagate exception as error if not done*/
/* 				if ( state < 2 ) {*/
/* 					done( -1, e );*/
/* */
/* 				// Simply rethrow otherwise*/
/* 				} else {*/
/* 					throw e;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		// Callback for when everything is done*/
/* 		function done( status, nativeStatusText, responses, headers ) {*/
/* 			var isSuccess, success, error, response, modified,*/
/* 				statusText = nativeStatusText;*/
/* */
/* 			// Called once*/
/* 			if ( state === 2 ) {*/
/* 				return;*/
/* 			}*/
/* */
/* 			// State is "done" now*/
/* 			state = 2;*/
/* */
/* 			// Clear timeout if it exists*/
/* 			if ( timeoutTimer ) {*/
/* 				window.clearTimeout( timeoutTimer );*/
/* 			}*/
/* */
/* 			// Dereference transport for early garbage collection*/
/* 			// (no matter how long the jqXHR object will be used)*/
/* 			transport = undefined;*/
/* */
/* 			// Cache response headers*/
/* 			responseHeadersString = headers || "";*/
/* */
/* 			// Set readyState*/
/* 			jqXHR.readyState = status > 0 ? 4 : 0;*/
/* */
/* 			// Determine if successful*/
/* 			isSuccess = status >= 200 && status < 300 || status === 304;*/
/* */
/* 			// Get response data*/
/* 			if ( responses ) {*/
/* 				response = ajaxHandleResponses( s, jqXHR, responses );*/
/* 			}*/
/* */
/* 			// Convert no matter what (that way responseXXX fields are always set)*/
/* 			response = ajaxConvert( s, response, jqXHR, isSuccess );*/
/* */
/* 			// If successful, handle type chaining*/
/* 			if ( isSuccess ) {*/
/* */
/* 				// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.*/
/* 				if ( s.ifModified ) {*/
/* 					modified = jqXHR.getResponseHeader( "Last-Modified" );*/
/* 					if ( modified ) {*/
/* 						jQuery.lastModified[ cacheURL ] = modified;*/
/* 					}*/
/* 					modified = jqXHR.getResponseHeader( "etag" );*/
/* 					if ( modified ) {*/
/* 						jQuery.etag[ cacheURL ] = modified;*/
/* 					}*/
/* 				}*/
/* */
/* 				// if no content*/
/* 				if ( status === 204 || s.type === "HEAD" ) {*/
/* 					statusText = "nocontent";*/
/* */
/* 				// if not modified*/
/* 				} else if ( status === 304 ) {*/
/* 					statusText = "notmodified";*/
/* */
/* 				// If we have data, let's convert it*/
/* 				} else {*/
/* 					statusText = response.state;*/
/* 					success = response.data;*/
/* 					error = response.error;*/
/* 					isSuccess = !error;*/
/* 				}*/
/* 			} else {*/
/* */
/* 				// We extract error from statusText*/
/* 				// then normalize statusText and status for non-aborts*/
/* 				error = statusText;*/
/* 				if ( status || !statusText ) {*/
/* 					statusText = "error";*/
/* 					if ( status < 0 ) {*/
/* 						status = 0;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			// Set data for the fake xhr object*/
/* 			jqXHR.status = status;*/
/* 			jqXHR.statusText = ( nativeStatusText || statusText ) + "";*/
/* */
/* 			// Success/Error*/
/* 			if ( isSuccess ) {*/
/* 				deferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );*/
/* 			} else {*/
/* 				deferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );*/
/* 			}*/
/* */
/* 			// Status-dependent callbacks*/
/* 			jqXHR.statusCode( statusCode );*/
/* 			statusCode = undefined;*/
/* */
/* 			if ( fireGlobals ) {*/
/* 				globalEventContext.trigger( isSuccess ? "ajaxSuccess" : "ajaxError",*/
/* 					[ jqXHR, s, isSuccess ? success : error ] );*/
/* 			}*/
/* */
/* 			// Complete*/
/* 			completeDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );*/
/* */
/* 			if ( fireGlobals ) {*/
/* 				globalEventContext.trigger( "ajaxComplete", [ jqXHR, s ] );*/
/* */
/* 				// Handle the global AJAX counter*/
/* 				if ( !( --jQuery.active ) ) {*/
/* 					jQuery.event.trigger( "ajaxStop" );*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return jqXHR;*/
/* 	},*/
/* */
/* 	getJSON: function( url, data, callback ) {*/
/* 		return jQuery.get( url, data, callback, "json" );*/
/* 	},*/
/* */
/* 	getScript: function( url, callback ) {*/
/* 		return jQuery.get( url, undefined, callback, "script" );*/
/* 	}*/
/* } );*/
/* */
/* jQuery.each( [ "get", "post" ], function( i, method ) {*/
/* 	jQuery[ method ] = function( url, data, callback, type ) {*/
/* */
/* 		// shift arguments if data argument was omitted*/
/* 		if ( jQuery.isFunction( data ) ) {*/
/* 			type = type || callback;*/
/* 			callback = data;*/
/* 			data = undefined;*/
/* 		}*/
/* */
/* 		// The url can be an options object (which then must have .url)*/
/* 		return jQuery.ajax( jQuery.extend( {*/
/* 			url: url,*/
/* 			type: method,*/
/* 			dataType: type,*/
/* 			data: data,*/
/* 			success: callback*/
/* 		}, jQuery.isPlainObject( url ) && url ) );*/
/* 	};*/
/* } );*/
/* */
/* */
/* jQuery._evalUrl = function( url ) {*/
/* 	return jQuery.ajax( {*/
/* 		url: url,*/
/* */
/* 		// Make this explicit, since user can override this through ajaxSetup (#11264)*/
/* 		type: "GET",*/
/* 		dataType: "script",*/
/* 		cache: true,*/
/* 		async: false,*/
/* 		global: false,*/
/* 		"throws": true*/
/* 	} );*/
/* };*/
/* */
/* */
/* jQuery.fn.extend( {*/
/* 	wrapAll: function( html ) {*/
/* 		if ( jQuery.isFunction( html ) ) {*/
/* 			return this.each( function( i ) {*/
/* 				jQuery( this ).wrapAll( html.call( this, i ) );*/
/* 			} );*/
/* 		}*/
/* */
/* 		if ( this[ 0 ] ) {*/
/* */
/* 			// The elements to wrap the target around*/
/* 			var wrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );*/
/* */
/* 			if ( this[ 0 ].parentNode ) {*/
/* 				wrap.insertBefore( this[ 0 ] );*/
/* 			}*/
/* */
/* 			wrap.map( function() {*/
/* 				var elem = this;*/
/* */
/* 				while ( elem.firstChild && elem.firstChild.nodeType === 1 ) {*/
/* 					elem = elem.firstChild;*/
/* 				}*/
/* */
/* 				return elem;*/
/* 			} ).append( this );*/
/* 		}*/
/* */
/* 		return this;*/
/* 	},*/
/* */
/* 	wrapInner: function( html ) {*/
/* 		if ( jQuery.isFunction( html ) ) {*/
/* 			return this.each( function( i ) {*/
/* 				jQuery( this ).wrapInner( html.call( this, i ) );*/
/* 			} );*/
/* 		}*/
/* */
/* 		return this.each( function() {*/
/* 			var self = jQuery( this ),*/
/* 				contents = self.contents();*/
/* */
/* 			if ( contents.length ) {*/
/* 				contents.wrapAll( html );*/
/* */
/* 			} else {*/
/* 				self.append( html );*/
/* 			}*/
/* 		} );*/
/* 	},*/
/* */
/* 	wrap: function( html ) {*/
/* 		var isFunction = jQuery.isFunction( html );*/
/* */
/* 		return this.each( function( i ) {*/
/* 			jQuery( this ).wrapAll( isFunction ? html.call( this, i ) : html );*/
/* 		} );*/
/* 	},*/
/* */
/* 	unwrap: function() {*/
/* 		return this.parent().each( function() {*/
/* 			if ( !jQuery.nodeName( this, "body" ) ) {*/
/* 				jQuery( this ).replaceWith( this.childNodes );*/
/* 			}*/
/* 		} ).end();*/
/* 	}*/
/* } );*/
/* */
/* */
/* function getDisplay( elem ) {*/
/* 	return elem.style && elem.style.display || jQuery.css( elem, "display" );*/
/* }*/
/* */
/* function filterHidden( elem ) {*/
/* */
/* 	// Disconnected elements are considered hidden*/
/* 	if ( !jQuery.contains( elem.ownerDocument || document, elem ) ) {*/
/* 		return true;*/
/* 	}*/
/* 	while ( elem && elem.nodeType === 1 ) {*/
/* 		if ( getDisplay( elem ) === "none" || elem.type === "hidden" ) {*/
/* 			return true;*/
/* 		}*/
/* 		elem = elem.parentNode;*/
/* 	}*/
/* 	return false;*/
/* }*/
/* */
/* jQuery.expr.filters.hidden = function( elem ) {*/
/* */
/* 	// Support: Opera <= 12.12*/
/* 	// Opera reports offsetWidths and offsetHeights less than zero on some elements*/
/* 	return support.reliableHiddenOffsets() ?*/
/* 		( elem.offsetWidth <= 0 && elem.offsetHeight <= 0 &&*/
/* 			!elem.getClientRects().length ) :*/
/* 			filterHidden( elem );*/
/* };*/
/* */
/* jQuery.expr.filters.visible = function( elem ) {*/
/* 	return !jQuery.expr.filters.hidden( elem );*/
/* };*/
/* */
/* */
/* */
/* */
/* var r20 = /%20/g,*/
/* 	rbracket = /\[\]$/,*/
/* 	rCRLF = /\r?\n/g,*/
/* 	rsubmitterTypes = /^(?:submit|button|image|reset|file)$/i,*/
/* 	rsubmittable = /^(?:input|select|textarea|keygen)/i;*/
/* */
/* function buildParams( prefix, obj, traditional, add ) {*/
/* 	var name;*/
/* */
/* 	if ( jQuery.isArray( obj ) ) {*/
/* */
/* 		// Serialize array item.*/
/* 		jQuery.each( obj, function( i, v ) {*/
/* 			if ( traditional || rbracket.test( prefix ) ) {*/
/* */
/* 				// Treat each array item as a scalar.*/
/* 				add( prefix, v );*/
/* */
/* 			} else {*/
/* */
/* 				// Item is non-scalar (array or object), encode its numeric index.*/
/* 				buildParams(*/
/* 					prefix + "[" + ( typeof v === "object" && v != null ? i : "" ) + "]",*/
/* 					v,*/
/* 					traditional,*/
/* 					add*/
/* 				);*/
/* 			}*/
/* 		} );*/
/* */
/* 	} else if ( !traditional && jQuery.type( obj ) === "object" ) {*/
/* */
/* 		// Serialize object item.*/
/* 		for ( name in obj ) {*/
/* 			buildParams( prefix + "[" + name + "]", obj[ name ], traditional, add );*/
/* 		}*/
/* */
/* 	} else {*/
/* */
/* 		// Serialize scalar item.*/
/* 		add( prefix, obj );*/
/* 	}*/
/* }*/
/* */
/* // Serialize an array of form elements or a set of*/
/* // key/values into a query string*/
/* jQuery.param = function( a, traditional ) {*/
/* 	var prefix,*/
/* 		s = [],*/
/* 		add = function( key, value ) {*/
/* */
/* 			// If value is a function, invoke it and return its value*/
/* 			value = jQuery.isFunction( value ) ? value() : ( value == null ? "" : value );*/
/* 			s[ s.length ] = encodeURIComponent( key ) + "=" + encodeURIComponent( value );*/
/* 		};*/
/* */
/* 	// Set traditional to true for jQuery <= 1.3.2 behavior.*/
/* 	if ( traditional === undefined ) {*/
/* 		traditional = jQuery.ajaxSettings && jQuery.ajaxSettings.traditional;*/
/* 	}*/
/* */
/* 	// If an array was passed in, assume that it is an array of form elements.*/
/* 	if ( jQuery.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {*/
/* */
/* 		// Serialize the form elements*/
/* 		jQuery.each( a, function() {*/
/* 			add( this.name, this.value );*/
/* 		} );*/
/* */
/* 	} else {*/
/* */
/* 		// If traditional, encode the "old" way (the way 1.3.2 or older*/
/* 		// did it), otherwise encode params recursively.*/
/* 		for ( prefix in a ) {*/
/* 			buildParams( prefix, a[ prefix ], traditional, add );*/
/* 		}*/
/* 	}*/
/* */
/* 	// Return the resulting serialization*/
/* 	return s.join( "&" ).replace( r20, "+" );*/
/* };*/
/* */
/* jQuery.fn.extend( {*/
/* 	serialize: function() {*/
/* 		return jQuery.param( this.serializeArray() );*/
/* 	},*/
/* 	serializeArray: function() {*/
/* 		return this.map( function() {*/
/* */
/* 			// Can add propHook for "elements" to filter or add form elements*/
/* 			var elements = jQuery.prop( this, "elements" );*/
/* 			return elements ? jQuery.makeArray( elements ) : this;*/
/* 		} )*/
/* 		.filter( function() {*/
/* 			var type = this.type;*/
/* */
/* 			// Use .is(":disabled") so that fieldset[disabled] works*/
/* 			return this.name && !jQuery( this ).is( ":disabled" ) &&*/
/* 				rsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&*/
/* 				( this.checked || !rcheckableType.test( type ) );*/
/* 		} )*/
/* 		.map( function( i, elem ) {*/
/* 			var val = jQuery( this ).val();*/
/* */
/* 			return val == null ?*/
/* 				null :*/
/* 				jQuery.isArray( val ) ?*/
/* 					jQuery.map( val, function( val ) {*/
/* 						return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };*/
/* 					} ) :*/
/* 					{ name: elem.name, value: val.replace( rCRLF, "\r\n" ) };*/
/* 		} ).get();*/
/* 	}*/
/* } );*/
/* */
/* */
/* // Create the request object*/
/* // (This is still attached to ajaxSettings for backward compatibility)*/
/* jQuery.ajaxSettings.xhr = window.ActiveXObject !== undefined ?*/
/* */
/* 	// Support: IE6-IE8*/
/* 	function() {*/
/* */
/* 		// XHR cannot access local files, always use ActiveX for that case*/
/* 		if ( this.isLocal ) {*/
/* 			return createActiveXHR();*/
/* 		}*/
/* */
/* 		// Support: IE 9-11*/
/* 		// IE seems to error on cross-domain PATCH requests when ActiveX XHR*/
/* 		// is used. In IE 9+ always use the native XHR.*/
/* 		// Note: this condition won't catch Edge as it doesn't define*/
/* 		// document.documentMode but it also doesn't support ActiveX so it won't*/
/* 		// reach this code.*/
/* 		if ( document.documentMode > 8 ) {*/
/* 			return createStandardXHR();*/
/* 		}*/
/* */
/* 		// Support: IE<9*/
/* 		// oldIE XHR does not support non-RFC2616 methods (#13240)*/
/* 		// See http://msdn.microsoft.com/en-us/library/ie/ms536648(v=vs.85).aspx*/
/* 		// and http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html#sec9*/
/* 		// Although this check for six methods instead of eight*/
/* 		// since IE also does not support "trace" and "connect"*/
/* 		return /^(get|post|head|put|delete|options)$/i.test( this.type ) &&*/
/* 			createStandardXHR() || createActiveXHR();*/
/* 	} :*/
/* */
/* 	// For all other browsers, use the standard XMLHttpRequest object*/
/* 	createStandardXHR;*/
/* */
/* var xhrId = 0,*/
/* 	xhrCallbacks = {},*/
/* 	xhrSupported = jQuery.ajaxSettings.xhr();*/
/* */
/* // Support: IE<10*/
/* // Open requests must be manually aborted on unload (#5280)*/
/* // See https://support.microsoft.com/kb/2856746 for more info*/
/* if ( window.attachEvent ) {*/
/* 	window.attachEvent( "onunload", function() {*/
/* 		for ( var key in xhrCallbacks ) {*/
/* 			xhrCallbacks[ key ]( undefined, true );*/
/* 		}*/
/* 	} );*/
/* }*/
/* */
/* // Determine support properties*/
/* support.cors = !!xhrSupported && ( "withCredentials" in xhrSupported );*/
/* xhrSupported = support.ajax = !!xhrSupported;*/
/* */
/* // Create transport if the browser can provide an xhr*/
/* if ( xhrSupported ) {*/
/* */
/* 	jQuery.ajaxTransport( function( options ) {*/
/* */
/* 		// Cross domain only allowed if supported through XMLHttpRequest*/
/* 		if ( !options.crossDomain || support.cors ) {*/
/* */
/* 			var callback;*/
/* */
/* 			return {*/
/* 				send: function( headers, complete ) {*/
/* 					var i,*/
/* 						xhr = options.xhr(),*/
/* 						id = ++xhrId;*/
/* */
/* 					// Open the socket*/
/* 					xhr.open(*/
/* 						options.type,*/
/* 						options.url,*/
/* 						options.async,*/
/* 						options.username,*/
/* 						options.password*/
/* 					);*/
/* */
/* 					// Apply custom fields if provided*/
/* 					if ( options.xhrFields ) {*/
/* 						for ( i in options.xhrFields ) {*/
/* 							xhr[ i ] = options.xhrFields[ i ];*/
/* 						}*/
/* 					}*/
/* */
/* 					// Override mime type if needed*/
/* 					if ( options.mimeType && xhr.overrideMimeType ) {*/
/* 						xhr.overrideMimeType( options.mimeType );*/
/* 					}*/
/* */
/* 					// X-Requested-With header*/
/* 					// For cross-domain requests, seeing as conditions for a preflight are*/
/* 					// akin to a jigsaw puzzle, we simply never set it to be sure.*/
/* 					// (it can always be set on a per-request basis or even using ajaxSetup)*/
/* 					// For same-domain requests, won't change header if already provided.*/
/* 					if ( !options.crossDomain && !headers[ "X-Requested-With" ] ) {*/
/* 						headers[ "X-Requested-With" ] = "XMLHttpRequest";*/
/* 					}*/
/* */
/* 					// Set headers*/
/* 					for ( i in headers ) {*/
/* */
/* 						// Support: IE<9*/
/* 						// IE's ActiveXObject throws a 'Type Mismatch' exception when setting*/
/* 						// request header to a null-value.*/
/* 						//*/
/* 						// To keep consistent with other XHR implementations, cast the value*/
/* 						// to string and ignore `undefined`.*/
/* 						if ( headers[ i ] !== undefined ) {*/
/* 							xhr.setRequestHeader( i, headers[ i ] + "" );*/
/* 						}*/
/* 					}*/
/* */
/* 					// Do send the request*/
/* 					// This may raise an exception which is actually*/
/* 					// handled in jQuery.ajax (so no try/catch here)*/
/* 					xhr.send( ( options.hasContent && options.data ) || null );*/
/* */
/* 					// Listener*/
/* 					callback = function( _, isAbort ) {*/
/* 						var status, statusText, responses;*/
/* */
/* 						// Was never called and is aborted or complete*/
/* 						if ( callback && ( isAbort || xhr.readyState === 4 ) ) {*/
/* */
/* 							// Clean up*/
/* 							delete xhrCallbacks[ id ];*/
/* 							callback = undefined;*/
/* 							xhr.onreadystatechange = jQuery.noop;*/
/* */
/* 							// Abort manually if needed*/
/* 							if ( isAbort ) {*/
/* 								if ( xhr.readyState !== 4 ) {*/
/* 									xhr.abort();*/
/* 								}*/
/* 							} else {*/
/* 								responses = {};*/
/* 								status = xhr.status;*/
/* */
/* 								// Support: IE<10*/
/* 								// Accessing binary-data responseText throws an exception*/
/* 								// (#11426)*/
/* 								if ( typeof xhr.responseText === "string" ) {*/
/* 									responses.text = xhr.responseText;*/
/* 								}*/
/* */
/* 								// Firefox throws an exception when accessing*/
/* 								// statusText for faulty cross-domain requests*/
/* 								try {*/
/* 									statusText = xhr.statusText;*/
/* 								} catch ( e ) {*/
/* */
/* 									// We normalize with Webkit giving an empty statusText*/
/* 									statusText = "";*/
/* 								}*/
/* */
/* 								// Filter status for non standard behaviors*/
/* */
/* 								// If the request is local and we have data: assume a success*/
/* 								// (success with no data won't get notified, that's the best we*/
/* 								// can do given current implementations)*/
/* 								if ( !status && options.isLocal && !options.crossDomain ) {*/
/* 									status = responses.text ? 200 : 404;*/
/* */
/* 								// IE - #1450: sometimes returns 1223 when it should be 204*/
/* 								} else if ( status === 1223 ) {*/
/* 									status = 204;*/
/* 								}*/
/* 							}*/
/* 						}*/
/* */
/* 						// Call complete if needed*/
/* 						if ( responses ) {*/
/* 							complete( status, statusText, responses, xhr.getAllResponseHeaders() );*/
/* 						}*/
/* 					};*/
/* */
/* 					// Do send the request*/
/* 					// `xhr.send` may raise an exception, but it will be*/
/* 					// handled in jQuery.ajax (so no try/catch here)*/
/* 					if ( !options.async ) {*/
/* */
/* 						// If we're in sync mode we fire the callback*/
/* 						callback();*/
/* 					} else if ( xhr.readyState === 4 ) {*/
/* */
/* 						// (IE6 & IE7) if it's in cache and has been*/
/* 						// retrieved directly we need to fire the callback*/
/* 						window.setTimeout( callback );*/
/* 					} else {*/
/* */
/* 						// Register the callback, but delay it in case `xhr.send` throws*/
/* 						// Add to the list of active xhr callbacks*/
/* 						xhr.onreadystatechange = xhrCallbacks[ id ] = callback;*/
/* 					}*/
/* 				},*/
/* */
/* 				abort: function() {*/
/* 					if ( callback ) {*/
/* 						callback( undefined, true );*/
/* 					}*/
/* 				}*/
/* 			};*/
/* 		}*/
/* 	} );*/
/* }*/
/* */
/* // Functions to create xhrs*/
/* function createStandardXHR() {*/
/* 	try {*/
/* 		return new window.XMLHttpRequest();*/
/* 	} catch ( e ) {}*/
/* }*/
/* */
/* function createActiveXHR() {*/
/* 	try {*/
/* 		return new window.ActiveXObject( "Microsoft.XMLHTTP" );*/
/* 	} catch ( e ) {}*/
/* }*/
/* */
/* */
/* */
/* */
/* // Install script dataType*/
/* jQuery.ajaxSetup( {*/
/* 	accepts: {*/
/* 		script: "text/javascript, application/javascript, " +*/
/* 			"application/ecmascript, application/x-ecmascript"*/
/* 	},*/
/* 	contents: {*/
/* 		script: /\b(?:java|ecma)script\b/*/
/* 	},*/
/* 	converters: {*/
/* 		"text script": function( text ) {*/
/* 			jQuery.globalEval( text );*/
/* 			return text;*/
/* 		}*/
/* 	}*/
/* } );*/
/* */
/* // Handle cache's special case and global*/
/* jQuery.ajaxPrefilter( "script", function( s ) {*/
/* 	if ( s.cache === undefined ) {*/
/* 		s.cache = false;*/
/* 	}*/
/* 	if ( s.crossDomain ) {*/
/* 		s.type = "GET";*/
/* 		s.global = false;*/
/* 	}*/
/* } );*/
/* */
/* // Bind script tag hack transport*/
/* jQuery.ajaxTransport( "script", function( s ) {*/
/* */
/* 	// This transport only deals with cross domain requests*/
/* 	if ( s.crossDomain ) {*/
/* */
/* 		var script,*/
/* 			head = document.head || jQuery( "head" )[ 0 ] || document.documentElement;*/
/* */
/* 		return {*/
/* */
/* 			send: function( _, callback ) {*/
/* */
/* 				script = document.createElement( "script" );*/
/* */
/* 				script.async = true;*/
/* */
/* 				if ( s.scriptCharset ) {*/
/* 					script.charset = s.scriptCharset;*/
/* 				}*/
/* */
/* 				script.src = s.url;*/
/* */
/* 				// Attach handlers for all browsers*/
/* 				script.onload = script.onreadystatechange = function( _, isAbort ) {*/
/* */
/* 					if ( isAbort || !script.readyState || /loaded|complete/.test( script.readyState ) ) {*/
/* */
/* 						// Handle memory leak in IE*/
/* 						script.onload = script.onreadystatechange = null;*/
/* */
/* 						// Remove the script*/
/* 						if ( script.parentNode ) {*/
/* 							script.parentNode.removeChild( script );*/
/* 						}*/
/* */
/* 						// Dereference the script*/
/* 						script = null;*/
/* */
/* 						// Callback if not abort*/
/* 						if ( !isAbort ) {*/
/* 							callback( 200, "success" );*/
/* 						}*/
/* 					}*/
/* 				};*/
/* */
/* 				// Circumvent IE6 bugs with base elements (#2709 and #4378) by prepending*/
/* 				// Use native DOM manipulation to avoid our domManip AJAX trickery*/
/* 				head.insertBefore( script, head.firstChild );*/
/* 			},*/
/* */
/* 			abort: function() {*/
/* 				if ( script ) {*/
/* 					script.onload( undefined, true );*/
/* 				}*/
/* 			}*/
/* 		};*/
/* 	}*/
/* } );*/
/* */
/* */
/* */
/* */
/* var oldCallbacks = [],*/
/* 	rjsonp = /(=)\?(?=&|$)|\?\?/;*/
/* */
/* // Default jsonp settings*/
/* jQuery.ajaxSetup( {*/
/* 	jsonp: "callback",*/
/* 	jsonpCallback: function() {*/
/* 		var callback = oldCallbacks.pop() || ( jQuery.expando + "_" + ( nonce++ ) );*/
/* 		this[ callback ] = true;*/
/* 		return callback;*/
/* 	}*/
/* } );*/
/* */
/* // Detect, normalize options and install callbacks for jsonp requests*/
/* jQuery.ajaxPrefilter( "json jsonp", function( s, originalSettings, jqXHR ) {*/
/* */
/* 	var callbackName, overwritten, responseContainer,*/
/* 		jsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?*/
/* 			"url" :*/
/* 			typeof s.data === "string" &&*/
/* 				( s.contentType || "" )*/
/* 					.indexOf( "application/x-www-form-urlencoded" ) === 0 &&*/
/* 				rjsonp.test( s.data ) && "data"*/
/* 		);*/
/* */
/* 	// Handle iff the expected data type is "jsonp" or we have a parameter to set*/
/* 	if ( jsonProp || s.dataTypes[ 0 ] === "jsonp" ) {*/
/* */
/* 		// Get callback name, remembering preexisting value associated with it*/
/* 		callbackName = s.jsonpCallback = jQuery.isFunction( s.jsonpCallback ) ?*/
/* 			s.jsonpCallback() :*/
/* 			s.jsonpCallback;*/
/* */
/* 		// Insert callback into url or form data*/
/* 		if ( jsonProp ) {*/
/* 			s[ jsonProp ] = s[ jsonProp ].replace( rjsonp, "$1" + callbackName );*/
/* 		} else if ( s.jsonp !== false ) {*/
/* 			s.url += ( rquery.test( s.url ) ? "&" : "?" ) + s.jsonp + "=" + callbackName;*/
/* 		}*/
/* */
/* 		// Use data converter to retrieve json after script execution*/
/* 		s.converters[ "script json" ] = function() {*/
/* 			if ( !responseContainer ) {*/
/* 				jQuery.error( callbackName + " was not called" );*/
/* 			}*/
/* 			return responseContainer[ 0 ];*/
/* 		};*/
/* */
/* 		// force json dataType*/
/* 		s.dataTypes[ 0 ] = "json";*/
/* */
/* 		// Install callback*/
/* 		overwritten = window[ callbackName ];*/
/* 		window[ callbackName ] = function() {*/
/* 			responseContainer = arguments;*/
/* 		};*/
/* */
/* 		// Clean-up function (fires after converters)*/
/* 		jqXHR.always( function() {*/
/* */
/* 			// If previous value didn't exist - remove it*/
/* 			if ( overwritten === undefined ) {*/
/* 				jQuery( window ).removeProp( callbackName );*/
/* */
/* 			// Otherwise restore preexisting value*/
/* 			} else {*/
/* 				window[ callbackName ] = overwritten;*/
/* 			}*/
/* */
/* 			// Save back as free*/
/* 			if ( s[ callbackName ] ) {*/
/* */
/* 				// make sure that re-using the options doesn't screw things around*/
/* 				s.jsonpCallback = originalSettings.jsonpCallback;*/
/* */
/* 				// save the callback name for future use*/
/* 				oldCallbacks.push( callbackName );*/
/* 			}*/
/* */
/* 			// Call if it was a function and we have a response*/
/* 			if ( responseContainer && jQuery.isFunction( overwritten ) ) {*/
/* 				overwritten( responseContainer[ 0 ] );*/
/* 			}*/
/* */
/* 			responseContainer = overwritten = undefined;*/
/* 		} );*/
/* */
/* 		// Delegate to script*/
/* 		return "script";*/
/* 	}*/
/* } );*/
/* */
/* */
/* */
/* */
/* // data: string of html*/
/* // context (optional): If specified, the fragment will be created in this context,*/
/* // defaults to document*/
/* // keepScripts (optional): If true, will include scripts passed in the html string*/
/* jQuery.parseHTML = function( data, context, keepScripts ) {*/
/* 	if ( !data || typeof data !== "string" ) {*/
/* 		return null;*/
/* 	}*/
/* 	if ( typeof context === "boolean" ) {*/
/* 		keepScripts = context;*/
/* 		context = false;*/
/* 	}*/
/* 	context = context || document;*/
/* */
/* 	var parsed = rsingleTag.exec( data ),*/
/* 		scripts = !keepScripts && [];*/
/* */
/* 	// Single tag*/
/* 	if ( parsed ) {*/
/* 		return [ context.createElement( parsed[ 1 ] ) ];*/
/* 	}*/
/* */
/* 	parsed = buildFragment( [ data ], context, scripts );*/
/* */
/* 	if ( scripts && scripts.length ) {*/
/* 		jQuery( scripts ).remove();*/
/* 	}*/
/* */
/* 	return jQuery.merge( [], parsed.childNodes );*/
/* };*/
/* */
/* */
/* // Keep a copy of the old load method*/
/* var _load = jQuery.fn.load;*/
/* */
/* /***/
/*  * Load a url into a page*/
/*  *//* */
/* jQuery.fn.load = function( url, params, callback ) {*/
/* 	if ( typeof url !== "string" && _load ) {*/
/* 		return _load.apply( this, arguments );*/
/* 	}*/
/* */
/* 	var selector, type, response,*/
/* 		self = this,*/
/* 		off = url.indexOf( " " );*/
/* */
/* 	if ( off > -1 ) {*/
/* 		selector = jQuery.trim( url.slice( off, url.length ) );*/
/* 		url = url.slice( 0, off );*/
/* 	}*/
/* */
/* 	// If it's a function*/
/* 	if ( jQuery.isFunction( params ) ) {*/
/* */
/* 		// We assume that it's the callback*/
/* 		callback = params;*/
/* 		params = undefined;*/
/* */
/* 	// Otherwise, build a param string*/
/* 	} else if ( params && typeof params === "object" ) {*/
/* 		type = "POST";*/
/* 	}*/
/* */
/* 	// If we have elements to modify, make the request*/
/* 	if ( self.length > 0 ) {*/
/* 		jQuery.ajax( {*/
/* 			url: url,*/
/* */
/* 			// If "type" variable is undefined, then "GET" method will be used.*/
/* 			// Make value of this field explicit since*/
/* 			// user can override it through ajaxSetup method*/
/* 			type: type || "GET",*/
/* 			dataType: "html",*/
/* 			data: params*/
/* 		} ).done( function( responseText ) {*/
/* */
/* 			// Save response for use in complete callback*/
/* 			response = arguments;*/
/* */
/* 			self.html( selector ?*/
/* */
/* 				// If a selector was specified, locate the right elements in a dummy div*/
/* 				// Exclude scripts to avoid IE 'Permission Denied' errors*/
/* 				jQuery( "<div>" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :*/
/* */
/* 				// Otherwise use the full result*/
/* 				responseText );*/
/* */
/* 		// If the request succeeds, this function gets "data", "status", "jqXHR"*/
/* 		// but they are ignored because response was set above.*/
/* 		// If it fails, this function gets "jqXHR", "status", "error"*/
/* 		} ).always( callback && function( jqXHR, status ) {*/
/* 			self.each( function() {*/
/* 				callback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );*/
/* 			} );*/
/* 		} );*/
/* 	}*/
/* */
/* 	return this;*/
/* };*/
/* */
/* */
/* */
/* */
/* // Attach a bunch of functions for handling common AJAX events*/
/* jQuery.each( [*/
/* 	"ajaxStart",*/
/* 	"ajaxStop",*/
/* 	"ajaxComplete",*/
/* 	"ajaxError",*/
/* 	"ajaxSuccess",*/
/* 	"ajaxSend"*/
/* ], function( i, type ) {*/
/* 	jQuery.fn[ type ] = function( fn ) {*/
/* 		return this.on( type, fn );*/
/* 	};*/
/* } );*/
/* */
/* */
/* */
/* */
/* jQuery.expr.filters.animated = function( elem ) {*/
/* 	return jQuery.grep( jQuery.timers, function( fn ) {*/
/* 		return elem === fn.elem;*/
/* 	} ).length;*/
/* };*/
/* */
/* */
/* */
/* */
/* */
/* /***/
/*  * Gets a window from an element*/
/*  *//* */
/* function getWindow( elem ) {*/
/* 	return jQuery.isWindow( elem ) ?*/
/* 		elem :*/
/* 		elem.nodeType === 9 ?*/
/* 			elem.defaultView || elem.parentWindow :*/
/* 			false;*/
/* }*/
/* */
/* jQuery.offset = {*/
/* 	setOffset: function( elem, options, i ) {*/
/* 		var curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,*/
/* 			position = jQuery.css( elem, "position" ),*/
/* 			curElem = jQuery( elem ),*/
/* 			props = {};*/
/* */
/* 		// set position first, in-case top/left are set even on static elem*/
/* 		if ( position === "static" ) {*/
/* 			elem.style.position = "relative";*/
/* 		}*/
/* */
/* 		curOffset = curElem.offset();*/
/* 		curCSSTop = jQuery.css( elem, "top" );*/
/* 		curCSSLeft = jQuery.css( elem, "left" );*/
/* 		calculatePosition = ( position === "absolute" || position === "fixed" ) &&*/
/* 			jQuery.inArray( "auto", [ curCSSTop, curCSSLeft ] ) > -1;*/
/* */
/* 		// need to be able to calculate position if either top or left*/
/* 		// is auto and position is either absolute or fixed*/
/* 		if ( calculatePosition ) {*/
/* 			curPosition = curElem.position();*/
/* 			curTop = curPosition.top;*/
/* 			curLeft = curPosition.left;*/
/* 		} else {*/
/* 			curTop = parseFloat( curCSSTop ) || 0;*/
/* 			curLeft = parseFloat( curCSSLeft ) || 0;*/
/* 		}*/
/* */
/* 		if ( jQuery.isFunction( options ) ) {*/
/* */
/* 			// Use jQuery.extend here to allow modification of coordinates argument (gh-1848)*/
/* 			options = options.call( elem, i, jQuery.extend( {}, curOffset ) );*/
/* 		}*/
/* */
/* 		if ( options.top != null ) {*/
/* 			props.top = ( options.top - curOffset.top ) + curTop;*/
/* 		}*/
/* 		if ( options.left != null ) {*/
/* 			props.left = ( options.left - curOffset.left ) + curLeft;*/
/* 		}*/
/* */
/* 		if ( "using" in options ) {*/
/* 			options.using.call( elem, props );*/
/* 		} else {*/
/* 			curElem.css( props );*/
/* 		}*/
/* 	}*/
/* };*/
/* */
/* jQuery.fn.extend( {*/
/* 	offset: function( options ) {*/
/* 		if ( arguments.length ) {*/
/* 			return options === undefined ?*/
/* 				this :*/
/* 				this.each( function( i ) {*/
/* 					jQuery.offset.setOffset( this, options, i );*/
/* 				} );*/
/* 		}*/
/* */
/* 		var docElem, win,*/
/* 			box = { top: 0, left: 0 },*/
/* 			elem = this[ 0 ],*/
/* 			doc = elem && elem.ownerDocument;*/
/* */
/* 		if ( !doc ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		docElem = doc.documentElement;*/
/* */
/* 		// Make sure it's not a disconnected DOM node*/
/* 		if ( !jQuery.contains( docElem, elem ) ) {*/
/* 			return box;*/
/* 		}*/
/* */
/* 		// If we don't have gBCR, just use 0,0 rather than error*/
/* 		// BlackBerry 5, iOS 3 (original iPhone)*/
/* 		if ( typeof elem.getBoundingClientRect !== "undefined" ) {*/
/* 			box = elem.getBoundingClientRect();*/
/* 		}*/
/* 		win = getWindow( doc );*/
/* 		return {*/
/* 			top: box.top  + ( win.pageYOffset || docElem.scrollTop )  - ( docElem.clientTop  || 0 ),*/
/* 			left: box.left + ( win.pageXOffset || docElem.scrollLeft ) - ( docElem.clientLeft || 0 )*/
/* 		};*/
/* 	},*/
/* */
/* 	position: function() {*/
/* 		if ( !this[ 0 ] ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		var offsetParent, offset,*/
/* 			parentOffset = { top: 0, left: 0 },*/
/* 			elem = this[ 0 ];*/
/* */
/* 		// Fixed elements are offset from window (parentOffset = {top:0, left: 0},*/
/* 		// because it is its only offset parent*/
/* 		if ( jQuery.css( elem, "position" ) === "fixed" ) {*/
/* */
/* 			// we assume that getBoundingClientRect is available when computed position is fixed*/
/* 			offset = elem.getBoundingClientRect();*/
/* 		} else {*/
/* */
/* 			// Get *real* offsetParent*/
/* 			offsetParent = this.offsetParent();*/
/* */
/* 			// Get correct offsets*/
/* 			offset = this.offset();*/
/* 			if ( !jQuery.nodeName( offsetParent[ 0 ], "html" ) ) {*/
/* 				parentOffset = offsetParent.offset();*/
/* 			}*/
/* */
/* 			// Add offsetParent borders*/
/* 			parentOffset.top  += jQuery.css( offsetParent[ 0 ], "borderTopWidth", true );*/
/* 			parentOffset.left += jQuery.css( offsetParent[ 0 ], "borderLeftWidth", true );*/
/* 		}*/
/* */
/* 		// Subtract parent offsets and element margins*/
/* 		// note: when an element has margin: auto the offsetLeft and marginLeft*/
/* 		// are the same in Safari causing offset.left to incorrectly be 0*/
/* 		return {*/
/* 			top:  offset.top  - parentOffset.top - jQuery.css( elem, "marginTop", true ),*/
/* 			left: offset.left - parentOffset.left - jQuery.css( elem, "marginLeft", true )*/
/* 		};*/
/* 	},*/
/* */
/* 	offsetParent: function() {*/
/* 		return this.map( function() {*/
/* 			var offsetParent = this.offsetParent;*/
/* */
/* 			while ( offsetParent && ( !jQuery.nodeName( offsetParent, "html" ) &&*/
/* 				jQuery.css( offsetParent, "position" ) === "static" ) ) {*/
/* 				offsetParent = offsetParent.offsetParent;*/
/* 			}*/
/* 			return offsetParent || documentElement;*/
/* 		} );*/
/* 	}*/
/* } );*/
/* */
/* // Create scrollLeft and scrollTop methods*/
/* jQuery.each( { scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function( method, prop ) {*/
/* 	var top = /Y/.test( prop );*/
/* */
/* 	jQuery.fn[ method ] = function( val ) {*/
/* 		return access( this, function( elem, method, val ) {*/
/* 			var win = getWindow( elem );*/
/* */
/* 			if ( val === undefined ) {*/
/* 				return win ? ( prop in win ) ? win[ prop ] :*/
/* 					win.document.documentElement[ method ] :*/
/* 					elem[ method ];*/
/* 			}*/
/* */
/* 			if ( win ) {*/
/* 				win.scrollTo(*/
/* 					!top ? val : jQuery( win ).scrollLeft(),*/
/* 					top ? val : jQuery( win ).scrollTop()*/
/* 				);*/
/* */
/* 			} else {*/
/* 				elem[ method ] = val;*/
/* 			}*/
/* 		}, method, val, arguments.length, null );*/
/* 	};*/
/* } );*/
/* */
/* // Support: Safari<7-8+, Chrome<37-44+*/
/* // Add the top/left cssHooks using jQuery.fn.position*/
/* // Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084*/
/* // getComputedStyle returns percent when specified for top/left/bottom/right*/
/* // rather than make the css module depend on the offset module, we just check for it here*/
/* jQuery.each( [ "top", "left" ], function( i, prop ) {*/
/* 	jQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,*/
/* 		function( elem, computed ) {*/
/* 			if ( computed ) {*/
/* 				computed = curCSS( elem, prop );*/
/* */
/* 				// if curCSS returns percentage, fallback to offset*/
/* 				return rnumnonpx.test( computed ) ?*/
/* 					jQuery( elem ).position()[ prop ] + "px" :*/
/* 					computed;*/
/* 			}*/
/* 		}*/
/* 	);*/
/* } );*/
/* */
/* */
/* // Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods*/
/* jQuery.each( { Height: "height", Width: "width" }, function( name, type ) {*/
/* 	jQuery.each( { padding: "inner" + name, content: type, "": "outer" + name },*/
/* 	function( defaultExtra, funcName ) {*/
/* */
/* 		// margin is only for outerHeight, outerWidth*/
/* 		jQuery.fn[ funcName ] = function( margin, value ) {*/
/* 			var chainable = arguments.length && ( defaultExtra || typeof margin !== "boolean" ),*/
/* 				extra = defaultExtra || ( margin === true || value === true ? "margin" : "border" );*/
/* */
/* 			return access( this, function( elem, type, value ) {*/
/* 				var doc;*/
/* */
/* 				if ( jQuery.isWindow( elem ) ) {*/
/* */
/* 					// As of 5/8/2012 this will yield incorrect results for Mobile Safari, but there*/
/* 					// isn't a whole lot we can do. See pull request at this URL for discussion:*/
/* 					// https://github.com/jquery/jquery/pull/764*/
/* 					return elem.document.documentElement[ "client" + name ];*/
/* 				}*/
/* */
/* 				// Get document width or height*/
/* 				if ( elem.nodeType === 9 ) {*/
/* 					doc = elem.documentElement;*/
/* */
/* 					// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],*/
/* 					// whichever is greatest*/
/* 					// unfortunately, this causes bug #3838 in IE6/8 only,*/
/* 					// but there is currently no good, small way to fix it.*/
/* 					return Math.max(*/
/* 						elem.body[ "scroll" + name ], doc[ "scroll" + name ],*/
/* 						elem.body[ "offset" + name ], doc[ "offset" + name ],*/
/* 						doc[ "client" + name ]*/
/* 					);*/
/* 				}*/
/* */
/* 				return value === undefined ?*/
/* */
/* 					// Get width or height on the element, requesting but not forcing parseFloat*/
/* 					jQuery.css( elem, type, extra ) :*/
/* */
/* 					// Set width or height on the element*/
/* 					jQuery.style( elem, type, value, extra );*/
/* 			}, type, chainable ? margin : undefined, chainable, null );*/
/* 		};*/
/* 	} );*/
/* } );*/
/* */
/* */
/* jQuery.fn.extend( {*/
/* */
/* 	bind: function( types, data, fn ) {*/
/* 		return this.on( types, null, data, fn );*/
/* 	},*/
/* 	unbind: function( types, fn ) {*/
/* 		return this.off( types, null, fn );*/
/* 	},*/
/* */
/* 	delegate: function( selector, types, data, fn ) {*/
/* 		return this.on( types, selector, data, fn );*/
/* 	},*/
/* 	undelegate: function( selector, types, fn ) {*/
/* */
/* 		// ( namespace ) or ( selector, types [, fn] )*/
/* 		return arguments.length === 1 ?*/
/* 			this.off( selector, "**" ) :*/
/* 			this.off( types, selector || "**", fn );*/
/* 	}*/
/* } );*/
/* */
/* // The number of elements contained in the matched element set*/
/* jQuery.fn.size = function() {*/
/* 	return this.length;*/
/* };*/
/* */
/* jQuery.fn.andSelf = jQuery.fn.addBack;*/
/* */
/* */
/* */
/* */
/* // Register as a named AMD module, since jQuery can be concatenated with other*/
/* // files that may use define, but not via a proper concatenation script that*/
/* // understands anonymous AMD modules. A named AMD is safest and most robust*/
/* // way to register. Lowercase jquery is used because AMD module names are*/
/* // derived from file names, and jQuery is normally delivered in a lowercase*/
/* // file name. Do this after creating the global so that if an AMD module wants*/
/* // to call noConflict to hide this version of jQuery, it will work.*/
/* */
/* // Note that for maximum portability, libraries that are not jQuery should*/
/* // declare themselves as anonymous modules, and avoid setting a global if an*/
/* // AMD loader is present. jQuery is a special case. For more information, see*/
/* // https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon*/
/* */
/* if ( typeof define === "function" && define.amd ) {*/
/* 	define( "jquery", [], function() {*/
/* 		return jQuery;*/
/* 	} );*/
/* }*/
/* */
/* */
/* */
/* var*/
/* */
/* 	// Map over jQuery in case of overwrite*/
/* 	_jQuery = window.jQuery,*/
/* */
/* 	// Map over the $ in case of overwrite*/
/* 	_$ = window.$;*/
/* */
/* jQuery.noConflict = function( deep ) {*/
/* 	if ( window.$ === jQuery ) {*/
/* 		window.$ = _$;*/
/* 	}*/
/* */
/* 	if ( deep && window.jQuery === jQuery ) {*/
/* 		window.jQuery = _jQuery;*/
/* 	}*/
/* */
/* 	return jQuery;*/
/* };*/
/* */
/* // Expose jQuery and $ identifiers, even in*/
/* // AMD (#7102#comment:10, https://github.com/jquery/jquery/pull/557)*/
/* // and CommonJS for browser emulators (#13566)*/
/* if ( !noGlobal ) {*/
/* 	window.jQuery = window.$ = jQuery;*/
/* }*/
/* */
/* return jQuery;*/
/* }));*/
/* */
