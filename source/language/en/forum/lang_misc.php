<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_misc.php by Valery Votintsev, codersclub.org
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'discuz_lang'		=> 'misc',
	'contact'		=> 'Contacts:',//'联系方式:',
	'anonymous'		=> 'Anonymous',//'匿名',
	'anonymoususer'		=> 'Anonymous',//'匿名者',
	'guestuser'		=> 'Guest',//'游客',
	'has_expired'		=> 'This information has expired',//'该信息已经过期',
	'click_view'		=> 'Click to view',//'点击查看',
	'never_expired'		=> 'Never expires',//'永不过期',
	'sort_update'		=> 'Update',//'更新',
	'sort_upload'		=> 'Upload',//'上传',
	'view_noperm'		=> 'Hidden content',//'隐藏内容',
	'post_hidden'		=> '**** Hidden by Author ****',//'**** 本内容被作者隐藏 ****',
	'post_banned'		=> '**** Author was banned or deleted ****',//'**** 作者被禁止或删除 内容自动屏蔽 ****',
	'post_single_banned'	=> '**** This post was banned ****',//'**** 该帖被屏蔽 ****',
	'message_ishidden_hiddenreplies'	=> 'This post is visible only to author of the thread',//'此帖仅作者可见',
	'post_reply_quote'		=> '{author} replied at {time}',//'{author} 发表于 {time}',
	'post_edit'			=> "[i=s] Edited by {editor} at {edittime} [/i]\n\n",//"[i=s] 本帖最后由 {editor} 于 {edittime} 编辑 [/i]\n\n",
	'post_edit_regexp'		=> '/^\[i=s\] Edited by .*? at .*? \[\/i\]\n\n/s',//'/^\[i=s\] 本帖最后由 .*? 于 .*? 编辑 \[\/i\]\n\n/s',
	'post_edithtml'			=> '[i=s] Edited by {editor} at {edittime} [/i]<br /><br />',//'[i=s] 本帖最后由 {editor} 于 {edittime} 编辑 [/i]<br /><br />',
	'post_edithtml_regexp'		=> '/^\[i=s\] Edited by .*? at .*? \[\/i\]&lt;br \/&gt;&lt;br \/&gt;/s',//'/^\[i=s\] 本帖最后由 .*? 于 .*? 编辑 \[\/i\]&lt;br \/&gt;&lt;br \/&gt;/s',
	'post_editnobbcode'		=> '[ Post edited by {editor} at {edittime} ]\n\n',//'[ 本帖最后由 {editor} 于 {edittime} 编辑 ]\n\n',
	'post_editnobbcode_regexp'	=> '/^\[ Post edited by .*? at .*? \]\n\n/s',//'/^\[ 本帖最后由 .*? 于 .*? 编辑 \]\n\n/s',
	'post_reply'			=> 'Reply',//'回复',
	'post_thread'			=> 'Add Thread',//'的帖子',

	'price'				=> 'Price',//'售价',
	'pay_view'			=> 'Payments Log',//'记录',
	'attachment_buy'		=> 'Buy',//'购买',

	'post_trade_yuan'		=> 'USD',//'元',
	'post_trade_seller'		=> 'Seller',//'卖家',
	'post_trade_name'		=> 'Product name',//'商品名称',
	'post_trade_price'		=> 'Price',//'商品价格',
	'post_trade_quality'		=> 'Quality',//'商品成色',
	'post_trade_locus'		=> 'Location',//'所在地点',
	'post_trade_transport_type'	=> 'Delivery tax paid by',//'物流方式',
	'post_trade_transport_seller'	=> 'Seller',//'卖家承担运费',
	'post_trade_transport_buyer'	=> 'Buyer',//'买家承担运费',
	'post_trade_transport_mail'	=> 'Snail Mail',//'平邮',
	'post_trade_transport_express'	=> 'Express Mail',//'快递',
	'post_trade_transport_virtual'	=> 'Virtual or No delivery',//'虚拟物品或无需邮递',
	'post_trade_transport_physical'	=> 'COD (Cash On Delivery)',//'买家收到货物后直接支付给物流公司',
