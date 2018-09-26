/**
 * 通过仓库来获取包裹的物品
 * @author cfang
 * @param value
 */
/**
 * Name: "人民币"
 * Symbol: "￥"
 * 
 */

var weightunit = '';
var currencyname = '';
var tableText;

var upgradepack;
var oustside;
var ischeckpackage = 0;
var shippingvalue = 0;
//仓储费和免费仓储天数
var warehousecost = 0.00;
var warehousefreeday = 0;
//外箱缠绕膜和升级包裹
var upgradepackagecost;
var outsidebranecost;
var UpgradePackageValue = 0;
var OustsideBraneValue = false;
var OperatorUpgrade= 0.00;
var OperatorOutside;//操作费用
//定义页面加载的表单数量
var tablevalue; //分箱数量 , 初始是 1,选择分箱后会修改
var idvalue = 0;
//定义记录我们展开运单表格的数量
var ordertablenumber;
//定义包裹的重量
var packageweights = 0.00;
//定义申报价值
var totalnum;
//在编辑数量和商品价格的时候记录当前的表格Id
var table_numprice_value = 0;
//在添加列时全局统计在添加那个表格
var add_tr_tbvalue = 0;
//产生的总费用;
var totalprice = 0.00;
//获得货币的兑换比率
var exchange_rate = 1;

//定义包裹的长
var package_length = 0.00;
//定义包裹的宽
var pcakge_width = 0.00;
//定义包裹的高
var pcakge_height = 0.00;


//运单中的包裹信息
var array_packege = new Array();


var array_package_name;//包裹数组-二维数组名称
////包裹数组-对应table索引 运单索引, 当添加第二个包裹时
var array_table_index=1;

var warhouseInfo = {
	baseInfo :{},
	/*
		ExchageRate:"1"
		HouseId:"4"
		IsDefault:"1"
		Name:"人民币"
		OutsideCost:"10"
		Symbol:"￥"
		UpPackage:"5"
		Warehousing:"1"
		WarehousingBM:"10"
	
	*/
	upgradepackage: {}, //升级包装--设置,
	services : "" //增值服务信息
};
/**
 * $('#service_name') : 增值服务显示 
 * 
 * 
 * 
*/




//获取收货人的详细信息
function deliveryaddress_callback(result)
{
	var obj = eval('(' + result + ')');
	for(var tbindex = 0;tbindex < tablevalue;tbindex++)
	{
		var delevery_address = '';
		var tb_delivery_address = 'tb'+(tbindex+1)+'_deliveryaddress';//显示所有地址列表的区域
		var delevery_address_name = 'tb' + (tbindex+1) + '_delivery_address';//选中的那个地址的name
		for(var index = 0;index < obj.length;index++)
		{
			if(index==0)
			{
				delevery_address += " <input class='address_radio' style='margin-top:1px; vertical-align:middle;' type='radio' name='"+
				delevery_address_name+"' data-tbindex="+tbindex+" value='"+obj[index].da_id+"' data-countryid='"+obj[index].country_id+"' data-countryname='"+obj[index].country_name+"' checked='true'/>"+obj[index].delivery_address+"</br>";
				mainClass.arrival_country_id = obj[index].country_id;
				mainClass.arrival_country_name = obj[index].country_name;
				$('#leave_country').html(mainClass.arrival_country_name);
			}
			else
			{
				delevery_address += " <input class='address_radio' style='margin-top:1px; vertical-align:middle;' type='radio'  data-countryid='"+obj[index].country_id+"' data-countryname='"+obj[index].country_name+"'  name='"+
				delevery_address_name+"' value='"+obj[index].da_id+"' />"+obj[index].delivery_address+"</br>";
			}
		}
		var delevery_info = document.getElementById(tb_delivery_address);
		delevery_info.innerHTML = delevery_address;
	}
}




function warehouseshipping_callback(result)
{
	var obj = eval('(' + result + ')');
	var shipping = document.getElementById("shipping");
	shipping.options.length = 0;
	shipping.options.add(new Option('请选择',0));
	for(var index = 0;index < obj.length;index++)
	{
		shipping.options.add(new Option(obj[index].ShippingName,obj[index].ShippingId));
	}
}



function weightunit_callback(result)
{
	weightunit = result;
}

