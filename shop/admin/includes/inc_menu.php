<?php

/**
 * UTSOFT 管理中心菜单数组
 * ============================================================================
 *版权所有
 * 网站地址:
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
  * $Author: zxp $
 * $Id: inc_menu.php 17217 2011-01-19 06:29:08Z liubo $
*/

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}
//////////////////////////////////////////////////////////////////////////////////////////////////
//
//商城
//
//////////////////////////////////////////////////////////////////////////////////////////////////

$modules['02_cat_and_goods']['01_goods_list']       = 'goods.php?act=list';         // 商品列表
$modules['02_cat_and_goods']['02_goods_add']        = 'goods.php?act=add';          // 添加商品
$modules['02_cat_and_goods']['03_category_list']    = 'category.php?act=list';
$modules['02_cat_and_goods']['05_comment_manage']   = 'comment_manage.php?act=list';
$modules['02_cat_and_goods']['06_goods_brand_list'] = 'brand.php?act=list';
$modules['02_cat_and_goods']['08_goods_type']       = 'goods_type.php?act=manage';
$modules['02_cat_and_goods']['11_goods_trash']      = 'goods.php?act=trash';        // 商品回收站
$modules['02_cat_and_goods']['12_batch_pic']        = 'picture_batch.php';
$modules['02_cat_and_goods']['13_batch_add']        = 'goods_batch.php?act=add';    // 商品批量上传
$modules['02_cat_and_goods']['14_goods_export']     = 'goods_export.php?act=goods_export';
$modules['02_cat_and_goods']['15_batch_edit']       = 'goods_batch.php?act=select'; // 商品批量修改
$modules['02_cat_and_goods']['16_goods_script']     = 'gen_goods_script.php?act=setup';
$modules['02_cat_and_goods']['17_tag_manage']       = 'tag_manage.php?act=list';
$modules['02_cat_and_goods']['50_virtual_card_list']   = 'goods.php?act=list&extension_code=virtual_card';
$modules['02_cat_and_goods']['51_virtual_card_add']    = 'goods.php?act=add&extension_code=virtual_card';
$modules['02_cat_and_goods']['52_virtual_card_change'] = 'virtual_card.php?act=change';
$modules['02_cat_and_goods']['goods_auto']             = 'goods_auto.php?act=list';


$modules['03_promotion']['02_snatch_list']          = 'snatch.php?act=list';
$modules['03_promotion']['04_bonustype_list']       = 'bonus.php?act=list';
$modules['03_promotion']['06_pack_list']            = 'pack.php?act=list';
$modules['03_promotion']['07_card_list']            = 'card.php?act=list';
$modules['03_promotion']['08_group_buy']            = 'group_buy.php?act=list';
$modules['03_promotion']['09_topic']                = 'topic.php?act=list';
$modules['03_promotion']['10_auction']              = 'auction.php?act=list';
$modules['03_promotion']['12_favourable']           = 'favourable.php?act=list';
$modules['03_promotion']['13_wholesale']            = 'wholesale.php?act=list';
$modules['03_promotion']['14_package_list']         = 'package.php?act=list';
//$modules['03_promotion']['ebao_commend']            = 'ebao_commend.php?act=list';
$modules['03_promotion']['15_exchange_goods']       = 'exchange_goods.php?act=list';


$modules['04_order']['02_order_list']               = 'order.php?act=list';
$modules['04_order']['03_order_query']              = 'order.php?act=order_query';
$modules['04_order']['04_merge_order']              = 'order.php?act=merge';
$modules['04_order']['05_edit_order_print']         = 'order.php?act=templates';
$modules['04_order']['06_undispose_booking']        = 'goods_booking.php?act=list_all';
//$modules['04_order']['07_repay_application']        = 'repay.php?act=list_all';
$modules['04_order']['08_add_order']                = 'order.php?act=add';
$modules['04_order']['09_delivery_order']           = 'order.php?act=delivery_list';
$modules['04_order']['10_back_order']               = 'order.php?act=back_list';

$modules['05_banner']['ad_position']                = 'ad_position.php?act=list';
$modules['05_banner']['ad_list']                    = 'ads.php?act=list';

