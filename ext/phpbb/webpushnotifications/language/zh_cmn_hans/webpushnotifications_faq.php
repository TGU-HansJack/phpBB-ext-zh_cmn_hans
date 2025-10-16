<?php
/**
 *
 * phpBB Browser Push Notifications. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2024, phpBB Limited <https://www.phpbb.com>
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
	'HELP_FAQ_WPN'					=> '浏览器Web推送通知',
	'HELP_FAQ_WPN_WHAT_QUESTION'	=> '什么是Web推送通知？',
	'HELP_FAQ_WPN_WHAT_ANSWER'		=> 'Web推送通知通过允许将实时通知直接发送到您的桌面或移动设备来增强phpBB的通知系统，即使您没有主动浏览论坛。这些通知像应用程序提醒一样工作，为私人消息、帖子互动、版主操作等提供即时更新。',
	'HELP_FAQ_WPN_HOW_QUESTION'		=> '如何在我的电脑或移动设备上接收论坛通知提醒？',
	'HELP_FAQ_WPN_HOW_ANSWER'		=> '导航到UCP（用户控制面板）中的"通知选项"，然后点击"启用Web推送通知"。您的浏览器可能会询问是否允许发送通知——请务必允许。如果您仍未收到通知，请检查您设备的系统设置，确保已为您的浏览器启用通知。对于iPhone或iPad等移动设备，您可能需要将论坛站点添加到主屏幕才能使推送通知工作，实际上将其变成独立的Web应用程序。请按照您的移动设备说明为<a href="https://www.xda-developers.com/how-enable-safari-notifications-iphone/" target="_blank">iPhone/iPad</a>或<a href="https://support.google.com/chrome/answer/3220216?hl=en&co=GENIE.Platform%3DAndroid&oco=0" target="_blank">Android</a>启用推送通知。',
	'HELP_FAQ_WPN_SESSION_QUESTION'	=> '如果我已注销，还能收到通知吗？',
	'HELP_FAQ_WPN_SESSION_ANSWER'	=> '是的，即使您已注销，您仍将继续收到通知。',
	'HELP_FAQ_WPN_SUBBING_QUESTION'	=> '为什么"启用推送通知"按钮是禁用的？',
	'HELP_FAQ_WPN_SUBBING_ANSWER'	=> '如果"启用推送通知"按钮可见但无法点击，则您的浏览器或设备可能不支持推送通知。请尝试使用支持此功能的不同浏览器或设备。',
	'HELP_FAQ_WPN_GENERAL_QUESTION'	=> '如果我仍然无法接收通知怎么办？',
	'HELP_FAQ_WPN_GENERAL_ANSWER'	=> '确保在浏览器设置中允许此论坛发送通知。同时，验证您的设备系统设置是否允许来自您的Web浏览器或应用程序的通知。一些浏览器即使在关闭时也能传递通知，而其他浏览器只有在浏览器打开时才能传递。<a href="https://caniuse.com/push-api" target="_blank">查看此表了解浏览器支持信息。</a>最后，如果您使用广告拦截器，请检查其设置以确保未配置为阻止推送通知。',
]);