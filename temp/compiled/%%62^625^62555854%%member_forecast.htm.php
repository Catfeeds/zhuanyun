<?php /* Smarty version 2.6.26, created on 2018-09-24 17:39:13
         compiled from member_forecast.htm */ ?>

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
	    	  	 	<h2>到货预报<span><a href="toPackageForecastInstruction">查看包裹预报使用说明。</a></span></h2>
	    	  	 </div>


			   <form enctype="multipart/form-data" action="member_packagemanage.php?act=member_insert" method="post" name="theForm" onsubmit="return validate()">
	   			<div class="div_step_des">
	   				<span class="span_step"><?php echo $this->_tpl_vars['Maininformation']; ?>

					</span>
	   			</div>
				 <table class="datum tb  member_stock packageTb">
				     	<tr>
				     		<td class="tb_left"><?php echo $this->_tpl_vars['choosewarehouse']; ?>
：</td>
				     		<td>
				     			<select name="pck_warehouseid" onchange="select_warehouse(this.options[this.options.selectedIndex].value)">
						 			<option value='0'><?php echo $this->_tpl_vars['lang']['select_warehouse']; ?>
</option><?php echo $this->_tpl_vars['warehouse_list']; ?>

					 			</select>
					 			<span class="span_des"><?php echo $this->_tpl_vars['Defaultwarehouse']; ?>
</span>
					 			<span id="housewarn" class="span_control"></span>
					 		</td>
				     	</tr>
				     	<tr>
				     		<td></td>
				     		<td>
				     			<div style="padding:5px 0px 0px 0px; COLOR: #009" id="houseinfo">
				     			<?php echo $this->_tpl_vars['Warehouseaddress']; ?>
：<?php echo $this->_tpl_vars['warehouse_currecy']['Province']; ?>
 <?php echo $this->_tpl_vars['warehouse_currecy']['City']; ?>
 <?php echo $this->_tpl_vars['warehouse_currecy']['AreaName']; ?>
 <?php echo $this->_tpl_vars['warehouse_currecy']['Address']; ?>

					 			</div>
				     		</td>
				     	</tr>
				     	<tr>
				     		<td class="tb_left"><?php echo $this->_tpl_vars['lang']['pck_expressnumber']; ?>
：</td>
				     		<td>
				     			<input name="pck_expressnumber" class="member_text" type="text" onblur="pck_expressnumber_validate(this.value)"/>
				     			<span class="span_required">*</span>
				     			<span class="span_required" id="pck_expressnumber_des"></span>
				     		</td>
				     	</tr>
				     	<!--
				     	<tr>
				     		<td class="tb_left"><?php echo $this->_tpl_vars['Messagebody']; ?>
：</td>
				     		<td>
					 			<input name="pck_expressnumber_content" class="member_text" type="text" />
					 			<span class="span_des"><?php echo $this->_tpl_vars['Canbedirectly']; ?>
</span>
				     		</td>
				     	</tr> -->
				     	<tr>
				     		<td class="tb_lefts" style="vertical-align: top;"><p><?php echo $this->_tpl_vars['Detailedinformation']; ?>
：</p></td>
				     		<td>
					 			<table class="package" id="testTab">
									<tr>
										<th><?php echo $this->_tpl_vars['Serialnumber']; ?>
</th><th><?php echo $this->_tpl_vars['Commodityname']; ?>
</th><th><?php echo $this->_tpl_vars['Number']; ?>
</th><th id="unitprice"><?php echo $this->_tpl_vars['UnitPrice']; ?>
（人民币）</th>
										<!--<th id="totalprice"><?php echo $this->_tpl_vars['Total']; ?>
（人民币）</th>-->
										<th><input class="buts"  type="button" name="tianjia" onClick="addTr()" /></th>
									</tr>
									<td class="member_package0">1</td>
									<td class="member_package1"><input name="pckg_name0" style='height:23px;width:96%' type="text" /></td>
									<td class="member_package2"><input name="pckg_amount0" style='height:23px;width:96%' value="" onblur="upperCase(1)" type="text" /></td>
									<td class="member_package3"><input name="pckg_unitprice0" style='height:23px;width:96%' value="" onblur="upperCase(1)" type="text" /></td>
									<!--<td class="member_package4"><input name="pckg_totalprice0" style='height:23px;width:96%' type="text" size="6" readonly="true" /></td>-->
									<td class="member_package5"></td>
									</tr>
							  </table>
				     		</td>
				     	</tr>
				     	<tr>
				     		<td class="tb_lefts"><p><?php echo $this->_tpl_vars['Remarks']; ?>
