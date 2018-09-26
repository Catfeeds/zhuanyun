//表索引
var tablename_index = 0;
var packagestatus = -1;
var curPage = 1; //当前页码
var total,pageSize,totalPage;
/**
 * 初始化
 */
$(function(){
	tablename_index = parseInt($('#type').val())+1;
	packagestatus =  parseInt($('#type').val());
	getData(1);
	$("#pagecount span a").on('click',function(){
		var rel = $(this).attr("rel");
		if(rel){
			getData(rel);
		}
	});
	var $lis=$(".checked li");
	$lis.click(function(){
		$(this).addClass("current").siblings().removeClass("current");
		//标签索引 -1、所有记录；0、入库途中；1、已入库；2、配货中；3、打包中；4、等待发出
		//5、已发出；6、历史预报；7、问题件
		var index = $lis.index(this);
		tablename_index = index;
		$("#contents table").eq(index).show().siblings().hide();
		//通过不同的ID获取不同状态下的库存列表（包裹）
		packagestatus = (index-1);
		getData(1);
	})
})

//获取数据
function getData(page){ 
	//alert(tablename_index);
	//订单编号/运单状态/收货人/
	var orderno = document.getElementById("orderno");
	var orderstatus = document.getElementById("orderstatus");
	var consig_name = document.getElementById("consigname");
	var order_iscolsed = 0; 
	var paymentstatus = -1;
	
	if(orderstatus.value==7)
	{
		tablename_index = -1;
		order_iscolsed = 1;
	}
	else if(orderstatus.value==3)
	{
		tablename_index = -1;
		paymentstatus=0;
	}
	$.ajax({
		type: 'POST',
		url: 'member_order.php?act=2104',
		data: {'pageNum':page-1,
			'order_isdelivery':(tablename_index-1),
			'order_no':orderno.value,
			'consig_name':consig_name.value,
			'paymentstatus':paymentstatus,
			'order_iscolsed':order_iscolsed},
		dataType:'json',
		beforeSend:function(){
			$("#list ul").append("<li id='loading'>loading...</li>");
		},
		success:function(json){
			total = json.total; //总记录数
			pageSize = json.pageSize; //每页显示条数
			curPage = page; //当前页
			totalPage = json.totalPage; //总页数

			var list = json.list;
			orderstatus_callback(list);
		},
		complete:function(){ //生成分页条
			getPageBar();
		},
		error:function(){
			alert("数据加载失败");
		}
	});
}

//获取分页条
function getPageBar(){
	//页码大于最大页数
	if(curPage>totalPage) curPage=totalPage;
	//页码小于1
	if(curPage<1) curPage=1;
	pageStr = "<span>共"+total+"条</span><span>"+curPage+"/"+totalPage+"</span>";
	
	//如果是第一页
	if(curPage==1){
		pageStr += "<span>首页</span><span>上一页</span>";
	}else{
		pageStr += "<span><a href='javascript:void(0)' rel='1'>首页</a></span><span><a href='javascript:void(0)' rel='"+(curPage-1)+"'>上一页</a></span>";
	}
	
	//如果是最后页
	if(curPage>=totalPage){
		pageStr += "<span>下一页</span><span>尾页</span>";
	}else{
		pageStr += "<span><a href='javascript:void(0)' rel='"+(parseInt(curPage)+1)+"'>下一页</a></span><span><a href='javascript:void(0)' rel='"+totalPage+"'>尾页</a></span>";
	}
		
	$("#pagecount").html(pageStr);
}

/**
 * 订单库存
 * @param result：订单库存结果
 */
