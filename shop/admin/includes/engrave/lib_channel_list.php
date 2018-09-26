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
 * 频道管理：频道列表-获取频道列表
 * @param number $categoryid
 * @param number $selected
 * @param string $re_type
 * @param number $level
 * @param string $is_show_all
 * @return Ambigous <string, multitype:>|string|Ambigous <void, boolean, string>
 */
function engrave_channel_list($categoryid = 0, $selected = 0, $re_type = true, $level = 0, $is_show_all = true)
{
	static $res = NULL;

    if ($res === NULL)
    {
        $sql = "SELECT c.categoryid,c.typename,c.abbreviation,c.allowpost,".
        "c.parentid,COUNT(s.categoryid) AS has_children,c.IsDelete ".
        "FROM " . $GLOBALS['engrave']->table('channel') . " AS c ".
        "LEFT JOIN " . $GLOBALS['engrave']->table('channel') . 
        " AS s ON s.parentid=c.categoryid ".
		" where c.IsDelete=0 " .
        " GROUP BY c.categoryid ".
        " ORDER BY c.parentid, c.sortid ASC";
            $res = $GLOBALS['engrave_db']->getAll($sql);

            $sql = "SELECT CntCategoryId, COUNT(*) AS contents_num " .
                    " FROM " . $GLOBALS['engrave']->table('article') .
                    " WHERE CntIsDelete = 0 " .
                    " GROUP BY CntCategoryId";
            $res2 = $GLOBALS['engrave_db']->getAll($sql);

            $newres = array();
            foreach($res2 as $k=>$v)
            {
                $newres[$v['categoryid']] = $v['contents_num'];
            }

            foreach($res as $k=>$v)
            {
                $res[$k]['contents_num'] = !empty($newres[$v['categoryid']]) ? $newres[$v['categoryid']] : 0;
            }
    }

    if (empty($res) == true)
    {
        return $re_type ? '' : array();
    }



    if( $re_type === "data" ) {

        $data = "";
        foreach($res as $k=>$v)
        {
            $data[$v['categoryid']] = Array(
                "typename" => $v['typename'],
                "parentid" =>  $v['parentid']
            );
        }
        foreach($data as $k=>$v)
        {
            if($v['parentid']>0) {
                $data[$k]["typename"] = $data[$v['parentid']]['typename'] . " > " . $v['typename'];
            }
        }
        return $data;
    }
    $options = channel_options($categoryid, $res); // 获得指定分类下的子分类的数组

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
        if ($categoryid == 0)
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

        $select = '';
        foreach ($options AS $var)
        {
            $select .= '<option value="' . $var['categoryid'] . '" ';
            $select .= ($selected == $var['categoryid']) ? "selected='ture'" : '';
            $select .= '>';
            if ($var['level'] > 0)
            {
                $select .= str_repeat('&nbsp;', $var['level'] * 2);
            }
            $select .= htmlspecialchars(addslashes($var['typename']), ENT_QUOTES) . '</option>';
        }

        return $select;
    }
    else
    {

        foreach ($options AS $key => $value)
        {
            $options[$key]['url'] = build_uri('category', array('cid' => $value['categoryid']), $value['typename']);
        }
        return $options;
    }
}

/**
 * 将普通数据转化为对应的树形结构；select数据
 * @param unknown $spec_cat_id
 * @param unknown $arr
 * @return unknown|multitype:|multitype:unknown
 */
