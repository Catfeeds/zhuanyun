//表索引
var tablename_index=0;
var curPage = 1; //当前页码
var total,pageSize,totalPage;

$(function(){
	getData(1);
	$("#pagecount span a").live('click',function(){
		var rel = $(this).attr("rel");
		if(rel){
			if(tablename_index==0){
				getData(rel);
			}
			else if(tablename_index==1){
				getRecommendLogData(rel);
			}
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
		if(tablename_index==0){
			getData(1);
		}
		else{
			getRecommendLogData(1);
		}
	})
})

//获取数据
function getData(page){ 
	$.ajax({
		type: 'POST',
		url: 'member_recommend.php?act=4601',
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


/**
 * 推荐
 * @param result：推荐结果
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
			
			newTd1.innerHTML=array['rank_name'];
			newTd2.innerHTML=array['user_name'];
			newTd3.innerHTML=array['reg_time'];
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





//获取数据
function getRecommendLogData(page){ 
	$.ajax({
		type: 'POST',
		url: 'member_recommend.php?act=4602',
		data: {'pageNum':page-1},
		dataType:'json',
		success:function(json){
			total = json.total; //总记录数
			pageSize = json.pageSize; //每页显示条数
			curPage = page; //当前页
			totalPage = json.totalPage; //总页数

			var list = json.list;
			RecommendLogData_callback(list);
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
 * 推荐分成
 * @param result：推荐分成结果
 */
function RecommendLogData_callback(result)
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
			
			newTd1.innerHTML=array['rank_name'];
			newTd2.innerHTML=array['user_name'];
			newTd3.innerHTML=array['change_time'];
			newTd4.innerHTML=array['change_desc'];
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

/**
 * 选中推荐码
 * @param obj
 */
function select_code(obj)
{
	obj.focus();
	obj.select();
}

/**
 * 选中推荐地址
 * @param obj
 */
function select_url(obj)
{
	obj.focus();
	obj.select();
}