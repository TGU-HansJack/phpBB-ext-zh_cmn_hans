<?php
/**
*
* @package phpBB Extension - Who Visited This Topic
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'WHOVISITEDTHISTOPIC_TOPIC_SETTINGS'				=> '在主题中启用“谁访问了这个主题”功能',
	'WHOVISITEDTHISTOPIC_TOPIC_SETTINGS_EXPLAIN'		=> '这将在查看主题页面显示访问过该主题的用户。',
	'WHOVISITEDTHISTOPIC_COUNT_SETTINGS'				=> '在主题中启用“谁访问了这个主题”计数器',
	'WHOVISITEDTHISTOPIC_COUNT_SETTINGS_EXPLAIN'		=> '这将在主题中显示访问过该主题的用户计数器。',
	'WHOVISITEDTHISTOPIC_SHOW_AVATAR'					=> '在主题中启用“谁访问了这个主题”的用户头像',
	'WHOVISITEDTHISTOPIC_SHOW_AVATAR_EXPLAIN'			=> '这将在主题中显示访问过该主题的用户头像。',
	'WHOVISITEDTHISTOPIC_MEMBERPAGE_SETTINGS'			=> '在个人资料中启用“谁访问了这个主题”功能',
	'WHOVISITEDTHISTOPIC_MEMBERPAGE_SETTINGS_EXPLAIN'	=> '这将在个人资料中显示访问过该主题的用户。',
	'WHOVISITEDTHISTOPIC_SETTING'						=> '设置主题中显示访问用户的数量',
	'WHOVISITEDTHISTOPIC_SETTING_EXPLAIN'				=> '数值可调整范围为2至255位会员。<em>默认值为10。</em>',
	'WHOVISITEDTHISTOPIC_VISIT_SETTING'					=> '设置个人资料中显示最近访问主题的数量',
	'WHOVISITEDTHISTOPIC_VISIT_SETTING_EXPLAIN'			=> '数值可调整范围为2至255。<em>默认值为10。</em>',
	'WHOVISITEDTHISTOPIC_DISABLED_TOPIC'				=> '已禁用，请将“在主题中启用谁访问了这个主题”设置为是再输入数值',
	'WHOVISITEDTHISTOPIC_DISABLED_MEMBERPAGE'			=> '已禁用，请将“在个人资料中启用谁访问了这个主题”设置为是再输入数值',
	'WHOVISITEDTHISTOPIC_SETTINGS_EXPLAIN'				=> '请转到组权限部分的<em><strong>谁访问了这个主题</strong></em>标签页，以调整各组的权限。',
));