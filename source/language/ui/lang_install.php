<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: install_lang.php 33770 2013-08-12 05:57:10Z nemohou $
 */

if(!defined('IN_COMSENZ')) {
	exit('Access Denied');
}

define('UC_VERNAME', 'International Version');

$lang = array(
	'SC_GBK'		=> 'Simplified Chinese GBK encoding',//'简体中文版',
	'TC_BIG5'		=> 'Traditional Chinese BIG5 encoding',//'繁体中文版',
	'SC_UTF8' => 'ئۇيغۇرچە UTF8 نۇسخىسى(نۇرقۇت ئەترىتى)',
	'TC_UTF8'		=> 'Traditional Chinese UTF8 encoding',//'繁体中文 UTF8 版',
	'EN_ISO'		=> 'ENGLISH ISO8859',
	'EN_UTF8'		=> 'ENGLISH UTF-8',

	'title_install' => SOFT_NAME.' ئورنىتىش يېتەكچىسى',
	'agreement_yes' => 'قوشۇلىمەن',
	'agreement_no' => 'قوشۇلمايمەن',
	'notset' => 'چەكلىمە يوق',

	'message_title' => 'ئەسكەرتى ئۇچۇرى',
	'error_message' => 'خاتالىق ئۇچۇرى',
	'message_return' => 'قايتىش',
	'return' => 'قايتىش',
	'install_wizard' => 'ئورنىتىش يېتەكچىسى',
	'config_nonexistence' => 'سەپلىمە ھۆججىتى تېپىلمىدى',
	'nodir' => 'مۇندەرىجە تېپىلمىدى',
	'redirect' => 'تور كۆرگۈچ ئاپتوماتىك ھالدا بەت ئالمىشىدۇ ، ئادەم كۈچى بىلەن مەشغۇلات قىلىش ھاجەتسىز.   <br> تور كۆرگۈچ ئاپتوماتىك ئالماشمىغاندا ، بۇ يەرنى چېكىڭ',
	'auto_redirect' => 'تور كۆرگۈچ ئاپتوماتىك ھالدا بەت ئالمىشىدۇ ، ئادەم كۈچى بىلەن مەشغۇلات قىلىش ھاجەتسىز',
	'database_errno_2003' => 'ساندان ئۇلىنالمىدى ،ساندان قوزغىتىلغانمۇ يوق ، تەكشۈرۈپ كۆرۈڭ ،ساندان مۇلازىمېتىر ئادرېسى توغرىمۇ يوق تەكشۈرۈڭ .',
	'database_errno_1044' => 'يىڭى ساندان قۇرۇشقا بولمىدى ، ساندان نامى توغرا يېزىلدىمۇ يوق تەكشۈرۈڭ .',
	'database_errno_1045' => 'ساندان ئۇللاشقا بولمىدى ، ساندان ئىشلەتكۈچى نامى ۋە پارولى توغرىمۇ ، تەكشۈرۈپ بىقىڭ .',
	'database_errno_1064' => 'SQL گرامماتىكىسدا خاتالىق بار',

	'dbpriv_createtable' => 'CREATE TABLE ھوقوقى يوق ، دۋاملىق قاچىلاشقا بولمايدۇ',
	'dbpriv_insert' => 'INSERT ھوقوقى يوق ، دۋاملىق قاچىلاشقا بولمايدۇ',
	'dbpriv_select' => 'SELECT ھوقوقى يوق ، دۋاملىق قاچىلاشقا بولمايدۇ',
	'dbpriv_update' => 'UPDATE ھوقوقى يوق ، دۋاملىق قاچىلاشقا بولمايدۇ',
	'dbpriv_delete' => 'DELETE ھوقوقى يوق ، دۋاملىق قاچىلاشقا بولمايدۇ',
	'dbpriv_droptable' => 'DROP TABLE ھوقوقى يوق ، قاچىلاشقا بولمايدۇ',

	'db_not_null' => 'ساندان ئاللىقاچان قاچىلىنىپ بولغان  UCenter,  نى داۋاملاشتۇرۇش ئۈچۈن سانداننى تازىلاپ ئاندىن قاچىلاڭ .',
	'db_drop_table_confirm' => 'داۋاملاشتۇرۇپ قاچىلىغاندا ئەسلىدىكى ئۇچۇرلار باستۇرۇلۇپ كېتىشى مۇمكىن ، داۋاملاشتۇرامسىز ؟',

	'writeable' => 'يازغىلى بولىدۇ',
	'unwriteable' => 'يازغىلى بولمايدۇ',
	'old_step' => 'ئارقىغا قايتىش',
	'new_step' => 'داۋاملاشتۇرۇش',

	'database_errno_2003' => 'ساندان ئۇلىنالمىدى ،ساندان قوزغىتىلغانمۇ يوق ، تەكشۈرۈپ كۆرۈڭ ،ساندان مۇلازىمېتىر ئادرېسى توغرىمۇ يوق تەكشۈرۈڭ .',
	'database_errno_1044' => 'يېڭى ساندان قۇرۇشقا بولمىدى ، ساندان نامى توغرا يېزىلدىمۇ يوق تەكشۈرۈڭ .',
	'database_errno_1045' => 'ساندان ئۇللاشقا بولمىدى ، ساندان ئىشلەتكۈچى نامى ۋە پارولى توغرىمۇ ، تەكشۈرۈپ بېقىڭ .',
	'database_connect_error' => 'ساندان ئۇلىنىشىدا خاتالىق بار',

	'step_title_1' => 'ئورنىتىش مۇھىتىنى تەكشۈرۈش',
	'step_title_2' => 'ئىجرا مۇھىتى سەپلەش',
	'step_title_3' => 'ساندان قۇرۇش',
	'step_title_4' => 'ئورنىتىش',
	'step_env_check_title' => 'ئورنىتىشنى باشلاش',
	'step_env_check_desc' => 'مۇھىت ۋە مۇندەرىجە ھوقۇق چەكلىمىسىنى تەكشۈرۈش',
	'step_db_init_title' => 'ساندان ئورنىتىش',
	'step_db_init_desc' => 'ساندان ئورنىتىۋاتىدۇ',

	'step1_file' => 'ھۆججەت ۋە مۇندەرىجە',
	'step1_need_status' => 'ھازىرلايدىغان شەرت',
	'step1_status' => 'ھازىرقى ھالىتى',
	'not_continue' => 'قىزىل رەڭلىك خاتالىق بار ئورۇنلارنى تۈزىتىپ ئاندىن داۋاملاشتۇرۇڭ',

	'tips_dbinfo' => 'ساندان ئۇچۇرلىرىنى تولدۇرۇڭ',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => 'مۇنبەر مەسئۇلى ئۇچۇرلىرىنى تولدۇرۇڭ',
	'step_ext_info_title' => 'ئورنىتىش تامام',
	'step_ext_info_comment' => 'بۇ يەرنى چېكىپ كىرىڭ',

	'ext_info_succ' => 'ئورنىتىش تامام',
	'install_submit' => 'تاپشۇرۇش',
	'install_locked' => '<p style="text-align:right;">ئورنىتىش چەكلەنگەن، سىز بىر قېتىم ئورنىتىپ بولغان، ناۋادا قايتىدىن ئورناتماقچى بولسىڭىز مۇلازىمېتىردىن بۇ ھۆججەتنى ئۆچۈرۈۋېتىڭ: <p style="direction: ltr;">'.str_replace(ROOT_PATH, '', $lockfile),
	'error_quit_msg' => 'سىز ئۈستىدىكى مەسىلىنى ھەل قىلغاندىن كېيىن، ئورنىتىشنى داۋاملاشتۇرالايسىز',

	'step_app_reg_title' => 'ئىجرا مۇھىتى سەپلەش',
	'step_app_reg_desc' => 'مۇلازىمېتىر مۇھىتىنى تەكشۈرۈش ۋە UCenter تەڭشىكى',
	'tips_ucenter' => 'مۇناسىۋەتلىكUCenter ئۇچۇرلىرىنى تولدۇرۇڭ',
	'tips_ucenter_comment' => 'UCenter بولسا Comsenz شىركىتى مەھسۇلاتلىرىنىڭ يادرولۇق مۇلازىمەت پىروگراممىسى ، Discuz! Board نىڭ قاچىلىنىشى ۋە يۈرگۈزۈلۈشى مۇشۇ پىروگراممىغا تايىنىدۇ  ئەگەر سىز UCenter نى  قاچىلاپ بولغان بولسىڭىز، تۆۋەندىكى ئۇچۇرلارنى تولدۇرۇڭ. ئۇنداق بولمىسا. <a href="http://www.discuz.com/" target="blank">Comsenz  مەھسۇلات مەركىزى</a> غا كىرىپ، چۈشۈرۈڭ ھەمدە قاچىلاڭ، ئاندىن مەشغۇلاتنى داۋاملاشتۇرسىڭىز بولىدۇ .',

	'advice_mysql_connect' => 'mysql  بۆلىكىنىڭ توغرا يۈكلەنگەن ياكى يۈكلەنمىگنلىكىنى تەكشۈرۈڭ .',
	'advice_gethostbyname' => ' PHP سەپلىمىسىدە gethostbyname  فۇنكسىيىسى چەكلەنگەنمۇ-يوق. بوشلۇق ساتقان ئادەم بىلەن ئالاقىلىشىپ، بۇ ئىقتىدارنىڭ ئېچىلغان-ئېچىلمىغانلىقىنى مۇقىملاشتۇرۇڭ',
	'advice_file_get_contents' => 'بۇ فۇنكسىيە php.ini 中 allow_url_fopen  ئىقتىدارىنىڭ ئېچىلغان بولۇشىنى تەلەپ قىلىدۇ. بوشلۇق ساتقان ئادەم بىلەن ئالاقىلىشىپ، بۇ ئىقتىدارنىڭ ئېچىلغان-ئېچىلمىغانلىقىنى مۇقىملاشتۇرۇڭ',
	'advice_xml_parser_create' => ' بۇ فۇنكسىيە  PHP  نىڭ XML نى قوللىشىنى تەلەپ قىلىدۇ.بوشلۇق ساتقان ئادەم بىلەن ئالاقىلىشىپ، بۇ ئىقتىدارنىڭ ئېچىلغان-ئېچىلمىغانلىقىنى مۇقىملاشتۇرۇڭ ',
	'advice_fsockopen' => 'بۇ فۇنكسىيە php.ini  دىكى allow_url_fopen ئىقتىدارىنىڭ ئېچىلغان بولىشىنى تەلەپ قىلىدۇ ،بوشلۇق ساتقان ئادەم بىلەن ئالاقىلىشىپ، بۇ ئىقتىدارنىڭ ئېچىلغان-ئېچىلمىغانلىقىنى  مۇقىملاشتۇرۇڭ ',
	'advice_pfsockopen' => 'بۇ فۇنكسىيە php.ini دىكى  allow_url_fopen ئىقتىدارىنىڭ ئېچىلغان بولۇشىنى تەلەپ قىلىدۇ. بوشلۇق ساتقان ئادەم بىلەن ئالاقىلىشىپ، بۇ ئىقتىدارنىڭ ئېچىلغان-ئېچىلمىغانلىقىنى مۇقىملاشتۇرۇڭ',
	'advice_stream_socket_client' => ' PHP سەپلىمىسىدە  stream_socket_client  فۇنكىسىيىسى چەكلەنگەنمۇ- يوق. ',
	'advice_curl_init' => ' PHP سەپلىمىسىدە curl_init  فۇنكسىيىسى چەكلەنگەنمۇ-يوق. ',

	'ucurl' => 'UCenter نىڭ URL',
	'ucpw' => 'UCenter قۇرغۇچىنىڭ پارولى',
	'ucip' => 'UCenter نىڭ IPئادرېسى',
	'ucenter_ucip_invalid' => 'شەكىلى خاتا ، توغرا بولغان IP ئادرېسىنى يىزىڭ .',
	'ucip_comment' => 'كۆپىنچە ئەھۋاللاردا تولدۇرمىسىڭىزمۇ بولىدۇ ',

	'tips_siteinfo' => 'ھەقىقى بېكەت ئۇچۇرلىرىنى يىزىڭ ',
	'sitename' => 'بېكەت نامى',
	'siteurl' => 'بېكەت  URL',

	'forceinstall' => 'مەجبۇرىي ئورنىتىش',
	'dbinfo_forceinstall_invalid' => 'ھازىرقى سانداندا ئوخشاش بولغان ئۇچۇر جەدۋىلى مەۋجۇت، سىز «جەدۋەل ئالدى ئۇلانمىسى»نى ئۆزگەرتىش ئارقىلىق كونا ساندان جەدۋىلىنىڭ ئۆچۈرۈلۈپ كېتىشىدىن ساقلانسىڭىز بولىدۇ، ياكى مەجبۇرىي قاچىلاشنى تاللىسىڭىزمۇ بولىدۇ. مەجبۇرىي قاچىلىسىڭىز كونا ساندان تازىلىنىپ كېتىدۇ، ئەسلىگە كەلتۈرگىلى بولمايدۇ.',

	'click_to_back' => 'ئارقىغا قايتىش',
	'adminemail' => 'سىستېما Email',
	'adminemail_comment' => 'سىستېما خاتالىق دوكلاتى ئەۋەتىلىدۇ',
	'dbhost_comment' => 'ساندان مۇلازىمېتىر ئادرېسى، ئادەتتە localhost',
	'tablepre_comment' => 'بىر ساندانغا مۇنبەردىن بىرنەچچىنى ئورناتقاندا بۇنى ئۆزگەرتىڭ',
	'forceinstall_check_label' => 'ئۇچۇرلارنى ئۆچۈرۈپ مەجبۇرىي ئورنىتىمەن',

	'uc_url_empty' => 'UCenter نىڭ ھەقىقى URL ئادرېسىنى يازمىدىڭىز  ، قايتىپ تولدۇرۇڭ',
	'uc_url_invalid' => 'URL شەكلى خاتا',
	'uc_url_unreachable' => 'UCenter نىڭ URL ئادرېسىدا خاتالىق بولىشى مۇمكىن ، تەكشۈرۈڭ ',
	'uc_ip_invalid' => 'بۇ ئىسىمنى يېزىشقا ئامالسىز قالغاندا ، بېكەت ip نى تولدۇرۇڭ ',
	'uc_admin_invalid' => 'UCenter قۇرغۇچى پارولىدا خاتالىق بار ، قايتىدىن تولدۇرۇڭ ',
	'uc_data_invalid' => 'ئالاقىسى نورمال ئەمەس ، UCenter نىڭ URL ئادرېسى توغرىمۇ تەكشۈرۈڭ  ',
	'uc_dbcharset_incorrect' => 'UCenter سانلىق مەلۇمات ئامبىرىدىكى بەلگىلەر بىلەن ئەمەلى بەلگىلەر بىردەك ئەمەس ',
	'uc_api_add_app_error' => 'UCenter غا ئەپ قېتىشتا خاتالىق بار ',
	'uc_dns_error' => 'UCenter DNS نى يەشكەندە خاتالىق كۆرۈلسە ،ucenter نىڭ ip ئادرېسىنى قايتا تولدۇرۇڭ ',

	'ucenter_ucurl_invalid' => 'UCenter نىڭ URL ئادرېسىنى بوش قالسا بولمايدۇ ، تەكشۈرۈڭ ',
	'ucenter_ucpw_invalid' => 'UCenter نىڭ قۇرغۇچى پارولى بوش قالسا بولمايدۇ ، تەكشۈرۈڭ ',
	'siteinfo_siteurl_invalid' => 'بېكەت URL بوش قالسا بولمايدۇ ، تەكشۈرۈڭ ',
	'siteinfo_sitename_invalid' => 'بېكەت نامى بوش قالسا بولمايدۇ ،  تەكشۈرۈڭ ',
	'dbinfo_dbhost_invalid' => 'ساندان مۇلازىمېتىرى بوش قالسا بولمايدۇ ، تەكشۈرۈڭ ',
	'dbinfo_dbname_invalid' => 'ساندان نامى بوش قالسا بولمايدۇ ، تەكشۈرۈڭ',
	'dbinfo_dbuser_invalid' => 'ساندان ئىشلەتكۈچى نامى بوش قالسا بولمايدۇ ، تەكشۈرۈڭ ',
	'dbinfo_dbpw_invalid' => 'ساندان پارولى بوش قالسا بولمايدۇ ، تەكشۈرۈڭ ',
	'dbinfo_adminemail_invalid' => 'سىستىما ئېلخىتى بوش قالسا بولمايدۇ  ، تەكشۈرۈڭ',
	'dbinfo_tablepre_invalid' => ' ساندان جەدۋەل ئالدى ئۇلانمىسى بوش قالسا بولمايدۇ ، تەكشۈرۈڭ',
	'admininfo_username_invalid' => 'مۇنبەر مەسئۇلى نامى بوش قالسا بولمايدۇ ، تەكشۈرۈڭ',
	'admininfo_email_invalid' => 'مۇنبەر مەسئۇلى Email بوش قالسا بولمايدۇ ، تەكشۈرۈڭ',
	'admininfo_password_invalid' => 'مۇنبەر مەسئۇلى پارولى بوش قالسا بولمايدۇ، تولدۇرۇڭ!',
	'admininfo_password2_invalid' => 'ئىككى قېتىملىق پارول بىردەك ئەمەس، تەكشۈرۈڭ!',

/*vot*/	'install_dzfull'		=> 'Discuz! Xنى يېڭىدىن ئورنىتىش (UCenter Server نىمۇ ئورنىتىدۇ)',
/*vot*/	'install_dzonly'		=> 'پەقەت Discuz! X نىلا ئورنىتىش (ئالدىن ئورنىتىپ بولغان UCenter Server لازىم)',

	'username' => 'مۇنبەر مەسئۇلى ئىسمى',
	'email' => 'مۇنبەر مەسئۇلى Email',
	'password' => 'مۇنبەر مەسئۇلى پارولى',
	'password_comment' => 'مۇنبەر مەسئۇلى پارولى بوش قالسا بولمايدۇ',
	'password2' => 'پارولنى قايتا كىرگۈزۈڭ',

	'admininfo_invalid' => 'مۇنبەر مەسئۇلى ئۇچۇرلىرى تولۇق ئەمەس ، مۇنبەر مەسئۇلى نامى ، پارول ئېلخەتنى تەكشۈرۈڭ ',
	'dbname_invalid' => 'ساندان نامىنى بوش قويۇشقا بولمايدۇ ، ھەقىقى ساندان نامىنى يىزىڭ ',
	'tablepre_invalid' => 'ساندان جەدۋىلى ئالدىن ئۇلانمىسنى بوش قويۇشقا بولمايدۇ ، تەكشۈرۈڭ',
	'admin_username_invalid' => 'قائىدىگە خىلاپ ئىشلەتكۈچىلەر نامى، ئىشلەتكۈچىلەر نامىنىڭ  ئۇزۇنلۇقى 15 ئىنگلىزچە ھەرپتىن ئېشىپ كەتمەسلىكى ھەمدە ئالاھىدە ھەرپلەرنى ئۆز ئىچىگە ئالماسلىقى كېرەك. ئادەتتە خەنزۇچە يېزىق، ھەرپ، سان بولسا بولىدۇ',
	'admin_password_invalid' => 'پارول ئۈستىدىكىسى بىلەن بىردەك بولمىسا، قايتا تولدۇرۇڭ',
	'admin_email_invalid' => 'Email  ئادرېسىدا خاتالىق بولسا، بۇ يوللانما ئادرېسى ئىشلىتىلىپ بولغان ياكى شەكلى ئىناۋەتسىز بولغان بولىدۇ، باشقا ئادرېسقا ئالماشتۇرۇڭ',
	'admin_invalid' => 'سىزنىڭ ئۇچۇرلىرىڭىز، باشقۇرغۇچى ئۇچۇرلىرى تولۇق بولمىسا، ھەر بىر تۈرنى ئەستايىدىل تولۇقلاپ تولدۇرۇڭ ',
	'admin_exist_password_error' => 'بۇ ئىشلەتكۈچى تىزىملىتىپ بولغان ئەھۋال ئاستىدا، ئەگەر سىز مۇشۇ ئىشلەتكۈچىنى مۇنبەرنىڭ باشقۇرغۇچىسى قىلماقچى بولسىڭىز، بۇ ئىشلەتكۈچىنىڭ پارولىنى توغرا كىرگۈزۈڭ ياكى مۇنبەر باشقۇرغۇچىسىنىڭ ئىسمىنى ئۆزگەرتىڭ',

	'tagtemplates_subject' => 'تېما',
	'tagtemplates_uid' => 'ئەزا  ID',
	'tagtemplates_username' => 'تېما يوللىغۇچى',
	'tagtemplates_dateline' => 'چېسلا',
	'tagtemplates_url' => 'تېما ئادرېسى ',

	'uc_version_incorrect' => 'سىزدىكى UCenter مۇلازىمەت نۇسخىسى تۆۋەن نەشىردە بولسا،ئەڭ يېڭى نەشرىگە كۆتۈرۈڭ  دەرىجىسىنى يۇقىرى كۆتۈرۈش، چۈشۈرۈش ئادرېسى : http://www.comsenz.com/ 。',
	'config_unwriteable' => ' قاچىلاش كۆرسەتكۈچىگە سەپلەش ھۆججەتلىرىنى يېزىشقا ئامالسىز قالغاندا config.inc.php پىروگرامما خاسلىقىنى يازغىلى بولىدىغان ھالەتكە كەلتۈرۈڭ (777)',

	'install_in_processed' => 'قاچىلىنىۋاتىدۇ ....',
	'install_succeed' => 'قاچىلاش تاماملاندى ، بۇ يەردىن كىرىڭ ',
	'install_cloud' => 'قاچىلاش تاماملاندى ، Discuz!نىڭ بۇلۇت ئىقتىدارىنى  ئېچىشىڭىزنى قارشى ئالىىز !<br>Discuz!بۇلۇت سۇپىسى بولسا تېڭشۈن شىركىتىنىڭ  ئالاقە تورى  كىچىك تىپتىكى ۋە ئوتتوراتىپتىكى توربىكەتنىڭ ئالاقىسىنى تېخىمۇ مۇكەممەل قىلىش ئۈچۈن بۇ ئىقدىدار يولغا قويۇلدى،<br>Discuz! بۇلۇت سۇپىسى بولسا QQ غا باغلاش ،ئانالىز ئىقتىدارى ، SOSO چىراي ئىپادە مۇلازىمېتىنى، تەۋسىيە ئىقتىدارىنى قوللىدى . <br>Discuz!بۇلۇت سۇپىسى ئىقتىدارىنى ئىچىڭ  ،  ئىشلەتكەن سىستېمىڭىزنىڭ （Discuz!、UCHomeۋەSupeSite  ）Discuz! Xدەرھال نەشىرىنى يىڭىلاڭ 3。',
	'to_install_cloud' => 'ئارقا بەتتىن ئىچىش',
	'to_index' => 'ھازىرچە ئاچمايمەن',

	'init_credits_karma' => 'شۆھرەت',
	'init_credits_money' => 'بايلىق',

	'init_postno0' => 'ساھىبخان',
	'init_postno1' => 'دىۋان',
	'init_postno2' => 'يىكەنداز',
	'init_postno3' => 'گىلەم',

	'init_support' => 'قوللاش',
	'init_opposition' => 'قارشى',

	'init_group_0' => 'ئەزا',
	'init_group_1' => 'مۇنبەر مەسئۇلى',
	'init_group_2' => 'باشقۇرغۇچى',
	'init_group_3' => 'باشقۇرغۇچى',
	'init_group_4' => 'سۆزى چەكلەنگەن  ئەزا',
	'init_group_5' => 'زىيارەت چەكلەنگەن ئەزا',
	'init_group_6' => 'چەكلەنگەن ئەزا IP',
	'init_group_7' => 'سەيياھ',
	'init_group_8' => 'تەستىقلىنىۋاتقان ئەزا',
	'init_group_9' => 'قەلەندەر',
	'init_group_10' => 'يىڭى كەلگەن',
	'init_group_11' => 'رەسمىي ئەزا',
	'init_group_12' => 'ئوتتۇرا دەرىجىلىك ئەزا',
	'init_group_13' => 'ئالىي دەرىجىلىك ئەزا',
	'init_group_14' => 'ئالتۇن ئەزا',
	'init_group_15' => 'پىشقەدەم ئەزا',

	'init_rank_1' => 'يىڭى ئوقۇغۇچى',
	'init_rank_2' => 'قابىلىيەتلىك ئەزا',
	'init_rank_3' => 'پىراكتىكانت مۇخبىر',
	'init_rank_4' => 'ئەركىن يازغۇچى',
	'init_rank_5' => 'تەكلىپلىك ئەزا',

	'init_cron_1' => 'بۈگۈنكى يوللانغان تېمىلارنى تازىلاش',
	'init_cron_2' => 'مۇشۇ ئايدىكى تورغا چىقىش ۋاقتىنى تازىلاش',
	'init_cron_3' => 'كۈندىلىك سانلىق مەلۇماتلارنى تازىلاش',
	'init_cron_4' => 'تۇغۇلغان كۈن سىتاتىستىكىسى ۋە پوچتا يوللانمىسى ئارقىلىق بەخت تىلەش',
	'init_cron_5' => 'تېمغا ئىنكاس قايتۇرۇش ئۇقتۇرۇشى',
	'init_cron_6' => 'بۈگۈنكى ئېلانلارنى ئۆچۈرۈش',
	'init_cron_7' => 'ۋاقىت چىكى مەشغۇلاتى تازىلاندى',
	'init_cron_8' => 'مۇنبەر تەشۋىقاتى تازىلاندى',
	'init_cron_9' => 'ھەر ئايلىق تېما تازىلاندى',
	'init_cron_10' => 'كۈندىلىك X-Spaceئىشلەتكۈچىلەرنى يېڭىلاش',
	'init_cron_11' => 'كۈندىلىك تېمىلارنى يېڭىلاش',

	'init_bbcode_1' => 'مەزمۇننى توغرا يۆنىلىشتە ئايلاندۇرىدۇ، ئۈنۈمى  HTML نىڭ ئۈنۈمىگە ئوخشىشىپ كېتىدۇ marqueeبەلگىسىدە دىققەت قىلىشقا تىگىشلىكى: ئۇنىڭ ئۈنۈمى پەقەت Internet Explorer تور كۆرگۈچتىلا كۆرۈلىدۇ .',
	'init_bbcode_2' => 'Flash تەسۋىرىنى قىستۇرۇش',
	'init_bbcode_3' => 'QQ نى توردا بار ھالەتتە كۆرسىتىش، بۇ رەسىمنى چەكسىڭىز قارشى تەرەپ بىلەن پاراڭلىشالايسىز.',
	'init_bbcode_4' => 'ئۈستى بەلگە',
	'init_bbcode_5' => 'ئاستى بەلگە',
	'init_bbcode_6' => 'Windows media ئاۋاز چاستوتىسىنى قىستۇرۇش',
	'init_bbcode_7' => 'Windows media ئاۋاز چاستوتىسى ياكى ۋىدىيو چاستوتىسىنى قىستۇرۇش',

	'init_qihoo_searchboxtxt' =>'ئاچقۇچلۇق سۆزنى كىرگۈزۈپ، مۇنبەردەن تېزلىكتە ئىزدەش',
	'init_threadsticky' =>'ئومۇمىيلىقنى چوققىلاش، تۈرلىرىنى چوققىلاش، نۇسخىنى چوققىلاش',

	'init_default_style' => 'سۈكۈتتىكى ئۇسلۇب',
	'init_default_forum' => 'سۈكۈتتىكى بۆلەك',
	'init_default_template' => 'كۆڭۈلدىكىدەك قېلىپ سىستېمىسى',
	'init_default_template_copyright' => 'بېيجىڭ كاڭ شېڭ يېڭى پەن تېخنىكا چەكلىك مەسئۇلىيەت شىركىتى',

	'init_dataformat' => 'Y-n-j',
	'init_modreasons' => 'ئېلان/SPAM\r\nمەقسەتلىك تېما\r\nناچار مەزمۇن\r\nمەزمۇن بىلەن تېما بىردەك ئەمەس\r\nقايتىلانغان يازما\r\n\r\nقوللايمەن\r\nنادىر يازما\r\nئىجادىي يازما',
	'init_userreasons' => 'قالتىس!\r\nكۆپتۈرمە\r\nقوللاش!\r\nتاغتۇرا\r\nبىر تەرەپلىمە',
	'init_link' => 'Discuz! ئورگان مۇنبىرى',
	'init_link_note' => 'ئەڭ يېڭىDiscuz!يېڭى خەۋەرلىرى، يۇمشاق دېتال چۈشۈرۈش ۋە تېخنىكا ئالماشتۇرۇش بىلەن تەمىنلەيدۇ',

	'init_promotion_task' => 'بېكەت تەشۋىق ۋەزىپىسى',
	'init_gift_task' => 'قىزىل بولاق ۋەزىپىسى',
	'init_avatar_task' => 'باش سۈرەت ۋەزىپىسى',

	'license'	=> '<div class="license"><h1>ئۇيغۇرچە نۇسخسىنى ئورنىتىشتىن بۇرۇن ئىشلىتىش كېلىشىمىنى تەپسىلىي ئوقۇڭ:</h1>

<p>ئالدى بىلەن سىزنىڭ نۇرقۇت ئەترىتى ئۆزلەشتۈرگەن Discuz!X3.1 پىروگراممىسىنى ئىشلەتكىنىڭىزگە كۆپ رەھمەت ! مەزكۇر پىروگراممنىڭ بارلىق ھوقۇقى (c) 2001-2012 بېيجىڭ كاڭشېڭ شىنچۇاڭ پەن-تېخنىكا چەكلىك مەسئۇلىيەت شىركىتىگە تەۋە بولۇپ، نۇرقۇت ئەترىتى مەزكۇر پىروگراممىنى ئۆگىنىش ۋە تەتقىق قىلىش مەقسىتىدە ئۇيغۇرچىغا ئۆزلەشتۈردى.<p>

<h3>مەزكۇر پىروگراممىنى ئورنىتىپ ئىشلىتىشتىن بۇرۇن چوقۇم تۆۋەندىكى قائىدىلەرگە بويسۇنىشىڭىز كېرەك.</h3>

<p>1. دۆلەتنىڭ بىخەتەرلىكىگە بۇزغۇنچىلىق قىلىدىغان، دۆلەت مەخپىيەتلىكىنى ئاشكارىلايدىغان، كوللېكتىپ ۋە ئاممىنىڭ قانۇنىي ھوقۇق-مەنپەئەتىگە دەخلى-تەرز قىلىدىغان تۆۋەندىكىدەك مەزمۇن، يازمىلارنى مەزكۇر پىروگراممىدىن پايدىلىنىپ ئېچىلغان تور بېكەتتە ئېلان قىلىشقا، باشقا ئورۇندىن كۆچۈرۈپ چاپلاشقا بولمايدۇ:<p>

<p>(1)ئاساسى قانۇن، جىنايى ئىشلار قانۇنى، مەمۇر قانۇنغا خىلاپ يازمىلار؛<p>
	
<p>(2)ھۆكۈمەت ۋە سوتسىيالىستىك تۈزۈمگە قارشى يازمىلار؛<p>

<p>(3)دۆلەتنى پارچىلايدىغان، دۆلەت بىرلىگىگە بۇزغۇنچىلىق قىلىدىغان يازمىلار؛<p>

<p>(4)مىللىي ئۆچمەنلىك، مىللىي كەمسىتىش تۈسىنى ئالغان ۋە مىللەتلەر ئىتتىپاقلىقىغا بۇزغۇنچىلىق قىلىدىغان يازمىلار؛<p>

<p>(5)ھەقىقەتنى بۇرمىلاپ ئىغۋاگەرچىلىك قىلىدىغان، جەمئىيەتنى قالايمىقانلاشتۇرۇدىغان يازمىلار؛<p>

<p>(6)خۇراپىي، بىدئەت، قىمار ئويناش، تېررورلۇققا مۇناسىۋەتلىك يازمىلار؛<p>

<p>(7)شەخسىنىڭ غۇرۇرىغا تېگىدىغان، ھاقارەتلەيدىغان ۋە باشقا يامان غەرەزدىكى يازمىلار؛<p>

<p>(8)دۆلەت ئاپپاراتلىرىنىڭ ئىناۋىتىگە بۇزغۇنچىلىق قىلىدىغان يازمىلار؛<p>

<p>(9)رۇخسەتسىز ئېلان قىلىنغان سودا ئېلانى خاراكتېرىدىكى يازمىلار؛<p>

<p>(10)دۆلەتنىڭ قانۇن-سىياسىتىگە خىلاپ باشقا يازمىلار؛<p>

<p>ئەگەر يۇقۇرىدىكىلەرگە ئائىت مەزمۇن بايقالسا ۋە ياكى بىرەر مەسىلە چىقسا، مەزكۇر پروگراممىنى ئىشلەتكۈچى ئۆزى مەسئۇل بولىدۇ، نۇرقۇت دۇنياسى ھېچقانداق مەسئۇلىيەتنى ئۆزئۈستىگە ئالمايدۇ.<p>
<p>2. مەزكۇر پىروگراممىنى ئىشلەتكەن بېكەت باشلىقلىرى ئەمگىكىمىزگە تولۇق ھۆرمەت قىلىشى، ئۇيغۇر كومپيۇتېرچىلىقىنىڭ بىردەكلىكىنى ساقلىشى، ئېقىمغا، بىرلىككە قارشى يازمىلارنى يوللىماسلىقى كىرەك. ئۇيغۇر تور بېكەت باشلىقلىرى بىر-بىرىنى ھۆرمەتلىشى ھەمدە مەزكۇر پىروگراممىدىن پايدىلىنىپ ئېچىلغان تور بېكەتتە ئېلان قىلغان ھەر قانداق يازمىغا ئۆزى مەسئۇل بولۇشى،  قائىدە-تەرتىپىگە ۋە مۇنازىرە ئەخلاقىغا ئالاھىدە دىققەت قىلىشى كېرەك.<p>
<p>3.مەزكۇر پىروگراممىنى ئىشلەتكەن ھەرقانداق بىر تور بېكەت باشلىقىنىڭ ھەرقانداق شەكىلدىكى دۆلەت قانۇنى ۋە نىزام-پىرىنسىپلىرىغا قارشى ھەرىكەت-پائالىيەتلەرنى توسۇش ۋە مەلۇم قىلىش مەجبۇرىيىتى بار.<p>
<p>4. ئەگەر سىز ئەمگىكىمىزگە ھۆرمەت قىلماي مەزكۇر پىروگراممىدىكى ئۇلىنىش ئادرېسىمىزنى ئۆچۈرۋەتسىڭىز ياكى ئۆزگەرتىۋەتسىڭىز سىزنىڭ نۇرقۇت تورىدىكى ئەزالىق ھېساباتىڭىز توڭلىتىلغاندىن باشقا تور بېكىتىڭىزگە قارىتا مەلۇم چەكلەش تەدبىرىنى قوللىنىمىز، ئەگەر مۇشۇ سەۋەپلىك كېلىپ چىققان ھەرقانداق ئاقىۋەتنى تورىمىز ئۆز ئۈستىگە ئالمايدۇ.<p>
<p>5. ھەرقانداق تور بېكەت باشلىقىنىڭ نۇرقۇت ئەترىتى ئۆزلەشتۈرگەن پىروگراممىدىن پايدىلىنىپ نۇرقۇت ئەترىتىمىزنىڭ ئىناۋىتىگە تەسىر يېتىدىغان ئىشلار بىلەن شۇغۇللانسا ، نۇرقۇت ئەترىتى مەسئۇلىيەتنى سۈرۈشتۈرۈش ھوقوقى بار ، ئېغىر بولغانلارنى بىۋاستە ئالاقىدار ئورۇنلارنىڭ بىر تەرەپ قىلىشىغا تاپشۇرىمىز.<p>
<p>6. ئەگەر سىز تور بېكىتىمىزگە كېلىپ تور بېكىتىمىزگە بەلگىلىك تۆھپە قوشسىڭىز ، تور بېكىتىمىز سىزنى ئالاھىدە مۇلازىمەت ياكى مۇكاپات بىلەن تەمىنلەيدۇ.<p>
<p>7.تور بېكىتىمىزنىڭ بۇندىن كېيىنكى تەرەققىياتى ئۈچۈن  تور بېكىتىمىزنى دوسىتلىرىڭىزغا تەۋسىيە قىلىشنى ئۇنۇتماڭ !<p>
<p>بىزنىڭ شوئارىمىز- مەقسىتىمىز بىر،مەنزىلىمىز بىر!<p>
<p>ھۆرمەت بىلەن نۇرقۇت ئەترىتى     تور ئادرېسى:http://www.nurqut.net<p></div>

</div>',

	'uc_installed' => 'UCenter نى قاچىلاپ بولدىڭىز ، ئەگەر قايتا قاچىلىماقچى بولسىڭىز  ،  data/install.lock  بۇ ھۆججەتنى ئۆچۈرۋېتىڭ',
	'i_agree' => 'تەپسىلىي ئوقۇپ چىقتىم ، ھەم ئۇستىدىكى تۈرلەردىكى مەزمۇنلارغا قوشۇلىمەن',
	'supportted' => 'قوللايدۇ',
	'unsupportted' => 'قوللىمايدۇ',
	'max_size' => 'قوللايدۇ/ئەڭ چوڭ ئۆلچىمى',
	'project' => 'تۈر',
	'ucenter_required' => 'Discuz! كېتەرلىك شەرت',
	'ucenter_best' => 'Discuz! ئۈچۈن تەۋسىيە',
	'curr_server' => 'مۇلازىمىتېر',
	'env_check' => 'مۇھىت تەكشۈرۈش',
	'os' => 'مەشغۇلات سىستېمىسى',
	'php' => 'PHP نەشرى',
	'attachmentupload' => 'ھۆججەت يۈكلەش',
	'unlimit' => 'چەكلىمە يوق',
	'version' => 'نەشرى',
	'gdversion' => 'GD ئامبىرى',
	'allow' => 'بولىدۇ ',
	'unix' => 'Unix تىپىدىكى',
	'diskspace' => 'دىسكا بوشلۇقى',
	'priv_check' => 'ھۆججەت، مۇندەرىجە ھوقۇق چەكلمىسى',
	'func_depend' => 'تاينىشچان فۇنكسىيەلەرنى تەكشۈرۈش',
	'func_name' => 'فۇنكسىيە نامى',
	'check_result' => 'تەكشۈرۈش نەتىجىسى',
	'suggestion' => 'تەۋسىيە',
	'advice_mysql' => ' mysql بۆلەك نورمال قوزغالدىمۇ-يوق تەكشۈرۈپ بېقىڭ',
	'advice_fopen' => 'بۇ فۇنكسىيە php.ini  دىكى allow_url_fopen  ئىقتىدارىنىڭ ئېچىلغان بولىشىنى تەلەپ قىلىدۇ ،بوشلۇق ساتقان ئادەم بىلەن ئالاقىلىشىپ، بۇ ئىقتىدارنىڭ ئېچىلغان-ئېچىلمىغانلىقىنى  مۇقىملاشتۇرۇڭ ',
	'advice_file_get_contents' => 'بۇ فۇنكسىيە  php.ini دىكى allow_url_fopen ئىقتىدارىنىڭ ئېچىلغان بولىشىنى تەلەپ قىلىدۇ ،بوشلۇق ساتقان ئادەم بىلەن ئالاقىلىشىپ، بۇ ئىقتىدارنىڭ ئېچىلغان- ئېچىلمىغانلىقىنى  مۇقىملاشتۇرۇڭ',
	'advice_xml' => 'بۇ فۇنكسىيە  PHP نىڭ XML نى قوللىشىنى تەلەپ قىلىدۇ.بوشلۇق ساتقان ئادەم بىلەن ئالاقىلىشىپ، بۇ ئىقتىدارنىڭ ئېچىلغان- ئېچىلمىغانلىقىنى مۇقىملاشتۇرۇڭ  ',
	'none' => 'يوق',

	'dbhost' => 'ساندان مۇلازىمېتىرى',
	'dbuser' => 'ساندان ئىشلەتكۈچى',
	'dbpw' => 'ساندان پارولى',
	'dbname' => 'ساندان نامى',
	'tablepre' => 'جەدۋەل ئالدى ئۇلانمىسى',

	'ucfounderpw' => 'قۇرغۇچى پارولى',
	'ucfounderpw2' => 'پارولنى قايتا كىرگۈزۈڭ',

	'init_log' => 'ئەسلىگە كەلتۈرۈش خاتىرسى',
	'clear_dir' => 'مۇندەرىجە قۇرۇقداش',
	'select_db' => 'ساندان تاللاش',
	'create_table' => 'ساندان جەدۋىلى قۇرۇش',
	'succeed' => 'تامام  ',

	'install_data' => 'ساندان قاچىلىنىۋاتىدۇ ',
	'install_test_data' => 'سانلىق مەلۇمات قوشۇمچىسى قاچىلىنىۋاتىدۇ ',

	'method_undefined' => 'ئىنىقلىما بىرىلمىگەن ئۇسۇل',
	'database_nonexistence' => 'ساندان مەشغۇلات ئوبىكتى مەۋجۈت ئەمەس ',
	'skip_current' => 'ئاتلاپ ئۆتۈپ كېتىش',
	'topic' => 'مەخسۇس تېما',
	'install_finish' => 'مۇنبىرىڭىز مۇۋاپىقىيەتلىك قاچىلىنىپ بولدى ، بۇ يەردىن زىيارەت قىلىڭ .',

//---------------------------------------------------------------
// Added by Valery Votintsev
// 2 vars for language select:
	'welcome'			=> 'Welcome to Discuz! X Installation!',//'欢迎到Discuz！ X安装！',
	'select_language'		=> '<b>Select the installation language</b>:',//'<b>选择安装语言</b>',
//vot !!!Translate to Chinese!!!
//vot	'regiondata'			=> 'Add regions data',//'Add location data',
//vot	'regiondata_check_label'	=> 'Install additional regional data (countries/regions/cities)',//'Install additional regional data (countries/regions/cities)',
//vot	'install_region_data'		=> 'Install regional data',//'Install regional data',
	'php_version_too_low'		=> 'PHP version is too low',
	'php_version_too_low_comment'	=> 'For normal functioning Discuz! requires for more new version of PHP',
	'mbstring'			=> 'MBstring Library',//'MBstring 库',
	'ext_info'			=> 'Additionally you can install many interesting and usefull plugins and templates from the Cloud Application Center:',//'另外，你可以从云计算应用中心的许多有趣的和有用的插件和模板安装：',//'另外，你可以從雲計算應用中心的許多有趣的和有用的插件和模板安裝：',
//---------------------------------------------------------------

);

$msglang = array(
	'config_nonexistence' => 'سىزنىڭ config.inc.php ھۆججىتىڭىزنى تاپالمىدى، داۋاملاشتۇرۇشقا بولمايدۇ، دەرھال FTP ئارقىلىق بۇ ھۆججەتنى چىقىرىپ، ئاندىن داۋاملاشتۇرۇڭ.',
);
