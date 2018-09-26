<?php /* Smarty version 2.6.26, created on 2018-09-24 17:38:51
         compiled from header.htm */ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="Keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
<meta name="Description" content="<?php echo $this->_tpl_vars['description']; ?>
" />
<meta name="baidu-site-verification" content="2BrWVrSct9" />


<meta name="apple-mobile-web-app-capable" content="yes" />
<meta property="wb:webmaster" content="5fe4b6a43813032e" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['page_title']; ?>
 </title>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />


<link href="themes/default/css/common.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/index.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/rbhm/public.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/rbhm/style.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/rbhm/member.css" rel="stylesheet" type="text/css" />

<link type="text/css" href="css/portal.css" rel="stylesheet">
  <link href="themes/default/css/page.css" rel="stylesheet" type="text/css" />


<link rel="stylesheet" type="text/css" href="templates/default//css/index.css" />	
<link href="templates/default/css/header_new.css" type="text/css" rel="stylesheet" media="all" />
<link rel="stylesheet"  href="templates/default/css/swiper.min.css" type="text/css">
<link rel="shortcut icon" href="templates/default/images/zhuan.ico">


<script type="text/javascript" src="themes/default/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>
<script type="text/javascript" src="themes/default/js/rbhm/slideshow.js"></script>
<script type="text/javascript" src="themes/default/js/rbhm/rbsjtj.js"></script>


<script  src="templates/default/js/swiper.min.js"></script>
<script  src="templates/default/js/swiper.call.js"></script>

<script src="templates/default/js/jquery.cookies.2.1.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="templates/default/js/Global.js"> </script>
<script type="text/javascript" src="templates/default/js/Register.js"> </script>
<script type="text/javascript" src="themes/default/js/pages/global.js"> </script>
<script type="text/javascript" src="js/transport.js"></script>
<script type="text/javascript" src="js/utils.js"></script>
<script type="text/javascript" src="js/listtable.js"></script>
<script type="text/javascript" src="js/validator.js"></script>
<script type="text/javascript" src="themes/default/js/user.js"></script>
<script type="text/javascript" src="js/lang_user_center.js"> </script>

</head>
<body >

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
      <span class="a_tel">4000-097561</span><a href="article.php?act=article_bidu&articleid=21"><span class="a_help">使用流程</span></a>
      <?php if ($this->_tpl_vars['username']): ?>
        <?php echo $this->_tpl_vars['Welcomeback']; ?>
，<?php echo $this->_tpl_vars['username']; ?>
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
  <div class="index_header"> 
  	<a  href="index.php" class="logo"><img src="themes/default/images/logo.png"/></a>
  	<span class="logo" style="    margin-top: 27px;    margin-left: 15px;"><img src="templates/default/images/logo_img.png"/></span>
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


 <!-- </div>
</div> -->


<script>
    <?php echo '
    $(function() {
        if( $(\'#gywmdnr_huibt\').length>0) {
            var html = $(\'#gywmdnr_huibt\').html();
            // html = html.replace(/JPGOODBUY/ig, "铭东转运");
            html = html.replace(/日本/ig, "中国");
            $(\'#gywmdnr_huibt\').html(html);
        }
    });
    '; ?>


</script>