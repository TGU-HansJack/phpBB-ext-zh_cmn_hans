<?php
/**
*
* @package Board3 Portal v2.3 - Calendar
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
	'PORTAL_CALENDAR'			=> '日历',
	'VIEW_NEXT_MONTH'		=> '下个月',
	'VIEW_PREVIOUS_MONTH'	=> '上个月',
	'EVENT_START'			=> '从',
	'EVENT_END'				=> '到',
	'EVENT_TIME'			=> '时间',
	'EVENT_ALL_DAY'			=> '全天事件',
	'CURRENT_EVENTS'		=> '当前事件',
	'NO_CUR_EVENTS'			=> '没有当前事件',
	'UPCOMING_EVENTS'		=> '即将到来的事件',
	'NO_UPCOMING_EVENTS'	=> '没有即将到来的事件',

	'mini_cal'	=> array(
		'day'	=> array(
			'1'	=> '周日',
			'2'	=> '周一',
			'3'	=> '周二',
			'4'	=> '周三',
			'5'	=> '周四',
			'6'	=> '周五',
			'7'	=> '周六',
		),

		'month'	=> array(
			'1'	=> '1月',
			'2'	=> '2月',
			'3'	=> '3月',
			'4'	=> '4月',
			'5'	=> '5月',
			'6'	=> '6月',
			'7'	=> '7月',
			'8'	=> '8月',
			'9'	=> '9月',
			'10'=> '10月',
			'11'=> '11月',
			'12'=> '12月',
		),

		'long_month'=> array(
			'1'	=> '一月',
			'2'	=> '二月',
			'3'	=> '三月',
			'4'	=> '四月',
			'5'	=> '五月',
			'6'	=> '六月',
			'7'	=> '七月',
			'8'	=> '八月',
			'9'	=> '九月',
			'10'=> '十月',
			'11'=> '十一月',
			'12'=> '十二月',
		),
	),

	// ACP
	'ACP_PORTAL_CALENDAR'					=> '日历设置',
	'ACP_PORTAL_CALENDAR_EXP'				=> '您可以在此自定义日历模块。',
	'ACP_PORTAL_EVENTS'						=> '日历事件',
	'PORTAL_CALENDAR_TODAY_COLOR'			=> '活动日期颜色',
	'PORTAL_CALENDAR_TODAY_COLOR_EXP'	=> '允许使用十六进制或命名颜色，例如 #FFFFFF 表示白色，或使用颜色名称如 violet。',
	'PORTAL_CALENDAR_SUNDAY_COLOR'			=> '星期日颜色',
	'PORTAL_CALENDAR_SUNDAY_COLOR_EXP'	=> '允许使用十六进制或命名颜色，例如 #FFFFFF 表示白色，或使用颜色名称如 violet。',
	'PORTAL_LONG_MONTH'						=> '显示完整月份名称',
	'PORTAL_LONG_MONTH_EXP'				=> '如果禁用，月份将被缩短，例如 8月 而不是 八月。',
	'PORTAL_SUNDAY_FIRST'					=> '一周的第一天',
	'PORTAL_SUNDAY_FIRST_EXP'			=> '如果禁用，日历将显示 周一 --> 周日，否则显示 周日 --> 周六。',
	'PORTAL_DISPLAY_EVENTS'					=> '显示事件',
	'PORTAL_DISPLAY_EVENTS_EXP'				=> '显示在日历模块中创建的事件',
	'PORTAL_EVENTS_MANAGE'					=> '管理事件',
	'NO_EVENT_TITLE'						=> '您尚未指定事件的标题。',
	'NO_EVENT_START'						=> '您尚未指定事件的开始时间。',
	'ADD_EVENT'								=> '添加新事件',
	'EVENT_UPDATED'							=> '事件更新成功。',
	'EVENT_ADDED'							=> '事件添加成功。',
	'NO_EVENT'								=> '未指定事件。',
	'EVENT_TITLE'							=> '事件标题',
	'EVENT_DESC'							=> '事件描述',
	'EVENT_LINK'							=> '事件链接',
	'EVENT_LINK_EXP'						=> '输入指向事件公告或讨论主题的链接。',
	'NO_EVENTS'								=> '没有事件',
	'ACP_PORTAL_CALENDAR_START_INCORRECT'	=> '您输入的开始时间不正确。请仔细按照说明操作。',
	'ACP_PORTAL_CALENDAR_END_INCORRECT'		=> '您输入的结束时间不正确。请仔细按照说明操作。',
	'ACP_PORTAL_CALENDAR_EVENT_PAST'		=> '事件开始时间必须在未来。',
	'ACP_PORTAL_EVENT_START_DATE'			=> '事件开始日期',
	'ACP_PORTAL_EVENT_START_DATE_EXP'		=> '输入事件开始的日期和时间。日期格式必须类似：MM/DD/YYYY 3:00 PM',
	'ACP_PORTAL_EVENT_END_DATE'			=> '事件结束日期',
	'ACP_PORTAL_EVENT_END_DATE_EXP'			=> '输入事件结束的日期和时间。日期格式必须类似：MM/DD/YYYY 3:00 PM',
	'ACP_PORTAL_CALENDAR_EVENT_START_FIRST'	=> '事件结束时间必须在事件开始时间之后。',
	'ACP_PORTAL_CALENDAR_PERMISSION'		=> '事件权限',
	'ACP_PORTAL_CALENDAR_PERMISSION_EXP'	=> '选择有权查看事件的组。如果您希望所有用户都能查看事件，请不要选择任何内容。<br />通过按住<samp>CTRL</samp>键并点击可以选择/取消选择多个组。',
	'PORTAL_EVENTS_URL_NEW_WINDOW'			=> '在新窗口中打开外部事件链接',

	// Logs
	'LOG_PORTAL_EVENT_UPDATED'				=> '<strong>更新事件</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_ADDED'				=> '<strong>添加事件</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_REMOVED'				=> '<strong>删除事件</strong><br />&raquo; %s',
));