/**
 * 页面加载执行
 */
var heavyvolume;
var volumeprice;
var totalweight;


//当前订单需要支付的金额
var pay_money = 0.00;

$(function() {
    load();
    compute_cost();
});
function btn_service(serviceid)
{
    return ;
    if(document.getElementById('chk_'+serviceid).checked==true)
    {
        Ajax.call('engrave_all_orders.php?act=getserviceprice',"service_id="+serviceid,getserviceprice_callback,"GET","TEXT",false,true);
    }else{
        document.getElementById('txt_'+serviceid).value='';
    }
    //txt_services[]
    //alert(document.getElementById('txt_'+serviceid).value);
    //获取所有增值服务费用

    var txt = document.getElementsByName("txt_services[]");
    var service_value=0;
    for(i = 0; i < txt.length; i++) {
        if(txt[i].value!='')
        {
            service_value = service_value + parseFloat(txt[i].value);
        }
    }
    document.getElementById('valueservicecost').value=service_value;
}

function getserviceprice_callback(result)
{
    var obj = eval('(' + result + ')');
    document.getElementById('txt_'+obj.ServiceId).value=obj.Price;
}


function load() {
    //支付方式
    //0:默认在提交订单为已支付 1 :处理完成后 手动确认支付2:处理完成后 自动支付（发货速度最快，不可使用积分和优惠券）
    var paymentpath = document.getElementById('paymentpath').value;
    if(paymentpath == '1')
    {
        gObj("manual_usermoney").style.display =  "none";
        gObj("manual_userpoints").style.display =  "none";
        gObj("manual_totalcost").style.display =  "none";
        gObj("manual_needmoney").style.display =  "none";
    }
    //获得用户积分
    var usePointstb = document.getElementById('usePointstb').value;//order_userpoints
    var rate_points = document.getElementById('rate_points').value; //几元一积分
    var usepoint_price = parseFloat(usePointstb) * parseFloat(rate_points);

    document.getElementById('currency_point').innerHTML = usepoint_price;
    //获得订单编号
    var orderid = document.getElementById('orderid').value;
    var boxnumber = document.getElementById('boxnumber').value;
    var ShippingId = 0;// document.getElementById('shippingid').value;
    gObj("gaoji").style.display =  (boxnumber != 0) ? "" : "none";
    //获得总重量
    totalweight = document.getElementById('hidden_totalweight').value;

    Ajax.call('engrave_all_orders.php?act=getpackageinformation',"order_id="+orderid,act_packageinfo,"GET","TEXT",false,true);
    Ajax.call('engrave_all_orders.php?act=getpackagevalueservice',"order_id="+orderid,act_valueservice,"GET","TEXT",false,true);
    Ajax.call('engrave_all_orders.php?act=getpackageorderwaybill',"order_id="+orderid,act_orderwaybill,"GET","TEXT",false,true);
    //获得体积重比和体积重超重费用
    //获得当前用户的金额
    //Ajax.call( 'engrave_all_orders.php?act=getcurrentbalance', "order_id="+orderid, currentbalance_callback , 'GET', 'TEXT', false, true );
    //根据线路获取金额相关的信息
    ShippingId >0 && Ajax.call('engrave_all_orders.php?act=getshippingorderprice', 'ShippingId=' + ShippingId, shippingorderprice_callback , 'GET', 'TEXT', false, true );

    gObj("paymented").style.display =  (parseFloat(currency_money) > parseFloat(pay_money)) ? "" : "none";
    gObj("unpayment").style.display =  (parseFloat(currency_money) < parseFloat(pay_money)) ? "" : "none";

    change_weight();
}
//获得用户的余额
/*
function currentbalance_callback(result)
{
    var current_balance = document.getElementById('current_balance');
    if (result != 0) {
    current_balance.innerHTML = formatNumber(result);
    document.getElementById('usermoneny').value = roundNumber(result,2);
    currency_money = roundNumber(result,2);
    }
}
*/
//获得订单包裹
var goods_text;
var consigee_text;
var ordercount;
var waybill_length = 0;
var waybill_width = 0;
var waybill_height = 0;
function act_orderwaybill(result)
{
    var order_text='';
    var obj = eval('(' + result + ')');
    ordercount = obj.length;
    document.getElementById('waybill_number').value = obj.length;
    var delivery = document.getElementById("delivery");
    for(var index = 0;index < obj.length;index++)
    {
        Ajax.call( 'engrave_all_orders.php?act=getordergoods', 'ordw_waybillid=' + obj[index].ordw_waybillid, orderwaybill_callback , 'GET', 'TEXT', false, true );
        Ajax.call( 'engrave_all_orders.php?act=getdeliveryinfo', 'ordw_consigid=' + obj[index].ordw_consigid, orderconsig_callback , 'GET', 'TEXT', false, true );
        order_text += "<div class='delivery_item'>包裹#"+(index+1)+"&nbsp;单号:（"+obj[index].ordw_orderno+"）&nbsp;申报价值："+roundNumber(obj[index].ordw_applyprice,2) + "&nbsp;<span id='applyprice_"+(index+1)+"'>"+obj[index].Name
            +"</span>&nbsp;&nbsp;包裹重量：<input name='delivery_"+(index+1)+"' id='delivery_"+(index+1)+"' style=\"ime-mode;dsabled\" onkeyup=\"return ValidateFloat(this,value)\"  onblur='change_weight();' type='number' size='15' value="+roundNumber(obj[index].ordw_goodweight,2)+" /> (<span id='goodweight_"+(index+1)+"'>"+obj[index].WeightUnit+"</span>) &nbsp;"
            +"长：<input name='length_"+(index+1)+"' id='length_"+(index+1)+"' type='input' size='10' style=\"ime-mode;dsabled\" onkeyup=\"return ValidateFloat(this,value)\"  onblur='change_length();' value="+roundNumber(obj[index].ordw_sizelength,2)+" />&nbsp;mm "
            +"宽：<input name='width_"+(index+1)+"' id='width_"+(index+1)+"' type='input' size='10' style=\"ime-mode;dsabled\" onkeyup=\"return ValidateFloat(this,value)\"  onblur='change_width();' value="+roundNumber(obj[index].ordw_sizewidth,2)+" />&nbsp; mm"
            +"高：<input name='height_"+(index+1)+"' id='height_"+(index+1)+"' type='input' size='10' style=\"ime-mode;dsabled\" onkeyup=\"return ValidateFloat(this,value)\"  onblur='change_height();' value="+roundNumber(obj[index].ordw_sizeheight,2)+" />&nbsp;mm(<span id='volumeunit_"+(index+1)+"'>"+obj[index].VolumeUnit+"</span>) &nbsp;"
            +"<ul class='item_list'>"+goods_text+"</ul>"
            +"收货信息："+consigee_text+"<br>"
            +"包裹运费：<span>"+roundNumber(obj[index].ordw_waybillcost,2)+"</span><span id='waybillcost_"+(index+1)+"'>"+obj[index].Name+"</span>， 关税：<span>"+roundNumber(obj[index].ordw_tariff,2)+"</span><span id='tariff_"+(index+1)+"'>"+obj[index].Name+"</span> 保险费用：<span>"+roundNumber(obj[index].ordw_insurprice,2)+"</span><span id='insurprice_"+(index+1)+"'>"+obj[index].Name+"</span>"
            +"<input type='hidden' name='waybillid_"+(index+1)+"' id='waybillid_"+(index+1)+"' value='" + obj[index].ordw_waybillid + "' /></div>";
        waybill_length += obj[index].ordw_sizelength;
        waybill_width += obj[index].ordw_sizewidth;
        waybill_height += obj[index].ordw_sizeheight;
    }
    delivery.innerHTML = order_text;
}
//改变重量
function change_weight()
{
    totalweight = 0.00;
    for(var i = 0;i < ordercount;i++)
    {
        var delivery = 'delivery_'+(i+1);
        var package_weight = document.getElementById(delivery).value;
        totalweight = parseFloat(totalweight) + parseFloat(package_weight);
    }
    document.getElementById('totalweight').innerHTML = totalweight;
    document.getElementById('hidden_totalweight').value = totalweight;
    document.getElementById('weighttb').value = totalweight;
    //计算仓储费用
    //获取订单ID，根据订单ID获取包裹ID，根据包裹ID，获取仓库信息
    var orderid = document.getElementById('orderid').value;
    Ajax.call('engrave_all_orders.php?act=getwarehouseprice', 'orderid=' + orderid, warehouseprice_callback , 'GET', 'TEXT', false, true );
    //线路
    var shippingId = 0;//document.getElementById('shippingid').value;
    shippingId>0 && Ajax.call('engrave_all_orders.php?act=getshippingorderprice', 'ShippingId=' + shippingId, shippingorderprice_callback , 'GET', 'TEXT', false, true );
}
//仓储费 = 仓储费（每天）  + 入库费（单位重量）
function warehouseprice_callback(result)
{
    var obj = eval('('+result+')');
    var totalStorage=0;
    for(var i = 0;i < ordercount;i++)
    {
        var delivery = 'delivery_'+(i+1);
        //获取重量
        var package_weight = parseFloat(document.getElementById(delivery).value);
        //获取免费天数
        var WarehousingBM = parseFloat(obj.WarehousingBM);
        //获取当前库存天数：订单提交日期-包裹入库日期
        var pck_timecount = parseInt(obj.pck_timecount);
        //获取仓储费
        var Warehousing = parseFloat(obj.Warehousing);
        var actualWarehousing = 0;
        if(pck_timecount>WarehousingBM)
        {
            actualWarehousing = (pck_timecount-WarehousingBM) * Warehousing;
        }
        //获取入库收取费用
        var Storage = parseFloat(obj.Storage);
        //获取入库收费重量
        var wh_weight = parseFloat(obj.wh_weight);
        //入库费用 = (包裹重量 / 收费重量)(上取整) * 入库费用
        var actualStorage = wh_weight<=0 ? 0 : Math.ceil(package_weight/wh_weight) * Storage;
        totalStorage = totalStorage+actualWarehousing+actualStorage;
    }
    document.getElementById('warehousecost').value=totalStorage;
}

