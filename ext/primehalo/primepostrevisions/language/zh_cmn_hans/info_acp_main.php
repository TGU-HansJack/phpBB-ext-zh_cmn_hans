<?php
/**
*
* Prime Post Revisions extension for the phpBB Forum Software package.
*
* @copyright (c) 2018 Ken F. Innes IV <https://www.absoluteanime.com>
* @license GNU General Public License, version 2 (GPL-2.0)
* @translated by 灵码 <https://lingma.io>
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
	$lang = [];
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'ACP_PRIMEPOSTREVISIONS_TITLE'			=> '帖子修订历史',
	'ACP_PRIMEPOSTREVISIONS_SETTINGS'		=> '扩展设置',
	'ACP_PRIMEPOSTREVISIONS_BASIC_SETTINGS'	=> '常规设置',

	'ACP_PRIMEPOSTREVISIONS_ENABLE_GENERAL'				=> '启用帖子修订历史',
	'ACP_PRIMEPOSTREVISIONS_ENABLE_GENERAL_EXPLAIN'		=> '启用保存帖子修订历史的功能。必须在每个论坛基础上设置存储修订历史。禁用此功能不会删除现有的帖子修订历史，只会阻止保存新的修订历史。',

	'ACP_PRIMEPOSTREVISIONS_ENABLE_AUTOPRUNE'			=> '启用自动清理',
	'ACP_PRIMEPOSTREVISIONS_ENABLE_AUTOPRUNE_EXPLAIN'	=> '启用自动清理修订历史的功能。必须在每个论坛基础上设置清理频率。',

	'ACP_PRIMEPOSTREVISIONS_FORUM_SETTINGS'				=> '论坛设置',
	'ACP_PRIMEPOSTREVISIONS_FORUM_SETTINGS_EXPLAIN'		=> '保留所有帖子编辑的修订历史。自动清理将自动删除超过指定天数的修订历史。设置为0以禁用。',
	'ACP_PRIMEPOSTREVISIONS_FORUM_SETTINGS_AUTOPRUNE'	=> '自动清理',
	'ACP_PRIMEPOSTREVISIONS_FORUM_NAME'					=> '论坛名称',
	'ACP_PRIMEPOSTREVISIONS_FORUM_ENABLE'				=> '启用',

	'ACP_PRIMEPOSTREVISIONS_SETTINGS_SAVED'				=> '帖子修订历史设置已成功保存！',
	'ACP_PRIMEPOSTREVISIONS_SETTINGS_LOG'				=> '<strong>修改了帖子修订历史设置</strong>',

	// Forum Settings
	'ACP_PRIMEPOSTREVISIONS_ENABLE'						=> '保存帖子修订历史',
	'ACP_PRIMEPOSTREVISIONS_ENABLE_EXPLAIN'				=> '保留所有帖子编辑的修订历史。',

	'ACP_PRIMEPOSTREVISIONS_AUTOPRUNE'					=> '自动清理修订历史',
	'ACP_PRIMEPOSTREVISIONS_AUTOPRUNE_EXPLAIN'			=> '自动删除超过指定天数的帖子修订历史。设置为0以禁用。',

	// Cron Log
	'LOG_PRIMEPOSTREVISIONS_AUTOPRUNE'					=> '<strong>自动清理帖子修订历史</strong><br />» 已删除修订历史：%d » %s',
]);