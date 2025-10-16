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
	'ACL_CAT_CHAT'				=> '聊天',
	'ACL_A_CHAT'				=> '可以管理聊天',

	'ACL_M_CHAT_DELETE'			=> '可以删除消息',
	'ACL_M_CHAT_EDIT'			=> '可以编辑消息',

	'ACL_U_CHAT_ARCHIVE'		=> '可以查看存档',
	'ACL_U_CHAT_DELETE'			=> '可以删除自己的消息',
	'ACL_U_CHAT_EDIT'			=> '可以编辑自己的消息',
	'ACL_U_CHAT_IGNOREFLOOD'	=> '可以忽略灌水限制',
	'ACL_U_CHAT_POST'			=> '可以发送消息',
	'ACL_U_CHAT_SENDPM'			=> '可以发送私人消息',
	'ACL_U_CHAT_VIEW'			=> '可以查看聊天',
]);