function channel_options($spec_cat_id, $arr)
{
		$level = $last_cat_id = 0;
		$options = $cat_id_array = $level_array = array();
			while (!empty($arr))
			{
				foreach ($arr AS $key => $value)
				{
					$categoryid = $value['categoryid'];
					if ($level == 0 && $last_cat_id == 0)
					{
						if ($value['parentid'] > 0)
						{
							break;
						}

						$options[$categoryid]          = $value;
						$options[$categoryid]['level'] = $level;
						$options[$categoryid]['id']    = $categoryid;
						$options[$categoryid]['name']  = $value['typename'];
						
						unset($arr[$key]);

						if ($value['has_children'] == 0)
						{
							continue;
						}
						$last_cat_id  = $categoryid;
						$cat_id_array = array($categoryid);
						$level_array[$last_cat_id] = ++$level;
						continue;
					}

					if ($value['parentid'] == $last_cat_id)
					{
						$options[$categoryid]          = $value;
						$options[$categoryid]['level'] = $level;
						$options[$categoryid]['id']    = $categoryid;
						$options[$categoryid]['name']  = $value['typename'];

						unset($arr[$key]);

						if ($value['has_children'] > 0)
						{
							if (end($cat_id_array) != $last_cat_id)
							{
								$cat_id_array[] = $last_cat_id;
							}
							$last_cat_id    = $categoryid;
							$cat_id_array[] = $categoryid;
							$level_array[$last_cat_id] = ++$level;
						}
					}
					elseif ($value['parentid'] > $last_cat_id)
					{
						break;
					}
				}

				$count = count($cat_id_array);
				
				if ($count > 1)
				{
					$last_cat_id = array_pop($cat_id_array);
				}
				elseif ($count == 1)
				{
					if ($last_cat_id != end($cat_id_array))
					{
						$last_cat_id = end($cat_id_array);
					}
					else
					{
						$level = 0;
						$last_cat_id = 0;
						$cat_id_array = array();
						continue;
					}
				}

				if ($last_cat_id && isset($level_array[$last_cat_id]))
				{
					$level = $level_array[$last_cat_id];
				}
				else
				{
					$level = 0;
				}
			}

	if (!$spec_cat_id)
	{
		return $options;
	}
	else
	{
		if (empty($options[$spec_cat_id]))
		{
			return array();
		}

		$spec_cat_id_level = $options[$spec_cat_id]['level'];

		foreach ($options AS $key => $value)
		{
			if ($key != $spec_cat_id)
			{
				unset($options[$key]);
			}
			else
			{
				break;
			}
		}

		$spec_cat_id_array = array();
		foreach ($options AS $key => $value)
		{
			if (($spec_cat_id_level == $value['level'] && $value['categoryid'] != $spec_cat_id) ||
			($spec_cat_id_level > $value['level']))
			{
				break;
			}
			else
			{
				$spec_cat_id_array[$key] = $value;
			}
		}
		$cat_options[$spec_cat_id] = $spec_cat_id_array;

		return $spec_cat_id_array;
	}
}

/**
 * 根据ID获取频道对象
 * @param number $isDelete：是否删除
 * @param unknown $categoryId：频道（类别）ID
 */
function engrave_channel($isDelete=0,$categoryId)
{
	$sql="select categoryid,abbreviation,typename,typesummary,rewritecatalogue,outsidelink,".
		"linktip,columnshowposition,conentmodel,classifytype,parentid,channellogo,allowpost,".
		"pagingsize,metakey,metadescription,contentlink,liststyle,sortid,".
		"leftadvert,topadvert,bottomadvert,beforelistadvert,afterlistadvert,beforewritten,contentbottomadvert,leftcontentadvert,".
		"beforecontentadvert,aftercontentadvert,innerwritten,cutformcontent from".$GLOBALS['engrave']->table("channel").
		" where IsDelete=".$isDelete." and categoryid=".$categoryId;

	return $GLOBALS['engrave_db']->getRow($sql);
}
/**
 *  频道管理：频道列表-添加频道
 * @param unknown $channel
 */
