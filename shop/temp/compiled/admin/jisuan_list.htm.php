<?php if ($this->_var['full_page']): ?>

<?php echo $this->fetch('pageheader.htm'); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<div style="width:100%; text-align:right; font-weight:600; color: #FF0000;"><a href="engrave_addjisuan.php?act=add" style=" color: #FF0000;">添加方式</a>&nbsp;&nbsp;&nbsp;&nbsp;</div>
<div class="form-div">

  <input type="button" name="export" value="<?php echo $this->_var['lang']['export']; ?>" onclick="location.href='email_list.php?act=export';" class="button" />

</div>

<form method="post" action="email_list.php" name="listForm">

<div class="list-div" id="listDiv">

<?php endif; ?>

<table cellspacing='1' cellpadding='3'>

<tr>

<th width="5%"><input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox"><a href="javascript:listTable.sort('id'); "><?php echo $this->_var['lang']['id']; ?></a><?php echo $this->_var['sort_id']; ?></th>

<th>物流名称</th>

<th width="15%">费用计算公式</th>
<th width="15%">服务费</th>
<th width="15%">排序</th>
<th width="15%">操作</th>
</tr>

<?php $_from = $this->_var['emaildb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>

<tr>

  <td><input name="checkboxes[]" type="checkbox" value="<?php echo $this->_var['val']['id']; ?>" /><?php echo $this->_var['val']['id']; ?></td>

  <td><?php echo $this->_var['val']['fangshi']; ?></td>

  <td align="center"><?php echo $this->_var['val']['gongshi']; ?></td>
 <td align="center"><?php echo $this->_var['val']['neirong']; ?></td>
  <td align="center"><?php echo $this->_var['val']['paixu']; ?></td>
    <td align="center"><a href="engrave_addjisuan.php?act=update&id=<?php echo $this->_var['val']['id']; ?>">修改</a></td>
</tr>

<?php endforeach; else: ?>

    <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>

<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>

</table>

<table id="page-table" cellspacing="0">

  <tr>

    <td>

    
    </td>

    <td align="right" nowrap="true">

    <?php echo $this->fetch('page.htm'); ?>

    </td>

  </tr>

</table>

<?php if ($this->_var['full_page']): ?>

</div>

</form>

<script type="Text/Javascript" language="JavaScript">

listTable.recordCount = <?php echo $this->_var['record_count']; ?>;

listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>

listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<!--

onload = function()

{

  // 开始检查订单

  startCheckOrder();

}

//-->

</script>

<?php echo $this->fetch('pagefooter.htm'); ?>

<?php endif; ?>