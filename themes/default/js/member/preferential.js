//表索引
var tablename_index=0;
var curPage = 1; //当前页码
var total,pageSize,totalPage;

$(function(){
	getData(1);
	$("#pagecount span a").live('click',function(){
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
	$.ajax({
		type: 'POST',
		url: 'member_packagemanage.php?act=member_4304',
		data: {'pageNum':(page-1),
			'StatusId':tablename_index},
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


function removeData(id,page){
	if (confirm('确认删除吗？删除后数据无法恢复！')==false){ 
		return;
	}
	$.ajax({
		type: 'POST',
		url: 'member_packagemanage.php?act=member_3102',
		data: {'pageNum':(page-1),'id':id,'pck_packagestatus':7},
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
 * 库存
 * @param result：库存结果
 */
function stock_callback(result)
{
	var operatorText = '';
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
		    var newTd0 = newTr.insertCell(0); 
		    var newTd1 = newTr.insertCell(1);
			var newTd2 = newTr.insertCell(2);
			var newTd3 = newTr.insertCell(3);
			var newTd4 = newTr.insertCell(4);
			var newTd5 = newTr.insertCell(5);
			var newTd6 = newTr.insertCell(6);
			var newTd7 = newTr.insertCell(7);
			var newTd8 = newTr.insertCell(8);
			
			newTd0.innerHTML=array['SN'];
			newTd1.innerHTML=array['ReCouponValue'];
			newTd2.innerHTML=array['RebatePoints'];
			newTd3.innerHTML=array['CouponName'];
			newTd4.innerHTML=array['CreateTime'];
			newTd5.innerHTML=array['MinAmount'];
			newTd6.innerHTML=array['ExpireTime'];
			newTd7.innerHTML=array['UseTime'];
			newTd8.innerHTML=array['Status'];
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
