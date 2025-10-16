<?php
/**
 * [简体中文 [zh_cmn_hans]]
 * @package cBB Chat
 * @version 1.2.7 07/03/2025
 *
 * @copyright (c) 2025 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// DO NOT CHANGE
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'MCP_CHAT_BAN'				=> '聊天排除',
	
	'CHAT_BAN_CELL'				=> '用户名',
	'CHAT_BAN_CELL_EXPLAIN'		=> '要指定多个用户名，请在新行中分别输入。<br />
		使用<em><u>查找用户</u></em>链接可以自动查找和添加用户。',
	'CHAT_BAN_LIST'				=> '被排除的用户',
	'CHAT_EXCLUSIONS_ADDED'		=> '排除列表已修改',
	'CHAT_EXCLUSIONS_DELETED'	=> '排除列表已删除',
	'CHAT_EXCLUSIONS_ERROR'		=> '发生错误，请检查输入的数据',
	
	'LOG_CHAT_EXCLUSION_ADDED'		=> '<strong>cBB 聊天：</strong> 添加了排除<br />» %s',
 	'LOG_CHAT_EXCLUSION_REMOVED'	=> '<strong>cBB 聊天：</strong> 移除了排除<br />» %s',
 	'LOG_CHAT_MESSAGE_MOVED'		=> '<strong>cBB 聊天：</strong> 消息从 <em>%1$s</em> 移动到 <em>%2$s</em><br />» %3$s',
	'LOG_CHAT_MESSAGES_MOVED'		=> [
		1 => '<strong>cBB 聊天：</strong> 1 条消息从 <em>%1$s</em> 移动到 <em>%2$s</em>',
		2 => '<strong>cBB 聊天：</strong> %3$d 条消息从 <em>%1$s</em> 移动到 <em>%2$s</em>',
	],
	'LOG_CHAT_MESSAGE_REMOVED'		=> '<strong>cBB 聊天：</strong> 删除了消息 <br />» <em>%s</em>',
	'LOG_CHAT_MESSAGES_REMOVED'		=> [
		1 => '<strong>cBB 聊天：</strong> 从 <em>%1$s</em> 删除了 1 条消息',
		2 => '<strong>cBB 聊天：</strong> 从 <em>%1$s</em> 删除了 %2$d 条消息',
	],
]);
