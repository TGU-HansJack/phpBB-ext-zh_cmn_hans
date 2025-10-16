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
	'IMGUR_BUTTON_EXPLAIN' => '将选中的图片上传到 Imgur 并发布其内容',

	'IMGUR_OUTPUT_TEXT' => '文本',
	'IMGUR_OUTPUT_URL' => 'URL',
	'IMGUR_OUTPUT_IMAGE' => '图片',
	'IMGUR_OUTPUT_THUMBNAIL' => '缩略图',

	'IMGUR_TAB' => 'Imgur',
	'IMGUR_UPLOAD' => '上传到 Imgur',
	'IMGUR_ADD_TO_POST' => '添加到帖子',
	'IMGUR_PANEL_DROP_ZONE_EXPLAIN' => '将图片拖拽到这里开始上传，或点击上面的按钮手动选择图片。',
	'IMGUR_PANEL_BUTTON_EXPLAIN' => '上传的图片不会立即添加到消息中，以便您只选择想要的图片。',

	'IMGUR_INVALID_MIME_TYPE' => '图片 <samp>{file}</samp> 的 MIME 类型 <code>{type}</code> 不被允许。',
	'IMGUR_IMAGE_TOO_BIG' => '图片 <samp>{file}</samp> 大小为 <code>{size}</code>，应该小于 <code>{max_size}</code>。',
	'IMGUR_NO_IMAGES' => '没有要上传的图片。',
	'IMGUR_UPLOAD_PROGRESS' => '{percentage}% ({loaded} / {total})',
	'IMGUR_EMPTY_RESPONSE' => '请求意外返回空响应。'
]);