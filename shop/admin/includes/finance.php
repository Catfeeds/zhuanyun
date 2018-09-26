<?php
require_once(ROOT_PATH . 'admin/includes/engrave/lib_country.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_shipment.php');


class  Finance {
    function __construct() {

    }
    function getInvoiceList() {
        $result = get_filter();
        if ($result === false)
        {
            /* 查询条件 */
            $filter['invoice_title']   = empty($_REQUEST['invoice_title']) ? '' : trim($_REQUEST['invoice_title']);
            $filter['invoice_type']   = empty($_REQUEST['invoice_type']) ? '' : trim($_REQUEST['invoice_type']);
            $filter['invoice_status']   = empty($_REQUEST['invoice_status']) ? '' : trim($_REQUEST['invoice_status']);
            $filter['invoice_user_id']   = empty($_REQUEST['invoice_user_id']) ? '' : intval($_REQUEST['invoice_user_id']);
            $filter['invoice_order_id']   = empty($_REQUEST['invoice_order_id']) ? '' : trim($_REQUEST['invoice_order_id']);
            $filter['invoice_order_sn']   = empty($_REQUEST['invoice_order_sn']) ? '' : trim($_REQUEST['invoice_order_sn']);
            if (isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax'] == 1)
            {
                $filter['invoice_title'] = json_str_iconv($filter['invoice_title']);
                $filter['invoice_type'] = json_str_iconv($filter['invoice_type']);
                $filter['invoice_status'] = json_str_iconv($filter['invoice_status']);
                $filter['invoice_order_sn'] = json_str_iconv($filter['invoice_order_sn']);
            }
            $filter['sort_by']    = empty($_REQUEST['sort_by']) ? 'invoice_id' : trim($_REQUEST['sort_by']);
            $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);

            $where = (!empty($filter['invoice_title'])) ? " AND invoice_title like '%". mysql_like_quote($filter['invoice_title']) ."%'" : '';
            if(!empty($filter['invoice_status'])) {
                $where .= " and invoice_status='".$filter['invoice_status']."' " ;
            }
            if(!empty($filter['invoice_type'])) {
                $where .= " and invoice_type='".$filter['invoice_type']."' " ;
            }
            if(!empty($filter['invoice_order_sn'])) {
                $where .= " and invoice_order_sn='".$filter['invoice_order_sn']."' " ;
            }
            if(!empty($filter['invoice_user_id'])) {
                $where .= " and invoice_user_id='".$filter['invoice_user_id']."' " ;
            }
            if(!empty($filter['invoice_order_id'])) {
                $where .= " and invoice_order_id='".$filter['invoice_order_id']."' " ;
            }
            $sql = "SELECT COUNT(*) FROM " . $GLOBALS['engrave']->table('invoice') .
                " WHERE 1 "  . $where;
            $filter['record_count'] = $GLOBALS['db']->getOne($sql);

            $filter = page_and_size($filter);

            /* 获活动数据 */
            $sql = "SELECT invoice.* , admin.user_name income_admin_name ".
                " FROM " . $GLOBALS['engrave']->table('invoice') ." invoice ".
                " left join ".$GLOBALS['ecs']->table('admin_user')." admin on admin.user_id = invoice.invoice_write_admin_id ".
                " WHERE 1  " . $where .
                " ORDER by $filter[sort_by] $filter[sort_order] LIMIT ". $filter['start'] .", " . $filter['page_size'];

            $filter['invoice_title'] = stripslashes($filter['invoice_title']);
            $filter['invoice_order_sn'] = stripslashes($filter['invoice_order_sn']);
            set_filter($filter, $sql);
        }
        else
        {
            $sql    = $result['sql'];
            $filter = $result['filter'];
        }

        $row = $GLOBALS['db']->getAll($sql);

        foreach ($row AS $key => $val)
        {
            $row[$key]['invoice_change_status_time'] = local_date($GLOBALS['_CFG']['time_format'], $val['invoice_change_status_time']);
            $row[$key]['invoice_add_time']   = local_date($GLOBALS['_CFG']['time_format'], $val['invoice_add_time']);

        }

        $arr = array('data_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

        return $arr;
    }
    function getInvoice($ids) {
        global $engrave_db;
        $ids = explode(',', $ids);
        foreach($ids as $id) {
            $sql = "select invoice.*, admin.user_name invoice_admin_name from ".$GLOBALS['engrave']->table('invoice')
                ." invoice left join ".$GLOBALS['ecs']->table('admin_user')
                ." admin on admin.user_id = invoice.invoice_write_admin_id "
                ." where invoice_id=".$id;
            $result =  $engrave_db->getRow($sql);
            $result['invoice_change_status_time'] = local_date($GLOBALS['_CFG']['time_format'], $result['invoice_change_status_time']);
            return $result;
        }
    }
    function getIncomeList() {
        $result = get_filter();
        if ($result === false)
        {
            /* 查询条件 */

            $filter['income_user_payment_type']   = empty($_REQUEST['income_user_payment_type']) ? '' : trim($_REQUEST['income_user_payment_type']);
            $filter['income_status']   = empty($_REQUEST['income_status']) ? '' : trim($_REQUEST['income_status']);
            $filter['income_user_id']   = empty($_REQUEST['income_user_id']) ? '' : intval($_REQUEST['income_user_id']);
            $filter['income_order_id']   = empty($_REQUEST['income_order_id']) ? '' : trim($_REQUEST['income_order_id']);
            $filter['income_order_sn']   = empty($_REQUEST['income_order_sn']) ? '' : trim($_REQUEST['income_order_sn']);
            if (isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax'] == 1)
            {
                $filter['income_user_payment_type'] = json_str_iconv($filter['income_user_payment_type']);
                $filter['income_status'] = json_str_iconv($filter['income_status']);
                $filter['income_order_sn'] = json_str_iconv($filter['income_order_sn']);
            }
            $filter['sort_by']    = empty($_REQUEST['sort_by']) ? 'income_id' : trim($_REQUEST['sort_by']);
            $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);

            $where = '';
            if(!empty($filter['income_status'])) {
                $where .= " and income_status='".$filter['income_status']."' " ;
            }
            if(!empty($filter['income_user_payment_type'])) {
                $where .= " and income_user_payment_type='".$filter['income_user_payment_type']."' " ;
            }
            if(!empty($filter['income_order_sn'])) {
                $where .= " and income_order_sn='".$filter['income_order_sn']."' " ;
            }
            if(!empty($filter['income_user_id'])) {
                $where .= " and income_user_id='".$filter['income_user_id']."' " ;
            }
            if(!empty($filter['income_order_id'])) {
                $where .= " and income_order_id='".$filter['income_order_id']."' " ;
            }
            $sql = "SELECT COUNT(*) FROM " . $GLOBALS['engrave']->table('income') .
                " WHERE 1 "  . $where;
            $filter['record_count'] = $GLOBALS['db']->getOne($sql);

            $filter = page_and_size($filter);

            /* 获活动数据 */
            $sql = "SELECT income.* , admin.user_name ".
                " FROM " . $GLOBALS['engrave']->table('income') ." income ".
                " left join ".$GLOBALS['ecs']->table('admin_user')." admin on admin.user_id = income.income_change_status_admin_id ".
                " WHERE 1  " . $where .
                " ORDER by $filter[sort_by] $filter[sort_order] LIMIT ". $filter['start'] .", " . $filter['page_size'];

            $filter['income_order_sn'] = stripslashes($filter['income_order_sn']);
            set_filter($filter, $sql);
        }
        else
        {
            $sql    = $result['sql'];
            $filter = $result['filter'];
        }

        $row = $GLOBALS['db']->getAll($sql);

        foreach ($row AS $key => $val)
        {

            $row[$key]['income_add_time']   = local_date($GLOBALS['_CFG']['time_format'], $val['income_add_time']);
            $row[$key]['income_pay_change_time']   = local_date($GLOBALS['_CFG']['time_format'], $val['income_pay_change_time']);

        }

        $arr = array('data_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

        return $arr;
    }
    function getIncomeMonthList() {
        $result = get_filter();
        if ($result === false)
        {
            /* 查询条件 */
            $filter['inmon_add_year']   = empty($_REQUEST['inmon_add_year']) ? '' : intval($_REQUEST['inmon_add_year']);
            $filter['inmon_add_month']   = empty($_REQUEST['inmon_add_month']) ? '' : trim($_REQUEST['inmon_add_month']);



            $filter['sort_by']    = empty($_REQUEST['sort_by']) ? 'inmon_id' : trim($_REQUEST['sort_by']);
            $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);

            $where =  '';
            if(!empty($filter['inmon_add_month'])) {
                $where .= " and inmon_add_month='".$filter['inmon_add_month']."' " ;
            }
            if(!empty($filter['inmon_add_year'])) {
                $where .= " and inmon_add_year='".$filter['inmon_add_year']."' " ;
            }


            $sql = "SELECT COUNT(*) FROM " . $GLOBALS['engrave']->table('income_month') .
                " WHERE 1 "  . $where;
            $filter['record_count'] = $GLOBALS['db']->getOne($sql);

            $filter = page_and_size($filter);

            /* 获活动数据 */
            $sql = "SELECT *  ".
                " FROM " . $GLOBALS['engrave']->table('income_month') ." income_month ".


                " WHERE 1  " . $where .
                " ORDER by inmon_add_year Desc, inmon_add_month asc LIMIT ". $filter['start'] .", " . $filter['page_size'];

            set_filter($filter, $sql);
        }
        else
        {
            $sql    = $result['sql'];
            $filter = $result['filter'];
        }

        $row = $GLOBALS['db']->getAll($sql);
        $eChartData = Array(
            Array(
                "name" => "总额",
                "data" => array(),
            ),
            Array(
                "name" => "已收总额",
                "data" => array(),
            ),

            Array(
                "name" => "未收总额",
                "data" => array(),
            ),

        );
        $eChartCountData = Array(


            Array(
                "name" => "已收订单数",
                "data" => array(),
            ),

            Array(
                "name" => "未收订单数",
                "data" => array(),
            ),
        );
        $eAmoount = array(
            array(),array(),array(),
        );
        $eCountAmoount = array(
            array(),array(),
        );

        foreach ($row AS $key => $val)
        {
            $row[$key]['inmon_add_time']   = local_date($GLOBALS['_CFG']['time_format'], $val['inmon_add_time']);
            $eAmoount[0][] = $val['inmon_amount'];
            $eAmoount[1][] = $val['inmon_received'];
            $eCountAmoount[0][] = $val['inmon_received_order_amount'];
            $eAmoount[2][] = $val['inmon_pending'];
            $eCountAmoount[1][] = $val['inmon_pending_order_amount'];
            $eAmoount[3][] = $val['inmon_add_year']."-".$val['inmon_add_month'];
        }

        $eChartData[0]['data'] = join(",", $eAmoount[0]);
        $eChartData[1]['data'] = join(",", $eAmoount[1]);
        $eChartData[2]['data'] = join(",", $eAmoount[2]);
        $eChartCountData[0]['data'] = join(",", $eCountAmoount[0]);
        $eChartCountData[1]['data'] = join(",", $eCountAmoount[1]);
        $arr = array('data_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count'],
            'echartData' => $eChartData,
            'echartCountData' => $eChartCountData,
            'echartLabel' => "'".join("','", $eAmoount[3])."'");
        return $arr;
    }
    function getCostList() {
        $result = get_filter();
        if ($result === false)
        {
            /* 查询条件 */

            $filter['cost_type']   = empty($_REQUEST['cost_type']) ? '' : trim($_REQUEST['cost_type']);
            $filter['cost_status']   = empty($_REQUEST['cost_status']) ? '' : trim($_REQUEST['cost_status']);
            $filter['cost_user_id']   = empty($_REQUEST['cost_user_id']) ? '' : intval($_REQUEST['cost_user_id']);
            $filter['cost_order_id']   = empty($_REQUEST['cost_order_id']) ? '' : trim($_REQUEST['cost_order_id']);
            $filter['cost_order_sn']   = empty($_REQUEST['cost_order_sn']) ? '' : trim($_REQUEST['cost_order_sn']);

            $filter['cost_shipment_id']   = empty($_REQUEST['cost_shipment_id']) ? '' : intval($_REQUEST['cost_shipment_id']);

            $filter['cost_airline_id']   = empty($_REQUEST['cost_airline_id']) ? '' : intval($_REQUEST['cost_airline_id']);


            if (isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax'] == 1)
            {
                $filter['cost_type'] = json_str_iconv($filter['cost_type']);
                $filter['cost_status'] = json_str_iconv($filter['cost_status']);
                $filter['cost_order_sn'] = json_str_iconv($filter['cost_order_sn']);
            }
            $filter['sort_by']    = empty($_REQUEST['sort_by']) ? 'cost_id' : trim($_REQUEST['sort_by']);
            $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);

            $where = (!empty($filter['cost_title'])) ? " AND cost_title like '%". mysql_like_quote($filter['cost_title']) ."%'" : '';
            if(!empty($filter['cost_status'])) {
                $where .= " and cost_status='".$filter['cost_status']."' " ;
            }
            if(!empty($filter['cost_type'])) {
                $where .= " and cost_type='".$filter['cost_type']."' " ;
            }
            if(!empty($filter['cost_order_sn'])) {
                $where .= " and cost_order_sn='".$filter['cost_order_sn']."' " ;
            }
            if(!empty($filter['cost_user_id'])) {
                $where .= " and cost_user_id='".$filter['cost_user_id']."' " ;
            }
            if(!empty($filter['cost_order_id'])) {
                $where .= " and cost_order_id='".$filter['cost_order_id']."' " ;
            }
            if(!empty($filter['cost_airline_id'])) {
                $where .= " and cost_airline_id='".$filter['cost_airline_id']."' " ;
            }
            if(!empty($filter['cost_shipment_id'])) {
                $where .= " and cost_shipment_id='".$filter['cost_shipment_id']."' " ;
            }

            $sql = "SELECT COUNT(*) FROM " . $GLOBALS['engrave']->table('cost') .
                " WHERE 1 "  . $where;
            $filter['record_count'] = $GLOBALS['db']->getOne($sql);

            $filter = page_and_size($filter);

            /* 获活动数据 */
            $sql = "SELECT cost.* , admin.user_name cost_admin_name,shipment.shipment_name, shipment.shipment_code, airline.airline_name, airline.airline_short_name,orderwaybill.ordw_waybillno, ".
                "flight.flight_no ,flight.flight_id, flight.leave_date, flight.leave_time,".
                "flight.arrival_time,flight.leave_ampm ,".
                "leave_port.port_name leave_city,".
                "arrival_port.port_name arrival_city ".
                " FROM " . $GLOBALS['engrave']->table('cost') ." cost ".
                " left join ".$GLOBALS['ecs']->table('admin_user')." admin on admin.user_id = cost.cost_admin_id ".
                " left join ".$GLOBALS['engrave']->table('shipment')." shipment on shipment.shipment_id = cost.cost_shipment_id ".
                " left join ".$GLOBALS['engrave']->table('airline')." airline on airline.airline_id = cost.cost_airline_id ".
                " left join ".$GLOBALS['engrave']->table('airline_flight')." flight on flight.flight_id = cost.cost_flight_id ".
                " left join ".$GLOBALS['engrave']->table('leave_port')." leave_port on leave_port.lp_id = flight.lp_id ".
                " left join ".$GLOBALS['engrave']->table('arrival_port')." arrival_port on arrival_port.ap_id = flight.ap_id ".
                " left join ".$GLOBALS['engrave']->table('orderwaybill')." orderwaybill on orderwaybill.ordw_waybillid = cost.cost_order_waybill_id ".

                " WHERE 1  " . $where .
                " ORDER by $filter[sort_by] $filter[sort_order] LIMIT ". $filter['start'] .", " . $filter['page_size'];

            $filter['cost_title'] = stripslashes($filter['cost_title']);
            $filter['cost_order_sn'] = stripslashes($filter['cost_order_sn']);
            set_filter($filter, $sql);
        }
        else
        {
            $sql    = $result['sql'];
            $filter = $result['filter'];
        }

        $row = $GLOBALS['db']->getAll($sql);

        foreach ($row AS $key => $val)
        {
           // $row[$key]['cost_pay_time'] = local_date($GLOBALS['_CFG']['time_format'], $val['cost_pay_time']);
            $row[$key]['cost_add_time']   = local_date($GLOBALS['_CFG']['time_format'], $val['cost_add_time']);
            $row[$key]['cost_pay_change_time']   = local_date($GLOBALS['_CFG']['time_format'], $val['cost_pay_change_time']);
            $row[$key]['flight_arrival_time']   = local_date($GLOBALS['_CFG']['time_format'], $val['arrival_time']);

        }

        $arr = array('data_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

        return $arr;
    }
    function getCostMonthList() {
        $result = get_filter();
        if ($result === false)
        {
            /* 查询条件 */
            $filter['costmon_add_year']   = empty($_REQUEST['costmon_add_year']) ? '' : intval($_REQUEST['costmon_add_year']);
            $filter['costmon_add_month']   = empty($_REQUEST['costmon_add_month']) ? '' : trim($_REQUEST['costmon_add_month']);



            $filter['sort_by']    = empty($_REQUEST['sort_by']) ? 'costmon_id' : trim($_REQUEST['sort_by']);
            $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);

            $where =  '';
            if(!empty($filter['costmon_add_month'])) {
                $where .= " and costmon_add_month='".$filter['costmon_add_month']."' " ;
            }
            if(!empty($filter['costmon_add_year'])) {
                $where .= " and costmon_add_year='".$filter['costmon_add_year']."' " ;
            }


            $sql = "SELECT COUNT(*) FROM " . $GLOBALS['engrave']->table('cost_month') .
                " WHERE 1 "  . $where;
            $filter['record_count'] = $GLOBALS['db']->getOne($sql);

            $filter = page_and_size($filter);

            /* 获活动数据 */
            $sql = "SELECT *  ".
                " FROM " . $GLOBALS['engrave']->table('cost_month') ."  ".


                " WHERE 1  " . $where .
                " ORDER by $filter[sort_by] $filter[sort_order] LIMIT ". $filter['start'] .", " . $filter['page_size'];

            set_filter($filter, $sql);
        }
        else
        {
            $sql    = $result['sql'];
            $filter = $result['filter'];
        }

        $row = $GLOBALS['db']->getAll($sql);
        $eChartData = Array(
            Array(
                "name" => "总额",
                "data" => array(),
            ),
            Array(
                "name" => "航空",
                "data" => array(),
            ),
            Array(
                "name" => "国外快递",
                "data" => array(),
            ),
            Array(
                "name" => "国际快递",
                "data" => array(),
            ),
            Array(
                "name" => "报关费",
                "data" => array(),
            )
        );
        $eAmoount = array(
            array(),array(),array(),array(),array(),
        );
        foreach ($row AS $key => $val)
        {
            $row[$key]['costmon_add_time']   = local_date($GLOBALS['_CFG']['time_format'], $val['costmon_add_time']);
            $eAmoount[0][] = $val['costmon_amount'];
            $eAmoount[1][] = $val['costmon_air_amount'];
            $eAmoount[2][] = $val['costmon_fe_amount'];
            $eAmoount[3][] = $val['costmon_ie_amount'];
            $eAmoount[4][] = $val['costmon_cdf_amount'];
            $eAmoount[5][] = $val['costmon_add_year']."-".$val['costmon_add_month'];
        }
        $eChartData[0]['data'] = join(",", $eAmoount[0]);
        $eChartData[1]['data'] = join(",", $eAmoount[1]);
        $eChartData[2]['data'] = join(",", $eAmoount[2]);
        $eChartData[3]['data'] = join(",", $eAmoount[3]);
        $eChartData[4]['data'] = join(",", $eAmoount[4]);
        $arr = array('data_list' => $row, 'filter' => $filter,
            'page_count' => $filter['page_count'],
            'record_count' => $filter['record_count'],
            'echartData' => $eChartData,
            'echartLabel' => "'".@join("','", $eAmoount[5])."'"
            );

        return $arr;
    }
    function saveIncomeMonth() {}
    function generateIncomeMonth($year, $month) {
        global $engrave_db;
        $year = intval($year);
        $month = intval($month);
        if(!$year || !$month) return false;


        $sql = "select * from ". $GLOBALS['engrave']->table('income_month')
            ." where inmon_add_year=".$year
            ." and inmon_add_month=".$month
            ." limit 1";
        $result = $engrave_db->getRow($sql);

        function getAmount($type, $year, $month) {
            global $engrave_db;
            $sql = "select sum(income_amount) ";
            $sql .= " from ". $GLOBALS['engrave']->table('income')
            ." where income_add_year=".$year
            ." and income_add_month=".$month;
            if($type) {
                $sql .= " and income_status='".$type."' ";
            }
            $sql .= " limit 1";
            //echo $sql."<br>";
            return $engrave_db->getOne($sql);
        }


        $inmon_amount = getAmount("",$year, $month);
        $inmon_received = getAmount("已收",$year, $month );
        $inmon_pending = getAmount("未收",$year, $month );

        if($result) {
            //update
            $sql = "UPDATE ". $GLOBALS['engrave']->table('income_month')
                ." SET "
                ."inmon_amount='".$inmon_amount
                ."', inmon_received='".$inmon_received
                ."', inmon_pending='".$inmon_pending

                ."' WHERE "
                ." inmon_add_year=".$year
                ." and inmon_add_month=".$month;
        } else {
            //insert
            $sql = "INSERT INTO ". $GLOBALS['engrave']->table('income_month')
                ."(inmon_amount, inmon_received,inmon_pending, inmon_add_year, inmon_add_month, inmon_add_time) VALUES "
                ."("
                ."'".$inmon_amount."', "
                ."'".$inmon_received."', "
                ."'".$inmon_pending."', "
                ."'".$year."', "
                ."'".$month."', "
                ."'".time()."' "
                .")";
        }
        return $engrave_db->query($sql);

    }
    function generateCostMonth($year, $month) {
        global $engrave_db;
        $year = intval($year);
        $month = intval($month);
        if(!$year || !$month) return false;


        $sql = "select * from ". $GLOBALS['engrave']->table('cost_month')
            ." where costmon_add_year=".$year
            ." and costmon_add_month=".$month
            ." limit 1";
        $result = $engrave_db->getRow($sql);

        function getAmount($type, $year, $month) {
            global $engrave_db;
            $sql = "select sum(cost_amount) ";
            $sql .= " from ". $GLOBALS['engrave']->table('cost')
            ." where cost_add_year=".$year
            ." and cost_add_month=".$month;
            if($type) {
                $sql .= " and cost_type='".$type."' ";
            }
            $sql .= " limit 1";
            //echo $sql."<br>";
            return $engrave_db->getOne($sql);
        }


        $costmon_amount = getAmount("",$year, $month);
        $costmon_air_amount = getAmount("航空运输",$year, $month );
        $costmon_fe_amount = getAmount("国外快递",$year, $month );
        $costmon_ie_amount = getAmount("国际快递",$year, $month );
        $costmon_cdf_amount = getAmount("报关" ,$year, $month);
        if($result) {
            //update
            $sql = "UPDATE ". $GLOBALS['engrave']->table('cost_month')
                ." SET "
                ."costmon_amount='".$costmon_amount
                ."', costmon_air_amount='".$costmon_air_amount
                ."', costmon_fe_amount='".$costmon_fe_amount
                ."', costmon_ie_amount='".$costmon_ie_amount
                ."', costmon_cdf_amount='".$costmon_cdf_amount
                ."' WHERE "
                ." costmon_add_year=".$year
                ." and costmon_add_month=".$month;
        } else {
            //insert
            $sql = "INSERT INTO ". $GLOBALS['engrave']->table('cost_month')
                ."(costmon_amount, costmon_air_amount,costmon_fe_amount, costmon_ie_amount, costmon_cdf_amount, costmon_add_year, costmon_add_month, costmon_add_time) VALUES "
                ."("
                ."'".$costmon_amount."', "
                ."'".$costmon_air_amount."', "
                ."'".$costmon_fe_amount."', "
                ."'".$costmon_ie_amount."', "
                ."'".$costmon_cdf_amount."', "
                ."'".$year."', "
                ."'".$month."', "
                ."'".time()."' "
                .")";
        }
        return $engrave_db->query($sql);

    }
    function saveLastIncomeMonth() {
        $lastMonth = strtotime(date('Y-m-01'))-86400;

        $month = date('n', $lastMonth );
        $year  = date('Y', $lastMonth);


        $this->generateIncomeMonth($year, $month);
    }
    function saveLastMonth() {


        $lastMonth = strtotime(date('Y-m-01'))-86400;

        $month = date('n', $lastMonth );
        $year  = date('Y', $lastMonth);


        $this->generateCostMonth($year, $month);
    }
    function insertCost($waybillid) {
        global $engrave_db;
        $sql = " SELECT * ".
            " FROM " . $GLOBALS['engrave']->table('orderwaybill') .
            " WHERE ordw_delete = 0 AND ordw_waybillid = ".$waybillid;
        $waybill = $GLOBALS['engrave_db']->getRow($sql);

        $shipment_id = $waybill['ordw_collogisid'];

        $orderId = $waybill['ordw_orderid'];
        //get order info
        $order=engrave_order_byid($orderId);
        $order_shipmentid = $order['order_shipmentid'];

        $lp_id = $order['lp_id'];
        $country_id = $order['country_id'];
        $country_id = $order['country_id'];


        $totalWeight = $waybill['ordw_deductweight'];
        //长*宽*高/6000
        $volWeight = $waybill['ordw_sizelength'] * $waybill['ordw_sizewidth']* $waybill['ordw_sizeheight'] / 6000;
        if($volWeight>$totalWeight) {
            $totalWeight = $volWeight;
        }

        $costObj = new calcCost();
        $costInfo = array(
            "cost_user_id" => $order['user_id'],
            "cost_username" =>$order['user_name'],
            "cost_order_waybill_id" => $waybillid,
            "cost_order_id" => $orderId,
            "cost_order_sn" => $order['order_no'],
            "cost_shipment_id" => $shipment_id,
            "cost_airline_id" => 0,
            "cost_flight_id" => 0,
        );
       // echo "totalWeight:".$totalWeight."<br>shipment_id:".$shipment_id." dispatch_id:".$order['dispatch_id'];
        //欧洲专线的成本
        if($order_shipmentid == 2) {
            $dispatchInfo = $this->getDispatchInfo($order['dispatch_id']);
            $ap_id = $dispatchInfo['ap_id'];
            $flightId = $dispatchInfo['flight_id'];
            $airlineId= $dispatchInfo['airline_id'];
            //航空成本
            $costInfo['cost_type'] = "航空运输";
            $costInfo['cost_flight_id'] = $flightId;
            $costInfo['cost_airline_id'] = $airlineId;
            $cost = $costObj->costFlight($dispatchInfo, $totalWeight);
            $costInfo['cost_shipment_id'] = $order_shipmentid;

            $this->insertCostInfo($cost, $costInfo);

            //运输成本
            $price_config = get_shipment_price(
                getShipmentPriceEuropExpress($shipment_id,  $country_id));
            $price_config = $price_config['price_config'];
            $price_config = json_decode($price_config, true);
            //print_a($price_config);
            $cost = $costObj->costChinaToForeigh($price_config, $totalWeight);
            $costInfo['cost_type'] = "国外快递";
            $costInfo['cost_flight_id'] = 0;
            $costInfo['cost_airline_id'] = 0;
            $costInfo['cost_shipment_id'] = $shipment_id;
            $this->insertCostInfo($cost, $costInfo);
        } else { //其它物流的成本
            $price_config = get_shipment_price(shipment_price_b_exists($shipment_id, $lp_id, $country_id));
            $price_config = $price_config['price_config'];
            $price_config = json_decode($price_config, true);

            $cost = $costObj->costChinaToForeigh($price_config, $totalWeight);
            $costInfo['cost_type'] = "国际快递";

            return $this->insertCostInfo($cost, $costInfo);
        }

    }
    function insertCostInfo($cost, $info) {
        global $engrave_db;

        $month = date('n');
        $year  = date('Y');

        $time = time();
        $sql="insert into ".$GLOBALS['engrave']->table('cost').
            "(cost_add_time,cost_add_year, cost_add_month, cost_amount,cost_user_id,cost_username,cost_order_id,cost_order_waybill_id, cost_order_sn,cost_type,cost_shipment_id,cost_airline_id,cost_flight_id) values('".
            $time."','".
            $year."','".
            $month."','".
            $cost."','".
            $info['cost_user_id']."','".
            $info['cost_username']."','".
            $info['cost_order_id']."','".
            $info['cost_order_waybill_id']."','".
            $info['cost_order_sn']."','".
            $info['cost_type']."','".
            $info['cost_shipment_id']."','".
            $info['cost_airline_id']."','".

            $info['cost_flight_id']."')";
        $result = $engrave_db->query($sql);

        if($result===false)
        {
            return false;
        }else {
            return true;
        }
    }
    function getDispatchInfo($dispatch_id) {
        global $engrave_db;
        $where = " dispatch_id=".$dispatch_id;
        $sql = "select dispatch.*, airline.airline_name,airline.airline_id, flight.flight_no, flight.leave_date, flight.leave_time, aport.port_name, flight.ap_id, flight.flight_id ,template.price0,template.price100,template.price300,template.price500,template.price1000  from " .$GLOBALS['engrave']->table('dispatch_list')." dispatch "
            ."LEFT JOIN " .$GLOBALS['engrave']->table('airline_flight')." flight using(flight_id) "
            ."LEFT JOIN " .$GLOBALS['engrave']->table('airline')." airline   on airline.airline_id = dispatch.airline_id "
            ."LEFT JOIN " .$GLOBALS['engrave']->table('arrival_port')." aport   on aport.ap_id = flight.ap_id "
            ."LEFT JOIN " .$GLOBALS['engrave']->table('airline_price_template')." template   on template.apt_id = flight.apt_id "
            ." where ".$where."  ";
        $row = $engrave_db->getRow($sql);
        return $row;
    }
    function editIncome($ids) {
        global $engrave_db;
        $ids = explode(',', $ids);
        $pay_time = $_REQUEST['pay_time'];
        $memo = $_REQUEST['memo'];
        foreach($ids as $id) {
            $sql = "UPDATE ".$GLOBALS['engrave']->table('income')
                ." set income_pay_time='".$pay_time
                ."', income_status='已收"
                ."', income_pay_memo='".addslashes($memo)
                ."', income_admin_id='".$_SESSION['admin_id']
                ."', income_pay_change_time='".time()
                ."' where income_id=".$id;
            $engrave_db->query($sql);
        }
    }
    function editCost($ids) {
        global $engrave_db;
        $ids = explode(',', $ids);
        $pay_time = $_REQUEST['pay_time'];
        $memo = $_REQUEST['memo'];
        foreach($ids as $id) {
            $sql = "UPDATE ".$GLOBALS['engrave']->table('cost')
                ." set cost_pay_time='".$pay_time
                ."', cost_status='已付"
                ."', cost_pay_memo='".addslashes($memo)
                ."', cost_admin_id='".$_SESSION['admin_id']
                ."', cost_pay_change_time='".time()
                ."' where cost_id=".$id;
            $engrave_db->query($sql);
        }
    }
    function editInvoice($id) {
        global $engrave_db;
        $id = intval($id);
        $pay_status = $_REQUEST['pay_status'];
        $pay_time = $_REQUEST['pay_time'];
        $memo = $_REQUEST['memo'];
        $c_time = time();
        $admin_id = $_SESSION['admin_id'];
        if($pay_status != "已开") {
            $pay_time = "";
            $c_time = 0;
            $admin_id = 0;
        }

        $sql = "UPDATE ".$GLOBALS['engrave']->table('invoice')
            ." set invoice_write_time='".$pay_time
            ."', invoice_status='".$pay_status
            ."', invoice_memo='".addslashes($memo)
            ."', invoice_write_admin_id='".$admin_id
            ."', invoice_change_status_time='".$c_time
            ."' where invoice_id=".$id;
        $engrave_db->query($sql);

    }
    function getCost($ids) {
        global $engrave_db;
        $ids = explode(',', $ids);
        foreach($ids as $id) {
            $sql = "select cost.*, admin.user_name cost_pay_admin_name from ".$GLOBALS['engrave']->table('cost')
                ." cost left join ".$GLOBALS['ecs']->table('admin_user')
                ." admin on admin.user_id = cost.cost_admin_id "
                ." where cost_id=".$id;
            $result =  $engrave_db->getRow($sql);
            $result['cost_pay_change_time'] = date("Y-m-d H:i", $result['cost_pay_change_time']);
            return $result;
        }
    }
    function getIncome($ids) {
        global $engrave_db;
        $ids = explode(',', $ids);
        foreach($ids as $id) {
            $sql = "select income.*, admin.user_name income_admin_name from ".$GLOBALS['engrave']->table('income')
                ." income left join ".$GLOBALS['ecs']->table('admin_user')
                ." admin on admin.user_id = income.income_admin_id "
                ." where income_id=".$id;
            $result =  $engrave_db->getRow($sql);
            $result['income_pay_change_time'] = date("Y-m-d H:i", $result['income_pay_change_time']);
            return $result;
        }
    }
}
class calcCost
{
    function costFlight($priceInfo, $totalWeight)
    {
        $weight = $totalWeight / 1000;
        if ($weight < 100) {
            return $priceInfo['price0'] * $weight;
        } else if ($weight < 300) {
            return $priceInfo['price100'] * $weight;
        } else if ($weight < 500) {
            return $priceInfo['price300'] * $weight;
        } else if ($weight < 1000) {
            return $priceInfo['price500'] * $weight;
        } else {
            return $priceInfo['price1000'] * $weight;
        }
    }

