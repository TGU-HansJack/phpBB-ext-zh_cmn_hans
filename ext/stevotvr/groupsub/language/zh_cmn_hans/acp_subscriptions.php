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
	'ACP_GROUPSUB_MANAGE_SUBS_EXPLAIN'	=> '在这里你可以查看、修改和取消订阅。',
	'ACP_GROUPSUB_NO_SUBS'				=> '没有订阅',
	'ACP_GROUPSUB_SUB_ADD'				=> '创建订阅',
	'ACP_GROUPSUB_SUB_ADD_SUCCESS'		=> '订阅创建成功',
	'ACP_GROUPSUB_SUB_EDIT'				=> '编辑订阅',
	'ACP_GROUPSUB_SUB_EDIT_SUCCESS'		=> '订阅详情保存成功',
	'ACP_GROUPSUB_SUB_DELETE_CONFIRM'	=> '你确定要取消这个订阅吗？',
	'ACP_GROUPSUB_SUB_DELETE_SUCCESS'	=> '订阅取消成功',
	'ACP_GROUPSUB_SUB_DETAILS'			=> '订阅详情',
	'ACP_GROUPSUB_SUB_USER'				=> '订阅者',
	'ACP_GROUPSUB_SUB_PACKAGE'			=> '套餐',
	'ACP_GROUPSUB_SUB_SELECT_PACKAGE'	=> '选择套餐',
	'ACP_GROUPSUB_SUB_EXPIRE'			=> '到期',
	'ACP_GROUPSUB_SUB_EXPIRE_EXPLAIN'	=> '输入此订阅应该结束的日期。将此字段留空表示永久订阅。',
	'ACP_GROUPSUB_SUB_START'			=> '开始',
	'ACP_GROUPSUB_SUB_START_EXPLAIN'	=> '输入此订阅的开始日期。',

	'ACP_GROUPSUB_START'	=> '已开始',
	'ACP_GROUPSUB_EXPIRES'	=> '到期',
	'ACP_GROUPSUB_STATUS'	=> '状态',

	'ACP_GROUPSUB_EXPIRES_NEVER'	=> '永不',
	'ACP_GROUPSUB_ACTIVE'			=> '活跃',
	'ACP_GROUPSUB_ENDED'			=> '已结束',
	'ACP_GROUPSUB_ALL_PACKAGES'		=> '所有订阅套餐',
	'ACP_GROUPSUB_SUBS_PER_PAGE'	=> '每页项目数',
	'ACP_GROUPSUB_DELETED'			=> '已删除',

	'ACP_GROUPSUB_ERROR_NO_PKGS'		=> '没有可以创建订阅的套餐。',
	'ACP_GROUPSUB_ERROR_DATE_IN_PAST'	=> '输入的到期日期已过期。',
	'ACP_GROUPSUB_ERROR_INVALID_DATE'	=> '输入的日期格式无效。',
	'ACP_GROUPSUB_ERROR_SUB_CONFLICT'	=> '该成员已经有一个针对此套餐的有效订阅。<br><br><a href="%s">编辑有效订阅</a>',
));