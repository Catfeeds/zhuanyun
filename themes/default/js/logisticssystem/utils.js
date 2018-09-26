/**
 ** 加法函数，用来得到精确的加法结果
 ** 说明：javascript的加法结果会有误差，在两个浮点数相加的时候会比较明显。这个函数返回较为精确的加法结果。
 ** 调用：accAdd(arg1,arg2)
 ** 返回值：arg1加上arg2的精确结果
 **/
function accAdd(arg1, arg2) {
    var r1, r2, m, c;
    try {
        r1 = arg1.toString().split(".")[1].length;
    }
    catch (e) {
        r1 = 0;
    }
    try {
        r2 = arg2.toString().split(".")[1].length;
    }
    catch (e) {
        r2 = 0;
    }
    c = Math.abs(r1 - r2);
    m = Math.pow(10, Math.max(r1, r2));
    if (c > 0) {
        var cm = Math.pow(10, c);
        if (r1 > r2) {
            arg1 = Number(arg1.toString().replace(".", ""));
            arg2 = Number(arg2.toString().replace(".", "")) * cm;
        } else {
            arg1 = Number(arg1.toString().replace(".", "")) * cm;
            arg2 = Number(arg2.toString().replace(".", ""));
        }
    } else {
        arg1 = Number(arg1.toString().replace(".", ""));
        arg2 = Number(arg2.toString().replace(".", ""));
    }
    return (arg1 + arg2) / m;
}

/**
 ** 减法函数，用来得到精确的减法结果
 ** 说明：javascript的减法结果会有误差，在两个浮点数相减的时候会比较明显。这个函数返回较为精确的减法结果。
 ** 调用：accSub(arg1,arg2)
 ** 返回值：arg1加上arg2的精确结果
 **/
function accSub(arg1, arg2) {
    var r1, r2, m, n;
    try {
        r1 = arg1.toString().split(".")[1].length;
    }
    catch (e) {
        r1 = 0;
    }
    try {
        r2 = arg2.toString().split(".")[1].length;
    }
    catch (e) {
        r2 = 0;
    }
    m = Math.pow(10, Math.max(r1, r2));
    n = (r1 >= r2) ? r1 : r2;
    return ((arg1 * m - arg2 * m) / m).toFixed(n);
}

/**
 ** 乘法函数，用来得到精确的乘法结果
 ** 说明：javascript的乘法结果会有误差，在两个浮点数相乘的时候会比较明显。这个函数返回较为精确的乘法结果。
 ** 调用：accMul(arg1,arg2)
 ** 返回值：arg1乘以 arg2的精确结果
 **/
function accMul(arg1, arg2) {
    var m = 0, s1 = arg1.toString(), s2 = arg2.toString();
    try {
        m += s1.split(".")[1].length;
    }
    catch (e) {
    }
    try {
        m += s2.split(".")[1].length;
    }
    catch (e) {
    }
    return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m);
}


/**
 ** 除法函数，用来得到精确的除法结果
 ** 说明：javascript的除法结果会有误差，在两个浮点数相除的时候会比较明显。这个函数返回较为精确的除法结果。
 ** 调用：accDiv(arg1,arg2)
 ** 返回值：arg1除以arg2的精确结果
 **/
function accDiv(arg1, arg2) {
    var t1 = 0, t2 = 0, r1, r2;
    try {
        t1 = arg1.toString().split(".")[1].length;
    }
    catch (e) {
    }
    try {
        t2 = arg2.toString().split(".")[1].length;
    }
    catch (e) {
    }
    with (Math) {
        r1 = Number(arg1.toString().replace(".", ""));
        r2 = Number(arg2.toString().replace(".", ""));
        return (r1 / r2) * pow(10, t2 - t1);
    }
}
//将数字金额进行千位分隔
function formatNumber(number)
{
    number = number.toString() .replace(/,/g, "");
    var digit = number.indexOf(".");
    // 取得小数点的位置
    var int = number.substr(0, digit);
    // 取得小数中的整数部分
    var i;
    var mag = new Array();
    var word;
    if(number.indexOf(".") == -1)
    {
        // 整数时
        i = number.length;
        // 整数的个数
        while(i > 0)
        {
            word = number.substring(i, i - 3);
            // 每隔3位截取一组数字
            i -= 3;
            mag.unshift(word);
            // 分别将截取的数字压入数组
        }
        number = mag;
    }
    else
    {
        // 小数时
        i = int.length;
        // 除小数外，整数部分的个数
        while(i > 0)
        {
            word = int.substring(i, i - 3);
            //每隔3位截取一组数字
            i -= 3;
            mag.unshift(word);
        }
        number = mag + number.substring(digit);
    }
    return number;
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

//改变支付方式样式
function changeClass()
{
    var pointsClass = document.getElementById('points').className;
    gObj("payoptions").style.display =  (pointsClass != 'pay_toggle_open') ? "" : "none";
    if(pointsClass == 'pay_toggle_open')
    {
        document.getElementById('points').className = 'pay_toggle';
    }
    else
    {
        document.getElementById('points').className = 'pay_toggle_open';
    }
}

function showdiv(targetid,objN){
   
	var target=document.getElementById(targetid);
	var clicktext=document.getElementById(objN)

	if (target.style.display=="block"){
		target.style.display="none";
		clicktext.innerText="查看详情>>";
	} else {
		target.style.display="block";
		clicktext.innerText='隐藏详情>>';
	}
   
}