//控制是否置灰
//@todo 不伦不类 不知道要做什么的函数 像是要将所有的选择重置 
function showservice(get_value)
{
	
	location.reload(); return false;
   //基本服务时，需要重置索引
   array_table_index = 1;
   tableText = '';      
   idvalue = 0;
//    var BBoxService = document.getElementById("BService");
   var tabGoods = document.getElementById("table_goods");
   //document.forms['theForm'].elements['AService'].disabled  = (get_value == 0);
//    document.forms['theForm'].elements['BService'].disabled  = (get_value == 0);
   gObj("detail_goods_info").style.display =  (1 != 0) ? "" : "none";
   //BBoxService.checked = false;
   tablevalue = 1;
   document.getElementById('tablecount').value = 1;
   tableText = "<table class='gridtable' id='testTab1'>"
	+"<tr>"
	+"<th colspan='6' style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;运单#1</th>"
	+"</tr>"
	+"<tr>"
	+"<th>序号</th><th>商品类别</th><th>商品名称</th><th>数量</th><th>单价</th><th><input class='buts'  type='button' name='tianjia' onclick='addTr(1)' /></th>"
	+"</tr>"
	+"<tr>"
	+"<td class='dengj'>1</td>"
	+"<td class='dengjs'>"
	+"<select id='tab1_ratename1' style='width:98%' name='tab1_ratename1' onchange='select_ratetax_name(this.options[this.options.selectedIndex].value,1)'></select>"
	+"</td>"
	+"<td class='goodsname'><input type='text' style='height:23px;width:96%' id='tab1_goodsname1' name='tab1_goodsname1' size='12'  /></td>"
	+"<td class='goodsnumber'><input type='text' style='height:23px;width:94%' id='tb1_num1' name='tb1_num1' size=''5 onblur='checkNum(1,1);'  /></td>"
	+"<td class='goodsprice'><input type='text' style='height:23px;width:94%' id='tb1_price1' name='tb1_price1' size='5' onblur='checkPrice(1,1)' /></td>"
	+"<td class='dengj6'></td>"
	+"</tr>"
	+"<tr>"
	+"<td colspan='6' style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;申报价值：<input type='text' id='tb1_applyprice' name='tb1_applyprice' readonly='true' size='4' value='0.00' />&nbsp;<input type='hidden' id='tb1_hidtariff' name='tb1_hidtariff' value='0.00' />"
	+"<input type='hidden' name='tb1_hidgoodscount' id='tb1_hidgoodscount' value='1' /><input type='hidden' name='tb1_hidinsurancecost' id='tb1_hidinsurancecost' value='0.00' />"
	+"<input style='margin-top:2px; vertical-align:middle;' name='tb1_insurance' id='tb1_insurance' onclick='ApplyPrice_Click(1);' type='checkbox' value='1' /><label for='tb1_insurance'>需要购买保险（<a id='tb1_insurancecost'>0.00</a>）</label></td>"
	+"</tr>"
	+"<tr>"
	+"<td colspan='6' style='text-align:left;' id='tb1_deliveryaddress'></td>"
	+"</tr>"
	+"</table>";
   tabGoods.innerHTML = tableText;
   ordertablenumber = 1;
	//获取物品信息名称
   Ajax.call( 'member.php?act=getratetax', '', ratetax_callback , 'GET', 'TEXT', false, true );
   //获取收货人的详细信息
   Ajax.call( 'member.php?act=getdeliveryaddress', '', deliveryaddress_callback , 'GET', 'TEXT', false, true );
   if(get_value==0)
   {
	   //document.forms['theForm'].elements['boxNumber'].disabled = (get_value == 0);
   }
   //document.forms['theForm'].elements['boxNumber'].disabled = (get_value==0);
}