function engrave_channel_insert($channel)
{
	$sql="insert into " . $GLOBALS["engrave"]->table("channel").
		"(abbreviation,typename,typesummary,rewritecatalogue,outsidelink,".
		"linktip,columnshowposition,conentmodel,classifytype,parentid,channellogo,allowpost,".
		"pagingsize,metakey,metadescription,contentlink,liststyle,".
		"leftadvert,topadvert,bottomadvert,beforelistadvert,afterlistadvert,beforewritten,contentbottomadvert,leftcontentadvert,".
		"beforecontentadvert,aftercontentadvert,innerwritten,cutformcontent,".
		"sortid".
		") values('".
		$channel['abbreviation']."','".$channel['typename']."','".$channel['typesummary']."','".$channel['rewritecatalogue']."','".$channel['outsidelink']."','".
		$channel['linktip']."','".$channel['columnshowposition']."','".$channel['conentmodel']."','".$channel['classifytype']."','".$channel['parentid']."','".$channel['channellogo']."','".$channel['allowpost']."','".
		$channel['pagingsize']."','".$channel['metakey']."','".$channel['metadescription']."','".$channel['contentlink']."','".$channel['liststyle']."','".
		$channel['leftadvert']."','".$channel['topadvert']."','".$channel['bottomadvert']."','".$channel['beforelistadvert']."','".$channel['afterlistadvert']."','".$channel['beforewritten']."','".$channel['contentbottomadvert']."','".$channel['leftcontentadvert']."','".
		$channel['beforecontentadvert']."','".$channel['aftercontentadvert']."','".$channel['innerwritten']."','".$channel['cutformcontent']."','".
		$channel['sortid'].
		"')";
	
	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 频道修改
 * @param unknown $channel：频道对象
 * @param unknown $categoryid：频道ID
 */
function engrave_channel_update($channel,$categoryid)
{
	//获取指定ID下的频道列表
	$channel_list = engrave_channel_list($categoryid,0,false,0,true);
	$condition="";
	if($channel['parentid']!=$categoryid)
	{
		//屏蔽父ID为自身
		$condition="',parentid='".$channel['parentid'];
	}
	foreach ($channel_list as $key=>$value)
	{
		//屏蔽父ID为children
		if($value['parentid'] == $categoryid)
		{
			$condition='';
		}
	}
	$sql="update " . $GLOBALS["engrave"]->table("channel").
	"set abbreviation='".$channel['abbreviation'].
	"',typename='".$channel['typename'].
	"',typesummary='".$channel['typesummary'].
	"',rewritecatalogue='".$channel['rewritecatalogue'].
	"',outsidelink='".$channel['outsidelink'].
	"',sortid='".$channel['sortid'].
	"',linktip='".$channel['linktip'].
	"',columnshowposition='".$channel['columnshowposition'].
	"',conentmodel='".$channel['conentmodel'].
	"',classifytype='".$channel['classifytype'].
	$condition.
	"',channellogo='".$channel['channellogo'].
	"',allowpost='".$channel['allowpost'].
	"',pagingsize='".$channel['pagingsize'].
	"',metakey='".$channel['metakey'].
	"',metadescription='".$channel['metadescription'].
	"',contentlink='".$channel['contentlink'].
	"',liststyle='".$channel['liststyle'].
	"',leftadvert='".$channel['leftadvert'].
	"',topadvert='".$channel['topadvert'].
	"',bottomadvert='".$channel['bottomadvert'].
	"',beforelistadvert='".$channel['beforelistadvert'].
	"',afterlistadvert='".$channel['afterlistadvert'].
	"',beforewritten='".$channel['beforewritten'].
	"',contentbottomadvert='".$channel['contentbottomadvert'].
	"',leftcontentadvert='".$channel['leftcontentadvert'].
	"',beforecontentadvert='".$channel['beforecontentadvert'].
	"',aftercontentadvert='".$channel['aftercontentadvert'].
	"',innerwritten='".$channel['innerwritten'].
	"',cutformcontent='".$channel['cutformcontent'].
	"' where categoryid=".$categoryid;
	
	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 删除频道
 * @param number $isdelete
 * @param unknown $categoryid
 */
function engrave_channel_delete($isdelete=1,$categoryid)
{	
	$sql="update ".$GLOBALS['engrave']->table('channel').
	" set IsDelete='".$isdelete."' where categoryid='".
	$categoryid."'";
	
	return  $GLOBALS['engrave_db']->query($sql);
}

?>