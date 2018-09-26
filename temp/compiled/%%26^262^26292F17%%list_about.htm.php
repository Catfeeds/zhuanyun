<?php /* Smarty version 2.6.26, created on 2018-09-05 14:51:03
         compiled from list_about.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'list_about.htm', 51, false),array('function', 'math', 'list_about.htm', 61, false),)), $this); ?>
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
		  <p><?php echo $this->_tpl_vars['aboutObj']['cutformcontent']; ?>
</p>
		</div>
	    <!-- 
		<div class="cr_bot">
		 <?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['article_div'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_div']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['article_div']['iteration']++;
?>
		<dl class="news_infos">
			<dt><h1><?php echo $this->_tpl_vars['article']['CntTimeShortYear']; ?>
</h1><?php echo $this->_tpl_vars['article']['CntTimeYear']; ?>
-<?php echo $this->_tpl_vars['article']['CntTimeMonth']; ?>
</dt>
			<dd>   
				<h3><a href="article.php?act=article_news&amp;articleid=<?php echo $this->_tpl_vars['article']['CntId']; ?>
"><?php echo $this->_tpl_vars['article']['CntTitle']; ?>
</a></h3>
          		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['article']['CntBriefIntroduction'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 80) : smarty_modifier_truncate($_tmp, 80)); ?>
<a href="article.php?act=article_news&amp;articleid=<?php echo $this->_tpl_vars['article']['CntId']; ?>
">&gt;&gt;&gt;</a></p>
		  </dd>
		</dl>
		<?php endforeach; endif; unset($_from); ?>
		 <div class="tres">
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
          </div>
		</div>-->
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
<!-- 
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
pagecurrent.setAttribute("disabled",true);
</script>
'; ?>

 -->