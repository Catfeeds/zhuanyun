<?php
define('IN_ECS', true);

require (dirname(__FILE__) . '/includes/init.php');
require_once (ROOT_PATH . 'admin/includes/engrave/lib_airline.php');
$smarty->assign('ur_here', "航班价格模板");//current position
$exc = new exchange($GLOBALS['engrave']->table('airline_price_template'), $GLOBALS['engrave_db'], 'apt_id', 'name');
/* 检查权限 */
!$is_ajax && admin_priv('airline_price_template');
if ($_REQUEST['act'] == 'list') {

    $result = airline_price_template_paging_list();
    $smarty->assign('data_list', $result['data_list']);
    $smarty->assign('filter', $result['filter']);
    $smarty->assign('record_count', $result['record_count']);
    $smarty->assign('page_count', $result['page_count']);


    $smarty->assign('action_link', array('text' => "添加价格模板", 'href' => 'engrave_airline_price_template.php?act=add'));

    $smarty->display('engrave_airline_price_template.htm');
} else if ($_REQUEST['act'] == 'add') {

    $smarty->assign('form_action', 'insert');
    $smarty->display('engrave_airline_price_template_add.htm');
} else if ($_REQUEST['act'] == 'edit') {
    $data = get_airline_price_template(intval($_REQUEST['id']), $allCountry);
    $smarty->assign('data', $data);
    $smarty->assign('form_action', 'update');
    $smarty->assign('full_page', 1);
    $smarty->display('engrave_airline_price_template_add.htm');
} elseif ($_REQUEST['act'] == 'insert' || $_REQUEST['act'] == 'update')  {
    $data['name'] = !empty($_POST['name']) ? trim($_POST['name']) : '';
    $data['price0'] = !empty($_POST['price0']) ? floatVal(trim($_POST['price0'])) : 0;
    $data['price100'] = !empty($_POST['price100']) ? floatVal(trim($_POST['price100'])) : 0;
    $data['price300'] = !empty($_POST['price300']) ? floatVal(trim($_POST['price300'])) : 0;
    $data['price500'] = !empty($_POST['price500']) ? floatVal(trim($_POST['price500'])) : 0;
    $data['price1000'] = !empty($_POST['price1000']) ? floatVal(trim($_POST['price1000'])) : 0;
    if ($act == 'insert'){
        engrave_airline_price_template_insert($data);
		//页面跳转
        $link[0]['text'] = $_LANG['continue_add'];
        $link[0]['href'] = 'engrave_airline_price_template.php?act=add';
        $link[1]['text'] = '返回价格模板列表';
        $link[1]['href'] = 'engrave_airline_price_template.php?act=list';
    } elseif ($act == 'update'){
        $id = $_REQUEST['apt_id'];
        engrave_airline_price_template_update($data, $id);
        $link[0]['text'] = '返回价格模板列表';
        $link[0]['href'] = 'engrave_airline_price_template.php?act=list';
    }
    sys_msg($_LANG['save_success'], 0, $link);
} elseif ($_REQUEST['act'] == 'remove') {
    $is_ajax && check_authz_json('airline_price_template');
    $id = intval($_GET['id']);
    $exc->logicDrop($id, 'yes');
    $url = 'engrave_airline_price_template.php?act=list&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);

    ecs_header("Location: $url\n");
    exit;
}    