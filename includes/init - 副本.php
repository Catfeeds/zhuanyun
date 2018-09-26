<?php 

/**

 * ENGRAVE

 * ===========================================================

 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。

 * 网站地址: http://www.qdutsoft.com；

 * ----------------------------------------------------------

 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和

 * 使用；不允许对程序代码以任何形式任何目的的再发布。

 * ==========================================================

 * $Author: zhangxingpeng $

 * $Id: init.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $

 */



if (!defined('IN_ENGRAVE'))

{

	die('Hacking attempt');

}



error_reporting(E_ALL);



if (__FILE__ == '')

{

	die('Fatal error code: 0');

}





/* 取得当前ecshop所在的根目录 */

$PHP_SELF=$_SERVER['PHP_SELF'];

$url='http://'.$_SERVER['HTTP_HOST'].substr($PHP_SELF,0,strrpos($PHP_SELF,'/')+1);



define('ROOT_PATH', str_replace('includes/init.php', '', str_replace('\\', '/', __FILE__)));	

define('ROOT_PATH_PRE', dirname(str_replace('includes/init.php', '', str_replace('\\', '/', __FILE__))));

define('ROOT_URL',$url);

define('ROOT_URL_PRE','http://'.$_SERVER['HTTP_HOST']);



if (!file_exists(ROOT_PATH . 'data/install.lock') && !file_exists(ROOT_PATH . 'includes/install.lock')

&& !defined('NO_CHECK_INSTALL'))

{

	header("Location: ./install/index.php\n");



	exit;

}



/* 初始化设置 */

@ini_set('memory_limit',          '64M');

@ini_set('display_errors',        1);



if (DIRECTORY_SEPARATOR == '\\')

{

	@ini_set('include_path', '.;' . ROOT_PATH);

}

else

{

	@ini_set('include_path', '.:' . ROOT_PATH);

}



require(ROOT_PATH . 'data/config.php');



if (defined('DEBUG_MODE') == false)

{

	define('DEBUG_MODE', 0);

}



if (PHP_VERSION >= '5.1' && !empty($timezone))

{

	date_default_timezone_set($timezone);

}



$php_self = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];

if ('/' == substr($php_self, -1))

{

	$php_self .= 'index.php';

}

define('PHP_SELF', $php_self);



require(ROOT_PATH . 'includes/inc_constant.php');

require(ROOT_PATH . 'includes/cls_engrave.php');

require(ROOT_PATH . 'includes/cls_error.php');

require(ROOT_PATH . 'includes/lib_time.php');

require(ROOT_PATH . 'includes/lib_base.php');

require(ROOT_PATH . 'includes/lib_common.php');

require(ROOT_PATH . 'includes/lib_main.php');

require(ROOT_PATH . 'includes/lib_main_admin.php');



/* 对用户传入的变量进行转义操作。*/

if (!get_magic_quotes_gpc())

{

	if (!empty($_GET))

	{

		$_GET  = addslashes_deep($_GET);

	}

	if (!empty($_POST))

	{

		$_POST = addslashes_deep($_POST);

	}



	$_COOKIE   = addslashes_deep($_COOKIE);

	$_REQUEST  = addslashes_deep($_REQUEST);

}



/* 创建 ENGRAVE 对象 */

$engrave = new ENGRAVE($engrave_db_name, $engrave_prefix);

$engrave_shop = new ENGRAVE($engrave_shop_db_name, $engrave_shop_prefix);



/* 初始化数据库类 */

require(ROOT_PATH . 'includes/cls_mysql.php');



$engrave_db = new cls_mysql($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);

//$engrave_db_host = $engrave_db_user = $engrave_db_pass = $engrave_db_name = NULL;





$engrave_shop_db = new cls_mysql($engrave_shop_db_host, $engrave_shop_db_user, $engrave_shop_db_pass, $engrave_shop_db_name);

//$engrave_shop_db_host = $engrave_shop_db_user = $engrave_shop_db_pass = $engrave_shop_db_name = NULL;



