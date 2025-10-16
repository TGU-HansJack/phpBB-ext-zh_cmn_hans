<?php
/**
*
* @package phpBB Extension - RH Topic Tags
* @copyright © 2014 Robert Heim
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'RH_TOPICTAGS'						=> '标签',

	'RH_TOPICTAGS_TAGCLOUD'				=> '标签云',

	'RH_TOPICTAGS_ALLOWED_TAGS'			=> '允许字符：',
	'RH_TOPICTAGS_WHITELIST_EXP'		=> '仅允许使用以下标签：',

	'RH_TOPICTAGS_SEARCH_HEADER_OR'		=> '搜索包含以下任一标签的主题：%s',
	'RH_TOPICTAGS_SEARCH_HEADER_AND'	=> '搜索同时包含以下所有标签的主题：%s',
	'RH_TOPICTAGS_SEARCH_IGNORED_TAGS'	=> '以下标签已被忽略，因为它们无效：%s',

	'RH_TOPICTAGS_NO_TOPICS_FOR_NO_TAG'		=> '请至少搜索一个有效标签以在此处显示主题。',
	'RH_TOPICTAGS_NO_TOPICS_FOR_TAG_OR'		=> '没有主题包含以下任一标签：%s',
	'RH_TOPICTAGS_NO_TOPICS_FOR_TAG_AND'	=> '没有主题同时包含以下所有标签：%s',

	'RH_TOPICTAGS_TAGS_INVALID'			=> '以下标签无效：%s',

	'RH_TOPICTAGS_DISPLAYING_TOTAL_ALL'	=> '显示所有标签。',

	'RH_TOPICTAGS_DISPLAYING_TOTAL'	=> array(
		0 => '尚无标签',
		1 => '显示前 %d 个标签。',
		2 => '显示前 %d 个标签。',
	),

	'RH_TOPICTAGS_TAG_SEARCH' => '标签搜索',

	'RH_TOPICTAGS_TAG_SUGGEST_TAG_ROUTE_ERROR' => '未找到"%s"的路由',
));