$modules['06_stats']['flow_stats']                  = 'flow_stats.php?act=view';
$modules['06_stats']['searchengine_stats']          = 'searchengine_stats.php?act=view';
$modules['06_stats']['z_clicks_stats']              = 'adsense.php?act=list';
$modules['06_stats']['report_guest']                = 'guest_stats.php?act=list';
$modules['06_stats']['report_order']                = 'order_stats.php?act=list';
$modules['06_stats']['report_sell']                 = 'sale_general.php?act=list';
$modules['06_stats']['sale_list']                   = 'sale_list.php?act=list';
$modules['06_stats']['sell_stats']                  = 'sale_order.php?act=goods_num';
$modules['06_stats']['report_users']                = 'users_order.php?act=order_num';
$modules['06_stats']['visit_buy_per']               = 'visit_sold.php?act=list';

$modules['07_content']['03_article_list']           = 'article.php?act=list';
$modules['07_content']['02_articlecat_list']        = 'articlecat.php?act=list';
$modules['07_content']['vote_list']                 = 'vote.php?act=list';
$modules['07_content']['article_auto']              = 'article_auto.php?act=list';
//$modules['07_content']['shop_help']                 = 'shophelp.php?act=list_cat';
//$modules['07_content']['shop_info']                 = 'shopinfo.php?act=list';
//系统管理

$modules['11_system']['01_shop_config']             = 'shop_config.php?act=list_edit';
$modules['11_system']['shop_authorized']             = 'license.php?act=list_edit';
$modules['11_system']['02_payment_list']            = 'payment.php?act=list';
$modules['11_system']['03_shipping_list']           = 'shipping.php?act=list';
$modules['11_system']['04_mail_settings']           = 'shop_config.php?act=mail_settings';
$modules['11_system']['05_area_list']               = 'area_manage.php?act=list';
//$modules['11_system']['06_plugins']                 = 'plugins.php?act=list';
$modules['11_system']['07_cron_schcron']            = 'cron.php?act=list';
$modules['11_system']['08_friendlink_list']         = 'friend_link.php?act=list';
$modules['11_system']['sitemap']                    = 'sitemap.php';
$modules['11_system']['check_file_priv']            = 'check_file_priv.php?act=check';
$modules['11_system']['captcha_manage']             = 'captcha_manage.php?act=main';
$modules['11_system']['ucenter_setup']              = 'integrate.php?act=setup&code=ucenter';
$modules['11_system']['flashplay']                  = 'flashplay.php?act=list';
$modules['11_system']['navigator']                  = 'navigator.php?act=list';
$modules['11_system']['file_check']                 = 'filecheck.php';
//$modules['11_system']['fckfile_manage']             = 'fckfile_manage.php?act=list';
$modules['11_system']['021_reg_fields']             = 'reg_fields.php?act=list';


$modules['12_template']['02_template_select']       = 'template.php?act=list';
$modules['12_template']['03_template_setup']        = 'template.php?act=setup';
$modules['12_template']['04_template_library']      = 'template.php?act=library';
$modules['12_template']['05_edit_languages']        = 'edit_languages.php?act=list';
$modules['12_template']['06_template_backup']       = 'template.php?act=backup_setting';
$modules['12_template']['mail_template_manage']     = 'mail_template.php?act=list';

//$modules['14_sms']['02_sms_my_info']                = 'sms.php?act=display_my_info';
$modules['14_sms']['03_sms_send']                   = 'sms.php?act=display_send_ui';
//$modules['14_sms']['04_sms_charge']                 = 'sms.php?act=display_charge_ui';
//$modules['14_sms']['05_sms_send_history']           = 'sms.php?act=display_send_history_ui';
//$modules['14_sms']['06_sms_charge_history']         = 'sms.php?act=display_charge_history_ui';

$modules['15_rec']['affiliate']                     = 'affiliate.php?act=list';
$modules['15_rec']['affiliate_ck']                  = 'affiliate_ck.php?act=list';

$modules['16_email_manage']['email_list']           = 'email_list.php?act=list';
$modules['16_email_manage']['magazine_list']        = 'magazine_list.php?act=list';
$modules['16_email_manage']['attention_list']       = 'attention_list.php?act=list';
$modules['16_email_manage']['view_sendlist']        = 'view_sendlist.php?act=list';

