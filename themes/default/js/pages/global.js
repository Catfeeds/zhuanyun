/**
 *
 */
// cfang : 不知道在哪里使用的
window.onload=function(){ 
  var sc=document.getElementById("sc");
  if(1440<screen.width<768) //获取屏幕的的宽度 
  { 
    //sc.setAttribute("href","templates/default//css/style_1004.css"); //设置css引入样式表的路径 
  } 
} 
//used in header-副本中
function dsf() {
  if (window.screen.width=='400')
  document.write ('<body style="zoom: 37%">');
  else if (window.screen.width=='600')
  document.write ('<body style="zoom: 55%">');
  else if (window.screen.width=='800') 
  document.write ('<body style="zoom: 75%">');
}