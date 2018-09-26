<?php



/**

 * UTSOFT 权限对照表

 * ============================================================================

 *版权所有

 * 网站地址:

 * ----------------------------------------------------------------------------

 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和

 * 使用；不允许对程序代码以任何形式任何目的的再发布。

 * ============================================================================

 * $Author: sunxiaodong $

 * $Id: inc_priv.php 15503 2008-12-24 09:22:45Z sunxiaodong $

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



//商品管理权限

    $purview['01_goods_list']        = array('goods_manage', 'remove_back');

    $purview['02_goods_add']         = 'goods_manage';

    $purview['03_category_list']     = array('cat_manage', 'cat_drop');   //分类添加、分类转移和删除

    $purview['05_comment_manage']    = 'comment_priv';

    $purview['06_goods_brand_list']  = 'brand_manage';

    $purview['08_goods_type']        = 'attr_manage';   //商品属性

    $purview['11_goods_trash']       = array('goods_manage', 'remove_back');

    $purview['12_batch_pic']         = 'picture_batch';

    $purview['13_batch_add']         = 'goods_batch';

    $purview['14_goods_export']      = 'goods_export';

    $purview['15_batch_edit']        = 'goods_batch';

    $purview['16_goods_script']      = 'gen_goods_script';

    $purview['17_tag_manage']        = 'tag_manage';

    $purview['50_virtual_card_list'] = 'virualcard';

    $purview['51_virtual_card_add']  = 'virualcard';

    $purview['52_virtual_card_change'] = 'virualcard';

    $purview['goods_auto']           = 'goods_auto';



//促销管理权限

    $purview['02_snatch_list']       = 'snatch_manage';

    $purview['04_bonustype_list']    = 'bonus_manage';

    $purview['06_pack_list']         = 'pack';

    $purview['07_card_list']         = 'card_manage';

    $purview['08_group_buy']         = 'group_by';

    $purview['09_topic']             = 'topic_manage';

    $purview['10_auction']           = 'auction';

    $purview['12_favourable']        = 'favourable';

    $purview['13_wholesale']         = 'whole_sale';

    $purview['14_package_list']      = 'package_manage';

//  $purview['02_snatch_list']       = 'gift_manage';  //赠品管理

    $purview['15_exchange_goods']    = 'exchange_goods';  //赠品管理



//文章管理权限

    $purview['02_articlecat_list']   = 'article_cat';

    $purview['03_article_list']      = 'article_manage';

    $purview['article_auto']         = 'article_auto';

    $purview['vote_list']            = 'vote_priv';



//权限管理



//商店设置权限

    $purview['01_shop_config']       = 'shop_config';

    $purview['shop_authorized']       = 'shop_authorized';

    $purview['shp_webcollect']            = 'webcollect_manage';

    $purview['02_payment_list']      = 'payment';

    $purview['03_shipping_list']     = array('ship_manage','shiparea_manage');

    $purview['04_mail_settings']     = 'shop_config';

    $purview['05_area_list']         = 'area_manage';

    $purview['07_cron_schcron']      = 'cron';

    $purview['08_friendlink_list']   = 'friendlink';

    $purview['sitemap']              = 'sitemap';

    $purview['check_file_priv']      = 'file_priv';

    $purview['captcha_manage']       = 'shop_config';

    $purview['file_check']           = 'file_check';

    $purview['navigator']            = 'navigator';

    $purview['flashplay']            = 'flash_manage';

    $purview['ucenter_setup']        = 'integrate_users';

    $purview['021_reg_fields']       = 'reg_fields';



//广告管理

    $purview['z_clicks_stats']       = 'ad_manage';

    $purview['ad_position']          = 'ad_manage';

    $purview['ad_list']              = 'ad_manage';



//订单管理权限

    $purview['02_order_list']        = 'order_view';

    $purview['03_order_query']       = 'order_view';

    $purview['04_merge_order']       = 'order_os_edit';

    $purview['05_edit_order_print']  = 'order_os_edit';

    $purview['06_undispose_booking'] = 'booking';

    $purview['08_add_order']         = 'order_edit';

    $purview['09_delivery_order']    = 'delivery_view';

    $purview['10_back_order']        = 'back_view';



//报表统计权限

    $purview['flow_stats']           = 'client_flow_stats';

    $purview['report_guest']         = 'client_flow_stats';

    $purview['report_users']         = 'client_flow_stats';

    $purview['visit_buy_per']        = 'client_flow_stats';

    $purview['searchengine_stats']   = 'client_flow_stats';

    $purview['report_order']         = 'sale_order_stats';

    $purview['report_sell']          = 'sale_order_stats';

    $purview['sale_list']            = 'sale_order_stats';

    $purview['sell_stats']           = 'sale_order_stats';





//模板管理

    $purview['02_template_select']   = 'template_select';

    $purview['03_template_setup']    = 'template_setup';

    $purview['04_template_library']  = 'library_manage';

    $purview['05_edit_languages']    = 'lang_edit';

    $purview['06_template_backup']   = 'backup_setting';

    $purview['mail_template_manage'] = 'mail_template';





//短信管理

    $purview['02_sms_my_info']       = 'my_info';

    $purview['03_sms_send']          = 'sms_send';

    $purview['04_sms_charge']        = 'sms_charge';

    $purview['05_sms_send_history']  = 'send_history';

    $purview['06_sms_charge_history']= 'charge_history';



//推荐管理

    $purview['affiliate']            = 'affiliate';

    $purview['affiliate_ck']         = 'affiliate_ck';



//邮件群发管理

    $purview['attention_list']       = 'attention_list';

    $purview['email_list']           = 'email_list';

    $purview['magazine_list']        = 'magazine_list';

    $purview['view_sendlist']        = 'view_sendlist';

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

    /*包裹管理*/

