/**
 * 选择仓库
 * @param value：select option value
 */
function select_warehouse(value)
{
	if(value==0)
	{
		//如果value为0，则说明用户没有选择仓库
		document.getElementById("housewarn").innerHTML='请选择仓库';
	}
	else{
		document.getElementById("housewarn").innerHTML='';
		//根据ID获取对应的仓库信息
	    Ajax.call( 'member_packagemanage.php?act=warehouse', 'houseid=' + value, warehouse_callback , 'GET', 'TEXT', true, true );
	    Ajax.call( 'member_forecast.php?act=package_service', 'houseid=' + value, package_service_callback , 'GET', 'TEXT', true, true );
	}
}

/**
 * 仓库信息-回调函数
 * @param result
 */
function warehouse_callback(result)
{
	var obj = eval('(' + result + ')');
	if(result){
		var houseinfo="仓库地址："+ obj.warehouse.Province+" "+obj.warehouse.AreaName+" "+obj.warehouse.City+" "+obj.warehouse.Address;
		document.getElementById("houseinfo").innerHTML=houseinfo;

		document.getElementById("unitprice").innerHTML='单价（'+obj.warehouse.Name+'）';
		//document.getElementById("totalprice").innerHTML='总价（'+obj.warehouse.Name+'）';
		//预计重量
		document.getElementById("WeightUnit").innerHTML=obj.warehouse.WeightUnit;
	}else{
		//获取数据失败
	}
}
/**
 * 增值服务-回调函数
 * @param result
 */
function package_service_callback(result)
{
	var obj=eval("("+result+")");
	if(obj.error==0)
	{
		var objContent = eval("("+obj.content+")");
		var html="<ul>";
		for(var i=0; i<objContent.length; i++)  
		{  
			html +="<li>"+
			"<input id='service_"+objContent[i].ServiceId+"' name='services[]' value='"+objContent[i].ServiceId+"' type=\"checkbox\"></input>"+
			"<label for='service_"+objContent[i].ServiceId+"'>"+objContent[i].ServiceName+"</label>"+
			 "<span class='span_des'>"+objContent[i].Description+"</span>"+
		"</li>";
		}  
		html +="</ul>";
		$("#pck_service").html(html);
	}else{
		//数据加载失败
		var html="<ul><li>"+pck_no_service+"</li></ul>";
		$("#pck_service").html(html);
	}
}