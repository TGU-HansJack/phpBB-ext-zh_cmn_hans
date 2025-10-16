<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
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
	// Manage ads
	'AD_SETTINGS'				=> '广告设置',
	'ACTIVE_ADS'				=> '活跃广告',
	'EXPIRED_ADS'				=> '过期广告',
	'STATUS'					=> '状态',
	'AD_NAME'					=> '名称',
	'AD_NAME_EXPLAIN'			=> '名称仅用于帮助您识别此广告。',
	'AD_ENABLED'				=> '已启用',
	'AD_ENABLED_EXPLAIN'		=> '如果禁用，则不会显示此广告。',
	'AD_NOTE'					=> '备注',
	'AD_NOTE_EXPLAIN'			=> '为此广告输入任何备注。这些备注除了在ACP中之外不会显示在任何地方，是可选的。',
	'AD_CODE'					=> '代码',
	'AD_CODE_EXPLAIN'			=> '在此处输入广告代码。所有代码必须使用HTML标记，不支持BBCodes。<br><br>注意：如果您的广告代码放置Cookie、收集用户数据或跟踪用户行为（例如来自Google AdSense或其他第三方广告网络的广告），则应在<strong>广告管理设置</strong>面板中启用<strong>广告披露</strong>以确保合规性。如果您不确定，建议您启用它。',
	'ANALYSE_AD_CODE'			=> '分析广告代码',
	'EVERYTHING_OK'				=> '代码看起来正常。',
	'AD_BANNER'					=> '广告横幅',
	'BANNER'					=> '上传横幅',
	'BANNER_EXPLAIN'			=> '您可以上传JPG、GIF或PNG格式的图像。图像将存储在phpBB的<samp>images</samp>目录中，图像的HTML IMG标签将自动插入到广告代码字段中。',
	'BANNER_UPLOAD'				=> '上传横幅',
	'AD_PLACEMENT'				=> '广告位置',
	'AD_LOCATIONS'				=> '位置',
	'AD_LOCATIONS_EXPLAIN'		=> '选择要显示此广告的位置。将鼠标悬停在某个位置上可以查看其简短描述。如果多个广告使用相同的位置，每次将随机选择一个广告显示在该位置。使用CTRL+点击（或Mac上的CMD+点击）可以选择/取消选择多个位置。',
	'AD_LOCATIONS_VISUAL_DEMO'	=> '启动广告位置可视化演示',
	'VISUAL_DEMO_EXPLAIN'		=> '启动可视化演示，在新浏览器窗口中打开您的论坛，每个位置都有示例广告。只有您能看到演示，访问者会看到正常的论坛。查看完毕后必须停用演示（否则在您使用论坛时会持续显示）。每页都会显示"点击禁用可视化演示"按钮。',
	'AD_PRIORITY'				=> '优先级',
	'AD_PRIORITY_EXPLAIN'		=> '设置1到10之间的数字。当多个广告使用相同位置时，数值较高的广告会更频繁地显示。',
	'AD_CONTENT_ONLY'			=> '仅在内容页面显示',
	'AD_CONTENT_ONLY_EXPLAIN'	=> '此广告仅显示在包含内容的页面上。不会显示在UCP、登录、注册、发帖、回复等页面上。某些广告平台（例如Google AdSense）要求这样做。',
	'AD_OPTIONS'				=> '广告选项',
	'AD_OWNER'					=> '所有者',
	'AD_OWNER_EXPLAIN'			=> '分配广告所有者将允许您的论坛成员之一在其用户控制面板中查看此广告的浏览量和点击统计信息。将此字段留空表示不分配广告所有者。',
	'AD_VIEWS'					=> '浏览量',
	'AD_VIEWS_LIMIT'			=> '浏览次数限制',
	'AD_VIEWS_LIMIT_EXPLAIN'	=> '设置广告显示的最大次数，达到该次数后将不再显示广告。设为0表示无限制浏览。',
	'AD_CLICKS'					=> '点击量',
	'AD_CLICKS_LIMIT'			=> '点击次数限制',
	'AD_CLICKS_LIMIT_EXPLAIN'	=> '设置广告被点击的最大次数，达到该次数后将不再显示广告。设为0表示无限制点击。',
	'AD_START_DATE'				=> '开始日期',
	'AD_START_DATE_EXPLAIN'		=> '设置广告开始并启用的日期。如果不想让广告在未来自动开始，请将此字段留空。请使用<samp>YYYY-MM-DD</samp>格式。',
	'AD_END_DATE'				=> '结束日期',
	'AD_END_DATE_EXPLAIN'		=> '设置广告到期并禁用的日期。如果不想让广告过期，请将此字段留空。请使用<samp>YYYY-MM-DD</samp>格式。',
	'AD_CENTERING'				=> '自动居中此广告',
	'AD_CENTERING_EXPLAIN'		=> '设置为是让此扩展自动居中您的广告。如果导致不良结果，请直接在代码中使用CSS相应地居中您的广告。',

	'AD_PREVIEW'				=> '预览此广告',
	'AD_ENABLE_TITLE'			=> array( // Plural rule doesn't apply here! Just translate the values.
		0 => '点击启用',
		1 => '点击禁用',
	),
	'AD_EXPIRED_EXPLAIN'		=> '此广告已过期并已被禁用。',
	'ACP_ADS_EMPTY'				=> '没有广告可显示。使用下面的按钮添加一个。',
	'ACP_ADS_ADD'				=> '添加新广告',
	'ACP_ADS_EDIT'				=> '编辑广告',

	'AD_NAME_REQUIRED'			=> '名称是必需的。',
	'AD_NAME_TOO_LONG'			=> '名称长度限制为%d个字符。',
	'AD_CODE_ILLEGAL_CHARS'		=> '广告代码包含以下不受支持的字符：%s',
	'AD_START_DATE_INVALID'		=> '开始日期无效或已经过期。',
	'AD_END_DATE_INVALID'		=> '结束日期无效或已经过期。',
	'AD_PRIORITY_INVALID'		=> '优先级无效。请设置1到10之间的数字。',
	'AD_VIEWS_LIMIT_INVALID'	=> '浏览次数限制无效。请设置非负数。',
	'AD_CLICKS_LIMIT_INVALID'	=> '点击次数限制无效。请设置非负数。',
	'AD_OWNER_INVALID'			=> '广告所有者无效。请使用查找成员链接选择用户。',
	'NO_FILE_SELECTED'			=> '未选择文件。',
	'CANNOT_CREATE_DIRECTORY'	=> '无法创建<samp>phpbb_ads</samp>目录。请确保<samp>/images</samp>目录可写。',
	'FILE_MOVE_UNSUCCESSFUL'	=> '无法将文件移动到<samp>images/phpbb_ads</samp>。',
	'END_DATE_TOO_SOON'			=> '结束日期早于开始日期。',
	'ACP_AD_DOES_NOT_EXIST'		=> '广告不存在。',
	'ACP_AD_ADD_SUCCESS'		=> '广告添加成功。',
	'ACP_AD_EDIT_SUCCESS'		=> '广告编辑成功。',
	'ACP_AD_DELETE_SUCCESS'		=> '广告删除成功。',
	'ACP_AD_DELETE_ERRORED'		=> '删除广告时出错。',
	'ACP_AD_ENABLE_SUCCESS'		=> '广告启用成功。',
	'ACP_AD_ENABLE_ERRORED'		=> '启用广告时出错。',
	'ACP_AD_DISABLE_SUCCESS'	=> '广告禁用成功。',
	'ACP_AD_DISABLE_ERRORED'	=> '禁用广告时出错。',

	// Analyser tests
	'UNSECURE_CONNECTION'	=> '<strong>混合内容</strong><br />您的论坛运行在安全的HTTPS连接上，但广告代码试图从不安全的HTTP连接加载内容。这可能导致浏览器生成"混合内容"警告，让用户知道页面包含不安全的资源。',
	'SCRIPT_WITHOUT_ASYNC'	=> '<strong>非异步javascript</strong><br />此广告代码以非异步方式加载JavaScript代码。这意味着它将阻止任何其他Javascript加载直到它完成加载，这可能会影响页面加载性能。使用<samp>async</samp>属性可以加快页面加载速度。',
	'ALERT_USAGE'			=> '<strong>使用<samp>alert()</samp></strong><br />您的代码使用了<samp>alert()</samp>函数，这不是一个好的做法，可能会分散用户的注意力。某些浏览器还可能阻止页面加载并向用户显示额外警告。',
	'LOCATION_CHANGE'		=> '<strong>重定向</strong><br />您的代码似乎可以将用户重定向到另一个页面或站点。重定向有时会将用户发送到意外的、通常是恶意的目的地。请验证您的广告代码重定向目的地的完整性。',

	// Template location categories
	'CAT_TOP_OF_PAGE'		=> '页面顶部',
	'CAT_BOTTOM_OF_PAGE'	=> '页面底部',
	'CAT_IN_POSTS'			=> '帖子中',
	'CAT_OTHER'				=> '其他',
	'CAT_INTERACTIVE'		=> '交互式',
	'CAT_SPECIAL'			=> '特殊',

	// Settings
	'ADBLOCKER_LEGEND'				=> '广告拦截器',
	'ADBLOCKER_MESSAGE'				=> '检测到广告拦截器消息',
	'ADBLOCKER_MESSAGE_EXPLAIN'		=> '向使用广告拦截器的访问者显示消息，请求或要求他们在本论坛上禁用广告拦截。如果要求访问者禁用广告拦截器，他们将无法使用论坛，直到他们禁用了广告拦截器。',
	'ADBLOCKER_MODES'				=> [
		0 => '允许广告拦截器',
		1 => '请求访问者禁用广告拦截器',
		2 => '要求访问者禁用广告拦截器',
	],
	'CLICKS_VIEWS_LEGEND'			=> '统计数据和跟踪',
	'ENABLE_VIEWS'					=> '计算浏览量',
	'ENABLE_VIEWS_EXPLAIN'			=> '这将启用计算每个广告显示的次数。请注意，这会增加服务器负载，如果您不需要此功能，请禁用它。',
	'ENABLE_CLICKS'					=> '计算点击量',
	'ENABLE_CLICKS_EXPLAIN'			=> '这将启用计算每个广告被点击的次数。请注意，这会增加服务器负载，如果您不需要此功能，请禁用它。',
	'SHOW_AGREEMENT'				=> '广告披露',
	'SHOW_AGREEMENT_EXPLAIN'		=> '在隐私政策中显示有关如何在此论坛上使用第三方广告和跟踪技术的详细信息。如果您的论坛上的广告收集或跟踪用户信息，则必须启用此披露。',
	'HIDE_GROUPS'					=> '对组隐藏广告',
	'HIDE_GROUPS_EXPLAIN'			=> '选定组的成员将看不到此广告。使用CTRL+点击（或Mac上的CMD+点击）可以选择/取消选择多个组。',

	'ACP_AD_SETTINGS_SAVED'	=> '广告管理设置已保存。',
));