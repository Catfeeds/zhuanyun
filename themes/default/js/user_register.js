/**
 * 初始化
 */
$(function(){
	document.forms['formUser'].elements['username'].focus();
});
/**
 * 表单验证
 */
function validate()
{
	if(!is_registered($('#username').val()))
	{
		return false;
	}
	if(!check_password($('#password').val()))
	{
		return false;
	}
	if(!check_conform_password($('#pwds').val()))
	{
		return false;
	}
	if(!email_is_registered($('#e_mail').val()))
	{
		return false;
	}
	if(!tel_is_registered($('#tel').val()))
	{
		return false;
	}
	if(!refencer_recommend_code_is_exist($('#refencer_recommend_code').val()))
	{
		return false;
	}
    if(!check_captcha($('#captcha').val()))
    {
        return false;
    }
	return true;
}
/**
 * 验证：用户名称是否被注册
 * @param username
 * @returns {Boolean}
 */
function is_registered( username )
{
    var submit_disabled = false;
	var unlen = username.replace(/[^\x00-\xff]/g, "**").length;
	document.getElementById('username_notice').innerHTML = ('');
    if ( username == '' )
    {
        document.getElementById('username_notice').innerHTML = msg_un_blank;
        return false;
    }

    if ( !chkstr( username ) )
    {
        document.getElementById('username_notice').innerHTML = msg_un_format;
        return false;
    }
    if ( unlen < 6 )
    { 
        document.getElementById('username_notice').innerHTML = username_shorter;
        return false;
    }
    if ( unlen > 20 )
    {
        document.getElementById('username_notice').innerHTML = msg_un_length;
        return false;
    }
    if ( submit_disabled )
    {
        return false;
    }
    var res = Ajax.call( 'user.php?act=is_registered', 'username=' + username, registed_callback , 'GET', 'TEXT', false, true );
    if(res=="true")
	{
    	return false;
	}
    return true;
}

/**
 * 验证：用户名称是否被注册-回调函数
 * @param result
 */
function registed_callback(result)
{
  if ( result == "true" )
  {
    document.getElementById('username_notice').innerHTML = msg_un_registered;
  }
  else
  {
    document.getElementById('username_notice').innerHTML = '';//username_ok
  }
}

/**
 * 验证：邮箱 是否被注册
 * @param username
 * @returns {Boolean}
 */
function email_is_registered( email )
{
	//空
    if ( email == '' )
    {
        document.getElementById('e_mail_notice').innerHTML = msg_email_blank;
        return false;
    }
	//邮箱格式验证
    if ( !Utils.isEmail(email) )
    {
        document.getElementById('e_mail_notice').innerHTML = email_invalid;
        return false;
    }
    else
    {
        document.getElementById('e_mail_notice').innerHTML = '';//msg_can_rg
    }

    var res = Ajax.call( 'user.php?act=email_is_registered', 'email=' + email, email_registed_callback , 'GET', 'TEXT', false, true );
    if(res=="true")
	{
    	return false;
	}
    return true;
}

/**
 * 验证：邮箱 是否被注册-回调函数
 * @param result
 */
function email_registed_callback(result)
{
  if ( result == "true" )
  {
    document.getElementById('e_mail_notice').innerHTML = msg_email_registered;
  }
  else
  {
    document.getElementById('e_mail_notice').innerHTML = '';
  }
}

/**
 * 验证：手机号 是否被注册
 * @param username
 * @returns {Boolean}
 */
function tel_is_registered( tel )
{
	//空
    if ( tel == '' )
    {
        document.getElementById('tel_notice').innerHTML = msg_tel_blank;
        return false;
    }
	//邮箱格式验证
    if ( !Utils.isTel(tel) )
    {
        document.getElementById('tel_notice').innerHTML = msg_tel_format;
        return false;
    }
    else
    {
        document.getElementById('tel_notice').innerHTML = '';//msg_can_rg
    }

    var res = Ajax.call( 'user.php?act=tel_is_registered', 'tel=' + tel, tel_registed_callback , 'GET', 'TEXT', false, true );
    if(res=="true")
	{
    	return false;
	}
    return true;
}

