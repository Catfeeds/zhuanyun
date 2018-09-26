/**
 * 通过仓库来获取包裹的物品
 * @param value
 */
var text;
var weightunit = '';
var currencyname = '';
var tableText;
var divService;
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
var OperatorUpgrade;
var OperatorOutside;//操作费用
//定义页面加载的表单数量
var tablevalue;
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

$(function(){
	var pck_warehouseid = $('#pck_warehouseid').val();
	//获取当前用户的仓库
	select_warehouse(parseInt(pck_warehouseid));
})

function select_warehouse(value)
{
	tableText = "";
	tablevalue = 0;
	gObj("detail_goods_info").style.display =  (value != 0) ? "" : "none";
	gObj("upgradepackage").style.display =  (value != 0) ? "" : "none";
	gObj("outsidecost").style.display =  (value != 0) ? "" : "none";
	gObj("confirmpayment").style.display = "none";
	var tabGoods = document.getElementById("table_goods");
	if(value!=0)
    {
		idvalue = 0;
		tablevalue = 1;
		document.getElementById('tablecount').value = 1;
		
		ordertablenumber = 1;
		//动态添加选择该仓库下的增值服务
		Ajax.call( 'member.php?act=getservicename', 'pck_warehouseid=' + value, servicename_callback , 'GET', 'TEXT', false, true );
		//获得该仓库的物品重量单位
		Ajax.call( 'member.php?act=getpackcountbyweightunit', 'pck_warehouseid=' + value, weightunit_callback , 'GET', 'TEXT', false, true );
		//根据仓库ID获取对应的包裹信息
	    //Ajax.call( 'member.php?act=getpackcountbyhouse', 'pck_warehouseid=' + value, packagegoods_callback , 'GET', 'TEXT', false, true );
		//根据仓库ID获取对应的线路
	    Ajax.call( 'member.php?act=getshipping', 'pck_warehouseid=' + value, warehouseshipping_callback , 'GET', 'TEXT', false, true );
		//根据仓库ID获取升级包装的价格(加固散架、外箱缠绕膜)
	    Ajax.call( 'member.php?act=getupgradepack', 'pck_warehouseid=' + value, upgradepackage_callback , 'GET', 'TEXT', false, true );
		//获取物品信息名称
	    //Ajax.call( 'member.php?act=getratetax', '', ratetax_callback , 'GET', 'TEXT', false, true );
	    //获取收货人的详细信息
	    //Ajax.call( 'member.php?act=getdeliveryaddress', '', deliveryaddress_callback , 'GET', 'TEXT', false, true );
		//根据ID获取对应的仓库信息
	    Ajax.call( 'member_packagemanage.php?act=warehouse', 'houseid=' + value, warehouse_callback , 'GET', 'TEXT', true, true );
    }
}

/**
 * 仓库信息-回调函数
 * @param result
 */
