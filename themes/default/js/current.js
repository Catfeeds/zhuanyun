琛ㄧ储寮�
var tablename_index = 0;
var packagestatus = -1;
var curPage = 1; //褰撳墠椤电爜
var total,pageSize,totalPage;
/**
 * 鍒濆鍖�
 */
$(function(){
	tablename_index = parseInt($('#type').val())+1;
	packagestatus =  parseInt($('#type').val());
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
		//鏍囩绱㈠紩 -1銆佹墍鏈夎褰曪紱0銆佸叆搴撻€斾腑锛�1銆佸凡鍏ュ簱锛�2銆侀厤璐т腑锛�3銆佹墦鍖呬腑锛�4銆佺瓑寰呭彂鍑�
		//5銆佸凡鍙戝嚭锛�6銆佸巻鍙查鎶ワ紱7銆侀棶棰樹欢
		var index = $lis.index(this);
		tablename_index = index;
		$("#contents table").eq(index).show().siblings().hide();
		//閫氳繃涓嶅悓鐨処D鑾峰彇涓嶅悓鐘舵€佷笅鐨勫簱瀛樺垪琛紙鍖呰９锛�
		packagestatus = (index-1);
		getData(1);
	})
})

//鑾峰彇鏁版嵁
function getData(page){ 
	//alert(tablename_index);
	//璁㈠崟缂栧彿/杩愬崟鐘舵€�/鏀惰揣浜�/
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
		url: 'member_order.php?act=member_2104',
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
			total = json.total; //鎬昏褰曟暟
			pageSize = json.pageSize; //姣忛〉鏄剧ず鏉℃暟
			curPage = page; //褰撳墠椤�
			totalPage = json.totalPage; //鎬婚〉鏁�

			var list = json.list;
			orderstatus_callback(list);
		},
		complete:function(){ //鐢熸垚鍒嗛〉鏉�
			getPageBar();
		},
		error:function(){
			alert("鏁版嵁鍔犺浇澶辫触");
		}
	});
}

//鑾峰彇鍒嗛〉鏉�
function getPageBar(){
	//椤电爜澶т簬鏈€澶ч〉鏁�
	if(curPage>totalPage) curPage=totalPage;
	//椤电爜灏忎簬1
	if(curPage<1) curPage=1;
	pageStr = "<span>鍏�"+total+"鏉�</span><span>"+curPage+"/"+totalPage+"</span>";
	
	//濡傛灉鏄涓€椤�
	if(curPage==1){
		pageStr += "<span>棣栭〉</span><span>涓婁竴椤�</span>";
	}else{
		pageStr += "<span><a href='javascript:void(0)' rel='1'>棣栭〉</a></span><span><a href='javascript:void(0)' rel='"+(curPage-1)+"'>涓婁竴椤�</a></span>";
	}
	
	//濡傛灉鏄渶鍚庨〉
	if(curPage>=totalPage){
		pageStr += "<span>涓嬩竴椤�</span><span>灏鹃〉</span>";
	}else{
		pageStr += "<span><a href='javascript:void(0)' rel='"+(parseInt(curPage)+1)+"'>涓嬩竴椤�</a></span><span><a href='javascript:void(0)' rel='"+totalPage+"'>灏鹃〉</a></span>";
	}
		
	$("#pagecount").html(pageStr);
}

/**
 * 璁㈠崟搴撳瓨
 * @param result锛氳鍗曞簱瀛樼粨鏋�
 */
