<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_categorylist.php by Valery Votintsev, codersclub.org
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'categorylist_fids'		=> 'Dans le Forum',  //  '所在版块'
	'categorylist_fids_comment'	=> 'R&#233;glage permet de demander de participer &#224; des postes au nouveau forum, vous pouvez maintenir enfonc&#233;e la touche CTRL choix multiples, Choisir tout ou Effacer Toutes les limites ne sont pas',  //  '设置允许参与新帖调用的版块, 可以按住 CTRL 多选, 全选或全不选均为不做限制'
	'categorylist_startrow'		=> 'Nombre initial de lignes de donn&#233;es',  //  '起始数据行数'
	'categorylist_startrow_comment'	=> 'Pour la premi&#232;re s&#233;rie de lignes de donn&#233;es, entrez la valeur 0 sp&#233;cifiques de la premi&#232;re ligne et ainsi de suite',  //  '如需设定起始的数据行数, 请输入具体数值, 0 为从第一行开始, 以此类推'
	'categorylist_showitems'	=> 'Afficher les donn&#233;es du nombre',  // '显示数据条数' 
	'categorylist_showitems_comment'	=> 'D&#233;finition d\'un th&#232;me sur le nombre d\'entr&#233;es affich&#233;es, d&#233;fini comme un entier sup&#233;rieur &#224; 0',  //  '设置一次显示的主题条目数, 请设置为大于 0 的整数'
	'categorylist_titlelength'		=> 'Nbres. Max. de titre en Octets',  //  '标题最大字节数'
	'categorylist_titlelength_comment'	=> 'D&#233;fini lorsque le titre est plus long que le r&#233;glage, si le titre r&#233;duit automatiquement le nombre d\'octets dans le jeu, 0 n\'est pas automatiquement r&#233;duite',  //  '设置当标题长度超过本设定时, 是否将标题自动缩减到本设定中的字节数, 0 为不自动缩减'
	'categorylist_fnamelength'		=> 'Nom du Forum Titre qui contient le Nbres. Max. d\'octets',  //  '标题最大字节数包含版块名称'
	'categorylist_fnamelength_comment'	=> 'D&#233;finit le titre de la longueur est la longueur du nom du forum o&#249; le compte avec',  //  '设置标题长度是否将所在版块名称的长度一同计算在内'
	'categorylist_summarylength'		=> 'Sujet contenu du texte quelque peu court',  //  '主题简短内容文字数'
	'categorylist_summarylength_comment'	=> 'D&#233;finissez le contenu texte d\'un peu de sujets courts, utilisez la valeur par d&#233;faut de 0 &#224; 255',  //   '设置主题简短内容的文字数, 0 为使用默认值 255'
	'categorylist_tids'		=> 'Pr&#233;cisez le Sujet',  //  '指定主题'
	'categorylist_tids_comment'	=> 'Pour sp&#233;cifier l\'affichage th&#232;me impos&#233; tid, plus d\'un Identifiant Svp. utilisez une virgule "," s&#233;par&#233;s Remarque:. Blanc est sans filtrage',  //  '设置要指定显示的主题 tid , 多个 tid 请用半角逗号“,”隔开.注意: 留空为不进行任何过滤'
	'categorylist_keyword'		=> 'Titre parMot-cl&#233;',  //  '标题关键字'
	'categorylist_keyword_comment'	=> 'R&#233;glez le titre contient des mots-cl&#233;s Remarque: vierge est sans filtrage; mots-cl&#233;s peuvent utiliser le joker *; plusieurs mots cl&#233;s, des espaces disponibles, ou et de connexion, telles que Win32 et Unix; correspondre &#224; un certain nombre de cl&#233;s certains de ces mots peuvent &#234;tre utilis&#233;s | ou OR connexion, comme win32 ou unix',  // '设置标题包含的关键字.注意: 留空为不进行任何过滤; 关键字中可使用通配符 *; 匹配多个关键字全部, 可用空格或 AND 连接.如 win32 AND unix; 匹配多个关键字其中部分, 可用 | 或 OR 连接.如 win32 OR unix' 
	'categorylist_sortids'		=> 'Les Renseignements Classifi&#233;s',  //  '分类信息'
	'categorylist_sortids_comment'	=> 'D&#233;finissez une Cat&#233;gorie de Sujet Sp&#233;cifique. Remarque: Tout Choisir ou Tout Effacer ont &#233;t&#233; sans aucun Sujet',  //  '设置特定分类的主题.注意: 全选或全不选均为不进行任何过滤'
	'categorylist_styleids'		=> 'Mod&#232;les de Classification',  //  '分类模板'
	'categorylist_styleids_comment'	=> 'Les renseignements classifi&#233;s dans le fond, qui d&#233;finissent le mod&#232;le correspondant',  //  '在后台对应的分类信息里面设置模板'
	'categorylist_styleids_style1'	=> 'Style 1',  //  '样式1'
	'categorylist_styleids_style2'	=> 'Style 2',  //  '样式2'
	'categorylist_styleids_style3'	=> 'Style 3',  //  '样式3' 
	'categorylist_styleids_style4'	=> 'Style 4',  //  '样式4' 
	'categorylist_styleids_style5'	=> 'Style 5',  //  '样式5' 
	'categorylist_typeids_all'	=> 'Tout les Classements par Sujet',  // '全部的主题分类' 
	'categorylist_categoryids'	=> 'Les Renseignements Classifi&#233;s',  // '分类信息' 
	'categorylist_categoryids_comment'	=> 'R&#233;gler une cat&#233;gorie sp&#233;cifique de l\'information soumise.Remarque: Choisir tout ou Effacer tout ont &#233;t&#233; sans aucun Sujet',  //  '设置特定分类信息的主题.注意: 全选或全不选均为不进行任何过滤'
	'categorylist_categoryids_all'	=> 'Toutes les Informations Classifi&#233;es',  // '全部的分类信息' 
	'categorylist_digest'		=> 'Liste De Contacts Filtration',  //  '精华主题过滤'
	'categorylist_digest_comment'	=> 'D&#233;finissez un domaine sp&#233;cifique. Remarque: Choisir Tout ou Effacer Tout qui ont &#233;t&#233; sans aucun Sujet',  //  '设置特定的主题范围.注意: 全选或全不选均为不进行任何过滤'
	'categorylist_digest_0'		=> 'Sujet Hot',  // '普通主题' 
	'categorylist_digest_1'		=> 'Sommaire I',  //  '精华 I'
	'categorylist_digest_2'		=> 'Sommaire II',  // '精华 II'  
	'categorylist_digest_3'		=> 'Sommaire III',  //  '精华 III'
	'categorylist_stick'		=> 'Filtres Sujet &#233;pingl&#233;',  //  '置顶主题过滤'
	'categorylist_stick_comment'	=> 'D&#233;finissez un domaine sp&#233;cifique. Remarque: Choisir Tout ou Effacer Tout qui ont &#233;t&#233; sans aucun Sujet',  //  '设置特定的主题范围.注意: 全选或全不选均为不进行任何过滤'
	'categorylist_stick_0'		=> 'Sujet Hot',  //  '普通主题'
	'categorylist_stick_1'		=> 'Scotch&#233; I',  //  '置顶 I'
	'categorylist_stick_2'		=> 'Scotch&#233; II',  //  '置顶 II'
	'categorylist_stick_3'		=> 'Scotch&#233; III',  //  '置顶 III'
	'categorylist_special'		=> 'Filtre Th&#232;me Sp&#233;cial',  //  '特殊主题过滤'
	'categorylist_special_comment'	=> 'D&#233;finissez un domaine sp&#233;cifique. Remarque: Choisir Tout ou Effacer Tout qui ont &#233;t&#233; sans aucun Sujet',  //  '设置特定的主题范围.注意: 全选或全不选均为不进行任何过滤'
	'categorylist_special_1'	=> 'Th&#232;me Sondage',  //  '投票主题'
	'categorylist_special_2'	=> 'Les Biens Envoy.',  //  '商品主题'
	'categorylist_special_3'	=> 'R&#233;compense Rubrique',  //  '悬赏主题'
	'categorylist_special_4'	=> 'Rubrique Activit&#233;',  //  '活动主题'
	'categorylist_special_5'	=> 'Rubrique de D&#233;bat',  //  '辩论主题'
	'categorylist_special_0'	=> 'Sujet Hot',  //  '普通主题'
	'categorylist_special_reward'	=> 'Filtre par sujet R&#233;compense',  //  '悬赏主题过滤'
	'categorylist_special_reward_comment'	=> 'D&#233;finissez le Th&#232;me d\'un Type Particulier de R&#233;comp.',  //  '设置特定类型的悬赏主题'
	'categorylist_special_reward_0'	=> 'Tout',  // '全部' 
	'categorylist_special_reward_1'	=> 'R&#233;solus',  // '已解决' 
	'categorylist_special_reward_2'	=> 'Non R&#233;solu',  //  '未解决'
	'categorylist_recommend'	=> 'Rubrique Sujet recommand&#233; ',  //  '推荐主题过滤'
	'categorylist_recommend_comment'	=> 'D&#233;finissez si pour afficher seulement les sujets recommand&#233;s',  //  '设置是否只显示推荐的主题'
	'categorylist_orderby'			=> 'Mode Tri Rubrique',  //  '主题排序方式'
	'categorylist_orderby_comment'		=> 'Param&#232;tres pour lesquels le champ du sujet ou la mani&#232;re de trier',  //  '设置以哪一字段或方式对主题进行排序'
	'categorylist_orderby_lastpost'		=> 'Tri selon le temps Dernier message inversion',  //  '按最后回复时间倒序排序'
	'categorylist_orderby_dateline'		=> 'Ordre inverse en fonction du temps',  //  '按发布时间倒序排序'
	'categorylist_orderby_replies'		=> 'Tri par r&#233;ponses inversion',  //  '按回复数倒序排序'
	'categorylist_orderby_views'		=> 'Tri invers&#233; par Vues',  //  '按浏览次数倒序排序'
	'categorylist_orderby_heats'		=> 'Ordre inverse en Redu',  //  '按热度倒序排序'
	'categorylist_orderby_recommends'	=> 'Tri inversion par l\'&#233;valuation Rubrique',  //  '按主题评价倒序排序'
	'categorylist_orderby_hourviews'	=> 'Vues dans le d&#233;lai sp&#233;cifi&#233; dans l\'ordre inverse',  // '按指定时间内浏览次数倒序排序' 
	'categorylist_orderby_todayviews'	=> 'Parcourir par nombre de jours dans l\'ordre inverse',  //  '按当天浏览次数倒序排序'
	'categorylist_orderby_weekviews'	=> 'Vues cette semaine dans l\'ordre inverse en fonction',  //  '按本周浏览次数倒序排序'
	'categorylist_orderby_monthviews'	=> 'Inverser L\'ordre par les Vues Mois',  // '按当月浏览次数倒序排序' 
	'categorylist_orderby_hours'		=> 'De temps sp&#233;cifi&#233;e (heures)',  //  '指定时间(小时)'
	'categorylist_orderby_hours_comment'	=> 'Vues dans le d&#233;lai sp&#233;cifi&#233; dans un ordre inverse de la valeur temps',  //  '指定时间内浏览次数倒序排序的时间值'
);

