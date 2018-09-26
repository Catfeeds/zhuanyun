<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<h4>
	<span class='span-tip-header'>提醒：</span>
	<span class="span-tip">航班信息关系到欧洲专线的运算,请确保至少三天内的航班存在.
	</span>
</h4>

<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<form method="post" action="" name="listForm" >
	<!-- start currecys list -->
	<div class="list-div" id="listDiv">
		<table cellpadding="3" cellspacing="1">
		  <tr>
		    <th>
		      <input onclick='listTable.selectAll(this, "checkboxes")'  type="checkbox" />
		      <a  ><?php echo $this->_var['lang']['record_id']; ?></a>
		    </th>
			<th> 航空公司</th>
		
			<th> 出发地 - 到达地</th>
			<th> 航班号</th>
			<th> 出发时间-到达时间</th>
			<th> 天数/时长</th>
			<th>直飞(D)/中转(T)</th>
			<th>中转地</th>
			<th> 价格模板 </th>
			<th>状态</th>
		
			<th><?php echo $this->_var['lang']['handler']; ?></th>
		  </tr>
		  <?php $_from = $this->_var['data_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
		  <tr>
		    <td style="width:50px;" align="center">
		    	<?php echo $this->_var['country']['flight_id']; ?>
		    </td>
		    <td align="center">
					<?php $this->assign('temp',$this->_var['airlines'][$this->_var['country']['airline_id']]); ?>
		    	<span><?php echo $this->_var['temp']['airline_name']; ?>(<?php echo $this->_var['temp']['airline_short_en_name']; ?>) </span>
		    </td>
		 
		    
				<td align="center">
						<?php $this->assign('temp',$this->_var['leave_ports'][$this->_var['country']['lp_id']]); ?>
						
					<span>
							<?php echo $this->_var['temp']['port_name']; ?> -
							<?php $this->assign('temp',$this->_var['arrival_ports'][$this->_var['country']['ap_id']]); ?>
							<?php echo $this->_var['temp']['port_name']; ?>
					</span>
				</td>
				<td align="center">
						<span><?php echo $this->_var['country']['flight_no']; ?></span>
					</td>
		    <td align="center" style="width:150px; padding:0px; margin:0px">
				<?php echo $this->_var['country']['leave_date']; ?> <?php echo $this->_var['country']['leave_time']; ?> <span class="toupper"><?php echo $this->_var['country']['leave_ampm']; ?></span>-  <?php echo $this->_var['country']['arrival_time']; ?>
				</td>
				<td align="center" style="width:150px; padding:0px; margin:0px">
						<?php echo $this->_var['country']['days']; ?> /  <?php echo $this->_var['country']['hours']; ?>
				</td>
				<td align="center">
						<span><?php echo $this->_var['country']['is_direct']; ?></span>
				</td>
				<td align="center">
						<span><?php echo $this->_var['country']['trans_city']; ?></span>
				</td>
				<td align="center">
					<?php $this->assign('temp',$this->_var['allPriceTemplate'][$this->_var['country']['apt_id']]); ?>
					<span><?php echo $this->_var['temp']['name']; ?></span>
				</td>
				<td align="center">
						
						<img src="images/<?php if ($this->_var['country']['status'] == 'enable'): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.toggle(this, 'toggle_status', <?php echo $this->_var['country']['flight_id']; ?>)" />
				</td>
				<td align="center" style="width:150px; padding:0px; margin:0px">
						<a href="engrave_airline_flight.php?act=edit&amp;id=<?php echo $this->_var['country']['flight_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
			
						<a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['country']['apt_id']; ?>,'<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16" /></a>
		</td>
		  </tr>
		  <?php endforeach; else: ?>
		  <tr><td class="no-records" colspan="11"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
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