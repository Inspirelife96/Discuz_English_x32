/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	Javascript Language variables

	$Id: lang_js.js by Valery Votintsev, codersclub.org
	Thai Language by Jaideejung007
*/

//--------------------------------
//static/js/register.js

// Suggested email domains for registering:
var emaildomains = [
		'aol.com',
		'gmail.com',
		'hotmail.com',
		'msn.com',
		'qq.com',
		'yahoo.com'
		];

//--------------------------------
//static/js/common.js

var colortexts = {
	'Black'			: 'สีดำ',//'黑色',
	'Sienna'		: 'สีน้ำตาล',//'赭色',
	'DarkOliveGreen'	: 'สีเขียวมะกอก',//'暗橄榄绿色',
	'DarkGreen'		: 'สีเขียวเข้ม',//'暗绿色',
	'DarkSlateBlue'		: 'สีน้ำเงินนวล',//'暗灰蓝色',
	'Navy'			: 'สีกรมท่า',//'海军色',
	'Indigo'		: 'สีคราม',//'靛青色',
	'DarkSlateGray'		: 'สีเทานวล',//'墨绿色',
	'DarkRed'		: 'สีแดงเข้ม',//'暗红色',
	'DarkOrange'		: 'สีส้มเข้ม',//'暗桔黄色',
	'Olive'			: 'สีมะกอก',//'橄榄色',
	'Green'			: 'สีเขียว',//'绿色',
	'Teal'			: 'สีนกเป็ดน้ำ',//'水鸭色',
	'Blue'			: 'สีน้ำเงิน',//'蓝色',
	'SlateGray'		: 'สีเทา',//'灰石色',
	'DimGray'		: 'สีเทาเข้ม',//'暗灰色',
	'Red'			: 'สีแดง',//'红色',
	'SandyBrown'		: 'สีน้ำตาลทราย',//'沙褐色',
	'YellowGreen'		: 'สีเหลืองเขียว',//'黄绿色',
	'SeaGreen'		: 'สีเขียวน้ำทะเล',//'海绿色',
	'MediumTurquoise'	: 'สีเขียวฟ้า',//'间绿宝石',
	'RoyalBlue'		: 'สีน้ำเงินเข้ม',//'皇家蓝',
	'Purple'		: 'สีม่วง',//'紫色',
	'Gray'			: 'สีเทา',//'灰色',
	'Magenta'		: 'สีม่วงแดง',//'红紫色',
	'Orange'		: 'สีส้ม',//'橙色',
	'Yellow'		: 'สีเหลือง',//'黄色',
	'Lime'			: 'สีมะนาว',//'酸橙色',
	'Cyan'			: 'สีน้ำเงินเขียว',//'青色',
	'DeepSkyBlue'		: 'สีน้ำเงินเข้ม',//'深天蓝色',
	'DarkOrchid'		: 'สีม่วงเข้ม',//'暗紫色',
	'Silver'		: 'สีเงิน',//'银色',
	'Pink'			: 'สีชมพู',//'粉色',
	'Wheat'			: 'สีเหลืองอ่อน',//'浅黄色',
	'LemonChiffon'		: 'สีครีม',//'柠檬绸色',
	'PaleGreen'		: 'สีเขียวซีด',//'苍绿色',
	'PaleTurquoise'		: 'สีฟ้าซีด',//'苍宝石绿',
	'LightBlue'		: 'สีฟ้าสดใส',//'亮蓝色',
	'Plum'			: 'สีม่วงอ่อน',//'洋李色',
	'White'			: 'สีขาว' //'白色'
};

/*
',',	//'，',
'.',	//'。',
':',	//'点',
'!',	//'！'
'&laquo;',//'《',
'&raquo;',//'》',
*/


//--------------------------------

