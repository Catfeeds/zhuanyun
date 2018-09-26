<?php /* Smarty version 2.6.26, created on 2018-07-08 15:24:46
         compiled from member_withdraws.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 
   
    <div class="conter">
	 <div class="member_sub">
	   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "member_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	   <div class="conter_right">
		   <div class="cr_bot">
			   <h2>提现申请</h2>
				 <div class="cost myacc">
				  <div class="cr_bot">
					<div id="contents">
					 <form enctype="multipart/form-data" action="member_withdraws.php?act=member_insert" method="post" name="theForm" onsubmit="return validate()">
					 <table class="datum" cellspacing="10px;">
							<tr>
							 <td class="datd" style="width:120px;">提现/退款金额:</td>
							 <td><input class="textdatum" type="number"
										max="<?php echo $this->_tpl_vars['users']['user_money']; ?>
" name="amount" value=""/>(元) 最小:0.01元
								 账户余额：<span style="color:red"><?php echo $this->_tpl_vars['users']['user_money']; ?>
元</span>
							 </td>
						   </tr>
						   <tr>
							 <td class="datds" style="padding-top:5px;"><p style="width:120px;">备注说明：</p></td>
							 <td style="padding-top:0px;">
								<textarea name="user_note" required></textarea>
								 <br>提交成功后,管理员会和您联系
							 </td>
						   </tr>
					  </table>
					   <button type="submit">提交申请</button>
					 </form>
					</div>
				   </div>
				 </div>
				</div>
	   		</div>
	   		<div class="clear"></div>
	   </div>
	</div>
  
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  
 </body>
 </html>
 <script language="JavaScript">
<?php echo '
document.forms[\'theForm\'].elements[\'amount\'].focus();

/**
 * 表单验证
 */
function validate()
{
  validator = new Validator("theForm");
  validator.required("amount",  amount_notnull);
  validator.isNumber("amount",  amount_isnumber);

  return validator.passed();
}
'; ?>

</script>