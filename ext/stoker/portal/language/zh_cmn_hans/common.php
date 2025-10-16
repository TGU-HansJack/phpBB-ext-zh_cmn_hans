<?php
/**
*
* Simple Portal extension for the phpBB Forum Software package.
* Chinese
*
* @copyright (c) 2015 Stoker www.phpbb3bbcodes.com
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'DECIMAL_SP'								=> '2',
	'DECIMAL_SEPARATOR_SP'						=> '.',
	'THOUSANDS_SEPARATOR_SP'					=> ',',

	'PORTAL_PAGE'								=> '首页',
	'ACP_PORTAL_BADGE'							=> 'Simple Portal-1.1.3',
	'ACP_PORTAL_SETTINGS_EXPLAIN'				=> '如果您喜欢此扩展，请考虑关注',
	'ACP_PORTAL_DONATION'						=> '进行捐赠',
	'ACP_PORTAL_MEMBER'							=> '成为我社区的活跃成员',
	'ACP_PORTAL_SUPPORT'						=> '扩展支持或反馈',
	'PORTAL_UPDATED'							=> 'Simple Portal 已成功更新。',

	'ACP_PORTAL_ENABLE'							=> '启用 Simple Portal',
	'ACP_PORTAL_ENABLE_EXPLAIN'					=> '启用或禁用门户页面',
	'ACP_PORTAL_INFO'							=> 'Simple Portal 文本',
	'ACP_PORTAL_INFO_EXPLAIN'					=> '您可以编辑显示在"Simple Portal"页面上的文本。',
	'ACP_PORTAL_INFO_PREVIEW'					=> 'Simple Portal 预览',
	'ACP_PORTAL'								=> 'Simple Portal',
	'ACP_PORTAL_SETTINGS'						=> 'Simple Portal 设置',
	
	'ACP_PORTAL_STATS_ENABLE'					=> '门户统计',
	'ACP_PORTAL_STATS_ENABLE_EXPLAIN'			=> '在门户页面上显示论坛统计信息。',
	'ACP_PORTAL_SOI_AVAILABLE'					=> '此选项仅在安装了 <a href="https://phpbb3bbcodes.com/viewtopic.php?t=2778" title="Visit Stats on Index topic at PhpBB3 BBCodes" target="_blank" rel="noopener noreferrer">Stats on Index</a> 扩展时可用！',
	
	'ACP_PORTAL_SMILE_ENABLE'					=> '启用图像',
	'ACP_PORTAL_SMILE_ENABLE_EXPLAIN'			=> '如果要在欢迎信息中显示图标并在欢迎文本块中显示背景图像，请启用此功能<br />图像位于: ext/stoker/portal/styles/prosilver/theme/images。正在使用的图像有: morning_bg.webp, day_bg.webp, midday_bg.webp, afternoon_bg.webp, evening_bg.webp 和 goodnight_bg.webp - 您可以随意用自己的图像替换它们。',
	
	'UP_LATE1'             		=> '%1$s，您熬夜了',
	'UP_LATE2'             		=> '难道不应该睡觉吗？',
    'UP_EARLY1'             	=> '早上好 %1$s',
	'UP_EARLY2'             	=> '您今天起得很早呢。来杯咖啡吧',
    'GOOD_MORNING1'           	=> '早上好 %1$s',
	'GOOD_MORNING2'           	=> '多么美好的早晨啊。祝您今天愉快',
	'GOOD_DAY1'        			=> '您好 %1$s',
	'GOOD_DAY2'        			=> '希望您在这里度过愉快的时光',
    'GOOD_AFTERNOON1'       	=> '下午好 %1$s',
	'GOOD_AFTERNOON2'       	=> '您终于来了。我们需要更多咖啡',
    'GOOD_EVENING1'           	=> '晚上好 %1$s',
	'GOOD_EVENING2'           	=> '很高兴在这里见到您。是喝啤酒的时间了！',
   	'GOOD_NIGHT1'           	=> '晚安 %1$s',
	'GOOD_NIGHT2'           	=> '该睡觉了，或者再写会儿代码？',
    'WELCOME_GUEST'           	=> '游客',
	'WELCOME_YOU'				=> '您加入于',
	'MEMBER_FOR' 				=> '会员时长',

	'VIEWONLINE_PORTAL'			=> '正在浏览首页',
));

/* Code from 3Di onlinesince ext */
$lang = array_merge($lang, [
	'OS_YEAR_MEMBER'	=> [
		1	=> '%d 年',
		2	=> '%d 年',
	],
	'OS_MONTH_MEMBER'	=> [
		1	=> '%d 个月',
		2	=> '%d 个月',
	],
	'OS_AND' => '和',
	'OS_DAY_MEMBER'	=> [
		1	=> '%d 天',
		2	=> '%d 天',
	]
]);