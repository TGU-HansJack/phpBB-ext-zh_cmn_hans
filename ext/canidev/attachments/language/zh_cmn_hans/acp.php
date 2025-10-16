<?php
/**
 * [简体中文 [zh_cmn_hans]]
 * @package cBB Attachments
 * @version 1.0.1 01/07/2024
 *
 * @copyright (c) 2024 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// DO NOT CHANGE
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_AP_CONFIG_EXPLAIN'		=> '在此处您可以管理某些附件格式的特定选项。',

	'AP_ALLOW_DOWNLOAD'			=> '允许下载',
	'AP_ALLOW_DOWNLOAD_EXPLAIN'	=> '允许用户下载文件。<br >
		如果禁用，则文件上将不显示下载按钮。',
	'AP_VIEW_TYPE'			=> '视图类型',
	'AP_VIEW_TYPE_EXPLAIN'	=> '定义此格式的文件将如何显示。',

	'AP_SHOW_INFO'				=> '显示信息',
	'AP_SHOW_PLAYER'			=> '显示播放器',
	'AP_SHOW_PLAYER_AND_INFO'	=> '显示播放器+信息',
	'AP_SHOW_PREVIEW'			=> '显示预览',

	'AP_OPACITY'				=> '透明度',
	'AP_POSITION'				=> '位置',
	'AP_SIZE'					=> '尺寸',
	
	// Format: Audio
	'FORMAT_AUDIO_TITLE'		=> '音频文件',
	'FORMAT_AUDIO_EXPLAIN'		=> '音频文件的特定选项和播放器。',

	// Format: Basic
	'FORMAT_BASIC_TITLE'		=> '基本格式',
	'FORMAT_BASIC_EXPLAIN'		=> '为所有不包含在其他模块中的文件显示基本布局。<br />
		如果禁用，则将显示默认的phpBB布局。',

	// Format: Cad
	'FORMAT_CAD_TITLE'			=> 'CAD文件',
	'FORMAT_CAD_EXPLAIN'		=> 'AutoCad文件的特定选项和预览。',

	// Format: Image
	'FORMAT_IMAGE_TITLE'			=> '图像',
	'FORMAT_IMAGE_EXPLAIN'			=> '图像文件的选项。',
	'AP_IMAGE_HIDE_TEXT'			=> '隐藏图例',
	'AP_IMAGE_HIDE_TEXT_EXPLAIN'	=> '设置是否隐藏图像下方显示的文本',
	'AP_IMAGE_REMOVE_EXIF'			=> '删除Exif数据',
	'AP_IMAGE_REMOVE_EXIF_EXPLAIN'	=> '如果启用，上传为附件时将删除嵌入图像中的EXIF数据（例如：位置、相机、闪光灯等）。<br />
		<em>这只影响jpg或jpeg扩展名。</em>',
	'AP_IMAGE_WATERMARK'			=> '水印',
	'AP_IMAGE_WATERMARK_EXPLAIN'	=> '在此处您可以为新上传的图像设置水印。',

	// Format: Pdf
	'FORMAT_PDF_TITLE'			=> 'PDF文件',
	'FORMAT_PDF_EXPLAIN'		=> 'PDF文件的特定选项和预览。',

	// Format: Video
	'FORMAT_VIDEO_TITLE'		=> '视频文件',
	'FORMAT_VIDEO_EXPLAIN'		=> '视频文件的特定选项和播放器。',

	// Format: Custom
	'ADD_EXTENSION'				=> '添加扩展名',
	'AP_EXTENSION_IMAGE'		=> '图像或图标',
	'AP_EXTENSION_NAME'			=> '扩展名',
	'AP_FORMAT_EXTENSIONS'		=> '扩展名',
	'AP_FORMAT_TITLE'			=> '标题',
	'AP_FORMAT_TITLE_EXPLAIN'	=> '指定标识此格式/类别的名称。',
	'CUSTOM_FORMAT'				=> '自定义格式',
	'EDIT_EXTENSION'			=> '编辑扩展名',
	'FORMAT_ADD'				=> '添加格式',
	'FORMAT_CUSTOM'				=> '自定义',
]);
