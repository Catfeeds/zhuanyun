<?php 

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_distribution_area.php');
/*载入-配送区域管理-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_distribution_area.php');

$smarty->assign('lang',$_LANG);

/* act操作项的初始化 */
if (empty($_REQUEST['act']))
{
	$_REQUEST['act'] = 'list';
}
else
{
	$_REQUEST['act'] = trim($_REQUEST['act']);
}
/*------------------------------------------------------ */
//-- 区域列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
	/* 检查权限 */
	admin_priv('dis_area_manage');
	/*页面头部*/
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0703_distribution_area'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link',  array('text' => $_LANG['0704_add_distribution_area'], 'href'=>'engrave_distribution_area.php?act=add'));
	/*页面内容（中间）*/
	$area_parentid= isset($_REQUEST['distribution_area_parentid'])?(empty($_REQUEST['distribution_area_parentid'])?0:$_REQUEST['distribution_area_parentid']):'0';
    
	$distribution_area_list= engrave_distribution_area_list($area_parentid);
	$smarty->assign('distribution_area_list',   $distribution_area_list['distribution_area_list']);
	$smarty->assign('filter',       $distribution_area_list['filter']);
	$smarty->assign('record_count', $distribution_area_list['record_count']);
	$smarty->assign('page_count',   $distribution_area_list['page_count']);
	$smarty->assign('area_parentid', $area_parentid);
	
	$smarty->assign('full_page',    1);

	$sort_flag  = sort_flag($log_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);
	
	/*页面尾部*/
	assign_query_info();
	/* 显示配送区域列表页面 */
	$smarty->display('engrave_distribution_area.htm');
}
elseif ($_REQUEST['act'] == 'query')
{
	$area_parentid = isset($_POST['area_parentid']) ? intval($_POST['area_parentid']) : 0;
	
	$distribution_area_list = engrave_distribution_area_list($area_parentid);

	$distribution_area_list['filter']['area_parentid'] = $area_parentid;
	$smarty->assign('distribution_area_list',   $distribution_area_list['distribution_area_list']);
	$smarty->assign('filter',       $distribution_area_list['filter']);
	$smarty->assign('record_count', $distribution_area_list['record_count']);
	$smarty->assign('page_count',   $distribution_area_list['page_count']);

	$sort_flag  = sort_flag($distribution_area_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_distribution_area.htm'), '',
	array('filter' => $distribution_area_list['filter'], 'page_count' => $distribution_area_list['page_count']));

}
elseif ($_REQUEST['act'] == 'add')
{
	/* 检查权限 */
	admin_priv('dis_area_manage');
	
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0704_add_distribution_area'];
	$smarty->assign('ur_here', $ur_here);
	//获取 地区 列表数据
	$disarea_list= engrave_disarea_list(0,0,true,0,true);
	$smarty->assign('disarea_list', $disarea_list);
	$smarty->assign('action_link',  array('text' => $_LANG['0703_distribution_area'], 'href'=>'engrave_distribution_area.php?act=list'));
	$smarty->assign('form_action', 'insert');
	
	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_distribution_area_add.htm');	
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('dis_area_manage');

	//获取ID，并根据ID获取对象 赋值给smarty
	$AreaId=!empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
	$ParentId = !empty($_REQUEST['parentId']) ? intval($_REQUEST['parentId']) : '0';
	$disea=engrave_disarea($AreaId);
	$smarty->assign('distribution_area', $disea);
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0704_add_distribution_area'];
	$smarty->assign('ur_here', $ur_here);
	//获取 地区 列表数据
	$disarea_list= engrave_disarea_list(0,$ParentId,true,0,true);
	$smarty->assign('disarea_list', $disarea_list);
	$smarty->assign('action_link',  array('text' => $_LANG['0703_distribution_area'], 'href'=>'engrave_distribution_area.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_distribution_area_add.htm');
}
/*------------------------------------------------------ */
//-- 充值卡添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('dis_area_manage');
	//获取数据
	$distribution['AreaName'] = !empty($_POST['AreaName']) ? trim($_POST['AreaName']) : '';
	$distribution['ParentId'] = !empty($_POST['LevelArea']) ? intval($_POST['LevelArea']) : '0';
	$distribution['Hits'] = !empty($_POST['bold']) ? intval($_POST['bold']) : '0';
	$distribution['IsDeleteArea'] = '0';

	if($act=='insert')
	{
		engrave_disarea_insert($distribution);
		$id = mysql_insert_id();
		$parentPath = '';
		if($distribution['ParentId']==0)
		{
			$parentPath = $id;
		}
		else
		{
			$levelParh = engrave_disarea_parentpath($distribution['ParentId']);
		    $parentPath = $levelParh . ',' .$id;
		}
		engrave_disarea_parentPath_update($parentPath,$id);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_disarea'];
		$link[0]['href'] = 'engrave_distribution_area.php?act=add';
		$link[1]['text'] = $_LANG['back_disarea_list'];
		$link[1]['href'] = 'engrave_distribution_area.php?act=list';
	}
	elseif($act=='update')
	{
		$AreaId=!empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
		engrave_disarea_update($distribution,$AreaId);
		$parentPath = '';
		if($distribution['ParentId']==0)
		{
			$parentPath = $AreaId;
		}
		else
		{
			$levelParh = engrave_disarea_parentpath($distribution['ParentId']);
			$parentPath = $levelParh . ',' .$AreaId;
		}
		engrave_disarea_parentPath_update($parentPath,$AreaId);
		$link[0]['text'] = $_LANG['back_disarea_list'];
		$link[0]['href'] = 'engrave_distribution_area.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
elseif ($_REQUEST['act'] == 'remove')
{
	//根据站点管理ID获取站点管理名称
	$AreaId=!empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
	/* 检查权限 */
	check_authz_json('dis_area_remove');
	if (engrave_disarea_delete("1", $AreaId))
	{
		// 记录日志
		//admin_log(addslashes($siteName), 'remove', 'site_manage');
		$url = 'engrave_distribution_area.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
	}
}
?>