<?php /* Smarty version 2.6.26, created on 2018-09-24 17:38:59
         compiled from member_address.htm */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="themes/default/js/member/address.js"></script>
<style type="text/css">
	<?php echo '
	.stocktable th {
		font-weight: bold;
	}
	'; ?>

</style>




<div class="conter">
	<div class="member">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "member_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
	<div class="conter_right">
	<div class="cost myacc member_sub">
		<div class="cr_bot">
			<h2>资料管理<span>(收货地址维护。)</span></h2>

				
			<table id="stocktable" class="stocktable">
				<tr>
				<!--<th><input id="chk_id" onclick="listTable.selectAll(this,'checkboxes')" type="checkbox" /></th>-->
				<th>地址名称</th>
				<th>收货人</th>
					<th>国家</th>
				<th>地址</th>
				<th>邮编</th>
				<th>认证状态</th>
				<th>操作</th>
				</tr>
			</table>
			<a class="dell" style="position:relative;right:10px;" href="member_datamanage.php?act=member_addusers_deliveryaddress">添加
			</a>


			<div class="clear"></div>
			<div id='pagecount' class='class_paging'></div>
			<div class="clear"></div>
		</div>
	</div>
	</div>
</div>
<div class="clear"></div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



 </body>
 </html>