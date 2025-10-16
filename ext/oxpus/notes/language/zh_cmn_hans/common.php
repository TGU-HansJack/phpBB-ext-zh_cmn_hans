<?php

/**
*
* @package phpBB Extension - Personal Notes
* @copyright (c) 2014 OXPUS - www.oxpus.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/*
* [ chinese ] language file
*/

/**
* DO NOT CHANGE
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
	'ACP_NOTES'				=> '配置便笺',
	'ACP_NOTES_SETTINGS'	=> '每个用户的最大便笺数量',
	'UCP_NOTES'				=> '便笺',
	'UCP_NOTES_CONFIG'		=> '设置',

	'NOTES'				=> '便笺',
	'POPUP_NOTES'		=> '以弹出窗口形式显示个人便笺',
	'SLIDE_NOTES'		=> '以标题列表形式打开便笺，点击标题显示内容',
	'FILTER_NOTES'		=> '<strong>过滤模式</strong><br />再次按下搜索按钮或更改排序方法以显示所有便笺。',
	'NOTES_MEM'			=> '记住便笺',
	'NOTES_MEM_TIME'	=> '提醒时间',
	'NOTES_MEMTEXT'		=> '<strong>您输入了带提醒的便笺。</strong><br />%s点击这里列出这些便笺。%s<br />（点击后将移除提醒）',
	'NO_NOTES'			=> '您目前没有便笺',

	'NOTES_CONFIG_SUCCESSFULL'	=> '便笺设置保存成功。',
	'NOTES_LOG_CONFIG'			=> '更改每个用户的便笺数量',
]);