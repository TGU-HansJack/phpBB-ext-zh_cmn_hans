<?php
/**
 *
 * Best Answer extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, kinerity, https://www.layer-3.org/
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ANSWERS'	=> '回答',

	'ENABLE_ANSWER'			=> '启用最佳答案',
	'ENABLE_ANSWER_EXPLAIN'	=> '如果启用，主题发起者（如果被允许）和版主（在允许的情况下）将能够将主题回复标记为最佳答案。',

	'TO_POST'	=> '转到完整帖子',

	'LOG_MARK_ANSWER'	=> '<strong>将帖子标记为最佳答案</strong><br />» %1$s 由 %2$s',
	'LOG_UNMARK_ANSWER'	=> '<strong>取消帖子的最佳答案标记</strong><br />» %1$s 由 %2$s',

	'MARK_ANSWER'			=> '标记答案',
	'MARK_ANSWER_CONFIRM'	=> '您确定要将此帖子标记为最佳答案吗？',

	'TOTAL_ANSWERS'	=> '总回答数',

	'UNMARK_ANSWER'			=> '取消标记答案',
	'UNMARK_ANSWER_CONFIRM'	=> '您确定要取消此帖子作为最佳答案的标记吗？',

	'MARK_ANSWER_NOTIFICATION'			=> '%1$s 将您在主题"%2$s"中的帖子标记为最佳答案。',
	'UNMARK_ANSWER_NOTIFICATION'		=> '%1$s 取消了您在主题"%2$s"中的帖子作为最佳答案的标记。',
	'NOTIFICATION_TYPE_MARK_ANSWER'		=> '有人将您的主题回复标记为最佳答案',
	'NOTIFICATION_TYPE_UNMARK_ANSWER'	=> '有人取消了您的主题回复作为最佳答案的标记',

	'BUTTON_MARK'	=> '标记答案',
	'BUTTON_UNMARK'	=> '取消标记答案',
));