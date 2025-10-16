<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Steve Guidetti, https://github.com/stevotvr
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
	'MCP_FLAIR'			=> '资料徽章',
	'MCP_FLAIR_EXPLAIN'	=> '您可以在这里管理%s的资料徽章。<ul><li>点击<b>设置</b>按钮将计数设置为指定值。</li><li>点击<b>&times;</b>按钮删除项目。</li><li>点击<b>+</b>按钮以指定计数添加项目。</li></ul>',

	'MCP_FLAIR_USER'	=> '管理用户的徽章',
	'MCP_FLAIR_FRONT'	=> '首页',

	'MCP_FLAIR_USER_FLAIR'		=> '%s的徽章',
	'MCP_FLAIR_AVAILABLE'		=> '可用徽章',
	'MCP_FLAIR_NO_FLAIR'		=> '此用户的资料中未分配徽章。',
	'MCP_FLAIR_NO_AVAILABLE'	=> '没有可用的徽章项目。',
	'MCP_FLAIR_ADD_TITLE'		=> '将"%1$s"添加到%2$s的资料',
	'MCP_FLAIR_SET_COUNT_TITLE'	=> '设置%2$s资料上的"%1$s"计数',
	'MCP_FLAIR_REMOVE_TITLE'	=> '从%2$s的资料中删除"%1$s"',
	'MCP_FLAIR_REMOVE_CONFIRM'	=> '您确定要删除此项吗？',

	'MCP_FLAIR_SET'	=> '设置',
));