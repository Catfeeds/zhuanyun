<?php 
/**
 * ENGRAVE 数据访问：系统管理员
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_admin_user.php 17217 2015年1月12日 13:51:22 zhangxingpeng $
 */

/**
 * 获取增值服务列表
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 * @param number $pck_packagestatus:包裹状态：0-未到货、1-已入库、2-已过期
 */
function engrave_admin_user_byid($admin_user_id=0)
{
	$sql = "select user_id,user_name,email,password,ec_salt from ".
	$GLOBALS['ecs']->table('admin_user').
	" where user_id=".$admin_user_id;

	return $GLOBALS['db']->getRow($sql);
}
?>