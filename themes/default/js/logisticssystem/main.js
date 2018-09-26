var mainClass = {
	packageweights : 0, //总重
	selectedPackageAmount : 0,
	packageListHtml:'',
	packages : {},
	priceInfo: {
		service : 0,//服务费
		warehouse: 0,//仓储费
		package : 0, //运单费用 
		tariff : 0,//关税
		insurance : 0,//保险费
		operator: 0,//操作费
		oil: 0,//燃油附加费
		total: 0,//
		pay_moneny: 0, //需要支付的金额
		currency_val: 0,//积分转换的金额
	},
	tableApplyPrice :{},//记录每个表格的申报价格 序号为表格序号
	tableTariffPrice :{}, 

	init : function() {
		var pck_warehouseid = $('#pck_warehouseid').val();
		//获取当前用户的仓库
		select_warehouse(parseInt(pck_warehouseid));
		this.eventBind();
		this.selectedPackageIds = [];
		this.packageGoods = {};

		this.packageDiscount = parseFloat($('#package_discount').val() / 100);
		$('#order_discount').val(this.packageDiscount);
	},
	eventBind:function() {
		var self = this;
		$('#pck_warehouseid').on('change', function(e) {
			var $target = $(e.target);
			var wareHouseid = $target.val();
			var $option = $target.find("option:selected");
			this.lpid = $option.data('lpid');
			this.port_name = $option.data('portname');
			 $('#leave_city').html(this.port_name).data('lpid', this.lpid);
			select_warehouse(wareHouseid);
		});
		$(document).on('click', '.address_radio', function(e) {
			var $target = $(e.target);
			mainClass.arrival_country_id = $target.data('countryid');
			mainClass.arrival_country_name = $target.data('countryname');
			//store into   form
			$('#order_country_id').val(mainClass.arrival_country_id);
			$('#order_country_name').val(mainClass.arrival_country_name);


			$('#leave_country').html(mainClass.arrival_country_name);
			self.calculatorPrice();
		});
        $(document).on('click', '.shipment_id', function(e) {
            var $target = $(e.target);
            var shipment_id = $target.val();
            var $priceTd = $('#price_'+shipment_id);
            var price = $priceTd.data('price');
            var value = $(this).data('value');
            if(price) {
            	//
				$('#package_order').text(roundNumber(price,2));
				$('#pck_waybillcost').val(price);
				$('#discount_waybillcost').val(price*mainClass.packageDiscount);


				$('#shipment_oilDiscount').val(value.oilDiscount);
				$('#shipment_oilcost').val(price*value.oilDiscount/100);
				mainClass.priceInfo.oil = price*value.oilDiscount/100;
				mainClass.priceInfo.package = price;
				mainClass.oilDiscount = value.oilDiscount/100;
				mainClass.resetPrice();
				//借用下服务的代码来计算价格
				//GetServicePrice();
            }
            select_shipment();
        });
        $(document).on('click', "input[type=radio][name=shipment-choose]", function(e) {
        	 var fv = $(e.target).val();
        	 $('#wuliu_choose_table').find('.shipment_recommend_txt').hide();


			 $('#wuliu_choose_table').find('input[type=radio]').each(function() {
				 if(fv==1) {
					 if($(this).data('bestprice')) {
						 $(this).closest('tr').find('.shipment_recommend_txt').show();
					 }
				 }
				 if(fv==2) {
					 if($(this).data('besteffectvalue')) {
						 $(this).closest('tr').find('.shipment_recommend_txt').show();
					 }
				 }
				 if(fv==3) {
					 if($(this).data('bestdiscount')) {
						 $(this).closest('tr').find('.shipment_recommend_txt').show();
					 }
				 }
			 });

        });
	},
	removePackageId :function(packId) {
		for(var i=0;i<this.selectedPackageIds.length;i++) {
			if(packId == this.selectedPackageIds[i]) {
				this.selectedPackageIds.splice(i, 1);
			}
		}
		//todo 重新计算价格
	},
	calculatorPrice : function() {
		$.ajax({
			url : "member_ship_price.php",
			method : 'post',
			dataType: "json",
			data : {
				packageIds : _.uniq(this.selectedPackageIds),
				lp_id : $('#leave_city').data('lpid'),
				country_id :this.arrival_country_id
			},
			success: function(result){
				var data = result.data;
                if(_.isObject(data)) {
                   _.forEach(data, function(value, key) {
                	   var $tr = $('#price_'+key).parent();
                	   var $trRadio = $tr.find('input[type=radio]');
                	   $trRadio.data('besteffectvalue', value['bestEffectValue']);
                	   $trRadio.data('bestprice', value['bestPrice']);
                	   $trRadio.data('bestdiscount', value['bestDiscount']);
                	   $trRadio.data('value', value);
                        $('#price_'+key).html(value.price+" 元").css('color', 'red').css('font-weight', 'bolder');
                        $('#price_'+key).data('price', value.price);
                        if(value['bestPrice']) {
                        	$tr.find('.shipment_recommend_txt').show();
                        }
                   });
                }
			}
		});
	},
	resetPrice: function( ) {

		var priceInfo = this.priceInfo;



		var valueservices = document.getElementById('value_services');
		
		var warehouseing = document.getElementById("warehouseing"); //获得仓储费
		var package_order_price = document.getElementById('package_order');//运单费用
		var tariff_price = document.getElementById('tariff_price');//关税
		var insurance_cost_price = document.getElementById('insurance_cost');//保险费用
		var operatorcost_price = document.getElementById('operatorcost');//操作费
		var oil_price = document.getElementById('value_oil');//燃油附加费
		var total_price = document.getElementById('total_price');
		var pay_moneny = document.getElementById('pay_moneny');//需要支付的金额
		var currency_val = document.getElementById('currency_val');//积分转换的金额

		//计算出所有的关税值
		var alltariff_price = 0.00;
		// for(j=0;j<ordertablenumber;j++)
		// {
		// 	var alltb_hidtariff = 'tb' + (j+1) + '_hidtariff';
		// 	alltariff_price = roundNumber(accAdd(alltariff_price,document.getElementById(alltb_hidtariff).value),2);
		// }
		_.each(mainClass.tableTariffPrice, function(value, tabIndex) {
			alltariff_price = accAdd(alltariff_price,value);
		});
		priceInfo.tariff = alltariff_price;
		
		//仓库费用 
		var x = document.getElementsByName("checkboxes[]");
		var totalWarhousePrice = 0;
		for(var i=0;i<x.length;i++) {
			if(x[i].checked) {
				var $checkbox = $(x[i]);
				var pckid = $checkbox.data('pckid');
				var packDays = parseInt(x[i].title);
				var packInfo = mainClass.packages[pckid];
				//如果物品存放的时间大于或等于免费时间，则，收取仓储费用
				if(packDays >= warhouseInfo.warehousefreeday)
				{
					totalWarhousePrice += (packDays + 1 - warhouseInfo.warehousefreeday) * warhouseInfo.warehousecost;
				}
			}
		}	
		priceInfo.warehouse = totalWarhousePrice;

		var totalprice = 0;
		_.each(priceInfo, function(value ,key) {
			if(key != 'total') {
				if( key == 'package') {
					totalprice += parseFloat(value*mainClass.packageDiscount);
					
					$('#discount_waybillcost').val(value*mainClass.packageDiscount);
				} else {
					totalprice += parseFloat(value);
				}
			}
			
			if(key == "service") {
				if(value == 0){
					valueservices.innerHTML = '0.00';
				} else {
					valueservices.innerHTML = value;
				}
				$('#pck_valueservicecost').val(roundNumber(value,2));
			} else if(key == "tariff") {
				tariff_price.innerHTML = roundNumber(value, 2);
				//获得关税(隐藏域)
				document.getElementById('pck_tariffcost').value = roundNumber(alltariff_price, 2);
				
			} else if(key == "warehouse") {
				warehouseing.innerHTML = roundNumber(value,2);
				//获得仓储费用(定义了仓储费用的隐藏域)
				document.getElementById('pck_warehousecost').value = roundNumber(value,2);
			} else if(key == "operator") {
				operatorcost_price.innerHTML = value; //获得操作费用
				document.getElementById('pck_operatorcost').value = roundNumber(value,2);
			} else if(key == "package") { //运单费用 
				package_order_price.innerHTML = value;  
				$('#pck_waybillcost').val(roundNumber(value,2));
				$('#discount_waybillcost').val(roundNumber(value*mainClass.packageDiscount,2));
			} else if(key == "oil") {
				oil_price.innerHTML = value; 
				$('#shipment_oilcost').val(roundNumber(value,2));
			}
		})
		mainClass.priceInfo.total = totalprice;
		// totalprice = parseFloat()
		// +parseFloat($('#shipment_oilcost').val())
		// +parseFloat(tariff_price)+parseFloat(insurance_cost_price)
		// +parseFloat(warehouseing)+parseFloat(operatorcost_price)
		// +parseFloat(service_price);


		//总费用
		total_price.innerHTML = roundNumber(totalprice,2);
		//把总费用辅助给隐藏域 没什么用
		document.getElementById('pck_totalcost').value = roundNumber(totalprice,2);


		var totalapplyprice=0;
		//获得申报价值的总和  ???
		for(var td = 1;td <= tablevalue;td++) {
			var table_applyprice = document.getElementById('tb'+td+'_applyprice').value;
			//申报价值
			totalapplyprice = roundNumber(accAdd(totalapplyprice,table_applyprice),2);
		}

		//通过相关的汇率转换得到的总费用
		var exchange_totalPrice = accDiv(totalprice,parseFloat(warhouseInfo.upgradepackage.ExchageRate));
		//var exchange_totalprice = roundNumber(exchange_totalPrice,2);
		//通过重量的计算初步得到的需要支付的费用
		pay_moneny.innerHTML = roundNumber(accSub(exchange_totalPrice,priceInfo.currency_val),2);
		

	}
};
var priceClass = {
	getAndSetServiceTotalPrice: function() {
		var y = document.getElementsByName("checkboxesprice[]");
		var valueservices = document.getElementById('value_services');
		var service_price = 0.00;
		//获得所有的申报价格
		var totalapplyprice = 0.00;
		for(var i = 0;i < y.length;i++)
		{
			if(y[i].checked)
			{
				service_price = roundNumber(accAdd(service_price, parseFloat(y[i].title) ),2);
			}
		}
		
		mainClass.priceInfo.service = service_price;
		mainClass.resetPrice();
		return service_price;
	}
};
$(function(){
	mainClass.init();
	load();
});

