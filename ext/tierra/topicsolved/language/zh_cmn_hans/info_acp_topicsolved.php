<?php
/**
 * This file is part of the phpBB Topic Solved extension package.
 *
 * @copyright (c) Bryan Petty
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * @package tierra/topicsolved/language
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
	'ALLOW_SOLVE'                => '允许将主题标记为已解决',
	'ALLOW_SOLVE_EXPLAIN'        => '允许主题发起者或版主将主题设置为已解决。版主可以在两个选项中都解决主题。',
	'ALLOW_UNSOLVE'              => '允许重新打开主题',
	'ALLOW_UNSOLVE_EXPLAIN'      => '允许用户或版主将主题重新设置为未解决。版主可以在两个选项中都将主题设置为未解决。',
	'LOCK_SOLVED'                => '锁定已解决主题',
	'LOCK_SOLVED_EXPLAIN'        => '请注意，只有版主可以重新打开锁定的主题。',
	'TOPIC_SOLVED_SETTINGS'      => '主题解决设置',
	'FORUM_SOLVE_TEXT'           => '选择文本而不是已解决图像',
	'FORUM_SOLVE_TEXT_EXPLAIN'   => '您可以使用一些文本而不是精美的主题已解决图像。例如 [已解决] 或 [已售出] 或其他内容。留空以使用主题已解决图像。',
	'FORUM_SOLVE_COLOUR'         => '文本颜色',
	'FORUM_SOLVE_COLOUR_EXPLAIN' => '为文本选择一种颜色。留空以使用默认颜色。',
	'YES_MOD'                    => '是，版主',

	'IMG_ICON_TOPIC_SOLVED_HEAD'    => '主题已解决',
	'IMG_ICON_TOPIC_SOLVED_LIST'    => '主题已解决',
	'IMG_ICON_TOPIC_SOLVED_POST'    => '主题已解决',
	'IMG_ICON_TOPIC_SOLVED_SET'     => '接受此答案',
	'IMG_ICON_TOPIC_SOLVED_UNSET'   => '将主题标记为未解决',
));