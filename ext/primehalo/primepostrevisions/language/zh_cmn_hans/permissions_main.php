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
	'ACL_M_PRIMEPOSTREV_VIEW'		=> '可以查看帖子修订历史',
	'ACL_M_PRIMEPOSTREV_DELETE'		=> '可以删除帖子修订历史',
	'ACL_M_PRIMEPOSTREV_RESTORE'	=> '可以恢复帖子修订历史',
	'ACL_F_PRIMEPOSTREV_VIEW'		=> '可以查看自己的帖子修订历史',
	'ACL_F_PRIMEPOSTREV_DELETE'		=> '可以删除自己的帖子修订历史',
	'ACL_F_PRIMEPOSTREV_RESTORE'	=> '可以恢复自己的帖子修订历史',
]);