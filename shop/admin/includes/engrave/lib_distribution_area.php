<?php 

/**
 *  货币管理 相关函数
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
 * 获得 配送区域 列表
 *
 * @access  public
 * @params  integer $distribution_area_parentid
 * @params  string $conditions
 * @return  array
 */
function engrave_distribution_area_list($distribution_area_parentid=0, $conditions = '')
{
	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'asarea.Id' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'ASC' : trim($_REQUEST['sort_order']);
	
	/* 记录总数 */
    $sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('area') . " where IsDeleteArea=0 AND ParentId=" .$distribution_area_parentid ;
    $filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
    /* 分页大小 */
    $filter = page_and_size($filter);

    $sql = "SELECT Id,Name,ParentId " .
           " FROM " . $GLOBALS['engrave']->table('area') . " as asarea" .
           " where IsDeleteArea=0 AND ParentId=" .$distribution_area_parentid .
           ' ORDER by '.$filter['sort_by'].' '.$filter['sort_order'] .
           " LIMIT " . $filter['start'] . ",$filter[page_size]"
           ;
           
    //set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	
    return array('distribution_area_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
/**
 * 物流系统：配送地区管理-获取配送地区管理
 * @param number $categoryid
 * @param number $selected
 * @param string $re_type
 * @param number $level
 * @param string $is_show_all
 * @return Ambigous <string, multitype:>|string|Ambigous <void, boolean, string>
 */
function engrave_disarea_list($Id = 0, $selected = 0, $re_type = true, $level = 0, $is_show_all = true)
{
	static $res = NULL;

	if ($res === NULL)
	{
		$sql = "SELECT a.Id,a.Name,a.ParentId,".
				"COUNT(d.Id) AS has_children,a.IsDeleteArea ".
				"FROM " . $GLOBALS['engrave']->table('area') . " AS a ".
				"LEFT JOIN " . $GLOBALS['engrave']->table('area') .
				" AS d ON d.ParentId = a.Id ".
				" where a.IsDeleteArea = 0 " .
				" GROUP BY a.Id ".
				" ORDER BY a.ParentId,a.Id ASC";//, a.SortId
		$res = $GLOBALS['engrave_db']->getAll($sql);
	}
	
	if (empty($res) == true)
	{
		return $re_type ? '' : array();
	}
	
	$options = area_options($Id, $res); // 获得指定分类下的子分类的数组
	
	$children_level = 99999; //大于这个分类的将被删除
	if ($is_show_all == false)
	{
		foreach ($options as $key => $val)
		{
			if ($val['level'] > $children_level)
			{
				unset($options[$key]);
			}
			else
			{
				if ($val['is_show'] == 0)
				{
					unset($options[$key]);
					if ($children_level > $val['level'])
					{
						$children_level = $val['level']; //标记一下，这样子分类也能删除
					}
				}
				else
				{
					$children_level = 99999; //恢复初始值
				}
			}
		}
	}

	/* 截取到指定的缩减级别 */
	if ($level > 0)
	{
		echo $level;
		if ($Id == 0)
		{
			$end_level = $level;
		}
		else
		{
			$first_item = reset($options); // 获取第一个元素
			$end_level  = $first_item['level'] + $level;
		}

		/* 保留level小于end_level的部分 */
		foreach ($options AS $key => $val)
		{
			if ($val['level'] >= $end_level)
			{
				unset($options[$key]);
			}
		}
	}
	
	if ($re_type == true)
	{
		if(!$options)
		{
			return;
		}
		$select = '';
		foreach ($options AS $var)
		{
			$select .= '<option value="' . $var['Id'] . '" ';
			$select .= ($selected == $var['Id']) ? "selected='ture'" : '';
			$select .= '>';
			if ($var['level'] > 0)
			{
				$select .= str_repeat('&nbsp;', $var['level'] * 2);
			}
			$select .= htmlspecialchars(addslashes($var['Name']), ENT_QUOTES) . '</option>';
		}

		return $select;
	}
}
/**
 * 将普通数据转化为对应的树形结构；select数据
 * @param unknown $spec_area_id
 * @param unknown $arr
 * @return unknown|multitype:|multitype:unknown
 */
function area_options($spec_area_id, $arr)
{
	$level = $last_area_id = 0;
	$options = $area_id_array = $level_array = array();
	$index=0;
	while (!empty($arr))
	{
		$index++;
		foreach ($arr AS $key => $value)
		{
			$areaid = $value['Id'];
			if ($level == 0 && $last_area_id == 0)
			{
				if ($value['ParentId'] > 0)
				{
					break;
				}
				$options[$areaid]          = $value;
				$options[$areaid]['level'] = $level;
				$options[$areaid]['id']    = $areaid;
				$options[$areaid]['name']  = $value['Name'];

				unset($arr[$key]);

				if ($value['has_children'] == 0)
				{
					continue;
				}
				$last_area_id  = $areaid;
				$area_id_array = array($areaid);
				$level_array[$last_area_id] = ++$level;
				continue;
			}

			if ($value['ParentId'] == $last_area_id)
			{
				$options[$areaid]          = $value;
				$options[$areaid]['level'] = $level;
				$options[$areaid]['id']    = $areaid;
				$options[$areaid]['name']  = $value['Name'];
				
				unset($arr[$key]);

				if ($value['has_children'] > 0)
				{
					if (end($area_id_array) != $last_area_id)
					{
						$area_id_array[] = $last_area_id;
					}
					$last_area_id    = $areaid;
					$area_id_array[] = $areaid;
					$level_array[$last_area_id] = ++$level;
				}
				
			}
			elseif ($value['ParentId'] > $last_area_id)
			{
				break;
			}
		}
		$count = count($area_id_array);
		if ($count > 1)
		{
			$last_area_id = array_pop($area_id_array);
		}
		elseif ($count == 1)
		{
			if ($last_area_id != end($area_id_array))
			{
				$last_area_id = end($area_id_array);
			}
			else
			{
				$level = 0;
				$last_area_id = 0;
				$area_id_array = array();
				continue;
			}
		}

		if ($last_area_id && isset($level_array[$last_area_id]))
		{
			$level = $level_array[$last_area_id];
		}
		else
		{
			$level = 0;
		}
		/* 限定长度
 		if($index>=9){
		return;
 		}
 		*/
	}
	if (!$spec_area_id)
	{
		return $options;
	}
	else
	{
		if (empty($options[$spec_area_id]))
		{
			return array();
		}

		$spec_area_id_level = $options[$spec_area_id]['level'];

		foreach ($options AS $key => $value)
		{
			if ($key != $spec_area_id)
			{
				unset($options[$key]);
			}
			else
			{
				break;
			}
		}

		$spec_area_id_array = array();
		foreach ($options AS $key => $value)
		{
			if (($spec_area_id_level == $value['level'] && $value['Id'] != $spec_area_id) ||
			($spec_area_id_level > $value['level']))
			{
				break;
			}
			else
			{
				$spec_area_id_array[$key] = $value;
			}
		}
		$area_options[$spec_area_id] = $spec_area_id_array;

		return $spec_area_id_array;
	}
}

/**
 * 添加地区
 * @param unknown $distribution：区域对象
 */
function engrave_disarea_insert($distribution)
{
	$sql="insert into ".$GLOBALS['engrave']->table('area').
	"(Name,ParentId,Hits,IsDeleteArea) values('".
	$distribution['AreaName']."','".$distribution['ParentId']."','".$distribution['Hits']."','".$distribution['IsDeleteArea']."')";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 编辑地区
 * @param unknown $distribution：区域管理对象
 * @param unknown $AreaId：区域管理ID
 */
function engrave_disarea_update($distribution,$AreaId)
{
	$sql="update ".$GLOBALS['engrave']->table('area').
	"set Name='".$distribution['AreaName'].
	"',ParentId='".$distribution['ParentId'].
	"',Hits='".$distribution['Hits'].
	"' where Id='".$AreaId."'";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 添加地区节点
 * @param unknown $parentPath：区域管理节点
 * @param unknown $AreaId：区域管理ID
 */
function engrave_disarea_parentPath_update($parentPath,$AreaId)
{
	$sql="update ".$GLOBALS['engrave']->table('area').
	"set ParentPath='".$parentPath.
	"' where Id='".$AreaId."'";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 获取地区列表
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_disarea($AreaId='')
{
	$conditions='';
	if($AreaId!='')
	{
		$conditions=$conditions." and Id='". $AreaId . "'";
	}
	$sql = "select Id,Name,ParentId,Hits,IsDeleteArea " .
			" FROM " . $GLOBALS['engrave']->table('area').
			" where IsDeleteArea=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}
/**
 * 获取区域节点路径
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_disarea_parentpath($AreaId='')
{
	$conditions='';
	if($AreaId!='')
	{
		$conditions=$conditions." and Id='". $AreaId . "'";
	}
	$sql = "select ParentPath " .
			" FROM " . $GLOBALS['engrave']->table('area').
			" where IsDeleteArea=0 " . $conditions;
	return $GLOBALS['engrave_db']->getOne($sql);
}
/**
 * 区域删除
 * @param number IsDeleteArea：删除标识
 * @param unknown $AreaId：区域ID
 */
function engrave_disarea_delete($IsDeleteArea=1,$AreaId)
{
	$sqlid = '';
	$sql = "SELECT ParentPath ".
			"FROM " . $GLOBALS['engrave']->table('area');
	$res = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($res AS $key => $value)
	{
		$aa = explode(",", $value['ParentPath']);
        if(in_array($AreaId, $aa))
        {
        	$sql="update ".$GLOBALS['engrave']->table('area').
        	" set IsDeleteArea='".$IsDeleteArea."' WHERE ParentPath = '" . $value['ParentPath'] ."'";;
        	$sqlid = $GLOBALS['engrave_db']->query($sql);
        }
	}
	return $sqlid;
}
?>