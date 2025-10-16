<?php
/**
 *
 * Group Subscription. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Steve Guidetti, https://github.com/stevotvr
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
	'ACP_GROUPSUB_MANAGE_PKGS_TITLE'			=> '管理订阅套餐',
	'ACP_GROUPSUB_MANAGE_PKGS_EXPLAIN'			=> '在这里你可以管理可用的订阅套餐。',
	'ACP_GROUPSUB_NO_PKGS'						=> '没有订阅套餐',
	'ACP_GROUPSUB_PKG_ADD'						=> '创建订阅套餐',
	'ACP_GROUPSUB_PKG_ADD_SUCCESS'				=> '订阅套餐创建成功',
	'ACP_GROUPSUB_PKG_EDIT'						=> '编辑订阅套餐',
	'ACP_GROUPSUB_PKG_EDIT_SUCCESS'				=> '订阅套餐详情保存成功',
	'ACP_GROUPSUB_PKG_DELETE_CONFIRM'			=> '你确定要删除这个订阅套餐吗？',
	'ACP_GROUPSUB_PKG_DELETE_SUCCESS'			=> '套餐删除成功',
	'ACP_GROUPSUB_PKG_DETAILS'					=> '套餐详情',
	'ACP_GROUPSUB_PKG_ENABLE'					=> '启用套餐',
	'ACP_GROUPSUB_PKG_ENABLE_EXPLAIN'			=> '向用户开放此套餐。',
	'ACP_GROUPSUB_PKG_IDENT'					=> '套餐标识符',
	'ACP_GROUPSUB_PKG_IDENT_EXPLAIN'			=> '用于标识套餐的唯一字符串。该值只能包含a-z、0-9、_，并且必须以字母开头。',
	'ACP_GROUPSUB_PKG_NAME'						=> '套餐名称',
	'ACP_GROUPSUB_PKG_DESC'						=> '套餐描述',
	'ACP_GROUPSUB_PKG_GROUPS'					=> '套餐用户组',
	'ACP_GROUPSUB_PKG_GROUPS_EXPLAIN'			=> '选择一个或多个用户组，这些用户组将被授予订阅者访问权限。',
	'ACP_GROUPSUB_PKG_DEFAULT_GROUP'			=> '设置默认用户组',
	'ACP_GROUPSUB_PKG_DEFAULT_GROUP_EXPLAIN'	=> '可选择一个用户组作为订阅者的默认用户组。',
	'ACP_GROUPSUB_PKG_TERM_ADD'					=> '添加条款',
	'ACP_GROUPSUB_PKG_TERMS'					=> '订阅条款',
	'ACP_GROUPSUB_PKG_PRICE'					=> '订阅价格',
	'ACP_GROUPSUB_PKG_PRICE_EXPLAIN'			=> '输入订阅的价格。',
	'ACP_GROUPSUB_PKG_LENGTH'					=> '订阅时长',
	'ACP_GROUPSUB_PKG_LENGTH_EXPLAIN'			=> '输入订阅的时长。输入0表示永久订阅。',

	'ACP_GROUPSUB_NAME'		=> '名称',
	'ACP_GROUPSUB_TERMS'	=> '条款',
	'ACP_GROUPSUB_PRICE'	=> '价格',
	'ACP_GROUPSUB_LENGTH'	=> '时长',
	'ACP_GROUPSUB_MORE'		=> '+%d 更多…',

	'ACP_GROUPSUB_EXPIRES_UNLIMITED'	=> '无限',

	'ACP_GROUPSUB_ERROR_MISSING_TERMS'	=> '套餐必须至少有一个条款才能启用。',
));