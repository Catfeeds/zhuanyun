<?php
@session_start();
/**
 * 
 * $Author: cfang $
 */
if (!defined('IN_ENGRAVE'))   {
    die('Hacking attempt');
}
error_reporting(E_ERROR |  E_PARSE);
if (__FILE__ == '') {
    die('Fatal error code: 0');
}
/* 取得当前ecshop所在的根目录 */
$PHP_SELF = $_SERVER['PHP_SELF'];
$url = 'http://' . $_SERVER['HTTP_HOST'] . substr($PHP_SELF, 0, strrpos($PHP_SELF, '/') + 1);
define('ROOT_PATH', str_replace('includes/init.php', '', str_replace('\\', '/', __FILE__)));
define('ROOT_PATH_PRE', dirname(str_replace('includes/init.php', '', str_replace('\\', '/', __FILE__))));
define('ROOT_URL', $url);
define('ROOT_URL_PRE', 'http://' . $_SERVER['HTTP_HOST']);
if (!file_exists(ROOT_PATH . 'data/install.lock') && !file_exists(ROOT_PATH . 'includes/install.lock')
    && !defined('NO_CHECK_INSTALL'))  {
    header("Location: ./install/index.php\n");
    exit;
}
/* 初始化设置 */
@ini_set('memory_limit', '64M');
@ini_set('display_errors', "on");
if (DIRECTORY_SEPARATOR == '\\')  {
    @ini_set('include_path', '.;' . ROOT_PATH);
} else  {
    @ini_set('include_path', '.:' . ROOT_PATH);
}
require (ROOT_PATH . 'data/config.php');
if (defined('DEBUG_MODE') == false)  {
    define('DEBUG_MODE', 0);
}
if (PHP_VERSION >= '5.1' && !empty($timezone))   {
    date_default_timezone_set($timezone);
}
$php_self = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
if ('/' == substr($php_self, -1))  {
    $php_self .= 'index.php';
}
define('PHP_SELF', $php_self);
require (ROOT_PATH . 'includes/inc_constant.php');
require (ROOT_PATH . 'includes/cls_engrave.php');
require (ROOT_PATH . 'includes/cls_error.php');
require (ROOT_PATH . 'includes/lib_time.php');
require (ROOT_PATH . 'includes/lib_base.php');
require (ROOT_PATH . 'includes/lib_common.php');
require (ROOT_PATH . 'includes/lib_main.php');
require  ROOT_PATH . 'includes/lib_main_admin.php';


include(ROOT_PATH . 'shop/includes/lib.debug.php');





