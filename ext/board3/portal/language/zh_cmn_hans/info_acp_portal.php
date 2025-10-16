<?php
/**
*
* @package Board3 Portal v2.3
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
	'ACP_PORTAL_MODULES'		=> '门户模块',
	'ACP_PORTAL'			=> '门户',
	'ACP_PORTAL_GENERAL_INFO'	=> '常规设置',
	'ACP_PORTAL_UPLOAD'		=> '上传模块',

	// Portal logs
	'LOG_PORTAL_LINK_ADDED'				=> '<strong>更改门户设置</strong><br />&raquo; 添加链接: %s ',
	'LOG_PORTAL_LINK_UPDATED'			=> '<strong>更改门户设置</strong><br />&raquo; 更新链接: %s ',
	'LOG_PORTAL_LINK_REMOVED'			=> '<strong>更改门户设置</strong><br />&raquo; 删除链接: %s ',
	'LOG_PORTAL_EVENT_ADDED'			=> '<strong>更改门户设置</strong><br />&raquo; 添加事件: %s ',
	'LOG_PORTAL_EVENT_UPDATED'			=> '<strong>更改门户设置</strong><br />&raquo; 更新事件: %s ',
	'LOG_PORTAL_EVENT_REMOVED'			=> '<strong>更改门户设置</strong><br />&raquo; 删除事件: %s ',
	'LOG_PORTAL_CONFIG'					=> '<strong>更改门户设置</strong><br />&raquo; %s',
));