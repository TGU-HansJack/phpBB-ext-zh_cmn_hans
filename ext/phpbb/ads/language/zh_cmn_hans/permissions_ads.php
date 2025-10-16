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
	'ACL_U_PHPBB_ADS' => '可以查看自己的广告管理统计数据',
	'ACL_A_PHPBB_ADS_M' => '可以管理phpBB广告',
	'ACL_A_PHPBB_ADS_S' => '可以管理phpBB广告设置',
));