$engrave_purview['0101_package_list'] = array('package_manage','package_remove');

$engrave_purview['0102_add_waybill'] = 'package_manage';

$engrave_purview['0103_has_expired'] = 'has_expired';

$engrave_purview['0104_been_destroyed'] = 'destroyed';

$engrave_purview['0105_fast_storage'] = 'fast_storage';

$engrave_purview['0106_services'] = 'services';

$engrave_purview['0107_bulk_import'] = 'bulk_import';

$engrave_purview['0108_edit_services'] = 'services';



/*订单管理*/

$engrave_purview['0201_all_orders'] = 'order_manage';

$engrave_purview['0202_untreated'] = 'untreated';

$engrave_purview['0203_been_picking'] = 'been_picking';

$engrave_purview['0204_pending_payment'] = 'pending_payment';

$engrave_purview['0205_pending_shipped'] = 'pending_shipped';

$engrave_purview['0206_shipped'] = 'shipped';

$engrave_purview['0207_been_completed'] = 'been_completed';

$engrave_purview['0208_deleted'] = 'deleted';

$engrave_purview['0209_tracking_manage'] = array('tracking_manage','tracking_remove');

$engrave_purview['0214_waybill_tracking'] = 'tracking_manage';

$engrave_purview['0210_evalua_manage'] = 'evalua_manage';

$engrave_purview['0211_order_tracking'] = 'order_tracking';

$engrave_purview['0212_batch_tracking'] = 'batch_tracking';

$engrave_purview['0213_waybill_manage'] = array('waybill_manage','waybill_remove');



/*内容管理*/

$engrave_purview['0301_article_manage'] = array('article_manage','article_remove');

$engrave_purview['0302_add_article'] = 'article_manage';

// $engrave_purview['0303_course_manage'] = array('course_manage','course_remove');

// $engrave_purview['0304_add_course'] = 'course_manage';

// $engrave_purview['0305_product_manage'] = array('product_manage','product_remove');

// $engrave_purview['0306_add_product'] = 'product_manage';



/*频道管理*/