//改变长度
function change_length()
{
    waybill_length = 0.00;
    for(var i = 0;i < ordercount;i++)
    {
        var length = 'length_'+(i+1);
        var package_length = document.getElementById(length).value;
        waybill_length = parseFloat(waybill_length) + parseFloat(package_length);
    }
    var shippingId = document.getElementById('shippingid').value;
    Ajax.call('engrave_all_orders.php?act=getshippingorderprice', 'ShippingId=' + shippingId, shippingorderprice_callback , 'GET', 'TEXT', false, true );
}
//改变宽度
function change_width()
{
    waybill_width = 0.00;
    for(var i = 0;i < ordercount;i++)
    {
        var width = 'width_'+(i+1);
        var package_width = document.getElementById(width).value;
        waybill_width = parseFloat(waybill_width) + parseFloat(package_width);
    }
    var shippingId = document.getElementById('shippingid').value;
    Ajax.call('engrave_all_orders.php?act=getshippingorderprice', 'ShippingId=' + shippingId, shippingorderprice_callback , 'GET', 'TEXT', false, true );
}
//改变长度
function change_height()
{
    waybill_height = 0.00;
    for(var i = 0;i < ordercount;i++)
    {
        var height = 'height_'+(i+1);
        var package_height = document.getElementById(height).value;
        waybill_height = parseFloat(waybill_height) + parseFloat(package_height);
    }
    var shippingId = document.getElementById('shippingid').value;
    Ajax.call('engrave_all_orders.php?act=getshippingorderprice', 'ShippingId=' + shippingId, shippingorderprice_callback , 'GET', 'TEXT', false, true );
}
//改变保险费用//改变运费//改变仓储操作费//改变仓储费//改变增值服务费//改变关税//改变其他费用
//获取所有费用的合
function compute_cost()
{
    var waybillcost = document.getElementById('waybillcost').value;
    var insurancecost = document.getElementById('insurancetb').value;
    var operaterPrice = document.getElementById('operaterPricetb').value;
    var warehousecost = document.getElementById('warehousecost').value;
    var valueservicecost = document.getElementById('valueservicecost').value;
    var tariffcost = document.getElementById('tariffcost').value;
    var othercost = document.getElementById('othercost').value;
    var currency_point = document.getElementById('currency_point').innerHTML;
    var oilprice = document.getElementById('oilprice').value || 0;


    var totalPrice =  parseFloat(waybillcost) +
        parseFloat(insurancecost) + parseFloat(operaterPrice) + parseFloat(warehousecost) +
        parseFloat(valueservicecost) + parseFloat(tariffcost) + parseFloat(oilprice) + 
        parseFloat(othercost) - parseFloat(currency_point);

    document.getElementById('totalprice').innerHTML = roundNumber(totalPrice,2);
    document.getElementById('needprice').innerHTML = roundNumber(totalPrice,2);
    var currency_rate = document.getElementById('currency_rate').value;
    var exchange_price = parseFloat(totalPrice) / parseFloat(currency_rate);
    document.getElementById('needmoneny').innerHTML = roundNumber(exchange_price,2);
    document.getElementById('totalmoneny').value = roundNumber(exchange_price,2);
    pay_money = roundNumber(exchange_price,2);

    gObj("paymented").style.display =  (parseFloat(currency_money) > parseFloat(pay_money)) ? "" : "none";
    gObj("unpayment").style.display =  (parseFloat(currency_money) < parseFloat(pay_money)) ? "" : "none";
}

