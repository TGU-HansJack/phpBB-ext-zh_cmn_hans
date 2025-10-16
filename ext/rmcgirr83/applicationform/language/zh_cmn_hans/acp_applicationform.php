<?php

/**
*
*
* @package - Application Form language
* @copyright 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, [
	'ACP_APPLICATIONFORM_SETTINGS'		=> '申请表单选项',
	'APPLICATIONFORM_SETTINGS'			=> '设置',
	'APPLICATIONFORM_FORUM'				=> '论坛',
	'APPLICATIONFORM_FORUM_EXPLAIN'		=> '选择申请应该发布到的论坛。',
	'APPFORM_FORUM_NO_ATTACH'			=> '所选论坛不允许附件。',
	'APPLICATIONFORM_POSITIONS'			=> '申请职位',
	'APPLICATIONFORM_POSITIONS_EXPLAIN'	=> '每个职位占一行。',
	'APPFORM_SETTINGS_SUCCESS'			=> '申请表单设置已保存。',
	'APPFORM_MUST_HAVE_POSITIONS'		=> '您必须至少有一个职位。',
	'APPFORM_GUEST'						=> '允许游客',
	'APPFORM_GUEST_EXPLAIN'				=> '如果设为是，访问您论坛的游客将可以访问申请表单。',
	'APPLICATIONFORM_NRU'				=> '允许新注册用户组',
	'APPLICATIONFORM_NRU_EXPLAIN'		=> '如果设为是，新注册用户组的成员将可以访问申请表单。',
	'APPLICATIONFORM_ALLOW_ATTACHMENT'	=> '允许附件',
	'APPLICATIONFORM_ALLOW_ATTACHMENT_EXPLAIN' => '如果设为是，将允许上传doc、pdf和文本类型的文件。',
	'APPLICATIONFORM_ATTACHMENT_REQ'	=> '需要附件',
	'APPLICATIONFORM_ATTACHMENT_REQ_EXPLAIN' => '如果设为是，表单将要求为所申请的职位附加一个附件。',
	'APPLICATIONFORM_QUESTIONS'			=> '问题',
	'APPLICATIONFORM_QUESTIONS_EXPLAIN'	=> '您可以在这里放置任何想要在表单中询问的额外问题。每个问题占一行。',
	'APPFORM_INFO_PREVIEW'		=> '预览',
	'APPFORM_INFO'				=> '申请表单信息',
	'APPFORM_INFO_EXPLAIN'		=> '此消息显示在申请表单页面上',
	//Donation
	'PAYPAL_IMAGE_URL'          => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                => '使用PayPal捐赠',
	'BUY_ME_A_BEER_URL'         => 'https://paypal.me/RMcGirr83',
	'BUY_ME_A_BEER'				=> '为创建此扩展而请我喝杯啤酒',
	'BUY_ME_A_BEER_SHORT'		=> '为此扩展捐款',
	'BUY_ME_A_BEER_EXPLAIN'		=> '此扩展完全免费。这是我为phpBB社区的乐趣和使用而花费时间的项目。如果您喜欢使用此扩展，或者它使您的论坛受益，请考虑<a href="https://paypal.me/RMcGirr83" target="_blank" rel="noreferrer noopener">请我喝杯啤酒</a>。这将不胜感激。<i class="fa fa-smile-o" style="color:green;font-size:1.5em;" aria-hidden="true"></i>',
]);