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
	'DECIMAL_TS'				=> '2',
	'DECIMAL_SEPARATOR_TS'		=> '.',
	'THOUSANDS_SEPARATOR_TS'	=> ',',
	
	'MOST_VIEWED'				=> '最多浏览主题',
	'MOST_REPLIED'				=> '最多回复主题',
	'RECENT_ACTIVE'				=> '最近活跃主题',
	'MOST_ACTIVE_USERS'			=> '最活跃用户',
	'JOINED_US'					=> '加入我们',
	'MOST_ACTIVE_FORUMS'		=> '最活跃版块',
	'PREVIOUS_SCROLL'			=> '上一个',
	'NEXT_SCROLL'				=> '下一个',
	'START_SCROLL'				=> '开始',
	'STOP_SCROLL'				=> '停止',
	'LAST_REGISTERED_USERS'		=> '最新注册用户',
	'LAST_VISITED_BOTS'			=> '最近访问机器人',
	'TOP_POSTERS_THIS_MONTH'	=> '本月发帖排行',
	'TOP_POSTERS_LAST_MONTH'	=> '上月发帖排行',
	'NO_DATA'					=> '暂无数据',
	'NO_TOP_POSTER'				=> '本月暂无发帖排行',
	
	'TS_MONTH_JANUARY'			=> '一月',
	'TS_MONTH_FEBRUARY'			=> '二月',
	'TS_MONTH_MARCH'			=> '三月',
	'TS_MONTH_APRIL'			=> '四月',
	'TS_MONTH_MAY'				=> '五月',
	'TS_MONTH_JUNE'				=> '六月',
	'TS_MONTH_JULY'				=> '七月',
	'TS_MONTH_AUGUST'			=> '八月',
	'TS_MONTH_SEPTEMBER'		=> '九月',
	'TS_MONTH_OCTOBER'			=> '十月',
	'TS_MONTH_NOVEMBER'			=> '十一月',
	'TS_MONTH_DECEMBER'			=> '十二月',
	
	'TOP_STATS_PAGE_TITLE'		=> '排行榜统计',
	'TOP_STATS_COPY'			=> 'phpBB 排行榜统计',
	'TM_TOP_POSTERS'			=> '本月发帖排行',
	'LM_TOP_POSTERS'			=> '上月发帖排行',
	'TS_TOP_POSTERS'			=> '发帖排行',
	'TS_TOP_COPY'				=> 'phpBB 发帖排行',
	'TS_TOP_STATS'				=> '排行榜统计',
    'VIEWING_TOP_POSTERS'		=> '正在查看发帖排行',
    'VIEWING_TOP_STATS'			=> '正在查看排行榜统计',
	'TOPPOSTERS_DISABLED'		=> '发帖排行页面当前已禁用',
	'TOPSTATS_DISABLED'			=> '排行榜统计页面当前已禁用',
	'TS_TOP_POSTERS_FOR'		=> '%1$s 发帖排行',
	
	'TS_REQUIRE_PHPBB'			=> '此扩展需要 phpBB %1$s 或更高版本。您的论坛运行版本为 %2$s。',
    'TS_REQUIRE_PHP'			=> '此扩展需要 PHP %1$s 或更高版本。您的服务器运行版本为 %2$s。',
	'TS_REQUIRE_REMOVE'			=> '在安装排行榜统计和发帖排行 2.0.0 之前，请完全卸载旧版排行榜统计',
));