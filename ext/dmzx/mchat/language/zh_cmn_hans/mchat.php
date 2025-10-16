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
	'MCHAT_ADD'						=> '发送',
	'MCHAT_ARCHIVE'					=> '聊天记录',
	'MCHAT_ARCHIVE_PAGE'			=> '聊天记录',
	'MCHAT_CUSTOM_PAGE'				=> '聊天室',
	'MCHAT_BBCODES'					=> 'BBCodes',
	'MCHAT_CUSTOM_BBCODES'			=> '自定义BBCodes',
	'MCHAT_DELCONFIRM'				=> '您确定要删除这条消息吗？',
	'MCHAT_EDIT'					=> '编辑',
	'MCHAT_EDITINFO'				=> '编辑下面的消息。',
	'MCHAT_NEW_CHAT'				=> '新聊天消息！',
	'MCHAT_SEND_PM'					=> '发送私人消息',
	'MCHAT_LIKE'					=> '喜欢这条消息',
	'MCHAT_LIKES'					=> '喜欢这条消息',
	'MCHAT_FLOOD'					=> '您不能在刚刚发送消息后这么快又发送一条。',
	'MCHAT_FOE'						=> '此消息由您当前屏蔽列表中的 <strong>%1$s</strong> 发送。',
	'MCHAT_RULES'					=> '聊天室规则',
	'MCHAT_WHOIS_USER'				=> '%1$s 的IP地址信息',
	'MCHAT_MESS_LONG'				=> '您的消息太长了，请限制在 %1$d 个字符以内。',
	'MCHAT_NO_CUSTOM_PAGE'			=> '聊天室页面当前未激活。',
	'MCHAT_NO_RULES'				=> '聊天室规则页面当前未激活。',
	'MCHAT_NOACCESS_ARCHIVE'		=> '您没有权限查看聊天记录。',
	'MCHAT_NOJAVASCRIPT'			=> '请启用JavaScript来使用聊天室。',
	'MCHAT_NOMESSAGE'				=> '暂无消息',
	'MCHAT_NOMESSAGEINPUT'			=> '您尚未输入任何消息',
	'MCHAT_MESSAGE_DELETED'			=> '此消息已被删除。',
	'MCHAT_OK'						=> '确定',
	'MCHAT_PAUSE'					=> '已暂停',
	'MCHAT_PERMISSIONS'				=> '更改用户的权限',
	'MCHAT_REFRESHING'				=> '刷新中...',
	'MCHAT_RESPOND'					=> '回复用户',
	'MCHAT_SMILES'					=> '表情符号',
	'MCHAT_TOTALMESSAGES'			=> '总消息数：<strong>%1$d</strong>',
	'MCHAT_USESOUND'				=> '播放声音',
	'MCHAT_SOUND_ON'				=> '声音开启',
	'MCHAT_SOUND_OFF'				=> '声音关闭',
	'MCHAT_ENTER'					=> '使用 Ctrl/Cmd + Enter 执行替代操作',
	'MCHAT_ENTER_SUBMIT'			=> '按Enter键发送消息',
	'MCHAT_ENTER_LINEBREAK'			=> '按Enter键换行',
	'MCHAT_COLLAPSE_TITLE'			=> '切换聊天室可见性',
	'MCHAT_WHO_IS_REFRESH_EXPLAIN'	=> '每 <strong>%1$d</strong> 秒刷新一次',
	'MCHAT_MINUTES_AGO'				=> [
		0 => '刚刚',
		1 => '%1$d 分钟前',
		2 => '%1$d 分钟前',
	],

	// These messages are formatted with JavaScript, hence {} and no %d
	'MCHAT_CHARACTER_COUNT'			=> '<strong>{current}</strong> 个字符',
	'MCHAT_CHARACTER_COUNT_LIMIT'	=> '<strong>{current}</strong> / {max} 个字符',
	'MCHAT_MENTION'					=> ' @{username} ',
]);