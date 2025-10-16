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
	'EXCEPTION_MISSING_FIELD'		=> '缺少必填字段"%s"。',
	'EXCEPTION_OUT_OF_BOUNDS'		=> '字段"%s"接收到超出范围的值。',
	'EXCEPTION_TOO_LONG'			=> '字段"%s"接收到超过最大长度的值。',
	'EXCEPTION_NOT_UNIQUE'			=> '字段"%s"接收到的值不是唯一的。',
	'EXCEPTION_INVALID_CURRENCY'	=> '字段"%s"接收到无效的货币代码。',

	'EXCEPTION_FIELD_PKG_IDENT'		=> '套餐标识符',
	'EXCEPTION_FIELD_PKG_NAME'		=> '套餐名称',
	'EXCEPTION_FIELD_TERM_PRICE'	=> '订阅价格',
	'EXCEPTION_FIELD_TERM_CURRENCY'	=> '订阅价格',
	'EXCEPTION_FIELD_TERM_LENGTH'	=> '订阅时长',
));