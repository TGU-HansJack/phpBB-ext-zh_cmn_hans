<?php
/**
*
* @package phpBB Extension - Image Upload
* @copyright (c) 2017 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'IMAGEUPLOAD_UCP'							=> '已上传的图片',
	'IMAGEUPLOAD_UCP_UPLOADED_IMAGES'			=> '您上传的图片。',
	'IMAGEUPLOAD_UCP_UPLOADED_NO_IMAGES'		=> '尚未上传任何图片。',
	'IMAGEUPLOAD_UCP_UPLOADED_IMAGES_DELETE'	=> '您可以在此处删除已上传的图片。',
	'IMAGEUPLOAD_TITLE'							=> '图片上传设置',
	'IMAGEUPLOAD_USER_MANUAL'					=> '在这里您可以设置图片上传的选项。',
	'IMAGEUPLOAD_ENABLE_UCP'					=> '启用个人控制面板',
	'IMAGEUPLOAD_RESIZE_ENABLED'				=> '启用图片缩放',
	'IMAGEUPLOAD_RESIZE_WIDTH'					=> '图片缩放宽',
	'IMAGEUPLOAD_RESIZE_HEIGHT'					=> '图片缩放高',
]);