<?php 
/**
 * ENGRAVE 业务逻辑：费用估算
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: charge.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */

define('IN_ENGRAVE', true);
/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
//数据访问类：线路/用户等级
require_once(ROOT_PATH . '/includes/logisticssystem/lib_shipping.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_service.php');
require_once(ROOT_PATH . '/includes/membermanage/lib_userrank.php');

if($_REQUEST['act']=='shipping')
{
	//仓库ID、目的地ID
	$warehouseid = isset($_REQUEST['warehouseid']) ? intval($_REQUEST['warehouseid']) : 0;
	$areaid = isset($_REQUEST['areaid']) ? intval($_REQUEST['areaid']) : 0;
	
	$shipping_list = engrave_shipping_list($warehouseid,$areaid);
	echo json_encode($shipping_list);
}
elseif($_REQUEST['act']=='price')
{	
	//获取会员
	$userrank_list = engrave_userrank_list();
	//根据服务类型(线路) 获取 价格
	$shippingid = isset($_REQUEST['shippingid']) ? intval($_REQUEST['shippingid']) : 0;
	$shipping = engrave_shipping_byid($shippingid);
	
	foreach($userrank_list as $key=>$val)
	{
		$userrank_list[$key]['Price']=$shipping['Price'];
		$userrank_list[$key]['AddPrice']=$shipping['AddPrice'];
	}
	$userrank_list[0]['ShippingDesc']=$shipping['ShippingDesc'];
	$userrank_list[0]['WeightUnit']=$shipping['WeightUnit'];
	$userrank_list[0]['CurrencyCode']=$shipping['CurrencyCode'];
	echo json_encode($userrank_list);
}
elseif($_REQUEST['act']=='other_serviceprice')
{
	//获取会员
	$userrank_list = engrave_userrank_list();
	//根据服务类型(线路) 获取 价格
	$warehouseid = isset($_REQUEST['warehouseid']) ? intval($_REQUEST['warehouseid']) : 0;
	$service_list = engrave_service_list_byid($warehouseid);
	echo json_encode($service_list);
}
elseif($_REQUEST['act']=='calculatorprice')
{
	//价格计算器
	//获取会员
	$userrank_list = engrave_userrank_list();
	//仓库ID、目的地ID
	$warehouseid = isset($_REQUEST['warehouseid']) ? intval($_REQUEST['warehouseid']) : 0;
	$areaid = isset($_REQUEST['areaid']) ? intval($_REQUEST['areaid']) : 0;
	$shipping_list = engrave_shipping_list($warehouseid,$areaid);
	
	foreach($shipping_list as $key=>$val)
	{
		foreach ($userrank_list as $rnkkey=>$rnkval)
		{
			$shipping_list[$key]['rankname'.$rnkkey]=$userrank_list[$rnkkey]['rank_name'];
			$shipping_list[$key]['discount'.$rnkkey]=$userrank_list[$rnkkey]['discount'];
		}
	}
	echo json_encode($shipping_list);
}
?>