function warehouse_callback(result)
{
	var obj = eval('(' + result + ')');
	if(result){
		var houseinfo="仓库地址："+ obj.warehouse.AreaName+" "+obj.warehouse.Province+" "+obj.warehouse.City+" "+obj.warehouse.Address;
		document.getElementById("houseinfo").innerHTML=houseinfo;
	}else{
		//获取数据失败
	}
}
//获取收货人的详细信息
function deliveryaddress_callback(result)
{
	var obj = eval('(' + result + ')');	
	for(var tbindex = 0;tbindex < tablevalue;tbindex++)
	{
		var delevery_address = '';
		var tb_delivery_address = 'tb'+(tbindex+1)+'_deliveryaddress';
		var delevery_address_name = 'tb' + (tbindex+1) + '_delivery_address';
		for(var index = 0;index < obj.length;index++)
		{
			delevery_address += "<input style='margin-top:1px 0px 0px 5px; vertical-align:middle;' type='radio' name='"
			+delevery_address_name+"' value='"+obj[index].da_id+"' id='da_"+obj[index].da_id+"' />"
			+"<label for='da_"+obj[index].da_id+"'></label>"
			+obj[index].delivery_address+"</br>";
		}
		var delevery_info = document.getElementById(tb_delivery_address);
		delevery_info.innerHTML = delevery_address;
	}
}
//获取物品信息名称
function ratetax_callback(result)
{
	var testRate = '';
	var rate_name = '';
	var obj = eval('(' + result + ')');	
	if(idvalue == 0)
	{
		for(var i = 0;i < tablevalue;i++)
		{
			testRate = 'tab'+''+(i+1)+'_ratename1';
			rate_name = document.getElementById(testRate);
			rate_name.options.add(new Option('请选择',0));
			for(var index = 0;index < obj.length;index++)
			{
				rate_name.options.add(new Option(obj[index].rate_name,obj[index].rate_id));
			}
		}
	 }
	 else
	 {
		testRate = 'tab'+''+add_tr_tbvalue+'_ratename'+idvalue;
		rate_name = document.getElementById(testRate);
		rate_name.options.add(new Option('请选择',0));
		for(var index = 0;index < obj.length;index++)
		{
			rate_name.options.add(new Option(obj[index].rate_name,obj[index].rate_id));
		}
	 }
}
//获取升级包装的价格(加固散架、外箱缠绕膜)
function upgradepackage_callback(result)
{
	upgradepack = '';
	oustside = '';
	var costdetail = '';
	upgradepackagecost = 0.00;
	outsidebranecost = 0.00;
	var obj = eval('(' + result + ')');
	var upgradepackage = document.getElementById("upgradepackage");
	var outsidecost = document.getElementById("outsidecost");
	var CostDetail = document.getElementById("costdetail");
	exchange_rate = obj[0].ExchageRate;
	document.getElementById('exchangerate').value = obj[0].ExchageRate;
	if(obj[0].IsDefault == "1")
	{
		upgradepack = "<a>单独的包装"+obj[0].Symbol+""+obj[0].UpPackage+""+obj[0].Name+"/个</a>";
		oustside = "<a>（"+obj[0].OutsideCost+""+obj[0].Name+"/箱）</a>";
	}
	else
	{
		Ajax.call( 'member.php?act=getcurrencyname', '', currencyname_callback , 'GET', 'TEXT', false, true );
		upgradepack = "<a>单独的包装"+obj[0].Symbol+""+obj[0].UpPackage+""+obj[0].Name+"/个（"+roundNumber((obj[0].UpPackage/obj[0].ExchageRate),2)+""+currencyname+"/个）</a>";
		oustside = "<a>（"+obj[0].Symbol+""+obj[0].OutsideCost+""+obj[0].Name+" = "+roundNumber((obj[0].OutsideCost/obj[0].ExchageRate),2)+""+currencyname+"/箱）</a>";
	}
	costdetail = "<li style='line-height:20px;'>包裹运费："+obj[0].Symbol+"<a id='package_order'>0.00</a>"+obj[0].Name+"，关税："+obj[0].Symbol+"<a id='tariff_price'>0.00</a>"+obj[0].Name+""
			   + "，保险费用："+obj[0].Symbol+"<a id='insurance_cost'>0.00</a>"+obj[0].Name+"，仓储费用："+obj[0].Symbol+"<a id='warehouseing'>0.00</a>"+obj[0].Name+"，操作费："+obj[0].Symbol+""
			   + "<a id='operatorcost'>0.00</a>"+obj[0].Name+"，增值服务费："+obj[0].Symbol+"<a id='value_services'>0.00</a>"+obj[0].Name+"</li>"
			   + "<li style='line-height:20px;'>总费用："+obj[0].Symbol+"<a id='total_price'>0.00</a>"+obj[0].Name+"</li>"
	warehousecost = obj[0].Warehousing;
	warehousefreeday = obj[0].WarehousingBM;
	upgradepackagecost = obj[0].UpPackage;
	outsidebranecost = obj[0].OutsideCost;
	upgradepackage.innerHTML = upgradepack;
	outsidecost.innerHTML = oustside;
	CostDetail.innerHTML = costdetail;
}
//获得默认货币的名称
function currencyname_callback(result)
{
	currencyname = result;
}
//获取可选择的增值服务
function servicename_callback(result)
{
	divService = '';
	var obj = eval('(' + result + ')');
	var servicename = document.getElementById("service_name");
	for(var index = 0;index < obj.length;index++)
	{
		// divService += "<input class='checkbox' type='checkbox' name='checkboxesprice[]' onclick='GetServicePrice();' title='"+obj[index].Price+"' value='"+obj[index].Id+"' />"+obj[index].ServiceName+"&nbsp;&nbsp;<span style='color:red'>"+obj[index].Description+"</span><br/>";
		divService += "<tr>";
		divService += "<td><input id='service"+index+"' class='checkbox' type='checkbox' name='checkboxesprice[]' onclick='GetServicePrice();' title='"
		+obj[index].Price+"' value='"+obj[index].Id+"' /> <label for='service"+index+"'>"
		+obj[index].ServiceName+"</label></td>";
		divService += "<td style='text-align:left;'><span style='color:red'>"+obj[index].Description+"</span></td>";
		divService+= "</tr>";
	}
	// servicename.innerHTML = divService;
	$('#service_name').html(divService);
}
function GetServicePrice()
{
	var y = document.getElementsByName("checkboxesprice[]");
	var valueservices = document.getElementById('value_services');
	var warehouseing = document.getElementById("warehouseing").innerHTML; //获得仓储费
	var package_order_price = document.getElementById('package_order').innerHTML;//运单费用
	var tariff_price = document.getElementById('tariff_price').innerHTML;//关税
	var insurance_cost_price = document.getElementById('insurance_cost').innerHTML;//保险费用
	var operatorcost_price = document.getElementById('operatorcost').innerHTML;//操作费
	var total_price = document.getElementById('total_price');
	var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
	var currency_val = document.getElementById('currency_val').innerHTML;//积分转换的金额
	var service_price = 0.00;
	//获得所有的申报价格
	var totalapplyprice = 0.00;
	for(var i = 0;i < y.length;i++)
    {
		if(y[i].checked)
		{
			service_price = roundNumber(accAdd(service_price,y[i].title),2);
		}
    }
	if(service_price == 0)
	{
	  valueservices.innerHTML = '0.00';
	}
	else
	{	
	  valueservices.innerHTML = service_price;
	}
	//增值服务费用
	document.getElementById('pck_valueservicecost').value = roundNumber(service_price,2);
	//所有费用之和
	totalprice = parseFloat(package_order_price)+parseFloat(tariff_price)+parseFloat(insurance_cost_price)+parseFloat(warehouseing)+parseFloat(operatorcost_price)+parseFloat(service_price);
	//总费用
	total_price.innerHTML = roundNumber(totalprice,2);
	//获得申报价值的总和
	for(var td = 1;td <= tablevalue;td++)
	{
		var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
		//申报价值
		totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
	}
	//通过相关的汇率转换得到的总费用
	var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	//通过重量的计算初步得到的需要支付的费用
	pay_moneny.innerHTML = roundNumber(accSub(exchange_totalprice,currency_val),2);
	//把总费用辅助给隐藏域
	document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
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
function packagegoods_callback(result)
{
	text='';
	var obj = eval('(' + result + ')');
	var packagegood = document.getElementById("warehouse_goods");
	for(var index = 0;index < obj.length;index++)
	{
		text += "<li style='line-height:20px;'><input style='margin-top:1px; vertical-align:middle;' name='checkboxes[]' alt='"+roundNumber(obj[index].pck_weight,2)+"' title='"+diffDays(obj[index].pck_intime,getNow())+"' onclick='CheckGoods();' type='checkbox' value='"+obj[index].pck_expressnumber+"'>"
		        +(index+1)+":&nbsp;&nbsp;单号-"+obj[index].pck_expressnumber+"&nbsp;&nbsp;重量-<a style='color:red;'>"
		        +roundNumber(obj[index].pck_weight,2)+""+weightunit+"</a>&nbsp;&nbsp;到货"+diffDays(obj[index].pck_intime,getNow())+"天</li>";
		Ajax.call( 'member.php?act=getgoods', 'pck_id=' + obj[index].pck_id, goods_callback , 'GET', 'TEXT', false, true );
	}
	packagegood.innerHTML = text;
}

function goods_callback(result)
{
	var obj = eval('(' + result + ')');
	var packagegood = document.getElementById("warehouse_goods");
	for(var index = 0;index < obj.length;index++)
	{
		text += "<li style='line-height:20px;margin-left:20px;'><strong>物品"+(index+1)+"&nbsp;:&nbsp;"+obj[index].pckg_name+"&nbsp;&nbsp;数量：&nbsp;"
		        +obj[index].pckg_amount+"&nbsp;×&nbsp;单价：&nbsp;"+roundNumber(obj[index].pckg_unitprice,2)+"&nbsp;=&nbsp;总价：&nbsp;"+roundNumber(obj[index].pckg_totalprice,2)+"</strong></li>";
	}
}

function weightunit_callback(result)
{
	weightunit = result;
}

function roundNumber(number,decimals) {
	if(number== undefined)
	{
		number = 0;
	}
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


function diffDays(s1,s2)//计算相差的天数
{
	 s1 = s1.replace(/-/g, "/");
	 s2 = s2.replace(/-/g, "/");
	 s1 = new Date(s1);
	 s2 = new Date(s2);
	 
	 var days= s2.getTime() - s1.getTime();
	 var time = parseInt(days / (1000 * 60 * 60 * 24));
	 
	 return time;
}
function getNow()
{	
	 //得到当前时间
	 today = new Date(); 
	 var todayStr = today.getFullYear() + "-"; //获得年
	 //获得当前月份
	 if(today.getMonth()<10)
	 {
	   todayStr=todayStr+"0"+(parseInt(today.getMonth())+1);
	 }
	 else
	 {
	   todayStr=todayStr+(parseInt(today.getMonth())+1);
	 }
	 //获得当天
	 if(today.getDate()<10)
	 {
		todayStr=todayStr+"-0"+(parseInt(today.getDate()));
	 }
	 else
	 {
        todayStr=todayStr + "-" + (parseInt(today.getDate()));
	 }
     todayStr = todayStr +" "
	 
     //小时
	 if(today.getHours()<10)
	 {
	   todayStr=todayStr+today.getHours();
	 }
	 else
	 {
	   todayStr=todayStr+today.getHours();
	 }	
     //分
	 if(today.getMinutes()<10)
	 {
	   todayStr=todayStr+":0"+today.getMinutes();
	 }
	 else
	 {
	   todayStr=todayStr+":"+today.getMinutes();
	 }
	 //秒
	 if(today.getSeconds()<10)
	 {
	   todayStr=todayStr+":0"+today.getSeconds();
	 }
	 else
	 {
	   todayStr=todayStr+":"+today.getSeconds();
	 }
	 return todayStr;
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

//获得包裹的长宽高
function packagevolume_callback(result)
{
	var obj = eval('(' + result + ')');
	package_length = roundNumber(accAdd(package_length,obj[0].pck_sizelength),2);
	pcakge_width = roundNumber(accAdd(pcakge_width,obj[0].pck_sizewidth),2);
	pcakge_height = roundNumber(accAdd(pcakge_height,obj[0].pck_sizeheight),2);
}

function showboxNumber0(obj)
{
	tableText = '';
	idvalue = 0;
	var tabGoods = document.getElementById("table_goods");
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
	        +"<select id='tab1_ratename1' name='tab1_ratename1' onchange='select_ratetax_name(this.options[this.options.selectedIndex].value,1)'></select>"
	        +"</td>"
	        +"<td class='goodsname'><input type='text' name='tab1_goodsname1' size='12' /></td>"
	        +"<td class='goodsnumber'><input type='text' id='tb1_num1' name='tb1_num1' size=''5 onkeyup='checkNum(1,1);' /></td>"
	        +"<td class='goodsprice'><input type='text' id='tb1_price1' name='tb1_price1' size='5' onkeyup='checkPrice(1,1)' /></td>"
	        +"<td class='dengj6'></td>"
	        +"</tr>"
	        +"<tr>"
	        +"<td colspan='6' style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;申报价值：<input type='text' id='tb1_applyprice' name='tb1_applyprice' readonly='true' size='4' value='0.00' />&nbsp;<input type='hidden' id='tb1_hidtariff' name='tb1_hidtariff' value='0.00' />" 
	        +"<input type='hidden' name='tb1_hidgoodscount' id='tb1_hidgoodscount' value='1' /><input type='hidden' name='tb1_hidinsurancecost' id='tb1_hidinsurancecost' value='0.00' />" 
	        +"<input style='margin-top:2px; vertical-align:middle;' name='tb1_insurance' id='tb1_insurance' type='checkbox' onclick='ApplyPrice_Click(1);' value='1' />需要购买保险（<a id='tb1_insurancecost'>0.00</a>）</td>"						
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
	if(obj.checked)
    {
		document.all.BService.checked=false; 
		document.getElementById("boxNumber").disabled = "disabled";
    }
}

function showboxNumber1(obj)
{
	if(obj.checked)
	{                     
	   document.all.AService.checked=false; 
	}
	tableText = '';
	ordertablenumber = 0;
	var tabGoods = document.getElementById("table_goods");
	for(var i = 0;i<2;i++)
	{
	   idvalue = 0;
	   tablevalue = 2;
	   document.getElementById('tablecount').value = 2;
       tableText += "<table class='gridtable' id='testTab"+(i+1)+"'>"
            +"<tr>"
               +"<th colspan='6' style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;运单#"+(i+1)+"</th>"
            +"</tr>"
            +"<tr>"
            +"<th>序号</th><th>商品类别</th><th>商品名称</th><th>数量</th><th>单价</th><th><input class='buts'  type='button' name='tianjia' onclick='addTr("+(i+1)+")' /></th>"
            +"</tr>"
            +"<tr>"
            +"<td class='dengj'>1</td>"
            +"<td class='dengjs'>"
            +"<select id='tab"+(i+1)+"_ratename1' name='tab"+(i+1)+"_ratename1' onchange='select_ratetax_name(this.options[this.options.selectedIndex].value,"+(i+1)+")'></select>"
            +"</td>"
            +"<td class='goodsname'><input type='text' name='tab"+(i+1)+"_goodsname1' size='12' /></td>"
	        +"<td class='goodsnumber'><input type='text' id='tb"+(i+1)+"_num1' name='tb"+(i+1)+"_num1' size=''5 onkeyup='checkNum("+(i+1)+",1);' /></td>"
	        +"<td class='goodsprice'><input type='text' id='tb"+(i+1)+"_price1' name='tb"+(i+1)+"_price1' size='5' onkeyup='checkPrice("+(i+1)+",1)' /></td>"
            +"<td class='dengj6'></td>"
            +"</tr>"
            +"<tr>"
            +"<td colspan='6' style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;申报价值：<input type='text' id='tb"+(i+1)+"_applyprice' name='tb"+(i+1)+"_applyprice' readonly='true' size='4' value='0.00' />&nbsp;<input type='hidden' id='tb"+(i+1)+"_hidtariff' name='tb"+(i+1)+"_hidtariff' value='0.00' />" 
            +"<input type='hidden' name='tb"+(i+1)+"_hidgoodscount' id='tb"+(i+1)+"_hidgoodscount' value='1' /><input type='hidden' name='tb"+(i+1)+"_hidinsurancecost' id='tb"+(i+1)+"_hidinsurancecost' value='0.00' />"
            +"<input style='margin-top:2px; vertical-align:middle;' name='tb"+(i+1)+"_insurance' id='tb"+(i+1)+"_insurance' onclick='ApplyPrice_Click("+(i+1)+");' type='checkbox' value='1' />需要购买保险（<a id='tb"+(i+1)+"_insurancecost'>0.00</a>）</td>"						
            +"</tr>"
            +"<tr>"
            +"<td colspan='6' style='text-align:left;' id='tb"+(i+1)+"_deliveryaddress'></td>"
            +"</tr>"
            +"</table>";
       ordertablenumber++;
	}
	tabGoods.innerHTML = tableText;
	//获取物品信息名称
	Ajax.call( 'member.php?act=getratetax', '', ratetax_callback , 'GET', 'TEXT', false, true );
    //获取收货人的详细信息
    Ajax.call( 'member.php?act=getdeliveryaddress', '', deliveryaddress_callback , 'GET', 'TEXT', false, true );
	document.getElementById("boxNumber").disabled = "";
}

/*选择分箱数量*/
function SelectBoxNumber()
{
	tableText = '';
	idvalue = 0;
	ordertablenumber = 0;
	var tabGoods = document.getElementById("table_goods");
	var number = document.getElementById("boxNumber").value;
	var goodsNum = parseInt(number) + 2;
	document.getElementById('tablecount').value = goodsNum;
	for(var j = 0;j < goodsNum;j++)
	{
		   tablevalue = goodsNum;
	       tableText += "<table class='gridtable' id='testTab"+(j+1)+"'>"
           +"<tr>"
              +"<th colspan='6' style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;运单#"+(j+1)+"</th>"
           +"</tr>"
           +"<tr>"
           +"<th>序号</th><th>商品类别</th><th>商品名称</th><th>数量</th><th>单价</th><th><input class='buts'  type='button' name='tianjia' onclick='addTr("+(j+1)+")' /></th>"
           +"</tr>"
           +"<tr>"
           +"<td class='dengj'>1</td>"
           +"<td class='dengjs'>"
           +"<select id='tab"+(j+1)+"_ratename1' name='tab"+(j+1)+"_ratename1' onchange='select_ratetax_name(this.options[this.options.selectedIndex].value,"+(j+1)+")'></select>"
           +"</td>"
           +"<td class='goodsname'><input type='text' name='tab"+(j+1)+"_goodsname1' size='12' /></td>"
	        +"<td class='goodsnumber'><input type='text' id='tb"+(j+1)+"_num1' name='tb"+(j+1)+"_num1' size=''5 onkeyup='checkNum("+(j+1)+",1);' /></td>"
	        +"<td class='goodsprice'><input type='text' id='tb"+(j+1)+"_price1' name='tb"+(j+1)+"_price1' size='5' onkeyup='checkPrice("+(j+1)+",1)' /></td>"
           +"<td class='dengj6'></td>"
           +"</tr>"
           +"<tr>"
           +"<td colspan='6' style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;申报价值：<input type='text' id='tb"+(j+1)+"_applyprice' name='tb"+(j+1)+"_applyprice' readonly='true' size='4' value='0.00' />&nbsp;<input type='hidden' id='tb"+(j+1)+"_hidtariff' id='tb"+(j+1)+"_hidtariff' value='0.00' />" 
           +"<input type='hidden' name='tb"+(j+1)+"_hidgoodscount' id='tb"+(j+1)+"_hidgoodscount' value='1' /><input type='hidden' name='tb"+(j+1)+"_hidinsurancecost' id='tb"+(j+1)+"_hidinsurancecost' value='0.00' />"
           +"<input style='margin-top:2px; vertical-align:middle;' name='tb"+(j+1)+"_insurance' id='tb"+(j+1)+"_insurance' onclick='ApplyPrice_Click("+(j+1)+");' type='checkbox' value='1' />需要购买保险（<a id='tb"+(j+1)+"_insurancecost'>0.00</a>）</td>"						
           +"</tr>"
           +"<tr>"
           +"<td colspan='6' style='text-align:left;' id='tb"+(j+1)+"_deliveryaddress'></td>"
           +"</tr>"
           +"</table>";
	       ordertablenumber++;
	}
	tabGoods.innerHTML = tableText;
	//获取物品信息名称
	Ajax.call( 'member.php?act=getratetax', '', ratetax_callback , 'GET', 'TEXT', false, true );
    //获取收货人的详细信息
    Ajax.call( 'member.php?act=getdeliveryaddress', '', deliveryaddress_callback , 'GET', 'TEXT', false, true );
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
  newTd1.innerHTML= "<select style='width:98%;height:100%;' id='tab"+value+"_ratename"+id+"' name='tab"+value+"_ratename"+id+"' onchange='select_ratetax_name(this.options[this.options.selectedIndex].value,"+value+")'></select>";
  newTd2.innerHTML= "<input type='text' style='width:98%;height:100%;' name='tab"+value+"_goodsname"+id+"' size='12' />";
  newTd3.innerHTML= "<input type='text' style='width:98%;height:100%;' id='tb"+value+"_num"+id+"' name='tb"+value+"_num"+id+"' size='2' onkeyup='checkNum("+value+","+id+");' />";
  newTd4.innerHTML= "<input type='text' style='width:98%;height:100%;' id='tb"+value+"_price"+id+"' name='tb"+value+"_price"+id+"' size='2' onkeyup='checkPrice("+value+","+id+")' />";
  newTd5.innerHTML= "<img src='themes/default/images/submit2.png' style='width:19px; height:20px;' class='dengj6' onclick=\"moveTr('"+id+"','"+value+"');\"/>";
  Ajax.call( 'member.php?act=getratetax', '', ratetax_callback , 'GET', 'TEXT', false, true );
 }
 //移除行的方法
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
			Ajax.call('member.php?act=getratetax_rate', 'rate_id=' + selectvalue, ratetax_table_callback , 'GET', 'TEXT', false, true );
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
	
	var shippingnumvalue = document.getElementById('shipping').value;
	if(shippingnumvalue!=0)
    {
		Ajax.call('member.php?act=getshippinginsurancecost', 'ShippingId=' + shippingnumvalue, shippinginsurancecost_callback , 'GET', 'TEXT', false, true );
    }
 }
 
 //改变支付方式样式
 function changeClass()
 {
	 var pointsClass = document.getElementById('points').className;
	 gObj("payoptions").style.display =  (pointsClass != 'pay_toggle_open') ? "" : "none";
	 if(pointsClass == 'pay_toggle_open')
	 {
		 document.getElementById('points').className = 'pay_toggle';
	 }
	 else
	 {
		 document.getElementById('points').className = 'pay_toggle_open';
	 }
 }
 
//选择升级包裹
function SelectUpgradePackage()
{
	OperatorUpgrade = 0.00
	UpgradePackageValue = document.getElementById('UpgradePackage').value;
	if(OustsideBraneValue == false)
	{
		OperatorUpgrade = roundNumber((upgradepackagecost * UpgradePackageValue),2);
	}
	else
	{
		OperatorUpgrade = accAdd(roundNumber(outsidebranecost,2),roundNumber((upgradepackagecost * UpgradePackageValue),2));
	}
	document.getElementById('operatorcost').innerHTML = OperatorUpgrade; //获得操作费用
	document.getElementById('pck_operatorcost').value = roundNumber(OperatorUpgrade,2);
	var vauleservice = document.getElementById('value_services').innerHTML; //获得服务费
	var package_order_price = document.getElementById('package_order').innerHTML;//运单费用
	var tariff_price = document.getElementById('tariff_price').innerHTML;//关税
	var insurance_cost_price = document.getElementById('insurance_cost').innerHTML;//保险费用
	var warehouseing_price = document.getElementById('warehouseing').innerHTML;//仓储费
	var total_price = document.getElementById('total_price');//总费用
	var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
	var currency_val = document.getElementById('currency_val').innerHTML;//积分转换的金额
	//计算总费用
	totalprice = parseFloat(package_order_price)+parseFloat(tariff_price)+parseFloat(insurance_cost_price)+parseFloat(warehouseing_price)+parseFloat(vauleservice)+parseFloat(OperatorUpgrade);
	//获得总费用
	total_price.innerHTML = roundNumber(totalprice,2);
	//获得所有的申报价格
	var totalapplyprice = 0.00;
	for(var td = 1;td <= tablevalue;td++)
	{
		var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
		totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
	}
	//计算通过相关汇率获得的总费用
	var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	//获得需要支付的金额
	pay_moneny.innerHTML = roundNumber(accSub(exchange_totalprice,currency_val),2);
	//获得总费用(总费用隐藏域)
	document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
}

function OustSide_Click()
{
	OustsideBraneValue = document.getElementById('oustsidebrane').checked;
	if(OustsideBraneValue == true)
	{
		if(UpgradePackageValue == 0)
		{
			OperatorOutside = roundNumber(outsidebranecost,2);
		}
		else
		{
			OperatorOutside = accAdd(OperatorUpgrade,roundNumber(outsidebranecost,2));
		}
	}
	else
	{
		OperatorOutside = OperatorUpgrade;
	}
	document.getElementById('operatorcost').innerHTML = OperatorOutside; //获得操作费用
	document.getElementById('pck_operatorcost').value = roundNumber(OperatorOutside,2);
	var vauleservice = document.getElementById('value_services').innerHTML; //获得服务费
	var package_order_price = document.getElementById('package_order').innerHTML;//运单费用
	var tariff_price = document.getElementById('tariff_price').innerHTML;//关税
	var insurance_cost_price = document.getElementById('insurance_cost').innerHTML;//保险费用
	var warehouseing_price = document.getElementById('warehouseing').innerHTML;//仓储费
	var total_price = document.getElementById('total_price');//总费用
	var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
	var currency_val = document.getElementById('currency_val').innerHTML;//积分转换的金额
	//计算总费用
	totalprice = parseFloat(package_order_price)+parseFloat(tariff_price)+parseFloat(insurance_cost_price)+parseFloat(warehouseing_price)+parseFloat(vauleservice)+parseFloat(OperatorUpgrade);
	//获得总费用
	total_price.innerHTML = roundNumber(totalprice,2);
	//计算所有的申报价格
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
}
 
 
 //物品的数量和价格的控制
 var rate_tax = 0.00;
 function checkNum(tbvalue,trvalue)
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
	var tariff_price = 0.00;
	for(i=1;i<indexValue;i++)
	{
		var num = tb.rows[(i+1)].cells[3].childNodes[0].value;
		if(isNaN(num))
		{
			alert('请输入数字！');
			tb.rows[(i+1)].cells[3].childNodes[0].value = '';
			return false;
		}
		var price = tb.rows[(i+1)].cells[4].childNodes[0].value;
		var selectvalue = tb.rows[(i+1)].cells[1].childNodes[0].value;
		if(selectvalue!=0)
		{
			Ajax.call( 'member.php?act=getratetax_rate', 'rate_id=' + selectvalue, ratetax_table_callback , 'GET', 'TEXT', false, true );
			tariff_price = roundNumber(accAdd((num * price * rate_tax),tariff_price),2);
		}
		totalnum = roundNumber(accAdd((num * price),totalnum),2);
	}
	//获得相应运单对应的申报价值
	document.getElementById(tb_applyprice).value = totalnum;
	//获得相应运单对应的关税(隐藏域的值)
	document.getElementById(tb_hidtariff).value = tariff_price;
	//计算出所有的关税值
	var alltariff_price = 0.00;
	for(j=0;j<ordertablenumber;j++)
	{
		var alltb_hidtariff = 'tb' + (j+1) + '_hidtariff';
		alltariff_price = roundNumber(accAdd(alltariff_price,document.getElementById(alltb_hidtariff).value),2);
	}
	//获得关税
	traffprice.innerHTML = alltariff_price;
	//获得关税(隐藏域)
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
	//计算通过相关汇率得到的总费用
	var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	//获得需要支付的费用
	pay_moneny.innerHTML = roundNumber(accSub(exchange_totalprice,currency_val),2);
	//获得总费用(总费用隐藏域)
	document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
	
	var shippingnumvalue = document.getElementById('shipping').value;
	if(shippingnumvalue!=0)
    {
		Ajax.call('member.php?act=getshippinginsurancecost', 'ShippingId=' + shippingnumvalue, shippinginsurancecost_callback , 'GET', 'TEXT', false, true );
    }
 }
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
		
		var shippingnumvalue = document.getElementById('shipping').value;
		if(shippingnumvalue!=0)
	    {
			Ajax.call('member.php?act=getshippinginsurancecost', 'ShippingId=' + shippingnumvalue, shippinginsurancecost_callback , 'GET', 'TEXT', false, true );
	    }
 }
 //根据选择的税率表的物品计算出所对应的关税
