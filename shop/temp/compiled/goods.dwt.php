<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="UTSOFT v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>
<script src="themes/meilele/js/jq.js"></script>
<script src="themes/meilele/js/jquery.json.min.js"></script>

<link rel="stylesheet" href="themes/meilele/css/mll_common.min.css?1122" />
<link href="themes/meilele/css/goods_wide.min.css?1112fv" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,utils.js')); ?>
<script src="themes/meilele/js/common.js"></script>
<link href="themes/meilele/css/magiczoom.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="themes/meilele/js//mzp-packed-me.js"></script>
</head>
<body>
<script type="text/javascript">(function(){var screenWidth=window.screen.width;if(screenWidth>=1280){document.body.className="root_body";window.LOAD=true;}else{window.LOAD=false;}})()</script>

<?php echo $this->fetch('library/page_header.lbi'); ?> 
<?php $_from = get_advlist_by_id(15); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
<div class="w mt10 mb10 top_banner" style="height:60px;overflow:hidden;" id="JS_banner">
  <div id="JS_banner_in">
  <a href="<?php echo $this->_var['ad']['url']; ?>" title="<?php echo $this->_var['ad']['name']; ?>" target="_blank" style="display:block;height:60px;background:url(<?php echo $this->_var['ad']['image']; ?>) center 0 no-repeat;"><img src="themes/meilele/images/blank.gif" style="background:none" height="60" width="100%"></a>
  </div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<div id="JS_nav_guide" class="nav_guide w"><?php echo $this->fetch('library/ur_here.lbi'); ?></div>

<div class="goods_title w" id="JS_goods_title_34742">
  <h1 class="goods_name"><span id="JS_attr_title_name"><?php echo $this->_var['goods']['goods_style_name']; ?></span> <span class="goods_sn" id="JS_attr_title_sn">编号：<?php echo $this->_var['goods']['goods_sn']; ?></span> <strong id="JS_attr_title_event" class="red f14"></strong> </span> </h1>
  <h2 class="goods_sub_title red" id="JS_attr_sub_title"> <?php echo $this->_var['goods']['goods_brief']; ?> </h2>
