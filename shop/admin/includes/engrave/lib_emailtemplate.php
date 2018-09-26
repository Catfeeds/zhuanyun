<?php 

/**
 * 获取邮件模板分页列表
 * @return multitype:unknown string：邮件模板数组集合
 */
function engrave_emailtemplate_pagelist()
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('emailtemplate');
	
	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'et_id' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);
	
	$sql = "select et_id,et_tag,et_des,et_title,et_content,et_egid,eg_name " .
	" FROM " . $GLOBALS['engrave']->table('emailtemplate') .
	" left join ".$GLOBALS['engrave']->table('emailgroup').
	" on et_egid = eg_id ".
	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
	" LIMIT " . $filter['start'] . ",$filter[page_size]";
	
	$filter['keyword'] = stripslashes($filter['keyword']);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('emailtemplate_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 根据ID查询：邮件模板
 * @param number $et_id：邮件模板ID
 * @return unknown：邮件模板
 */
function engrave_emailtemplate_byid($et_id = 0)
{
	$sql="select et_id,et_tag,et_des,et_title,et_content,et_egid " .
	" FROM " . $GLOBALS['engrave']->table('emailtemplate') .
	" where et_id = " . $et_id;
	
	$row = $GLOBALS['engrave_db'] -> getRow($sql);
	return $row;	
}

/**
 * 添加
 * @param unknown $emailtemplate：邮件模板
 * @return boolean：若添加成功，返回true，反之返回false！
 */
function engrave_emailtemplate_insert($emailtemplate)
{
	$sql="insert into ".$GLOBALS['engrave']->table('emailtemplate').
	"(et_tag,et_des,et_title,et_content,et_egid) values ('".
	$emailtemplate['et_tag'] ."','".
	$emailtemplate['et_des'] ."','".
	$emailtemplate['et_title'] ."','".
	$emailtemplate['et_content'] ."',".
	$emailtemplate['et_egid'].
	")";
	
	$result = $GLOBALS['engrave_db'] -> query($sql);
	if($result!==false)
	{
		return true;
	}else{
		return false;
	}
}

/**
 * 修改
 * @param unknown $emailtemplate：邮件模板
 * @return boolean：若修改成功，返回true，反之返回false！
 */
function engrave_emailtemplate_update($emailtemplate)
{
	$sql="update ".$GLOBALS['engrave']->table('emailtemplate').
	" set ".
	" et_tag='".$emailtemplate['et_tag'] .
	"',et_des='".$emailtemplate['et_des'] .
	"',et_title='".	$emailtemplate['et_title'] .
	"',et_content='". $emailtemplate['et_content'] .
	"',et_egid = ".	$emailtemplate['et_egid'] .
	" where et_id = ".$emailtemplate['et_id'];
	
	$result = $GLOBALS['engrave_db'] -> query($sql);
	if($result!==false)
	{
		return true;
	}else{
		return false;
	}
}

/**
 * 电子邮件分组：option
 * @param number $selected_index：默认选择项
 * @return string：电子邮件分组
 */
function engrave_eamilgroup_option($selected_index=0)
{
	$sql="select eg_id,eg_name from ".
	$GLOBALS['engrave']->table('emailgroup');
	
	$emailgroup_list = $GLOBALS['engrave_db']->getAll($sql);
	$option='';
	foreach ($emailgroup_list as $key=>$val)
	{
		$option.='<option value=\''.$val['eg_id'].'\'';
		if($selected_index == $val['eg_id'])
		{
			$option.='selected="true"';
		}
		$option.='>';
		$option.= $val['eg_name'];
		$option.='</option>';
	}
	return $option;
}

/**
 * 判断 邮件模板分组类型是否存在
 * @param number $et_egid：邮件模板分组ID
 * @param number $count：若为添加，默认0；修改，为1
 * @return boolean：若存在，返回true，反之，返回false！
 */
function engrave_emailtemplate_isexist_et_egid($et_egid = 0,$count = 0)
{
	$sql="select count(*) from ".
	$GLOBALS['engrave']->table('emailtemplate').
	" where et_egid=".$et_egid;
	
	$result = $GLOBALS['engrave_db']->getOne($sql);
	if($result > $count)
	{
		return true;
	}else{
		return false;
	}
}
?>