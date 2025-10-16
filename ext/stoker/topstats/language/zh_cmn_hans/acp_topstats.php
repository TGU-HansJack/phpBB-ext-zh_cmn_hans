<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2024 Stoker - https://www.phpbb3bbcodes.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'TOP_STATS'								=> '排行榜统计',
	'TS_CONFIG'								=> '配置',
	
	'ACP_TOPSTATSRA_BADGE'					=> '最近活跃主题-排行榜统计 2.0.0',
	'ACP_TOPSTATSSB_BADGE'					=> '统计模块-排行榜统计 2.0.0',
	'ACP_TOPSTATSTP_BADGE'					=> '发帖排行-排行榜统计 2.0.0',
	'ACP_TOPSTATS_SETTINGS_EXPLAIN'			=> '如果您喜欢这个扩展，请考虑关注',
	'ACP_TOPSTATS_DONATION'					=> '捐赠',
	'ACP_TOPSTATS_MEMBER'					=> '成为我的社区活跃成员',
	'ACP_TOPSTATS_SUPPORT'					=> '扩展支持或反馈',
	
	'TOPSTATS_SAVED'						=> '排行榜统计设置已保存',
	'TS_RECENT_SETTINGS'					=> '最近活跃主题设置',
	'TSRAT_NUMBER'							=> '最近活跃主题',
	'TSRAT_NUMBER_EXPLAIN'					=> '显示最近活跃主题的数量。<br />设为 0（零）可禁用此功能。<br />最近活跃主题上限为 50。',
	'TS_RECENT_LIMIT_RANGE'					=> '最近活跃主题数量必须在 0 到 %d 之间！',
	'TS_JSSCROLL'							=> 'jQuery 滚动',
	'TS_JSSCROLL_EXPLAIN'					=> '启用或禁用 jQuery 滚动显示最近活跃主题。',
	'TS_JSSCROLL_SPEED'						=> 'jQuery 滚动速度',
	'TS_JSSCROLL_SPEED_EXPLAIN'				=> '滚动速度（毫秒），默认值为 400。',
	'TS_JSSCROLL_INTERVAL'					=> 'jQuery 滚动间隔',
	'TS_JSSCROLL_INTERVAL_EXPLAIN'			=> '滚动间隔时间（毫秒），默认值为 4000。',
	'TS_JSSCROLL_DIRECTION'					=> 'jQuery 滚动方向',
	'TS_JSSCROLL_DIRECTION_EXPLAIN'			=> 'jQuery 滚动的方向。',
	'TS_JSSCROLL_DIRECTION_DOWN'			=> '向下',
	'TS_JSSCROLL_DIRECTION_UP'				=> '向上',
	'TS_JSSCROLL_PAUSE'						=> 'jQuery 滚动暂停',
	'TS_JSSCROLL_PAUSE_EXPLAIN'				=> '启用后，鼠标悬停在最近活跃主题上时会暂停滚动。',
	'TS_JSSCROLL_NAVIGATION'				=> 'jQuery 滚动导航',
	'TS_JSSCROLL_NAVIGATION_EXPLAIN'		=> '启用或禁用最近活跃主题的 jQuery 滚动导航。',
	'DISPLAY_TOP_RECENT_INDEX'				=> '在首页启用最近活跃主题',
	'DISPLAY_TOP_RECENT_INDEX_EXPLAIN'		=> '启用或禁用在论坛首页显示最近活跃主题部分。',
	'DISPLAY_TOP_RECENT_PORTAL'				=> '在门户页面启用最近活跃主题',
	'DISPLAY_TOP_RECENT_PORTAL_EXPLAIN'		=> '启用或禁用在简易门户页面显示最近活跃主题部分。',
	'TS_PORTAL_NOT_AVAILABLE'				=> '此选项仅在安装并启用了 <a href="https://phpbb3bbcodes.com/viewtopic.php?t=2719" title="访问 PhpBB3 BBCodes 的简易门户主题" target="_blank" rel="noopener noreferrer">简易门户</a> 扩展时可用。',
	'TS_TOPSTATS_SETTINGS'					=> '排行榜统计设置',
	'DISPLAY_TOP_STATS_INDEX'				=> '在首页启用排行榜统计',
	'DISPLAY_TOP_STATS_INDEX_EXPLAIN'		=> '启用或禁用在论坛首页显示排行榜统计部分。',
	'DISPLAY_TOP_STATS_PORTAL'				=> '在门户页面启用排行榜统计',
	'DISPLAY_TOP_STATS_PORTAL_EXPLAIN'		=> '启用或禁用在简易门户页面显示排行榜统计部分。',
	
	'TS_MOSTVIEWED_NUMBER'					=> '最多浏览主题',
	'TS_MOSTVIEWED_NUMBER_EXPLAIN'			=> '设为 0（零）可禁用此功能。<br>最多浏览主题数据缓存 24 小时。',
	'TS_MOSTREPLIED_NUMBER'					=> '最多回复主题',
	'TS_MOSTREPLIED_NUMBER_EXPLAIN'			=> '设为 0（零）可禁用此功能。<br>最多回复主题数据缓存 24 小时。',
	'TS_MOSTACTIVEUSER_NUMBER'				=> '最活跃用户',
	'TS_MOSTACTIVEUSER_NUMBER_EXPLAIN'		=> '设为 0（零）可禁用此功能。<br>最活跃用户数据缓存 24 小时。',
	'TS_MOSTACTIVEFORUM_NUMBER'				=> '最活跃版块',
	'TS_MOSTACTIVEFORUM_NUMBER_EXPLAIN'		=> '设为 0（零）可禁用此功能。<br>最活跃版块数据缓存 24 小时。',
	'TS_LASTVISITEDBOT_NUMBER'				=> '最近访问机器人',
	'TS_LASTVISITEDBOT_NUMBER_EXPLAIN'		=> '设为 0（零）可禁用此功能。<br>最近访问机器人数据缓存 5 分钟。',
	'TS_LASTREGISTEREDUSER_NUMBER'			=> '最新注册用户',
	'TS_LASTREGISTEREDUSER_NUMBER_EXPLAIN'	=> '设为 0（零）可禁用此功能。<br>最新注册用户数据缓存 5 分钟。',
	
	'TS_TOPSTATS_TP_EXCLUDE'				=> '排除发帖排行',
	'TS_THISMONTH_TOP_NUMBER'				=> '本月发帖排行',
	'TS_THISMONTH_TOP_NUMBER_EXPLAIN'		=> '设为 0（零）可禁用此功能。<br>本月发帖排行数据缓存 1 小时。',
	'TS_LASTMONTH_TOP_NUMBER'				=> '上月发帖排行',
	'TS_LASTMONTH_TOP_NUMBER_EXPLAIN'		=> '设为 0（零）可禁用此功能。<br>上月发帖排行数据缓存至下个月。',
	'TS_EXCLUDED_USERS' 					=> '排除用户 ID',
	'TS_EXCLUDED_USERS_EXPLAIN' 			=> '以逗号分隔要从发帖排行统计中排除的用户 ID 列表。例如：23,67,890<br />（这些用户只会被排除在本月和上月发帖排行之外）',
	'SUBMIT_EXCLUDED_USERS' 				=> '保存排除的用户',
	'EXCLUDED_USERS_TOO_LONG'				=> '排除的用户列表太长。请保持在 %d 个字符以内。',
	'INVALID_EXCLUDED_USERS'				=> '排除用户字段只允许数字和逗号。',
	'EXCLUDED_USER_NOT_EXIST'				=> '用户 ID %d 不存在。',
	'TS_INDEX'								=> '论坛首页',
	'TS_PORTAL'								=> '简易门户',
	'TS_CUSTOM'								=> '自定义页面',
	'TS_SUBMIT_CHANGES'						=> '提交更改',
	
	'DISPLAY_TOP_RECENT_CUSTOM'				=> '在自定义页面启用最近活跃主题',
	'DISPLAY_TOP_RECENT_CUSTOM_EXPLAIN'		=> '启用或禁用在自定义页面显示最近活跃主题部分。',
	'DISPLAY_TOP_STATS_CUSTOM'				=> '在自定义页面启用排行榜统计',
	'DISPLAY_TOP_STATS_CUSTOM_EXPLAIN'		=> '启用或禁用在自定义页面显示排行榜统计部分。',
	
	'ACP_TS_TOPPOSTER'						=> '发帖排行',
	'ACP_TS_TOPPOSTER_EXPLAIN'				=> '发帖排行自定义页面设置。',
	'DISPLAY_TOP_STATS_TOPPOSTER'			=> '启用发帖排行页面',
	'DISPLAY_TOP_STATS_TOPPOSTER_EXPLAIN'	=> '向用户显示发帖排行自定义页面。',
));