<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, [
	'MCHAT_PREFERENCES'				=> 'mChat偏好设置',
	'MCHAT_NO_SETTINGS'				=> '您无权自定义任何设置。',

	'MCHAT_INDEX'					=> '在首页显示',
	'MCHAT_SOUND'					=> '启用声音',
	'MCHAT_WHOIS_INDEX'				=> '在聊天下方显示<em>谁在聊天</em>',
	'MCHAT_STATS_INDEX'				=> '在统计区域显示<em>谁在聊天</em>',
	'MCHAT_STATS_INDEX_EXPLAIN'		=> '在首页的<em>在线用户</em>区域下方显示谁在聊天。',
	'MCHAT_AVATARS'					=> '显示头像',
	'MCHAT_CAPITAL_LETTER'			=> '消息首字母大写',
	'MCHAT_POSTS'					=> '显示新帖子（当前全部禁用，可在ACP的mChat全局设置部分启用）',
	'MCHAT_DISPLAY_CHARACTER_COUNT'	=> '输入消息时显示字符数',
	'MCHAT_RELATIVE_TIME'			=> '显示相对时间',
	'MCHAT_RELATIVE_TIME_EXPLAIN'	=> '为每条消息显示"刚刚"、"1分钟前"等。设为<em>否</em>始终显示完整日期。',
	'MCHAT_MESSAGE_TOP'				=> '新聊天消息的位置',
	'MCHAT_MESSAGE_TOP_EXPLAIN'		=> '新消息将出现在聊天室的顶部或底部。',
	'MCHAT_LOCATION'				=> '在首页的位置',
	'MCHAT_BOTTOM'					=> '底部',
	'MCHAT_TOP'						=> '顶部',

	'MCHAT_POSTS_TOPIC'				=> '显示新主题',
	'MCHAT_POSTS_REPLY'				=> '显示新回复',
	'MCHAT_POSTS_EDIT'				=> '显示已编辑的帖子',
	'MCHAT_POSTS_QUOTE'				=> '显示引用的帖子',
	'MCHAT_POSTS_LOGIN'				=> '显示用户登录',

	'MCHAT_DATE_FORMAT'				=> '日期格式',
	'MCHAT_DATE_FORMAT_EXPLAIN'		=> '语法与PHP <a href="http://www.php.net/date">date()</a>函数相同。',
	'MCHAT_CUSTOM_DATEFORMAT'		=> '自定义…',
]);