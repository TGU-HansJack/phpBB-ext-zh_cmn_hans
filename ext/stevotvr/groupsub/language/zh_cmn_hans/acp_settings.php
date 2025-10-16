<?php
/**
 *
 * Group Subscription. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Steve Guidetti, https://github.com/stevotvr
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
	'ACP_GROUPSUB_SETTINGS_TITLE'			=> '群组订阅设置',
	'ACP_GROUPSUB_SETTINGS_SAVED'			=> '群组订阅选项保存成功',
	'ACP_GROUPSUB_SETTINGS_PAYPAL'			=> 'PayPal设置',
	'ACP_GROUPSUB_PP_SANDBOX'				=> '启用沙盒模式',
	'ACP_GROUPSUB_PP_SANDBOX_EXPLAIN'		=> '沙盒模式允许你在不使用真实资金的情况下测试PayPal支付。',
	'ACP_GROUPSUB_PP_SB_BUSINESS'			=> '沙盒邮箱地址',
	'ACP_GROUPSUB_PP_SB_BUSINESS_EXPLAIN'	=> '这是你的PayPal沙盒账户的邮箱地址。',
	'ACP_GROUPSUB_PP_BUSINESS'				=> 'PayPal邮箱地址',
	'ACP_GROUPSUB_PP_BUSINESS_EXPLAIN'		=> '这是将接受付款的PayPal账户的邮箱地址',
	'ACP_GROUPSUB_SETTINGS_GENERAL'			=> '常规选项',
	'ACP_GROUPSUB_HEADER'					=> '页面头部',
	'ACP_GROUPSUB_HEADER_EXPLAIN'			=> '在所有订阅页面顶部显示的信息。',
	'ACP_GROUPSUB_FOOTER'					=> '页面底部',
	'ACP_GROUPSUB_FOOTER_EXPLAIN'			=> '在所有订阅页面底部显示的信息。',
	'ACP_GROUPSUB_SETTINGS_DEFAULTS'		=> '套餐默认设置',
	'ACP_GROUPSUB_DEFAULT_CURRENCY'			=> '默认货币',
	'ACP_GROUPSUB_DEFAULT_CURRENCY_EXPLAIN'	=> '这是所有新套餐的默认货币，可以在每个套餐基础上进行覆盖。',
	'ACP_GROUPSUB_WARN_TIME'				=> '警告时间',
	'ACP_GROUPSUB_WARN_TIME_EXPLAIN'		=> '在订阅到期前通知订阅者的天数。',
	'ACP_GROUPSUB_GRACE'					=> '宽限期',
	'ACP_GROUPSUB_GRACE_EXPLAIN'			=> '订阅结束后，在将用户从用户组中移除之前的天数。',

	'ACP_GROUPSUB_ERROR_CURRENCY'	=> '你必须选择一个有效的货币。',
));