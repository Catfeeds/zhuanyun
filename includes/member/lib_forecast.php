<?php 
/**
 * ENGRAVE 数据访问：包裹管理-到货预报
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_forecast.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */

/**
 * insert：到货预报
 * @param unknown $forecast：返回insert结果
 */
function engrave_forecast_insert($forecast)
{	
	//获取当前时间
	$time=gmtime();
	$sql="insert into ".$GLOBALS['engrave']->table('package').
	"(pck_warehouseid,pck_expressid,pck_expressnumber,pck_assess,pck_weight,".
	"pck_ordersite,pck_ordernumber,pck_sizelength,pck_sizewidth,pck_sizeheight,".
	"pck_userremark,pck_userid,pck_storagecode,pck_packagestatus,pck_intime,".
	"pck_isdelete) values('".
	$forecast['pck_warehouseid']."','".$forecast['pck_expressid']."','".$forecast['pck_expressnumber']."','".$forecast['pck_assess']."','".$forecast['pck_weight']."','".
	$forecast['pck_ordersite']."','".$forecast['pck_ordernumber']."','".$forecast['pck_sizelength']."','".$forecast['pck_sizewidth']."','".$forecast['pck_sizeheight']."','".
	$forecast['pck_userremark']."','".$forecast['pck_userid']."','".$forecast['pck_storagecode']."',0".",".$time.",".
	"0".
	")";

	return $GLOBALS['forecast_db_trans']->query($sql);
}
?>