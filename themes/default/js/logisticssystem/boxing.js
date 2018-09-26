/*选择分箱数量*/
function SelectBoxNumber()
{
	tableText = '';
	idvalue = 0;
	ordertablenumber = 0;
	var tabGoods = document.getElementById("table_goods");
	var number = document.getElementById("boxNumber").value;//分箱数
	var goodsNum = parseInt(number) + 2;
	document.getElementById('tablecount').value = goodsNum;
	for(var j = 0;j < goodsNum;j++)
	{
	   tablevalue = goodsNum;
       tableText += "<table class='gridtable' id='testTab"+(j+1)+"'>"
       +"<tr>"
          +"<th colspan='6' style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;运单#"+(j+1)+"</th>"
       +"</tr>"
       +"<tr>"
       +"<th>序号</th><th>商品类别</th><th>商品名称</th><th>数量</th><th>单价</th><th><input class='buts'  type='button' name='tianjia' onclick='addTr("+(j+1)+")' /></th>"
       +"</tr>"
       +"<tr>"
       +"<td class='dengj'>1</td>"
       +"<td class='dengjs'>"
       +"<select id='tab"+(j+1)+"_ratename1' style='width:98%' name='tab"+(j+1)+"_ratename1' onchange='select_ratetax_name(this.options[this.options.selectedIndex].value,"+(j+1)+")'></select>"
       +"</td>"
       +"<td class='goodsname'><input type='text' style='height:23px;width:96%' id='tab"+(j+1)+"_goodsname1' name='tab"+(j+1)+"_goodsname1' size='12' /></td>"
        +"<td class='goodsnumber'><input type='text' style='height:23px;width:94%' id='tb"+(j+1)+"_num1' name='tb"+(j+1)+"_num1' size=''5 onblur='checkNum("+(j+1)+",1);' /></td>"
        +"<td class='goodsprice'><input type='text' style='height:23px;width:94%' id='tb"+(j+1)+"_price1' name='tb"+(j+1)+"_price1' size='5' onblur='checkPrice("+(j+1)+",1)' /></td>"
       +"<td class='dengj6'></td>"
       +"</tr>"
       +"<tr>"
       +"<td colspan='6' style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;申报价值：<input type='text' id='tb"+(j+1)+"_applyprice' name='tb"+(j+1)+"_applyprice' readonly='true' size='4' value='0.00' />&nbsp;<input type='hidden' id='tb"+(j+1)+"_hidtariff' id='tb"+(j+1)+"_hidtariff' value='0.00' />"
       +"<input type='hidden' name='tb"+(j+1)+"_hidgoodscount' id='tb"+(j+1)+"_hidgoodscount' value='1' /><input type='hidden' name='tb"+(j+1)+"_hidinsurancecost' id='tb"+(j+1)+"_hidinsurancecost' value='0.00' />"
       +"<input style='margin-top:2px; vertical-align:middle;' name='tb"+(j+1)+"_insurance' id='tb"+(j+1)+"_insurance' onclick='ApplyPrice_Click("+(j+1)+");' type='checkbox' value='1' /><label for='tb"+(j+1)+"_insurance'>需要购买保险（<a id='tb"+(j+1)+"_insurancecost'>0.00</a>）</label></td>"
       +"</tr>"
       +"<tr>"
       +"<td colspan='6' style='text-align:left;' id='tb"+(j+1)+"_deliveryaddress'></td>"
       +"</tr>"
       +"</table>";
       ordertablenumber++;
	}
	tabGoods.innerHTML = tableText;
	//获取物品信息名称
	Ajax.call( 'member.php?act=getratetax', '', ratetax_callback , 'GET', 'TEXT', false, true );
    //获取收货人的详细信息
    Ajax.call( 'member.php?act=getdeliveryaddress', '', deliveryaddress_callback , 'GET', 'TEXT', false, true );
}

