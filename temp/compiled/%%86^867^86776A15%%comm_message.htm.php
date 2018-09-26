<?php /* Smarty version 2.6.26, created on 2018-09-24 17:38:51
         compiled from comm_message.htm */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>铭东物流转运系统</title>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/default/css/common.css" rel="stylesheet" type="text/css" />
<link href="themes/default/css/page.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="themes/default/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>
<script type="text/javascript" src="themes/default/js/jquery.smallslider.js" /></script>
<script type="text/javascript" src="themes/default/js/user.js"></script>
<!--[if IE 6]>
<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
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
		 <div class="msg_cr_bot">
	   		<div class="list-div">
				  <div style="background:#FFF; height:300px;padding: 10px 0px; margin: 2px;">
				    <table align="center" width="600" >
				      <tr>
				        <td width="50" valign="top">
				          <?php if ($this->_tpl_vars['msg_type'] == 0): ?>
				          <img src="themes/default/images/information.gif" width="32" height="32" border="0" alt="information" />
				          <?php elseif ($this->_tpl_vars['msg_type'] == 1): ?>
				          <img src="themes/default/images/warning.gif" width="32" height="32" border="0" alt="warning" />
				          <?php else: ?>
				          <img src="themes/default/images/confirm.gif" width="32" height="32" border="0" alt="confirm" />
				          <?php endif; ?>
				        </td>
				        <td style="font-size: 14px; font-weight: bold"><?php echo $this->_tpl_vars['msg_detail']; ?>
</td>
				      </tr>
				      <tr>
				        <td></td>
				        <td id="redirectionMsg">
				          <?php if ($this->_tpl_vars['auto_redirect']): ?><?php echo $this->_tpl_vars['lang']['auto_redirection']; ?>
<?php endif; ?>
				        </td>
				      </tr>
				      <tr>
				        <td></td>
				        <td>
				          <ul style="margin:0; padding:0 10px" class="msg-link">
				            <?php $_from = $this->_tpl_vars['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?>
				            <li><a href="<?php echo $this->_tpl_vars['link']['href']; ?>
" <?php if ($this->_tpl_vars['link']['target']): ?>target="<?php echo $this->_tpl_vars['link']['target']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['link']['text']; ?>
</a></li>
				            <?php endforeach; endif; unset($_from); ?>
				          </ul>
				
				        </td>
				      </tr>
				    </table>
				  </div>
				  </div>
			   </div>
	   </div>
	   <div class="clear"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
<?php if ($this->_tpl_vars['auto_redirect']): ?>
<script language="JavaScript">
<!--
var seconds = 5;
var defaultUrl = "<?php echo $this->_tpl_vars['default_url']; ?>
";

<?php echo '
if(document.all) 
{ 
	window.attachEvent(\'onload\', load);
}
else 
{ 
	window.addEventListener(\'load\', load);
}


function load()
{
  if (defaultUrl == \'javascript:history.go(-1)\' && window.history.length == 0)
  {
    document.getElementById(\'redirectionMsg\').innerHTML = \'\';
    return;
  }
  window.setInterval(redirection, 1000);
}
function redirection()
{
  if (seconds <= 0)
  {
    window.clearInterval();
    return;
  }

  seconds --;
  document.getElementById(\'spanSeconds\').innerHTML = seconds;

  if (seconds == 0)
  {
    window.clearInterval(\'redirection\');
    location.href = defaultUrl;
  }
}
//-->
</script>
'; ?>

<?php endif; ?>