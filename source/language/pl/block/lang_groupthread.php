<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $ID: lang_groupthread.php by Valery Votintsev at 
 *      polish language pack by kaaleth ( kaaleth-discuzpl@windowslive.com )
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'groupthread_fids'			=> 'Group ID',//'群组ID',
	'groupthread_fids_comment'		=> 'Speicfic group ID, use "," to seperate IDs',//'指定群组ID，多个ID之间用 , 分割',
	'groupthread_gtids'			=> 'Group Categories',//'群组分类',
	'groupthread_gtids_comment'		=> 'Select group category',//'选择群组分类',
	'groupthread_uids'			=> 'Author UID',//'楼主UID',
	'groupthread_uids_comment'		=> 'Specific thread author ID, use "," to seperate IDs',//'指定主题作者ID，多个ID之间用 , 分割',
	'groupthread_keyword'			=> 'Keywords',//'标题关键字',
	'groupthread_keyword_comment'		=> 'Set the keywords used.<br />You can use wildcard "*" in keywords.<br />If you want to use some keywords at same time, you can use "AND". Example: win32 AND unix.<br />If you want to use just one of keywords, you can use "|" or "OR". Example: win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'groupthread_startrow'			=> 'Start Row',//'起始数据行数',
	'groupthread_startrow_comment'		=> 'If you need to set start row, please enter a number, 0 is the first row',//'如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'groupthread_items'			=> 'Rows',//'显示数据条数',
	'groupthread_items_comment'		=> 'Set the numbers of rows you want to display, it must integer and larger than 0',//'设置一次显示的主题条目数，请设置为大于 0 的整数',
	'groupthread_titlelength'		=> 'Title length',//'标题最大字节数',
	'groupthread_maxlength_comment'		=> 'Set the max length of title, when the title is longer than this valuse, it will be cutted automatically, 0 is disable',//'设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'groupthread_fnamelength'		=> 'Forum Title Length',//'标题最大字节数包含版块名称',
	'groupthread_fnamelength_comment'	=> 'Set the title max length including the forum name',//'设置标题长度是否将所在版块名称的长度一同计算在内',
	'groupthread_summarylength'		=> 'Summary Length',//'主题简短内容文字数',
	'groupthread_summarylength_comment'	=> 'Set the length of summary, 0 equal to default value (255)',//'设置主题简短内容的文字数，0 为使用默认值 255',
	'groupthread_picpre'			=> 'Prefix Icon',//'前缀图标',
	'groupthread_picpre_comment'		=> 'Set the icon of thread prefix, keep blank to disable it',//'设置是否在主题前加入图片形式的图标，输入图片的 URL (绝对或相对)地址即可，留空为不显示前缀图标',
	'groupthread_tids'			=> 'Specified threads',//'指定主题',
	'groupthread_tids_comment'		=> 'Set the specified threads tid you want to display, use "," to seperate tids',//'设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'groupthread_keyword'			=> 'Keywords',//'标题关键字',
	'groupthread_keyword_comment'		=> 'Set the keywords used.<br />You can use wildcard "*" in keywords.<br />If you want to use some keywords at same time, you can use "AND". Example: win32 AND unix.<br />If you want to use just one of keywords, you can use "|" or "OR". Example: win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'groupthread_typeids'			=> 'Thread types',//'主题分类',
	'groupthread_typeids_comment'		=> 'Select specific thread type. Note: Select All or Clear All for disable any filtering.',//'设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_typeids_all'		=> 'All thread types',//'全部的主题分类',
	'groupthread_sortids'			=> 'Sort IDs(Categories?)',//'分类信息',
	'groupthread_sortids_comment'		=> 'Set the thread classification. Note: Select All or None for disable filtering',//'设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_sortids_all'		=> 'All categories',//'全部的分类信息',
	'groupthread_threadtype'		=> 'Thread Type Prefix',//'显示主题分类前缀',
	'groupthread_threadtype_comment'	=> 'Display the prefix before threads',//'设置是否在主题列表中，给分类的主题前加上分类名称',
	'groupthread_groupthreadort'		=> 'Display Category Prefix',//'显示分类信息前缀',
	'groupthread_groupthreadort_comment'	=> 'Set to display category prefix before threads name in threads list',//'设置是否在主题列表中，给分类信息的主题前加上分类信息名称',
	'groupthread_highlight'			=> 'Wyróżnij',//'显示主题的高亮特性',
	'groupthread_highlight_comment'		=> 'Keep the highlight of threads',//'设置是否显示主题的高亮特性',
	'groupthread_digest'			=> 'Digest Filter',//'精华主题过滤',
	'groupthread_digest_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_digest_0'			=> 'General thread',//'普通主题',
	'groupthread_digest_1'			=> 'Digest I',//'精华 I',
	'groupthread_digest_2'			=> 'Digest II',//'精华 II',
	'groupthread_digest_3'			=> 'Digest III',//'精华 III',
	'groupthread_stick'			=> 'Stick filter',//'置顶主题过滤',
	'groupthread_stick_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_stick_0'			=> 'General thread',//'普通主题',
	'groupthread_stick_1'			=> 'Stick I',//'置顶 I',
	'groupthread_stick_2'			=> 'Stick II',//'置顶 II',
	'groupthread_stick_3'			=> 'Stick III',//'置顶 III',
	'groupthread_special'			=> 'Special thread filter',//'特殊主题过滤',
	'groupthread_special_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_special_1'			=> 'Poll thread',//'投票主题',
	'groupthread_special_2'			=> 'Market thread',//'商品主题',
	'groupthread_special_3'			=> 'Award thread',//'悬赏主题',
	'groupthread_special_4'			=> 'Event thread',//'活动主题',
	'groupthread_special_5'			=> 'Debate thread',//'辩论主题',
	'groupthread_special_0'			=> 'General thread',//'普通主题',
	'groupthread_special_reward'		=> 'Reward Filter',//'悬赏主题过滤',
	'groupthread_special_reward_comment'	=> 'Select specific types of reward',//'设置特定类型的悬赏主题',
	'groupthread_picrequired'		=> 'Image attachment required',//'必须含图片附件',
	'groupthread_picrequired_comment'	=> 'Set only to display threads contain image attachments',//'设置是否只显示含有图片附件的主题',
	'groupthread_special_reward_0'		=> 'All',//'全部',
	'groupthread_special_reward_1'		=> 'Finished',//'已解决',
	'groupthread_special_reward_2'		=> 'Active',//'未解决',
	'groupthread_recommend'			=> 'Recommended thread filter',//'推荐主题过滤',
	'groupthread_recommend_comment'		=> 'Display only recommended threads',//'设置是否只显示推荐的主题',
	'groupthread_orderby'			=> 'Sortuj wg.',//'主题排序方式',
	'groupthread_orderby_comment'		=> 'Set the ordering of threads',//'设置以哪一字段或方式对主题进行排序',
	'groupthread_orderby_lastpost'		=> 'Ostatni post',//'按最后回复时间倒序排序',
	'groupthread_orderby_dateline'		=> 'Start time',//'按发布时间倒序排序',
	'groupthread_orderby_replies'		=> 'Replies',//'按回复数倒序排序',
	'groupthread_orderby_views'		=> 'Views',//'按浏览次数倒序排序',
	'groupthread_orderby_heats'		=> 'Hot',//'按热度倒序排序',
	'groupthread_orderby_recommends'	=> 'Recommends',//'按主题评价倒序排序',
	'groupthread_orderby_hourviews'		=> 'Views within the specified time',//'按小时内浏览次数倒序排序',
	'groupthread_orderby_todayviews'	=> 'Views today',//'按当天浏览次数倒序排序',
	'groupthread_orderby_weekviews'		=> 'Views last week',//'按本周浏览次数倒序排序',
	'groupthread_orderby_monthviews'	=> 'Views last month',//'按当月浏览次数倒序排序',
	'groupthread_postdateline'		=> 'Publish Time',//'主题发布时间',
	'groupthread_postdateline_nolimit'	=> 'Any',//'不限制',
	'groupthread_postdateline_hour'		=> 'Last Hour',//'1小时内',
	'groupthread_postdateline_day'		=> 'Last Day',//'24小时内',
	'groupthread_postdateline_week'		=> 'Last Week',//'7天内',
	'groupthread_postdateline_month'	=> 'Last Month',//'1个月内',
	'groupthread_lastpost'			=> 'Ostatni post',//'最后更新时间',
	'groupthread_lastpost_nolimit'		=> 'No limit',//'不限制',
	'groupthread_lastpost_hour'		=> 'Last hour',//'1小时内',
	'groupthread_lastpost_day'		=> 'Last day',//'24小时内',
	'groupthread_lastpost_week'		=> 'Last week',//'7天内',
	'groupthread_lastpost_month'		=> 'Last month',//'1个月内',
	'groupthread_orderby_displayorder'	=> 'Order by default',//'按默认顺序',
	'groupthread_gviewperm'			=> 'Group view permissions',//'群组浏览权限',
	'groupthread_gviewperm_nolimit'		=> 'Brak limitów',//'不限制',
	'groupthread_gviewperm_only_member'	=> 'Members only',//'仅成员',
	'groupthread_gviewperm_all_member'	=> 'All',//'所有人',
	'groupthread_highlight'			=> 'Highlight found words',//'获得高亮值',
);