function select_ratetax_name(value,tabvalue)
{
	//判断线路是否选择，如果未选择，应该选择线路
	var shipping = document.getElementById('shipping');
	var tab1_ratename = document.getElementById('tab1_ratename1');
	if(shipping.value==0)
	{
		alert('请选择运输线路');
		tab1_ratename.selectedIndex=0;
		return;
	}
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
}

//选择线路 和 包裹  来判定
function select_shipping(value)
{
	shippingvalue = value;
	if(value > 0)
	{
    	gObj("confirmpayment").style.display =  "block";
	    
	    Ajax.call('member.php?act=getshippingorderprice', 'ShippingId=' + value, shippingorderprice_callback , 'GET', 'TEXT', false, true );
	    Ajax.call('member.php?act=getshippinginsurancecost', 'ShippingId=' + value, selectshippinginsurancecost_callback , 'GET', 'TEXT', false, true );
	    
	    checkNum(1,0);
	    checkPrice(1,0);
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
	if(obj[0].IsSupPice!=0)
	{
		if(obj[0].Weight > packageweights)
		{
			orderPrice = roundNumber(obj[0].Price,2);
			discount_orderprice = roundNumber(accMul(orderPrice,order_discount),2);
		}
		else
		{
			 weightSub = accSub(packageweights,obj[0].Weight);
		     for(var index=0;index<obj.length;index++)
		     {
		    	 if(obj[index].slp_minweight < weightSub && obj[index].slp_maxweight >= weightSub)
		    	 {
		    		 slpprice = accAdd(obj[index].slp_price,obj[index].slp_serviceprice)
		    	 }
		     }
		     orderPrice = roundNumber(accAdd(slpprice,obj[0].Weight),2);
		     discount_orderprice = roundNumber(accMul(orderPrice,order_discount),2);
		}
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
}
//改变申报价值来改变每个表格所对应的需要支付保险费用
function shippinginsurancecost_callback(result)
{
	var tb_insurance = 'tb' + table_numprice_value + '_insurancecost';
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
}
//是否需要购买保险
function ApplyPrice_Click(value)
{
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
				  costofinsurance = accAdd(costofinsurance,insurance);
				  document.getElementById(tb_hidinsurancecost).value = roundNumber(insurance,2);
			  }
		  }
	  }
   }
   //获得保险费用
   insurance_cost.innerHTML = costofinsurance;
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
}
//使用积分----判断积分的使用
function usepoints_Click()
{
	var usePointstb = document.getElementById('usePointstb').value; //本次使用积分数
	var paypoints = document.getElementById("pay_points").value; //拥有的积分数
	var maxintegral = document.getElementById("max_integral").value; //最大可支付积分
	var integralprice = document.getElementById('rate_points').value;//积分和货币的转换
	
    var insurance_cost = document.getElementById('insurance_cost').innerHTML; //获得保险费用
	var vauleservice = document.getElementById('value_services').innerHTML; //获得服务费
	var package_order_price = document.getElementById('package_order').innerHTML;//运单费用
	var tariff_price = document.getElementById('tariff_price').innerHTML;//关税
	var warehouseing_price = document.getElementById('warehouseing').innerHTML;//仓储费
	var operatorcost_price = document.getElementById('operatorcost').innerHTML;//操作费
	var total_price = document.getElementById('total_price');
	var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额	
	var pointsCost = 0.00;
	if(parseInt(maxintegral) > parseInt(0))
	{
		gObj("option_result").style.display =  (1 == 1) ? "" : "none";
		gObj("option_setting").style.display =  (1 != 1) ? "" : "none";
		document.getElementById('thispaypoints').innerHTML = usePointstb;
		pointsCost = accMul(parseInt(usePointstb),parseFloat(integralprice));
		document.getElementById('currency_val').innerHTML = pointsCost;
	}
	//获得使用积分支付的金额
	document.getElementById('pointspaymentcost').value = pointsCost;
	//计算总费用
	totalprice = parseFloat(package_order_price)+parseFloat(tariff_price)+parseFloat(vauleservice)+parseFloat(warehouseing_price)+parseFloat(operatorcost_price)+parseFloat(insurance_cost);
	//获得总费用
	total_price.innerHTML = roundNumber(totalprice,2);
	//获得所有的申报价格
	var totalapplyprice = 0.00;
    for(var td = 1;td <= tablevalue;td++)
	{
	   var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
	   totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
	}
	//计算通过相关汇率获得的总费用
	var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	//获得需要支付的费用
	pay_moneny.innerHTML = roundNumber(accSub(exchange_totalprice,pointsCost),2);
	//获得总费用(总费用隐藏域)
    document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
}
//取消使用积分
function points_Click()
{
	gObj("option_result").style.display =  (1 != 1) ? "" : "none";
	gObj("option_setting").style.display =  (1 == 1) ? "" : "none";
	document.getElementById('usePointstb').value = '0';
	document.getElementById('currency_val').innerHTML = '0.00';	
    var insurance_cost = document.getElementById('insurance_cost').innerHTML; //获得保险费用
	var vauleservice = document.getElementById('value_services').innerHTML; //获得服务费
	var package_order_price = document.getElementById('package_order').innerHTML;//运单费用
	var tariff_price = document.getElementById('tariff_price').innerHTML;//关税
	var warehouseing_price = document.getElementById('warehouseing').innerHTML;//仓储费
	var operatorcost_price = document.getElementById('operatorcost').innerHTML;//操作费
	var total_price = document.getElementById('total_price');
	var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
	//计算总费用
	totalprice = parseFloat(package_order_price)+parseFloat(tariff_price)+parseFloat(vauleservice)+parseFloat(warehouseing_price)+parseFloat(operatorcost_price)+parseFloat(insurance_cost);
	//获得总费用
	total_price.innerHTML = roundNumber(totalprice,2);
	//获得所有的申报价格
	var totalapplyprice = 0.00;
    for(var td = 1;td <= tablevalue;td++)
	{
	   var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
	   totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
	}
    //计算通过相关汇率获得总费用
	var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	//获得需要支付的费用
	pay_moneny.innerHTML = roundNumber(exchange_totalprice,2);
	//取消积分支付
	document.getElementById('pointspaymentcost').value = '0.00';
	//获得总费用(总费用隐藏域)
    document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
}
function usepoints_Key()
{
	var usePointstb = document.getElementById('usePointstb').value;
	var maxintegral = document.getElementById('max_integral').value;
	if(isNaN(usePointstb))
    {
       alert('请输入正确的积分数！');
       document.getElementById('usePointstb').value = '';
       return false;
    }
	else
	{
	   if(parseInt(usePointstb) > parseInt(maxintegral))
	   {
			alert('对不起，您本次最多可以使用'+maxintegral+'个积分！');
			document.getElementById('usePointstb').value = '0';
			return false;
	   }
	}
}
/**
 ** 加法函数，用来得到精确的加法结果
 ** 说明：javascript的加法结果会有误差，在两个浮点数相加的时候会比较明显。这个函数返回较为精确的加法结果。
 ** 调用：accAdd(arg1,arg2)
 ** 返回值：arg1加上arg2的精确结果
 **/
