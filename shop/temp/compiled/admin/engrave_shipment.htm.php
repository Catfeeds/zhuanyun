<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
<div class="main-div">
	<p style="padding: 0 10px">
	时效指数 : [0,10] 反应真实的时效效果,值越大,时效性越好. 
	</p>
</div>
	<!-- start currecys list -->
	<div class="list-div" id="listDiv">
		<table cellpadding="3" cellspacing="1">
		  <tr>
		    <th>
		      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
		      <a href="javascript:listTable.sort('CId'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_CId']; ?>
		    </th>
		    <th> 名称</th>
		    <th> 代号 </th>
		    <th> 种类 </th>
				<th> 时效 </th>
				<th> 时效指数 </th>
				<th> 描述 </th>
				<th> 价格折扣 </th>
				<th> 默认燃油费率% </th>
			  <!--<th> 体积重量系数 mm^3==>g </th>-->
				<th> 状态 </th>
		    <th><?php echo $this->_var['lang']['handler']; ?></th>
		  </tr>
		  <?php $_from = $this->_var['data_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipment');if (count($_from)):
    foreach ($_from AS $this->_var['shipment']):
?>
		  <tr>
		    <td style="width:50px;" align="center">
		    	<?php echo $this->_var['shipment']['shipment_id']; ?>
		    </td>
		    <td align="center">
		    	<span><?php echo $this->_var['shipment']['shipment_name']; ?></span>
		    </td>
		 
		    <td align="center">
		    	<span><?php echo $this->_var['shipment']['shipment_code']; ?></span>
				</td>
				<td align="center">
		    	<span>
						<?php if ($this->_var['shipment']['shipment_type'] == 'america'): ?> 美洲专线 <?php endif; ?>
						<?php if ($this->_var['shipment']['shipment_type'] == 'europe'): ?> 欧洲专线 <?php endif; ?>
						</span>
		    </td>
				<td align="center">
		    	<span><?php echo $this->_var['shipment']['min_day']; ?>天 - <?php echo $this->_var['shipment']['max_day']; ?>天</span>
				</td>
				<td align="center">
		    	<span><?php echo $this->_var['shipment']['effect_value']; ?></span>
				</td>
				<td align="center">
		    	<span><?php echo $this->_var['shipment']['description']; ?></span>
				</td>
				<td align="center">
		    	<span><?php echo $this->_var['shipment']['discount']; ?></span>
				</td>

			  <td align="center">
				  <span><?php echo $this->_var['shipment']['default_oil_fee_rate']; ?></span>
			  </td>
			  <!--<td align="center">-->
				  <!--<span><?php echo $this->_var['shipment']['v_value']; ?></span>-->
			  <!--</td>-->
				<td align="center">
		    	<span><?php echo $this->_var['shipment']['status']; ?></span>
				</td>

				
		    <td align="center" style="width:150px; padding:0px; margin:0px">
						<a href="engrave_shipment.php?act=edit&shipment_id=<?php echo $this->_var['shipment']['shipment_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
		    </td>
		  </tr>
		  <?php endforeach; else: ?>
		  <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
		  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</table>	

		<?php echo $this->fetch('engrave_page.htm'); ?>


	</div>
 </form>
 <script type="text/javascript">
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;
</script>
<?php echo $this->fetch('engrave_pagefooter.htm'); ?>