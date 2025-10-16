<?php

/**
 * @package Verified Profiles
 * @copyright (c) 2025 Daniel James
 * @license https://opensource.org/license/gpl-2-0
 */

if ( ! defined( 'IN_PHPBB' ) ) {

	exit;

}

if ( empty( $lang ) || ! is_array( $lang ) ) {

	$lang = [];

}

$lang = array_merge( $lang, [
	'UCP_VERIFIED_PROFILE_VISIBILITY_LABEL'			=> '验证徽章',
	'UCP_VERIFIED_PROFILE_VISIBILITY_DESCRIPTION'	=> '选择是否要对其他用户隐藏您的验证徽章。',

	'UCP_VERIFY_SETTING_SHOW'	=> '显示',
	'UCP_VERIFY_SETTING_HIDE'	=> '隐藏',
] );