<?php
/**
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'ACP_GALLERY_MCP'				=> '画廊版主控制面板',
	'ACP_GALLERY_MCP_EXPLAIN'		=> '您可以在此执行画廊的版主操作。',

	'CHOOSE_ALBUM'					=> '选择相册',
	'CHOOSE_IMAGE'					=> '选择图像',
	'DELETE_IMAGE'					=> '删除图像',
	'DELETE_IMAGE_CONFIRM'			=> '您确定要删除图像 "%s" 吗？',
	'DELETE_IMAGES'					=> '删除图像',
	'DELETE_IMAGES_CONFIRM'			=> '您确定要删除这些图像吗？',
	'DELETE_PERMISSIONS'			=> '删除权限',
	'DELETE_PERMISSIONS_CONFIRM'	=> '您确定要删除这些权限吗？',

	'EDIT_IMAGE'					=> '编辑图像',

	'GALLERY_MCP_LOGS'				=> '画廊版主日志',
	'GALLERY_MCP_LOGS_EXPLAIN'		=> '此列表显示所有画廊版主操作。',

	'IMAGE_DELETED'					=> '图像已成功删除',
	'IMAGE_MOVED'					=> '图像已成功移动',
	'IMAGE_REPORTED'				=> '图像已成功举报',
	'IMAGE_UNAPPROVED'				=> '图像未获批准',
	'IMAGE_APPROVED'				=> '图像已批准',
	'IMAGE_LOCKED'					=> '图像已锁定',
	'IMAGE_UNLOCKED'				=> '图像已解锁',
	'IMAGE_DISAPPROVED'				=> '图像已否决',
	'IMAGE_REMOVED'					=> '图像已移除',

	'IMAGES_DELETED'				=> '图像已成功删除',
	'IMAGES_MOVED'					=> '图像已成功移动',
	'IMAGES_REPORTED'				=> '图像已成功举报',
	'IMAGES_UNAPPROVED'				=> '图像未获批准',
	'IMAGES_APPROVED'				=> '图像已批准',
	'IMAGES_LOCKED'					=> '图像已锁定',
	'IMAGES_UNLOCKED'				=> '图像已解锁',
	'IMAGES_DISAPPROVED'			=> '图像已否决',
	'IMAGES_REMOVED'				=> '图像已移除',

	'NO_ALBUM_SELECTED'				=> '您必须选择至少一个相册',
	'NO_IMAGE_SELECTED'				=> '您必须选择至少一个图像',
	'NO_IMAGES_SELECTED'			=> '您必须选择至少一个图像',
	'NO_PERMISSIONS_SELECTED'		=> '您必须选择至少一个权限',

	'PERMISSIONS_DELETED'			=> '权限已成功删除',
	'PERMISSIONS_NOT_DELETED'		=> '权限未删除（未知错误）',

	'REPORT_DELETED'				=> '举报已成功删除',
	'REPORT_NOT_DELETED'			=> '举报未删除（未知错误）',

	'REPORTS_DELETED'				=> '举报已成功删除',
	'REPORTS_NOT_DELETED'			=> '举报未删除（未知错误）',

	'SORT_ALBUM'					=> '相册',
	'SORT_AUTHOR'					=> '作者',
	'SORT_DATE'						=> '日期',
	'SORT_IMAGE'					=> '图像标题',
	'SORT_LOCKED'					=> '锁定状态',
	'SORT_RATING'					=> '评分',
	'SORT_REPORTS'					=> '举报数',
	'SORT_UNAPPROVED'				=> '未批准状态',
	'SORT_VIEW'						=> '查看次数',

	'UNLOCK_IMAGE'					=> '解锁图像',
	'UNLOCK_IMAGES'					=> '解锁图像',

	'CHOOSE_ACTION'					=> '选择所需操作',

	'GALLERY_MCP_MAIN'				=> '主要',
	'GALLERY_MCP_OVERVIEW'			=> '概述',
	'GALLERY_MCP_QUEUE'				=> '队列',
	'GALLERY_MCP_QUEUE_DETAIL'		=> '图像详情',
	'GALLERY_MCP_REPORTED'			=> '已举报图像',
	'GALLERY_MCP_REPO_DONE'			=> '已关闭举报',
	'GALLERY_MCP_REPO_OPEN'			=> '未处理举报',
	'GALLERY_MCP_REPO_DETAIL'		=> '举报详情',
	'GALLERY_MCP_UNAPPROVED'		=> '等待批准的图像',
	'GALLERY_MCP_APPROVED'			=> '已批准图像',
	'GALLERY_MCP_LOCKED'			=> '已锁定图像',
	'GALLERY_MCP_VIEWALBUM'			=> '查看相册',
	'GALLERY_MCP_ALBUM_OVERVIEW'	=> '版主相册',

	'IMAGE_REPORTED'				=> '图像已被举报。',
	'IMAGE_UNAPPROVED'				=> '图像正在等待批准。',

	'MODERATE_ALBUM'				=> '版主相册',

	'LATEST_IMAGES_REPORTED'		=> '最新5个被举报的图像',
	'LATEST_IMAGES_UNAPPROVED'		=> '最新5个等待批准的图像',

	'QUEUE_A_APPROVE'				=> '批准图像',
	'QUEUE_A_APPROVE2'				=> '批准图像？',
	'QUEUE_A_APPROVE2_CONFIRM'		=> '您确定要批准此图像吗？',
	'QUEUE_A_DELETE'				=> '删除图像',
	'QUEUE_A_DELETE2'				=> '删除图像？',
	'QUEUE_A_DELETE2_CONFIRM'		=> '您确定要删除此图像吗？',
	'QUEUE_A_LOCK'					=> '锁定图像评论',
	'QUEUE_A_LOCK2'					=> '批准并锁定图像评论？',
	'QUEUE_A_LOCK2_CONFIRM'			=> '您确定要批准并阻止对此图像的评论吗？',
	'QUEUE_A_MOVE'					=> '移动图像',
	'QUEUE_A_UNAPPROVE'				=> '取消批准图像',
	'QUEUE_A_UNAPPROVE2'			=> '取消批准图像？',
	'QUEUE_A_UNAPPROVE2_CONFIRM'	=> '您确定要取消批准此图像吗？',

	'QUEUE_STATUS_0'				=> '图像正在等待批准。',
	'QUEUE_STATUS_1'				=> '图像已获批准。',
	'QUEUE_STATUS_2'				=> '图像已锁定。',

	'QUEUES_A_APPROVE'				=> '批准图像',
	'QUEUES_A_APPROVE2'				=> '批准图像？',
	'QUEUES_A_APPROVE2_CONFIRM'		=> '您确定要批准这些图像吗？',
	'QUEUES_A_DELETE'				=> '删除图像',
	'QUEUES_A_DELETE2'				=> '删除图像？',
	'QUEUES_A_DELETE2_CONFIRM'		=> '您确定要删除这些图像吗？',
	'QUEUES_A_LOCK'					=> '锁定图像',
	'QUEUES_A_LOCK2'				=> '锁定图像？',
	'QUEUES_A_LOCK2_CONFIRM'		=> '您确定要锁定这些图像吗？',
	'QUEUES_A_MOVE'					=> '移动图像',
	'QUEUES_A_UNAPPROVE'			=> '取消批准图像',
	'QUEUES_A_UNAPPROVE2'			=> '取消批准图像？',
	'QUEUES_A_UNAPPROVE2_CONFIRM'	=> '您确定要取消批准这些图像吗？',
	'QUEUES_A_DISAPPROVE2_CONFIRM'	=> '您确定要取消批准这些图像吗？',

	'REPORT_A_CLOSE'				=> '关闭举报',
	'REPORT_A_CLOSE2'				=> '关闭举报？',
	'REPORT_A_CLOSE2_CONFIRM'		=> '您确定要关闭此举报吗？',
	'REPORT_A_DELETE'				=> '删除举报',
	'REPORT_A_DELETE2'				=> '删除举报？',
	'REPORT_A_DELETE2_CONFIRM'		=> '您确定要删除此举报吗？',
	'REPORT_A_OPEN'					=> '开启举报',
	'REPORT_A_OPEN2'				=> '开启举报？',
	'REPORT_A_OPEN2_CONFIRM'		=> '您确定要开启此举报吗？',

	'REPORT_NOT_FOUND'				=> '找不到举报。',
	'REPORT_STATUS_1'				=> '举报需要审核。',
	'REPORT_STATUS_2'				=> '举报已关闭。',

	'REPORTS_A_CLOSE'				=> '关闭举报',
	'REPORTS_A_CLOSE2'				=> '关闭举报？',
	'REPORTS_A_CLOSE2_CONFIRM'		=> '您确定要关闭这些举报吗？',
	'REPORTS_A_DELETE'				=> '删除举报',
	'REPORTS_A_DELETE2'				=> '删除举报？',
	'REPORTS_A_DELETE2_CONFIRM'		=> '您确定要删除这些举报吗？',
	'REPORTS_A_OPEN'				=> '开启举报',
	'REPORTS_A_OPEN2'				=> '开启举报？',
	'REPORTS_A_OPEN2_CONFIRM'		=> '您确定要开启这些举报吗？',

	'REPORT_MOD'					=> '编辑者',
	'REPORT_CLOSED_BY'				=> '举报关闭者',
	'REPORTED_IMAGES'				=> '已举报图像',
	'REPORTER'						=> '举报用户',
	'REPORTER_AND_ALBUM'			=> '举报者和相册',

	'WAITING_APPROVED_IMAGE'		=> array(
		0			=> '没有图像被批准。',
		1			=> '总共<span style="font-weight: bold;">1</span>个图像被批准。',
		2			=> '总共<span style="font-weight: bold;">%s</span>个图像被批准。',
	),
	'WAITING_DISAPPROVED_IMAGE'		=> array(
		0			=> '没有图像被否决。',
		1			=> '总共<span style="font-weight: bold;">1</span>个图像被否决。',
		2			=> '总共<span style="font-weight: bold;">%s</span>个图像被否决。',
	),
	'WAITING_LOCKED_IMAGE'			=> array(
		0			=> '没有图像被锁定。',
		1			=> '总共<span style="font-weight: bold;">1</span>个图像被锁定。',
		2			=> '总共<span style="font-weight: bold;">%s</span>个图像被锁定。',
	),
	'WAITING_REPORTED_DONE'			=> array(
		0			=> '没有举报被审核。',
		1			=> '总共<span style="font-weight: bold;">1</span>个举报被审核。',
		2			=> '总共<span style="font-weight: bold;">%s</span>个举报被审核。',
	),
	'WAITING_REPORTED_IMAGE'		=> array(
		0			=> '没有举报需要审核。',
		1			=> '总共<span style="font-weight: bold;">1</span>个举报需要审核。',
		2			=> '总共<span style="font-weight: bold;">%s</span>个举报需要审核。',
	),
	'WAITING_UNAPPROVED_IMAGE'		=> array(
		0			=> '没有图像等待批准。',
		1			=> '总共<span style="font-weight: bold;">1</span>个图像等待批准。',
		2			=> '总共<span style="font-weight: bold;">%s</span>个图像等待批准。',
	),
	'DELETED_IMAGES'		=> array(
		0			=> '没有图像被删除。',
		1			=> '总共<span style="font-weight: bold;">1</span>个图像被删除。',
		2			=> '总共<span style="font-weight: bold;">%s</span>个图像被删除。',
	),
	'MOVED_IMAGES'		=> array(
		0			=> '没有图像被移动。',
		1			=> '总共<span style="font-weight: bold;">1</span>个图像被移动。',
		2			=> '总共<span style="font-weight: bold;">%s</span>个图像被移动。',
	),
	'NO_WAITING_UNAPPROVED_IMAGE'	=> '没有图像等待批准。',
));