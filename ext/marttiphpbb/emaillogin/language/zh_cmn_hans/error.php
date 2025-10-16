<?php

/**
* phpBB Extension - marttiphpbb emaillogin
* @copyright (c) 2018 - 2020 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'MARTTIPHPBB_EMAILLOGIN_ERROR_NO_EMAIL'
		=> '您需要指定一个邮箱地址才能登录。',
	'MARTTIPHPBB_EMAILLOGIN_ERROR_NO_USERNAME_OR_EMAIL'
		=> '您需要指定用户名或邮箱地址才能登录。',
	'MARTTIPHPBB_EMAILLOGIN_ERROR_NO_VALID_EMAIL'
		=> '邮箱地址 %1$s 无效。',
	'MARTTIPHPBB_EMAILLOGIN_LOGIN_ERROR_EMAIL'
		=> '您指定的邮箱地址（%1$s）不正确。
			请检查您的邮箱地址并重试。
			如果问题仍然存在，请联系%2$s论坛管理员%3$s。',
	'MARTTIPHPBB_EMAILLOGIN_ERROR_EMAIL_DUPLICATE'
		=> '邮箱地址 %1$s 不能使用，因为数据库中存在多个相同的邮箱地址。
			请联系%2$s论坛管理员%3$s。',		
]);