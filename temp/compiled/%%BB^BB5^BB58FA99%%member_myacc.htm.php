<?php /* Smarty version 2.6.26, created on 2018-07-08 15:24:51
         compiled from member_myacc.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'member_myacc.htm', 34, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   
    <div class="conter">
	 <div class="member_sub">
	   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "member_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	   <div class="conter_right">
		   <div class="cr_bot">
			   <h2>我的账户</h2>
	    		<!--<div class="cr_top"><?php echo $this->_tpl_vars['weizhi']; ?>
：<?php echo $this->_tpl_vars['ur_here']; ?>
</div>-->
			   <div class="cost myacc">
		  <div class="cr_bot">
		  	<dl>
			  <dt>
			  	<a href="user.php?act=member_headsculpture">
			  		<img src="<?php echo $this->_tpl_vars['users']['user_headsculpture']; ?>
" width="68px" height="68px"/>
			  	</a>
			  </dt>
			  <dd class="dds1">
		  		<h3 style="float:left;"><?php echo $this->_tpl_vars['users']['user_name']; ?>

		  		<span style="font-size:14px;">（入库码：<?php echo $this->_tpl_vars['users']['storage_code']; ?>
）</span>
		  		<!-- (编码：<?php echo $this->_tpl_vars['users']['storage_code']; ?>
&nbsp; -->
		  		</h3>
		  		<p style="float:left;padding:0px 5px;"><?php echo $this->_tpl_vars['lang']['system_welcome']; ?>
<?php echo $this->_tpl_vars['lang']['system_name']; ?>
<?php echo $this->_tpl_vars['lang']['member_rank']; ?>

		  		<span <?php if ($this->_tpl_vars['users']['ur_color']): ?>style="color:<?php echo $this->_tpl_vars['users']['ur_color']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['users']['rank_name']; ?>
<?php if ($this->_tpl_vars['users']['ur_icon']): ?><img style="float:right;" src="<?php echo $this->_tpl_vars['users']['ur_icon']; ?>
"></img><?php endif; ?></span>
		  		</p>
			  </dd>
			  <dd>
			  	<p class="ddpl">消费总额：<span><?php echo $this->_tpl_vars['currency_symbol']['Symbol']; ?>
<?php echo $this->_tpl_vars['cost']; ?>
</span></p>
			  	<p class="ddpr">可消费积分：<span><?php echo $this->_tpl_vars['users']['pay_points']; ?>
</span></p>
			  	<!--<p class="ddpr">日元账户余额：<span><?php echo $this->_tpl_vars['currency_jpy']['Symbol']; ?>
<?php echo $this->_tpl_vars['users']['user_jpymoney']; ?>
<?php echo $this->_tpl_vars['currency_jpy']['Name']; ?>
</span></p>-->
			  </dd>
			  <dd>
			  	<p class="ddpl">账户余额：<span><?php echo $this->_tpl_vars['currency_symbol']['Symbol']; ?>
<?php echo $this->_tpl_vars['users']['user_money']; ?>
<?php echo $this->_tpl_vars['currency_symbol']['Name']; ?>
</span></p>
			  	<p class="ddpr">运费折扣：<span><?php if ($this->_tpl_vars['users']['discount'] != 0): ?><?php echo smarty_function_math(array('equation' => 'x/10','x' => $this->_tpl_vars['users']['discount'],'format' => '%.2f'), $this);?>
<?php else: ?>10.00<?php endif; ?>折</span></p>
			  	<p class="ddpr">附属账户余额：<span><?php echo $this->_tpl_vars['currency_symbol']['Symbol']; ?>
<?php echo $this->_tpl_vars['users']['user_subsidiarymoney']; ?>
<?php echo $this->_tpl_vars['currency_symbol']['Name']; ?>
</span></p>
			  </dd>
			</dl>
			<div class="clear"></div>
			<ul class="checked">
			 <li <?php if ($this->_tpl_vars['tab'] == 0): ?>class="current"<?php endif; ?>><a href="javascript:;">交易记录</a></li>
			 <li <?php if ($this->_tpl_vars['tab'] == 1): ?>class="current"<?php endif; ?>><a href="javascript:;">充值/提现记录</a></li>
			</ul>
			<div id="contents">
				  <div class="cont1 cont <?php if ($this->_tpl_vars['tab'] == 1): ?>hide<?php endif; ?>">
					  <table class="stocktable">
				      <tr>
					    <th>记录号</th><th>操作时间</th><th>账户动作</th><th>消费/增加金额</th><th>类别</th><th>查看详情</th>
				      </tr>
				      <?php $_from = $this->_tpl_vars['recharge_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name_recharge'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_recharge']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['recharge']):
        $this->_foreach['name_recharge']['iteration']++;
?>
					 <tr>
						<td><?php echo $this->_tpl_vars['recharge']['log_id']; ?>
</td>
						<td><?php echo $this->_tpl_vars['recharge']['change_time']; ?>
</td>
						<td><?php echo $this->_tpl_vars['recharge']['change_desc']; ?>
</td>
						<td><?php echo $this->_tpl_vars['recharge']['user_money']; ?>
</td>
						<td><?php if ($this->_tpl_vars['recharge']['change_type'] == 0 || $this->_tpl_vars['recharge']['user_money'] > 0): ?>
						充值
						<?php else: ?>
									<?php if ($this->_tpl_vars['recharge']['change_type'] == 1): ?>
								提现
								<?php else: ?>
								订单扣款
								<?php endif; ?>
						<?php endif; ?>
						</td>
						<td><a href="member_myaccount.php?act=member_viewaccount_log&id=<?php echo $this->_tpl_vars['recharge']['log_id']; ?>
">查看详情</a></td>
					 </tr>
					 <?php endforeach; endif; unset($_from); ?>
				     </table>
			     </div>
				<div class="cont2 cont <?php if ($this->_tpl_vars['tab'] == 0): ?>hide<?php endif; ?>">
					 <table id="table_recharge" class="stocktable">
				      <tr>
					    <th>记录号</th><th>操作时间</th><th>确认时间</th><th>类型</th><th>金额</th><th>状态</th><th>操作</th>
				      </tr>
				      <?php $_from = $this->_tpl_vars['account_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name_account'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name_account']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['account']):
        $this->_foreach['name_account']['iteration']++;
?>
					 <tr>
						<td><?php echo $this->_tpl_vars['account']['id']; ?>
</td>
						<td><?php echo $this->_tpl_vars['account']['add_time']; ?>
</td>
						<td><?php echo $this->_tpl_vars['account']['paid_time']; ?>
</td>
						<td><?php echo $this->_tpl_vars['account']['process_type']; ?>
</td>
						<td><?php echo $this->_tpl_vars['account']['amount']; ?>
</td>
						<td><?php echo $this->_tpl_vars['account']['is_paid']; ?>
</td>
						<td>
							<a href="member_myaccount.php?act=member_viewaccount&id=<?php echo $this->_tpl_vars['account']['id']; ?>
"  title="查看">
					     		<img src="themes/default/images/icon_detail.png" border="0" height="16" width="16" />
					     	</a>
							<a href="javascript:;" onclick="listTable.remove(<?php echo $this->_tpl_vars['account']['id']; ?>
,'<?php echo $this->_tpl_vars['lang']['drop_confirm']; ?>
','member_removeaccount')" title="<?php echo $this->_tpl_vars['lang']['remove']; ?>
">
								<img src="themes/default/images/icon_delete.png" border="0" height="16" width="16" />
							</a>
						</td>
					 </tr>
					 <?php endforeach; endif; unset($_from); ?>
				     </table>
				     
   					<div id="pagecount" class="class_paging"></div>
		        </div>
			</div>
			<!-- 
	   <table id="page-table" cellspacing="0">
		  <tr>
		    <td align="right" nowrap="true">
		    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		    </td>
		  </tr>
		</table>
		 -->
   	
		   </div>
		 </div>
		   </div>
	   </div>
	   <div class="clear"></div>
	 </div>
	</div>
  
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  
 <?php echo '
	<script type="text/javascript">
	var curPage = 1; //当前页码
	var total,pageSize,totalPage;
	//获取数据
	function getData(page){ 
		$.ajax({
			type: \'POST\',
			url: \'member_myaccount.php?act=recharge_query_json\',
			data: {\'pageNum\':page-1},
			dataType:\'json\',
			beforeSend:function(){
				$("#list ul").append("<li id=\'loading\'>loading...</li>");
			},
			success:function(json){
				$("#table_recharge").empty();
				$("#list ul").empty();
				total = json.total; //总记录数
				pageSize = json.pageSize; //每页显示条数
				curPage = page; //当前页
				totalPage = json.totalPage; //总页数

				var list = json.list;
				var tr=\'<tr><th>记录号</th><th>操作时间</th><th>确认时间</th><th>类型</th><th>金额</th><th>状态</th><th>操作</th></tr>\';
				$.each(list,function(index,array){ //遍历json数据列
					tr += "<tr>";
					tr += "<td>"+array[\'id\']+"</td>";
					tr += "<td>"+array[\'add_time\']+"</td>";
					tr += "<td>"+array[\'paid_time\']+"</td>";
					tr += "<td>"+array[\'process_type\']+"</td>";
					tr += "<td>"+array[\'amount\']+"</td>";
					tr += "<td>"+array[\'is_paid\']+"</td>";
					tr += \'<td><a href="member_myaccount.php?act=member_viewaccount&id=\'+array[\'id\']+\'"  title="{$lang.view}">\'
				     	+\'<img src="themes/default/images/icon_detail.png" border="0" height="16" width="16" />\'
				     	+\'</a><a href="javascript:;" onclick="removeData(\'+array[\'id\']+\',\'+page+\')" title="{$lang.remove}">\'
						+\'<img src="themes/default/images/icon_delete.png" border="0" height="16" width="16" />\'
						+\'</a></td>\';
					tr += "</tr>";
				});

				$("#table_recharge").append(tr);
			},
			complete:function(){ //生成分页条
				getPageBar();
			},
			error:function(){
				//alert("数据加载失败");
			}
		});
	}

	//获取分页条
	function getPageBar(){
		//页码大于最大页数
		if(curPage>totalPage) curPage=totalPage;
		//页码小于1
		if(curPage<1) curPage=1;
		pageStr = "<span>共"+total+"条</span><span>"+curPage+"/"+totalPage+"</span>";
		
		//如果是第一页
		if(curPage==1){
			pageStr += "<span>首页</span><span>上一页</span>";
		}else{
			pageStr += "<span><a href=\'javascript:void(0)\' rel=\'1\'>首页</a></span><span><a href=\'javascript:void(0)\' rel=\'"+(curPage-1)+"\'>上一页</a></span>";
		}
		
		//如果是最后页
		if(curPage>=totalPage){
			pageStr += "<span>下一页</span><span>尾页</span>";
		}else{
			pageStr += "<span><a href=\'javascript:void(0)\' rel=\'"+(parseInt(curPage)+1)+"\'>下一页</a></span><span><a href=\'javascript:void(0)\' rel=\'"+totalPage+"\'>尾页</a></span>";
		}
			
		$("#pagecount").html(pageStr);
	}

	$(function(){
		getData(1);
		$("#pagecount span a").on(\'click\',function(e){
		    e.preventDefault();
			var rel = $(this).attr("rel");
			if(rel){
				getData(rel);
			}
		});
		
		var $lis=$(".checked li");
		$lis.click(function(){
			$(this).addClass("current").siblings().removeClass("current");
			var index=$lis.index(this);
			$("#contents div").eq(index).show().siblings().hide();
		})
	})
	
	
	function removeData(id,page){
		if (confirm(\'确认删除吗？删除后数据无法恢复！\')==false){ 
			return;
		}
		$.ajax({
			type: \'POST\',
			url: \'member_myaccount.php?act=remove_recharge\',
			data: {\'pageNum\':(page-1),\'id\':id},
			dataType:\'json\',
			beforeSend:function(){
				$("#list ul").append("<li id=\'loading\'>loading...</li>");
			},
			success:function(json){
				$("#table_recharge").empty();
				$("#list ul").empty();
				total = json.total; //总记录数
				pageSize = json.pageSize; //每页显示条数
				curPage = page; //当前页
				totalPage = json.totalPage; //总页数

				var list = json.list;
				var tr=\'<tr><th>记录号</th><th>操作时间</th><th>确认时间</th><th>类型</th><th>金额</th><th>状态</th><th>操作</th></tr>\';
				$.each(list,function(index,array){ //遍历json数据列
					tr += "<tr>";
					tr += "<td>"+array[\'id\']+"</td>";
					tr += "<td>"+array[\'add_time\']+"</td>";
					tr += "<td>"+array[\'paid_time\']+"</td>";
					tr += "<td>"+array[\'process_type\']+"</td>";
					tr += "<td>"+array[\'amount\']+"</td>";
					tr += "<td>"+array[\'is_paid\']+"</td>";
					tr += \'<td><a href="member_myaccount.php?act=member_viewaccount&id=\'+array[\'id\']+\'"  title="{$lang.view}">\'
				     	+\'<img src="themes/default/images/icon_detail.png" border="0" height="16" width="16" />\'
				     	+\'</a><a href="javascript:;" onclick="removeData(\'+array[\'id\']+\',\'+page+\')" title="{$lang.remove}">\'
						+\'<img src="themes/default/images/icon_delete.png" border="0" height="16" width="16" />\'
						+\'</a></td>\';
					tr += "</tr>";
				});

				$("#table_recharge").append(tr);
			},
			complete:function(){ //生成分页条
				getPageBar();
			},
			error:function(){
				//alert("数据加载失败");
			}
		});
	}
	</script>
 '; ?>

 </body>
 </html>