<?php

function airline_flight_paging_list() {
    /* 记录总数 */
    $table = "airline_flight";
    $sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table($table);

    $filter = array();
    $filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
    /* 分页大小 */
    $filter = page_and_size($filter);
    $sql = "SELECT * " .
        " FROM " . $GLOBALS['engrave']->table($table) . " " .
        " LIMIT " . $filter['start'] . ",$filter[page_size]";

    $row = $GLOBALS['engrave_db']->getAll($sql);
    return array('data_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}


function airline_price_template_paging_list() {
    /* 记录总数 */
    $table = "airline_price_template";
    $sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table($table);

    $filter = array();
    $filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
    /* 分页大小 */
    $filter = page_and_size($filter);
    $sql = "SELECT * " .
        " FROM " . $GLOBALS['engrave']->table($table) . " " .
        " LIMIT " . $filter['start'] . ",$filter[page_size]";

    $row = $GLOBALS['engrave_db']->getAll($sql);
    return array('data_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

function allAirlinePriceTemplate() {
    $table = "airline_price_template";
    $sql = "SELECT *  FROM " . $GLOBALS['engrave']->table($table);
    $row1 = $GLOBALS['engrave_db']->getAll($sql);
    foreach($row1 as $key => $value) {
        $result[$value['apt_id']] = $value; 
    }
    return $result;
}
function engrave_airline_price_template_insert($data) {
    $sql="insert into ".$GLOBALS['engrave']->table('airline_price_template').
	"(name,price0, price100, price300, price500, price1000) values('".
	$data['name']."','".$data['price0']."','".$data['price100']."','".$data['price300']."','".$data['price500']."','".$data['price1000']."')";

	return $GLOBALS['engrave_db']->query($sql);
}
function    engrave_airline_flight_insert($data) {
    extract($data);
    $sql="insert into ".$GLOBALS['engrave']->table('airline_flight').
	"(lp_id, ap_id, airline_id, is_direct, days, hours, trans_city, flight_no, leave_date, leave_time,arrival_time, apt_id, leave_ampm) values('".
    $lp_id."','".$ap_id."','".$airline_id."','".$is_direct."','".$days."','".$hours."'"
    .",'".$trans_city."','".$flight_no."','".$leave_date."','".$leave_time."','".$arrival_time."','".$apt_id."','".$leave_ampm."')";

	return $GLOBALS['engrave_db']->query($sql);
}
function    engrave_airline_flight_update($data, $id) {
    // extract($data);
    // $sql="insert into ".$GLOBALS['engrave']->table('airline_flight').
	// "(lp_id, ap_id, airline_id, is_direct, days, hours, trans_city, flight_no, leave_time,arrival_time, apt_id) values('".
    // $lp_id."','".$ap_id."','".$airline_id."','".$is_direct."','".$days."','".$hours."'"
    // .",'".$trans_city."','".$flight_no."','".$leave_time."','".$arrival_time."','".$apt_id."')";

    extract($data);
    $sql="update ".$GLOBALS['engrave']->table('airline_flight').
    " set lp_id='".$lp_id."' , ap_id='".$ap_id."'  , airline_id='".$airline_id
    ."' , is_direct='".$is_direct."' , days='".$days."', hours='".$hours."', trans_city='".$trans_city
    ."', flight_no='".$flight_no
    ."' , leave_date='".$leave_date."',leave_time='".$leave_time."', arrival_time='".$arrival_time."', apt_id='".$apt_id."', leave_ampm='".$leave_ampm
    ."' where flight_id=".$id;
    
    $GLOBALS['engrave_db']->query($sql);
}
function engrave_airline_price_template_update($data, $id) {
    extract($data);
    $sql="update ".$GLOBALS['engrave']->table('airline_price_template').
    "set name='".$name."', price0='".$price0."' , price100='".$price100."'  , price300='".$price300
    ."' , price500='".$price500."' , price1000='".$price1000."' where apt_id=".$id;
    
    $GLOBALS['engrave_db']->query($sql);
}
function get_airline_price_template($id) {
    $table = "airline_price_template";
    $sql = "SELECT *  FROM " . $GLOBALS['engrave']->table($table). " WHERE apt_id=".$id;
    return  $GLOBALS['engrave_db']->getRow($sql);
}

function get_airline_flight($id) {
    $table = "airline_flight";
    $sql = "SELECT *  FROM " . $GLOBALS['engrave']->table($table). " WHERE flight_id=".$id;
    return  $GLOBALS['engrave_db']->getRow($sql);
}
function update_airline_flight_status($id, $val) {
    $table = "airline_flight";
    $status = $val ? 'enable' : 'disable';
    $sql = "UPDATE  " . $GLOBALS['engrave']->table($table). " SET status='".$status."' WHERE flight_id=".$id;
    $GLOBALS['engrave_db']->query($sql);
}