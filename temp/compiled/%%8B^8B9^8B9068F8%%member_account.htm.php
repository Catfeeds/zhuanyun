<?php /* Smarty version 2.6.26, created on 2018-10-05 14:44:38
         compiled from member_account.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'member_account.htm', 50, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php echo '
	<style >
		.warehouse_process{
			height: 45px;
			width: 100%;
			background-color: #ffeef1;
			border-radius: 5px;
		}
		.warehouse_process .warehouse_process_title{
			color: #3c3c3c;
			font-size: 20px;
			line-height: 45px;
			margin-left: 20px;
		}
	</style>
	'; ?>

   
    <div class="conter">
	 <div class="member_sub">
	  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "member_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
	   <div class="conter_right">
	  
		  <div class="cr_bot">
		    <dl>
			  <dt>
			  	<a href="user.php?act=member_headsculpture">
			  		<img src="<?php echo $this->_tpl_vars['users']['user_headsculpture']; ?>
" width="68px" height="68px"/>
			  	</a>
			  </dt>
			  <dd class="dds1">
		  		<h2 style="float:left;"><?php echo $this->_tpl_vars['users']['user_name']; ?>

				  <span style="font-size:14px;">（<?php echo $this->_tpl_vars['rlm']; ?>
：<?php echo $this->_tpl_vars['users']['storage_code']; ?>
）
					<?php if ($this->_tpl_vars['users']['is_validated'] == 1): ?><font color="red"> <?php echo $this->_tpl_vars['yyz']; ?>
  </font><?php else: ?><font color="green"> <?php echo $this->_tpl_vars['wtgyz']; ?>
</font><?php endif; ?></span>
		  		<!-- (编码：<?php echo $this->_tpl_vars['users']['storage_code']; ?>
&nbsp; -->
		  		</h2>
		  		<p style="float:left;padding:7px 5px;"> <?php echo $this->_tpl_vars['lang']['member_rank']; ?>
：
		  		<span <?php if ($this->_tpl_vars['users']['ur_color']): ?>style="color:<?php echo $this->_tpl_vars['users']['ur_color']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['users']['rank_name']; ?>
<?php if ($this->_tpl_vars['users']['ur_icon']): ?><img style="float:right;" src="<?php echo $this->_tpl_vars['users']['ur_icon']; ?>
"></img><?php endif; ?></span>
		  		</p>
			  </dd>
			  <dd>
			  	<p class="ddpl"><?php echo $this->_tpl_vars['xfze']; ?>
：<span><?php echo $this->_tpl_vars['currency_symbol']['Symbol']; ?>
<?php echo $this->_tpl_vars['cost']; ?>
</span></p>
			  	<p class="ddpr"><?php echo $this->_tpl_vars['kxfjf']; ?>
：<span><?php echo $this->_tpl_vars['users']['pay_points']; ?>
</span></p>
				  <p class="ddpr">订单支付方式：<span><?php echo $this->_tpl_vars['users']['user_payment_type']; ?>
</span></p>
			  	<!-- <p class="ddpr"><?php echo $this->_tpl_vars['ryzhye']; ?>
：<span><?php echo $this->_tpl_vars['currency_jpy']['Symbol']; ?>
<?php echo $this->_tpl_vars['users']['user_jpymoney']; ?>
<?php echo $this->_tpl_vars['currency_jpy']['Name']; ?>
</span></p> -->
			  </dd>
			  <dd>
			  	<p class="ddpl"><?php echo $this->_tpl_vars['zhye']; ?>
：<span><?php echo $this->_tpl_vars['currency_symbol']['Symbol']; ?>
<?php echo $this->_tpl_vars['users']['user_money']; ?>
<?php echo $this->_tpl_vars['currency_symbol']['Name']; ?>
</span></p>
			  	<p class="ddpr"><?php echo $this->_tpl_vars['yfzk']; ?>
：<span><?php if ($this->_tpl_vars['users']['discount'] != 0): ?><?php echo smarty_function_math(array('equation' => 'x/10','x' => $this->_tpl_vars['users']['discount'],'format' => '%.2f'), $this);?>
<?php else: ?>10.00<?php endif; ?>折</span></p>
			  	<!--<p class="ddpr"><?php echo $this->_tpl_vars['fszhye']; ?>
：<span><?php echo $this->_tpl_vars['currency_symbol']['Symbol']; ?>
<?php echo $this->_tpl_vars['users']['user_subsidiarymoney']; ?>
<?php echo $this->_tpl_vars['currency_symbol']['Name']; ?>
</span></p>-->
			  </dd>
			</dl>
			<div class="clear"></div>
			<table class="actable">
				<tr>
					<td class="dengj"><?php echo $this->_tpl_vars['ybtx']; ?>
</td>
					<td class="dengjs">
						<a href="member.php?act=member_12&type=0"><?php echo $this->_tpl_vars['wdh']; ?>
（<?php echo $this->_tpl_vars['package']['package0']; ?>
）</a>
					</td>
					<td class="dengjs">
						<a href="member.php?act=member_12&type=4"><?php echo $this->_tpl_vars['ych']; ?>
（<?php echo $this->_tpl_vars['package']['package4']; ?>
）</a>
					</td>
					<td class="dengjs">
						<a href="member.php?act=member_12&type=5"><?php echo $this->_tpl_vars['ddfc']; ?>
（<?php echo $this->_tpl_vars['package']['package5']; ?>
）</a>
					</td>
					<td class="dengjs"></td>
				</tr>
				<tr>
					<td class="dengj"><?php echo $this->_tpl_vars['ddtx']; ?>
</td>
					<td class="dengjs">
						<a href="member.php?act=21&type=0"><?php echo $this->_tpl_vars['wcl']; ?>
（<?php echo $this->_tpl_vars['order']['order0']; ?>
）</a>
					</td>
					<td class="dengjs">
						<a href="member.php?act=21&type=3"><?php echo $this->_tpl_vars['wfk']; ?>
（<?php echo $this->_tpl_vars['order']['order3']; ?>
）</a>
					</td>
					<td class="dengjs">
						<a href="member.php?act=21&type=4"><?php echo $this->_tpl_vars['dbz']; ?>
（<?php echo $this->_tpl_vars['order']['order4']; ?>
）</a>
					</td>
					<td class="dengjs">
						<a href="member.php?act=21&type=5"><?php echo $this->_tpl_vars['yfc']; ?>
（<?php echo $this->_tpl_vars['order']['order5']; ?>
）</a>
					</td>
				</tr>
			 </table>
			 <?php $_from = $this->_tpl_vars['warehouse_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['warehouse']):
?>
		 	<table class="actables">
				<tr>
					<th colspan="2"><span></span><?php echo $this->_tpl_vars['warehouse']['HouseName']; ?>
</th>
				</tr>
		 
				<tr>
					<td class="dengj" colspan="2">（Address）：<?php echo $this->_tpl_vars['warehouse']['Address']; ?>
</td>
				</tr>
				<tr>
					<td class="dengj"><?php echo $this->_tpl_vars['city']; ?>
（City）：<?php echo $this->_tpl_vars['warehouse']['City']; ?>
</td>
					<td class="dengj">省（Province）：<?php echo $this->_tpl_vars['warehouse']['Province']; ?>
</td>
				</tr>
				<tr>
					<td class="dengj"><?php echo $this->_tpl_vars['zip']; ?>
（Zip Code）：<?php echo $this->_tpl_vars['warehouse']['ZipCode']; ?>
</td> 
					<td class="dengj"><?php echo $this->_tpl_vars['tel']; ?>
（Tel）:<?php echo $this->_tpl_vars['warehouse']['Tel']; ?>
</td>
				</tr>	
				<!-- <tr>
					<td class="dengj"><?php echo $this->_tpl_vars['mfccts']; ?>
：<?php echo $this->_tpl_vars['warehouse']['WarehousingBM']; ?>
<?php echo $this->_tpl_vars['days']; ?>
，<?php echo $this->_tpl_vars['cssq']; ?>
￥<?php echo $this->_tpl_vars['warehouse']['Warehousing']; ?>
/<?php echo $this->_tpl_vars['days']; ?>
</td>
					<td style="color: #f00; font-style: oblique;"><?php echo $this->_tpl_vars['zdxhts']; ?>
<?php echo $this->_tpl_vars['warehouse']['RolloverBM']; ?>
<?php echo $this->_tpl_vars['twfhjzd']; ?>
</td>
				</tr> -->
				<tr>
					<td class="dengj" colspan="2" style="color: #f00; font-style: oblique;"><?php echo $this->_tpl_vars['zysx']; ?>
（attentions）：<?php echo $this->_tpl_vars['warehouse']['Note']; ?>
</td>
				</tr>
			 </table>
			 <?php endforeach; endif; unset($_from); ?>

			 <div id="hyzxzylc">
					<div class="warehouse_process">
						<div class="warehouse_process_title">转运流程</div>
					</div>
					<div id="hyzxzylc_neirong">
						<div id="hyzxzylc_neirong_01">
							<img src="themes/default/images/rbhm/hyzx_13.jpg" border="0">
						</div>
						<div id="hyzxzylc_neirong_02">
							<div class="hyzxzylc_neirong_img"><img src="themes/default/images/rbhm/hyzx_07.jpg" border="0"></div>
							<div class="hyzxzylc_neirong_txt">
								注册用户获得上方下单地址<br>
								购买完毕后得到商家发货单号通常为12位数字<br>
								将得到的日本国内物流公司的货运单号到到货预报填写，可只填写单号即可，为方便提交发货，建议在预报页面将购物的物品名称，数量和单价填写完整。
							</div>
						</div>
						<div id="hyzxzylc_neirong_03">
							<div class="hyzxzylc_neirong_03_jt"><img src="themes/default/images/rbhm/hyzx_12.jpg" border="0"></div>
							<div class="hyzxzylc_neirong_03_sz"><img src="themes/default/images/rbhm/hyzx_14.jpg" border="0"></div>
						</div>
						<div id="hyzxzylc_neirong_04">
							<div class="hyzxzylc_neirong_img"><img src="themes/default/images/rbhm/hyzx_08.jpg" border="0"></div>
							<div class="hyzxzylc_neirong_txt">
	待购买过的包裹入库之后，到【提交发货】页面，勾选需要发货的包裹，选择运输线路，如果在预报时没有填写商品内容或没有预报的包裹，需要在提交发货页面填写商品内容向收件国海关进行申报。
							</div>
						</div>
						<div id="hyzxzylc_neirong_05">
							<div class="hyzxzylc_neirong_03_jt"><img src="themes/default/images/rbhm/hyzx_12.jpg" border="0"></div>
							<div class="hyzxzylc_neirong_03_sz"><img src="themes/default/images/rbhm/hyzx_15.jpg" border="0"></div>
						</div>
						<div id="hyzxzylc_neirong_06">
							<div class="hyzxzylc_neirong_img"><img src="themes/default/images/rbhm/hyzx_09.jpg" border="0"></div>
							<div class="hyzxzylc_neirong_txt">
	提交发货后等待处理，如选择手动确认方式支付，则在打包完成后需要手动在订单列表确认支付，如果选择自动支付且余额足够，则会自动进入发货程序.						</div>
						</div>
						<div id="hyzxzylc_neirong_07">
							<div class="hyzxzylc_neirong_03_jt"><img src="themes/default/images/rbhm/hyzx_12.jpg" border="0"></div>
							<div class="hyzxzylc_neirong_03_sz"><img src="themes/default/images/rbhm/hyzx_16.jpg" border="0"></div>
						</div>
						<div id="hyzxzylc_neirong_08">
							<div class="hyzxzylc_neirong_img"><img src="themes/default/images/rbhm/hyzx_10.jpg" border="0"></div>
							<div class="hyzxzylc_neirong_txt">
	发货后，订单列表会显示发货单号，通常为E和C开头，中间数字以 JP结尾，直接点击该单号可以链接追踪信息，此号码为国际运输查询单号，中途不会进行改变。						</div>
						</div>
						<div id="hyzxzylc_neirong_09">
							<div class="hyzxzylc_neirong_03_jt"><img src="themes/default/images/rbhm/hyzx_12.jpg" border="0"></div>
							<div class="hyzxzylc_neirong_03_sz"><img src="themes/default/images/rbhm/hyzx_17.jpg" border="0"></div>
						</div>
						<div id="hyzxzylc_neirong_10">
							<div class="hyzxzylc_neirong_img"><img src="themes/default/images/rbhm/hyzx_11.jpg" border="0"></div>
							<div class="hyzxzylc_neirong_txt">
	收到包裹后，首先确认重量是否与出库重量有差异，如果有请先不要签收，尽量开箱查验是否有缺少，并尽快联系我司客服，如商品正常，则签收，转运流程结束。						</div>
						</div>
						<div id="clear"></div>
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