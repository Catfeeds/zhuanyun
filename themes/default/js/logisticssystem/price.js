//物品的数量和价格的控制
 var rate_tax = 0.00;
 //checkNum(1,0);
 function checkNum(tbvalue,trvalue)
 {
	table_numprice_value = tbvalue;
	var tb_applyprice = 'tb'+tbvalue+'_applyprice';
	var tb_hidtariff = 'tb' + tbvalue + '_hidtariff';


	var traffprice = document.getElementById("tariff_price"); //获取关税的$element
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
	var indexValue = index-3;//最后一个商品行
	//根据ID获取第一列的值
	totalnum = 0.00;
	var tariff_price = 0.00;
	for( var i=1;i<indexValue;i++)
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
			tariff_price = accAdd((num * price * rate_tax),tariff_price);
		}
		totalnum = accAdd((num * price),totalnum);
	}
	//获得相应运单对应的申报价值
	mainClass.tableApplyPrice[tbvalue] = totalnum;
	mainClass.tableTariffPrice[tbvalue] = tariff_price;

	document.getElementById(tb_applyprice).value = roundNumber(totalnum, 2);
	//获得相应运单对应的关税(隐藏域的值)
	document.getElementById(tb_hidtariff).value = roundNumber(tariff_price,2);


	//计算出所有的关税值

	mainClass.resetPrice();
	
	// var alltariff_price = 0.00;
	// for(j=0;j<ordertablenumber;j++)
	// {
	// 	var alltb_hidtariff = 'tb' + (j+1) + '_hidtariff';
	// 	alltariff_price = roundNumber(accAdd(alltariff_price,document.getElementById(alltb_hidtariff).value),2);
	// }
	// //获得关税
	// traffprice.innerHTML = alltariff_price;
	// //获得关税(隐藏域)
	// document.getElementById('pck_tariffcost').value = alltariff_price;
	// //计算总费用
	// totalprice = parseFloat(package_order_price)+parseFloat(alltariff_price)+parseFloat(insurance_cost_price)+parseFloat(warehouseing_price)+parseFloat(operatorcost_price)+parseFloat(vauleservice);
	// //获得总费用
	// total_price.innerHTML = roundNumber(totalprice,2);
	// //获得所有的申报价格
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

	//线路
	// var shippingnumvalue = document.getElementById('shipping').value;
	// if(shippingnumvalue!=0)
    // {
	// 	Ajax.call('member.php?act=getshippinginsurancecost', 'ShippingId=' + shippingnumvalue, shippinginsurancecost_callback , 'GET', 'TEXT', false, true );
    // }
 }