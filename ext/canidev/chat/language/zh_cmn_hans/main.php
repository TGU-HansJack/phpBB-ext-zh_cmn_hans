<?php
/**
 * [简体中文 [zh_cmn_hans]]
 * @package cBB Chat
 * @version 1.2.7 07/03/2025
 *
 * @copyright (c) 2025 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// @ignore
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = [];
}

// Chat language
$lang = array_merge($lang, [
	'CHAT'						=> '聊天',
	'CHAT_APPLY'				=> '应用',
	'CHAT_ARCHIVE'				=> '聊天存档',
	'CHAT_BAN_DATE'				=> '排除结束时间',
	'CHAT_BAN_DATE_EXPLAIN'		=> '有效格式为 DD/MM/YYYY hh:mm:ss。',
	'CHAT_BAN_PERIOD'			=> '排除持续时间',
	'CHAT_BAN_USER'				=> '排除',
	'CHAT_BBCODE'				=> 'BBCode',
	'CHAT_CHANGE_NAME'			=> '更改用户名',
	'CHAT_COLOR'				=> '文字颜色',
	'CHAT_CONNECT'				=> '连接/断开',
	'CHAT_CUSTOM_BBCODES'		=> '自定义BBCode',
	'CHAT_DELETE_USER'			=> '删除用户',
	'CHAT_DEST_ROOM'			=> '目标房间',
	'CHAT_DISCONNECT_MESSAGE'	=> '您已断开连接。',
	'CHAT_FLOOD_WAIT'			=> '已设置灌水时间，请稍候...',
	'CHAT_GUEST'				=> '访客_%s',
	'CHAT_GUEST_ROOM'			=> '通用',
	'CHAT_MENTION'				=> '提及',
	'CHAT_MOVE'					=> '移动到其他房间',
	'CHAT_MOVE_CONFIRM'			=> '您确定要移动所选消息吗？',
	'CHAT_NO_INFORMATION'		=> '无可用信息。',
	'CHAT_PM_EXCEED'			=> '由于管理设置的限制，您无法打开更多私人对话。',
	'CHAT_PURGE'				=> '清除消息',
	'CHAT_PURGE_CONFIRM'		=> '您确定要删除 <strong><em>%s</em></strong> 房间的所有消息吗？',
	'CHAT_REFRESH'				=> '刷新',
	'CHAT_RULES'				=> '聊天规则',
	'CHAT_SEND_PM'				=> '私人消息',
	'CHAT_SMILIES'				=> '表情',
	'CHAT_SOUND'				=> '启用/禁用声音',

	'CHAT_ENTER_AS_GUEST'		=> '以访客身份进入',
	'CHAT_ENTER_AS_REGISTERED'	=> '以论坛成员身份进入',
	
	'CHAT_STATUS_AVAILABLE'		=> '在线',
	'CHAT_STATUS_AWAY'			=> '离开',
	'CHAT_STATUS_BUSY'			=> '忙碌',
	'CHAT_STATUS_HIDDEN'		=> '隐身',

	'CHAT_TIP'					=> '提示',
	'CHAT_UNBAN_USER'			=> '移除排除',
	'CHAT_USER_BANNED_PERIOD'		=> '您被排除在聊天之外直到：%s',
	'CHAT_USER_BANNED_PERMANENT'	=> '您被永久排除在聊天之外。',
	'CHAT_USER_ALREADY_EXISTS'		=> '用户名已被使用。',
	'CHAT_VIEW_HISTORY'				=> '查看历史消息',

	'CUSTOM_DATE'		=> '自定义日期',
	'EDIT'				=> '编辑',
	'HALF_AN_HOUR'		=> '半小时',
	'NEW_TOPIC'			=> '新主题',
	'PERMANENT'			=> '永久',
	'QUOTE'				=> '引用',

	'CORE_INSTALL_ERROR'	=> '您尚未上传安装包中的所有文件，或者您正在尝试安装旧版本。<br />
		请确保上传所有文件（包括 <em>core</em> 文件夹）并使用从官方网站下载的安装包。',
]);

// Text language
$lang = array_merge($lang, []);
