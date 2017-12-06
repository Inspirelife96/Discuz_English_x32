<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_misc.php by Valery Votintsev, codersclub.org
 *      Translated to Spanish by jhoxi, discuzhispano.com
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'discuz_lang'		=> 'misc',
	'contact'		=> 'Contacts:',//'联系方式:',
	'anonymous'		=> 'Anónimo',//'匿名',
	'anonymoususer'		=> 'Anónimo',
	'guestuser'		=> 'Invitado',
	'has_expired'		=> 'Esta información ha expirado',
	'click_view'		=> 'Haga clic para ver',
	'never_expired'		=> 'Nunca caduca',
	'sort_update'		=> 'Actualización',
	'sort_upload'		=> 'Subir',
	'view_noperm'		=> 'Contenido oculto',
	'post_hidden'		=> '**** Oculto por Autor ****',//'**** 本内容被作者隐藏 ****',
	'post_banned'		=> '**** Autor fue prohibido o suprimido ****',//'**** 作者被禁止或删除 内容自动屏蔽 ****',
	'post_single_banned'	=> '**** Este post ha sido prohibido ****',//'**** 该帖被屏蔽 ****',
	'message_ishidden_hiddenreplies'	=> 'Este post sólo es visible para el autor del tema',//'此帖仅作者可见',
	'post_reply_quote'		=> '{author} respondió a las {time}',//'{author} 发表于 {time}',
	'post_edit'			=> "[i=s] Editado por {editor} en {edittime} [/i]\n\n",//'[i=s] 本帖最后由 {editor} 于 {edittime} 编辑 [/i]\n\n',
	'post_edit_regexp'		=> '/^\[i=s\] Editado por .*? en .*? \[\/i\]\n\n/s',//'/^\[i=s\] 本帖最后由 .*? 于 .*? 编辑 \[\/i\]\n\n/s',
	'post_edithtml'			=> '[i=s] Editado por {editor} en {edittime} [/i]<br /><br />',//'[i=s] 本帖最后由 {editor} 于 {edittime} 编辑 [/i]<br /><br />',
	'post_edithtml_regexp'		=> '/^\[i=s\] Editado por .*? en .*? \[\/i\]&lt;br \/&gt;&lt;br \/&gt;/s',//'/^\[i=s\] 本帖最后由 .*? 于 .*? 编辑 \[\/i\]&lt;br \/&gt;&lt;br \/&gt;/s',
	'post_editnobbcode'		=> '[ Post editado por {editor} en {edittime} ]\n\n',//'[ 本帖最后由 {editor} 于 {edittime} 编辑 ]\n\n',
	'post_editnobbcode_regexp'	=> '/^\[ Post editado por .*? en .*? \]\n\n/s',//'/^\[ 本帖最后由 .*? 于 .*? 编辑 \]\n\n/s',
	'post_reply'			=> 'Respuesta',//'回复',
	'post_thread'			=> 'Agregar Tema',//'的帖子',

	'price'				=> 'Precio',//'售价',
	'pay_view'			=> 'Registro de pagos',//'记录',
	'attachment_buy'		=> 'Comprar',//'购买',

	'post_trade_yuan'		=> 'USD',//'元',
	'post_trade_seller'		=> 'Vendedor',//'卖家',
	'post_trade_name'		=> 'Nombre del producto',//'商品名称',
	'post_trade_price'		=> 'Precio',//'商品价格',
	'post_trade_quality'		=> 'Calidad',//'商品成色',
	'post_trade_locus'		=> 'Ubicación',//'商品所在地',
	'post_trade_transport_type'	=> 'Entrega de los impuestos pagados por',//'物流方式',
	'post_trade_transport_seller'	=> 'Vendedor',//'卖家承担运费',
	'post_trade_transport_buyer'	=> 'Comprador',//'买家承担运费',
	'post_trade_transport_mail'	=> 'Correo postal',//'平邮',
	'post_trade_transport_express'	=> 'Correo expreso',//'快递',
	'post_trade_transport_virtual'	=> 'Virtual o no entrega',//'虚拟物品或无需邮递',
	'post_trade_transport_physical'	=> 'CR (Contra Reembolso)',//'买家收到货物后直接支付给物流公司',
