<?php
/**
 *
 * Slideshow Management. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021 Huynh Buu Tam <https://www.tamit.net>
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
	'ACP_TAMIT_SLIDESHOW_TITLE'			=> '幻灯片管理',
	'ACP_MANAGE_SLIDES_TITLE'			=> '管理幻灯片',
	'ACP_SLIDESHOW_SETTINGS_TITLE'		=> '幻灯片设置',

	'ACP_TAMIT_SLIDESHOW_ADD_LOG'		=> '<strong>幻灯片已添加</strong><br />» %s',
	'ACP_TAMIT_SLIDESHOW_EDIT_LOG'		=> '<strong>幻灯片已编辑</strong><br />» %s',
	'ACP_TAMIT_SLIDESHOW_DELETE_LOG'	=> '<strong>幻灯片已删除</strong><br />» %s',
	'ACP_TAMIT_SLIDESHOW_SETTINGS_LOG'	=> '<strong>幻灯片管理设置已更新</strong><br />» %s'
));