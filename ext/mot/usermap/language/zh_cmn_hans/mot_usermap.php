<?php
/**
*
* @package Usermap v1.2.0
* @copyright (c) 2020 - 2022 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	$lang = [];
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
$lang = array_merge($lang, [
	// Module
	'USERMAP'						=> '用户地图',
	'USERMAP_NOT_AUTHORIZED'		=> '您无权查看用户地图。',
	'USERMAP_SEARCHFORM'			=> '搜索表单',
	'USERMAP_LEGEND'				=> '图例',
	'USERMAP_CREDENTIALS'			=> '用户地图使用的地理参考数据由 提供 ',
	'USERMAP_LEGEND_TEXT'			=> '通过点击地图切换鼠标滚轮缩放',
	'MAP_USERS'						=> [
		0	=> '当前地图上没有显示成员。',
		1	=> '当前地图上显示 %1$d 个成员。',
		2	=> '当前地图上显示 %1$d 个成员。',
	],
	'POI_COUNT'						=> [
		0	=> '当前地图上没有显示POI。',
		1	=> '当前地图上显示 %1$d 个POI。',
		2	=> '当前地图上显示 %1$d 个POI。',
	],
	// Search tabs
	'TAB_RADIUS_SEARCH'				=> '在邮政编码附近搜索',
	'TAB_MEMBER_SEARCH'				=> '搜索成员',
	'TAB_POI_SEARCH'				=> '搜索POI',
	'TAB_ADDRESS_SEARCH'			=> 'Google Maps搜索',
	'MAP_SEARCH'					=> '搜索邮政（邮编）%1$s 在范围内的成员 ',
	'MAP_RESULT'					=> '显示以下结果：',
	'MAP_NORESULT'					=> '在范围内找不到成员 ',
	'MAP_KM'						=> '公里',
	'MEMBERNAME_SEARCH'				=> '输入成员的用户名（通配符*可用）',
	'MEMBERNAME_RESULT'				=> '找到以下成员：',
	'MEMBERNAME_NORESULT'			=> '没有找到用户名符合您要求的成员。',
	'POINAME_SEARCH'				=> '输入POI的名称（通配符*可用）',
	'POINAME_RESULT'				=> '找到以下POI：',
	'POINAME_NORESULT'				=> '没有找到名称匹配您请求的POI。',
	'ADDRESS_SEARCH'				=> '输入您想要查找坐标的搜索词（例如地址）（例如创建POI）',
	'ADDRESS_RESULT'				=> '已找到搜索词，并在地图上用标记显示。',
	'ADDRESS_NORESULT'				=> '无法检索到与给定搜索词匹配的坐标。',
	// Legend
	'POI_LEGEND_TITLE'				=> 'POI图例',
	'STREET_DESC'					=> '街道地图',
	'TOPO_DESC'						=> '地形图',
	'SAT_DESC'						=> '卫星图像',
	// Permission overview
	'USERMAP_PERM_OVERVIEW'			=> '此页面的权限',
	'USERMAP_PERM_VIEW_ALWAYS'		=> '您<strong>可以</strong>始终查看成员。<br>',
	'USERMAP_PERM_VIEW_SUBSCRIBED'	=> '您<strong>可以</strong>仅在自己注册到用户地图时查看成员。<br>',
	'USERMAP_NO_VIEW_SUBSCRIBED'	=> '您<strong>无法</strong>查看成员。<br>',
	'USERMAP_PERM_VIEW_POI'			=> '您<strong>可以</strong>查看POI。<br>',
	'USERMAP_NO_VIEW_POI'			=> '您<strong>无法</strong>查看POI。<br>',
	'USERMAP_NO_ADD_POI'			=> '您<strong>无法</strong>创建POI。<br>',
	'USERMAP_PERM_ADD_POI'			=> '您<strong>可以</strong>无需版主批准即可创建POI。<br>',
	'USERMAP_PERM_ADD_POI_MOD'		=> '您<strong>可以</strong>创建需要版主批准的POI。<br>',
	// Error messages
	'USERMAP_GN_USER_ERROR'			=> '：Geonames用户不存在或未为此服务激活！',
	'USERMAP_NO_MATCH_FOUND'		=> '未找到与<strong>%1$s</strong>匹配的内容！',
	// User POI popup
	'POI_INPUT_EXPL'				=> '在此表单中，您可以创建新的POI。其坐标将从表单左侧地图上的标记采用。
										此标记是可拖拽的，您可以使用鼠标将其移动到最终目的地。其名称、描述以及稍后表示标记的图标
										可以在以下表单字段中输入或选择。',
	'POI_NEW_SAVED'					=> '创建的POI已成功保存到数据库并在地图上显示。',
	'POI_MOD_NOTIFIED'				=> '创建的POI已成功保存到数据库，版主已收到通知等待批准。',
	'ACP_USERMAP_POI_NAME'			=> 'POI名称',
	'ACP_USERMAP_POI_NAME_EXP'		=> '此POI的名称，当鼠标指针移到POI标记上时显示为工具提示气泡。',
	'ACP_USERMAP_POI_POPUP'			=> 'POI描述',
	'ACP_USERMAP_POI_POPUP_EXP'		=> '此POI的描述，最多可使用500个字符，可以包含BBCode。<br>
										当用鼠标指针点击POI标记时，此文本显示在弹出气泡中。',
	'ACP_USERMAP_POI_ICON'			=> '图标文件',
	'ACP_USERMAP_POI_ICON_EXP'		=> '为了便于对POI进行基本分类，您可以从不同颜色的标记图标中选择。',
	'ACP_USERMAP_POI_SIZE'			=> '图标大小',
	'ACP_USERMAP_POI_SIZE_EXP'		=> '图标大小，以像素为单位，表示法为"宽度","高度"。<br>
										初始值是在"设置"选项卡中给出的默认大小。',
	'ACP_USERMAP_POI_ANCHOR'		=> '图标锚点',
	'ACP_USERMAP_POI_ANCHOR_EXP'	=> '从左上角开始的像素图标锚点，表示法为"水平值","垂直值"。<br>
										初始值是在"设置"选项卡中给出的默认值。',
	'ACP_USERMAP_DATABASE_LAT'		=> '纬度',
	'ACP_USERMAP_DATABASE_LNG'		=> '经度',
	'ACP_USERMAP_POI_LAYER'			=> '地图叠加层',
	'ACP_USERMAP_POI_LAYER_EXP'		=> '选择将在其上显示此POI的地图叠加层。',
	'ACP_USERMAP_DATABASE_SUCCESS'	=> '内部数据库的更改已成功保存。',
	'ACP_USERMAP_CONFIRM_DELETE'	=> '您真的确定要从数据库中删除此项目吗？<br>
										<strong>这将永久从数据库中删除该项目且无法撤消！</strong>',
	'USERMAP_POI_NAME_ERROR'		=> '字段 >%1$s< 不得为空！',
	// Notifications
	'NOTIFICATION_USERMAP_MOD'		=> '用户地图的审核通知',
	'USERMAP_SETTING_APPROVE'		=> '最近创建的POI正在等待批准',
	'USERMAP_SETTING_NOTIFY'		=> '有人向用户地图添加了新的POI',
	'USERMAP_NOTIFY_POI_APPROVE'	=> '<strong>新POI正在等待批准</strong><br>用户"%2$s"创建的名为"„<strong>%1$s</strong>"的新POI正在等待批准。',
	'USERMAP_NOTIFY_POI'			=> '<strong>已添加POI</strong><br>用户"%2$s"向用户地图添加了一个名为"„<strong>%1$s</strong>"的新POI。',
	// Moderation
	'POI_MOD_EXPL'					=> '您可以在此处检查用户创建的新POI的数据，并在必要时或出于其他原因对其进行编辑。
										您可以通过用鼠标拖拽来定位标记。完成此过程后，您可以保存POI（并批准它）或删除它（如果不符合您的论坛政策）。',
	'USERMAP_MOD_NOT_AUTHORIZED'	=> '<strong>您无权执行此活动！</strong>',
	'POI_NONEXISTENT'				=> 'POI不存在',
	'POI_ALREADY_APPROVED'			=> '此POI已被批准！',
	'APPROVE'						=> '批准',
	'DONE'							=> '完成',
	'POI_APPROVED'					=> 'POI已成功批准。',
	'ACTION_CONCLUDED'				=> '活动结束。',
	'CHANGES_SUCCESSFUL'			=> '可能的更改已成功保存。',
	'BACK_TO_USERMAP'				=> '转到用户地图',
	// UCP
	'MOT_ZIP'						=> '邮政编码/邮编',
	'MOT_ZIP_EXP'					=> '请输入您所在位置的邮政编码/邮编，以便在用户地图上列出。<br>（仅限大写字母、数字和破折号/连字符）',
	'MOT_LAND'						=> '国家',
	'MOT_LAND_EXP'					=> '请选择您居住的国家，以便在用户地图上列出。',
	'MOT_UCP_GEONAMES_ERROR'		=> '管理员未提供Geonames.org用户，因此无法检索用户地图数据！',
	// Log entries
	'LOG_USERMAP_SETTING_UPDATED'	=> '<strong>用户地图设置已更改</strong>',
	'LOG_POI_LEGEND_UPDATED'		=> '<strong>编辑了POI图例</strong>',
	'LOG_USERMAP_INSTALL_LANG'		=> '<strong>向用户地图添加了语言包：</strong><br>» %s',
	'LOG_USERMAP_ZIPCODE_NEW'		=> '<strong>向用户地图添加了新的数据库条目：</strong><br>» %s',
	'LOG_USERMAP_ZIPCODE_DELETED'	=> '<strong>从用户地图删除了数据库条目：</strong><br>» %s',
	'LOG_USERMAP_ZIPCODE_EDIT'		=> '<strong>编辑了用户地图的数据库条目：</strong><br>» %s',
	'LOG_USERMAP_POI_NEW'			=> '<strong>向用户地图添加了新的POI：</strong><br>» %s',
	'LOG_USERMAP_POI_EDITED'		=> '<strong>更改了POI数据：</strong><br>» %s',
	'LOG_USERMAP_GOOGLE_ERROR'		=> '<strong>Google Maps API执行失败，出现以下错误消息：</strong><br>» %s',
	'LOG_USERMAP_GEONAMES_ERROR'	=> '<strong>Geonames API执行失败，出现以下错误消息：</strong><br>» %s',
	'LOG_USERMAP_POI_DELETED'		=> '<strong>从用户地图删除了POI：</strong><br>» %s',
	'LOG_USERMAP_POI_APPROVED'		=> '<strong>用户创建的POI已获批准：</strong><br>» %s',
	'LOG_USERMAP_POI_MOD_DELETED'	=> '<strong>删除了用户创建的POI：</strong><br>» %s',
	// Profile
	'USERMAP_PROFILE_LINK'			=> '<strong>在用户地图上显示此成员</strong>',
]);