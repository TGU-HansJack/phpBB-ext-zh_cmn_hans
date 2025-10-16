<?php
/**
 *
 * phpBB Browser Push Notifications. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2024, phpBB Limited <https://www.phpbb.com>
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
	$lang = [];
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

$lang = array_merge($lang, [
	'PWA_SETTINGS'				=> '渐进式Web应用程序选项',
	'PWA_SHORT_NAME'			=> '站点简称',
	'PWA_SHORT_NAME_EXPLAIN'	=> '您的站点名称应在12个字符以内，可以作为移动设备主屏幕上的图标标签。（如果此字段留空，则将使用<samp>站点名称</samp>的前12个字符。）',
	'PWA_SHORT_NAME_INVALID'	=> '"站点简称"超过12个字符限制。',
	'PWA_ICON_SMALL'			=> '小移动设备图标',
	'PWA_ICON_SMALL_EXPLAIN'	=> '192px x 192px PNG图像的文件名。此文件必须上传到您论坛的<samp>' . \phpbb\webpushnotifications\ext::PWA_ICON_DIR . '</samp>目录。',
	'PWA_ICON_LARGE'			=> '大移动设备图标',
	'PWA_ICON_LARGE_EXPLAIN'	=> '512px x 512px PNG图像的文件名。此文件必须上传到您论坛的<samp>' . \phpbb\webpushnotifications\ext::PWA_ICON_DIR . '</samp>目录。',
	'PWA_ICON_SIZE_INVALID'		=> '"%s"没有正确的图像尺寸。',
	'PWA_ICON_MIME_INVALID'		=> '"%s"必须是PNG图像文件。',
	'PWA_ICON_INVALID'			=> '"%s"不是有效的图像文件或在预期位置缺失。请验证文件名和位置是否正确。',
	'PWA_ICON_NOT_PROVIDED'		=> '%s字段不能为空。所有图标字段都必须包含图像。',
]);