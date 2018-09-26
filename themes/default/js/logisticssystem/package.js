//判断物品选择在两个以上
//packagegoods0 第0 个包裹
//选择包裹 是 也要计算一遍 价格
function selectPackage(value)
{
	var $target = $('#'+value);
	var pckId = $target.data('pckid');
	mainClass.selectedPackageIds.push(pckId);
	mainClass.selectedPackageIds = _.uniq(mainClass.selectedPackageIds, true);
	//获取当前复选框，判断是否选中
	if(document.getElementById(value).checked)
	{
		//选中，将内容填充到table 商品详细信息：
		var testTab1 = document.getElementById('testTab1');
		var allPackageGoods = mainClass.allPackageGoods;
		for(var apindex=0;apindex<allPackageGoods.length;apindex++)
		{
			var ap_temp = allPackageGoods[apindex];

			if(ap_temp.array_package_name == value)
			{
				if(array_table_index==1)
				{	
					//第一个运单的第一个商品
					var tr = $('#tab1_goodsname1').parent();
					$(tr).addClass('package_'+pckId);
					$(tr).addClass('packagegoods_'+ap_temp.pckg_id);
					 document.getElementById('tab1_goodsname'+array_table_index).value=ap_temp.pckg_name;
					 document.getElementById('tb1_num'+array_table_index).value=ap_temp.pckg_amount;
					 document.getElementById('tb1_price'+array_table_index).value=ap_temp.pckg_unitprice;
				}else{
					 var tr = addTr(1);//往第一个表格中添加行
					 $(tr).addClass('package_'+pckId);
					 $(tr).addClass('packagegoods_'+ap_temp.pckg_id);

					 var index = testTab1.rows.length;
					 var indexValue = index-4;//???
					 document.getElementById('tab1_goodsname'+indexValue).value=ap_temp.pckg_name;
					 document.getElementById('tb1_num'+indexValue).value=ap_temp.pckg_amount;
					 document.getElementById('tb1_price'+indexValue).value=ap_temp.pckg_unitprice;
				}
				array_table_index++;
			}
		}
		//计算申报价值
		checkNum(1,0);
	} else {
		if(confirm("重新选择包裹")) {
			showservice(0);
			return true;
		}
		//mainClass.removePackageId(pckId);
		
	}
	mainClass.calculatorPrice();
	mainClass.resetPrice();


	var x = document.getElementsByName("checkboxes[]");//包裹选择
	var warehouseing = document.getElementById("warehouseing"); //获得仓储费
	var vauleservice = document.getElementById('value_services').innerHTML; //获得服务费
	var package_order_price = document.getElementById('package_order').innerHTML;//运单费用
	var tariff_price = document.getElementById('tariff_price').innerHTML;//关税
	var insurance_cost_price = document.getElementById('insurance_cost').innerHTML;//保险费用
	var operatorcost_price = document.getElementById('operatorcost').innerHTML;//操作费
	var total_price = document.getElementById('total_price');
	var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
	var currency_val = document.getElementById('currency_val').innerHTML;//积分转换的金额


	//获得所有的申报价格
	var totalapplyprice = 0.00;
	var m=0;
	var n=false;
	//仓储费用
	var value = 0;
	packageweights = 0.00;
	//包裹的长
	package_length = 0.00;
	//包裹的宽
	pcakge_width = 0.00;
	//包裹的高
	pcakge_height = 0.00;

	for(var i=0;i<x.length;i++)
	{
		if(x[i].checked)
		{
			//获得选中包裹的长宽高
			Ajax.call('member.php?act=getpackagevolume', 'pck_expressnumber=' + x[i].value, packagevolume_callback , 'GET', 'TEXT', false, true );
			//所有包裹的总重
			packageweights = roundNumber(accAdd(packageweights,x[i].alt),2);
			// var packDays = parseInt(x[i].title);
			// //如果物品存放的时间大于或等于免费时间，则，收取仓储费用
			// if(packDays >= warehousefreeday)
			// {
			// 	value += (packDays + 1 - warehousefreeday) * warehousecost;
			// }
			m++;
		}
	}
	mainClass.packageweights = packageweights;
	mainClass.selectedPackageAmount = m;
	// //毫无意义的累加
	// //隐藏域获取包裹的长度
	document.getElementById("pck_totallength").value = roundNumber(package_length,2);
	//隐藏域获取包裹的宽度
	document.getElementById("pck_totalwidth").value = roundNumber(pcakge_width,2);
	//隐藏域获取包裹的高度
	document.getElementById("pck_totalheight").value = roundNumber(pcakge_height,2);


	// warehouseing.innerHTML = roundNumber(value,2);
	// //获得仓储费用(定义了仓储费用的隐藏域)
	// document.getElementById('pck_warehousecost').value = roundNumber(value,2);
    // //获得总费用
	// totalprice = parseFloat(package_order_price)+parseFloat(tariff_price)+parseFloat(insurance_cost_price)+parseFloat(vauleservice)+parseFloat(operatorcost_price)+parseFloat(value);
	// total_price.innerHTML = roundNumber(totalprice,2);


	// //获得申报价值的总费用
	// for(var td = 1;td <= tablevalue;td++)
	// {
	// 	var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
	// 	totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
	// }
	// //获得通过相对应的汇率转换获得的总费用
	// var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	// //获得需要支付的费用
	// pay_moneny.innerHTML = roundNumber(accSub(exchange_totalprice,currency_val),2);
	// //获得总费用(定义了总费用的隐藏域)
	// document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
	// console.log("pck_totalcost:", roundNumber(totalprice,2));
	if(m>=2)
	{
		document.getElementById("baseservice").disabled = "disabled";
		// document.getElementById("AService").disabled = "";
		// document.getElementById("BService").disabled = "";
		document.getElementById("moreservice").checked = true;
	}
	else
	{
		document.getElementById("baseservice").disabled = "";
		// document.getElementById("AService").disabled = "disabled";
		// document.getElementById("BService").disabled = "disabled";
		document.getElementById("baseservice").checked = true;
	}
	ischeckpackage = m;
	var shipment_id = $('.shipment_id:checked').val();
	if(m==0)
	{
		gObj("confirmpayment").style.display =  "none";
	}
	else
	{
		if(shipment_id>0)
		{
			gObj("confirmpayment").style.display = "";
		}
	}
	// var shippingId = document.getElementById('shipping').value;
	// if(shippingId!=0)
	// {
	//    Ajax.call('member.php?act=getshippingorderprice', 'ShippingId=' + shippingId, shippingorderprice_callback , 'GET', 'TEXT', false, true );
	// }
	//隐藏域获取包裹的重量
	document.getElementById("pck_totalweights").value = roundNumber(packageweights,2);
}