//vot	'post_trade_locus'		=> 'Location',//'所在地点',
	'post_trade_description'	=> 'Product Description',//'商品描述',
	'post_trade_pm_subject'		=> '[Bargain]',//'[议价]',
	'post_trade_pm_buynum'		=> 'Buy amount',//'购买数量',
	'post_trade_pm_wishprice'	=> 'Wish Price',//'我期望的价格是',
	'post_trade_pm_reason'		=> 'Reason of negotiation',//'我议价的理由是',
	'postappend_content'		=> 'Add post',//'补充内容',
	'payment_unit'			=> 'USD',//'元',

	'attach'			=> 'Attachment',//'附件',
	'attach_pay'			=> 'Attachment payed',//'收费附件',
	'attach_credits_policy'		=> 'View payment policy',//'查看积分策略说明',
	'attach_img'			=> 'Attach Images',//'图片附件',
	'attach_readperm'		=> 'Read permissions',//'阅读权限',
	'attach_img_zoom'		=> 'Click to view the full image in new window.\\nCTRL + mouse wheel to zoom in or out.',//'点击在新窗口查看全图\\nCTRL+鼠标滚轮放大或缩小',
	'attach_img_thumb'		=> 'Click to view the full image in new window',//'点击在新窗口查看全图',
	'attach_downloads'		=> 'Downloads',//'下载次数',

	'post_trade_transport'		=> 'Transport fee',//'邮费',