function accAdd(arg1, arg2) {
    var r1, r2, m, c;
    try {
        r1 = arg1.toString().split(".")[1].length;
    }
    catch (e) {
        r1 = 0;
    }
    try {
        r2 = arg2.toString().split(".")[1].length;
    }
    catch (e) {
        r2 = 0;
    }
    c = Math.abs(r1 - r2);
    m = Math.pow(10, Math.max(r1, r2));
    if (c > 0) {
        var cm = Math.pow(10, c);
        if (r1 > r2) {
            arg1 = Number(arg1.toString().replace(".", ""));
            arg2 = Number(arg2.toString().replace(".", "")) * cm;
        } else {
            arg1 = Number(arg1.toString().replace(".", "")) * cm;
            arg2 = Number(arg2.toString().replace(".", ""));
        }
    } else {
        arg1 = Number(arg1.toString().replace(".", ""));
        arg2 = Number(arg2.toString().replace(".", ""));
    }
   return (arg1 + arg2) / m;
}

/**
  ** 减法函数，用来得到精确的减法结果
  ** 说明：javascript的减法结果会有误差，在两个浮点数相减的时候会比较明显。这个函数返回较为精确的减法结果。
  ** 调用：accSub(arg1,arg2)
  ** 返回值：arg1加上arg2的精确结果
  **/
 function accSub(arg1, arg2) {
     var r1, r2, m, n;
     try {
         r1 = arg1.toString().split(".")[1].length;
     }
     catch (e) {
         r1 = 0;
     }
     try {
         r2 = arg2.toString().split(".")[1].length;
     }
     catch (e) {
         r2 = 0;
     }
     m = Math.pow(10, Math.max(r1, r2)); 
     n = (r1 >= r2) ? r1 : r2;
     return ((arg1 * m - arg2 * m) / m).toFixed(n);
 }
 
 /**
  ** 乘法函数，用来得到精确的乘法结果
  ** 说明：javascript的乘法结果会有误差，在两个浮点数相乘的时候会比较明显。这个函数返回较为精确的乘法结果。
  ** 调用：accMul(arg1,arg2)
  ** 返回值：arg1乘以 arg2的精确结果
  **/
 function accMul(arg1, arg2) {
     var m = 0, s1 = arg1.toString(), s2 = arg2.toString();
     try {
         m += s1.split(".")[1].length;
     }
     catch (e) {
     }
     try {
         m += s2.split(".")[1].length;
     }
     catch (e) {
     }
     return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m);
 }


 /** 
  ** 除法函数，用来得到精确的除法结果
  ** 说明：javascript的除法结果会有误差，在两个浮点数相除的时候会比较明显。这个函数返回较为精确的除法结果。
  ** 调用：accDiv(arg1,arg2)
  ** 返回值：arg1除以arg2的精确结果
  **/
 function accDiv(arg1, arg2) {
     var t1 = 0, t2 = 0, r1, r2;
     try {
         t1 = arg1.toString().split(".")[1].length;
     }
     catch (e) {
     }
     try {
         t2 = arg2.toString().split(".")[1].length;
     }
     catch (e) {
     }
     with (Math) {
         r1 = Number(arg1.toString().replace(".", ""));
         r2 = Number(arg2.toString().replace(".", ""));
         return (r1 / r2) * pow(10, t2 - t1);
     }
 }
 
 
//将数字金额进行千位分隔
 function formatNumber(number) 
 {
    number = number.replace(/,/g, "");
    var digit = number.indexOf(".");
    // 取得小数点的位置
    var int = number.substr(0, digit); 
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