//vot	'post_trade_locus'		=> 'Ubicación',//'所在地点',
	'post_trade_description'	=> 'Descripción del producto',//'商品描述',
	'post_trade_pm_subject'		=> '[Negociar]',//'[议价]',
	'post_trade_pm_buynum'		=> 'Comprar cantidad',//'购买数量',
	'post_trade_pm_wishprice'	=> 'Precio estimado',//'我期望的价格是',
	'post_trade_pm_reason'		=> 'Motivo de la negociación',//'我议价的理由是',
	'postappend_content'		=> 'Add post',//'补充内容',
	'payment_unit'			=> 'USD',//'元',

	'attach'			=> 'Adjuntar',//'附件',
	'attach_pay'			=> 'Adjuntar pagado',//'收费附件',
	'attach_credits_policy'		=> 'Ver la política de pago',//'查看积分策略说明',
	'attach_img'			=> 'Adjuntar imágenes',//'图片附件',
	'attach_readperm'		=> 'Leer permisos',//'阅读权限',
	'attach_img_zoom'		=> 'Pulsa aquí para ver la imagen completa en una nueva ventana.\\nCTRL + rueda del ratón para acercar o alejar.',//'点击在新窗口查看全图\\nCTRL+鼠标滚轮放大或缩小',
	'attach_img_thumb'		=> 'Pulsa aquí para ver la imagen completa en una nueva ventana',//'点击在新窗口查看全图',
	'attach_downloads'		=> 'Descargas',//'下载次数',

	'post_trade_transport'		=> 'Transporte tarifa',//'邮费',
