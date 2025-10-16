<?php

/**
 *
 * AI Labs extension
 *
 * @copyright (c) 2023, privet.fun, https://privet.fun
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_AILABS_TITLE' 			=> 'AI 实验室',
	'ACP_AILABS_TITLE_VIEW' 	=> 'AI 实验室视图配置',
	'ACP_AILABS_TITLE_ADD' 		=> 'AI 实验室添加配置',
	'ACP_AILABS_TITLE_EDIT'		=> 'AI 实验室编辑配置',
	'ACP_AILABS_SETTINGS' 		=> '设置',

	'ACP_AILABS_ADD' 			=> '添加配置',

	'AILABS_USER_EMPTY' 				=> '请选择用户',
	'AILABS_USER_NOT_FOUND'				=> '无法找到用户 %1$s',
	'AILABS_USER_ALREADY_CONFIGURED'	=> '用户 %1$s 已配置，每个用户仅支持一个配置',
	'AILABS_SPECIFY_FORUM'				=> '请至少选择一个论坛',

	'LOG_ACP_AILABS_ADDED' 				=> 'AI 实验室配置已添加',
	'LOG_ACP_AILABS_EDITED' 			=> 'AI 实验室配置已更新',
	'LOG_ACP_AILABS_DELETED' 			=> 'AI 实验室配置已删除',

	'ACP_AILABS_ADDED' 				=> '配置创建成功',
	'ACP_AILABS_UPDATED' 			=> '配置更新成功',
	'ACP_AILABS_DELETED_CONFIRM'	=> '您确定要删除与用户 %1$s 关联的配置吗？',

	'LBL_AILABS_SETTINGS_DESC'		=> '请访问 👉 <a href="https://github.com/privet-fun/phpbb_ailabs" target="_blank" rel="nofollow">https://github.com/privet-fun/phpbb_ailabs</a> 获取详细的配置说明、故障排除和示例。',
	'LBL_AILABS_USERNAME'			=> 'AI 机器人',
	'LBL_AILABS_CONTROLLER'			=> 'AI',
	'LBL_AILABS_CONFIG'             => '配置 JSON',
	'LBL_AILABS_TEMPLATE'           => '模板',

	'LBL_AILABS_REPLY_TO'			=> 'AI 机器人回复的论坛',
	'LBL_AILABS_POST_FORUMS'		=> '新主题',
	'LBL_AILABS_REPLY_FORUMS'		=> '回复主题',
	'LBL_AILABS_QUOTE_FORUMS'		=> '引用或 <a href="https://www.phpbb.com/customise/db/extension/simple_mentions/" target="_blank" rel="nofollow">提及</a>',
	'LBL_AILABS_ENABLED'			=> '启用',
	'LBL_AILABS_SELECT_FORUMS'		=> '选择论坛...',

	'LBL_AILABS_BOT_URL'			=> '机器人 URL（测试）',
	'LBL_AILABS_BOT_URL_EXPLAIN'	=> '点击提供的 URL，您应该会看到一个新标签页打开并显示"Processing job 0"的响应。<a href="https://github.com/privet-fun/phpbb_ailabs?tab=readme-ov-file#troubleshooting" target="_blank" rel="nofollow">故障排除</a>',

	'LBL_AILABS_CONFIG_EXPLAIN'				=> '必须是有效的 JSON，请参阅文档获取详细信息',
	'LBL_AILABS_TEMPLATE_EXPLAIN'			=> '有效变量: {post_id}, {request}, {info}, {response}, {images}, {mp4}, {attachments}, {poster_id}, {poster_name}, {ailabs_username}, {settings}',
	'LBL_AILABS_POST_FORUMS_EXPLAIN'		=> '指定 AI 将回复新主题的论坛',
	'LBL_AILABS_REPLY_FORUMS_EXPLAIN'		=> '指定 AI 将在主题中回复的论坛',
	'LBL_AILABS_QUOTE_FORUMS_EXPLAIN'		=> '指定 AI 在被引用或 <a href="https://www.phpbb.com/customise/db/extension/simple_mentions/" target="_blank" rel="nofollow">提及</a> 时将回复的论坛',
	'LBL_AILABS_IP_VALIDATION'				=> '⚠️ 警告: 您的 ACP > 常规 > 服务器配置 > 安全设置 > ' .
		'<a href="%1$s">会话 IP 验证设置未设置为无</a>，' .
		'如果您使用强制用户登录的 phpBB 扩展（例如 <a href="https://www.phpbb.com/customise/db/extension/login_required" target="_blank" rel="nofollow">Login Required</a>），这可能会阻止 AI 实验室回复。' .
		'将会话 IP 验证设置为无或将 "/ailabs/*" 添加到扩展白名单。' .
		'请参阅 <a href="https://github.com/privet-fun/phpbb_ailabs#troubleshooting" target="_blank" rel="nofollow">故障排除部分</a> 获取更多详细信息。',

	'LBL_AILABS_CONFIG_DEFAULT'				=> '加载默认配置',
	'LBL_AILABS_TEMPLATE_DEFAULT'			=> '加载默认模板',
	
	'LBL_AILABS_API_DOCS'			=> 'API 文档',
]);