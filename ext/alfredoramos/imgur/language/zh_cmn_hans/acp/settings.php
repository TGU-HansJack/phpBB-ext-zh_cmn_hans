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
	'ACP_IMGUR_REGISTER' => '注册新应用',
	'ACP_IMGUR_REGISTER_EXPLAIN' => '如果您没有以下所需的 API 凭据，请使用您的 Imgur 帐户登录并通过以下链接注册新应用。<br><strong>如果您已有 API 凭据，则无需创建新应用。</strong>',
	'ACP_IMGUR_AUTHORIZE' => '授权访问',
	'ACP_IMGUR_AUTHORIZE_EXPLAIN' => '您需要授权该应用才能将图片上传到您的帐户。',

	'ACP_IMGUR_API_SETTINGS' => 'API 设置',
	'ACP_IMGUR_API_SETTINGS_EXPLAIN' => '<p>您可以在此处设置所需的 Imgur API 数据。更多信息请查阅 <a href="https://www.phpbb.com/customise/db/extension/imgur/faq" rel="external nofollow noreferrer noopener" target="_blank"><strong>常见问题</strong></a>。如需帮助，请访问 <a href="https://www.phpbb.com/customise/db/extension/imgur/support" rel="external nofollow noreferrer noopener" target="_blank"><strong>支持</strong></a> 部分。</p>',

	'ACP_IMGUR_CLIENT_ID' => '客户端 ID',
	'ACP_IMGUR_CLIENT_ID_EXPLAIN' => '由 15 个字符组成的十六进制数字字符串。',
	'ACP_IMGUR_CLIENT_SECRET' => '客户端密钥',
	'ACP_IMGUR_CLIENT_SECRET_EXPLAIN' => '由 40 个字符组成的十六进制数字字符串。',
	'ACP_IMGUR_ALBUM' => '相册',
	'ACP_IMGUR_ALBUM_EXPLAIN' => '长度等于或大于 5 个字符的字母数字字符串。将用于存储上传的图片。如果您希望所有图片都上传到默认位置，请留空。',
	'ACP_IMGUR_ALBUM_DOWNLOAD' => '下载相册备份',
	'ACP_IMGUR_ALBUM_VALIDATE' => '验证',

	'OUTPUT_SETTINGS' => '输出设置',
	'OUTPUT_SETTINGS_EXPLAIN' => '<p>您可以在此处启用、禁用并设置某些选项作为默认选项，这些选项将更改上传图片的输出。</p>',

	'ACP_IMGUR_OUTPUT_TYPE' => '输出类型',
	'ACP_IMGUR_OUTPUT_TYPE_EXPLAIN' => '您必须至少启用一个选项。默认选项必须启用，否则将使用第一个可用选项。',

	'ACP_IMGUR_THUMBNAIL_KEEP_PROPORTIONS' => '保持图片比例的缩略图尺寸',
	'ACP_IMGUR_THUMBNAIL_NOT_KEEP_PROPORTIONS' => '<u>不</u>保持图片比例的缩略图尺寸',

	'ACP_IMGUR_THUMBNAIL_SIZE' => '缩略图尺寸',
	'ACP_IMGUR_THUMBNAIL_SIZE_EXPLAIN' => '如果输出类型未设置为<samp>缩略图</samp>，则<samp>缩略图尺寸</samp>选项将不会产生任何效果。',

	'ACP_IMGUR_OUTPUT_TEXT_EXPLAIN' => '原始图片 URL',
	'ACP_IMGUR_OUTPUT_URL_EXPLAIN' => '<code>[url]<var>{image}</var>[/url]</code>',
	'ACP_IMGUR_OUTPUT_IMAGE_EXPLAIN' => '<code>[img]<var>{image}</var>[/img]</code>',
	'ACP_IMGUR_OUTPUT_THUMBNAIL_EXPLAIN' => '<code>[url=<var>{image}</var>][img]<var>{thumbnail}</var>[/img][/url]</code>',

	'ACP_IMGUR_THUMBNAIL_SMALL' => '小',
	'ACP_IMGUR_THUMBNAIL_SMALL_EXPLAIN' => '160x160px',

	'ACP_IMGUR_THUMBNAIL_MEDIUM' => '中',
	'ACP_IMGUR_THUMBNAIL_MEDIUM_EXPLAIN' => '320x320px',

	'ACP_IMGUR_THUMBNAIL_LARGE' => '大',
	'ACP_IMGUR_THUMBNAIL_LARGE_EXPLAIN' => '640x640px',

	'ACP_IMGUR_THUMBNAIL_HUGE' => '巨大',
	'ACP_IMGUR_THUMBNAIL_HUGE_EXPLAIN' => '1024x1024px',

	'ACP_IMGUR_THUMBNAIL_SMALL_SQUARE' => '小方图',
	'ACP_IMGUR_THUMBNAIL_SMALL_SQUARE_EXPLAIN' => '90x90px',

	'ACP_IMGUR_THUMBNAIL_BIG_SQUARE' => '大方图',
	'ACP_IMGUR_THUMBNAIL_BIG_SQUARE_EXPLAIN' => '160x160px',

	'ACP_IMGUR_TOGGLE_DISPLAY_FIELD' => '显示/隐藏 %s',

	'ACP_IMGUR_VALIDATE_INVALID_FIELDS' => '字段的值无效: <samp>%s</samp>',
	'ACP_IMGUR_VALIDATE_VALUES_NOT_ALLOWED' => '为 <samp>%1$s</samp> 提供的值不被允许: <code>%2$s</code>',
	'ACP_IMGUR_VALIDATE_IMGUR_ALBUM' => '您指定的相册在此 Imgur 帐户中不存在。'
]);