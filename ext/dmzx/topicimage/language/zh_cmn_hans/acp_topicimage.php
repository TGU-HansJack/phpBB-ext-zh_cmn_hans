<?php
/**
 *
 * Topic Image. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, dmzx, https://www.dmzx-web.net
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
	'ACP_DMZX_TOPICIMAGE_ENABLE'					=> '启用',
	'ACP_DMZX_TOPICIMAGE_SIZE'						=> '设置尺寸',
	'ACP_DMZX_TOPICIMAGE_SIZE_EXPLAIN'				=> '设置缩略图尺寸。',
	'ACP_DMZX_TOPICIMAGE_COPYRIGHT'					=> '版权',
	'ACP_DMZX_TOPICIMAGE_COPYRIGHT_EXPLAIN'			=> '为图片添加版权信息。',
	'ACP_DMZX_TOPICIMAGE_PLACE'						=> '选择显示位置',
	'ACP_DMZX_TOPICIMAGE_PLACE_EXPLAIN'				=> '设置在论坛首页顶部或底部显示。',
	'ACP_DMZX_TOPICIMAGE_TOP_OF_FORUM'				=> '首页顶部',
	'ACP_DMZX_TOPICIMAGE_BOTTOM_OF_FORUM'			=> '首页底部',
	'ACP_DMZX_TOPICIMAGE_EFFECT'					=> '设置效果',
	'ACP_DMZX_TOPICIMAGE_EFFECT_EXPLAIN'			=> '在此选择效果。',
	'ACP_DMZX_TOPICIMAGE_EFFECT_LINEAR'				=> '线性',
	'ACP_DMZX_TOPICIMAGE_EFFECT_SWING'				=> '摆动',
	'ACP_DMZX_TOPICIMAGE_EFFECT_QUADRATIC'			=> '二次方',
	'ACP_DMZX_TOPICIMAGE_EFFECT_CUBIC'				=> '立方',
	'ACP_DMZX_TOPICIMAGE_EFFECT_ELASTIC'			=> '弹性',
	'ACP_DMZX_TOPICIMAGE_DIRECTION'					=> '设置方向',
	'ACP_DMZX_TOPICIMAGE_DIRECTION_EXPLAIN'			=> '设置图片滚动方向。',
	'ACP_DMZX_TOPICIMAGE_EFFECT_LEFT'				=> '向左',
	'ACP_DMZX_TOPICIMAGE_EFFECT_RIGHT'				=> '向右',
	'ACP_DMZX_TOPICIMAGE_ITEMS'						=> '项目数量',
	'ACP_DMZX_TOPICIMAGE_ITEMS_EXPLAIN'				=> '要滚动的项目数量。',
	'ACP_DMZX_TOPICIMAGE_TIMER'						=> '设置计时器效果',
	'ACP_DMZX_TOPICIMAGE_TIMER_EXPLAIN'				=> '以毫秒为单位的计时器。<br>从500到5000毫秒。',
	'ACP_DMZX_TOPICIMAGE_IMG_FOLDER'				=> '目录',
	'ACP_DMZX_TOPICIMAGE_IMG_FOLDER_EXPLAIN'		=> '设置目录名称。<br>所有图片将存储在images文件夹中。',
	'ACP_DMZX_TOPICIMAGE_INCLUDE'					=> '包含版块',
	'ACP_DMZX_TOPICIMAGE_INCLUDE_EXPLAIN'			=> '在此处选择将用于获取图片的版块。<br>按住<samp>CTRL</samp>（或Mac上的<samp>&#8984;CMD</samp>）并点击可以选择多个版块。',
	'ACP_DMZX_TOPICIMAGE_CLEAR_ALL'					=> '删除所有图片',
	'ACP_DMZX_TOPICIMAGE_CLEAR_ALL_EXPLAIN'			=> '删除<b>%s</b>文件夹中的所有图片。',
	'ACP_DMZX_TOPICIMAGE_CLEAR_ALL_EMPTY'			=> '所有图片已被删除。',
	'ACP_DMZX_TOPICIMAGE_GRAB'						=> '抓取图片',
	'ACP_DMZX_TOPICIMAGE_GRAB_EXPLAIN'				=> '从包含的版块中抓取所有图片。<br>必须首先设置包含的版块。',
	'ACP_DMZX_TOPICIMAGE_AMOUNT'					=> '设置数量',
	'ACP_DMZX_TOPICIMAGE_AMOUNT_EXPLAIN'			=> '设置需要搜索的最后主题数量。<br>从1到500个主题。',
	'ACP_DMZX_TOPICIMAGE_TIME_ENABLE'				=> '启用清理',
	'ACP_DMZX_TOPICIMAGE_TIME_ENABLE_EXPLAIN'		=> '为图片启用清理功能。',
	'ACP_DMZX_TOPICIMAGE_PRUNE_TIME'				=> '设置清理时间',
	'ACP_DMZX_TOPICIMAGE_TIME_EXPLAIN'				=> '设置以小时为单位的清理时间。<br>所有图片将被删除并重新抓取。',
	'ACP_DMZX_TOPICIMAGE_PRUNE_HOURS'				=> '小时',
	'ACP_DMZX_TOPICIMAGE_GRAB_NO_FORUM_SELECTED'	=> '<strong>未选择版块。</strong>',
	'ACP_DMZX_TOPICIMAGE_CLEAR_ALL_SUCCESS'			=> '已删除所有图片。',
	'ACP_DMZX_TOPICIMAGE_CLEAR_ALL_ERROR'			=> '错误，无法找到文件夹。',
	'ACP_DMZX_TOPICIMAGE_GRAB_IMAGES'				=> '<strong>版块已检查</strong><br>已创建或需要检查的缩略图如下<br>%s',
	'ACP_DMZX_TOPICIMAGE_GRAB_NOTHING'				=> '<strong>未发现新图片。</strong>',
	'ACP_TOPICIMAGE_SETTING_SAVED'					=> '设置已成功保存！',
	'ACP_DMZX_TOPICIMAGE_CONFIRM_DELETE'			=> '确认删除',
	'ACP_DMZX_TOPICIMAGE_WIDTH'						=> '设置宽度',
	'ACP_DMZX_TOPICIMAGE_WIDTH_EXPLAIN'				=> '设置缩略图宽度。',
	'ACP_DMZX_TOPICIMAGE_SHOW_TITLE'				=> '在图片下方显示标题',
	'ACP_DMZX_TOPICIMAGE_SHOW_TITLE_EXPLAIN'		=> '在图片下方显示标题，将截取前20个字符。',
	'ACP_DMZX_TOPICIMAGE_COLOUR_TITLE'				=> '设置标题颜色',
	'ACP_DMZX_TOPICIMAGE_COLOUR_TITLE_EXPLAIN'		=> '设置图片下方标题的颜色。',
]);