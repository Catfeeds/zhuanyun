<?php /* Smarty version 2.6.26, created on 2018-09-12 06:25:42
         compiled from list_faq.htm */ ?>

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
：<a href="index.php?act=index">首页</a> > <a href="index.php?act=list_faq">FAQ</a>
       </div>
       
     <div id="hbjzdh">
		 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "faq_left_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     </div>
		
		<div id="hbjynr">
			<div id="hbjynr_img"><img src="themes/default/images/rbhm/hbjzdh_08.jpg" border="0" /></div>
            <div id="hbjynr_liebiao">
				<ul> <?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['article_div'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_div']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['article_div']['iteration']++;
?>  
				<li><a href="article.php?act=article_faq&amp;articleid=<?php echo $this->_tpl_vars['article']['CntId']; ?>
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