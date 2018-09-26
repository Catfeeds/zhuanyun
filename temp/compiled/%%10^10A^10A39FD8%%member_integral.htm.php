<?php /* Smarty version 2.6.26, created on 2017-12-29 12:47:00
         compiled from member_integral.htm */ ?>
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
<script type="text/javascript" src="themes/default/js/member/integral.js"></script>
<!--[if IE 6]>
<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script>
  DD_belatedPNG.fix(\'.ie6png,.ie6png:hover\');
</script>
<![endif]-->
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
		 <div class="member_stock">
		  <div class="cr_bot">
			<ul class="checked">
			 <li class="current"><a href="#"><?php echo $this->_tpl_vars['lang']['accumulatepoints']; ?>
</a></li>
			 <li><a href="#"><?php echo $this->_tpl_vars['lang']['accumulatepoints_log']; ?>
</a></li>
			</ul>
			<div id="contents">
			 <div class="integrated">
			  <p><?php echo $this->_tpl_vars['lang']['accumulatepoints_current']; ?>
：<span><?php echo $this->_tpl_vars['user']['pay_points']; ?>
分</span></p>
			  <p><?php echo $this->_tpl_vars['lang']['accumulatepoints_currency']; ?>
：<span><?php echo $this->_tpl_vars['s_integralprice']; ?>
<?php echo $this->_tpl_vars['currency']['Name']; ?>
</span></p>
			 </div>
			 <div class="hide">
			  <table id="stocktable0" class="stocktable">
				<tr>
					<th>操作日期</th><th>操作说明</th><th>积分</th><th>状态</th>
				</tr>
			 </table>
				<div id='pagecount' class='class_paging'></div>
			 </div>
		   </div>
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