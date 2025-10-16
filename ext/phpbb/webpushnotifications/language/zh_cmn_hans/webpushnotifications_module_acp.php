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
	'ACP_WEBPUSH_SETTINGS_EXPLAIN'	=> '在这里您可以为论坛通知启用Web推送。Web推送是一种用于向用户代理实时传递事件的协议，通常称为推送消息。它与桌面和移动设备上的大多数现代浏览器兼容。用户可以通过订阅并在UCP中启用首选通知来选择在其浏览器中接收Web推送警报。<br><br>要在Apple移动设备上启用推送通知，您的站点需要作为渐进式Web应用程序(PWA)运行。这要求用户将您的站点添加到他们设备的主屏幕。为了改善用户体验，您可以在<strong>论坛设置</strong>下找到额外的PWA设置，在那里您可以配置可选的应用程序名称和应用程序图标，以确定您的站点在用户主屏幕上的显示方式。',
	'WEBPUSH_ENABLE'				=> '启用Web推送',
	'WEBPUSH_ENABLE_EXPLAIN'		=> '允许用户通过Web推送在其浏览器或设备中接收通知。要使用Web推送，您必须输入或生成有效的VAPID识别密钥。',
	'WEBPUSH_GENERATE_VAPID_KEYS'	=> '生成识别密钥',
	'WEBPUSH_VAPID_PUBLIC'			=> '服务器识别公钥',
	'WEBPUSH_VAPID_PUBLIC_EXPLAIN'	=> '自愿应用服务器识别(VAPID)公钥用于验证来自您站点的推送消息。<br><em><strong>注意：</strong>修改VAPID公钥将自动使所有Web推送订阅无效。</em>',
	'WEBPUSH_VAPID_PRIVATE'			=> '服务器识别私钥',
	'WEBPUSH_VAPID_PRIVATE_EXPLAIN'	=> '自愿应用服务器识别(VAPID)私钥用于生成从您站点发送的经过身份验证的推送消息。VAPID私钥<strong>必须</strong>与VAPID公钥形成有效的公钥-私钥对。<br><em><strong>注意：</strong>修改VAPID私钥将自动使所有Web推送订阅无效。</em>',
	'WEBPUSH_METHOD_ENABLED'		=> '默认启用基于用户的Web推送通知',
	'WEBPUSH_METHOD_ENABLED_EXPLAIN'=> '启用此设置后，已启用并允许浏览器通知的用户将自动开始接收通知。他们可以访问UCP通知设置以禁用任何不需要的通知。<br><br>如果禁用此设置，即使用户已启用推送通知，在他们访问UCP通知设置以允许他们希望接收的特定通知之前，他们不会收到任何通知。',
	'WEBPUSH_DROPDOWN_SUBSCRIBE'	=> '在通知下拉菜单中显示Web推送设置',
	'WEBPUSH_DROPDOWN_SUBSCRIBE_EXPLAIN'=> '在通知下拉菜单中显示或隐藏"启用Web推送"切换开关。这允许用户轻松地从论坛的任何页面启用或禁用推送通知。',
	'WEBPUSH_INSECURE_SERVER_ERROR' => '此论坛未使用安全的SSL/HTTPS协议，而这是启用Web推送通知所必需的。或者，可能是服务器环境配置错误。请确保<em>HTTPS</em>和<em>HEADER_CLIENT_PROTO</em>服务器环境变量已正确配置。',
]);