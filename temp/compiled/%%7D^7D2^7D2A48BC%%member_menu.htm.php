<?php /* Smarty version 2.6.26, created on 2018-10-05 14:48:27
         compiled from member_menu.htm */ ?>
<?php echo '
<script type="text/javascript">

$(function(){
    // 加入触发函数
    var  $selCon =    $("div.vcon:has(a[class=\'select\'])");
    if( $selCon) {
        setTimeout(function() {$selCon.slideDown();}, 0);

    }
   


    $selCon.removeAttr("style");
	var tabs_i=-1;
	$(\'.vtitle\').click(function(){
		var _self = $(this);
		var  j = $(\'.vtitle\').index(_self);
		if( tabs_i == j ) return false; tabs_i = j;
		$(\'.vtitle em\').each(function(e){
			if(e==tabs_i){
				$(\'em\',_self).removeClass(\'v01\').addClass(\'v02\');
			}else{
				$(this).removeClass(\'v02\').addClass(\'v01\');
			}
		});
		$(\'.vcon:visible\').slideUp();
         $(\'.vcon\').eq(tabs_i).slideDown();
	});  
})

</script>
'; ?>

   <div class="cr_top"><?php echo $this->_tpl_vars['weizhi']; ?>
：<?php echo $this->_tpl_vars['ur_here']; ?>
</div>
	<div class="conter_left">

             <div class="vtitle">
                <div class="vtitle_img"><img src="themes/default/images/rbhm/left_07.png" border="0" /></div>
                <div class="vtitle_txt"><?php echo $this->_tpl_vars['menu20']; ?>
</div>
                <div id="clear"></div>
             </div>

              <div class="vcon" >
                    <ul class="vconlist clearfix">
                      <li>
                             <a href="member.php?act=member_account"  <?php if ($this->_tpl_vars['aacct'] == 'member_account'): ?>class="select"<?php endif; ?>>
                                 <div class="vconlist_left"><?php echo $this->_tpl_vars['menu21']; ?>
</div>
                                 <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
                               <div id="clear"></div>
                             </a>
                          </li>
                      <li>
                             <a href="member.php?act=member_datum"  <?php if ($this->_tpl_vars['aacct'] == 'member_datum'): ?>class="select"<?php endif; ?>>
                                 <div class="vconlist_left"><?php echo $this->_tpl_vars['menu22']; ?>
</div>
                                 <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
                               <div id="clear"></div>
                             </a>
                          </li>
                      <li>
                              <a href="member.php?act=member_revisepass"  <?php if ($this->_tpl_vars['aacct'] == 'member_revisepass'): ?>class="select"<?php endif; ?>>
                                  <div class="vconlist_left"><?php echo $this->_tpl_vars['menu23']; ?>
</div>
                                  <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
                                <div id="clear"></div>
                              </a>
                          </li>
                      <li>
                             <a href="member.php?act=member_address"  <?php if ($this->_tpl_vars['aacct'] == 'member_address'): ?>class="select"<?php endif; ?>>
                                 <div class="vconlist_left"><?php echo $this->_tpl_vars['menu24']; ?>
</div>
                                 <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
                                 <div id="clear"></div>
                             </a>
                          </li>
                    </ul>
               </div>


              <div class="vtitle">
      				<div class="vtitle_img"><img src="themes/default/images/rbhm/left_06.png" border="0" /></div>
      				<div class="vtitle_txt"><?php echo $this->_tpl_vars['menu1']; ?>
</div>
      				<div id="clear"></div>
      	    </div>
              <div class="vcon" >
                 <ul class="vconlist clearfix">
      		     <li>
                     <a href="member.php?act=package_forecast"  <?php if ($this->_tpl_vars['aacct'] == 'package_forecast'): ?>class="select"<?php endif; ?>>
                       <div class="vconlist_left"><?php echo $this->_tpl_vars['menu2']; ?>
</div>
                       <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
                       <div id="clear"></div>
                     </a>
                   </li>
      		     <li>
                     <a href="member.php?act=package_atonce"  <?php if ($this->_tpl_vars['aacct'] == 'package_atonce'): ?>class="select"<?php endif; ?>>
                       <div class="vconlist_left"><?php echo $this->_tpl_vars['menu3']; ?>
</div>
                       <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
                       <div id="clear"></div>
                     </a>
                   </li>
      		     <li>
                     <a href="member.php?act=member_12" <?php if ($this->_tpl_vars['aacct'] == 'member_12'): ?>class="select"<?php endif; ?>>
                        <div class="vconlist_left"><?php echo $this->_tpl_vars['menu4']; ?>
</div>
                        <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
                        <div id="clear"></div>
                     </a>
                   </li>
      		     <!--<li>-->
                     <!--<a href="member.php?act=member_13" <?php if ($this->_tpl_vars['aacct'] == 'member_13'): ?>class="select"<?php endif; ?>>-->
                        <!--<div class="vconlist_left"><?php echo $this->_tpl_vars['menu5']; ?>
</div>-->
                        <!--<div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>-->
                        <!--<div id="clear"></div>-->
                     <!--</a>-->
                   <!--</li>-->
      		   </ul>
              </div>

        <div class="vtitle">
				<div class="vtitle_img"><img src="themes/default/images/rbhm/left_07.png" border="0" /></div>
				<div class="vtitle_txt"><?php echo $this->_tpl_vars['menu6']; ?>
</div>
				<div id="clear"></div>
	    </div>
        <div class="vcon" >
		  <ul class="vconlist clearfix">
		    <li>
               <a href="member_order_add.php" <?php if ($this->_tpl_vars['aacct'] == 'member_submit'): ?>class="select"<?php endif; ?>>
                  <div class="vconlist_left"><?php echo $this->_tpl_vars['menu7']; ?>
</div>
                  <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
                  <div id="clear"></div>
               </a>
            </li>
		    <li>
               <a href="member.php?act=21" >
                  <div class="vconlist_left"><?php echo $this->_tpl_vars['menu8']; ?>
</div>
                  <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
                  <div id="clear"></div>
               </a>
            </li>
              <li>
                  <a href="member_zhuanyun.php" >
                      <div class="vconlist_left"><?php echo $this->_tpl_vars['menu29']; ?>
</div>
                      <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
                      <div id="clear"></div>
                  </a>
              </li>

		  </ul>
        </div>

        <!--<div class="vtitle">-->
				<!--<div class="vtitle_img"><img src="themes/default/images/rbhm/left_08.png" border="0" /></div>-->
				<!--<div class="vtitle_txt"><?php echo $this->_tpl_vars['menu9']; ?>
</div>-->
				<!--<div id="clear"></div>-->
		<!--</div>-->
        <!--<div class="vcon" >-->
		  <!--<ul class="vconlist clearfix">-->
		    <!--<li>-->
              <!--<a href="member.php?act=member_30"  <?php if ($this->_tpl_vars['aacct'] == 'member_30'): ?>class="select"<?php endif; ?>>-->
                <!--<div class="vconlist_left"><?php echo $this->_tpl_vars['menu10']; ?>
</div>-->
                <!--<div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>-->
				<!--<div id="clear"></div>-->
              <!--</a>-->
            <!--</li>-->
		    <!--<li>-->
               <!--<a href="member.php?act=member_31" <?php if ($this->_tpl_vars['aacct'] == 'member_31'): ?>class="select"<?php endif; ?> >-->
                 <!--<div class="vconlist_left"><?php echo $this->_tpl_vars['menu11']; ?>
</div>-->
                 <!--<div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>-->
				 <!--<div id="clear"></div>-->
               <!--</a>-->
            <!--</li>-->
		  <!--</ul>-->
        <!--</div>-->

        <div class="vtitle">
				<div class="vtitle_img"><img src="themes/default/images/rbhm/left_09.png" border="0" /></div>
				<div class="vtitle_txt"><?php echo $this->_tpl_vars['menu12']; ?>
</div>
				<div id="clear"></div>
		</div>

		<div class="vcon"  >
          <ul class="vconlist clearfix">
		   <li>
             <a href="member.php?act=member_onlinerecharge"  <?php if ($this->_tpl_vars['aacct'] == 'member_onlinerecharge'): ?>class="select"<?php endif; ?>  >
                <div class="vconlist_left"><?php echo $this->_tpl_vars['menu13']; ?>
</div>
                <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
	            <div id="clear"></div>
             </a>
           </li>
		   <li>
             <a href="member.php?act=member_withdraws"  <?php if ($this->_tpl_vars['aacct'] == 'member_withdraws'): ?>class="select"<?php endif; ?>>
                <div class="vconlist_left"><?php echo $this->_tpl_vars['menu14']; ?>
</div>
                <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
	            <div id="clear"></div>
             </a>
           </li>
		   <li>
              <a href="member.php?act=member_myacc"  <?php if ($this->_tpl_vars['aacct'] == 'member_myacc'): ?>class="select"<?php endif; ?>>
                 <div class="vconlist_left"><?php echo $this->_tpl_vars['menu15']; ?>
</div>
                 <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
	             <div id="clear"></div>
              </a>
           </li>
		   <!--<li>-->
              <!--<a href="member.php?act=member_preferential"  <?php if ($this->_tpl_vars['aacct'] == 'member_preferential'): ?>class="select"<?php endif; ?>>-->
                 <!--<div class="vconlist_left"><?php echo $this->_tpl_vars['menu16']; ?>
</div>-->
                 <!--<div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>-->
	             <!--<div id="clear"></div>-->
              <!--</a>-->
           <!--</li>-->
		   <!--<li>-->
              <!--<a href="member.php?act=member_integral" <?php if ($this->_tpl_vars['aacct'] == 'member_integral'): ?>class="select"<?php endif; ?> >-->
                  <!--<div class="vconlist_left"><?php echo $this->_tpl_vars['menu17']; ?>
</div>-->
                  <!--<div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>-->
	              <!--<div id="clear"></div>-->
              <!--</a>-->
           <!--</li>-->
		   <!--<li>-->
              <!--<a href="member.php?act=member_FAD"  <?php if ($this->_tpl_vars['aacct'] == 'member_FAD'): ?>class="select"<?php endif; ?>>-->
                  <!--<div class="vconlist_left"><?php echo $this->_tpl_vars['menu18']; ?>
</div>-->
                  <!--<div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>-->
	              <!--<div id="clear"></div>-->
              <!--</a>-->
           <!--</li>-->
		   <!--<li>-->
              <!--<a href="member.php?act=member_myinfo"  <?php if ($this->_tpl_vars['aacct'] == 'member_myinfo'): ?>class="select"<?php endif; ?>>-->
                  <!--<div class="vconlist_left"><?php echo $this->_tpl_vars['menu19']; ?>
</div>-->
                  <!--<div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>-->
	              <!--<div id="clear"></div>-->
              <!--</a>-->
           <!--</li>-->
		  </ul>
        </div>
       



        <div class="vtitle">
				<div class="vtitle_img"><img src="themes/default/images/rbhm/left_10.png" border="0" /></div>
				<div class="vtitle_txt"><?php echo $this->_tpl_vars['menu25']; ?>
</div>
				<div id="clear"></div>
		</div>
        <div class="vcon">
		  <ul class="vconlist clearfix">
		    <li>
               <a href="member.php?act=member_insider" <?php if ($this->_tpl_vars['aacct'] == 'member_insider'): ?>class="select"<?php endif; ?>>
                   <div class="vconlist_left"><?php echo $this->_tpl_vars['menu26']; ?>
</div>
                   <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
                   <div id="clear"></div>
               </a>
            </li>
		    <!--<li>-->
               <!--<a href="member.php?act=list_about" <?php if ($this->_tpl_vars['aacct'] == 'list_about'): ?>class="select"<?php endif; ?>> -->
                   <!--<div class="vconlist_left"><?php echo $this->_tpl_vars['menu27']; ?>
</div>-->
                   <!--<div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>-->
                   <!--<div id="clear"></div>-->
               <!--</a>-->
            <!--</li>-->
		    <li>
                <a href="member.php?act=member_complaint" <?php if ($this->_tpl_vars['aacct'] == 'member_complaint'): ?>class="select"<?php endif; ?>>
                    <div class="vconlist_left"><?php echo $this->_tpl_vars['menu28']; ?>
</div>
                    <div class="vconlist_right"><img src="themes/default/images/rbhm/left_05.png" border="0" /></div>
                    <div id="clear"></div>
                </a>
            </li>
		  </ul>
        </div>

      </div> 