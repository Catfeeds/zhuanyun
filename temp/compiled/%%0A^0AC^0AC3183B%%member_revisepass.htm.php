<?php /* Smarty version 2.6.26, created on 2018-10-05 14:44:41
         compiled from member_revisepass.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php echo '
  <script type="text/javascript">
      function show() {
          if (document.getElementById(\'yincang\').style.display == \'block\')
              document.getElementById(\'yincang\').style.display = \'none\';
          else
              document.getElementById(\'yincang\').style.display = \'block\'
      }
  </script>
  '; ?>

   
    <div class="conter">
	 <div class="member">
	  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "member_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
	   <div class="conter_right">
	  	 
		 <div class="member_sub">
		  <div class="cr_bot">
		   <form id="formUser" name="formUser" method="post" action="member_datamanage.php?act=member_editpwd" onsubmit="return validate()">
			 <h2>修改密码</h2>
			 <table class="datum" cellspacing="10px;">
			   <tr>
			     <td class="datd"><b>*</b>原密码:</td>
			     <td>
			     	<input class="textt" style="width:300px;" type="password" name="oldpwd"/>
			     </td>
			   </tr>
			   <tr>
			     <td class="datd"><b>*</b>新密码:</td>
			     <td>
			     	<input class="textt" style="width:300px;" type="password" name="newpwd"/>
			     	</td>
			   </tr>
			   <tr>
			     <td class="datd"><b>*</b>确认密码:</td>
			     <td>
			     	<input class="textt" style="width:300px;" type="password" name="ensurenewpwd"/>
			     </td>
			   </tr>
			  </table>
			 <button type="submit">确认修改</button>
			 </form>
		  </div>
		 </div>
	   </div>
	   <div class="clear"></div>
	 </div>
	</div>
  
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  
 </body>
 </html>
<script language="JavaScript">
<?php echo '
document.forms[\'formUser\'].elements[\'oldpwd\'].focus();

/**
 * 表单验证
 */
function validate()
{
  validator = new Validator("formUser");
  //非空验证
  validator.required("oldpwd",  notnull_oldpwd);
  validator.required("newpwd", notnull_newpwd);
  validator.required("ensurenewpwd", notnull_ensurepwd);
  //类型验证
  validator.eqaul("newpwd","ensurenewpwd", noteq_ensurepwd);
  
  return validator.passed();
}
'; ?>

</script>