<?php /* Smarty version 2.6.26, created on 2018-09-05 09:33:17
         compiled from forget_password.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><div class="forget">  <div class="main_forget">	<div class="fo_center">	  <form enctype="multipart/form-data" action="user.php?act=send_pwd_email" method="post" name="theForm" onsubmit="return validate()" name="theForm">	      <h2>找回密码</h2>	      <div class="div_account">	      	<span class="span_txts"><input class="ipt-txts" type="text" name="username"  placeholder="邮箱/用户名" /></span>	      </div>		  <button type="submit" class="button">提&nbsp;&nbsp;交</button>     </form>	</div>  </div></div><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></body></html><script type="text/javascript"><?php echo 'document.forms[\'theForm\'].elements[\'username\'].focus();/** * 表单验证 */function validate(){  validator = new Validator("theForm");  validator.required("username",  username_notnull);  return validator.passed();}'; ?>
</script>