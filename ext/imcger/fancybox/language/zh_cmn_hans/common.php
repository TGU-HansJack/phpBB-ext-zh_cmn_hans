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
	// Language pack author
	'ACP_IMCGER_LANG_DESC'	  => '简体中文',
	'ACP_IMCGER_LANG_EXT_VER' => '1.3.1',
	'ACP_IMCGER_LANG_AUTHOR'  => 'IMC-Ger',

	// Discription
	'FANCYBOX_TITLE'				=> 'Fancybox',
	'FANCYBOX_TITLE_EXPLAIN'		=> 'Fancybox图像查看器的设置。请注意，Fancybox 3在“开源使用”下遵循GPLv3许可证。商业用途需要“Fancybox商业许可证”。Fancybox 4任何使用都需要许可证。(https://fancyapps.com/fancybox/)',

	// Set version
	'FANCYBOX_VERSION'				=> 'Fancybox版本',
	'FANCYBOX_VERSION_DESC'			=> '选择Fancybox版本。',
	'FANCYBOX_VERSION_NONE'			=> '无可用的Fancybox版本。',
	'FANCYBOX_VERSION'				=> '版本',

	// Style settings
	'FANCYBOX_SETTINGS_STYLE'		=> '样式设置',
	'FANCYBOX_IMAGES_STYLE'			=> '图片边框',
	'FANCYBOX_IMAGES_STYLE_DESC'	=> '图片边框的宽度以"px"为单位指定。如果输入0，则不显示边框。<br>图片边框的颜色以6位十六进制值指定。',

	// Settings
	'FANCYBOX_SETTINGS'				=> '设置',
	'FANCYBOX_SHOW_WITH_LINK'		=> '集成链接',
	'FANCYBOX_SHOW_WITH_LINK_DESC'	=> '如果启用此选项，则以链接形式插入的图像将在fancybox中显示。',

	// Toolbar settings
	'FANCYBOX_SETTINGS_TOOLBAR'					=> '按钮出现在右上角。',
	'FANCYBOX_TOOLBAR_BUTTON_ZOOM'				=> '放大/缩小',
	'FANCYBOX_TOOLBAR_BUTTON_ZOOM_DESC'			=> '调整显示图像的大小。',
	'FANCYBOX_TOOLBAR_BUTTON_ROTATE'			=> '旋转',
	'FANCYBOX_TOOLBAR_BUTTON_ROTATE_DESC'		=> '顺时针或逆时针旋转图像。',
	'FANCYBOX_TOOLBAR_BUTTON_SHARE'				=> '分享',
	'FANCYBOX_TOOLBAR_BUTTON_SHARE_DESC'		=> '可以在Facebook、Twitter或Pinterest上分享显示的图像。',
	'FANCYBOX_TOOLBAR_BUTTON_SLIDESHOW'			=> '开始幻灯片',
	'FANCYBOX_TOOLBAR_BUTTON_SLIDESHOW_DESC'	=> '启动每秒自动更换图片。',
	'FANCYBOX_TOOLBAR_BUTTON_FULLSCREEN'		=> '全屏',
	'FANCYBOX_TOOLBAR_BUTTON_FULLSCREEN_DESC'	=> '切换到全屏模式。',
	'FANCYBOX_TOOLBAR_BUTTON_DOWNLOAD'			=> '下载',
	'FANCYBOX_TOOLBAR_BUTTON_DOWNLOAD_DESC'		=> '下载显示的图像。',
	'FANCYBOX_TOOLBAR_BUTTON_THUMBS'			=> '缩略图',
	'FANCYBOX_TOOLBAR_BUTTON_THUMBS_DESC'		=> '可以在屏幕边缘创建带缩略图的图片库。',

	// Transitional effects
	'FANCYBOX_SETTINGS_EFFECT'					=> '效果设置',
	'FANCYBOX_TRANSITIONEFFECT'					=> '过渡效果',
	'FANCYBOX_TRANSITIONEFFECT_DESC'			=> '幻灯片之间的过渡效果。',
	'FANCYBOX_TRANSITIONEFFECT_FALSE'			=> '无',
	'FANCYBOX_TRANSITIONEFFECT_FADE'			=> '淡入淡出',
	'FANCYBOX_TRANSITIONEFFECT_SLIDE'			=> '滑动',
	'FANCYBOX_TRANSITIONEFFECT_CIRCULAR'		=> '循环',
	'FANCYBOX_TRANSITIONEFFECT_TUBE'			=> '管状',
	'FANCYBOX_TRANSITIONEFFECT_ZOOM-IN-OUT'		=> '放大缩小',
	'FANCYBOX_TRANSITIONEFFECT_ROTATE'			=> '旋转',
	'FANCYBOX_TRANSITIONEFFECT_CROSSFADE'		=> '交叉淡入淡出',
	'FANCYBOX_TRANSITIONEFFECT_CLASSIC'			=> '经典',
	'FANCYBOX_TRANSITIONEFFECT_STRING'			=> '字符串',
]);