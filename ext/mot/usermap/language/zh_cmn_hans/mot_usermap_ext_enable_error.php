<?php
/**
*
* @package Usermap v1.2.5
* @copyright (c) 2020 - 2024 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'MOT_USERMAP_NAME'							=> '用户地图',
	'MOT_USERMAP_ERROR_EXTENSION_NOT_ENABLE'	=> '无法启用扩展"„%1$s"。请检查此扩展的必要要求是否满足。',
	'MOT_USERMAP_ERROR_MESSAGE_PHPBB_VERSION'	=> 'phpBB的最低版本要求为"„%1$s"，但低于"„%2$s"',
	'MOT_USERMAP_PHP_VERSION_ERROR'				=> 'PHP的最低版本为"„%1$s"，但低于"„%2$s"',
]);