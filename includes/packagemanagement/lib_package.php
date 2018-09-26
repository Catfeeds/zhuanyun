<?php 
/**
 * ENGRAVE 数据访问：包裹管理-包裹
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_package.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */
 
/**
 * 订单列表
 * @param number $pck_packagestatus：包裹状态
 * @param string $pck_expressnumber：货运单号
 * @param number $pck_warehouseid：仓库ID
 * @param string $pckg_name：商品名称
 * @param number $startPage:开始页索引值
 * @return multitype:unknown：订单对象集合
 */
function engrave_package_list($pck_packagestatus=-1,$pck_expressnumber='',$pck_warehouseid=0,$pckg_name='',$userid=0,$startPage=0)
{
	$where = "";
	if($pck_packagestatus != -1) {
        if($pck_packagestatus == 7) {
            $where = $where . (" and pck_istrouble = 1" );
        } else {
            $where = $where . (" and pck_packagestatus = " . $pck_packagestatus);
        }

	}

	if($pck_expressnumber !='')
	{
		$where = $where . (" and pck_expressnumber like '%" . $pck_expressnumber."%'");
	}
	if($pck_warehouseid != 0)
	{
		$where = $where . (" and pck_warehouseid = " . $pck_warehouseid);
	}
	if($pckg_name != '')
	{
		$where = $where . (" and pckg_name like '%" . $pckg_name."%'");
	}
	$where = $where . " and pck_userid='".$userid."'";
	
	$sql="select count(distinct(pck_id)) from " . 
	$GLOBALS['engrave']->table('package').
	" left join " . $GLOBALS['engrave']->table('packagegoods').
	" on pck_id=pckg_packageid".
	" where 1=1 ".$where ;//pck_isdelete = 0
	$row = $GLOBALS['engrave_db']->getOne($sql);
	
	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'pck_id' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	$filter['record_count'] = $row;
	/* 分页大小 */
	$filter['start'] = $startPage;
	$total = $filter['record_count'];
	$pageSize = $GLOBALS['_CFG']['page_size'];

	$sql="select distinct(pck_id),pck_warehouseid,pck_expressid,pck_expressnumber,pck_assess,pck_weight,".
	"pck_ordersite,pck_ordernumber,pck_sizelength,pck_sizewidth,pck_sizeheight,pck_name,".
	"pck_userremark,pck_userid,pck_storagecode,pck_adminremark,pck_packagestatus,pck_isdelete,".
	"(case ".//when pck_packagestatus=0 then '所有记录'
	" when pck_packagestatus=0 then '入库途中'".
	" when pck_packagestatus=1 then '已入库'".
	" when pck_packagestatus=2 then '未到货'".
	" when pck_packagestatus=3 then '打包中'".
	" when pck_packagestatus=4 then '等待发出'".
	" when pck_packagestatus=5 then '已发出'".
	" when pck_packagestatus=6 then '历史预报'".
	" when pck_packagestatus=7 then '问题件'".
	" end) as pck_packagestatus_value,".
	"pck_inventorylocation,pck_intime,pck_istrouble,HouseName,Warehousing,WarehousingBM,RolloverBM,".
	"CId,Name,Code,Symbol,ExchageRate".
	" FROM " . $GLOBALS['engrave']->table('package').
	" left join " . $GLOBALS['engrave']->table('warehouse').
	" on pck_warehouseid=HouseId".
	" left join " . $GLOBALS['engrave']->table('currecy').
	" on CurrencyId = CId".
	" left join " . $GLOBALS['engrave']->table('packagegoods').
	" on pck_id=pckg_packageid".
	" where 1=1 ".$where.//pck_isdelete = 0
	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
	" LIMIT " . $filter['start'] . ",".$pageSize;
	
	$data = $GLOBALS['engrave_db']->getAll($sql);

	//数据修改：入库时间；日期格式转换；状态
	foreach($data as $key=>$val)
	{
		$data[$key]['pck_instorage_time'] = '0.00';
		$data[$key]['WarehousingValue'] = '0.00';
		
		if($val['pck_intime']!=0)
		{
			$data[$key]['pck_instorage_time'] = ceil((gmtime()-$val['pck_intime']) /86400);// H:i:s
			//仓储费用
			//免费仓储天数
			if($data[$key]['pck_instorage_time'] > $val['WarehousingBM'])
			{
				$data[$key]['WarehousingValue'] = $val['Warehousing'] * $data[$key]['pck_instorage_time'];
			}
		}
		
		$data[$key]['pck_intime_val'] = local_date('Y-m-d',$val['pck_intime']);// H:i:s
		if($val['pck_isdelete']==1)
		{
			$data[$key]['pck_packagestatus_value'] ='已删除';
		}
	}
	
	return array('package_list'=>$data, 'filter' => $filter, 'page_count' => ceil($total/$pageSize), 'record_count' => $filter['record_count']);
}

/**
 * 取消订单：带事务
 * @param number $order_id：订单ID
 * @param unknown $conn：数据库连接对象
 * @return boolean：若修改成功，返回true，反之，返回false！
 */