//选择 要分箱
function showboxNumber1(obj)
{
	if(obj.checked)
	{
	   document.all.AService.checked=false;
	}
	tableText = '';
	ordertablenumber = 0;
	var tabGoods = document.getElementById("table_goods"); //商品详细信息：
	for(var i = 0;i<2;i++)
	{
	   idvalue = 0;
	   tablevalue = 2;
	   document.getElementById('tablecount').value = 2;
       tableText += "<table class='gridtable' id='testTab"+(i+1)+"'>"
        +"<tr>"
        +"<th colspan='6' style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;运单#"+(i+1)+"</th>"
        +"</tr>"
        +"<tr>"
        +"<th>序号</th><th>商品类别</th><th>商品名称</th><th>数量</th><th>单价</th><th><input class='buts'  type='button' name='tianjia' onclick='addTr("+(i+1)+")' /></th>"
        +"</tr>"
        +"<tr>"
        +"<td class='dengj'>1</td>"
        +"<td class='dengjs'>"
        +"<select id='tab"+(i+1)+"_ratename1' style='width:98%' name='tab"+(i+1)+"_ratename1' onchange='select_ratetax_name(this.options[this.options.selectedIndex].value,"+(i+1)+")'></select>"
        +"</td>"
        +"<td class='goodsname'><input type='text' style='height:23px;width:96%' id='tab"+(i+1)+"_goodsname1' name='tab"+(i+1)+"_goodsname1' size='12' /></td>"
        +"<td class='goodsnumber'><input type='text' style='height:23px;width:94%' id='tb"+(i+1)+"_num1' name='tb"+(i+1)+"_num1' size=''5 onblur='checkNum("+(i+1)+",1);' /></td>"
        +"<td class='goodsprice'><input type='text' style='height:23px;width:94%' id='tb"+(i+1)+"_price1' name='tb"+(i+1)+"_price1' size='5' onblur='checkPrice("+(i+1)+",1)' /></td>"
        +"<td class='dengj6'></td>"
        +"</tr>"
        +"<tr>"
        +"<td colspan='6' style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;申报价值：<input type='text' id='tb"+(i+1)+"_applyprice' name='tb"+(i+1)+"_applyprice' readonly='true' size='4' value='0.00' />&nbsp;<input type='hidden' id='tb"+(i+1)+"_hidtariff' name='tb"+(i+1)+"_hidtariff' value='0.00' />"
        +"<input type='hidden' name='tb"+(i+1)+"_hidgoodscount' id='tb"+(i+1)+"_hidgoodscount' value='1' /><input type='hidden' name='tb"+(i+1)+"_hidinsurancecost' id='tb"+(i+1)+"_hidinsurancecost' value='0.00' />"
        +"<input style='margin-top:2px; vertical-align:middle;' name='tb"+(i+1)+"_insurance' id='tb"+(i+1)+"_insurance' onclick='ApplyPrice_Click("+(i+1)+");' type='checkbox' value='1' /><label for='tb"+(i+1)+"_insurance'>需要购买保险（<a id='tb"+(i+1)+"_insurancecost'>0.00</a>）</label></td>"
        +"</tr>"
        +"<tr>"
        +"<td colspan='6' style='text-align:left;' id='tb"+(i+1)+"_deliveryaddress'></td>"
        +"</tr>"
        +"</table>";
       ordertablenumber++;
	}
	tabGoods.innerHTML = tableText;
	//获取物品信息名称
	Ajax.call( 'member.php?act=getratetax', '', ratetax_callback , 'GET', 'TEXT', false, true );
    //获取收货人的详细信息
    Ajax.call( 'member.php?act=getdeliveryaddress', '', deliveryaddress_callback , 'GET', 'TEXT', false, true );
	document.getElementById("boxNumber").disabled = "";
}
function showboxNumber0(obj)
{
	tableText = '';
	idvalue = 0;
	var tabGoods = document.getElementById("table_goods");
	tablevalue = 1;
	document.getElementById('tablecount').value = 1;
	tableText = "<table class='gridtable' id='testTab1'>"
    +"<tr>"
       +"<th colspan='6' style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;运单#1</th>"
    +"</tr>"
    +"<tr>"
    +"<th>序号</th><th>商品类别</th><th>商品名称</th><th>数量</th><th>单价</th><th><input class='buts'  type='button' name='tianjia' onclick='addTr(1)' /></th>"
    +"</tr>"
    +"<tr>"
    +"<td class='dengj'>1</td>"
    +"<td class='dengjs'>"
    +"<select id='tab1_ratename1' name='tab1_ratename1' style='width:98%' onchange='select_ratetax_name(this.options[this.options.selectedIndex].value,1)'></select>"
    +"</td>"
    +"<td class='goodsname'><input type='text' style='height:23px;width:96%' id='tab1_goodsname1' name='tab1_goodsname1' size='12' /></td>"
    +"<td class='goodsnumber'><input type='text' id='tb1_num1' style='height:23px;width:94%' name='tb1_num1' size=''5 onblur='checkNum(1,1);' /></td>"
    +"<td class='goodsprice'><input type='text' id='tb1_price1' style='height:23px;width:94%' name='tb1_price1' size='5' onblur='checkPrice(1,1)' /></td>"
    +"<td class='dengj6'></td>"
    +"</tr>"
    +"<tr>"
    +"<td colspan='6' style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;申报价值：<input type='text' id='tb1_applyprice' name='tb1_applyprice' readonly='true' size='4' value='0.00' />&nbsp;<input type='hidden' id='tb1_hidtariff' name='tb1_hidtariff' value='0.00' />"
    +"<input type='hidden' name='tb1_hidgoodscount' id='tb1_hidgoodscount' value='1' /><input type='hidden' name='tb1_hidinsurancecost' id='tb1_hidinsurancecost' value='0.00' />"
    +"<input style='margin-top:2px; vertical-align:middle;' name='tb1_insurance' id='tb1_insurance' type='checkbox' onclick='ApplyPrice_Click(1);' value='1' /><label for='tb1_insurance'>需要购买保险（<a id='tb1_insurancecost'>0.00</a>）</label></td>"
    +"</tr>"
    +"<tr>"
    +"<td colspan='6' style='text-align:left;' id='tb1_deliveryaddress'></td>"
    +"</tr>"
    +"</table>";
	tabGoods.innerHTML = tableText;
	ordertablenumber = 1;
	//获取物品信息名称
	Ajax.call( 'member.php?act=getratetax', '', ratetax_callback , 'GET', 'TEXT', false, true );
	//获取收货人的详细信息
	Ajax.call( 'member.php?act=getdeliveryaddress', '', deliveryaddress_callback , 'GET', 'TEXT', false, true );
	if(obj.checked)
    {
		document.all.BService.checked=false;
		document.getElementById("boxNumber").disabled = "disabled";
    }
	//获取选中的预报运单
	array_table_index = 1;//重置索引
	//重新加载包裹内物品
	var name = document.getElementsByName('checkboxes[]');
	for(var chkIndex=0;chkIndex < name.length;chkIndex++)
	{
		if(name[chkIndex].checked)
		{
			CheckGoods(name[chkIndex].id);
		}
	}
}