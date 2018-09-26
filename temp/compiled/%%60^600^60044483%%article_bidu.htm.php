<?php /* Smarty version 2.6.26, created on 2018-09-16 08:57:06
         compiled from article_bidu.htm */ ?>


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
：<a href="index.php?act=index">首页</a> > <a href="index.php?act=list_bidu">转运教程</a>
        <!-- <?php echo $this->_tpl_vars['weizhi']; ?>
：<a href="http://www.jpgoodbuy.com/">首页</a> <code>&gt;</code> 关于我们 -->
     </div>


	  <div id="hbjzdh">
		  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bidu_left_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	  </div>


     <div id="hbjynr">
		 <div id="hbjynr_img">
			 <img src="themes/default/images/rbhm/banner_05.jpg" style="width:100%"  border="0" />
		 </div>
		<div id="gywmdnr">
			<div id="gywmdnr_redbt">
				<?php echo $this->_tpl_vars['artics']['CntTitle']; ?>

			</div>
			<div id="gywmdnr_huibt">
				<?php echo $this->_tpl_vars['artics']['CntContent']; ?>

			</div>
		</div>
	 </div>
     <div id="clear"></div>
  </div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottom_four_block.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 
 
 </body>
 </html>