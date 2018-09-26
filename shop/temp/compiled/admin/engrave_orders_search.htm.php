<!-- $Id: goods_search.htm 16790 2009-11-10 08:56:15Z wangleisvn $ -->
<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<div class="form-div">
  <form name="searchForm" style="padding:0px; margin:0px;">
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    <?php echo $this->_var['lang']['services']; ?><select name="services_id">
    	<option value="0"><?php echo $this->_var['lang']['unlimited']; ?></option>
		<option value="1"><?php echo $this->_var['lang']['origin_box']; ?></option>
		<option value="2"><?php echo $this->_var['lang']['together_box']; ?></option>
		<option value="3"><?php echo $this->_var['lang']['separ_box']; ?></option>
		</select>
    <?php echo $this->_var['lang']['order_no']; ?>：<input type="text" name="orderno" id="orderno" size="10" />
	物流单号：<input type="text" name="expressnumber" id="expressnumber" size="10" />
	<br><br/>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['paymoneny']; ?>：<select name="paymentstatus">
		<option value="0"><?php echo $this->_var['lang']['all']; ?></option>
		<option value="1"><?php echo $this->_var['lang']['unpayment']; ?></option>
		<option value="2"><?php echo $this->_var['lang']['paymented']; ?></option>
		</select>
    <?php echo $this->_var['lang']['deliver_goods']; ?>：<select name="deliverygoods">
    	<option value="0"><?php echo $this->_var['lang']['all']; ?></option>
		<option value="1"><?php echo $this->_var['lang']['unshipped']; ?></option>
		<option value="2"><?php echo $this->_var['lang']['shipped']; ?></option>
		<option value="3"><?php echo $this->_var['lang']['shipping']; ?></option>
		<option value="4"><?php echo $this->_var['lang']['pick']; ?></option>
		</select>
    <?php echo $this->_var['lang']['statesment']; ?>：<select name="statesment">
    	<option value="0"><?php echo $this->_var['lang']['all']; ?></option>
		<option value="1"><?php echo $this->_var['lang']['normal']; ?></option>
		<option value="2"><?php echo $this->_var['lang']['colsed']; ?></option>
		<option value="3"><?php echo $this->_var['lang']['finished']; ?></option>
		</select>
	<?php echo $this->_var['lang']['orderprint_states']; ?>：<select name="orderprintstates">
		<option value="0"><?php echo $this->_var['lang']['unlimited']; ?></option>
		<option value="1"><?php echo $this->_var['lang']['unprint']; ?></option>
		<option value="2"><?php echo $this->_var['lang']['print']; ?></option>
		</select>
    <br><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发票：<select name="order_needinvoice">
	  <option value="0"><?php echo $this->_var['lang']['unlimited']; ?></option>
	  <option value="1">要开</option>
	  <option value="2">个人</option>
	  <option value="3">企业</option>

  </select>
	  发票抬头：<input type="text" name="invoice_title" id="invoice_title" size="10" />
    <!-- <?php echo $this->_var['lang']['consignment']; ?>：<select name="consignment"><option value="0"><?php echo $this->_var['lang']['unlimited']; ?></option><?php echo $this->html_options(array('options'=>$this->_var['shipping_list'])); ?></select><br/><br/> -->
	物流：<select name="shipment_id"><option value="0"><?php echo $this->_var['lang']['unlimited']; ?></option><?php echo $this->html_options(array('options'=>$this->_var['allShipments'])); ?></select>
	时效: <select name="order_time_request">
		<option value=all>不限</option>	
		<option value=normal>正常</option>
		<option value=urgent>紧急</option>

	</select>
	<br/><br/>
    
    
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['buyers']; ?>：<input type="text" name="buyers" id="buyers" size="10" />
	<?php echo $this->_var['lang']['storage_no']; ?>：<input type="text" name="storageno" id="storageno" size="12" />
    <?php echo $this->_var['lang']['order_time']; ?>：<select name="ordertime">
    	<option value="0"><?php echo $this->_var['lang']['selectquick']; ?></option>
		<option value="1"><?php echo $this->_var['lang']['sameday']; ?></option>
		<option value="2"><?php echo $this->_var['lang']['within24hours']; ?></option>
		<option value="3"><?php echo $this->_var['lang']['in7days']; ?></option>
		<option value="4"><?php echo $this->_var['lang']['thisweek']; ?></option>
		<option value="5"><?php echo $this->_var['lang']['thismonth']; ?></option>
		<option value="6"><?php echo $this->_var['lang']['thisyear']; ?></option>
		</select>
    &nbsp;&nbsp;<input name="start_date" style="width:90px;" onclick="return showCalendar(this, '%Y-%m-%d', false, false, this);" />
    -
    <input name="end_date" style="width:90px;" onclick="return showCalendar(this, '%Y-%m-%d', false, false, this);" />
	<?php echo $this->_var['lang']['consignee']; ?>：<input type="text" name="consignee" id="consignee" size="10" />
	<?php echo $this->_var['lang']['waybill_no']; ?>：<input type="text" name="waybillno" id="waybillno" size="12" /><br/><br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['paging']; ?>：<input type="text" name="paging" id="paging" value="15" size="10" />
	<?php echo $this->_var['lang']['sorting']; ?>：<select name="sort_id"><option value="0"><?php echo $this->_var['lang']['ordernodesc']; ?></option><option value="1"><?php echo $this->_var['lang']['storagenoasc']; ?></option></select>
	<?php echo $this->_var['lang']['WaybillName']; ?>：<select name="waybillname"><option value="0"><?php echo $this->_var['lang']['unlimited']; ?></option><?php echo $this->html_options(array('options'=>$this->_var['waybill_list'])); ?></select>
	&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="searchOrders();" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="searchAllOrders();" value="<?php echo $this->_var['lang']['button_allorder']; ?>" class="button" />
	<input type="button" onclick="europenOrders();" value="欧洲专线订单" class="button" />
  </form>
