<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Steve Guidetti, https://github.com/stevotvr
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'UCP_FLAIR'			=> '管理资料徽章',
	'UCP_FLAIR_EXPLAIN'	=> '您可以在这里管理您的资料徽章。<ul><li>点击<i class="fa fa-star"></i>/<i class="fa fa-star-o"></i>按钮收藏/取消收藏项目。收藏的项目会首先显示在您的资料中。</li><li>点击<b>&times;</b>按钮删除项目。某些项目可能无法使用此选项。</li><li><b>可用徽章</b>面板列出您可以添加到自己资料中的项目。</li></ul>',

	'UCP_USER_FLAIR'			=> '您的徽章',
	'UCP_FLAIR_AVAILABLE'		=> '可用徽章',
	'UCP_FLAIR_NO_FLAIR'		=> '您没有任何徽章',
	'UCP_FLAIR_NO_AVAILABLE'	=> '无可用徽章',
	'UCP_FLAIR_ADD'				=> '添加"%s"',
	'UCP_FLAIR_REMOVE'			=> '删除"%s"',
	'UCP_FLAIR_FAV'				=> '将"%s"添加到收藏',
	'UCP_FLAIR_UNFAV'			=> '从收藏中删除"%s"',
	'UCP_FLAIR_REMOVE_CONFIRM'	=> '您确定要删除此项吗？',

	'UCP_FLAIR_ADD_BUTTON'	=> '添加到资料',
));