<!-- $Id: engrave_shipping_laddervalue_list.htm zhangxingpeng $ -->

<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start currecys list -->
  <div class="list-div" id="listDiv">
<?php endif; ?>
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="javascript:listTable.sort('slpg_id'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_slpg_id']; ?>
    </th>
    <th><?php echo $this->_var['lang']['slpg_name']; ?></th>
    <th><?php echo $this->_var['lang']['slpg_time']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['shipping_ladderprice_group_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
  <tr>
    <td style="width:50px;">
    	<input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['shipping']['ShippingId']; ?>" /><?php echo $this->_var['shipping']['slpg_id']; ?>
    </td>
    <td align="center">
    	<?php echo $this->_var['shipping']['slpg_name']; ?>
    </td>
	<td align="center">
    	<?php echo $this->_var['shipping']['slpg_time_value']; ?>
    </td>
    <td align="center" style="width:150px; padding:0px; margin:0px">
      <a href="engrave_shipping_laddervalue_group.php?act=edit&amp;slpg_id=<?php echo $this->_var['shipping']['slpg_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['shipping']['slpg_id']; ?>,'<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16" /></a>
    </td>
  </tr>
  <?php endforeach; else: ?>
  <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
<!-- end currecys list -->

<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
    <?php echo $this->fetch('page.htm'); ?>
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
</script>

<?php echo $this->fetch('engrave_pagefooter.htm'); ?>
<?php endif; ?>