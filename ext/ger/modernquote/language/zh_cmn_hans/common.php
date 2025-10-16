<?php

/**
 *
 * Modern quotes. An extension for the phpBB Forum Software package.
 * [Chinese]
 *
 * @copyright (c) 2017, Ger, https://github.com/GerB
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
    'MQ_CLEAR'                 => '清除',
    'MQ_MULTI_QUOTE_SELECT'    => '选择多个帖子进行引用',
    'MQ_MULTI_QUOTE_ACTION'    => '回复所选引用',
    'MQ_QUOTE_SELECTION'       => '引用选择',
));