$engrave_purview['0401_channel_list'] = array('channel_manage','channel_remove');

$engrave_purview['0402_add_channel'] = 'channel_manage';



/*购物指南*/

$engrave_purview['0501_site_classification'] = array('classifi_manage','classifi_remove');

$engrave_purview['0502_add_classification'] = 'classifi_manage';

$engrave_purview['0503_site_manage'] = array('site_manage','site_remove');

$engrave_purview['0504_add_site'] = 'site_manage';



/*会员管理 临时删除*/

// $engrave_purview['0601_manage_group_settings'] = array('group_manage','group_remove');

// $engrave_purview['0602_add_manage_group_settings'] = 'group_manage';

// $engrave_purview['0603_administrator_manage'] = array('administrator_manage','administrator_remove');

// $engrave_purview['0604_add_administrator_manage'] = 'administrator_manage';



//$engrave_purview['0605_member_manage'] = array('member_manage','member_remove');

//$engrave_purview['0606_add_member'] = 'member_manage';

//$engrave_purview['0607_prepaidcash'] = array('prepaidcash','prepaidcash_remove');

//$engrave_purview['0608_add_prepaidcash'] = 'prepaidcash';

//$engrave_purview['0609_user_group_manage'] = array('user_group_manage','user_group_remove');

//$engrave_purview['0610_add_user_group'] = 'user_group_manage';

//$engrave_purview['0611_presented'] = 'presented';



/*物流系统*/

$engrave_purview['0701_money_manage'] = array('money_manage','money_remove');

$engrave_purview['0702_add_money'] = 'money_manage';

$engrave_purview['0703_distribution_area'] = array('dis_area_manage','dis_area_remove');

$engrave_purview['0704_add_distribution_area'] = 'dis_area_manage';

$engrave_purview['0705_shipping'] = array('shipping','shipping_remove');

$engrave_purview['0706_add_shipping'] = 'shipping';

$engrave_purview['0707_payment_meth'] = array('payment','payment_remove');

$engrave_purview['0708_add_payment'] = 'payment';

$engrave_purview['0709_receive_warehouse'] = array('receive_warehouse','receive_remove');

$engrave_purview['0710_add_receware'] = 'receive_warehouse';

$engrave_purview['0711_value_services'] = array('value_services','services_remove');

$engrave_purview['0712_add_services'] = 'value_services';

$engrave_purview['0713_collabor_logistics'] = array('collabor_logistics','logistice_remove');

$engrave_purview['0714_add_logistics'] = 'collabor_logistics';

$engrave_purview['0715_waybill_module'] = array('waybill_module','module_remove');

$engrave_purview['0716_module_add'] = 'waybill_module';

$engrave_purview['0717_dictionary_manage'] = array('dictionary_manage','dictionary_remove');

$engrave_purview['0718_dictionary_add'] = 'dictionary_manage';

$engrave_purview['0724_ratetax_table'] = array('ratetax_table','ratetax_remove');

$engrave_purview['0725_add_ratetax_table'] = 'ratetax_table';

$engrave_purview['0727_shipping_price'] = array('shipping','shipping_remove');

$engrave_purview['0728_add_shipping_price'] = array('shipping','shipping_remove');

$engrave_purview['0729_shipping_price_group'] = array('shipping','shipping_remove');





/*营销管理*/

$engrave_purview['0801_link_manage'] = array('link_manage','link_remove');

$engrave_purview['0802_add_link'] = 'link_manage';

$engrave_purview['0803_focus_map_manage'] = array('focus_map_manage','focus_map_remove');

$engrave_purview['0804_add_focus_map'] = 'focus_map_manage';

$engrave_purview['0805_focus_map_code'] = array('map_code_manage','map_code_remove');

$engrave_purview['0806_add_code'] = 'map_code_manage';

$engrave_purview['0807_pre_recharge_card'] = array('pre_card_manage','pre_card_remove');

