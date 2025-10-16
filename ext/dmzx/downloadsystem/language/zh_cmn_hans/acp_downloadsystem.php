<?php
/**
*
* @package phpBB Extension - Download System
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
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
	'ACP_ADD'							=> '添加',
	'ACP_ALL_DOWNLOADS'					=> '所有下载',
	'ACP_ANNOUNCE_ENABLE'				=> '发布新下载公告',
	'ACP_ANNOUNCE_ENABLE_EXPLAIN'		=> '如果启用，则会在指定论坛中发布新下载公告。',
	'ACP_ANNOUNCE_LOCK'					=> '锁定公告',
	'ACP_ANNOUNCE_LOCK_EXPLAIN'			=> '如果启用，主题将被锁定。',
	'ACP_ANNOUNCE_ID'					=> '公告版块',
	'ACP_ANNOUNCE_ID_EXPLAIN'			=> '在此输入您想要发布新下载公告的版块ID。',
	'ACP_ANNOUNCE_MSG'					=> '你好,

我们有一个新的下载!

[b]标题:[/b] %1$s
[b]描述:[/b] %2$s
[b]分类:[/b] %3$s
[b]点击 %4$s 前往下载页面![/b]

祝你愉快!',
	'ACP_ANNOUNCE_SETTINGS'				=> '公告设置',
	'ACP_ANNOUNCE_TITLE'				=> '%1$s',
	'ACP_CAT_NAME_SHOW_YES'				=> '是',
	'ACP_CAT_NAME_SHOW_NO'				=> '否',
	'ACP_NEW_CAT_NAME_SHOW'				=> '在首页上传显示',
	'ACP_NEW_CAT_NAME_SHOW_EXPLAIN'		=> '允许上传的组别在上传区域显示分类。<br><strong>注意:</strong> 管理员始终可以在上传区看到所有分类。',
	'ACP_ANNOUNCE_UP'					=> '重新发布公告',
	'ACP_ANNOUNCE_UP_EXPLAIN'			=> '激活后，可以重新发布下载公告。消息将以更新信息的形式发送',
	'ACP_ANNOUNCE_UP_MSG'				=> '你好,

我们有一个已更新的下载!

[b]标题:[/b] %1$s

[b]描述:[/b] %2$s

[b]分类:[/b] %3$s

[b]点击 %4$s 前往分类![/b]

祝你愉快!',
	'ACP_ANNOUNCE_UP_TITLE'				=> '[更新] %1$s',
	'ACP_BASIC'							=> '基本设置',
	'ACP_CAT'							=> '分类',
	'ACP_CAT_SUB'						=> '含子分类的分类',
	'ACP_CATEGORIES'					=> '分类',
	'ACP_CAT_DELETE'					=> '删除分类',
	'ACP_CAT_DELETE_DONE'				=> '您的分类已成功删除',
	'ACP_CAT_DELETE_EXPLAIN'			=> '您可以在这里删除一个分类。',
	'ACP_CAT_EDIT_DONE'					=> '您的分类已成功更新',
	'ACP_CAT_EXIST'						=> '该文件夹名称已在您的网站空间中存在！',
	'ACP_CAT_EXPLAIN'					=> '在此输入分类，您的下载将在此列出',
	'ACP_CAT_INDEX'						=> '分类索引',
	'ACP_CAT_NAME_ERROR'				=> '您需要为分类输入一个文件夹名称！',
	'ACP_CAT_NEW'						=> '添加新分类',
	'ACP_CAT_NEW_DONE'					=> '您的新分类已添加并且文件夹已在您的网站空间中成功创建！',
	'ACP_CAT_NEW_EXPLAIN'				=> '您可以在这里添加新分类。',
	'ACP_CAT_NOT_EXIST'					=> '请求的分类不存在！',
	'ACP_CAT_SELECT'					=> '您可以在这里添加、编辑或删除分类。',
	'ACP_CAT_NO_CATEGORIES'				=> '暂无分类',
	'ACP_CAT_OF'						=> '/',
	'ACP_CLICK'							=> '这里',
	'ACP_CONFIG_SUCCESS'				=> '配置已成功更新',
	'ACP_COPY_NEW'						=> '复制为草稿',
	'ACP_COST_ERROR'					=> '您不能为下载设置负数费用！<br>输入0表示免费或输入任意正数值。',
	'ACP_COST_EXPLAIN'					=> '在这里您可以设置用户需要支付多少%1$s才能下载此文件。设置为0则表示免费下载。',
	'ACP_COST_FREE'						=> '免费',
	'ACP_COST_SHORT'					=> '费用',
	'ACP_DELETE_HAS_FILES'				=> '该分类中仍有文件！<br>请先删除它们或将它们移动到其他分类！',
	'ACP_DELETE_SUB_CATS'				=> '请先删除您的子分类！',
	'ACP_DEL_CAT'						=> '您确定要删除分类 <strong>%1$s</strong> 吗？<br>如果其中没有更多下载，Web服务器上的物理文件夹也将被移除！',
	'ACP_DEL_CAT_EXPLAIN'				=> '您可以在这里删除现有分类。',
	'ACP_DEL_DOWNLOAD'					=> '删除下载',
	'ACP_DEL_DOWNLOADS_TO'				=> '将下载移动到',
	'ACP_DEL_DOWNLOAD_YES'				=> '是否连同下载一起删除分类？',
	'ACP_DEL_SUBS'						=> '删除子分类',
	'ACP_DEL_SUBS_TO'					=> '将子分类移动到',
	'ACP_DEL_SUBS_YES'					=> '是否连同子分类一起删除分类？',
	'ACP_DOWNLOADS'						=> '下载',
	'ACP_DOWNLOAD_DELETED'				=> '您的下载已成功删除。',
	'ACP_DOWNLOAD_UPDATED'				=> '您的下载已成功更新',
	'ACP_DOWNLOAD_SYSTEM'				=> '下载系统',
	'ACP_EDIT_CAT'						=> '编辑分类',
	'ACP_EDIT_CAT_EXPLAIN'				=> '您可以在这里编辑现有分类。',
	'ACP_EDIT_DOWNLOADS'				=> '编辑下载',
	'ACP_EDIT_DOWNLOADS_EXPLAIN'		=> '您可以在这里编辑所选的下载。',
	'ACP_EDIT_FILENAME'					=> '保存的文件',
	'ACP_EDIT_FILENAME_EXPLAIN'			=> '<strong>重要：</strong> 如果您在这里更改文件名，将不会进一步检查该文件是否确实存在于您的网站空间上。<strong>您需要通过FTP上传新文件并手动删除旧文件！</strong>',
	'ACP_EDIT_SUB_CAT_EXPLAIN'			=> '已创建的子目录无法编辑。因此，如果您想要不同的子目录，需要删除当前分类并创建一个新分类！',
	'ACP_FILE_TOO_BIG'					=> '文件大于主机允许的大小！',
	'ACP_DL_ERROR_CATEGORY_IMAGE'		=> '您的分类图像出现错误：',
	'ACP_FORUM_ID_ERROR'				=> '输入的版块ID不存在！',
	'ACP_EDS_INDEX'						=> '下载系统',
	'ACP_MANAGE_DOWNLOADS_EXPLAIN'		=> '您可以在这里添加、编辑或删除您的下载 <code>[URL]</code>。',
	'ACP_MULTI_DOWNLOAD'				=> '%d 个下载',
	'ACP_NEED_DATA'						=> '您需要填写所有字段！',
	'ACP_NEW_ADDED'						=> '您的条目已成功添加到数据库',
	'ACP_NEW_CAT'						=> '新分类',
	'ACP_NEW_CAT_DESC'					=> '分类描述',
	'ACP_NEW_CAT_DESC_EXPLAIN'			=> '为您的新分类输入有用的描述。<br>BBCode、表情符号和链接将被自动识别。',
	'ACP_NEW_CAT_NAME'					=> '分类名称',
	'ACP_NEW_CAT_PARENT'				=> '父分类',
	'ACP_NEW_COPY_DOWNLOAD'				=> '复制下载',
	'ACP_NEW_COPY_DOWNLOAD_EXPLAIN'		=> '您选择复制一个已存在的下载作为您的新下载。这将节省一些时间，特别是当您想上传新版本时',
	'ACP_NEW_DESC'						=> '描述',
	'ACP_NEW_DESC_EXPLAIN'				=> '在此输入您的下载描述。',
	'ACP_NEW_DL_CAT'					=> '分类',
	'ACP_NEW_DL_CAT_EXPLAIN'			=> '在此选择您的下载应该存放的分类。',
	'ACP_NEW_DOWNLOAD'					=> '新下载',
	'ACP_NEW_DOWNLOAD_EXPLAIN'			=> '您可以在这里添加新下载。',
	'ACP_NEW_DOWNLOAD_SIZE'				=> '您的主机允许的最大文件大小为 <strong>%1$s %2$s</strong>！由于上传所需的时间，这个值可能会更低！',
	'ACP_NEW_FILENAME'					=> '文件名',
	'ACP_NEW_FILENAME_EXPLAIN'			=> '选择要上传的文件。',
	'ACP_NEW_SUB_CAT_EXPLAIN'			=> '在此输入您想在网站空间中用于此分类的文件夹名称（不带斜杠！）。<br>此文件夹将在您的根目录/ext/dmzx/downloadsystem/files/ 文件夹下自动创建。<br>允许的字符包括a-z、A-Z、0-9、连字符（-）和下划线（_）。',
	'ACP_NEW_SUB_CAT_NAME'				=> '分类路径名',
	'ACP_NEW_TITLE'						=> '标题',
	'ACP_NEW_TITLE_EXPLAIN'				=> '在此输入您的新下载标题。',
	'ACP_NEW_VERSION'					=> '版本',
	'ACP_NEW_VERSION_EXPLAIN'			=> '在此输入您的下载版本。',
	'ACP_NO_CAT'						=> '没有可用的分类！<br>您需要先创建至少一个分类，然后才能开始添加下载！',
	'ACP_NO_CAT_ID'						=> '无分类ID',
	'ACP_NO_CAT_PARENT'					=> '无父分类',
	'ACP_NO_CAT_UPLOAD'					=> '没有可用的分类！<br>您需要先创建至少一个分类，然后才能开始添加文件！',
	'ACP_NO_DOWNLOADS'					=> '暂无下载',
	'ACP_NO_FILENAME'					=> '您必须输入属于您上传的文件！',
	'ACP_PAGINATION_ACP'				=> '设置ACP管理下载页面的分页数量',
	'ACP_PAGINATION_ACP_EXPLAIN'		=> '在此设置您希望在ACP管理下载页面上看到的条目数。<em>默认为5。</em>',
	'ACP_PAGINATION_DOWNLOADS'			=> '设置分类页面的分页数量',
	'ACP_PAGINATION_DOWNLOADS_EXPLAIN'	=> '在此设置您希望在分类页面上看到的条目数。<em>默认为25。</em>',
	'ACP_PAGINATION_ERROR_ACP'			=> '您不能设置小于5的值！',
	'ACP_PAGINATION_ERROR_USER'			=> '您不能设置小于3的值！',
	'ACP_PAGINATION_ERROR_DOWNLOADS'	=> '您不能设置小于10的值！',
	'ACP_PAGINATION_USER'				=> '设置下载页面的分页数量',
	'ACP_PAGINATION_USER_EXPLAIN'		=> '在此设置您希望在下载页面上看到的条目数。<em>默认为3。</em>',
	'ACP_PARENT_OPTION_NAME'			=> '选择分类',
	'ACP_REALLY_DELETE'					=> '您确定要删除您的下载吗？<br>Web服务器上的物理文件也将被删除！',
	'ACP_SINGLE_DOWNLOAD'				=> '1 个下载',
	'ACP_SORT_ASC'						=> '升序',
	'ACP_SORT_CAT'						=> '分类',
	'ACP_SORT_DESC'	            		=> '降序',
	'ACP_SORT_DIRECTION'				=> '排序方向',
	'ACP_SORT_KEYS'						=> '排序依据',
	'ACP_SORT_TITLE'					=> '标题',
	'ACP_SUB_DL_CAT'					=> '子分类',
	'ACP_SUB_NO_CAT'					=> '-----------',
	'ACP_SUB_DL_CAT_EXPLAIN'			=> '在此选择子分类。',
	'ACP_SUB_HAS_CAT_EXPLAIN'			=> '该分类有子分类，因此无法链接到其他分类。',
	'ACP_UPLOAD_FILE_EXISTS'			=> '您想要上传的文件在此分类中已存在！',
	'ACP_WRONG_CHAR'					=> '您在分类路径名中输入了错误的字符！<br>允许的字符包括：a-z、A-Z、0-9，以及连字符（-）和下划线（_）！',
	'ACP_MANAGE_CONFIG_EXPLAIN'			=> '您可以在这里设置一些基本值。',
	'ACP_SET_USERNAME'					=> '转账用户名',
	'ACP_SET_USERNAME_EXPLAIN'			=> '您可以在这里设置一个用户名，下载费用将转移到该用户名下。如果不需要接收上述费用，请留空。',
	'ACP_FTP_OR_UPLOAD'					=> '您只能执行FTP上传<strong>或</strong>普通上传！',
	'ACP_NEW_FTP_FILENAME_EXPLAIN'		=> '如果您想使用FTP上传方法，请在此输入文件名（例如：sample.zip）。',
	'ACP_NEW_FTP_FILENAME'				=> 'FTP文件名',
	'ACP_UPLOAD_METHOD'					=> '上传方法',
	'ACP_UPLOAD_METHOD_EXPLAIN'			=> '您可以通过FTP或直接上传添加新文件。如果您要使用FTP上传方法，需要在输入之前将文件上传到正确的分类<strong>目录</strong>中！您一次只能使用其中一种方法！',
	'ACP_UPLOAD_FILE_NOT_EXISTS'		=> '文件在指定分类中不存在。由于您选择了FTP上传方法，此文件需要在添加之前通过FTP上传到正确的目录<strong>中</strong>！',
	'ACP_DM_EDS_IMAGE_SIZE'				=> '最大图像文件大小',
	'ACP_DM_EDS_IMAGE_SIZE_EXPLAIN'		=> '每个文件的最大大小。如果此值为0，则可上传的文件大小仅受您的PHP配置限制。<br>平均图像文件大小：PNG ~ 2-4 kB，GIF ~ 6-8 kB，JPG ~ 9-12 kB',
	'ACP_DM_EDS_IMAGE_DIR'				=> '下载系统图像上传目录',
	'ACP_DM_EDS_IMAGE_DIR_EXPLAIN'		=> '博客图像的存储路径。请注意，如果您已经上传了博客图像并更改此目录，则需要手动将文件复制到新位置。',
	'ACP_DM_EDS_IMAGE_CAT_DIR'			=> '分类图像上传目录',
	'ACP_DM_EDS_IMAGE_CAT_DIR_EXPLAIN'	=> '分类图像的存储路径。请注意，如果您已经上传了分类图像并更改此目录，则需要手动将文件复制到新位置。',
	'ACP_DM_EDS_ALLOW_DL_IMG'			=> '允许下载文件图像',
	'ACP_DM_EDS_ALLOW_DL_IMG_EXPLAIN'	=> '允许显示文件图像。',
	'ACP_DM_EDS_ALLOW_CAT_IMG'			=> '允许分类图像',
	'ACP_DM_EDS_ALLOW_CAT_IMG_EXPLAIN'	=> '允许显示分类图像。',
	'ACP_DM_EDS_ALLOW_BBCODES'			=> '允许BBCodes',
	'ACP_DM_EDS_ALLOW_BBCODES_EXPLAIN'	=> '允许在下载系统扩展中使用BBCodes。',
	'DM_EDS_ALLOW_SMILIES'				=> '允许表情符号',
	'DM_EDS_ALLOW_SMILIES_EXPLAIN'		=> '允许在下载系统扩展中使用表情符号。',
	'ACP_DM_EDS_ALLOW_MAGIC_URL'		=> '允许链接',
	'ACP_DM_EDS_ALLOW_MAGIC_URL_EXPLAIN' => '如果禁止，则在下载系统扩展中禁用<code>[URL]</code> BBCode和自动/魔术URL。',
	'ACP_NEW_IMAGE_DL'					=> '图像',
	'ACP_DL_DOWNLOAD_IMAGE'				=> '下载图像',
	'ACP_DL_DOWNLOAD_IMAGE_EXPLAIN'		=> '为此文件上传图像。最大文件大小和文件目录在配置设置中设定。',
	'ACP_DL_DOWNLOAD_IMAGE_CURRENT'		=> '当前图像',
	'ACP_CHANGEDLIMAGE'					=> '更改图像？',
	'ACP_DL_CATEGORY_IMAGE'				=> '分类图像',
	'ACP_DL_CATEGORY_IMAGE_EXPLAIN'		=> '为此分类上传图像。最大文件大小和文件目录在配置设置中设定。',
	'ACP_DL_CATEGORY_IMAGE_CURRENT'		=> '当前图像',
	'ACP_CHANGECATIMAGE'				=> '更改图像？',
	'ACP_DM_CATEGORIES'					=> '',
	'ACP_DM_CATEGORIES_IMAGE'			=> '图像',
	'ACP_DM_CATEGORIES_NAME'			=> '分类名称',
	'ACP_DM_CATEGORIES_DESC'			=> '描述',
	'ACP_DM_CATEGORIES_SHOW_INDEX' 		=> '在上传页面显示',
	'ACP_SHOW_DONATION'					=> '在下载文件前显示捐赠按钮',
	'ACP_SHOW_DONATION_EXPLAIN' 		=> '下载文件时将显示捐赠按钮。',
	'ACP_DONATION_URL'					=> '捐赠页面URL',
	'ACP_DONATION_URL_EXPLAIN' 			=> '设置捐赠页面URL。将在新标签页中打开并自动开始下载。',
]);