//选择升级包裹
function SelectUpgradePackage()
{
	OperatorUpgrade = 0.00
	UpgradePackageValue = document.getElementById('UpgradePackage').value;
	if(OustsideBraneValue == false)
	{
		OperatorUpgrade = warhouseInfo.upgradepackagecost * UpgradePackageValue;//
		roundNumber((upgradepackagecost * UpgradePackageValue),2);
	}
	else
	{
		OperatorUpgrade = accAdd(warhouseInfo.outsidebranecost,warhouseInfo.upgradepackagecost * UpgradePackageValue);


	}
	mainClass.priceInfo.operator = OperatorUpgrade;

	mainClass.resetPrice();

	// var vauleservice = document.getElementById('value_services').innerHTML; //获得服务费
	// var package_order_price = document.getElementById('package_order').innerHTML;//运单费用
	// var tariff_price = document.getElementById('tariff_price').innerHTML;//关税
	// var insurance_cost_price = document.getElementById('insurance_cost').innerHTML;//保险费用
	// var warehouseing_price = document.getElementById('warehouseing').innerHTML;//仓储费
	// var total_price = document.getElementById('total_price');//总费用
	// var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
	// var currency_val = document.getElementById('currency_val').innerHTML;//积分转换的金额
	// //计算总费用
	// totalprice = parseFloat(package_order_price)+parseFloat(tariff_price)+parseFloat(insurance_cost_price)+parseFloat(warehouseing_price)+parseFloat(vauleservice)+parseFloat(OperatorUpgrade);
	// //获得总费用
	// total_price.innerHTML = roundNumber(totalprice,2);
	// //获得所有的申报价格
	// var totalapplyprice = 0.00;
	// for(var td = 1;td <= tablevalue;td++)
	// {
	// 	var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
	// 	totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
	// }
	// //计算通过相关汇率获得的总费用
	// var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	// //获得需要支付的金额
	// pay_moneny.innerHTML = roundNumber(accSub(exchange_totalprice,currency_val),2);
	// //获得总费用(总费用隐藏域)
	// document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
	// console.log("pck_totalcost:", roundNumber(totalprice,2));
}
//外箱缠绕膜 时计算价格
function OustSide_Click()
{
	OustsideBraneValue = document.getElementById('oustsidebrane').checked;
	if(OustsideBraneValue == true)
	{
		if(UpgradePackageValue == 0)
		{
			OperatorOutside = warhouseInfo.outsidebranecost;
		}
		else
		{
			OperatorOutside = accAdd(OperatorUpgrade,warhouseInfo.outsidebranecost);
		}
	}
	else
	{
		OperatorOutside = OperatorUpgrade;
	}

	mainClass.priceInfo.operator = OperatorOutside;

	mainClass.resetPrice();

	// document.getElementById('operatorcost').innerHTML = OperatorOutside; //获得操作费用
	// document.getElementById('pck_operatorcost').value = roundNumber(OperatorOutside,2);
	// var vauleservice = document.getElementById('value_services').innerHTML; //获得服务费
	// var package_order_price = document.getElementById('package_order').innerHTML;//运单费用
	// var tariff_price = document.getElementById('tariff_price').innerHTML;//关税
	// var insurance_cost_price = document.getElementById('insurance_cost').innerHTML;//保险费用
	// var warehouseing_price = document.getElementById('warehouseing').innerHTML;//仓储费
	// var total_price = document.getElementById('total_price');//总费用
	// var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
	// var currency_val = document.getElementById('currency_val').innerHTML;//积分转换的金额
	// //计算总费用
	// totalprice = parseFloat(package_order_price)+parseFloat(tariff_price)+parseFloat(insurance_cost_price)+
	// parseFloat(warehouseing_price)+parseFloat(vauleservice)+parseFloat(OperatorUpgrade);
	// //获得总费用
	// total_price.innerHTML = roundNumber(totalprice,2);
	// //计算所有的申报价格
	// var totalapplyprice = 0.00;
	// for(var td = 1;td <= tablevalue;td++)
	// {
	// 	var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
	// 	totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
	// }
    // //计算通过相关汇率得到的总费用
	// var exchange_totalprice = roundNumber(accDiv(totalprice,parseFloat(exchange_rate)),2);
	// //获得需要支付的费用
	// pay_moneny.innerHTML = roundNumber(accSub(exchange_totalprice,currency_val),2);
	// //获得总费用(总费用隐藏域)
	// document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);
	// console.log("pck_totalcost:", roundNumber(totalprice,2));
}



//获得包裹的长宽高
function packagevolume_callback(result)
{
	var obj = eval('(' + result + ')');
	package_length = roundNumber(accAdd(package_length,obj[0].pck_sizelength),2);
	pcakge_width = roundNumber(accAdd(pcakge_width,obj[0].pck_sizewidth),2);
	pcakge_height = roundNumber(accAdd(pcakge_height,obj[0].pck_sizeheight),2);
}
