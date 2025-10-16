<?php
/**
 *
 * Canned Messages. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'MCP_CANNEDMESSAGE_ADD_LOG'			=> '<strong>已添加预设消息</strong><br />» %s',
	'MCP_CANNEDMESSAGE_EDIT_LOG'		=> '<strong>已编辑预设消息</strong><br />» %s',
	'MCP_CANNEDMESSAGE_DELETE_LOG'		=> '<strong>已删除预设消息</strong><br />» %s',
	'MCP_CANNEDMESSAGE_MOVE_UP_LOG'		=> '<strong>移动预设消息</strong> %1$s <strong>至</strong> %2$s <strong>之上</strong>',
	'MCP_CANNEDMESSAGE_MOVE_DOWN_LOG'	=> '<strong>移动预设消息</strong> %1$s <strong>至</strong> %2$s <strong>之下</strong>',
));