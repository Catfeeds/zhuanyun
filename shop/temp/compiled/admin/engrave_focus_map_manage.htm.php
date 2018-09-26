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
      <a href="javascript:listTable.sort('FocusId'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_FocusId']; ?>
    </th>
    <th><a href="javascript:listTable.sort('Title'); "><?php echo $this->_var['lang']['Title']; ?></a></th>
	<th><a><?php echo $this->_var['lang']['ImgUrl']; ?></a></th>
	<th><a href="javascript:listTable.sort('LinkUrl'); "><?php echo $this->_var['lang']['LinkUrl']; ?></a></th>
	<th><a href="javascript:listTable.sort('Systime'); "><?php echo $this->_var['lang']['Systime']; ?></a><?php echo $this->_var['sort_Systime']; ?></th>
	<th><a href="javascript:listTable.sort('State'); "><?php echo $this->_var['lang']['State']; ?></a><?php echo $this->_var['sort_State']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['focuse_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'focuse');if (count($_from)):
    foreach ($_from AS $this->_var['focuse']):
?>
  <tr>
    <td style="width:50px;">
    	<input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['focuse']['FocusId']; ?>" /><?php echo $this->_var['focuse']['FocusId']; ?>
    </td>
    <td align="center">
    	<?php echo $this->_var['focuse']['Title']; ?>
    </td>
	<td align="center">
		<img src="<?php echo $this->_var['focuse']['ImgUrl']; ?>" width="32px" height="32px" /> 
	</td>
	<td align="center">
    	<?php echo $this->_var['focuse']['LinkUrl']; ?>
    </td>
    <td align="center">
    	<?php echo $this->_var['focuse']['Systime']; ?>
    </td>
	<td align="center">
		<img src="images/<?php if ($this->_var['focuse']['State']): ?>yes<?php else: ?>no<?php endif; ?>.gif"  /><!-- onclick="listTable.toggle(this, 'toggle_State', <?php echo $this->_var['focuse']['State']; ?>)" -->
	</td>
    <td align="center" style="width:150px; padding:0px; margin:0px">
      <a href="engrave_focus_map_manage.php?act=edit&amp;id=<?php echo $this->_var['focuse']['FocusId']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['focuse']['FocusId']; ?>,'<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16" /></a>
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