<?php
/**
 * [English [En]]
 * @package cBB Attachments
 * @version 1.0.1 01/07/2024
 *
 * @copyright (c) 2024 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// DO NOT CHANGE
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_AP_CONFIG_EXPLAIN'		=> 'From here you can manage specific options for some attachment formats.',

	'AP_ALLOW_DOWNLOAD'			=> 'Allow download',
	'AP_ALLOW_DOWNLOAD_EXPLAIN'	=> 'Allows the user to download the file.<br >
		If disabled, the download button will not be displayed on the file.',
	'AP_VIEW_TYPE'			=> 'View type',
	'AP_VIEW_TYPE_EXPLAIN'	=> 'Defines how files with this format will be displayed.',

	'AP_SHOW_INFO'				=> 'Show information',
	'AP_SHOW_PLAYER'			=> 'Show player',
	'AP_SHOW_PLAYER_AND_INFO'	=> 'Show player + information',
	'AP_SHOW_PREVIEW'			=> 'Show preview',

	'AP_OPACITY'				=> 'Opacity',
	'AP_POSITION'				=> 'Position',
	'AP_SIZE'					=> 'Size',
	
	// Format: Audio
	'FORMAT_AUDIO_TITLE'		=> 'Audio files',
	'FORMAT_AUDIO_EXPLAIN'		=> 'Specific options and player for audio files.',

	// Format: Basic
	'FORMAT_BASIC_TITLE'		=> 'Basic format',
	'FORMAT_BASIC_EXPLAIN'		=> 'Shows a basic layout for all files not contained in the other modules.<br />
		If disabled, the default phpBB layout will be displayed.',

	// Format: Cad
	'FORMAT_CAD_TITLE'			=> 'CAD files',
	'FORMAT_CAD_EXPLAIN'		=> 'Specific options and preview for AutoCad files.',

	// Format: Image
	'FORMAT_IMAGE_TITLE'			=> 'Images',
	'FORMAT_IMAGE_EXPLAIN'			=> 'Options for image files.',
	'AP_IMAGE_HIDE_TEXT'			=> 'Hide legend',
	'AP_IMAGE_HIDE_TEXT_EXPLAIN'	=> 'Sets whether text displayed below images will be hidden',
	'AP_IMAGE_REMOVE_EXIF'			=> 'Remove Exif data',
	'AP_IMAGE_REMOVE_EXIF_EXPLAIN'	=> 'If enabled, EXIF data embedded in the image (for example: Location, camera, flash, etc.) will be removed when uploaded as an attachment.<br />
		<em>This only affects the jpg or jpeg extension.</em>',
	'AP_IMAGE_WATERMARK'			=> 'Watermark',
	'AP_IMAGE_WATERMARK_EXPLAIN'	=> 'From here you can set a watermark for new uploaded images.',

	// Format: Pdf
	'FORMAT_PDF_TITLE'			=> 'PDF files',
	'FORMAT_PDF_EXPLAIN'		=> 'Specific options and preview for pdf files.',

	// Format: Video
	'FORMAT_VIDEO_TITLE'		=> 'Video files',
	'FORMAT_VIDEO_EXPLAIN'		=> 'Specific options and player for video files.',

	// Format: Custom
	'ADD_EXTENSION'				=> 'Add extension',
	'AP_EXTENSION_IMAGE'		=> 'Image or icon',
	'AP_EXTENSION_NAME'			=> 'Extension',
	'AP_FORMAT_EXTENSIONS'		=> 'Extensions',
	'AP_FORMAT_TITLE'			=> 'Title',
	'AP_FORMAT_TITLE_EXPLAIN'	=> 'Specifies the name that identifies this format/category.',
	'CUSTOM_FORMAT'				=> 'Custom format',
	'EDIT_EXTENSION'			=> 'Edit extension',
	'FORMAT_ADD'				=> 'Add format',
	'FORMAT_CUSTOM'				=> 'Custom',
]);
