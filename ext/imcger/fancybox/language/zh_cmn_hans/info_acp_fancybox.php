<?php
/**
 *
 * Implements the image viewer Fancybox in phpBB.
 * An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Thorsten Ahlers
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_FANCYBOX_TITLE'		 => 'Lightbox Fancybox',
	'ACP_FANCYBOX_SETTINGS'		 => '设置',
	'ACP_FANCYBOX_SETTING_SAVED' => 'Fancybox设置已成功保存。',

	'IMCGER_REQUIRE_PHPBB' => '此扩展需要phpBB版本大于或等于%1$s且小于%2$s。您的版本是%3$s。',
	'IMCGER_REQUIRE_PHP'   => '此扩展需要php版本大于或等于%1$s且小于%2$s。您的版本是%3$s。',
]);