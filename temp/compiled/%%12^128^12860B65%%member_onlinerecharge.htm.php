<?php /* Smarty version 2.6.26, created on 2018-10-05 14:44:49
         compiled from member_onlinerecharge.htm */ ?>
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
			 <h2>在线充值</h2>
			 <div class="cost myacc">
		  <div class="cr_bot">
			<div id="contents">
			 <form  enctype="multipart/form-data" action="alipayapi.php" method="post" target="_blank" name="theForm" onsubmit="return validate()">
			   <p class="mdiv1"><span>充值金额：</span>
			   	<input class="textt" type="text" name="recharge_value"/></p>
			   <p class="mdiv1"><span>支付方式：</span>
			   	<?php $_from = $this->_tpl_vars['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name_payment'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_payment']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['payment']):
        $this->_foreach['name_payment']['iteration']++;
?>
				<input type="radio" name="recharge_type" value="<?php echo $this->_tpl_vars['payment']['PaymentId']; ?>
" checked="true">
				<img src="<?php echo $this->_tpl_vars['lang']['thebackgrounddistributionsystem']; ?>
<?php echo $this->_tpl_vars['payment']['InterfaceLogo']; ?>
" />
				</input>
				<?php endforeach; endif; unset($_from); ?>
			   </p>
			   <p class="mdiv1">
			   	<span style="position:relative;top:10px;">会员备注：</span>
			   </p>
			   <p style="position:relative;top:-20px;padding-left:153px;">
			   <textarea name="member_remark"></textarea>
			   </p>
			   <!-- 
			   <table class="stocktable">
		      <tr>
			    <th>名称</th><th>描述</th><th>手续费</th>
		      </tr>
			 <tr>
				</td><td><a href="#">支付宝</a></td><td>支付宝支付</td><td>0.00</td>
			 </tr>
			 <tr>
				</td><td><a href="#">支付宝</a></td><td>支付宝支付</td><td>0.00</td>
			 </tr>
		     </table>
		      -->
		      <input type="hidden" name="user_id" value="<?php echo $this->_tpl_vars['user_id']; ?>
"></input>
		      <input type="hidden" name="WIDbody" value="充值"></input>
		      <input type="hidden" name="WIDshow_url" value="<?php echo $this->_tpl_vars['lang']['thebackgrounddistributionsystem']; ?>
/notify_url.php"></input>
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
document.forms[\'theForm\'].elements[\'recharge_value\'].focus();
/**
 * 表单验证
 */
function validate()
{
  validator = new Validator("theForm");
  validator.required("recharge_value",  recharge_value_notnull);
  validator.isNumber("recharge_value", recharge_value_isnumber);
  validator.gtInt("recharge_value", 0.01,recharge_value_gtnumber);

  return validator.passed();
}
'; ?>

</script>