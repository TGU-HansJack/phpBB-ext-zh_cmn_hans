<?php
/**
 *
 * Ideas extension for the phpBB Forum Software package.
 * Chinese Simplified Translation by phpBBChina.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
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
	'ADD'					=> '添加',
	'ALL_IDEAS'				=> '所有建议',
	'ALREADY_VOTED'			=> '您已经对此建议投过票了。',

	'CHANGE_STATUS'			=> '更改状态',
	'CLICK_TO_VIEW'			=> '点击查看投票。',
	'CONFIRM_DELETE'		=> '您确定要删除此建议吗？',

	'DATE'					=> '日期',
	'DELETE_IDEA'			=> '删除建议',
	'DUPLICATE'				=> '重复',
	'DUPLICATE_PLACEHOLDER'	=> '开始输入标题',

	'EDIT'					=> '编辑',
	'ENABLE_JS'             => '请在浏览器中启用 JavaScript 以有效使用 phpBB Ideas。',

	'IDEAS'					=> '建议',
	'IDEA_DELETED'			=> '建议已成功删除。',
	'IDEA_LIST'				=> '建议列表',
	'IDEA_NOT_FOUND'		=> '未找到建议',
	'IDEA_STATUS_CHANGE'	=> '<strong>建议状态已更改</strong> 由 %s：',
	'IDEA_STORED_MOD'		=> '您的建议已成功提交，但在通过审核前不会公开显示。当您的建议被批准后，您将收到通知。<br /><br /><a href="%s">返回建议</a>。',
	'IDEAS_TITLE'			=> 'phpBB 建议',
	'IDEAS_NOT_AVAILABLE'	=> '建议功能当前不可用。',
	'IMPLEMENTED'           => '已实现',
	'IMPLEMENTED_ERROR'		=> '必须是有效的 phpBB 版本号。',
	'IMPLEMENTED_IDEAS'		=> '最近实现的建议',
	'IMPLEMENTED_VERSION'	=> 'phpBB 版本',
	'IN_PROGRESS'           => '进行中',
	'IN_PROGRESS_IDEAS'     => '进行中的建议',
	'INVALID'				=> '无效',
	'INVALID_IDEA_QUERY'	=> 'SQL 查询无效。建议加载失败。',
	'INVALID_VOTE'			=> '投票无效；您输入的数字无效。',

	'JS_DISABLED'           => 'JavaScript 已禁用',

	'LATEST_IDEAS'			=> '最新建议',
	'LIST_DUPLICATE'		=> '重复建议',
	'LIST_EGOSEARCH'		=> '我的建议',
	'LIST_IMPLEMENTED'		=> '已实现建议',
	'LIST_IN_PROGRESS'		=> '进行中建议',
	'LIST_INVALID'			=> '无效建议',
	'LIST_NEW'				=> '新建议',
	'LIST_TOP'				=> '热门建议',

	'LOGGED_OUT'			=> '您必须登录才能执行此操作。',

	'NEW'					=> '新建',
	'NEW_IDEA'				=> '新建议',
	'NO_IDEAS_DISPLAY'		=> '没有可显示的建议。',
	'NOTIFICATION_STATUS'	=> '<em>状态：<strong>%s</strong></em>',

	'OPEN_IDEAS'			=> '开放建议',

	'POST_IDEA'				=> '发布新建议',
	'POSTING_NEW_IDEA'		=> '发布新建议',

	'REMOVE_VOTE'			=> '移除我的投票',
	'RETURN_IDEAS'			=> '%s返回建议%s',
	'RFC'					=> 'RFC',
	'RFC_ERROR'				=> 'RFC 必须是 Area51 上的主题。',
	'RFC_LINK_TEXT'			=> '在 Area51 上查看 RFC 讨论',

	'SEARCH_IDEAS'			=> '搜索建议...',
	'SCORE'                 => '得分',
	'SHOW_W_STATUS'			=> '显示状态为以下的建议',
	'STATUS'				=> '状态',

	'TICKET'				=> '工单',
	'TICKET_ERROR'			=> '工单 ID 必须采用 "PHPBB-#####" 或 "PHPBB3-#####" 格式。',
	'TICKET_ERROR_DUP'		=> '您必须从实时搜索结果中点击建议标题。要删除重复项，请清空字段并按 ENTER。要退出此字段请按 ESC。',
	'TITLE'					=> '标题',
	'TOP'					=> '热门',
	'TOP_IDEAS'				=> '热门建议',
	'TOTAL_IDEAS'			=> [
		1	=> '%d 个建议',
		2	=> '%d 个建议',
	],
	'TOTAL_POINTS'			=> [
		1	=> '%s 分。',
		2	=> '%s 分。',
	],

	'UPDATED_VOTE'			=> '投票更新成功！',

	'USER_ALREADY_VOTED'	=> [
		0 => '您已反对此建议',
		1 => '您已支持此建议',
	],

	'VIEW_IDEA'				=> '查看建议',
	'VIEW_IMPLEMENTED'		=> '查看所有已实现建议',
	'VIEW_IN_PROGRESS'		=> '查看所有进行中建议',
	'VIEW_LATEST'			=> '查看所有开放建议',
	'VIEW_TOP'				=> '查看所有得票最高的建议',
	'VIEWING_IDEAS'			=> '正在查看建议',
	'VOTE'					=> '投票',
	'VOTE_DOWN'				=> '反对',
	'VOTE_ERROR'			=> '发生错误',
	'VOTE_FAIL'				=> '投票失败；请检查您的连接。',
	'VOTE_SUCCESS'			=> '已成功对此建议投票。',
	'VOTE_UP'				=> '支持',
	'VOTES'					=> '投票',
));