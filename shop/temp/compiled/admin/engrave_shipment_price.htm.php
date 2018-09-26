<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<?php echo $this->fetch('engrave_tip.htm'); ?>
<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
	<!-- start currecys list -->
	<div class="list-div" id="listDiv">
		<table cellpadding="3" cellspacing="1">
		  <tr>
		    <th>
		      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
		      <a href="javascript:listTable.sort('CId'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_CId']; ?>
			</th>
			<th width=100> 出发地</th>
		    <th  width=100> 物流</th>
			<th  width=100> 到达地 </th>
			<th> 类型 </th>
		    <th>价格配置 </th>

		    <th><?php echo $this->_var['lang']['handler']; ?></th>
		  </tr>
		  <?php $_from = $this->_var['data_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipment');if (count($_from)):
    foreach ($_from AS $this->_var['shipment']):
?>
		  <tr>
		    <td style="width:50px;" align="center">
		    	<?php echo $this->_var['shipment']['sp_id']; ?>
			</td>
			<td align="center">




				<?php if ($this->_var['shipment']['price_type'] == 'from-china-to-europ-partition'): ?>
				中国
				<?php elseif ($this->_var['shipment']['price_type'] == 'from-china-to-europ-partition-cost'): ?>
					<?php $this->assign('temp',$this->_var['leave_ports'][$this->_var['shipment']['lp_id']]); ?>
					<?php echo $this->_var['temp']['port_name']; ?>
				<?php elseif ($this->_var['shipment']['price_type'] == 'from-china-to-europ-port-cost'): ?>
					<?php echo $this->_var['shipment']['leave_port_name']; ?>	
				<?php else: ?>
					<!-- <span><?php echo $this->_var['shipment']['leave_port_name']; ?></span> -->
					<?php $this->assign('temp',$this->_var['arrival_ports'][$this->_var['shipment']['lp_id']]); ?>
					<?php echo $this->_var['temp']['port_name']; ?>
				<?php endif; ?>
			</td>
			<td align="center">
		    	<span><?php echo $this->_var['shipment']['shipment']['shipment_name']; ?></span>
		    </td>
	
		 
		    <td align="center">
				<?php if ($this->_var['shipment']['price_type'] == 'from-china-to-europ-partition'): ?>
					<?php $this->assign('temp',$this->_var['allCountryPartitions'][$this->_var['shipment']['cp_id']]); ?>
					<?php echo $this->_var['temp']['cp_name']; ?> <br>
					<font color=red><?php echo $this->_var['temp']['country_list']; ?></font>
				<?php elseif ($this->_var['shipment']['price_type'] == 'from-china-to-europ-port-cost'): ?>
					<?php echo $this->_var['shipment']['arrival_port_name']; ?>	
				<?php else: ?>
					<!-- <span><?php echo $this->_var['shipment']['partition']['cp_name']; ?></span> -->
					<?php $this->assign('temp',$this->_var['allCountries'][$this->_var['shipment']['country_id']]); ?>
					<?php echo $this->_var['temp']['country_name']; ?>
				<?php endif; ?>
			</td>
			<td align="center">
				<?php if ($this->_var['shipment']['price_type'] == 'from-china-to-europ-partition'): ?>
				从中国出发到欧洲国家分区(客户报价)
				<?php elseif ($this->_var['shipment']['price_type'] == 'from-china-to-europ-partition-cost'): ?>
				从中国出发到欧洲国家(成本)<br>(四大国际快递的运输成本)
				<?php elseif ($this->_var['shipment']['price_type'] == 'from-china-to-europ-port-cost'): ?>
				从中国出发到欧洲港口(成本)<br>(欧洲专线的空运成本)
				<?php else: ?>
				从欧洲港口到欧洲国家(成本)<br>(欧洲专线 到港后选择的快递公司的运费)
				<?php endif; ?>
			</td>


			<td align="center">
				<?php if (( $this->_var['shipment']['price_type'] == 'from-europ-port-to-country' || $this->_var['shipment']['price_type'] == 'from-china-to-europ-partition-cost' || $this->_var['shipment']['price_type'] == 'from-china-to-europ-port-cost' )): ?>
				<table class="commontable">
						<thead>
							<th colspan=1>0kg -- 0.5kg</th>
							<th colspan=2>0.5kg -- 10kg</th>
							<th colspan=4>>10kg</th>
						</thead>
						<thead>
								<th>[0, 0.5]kg</th>
								<th>(0.5, 3.0]kg</th>
								<th>(3.0, 10.0]kg</th>
								<th>(10.0, 15.0]kg</th>
								<th>(15.0, 20.0]kg</th>
								<th>(20.0, 30.0]kg</th>
								<th>(30.0, +∞)kg</th>
						</thead>
						<tr>
							<td align=center>
								<?php echo $this->_var['shipment']['config']['price0']['value']; ?>
							</td>
							<td align=center>
									<?php echo $this->_var['shipment']['config']['price1']['value']; ?>
							</td>
							<td align=center>
									<?php echo $this->_var['shipment']['config']['price2']['value']; ?>
							</td>
							<td align=center>
									
									<?php if ($this->_var['shipment']['config']['price3']['add']): ?>
									每0.5kg增加的价格: 
									<?php endif; ?>
									<?php echo $this->_var['shipment']['config']['price3']['value']; ?>
							</td>
							<td align=center>
							
									<?php if ($this->_var['shipment']['config']['price4']['add']): ?>
									每0.5kg增加的价格: 	
									<?php endif; ?>
									<?php echo $this->_var['shipment']['config']['price4']['value']; ?>
									
								
							</td>
							<td align=center>
								
									<?php if ($this->_var['shipment']['config']['price5']['add']): ?>
									每0.5kg增加的价格: 	
									<?php endif; ?>
									<?php echo $this->_var['shipment']['config']['price5']['value']; ?>
							</td>
							<td align=center>
									<?php if ($this->_var['shipment']['config']['price6']['add']): ?>
									每0.5kg增加的价格: 
									<?php endif; ?>
									<?php echo $this->_var['shipment']['config']['price6']['value']; ?>
							</td>
						</tr>
					</table>
				<?php else: ?>
					<table class="commontable">
						<thead>
							<th colspan=2>文件和小包裹</th>
							<th colspan=4>大包裹（每kg/元）</th>
						</thead>
						<thead>
								<th>首重0.5kg</th>
								<th>续重每0.5kg</th>
								<th>10~20kg</th>
								<th>21~50kg</th>
								<th>51~100kg</th>
								<th>101kg以上</th>
						</thead>
						<tr>
							<td align=center>
							<?php echo $this->_var['shipment']['config']['less_eq_half_kg']; ?>
							</td>
							<td align=center>
								<?php echo $this->_var['shipment']['config']['add_half_kg']; ?>
							</td>
							<td align=center>
								<?php echo $this->_var['shipment']['config']['ten_twenty_kg']; ?>
							</td>
							<td align=center>
								<?php echo $this->_var['shipment']['config']['twentyone_fifty_kg']; ?>
							</td>
							<td align=center>
								<?php echo $this->_var['shipment']['config']['fiftyone_hundred_kg']; ?>
							</td>
							<td align=center>
								<?php echo $this->_var['shipment']['config']['greater_hundredone_kg']; ?>
							</td>
						</tr>
					</table>
				<?php endif; ?>
		    </td>
		    <td align="center" style="width:150px; padding:0px; margin:0px">
				<a href="engrave_shipment_price.php?act=edit&sp_id=<?php echo $this->_var['shipment']['sp_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>

				<a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['country']['apt_id']; ?>,'<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16" /></a>
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