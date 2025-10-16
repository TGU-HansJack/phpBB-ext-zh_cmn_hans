<?php
/**
*
* @package Board3 Portal v2.3 - Donation
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
	'DONATION' 		=> 'PayPal 捐赠',
	'DONATION_TEXT'	=> '是一个提供服务的团体，无意获取任何货币利润。欢迎您的捐赠，以支付我们的服务器、域名等费用。',
	'PAY_MSG'       => '请使用小数点（而不是逗号）作为分隔符，例如 3.50',
	'PAY_ITEM'		=> '捐赠！', // paypal item

	'AUD'						=> '澳大利亚元 (AUD)',
	'CAD'						=> '加拿大元 (CAD)',
	'CZK'						=> '捷克克朗 (CZK)',
	'DKK'						=> '丹麦克朗 (DKK)',
	'HKD'						=> '港元 (HKD)',
	'HUF'						=> '匈牙利福林 (HUF)',
	'NZD'						=> '新西兰元 (NZD)',
	'NOK'						=> '挪威克朗 (NOK)',
	'PLN'						=> '波兰兹罗提 (PLN)',
	'GBP'						=> '英镑 (GBP)',
	'SGD'						=> '新加坡元 (SGD)',
	'SEK'						=> '瑞典克朗 (SEK)',
	'CHF'						=> '瑞士法郎 (CHF)',
	'JPY'						=> '日元 (JPY)',
	'USD'						=> '美元 (USD)',
	'EUR'						=> '欧元 (EUR)',
	'MXN'						=> '墨西哥比索 (MXN)',
	'ILS'						=> '以色列新谢克尔 (ILS)',

	// ACP
	'ACP_PORTAL_PAYPAL_SETTINGS'			=> 'Paypal 设置',
	'ACP_PORTAL_PAYPAL_SETTINGS_EXP'		=> '您可以在此自定义 Paypal 模块。',
	'PORTAL_PAY_ACC'						=> '要使用的 Paypal 账户',
	'PORTAL_PAY_ACC_EXP'					=> '输入您的 Paypal 电子邮件地址，例如 xxx@xxx.com',
	'PORTAL_PAY_CUSTOM'						=> '将用户名附加到 Paypal 捐赠',
	'PORTAL_PAY_DEFAULT'					=> '默认货币',
	'PORTAL_PAY_DEFAULT_EXP'				=> '将在货币下拉列表中默认选择的货币。'
));