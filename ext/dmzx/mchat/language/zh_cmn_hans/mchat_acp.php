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
	// ACP Configuration sections
	'MCHAT_SETTINGS_INDEX'							=> '首页设置',
	'MCHAT_SETTINGS_CUSTOM'							=> 'mChat页面设置',
	'MCHAT_SETTINGS_ARCHIVE'						=> '聊天记录页面设置',
	'MCHAT_SETTINGS_POSTS'							=> '新帖子设置',
	'MCHAT_SETTINGS_MESSAGES'						=> '消息设置',
	'MCHAT_SETTINGS_PRUNE'							=> '消息清理设置（仅创始人可调整）',
	'MCHAT_SETTINGS_LOG'							=> '日志设置（仅创始人可调整）',
	'MCHAT_SETTINGS_STATS'							=> '"谁在聊天"设置',

	'MCHAT_GLOBALUSERSETTINGS_EXPLAIN'				=> '用户<strong>没有</strong>权限自定义的设置将按照如下配置应用。<br>新用户账户将按如下配置初始化设置。<br><br>前往用户权限区域的<em>用户控制面板中的mChat</em>选项卡调整自定义权限。<br>前往<em>用户管理</em>区域的<em>首选项</em>表单调整个别用户设置。',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE'			=> '覆盖所有用户的设置',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_EXPLAIN'	=> '将上述设置应用于<em>所有</em>用户账户。',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_CONFIRM'	=> '确认覆盖所有用户的mChat设置',

	'MCHAT_ACP_USER_PREFS_EXPLAIN'					=> '以下是所选用户的所有mChat偏好设置。所选用户没有权限自定义的设置将被禁用。这些设置可以在mChat配置部分的<em>全局用户设置</em>中更改。',

	// ACP settings
	'MCHAT_ACP_CHARACTERS'							=> '个字符',
	'MCHAT_ACP_MESSAGES'							=> '条消息',
	'MCHAT_ACP_SECONDS'								=> '秒',
	'MCHAT_ACP_HOURS'								=> '小时',
	'MCHAT_ACP_DAYS'								=> '天',
	'MCHAT_ACP_WEEKS'								=> '周',
	'MCHAT_ACP_GLOBALSETTINGS_TITLE'				=> 'mChat全局设置',
	'MCHAT_ACP_GLOBALUSERSETTINGS_TITLE'			=> 'mChat全局用户设置',
	'MCHAT_VERSION'									=> '版本',
	'MCHAT_RULES'									=> '聊天室规则',
	'MCHAT_RULES_EXPLAIN'							=> '在此输入聊天室规则。允许HTML代码。留空则不显示。<br>可以翻译此消息：编辑/ext/dmzx/mchat/language/XX/mchat.php中的MCHAT_RULES_MESSAGE语言键。',
	'MCHAT_CONFIG_SAVED'							=> 'mChat配置已更新。',
	'MCHAT_AVATARS'									=> '显示头像',
	'MCHAT_AVATARS_EXPLAIN'							=> '如果设为是，将显示调整过尺寸的用户头像。',
	'MCHAT_INDEX'									=> '在首页显示mChat',
	'MCHAT_INDEX_HEIGHT'							=> '首页高度',
	'MCHAT_INDEX_HEIGHT_EXPLAIN'					=> '<em>范围限制为50到1000。默认值为250。</em>',
	'MCHAT_TOP_OF_FORUM'							=> '顶部',
	'MCHAT_BOTTOM_OF_FORUM'							=> '底部',
	'MCHAT_REFRESH'									=> '刷新间隔',
	'MCHAT_REFRESH_EXPLAIN'							=> '消息刷新间隔秒数。<br><em>范围限制为2到3600秒。默认值为10。</em>',
	'MCHAT_LIVE_UPDATES'							=> '实时更新编辑和删除的消息',
	'MCHAT_LIVE_UPDATES_EXPLAIN'					=> '当用户编辑或删除消息时，更改会实时更新给其他所有人，而无需刷新页面。如果您遇到性能问题，请禁用此功能。',
	'MCHAT_PRUNE'									=> '启用消息清理',
	'MCHAT_PRUNE_GC'								=> '消息清理任务间隔',
	'MCHAT_PRUNE_GC_EXPLAIN'						=> '触发下一次消息清理之前需要经过的时间。注意：此设置控制消息检查何时可以被删除的<em>时间</em>。它<em>不</em>控制<em>哪些</em>消息被删除。<em>默认值为86400秒=24小时。</em>',
	'MCHAT_PRUNE_NUM'								=> '清理时保留的消息数',
	'MCHAT_PRUNE_NUM_EXPLAIN'						=> '使用"消息"时，将保留固定数量的消息。使用"小时"、"天"或"周"时，在清理时将删除超过指定时间段的所有消息。',
	'MCHAT_PRUNE_NOW'								=> '立即清理消息',
	'MCHAT_PRUNE_NOW_CONFIRM'						=> '确认清理消息',
	'MCHAT_PRUNED'									=> '%1$d 条mChat消息已被清理',
	'MCHAT_NAVBAR_LINK_COUNT'						=> '在导航栏中显示活跃聊天会话的数量',
	'MCHAT_MESSAGE_NUM_CUSTOM'						=> 'mChat页面初始显示的消息数量',
	'MCHAT_MESSAGE_NUM_CUSTOM_EXPLAIN'				=> '<em>默认值为10。</em>',
	'MCHAT_MESSAGE_NUM_INDEX'						=> '首页初始显示的消息数量',
	'MCHAT_MESSAGE_NUM_INDEX_EXPLAIN'				=> '<em>默认值为10。</em>',
	'MCHAT_MESSAGE_NUM_ARCHIVE'						=> '聊天记录页面显示的消息数量',
	'MCHAT_MESSAGE_NUM_ARCHIVE_EXPLAIN'				=> '<em>范围限制为10到100。默认值为25。</em>',
	'MCHAT_ARCHIVE_SORT'							=> '消息排序',
	'MCHAT_ARCHIVE_SORT_TOP_BOTTOM'					=> '始终按从旧到新的顺序排序消息',
	'MCHAT_ARCHIVE_SORT_BOTTOM_TOP'					=> '始终按从新到旧的顺序排序消息',
	'MCHAT_ARCHIVE_SORT_USER'						=> '根据用户的<em>新消息位置</em>偏好设置排序消息',
	'MCHAT_FLOOD_TIME'								=> '防灌水时间',
	'MCHAT_FLOOD_TIME_EXPLAIN'						=> '用户在聊天中发送另一条消息前必须等待的秒数。<br><em>范围限制为0到3600秒(1小时)。默认值为0。设为0则禁用。</em>',
	'MCHAT_FLOOD_MESSAGES'							=> '防灌水消息数',
	'MCHAT_FLOOD_MESSAGES_EXPLAIN'					=> '用户连续发送消息的数量，超过后需要其他用户在聊天中发帖。<br><em>范围限制为0到100条消息。默认值为0。设为0则禁用。</em>',
	'MCHAT_EDIT_DELETE_LIMIT'						=> '编辑和删除消息的时间限制',
	'MCHAT_EDIT_DELETE_LIMIT_EXPLAIN'				=> '超过指定秒数的消息作者不能再编辑或删除。<br>拥有<em>编辑/删除权限以及版主权限的用户不受</em>此时间限制。<br>设为0允许无限期编辑和删除。',
	'MCHAT_MAX_MESSAGE_LENGTH'						=> '最大消息长度',
	'MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN'				=> '每条发布的消息允许的最大字符数。<br><em>默认值为500。设为0则禁用。</em>',
	'MCHAT_MAX_INPUT_HEIGHT'						=> '最大输入框高度',
	'MCHAT_MAX_INPUT_HEIGHT_EXPLAIN'				=> '输入框不会扩展超过此像素数。<br><em>范围限制为0到1000。默认值为150。设为0则不允许多行消息。</em>',
	'MCHAT_CUSTOM_PAGE'								=> '启用mChat页面',
	'MCHAT_CUSTOM_HEIGHT'							=> 'mChat页面高度',
	'MCHAT_CUSTOM_HEIGHT_EXPLAIN'					=> '<em>范围限制为50到1000。默认值为350。</em>',
	'MCHAT_BBCODES_DISALLOWED'						=> '禁用的BBCodes',
	'MCHAT_BBCODES_DISALLOWED_EXPLAIN'				=> '您可以在此输入<strong>不</strong>允许在消息中使用的BBCodes。<br>用竖线分隔BBCodes，例如：<br>b|i|u|code|list|list=|flash|quote 和/或 %1$s自定义BBCode标签名%2$s。',
	'MCHAT_STATIC_MESSAGE'							=> '静态消息',
	'MCHAT_STATIC_MESSAGE_EXPLAIN'					=> '您可以在此定义一条静态消息。允许HTML代码。留空则不显示。<br>可以翻译此消息：编辑/ext/dmzx/mchat/language/XX/mchat.php中的MCHAT_STATIC_MESSAGE语言键。',
	'MCHAT_TIMEOUT'									=> '会话超时',
	'MCHAT_TIMEOUT_EXPLAIN'							=> '设置聊天会话结束前的秒数。<br>设为0表示永不超时。小心，阅读mChat的用户会话将永远不会过期！<br><em>受限于论坛配置中%1$s会话设置%2$s，当前设置为%3$d秒。</em>',
	'MCHAT_OVERRIDE_SMILIE_LIMIT'					=> '覆盖表情符号限制',
	'MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN'			=> '设为是可覆盖论坛的表情符号限制设置用于聊天消息。',
	'MCHAT_OVERRIDE_MIN_POST_CHARS'					=> '覆盖最少字符数限制',
	'MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN'			=> '设为是可覆盖论坛的最少字符数设置用于聊天消息。',
	'MCHAT_LOG_ENABLED'								=> '向管理员日志添加条目',
	'MCHAT_LOG_ENABLED_EXPLAIN'						=> '这会影响消息编辑、删除、清理和清空。',

	'MCHAT_POSTS_AUTH_CHECK'						=> '需要用户权限',
	'MCHAT_POSTS_AUTH_CHECK_EXPLAIN'				=> '如果设为是，无法使用mChat的用户将不会生成任何帖子/登录通知消息。',

	'MCHAT_WHOIS_REFRESH'							=> '"谁在聊天"刷新间隔',
	'MCHAT_WHOIS_REFRESH_EXPLAIN'					=> '"谁在聊天"刷新间隔秒数。<br><em>范围限制为10到300秒。默认值为60。</em>',
	'MCHAT_SOUND'									=> '为新消息、编辑和删除的消息播放声音',
	'MCHAT_PURGE'									=> '立即删除所有消息',
	'MCHAT_PURGE_CONFIRM'							=> '确认删除所有消息',
	'MCHAT_PURGED'									=> '所有mChat消息已成功删除。',

	'MCHAT_REPARSER_STATUS'							=> '消息重新解析器状态',
	'MCHAT_REPARSER_ACTIVE'							=> '运行中',
	'MCHAT_REPARSER_FINISHED'						=> '已完成',

	// '%1$s' contains 'Retain posts' and 'Delete posts' respectively
	'MCHAT_RETAIN_MESSAGES'							=> '%1$s并保留mChat消息',
	'MCHAT_DELETE_MESSAGES'							=> '%1$s并删除mChat消息',

	// Error reporting
	'TOO_LONG_MCHAT_BBCODE_DISALLOWED'				=> '禁用的BBCodes值太长。',
	'TOO_SMALL_MCHAT_CUSTOM_HEIGHT'					=> 'mChat页面高度值太小。',
	'TOO_LARGE_MCHAT_CUSTOM_HEIGHT'					=> 'mChat页面高度值太大。',
	'TOO_LONG_MCHAT_DATE'							=> '您输入的日期格式太长。',
	'TOO_SHORT_MCHAT_DATE'							=> '您输入的日期格式太短。',
	'TOO_LARGE_MCHAT_FLOOD_TIME'					=> '防灌水时间值太大。',
	'TOO_LARGE_MCHAT_FLOOD_MESSAGES'				=> '防灌水消息数值太大。',
	'TOO_SMALL_MCHAT_INDEX_HEIGHT'					=> '首页高度值太小。',
	'TOO_LARGE_MCHAT_INDEX_HEIGHT'					=> '首页高度值太大。',
	'TOO_LARGE_MCHAT_MAX_INPUT_HEIGHT'				=> '最大输入框高度值太大。',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_ARCHIVE'			=> '聊天记录页面显示的消息数量太少。',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_ARCHIVE'			=> '聊天记录页面显示的消息数量太多。',
	'TOO_SMALL_MCHAT_REFRESH'						=> '刷新值太小。',
	'TOO_LARGE_MCHAT_REFRESH'						=> '刷新值太大。',
	'TOO_SMALL_MCHAT_TIMEOUT'						=> '用户超时值太小。',
	'TOO_LARGE_MCHAT_TIMEOUT'						=> '用户超时值太大。',
	'TOO_SMALL_MCHAT_WHOIS_REFRESH'					=> '"谁在聊天"刷新值太小。',
	'TOO_LARGE_MCHAT_WHOIS_REFRESH'					=> '"谁在聊天"刷新值太大。',

	'MCHAT_30X_REMNANTS'							=> '安装已中止。<br>数据库中有phpBB 3.0.x版mChat MOD的残留模块。存在这些模块时，mChat扩展无法正常工作。<br>您需要完全卸载mChat MOD才能安装mChat扩展。具体来说，需要从%1$smodules表中删除以下ID的模块：%2$s',
]);