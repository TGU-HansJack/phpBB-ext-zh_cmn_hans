<?php
/**
 * [简体中文 [zh_cmn_hans]]
 * @package cBB Attachments
 * @version 1.0.1 01/07/2024
 *
 * @copyright (c) 2024 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// DO NOT CHANGE
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'DOWNLOAD'			=> '下载',
]);
