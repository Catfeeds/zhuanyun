<?php 
/**
 * ENGRAVE 数据访问：物流系统-增值服务
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_service.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */

/**
 * 根据起始地、目的地获取线路(此服务属于“增值服务”)
 * @param number $shippingid：线路ID
 * @return unknown：线路对象列表
 */
function engrave_service_list_byid($warehouseid=0)
{
	$sql='select engrave_services.ServiceId,ModuleId,Module,ServiceName,Description,'.
	'WarehouseId,Price,Unit,StatusId,CurrencyCode from '.
	$GLOBALS['engrave']->table('services').
	'RIGHT JOIN '.
	$GLOBALS['engrave']->table('services_setting').
	' on engrave_services.ServiceId=engrave_services_setting.ServiceId'.
	' LEFT JOIN '.
	$GLOBALS['engrave']->table('warehouse').' on WarehouseId=HouseId'.
	' where ModuleId=4 and WarehouseId='.$warehouseid;

	$service_list = $GLOBALS['engrave_db']-> getAll($sql);
	return $service_list;
}

/**
 * 查询增值服务设置：根据仓库ID，服务ID
 * @param number $warehouseid：仓库ID
 * @param number $serviceid：服务ID
 */
function engrave_service_setting_byid($warehouseid=0,$serviceid=0)
{
	$sql="select Id,ServiceId,WarehouseId,Price,Unit,StatusId,IsDeleteSetting from ".
	$GLOBALS['engrave']->table('services_setting').
	" where WarehouseId=".$warehouseid.
	" and ServiceId=".$serviceid;
	
	return $GLOBALS['engrave_db']->getRow($sql);
}

?>