<?php
/**
 *
 * Thanks For Posts.
 * Adds the ability to thank the author and to use per posts/topics/forum rating system based on the count of thanks.
 * An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, rxu, https://www.phpbbguru.net
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
	'CLEAR_LIST_THANKS'			=> '清空感谢列表',
	'CLEAR_LIST_THANKS_CONFIRM'	=> '您真的要清空用户的感谢列表吗？',
	'CLEAR_LIST_THANKS_GIVE'	=> '已清空用户发出的感谢列表。',
	'CLEAR_LIST_THANKS_POST'	=> '已清空帖子中的感谢列表。',
	'CLEAR_LIST_THANKS_RECEIVE'	=> '已清空用户收到的感谢列表。',

	'DISABLE_REMOVE_THANKS'		=> '管理员已禁用删除感谢功能',

	'GIVEN'						=> '已&nbsp;感谢',
	'GLOBAL_INCORRECT_THANKS'	=> '您不能对没有特定版块引用的全局公告表示感谢。',
	'GRATITUDES'				=> '感谢列表',

	'INCORRECT_THANKS'			=> '无效的感谢',

	'JUMP_TO_FORUM'				=> '跳转版块',
	'JUMP_TO_TOPIC'				=> '跳转主题',

	'FOR_MESSAGE'				=> ' 给帖子',
	'FURTHER_THANKS'     	    => [
		1 => ' 以及另外1位用户',
		2 => ' 以及另外%d位用户',
	],

	'NO_VIEW_USERS_THANKS'		=> '您无权查看感谢列表。',

	'NOTIFICATION_THANKS_GIVE'	=> [
		1 => '%1$s <strong>感谢</strong>您发布的这个帖子：',
		2 => '%1$s <strong>感谢</strong>您发布的这个帖子：',
	],
	'NOTIFICATION_THANKS_REMOVE'=> [
		1 => '<strong>移除了</strong> %1$s 对帖子的感谢：',
		2 => '<strong>移除了</strong> %1$s 对帖子的感谢：',
	],
	'NOTIFICATION_TYPE_THANKS_GIVE'		=> '有人感谢您的帖子',
	'NOTIFICATION_TYPE_THANKS_REMOVE'	=> '有人移除了对您帖子的感谢',

	'RECEIVED'					=> '被&nbsp;感谢',
	'REMOVE_THANKS'				=> '移除您的感谢：',
	'REMOVE_THANKS_CONFIRM'		=> '您确定要移除您的感谢吗？',
	'REMOVE_THANKS_SHORT'		=> '移除感谢',
	'REPUT'						=> '评级',
	'REPUT_TOPLIST'				=> '感谢排行榜 — %d',
	'RATING_LOGIN_EXPLAIN'		=> '您无权查看排行榜。',
	'RATING_NO_VIEW_TOPLIST'	=> '您无权查看排行榜。',
	'RATING_VIEW_TOPLIST_NO'	=> '排行榜为空或已被管理员禁用',
	'RATING_FORUM'				=> '版块',
	'RATING_POST'				=> '帖子',
	'RATING_TOP_FORUM'			=> '版块评级',
	'RATING_TOP_POST'			=> '帖子评级',
	'RATING_TOP_TOPIC'			=> '主题评级',
	'RATING_TOPIC'				=> '主题',

	'THANK'						=> '次',
	'THANK_FROM'				=> '来自',
	'THANK_TEXT_1'				=> '这些用户感谢作者 ',
	'THANK_TEXT_2'				=> ' 发表的帖子：',
	'THANK_TEXT_2PL'			=> ' 发表的帖子（共 %d）：',
	'THANK_POST'				=> '向帖子作者表示感谢：',
	'THANK_POST_SHORT'			=> '感谢',
	'THANKS'					=> [
		1	=> '%d 次',
		2	=> '%d 次',
	],
	'THANKS_BACK'				=> '返回',
	'THANKS_INFO_GIVE'			=> '您刚刚感谢了这个帖子。',
	'THANKS_INFO_REMOVE'		=> '您刚刚移除了您的感谢。',
	'THANKS_LIST'				=> '查看/关闭列表',
	'THANKS_PM_MES_GIVE'		=> '感谢您发表的帖子',
	'THANKS_PM_MES_REMOVE'		=> '移除了对您帖子的感谢',
	'THANKS_PM_SUBJECT_GIVE'	=> '感谢您的帖子',
	'THANKS_PM_SUBJECT_REMOVE'	=> '移除了对您帖子的感谢',
	'THANKS_USER'				=> '感谢列表',
	'TOPLIST'					=> '帖子排行榜',
]);