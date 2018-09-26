<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require(dirname(__FILE__) . '/includes/finance.php');
$financeInstance = new Finance();
if ($_REQUEST['act'] == 'list' || empty($_REQUEST['act'])) {
    $smarty->assign('ur_here',      "发票管理");
    $dataList = $financeInstance->getInvoiceList();

    $smarty->assign('data_list',  $dataList['data_list']);
    $smarty->assign('filter',       $dataList['filter']);
    $smarty->assign('record_count', $dataList['record_count']);
    $smarty->assign('page_count',   $dataList['page_count']);

    $smarty->assign('full_page',    1);
    assign_query_info();
    $smarty->display('invoice_list.htm');
}elseif ($_REQUEST['act'] == 'query')
{
    $dataList = $financeInstance->getInvoiceList();

    $smarty->assign('data_list',  $dataList['data_list']);
    $smarty->assign('filter',       $dataList['filter']);
    $smarty->assign('record_count', $dataList['record_count']);
    $smarty->assign('page_count',   $dataList['page_count']);;

    $sort_flag  = sort_flag($dataList['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

    make_json_result($smarty->fetch('invoice_list.htm'), '',
        array('filter' => $dataList['filter'], 'page_count' => $dataList['page_count']));
} elseif ($_REQUEST['act'] == 'export') {
    $_REQUEST['page_size'] = 3000;
    include_once('includes/cls_phpzip.php');
    $zip = new PHPZip;

    $dataList = $financeInstance->getInvoiceList();
    $goods_value = array();
    $goods_value[] = "ID";
    $goods_value[] = "用户";
    $goods_value[] = "订单号";
    $goods_value[] = "状态";
    $goods_value[] = "添加时间";
    $goods_value[] = "类型";
    $goods_value[] = "抬头";
    $goods_value[] = "内容";
    $goods_value[] = "税号";
    $goods_value[] = "地址";
    $goods_value[] = "总额";
    $goods_value[] = "管理员";
    $goods_value[] = "开票时间";

    $content .= implode("\t", $goods_value) . "\n";


    foreach($dataList['data_list'] as $row) {
        $goods_value = array();
        $goods_value[] = $row['invoice_id'];
        $goods_value[] = $row['invoice_username'];
        $goods_value[] = $row['invoice_order_sn'];
        $goods_value[] = $row['invoice_status'];
        $goods_value[] = $row['invoice_add_time'];
        $goods_value[] = $row['invoice_type'];


        $goods_value[] = $row['invoice_title'];
        $goods_value[] = $row['invoice_content'];
        $goods_value[] = $row['invoice_tax_no'];
        $goods_value[] = $row['invoice_address'];
        $goods_value[] = $row['invoice_amount'];
        $goods_value[] = $row['invoice_admin_name'];

        $goods_value[] = $row['invoice_write_time'];

        $content .= implode("\t", $goods_value) . "\n";
    }
    if (EC_CHARSET != 'utf-8')
    {
        $content = ecs_iconv(EC_CHARSET, 'utf-8', $content);
    }


    $zip->add_file("\xFF\xFE" . utf82u2($content), 'invoice_list'.random(10, '123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ').'.csv');

    header("Content-Disposition: attachment; filename=invoice_list".random(10, '123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ').".zip");
    header("Content-Type: application/unknown");
    die($zip->file());
}elseif ($_REQUEST['act'] == 'edit') {
    $smarty->assign('ur_here',      "发票管理-编辑发票信息");
    assign_query_info();
    $smarty->assign('ids',       $_GET['id']);

    $smarty->assign('invoiceInfo',       $financeInstance->getInvoice($_GET['id']));
    $smarty->display('invoice_edit.htm');
}elseif ($_REQUEST['act'] == 'edit-submit') {
    $ids = $_GET['id'];
    $financeInstance->editInvoice($ids);



    $link[0]['text'] = "发票管理";
    $link[0]['href'] = 'invoice.php?act=list';


    sys_msg("发票信息编辑成功", 0, $link);
}
function random($length, $chars = '0123456789') {
    $hash = '';
    $max = strlen($chars) - 1;
    for($i = 0; $i < $length; $i++) {
        $hash .= $chars[mt_rand(0, $max)];
    }
    return $hash;
}
/**
 *
 *
 * @access  public
 * @param
 *
 * @return void
 */
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

