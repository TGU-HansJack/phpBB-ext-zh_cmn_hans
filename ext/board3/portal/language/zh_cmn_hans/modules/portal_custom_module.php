<?php
/**
*
* @package Board3 Portal v2.3 - Custom
* @copyright (c) 2023 Board3 Group ( www.board3.de )
* @license GNU General Public License, version 2 (GPL-2.0-only)
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
$lang = array_merge($lang, array(
	'PORTAL_CUSTOM'		=> '自定义模块',

	// ACP
	'ACP_PORTAL_CUSTOM_SETTINGS'			=> '自定义模块设置',
	'ACP_PORTAL_CUSTOM_SETTINGS_EXP'		=> '您可以在此编辑自定义模块',
	'TOO_FEW_CHARS'							=> '您输入的代码长度不够。',
	'ACP_PORTAL_CUSTOM_PREVIEW'				=> '预览',
	'ACP_PORTAL_CUSTOM_CODE'				=> '自定义模块代码',
	'ACP_PORTAL_CUSTOM_CODE_EXP'			=> '在此处更改小型自定义模块的代码（HTML 或 BBCode）。',
	'ACP_PORTAL_CUSTOM_PERMISSION'			=> '自定义模块权限',
	'ACP_PORTAL_CUSTOM_PERMISSION_EXP'		=> '选择有权查看自定义模块的组。如果您希望所有用户都能查看自定义模块，请不要选择任何内容。<br />通过按住<samp>CTRL</samp>键并点击可以选择/取消选择多个组。',
	'ACP_PORTAL_CUSTOM_BBCODE'				=> '激活自定义模块的 BBCode',
	'ACP_PORTAL_CUSTOM_BBCODE_EXP'			=> '可以在该框中使用 BBCode。如果未激活 BBCode，将解析 HTML。',
));