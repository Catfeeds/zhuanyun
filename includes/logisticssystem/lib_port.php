<?php

//namespace cfang\lib\Port;


class lib_port
{
    public function __constructor() {

    }
    public static function getAllPorts() {
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
}