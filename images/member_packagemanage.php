<?php 
/**
 * ENGRAVE （包裹管理）到货预报、库存列表、问题件
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: member_packagemanage.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */

define('IN_ENGRAVE', true);
session_start();
/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
/*语言包*/
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_packagemanage.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_forecast.php');
//数据访问类：仓库
require_once(ROOT_PATH . '/includes/logisticssystem/lib_warehouse.php');
require_once(ROOT_PATH . '/includes/packagemanagement/lib_package.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_package.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_service.php');
require_once(ROOT_PATH . '/includes/membermanage/lib_users.php');
require_once(ROOT_PATH . '/includes/member/lib_forecast.php');
require_once(ROOT_PATH . '/includes/member/lib_coupon.php');
require_once(ROOT_PATH . '/includes/commonhelper/upload_json.php');
//*********************会员信息****************************************************************
if(isset($_SESSION['username']))
{
	//根据用户ID获取用户信息
	$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
	$users = engrave_users($user_id);
	$smarty->assign('users',$users);

	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$smarty->assign('username',$username);
	$smarty->assign('user_name',$username);

	//根据用户地址ID，判断用户是否完善了注册信息
	if($users['user_isperfect'] == 0)
	{
		//获取国家
		$area_country_option = engrave_area_option(0,0);
		$smarty->assign('area_country_option',$area_country_option);
		//用户名称
		$user_name = isset($users['user_name']) ? trim($users['user_name']) : '';
		//操作：添加
		$smarty->assign('operate','insert');
		//导航
		$ur=assign_ur_here(-1,$_LANG['member']['member_datum']);
		$smarty->assign('ur_here',$ur['ur_here']);
		$smarty->display('member_datum.htm');
		return;
	}
}
else
{
	$smarty->display('member_login.htm');
	return;
}
//*********************会员信息****************************************************************
//==================到货预报==========================================================================
if($_REQUEST['act']=='warehouse')
{
	//仓库
	//获取仓库，并返回json数据
	//获取仓库ID
	$houseid=isset($_REQUEST['houseid'])?intval($_REQUEST['houseid']) : 0;
	$warehouse = engrave_warehouse_currecy($houseid);
	echo json_encode($warehouse);
}
elseif($_REQUEST['act']=='member_insert')
{
	$act=$_REQUEST['act'];
	//获取所有页面信息
	$forecast['pck_name'] =isset($_REQUEST['pck_name']) ? trim($_REQUEST['pck_name']) : "";
	$forecast['pck_warehouseid'] = isset($_REQUEST['pck_warehouseid']) ? intval($_REQUEST['pck_warehouseid']) : 0;
	$forecast['pck_expressid'] = isset($_REQUEST['pck_expressid']) ? intval($_REQUEST['pck_expressid']) : 0;
	$forecast['pck_expressnumber'] = isset($_REQUEST['pck_expressnumber']) ? trim($_REQUEST['pck_expressnumber']) : "";
	$forecast['pck_assess'] = isset($_REQUEST['pck_assess']) ? doubleval($_REQUEST['pck_assess']) : 0;
	$forecast['pck_weight'] = isset($_REQUEST['pck_weight']) ? doubleval($_REQUEST['pck_weight']) : 0;
	$forecast['pck_ordersite'] = isset($_REQUEST['pck_ordersite']) ? trim($_REQUEST['pck_ordersite']) : "";
	$forecast['pck_ordernumber'] = isset($_REQUEST['pck_ordernumber']) ? trim($_REQUEST['pck_ordernumber']) : "";
	$forecast['pck_sizelength'] = isset($_REQUEST['pck_sizelength']) ? doubleval($_REQUEST['pck_sizelength']) : 0;
	$forecast['pck_sizewidth'] = isset($_REQUEST['pck_sizewidth']) ? doubleval($_REQUEST['pck_sizewidth']) : 0;
	$forecast['pck_sizeheight'] = isset($_REQUEST['pck_sizeheight']) ? doubleval($_REQUEST['pck_sizeheight']) : 0;
	$forecast['pck_userremark'] = isset($_REQUEST['pck_userremark']) ? trim($_REQUEST['pck_userremark']) : "";
	$forecast['pck_userid'] = $_SESSION['user_id'];
	$forecast['pck_storagecode']=$_SESSION['storage_code'];
	
	forecast_insert($forecast,$engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	return;
}
//==================到货预报==========================================================================
//==================到货即发==========================================================================
elseif($_REQUEST['act']=="member_201")
{
	//到货即发---添加
	//获取所有页面信息
	$forecast['pck_name'] =isset($_REQUEST['pck_name']) ? trim($_REQUEST['pck_name']) : "";
	$forecast['pck_warehouseid'] = isset($_REQUEST['pck_warehouseid']) ? intval($_REQUEST['pck_warehouseid']) : 0;
	$forecast['pck_expressid'] = isset($_REQUEST['pck_expressid']) ? intval($_REQUEST['pck_expressid']) : 0;
	$forecast['pck_expressnumber'] = isset($_REQUEST['pck_expressnumber']) ? trim($_REQUEST['pck_expressnumber']) : "";
	$forecast['pck_assess'] = isset($_REQUEST['tb1_applyprice']) ? doubleval($_REQUEST['tb1_applyprice']) : 0;
	$forecast['pck_weight'] = isset($_REQUEST['pck_weight']) ? doubleval($_REQUEST['pck_weight']) : 0;
	$forecast['pck_ordersite'] = isset($_REQUEST['pck_ordersite']) ? trim($_REQUEST['pck_ordersite']) : "";
	$forecast['pck_ordernumber'] = isset($_REQUEST['pck_ordernumber']) ? trim($_REQUEST['pck_ordernumber']) : "";
	$forecast['pck_sizelength'] = isset($_REQUEST['pck_sizelength']) ? doubleval($_REQUEST['pck_sizelength']) : 0;
	$forecast['pck_sizewidth'] = isset($_REQUEST['pck_sizewidth']) ? doubleval($_REQUEST['pck_sizewidth']) : 0;
	$forecast['pck_sizeheight'] = isset($_REQUEST['pck_sizeheight']) ? doubleval($_REQUEST['pck_sizeheight']) : 0;
	$forecast['pck_userremark'] = isset($_REQUEST['pck_userremark']) ? trim($_REQUEST['pck_userremark']) : "";
	$forecast['pck_userid'] = $_SESSION['user_id'];
	$forecast['pck_storagecode']=$_SESSION['storage_code'];

	//分箱数量
	$boxquantity = 0;
	//订单服务类型
	$submit_order['order_servicetype'] = isset($_REQUEST['service']) ? intval($_REQUEST['service']) : 0;
	//订单服务类型名称
	$aservice = isset($_REQUEST['AService']) ? intval($_REQUEST['AService']) : 0;
	$bservice = isset($_REQUEST['BService']) ? intval($_REQUEST['BService']) : 0;
	if($submit_order['order_servicetype']!=0)
	{
		if($aservice == 0 && $bservice == 0)
		{
			echo('请至少选择合箱或者是分箱！');
		}
		else
		{
			if($aservice == 0)
			{
				$submit_order['order_modelid'] = $bservice;
				//分箱的数量
				$boxquantity = isset($_REQUEST['boxNumber']) ? intval($_REQUEST['boxNumber']) : 0;
				$boxquantity = $boxquantity + 2;
			}
			else
			{
				$submit_order['order_modelid'] = $aservice;
			}
		}
	}
	else
	{
		$submit_order['order_modelid'] = '0';
	}
	//订单号
	$ordernumberformat = $_CFG['s_ordernumberformat'];//生成的订单号格式
	$timeFormat=$_CFG['s_timeformat'];//时间格式
	$orderwaterlevel = $_CFG['s_orderwaterlevel'];//产生的位数
	$orderflowpath = $_CFG['s_orderflowpath'];//订单的支付方式
	$date = date($timeFormat);
	$right = '';
	$level_id = 0;
	for($level = 1;$level < $orderwaterlevel;$level++)
	{
	$right.=$level_id;
	}
	$right.=1;
	if($ordernumberformat == '{Time}{Number}')
	{
		$random = $date.$right;
		if(engrave_isexits_random($random) != 0)
		{
			$random = intval(engrave_roderno_max()) + 1;
		}
	}
	else
	{
		//待五成
		$random = $right.$date;
	}
	$submit_order['order_no'] = $random;
	//运单编号
	$submit_order['order_waybillno'] = '';
	//订单时间
	$submit_order['order_time'] = gmtime();
	//该订单的用户
	$submit_order['order_userid'] = intval($_SESSION['user_id']);
	//备注说明
	$submit_order['order_note'] = isset($_REQUEST['description']) ? trim($_REQUEST['description']) : "";
	//订单线路
	$submit_order['order_shippingid'] = isset($_REQUEST['shipping']) ? intval($_REQUEST['shipping']) : 0;
	//包装标记
	$submit_order['order_remark'] = isset($_REQUEST['addinformation']) ? trim($_REQUEST['addinformation']) : '';
	//收货人ID
	$submit_order['order_buyerid'] = isset($_REQUEST['tb1_delivery_address']) ? intval($_REQUEST['tb1_delivery_address']) : 0;
	//需要加固的散件数量
	$submit_order['order_fixed'] = isset($_REQUEST['UpgradePackage']) ? intval($_REQUEST['UpgradePackage']) : 0;
	//分箱数量
	$submit_order['order_boxquantity'] = $boxquantity;
	//支付方式
	$submit_order['order_paymentid'] = $orderflowpath;
	//支付状态 --默认在提交订单为已支付
	if($orderflowpath == 0)
	{
	$submit_order['order_paymentstatus'] = '1';
	$submit_order['order_paymentpath'] = '0';
	}
	else
	{
	$submit_order['order_paymentstatus'] = '0';
		$submit_order['order_paymentpath'] = isset($_REQUEST['payment']) ? intval($_REQUEST['payment']) : 2;
	}
	//退款状态--默认为未退款
	$submit_order['order_refundstatus'] = '0';
	//获取订单的总重量
	$submit_order['order_weight'] = isset($_REQUEST['pck_totalweights']) ? doubleval($_REQUEST['pck_totalweights']) : 0.00;
	//获取订单的扣款重量   默认为总重量
	$submit_order['order_deductweight'] = isset($_REQUEST['pck_totalweights']) ? doubleval($_REQUEST['pck_totalweights']) : 0.00;
	//获取订单的总长度
	$submit_order['order_sizelength'] = isset($_REQUEST['pck_totallength']) ? doubleval($_REQUEST['pck_totallength']) : 0.00;
	//获取订单的总宽度
	$submit_order['order_sizewidth'] = isset($_REQUEST['pck_totalwidth']) ? doubleval($_REQUEST['pck_totalwidth']) : 0.00;
	//获取订单的总高度
	$submit_order['order_sizeheight'] = isset($_REQUEST['pck_totalheight']) ? doubleval($_REQUEST['pck_totalheight']) : 0.00;
	//保险费用
	$submit_order['order_insurace'] = isset($_REQUEST['pck_insurancecost']) ? doubleval($_REQUEST['pck_insurancecost']) : 0.00;
	//其他操作费用
	$submit_order['order_othercost'] = isset($_REQUEST['pck_operatorcost']) ? doubleval($_REQUEST['pck_operatorcost']) : 0.00;
	//关税
	$submit_order['order_tariffcost'] = isset($_REQUEST['pck_tariffcost']) ? doubleval($_REQUEST['pck_tariffcost']) : 0.00;
	//增值服务费用
	$submit_order['order_valueservicecost'] = isset($_REQUEST['pck_valueservicecost']) ? doubleval($_REQUEST['pck_valueservicecost']) : 0.00;
	//运单费用
	$submit_order['order_waybillcost'] = isset($_REQUEST['pck_waybillcost']) ? doubleval($_REQUEST['pck_waybillcost']) : 0.00;
	//运单折扣费用
	$submit_order['order_discountcost'] = isset($_REQUEST['discount_waybillcost']) ? doubleval($_REQUEST['discount_waybillcost']) : 0.00;
	//仓储费
	$submit_order['order_warehousecost'] = isset($_REQUEST['pck_warehousecost']) ? doubleval($_REQUEST['pck_warehousecost']) : 0.00;
	//本次消费的积分
	$submit_order['order_userpoints'] = isset($_REQUEST['usePointstb']) ? intval($_REQUEST['usePointstb']) : 0;
	//是否有外箱缠绕膜
	$submit_order['order_isoutbox'] = isset($_REQUEST['oustsidebrane']) ? intval($_REQUEST['oustsidebrane']) : 0;
	//是否需要发票----默认是没有发票表示：0
	$submit_order['order_needinvoice'] = '0';
	//该运单是否发货 ----默认为未发货：0
	$submit_order['order_isdelivery'] = '0';
	//该订单默认为未关闭状态 ---- 1：已关闭  0：未关闭
	$submit_order['order_iscolsed'] = '0';
	//打印状态----0表示为打印 1表示以打印
	$submit_order['order_printstatus'] = '0';
	//是否删除
	$submit_order['order_isdelete'] = '0';
	//获得添加了几个运单
	$waybill_number = isset($_REQUEST['tablecount']) ? intval($_REQUEST['tablecount']) : 0;
	$applyprice = 0.00;
	for($i=0;$i<$waybill_number;$i++)
	{
	$tb_applyprice = "tb".($i+1)."_applyprice";
	$applyprice += isset($_REQUEST[$tb_applyprice]) ? doubleval($_REQUEST[$tb_applyprice]) : 0.00;
	}
	//物品的价格--所申报的价格
	$submit_order['order_goodsprice'] = $applyprice;
	//费用的总价格
	$pck_totalcost = isset($_REQUEST['pck_totalcost']) ? doubleval($_REQUEST['pck_totalcost']) : 0.00;
	//使用积分支付抵消的金额
	$points_paymentcost = isset($_REQUEST['pointspaymentcost']) ? doubleval($_REQUEST['pointspaymentcost']) : 0.00;
	//货币转换汇率
	$exchange_rate = isset($_REQUEST['exchangerate']) ? doubleval($_REQUEST['exchangerate']) : 1;
	//总价格--需要支付的价格
	$submit_order['order_totalprice'] = ($pck_totalcost + $applyprice) / $exchange_rate - $points_paymentcost;
	
	arrivaldelivery_insert($forecast,$submit_order,$engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	return;
}
//==================到货即发==========================================================================
//==================库存列表==========================================================================
elseif($_REQUEST['act']=='package')
{
	//库存列表
	//货运单号/订单状态/所在仓库/商品名称
	$expressnumber = isset($_REQUEST['expressnumber']) ? trim($_REQUEST['expressnumber']) : "";
	$packagesatus = isset($_REQUEST['packagesatus']) ? intval($_REQUEST['packagesatus']) : "-1";
	$warehouse = isset($_REQUEST['warehouse']) ? intval($_REQUEST['warehouse']) : "0";
	$pckg_name = isset($_REQUEST['pckg_name']) ? trim($_REQUEST['pckg_name']) : "";
	
	$startPage = isset($_REQUEST['pageNum']) ? intval($_REQUEST['pageNum']) : 0;
	$pageSize = $_CFG['page_size']; //每页显示数
	$startPage = $startPage * $pageSize;
	//获取库存
	$package_list = engrave_package_list($packagesatus,$expressnumber,$warehouse,$pckg_name,$user_id,$startPage);
	$totalPage = ceil($package_list['record_count']/$pageSize); //总页数
	$startPage = $package_list['page_count']*$pageSize;
	$arr['total'] = $package_list['record_count'];
	$arr['pageSize'] = $pageSize;
	$arr['totalPage'] = $totalPage;
	
	//获取库存
	$arr['list']=$package_list['package_list'];
	echo json_encode($arr);
}
/*库存列表:删除*/
elseif($_REQUEST['act']=='member_1202')
{
    $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
    if($id != 0)
    {
	    if (engrave_package_delete($id))
	    {
	        //库存列表
			$pck_packagestatus = isset($_REQUEST['pck_packagestatus']) ? intval($_REQUEST['pck_packagestatus']) : -1;
		
			$startPage = isset($_REQUEST['pageNum']) ? intval($_REQUEST['pageNum']) : 0;
			$pageSize = $_CFG['page_size']; //每页显示数
			$startPage = $startPage * $pageSize;
			//获取提现
			$package_list = engrave_package_list($pck_packagestatus,'',0,'',$user_id,$startPage);
			$totalPage = ceil($package_list['record_count']/$pageSize); //总页数
			$startPage = $package_list['page_count']*$pageSize;
			$arr['total'] = $package_list['record_count'];
			$arr['pageSize'] = $pageSize;
			$arr['totalPage'] = $totalPage;
			//获取充值
			$arr['list']=$package_list['package_list'];
			echo json_encode($arr);
	    }
    }
    return;
}
//==================增值服务==========================================================================
elseif($_REQUEST['act'] == 'member_1302')
{
    $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
    if($id != 0)
    {
	    if (engrave_package_delete($id))
	    {
	        //库存列表
			$pck_packagestatus = isset($_REQUEST['pck_packagestatus']) ? intval($_REQUEST['pck_packagestatus']) : -1;
		
			$startPage = isset($_REQUEST['pageNum']) ? intval($_REQUEST['pageNum']) : 0;
			$pageSize = $_CFG['page_size']; //每页显示数
			$startPage = $startPage * $pageSize;
			//获取提现
			$package_list = engrave_package_list($pck_packagestatus,'',0,'',$user_id,$startPage);
			$totalPage = ceil($package_list['record_count']/$pageSize); //总页数
			$startPage = $package_list['page_count']*$pageSize;
			$arr['total'] = $package_list['record_count'];
			$arr['pageSize'] = $pageSize;
			$arr['totalPage'] = $totalPage;
			
			//获取充值
			$arr['list']=$package_list['package_list'];
			echo json_encode($arr);
	    }
    }
    return;
}
//==================我的增值服务=======================================================================
elseif($_REQUEST['act'] == 'member_3104')
{
	//增值服务列表
	$statusId = isset($_REQUEST['StatusId']) ? intval($_REQUEST['StatusId']) : -1;
	
	$startPage = isset($_REQUEST['pageNum']) ? intval($_REQUEST['pageNum']) : 0;
	$pageSize = $_CFG['page_size']; //每页显示数
	$startPage = $startPage * $pageSize;
	//我的增值服务
	$service_list = engrave_service_list($statusId,$user_id,$startPage);
	$totalPage = ceil($service_list['record_count']/$pageSize); //总页数
	$startPage = $service_list['page_count']*$pageSize;
	$arr['total'] = $service_list['record_count'];
	$arr['pageSize'] = $pageSize;
	$arr['totalPage'] = $totalPage;

	//我的增值服务
	$arr['list']=$service_list['services_list'];
	echo json_encode($arr);
}
//==================我的优惠券=======================================================================
elseif($_REQUEST['act']=="member_4304")
{
	//我的优惠券
	$statusId = isset($_REQUEST['StatusId']) ? intval($_REQUEST['StatusId']) : -1;

	$startPage = isset($_REQUEST['pageNum']) ? intval($_REQUEST['pageNum']) : 0;
	$pageSize = $_CFG['page_size']; //每页显示数
	$startPage = $startPage * $pageSize;
	//我的优惠券
	$coupon_list = engrave_coupon_list($user_id,$statusId,$startPage);
	$totalPage = ceil($coupon_list['record_count']/$pageSize); //总页数
	$startPage = $coupon_list['page_count']*$pageSize;
	$arr['total'] = $coupon_list['record_count'];
	$arr['pageSize'] = $pageSize;
	$arr['totalPage'] = $totalPage;
	
	//我的优惠券
	$arr['list']=$coupon_list['coupon_list'];
	echo json_encode($arr);
}
//==================我的积分=======================================================================
elseif($_REQUEST['act']=="member_4404")
{
	require_once(ROOT_PATH . '/includes/member/lib_account_log.php');
	//我的积分
	$startPage = isset($_REQUEST['pageNum']) ? intval($_REQUEST['pageNum']) : 0;
	$pageSize = $_CFG['page_size']; //每页显示数
	$startPage = $startPage * $pageSize;
	//我的积分
	$accumulatepoints_list = engrave_account_log_list($user_id,90,$startPage);
	$totalPage = ceil($accumulatepoints_list['record_count']/$pageSize); //总页数
	$startPage = $accumulatepoints_list['page_count']*$pageSize;
	$arr['total'] = $accumulatepoints_list['record_count'];
	$arr['pageSize'] = $pageSize;
	$arr['totalPage'] = $totalPage;
	
	//我的积分
	$arr['list']=$accumulatepoints_list['accumulatepoints_list'];
	echo json_encode($arr);
}
//==================收货地址维护=======================================================================
elseif($_REQUEST['act']=="member_5302")
{
	require_once(ROOT_PATH . '/includes/membermanage/lib_users_deliveryaddress.php');
	$da_Id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	if($da_Id != 0)
	{
		if (engrave_users_deliveryaddress_delete($da_Id))
		{
			//我的积分
			$startPage = isset($_REQUEST['pageNum']) ? intval($_REQUEST['pageNum']) : 0;
			$pageSize = $_CFG['page_size']; //每页显示数
			$startPage = $startPage * $pageSize;
			//我的积分
			$deliveryaddress_list = engrave_users_deliveryaddress_list($user_id,$startPage);
			$totalPage = ceil($deliveryaddress_list['record_count']/$pageSize); //总页数
			$startPage = $deliveryaddress_list['page_count']*$pageSize;
			$arr['total'] = $deliveryaddress_list['record_count'];
			$arr['pageSize'] = $pageSize;
			$arr['totalPage'] = $totalPage;
			
			//我的积分
			$arr['list']=$deliveryaddress_list['users_deliveryaddress_list'];
			echo json_encode($arr);
			return;
		}
	}
	
	$da_ids = isset($_REQUEST['ids']) ? trim($_REQUEST['ids']) : '';
	$position = strpos($da_ids, ';');
	if($position !== false)
	{
		$daids = split(';', $da_ids);
		for($index=0; $index < count($daids); $index++)
		{
			$da_id = isset($daids[$index]) ? intval($daids[$index]) : 0;
			engrave_users_deliveryaddress_delete($da_id);
		}
	}
	
	//我的积分
	$startPage = isset($_REQUEST['pageNum']) ? intval($_REQUEST['pageNum']) : 0;
	$pageSize = $_CFG['page_size']; //每页显示数
	$startPage = $startPage * $pageSize;
	//我的积分
	$deliveryaddress_list = engrave_users_deliveryaddress_list($user_id,$startPage);
	$totalPage = ceil($deliveryaddress_list['record_count']/$pageSize); //总页数
	$startPage = $deliveryaddress_list['page_count']*$pageSize;
	$arr['total'] = $deliveryaddress_list['record_count'];
	$arr['pageSize'] = $pageSize;
	$arr['totalPage'] = $totalPage;

	//我的积分
	$arr['list']=$deliveryaddress_list['users_deliveryaddress_list'];
	echo json_encode($arr);
}
elseif($_REQUEST['act']=="member_5304")
{
	require_once(ROOT_PATH . '/includes/membermanage/lib_users_deliveryaddress.php');
	//我的积分
	$startPage = isset($_REQUEST['pageNum']) ? intval($_REQUEST['pageNum']) : 0;
	$pageSize = $_CFG['page_size']; //每页显示数
	$startPage = $startPage * $pageSize;
	//我的积分
	$deliveryaddress_list = engrave_users_deliveryaddress_list($user_id,$startPage);
	$totalPage = ceil($deliveryaddress_list['record_count']/$pageSize); //总页数
	$startPage = $deliveryaddress_list['page_count']*$pageSize;
	$arr['total'] = $deliveryaddress_list['record_count'];
	$arr['pageSize'] = $pageSize;
	$arr['totalPage'] = $totalPage;
	
	//我的积分
	$arr['list']=$deliveryaddress_list['users_deliveryaddress_list'];
	echo json_encode($arr);
}
//==================库存列表==========================================================================

/**
 * 到货预报：insert:事务
 * @param unknown $forecast：预报信息
 */
function forecast_insert($forecast,$engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name)
{
	$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
	$users = engrave_users($user_id);
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	//包裹
	//$time=gmtime();
	$sql="call ".$engrave_db_name.".proc_engrave_package_insert('".
	$forecast['pck_warehouseid']."','".$forecast['pck_expressid']."','".$forecast['pck_expressnumber']."','".$forecast['pck_assess']."','".$forecast['pck_name']."','".$forecast['pck_weight']."','".
	$forecast['pck_ordersite']."','".$forecast['pck_ordernumber']."','".$forecast['pck_sizelength']."','".$forecast['pck_sizewidth']."','".$forecast['pck_sizeheight']."','".
	$forecast['pck_userremark']."','".$forecast['pck_userid']."','".$forecast['pck_storagecode']."',''".",0".",'',0,".
	"0,0,0".
	")";
	
	mysql_query($sql,$conn);
	$result = mysql_query('select @@identity',$conn);
	
	if($result!==false)
	{
		$array = mysql_fetch_assoc($result);
	}else
	{
		//添加失败
		submit_failed($conn);
		return;
	}
	foreach ($array as $key=>$val)
	{	
		$result=$val;
	}
	
	//包裹内物品
	//获取包裹内置物品数量
	$pckgcount=isset($_REQUEST['pckgcount']) ? intval($_REQUEST['pckgcount']) : 0;
	for ($index = 0; $index < $pckgcount; $index++)
	{
		$pckg_name=isset($_REQUEST['pckg_name'.$index]) ? trim($_REQUEST['pckg_name'.$index]) : "";
		$pckg_amount=isset($_REQUEST['pckg_amount'.$index]) ? doubleval($_REQUEST['pckg_amount'.$index]) : 0;
		$pckg_unitprice=isset($_REQUEST['pckg_unitprice'.$index]) ? doubleval($_REQUEST['pckg_unitprice'.$index]) : 0;
		$pckg_totalprice=isset($_REQUEST['pckg_totalprice'.$index]) ? doubleval($_REQUEST['pckg_totalprice'.$index]) : 0;
		if($pckg_amount==0)
		{
			continue;
		}
		$sql="insert into ".$GLOBALS['engrave']->table('packagegoods').
		"(pckg_packageid,pckg_name,pckg_amount,pckg_unitprice,pckg_totalprice) values".
		"(".$result.",'".$pckg_name.
		"',".$pckg_amount.
		",".$pckg_unitprice.
		",".$pckg_totalprice.
		")";
		$pck_goods=mysql_query($sql,$conn);
		if($pck_goods===false)
		{
			//添加失败
			submit_failed($conn);
			return;
		}
	}
	//购物凭证
	$upload=new FileUpload();
	foreach ($_FILES AS $code => $file)
	{
		$filename = $upload-> upload_image($file);
		if($filename!='error')
		{
			$psv_vouchersvalue = $filename;
			if($psv_vouchersvalue!=='')
			{
				$sql="insert into ".$GLOBALS['engrave']->table('package_shoppingvouchers').
				"(psv_packageid,psv_vouchersvalue) values".
				"(".$result.",'".$psv_vouchersvalue.
				"')";
				$psvresult=mysql_query($sql,$conn);
				if($psvresult===false)
				{
					//添加失败
					submit_failed($conn);
					return;
				}
			}
		}
		else {
			//添加失败
			submit_failed($conn);
			return;
		}
	}
	
	
	
	$orderno_arr = array();
	$dateyear = date("Y");
	$datemonth = date("m");
	$dateday = date("d");
	/*产生随机数*/
	$length = 6;
	$string = '0123456789';
	$random = '';
	while(strlen($random)<$length)
	{
		if(strlen($random)< 1)
		{
			//从$random中随机产生一个字符
			$random .= $string[rand(1, strlen($string)-1)];
		}
		else
		{
			//从$random中随机产生一个字符
			$random .= $string[rand(0, strlen($string)-1)];
		}
	}
	$recordNo = 'S'.$dateyear.$datemonth.$dateday.$random;
	$appreciation['RecordNo'] = $recordNo;
	$appreciation['HouseId'] = isset($_REQUEST['pck_warehouseid']) ? intval($_REQUEST['pck_warehouseid']) : 0;
	$appreciation['UserId'] = intval($_SESSION['user_id']);
	$appreciation['Tel'] = $users['mobile_phone'];
	$appreciation['Description'] = $forecast['pck_userremark'];
	$appreciation['AddTime'] = gmtime();
	$appreciation['IsPaid'] = '0';
	$appreciation['StatusId'] = '0';
	$appreciation['IsDeleteService'] = '0';
	$services_arr = isset($_POST['services']) ? $_POST['services'] : null;
	$appreciation['ps_packageid'] = $result;
	
	//增值服务
	if($services_arr!=null)
	{
		foreach ($services_arr as $service_key=>$service_value)
		{
			$appreciation['ServiceId'] = $service_value;
			//根据服务ID，获取服务名称
			$service = engrave_services_byid($service_value);
			//根据服务ID、仓库ID获取增值服务费用
			$service_setting = engrave_service_setting_byid($appreciation['HouseId'],$appreciation['ServiceId']);
			$price = isset($service_setting['Price']) ? floatval($service_setting['Price']) : 0;
				
			$account_log['user_id'] = $user_id;
		
			$appreciation['ShippingOrder'] = $forecast['pck_expressnumber'];
			$appreciation_insert = engrave_appreciation_insert($appreciation,$conn);
			if(!$appreciation_insert)
			{
				//添加失败
				submit_failed($conn);
				return;
			}
		}
	}
// 	最初设计：TODO
// 	$package_service['pcks_packageid'] = $result;
// 	//获取增值服务ID
// 	$services = isset($_POST['services']) ? $_POST['services'] : '';
// 	if($services!='')
// 	{
// 		for($i=0;$i<count($services);$i++){
// 			$package_service['pcks_serviceid'] = intval($services[$i]);
// 			//增值服务
// 			if(!engrave_package_service_insert($package_service,$conn))
// 			{
// 				submit_failed($conn);
// 				return;
// 			}
// 		}
// 	}
	
	//提交
	mysql_query('COMMIT',$conn);
	mysql_close($conn);
	member_stock();
}

/**
 * 到货即发：insert:事务
 * @param unknown $forecast：预报信息
 */
function arrivaldelivery_insert($forecast,$submit_order,$engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name)
{
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	//包裹
	//$time=gmtime();
	$sql="call ".$engrave_db_name.".proc_engrave_package_insert('".
			$forecast['pck_warehouseid']."','".$forecast['pck_expressid']."','".$forecast['pck_expressnumber']."','".$forecast['pck_assess']."','".$forecast['pck_name']."','".$forecast['pck_weight']."','".
			$forecast['pck_ordersite']."','".$forecast['pck_ordernumber']."','".$forecast['pck_sizelength']."','".$forecast['pck_sizewidth']."','".$forecast['pck_sizeheight']."','".
			$forecast['pck_userremark']."','".$forecast['pck_userid']."','".$forecast['pck_storagecode']."',''".",2".",'',0,".
			"0,1,0".
			")";
	//到货即发状态：倒数第二个值为1，标识到货即发，倒数第6个值为2，标识配货中
	mysql_query($sql,$conn);
	$result = mysql_query('select @@identity',$conn);

	if($result!==false)
	{
		$array = mysql_fetch_assoc($result);
	}else
	{
		//添加失败
		submit_failed($conn);
		return;
	}
	foreach ($array as $key=>$val)
	{
		$result=$val;
	}
	//包裹内物品
	//获取包裹内置物品数量
	$pckgcount=isset($_REQUEST['pckgcount']) ? intval($_REQUEST['pckgcount']) : 0;
	for ($index = 1; $index <= $pckgcount; $index++)
	{
		$pckg_name=isset($_REQUEST['tab1_goodsname'.$index]) ? trim($_REQUEST['tab1_goodsname'.$index]) : "";
		if($pckg_name=='')
		{
			continue;
		}
		$pckg_amount = isset($_REQUEST['tb1_num'.$index]) ? doubleval($_REQUEST['tb1_num'.$index]) : 0;
		$pckg_unitprice = isset($_REQUEST['tb1_price'.$index]) ? doubleval($_REQUEST['tb1_price'.$index]) : 0;
		$pckg_totalprice = $pckg_amount * $pckg_unitprice;

		$sql="insert into ".$GLOBALS['engrave']->table('packagegoods').
		"(pckg_packageid,pckg_name,pckg_amount,pckg_unitprice,pckg_totalprice) values".
		"(".$result.",'".$pckg_name.
		"',".$pckg_amount.
		",".$pckg_unitprice.
		",".$pckg_totalprice.
		")";
		$pck_goods=mysql_query($sql,$conn);
		if($pck_goods===false)
		{
			//添加失败
			submit_failed($conn);
			return;
		}
	}
	//购物凭证
	$upload=new FileUpload();
	foreach ($_FILES AS $code => $file)
	{
		$filename = $upload-> upload_image($file);
		if($filename!='error')
		{
			$psv_vouchersvalue = $filename;
			if($psv_vouchersvalue!=='')
			{
				$sql="insert into ".$GLOBALS['engrave']->table('package_shoppingvouchers').
				"(psv_packageid,psv_vouchersvalue) values".
				"(".$result.",'".$psv_vouchersvalue.
				"')";
				$psvresult=mysql_query($sql,$conn);
				if($psvresult===false)
				{
					//添加失败
					submit_failed($conn);
					return;
				}
			}
		}
		else {
			//添加失败
			submit_failed($conn);
			return;
		}
	}
	
	order_insert($submit_order,$engrave_db_name,$conn);
	
	//提交
	mysql_query('COMMIT',$conn);
	mysql_close($conn);
	member_stock();
}

/**
 * 添加：订单信息
 * @param unknown $submit_order：订单信息
 * @param unknown $engrave_db_name：数据库名称
 * @param unknown $conn：事务-连接对象
 */
function order_insert($submit_order,$engrave_db_name,$conn)
{
	//添加订单
	$sql="call ".$engrave_db_name.".proc_engrave_order_insert('".
	$submit_order['order_modelid']."','".$submit_order['order_no']."','".$submit_order['order_waybillno']."','".$submit_order['order_time']."','".$submit_order['order_userid']."','".
	$submit_order['order_buyerid']."','".$submit_order['order_note']."','".$submit_order['order_remark']."','".$submit_order['order_shippingid']."','".
	$submit_order['order_servicetype']."','".$submit_order['order_fixed']."','".$submit_order['order_boxquantity']."','".$submit_order['order_paymentid']."','".
	$submit_order['order_paymentpath']."','".$submit_order['order_paymentstatus']."','".$submit_order['order_refundstatus']."','".$submit_order['order_totalprice']."','".
	$submit_order['order_goodsprice']."','".$submit_order['order_weight']."','".$submit_order['order_deductweight']."','".$submit_order['order_sizelength']."','".
	$submit_order['order_sizewidth']."','".$submit_order['order_sizeheight']."','".$submit_order['order_insurace']."','".$submit_order['order_othercost']."','".
	$submit_order['order_tariffcost']."','".$submit_order['order_valueservicecost']."','".$submit_order['order_waybillcost']."','".$submit_order['order_discountcost']."','".
	$submit_order['order_warehousecost']."','".$submit_order['order_userpoints']."','".$submit_order['order_isoutbox']."','".$submit_order['order_needinvoice']."','".
	$submit_order['order_isdelivery']."','".$submit_order['order_iscolsed']."','".$submit_order['order_printstatus']."','".$submit_order['order_isdelete']."',"."@identity".
	");";
	mysql_query($sql,$conn);
	$result = mysql_query('select @identity as identity;');

	if($result!==false)
	{
		$array = mysql_fetch_assoc($result);
	}else
	{
		mysql_query('ROLLBACK');//回滚
		echo '失败1！';
		return;
	}
	foreach ($array as $key=>$val)
	{
		///TODO:修改['identity']
		$result=$val;
	}
	if($result==null || $result=='')
	{
		mysql_query('ROLLBACK');
		echo '失败2！';
		return;
	}
	//获得添加了几个运单
	$waybill_number = isset($_REQUEST['tablecount']) ? intval($_REQUEST['tablecount']) : 0;
	for($i=0;$i<$waybill_number;$i++)
	{
		//运单编号：1502010001-1
		$ordw_orderno = $submit_order['order_no'].'-'.($i+1);
		//收货人Id
		$ordw_consigid = isset($_REQUEST['tb'.($i+1).'_delivery_address']) ? intval($_REQUEST['tb'.($i+1).'_delivery_address']) : 0;
		//申报价值
		$ordw_applyprice = isset($_REQUEST['tb'.($i+1).'_applyprice']) ? doubleval($_REQUEST['tb'.($i+1).'_applyprice']) : 0.00;
		if($submit_order['order_boxquantity'] != 0)
		{
			//物品重量
			$ordw_goodweight = round(doubleval($submit_order['order_weight']) / intval($submit_order['order_boxquantity']),2);
			//默认的物品扣款重量
			$ordw_deductweight = round(doubleval($submit_order['order_deductweight']) / intval($submit_order['order_boxquantity']),2);
			//运单包裹的长度
			$ordw_sizelength = round(doubleval($submit_order['order_sizelength']) / intval($submit_order['order_boxquantity']),2);
			//运单包裹的宽度
			$ordw_sizewidth = round(doubleval($submit_order['order_sizewidth']) / intval($submit_order['order_boxquantity']),2);
			//运单包裹的高度
			$ordw_sizeheight = round(doubleval($submit_order['order_sizeheight']) / intval($submit_order['order_boxquantity']),2);
			//包裹的运费
			$ordw_waybillcost = round(doubleval($submit_order['order_waybillcost']) / intval($submit_order['order_boxquantity']),2);
		}
		else
		{
			//重量
			$ordw_goodweight = $submit_order['order_weight'];
			//扣款重量
			$ordw_deductweight = $submit_order['order_deductweight'];
			//包裹长度
			$ordw_sizelength = $submit_order['order_sizelength'];
			//包裹宽度
			$ordw_sizewidth = $submit_order['order_sizewidth'];
			//包裹高度
			$ordw_sizeheight = $submit_order['order_sizeheight'];
			//包裹运费
			$ordw_waybillcost = $submit_order['order_waybillcost'];
		}
		//是否需要保险ordw_insurprice
		$ordw_isinsurance = isset($_REQUEST['tb'.($i+1).'_insurance']) ? intval($_REQUEST['tb'.($i+1).'_insurance']) : 0;
		//保险费用
		$ordw_insurprice = 0.00;
		if($ordw_isinsurance!=0)
		{
		$ordw_insurprice = isset($_REQUEST['tb'.($i+1).'_hidinsurancecost']) ? doubleval($_REQUEST['tb'.($i
		+1).'_hidinsurancecost']) : 0.00;
		}
		else
		{
			$ordw_insurprice == '0.00';
		}
		//关税
		$ordw_tariff = isset($_REQUEST['tb'.($i+1).'_hidtariff']) ? doubleval($_REQUEST['tb'.($i+1).'_hidtariff']) : 0.00;
		//运单删除
		$ordw_delete = '0';
		$sql="call ".$engrave_db_name.".proc_engrave_orderwaybill_insert('".
		$result."','".$ordw_orderno."','".$ordw_consigid."','".$ordw_applyprice."','".$ordw_waybillcost."','".$ordw_goodweight."','".
		$ordw_deductweight."','".$ordw_sizelength."','".$ordw_sizewidth."','".$ordw_sizeheight."','".
		$ordw_isinsurance."','".$ordw_insurprice."','".$ordw_tariff."','".$ordw_delete."',"."@identity".
		")";
		mysql_query($sql);
		$result_waybill = mysql_query('select @identity as identity;');

		if($result_waybill!==false)
		{
			$array = mysql_fetch_assoc($result_waybill);
		}
		else
		{
			mysql_query('ROLLBACK');//回滚
			echo '失败3！';
			return;
		}
		foreach ($array as $key=>$val)
		{
			///TODO:修改$val['identity']
			$result_waybill=$val;
		}
		if($result_waybill == null || $result_waybill =='')
		{
			mysql_query('ROLLBACK');
			echo '失败4！';
			return;
		}
		//添加物品
		$goods_number = isset($_REQUEST['tb'.($i+1).'_hidgoodscount']) ? intval($_REQUEST['tb'.($i+1).'_hidgoodscount']) : 0;
		for($j=0;$j<$goods_number;$j++)
		{
			//物品类型
			$ordg_goodtype = isset($_REQUEST['tab'.($i+1).'_ratename'.($j+1)]) ? intval($_REQUEST['tab'.($i+1).'_ratename'.($j+1)]) : 0;
			//物品名称
			$ordg_goodname = isset($_REQUEST['tab'.($i+1).'_goodsname'.($j+1)]) ? trim($_REQUEST['tab'.($i+1).'_goodsname'.($j+1)]) : '';
			//物品数量
			$ordg_goodnumber = isset($_REQUEST['tb'.($i+1).'_num'.($j+1)]) ? intval($_REQUEST['tb'.($i+1).'_num'.($j+1)]) : 0;
			//物品价格
			$ordg_goodprice = isset($_REQUEST['tb'.($i+1).'_price'.($j+1)]) ? doubleval($_REQUEST['tb'.($i+1).'_price'.($j+1)]) : 0.00;
			//删除标记
			$ordg_delete = '0';
			if($ordg_goodtype!=0)
			{
				$sql="insert into ".$GLOBALS['engrave']->table('ordergoods').
				"(ordg_waybillid,ordg_goodtype,ordg_goodname,ordg_goodnumber,ordg_goodprice,ordg_delete) values".
				"('".$result_waybill."','".$ordg_goodtype."','".$ordg_goodname."','".$ordg_goodnumber."','".$ordg_goodprice."','".
				$ordg_delete."')";
				$order_goods=mysql_query($sql);
				if($order_goods===false)
				{
					mysql_query('ROLLBACK');//回滚
					echo '失败5！';
					return;
				}
			}
		}
	}
	/*
	* --------------------------------------------------
	*    订单提交后未出现异常事物则运单出库，并给相对应的包裹产生订单号
	* --------------------------------------------------
	*/
	$orderno_arr = array();
	$pck_expressnumber = isset($_POST['pck_expressnumber']) ? trim($_REQUEST['pck_expressnumber']) : '';
// 	foreach ($orderno_arr as $key=>$value)
// 	{
		$sql="update ".$GLOBALS['engrave']->table('package').
		"set pck_orderid = '".$result.
		"',pck_packagestatus = '2'".
		" where pck_isdelete=0 AND pck_istrouble = 0 AND pck_expressnumber = '".$pck_expressnumber."'";
		$order_package=mysql_query($sql);
		//echo $sql;
		if($order_package===false)
		{
			mysql_query('ROLLBACK');//回滚
			echo '失败6！';
			return;
		}
// 	}
	///TODO:张兴朋--提交增值服务：未选择增值服务
	/*
	* -------------------------------------------------
	*                 订单所提交的增值服务
	* -------------------------------------------------
	*/
	if(isset($_POST['checkboxesprice']))
	{
		$order_service = $_POST['checkboxesprice'];
		foreach ($order_service as $key=>$value)
		{
			$service_id = $value;
			$sql="insert into ".$GLOBALS['engrave']->table('waybillservice').
			"(ords_orderid,ords_serviceid,ords_isdelete) values".
			"('".$result."','".$service_id."','0')";
			$orderservice=mysql_query($sql);
			if($orderservice===false)
			{
				mysql_query('ROLLBACK');//回滚
				echo '失败--增值服务！';
				return;
			}
		}
	}
	/*
	* --------------------------------------------------
	*  提交订单后扣除用户的支付金额和得到积分以及和返还积分（若是默认支付状态）
	* --------------------------------------------------
	*/
	if($submit_order['order_paymentid'] == 0)
	{
		$pay_applyprice = 0.00;
		for($i=0;$i<$waybill_number;$i++)
		{
			$tb_applyprice = "tb".($i+1)."_applyprice";
			$pay_applyprice += isset($_REQUEST[$tb_applyprice]) ? doubleval($_REQUEST[$tb_applyprice]) : 0.00;
		}
		//费用的总价格
		$pay_totalcost = isset($_REQUEST['pck_totalcost']) ? doubleval($_REQUEST['pck_totalcost']) : 0.00;
		//本次消费的金额
		$pay_momeny = $pay_applyprice + $pay_totalcost;
		//需要支付的金额
		$nedd_momeny = $submit_order['order_totalprice'];
		//本次消费的积分
		$pay_points = isset($_REQUEST['usePointstb']) ? intval($_REQUEST['usePointstb']) : 0;
		//消费完后剩余金额
		$userMoney = isset($_REQUEST['userMoney']) ? doubleval($_REQUEST['userMoney']) : 0.00;
		$user_momeny = $userMoney - $nedd_momeny;
		//该用户拥有的积分
		$user_points = engrave_pay_points();
		//消费金额和积分兑换比例
		$rate_points = engrave_momeny_points_rate();;
		$points = $user_points - $pay_points + round($pay_momeny / $rate_points);
		$sql="update ".$GLOBALS['engrave_shop']->table('users').
		"set user_money = '".$user_momeny.
		"',pay_points = '".$points.
		"' where user_id = '".$_SESSION['user_id']."'";
		$userid=mysql_query($sql);
		if($userid===false)
		{
			mysql_query('ROLLBACK');//回滚
			echo '失败7！';
			return;
		}
	}
}

function member_stock()
{
	//获取仓库
	$warehouse_list = engrave_warehouse_option();
	$GLOBALS['smarty'] -> assign('warehouse_list',$warehouse_list);
	
	//导航
	$ur=assign_ur_here(0,$GLOBALS['_LANG']['member']['member_stock']);
	$GLOBALS['smarty'] -> assign('ur_here',$ur['ur_here']);

	//$_LANG['insert_package_success'] = '到货预报提交成功,请耐心等待入库！';
	//$_LANG['continue_forecast'] = '继续添加到货预报';
	//$_LANG['return_stock'] = '跳转到到库存列表';
	//添加成功
	$link[0]['text'] = $GLOBALS['_LANG']['continue_forecast'];
	$link[0]['href'] = 'member.php?act=member_10';
	$link[1]['text'] = $GLOBALS['_LANG']['return_stock'];
	$link[1]['href'] = 'member.php?act=member_12';
	sys_msg($GLOBALS['_LANG']['insert_package_success'], 0, $link);
}

function submit_failed($conn)
{
	//添加失败
	$link[0]['text'] = $GLOBALS['_LANG']['continue_forecast'];
	$link[0]['href'] = 'member.php?act=member_10';
	$link[1]['text'] = $GLOBALS['_LANG']['return_stock'];
	$link[1]['href'] = 'member.php?act=member_12';
	sys_msg($GLOBALS['_LANG']['insert_package_failed'], 0, $link);
	mysql_query('ROLLBACK',$conn);//回滚
	member_stock();
}
?>