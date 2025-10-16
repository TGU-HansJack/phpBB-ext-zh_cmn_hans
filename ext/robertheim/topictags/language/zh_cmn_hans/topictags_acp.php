<?php
/**
*
* @package phpBB Extension - RH Topic Tags
* @copyright © 2014 Robert Heim; heavily revised 2024 by SMcCandlish
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// These will be re-used in the definitions below; that is why we need to define and merge them first.
$lang = array_merge($lang, array(

	// 简化版英文版本（无变音符号、下划线或点；最少2个字符，适用于常见缩写如"AI"、"UK"等）：
	// 'ACP_RH_TOPICTAGS_REGEX_DEFAULT'				=> '/^[a-z0-9\- ]{2,30}$/i',
	// 'ACP_RH_TOPICTAGS_REGEX_EXP_FOR_USERS_DEFAULT'	=> '拉丁字母、0-9、连字符、空格（将转换为-）；最少：2，最多：30',
	//
	// 默认：西欧版本（允许带变音符号的字符；最少2个字符，适用于常见缩写如"AI"、"UK"等）：
	'ACP_RH_TOPICTAGS_REGEX_DEFAULT'				=> '/^[\p{Script=Latin}0-9\-_\. ]{2,30}$/u',
	'ACP_RH_TOPICTAGS_REGEX_EXP_FOR_USERS_DEFAULT'	=> '拉丁字母、0-9、连字符、下划线、点、空格（将转换为-）；最少：2，最多：30',
	//
	// 西亚版本（添加希腊语、西里尔字母和希伯来语支持；最少2个字符，适用于常见缩写如"AI"、"UK"等）：
	// 'ACP_RH_TOPICTAGS_REGEX_DEFAULT'				=> '/^[\p{Script=Latin}\p{Script=Greek}\p{Script=Cyrillic}\p{Script=Hebrew}0-9\-_\. ]{2,30}$/u',
	// 'ACP_RH_TOPICTAGS_REGEX_EXP_FOR_USERS_DEFAULT'	=> '字母（拉丁文、希腊文、西里尔字母、希伯来文）、0-9、连字符、下划线、点、空格（将转换为-）；最少：2，最多：30',
	//
	// 完全国际化版本（最少1个字符，因为许多情况下中文表意文字的一个字符就代表整个短语）：
	// 'ACP_RH_TOPICTAGS_REGEX_DEFAULT'				=> '/^[\p{L}0-9\-_\. ]{1,30}$/u',
	// 'ACP_RH_TOPICTAGS_REGEX_EXP_FOR_USERS_DEFAULT'	=> '任何语言的字母、0-9、连字符、下划线、点、空格（将转换为-）；最少：1，最多：30',
	//
	// 正如您从这些示例中看到的，如果您需要启用对特殊字符的支持，
	// 比如语言学或数学字符，您只需添加特定的Unicode块或代表这些块范围的代码。
	//
	// 如果您需要添加特定字符如@和$，只需单独添加这些字符，
	// 但请先了解如何编写正则表达式：
	// https://stackoverflow.com/questions/399078/what-special-characters-must-be-escaped-in-regular-expressions
	// 各种字符必须进行\-转义（这是PCRE正则表达式，因此使用PCRE转义规则）。
	// 一个常见情况是支持#，用于标签。此字符不需要转义，只需添加到[...]选择的末尾，
	// 例如'/^[\p{L}0-9\-_\. #]{1,30}$/u'
	//
	// 您也可以将最小字符数更改为1个字符，如{1,30}，
	// 如果您需要考虑像R这样的编程语言名称。
	//
	// 如果您将最大值更改为不再是30，请在adm/style/topictags_manage_tags.html中进行相同更改。
));

$lang = array_merge($lang, array(
	// 论坛设置页面
	'ACP_RH_TOPICTAGS_ENABLE'								=> '启用 RH 主题标签',
	'ACP_RH_TOPICTAGS_ENABLE_EXP'							=> '是否在此论坛中启用主题标签功能。（禁用标签功能时，标签<em>不会从</em>此论坛的主题中删除——所以当您再次启用时，它们仍然存在。如果您真的想删除标签，请使用"从此论坛删除标签"选项。）',
	'ACP_FORUM_SETTINGS_RH_TOPICTAGS_PRUNE'					=> '从此论坛删除标签',
	'ACP_FORUM_SETTINGS_RH_TOPICTAGS_PRUNE_EXP'				=> '这将<strong>删除</strong>此论坛中所有主题的标签分配。<strong>注意</strong>：为防止意外删除标签，您需要先禁用此论坛的标签功能。',
	'ACP_FORUM_SETTINGS_RH_TOPICTAGS_PRUNE_CONFIRM'			=> '此选项将<strong>删除</strong>此论坛中所有主题的标签分配。您需要先禁用此论坛的标签功能。',
	'ACP_RH_TOPICTAGS_PRUNING_REQUIRES_TAGGING_DISABLED'	=> '为防止意外删除标签，您需要先禁用此论坛的标签功能再删除其标签分配。',
	'ACP_RH_TOPICTAGS_ERROR'								=> '错误',
	'ACP_RH_TOPICTAGS_UNKNOWN_ERROR'						=> '未知错误。请查看JavaScript控制台获取服务器响应。',

	// 配置
	'TOPICTAGS_INSTALLED'					=> '已安装版本：v%s',

	'ACP_RH_TOPICTAGS_REGEX_EMPTY'			=> '正则表达式不能为空。',
	'ACP_RH_TOPICTAGS_EXP_FOR_USERS_EMPTY'	=> '允许字符的说明不能为空。',

	'TOPICTAGS_CONFIG'					=> '配置',
	'TOPICTAGS_CONFIG_TAGCLOUD'			=> '标签云设置',
	'TOPICTAGS_CONFIG_TAGS'				=> '标签设置',
	'TOPICTAGS_MAINTENANCE'				=> '维护',
	'TOPICTAGS_TITLE'					=> 'RH 主题标签',
	'TOPICTAGS_SETTINGS_SAVED'			=> '配置更新成功。',
	'TOPICTAGS_WHITELIST_SAVED'			=> '白名单更新成功。',
	'TOPICTAGS_BLACKLIST_SAVED'			=> '黑名单更新成功。',

	'TOPICTAGS_DISPLAY_TAGCLOUD_ON_INDEX'		=> '在首页显示标签云',
	'TOPICTAGS_DISPLAY_TAGCLOUD_ON_INDEX_EXP'	=> '启用后，将在首页底部显示标签云',

	'TOPICTAGS_DISPLAY_TAGCOUNT_IN_TAGCLOUD'		=> '在标签云中显示标签使用次数',
	'TOPICTAGS_DISPLAY_TAGCOUNT_IN_TAGCLOUD_EXP'	=> '启用后，标签云将显示每个标签被使用的主题数量。',

	'TOPICTAGS_MAX_TAGS_IN_TAGCLOUD'			=> '标签云中的最大标签数',
	'TOPICTAGS_MAX_TAGS_IN_TAGCLOUD_EXP'		=> '限制在首页标签云中显示的标签数量。<br />对单独的标签云页面没有影响，该页面显示用户可访问的所有标签。',

	'TOPICTAGS_DISPLAY_TAGS_IN_VIEWFORUM'		=> '在论坛视图中显示标签',
	'TOPICTAGS_DISPLAY_TAGS_IN_VIEWFORUM_EXP'	=> '如果设置为是，则在主题列表中显示每个主题的标签。',

	'TOPICTAGS_ENABLE_IN_ALL_FORUMS_ALREADY'	=> '所有论坛已启用标签功能。',
	'TOPICTAGS_ENABLE_IN_ALL_FORUMS'			=> '在所有论坛中启用 RH 主题标签',
	'TOPICTAGS_ENABLE_IN_ALL_FORUMS_EXP'		=> '这将在<em>所有</em>论坛中启用标签功能。您可以在单个论坛的设置中启用（或禁用）它。',
	'TOPICTAGS_ENABLE_IN_ALL_FORUMS_DONE'	=> array(
			1 => '已在 %d 个论坛中启用标签功能。',
			2 => '已在 %d 个论坛中启用标签功能。',
	),

	'TOPICTAGS_DISABLE_IN_ALL_FORUMS_ALREADY'	=> '所有论坛已禁用标签功能。',
	'TOPICTAGS_DISABLE_IN_ALL_FORUMS'			=> '在所有论坛中禁用 RH 主题标签',
	'TOPICTAGS_DISABLE_IN_ALL_FORUMS_EXP'		=> '这将在<em>所有</em>论坛中禁用标签功能。您可以在单个论坛的设置中禁用（或启用）它。',
	'TOPICTAGS_DISABLE_IN_ALL_FORUMS_DONE'	=> array(
			1 => '已在 %d 个论坛中禁用标签功能。',
			2 => '已在 %d 个论坛中禁用标签功能。',
	),

	'TOPICTAGS_PRUNE'					=> '清理标签',
	'TOPICTAGS_PRUNE_EXP'				=> '这将删除所有未被任何主题使用的标签',
	'TOPICTAGS_PRUNE_CONFIRM'			=> '这将<strong>删除</strong>所有未使用的标签。',
	'TOPICTAGS_PRUNE_ASSIGNMENTS_DONE'	=> array(
			0 => '',
			1 => '已删除 %d 个主题-标签分配。',
			2 => '已删除 %d 个主题-标签分配。',
	),
	'TOPICTAGS_PRUNE_TAGS_DONE'			=> array(
			0 => '没有可删除的未使用标签。',
			1 => '已删除 %d 个未使用的标签。',
			2 => '已删除 %d 个未使用的标签。',
	),

	'TOPICTAGS_PRUNE_FORUMS'			=> '从已禁用标签功能的论坛中清理标签',
	'TOPICTAGS_PRUNE_FORUMS_EXP'		=> '这将删除所有位于已禁用标签功能的论坛中的主题的标签分配。',
	'TOPICTAGS_PRUNE_FORUMS_CONFIRM'	=> '这将<strong>删除</strong>所有位于已禁用标签功能的论坛中的主题的标签。',

	'TOPICTAGS_PRUNE_INVALID_TAGS'				=> '清理无效标签',
	'TOPICTAGS_PRUNE_INVALID_TAGS_EXP'			=> '这将<strong>删除</strong>所有不再有效的标签。<br />仅在您更改了正则表达式并希望删除无效标签时才需要此操作。',
	'TOPICTAGS_PRUNE_INVALID_TAGS_CONFIRM'		=> '这将<strong>删除</strong>所有不符合配置的正则表达式的标签，如果不小心操作可能会删除大量内容！',

	'TOPICTAGS_CALC_COUNT_TAGS'					=> '重新计算标签计数',
	'TOPICTAGS_CALC_COUNT_TAGS_EXP'				=> '这将重新计算每个标签的使用次数。',
	'TOPICTAGS_CALC_COUNT_TAGS_DONE'			=> '标签计数已重新计算。',

	'TOPICTAGS_ENABLE_WHITELIST'				=> '启用标签白名单',
	'TOPICTAGS_ENABLE_WHITELIST_EXP'			=> '如果启用，仅允许符合正则表达式<em>且</em>存在于下方白名单中的标签。<br /><strong>注意1</strong>：如果同时启用了黑名单，且某个标签同时存在于白名单和黑名单中，则会被拒绝。<br /><strong>注意2</strong>：为防止意外数据丢失，数据库中已存在的但不在白名单中的标签<em>不会</em>被自动删除，仍将显示。您必须手动删除现有标签。',

	'TOPICTAGS_WHITELIST'						=> '白名单',
	'TOPICTAGS_WHITELIST_EXP'					=> '允许的标签列表。<br /><strong>注意</strong>：标签还必须符合正则表达式，因此请确保所有这些标签都符合您在此处的正则表达式设置（不会自动检查）。',

	'TOPICTAGS_ENABLE_BLACKLIST'				=> '启用标签黑名单',
	'TOPICTAGS_ENABLE_BLACKLIST_EXP'			=> '如果启用，即使符合正则表达式的黑名单中的标签也会被拒绝。<br /><strong>注意1</strong>：为防止意外数据丢失，数据库中已存在的标签不会被自动删除。您必须从每个主题中手动删除它们。<br /><strong>注意2</strong>：黑名单永远不会显示给用户。',

	'TOPICTAGS_BLACKLIST'						=> '黑名单',
	'TOPICTAGS_BLACKLIST_EXP'					=> '禁止的标签列表。<br /><strong>注意</strong>：所有不符合正则表达式的标签总是会被拒绝。',

	'TOPICTAGS_ALLOWED_TAGS_REGEX'				=> '允许标签的正则表达式',
	'TOPICTAGS_ALLOWED_TAGS_REGEX_EXP'			=> '<strong>警告</strong>：如果您不知道自己在做什么，请不要更改。<br /><em>标签最多可包含30个字符，扩展程序出于各种目的使用的分隔符是"/"和"，"<br />因此这些字符不能作为允许字符添加到正则表达式中（单独或作为类）。</em><br />更改正则表达式后，现在无效的标签将无法搜索，但仍会显示在主题中。要清理无效标签，请参见"维护"。<br />默认正则表达式：<code>' . $lang['ACP_RH_TOPICTAGS_REGEX_DEFAULT'] . '</code>',

	'TOPICTAGS_CONVERT_SPACE_TO_HYPHEN'			=> '将" "转换为"-"',
	'TOPICTAGS_CONVERT_SPACE_TO_HYPHEN_EXP'		=> '如果设置为是，所有空格（" "）将自动转换为连字符（"-"）。<br /><strong>注意1</strong>：在正则表达式中，您必须允许"-"；否则包含空格的标签将被拒绝。<br /><strong>注意2</strong>：现有的包含空格的标签<em>不会</em>被自动转换。',

	'TOPICTAGS_ALLOWED_TAGS_EXP_FOR_USERS'		=> '用户说明',
	'TOPICTAGS_ALLOWED_TAGS_EXP_FOR_USERS_EXP'	=> '此文本显示给用户，应说明哪些标签是允许的，哪些是不允许的。<br />默认值：' . $lang['ACP_RH_TOPICTAGS_REGEX_EXP_FOR_USERS_DEFAULT'],

	'TOPICTAGS_MANAGE_TAGS_EXP'					=> '表格显示所有现有标签。您可以：<ul><li>删除标签（及其所有分配）；</li><li>编辑标签（双击标签名称可快速操作）；</li><li>通过编辑标签并将其名称设置为与另一个标签相同来合并标签——它们将自动合并。</li></ul>',
	'TOPICTAGS_NO_TAGS'							=> '尚无标签。',
	'TOPICTAGS_TAG'								=> '标签',
	'TOPICTAGS_ASSIGNMENTS'						=> '分配',
	'TOPICTAGS_NEW_TAG_NAME'					=> '新标签名称',
	'TOPICTAGS_NEW_TAG_NAME_EXP'				=> '请输入新标签名称。',
	'TOPICTAGS_TAG_DELETE_CONFIRM'				=> '您确定要删除标签<i>%s</i>吗？这将从<strong>所有</strong>分配了该标签的主题中删除它。<em>此操作无法撤销。</em>',
	'TOPICTAGS_TAG_DELETED'						=> '标签已删除。',
	'TOPICTAGS_MISSING_TAG_ID'					=> '缺少标签ID。',
	'TOPICTAGS_TAG_CHANGED'						=> '标签已更改。',
	'TOPICTAGS_TAG_MERGED'						=> '标签已与"%s"标签合并。',
	'TOPICTAGS_MISSING_TAG_NAMES'				=> '缺少标签名称。',
	'TOPICTAGS_TAG_INVALID'						=> '标签"%s"无效。请检查您的标签设置。',
	'TOPICTAGS_TAG_DOES_NOT_EXIST'				=> '标签"%s"不存在。',
	'TOPICTAGS_NO_MODIFICATION'					=> '标签未更改。',

	'TOPICTAGS_SORT_NAME_ASC'					=> '标签名称，A&rarr;Z', // &rarr; 是右箭头 (→)
	'TOPICTAGS_SORT_NAME_DESC'					=> '标签名称，Z&rarr;A',
	'TOPICTAGS_SORT_COUNT_ASC'					=> '标签使用，最少&rarr;最多',
	'TOPICTAGS_SORT_COUNT_DESC'					=> '标签使用，最多&rarr;最少',
	'TOPICTAGS_SORT_AGE_ASC'					=> '标签年龄，最老&rarr;最新',
	'TOPICTAGS_SORT_AGE_DESC'					=> '标签年龄，最新&rarr;最老',

	'TOPICTAGS_AGE_NOTE'						=> '注意：按标签年龄排序实际上是按数据库中的出现顺序排序，因此可能不总是准确。如果较老的标签与较新的标签合并，它将采用较新标签的ID和年龄（反之亦然）。数据库优化工具也可能打乱标签的表观年龄，如果它按某些新标准重新索引标签，如按字母顺序。',
));