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
 * 获得模版分类列表
 *
 * @access  public
 * @return  array：模板数组对象集合
 */
function engrave_template_list()
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('template').
	" WHERE temp_delete = 0";
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT temp_id,temp_name,temp_filename,temp_size,temp_catalog,temp_updatetime,".
	"temp_content,temp_delete" .
	" FROM " . $GLOBALS['engrave']->table('template') .
	" WHERE temp_delete = 0" .
	" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($row as $key=>$val)
	{
		$row[$key]['temp_updatetime'] = local_date('Y-m-d H:i:s',$val['temp_updatetime']);
	}
	return array('template_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 运单模板：下拉列表Option
 * @param number $selected_temp_id:默认选中的 运单模板ID
 * @return string：下拉列表Option
 */
function engrave_template_option($selected_temp_id=0)
{
	$option = '';

	$sql = "SELECT temp_id,temp_name,temp_filename,temp_size,temp_catalog,temp_updatetime,".
	"temp_content,temp_delete" .
	" FROM " . $GLOBALS['engrave']->table('template') .
	" WHERE temp_delete = 0";
	$templates = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($templates as $key=>$val)
	{
		$option .= "<option value='".$val['temp_id']."'";
		if($selected_temp_id == $val['temp_id'])
		{
			$option .= " selected='selected' ";
		}
		$option .= ">";
		$option .= $val['temp_name'];
		$option .= "</option>";
	}
	return $option;
}

/**
 * 根据ID获取运单模板
 * @param number $temp_id：运单模板ID
 * @return array：运单模板数组对象
 */
function engrave_template_byid($temp_id = 0)
{
	$sql = "SELECT temp_id,temp_name,temp_filename,temp_size,temp_catalog,temp_updatetime,".
	"temp_content,temp_delete" .
	" FROM " . $GLOBALS['engrave']->table('template') .
	" WHERE temp_delete = 0 and temp_id=".$temp_id;
	
	$template = $GLOBALS['engrave_db']->getRow($sql);
	return $template;
}

/**
 * 根据订单ID，获取运单模板信息
 * @param number $order_id：订单ID
 * @return array：运单模板数组对象
 */
function engrave_template_byorderid($order_id = 0)
{
	$sql="select temp_id,temp_name,temp_filename,temp_size,temp_catalog,temp_updatetime,".
	"temp_content,temp_delete from ". $GLOBALS['engrave']->table('template') . 
	" right join ". $GLOBALS['engrave']->table('shipping') . " on ShippingTemplate = temp_id".
	" right join ". $GLOBALS['engrave']->table('order') . " on order_shippingid=ShippingId".
	" where order_id=".$order_id;
	
	$template = $GLOBALS['engrave_db']->getRow($sql);
	return $template;
}

/**
 * 添加
 * @param unknown $template：模板对象
 * @return boolean：若添加面单模板成功，返回true，反之，返回false！
 */
function engrave_template_insert($template)
{
	$template['temp_updatetime'] = gmtime();
	$template['temp_filename'] = local_date('YmdHis',$template['temp_updatetime']);
	
	$sql="insert into ". $GLOBALS['engrave']->table('template') .
	"(temp_name,temp_filename,temp_size,temp_catalog,temp_updatetime,temp_content,temp_delete)".
	" values ('".
	$template['temp_name']."','".
	$template['temp_filename']."','".
	$template['temp_size']."','".
	$template['temp_catalog']."','".
	$template['temp_updatetime']."','".
	$template['temp_content']."','".
	$template['temp_delete'].
	"')";
	
	$result = $GLOBALS['engrave_db']->query($sql);
	if($result!==false){
		return true;
	}else{
		return false;
	}
}

/**
 * 删除：运单模板
 * @param number $temp_id：模板ID
 * @return boolean：若删除成功，返回true，反之返回false！
 */
function engrave_template_remove($temp_id=0)
{
	$sql = "update ".$GLOBALS['engrave']->table('template') .
	" set temp_delete=1 where temp_id=".$temp_id;
	$result = $GLOBALS['engrave_db']->query($sql);
	
	if($result!==false){
		return true;
	}else{
		return false;
	}
}
?>