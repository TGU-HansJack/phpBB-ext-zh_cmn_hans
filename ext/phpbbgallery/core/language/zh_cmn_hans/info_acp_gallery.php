<?php
/**
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'ACP_GALLERY'					=> '画廊',
	'ACP_GALLERY_ALBUMS'			=> '相册',
	'ACP_GALLERY_ALBUMS_EXPLAIN'	=> '您可以在此管理画廊相册。',
	'ACP_GALLERY_CONFIGURE'			=> '配置',
	'ACP_GALLERY_CONFIGURE_EXPLAIN'	=> '您可以在此更改画廊的基本设置。',
	'ACP_GALLERY_INDEX'				=> '画廊索引',
	'ACP_GALLERY_INDEX_EXPLAIN'		=> '您可以在此查看画廊的概述信息。',
	'ACP_GALLERY_LOGS'				=> '日志',
	'ACP_GALLERY_LOGS_EXPLAIN'		=> '您可以在此查看画廊的所有操作日志。',
	'ACP_GALLERY_MANAGE'			=> '管理',
	'ACP_GALLERY_MANAGE_EXPLAIN'	=> '您可以在此管理画廊相册和图像。',
	'ACP_GALLERY_MODERATE'			=> '版主',
	'ACP_GALLERY_MODERATE_EXPLAIN'	=> '您可以在此执行画廊的版主操作。',
	'ACP_GALLERY_PERMISSIONS'		=> '权限',
	'ACP_GALLERY_PERMISSIONS_EXPLAIN'	=> '您可以在此设置画廊的用户和组权限。',
	'ACP_GALLERY_SETTINGS'			=> '设置',
	'ACP_GALLERY_SETTINGS_EXPLAIN'	=> '您可以在此配置画廊的所有设置。',
	'ACP_GALLERY_USERS'				=> '用户',
	'ACP_GALLERY_USERS_EXPLAIN'		=> '您可以在此管理画廊用户。',

	'ACP_GALLERY_ALBUM_MANAGEMENT'       => '相册管理',
	'ACP_GALLERY_ALBUM_PERMISSIONS'      => '权限',
	'ACP_GALLERY_ALBUM_PERMISSIONS_COPY' => '复制权限',
	'ACP_GALLERY_CONFIGURE_GALLERY'      => '配置画廊',
	'ACP_GALLERY_LOGS'                   => '画廊日志',
	'ACP_GALLERY_LOGS_EXPLAIN'           => '这里列出了画廊的所有版主操作，如批准、拒绝、锁定、解锁、关闭报告和删除图像。',
	'ACP_GALLERY_MANAGE_ALBUMS'          => '管理相册',
	'ACP_GALLERY_OVERVIEW'               => '概述',

	'GALLERY'                  => '画廊',
	'GALLERY_EXPLAIN'          => '图像画廊',
	'GALLERY_HELPLINE_ALBUM'   => '画廊图像：[image]image_id[/image]，使用此BBCode您可以将画廊中的图像添加到您的帖子中。',
	'GALLERY_POPUP'            => '画廊',
	'GALLERY_POPUP_HELPLINE'   => '打开一个弹出窗口，您可以在其中选择最近的图像并上传新图像。',

	// Please do not change the copyright.
	'GALLERY_COPYRIGHT'        => 'Powered by <a href="http://www.anavaro.com/">phpBB Gallery</a> &copy; 2016 <a href="http://www.anavaro.com/">Lucifer</a>',

	// A little line where you can give yourself some credits on the translation.
	//'GALLERY_TRANSLATION_INFO'			=> 'English “phpBB Gallery“-Translation by <a href="http://www.flying-bits.org/">nickvergessen</a>',
	'GALLERY_TRANSLATION_INFO' => '',

	'IMAGES'                  => '图像',
	'IMG_BUTTON_UPLOAD_IMAGE' => '上传图像',

	'PERSONAL_ALBUM' => '个人相册',
	'PHPBB_GALLERY'  => 'phpBB 画廊',

	'TOTAL_IMAGES_SPRINTF' => array(
		0 => '总图像数 <strong>0</strong>',
		1 => '总图像数 <strong>%d</strong>',
	),

	'GALLERY_EXTENSIONS'			=> '画廊扩展',
	'GALLERY_EXTENSIONS_EXPLAIN'	=> '您可以在此管理画廊的扩展功能。',

	'GALLERY_INDEX'					=> '画廊索引',
	'GALLERY_INDEX_EXPLAIN'			=> '您可以在此查看画廊的概述信息。',

	'GALLERY_SORT_SETTINGS'			=> '排序设置',
	'GALLERY_SORT_SETTINGS_EXPLAIN'	=> '您可以在此更改画廊的排序设置。',

	'GALLERY_VERSION'				=> '画廊版本',
	'GALLERY_VERSION_EXPLAIN'		=> '您可以在此查看画廊的版本信息。',

	'NO_AUTH_OPERATION'				=> '您没有权限执行此操作。',

	'PERMISSIONS_TRANSFERRED'		=> '权限已转移',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> '您当前拥有 %s 的权限。您可以在此页面上以该用户身份浏览画廊，但不能访问用户控制面板，因为版主权限并未转移。要恢复您的权限，请<a href="%s">点击这里</a>。',

	'PLUPLOAD_UPLOAD'				=> '上传',
	'PLUPLOAD_UPLOAD_EXPLAIN'		=> '您可以在此上传图像到画廊。',
));