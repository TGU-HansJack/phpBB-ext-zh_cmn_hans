<?php
/**
 *
 * Thanks For Posts.
 * Adds the ability to thank the author and to use per posts/topics/forum rating system based on the count of thanks.
 * An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, rxu, https://www.phpbbguru.net
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
	'ACP_DELTHANKS'						=> '已删除的感谢记录',
	'ACP_POSTS'							=> '总帖子数',
	'ACP_POSTSEND'						=> '剩余带感谢的帖子',
	'ACP_POSTSTHANKS'					=> '总感谢帖子数',
	'ACP_THANKS'						=> '帖子感谢',
	'ACP_THANKS_MOD_VER'				=> '扩展版本: ',
	'ACP_THANKS_TRUNCATE'				=> '清空感谢列表',
	'ACP_ALLTHANKS'						=> '已计入的感谢',
	'ACP_THANKSEND'						=> '剩余待计入的感谢',
	'ACP_THANKS_REPUT'					=> '评级选项',
	'ACP_THANKS_REPUT_SETTINGS'			=> '评级选项',
	'ACP_THANKS_REPUT_SETTINGS_EXPLAIN'	=> '在此设置基于感谢系统的帖子、主题和版块评级的默认设置。<br />拥有最多感谢数的主题（帖子或版块）将获得100%的评级。',
	'ACP_THANKS_SETTINGS'				=> '感谢设置',
	'ACP_THANKS_SETTINGS_EXPLAIN'		=> '可以在此更改帖子感谢的默认设置。',
	'ACP_THANKS_REFRESH'				=> '更新计数器',
	'ACP_UPDATETHANKS'					=> '已更新的感谢记录',
	'ACP_USERSEND'						=> '剩余感谢过的用户',
	'ACP_USERSTHANKS'					=> '总感谢用户数',

	'GRAPHIC_BLOCK_BACK'				=> 'ext/gfksx/thanksforposts/images/rating/reput_block_back.gif',
	'GRAPHIC_BLOCK_RED'					=> 'ext/gfksx/thanksforposts/images/rating/reput_block_red.gif',
	'GRAPHIC_DEFAULT'					=> '图像',
	'GRAPHIC_OPTIONS'					=> '图形选项',
	'GRAPHIC_STAR_BACK'					=> 'ext/gfksx/thanksforposts/images/rating/reput_star_back.gif',
	'GRAPHIC_STAR_BLUE'					=> 'ext/gfksx/thanksforposts/images/rating/reput_star_blue.gif',
	'GRAPHIC_STAR_GOLD'					=> 'ext/gfksx/thanksforposts/images/rating/reput_star_gold.gif',

	'IMG_THANKPOSTS'					=> '感谢帖子',
	'IMG_REMOVETHANKS'					=> '取消感谢',

	'LOG_CONFIG_THANKS'					=> '更新帖子感谢扩展配置',

	'REFRESH'							=> '刷新',
	'REMOVE_THANKS'						=> '移除感谢',
	'REMOVE_THANKS_EXPLAIN'				=> '如果启用此选项，用户可以移除感谢。',

	'STEPR'								=> ' - 已执行，步骤 %s',

	'THANKS_AJAX_ENABLE'				=> '启用 Ajax',
	'THANKS_AJAX_ENABLE_EXPLAIN'		=> '如果启用，感谢和移除感谢操作将无需重新加载页面即可完成。',
	'THANKS_COUNTERS_VIEW'				=> '感谢计数器',
	'THANKS_COUNTERS_VIEW_EXPLAIN'		=> '如果启用，作者信息块将显示发出/收到的感谢数量。',
	'THANKS_FORUM_REPUT_VIEW'			=> '显示版块评级',
	'THANKS_GLOBAL_POST'				=> '全局公告中的感谢',
	'THANKS_GLOBAL_POST_EXPLAIN'		=> '如果启用，则全局公告中也可以感谢。',
	'THANKS_FORUM_REPUT_VIEW_EXPLAIN'	=> '如果启用，版块评级将显示在版块列表中。',
	'THANKS_INFO_PAGE'					=> '信息消息',
	'THANKS_INFO_PAGE_EXPLAIN'			=> '如果启用，在感谢/移除感谢后将显示信息消息。',
	'THANKS_NOTICE_ON'					=> '通知可用',
	'THANKS_NOTICE_ON_EXPLAIN'			=> '如果启用，用户可以通过个人资料配置通知。',
	'THANKS_NUMBER'						=> '个人资料中显示的感谢列表数量',
	'THANKS_NUMBER_EXPLAIN'				=> '查看个人资料时显示的最大感谢数。<br /><strong>请注意，如果此值设置超过250，将导致页面加载缓慢。</strong>',
	'THANKS_NUMBER_DIGITS'				=> '评级的小数位数',
	'THANKS_NUMBER_DIGITS_EXPLAIN'		=> '指定评级值的小数位数。',
	'THANKS_NUMBER_ROW_REPUT'			=> '评级排行榜行数',
	'THANKS_NUMBER_ROW_REPUT_EXPLAIN'	=> '指定在帖子、主题和版块评级排行榜中显示的行数。',
	'THANKS_NUMBER_POST'				=> '帖子中列出的感谢数',
	'THANKS_NUMBER_POST_EXPLAIN'		=> '查看帖子时显示的最大感谢数。<br /><strong>请注意，如果此值设置超过250，将导致页面加载缓慢。</strong>',
	'THANKS_ONLY_FIRST_POST'			=> '仅限主题的第一个帖子',
	'THANKS_ONLY_FIRST_POST_EXPLAIN'	=> '如果启用，用户只能感谢主题中的第一个帖子。',
	'THANKS_POST_REPUT_VIEW'			=> '显示帖子评级',
	'THANKS_POST_REPUT_VIEW_EXPLAIN'	=> '如果启用，在查看主题时将显示帖子评级。',
	'THANKS_POSTLIST_VIEW'				=> '在帖子中列出感谢',
	'THANKS_POSTLIST_VIEW_EXPLAIN'		=> '如果启用，将显示感谢帖子作者的用户列表。<br/>请注意，只有管理员在该版块中启用了感谢权限时，此选项才有效。',
	'THANKS_PROFILELIST_VIEW'			=> '在个人资料中列出感谢',
	'THANKS_PROFILELIST_VIEW_EXPLAIN'	=> '如果启用，将显示完整的感谢列表，包括感谢次数和用户被感谢的帖子。',
	'THANKS_REFRESH'					=> '更新感谢计数器',
	'THANKS_REFRESH_EXPLAIN'			=> '在这里您可以更新感谢计数器，用于在批量删除帖子/主题/用户、分割/合并主题、设置/取消全局公告、启用/禁用"仅限主题的第一个帖子"选项、更改帖子所有者等操作之后。这可能需要一些时间。<br /><strong>重要：为了正常工作，刷新计数器功能需要 MySQL 4.1 或更高版本！<br />注意！<br /> - 刷新将清除所有访客帖子的感谢！<br /> - 如果"全局公告中的感谢"选项关闭，刷新将清除所有全局公告的感谢！<br /> - 如果"仅限主题的第一个帖子"选项开启，刷新将清除所有除主题第一个帖子外的所有帖子的感谢！</strong>',
	'THANKS_REFRESH_MSG'				=> '这可能需要几分钟来完成。所有不正确的感谢条目将被删除！<br />此操作不可逆！',
	'THANKS_REFRESHED_MSG'				=> '计数器已更新',
	'THANKS_REPUT_GRAPHIC'				=> '评级图形显示',
	'THANKS_REPUT_GRAPHIC_EXPLAIN'		=> '如果启用，评级值将使用下面的图像以图形方式显示。',
	'THANKS_REPUT_HEIGHT'				=> '图形高度',
	'THANKS_REPUT_HEIGHT_EXPLAIN'		=> '指定评级滑块的高度（以像素为单位）。<br /><strong>注意！为了正确显示，您应该指定与以下图像高度相等的高度！</strong>',
	'THANKS_REPUT_IMAGE'				=> '滑块的主要图像',
	'THANKS_REPUT_IMAGE_DEFAULT'		=> '<strong>图形预览</strong>',
	'THANKS_REPUT_IMAGE_DEFAULT_EXPLAIN' => '图像本身和图像路径可以在这里看到。图像尺寸为15x15像素。<br />您可以绘制自己的前景和背景图像。<strong>为了确保正确构建图形比例，图像的高度和宽度应该相同。</strong>',
	'THANKS_REPUT_IMAGE_EXPLAIN'		=> '相对于phpBB根文件夹的图形比例图像路径。',
	'THANKS_REPUT_IMAGE_NOEXIST'		=> '未找到图形比例的主要图像。',
	'THANKS_REPUT_IMAGE_BACK'			=> '滑块的背景图像',
	'THANKS_REPUT_IMAGE_BACK_EXPLAIN'	=> '相对于phpBB安装文件夹的图形比例背景图像路径。',
	'THANKS_REPUT_IMAGE_BACK_NOEXIST'	=> '未找到图形比例的背景图像。',
	'THANKS_REPUT_LEVEL'				=> '图形比例中的图像数量',
	'THANKS_REPUT_LEVEL_EXPLAIN'		=> '对应于图形中评级比例值100%的最大图像数量。',
	'THANKS_TIME_VIEW'					=> '感谢时间',
	'THANKS_TIME_VIEW_EXPLAIN'			=> '如果启用，帖子将显示感谢时间。',
	'THANKS_TOP_NUMBER'					=> '排行榜中的用户数',
	'THANKS_TOP_NUMBER_EXPLAIN'			=> '指定在首页显示的排行榜用户数。0 - 关闭排行榜显示。',
	'THANKS_TOPIC_REPUT_VIEW'			=> '显示主题评级',
	'THANKS_TOPIC_REPUT_VIEW_EXPLAIN'	=> '如果启用，在查看版块时将显示主题评级。',
	'TRUNCATE'							=> '清除',
	'TRUNCATE_THANKS'					=> '清空感谢列表',
	'TRUNCATE_THANKS_EXPLAIN'			=> '此操作将完全清除所有感谢计数器（删除所有发出的感谢）。<br />此操作不可逆！',
	'TRUNCATE_THANKS_MSG'				=> '感谢计数器已清除。',
	'REFRESH_THANKS_CONFIRM'			=> '您真的要刷新感谢计数器吗？',
	'TRUNCATE_THANKS_CONFIRM'			=> '您真的要清除感谢计数器吗？',
	'TRUNCATE_NO_THANKS'				=> '操作已取消',
	'ALLOW_THANKS_PM_ON'				=> '当有人感谢我的帖子时通过站内信通知我',
	'ALLOW_THANKS_EMAIL_ON'				=> '当有人感谢我的帖子时通过电子邮件通知我',
]);