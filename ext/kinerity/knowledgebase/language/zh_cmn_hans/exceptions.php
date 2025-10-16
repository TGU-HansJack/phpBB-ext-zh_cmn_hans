<?php
/**
 *
 * Knowledge Base extension for the phpBB Forum Software package
 *
 * @copyright (c) 2017, kinerity, https://www.acsyste.com
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
	'EXCEPTION_FIELD_MISSING'		=> '缺少必填字段',
	'EXCEPTION_INVALID_ARGUMENT'	=> '为"%1$s"指定了无效参数。原因：%2$s',
	'EXCEPTION_OUT_OF_BOUNDS'		=> '字段"%1$s"接收到超出范围的数据',
	'EXCEPTION_TOO_LONG'			=> '输入内容超出了最大长度限制。',
	'EXCEPTION_NOT_UNIQUE'			=> '输入内容不唯一。',
	'EXCEPTION_UNEXPECTED_VALUE'	=> '字段"%1$s"接收到意外数据。原因：%2$s',
	'EXCEPTION_ILLEGAL_CHARACTERS'	=> '输入内容包含非法字符。',
));