<?php
/**
 *
 * Slideshow for Header extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019 Picaron
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

$lang = array_merge($lang, array(
		'ACP_SLIDE_WEUNI'					=> '页眉幻灯片',
		'ACP_SLIDE_WEUNI_SETTINGS'			=> '设置',
		'ACP_SLIDE_WEUNI_EXPLAIN'			=> '建议图片最大尺寸: 2570px x 465px。<br>图片存放路径: ./ext/pikaron/slideweuni/images/ 或使用带外部链接的URL (网络上托管的图片)<br>(可选 - 图片随机显示)<br>(可选 - URL字段用于重定向到外部链接)',
		'ACP_SLIDE_WEUNI_VERSION'			=> '扩展版本: ',
		'ACP_SLIDE_WEUNI_IMAGES'			=> '图片数据',
		'L_SLIDE_WEUNI_ACTIVE'				=> '启用幻灯片',
		'L_SLIDE_WEUNI_DELAY'				=> '图片间切换的延迟时间',
		'L_SLIDE_WEUNI_DELAY_EXPLAIN'		=> '(最小值: 1000 毫秒 = 1 秒, 最大值: 20000 毫秒 = 20 秒)',
		'L_UNI_DELAY'						=> '毫秒',
		'L_SLIDE_WEUNI_INTER'				=> '允许用户与图片切换进行交互',
		'L_SLIDE_WEUNI_CONTROLS'			=> '显示控制按钮',
		'L_SLIDE_WEUNI_ALEATORY'			=> '图片随机排序',
		'L_SLIDE_WEUNI_TITLE'				=> '显示标题和描述',
		'L_SLIDE_WEUNI_SEARCH'				=> '在页眉中显示搜索框',
		'L_SLIDE_WEUNI_EFFECT'				=> '效果',
		'L_SLIDE_WEUNI_COLOR_TIT_F'			=> '标题和描述的填充颜色',
		'L_SLIDE_WEUNI_COLOR_TIT_F_EXPLAIN' => '(格式: #ffffff)',
		'L_SLIDE_WEUNI_COLOR_TIT_B'			=> '标题和描述边框的颜色',
		'L_SLIDE_WEUNI_COLOR_TIT_B_EXPLAIN' => '(格式: #000000)',
		'L_SLIDE_WEUNI_COLOR_SELECT'		=> '点击方框选择颜色',
		'L_SLIDE'							=> '滑动',
		'L_FADE'							=> '淡入淡出',
		'L_SLIDE_WEUNI_CANT_IMG'			=> '图片数量',
		'L_SLIDE_WEUNI_CANT_IMG_EXPLAIN'	=> '(最小值: 2 - 最大值: 60)',
		'LOG_CONFIG_SLIDE'					=> '<strong>已编辑页眉幻灯片扩展</strong>',
		'L_SLIDE_WEUNI_NO_IMG'				=> '无法找到编号为',
		'L_SLIDE_WEUNI_NO_IMG_URL'			=> '外部图片不可访问。',
		'L_SLIDE_WEUNI_NO_IMG_RUTE'			=> ' 的图片在路径 ',
		'L_SLIDE_WEUNI_IMG'					=> '第 %s 张图片的完整名称或URL',
		'L_SLIDE_WEUNI_URL'					=> '点击第 %s 张图片时跳转的URL',
));