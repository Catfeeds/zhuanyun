<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_port.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_airline.php');

$pageName = "engrave_airline_flight";
$smarty->assign('ur_here', "航班管理");//current position
$ur_tip = '';
$allPriceTemplate = allAirlinePriceTemplate();
$smarty->assign('ur_tip',       $ur_tip);
$smarty->assign('allPriceTemplate',       $allPriceTemplate);
$ports = allPorts();
$smarty->assign('leave_ports', $ports['leave_ports']);
$smarty->assign('arrival_ports', $ports['arrival_ports']);
if (empty($_REQUEST['is_ajax'])) {
    admin_priv('airline_flight');
} else {
    check_authz_json('airline_flight');
}



if ($_REQUEST['act'] == 'list') {
    $result=airline_flight_paging_list();
    $smarty->assign('airlines', allAirlines());
    $smarty->assign('data_list',    $result['data_list']);
    $smarty->assign('filter',       $result['filter']);
    $smarty->assign('record_count', $result['record_count']);
    $smarty->assign('page_count',   $result['page_count']);

    $smarty->assign('action_link',  array('text' =>"添加航班", 'href'=>"${pageName}.php?act=add"));

    $smarty->display($pageName.'.htm');
}else if ($_REQUEST['act'] == 'add') {
   
  
    $smarty->assign('airlines', allAirlines());


    $smarty->assign('form_action', 'insert');
    $smarty->display("${pageName}_add.htm");
}  else if ($_REQUEST['act'] == 'edit') {

    $data = get_airline_flight(intval($_REQUEST['id']));
    print_r($data);
    $smarty->assign('airlines', allAirlines());
    $smarty->assign('data', $data);
    $smarty->assign('form_action','update');
    $smarty->assign('full_page',    1);

    $smarty->display("${pageName}_add.htm");
} else if ($_REQUEST['act'] == 'toggle_status')
{
   
    $id = intval($_POST['id']);
    $val = intval($_POST['val']);
    update_airline_flight_status($id, $val);
    make_json_result($val);
}    

elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update') {

    $data['flight_no'] = !empty($_POST['flight_no']) ? trim($_POST['flight_no']) : '';
    $data['airline_id'] = !empty($_POST['airline_id']) ? intval(trim($_POST['airline_id'])) : '';
    $data['lp_id'] = !empty($_POST['lp_id']) ? intval(trim($_POST['lp_id'])) : 0;
    $data['ap_id'] = !empty($_POST['ap_id']) ? intval(trim($_POST['ap_id'])) : 0;
    $data['apt_id'] = !empty($_POST['apt_id']) ? intval(trim($_POST['apt_id'])) : 0;
    $data['is_direct'] = !empty($_POST['is_direct']) ? trim($_POST['is_direct']) : 'D';
    $data['trans_city'] = !empty($_POST['trans_city']) ? trim($_POST['trans_city']) : '';
    $data['leave_date'] = !empty($_POST['leave_date']) ? trim($_POST['leave_date']) : '';
    $data['leave_time'] = !empty($_POST['leave_time']) ? trim($_POST['leave_time']) : '';
    $data['arrival_time'] = !empty($_POST['arrival_time']) ? trim($_POST['arrival_time']) : '';

    $leave_times = explode(":",$data['leave_time']  );
    if(intval($leave_times[0])>=0 && intval($leave_times[0])<=12) {
        $data['leave_ampm'] = 'am';
    }
    if(intval($leave_times[0])>=13 && intval($leave_times[0])<=23) {
        $data['leave_ampm'] = 'pm';
    }
    if($data['is_direct'] === 'D') {
        $data['trans_city'] = '';
    }

    $data['days'] = floatVal($_POST['days']);
    $data['hours'] = floatVal($_POST['hours']);
    $id = intval($_POST['id']);

    if($act=='insert') {
        engrave_airline_flight_insert($data);
        //页面跳转
        $link[0]['text'] = $_LANG['continue_add'];
        $link[0]['href'] = "${pageName}.php?act=add";
        $link[1]['text'] = '返回航班列表';
        $link[1]['href'] = "${pageName}.php?act=list";
    } elseif($act=='update') {
        $id=$_REQUEST['id'];
        engrave_airline_flight_update($data, $id);
        $link[0]['text'] = '返回航班列表';
        $link[0]['href'] = "${pageName}.php?act=list";
    }
    sys_msg($_LANG['save_success'], 0, $link);
}