/**
 * 验证：手机号 是否被注册-回调函数
 * @param result
 */
function tel_registed_callback(result)
{
  if ( result == "true" )
  {
    document.getElementById('tel_notice').innerHTML = msg_tel_registered;
  }
  else
  {
    document.getElementById('tel_notice').innerHTML = '';
  }
}

/**
 * 验证：推荐码 是否被注册
 * @param username
 * @returns {Boolean}
 */
function refencer_recommend_code_is_exist( refencer_recommend_code )
{
	if(Utils.trim(refencer_recommend_code) == '')
	{
	    document.getElementById('refencer_recommend_code_notice').innerHTML = '';
		return true;
	}
    var res = Ajax.call( 'user.php?act=refencer_recommend_code_is_exist', 'refencer_recommend_code=' + refencer_recommend_code, refencer_recommend_code_exist_callback , 'GET', 'TEXT', false, true );
    if(res=="false")
	{
    	return false;
	}
    return true;
}

/**
 * 验证：推荐码 是否被注册-回调函数
 * @param result
 */
function refencer_recommend_code_exist_callback(result)
{
  if ( result == "false" )
  {
    document.getElementById('refencer_recommend_code_notice').innerHTML = msg_refencer_recommend_code_notexist;
  }
  else
  {
    document.getElementById('refencer_recommend_code_notice').innerHTML = '';
  }
}
//////////////////////////////////////////////////////////////////////////////////////////////////
/*辅助验证*/
/**
 * 字符串验证
 * @param str
 * @returns {Boolean}
 */
function chkstr(str)
{
  for (var i = 0; i < str.length; i++)
  {
    if (str.charCodeAt(i) < 127 && !str.substr(i,1).match(/^\w+$/ig))
    {
      return false;
    }
  }
  return true;
}
/**
 * 密码验证
 * @param password
 */
function check_password( password )
{
    if ( password.length < 6 )
    {
        document.getElementById('password_notice').innerHTML = password_shorter;
    }
    else
    {
        document.getElementById('password_notice').innerHTML = '';//msg_can_rg
    }
    //验证是否与确认密码相同
    var pwds = $('#pwds').val();
    if(pwds == '')
    {
        document.getElementById('conform_password_notice').innerHTML = input_confirm_password;
        return false;
    }
    else if(pwds != password)
	{
        document.getElementById('conform_password_notice').innerHTML = confirm_password_invalid;
        return false;
	}
    else
    {
        document.getElementById('conform_password_notice').innerHTML = '';//msg_can_rg
    }
    return true;
}
/**
 * 确认密码验证
 * @param conform_password
 * @returns {Boolean}
 */
function check_conform_password( conform_password )
{
    password = document.getElementById('password').value;
    
    if ( conform_password.length < 6 )
    {
        document.getElementById('conform_password_notice').innerHTML = password_shorter;
        return false;
    }
    if ( conform_password != password )
    {
        document.getElementById('conform_password_notice').innerHTML = confirm_password_invalid;
        return false;
    }
    else
    {
        document.getElementById('conform_password_notice').innerHTML = '';//msg_can_rg
    }
    return true;
}
 //////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * 验证：验证码 输入是否正确
 * @param captcha
 * @returns {Boolean}
 */
 function check_captcha(captcha_word){
    if ( captcha_word == '' )
    {
        document.getElementById('captcha_notice').innerHTML = captcha_notnull;
        return false;
    }
    var res = Ajax.call( 'user.php?act=check_captcha','captcha=' + captcha_word, registed_callback , 'GET', 'TEXT', false, true );
    if(res=='false')
 	{
	   document.getElementById('captcha_notice').innerHTML = '验证码输入错误!';
    	return false;
	}
    else
    {
        document.getElementById('captcha_notice').innerHTML = '';
    }
    return true;
 }