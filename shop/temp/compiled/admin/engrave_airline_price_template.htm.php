<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<h4>
	<span class='span-tip-header'>提醒：</span>
	<span class="span-tip">价格单位: 元/kg
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
				<th> 名称</th>
			  	<th> <100Kg</th>
				<th> >=100Kg</th>
				<th> >=300Kg</th>
				<th> >=500Kg</th>
				<th> >=1000Kg</th>
				
				<th><?php echo $this->_var['lang']['handler']; ?></th>
		  </tr>
		  <?php $_from = $this->_var['data_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
		  <tr>
		    <td style="width:50px;" align="center">
		    	<?php echo $this->_var['country']['apt_id']; ?>
		    </td>
		    <td align="center">
		    	<span><?php echo $this->_var['country']['name']; ?> </span>
		    </td>
			  <td align="center">
				  <span><?php echo $this->_var['country']['price0']; ?></span>
			  </td>
		    <td align="center">
			  <span><?php echo $this->_var['country']['price100']; ?></span>
		  	</td>
            <td align="center">
                <span><?php echo $this->_var['country']['price300']; ?></span>
						</td>
						<td align="center">
							<span><?php echo $this->_var['country']['price500']; ?></span>
					</td>
					<td align="center">
						<span><?php echo $this->_var['country']['price1000']; ?></span>
				</td>
		    <td align="center" style="width:150px; padding:0px; margin:0px">
		      <a href="engrave_airline_price_template.php?act=edit&amp;id=<?php echo $this->_var['country']['apt_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					
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