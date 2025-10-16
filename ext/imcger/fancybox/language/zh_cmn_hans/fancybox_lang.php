<?php
/**
 *
 * Implements the image viewer Fancybox in phpBB.
 * An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Thorsten Ahlers
 * @license GNU General Public License, version 2 (GPL-2.0)
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

$lang = array_merge($lang, [
	'FANCYBOX_CLOSE'			 => '关闭',
	'FANCYBOX_NEXT'				 => '下一个',
	'FANCYBOX_PREV'				 => '上一个',
	'FANCYBOX_MODAL'			 => '您可以按ESC键关闭此模态内容',
	'FANCYBOX_ERROR'			 => '发生错误，请稍后再试',
	'FANCYBOX_IMAGE_ERROR'		 => '未找到图像',
	'FANCYBOX_TOGGLE_ZOOM'		 => '切换缩放级别',
	'FANCYBOX_TOGGLE_THUMBS'	 => '切换缩略图',
	'FANCYBOX_TOGGLE_SLIDESHOW'	 => '切换幻灯片',
	'FANCYBOX_TOGGLE_FULLSCREEN' => '切换全屏模式',
	'FANCYBOX_DOWNLOAD'			 => '下载',
	'FANCYBOX_SHARE'			 => '分享图像',
	'FANCYBOX_ROTATECCW'		 => '逆时针旋转',
	'FANCYBOX_ROTATECW'			 => '顺时针旋转',
	'FANCYBOX_ITERATEZOOM'		 => '切换缩放级别',
	'FANCYBOX_TOGGLE1TO1'		 => '切换缩放级别',
	'FANCYBOX_TOGGLEFS'			 => '切换全屏',
	'FANCYBOX_ZOOMIN'			 => '放大',
	'FANCYBOX_ZOOMOUT'			 => '缩小',
]);