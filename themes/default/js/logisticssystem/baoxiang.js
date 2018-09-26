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
   console.log("pck_totalcost:", roundNumber(totalprice,2));
}