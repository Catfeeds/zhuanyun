<?php
/**
 * 物流系统：货币管理
 */

/*货币管理页面：页面提示信息*/
$_LANG['engrave_money_manage_tip'] = '默认货币只能为人民币！请勿更改为其它货币。删除或取消人民币的设定可能导致系统运费计算、结算出错。';
$_LANG['engrave_money_add_tip'] = '请勿在系统已上线运行，并且已有订单后再次修改默认货币！以免导致系统计算混乱。系统只允许有一种货币设为默认，且其兑换比例固定为1。';


/*货币管理页面：页面列表信息*/
$_LANG['currecy_Id']='编号';
$_LANG['currecy_Name']='货币名称';
$_LANG['currecy_Code']='货币代码';
$_LANG['currecy_Symbol']='符号';
$_LANG['currecy_ExchageRate']='兑换比率';
$_LANG['currecy_IsDefault']='默认';

/*货币管理页面：页面货币的添加*/
$_LANG['Name'] = '货币名称：';
$_LANG['IsDefault'] = '默认币种';
$_LANG['Code'] = '代码：';
$_LANG['Symbol'] = '货币符号：';
$_LANG['ExchageRate'] = '兑换比率：';

/*
 *
* 货币管理页面---添加货币提示
*/
$_LANG['continue_add_currecy']='继续添加货币';
$_LANG['back_currecy_list']='返回货币列表';
$_LANG['save_success']='操作成功';
// $_LANG['remove_card_success'] = '已经成功删除了 %d 个充值卡。';

$_LANG['js_languages']['currencyname_not_null'] = '货币名称不能为空。';
$_LANG['js_languages']['currencycode_not_null'] = '货币代码不能为空。';
$_LANG['js_languages']['currencysymbol_not_null'] = '货币符号不能为空。';
$_LANG['js_languages']['import_exchagerate_error'] = '货币汇率输入有误。';

?>