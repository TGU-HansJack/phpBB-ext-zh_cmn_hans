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
	'ACL_F_MARKDOWN' => '可以使用 Markdown',
	'ACL_U_POST_MARKDOWN' => '可以使用 Markdown',
	'ACL_U_PM_MARKDOWN' => '可以在私人消息中使用 Markdown',
	'ACL_U_SIG_MARKDOWN' => '可以在签名中使用 Markdown'
]);