//改变线路
function shippingorderprice_callback(result)
{
    var orderPrice = 0.00;
    var weightSub = 0.00;
    var weightDiv = 0.00;
    var weightCeil = 0.00;
    var priceMul = 0.00;
    var slpprice = 0.00;
    var volumeprice = 0.00;
    var discount_orderprice = 0.00;//运单折扣后的费用
    var order_discount = document.getElementById('order_discount').value;
    var obj = eval('(' + result + ')');
    /*支持阶梯价格*/
    if(obj[0].IsSupPice!=0)
    {
        /*线路首重量 大于 总重量：只计算首重*/
        if(obj[0].Weight > totalweight)
        {
            orderPrice = roundNumber(obj[0].Price,2);
        }
        else
        {
            weightSub = parseFloat(totalweight) - parseFloat(obj[0].Weight);
            for(var index=0;index<obj.length;index++)
            {
                if(obj[index].slp_minweight < weightSub && obj[index].slp_maxweight >= weightSub)
                {
                    slpprice = parseFloat(obj[index].slp_price)+parseFloat(obj[index].slp_serviceprice);
                    break;
                }
            }
            orderPrice = parseFloat(slpprice) + parseFloat(obj[0].Weight);
        }
        //获取体积重比/体积重超重费用
        var heavyvolume=parseFloat(obj[0].HeavyVolume);
        var volumeprice_db=parseFloat(obj[0].VolumePrice);
        var volume=((parseFloat(waybill_length)*parseFloat(waybill_width)*parseFloat(waybill_height))/heavyvolume);

        if(volume >= obj[0].Weight)
        {
            var addweight=Math.ceil(volume - obj[0].Weight);
            for(var lindex = 0;lindex < obj.length;lindex++){
                if(obj[lindex].slp_minweight < addweight && obj[lindex].slp_maxweight >= addweight)
                {
                    volumeprice = parseFloat(obj[lindex].slp_price) + parseFloat(obj[lindex].slp_serviceprice) + parseFloat(obj[lindex].Price);
                }
            }
        }
        else
        {
            volumeprice = parseInt(obj[0].Price);
        }
        //运费价格=普通价格+体积重比价格
        orderPrice = orderPrice + volumeprice;
        //折扣=总费用*会员折扣*线路折扣
        discount_orderprice = parseFloat(orderPrice) * parseFloat(order_discount/10) * obj[0].Discount;
    }
    /*不支持 阶梯价格*/
    else
    {
        if(obj[0].Weight > totalweight)
        {
            orderPrice = roundNumber(obj[0].Price,2);//运费价格
        }
        else
        {
            //获取超出首重的部分，上取整
            weightSub = parseFloat(totalweight) - parseFloat(obj[0].Weight);
            weightDiv = parseFloat(weightSub) / parseFloat(obj[0].AddWeight);
            weightCeil = Math.ceil(weightDiv);
            //获取超出首重价格
            priceMul = parseFloat(weightCeil) * parseFloat(obj[0].AddPrice);
            orderPrice = parseFloat(obj[0].Price) + parseFloat(priceMul);
        }

        //获取体积重比/体积重超重费用
        var heavyvolume=parseFloat(obj[0].HeavyVolume);
        var volumeprice_db=parseFloat(obj[0].VolumePrice);
        var volume=((parseFloat(waybill_length)*parseFloat(waybill_width)*parseFloat(waybill_height))/heavyvolume);

        if(volume >= obj[0].Weight)
        {
            volumeprice = Math.ceil(volume-obj[0].Weight) * volumeprice_db + parseFloat(obj[0].Price);
        }
        else
        {
            volumeprice = parseFloat(obj[0].Price);
        }
        //运费价格=普通价格+体积重比价格
        orderPrice = orderPrice + volumeprice;
        //折扣=总费用*会员折扣*线路折扣
        //alert(obj[0].Discount);
        discount_orderprice = parseFloat(orderPrice) * parseFloat(order_discount/10) * obj[0].Discount;
    }
    document.getElementById('waybillcost').value = 	roundNumber(discount_orderprice,2);
    var insurancecost = document.getElementById('insurancetb').value;
    var operaterPrice = document.getElementById('operaterPricetb').value;
    var warehousecost = document.getElementById('warehousecost').value;
    var valueservicecost = document.getElementById('valueservicecost').value;
    var tariffcost = document.getElementById('tariffcost').value;
    var othercost = document.getElementById('othercost').value;
    var currency_point = document.getElementById('currency_point').innerHTML;
    var totalPrice =  parseFloat(discount_orderprice) +
        parseFloat(insurancecost) + parseFloat(operaterPrice) + parseFloat(warehousecost) +
        parseFloat(valueservicecost) + parseFloat(tariffcost) + parseFloat(othercost) - parseFloat(currency_point);
    //parseFloat(volumeprice) 运费
    document.getElementById('totalprice').innerHTML = roundNumber(totalPrice,2);
    document.getElementById('needprice').innerHTML = roundNumber(totalPrice,2);
    var currency_rate = document.getElementById('currency_rate').value;
    var exchange_price = parseFloat(totalPrice) / parseFloat(currency_rate);
    document.getElementById('needmoneny').innerHTML = roundNumber(exchange_price,2);
    document.getElementById('totalmoneny').value = roundNumber(exchange_price,2);
    pay_money = roundNumber(exchange_price,2);

    gObj("paymented").style.display =  (parseFloat(currency_money) > parseFloat(pay_money)) ? "" : "none";
    gObj("unpayment").style.display =  (parseFloat(currency_money) < parseFloat(pay_money)) ? "" : "none";
}
//获得订单中运单信息
function orderwaybill_callback(result)
{
    goods_text = '';
    var obj = eval('(' + result + ')');
    for(var index = 0;index < obj.length;index++)
    {
        goods_text += "<li>物品"+(index+1)+":"+obj[index].ordg_goodname+"&nbsp;&nbsp;申报价值："+roundNumber(obj[index].ordg_goodprice,2)+" X 数量："+obj[index].ordg_goodnumber+" = 总价："+roundNumber(parseFloat(obj[index].ordg_goodprice)*obj[index].ordg_goodnumber,2)+"</li>";
    }
}
//获得收货人的详细信息
function orderconsig_callback(result)
{
    consigee_text = '';
    var obj = eval('(' + result + ')');
    consigee_text = obj[0].da_consignee + "（"+obj[0].da_consigneetelephone+"/"+obj[0].da_sparetelephone+"）地址：("+obj[0].da_name+")"+obj[0].country_name+obj[0].da_address+"";
}
//获得增值服务
function act_valueservice(result)
{
    var service_text='';
    var obj = eval('(' + result + ')');
    var valueservice = document.getElementById("valueservice");
    if(obj.length == 0)
    {
        service_text = '无增值服务';
    }
    for(var index = 0;index < obj.length;index++)
    {
        service_text += obj[index].ServiceName + "&nbsp;&nbsp;";
    }
    valueservice.innerHTML = service_text;
}
var text;
var packagecount;
function act_packageinfo(result)
{
    text='';
    var obj = eval('(' + result + ')');
    packagecount = obj.length;
    var packagegood = document.getElementById("package_goods");
    for(var index = 0;index < obj.length;index++)
    {
        text += "<li><lable>"+(index+1)+":单号: "+obj[index].pck_expressnumber+"&nbsp;"
            + "&nbsp;&nbsp;<span style='color:red;'>"+obj[index].pck_weight
            +"<span id='weightunit_"+(index+1)+"'>"+obj[index].WeightUnit+"</span></li>";
        Ajax.call( 'engrave_all_orders.php?act=getpackagegoods', 'pck_id=' + obj[index].pck_id, packagegoods_callback , 'GET', 'TEXT', false, true );
    }
    packagegood.innerHTML = text;
}
function packagegoods_callback(result)
{
    var obj = eval('(' + result + ')');
    for(var index = 0;index < obj.length;index++)
    {
        text += "<li class='item'>物品"+(index+1)+"&nbsp;:&nbsp;"+obj[index].pckg_name+"&nbsp;&nbsp;数量：&nbsp;"
            +obj[index].pckg_amount+"&nbsp;×&nbsp;单价：&nbsp;"+roundNumber(obj[index].pckg_unitprice,2)+"&nbsp;=&nbsp;总价：&nbsp;"+roundNumber(obj[index].pckg_totalprice,2)+"</li>";
    }
}
/**
 * 保留两位小数
 * @param {Object} number
 * @param {Object} decimals
 */
