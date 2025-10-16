<?php
/**
 *
 * Canned Messages. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'CANNEDMESSAGES_EXPLAIN_MANAGE'		=> '使用此表单添加、删除、编辑和重新排序预设消息和分类。',
	'CANNEDMESSAGES_EXPLAIN_ADD_EDIT'	=> '此表单用于创建和编辑消息或分类。',
	'CREATE_CANNEDMESSAGE'				=> '创建新的预设消息',
	'CANNEDMESSAGE_NAME'				=> '预设消息名称',
	'CANNEDMESSAGE_LIST'				=> '预设消息列表',
	'NO_CANNEDMESSAGES'					=> '暂无预设消息',
	'CANNEDMESSAGE_IS_CAT'				=> '是分类',
	'CANNEDMESSAGE_CONTENT'				=> '消息内容',
	'NO_PARENT'							=> '无',
	'CANNEDMESSAGE_PARENT'				=> '上级消息',
	'MESSAGE_NAME_REQUIRED'				=> '必须填写消息名称',
	'MESSAGE_CONTENT_REQUIRED'			=> '当消息不是分类时，必须填写消息内容',
	'CANNEDMESSAGE_UPDATED'				=> '预设消息已更新。',
	'CANNEDMESSAGE_CREATED'				=> '预设消息已创建。',
	'CANNEDMESSAGE_INVALID_ITEM'		=> '未指定预设消息。',
	'CANNEDMESSAGE_INVALID_PARENT'		=> '预设消息的上级不存在。',
	'CANNEDMESSAGE_PARENT_IS_NOT_CAT'	=> '预设消息的上级不是分类。',
	'CANNEDMESSAGE_HAS_CHILDREN'		=> '预设消息分类包含子项，无法更改为消息。请先删除子项。',
	'CANNEDMESSAGE_HAS_CHILDREN_DEL'	=> '预设消息分类包含子项，无法删除。请先删除子项再尝试删除分类。',
	'CANNEDMESSAGES_DEL_CONFIRM'		=> '您确定要删除 <i>%s</i> 预设消息吗？',
	'CANNEDMESSAGES_DEL_CAT_CONFIRM'	=> '您确定要删除 <i>%s</i> 预设消息分类吗？',
	'CANNEDMESSAGE_DELETED'				=> '预设消息已删除。',
	'CANNEDMESSAGE_CAT_DELETED'			=> '预设消息分类已删除。',
));