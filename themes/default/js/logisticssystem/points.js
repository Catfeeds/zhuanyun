//功能未实现
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
	console.log("pck_totalcost:", roundNumber(totalprice,2));
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
	console.log("pck_totalcost:", roundNumber(totalprice,2));
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
