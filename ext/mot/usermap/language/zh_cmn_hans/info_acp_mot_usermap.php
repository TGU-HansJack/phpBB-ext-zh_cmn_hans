<?php
/**
*
* @package Usermap v1.2.5
* @copyright (c) 2020 - 2024 Mike-on-Tour
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
	// ACP
	'ACP_USERMAP'						=> '用户地图',
	'ACP_USERMAP_VERSION'				=> '<img src="https://img.shields.io/badge/Version-%1$s-green.svg?style=plastic"><br>&copy; 2020 - %2$d by Mike-on-Tour',
	'ACP_SUPPORT_USERMAP'				=> '如果您想捐赠支持Usermap的发展，请使用此链接：<br>',
	'ACP_USERMAP_PAYPAL_TITLE'			=> 'PayPal - 更安全、更便捷的在线支付方式！',
	'ACP_USERMAP_PAYPAL_ALT'			=> '使用PayPal按钮捐赠',

	// Settings tab
	'ACP_USERMAP_SETTINGS'				=> '设置',
	'ACP_USERMAP_SETTINGS_EXPLAIN'		=> '您可以在这里自定义用户地图。',
	'ACP_USERMAP_ALLOW_URL_FOPEN'		=> 'PHP选项 `allow_url_fopen` 已禁用！Usermap正常运行必须启用该选项！',
	'ACP_USERMAP_SETTING_SAVED'			=> '用户地图设置已成功保存。',
	'ACP_USERMAP_GENERAL_SETTINGS'		=> '常规设置',
	'ACP_USERMAP_ROWS_PER_PAGE'			=> '每页表格行数',
	'ACP_USERMAP_ROWS_PER_PAGE_EXP'		=> '选择在其他标签页中每页显示的表格行数。',
	'ACP_USERMAP_MAPSETTING_TITLE'		=> '地图设置',
	'ACP_USERMAP_MAPSETTING_TEXT'		=> '用户地图开始时的地图中心和缩放级别。',
	'ACP_USERMAP_LAT'					=> '地图中心纬度',
	'ACP_USERMAP_LAT_EXP'				=> '数值介于90.0°（北极）和-90.0°（南极）之间',
	'ACP_USERMAP_LON'					=> '地图中心经度',
	'ACP_USERMAP_LON_EXP'				=> '数值介于180.0°（东经）和-180.0°（西经）之间',
	'ACP_USERMAP_ZOOM'					=> '用户地图初始缩放级别',
	'ACP_USERMAP_MARKERS_TEXT'			=> '您可以分别为计算机屏幕（台式机、笔记本、平板电脑）和移动设备（手机）上的显示选择标记用户位置的标记大小。<br>
											大小以像素为单位输入，表示用作标记的圆的半径。',
	'ACP_USERMAP_MARKERS_PC'			=> '计算机屏幕上圆的半径',
	'ACP_USERMAP_MARKERS_MOB'			=> '移动设备显示屏上的圆半径',
	'ACP_USERMAP_GEONAMES_TITLE'		=> 'geonames.org用户名',
	'ACP_USERMAP_GEONAMES_TEXT'			=> '用户地图依靠geonames.org的服务获取通过邮政编码（邮编）和国家确定的成员位置的地理坐标，以及成员个人资料中提供的位置。
											因此必须在%1$s注册。此处必须输入注册的用户名。<br>
											每个请求消耗1个积分，免费网络服务限制为每小时最多1000个积分；如果您运营的论坛成员超过1000人，
											建议每1000-1500名成员注册一个用户名。否则您的用户在输入个人资料数据（邮政编码和国家）时可能会遇到错误消息。<br>
											多个用户名需用逗号分隔。<br>
											<strong>注意：</strong>首次登录geonames.org后，您必须启用（激活）所需的服务，使用此%2$s链接</span></a>！！',
	'ACP_USERMAP_GEONAMESUSER'			=> 'geonames.org用户名',
	'ACP_USERMAP_GEONAMESUSER_ERR'		=> '必须至少提供一个有效的geonames.org用户名！',
	'ACP_USERMAP_PROFILE_ERROR'			=> '由于您未在用户地图设置选项卡中提供Geonames.org用户，此操作无法成功完成。请立即提供！',
	'ACP_USERMAP_GOOGLE_TITLE'			=> '使用Google Maps API的设置',
	'ACP_USERMAP_GOOGLE_TEXT'			=> 'geonames.org仅支持有限的国家列表（请参见%1$s此处</span></a>的列表），
											如果需要考虑此列表之外的国家，您可能希望额外使用Google Maps服务。
											可以在此处启用使用Google Maps服务。<br>
											如果您选择使用Google Maps服务，则需要通过订阅%2$sGoogle Maps API密钥</span></a>来获取API密钥。
											请按照那里的说明操作，并注意激活"地理编码API"。',
	'ACP_USERMAP_GOOGLE_ENABLE'			=> '启用Google Maps API的使用？',
	'ACP_USERMAP_GOOGLE_KEY'			=> '请输入您的Google Maps API密钥',
	'ACP_USERMAP_APIKEY_ERROR'			=> '激活此API后，由于您未提供Google Maps API密钥，此操作无法成功完成。请提供有效密钥！',
	'ACP_USERMAP_GOOGLE_FORCE'			=> '强制使用Google Maps API查找的国家代码',
	'ACP_USERMAP_GOOGLE_FORCE_TXT'		=> '出于版权原因，对于某些国家，geonames.org仅考虑邮政编码的部分内容，这导致坐标非常近似。
											有关这些国家的列表，请参阅%1$s此</span></a>文本。<br>
											Google Maps API应该为这些国家提供更详细的结果。如果您希望强制在Google Maps API而不是geonames.org上查找，
											请输入要用逗号分隔的所需国家的两个字母国家代码。',
	'ACP_USERMAP_DATABASE_TITLE'		=> '使用内部数据库',
	'ACP_USERMAP_DATABASE_TEXT'			=> '即使使用Google Maps，某些国家（例如以色列）也可能无法提供有效的解决方案。在这种情况下，您可以使用内部数据库，
											您必须提供数据，请选择"内部数据库"选项卡以获取更多信息。<br>
											如果您不想使用Google Maps API，也可以通过这种方式为geonames.org不支持的国家用户提供服务。',
	'ACP_USERMAP_DATABASE_ENABLE'		=> '启用内部数据库的使用？',
	'ACP_USERMAP_POI_TITLE'				=> '显示兴趣点（POI）',
	'ACP_USERMAP_POI_TEXT'				=> '除了显示成员位置外，用户地图还能够显示其他可能对您的成员特别感兴趣的覆盖层，
											例如摩托车手的聚会场所和酒店或体育场馆的位置。
											您可以在此部分中选择此覆盖层的设置。<br>
											以下部分允许您编写和编辑定义不同POI类别的含义的描述，
											这些描述将作为图例显示在地图下方。<br>
											输入和编辑您的POI是管理员的任务，所有必要的元素都可以通过"POI处理"选项卡访问。',
	'ACP_USERMAP_POI_ENABLE'			=> '启用POI显示？',
	'ACP_USERMAP_POI_ENABLE_EXP'		=> '选择"是"可启用用户地图上的POI覆盖显示。它还会激活您对以下设置的选择，
											并在图例中显示您可以编写和编辑的部分。',
	'ACP_USERMAP_ICON_TITLE'			=> 'POI图标默认值',
	'ACP_USERMAP_ICON_TEXT'				=> '您可以更改POI图标的默认大小和锚点值。预选的是随用户地图一起提供的图标的值。
											或者，如果您想使用自己的图标，可以在此处输入其默认值。<br>
											有关更多信息，请参阅"docs"目录中包含的"ICONS.md"文件。',
	'ACP_USERMAP_ICONSIZE_EXP'			=> '图标大小，以像素为单位，表示法为"宽度","高度"。',
	'ACP_USERMAP_ICONANCHOR_EXP'		=> '从左上角开始的像素图标锚点，表示法为"水平值","垂直值"。',
	'ACP_USERMAP_POI_LEGEND'			=> 'POI图例',
	'ACP_USERMAP_POI_LGND'				=> '编写和编辑POI图例',
	'ACP_USERMAP_POI_LGND_EXP'			=> '您在此处输入的文本不得超过1000个字符（包括所有BBCode），如果启用了POI显示，将作为图例显示在用户地图下方。<br>
											编写和编辑独立于此选项卡上的所有其他设置。',
	// Language packs tab
	'ACP_USERMAP_LANGS'					=> '语言包',
	'ACP_USERMAP_LANGS_EXPLAIN'			=> '您可以在此处为用户地图安装其他语言包。在首次激活后向用户地图添加语言包时，
											这可能是必需的，因为它们的数据尚未包含在用于选择国家/地区的下拉列表中；
											您可以在通过ftp程序将语言包装入此扩展的<i>language</i>子目录后在此处进行安装。',
	'ACP_USERMAP_INSTALLABLE_LANG'		=> '准备安装的语言包',
	'ACP_USERMAP_INSTALL_LANG_EXP'		=> '等待安装的用户地图语言包。',
	'ACP_USERMAP_MISSING_LANG'			=> '缺失的语言包',
	'ACP_USERMAP_MISSING_LANG_EXP'		=> '在论坛中已安装但在用户地图扩展中缺失的语言。',
	'ACP_USERMAP_ADDITIONAL_LANG'		=> '用户地图的附加语言包',
	'ACP_USERMAP_ADD_LANG_EXP'			=> '论坛中不存在对应语言的扩展语言包。',
	'ACP_USERMAP_LANGPACK_NAME'			=> '名称',
	'ACP_USERMAP_LANGPACK_LOCAL'		=> '本地名称',
	'ACP_USERMAP_LANGPACK_ISO'			=> 'ISO',
	'ACP_USERMAP_NO_ENTRIES'			=> '未找到语言包',
	// Internal database tab
	'ACP_USERMAP_DATABASE'				=> '内部数据库',
	'ACP_USERMAP_DATABASE_EXPLAIN'		=> '此表包含您先前输入的所有国家/邮政编码组合及其相应坐标的數據。
											在最右列中，您可以找到删除相应行的链接。<br>
											在此表下方，您可以添加新数据。',
	'ACP_USERMAP_DATABASE_DATA'			=> '当前可用数据',
	'ACP_USERMAP_DATABASE_CC'			=> 'ISO国家代码',
	'ACP_USERMAP_DATABASE_ZIPCODE'		=> '邮政编码',
	'ACP_USERMAP_DATABASE_NAME'			=> '位置名称',
	'ACP_USERMAP_DATABASE_EDIT'			=> '编辑数据库项目',
	'ACP_USERMAP_DATABASE_NOENTRY'		=> '无可用数据',
	'ACP_USERMAP_DATABASE_NEW'			=> '向数据库中输入新项目',
	'ACP_USERMAP_DATABASE_CC_EXP'		=> '请输入要分配给此条目的国家的大写2字母国家代码。',
	'ACP_USERMAP_DATABASE_ZC_EXP'		=> '请输入要分配给此条目的邮政（邮编）代码，只允许大写字母、数字和连字符（破折号）。',
	'ACP_USERMAP_DATABASE_NAME_EXP'		=> '您可以输入一个名称来更好地识别和区分此位置。',
	'ACP_USERMAP_DATABASE_ERROR'		=> '字段 >%1$s< 不得为空！',
	'ACP_USERMAP_DATABASE_BIG_ERR'		=> '字段不得为空！',
	'ACP_USERMAP_DATABASE_INVALID'		=> '此国家代码和邮政（邮编）代码组合已存在，不得重复使用！<br>
											保存此输入到内部数据库失败！',
	// POI tab
	'ACP_USERMAP_POI'					=> 'POI处理',
	'ACP_USERMAP_POI_EXPLAIN'			=> '在此表中列出了迄今为止输入到数据库中的所有POI。<br>
											在此表下方，您可以插入新条目，此外，在选择每行最后一列中的<i>编辑</i>链接后，
											您可以在此处编辑现有条目。<br>
											通过选择<i>删除</i>链接，您可以从数据库中删除条目。',
	'ACP_USERMAP_POI_DATA'				=> '当前可用的POI条目',
	'ACP_USERMAP_SELECT_POI_LAYER'		=> '叠加选择',
	'ACP_USERMAP_POI_LAYER_ALL'			=> '全部',
	'ACP_USERMAP_POI_CREATOR'			=> '创建者',
	'ACP_USERMAP_POI_VISIBLE'			=> 'POI可见',
	'ACP_USERMAP_POI_VISIBLE_EXP'		=> '选择此POI是否应在选定的地图叠加层上可见。',
	'ACP_USERMAP_POI_NEW'				=> '输入新的POI',
	'ACP_USERMAP_POI_EDIT'				=> '编辑选定的POI',
	'ACP_USERMAP_POI_SUCCESS'			=> '名为"„<strong>%1$s</strong>"的POI已成功存储。',
	'ACP_USERMAP_POI_DELETE'			=> '您真的确定要从数据库中删除名为"„<strong>%1$s</strong>"的POI吗？<br>
											<strong>这将永久从数据库中删除POI，且无法撤消！</strong>',
	'ACP_USERMAP_POI_DEL_SUCCESS'		=> '名为"„<strong>%1$s</strong>"的POI已从数据库中删除。',
	'ACP_ERR_POI_NO_NAME'				=> '"POI名称"输入字段不得为空！',
	'ACP_ERR_POI_NO_LAT'				=> '"纬度"输入字段不得为空！',
	'ACP_ERR_POI_NO_LNG'				=> '"经度"输入字段不得为空！',
	// Layer tab
	'ACP_USERMAP_LAYER'					=> '地图叠加层',
	'ACP_USERMAP_LAYER_EXPLAIN'			=> '所有现有的地图叠加层都在此表中列出。<br>
											在表格下方的部分中，您可以通过点击相应表格行的"编辑"链接来创建新的地图叠加层或编辑现有地图叠加层。
											所选地图叠加层的当前数据将在此部分中显示。<br>
											您可以使用表格中的相应链接删除该项目。',
	'ACP_USERMAP_LAYER_SELECT_TYPE'		=> '选择要显示的叠加层类型',
	'ACP_USERMAP_LAYER_DATA'			=> '现有的地图叠加层',
	'ACP_USERMAP_LAYER_NAME'			=> '叠加层名称',
	'ACP_USERMAP_LAYER_NAME_EXP'		=> '输入一个名称来标识此地图叠加层。',
	'ACP_USERMAP_LAYER_TYPE_USER'		=> '用户',
	'ACP_USERMAP_LAYER_TYPE_POI'		=> 'POI',
	'ACP_USERMAP_LAYER_ACTIVE'			=> '激活叠加层',
	'ACP_USERMAP_LAYER_ACTIVE_EXP'		=> '选择"是"以激活此地图叠加层并使其可用于在其上放置标记。非活动的地图叠加层不可选择显示。',
	'ACP_USERMAP_SHOW_LAYER'			=> '永久显示',
	'ACP_USERMAP_SHOW_LAYER_EXP'		=> '选择"是"以始终显示此地图叠加层，从调用用户地图开始。<br>
											如果选择"否"，用户需要通过地图的图层控制元素选择此地图叠加层。',
	'ACP_USERMAP_LAYER_CLUSTERS'		=> '聚类标记',
	'ACP_USERMAP_LAYER_CLUSTERS_EXP'	=> '为了避免地图因大量标记而混乱，您可以激活此设置来构建标记集群。
											这些集群会随着缩放而变化。',
	'ACP_USERMAP_LAYER_LANG_VAR'		=> '语言变量',
	'ACP_USERMAP_LAYER_LANG_VAR_EXP'	=> '为了让您的用户能够以他们的母语识别地图叠加层，请在此处为板上安装的每种语言输入一个术语来标识此叠加层中的图层控件元素，
											例如"Campgrounds"作为标识呈现露营地的地图叠加层的术语。<br>
											请确保使用有效的语言标签（请参阅ACP语言包表"自定义"选项卡上的"ISO"列），
											后跟冒号和您想要的语言术语，以确保系统可以使用您的输入。<br>
											<strong>%1$s示例：</span></strong>"en:Campgrounds"<br>
											每种语言标签和语言术语的组合必须使用自己的行！<br>
											<strong>%1$s注意：必须有语言变量"en"行！</span></strong>',
	'ACP_USERMAP_LAYER_DEFAULTICON'		=> '默认图标',
	'ACP_USERMAP_LAYER_ICON_EXP'		=> '选择将用作此地图叠加层默认值的图标文件。此选择将针对在此叠加层上创建的所有POI呈现。',
	'ACP_USERMAP_GROUPS_VIEWING'		=> '允许的组',
	'ACP_USERMAP_PERMITTED_GROUPS'		=> '允许查看此叠加层的组',
	'ACP_USERMAP_PERMITTED_GROUPS_EXP'	=> '只有具有查看成员权限时才显示成员地图叠加层，只有激活POI并授予查看POI权限时才显示POI地图叠加层。<br>
											通过此设置，您可以进一步将各个叠加层的显示限制为持有这些权限的一个或多个默认组，
											通过选择应该能够看到某个叠加层的默认组。<br>
											要选择多个组，请在单击所需组时按住Shift或Ctrl键。',
	'ACP_USERMAP_LAYER_NEW'				=> '创建新的地图叠加层',
	'ACP_USERMAP_LAYER_EDIT'			=> '编辑现有地图叠加层',
	'ACP_USERMAP_LAYER_SUCCESS'			=> '名为"„<strong>%1$s</strong>"的地图叠加层已成功存储。',
	'ACP_USERMAP_LAYER_DELETE'			=> '您真的确定要从数据库中删除名为"„<strong>%1$s</strong>"的地图叠加层吗？<br>
											分配给此地图叠加层的所有POI将不再显示！<br>
											<strong>这将永久从数据库中删除地图叠加层，且无法撤消！</strong>',
	'ACP_USERMAP_LAYER_DEL_SUCCESS'		=> '名为"„<strong>%1$s</strong>"的地图叠加层已从数据库中删除。',
	'ACP_ERR_LAYER_NO_NAME'				=> '"叠加层名称"输入字段不得为空！',
	'ACP_ERR_LAYER_NO_LANG'				=> '"语言变量"输入字段不得为空！',
	'ACP_ERR_LAYER_INCORRECT'			=> '此语言变量不符合规则：',
	'ACP_ERR_LAYER_NO_EN'				=> '缺少语言变量"en"！',
	// Route tab
	'ACP_USERMAP_ROUTE'					=> '路线',
	// Logs
	'LOG_USERMAP_LAYER_NEW'				=> '<strong>已向用户地图添加新的地图叠加层：</strong><br>» %s',
	'LOG_USERMAP_LAYER_EDITED'			=> '<strong>编辑了地图叠加层：</strong><br>» %s',
	'LOG_USERMAP_LAYER_DELETED'			=> '<strong>从用户地图中删除了地图叠加层：</strong><br>» %s'
]);