//////////////////////////////////////////////////////////////////////////////////////////////////
//
//商城
//
//////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////
//
//物流转运
//
//////////////////////////////////////////////////////////////////////////////////////////////////

/*运单管理*/
$engrave_modules['01_package_manage']['0101_package_list']        =  'engrave_package_list.php?act=list'; //包裹列表
$engrave_modules['01_package_manage']['0102_add_waybill']         = 'engrave_package_list.php?act=add'; //添加运单（包裹）
$engrave_modules['01_package_manage']['0103_has_expired']         = 'engrave_package_list.php?act=expiredlist'; //已过期
$engrave_modules['01_package_manage']['0104_been_destroyed']      = 'engrave_package_list.php?act=destroyedlist'; //已删除
$engrave_modules['01_package_manage']['0105_fast_storage']        = 'engrave_fast_storage.php?act=add'; //快速入库
$engrave_modules['01_package_manage']['0106_services']            = 'engrave_added_services.php?act=list'; //增值服务
$engrave_modules['01_package_manage']['0107_bulk_import']         = 'engrave_bulk_import.php?act=import'; //批量导入

/*订单管理*/
$engrave_modules['02_order_manage']['0201_all_orders']          = 'engrave_all_orders.php?act=list'; //所有订单
//$engrave_modules['02_order_manage']['0202_special_orders']      = 'engrave_all_special_orders.php'; //专线订单 
$engrave_modules['02_order_manage']['0202_untreated']           = 'engrave_all_orders.php?act=untreated'; //未处理

$engrave_modules['02_order_manage']['all_dispatch']           = 'engrave_all_dispatch.php'; //发货单管理 x票货

$engrave_modules['02_order_manage']['0203_been_picking']     = 'engrave_all_orders.php?act=pick'; //已配送
$engrave_modules['02_order_manage']['0204_pending_payment']     = 'engrave_all_orders.php?act=payment_ready'; //待付款
$engrave_modules['02_order_manage']['0205_pending_shipped']             = 'engrave_all_orders.php?act=ship'; //待发货
$engrave_modules['02_order_manage']['0206_shipped']       = 'engrave_all_orders.php?act=shipped'; //已发货
$engrave_modules['02_order_manage']['0207_been_completed']      = 'engrave_all_orders.php?act=completed'; //已完成
$engrave_modules['02_order_manage']['0208_deleted']      = 'engrave_all_orders.php?act=deleted'; //已删除
$engrave_modules['02_order_manage']['0209_tracking_manage']      = 'engrave_tracking_manage.php?act=list'; //跟踪管理
$engrave_modules['02_order_manage']['0214_waybill_tracking']    = 'engrave_tracking_manage.php?act=add'; //运单跟踪
$engrave_modules['02_order_manage']['0210_evalua_manage']  = 'engrave_evalua_manage.php?act=list'; //评价 管理
$engrave_modules['02_order_manage']['0211_order_tracking']     = 'engrave_order_tracking.php?act=add'; //订单跟踪
$engrave_modules['02_order_manage']['0212_batch_tracking']      = 'engrave_batch_tracking.php?act=add'; //批量跟踪
$engrave_modules['02_order_manage']['0213_waybill_manage']      = 'engrave_waybill_manage.php?act=list'; //运单管理


/*内容管理*/
$engrave_modules['03_content_manage']['0301_article_manage']    = 'engrave_article_manage.php?act=list'; //文章管理
$engrave_modules['03_content_manage']['0302_add_article']       = 'engrave_article_manage.php?act=add'; //添加文章
// $engrave_modules['03_content_manage']['0303_course_manage']     = 'engrave_course_manage.php?act=list'; //教程管理
// $engrave_modules['03_content_manage']['0304_add_course']        = 'engrave_add_course.php?act=add'; //添加教程
// $engrave_modules['03_content_manage']['0305_product_manage']    = 'engrave_product_manage.php?act=list'; //产品管理
// $engrave_modules['03_content_manage']['0306_add_product']       = 'engrave_add_product.php?act=add'; //产品添加

/*频道管理*/
$engrave_modules['04_channel_manage']['0401_channel_list']      = 'engrave_channel_list.php?act=list'; //频道列表
$engrave_modules['04_channel_manage']['0402_add_channel']       = 'engrave_channel_list.php?act=add'; //添加频道

