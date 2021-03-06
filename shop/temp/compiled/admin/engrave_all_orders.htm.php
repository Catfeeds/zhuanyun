<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<!--页面的查询-->
<?php echo $this->fetch('engrave_orders_search.htm'); ?>
<?php echo $this->fetch('engrave_tip.htm'); ?>

<h4>
	<span class='span-tip-header'>提醒：</span>
	<span id="search_id" class="span-tip">
		[生成欧洲专线发货单] 根据所筛选得来的欧洲专线的订单的出发地,和时效要求来生成一个个发货单(单个或多个订单组成一票货)<br>
        1: 只有处于[待发货]中的订单才可以推送到 <b>发货单</b>中 <br>

	</span>
</h4>


<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<a id="make_dispatch_orders" href="" target="_blank"  class="link-btn"
   style="margin-bottom: 10px;display: inline-block;" >生成欧洲专线发货单</a>

<script type="text/javascript">
$(function() {
window.__Object_toJSONString = Object.prototype.toJSONString;
delete Object.prototype.toJSONString;
});
</script>
<!-- 
<script language="javascript" src="../../js/jquery-1.8.1.min.js"></script>
 -->
<form method="post" action="" name="listForm" id="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start package list -->
  <div class="list-div" id="listDiv">
<?php endif; ?>
<table cellpadding="3" cellspacing="1">
  <tr>
    <th style="width:60px;">
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="javascript:listTable.sort('order_id'); "><?php echo $this->_var['lang']['sort_id']; ?></a><?php echo $this->_var['sort_order_id']; ?>
    </th>
    <th><a href="javascript:listTable.sort('order_no'); "><?php echo $this->_var['lang']['order_no']; ?></a><?php echo $this->_var['sort_order_no']; ?></th>
    <th><a href="javascript:listTable.sort('order_time'); "><?php echo $this->_var['lang']['order_time']; ?></a><?php echo $this->_var['sort_order_time']; ?></th>
    <th><?php echo $this->_var['lang']['order_username']; ?></th>
	<th>物流/时效</th>
	
    <th><?php echo $this->_var['lang']['order_buyername']; ?></th>
    <th><?php echo $this->_var['lang']['order_insurancesprice']; ?></th>
    <th><?php echo $this->_var['lang']['order_totalprice']; ?></th>
	<th><?php echo $this->_var['lang']['order_weight']; ?></th>
	<th>仓库/位置</th>
	
	<th><a><?php echo $this->_var['lang']['order_status']; ?></th>
    <th style="width:120px;"><?php echo $this->_var['lang']['handler']; ?></th>
  <tr>
  <?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'order');if (count($_from)):
    foreach ($_from AS $this->_var['order']):
?>
  <?php $this->assign('temp',$this->_var['allCountries'][$this->_var['order']['country_id']]); ?>
  <?php $this->assign('tempShipment',$this->_var['allShipments'][$this->_var['order']['order_shipmentid']]); ?>
  
  <tr>
    <td align="center"><input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['order']['order_id']; ?>" /><?php echo $this->_var['order']['order_id']; ?></td>
    <td align="center"><?php echo $this->_var['order']['order_no']; ?><?php if ($this->_var['order']['order_servicetype']): ?><?php echo $this->_var['lang']['left']; ?><?php echo $this->_var['order']['ModuleName']; ?><?php echo $this->_var['lang']['right']; ?><?php else: ?><?php echo $this->_var['lang']['origbox']; ?><?php endif; ?>
    <?php if ($this->_var['order']['order_needinvoice']): ?>
        <br>发票: <?php echo $this->_var['order']['order_invoice_type']; ?>
    <?php endif; ?>
    </td>
    <td align="center"><?php echo $this->_var['order']['order_time']; ?></td>
    <td align="center"><?php echo $this->_var['order']['order_username']; ?><br><span style="color:red;">(<?php echo $this->_var['order']['order_storagecode']; ?>)</span></td>
    <td align=center><?php echo $this->_var['tempShipment']; ?> 