function orderstatus_callback(result)
{
	if(result==undefined)
	{
		return;
	}
	var tablename='currenttable'+(tablename_index-1);
	//清空table
	var currenttable = document.getElementById(tablename);
	var rows = currenttable.rows.length;
	for(var index = rows-1; index > 0; index--)
	{
		currenttable.deleteRow(index);
	}
	if(result.length!=0)
	{
		//添加table
		$.each(result,function(index,array){ //遍历json数据列
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
			newTd1.innerHTML='<a href="member_order.php?act=order_detail&orderId=' + array['order_id'] + '" target="_blank">' + array['order_no'] + '</a>';
			var ordw_waybillno='<ul>';
			$.each(array['waybill_list'],function(index,array){
				ordw_waybillno += ('<li><a href="package_track.php?act=waybill_detail&id='+
				array['ordw_waybillno']+'" target="_blank">');
				if(array['LogisticsName']!=null && array['LogisticsName']!= '')
				{
					ordw_waybillno += (array['LogisticsName'] + '-');
				}
				ordw_waybillno += (array['ordw_waybillno']+'</a></li>');
			});
			ordw_waybillno +="</ul>"
			newTd2.innerHTML=ordw_waybillno;//array['ordw_orderno']
			newTd3.innerHTML=array['order_weight'];
			newTd4.innerHTML=array['order_deductweight'];
			newTd5.innerHTML=array['order_time'];
			newTd6.innerHTML=array['orderstatus_value'];
			if(array['order_shipmentid'] == 2) {
                newTd6.innerHTML += " 欧洲专线:"+array['dispatch_status'];
			}
          
			var newTd7 = newTr.insertCell(7);
			newTd7.setAttribute('width',70);
			switch(array['order_isdelivery'])
			{
				case "0":
					newTd7.innerHTML="<a href='javascript:void(0);' onclick=cancelData("+
					array['order_id']
					+",'"+curPage+"') title='取消'>"
					+"取消"
					+"</a>";
					break;
//				case "1":
//					newTd7.innerHTML="<a href='javascript:void(0);' onclick=cancelData("+
//					array['order_id']
//					+",'"+curPage+"') title='取消'>"
//					+"取消"
//					+"</a>";
//					break;
//				case "2":
//					newTd7.innerHTML="<a href='javascript:void(0);' onclick=cancelData("+
//					array['order_id']
//					+",'"+curPage+"') title='取消'>"
//					+"取消"
//					+"</a>";
//					break;  2015年6月8日 15:07:42 修改了配货后不能进行取消
				case "3":
					newTd7.innerHTML=
//					"<a href='javascript:void(0);' onclick=cancelData("+
//					array['order_id']
//					+",'"+curPage+"') title='取消'>"
//					+"取消"
//					+"</a>"
//					+      2015年6月8日 15:07:42 修改了配货后不能进行取消
					"<a href='member_order.php?act=2109&id="+
					array['order_id']
					+"'>"
					+" 支付"
					+"</a>";
					break;
				case "5":
					newTd7.innerHTML=""
					+"<a href='member_order.php?act=2108&id="+
					array['order_id']
					+"'>"
					+"确认收货"
					+"</a>";
					//<img src='themes/default/images/icon_accept.png' border='0' height='16' width='16' />
					break;
			}
		});
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
 * 取消
 * @param id：订单ID
 * @param page：当前页码
 */
function cancelData(id,page){
	if (confirm('确认取消吗？')==false){ 
		return;
	}
	//订单编号/运单状态/收货人/
	var orderno = document.getElementById("orderno");
	var orderstatus = document.getElementById("orderstatus");
	var consig_name = document.getElementById("consigname");
	var order_iscolsed = 0; 
	var paymentstatus = -1;
	
	if(orderstatus.value==7)
	{
		tablename_index = -1;
		order_iscolsed = 1;
	}
	else if(orderstatus.value==3)
	{
		tablename_index = -1;
		paymentstatus=0;
	}
	
	$.ajax({
		type: 'POST',
		url: 'member_order.php?act=member_2105',
		data: {'pageNum':page-1,
			'order_isdelivery':tablename_index,
			'order_no':orderno.value,
			'consig_name':consig_name.value,
			'paymentstatus':paymentstatus,
			'order_iscolsed':order_iscolsed,
			'id':id},
		dataType:'json',
		beforeSend:function(){
			$("#list ul").append("<li id='loading'>loading...</li>");
		},
		success:function(json){
			total = json.total; //总记录数
			pageSize = json.pageSize; //每页显示条数
			curPage = page; //当前页
			totalPage = json.totalPage; //总页数

			var list = json.list;
			orderstatus_callback(list);
		},
		complete:function(){ //生成分页条
			getPageBar();
		},
		error:function(){
			alert("数据加载失败");
		}
	});
}

/**
 * 查询
 */
function search()
{
	//先确定 订单状态	
	var index = orderstatus.value;
	tablename_index = index;
	var $lis=$(".checked li");
	var orderstatusobj = document.getElementById("orderstatus"+index)
	$("#orderstatus"+index).addClass("current").siblings().removeClass("current");
	$("#contents table").eq(index).show().siblings().hide();
	
	getData(1);
}