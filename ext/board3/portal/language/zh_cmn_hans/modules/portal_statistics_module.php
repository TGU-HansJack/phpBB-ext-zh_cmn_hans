<?php
/**
*
* @package Board3 Portal v2.3 - Statistics
* @copyright (c) 2023 Board3 Group ( www.board3.de )
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
	'ST_TOP'		=> '总计',
	'ST_TOP_ANNS'	=> '公告总数:',
	'ST_TOP_STICKYS'=> '置顶总数:',
	'ST_TOT_ATTACH'	=> '附件总数:',
	'TOPICS_PER_DAY_OTHER'	=> '每日主题数: <strong>%d</strong>',
	'TOPICS_PER_DAY_ZERO'	=> '每日主题数: <strong>0</strong>',
	'POSTS_PER_DAY_OTHER'	=> '每日帖子数: <strong>%d</strong>',
	'POSTS_PER_DAY_ZERO'	=> '每日帖子数: <strong>0</strong>',
	'USERS_PER_DAY_OTHER'	=> '每日用户数: <strong>%d</strong>',
	'USERS_PER_DAY_ZERO'	=> '每日用户数: <strong>0</strong>',
	'TOPICS_PER_USER_OTHER'	=> '每用户主题数: <strong>%d</strong>',
	'TOPICS_PER_USER_ZERO'	=> '每用户主题数: <strong>0</strong>',
	'POSTS_PER_USER_OTHER'	=> '每用户帖子数: <strong>%d</strong>',
	'POSTS_PER_USER_ZERO'	=> '每用户帖子数: <strong>0</strong>',
	'POSTS_PER_TOPIC_OTHER'	=> '每主题帖子数: <strong>%d</strong>',
	'POSTS_PER_TOPIC_ZERO'	=> '每主题帖子数: <strong>0</strong>',
));