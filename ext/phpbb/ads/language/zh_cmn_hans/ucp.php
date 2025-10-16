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
	'AD_NAME'		=> '名称',
	'AD_START_DATE'	=> '开始日期',
	'AD_END_DATE'	=> '结束日期',
	'AD_VIEWS'		=> '浏览量',
	'AD_CLICKS'		=> '点击量',
	'AD_STATUS'		=> '状态',
	'EXPIRED'		=> '已过期',
	'ACTIVE_ADS'	=> '活跃广告',
	'EXPIRED_ADS'	=> '过期广告',
	'NO_ADS'		=> '<strong>您在此论坛上没有任何广告显示。</strong>',

	'PHPBB_ADS_PRIVACY_POLICY' => '
		<br><br>
		<h3>广告</h3>
		"%1$s"可能会显示由第三方网络或服务提供的广告。这些广告可能会使用Cookie、跟踪像素或类似技术来收集您在此网站上的浏览活动信息，在某些情况下还会跨其他网站收集信息。此信息可能用于投放相关广告、衡量广告活动的效果以及定制符合您兴趣的内容。
		<br><br>
		通过此类第三方广告服务收集的任何数据均受相应提供商的隐私和Cookie政策约束。"%1$s"不控制这些第三方的Cookie或数据收集做法。我们建议您查看相关广告提供商的政策，以了解更多关于您的信息如何被处理的详细信息。
	',
));