<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>用户注册</title>
<!-- 告诉浏览器不要缓存 -->
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
<meta http-equiv="description" content="This is my page">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!--
<link rel="stylesheet" type="text/css" href="styles.css">
-->
<script type="text/javascript">
<!--
function sendRequest(){
//创建一个ajax引擎
var xmlHttpRequest;
//不同浏览器获取xmlRequest对象方法不一样
if(window.ActiveXObject){
xmlHttpRequest = new ActiveXObject("MMMMMictofrt");
}else{
xmlHttpRequest = new XMLHttpRequest();
}
return xmlHttpRequest;
}
var myXmlHttpRequest
function checkName(){
myXmlHttpRequest = sendRequest();
if(myXmlHttpRequest){
//window.alert("创建成功");
//第一个参数表示请求方式get.post。第二个参数指定url,对哪个页面发送ajax请求
//用get方式提交的数据如果没有发生变化的话浏览器将会从缓存中直接提取
var url = "/ajax_yhyz/registerProcess.php? username=getValue('username').value";
//1,用这样就可以不从缓存提取了
//var url = "/ajax_yhyz/registerProcess.php? mytime='new Date()' & username=getValue('username').value";
//2,<meta http-equiv="pragma" content="no-cache">告诉浏览器不要缓存
//window.alert(url); 用于测试url是否成功
//第三个参数ture 表示异步机制
myXmlHttpRequest.open("get",url,true);
//指定回调函数，chul是函数名，表示如果状态发生变化就调用该函数，有四个状态
myXmlHttpRequest.onreadystatechange = chuli;
//发送请求，如果是get请求则填写null即可
//额如果是post请求，则填写实际的数据
myXmlHttpRequest.send(null);
}
}
function chuli(){
//window.alert("处理函数被回调");
if(myXmlHttpRequest.readyState == 4){
//window.alert("服务器返回"+myXmlHttpRequest.responseText);
getValue("myres").value = myXmlHttpRequest.responseText;
}
}
function getValue(id){
//return document.getElementById(id).value; 这样做的话没办法完成局部刷新
return document.getElementById(id);
}
-->

</script>
</head>

<body>
<form action="" method="post">
用户名字:<input type="text" name="username1" id="username" ><input type="button" onClick="checkName()" value="验证用户名">
<input type="text" id="myres" />
<br/>
用户密码:<input type="password" name="password"><br>
电子邮件:<input type="text" name="email"><br/>
<input type="submit" value="用户注册">
</form>
<form action="" method="post">
用户名字:<input type="text" name="username2" >

<br/>
用户密码:<input type="password" name="password"><br>
电子邮件:<input type="text" name="email"><br/>
<input type="submit" value="用户注册">
</form>
</body>
</html>
