<?php
/**
 *
 * phpBB Browser Push Notifications. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023, phpBB Limited <https://www.phpbb.com>
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
	$lang = [];
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

$lang = array_merge($lang, [
	'ACP_WEBPUSH_EXT_SETTINGS'			=> 'Web推送设置',
	'ACP_WEBPUSH_REMOVE_WARNING'		=> 'Web推送通知现已内置到phpBB中',
	'ACP_WEBPUSH_REMOVE_NOTICE'			=> '扩展"phpBB浏览器推送通知"不再需要，应卸载并删除。<br>卸载扩展时，与扩展相关的所有设置和用户偏好将迁移到phpBB内置的推送通知中。',
	'LOG_CONFIG_WEBPUSH'				=> '<strong>已更改Web推送设置</strong>',
	'LOG_WEBPUSH_MESSAGE_FAIL'			=> '<strong>无法发送Web推送消息：</strong><br>» %s',
	'LOG_WEBPUSH_SUBSCRIPTION_REMOVED'	=> '<strong>已移除Web推送订阅：</strong><br>» %s',
	'LOG_WEBPUSH_ICON_DIR_FAIL'			=> '<strong>Web推送通知无法在phpBB图像目录中迁移以下项目：</strong><br>» %1$s » %2$s',
	'LOG_WEBPUSH_ICON_DIR_SUCCESS'		=> '<strong>Web推送通知已添加以下目录：</strong><br>» <samp>%s</samp>',
	'LOG_WEBPUSH_ICON_COPY_SUCCESS'		=> '<strong>Web推送通知已将现有的PWA触摸图标复制到：</strong><br>» <samp>%s</samp>',
]);