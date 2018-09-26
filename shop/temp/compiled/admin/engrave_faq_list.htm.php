<!-- $Id: currecys_list.htm 17126 2010-04-23 10:30:26Z zhangxingpeng $ -->

<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start faq list -->
  <div class="list-div" id="listDiv">
<?php endif; ?>
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="javascript:listTable.sort('faq_id'); "><?php echo $this->_var['lang']['faq_id']; ?></a><?php echo $this->_var['sort_faq_id']; ?>
    </th>
    <th><a href="javascript:listTable.sort('faq_title'); "><?php echo $this->_var['lang']['faq_title']; ?></a><?php echo $this->_var['sort_faq_title']; ?></th>
    <th><a href="javascript:listTable.sort('faq_expressnumber'); "><?php echo $this->_var['lang']['faq_expressnumber']; ?></a><?php echo $this->_var['sort_faq_expressnumber']; ?></th>
    <th><a href="javascript:listTable.sort('faq_orderno'); "><?php echo $this->_var['lang']['faq_orderno']; ?></a><?php echo $this->_var['sort_faq_orderno']; ?></th>
    <th><a href="javascript:listTable.sort('faq_deliverynumber'); "><?php echo $this->_var['lang']['faq_deliverynumber']; ?></a><?php echo $this->_var['sort_faq_deliverynumber']; ?></th>
    <th><a href="javascript:listTable.sort('faq_username'); "><?php echo $this->_var['lang']['faq_username']; ?></a><?php echo $this->_var['sort_faq_username']; ?></th>
    <th>时间</th>
    <th>状态</th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['faq_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'faq');if (count($_from)):
    foreach ($_from AS $this->_var['faq']):
?>
  <tr>
    <td style="width:50px;">
    	<input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['faq']['faq_id']; ?>" /><?php echo $this->_var['faq']['faq_id']; ?>
    </td>
    <td>
    	<?php echo $this->_var['faq']['faq_title']; ?>
    </td>
    <td>
    	<?php echo $this->_var['faq']['faq_expressnumber']; ?>
    </td>
    <td>
    	<?php echo $this->_var['faq']['faq_orderno']; ?>
    </td>
    <td>
    	<?php echo $this->_var['faq']['faq_deliverynumber']; ?>
    </td>
    <td align="center">
    	<?php echo $this->_var['faq']['user_name']; ?>
    </td>
    <td align="center">
    	<?php echo $this->_var['faq']['faq_time']; ?>
    </td>
    <td align="center">
        <?php if ($this->_var['faq']['reply_status'] == 0): ?><span style="color:black;">未回复</span>
		<?php else: ?><span style="color:green;">已回复</span>
		<?php endif; ?>
    </td>
    <td align="center" style="width:150px; padding:0px; margin:0px">
      <a href="engrave_faq.php?act=reply&faq_id=<?php echo $this->_var['faq']['faq_id']; ?>" title="<?php echo $this->_var['lang']['reply']; ?>"><img src="images/icon_reply.png" width="16" height="16" border="0" /></a>
      <a href="engrave_faq.php?act=view&faq_id=<?php echo $this->_var['faq']['faq_id']; ?>" title="<?php echo $this->_var['lang']['view']; ?>"><img src="images/icon_view.png" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['faq']['faq_id']; ?>, '<?php echo $this->_var['lang']['trash_faq_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
    </td>
  </tr>
  <?php endforeach; else: ?>
  <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
<!-- end faq list -->

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