/*------------------详细物品信息----------------------*/
//添加一个详细商品信息行
//要确定行的唯一性（提示：你可以使用你的主键）
	//添加行的方法
 function addTr(value)
 {
	//获得表格对象
	add_tr_tbvalue = value;
	var testTab = 'testTab' + value;
	var tb=document.getElementById(testTab);
	var index = tb.rows.length;
	var indexValue = index-3;
	var tb_hidgoodscount = 'tb'+value+'_hidgoodscount';
	//根据ID获取第一列的值
	var id = parseInt(tb.rows[indexValue].cells[0].innerHTML)+1;
	idvalue = id;
	document.getElementById(tb_hidgoodscount).value = id;
	//添加一行
	var newTr = tb.insertRow(index-2);//在最下的位置

	//给这个行设置id属性，以便于管理（删除）
	newTr.id=testTab+'_tr'+id;
	//设置对齐方式（只是告诉你，可以以这种方式来设置任何它有的属性）
	newTr.align='center';
	//添加6列
	var newTd0 = newTr.insertCell(0);
	var newTd1 = newTr.insertCell(1);
	var newTd2 = newTr.insertCell(2);
	var newTd3 = newTr.insertCell(3);
	var newTd4 = newTr.insertCell(4);
	var newTd5 = newTr.insertCell(5);
	//设置列内容和属性
	newTd0.innerHTML=id; //让你看到删除的是指定的行
	newTd1.innerHTML= "<select id='tab"+value+"_ratename"+id+"' style='width:98%' name='tab"+value+"_ratename"+id+"' onchange='select_ratetax_name(this.options[this.options.selectedIndex].value,"+value+")'></select>";
	newTd2.innerHTML= "<input type='text' style='height:23px;width:96%' id='tab"+value+"_goodsname"+id+"' name='tab"+value+"_goodsname"+id+"' size='12' />";
	newTd3.innerHTML= "<input type='text' style='height:23px;width:96%' id='tb"+value+"_num"+id+"' name='tb"+value+"_num"+id+"' size='2' onblur='checkNum("+value+","+id+");' />";
	newTd4.innerHTML= "<input type='text' style='height:23px;width:94%' id='tb"+value+"_price"+id+"' name='tb"+value+"_price"+id+"' size='2' onblur='checkPrice("+value+","+id+")' />";
	newTd5.innerHTML= "<img src='themes/default/images/submit2.png' style='width:19px; height:20px;' class='dengj6' onclick=\"moveTr('"+id+"','"+value+"');\"/>";
	Ajax.call( 'member.php?act=getratetax', '', ratetax_callback , 'GET', 'TEXT', false, true );
	return newTr;
 }
 //移除行的方法
 //移除商品时 关税要再计算一遍
 function moveTr(id,value)
 {
  table_numprice_value = value;
  var tbId='testTab'+value;
  //获得表格对象
  var tb=document.getElementById('testTab'+value);
  //根据id获得将要删除行的对象
  var tr=document.getElementById(tbId+'_tr'+id);
  //取出行的索引，设置删除行的索引
  tb.deleteRow(tr.rowIndex);

	var tb_applyprice = 'tb'+value+'_applyprice';
	var tb_hidtariff = 'tb' + value + '_hidtariff';
	var traffprice = document.getElementById("tariff_price"); //获取关税
	var vauleservice = document.getElementById('value_services').innerHTML; //获得服务费
	var package_order_price = document.getElementById('package_order').innerHTML;//运单费用
	var insurance_cost_price = document.getElementById('insurance_cost').innerHTML;//保险费用
	var warehouseing_price = document.getElementById('warehouseing').innerHTML;//仓储费
	var operatorcost_price = document.getElementById('operatorcost').innerHTML;//操作费
	var total_price = document.getElementById('total_price');
	var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
	var currency_val = document.getElementById('currency_val').innerHTML;//积分转换的金额
	var tb=document.getElementById(tbId);
	var index = tb.rows.length;
	var indexValue = index-3;
	//alert(indexValue);
	//根据ID获取第一列的值
	totalnum = 0.00;
	//获得所有的申报价格
	var totalapplyprice = 0.00;
	var tariff_price = 0.00;
	for(i=1;i<indexValue;i++)
	{
		var num = tb.rows[(i+1)].cells[3].childNodes[0].value;
		var price = tb.rows[(i+1)].cells[4].childNodes[0].value;
		var selectvalue = tb.rows[(i+1)].cells[1].childNodes[0].value;
		if(selectvalue!=0)
		{
			//Ajax.call('member.php?act=getratetax_rate', 'rate_id=' + selectvalue, ratetax_table_callback , 'GET', 'TEXT', false, true );
            rate_tax = window.rate_data[selectvalue].rate_tax;
            //关税
			//每种商品的类型对应的关税值
			tariff_price = roundNumber(accAdd((num * price * rate_tax),tariff_price),2);
		}
		totalnum = roundNumber(accAdd((num * price),totalnum),2);
	}
	//获得每个运单对应的申报价值
	document.getElementById(tb_applyprice).value = totalnum;
	//获得每个运单对应的关税
	document.getElementById(tb_hidtariff).value = tariff_price;
	//计算所有拆箱后所对应的关税
	var alltariff_price = 0.00;
	for(j=0;j<ordertablenumber;j++)
	{
		var alltb_hidtariff = 'tb' + (j+1) + '_hidtariff';
		alltariff_price = roundNumber(accAdd(alltariff_price,document.getElementById(alltb_hidtariff).value),2);
	}
	//获得关税
	traffprice.innerHTML = alltariff_price;
	//获得每个运单所对应的关税(隐藏域)
	document.getElementById('pck_tariffcost').value = alltariff_price;
	//计算总费用
	totalprice = parseFloat(package_order_price)+parseFloat(alltariff_price)+parseFloat(insurance_cost_price)+parseFloat(warehouseing_price)+parseFloat(operatorcost_price)+parseFloat(vauleservice);
	//获得总费用
	total_price.innerHTML = roundNumber(totalprice,2);
	//计算申报价值的总费用
	for(var td = 1;td <= tablevalue;td++)
	{
		var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
		totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
	}
	//计算通过相关汇率获得的总费用
	var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	//获得需要支付的费用
	pay_moneny.innerHTML = roundNumber(accSub(exchange_totalprice,currency_val),2);

	document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
	console.log("pck_totalcost:", roundNumber(totalprice,2));
	// var shippingnumvalue = document.getElementById('shipping').value;
	// if(shippingnumvalue!=0)
    // {
	// 	Ajax.call('member.php?act=getshippinginsurancecost', 'ShippingId=' + shippingnumvalue, shippinginsurancecost_callback , 'GET', 'TEXT', false, true );
    // }
 }





 
 //修改商品价格时
 function checkPrice(tbvalue,trvalue)
 {
	table_numprice_value = tbvalue;
	var tb_applyprice = 'tb'+tbvalue+'_applyprice';
	var tb_hidtariff = 'tb' + tbvalue + '_hidtariff';
	var traffprice = document.getElementById("tariff_price"); //获取关税
	var vauleservice = document.getElementById('value_services').innerHTML; //获得服务费
	var package_order_price = document.getElementById('package_order').innerHTML;//运单费用
	var insurance_cost_price = document.getElementById('insurance_cost').innerHTML;//保险费用
	var warehouseing_price = document.getElementById('warehouseing').innerHTML;//仓储费
	var operatorcost_price = document.getElementById('operatorcost').innerHTML;//操作费
	var total_price = document.getElementById('total_price');//总价格
	var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
	var currency_val = document.getElementById('currency_val').innerHTML;//积分转换的金额
	var testTab = 'testTab' + tbvalue;
	var tb=document.getElementById(testTab);
	var index = tb.rows.length;
	var indexValue = index-3;
	//根据ID获取第一列的值
	totalnum = 0.00;
	//获得关税
	var tariff_price = 0.00;
	for(i=1;i<indexValue;i++)
	{
		var num = tb.rows[(i+1)].cells[3].childNodes[0].value;
		var price = tb.rows[(i+1)].cells[4].childNodes[0].value;
		var selectvalue = tb.rows[(i+1)].cells[1].childNodes[0].value;
		if(selectvalue!=0)
		{
			Ajax.call('member.php?act=getratetax_rate', 'rate_id=' + selectvalue, ratetax_table_callback , 'GET', 'TEXT', false, true );
			tariff_price = roundNumber(accAdd((num * price * rate_tax),tariff_price),2);
		}
		if(isNaN(price))
		{
			alert('请输入数字！');
			tb.rows[(i+1)].cells[4].childNodes[0].value = '';
			return false;
		}
		totalnum = roundNumber(accAdd((num * price),totalnum),2);
	}
	//获得对应运单的申报价值
	document.getElementById(tb_applyprice).value = totalnum;
	//获得对应运单的关税(隐藏域的值)
	document.getElementById(tb_hidtariff).value = tariff_price;
	//计算所有运单关税的总费用
	var alltariff_price = 0.00;
	for(j=0;j<ordertablenumber;j++)
	{
		var alltb_hidtariff = 'tb' + (j+1) + '_hidtariff';
		alltariff_price = roundNumber(accAdd(alltariff_price,document.getElementById(alltb_hidtariff).value),2);
	}
	//获得该关税的总费用
	traffprice.innerHTML = alltariff_price;
	//获得该关税的总费用(隐藏域的值)
	document.getElementById('pck_tariffcost').value = alltariff_price;
	//计算总费用
	totalprice = parseFloat(package_order_price)+parseFloat(alltariff_price)+parseFloat(insurance_cost_price)+parseFloat(warehouseing_price)+parseFloat(operatorcost_price)+parseFloat(vauleservice);
	//获得总费用
	total_price.innerHTML = roundNumber(totalprice,2);
	//获得所有的申报价格
	var totalapplyprice = 0.00;
	for(var td = 1;td <= tablevalue;td++)
	{
		var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
		totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
	}
	//计算通过相关汇率得到的总费用的值
	var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	//获得需要支付的费用
	pay_moneny.innerHTML = roundNumber(accSub(exchange_totalprice,currency_val),2);
	//获得总费用(总费用隐藏域)
	document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
	console.log("pck_totalcost:", roundNumber(totalprice,2));
	var shippingnumvalue = document.getElementById('shipping').value;
	if(shippingnumvalue!=0)
	{
		Ajax.call('member.php?act=getshippinginsurancecost', 'ShippingId=' + shippingnumvalue, shippinginsurancecost_callback , 'GET', 'TEXT', false, true );
	}
 }
 //根据选择的税率表的物品计算出所对应的关税
 //修改商品类别时计算关税
