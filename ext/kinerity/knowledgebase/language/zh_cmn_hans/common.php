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
	'ALL_CATEGORIES'		=> '所有分类',
	'APPROVE'				=> '批准',
	'APPROVE_ARTICLE'		=> '批准文章',
	'APPROVED'				=> '已批准',
	'ARTICLES'				=> '文章',
	'ARTICLE_CONFIRM'		=> '您确定要%1$s这篇文章吗？',
	'ARTICLE_DENIED'		=> '文章被拒绝',
	'ARTICLE_STORED_MOD'	=> '这篇文章已成功提交，但在公开查看之前需要版主批准。',
	'ARTICLE_DISAPPROVED'	=> '文章未获批准',
	'AUTHOR'				=> '作者',

	'BUTTON_APPROVE'		=> '批准',
	'BUTTON_DELETE'			=> '删除',
	'BUTTON_DENY'			=> '拒绝',
	'BUTTON_EDIT'			=> '编辑',
	'BUTTON_NEW_ARTICLE'	=> '新建文章',
	'BUTTON_DISAPPROVE'		=> '否决',

	'CATEGORIES'	=> '分类',
	'CHANGE_POSTER'	=> '更改发帖人',

	'DELETE_ARTICLE'		=> '删除文章',
	'DENIED'				=> '已拒绝',
	'DENY'					=> '拒绝',
	'DENY_ARTICLE'			=> '拒绝文章',
	'DESCRIPTION'			=> '描述',
	'DISAPPROVE'			=> '否决',
	'DISAPPROVE_ARTICLE'	=> '否决文章',
	'DISAPPROVED'			=> '未批准',

	'EDIT_ARTICLE'	=> '编辑文章',

	'EMTPY_TITLE'		=> '发布文章时必须输入标题。',
	'EMPTY_DESCRIPTION'	=> '发布文章时必须输入描述。',
	'EMPTY_CATEGORY'	=> '您必须为此文章指定至少一个所属分类。',
	'EMPTY_TEXT'		=> '发布文章时必须输入内容。',

	'INVALID_MODE'	=> '无效模式',
	'INVALID_TYPE'	=> '无效类型',

	'KNOWLEDGEBASE'			=> '知识库',
	'KNOWLEDGEBASE_EXPLAIN'	=> '本节包含详细的文章，阐述了用户经常遇到的一些常见问题。社区成员提交的文章由团队检查准确性。如果您在这里找不到问题的答案，我们建议您也浏览论坛并使用搜索功能。',
	'KNOWLEDGEBASE_TITLE'	=> '查看知识库',

	'LAST_MODIFIED'		=> '最后修改',
	'LINK_TO_ARTICLE'	=> '链接到此文章',

	'NARROW_SEARCH'	=> '通过选择分类缩小搜索范围',

	'NOTIFICATION_ARTICLE_APPROVED'		=> '<strong>文章已批准</strong>：%1$s',
	'NOTIFICATION_ARTICLE_DELETED'		=> '<strong>文章已删除</strong>：%1$s',
	'NOTIFICATION_ARTICLE_DENIED'		=> '<strong>文章被拒绝</strong>：%1$s',
	'NOTIFICATION_ARTICLE_DISAPPROVED'	=> '<strong>文章未获批准</strong>：%1$s',
	'NOTIFICATION_ARTICLE_IN_QUEUE'		=> '<strong>知识库文章审批</strong>请求：%1$s',

	'NO_ARTICLE'	=> '所请求的文章不存在。',
	'NO_ARTICLES'	=> '知识库或此分类中没有文章。',
	'NO_CATEGORY'	=> '所请求的分类不存在。',
	'NO_PAGE_MODE'	=> '指定的页面模式无效或未指定。',

	'POST_ARTICLE'	=> '发表新文章',

	'TYPE'	=> '类型',

	'VIEWING_KNOWLEDGEBASE'	=> '正在查看知识库',

	'WRITTEN_BY'	=> '撰写者',
	'WRITTEN_ON'	=> '撰写于',
	
	// Additional keys for template files
	'KB_ALL_CATEGORIES'		=> '所有分类',
	'KB_BUTTON_NEW_ARTICLE'	=> '新建文章',
	'KB_NARROW_SEARCH'		=> '通过选择分类缩小搜索范围',
	'KB_POST_ARTICLE'		=> '发表文章',
	'KB_TYPE'				=> '类型',
	'KB_ARTICLES'			=> '文章',
	'KB_NO_ARTICLES'		=> '没有文章',
	'KB_CHANGE_POSTER'		=> '更改发帖人',
	'KB_DESCRIPTION'		=> '描述',
	'KB_CATEGORIES'			=> '分类',
	'KB_APPROVE_ARTICLE'	=> '批准文章',
	'KB_BUTTON_APPROVE'		=> '批准',
	'KB_DISAPPROVE_ARTICLE'	=> '否决文章',
	'KB_BUTTON_DISAPPROVE'	=> '否决',
	'KB_DENY_ARTICLE'		=> '拒绝文章',
	'KB_BUTTON_DENY'		=> '拒绝',
	'KB_EDIT_ARTICLE'		=> '编辑文章',
	'KB_BUTTON_EDIT'		=> '编辑',
	'KB_DELETE_ARTICLE'		=> '删除文章',
	'KB_BUTTON_DELETE'		=> '删除',
	'KB_LINK_TO_ARTICLE'	=> '链接到此文章',
	'KB_LAST_MODIFIED'		=> '最后修改',
	'KB_LAST_MODIFIED_BY'	=> '最后修改者',
	'KB_WRITTEN_BY'		=> '撰写者',
	'KB_POST_A'			=> '发表文章', // Used in posting_body.html for page title and card title
));