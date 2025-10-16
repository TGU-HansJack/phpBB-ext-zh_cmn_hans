<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
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
	'EXCEPTION_OUT_OF_BOUNDS'		=> '字段`%s`接收到超出范围的值。',
	'EXCEPTION_INVALID_COLOR'		=> '字段`%s`接收到无效的颜色值。有效颜色是6个字符的十六进制字符串(0-9, A-F)。',
	'EXCEPTION_TOO_LONG'			=> '字段`%s`接收到超过最大长度的值。',
	'EXCEPTION_NAME_REQUIRED'		=> '您必须输入徽章项目的名称。',
	'EXCEPTION_CAT_NAME_REQUIRED'	=> '您必须输入分类的名称。',
	'EXCEPTION_IMG_CONFLICT'		=> '同名图像已存在。',
	'EXCEPTION_IMG_PROCESSING'		=> '处理图像时发生错误。',

	'EXCEPTION_FIELD_FLAIR_COLOR'		=> '徽章颜色',
	'EXCEPTION_FIELD_FLAIR_ICON_COLOR'	=> '徽章图标颜色',
	'EXCEPTION_FIELD_FLAIR_FONT_COLOR'	=> '徽章字体颜色',
));