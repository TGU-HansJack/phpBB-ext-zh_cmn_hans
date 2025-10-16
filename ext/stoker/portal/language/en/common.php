<?php
/**
*
* Simple Portal extension for the phpBB Forum Software package.
* English
*
* @copyright (c) 2015 Stoker www.phpbb3bbcodes.com
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
//  <img src=\'https://phpbb3bbcodes.com/images/smilies/hi.gif\' alt=\'Hello\' width=\'\42\' height=\'28\'>
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
	'DECIMAL_SP'								=> '2',
	'DECIMAL_SEPARATOR_SP'						=> '.',
	'THOUSANDS_SEPARATOR_SP'					=> ',',

	'PORTAL_PAGE'								=> 'Home',
	'ACP_PORTAL_BADGE'							=> 'Simple Portal-1.1.3',
	'ACP_PORTAL_SETTINGS_EXPLAIN'				=> 'If you like this extension, please consider following',
	'ACP_PORTAL_DONATION'						=> 'Make a Donation',
	'ACP_PORTAL_MEMBER'							=> 'Become an active member of my Community',
	'ACP_PORTAL_SUPPORT'						=> 'Extension support or feedback',
	'PORTAL_UPDATED'							=> 'Simple Portal was successfully updated.',

	'ACP_PORTAL_ENABLE'							=> 'Enable Simple Portal',
	'ACP_PORTAL_ENABLE_EXPLAIN'					=> 'Enable or disable the Portal page',
	'ACP_PORTAL_INFO'							=> 'Simple Portal text',
	'ACP_PORTAL_INFO_EXPLAIN'					=> 'You can edit the text which is displayed on the “Simple Portal”-page.',
	'ACP_PORTAL_INFO_PREVIEW'					=> 'Simple Portal Preview',
	'ACP_PORTAL'								=> 'Simple Portal',
	'ACP_PORTAL_SETTINGS'						=> 'Simple Portal Settings',
	
	'ACP_PORTAL_STATS_ENABLE'					=> 'Portal Statistics',
	'ACP_PORTAL_STATS_ENABLE_EXPLAIN'			=> 'Display board statistics on the Portal page.',
	'ACP_PORTAL_SOI_AVAILABLE'					=> 'This option is only available if <a href="https://phpbb3bbcodes.com/viewtopic.php?t=2778" title="Visit Stats on Index topic at PhpBB3 BBCodes" target="_blank" rel="noopener noreferrer">Stats on Index</a> is installed!',
	
	'ACP_PORTAL_SMILE_ENABLE'					=> 'Enable Images',
	'ACP_PORTAL_SMILE_ENABLE_EXPLAIN'			=> 'Enable this function if you want to display the icons in welcome message and background images for the welcome text block<br />The images are located in: ext/stoker/portal/styles/prosilver/theme/images. The ones in use are: morning_bg.webp, day_bg.webp, midday_bg.webp, afternoon_bg.webp, evening_bg.webp and goodnight_bg.webp - feel free to replace them with your own.',
	
	'UP_LATE1'             		=> 'You’re up late %1$s',
	'UP_LATE2'             		=> 'Shouldn’t you be sleeping?',
    'UP_EARLY1'             	=> 'Good Morning %1$s',
	'UP_EARLY2'             	=> 'You’re up early today. Time for a coffee',
    'GOOD_MORNING1'           	=> 'Good Morning %1$s',
	'GOOD_MORNING2'           	=> 'What a lovely morning it is. Enjoy your day',
	'GOOD_DAY1'        			=> 'Good day %1$s',
	'GOOD_DAY2'        			=> 'We hope you enjoy your time here',
    'GOOD_AFTERNOON1'       	=> 'Good Afternoon %1$s',
	'GOOD_AFTERNOON2'       	=> 'Finally you are here. We need more coffee',
    'GOOD_EVENING1'           	=> 'Good Evening %1$s',
	'GOOD_EVENING2'           	=> 'Nice to see you here. Beer time it is!',
   	'GOOD_NIGHT1'           	=> 'Good Night %1$s',
	'GOOD_NIGHT2'           	=> 'Time to go to bed, or maybe some more coding?',
    'WELCOME_GUEST'           	=> 'Guest',
	'WELCOME_YOU'				=> 'You joined',
	'MEMBER_FOR' 				=> 'Member for',

	'VIEWONLINE_PORTAL'			=> 'Viewing Home',
));

/* Code from 3Di onlinesince ext */
$lang = array_merge($lang, [
	'OS_YEAR_MEMBER'	=> [
		1	=> '%d year,',
		2	=> '%d years,',
	],
	'OS_MONTH_MEMBER'	=> [
		1	=> '%d month and',
		2	=> '%d months and',
	],
	'OS_AND' => 'and',
	'OS_DAY_MEMBER'	=> [
		1	=> '%d day',
		2	=> '%d days',
	]
]);
