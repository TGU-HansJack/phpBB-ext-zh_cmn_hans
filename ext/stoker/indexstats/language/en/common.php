<?php
/**
*
* @package phpBB Extension - Stats On Index
* @copyright (c) 2025 Stoker
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'DECIMAL_IS'				=> '2',
	'DECIMAL_SEPARATOR_IS'		=> '.',
	'THOUSANDS_SEPARATOR_IS'	=> ',',

	'SOI_TOTAL_POSTS'			=> 'Total Posts',
	'SOI_POSTS_PER_DAY'			=> 'per day',
	'SOI_POSTS_PER_TOPIC'		=> 'per topic',
	'SOI_POSTS_PER_YEAR'		=> 'per year',
	'SOI_POSTS_PER_USER'		=> 'per member',

	'SOI_TOTAL_TOPICS'			=> 'Total Topics',
	'SOI_TOPICS_PER_DAY'		=> 'per day',
	'SOI_TOPICS_PER_YEAR'		=> 'per year',
	'SOI_TOPICS_PER_USER'		=> 'per member',

	'SOI_TOTAL_USERS'			=> 'Total Users',
	'SOI_USERS_PER_DAY'			=> 'per day',
	'SOI_USERS_PER_YEAR'		=> 'per year',

	'SOI_TOTAL_FILES'			=> 'Total Files',
	'SOI_FILES_PER_DAY'			=> 'per day',
	'SOI_FILES_PER_YEAR'		=> 'per year',
	'SOI_FILES_PER_USER'		=> 'per member',

	'SOI_TOTAL_TVIEWS'			=> 'Total Topic views',
	'SOI_TVIEWS_PER_DAY'		=> 'per day',
	'SOI_TVIEWS_PER_YEAR'		=> 'per year',
	'SOI_TVIEWS_PER_TOPIC'		=> 'per topic',
	'SOI_TVIEWS_USER'			=> 'per member',

	'SOI_TOTAL_PDOWNLOADS'		=> 'Total Downloads',
	'SOI_DOWNLOADS_PER_DAY'		=> 'per day',
	'SOI_DOWNLOADS_PER_YEAR'	=> 'per year',
	'SOI_DOWNLOADS_PER_USER'	=> 'per member',

	'SOI_BOARD_START_DATE'		=> 'started:',
));

/* Code from 3Di onlinesince ext */
$lang = array_merge($lang, [
	'OS_ELAPSED'	=> 'We have been online for:',
	'OS_YEAR'	=> [
		1	=> '<strong>%d</strong> year,',
		2	=> '<strong>%d</strong> years,',
	],
	'OS_MONTH'	=> [
		1	=> '<strong>%d</strong> month and',
		2	=> '<strong>%d</strong> months and',
	],
	'OS_DAY'	=> [
		1	=> '<strong>%d</strong> day',
		2	=> '<strong>%d</strong> days',
	]
]);
