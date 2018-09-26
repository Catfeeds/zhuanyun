<?php
/**
 *  增值服务
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
function engrave_service_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('services').
	             " WHERE IsDeleteService = 0";
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT *  " .
			" FROM " . $GLOBALS['engrave']->table('services') .
			" WHERE IsDeleteService = 0" .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	//set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('service_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
/**
 * 获得服务设置列表
 * $ServiceId->服务Id
 */
function engrave_service_setting_list($ServiceId, $wareHouseId)
{
	/* 记录总数 */
    $sql_add = "";
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('services_setting') .
	             " WHERE IsDeleteSetting = 0 AND ServiceId = " . $ServiceId;
	if($wareHouseId) {
		$sql_add .=" AND WarehouseId=".intval($wareHouseId);
	}
	$sql_count .= $sql_add;


	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);
	
	$sql = "SELECT Id,ess.ServiceId,ServiceName,Price,Unit,StatusId,AreaName,HouseName " .
			" FROM " . $GLOBALS['engrave']->table('services_setting') . " as ess " . 
			" LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') . " as ew " .
			" ON ess.WarehouseId = ew.HouseId LEFT JOIN " . $GLOBALS['engrave']->table('services') . " as es " .
			" ON ess.ServiceId = es.ServiceId  ".
			" WHERE IsDeleteSetting = 0 AND ess.ServiceId = " . $ServiceId . $sql_add. 
			" LIMIT " . $filter['start'] . ",$filter[page_size]";
	
	$filter['keyword'] = stripslashes($filter['keyword']);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('service_setting_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
function engrave_service_setting_list_by_warehouse($wareHouseId) {
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('services_setting') .
	             " WHERE IsDeleteSetting = 0 ";
	if($wareHouseId) {
		$sql_add .=" AND WarehouseId=".intval($wareHouseId);
		$sql_count .= $sql_add;
	}
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);
	
	$sql = "SELECT Id,ess.ServiceId,ServiceName,Price,Unit,StatusId,AreaName,HouseName " .
			" FROM " . $GLOBALS['engrave']->table('services_setting') . " as ess " . 
			" LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') . " as ew " .
			" ON ess.WarehouseId = ew.HouseId LEFT JOIN " . $GLOBALS['engrave']->table('services') . " as es " .
			" ON ess.ServiceId = es.ServiceId  ".
			" WHERE IsDeleteSetting = 0  " . $sql_add. 
			" LIMIT " . $filter['start'] . ",$filter[page_size]";
	
	$filter['keyword'] = stripslashes($filter['keyword']);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('service_setting_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
/**
 * 获取增值服务管理
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_service($ServiceId='')
{
	$conditions='';
	if($ServiceId!='')
	{
		$conditions=$conditions." and ServiceId='".$ServiceId."'";
	}
	$sql = "select ServiceId,ModuleId,Module,ServiceName,Description,IsDeleteService " .
			" FROM " . $GLOBALS['engrave']->table('services').
			" where IsDeleteService=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}

function engrave_services_option($selectedIndex=0)
{
	$sql = "select ServiceId,ModuleId,Module,ServiceName,Description,IsDeleteService " .
			" FROM " . $GLOBALS['engrave']->table('services').
			" where IsDeleteService=0 and ModuleId=4 ";
	$services_list = $GLOBALS['engrave_db']->getAll($sql);
	$option="";
	foreach ($services_list as $key=>$val)
	{
// 		echo $val['ServiceName'].'<br>';
		$option.="<option value='".$val['ServiceId']."' >";
		$option.=$val['ServiceName'];
		$option.="</option>";
	}
	return $option;
}
/**
 * 获取增值服务设置管理
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_service_setting($SettingId = '')
{
	$conditions='';
	if($SettingId!='')
	{
		$conditions=$conditions." and Id='".$SettingId."'";
	}
	$sql = "select Id,ServiceId,WarehouseId,Price,Unit,StatusId,IsDeleteSetting " .
			" FROM " . $GLOBALS['engrave']->table('services_setting').
			" where IsDeleteSetting=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}
/**
 * 根据订单ID，获取增值服务
 * @param number $order_id：订单ID
 */
function engrave_services_setting_byorderid($order_id = 0)
{
    $sql="select services.ServiceId,ModuleId,Module,ServiceName,Description,IsDeleteService,".
        "Id,WarehouseId,Price,Unit,StatusId,IsDeleteSetting".
        " from ".$GLOBALS['engrave']->table('services')." as services".
        " left join ".$GLOBALS['engrave']->table('services_setting').
        " as services_setting on services.ServiceId=services_setting.ServiceId".
        " left join ".$GLOBALS['engrave']->table('package')." on WarehouseId=pck_warehouseid".
        " where ModuleId=4 and pck_orderid = ".$order_id;

    $services_setting_list = $GLOBALS['engrave_db'] -> getAll($sql);
//    foreach($services_setting_list as $key => $value) {
//    //$value['price'] = engrave_service_setting_byserviceid($value['ServiceId']);
//}
//    print_a($services_setting_list);
    return $services_setting_list;
}
/**
 * 获取增值服务设置：根据增值服务ID
 * @param string $ServiceId：增值服务ID
 */
function engrave_service_setting_byserviceid($ServiceId = 0)
{
	$conditions='';
	if($ServiceId!='')
	{
		$conditions=$conditions." and ServiceId='".$ServiceId."'";
	}
	$sql = "select Id,ServiceId,WarehouseId,Price,Unit,StatusId,IsDeleteSetting " .
			" FROM " . $GLOBALS['engrave']->table('services_setting').
			" where IsDeleteSetting=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}

/**
 * 添加增值服务
 * @param unknown $service：增值服务对象
 */
function engrave_service_insert($service)
{
	$sql="insert into " . $GLOBALS['engrave']->table('services') .
	"(ModuleId,Module,ServiceName,Description,IsDeleteService) values('" .
	$service['ModuleId']."','".$service['Module']."','".$service['ServiceName']."','".$service['Description']."','".$service['IsDeleteService']."')";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 添加增值服务设置
 * @param unknown $service_list：增值服务设置对象
 */
function engrave_service_setting_insert($service)
{
	$sql="insert into " . $GLOBALS['engrave']->table('services_setting') .
	"(ServiceId,WarehouseId,Price,Unit,StatusId,IsDeleteSetting) values('" .
	$service['ServiceId']."','".$service['WarehouseId']."','".$service['Price']."','".$service['Unit']."','".$service['StatusId']."','".$service['IsDeleteSetting']."')";
	
	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 编辑增值服务
 * @param unknown $service：增值服务对象
 * @param unknown $ServiceId：增值服务ID
 */
function engrave_service_update($service,$ServiceId)
{
	$sql="update ".$GLOBALS['engrave']->table('services').
	"set ModuleId='".$service['ModuleId'].
	"',Module='".$service['Module'].
	"',ServiceName='".$service['ServiceName'].
	"',Description='".$service['Description'].
	"' where ServiceId='".$ServiceId."'";

	return $GLOBALS['engrave_db']->query($sql);
}


/**
 * 编辑增值服务:支付 带事务
 * @param unknown $services：增值服务
 * @param unknown $RecordId：增值服务ID
 * @param unknown $conn:数据库连接对象
 */
function engrave_services_update_tran($services,$RecordId,$conn)
{
	$sql="update ".$GLOBALS['engrave']->table('orderservice').
	"set CheckResult = '".$services['CheckResult'].
	"',CheckTime = '".$services['CheckTime'].
	"',StatusId = '".$services['StatusId'].
	"',IsPaid=1 where RecordId = '".$RecordId."'";
	
	$result = mysql_query($sql,$conn);
	if($result!==false)
	{
		return true;
	}else{
		return false;
	}
}

/**
 * 编辑增值服务
 * @param unknown $service：增值服务对象
 * @param unknown $SettingId：增值服务ID
 */
function engrave_service_setting_update($service,$SettingId)
{
	$sql="update ".$GLOBALS['engrave']->table('services_setting').
	"set WarehouseId='".$service['WarehouseId'].
	"',Price='".$service['Price'].
	"',Unit='".$service['Unit'].
	"',StatusId='".$service['StatusId'].
	"' where Id='".$SettingId."'";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 增值服务
 * @param number IsDeleteService：删除标识
 * @param unknown $ServiceId：增值服务ID
 */
function engrave_service_delete($IsDeleteService=1,$ServiceId)
{
	$sql="update ".$GLOBALS['engrave']->table('services').
	" set IsDeleteService='".$IsDeleteService."' where ServiceId='".
	$ServiceId."'";

	return  $GLOBALS['engrave_db']->query($sql);
}
/**
 * 增值服务设置
 * @param number IsDeleteService：删除标识
 * @param unknown $SettingId：增值服务设置ID
 */
function engrave_service_setting_delete($IsDeleteSetting=1,$SettingId)
{
	$sql="update ".$GLOBALS['engrave']->table('services_setting').
	" set IsDeleteSetting='".$IsDeleteSetting."' where Id='".
	$SettingId."'";

	return  $GLOBALS['engrave_db']->query($sql);
}
/**
 * 取得服务模块列表
 * @return array 服务模块id => name
 */
function engrave_module_list($byCode=false)
{
	$sql = 'SELECT ModuleId, ModuleName, ModuleCode FROM ' . $GLOBALS['engrave']->table('moduleservice') . ' WHERE IsDeleteModule = 0 ORDER BY ModuleId';
	$res = $GLOBALS['engrave_db']->getAll($sql);

	$module_list = array();
	foreach ($res AS $row)
	{
		if(!$byCode) {
			$module_list[$row['ModuleId']] = addslashes($row['ModuleName']);	
		} else {
			$module_list[$row['ModuleCode']] = addslashes($row['ModuleName']);
		}
		
	}

	return $module_list;
}
/**
 * 获取服务类型的名字
 * @param unknown $ServiceId
 */
function engrave_service_name($ServiceId)
{
	$sql = "SELECT ServiceName " .
			" FROM " . $GLOBALS['engrave']->table('services') .
			" WHERE IsDeleteService = 0 AND ServiceId = '" . $ServiceId . "'";
	$servicename = $GLOBALS['engrave_db']->getOne($sql);
	return $servicename;
}
/**
 * 获得增值服务设置中的仓库
 * @return array 仓库id=>name
 */
function engrave_warehouse_housename()
{
	$sql = 'SELECT HouseId, HouseName FROM ' . $GLOBALS['engrave']->table('warehouse') . ' WHERE IsDeleteHouse = 0 ORDER BY HouseId';
	$res = $GLOBALS['engrave_db']->getAll($sql);
	
	$warehouse_list = array();
	foreach ($res AS $row)
	{
		$warehouse_list[$row['HouseId']] = addslashes($row['HouseName']);
	}
	
	return $warehouse_list;
}
/**
 * 获得服务模块代码
 *
 * @access  public
 * @access  $moduleid 用户的Id
 */
function engrave_get_modulecode($moduleid)
{
	$sql = "SELECT ModuleCode " .
			" FROM " . $GLOBALS['engrave']->table('moduleservice') .
			" WHERE ModuleId = '" . $moduleid . "'";
	$Module = $GLOBALS['engrave_db']->getOne($sql);
	return $Module;
}
/**
 * 返回服务数
 * @param unknown $serviceId
 * @param unknown $warehouseId
 */
function engrave_service_count($serviceId,$warehouseId)
{
	$sql=" SELECT COUNT(*) AS count ".
	     " FROM " .$GLOBALS['engrave']->table('services_setting').
	     " WHERE IsDeleteSetting = 0 AND ServiceId=" .$serviceId . " AND WarehouseId=".$warehouseId;
	$result=mysql_fetch_array(mysql_query($sql));
	$count=$result['count'];
	return $count;
}
/**
 * 返回增值服务设置的主键Id
 * @param unknown $serviceId
 * @param unknown $warehouseId
 * @return unknown
 */
function engrave_get_settingid($serviceId,$warehouseId)
{
	$sql = "SELECT Id " .
			" FROM " . $GLOBALS['engrave']->table('services_setting') .
			" WHERE IsDeleteSetting = 0 AND ServiceId=" .$serviceId . " AND WarehouseId=".$warehouseId;
	$SettingId = $GLOBALS['engrave_db']->getOne($sql);
	return $SettingId;
}
?>