//vot	'post_trade_transport_mail'	=> 'Correo postal',//'平邮',
	'post_trade_quality'		=> 'Tipo de producto',//'商品成色',
	'post_trade_quality_new'	=> 'Nuevo',//'全新',
	'post_trade_quality_secondhand'	=> 'de segunda mano',//'二手',

	'trade_unstart'			=> '<font color="gray">Espere para el procesamiento</font>',//'<font color="gray">未生效的交易</font>',
	'trade_waitbuyerpay'		=> 'Esperar el pago',//'等待买家付款',
	'trade_waitsellerconfirm'	=> 'Espere a que el vendedor confirme el orden.',//'交易已创建，等待卖家确认',
	'trade_sysconfirmpay'		=> 'Espere a que el vendedor confirme el pago',//'确认买家付款中，暂勿发货',
	'trade_waitsellersend'		=> 'Pagado. Esperar por el envío del vendedor',//'买家已付款，等待卖家发货',
	'trade_waitbuyerconfirm'	=> 'Enviado. Espere a que el comprador confirme',//'卖家已发货，买家确认中',
	'trade_syspayseller'		=> 'Entregado. Espere a que el sistema de pagos para el vendedor',//'买家确认收到货，等待支付宝打款给卖家',
	'trade_finished'		=> '<font color="green">Venta terminado con éxito</font>',//'<font color="green">交易成功结束</font>',
	'trade_closed'			=> '<font color="gray">Venta cerrada (no ha terminado)</font>',//'<font color="gray">交易中途关闭（未完成）</font>',
	'trade_waitselleragree'		=> 'Espere a que el vendedor acepte la devolución',//'等待卖家同意退款',
	'trade_sellerrefusebuyer'	=> 'El vendedor se negó a las condiciones del comprador, a la espera de comprador de modificar sus condiciones',//'卖家拒绝买家条件，等待买家修改条件',
	'trade_waitbuyerreturn'		=> 'Vendedor aprobado reembolso, a la espera de volver a los productos comprador',//'卖家同意退款，等待买家退货',
	'trade_waitsellerconfirmgoods'	=> 'Espere a que el vendedor recibe los productos reembolsados',//'等待卖家收货',
	'trade_waitalipayrefund'	=> 'Ambos han acordado, esperar a que el reembolso de dinero del sistema de pago',//'双方已经一致，等待支付宝退款',
	'trade_alipaycheck'		=> 'Espere que el sistema de pago reembolso procesado',//'支付宝处理中',
	'trade_overedrefund'		=> 'Reembolso terminado',//'结束的退款',
	'trade_refundsuccess'		=> '<font color="green">Reembolsado con éxito</font>',//'<font color="green">退款成功</font>',
	'trade_refundclosed'		=> '<font color="green">Reembolso cerrado</font>',//'<font color="green">退款关闭</font>',

	'trade_offline_1'		=> 'Transacción iniciada',//'交易单生效',
	'trade_offline_4'		=> 'He pagado ya la espera de la entrega.',//'我已付款，等待卖家发货',
	'trade_offline_5'		=> 'Me han enviado.',//'我已发货',
	'trade_offline_7'		=> 'He recibido los productos, la operación concluyó con éxito',//'我收到货，交易成功结束',
	'trade_offline_8'		=> 'Cancelar esta transacción.',//'取消此次交易',
	'trade_offline_10'		=> 'Quiero volver, esperando que el vendedor se comprometa a la devolución.',//'我要退货，等待卖家同意退款',
	'trade_offline_11'		=> 'El vendedor se negó a devolvernos.',//'卖家拒绝退款',
	'trade_offline_12'		=> 'El Vendedor se compromete a la devolución.',//'卖家同意退款',
	'trade_offline_13'		=> 'He vuelto, a la espera de que los vendedores reciban los productos.',//'我已退货，等待卖家收货',
	'trade_offline_17'		=> 'Vendedor recibió los productos devueltos, reembolsados.',//'卖家收到退货，已退款',

	'trade_message_4'		=> 'Introduzca el método de pago e información de cuenta bancaria',//'可输入付款方式、银行账号等信息',
	'trade_message_5'		=> 'Entrar en la compañía de envío, facturas y otra información',//'可输入发货公司、发货单号等信息',
	'trade_message_13'		=> 'Entrar en la compañía de envío, facturas y otra información',//'可输入发货公司、发货单号等信息',

	'credit_payment'		=> 'Puntos de recarga',//'积分充值',
	'credit_forum_payment'		=> 'Recarga de puntos foro',//'论坛积分充值',
	'credit_forum_royalty'		=> 'pagar por transacción',//'交易手续费',

	'credit_total'			=> 'Total Points',//'总积分',

	'invite_payment'		=> 'Comprar un código de invitación',
	'invite_forum_payment'		=> 'Comprar un código de invitación',
	'invite_forum_payment_unit'	=> 'pagar por unidad',
	'invite_forum_royalty'		=> 'pagar por transacción',

	'formulaperm_regdate'		=> 'Fecha de registro',//'注册时间',
	'formulaperm_regday'		=> 'Días después de registrarse',//'注册天数',
	'formulaperm_regip'		=> 'Reg IP',//'注册IP',
	'formulaperm_lastip'		=> 'Pasado IP',//'最后登录IP',
	'formulaperm_buyercredit'	=> 'Comprador tasa',//'买家信用评价',
	'formulaperm_sellercredit'	=> 'Vendedor tasa',//'卖家信用评价',
	'formulaperm_digestposts'	=> 'Digiere',//'精华帖数',
	'formulaperm_posts'		=> 'Posts',//'发帖数',
	'formulaperm_threads'		=> 'Temas',//'主题数',
	'formulaperm_oltime'		=> 'Tiempo en línea (horas)',//'在线时间(小时)',
	'formulaperm_pageviews'		=> 'Páginas vistas',//'页面浏览量',
	'formulaperm_and'		=> 'y',//'并且',
	'formulaperm_or'		=> 'o',//'或者',
	'formulaperm_extcredits'	=> 'Ext Puntos',//'自定义积分',

	'login_normal_mode'		=> 'En línea',//'在线',
	'login_switch_invisible_mode'	=> 'Cambiar al modo invisible',//'切换在线状态',
	'login_switch_normal_mode'	=> 'Cambiar al modo en línea',//'我要上线',
	'login_invisible_mode'		=> 'Invisibles',//'隐身',

	'eccredit_explain'		=> 'Explicación',//'解释',

	'google_site_0'			=> 'Buscar en la web',//'网页搜索',
	'google_site_1'			=> 'Buscar en el sitio',//'站内搜索',
	'google_sa'			=> 'Buscar',//'搜索',

	'modcp_logs_action_home'	=> 'CP Inicio',//'面板首页',
	'modcp_logs_action_moderate'	=> 'Moderar',//'审核',
	'modcp_logs_action_member'	=> 'Editar usuario',//'用户管理',
	'modcp_logs_action_forumaccess'	=> 'Permisos de usuario',//'用户权限',
	'modcp_logs_action_thread'	=> 'Administrar temas',//'主题管理',
	'modcp_logs_action_forum'	=> 'Administrar foros',//'版块管理',
	'modcp_logs_action_announcement'	=> 'Anuncios',//'公告',
	'modcp_logs_action_log'		=> 'Administrar blogs',//'管理日志',
	'modcp_logs_action_stat'	=> 'Moderar estadísticas',//'管理统计',

	'modcp_logs_action_login'	=> 'Entrar',//'登录',

	'uch_selectalbum'		=> 'Seleccionar álbum',//'请选择相册',
	'uch_noalbum'			=> 'No tiene álbums, ',//'您还没有相册，',
	'click_here'			=> 'Haga clic aquí',//'点击这里',
	'uch_createalbum'		=> ' para crear un nuevo álbum!',//'创建自己的相册吧！',

	'pm_from'		=> 'de',//'发件人',
	'pm_to'			=> 'a',//'收件人',
	'pm_date'		=> 'fecha',//'日期',

	'share_message'		=> 'Hola! Vi este tema en {$_G[setting][bbname]}, Creo que es valioso, así que lo recomiendo.\\n\\nTítulo: $thread[subject]\\nURL: [url={$threadurl}]{$threadurl}[/url]\\n\\nEspero que te guste.',//'你好！我在 {$_G[setting][bbname]} 看到了这篇帖子，认为很有价值，特推荐给你。\\n\\n$thread[subject]\\n地址 [url={$threadurl}]{$threadurl}[/url]\\n\\n希望你能喜欢。',

	'week_0'	=> 'Dom',//'星期日',
	'week_1'	=> 'Lun',//'星期一',
	'week_2'	=> 'Mar',//'星期二',
	'week_3'	=> 'Mie',//'星期三',
	'week_4'	=> 'Jue',//'星期四',
	'week_5'	=> 'Vie',//'星期五',
	'week_6'	=> 'Sab',//'星期六',

	'y_m_d'		=> 'Y-m-d',//'Y年m月d日',

	'notice_actor'		=> ', y así sucesivamente. total: $actorcount personas',//'等 $actorcount 人',

	'perms_allowvisit'		=> 'Acceder al foro',//'访问论坛',
	'perms_readaccess'		=> 'Leer permisos',//'阅读权限',
	'perms_allowviewpro'		=> 'Ver info de miembros',//'查看用户资料',
	'perms_allowinvisible'		=> 'Invisibles',//'隐身',
	'perms_allowsearch'		=> 'Utilizar Búsqueda',//'使用搜索',
	'perms_allownickname'		=> 'Permitir el uso de apodo',//'使用昵称',
	'perms_allowcstatus'		=> 'Estado personalizado',//'自定义头衔',
	'perms_allowpost'		=> 'Crear tema',//'发新话题',
	'perms_allowreply'		=> 'Responder post',//'发表回复',
	'perms_allowpostpoll'		=> 'Crear encuesta',//'发起投票',
	'perms_allowvote'		=> 'Votar encuesta',//'参与投票',
	'perms_allowpostreward'		=> 'Crear premio al tema',//'发表悬赏',
	'perms_allowpostactivity'	=> 'Aceptar',//'发表活动',
	'perms_allowpostdebate'		=> 'Crear debate',//'发表辩论',
	'perms_allowposttrade'		=> 'Crear venta',//'发表交易',
	'perms_maxsigsize'		=> 'Longitud máxima de la firma',//'最大签名长度',
	'perms_allowsigbbcode'		=> 'Usar BBCode en la firma',//'签名中使用 Discuz! 代码',
	'perms_allowsigimgcode'		=> 'Usar [img] etiqueta en la firma',//'签名中使用 [img] 代码',
	'perms_maxbiosize'		=> 'Longitud máxima de sobre mi',//'自我介绍最大长度',
	'perms_allowrecommend'		=> 'Permitir recomendar tema',//'主题评价影响值',
	'perms_allowbiobbcode'		=> 'Usar BBCode sobre mi',//'自我介绍中使用 Discuz! 代码',
	'perms_allowbioimgcode'		=> 'Usar [img] etiqueta sobre mi',//'自我介绍中使用 [img] 代码',
	'perms_allowgetattach'		=> 'Descargar/Ver adjuntado',//'下载/查看附件',
	'perms_allowgetimage'		=> 'Ver imagen',
	'perms_allowpostattach'		=> 'Subir Adjuntado',//'发布附件',
	'perms_allowpostimage'		=> 'Subir Imagen',
	'perms_allowsetattachperm'	=> 'Permiten establecer permisos del adjuntado',//'允许设置附件权限',
	'perms_maxspacesize'		=> 'Tamaño máximo del espacio',//'空间大小',
	'perms_maxattachsize'		=> 'Max adjuntar tamaño',//'单个最大附件尺寸',
	'perms_maxsizeperday'		=> 'Max adjuntar tamaño por dayatta',//'每天最大附件总尺寸',
	'perms_maxattachnum'		=> 'Número máximo de archivos adjuntos por día',//'每天最大附件数量',
