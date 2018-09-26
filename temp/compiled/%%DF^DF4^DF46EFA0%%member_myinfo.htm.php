<?php /* Smarty version 2.6.26, created on 2017-12-29 12:47:05
         compiled from member_myinfo.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>铭东物流转运系统</title>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/default/css/common.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/page.css" rel="stylesheet" type="text/css" />
<?php echo '
<script type="text/javascript" src="themes/default/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>
<!--[if IE 6]>
<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script>
  DD_belatedPNG.fix(\'.ie6png,.ie6png:hover\');
</script>
<![endif]-->
<script type="text/javascript">
$(function(){
	var $lis=$(".checked li");
	$lis.click(function(){
		$(this).addClass("current").siblings().removeClass("current");
		var index=$lis.index(this);
		$("#contents table").eq(index).show().siblings().hide();
	})
})
</script>
'; ?>

 </head>
 <body>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  
   
    <div class="conter">
	 <div class="member">
	  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "member_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
	   <div class="conter_right">
	    <div class="cr_top"><?php echo $this->_tpl_vars['weizhi']; ?>
：<?php echo $this->_tpl_vars['ur_here']; ?>
</div>
		 <div class="member_myinfo">
		  <div class="cr_bot">
			<div class="info"><span>我的信息</span></div>
			<p><?php echo $this->_tpl_vars['lang']['rank_name']; ?>
：<span><?php echo $this->_tpl_vars['myinformation']['rank_name']; ?>
</span></p>
			<p><?php echo $this->_tpl_vars['lang']['discount']; ?>
：<span><?php echo $this->_tpl_vars['myinformation']['discount']; ?>
</span></p>
			<p><?php echo $this->_tpl_vars['lang']['coupon_count']; ?>
：<span><?php echo $this->_tpl_vars['coupon_count']; ?>
</span></p>
			<p><?php echo $this->_tpl_vars['lang']['credit_line']; ?>
：<span><?php echo $this->_tpl_vars['myinformation']['credit_line']; ?>
</span></p>
		  </div>
		 </div>
	   </div>
	   <div class="clear"></div>
	 </div>
	</div>
  
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  
 </body>
 </html>