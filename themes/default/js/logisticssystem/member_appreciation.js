/**
 * 通过仓库来获取包裹的物品
 * @param value
 */
var text;
var weightunit = '';

$(function(){
	document.forms['theForm'].elements['telephone'].focus();

	var pck_warehouseid = $('#pck_warehouseid').val();
	//获取当前用户的仓库
	select_warehouse(parseInt(pck_warehouseid));
})

function select_warehouse(value)
{
//	gObj("datd").style.display =  (value != 0) ? "" : "none";
//	gObj("warehouse_goods").style.display =  (value != 0) ? "" : "none";
	if(value!=0)
    {
		//获得该仓库的物品重量单位
		Ajax.call( 'member.php?act=getpackcountbyweightunit', 'pck_warehouseid=' + value, weightunit_callback , 'GET', 'TEXT', false, true );
		//根据仓库ID获取对应的包裹信息
	    Ajax.call( 'member.php?act=getpackcountbyhouse', 'pck_warehouseid=' + value, packagegoods_callback , 'GET', 'TEXT', false, true );
	    //增值服务
	    Ajax.call( 'member_forecast.php?act=package_service', 'houseid=' + value, package_service_callback , 'GET', 'TEXT', true, true );
    }
}

function packagegoods_callback(result)
{
	text='';
	var obj = eval('(' + result + ')');
	var packagegood = document.getElementById("warehouse_goods");
	for(var index = 0;index < obj.length;index++)
	{
		text += "<li style='line-height:20px;'>"
			+"<input style='margin-top:1px; vertical-align:middle;' id='good_"+obj[index].pck_id+"' name='checkboxes[]' type='checkbox' value='"
			+obj[index].pck_id+"'>"
			+"<label for='good_"+obj[index].pck_id+"'>"
			+(index+1)+":&nbsp;&nbsp;单号-"+obj[index].pck_expressnumber
			+"&nbsp;&nbsp;重量-<a style='color:red;'>"
		    +roundNumber(obj[index].pck_weight,2)+""+weightunit+"</a>&nbsp;&nbsp;到货"
		    +diffDays(obj[index].pck_intime,getNow())+"天</li>"
		    +"</label>";
		Ajax.call( 'member.php?act=getgoods', 'pck_id=' + obj[index].pck_id, goods_callback , 'GET', 'TEXT', false, true );
	}
	packagegood.innerHTML = text;
	//gObj("datd").style.display =  (text != "") ? "" : "none";
}

function goods_callback(result)
{
	var obj = eval('(' + result + ')');
	var packagegood = document.getElementById("warehouse_goods");
	for(var index = 0;index < obj.length;index++)
	{
		text += "<li style='line-height:20px;margin-left:20px;'><strong>物品"+(index+1)+"&nbsp;:&nbsp;"+obj[index].pckg_name+"&nbsp;&nbsp;数量：&nbsp;"
		        +obj[index].pckg_amount+"&nbsp;×&nbsp;单价：&nbsp;"+roundNumber(obj[index].pckg_unitprice,2)+"&nbsp;=&nbsp;总价：&nbsp;"+roundNumber(obj[index].pckg_totalprice,2)+"</strong></li>";
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
			"<input name='services[]' id='service_"+objContent[i].ServiceId+"' value='"+objContent[i].ServiceId+"' type=\"checkbox\"></input>"+
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

function weightunit_callback(result)
{
	weightunit = result;
}

function roundNumber(number,decimals) {
	var newString;// The new rounded number
	decimals = Number(decimals);
	if (decimals < 1) {
		newString = (Math.round(number)).toString();
	} else {
		var numString = number.toString();
		if (numString.lastIndexOf(".") == -1) {// If there is no decimal point
			numString += ".";// give it one at the end
		}
		var cutoff = numString.lastIndexOf(".") + decimals;// The point at which to truncate the number
		var d1 = Number(numString.substring(cutoff,cutoff+1));// The value of the last decimal place that we'll end up with
		var d2 = Number(numString.substring(cutoff+1,cutoff+2));// The next decimal, after the last one we want
		if (d2 >= 5) {// Do we need to round up at all? If not, the string will just be truncated
			if (d1 == 9 && cutoff > 0) {// If the last digit is 9, find a new cutoff point
				while (cutoff > 0 && (d1 == 9 || isNaN(d1))) {
					if (d1 != ".") {
						cutoff -= 1;
						d1 = Number(numString.substring(cutoff,cutoff+1));
					} else {
						cutoff -= 1;
					}
				}
			}
			d1 += 1;
		} 
		if (d1 == 10) {
			numString = numString.substring(0, numString.lastIndexOf("."));
			var roundedNum = Number(numString) + 1;
			newString = roundedNum.toString() + '.';
		} else {
			newString = numString.substring(0,cutoff) + d1.toString();
		}
	}
	if (newString.lastIndexOf(".") == -1) {// Do this again, to the new string
		newString += ".";
	}
	var decs = (newString.substring(newString.lastIndexOf(".")+1)).length;
	for(var i=0;i<decimals-decs;i++) newString += "0";
	//var newNumber = Number(newString);// make it a number if you like
	return newString; // Output the result to the form field (change for your purposes)
}


function diffDays(s1,s2)//计算相差的天数
{
	 s1 = s1.replace(/-/g, "/");
	 s2 = s2.replace(/-/g, "/");
	 s1 = new Date(s1);
	 s2 = new Date(s2);
	 
	 var days= s2.getTime() - s1.getTime();
	 var time = parseInt(days / (1000 * 60 * 60 * 24));
	 
	 return time;
}
function getNow()
{//得到当前时间
	 today = new Date(); 
	 var todayStr = today.getFullYear() + "-"; //获得年
	 //获得当前月份
	 if(today.getMonth()<10)
	 {
	   todayStr=todayStr+"0"+(parseInt(today.getMonth())+1);
	 }
	 else
	 {
	   todayStr=todayStr+(parseInt(today.getMonth())+1);
	 }
	 //获得当天
	 if(today.getDate()<10)
	 {
		todayStr=todayStr+"-0"+(parseInt(today.getDate()));
	 }
	 else
	 {
        todayStr=todayStr + "-" + (parseInt(today.getDate()));
	 }
     todayStr = todayStr +" "
	 
     //小时
	 if(today.getHours()<10)
	 {
	   todayStr=todayStr+today.getHours();
	 }
	 else
	 {
	   todayStr=todayStr+today.getHours();
	 }	
     //分
	 if(today.getMinutes()<10)
	 {
	   todayStr=todayStr+":0"+today.getMinutes();
	 }
	 else
	 {
	   todayStr=todayStr+":"+today.getMinutes();
	 }
	 //秒
	 if(today.getSeconds()<10)
	 {
	   todayStr=todayStr+":0"+today.getSeconds();
	 }
	 else
	 {
	   todayStr=todayStr+":"+today.getSeconds();
	 }
	 return todayStr;
}

//是否对相关标签进行隐藏
function gObj(obj)
{
  var theObj;
  if (document.getElementById)
  {
    if (typeof obj=="string") {
      return document.getElementById(obj);
    } else {
      return obj.style;
    }
  }
  return null;
}

/**
 * 验证
 */
function validate()
{
	validator = new Validator("theForm");
	validator.checkboxesRequired("checkboxes[]",notnull_warehouse_goods);
	validator.checkboxesRequired("services[]",notnull_warehouse_services)
	validator.selectRequired("pck_warehouseid",  notnull_warehouse);
	validator.required("telephone",notnull_telephone);
	if(!validator.passed())
	{
		return false;
	}
	return true;
}