<?php

/**
 * @package Verified Profiles
 * @copyright (c) 2025 Daniel James
 * @license https://opensource.org/license/gpl-2-0
 */

if ( ! defined( 'IN_PHPBB' ) ) {

	exit;

}

if ( empty( $lang ) || ! is_array( $lang ) ) {

	$lang = [];

}

$lang = array_merge( $lang, [
	'ACP_VERIFIED_PROFILES'					=> '已验证资料',
	'ACP_VERIFIED_PROFILES_MODULE_TITLE'	=> '设置',

	'ACP_SETTINGS_CUSTOM_IMAGE_LABEL'					=> '自定义图像',
	'ACP_SETTINGS_CUSTOM_IMAGE_DESCRIPTION'				=> '上传自定义图像以替换默认验证图标。建议使用 <code>PNG</code> 文件类型。',
	'ACP_SETTINGS_DELETE_CUSTOM_IMAGE_LABEL'			=> '删除现有图像',
	'ACP_SETTINGS_LOCATION_MANAGE_LABEL'				=> '位置',
	'ACP_SETTINGS_LOCATION_MANAGE_DESCRIPTION'			=> '选择要在哪些页面上显示验证徽章。',
	'ACP_SETTINGS_LOCATION_MANAGE_VALUE_APP'			=> '扩展和常见问题页面 (<code>app.php</code>)',
	'ACP_SETTINGS_LOCATION_MANAGE_VALUE_INDEX'			=> '首页和管理控制面板 (<code>index.php</code>)',
	'ACP_SETTINGS_LOCATION_MANAGE_VALUE_MCP'			=> '版主控制面板 (<code>mcp.php</code>)',
	'ACP_SETTINGS_LOCATION_MANAGE_VALUE_MEMBERLIST'		=> '个人资料、群组和成员列表 (<code>memberlist.php</code>)',
	'ACP_SETTINGS_LOCATION_MANAGE_VALUE_POSTING'		=> '文本编辑器 (<code>posting.php</code>)',
	'ACP_SETTINGS_LOCATION_MANAGE_VALUE_REPORT'			=> '报告页面 (<code>report.php</code>)',
	'ACP_SETTINGS_LOCATION_MANAGE_VALUE_SEARCH'			=> '搜索结果 (<code>search.php</code>)',
	'ACP_SETTINGS_LOCATION_MANAGE_VALUE_UCP'			=> '用户控制面板 (<code>ucp.php</code>)',
	'ACP_SETTINGS_LOCATION_MANAGE_VALUE_VIEWFORUM'		=> '版块列表 (<code>viewforum.php</code>)',
	'ACP_SETTINGS_LOCATION_MANAGE_VALUE_VIEWONLINE'		=> '在线列表 (<code>viewonline.php</code>)',
	'ACP_SETTINGS_LOCATION_MANAGE_VALUE_VIEWTOPIC'		=> '主题列表 (<code>viewtopic.php</code>)',
	'ACP_SETTINGS_SUCCESS_MESSAGE'						=> '扩展设置保存成功。',
	'ACP_SETTINGS_ERROR_BADGE_SIZE'						=> '您上传的图像文件大小无效。',
	'ACP_SETTINGS_ERROR_BADGE_TYPE'						=> '您上传的图像文件类型无效。',
	'ACP_SETTINGS_ERROR_BADGE_UPLOAD'					=> '您上传的图像无法保存到服务器。',

	'ACP_LOGS_SETTINGS_SAVED'			=> '<strong>已验证资料</strong>:<br />» 扩展设置保存成功。',
	'ACP_LOGS_BADGE_SIZE_ERROR'			=> '<strong>已验证资料</strong>:<br />» [错误] 因尺寸问题导致自定义图像上传失败。',
	'ACP_LOGS_BADGE_TYPE_ERROR'			=> '<strong>已验证资料</strong>:<br />» [错误] 因类型问题导致自定义图像上传失败。',
	'ACP_LOGS_BADGE_UPLOAD_ERROR'		=> '<strong>已验证资料</strong>:<br />» [错误] 自定义图像上传到服务器失败。',

	'ACP_USER_SETTING_LABEL'			=> '已验证资料',
	'ACP_USER_SETTING_DESCRIPTION'		=> '选择<code>启用</code>以在用户名旁边显示验证徽章。',
	'ACP_GROUP_SETTING_LABEL'			=> '已验证群组',
	'ACP_GROUP_SETTING_DESCRIPTION'		=> '选择<code>启用</code>以在所有群组成员用户名旁边显示验证徽章。',

	'ACP_VERIFY_SETTING_ENABLE'			=> '启用',
	'ACP_VERIFY_SETTING_DISABLE'		=> '禁用',
] );