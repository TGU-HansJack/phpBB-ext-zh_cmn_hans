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
	'UCP_GALLERY'					=> '画廊',
	'UCP_GALLERY_SETTINGS'			=> '画廊设置',
	'UCP_GALLERY_SETTINGS_EXPLAIN'	=> '您可以在此更改画廊的个人设置。',
	'UCP_GALLERY_SETTINGS_UPDATED'	=> '画廊设置已成功更新',

	'WATCH_ALL_IMAGES'				=> '订阅所有图像',
	'WATCH_ALL_IMAGES_EXPLAIN'		=> '启用时，您将自动订阅所有您上传的图像。',
	'WATCH_ALL_IMAGES_NOTIFY'		=> '通知新评论',
	'WATCH_ALL_IMAGES_NOTIFY_EXPLAIN'	=> '启用时，当您的图像有新评论时您将收到通知。',
	'WATCH_COMMENT_NOTIFY'			=> '评论通知',
	'WATCH_COMMENT_NOTIFY_EXPLAIN'	=> '启用时，当您订阅的图像有新评论时您将收到通知。',
	'WATCH_IMAGE_NOTIFY'			=> '图像通知',
	'WATCH_IMAGE_NOTIFY_EXPLAIN'	=> '启用时，当您订阅的图像有新评论时您将收到通知。',
	'WATCH_OWN_IMAGES'				=> '订阅自己的图像',
	'WATCH_OWN_IMAGES_EXPLAIN'		=> '启用时，您将自动订阅自己上传的所有图像。',
	'WATCH_OWN_IMAGES_NOTIFY'		=> '通知新评论',
	'WATCH_OWN_IMAGES_NOTIFY_EXPLAIN'	=> '启用时，当您的图像有新评论时您将收到通知。',
	'WATCH_PERSONAL_GALLERIES'		=> '订阅个人画廊',
	'WATCH_PERSONAL_GALLERIES_EXPLAIN'	=> '启用时，当有新个人画廊创建时您将收到通知。',
	'WATCH_PERSONAL_GALLERIES_NOTIFY'	=> '通知新个人画廊',
	'WATCH_PERSONAL_GALLERIES_NOTIFY_EXPLAIN'	=> '启用时，当有新个人画廊创建时您将收到通知。',

	'WATCH_ALL_IMAGES_DEFAULT'		=> '默认订阅所有图像',
	'WATCH_ALL_IMAGES_DEFAULT_EXPLAIN'	=> '启用时，新用户将默认订阅所有图像。',
	'WATCH_COMMENT_NOTIFY_DEFAULT'	=> '默认评论通知',
	'WATCH_COMMENT_NOTIFY_DEFAULT_EXPLAIN'	=> '启用时，新用户将默认接收评论通知。',
	'WATCH_IMAGE_NOTIFY_DEFAULT'	=> '默认图像通知',
	'WATCH_IMAGE_NOTIFY_DEFAULT_EXPLAIN'	=> '启用时，新用户将默认接收图像通知。',
	'WATCH_OWN_IMAGES_DEFAULT'		=> '默认订阅自己的图像',
	'WATCH_OWN_IMAGES_DEFAULT_EXPLAIN'	=> '启用时，新用户将默认订阅自己的图像。',
	'WATCH_PERSONAL_GALLERIES_DEFAULT'	=> '默认订阅个人画廊',
	'WATCH_PERSONAL_GALLERIES_DEFAULT_EXPLAIN'	=> '启用时，新用户将默认订阅个人画廊。',

	'GALLERY_UCP_PERMISSIONS'		=> '画廊权限',
	'GALLERY_UCP_PERMISSIONS_EXPLAIN'	=> '您可以在此查看您的画廊权限。',

	'NO_PERMISSIONS'				=> '您没有权限访问此页面。',

	'PERMISSIONS_TRANSFERRED'		=> '权限已转移',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> '您当前拥有 %s 的权限。您可以在此页面上以该用户身份浏览画廊，但不能访问用户控制面板，因为版主权限并未转移。要恢复您的权限，请<a href="%s">点击这里</a>。',

	'UCP_GALLERY_WATCH'				=> '订阅设置',
	'UCP_GALLERY_WATCH_EXPLAIN'		=> '您可以在此配置画廊订阅设置。',
	'UCP_GALLERY_WATCH_UPDATED'		=> '订阅设置已成功更新',

	'ACCESS_CONTROL_ALL'			=> '所有人',
	'ACCESS_CONTROL_REGISTERED'		=> '注册用户',
	'ACCESS_CONTROL_NOT_FOES'		=> '注册用户，除了您的敌人',
	'ACCESS_CONTROL_FRIENDS'		=> '仅您的朋友',
	'ACCESS_CONTROL_SPECIAL_FRIENDS'		=> '仅您的特别朋友',
	'ALBUMS'						=> '相册',
	'ALBUM_ACCESS'					=> '允许访问',
	'ALBUM_ACCESS_EXPLAIN'			=> '您可以使用您的 %1$s朋友和敌人列表%2$s 来控制对相册的访问。但是<strong>版主</strong>可以<strong>始终</strong>访问相册。',
	'ALBUM_DESC'					=> '相册描述',
	'ALBUM_NAME'					=> '相册名称',
	'ALBUM_PARENT'					=> '父相册',
	'ATTACHED_SUBALBUMS'			=> '附加的子相册',

	'CREATE_PERSONAL_ALBUM'			=> '创建个人相册',
	'CREATE_SUBALBUM'				=> '创建子相册',
	'CREATE_SUBALBUM_EXP'			=> '您可以将新的子相册附加到您的个人画廊。',
	'CREATED_SUBALBUM'				=> '子相册创建成功',

	'DELETE_ALBUM'					=> '删除相册',
	'DELETE_ALBUM_CONFIRM'			=> '删除相册，包括所有附加的子相册和图像？',
	'DELETED_ALBUMS'				=> '相册删除成功',

	'EDIT'							=> '编辑',
	'EDIT_ALBUM'					=> '编辑相册',
	'EDIT_SUBALBUM'					=> '编辑子相册',
	'EDIT_SUBALBUM_EXP'				=> '您可以在此编辑您的相册。',
	'EDITED_SUBALBUM'				=> '相册编辑成功',

	'GOTO'							=> '转到',

	'MANAGE_SUBALBUMS'				=> '管理您的子相册',
	'MISSING_ALBUM_NAME'			=> '请输入相册名称',

	'NEED_INITIALISE'				=> '您还没有个人相册。',
	'NO_ALBUM_STEALING'				=> '您无权管理其他用户的相册。',
	'NO_MORE_SUBALBUMS_ALLOWED'		=> '您已达到个人相册的子相册最大数量',
	'NO_PARENT_ALBUM'				=> '&laquo;-- 无父相册',
	'NO_PERSALBUM_ALLOWED'			=> '您没有创建个人相册的权限',
	'NO_PERSONAL_ALBUM'				=> '您还没有个人相册。您可以在此创建个人相册和一些子相册。<br />在个人相册中只有所有者可以上传图像。',
	'NO_SUBALBUMS'					=> '没有附加相册',
	'NO_SUBSCRIPTIONS'				=> '您没有订阅任何图像。',
	'NO_SUBSCRIPTIONS_ALBUM'		=> '您没有订阅任何相册。',

	'PARSE_BBCODE'					=> '解析 BBCode',
	'PARSE_SMILIES'					=> '解析表情符号',
	'PARSE_URLS'					=> '解析链接',
	'PERSONAL_ALBUM'				=> '个人相册',

	'UNSUBSCRIBE'					=> '停止关注',
	'USER_ALLOW_COMMENTS'			=> '允许用户评论您的图像',

	'YOUR_SUBSCRIPTIONS'			=> '在这里您可以看到您关注的相册和图像。',

	'WATCH_CHANGED'					=> '设置已保存',
	'WATCH_COM'						=> '默认订阅已评论的图像',
	'WATCH_NOTE'					=> '此选项仅影响新图像。所有其他图像需要通过"订阅图像"选项添加。',
	'WATCH_OWN'						=> '默认订阅自己的图像',

	'RRC_ZEBRA'						=> '在RRC中对敌人隐藏',
	'RRC_ZEBRA_EXPLAIN'				=> '在索引的最近、随机和评论部分对敌人隐藏相册中的图像。<br /><strong>警告！</strong> 这不会隐藏在公共/共享相册中上传的图像。'
));