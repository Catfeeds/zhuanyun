<?php
/**
 * cfang
 *
 */
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
/**
����0.5����	����ÿ0.5����	10~20kg	21~50kg	51~100kg	101kg����
С�������㹫ʽ���۸� = ���� + ������-0.5��*2*����		
��������㹫ʽ�� �۸� = ÿ����۸� * ����		

*/
function shipmentPriceFromChinaToPartition($price_config , $weight) {
//    echo "weight: ${weight}";
//    print_r($price_config);
    $kg = $weight/1000;
    if($kg<10) {  
        $price = $price_config['less_eq_half_kg']+($kg-0.5)*2* $price_config['add_half_kg'];
        if($kg<0.5) return $price_config['less_eq_half_kg'];
    } else {
        if($kg<21) {
             $price = $price_config['ten_twenty_kg']*$kg;
        } else if($kg<51) {
             $price = $price_config['twentyone_fifty_kg']*$kg;
        } else if($kg<101) {
             $price = $price_config['fiftyone_hundred_kg']*$kg;
        } else {
            $price = $price_config['greater_hundredone_kg']*$kg;
        }
    }
    return $price;
}

class CalculateShipmentPrice {
    public $packageIds= array();
    public $lpId;
    public $countryId;
    public $allShipment = array();
    public $packages = array();
    
    
    public function CalculateShipmentPrice($packageIds, $lpId, $countryId) {
        $this->packageIds = $packageIds;
        $this->lpId = $lpId;//default to china not used in this class
        $this->countryId = $countryId;
        if($packageIds) {
            require_once(ROOT_PATH . '/includes/logisticssystem/lib_package.php');
            $this->packages = engrave_packages_list_byids($packageIds);
        }
        //快递公司
        $this->allShipment = shipment_all_list();
        
        
        
    }
    public function  run() {
        global $db;
        $totalWeight = 0;
       
        foreach($this->packages as $key => $item) {
            $pckWeight = $item['pck_weight'];
            //长*宽*高/6000
            $volWeight = $item['pck_sizelength'] * $item['pck_sizewidth']* $item['pck_sizeheight'] / 6000;
            if($volWeight>$pckWeight) {
                $pckWeight = $volWeight;
            }
            $totalWeight += $pckWeight;
            
        }

        return $this->main($totalWeight);



    }
    function main($totalWeight) {
        global $db;
        $year= date('Y');
        $month = date('m');

        $result = array();
        $maxEffectValue = 0;
        $minPriceValue = 0;

        foreach($this->allShipment as $key => $shipment) {

            $shipment_id = $shipment['shipment_id'];
            $discount = $shipment['discount'];

            $sql = "SELECT * " .
                " FROM " . $GLOBALS['engrave']->table('country_partition') .
                "   where shipment_id='$shipment_id' and FIND_IN_SET($this->countryId,country_ids)   " .
                " limit 1 " ;

            $partitionInfo = $db->getRow($sql);
            $cp_id = $partitionInfo['cp_id'];
            //price-config
            $sql = "SELECT * " .
                " FROM " . $GLOBALS['engrave']->table('shipment_price') .
                "   where shipment_id='$shipment_id' and cp_id='$cp_id' and is_delete='no'  " .
                " limit 1 " ;
            $priceInfo = $db->getRow($sql);
            $price_config = json_decode($priceInfo['price_config'], true);
           //print_r($price_config);
            $basicPrice = shipmentPriceFromChinaToPartition($price_config, $totalWeight);
           // echo $basicPrice;exit;
            $price = $basicPrice * $discount/100;

            $sql="select * from ".$GLOBALS['engrave']->table('shipment_oilfee').
                " where shipment_id=".$shipment_id." and year=".$year." and month=".$month." limit 1";

            $oilDiscount = 0;
            $oilfee =  $GLOBALS['engrave_db']->getRow($sql);

            if(empty($oilfee) || !$oilfee['discount'] || $oilfee['discount']<0 || $oilfee['discount']>100) {
            } else {
                $oilDiscount = $oilfee['discount'];
            }
            $price += $basePrice * $oilDiscount;
            $result[$shipment_id] = array(
                "shipment_name" => $shipment['shipment_name'],
                "shipmentName" => $shipment['shipment_name'],
                'effectValue' => $shipment['effect_value'],
                "basicPrice" => $basicPrice,
                "price" => $price,
                "oilDiscount" => $oilDiscount,
                "discount" => $discount/100,

            );
            if($shipment['effect_value']>$maxEffectValue) {
                $maxEffectValue = $shipment['effect_value'];
            }
            if(!$minPriceValue || ($price<$minPriceValue)) {
                $minPriceValue = $price;
            }
            if(!$minDiscount || ($discount/100<$minDiscount)) {
                $minDiscount = $discount/100;
            }
        }

        foreach($result as $key => $item) {
            $result[$key]['bestEffectValue'] = false;
            $result[$key]['bestPrice'] = false;
            $result[$key]['bestDiscount'] = false;
            if($item['effectValue'] == $maxEffectValue) {
                $result[$key]['bestEffectValue'] = true;
            }
            if($item['price'] == $minPriceValue) {
                $result[$key]['bestPrice'] = true;
            }
            if($item['discount'] == $minDiscount) {
                $result[$key]['bestDiscount'] = true;
            }
        }
        return $result;
    }
}