function engrave_package_ordercancel($order_id=0,$conn)
{
	$sql="update ".$GLOBALS['engrave']->table('package').
	" set pck_packagestatus = 1 where pck_orderid=".$order_id;
	$result = mysql_query($sql,$conn);
	
	if($result===false)
	{
		return false;
	}else {
		return true;
	}
}

/**
 * 查询
 * @param unknown $statusid：状态ID
 * @param number $user_id：用户ID
 * @param number $startPage：起始页
 * @return multitype:unknown：服务列表
 */
function engrave_service_list($statusid=-1,$user_id=0,$startPage=0)
{
	$where = "";
	if($statusid!=-1)
	{
		$where = $where . (" and eos.StatusId = " . $statusid);
	}
	$where = $where . " and UserId=".$user_id;
	
	$sql="select count(*) from " .
			$GLOBALS['engrave']->table('orderservice').
			" as eos where IsDeleteService = 0 and UserId=".$user_id.$where;
	$row = $GLOBALS['engrave_db']->getOne($sql);

	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'RecordId' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	$filter['record_count'] = $row;
	/* 分页大小 */
	$filter['start'] = $startPage;
	$total = $filter['record_count'];
	$pageSize = $GLOBALS['_CFG']['page_size'];
	
	$sql =  " select RecordId,RecordNo,ewh.HouseName,es.ServiceName,ess.Price,eos.Tel,eos.StatusId".
			" FROM " . $GLOBALS['engrave']->table('orderservice') . " AS eos " .
			" left join " . $GLOBALS['engrave']->table('warehouse') . " AS ewh" . 
			" on eos.HouseId = ewh.HouseId AND ewh.IsDeleteHouse = 0".
			" left join " . $GLOBALS['engrave']->table('services') . " AS es " .
			" on eos.ServiceId = es.ServiceId AND es.IsDeleteService = 0".
			" left join " . $GLOBALS['engrave']->table('services_setting') . " AS ess " .
			" on eos.ServiceId=ess.ServiceId AND eos.HouseId=ess.WarehouseId AND ess.IsDeleteSetting = 0".
			" where eos.IsDeleteService = 0" . $where .
			" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
			" LIMIT " . $filter['start'] . ",".$pageSize;
	$data = $GLOBALS['engrave_db']->getAll($sql);
	
	return array('services_list'=>$data, 'filter' => $filter, 'page_count' => ceil($total/$pageSize), 'record_count' => $filter['record_count']);
}

/**
 * 查询：包裹服务列表
 * @param number $package_id：包裹ID
 * @return array:包裹服务列表
 */
function engrave_package_service_list($package_id = 0)
{
	$sql="select os.RecordId,os.ps_packageid, os.ServiceId,".
	"service.ServiceName,service.Description".
	" from ".
	$GLOBALS['engrave']->table('orderservice'). " os ".
	" left join ".$GLOBALS['engrave']->table('services')." service ".
	" on os.ServiceId=service.ServiceId".
	" where os.ps_packageid = ". $package_id;
	
	$service_list = $GLOBALS['engrave_db'] -> getAll($sql);
	return $service_list;
}

/**
 * 包裹增值服务：添加
 * @param array $package_id：包裹ID
 * @param array $conn：数据库连接对象
 * @return boolean：若添加成功，返回true，反之，返回false
 */
function engrave_package_service_insert($package_service,$conn)
{
	$sql="insert into ".$GLOBALS['engrave']->table('package_service')
	."(pcks_packageid,pcks_serviceid) values(".
	$package_service['pcks_packageid'].",".
	$package_service['pcks_serviceid']
	.")";	
	
	$result = mysql_query($sql,$conn);
	if($result!==false)
	{
		return true;
	}else{
		return false;
	}
}

/**
 * 获取包裹提醒
 * @param number $user_id：用户ID
 * @return multitype:unknown
 */
function engrave_package_remind($user_id=0)
{
	$sql="select count(*) from ". $GLOBALS['engrave']->table('package')." where pck_packagestatus=0".
	" and pck_isdelete=0 and pck_userid=".$user_id;
	$package0 = $GLOBALS['engrave_db']->getOne($sql);
	$sql="select count(*) from ". $GLOBALS['engrave']->table('package')." where pck_packagestatus=4".
	" and pck_isdelete=0 and pck_userid=".$user_id;
	$package4 = $GLOBALS['engrave_db']->getOne($sql);
	$sql="select count(*) from ". $GLOBALS['engrave']->table('package')." where pck_packagestatus=5".
	" and pck_isdelete=0 and pck_userid=".$user_id;
	$package5 = $GLOBALS['engrave_db']->getOne($sql);
	
	return array('package0'=>$package0,'package4'=>$package4,'package5'=>$package5);
}

/**
 * 获取包裹提醒
 * @param number $user_id：用户ID
 * @return multitype:unknown
 */
function engrave_package_remind_submit($user_id=0)
{
	$sql="select count(*) from ". $GLOBALS['engrave']->table('package')." where pck_packagestatus=1".
	" and pck_isdelete=0 and pck_userid=".$user_id;
	$package0 = $GLOBALS['engrave_db']->getOne($sql);
	
	return $package0;
}
?>