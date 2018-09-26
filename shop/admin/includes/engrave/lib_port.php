<?php
function port_paging_list($type) {
    /* 记录总数 */
    $table = "leave_port";
    if($type!='leave') {
        $table = "arrival_port";
    }
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
function airline_paging_list() {
    /* 记录总数 */
    $table = "airline";
    
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
function allAirlines() {
    $table = "airline";
    $sql = "SELECT *  FROM " . $GLOBALS['engrave']->table($table);
    $row1 = $GLOBALS['engrave_db']->getAll($sql);
    foreach($row1 as $key => $value) {
        $result2[$value['airline_id']] = $value; 
    }
    return $result2;
}
function allPorts() {
    $table1 = "leave_port";
    $table2 = "arrival_port";
    $sql = "SELECT *  FROM " . $GLOBALS['engrave']->table($table1);
    $row1 = $GLOBALS['engrave_db']->getAll($sql);
    foreach($row1 as $key => $value) {
        $result1[$value['lp_id']] = $value; 
    }

    $sql = "SELECT *   FROM " . $GLOBALS['engrave']->table($table2);
    $row2 = $GLOBALS['engrave_db']->getAll($sql);
    foreach($row2 as $key => $value) {
        $result2[$value['ap_id']] = $value; 
    }
    return array(
        "leave_ports" => $result1,
        "arrival_ports" => $result2
    );
}