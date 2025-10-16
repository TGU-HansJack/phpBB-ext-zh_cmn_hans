<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
	'ADBLOCKER_TITLE'	=> '检测到广告拦截器',
	'ADBLOCKER_MESSAGE'	=> [
		1 => '我们的网站通过向访问者显示在线广告来运营。请考虑通过在我们的网站上禁用您的广告拦截器来支持我们。',
		2 => '我们的网站通过向访问者显示在线广告来运营。禁用您的广告拦截器以继续使用我们的网站。',
	],
	'ADVERTISEMENT'		=> '广告',
	'HIDE_AD'			=> '隐藏广告',

	'VISUAL_DEMO'			=> '广告位置的可视化演示处于活动状态',
	'DISABLE_VISUAL_DEMO'	=> '点击禁用可视化演示',
	'DISABLE_VISUAL_DEMO_ERROR'	=> '完成您的请求时出现问题。请尝试再次禁用可视化演示。',

	// Template locations
	'AD_ABOVE_HEADER'				=> '页头上方',
	'AD_ABOVE_HEADER_DESC'			=> '在每个页面的页眉之前显示。',
	'AD_BELOW_HEADER'				=> '页头下方',
	'AD_BELOW_HEADER_DESC'			=> '在每个页面的页眉之后（和导航栏之前）显示。',
	'AD_BEFORE_POSTS'				=> '帖子前',
	'AD_BEFORE_POSTS_DESC'			=> '在主题页面的第一个帖子之前显示。',
	'AD_AFTER_POSTS'				=> '帖子后',
	'AD_AFTER_POSTS_DESC'			=> '在主题页面的最后一个帖子之后显示（如果启用了快速回复，也在其之后显示）。',
	'AD_BEFORE_QUICKREPLY'			=> '快速回复前',
	'AD_BEFORE_QUICKREPLY_DESC'		=> '在主题页面的快速回复编辑器之前显示。',
	'AD_AFTER_QUICKREPLY'			=> '快速回复后',
	'AD_AFTER_QUICKREPLY_DESC'		=> '在主题页面的快速回复编辑器之后显示。',
	'AD_BELOW_FOOTER'				=> '页脚下方',
	'AD_BELOW_FOOTER_DESC'			=> '在每个页面的页脚之后显示。',
	'AD_ABOVE_FOOTER'				=> '页脚上方',
	'AD_ABOVE_FOOTER_DESC'			=> '在每个页面的页脚之前显示。',
	'AD_AFTER_FIRST_POST'			=> '第一个帖子后',
	'AD_AFTER_FIRST_POST_DESC'		=> '在主题页面的第一个帖子之后显示。',
	'AD_AFTER_NOT_FIRST_POST'		=> '除第一个外的每个帖子后',
	'AD_AFTER_NOT_FIRST_POST_DESC'	=> '在主题页面除第一个帖子外的每个帖子之后显示。',
	'AD_BEFORE_PROFILE'				=> '用户资料前',
	'AD_BEFORE_PROFILE_DESC'		=> '在会员资料页面内容之前显示。',
	'AD_AFTER_PROFILE'				=> '用户资料后',
	'AD_AFTER_PROFILE_DESC'			=> '在会员资料页面内容之后显示。',
	'AD_AFTER_HEADER_NAVBAR'		=> '页头导航栏后',
	'AD_AFTER_HEADER_NAVBAR_DESC'	=> '在每个页面的页头导航栏之后显示。',
	'AD_AFTER_FOOTER_NAVBAR'		=> '页脚导航栏后',
	'AD_AFTER_FOOTER_NAVBAR_DESC'	=> '在每个页面的页脚导航栏之后显示。',
	'AD_POP_UP'						=> '弹出窗口',
	'AD_POP_UP_DESC'				=> '当用户访问此论坛时，每天显示一次作为覆盖框。用户需要关闭此框才能继续访问内容。请注意，这种广告对用户来说非常干扰！此位置不支持JavaScript代码。',
	'AD_SLIDE_UP'					=> '向上滑动',
	'AD_SLIDE_UP_DESC'				=> '在每个页面上，当用户滚动到主要内容下方时显示。从底部向上滑动。',
	'AD_SCRIPTS'					=> '脚本',
	'AD_SCRIPTS_DESC'				=> '此位置用于特殊的JavaScript代码，如AdSense自动广告、跟踪代码等。在此处输入的代码将插入到页面的HEAD标签中，不用于广告放置，仅用于辅助脚本。',
));