$engrave_purview['0808_add_recharge_card'] = 'pre_card_manage';

$engrave_purview['0809_coupon'] = array('coupon_manage','coupon_remove');

$engrave_purview['0810_add_coupon'] = 'coupon_manage';

$engrave_purview['0811_issued_coupons'] = array('issued_coupons','issued_remove');

$engrave_purview['0812_have_coupons'] = 'issued_coupons';



/*报表统计*/

$engrave_purview['0901_order_statistic'] = 'order_statistic';

$engrave_purview['0902_records_consumption'] = 'records_consump';

$engrave_purview['0903_waybill_statistics'] = 'waybill_statistics';



/*咨询管理*/

$engrave_purview['1001_faq'] = 'faq';

$engrave_purview['1002_complaint'] = 'complaint';



/*帮助中心*/

$engrave_purview['1101_help_classification'] = array('help_class_manage','help_class_remove');

$engrave_purview['1102_add_classification'] = 'help_class_manage';

$engrave_purview['1103_help_list'] = array('help_list_manage','help_list_remove');

$engrave_purview['1104_add_content'] = 'help_list_manage';



/*系统管理*/

$engrave_purview['1201_system_settings'] = 'system_settings';

$engrave_purview['1202_data_backup'] = 'data_backup';

$engrave_purview['1203_menu_manage'] = array('menu_manage','menu_remove');

$engrave_purview['1204_add_menu'] = 'menu_manage';

$engrave_purview['1205_short_message_interface'] = array('short_message_inter','interface_remove');

$engrave_purview['1206_add_interface'] = 'short_message_inter';

$engrave_purview['1207_email_template'] = 'email_template';

$engrave_purview['1208_short_message_template'] = 'short_mess_temp';



/*微信平台*/
$engrave_purview['1300_add_menus'] = 'wechatmeun_manage';
$engrave_purview['1301_meun_manage'] = array('wechatmeun_manage','wechatmeun_remove');

$engrave_purview['1302_add_menu'] = 'wechatmeun_manage';



/*版权信息*/

$engrave_purview['1401_official_website'] = 'official_website';

$engrave_purview['1402_contact_author'] = 'contact_author';

/////////////////////////////////////////////////////////////////////////////////////////////////

//

//物流转运

//

//////////////////////////////////////////////////////////////////////////////////////////////////



/////////////////////////////////////////////////////////////////////////////////////////////////

//

//会员

//

//////////////////////////////////////////////////////////////////////////////////////////////////



//权限管理

$engrave_member_purview['admin_logs']           = array('logs_manage', 'logs_drop');

$engrave_member_purview['admin_list']           = array('admin_manage', 'admin_drop', 'allot_priv');

$engrave_member_purview['agency_list']          = 'agency_manage';

$engrave_member_purview['suppliers_list']          = 'suppliers_manage'; // 供货商

$engrave_member_purview['admin_role']             = 'role_manage';



//会员管理权限06_list_integrate

$engrave_member_purview['01_users_list']        = 'users_manage';

$engrave_member_purview['02_users_add']         = 'users_manage';

$engrave_member_purview['03_user_rank_list']    = 'user_rank';

$engrave_member_purview['05_list_integrate']    = 'integrate_users';

$engrave_member_purview['06_user_presented']       = 'user_presented';

$engrave_member_purview['06_user_account']      = 'surplus_manage';

$engrave_member_purview['07_user_account_manage'] = 'account_manage';

$engrave_member_purview['08_user_address_manage'] = 'address_manage';

//数据库管理

$engrave_member_purview['02_db_manage']         = array('db_backup', 'db_renew');

$engrave_member_purview['03_db_optimize']       = 'db_optimize';

$engrave_member_purview['04_sql_query']         = 'sql_query';

$engrave_member_purview['convert']              = 'convert';



/////////////////////////////////////////////////////////////////////////////////////////////////

//

//会员

//

//////////////////////////////////////////////////////////////////////////////////////////////////

?>