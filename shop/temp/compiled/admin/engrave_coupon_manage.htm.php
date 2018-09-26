<!-- $Id: currecys_list.htm 17126 2010-04-23 10:30:26Z zhangxingpeng $ -->

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
      <a href="javascript:listTable.sort('CouponId'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_CouponId']; ?>
    </th>
    <th><a href="javascript:listTable.sort('CouponName'); "><?php echo $this->_var['lang']['Coupon_Name']; ?></a></th>
	<th><a href="javascript:listTable.sort('Message'); "><?php echo $this->_var['lang']['Message']; ?></a><?php echo $this->_var['sort_Price']; ?></th>
	<th><a href="javascript:listTable.sort('CouponValue'); "><?php echo $this->_var['lang']['Coupon_Value']; ?></a><?php echo $this->_var['sort_CouponValue']; ?></th>
	<th><a href="javascript:listTable.sort('Days'); "><?php echo $this->_var['lang']['Days']; ?></a><?php echo $this->_var['sort_Days']; ?></th>
	<th><a href="javascript:listTable.sort('MinAmount'); "><?php echo $this->_var['lang']['Min_Amount']; ?></a><?php echo $this->_var['sort_MinAmount']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['coupon_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'coupon');if (count($_from)):
    foreach ($_from AS $this->_var['coupon']):
?>
  <tr>
    <td style="width:50px;">
    	<input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['coupon']['CouponId']; ?>" /><?php echo $this->_var['coupon']['CouponId']; ?>
    </td>
    <td align="center">
    	<?php echo $this->_var['coupon']['CouponName']; ?>
    </td>
	<td align="center">
		<?php echo $this->_var['coupon']['Message']; ?> 
	</td>
	<td align="center">
    	<?php echo $this->_var['coupon']['ReCouponValue']; ?>
    </td>
    <td align="center">
    	<?php echo $this->_var['coupon']['Days']; ?>
    </td>
	<td align="center">
    	<?php echo $this->_var['coupon']['ReMinAmount']; ?>
    </td>
    <td align="center" style="width:150px; padding:0px; margin:0px">
      <a href="engrave_coupon_manage.php?act=edit&amp;id=<?php echo $this->_var['coupon']['CouponId']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['coupon']['CouponId']; ?>,'<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16" /></a>
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


</script>
<?php echo $this->fetch('engrave_pagefooter.htm'); ?>
<?php endif; ?>