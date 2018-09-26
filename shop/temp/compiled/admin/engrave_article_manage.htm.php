<!-- $Id: currecys_list.htm 17126 2010-04-23 10:30:26Z zhangxingpeng $ -->

<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<?php echo $this->fetch('engrave_tip.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start article list -->
  <div class="list-div" id="listDiv">
<?php endif; ?>
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="javascript:listTable.sort('CntId'); "><?php echo $this->_var['lang']['CntId']; ?></a><?php echo $this->_var['sort_CntId']; ?>
    </th>
    <th><a href="javascript:listTable.sort('CntTitle'); "><?php echo $this->_var['lang']['CntTitle']; ?></a><?php echo $this->_var['sort_CntTitle']; ?></th>
      <th>分类</th>
    <th><a href="javascript:listTable.sort('CntOperatorName'); "><?php echo $this->_var['lang']['CntOperatorName']; ?></a><?php echo $this->_var['sort_CntOperatorName']; ?></th>
    <th><a href="javascript:listTable.sort('CntTime'); "><?php echo $this->_var['lang']['CntTime']; ?></a><?php echo $this->_var['sort_CntTime']; ?></th>
    <th><a href="javascript:void(0); "><?php echo $this->_var['lang']['CntAuditingStatus']; ?></a><?php echo $this->_var['sort_CntAuditingStatus']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
  <tr>
    <td style="width:50px;">
    	<input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['article']['CntId']; ?>" /><?php echo $this->_var['article']['CntId']; ?>
    </td>
    <td>
    	<?php echo $this->_var['article']['CntTitle']; ?>
    </td>
      <td>
          <?php $this->assign('temp',$this->_var['article']['CntCategoryId']); ?>
          <?php $this->assign('temp2',$this->_var['channel_list'][$this->_var['temp']]); ?>
          <?php echo $this->_var['temp2']['typename']; ?>
    </td>
    <td>
    	<?php echo $this->_var['article']['CntOperatorName']; ?>
    </td>
    <td>
    	<span onclick=""><?php echo $this->_var['article']['CntTime']; ?></span>
    </td>
    <td align="center">
    	<?php if ($this->_var['article']['CntAuditingStatus'] === 0): ?>
    		<?php echo $this->_var['lang']['Content']['Pendingtrial']; ?>
		<?php elseif ($this->_var['article']['CntAuditingStatus'] === 0): ?>
    		<?php echo $this->_var['lang']['Content']['Prime']; ?>
		<?php else: ?>
    		<?php echo $this->_var['lang']['Content']['LastInstance']; ?>
		<?php endif; ?>
    </td>
    <td align="center" style="width:150px; padding:0px; margin:0px">
      <a href="engrave_article_manage.php?act=edit&CntId=<?php echo $this->_var['article']['CntId']; ?><?php if ($this->_var['code'] != 'real_currecys'): ?>&CntCategoryId=<?php echo $this->_var['article']['CntCategoryId']; ?><?php endif; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['article']['CntId']; ?>, '<?php echo $this->_var['lang']['trash_article_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
    </td>
  </tr>
  <?php endforeach; else: ?>
  <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
<!-- end article list -->

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
      
  }


</script>
<?php echo $this->fetch('engrave_pagefooter.htm'); ?>
<?php endif; ?>