//vot	'perms_allowbioimgcode'		=> 'Usar [img] etiquetar sobre mi',//'自我介绍中使用 [img] 代码',
	'perms_attachextensions'	=> 'Tipo de adjunto',//'附件类型',
	'perms_allowstickthread'	=> 'Tema pegado',//'主题置顶',
	'perms_allowdigestthread'	=> 'Digiere',//'主题精华',
	'perms_allowstickthread_value'	=> 'Pegar',//'置顶',
	'perms_allowdigestthread_value'	=> 'Digiere',//'精华',
	'perms_allowbumpthread'		=> 'Bache',//'提升主题',
	'perms_allowhighlightthread'	=> 'Destacar',//'主题高亮',
	'perms_allowrecommendthread'	=> 'Recomendar',//'主题推荐',
	'perms_allowstampthread'	=> 'Sellar',//'主题鉴定',
	'perms_allowclosethread'	=> 'Cerrar',//'主题关闭',
	'perms_allowmovethread'		=> 'Mover tema',//'主题移动',
	'perms_allowedittypethread'	=> 'Editar tipo',//'编辑主题分类',
	'perms_allowcopythread'		=> 'Copiar',//'主题复制',
	'perms_allowmergethread'	=> 'Unir',//'主题合并',
	'perms_allowsplitthread'	=> 'Dividir',//'主题分割',
	'perms_allowrepairthread'	=> 'Reparar',//'主题修复',
	'perms_allowrefund'		=> 'Reembolsar',//'强制退款',
	'perms_alloweditpoll'		=> 'Editar encuesta',//'编辑投票',
	'perms_allowremovereward'	=> 'Quitar recompensa',//'移除悬赏',
	'perms_alloweditactivity'	=> 'Editar evento',//'管理活动',
	'perms_allowedittrade'		=> 'Editar producto',//'管理商品',
	'perms_alloweditpost'		=> 'Editar post',//'编辑帖子',
	'perms_allowwarnpost'		=> 'Advertir Posts',//'警告帖子',
	'perms_allowbanpost'		=> 'ban posts',//'屏蔽帖子',
	'perms_allowdelpost'		=> 'Borrar post',//'删除帖子',
	'perms_allowviewreport'		=> 'Ver imforme',//'查看用户报告',
	'perms_allowmodpost'		=> 'Moderar posts',//'审核帖子',
	'perms_allowmoduser'		=> 'Moderar usuario',//'审核用户',
	'perms_allowbanuser'		=> 'Ban usuario',//'禁止用户',
	'perms_allowbanip'		=> 'Ban IP',//'禁止 IP',
	'perms_allowedituser'		=> 'Editar miembro',//'编辑用户',
	'perms_allowmassprune'		=> 'Borrar post carga',//'批量删帖',
	'perms_allowpostannounce'	=> 'Agregar anuncio',//'发布公告',
	'perms_disablepostctrl'		=> 'No Prohibir',//'发帖不受限制',
	'perms_allowviewip'		=> 'Ver IP',//'允许查看 IP',
	'perms_viewperm'		=> 'Ver Foro',//'浏览版块',
	'perms_postperm'		=> 'Crear Tema',//'发新话题',
	'perms_replyperm'		=> 'Responder post',//'发表回复',
	'perms_getattachperm'		=> 'Descargar/Ver adjuntado',//'下载/查看附件',
	'perms_postattachperm'		=> 'Subir Adjunto',//'上传附件',
	'perms_postimageperm'		=> 'Subir imágenes',//'上传图片',
	'perms_allowblog'		=> 'Publicar blogs',//'发表日志',
	'perms_allowdoing'		=> 'Escribir Twit',//'发表记录',
	'perms_allowupload'		=> 'Subir imagen',//'上传图片',
	'perms_allowshare'		=> 'Compartir',//'发布分享',
	'perms_allowpoke'		=> 'Enviar saludo',//'允许打招呼',
	'perms_allowfriend'		=> 'Añadir amigo',//'允许加好友',
	'perms_allowclick'		=> 'Tasa',//'允许表态',
	'perms_allowmyop'		=> 'Usar aplicaciones',//'允许使用应用',
	'perms_allowcomment'		=> 'Publicar comentario',//'发表留言/评论',
	'perms_allowstatdata'		=> 'Ver informes de datos estadísticos',//'查看统计数据报表',
	'perms_allowstat'		=> 'Ver estadísticas',//'允许查看趋势统计',
	'perms_allowpostarticle'	=> 'Publicar artículo',//'发表文章',
	'perms_raterange'		=> 'Permitir a la tasa',
	'perms_allowcommentpost'	=> 'Allow to comment',//'允许参与点评',
	'perms_allowat'			=> 'Allow the number of @name',//'允许 @ 的人数',
	'perms_allowreplycredit'	=> 'Allow to set replies reward',//'允许设置回帖奖励',
	'perms_allowposttag'		=> 'Allow to use tags',//'允许使用标签',
	'perms_allowcreatecollection'	=> 'Allow to create collections',//'允许创建淘专辑的数量',
	'perms_allowsendpm'		=> 'Permite el envío de PM',
	'perms_maximagesize'		=> 'Tamaño máximo de una sola imagen',
	'perms_allowmediacode'		=> 'Permitir el uso de código de multimedia',

	'join_topic'		=> 'Participar Tema',//'参与话题',
	'join_poll'		=> 'Votar encuesta',//'参与投票',
	'buy_trade'		=> 'Comprar producto',//'购买商品',
	'join_reward'		=> 'Ingresar Recompensa',//'参与悬赏',
	'join_activity'		=> 'Ingresar Eventos',//'参与活动',
	'join_debate'		=> 'Ingresar Debates',//'参与辩论',
	'at_invite'		=> '@name for friends',//'@我的好友',

	'lower'			=> 'menos que',//'低于',
	'higher'		=> 'mayor que',//'高于',
	'report_msg_your'	=> 'Su ',
	'report_noreward'	=> 'no castigar a los premios',
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
