<?php
/**
 *
 * Group Subscription. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Steve Guidetti, https://github.com/stevotvr
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
	'GROUPSUB_PACKAGE_LIST'		=> '订阅',
	'GROUPSUB_NO_PACKAGES'		=> '没有可用的订阅。',
	'GROUPSUB_NO_DESC'			=> '没有可用的描述。',
	'GROUPSUB_SUBSCRIPTION'		=> '订阅',
	'GROUPSUB_PRICE'			=> '价格',
	'GROUPSUB_LENGTH'			=> '时长',
	'GROUPSUB_LENGTH_UNLIMITED'	=> '无限',
	'GROUPSUB_SUBSCRIBE'		=> '订阅',
	'GROUPSUB_RENEW'			=> '续订',
	'GROUPSUB_CHOOSE_TERM'		=> '订阅 %s',
	'GROUPSUB_SUBSCRIBED'		=> '您已永久订阅',
	'GROUPSUB_SUBSCRIBED_UNTIL'	=> '您的订阅有效期至 %s',
	'GROUPSUB_CONFIRM'			=> '确认订阅 %s',

	'GROUPSUB_RETURN_TITLE'		=> '谢谢',
	'GROUPSUB_RETURN'			=> '已订阅',
	'GROUPSUB_RETURN_UNLIMITED'	=> '<strong>无限</strong> 时间',
	'GROUPSUB_RETURN_MESSAGE'	=> '您已订阅 <strong>%1$s</strong>，时长为 %2$s。请稍等几分钟让您的付款得到处理并激活您的订阅。',

	'GROUPSUB_PP_LOCALE'	=> 'zh_CN',
	'GROUPSUB_PP_BUY_NOW'	=> '立即购买',

	'GROUPSUB_DECIMAL_SEPARATOR'	=> '.',
	'GROUPSUB_THOUSANDS_SEPARATOR'	=> ',',

	'GROUPSUB_DAYS'		=> array(
		1	=> '天',
		2	=> '天',
	),
	'GROUPSUB_WEEKS'	=> array(
		1	=> '周',
		2	=> '周',
	),
	'GROUPSUB_MONTHS'	=> array(
		1	=> '月',
		2	=> '月',
	),
	'GROUPSUB_YEARS'	=> array(
		1	=> '年',
		2	=> '年',
	),
));