//表索引
var tablename_index=0;
var packagestatus = -1;
var curPage = 1; //当前页码
var total,pageSize,totalPage;
//获取数据
function getData(page){ 
	//货运单号/订单状态/所在仓库/商品名称
	var expressnumber = document.getElementById("expressnumber");
	var packagesatusTemp = document.getElementById("packagesatus");
	var warehouse = document.getElementById("warehouse");
	var pckg_name = document.getElementById("pckg_name");
	if(packagesatusTemp.value != 0)
	{
		packagestatus=packagesatusTemp.value;
	}
	
	$.ajax({
		type: 'POST',
		url: 'member_packagemanage.php?act=package',
		data: {
			'pageNum':page-1,
			'expressnumber':expressnumber.value,
			'packagesatus':packagestatus,
			'warehouse':warehouse.value,
			'pckg_name':pckg_name.value
		},
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
			stock_callback(list);
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

$(function(){
	tablename_index = parseInt($('#type').val())+1;
	packagestatus =  $('#type').val();
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
		$('#packagesatus').val(packagestatus);
	
		getData(1);
	})
});

/**
 * 库存
 * @param result：库存结果
 */
function stock_callback(result)
{
	var tablename='stocktable'+tablename_index;
	//清空table
	var stocktable = document.getElementById(tablename);
	var rows = stocktable.rows.length;
	for(var index = rows-1; index > 0; index--)
	{
		stocktable.deleteRow(index);
	}
	if(result.length!=0)
	{
		//添加table
		$.each(result,function(index,array){ //遍历json数据列
			var newTr = stocktable.insertRow(-1);//在最下的位置
		    //给这个行设置id属性，以便于管理（删除）
		    newTr.id='tr'+index;
		    //设置对齐方式（只是告诉你，可以以这种方式来设置任何它有的属性）
		    newTr.align='center';
		    //添加9列    
		    var newTd1 = newTr.insertCell(0);
		    newTd1.style.textAlign="left";
			var newTd2 = newTr.insertCell(1);
			var newTd3 = newTr.insertCell(2);
			var newTd4 = newTr.insertCell(3);
			var newTd5 = newTr.insertCell(4);
			var newTd6 = newTr.insertCell(5);
			var newTd7 = newTr.insertCell(6);
			var newTd8 = newTr.insertCell(7);
			
			newTd1.innerHTML="&nbsp;<a href='member_forecast.php?act=member_forecast_view&id="+array['pck_id']+"'>"+
			/*<img src='themes/default/images/icon_detail.png' alt='详细' title='详细' style='position:relative;top:4px;'></img>*/
			""+array['pck_expressnumber']+"</a>";
			newTd2.innerHTML=array['pck_weight'];
			newTd3.innerHTML=array['HouseName'];
			var statusHTML="";
			if((array['pck_packagestatus']>=0 && array['pck_packagestatus']<2 && array['pck_isdelete'] == 0)
					||array['pck_packagestatus']==7 )
			{
				newTd4.innerHTML ="<span onclick=listTable.edit(this,'edit_forecast',"+array['pck_id']+")>"+
				array['pck_userremark']+
				"<img src='themes/default/images/icon_edit.png' alt='编辑' title='编辑' style='position:relative;top:4px;'></img>"+/**/
				'</span>';
			}
			else{
				newTd4.innerHTML=array['pck_userremark'];
			}
			$(newTd4).addClass('memoTd');
			newTd5.innerHTML=array['pck_intime_val'];//pck_intime_val
			newTd6.innerHTML=array['pck_instorage_time'];//RolloverBM
			newTd7.innerHTML=array['Symbol']+array['WarehousingValue'];//Warehousing
			newTd8.innerHTML=array['pck_packagestatus_value'];
			if(tablename_index<3)
			{
				var newTd9 = newTr.insertCell(8);
				newTd9.innerHTML="<a href='member_forecast.php?act=member_forecast_view&id="+array['pck_id']+"'>"+
					"详细</a> &nbsp;";
				if(array['pck_packagestatus']>=0 && array['pck_packagestatus']<2 && array['pck_isdelete'] == 0)
				{
					newTd9.innerHTML+="<a href='javascript:void(0);' onclick=removeData("+
					array['pck_id']
					+",'"+curPage+"') title='删除'>"
					/*<img src='themes/default/images/icon_delete.png' border='0' height='16' width='16' />*/
					+"删除"
					+"</a>";
				}
			}
		});

//		var newTr = stocktable.insertRow(-1);//在最下的位置
//		var newTd = newTr.insertCell(0);
//		newTd.setAttribute("colspan",9);
//		var html = "<div id='pagecount'"+tablename_index+" class='class_paging'></div>";
//		newTd.innerHTML=html;
	}
	else
	{
		var newTr = stocktable.insertRow(-1);//在最下的位置
	    newTr.align='center';
	    var newTd0 = newTr.insertCell();
	    
	    newTd0.setAttribute("colspan","9")
		newTd0.innerHTML = '无数据';
	}
}


function removeData(id,page){
	if (confirm('确认删除吗？删除后数据无法恢复！')==false){ 
		return;
	}
	$.ajax({
		type: 'POST',
		url: 'member_packagemanage.php?act=member_1202',
		data: {'pageNum':(page-1),'id':id},
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
			stock_callback(list);
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
	//先确定 包裹状态	
	var index = packagesatus.value;
	tablename_index = index;
	var $lis=$(".checked li");
	var packagestatusobj = document.getElementById("packagestatus"+index)
	$("#packagestatus"+index).addClass("current").siblings().removeClass("current");
	//标签索引 0、所有记录；1、入库途中；2、已入库；3、配货中；4、打包中；5、等待发出
	//6、已发出；7、历史预报；8、问题件
	$("#contents table").eq(index).show().siblings().hide();
	
	getData(1);
}