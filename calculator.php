<?php

define('IN_ENGRAVE', true);
/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
$smarty->assign('pageName', 'calculator');
if(@$_REQUEST['weight']!=""){
	$smarty->assign('xianshi', xianshi($_REQUEST['weight']));
	$smarty->assign('weight', $_REQUEST['weight']);
}
$smarty->display('calculator.htm');

function xianshi($weight){

	$sql = "SELECT  id,gongshi,paixu,neirong,fangshi,huilv " .
			" FROM " . $GLOBALS['engrave']->table('calculator') .
			" order by  paixu desc;";
    $calculator= $GLOBALS['engrave_db']->getAll($sql);

	foreach ($calculator AS $key=>$val)
	{
		 $calculator[$key]['gongshi'] = $val['gongshi']*$weight;
         $calculator[$key]['neirong'] = $val['neirong'];
		 $calculator[$key]['fangshi'] = $val['fangshi'];
		 $calculator[$key]['heji'] = ($val['gongshi']*$weight)+$val['neirong'];
		 $calculator[$key]['rmb'] = ($val['gongshi']*$weight+$val['neirong'])*$val['huilv'];
	}
	return $calculator;
}
?>