</div>
<div class="w clearfix">
  <div class="big_img Left">
    <div id="JS_view_current_big_img">
      <div class="img">
        <div id="JS_attr_limit_buy" class="img_tags limit_buy" style="display:none"></div>
       
        <a id="Zoomer" class="MagicZoomPlus" rel="" title="点击查看<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>图片"  href="<?php echo $this->_var['pictures']['0']['img_url']; ?>" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;"> <img src="<?php echo $this->_var['pictures']['0']['img_url']; ?>" width="565" height="374" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" /> </a></div>
      <a class="float_view" href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;" title="点击查看<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>图片"></a> </div>
	  <script language="javascript">
	  var screenWidth=window.screen.width;
	  if(screenWidth>=1280){
	  		$('#Zoomer').attr('rel', 'selectors-effect:false;zoom-fade:true;background-opacity:70;zoom-width:620;zoom-height:372;caption-source:img:title;thumb-change:mouseover');
		}else{
			$('#Zoomer').attr('rel', 'selectors-effect:false;zoom-fade:true;background-opacity:70;zoom-width:410;zoom-height:372;caption-source:img:title;thumb-change:mouseover');
		}
	  
	  </script>
	  <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
    <div class="extra clearfix">
      <div id="bdshare" class="Left bdshare_t bds_tools get-codes-bdshare">
        <div class="bds_more extra_field share_bd"> <span class="extra_icon"></span><span class="extra_text">分享</span> </div>
      </div>
      <div id="JS_collect_2" class="Left extra_field collect" onClick="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"> <span class="extra_icon"></span><span class="extra_text co red">收藏</span><span class="extra_text cd">已收藏</span> </div>

      <span class="gray Right share_text">付款方式：<a class="pays gray" target="_blank" title="付款方式">支付宝|网银|刷卡</a></span>
     
    </div>
  </div>
  <div id="JS_panel_34742" class="panel Right current">
    <div class="sale_price">
      <p id="JS_panel_row_price_34742" class="gray"><span id="JS_panel_shop_price_34742" class="">市场价：<span class="yen"><del><?php echo $this->_var['goods']['market_price']; ?></del></span>&emsp;</span></p>
      <div class="p_left"><span class="red" id="JS_panel_price_type_34742">本站价：</span><span id="JS_panel_show_price_34742" class="red f24 yen bold" <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>style="font-size:12px; text-decoration:line-through"<?php endif; ?>><?php echo $this->_var['goods']['shop_price_formated']; ?></span>&emsp;&emsp;
        
      </div>
	  <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
	  <div class="p_left"><span class="red" id="JS_panel_price_type_34742">促销价：</span><span id="JS_panel_show_price_34742" class="red f24 yen bold"><?php echo $this->_var['goods']['promote_price']; ?></span>&emsp;&emsp;
        
      </div>
	  <?php endif; ?>
    </div>
    <div class="infos clearfix">
      <ul>
	  <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
	  <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
        <li class="gray" style="" id="JS_panel_activity_21994">活 动：<span class="active"><span id="JS_panel_active_type_21994" class="active_type">限时促销</span><span class="time none" id="JS_panel_time_21994">剩余时间：<font class="f4" id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></font></span></span></li>
	  <?php endif; ?>	
	  <?php if ($this->_var['goods']['is_real'] == 1): ?>
		<?php if ($this->_var['regions']): ?>
	  <li class="clearfix" id="JS_express_nav_34742">
	  <div class="ps_litext gray">配送至：</div>
	  <?php $_from = $this->_var['regions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
	  <?php if ($this->_var['key'] == 0): ?>
	  <div class="nav1" id="JS_peisong_text_address_34742"><span id="JS_peisong_address_nav_34742"><?php echo $this->_var['value']['region_name']; ?></span><span class="icon"></span></div>
	  <div class="spot_mix" id="JS_stock_div_34742"> <span style="color:#FF0000" id="JS_stock_info_34742"><?php $_from = $this->_var['value']['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?><?php echo $this->_var['shipping']['shipping_name']; ?>:<?php if ($this->_var['goods']['is_shipping']): ?>免运费 <?php else: ?><?php echo $this->_var['shipping']['shipping_price']; ?>元 <?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></span> </div>
	  <?php endif; ?>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	  <div class="ps_main" id="JS_express_type_34742">
		<div class="select_area clearfix">
		  <div class="container none" id="JS_peisong_address_34742" onMouseOver="GL[34742].showAdressBox()" onMouseOut="GL[34742].hideAddress();"> <a style="position:absolute;display:block;width: 16px;height: 16px;top:0;right: 0; background:#787878;color: #fff;line-height: 16px;text-align: center;" href="javascript: void(0);" onClick="GL[34742].hideAddress();return false;">✕</a>
			<div class="d_list">
			  <div class="province_name" id="JS_transfer_province_34742"> 
			  <?php $_from = $this->_var['regions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['value']):
?>
				<a href="javascript:;" class="province_list" onclick="show_shipping('<?php echo $this->_var['value']['region_name']; ?>','<?php $_from = $this->_var['value']['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?><?php echo $this->_var['shipping']['shipping_name']; ?>:<?php if ($this->_var['goods']['is_shipping']): ?>免运费 <?php else: ?><?php echo $this->_var['shipping']['shipping_price']; ?>元 <?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>')"><?php echo $this->_var['value']['region_name']; ?></a>
			 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</li>
	<script>
		function show_shipping(name,price)
		{
		document.getElementById("JS_peisong_address_nav_34742").innerHTML = name;
		document.getElementById("JS_stock_info_34742").innerHTML = price;
		}

		</script>
<?php endif; ?>
<?php endif; ?>
	  
        <li class="gray">品&emsp;牌：<a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></li>
        <li class="gray">已&emsp;售：<a href="javascript:void(0);" id="JS_boughts_notes_34742" class="red"><span id="JS_boughts_number"><?php $_from = get_goods_ex($GLOBALS[smarty]->_var[goods][goods_id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_data');$this->_foreach['get_goods_ex'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_goods_ex']['total'] > 0):
    foreach ($_from AS $this->_var['goods_data']):
        $this->_foreach['get_goods_ex']['iteration']++;
?><?php if ($this->_foreach['get_goods_ex']['iteration'] == 1): ?><?php echo $this->_var['goods_data']['total_sells']; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></span>件</a>&ensp;			
          用户评分：<span class="pf pf_<?php echo $this->_var['goods']['comment_rank']; ?>"></span>（<a href="javascript:void(0);" id="JS_comment_scroll_34742" class="gray">已有<span id="JS_comment_num" class="JS_comment_num">0</span>人评价</a>）</li>
        <li class="gray">服&emsp;务：由 <span class="red">铭东商城</span> 发货并提供售后服务。</li>
        <li id="JS_panel_gift_34742" class="gray none"></li>
        <li class="tips" id="JS_panel_tips_nav_34742">
          
          <div class="tips_i_box"><a id="JS_expr_url" class="tip_i first" target="_blank">到店体验</a><span class="line">|</span><a class="tip_i" target="_blank">45天退换</a><span class="line">|</span><a class="tip_i" target="_blank">质保三年</a><span class="line">|</span><a class="tip_i" target="_blank">价格保护</a></div>
          <a href="javascript:void(0);" class="goods_kefu"></a></li>
        
      </ul>
    </div>
	<script language="javascript">
	  function changeAtt(t) {
		var obj = document.getElementById('spec_value_'+t.getAttribute("name"));
		if (obj){
			obj.checked='checked';
		}
		
		for (var i = 0; i<t.parentNode.childNodes.length;i++) {
				if (t.parentNode.childNodes[i].className == 'current') {
					t.parentNode.childNodes[i].className = '';
				}
			}
		t.className = "current";
		changePrice();
		}
	  </script>
	<form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
    <div id="JS_join_list" class="choose">
	
      <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
	  <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                      <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
      <dl class="clearfix">
        <dt><?php echo $this->_var['spec']['name']; ?>：</dt>
        <dd>
		<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');$this->_foreach['spec_values'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spec_values']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
        $this->_foreach['spec_values']['iteration']++;
?>
		<a class="<?php if (($this->_foreach['spec_values']['iteration'] - 1) == 0): ?>current<?php endif; ?>" onclick="changeAtt(this)" href="javascript:;" target="_self"  name="<?php echo $this->_var['value']['id']; ?>" title="<?php echo $this->_var['value']['label']; ?>"><?php echo $this->_var['value']['label']; ?></a>
		<input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if (($this->_foreach['spec_values']['iteration'] - 1) == 0): ?>checked<?php endif; ?> />  
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		
		</dd>
      </dl>
	  <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
				  <?php endif; ?>
			      <?php endif; ?> 
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      	
      
      <dl class="clearfix">
        <dt>数&emsp;量：</dt>
        <dd>
          <input class="number" id="JS_goods_number_34742" value="1" name="number" onblur="changePrice();"/>
          <strong class="number_panel"><a href="javascript:;" id="JS_goods_number_add_34742"></a><a href="javascript:;" id="JS_goods_number_del_34742"></a></strong> 件 <strong style="margin-left:20px"><?php echo $this->_var['lang']['amount']; ?>：</strong><font id="ECS_GOODS_AMOUNT" class="red f24 yen bold"></font></dd>
      </dl>
      <div class="buttons"><a class="buy"  href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" title=""></a>
      </div>
    </div>
	</form>
    
  </div>
</div>
<div class="w clearfix group_area mt10">
<?php if ($this->_var['package_goods_list'] || $this->_var['fittings']): ?>
<div id="JS_goods_group_left" class="Left group_l">
<?php if ($this->_var['package_goods_list']): ?>
  <div id="JS_goods_order_similar" class="similar mt10 none">
    <h2 class="group_title">人气推荐</h2>
    <ul id="JS_similar_order" class="tab_body" style="height:235px">
	<?php $_from = get_cat_best_goods_4($GLOBALS[smarty]->_var[goods][cat_id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['best_goods']['iteration']++;
?>
      <li <?php if ($this->_foreach['best_goods']['iteration'] == 1): ?>class="first"<?php endif; ?>>
        <div class="price yen red bold"><?php if ($this->_var['goods_item']['promote_price'] != ""): ?><?php echo $this->_var['goods_item']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_item']['shop_price']; ?><?php endif; ?></div>
        <h4><em><?php echo $this->_foreach['best_goods']['iteration']; ?></em><a href="<?php echo $this->_var['goods_item']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" class="JS_similar_ga"><?php echo sub_str($this->_var['goods_item']['short_name'],8); ?></a></h4>
        <div class="goods_ex"> <a href="<?php echo $this->_var['goods_item']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" class="JS_similar_ga"><img src="themes/meilele/images/blank.gif" data-src="<?php echo $this->_var['goods_item']['thumb']; ?>" width="180" height="118"  alt="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>"/></a>
          
         
        </div>
      </li>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
    </ul>
  </div>
 <?php endif; ?> 
  <div id="JS_goods_rel_cat" class="rel_cat mt10 none">
    <h2 class="group_title">相关分类</h2>
    <div id="JS_rel_cat" class="tab_body"><?php $_from = get_categories_tree($GLOBALS[smarty]->_var[goods][cat_id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['get_categories_tree'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_categories_tree']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['get_categories_tree']['iteration']++;
?><a href="<?php echo $this->_var['cat']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['cat']['name']); ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
  </div>
  
</div>
<?php endif; ?>

<div id="JS_goods_group_right" class="Right group_r">
<?php if ($this->_var['package_goods_list']): ?>
<div class="extra_area mt10">
  <div class="extra_title clearfix">
    <ul class="extra_abs Left" id="JS_tz_nav">
	<?php $_from = $this->_var['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods');$this->_foreach['package_goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['package_goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['package_goods']):
        $this->_foreach['package_goods_list']['iteration']++;
?>
      <li data-index="<?php echo $this->_foreach['package_goods_list']['iteration']; ?>" <?php if ($this->_foreach['package_goods_list']['iteration'] < 2): ?>data-init="1" class="current"<?php endif; ?>>优惠套装<?php echo $this->_foreach['package_goods_list']['iteration']; ?></li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
    </ul>
    <a href="activity.php" target="_blank" class="Right more">更多套装&gt;&gt;</a> </div>
  <div id="JS_tz_body" class="tz_body">
  <?php $_from = $this->_var['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods');$this->_foreach['package_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['package_list']['total'] > 0):
    foreach ($_from AS $this->_var['package_goods']):
        $this->_foreach['package_list']['iteration']++;
?>
    <div id="JS_tz_s<?php echo $this->_foreach['package_list']['iteration']; ?>_list" class="peitao clearfix <?php if ($this->_foreach['package_list']['iteration'] > 1): ?>none<?php endif; ?>">
      <div class="main_goods Left">
        <div class="img"><img id="JS_tz_main_img" src="<?php echo $this->_var['goods']['goods_img']; ?>" width="148" height="96" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" /><span class="add"></span>
          <div class="info"><span id="JS_peitao_main_name"><?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></span><br />
            <span class="gray" id="JS_peitao_price_type">本站价：</span><span class="red yen" id="JS_peitao_show_price"><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?><?php endif; ?></span><br/>
            </div>
        </div>
      </div>
      <div class="tz_list Right clearfix">
        <div class="tz_detail_r Right clearfix">
          <div class="Left"> <span class="equal"></span> </div>
          <div class="Right tz_buy">
            <h4><a target="_blank" title="<?php echo $this->_var['package_goods']['act_name']; ?>"><?php echo $this->_var['package_goods']['act_name']; ?></a></h4>
            <p class="gray"><span class="red">套装价：</span><span class="yen red bold f16"><?php echo $this->_var['package_goods']['package_price']; ?></span> <br/>
              总价：<del class="yen"><?php echo $this->_var['package_goods']['subtotal']; ?></del><br/>
              <span class="tz_save_icon"></span><span class="yen red bold"><?php echo $this->_var['package_goods']['saving']; ?></span> </p>
            <a href="javascript:addPackageToCart(<?php echo $this->_var['package_goods']['act_id']; ?>)" class="tz_button"></a> </div>
        </div>
        <div class="extra_goods Right">
          <div class="stage">
            <table id="JS_tz_s<?php echo $this->_foreach['package_list']['iteration']; ?>_table">
              <tr>
			  <?php $_from = $this->_var['package_goods']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_list');$this->_foreach['package_goods_goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['package_goods_goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods_list']):
        $this->_foreach['package_goods_goods_list']['iteration']++;
?>
                <td><div class="list">
                    <div class="img_box"><a href="goods.php?id=<?php echo $this->_var['goods_list']['goods_id']; ?>" title="<?php echo $this->_var['goods_list']['goods_name']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_list']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_list']['goods_name']; ?>" width="148" height="96" /></a></div>
                    <div class="info gray">
                      <p><a href="goods.php?id=<?php echo $this->_var['goods_list']['goods_id']; ?>" class="goods_name_x1" title="<?php echo $this->_var['goods_list']['goods_name']; ?>" target="_blank"><?php echo $this->_var['goods_list']['goods_name']; ?></a></p>
                      <p>本站价：<span class="red yen"><?php echo $this->_var['goods_list']['rank_price']; ?></span></p>
                     
                    </div>
                  </div></td>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </tr>
            </table>
          </div>
          <div class="nav"> <a id="JS_tz_s<?php echo $this->_foreach['package_list']['iteration']; ?>_left" class="toleft"></a> <a id="JS_tz_s<?php echo $this->_foreach['package_list']['iteration']; ?>_right" class="toright"></a> </div>
        </div>
      </div>
    </div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
	
    
	
	
	
  </div>
</div>
<?php endif; ?>
<?php if ($this->_var['fittings']): ?>
<div class="extra_area mt10">
<div class="extra_title">
  <ul id="JS_extra_change" class="extra_abs">
    <li id="JS_extra_pt" class="current">推荐搭配</li>
   
  </ul>
</div>
<div id="JS_extra_pt_body" style="height:294px">

  <div class="peitao pt_main clearfix peitao_has_sky">
    <div class="main_goods Left">
      <div class="img"><img id="JS_tz_main_img" src="<?php echo $this->_var['goods']['goods_img']; ?>" width="148" height="96" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" /></div>
      <div class="info">
        <p title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" id="JS_peitao_main_name" style="width:148px;height: 1.8em;overflow: hidden;"><?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></p>
        <strong class="red yen" id="JS_peitao_show_price"><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?><?php endif; ?></strong>&emsp;</div>
		<?php $_from = get_goods_ex($GLOBALS[smarty]->_var[goods][goods_id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_data');$this->_foreach['get_goods_ex'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_goods_ex']['total'] > 0):
    foreach ($_from AS $this->_var['goods_data']):
        $this->_foreach['get_goods_ex']['iteration']++;
?>
			<?php if ($this->_foreach['get_goods_ex']['iteration'] == 1): ?>
			<input type="checkbox" checked=checked autocomplete="off" goods_id="<?php echo $this->_var['goods']['goods_id']; ?>" price1="<?php echo $this->_var['goods_data']['shop_price']; ?>" price2="<?php echo $this->_var['goods_data']['market_price']; ?>"  style="display:none" class="chk_fit">
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <div class="Left"><span class="add"></span></div>
    <div class="extra_goods Right">
      <div id="JS_pt_stage" class="stage" data-first="4">
        <table id="JS_scroll_table">
          <tr>
		  <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['fittings'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fittings']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['fittings']['iteration']++;
?>
            <td data-index="0" class="ptItem_0 "><div class="list">
                <div class="img_box"><a href="<?php echo $this->_var['goods_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" target="_blank"><img src="themes/meilele/images/blank.gif" data-src="<?php echo $this->_var['goods_item']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" width="148" height="96" /></a></div>
                <div class="info">
                  <p><a href="<?php echo $this->_var['goods_item']['url']; ?>" class="goods_name_x1" title="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods_item']['short_name']); ?></a></p>
                  <p class="gray"><span class="red yen bold"><?php echo $this->_var['goods_item']['fittings_price']; ?></span> &emsp;
                  <p class="gray" style="margin-top:5px;">
                    <?php $_from = get_goods_ex($GLOBALS[smarty]->_var[goods_item][goods_id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_data');$this->_foreach['get_goods_ex'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_goods_ex']['total'] > 0):
    foreach ($_from AS $this->_var['goods_data']):
        $this->_foreach['get_goods_ex']['iteration']++;
?><?php if ($this->_foreach['get_goods_ex']['iteration'] == 1): ?><input type="checkbox" checked="checked" autocomplete="off" goods_id="<?php echo $this->_var['goods_item']['goods_id']; ?>" onclick="sum_price()" price1="<?php echo $this->_var['goods_data']['shop_price']; ?>" price2="<?php echo $this->_var['goods_data']['market_price']; ?>" class="chk_fit"><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                   </p>
                </div>
				
              </div></td>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
            
            
          </tr>
        </table>
      </div>
      <div class="nav"> <a id="JS_peitao_left" class="toleft"></a> <a id="JS_peitao_right" class="toright"></a> </div>
    </div>
  </div>
  <div class="pt_result clearfix">
    <div class="arrow"></div>
    <div class="pt_result_l Left">
	<p class="tips"><b>省了<font  id="fit_price3" class="red">0</font>元</b></p>
	<p class="price_m">原  价：￥<span style="text-decoration:line-through" id="fit_price2">0.00</span>元
	<span class="bold" style="margin-left:30px">总价：￥<strong class="red yen f16" id="fit_price1">0.00</strong>元</span>
	</p>
     </div>
    <div class="pt_result_r Right"><a href="javascript:;" class="g2_btn1" onclick="addFittingsToCart()"></a></div>
  </div>
</div>
<textarea id="JS_maiguo_textarea" class="none">
		<div class="stage">
				<table id="JS_maiguo_table"><tr>
				<?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');$this->_foreach['bought_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bought_goods']['total'] > 0):
    foreach ($_from AS $this->_var['bought_goods_data']):
        $this->_foreach['bought_goods']['iteration']++;
?>
				<?php if ($this->_foreach['bought_goods']['iteration'] < 5): ?>
										<td>
						<div id="JS_maiguo_box_<?php echo ($this->_foreach['bought_goods']['iteration'] - 1); ?>" class="maiguo_box">
							<div class="img"><a href="<?php echo $this->_var['bought_goods_data']['url']; ?>" target="_blank" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>"><img width="160" height="106" src="themes/meilele/images/blank.gif" data-src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" /></a></div>
							<div class="info c">
								<a href="<?php echo $this->_var['bought_goods_data']['url']; ?>" class="goods_name_x1" target="_blank" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>"><?php echo $this->_var['bought_goods_data']['short_name']; ?></a>
								<p class="gray">本站价：<strong class="red yen"><?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?><?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?><?php else: ?><?php echo $this->_var['bought_goods_data']['shop_price']; ?><?php endif; ?></strong></p>
								<a id="JS_maiguo_goods_0" href="javascript:void(0);" onclick="javascript:addToCart(<?php echo $this->_var['bought_goods_data']['goods_id']; ?>)" class="add_cart c bold">加入购物车</a>
							</div>
						</div>
					</td>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					
									</tr></table>
			</div>
					</div>
	</textarea>
<script language="javascript">
	var fittingsArr = new Array(); 
	var fittingsArrLen = 0;
	var addCartCount = 0;
	function sum_price(){
	    fittingsArr.length=0; 
		var sum_price1 = 0.00;
		var sum_price2 = 0.00;
		$('.chk_fit').each(
			function(){
			    var chk = this.checked;
				if (chk){
					var price1 = $(this).attr('price1');
					var price2 = $(this).attr('price2');
					sum_price1 += price1*1;
					sum_price2 += price2*1;
					
					fittingsArr.push($(this).attr('goods_id'));
				}
			}
		);
		$('#fit_price1').html(parseInt(sum_price1));
		$('#fit_price2').html(parseInt(sum_price2));
		$('#fit_price3').html(parseInt(sum_price2 - sum_price1));
	}
	sum_price();
	function addFittingsToCart(){
	      fittingsArrLen = fittingsArr.length;
		  if (fittingsArrLen == 1){
		  	alert('请选择套餐组合产品!');
			return;
		  }
		  for (var i = 0; i < fittingsArr.length; i ++){

			  var spec_arr     = new Array();
			  var number       = 1;
			  var quick		   = 0;
  
			  var goods        = new Object();
			  var formBuy      = document.forms['ECS_FORMBUY'];
			  goods.goods_id = fittingsArr[i];
			  goods.number   = 1;
			  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
			  
			  // 检查是否有商品规格 
			  if (i == 0 && formBuy)
			  {
				spec_arr = getSelectedAttributes(formBuy);
			
				if (formBuy.elements['number'])
				{
				  number = formBuy.elements['number'].value;
				}
			
				quick = 1;
			  }
			  
			  goods.spec     = spec_arr;
			  goods.number   = number;
			  goods.quick    = quick;
			  
			  $.ajax({
					type:"POST",
					url:"flow.php?step=add_to_cart",
					cache:false,
					dataType:'json',     //接受数据格式
					data:'goods=' + $.toJSON(goods),
					success:addFittingsToCartResponse
				});
			  
			  
		  }
		  
	}
	function addFittingsToCartResponse(result)
	{
	  if (result.error > 0)
	  {
		
	  }
	  else
	  {
			addCartCount = addCartCount + 1;
			if (fittingsArrLen == addCartCount){
				$.addToCart(result.goods_number, result.goods_price);
				$('#cartInfo_number').html(result.goods_number);
				
				$.ajax({
							type:"POST",
							url:"flow.php?step=get_cart_list",
							cache:false,
							dataType:'json',     //接受数据格式
							data:'',
							success:function(result){
								$('#JS_header_cart_list').html(result.message);
							}
						});
			}
	  }
	}
	</script>
</div>
<?php endif; ?>



</div>
</div>

<div class="w clearfix mt10">
  <div class="main_left Left">
    <h2 class="group_title">大家还买了</h2>
    <ul class="tab_body">
	<?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');$this->_foreach['bought_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bought_goods']['total'] > 0):
    foreach ($_from AS $this->_var['bought_goods_data']):
        $this->_foreach['bought_goods']['iteration']++;
?>
				<?php if ($this->_foreach['bought_goods']['iteration'] < 5): ?>
      <li <?php if ($this->_foreach['bought_goods']['iteration'] == 1): ?>class="first"<?php endif; ?>>
        <div class="img"> <a href="<?php echo $this->_var['bought_goods_data']['url']; ?>" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" target="_blank"> <img src="themes/meilele/images/blank.gif" data-src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>" width="178" height="116" alt="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" /> </a> </div>
        <div class="info c"> <a href="<?php echo $this->_var['bought_goods_data']['url']; ?>" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" target="_blank"><?php echo $this->_var['bought_goods_data']['short_name']; ?></a>
          <p><span>本站价：</span><span class="yen red"><?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?><?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?><?php else: ?><?php echo $this->_var['bought_goods_data']['shop_price']; ?><?php endif; ?></span></p>
        </div>
      </li>
	  <?php endif; ?>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
    </ul>
    <h2 class="group_title mt10">大家还浏览了</h2>
    <ul class="tab_body">
	<?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
      <li class="first">
        <div class="img"> <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" target="_blank"> <img src="themes/meilele/images/blank.gif" data-src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" width="178" height="116" alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" /> </a> </div>
        <div class="info c"> <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" target="_blank"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a>
          <p><span>本站价：</span><span class="yen red"><?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?><?php else: ?><?php echo $this->_var['releated_goods_data']['shop_price']; ?><?php endif; ?></span></p>
        </div>
      </li>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </ul>
  </div>
  <div class="main_right Right">
    <div class="navs">
      <div style="height:0px;position:absolute;" id="JS_float_navs_position"></div>
      <div class="float_navs" id="JS_float_navs"><a class="current first" href="javascript:;" id="JS_Tab_nav_xinxi">商品详情</a><a href="javascript:;" id="JS_Tab_nav_guige">规格参数</a><a href="javascript:;" id="JS_Tab_nav_expr" style="display:none;">体验馆<span id="JS_count_expr" class="gray"></span></a><a href="javascript:;" id="JS_Tab_nav_pingjia">客户评价<span id="JS_count_pingjia" class="gray JS_comment_num"></span></a><a href="javascript:;" id="JS_Tab_nav_sheji" style="display:none">设计搭配</a><a href="javascript:;" id="JS_Tab_nav_jilu">购买记录<span id="JS_count_jilu" class="gray"><?php $_from = get_goods_ex($GLOBALS[smarty]->_var[goods][goods_id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_data');$this->_foreach['get_goods_ex'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_goods_ex']['total'] > 0):
    foreach ($_from AS $this->_var['goods_data']):
        $this->_foreach['get_goods_ex']['iteration']++;
?><?php if ($this->_foreach['get_goods_ex']['iteration'] == 1): ?><?php echo $this->_var['goods_data']['total_sells']; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></span></a><a href="javascript:;" id="JS_Tab_nav_zixun" style="display:none;">商品咨询<span id="JS_count_zixun" class="gray"></span></a><a href="javascript:;" id="JS_Tab_nav_shouhou">售后服务</a><a href="javascript:;" id="JS_Tab_nav_wenti">常见问题</a><a href="javascript:;" id="JS_Tab_nav_xuzhi" style="display:none;">购买须知</a><span href="javascript:void(0);" id="JS_quickly_buy" class="quickly_buy" onClick="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"></span></div>
    </div>
    <div class="xinxi clearfix mt10" id="JS_Tab_body_xinxi">
      
      <div class="tupian mt10">
        <?php echo $this->_var['goods']['goods_desc']; ?>
        <div class="mt10"></div>
        <div class="img_point mt10">
          <div class="tab_title"><span class="icon"></span>
            <h2 class="f16">购物温馨提示</h2>
          </div>
          <div class="point_c">
            <dl>
              <dt class="c f14 yen">01</dt>
              <dd><span class="f14 bold">物流运输</span>：当您选择了物流运输，货物是从发货地送到您所在城市的物流点，<span class="red">需要您到指定的物流点自提</span>，不会送到具体的行政区。<span class="red">物流点提货时请注意携带收货人本人身份证原件</span>，如需他人代收请告知具体签收注意事项。</dd>
            </dl>
            <dl>
              <dt class="c f14 yen">02</dt>
              <dd><span class="f14 bold">体验馆配送安装</span>：当您选择了体验馆配送安装，体验馆安排物流运输、送货、专业安装整个流程，可通过电梯上楼的免上楼费（<span class="red">免3层及以下楼层的费用</span>）；没有电梯或大件商品进不了电梯<span class="red">需要人力搬运，需加收每件每层<span class="bold">10元 </span>(从第4层算起) 的搬运费</span>。请您就收货地址的特殊情况（垄断搬运服务、电梯或楼道太小、房门太窄、施工故障、道路修建、小区不支持货车进入或停留等）事先与客服沟通说明，以便后期送货服务的顺利进行。</dd>
            </dl>
            <dl>
              <dt class="c f14 yen">03</dt>
              <dd><span class="f14 bold">快递运输</span>：由快递公司送货到您所留的收货地址楼下。请您务必在签收前当场拆包检查，如有购买多件商品请一定拆开清点件数，拆包后<span class="red">如发现商品损坏请当场拒收并及时与我们联系</span>，商品货损与总件数以您签收为准，如果条件允许请您拍照取证。</dd>
            </dl>
            <dl>
              <dt class="c f14 yen">04</dt>
              <dd><span class="f14 bold">第三方配送（快递配送到楼下）</span>：全国范围内均可快递配送第三方商家商品。</dd>
            </dl>
            <div class="point_m c"> <img src="themes/meilele/images/blank.gif" data-src="themes/meilele/images/img_point.png" alt="购物温馨提示" tiltle="购物温馨提示" width="654" height="404" /> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="guige mt10" id="JS_Tab_body_guige">
      <div class="tab_title"> <span class="icon"></span>
        <h2>规格参数</h2>
      </div>
      <table class="norm_info mt10">
        <tr>
          <th colspan="2" class="norm_title f14">产品参数</th>
        </tr>
		<?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
		<?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
        <tr>
          <th class="r norm_left"><?php echo htmlspecialchars($this->_var['property']['name']); ?></th>
          <td><?php echo $this->_var['property']['value']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
      </table>
    </div>
    <div class="expr mt10" id="JS_Tab_body_expr"> </div>
    <div class="sheji mt10 heihei" id="JS_Tab_body_sheji"> </div>
    <div class="jilu mt10" id="JS_Tab_body_jilu">
      <div class="tab_title"> <span class="icon"></span>
        <h2>购买记录</h2>
      </div>
<div id="ECS_BOUGHT"><?php 
$k = array (
  'name' => 'bought_notes',
  'id' => $this->_var['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
    </div>
    <div class="shouhou mt10" id="JS_Tab_body_shouhou">
      <div class="tab_title"> <span class="icon"></span>
        <h2>售后服务</h2>
      </div>
      <div class="tab_body">
        <div class="list clearfix"> <span class="icon Left"></span>
          <p class="Right"> <strong>退货和流程：</strong><br/>
            <a class="red" target="_blank"><u>45 天无理由退货</u></a>，因质量问题退换，商家承担邮费；非质量问题退换，仅限正价商品，买家承担邮费。影响二次销售的产品不能退换货。定制类产品非质量问题不能退换货。已明确注明“不予退换”的商品不能退换货。</p>
        </div>
        <div class="list list2 clearfix"> <span class="icon Left"></span>
          <p class="Right"> <strong>商品保修：</strong><br/>
            家具类商品的保修期限为<span class="red">三年</span>，建材类商品保修期限为<span class="red">一年</span>。在我们网站购买商品的客户均将自动成为我们的VIP客户，我们承诺为您的家具提供终身维护。 </p>
        </div>
        <div class="list list3 clearfix"> <span class="icon Left"></span>
          <p class="Right"> <strong>施工指导：</strong><br/>
            客户拿到我们的装修方案后，我们有专人可以提供方案的施工指导服务（电话或网络）。 </p>
        </div>
      </div>
    </div>
    <div class="xuzhi mt10" id="JS_Tab_body_xuzhi"> </div>
    <a name="pj"></a>
    <div class="pingjia mt10" id="JS_Tab_body_pingjia">
      <div class="tab_title"> <span class="icon"></span>
        <h2>客户评价</h2>
      </div>
	  <script language="javascript">
			var comment_rank = "<?php 
$k = array (
  'name' => 'comments_rank',
  'id' => $this->_var['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>";
			</script>
      <div id="ECS_COMMENT"> <?php 
$k = array (
  'name' => 'comments',
  'type' => $this->_var['type'],
  'id' => $this->_var['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
    </div>
    <div class="zixun mt10" id="JS_Tab_body_zixun" style="display:none">
      <div class="tab_title"> <span class="icon"></span>
        <h2>商品咨询</h2>
      </div>
      <div class="tab_body"> <div class="c gray">暂无咨询。</div></div>
    </div>
    <div class="wenti mt10" id="JS_Tab_body_wenti">
      <div class="tab_title"> <span class="icon Left"></span>
        <h2>常见问题解答</h2>
      </div>
      <div class="tab_body">
        <ul class="went_tab JS_wenti_tab clearfix">
          <li class="Left JS_wenti_tab_goods current" data-type="goods"><i class="goods_icon"></i>商品相关</li>
          <li class="Left JS_wenti_tab_trans" data-type="trans"><i class="trans_icon"></i>物流配送</li>
          <li class="Left JS_wenti_tab_shouhou" data-type="shouhou"><i class="shouhou_icon"></i>售后问题</li>
          <li class="Left JS_wenti_tab_pay" data-type="pay"><i class="pay_icon"></i>付款相关</li>
        </ul>
        <div class="went_body JS_went_body_goods">
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">图片看着很喜欢，但是没有看到实物不敢买，不确定图片和实物是否一样？是否有色差？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">我们的产品图片均采用实物拍摄，确保为您提供的产品真实性。但是由于拍摄环境、光线以及显示频率等原因，实物和图片可能存在微小色差，可用不同显示器查看，这个微小色差不会影响到您购买。目前我们在全国开设了两百余家体验馆，您可以到所在城市体验馆参观和体验家具品质。“<a class="red" target="_blank" href="expr.php"><u>查看全国体验馆</u></a>”。</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">网上的所有产品体验馆是否都有实物展示？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">由于体验馆面积有限，有部分代表性商品展出，客户可以体验到家具的品质及做工。</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">网上的产品和体验馆的产品在价格、质量等方面是否有区别？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">体验馆售价与网站统一；所展出的商品均为工厂直接发货，货源与您收到的商品是一致的，请您放心购买。</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">床包含床头柜床垫吗？沙发包含茶几吗？餐桌包含餐椅吗？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">除套装产品外，产品价格均单指床/沙发/餐桌的价格，床垫/茶几/餐椅需要另购，图片中的床垫/茶几/餐椅等，都是为了配合拍摄展示效果而搭配的。</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">产品有味道吗？环保指数是多少呢？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">由于我们是工厂生产好后直接发货，多少都有点气味的。不过气味不大，将房间多通风，或者放些樟脑丸活性炭，过段时间就没问题了。家具板材均达到欧洲环保E1级标准。您可以放心购买。</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">可以修改尺寸吗？可以修改颜色吗？为什么不能修改呢？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">我们大部分家具是批量生产，这部分商品不支持定制。在广州、深圳、珠海和东莞可提供衣柜、书台、酒柜、衣帽间以及橱柜等商品的定制服务。新推出面向全国的衣柜定制套餐服务。</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">家具怎么保养呢？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">不同材质的家具有不同的保养方法。</p>
            </div>
          </div>
        </div>
        <div class="went_body JS_went_body_trans none">
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">你们可不可以送货上门？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">开设有体验馆的城市在服务范围内可以提供送货上门服务，其他城市均通过物流发货。物流发货只能到物流点，需要您到物流点提货。如果需要物流送货上门，物流则需要另收取一部分送货费用（偏远地区暂不支持物流送货服务）。我们与全国各地的物流都建立了合作关系，货物备好后我们将通过物流发货到您当地的物流点。具体发货方式包括以下三种：<br/>
                1、 体验馆所在地区可以提供付费送货+安装服务（部分建材除外）；<br/>
                2、通过物流向全国发货到当地物流点，需要客户自提；<br/>
                3、部分小件商品可发快递。</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">购买商品包安装吗？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">有体验馆的城市，支付一定的服务费，可以为您提供家具安装服务（部分建材不提供安装）；非体验馆服务区域，暂时不支持安装的，家具附有安装说明您可以自行安装或者找师傅付费安装。<br/>
                由于我们是工厂直销，利润微薄不足以承担安装费用，这样也是为了保证为客户提供低价优质的商品。</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">商品包邮吗？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">由于各地物流费差异较大，标价没有包含运费；且铭东商城的商品是工厂直销，价格已经是最低了，就算产品加上运费性价比也很高。但有部分做活动的商品可以提供包邮。</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">运费怎么收取的？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">当您提交订单时，提交页面会自动显示您所订购商品的运费。若您选择物流运送或快递，运费是根据家具体积、重量和所在城市物流单价来计算的；若您选择体验馆三包服务。</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">走什么物流呢？物流的提货点在哪里呢？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">铭东商城面向全国发货，大部分地区我们采用自己的物流整车发货，以保证商品在运输中的安全。非体验馆城市都是物流中转到当地城区，（因为中转合作物流较多）提货地点暂时无法确认，但是货到后物流会主动联系您说明提货地址的。</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">在体验馆直购买当时就可以提货吧？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">体验馆可以订购网上所有商品，由于面积有限，体验馆没有现货，我们统一从广东仓库发货。为了您能尽快收到心仪的产品，建议您提前订购！</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">什么时候能发货？什么时候能到货？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">家具商品有现货的情况下，根据地区远近发货周期为15-20天左右。没有现货的商品及其他类型的商品根据生产周期而定。</p>
            </div>
          </div>
        </div>
        <div class="went_body JS_went_body_shouhou none">
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">运输损坏了怎么办？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">发货前，我们都会对商品进行防摔包装以保证运输中的安全。当然，全国各地路途遥远有时难免出现意外，如有 物流损坏问题我们会联系维修师傅上门为您处理；若您当地没有我们的维修师傅您可以联系本地的师傅为您处理，费用由我们来承担。如果物流损坏严重影响使用， 我们会免费为您提供更换。</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">质量怎么保证？售后是怎样的？有保障吗？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">本站产品均出自各大品牌厂家，质量都经过国家严格检查，并且我们自己也设有质量检测部门对质量层层把关，确保到您手上的产品是质量合格的产品。并且我们为您提供的是<a target="_blank" class="red"><u>45天无理由退货服务</u></a>，家具三年质保以及建材一年质保。在质保期内，如果出现质量问题我们免费为您维修。请您放心购买！“<a class="red" target="_blank" href="expr.php"><u>查看全国体验馆</u></a>”</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">没有体验馆的城市怎么售后？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">铭东商城自2008年成立以来，在全国大部分地方建立了较完善的售后服务网络，没有体验馆的城市，我们也有合作的维修师傅，能为您提供优质完善的售后服务，请放心购买。</p>
            </div>
          </div>
        </div>
        <div class="went_body JS_went_body_pay none">
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">付款方式有哪几种呢？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">铭东商城为在线购买的客户提供了网银在线支付、信用卡支付、支付平台支付（支付宝、易宝支付、财付通）、银行柜台转账汇款四种支付方式。您也可以到就近的体验馆使用现金支付、POS机刷卡支付。</p>
            </div>
          </div>
          <div class="list">
            <div class="question clearfix"><span class="icon Left"></span><strong class="Right">可以货到付款吗？为什么不能货到付款？先付款给你们有什么保障？</strong></div>
            <div class="answer clearfix"><span class="icon Left"></span>
              <p class="Right">由于目前国内物流到付风险较大，为了保证您的资金安全，铭东商城暂时不支持货到付款服务。本网站经过ICP备案，同时也是支付宝特约商家，全国有200多家实体体验馆，您可以放心订购！</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;

onload = function(){
  changePrice();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  
  $.ajax({
					type:"GET",
					url:"goods.php",
					cache:false,
					dataType:'json',     //接受数据格式
					data:'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty,
					success:changePriceResponse
				});

}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}


</script>


<script type="text/javascript" src="themes/meilele/js/back_to_top.min.js?1121fv"></script>
<script type="text/javascript" src="themes/meilele/js/goods_wide.min.js?1121fv"></script>
<script type="text/javascript">

GL['34742'] = new Good({
	"goods_id": "34742",
	"show_type": "0",
	"goods_thumb_1": "",
	"ship_type": "1",
	"is_logistics": "0",
	"is_delete": "0",
	"is_on_sale": "1",
	"is_parent_goods": "0",
	"calc_type": "1",
	"goods_weight": "0",
	"goods_sn": "",
	"cloth_goods_id": "",
	"goods_volume": "0.1952",
	"stock_volumn": "0.1952",
	"goods_name": "",
	"limit_sale": "0",
	"discount_price": "0.00",
	"goods_thumb": "",
	"style_id": "303",
	"cat_id": "275",
	"brand_id": "213",
	"material_id": "304",
	"goods_attribute": "0",
	"shop_id": "1",
	"shop_name": "",
	"cname": "",
	"style_name": "",
	"brand_name": "",
	"discount_type": "1",
	"red_title": "",
	"clo_goods_id": null,
	"material_name": "",
	"add_time": "1308695210",
	"quotiety": "0.00",
	"img_leftshow_text": "0",
	"goods_list_tag": "0",
	"real_unit_use": "0",
	"change_unit_use": "1",
	"change_unit_ratio": "1.00000",
	"goods_unitname": "",
	"discount_name": "",
	"is_fitment": 0,
	"is_haier": 0,
	"is_redpacket": 0,
	"chandi": "",
	"brand_url": "",
	"style_url": "",
	"material_url": "",
	"price_type": {
		
	},
	"activity_type": "",
	"goods_activity_name": [],
	"favourite_num": 8287,
	"click": 7587,
	"sales_num": "1071",
	"attr_info": {
		"color_list": false,
		"spec_list": {
			
		},
		"sofa_list": false,
		"material_list": false
	},
	"join_list": null,
	"page_title": "",
	"real_unit_use_name": "",
	"change_unit_use_name": "",
	"relate_parent": [],
	"relate_show": [],
	"pinyin": "dianshigui",
	"exchange_limit": null
});
goodsInit();
</script>

<script type="text/javascript" id="bdshare_js" data="type=tools"></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>

</body>
</html>
