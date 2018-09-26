<!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<?php echo $this->fetch('engrave_tip.htm'); ?>
<div class="main-div">
<form method="post" action="engrave_money_manage.php" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
<table cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label"><?php echo $this->_var['lang']['Name']; ?></td>
    <td><input type="text" name="Name" maxlength="60" value="<?php echo $this->_var['currecy']['Name']; ?>" /><?php echo $this->_var['lang']['require_name']; ?> <input type="checkbox" onclick="selectDefault();" id="IsDefault" name="IsDefault" value="1" <?php if ($this->_var['currecy']['IsDefault']): ?>checked="checked"<?php endif; ?> /><?php echo $this->_var['lang']['IsDefault']; ?></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['Code']; ?></td>
    <td><input type="text" name="Code" style="width:80px" maxlength="40" value="<?php echo $this->_var['currecy']['Code']; ?>" /></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['Symbol']; ?></td>
    <td><input type="text" name="Symbol" style="width:60px" maxlength="40" value="<?php echo $this->_var['currecy']['Symbol']; ?>" /></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['ExchageRate']; ?></td>
    <td><input type="text" name="ExchageRate" id="ExchageRate" style="width:60px" maxlength="40" value="<?php echo $this->_var['currecy']['ExchageRate']; ?>" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br />
      <input type="submit" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
      <input type="button" name="reset" onclick="history.go(-1)" value="<?php echo $this->_var['lang']['back']; ?>" class="button" />
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['currecy']['CId']; ?>" />
    </td>
  </tr>
</table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<script language="JavaScript">
function selectDefault()
{
	var isDefault = document.getElementById("IsDefault");
	if(isDefault.checked)
	{
		Ajax.call('engrave_money_manage.php?act=getisdefault',"",act_calisdefault,"GET","TEXT",false,true);
	}
	else
	{
		document.getElementById("exchagerate").value = '';
		document.getElementById("exchagerate").disabled = "";
	}
}

function act_calisdefault(result)
{
    var obj = eval('(' + result + ')');
	if(obj.length>=1)
	{
		alert('货币只能设置一个默认货币！');
	    document.getElementById("IsDefault").checked = '';
	}
	else
	{
	    document.getElementById("exchagerate").value = '1';
		document.getElementById("exchagerate").disabled = "disabled";
	}
}

if(document.all) 
{ 
	window.attachEvent('onload', load); 
}
else 
{ 
	window.addEventListener('load', load);
}

/**
 * 初始化加载
 */
function load()
{
	var isDefault = document.getElementById("IsDefault");
	if(isDefault.checked)
	{
		document.getElementById("ExchageRate").value = '1';
		document.getElementById("ExchageRate").disabled = "disabled";
	}
	else
	{
		document.getElementById("ExchageRate").value = '';
		document.getElementById("ExchageRate").disabled = "";
	}
}
/**
 * 添加验证
 */
function validate()
{
	var validator = new Validator('theForm');
	validator.required('Name', currencyname_not_null);
	validator.required('Code', currencycode_not_null);
	validator.required('Symbol', currencysymbol_not_null);
	validator.isFloat('ExchageRate',import_exchagerate_error,1);
	return validator.passed();
}
</script>

<?php echo $this->fetch('engrave_pagefooter.htm'); ?>