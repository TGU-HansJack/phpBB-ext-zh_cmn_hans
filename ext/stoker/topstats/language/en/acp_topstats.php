<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2024 Stoker - https://www.phpbb3bbcodes.com
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
	'TOP_STATS'								=> 'Top Stats',
	'TS_CONFIG'								=> 'Configuration',
	
	'ACP_TOPSTATSRA_BADGE'					=> 'Recent Active-Top Stats 2.0.0',
	'ACP_TOPSTATSSB_BADGE'					=> 'Stats Blocks-Top Stats 2.0.0',
	'ACP_TOPSTATSTP_BADGE'					=> 'Top Posters-Top Stats 2.0.0',
	'ACP_TOPSTATS_SETTINGS_EXPLAIN'			=> 'If you like this extension, please consider following',
	'ACP_TOPSTATS_DONATION'					=> 'Make a Donation',
	'ACP_TOPSTATS_MEMBER'					=> 'Become an active member of my Community',
	'ACP_TOPSTATS_SUPPORT'					=> 'Extension support or feedback',
	
	'TOPSTATS_SAVED'						=> 'Top Stats settings saved',
	'TS_RECENT_SETTINGS'					=> 'Recent Active Topics settings',
	'TSRAT_NUMBER'							=> 'Recent Active Topics',
	'TSRAT_NUMBER_EXPLAIN'					=> 'Number of Recent Active Topics displayed.<br />Set the value to 0 (zero) to disable this feature.<br />The limit for Recent Active Topics is 50.',
	'TS_RECENT_LIMIT_RANGE'					=> 'Number of Recent Active Topics must be between 0 and %d!',
	'TS_JSSCROLL'							=> 'Jquery Scroll',
	'TS_JSSCROLL_EXPLAIN'					=> 'Enable or disable the use of jquery scrolling Recent Active Topics.',
	'TS_JSSCROLL_SPEED'						=> 'Jquery Scroll Speed',
	'TS_JSSCROLL_SPEED_EXPLAIN'				=> 'The speed of the scrolling in milliseconds (default is 400).',
	'TS_JSSCROLL_INTERVAL'					=> 'Jquery Scroll Interval',
	'TS_JSSCROLL_INTERVAL_EXPLAIN'			=> 'The time between the scrolling in milliseconds (default is 4000).',
	'TS_JSSCROLL_DIRECTION'					=> 'Jquery Scroll Direction',
	'TS_JSSCROLL_DIRECTION_EXPLAIN'			=> 'The direction of the jquery scrolling.',
	'TS_JSSCROLL_DIRECTION_DOWN'			=> 'Down',
	'TS_JSSCROLL_DIRECTION_UP'				=> 'Up',
	'TS_JSSCROLL_PAUSE'						=> 'Jquery Scroll Pause',
	'TS_JSSCROLL_PAUSE_EXPLAIN'				=> 'When enabled the scrolling is paused when you hover Recent Active Topics.',
	'TS_JSSCROLL_NAVIGATION'				=> 'Jquery Scroll Navigation',
	'TS_JSSCROLL_NAVIGATION_EXPLAIN'		=> 'Enable or disable the JSSCroll navigation for Recent Active Topics.',
	'DISPLAY_TOP_RECENT_INDEX'				=> 'Enable Recent Active Topics on Index',
	'DISPLAY_TOP_RECENT_INDEX_EXPLAIN'		=> 'Enable or disable display of the Recent Active Topics part on forum Index.',
	'DISPLAY_TOP_RECENT_PORTAL'				=> 'Enable Recent Active Topics on Portal ',
	'DISPLAY_TOP_RECENT_PORTAL_EXPLAIN'		=> 'Enable or disable display of the Recent Active Topics part on Simple Portal.',
	'TS_PORTAL_NOT_AVAILABLE'				=> 'This option is only available if <a href="https://phpbb3bbcodes.com/viewtopic.php?t=2719" title="Visit Simple Portal topic at PhpBB3 BBCodes" target="_blank" rel="noopener noreferrer">Simple Portal</a> is installed and enabled.',
	'TS_TOPSTATS_SETTINGS'					=> 'Top Stats settings',
	'DISPLAY_TOP_STATS_INDEX'				=> 'Enable Top Stats on Index',
	'DISPLAY_TOP_STATS_INDEX_EXPLAIN'		=> 'Enable or disable display of the Top Stats part on forum Index.',
	'DISPLAY_TOP_STATS_PORTAL'				=> 'Enable Top Stats on Portal',
	'DISPLAY_TOP_STATS_PORTAL_EXPLAIN'		=> 'Enable or disable display of the Top Stats part on Simple Portal.',
	
	'TS_MOSTVIEWED_NUMBER'					=> 'Most Viewed Topics',
	'TS_MOSTVIEWED_NUMBER_EXPLAIN'			=> 'Set the value to 0 (zero) to disable this feature.<br>Most Viewed Topics are cached for 24 hours.',
	'TS_MOSTREPLIED_NUMBER'					=> 'Most Replied Topics',
	'TS_MOSTREPLIED_NUMBER_EXPLAIN'			=> 'Set the value to 0 (zero) to disable this feature.<br>Most Replied Topics are cached for 24 hours.',
	'TS_MOSTACTIVEUSER_NUMBER'				=> 'Most Active Users',
	'TS_MOSTACTIVEUSER_NUMBER_EXPLAIN'		=> 'Set the value to 0 (zero) to disable this feature.<br>Most Active Users are cached for 24 hours.',
	'TS_MOSTACTIVEFORUM_NUMBER'				=> 'Most Active Forums',
	'TS_MOSTACTIVEFORUM_NUMBER_EXPLAIN'		=> 'Set the value to 0 (zero) to disable this feature.<br>Most Active Forums are cached for 24 hours.',
	'TS_LASTVISITEDBOT_NUMBER'				=> 'Last Visited Bots',
	'TS_LASTVISITEDBOT_NUMBER_EXPLAIN'		=> 'Set the value to 0 (zero) to disable this feature.<br>Last Visited Bots are cached for 5 minutes.',
	'TS_LASTREGISTEREDUSER_NUMBER'			=> 'Last Registered Users',
	'TS_LASTREGISTEREDUSER_NUMBER_EXPLAIN'	=> 'Set the value to 0 (zero) to disable this feature.<br>Last Registered Users are cached for 5 minutes.',
	
	'TS_TOPSTATS_TP_EXCLUDE'				=> 'Exclude Top Posters',
	'TS_THISMONTH_TOP_NUMBER'				=> 'Top Posters This Month',
	'TS_THISMONTH_TOP_NUMBER_EXPLAIN'		=> 'Set the value to 0 (zero) to disable this feature.<br>Top Posters This Month are cached for an hour.',
	'TS_LASTMONTH_TOP_NUMBER'				=> 'Top Posters Last Month',
	'TS_LASTMONTH_TOP_NUMBER_EXPLAIN'		=> 'Set the value to 0 (zero) to disable this feature.<br>Top Posters Last Month are cached until next month.',
	'TS_EXCLUDED_USERS' 					=> 'Exclude user IDs',
	'TS_EXCLUDED_USERS_EXPLAIN' 			=> 'Comma-separated list of user IDs to be excluded from the Top Poster stats. Example: 23,67,890<br />(These will ONLY be excluded from Top Posters This Month and Top Posters Last Month)',
	'SUBMIT_EXCLUDED_USERS' 				=> 'Save excluded users',
	'EXCLUDED_USERS_TOO_LONG'				=> 'The excluded users list is too long. Please keep it under %d characters.',
	'INVALID_EXCLUDED_USERS'				=> 'Only digits and commas are allowed in the excluded users field.',
	'EXCLUDED_USER_NOT_EXIST'				=> 'User ID %d does not exist.',
	'TS_INDEX'								=> 'Forum Index',
	'TS_PORTAL'								=> 'Simple Portal',
	'TS_CUSTOM'								=> 'Custom page',
	'TS_SUBMIT_CHANGES'						=> 'Submit changes',
	
	'DISPLAY_TOP_RECENT_CUSTOM'				=> 'Enable Recent Active on custom page',
	'DISPLAY_TOP_RECENT_CUSTOM_EXPLAIN'		=> 'Enable or disable display of the Recent Active part on custom page.',
	'DISPLAY_TOP_STATS_CUSTOM'				=> 'Enable Top Stats on custom page',
	'DISPLAY_TOP_STATS_CUSTOM_EXPLAIN'		=> 'Enable or disable display of the Top Stats part on custom page.',
	
	'ACP_TS_TOPPOSTER'						=> 'Top posters',
	'ACP_TS_TOPPOSTER_EXPLAIN'				=> 'Settings for the Top Posters custom page.',
	'DISPLAY_TOP_STATS_TOPPOSTER'			=> 'Enable Top Posters page',
	'DISPLAY_TOP_STATS_TOPPOSTER_EXPLAIN'	=> 'Show the Top Posters custom page to users.',
));
