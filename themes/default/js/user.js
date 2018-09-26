/**
 * 登陆
 * @returns {Boolean}
 */
function login()
{
	var username=document.getElementById('user').value;
	var password=document.getElementById('password').value;
    var captcha=document.getElementById('captcha').value;
    var submit_disabled = false;

    if ( username == '' )
    {
        alert('用户名为空!');
    }
  /*  if (captcha=='')
    {
        alert('验证码为空！');
        return false;
    }*/
//    var res1=Ajax.call( 'user.php?act=check_captcha','captcha=' + captcha, registed_callback , 'GET', 'TEXT', false, true );
//    if(res1=='false')
// 	{
//	    alert('验证码错误！')
//    	return false;
//	}
    if ( submit_disabled )
    {
        document.forms['formUser'].elements['Submit'].disabled = 'disabled';
        return false;
    }
    var res2=Ajax.call( 'user.php?act=check_captcha', 'captcha=' + captcha, check_captcha_callback , 'GET', 'TEXT', false, true );
    if (res2!="true")
    {
        alert("验证码错误！")
        return false;
    }
   // return true;
    Ajax.call( 'user.php?act=member_login', 'username=' + username+'&password='+password, login_callback , 'GET', 'TEXT', false, true );
}

/**
 * 验证：登陆-回调函数
 * @param result
 */
function login_callback(result)
{
	var obj = eval('(' + result + ')');
	if(result)
	{
		location.href="index.php";return ;
		var html='<h2>会员登录 MEMBER LOGIN</h2>'
	      +'<p>欢迎您，'+obj.username+'！</p>'
		  +'<p>您的账号余额：'+obj.user_money+'&nbsp;&nbsp;<a href="#">充值</a></p>'
		  +'<p><a href="member.php?act=member_current">我的运单</a></p>'
		  +'<p><a href="index.php?act=member_account" class="geren">进入个人管理中心</a></p>'
		  +'<p><a href="javascript:void(0);" onclick="Quit_login()">退出登录</a></p>';
		document.getElementById('formLogin').innerHTML=html;
		var tophtml='<span class="thr_tel">热线电话：</span><i>0532-8235012</i> 欢迎回来，'+obj.username+'！|<a href="index.php?act=member_account">会员中心</a>|<a href="javascript:void(0)" onclick="Quit_login()">退出登录</a>';
		document.getElementById('login_top').innerHTML=tophtml;
	}
	else
	{
		document.getElementById('user').focus();
	}
}

/**
 * 退出登陆
 * @returns {Boolean}
 */
function Quit_login()
{
    Ajax.call( 'index.php?act=logout', '', Quit_login_callback , 'GET', 'TEXT', true, true );
}

/**
 * 验证：退出-回调函数
 * @param result
 */
function Quit_login_callback(result)
{
	if(result)
	{
		var html='<h2>会员登录 MEMBER LOGIN</h2>'
				+'<input type="text" id="user" name="user" class="ipt-txts ipts1" />'
				+'<input type="password" id="password" name="password" class="ipt-txts ipts2" />'
				+'<div class="div_psd"><span>'
				+'<input type="checkbox" class="checkbox" />'
				+'记住密码</span><a href="#">忘记登录密码？</a></div>'
				+'<button  onclick="login()">登录</button>';
		var formLogin = document.getElementById('formLogin');
		if(formLogin != null)
		{
			formLogin.innerHTML=html;
		}
		var tophtml='<span class="thr_tel">热线电话：</span><i>0532-8235012</i> <a href="index.php?act=member_login">登录</a>|<a href="index.php?act=member_register">注册</a>|<a href="index.php?act=member_account">会员中心</a>';
		var login_top = document.getElementById('login_top');
		if(login_top!=null)
		{
			login_top.innerHTML=tophtml;
		}
		//跳转到首页
	}
	else
	{
		document.getElementById('user').focus();
	}
}
function check_captcha_callback(result)
{
  if ( result == "true" )
  {
    return true;
    //document.getElementById('username_notice').innerHTML = msg_un_registered;
  }
  else
  {
    return false;
    //document.getElementById('username_notice').innerHTML = '';//username_ok
  }
}
