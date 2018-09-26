<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require(dirname(__FILE__) . '/includes/finance.php');
$financeInstance = new Finance();
if ($_REQUEST['act'] == 'list' || empty($_REQUEST['act'])) {
    $smarty->assign('ur_here',      "收入月度统计");
    $financeInstance->saveLastIncomeMonth();
    $dataList = $financeInstance->getIncomeMonthList();

    $smarty->assign('data_list',    $dataList['data_list']);
    $smarty->assign('filter',        $dataList['filter']);
    $smarty->assign('record_count', $dataList['record_count']);
    $smarty->assign('page_count',    $dataList['page_count']);
    $smarty->assign('echartData',    $dataList['echartData']);
    $smarty->assign('echartCountData',    $dataList['echartCountData']);
    $smarty->assign('echartLabel',    $dataList['echartLabel']);
    //print_r($dataList);
    $smarty->assign('full_page',    1);
    assign_query_info();
    $smarty->display('income_month_list.htm');
}elseif ($_REQUEST['act'] == 'query')
{
    $dataList = $financeInstance->getIncomeMonthList();

    $smarty->assign('data_list',  $dataList['data_list']);
    $smarty->assign('filter',       $dataList['filter']);
    $smarty->assign('record_count', $dataList['record_count']);
    $smarty->assign('page_count',   $dataList['page_count']);;
    $smarty->assign('echartData',    $dataList['echartData']);
    $smarty->assign('echartCountData',    $dataList['echartCountData']);
    $smarty->assign('echartLabel',    $dataList['echartLabel']);
    $sort_flag  = sort_flag($dataList['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

    make_json_result($smarty->fetch('income_month_list.htm'), '',
        array('filter' => $dataList['filter'], 'page_count' => $dataList['page_count']));
} elseif ($_REQUEST['act'] == 'export') {
    include_once('includes/cls_phpzip.php');
    $zip = new PHPZip;
    //todo

    $langCsv = array(
        "编号", "总额",
        "已收",
        "已收订单数",
        "未收",
        "未收订单数",
        "年份",
        "月份",
    );
    //$content = '"' . implode('","', $langCsv) . "\"\n";
    $content =  implode("\t", $langCsv) . "\n";
    $dataList = $financeInstance->getIncomeMonthList();

    foreach($dataList['data_list'] as $key => $row) {


        $goods_value = array();
        $goods_value[] =  $row[inmon_id] ;
        $goods_value[] =  $row['inmon_amount'] ;
        $goods_value[] =  $row['inmon_received'] ;
        $goods_value[] =  $row['inmon_received_order_amount'] ;
        $goods_value[] =  $row['inmon_pending'] ;
        $goods_value[] =  $row['inmon_pending_order_amount'] ;
        $goods_value[] =  $row['inmon_add_year'] ;
        $goods_value[] =  $row['inmon_add_month'];



        $content .= implode("\t", $goods_value) . "\n";
    }
    if (EC_CHARSET != 'utf-8')
    {
        $content = ecs_iconv(EC_CHARSET, 'utf-8', $content);
    }
    //echo $content;exit;
    $charset = empty($_POST['charset']) ? 'UTF8' : trim($_POST['charset']);
    //$zip->add_file(ecs_iconv(EC_CHARSET, $charset, $content), 'income_month_list.csv');
    $zip->add_file("\xFF\xFE" . utf82u2($content), '收入月报-'.random(10, '123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ').'.csv');

    header('Content-Disposition: attachment; filename=收入月报'.random(10, '123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ').'.zip');
    header("Content-Type: application/unknown");
    die($zip->file());
} else if($_REQUEST['act'] == 'saveym') {

    $month = intval($_REQUEST['month']);
    $year = intval($_REQUEST['year']);
    $dataList = $financeInstance->generateIncomeMonth($year, $month);


    $info = '完成';
    make_json_result('', $info,
        array()
    );
}
function random($length, $chars = '0123456789') {
    $hash = '';
    $max = strlen($chars) - 1;
    for($i = 0; $i < $length; $i++) {
        $hash .= $chars[mt_rand(0, $max)];
    }
    return $hash;
}
function utf82u2($str)
{
    $len = strlen($str);
    $start = 0;
    $result = '';

    if ($len == 0)
    {
        return $result;
    }

    while ($start < $len)
    {
        $num = ord($str{$start});
        if ($num < 127)
        {
            $result .= chr($num) . chr($num >> 8);
            $start += 1;
        }
        else
        {
            if ($num < 192)
            {
                /* 无效字节 */
                $start ++;
            }
            elseif ($num < 224)
            {
                if ($start + 1 <  $len)
                {
                    $num = (ord($str{$start}) & 0x3f) << 6;
                    $num += ord($str{$start+1}) & 0x3f;
                    $result .=   chr($num & 0xff) . chr($num >> 8) ;
                }
                $start += 2;
            }
            elseif ($num < 240)
            {
                if ($start + 2 <  $len)
                {
                    $num = (ord($str{$start}) & 0x1f) << 12;
                    $num += (ord($str{$start+1}) & 0x3f) << 6;
                    $num += ord($str{$start+2}) & 0x3f;

                    $result .=   chr($num & 0xff) . chr($num >> 8) ;
                }
                $start += 3;
            }
            elseif ($num < 248)
            {

                if ($start + 3 <  $len)
                {
                    $num = (ord($str{$start}) & 0x0f) << 18;
                    $num += (ord($str{$start+1}) & 0x3f) << 12;
                    $num += (ord($str{$start+2}) & 0x3f) << 6;
                    $num += ord($str{$start+3}) & 0x3f;
                    $result .= chr($num & 0xff) . chr($num >> 8) . chr($num >>16);
                }
                $start += 4;
            }
            elseif ($num < 252)
            {
                if ($start + 4 <  $len)
                {
                    /* 不做处理 */
                }
                $start += 5;
            }
            else
            {
                if ($start + 5 <  $len)
                {
                    /* 不做处理 */
                }
                $start += 6;
            }
        }

    }

    return $result;
}