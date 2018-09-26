<?php /* Smarty version 2.6.26, created on 2018-07-05 12:39:50
         compiled from list_trans.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>铭东物流转运系统</title>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/default/css/common.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/page.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/default/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>
<!--[if IE 6]>
<script src="themes/default/js/DD_belatedPNG_0.0.8a-min.js"></script>
<script>
  DD_belatedPNG.fix('.ie6png,.ie6png:hover');
</script>
<![endif]-->
 </head>
 <body>
 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

   
    <div class="conter">
	 
	   <div class="conter_left">
	   <h2>转运流程<span></span></h2>
		<ul class="left_ul">
		  <?php $_from = $this->_tpl_vars['trans_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['slider'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['slider']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['trans']):
        $this->_foreach['slider']['iteration']++;
?>
				<li><a href="index.php?act=list_trans&id=<?php echo $this->_tpl_vars['trans']['categoryid']; ?>
"><?php echo $this->_tpl_vars['trans']['typename']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	   <h2>关于我们<span></span></h2>
		<ul class="left_ul">
		  <?php $_from = $this->_tpl_vars['about_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['slider'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['slider']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['about']):
        $this->_foreach['slider']['iteration']++;
?>
				<li><a href="index.php?act=list_about&id=<?php echo $this->_tpl_vars['about']['categoryid']; ?>
"><?php echo $this->_tpl_vars['about']['typename']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	    <h2>新闻中心<span></span></h2>
		<ul class="left_ul">
		  <?php $_from = $this->_tpl_vars['channel_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['slider'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['slider']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['channeltemp']):
        $this->_foreach['slider']['iteration']++;
?>
				<li><a href="index.php?act=list_news&id=<?php echo $this->_tpl_vars['channeltemp']['categoryid']; ?>
"><?php echo $this->_tpl_vars['channeltemp']['typename']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	   </div>
	   <div class="conter_right">
	    <div class="cr_top"><?php echo $this->_tpl_vars['weizhi']; ?>
：<?php echo $this->_tpl_vars['ur_here']; ?>
</div>
		<div class="cr_bot">
		  <p><?php echo $this->_tpl_vars['transObj']['cutformcontent']; ?>
</p>
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