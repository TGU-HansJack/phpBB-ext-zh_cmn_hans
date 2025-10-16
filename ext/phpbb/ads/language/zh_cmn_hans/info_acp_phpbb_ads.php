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
	'ACP_PHPBB_ADS_TITLE'	=> '广告管理',
	'ACP_MANAGE_ADS_TITLE'		=> '管理广告',
	'ACP_ADS_SETTINGS_TITLE'	=> '设置',

	'ACP_PHPBB_ADS_ADD_LOG'		=> '<strong>广告已添加</strong><br />» %s',
	'ACP_PHPBB_ADS_EDIT_LOG'		=> '<strong>广告已编辑</strong><br />» %s',
	'ACP_PHPBB_ADS_DELETE_LOG'	=> '<strong>广告已删除</strong><br />» %s',
));