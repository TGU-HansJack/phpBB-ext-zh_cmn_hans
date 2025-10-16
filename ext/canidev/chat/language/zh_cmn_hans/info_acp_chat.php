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
	'ACP_CAT_CHAT'			=> '聊天',
	
	'ACP_CHAT_CONFIG'		=> '主要配置',
	'ACP_CHAT_PAGES'		=> '管理页面',
	'ACP_CHAT_ROOMS'		=> '管理房间',
	'ACP_CHAT_TEXTS'		=> '静态文本和规则',

	'LOG_CHAT_CONFIG'				=> '<strong>cBB 聊天：</strong> 更改了主要配置',
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
	'LOG_CHAT_ROOM_REMOVED'			=> '<strong>cBB 聊天：</strong> 删除了房间 <em>%s</em> 及其消息',
]);