<br>
<?php if ($this->_var['order']['order_time_request'] == 'normal' && $this->_var['order']['order_shipmentid'] == 2): ?>正常<?php else: ?><b>紧急</b><?php endif; ?><br>
        <?php if ($this->_var['order']['order_shipmentid'] == 2 && $this->_var['order']['dispatch_id']): ?>状态:<b><?php echo $this->_var['order']['dispatch_status']; ?></b><?php endif; ?>
	</td>
    <td align="center"><?php echo $this->_var['order']['consignee_name']; ?>[<?php echo $this->_var['temp']['country_name']; ?>]<br>(<?php echo $this->_var['order']['da_address']; ?>)</td>
    <td align="center"><?php echo $this->_var['order']['orderinsurace']; ?><?php echo $this->_var['order']['Name']; ?></td>
    <td align="center"><?php echo $this->_var['order']['totalprice']; ?><?php echo $this->_var['order']['Name']; ?><!-- default_name:修改为$order.Name --><br><?php echo $this->_var['lang']['countprice']; ?><?php echo $this->_var['order']['Code']; ?><?php echo $this->_var['order']['othercost']; ?></td>
	<td align="center"><?php echo $this->_var['order']['orderweight']; ?><?php echo $this->_var['weight_unit']; ?></td>
	<td align="center"><?php echo $this->_var['order']['HouseName']; ?><br><?php echo $this->_var['order']['pck_inventorylocation']; ?></td>
	<td align="center">
		<?php if ($this->_var['order']['order_paymentstatus']): ?><span style="color:green;"><?php echo $this->_var['lang']['paymented']; ?></span><?php else: ?><span style="color:#f60;"><?php echo $this->_var['lang']['unpayment']; ?></span><?php endif; ?>,
		<?php if ($this->_var['order']['order_isdelivery'] == 0): ?><span style="color:black;"><?php echo $this->_var['lang']['notpick']; ?></span>,
		<?php elseif ($this->_var['order']['order_isdelivery'] == 1): ?><span style="color:black;"><?php echo $this->_var['lang']['pick']; ?></span>,
		<?php elseif ($this->_var['order']['order_isdelivery'] == 2): ?><span style="color:black;"><?php echo $this->_var['lang']['processing']; ?></span>,
		<?php elseif ($this->_var['order']['order_isdelivery'] == 4): ?><span style="color:black;"><?php echo $this->_var['lang']['shipping_ready']; ?></span>,
		<?php elseif ($this->_var['order']['order_isdelivery'] == 51): ?><span style="color:black;"><?php echo $this->_var['lang']['shipping_part']; ?></span>,
		<?php elseif ($this->_var['order']['order_isdelivery'] == 5): ?><span style="color:green;"><?php echo $this->_var['lang']['shipped']; ?></span>,
            <?php elseif ($this->_var['order']['order_isdelivery'] == 6): ?><span style="color:green;"><?php echo $this->_var['lang']['finished']; ?></span>,
		<?php endif; ?>
		<?php if ($this->_var['order']['order_iscolsed']): ?><span style="color:red;"><?php echo $this->_var['lang']['colsed']; ?>,</span><?php endif; ?>
		<?php if ($this->_var['order']['order_printstatus'] == 1): ?><span style="color:green;"><?php echo $this->_var['lang']['print']; ?></span><?php else: ?><span style="color:red;"><?php echo $this->_var['lang']['unprint']; ?></span><?php endif; ?>
    </td>
    <td align="center" class="order" width="160px">
      <!-- <img src="images/orderseach.png" width="16" height="16" border="0" /> -->
      <a href="engrave_all_orders.php?act=order_view&order_id=<?php echo $this->_var['order']['order_id']; ?>" title="<?php echo $this->_var['lang']['view']; ?>"><?php echo $this->_var['lang']['view']; ?></a>
	  <?php if ($this->_var['order']['order_iscolsed'] == 0): ?>
	  <?php if ($this->_var['order']['order_isdelivery'] == 0): ?>
	  <!-- 配货 <img src="images/distribution.png" width="16" height="16" border="0" /> -->
         <a href="engrave_all_orders.php?act=distribution&order_id=<?php echo $this->_var['order']['order_id']; ?>" title="<?php echo $this->_var['lang']['distribution']; ?>"><?php echo $this->_var['lang']['distribution']; ?></a>
	  <?php elseif ($this->_var['order']['order_isdelivery'] == 1): ?>
	     <!-- <img src="images/pack.png" width="16" height="16" border="0" /> -->
	     <a href="engrave_all_orders.php?act=pack&order_paymentpath=<?php echo $this->_var['order']['order_paymentpath']; ?>&order_id=<?php echo $this->_var['order']['order_id']; ?>" title="<?php echo $this->_var['lang']['pack']; ?>"><?php echo $this->_var['lang']['pack']; ?></a>
		 <!-- <img src="images/print_distrib.png" width="16" height="16" border="0" /> -->
		 <!--<a href="engrave_all_orders.php" title="<?php echo $this->_var['lang']['print_distrib']; ?>"><?php echo $this->_var['lang']['print_distrib']; ?></a> -->
	  <?php elseif ($this->_var['order']['order_isdelivery'] == 2): ?> <!-- 处理中-->
	     <?php if ($this->_var['order']['order_paymentstatus'] == 0): ?>
            <!-- <img src="images/weight.png" width="16" height="16" border="0" /> -->
            <a href="engrave_all_orders.php?act=weight&order_id=<?php echo $this->_var['order']['order_id']; ?>" title="<?php echo $this->_var['lang']['weight']; ?>"><?php echo $this->_var['lang']['weight']; ?></a>
         <?php else: ?>
            <?php if ($this->_var['order']['order_shipmentid'] != 2): ?>
                <!-- <img src="images/deliver_goods.png" width="16" height="16" border="0" />  -->
                <a href="engrave_all_orders.php?act=delivery&order_id=<?php echo $this->_var['order']['order_id']; ?>" title="<?php echo $this->_var['lang']['deliver_goods']; ?>"><?php echo $this->_var['lang']['deliver_goods']; ?></a>
            <?php else: ?>
                <?php if ($this->_var['order']['dispatch_status'] == "已到港"): ?>
                <a href="engrave_all_orders.php?act=delivery&order_id=<?php echo $this->_var['order']['order_id']; ?>" title="<?php echo $this->_var['lang']['deliver_goods']; ?>"><?php echo $this->_var['lang']['deliver_goods']; ?></a>
                <?php else: ?>
                <a href="javascript:;" title="<?php echo $this->_var['lang']['deliver_goods']; ?>" style="border-color:red"><?php echo $this->_var['lang']['deliver_goods']; ?></a>
                <?php endif; ?>
            <?php endif; ?>
		 <?php endif; ?>
		 <a href="engrave_all_orders.php?act=print_orders&order_id=<?php echo $this->_var['order']['order_id']; ?>" title="<?php echo $this->_var['lang']['print_face']; ?>"><?php echo $this->_var['lang']['print_face']; ?></a> 
		 <!-- <img src="images/print_distrib.png" width="16" height="16" border="0" /> -->
		 <!--<a href="engrave_all_orders.php" title="<?php echo $this->_var['lang']['print_distrib']; ?>"><?php echo $this->_var['lang']['print_distrib']; ?></a>-->
	  <?php elseif ($this->_var['order']['order_isdelivery'] == 4 || $this->_var['order']['order_isdelivery'] == 51): ?><!--待发货 部分发货 -->
	     <?php if ($this->_var['order']['order_paymentstatus'] == 0): ?><!--未支付-->
            <!-- <img src="images/payment.png" width="16" height="16" border="0" /> -->
            <a href="engrave_all_orders.php?act=payment&order_id=<?php echo $this->_var['order']['order_id']; ?>" title="<?php echo $this->_var['lang']['payment']; ?>"><?php echo $this->_var['lang']['payment']; ?></a>
         <?php else: ?>
            <?php if ($this->_var['order']['order_shipmentid'] != 2): ?>
            <!-- <img src="images/deliver_goods.png" width="16" height="16" border="0" /> -->		 
            <a href="engrave_all_orders.php?act=delivery&order_id=<?php echo $this->_var['order']['order_id']; ?>" title="<?php echo $this->_var['lang']['deliver_goods']; ?>"><?php echo $this->_var['lang']['deliver_goods']; ?></a>
            <?php else: ?>
                <?php if ($this->_var['order']['dispatch_status'] == "已到港"): ?>
        <a href="engrave_all_orders.php?act=delivery&order_id=<?php echo $this->_var['order']['order_id']; ?>" title="<?php echo $this->_var['lang']['deliver_goods']; ?>"><?php echo $this->_var['lang']['deliver_goods']; ?></a>
                <?php else: ?>
                <a href="javascript:;" title="<?php echo $this->_var['lang']['deliver_goods']; ?>" style="border-color:red"><?php echo $this->_var['lang']['deliver_goods']; ?></a>
                <?php endif; ?>
            <?php endif; ?>
		 <?php endif; ?>
		 <!-- <img src="images/print_distrib.png" width="16" height="16" border="0" /> -->
		 <!--<a href="engrave_all_orders.php" title="<?php echo $this->_var['lang']['print_distrib']; ?>"><?php echo $this->_var['lang']['print_distrib']; ?></a>-->
	  <?php elseif ($this->_var['order']['order_isdelivery'] == 5): ?>
	     <a href="engrave_all_orders.php?act=delivery_update&order_id=<?php echo $this->_var['order']['order_id']; ?>" title="<?php echo $this->_var['lang']['deliver_goods_update']; ?>"><?php echo $this->_var['lang']['deliver_goods_update']; ?></a>
	  	 <!-- <img src="images/order_track.png" width="16" height="16" border="0" /> -->
	     <a href="engrave_all_orders.php?act=track&order_id=<?php echo $this->_var['order']['order_id']; ?>" title="<?php echo $this->_var['lang']['order_track']; ?>"><?php echo $this->_var['lang']['order_track']; ?></a>
	     <!-- <img src="images/print_face.gif" width="16" height="16" border="0" /> -->
		 <a href="engrave_all_orders.php?act=print_orders&order_id=<?php echo $this->_var['order']['order_id']; ?>" target="_blank" title="<?php echo $this->_var['lang']['print_face']; ?>"><?php echo $this->_var['lang']['print_face']; ?></a> 
		 <!-- <img src="images/print_distrib.png" width="16" height="16" border="0" /> -->
	  <?php elseif ($this->_var['order']['order_isdelivery'] == 6): ?>
	  <!-- <img src="images/search_comment.png" width="16" height="16" border="0" /> -->
	     <a href="engrave_all_orders.php" title="<?php echo $this->_var['lang']['search_comment']; ?>"><?php echo $this->_var['lang']['search_comment']; ?></a>
		 <a href="engrave_all_orders.php?act=print_orders&order_id=<?php echo $this->_var['order']['order_id']; ?>" target="_blank" title="<?php echo $this->_var['lang']['print_face']; ?>"><?php echo $this->_var['lang']['print_face']; ?></a> 
	  <?php endif; ?><!-- 打印配货单<img src="images/print_distrib.png" width="16" height="16" border="0" /> -->
	  <!-- href="engrave_all_orders.php?act=print_picking&order_id=<?php echo $this->_var['order']['order_id']; ?>&order_isdelivery=<?php echo $this->_var['order']['order_isdelivery']; ?>"  -->
		 <a href="javascript:void(0)" onclick="reload(<?php echo $this->_var['order']['order_id']; ?>,<?php echo $this->_var['order']['order_isdelivery']; ?>)" title="<?php echo $this->_var['lang']['print_distrib']; ?>"><?php echo $this->_var['lang']['print_distrib']; ?></a>
	  <?php endif; ?>
	   <a href="javascript:void(0)" onclick="openDiv('<?php echo $this->_var['order']['order_id']; ?>')"><?php echo $this->_var['lang']['upload_attach']; ?></a>
    </td>
  </tr>
  <?php endforeach; else: ?>
  <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
