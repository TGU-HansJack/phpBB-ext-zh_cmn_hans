<?php
/**
*
* @package Topic description
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'TOPIC_DESC'				=> '主题描述',
	//Donation
	'PAYPAL_IMAGE_URL'          => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                => '使用PayPal捐赠',
	'BUY_ME_A_BEER_URL'         => 'https://paypal.me/RMcGirr83',
	'BUY_ME_A_BEER'				=> '为开发此扩展买杯啤酒',
	'BUY_ME_A_BEER_SHORT'		=> '为此扩展捐款',
	'BUY_ME_A_BEER_EXPLAIN'		=> '这个扩展是完全免费的。这是我花时间为phpBB社区开发的一个项目。如果您喜欢使用这个扩展，或者它对您的论坛有所帮助，请考虑<a href="https://paypal.me/RMcGirr83" target="_blank" rel="noreferrer noopener">为我买杯啤酒</a>。我们将非常感激。<i class="fa fa-smile-o" style="color:green;font-size:1.5em;" aria-hidden="true"></i>',
]);