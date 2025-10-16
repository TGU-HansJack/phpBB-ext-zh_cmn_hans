<?php
/**
 * [简体中文 [zh_cmn_hans]]
 * @package cBB Chat
 * @version 1.2.7 07/03/2025
 *
 * @copyright (c) 2025 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// DO NOT CHANGE
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_CHAT_CONFIG_EXPLAIN'	=> '感谢您选择cBB Chat作为论坛的补充功能！<br />
		在此页面您可以修改聊天的主要功能。',
	'ACP_CHAT_PAGES_EXPLAIN'	=> '在这里您可以管理将加载聊天功能的页面及其位置。',
	'ACP_CHAT_ROOMS_EXPLAIN'	=> '在这里您可以管理聊天中显示的特殊房间。<br />您可以通过拖拽房间到正确位置来排序。',
	'ACP_CHAT_TEXTS_EXPLAIN'	=> '在这里您可以管理聊天的公告、提示和规则。<br />
		要选择文本的顺序，请拖拽它们到正确的位置。',
	
	'CHAT_ALLOW_BBCODE'			=> '允许BBCode',
	'CHAT_ALLOW_BBCODE_EXPLAIN'	=> '定义用户是否可以在聊天中使用BBCode标签。',
	'CHAT_ALLOW_PM'				=> '允许私人消息',
	'CHAT_ALLOW_PM_EXPLAIN'		=> '启用/禁用用户之间的私人消息。',
	'CHAT_ANONYMOUS_ALLOWED'	=> '允许未命名访客',
	'CHAT_ANONYMOUS_ALLOWED_EXPLAIN'	=> '如果启用，访客将使用随机名称访问聊天，而无需自己决定名称。<br />
		<em>此选项仅在访客组具有查看聊天权限时有效。</em>',
	'CHAT_AUTOCONNECT'			=> '自动连接',
	'CHAT_AUTOCONNECT_EXPLAIN'	=> '设置聊天是否在页面加载时自动连接。',
	'CHAT_AUTO_AWAY'			=> '<em>在线</em>状态时间',
	'CHAT_AUTO_AWAY_EXPLAIN'	=> '定义超时时间（以分钟为单位），之后用户的状态<em><strong>在线</strong></em>将切换为<em><strong>离开</strong></em>。<br /><em>设置为0以禁用此功能</em>。',
	'CHAT_AUTO_AWAY_ERROR'		=> '状态更改时间应小于断开连接时间',
	'CHAT_AVATARS'				=> '显示头像',
	'CHAT_BBCODE_FORMAT'		=> '自定义BBCode格式',
	'CHAT_BBCODE_FORMAT_EXPLAIN'	=> '设置聊天中自定义BBCodes的外观。',
	'CHAT_BBCODE_INBUTTON'		=> '按钮',
	'CHAT_BBCODE_INSELECT'		=> '可选菜单',
	'CHAT_CHARS'				=> '消息字符数',
	'CHAT_CHARS_EXPLAIN'		=> '消息中允许的最大字符数。<br />
		<em>设置为0以禁用此限制</em>。',
	'CHAT_DIRECTION'			=> '消息方向',
	'CHAT_DIRECTION_EXPLAIN'	=> '设置聊天中消息的顺序。',
	'CHAT_DIRECTION_DOWN'		=> '旧消息在前',
	'CHAT_DIRECTION_UP'			=> '新消息在前',
	'CHAT_DISALLOWED_BBCODE'	=> '不允许的BBCode标签',
	'CHAT_DISALLOWED_BBCODE_EXPLAIN'	=> '聊天中将<strong>不</strong>允许的BBCode标签。<br />
		您可以使用键盘上的<em>Ctrl</em>键选择多个标签。',
	'CHAT_FLOOD'				=> '灌水限制',
	'CHAT_FLOOD_EXPLAIN'		=> '设置用户发送新消息必须等待的时间（以秒为单位）。<br />
		<em>设置为0以禁用此限制</em>。',
	'CHAT_FORUM_POSTS'			=> '论坛帖子',
	'CHAT_FORUM_POSTS_EXPLAIN'	=> '设置论坛中的新主题或新消息是否会显示在聊天室中。',
	'CHAT_GROUP_USERS'			=> '按用户组分组用户',
	'CHAT_GROUP_USERS_EXPLAIN'	=> '如果启用，用户将在聊天中按其默认组进行分组。',
	'CHAT_HEIGHT'				=> '聊天高度',
	'CHAT_HEIGHT_EXPLAIN'		=> '设置对话容器的高度（以像素为单位）。',
	'CHAT_HEIGHT_PAGE'			=> '聊天高度',
	'CHAT_HEIGHT_PAGE_EXPLAIN'	=> '设置此页面中对话容器的高度（以像素为单位）。<br /><em>设置为0以使用默认值。</em>',
	'CHAT_HIDE_POPUP'			=> '自动隐藏菜单',
	'CHAT_HIDE_POPUP_EXPLAIN'	=> '如果启用，执行操作时BBCode、颜色和表情菜单将自动关闭。',
	'CHAT_MAIN_CONFIG'			=> '主要配置',
	'CHAT_MESSAGES_CONFIG'		=> '消息配置',
	'CHAT_NOTICES_ADD'			=> '添加公告',
	'CHAT_NOTICES_EDIT'			=> '编辑公告',
	'CHAT_NOTICES_EXPLAIN'		=> '这些文本将作为<em>公告</em>或提醒显示在聊天顶部。',
	'CHAT_NOTICES_ITEM'			=> '公告',
	'CHAT_NOTICES_ITEM_EXPLAIN'	=> '您可以使用语言变量，例如<em>{L_CHAT}</em>。<br />
		<em>允许使用BBCode或HTML。<br />
		允许使用表情。</em>',
	'CHAT_NOTICES'				=> '公告',
	'CHAT_PAGE_ALIAS'			=> '页面别名',
	'CHAT_PAGE_ALIAS_EXPLAIN'	=> '为将在配置文件中使用的页面设置唯一ID。<br /><em>仅允许字母和数字</em>。',
	'CHAT_PAGE_CONFIG'			=> '页面配置',
	'CHAT_PAGE_CUSTOM'			=> '自定义路径',
	'CHAT_PAGE_CUSTOM_EXPLAIN'	=> '设置页面的完整路径（相对于phpBB）。<br />例如：<em>folder/file.php</em>。',
	'CHAT_PAGE_ENABLED'			=> '启用聊天页面',
	'CHAT_PAGE_ENABLED_EXPLAIN'	=> '启用/禁用聊天主页面。',
	'CHAT_PAGE_FILE'			=> '页面文件名',
	'CHAT_PAGE_FILE_EXPLAIN'	=> '设置将加载聊天的文件。',
	'CHAT_PAGE_FORUMS'			=> '论坛',
	'CHAT_PAGE_FORUMS_EXPLAIN'	=> '设置显示聊天的论坛。<br />您可以使用键盘上的<em>Ctrl</em>键选择多个论坛。<br /><em>如果您不选择任何论坛，则在所有论坛中显示。</em> ',
	'CHAT_PM_CONFIG'			=> '私人消息配置',
	'CHAT_PM_IGNORE_FLOOD'		=> '忽略灌水时间',
	'CHAT_PM_IGNORE_FLOOD_EXPLAIN'	=> '如果启用，设定的灌水限制在用户之间写私人消息时将不适用。',
	'CHAT_PM_MAX'				=> '私人消息限制',
	'CHAT_PM_MAX_EXPLAIN'		=> '设置用户可以同时打开的私人消息的最大数量。<br /><em>设置为0以禁用此限制</em>。',
	'CHAT_PM_MAXAGE'			=> '存储时间',
	'CHAT_PM_MAXAGE_EXPLAIN'	=> '设置私人消息保存的时间（以天为单位）。
		<br />超过此时间的消息将被删除。
		<br /><br /><em>最小值1，最大值365</em>。',
	'CHAT_POSITION'				=> '聊天位置',
	'CHAT_POSITION_EXPLAIN'		=> '聊天在页面中的位置。',
	'CHAT_POSITION_BOTTOM'		=> '底部',
	'CHAT_POSITION_TOP'			=> '顶部',
	'CHAT_REFRESH_TIME'			=> '刷新间隔',
	'CHAT_REFRESH_TIME_EXPLAIN'	=> '聊天等待刷新的时间间隔（以秒为单位）。',
	'CHAT_REMEMBER_STATUS'		=> '记住用户状态',
	'CHAT_REMEMBER_STATUS_EXPLAIN'	=> '如果启用，聊天将记住用户在新连接中的状态，但是用户在连接时将具有<em><strong>在线</strong></em>状态。',
	'CHAT_ROOM_AUTH'			=> '显示权限',
	'CHAT_ROOM_AUTOPURGE'		=> '自动清除',
	'CHAT_ROOM_AUTOPURGE_EXPLAIN'	=> '定义所有消息从该房间中清除的频率。',
	'CHAT_ROOM_CONFIG'			=> '房间配置',
	'CHAT_ROOM_CONNECTIONS'		=> '连接',
	'CHAT_ROOM_ENABLED'			=> '启用房间',
	'CHAT_ROOM_GROUPS'			=> '允许的用户组',
	'CHAT_ROOM_GROUPS_EXPLAIN'	=> '设置可以使用此房间的用户组。<br />您可以使用键盘上的<em>Ctrl</em>键选择多个用户组。',
	'CHAT_ROOM_GUEST_FORUMS'			=> '与此房间链接的论坛',
	'CHAT_ROOM_GUEST_FORUMS_EXPLAIN'	=> '在这里您可以选择将显示在主聊天室中的主题和消息的论坛。<br />
		如果您不选择任何论坛，则将使用所有论坛（除了分配给其他房间的论坛）。<br />
		您可以使用键盘上的<em>Ctrl</em>键选择多个论坛。',
	'CHAT_ROOM_LINKED_FORUMS'			=> '与此房间链接的论坛',
	'CHAT_ROOM_LINKED_FORUMS_EXPLAIN'	=> '此房间将是此处选择的论坛的默认房间，这些论坛的主题和帖子将显示在此房间中而不是在通用房间中。<br />
		您可以使用键盘上的<em>Ctrl</em>键选择多个论坛。',
	'CHAT_ROOM_LINKED_GROUPS'			=> '与此房间链接的用户组',
	'CHAT_ROOM_LINKED_GROUPS_EXPLAIN'	=> '此房间将为此处选择的用户组默认打开。<br />
		您可以使用键盘上的<em>Ctrl</em>键选择多个用户组。',
	'CHAT_ROOM_ADDED'			=> '房间已成功创建。',
	'CHAT_ROOM_UPDATED'			=> '房间配置已成功修改。',
	'CHAT_ROOM_MSG_LIMIT'		=> '消息限制',
	'CHAT_ROOM_MSG_LIMIT_EXPLAIN'	=> '设置存储在此房间中的消息的最大数量。如果超过此限制，将定期删除最旧的消息。
		<br /><em>设置为0以禁用此限制。</em>',
	'CHAT_ROOM_TITLE'			=> '房间标题',
	'CHAT_ROOM_TITLE_EXPLAIN'	=> '支持语言变量。',
	'CHAT_ROOM_USERS'			=> '允许的用户',
	'CHAT_ROOM_USERS_EXPLAIN'	=> '设置可以使用此房间的用户。<br />每行设置一个用户名。',
	'CHAT_ROW_ALIGN'			=> '消息对齐',
	'CHAT_ROW_ALIGN_EXPLAIN'	=> '定义消息在聊天中显示的一侧。<br /><em>此设置受使用的语言影响，如果语言为RTL，则此设置无效。</em>',
	'CHAT_ROW_BUBBLE'			=> '气泡',
	'CHAT_ROW_FORMAT'			=> '消息格式',
	'CHAT_ROW_FORMAT_EXPLAIN'	=> '定义消息的视觉样式。',
	'CHAT_ROW_LEFT'				=> '显示在左侧',
	'CHAT_ROW_MEOTHER'			=> '显示当前用户在一侧，其余在另一侧',
	'CHAT_ROW_NORMAL'			=> '正常',
	'CHAT_ROW_RIGHT'			=> '显示在右侧',
	'CHAT_ROW_ZIGZAG'			=> '显示为锯齿形',
	'CHAT_ROWS'					=> '聊天中的消息',
	'CHAT_ROWS_EXPLAIN'			=> '对话容器中显示的最大消息数量。',
	'CHAT_RULES_ADD'			=> '添加规则',
	'CHAT_RULES_EDIT'			=> '编辑规则',
	'CHAT_RULES_EXPLAIN'		=> '这些文本将作为<em>规则</em>显示在聊天规则列表中。',
	'CHAT_RULES_ITEM'			=> '规则',
	'CHAT_RULES_ITEM_EXPLAIN'	=> '您可以使用语言变量，例如<em>{L_CHAT}</em>。<br />
		<em>允许使用BBCode或HTML。<br />
		允许使用表情。</em>',
	'CHAT_RULES'				=> '规则',
	'CHAT_SOUND_ENABLED'		=> '启用声音',
	'CHAT_SHOW_NONE'			=> '不显示',
	'CHAT_SHOW_POSTS'			=> '所有新帖子',
	'CHAT_SHOW_TOPICS'			=> '仅新主题',
	'CHAT_TIMEOUT'				=> '断开连接时间',
	'CHAT_TIMEOUT_EXPLAIN'		=> '设置聊天需要考虑用户为“不活跃”并断开连接的时间（以分钟为单位）。<br /><em>设置为0以禁用此功能</em>。',
	'CHAT_TIPS_ADD'				=> '添加提示',
	'CHAT_TIPS_EDIT'			=> '编辑提示',
	'CHAT_TIPS_EXPLAIN'			=> '这些文本将作为小<em>提示</em>显示在聊天输入字段上方。',
	'CHAT_TIPS_ITEM'			=> '提示',
	'CHAT_TIPS_ITEM_EXPLAIN'	=> '您可以使用语言变量，例如<em>{L_CHAT}</em>。<br />
		<em>允许使用BBCode或HTML。<br />
		允许使用表情。</em>',
	'CHAT_TIPS'					=> '提示',
	'CHAT_USERS_CONFIG'			=> '用户配置',
	
	'EACH_DAY'		=> '每天',
	'EACH_WEEK'		=> '每周',
	'EACH_MONTH'	=> '每月',
	'EACH_YEAR'		=> '每年',
	
	'ADD_ROOM'					=> '添加房间',
	'CONTENT'					=> '内容',
	'CUSTOM_BBCODES'			=> '自定义BBCode',
	'CUSTOM_ROUTE'				=> '自定义路由',
	'CUSTOM_ROUTES'				=> '自定义路由',
	'DEFAULT_BBCODES'			=> '默认BBCode',
	'FORUM_ROUTES'				=> '论坛路由',
	'NO_PAGES'					=> '没有可用页面',
	'NO_ROOM'					=> '所选房间不存在',
	'NO_TEXTS'					=> '没有可用文本',
	'PAGE_ADD'					=> '添加页面',
	'PAGE_ALIAS'				=> '页面Id',
	'PAGE_URL'					=> '页面url',
	'ROOM_TITLE'				=> '房间标题',
	'SELECT_PAGE'				=> '选择文件',
	
	'INVALID_FILE'			=> '文件不存在或格式无效。',
	'NO_ALIAS'				=> '页面别名无效。',
	'PAGE_ALREADY_EXISTS'	=> '页面已被使用。',
	
	'REMOVE_ROOM_CONFIRM'	=> '您确定要删除此房间及其所有消息吗？',
]);
