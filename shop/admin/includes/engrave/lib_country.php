<?php
function country_paging_list() {
    /* 记录总数 */
    $sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('country');
    
    $filter = array();
    $filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'cid' : trim($_REQUEST['sort_by']);
    $filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
    
    $filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
    /* 分页大小 */
    $filter = page_and_size($filter);

    $sql = "SELECT * " .
            " FROM " . $GLOBALS['engrave']->table('country') . " " .
          
            " order by " .$filter['sort_by'].' '.$filter['sort_order'] .
            " LIMIT " . $filter['start'] . ",$filter[page_size]";

    $filter['keyword'] = stripslashes($filter['keyword']);
    //set_filter($filter, $sql, $param_str);
    $row = $GLOBALS['engrave_db']->getAll($sql);
    return array('data_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
    
}
function allCountries() {
    $sql = "SELECT * " .
    " FROM " . $GLOBALS['engrave']->table('country') . " WHERE 1 ";
    $row = $GLOBALS['engrave_db']->getAll($sql);
    foreach($row as $cid => $item) {
        $item['country_id'] = $item['cid'];
        $result[$item['cid']] = $item;
    }
    return $result;
}
function engrave_countries( ) {
    $sql = "SELECT * " .
        " FROM " . $GLOBALS['engrave']->table('country') .
        " WHERE 1 ";

    $row = $GLOBALS['engrave_db']->getAll($sql);

    $select = '';
    foreach ($row AS $key=>$val)
    {
        $data[$val['cid']] = $val['country_name'];
    }

    return $data;
}
function getCountryListByIds($ids, $countries) {
    $result =array();
   
    foreach(explode(",",$ids) as $id) {
       $item = $countries[$id];
       array_push($result, $item['country_name']);
    }
    return  implode(",", $result);
}
function allLeftCountries() {
    $sql = "SELECT * " .
    " FROM " . $GLOBALS['engrave']->table('country') . " WHERE cp_id=0 ";
    $row = $GLOBALS['engrave_db']->getAll($sql);
    return $row;
}
function engrave_country_insert($data) {
    $sql="insert into ".$GLOBALS['engrave']->table('country').
	"(country_name, country_en_name, country_code) values('".
	$data['name']."','".$data['en_name']."','".$data['code']."')";

	return $GLOBALS['engrave_db']->query($sql);
}
function get_all_country_partition($countries) {
    $sql = "SELECT * " .
    " FROM " . $GLOBALS['engrave']->table('country_partition') ;
    $row = $GLOBALS['engrave_db']->getAll($sql);

    
    foreach ($row as $item) {
        $result[$item['cp_id']] = $item;
        $result[$item['cp_id']]['country_list'] = getCountryListByIds($item['country_ids'], $countries);
    }
 


    return $result;
}
function engrave_country_partition_insert($data) {
    extract($data);
    $day_long = "${min_day}到${min_day}工作日";
    $sql="insert into ".$GLOBALS['engrave']->table('country_partition').
	"(cp_name, country_ids, description, min_day, max_day, day_long, shipment_id) values('".
	$data['name']."','".implode(",", $data['selids'])."', '".
	$data['description']."', ".$data['min_day'].", ".$data['max_day'].", '".$day_long."', '".$shipment_id."')";
    //echo $sql;exit;
    $GLOBALS['engrave_db']->query($sql);
    $cp_id =  $GLOBALS['engrave_db']->insert_id();
    
    // $sql="update ".$GLOBALS['engrave']->table('country').
	// "set cp_id=".$cp_id."  where cid in(".implode(",", $data['selids']).")";
    // $GLOBALS['engrave_db']->query($sql);

    $sql="update ".$GLOBALS['engrave']->table('country').
	"set cp_id=0  where cid in(".implode(",", $data['leftids']).")";
    $GLOBALS['engrave_db']->query($sql);


    return $cp_id;

}
/**
 * 获取货币:根据获取ID
 * @param number $CurrecyId：货币ID
 * return array:货币数组对象
 */
function get_country_partition($cp_id=0, $countries)
{
    if(!$cp_id) return false;
	$sql = "select * " .
        " FROM " . $GLOBALS['engrave']->table('country_partition').
        " where cp_id=" . $cp_id;
    $row =  $GLOBALS['engrave_db']->getRow($sql);
    foreach(explode(",",$row['country_ids']) as $id) {
        $item = $countries[$id];
        $row['countries'][$id][ "country_name"] =  $item['country_name'];    
        $row['countries'][$id][ "country_en_name"] =  $item['country_en_name'];    
    }
   
    return $row;
}
function engrave_country_update($data, $id) {
    $sql="update ".$GLOBALS['engrave']->table('country').
	"set country_name='".$data['name'].
	"',country_code='".$data['code'].
	"',country_en_name='".$data['en_name'].
	"' where cid='".$id."'";
    return $GLOBALS['engrave_db']->query($sql);
}
function engrave_country_partition_update($data, $id) {
   
    // $sql="update ".$GLOBALS['engrave']->table('country').
	// "set cp_id=0  where cid in(".implode(",", $data['leftids']).")";
    // $GLOBALS['engrave_db']->query($sql);
    extract($data);
    $day_long = "${min_day}到${min_day}工作日";
    $sql="update ".$GLOBALS['engrave']->table('country_partition').
	"set cp_name='".$data['name'].
	"',country_ids='".implode(",", $data['selids']).
	"',description='".$data['description'].
	"',min_day='".$min_day.
	"',max_day='".$max_day.
	"',day_long='".$day_long.
	"',shipment_id='".$shipment_id.
	"'  where cp_id='".$id."'";
    return $GLOBALS['engrave_db']->query($sql);
}
function get_country_partition_by_shipment_id($sp_id) {
    $sql = "SELECT * " .
    " FROM " . $GLOBALS['engrave']->table('country_partition') . " " .
  
    " where shipment_id=${sp_id}";
    $result = $GLOBALS['engrave_db']->getAll($sql);
    return $result;
}
function country_partition_paging_list($countries) {
    /* 记录总数 */
    $sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('country_partition');
    
    $filter = array();
    $filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'cp_id' : trim($_REQUEST['sort_by']);
    $filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
    
    $filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
    /* 分页大小 */
    $filter = page_and_size($filter);

    $sql = "SELECT * " .
            " FROM " . $GLOBALS['engrave']->table('country_partition') . " " .
          
            " order by " .$filter['sort_by'].' '.$filter['sort_order'] .
            " LIMIT " . $filter['start'] . ",$filter[page_size]";

    $filter['keyword'] = stripslashes($filter['keyword']);
    //set_filter($filter, $sql, $param_str);
    $row = $GLOBALS['engrave_db']->getAll($sql);
    
    foreach($row as $cid => $item) {
        $row[$cid]['country_list'] = getCountryListByIds($item['country_ids'], $countries);
    }
    return array('data_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
    
}