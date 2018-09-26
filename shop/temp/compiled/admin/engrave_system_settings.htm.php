<?php echo $this->fetch('engrave_pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,../js/region.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/editor/kindeditor.js,../js/editor/lang/zh_CN.js,../js/editor/plugins/code/prettify.js')); ?>

<div class="tab-div">
  <!-- tab bar -->
  <div id="tabbar-div">
    <p>
      <?php $_from = $this->_var['group_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');$this->_foreach['bar_group'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bar_group']['total'] > 0):
    foreach ($_from AS $this->_var['group']):
        $this->_foreach['bar_group']['iteration']++;
?>
      	<span class="<?php if ($this->_foreach['bar_group']['iteration'] == 1): ?>tab-front<?php else: ?>tab-back<?php endif; ?>" id="<?php echo $this->_var['group']['code']; ?>-tab">
      		<?php echo $this->_var['group']['name']; ?>
      	</span>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </p>
  </div>
  <!-- tab body -->
  <div id="tabbody-div">
    <form enctype="multipart/form-data" name="theForm" action="?act=post" method="post">
    <?php $_from = $this->_var['group_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');$this->_foreach['body_group'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['body_group']['total'] > 0):
    foreach ($_from AS $this->_var['group']):
        $this->_foreach['body_group']['iteration']++;
?>
    <table width="90%" id="<?php echo $this->_var['group']['code']; ?>-table" <?php if ($this->_foreach['body_group']['iteration'] != 1): ?>style="display:none"<?php endif; ?>>
      <?php $_from = $this->_var['group']['vars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'var');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['var']):
?>
      <?php echo $this->fetch('engrave_system_settings_form.htm'); ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

    <div class="button-div">
      <input name="submit" type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
      <input name="reset" type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
    </div>
    </form>
  </div>
</div>

<?php echo $this->smarty_insert_scripts(array('files'=>'tab.js,validator.js')); ?>

<script language="JavaScript">
KindEditor.ready(function(K) {
	var editor1 = K.create('textarea[id="value215"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value213');
	       },
       	afterBlur:function(){
           this.sync('#value213');
        } 
	});
	var editor2 = K.create('textarea[id="value216"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value214');
	       },
        afterBlur:function(){
           this.sync('#value214');
        } 
	});
	var editor3 = K.create('textarea[id="value118"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value118');
	       },
        afterBlur:function(){
           this.sync('#value118');
        } 
	});
	var editor501 = K.create('textarea[id="value501"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value501');
	       },
        afterBlur:function(){
           this.sync('#value501');
        } 
	});
	var editor502 = K.create('textarea[id="value502"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value502');
	       },
        afterBlur:function(){
           this.sync('#value502');
        } 
	});
	var editor503 = K.create('textarea[id="value503"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value503');
	       },
        afterBlur:function(){
           this.sync('#value503');
        } 
	});
	var editor504 = K.create('textarea[id="value504"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value504');
	       },
        afterBlur:function(){
           this.sync('#value504');
        } 
	});
	var editor505 = K.create('textarea[id="value505"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value505');
	       },
        afterBlur:function(){
           this.sync('#value505');
        } 
	});
	var editor506 = K.create('textarea[id="value506"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value506');
	       },
        afterBlur:function(){
           this.sync('#value506');
        } 
	});
	var editor507 = K.create('textarea[id="value507"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value507');
	       },
        afterBlur:function(){
           this.sync('#value507');
        } 
	});
	var editor508 = K.create('textarea[id="value508"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value508');
	       },
        afterBlur:function(){
           this.sync('#value508');
        } 
	});
	var editor509 = K.create('textarea[id="value509"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value509');
	       },
        afterBlur:function(){
           this.sync('#value509');
        } 
	});
	var editor510 = K.create('textarea[id="value510"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value510');
	       },
        afterBlur:function(){
           this.sync('#value510');
        } 
	});
	var editor511 = K.create('textarea[id="value511"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#value511');
	       },
        afterBlur:function(){
           this.sync('#value511');
        } 
	});
});

region.isAdmin = true;
onload = function()
{
    startCheckOrder();
}
var ReWriteSelected = null;
var ReWriteRadiobox = document.getElementsByName("value[209]");

for (var i=0; i<ReWriteRadiobox.length; i++)
{
  if (ReWriteRadiobox[i].checked)
  {
    ReWriteSelected = ReWriteRadiobox[i];
  }
}

/**
 * 邮件发送测试
 */
function sendEmail()
{
	var s_smtpserver=document.getElementById('value[401]').value;
	var s_smtpmail=document.getElementById('value[402]').value;
	var s_smtpmailaccount=document.getElementById('value[403]').value;
	var s_smtpmailpwd=document.getElementById('value[404]').value;
	var s_smtpport=document.getElementById('value[405]').value;
	var s_smtpsendmail=document.getElementById('value[407]').value;
	 
	Ajax.call('engrave_system_settings.php?act=post_test',
	"email="+s_smtpsendmail+
	"&mail_service=1"+
	"&smtp_host="+s_smtpserver+
	"&smtp_user="+s_smtpmailaccount+
	"&smtp_pass="+s_smtpmailpwd+
	"&smtp_port="+s_smtpport+
	"&reply_email="+s_smtpmailaccount+
	"&mail_charset=UTF-8",
	sendEmail_callback,"POST","JSON");
}
function sendEmail_callback(result)
{
	  alert(result.message);
}

function ReWriterConfirm(sender)
{
  if (sender == ReWriteSelected) return true;
  var res = true;
  if (sender != ReWriteRadiobox[0]) {
    var res = confirm('<?php echo $this->_var['rewrite_confirm']; ?>');
  }

  if (res==false)
  {
      ReWriteSelected.checked = true;
  }
  else
  {
    ReWriteSelected = sender;
  }
  return res;
}
</script>

<?php echo $this->fetch('engrave_pagefooter.htm'); ?>