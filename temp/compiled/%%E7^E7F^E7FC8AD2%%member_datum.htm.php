<?php /* Smarty version 2.6.26, created on 2018-10-05 14:44:40
         compiled from member_datum.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  
<div class="conter">
	 <div class="member">
	   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "member_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	   
	   <div class="conter_right">
	  	 
		 <div class="member_sub">
		  <div class="cr_bot">
		   <form enctype="multipart/form-data" action="member_datamanage.php?act=member_datum" method="post" name="theForm" onsubmit="return validate()">
		     	<h2>基本信息<span>(客户信息严格保密，受国家法律保护。为了您的合法权益，请如实填写个人信息。)</span></h2>
			 <table class="datum" cellspacing="10px;">
			   <tr>
			     <td class="datd">用户名:</td>
			     <td><input class="textt" type="text" name="user_name" value="<?php echo $this->_tpl_vars['users']['user_name']; ?>
" readonly="readonly"/></td><!-- <input class="textdatum" type="text" value="" /> -->
			   </tr>
			   <tr>
			     <td class="datd"><span class="red">*</span>我的邮箱:</td>
			     <td><input class="textt" type="text" value="<?php echo $this->_tpl_vars['users']['email']; ?>
" name="email" /></td>
			   </tr>
			    <tr>
			     <td class="datd"><span class="red">*</span>所在地区:</td>
			     <td>
				    <select  class="textt" id="da_country" name="user_country" onchange="country_change(this.options[this.options.selectedIndex].value)">
					 	<option value='0'><?php echo $this->_tpl_vars['lang']['select_country']; ?>
</option>
					 	<?php echo $this->_tpl_vars['area_country_option']; ?>

					 </select>
					 <select  class="textt" id="da_province" name="user_province" onchange="province_change(this.options[this.options.selectedIndex].value)">
					 	<option value='0'><?php echo $this->_tpl_vars['lang']['select_province']; ?>
</option>
					 	<?php echo $this->_tpl_vars['area_province_option']; ?>

					 </select>
					 <select  class="textt" id="da_city" name="user_city">
					 	<option value='0'><?php echo $this->_tpl_vars['lang']['select_city']; ?>
</option>
					 	<?php echo $this->_tpl_vars['area_city_option']; ?>

					 </select> 
				</td>
			   </tr>
			   <tr>
			     <td class="datd">身份证号:</td>
			     <td><input class="textt" type="text" name="user_identitycard" value="<?php echo $this->_tpl_vars['users']['user_identitycard']; ?>
" /></td>
			   </tr>
			   <tr>
			     <td class="datd">手机号码:</td>
			     <td><input class="textt" type="text" name="mobile_phone" value="<?php echo $this->_tpl_vars['users']['mobile_phone']; ?>
" /></td>
			   </tr>
			   <tr>
			     <td class="datd">备用电话:</td>
			     <td><input class="textt" type="text" name="home_phone" value="<?php echo $this->_tpl_vars['users']['home_phone']; ?>
" /></td>
			   </tr>
			   <tr>
			     <td class="datd"><span class="red">*</span>详细地址:</td>
			     <td><input class="textt" type="text" name="user_address" value="<?php echo $this->_tpl_vars['users']['user_address']; ?>
" /></td>
			   </tr>
			   <tr>
			     <td class="datd"><span class="red">*</span>邮政编码:</td>
			     <td><input class="textt" type="text" name="user_zipcode" value="<?php echo $this->_tpl_vars['users']['user_zipcode']; ?>
" /></td>
			   </tr>
			   <tr>
			     <td class="datd">淘宝旺旺:</td>
			     <td><input class="textt" type="text" name="user_taobaowangwang" value="<?php echo $this->_tpl_vars['users']['user_taobaowangwang']; ?>
" /></td>
			   </tr>
			   <!-- 
			   <tr>
			     <td class="datd">QQ:</td>
			     <td><input class="textdatum" type="text" value="" /></td>
			   </tr>
			   <tr>
			     <td class="datd">支付宝账号:</td>
			     <td><input class="textdatum" type="text" value="" /></td>
			   </tr>
			   <tr>
			     <td class="datd">支付宝所有人:</td>
			     <td><input class="textdatum" type="text" value="" /></td>
			   </tr>
			    -->
			   <tr>
			     <td class="datd">微信:</td>
			     <td><input class="textdatum" type="text" name="user_wechat" value="<?php echo $this->_tpl_vars['users']['user_wechat']; ?>
" /></td>
			   </tr>
			   <tr>
			     <td class="datd"  >备注信息:</td>
			     <td >
			     	<textarea name="user_remark" class="textdatum"><?php echo $this->_tpl_vars['users']['user_remark']; ?>
</textarea>
			     </td>
			   </tr>
			 </table>
			 <!-- <div class="mdiv1 ins"><span>备注信息：</span>&nbsp;&nbsp;<textarea></textarea></div>
			  -->
			  <h2>账户安全设置</h2>
			 <table class="datum" cellspacing="10px;">
			   <tr>
			     <td class="datd"><span class="red">*</span>密保问题:</td>
			     <td><input class="textt" type="text" name="passwd_question" value="<?php echo $this->_tpl_vars['users']['passwd_question']; ?>
"/></td>
			   </tr>
			   <tr>
			     <td class="datd"><span class="red">*</span>密保答案:</td>
			     <td><input class="textt" type="password" name="passwd_answer" value="<?php echo $this->_tpl_vars['users']['passwd_answer']; ?>
"/></td>
			   </tr>
			   <!-- 
			   <?php if ($this->_tpl_vars['users']['user_isperfect'] != '0'): ?>
			   <tr>
			     <td class="datd"><span class="red">*</span>原手机号码:</td>
			     <td><input class="textdatum" type="text" name="ensure_mobile_phone" /><span class="red">修改资料必填</span></td>
			   </tr>
			   <?php endif; ?>
			    -->
			  </table>
			 <button type="submit">确认修改</button>
			 <input type="hidden" name="operate" value="<?php echo $this->_tpl_vars['users']['isperfect']; ?>
"></input>
			 <input type="hidden" name="old_mobile_phone" value="users.mobile_phone"></input>
			 </form>
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
<script type="text/javascript" src="themes/default/js/member/users_deliveryaddress.js"></script>
 </body>
 </html>
<script language="JavaScript">
<?php echo '
document.forms[\'theForm\'].elements[\'user_name\'].focus();

/**
 * 表单验证
 */
function validate()
{
	validator = new Validator("theForm");
	//非空验证
	validator.required("email",  notnull_email);
	validator.selectRequired("user_country", notnull_area);
	//validator.selectRequired("user_province", notnull_area);
	//validator.selectRequired("user_city", notnull_area);
	validator.required("user_address", notnull_user_address);
	validator.required("user_zipcode", notnull_user_zipcode);

	validator.required("passwd_question", notnull_passwd_question);
	validator.required("passwd_answer", notnull_passwd_answer);
	//类型验证
	validator.isEmail("email", type_email,true);
	validator.isPostalCode("user_zipcode", type_user_zipcode,true);
	validator.isTel("mobile_phone", type_mobile_phone,false);

	return validator.passed();
}
'; ?>

</script>