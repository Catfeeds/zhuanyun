<?php 

/**
 * ENGRAVE 数据访问：内容管理-文章管理
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_focus_map.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */

/**
 * 获得焦点图列表
 */
function engrave_focus_list()
{
	$sql = "SELECT FocusId,Title,ImgUrl,LinkUrl,Systime,State " .
			" FROM " . $GLOBALS['engrave']->table('focusmap') .
			" where State=1  order by Systime desc limit 0,5";
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('focusmap_list' => $row);
}
?>