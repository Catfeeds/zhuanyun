function select_warehouse(value)
{
	tableText = "";
	tablevalue = 0;
	gObj("datd").style.display =  (value != 0) ? "" : "none";
	gObj("warehouse_goods").style.display =  (value != 0) ? "" : "none";
	gObj("detail_goods_info").style.display =  (value != 0) ? "" : "none";
	gObj("upgradepackage").style.display =  (value != 0) ? "" : "none";
	gObj("outsidecost").style.display =  (value != 0) ? "" : "none";
	//gObj("confirmpayment").style.display = "none";
	//商品详细信息
	var tabGoods = document.getElementById("table_goods");
	if(value!=0)
    {
		idvalue = 0;
		tablevalue = 1;
		document.getElementById('tablecount').value = 1;
		//动态添加详细物品(表单)
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
        +"<td class='goodsname'><input type='text' style='height:23px;width:96%' id='tab1_goodsname1' name='tab1_goodsname1' size='12' /></td>"
        +"<td class='goodsnumber'><input type='text' style='height:23px;width:94%' name='tb1_num1' id='tb1_num1' size='5' onblur='checkNum(1,1);' value=''/></td>"
        +"<td class='goodsprice'><input type='text' style='height:23px;width:94%' name='tb1_price1' id='tb1_price1' size='5' onblur='checkPrice(1,1)'  value=''/></td>"
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
		//动态添加选择该仓库下的增值服务
		Ajax.call( 'member.php?act=getservicename', 'pck_warehouseid=' + value, servicename_callback , 'GET', 'TEXT', false, true );
		//获得该仓库的物品重量单位
		Ajax.call( 'member.php?act=getpackcountbyweightunit', 'pck_warehouseid=' + value, weightunit_callback , 'GET', 'TEXT', false, true );
		//根据仓库ID获取对应的包裹信息  获取该仓库下的包裹列表
	    Ajax.call( 'member.php?act=getpackcountbyhouse', 'pck_warehouseid=' + value, packagegoods_callback , 'GET', 'TEXT', false, true );
		//根据仓库ID获取对应的线路
	    //Ajax.call( 'member.php?act=getshipping', 'pck_warehouseid=' + value, warehouseshipping_callback , 'GET', 'TEXT', false, true );
		//根据仓库ID获取升级包装的价格(升级包装费、外箱缠绕膜)
	    Ajax.call( 'member.php?act=getupgradepack', 'pck_warehouseid=' + value, upgradepackage_callback , 'GET', 'TEXT', false, true );
		//获取物品信息名称
	    Ajax.call( 'member.php?act=getratetax', '', ratetax_callback , 'GET', 'TEXT', false, true );
	    //获取收货人的详细信息
	    Ajax.call( 'member.php?act=getdeliveryaddress', '', deliveryaddress_callback , 'GET', 'TEXT', false, true );
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
	if(obj.length<1)
	{
		return;
	}

	warhouseInfo.upgradepackage = obj[0];


	var upgradepackage = document.getElementById("upgradepackage");//升级包装费
	var outsidecost = document.getElementById("outsidecost");//外箱缠绕膜费用
	var CostDetail = document.getElementById("costdetail");//费用详情
	exchange_rate = obj[0].ExchageRate;
	document.getElementById('exchangerate').value = obj[0].ExchageRate;
	if(obj[0].IsDefault == "1") //使用的是否是默认货币
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
	costdetail = "<li style='line-height:20px;'>包裹运费："+obj[0].Symbol+"<a id='package_order'>0.00</a>"+obj[0].Name
			+"<br>关税："+obj[0].Symbol+"<a id='tariff_price'>0.00</a>"+obj[0].Name+""
			+ "<br>保险费用："+obj[0].Symbol+"<a id='insurance_cost'>0.00</a>"+obj[0].Name
			+"<br>仓储费用："+obj[0].Symbol+"<a id='warehouseing'>0.00</a>"+obj[0].Name
			+"<br>操作费："+obj[0].Symbol+"" + "<a id='operatorcost'>0.00</a>"+obj[0].Name
			+"<br>增值服务费："+obj[0].Symbol+"<a id='value_services'>0.00</a>"+obj[0].Name
			+ "<br>燃油附加费："+obj[0].Symbol+"<a id='value_oil'>0.00</a>"+obj[0].Name+"</li>"
			+ "<li style='line-height:20px;'>总费用："+obj[0].Symbol+"<a id='total_price'>0.00</a>"+obj[0].Name;
	if(mainClass.packageDiscount<1) {
		costdetail += "<span style='padding-left:20px; font-size:12px;color:red'>运费折扣:"+$('#waybill-discount').html()+"</span>";
	}		
	costdetail+="</li>"
	warehousecost = parseFloat(obj[0].Warehousing);
	//免费保存时间
	warehousefreeday = parseInt(obj[0].WarehousingBM);
	upgradepackagecost = parseFloat(obj[0].UpPackage);
	outsidebranecost = parseFloat(obj[0].OutsideCost);

	warhouseInfo.warehousefreeday = warehousefreeday;
	warhouseInfo.upgradepackagecost = upgradepackagecost;
	warhouseInfo.outsidebranecost = outsidebranecost;
	warhouseInfo.warehousecost = warehousecost;


	upgradepackage.innerHTML = upgradepack;
	outsidecost.innerHTML = oustside;
	CostDetail.innerHTML = costdetail;

	
}
//获得默认货币的名称
function currencyname_callback(result)
{
	currencyname = result;
}
