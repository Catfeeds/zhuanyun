var date=new Date();
var year=date.getFullYear();
var month=date.getMonth()+1;
var day=date.getDate();
var newOption;

function init(){
    //初始化年份
	for(i=year-100;i<year+100;i++){
		newOption=new Option(i,i);
		document.myform.year.options.add(newOption);
	}
	document.myform.year.value=year;
	changeYear(year);

	//初始化月份
	for(j=1;j<13;j++){
		newOption=new Option(j,j-1);
		document.myform.month.options.add(newOption);
	}
	document.myform.month.value=month-1;
	changeDays(month);
	riLi();
}

function changeDays(months){
	var m=parseInt(months)+1;
	var y=document.myform.year.value;
	switch(m){
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:writeDays(31);break;
		case 4:
		case 6:
		case 9:
		case 11:writeDays(30);break;
		case 2:{
				if((y%4==0&&(y%100!=0||y%400==0)))
					writeDays(29);
				else
					writeDays(28);
				break;
				}
	}
}

function changeYear(y){
	 var mn=document.myform.month.value;
	 changeDays(mn);
}

function writeDays(num){	
	var nOption;
	document.myform.days.options.length=0;
	for(d=1;d<=num;d++){
		nOption=new Option(d,d);
		document.myform.days.options.add(nOption);
	}
	document.myform.days.value=new Date().getDate();

}

//禁止右键
document.oncontextmenu = function(){ 
	return false;
} 


//-------形成日历块------------------
var today = new Date();
var year = today.getYear();
var month=today.getMonth()+1;
var day = today.getDate();
var mYear=year;
var mMonth=month;
//上一年
function upy(){
	year++;
	riLi();
}
//下一年
function downy(){
	year--;
	riLi();
}
//下一个月
function upm(){
	month++;
	if(month>12){
		year++;
		month=1;
	}
	riLi();
}
//上一个月
function downm(){
	month--;
	if(month<1){
		year--;
		month=12;
	}
	riLi();
}
//--今天--
function jt(){
	year=mYear;
	month=mMonth;
	riLi();
}
//-------形成日历-----------
function riLi(){		
	var h=yiHaoXingQiJi(year,month)		//一号星期几
	var g=gongJiTian(year,month)		//指定的年分与月分共有几天
	var t=xingCheng(year,month,day,h,g);//返回生成的table字符串
	var jiaRu=document.getElementById("ri");//用innerHTML属性更改表格内容
	jiaRu.innerHTML=t;
 
}
//--------月1号星期几-----------
function yiHaoXingQiJi(yy,mm){
	var d = new Date(yy,mm-1,1);
	var day=d.getDay();
	return day;
}
//----根据年分与月分计算出给定月的天数---
function gongJiTian(nian,yueFen){
	 switch(yueFen){
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
			return 31;
			break;
		case 2:
			if(nian%4==0&&nian%100!=0||nian%400==0){	//判断闰年				
				return 29;
			}
			return 28;
			break;
		default:
		return 30;	
	}
}
function xingCheng(n,y1,r,zhouJi,tianShu){	//n :年 y1: 月 r: 日 zhouji 1号周几  tianshu 总天数 
	var y=new Array()
	y[0]="日";
	y[1]="一";
	y[2]="二";
	y[3]="三";
	y[4]="四";		
	y[5]="五";
	y[6]="六"

	//日历头部
	var head="<input type=\"button\" onclick=\"downy()\" value=\" &lt&lt \">"+
		"<input type=\"button\" onclick=\"downm()\" value=\" &lt \">"+
		"&nbsp;<b>"+n+"年"+y1+"月"+"</b>" +
		"<input type=\"button\" onclick=\"upm()\" value=\" &gt \">"+
		"<input type=\"button\" onclick=\"upy()\" value=\" &gt&gt \" ><br>"+ 
		"<table border=\"1\" width=\"300\" align=\"center\"><tr bgcolor=\"#00ffcc\">"
	for(i=0;i<7;i++){
		head+="<td align=\"center\">"+y[i]+"</td>"		//日历第一行有七列；列内显示显示周次
	}
 
	head+="</tr><tr>";
 
	//-----日历体--------
	for(var i=1;i<=zhouJi;i++){	
		head+="<td>&nbsp;</td>"			//在月1号之前给空格；给几个空格有算法来完成；空格用列内放"&nbsp;"表示
	}
 
	for(var ge=zhouJi+1,i=1;ge<=7*6;ge++){	
		var jinTianYanSe="";			//高亮显示今天颜色：黄色
		if(i==r){
			jinTianYanSe="yellow"
		}
		if(i<=tianShu){
			head+="<td align= \"center\""+"bgcolor=\""+jinTianYanSe+"\" >"+i+"</td>"
			i++;
		}else{
			head+="<td>&nbsp</td>"		//超过天数的格子给空格；以填满整个table
		}
		if(ge%7==0){	
			head+="</tr><tr>";		//七列换一行
		}
	}
	head=head.substring(0,head.length-4)
	head+="</table>";
	return head;
}