/* 创建错误处理对象 */

$err = new ecs_error('message.dwt');



/* 载入系统参数 */

$_CFG = load_config();



/*载入商城系统*/

$_SCFG = load_shop_config();



/* 载入语言文件 */

require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/common.php');



if (is_spider())

{

	/* 如果是蜘蛛的访问，那么默认为访客方式，并且不记录到日志中 */

	if (!defined('INIT_NO_USERS'))

	{

		define('INIT_NO_USERS', true);

		/* 整合UC后，如果是蜘蛛访问，初始化UC需要的常量 */

		if($_CFG['integrate_code'] == 'ucenter')

		{

			$user = & init_users();

		}

	}

	$_SESSION = array();

	//用户ID、姓名、email、等级、折扣

	$_SESSION['user_id']     = 0;

	$_SESSION['user_name']   = '';

	$_SESSION['email']       = '';

	$_SESSION['user_rank']   = 0;

	$_SESSION['discount']    = 1.00;

}



if (!defined('INIT_NO_SMARTY'))

{

	header('Cache-control: private');

	header('Content-type: text/html; charset='.EC_CHARSET);



	/* 创建 Smarty 对象。*/

 	require(ROOT_PATH . 'includes/cls_template.php');

	$smarty1 = new cls_template;

	

	require(ROOT_PATH . 'includes/Smarty.class.php');

	$smarty = new Smarty;

	
	$sql="select value from " .$GLOBALS['engrave']->table('system_config')." where id=101";

	$row = $GLOBALS['engrave_db']->getOne($sql);
    $smarty->assign('page_title',  $row);    // 页面标题





$smarty->assign('daohang',  engrave_daohang());   








   // $smarty->assign('ur_here',         $position['ur_here']);  // 当前位置

	$smarty->caching = false;

	$smarty->compile_check = true;

	$smarty->cache_lifetime = $_CFG['cache_time'];

	$smarty->template_dir   = ROOT_PATH . 'themes/' . $_CFG['template'];

	$smarty->cache_dir      = ROOT_PATH . 'temp/caches';

	$smarty->compile_dir    = ROOT_PATH . 'temp/compiled';

	$smarty->direct_output = false;

	$smarty->force_compile = false;



	$smarty->assign('lang', $_LANG);

	$smarty->assign('ecs_charset', EC_CHARSET);

	if (!empty($_CFG['stylename']))

	{

		$smarty->assign('ecs_css_path', 'themes/' . $_CFG['template'] . '/style_' . $_CFG['stylename'] . '.css');

	}

	else

	{

		$smarty->assign('ecs_css_path', 'themes/' . $_CFG['template'] . '/style.css');

	}



}
function engrave_daohang()

{

	$sql = "SELECT * " .

			" FROM " . $GLOBALS['engrave']->table('menu') ."where isshow=1 order by paixu desc";

	

	$row = $GLOBALS['engrave_db']->getAll($sql);

	return $row;

}







include_once (ROOT_PATH . 'lib/function.php');


if(isset($_GET["lang"])){
  $_SESSION["language"] = $_GET["lang"];
}
else if(@$_SESSION["language"]=="" and $_GET["lang"]==""){
 $_SESSION["language"] ='en';
}
else{
 $_SESSION["language"] = $_SESSION["language"];
    }
$language_name = getLanguageName($_SESSION["language"]);
include_once (ROOT_PATH  . "lang/".$language_name.".inc.php");



 function xuanyuyan(){
 
 $aa="<SELECT NAME='language' id='language' onchange='changeLanguage(this)'>";
 $language_array = array_language();
  foreach($language_array as $key => $value){
  if($_SESSION["language"] == $value){
     $selected = "selected = 'selected' ";
 }else{
  $selected = "";
 }
 
 $aa.=" <OPTION VALUE='".$value."'".$selected."/>".getLanguageName($value)."</OPTION>;";
 }
 $aa.="</SELECT>";
 return $aa;
 }
	$smarty->assign('xuanyuyan', xuanyuyan());
?>