<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<h4>
	<span class='span-tip-header'>提醒：</span>
	<span class="span-tip">下单时会根据当前时间计算出对应的燃油附加费率. 没有填写时,会采用物流默认的的燃油附加费率
	</span>
</h4>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
	<!-- start currecys list -->
	<div class="list-div" id="listDiv">
		<table cellpadding="3" cellspacing="1">
		  <tr>
		    <th>
		      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
		      <a href="javascript:listTable.sort('CId'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_CId']; ?>
		    </th>
		    <th> 快递名称</th>
		    <th> 年 </th>
		    <th> 月 </th>
				<th> 费率% </th>
				
		    <th><?php echo $this->_var['lang']['handler']; ?></th>
		  </tr>
		  <?php $_from = $this->_var['data_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipment');if (count($_from)):
    foreach ($_from AS $this->_var['shipment']):
?>
		  <tr>
		    <td style="width:50px;" align="center">
		    	<?php echo $this->_var['shipment']['soid']; ?>
		    </td>
		    <td align="center">
		    	<span><?php echo $this->_var['shipment']['shipment_name']; ?></span>
		    </td>
		 
		    <td align="center">
		    	<span><?php echo $this->_var['shipment']['year']; ?></span>
				</td>
				<td align="center">
						<span><?php echo $this->_var['shipment']['month']; ?></span>
					</td>
				
				<td align="center">
		    	<span><?php echo $this->_var['shipment']['discount']; ?></span>
				</td>
				
	

				
		    <td align="center" style="width:150px; padding:0px; margin:0px">
						<a href="engrave_shipment_oilfee.php?act=edit&soid=<?php echo $this->_var['shipment']['soid']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
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