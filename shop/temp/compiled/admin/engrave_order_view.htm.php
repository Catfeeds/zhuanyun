<!-- $Id: goods_info.htm 17126 2010-04-23 10:30:26Z zhangxingpeng $ -->
<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,selectzone.js,colorselector.js')); ?>
<style>
div.itemR {text-align: right;padding: 5px;padding-right: 30px;margin: 10px 0px;}	
div.order_tit {line-height: 22px;height: 22px;overflow: hidden;background: #eee;border: solid 1px #ccc;font-size: 14px;text-indent: 10px;font-weight: bold;}
.pd10 {padding: 10px;}
.setTable {width: 99%;margin: 10px auto;border-collapse: collapse;}
tbody {display: table-row-group;vertical-align: middle;border-color: inherit;}
.setTable tr, .setTable tr.even {border-bottom: solid 1px #e1e1e1;border-top: solid 1px #e1e1e1;background: #f9f9f9;}
td {padding: 8px;color: #333; padding_left:10px;}
td, th {display: table-cell;vertical-align: inherit;}
li {text-align: -webkit-match-parent;}
ul.og_list {line-height: 150%;list-style: none;}
.setTable tr th {width: 120px;text-align: right;font-weight: normal;}
div.delivery_item {border: dashed 1px #ccc;margin-bottom: 10px;padding: 10px;background: #eef;}
ul.item_list {padding-left: 50px;list-style: none;}
div.border {border: solid 1px #333;margin: 10px;}
div.cnt {background: #ddd;margin: 5px;padding: 5px;}
div.border h2 {margin: 0px;padding: 0px;line-height: 32px;height: 32px;text-indent: 15px;font-size: 15px;background: #555;color: #fff;}
table.orderTb{
	margin-top:10px;
}
table.orderTb tr th {text-align: center;
background:url(../images/bg3.png) scroll repeat-x 0 -132px;color: #000;padding: 8px;}
table.orderTb {width: 100%;border: none;border-collapse: collapse;table-layout: fixed;}
table.orderTb tr td {text-align: center;border:1px solid #DDDDDD;}
div {display: block;}
</style>
  <?php $this->assign('temp',$this->_var['allCountries'][$this->_var['view_list']['country_id']]); ?>
  <?php $this->assign('tempShipment',$this->_var['allShipments'][$this->_var['view_list']['order_shipmentid']]); ?>
<!-- start goods form -->
<div class="main-div">
     <form enctype="multipart/form-data" action="engrave_all_orders.php" method="post" name="theForm" onsubmit="return validate()">
        <div class="order_tit">用户信息</div>
        <div class="pd10">用户名：<?php echo $this->_var['view_list']['user_name']; ?> &nbsp; 用户余额：<strong style="font-size:15px; color:#f60" id="current_balance">0.00</strong><?php echo $this->_var['currency_name']; ?></div>
		<div class="order_tit">订单信息</div>
		<table class="setTable">
           <tbody>
             <tr id="orderNoTR"><th> 订单号：</th>
	           <td><span id="OrderNotb"><?php echo $this->_var['view_list']['order_no']; ?></span></td>
             </tr>
             <tr><th valign="top">货物详情：</th>
               <td><ul class="og_list" id="package_goods"></ul></td>
             </tr>
             <!--  <tr><th>发货渠道：</th>
             <td><?php echo $this->_var['view_list']['ShippingName']; ?></td>-->
             <tr><th>发货物流：</th>
             <td><?php echo $this->_var['tempShipment']; ?></td>
             </tr>
             <tr>
				 <th>提交日期：</th>
               <td><?php echo $this->_var['view_list']['order_time']; ?></td>
             </tr>
			 <tr>
				 <th>发票信息：</th>
				 <td>
					 <?php if ($this->_var['view_list']['order_needinvoice']): ?>
						 发票类型: <?php echo $this->_var['view_list']['order_invoice_type']; ?><br>
						 发票抬头: <?php echo $this->_var['view_list']['order_invoice_title']; ?><br>
						 <?php if ($this->_var['view_list']['order_invoice_type'] == "企业"): ?>
						 税&nbsp;&nbsp;&nbsp;&nbsp;号: <?php echo $this->_var['view_list']['order_invoice_tax_no']; ?><br>
						 <?php endif; ?>
						 发票内容: <?php echo $this->_var['view_list']['order_invoice_content']; ?><br>
						 发票邮寄地址: <?php echo $this->_var['view_list']['order_invoice_address']; ?><br>
					 <?php else: ?>
					 不开发票
					 <?php endif; ?>
				 </td>
			 </tr>
           </tbody>
		</table>
		<div class="order_tit">运费信息</div>
		<table class="setTable">
          <tbody>
           	<tr><th>分箱件数：</th>
              <td><strong class="red"><?php echo $this->_var['view_list']['order_boxquantity']; ?></strong></td>
            </tr>
            <tr><th valign="top">分箱详细：</th>
              <td>
                <div class="delivery_box" id="delivery">
				</div>
                <div class="pd10">
                    <p>仓储费用：<?php echo $this->_var['view_list']['order_warehousecost']; ?> <?php echo $this->_var['view_list']['Name']; ?></p>
                    <p>关税：<?php echo $this->_var['view_list']['order_tariffcost']; ?> <?php echo $this->_var['view_list']['Name']; ?></p>
                    <p>增值服务费：<?php echo $this->_var['view_list']['order_valueservicecost']; ?> <?php echo $this->_var['view_list']['Name']; ?></p>
                    <p>仓库操作费：<?php echo $this->_var['view_list']['order_operatorcost']; ?> <?php echo $this->_var['view_list']['Name']; ?></p>
                    <p>其它操作费：<?php echo $this->_var['view_list']['order_othercost']; ?> <?php echo $this->_var['view_list']['Name']; ?></p>
                    <p>保险费用：<?php echo $this->_var['view_list']['order_insurace']; ?> <?php echo $this->_var['view_list']['Name']; ?></p>
                    <!--
                    <p>实际运费：<?php echo $this->_var['view_list']['order_discountcost']; ?> <?php echo $this->_var['view_list']['Name']; ?></p>
                     -->
                    <p>运费：<?php echo $this->_var['view_list']['order_waybillcost']; ?> <?php echo $this->_var['view_list']['Name']; ?></p>
                    <p>总费用：<span id="totalPrice"><?php echo $this->_var['order_totalprice']; ?></span> <?php echo $this->_var['view_list']['Name']; ?></p>
                </div>
              </td>
            </tr>
          </tbody>
		</table>
		<div class="order_tit">物品说明</div>
		<div class="pd10">
			<?php echo $this->_var['view_list']['order_note']; ?>
		<table>
          <tr>
            <td class="label" style="width:100px;"><?php echo $this->_var['lang']['attach']; ?>：</td>
	          <td>
	          	<?php $_from = $this->_var['order_attachs_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'order_attachs');$this->_foreach['name_order_attachs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_order_attachs']['total'] > 0):
    foreach ($_from AS $this->_var['order_attachs']):
        $this->_foreach['name_order_attachs']['iteration']++;
?>
					<A href="<?php echo $this->_var['order_attachs']['oa_attach']; ?>" target="_blank">
						<IMG src="<?php echo $this->_var['order_attachs']['oa_attach']; ?>" width="150px" height="100px">
					</A>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
	          </td>
          </tr>
          </table>
		</div>
		<div class="order_tit">备注说明</div>
		<div class="pd10"><?php echo $this->_var['view_list']['order_remark']; ?></div>
		<div class="order_tit">订单历史操作状态</div>
	    <table class="orderTb" cellspacing="0"  style="border-collapse:collapse;">
		<tbody><tr>
			<th scope="col" style="width:56px;">ID</th>
			<th scope="col" style="width:80px;">操作用户</th>
			<th scope="col" style="width:130px;">操作代码</th>
			<th scope="col" >操作记录</th>
			<th scope="col" style="width:130px;">操作时间</th>
		</tr>
		<?php $_from = $this->_var['orderlog_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'orderlog');$this->_foreach['name_orderlog'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_orderlog']['total'] > 0):
    foreach ($_from AS $this->_var['orderlog']):
        $this->_foreach['name_orderlog']['iteration']++;
?>
		<tr>
			<td style="width:100px;">
            	<?php echo $this->_var['orderlog']['ol_id']; ?>
            </td>
            <td>
				<?php echo $this->_var['orderlog']['ol_username']; ?>
			</td>
            <td>
				<?php echo $this->_var['orderlog']['ol_code']; ?>
			</td>
            <td class="tit">
				<?php echo $this->_var['orderlog']['ol_info']; ?>
			</td>
            <td>
				<?php echo $this->_var['orderlog']['ol_time']; ?>
			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	    </tbody></table>
		<div class="itemR"><a href="engrave_all_orders.php?act=list" class="btn">返回订单列表</a></div>
		<input type="hidden" id="orderid" name="orderid" value="<?php echo $this->_var['view_list']['order_id']; ?>" />
     </form>
</div>
<!-- end goods form -->
<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js')); ?>

<script language="JavaScript">

	if(document.all)
    { 
		window.attachEvent('onload', load);
	}
	else 
	{ 
		window.addEventListener('load', load);
	}
	
	/**
	 * 页面加载执行
	 */
	function load()
	{	
	   var orderid = document.getElementById('orderid').value;
       Ajax.call( 'engrave_all_orders.php?act=getcurrentbalance', "order_id="+orderid, currentbalance_callback , 'GET', 'TEXT', true, true );
	   Ajax.call('engrave_all_orders.php?act=getpackageinformation',"order_id="+orderid,act_packageinfo,"GET","TEXT",false,true);
	   Ajax.call('engrave_all_orders.php?act=getpackageorderwaybill',"order_id="+orderid,act_orderwaybill,"GET","TEXT",false,true);
	}
	var text;
	function act_packageinfo(result)
	{
	  text='';
	  var obj = eval('(' + result + ')');
	  var packagegood = document.getElementById("package_goods");
	  for(var index = 0;index < obj.length;index++)
	  {
		  text += "<li><lable>"+(index+1)+") 运单号："+obj[index].pck_expressnumber+"&nbsp;"
              //+obj[index].pckg_name
		        //+ "&nbsp;"+obj[index].pckg_unitprice+"*"+obj[index].pckg_amount
                +"&nbsp;总重：<span style='color:red;'>"+obj[index].pck_weight
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
			        +obj[index].pckg_amount+"&nbsp;&nbsp;单价：&nbsp;"+roundNumber(obj[index].pckg_unitprice,2)+"&nbsp; &nbsp;总价：&nbsp;"+roundNumber(obj[index].pckg_totalprice,2)+"</li>";
		}
	}
    function act_orderwaybill(result)
	{
	   var order_text='';
	   var obj = eval('(' + result + ')');
	   var delivery = document.getElementById("delivery");
	   for(var index = 0;index < obj.length;index++)
	   {
		   obj[index].Name = "人民币";
		   obj[index].WeightUnit = "g";
	   	  Ajax.call( 'engrave_all_orders.php?act=getordergoods', 'ordw_waybillid=' + obj[index].ordw_waybillid, orderwaybill_callback , 'GET', 'TEXT', false, true );
		  Ajax.call( 'engrave_all_orders.php?act=getdeliveryinfo', 'ordw_consigid=' + obj[index].ordw_consigid, orderconsig_callback , 'GET', 'TEXT', false, true );
		  order_text += "<div class='delivery_item'>包裹#"+(index+1)+"&nbsp;（"+obj[index].ordw_orderno+"）&nbsp;申报价值："+roundNumber(obj[index].ordw_applyprice,2) + "&nbsp;<span id='applyprice_"+(index+1)+"'>"+obj[index].Name
		             +"</span>&nbsp;&nbsp;包裹重量："+roundNumber(obj[index].ordw_applyprice,2) + " (<span id='goodweight_"+(index+1)+"'>"+obj[index].WeightUnit+"</span>) &nbsp;发货单号："+roundNumber(obj[index].order_waybillno,2)
					 +"<ul class='item_list'>"+goods_text+"</ul>"
					 +"<span style='font-weight:bold;color:red;'>收货信息："+consigee_text+"</span><br>"
					 +"包裹运费：<span>"+roundNumber(obj[index].ordw_waybillcost,2)+"</span><span id='waybillcost_"+(index+1)+"'>"+obj[index].Name+"</span>， 关税：<span>"+roundNumber(obj[index].ordw_tariff,2)+"</span><span id='tariff_"+(index+1)+"'>"+obj[index].Name+"</span> 保险费用：<span>"+roundNumber(obj[index].ordw_insurprice,2)+"</span><span id='insurprice_"+(index+1)+"'>"+obj[index].Name+"</span>"
					 +"</div>";
	   }
	   delivery.innerHTML = order_text;
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
    var consigee_text;
    function orderconsig_callback(result)
	{
		consigee_text = '';
	    var obj = eval('(' + result + ')');
	    consigee_text = obj[0].da_consignee + "（"+obj[0].da_consigneetelephone+"/"+obj[0].da_sparetelephone+"）地址："+obj[0].country_name + "  " +obj[0].da_address+"（"+obj[0].da_zipcode+"）";
	}
	//获得用户的余额
	function currentbalance_callback(result)
	{
	    var current_balance = document.getElementById('current_balance');

	    if (result != 0) {
		current_balance.innerHTML = formatNumber($.trim(result));
	    }
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
	
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
