<?php
/**
 * ENGRAVE
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: common.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */
/*系统*/
$_LANG['cp_home'] = '铭东商城';
/* 用户登录语言项 */
$_LANG['empty_username_password'] = '对不起，您必须完整填写用户名和密码。';
$_LANG['shot_message'] = "短消息";
$_LANG['system_message'] = '系统信息';
$_LANG['query_info'] = "共执行 %d 个查询，用时 %f 秒，在线 %d 人";
$_LANG['memory_info'] = '，占用内存 %0.3f MB';

$_LANG['gzip_enabled'] = '，Gzip 已启用';
$_LANG['gzip_disabled'] = '，Gzip 已禁用';
$_LANG['enable_gzip'] = '启用';
$_LANG['loading'] = '正在处理您的请求...';
$_LANG['cfg_name']['enable_gzip']     = '是否启用Gzip模式';
$_LANG['cfg_desc']['enable_gzip'] = '启用Gzip模式可压缩发送页面大小，加快网页传输。需要php支持Gzip。如果已经用Apache等对页面进行Gzip压缩，请禁止该功能。';
$_LANG['cfg_range']['enable_gzip']['1'] = '启用';
$_LANG['cfg_range']['enable_gzip']['0'] = '禁用';
$_LANG['auto_redirection'] = '如果您不做出选择，将在 <span id="spanSeconds">5</span> 秒后跳转到第一个链接地址。';
/* 公共语言项 */
$_LANG['sys_msg'] = '系统提示';
$_LANG['timezone'] = '时区设置:';
/*公共操作*/
$_LANG['remove'] = '删除';
$_LANG['edit'] = '编辑';
$_LANG['view'] = '查看';
$_LANG['drop_confirm']='确定删除吗？删除后数据无法恢复！';

/* TAG */
$_LANG['button_submit_tag'] = '添加我的标记';
$_LANG['tag_exists'] = '您已经为该商品添加过一个标记，请不要重复提交.';
$_LANG['tag_cloud'] = '标签云';
$_LANG['tag_anonymous'] = '对不起，只有注册会员并且正常登录以后才能提交标记。';
$_LANG['tag_cloud_desc'] = '标签云（Tag cloud）是用以表示一个网站中的内容标签。 标签（tag、关键词）是一种更为灵活、有趣的商品分类方式，您可以为每个商品添加一个或多个标签，那么可以通过点击这个标签查看商品其他会员提交的与您的标签一样的商品,能够让您使用最快的方式查找某一个标签的所有网店商品。比方说点击“红色”这个标签，就可以打开这样的一个页面，显示所有的以“红色” 为标签的网店商品';

/* AJAX 相关 */
$_LANG['invalid_captcha'] = '对不起，您输入的验证码不正确。';

/* 分页 */
$_LANG['total_records'] = '总计 ';
$_LANG['total_pages'] = '个记录分为';
$_LANG['page_size'] = '页，每页';
$_LANG['page_current'] = '页当前第';
$_LANG['page_first'] = '第一页';
$_LANG['page_prev'] = '上一页';
$_LANG['page_next'] = '下一页';
$_LANG['page_last'] = '最末页';
$_LANG['admin_home'] = '起始页';

/* 分页排序 */
$_LANG['btn_display'] = '显示方式';
$_LANG['record_count']='10';
/*系统信息*/
$_LANG['system_welcome']='欢迎访问';
$_LANG['system_name']='铭东转运管理系统！';
/*后台发布系统路径*/
$_LANG['thebackgrounddistributionsystem']='';
/*当前位置*/
$_LANG['home']='首页';
$_LANG['member_account']='会员中心';
$_LANG['list_news']='新闻中心';
$_LANG['list_news_article']='文章';
$_LANG['list_about']='关于我们';
$_LANG['list_news']='新闻中心';
$_LANG['list_cost']='费用估算';
$_LANG['list_charge']='收费说明';
$_LANG['list_embargo']='禁运列表';
$_LANG['list_trans']='转运流程';
$_LANG['list_faq']='FAQ';

$_LANG['member']['member_packagemanage']='包裹管理';
$_LANG['member']['member_package_forecast']='到货预报';

$_LANG['member']['member_promptlydelivery']='到货即发';
$_LANG['member']['member_stock']='我的包裹';
$_LANG['member']['member_forecast_detail']='预报详细';
$_LANG['member']['member_question']='问题件';
$_LANG['member']['member_question_detail']='问题件详细';

$_LANG['member']['member_ordermanage']='订单管理';
$_LANG['member']['member_submit']='提交发货';
$_LANG['member']['member_current']='当前订单';
$_LANG['member']['member_history']='历史订单';

$_LANG['member']['member_valueaddedservice']='增值服务';
$_LANG['member']['member_appreciation']='提交增值服务';
$_LANG['member']['member_myapp']='我的增值服务';
$_LANG['member_myapp']['member_service_detail']='服务详细';
$_LANG['member']['member_myacc']='我的账户';
$_LANG['member']['member_jpy']='日元账户';

$_LANG['member']['member_financialmanagement']='财务管理';
$_LANG['member']['member_onlinerecharge']='在线充值';
$_LANG['member']['member_widthdraws']='提现申请';
$_LANG['member']['member_preferential']='我的优惠券';
$_LANG['member']['member_integral']='我的积分';
$_LANG['member']['member_FAD']='我的推广';
$_LANG['member']['member_myinfo']='我的信息';

$_LANG['member']['member_datummanagement']='资料管理';
$_LANG['member']['member_account']='账户总览';
$_LANG['member']['member_datum']='资料修改';

$_LANG['member']['member_revisepass']='修改密码';
$_LANG['member']['member_address']='收货地址维护';
$_LANG['member']['member_address_add']='添加收货地址';
$_LANG['member']['member_address_edit']='编辑收货地址';

$_LANG['member']['member_clientservicecenter']='客服中心';
$_LANG['member']['member_insider']='有问必答';
$_LANG['member']['member_contactway']='联系方式';
$_LANG['member']['member_complaint']='投诉理赔';
/**
 * javascript
 */
$_LANG['js_languages']['loading_error'] = '数据加载失败';
