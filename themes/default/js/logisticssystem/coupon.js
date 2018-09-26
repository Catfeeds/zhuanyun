/**
** 优惠券计算
**/
function compute_coupon()
{
	obj = $('#coupon');
	var coupon_value=obj.val();
	if(Utils.trim(coupon_value)=='')
	{
		$('#isuse_coupon').val('0');
		$('#coupon_desc').text('');
		return;
	}
	else
    {
		gObj("coupon_btn").style.display =  (1 == 1) ? "" : "none";
		gObj("confirmCouponbtn").style.display =  (1 != 1) ? "" : "none";	
	}
	//验证输入的优惠券号是否存在，是否过期
	$.ajax({
		type: 'POST',
		url: 'member_order.php?act=2110&sn='+obj.val(),
		data: {'sn':obj.val()},
		async:false,
		dataType:'json',
		success:function(result){
			if(result==undefined)
			{
				return true;
			}
			if(result.length!=0)
			{
				if(result.result == undefined)
				{
					var couponValue=parseFloat(result.CouponValue);//优惠券面值
					var minAmount = parseFloat(result.MinAmount);//最小消耗
					//获取实际需要交付价格
					var payment_money_total = parseFloat($('#pay_moneny').text());
					//优惠券：最低消费金额
					if(minAmount!=0)
					{
						if(payment_money_total < minAmount)
						{
							$('#coupon_desc').text(coupon_min_amount + minAmount);
							return false;
						}
						else{
							$('#isuse_coupon').val('1');
							$('#coupon_desc').text(coupon_price + '：'+couponValue);
						}
					}else{
						//如果等于0，无限制
						
					}
				}
				else{
					$('#coupon_desc').text(result.result);
				}
			}
		},
		error:function(){
			//alert(data_failed);
		}
	});
}