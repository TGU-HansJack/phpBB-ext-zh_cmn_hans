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
// ’ « » “ ” …
//

$lang = array_merge($lang, [
	// Viewing posts
	'PRIMEPOSTREVISIONS_VIEW'				=> '查看帖子历史',	// Text for the link to view the revision history
	'PRIMEPOSTREVISIONS_NO_POST_REV'		=> '不保存帖子历史',	// Text for the checkbox to not save the revision history

	// Viewing revisions
	'PRIMEPOSTREVISIONS_VIEWING'			=> '查看帖子历史',
	'PRIMEPOSTREVISIONS_VIEWING_EXPLAIN'	=> '此页面显示帖子的所有版本，从最新版本开始。',
	'PRIMEPOSTREVISIONS_TITLE'				=> '查看帖子历史',
	'PRIMEPOSTREVISIONS_FIRST'				=> '原始帖子',
	'PRIMEPOSTREVISIONS_FINAL'				=> '当前帖子',
	'PRIMEPOSTREVISIONS_COUNT'				=> '修订版本 %d',
	'PRIMEPOSTREVISIONS_EDIT_BY'			=> '编辑者',
	'PRIMEPOSTREVISIONS_NO_SUBJECT'			=> '[无标题]',
	'PRIMEPOSTREVISIONS_COMPARE'			=> '比较',
	'PRIMEPOSTREVISIONS_VIEW_DENIED'		=> '您没有查看这些帖子修订版本所需的权限。',
	'PRIMEPOSTREVISIONS_COMPARISON'			=> '对比',
	'PRIMEPOSTREVISIONS_DELETE_POST_NOTICE'	=> '注意：无法在此处删除帖子的当前版本。任何尝试这样做的操作将被忽略。',

	// Compare selected revisions
	'PRIMEPOSTREVISIONS_COMPARING'			=> '比较帖子历史',
	'PRIMEPOSTREVISIONS_COMPARING_EXPLAIN'	=> '此页面显示帖子版本之间的比较。',
	'PRIMEPOSTREVISIONS_COMPARES'			=> '比较选定的修订版本',

	// Delete a revision
	'PRIMEPOSTREVISIONS_DELETE'				=> '删除修订版本',
	'PRIMEPOSTREVISIONS_DELETE_CONFIRM'		=> '您确定要删除此修订版本吗？',
	'PRIMEPOSTREVISIONS_DELETE_DENIED'		=> '您没有删除此修订版本所需的权限。',
	'PRIMEPOSTREVISIONS_DELETE_FAILED'		=> '尝试删除修订版本时发生错误。',
	'PRIMEPOSTREVISIONS_DELETE_SUCCESS'		=> '修订版本已成功删除。',
	'PRIMEPOSTREVISIONS_DELETE_INVALID'		=> '未选择要删除的帖子修订版本。',

	// Delete all revisions
	'PRIMEPOSTREVISIONS_DELETES'			=> '删除选定的修订版本',
	'PRIMEPOSTREVISIONS_DELETES_CONFIRM'	=> '您确定要删除这些修订版本吗？',
	'PRIMEPOSTREVISIONS_DELETES_DENIED'		=> '您没有删除这些修订版本所需的权限。',
	'PRIMEPOSTREVISIONS_DELETES_FAILED'		=> '尝试删除这些修订版本时发生错误。',
	'PRIMEPOSTREVISIONS_DELETES_SUCCESS'	=> '修订版本已成功删除。',
	'PRIMEPOSTREVISIONS_DELETES_INVALID'	=> '未选择要删除的帖子修订版本。',

	// Restore a revision
	'PRIMEPOSTREVISIONS_RESTORE'			=> '恢复修订版本',
	'PRIMEPOSTREVISIONS_RESTORE_CONFIRM'	=> '您确定要恢复此修订版本吗？',
	'PRIMEPOSTREVISIONS_RESTORE_DENIED'		=> '您没有恢复此修订版本所需的权限。',
	'PRIMEPOSTREVISIONS_RESTORE_FAILED'		=> '尝试恢复修订版本时发生错误。',
	'PRIMEPOSTREVISIONS_RESTORE_SUCCESS'	=> '帖子已成功恢复。',
]);