<?php 
/**
 * ENGRAVE 业务逻辑：运单跟踪
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: delivery_follow.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */
define('IN_ENGRAVE', true);
/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
/*语言包*/
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/package_track.php');
//数据访问类：订单跟踪
require_once(ROOT_PATH . '/includes/engrave/lib_package_track.php');
$smarty->assign('lang',$GLOBALS['_LANG']);
//获取运单号，跟踪运单

$delivery_number = isset($_REQUEST['id']) ? trim($_REQUEST['id']) : '';
if($delivery_number == '')
{
	$delivery_number = isset($_REQUEST['delivery_numbers']) ? trim($_REQUEST['delivery_numbers']) : '';
	$delivery_number = str_replace(array("\r\n", "\r", "\n"), "|", $delivery_number);
}	
$delivery_number_array = explode("|", $delivery_number);

$delivery_number_array = remove_thesame($delivery_number_array);

$index = 0;
foreach ($delivery_number_array as $key=>$val)
{
	$index++;
	if($index>20)
	{
		continue;
	}
	if(count(engrave_package_track($val))==0)
	{
		$track_list[$key] = $val;
	}
	else{
		$track_list[$key] = engrave_package_track($val);
	}
}
$smarty->assign('track_list',$track_list);
$smarty->assign('yq_num',$track_list[0]);
//获取合作物流
$collogistics = engrave_collogistics_by($track_list[0]);
$smarty->assign('collogistics',$collogistics);

$smarty->assign('delivery_numbers',$delivery_number);

$smarty->display('package_track.htm');

/**
 * 移除数组中相同项
 * @param unknown $delivery_number_array：数组
 * @return unknown：无相同项的数组
 */
function remove_thesame($delivery_number_array)
{
	$delivery_array = $delivery_number_array;
	$array_count = count($delivery_number_array);
	
	for ($array_index=$array_count-1;$array_index > 0; $array_index--)
	{
		for ($tarray_index = $array_index;$tarray_index > 0; $tarray_index--)
		{
			if($delivery_number_array[$array_index] == $delivery_number_array[$tarray_index-1])
			{
				unset($delivery_array[$array_index]);
			}
		}
	}
	return $delivery_array;
}
?>