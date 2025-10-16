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
	'DISABLE_MARKDOWN' => '禁用 Markdown',
	'MARKDOWN_IS_ON' => '已启用 Markdown',
	'MARKDOWN_IS_OFF' => '已禁用 Markdown',
	'MARKDOWN_IS_ON_EXPLAIN' => '您已启用 Markdown。',
	'MARKDOWN_IS_OFF_EXPLAIN' => '您已禁用 Markdown。',
	'MARKDOWN_DISABLED' => 'Markdown 已禁用',
	'MARKDOWN_POSTING_MESSAGE' => '您可以在您的文章中使用 Markdown 语法。',
	'MARKDOWN_PREVIEW_MESSAGE' => '当您提交时，Markdown 将被转换为标准的 BBCode。'
]);