function select_ratetax_name(value,tabvalue)
{
	var alltariff_price = 0.00;
	var traffprice = document.getElementById("tariff_price"); //获取关税
	var vauleservice = document.getElementById('value_services').innerHTML; //获得服务费
	var package_order_price = document.getElementById('package_order').innerHTML;//运单费用
	var insurance_cost_price = document.getElementById('insurance_cost').innerHTML;//保险费用
	var warehouseing_price = document.getElementById('warehouseing').innerHTML;//仓储费
	var operatorcost_price = document.getElementById('operatorcost').innerHTML;//操作费
	var total_price = document.getElementById('total_price');//总价格
	var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
	var currency_val = document.getElementById('currency_val').innerHTML;//积分转换的金额
    var tb_hidtariff = 'tb' + tabvalue + '_hidtariff';
    var testTab = 'testTab' + tabvalue;
	var tb=document.getElementById(testTab);
	var index = tb.rows.length;
	var indexValue = index-3;
	var tariff_price = 0.00;
	for(i=1;i<indexValue;i++)
	{
		var num = tb.rows[(i+1)].cells[3].childNodes[0].value;
		var price = tb.rows[(i+1)].cells[4].childNodes[0].value;
		var selectvalue = tb.rows[(i+1)].cells[1].childNodes[0].value;
		if(selectvalue!=0)
		{
			Ajax.call('member.php?act=getratetax_rate', 'rate_id=' + selectvalue, ratetax_table_callback , 'GET', 'TEXT', false, true );
			tariff_price = roundNumber(accAdd((num * price * rate_tax),tariff_price),2);
		}
	}
	document.getElementById(tb_hidtariff).value = tariff_price;
	for(j=0;j<ordertablenumber;j++)
	{
		var alltb_hidtariff = 'tb' + (j+1) + '_hidtariff';
	    alltariff_price = roundNumber(accAdd(alltariff_price,document.getElementById(alltb_hidtariff).value),2);
	}
	traffprice.innerHTML = alltariff_price;
	document.getElementById('pck_tariffcost').value = alltariff_price;
	//计算总费用
	totalprice = parseFloat(package_order_price)+parseFloat(alltariff_price)+parseFloat(insurance_cost_price)+parseFloat(warehouseing_price)+parseFloat(operatorcost_price)+parseFloat(vauleservice);
	//获得总费用
	total_price.innerHTML = roundNumber(totalprice,2);
	//获得所有的申报价格
	var totalapplyprice = 0.00;
	for(var td = 1;td <= tablevalue;td++)
	{
		var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
		totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
	}
	//计算通过相关汇率获得的总费用的值
	var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	//获得需要支付的费用
	pay_moneny.innerHTML = roundNumber(accSub(exchange_totalprice,currency_val),2);
	//获得总费用(总费用隐藏域)
	document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
	console.log("pck_totalcost:", roundNumber(totalprice,2));
}

