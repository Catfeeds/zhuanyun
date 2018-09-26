//表索引
var tablename_index='';
var curPage = 1; //当前页码
var total,pageSize,totalPage;

$(function(){
	getData(1);
	$("#pagecount span a").on('click',function(){
		var rel = $(this).attr("rel");
		if(rel){
			getData(rel);
		}
	});
//	
//	var $lis=$(".checked li");
//	$lis.click(function(){
//		$(this).addClass("current").siblings().removeClass("current");
//		var index=$lis.index(this);
//		$("#contents div").eq(index).show().siblings().hide();
//	})
})
//获取数据
function getData(page){ 
	$.ajax({
		type: 'POST',
		url: 'member_packagemanage.php?act=member_5304',
		data: {'pageNum':page-1},
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
			question_callback(list);
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


function removeData(id,page){
	if (confirm('确认删除吗？删除后数据无法恢复！')==false){ 
		return;
	}
	$.ajax({
		type: 'POST',
		url: 'member_packagemanage.php?act=member_5302',
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
			question_callback(list);
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
 * 库存
 * @param result：库存结果
 */
function question_callback(result)
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
		    //添加列 
		    var newTd1 = newTr.insertCell(0);
			var newTd2 = newTr.insertCell(1);
			var newTd3 = newTr.insertCell(2);
			var newTd4 = newTr.insertCell(3);
			var newTd5 = newTr.insertCell(4);
			var newTd6 = newTr.insertCell(5);
			var newTd7 = newTr.insertCell(6);
			var isValide = !!array['da_isvalidate'];
			// var newTd8 = newTr.insertCell(7);

			// newTd1.innerHTML="<input type='checkbox' name='checkboxes[]' value='"+array['da_id']+"' />";
			newTd1.innerHTML=array['da_name'];
			newTd2.innerHTML=array['da_consignee'];
			newTd3.innerHTML=array['country_name'];
            newTd4.innerHTML=array['da_address'];
			newTd5.innerHTML=array['da_zipcode'];
			newTd6.innerHTML=array['da_isvalidate']==0?'<span style="color:red">未通过</span>':'<span style="color:green">通过</span>';
			if(!isValide) {
                newTd7.innerHTML = "<a href='member_datamanage.php?act=member_5304&da_id=" + array['da_id'] + "' title='编辑'>"
                    + "<img style='position:relative;top:3px;' src='themes/default/images/icon_edit.png' border='0' height='16' width='16' />"
                    + "</a>&nbsp;";
                newTd7.innerHTML += "<a href='javascript:void();' onclick=removeData(" + array['da_id'] + "," + curPage + ") title='删除'>"
                    + "<img style='position:relative;top:3px;' src='themes/default/images/icon_delete.png' border='0' height='16' width='16' />"
                    + "</a>";
            } else {
                newTd7.innerHTML = "<a href='member_datamanage.php?act=member_5304&da_id=" + array['da_id'] + "' title='查看'>"
                    + "<img style='position:relative;top:3px;' src='themes/default/images/icn_categories.png' border='0' height='16' width='16' />"
                    + "</a>&nbsp;";
			}
		});
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