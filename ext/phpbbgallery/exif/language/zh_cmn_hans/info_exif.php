<?php
/**
 * phpBB Gallery - ACP Exif Extension [Chinese Translation]
 *
 * @package   phpbbgallery/exif
 * @author    nickvergessen
 * @author    satanasov
 * @author    Leinad4Mind
 * @copyright 2007-2012 nickvergessen, 2014- satanasov, 2018- Leinad4Mind
 * @license   GPL-2.0-only
  */

/**
* @ignore
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

/**
* Language for Exif data
*/
$lang = array_merge($lang, [
	'EXIF_DATA'					=> 'Exif数据',
	'EXIF_APERTURE'				=> '光圈值',
	'EXIF_CAM_MODEL'			=> '相机型号',
	'EXIF_DATE'					=> '图像拍摄时间',
	'EXIF_EXPOSURE'				=> '快门速度',
	'EXIF_EXPOSURE_EXP'			=> '%s 秒',// 'EXIF_EXPOSURE' unit
	'EXIF_EXPOSURE_BIAS'		=> '曝光补偿',
	'EXIF_EXPOSURE_BIAS_EXP'	=> '%s EV',// 'EXIF_EXPOSURE_BIAS' unit
	'EXIF_EXPOSURE_PROG'		=> '曝光程序',
	'EXIF_EXPOSURE_PROG_0'		=> '未定义',
	'EXIF_EXPOSURE_PROG_1'		=> '手动',
	'EXIF_EXPOSURE_PROG_2'		=> '正常程序',
	'EXIF_EXPOSURE_PROG_3'		=> '光圈优先',
	'EXIF_EXPOSURE_PROG_4'		=> '快门优先',
	'EXIF_EXPOSURE_PROG_5'		=> '创意程序（偏向景深）',
	'EXIF_EXPOSURE_PROG_6'		=> '运动程序（偏向快速快门）',
	'EXIF_EXPOSURE_PROG_7'		=> '肖像模式（用于背景失焦的近景照片）',
	'EXIF_EXPOSURE_PROG_8'		=> '风景模式（用于背景聚焦的风景照片）',
	'EXIF_FLASH'				=> '闪光灯',
	'EXIF_FLASH_CASE_0'			=> '未使用闪光灯',
	'EXIF_FLASH_CASE_1'			=> '使用了闪光灯',
	'EXIF_FLASH_CASE_5'			=> '未检测到反射光',
	'EXIF_FLASH_CASE_7'			=> '检测到反射光',
	'EXIF_FLASH_CASE_8'			=> '开，未使用闪光灯',
	'EXIF_FLASH_CASE_9'			=> '使用了闪光灯，强制闪光模式',
	'EXIF_FLASH_CASE_13'		=> '使用了闪光灯，强制闪光模式，未检测到反射光',
	'EXIF_FLASH_CASE_15'		=> '使用了闪光灯，强制闪光模式，检测到反射光',
	'EXIF_FLASH_CASE_16'		=> '未使用闪光灯，强制闪光模式',
	'EXIF_FLASH_CASE_20'		=> '关，未使用闪光灯，未检测到反射光',
	'EXIF_FLASH_CASE_24'		=> '未使用闪光灯，自动模式',
	'EXIF_FLASH_CASE_25'		=> '使用了闪光灯，自动模式',
	'EXIF_FLASH_CASE_29'		=> '使用了闪光灯，自动模式，未检测到反射光',
	'EXIF_FLASH_CASE_31'		=> '使用了闪光灯，自动模式，检测到反射光',
	'EXIF_FLASH_CASE_32'		=> '无闪光功能',
	'EXIF_FLASH_CASE_48'		=> '关，无闪光功能',
	'EXIF_FLASH_CASE_65'		=> '使用了闪光灯，红眼消除模式',
	'EXIF_FLASH_CASE_69'		=> '使用了闪光灯，红眼消除模式，未检测到反射光',
	'EXIF_FLASH_CASE_71'		=> '使用了闪光灯，红眼消除模式，检测到反射光',
	'EXIF_FLASH_CASE_73'		=> '使用了闪光灯，强制闪光模式，红眼消除模式',
	'EXIF_FLASH_CASE_77'		=> '使用了闪光灯，强制闪光模式，红眼消除模式，未检测到反射光',
	'EXIF_FLASH_CASE_79'		=> '使用了闪光灯，强制闪光模式，红眼消除模式，检测到反射光',
	'EXIF_FLASH_CASE_80'		=> '关，红眼消除',
	'EXIF_FLASH_CASE_88'		=> '自动，未使用闪光灯，红眼消除',
	'EXIF_FLASH_CASE_89'		=> '使用了闪光灯，自动模式，红眼消除模式',
	'EXIF_FLASH_CASE_93'		=> '使用了闪光灯，自动模式，未检测到反射光，红眼消除模式',
	'EXIF_FLASH_CASE_95'		=> '使用了闪光灯，自动模式，检测到反射光，红眼消除模式',
	'EXIF_FOCAL'				=> '焦距',
	'EXIF_FOCAL_EXP'			=> '%s mm',// 'EXIF_FOCAL' unit
	'EXIF_ISO'					=> 'ISO感光度',
	'EXIF_METERING_MODE'		=> '测光模式',
	'EXIF_METERING_MODE_0'		=> '未知',
	'EXIF_METERING_MODE_1'		=> '平均测光',
	'EXIF_METERING_MODE_2'		=> '中央重点平均测光',
	'EXIF_METERING_MODE_3'		=> '点测光',
	'EXIF_METERING_MODE_4'		=> '多点测光',
	'EXIF_METERING_MODE_5'		=> '模式',
	'EXIF_METERING_MODE_6'		=> '局部测光',
	'EXIF_METERING_MODE_255'	=> '其他',
	'EXIF_NOT_AVAILABLE'		=> '不可用',
	'EXIF_WHITEB'				=> '白平衡',
	'EXIF_WHITEB_AUTO'			=> '自动',
	'EXIF_WHITEB_MANU'			=> '手动',

	'DISP_EXIF_DATA'			=> '显示Exif数据',
	'DISP_EXIF_DATA_EXP'		=> '由于您的PHP安装中未包含所需函数"exif_read_data"，此功能目前无法使用。',
	'SHOW_EXIF'					=> '显示/隐藏',
	'VIEWEXIFS_DEFAULT'			=> '默认查看Exif数据',

	'GALLERY_CORE_NOT_FOUND'		=> '必须先安装并启用 phpBB Gallery Core 扩展。',
	'EXTENSION_ENABLE_SUCCESS'		=> '扩展已成功启用。',
]);