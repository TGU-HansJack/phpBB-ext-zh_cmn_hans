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
	'ACL_U_MCHAT_USE'						=> '可以使用mChat',
	'ACL_U_MCHAT_VIEW'						=> '可以查看mChat',
	'ACL_U_MCHAT_EDIT'						=> '可以编辑自己的消息',
	'ACL_U_MCHAT_DELETE'					=> '可以删除自己的消息',
	'ACL_U_MCHAT_MODERATOR_EDIT'			=> '可以编辑任何人的消息',
	'ACL_U_MCHAT_MODERATOR_DELETE'			=> '可以删除任何人的消息',
	'ACL_U_MCHAT_IP'						=> '可以查看IP地址',
	'ACL_U_MCHAT_PM'						=> '可以使用私人消息',
	'ACL_U_MCHAT_LIKE'						=> '可以看到喜欢图标（需要BBCode权限）',
	'ACL_U_MCHAT_QUOTE'						=> '可以看到引用图标（需要BBCode权限）',
	'ACL_U_MCHAT_FLOOD_IGNORE'				=> '可以忽略防灌水限制',
	'ACL_U_MCHAT_ARCHIVE'					=> '可以查看聊天记录',
	'ACL_U_MCHAT_BBCODE'					=> '可以使用BBCodes',
	'ACL_U_MCHAT_SMILIES'					=> '可以使用表情符号',
	'ACL_U_MCHAT_URLS'						=> '可以发布自动解析的URL',

	'ACL_U_MCHAT_AVATARS'					=> '可以自定义<em>显示头像</em>',
	'ACL_U_MCHAT_CAPITAL_LETTER'			=> '可以自定义<em>首字母大写</em>',
	'ACL_U_MCHAT_CHARACTER_COUNT'			=> '可以自定义<em>显示字符数</em>',
	'ACL_U_MCHAT_DATE'						=> '可以自定义<em>日期格式</em>',
	'ACL_U_MCHAT_INDEX'						=> '可以自定义<em>在首页显示</em>',
	'ACL_U_MCHAT_LOCATION'					=> '可以自定义<em>在首页上mChat的位置</em>',
	'ACL_U_MCHAT_MESSAGE_TOP'				=> '可以自定义<em>新聊天消息的位置</em>',
	'ACL_U_MCHAT_POSTS'						=> '可以自定义<em>显示新帖子</em>',
	'ACL_U_MCHAT_RELATIVE_TIME'				=> '可以自定义<em>显示相对时间</em>',
	'ACL_U_MCHAT_SOUND'						=> '可以自定义<em>播放声音</em>',
	'ACL_U_MCHAT_WHOIS_INDEX'				=> '可以自定义<em>在聊天下方显示谁在聊天</em>',
	'ACL_U_MCHAT_STATS_INDEX'				=> '可以自定义<em>在统计区域显示谁在聊天</em>',

	'ACL_A_MCHAT'							=> '可以管理mChat设置',
]);