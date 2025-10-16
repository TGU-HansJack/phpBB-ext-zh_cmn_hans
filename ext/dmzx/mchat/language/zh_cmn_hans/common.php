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
	'MCHAT_TITLE'					=> '聊天室',
	'MCHAT_TITLE_COUNT'				=> [
		0 => '聊天室',
		1 => '聊天室 [<strong>%1$d</strong>]',
	],
	'MCHAT_NAVBAR_CUSTOM_PAGE'		=> '聊天页面',
	'MCHAT_NAVBAR_ARCHIVE'			=> '聊天记录',
	'MCHAT_NAVBAR_RULES'			=> '聊天室规则',

	// Who is chatting
	'MCHAT_WHO_IS_CHATTING'			=> '谁在聊天',
	'MCHAT_ONLINE_USERS_TOTAL'		=> [
		0 => '无人在线聊天',
		1 => '<strong>%1$d</strong> 位用户在聊天',
		2 => '<strong>%1$d</strong> 位用户在聊天',
	],
	'MCHAT_ONLINE_EXPLAIN'			=> '基于过去 %1$s 的活跃用户',
	'MCHAT_HOURS'					=> [
		1 => '%1$d 小时',
		2 => '%1$d 小时',
	],
	'MCHAT_MINUTES'					=> [
		1 => '%1$d 分钟',
		2 => '%1$d 分钟',
	],
	'MCHAT_SECONDS'					=> [
		1 => '%1$d 秒',
		2 => '%1$d 秒',
	],

	// Custom translations for administrators
	'MCHAT_RULES_MESSAGE'			=> '',
	'MCHAT_STATIC_MESSAGE'			=> '',

	// Post notification messages (%1$s is replaced with a link to the new/edited post, %2$s is replaced with a link to the forum)
	'MCHAT_NEW_POST'				=> '发布了新主题：%1$s 于 %2$s',
	'MCHAT_NEW_POST_DELETED'		=> '发布了一个已被删除的新主题',
	'MCHAT_NEW_REPLY'				=> '回复了：%1$s 于 %2$s',
	'MCHAT_NEW_REPLY_DELETED'		=> '发布了一个已被删除的回复',
	'MCHAT_NEW_QUOTE'				=> '引用回复：%1$s 于 %2$s',
	'MCHAT_NEW_QUOTE_DELETED'		=> '发布了一个已被删除的回复',
	'MCHAT_NEW_EDIT'				=> '编辑了帖子：%1$s 于 %2$s',
	'MCHAT_NEW_EDIT_DELETED'		=> '编辑了一个已被删除的帖子',
	'MCHAT_NEW_LOGIN'				=> '刚刚登录',
	
	// 版权
	'PROVIDED_BY'	=> '由',
	'MCHAT_SUPPORT'	=> '提供 mChat 支持',
]);