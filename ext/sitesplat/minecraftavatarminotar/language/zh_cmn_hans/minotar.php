<?php
/**
*
* Minecraft Avatar Extension - minotar.net API
*
* @copyright (c) 2015 SiteSPlat <info@sitesplat.com>
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
	'ALLOW_SITESPLAT_MINECRAFTAVATARMINOTAR_AVATAR_DRIVER_MINECRAFTMINOTAR'	=> '启用通过Minotar API获取的Minecraft头像',
	'AVATAR_MINOTAR_ON_REGISTRATION'										=> '注册时启用通过Minotar API获取的Minecraft头像',

	'SITESPLAT_MINECRAFTAVATARMINOTAR_MINECRAFTMINOTAR_TITLE'	            => '通过Minotar API获取的Minecraft头像',
	'SITESPLAT_MINECRAFTAVATARMINOTAR_MINECRAFTMINOTAR_EXPLAIN'	            => '请选择以下选项',

	'MINOTAR_AVATAR_NAME'	           => 'Minecraft用户名',
	'MINOTAR_OPTIONS'		           => '类型',
	'AVATAR_MINOTAR_NAME_EXPLAIN'	   => '请输入您的Minecraft用户名',
	'AVATAR_MINOTAR_OPTIONS_EXPLAIN'   => '选择头像类型',
	
	'MINOTAR_OPTION_AVATAR'	           => '普通头像',
	'MINOTAR_OPTION_HELM'	           => '带头盔的头像',
	'MINOTAR_OPTION_SKIN'	           => '皮肤',

	'MINOTAR_SITESPLAT'	               => 'Minecraft Minotar扩展由<a href="http://www.sitesplat.com"><strong>SiteSplat.com</strong> <img class="decoded" alt="http://www.sitesplat.com" src="https://minotar.net/avatar/clone1018/24.png"></a>提供'
));