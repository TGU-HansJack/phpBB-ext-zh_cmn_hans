<?php
/**
*
* @package Board3 Portal v2.3
* @copyright (c) 2023 Board3 Group ( www.board3.de )
* @license GNU General Public License, version 2 (GPL-2.0-only)
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

$lang = array_merge($lang, array(
	// Portal Modules
	'ACP_PORTAL_MODULES_EXP'		=> '您可以在这里管理门户模块。如果您关闭所有模块，请同时禁用门户。',

	'MODULE_POS_TOP'				=> '顶部',
	'MODULE_POS_LEFT'				=> '左列',
	'MODULE_POS_RIGHT'				=> '右列',
	'MODULE_POS_CENTER'				=> '中间列',
	'MODULE_POS_BOTTOM'				=> '底部',
	'ADD_MODULE'					=> '添加模块',
	'CHOOSE_MODULE'					=> '选择模块',
	'CHOOSE_MODULE_EXP'				=> '从下拉列表中选择一个模块',
	'SUCCESS_ADD'					=> '模块已成功添加。',
	'SUCCESS_DELETE'				=> '模块已成功删除。',
	'NO_MODULES'					=> '未检测到任何模块。',
	'MOVE_RIGHT'					=> '向右移动',
	'MOVE_LEFT'						=> '向左移动',
	'B3P_FILE_NOT_FOUND'			=> '找不到请求的文件',
	'UNABLE_TO_MOVE'				=> '无法将模块块移动到所选栏目。',
	'UNABLE_TO_MOVE_ROW'			=> '无法将模块块移动到所选行。',
	'UNABLE_TO_ADD_MODULE'			=> '无法将模块添加到所选栏目。',
	'DELETE_MODULE_CONFIRM'			=> '您确定要删除模块"%1$s"吗？',
	'MODULE_RESET_SUCCESS'			=> '成功重置模块设置。',
	'MODULE_RESET_CONFIRM'			=> '您确定要重置模块"%1$s"的设置吗？',
	'MODULE_NOT_EXISTS'				=> '所选模块不存在。',

	'MODULE_OPTIONS'			=> '模块选项',
	'MODULE_NAME'				=> '模块名称',
	'MODULE_NAME_EXP'			=> '请输入在模块配置中显示的模块名称。',
	'MODULE_IMAGE'				=> '模块图像',
	'MODULE_IMAGE_EXP'			=> '输入模块图像的文件名。图像需要位于styles/all/theme/images/portal/文件夹中。',
	'MODULE_PERMISSIONS'		=> '模块权限',
	'MODULE_PERMISSIONS_EXP'	=> '选择有权查看模块的组。如果您希望所有用户都能查看模块，请不要选择任何内容。<br />通过按住<samp>CTRL</samp>键并点击可以选择/取消选择多个组。',
	'MODULE_IMAGE_WIDTH'		=> '模块图像宽度',
	'MODULE_IMAGE_WIDTH_EXP'	=> '以像素为单位输入模块图像的宽度。<br>如果您不想要模块图像，请输入<strong>0</strong>作为值。',
	'MODULE_IMAGE_HEIGHT'		=> '模块图像高度',
	'MODULE_IMAGE_HEIGHT_EXP'	=> '以像素为单位输入模块图像的高度。',
	'MODULE_RESET'				=> '重置模块配置',
	'MODULE_RESET_EXP'			=> '这将把所有设置重置为默认值！<br>由于技术原因，重置后需要手动重新设置Font Awesome图标！<br>可以从<a href="https://github.com/board3/Board3-Portal/wiki#empfohlene-fa-icons--recommended-fa-icons" target="_blank" rel="noopener noreferrer"><strong>推荐的FA图标列表</strong></a>中选择合适的图标。',
	'MODULE_STATUS'				=> '启用模块',
	'MODULE_ADD_ONCE'			=> '此模块只能添加一次。',
	'MODULE_IMAGE_ERROR'		=> '检查模块图像时出错：',
	'UNKNOWN_MODULE_METHOD'		=> '无法解析%1$s模块的模块方法。',

	// general
	'ACP_PORTAL_CONFIG_INFO'				=> '常规设置',
	'ACP_PORTAL_GENERAL_TITLE'				=> '门户管理',
	'ACP_PORTAL_GENERAL_TITLE_EXP'			=> '感谢您选择Board3门户！这是您可以管理门户页面的地方。以下选项可让您自定义各种常规设置。',
	'ACP_PORTAL_SHOW_ALL'					=> '在所有页面显示门户',
	'ACP_PORTAL_SHOW_ALL_EXP'				=> '在所有页面上显示门户',
	'PORTAL_ENABLE'							=> '启用门户',
	'PORTAL_ENABLE_EXP'						=> '开启或关闭整个门户',
	'PORTAL_LEFT_COLUMN'					=> '启用左列',
	'PORTAL_LEFT_COLUMN_EXP'				=> '如果您想关闭左列，请选择否',
	'PORTAL_RIGHT_COLUMN'					=> '启用右列',
	'PORTAL_RIGHT_COLUMN_EXP'				=> '如果您想关闭右列，请选择否',
	'PORTAL_DISPLAY_JUMPBOX'				=> '显示跳转框',
	'PORTAL_DISPLAY_JUMPBOX_EXP'			=> '在门户上显示跳转框。只有在服务器配置/加载设置中也启用了跳转框时才会显示。',
	'ACP_PORTAL_COLUMN_WIDTH_SETTINGS'		=> '左右列宽度设置',
	'PORTAL_LEFT_COLUMN_WIDTH'				=> '左列宽度',
	'PORTAL_LEFT_COLUMN_WIDTH_EXP'			=> '以像素为单位更改左列的宽度；建议值为180',
	'PORTAL_RIGHT_COLUMN_WIDTH'				=> '右列宽度',
	'PORTAL_RIGHT_COLUMN_WIDTH_EXP'			=> '以像素为单位更改右列的宽度；建议值为180',
	'PORTAL_SHOW_ALL_SIDE'					=> '在所有页面显示的列',
	'PORTAL_SHOW_ALL_SIDE_EXP'				=> '选择应在所有页面上显示的列。',
	'PORTAL_SHOW_ALL_LEFT'					=> '左侧',
	'PORTAL_SHOW_ALL_RIGHT'					=> '右侧',

	'LINK_ADDED'							=> '链接已成功添加',
	'LINK_UPDATED'							=> '链接已成功更新',

	// Install
	'PORTAL_BASIC_INSTALL'			=> '正在添加基本模块集',
	'PORTAL_BASIC_UNINSTALL'		=> '正在从数据库中删除模块',

	// Font Awesome
	'ACP_FA'				=> 'Font Awesome 样式',
	'ACP_FA_EXP'			=> '在这里您可以定义哪些样式应该使用Font Awesome图标。',
	'MODULE_FA'				=> 'Font Awesome 图标',
	'MODULE_FA_EXP'			=> '在这里您可以选择一个<a href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener noreferrer"><strong>Font Awesome</strong></a>图标。当您选择的样式使用Font Awesome图标时将使用此图标。',
	'MODULE_FA_SIZE'		=> 'Font Awesome 图标大小',
	'MODULE_FA_SIZE_EXP'	=> '在这里您可以以像素为单位更改Font Awesome图标的大小。',
));