：</p></td>
						<td><textarea name="pck_userremark" cols=30></textarea></td>
				     	</tr>
				     	<tr>
				     		<td class="tb_lefts"><p><?php echo $this->_tpl_vars['addedservice']; ?>
：</p></td>
							<td id="pck_service">
							<ul>
								<?php $_from = $this->_tpl_vars['service_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name_service'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_service']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['service']):
        $this->_foreach['name_service']['iteration']++;
?>
								<li>
									<input id="<?php echo $this->_tpl_vars['service']['ServiceId']; ?>
" name="services[]" value="<?php echo $this->_tpl_vars['service']['ServiceId']; ?>
" type="checkbox"></input>
									<label for="<?php echo $this->_tpl_vars['service']['ServiceId']; ?>
"><?php echo $this->_tpl_vars['service']['ServiceName']; ?>
</label>
									 <span class="span_des"><?php echo $this->_tpl_vars['service']['Description']; ?>
</span>
								</li>
								<?php endforeach; else: ?>
								<li>请选择仓库</li>
								<?php endif; unset($_from); ?>
							</ul>
							</td>
				     	</tr>
				 </table>
	   			<div class="div_step_des">
	   				<span class="span_step">
						<label for="chk_show" style="position:relative;top:-3px;"><?php echo $this->_tpl_vars['Subsidiaryinformation']; ?>
</label>
						<input id="chk_show" type="checkbox" style="position:relative;top:-1px;" onclick="show_other_mess()"/>
					</span>
	   			</div>
			         <div id="other_mess" class="hide">
				     <table class="datum tb  member_stock packageTb">
				     	<tr>
				     		<td class="tb_left"><?php echo $this->_tpl_vars['Lineexpress']; ?>
：</td>
				     		<td>
								 <select name="pck_expressid">
								 	<option><?php echo $this->_tpl_vars['lang']['select_dictionary']; ?>
</option>
								 	<?php echo $this->_tpl_vars['package_shipment_option']; ?>

								 </select>
					 		</td>
				     	</tr>

				     	<tr>
				     		<td class="tb_left">
				     			<?php echo $this->_tpl_vars['Expectedweight']; ?>
：
							</td>
							<td>
								<input name="pck_weight" class="member_text" type="text" />
								<span id="WeightUnit"><?php echo $this->_tpl_vars['warehouse_currecy']['WeightUnit']; ?>
</span>
							</td>
				     	</tr>
				     	<tr>
				     		<td class="tb_left"><?php echo $this->_tpl_vars['Ordernumber']; ?>
：</td>
				     		<td>
				     			<select name="pck_ordersite">
					 			<option><?php echo $this->_tpl_vars['lang']['select_ordersite']; ?>
</option>
					 			<option value=0>线下购买</option>
					 			<?php echo $this->_tpl_vars['package_shopping_site_option']; ?>

					 			</select> -
					 			<input name="pck_ordernumber" class="member_text" type="text" placeholder="<?php echo $this->_tpl_vars['Fillnumber']; ?>
" />
					 		</td>
				     	</tr>
				     	<tr>
				     		<td class="tb_left"><?php echo $this->_tpl_vars['Size']; ?>
：</td>
				     		<td>
				     			<input name="pck_sizelength" class="member_text tiny-text" placeholder="长"  type="number" /> x
				 				<input name="pck_sizewidth" class="member_text tiny-text" placeholder="宽"  type="number" /> x
				 				<input name="pck_sizeheight" class="member_text tiny-text" placeholder="高"  type="number" />
				     		</td>
				     	</tr>
				     	<tr>
				     		<td class="tb_left"><?php echo $this->_tpl_vars['Voucher1']; ?>
：</td>
				     		<td><input type="file" accpet="image/gif,image/png,image/jpeg,image/jpg" name="shoppingvouchers1"/></td>
				     	</tr>
				     	<tr>
				     		<td class="tb_left"><?php echo $this->_tpl_vars['Voucher2']; ?>
：</td>
				     		<td><input type="file"  accpet="image/gif,image/png,image/jpeg,image/jpg"  name="shoppingvouchers2"/></td>
				     	</tr>
				     	<tr>
				     		<td class="tb_left"><?php echo $this->_tpl_vars['Voucher3']; ?>
：</td>
				     		<td><input type="file"  accpet="image/gif,image/png,image/jpeg,image/jpg"  name="shoppingvouchers3"/></td>
				     	</tr>
				     	<tr>
				     		<td class="tb_left"><?php echo $this->_tpl_vars['Voucher4']; ?>
：</td>
				     		<td><input type="file"  accpet="image/gif,image/png,image/jpeg,image/jpg"  name="shoppingvouchers4"/></td>
				     	</tr>
				     	<tr>
				     		<td class="tb_left"><?php echo $this->_tpl_vars['Voucher5']; ?>
：</td>
				     		<td><input type="file"  accpet="image/gif,image/png,image/jpeg,image/jpg"  name="shoppingvouchers5"/></td>
				     	</tr>
					 </table>
				 </div>
				 <input type="hidden" name="pck_assess" value="0" id="pck_assess"></input>
				 <button type="submit"><?php echo $this->_tpl_vars['Submitorders']; ?>
</button>
				 <input type="hidden" name="pckgcount" value="1" id="pckg"></input>
				 <input type="hidden" name="pck_name" value="" id="pck_name"></input>
				 <input type="hidden" id="hidden_pck_expressnumber" value="0"></input>
			 </form>
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
  
  <?php echo '
<script type="text/javascript">
//添加一个详细商品信息行
//要确定行的唯一性（提示：你可以使用你的主键）
   var id=2;
	//添加行的方法
   function addTr()
   {
    //获得表格对象
    var tb=document.getElementById(\'testTab\');

    //添加一行
    var newTr = tb.insertRow(-1);//在最下的位置

    //给这个行设置id属性，以便于管理（删除）
    newTr.id=\'tr\'+id;
    //设置对齐方式（只是告诉你，可以以这种方式来设置任何它有的属性）
    newTr.align=\'center\';
    //添加6列
    var newTd0 = newTr.insertCell(0);
    var newTd1 = newTr.insertCell(1);
	var newTd2 = newTr.insertCell(2);
	var newTd3 = newTr.insertCell(3);
    var newTd4 = newTr.insertCell(4);
	//var newTd5 = newTr.insertCell(5);

    //设置列内容和属性
    newTd0.innerHTML=id; //让你看到删除的是指定的行
	newTd1.innerHTML= "<input name=\'pckg_name"+(id-1)+"\' style=\'height:23px;width:96%\' type=\'text\' size=\'21\' />";
	newTd2.innerHTML= "<input name=\'pckg_amount"+(id-1)+"\' style=\'height:23px;width:96%\' onblur=\'upperCase("+id+")\' type=\'text\' size=\'4\' />";
	newTd3.innerHTML= "<input name=\'pckg_unitprice"+(id-1)+"\' style=\'height:23px;width:96%\' onblur=\'upperCase("+id+")\' type=\'text\' size=\'7\' />";
	//newTd4.innerHTML= "<input name=\'pckg_totalprice"+(id-1)+"\' style=\'height:23px;width:96%\' type=\'text\' placehodler=\'自动计算\' size=\'6\' readonly=\'true\'/>";
    newTd4.innerHTML= "<img src=\'themes/default/images/submit2.png\' style=\'width:19px; height:20px;\' class=\'dengj6\' onclick=\\"moveTr(\'"+id+"\');\\"/>";

    document.getElementById("pckg").value=(id);
    id++;
   }
   //移除行的方法
   function moveTr(id)
   {
    //获得表格对象
    var tb=document.getElementById(\'testTab\');
    //根据id获得将要删除行的对象
    var tr=document.getElementById(\'tr\'+id);
    //取出行的索引，设置删除行的索引
    tb.deleteRow(tr.rowIndex);

   }

   function upperCase(index)
   {
	    index = index-1;

		var name_pckg_amount=\'pckg_amount\'+index;
		var name_pckg_unitprice=\'pckg_unitprice\'+index;
	    var name_pckg_totalprice=\'pckg_totalprice\'+index;

		var pckg_amount = document.getElementsByName(name_pckg_amount);
		var pckg_unitprice = document.getElementsByName(name_pckg_unitprice);
		var pckg_totalprice = document.getElementsByName(name_pckg_totalprice);

		var pckg_amount_value = 0;
		var pckg_unitprice_value = 0;
		for (var i = 0; i < pckg_amount.length; i++) {
			pckg_amount_value = pckg_amount[i].value;
		}
		for (var i = 0; i < pckg_unitprice.length; i++) {
			pckg_unitprice_value = pckg_unitprice[i].value;
		}
		if(Utils.trim(pckg_amount_value)!=\'\' && !Utils.isNumber(pckg_amount_value))
		{
			for (var i = 0; i < pckg_amount.length; i++) {
				pckg_amount[i].value = \'1\';
			}
			pckg_amount_value = 1;
			alert(pckg_amount_value+\'数据格式错误\');
		}
		if(Utils.trim(pckg_unitprice_value)!=\'\' && !Utils.isNumber(pckg_unitprice_value))
		{
			for (var i = 0; i < pckg_unitprice.length; i++) {
				pckg_unitprice[i].value = \'1\';
			}
			pckg_unitprice_value = 1;
			alert(pckg_unitprice_value+\'数据格式错误\');
		}

		if(pckg_amount_value!=0 && pckg_unitprice_value!=0)
		{
			for (var i = 0; i < pckg_totalprice.length; i++) {
				pckg_totalprice[i].value = parseInt(pckg_amount_value) * parseInt(pckg_unitprice_value);
			}
		}
		else
		{
			for (var i = 0; i < pckg_totalprice.length; i++) {
				pckg_totalprice[i].value = "";
			}
		}
   }

   //显示附属信息
   function show_other_mess()
   {
       var bischecked = $(\'#chk_show\').is(\':checked\');
	   if(bischecked)
	   {
		   $(\'#other_mess\').removeClass("hide");
	   }
	   else{
		   $(\'#other_mess\').addClass("hide");
	   }
   }

   function pck_expressnumber_validate(value)
   {
	   $.ajax({
			type: \'POST\',
			url: \'member_forecast.php?act=expressnumber_validate\',
			data: {\'pck_expressnumber\':value},
			dataType:\'json\',
			success:function(json){
				if(json.error!=0)
				{
					$(\'#pck_expressnumber_des\').text(pck_expressnumber_isexist);
					$(\'#hidden_pck_expressnumber\').val("1");
				}else{
					$(\'#pck_expressnumber_des\').text(\'\');
					$(\'#hidden_pck_expressnumber\').val("0");
				}
			},
			error:function(){
				alert(loading_error);
			}
		});
   }

   function validate()
   {
	   validator = new Validator("theForm");
	   validator.selectRequired("pck_warehouseid",  notnull_pck_warehouseid);
	   validator.required("pck_expressnumber", notnull_pck_expressnumber);

		if($(\'#hidden_pck_expressnumber\').val() == "1")
		{
			validator.addErrorMsg(pck_expressnumber_isexist);
			$(\'#pck_expressnumber_des\').text(pck_expressnumber_isexist);
		}
       if(!validator.passed())
   	   {
   	   		return false;
   	   }



	   //获取table所有行
	   var table = document.getElementById(\'testTab\');
	   var rows = table.rows.length;
	   var value=0;
	   var pck_name = \'\';
	   var pck_amount = 0;
	   for(var i=1;i<rows;i++)
	   {
	   		//获取第一列的值
	   		var colIndex = parseInt(table.rows[i].cells[0].innerHTML);
	   		var pckg_name = document.getElementsByName(\'pckg_name\'+(colIndex-1));
	   		var pckg_amount = document.getElementsByName(\'pckg_amount\'+(colIndex-1));
	   		var pckg_unitprice = document.getElementsByName(\'pckg_unitprice\'+(colIndex-1));
				var pckg_totalprice = document.getElementsByName(\'pckg_totalprice\'+(colIndex-1));
				for (var j = 0; j < pckg_name.length; j++) {
					pck_name = pck_name+pckg_name[j].value+\' \';
					if(pckg_name[j].value==\'\')
					{
						//alert(notnull_pckg_name);
					 	//return false;
					}
					if(!pckg_amount[j].value) {
						pckg_amount[j].value = 1;
					}
					if(!pckg_unitprice[j].value) {
						pckg_unitprice[j].value = 0;
					}
					value = value +parseInt(pckg_unitprice[j].value * pckg_amount[j].value);
				}
				



	   }

	   pck_name=pck_name.substring(0,pck_name.length-1);

	   //设置总价格
	   document.getElementById(\'pck_assess\').value = value;
	   document.getElementById(\'pck_name\').value = pck_name;

	   return true;
   }
</script>
  '; ?>

  <script type="text/javascript" src="themes/default/js/logisticssystem/member_forecast.js"></script>
 </body>
 </html>