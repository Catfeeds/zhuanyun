<?php 
/**
 * ENGRAVE 数据访问：会员管理-收货地址
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_users_deliveryaddress.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */

/**
 * 收货地址
 * @param number $da_userid：用户ID
 * @param number $startPage：起始页码
 * @return unknown：收货地址对象集合
 */
function engrave_users_deliveryaddress_list($da_userid=0,$startPage=0)
{
	$sql="select count(*) from " .
			$GLOBALS['engrave_shop']->table('users_deliveryaddress').
			" where da_isdelete=0 and da_userid=".$da_userid;
	$row = $GLOBALS['engrave_db']->getOne($sql);
	
	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'da_id' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	$filter['record_count'] = $row;
	/* 分页大小 */
	$filter['start'] = $startPage;
	$total = $filter['record_count'];
	$pageSize = $GLOBALS['_CFG']['page_size'];
	
	$sql='select da_id,da_userid,da_name,da_consignee,da_consigneetelephone,da_sparetelephone,'.
	'da_country,da_province,da_city,da_address,da_zipcode,da_remark,da_identitycard,'.
	'da_identitycardfront,da_identitycardbehind,da_attach,da_isvalidate from '.
	$GLOBALS['engrave_shop']->table('users_deliveryaddress').
	' where da_isdelete=0 and da_userid='.$da_userid.
	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
	" LIMIT " . $filter['start'] . ",".$pageSize;
	
	$users_deliveryaddress_list = $GLOBALS['engrave_shop_db']->getAll($sql);
	return array('users_deliveryaddress_list'=>$users_deliveryaddress_list, 'filter' => $filter, 'page_count' => ceil($total/$pageSize), 'record_count' => $filter['record_count']);
}

/**
 * 收货地址
 * @param number $da_id：ID
 * @return multitype:unknown：收货地址对象
 */
function engrave_users_deliveryaddress($da_id=0)
{
	$sql='select da_id,da_userid,da_name,da_consignee,da_consigneetelephone,da_sparetelephone,'.
			'da_country,da_province,da_city,da_address,da_zipcode,da_remark,da_identitycard,'.
			'da_identitycardfront,da_identitycardbehind,da_attach,da_isvalidate,da_adminremark,'.
			'da_identityassemble'.
			' from '.
			$GLOBALS['engrave_shop']->table('users_deliveryaddress').
			' where da_isdelete=0 and da_id='.$da_id;
	$users_deliveryaddress = $GLOBALS['engrave_shop_db']->getRow($sql);

	return $users_deliveryaddress;
}

/**
 * 添加
 * @param unknown $users_deliveryaddress：收货地址对象
 * @return boolean：若添加成功，返回true，反之，返回，false！
 */
function engrave_users_deliveryaddress_insert($users_deliveryaddress)
{
	if($users_deliveryaddress==null)
	{
		return false;
	}
	$sql='insert into '.
	$GLOBALS['engrave_shop']->table('users_deliveryaddress').
	"(da_userid,da_name,da_consignee,da_consigneetelephone,da_sparetelephone,".
	"da_country,da_province,da_city,da_address,da_zipcode,".
	"da_remark,da_identitycard,da_identitycardfront,da_identitycardbehind,da_identityassemble,da_attach,da_isdelete) values (".
	"'".$users_deliveryaddress['da_userid']."','".$users_deliveryaddress['da_name']."','".
	$users_deliveryaddress['da_consignee']."','".$users_deliveryaddress['da_consigneetelephone']."','".
	$users_deliveryaddress['da_sparetelephone']."','".$users_deliveryaddress['da_country']."','".
	$users_deliveryaddress['da_province']."','".$users_deliveryaddress['da_city']."','".
	$users_deliveryaddress['da_address']."','".$users_deliveryaddress['da_zipcode'].
	"','".$users_deliveryaddress['da_remark']."','".$users_deliveryaddress['da_identitycard']."','".
	$users_deliveryaddress['da_identitycardfront']."','".$users_deliveryaddress['da_identitycardbehind'].
	"','".$users_deliveryaddress['da_identityassemble']."','".$users_deliveryaddress['da_attach']."','0".
	"')";
	
	$res = $GLOBALS['engrave_shop_db']->query($sql);
	if($res==1)
	{
		return  true;
	}
	else
	{
		return false;
	}
}

/**
 * 修改
 * @param unknown $users_deliveryaddress：收货地址对象
 * @return boolean：若添加成功，返回true，反之，返回，false！
 */
function engrave_users_deliveryaddress_update($users_deliveryaddress)
{
	if($users_deliveryaddress==null)
	{
		return false;
	}
	$sql='update '.
	$GLOBALS['engrave_shop']->table('users_deliveryaddress').
	" set da_userid='".$users_deliveryaddress['da_userid'].
	"',da_name='".$users_deliveryaddress['da_name'].
	"',da_consignee='".$users_deliveryaddress['da_consignee'].
	"',da_consigneetelephone='".$users_deliveryaddress['da_consigneetelephone'].
	"',da_sparetelephone='".$users_deliveryaddress['da_sparetelephone'].
	"',da_country='".$users_deliveryaddress['da_country'].
	"',da_province='".$users_deliveryaddress['da_province'].
	"',da_city='".$users_deliveryaddress['da_city'].
	"',da_address='".$users_deliveryaddress['da_address'].
	"',da_zipcode='".$users_deliveryaddress['da_zipcode'].
	"',da_remark='".$users_deliveryaddress['da_remark'].
	"',da_identitycard='".$users_deliveryaddress['da_identitycard'].
	"',da_identitycardfront='".$users_deliveryaddress['da_identitycardfront'].
	"',da_identitycardbehind='".$users_deliveryaddress['da_identitycardbehind'];
	if($users_deliveryaddress['da_identityassemble']!='')
	{
		$sql.="',da_identityassemble='".$users_deliveryaddress['da_identityassemble'];
	}
	$sql.="',da_attach='".$users_deliveryaddress['da_attach'].
	"' where da_id = ".$users_deliveryaddress['da_id'];
	
	$res = $GLOBALS['engrave_shop_db']->query($sql);
	if($res==1)
	{
		return  true;
	}
	else
	{
		return false;
	}
}

/**
 * 删除
 * @param unknown $da_id：收货地址ID
 * @return boolean：若删除成功，返回ture，反之，false！
 */
function engrave_users_deliveryaddress_delete($da_id)
{
	$sql="update ".
	$GLOBALS['engrave_shop']->table('users_deliveryaddress')." set da_isdelete = 1 where da_id = ".$da_id;
	
	$res = $GLOBALS['engrave_shop_db']->query($sql);
	if($res==1)
	{
		return  true;
	}
	else
	{
		return false;
	}
}
?>