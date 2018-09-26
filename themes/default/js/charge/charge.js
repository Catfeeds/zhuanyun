if(document.all) 
{ 
	window.attachEvent('onload', load);
}
else 
{ 
	window.addEventListener('load', load);
}

/**
 * 初始化加载
 */
function load()
{
	get_shipping();
	other_warehouse();
	calculator_price();
}

/**
 * 根据仓库、目的地获取 线路
 */
function get_shipping()
{
	//获取仓库、目的地ID
	var warehouse = document.getElementById('warehouse');
	var area = document.getElementById('area');
	var warehouseid=warehouse.value;
	var areaid=area.value;
	//通过Ajax获取线路
	Ajax.call('charge.php?act=shipping', 'warehouseid=' + warehouseid+'&areaid='+areaid, shipping_callback , 'GET', 'TEXT', true, true );
}

/**
 * 线路-回调函数
 * @param result
 */
function shipping_callback(result)
{
	var obj = eval('('+result+')');
	var servicetype = document.getElementById('servicetype');
	servicetype.options.length = 0;
	for(var i=0; i<obj.length; i++)
	{
		var option=new Option(obj[i].ShippingName , obj[i].ShippingId);
		servicetype.options.add(option);
	}
	get_price_byservicetype();
}

/**
 * 根据服务类型获取价格列表：会员等级、价格
 */
function get_price_byservicetype()
{
	//获取线路类型()
	var shipping = document.getElementById('servicetype');
	var shippingid = shipping.value;
	if(shippingid.length!=0)
	{
		//通过Ajax获取 价格列表：会员等级、价格
		Ajax.call('charge.php?act=price', 'shippingid=' + shippingid, price_callback , 'GET', 'TEXT', true, true );
	}
	else
	{
		//清空table
		var gridtable = document.getElementById('gridtable');
		var rows = gridtable.rows.length;
		for(var index = rows-1; index > 0; index--)
		{
			gridtable.deleteRow(index);
		}
		var newTr = gridtable.insertRow(-1);//在最下的位置
	    newTr.align='center';
	    var newTd0 = newTr.insertCell();
	    
	    newTd0.setAttribute("colspan","3")
		newTd0.innerHTML = '无数据';

		//给ShippingDesc赋值
		var shippingDesc = document.getElementById('ShippingDesc');
		shippingDesc.innerHTML = '无数据';
		
		var firstweight = document.getElementById('firstweight');
		firstweight.innerHTML = "首重（--）";
		var nextweight = document.getElementById('nextweight');
		nextweight.innerHTML = "续重（--）";
	}
}
/**
 * 价格：回调函数
 * @param result
 */
function price_callback(result)
{
	var obj = eval('('+result+')');
	if(obj.length!=0)
	{
		//清空table
		var gridtable = document.getElementById('gridtable');
		var rows = gridtable.rows.length;
		for(var index = rows-1; index > 0; index--)
		{
			gridtable.deleteRow(index);
		}
		var currencyCode = obj[0]['CurrencyCode'];
		var weightUnit = obj[0]['WeightUnit'];
		//添加table
		for(var index = 0;index < obj.length;index++)
		{
			var newTr = gridtable.insertRow(-1);//在最下的位置
		    //给这个行设置id属性，以便于管理（删除）
		    newTr.id='tr'+index;
		    //设置对齐方式（只是告诉你，可以以这种方式来设置任何它有的属性）
		    newTr.align='center';
		    //添加6列    
		    var newTd0 = newTr.insertCell(0); 
		    var newTd1 = newTr.insertCell(1);
			var newTd2 = newTr.insertCell(2);
			
			newTd0.innerHTML=obj[index].rank_name;
			newTd1.innerHTML=currencyCode + ((obj[index].discount * obj[index].Price) / 100).toFixed(2);
			newTd2.innerHTML=currencyCode + ((obj[index].discount * obj[index].AddPrice) / 100).toFixed(2);
		}
		//给ShippingDesc赋值
		var shippingDesc = document.getElementById('ShippingDesc');
		shippingDesc.innerHTML = obj[0].ShippingDesc;
		var firstweight = document.getElementById('firstweight');
		firstweight.innerHTML = "首重（"+weightUnit+"）";
		var nextweight = document.getElementById('nextweight');
		nextweight.innerHTML = "续重（"+weightUnit+"）";
	}
}

/**
 * 选择仓库
 * @param value：select option value
 */
function select_warehouse(value)
{
	get_shipping();
}

/**
 * 选择目的地
 * @param value：select option value
 */
function select_area(value)
{
	get_shipping();
}

/**
 * 选择服务类型
 * @param value：select option value
 */
function select_servicetype(value)
{
	get_price_byservicetype();
}

