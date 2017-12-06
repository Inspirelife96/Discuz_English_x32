<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupthread.php by Valery Votintsev, codersclub.org
 *      Arabic by Khalid El-Nahhal, http://www.ar-discuz.org
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'groupthread_fids'		=> 'أرقام المجموعات/رقم المجموعة',//'群组ID',
	'groupthread_fids_comment'		=> 'Speicfic group ID, use "," to seperate IDs',//'指定群组ID，多个ID之间用 , 分割',
	'groupthread_gtids'		=> 'أقسام المجموعة',//'群组分类',
	'groupthread_gtids_comment'		=> 'Select group category',//'选择群组分类',
	'groupthread_uids'		=> 'أرقام الكتاب',//'楼主UID',
	'groupthread_uids_comment'		=> 'Specific thread author ID, use "," to seperate IDs',//'指定主题作者ID，多个ID之间用 , 分割',
	'groupthread_keyword'		=> 'عنوان الكلمات الدلالية',
	'groupthread_keyword_comment'	=> 'تعيين الكلمات الدلالية المستخدمة.<br />يمكنك إستعمال "*"  في الكلمات الدلالية.<br />إذا كنت تريد أن تستخدم بعض الكلمات الدلالية في نفس الوقت, يمكنك إستعمال  "AND". مثال : win32 AND unix.<br />إذا كنت تريد أن تستخدم كلمة واحدة من الكلمات الدلالية يمكنك إستعمال "|" أو "OR".مثال : win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'groupthread_startrow'		=> 'صف البدء',//'起始数据行数',
	'groupthread_startrow_comment'	=> 'إذا كنت بحاجة لتعيين صف البدء,الرجاء إدخال الرقم, 0 هو الصف الأول',//'如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'groupthread_items'		=> 'الصفوف',//'显示数据条数',
	'groupthread_items_comment'	=> 'حدد عدد الصفوف التي تريد عرضها , يجب أن تكون أكبر من 0',//'设置一次显示的主题条目数，请设置为大于 0 的整数',
	'groupthread_titlelength'	=> 'طول العنوان',//'标题最大字节数',
	'groupthread_maxlength_comment'	=> 'حدد الحد الأقصى من طول العنوان , إذا كان العنوان أكبر من القيمة سيتم قصه تلقائي , ضع 0 لتعطيل الخاصية',//'设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'groupthread_fnamelength'	=> 'طول عنوان المنتدى',//'标题最大字节数包含版块名称',
	'groupthread_fnamelength_comment'	=> 'تعيين الحد الأقصى من طول عنوان المنتدى',//'设置标题长度是否将所在版块名称的长度一同计算在内',
	'groupthread_summarylength'	=> 'طول عنوان الملخص',//'主题简短内容文字数',
	'groupthread_summarylength_comment'	=> 'تعيين مول عنوان الملخص , إستعمل القيمة 0 لإستخدام القيمة الافتراضية وهي (255)',//'设置主题简短内容的文字数，0 为使用默认值 255',
	'groupthread_picpre'		=> 'أيقونة (البادئة)',//'前缀图标',
	'groupthread_picpre_comment'		=> 'Set the icon of thread prefix, keep blank to disable it',//'设置是否在主题前加入图片形式的图标，输入图片的 URL (绝对或相对)地址即可，留空为不显示前缀图标',
	'groupthread_tids'		=> 'مواضيع محددة',//'指定主题',
	'groupthread_tids_comment'	=> 'أدخل أرقام المواضيع التي تريد عرضها, إستخدم "," للفصل بين الارقام',//'设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'groupthread_keyword'		=> 'الكلمات الدلالية',//'标题关键字',
	'groupthread_keyword_comment'	=> 'تعيين الكلمات الدلالية المستخدمة.<br />يمكنك إستعمال "*"  في الكلمات الدلالية.<br />إذا كنت تريد أن تستخدم بعض الكلمات الدلالية في نفس الوقت, يمكنك إستعمال  "AND". مثال : win32 AND unix.<br />إذا كنت تريد أن تستخدم كلمة واحدة من الكلمات الدلالية يمكنك إستعمال "|" أو "OR".مثال : win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'groupthread_typeids'		=> 'أنواع المواضيع',//'主题分类',
	'groupthread_typeids_comment'	=> 'حدد أنواع خاصة من المواضيع . ملاحظة : حدد الكل أو لا تحدد الكل لتعطيل التصفية',//'设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_typeids_all'	=> 'كل أنواع المواضيع',//'全部的主题分类',
	'groupthread_sortids'		=> 'أرقام الترتيب(الأقسام?)',//'分类信息',
	'groupthread_sortids_comment'		=> 'Set the thread classification. Note: Select All or None for disable filtering',//'设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_sortids_all'	=> 'كل الأقسام',//'全部的分类信息',
	'groupthread_threadtype'	=> 'بادئة نوع الموضوع',//'显示主题分类前缀',
	'groupthread_threadtype_comment'	=> 'عرض البدائة قبل المواضيع',//'设置是否在主题列表中，给分类的主题前加上分类名称',
	'groupthread_groupthreadort'	=> 'عرض البادئة',//'显示分类信息前缀',
	'groupthread_groupthreadort_comment'	=> 'Set to display category prefix before threads name in threads list',//'设置是否在主题列表中，给分类信息的主题前加上分类信息名称',
	'groupthread_highlight'		=> 'تمييز',//'显示主题的高亮特性',
	'groupthread_highlight_comment'	=> 'المحافظة على تمييز المواضيع',//'设置是否显示主题的高亮特性',
	'groupthread_digest'		=> 'تصفية حسب المميز',//'精华主题过滤',
	'groupthread_digest_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_digest_0'		=> 'موضوع عادي',//'普通主题',
	'groupthread_digest_1'		=> 'مميز 1',//'精华 I',
	'groupthread_digest_2'		=> 'مميز 2',//'精华 II',
	'groupthread_digest_3'		=> ' مميز 3 ',//'精华 III',
	'groupthread_stick'		=> 'فلتر التثبيت',//'置顶主题过滤',
	'groupthread_stick_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_stick_0'		=> 'موضوع عادي',//'普通主题',
	'groupthread_stick_1'		=> 'مثبت 1',//'置顶 I',
	'groupthread_stick_2'		=> 'مثبت 2',//'置顶 II',
	'groupthread_stick_3'		=> 'مثبت 3',//'置顶 III',
	'groupthread_special'		=> 'تصفيحة حسب نوع الموضوع',//'特殊主题过滤',
	'groupthread_special_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_special_1'		=> 'إستطلاع',//'投票主题',
	'groupthread_special_2'		=> 'تجارة',//'商品主题',
	'groupthread_special_3'		=> 'طلب/مكافأة',//'悬赏主题',
	'groupthread_special_4'		=> 'فعالية',//'活动主题',
	'groupthread_special_5'		=> 'تحدي',//'辩论主题',
	'groupthread_special_0'		=> 'عادي',//'普通主题',
	'groupthread_special_reward'	=> 'تصفية حسب الطلب',//'悬赏主题过滤',
	'groupthread_special_reward_comment'	=> 'Select specific types of reward',//'设置特定类型的悬赏主题',
	'groupthread_picrequired'	=> 'مطلوب صورة مرفقة',//'必须含图片附件',
	'groupthread_picrequired_comment'	=> 'Set only to display threads contain image attachments',//'设置是否只显示含有图片附件的主题',
	'groupthread_special_reward_0'	=> 'الكل',//'全部',
	'groupthread_special_reward_1'	=> 'إنتهى',//'已解决',
	'groupthread_special_reward_2'	=> 'نشيط',//'未解决',
	'groupthread_recommend'		=> 'تصفية المواضيع المستحسنة',//'推荐主题过滤',
	'groupthread_recommend_comment'		=> 'Display only recommended threads',//'设置是否只显示推荐的主题',
	'groupthread_orderby'		=> 'ترتيب حسب',//'主题排序方式',
	'groupthread_orderby_comment'		=> 'Set the ordering of threads',//'设置以哪一字段或方式对主题进行排序',
	'groupthread_orderby_lastpost'	=> 'آخر مشاركة',//'按最后回复时间倒序排序',
	'groupthread_orderby_dateline'	=> 'وقت البدء',//'按发布时间倒序排序',
	'groupthread_orderby_replies'	=> 'الردود',//'按回复数倒序排序',
	'groupthread_orderby_views'	=> 'المشاهدات',//'按浏览次数倒序排序',
	'groupthread_orderby_heats'	=> 'النشاط',//'按热度倒序排序',
	'groupthread_orderby_recommends'	=> 'مستحسن',//'按主题评价倒序排序',
	'groupthread_orderby_hourviews'		=> 'مشاهدات ضمن وقت محدد',//'按小时内浏览次数倒序排序',
	'groupthread_orderby_todayviews'	=> 'مشاهدات اليوم',//'按当天浏览次数倒序排序',
	'groupthread_orderby_weekviews'		=> 'مشاهدات آخر أسبوع',//'按本周浏览次数倒序排序',
	'groupthread_orderby_monthviews'	=> 'مشاهدات آخر شهر',//'按当月浏览次数倒序排序',
	'groupthread_postdateline'		=> ' وقت نشر الموضوع',
	'groupthread_postdateline_nolimit'	=> 'غير محدد',
	'groupthread_postdateline_hour'		=> 'منذ ساعة',
	'groupthread_postdateline_day'		=> 'منذ يوم',
	'groupthread_postdateline_week'		=> 'منذ أسبوع',
	'groupthread_postdateline_month'	=> 'منذ شهر',
	'groupthread_lastpost'			=> 'آخر مشاركة',//'最后更新时间',
	'groupthread_lastpost_nolimit'		=> 'غير محدد',//'不限制',
	'groupthread_lastpost_hour'		=> '1 ساعة',//'1小时内',
	'groupthread_lastpost_day'		=> '1 يوم',//'24小时内',
	'groupthread_lastpost_week'		=> '1 أسبوع',//'7天内',
	'groupthread_lastpost_month'		=> 'ا شهر',//'1个月内',
	'groupthread_orderby_displayorder'	=> 'ترتيب على حسب الافتراضب',//'按默认顺序',
	'groupthread_gviewperm'			=> 'عرض صلاحيات المجموعة',//'群组浏览权限',
	'groupthread_gviewperm_nolimit'		=> 'بلا قيود',
	'groupthread_gviewperm_only_member'	=> 'الأعضاء فقط',//'仅成员',
	'groupthread_gviewperm_all_member'	=> 'الكل',//'所有人'
	'groupthread_highlight'			=> 'تسليط الضوء على القيمة التي تم الحصول عليها',
);

