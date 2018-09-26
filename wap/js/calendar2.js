var date=new Date();
var year=date.getFullYear();
var month=date.getMonth()+1;
var day=date.getDate();
var newOption;

function init(){
    //��ʼ�����
	for(i=year-100;i<year+100;i++){
		newOption=new Option(i,i);
		document.myform.year.options.add(newOption);
	}
	document.myform.year.value=year;
	changeYear(year);

	//��ʼ���·�
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

//��ֹ�Ҽ�
document.oncontextmenu = function(){ 
	return false;
} 


//-------�γ�������------------------
var today = new Date();
var year = today.getYear();
var month=today.getMonth()+1;
var day = today.getDate();
var mYear=year;
var mMonth=month;
//��һ��
function upy(){
	year++;
	riLi();
}
//��һ��
function downy(){
	year--;
	riLi();
}
//��һ����
function upm(){
	month++;
	if(month>12){
		year++;
		month=1;
	}
	riLi();
}
//��һ����
function downm(){
	month--;
	if(month<1){
		year--;
		month=12;
	}
	riLi();
}
//--����--
function jt(){
	year=mYear;
	month=mMonth;
	riLi();
}
//-------�γ�����-----------
function riLi(){		
	var h=yiHaoXingQiJi(year,month)		//һ�����ڼ�
	var g=gongJiTian(year,month)		//ָ����������·ֹ��м���
	var t=xingCheng(year,month,day,h,g);//�������ɵ�table�ַ���
	var jiaRu=document.getElementById("ri");//��innerHTML���Ը��ı������
	jiaRu.innerHTML=t;
 
}
//--------��1�����ڼ�-----------
function yiHaoXingQiJi(yy,mm){
	var d = new Date(yy,mm-1,1);
	var day=d.getDay();
	return day;
}
//----����������·ּ���������µ�����---
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
			if(nian%4==0&&nian%100!=0||nian%400==0){	//�ж�����				
				return 29;
			}
			return 28;
			break;
		default:
		return 30;	
	}
}
function xingCheng(n,y1,r,zhouJi,tianShu){	//n :�� y1: �� r: �� zhouji 1���ܼ�  tianshu ������ 
	var y=new Array()
	y[0]="��";
	y[1]="һ";
	y[2]="��";
	y[3]="��";
	y[4]="��";		
	y[5]="��";
	y[6]="��"

	//����ͷ��
	var head="<input type=\"button\" onclick=\"downy()\" value=\" &lt&lt \">"+
		"<input type=\"button\" onclick=\"downm()\" value=\" &lt \">"+
		"&nbsp;<b>"+n+"��"+y1+"��"+"</b>" +
		"<input type=\"button\" onclick=\"upm()\" value=\" &gt \">"+
		"<input type=\"button\" onclick=\"upy()\" value=\" &gt&gt \" ><br>"+ 
		"<table border=\"1\" width=\"300\" align=\"center\"><tr bgcolor=\"#00ffcc\">"
	for(i=0;i<7;i++){
		head+="<td align=\"center\">"+y[i]+"</td>"		//������һ�������У�������ʾ��ʾ�ܴ�
	}
 
	head+="</tr><tr>";
 
	//-----������--------
	for(var i=1;i<=zhouJi;i++){	
		head+="<td>&nbsp;</td>"			//����1��֮ǰ���ո񣻸������ո����㷨����ɣ��ո������ڷ�"&nbsp;"��ʾ
	}
 
	for(var ge=zhouJi+1,i=1;ge<=7*6;ge++){	
		var jinTianYanSe="";			//������ʾ������ɫ����ɫ
		if(i==r){
			jinTianYanSe="yellow"
		}
		if(i<=tianShu){
			head+="<td align= \"center\""+"bgcolor=\""+jinTianYanSe+"\" >"+i+"</td>"
			i++;
		}else{
			head+="<td>&nbsp</td>"		//���������ĸ��Ӹ��ո�����������table
		}
		if(ge%7==0){	
			head+="</tr><tr>";		//���л�һ��
		}
	}
	head=head.substring(0,head.length-4)
	head+="</table>";
	return head;
}