    function costChinaToForeigh($price_config, $totalWeight)
    {
        $weight = $totalWeight / 1000;
        if ($weight < 0.5) {
            return $price_config['price0']['value'];
        } else if ($weight >= 0.5 && $weight < 3) {
            return $price_config['price1']['value'];
        } else if ($weight >= 3 && $weight < 10) {
            return $price_config['price2']['value'];
        } else {
            $basePrice = $price_config['price2']['value'];

            if ($weight >= 10) {
                if ($weight < 15) {
                    if (!$price_config['price3']['add']) {
                        $basePrice = $price_config['price3']['value'];
                        return $basePrice;
                    } else {
                        return $basePrice +
                            $price_config['price3']['value'] * ($weight - 10) / 0.5;

                    }
                }
                $basePrice += $price_config['price3']['value'] * 10;

            }
            if ($weight >= 15) {
                if ($weight < 20) {
                    if (!$price_config['price4']['add']) {
                        $basePrice = $price_config['price4']['value'];
                        return $basePrice;
                    } else {
                        return $basePrice +
                            $price_config['price4']['value'] * ($weight - 15) / 0.5;
                    }
                    $basePrice += $price_config['price4']['value'] * 10;
                }
            }
            if ($weight >= 20) {
                if ($weight < 30) {
                    if (!$price_config['price5']['add']) {
                        $basePrice = $price_config['price5']['value'];
                        return $basePrice;
                    } else {
                        return $basePrice +
                            $price_config['price5']['value'] * ($weight - 20) / 0.5;
                    }
                    $basePrice += $price_config['price5']['value'] * 20;
                }
            }
            if ($weight > 30) {
                if (!$price_config['price6']['add']) {
                    return $price_config['price6']['value'];
                } else {
                    return $basePrice +
                        $price_config['price6']['value'] * ($weight - 30) / 0.5;
                }
            }


        }
    }
}


