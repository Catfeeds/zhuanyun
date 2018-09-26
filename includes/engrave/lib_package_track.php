<?php 
/**
 * ENGRAVE 数据访问：运单跟踪
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_package_tarck.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */

/**
 * 查询：运单跟踪
 * @param string $waybillno：运单号，以逗号分隔
 * @return unknown
 */
function engrave_package_track($waybillno = '')
{	
	$sql = "select tr_id,tr_orderid,tr_expressnumber,tr_message,tr_statuscode,".
	"tr_intime,tr_operatorid,tr_isdelete,ordw_orderno,ordw_waybillno from ".
	$GLOBALS['engrave']->table('package_track').
	" left join ".
	$GLOBALS['engrave']->table('orderwaybill') .
	" on tr_orderid=ordw_orderid ".
	" where ordw_waybillno = '" . $waybillno.
	"' order by tr_intime desc";

	$track_list = $GLOBALS['engrave_db']->getAll($sql);

	foreach ($track_list AS $key=>$val)
	{
		$track_list[$key]['tr_intime'] = local_date('Y-m-d H:i:s',$val['tr_intime']);
	}
	//echo $sql;
	return $track_list;
}

/**
 * 根据运单ID，获取合作伙伴
 * @param string $order_waybillno：运单号
 * @return unknown
 */
function engrave_collogistics_by($order_waybillno='')
{
	$sql="select LogisticsId,LogisticsName,CollCode,LogisticsDesc,ActionLink,Submission,SubParameter,".
	"CodingMethod,Orgion,Destination,Number,Status,ArrivalDate,Signatory,StatusList,".
	"IsDeleteLogistics,cg_languageid,lang_name from ".
	$GLOBALS['engrave']->table('collogistics').
	" left join ".
	$GLOBALS['engrave']->table('orderwaybill').
	" on ordw_collogisid=LogisticsId ".
	" left join ".
	$GLOBALS['engrave']->table('languages').
	" on cg_languageid=lang_id ".
	" where ordw_waybillno = '".$order_waybillno."'";
	$collogistics_list = $GLOBALS['engrave_db']->getRow($sql);
	return $collogistics_list;
}
?>