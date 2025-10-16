<?php
/**
 *
 * @package phpBB Extension - Ultimate Points
 * @copyright (c) 2021 dmzx & posey - https://www.dmzx-web.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @translated by phpBB.China
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
	$lang = [];
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

// Merge the following language entries into the lang array
$lang = array_merge($lang, [
	'ACP_POINTS_BANK_EXPLAIN' => '在这里您可以更改银行模块的设置。',
	'ACP_POINTS_DEACTIVATED' => '论坛积分系统当前已禁用！',
	'ACP_POINTS_FORUM_EXPLAIN' => '在这里您可以一次性为所有版块设置默认积分点数。非常适合您的初始设置。<br />请注意，这些设置适用于<strong>所有</strong>版块。因此，如果您手动更改了任何版块的积分设置为特定值，则在此选项后需要重新进行设置！',
	'ACP_POINTS_INDEX_EXPLAIN' => '在这里您可以更改论坛积分系统的常规设置。',
	'ACP_POINTS_LOTTERY_EXPLAIN' => '在这里您可以更改彩票模块的设置。',
	'ACP_POINTS_ROBBERY_EXPLAIN' => '在这里您可以更改抢劫模块的设置。',
	'ACP_POINTS_VALUES_HINT' => '<strong>提示：</strong>输入数值时请勿使用千位分隔符<br />小数请使用点号，例如：1000.50',
	'ACP_POINTS_MAINICON' => '选择主图标',
	'ACP_POINTS_MAINICON_EXPLAIN' => '点击名称来选择新的Font Awesome图标。<br />更多信息请参见<samp><strong><a href="https://fontawesome.com/v4.7.0/icons/" title="Font Awesome">Font Awesome</a></strong></samp>。',
	'ACP_POINTS_UPLIST' => '选择用户列表图标',
	'ACP_POINTS_UPLIST_EXPLAIN' => '点击名称来选择新的Font Awesome图标。<br />更多信息请参见<samp><strong><a href="https://fontawesome.com/v4.7.0/icons/" title="Font Awesome">Font Awesome</a></strong></samp>。',
	'ACP_POINTS_LOTTERYICON' => '选择彩票图标',
	'ACP_POINTS_LOTTERYICON_EXPLAIN' => '点击名称来选择新的Font Awesome图标。<br />更多信息请参见<samp><strong><a href="https://fontawesome.com/v4.7.0/icons/" title="Font Awesome">Font Awesome</a></strong></samp>。',
	'ACP_POINTS_BANKICON' => '选择银行图标',
	'ACP_POINTS_BANKICON_EXPLAIN' => '点击名称来选择新的Font Awesome图标。<br />更多信息请参见<samp><strong><a href="https://fontawesome.com/v4.7.0/icons/" title="Font Awesome">Font Awesome</a></strong></samp>。',

	'BANK_COST' => '维持银行账户的成本',
	'BANK_COST_EXPLAIN' => '在这里设置用户每个周期为其银行账户支付的价格。（设为0可禁用此功能）',
	'BANK_ENABLE' => '启用银行模块',
	'BANK_ENABLE_EXPLAIN' => '这将允许用户使用银行模块。',
	'BANK_FEES' => '提现手续费',
	'BANK_FEES_ERROR' => '提现手续费不能高于100%！！',
	'BANK_FEES_EXPLAIN' => '用户从银行提取资金时需支付的百分比(%)金额。',
	'BANK_INTEREST' => '利率',
	'BANK_INTERESTCUT' => '禁用利息上限',
	'BANK_INTERESTCUTP' => '（设为0可禁用此功能）',
	'BANK_INTERESTCUT_EXPLAIN' => '这是用户可以获得利息的最大金额。如果他们拥有更多，设定值就是最大值！设为0以停用此功能。',
	'BANK_INTEREST_ERROR' => '利率不能高于100%！！',
	'BANK_INTEREST_EXPLAIN' => '利息的百分比(%)金额。',
	'BANK_MINDEPOSIT' => '最低存款',
	'BANK_MINDEPOSIT_EXPLAIN' => '用户可以在银行存入的最小金额。',
	'BANK_MINWITHDRAW' => '最低取款',
	'BANK_MINWITHDRAW_EXPLAIN' => '用户可以从银行提取的最小金额。',
	'BANK_NAME' => '您的银行名称',
	'BANK_NAME_EXPLAIN' => '为您的银行输入一个名称，例如：我们的论坛银行。',
	'BANK_OPTIONS' => '银行设置',
	'BANK_PAY' => '付息时间',
	'BANK_PAY_EXPLAIN' => '银行付款之间的时间间隔。',
	'BANK_TIME' => '天',
	'BANK_VIEW' => '启用积分银行',
	'BANK_VIEW_EXPLAIN' => '这将启用银行模块。',

	'FORUM_OPTIONS' => '版块积分',
	'FORUM_PEREDIT' => '编辑帖子获得积分',
	'FORUM_PEREDIT_EXPLAIN' => '在此处输入用户<strong>编辑</strong>帖子时将获得多少积分。请注意，他们还将收到您在高级积分设置中定义的额外积分。<br />设为0以禁用此版块获取积分。',
	'FORUM_PERPOST' => '发表回复获得积分',
	'FORUM_PERPOST_EXPLAIN' => '在此处输入用户发表<strong>帖子（回复）</strong>时将获得多少积分。请注意，他们还将收到您在高级积分设置中定义的额外积分。<br />设为0以禁用此版块获取积分。这样也会为此版块禁用高级积分设置！',
	'FORUM_PERTOPIC' => '发表主题获得积分',
	'FORUM_PERTOPIC_EXPLAIN' => '在此处输入用户发表<strong>新主题</strong>时将获得多少积分。请注意，他们还将收到您在高级积分设置中定义的额外积分。<br />设为0以禁用此版块获取积分。这样也会为此版块禁用高级积分设置！',
	'FORUM_COST' => '下载附件所需积分',
	'FORUM_COST_EXPLAIN' => '在此处输入用户<strong>下载附件</strong>时需要支付多少积分。<br />设为0以禁用此功能。',
	'FORUM_COST_TOPIC' => '发表新主题所需积分',
	'FORUM_COST_TOPIC_EXPLAIN' => '在此处输入用户在此版块发起新主题需要支付多少积分。',
	'FORUM_COST_POST' => '发表新回复所需积分',
	'FORUM_COST_POST_EXPLAIN' => '在此处输入用户在此版块发表新回复需要支付多少积分。',
	'FORUM_POINT_SETTINGS' => '论坛积分设置',
	'FORUM_POINT_SETTINGS_EXPLAIN' => '在这里您可以设置用户发布新主题、新帖子（回复）和编辑帖子时获得的积分。这些设置基于每个版块。这样您就可以详细控制用户在哪里可以获得积分，在哪里不能获得积分。',
	'FORUM_POINT_SETTINGS_UPDATED' => '全局版块积分已更新',
	'FORUM_POINT_UPDATE' => '更新全局版块积分',
	'FORUM_POINT_UPDATE_CONFIRM' => '<br />您确定要使用给定值更新所有版块积分吗？<br />此步骤将覆盖所有当前设置且无法撤销！',

	'LOTTERY_BASE_AMOUNT' => '基础奖金',
	'LOTTERY_BASE_AMOUNT_EXPLAIN' => '奖池最初将以此金额开始。如果在抽奖期间增加，额外金额将添加到下次抽奖中。如果降低，奖池不会减少。',
	'LOTTERY_CHANCE' => '赢得大奖的机会',
	'LOTTERY_CHANCE_ERROR' => '获胜几率不能高于100%！！',
	'LOTTERY_CHANCE_EXPLAIN' => '在这里您可以设置赢得大奖的百分比。（值越高，获胜机会越大）',
	'LOTTERY_DISPLAY_STATS' => '在首页显示下次抽奖时间',
	'LOTTERY_DISPLAY_STATS_EXPLAIN' => '这将在首页显示下次彩票抽奖时间。',
	'LOTTERY_DRAW_PERIOD' => '开奖周期',
	'LOTTERY_DRAW_PERIOD_EXPLAIN' => '每次开奖之间的小时数。更改此设置将影响当前开奖日期/时间。设为0以禁用开奖，当前彩票/奖池将保留。',
	'LOTTERY_DRAW_PERIOD_SHORT' => '开奖周期必须大于0！',
	'LOTTERY_ENABLE' => '启用彩票模块',
	'LOTTERY_ENABLE_EXPLAIN' => '这将允许用户使用彩票模块。',
	'LOTTERY_MAX_TICKETS' => '最大彩票数量',
	'LOTTERY_MAX_TICKETS_EXPLAIN' => '设置用户可以购买的最大彩票数量。',
	'LOTTERY_MCHAT_OPTIONS' => '彩票mChat设置',
	'LOTTERY_MCHAT_ENABLE' => '启用彩票在mChat中的发帖功能',
	'LOTTERY_MCHAT_ENABLE_EXPLAIN' => '在mChat中发布购买的彩票和大奖得主。',
	'LOTTERY_MULTI_TICKETS' => '允许多张彩票',
	'LOTTERY_MULTI_TICKETS_EXPLAIN' => '将此项设为"是"以允许用户购买多张彩票。',
	'LOTTERY_NAME' => '您的彩票名称',
	'LOTTERY_NAME_EXPLAIN' => '为您的彩票输入一个名称，例如：我们的论坛彩票。',
	'LOTTERY_OPTIONS' => '彩票设置',
	'LOTTERY_PM_ID' => '发送者ID',
	'LOTTERY_PM_ID_EXPLAIN' => '在此处输入将用作幸运得主站内信发送者的用户ID。（0 = 使用得主自己的ID）',
	'LOTTERY_TICKET_COST' => '彩票价格',
	'LOTTERY_VIEW' => '启用积分彩票',
	'LOTTERY_VIEW_EXPLAIN' => '这将启用彩票模块。',

	'NO_RECIPIENT' => '未定义收件人。',

	'POINTS_ADV_OPTIONS' => '高级积分设置',
	'POINTS_ADV_OPTIONS_EXPLAIN' => '如果版块积分设置为0（禁用），此处的所有设置都不会计算。',
	'POINTS_ATTACHMENT' => '在帖子中添加附件的一般积分',
	'POINTS_ATTACHMENT_PER_FILE' => '每个附件的额外积分',
	'POINTS_BONUS_CHANCE' => '积分奖励机会',
	'POINTS_BONUS_CHANCE_EXPLAIN' => '用户发表新主题、帖子或编辑时获得奖励积分的机会。<br />机会介于0到100%之间，可以使用小数。<br />设为<strong>0</strong>以禁用此功能。',
	'POINTS_BONUS_VALUE' => '积分奖励值',
	'POINTS_BONUS_VALUE_EXPLAIN' => '设定随机奖励金额的边界范围。<br />如果您想要固定金额，请将最小值和最大值设置为相同。',
	'POINTS_COMMENTS' => '允许评论',
	'POINTS_COMMENTS_EXPLAIN' => '允许用户在转账/捐赠时留下评论。',
	'POINTS_CONFIG_SUCCESS' => '论坛积分设置已成功更新',
	'POINTS_DISABLEMSG' => '禁用消息',
	'POINTS_DISABLEMSG_EXPLAIN' => '当论坛积分系统被禁用时显示的消息。',
	'POINTS_ENABLE' => '启用积分',
	'POINTS_ENABLE_EXPLAIN' => '允许用户使用论坛积分。',
	'POINTS_GROUP_TRANSFER' => '群组转账',
	'POINTS_GROUP_TRANSFER_ADD' => '增加',
	'POINTS_GROUP_TRANSFER_EXPLAIN' => '在这里您可以为特定群组增加、减去或设置值。您也可以向群组的每个成员发送私人信息。如果您想发送例如圣诞祝福和小额礼物，这会很方便（您可以使用表情符号和bbCode）。如果您不想随转账一起发送私人信息，只需将主题和评论字段留空即可。',
	'POINTS_GROUP_TRANSFER_FUNCTION' => '功能',
	'POINTS_GROUP_TRANSFER_PM_COMMENT' => '您的私人信息评论',
	'POINTS_GROUP_TRANSFER_PM_ERROR' => '您需要输入主题<strong>和</strong>评论才能随群组转账发送私人信息！',
	'POINTS_GROUP_TRANSFER_PM_SUCCESS' => '群组转账处理成功，<br />群组成员已收到您的私人信息。',
	'POINTS_GROUP_TRANSFER_PM_TITLE' => '私人信息的主题',
	'POINTS_GROUP_TRANSFER_SEL_ERROR' => '您不能向机器人和游客群组进行群组转账！',
	'POINTS_GROUP_TRANSFER_SET' => '设置',
	'POINTS_GROUP_TRANSFER_SUBSTRACT' => '减去',
	'POINTS_GROUP_TRANSFER_SUCCESS' => '群组转账处理成功。',
	'POINTS_GROUP_TRANSFER_USER' => '用户组',
	'POINTS_GROUP_TRANSFER_VALUE' => '值',

	'POINTS_ICON_PLACEHOLDER' => '点击选择',
	'POINTS_IMAGES_MEMBERLIST' => '在个人资料中显示图标而不是积分名称',
	'POINTS_IMAGES_MEMBERLIST_EXPLAIN' => '在用户个人资料中显示Font Awesome图标而不是积分名称。',
	'POINTS_IMAGES_TOPIC' => '显示图标而不是积分名称',
	'POINTS_IMAGES_TOPIC_EXPLAIN' => '在主题中显示Font Awesome图标而不是积分名称。',
	'POINTS_LOGS' => '启用积分日志',
	'POINTS_LOGS_EXPLAIN' => '允许用户查看转账日志。',
	'POINTS_MINIMUM' => '&nbsp;最小值', // &nbsp; is for alignment of input boxes for Points Bonus Value
	'POINTS_MAXIMUM' => '最大值',
	'POINTS_NAME' => '积分名称',
	'POINTS_NAME_EXPLAIN' => '您希望在论坛上显示的代替<em>积分</em>一词的名称。',
	'POINTS_NAME_UPLIST' => '用户列表名称',
	'POINTS_NAME_UPLIST_EXPLAIN' => '您希望在论坛上显示的代替<em>UP列表</em>一词的名称。',
	'POINTS_POLL' => '新建投票获得积分',
	'POINTS_POLL_PER_OPTION' => '投票中每个选项的积分',
	'POINTS_POST_PER_CHARACTER' => '新回复中每个字符的积分',
	'POINTS_POST_PER_WORD' => '新回复中每个单词的积分',
	'POINTS_SHOW_PER_PAGE' => '每页条目数',
	'POINTS_SHOW_PER_PAGE_ERROR' => '每页显示的条目数至少需要5个。',
	'POINTS_SHOW_PER_PAGE_EXPLAIN' => '在此处输入应在日志和彩票历史记录中每页显示的条目数。（最少5个）',
	'POINTS_SMILIES' => '表情符号',
	'POINTS_STATS' => '在首页显示积分统计',
	'POINTS_STATS_EXPLAIN' => '在主版块首页显示积分统计。',
	'POINTS_TOPIC_PER_CHARACTER' => '新主题中每个字符的积分',
	'POINTS_TOPIC_PER_WORD' => '新主题中每个单词的积分',
	'POINTS_TRANSFER' => '允许转账',
	'POINTS_TRANSFER_EXPLAIN' => '允许用户相互转账/捐赠积分。',
	'POINTS_TRANSFER_FEE' => '转账费用',
	'POINTS_TRANSFER_FEE_EXPLAIN' => '每次转账时扣留的百分比。',
	'POINTS_TRANSFER_FEE_ERROR' => '转账费用不能为100%或更高。',
	'POINTS_TRANSFER_PM' => '通过站内信通知用户转账',
	'POINTS_TRANSFER_PM_EXPLAIN' => '允许用户在有人向他们发送积分时通过站内信接收通知。',
	'POINTS_WARN' => '每次用户警告扣除的积分（设为0以禁用此功能）',

	'REG_POINTS_BONUS' => '注册积分奖励',
	'RESYNC_ATTENTION' => '以下操作无法撤消！！',
	'RESYNC_DESC' => '重置用户积分和日志',
	'RESYNC_LOTTERY_HISTORY' => '重置彩票历史记录',
	'RESYNC_LOTTERY_HISTORY_CONFIRM' => '您确定要重置彩票历史记录吗？<br />注意：此操作无法撤消！',
	'RESYNC_LOTTERY_HISTORY_EXPLAIN' => '这将重置完整的彩票历史记录。',
	'RESYNC_POINTS' => '重置用户积分',
	'RESYNC_POINTSLOGS' => '重置用户日志',
	'RESYNC_POINTSLOGS_CONFIRM' => '您确定要重置用户日志吗？<br />注意：此操作无法撤消！',
	'RESYNC_POINTSLOGS_EXPLAIN' => '删除所有用户日志。',
	'RESYNC_POINTS_CONFIRM' => '您确定要重置所有用户积分吗？<br />注意：此操作无法撤消！',
	'RESYNC_POINTS_EXPLAIN' => '将所有用户的积分账户重置为零。',
	'ROBBERY_CHANCE' => '成功抢劫的机会',
	'ROBBERY_CHANCE_ERROR' => '成功抢劫的机会不能高于100%！！',
	'ROBBERY_CHANCE_EXPLAIN' => '在这里您可以设置成功抢劫的百分比。（值越高，成功机会越大）',
	'ROBBERY_CHANCE_MINIMUM' => '成功抢劫的机会必须高于0%！！',
	'ROBBERY_ENABLE' => '启用抢劫模块',
	'ROBBERY_ENABLE_EXPLAIN' => '这将允许用户使用抢劫模块。',
	'ROBBERY_LOOSE' => '抢劫失败的惩罚',
	'ROBBERY_LOOSE_ERROR' => '抢劫失败的惩罚不能高于100%！！',
	'ROBBERY_LOOSE_EXPLAIN' => '如果用户抢劫失败，尝试抢劫他人的用户将失去所期望抢劫价值的x%。',
	'ROBBERY_LOOSE_MINIMUM' => '抢劫失败的惩罚不应为0%。您真的应该给小偷一些惩罚！！',
	'ROBBERY_MAX_ROB' => '最大抢劫百分比',
	'ROBBERY_MAX_ROB_ERROR' => '您不能设置高于100%的值！！',
	'ROBBERY_MAX_ROB_EXPLAIN' => '这个值是用户现金金额中一次可以被抢走的百分比。',
	'ROBBERY_MAX_ROB_MINIMUM' => '最大抢劫值应高于0%。否则这个选项就没有意义了！',
	'ROBBERY_MCHAT_OPTIONS' => '抢劫mChat设置',
	'ROBBERY_MCHAT_ENABLE' => '启用抢劫在mChat中的发帖功能',
	'ROBBERY_MCHAT_ENABLE_EXPLAIN' => '发布抢劫失败和成功抢劫的信息。',
	'ROBBERY_NOTIFY' => '向被抢用户发送通知',
	'ROBBERY_NOTIFY_EXPLAIN' => '这将激活向被攻击用户发送通知的选项。',
	'ROBBERY_OPTIONS' => '抢劫设置',

	'TOP_POINTS' => '显示最富有会员的数量',
	'TOP_POINTS_EXPLAIN' => '在这里您可以设置显示最富有用户的数量。在不同视图中有效。',
	'TRANSFER_MCHAT_ENABLE' => '启用转账在mChat中的发帖功能',
	'TRANSFER_MCHAT_ENABLE_EXPLAIN' => '发布来自成员的转账。',
	'TRANSFER_MCHAT_OPTIONS' => '转账mChat设置',

	'UPLIST_ENABLE' => '启用论坛积分列表',
	'UPLIST_ENABLE_EXPLAIN' => '允许用户使用论坛积分列表。',
	'USER_POINTS' => '用户积分',
	'USER_POINTS_EXPLAIN' => '用户拥有的积分数量。',
]);