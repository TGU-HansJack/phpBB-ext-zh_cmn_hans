<?php
/**
*
* @package Board3 Portal v2.3 - Birthday List
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
	'BIRTHDAYS_AHEAD'              => '在未来 %s 天内',
	'NO_BIRTHDAYS_AHEAD'        => '在此时间段内没有成员过生日。',

	// ACP
	'ACP_PORTAL_BIRTHDAYS_SETTINGS'			=> '生日设置',
	'ACP_PORTAL_BIRTHDAYS_SETTINGS_EXP'	=> '您可以在此自定义生日模块。',
	'PORTAL_BIRTHDAYS'						=> '生日模块',
	'PORTAL_BIRTHDAYS_AHEAD'				=> '提前显示生日天数',
	'PORTAL_BIRTHDAYS_AHEAD_EXP'		=> '提前多少天查看即将到来的生日。<br />"0"将禁用提前生日列表。',
));