<?php

/**

 *  网站分类 相关函数

 * ============================================================================

 * * 版权所有

 * 网站地址:

 * ----------------------------------------------------------------------------

 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和

 * 使用；不允许对程序代码以任何形式任何目的的再发布。

 * ============================================================================

 * $Author: zxp $

 * $Id: $

 */



/**

 * 获得网站分类列表

 *

 * @access  public

 * @params  integer $isdelete

 * @params  integer $real_goods

 * @params  integer $conditions

 * @return  array

 */

function engrave_classification_list($real_goods=1, $conditions = '')

{

	/* 记录总数 */

	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('siteclassification');

	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);



	$filter = array();

	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'ClassId' : trim($_REQUEST['sort_by']);

	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);

	

	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);

	/* 分页大小 */

	$filter = page_and_size($filter);



	$sql = "SELECT ClassId,ClassName " .

			" FROM " . $GLOBALS['engrave']->table('siteclassification') .

			" where ClassIsDelete =0".

			" order by " .$filter['sort_by'].' '.$filter['sort_order'] .

			" LIMIT " . $filter['start'] . ",$filter[page_size]";



	$filter['keyword'] = stripslashes($filter['keyword']);

	//set_filter($filter, $sql, $param_str);

	$row = $GLOBALS['engrave_db']->getAll($sql);

	return array('class_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

}



/**

 * 获取站点分类：select类型

 */

function engrave_site_classifity_select($selectitem=0)

{

	$sql = "SELECT ClassId,ClassName " .

			" FROM " . $GLOBALS['engrave']->table('siteclassification') .

			" where ClassIsDelete=0";

	$row = $GLOBALS['engrave_db']->getRow($sql);

	$str_select_option="";

	//获取$row的count

	$isunidimensional=true;

	if (count($array)!=count($array, 1)) 

	{

		$isunidimensional=false;

	}

	if($isunidimensional)

	{

		$selected="";

		if($key===$selectitem)

		{

			$selected=" selected='selected' ";

		}

		$str_select_option.="<option value='".$row['ClassId']."'".$selected.">".$row['ClassName']."</option>";

	}

	else

	{

		foreach ($row as $key=>$val)

		{

			$selected="";

			if($key===$selectitem)

			{

				$selected=" selected='selected' ";

			}

			$str_select_option.="<option value='".$key."'".$selected.">".$val."</option>";

		}

	}

	return  $str_select_option;

}



/**

 * 获取 站点分类 对象:where 站点分类ID

 * @param unknown $classid

 * @return multitype:unknown string

 */

function engrave_classification($classid)

{

	$sql = "SELECT ClassId,ClassName " .

			" FROM " . $GLOBALS['engrave']->table('siteclassification') .

			" where ClassIsDelete=0 and ClassId=" . $classid;

	

	$row = $GLOBALS['engrave_db']->getRow($sql);

	return array("classification"=>$row);

}







/**

 * 站点分类:添加

 * @param unknown $classification：站点分类对象

 */

function engrave_classification_insert($classification)

{

	$sql="insert into " . $GLOBALS['engrave']->table('siteclassification').

		" (ClassName,ClassIsDelete)".

		" values('".$classification['ClassName']."',0)";

	return $GLOBALS['engrave_db']->query($sql);

}




function engrave_meun_insert($classification)

{

	$sql="insert into " . $GLOBALS['engrave']->table('menu').

		" (title,titleen,titletw,url,paixu,isshow)".

		" values('".$classification['title']."','".$classification['titleen']."','".$classification['titletw']."','".$classification['url']."','".$classification['paixu']."','".$classification['isshow']."')";

	return $GLOBALS['engrave_db']->query($sql);

}




function engrave_jisuan_insert($classification)

{

	$sql="insert into " . $GLOBALS['engrave']->table('calculator').

		" (gongshi,neirong,fangshi,paixu,huilv)".

		" values('".$classification['gongshi']."','".$classification['neirong']."','".$classification['fangshi']."','".$classification['paixu']."','".$classification['huilv']."')";

	return $GLOBALS['engrave_db']->query($sql);

}

/**

 * 站点分类:编辑

 * @param unknown $classification：站点分类对象

 * @param unknown $classid：站点分类ID

 */

function engrave_classification_update($classification,$classid)

{

	$sql="update" . $GLOBALS['engrave']->table('siteclassification').

		"set".

		" ClassName='".$classification['ClassName']."'".

		" where ClassId=".$classid;

	return $GLOBALS['engrave_db']->query($sql);

}

function engrave_meun_update($classification,$classid)

{

	$sql="update" . $GLOBALS['engrave']->table('menu').

"set title='".$classification['title']."',url='".$classification['url']."', paixu='".$classification['paixu']."',isshow='".$classification['isshow']."' where id=".$classid;

	return $GLOBALS['engrave_db']->query($sql);

}


/**

 * 站点分类：删除

 * @param unknown $classid：站点分类ID

 */

function engrave_site_classification_delete($isdelete,$classid)

{

	$sql="update" . $GLOBALS['engrave']->table('siteclassification').

		"set".

		" ClassIsDelete=" . $isdelete .

		" where ClassId=".$classid;

	return $GLOBALS['engrave_db']->query($sql);

}



/**

 * 站点分类:唯一性

 * @param unknown $classname：站点名称

 */

function engrave_uniqueness($classname,$oldclassname='')

{

	if($classname=='')

	{

		return true;

	}

	if($classname==$oldclassname)

	{

		return false;

	}

	$sql="SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('siteclassification').

		" where ClassName='".$classname."'";

	

	$count=$GLOBALS['engrave_db']->getOne($sql);

	if($count>0)

	{

		return true;

	}

	else

	{

		return false;

	}

}




function engrave_me($classname,$oldclassname='')

{

	if($classname=='')

	{

		return true;

	}

	if($classname==$oldclassname)

	{

		return false;

	}

	$sql="SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('menu').

		" where title='".$classname."'";

	

	$count=$GLOBALS['engrave_db']->getOne($sql);

	if($count>0)

	{

		return true;

	}

	else

	{

		return false;

	}

}




function engrave_mejisuan($classname,$oldclassname='')

{

	if($classname=='')

	{

		return true;

	}

	if($classname==$oldclassname)

	{

		return false;

	}

	$sql="SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('calculator').

		" where fangshi='".$classname."'";

	

	$count=$GLOBALS['engrave_db']->getOne($sql);

	if($count>0)

	{

		return true;

	}

	else

	{

		return false;

	}

}
?>