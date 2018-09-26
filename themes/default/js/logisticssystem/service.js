//获取可选择的增值服务
function servicename_callback(result)
{
	var divService = '';
	var obj = eval('(' + result + ')');
	
	warhouseInfo.services = obj;
	for(var index = 0;index < obj.length;index++)
	{
		divService += "<tr>";
		divService += "<td><input id='service"+index+"' class='checkbox' type='checkbox' name='checkboxesprice[]' onclick='priceClass.getAndSetServiceTotalPrice();' title='"
		+obj[index].Price+"' value='"+obj[index].Id+"' /> <label for='service"+index+"'>"
		+obj[index].ServiceName+"</label></td>";
		divService += "<td style='text-align:left;'><span style='color:red'>"+obj[index].Description+"</span></td>";
		divService+="</tr>";
	}
	$('#service_name').html(divService);
}


