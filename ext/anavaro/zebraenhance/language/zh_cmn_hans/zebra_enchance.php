<?php

/**
*
* Zebra Enhance [Chinese]
*
* @package language
* @version $Id$
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'UCP_ZEBRA_PENDING_IN'	=>	'等待确认',
	'UCP_ZEBRA_PENDING_IN_EXP'	=>	'列出等待您批准的请求。',

	'UCP_ZEBRA_PENDING_OUT'	=>	'待确认',
	'UCP_ZEBRA_PENDING_OUT_EXP'	=>	'列出等待批准的您的请求。',

	'UCP_ZEBRA_PENDING_NONE'	=>	'没有待处理的请求',

	'UCP_ZEBRA_ENCHANCE_CONFIRM_CANCEL_ASK'	=>	'您确定要取消好友请求吗？',
	'UCP_ZEBRA_ENCHANCE_CONFIRM_CANCEL'	=> '好友请求已取消！',

	'NOTIFICATION_TYPE_ZEBRA_ADD'	=>	'新好友请求通知',
	'NOTIFICATION_ZEBRA_ADD'	=>	'%1$s 向您发送了好友请求！',

	'NOTIFICATION_TYPE_ZEBRA_CONFIRM'	=>	'好友请求确认',
	'NOTIFICATION_ZEBRA_CONFIRM'	=>	'%1$s 已确认您的好友请求！',

	'FRINEDLIST_TITLE'	=>	'好友列表',

	'NOT_ENEMY'	=>	'除对手外的所有人',
	'SPECIAL_FRIENDS'	=>	'特别好友',

	'ZE_FRIENDLIST'	=>	'好友列表',
	'ZE_FRIENDLIST_EXPLAIN'	=>	'谁可以看到您的好友列表？',

	'FRIENDLIST_ERROR_ACCESS'	=>	'您无权查看用户的好友列表。',

));