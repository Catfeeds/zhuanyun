<?php /* Smarty version 2.6.26, created on 2018-07-08 15:25:09
         compiled from member_insider.htm */ ?>
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
	      <!--<div class="cr_top"><?php echo $this->_tpl_vars['weizhi']; ?>
：<?php echo $this->_tpl_vars['ur_here']; ?>
</div>-->
		   <div class="cr_bot">
			   <h2>有问必答</h2>
		 		<div class="cost myacc">
					 <div class="cr_bot">
						<ul class="checked">
						 <li class="current"><a href="#">我的提问</a></li>
						 <li><a href="#">提交问题</a></li>
						</ul>
						<div id="contents">
							  <div class="cont1 cont">
								  <table class="stocktable">
								  <tr>
									<th><input type="checkbox" /></th>
									<th>标题</th>
									<th>转运单号</th>
									<th>包裹单号</th>
									<th>运单单号</th>
									<th>日期</th>
									<th>操作</th>
								  </tr>
								  <?php $_from = $this->_tpl_vars['faq_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name_faq'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_faq']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['faq']):
        $this->_foreach['name_faq']['iteration']++;
?>
								 <tr>
									<td style="width:35px;"><input type="checkbox" /></td>
									<td><?php echo $this->_tpl_vars['faq']['faq_title']; ?>
</td>
									<td><?php echo $this->_tpl_vars['faq']['faq_expressnumber']; ?>
</td>
									<td><?php echo $this->_tpl_vars['faq']['faq_orderno']; ?>
</td>
									<td><?php echo $this->_tpl_vars['faq']['faq_deliverynumber']; ?>
</td>
									<td style="width:100px;"><?php echo $this->_tpl_vars['faq']['faq_time']; ?>
</td>
									<td style="width:60px;">
										<a href="member_customservice.php?act=member_editinsider&faq_id=<?php echo $this->_tpl_vars['faq']['faq_id']; ?>
"  title="<?php echo $this->_tpl_vars['lang']['edit']; ?>
">
											<img src="themes/default/images/icon_edit.png" border="0" height="16" width="16" />
										</a>
										<a href="member_customservice.php?act=member_viewinsider&faq_id=<?php echo $this->_tpl_vars['faq']['faq_id']; ?>
"  title="<?php echo $this->_tpl_vars['lang']['view']; ?>
">
											<img src="themes/default/images/icon_detail.png" border="0" height="16" width="16" />
										</a>
										<a href="javascript:;" onclick="listTable.remove(<?php echo $this->_tpl_vars['faq']['faq_id']; ?>
,'<?php echo $this->_tpl_vars['lang']['drop_confirm']; ?>
','member_removefaq')" title="<?php echo $this->_tpl_vars['lang']['remove']; ?>
">
											<img src="themes/default/images/icon_delete.png" border="0" height="16" width="16" />
										</a>
									</td>
								 </tr>
								 <?php endforeach; endif; unset($_from); ?>
								 </table>
							 </div>
							 <div class="cont2 cont hide">
								 <form enctype="multipart/form-data" action="member_customservice.php?act=member_insider" method="post" name="theForm">
								   <table class="datum" cellspacing="10px;">
									   <tr>
										 <td class="datd">标题:</td>
										 <td><input class="textdatum" required type="text" name="faq_title"/></td>
									   </tr>
									   <tr>
										 <td class="datd">相关包裹单号: </td>
										 <td><input class="textdatum" type="text" name="faq_expressnumber"/></td>
									   </tr>
										<tr>
										 <td class="datd">相关转运单号: </td>
										 <td><input class="textdatum" type="text" name="faq_orderno"/></td>
									   </tr>
										<tr>
										 <td class="datd">相关发货单号: </td>
										 <td><input class="textdatum" type="text" name="faq_deliverynumber"/></td>
									   </tr>
									   <tr>
										 <td class="datds" style="padding-top:5px;"><p>问题详细描述: <p></td>
										 <td style="padding-top:0px;">
											<textarea name="faq_remark" required></textarea>
										 </td>
									   </tr>
								  </table>
								  <!--
								  <div class="mdiv1 ins"><span>问题详细描述：</span><textarea></textarea></div>
								   -->
								 <button type="submit">提交问题</button>
								 <input type="hidden" name="operate" value="insert"></input>
								 </form>
							</div>
						</div>
					   </div>
					 </div>
	   			</div>
	   		</div>
	  	    <div class="clear"></div>
	   </div>
	 </div>
	</div>
  
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  
 <?php echo '
	<script type="text/javascript">
	$(function(){
		var $lis=$(".checked li");
		$lis.click(function(){
			$(this).addClass("current").siblings().removeClass("current");
			var index=$lis.index(this);
			$("#contents div").eq(index).show().siblings().hide();
		})
	})
	</script>
  '; ?>

 </body>
 </html>