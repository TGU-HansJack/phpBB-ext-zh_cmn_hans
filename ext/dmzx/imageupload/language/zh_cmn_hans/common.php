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
	'IMAGEUPLOAD_UPLOAD'						=> '图片上传',
	'IMAGEUPLOAD_UPLOAD_SECTION'				=> '图片上传区',
	'IMAGEUPLOAD_UPLOAD_MESSAGE'				=> '在此上传您的图片。（注意此文件夹将被清空且所有上传都会被记录）',
	'IMAGEUPLOAD_NOT_ENABELD'					=> '图片上传未启用',
	'IMAGEUPLOAD_NEW_DOWNLOAD_SIZE'				=> '文件的最大大小为 <strong>%1$s %2$s</strong>！由于您可能需要上传时间，此值可能更低！',
	'IMAGEUPLOAD_NO_FILENAME'					=> '您必须输入一个属于您上传的文件！',
	'IMAGEUPLOAD_CURRENT_VERSION'				=> '版本',
	'IMAGEUPLOAD_NEW_FILENAME'					=> '文件名',
	'IMAGEUPLOAD_SUCCEEDED'						=> '上传成功！',
	'IMAGEUPLOAD_DIRECT_LINK'					=> '直接链接',
	'IMAGEUPLOAD_URL_LINK'						=> 'URL',
	'IMAGEUPLOAD_IMG_LINK'						=> 'IMG',
	'IMAGEUPLOAD_URLIMG_LINK'					=> 'URL-IMG',
	'IMAGEUPLOAD_BY'							=> '图片上传者',
	'IMAGEUPLOAD_COPY'							=> '复制',
	'IMAGEUPLOAD_UPLOADED_IMAGES'				=> '您上传的图片',
	'IMAGEUPLOAD_POSTINGPAGE'					=> '在这里您可以找到您上传的图片，点击图片预览。',
	'IMAGEUPLOAD_INDEXPAGE'						=> '在这里您可以找到您上传的图片，点击图片预览，只需拖放即可。',
	'IMAGEUPLOAD_INDEXPAGE_CHAT'				=> '在这里您可以找到您上传的图片，点击图片预览，只需拖放或点击标题按钮直接发布到mChat。',
	'IMAGEUPLOAD_UPC_INDEX'						=> '在首页查看您上传的图片',
	'IMAGEUPLOAD_COLLAPSIBLE_CATEGORIES_TITLE'	=> [
		0 => '隐藏图片上传',
		1 => '显示图片上传',
	],
	'IMAGEUPLOAD_UCP_DELETE_IMAGES'				=> '删除图片',
	'IMAGEUPLOAD_UCP_DELETED_IMAGES'			=> '已删除图片',
	'IMAGEUPLOAD_PAGE_RETURN'					=> '返回上传的图片',
	'IMAGEUPLOAD_DIRECTORY_FAIL'				=> '错误：目录 <strong>%s</strong> 不可写！',
	'IMAGEUPLOAD_IMAGES_PAGINATION'				=> [
		1 => '%s 张图片',
		2 => '%s 张图片',
	],
	'IMAGEUPLOAD_INSERT_IMAGE'					=> '插入图片',
	'IMAGEUPLOAD_INSERT_MCHAT_IMAGE'			=> '在mChat中插入图片',
	'IMAGEUPLOAD_MULTI_UPLOAD_EXPLAIN' 			=> '多图片上传区。<br>上传的图片将自动添加到您上传的图片中。<br>大于允许最大尺寸的图片不会被上传。<br>多图片上传不会提供链接或预览。',
	'IMAGEUPLOAD_MULTI_UPLOAD_DRAG' 			=> '将您的文件拖放到此处',
	'IMAGEUPLOAD_MULTI_UPLOAD_BROWSE' 			=> '或者浏览',
	'IMAGEUPLOAD_CLOSED'						=> '关闭',
	'IMAGEUPLOAD_INDEX'							=> '图片索引',
	'IMAGEUPLOAD_NO_ATTACHMENTS'				=> '暂无附件',
	'IMAGEUPLOAD_INDEX_TITLE'					=> '图片名称',
	'IMAGEUPLOAD_INDEX_DIMENSIONS'				=> '尺寸',
	'IMAGEUPLOAD_INDEX_FILESIZE'				=> '文件大小',
	'IMAGEUPLOAD_MULTI_UPLOAD'					=> '多图上传',
	'IMAGEUPLOAD_DROP_AREA'						=> '拖拽区域',
	'IMAGEUPLOAD_BROWSE_FILES'					=> '浏览文件',
]);