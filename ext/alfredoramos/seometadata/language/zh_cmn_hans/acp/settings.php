<?php

/**
 * SEO Metadata extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@proton.me>
 * @copyright 2018 Alfredo Ramos
 * @license GNU GPL-2.0-only
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
	'ACP_SEO_METADATA_EXPLAIN' => '<p>在这里您可以配置要生成和显示的元数据。更多信息请查阅 <a href="https://www.phpbb.com/customise/db/extension/seo_metadata/faq" rel="external nofollow noreferrer noopener" target="_blank"><strong>常见问题</strong></a>。如果您需要帮助，请访问 <a href="https://www.phpbb.com/customise/db/extension/seo_metadata/support" rel="external nofollow noreferrer noopener" target="_blank"><strong>支持</strong></a> 部分。</p>',
	'ACP_SEO_METADATA_INFO' => '对以下值的更改只会应用于新主题，如果您希望也应用于旧主题，则需要清除缓存。',

	'ACP_SEO_METADATA_META_DESCRIPTION' => '启用描述',
	'ACP_SEO_METADATA_META_DESCRIPTION_EXPLAIN' => '描述性元标签。',

	'ACP_SEO_METADATA_DESC_LENGTH' => '描述长度',
	'ACP_SEO_METADATA_DESC_LENGTH_EXPLAIN' => '用于元标签（如 <samp>og:description</samp>）中的描述最大长度。最大限制为 <samp>255</samp> 个字符。',
	'ACP_SEO_METADATA_DESC_STRATEGY' => '描述策略',
	'ACP_SEO_METADATA_DESC_STRATEGY_EXPLAIN' => '<samp>截断</samp> 如果超过最大长度，则在确切位置截断描述。<br><samp>省略号</samp> 如果超过最大长度，则在描述末尾添加省略号 (<code>…</code>)。<br><samp>断词</samp> 在不超过最大长度的前提下尽可能多地容纳单词。',
	'ACP_SEO_METADATA_DESC_CUT' => '截断',
	'ACP_SEO_METADATA_DESC_ELLIPSIS' => '省略号',
	'ACP_SEO_METADATA_DESC_BREAK_WORDS' => '断词',

	'ACP_SEO_METADATA_IMAGE_STRATEGY' => '图片策略',
	'ACP_SEO_METADATA_IMAGE_STRATEGY_EXPLAIN' => '<samp>首个图片</samp> 选择在帖子正文中找到的第一个可用图片。<br><samp>图片尺寸</samp> 选择帖子正文中的尺寸（宽度、高度）最大的图片。',
	'ACP_SEO_METADATA_IMAGE_FIRST' => '首个图片',
	'ACP_SEO_METADATA_IMAGE_DIMENSIONS' => '图片尺寸',

	'ACP_SEO_METADATA_DEFAULT_IMAGE' => '默认图片',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_EXPLAIN' => '用于元标签（如 <samp>og:image</samp>）的默认图片URL。只有在当前页面中找不到图片时才会使用。必须大于 <samp>%1$d</samp> x <samp>%1$d</samp> 像素且相对于 <samp>%2$s</samp>',

	'ACP_SEO_METADATA_DEFAULT_IMAGE_DIMENSIONS' => '默认图片尺寸',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_DIMENSIONS_EXPLAIN' => '默认图片的宽×高。',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_WIDTH' => '默认图片宽度',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_HEIGHT' => '默认图片高度',

	'ACP_SEO_METADATA_DEFAULT_IMAGE_TYPE' => '默认图片类型',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_TYPE_EXPLAIN' => '默认图片的MIME类型。',

	'ACP_SEO_METADATA_LOCAL_IMAGES' => '本地图片',
	'ACP_SEO_METADATA_LOCAL_IMAGES_EXPLAIN' => '仅从您的域名 (<samp>%s</samp>) 中提取帖子图片。',

	'ACP_SEO_METADATA_ATTACHMENTS' => '包含附件',
	'ACP_SEO_METADATA_ATTACHMENTS_EXPLAIN' => '同时包含附件中的图片。它们将按照上传的相同顺序进行选择。',

	'ACP_SEO_METADATA_PREFER_ATTACHMENTS' => '优先附件',
	'ACP_SEO_METADATA_PREFER_ATTACHMENTS_EXPLAIN' => '附件图片将比从帖子中提取的图片具有更高的优先级。',

	'ACP_SEO_METADATA_POST_METADATA' => '帖子元数据',
	'ACP_SEO_METADATA_POST_METADATA_EXPLAIN' => '同时为特定帖子URL生成元数据。',

	'ACP_SEO_METADATA_MAX_IMAGES' => '图片数量',
	'ACP_SEO_METADATA_MAX_IMAGES_EXPLAIN' => '每个帖子提取的图片最大数量。请注意，如果主题或帖子的图片之前未被提取过，增加此数值可能会对首次加载时间产生负面影响。最大值为 <samp>%d</samp>。',

	'ACP_SEO_METADATA_DATA_EXPLAIN' => '元数据是从您的论坛数据中动态生成的。',

	'ACP_SEO_METADATA_GLOBAL_SETTINGS' => '全局设置',

	'ACP_SEO_METADATA_OPEN_GRAPH_SETTINGS' => 'Open Graph 设置',
	'ACP_SEO_METADATA_OPEN_GRAPH' => '启用 Open Graph',

	'ACP_SEO_METADATA_FACEBOOK_APPLICATION' => 'Facebook 应用ID',
	'ACP_SEO_METADATA_FACEBOOK_APPLICATION_EXPLAIN' => '您的 Facebook 应用标识符。',
	'ACP_SEO_METADATA_FACEBOOK_PUBLISHER' => 'Facebook 发布者',
	'ACP_SEO_METADATA_FACEBOOK_PUBLISHER_EXPLAIN' => '您的 Facebook 页面URL。',

	'ACP_SEO_METADATA_TWITTER_CARD_SETTINGS' => 'Twitter Cards 设置',
	'ACP_SEO_METADATA_TWITTER_CARDS' => '启用 Twitter Cards',
	'ACP_SEO_METADATA_TWITTER_PUBLISHER' => 'Twitter 发布者',
	'ACP_SEO_METADATA_TWITTER_PUBLISHER_EXPLAIN' => '您的网站 Twitter 账户用户名。',

	'ACP_SEO_METADATA_JSON_LD_SETTINGS' => 'JSON-LD 设置',
	'ACP_SEO_METADATA_JSON_LD' => '启用 JSON-LD',
	'ACP_SEO_METADATA_JSON_LD_LOGO' => '发布者标识',
	'ACP_SEO_METADATA_JSON_LD_LOGO_EXPLAIN' => 'Google在搜索结果中使用的自定义标识。必须大于 <samp>112</samp> x <samp>112</samp> 像素且相对于 <samp>%s</samp>。',
	'ACP_SEO_METADATA_JSON_LD_LOGO_DIMENSIONS' => '发布者标识尺寸',
	'ACP_SEO_METADATA_JSON_LD_LOGO_DIMENSIONS_EXPLAIN' => '发布者标识的宽×高。',

	'ACP_SEO_METADATA_EXTRACTED_IMAGE_DATA' => '这些数据将从图片中提取。',

	'ACP_SEO_METADATA_VALIDATE_INVALID_FIELDS' => '字段的值无效: %s',
	'ACP_SEO_METADATA_VALIDATE_INVALID_IMAGE' => '为图片 <samp>%1$s</samp> 指定的值生成了空URL。<br>这可能是因为指定了不存在的图片，或者文件名试图超出 <samp>/images/</samp> 路径。',
	'ACP_SEO_METADATA_VALIDATE_SMALL_IMAGE' => '图片 <samp>%1$s</samp> 的尺寸必须大于 <samp>%2$s</samp> x <samp>%3$s</samp> 像素。',
	'ACP_SEO_METADATA_VALIDATE_INVALID_MIME_TYPE' => '图片 <samp>%1$s</samp> 的MIME类型 <samp>%2$s</samp> 不被允许。'
]);