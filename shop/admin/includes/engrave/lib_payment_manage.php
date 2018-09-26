<?php
/**
 *  网站分类 相关函数
 * ============================================================================
 * * 版权所有
 * 网站地址:
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: zxp $
 * $Id: $
 */

/**
 * 获得网站分类列表
 *
 * @access  public
 * @params  integer $isdelete
 * @params  integer $real_goods
 * @params  integer $conditions
 * @return  array
 */
function engrave_payment_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('payment');
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT PaymentId,PaymentName " .
			" FROM " . $GLOBALS['engrave']->table('payment') .
			" WHERE IsDeletePayment = 0 " .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	//set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('payment_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
/**
 * 获取支付方式管理
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_payment($PaymentId='')
{
	$conditions='';
	if($PaymentId!='')
	{
		$conditions=$conditions." and PaymentId='".$PaymentId."'";
	}
	$sql = "select PaymentId,InterfaceId,PaymentName,MerchantCode,Email,SecretKey,IsPercent,Charge,Description,SortId,IsDeletePayment " .
			" FROM " . $GLOBALS['engrave']->table('payment').
			" where IsDeletePayment=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}
/**
 * 添加支付方式
 * @param unknown $payment：支付方式对象
 */
function engrave_payment_insert($payment)
{
	$sql="insert into " . $GLOBALS['engrave']->table('payment') .
	"(InterfaceId,PaymentName,MerchantCode,Email,SecretKey,IsPercent,Charge,Description,Partner,SortId,IsDeletePayment) values('" .
	$payment['InterfaceId']."','".$payment['PaymentName']."','".$payment['MerchantCode']."','".$payment['Email']."','".$payment['SecretKey'].
	"','".$payment['Partner'].
	"','".$payment['IsPercent']."','".$payment['Charge']."','".$payment['Description']."','".$payment['SortId']."','".$payment['IsDeletePayment']."')";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 编辑支付方式
 * @param unknown $payment：支付方式对象
 * @param unknown $PaymentId：支付方式ID
 */
function engrave_payment_update($payment,$PaymentId)
{
	$sql="update ".$GLOBALS['engrave']->table('payment').
	//"set InterfaceId='".$payment['InterfaceId'].
	//"',PaymentName='".$payment['PaymentName'].
	" set PaymentName='".$payment['PaymentName'].
	"',MerchantCode='".$payment['MerchantCode'].
	//"',Partner='".$payment['Partner'].
	"',Email='".$payment['Email'].
	"',SecretKey='".$payment['SecretKey'].
	"',IsPercent='".$payment['IsPercent'].
	"',Charge='".$payment['Charge'].
	"',Description='".$payment['Description'].
	"',SortId='".$payment['SortId'].
	"' where PaymentId='".$PaymentId."'";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 支付方式删除
 * @param number $IsDeletePayment：删除标识
 * @param unknown $PaymentId：支付方式ID
 */
function engrave_payment_delete($IsDeletePayment=1,$PaymentId)
{
	$sql="update ".$GLOBALS['engrave']->table('payment').
	" set IsDeletePayment='".$IsDeletePayment."' where PaymentId='".
	$PaymentId."'";

	return  $GLOBALS['engrave_db']->query($sql);
}
/**
 * 取得接口类型列表
 * @return array 接口类型id => name
 */
function engrave_interface_list()
{
	$sql = 'SELECT InterfaceId, InterfaceName FROM ' . $GLOBALS['engrave']->table('paymentinterface') . ' ORDER BY InterfaceId';
	$res = $GLOBALS['engrave_db']->getAll($sql);

	$interface_list = array();
	foreach ($res AS $row)
	{
		$interface_list[$row['InterfaceId']] = addslashes($row['InterfaceName']);
	}
	
	return $interface_list;
}
/**
 * 获得接口的LOGO
 * @return InterfaceLogo 图片的LOGO
 */
function engrave_get_interfacelogo($interfaceId)
{
	$sql = "SELECT InterfaceLogo " .
			" FROM " . $GLOBALS['engrave']->table('paymentinterface') .
			" WHERE InterfaceId = '" . $interfaceId . "'";
	$InterfaceLogo = $GLOBALS['engrave_db']->getOne($sql);
	return $InterfaceLogo;
}
?>