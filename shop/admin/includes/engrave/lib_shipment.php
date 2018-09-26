<?php
require_once(ROOT_PATH . 'admin/includes/engrave/lib_port.php');
function shipment_all_data() {
    $sql = "SELECT * " .
    " FROM " . $GLOBALS['engrave']->table('shipment') ;
    $row = $GLOBALS['engrave_db']->getAll($sql);

    foreach ($row as $item) {
       $result[$item['shipment_id']] = $item;
    }


    return $result;
} 
function shipment_all_data_for_order_list($delunO2o=false) {
    $sql = "SELECT * " .
    " FROM " . $GLOBALS['engrave']->table('shipment') ;
    $row = $GLOBALS['engrave_db']->getAll($sql);

    foreach ($row as $item) {
        if(($delunO2o && $item['iso2o']) || !$delunO2o) {
            $result[$item['shipment_id']] = $item['shipment_name'];
        }

    }


    return $result;
} 

function shipment_price_paging_list() {
     /* 记录总数 */
     $sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('shipment_price');
     
     $filter = array();
     $filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'sp_id' : trim($_REQUEST['sort_by']);
     $filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
     
     $filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
     /* 分页大小 */
     $filter = page_and_size($filter);
 
     $sql = "SELECT * " .
             " FROM " . $GLOBALS['engrave']->table('shipment_price') . " " .
             " order by " .$filter['sort_by'].' '.$filter['sort_order'] .
             " LIMIT " . $filter['start'] . ",$filter[page_size]";
 
     $filter['keyword'] = stripslashes($filter['keyword']);
     //set_filter($filter, $sql, $param_str);
     $row = $GLOBALS['engrave_db']->getAll($sql);

     return array('data_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
 
}
function shipment_price_parpare_for_list($data, $shipments, $partitions) {
   
    function _getShipment($shipments, $shipment_id) {
        
        foreach ($shipments as $item) {
            if($item['shipment_id'] == $shipment_id) return $item;
        }
    }
    function _getPartition($partitions, $cp_id) {
        foreach ($partitions as $item) {
            if($item['cp_id'] == $cp_id) return $item;
        }   
    }
    $allPorts = allPorts();
    //print_a($allPorts);
    foreach ($data['data_list'] as $key => $item) {
        $data['data_list'][$key]['shipment'] = _getShipment($shipments, $item['shipment_id']);
        $data['data_list'][$key]['partition'] = _getPartition($partitions, $item['cp_id']);
        $data['data_list'][$key]['config'] = json_decode($item['price_config'], true);
        $data['data_list'][$key]['leave_port_name'] = $item['lp_id'] ?
            $allPorts['leave_ports'][$item['lp_id']]['port_name'] : '中国';
        $data['data_list'][$key]['arrival_port_name'] = $item['ap_id'] ?
            $allPorts['arrival_ports'][$item['ap_id']]['port_name'] : 'xxx';
    }
    //print_a($data);
    return $data;
}
function shipment_paging_list() {
    /* 记录总数 */
    $sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('shipment');
    
    $filter = array();
    $filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'shipment_id' : trim($_REQUEST['sort_by']);
    $filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
    
    $filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
    /* 分页大小 */
    $filter = page_and_size($filter);

    $sql = "SELECT * " .
            " FROM " . $GLOBALS['engrave']->table('shipment') . " " .
            " order by " .$filter['sort_by'].' '.$filter['sort_order'] .
            " LIMIT " . $filter['start'] . ",$filter[page_size]";

    $filter['keyword'] = stripslashes($filter['keyword']);
    //set_filter($filter, $sql, $param_str);
    $row = $GLOBALS['engrave_db']->getAll($sql);
    return array('data_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
function shipment_all_list() {


    $sql = "SELECT * " .
            " FROM " . $GLOBALS['engrave']->table('shipment') . "   where status='enabled'  " .
            " order by shipment_id desc "   ;

   
    //set_filter($filter, $sql, $param_str);
    $all = $GLOBALS['engrave_db']->getAll($sql);
    foreach($all as $cid => $item) {
        $row[$item['shipment_id']]  =$item;
    }


    return $row;
}
function shipment_oilfee_paging_list($shipment_id=0) {
    /* 记录总数 */
    $sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('shipment_oilfee');
    
    $filter = array();
    $filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'soid' : trim($_REQUEST['sort_by']);
    $filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
    
    $filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
    /* 分页大小 */
    $filter = page_and_size($filter);
    if($shipment_id) {
        $addsql = " and b.shipment_id=".$shipmemnt_id;
    }
    $sql = "SELECT a.*, b.shipment_name " .
            " FROM " . $GLOBALS['engrave']->table('shipment_oilfee') . " a,  " .
            $GLOBALS['engrave']->table('shipment'). " as b where a.shipment_id = b.shipment_id " .
            $addsql.
            " order by " .$filter['sort_by'].' '.$filter['sort_order'] .
            " LIMIT " . $filter['start'] . ",$filter[page_size]";

    $filter['keyword'] = stripslashes($filter['keyword']);
    //set_filter($filter, $sql, $param_str);
    $row = $GLOBALS['engrave_db']->getAll($sql);
    return array('data_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
function engrave_shipment_insert($data) {
    extract($data);
    $sql="insert into ".$GLOBALS['engrave']->table('shipment').
	"(shipment_name, shipment_type, shipment_code, min_day, max_day, description, discount, status, effect_value, default_oil_fee_rate) values('".
	$data['shipment_name']."','".$data['shipment_type']."','"
	    .$data['shipment_code']."', '${min_day}', '${max_day}', '${description}', '${discount}', '${status}', '${effect_value}', '${default_oil_fee_rate}')";
    //echo $sql;
	return $GLOBALS['engrave_db']->query($sql);
}
function engrave_shipment_oilfee_insert($data) {
    extract($data);
    $sql="insert into ".$GLOBALS['engrave']->table('shipment_oilfee').
	"(shipment_id, year, month, discount) values('".
	$data['shipment_id']."','".$data['year']."','".$data['month']."', '${discount}')";
    //echo $sql;
	return $GLOBALS['engrave_db']->query($sql);
}
function engrave_shipment_price_insert($data, $allShipments, $allCountryPartitions) {
    extract($data);
    $shipment_id = intval($shipment_id);
    $shipment = $allShipments[$shipment_id];

    $cp_id = intval($cp_id);
    
    

    if(!$shipment) return "Error";
    //if($shipment['shipment_type'] == 'normal') {

    if($price_type == 'from-china-to-europ-partition') {
        //if(!get_shipment_price_by_shipment_id_and_ap_id_and_country_id($shipment_id, $ap_id, $country_id)) {
        if(!shipment_price_a_exists($shipment_id, $country_partition_id)) {
            $sql="insert into ".$GLOBALS['engrave']->table('shipment_price').
            "(shipment_id, shipment_type, price_type,  cp_id, price_config) values('".
            $shipment_id."','".$shipment['shipment_type']."', '".$price_type."' ,'"
            .$country_partition_id."','".json_encode(get_price_config($data))."')";

            return $GLOBALS['engrave_db']->query($sql);
        } else {
            return "HaveExisted";
        }
    } else if ($price_type == 'from-china-to-europ-port-cost') {
        $lp_id = $lp_id_cost;
        if(!shipment_price_c_exists($shipment_id, $lp_id, $ap_id)) {
            $sql="insert into ".$GLOBALS['engrave']->table('shipment_price').
                "(shipment_id, lp_id, price_type, ap_id, price_config) values('".
                $shipment_id."','".$lp_id."', '".$price_type."', '".$ap_id."','".json_encode(get_price_config_country($data))."')";

            return $GLOBALS['engrave_db']->query($sql);
        } else {
            return "HaveExisted";
        }
    } else {
        if($price_type == 'from-china-to-europ-partition-cost') {
            $lp_id = $lp_id_cost;
        }

       // print_r($data);
        //if(!get_shipment_price_by_shipment_id_and_cp_id($shipment_id, $lp_id, $country_id)) {
        if(!shipment_price_b_exists($shipment_id, $lp_id, $country_id)) {
            $sql="insert into ".$GLOBALS['engrave']->table('shipment_price').
            "(shipment_id, lp_id, price_type, country_id, price_config) values('".
            $shipment_id."','".$lp_id."', '".$price_type."', '".$country_id."','".json_encode(get_price_config_country($data))."')";

            return $GLOBALS['engrave_db']->query($sql);
        } else {
            return "HaveExisted";
        }
    }
 
    
}
function engrave_shipment_price_update($data, $id, $allShipments, $allCountryPartitions) {
    extract($data);
    $shipment_id = intval($shipment_id);
    $shipment = $allShipments[$shipment_id];
    if(!$shipment) return "Error";

    $cp_id = intval($cp_id);

    if($price_type == 'from-china-to-europ-partition') {
        $exists = shipment_price_a_exists($shipment_id, $country_partition_id);
        if($exists || $exists == $id) {
            $sql="update ".$GLOBALS['engrave']->table('shipment_price').
            " SET "
            ." shipment_id=".$shipment_id.", "
            ." shipment_type='".$shipment['shipment_type']."', "
            ." price_type='".$price_type."', "
            //." ap_id=".$ap_id.", "
            ." cp_id=".$country_partition_id.", "
            ." price_config='".json_encode(get_price_config($data))
            ."' WHERE  sp_id=".$id;
    
            return $GLOBALS['engrave_db']->query($sql);
        } else {
            return "HaveExisted";
        }
    } else  if($price_type == 'from-china-to-europ-port-cost') {
        $lp_id = $lp_id_cost;
        $exists = shipment_price_c_exists($shipment_id, $lp_id, $ap_id);
        if($exists || $exists == $id) {
            $sql="update ".$GLOBALS['engrave']->table('shipment_price').
                " SET "
                ." shipment_id=".$shipment_id.", "
                ." lp_id=".$lp_id.", "
                ." shipment_type='".$shipment['shipment_type']."', "
                ." price_type='".$price_type."', "
                ." ap_id=".$ap_id.", "
                ." price_config='".json_encode(get_price_config_country($data))."' WHERE  sp_id=".$id;

            return $GLOBALS['engrave_db']->query($sql);
        } else {
            return "HaveExisted";
        }
    } else {
        $exists = shipment_price_b_exists($shipment_id, $lp_id, $country_id);
        if($exists || $exists == $id) {
            $sql="update ".$GLOBALS['engrave']->table('shipment_price').
            " SET "
            ." shipment_id=".$shipment_id.", "
            ." lp_id=".$lp_id.", "
            ." shipment_type='".$shipment['shipment_type']."', "
            ." price_type='".$price_type."', "
            ." country_id=".$country_id.", "
            ." price_config='".json_encode(get_price_config_country($data))."' WHERE  sp_id=".$id;
    
            return $GLOBALS['engrave_db']->query($sql);
        } else {
            return "HaveExisted";
        }
    }
    
}
function shipment_price_a_exists($shipment_id, $country_partition_id) {
    $sql="select sp_id from ".$GLOBALS['engrave']->table('shipment_price').
	" where shipment_id=".$shipment_id." AND cp_id=".$country_partition_id;
	
    $result = $GLOBALS['engrave_db']->getOne($sql);
    
    
	if($result>=1) {
		return $result;
	} else {
		return false;
	}
} 
function shipment_price_b_exists($shipment_id, $lp_id, $country_id) {
    $sql="select sp_id from ".$GLOBALS['engrave']->table('shipment_price').
	" where shipment_id=".$shipment_id." AND lp_id=".$lp_id." AND country_id=".$country_id;
	
    $result = $GLOBALS['engrave_db']->getOne($sql);
    
    
	if($result>=1) {
		return $result;
	} else {
		return false;
	}
}
function shipment_price_c_exists($shipment_id, $lp_id, $ap_id) {
    $sql="select sp_id from ".$GLOBALS['engrave']->table('shipment_price').
        " where shipment_id=".$shipment_id." AND lp_id=".$lp_id." AND ap_id=".$ap_id;

    $result = $GLOBALS['engrave_db']->getOne($sql);


    if($result>=1) {
        return $result;
    } else {
        return false;
    }
}
function get_shipment_price_by_shipment_id_and_ap_id_and_country_id($shipment_id, $ap_id, $country_id) {
    $sql="select sp_id from ".$GLOBALS['engrave']->table('shipment_price').
	" where shipment_id=".$shipment_id." AND country_id=".$country_id." AND ap_id=".$ap_id;
	echo $sql;
    $result = $GLOBALS['engrave_db']->getOne($sql);
    
    
	if($result>=1) {
		return $result;
	} else {
		return false;
	}
}
function getShipmentPriceEuropExpress($shipment_id, $country_id) {
    $sql="select sp_id from ".$GLOBALS['engrave']->table('shipment_price').
        " where shipment_id=".$shipment_id." AND country_id=".$country_id." AND price_type='from-europ-port-to-country'";
    echo $sql;
    $result = $GLOBALS['engrave_db']->getOne($sql);


    if($result>=1) {
        return $result;
    } else {
        return 0;
    }
}
function get_shipment_price($sp_id) {
    $sql="select * from ".$GLOBALS['engrave']->table('shipment_price').
        " where sp_id=".$sp_id;

    return $GLOBALS['engrave_db']->getRow($sql);
}
function get_shipment_oilfee($soid) {
    $sql="select * from ".$GLOBALS['engrave']->table('shipment_oilfee').
        " where soid=".$soid;

    return $GLOBALS['engrave_db']->getRow($sql);
}

function get_price_config($data) {
    extract($data);
    return array(
        "less_eq_half_kg" => intval($less_eq_half_kg),
        "add_half_kg"=> intval($add_half_kg),
        "ten_twenty_kg" =>intval($less_eq_half_kg),
        "twentyone_fifty_kg"=>intval($twentyone_fifty_kg),
        "fiftyone_hundred_kg" => intval($fiftyone_hundred_kg),
        "greater_hundredone_kg"=>intval($greater_hundredone_kg)
    )  ;
}
function get_price_config_country($data) {
    extract($data);
    return array(
        "price0" => array(
            "min" => 0,
            "max" => 0.5,
            'include_min' => true,
            'include_max' => true,
            "add" => isset($data['price0']['add']) ? 1 : 0,
            "value" => floatval($data['price0']['value'])
        ),
        "price1" => array(
            "min" => 0.5,
            "max" => 3,
            'include_min' => true,
            'include_max' => true,
            "add" => isset($data['price1']['add']) ? 1 : 0,
            "value" => floatval($data['price1']['value'])
        ),
        "price2" => array(
            "min" => 3,
            "max" => 10,
            'include_min' => false,
            'include_max' => true,
            "add" => isset($data['price2']['add']) ? 1 : 0,
            "value" => floatval($data['price2']['value'])
        ),
        "price3" => array(
            "min" => 10,
            "max" => 15,
            'include_min' => false,
            'include_max' => true,
            "add" => isset($data['price3']['add']) ? 1 : 0,
            "value" => floatval($data['price3']['value'])
        ),
        "price4" => array(
            "min" => 15,
            "max" => 20,
            'include_min' => false,
            'include_max' => true,
            
            "add" => isset($data['price4']['add']) ? 1 : 0,
            "value" => floatval($data['price4']['value'])
        ),
        "price5" => array(
            "min" => 20,
            "max" => 30,
            'include_min' => false,
            'include_max' => true,
            "add" => isset($data['price5']['add']) ? 1 : 0,
            "value" => floatval($data['price5']['value'])
        ),
        "price6" => array(
            "min" => 30,
            "max" => 100000,
            'include_min' => false,
            'include_max' => true,
            "add" => isset($data['price6']['add']) ? 1 : 0,
            "value" => floatval($data['price6']['value'])
        )
    )  ;
}
function engrave_shipment_update($data, $id) {
    extract($data);

    $sql="update ".$GLOBALS['engrave']->table('shipment').
        " set shipment_name='".$data['shipment_name'].
        "', shipment_type='".$data['shipment_type'].
        "', shipment_code='".$data['shipment_code'].
        "', description='".$data['description'].
        "', min_day='".$data['min_day'].
        "', max_day='".$data['max_day'].
        "', discount='".$data['discount'].
        "', effect_value='".$data['effect_value'].
        "', status='".$data['status'].
        "' where shipment_id='".$id."'";
    return $GLOBALS['engrave_db']->query($sql);
}
function engrave_shipment_oilfee_update($data, $id) {
    extract($data);

    $sql="update ".$GLOBALS['engrave']->table('shipment_oilfee').
        " set shipment_id='".$data['shipment_id'].
        "', year='".$data['year'].
        "', month='".$data['month'].
        "', discount='".$data['discount'].
        "' where soid='".$id."'";
    return $GLOBALS['engrave_db']->query($sql);
}