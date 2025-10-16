<?php
/**
 * [Spanish [Es]]
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
	'ACP_AP_CONFIG_EXPLAIN'		=> 'Desde aquí puede administrar opciones específicas para algunos formatos de adjuntos.',

	'AP_ALLOW_DOWNLOAD'			=> 'Permitir descarga',
	'AP_ALLOW_DOWNLOAD_EXPLAIN'	=> 'Permite la descarga del archivo por parte del usuario.<br >
		Si se deshabilita, no se mostrará el botón de descarga en el archivo.',
	'AP_VIEW_TYPE'			=> 'Tipo de vista',
	'AP_VIEW_TYPE_EXPLAIN'	=> 'Define como se mostrarán los archivos con este formato.',

	'AP_SHOW_INFO'				=> 'Mostrar información',
	'AP_SHOW_PLAYER'			=> 'Mostrar reproductor',
	'AP_SHOW_PLAYER_AND_INFO'	=> 'Mostrar reproductor + información',
	'AP_SHOW_PREVIEW'			=> 'Mostrar vista previa',

	'AP_OPACITY'				=> 'Opacidad',
	'AP_POSITION'				=> 'Posición',
	'AP_SIZE'					=> 'Tamaño',
	
	// Format: Audio
	'FORMAT_AUDIO_TITLE'		=> 'Archivos de audio',
	'FORMAT_AUDIO_EXPLAIN'		=> 'Opciones específicas y reproductor para archivos de audio.',

	// Format: Basic
	'FORMAT_BASIC_TITLE'		=> 'Formato básico',
	'FORMAT_BASIC_EXPLAIN'		=> 'Muestra un diseño básico para todos los archivos no contenidos en los otros módulos.<br />
		Si se deshabilita se mostrará el diseño por defecto de phpBB.',

	// Format: Cad
	'FORMAT_CAD_TITLE'			=> 'Archivos CAD',
	'FORMAT_CAD_EXPLAIN'		=> 'Opciones específicas y vista previa para archivos de AutoCad.',

	// Format: Image
	'FORMAT_IMAGE_TITLE'			=> 'Imágenes',
	'FORMAT_IMAGE_EXPLAIN'			=> 'Opciones para los archivos de imagen.',
	'AP_IMAGE_HIDE_TEXT'			=> 'Ocultar leyenda',
	'AP_IMAGE_HIDE_TEXT_EXPLAIN'	=> 'Establece si se ocultará el texto que se muestra debajo de las imágenes',
	'AP_IMAGE_REMOVE_EXIF'			=> 'Eliminar datos Exif',
	'AP_IMAGE_REMOVE_EXIF_EXPLAIN'	=> 'Si se habilita, los datos EXIF incrustados en la imagen (por ejemplo: Ubicación, cámara, flash, etc..) se eliminarán al ser subida como adjunto.<br />
		<em>Esto solo afecta a la extensión jpg o jpeg.</em>',
	'AP_IMAGE_WATERMARK'			=> 'Marca de agua',
	'AP_IMAGE_WATERMARK_EXPLAIN'	=> 'Desde aquí puede establecer una marca de agua para las nuevas imágenes subidas.',

	// Format: Pdf
	'FORMAT_PDF_TITLE'			=> 'Archivos PDF',
	'FORMAT_PDF_EXPLAIN'		=> 'Opciones específicas y vista previa para archivos pdf.',

	// Format: Video
	'FORMAT_VIDEO_TITLE'		=> 'Archivos de video',
	'FORMAT_VIDEO_EXPLAIN'		=> 'Opciones específicas y reproductor para archivos de video.',

	// Format: Custom
	'ADD_EXTENSION'				=> 'Añadir extensión',
	'AP_EXTENSION_IMAGE'		=> 'Imagen o icono',
	'AP_EXTENSION_NAME'			=> 'Extensión',
	'AP_FORMAT_EXTENSIONS'		=> 'Extensiones',
	'AP_FORMAT_TITLE'			=> 'Título',
	'AP_FORMAT_TITLE_EXPLAIN'	=> 'Especifica el nombre que identifica a este formato/categoría.',
	'CUSTOM_FORMAT'				=> 'Formato personalizado',
	'EDIT_EXTENSION'			=> 'Editar extensión',
	'FORMAT_ADD'				=> 'Añadir formato',
	'FORMAT_CUSTOM'				=> 'Personalizado',
]);
