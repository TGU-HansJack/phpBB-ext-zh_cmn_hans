<?php
/**
*
* @package phpBB Extension - Image Upload
* @copyright (c) 2017 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_IMAGEUPLOAD_SAVED'									=> '图片上传设置已保存',
	'ACP_IMAGEUPLOAD_VERSION'								=> '版本',
	'ACP_IMAGE_UPLOAD_CONFIGURATION'						=> '图片上传配置',
	'ACP_IMAGEUPLOAD_ENABLE'								=> '启用图片上传',
	'ACP_IMAGEUPLOAD_ENABLE_EXPLAIN'						=> '全局设置启用图片上传。',
	'ACP_IMAGEUPLOAD_INDEX_ENABLE'							=> '在首页启用图片',
	'ACP_IMAGEUPLOAD_INDEX_ENABLE_EXPLAIN'					=> '为所有成员全局开启/关闭首页图片。<br />成员可以在UCP中设置是否在首页查看上传的图片。',
	'ACP_IMAGEUPLOAD_NUMBER'								=> '上传大小',
	'ACP_IMAGEUPLOAD_NUMBER_EXPLAIN'						=> '设置上传大小，单位为MB，默认为2MB。',
	'ACP_IMAGEUPLOAD_NEW_DOWNLOAD_SIZE'						=> '您的php.ini允许的最大大小为 <strong>%1$s %2$s</strong>！',
	'ACP_IMAGEUPLOAD_REALLY_DELETE_IMAGE'					=> '确定删除图片？',
	'ACP_IMAGEUPLOAD_TITLE'									=> '图片名称',
	'ACP_IMAGEUPLOAD_TITLE_REAL'							=> '图片真实名称',
	'ACP_IMAGEUPLOAD_PREVIEW'								=> '预览',
	'ACP_IMAGEUPLOAD_WIDTH_HEIGHT'							=> '宽/高',
	'ACP_IMAGEUPLOAD_FOLDER_SIZE'							=> '总文件夹大小',
	'ACP_IMAGEUPLOAD_USERNAME'								=> '上传者',
	'ACP_IMAGEUPLOAD_SIZE'									=> '大小',
	'ACP_MULTI_IMAGES'		=>	[
		1 => '%s 张图片',
		2 => '%s 张图片',
	],
	'ACP_IMAGEUPLOAD_SORT_USERNAME'							=> '用户名',
	'ACP_IMAGEUPLOAD_SORT_DATE'								=> '日期',
	'ACP_IMAGEUPLOAD_NOT_SELECTED'							=> '未选择任何图片',
	'ACP_IMAGEUPLOAD_CHAT_ENABLE'							=> '启用mChat图片发布',
	'ACP_IMAGEUPLOAD_CHAT_ENABLE_EXPLAIN'					=> '设为是可在首页通过点击插入上传的图片。',
	'ACP_IMAGEUPLOAD_POST_ENABLE'							=> '在发帖页面启用图片上传按钮',
	'ACP_IMAGEUPLOAD_POST_ENABLE_EXPLAIN'					=> '设为是可在发帖页面显示上传按钮。',
	'ACP_IMAGEUPLOAD_POSTTAB_ENABLE'						=> '在发帖页面启用用户图片',
	'ACP_IMAGEUPLOAD_POSTTAB_ENABLE_EXPLAIN'				=> '发帖页面图片的全局开启/关闭。',
	'ACP_IMAGEUPLOAD_EXT'									=> '允许的扩展名',
	'ACP_IMAGEUPLOAD_EXT_EXPLAIN'							=> '允许包含的扩展名，用逗号分隔（例如：gif,jpeg,jpg,png）',
	'ACP_IMAGE_UPLOAD_LINK_SETTINGS'						=> '图片上传链接设置',
	'ACP_IMAGEUPLOAD_ENABLE_DIRECT_LINK'					=> '启用直接链接URL',
	'ACP_IMAGEUPLOAD_ENABLE_DIRECT_LINK_EXPLAIN'			=> '图片的直接URL。',
	'ACP_IMAGEUPLOAD_ENABLE_URL_LINK'						=> '启用URL标签',
	'ACP_IMAGEUPLOAD_ENABLE_URL_LINK_EXPLAIN'				=> '[url=文件名]站点名称[/url]',
	'ACP_IMAGEUPLOAD_ENABLE_IMG_LINK'						=> '启用IMG标签',
	'ACP_IMAGEUPLOAD_ENABLE_IMG_LINK_EXPLAIN'				=> '[img]文件名[/img]',
	'ACP_IMAGEUPLOAD_ENABLE_URL_IMG_LINK'					=> '启用URL-IMG标签',
	'ACP_IMAGEUPLOAD_ENABLE_URL_IMG_LINK_EXPLAIN'			=> '[url=文件名][img]文件名[/img][/url]',
	'ACP_IMAGEUPLOAD_MULTI_ENABLE'							=> '启用多图片上传',
	'ACP_IMAGEUPLOAD_MULTI_ENABLE_EXPLAIN'					=> '多图片上传的全局开启/关闭。',
		'ACP_IMAGEUPLOAD_CENTER_ENABLE'										 => '启用弹出居中',
		'ACP_IMAGEUPLOAD_CENTER_ENABLE_EXPLAIN'								 => '在同一页启用弹出窗口',
		'ACP_IMAGEUPLOAD_NAV_ENABLE'											=> '启用导航栏图标',
		'ACP_IMAGEUPLOAD_NAV_ENABLE_EXPLAIN'									=> '开启/关闭导航栏链接',
		'ACP_IMAGEUPLOAD_MCHAT_ENABLE'											=> '在mchat中启用图片上传按钮',
		'ACP_IMAGEUPLOAD_MCHAT_ENABLE_EXPLAIN'									=> '启用mchat的图片上传按钮',
]);