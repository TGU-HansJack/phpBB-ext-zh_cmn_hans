<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Steve Guidetti, https://github.com/stevotvr
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
	'ACP_FLAIR_TITLE'	=> '资料徽章',

	'ACP_FLAIR_SETTINGS'					=> '设置',
	'ACP_FLAIR_SETTINGS_TITLE'				=> '资料徽章设置',
	'ACP_FLAIR_OPTIONS'						=> '常规选项',
	'ACP_FLAIR_NOTIFY_USERS'				=> '启用通知',
	'ACP_FLAIR_NOTIFY_USERS_EXPLAIN'		=> '启用以允许用户在个人资料添加新徽章时接收通知。',
	'ACP_FLAIR_DISPLAY_OPTIONS'				=> '显示选项',
	'ACP_FLAIR_DISPLAY_OPTIONS_EXPLAIN'		=> '这些显示选项适用于<strong>未分类</strong>的徽章项目。',
	'ACP_FLAIR_SHOW_ON_PROFILE'				=> '在资料中显示',
	'ACP_FLAIR_SHOW_ON_PROFILE_EXPLAIN'		=> '启用以在个人资料页面上显示徽章。',
	'ACP_FLAIR_SHOW_ON_POSTS'				=> '在帖子中显示',
	'ACP_FLAIR_SHOW_ON_POSTS_EXPLAIN'		=> '启用以在每个帖子的用户信息部分显示徽章。',
	'ACP_FLAIR_DISPLAY_LIMIT'				=> '显示限制',
	'ACP_FLAIR_DISPLAY_LIMIT_EXPLAIN'		=> '限制在帖子上显示的徽章数量。输入0表示无限制。',
	'ACP_FLAIR_SETTINGS_SAVED'				=> '资料徽章选项保存成功',

	'ACP_FLAIR_MANAGE_CATS'				=> '管理分类',
	'ACP_FLAIR_MANAGE_CATS_EXPLAIN'		=> '徽章项目可以分组到分类中，这里可以管理这些分类。',
	'ACP_FLAIR_CATS_EMPTY'				=> '无分类',
	'ACP_FLAIR_ADD_CAT'					=> '添加徽章分类',
	'ACP_FLAIR_CATS_ADD_SUCCESS'		=> '徽章分类添加成功',
	'ACP_FLAIR_EDIT_CAT'				=> '编辑徽章分类',
	'ACP_FLAIR_CATS_EDIT_SUCCESS'		=> '徽章分类详情保存成功',
	'ACP_FLAIR_CAT_DETAILS'				=> '分类详情',
	'ACP_FLAIR_DELETE_CAT'				=> '删除分类',
	'ACP_FLAIR_CATS_DELETE_SUCCESS'		=> '徽章分类删除成功',
	'ACP_FLAIR_CATS_DELETE_ERRORED'		=> '尝试删除徽章分类时发生错误',
	'ACP_FLAIR_DELETE_FLAIR_CONFIRM'	=> '您确定要删除此项吗？',
	'ACP_FLAIR_FORM_CAT_NAME'			=> '分类名称',
	'ACP_FLAIR_FORM_DELETE_ALL_FLAIR'	=> '删除所有徽章',
	'ACP_FLAIR_FORM_MOVE_FLAIR_TO'		=> '移动徽章到',

	'ACP_FLAIR_MANAGE'				=> '管理徽章',
	'ACP_FLAIR_MANAGE_EXPLAIN'		=> '您可以在这里添加、编辑或删除徽章项目。',
	'ACP_FLAIR_EMPTY'				=> '无徽章项目',
	'ACP_FLAIR_ADD'					=> '添加徽章项目',
	'ACP_FLAIR_ADD_SUCCESS'			=> '徽章项目添加成功',
	'ACP_FLAIR_EDIT'				=> '编辑徽章项目',
	'ACP_FLAIR_EDIT_SUCCESS'		=> '徽章项目详情保存成功',
	'ACP_FLAIR_DETAILS'				=> '徽章详情',
	'ACP_FLAIR_APPEARANCE'			=> '徽章外观',
	'ACP_FLAIR_AUTO_ASSIGN'			=> '徽章自动分配',
	'ACP_FLAIR_AUTO_ASSIGN_EXPLAIN'	=> '在下方设置选项，使符合条件的用户自动获得徽章。添加的项目将保留，直到版主手动删除。<br><strong>发帖数</strong>和<strong>注册天数</strong>是相互独立的，满足任一条件时都会触发。',
	'ACP_FLAIR_DELETE_SUCCESS'		=> '徽章项目删除成功',
	'ACP_FLAIR_DELETE_ERRORED'		=> '尝试删除徽章项目时发生错误',
	'ACP_FLAIR_TYPE'				=> '徽章类型',
	'ACP_FLAIR_FORM_CAT'			=> '徽章分类',
	'ACP_FLAIR_FORM_NAME'			=> '徽章名称',
	'ACP_FLAIR_FORM_DESC'			=> '徽章描述',
	'ACP_FLAIR_FORM_PREVIEW'		=> '徽章预览',
	'ACP_FLAIR_FORM_COLOR'			=> '徽章颜色',
	'ACP_FLAIR_FORM_ICON'			=> '徽章图标',
	'ACP_FLAIR_FORM_ICON_COLOR'		=> '徽章图标颜色',
	'ACP_FLAIR_FORM_IMG'			=> '徽章图像',
	'ACP_FLAIR_NO_IMGS'				=> '在<b>images/flair</b>中未找到图像集。',
	'ACP_FLAIR_FORM_FONT_COLOR'		=> '徽章字体颜色',
	'ACP_FLAIR_FORM_GROUPS'			=> '群组分配',
	'ACP_FLAIR_FORM_GROUPS_AUTO'	=> '自动分配到群组',

	'ACP_FLAIR_DESC_EXPLAIN'		=> '可选的简短描述，将显示在徽章图例中。',
	'ACP_FLAIR_COLOR_EXPLAIN'		=> '项目的背景颜色。留空表示无背景。',
	'ACP_FLAIR_ICON_EXPLAIN'		=> '输入可选的Font Awesome图标标识符来表示此项目。[&nbsp;<a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Font Awesome图标列表</a>&nbsp;]',
	'ACP_FLAIR_ICON_COLOR_EXPLAIN'	=> '图标的颜色（如果存在）。',
	'ACP_FLAIR_IMG_EXPLAIN'			=> '自定义图像文件。',
	'ACP_FLAIR_FONT_COLOR_EXPLAIN'	=> '当用户拥有多个相同项目时，徽章计数文本的颜色。留空以隐藏计数。',
	'ACP_FLAIR_GROUPS_EXPLAIN'		=> '在此选择的群组成员将自动拥有此徽章项目的访问权限。',
	'ACP_FLAIR_GROUPS_AUTO_EXPLAIN'	=> '如果启用此选项，上述选定群组的成员将自动在个人资料中分配此项目。否则，群组成员将在UCP中拥有将此项目分配到自己个人资料的访问权限。',

	'ACP_FLAIR_TRIGGER_POST_COUNT'				=> '发帖数',
	'ACP_FLAIR_TRIGGER_POST_COUNT_EXPLAIN'		=> '设置用户自动获得此项目所需的最少发帖数。当前满足此要求的用户将在发新帖时获得徽章。留空以禁用。',
	'ACP_FLAIR_TRIGGER_MEMBERSHIP_DAYS'			=> '注册天数',
	'ACP_FLAIR_TRIGGER_MEMBERSHIP_DAYS_EXPLAIN'	=> '设置用户自动获得此项目前必须注册的最少天数。当前满足此要求的用户将在发新帖时获得徽章。留空以禁用。',

	'ACP_FLAIR_IMAGES'						=> '管理图像',
	'ACP_FLAIR_IMAGES_EXPLAIN'				=> '您可以在这里查看、上传或删除自定义图像图标。您不能删除当前被一个或多个徽章项目使用的图像。',
	'ACP_FLAIR_IMGS_EMPTY'					=> '未找到自定义图像集。',
	'ACP_FLAIR_ADD_IMG'						=> '添加图像',
	'ACP_FLAIR_ADD_IMGS'					=> '添加图像',
	'ACP_FLAIR_IMG_TABLE_EXPLAIN'			=> '您可以将自定义图标上传到<b>images/flair</b>。SVG图像可以原样上传。每个GIF、PNG或JPEG图标需要以下文件：',
	'ACP_FLAIR_IMG_TABLE_NAME'				=> '文件名',
	'ACP_FLAIR_IMG_TABLE_SIZE'				=> '推荐高度',
	'ACP_FLAIR_IMG_TABLE_PLACEHOLDER'		=> 'icon_name',
	'ACP_FLAIR_IMG_TABLE_PX'				=> 'px',
	'ACP_FLAIR_IMG_UPLOADING'				=> '自动图像上传',
	'ACP_FLAIR_UPLOAD_IMG'					=> '上传图像',
	'ACP_FLAIR_IMG_ADD_SUCCESS'				=> '自定义图像添加成功',
	'ACP_FLAIR_IMG_DELETE_SUCCESS'			=> '自定义图像删除成功',
	'ACP_FLAIR_IMG_DELETE_ERRORED'			=> '尝试删除自定义图像时发生错误',
	'ACP_FLAIR_DELETE_IMG_CONFIRM'			=> '您确定要删除此项吗？',
	'ACP_FLAIR_FORM_IMG_FILE'				=> '图像文件',
	'ACP_FLAIR_FORM_IMG_FILE_EXPLAIN'		=> '选择源图像文件。您可以上传任何GIF、PNG、JPEG或SVG文件。建议使用至少66px高度的方形图像。',
	'ACP_FLAIR_FORM_IMG_OVERWRITE'			=> '覆盖现有文件',
	'ACP_FLAIR_FORM_IMG_OVERWRITE_EXPLAIN'	=> '启用以永久覆盖同名的现有图像。',

	'ACP_FLAIR_NAME'		=> '名称',
	'ACP_FLAIR_DISPLAY_ON'	=> '显示于',
	'ACP_FLAIR_PROFILE'		=> '资料',
	'ACP_FLAIR_POSTS'		=> '帖子',

	'ACP_FLAIR_TYPE_FA'		=> 'Font Awesome',
	'ACP_FLAIR_TYPE_IMG'	=> '自定义图像',

	'ACP_ERROR_APPEARANCE_REQUIRED'	=> '您必须为徽章项目设置颜色或图标。',
	'ACP_ERROR_IMG_REQUIRED'		=> '您必须为徽章项目指定图像。',
	'ACP_ERROR_NOT_WRITABLE'		=> '<b>images/flair</b>目录不可写。',
	'ACP_ERROR_NO_IMG_LIB'			=> '您必须安装/启用Imagemagick（推荐）或GD才能将此功能用于光栅图像。仅允许SVG图像。',
	'ACP_ERROR_UPLOAD_INVALID'		=> '您选择的文件不是可接受的图像文件。',
	'ACP_ERROR_NOT_UPLOADED'		=> '图像上传失败。',
));