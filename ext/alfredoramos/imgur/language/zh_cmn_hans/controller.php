<?php

/**
 * Imgur extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'EXCEPTION_IMGUR_NO_API_DATA' => '客户端 ID 和客户端密钥是必需的。',
	'EXCEPTION_IMGUR_AJAX_ONLY' => '此路由只能在 AJAX 调用中使用。',
	'EXCEPTION_IMGUR_UNAUTHORIZED' => 'Imgur 应用尚未获得授权。',
	'EXCEPTION_IMGUR_EMPTY_ALBUM' => '相册 ID 为空。',
	'EXCEPTION_IMGUR_NO_ALBUMS' => '无法获取相册 ID: %s。',

	'UPLOAD_ERR_INI_SIZE' => '上传的文件超过了 php.ini 中的 <samp>upload_max_filesize</samp> 指令',
	'UPLOAD_ERR_FORM_SIZE' => '上传的文件超过了 HTML 表单中指定的 <samp>MAX_FILE_SIZE</samp> 指令',
	'UPLOAD_ERR_PARTIAL' => '上传的文件仅部分上传',
	'UPLOAD_ERR_NO_FILE' => '没有文件被上传',
	'UPLOAD_ERR_NO_TMP_DIR' => '缺少临时文件夹',
	'UPLOAD_ERR_CANT_WRITE' => '无法将文件写入磁盘',
	'UPLOAD_ERR_EXTENSION' => 'PHP 扩展停止了文件上传',

	'ALBUM_ERR_INVALID_ID' => '无效的相册 ID。',

	'IMGUR_AUTHORIZATION' => '授权',
	'IMGUR_AUTHORIZATION_EXPLAIN' => 'Imgur 授权正在进行中，请稍候。',
	'IMGUR_AUTHORIZED' => '您已授权 Imgur 应用，可以关闭此窗口。'
]);