//vot	'post_trade_transport_mail'	=> 'Snail mail',//'平邮',
	'post_trade_quality'		=> 'Product type',//'商品成色',
	'post_trade_quality_new'	=> 'New',//'全新',
	'post_trade_quality_secondhand'	=> 'Secondhand',//'二手',

	'trade_unstart'			=> '<font color="gray">Wait for processing</font>',//'<font color="gray">未生效的交易</font>',
	'trade_waitbuyerpay'		=> 'Wait for payment',//'等待买家付款',
	'trade_waitsellerconfirm'	=> 'Wait for seller confirm order',//'交易已创建，等待卖家确认',
	'trade_sysconfirmpay'		=> 'Wait for seller confirm payment',//'确认买家付款中，暂勿发货',
	'trade_waitsellersend'		=> 'Payed. Wait for seller shipping',//'买家已付款，等待卖家发货',
	'trade_waitbuyerconfirm'	=> 'Shipped. Wait for buyer confirm',//'卖家已发货，买家确认中',
	'trade_syspayseller'		=> 'Delivered. Wait for system payment to the seller',//'买家确认收到货，等待支付宝打款给卖家',
	'trade_finished'		=> '<font color="green">Sale successfully finished</font>',//'<font color="green">交易成功结束</font>',
	'trade_closed'			=> '<font color="gray">Sale closed (not finished)</font>',//'<font color="gray">交易中途关闭(未完成)</font>',
	'trade_waitselleragree'		=> 'Wait for seller agree the refund',//'等待卖家同意退款',
	'trade_sellerrefusebuyer'	=> 'Seller refused buyer conditions, waiting for buyer modify his conditions',//'卖家拒绝买家条件，等待买家修改条件',
	'trade_waitbuyerreturn'		=> 'Seller approved refund, waiting for return products to buyer',//'卖家同意退款，等待买家退货',
	'trade_waitsellerconfirmgoods'	=> 'Wait for the seller receiving refunded products',//'等待卖家收货',
	'trade_waitalipayrefund'	=> 'Both sides have agreed, wait for the money refund from payment system',//'双方已经一致，等待支付宝退款',
	'trade_alipaycheck'		=> 'Wait for payment system processed refund',//'支付宝处理中',
	'trade_overedrefund'		=> 'Refund overed',//'结束的退款',
	'trade_refundsuccess'		=> '<font color="green">Successfully refunded</font>',//'<font color="green">退款成功</font>',
	'trade_refundclosed'		=> '<font color="green">Refund closed</font>',//'<font color="green">退款关闭</font>',

	'trade_offline_1'		=> 'Transaction initiated',//'交易单生效',
	'trade_offline_4'		=> 'I have paid and waiting for delivery.',//'我已付款，等待卖家发货',
	'trade_offline_5'		=> 'I have shipped.',//'我已发货',
	'trade_offline_7'		=> 'I have received products, the transaction successfully concluded',//'我收到货，交易成功结束',
	'trade_offline_8'		=> 'Cancel this transaction.',//'取消此次交易',
	'trade_offline_10'		=> 'I want to return, waiting for the seller agreed to refund.',//'我要退货，等待卖家同意退款',
	'trade_offline_11'		=> 'The seller refused to refund.',//'卖家拒绝退款',
	'trade_offline_12'		=> 'Seller agreed to refund.',//'卖家同意退款',
	'trade_offline_13'		=> 'I have returned, waiting for seller received products.',//'我已退货，等待卖家收货',
	'trade_offline_17'		=> 'Seller received returned products, refunded.',//'卖家收到退货，已退款',

	'trade_message_4'		=> 'Enter the payment method and bank account info',//'可输入付款方式、银行账号等信息',
	'trade_message_5'		=> 'Enter shipping company, invoices, and other information',//'可输入发货公司、发货单号等信息',
	'trade_message_13'		=> 'Enter shipping company, invoices, and other information',//'可输入发货公司、发货单号等信息',

	'credit_payment'		=> 'Recharge Points',//'积分充值',
	'credit_forum_payment'		=> 'Recharge forum points',//'论坛积分充值',
	'credit_forum_royalty'		=> 'Transaction fee',//'交易手续费',

	'credit_total'			=> 'Total Points',//'总积分',

	'invite_payment'		=> 'Buy an invitation code',//'购买邀请码',
	'invite_forum_payment'		=> 'Buy an invitation code',//'购买邀请码',
	'invite_forum_payment_unit'	=> 'payment unit',//'个',
	'invite_forum_royalty'		=> 'Transaction fee',//'交易手续费',

	'formulaperm_regdate'		=> 'Registration date',//'注册时间',
	'formulaperm_regday'		=> 'Days after register',//'注册天数',
	'formulaperm_regip'		=> 'Reg IP',//'注册 IP',
	'formulaperm_lastip'		=> 'Last IP',//'最后登录 IP',
	'formulaperm_buyercredit'	=> 'Buyer rate',//'买家信用评价',
	'formulaperm_sellercredit'	=> 'Seller rate',//'卖家信用评价',
	'formulaperm_digestposts'	=> 'Digests',//'精华帖数',
	'formulaperm_posts'		=> 'Posts',//'发帖数',
	'formulaperm_threads'		=> 'Threads',//'主题数',
	'formulaperm_oltime'		=> 'Online time (hours)',//'在线时间(小时)',
	'formulaperm_pageviews'		=> 'Page views',//'页面浏览量',
	'formulaperm_and'		=> 'and',//'并且',
	'formulaperm_or'		=> 'or',//'或者',
	'formulaperm_extcredits'	=> 'Ext Points',//'自定义积分',

	'login_normal_mode'		=> 'Online',//'在线',
	'login_switch_invisible_mode'	=> 'Toggle to stealth mode',//'切换在线状态',
	'login_switch_normal_mode'	=> 'Toggle to online mode',//'我要上线',
	'login_invisible_mode'		=> 'Stealth',//'隐身',

	'eccredit_explain'		=> 'Explanation',//'解释',

	'google_site_0'			=> 'Search web',//'网页搜索',
	'google_site_1'			=> 'Search site',//'站内搜索',
	'google_sa'			=> 'Search',//'搜索',

	'modcp_logs_action_home'	=> 'CP home',//'内部留言',
	'modcp_logs_action_moderate'	=> 'Moderate',//'审核',
	'modcp_logs_action_member'	=> 'Edit User',//'用户管理',
	'modcp_logs_action_forumaccess'	=> 'User Permissions',//'用户权限',
	'modcp_logs_action_thread'	=> 'Threads Management',//'主题管理',
	'modcp_logs_action_forum'	=> 'Forum Management',//'版块管理',
	'modcp_logs_action_announcement'	=> 'Announcements',//'公告',
	'modcp_logs_action_log'		=> 'Manage blogs',//'管理日志',
	'modcp_logs_action_stat'	=> 'Moderator Statistics',//'管理统计',

	'modcp_logs_action_login'	=> 'Login',//'登录',

	'uch_selectalbum'		=> 'Select album',//'请选择相册',
	'uch_noalbum'			=> 'You have no albums, ',//'您还没有相册，',
	'click_here'			=> 'Click here',//'点击这里',
	'uch_createalbum'		=> ' to create new album!',//'创建自己的相册吧！',

	'pm_from'		=> 'From',//'发件人',
	'pm_to'			=> 'To',//'收件人',
	'pm_date'		=> 'Date',//'日期',

	'share_message'		=> 'Hello! I saw this thread at {$_G[setting][bbname]}, I think it is valuable, so I recommend it to you.\\n\\nTitle: $thread[subject]\\nURL: [url={$threadurl}]{$threadurl}[/url]\\n\\nHope you like it.',//'您好！我在 {$_G[setting][bbname]} 看到了这篇帖子，认为很有价值，特推荐给您。\\n\\n$thread[subject]\\n地址 [url={$threadurl}]{$threadurl}[/url]\\n\\n希望您能喜欢',

	'week_0'	=> 'Sun',//'星期日',
	'week_1'	=> 'Mon',//'星期一',
	'week_2'	=> 'Tue',//'星期二',
	'week_3'	=> 'Wed',//'星期三',
	'week_4'	=> 'Thu',//'星期四',
	'week_5'	=> 'Fri',//'星期五',
	'week_6'	=> 'Sat',//'星期六',

	'y_m_d'		=> 'Y-m-d',//'Y年m月d日',

	'notice_actor'		=> ', and so on. Total: $actorcount people',//'等 $actorcount 人',

	'perms_allowvisit'		=> 'Forum access',//'访问论坛',
	'perms_readaccess'		=> 'Read permissions',//'阅读权限',
	'perms_allowviewpro'		=> 'View member info',//'查看用户资料',
	'perms_allowinvisible'		=> 'Stealth',//'隐身',
	'perms_allowsearch'		=> 'Use search',//'使用搜索',
	'perms_allownickname'		=> 'Allow to use nickname',//'使用昵称',
	'perms_allowcstatus'		=> 'Custom status',//'自定义头衔',
	'perms_allowpost'		=> 'Add thread',//'发新话题',
	'perms_allowreply'		=> 'Reply post',//'发表回复',
	'perms_allowpostpoll'		=> 'Add poll',//'发起投票',
	'perms_allowvote'		=> 'Vote poll',//'参与投票',
	'perms_allowpostreward'		=> 'Add award thread',//'发表悬赏',
	'perms_allowpostactivity'	=> 'Add event',//'发表活动',
	'perms_allowpostdebate'		=> 'Add debate',//'发表辩论',
	'perms_allowposttrade'		=> 'Add product',//'发表交易',
	'perms_maxsigsize'		=> 'Max signature length',//'最大签名长度',
	'perms_allowsigbbcode'		=> 'Use BBCode in signature',//'签名中使用编辑器代码',
	'perms_allowsigimgcode'		=> 'Use [img] tag in signature',//'签名中使用 [img] 代码',
	'perms_maxbiosize'		=> 'Max length of self-about',//'自我介绍最大长度',
	'perms_allowrecommend'		=> 'Allow to recomend topic',//'主题评价影响值',
	'perms_allowbiobbcode'		=> 'Use BBCode in self-about',//'自我介绍中使用编辑器代码',
	'perms_allowbioimgcode'		=> 'Use [img] tag in self-about',//'自我介绍中使用 [img] 代码',
	'perms_allowgetattach'		=> 'Download/View Attachment',//'下载附件',
	'perms_allowgetimage'		=> 'View image',//'查看图片',
	'perms_allowpostattach'		=> 'Upload attachment',//'上传附件',
	'perms_allowpostimage'		=> 'Upload image',//'上传图片',
	'perms_allowsetattachperm'	=> 'Allow to set attachment permissions',//'允许设置附件权限',
	'perms_maxspacesize'		=> 'Max Space Size',//'空间大小',
	'perms_maxattachsize'		=> 'Max attach size',//'单个最大附件尺寸',
	'perms_maxsizeperday'		=> 'Max attach size per day',//'每天最大附件总尺寸',
	'perms_maxattachnum'		=> 'Max number of attachments per day',//'每天最大附件数量',
