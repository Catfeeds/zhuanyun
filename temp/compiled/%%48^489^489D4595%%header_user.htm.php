<?php /* Smarty version 2.6.26, created on 2018-10-05 14:48:27
         compiled from header_user.htm */ ?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 铭东物流转运系统</title>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/default/css/common.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/page.css" rel="stylesheet" type="text/css" />



<link href="themes/default/css/index.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/rbhm/public.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/rbhm/style.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/rbhm/member.css" rel="stylesheet" type="text/css" />

<link type="text/css" href="css/portal.css" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="templates/default/css/index.css" />	
<link href="templates/default/css/header_new.css" type="text/css" rel="stylesheet" media="all" />



<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/template.js"></script>
<script type="text/javascript" src="js/lodash.min.js"></script>
<script src="templates/default/js/jquery.cookies.2.1.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>



<script type="text/javascript" src="js/transport.js"></script>
<script type="text/javascript" src="js/utils.js"></script>
<script type="text/javascript" src="js/listtable.js"></script>
<script type="text/javascript" src="js/validator.js"></script>
<script type="text/javascript" src="themes/default/js/user.js"></script>

<script type="text/javascript" src="js/lang_user_center.js"> </script>
<style type="text/css">
  <?php echo '
  body {
    background: #fff;
  }
  '; ?>

</style>
</head>
<body >

<div class="member_login ie6png" style="display: none;">
  <div id="formLogin">
    <?php if ($this->_tpl_vars['username']): ?>
    <h2>会员登录 MEMBER LOGIN</h2>
    <p>欢迎您，<?php echo $this->_tpl_vars['username']; ?>
！ </p>
    <p>您的账号余额：<?php echo $this->_tpl_vars['user_money']; ?>
&nbsp;&nbsp;<a href="member.php?act=member_onlinerecharge">充值</a></p>
    <p><a href="member.php?act=21">我的运单</a></p>
    <p><a href="index.php?act=member_account" class="geren">进入个人管理中心</a></p>
    <p><a href="javascript:void(0)" onClick="Quit_login()">退出登录</a></p>
    <?php else: ?>
    <h2>会员登录 MEMBER LOGIN</h2>
    <input type="text" id="user" name="user" class="ipt-txts ipts1" />
    <input type="password" id="password" name="password" class="ipt-txts ipts2" />
    <div class="div_psd"><span>
        <input id="rember_pwd" type="checkbox" class="checkbox" />
        <label for="rember_pwd">记住密码</label>
        </span><a href="index.php?act=forget_password">忘记登录密码？</a></div>
    <button style="cursor:pointer;" onClick="login()">登录</button>
    <?php endif; ?>
  </div>
  <p class="log_info"></p>
  <div>
    <h2>运单追踪</h2>
    <textarea class="waybill_search_textarea" id="delivery_numbers" name="delivery_numbers" placeholder="最多输入20个查询号码（每行一个）"></textarea>

    <input class="waybill_search_button" type="button" value="查询运费" onclick="delivery_submit()"/>
  </div>
</div>


<div class="section_1">
  <div class="index_top m_cont">
    <div class="welcome" ><?php echo $this->_tpl_vars['Welcometo']; ?>
&nbsp;<?php echo $this->_tpl_vars['page_title']; ?>
！
      <i class="orange" >&nbsp;当前汇率</i>： 
      100 RMB = 
      <?php $_from = $this->_tpl_vars['get_currency_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
        <?php echo $this->_tpl_vars['item']['value']; ?>
<?php echo $this->_tpl_vars['item']['Code']; ?>
,
      <?php endforeach; endif; unset($_from); ?>
    </div>
    <div class="top_right">
      <span class="a_tel">4000-097561</span><a href="index.php?act=list_news"><span class="a_help">帮助中心</span></a>
      <?php if ($_SESSION['username']): ?>
        <?php echo $this->_tpl_vars['Welcomeback']; ?>
，<?php echo $_SESSION['username']; ?>
！<a href="index.php?act=member_account" class="a_login"><?php echo $this->_tpl_vars['ucenter']; ?>
</a><a href="javascript:void(0);" onClick="Quit_login()" class="a_login"><?php echo $this->_tpl_vars['Signout']; ?>
</a>
      <?php else: ?>
      <a href="index.php?act=member_login" class="a_login"><?php echo $this->_tpl_vars['login']; ?>
</a><a href="index.php?act=member_register" class="a_login"><?php echo $this->_tpl_vars['register']; ?>
</a>
      <?php endif; ?>
    </div>
  </div>
</div>


<div class="section_2" style="    background: #084a70 url(/images/world-cup.gif) center center no-repeat;">
  <div class="index_header"> <a  href="index.php" class="logo"><img src="themes/default/images/logo.png"/></a><span class="logo"><img src="templates/default/images/logo_img.png"/></span>
    <div class="header_news">最新资讯：<a href="/article.php?act=article_bidu&articleid=21">转运操作演示</a></div>
  </div>
</div>

<div class="section_menu">
  <div class="menu">
    <ul id="nav">
    <!--<?php $_from = $this->_tpl_vars['daohang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['info'] => $this->_tpl_vars['dh']):
?>-->
      <li><a href="<?php echo $this->_tpl_vars['dh']['url']; ?>
"><?php if ($this->_tpl_vars['language_name'] == 'Chinese'): ?><?php echo $this->_tpl_vars['dh']['title']; ?>
<?php elseif ($this->_tpl_vars['language_name'] == 'English'): ?><?php echo $this->_tpl_vars['dh']['titleen']; ?>
<?php elseif ($this->_tpl_vars['language_name'] == 'taiwan'): ?> <?php echo $this->_tpl_vars['dh']['titletw']; ?>
<?php endif; ?></a></li>
    <!--<?php endforeach; endif; unset($_from); ?>-->
    </ul>
  </div>
</div>
