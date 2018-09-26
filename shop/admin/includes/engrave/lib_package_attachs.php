<?php 
/**
 * ENGRAVE 数据访问：包裹管理-包裹附件
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_package_attachs.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */

/**
 * 包裹附件-添加：带事务
 * @param unknown $attachs：附件
 * @param unknown $conn：数据库连接对象
 * @return boolean：若添加成功，返回true，反之，返回false！
 */
function engrave_package_attachs_insert($attachs,$conn)
{
	$sql="insert into ".$GLOBALS['engrave']->table('package_attachs').
	'(pa_packageid,pa_attach) values('.
	$attachs['pa_packageid'].',\''.$attachs['pa_attach'].
	'\')';
	$result = mysql_query($sql,$conn);
	if($result!==false)
	{
		return true;
	}else{
		return true;
	}
}

/**
 * 根据包裹ID，获取附件
 * @param number $pck_id：包裹ID
 * @return unknown
 */
function engrave_package_attachs_list($pck_id=0)
{
	$sql="select pa_packageid,pa_attach from ".$GLOBALS['engrave']->table('package_attachs').
	' where pa_packageid = '.$pck_id;
	$result = $GLOBALS['engrave_db'] -> getAll($sql);
	
	return $result;
}
?>