/**
 * 选择其它服务价格(仓库)
 * @param value：select option value
 */
function select_other_warehouse(value)
{
	other_warehouse();
}

function other_warehouse()
{
	//获取其它服务仓库ID
	var other_warehouse = document.getElementById('other_warehouse');
	var warehouseid = other_warehouse.value;
	if(warehouseid.length > 0)
	{
		//通过Ajax获取 价格列表：会员等级、价格
		Ajax.call('charge.php?act=other_serviceprice', 'warehouseid=' + warehouseid, other_warehouse_callback , 'GET', 'TEXT', true, true );
	}
	else{
		//初始化table
		var other_costtable = document.getElementById('other_costtable');

		var rows = other_costtable.rows.length;
		for(var index = rows-1; index > 0; index--)
		{
			other_costtable.deleteRow(index);
		}
		var newTr = other_costtable.insertRow(-1);//在最下的位置
	    newTr.align='center';
	    var newTd0 = newTr.insertCell();
	    
	    newTd0.setAttribute("colspan","3")
		newTd0.innerHTML = '无数据';
	}
}

/**
 * 其它服务：回调函数
 * @param result
 */
function other_warehouse_callback(result)
{
	var obj = eval('('+result+')');
	//清空table
	var other_costtable = document.getElementById('other_costtable');
	var rows = other_costtable.rows.length;
	for(var index = rows-1; index > 0; index--)
	{
		other_costtable.deleteRow(index);
	}
	if(obj.length!=0)
	{
		//添加table
		for(var index = 0;index < obj.length;index++)
		{
			var newTr = other_costtable.insertRow(-1);//在最下的位置
		    //给这个行设置id属性，以便于管理（删除）
		    newTr.id='tr'+index;
		    //设置对齐方式（只是告诉你，可以以这种方式来设置任何它有的属性）
		    newTr.align='center';
		    //添加6列    
		    var newTd0 = newTr.insertCell(0); 
		    var newTd1 = newTr.insertCell(1);
			var newTd2 = newTr.insertCell(2);
			
			newTd0.innerHTML=obj[index].ServiceName;
			newTd1.innerHTML=obj[index].Description;
			newTd1.align='left';
			var status='';
			switch(obj[index].StatusId)
			{
				case "0":
					status='单位重量';
					break;
				case "1":
					status='件';
					break;
				case "2":
					status='次';
					break;
			}
			newTd2.innerHTML=obj[index].CurrencyCode+obj[index].Price + status;
		}
	}
	else
	{
		var newTr = other_costtable.insertRow(-1);//在最下的位置
	    newTr.align='center';
	    var newTd0 = newTr.insertCell();
	    
	    newTd0.setAttribute("colspan","3")
		newTd0.innerHTML = '无数据';
	}
}

/**
 * 价格计算器
 */
function calculator_price()
{
	//获取仓库、目的地
	var warehouse = document.getElementById('calculator_warehouse');
	var area = document.getElementById('calculator_area');
	var warehouseid=warehouse.value;
	var areaid=area.value;
	if(warehouseid.length>0 && areaid.length >0)
	{
		//通过Ajax获取线路
		Ajax.call('charge.php?act=calculatorprice', 'warehouseid=' + warehouseid+'&areaid='+areaid, calculator_price_callback , 'GET', 'TEXT', true, true );
	}
	else
	{
		//初始化table
		var calculator_table = document.getElementById('calculator_table');

		var rows = calculator_table.rows.length;
		var cells = calculator_table.rows.item(0).cells.length;
		for(var index = rows-1; index > 0; index--)
		{
			calculator_table.deleteRow(index);
		}
		var newTr = calculator_table.insertRow(-1);//在最下的位置
	    newTr.align='center';
	    var newTd0 = newTr.insertCell();
	    
	    newTd0.setAttribute("colspan",cells)
		newTd0.innerHTML = '无数据';
	}
}

/**
 * 价格计算器：回调函数
 * @param result：结果
 */