var lng = {

//---------------------------
//static/image/editor/editor_base.js
// USED in /source/module/home/home_editor.php
// MOVE TO:
//static/js/editor_base.js
	'restore_last_saved'	: 'แน่ใจหรือว่าคุณต้องการกู้คืนค่าข้อมูลที่บันทึกไว้ล่าสุด?',//'您确定要恢复上次保存?',
	'cut_manually'		: 'เบราว์เซอร์ของคุณได้ถูกตั้งค่าการรักษาความปลอดภัย ไม่อนุญาตให้ดำเนินการตัดข้อความ กรุณาใช้คีย์ลัด (Ctrl+X)',//'您的浏览器安全设置不允许编辑器自动执行剪切操作,请使用键盘快捷键(Ctrl+X)来完成',
	'copy_manually'		: 'เบราว์เซอร์ของคุณได้ถูกตั้งค่าการรักษาความปลอดภัย ไม่อนุญาตให้ดำเนินการคัดลอกโดยอัตโนมัติ กรุณาใช้คีย์ลัด (Ctrl+C)',//'您的浏览器安全设置不允许编辑器自动执行拷贝操作,请使用键盘快捷键(Ctrl+C)来完成',
	'paste_manually'	: 'เบราว์เซอร์ของคุณได้ถูกตั้งค่าการรักษาความปลอดภัย ไม่อนุญาตให้ดำเนินการวางข้อมูลที่คัดลอกไว้ กรุณาใช้คีย์ลัด (Ctrl+V)',//'您的浏览器安全设置不允许编辑器自动执行粘贴操作,请使用键盘快捷键(Ctrl+V)来完成',
	'graffiti_no_init'	: 'ไม่พบข้อมูลในการวาดรูป',//'找不到涂鸦板初始化数据',
	'ie5_only'		: 'สนับสนุนเฉพาะ IE 5.01 หรือสูงกว่า',//'只支持IE 5.01以上版本',
	'edit_raw'		: 'แก้ไขโค้ดต้นฉบับ',//'编辑源码',
	'plain_text_warn'	: 'ถ้าหากแปลงเป็นข้อความล้วนจะสูญเสียการจัดรูปแบบบางอย่าง แน่ใจหรือไม่ว่าคุณต้องการทำต่อไป?',//'转换为纯文本时将会遗失某些格式。\n您确定要继续吗？',
	'browser_update'	: 'บราวเซอร์ของคุณไม่รองรับคุณสมบัตินี้ กรุณาอัพเกรดเบราวเซอร์ของคุณให้เป็นเวอร์ชันล่าสุด',//'你的浏览器不支持此功能，请升级浏览器版本',
	'tips'			: 'เคล็ดลับ',//'小提示',

//---------------------------
//static/image/editor/editor_function.js
// USED in: /source/admincp/admincp_feed.php
// USED in: /template/default/home/cpacecp_blog.htm
// USED in: /template/default/portal/portalcp_article.htm
// MOVED TO:
//static/js/editor_function.js
	'wysiwyg_only'		: 'การกระทำนี้มีเฉพาะในโหมด WYSIWYG',//'本操作只在多媒体编辑模式下才有效',

//---------------------------
//static/image/admincp/cloud/cloud.js
	'int_cloud_test'	: 'กำลังทดสอบอินเตอร์เฟซแบบฟอร์มอื่นๆ',//'云平台其他接口测试',
	'int_roaming_test'	: 'กำลังทดสอบการติดต่อข้ามเครือข่ายอื่นๆ',//'漫游其他接口测试',
	'int_qq_test'		: 'กำลังทดสอบการเชื่อมต่ออินเทอร์เน็ตของ QQ',//'QQ互联接口测试',
	'server_busy'		: 'The server is busy, please try again later',//'服务器繁忙，请稍后再试',
	'tested_ok'		: 'The test is successful, time used: ',//'测试成功，耗时 ',
	'seconds'		: ' sec.',//' 秒',

//---------------------------
//static/image/admincp/cloud/qqgroup.js
	'select_topic_to_push'	: 'กรุณาเลือกโพสต์ใดๆ เพื่อทำการตั้งโพสต์เป็นบทความ',//'请至少推送一条头条主题和一条列表主题',
	'select_item_to_push'	: 'กรุณาเลือกรายการใดๆ เพื่อทำการตั้งโพสต์เป็นบทความ',//'请至少推送一条信息到列表区域',
	'loading'		: 'กำลังโหลด...',//'加载中...',
	'push5reached'		: 'การตั้งให้เป็นบทความได้ไม่เกิน 5 กรุณาลองใหม่ภายหลัง',//'推送帖子已达到5条，请在右侧取消一些再重试。',
	'click_left'		: 'คลิก',//'点击左侧',
	'push_to_list'		: 'จะตั้งให้เป็นข้อมูลในรายกร',//'将信息推送到列表',
	'wait_image_upload'	: 'กำลังอัพโหลดรูปภาพ โปรดรอสักครู่...',//'图片上传中，请稍后...',





//---------------------------
//upload/static/js/autoloadpage.js
	'loading_content_wait'	: 'Loading content, wait please...',//'正在加载, 请稍后...',

//---------------------------
//upload/static/js/at.js
//	'enter_username'	: 'Please enter the user name',//'请输用户名',

//--------------------------------
//static/js/calendar.js
//static/js/forum_calendar.js
//static/js/home_calendar.js

	'prev_month'	: 'เดือนก่อนหน้า',//'上一月',
	'next_month'	: 'เดือนต่อไป',//'下一月',
	'select_year'	: 'เลือกปี',//'点击选择年份',
	'select_month'	: 'เลือกเดือน',//'点击选择月份',
	'wday0'		: 'อา',//'日',
	'wday1'		: 'จ',//'一',
	'wday2'		: 'อ',//'二',
	'wday3'		: 'พ',//'三',
	'wday4'		: 'พฤ',//'四',
	'wday5'		: 'ศ',//'五',
	'wday6'		: 'ส',//'六',
	'month'		: 'เดือน',//'月',
	'today'		: 'วันนี้',//'今天',
	'hours'		: 'ชั่วโมง',//'点',
	'minutes'	: 'นาที',//'分',
	'halfhour'	: 'Half hour',//'分',
	'ok'		: 'ตกลง',//'OK',

//--------------------------------
//static/js/common.js

	'open_new_win'		: 'เปิดหน้าต่างใหม่',//'在新窗口打开',
	'actual_size'		: 'ขนาดที่แท้จริง',//'实际大小',
	'close'			: 'ปิด',//'关闭',
	'wheel_zoom'		: 'ใช้สกลอร์เมาส์ เพื่อทำการขยาย/ย่อรูปภาพ',//'鼠标滚轮缩放图片',
	'reminder'		: 'แจ้งเตือน',//'提示信息',
	'submit'		: 'ส่ง',//'确定',
	'cancel'		: 'ยกเลิก',//'取消',
	'wait_please'		: 'กำลังโหลด ...',//'请稍候...',
	'int_error'		: 'มีความผิดพลาดภายใน, ไม่สามารถแสดงเนื้อหาได้',//'内部错误，无法显示此内容',
	'flash_required'	: 'เนื้อหานี้ต้องการ Adobe Flash Player 9.0.124 หรือสูงกว่า',//'此内容需要 Adobe Flash Player 9.0.124 或更高版本',
	'flash_download'	: 'ดาวน์โหลด Flash Player',//'下载 Flash Player',
	'day1'			: '1 วัน',//'一天',
	'week1'			: '1 สัปดาห์',//'一周',
	'days7'			: '7 วัน',//'7 天',
	'days14'		: '14 วัน',//'14 天',
	'month1'		: '1 เดือน',//'一个月',
	'month3'		: '3 เดือน',//'三个月',
	'month6'		: '6 เดือน',//'半年',
	'year1'			: '1 ปี',//'一年',
	'custom'		: 'กำหนดเอง',//'自定义',
	'permanent'		: 'ถาวร',//'永久',
	'show_all_expr'		: 'แสดงอีโมฯ',//'显示所有表情',
	'page_prev'		: 'ก่อนหน้านี้',//'上页',
	'page_next'		: 'หน้าต่อไป',//'下页',
	'copy2clipboard'	: 'คัดลอกไปยังคลิปบอร์ด',//'点此复制到剪贴板',
// ATTENTION!
// The next line must have the same value as in /template.php - 'enter_content' !!!
	'enter_search_string'	: 'ดีใจจัง ค้นแล้วเจอเลย',//'请输入搜索内容',
	'refresh_q&a'		: 'ฟื้นฟู Q&A',//'刷新验证问答',
	'refresh_code'		: 'ฟื้นฟูรหัส',//'刷新验证码',
	'code_invalid'		: 'รหัสความปลอดภัยไม่ถูกต้อง, กรุณาลองใหม่',//'验证码错误，请重新填写',
	'q&a_invalid'		: 'ตอบคำถามไม่ถูกต้อง, กรุณาลองใหม่',//'验证问答错误，请重新填写',
	'code_clipboard'	: 'โค้ดถูกคัดลอกไปยังคลิปบอร์ดแล้ว',//'代码已复制到剪贴板',
	'enter_link_url'	: 'กรอกที่อยู่ URL',//'请输入链接地址',
	'enter_link_text'	: 'กรอกข้อความแทนลิงก์',//'请输入链接文字',
	'enter_image_url'	: 'กรอกที่อยู่รูปภาพ',//'请输入图片地址',
	'width_optional'	: 'กว้าง (ตัวเลือก)',//'宽(可选)',
	'height_optional'	: 'สูง (ตัวเลือก)',//'高(可选)',
	'narrow_screen'		: 'หน้าจอแคบ',//'切换到窄版',
	'wide_screen'		: 'จอแบบกว้าง',//'切换到宽版',
	'logging_wait'		: 'กำลังเข้าสู่ระบบ, โปรดรอสักครู่...',//'登录中，请稍后...',
	'notices_no'		: '[                       ]',//'【　　　】',
	'notices_yes'		: '[มีแจ้งเตือนใหม่]',//'【新提醒】',
	'sec_after_win_closed'	: ' วินาที ก่อนหน้าต่างจะถูกปิด',//' 秒后窗口关闭',
	'sec_after_page_jump'	: ' วินาที ก่อนหน้านี้จะถูกเชื่อมต่อไปยังที่ใหม่',//' 秒后页面跳转',
	'jump_now'		: 'ข้ามไปยัง',//'立即跳转',
	'error_message'		: 'ข้อความผิดพลาด',//'错误信息',
	'ctrl_d_favorites'	: 'กดปุ่ม Ctrl + D เพิ่มไปยังรายการโปรด',//'请按 Ctrl+D 键添加到收藏夹',
	'non_ie_manually'	: 'ในกรณีที่ไม่ได้ใช้เบราวเซอร์ IE กรุณาตั้งหน้าแรกด้วยตัวเอง',//'非 IE 浏览器请手动将本站设为首页',
	'blind_enable'		: 'เปิดการใช้งานโหมดผู้พิการทางสายตา',//'开启盲人体验',//tc:'開啟盲人體驗',
	'blind_disable'		: 'ปิดการใช้งานโหมดผู้พิการทางสายตา',//'关闭盲人体验',//tc:'關閉盲人體驗',

//--------------------------------
//static/js/common_diy.js

	'edit'			: 'แก้ไข',//'编辑',
	'warn_not_saved'	: 'คุณได้มีการแก้ไขข้อมูลแล้ว ถ้าหากออกจากหน้านี้ ข้อมูลทั้งหมดที่ถูกเปลี่ยนแปลงจะเสียหายได้.',//'您的数据已经修改,退出将无法保存您的修改。',
	'confirm_exit'		: 'ข้อมูลที่มีการเปลี่ยนแปลง/แก้ไขทั้งหมดจะสูญหายหากออกจากหน้านี้ คุณต้องการออกจากหน้านี้หรือไม่?',//'退出将不会保存您刚才的设置。是否确认退出？',
	'select_image_upload'	: 'กรุณาเลือกรูปภาพของคุณเพื่ออัปโหลด',//'请选择您要上传的图片',

//--------------------------------
//static/js/common_extra.js
//	'wait_please'		: 'กำลังโหลด...',//'请稍候...',
	'copy_failed'		: 'การคัดลอกล้มเหลว กรุณาเลือก "อนุญาต"',//'复制失败，请选择“允许访问”',
	'prev'			: 'ก่อน.',//'上一张',
	'next'			: 'ต่อไป',//'下一张',
        'shortcut_add'		: 'Adding a desktop shortcut',//'添加桌面快捷',
        'shortcut_1'		: '1. Click "',//'1、点击"',
        'shortcut_1_1'		: 'Download desktop shortcut',//'下载桌面快捷',
        'shortcut_1_2'		: '", and after the download is completed, you can move the file to your desktop',//'"，下载完成后，可移动文件到系统桌面',
        'shortcut_2'		: '2. Click "',//'2、点击"',
        'shortcut_2_1'		: 'Download icon file',//'下载ICO图标',
        'shortcut_2_2'		: '", and after the download is completed, right-click on the desktop shortcut file -&gt; Properties -&gt; Change Icon, and select the downloaded ICO icon',//'"，下载完成后，右击桌面快捷文件->属性->更改图标，选择已下载的ICO图标即可',

//--------------------------------
//static/js/editor.js

	'restore_size_edit'	: 'กลับสู่ขนาดปกติ',//'恢复编辑器大小',
	'full_screen_edit'	: 'ขยายขนาดเต็มหน้าจอ',//'全屏方式编辑',
	'current_length'	: 'เนื้อหาปัจจุบัน',//'当前长度',
	'bytes'			: 'ไบต์',//'字节',
	'system_limit'		: 'ขีดจำกัดระบบ',//'系统限制',
	'up_to'			: '~',//'到',
	'check_length'		: 'จำนวนตัวอักษร',//'字数检查',
	'data_restored'		: 'ข้อมูลถูกกู้คืน',//'数据已恢复',
	'data_saved'		: 'ข้อมูลถูกบันทึก',//'数据已保存',
	'clear_all_sure'	: 'คุณแน่ใจว่าจะล้างเนื้อหานี้ทั้งหมด?',//'您确认要清除所有内容吗？',
	'hide_content'		: 'ซ่อนเนื้อหา',//'请输入要隐藏的信息内容',
	'free_content'		: 'หากคุณไม่ได้กำหนดราคาของโพสต์ เนื้อหาในกระทู้ที่คุณกรอกลงไปจะสามารถมองเห็นได้ คุณสามารถกำหนดราคาเพื่อให้สมาชิกเสียค่าเครดิตก่อนจะดูเนื้อหาได้',//'如果您设置了帖子售价，请输入购买前免费可见的信息内容',
	'when_thread_replied'	: 'แสดงเฉพาะเมื่อผู้ใช้ตอบกระทู้นี้ ',//'只有当浏览者回复本帖时才显示',
	'when_points_more'	: 'แสดงเฉพาะผู้ใช้มีเครดิตมากกว่า ',//'只有当浏览者积分高于',
	'when_show'		: 'แสดงเมือ',//'时才显示',
	'table_rows'		: 'แถวของตาราง',//'表格行数',
	'table_columns'		: 'คอลัมน์ตาราง',//'表格列数',
	'table_width'		: 'ความกว้างของตาราง: ',//'表格宽度: ',
	'bg_color'		: 'สีพื้นหลัง',//'背景颜色',
	'table_intro0'		: 'เคล็ดลับการเขียนตารางด่วน',//'快速书写表格提示',
	'table_intro1'		: '&quot;[tr=color]&quot; กำหนดสีพื้นหลังของแถว<br />&quot;[td=Width]&quot; กำหนดความกว้างของคอลัมน์<br />&quot;[td=Column_Span,Row_Span,Width]&quot; กำหนดช่วงแถว/คอลัมน์และความกว้าง<br /><br />ตัวอย่างการเขียนตารางได้แบบด่วน: ',//'“[tr=颜色]” 定义行背景<br />“[td=宽度]” 定义列宽<br />“[td=列跨度,行跨度,宽度]” 定义行列跨度<br /><br />快速书写表格范例：',
	'table_intro2'		: '[table]<br />ชื่อ:|Discuz!<br />เวอร์ชัน:|X2.0<br />[/table]',//'[table]<br />Name:|Discuz!<br />Version:|X1<br />[/table]',
	'table_intro3'		: 'ใช้ &quot;|&quot; สำหรับแถวที่แยกจากกัน, หากมี &quot;|&quot; ตัวอักษรในข้อมูล, แทนที่ด้วย &quot;\\|&quot;, แถวแยกจากกันด้วย &quot;\\n&quot;.',//'用“|”分隔每一列，表格中如有“|”用“\\|”代替，换行用“\\n”代替。',
	'audio_url'		: 'ป้อน URL ของไฟล์เพลง',//'请输入音乐文件地址',
	'video_url'		: 'ป้อน URL ของไฟล์วิดีโอ',//'请输入视频地址',
	'auto_play'		: 'เล่นอัตโนมัติ?',//'是否自动播放',
	'flash_url'		: 'กรุณาใส่ URL ของไฟล์ Flash ',//'请输入 Flash 文件地址',
	'enter_please'		: 'กรุณากรอกตัวอักษร',//'请输入第',
	'nth_parameter'		: 'พารามิเตอร์',//' 个参数',
	'font'			: 'ตัวอักษร',//'字体',
	'full_screen'		: 'เต็มหน้าจอ',//'全屏',
	'restore_size'		: 'คืนค่าขนาด',//'恢复',
	'general'		: 'โหมดทั่วไป',//'常用',
	'simple'		: 'โหมดขั้นสูง',//'高级',
	'bad_browser'		: 'เบราว์เซอร์ของคุณไม่สนับสนุนคุณลักษณะนี้',//'你的浏览器不支持此功能',
	'click_autosave_enable'	: 'คลิกที่นี่ เพื่อเปิดการใช้งานบันทึกอัตโนมัติ',//'点击开启自动保存',
	'autosave_enable'	: 'เปิดการใช้งานบันทึกอัตโนมัติ',//'开启自动保存',
	'autosave_disable'	: 'ปิดการใช้งานบันทึกอัตโนมัติ',//'点击关闭自动保存',
	'autosave_enabled'	: 'ข้อมูลถูกบันทึกอัตโนมัติ',//'数据自动保存已开启',
	'autosave_disabled'	: 'บันทึกข้อมูลอัตโนมัติถูกปิดการใช้งาน',//'数据自动保存已关闭',
	'data_saved_at'		: 'บันทึกข้อมูลไว้ที่',//'数据已于',
	'saved_time'		: '',//NOT REQUIRED IN ENGLISH!//'保存',
	'sec_before_saving'	: 'วินาทีก่อนจะบันทึกอัตโนมัติ',//'秒后保存',
	'insert_quote'		: 'แทรกอ้างอิง',//'请输入要插入的引用',
	'insert_code'		: 'แทรกรหัส',//'请输入要插入的代码',
	'enter_item_list'	: 'ป้อนรายการ\r\nเว้นวางไว้หรือคลิกยกเลิก',//'输入一个列表项目.\r\n留空或者点击取消完成此列表.',
	'width'			: 'กว้าง',//'宽',
	'height'		: 'สูง',//'高',
	'audio_support'		: 'สนับสนุน wma, mp3, ra, rm, และรูปแบบของเพลงอื่นๆ<br />ตัวอย่างเช่น: http://server/audio.wma',//'支持 wma mp3 ra rm 等音乐格式<br />示例: http://server/audio.wma',
	'video_support'		: 'รองรับเฉพาะ Youku, potatoes, 56, 6, cool video และเว็บไซต์วีดีโออื่นๆ <br /> รองรับรูปแบบไฟล์ wmv avi rmvb mov swf flv <br /> ตัวอย่างเช่น: http://server/movie.wmv',//'支持优酷、土豆、56、酷6等视频站的视频网址<br />支持 wmv avi rmvb mov swf flv 等视频格式<br />示例: http://server/movie.wmv',
	'flash_support'		: 'รองรับรูปแบบไฟล์ Flash: swf flv <br /> ตัวอย่างเช่น: http://server/flash.swf',//'支持 swf flv 等 Flash 网址<br />示例: http://server/flash.swf',
	'paste_from_word'	: 'วางเนื้อหาจากโปรแกรม Word',//'从 Word 粘贴内容',
	'paste_word_tip'	: 'กรุณาใช้คีย์ลัด (Ctrl + V) เพื่อวางเนื้อหาจากเอกสารของโปรแกรม Word',//'请通过快捷键(Ctrl+V)把 Word 文件中的内容粘贴到上',
	'show_tips'		: 'Show Tips',//'友情提示',
	'expire_days'		: 'Valid for (days)',//'有效天数',
	'expire_days_invalid'	: 'Distance from the posting date is greater than the number of days when the label automatically expire',//'距离发帖日期大于这个天数时标签自动失效',
	'download_remote'	: 'Downloading remote attachment, please wait ...',//'正在下载远程附件，请稍等……',
	'create_post_directory'	: 'Create post directory',//'创建帖子目录',
	'page_number'		: 'Page number',//'页码',
	'jump_to_page'		: 'Jump to specified page',//'跳转到指定的页',
	'jump_to_page_comment'	: 'Use [page] tag for add a page break',//'用 [page] 对当前帖子分页后的页码',
	'jump_to_post'		: 'Jump to specified post',//'跳转到指定的帖子',
	'jump_tip_pid'		: 'Post TID and PID',//'帖子的 TID 和 PID',
	'add_indent'		: 'Add the first line indent',//'添加行首缩进',
	'enter_post_password'	: 'Please enter the post password',//'请输入帖子密码',
	'begin_flash_img'	: 'Enter the beginning Flash or image animation URL',//'请输入开头动画 Flash 或 图片 地址',
	'begin_click_url'	: 'Click on the link URL',//'点击链接地址',
	'begin_stay_seconds'	: 'Display seconds',//'停留秒数',
	'begin_disappearance'	: 'Disappear effect after loading',//'载入、消失的效果',
	'none'			: 'None',//'无',
	'begin_fade'		: 'Fade',//'淡入淡出',
	'begin_explosive'	: 'Explode',//'展开闭合',
	'begin_info'		: 'Supported formats: swf flv jpg gif png<br/>Width range: 400~1024, Height range: 300~640<br/>Example: http://server/flash.swf',//'支持 swf flv jpg gif png 网址<br />宽高范围: 宽400~1024 高300~640<br />示例: http://server/flash.swf',

//--------------------------------
//static/js/forum.js

	'del_thread_sure'	: 'คุณแน่ใจหรือว่าต้องการที่จะลบกระทู้นี้ออกจากกระทู้ยอดนิยม?',//'您确认要把此主题从热点主题中移除么？',
	'there_are'		: 'มี ',//'有',
	'new_reply_exists'	: 'มีการตอบกลับในกระทู้ คลิกที่นี่เพื่อเปิดดู',//'有新回复的主题，点击查看',
//--------------------------------
//static/js/forum_google.js

	'search_net'	: 'ค้นหาภายนอก',//'网页搜索',
	'search_site'	: 'ค้นหาภายในเว็บ',//'站内搜索',
	'search'	: 'ค้นหา',//'搜索',

//--------------------------------
//static/js/forum_moderate.js

	'choose_tread'	: 'เลือกโพสต์เพื่อดำเนินการ',//'请选择需要操作的帖子',

//--------------------------------
//static/js/forum_post.js

	'internal_error'	: 'ข้อผิดพลาดภายในเซิร์ฟเวอร์',//'内部服务器错误',
	'upload_ok'		: 'อัพโหลดไฟล์เสร็จเรียบร้อย',//'上传成功',
	'ext_not_supported'	: 'รูปแบบไฟล์หรือนามสกุลนี้ไม่สนับสนุน',//'不支持此类扩展名',
	'sorry_ext_not_supported'	: 'รูปแบบไฟล์หรือนามสกุลนี้ไม่สนับสนุน',//'对不起，不支持上传此类扩展名的附件。',
	'illegal_image_type'	: 'รูปแบบไฟล์หรือนามสกุลนี้ไม่สนับสนุน',//'图片附件不合法',
	'can_not_save_attach'	: 'ไม่สามารถบันทึกไฟล์แนบ',//'附件文件无法保存',
	'invalid_file'		: 'ไม่มีรูปแบบไฟล์ที่ถูกต้อง',//'没有合法的文件被上传',
	'illegal_operation'	: 'ดำเนินการผิดพลาด',//'非法操作',
	'enter_content'		: 'กรุณาใส่ชื่อกระทู้หรือเนื้อหา',//'请完成标题或内容栏',
	'select_category'	: 'กรุณาเลือกประเภทของกระทู้',//'请选择主题对应的分类',
	'select_category_info'	: 'กรุณาเลือกหมวดหมู่ของกระทู้',//'请选择主题对应的分类信息',
	'title_long'		: 'ชื่อกระทู้ของคุณมีความยาวมากกว่า 255 ตัวอักษร',//'您的标题超过 80 个字符的限制',
	'content_long'		: 'ความยาวของเนื้อหาไม่ตรงกับความต้องการ.\n\n',//'您的帖子长度不符合要求。\n\n',
	'ignore_pending_attach'	: 'มีไฟล์แนบอยู่ในรายการ, คุณแน่ใจหรือไม่ว่าจะไม่ใช้ไฟล์แนบนี้?',//'您有等待上传的附件，确认不上传这些附件吗？',
	'still_uploading'	: 'ไฟล์แนบบางส่วนกำลังอัพโหลดอยู่, กรุณารอสักครู่ หัวจะถูกเผยแพร่อัตโนมัติ หลังจากไฟล์อัพโหลดเสร็จเรียบร้อยแล้ว...',//'您有正在上传的附件，请稍候，上传完成后帖子将会自动发表...',
	'no_data_recover'	: 'ไม่มีข้อมูลที่สามารถกู้คืนได้!',//'没有可以恢复的数据！',
	'content_overwrite'	: 'เนื้อหาในกระทู้จะถูกแทนที่ด้วยการดำเนินการดังกล่าว, แน่ใจหรือไม่ว่าจะเรียกคืนข้อมูล?',//'此操作将覆盖当前帖子内容，确定要恢复数据吗？',
	'upload_finished'	: 'อัพโหลดเรียบร้อยแล้ว!',//'附件上传完成！',
	'successfull'		: 'เสร็จสิ้น:',//'成功',
	'failed'		: 'ล้มเหลว:',//'失败',
	'ones'			: 'รายการ',//'个',
	'uploading'		: 'กำลังอัพโหลด...',//'上传中...',
	'select_image_files'	: 'เลือกไฟล์ภาพ',//'请选择图片文件',
	'delete'		: 'ลบ',//'删除',
	'contains'		: 'ประกอบด้วย ',//'包含',
	'img_attached_num'	: 'รูปที่แนบมา',//'个图片附件',
	'files attached_num'	: 'ไฟล์ที่แนบมา',//'个附件',
	'images'		: 'ภาพ',//'图片',
	'attachments'		: 'ไฟล์แนบ',//'附件',
//	'upload_failed'		: 'อัพโหลดล้มเหลว',//'上传失败',

	'attach_big'		: 'ขนาดไฟล์แนบเกินกว่าที่กำหนดไว้',//'服务器限制无法上传那么大的附件',
	'attach_group_big'	: 'กลุ่มผู้ใช้ของคุณมีขนาดไฟล์แนบเกินขีดจำกัดของระบบ',//'用户组限制无法上传那么大的附件',
	'attach_type_big'	: 'ไฟล์ประเภทนี้ มีขนาดไฟล์แนบเกินขีดจำกัดของระบบ',//'文件类型限制无法上传那么大的附件',
	'attach_daily_big'	: 'วันนี้คุณไม่สามารถอัปโหลดไฟล์แนบเพิ่มได้อีก',//'本日已无法上传更多的附件',
	'validating_q&a'	: 'กำลังตรวจสอบคำถามความปลอดภัย, กรุณารอสักครู่',//'验证问答校验中，请稍后',
	'validating_code'	: 'กำลังตรวจสอบรหัสความปลอดภัย, กรุณารอสักครู่',//'验证码校验中，请稍后',
	'attach_type_disabled'	: 'รูปแบบไฟล์แนบถูกปิดการใช้งาน',//'附件类型被禁止',
	'attach_max'		: 'ขนาดไม่เกินกว่าที่กำหนด',//'不能超过',
	'vote_max_reached'	: 'โหวดได้จำนวนสูงสุดถึง: ',//'已达到最大投票数',
	'no_remote_attach'	: 'ขออภัย ไม่มีไฟล์แนบจากระยะไกล',//'抱歉，暂无远程附件',
	'delete_post_sure'	: 'แน่ใจหรือว่าต้องการลบบทความนี้?',//'确定要删除该帖子吗？',
	'feed_add_confirm'	: 'Because of you have set read permission or sell the post, do you confirm also the broadcast to your listeners to see?',//'由于您设置了阅读权限或出售帖，您确认还转播给您的听众看吗？',
//--------------------------------
//static/js/forum_viewthread.js

	'best_answer_sure'	: 'คุณแน่ใจหรือว่าคุณต้องการกำหนดโพสต์นี้เป็น "คำตอบที่ดีที่สุด"?',//'您确认要把该回复选为“最佳答案”吗？',
	'premoderated'		: 'การตอบกลับในหมวดหมู่นี้จะต้องรอการตรวจสอบก่อน โพสต์ของคุณจะแสดงได้ก็ต่อเมื่อผ่านการอนุมัติเรียบร้อยแล้ว',//'本版回帖需要审核，您的帖子将在通过审核后显示',
	'credit_confirm1'	: 'ค่าไฟล์แนบ ',//'下载需要消耗',
	'credit_confirm2'	: ' เครดิต, คุณแน่ใจที่จะดาวน์โหลดหรือไม่?',//'，您是否要下载？',
	'thread_to_clipboard'	: 'ที่อยู่กระทู้ถูกคัดลอกไปยังคลิปบอร์ดแล้ว',//'帖子地址已经复制到剪贴板',
	'click_to_enlarge'	: 'คลิกเพื่อขยายภาพ',//'点击放大',
	'notify_on_reply'	: 'รับการแจ้งเตือน',//'接收回复通知',
	'notify_on_reply_cancel'	: 'ยกเลิกการแจ้งเตือน',//'取消回复通知',
	'share_connection_failed'	: 'การเชื่อมต่อไปยังการแชร์ล้มเหลว โปรดลองใหม่ภายหลัง',//'分享服务连接失败，请稍后再试',
	'qq_bind'		: 'กรุณาผูกบัญชี QQ ของคุณ',//'请先绑定QQ账号',
	'quote_by'		: 'อ้างอิงจาก .*? เมื่อ .*?',//'本帖最后由 .*? 于 .*? 编辑',
	'copy_code'		: 'คัดลอกโค้ด',//'复制代码',
	'download_pocket_forum'	: 'Download Pocket Forum',//'下载掌上论坛',
	'pocket_forum_android'	: 'If Andriod version, Scan thw QR-code can be downloaded directly to the phone',//'Andriod版本，扫描二维码可以直接下载到手机',
	'pocket_forum_android_alt'	: 'Suitable for Android-based smartphones like Samsung/HTC/etc',//'适用于装有安卓系统的三星/HTC/小米等手机',
	'pocket_forum_ios'	: 'If iPhone used, Scan thw QR-code can be downloaded directly to the phone',//'iPhone版本，扫描二维码可以直接下载到手机',
	'pocket_forum_ios_alt'	: 'Suitable for Apple mobile phone',//'适用于苹果手机',
	'quick_reply_here'	: '#Quick Reply Here#', //'#在这里快速回复#',

//--------------------------------
//static/js/handlers.js
	'file_selected_exceed'	: 'You have selected too many files.',//'您选择的文件个数超过限制。',
	'upload_number_exceed'	: 'You cannot add any more files.',//'您已达到上传文件的上限了。',
	'can_choose_more'	: 'You yet can choose ',//'您还可以选择 ',
	'files'			: ' files',//' 个文件',
	'file_is_large'		: 'File is too large.',//'文件太大.',
	'file_is_empty'		: 'You can not upload a zero byte file.',//'不能上传零字节文件.',
	'file_type_disabled'	: 'Upload of such type files is disabled.',//'禁止上传该类型的文件.',
	'unhandled_error'	: 'Unhandled Error',//'',
	'upload_progress'	: 'Uploaded ',//'正在上传',
	'upload_cancelled'	: 'Cancelled',//'取消上传',
	'file_description'	: 'File Description',//'图片描述',
	'image_upload_failed'	: 'Image upload failed',//'图片上传失败',
	'upload_failed'		: 'Upload failed',//'上传失败',
	'upload_completed'	: 'Upload completed.',//'上传完成.',
	'upload_error'		: 'Upload Error: ',//'',
	'config_error'		: 'Configuration Error',//'',
	'server_error'		: 'Server (IO) Error',//'',
	'security_error'	: 'Security Error',//'',
	'upload_limit_exceed'	: 'Upload limit exceeded.',//'',
	'file_not_found'	: 'File not found.',//'',
	'validation_failed'	: 'Failed Validation.  Upload skipped.',//'',
	'upload_stopped'	: 'Stopped',//'',

//--------------------------------
//static/js/home.js
	'day'			: 'วัน',//'日',
	'category_empty'	: 'ชื่อประเภทไม่ควรเว้นว่าง!',//'分类名不能为空！',

//--------------------------------
//static/js/home_ajax.js

//	'close'			: 'Close',//'关闭',
//	'wait_please'		: 'Loading ...',//'请稍候...',

//--------------------------------
//static/js/home_blog.js

	'title_length_invalid'	: 'ชื่อเรื่องมีความยาวเกินกว่ากำหนด (ใช้ได้ตั้งแต่ 1~80 ตัวอักษร)',//'标题长度(1~80字符)不符合要求',

//--------------------------------
//static/js/home_common.js

	'show_orig_image'	: 'แสดงภาพต้นฉบับในหน้าต่างใหม่',//'点击图片，在新窗口显示原始尺寸',
	'continue_sure'		: 'คุณแน่ใจว่าจะดำเนินการต่อ?',//'您确定要执行本操作吗？',
	'select_item'		: 'กรุณาเลือกรายการที่ต้องการดำเนินการด้วย',//'请选择要操作的对象',
	'image_url_invalid'	: 'URL ของภาพไม่ถูกต้อง',//'图片地址不正确',
	'audio_url_invalid'	: 'URL ของเสียงไม่ถูกต้อง, และไม่ควรเว้นว่างไว้',//'音乐地址错误，不能为空',

//!!!!! MayBe wrap this names!!
	'collapse'		: 'ย่อ',//'收起',
	'expand'		: 'ขยาย',//'展开',

//--------------------------------
//static/js/home_friendselector.js

	'select_max'		: 'คุณสามารถเลือกได้ถึง',//'最多只允许选择',
	'users'			: 'ผู้ใช้',//'个用户',
	'allready_exists'	: 'มีอยู่แล้ว',//'已经存在',

//--------------------------------
//static/js/home_manage.js

	'you_friends_now'	: 'คุณได้เป็นเพื่อนกันแล้ว, คุณสามารถ ',//'你们现在是好友了，接下来，您还可以：',
	'leave_message'		: 'ฝากข้อความ',//'给TA留言',
	'or'			: 'หรือ',//'或者',
	'send_greeting'		: 'ส่งคำอวยพร',//'打个招呼',
	'reply'			: 'ตอบ',//'回复',
	'comment'		: 'ความเห็น',//'评论',
	'close_list'		: 'ปิดรายการ',//'收起列表',
	'more_feeds'		: 'ข้อมูล RSS เพิ่มเติม',//'更多动态',

//--------------------------------
//static/js/home_uploadpic.js

	'image_type_invalid'	: 'ขออภัย, รูปแบบไฟล์ดังกล่าวระบบไม่สนับสนุน',//'对不起，不支持上传此类扩展名的图片',
	'insert_to_content'	: 'คลิกที่นี่เพื่อแทรกลงในเนื้อหาที่ตำแหน่งของเคอร์เซอร์อยู่ปัจจุบัน',//'点击这里插入内容中当前光标的位置',
	'insert'		: 'แทรก',//'插入',
	'image_description'	: 'คำอธิบายภาพ',//'图片描述',
	'uploading_wait'	: 'กำลังอัพโหลด, โปรดรอ',//'上传中，请等待',
	'retry'			: 'ลองอีกครั้ง',//'重试',

//---------------------------
//static/js/makehtml.js
	'generate'		: 'Generate ',//'生成',
	'generate_ok'		: ' generated successfully',//'生成成功',
	'generate_error'	: ' generation failed',//'生成失败',
	'generate_start'	: 'Start generating of ',//'开始生成 ',
	'generate_click_continue'	: 'If your browser does not respond, Click to continue...',//'如果您的浏览器没有反应，请点击继续...',
	'generate_completed'	: ' generation is completed',//' 生成完成',
	'generate_total'	: 'Total need to generate ',//'本次共需要生成 ',
	'generate_files'	: ' files, Successfully generated ',//' 文件，成功生成 ',
	'generate_first'	: 'generated first ',//'正在生成第 ',
	'generate_percent'	: 'has been completed ',//'已经完成 ',

//---------------------------
//static/js/mobile/common.js
	'first'		: 'First ',//'第 ',
	'page'		: 'Page',//'页',
	'pages'		: ' pages',//'页',
	'prev_page'	: 'Prev',//'上一页',
	'next_page'	: 'Next',//'下一页',

	'click_to_reload'	: 'Click to reload',//'点击重新加载',
	'loading_now'		: 'Loading...',//'正在加载...',

	'geo_timeout'		: 'Get location timeout, please try again',//'获取位置超时，请重试',
	'geo_error'		: 'Unable to detect your current location',//'无法检测到您的当前位置',
	'geo_permission'	: 'Please allow normal access to your current location',//'请允许能够正常访问您的当前位置',
	'unknown_error'		: 'Unknown error occurred',//'发生未知错误',
	'touch_down_refresh'	: 'Touch down to refresh',//'下拉可以刷新',
	'touch_up_refresh'	: 'Touch UP to refresh',//'松开可以刷新',

//--------------------------------
//static/js/portal.js

	'delete_sure'		: 'คุณแน่ใจที่จะลบข้อมูลนี้หรือไม่?',//'您确定要删除该数据吗？',
	'ignore_sure'		: 'คุณแน่ใจหรือไม่ที่จะไม่สนใจข้อมูลนี้?',//'您确定要屏蔽该数据吗？',
	'to'			: 'ถึง',//'到',

	'choose_block'		: 'เลือกบล็อก',//'选择模块',
	'blocks_found1'		: 'พบ',//'找到',
	'blocks_found2'		: 'บล็อกที่สอดคล้องกัน',//'个相应的模块',
	'blocks_not_found'	: 'ไม่มีบล็อกที่สอดคล้องกัน',//'没有相应的模块',
	'select_block'		: 'กรุณาเลือกบล็อก!',//'请选择一个模块！',
	'show_settings'		: 'แสดงการตั้งค่า',//'展开设置项',
	'hide_settings'		: 'ซ่อนการตั้งค่า',//'收起设置项',
	'block_name_empty'	: 'ชื่อที่ถูกบล็อกไม่ควรเว้นว่างไว้',//'模块标识不能为空',
	'block_convert_sure'	: 'คุณแน่ใจหรือไม่ ว่าจะแปลงบล็อกจากรูปแบบ',//'你确定要转换模块的类型从',
	'back'			: 'กลับ',//'返回',
	'settings_expand'	: 'ขยายการตั้งค่า',//'展开设置项',
	'settings_hide'		: 'ซ่อนการตั้งค่า',//'收起设置项',
	'custom_content_error'	: 'มีข้อผิดพลาดในเนื้อหาที่กำหนดเอง! โค้ด HTML: ',//'自定义内容错误，',
	'html_error'		: 'โค้ด HTML: ',//'HTML代码：',
	'tags_not_match'	: ' - แท็กไม่ตรงกัน',//' 标签不匹配',
	'entered'		: 'Have entered ',//'已输入 ',
	'exceed'		: 'Exceed ',//'超出 ',
	'title_length_bad'	: 'The title is incorrect',//'标题长度不正确',
	'summary_length_bad'	: 'Summary length is incorrect',//'简介长度不正确',

//--------------------------------
//static/js/portal_diy.js

	'choose_style'		: 'เลือกรูปแบบ',//'选择样式',
	'style'			: 'รูปแบบ',//'样式',
	'style1'		: 'รูปแบบ 1',//'样式1',
	'style2'		: 'รูปแบบ 2',//'样式2',
	'style3'		: 'รูปแบบ 3',//'样式3',
	'style4'		: 'รูปแบบ 4',//'样式4',
	'style5'		: 'รูปแบบ 5',//'样式5',
	'style6'		: 'รูปแบบ 6',//'样式6',
	'style7'		: 'รูปแบบ 7',//'样式7',
	'no_border'		: 'No border frame',//'无边框框架',
	'no_border_no_margin'	: 'No border, no margin',//'无边框且无边距',

	'title'			: 'ชื่อเรื่อง',//'标题',
	'attribute'		: 'คุณลักษณะ',//'属性',
	'data'			: 'ข้อมูล',//'数据',
	'update'		: 'อัพเดต',//'更新',
	'export'		: 'ส่งออก',//'导出',
	'repeat'		: 'ทำซ้ำ',//'平铺',
	'no_repeat'		: 'ไม่มีการทำซ้ำ',//'不平铺',
	'repeat_x'		: 'ทำซ้ำแนวนอน',//'横向平铺',
	'repeat_y'		: 'ทำซ้ำในแนวตั้ง',//'纵向平铺',
	'no_style'		: 'ไม่ต้องมีสไตล์',//'无样式',
	'solid_line'		: 'เส้นทึบ',//'实线',
	'dotted_line'		: 'จุดไข่ปลา',//'点线',
	'dashed_line'		: 'เส้นประ',//'虚线',
	'link'			: 'ลิงก์',//'链接',
	'border'		: 'เส้นขอบ',//'边框',
	'size'			: 'ขนาด',//'大小',
	'color'			: 'สี',//'颜色',
	'separate_config'	: 'แยกการตั้งค่า',//'分别设置',
	'right'			: 'ขวา',//'右',
	'bottom'		: 'ล่าง',//'下',
	'top'			: 'บน',//'上',
	'left'			: 'ซ้าย',//'左',
	'margin'		: 'ขอบ',//'外边距',
	'padding'		: 'ระยะห่าง',//'内边距',
	'bg_image'		: 'รูปภาพพื้นหลัง',//'背景图片',
	'class'			: 'ระดับที่กำหนด',//'指定class',
	'block'			: 'บล็อก',//'模块',
	'frame'			: 'เฟรม',//'框架',
	'onclick'		: 'onClick',//'点击',
	'onmouseover'		: 'onMouseover',//'滑过',
	'switch_type'		: 'สลับรูปแบบ',//'切换类型',
	'image'			: 'ภาพ',//'图片',
	'position'		: 'ตำแหน่ง',//'位置',
	'align_left'		: 'ชิดซ้าย',//'居左',
	'align_right'		: 'ชิดขวา',//'居右',
	'offset'		: 'Offset',//'偏移量',
//!!! mainly the same as 'color' !!!!!!
//	'colour'		: 'Colour',//'色',
	'add_new_title'		: 'เพิ่มชื่อเรื่องใหม่',//'添加新标题',
	'delete_this_sure'	: 'คุณแน่ใจที่จะลบสิ่งนี้? จะไม่สามารถกู้คืนได้ถ้าคุณจะลบออก.',//'您确实要删除吗,删除以后将不可恢复',
	'loading_content'	: 'กำลังโหลดข้อมูล...',//'正在加载内容...',
	'modified_import'	: 'คุณได้มีการแก้ไขข้อมูลบางส่วน, กรุณานำเข้าข้อมูลก่อนที่จะบันทึกไว้, มิฉะนั้น ข้อมูลที่นำเข้านี้ จะไม่รวมถึงการเปลี่ยนแปลงการแก้ไขในครั้งนี้',//'您已经做过修改，请保存后再做导出，否则导出的数据将不包括您这次所做的修改。',
	'total'			: 'ทั้งหมด ',//'共',
	'blocks'		: 'บล็อก',//'个模块',
	'updating_the'		: 'กำลังอัพเดต #',//'正在更新第',
	'done'			: 'เสร็จเรียบร้อย',//'已完成',
	'start_updating'	: 'กำลังเริ่มต้นการอัพเดต...',//'开始更新...',
	'update_block_data'	: 'กำลังอัพเดตบล็อก',//'更新模块数据',
	'clear_diy_sure'	: 'คุณแน่ใจที่จะล้างข้อมูลปัจจุบันในหน้า DIY? จะไม่สามารถเรียกคืนได้ หากคุณลบออก',//'您确实要清空页面上所在DIY数据吗,清空以后将不可恢复',
	'frame_not_found'	: 'คำเตือน: ยังไม่มีเฟรม, กรุณาเพิ่มเฟรมก่อน',//'提示：未找到框架，请先添加框架。',
	'apply_all_pages'	: 'นำไปใช้ประเภทนี้กับทุกหน้าเว็บ',//'应用于此类全部页面',
	'apply_current_page'	: 'นำไปใช้เฉพาะหน้านี้',//'只应用于本页面',
	'save_temp_sure'	: 'บันทึกข้อมูลชั่วคราว?<br />คลิกที่ "ส่ง" เพื่อบันทึกข้อมูลชั่วคราวให้คลิก "ยกเลิก" เพื่อลบข้อมูลชั่วคราว',//'是否保留暂存数据？<br />按确定按钮将保留暂存数据，按取消按钮将删除暂存数据。',
	'save_temp'		: 'บันทึกข้อมูลชั่วคราว',//'保留暂存数据',
	'revert_last_saved'	: 'คุณแน่ใจหรือว่าต้องการกลับไปหน้าที่บันทึกไว้ก่อนหน้านี้?',//'您确定要恢复到上一版本保存的结果吗？',
	'continue_temp_sure'	: 'ดำเนินการต่อไปของ DIY กับข้อมูลชั่วคราว?',//'是否继续暂存数据的DIY？',
	'update_completed'	: 'อัพเดตเสร็จเรียบร้อยแล้ว',//'已更新完成。',
	'tab_label'		: 'ป้ายชื่อแท็บ',//'tab标签',
	'temp_action'		: 'คลิกที่ปุ่ม "ดำเนินการต่อ" เพื่อโหลดข้อมูลชั่วคาวไว้ในรูปแบบปัจจุบัน,<br />คลิกปุ่ม "ลบ" เพื่อลบข้อมูลชั่วคราวออก.',//'按继续按钮将打开暂存数据并DIY，<br />按删除按钮将删除暂存数据。',
	'continue'		: 'ดำเนินการต่อ',//'继续',
	'block_no_rights'	: 'Sorry, you have no permission to add or edit block',//'抱歉，您没有权限添加或编辑模块',

//--------------------------------
//static/js/portal_diy_data.js
	'data_manage'		: 'Direct management of the block data',//'可直接管理模块数据',
	'quit'			: 'Quit',//'退出',
//--------------------------------
//static/js/qshare.js
	'from_tencent'		: 'ฉันมาจาก Tencent microblogging',//"\u6211\u6765\u81EA\u4E8E\u817E\u8BAF\u5FAE\u535A\u5F00\u653E\u5E73\u53F0",

//--------------------------------
//static/js/register.js

	'username_invalid'	: 'ชื่อที่คุณใช้มีตัวอักษรหรือคำที่ห้ามใช้',//'用户名包含敏感字符',
	'username_short'	: 'ชื่อผู้ใช้สั้นเกินไป อย่างน้อย 2 ตัวอักษร',//'用户名小于 3 个字符',
	'username_long'		: 'ชื่อผู้ใช้ยาวเกินไป สูงสุด 15 ตัวอักษร',//'用户名超过 15 个字符',
	'passwords_not_equal'	: 'รหัสผ่านทั้งสองช่องไม่ตรงกัน',//'两次输入的密码不一致',
	'email_invalid'		: 'อีเมลที่คุณใช้มีตัวอักษรหรือคำที่ห้ามใช้',//'Email 包含敏感字符',
	'invite_code_invalid'	: 'โค้ดเชิญชวนที่คุณใช้มีตัวอักษรหรือคำที่ห้ามใช้',//'邀请码包含敏感字符',
	'password_fill'		: 'กรุณากรอกรหัสผ่าน',//'请填写密码',
	'password_again'	: 'กรุณากรอกรหัสผ่านอีกครั้ง',//'请再次输入密码',
	'email_fill'		: 'กรุณากรอกที่อยู่อีเมล์',//'请输入邮箱地址',
	'length_min'		: ', ความยาวต่ำสุด',//', 最小长度为 '
	'chars'			: ' ตัวอักษร',//' 个字符',
	'password_strength'	: 'Password strength: ',//'密码强度:',
	'pw_weak'		: 'คาดเดาได้ง่าย',//'弱',
	'pw_middle'		: 'คาดเดาได้ปานกลาง',//'中',
	'pw_strong'		: 'คาดเดาได้ยาก',//'强',
	'pass_short'		: 'รหัสผ่านสั้นเกินไป จะต้องไม่น้อยกว่า ',//'密码太短，不得少于 ',
	'digital'		: 'ตัวเลข',//'数字',
	'lowercase'		: 'ตัวพิมพ์เล็ก',//'小写字母',
	'capitals'		: 'ตัวพิมพ์ใหญ่',//'大写字母',
	'specials'		: 'สัญลักษณ์พิเศษ',//'特殊符号',
	'pw_weak_info'		: 'รหัสผ่านที่คุณกรอกคาดเดาได้ง่าย จะต้องประกอบไปด้วย ',//'密码太弱，密码中必须包含 ',
	'leave_blank_old_pass'	: 'Leave blank if you do not need to change the password',//'如不需要更改密码，此处请留空',

//--------------------------------
//static/js/seditor.js
	'enter_username'	: 'กรุณากรอกชื่อผู้ใช้',//'请输用户名',
	'at_friend'		: '@เพื่อน จะช่วยแจ้งเตือนให้เพื่อนของคุณทราบว่ามีการอ้างอิงชื่อเขา',//'@朋友账号，就能提醒他来看帖子',

//--------------------------------
//static/js/smilies.js

//--------------------------------
//static/js/space_diy.js

	'save_js'		: 'บันทึกจาวาสคริปต์หลังจากแสดงผล',//'javascript脚本保存后显示',
	'settings'		: 'ตั้งค่า',//'设置',

//---------------------------
//static/js/swfupload.js

	'attach_file'		: 'ไฟล์แนบ',

//---------------------------
//static/js/threadsort.js

	'select_please'		: 'กรุณาเลือก',//'请选择',
	'required_fill'		: 'จำเป็นต้องใช้ข้อมูลเหล่านี้',//'必填项目没有填写',
	'select_next_level'	: 'จำเป็นต้องใช้ข้อมูลเหล่านี้',//'请选择下一级',
	'numeric_invalid'	: 'กรอกตัวเลขไม่ถูกต้อง',//'数字填写不正确',
	'email_invalid'		: 'ที่อยู่อีเมลไม่ถูกต้อง',//'邮件地址不正确',
	'text_too_long'		: 'กรอกข้อมูลในโครงการยาวเกินไป',//'填写项目长度过长',
	'value_is_greater'	: 'สูงกว่าค่าที่กำหนดไว้',//'大于设置最大值',
	'value_is_less'		: 'น้อยกว่าค่าที่กำหนดไว้',//'小于设置最小值',
	'enter_valid_url'	: 'กรอกที่อยู่ลิงก์ให้ถูกต้อง โดยต้องจะต้องเริ่มด้วย http://',//'请正确填写以http://开头的URL地址',

//--------------------------------
//static/js/upload.js

	'file_not_supported'	: 'ขออภัย, รูปแบบไฟล์ไม่รองรับ',//'对不起，不支持上传此类文件',
	'wait_upload'		: 'Wait for upload...',//'等待上传...',

//-------------------------------------
//source/function/function_admincp.php
	'version_uptodate'	: 'ขณะนี้คุณกำลังใช้เวอร์ชันอัพเดตล่าสุดของของดิสคัส! กรุณาดูที่เคล็ดลับต่อไปนี้ เพื่อทำการอัพเกรดตามความเหมาะสม',

//-------------------------------------
//api/manyou/cloud_iframe.js
	'add_operation'		: 'เพิ่มไปยังการดำเนินการทั่วไป',//'&#28155;&#21152;&#21040;&#24120;&#29992;&#25805;&#20316;',

//--------------------------------------------
//static/js/googlemap.js + static/js/editor.js

	'map_title'		: 'Google Maps',//'google图',
	'map_insert'		: 'แทรก Google Map',//'插入google地图',
	'map_insert_tips'	: 'แทรก Google Maps โดยการค้นหาที่อยู่ (temporarily supported only single label!)',//'通过搜索插入google地图（暂只支持单点标注）！',
	'map_center_changed'	: 'แผนที่ถูกเปลี่ยนแล้ว!',//'地图中心已经改变！',
	'map_wrong_address'	: 'ที่อยู่ไม่ถูกต้อง! ไม่พบที่อยู่ปัจจุบันของคุณ',//' 地址错误，未找到当前地址',

//-------------------------------------
//	''	: '',//'',

'fiction'	: '' // This key MUST BE THE LAST row!

};
