<?php /* Smarty version 2.6.26, created on 2018-10-04 16:03:11
         compiled from index.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<div class="section_banner" style="position: relative;">
<div class="sylogin_1" style="top: 55px;">
<div class="sylogin_2"></div>
<div class="sylogin">
  <h3 class="login_h2"><?php echo $this->_tpl_vars['login']; ?>
</h3>
  <?php if ($this->_tpl_vars['username'] != ""): ?>
  <div style="color:#FFFFFF; height:80px; padding-top:30px;"> 	<?php echo $this->_tpl_vars['Welcomeback']; ?>
，<?php echo $this->_tpl_vars['username']; ?>
！<a href="index.php?act=member_account" class="a_login" style="color: #FF9900;"><?php echo $this->_tpl_vars['ucenter']; ?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onClick="Quit_login()" class="a_login" style="color: #FF9900;"><?php echo $this->_tpl_vars['Signout']; ?>
</a></div>
  <?php else: ?>
 <form enctype="multipart/form-data" action="user.php?act=member_account_login" method="post" name="theForm" onsubmit="return validate()" name="theForm">
	     
	      <div class="div_account">
	     <input class="ipt-txts" type="text" name="username"  placeholder="邮箱/手机号码/用户名" />
	      </div>
	      <div class="div_password">
	      
	      	<input class="ipt-txts" type="password" name="password"  placeholder="请输入密码" />
	      </div>
	   
		  <button type="submit" class="login_button">登&nbsp;&nbsp;录</button>
		 
     </form><?php endif; ?>
  <div class="wjmm">
    <p class="p_login">
        <!--<a href="" class="qq_login"></a>-->
        <!--<a href="" class="wx_login"></a>-->
        <a href="https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=101169181&redirect_uri=http%3a%2f%
2ftransportjp.com%2fqqstate.php&scope=get_user_info,get_info" class="wb_login"></a>
        <!--<a href="" class="zhb_login"></a>-->

    </p>
     <p><a href="user.php?act=resetp" class="zhmm"><?php echo $this->_tpl_vars['wangjimima']; ?>
?</a><a href="index.php?act=member_register" class="orange"><?php echo $this->_tpl_vars['register']; ?>
</a></p>
  </div>
  </div>
</div>

<div  class="lw-kv">




<script type="text/javascript" src="js/jcarousellite_index.js"></script>
<div class="index_banner" id="banner_tabs" style="height:450px;">
  <ul style="height:450px;">
  <?php $_from = $this->_tpl_vars['focusmap_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['slider'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['slider']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['focusmap']):
        $this->_foreach['slider']['iteration']++;
?>
    <li style="background:url(http://<?php echo $this->_tpl_vars['yuming']; ?>
/<?php echo $this->_tpl_vars['lang']['thebackgrounddistributionsystem']; ?>
<?php echo $this->_tpl_vars['focusmap']['ImgUrl']; ?>
) center top no-repeat; height:450px;"><a href="<?php if ($this->_tpl_vars['focusmap']['LinkUrl']): ?><?php echo $this->_tpl_vars['focusmap']['LinkUrl']; ?>
 <?php else: ?>javascript:void(0)<?php endif; ?>" title="<?php echo $this->_tpl_vars['focusmap']['Title']; ?>
" target="_blank"></a></li>
  <?php endforeach; endif; unset($_from); ?>
  </ul>
  <cite>
      <?php $_from = $this->_tpl_vars['focusmap_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['slider'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['slider']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['focusmap']):
        $this->_foreach['slider']['iteration']++;
?>
      <span  <?php if ($this->_foreach['slider']['iteration'] == 1): ?>class="cur"<?php endif; ?>><?php echo $this->_foreach['slider']['iteration']; ?>
</span>
      <?php endforeach; endif; unset($_from); ?>
  </cite> </div>
  <?php echo '
  <script type="text/javascript">
			(function(){
		        if(!Function.prototype.bind){
		            Function.prototype.bind = function(obj){
		                var owner = this,args = Array.prototype.slice.call(arguments),callobj = Array.prototype.shift.call(args);
		                return function(e){e=e||top.window.event||window.event;owner.apply(callobj,args.concat([e]));};
		            };
		        }
		    })();
		    var banner_tabs = function(id){
		        this.ctn = document.getElementById(id);
		        this.adLis = null;
		        this.btns = null;
		        this.animStep = 0.2;//动画速度0.1～0.9
		        this.switchSpeed = 6;//自动播放间隔(s)
		        this.defOpacity = 1;
		        this.tmpOpacity = 1;
		        this.crtIndex = 0;
		        this.crtLi = null;
		        this.adLength = 0;
		        this.timerAnim = null;
		        this.timerSwitch = null;
		        this.init();
		    };
		    banner_tabs.prototype = {
		        fnAnim:function(toIndex){
		            if(this.timerAnim){window.clearTimeout(this.timerAnim);}
		            if(this.tmpOpacity <= 0){
		                this.crtLi.style.opacity = this.tmpOpacity = this.defOpacity;
		                this.crtLi.style.filter = \'Alpha(Opacity=\' + this.defOpacity*100 + \')\';
		                this.crtLi.style.zIndex = 0;
		                this.crtIndex = toIndex;
		                return;
		            }
		            this.crtLi.style.opacity = this.tmpOpacity = this.tmpOpacity - this.animStep;
		            this.crtLi.style.filter = \'Alpha(Opacity=\' + this.tmpOpacity*100 + \')\';
		            this.timerAnim = window.setTimeout(this.fnAnim.bind(this,toIndex),50);
		        },
		        fnNextIndex:function(){
		            return (this.crtIndex >= this.adLength-1)?0:this.crtIndex+1;
		        },
		        fnSwitch:function(toIndex){
		            if(this.crtIndex==toIndex){return;}
		            this.crtLi = this.adLis[this.crtIndex];
		            for(var i=0;i<this.adLength;i++){
		                this.adLis[i].style.zIndex = 0;
		            }
		            this.crtLi.style.zIndex = 2;
		            this.adLis[toIndex].style.zIndex = 1;
		            for(var i=0;i<this.adLength;i++){
		                this.btns[i].className = \'\';
		            }
		            this.btns[toIndex].className = \'cur\'
		            this.fnAnim(toIndex);
		        },
		        fnAutoPlay:function(){
		            this.fnSwitch(this.fnNextIndex());
		        },
		        fnPlay:function(){
		            this.timerSwitch = window.setInterval(this.fnAutoPlay.bind(this),this.switchSpeed*1000);
		        },
		        fnStopPlay:function(){
		            window.clearTimeout(this.timerSwitch);
		        },
		        init:function(){
		            this.adLis = this.ctn.getElementsByTagName(\'li\');
		            this.btns = this.ctn.getElementsByTagName(\'cite\')[0].getElementsByTagName(\'span\');
		            this.adLength = this.adLis.length;
		            for(var i=0,l=this.btns.length;i<l;i++){
		                with({i:i}){
		                    this.btns[i].index = i;
		                    this.btns[i].onclick = this.fnSwitch.bind(this,i);
		                    this.btns[i].onclick = this.fnSwitch.bind(this,i);
		                }
		            }
		            this.adLis[this.crtIndex].style.zIndex = 2;
		            this.fnPlay();
		            this.ctn.onmouseover = this.fnStopPlay.bind(this);
		            this.ctn.onmouseout = this.fnPlay.bind(this);
		        }
		    };
		    var player1 = new banner_tabs(\'banner_tabs\');
		</script>
<style type=text/css>
.con_new {
    width: 1111px;
    margin: 0 auto;
}

.con_query {
    padding-top: 20px;
    padding-left: 5px;
}


.con_new_left {
    width: 46%;
    padding: 0px 4% 0px 0px;
}
.float_left {
    float: left;
}
.con_query .query {
    width: 79%;
    height: 40px;
    border-radius: 8px;
    border: 1px solid #e43c1f;
    outline: none;
    padding-left: 1%;
    font-size: 16px;
}
.con_query .query_b {
    width: 18%;
    height: 42px;
    background: #e43c1f;
    border: 1px solid #e43c1f;
    outline: none;
    border-radius: 8px;
    font-size: 16px;
    color: #fff;
}
.clear {
    clear: both;
}
.float_right {
    float: right;
}
.con_new_right {
    width: 46%;
    padding: 0px 0px 0px 4%;
}
.con_new span {
    float: right;
}

.ke_pos {
    position: absolute;
    top: 9px;
    right: 115px;
    font-size: 16px;
}
.con_query .weight {
    width: 79%;
    height: 40px;
    border-radius: 8px;
    border: 1px solid #57C4C5;
    outline: none;
    padding-left: 1%;
    font-size: 16px;
}
.con_query .weight_b {
    width: 18%;
    height: 42px;
    background: #57C4C5;
    border: 1px solid #57C4C5;
    outline: none;
    border-radius: 8px;
    font-size: 16px;
    color: #fff;
}
    .three-rows {
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        max-height: 75px;
    }
</style>
'; ?>




</div></div>


<div class="query">
    <div class="con_new con_query">
        <div class="con_new_left float_left">
            <input class="query_order query" id="query-billcode" placeholder="请输入您要查询的单号">
            <button class="query_b" onclick="query_order()">物流查询</button>
        </div>
        <div style="position: relative" class="con_new_right float_right">
            <span class="ke_pos">克(g)</span>
            <input type=number
                   class="query_weight weight" id="fee-weight" placeholder="请输入您要查询的重量(g)">
            <button class="weight_b" onclick="query_weight()">计算运费</button>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
<?php echo '
<script>
    function query_order() {
        var code = $(\'#query-billcode\').val();
        if(!code) {
            alert("请输入单号");
            return false;
        }
        location.href="http://cha.walatao.com/express/get/hdbao/"+code;
    }
    function query_weight() {
        var weight = $(\'#fee-weight\').val();
        location.href = "index.php?act=fee_query&weight="+weight;
    }
</script>
'; ?>


<div class="sectino_tool">
  <div class="section_zhuany">
    <h3 style="    padding-bottom: 22px;">铭东转运  欧洲专线<img src="templates/default//images/tuijian.png"></h3>
    <div class="h3dis">只需在铭东进行如下操作，铭东就能把商品送到欧洲各个国家.</div>
    <div class="zy_step">
      <dl>
        <dd class="dimg"><img style="vertical-align: bottom" src="templates/default//images/icon_bz1.jpg"/></dd>
        <dt>注册<?php echo $this->_tpl_vars['page_title']; ?>
</dt>
        <dd>获得您的专属转运码</dd>
      </dl>
      <dl>
        <dd class="dimg"><img src="templates/default//images/icon_bz2.jpg"/></dd>
        <dt>网站/线下购物</dt>
        <dd>填写铭东仓库地址</dd>
      </dl>
      <dl>
        <dd class="dimg"><img src="templates/default//images/icon_bz3.jpg"/></dd>
        <dt>提交包裹</dt>
        <dd>预报您的包裹</dd>
      </dl>
        <dl>
            <dd class="dimg"><img  width="140" height="140"  src="templates/default//images/step-submit-order.png"/></dd>
            <dt>提交订单</dt>
            <dd>选择欧洲专线</dd>
        </dl>
        <dl>
            <dd class="dimg"><img width="140" height="140" src="templates/default//images/step-flight.png"/></dd>
            <dt>专线包机转运</dt>
            <dd>专有线路,安全快捷</dd>
        </dl>
        <dl>
            <dd class="dimg"><img width="140" height="140" src="templates/default//images/step-finished.png"/></dd>
            <dt>到达欧洲口岸</dt>
            <dd>专机到达,报关送检</dd>
        </dl>
        <dl>
            <dd class="dimg"><img width="140" height="140" src="templates/default//images/step_choose_express.png"/></dd>
            <dt>优选欧洲快递</dt>
            <dd>我们帮您选择最合适的快递</dd>
        </dl>
        <dl>
            <dd class="dimg"><img width="140" height="140" src="templates/default//images/step-finished.png"/></dd>
            <dt>确认收货</dt>
            <dd>祝你购物愉快</dd>
        </dl>
    </div>
    <div class="zy_bottoom"><a href="/user.php?action=login" class="mdzy">开始我的转运</a><br>
    <a href="article.php?act=article_bidu&articleid=30" class="zylc" style="margin-top: 10px; display:block">欧洲专线操作演示>></a></div>
      <h3>铭东转运  国际直邮</h3>
      <div class="h3dis">只需在铭东进行如下操作，铭东就能把商品送到欧洲各个国家.</div>
      <div class="zy_step zhiyou">
          <dl>
              <dd class="dimg"><img src="templates/default//images/icon_bz1.jpg"/></dd>
              <dt>注册<?php echo $this->_tpl_vars['page_title']; ?>
</dt>
              <dd>获得您的专属转运码</dd>
          </dl>
          <dl>
              <dd class="dimg"><img src="templates/default//images/icon_bz2.jpg"/></dd>
              <dt>网站/线下购物</dt>
              <dd>填写铭东仓库地址</dd>
          </dl>
          <dl>
              <dd class="dimg"><img src="templates/default//images/icon_bz3.jpg"/></dd>
              <dt>提交包裹</dt>
              <dd>预报您的包裹</dd>
          </dl>
          <dl>
              <dd class="dimg"><img  width="140" height="140"  src="templates/default//images/step-submit-order.png"/></dd>
              <dt>提交订单</dt>
              <dd>选择4大快递公司来转运</dd>
          </dl>
          <dl>
              <dd class="dimg"><img width="140" height="140" src="templates/default//images/step-flight.png"/></dd>
              <dt>开始转运</dt>
              <dd>交给<?php echo $this->_tpl_vars['page_title']; ?>
</dd>
          </dl>
          <dl>
              <dd class="dimg"><img width="140" height="140" src="templates/default//images/step-finished.png"/></dd>
              <dt>确认收货</dt>
              <dd>祝你购物愉快</dd>
          </dl>
      </div>
      <div class="zy_bottoom"><a href="/user.php?action=login" class="mdzy">开始我的转运</a><br>
          <a href="article.php?act=article_bidu&articleid=33" class="zylc" style="margin-top: 10px; display:block">转运操作演示>></a></div>
  </div>

  <div class="section_4">
    <div class="secont">
      <div class="secont_left">
        <h3><a href="index.php?act=list_news&id=10&catid=10" class=""></a>最新公告</h3>
        <div class="news" style="margin-bottom: 0; padding-bottom: 0">
          <ul style="margin-left:0;margin-bottom: 0">
        <!--<?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news']):
?>-->
            <li style="line-height:40px;overflow: hidden    "><span class="date"><?php echo $this->_tpl_vars['news']['add_time']; ?>
</span><a href="article.php?act=article_news&articleid=<?php echo $this->_tpl_vars['news']['id']; ?>
"><?php echo $this->_tpl_vars['news']['CntTitle']; ?>
</a></li>
            <!--<?php endforeach; endif; unset($_from); ?>-->
          </ul>
        </div>
      </div>
      <div class="secont_right">   <h3><a href="index.php?act=list_news&id=13&catid=13" class=""></a>购物教程</h3>
      <div class="rzw_rtjc">
          <!--<?php $_from = $this->_tpl_vars['courses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news']):
?>-->
                <div class="rzw_rtjc_box">
                      <div class="rzw_rtjc_box_top">
                          <a href="article.php?act=article_news&articleid=<?php echo $this->_tpl_vars['news']['id']; ?>
"><?php echo $this->_tpl_vars['news']['CntTitle']; ?>
</a>
                      </div>
                      <div class="rzw_rtjc_box_main">
                          <a href="article.php?act=article_news&articleid=<?php echo $this->_tpl_vars['news']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['news']['CntTitleImage']; ?>
" /></a>
                            <span class="three-rows"><?php echo $this->_tpl_vars['news']['CntMetaDes']; ?>
...</span>
                      </div>
                </div>
          <!--<?php endforeach; endif; unset($_from); ?>-->

          </div>
      </div>
    </div>
  </div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "index_fee_caculator.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php echo '
 <style type=text/css>
 .con_lianxi {
    width: 1111px;
        margin: auto;
    margin-top: 40px;
    padding-bottom: 20px;
}
.con_lianxi .active1 {
    width: 33%;
    padding-top: 15px;
}
.con_lianxi .active2 {
    width: 22%;
    padding-top: 15px;
}
.con_lianxi_main {
    width: 27%;
    padding-top: 15px;
}
.con_lianxi .active {
    width: 13%;
    margin: 0px;
    padding: 0px;
}
con_lianxi_main img, .con_lianxi_main .neirong {
    float: left;
}

.con_lianxi_main img {
    margin-right: 20px;
}
.con_lianxi_main img, .con_lianxi_main .neirong {
    float: left;
}
.con_lianxi_main .neirong h2 {
    font-weight: normal;
    padding-top: 15px;
    margin-bottom: 3px;
}
 </style>
  '; ?>


<div class="con_lianxi">
    <div class="con_lianxi_main float_left active1">
        <img src="/images/hand.png">
        <div class="neirong">
            <h2>商务合作</h2><a href="mailto:business@zhuanyun.com">business@zhuanyun.com</a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="con_lianxi_main float_left active2">
        <img src="/images/phone.png">
        <div class="neirong">
            <h2>联系我们</h2><a>Tel:0571-89895656</a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="con_lianxi_main float_left">
        <img src="/images/yan.png">
        <div class="neirong">
            <h2>官方账号</h2><a target="_blank" href="http://www.weibo.com/zhuanyun">@zhuanyun铭东转运</a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="con_lianxi_main float_left active">
        <img src="/templates/default//images/img_wx1.jpg">
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
   
    

<div class="section_4">
  <div class="sjtj">
    <h3>商家推荐</h3>
    <div class="tjcong">
      <table width="1111" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><a href="http://count.chanet.com.cn/click.cgi?a=528721&d=381690&u=&e=" target="_blank"><img src="templates/default//images/img-tj1.jpg"></a></td>
          <td><a href="http://www.rakuten.co.jp/" target="_blank"><img src="templates/default//images/img-tj2.jpg"></a></td>
          <td><a href="http://www.lushjapan.com/" target="_blank"><img src="templates/default//images/img-tj3.jpg"></a></td>
          <td><a href="https://www.muji.net/" target="_blank"><img src="templates/default//images/img-tj4.jpg"></a></td>
          <td><a href="http://www.matsukiyo.co.jp/" target="_blank"><img src="templates/default//images/img-tj5.jpg"></a></td>
        </tr>
        <tr>
          <td><a href="http://www.bellemaison.jp/" target="_blank"><img src="templates/default//images/img-tj6.jpg"></a></td>
          <td colspan="4"></td>
        </tr>
      </table>
    </div>
  </div>
</div>

<div class="partner">
  <div class="partitile">合作伙伴</div>
  <div class="par_cont"><img src="templates/default//images/img-hb1.jpg"><img src="templates/default//images/img-hb2.jpg"><img src="templates/default//images/img-hb3.jpg"><img src="templates/default//images/img-hb4.jpg"><img src="templates/default//images/img-hb5.jpg"></div>
</div>


<div class="clear_15"></div>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <!--  
<div class="section_float">
  <div class="con_float">
    <dl class="dl_tel">
      <dt>服务热线</dt>
      <dd class="ddname"><dd class="ddname">4000-097-561</dd>
      <dd class="dddis">服务时间：9:00-23:00</dd>
    </dl>
    <dl class="dl_weibo">
      <dt>官方微博</dt>
      <dd class="ddname">@转运</dd>
      <dd class="dddis">活动上线，抢先知道</dd>
    </dl>
    <dl class="dl_weixin">
      <dt>官网微信</dt>
      <dd class="ddname">transportjp</dd>
      <dd class="dddis">包裹信息，实时跟踪</dd>
    </dl>
    <dl class="dl_wximg">
    </dl>

  </div>
</div>

-->

</body>
</html>