<?php
/**
*
* @package Board3 Portal v2.3 - Attachments
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
	'DOWNLOADS'				=> '下载',
	'NO_ATTACHMENTS'		=> '没有附件',
	'PORTAL_ATTACHMENTS'	=> '附件',

	// ACP
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS'			=> '附件设置',
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS_EXP'	=> '您可以在此自定义附件模块。',
	'PORTAL_ATTACHMENTS_NUMBER'							=> '显示附件的限制数量',
	'PORTAL_ATTACHMENTS_NUMBER_EXP'					=> '0 表示无限',
	'PORTAL_ATTACHMENTS_FORUM_IDS'						=> '附件版面',
	'PORTAL_ATTACHMENTS_FORUM_IDS_EXP'				=> '从中显示附件的版面。如果"排除版面"设置为"是"，请选择要排除的版面。<br />如果"排除版面"设置为"否"，请选择要显示的版面。<br />通过按住<samp>CTRL</samp>键并点击可以选择/取消选择多个版面。',
	'PORTAL_ATTACHMENTS_FORUM_EXCLUDE'					=> '排除版面',
	'PORTAL_ATTACHMENTS_FORUM_EXCLUDE_EXP'			=> '选择"是"如果您想从附件模块中排除所选版面，选择"否"如果您只想在附件模块中看到所选版面的附件。',
	'PORTAL_ATTACHMENTS_MAX_LENGTH'						=> '每个附件的字符限制',
	'PORTAL_ATTACHMENTS_MAX_LENGTH_EXP'				=> '0 表示无限',
	'PORTAL_ATTACHMENTS_FILETYPE' 						=> '文件类型',
	'PORTAL_ATTACHMENTS_FILETYPE_EXP' 				=> '如果"排除文件类型"设置为"是"，请选择要排除的文件类型。<br />如果"排除文件类型"设置为"否"，请选择要显示的文件类型。<br />通过按住<samp>CTRL</samp>键并点击可以选择/取消选择多个文件类型。',
	'PORTAL_ATTACHMENTS_EXCLUDE'						=> '排除文件类型',
	'PORTAL_ATTACHMENTS_EXCLUDE_EXP'				=> '选择"是"如果您想从附件模块中排除所选文件类型，选择"否"如果您只想在附件模块中看到所选文件类型。',
));