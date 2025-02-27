<?php
/*
+------------------------------------------------
|   BitsB PHP based BitTorrent Tracker
|   =============================================
|   by d6bmg
|   Copyright (C) 2010-2011 BitsB v1.0
|   =============================================
|   svn: http:// coming soon.. :)
|   Licence Info: GPL
+------------------------------------------------
*/

/*************************************************************************************
 * xpp.php
 * -------
 * Author: Simon Butcher (simon@butcher.name)
 * Copyright: (c) 2007 Simon Butcher (http://simon.butcher.name/)
 * Release Version: 1.0.8.3
 * Date Started: 2007/02/27
 *
 * Axapta/Dynamics Ax X++ language file for GeSHi.
 * For details, see <http://msdn.microsoft.com/en-us/library/aa867122.aspx>
 *
 * CHANGES
 * -------
 * 2007/02/28 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2007/02/27)
 * -------------------------
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'X++',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array( // Primitive types
            'void',
            'str',
            'real',
            'int64',
            'int',
            'date',
            'container',
            'boolean',
            'anytype'
            ),
        2 => array( // Keywords
            'window',
            'while',
            'try',
            'true',
            'throw',
            'switch',
            'super',
            'static',
            'server',
            'right',
            'return',
            'retry',
            'public',
            'protected',
            'private',
            'print',
            'pause',
            'null',
            'new',
            'mod',
            'left',
            'interface',
            'implements',
            'if',
            'for',
            'final',
            'false',
            'extends',
            'else',
            'edit',
            'do',
            'div',
            'display',
            'default',
            'continue',
            'client',
            'class',
            'changeCompany',
            'case',
            'breakpoint',
            'break',
            'at',
            'abstract'
            ),
        3 => array( // Functions within the Axapta kernel
            'year',
            'wkofyr',
            'webwebpartstr',
            'webstaticfilestr',
            'websitetempstr',
            'websitedefstr',
            'webreportstr',
            'webpagedefstr',
            'weboutputcontentitemstr',
            'webmenustr',
            'webletitemstr',
            'webformstr',
            'webdisplaycontentitemstr',
            'webactionitemstr',
            'varstr',
            'utilmoyr',
            'uint2str',
            'typeof',
            'typeid',
            'trunc',
            'today',
            'timenow',
            'time2str',
            'term',
            'tanh',
            'tan',
            'tablestr',
            'tablestaticmethodstr',
            'tablepname',
            'tablenum',
            'tablename2id',
            'tablemethodstr',
            'tableid2pname',
            'tableid2name',
            'tablefieldgroupstr',
            'tablecollectionstr',
            'systemdateset',
            'systemdateget',
            'syd',
            'substr',
            'strupr',
            'strscan',
            'strrtrim',
            'strrep',
            'strrem',
            'strprompt',
            'strpoke',
            'strnfind',
            'strlwr',
            'strltrim',
            'strline',
            'strlen',
            'strkeep',
            'strins',
            'strfmt',
            'strfind',
            'strdel',
            'strcolseq',
            'strcmp',
            'stralpha',
            'str2time',
            'str2num',
            'str2int64',
            'str2int',
            'str2guid',
            'str2enum',
            'str2date',
            'staticmethodstr',
            'sln',
            'sleep',
            'sinh',
            'sin',
            'setprefix',
            'sessionid',
            'securitykeystr',
            'securitykeynum',
            'runbuf',
            'runas',
            'round',
            'resourcestr',
            'reportstr',
            'refprintall',
            'rate',
            'querystr',
            'pv',
            'pt',
            'prmisdefault',
            'primoyr',
            'prevyr',
            'prevqtr',
            'prevmth',
            'power',
            'pmt',
            'num2str',
            'num2date',
            'num2char',
            'nextyr',
            'nextqtr',
            'nextmth',
            'newguid',
            'mthofyr',
            'mthname',
            'mkdate',
            'minint',
            'min',
            'methodstr',
            'menustr',
            'menuitemoutputstr',
            'menuitemdisplaystr',
            'menuitemactionstr',
            'maxint',
            'maxdate',
            'max',
            'match',
            'logn',
            'log10',
            'literalstr',
            'licensecodestr',
            'licensecodenum',
            'intvnorm',
            'intvno',
            'intvname',
            'intvmax',
            'int64str',
            'indexstr',
            'indexnum',
            'indexname2id',
            'indexid2name',
            'idg',
            'identifierstr',
            'helpfilestr',
            'helpdevstr',
            'helpapplstr',
            'guid2str',
            'getprefix',
            'getCurrentUTCTime',
            'fv',
            'funcname',
            'frac',
            'formstr',
            'fieldstr',
            'fieldpname',
            'fieldnum',
            'fieldname2id',
            'fieldid2pname',
            'fieldid2name',
            'extendedTypeStr',
            'extendedTypeNum',
            'exp10',
            'exp',
            'evalbuf',
            'enumstr',
            'enumnum',
            'enumcnt',
            'enum2str',
            'endmth',
            'dimof',
            'dg',
            'decround',
            'ddb',
            'dayofyr',
            'dayofwk',
            'dayofmth',
            'dayname',
            'date2str',
            'date2num',
            'curuserid',
            'curext',
            'cterm',
            'cosh',
            'cos',
            'corrflagset',
            'corrflagget',
            'convertUTCTimeToLocalTime',
            'convertUTCDateToLocalDate',
            'conpoke',
            'conpeek',
            'connull',
            'conlen',
            'conins',
            'confind',
            'configurationkeystr',
            'configurationkeynum',
            'condel',
            'classstr',
            'classnum',
            'classidget',
            'char2num',
            'beep',
            'atan',
            'asin',
            'ascii2ansi',
            'any2str',
            'any2real',
            'any2int64',
            'any2int',
            'any2guid',
            'any2enum',
            'any2date',
            'ansi2ascii',
            'acos',
            'abs'
            ),
        4 => array( // X++ SQL stuff
            'where',
            'update_recordset',
            'ttsCommit',
            'ttsBegin',
            'ttsAbort',
            'sum',
            'setting',
            'select',
            'reverse',
            'pessimisticLock',
            'outer',
            'order by',
            'optimisticLock',
            'notExists',
            'noFetch',
            'next',
            'minof',
            'maxof',
            'like',
            'join',
            'insert_recordset',
            'index hint',
            'index',
            'group by',
            'from',
            'forUpdate',
            'forceSelectOrder',
            'forcePlaceholders',
            'forceNestedLoop',
            'forceLiterals',
            'flush',
            'firstOnly',
            'firstFast',
            'exists',
            'desc',
            'delete_from',
            'count',
            'avg',
            'asc'
            )
        ),
    'SYMBOLS' => array( // X++ symbols
        '!',
        '&',
        '(',
        ')',
        '*',
        '^',
        '|',
        '~',
        '+',
        ',',
        '-',
        '/',
        ':',
        '<',
        '=',
        '>',
        '?',
        '[',
        ']',
        '{',
        '}'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff;',
            2 => 'color: #0000ff;',
            3 => 'color: #0000ff;',
            4 => 'color: #0000ff;'
            ),
        'COMMENTS' => array(
            1 => 'color: #007f00;',
            'MULTI' => 'color: #007f00; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000000;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #000000;'
            ),
        'METHODS' => array(
            1 => 'color: #000000;',
            2 => 'color: #000000;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #00007f;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
