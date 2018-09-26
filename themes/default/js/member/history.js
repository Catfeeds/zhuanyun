//表索引
var tablename_index=0;
/**
 * 初始化
 */
$(function(){
	Ajax.call('member.php?act=orderstatus', 'order_isdelete=-1', orderstatus_callback , 'GET', 'TEXT', true, true );
})

/**
 * 订单库存
 * @param result：订单库存结果
 */
function orderstatus_callback(result)
{
	var obj = eval("("+result+")");
	var currenttable = document.getElementById('currenttable');
	var rows = currenttable.rows.length;
	for(var index = rows-1; index > 0; index--)
	{
		currenttable.deleteRow(index);
	}
	if(obj.length!=0)
	{
		//添加table
		for(var index = 0;index < obj.length;index++)
		{
			var newTr = currenttable.insertRow(-1);//在最下的位置
		    //给这个行设置id属性，以便于管理（删除）
		    newTr.id='tr'+index;
		    //设置对齐方式（只是告诉你，可以以这种方式来设置任何它有的属性）
		    newTr.align='center';
		    //添加9列    
		    var newTd0 = newTr.insertCell(0); 
		    newTd0.style.width="50px";
		    var newTd1 = newTr.insertCell(1);
			var newTd2 = newTr.insertCell(2);
			var newTd3 = newTr.insertCell(3);
			var newTd4 = newTr.insertCell(4);
			var newTd5 = newTr.insertCell(5);
			var newTd6 = newTr.insertCell(6);
			
			newTd0.innerHTML='<input type="checkbox" />';
			newTd1.innerHTML=obj[index].order_no;
			newTd2.innerHTML=obj[index].order_waybillno;
			newTd3.innerHTML=obj[index].order_weight;
			newTd4.innerHTML=obj[index].order_weight;
			newTd5.innerHTML=obj[index].order_time;
			if(obj[index].orderstatus_value == 0 || obj[index].orderstatus_value == 3 || obj[index].orderstatus_value == 7)
			{
			   newTd6.innerHTML = '<span class="xiaohui">' + obj[index].orderstatus_value + '</span>';
			}
			else if(obj[index].orderstatus_value == 2 || obj[index].orderstatus_value == 4)
			{
				newTd6.innerHTML = obj[index].orderstatus_value;
			}
			else
			{
				newTd6.innerHTML='<span class="ruku">' + obj[index].orderstatus_value + '</span>';
			}
		}
	}
	else
	{
		var newTr = currenttable.insertRow(-1);//在最下的位置
	    newTr.align='center';
	    var newTd0 = newTr.insertCell();
	    
	    newTd0.setAttribute("colspan","9")
		newTd0.innerHTML = '无数据';
	}
}

/**
 * 查询
 */
function search()
{
	//订单编号/运单状态/收货人/
	var orderno = document.getElementById("orderno");
	var orderstatus = document.getElementById("orderstatus");
	var consigname = document.getElementById("consigname");
	Ajax.call('member.php?act=orderstatus', 'order_no=' + orderno.value+
			'&order_isdelivery='+orderstatus.value+'&consig_name='+consigname.value, orderstatus_callback , 'GET', 'TEXT', true, true );
	
}