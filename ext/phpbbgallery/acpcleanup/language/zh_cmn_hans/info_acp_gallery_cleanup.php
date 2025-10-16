<?php
/**
 * phpBB Gallery - ACP CleanUp Extension [Chinese Translation]
 *
 * @package   phpbbgallery/acpcleanup
 * @author    nickvergessen
 * @author    satanasov
 * @author    Leinad4Mind
 * @copyright 2007-2012 nickvergessen, 2014- satanasov, 2018- Leinad4Mind
 * @license   GPL-2.0-only
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

$lang = array_merge($lang, [
	'ACP_GALLERY_CLEANUP'				=> '清理画廊',

	'ACP_GALLERY_CLEANUP_EXPLAIN'	=> '在这里您可以删除一些残留内容。',

	'CLEAN_AUTHORS_DONE'			=> '已删除没有有效作者的图像。',
	'CLEAN_CHANGED'					=> '作者已更改为"游客"。',
	'CLEAN_COMMENTS_DONE'			=> '已删除没有有效作者的评论。',
	'CLEAN_ENTRIES_DONE'			=> '已删除没有数据库条目的文件。',
	'CLEAN_GALLERY'					=> '清理画廊',
	'CLEAN_GALLERY_ABORT'			=> '清理中止！',
	'CLEAN_NO_ACTION'				=> '未完成任何操作。出现了问题！',
	'CLEAN_PERSONALS_DONE'			=> '已删除没有有效所有者的个人相册。',
	'CLEAN_PERSONALS_BAD_DONE'		=> '已删除所选用户的个人相册。',
	'CLEAN_PRUNE_DONE'				=> '成功修剪图像。',
	'CLEAN_PRUNE_NO_PATTERN'		=> '无搜索模式。',
	'CLEAN_SOURCES_DONE'			=> '已删除没有文件的图像。',

	'CONFIRM_CLEAN'					=> '此步骤无法撤销！',
	'CONFIRM_CLEAN_AUTHORS'			=> '删除没有有效作者的图像？',
	'CONFIRM_CLEAN_COMMENTS'		=> '删除没有有效作者的评论？',
	'CONFIRM_CLEAN_ENTRIES'			=> '删除没有数据库条目的文件？',
	'CONFIRM_CLEAN_PERSONALS'		=> '删除没有有效所有者的个人相册？<br /><strong>» %s</strong>',
	'CONFIRM_CLEAN_PERSONALS_BAD'	=> '删除所选用户的个人相册？<br /><strong>» %s</strong>',
	'CONFIRM_CLEAN_SOURCES'			=> '删除没有文件的图像？',
	'CONFIRM_PRUNE'					=> '删除符合以下条件的所有图像：<br /><br />%s<br />',

	'PRUNE'							=> '修剪',
	'PRUNE_ALBUMS'					=> '修剪相册',
	'PRUNE_CHECK_OPTION'			=> '修剪图像时勾选此选项。',
	'PRUNE_COMMENTS'				=> '少于x条评论',
	'PRUNE_PATTERN_ALBUM_ID'		=> '图像在以下相册之一中：<br />&raquo; <strong>%s</strong>',
	'PRUNE_PATTERN_COMMENTS'		=> '图像评论少于 <strong>%d</strong> 条。',
	'PRUNE_PATTERN_RATES'			=> '图像评分少于 <strong>%d</strong> 个。',
	'PRUNE_PATTERN_RATE_AVG'		=> '图像平均评分低于 <strong>%s</strong>。',
	'PRUNE_PATTERN_TIME'			=> '图像上传于 "<strong>%s</strong>" 之前。',
	'PRUNE_PATTERN_USER_ID'			=> '图像由以下用户之一上传：<br />&raquo; <strong>%s</strong>',
	'PRUNE_RATINGS'					=> '少于x个评分',
	'PRUNE_RATING_AVG'				=> '平均评分低于',
	'PRUNE_RATING_AVG_EXP'			=> '仅修剪平均评分低于 "<samp>x.yz</samp>" 的图像。',
	'PRUNE_TIME'					=> '上传于',
	'PRUNE_TIME_EXP'				=> '仅修剪在 "<samp>YYYY-MM-DD</samp>" 之前上传的图像。',
	'PRUNE_USERNAME'				=> '上传者',
	'PRUNE_USERNAME_EXP'			=> '仅修剪特定用户的图像。要修剪"游客"的图像，请勾选用户名框外的复选框。',

	//Log
	'LOG_CLEANUP_DELETE_FILES'		=> '已删除 %s 个没有数据库条目的图像。',
	'LOG_CLEANUP_DELETE_ENTRIES'	=> '已删除 %s 个没有文件的图像。',
	'LOG_CLEANUP_DELETE_NO_AUTHOR'	=> '已删除 %s 个没有有效作者的图像。',
	'LOG_CLEANUP_COMMENT_DELETE_NO_AUTHOR'	=> '已删除 %s 个没有有效作者的评论。',

	'MOVE_TO_IMPORT'	=> '将图像移动到导入目录',
	'MOVE_TO_USER'		=> '移动到用户',
	'MOVE_TO_USER_EXP'	=> '图像和评论将作为您定义的用户的图像和评论移动。如果未选择任何用户，则将使用匿名用户。',
	'CLEAN_USER_NOT_FOUND'	=> '您选择的用户不存在！',

	'GALLERY_CORE_NOT_FOUND'		=> '必须先安装并启用 phpBB Gallery Core 扩展。',
	'EXTENSION_ENABLE_SUCCESS'		=> '扩展已成功启用。',
]);