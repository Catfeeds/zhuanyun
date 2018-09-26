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
	//绑定国家
	//Ajax.call('member_datamanage.php?act=area', 'areaid=0', area_callback , 'GET', 'TEXT', true, true );
}

/**
 * 获取数据
 * @param result
 */
function area_callback(result)
{
	var obj = eval('('+result+')');
	var da_country = document.getElementById('da_country');
	da_country.options.length = 1;
	
	for(var i=0; i<obj.length; i++)
	{
		var option=new Option(obj[i].Name , obj[i].Id);
		da_country.options.add(option);
	}
}

/**
 * 国家
 * @param val
 */
function country_change(val)
{
	if(val==0)
	{
		var da_province = document.getElementById('da_province');
		da_province.options.length = 1;
		return;
	}
	//根据国家获取数据
	Ajax.call('member_datamanage.php?act=area', 'areaid='+val, province_callback , 'GET', 'TEXT', true, true );
}

/**
 * 选择国家，改变省
 * @param result：省
 */
function province_callback(result)
{
	var obj = eval('('+result+')');
	var da_province = document.getElementById('da_province');
	da_province.options.length = 1;
	var da_city = document.getElementById('da_city');
	da_city.options.length = 1;
	
	for(var i=0; i<obj.length; i++)
	{
		var option=new Option(obj[i].Name , obj[i].Id);
		da_province.options.add(option);
	}
}

/**
 * 省
 * @param val
 */
function province_change(val)
{
	if(val==0)
	{
		var da_city = document.getElementById('da_city');
		da_city.options.length = 1;
		return;
	}
	//根据国家获取数据
	Ajax.call('member_datamanage.php?act=area', 'areaid='+val, city_callback , 'GET', 'TEXT', true, true );
}

/**
 * 选择省，改变城市
 * @param result：城市
 */
function city_callback(result)
{
	var obj = eval('('+result+')');
	var da_city = document.getElementById('da_city');
	da_city.options.length = 1;
	
	for(var i=0; i<obj.length; i++)
	{
		var option=new Option(obj[i].Name , obj[i].Id);
		da_city.options.add(option);
	}
}