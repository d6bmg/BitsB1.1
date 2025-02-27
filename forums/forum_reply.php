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

if ( ! defined( 'IN_TBDEV_FORUM' ) )
{
	print "{$lang['forum_reply_access']}";
	exit();
}


  //-------- Action: Reply
if ($action == "reply")
  {
    $topicid = isset($_GET["topicid"]) ? (int)$_GET["topicid"] : 0;

    if (!is_valid_id($topicid))
      header("Location: {$TBDEV['baseurl']}/forums.php");
    
    $q = @mysql_query( "SELECT t.id, f.minclassread, f.minclasswrite 
                        FROM topics t
                        LEFT JOIN forums f ON t.forumid = f.id
                        WHERE t.id = $topicid");

    if( mysql_num_rows($q) != 1 )
      stderr("{$lang['forum_reply_user_error']}", "{$lang['forum_reply_select_topic']}");
    
    $check = @mysql_fetch_assoc($q);
    
    if( $CURUSER['class'] < $check['minclassread'] OR $CURUSER['class'] < $check['minclasswrite'] )
      stderr("{$lang['forum_reply_user_error']}", "{$lang['forum_reply_permission']}");
    
    $HTMLOUT = '';

    $HTMLOUT .= begin_main_frame();

    $HTMLOUT .= insert_compose_frame($topicid, false);

    $HTMLOUT .= end_main_frame();

    print stdhead("{$lang['forum_reply_reply']}") . $HTMLOUT . stdfoot();

    die;
}

  //-------- Action: Quote

if ($action == "quotepost")
	{
		$topicid = isset($_GET["topicid"]) ? (int)$_GET["topicid"] : 0;

		if (!is_valid_id($topicid))
			header("Location: {$TBDEV['baseurl']}/forums.php");

    $q = @mysql_query( "SELECT t.id, f.minclassread, f.minclasswrite 
                        FROM topics t
                        LEFT JOIN forums f ON t.forumid = f.id
                        WHERE t.id = $topicid");

    if( mysql_num_rows($q) != 1 )
      stderr("{$lang['forum_reply_user_error']}", "{$lang['forum_reply_select_topic']}");
    
    $check = @mysql_fetch_assoc($q);
    
    if( $CURUSER['class'] < $check['minclassread'] OR $CURUSER['class'] < $check['minclasswrite'] )
      stderr("{$lang['forum_reply_user_error']}", "{$lang['forum_reply_permission']}");
    
    $HTMLOUT = '';

    $HTMLOUT .= begin_main_frame();

    $HTMLOUT .= insert_compose_frame($topicid, false, true);

    $HTMLOUT .= end_main_frame();

    print stdhead("{$lang['forum_reply_reply']}") . $HTMLOUT . stdfoot();

    die;
}

?>