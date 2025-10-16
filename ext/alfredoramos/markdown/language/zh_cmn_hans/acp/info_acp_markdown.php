<?php

/**
 * Markdown extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2019 Alfredo Ramos
 * @license GPL-2.0-only
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ALLOW_MARKDOWN' => '允许使用 Markdown',
	'ALLOW_POST_MARKDOWN' => '允许在帖子中使用 Markdown',
	'ALLOW_PM_MARKDOWN' => '允许在私人消息中使用 Markdown',
	'ALLOW_SIG_MARKDOWN' => '允许在用户签名中使用 Markdown'
]);