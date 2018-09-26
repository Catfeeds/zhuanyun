<?php /* Smarty version 2.6.26, created on 2018-09-15 15:11:28
         compiled from list_news.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'list_news.htm', 50, false),)), $this); ?>
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
：<a href="index.php?act=index">首页</a> > <a href="index.php?act=list_news">新闻中心</a>
		</div>
        
          
     <div id="hbjzdh">
		 <ul>
			 <li>
				 <div class="news_left_title">新闻中心</div>
			 </li>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "news_left_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		 </ul>

     </div>        
		<div id="hbjynr">
          
		  <div id="xwzxlb">
           <ul>   <?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['article_div'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_div']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['article_div']['iteration']++;
?>      
		 		    <li>
            <div class="xwzxlb_dan">
			 <div class="xwzxlb_dan_left">
                <div class="xwzxlb_dan_left_red01"><h1><?php echo $this->_tpl_vars['article']['CntTimeShortYear']; ?>
</h1><?php echo $this->_tpl_vars['article']['CntTimeYear']; ?>
-<?php echo $this->_tpl_vars['article']['CntTimeMonth']; ?>
</div>
                <div class="xwzxlb_dan_left_red02"></div>
             </div>
			 <div class="xwzxlb_dan_right">   
				<div class="xwzxlb_dan_right_title"><a href="article.php?act=article_news&amp;articleid=<?php echo $this->_tpl_vars['article']['CntId']; ?>
"><?php echo $this->_tpl_vars['article']['CntTitle']; ?>
</a></div>
          		<div class="xwzxlb_dan_right_txt"><a href="article.php?act=article_news&amp;articleid=<?php echo $this->_tpl_vars['article']['CntId']; ?>
">&gt;&gt;&gt;</a></div>
		     </div>
             <div id="clear"></div>
		    </div>
            </li>
				 <?php endforeach; endif; unset($_from); ?>
		           </ul>
           <div id="clear"></div>
          </div>
		  
		  <div id="xwzxyeshu">
            <div id="hbjynr_yeshu">
           	<?php if ($this->_tpl_vars['currentpage'] != 1): ?>
			<A id="page_first" href="engrave_news.php?act=query&amp;page=1&amp;pagecount=<?php echo $this->_tpl_vars['pagecount']; ?>
" ><?php echo $this->_tpl_vars['lang']['page_first']; ?>
</A>
			<?php else: ?>
			<A id="page_first" class="notedit" href="engrave_news.php?act=query&amp;page=1&amp;pagecount=<?php echo $this->_tpl_vars['pagecount']; ?>
" ><?php echo $this->_tpl_vars['lang']['page_first']; ?>
</A>
			<?php endif; ?>    
			<A id="page_prev" href="engrave_news.php?act=query&amp;page=<?php echo smarty_function_math(array('equation' => 'x-1','x' => $this->_tpl_vars['currentpage'],'format' => '%d'), $this);?>
&amp;pagecount=<?php echo $this->_tpl_vars['pagecount']; ?>
"><?php echo $this->_tpl_vars['lang']['page_prev']; ?>
</A>
			 <?php $_from = $this->_tpl_vars['record_count']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['record_a'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['record_a']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['recordcount']):
        $this->_foreach['record_a']['iteration']++;
?>
				<A id="page<?php echo $this->_tpl_vars['recordcount']; ?>
" href="engrave_news.php?act=query&amp;page=<?php echo $this->_tpl_vars['recordcount']; ?>
&amp;pagecount=<?php echo $this->_tpl_vars['pagecount']; ?>
"><?php echo $this->_tpl_vars['recordcount']; ?>
</A>
			 <?php endforeach; endif; unset($_from); ?>
	        <A id="page_next" href="engrave_news.php?act=query&amp;page=<?php echo smarty_function_math(array('equation' => 'x+1','x' => $this->_tpl_vars['currentpage'],'format' => '%d'), $this);?>
&amp;pagecount=<?php echo $this->_tpl_vars['pagecount']; ?>
">
				<?php echo $this->_tpl_vars['lang']['page_next']; ?>
</A>
	        <A id="page_last" href="engrave_news.php?act=query&amp;page=<?php echo $this->_tpl_vars['pagecount']; ?>
&amp;pagecount=<?php echo $this->_tpl_vars['pagecount']; ?>
"><?php echo $this->_tpl_vars['lang']['page_last']; ?>
</A>
	        <input type="hidden" id="currentpage" name="currentpage" value="<?php echo $this->_tpl_vars['currentpage']; ?>
"></input>
	        <input type="hidden" id="pagecount" name="pagecount" value="<?php echo $this->_tpl_vars['pagecount']; ?>
"></input>
             <div id="clear"></div>
            </div>
            <div id="clear"></div>
          </div>
          
          <div id="fygs_kong"></div>
		</div>
	   <div id="clear"></div>
	 </div>
     <div id="huicontent_kong"></div>
	</div>
 
<div id="ptpp_bghui">
  <div id="ptpp">
	<div class="ptpp_dan">
		<div class="ptpp_dan_left"><img src="themes/default/images/rbhm/ptpp_01.png" border="0" /></div>
		<div class="ptpp_dan_right">
			<div class="ptpp_dan_right_title">迅捷的速度</div>
			<div class="ptpp_dan_right_txt">最快一小时内出库！邮政内部仓库，发货当日上飞机</div>
		</div>
		<div id="clear"></div>
	</div>
	<div class="ptpp_kong"></div>
	<div class="ptpp_dan">
		<div class="ptpp_dan_left"><img src="themes/default/images/rbhm/ptpp_02.png" border="0" /></div>
		<div class="ptpp_dan_right">
			<div class="ptpp_dan_right_title">周到的服务</div>
			<div class="ptpp_dan_right_txt">多客服渠道对应，包装按您备注所写，多种运输方式，丰富的增值服务满足您的个性化需求！</div>
		</div>
		<div id="clear"></div>
	</div>
	<div class="ptpp_kong"></div>
	<div class="ptpp_dan">
		<div class="ptpp_dan_left"><img src="themes/default/images/rbhm/ptpp_03.png" border="0" /></div>
		<div class="ptpp_dan_right">
			<div class="ptpp_dan_right_title">实惠的价格</div>
			<div class="ptpp_dan_right_txt">保证日常运营的前提，提供最低廉的价格</div>
		</div>
		<div id="clear"></div>
	</div>
	<div class="ptpp_kong"></div>
	<div class="ptpp_dan">
		<div class="ptpp_dan_left"><img src="themes/default/images/rbhm/ptpp_04.png" border="0" /></div>
		<div class="ptpp_dan_right">
			<div class="ptpp_dan_right_title">安心的保障</div>
			<div class="ptpp_dan_right_txt">EMS20万以下免费保险，邮政铭东自有保险，理赔无需长久等待</div>
		</div>
		<div id="clear"></div>
	</div>
	<div id="clear"></div>
 </div>
</div>

 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 </body>
 </html>
  <?php echo '
<script type="text/javascript">
var currentpage= document.getElementById(\'currentpage\');
var pagecount = document.getElementById(\'pagecount\');
if(pagecount.value==1){
	//只有一页
	var pagefirst=document.getElementById("page_first");//首页
	var pageprev=document.getElementById("page_prev");//上一页
	var pagelast=document.getElementById("page_last");//末页
	var pagenext=document.getElementById("page_next");//下一页
	pagefirst.setAttribute("disabled",true);
	pageprev.setAttribute("disabled",true);
	pagelast.setAttribute("disabled",true);
	pagenext.setAttribute("disabled",true);
}
else if(currentpage.value==1)
{
	//第一页
	var pagefirst=document.getElementById("page_first");//首页
	var pageprev=document.getElementById("page_prev");//上一页
	pagefirst.setAttribute("disabled",true);
	pageprev.setAttribute("disabled",true);
}
else if(pagecount.value==currentpage.value)
{
	//当前页
	var pagelast=document.getElementById("page_last");//末页
	var pagenext=document.getElementById("page_next");//下一页
	pagelast.setAttribute("disabled",true);
	pagenext.setAttribute("disabled",true);
}
var pagecurrent=document.getElementById("page"+currentpage.value);//当前页
if(pagecurrent!=null)
{
	pagecurrent.setAttribute("disabled",true);
}
</script>
 '; ?>