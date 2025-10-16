<?php
/**
 *
 * Delete My Account. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 BrokenCrust
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

	'DELETE_MY_ACCOUNT' => '删除我的账户',
	'DELETE_YOUR_ACCOUNT' => '删除您的账户',
	'DELETE_MY_ACCOUNT_TEXT' => '您可以使用此表单删除您自己的账户。一旦完成，您的所有个人和私人数据都将从此站点中删除，您将无法再登录。',
	'REALY_DELETE' => '我确实希望删除我的账户。',
	'UNDERSTAND_DELETE' => '我理解此操作无法撤销。',
	'DELETE_MY_POSTS' => '同时删除我的帖子（如不勾选，帖子将成为游客帖子）。',
	'ENTER_PASSWORD' => '输入您的密码',
	'ENTER_PASSWORD_HERE' => '在此输入您的密码...',
	'DELETED_USER' => '已删除用户 %s',
	'DELETE_FINAL' => '最终确认',
	'DELETE_FINAL_CONFIRM' => '<p>感谢您成为本网站的成员。很遗憾看到您离开。</p><p>您的请求已验证。这是最终确认。您是否要永久删除您的账户？</p>',

	'LOG_USER_DELETED' => '用户 %s (ID %s) 已删除其自己的账户。',
	'LOG_POST_REMOVED' => '他们的帖子已被删除。',
	'LOG_POST_RETAINED' => '他们的帖子已被保留。',
	'LOG_NO_POSTS' => '他们没有帖子。',

	'REALLY_ERROR' => '您必须确认确实希望删除您的账户。',
	'UNDERSTAND_ERROR' => '您必须确认理解此过程无法撤销。',
	'PASSWORD_ERROR' => '您输入的密码不正确。',
	'FOUNDER_ERROR' => '创始人无法使用自助删除过程。',
	'BAD_FORM_KEY_ERROR' => '无法验证表单提交。请重新提交您的请求。',
	'GOODBYE_ERROR' => '您的账户已被删除。'

));