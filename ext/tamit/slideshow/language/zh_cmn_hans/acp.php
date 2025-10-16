<?php
/**
 *
 * Slideshow Management. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021 Huynh Buu Tam <https://www.tamit.net>
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
	// Manage slides
	'SLIDE_SETTINGS'					=> '幻灯片设置',
	'SLIDE_STATUS'						=> '状态',
	'SLIDE_TITLE'						=> '幻灯片标题',
	'SLIDE_TITLE_EXPLAIN'				=> '在此输入幻灯片标题。',
	'SLIDE_ENABLED'						=> '启用幻灯片',
	'SLIDE_ENABLED_EXPLAIN'				=> '如果禁用，此幻灯片将不会显示。',
	'SLIDE_DESCRIPTION'					=> '幻灯片描述',
	'SLIDE_DESCRIPTION_EXPLAIN'			=> '在此输入幻灯片描述。',
	'SLIDE_IMAGE'						=> '幻灯片图片',
	'SLIDE_IMAGE_EXPLAIN'				=> '在此输入幻灯片图片（URL）。',
	'SLIDE_LINK'						=> '幻灯片链接',
	'SLIDE_LINK_EXPLAIN'				=> '在此输入幻灯片链接（URL）。',
	'SLIDE_SETTINGS_NOT_AFFECTED'		=> '当前已启用<samp>最新主题</samp>模式。在禁用<samp>最新主题</samp>模式后，以下设置将生效。',

	// Upload
	'UPLOAD_IMAGE_LEGEND'				=> '上传图片',
	'UPLOAD_IMAGE'						=> '上传新图片',
	'UPLOAD_IMAGE_UPLOADED'				=> '图片已上传。图片链接已发送到幻灯片图片字段。',
	'UPLOAD_IMAGE_EXPLAIN'				=> '您可以上传JPG、GIF或PNG格式的图片。图片将存储在phpBB的<samp>images</samp>（tamit_slideshow）目录中，图片链接将自动插入到幻灯片图片字段中。请注意，如果上传的图片与现有图片文件名相同，将会覆盖现有图片。',
	'UPLOAD_SUBMIT'						=> '上传',

	'SLIDE_ENABLE_TITLE'				=> array(
		0 => '点击启用',
		1 => '点击禁用',
	),

	'ACP_SLIDES_EMPTY'					=> '没有可显示的幻灯片。请使用下面的按钮添加。',
	'ACP_SLIDES_FIX_POSITION'			=> '修复幻灯片位置',
	'ACP_SLIDES_ADD'					=> '添加新幻灯片',
	'ACP_SLIDES_EDIT'					=> '编辑幻灯片',

	'SLIDE_TITLE_REQUIRED'				=> '标题为必填项。',
	'SLIDE_TITLE_TOO_LONG'				=> '标题长度限制为%d个字符。',
	'SLIDE_LINK_INCORRECT'				=> '幻灯片链接必须是正确的URL',
	'SLIDE_IMAGE_INCORRECT'				=> '幻灯片图片必须是正确的URL',
	'NO_FILE_SELECTED'					=> '未选择文件。',
	'CANNOT_CREATE_DIRECTORY'			=> '无法创建<samp>tamit_slideshow</samp>目录。请确保<samp>/images</samp>目录可写。',
	'FILE_MOVE_UNSUCCESSFUL'			=> '无法将文件移动到<samp>images/tamit_slideshow</samp>。',
	'ACP_SLIDE_DOES_NOT_EXIST'			=> '幻灯片不存在。',
	'ACP_SLIDE_ADD_SUCCESS'				=> '幻灯片添加成功。',
	'ACP_SLIDE_EDIT_SUCCESS'			=> '幻灯片编辑成功。',
	'ACP_SLIDE_DELETE_SUCCESS'			=> '幻灯片删除成功。',
	'ACP_SLIDE_DELETE_ERRORED'			=> '删除幻灯片时出错。',
	'ACP_SLIDE_ENABLE_SUCCESS'			=> '幻灯片启用成功。',
	'ACP_SLIDE_ENABLE_ERRORED'			=> '启用幻灯片时出错。',
	'ACP_SLIDE_DISABLE_SUCCESS'			=> '幻灯片禁用成功。',
	'ACP_SLIDE_DISABLE_ERRORED'			=> '禁用幻灯片时出错。',
	'ACP_SLIDE_MOVEUP_SUCCESS'			=> '幻灯片上移成功。',
	'ACP_SLIDE_MOVEUP_ERRORED'			=> '上移幻灯片时出错。',
	'ACP_SLIDE_MOVEDOWN_SUCCESS'		=> '幻灯片下移成功。',
	'ACP_SLIDE_MOVEDOWN_ERRORED'		=> '下移幻灯片时出错。',
	'ACP_FIX_POSITION_SUCCESS'			=> '所有幻灯片位置已修复。',
	'ACP_FIX_POSITION_ERRORED'			=> '修复幻灯片位置时出错。',

	// Settings
	'SLIDESHOW_APPEARENCE'				=> '幻灯片外观',
	'SLIDESHOW_BOX'						=> '使用盒子',
	'SLIDESHOW_BOX_EXPLAIN'				=> '用样式容器包装幻灯片。',
	'SLIDESHOW_NAVIGATOR'				=> '导航器',
	'SLIDESHOW_NAVIGATOR_EXPLAIN'		=> '选择要显示的导航器。',
	'SLIDESHOW_SLIDE_HEIGHT'			=> '幻灯片图片高度',
	'SLIDESHOW_SLIDE_HEIGHT_EXPLAIN'	=> '指定幻灯片图片的高度。',
	'SLIDESHOW_IMAGE_NAV_SIZE'			=> '图片导航器大小',
	'SLIDESHOW_IMAGE_NAV_SIZE_EXPLAIN'	=> '指定图片导航器的大小。',

	'CAT_NAV_IMAGE'						=> '图片导航器',
	'CAT_NAV_DOT'						=> '点导航器',

	'SLIDESHOW_TARGET_LEGEND'			=> '幻灯片目标',
	'SLIDESHOW_TARGET'					=> '目标页面',
	'SLIDESHOW_TARGET_EXPLAIN'			=> '选择要显示幻灯片的页面。',

	'CAT_TARGET_INDEX'					=> '首页',
	'CAT_TARGET_VIEWFORUM'				=> '版块视图',
	'CAT_TARGET_VIEWTOPIC'				=> '主题视图',

	'SLIDESHOW_DURATION'				=> '持续时间',
	'SLIDESHOW_DURATION_EXPLAIN'		=> '每张幻灯片显示多长时间？（以毫秒为单位）',

	'SLIDESHOW_MODE'								=> '幻灯片模式',
	'SLIDESHOW_MODE_TOPICS'							=> '最新主题',
	'SLIDESHOW_MODE_TOPICS_EXPLAIN'					=> '将最新主题设置为幻灯片。',
	'SLIDESHOW_TOPIC_MAX_LENGTH'					=> '最大长度',
	'SLIDESHOW_TOPIC_MAX_LENGTH_EXPLAIN'			=> '在描述中显示的帖子内容的最大长度。如果要隐藏帖子内容，请设置为0。',
	'SLIDESHOW_TOPIC_HIDE_PROTECTED_FORUM'			=> '隐藏密码保护版块的帖子',
	'SLIDESHOW_TOPIC_HIDE_PROTECTED_FORUM_EXPLAIN'	=> '不显示密码保护版块的帖子。',
	'SLIDESHOW_TOPIC_COUNT'							=> '主题数量',
	'SLIDESHOW_TOPIC_COUNT_EXPLAIN'					=> '要获取的主题数量。',
	'SLIDESHOW_TOPIC_HIDE_BBCODE'					=> '隐藏BBCode内容',
	'SLIDESHOW_TOPIC_HIDE_BBCODE_EXPLAIN'			=> '如果要隐藏某些BBCode的内容，请在此输入每个BBCode名称，用逗号(,)分隔，不要包含方括号（例如：<samp>url, code</samp>）。',
	'SLIDESHOW_DEFAULT_IMAGE'						=> '默认图片',
	'SLIDESHOW_DEFAULT_IMAGE_EXPLAIN'				=> '如果主题的第一个帖子没有任何图片（使用BBcode IMG或行内附件），则使用默认图片代替。',

	'ACP_SLIDE_SETTINGS_SAVED'						=> '幻灯片管理设置已保存。'
));
