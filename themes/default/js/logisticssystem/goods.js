function packagegoods_callback(result)
{
	var text='';
	mainClass.packageListHtml = "";
	var obj = eval('(' + result + ')');
	var packagegood = document.getElementById("warehouse_goods");
	//mainClass.packages = obj;
	for(var index = 0;index < obj.length;index++)
	{
		//title 是还可以免费存放的时间
		var item = obj[index];
		mainClass.packages[obj[index].pck_id] = obj;
		
		text += "<tr><td style='line-height:20px;'><input id='packagegoods"+index
		+"' style='margin-top:1px; vertical-align:middle;' name='checkboxes[]' alt='"
		+roundNumber(obj[index].pck_weight,2)+"' title='"+diffDays(obj[index].pck_intime,getNow())
		+"' data-pckid='"+item.pck_id+"' onclick=\"selectPackage('packagegoods"+index+"');\" type='checkbox' value='"
		+obj[index].pck_expressnumber+"'></td><td>"+(index+1)+"</td><td> <label for='packagegoods"+index+"'>"
		+obj[index].pck_expressnumber+"</td>";
		//获取包裹内的物品
		array_package_name = "packagegoods"+index;


		Ajax.call( 'member.php?act=getgoods', 'pck_id=' + obj[index].pck_id, goods_callback , 'GET', 'TEXT', false, true );
		text += mainClass.packageListHtml;
		text += "<td><a style='color:red;'>"
		+roundNumber(obj[index].pck_weight,2)+""+weightunit+"</a></td>";
		text += "<td>"+item.pck_sizelength+"*"+item.pck_sizewidth+"*"+item.pck_sizeheight+"</td>";
		text +="<td>到货"		+diffDays(obj[index].pck_intime,getNow())+"天</label></td>";




		text+="<td width=250><a style='color:red;'>"+obj[index].pck_userremark+"</a> </td></tr>";
	}
	mainClass.packageListHtml = text;
	packagegood.innerHTML = mainClass.packageListHtml;
	gObj("datd").style.display =  (text != "") ? "" : "none";
}


function goods_callback(result) {
	var obj = eval('(' + result + ')');
	var packagegood = document.getElementById("warehouse_goods");
	var text = "";
	text+="<td><span style='color:blue;font-weight:bold;'>";
	if(obj.length>0)
	{
		text+="（";
	}
	var goodsList  = obj.list;
	var pck_id = obj.pck_id;
	for(var index = 0;index < goodsList.length;index++)
	{
		//定义：包裹内的物品数组
		var array_package_good = new Array();
		var package = goodsList[index];
		array_package_good['array_package_name'] = array_package_name; //packagegoods+index 所在包裹序号
		array_package_good['pckg_name'] = package.pckg_name;
		array_package_good['pckg_amount'] = package.pckg_amount;
		array_package_good['pckg_unitprice'] = roundNumber(package.pckg_unitprice,2);
		array_package_good.pckg_id = package.pckg_id;

		text += (package.pckg_name+"&nbsp");
//		text += "<p style='line-height:20px;margin-left:20px;'><strong>"+//物品名称(index+1)+
//		obj[index].pckg_name;//+"&nbsp;&nbsp;数量：&nbsp;"
//		+obj[index].pckg_amount+"&nbsp;×&nbsp;单价：&nbsp;"+
//		roundNumber(obj[index].pckg_unitprice,2)+"&nbsp;=&nbsp;总价：&nbsp;"+
//		roundNumber(obj[index].pckg_totalprice,2)+;
//		text += "</strong></p>";
		//array_packege[array_packege.length] = new Array();
		array_packege.push(array_package_good);

	}
	mainClass.allPackageGoods = array_packege; //所有的包裹的商品数据都在这里
	mainClass.packageGoods[pck_id] = goodsList;//记录每个包裹的原始数据

	if(obj.length>0)
	{
		text = text.substring(0,text.length-5);
	}
	if(obj.length>0)
	{
		text+="）";
	}
	text+="</span></td>";
	mainClass.packageListHtml = text;
}