/*购物指南*/
$engrave_modules['05_shopping_directory']['0501_site_classification']  = 'engrave_site_classification.php?act=list'; //网站分类
$engrave_modules['05_shopping_directory']['0502_add_classification']   = 'engrave_site_classification.php?act=add'; //添加分类
$engrave_modules['05_shopping_directory']['0503_site_manage']          = 'engrave_site_manage.php?act=list';  //站点管理
$engrave_modules['05_shopping_directory']['0504_add_site']             = 'engrave_site_manage.php?act=add'; //添加站点

/*物流系统 货币管理、添加货币、配送地区管理、添加配送地区、线路管理、添加线路*/
$engrave_modules['07_logistics_system']['0701_money_manage']             = 'engrave_money_manage.php?act=list'; //货币管理
$engrave_modules['07_logistics_system']['0702_add_money']                = 'engrave_money_manage.php?act=add'; //添加货币
$engrave_modules['07_logistics_system']['0703_distribution_area'] = 'engrave_distribution_area.php?act=list'; //配送地区管理
$engrave_modules['07_logistics_system']['0704_add_distribution_area']    = 'engrave_distribution_area.php?act=add';
$engrave_modules['07_logistics_system']['0705_shipping'] = 'engrave_shipping.php?act=list'; //线路管理
$engrave_modules['07_logistics_system']['0706_add_shipping'] = 'engrave_shipping.php?act=add'; //添加线路
$engrave_modules['07_logistics_system']['0707_payment_meth'] = 'engrave_payment_manage.php?act=list';//支付方式管理
$engrave_modules['07_logistics_system']['0708_add_payment'] = 'engrave_payment_manage.php?act=add';//添加支付方式
$engrave_modules['07_logistics_system']['0709_receive_warehouse'] = 'engrave_receive_warehouse.php?act=list'; //收货仓库管理
$engrave_modules['07_logistics_system']['0710_add_receware'] = 'engrave_receive_warehouse.php?act=add'; //添加收货仓库
$engrave_modules['07_logistics_system']['0710_warehouse_service'] = 'engrave_value_services.php?act=warehouse'; //仓库对应的增值服务


$engrave_modules['07_logistics_system']['0711_value_services'] = 'engrave_value_services.php?act=list'; //增值服务
$engrave_modules['07_logistics_system']['0712_add_services'] = 'engrave_value_services.php?act=add'; //增加服务
$engrave_modules['07_logistics_system']['0713_collabor_logistics'] = 'engrave_collabor_logistics.php?act=list'; //合作物流
$engrave_modules['07_logistics_system']['0714_add_logistics'] = 'engrave_collabor_logistics.php?act=add'; //添加物流
$engrave_modules['07_logistics_system']['0715_waybill_module'] = 'engrave_waybill_module.php?act=list';
$engrave_modules['07_logistics_system']['0716_module_add'] = 'engrave_waybill_module.php?act=add';
$engrave_modules['07_logistics_system']['0717_dictionary_manage'] = 'engrave_dictionary_manage.php?act=list';
$engrave_modules['07_logistics_system']['0718_dictionary_add'] = 'engrave_dictionary_manage.php?act=add';
$engrave_modules['07_logistics_system']['0724_ratetax_table'] = 'engrave_ratetax_table.php?act=list';
$engrave_modules['07_logistics_system']['0725_add_ratetax_table'] = 'engrave_ratetax_table.php?act=add';

$engrave_modules['07_logistics_system']['0729_shipping_price_group'] = 'engrave_shipping_laddervalue_group.php?act=list';
$engrave_modules['07_logistics_system']['0727_shipping_price'] = 'engrave_shipping_laddervalue.php?act=list';
$engrave_modules['07_logistics_system']['0728_add_shipping_price'] = 'engrave_shipping_laddervalue.php?act=add';

$engrave_modules['07_logistics_system']['0729_country'] = 'engrave_country.php?act=list';
//$engrave_modules['07_logistics_system']['0729_add_country'] = 'engrave_country.php?act=add';

$engrave_modules['07_logistics_system']['0730_country_partition'] = 'engrave_country_partition.php?act=list';
//$engrave_modules['07_logistics_system']['0730_add_country_partition'] = 'engrave_country_partition.php?act=add';

