<?php
/**
*
* @package phpBB Extension - Stats On Index
* @copyright (c) 2025 Stoker
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
	'DECIMAL_IS'				=> '2',
	'DECIMAL_SEPARATOR_IS'		=> '.',
	'THOUSANDS_SEPARATOR_IS'	=> ',',

	'SOI_TOTAL_POSTS'			=> '帖子总数',
	'SOI_POSTS_PER_DAY'			=> '每日',
	'SOI_POSTS_PER_TOPIC'		=> '每主题',
	'SOI_POSTS_PER_YEAR'		=> '每年',
	'SOI_POSTS_PER_USER'		=> '每用户',

	'SOI_TOTAL_TOPICS'			=> '主题总数',
	'SOI_TOPICS_PER_DAY'		=> '每日',
	'SOI_TOPICS_PER_YEAR'		=> '每年',
	'SOI_TOPICS_PER_USER'		=> '每用户',

	'SOI_TOTAL_USERS'			=> '用户总数',
	'SOI_USERS_PER_DAY'			=> '每日',
	'SOI_USERS_PER_YEAR'		=> '每年',

	'SOI_TOTAL_FILES'			=> '附件总数',
	'SOI_FILES_PER_DAY'			=> '每日',
	'SOI_FILES_PER_YEAR'		=> '每年',
	'SOI_FILES_PER_USER'		=> '每用户',

	'SOI_TOTAL_TVIEWS'			=> '主题浏览次数',
	'SOI_TVIEWS_PER_DAY'		=> '每日',
	'SOI_TVIEWS_PER_YEAR'		=> '每年',
	'SOI_TVIEWS_PER_TOPIC'		=> '每主题',
	'SOI_TVIEWS_USER'			=> '每用户',

	'SOI_TOTAL_PDOWNLOADS'		=> '附件下载次数',
	'SOI_DOWNLOADS_PER_DAY'		=> '每日',
	'SOI_DOWNLOADS_PER_YEAR'	=> '每年',
	'SOI_DOWNLOADS_PER_USER'	=> '每用户',

	'SOI_BOARD_START_DATE'		=> '论坛开启于：',
));

/* Code from 3Di onlinesince ext */
$lang = array_merge($lang, [
	'OS_ELAPSED'	=> '论坛已运行：',
	'OS_YEAR'	=> [
		1	=> '<strong>%d</strong> 年',
		2	=> '<strong>%d</strong> 年',
	],
	'OS_MONTH'	=> [
		1	=> '<strong>%d</strong> 个月',
		2	=> '<strong>%d</strong> 个月',
	],
	'OS_DAY'	=> [
		1	=> '<strong>%d</strong> 天',
		2	=> '<strong>%d</strong> 天',
	]
]);