</div>


<script language="JavaScript">
    function searchOrders()
    {
        listTable.filter['services_id'] = document.forms['searchForm'].elements['services_id'].value;
        listTable.filter['order_no'] = Utils.trim(document.forms['searchForm'].elements['orderno'].value);
        listTable.filter['expressnumber'] = Utils.trim(document.forms['searchForm'].elements['expressnumber'].value);
        listTable.filter['paymentstatus'] = document.forms['searchForm'].elements['paymentstatus'].value;
        listTable.filter['deliverygoods'] = document.forms['searchForm'].elements['deliverygoods'].value;
	    listTable.filter['statesment'] = document.forms['searchForm'].elements['statesment'].value;
        listTable.filter['orderprintstates'] = document.forms['searchForm'].elements['orderprintstates'].value;
	    //listTable.filter['consignment'] = document.forms['searchForm'].elements['consignment'].value;
		listTable.filter['buyers'] = Utils.trim(document.forms['searchForm'].elements['buyers'].value);
		listTable.filter['storageno'] = Utils.trim(document.forms['searchForm'].elements['storageno'].value);
		listTable.filter['ordertime'] = document.forms['searchForm'].elements['ordertime'].value;
		listTable.filter['start_date'] = Utils.trim(document.forms['searchForm'].elements['start_date'].value);
		listTable.filter['end_date'] = Utils.trim(document.forms['searchForm'].elements['end_date'].value);
		listTable.filter['consignee'] = Utils.trim(document.forms['searchForm'].elements['consignee'].value);
		listTable.filter['waybillno'] = Utils.trim(document.forms['searchForm'].elements['waybillno'].value);
		listTable.filter['page_size'] = Utils.trim(document.forms['searchForm'].elements['paging'].value);
		listTable.filter['sort_id'] = document.forms['searchForm'].elements['sort_id'].value;
		listTable.filter['order_needinvoice'] = document.forms['searchForm'].elements['order_needinvoice'].value;
		listTable.filter['waybillname'] = document.forms['searchForm'].elements['waybillname'].value;
		listTable.filter['invoice_title'] = document.forms['searchForm'].elements['invoice_title'].value;
		listTable.filter['shipment_id'] = document.forms['searchForm'].elements['shipment_id'].value;
		listTable.filter['order_time_request'] = document.forms['searchForm'].elements['order_time_request'].value;
		window.isShowEuropenOrders = false;
        listTable.loadList();
    }
	function searchAllOrders()
	{
		window.isShowEuropenOrders = false;
		listTable.loadList();
	}
	function europenOrders() {
		listTable.filter['shipment_id'] = 2;
		window.isShowEuropenOrders = true;
		listTable.loadList();
	}
</script>