function roundNumber(number,decimals) {
    var newString;// The new rounded number
    decimals = Number(decimals);
    if (decimals < 1) {
        newString = (Math.round(number)).toString();
    } else {
        var numString = number.toString();
        if (numString.lastIndexOf(".") == -1) {// If there is no decimal point
            numString += ".";// give it one at the end
        }
        var cutoff = numString.lastIndexOf(".") + decimals;// The point at which to truncate the number
        var d1 = Number(numString.substring(cutoff,cutoff+1));// The value of the last decimal place that we'll end up with
        var d2 = Number(numString.substring(cutoff+1,cutoff+2));// The next decimal, after the last one we want
        if (d2 >= 5) {// Do we need to round up at all? If not, the string will just be truncated
            if (d1 == 9 && cutoff > 0) {// If the last digit is 9, find a new cutoff point
                while (cutoff > 0 && (d1 == 9 || isNaN(d1))) {
                    if (d1 != ".") {
                        cutoff -= 1;
                        d1 = Number(numString.substring(cutoff,cutoff+1));
                    } else {
                        cutoff -= 1;
                    }
                }
            }
            d1 += 1;
        }
        if (d1 == 10) {
            numString = numString.substring(0, numString.lastIndexOf("."));
            var roundedNum = Number(numString) + 1;
            newString = roundedNum.toString() + '.';
        } else {
            newString = numString.substring(0,cutoff) + d1.toString();
        }
    }
    if (newString.lastIndexOf(".") == -1) {// Do this again, to the new string
        newString += ".";
    }
    var decs = (newString.substring(newString.lastIndexOf(".")+1)).length;
    for(var i=0;i<decimals-decs;i++) newString += "0";
    //var newNumber = Number(newString);// make it a number if you like
    return newString; // Output the result to the form field (change for your purposes)
}
//定义公共函数
function GetAllPrice()
{
    var ShippingId = document.getElementById('shippingid').value;
    //根据线路获取金额相关的信息
    Ajax.call('engrave_all_orders.php?act=getshippingorderprice', 'ShippingId=' + ShippingId, shippingorderprice_callback , 'GET', 'TEXT', false, true );
}
//选择线路来改变货币和重量的单位
function select_shipping(value)
{
    Ajax.call('engrave_all_orders.php?act=getshippingorderprice', 'ShippingId=' + value, shippingorderprice_callback , 'GET', 'TEXT', false, true );
    //改变货币和重量单位
    Ajax.call('engrave_all_orders.php?act=getcurrencyinfo', "shippingid="+value, currencyinfo_callback , 'GET', 'TEXT', false, true );
}
function currencyinfo_callback(result)
{
    var obj = eval('(' + result + ')');
    document.getElementById('insurace_symbol').innerHTML = obj[0].Symbol;
    document.getElementById('waybillcost_symbol').innerHTML = obj[0].Symbol;
    document.getElementById('operatorcost_symbol').innerHTML = obj[0].Symbol;
    document.getElementById('warehousecost_symbol').innerHTML = obj[0].Symbol;
    document.getElementById('valueservicecost_symbol').innerHTML = obj[0].Symbol;
    document.getElementById('tariffcost_symbol').innerHTML = obj[0].Symbol;
    document.getElementById('othercost_symbol').innerHTML = obj[0].Symbol;
    //获得货币名称
    document.getElementById('insurace_name').innerHTML = obj[0].Name;
    document.getElementById('waybillcost_name').innerHTML = obj[0].Name;
    document.getElementById('operatorcost_name').innerHTML = obj[0].Name;
    document.getElementById('warehousecost_name').innerHTML = obj[0].Name;
    document.getElementById('valueservicecost_name').innerHTML = obj[0].Name;
    document.getElementById('tariffcost_name').innerHTML = obj[0].Name;
    document.getElementById('othercost_name').innerHTML = obj[0].Name;
    document.getElementById('totalcost_name').innerHTML = obj[0].Name;
    document.getElementById('needcost_name').innerHTML = obj[0].Name;
    //获得重量单位
    document.getElementById('weightUnit').innerHTML = obj[0].WeightUnit;

    for(var i = 0;i < packagecount;i++)
    {
        var weightunit = 'weightunit_'+(i+1);
        document.getElementById(weightunit).innerHTML = obj[0].WeightUnit;
    }

    for(var j = 0;j < ordercount;j++)
    {
        var applyprice_name = 'applyprice_'+(j+1);
        var weightunit = 'goodweight_'+(j+1);
        var volumeunit = 'volumeunit_'+(j+1);
        var waybillcost_name = 'waybillcost_'+(j+1);
        var tariff_name = 'tariff_'+(j+1);
        var insurprice_name = 'insurprice_'+(j+1);
        document.getElementById(weightunit).innerHTML = obj[0].WeightUnit;
        document.getElementById(applyprice_name).innerHTML = obj[0].Name;
        document.getElementById(waybillcost_name).innerHTML = obj[0].Name;
        document.getElementById(tariff_name).innerHTML = obj[0].Name;
        document.getElementById(insurprice_name).innerHTML = obj[0].Name;
        document.getElementById(volumeunit).innerHTML = obj[0].VolumeUnit;
    }
}
//是否对相关标签进行隐藏
function gObj(obj)
{
    var theObj;
    if (document.getElementById)
    {
        if (typeof obj=="string") {
            return document.getElementById(obj);
        } else {
            return obj.style;
        }
    }
    return null;
}
//将数字金额进行千位分隔
function formatNumber(number)
{
    number = number.replace(/,/g, "");
    var digit = number.indexOf(".");
    // 取得小数点的位置
    var int = number.substr(0,digit);
    // 取得小数中的整数部分
    var i;
    var mag = new Array();
    var word;
    if(number.indexOf(".") == -1)
    {
        // 整数时
        i = number.length;
        // 整数的个数
        while(i > 0)
        {
            word = number.substring(i, i - 3);
            // 每隔3位截取一组数字
            i -= 3;
            mag.unshift(word);
            // 分别将截取的数字压入数组
        }
        number = mag;
    }
    else
    {
        // 小数时
        i = int.length;
        // 除小数外，整数部分的个数
        while(i > 0)
        {
            word = int.substring(i, i - 3);
            //每隔3位截取一组数字
            i -= 3;
            mag.unshift(word);
        }
        number = mag + number.substring(digit);
    }
    return number;
}
function validate()
{
    validator = new Validator("theForm");
    return validator.passed();
}