function orderstatus_callback(result)
{
	if(result==undefined)
	{
		return;
	}
	var tablename='currenttable'+(tablename_index-1);
	//娓呯┖table
	var currenttable = document.getElementById(tablename);
	var rows = currenttable.rows.length;
	for(var index = rows-1; index > 0; index--)
	{
		currenttable.deleteRow(index);
	}
	if(result.length!=0)
	{
		//娣诲姞table
		$.each(result,function(index,array){ //閬嶅巻json鏁版嵁鍒�
			var newTr = currenttable.insertRow(-1);//鍦ㄦ渶涓嬬殑浣嶇疆
		    //缁欒繖涓璁剧疆id灞炴€э紝浠ヤ究浜庣鐞嗭紙鍒犻櫎锛�
		    newTr.id='tr'+index;
		    //璁剧疆瀵归綈鏂瑰紡锛堝彧鏄憡璇変綘锛屽彲浠ヤ互杩欑鏂瑰紡鏉ヨ缃换浣曞畠鏈夌殑灞炴€э級
		    newTr.align='center';
		    //娣诲姞9鍒�    
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

			var newTd7 = newTr.insertCell(7);
			newTd7.setAttribute('width',70);
			switch(array['order_isdelivery'])
			{
				case "0":
					newTd7.innerHTML="<a href='javascript:void(0);' onclick=cancelData("+
					array['order_id']
					+",'"+curPage+"') title='鍙栨秷'>"
					+"鍙栨秷"
					+"</a>";
					break;
//				case "1":
//					newTd7.innerHTML="<a href='javascript:void(0);' onclick=cancelData("+
//					array['order_id']
//					+",'"+curPage+"') title='鍙栨秷'>"
//					+"鍙栨秷"
//					+"</a>";
//					break;
//				case "2":
//					newTd7.innerHTML="<a href='javascript:void(0);' onclick=cancelData("+
//					array['order_id']
//					+",'"+curPage+"') title='鍙栨秷'>"
//					+"鍙栨秷"
//					+"</a>";
//					break;  2015骞�6鏈�8鏃� 15:07:42 淇敼浜嗛厤璐у悗涓嶈兘杩涜鍙栨秷
				case "3":
					newTd7.innerHTML=
//					"<a href='javascript:void(0);' onclick=cancelData("+
//					array['order_id']
//					+",'"+curPage+"') title='鍙栨秷'>"
//					+"鍙栨秷"
//					+"</a>"
//					+      2015骞�6鏈�8鏃� 15:07:42 淇敼浜嗛厤璐у悗涓嶈兘杩涜鍙栨秷
					"<a href='member_order.php?act=2109&id="+
					array['order_id']
					+"'>"
					+" 鏀粯"
					+"</a>";
					break;
				case "5":
					newTd7.innerHTML=""
					+"<a href='member_order.php?act=2108&id="+
					array['order_id']
					+"'>"
					+"纭鏀惰揣"
					+"</a>";
					//<img src='themes/default/images/icon_accept.png' border='0' height='16' width='16' />
					break;
			}
		});
	}
	else
	{
		var newTr = currenttable.insertRow(-1);//鍦ㄦ渶涓嬬殑浣嶇疆
	    newTr.align='center';
	    var newTd0 = newTr.insertCell();
	    
	    newTd0.setAttribute("colspan","9")
		newTd0.innerHTML = '鏃犳暟鎹�';
	}
}

/**
 * 鍙栨秷
 * @param id锛氳鍗旾D
 * @param page锛氬綋鍓嶉〉鐮�
 */
function cancelData(id,page){
	if (confirm('纭鍙栨秷鍚楋紵')==false){ 
		return;
	}
	//璁㈠崟缂栧彿/杩愬崟鐘舵€�/鏀惰揣浜�/
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
			total = json.total; //鎬昏褰曟暟
			pageSize = json.pageSize; //姣忛〉鏄剧ず鏉℃暟
			curPage = page; //褰撳墠椤�
			totalPage = json.totalPage; //鎬婚〉鏁�

			var list = json.list;
			orderstatus_callback(list);
                        
                        do_result = json.do_result;
                        if (do_result == 0)
                        {
                            do_message = json.do_message;
                            alert(do_message);
                        }
		},
		complete:function(){ //鐢熸垚鍒嗛〉鏉�
			getPageBar();
		},
		error:function(){
			alert("鏁版嵁鍔犺浇澶辫触");
		}
	});
}

/**
 * 鏌ヨ
 */
function search()
{
	//鍏堢‘瀹� 璁㈠崟鐘舵€�	
	var index = orderstatus.value;
	tablename_index = index;
	var $lis=$(".checked li");
	var orderstatusobj = document.getElementById("orderstatus"+index)
	$("#orderstatus"+index).addClass("current").siblings().removeClass("current");
	$("#contents table").eq(index).show().siblings().hide();
	
	getData(1);
}