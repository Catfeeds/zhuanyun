<?php echo $this->fetch('engrave_pageheader.htm'); ?>
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
		    <th> 国家名称</th>
		    
		 
		    <th> 代号 </th>

		    <th><?php echo $this->_var['lang']['handler']; ?></th>
		  </tr>
		  <?php $_from = $this->_var['data_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
		  <tr>
		    <td style="width:50px;" align="center">
		    	<?php echo $this->_var['country']['cid']; ?>
		    </td>
		    <td align="center">
		    	<span><?php echo $this->_var['country']['country_name']; ?> (<?php echo $this->_var['country']['country_en_name']; ?>)</span>
		    </td>
		 
		    <td align="center">
		    	<span><?php echo $this->_var['country']['country_code']; ?></span>
		    </td>
		
		    <td align="center" style="width:150px; padding:0px; margin:0px">
		      
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