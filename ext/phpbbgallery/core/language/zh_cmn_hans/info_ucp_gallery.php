<?php
/**
 * phpBB Gallery - ACP Core Extension [Chinese Translation]
 *
 * @package   phpbbgallery/core
 * @author    satanasov
 * @author    Leinad4Mind
 * @copyright 2014- satanasov, 2018- Leinad4Mind
 * @license   GPL-2.0-only
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

$lang = array_merge($lang, array(
	'UCP_GALLERY'						=> '画廊',
	'UCP_GALLERY_PERSONAL_ALBUMS'		=> '管理个人相册',
	'UCP_GALLERY_SETTINGS'				=> '个人设置',
	'UCP_GALLERY_WATCH'					=> '管理订阅',
));