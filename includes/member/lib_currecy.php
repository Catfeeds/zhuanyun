<?php 
/**
 * ENGRAVE 数据访问：货币
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_currecy.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */

/**
 * 获取默认货币
 */
function engrave_default_currency()
{
	$sql="select CId,`Name`,`Code`,Symbol,ExchageRate from " .
	$GLOBALS['engrave']->table('currecy')." where IsDefault=1";
	
	return $GLOBALS['engrave_db']->getRow($sql);
}
?>