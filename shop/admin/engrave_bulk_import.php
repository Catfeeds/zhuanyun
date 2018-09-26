<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_focus_map_manage.php 2014-12-01 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_bulk_import.php');
/*操作excel类*/
require_once(ROOT_PATH . 'Classes/PHPExcel.php');
require_once(ROOT_PATH . 'Classes/PHPExcel/IOFactory.php');
require_once(ROOT_PATH . 'Classes/PHPExcel/Writer/Excel5.php');

$smarty->assign('lang',$_LANG);
//$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');

/*------------------------------------------------------ */
//-- 营销系统
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'import')
{
    /* 检查权限 */
    admin_priv('bulk_import');
    $ur_here = $_LANG['01_package_manage'] .'｜'.$_LANG['0107_bulk_import'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('form_action', 'addfile');
    /* 显示焦点图管理页面 */
    assign_query_info();
    $smarty->display('engrave_bulk_import.htm');
}
elseif($_REQUEST['act'] == 'addfile')
{
	/* 检查权限 */
	admin_priv('bulk_import');
	$filename = $_FILES['Import']['name'];
	$tmp_name = $_FILES['Import']['tmp_name'];
	$msg = uploadFile($filename, $tmp_name);
	//if($msg)
	//页面跳转
	$link[0]['text'] = $_LANG['continue_import_package'];
	$link[0]['href'] = 'engrave_bulk_import.php?act=import';
	$link[1]['text'] = $_LANG['back_package_list'];
	$link[1]['href'] = 'engrave_package_list.php?act=list';
	sys_msg($msg, 0, $link);
}
/**
 * 实现文件上传和读取
 */
function uploadFile($file,$filetempname)
{
	//自己设置的上传文件存放路径
	$filePath = 'upFile/';
	$str = "";
	//注意设置时区
	$time=gmtime();//去当前上传的时间
	//获取上传文件的扩展名
	$extend=strrchr ($file,'.');
	//上传后的文件名
	$name=$time.$extend;
	$uploadfile=$filePath.$name;//上传后的文件名地址
	$result=move_uploaded_file($filetempname,$uploadfile);//假如上传到当前目录下;
	if($result) //如果上传文件成功，就执行导入excel操作
	{
		$objReader = PHPExcel_IOFactory::createReader('Excel2007');//use excel2007 for 2007 format
		$objPHPExcel = $objReader->load($uploadfile);
		$sheet = $objPHPExcel->getSheet(0);
		$highestRow = $sheet->getHighestRow();       //取得总行数
		$highestColumn = $sheet->getHighestColumn(); //取得总列数
		$objWorksheet = $objPHPExcel->getActiveSheet();
		$highestRow = $objWorksheet->getHighestRow();
		$highestColumn = $objWorksheet->getHighestColumn();
		$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);//总列数
		$headtitle=array();
		for ($row = 2;$row <= $highestRow;$row++)
		{
		    $strs=array();
			for ($col = 0;$col < $highestColumnIndex;$col++)
			{
			   $strs[$col] =$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
			}
			$isexistexprnum = IsExistExpressNumber($strs[0]);
			$isexistexprstorage = IsExitsExpressStorage($strs[0], $strs[1]);
			$isexiststoragecode = IsExitsStorageCode($strs[1]);
			$sql = '';
            if($isexistexprnum == '1')
            {
            	$PackageId = GetPackageId($strs[0]);
            	if($isexistexprstorage == '1')
            	{
            		$packageStatus = "1";
            		$sql="update ".$GLOBALS['engrave']->table('package').
            		"set pck_warehouseid = '".$strs[3].
            		"',pck_storagecode = '".$strs[1].
            		"',pck_weight = '".$strs[2].
            		"',pck_expressnumber = '".$strs[0].
            		"',pck_inventorylocation = '".$strs[4].
            		"',pck_sizelength = '".$strs[5].
            		"',pck_sizewidth = '".$strs[6].
            		"',pck_sizeheight = '".$strs[7].
            		"',pck_packagestatus = '".$packageStatus.
            		"',pck_intime = '". gmtime() .
            		"' where pck_id = '".$PackageId."'";
            	}
            	else 
            	{
            		$istrouble = "1";
            		$packageStatus = "0";
            		$sql="update ".$GLOBALS['engrave']->table('package').
            		"set pck_istrouble = '".$istrouble.
            		"',pck_packagestatus = '".$packageStatus.
            		"',pck_intime = '". gmtime() .
            		"' where pck_id = '".$PackageId."'";
            	}
            }
            else 
            {
            	if($isexiststoragecode == '1')
            	{
            		$intime = gmtime();
            		$user_id = GetUserId($strs[1]);
	            	$sql="insert into ".$GLOBALS['engrave']->table('package').
	            	"(pck_warehouseid,pck_expressnumber,pck_weight,pck_sizelength".
	            	",pck_sizewidth,pck_sizeheight,pck_inventorylocation,pck_userid".
		            ",pck_storagecode,pck_packagestatus,pck_intime,pck_istrouble,pck_isdelete) values(
	            	'{$strs[3]}',
	            	'{$strs[0]}',
	            	'{$strs[2]}',
	            	'{$strs[5]}',
	            	'{$strs[6]}',
	            	'{$strs[7]}',
	            	'{$strs[4]}',
	            	'{$user_id}',
	            	'{$strs[1]}',
	            	'1',
	            	'{$intime}',
	            	'0',
	            	'0')";
            	}
            	else 
            	{
            		$msg = "入库码为：" . $strs[1] . "，用户不存在，请检查后导入！";
            		return $msg;
            	}
            }
			if(!$GLOBALS['engrave_db']->query($sql))
			{
			   $msg = "SQL语句有误！";
			   return $msg;
		    }
	     }
	     unlink($uploadfile);
	     $msg = "导入成功";
	     return $msg;
	 }
	 else
	 {
	     $msg = "导入失败";
	     return $msg;
	 }
	 return $msg;
  }
  /**
   * 判断是否存在该运单号
   * @param unknown $expressNumber
   */
  function IsExistExpressNumber($expressNumber)
  {
	  	$sql = "SELECT COUNT(*) FROM " . $GLOBALS['engrave']->table('package') .
	  			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	  	$result = $GLOBALS['engrave_db']->getOne($sql);
	  	return $result;
  }
  /**
   * 判断是否存在该条数据
   * @param unknown $expressNumber
   * @param unknown $storageNo
   */
  function IsExitsExpressStorage($expressNumber,$storageCode)
  {
	  	$sql = "SELECT COUNT(*) FROM " . $GLOBALS['engrave']->table('package') .
	  	" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "' AND pck_storagecode = '".$storageCode."'";
	  	$result = $GLOBALS['engrave_db']->getOne($sql);
	  	return $result;
  }
  /**
   * 获取该运单号包裹Id
   * @param unknown $expressNumber
   */
  function GetPackageId($expressNumber)
  {
	  	$sql = "SELECT pck_id FROM " . $GLOBALS['engrave']->table('package') .
	  	" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	  	$PckId = $GLOBALS['engrave_db']->getOne($sql);
	  	return $PckId;
  }
  /**
   * 判断是否存在该入库码的用户
   * @param unknown $storageCode
   * @return unknown
   */
  function IsExitsStorageCode($storageCode)
  {
  	$sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('users') .
  	" WHERE isdelete = 0 AND storage_code = '" . $storageCode . "'";
  	$result = $GLOBALS['db']->getOne($sql);
  	return $result;
  }
  /**
   * 获得用户Id
   * @param unknown $storagecode
   */
  function GetUserId($storagecode)
  {
  	$sql = "SELECT user_id FROM " . $GLOBALS['ecs']->table('users') .
  	" WHERE isdelete = 0 AND storage_code = '" . $storagecode . "'";
  	$UserId = $GLOBALS['db']->getOne($sql);
  	return $UserId;
  }
?>