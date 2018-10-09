<?php /* Smarty version 2.6.26, created on 2018-10-05 14:43:56
         compiled from member_forecast_view.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <style type="text/css">
	 <?php echo '
	 .package-status li {
		 display: none;
	 }
	 '; ?>

 </style>
   
<div class="conter">
	 <div class="member">
	   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "member_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
	   <div class="conter_right">
	        <div class="member_sub">

			    <div class="cr_top">
		 			<h2>预报详细<span>我的包裹</span></h2>
				</div>
				 <div class="member_stock pl10">
				  
				    
				    <center>
					    <table class="order_detail" style="margin-bottom:2px;">
							<tr>
								<th><?php echo $this->_tpl_vars['lang']['pck_id']; ?>
</th>
								<th>登记时间</th>
								<th>包裹状态 </th>
							</tr>
							<tbody>
								<tr>
								<td><?php echo $this->_tpl_vars['package']['pck_id']; ?>
</td>
								<td><?php echo $this->_tpl_vars['package']['pck_intime']; ?>
</td>
									<td style="height:50px">
										<ul class="checked package-status" style="    text-align: center;
    display: inline-block;margin-top:0">
											<li><div class="tb_kong">&nbsp;</div></li>
											<li id="packagestatus0"
												<?php if ($this->_tpl_vars['package']['pck_packagestatus'] == 0): ?> style="display: block" <?php endif; ?>
											><a href="javascript:;">入库途中</a></li>
											<li id="packagestatus1"
												<?php if ($this->_tpl_vars['package']['pck_packagestatus'] == 1): ?> style="display: block" <?php endif; ?>
											><a href="javascript:;">已入库</a></li>
											<li id="packagestatus2"
												<?php if ($this->_tpl_vars['package']['pck_packagestatus'] == 2): ?> style="display: block" <?php endif; ?>
											><a href="javascript:;">未处理</a></li>
											<li id="packagestatus3"
												<?php if ($this->_tpl_vars['package']['pck_packagestatus'] == 3): ?> style="display: block" <?php endif; ?>
											><a href="javascript:;">打包中</a></li>
											<li id="packagestatus4"
												<?php if ($this->_tpl_vars['package']['pck_packagestatus'] == 4): ?> style="display: block" <?php endif; ?>
											><a href="javascript:;">等待发出</a></li>
											<li id="packagestatus5"
												<?php if ($this->_tpl_vars['package']['pck_packagestatus'] == 5): ?> style="display: block" <?php endif; ?>
											><a href="javascript:;">已发出</a></li>
											<li id="packagestatus6"
												<?php if ($this->_tpl_vars['package']['pck_packagestatus'] == 6): ?> style="display: block" <?php endif; ?>
											><a href="javascript:;">历史预报</a></li>
											<li id="packagestatus7"
												<?php if ($this->_tpl_vars['package']['pck_packagestatus'] == 7): ?> style="display: block" <?php endif; ?>
											><a href="javascript:;">问题件</a></li>
											<!--<li id="packagestatus8" ><a href="#">问题件</a></li>-->
										</ul>

									</td>
								</tr>
							</tbody>
						</table>

						<table class="order_detail" style="margin-bottom:2px;">
							<tr>

								<th><?php echo $this->_tpl_vars['lang']['pck_ordernumber']; ?>
</th>
								<th>包裹单号</th>
								<th><?php echo $this->_tpl_vars['lang']['pck_warehouseid']; ?>
</th>
								<th><?php echo $this->_tpl_vars['lang']['pck_userremark']; ?>
</th>
							</tr>
							<tbody>
								<tr>

								<td><?php echo $this->_tpl_vars['package']['order_no']; ?>
</td>
								<td><?php echo $this->_tpl_vars['package']['pck_expressnumber']; ?>
</td>
								<td><?php echo $this->_tpl_vars['package']['HouseName']; ?>
</td>
								<td><?php echo $this->_tpl_vars['package']['pck_userremark']; ?>
</td>
								</tr>
							</tbody>
						</table>
						<table class="order_detail" style="margin-bottom:2px;">
							<tr><th colspan="4" ><?php echo $this->_tpl_vars['lang']['pck_goods']; ?>
</th></tr>
							<tr>
								<th><?php echo $this->_tpl_vars['lang']['pckg_name']; ?>
</th>
								<th><?php echo $this->_tpl_vars['lang']['pckg_amount']; ?>
</th>
								<th><?php echo $this->_tpl_vars['lang']['pckg_unitprice']; ?>
 (元)</th>
								<th><?php echo $this->_tpl_vars['lang']['pckg_totalprice']; ?>
 (元)</th>
							</tr>
							<tbody>
								<?php $_from = $this->_tpl_vars['packagegoods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name_packagegoods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_packagegoods']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['packagegoods']):
        $this->_foreach['name_packagegoods']['iteration']++;
?>
								<tr>
									<td><?php echo $this->_tpl_vars['packagegoods']['pckg_name']; ?>
</td>
									<td><?php echo $this->_tpl_vars['packagegoods']['pckg_amount']; ?>
</td>
									<td><?php echo $this->_tpl_vars['packagegoods']['pckg_unitprice']; ?>
</td>
									<td><?php echo $this->_tpl_vars['packagegoods']['pckg_totalprice']; ?>
</td>
								</tr>
						        <?php endforeach; endif; unset($_from); ?>
							</tbody>
						</table>
					    <table class="order_detail" style="margin-bottom:2px;">
							<tr>
								<th><?php echo $this->_tpl_vars['lang']['pck_adminremark']; ?>
</th>

							</tr>
							<tbody>
								<tr>
									<td><span id="checkresult"><?php echo $this->_tpl_vars['package']['pck_adminremark']; ?>
</span></td>

								</tr>
							</tbody>
						</table>
						<table class="order_detail" style="margin-bottom:2px;">
							<tr>
								<th><?php echo $this->_tpl_vars['lang']['pck_weight']; ?>
</th>
								<th><?php echo $this->_tpl_vars['lang']['pck_asses']; ?>
  (元)</th>
								<th><?php echo $this->_tpl_vars['lang']['pck_size']; ?>
 mm³</th>
							</tr>
							<tbody>
								<tr>
									<td><?php echo $this->_tpl_vars['package']['pck_weight']; ?>
 <?php echo $this->_tpl_vars['package']['WeightUnit']; ?>
</td>
									<td><?php echo $this->_tpl_vars['package']['Symbol']; ?>
<?php echo $this->_tpl_vars['package']['pck_assess']; ?>
</td>
									<td><?php echo $this->_tpl_vars['package']['pck_sizelength']; ?>
*<?php echo $this->_tpl_vars['package']['pck_sizewidth']; ?>
*<?php echo $this->_tpl_vars['package']['pck_sizeheight']; ?>
</td>
								</tr>
							</tbody>
						</table>
						<table class="order_detail" style="margin-bottom:2px;">
							<tr>
								<th colspan="2"><?php echo $this->_tpl_vars['lang']['pck_service']; ?>
</th>
							</tr>
							<tr>
								<th style="width:200px;"><?php echo $this->_tpl_vars['lang']['pck_service']; ?>
</th>
								<th><?php echo $this->_tpl_vars['lang']['pck_service_des']; ?>
</th>
							</tr>
							<?php $_from = $this->_tpl_vars['package_service_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name_package_service'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_package_service']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['package_service']):
        $this->_foreach['name_package_service']['iteration']++;
?>
								<tr>
									<td><?php echo $this->_tpl_vars['package_service']['ServiceName']; ?>
</td>
									<td><span class="span_des"><?php echo $this->_tpl_vars['package_service']['Description']; ?>
</span></td>
								</tr>
							<?php endforeach; endif; unset($_from); ?>
						</table>

						<table class="order_detail" style="margin-bottom:2px;">
							<tr>
								<th colspan="2">购物凭证</th>
							</tr>
							<tr>
								<td>
							<?php $_from = $this->_tpl_vars['shoppingvouchers_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name_shoppingvouchers'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_shoppingvouchers']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['shoppingvouchers']):
        $this->_foreach['name_shoppingvouchers']['iteration']++;
?>
								<A href="<?php echo $this->_tpl_vars['shoppingvouchers']['psv_vouchersvalue']; ?>
" target="_blank">
									<IMG src="<?php echo $this->_tpl_vars['shoppingvouchers']['psv_vouchersvalue']; ?>
" width="150px" height="100px">
								</A>
			    			<?php endforeach; endif; unset($_from); ?>
								</td>
							</tr>
						</table>
						<?php if (count ( $this->_tpl_vars['packageattachs'] ) > 0): ?>
						<table class="order_detail" style="margin-bottom:2px;">
							<tr>
								<th colspan="2">附件</th>
							</tr>
							<tr>
								<td>
							<?php $_from = $this->_tpl_vars['packageattachs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name_attach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_attach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['attach']):
        $this->_foreach['name_attach']['iteration']++;
?>
			    				<a target="_blank" href="<?php echo $this->_tpl_vars['attach']['pa_attach']; ?>
">
									<img src="<?php echo $this->_tpl_vars['attach']['pa_attach']; ?>
" style="width:60px;height:60px;" title="<?php echo $this->_tpl_vars['lang']['pck_attach_mastermap']; ?>
"></img>
			    				</a>
			    			<?php endforeach; endif; unset($_from); ?>
								</td>
							</tr>
						</table>
						<?php endif; ?>
						<!--
					    	<table  border="0" cellspacing="1" cellpadding="0">
					    		<tr>
					    			<td class="tr_right"><?php echo $this->_tpl_vars['lang']['pck_id']; ?>
：</td>
									<td class="tr_left"><?php echo $this->_tpl_vars['package']['pck_id']; ?>
</td>
								</tr>
					    		<?php if ($this->_tpl_vars['package']['pck_packagestatus'] > 0 && $this->_tpl_vars['package']['pck_packagestatus'] < 6): ?>
					    		<tr>
					    			<td class="tr_right"><?php echo $this->_tpl_vars['lang']['pck_ordernumber']; ?>
：</td>
									<td class="tr_left"><?php echo $this->_tpl_vars['package']['order_no']; ?>
</td>
								</tr>
					    		<?php endif; ?>
					    		<tr>
					    			<td class="tr_right"><?php echo $this->_tpl_vars['lang']['pck_warehouseid']; ?>
：</td>
									<td class="tr_left"><?php echo $this->_tpl_vars['package']['HouseName']; ?>
</td>
								</tr>
					    		<tr><td class="tr_right"><?php echo $this->_tpl_vars['lang']['pck_goods']; ?>
：</td>
					    			<td class="tr_left">
					    				<table style="font-weight:bold;">
						            	<?php $_from = $this->_tpl_vars['packagegoods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name_packagegoods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_packagegoods']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['packagegoods']):
        $this->_foreach['name_packagegoods']['iteration']++;
?>
						            	<tr>
						            		<td>
						            			<?php echo $this->_tpl_vars['lang']['pckg_name']; ?>
：<?php echo $this->_tpl_vars['packagegoods']['pckg_name']; ?>

						            		    <?php echo $this->_tpl_vars['lang']['pckg_amount']; ?>
：<?php echo $this->_tpl_vars['packagegoods']['pckg_amount']; ?>

						            		    <?php echo $this->_tpl_vars['lang']['pckg_unitprice']; ?>
：<?php echo $this->_tpl_vars['packagegoods']['pckg_unitprice']; ?>

						            		    <?php echo $this->_tpl_vars['lang']['pckg_totalprice']; ?>
：<?php echo $this->_tpl_vars['packagegoods']['pckg_totalprice']; ?>

											</td>
						            	</tr>
						            	<?php endforeach; endif; unset($_from); ?>
					    				</table>
					    			</td>
					    		</tr>
					    		<tr>
					    			<td class="tr_right"><?php echo $this->_tpl_vars['lang']['pck_userremark']; ?>
：</td>
									<td class="tr_left"><?php echo $this->_tpl_vars['package']['pck_userremark']; ?>
</td>
								</tr>
					    		<tr>
					    			<td class="tr_right">
					    				<?php echo $this->_tpl_vars['lang']['pck_adminremark']; ?>
：
					    			</td>
					    			<td  class="tr_left">
					    				<span id="checkresult"><?php echo $this->_tpl_vars['package']['pck_adminremark']; ?>
</span>
					    			</td>
					    		</tr>
					    		<tr>
					    			<td class="tr_right"><?php echo $this->_tpl_vars['lang']['pck_weight']; ?>
：</td>
									<td class="tr_left"><?php echo $this->_tpl_vars['package']['pck_weight']; ?>
 <?php echo $this->_tpl_vars['package']['WeightUnit']; ?>
</td>
								</tr>
					    		<tr>
					    			<td class="tr_right"><?php echo $this->_tpl_vars['lang']['pck_asses']; ?>
：</td>
									<td class="tr_left"><?php echo $this->_tpl_vars['package']['Symbol']; ?>
<?php echo $this->_tpl_vars['package']['pck_assess']; ?>
</td>
								</tr>
					    		<tr>
					    			<td class="tr_right"><?php echo $this->_tpl_vars['lang']['pck_size']; ?>
：</td>
									<td class="tr_left"><?php echo $this->_tpl_vars['package']['pck_sizelength']; ?>
*<?php echo $this->_tpl_vars['package']['pck_sizewidth']; ?>
*<?php echo $this->_tpl_vars['package']['pck_sizeheight']; ?>
</td>
								</tr>		    		
					    		<tr>
					    			<td class="tr_right"><?php echo $this->_tpl_vars['lang']['pck_service']; ?>
：</td>
					    			<td class="tr_left">
						    			<ul>
											<?php $_from = $this->_tpl_vars['package_service_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name_package_service'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_package_service']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['package_service']):
        $this->_foreach['name_package_service']['iteration']++;
?>
											<li><?php echo $this->_tpl_vars['package_service']['ServiceName']; ?>
 <span class="span_des"><?php echo $this->_tpl_vars['package_service']['Description']; ?>
</span></li>
											<?php endforeach; endif; unset($_from); ?>
										</ul>
									</td>
					    		</tr>
					    		<tr>
					    			<td class="tr_right"><?php echo $this->_tpl_vars['lang']['pck_attach']; ?>
：</td>
					    			<td style="text-align:center; font-size:16px; font-family:微软雅黑;">
					    			<?php $_from = $this->_tpl_vars['packageattachs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name_attach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_attach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['attach']):
        $this->_foreach['name_attach']['iteration']++;
?>
					    				<a target="_blank" href="<?php echo $this->_tpl_vars['attach']['pa_attach']; ?>
">
					    					<img src="<?php echo $this->_tpl_vars['attach']['pa_attach']; ?>
" style="width:60px;height:60px;" title="<?php echo $this->_tpl_vars['lang']['pck_attach_mastermap']; ?>
"></img>
					    				</a>
					    			<?php endforeach; endif; unset($_from); ?>
					    			</td>
					    		</tr>
					    	</table>
					    	 -->
					    	</center>
				    
					<div class="clear"></div>
				  
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
 <script type="text/javascript">
<?php echo '
   var htmlContent = $(\'#checkresult\').html();
   var img=\'\';
   var text=\'\';
   text = htmlContent.replace(/<img [^>]*src=[\'"]([^\'"]+)[^>]*>/gi, function (match,capture) {
	   match = match.replace(\'>\',\' width="100px" height="100px" >\');
	   match = match.replace(\'alt=""\',\'alt="点击查看原图"\')
	   img+="<a target=\'_blank\' href=\'"+capture+"\'>"+match+"</a>";
	});
   text = "</br>"+text.replace(/undefined/ig,\'\');
   $(\'#checkresult\').html(img+text);
   /*
   var data = htmlContent.replace(/<img.*>.*<\\/img>/ig,"");   //过滤如<img></img>形式的图片元素
   data = data.replace(/<img.*\\/>/ig, "");   //过滤如<img />形式的元素
   data = data.replace(/<img.*>/ig, "");   //过滤如<img >形式的元素
   */
'; ?>

</script>