$engrave_modules['07_logistics_system']['0731_shipment'] = 'engrave_shipment.php?act=list';
$engrave_modules['07_logistics_system']['0731_shipment_oilfee'] = 'engrave_shipment_oilfee.php?act=list';


$engrave_modules['07_logistics_system']['0731_shipment_price'] = 'engrave_shipment_price.php?act=list';
$engrave_modules['07_logistics_system']['0732_level_port'] = 'engrave_leave_port.php?act=list';
$engrave_modules['07_logistics_system']['0733_arrival_port'] = 'engrave_arrival_port.php?act=list';
$engrave_modules['07_logistics_system']['0734_airline'] = 'engrave_airline.php?act=list';
$engrave_modules['07_logistics_system']['0735_airline_flight'] = 'engrave_airline_flight.php?act=list';
$engrave_modules['07_logistics_system']['0736_airline_price_template'] = 'engrave_airline_price_template.php?act=list';

/*营销管理*/
//$engrave_modules['08_marketing_manage']['0801_link_manage']              = 'engrave_link_manage.php?act=list'; //链接管理
//$engrave_modules['08_marketing_manage']['0802_add_link']                 = 'engrave_add_link.php?act=add'; //添加链接
$engrave_modules['08_marketing_manage']['0803_focus_map_manage']         = 'engrave_focus_map_manage.php?act=list'; //焦点图管理
$engrave_modules['08_marketing_manage']['0804_add_focus_map']            = 'engrave_focus_map_manage.php?act=add'; //添加图片
//$engrave_modules['08_marketing_manage']['0805_focus_map_code']           = 'engrave_focus_map_code.php?act=list'; //焦点图代码
//$engrave_modules['08_marketing_manage']['0806_add_code']                 = 'engrave_add_code.php?act=add'; //添加代码
$engrave_modules['08_marketing_manage']['0807_pre_recharge_card']        = 'engrave_pre_recharge_card.php?act=list'; //添加充值卡
$engrave_modules['08_marketing_manage']['0808_add_recharge_card']        = 'engrave_pre_recharge_card.php?act=add';
$engrave_modules['08_marketing_manage']['0809_coupon']                   = 'engrave_coupon_manage.php?act=list'; //优惠券
$engrave_modules['08_marketing_manage']['0810_add_coupon']               = 'engrave_coupon_manage.php?act=add'; //添加优惠券
$engrave_modules['08_marketing_manage']['0811_issued_coupons']           = 'engrave_issued_coupons.php?act=list';//已发优惠券
$engrave_modules['08_marketing_manage']['0812_have_coupons']                  = 'engrave_issued_coupons.php?act=add';//发放优惠券

/*报表统计*/
$engrave_modules['09_report_statistics']['0901_order_statistic']         = 'engrave_order_statistic.php?act=list'; //订单统计 
$engrave_modules['09_report_statistics']['0902_records_consumption']     = 'engrave_records_consumption.php?act=list'; //消费记录
$engrave_modules['09_report_statistics']['0903_waybill_statistics']      = 'engrave_waybill_statistics.php?act=list';

$engrave_modules['finance_manage']['invoice'] = 'invoice.php?act=list'; //发票管理
$engrave_modules['finance_manage']['income']  = 'income.php?act=list'; //收入管理
$engrave_modules['finance_manage']['income_month']  = 'income_month.php?act=list'; //收入月度统计
$engrave_modules['finance_manage']['cost']  = 'cost.php?act=list'; //成本管理
$engrave_modules['finance_manage']['cost_month']  = 'cost_month.php?act=list'; //收入月度统计

/*咨询管理*/
$engrave_modules['10_consul_manage']['1001_faq']              = 'engrave_faq.php?act=list'; //有问必答
$engrave_modules['10_consul_manage']['1002_complaint']        = 'engrave_complaint.php?act=list'; //投诉理赔

/*帮助中心*/
$engrave_modules['11_help_center']['1101_help_classification'] = 'engrave_help_classification.php?act=help'; //帮助分类
$engrave_modules['11_help_center']['1102_add_classification']  = 'engrave_add_classification.php?act=add'; //添加分类
$engrave_modules['11_help_center']['1103_help_list']           = 'engrave_help_list.php?act=list'; //帮助列表
$engrave_modules['11_help_center']['1104_add_content']         = 'engrave_add_content.php?act=add'; //添加内容

