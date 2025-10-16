<?php
/**
 *
 * Lightbox extension for the phpBB Forum Software package.
 * [Chinese Simplified]
 *
 * @copyright (c) 2015 Matt Friedman
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

$lang = array_merge($lang, array(
	'LIGHTBOX_SETTINGS'				=> 'Lightbox图像缩放',
	'LIGHTBOX_MAX_WIDTH'			=> '最大图像宽度',
	'LIGHTBOX_MAX_WIDTH_EXPLAIN'	=> '超过此宽度的图像将被调整大小，并可以使用Lightbox效果放大。将此值设置为0可禁用按宽度调整Lightbox图像大小。',
	'LIGHTBOX_MAX_WIDTH_APPEND'		=> '根据图像附件设置的建议：%spx',
	'LIGHTBOX_MAX_HEIGHT'			=> '最大图像高度',
	'LIGHTBOX_MAX_HEIGHT_EXPLAIN'	=> '超过此高度的图像将被调整大小，并可以使用Lightbox效果放大。将此值设置为0可禁用按高度调整Lightbox图像大小。',
	'LIGHTBOX_ALL_IMAGES'			=> '在Lightbox效果中包含所有图像',
	'LIGHTBOX_ALL_IMAGES_EXPLAIN'	=> '启用此设置后，即使未调整大小，所有发布的图像都可以在Lightbox效果中打开。',
	'LIGHTBOX_GALLERY'				=> '画廊模式',
	'LIGHTBOX_GALLERY_EXPLAIN'		=> '允许使用Lightbox效果在调整大小的图像之间轻松导航。',
	'LIGHTBOX_GALLERY_ALL'			=> '页面上所有调整大小的图像',
	'LIGHTBOX_GALLERY_POSTS'		=> '每个帖子中所有调整大小的图像',
	'LIGHTBOX_SIGNATURES'			=> '调整签名图像大小',
	'LIGHTBOX_SIGNATURES_EXPLAIN'	=> '允许调整签名中使用的图像大小。',
	'LIGHTBOX_IMG_TITLES'			=> '显示图像文件名',
	'LIGHTBOX_IMG_TITLES_EXPLAIN'	=> '图像名称将作为标题显示在Lightbox效果中。',
));