<!-- end package list -->

<!-- 分页-->
<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
    <?php echo $this->fetch('page.htm'); ?>
    </td>
  </tr>
</table>
<!-- 批量执行操作 -->
<table cellspacing="0">
  <tr>
	<td id="europen-line-actions" class="batch_operate">

	</td>
    <td align="right" class="batch_operate" nowrap="true">


    <span><input type="checkbox" id="sms_notice" name="sms_notice" checked="true"/><label for="sms_notice"><?php echo $this->_var['lang']['batch_sms_notice']; ?></label></span>
    <span><input type="checkbox" id="email_notice" name="email_notice" checked="true"/><label for="email_notice"><?php echo $this->_var['lang']['batch_email_notice']; ?></label></span>
    <a id="batch_delivery" href="javascript:void(0)" onclick="button_batch_delivery()" title="<?php echo $this->_var['lang']['batch_sendoutgoods']; ?>"><?php echo $this->_var['lang']['batch_sendoutgoods']; ?></a>
    <a id="batch_down_identity" href="engrave_package_list.php?act=batch_down_identity" onclick="return confirmFunction('batch_down_identity');" title="<?php echo $this->_var['lang']['batch_down_identity']; ?>"><?php echo $this->_var['lang']['batch_down_identity']; ?></a>
    
    <a id="batch_export_orderblank" href="" onclick="return confirmFunction('batch_export_orderblank');" title="<?php echo $this->_var['lang']['batch_export_orderblank']; ?>"><?php echo $this->_var['lang']['batch_export_orderblank']; ?></a>
    <!-- 
    <a id="batch_remove" href="engrave_package_list.php?act=batch_remove" onclick="return confirmFunction('remove');" title="<?php echo $this->_var['lang']['batch_export_customsclearance']; ?>"><?php echo $this->_var['lang']['batch_export_customsclearance']; ?></a>
      -->
    <a id="batch_print_orderblank" href="" onclick="return confirmFunction('batch_print_orderblank');" target="_blank" title="<?php echo $this->_var['lang']['batch_print_orderblank']; ?>"><?php echo $this->_var['lang']['batch_print_orderblank']; ?></a>
    <!-- 
    <a id="batch_remove" href="engrave_package_list.php?act=batch_remove" onclick="return confirmFunction('remove');" title="<?php echo $this->_var['lang']['batch_print_declaration']; ?>"><?php echo $this->_var['lang']['batch_print_declaration']; ?></a>
    -->
    <a id="batch_print_face" href="" target="_blank"  onclick="return button_batch_print_face('batch_follow');" title="<?php echo $this->_var['lang']['batch_print_face']; ?>"><?php echo $this->_var['lang']['batch_print_face']; ?></a>
    <a id="batch_follow" href="javascript:void(0)" onclick="return batch_follow('batch_follow');" title="<?php echo $this->_var['lang']['batch_follow']; ?>"><?php echo $this->_var['lang']['batch_follow']; ?></a>
    <a id="batch_remove" href="javascript:void(0)" onclick="button_batch_remove()" title="<?php echo $this->_var['lang']['batch_delete']; ?>"><?php echo $this->_var['lang']['batch_delete']; ?></a>
    </td>
  </tr>
