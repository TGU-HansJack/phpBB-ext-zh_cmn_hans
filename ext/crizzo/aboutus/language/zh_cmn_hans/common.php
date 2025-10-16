<?php
/**
*
* About us extension for the phpBB Forum Software package.
* Simplified Chinese
*
* @copyright (c) 2014-2020 Crizzo <https://www.crizzo.de>
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
// ’ » " " …

$lang = array_merge($lang, array(
	'ABOUTUS'						=> '关于我们',
	'ABOUTUS_SETTINGS'				=> '关于我们设置',
	'ABOUTUS_UPDATED'				=> '关于我们已成功更新。',
	'ABOUTUS_AND'					=> '和',

	'ACP_ABOUTUS_ENABLE'			=> '启用关于我们',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> '如果“关于我们”页面被禁用，您的论坛将在页脚中不显示“关于我们”页面的链接。但您仍然可以通过网址“app.php/aboutus”访问“关于我们”页面。',
	'ACP_ABOUTUS_INFO'				=> '关于我们文本',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> '您可以编辑显示在“关于我们”页面上的文本。',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> '关于我们预览',
	'ACP_ABOUTUS_SETTINGS'			=> '关于我们设置',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> '在这里您可以定义“关于我们”页面的文本，并启用或禁用“关于我们”页面。',

	'ACP_TERMS_OF_USE_ENABLE' 			=> '显示使用条款',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> '在“关于我们”页面上显示使用条款链接。',
	'ACP_PRIVACY_ENABLE' 				=> '显示隐私政策',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> '在“关于我们”页面上显示隐私政策链接。',

	'ACP_META_NOINDEX_ENABLE'			=> 'Meta noindex',
	'ACP_META_NOINDEX_ENABLE_EXPLAIN'	=> '告诉搜索引擎机器人不要索引“关于我们”页面。此选项不会阻止机器人索引“关于我们”页面！',

	'DESCRIPTION_PRIVACY'			=> '您可以在这里查看隐私政策：',
	'DESCRIPTION_TERMS_OF_USE'		=> '您可以在这里查看使用条款：',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> '您可以在这里查看使用条款和隐私政策：',

	'VIEWONLINE_ABOUTUS'	=> '正在查看关于我们',
));