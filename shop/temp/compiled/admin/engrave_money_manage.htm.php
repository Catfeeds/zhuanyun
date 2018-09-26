
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<?php echo $this->fetch('engrave_tip.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start currecys list -->
  <div class="list-div" id="listDiv">
<?php endif; ?>
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="javascript:listTable.sort('CId'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_CId']; ?>
    </th>
    <th><a href="javascript:listTable.sort('Name'); "><?php echo $this->_var['lang']['currecy_Name']; ?></a><?php echo $this->_var['sort_Name']; ?></th>
    <th><a href="javascript:listTable.sort('Code'); "><?php echo $this->_var['lang']['currecy_Code']; ?></a><?php echo $this->_var['sort_Code']; ?></th>
    <th><a href="javascript:listTable.sort('Symbol'); "><?php echo $this->_var['lang']['currecy_Symbol']; ?></a><?php echo $this->_var['sort_Symbol']; ?></th>
    <th><a href="javascript:listTable.sort('ExchageRate'); "><?php echo $this->_var['lang']['currecy_ExchageRate']; ?></a><?php echo $this->_var['sort_ExchageRate']; ?></th>
    <th><a href="javascript:listTable.sort('IsDefault'); "><?php echo $this->_var['lang']['currecy_IsDefault']; ?></a><?php echo $this->_var['sort_IsDefault']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['currecy_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'currecys');if (count($_from)):
    foreach ($_from AS $this->_var['currecys']):
?>
  <tr>
    <td style="width:50px;">
    	<input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['currecys']['CId']; ?>" /><?php echo $this->_var['currecys']['CId']; ?>
    </td>
    <td align="center">
    	<span><?php echo $this->_var['currecys']['Name']; ?></span>
    </td>
    <td align="center">
    	<span><?php echo $this->_var['currecys']['Code']; ?></span>
    </td>
    <td align="center">
    	<span><?php echo $this->_var['currecys']['Symbol']; ?></span>
    </td>
    <td align="center">
    	<span><?php echo $this->_var['currecys']['ExchageRate']; ?></span>
    </td>
    <td align="center">
    	<img src="images/<?php if ($this->_var['currecys']['IsDefault']): ?>yes<?php else: ?>no<?php endif; ?>.gif" />
    </td>
    <td align="center" style="width:150px; padding:0px; margin:0px">
      <!--<a href="engrave_money_manage.php?act=edit&id=<?php echo $this->_var['currecys']['CId']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['currecys']['CId']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
    -->
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