<?php
/**
 *
 * Knowledge Base extension for the phpBB Forum Software package
 *
 * @copyright (c) 2017, kinerity, https://www.acsyste.com
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
	$lang = array();
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_KNOWLEDGEBASE'				=> '知识库',
	'ACP_KNOWLEDGEBASE_MANAGE'		=> '管理分类',
	'ACP_KNOWLEDGEBASE_SETTINGS'	=> '知识库设置',

	// ACP Logs
	'ACP_KNOWLEDGEBASE_SETTINGS_LOG'	=> '<strong>知识库设置已更改</strong>',

	'ACP_KNOWLEDGEBASE_ARTICLE_APPROVED_LOG'	=> '<strong>已批准知识库文章</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_ARTICLE_DELETED_LOG'		=> '<strong>已删除知识库文章</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_ARTICLE_DENIED_LOG'		=> '<strong>已拒绝知识库文章</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_ARTICLE_DISAPPROVED_LOG'	=> '<strong>未批准知识库文章</strong><br />» %s',

	'ACP_KNOWLEDGEBASE_CATEGORY_ADD_LOG'		=> '<strong>已创建新的知识库分类</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_CATEGORY_DELETE_LOG'		=> '<strong>已删除知识库分类</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_CATEGORY_EDIT_LOG'		=> '<strong>已更新知识库分类信息</strong><br />» %1$s',
	'ACP_KNOWLEDGEBASE_CATEGORY_MOVE_DOWN_LOG'	=> '<strong>移动了知识库分类</strong> %1$s <strong>至</strong> %2$s<strong>之下</strong>',
	'ACP_KNOWLEDGEBASE_CATEGORY_MOVE_UP_LOG'	=> '<strong>移动了知识库分类</strong> %1$s <strong>至</strong> %2$s<strong>之上</strong>',

	// Settings page
	'ACP_KNOWLEDGEBASE_SETTINGS_EXPLAIN'	=> '在此处您可以配置知识库的主要设置。',
	'ACP_KNOWLEDGEBASE_ENABLE'				=> '启用知识库',
	'ACP_KNOWLEDGEBASE_HEADER_LINK'			=> '在页头显示知识库链接',
	'ACP_KNOWLEDGEBASE_FONT_ICON'			=> '知识库链接图标',
	'ACP_KNOWLEDGEBASE_FONT_ICON_EXPLAIN'	=> '输入要在页头知识库链接中使用的<a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Font Awesome</a>图标名称。将此字段留空则不显示知识库图标。',
	'ACP_KNOWLEDGEBASE_FONT_ICON_INVALID'	=> '知识库链接图标包含无效字符。',
	'ACP_KNOWLEDGEBASE_SETTINGS_CHANGED'	=> '知识库设置已更改。',

	// Manage page
	'ACP_KNOWLEDGEBASE_DELETE_CATEGORY_NOT_UPDATED'	=> array(
		1	=> '分类已成功删除。<br /><br />请注意，此分类中有%d篇文章已属于新分类。以下文章已经存在：<br />%s',
		2	=> '分类已成功删除。<br /><br />请注意，此分类中有%d篇文章已属于新分类。以下文章已经存在：<br />%s',
	),
	'ACP_KNOWLEDGEBASE_DELETE_CATEGORY_NOT_DELETED'	=> array(
		1	=> '分类已成功删除。<br /><br />请注意，此分类中有%d篇文章属于其他分类。以下文章<strong>未</strong>被删除：<br />%s',
		2	=> '分类已成功删除。<br /><br />请注意，此分类中有%d篇文章属于其他分类。以下文章<strong>未</strong>被删除：<br />%s',
	),


	'ACP_KNOWLEDGEBASE_MANAGE_EXPLAIN'			=> '在此页面您可以添加、编辑、删除和重新排序分类。分类是相关文章的集合。每个分类可以包含无限数量的文章。',
	'ACP_KNOWLEDGEBASE_CATEGORY'				=> '分类',
	'ACP_KNOWLEDGEBASE_CREATE_CATEGORY'			=> '创建分类',
	'ACP_KNOWLEDGEBASE_CREATE_CATEGORY_EXPLAIN'	=> '使用下面的表单您可以创建一个将在知识库中显示的新分类。',
	'ACP_KNOWLEDGEBASE_DELETE_CATEGORY'			=> '删除分类',
	'ACP_KNOWLEDGEBASE_DELETE_CATEGORY_EXPLAIN'	=> '使用下面的表单您可以删除知识库中的现有分类。您可以删除与此分类关联的所有文章，或将它们移动到另一个分类。<strong>已存在于其他分类中的文章不会被删除或移动。</strong>',
	'ACP_KNOWLEDGEBASE_EDIT_CATEGORY'			=> '编辑分类',
	'ACP_KNOWLEDGEBASE_EDIT_CATEGORY_EXPLAIN'	=> '使用下面的表单您可以更新将在知识库中显示的现有分类。',
	'ACP_KNOWLEDGEDABE_INVALID_HASH'			=> '链接已损坏。哈希值无效。',
	'ACP_ARTICLES'								=> '文章',
	'ACP_CATEGORIES'							=> '分类',
	'ACP_CATEGORY_SETTINGS'						=> '分类设置',
	'ACP_CATEGORY_NAME'							=> '分类名称',
	'ACP_CATEGORY_NAME_EXPLAIN'					=> '分类名称显示在每篇文章的首页、分类查看页和文章查看页上。在ACP中管理分类时，分类名称也用于识别您的分类。',
	'ACP_CATEGORY_DESCRIPTION'					=> '分类描述',
	'ACP_CATEGORY_DESCRIPTION_EXPLAIN'			=> '当选择某个分类时，分类描述会显示在首页上。',
	'ACP_ADD_CATEGORY'							=> '创建新分类',
	'ACP_DELETE_ARTICLES'						=> '删除文章',
	'ACP_MOVE_ARTICLES'							=> '移动文章',
	'ACP_DELETE_CATEGORY_CONFIRM'				=> '您确定要移除此分类吗？',
	'ACP_CATEGORY_ADDED'						=> '分类已成功添加。',
	'ACP_CATEGORY_DELETED'						=> '分类已成功移除。',
	'ACP_CATEGORY_EDITED'						=> '分类已成功编辑。',
));