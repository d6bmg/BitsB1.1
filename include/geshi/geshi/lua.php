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
 * lua.php
 * -------
 * Author: Roberto Rossi (rsoftware@altervista.org)
 * Copyright: (c) 2004 Roberto Rossi (http://rsoftware.altervista.org), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.3
 * Date Started: 2004/07/10
 *
 * LUA language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/08/26 (1.0.2)
 *  -  Added support for objects and methods
 *  -  Removed unusable keywords
 * 2004/11/27 (1.0.1)
 *  -  Added support for multiple object splitters
 * 2004/10/27 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2004/11/27)
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
    'LANG_NAME' => 'Lua',
    'COMMENT_SINGLE' => array(1 => "--"),
    'COMMENT_MULTI' => array('--[[' => ']]'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'and','break','do','else','elseif','end','false','for','function','if',
            'in','local','nil','not','or','repeat','return','then','true','until','while',
            '_VERSION','assert','collectgarbage','dofile','error','gcinfo','loadfile','loadstring',
            'print','tonumber','tostring','type','unpack',
            '_ALERT','_ERRORMESSAGE','_INPUT','_PROMPT','_OUTPUT',
            '_STDERR','_STDIN','_STDOUT','call','dostring','foreach','foreachi','getn','globals','newtype',
            'rawget','rawset','require','sort','tinsert','tremove',
            'abs','acos','asin','atan','atan2','ceil','cos','deg','exp',
            'floor','format','frexp','gsub','ldexp','log','log10','max','min','mod','rad','random','randomseed',
            'sin','sqrt','strbyte','strchar','strfind','strlen','strlower','strrep','strsub','strupper','tan',
            'openfile','closefile','readfrom','writeto','appendto',
            'remove','rename','flush','seek','tmpfile','tmpname','read','write',
            'clock','date','difftime','execute','exit','getenv','setlocale','time',
            '_G','getfenv','getmetatable','ipairs','loadlib','next','pairs','pcall',
            'rawegal','setfenv','setmetatable','xpcall',
            'string.byte','string.char','string.dump','string.find','string.len',
            'string.lower','string.rep','string.sub','string.upper','string.format','string.gfind','string.gsub',
            'table.concat','table.foreach','table.foreachi','table.getn','table.sort','table.insert','table.remove','table.setn',
            'math.abs','math.acos','math.asin','math.atan','math.atan2','math.ceil','math.cos','math.deg','math.exp',
            'math.floor','math.frexp','math.ldexp','math.log','math.log10','math.max','math.min','math.mod',
            'math.pi','math.rad','math.random','math.randomseed','math.sin','math.sqrt','math.tan',
            'coroutine.create','coroutine.resume','coroutine.status',
            'coroutine.wrap','coroutine.yield',
            'io.close','io.flush','io.input','io.lines','io.open','io.output','io.read','io.tmpfile','io.type','io.write',
            'io.stdin','io.stdout','io.stderr',
            'os.clock','os.date','os.difftime','os.execute','os.exit','os.getenv','os.remove','os.rename',
            'os.setlocale','os.time','os.tmpname',
            'string','table','math','coroutine','io','os','debug'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '!', '@', '%', '&', '*', '|', '/', '<', '>', '=', ';'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            0 => 'color: #b1b100;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
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