</table>

<?php if ($this->_var['full_page']): ?>
</div>
</form>

<script type="text/javascript">
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  function reload(orderId,order_isdelivery)
  {
	  var url="engrave_all_orders.php?act=print_picking&order_id="+orderId+"&order_isdelivery="+order_isdelivery;
	  window.open(url, "_blank");

		setTimeout(function(){
			location.reload();
		},2000)
  }
  $('#make_dispatch_orders').on('click', make_dispatch_orders);
  function make_dispatch_orders(e){
	//Ajax.call( 'engrave_make_dispatch.php?act=batch_delivery', batch_delivery_callback , 'GET', 'TEXT', true, true );
     //  var url="engrave_make_dispatch.php";
     //  $('#listForm').attr('action', url);

	  //window.open(url, "", 'width=600,height=300');
      e.preventDefault();
      var order_id = getSelectedOrderIds();
      if(!order_id){
          alert(order_id_notnull);
          return false;
      }
      $.post('engrave_make_dispatch.php',{order_ids: order_id}, function(result) {
          console.log("engrave_make_dispatch:",result);
          var obj = eval('('+result+')');
          alert(obj.msg);

      });
        return false;
  }
  function getSelectedOrderIds() {
      var inputs = document.getElementsByName("checkboxes[]");
      var checked_counts = 0;
      var order_id='';
      for(var i=0;i<inputs.length;i++){
          if(inputs[i].checked){
              checked_counts++;
              order_id = order_id+inputs[i].value+',';
          }
      }
      order_id = order_id.substring(0, order_id.length-1);
      return order_id;
  }
  function confirmFunction(type) {

	var order_id = getSelectedOrderIds();
	if(order_id)
	{
		if(type=='batch_down_identity')
		{
			var obj = document.getElementById('batch_down_identity');
			obj.href="engrave_all_orders.php?act=batch_down_identity&order_id="+order_id;
		}
		else if(type=='batch_print_orderblank')
		{
			//配货单
			var obj = document.getElementById('batch_print_orderblank');
			obj.href="engrave_all_orders.php?act=print_picking&order_id="+order_id+"&order_isdelivery=1";

			setTimeout(function(){
				location.reload();
			},2000)
		}
		else if(type=='batch_export_orderblank'){
			//导出
			var obj = document.getElementById('batch_export_orderblank');
			obj.href="engrave_all_orders.php?act=button_batch_export_orderblank&order_id="+order_id;
		}
		else{
			if(confirm(instorage_ensure)){
				return true;
			}else{
				return false;
			}
		}
	}else{
		alert(order_id_notnull);
		return false;
	}
}
	  
  
 var index=10;
 function openDiv(id)
 {
 	index=10;
    var newMaskID = "mask";  //遮罩层id
    var  newMaskWidth =document.body.scrollWidth;//遮罩层宽度
    var  newMaskHeight =document.body.scrollHeight;//遮罩层高度    
    //mask遮罩层  
   var newMask = document.createElement("div");//创建遮罩层
  newMask.id = "shade_mask"+id;//设置遮罩层id
  newMask.style.position = "absolute";//遮罩层位置
  newMask.style.zIndex = "1";//遮罩层zIndex
  newMask.style.width = newMaskWidth + "px";//设置遮罩层宽度
  newMask.style.height = newMaskHeight + "px";//设置遮罩层高度
  newMask.style.top = "0px";//设置遮罩层于上边距离
  newMask.style.left = "0px";//设置遮罩层左边距离
  newMask.style.background = "#B3B3B3";//#33393C//遮罩层背景色
  newMask.style.filter = "alpha(opacity=40)";//遮罩层透明度IE
  newMask.style.opacity = "0.40";//遮罩层透明度FF
  document.body.appendChild(newMask);//遮罩层添加到DOM中

  //新弹出层
  var newDivWidth = 400;//新弹出层宽度
  var newDivHeight = 300;//新弹出层高度
  var newDiv = document.createElement("div");//创建新弹出层
  newDiv.id = "shade_div"+id;//设置新弹出层ＩＤ
  newDiv.style.overflow="auto";
  newDiv.style.position = "absolute";//新弹出层位置
  newDiv.style.zIndex = "9999";//新弹出层zIndex

  newDiv.style.width = newDivWidth + "px";//新弹出层宽度
  newDiv.style.height = newDivHeight + "px";//新弹出层高度
//新弹出层距离上边距离
  var newDivtop=(document.body.scrollTop +150);//document.body.scrollTop + document.body.clientHeight/2 - newDivHeight
  var newDivleft=(document.body.scrollLeft + document.body.clientWidth/2 
          - newDivWidth/2);//新弹出层距离左边距离
  newDiv.style.top = newDivtop+ "px";//新弹出层距离上边距离
  newDiv.style.left = newDivleft + "px";//新弹出层距离左边距离
  newDiv.style.background = "#FFFFFF";//新弹出层背景色
  newDiv.style.border = "1px solid #9DE3F1";///新弹出层边框样式
  newDiv.style.padding = "5px";//新弹出层
  document.body.appendChild(newDiv);//新弹出层添加到DOM中

  var form_file = document.createElement("form");
  form_file.action="engrave_all_orders.php?act=upload&order_id="+id;
  form_file.method="post";
  form_file.name="fileForm";
  form_file.enctype="multipart/form-data"
  
  newDiv.appendChild(form_file);
  
  //关闭新图层和mask遮罩层
  var divClose = document.createElement("div");
  divClose.href = "#";
  divClose.style.position = "absolute";//span位置
  divClose.style.left=newDivWidth -20 + "px";
  divClose.style.cursor="pointer";
  divClose.innerHTML = "关闭";
  divClose.onclick = function()//处理关闭事件
  {
      if(document.all)
      {
          window.detachEvent("onscroll",newDivCenter);
      }
      else
      {
          window.removeEventListener('scroll',newDivCenter,false);
      }
       document.body.removeChild(newMask);//移除遮罩层   
       document.body.removeChild(newDiv);////移除弹出框
      return false;
   }
  form_file.appendChild(divClose);//添加关闭span

  //提交表单
  var divSubmit = document.createElement("input");
  divSubmit.type="submit"
  divSubmit.style.position = "absolute";//span位置
  divSubmit.style.left=newDivWidth/2-10 + "px";
  divSubmit.style.bottom=5 + "px";
  divSubmit.style.cursor="pointer";
  divSubmit.style.width="60px";
  divSubmit.name="submit";
  divSubmit.value = "提交";
  form_file.appendChild(divSubmit);//添加关闭span
   
   var div_File=document.createElement("div");
   form_file.appendChild(div_File);
   var file1=document.createElement("input");
   file1.type="file";
   file1.name="file1";
   form_file.appendChild(file1);
   var index=1;
   var newFile=document.createElement("input");
   newFile.type="button";
   newFile.value="添加上传文件";
   newFile.onclick=function()
   {
 	  var file=document.createElement("input");
 	  file.type="file";
 	  file.name="file"+(index+1);
 	  form_file.appendChild(file);
 	  var removeFile=document.createElement("input");
 	  removeFile.type="button";
 	  removeFile.value="移除";
 	  removeFile.onclick=function()
 	  {
 		  form_file.removeChild(file);
 		  form_file.removeChild(removeFile);
 	  }
 	  form_file.appendChild(removeFile);
   }
   div_File.appendChild(newFile);
   
  
  //弹出层滚动居中
  function newDivCenter()
  {
     newDiv.style.top = (document.body.scrollTop +150) + "px";//document.body.scrollTop + document.body.clientHeight/2 
        //- newDivHeight
     newDiv.style.left = (document.body.scrollLeft + document.body.clientWidth/2
              - newDivWidth/2) + "px";
  }
  if(document.all)//处理滚动事件，使弹出层始终居中
  {
      window.attachEvent("onscroll",newDivCenter);
  }
  else
  {
      window.addEventListener('scroll',newDivCenter,false);
  }

 }

 /********************************************************************
  * 批量跟踪
  *******************************************************************/
 function batch_follow(pck_id)
 {
     var order_id = getSelectedOrderIds();
     if(!order_id){
         alert(order_id_notnull);
         return false;
     }
		
	var newMaskID = "mask";  //遮罩层id
	var newMaskWidth =document.body.scrollWidth;//遮罩层宽度
	var newMaskHeight =document.body.scrollHeight;//遮罩层高度    
	//mask遮罩层  
	var newMask = document.createElement("div");//创建遮罩层
	newMask.id = "shade_mask"+pck_id;//设置遮罩层id
	newMask.style.position = "absolute";//遮罩层位置
	newMask.style.zIndex = "1";//遮罩层zIndex
	newMask.style.width = newMaskWidth + "px";//设置遮罩层宽度
	newMask.style.height = newMaskHeight + "px";//设置遮罩层高度
	newMask.style.top = "0px";//设置遮罩层于上边距离
	newMask.style.left = "0px";//设置遮罩层左边距离
	newMask.style.background = "#B3B3B3";//#33393C//遮罩层背景色
	newMask.style.filter = "alpha(opacity=40)";//遮罩层透明度IE
	newMask.style.opacity = "0.40";//遮罩层透明度FF
	document.body.appendChild(newMask);//遮罩层添加到DOM中

	//新弹出层
	var newDivWidth = 400;//新弹出层宽度
	var newDivHeight = 300;//新弹出层高度
	var newDiv = document.createElement("div");//创建新弹出层
	newDiv.id = "shade_div"+pck_id;//设置新弹出层ＩＤ
	newDiv.style.overflow="auto";
	newDiv.style.position = "absolute";//新弹出层位置
	newDiv.style.zIndex = "9999";//新弹出层zIndex
	
	newDiv.style.width = newDivWidth + "px";//新弹出层宽度
	newDiv.style.height = newDivHeight + "px";//新弹出层高度
	var newDivtop=(document.body.scrollTop +150) ;//新弹出层距离上边距离
	var newDivleft=(document.body.scrollLeft + document.body.clientWidth/2 - newDivWidth/2);//新弹出层距离左边距离
	newDiv.style.top = newDivtop+ "px";//新弹出层距离上边距离
	newDiv.style.left = newDivleft + "px";//新弹出层距离左边距离
	newDiv.style.background = "#FFFFFF";//新弹出层背景色
	newDiv.style.border = "1px solid #9DE3F1";///新弹出层边框样式
	newDiv.style.padding = "5px";//新弹出层
	document.body.appendChild(newDiv);//新弹出层添加到DOM中
	
	var form_file = document.createElement("form");
	form_file.action="engrave_package_list.php?act=upload";
	form_file.method="post";
	form_file.name="fileForm";
	form_file.enctype="multipart/form-data"
	newDiv.appendChild(form_file);
  
	//关闭新图层和mask遮罩层
	var divClose = document.createElement("div");
	divClose.href = "#";
	divClose.style.position = "absolute";//span位置
	divClose.style.left=newDivWidth -60 + "px";
	divClose.style.cursor="pointer";
	divClose.style.width="60px";
	divClose.innerHTML = "关闭";
	divClose.onclick = function()//处理关闭事件
	{
	    if(document.all)
	    {
	        window.detachEvent("onscroll",newDivCenter);
	    }
	    else
	    {
	        window.removeEventListener('scroll',newDivCenter,false);
	    }
	    document.body.removeChild(newMask);//移除遮罩层   
	    document.body.removeChild(newDiv);////移除弹出框
	    return false;
	}
	form_file.appendChild(divClose);//添加关闭span
   
	var div_batch_follow = 
	'<div id="div_batch_follow"'+
	'<div>'+
		'<span id="order_id" style="color:red;">当前操作订单ID：'+order_id+'</span>'+
	'</div>'+
	'</div><div>'+
		'<textarea id="follow_content" name="follow_content"></textarea>'+
		'<select onchange="select_follow_content(this.options[this.options.selectedIndex].text)">'+
			'<option value=0>请选择</option>'+
			'<option value=1>123</option>'+
			'<option value=2>456</option>'+
			'<option value=3>789</option>'+
		'</select>'+
	'<div><input type="button" value="提交" onclick="button_batch_follow('+order_id+')"></input></div>'+
	'</div>';
	
	var divContent = document.createElement("div");
	//var table_batch_follow = document.getElementById('div_batch_follow');
	//table_batch_follow.innerHTML = table_batch_follow.innerHTML.replace(/style='display:none;'/,'');
	divContent.innerHTML=div_batch_follow;//table_batch_follow.innerHTML;
	form_file.appendChild(divContent);//添加关闭span
	//弹出层滚动居中
	function newDivCenter()
	{
	   newDiv.style.top = (document.body.scrollTop +150) + "px";
	   newDiv.style.left = (document.body.scrollLeft + document.body.clientWidth/2
	            - newDivWidth/2) + "px";
	}
	if(document.all)//处理滚动事件，使弹出层始终居中
	{
	    window.attachEvent("onscroll",newDivCenter);
	}
	else
	{
	    window.addEventListener('scroll',newDivCenter,false);
	}
 }

 function close_shade(id)
 {
	var newMask = document.getElementById('shade_mask'+id);
	var newDiv = document.getElementById('shade_div'+id);
    document.body.removeChild(newMask);//移除遮罩层   
    document.body.removeChild(newDiv);////移除弹出框
 }

 function select_follow_content(value)
 {
	  var follow_content = document.getElementById('follow_content');
	  follow_content.innerText = value;
 }
 
 function button_batch_follow(order_id)
 {
	  var follow_content = document.getElementById('follow_content').value;
	  Ajax.call( 'engrave_all_orders.php?act=batch_follow', 'order_id=' + order_id+'&follow_content='+follow_content, batch_follow_callback , 'GET', 'TEXT', true, true );
 }
 
 /**
  * 验证：批量跟踪-回调函数
  * @param result
  */
 function batch_follow_callback(result,txt)
 {
	 var obj = eval('('+result+')');
	 if (parseInt(obj.error) > 0)
	 {
	   alert(obj.message);
	 }
	 else
	 {
		 close_shade('batch_follow');
	 }
 }

 /********************************************************************
  * ------批量跟踪
  *******************************************************************/
  
  /********************************************************************
   * ------批量导出配货信息
   *******************************************************************/
   function button_batch_export_orderblank()
   {
       var order_id = getSelectedOrderIds();
       if(!order_id){
           alert(order_id_notnull);
           return false;
       }
	  	Ajax.call( 'engrave_all_orders.php?act=button_batch_export_orderblank', 'order_id=' + order_id, button_batch_export_orderblank_callback , 'GET', 'TEXT', true, true );
   }
  /********************************************************************
   * ------批量导出配货信息
   *******************************************************************/
   
  
  /********************************************************************
   * ------批量移除
   *******************************************************************/
   function button_batch_remove()
   {
       var order_id = getSelectedOrderIds();
       if(!order_id){
           alert(order_id_notnull);
           return false;
       }
		if(confirm(is_confim_remove))
		{
	  	  	Ajax.call( 'engrave_all_orders.php?act=batch_remove', 'order_id=' + order_id, batch_remove_callback , 'GET', 'TEXT', true, true );
		}
   }
   
   /**
    * 验证：批量移除-回调函数
    * @param result
    */
   function batch_remove_callback(result,txt)
   {
  	 var obj = eval('('+result+')');
  	 if (parseInt(obj.error) > 0)
  	 {
  	   alert(obj.message);
  	 }
  	 else
  	 {
  		try
        {
          document.getElementById('listDiv').innerHTML = obj.content;

          if (typeof result.filter == "object")
          {
            listTable.filter = obj.filter;
          }

          listTable.pageCount = obj.page_count;
        }
        catch (e)
        {
          alert(e.message);
        }
  	 }
   }
  /********************************************************************
   * ------批量移除
   *******************************************************************/
   

   /********************************************************************
    * ------批量发货
    *******************************************************************/
    function button_batch_delivery()
    {

 		var order_id = getSelectedOrderIds();
        if(!order_id){
            alert(order_id_notnull);
            return false;
        }
 		if(confirm(is_confim_delivery))
 		{
 	  	  	Ajax.call( 'engrave_all_orders.php?act=batch_delivery', 'order_id=' + order_id, batch_delivery_callback , 'GET', 'TEXT', true, true );
 		}
    }
    
    /**
     * 验证：批量发货-回调函数
     * @param result
     */
    function batch_delivery_callback(result,txt)
    {
   	 var obj = eval('('+result+')');
   	 if (parseInt(obj.error) > 0)
   	 {
   	   alert(obj.message);
   	 }
   	 else
   	 {
   		try
         {
           document.getElementById('listDiv').innerHTML = obj.content;

           if (typeof result.filter == "object")
           {
             listTable.filter = obj.filter;
           }

           listTable.pageCount = obj.page_count;
         }
         catch (e)
         {
           alert(e.message);
         }
   	 }
    }
   /********************************************************************
    * ------批量发货
    *******************************************************************/
   

    /********************************************************************
     * ------批量打印面单
     *******************************************************************/
     function button_batch_print_face()
     {
  		 //获取所选复选框
  		var inputs = document.getElementsByName("checkboxes[]");
  		var checked_counts = 0;
  		var order_id='';
  		for(var i=0;i<inputs.length;i++){
  			if(inputs[i].checked){
  				checked_counts++;
  				order_id = order_id+inputs[i].value+',';
  			}
  		}
  		if(checked_counts <= 0){
  			alert(order_id_notnull);
  			return false;
  		}
  		order_id = order_id.substring(0, order_id.length-1);
  		

		var obj = document.getElementById('batch_print_face');
		obj.href="engrave_all_orders.php?act=print_orders&order_id="+order_id;
     }
    /********************************************************************
     * ------批量打印面单
     *******************************************************************/
  
  onload = function()
  {
    startCheckOrder(); 
    document.forms['listForm'].reset();
  }
  
</script>
<?php echo $this->fetch('engrave_pagefooter.htm'); ?>
<?php endif; ?>