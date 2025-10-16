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
	'ACL_A_GALLERY_MANAGE'		=> '可以管理画廊',
	'ACL_A_GALLERY_ALBUMS'		=> '可以管理相册',
	'ACL_A_GALLERY_SETTINGS'	=> '可以更改画廊设置',
	'ACL_A_GALLERY_PERMISSIONS'	=> '可以设置画廊权限',
	'ACL_A_GALLERY_LOGS'		=> '可以查看画廊日志',

	'ACL_M_GALLERY_MODERATE'	=> '可以版主画廊',
	'ACL_M_GALLERY_ALBUMS'		=> '可以管理相册',
	'ACL_M_GALLERY_SETTINGS'	=> '可以更改画廊设置',
	'ACL_M_GALLERY_PERMISSIONS'	=> '可以设置画廊权限',
	'ACL_M_GALLERY_LOGS'		=> '可以查看画廊日志',

	'ACL_U_GALLERY_VIEW'		=> '可以查看画廊',
	'ACL_U_GALLERY_UPLOAD'		=> '可以上传图像',
	'ACL_U_GALLERY_COMMENT'		=> '可以发表评论',
	'ACL_U_GALLERY_RATE'		=> '可以评分图像',
	'ACL_U_GALLERY_REPORT'		=> '可以举报图像',
	'ACL_U_GALLERY_EDIT'		=> '可以编辑自己的图像',
	'ACL_U_GALLERY_DELETE'		=> '可以删除自己的图像',
	'ACL_U_GALLERY_MODERATE'	=> '可以版主画廊',
	'ACL_U_GALLERY_ALBUMS'		=> '可以管理相册',
	'ACL_U_GALLERY_SETTINGS'	=> '可以更改画廊设置',
));