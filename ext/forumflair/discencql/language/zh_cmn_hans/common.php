<?php

/*
* @package phpBB Extension - Discussion Encouragement With Quick Login
* @copyright (c) 2022, ForumFlair, https://forumflair.co.uk
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'DISC_ENC_QL_TTL'				=> '创建账户或登录以参与讨论',
	'DISC_ENC_QL_NO_SGNUP_TTL'		=> '登录以参与讨论',
	'DISC_ENC_QL_INF'				=> '您需要成为会员才能发表回复',

	'DISC_ENC_QL_SGN_UP_TTL'		=> '创建账户',
	'DISC_ENC_QL_SGN_UP_INF'		=> '还不是会员？注册以加入我们的社区',
	'DISC_ENC_QL_SGN_UP_TPCS_INF'	=> '会员可以发起自己的主题并订阅主题',
	'DISC_ENC_QL_SGN_UP_FREE_INF'	=> '免费注册，只需一分钟',

	'DISC_ENC_QL_SGN_IN_TTL'		=> '登录',
));