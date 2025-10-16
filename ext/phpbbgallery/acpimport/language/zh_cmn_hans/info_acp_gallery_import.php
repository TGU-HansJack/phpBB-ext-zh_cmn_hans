<?php
/**
 * phpBB Gallery - ACP Import Extension [Chinese Translation]
 *
 * @package   phpbbgallery/acpimport
 * @author    nickvergessen
 * @author    satanasov
 * @author    Leinad4Mind
 * @copyright 2007-2012 nickvergessen, 2014- satanasov, 2018- Leinad4Mind
 * @license   GPL-2.0-only
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

$lang = array_merge($lang, [
	'ACP_IMPORT_ALBUMS'				=> '导入图像',
	'ACP_IMPORT_ALBUMS_EXPLAIN'		=> '在这里您可以批量从文件系统导入图像。导入图像前，请确保手动调整图像大小。',

	'IMPORT_ALBUM'					=> '要导入图像的相册：',
	'IMPORT_DEBUG_MES'				=> '已导入 %1$s 张图像。还剩 %2$s 张图像。',
	'IMPORT_DIR_EMPTY'				=> '文件夹 %s 为空。您需要先上传图像，然后才能导入。',
	'IMPORT_FINISHED'				=> '所有 %1$s 张图像已成功导入。',
	'IMPORT_FINISHED_ERRORS'		=> '%1$s 张图像已成功导入，但出现以下错误：<br /><br />',
	'IMPORT_MISSING_ALBUM'			=> '请选择要导入图像的相册。',
	'IMPORT_SELECT'					=> '选择您想要导入的图像。成功上传的图像将被删除。所有其他图像仍然可用。',
	'IMPORT_SCHEMA_CREATED'			=> '导入方案已成功创建，请等待图像导入完成。',
	'IMPORT_USER'					=> '上传者',
	'IMPORT_USER_EXP'				=> '您可以在此将图像添加到另一个用户。',
	'IMPORT_USERS_PEGA'				=> '上传到用户的个人画廊。',

	'MISSING_IMPORT_SCHEMA'			=> '指定的导入方案 (%s) 未找到。',

	'NO_FILE_SELECTED'				=> '您需要至少选择一个文件。',

	'GALLERY_CORE_NOT_FOUND'		=> '必须先安装并启用 phpBB Gallery Core 扩展。',
	'EXTENSION_ENABLE_SUCCESS'		=> '扩展已成功启用。',
]);