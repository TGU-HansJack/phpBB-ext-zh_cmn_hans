<?php
/**
*
* application [Chinese Simplified]
*
* @package language
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, [
	'APPLICATION_SUBJECT'			=> '来自 %s 的申请',
	'APPLICATION_MESSAGE'			=> '用户 [b]%1$s[/b] 使用申请表单提交了以下信息。' . "\n" . '[b]真实姓名[/b]: %2$s' . "\n" . '[b]IP:[/b] %3$s'. "\n" . '[b]邮箱:[/b] %4$s'. "\n" . '[b]申请职位[/b]: %5$s' . "\n" . '[b]申请理由:[/b] %6$s',
	'APPLICATION_SEND'				=> '您的申请已发送给本论坛的管理员。他们将在接下来的几天内决定您的申请。',
	'APPLICATION_PAGETITLE'			=> '申请表单',
	'APPLICATION_WELCOME_MESSAGE'	=> '欢迎使用申请表单。我们有开放的职位供您申请。请填写以下表单以申请所选职位。祝您好运！<br><br><strong><em>标有星号的项目必须填写！</em></strong>',
	'APPLICATION_REALNAME'			=> '真实姓名',
	'APPLICATION_EMAIL'				=> '电子邮件地址',
	'APPLICATION_POSITION'			=> '您希望申请的职位',
	'APPLICATION_WHY'				=> '为什么选择您',
	'APP_NOT_COMPLETELY_FILLED'		=> '您需要完成申请中的所有字段。',
	'APP_COMPLETE_NAME_WHY'			=> '您必须提供姓名和申请理由。',
	'ADD_ATTACHMENT_EXPLAIN'		=> '附加文件以帮助我们决定您的申请。',
	'ADD_ATTACHMENT_REQ'			=> '<strong>您必须附加文件才能被考虑担任该职位</strong>。',
	'APPLICATION_REQUIRES_ATTACHMENT'	=> '请为所申请的职位附加文件。',
	'APPLICATION_QUESTIONS'			=> '请回答以下问题',
	'APPLICATION_QUESTIONS_REQUIRED'	=> '所有问题都必须回答',
	'APPLICATION QUESTION_ERROR'	=> '您没有回答所有问题',
	'APPLICATION_REQUIRES_WHY'		=> '您需要回答为什么选择您',
	'APPLICATION_ANSWER_TOO_SHORT'	=> '问题 <em>%1s</em> 包含的字符太少',
]);