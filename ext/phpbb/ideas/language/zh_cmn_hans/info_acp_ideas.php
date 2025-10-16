<?php
/**
 *
 * Ideas extension for the phpBB Forum Software package.
 * Chinese Simplified Translation by phpBBChina.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
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
	// ACP module
	'ACP_PHPBB_IDEAS'			=> 'phpBB 建议',
	'ACP_PHPBB_IDEAS_SETTINGS'	=> '建议设置',

	// ACP Logs
	'ACP_PHPBB_IDEAS_SETTINGS_LOG'		=> '<strong>phpBB 建议设置已更新</strong>',
	'ACP_PHPBB_IDEAS_FORUM_SETUP_LOG'	=> '<strong>phpBB 建议版块设置已应用</strong>',
));