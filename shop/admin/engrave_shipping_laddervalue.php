<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址:
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_shipping_laddervalue_laddervalue.php 2014-12-01 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_shipping_laddervalue.php');
/*载入-线路管理-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_shipping_laddervalue.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_shipping_laddervalue_group.php');
/*excel 附件*/
require_once(ROOT_PATH . 'admin/commonhelper/Excel/reader.php');
require_once(ROOT_PATH . 'admin/commonhelper/upload_json.php');

/*------------------------------------------------------ */
//-- 线路管理-阶梯价格
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
	/* 检查权限 */
	admin_priv('shipping');

	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0705_shipping'];
	$smarty->assign('ur_here', $ur_here);
    $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
    $name = isset($_REQUEST['name']) ? trim($_REQUEST['name']) : "";

    $smarty->assign('shippingid',   $id);
	$smarty->assign('action_link',  array('text' => $_LANG['add_laddervalue'], 'href'=>'engrave_shipping_laddervalue.php?act=add&id='.$id.'&name='.$name));
	
	$shipping_laddervalue_list= engrave_shipping_laddervalue_list($id);
	$smarty->assign('shipping_laddervalue_list',   $shipping_laddervalue_list['shipping_laddervalue_list']);
	$smarty->assign('filter',       $shipping_laddervalue_list['filter']);
	$smarty->assign('record_count', $shipping_laddervalue_list['record_count']);
	$smarty->assign('page_count',   $shipping_laddervalue_list['page_count']);

	$smarty->assign('full_page',    1);

	/* 显示线路管理页面 */
	assign_query_info();
	$smarty->display('engrave_shipping_laddervalue_list.htm');
}
/*------------------------------------------------------ */
//-- 线路管理显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$shippingid = isset($_REQUEST['shippingid']) ? intval($_REQUEST['shippingid']) : 0;
	$shipping_laddervalue_list = engrave_shipping_laddervalue_list($shippingid);
	if($shippingid!=0)
	{
		$shipping_laddervalue_list['filter']['shippingid'] = $shippingid;
	}
	$smarty->assign('shipping_laddervalue_list',   $shipping_laddervalue_list['shipping_laddervalue_list']);
	$smarty->assign('filter',       $shipping_laddervalue_list['filter']);
	$smarty->assign('record_count', $shipping_laddervalue_list['record_count']);
	$smarty->assign('page_count',   $shipping_laddervalue_list['page_count']);
	
	$sort_flag  = sort_flag($shipping_laddervalue_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_shipping_laddervalue_list.htm'), '',
	array('filter' => $shipping_laddervalue_list['filter'], 'page_count' => $shipping_laddervalue_list['page_count']));

}
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('shipping');
	//获取阶梯价格组
	$option = engrave_shipping_laddervalue_group_option(0);
	$smarty->assign('option', $option);
	
    $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
    $name = isset($_REQUEST['name']) ? trim($_REQUEST['name']) : "";
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0706_add_shipping'];
    $smarty->assign('action_link',  array('text' => $_LANG['list_laddervalue'], 'href'=>'engrave_shipping_laddervalue.php?act=list&id='.$id.'&name='.$name));
    
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('slp_shippingid', $id);
    $smarty->assign('shippingname', $name);
    /* 显示购线路管理页面 */
    $smarty->assign('form_action', 'insert');
	$smarty->assign('full_page',    1);
    assign_query_info();
    $smarty->display('engrave_shipping_laddervalue_info.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('shipping');

	//获取ID，并根据ID获取对象 赋值给smarty
	$slp_id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	$shipping_id=isset($_REQUEST['shippingid']) ? intval($_REQUEST['shippingid']) : 0;
	//获取阶梯价格
	$shipping=engrave_shipping_laddervalue($slp_id);
	$smarty->assign('slv', $shipping);
	//获取阶梯价格组
	$option = engrave_shipping_laddervalue_group_option($shipping['slp_slpgid']);
	$smarty->assign('option', $option);
	
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0706_add_shipping'];
	$smarty->assign('action_link',  array('text' => $_LANG['list_laddervalue'], 'href'=>'engrave_shipping_laddervalue.php?act=list&id='.$shipping_id));
	$smarty->assign('ur_here', $ur_here);
    $smarty->assign('slp_shippingid', $shipping_id);
   
	/* 显示商品列表页面 */
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);
	assign_query_info();
	$smarty->display('engrave_shipping_laddervalue_info.htm');
}
/*------------------------------------------------------ */
//-- 增值服务添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('shipping');
	$id = isset($_REQUEST['slp_shippingid']) ? intval($_REQUEST['slp_shippingid']) : 0;
    $name = isset($_REQUEST['slp_shippingname']) ? trim($_REQUEST['slp_shippingname']) : "";
	//获取数据
	$shipping['slp_slpgid'] = !empty($_POST['slp_slpgid']) ? intval($_POST['slp_slpgid']) : '0';
	$shipping['slp_minweight'] = !empty($_POST['slp_minweight']) ? intval($_POST['slp_minweight']) : '0';
	$shipping['slp_maxweight'] = !empty($_POST['slp_maxweight']) ? intval($_POST['slp_maxweight']) : '0';
	$shipping['slp_price'] = !empty($_POST['slp_price']) ? intval($_POST['slp_price']) : '0';
	$shipping['slp_discount'] = !empty($_POST['slp_discount']) ? intval($_POST['slp_discount']) : '0';
	$shipping['slp_serviceprice'] = !empty($_POST['slp_serviceprice']) ? intval($_POST['slp_serviceprice']) : '0';
	$shipping['slp_isdelete'] = '0';

	if($act=='insert')
	{
		$link[0]['text'] = $_LANG['back_shipping_list'];
		$link[0]['href'] = 'engrave_shipping_laddervalue.php?act=list&id='.$id."&name=".$name;
		if(engrave_shipping_laddervalue_insert($shipping))
		{
			//页面跳转
			sys_msg($_LANG['save_success'], 0, $link);
		}
		else{
			//页面跳转
			sys_msg($_LANG['save_failed'], 0, $link);
		}
	}
	elseif($act=='update')
	{
		$slp_id=$_REQUEST['slp_id'];
		$link[0]['text'] = $GLOBALS['_LANG']['back_shipping_list'];
		$link[0]['href'] = 'engrave_shipping_laddervalue.php?act=list&id='.$id."&name=".$name;
		if(engrave_shipping_laddervalue_update($shipping,$slp_id))
		{
			sys_msg($GLOBALS['_LANG']['save_success'], 0, $link);
		}else {
			sys_msg($GLOBALS['_LANG']['save_failed'], 0, $link);
		}
	}
}
/*------------------------------------------------------ */
//-- 上传
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'import')
{
	$link[0]['text'] = $GLOBALS['_LANG']['back_shipping_list'];
	$link[0]['href'] = 'engrave_shipping_laddervalue.php?act=list&id='.$id."&name=".$name;
		
	$upload=new FileUpload();
	//先上传excel
	foreach ($_FILES AS $code => $file)
	{
		$filename = $upload-> upload_excel($file);
		if($filename!='error')
		{	
			//事务
			$charset = 'gbk';
			$charset = strtolower(str_replace('-', '', EC_CHARSET));
			$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
			mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
			mysql_query('START TRANSACTION',$conn);
			/*事务开始*/
			$data = new Spreadsheet_Excel_Reader();
			$data->setOutputEncoding('utf-8');
			$data->read(ROOT_PATH_VIRTUAL.$filename);
			$time = gmtime();
			/*获取所有工作簿*/
			for($sheetIndex=0; $sheetIndex<count($data->sheets); $sheetIndex++)
			{
				if($data->sheets[$sheetIndex]['numRows'] < 2 || $data->sheets[$sheetIndex]['numCols'] < 1)
				{
					//如果单元格内的数据少于2条，则忽略此工作簿
					continue;
				}
				else{
					$slpg_name = $data->sheets[$sheetIndex]['cells'][2][1];
					//获取所在阶梯价格组
					$slpg_array = engrave_shipping_laddervalue_group_byname($slpg_name);
					$slpg['slp_slpgid'] = isset($slpg_array['slpg_id']) ? intval($slpg_array['slpg_id']) : 0;
				}
				if($slpg['slp_slpgid'] == 0)
				{
					//不存在列
					transaction_failed($conn);
					sys_msg(sprintf($GLOBALS['_LANG']['import_failed_notname'],$sheetIndex+1), 0, $link);
				}
				for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
					if($data->sheets[0]['numCols'] < 6){
						//存在问题
						transaction_failed($conn);
						sys_msg(sprintf($GLOBALS['_LANG']['import_failed_coloum'],$sheetIndex+1), 0, $link);
					}
					$slpg['slp_minweight'] = $data->sheets[$sheetIndex]['cells'][$i][2];
					$slpg['slp_maxweight'] = $data->sheets[$sheetIndex]['cells'][$i][3];
					$slpg['slp_price'] = $data->sheets[$sheetIndex]['cells'][$i][4];
					$slpg['slp_discount'] = $data->sheets[$sheetIndex]['cells'][$i][5];
					$slpg['slp_serviceprice'] = $data->sheets[$sheetIndex]['cells'][$i][6];
					$slpg['slp_isdelete'] = 0;
					$slpg['slp_time'] = $time;
					$result = engrave_shipping_laddervalue_insert_trans($slpg,$conn);
					if($result===false)
					{
						//错误，回滚
						transaction_failed($conn);
						sys_msg(sprintf($GLOBALS['_LANG']['import_failed_message'],$sheetIndex,$i), 0, $link);
					}
				}
			}
			//事务提交
			transaction_success($conn);
			sys_msg($GLOBALS['_LANG']['import_success'], 0, $link);
		}
		else {
			sys_msg($GLOBALS['_LANG']['upload_failed'], 0, $link);
		}
	}
	//获取excel
}
/*------------------------------------------------------ */
//--阶梯价格删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$slp_id = intval($_REQUEST['id']);
	$slp=engrave_shipping_laddervalue($slp_id);
	$slp_shippingid = $slp['slp_shippingid'];
	/* 检查权限 */
	check_authz_json('shipping_remove');
	if (engrave_shipping_laddervalue_delete($slp_id))
	{
		//根据删除的ID，获取线路ID
		$url = 'engrave_shipping_laddervalue.php?act=query&shippingid='.$slp_shippingid. str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
		//$lnk[] = array('text' => $_LANG['go_back'], 'href'=>'engrave_pre_recharge_card.php?act=list');
		//sys_msg(sprintf($_LANG['remove_card_success'], $count), 0, $lnk);
	}
}

/**
 * 事务失败
 * @param unknown $conn
 */
function transaction_failed($conn)
{
	//添加失败
	mysql_query('ROLLBACK',$conn);//回滚
	mysql_close($conn);
}
/**
 * 事务成功
 * @param unknown $conn
 */
function transaction_success($conn)
{
	//添加失败
	mysql_query('COMMIT',$conn);//回滚
	mysql_close($conn);
}
?>