function load()
{
	//获得当前用户的金额
	Ajax.call( 'member.php?act=getcurrentbalance', '', currentbalance_callback , 'GET', 'TEXT', true, true );
}
function currentbalance_callback(result)
{
    result  = parseFloat($.trim(result));
	if(result <=0 && user_payment_type=="普通") {
		$('#no-enough-money').show();
		$('#pck_warehouseid').prop('disabled', true);
		$('.tjfh_qrzf_table_submit').hide();
	}
	if(user_payment_type=="月结") {
		$("#month-user").show();
	}
	var current_balance = document.getElementById('current_balance');
	if (result != 0) {
		current_balance.innerHTML = formatNumber(result);

		document.getElementById('userMoney').value = roundNumber(result,2);
	}
}

/**
 * 表单验证
 */
function validate()
{
	try{
	 //重新计算
	 compute_coupon();
	 var usermoney = document.getElementById('userMoney').value;
	 var pay_moneny = document.getElementById('pay_moneny').innerHTML;
	 
	 var isCheckPayMoney = false;
	 var chkObjs = document.getElementsByName("payment");
     //1 :处理完成后 手动确认支付
     //2 : 处理完成后 自动支付（发货速度最快，不可使用积分和优惠券）
     for(var i=0;i<chkObjs.length;i++){
         if(chkObjs[i].checked){
            if(chkObjs[i].value == "2"){
            	isCheckPayMoney=true;
            }else{
            	isCheckPayMoney=false;
            }
            break;
         }
	 }
	 if(user_payment_type == "月结") {
		isCheckPayMoney=false;
	 }
	 validator = new Validator("theForm");
	 
	 validator.checkboxesRequired("checkboxes[]",notnull_warehouse_goods);
	 validator.selectRequired("pck_warehouseid",  warehouse_notnull);
	 //validator.selectRequired("shipping", shipping_notnull); 
	 var shipment_id = $("input[name='shipment_id']:checked").val();
     if(!shipment_id) {
        alert(shipping_notnull);
        return false;
     }
	 if(isCheckPayMoney)
	 {
	 	validator.isPayMoney(usermoney, pay_moneny, paymoneyis_usermoney);
	 }
	 validator.required('tb1_delivery_address',delivery_address_notnull);
	 
	 //获取table的数量
	 var tableCount = $('#tablecount').val();
	 for(var tableIndex = 1; tableIndex <= tableCount; tableIndex++)
	 {
	  //获取table所有行
	  var table = document.getElementById('testTab'+tableIndex);
	  var rows = table.rows.length;
	  rows = rows - 2;
	  for(var i=2;i<rows;i++)
	  {
	  		//获取第一列的值
	  		var colIndex = parseInt(table.rows[i].cells[0].innerHTML);
	  		var pckg_name = document.getElementsByName('tab1_goodsname'+colIndex);
	
			validator.selectRequired('tab'+tableIndex+'_ratename'+colIndex,'请选择商品类别');
			validator.required('tab'+tableIndex+'_goodsname'+colIndex,'商品名称不能为空');
			validator.required('tb'+tableIndex+'_num'+colIndex,'数量不能为空');
			validator.required('tb'+tableIndex+'_price'+colIndex,'单价不能为空');
	  }
	 }
	 if($('#isuse_coupon').val() == '0' && $('#coupon_desc').text()!='') 
	 {
	 	alert($('#coupon_desc').text());
	 	return false;
	 }

	 //选中的运费信息
	 $('.shipment_id').each(function() {
		 if($(this).prop('checked')) {
			var value = $(this).data('value');
			 
			$('#shipment_basicPrice').val(value.basicPrice); 
			$('#shipment_oilDiscount').val(value.oilDiscount); 
			$('#shipment_discount').val(value.discount); 
		 }
	 });
	 
	 //invoice 
	 var is_invoice = parseInt($(".is_order_invoice:checked").val());
	 var invoice_type = $(".order_invoice_type:checked").val();
	 var invoice_title =$.trim( $('#invoice_title').val() );
	 var invoice_tax_no =$.trim( $('#invoice_tax_no').val() );
	 var invoice_address =$.trim( $('#invoice_address').val() );
	 if(is_invoice) {
		if(!invoice_title) {
			alert("发票抬头必须填写")
			return false;
		}
		if(invoice_type == "企业") {
			if(!invoice_tax_no) {
				alert("税号必须填写")
				return false;
			}
		}
		if(!invoice_address) {
			alert("发票邮寄地址必须填写")
			return false;
		}
	 }
	 return validator.passed();
	}catch(e){
		return false;
	}
}
