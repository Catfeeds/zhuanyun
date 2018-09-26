<?php /* Smarty version 2.6.26, created on 2018-09-04 18:12:35
         compiled from list_bidu.htm */ ?>
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

<div id="header_line"></div>


<div id="huicontent_bg">
	 <div id="huicontent">
	   
       <div id="xzdwz">
		<?php echo $this->_tpl_vars['weizhi']; ?>
：<a href="index.php?act=index">首页</a> > <a href="index.php?act=list_bidu">转运必读</a>
       </div>
       
     <div id="hbjzdh">
		 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bidu_left_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     </div>
		
		<div id="hbjynr">
			<div id="hbjynr_img"><img src="themes/default/images/rbhm/banner_05.jpg" style="width:100%" border="0" /></div>
            <div id="hbjynr_liebiao">
				<ul> <?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['article_div'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_div']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['article_div']['iteration']++;
?>  
				<li><a href="article.php?act=article_bidu&amp;articleid=<?php echo $this->_tpl_vars['article']['CntId']; ?>
"><?php echo $this->_tpl_vars['article']['CntTitle']; ?>
</a></li>
				 <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<!--<div id="hbjynr_yeshu_bg">-->
				<!--<div id="hbjynr_yeshu">-->
					<!--<ul>-->
						<!--<li class="hbjynr_yeshu_jiantou"><a href="#"><</a></li>-->
						<!--<li><a href="#">1</a></li>-->
						<!--<li><a href="#">2</a></li>-->
						<!--<li class="hbjynr_yeshu_jiantou"><a href="#">></a></li>-->
					<!--</ul>-->
					<!--<div id="clear"></div>-->
				<!--</div>-->
				<!--<div id="clear"></div>-->
			<!--</div>-->
		</div>	 
		<!-- <div class="cr_bot">
		  <p class="MsoNormal">
	<br />
</p>
<p class="MsoNormal">
	<br />
</p>
		</div> -->
	   <div id="clear"></div>
	 </div>
     <div id="huicontent_kong"></div>
	</div>
 

 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 </body>
 </html>