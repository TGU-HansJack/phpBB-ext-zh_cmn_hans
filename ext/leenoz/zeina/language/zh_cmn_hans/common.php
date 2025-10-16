<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	// -------------------- 全局 -------------------- //
	'BREADCRUMBS' => '导航菜单',
	'THEME_MODE' => '浅色/深色模式',
	'INFO' => '信息',
	'FOLLOW_US' => '关注我们',
	'SCROLL_TOP_TOP' => '回到顶部',
	'DESIGN_BY' => 'Design by',
	// ------------- 登录和注册页面 ------------ //
	'OR' => '或',
	'SIGN_WITH' => '使用以下方式登录',
	'REGISTER_WITH' => '使用以下方式注册',
	'SHOW_PASSWORD' => '显示/隐藏密码',
	'NOT_MEMBER' => '还不是会员？',
	'IS_MEMBER' => '已是会员？',
]);