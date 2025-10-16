<?php

/**
 *
 * AI Labs extension
 *
 * @copyright (c) 2023, privet.fun, https://privet.fun
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge($lang, [
	'AILABS_MJ_BUTTONS'					=> '通过引用支持的操作之一进行回复 [size=60][url=https://docs.midjourney.com/docs/quick-start#8-upscale-or-create-variations]1[/url] [url=https://docs.midjourney.com/docs/quick-start#9-enhance-or-modify-your-image]2[/url] [url=https://docs.midjourney.com/docs/zoom-out#custom-zoom]3[/url] [url=https://docs.midjourney.com/docs/seeds]4[/url][/size]: ',
	'AILABS_QUOTE_BUTTONS'				=> '通过引用支持的操作之一进行回复: ',
	'AILABS_MJ_BUTTON_ALREADY_USED'		=> '操作 %1s 已经在 [url=%2$s?p=%3$d#p%3$d]执行[/url]',
	'AILABS_ERROR_CHECK_LOGS'			=> '[color=#FF0000]错误。请检查日志。[/color]',
	'AILABS_ERROR_UNABLE_DOWNLOAD_URL'	=> '无法下载 ',
	'AILABS_NO_PROMPT'					=> '缺少提示。',
	'AILABS_ERROR_PROVIDE_URL' 			=> '请附加图像或提供图像URL以进行分析。',
	'AILABS_ERROR_PROVIDE_URL_2x'		=> '请附加图像或提供源图像和目标面部交换图像的图像URL。',
	'AILABS_ERROR'						=> '[color=#FF0000]%1s[/color]',
	'AILABS_POSTS_DISCARDED'  			=> '，从[url=%1$s?p=%2$d#p%2$d]此帖子[/url]开始的帖子被丢弃',
	'AILABS_DISCARDED_INFO' 			=> '[size=75][url=%1$s?p=%2$d#p%2$d]开始[/url]一段包含%3$d个帖子的对话%4$s（使用了%5$d个标记，共%6$d个）[/size]',
	'AILABS_THINKING' 					=> '思考中',
	'AILABS_REPLYING' 					=> '回复中…',
	'AILABS_REPLIED' 					=> '已回复 ↓',
	'AILABS_UNABLE_TO_REPLY' 			=> '无法回复',
	'AILABS_QUERY' 						=> '查询中',
	'L_AILABS_AI'						=> 'AI',
	'AILABS_SETTINGS_OVERRIDE'			=> '[size=75]%1$s[/size]'
]);