/* 对用户传入的变量进行转义操作。*/
if (!get_magic_quotes_gpc())   {
    if (!empty($_GET))  {
        $_GET = addslashes_deep($_GET);
    }
    if (!empty($_POST))  {
        $_POST = addslashes_deep($_POST);
    }
    $_COOKIE = addslashes_deep($_COOKIE);
    $_REQUEST = addslashes_deep($_REQUEST);
}
/* 创建 ENGRAVE 对象 */
$engrave = new ENGRAVE($engrave_db_name, $engrave_prefix);
$engrave_shop = new ENGRAVE($engrave_shop_db_name, $engrave_shop_prefix);
/* 初始化数据库类 */
require (ROOT_PATH . 'includes/cls_mysql.php');
$engrave_db = new cls_mysql($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
//$engrave_db_host = $engrave_db_user = $engrave_db_pass = $engrave_db_name = NULL;
$engrave_shop_db = new cls_mysql($engrave_shop_db_host, $engrave_shop_db_user, $engrave_shop_db_pass, $engrave_shop_db_name);

//cfang 2017-11-11
$db = $engrave_db;


//$engrave_shop_db_host = $engrave_shop_db_user = $engrave_shop_db_pass = $engrave_shop_db_name = NULL;
/* 创建错误处理对象 */
$err = new ecs_error('message.dwt');
/* 载入系统参数 */
$_CFG = load_config();
/*载入商城系统*/
$_SCFG = load_shop_config();
/* 载入语言文件 */
require (ROOT_PATH . 'languages/' . $_CFG['lang'] . '/common.php');

if (is_spider())  {
	/* 如果是蜘蛛的访问，那么默认为访客方式，并且不记录到日志中 */
    if (!defined('INIT_NO_USERS')) {
        define('INIT_NO_USERS', true);
		/* 整合UC后，如果是蜘蛛访问，初始化UC需要的常量 */
        if ($_CFG['integrate_code'] == 'ucenter')  {
            $user = &init_users();
        }
    }
    $_SESSION = array();
	//用户ID、姓名、email、等级、折扣
    $_SESSION['user_id'] = 0;
    $_SESSION['user_name'] = '';
    $_SESSION['email'] = '';
    $_SESSION['user_rank'] = 0;
    $_SESSION['discount'] = 1.00;
}
if (!defined('INIT_NO_SMARTY'))  {
    header('Cache-control: private');
    header('Content-type: text/html; charset=' . EC_CHARSET);
	/* 创建 Smarty 对象。*/
    require (ROOT_PATH . 'includes/cls_template.php');
    $smarty1 = new cls_template;
    require (ROOT_PATH . 'includes/Smarty.class.php');
    $smarty = new Smarty;
    $smarty->caching = false;
    $smarty->compile_check = true;
    $smarty->cache_lifetime = $_CFG['cache_time'];
    $smarty->template_dir = ROOT_PATH . 'themes/' . $_CFG['template'];
    $smarty->cache_dir = ROOT_PATH . 'temp/caches';
    $smarty->compile_dir = ROOT_PATH . 'temp/compiled';
    $smarty->direct_output = true;
    $smarty->force_compile = true;
    $smarty->assign('lang', $_LANG);
    $smarty->assign('ecs_charset', EC_CHARSET);
    if (!empty($_CFG['stylename']))  {
        $smarty->assign('ecs_css_path', 'themes/' . $_CFG['template'] . '/style_' . $_CFG['stylename'] . '.css');
    } else  {
        $smarty->assign('ecs_css_path', 'themes/' . $_CFG['template'] . '/style.css');
    }
}
$sql = "select value from " . $GLOBALS['engrave']->table('system_config') . " where code='s_sitename'";
$row = $GLOBALS['engrave_db']->getOne($sql);
$smarty->assign('page_title', $row);    // 页面标题
$smarty->assign('daohang', engrave_daohang());
function engrave_daohang()
{
    $sql = "SELECT * " .
        " FROM " . $GLOBALS['engrave']->table('menu') . "where isshow=1 order by paixu desc";
    $row = $GLOBALS['engrave_db']->getAll($sql);
    return $row;
}
$smarty->assign('aacct', @$_REQUEST['act']);
if (isset($_GET["lang"])) {
    $_SESSION["language"] = $_GET["lang"];
} else if (@$_SESSION["language"] == "" and @$_GET["lang"] == "") {
    $_SESSION["language"] = 'cn';
} else {
    $_SESSION["language"] = $_SESSION["language"];
}
$language_name = getLanguageName($_SESSION["language"]);

include_once (ROOT_PATH . "lang/" . $language_name . ".inc.php");



function mustLogin() {
    global $smarty;
    if(!isset($_SESSION['username']) || !$_SESSION['username']) {
        $smarty->display('member_login.htm');
        exit;
    }
}
function getVailableLanguage()
{
    $language = array(
        'af' => 'Afrikaans',
        'az' => 'Azerbaijani',
        'eu' => 'Basque',
        'be' => 'Belarusian',
        'be-lat' => 'Belarusian latin',
        'bg' => 'Bulgarian',
        'bs' => 'Bosnian',
        'ca' => 'Catalan',
        'cn' => 'Chinese',
                //'zh-TW'         => 'Chinese traditional',
                //'zh-CN'         => 'Chinese simplified',
        'cs' => 'Czech',
        'da' => 'Danish',
        'de' => 'German',
        'el' => 'Greek',
        'en' => 'English',
        'es' => 'Spanish',
        'et' => 'Estonian',
        'fa' => 'Persian',
        'fi' => 'Finnish',
        'fr' => 'French',
        'gl' => 'Galician',
        'he' => 'Hebrew',
        'hi' => 'Hindi',
        'hr' => 'Croatian',
        'hu' => 'Hungarian',
        'id' => 'Indonesian',
        'it' => 'Italian',
        'ja' => 'Japanese',
        'ko' => 'Korean',
        'ka' => 'Georgian',
        'lt' => 'Lithuanian',
        'lv' => 'Latvian',
        'mk' => 'Macedonian',
        'mn' => 'Mongolian',
        'ms' => 'Malay',
        'nl' => 'Dutch',
        'no' => 'Norwegian',
        'pl' => 'Polish',
        'pt-BR' => 'Brazilian portuguese',
        'pt' => 'Portuguese',
        'ro' => 'Romanian',
        'tw' => 'taiwan',
        'si' => 'Sinhala',
        'sk' => 'Slovak',
        'sl' => 'Slovenian',
        'sq' => 'Albanian',
        'sr-lat' => 'Serbian latin',
        'sr' => 'Serbian',
        'sv' => 'Swedish',
        'th' => 'Thai',
        'tr' => 'Turkish',
        'tt' => 'Tatarish',
        'uk' => 'Ukrainian',
    );
    return $language;
}
function getLanguageName($language)
{
    $languages = getVailableLanguage();
    return $languages[$language];
}
function array_language()
{
    $array_language = array("en", "cn", "tw");
    return $array_language;
}
function getDefalutlanguage()
{
    return "cn";
}
$smarty->assign('xuanyuyan', chooseLang());
//
function chooseLang() {
    return xuanyuyan();
}

function xuanyuyan()
{
    $aa = "<SELECT NAME='language' id='language' onchange='changeLanguage(this)'>";
    $language_array = array_language();
    foreach ($language_array as $key => $value) {
        if ($_SESSION["language"] == $value) {
            $selected = "selected = 'selected' ";
        } else {
            $selected = "";
        }
        if (getLanguageName($value) == "Chinese") {
            $aa .= " <OPTION VALUE='" . $value . "'" . $selected . "/>简体</OPTION>;";
        } elseif (getLanguageName($value) == "taiwan") {
            $aa .= " <OPTION VALUE='" . $value . "'" . $selected . "/>繁体</OPTION>;";
        } else {
            $aa .= " <OPTION VALUE='" . $value . "'" . $selected . "/>" . getLanguageName($value) . "</OPTION>;";
        }
    }
    $aa .= "</SELECT>";
    return $aa;
}
$smarty->assign('language_name', $language_name);
$smarty->assign('ucenter', $ucenter);
$smarty->assign('Welcometo', $Welcometo);
$smarty->assign('yen', $yen);
$smarty->assign('rmb', $rmb);
$smarty->assign('Welcomeback', $Welcomeback);
$smarty->assign('Signout', $Signout);
$smarty->assign('zxkf', $zxkf);
$smarty->assign('yjkf', $yjkf);
$smarty->assign('login', $login);
$smarty->assign('register', $register);
$smarty->assign('rbjl', $rbjl);
$smarty->assign('zks', $zks);
$smarty->assign('rbw', $rbw);
$smarty->assign('zhs', $zhs);
$smarty->assign('aqyax', $aqyax);
$smarty->assign('drymx', $drymx);
$smarty->assign('ztxdfw', $ztxdfw);
$smarty->assign('jyjy', $jyjy);
$smarty->assign('wyxtqy', $wyxtqy);
$smarty->assign('zzydtd', $zzydtd);
$smarty->assign('tgxzj', $tgxzj);
$smarty->assign('zybjd', $zybjd);
$smarty->assign('glsb', $glsb);
$smarty->assign('jhrblc', $jhrblc);
$smarty->assign('rblss', $rblss);
$smarty->assign('hmscd', $hmscd);
$smarty->assign('stzc', $stzc);
$smarty->assign('sthw', $sthw);
$smarty->assign('ybhydh', $ybhydh);
$smarty->assign('bgczrk', $bgczrk);
$smarty->assign('tjfhd', $tjfhd);
$smarty->assign('bgckgx', $bgckgx);
$smarty->assign('step1', $step1);
$smarty->assign('step2', $step2);
$smarty->assign('step3', $step3);
$smarty->assign('rbsjtj', $rbsjtj);
$smarty->assign('dibu1', $dibu1);
$smarty->assign('dibu2', $dibu2);
$smarty->assign('dibu3', $dibu3);
$smarty->assign('dibu4', $dibu4);
$smarty->assign('dibu5', $dibu5);
$smarty->assign('dibu6', $dibu6);
$smarty->assign('dibu7', $dibu7);
$smarty->assign('dibu8', $dibu8);
$smarty->assign('dibubanquan', $dibubanquan);
$smarty->assign('menu1', $menu1);
$smarty->assign('menu2', $menu2);
$smarty->assign('menu3', $menu3);
$smarty->assign('menu4', $menu4);
$smarty->assign('menu5', $menu5);
$smarty->assign('menu6', $menu6);
$smarty->assign('menu7', $menu7);
$smarty->assign('menu8', $menu8);
$smarty->assign('menu9', $menu9);
$smarty->assign('menu10', $menu10);
$smarty->assign('menu11', $menu11);
$smarty->assign('menu12', $menu12);
$smarty->assign('menu12', $menu12);
$smarty->assign('menu13', $menu13);
$smarty->assign('menu14', $menu14);
$smarty->assign('menu15', $menu15);
$smarty->assign('menu16', $menu16);
$smarty->assign('menu17', $menu17);
$smarty->assign('menu18', $menu18);
$smarty->assign('menu19', $menu19);
$smarty->assign('menu20', $menu20);
$smarty->assign('menu21', $menu21);
$smarty->assign('menu22', $menu22);
$smarty->assign('menu23', $menu23);
$smarty->assign('menu24', $menu24);
$smarty->assign('menu25', $menu25);
$smarty->assign('menu26', $menu26);
$smarty->assign('menu27', $menu27);
$smarty->assign('menu28', $menu28);
$smarty->assign('menu29', $menu29);
$smarty->assign('weizhi', $weizhi);
$smarty->assign('rlm', $rlm);
$smarty->assign('yyz', $yyz);
$smarty->assign('wtgyz', $wtgyz);
$smarty->assign('xfze', $xfze);
$smarty->assign('kxfjf', $kxfjf);
$smarty->assign('ryzhye', $ryzhye);
$smarty->assign('zhye', $zhye);
$smarty->assign('yfzk', $yfzk);
$smarty->assign('fszhye', $fszhye);
$smarty->assign('ybtx', $ybtx);
$smarty->assign('wdh', $wdh);
$smarty->assign('ych', $ych);
$smarty->assign('ddfc', $ddfc);
$smarty->assign('ddtx', $ddtx);
$smarty->assign('wcl', $wcl);
$smarty->assign('wfk', $wfk);
$smarty->assign('dbz', $dbz);
$smarty->assign('yfc', $yfc);
$smarty->assign('dizhi', $dizhi);
$smarty->assign('city', $city);
$smarty->assign('sheng', $sheng);
$smarty->assign('zip', $zip);
$smarty->assign('tel', $tel);
$smarty->assign('mfccts', $mfccts);
$smarty->assign('cssq', $cssq);
$smarty->assign('zdxhts', $zdxhts);
$smarty->assign('twfhjzd', $twfhjzd);
$smarty->assign('zysx', $zysx);
$smarty->assign('Maininformation', $Maininformation);
$smarty->assign('choosewarehouse', $choosewarehouse);
$smarty->assign('Defaultwarehouse', $Defaultwarehouse);
$smarty->assign('Warehouseaddress', $Warehouseaddress);
$smarty->assign('Messagebody', $Messagebody);
$smarty->assign('Canbedirectly', $Canbedirectly);
$smarty->assign('Detailedinformation', $Detailedinformation);
$smarty->assign('Serialnumber', $Serialnumber);
$smarty->assign('Commodityname', $Commodityname);
$smarty->assign('Number', $Number);
$smarty->assign('UnitPrice', $UnitPrice);
$smarty->assign('Total', $Total);
$smarty->assign('Remarks', $Remarks);
$smarty->assign('addedservice', $addedservice);
$smarty->assign('Subsidiaryinformation', $Subsidiaryinformation);
$smarty->assign('Lineexpress', $Lineexpress);
$smarty->assign('Expectedweight', $Expectedweight);
$smarty->assign('Ordernumber', $Ordernumber);
$smarty->assign('Fillnumber', $Fillnumber);
$smarty->assign('Size', $Size);
$smarty->assign('Voucher1', $Voucher1);
$smarty->assign('Voucher2', $Voucher2);
$smarty->assign('Voucher3', $Voucher3);
$smarty->assign('Voucher4', $Voucher4);
$smarty->assign('Voucher5', $Voucher5);
$smarty->assign('wangjimima', $wangjimima);
$smarty->assign('Submitorders', $Submitorders);


$newss1 = index_new_articles(14);
$smarty->assign('newss1', $newss1);
$newss2 = index_new_articles(15);
$smarty->assign('newss2', $newss2);
$newss3 = index_new_articles(16);
$smarty->assign('newss3', $newss3);
$newss4 = index_new_articles(17);
$smarty->assign('newss4', $newss4);
//currency list .with showing  in the top-nav
$smarty->assign('get_currency_list', get_currency_list());

function index_new_articles($id)
{
    $sql = 'SELECT * ' .
        ' FROM ' . $GLOBALS['engrave']->table('article') .
        ' WHERE CntCategoryId= ' . $id .
        ' ORDER BY CntTime DESC LIMIT 0,7';
    $res = $GLOBALS['engrave_db']->getAll($sql);
    $arr = array();
    foreach ($res as $idx => $row)  {
        $arr[$idx]['id'] = $row['CntId'];
        $arr[$idx]['CntTitle'] = $row['CntTitle'];
        $arr[$idx]['add_time'] = date("Y-m-d", strtotime($row['CntTime']));
    }
    return $arr;
}

function get_currency_list() {
    $sql = 'SELECT * ' .
        ' FROM ' . $GLOBALS['engrave']->table('currecy') .
        ' WHERE IsDeleteCurrecy=0 and IsDefault=0  '   .
        ' ORDER BY IsDefault DESC';
    $res = $GLOBALS['engrave_db']->getAll($sql);
    $arr = array();
    foreach ($res as $idx => $row)  {
        $row['value'] = $row['ExchageRate']*100;
        $arr[$row['CId']]  = $row ;
    }
    return $arr;
}

