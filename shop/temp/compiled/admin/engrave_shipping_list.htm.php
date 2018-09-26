<!-- $Id: currecys_list.htm 17126 2010-04-23 10:30:26Z liuhui $ -->

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
      <a href="javascript:listTable.sort('ShippingId'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_ShippingId']; ?>
    </th>
    <th><a href="javascript:listTable.sort('ShippingName'); "><?php echo $this->_var['lang']['shippingname']; ?></a><?php echo $this->_var['sort_ShippingName']; ?></th>
    <th><a href="javascript:listTable.sort('Name'); "><?php echo $this->_var['lang']['name']; ?></a><?php echo $this->_var['sort_Name']; ?></th>
    <th><a href="javascript:listTable.sort('ShippingCode'); "><?php echo $this->_var['lang']['shippingcode']; ?></a><?php echo $this->_var['sort_ShippingCode']; ?></th>
    <th><?php echo $this->_var['lang']['WeightPrice']; ?></th>
    <th><?php echo $this->_var['lang']['AddWeightAddPrice']; ?></th>
    <th><?php echo $this->_var['lang']['LadderPrice']; ?></th>
    <th><?php echo $this->_var['lang']['declaredvalue']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
  <tr>
    <td style="width:50px;">
    	<input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['shipping']['ShippingId']; ?>" /><?php echo $this->_var['shipping']['ShippingId']; ?>
    </td>
    <td align="center">
    	<?php echo $this->_var['shipping']['ShippingName']; ?>
    </td>
    <td align="center">
    	<?php echo $this->_var['shipping']['area_name']; ?>
    </td>
	<td align="center">
    	<?php echo $this->_var['shipping']['ShippingCode']; ?>
    </td>
	<td align="center">
    	<?php echo $this->_var['shipping']['Weight']; ?>/<?php echo $this->_var['shipping']['Symbol']; ?><?php echo $this->_var['shipping']['Price']; ?>
    </td>
	<td align="center">
    	<?php echo $this->_var['shipping']['AddWeight']; ?>/<?php echo $this->_var['shipping']['Symbol']; ?><?php echo $this->_var['shipping']['AddPrice']; ?>
    </td>
	<td align="center">
		<?php if ($this->_var['shipping']['IsSupPice'] == 1): ?>
		<a href="engrave_shipping_laddervalue.php?act=list&amp;id=<?php echo $this->_var['shipping']['s_slpgid']; ?>&amp;name=<?php echo $this->_var['shipping']['ShippingName']; ?>" title="<?php echo $this->_var['lang']['view']; ?>"><?php echo $this->_var['lang']['list']; ?>|</a>
      	<a href="engrave_shipping_laddervalue.php?act=add&amp;id=<?php echo $this->_var['shipping']['s_slpgid']; ?>&amp;name=<?php echo $this->_var['shipping']['ShippingName']; ?>"  title="<?php echo $this->_var['lang']['add']; ?>"><?php echo $this->_var['lang']['add']; ?></a>
    	<?php else: ?>
    	---
    	<?php endif; ?>
    </td>
	<td align="center">
		<a href="engrave_shipping_declaredvalue.php?act=list&amp;id=<?php echo $this->_var['shipping']['ShippingId']; ?>&amp;name=<?php echo $this->_var['shipping']['ShippingName']; ?>" title="<?php echo $this->_var['lang']['view']; ?>"><?php echo $this->_var['lang']['list']; ?>|</a>
      	<a href="engrave_shipping_declaredvalue.php?act=add&amp;id=<?php echo $this->_var['shipping']['ShippingId']; ?>&amp;name=<?php echo $this->_var['shipping']['ShippingName']; ?>"  title="<?php echo $this->_var['lang']['add']; ?>"><?php echo $this->_var['lang']['add']; ?></a>
    </td>
    <td align="center" style="width:150px; padding:0px; margin:0px">
      <a href="engrave_shipping.php?act=edit&amp;id=<?php echo $this->_var['shipping']['ShippingId']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['shipping']['ShippingId']; ?>,'<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16" /></a>
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

  
  onload = function()
  {
    startCheckOrder(); 
    document.forms['listForm'].reset();
  }

  /**
   * @param: bool ext 
   */
  function confirmSubmit(frm, ext)
  {
      if (frm.elements['type'].value == 'trash')
      {
          return confirm(batch_trash_confirm);
      }
      else if (frm.elements['type'].value == 'not_on_sale')
      {
          return confirm(batch_no_on_sale);
      }
      else if (frm.elements['type'].value == 'move_to')
      {
          ext = (ext == undefined) ? true : ext;
          return ext && frm.elements['target_cat'].value != 0;
      }
      else if (frm.elements['type'].value == '')
      {
          return false;
      }
      else
      {
          return true;
      }
  }

  function changeAction()
  {
      var frm = document.forms['listForm'];

      frm.elements['target_cat'].style.display = frm.elements['type'].value == 'move_to' ? '' : 'none';
			
			<?php if ($this->_var['suppliers_list'] > 0): ?>
      frm.elements['suppliers_id'].style.display = frm.elements['type'].value == 'suppliers_move_to' ? '' : 'none';
			<?php endif; ?>

      if (!document.getElementById('btnSubmit').disabled &&
          confirmSubmit(frm, false))
      {
          frm.submit();
      }
  }

</script>
<?php echo $this->fetch('engrave_pagefooter.htm'); ?>
<?php endif; ?>