//vot	'perms_allowbioimgcode'		=> 'Use [img] tag in self-about',//'自我介绍中使用 [img] 代码',
	'perms_attachextensions'	=> 'Attach type',//'附件类型',
	'perms_allowstickthread'	=> 'Stick thread',//'主题置顶',
	'perms_allowdigestthread'	=> 'Digest thread',//'主题精华',
	'perms_allowstickthread_value'	=> 'Stick',//'置顶',
	'perms_allowdigestthread_value'	=> 'Digest',//'精华',
	'perms_allowbumpthread'		=> 'Bump',//'提升主题',
	'perms_allowhighlightthread'	=> 'Hightlight',//'主题高亮',
	'perms_allowrecommendthread'	=> 'Recommend',//'主题推荐',
	'perms_allowstampthread'	=> 'Stamp',//'主题鉴定',
	'perms_allowclosethread'	=> 'Close',//'主题关闭',
	'perms_allowmovethread'		=> 'Thread move',//'主题移动',
	'perms_allowedittypethread'	=> 'Edit Type',//'编辑主题分类',
	'perms_allowcopythread'		=> 'Copy',//'主题复制',
	'perms_allowmergethread'	=> 'Merge',//'主题合并',
	'perms_allowsplitthread'	=> 'Split',//'主题分割',
	'perms_allowrepairthread'	=> 'Repair',//'主题修复',
	'perms_allowrefund'		=> 'Refund',//'强制退款',
	'perms_alloweditpoll'		=> 'Edit poll',//'编辑投票',
	'perms_allowremovereward'	=> 'Remove Reward',//'移除悬赏',
	'perms_alloweditactivity'	=> 'Event Edit',//'管理活动',
	'perms_allowedittrade'		=> 'Product edit',//'管理商品',
	'perms_alloweditpost'		=> 'Edit post',//'编辑帖子',
	'perms_allowwarnpost'		=> 'Warn Posts',//'警告帖子',
	'perms_allowbanpost'		=> 'Ban posts',//'屏蔽帖子',
	'perms_allowdelpost'		=> 'Delete post',//'删除帖子',
	'perms_allowviewreport'		=> 'View Report',//'查看用户报告',
	'perms_allowmodpost'		=> 'Posts Moderation',//'审核帖子',
	'perms_allowmoduser'		=> 'User moderation',//'审核用户',
	'perms_allowbanuser'		=> 'Ban user',//'禁止用户',
	'perms_allowbanip'		=> 'Ban IP',//'禁止 IP',
	'perms_allowedituser'		=> 'Edit member',//'编辑用户',
	'perms_allowmassprune'		=> 'Bulk post delete',//'批量删帖',
	'perms_allowpostannounce'	=> 'Add announcement',//'发布公告',
	'perms_disablepostctrl'		=> 'Not restricted',//'发帖不受限制',
	'perms_allowviewip'		=> 'View IP',//'允许查看 IP',
	'perms_viewperm'		=> 'View Forum',//'浏览版块',
	'perms_postperm'		=> 'Add thread',//'发新话题',
	'perms_replyperm'		=> 'Reply post',//'发表回复',
	'perms_getattachperm'		=> 'Download/View Attachment',//'下载附件',
	'perms_postattachperm'		=> 'Attach files',//'上传附件',
	'perms_postimageperm'		=> 'Attach images',//'上传图片',
	'perms_allowblog'		=> 'Publish blog',//'发表日志',
	'perms_allowdoing'		=> 'Write Twit',//'发表记录',
	'perms_allowupload'		=> 'Upload image',//'上传图片',
	'perms_allowshare'		=> 'Share',//'发布分享',
	'perms_allowpoke'		=> 'Send Greeting',//'允许打招呼',
	'perms_allowfriend'		=> 'Add friend',//'允许加好友',
	'perms_allowclick'		=> 'Rate',//'允许表态',
	'perms_allowmyop'		=> 'Use apps',//'允许使用应用',
	'perms_allowcomment'		=> 'Post Comment',//'发表留言/评论',
	'perms_allowstatdata'		=> 'View statistical data reports',//'查看统计数据报表',
	'perms_allowstat'		=> 'View statistics',//'允许查看趋势统计',
	'perms_allowpostarticle'	=> 'Post article',//'发表文章',
	'perms_raterange'		=> 'Allow to rate by range',//'允许参与评分',
	'perms_allowcommentpost'	=> 'Allow to comment',//'允许参与点评',
	'perms_allowat'			=> 'Allow the number of @name',//'允许 @ 的人数',
	'perms_allowreplycredit'	=> 'Allow to set replies reward',//'允许设置回帖奖励',
	'perms_allowposttag'		=> 'Allow to use tags',//'允许使用标签',
	'perms_allowcreatecollection'	=> 'Allow to create collections',//'允许创建淘专辑的数量',
	'perms_allowsendpm'		=> 'Allow to Send PM',//'允许发短消息',
	'perms_maximagesize'		=> 'Maximum single image size',//'单张图片最大尺寸',
	'perms_allowmediacode'		=> 'Allow to use multimedia code',//'允许使用多媒体代码',

	'join_topic'		=> 'Join Topic',//'参与话题',
	'join_poll'		=> 'Vote poll',//'参与投票',
	'buy_trade'		=> 'Buy Product',//'购买商品',
	'join_reward'		=> 'Join Reward',//'参与悬赏',
	'join_activity'		=> 'Join Event',//'参与活动',
	'join_debate'		=> 'Join Debate',//'参与辩论',
	'at_invite'		=> '@name for friends',//'@我的好友',

	'lower'			=> 'less than',//'低于',
	'higher'		=> 'greater than',//'高于',
	'report_msg_your'	=> 'Your ',//'您的 ',
	'report_noreward'	=> 'no reward',//'不奖惩',
	'activity_viewimg'	=> 'Click to view',//'点击查看',

	'crime_postreason'	=> '{reason} &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="xi2">Details</a>',//'{reason} &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="xi2">查看详情</a>',
	'crime_reason'		=> '{reason}',

	'connectguest_message_search'	=> array('Not logged in', 'Logged'),//array('尚未登录', '先登录'),
	'connectguest_message_replace'	=> array('Not yet <a href="member.php?mod=connect">Improve current account</a> or <a href="member.php?mod=connect&ac=bind">Bind existing account</a>', 'You need to <a href="member.php?mod=connect">Improve account information</a> or <a href="member.php?mod=connect&ac=bind">Bind existing account</a> '),//array('尚未 <a href="member.php?mod=connect">完善帐号信息</a> 或 <a href="member.php?mod=connect&ac=bind">绑定已有帐号</a> ', '您需要先 <a href="member.php?mod=connect">完善帐号信息</a> 或 <a href="member.php?mod=connect&ac=bind">绑定已有帐号</a> '),
	'connectguest_message_mobile_search'	=> array('Not logged in', 'Logged'),//array('尚未登录', '先登录'),
	'connectguest_message_mobile_replace'	=> 'Provide your account information or Bind existing account, ',//'在电脑版完善资料或绑定已有帐号，',

	'avatar'		=> 'Avatar',//'头像',
	'signature'		=> 'Signature',//'签名',
	'custom_title'		=> 'Custom Title',//'自定义头衔',

	'forum_guide'		=> 'Guide',//'导读',

	'patch_site_have'	=> 'Your site have',//'您的网站有',
	'patch_is_fixed'	=> 'Security vulnerabilities, has been fixed',//'个安全漏洞，已修复',
	'patch_need_fix'	=> 'Security vulnerabilities',//'个安全漏洞，请尽快修复',
	'patch_fixed_status'	=> 'Fixed',//'已修复',
	'patch_unfix_status'	=> 'NOT fixed',//'未修复',
	'patch_fix_failed_status'	=> 'Repair failed',//'修复失败',
	'patch_fix_right_now'	=> 'Repair right now',//'立即修复',
	'patch_view_fix_detail'	=> 'Details',//'查看详情',
	'patch_name'		=> 'Vulnerability',//'漏洞名称',
	'patch_dateline'	=> 'Date',//'发布日期',
	'patch_status'		=> 'Status',//'当前状态',
	'patch_close'		=> 'Close',//'关闭',

	'plugin_title'		=> 'Application update reminder',//'应用更新提醒',
	'plugin_memo'		=> 'Updates available: <span class="xi1">{number}</span>',//'您有 <span class="xi1">{number}</span> 款应用有可用更新',
	'plugin_link'		=> 'Update Now',//'现在更新',

	'seccode'		=> 'Verification code',//'验证码',
	'seccode_update'	=> 'Renew',//'换一个',
	'seccode_player'	=> '<span style="padding:2px"><img border="0" style="vertical-align:middle" src="static/image/common/seccodeplayer.gif" /> <a href="javascript:;" onclick="window.document.seccodeplayer_{idhash}.SetVariable(\'isPlay\', 1)">Play the verification code</a></span>',//'<span style="padding:2px"><img border="0" style="vertical-align:middle" src="static/image/common/seccodeplayer.gif" /> <a href="javascript:;" onclick="window.document.seccodeplayer_{idhash}.SetVariable(\'isPlay\', 1)">播放验证码</a></span>',
	'secqaa'		=> 'Secure Answer',//'验证问答',

	'mobileoem_creditrule'	=> 'Mobile Forum Registration',//'掌上论坛签到',

// Added by Valery Votintsev, codersclub.org
	'poll_reply_no_perms'	=> 'You can not reply the poll',//'您不能对自己的回帖进行投票',
	'poll_replyed_already'	=> 'You have already replied this poll',//'您已经对此回帖投过票了',
	'poll_voted_ok'		=> 'You have voted successfully',//'投票成功',
);