/*系统管理*/
$engrave_modules['12_system_manage']['1201_system_settings']         = 'engrave_system_settings.php?act=set'; //系统设置
//$engrave_modules['12_system_manage']['1202_data_backup']             = 'engrave_data_backup.php?act=backup'; //数据备份
//$engrave_modules['12_system_manage']['1203_menu_manage']             = 'engrave_menu_manage.php?act=list'; //菜单管理
//$engrave_modules['12_system_manage']['1204_add_menu']                = 'engrave_add_menu.php?act=add'; //添加菜单
$engrave_modules['12_system_manage']['1205_short_message_interface'] = 'engrave_short_message_interface.php?act=list'; //短信接口
$engrave_modules['12_system_manage']['1206_add_interface']           = 'engrave_add_interface.php?act=add'; //添加接口
$engrave_modules['12_system_manage']['1207_email_template']          = 'engrave_emailtemplate.php?act=list'; //邮件模版
$engrave_modules['12_system_manage']['1208_short_message_template']  = 'engrave_short_message_template.php?act=temp'; //短信模版

/*微信平台*/
$engrave_modules['13_system_manage']['1300_meun_mana']                = 'engrave_jisuan_manage.php?act=list'; //添加菜单
$engrave_modules['13_wechat_platform']['1301_meun_manage']           = 'engrave_meun_manage.php?act=list'; //菜单管理
$engrave_modules['13_wechat_platform']['1302_add_menu']              = 'engrave_add_menu.php?act=add'; //添加菜单

/*版权信息*/
//$engrave_modules['14_copyright_information']['1401_official_website']      = 'engrave_official_website.php'; //官方网站
//$engrave_modules['14_copyright_information']['1402_contact_author']        = 'engrave_contact_author.php'; //联系作者
//////////////////////////////////////////////////////////////////////////////////////////////////
//
//物流转运
//
//////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////
//
//会员:1、会员管理；2、权限管理
//
//////////////////////////////////////////////////////////////////////////////////////////////////
//权限管理
$engrave_member_modules['10_priv_admin']['admin_logs']             = 'admin_logs.php?act=list';
$engrave_member_modules['10_priv_admin']['admin_list']             = 'privilege.php?act=list';
$engrave_member_modules['10_priv_admin']['admin_role']             = 'role.php?act=list';
$engrave_member_modules['10_priv_admin']['agency_list']            = 'agency.php?act=list';
$engrave_member_modules['10_priv_admin']['suppliers_list']         = 'suppliers.php?act=list'; // 供货商
//会员管理
$engrave_member_modules['08_members']['01_users_list']             = 'users.php?act=list';
$engrave_member_modules['08_members']['02_users_add']              = 'users.php?act=add';
$engrave_member_modules['08_members']['03_user_rank_list']         = 'user_rank.php?act=list';
$engrave_member_modules['08_members']['04_user_presented']         = 'user_presented.php?act=add';//赠送积分
$engrave_member_modules['08_members']['05_unreply_msg']            = 'user_msg.php?act=list_all';
$engrave_member_modules['08_members']['06_user_account']           = 'user_account.php?act=list';
$engrave_member_modules['08_members']['07_user_account_manage']    = 'user_account_manage.php?act=list';
$engrave_member_modules['08_members']['08_user_address_manage']    = 'engrave_user_address_manage.php?act=list';//收货地址维护
//数据库管理
$engrave_member_modules['13_backup']['02_db_manage']               = 'database.php?act=backup';
$engrave_member_modules['13_backup']['03_db_optimize']             = 'database.php?act=optimize';
$engrave_member_modules['13_backup']['04_sql_query']               = 'sql.php?act=main';
//$modules['13_backup']['05_synchronous']             = 'integrate.php?act=sync';
$engrave_member_modules['13_backup']['convert']                    = 'convert.php?act=main';
//////////////////////////////////////////////////////////////////////////////////////////////////
//
//会员
//
//////////////////////////////////////////////////////////////////////////////////////////////////
?>
