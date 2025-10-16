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
	'SEARCH_UNSOLVED' => '查看未解决主题',
	'SEARCH_YOUR_UNSOLVED' => '查看您的未解决主题',
	'SEARCH_SOLVED' => '仅搜索已解决主题',
	'TOPIC_SOLVED' => '主题已解决',
	'SET_TOPIC_SOLVED' => '接受此答案',
	'SET_TOPIC_NOT_SOLVED' => '将主题设置为未解决',
	'BAD_METHOD_CALL' => '传递给方法 `%1$s` 的参数无效。',
	'FORBIDDEN_MARK_SOLVED' => '您无权将此主题标记为已解决或未解决。',
	'TOPIC_ALREADY_SOLVED' => '主题已标记为已解决。',
	'TOPIC_ALREADY_UNSOLVED' => '主题已标记为未解决。',
));