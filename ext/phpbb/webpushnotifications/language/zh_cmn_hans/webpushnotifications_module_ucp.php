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
	'NOTIFICATION_METHOD_PHPBB_WPN_WEBPUSH'	=> 'Web推送',
	'NOTIFY_WEBPUSH_NOTIFICATIONS'	=> 'Web推送通知',
	'NOTIFY_WEBPUSH_DISABLE'		=> '禁用推送通知',
	'NOTIFY_WEBPUSH_ENABLE'			=> '启用推送通知',
	'NOTIFY_WEBPUSH_ENABLE_SLIDER'	=> '启用推送通知',
	'NOTIFY_WEBPUSH_ENABLE_EXPLAIN'	=> '启用推送通知将仅在此设备上激活。您可以随时通过浏览器设置或点击上面的按钮关闭通知。此外，如果未选择以下任何Web推送通知类型，您将不会收到任何Web推送通知。',
	'NOTIFY_WEBPUSH_SUBSCRIBE'		=> '启用以订阅',
	'NOTIFY_WEBPUSH_UNSUBSCRIBE'	=> '禁用以取消订阅',
	'NOTIFY_WEBPUSH_DROPDOWN_TITLE'	=> '访问通知设置以设置您首选的推送通知。',
	'NOTIFY_WEBPUSH_DENIED'			=> '您已拒绝来自此站点的通知。要启用推送通知，请在浏览器设置中允许来自此站点的通知。',
	'NOTIFY_WEBPUSH_DISABLED'		=> '不支持推送通知',
]);