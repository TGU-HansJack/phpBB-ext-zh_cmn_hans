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
	'ACP_IDEAS_FORUM_ID'			=> '建议版块',
	'ACP_IDEAS_FORUM_ID_EXPLAIN'	=> '选择将发布建议主题的版块。完成后，点击下方相应按钮应用建议版块设置。',
	'ACP_IDEAS_FORUM_SETUP'			=> '设置建议版块',
	'ACP_IDEAS_FORUM_SETUP_CONFIRM'	=> '您确定要设置建议版块吗？',
	'ACP_IDEAS_FORUM_SETUP_EXPLAIN'	=> '设置建议版块。许多权限将被预配置。此外，自动清理功能将被禁用。注意：您必须先设置建议版块。',
	'ACP_IDEAS_FORUM_SETUP_UPDATED'	=> 'phpBB 建议版块设置已成功更新。',
	'ACP_IDEAS_NO_FORUM'			=> '未选择版块',
	'ACP_IDEAS_SETTINGS_UPDATED'	=> 'phpBB 建议设置已更新。',
	'ACP_IDEAS_UTILITIES'			=> '建议工具',
	'ACP_PHPBB_IDEAS_EXPLAIN'		=> '在这里您可以配置 phpBB 建议扩展。phpBB 建议是 phpBB 的建议中心。它允许用户提出和投票建议，以帮助改进和增强 phpBB。',
));