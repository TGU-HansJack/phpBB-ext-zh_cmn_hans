<?php
/**
*
* @package Board3 Portal v2.3 - News
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
	'LATEST_NEWS'			=> '最新新闻',
	'READ_FULL'				=> '阅读全文',
	'NO_NEWS'				=> '没有新闻',
	'POSTED_BY'				=> '发布者',
	'COMMENTS'				=> '评论',
	'VIEW_COMMENTS'			=> '查看评论',
	'PORTAL_POST_REPLY'		=> '写评论',
	'TOPIC_VIEWS'			=> '浏览',
	'JUMP_NEWEST'			=> '跳转到最新帖子',
	'JUMP_FIRST'			=> '跳转到第一个帖子',
	'JUMP_TO_POST'			=> '跳转到帖子',

	// ACP
	'ACP_PORTAL_NEWS_SETTINGS'			=> '新闻设置',
	'ACP_PORTAL_NEWS_SETTINGS_EXP'	=> '您可以在此自定义新闻模块。',
	'PORTAL_NEWS_STYLE'					=> '紧凑型新闻模块样式',
	'PORTAL_NEWS_STYLE_EXP'			=> '"是"表示使用紧凑型新闻样式。"否"表示使用大型样式（文本视图）。',
	'PORTAL_SHOW_ALL_NEWS'				=> '显示此版块中的所有文章',
	'PORTAL_SHOW_ALL_NEWS_EXP'		=> '包括置顶帖。',
	'PORTAL_NUMBER_OF_NEWS'				=> '门户上显示的新闻文章数量',
	'PORTAL_NUMBER_OF_NEWS_EXP'		=> '0 表示无限',
	'PORTAL_NEWS_LENGTH'				=> '新闻文章的最大长度',
	'PORTAL_NEWS_LENGTH_EXP'		=> '0 表示无限',
	'PORTAL_NEWS_FORUM' 				=> '新闻版块',
	'PORTAL_NEWS_FORUM_EXP' 		=> '我们从中获取文章的版块，留空以从所有版块获取。如果"排除版块"设置为"是"，请选择要排除的版块。<br />如果"排除版块"设置为"否"，请选择要显示的版块。<br />通过按住<samp>CTRL</samp>键并点击可以选择/取消选择多个版块。',
	'PORTAL_NEWS_EXCLUDE'				=> '排除版块',
	'PORTAL_NEWS_EXCLUDE_EXP'		=> '选择"是"如果您想从新闻模块中排除所选版块，选择"否"如果您只想在新闻模块中看到所选版块。',
	'PORTAL_NEWS_PERMISSIONS'			=> '启用/禁用权限',
	'PORTAL_NEWS_PERMISSIONS_EXP'	=> '显示新闻时考虑版块查看权限',
	'PORTAL_NEWS_SHOW_LAST'				=> '按最新帖子排序',
	'PORTAL_NEWS_SHOW_LAST_EXP'		=> '激活时，将按最新帖子排序。未激活时，新闻将按最新主题排序。',
	'PORTAL_NEWS_ARCHIVE'				=> '启用新闻存档系统',
	'PORTAL_NEWS_ARCHIVE_EXP'		=> '如果启用，将显示新闻存档系统/页码。',
	'PORTAL_SHOW_REPLIES_VIEWS'				=> '显示回复数和浏览量',
	'PORTAL_SHOW_REPLIES_VIEWS_EXP'		=> '此设置适用于紧凑型模块。<br />选择"是"时，回复数和浏览量将显示在两个额外的列中。选择"否"时，回复数和浏览量将显示在版块名称旁边。如果您由于所需额外宽度而导致额外列显示出现问题，请选择"否"。',
));