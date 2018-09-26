<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_port.php');
$smarty->assign('ur_here', "出发城市");//current position
$ur_tip = '系统基础数据，只提供查看功能';
$smarty->assign('ur_tip',       $ur_tip);
if ($_REQUEST['act'] == 'list') {
     $result=port_paging_list('leave');
     $smarty->assign('data_list', $result['data_list']);
     $smarty->assign('filter',       $result['filter']);
     $smarty->assign('record_count', $result['record_count']);
     $smarty->assign('page_count',   $result['page_count']);


   
    $smarty->display('engrave_leave_port.htm');
} 