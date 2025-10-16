<?php
/**
*
* @package phpBB Extension - Download System
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
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

$lang = array_merge($lang, [
	'EDS_BACK_INDEX'				=> '返回首页',
	'EDS_BACK_LINK'					=> '点击%shere%s返回下载首页',
	'EDS_CATS_NAME'					=> '分类',
	'EDS_CAT_DESC'					=> '描述',
	'EDS_CAT_NAME'					=> '分类',
	'EDS_CAT_IMAGE'					=> '图像',
	'EDS_COST'						=> '费用',
	'EDS_COST_ERROR'				=> '您需要更多的%1$s才能下载此文件',
	'EDS_COST_FREE'					=> '此下载是免费的',
	'EDS_COST_OK'					=> '您有足够的%1$s下载此文件',
	'EDS_DISABLED'					=> '下载系统当前已停用。请稍后再试。<br>如果之后仍然遇到相同问题，请通知管理员。',
	'EDS_DL_NOEXISTS'				=> '此下载不存在',
	'EDS_DOWNLOAD'					=> '下载',
	'EDS_DOWNLOADS'					=> '下载',
	'EDS_DOWNLOAD_FILE'				=> '下载文件',
	'EDS_DOWNLOAD_DONATE'			=> '捐赠',
	'EDS_DOWNLOAD_DONATE_THX'		=> '感谢您的捐赠',
	'EDS_DOWNLOAD_DONATE_MES'		=> '您是否也想进行小额<strong>捐赠</strong><br>或者只是<strong>下载</strong>文件？',
	'EDS_DOWNLOAD_START'			=> '您的下载即将开始！',
	'EDS_DOWNLOAD_NO_PERM'			=> '无权限！',
	'EDS_DOWNLOAD_NOT_DOWNLOAD'		=> '您无法下载此文件',
	'EDS_DOWNLOAD_REDIRECT'			=> '重定向',
	'EDS_DOWNLOAD_EXPLAIN'			=> '点击右侧图标下载所需文件。',
	'EDS_FILE_CLICKS'				=> '总下载量',
	'EDS_FILE_DESC'					=> '描述',
	'EDS_FILE_TITLE'				=> '文件名',
	'EDS_FILE_VERSION'				=> '版本',
	'EDS_FREE'						=> '免费',
	'EDS_INDEX'						=> '首页',
	'EDS_LAST_CHANGED_ON'			=> '最后更改于',
	'EDS_LAST_DOWNLOAD' 			=> '&nbsp;<strong>%1$s</strong><br><br>&nbsp;<span class="downloads-class">已下载: %2$s</span><br>&nbsp;最后更改于: %3$s',
	'EDS_LAST_FILE'					=> '最新文件',
	'EDS_LEGEND'					=> '图例',
	'EDS_LEGEND_ERROR'				=> '您需要更多的%1$s',
	'EDS_LEGEND_FREE'				=> '下载免费',
	'EDS_LEGEND_NO_DL'				=> '您无权下载文件',
	'EDS_LEGEND_OK'					=> '您有足够的%1$s',
	'EDS_MULTI'						=> '%1$s 下载',
	'EDS_NO_CAT'					=> '<strong>抱歉！当前没有可用的分类。</strong><br><br>',
	'EDS_NO_CAT_IN_UPLOAD'			=> '抱歉！当前没有可用的分类。',
	'EDS_NO_DOWNLOADS'				=> '<strong>抱歉！当前没有可用的下载。</strong><br><br>',
	'EDS_NO_FILES'					=> '没有下载',
	'EDS_NO_ID'						=> '未提供ID',
	'EDS_NUMBER_DOWNLOADS'			=> '文件',
	'EDS_REGULAR_DOWNLOAD'			=> '点击这里下载所选文件',
	'EDS_REQUIRES_POINTS'			=> '<strong>由于我们安装了终极积分插件并且此下载需要积分，<br>您需要登录后才能下载此文件！</strong>',
	'EDS_SINGLE'					=> '1 次下载',
	'EDS_SUB_CAT'					=> '子分类',
	'EDS_SUB_CATS'					=> '子分类',
	'EDS_TITLE'						=> '下载',
	'EDS_TITLE_EXPLAIN'				=> '请选择以下分类',
	'EDS_UPLOADED_ON'				=> '上传于',
	'EDS_UPLOAD'					=> '上传',
	'EDS_UPLOADS'					=> '下载系统上传区',
	'EDS_UPLOAD_SECTION'			=> '上传区',
	'EDS_UPLOAD_MESSAGE'			=> '在此上传您的文件到正确的分类。',
	'EDS_FILESIZE'					=> '文件大小',
	'EDS_CAT_NOT_EXIST'				=> '所选分类不存在！',
	'EDS_BACK_DOWNLOADS'			=> '返回下载概览',
	'EDS_NO_PERMISSION'				=> '您没有权限使用下载系统',
	'EDS_NO_DOWNLOAD'				=> '您没有权限从下载系统下载文件',
	'EDS_NO_UPLOAD'					=> '您没有权限使用上传区',
	'EDS_NO_DIRECT_DL'				=> '您无权下载文件',
	'EDS_CAT'						=> '%d 个分类',
	'EDS_CATS'						=> '%d 个分类',
	'EDS_SUB_CATEGORY'				=> '和 %d 个子分类',
	'EDS_SUB_CATEGORIES'			=> '和 %d 个子分类',
	'EDS_CURRENT_VERSION'			=> '当前版本',
	'EDS_NEW_TITLE'					=> '标题',
	'EDS_NEW_TITLE_EXPLAIN'			=> '您的新下载标题。',
	'EDS_NEW_VERSION'				=> '版本',
	'EDS_NEW_VERSION_EXPLAIN'		=> '您的下载版本。',
	'EDS_NEW_DESC'					=> '描述',
	'EDS_NEW_DESC_EXPLAIN'			=> '在此输入您的下载描述。',
	'EDS_NEW_DL_CAT'				=> '分类',
	'EDS_NEW_DL_CAT_EXPLAIN'		=> '在此选择分类。',
	'EDS_NEW_DOWNLOAD'				=> '新下载',
	'EDS_NEW_FILENAME'				=> '文件名',
	'EDS_NEW_FILENAME_EXPLAIN'		=> '选择要上传的文件。',
	'EDS_NEW_DOWNLOAD_SIZE'			=> '文件的最大大小为 <strong>%1$s %2$s</strong>！由于您可能需要上传时间，这个值可能会更低！',
	'EDS_SUBCAT_FILE'				=> '1 个文件',
	'EDS_SUBCAT_FILES'				=> '%1$d 个文件',
	'EDS_DL_IMAGE'					=> '图像',
	'EDS_UPLOAD_FILE_EXISTS'		=> '您想要上传的文件在此分类中已存在！',
	'EDS_NO_FILENAME'				=> '您必须输入属于您上传的文件！',
	'EDS_FILE_TOO_BIG'				=> '文件大于主机允许的大小！',
	'EDS_CLICK'						=> '这里',
	'EDS_ANNOUNCE_TITLE'			=> '%1$s',
	'EDS_ANNOUNCE_MSG'				=> '你好,

我们有一个新的下载!

[b]标题:[/b] %1$s
[b]描述:[/b] %2$s
[b]分类:[/b] %3$s
[b]点击 %4$s 前往下载页面![/b]

祝你愉快!',
	'EDS_NEW_ADDED'					=> '您的条目已成功添加到数据库',
]);