//选择线路 和 包裹  来判定
function select_shipping(value)
{
	//alert(value);
	shippingvalue = value;
	if(value > 0)
    {
        if(ischeckpackage > 0)
        {
            gObj("confirmpayment").style.display =  (ischeckpackage > 0) ? "" : "none";
        }
	    Ajax.call('member.php?act=getshippingorderprice', 'ShippingId=' + value, shippingorderprice_callback , 'GET', 'TEXT', false, true );
	    Ajax.call('member.php?act=getshippinginsurancecost', 'ShippingId=' + value, selectshippinginsurancecost_callback , 'GET', 'TEXT', false, true );
	}
	else
	{
		gObj("confirmpayment").style.display = "none";
	}
}
function select_shipment() {
    var shipment_id = $('.shipment_id:checked').val();
    if(shipment_id > 0)
    {
        if(ischeckpackage > 0)
        {
            gObj("confirmpayment").style.display =  (ischeckpackage > 0) ? "" : "none";
        }

    }
    else
    {
        gObj("confirmpayment").style.display = "none";
    }
}

//获取每个物品所对应的税率
function ratetax_table_callback(result)
{
	rate_tax = result;
}
//选择线路时重新计算价格
function shippingorderprice_callback(result)
{
	var orderPrice = 0.00;
	var weightSub = 0.00;
	var weightDiv = 0.00;
	var weightCeil = 0.00;
    var priceMul = 0.00;
    var slpprice = 0.00;
    var discount_orderprice = 0.00;//运单折扣后的费用
	var obj = eval('(' + result + ')');
	var packageorder = document.getElementById('package_order');//获取包裹费用
	var warehouseing = document.getElementById("warehouseing").innerHTML; //获得仓储费
	var vauleservice = document.getElementById('value_services').innerHTML; //获得服务费
	var tariff_price = document.getElementById('tariff_price').innerHTML;//关税
	var insurance_cost_price = document.getElementById('insurance_cost').innerHTML;//保险费用
	var operatorcost_price = document.getElementById('operatorcost').innerHTML;//操作费
	var total_price = document.getElementById('total_price');
	var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
	var currency_val = document.getElementById('currency_val').innerHTML;//积分转换的金额
	var order_discount = document.getElementById('order_discount').value;//获取运单的折扣

	if(obj[0].IsSupPice!=0)//支持阶梯价格
	{
		if(parseFloat(obj[0].Weight) <=0) //首重重量
		{
			obj[0].Weight = 0.1;
		}
		//packageweights：包裹实际重量（所有包裹的重量）
		if(parseFloat(obj[0].Weight) >= parseFloat(packageweights))
		{
			orderPrice = roundNumber(obj[0].Price,2);//首重价格
			discount_orderprice = roundNumber(accMul(orderPrice,order_discount),2);
		}
		else
		{
			 weightSub = accSub(packageweights,obj[0].Weight);
		     for(var index=0;index<obj.length;index++)
		     {
		    	 if(parseFloat(obj[index].slp_minweight) < weightSub && parseFloat(obj[index].slp_maxweight) >= weightSub)
		    	 {
		    		 slpprice = accAdd(obj[index].slp_price,obj[index].slp_serviceprice)
		    	 }
		     }
		     orderPrice = roundNumber(accAdd(slpprice,obj[0].Weight),2);
		     discount_orderprice = roundNumber(accMul(orderPrice,order_discount),2);
		}
		//获取体积重比/体积重超重费用
//		var heavyvolume=parseFloat(obj[0].HeavyVolume);
//		var volumeprice=parseFloat(obj[0].VolumePrice);
//		var volume=((parseFloat(waybill_length)*parseFloat(waybill_width)*parseFloat(waybill_height))/heavyvolume);
//
//		if(volume >= obj[0].Weight)
//	    {
//		   var addweight=Math.ceil(volume - obj[0].Weight);
//		   for(var lindex = 0;lindex < obj.length;lindex++){
//			   if(obj[lindex].slp_minweight < addweight && obj[lindex].slp_maxweight >= addweight)
//			   {
//				    volumeprice = parseFloat(obj[lindex].slp_price) + parseFloat(obj[lindex].slp_serviceprice) + parseFloat(obj[lindex].Price);
//			   }
//			}
//	    }
//		else
//		{
//		    volumeprice = parseInt(obj[0].Price);
//		}
	}
	else
	{
		if(obj[0].Weight > packageweights)
		{
			orderPrice = roundNumber(obj[0].Price,2);
			discount_orderprice = roundNumber(accMul(orderPrice,order_discount),2);
		}
		else
		{
			weightSub = accSub(packageweights,obj[0].Weight);
			weightDiv = accDiv(weightSub,obj[0].AddWeight);
			weightCeil = Math.ceil(weightDiv);
			priceMul = accMul(weightCeil,obj[0].AddPrice);
			orderPrice = roundNumber(accAdd(obj[0].Price,priceMul),2);
			discount_orderprice = roundNumber(accMul(orderPrice,order_discount),2);
		}
	    //获取体积重比/体积重超重费用
//		var heavyvolume=parseFloat(obj[0].HeavyVolume);
//		var volumeprice=parseFloat(obj[0].VolumePrice);
//		var volume=((parseFloat(waybill_length)*parseFloat(waybill_width)*parseFloat(waybill_height))/heavyvolume);
//		if(volume >= obj[0].Weight)
//	    {
//		    volumeprice = Math.ceil(volume-obj[0].Weight) * volumeprice + parseFloat(obj[0].Price);
//	    }
//		else
//		{
//		    volumeprice = parseFloat(obj[0].Price);
//		}
	}
	//获得该运单运费折扣后的费用
	packageorder.innerHTML = discount_orderprice;
	//获得该运单实际支付的费用(用于隐藏域)
	document.getElementById('pck_waybillcost').value = orderPrice;
	//获得该运单折扣后所支付的费用(用于隐藏域)
	document.getElementById('discount_waybillcost').value = discount_orderprice;
	//计算总费用
	totalprice = parseFloat(warehouseing)+parseFloat(tariff_price)+parseFloat(insurance_cost_price)+parseFloat(vauleservice)+parseFloat(operatorcost_price)+parseFloat(discount_orderprice);
	//获得总费用
	total_price.innerHTML = roundNumber(totalprice,2);
	//获得所有的申报价格
	var totalapplyprice = 0.00;
	for(var td = 1;td <= tablevalue;td++)
	{
		var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
		totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
	}
	//计算通过相关汇率转换得到的费用
	var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	//获得需要支付的费用
	pay_moneny.innerHTML = roundNumber(accSub(exchange_totalprice,currency_val),2);
	//获得总费用(总费用隐藏域)
	document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
	console.log("pck_totalcost:", roundNumber(totalprice,2));
}
//改变申报价值来改变每个表格所对应的需要支付保险费用
function shippinginsurancecost_callback(result)
{
	var tb_insurance = 'tb' + table_numprice_value + '_insurancecost';//保险额度
	var obj = eval('(' + result + ')');
	var applyprice = '';
	var insurancecost = document.getElementById(tb_insurance);
	for(var index = 0;index < obj.length; index++)
	{
		if(parseFloat(obj[index].sdv_minprice) < parseFloat(totalnum) && parseFloat(obj[index].sdv_maxprice) >= parseFloat(totalnum))
		{
			if(obj[index].sdv_ispercent==0)
			{
				applyprice = roundNumber(obj[index].sdv_price,2);
			}
			else
			{
				applyprice = obj[index].sdv_price + '' + '%' + '申报价值';
			}
		}
	}
	if(applyprice!='')
	{
	    insurancecost.innerHTML = applyprice;
	}
	var costofinsurance = 0.00;
	var insurance_cost = document.getElementById('insurance_cost'); //获得保险费用
	var vauleservice = document.getElementById('value_services').innerHTML; //获得服务费
	var package_order_price = document.getElementById('package_order').innerHTML;//运单费用
	var tariff_price = document.getElementById('tariff_price').innerHTML;//关税
	var warehouseing_price = document.getElementById('warehouseing').innerHTML;//仓储费
	var operatorcost_price = document.getElementById('operatorcost').innerHTML;//操作费
	var total_price = document.getElementById('total_price');
	var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
	var currency_val = document.getElementById('currency_val').innerHTML;//积分转换的金额
	for(var tbinsurancevalue = 1; tbinsurancevalue <= tablevalue; tbinsurancevalue++)
	{
	   //定义隐藏的每个运单的保险费用
	   var tb_hidinsurancecost = 'tb' + tbinsurancevalue + '_hidinsurancecost';
	   var is_costinsurance = 'tb'+tbinsurancevalue+'_insurance';
	   var tb_insurance = 'tb' + tbinsurancevalue + '_insurancecost';
	   var tb_applyprice = 'tb' + tbinsurancevalue + '_applyprice';
	   var iscostinsurance = document.getElementById(is_costinsurance).checked;
	   var insurance = document.getElementById(tb_insurance).innerHTML;//保费
	   var applyprice = document.getElementById(tb_applyprice).value;
	   if(iscostinsurance == true)
	   {
		   if(insurance != '0.00')
		   {
			  if(/.*[\u4e00-\u9fa5]+.*$/.test(insurance))//有汉字
			  {
				  var insurancemul = accMul(applyprice,insurance.replace(/[^0-9]/ig,""));//替换掉所有非数字
				  var insurancediv = roundNumber(accDiv(insurancemul,100),2);
				  costofinsurance = roundNumber(accAdd(costofinsurance,insurancediv),2);
				  document.getElementById(tb_hidinsurancecost).value = roundNumber(insurancediv,2);
			  }
			  else
			  {
			      costofinsurance = accAdd(costofinsurance,insurance);
			      document.getElementById(tb_hidinsurancecost).value = roundNumber(insurance,2);
			  }
		   }
		}
	 }
	//获得保险费用
	insurance_cost.innerHTML = roundNumber(costofinsurance,2);
	//获得保险费用(用于隐藏域)
	document.getElementById("pck_insurancecost").value = roundNumber(costofinsurance,2);
	//计算总费用
	totalprice = parseFloat(package_order_price)+parseFloat(tariff_price)+parseFloat(vauleservice)+parseFloat(warehouseing_price)+parseFloat(operatorcost_price)+parseFloat(costofinsurance);
	//获得总费用
	total_price.innerHTML = roundNumber(totalprice,2);
	//获得所有的申报价格
	var totalapplyprice = 0.00;
	for(var td = 1;td <= tablevalue;td++)
	{
		var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
		totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
	}
	//计算通过相关汇率得到的总费用
	var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	//获得需要支付的费用
	pay_moneny.innerHTML = roundNumber(accSub(exchange_totalprice,currency_val),2);
	//获得总费用(总费用隐藏域)
	document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
	console.log("pck_totalcost:", roundNumber(totalprice,2));
}
//选择线路来改变每个表格所对应的需要支付保险费用
function selectshippinginsurancecost_callback(result)
{
	var obj = eval('(' + result + ')');
	for(var tbidvalue = 1; tbidvalue <= tablevalue; tbidvalue++)
	{
		var tb_insurance = 'tb' + tbidvalue + '_insurancecost';
		var tb_applycost = 'tb' + tbidvalue + '_applyprice';
		var applycost = document.getElementById(tb_applycost).value;
		var insurancecost = document.getElementById(tb_insurance);
		var applyprice = '';
		if(obj.length != 0)
		{
			for(var index = 0;index < obj.length; index++)
		    {
				if(parseFloat(obj[index].sdv_minprice) < parseFloat(applycost) && parseFloat(obj[index].sdv_maxprice) >= parseFloat(applycost))
				{
					if(obj[index].sdv_ispercent==0)
					{
						applyprice = roundNumber(obj[index].sdv_price,2);
					}
					else
					{
						applyprice = obj[index].sdv_price + '' + '%' + '申报价值';
					}
				}
		    }
			if(applyprice!='')
			{
			  insurancecost.innerHTML = applyprice;
			}
		}
		else
		{
			insurancecost.innerHTML = '0.00';
		}
	}
	var costofinsurance = 0.00;
	var insurance_cost = document.getElementById('insurance_cost'); //获得保险费用
	var vauleservice = document.getElementById('value_services').innerHTML; //获得服务费
	var package_order_price = document.getElementById('package_order').innerHTML;//运单费用
	var tariff_price = document.getElementById('tariff_price').innerHTML;//关税
	var warehouseing_price = document.getElementById('warehouseing').innerHTML;//仓储费
	var operatorcost_price = document.getElementById('operatorcost').innerHTML;//操作费
	var total_price = document.getElementById('total_price');
	var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
	var currency_val = document.getElementById('currency_val').innerHTML;//积分转换的金额
	for(var tbinsurancevalue = 1; tbinsurancevalue <= tablevalue; tbinsurancevalue++)
	{
	   //定义隐藏的每个运单的保险费用
	   var tb_hidinsurancecost = 'tb' + tbinsurancevalue + '_hidinsurancecost';
	   var is_costinsurance = 'tb'+tbinsurancevalue+'_insurance';
	   var tb_insurance = 'tb' + tbinsurancevalue + '_insurancecost';
	   var tb_applyprice = 'tb' + tbinsurancevalue + '_applyprice';
	   var iscostinsurance = document.getElementById(is_costinsurance).checked;
	   var insurance = document.getElementById(tb_insurance).innerHTML;
	   var applyprice = document.getElementById(tb_applyprice).value;
	   if(iscostinsurance == true)
	   {
		   if(insurance != '0.00')
		   {
			  if(/.*[\u4e00-\u9fa5]+.*$/.test(insurance))
			  {
				  var insurancemul = accMul(applyprice,insurance.replace(/[^0-9]/ig,""));
				  var insurancediv = roundNumber(accDiv(insurancemul,100),2);
				  costofinsurance = roundNumber(accAdd(costofinsurance,insurancediv),2);
				  document.getElementById(tb_hidinsurancecost).value = roundNumber(insurancediv,2);
			  }
			  else
			  {
			      costofinsurance = roundNumber(accAdd(costofinsurance,insurance),2);
			      document.getElementById(tb_hidinsurancecost).value = roundNumber(insurance,2);
			  }
		   }
		}
	 }
	//获得保险的费用
	insurance_cost.innerHTML = roundNumber(costofinsurance,2);
	//获得保险费用(用于隐藏域)
	document.getElementById("pck_insurancecost").value = roundNumber(costofinsurance,2);
	//计算总费用
	totalprice = parseFloat(package_order_price)+parseFloat(tariff_price)+parseFloat(vauleservice)+parseFloat(warehouseing_price)+parseFloat(operatorcost_price)+parseFloat(costofinsurance);
	//获得总费用
	total_price.innerHTML = roundNumber(totalprice,2);
	//获得所有的申报价格
	var totalapplyprice = 0.00;
	for(var td = 1;td <= tablevalue;td++)
	{
		var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
		totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
	}
	//计算通过相关汇率得到的总费用
	var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	//获得需要支付的费用
	pay_moneny.innerHTML = roundNumber(accSub(exchange_totalprice,currency_val),2);
	//获得总费用(总费用隐藏域)
	document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
	console.log("pck_totalcost:", roundNumber(totalprice,2));
}