function calculator_price_callback(result)
{
	var obj = eval('('+result+')');
	//清空table
	var calculator_table = document.getElementById('calculator_table');
	var rows = calculator_table.rows.length;
	var cells = calculator_table.rows.item(0).cells.length;
	
	for(var index = rows-1; index > 0; index--)
	{
		calculator_table.deleteRow(index);
	}
	if(obj.length!=0)
	{
	    //获取重量
	    var weight=document.getElementById('weight');//页面输入重量
	    //获取长宽高
	    var long=document.getElementById('long');
	    var width=document.getElementById('width');
	    var height=document.getElementById('height');

		//添加table
		for(var index = 0;index < obj.length;index++)
		{
			var newTr = calculator_table.insertRow(-1);//在最下的位置
		    //给这个行设置id属性，以便于管理（删除）
		    newTr.id='tr'+index;
		    //设置对齐方式（只是告诉你，可以以这种方式来设置任何它有的属性）
		    newTr.align='center';
		    //添加6列    
		    var newTd0 = newTr.insertCell(0); 
		    var newTd1 = newTr.insertCell(1);
		    //获取重量/加价重量/加价价格
		    var sweight=parseFloat(obj[index].Weight);
		    var soverweight=parseFloat(obj[index].AddWeight);
		    var soverprice=parseFloat(obj[index].AddPrice);
		    var addprice=0;
		    /**
		     * 不支持阶梯价格
		     */
		    if(obj[index].IsSupPice==0)
		    {
		    	/**
		    	 * 重量费用
		    	 */
			    if(weight.value>sweight)
			    {
			    	addprice=Math.ceil(Math.ceil(weight.value-sweight)/soverweight)*soverprice;
			    }
			    /**
			     * 体积费用
			     */
			    //获取体积重比/体积重超重费用
			    var heavyvolume=parseFloat(obj[index].HeavyVolume);
			    var volumeprice=parseFloat(obj[index].VolumePrice);
			    var volume=((long.value*width.value*height.value)/heavyvolume);
			    if(volume >= sweight)
		    	{
			    	volume = Math.ceil(volume-sweight) * volumeprice + parseFloat(obj[index].Price);
		    	}
			    else{
			    	volume = parseFloat(obj[index].Price);
			    }
			    addprice = addprice+volume;
		    }
		    /**
		     * 阶梯价格
		     */
		    else
    		{
		    	/**
		    	 * 重量费用
		    	 */
			    if(weight.value>sweight)
			    {
			    	var addweight=Math.ceil(weight.value-sweight);
			    	for(var lindex = 0;lindex < obj[index].ladderprice.length;lindex++){
						if(addweight > parseFloat(obj[index].ladderprice[lindex].slp_minweight) && addweight<=parseFloat(obj[index].ladderprice[lindex].slp_maxweight))
						{
							addprice = parseFloat(obj[index].ladderprice[lindex].slp_price)+parseFloat(obj[index].ladderprice[lindex].slp_serviceprice);
							break;
						}
					}
			    	//addprice=Math.ceil(addweight/soverweight)*soverprice;
			    }
			    /**
			     * 体积费用
			     */
			    //获取体积重比/体积重超重费用
			    var heavyvolume=parseFloat(obj[index].HeavyVolume);
			    var volumeprice=parseFloat(obj[index].VolumePrice);
			    var volume=((long.value*width.value*height.value)/heavyvolume);
			    if(volume >= sweight)
		    	{
			    	var addweight=Math.ceil(volume - sweight);
			    	for(var lindex = 0;lindex < obj[index].ladderprice.length;lindex++){
			    		
						if(addweight > parseInt(obj[index].ladderprice[lindex].slp_minweight) && addweight<=parseInt(obj[index].ladderprice[lindex].slp_maxweight))
						{
							addprice = parseInt(obj[index].ladderprice[lindex].slp_price) + parseInt(obj[index].ladderprice[lindex].slp_serviceprice) + parseFloat(obj[index].Price);
							break;
						}
					}
		    	}
			    else{
			    	volume = parseInt(obj[index].Price);
			    }
			    addprice = addprice + volume;
    		}
			newTd0.innerHTML=obj[index].ShippingName;
			newTd0.align='left';
			newTd1.innerHTML=obj[index].CurrencyCode + (parseInt(obj[index].Price) + addprice).toFixed(2);

			for(var rankindex=0;rankindex<(cells-2);rankindex++)
			{
				var newTd = newTr.insertCell(rankindex+2);
				var discount='discount0';
				switch(rankindex)
				{
					case 0:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount0 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 1:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount1 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 2:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount2 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 3:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount3 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 4:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount4 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 5:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount5 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 6:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount6 * (parseFloat(obj[index].Price) + addprice) / 100 ).toFixed(2);
						break;
					case 7:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount7 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 8:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount8 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 9:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount9 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 10:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount10 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 11:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount11 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 12:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount12 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 13:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount13 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 14:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount14 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 15:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount15 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 16:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount16 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 17:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount17 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 18:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount18 * (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
					case 19:
						newTd.innerHTML=obj[index].CurrencyCode + (obj[index].discount19 + (parseFloat(obj[index].Price) + addprice) / 100).toFixed(2);
						break;
				}
			}
		}
	}
	else
	{
		var newTr = calculator_table.insertRow(-1);//在最下的位置
	    newTr.align='center';
	    var newTd0 = newTr.insertCell();
	    
	    newTd0.setAttribute("colspan",cells)
		newTd0.innerHTML = '无数据';
	}
}