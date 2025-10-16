<?php
/**
*
* @package Board3 Portal v2.3 - Poll
* @copyright (c) 2023 Board3 Group ( www.board3.de )
* @license GNU General Public License, version 2 (GPL-2.0-only)
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
	'PORTAL_POLL'			=> '投票',
	'LATEST_POLLS'			=> '最新投票',
	'NO_OPTIONS'			=> '此投票没有可用选项。',
	'NO_POLL'				=> '没有可用投票',
	'RETURN_PORTAL'			=> '%s返回门户%s',

	// ACP
	'ACP_PORTAL_POLLS_SETTINGS'			=> '投票设置',
	'ACP_PORTAL_POLLS_SETTINGS_EXP'	=> '您可以在此自定义投票模块。',
	'PORTAL_POLL_TOPIC_ID'				=> '投票版块',
	'PORTAL_POLL_TOPIC_ID_EXP'		=> '从中显示投票的版块。如果"排除版块"设置为"是"，请选择要排除的版块。<br />如果"排除版块"设置为"否"，请选择要显示的版块。<br />通过按住<samp>CTRL</samp>键并点击可以选择/取消选择多个版块。',
	'PORTAL_POLL_EXCLUDE_ID'			=> '排除版块',
	'PORTAL_POLL_EXCLUDE_ID_EXP'	=> '选择"是"如果您想从投票模块中排除所选版块，选择"否"如果您只想在投票模块中看到所选版块的投票。',
	'PORTAL_POLL_LIMIT'					=> '投票显示限制',
	'PORTAL_POLL_LIMIT_EXP'			=> '您希望在门户页面上显示的投票数量。',
	'PORTAL_POLL_ALLOW_VOTE'			=> '允许投票',
	'PORTAL_POLL_ALLOW_VOTE_EXP'	=> '允许具有所需权限的用户从门户页面进行投票。',
	'PORTAL_POLL_HIDE'					=> '隐藏过期投票？',
));