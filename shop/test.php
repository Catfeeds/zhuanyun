<?php
//http://www.meilele.com/meilele.sql
define('IN_ECS', true);
require('./includes/init.php');
//判断制作红包会话是否存在
$result = $db->getAll("SELECT var_name,var_value FROM ecs_genelral_variable WHERE var_name IN('jsessionid_qr_beifen','jsessionid_redfans_beifen','jsessionid_mch_beifen','jsessionid_redfans','jsessionid_qr','jsessionid_mch')");
foreach($result as $v)
{
	$weixin_sess[$v['var_name']] = $v['var_value'];
}
$array  = array('redfans'=>"http://www.mll3321.com/redfans/redList/list",
				'qr'=>'http://www.mll3321.com/qr/qrcode/list?menuKey=cf:qrcode',
				'mch'=>'http://www.mll3321.com/mch/sys/reply/wechatReply?menuKey=sys:reply'
				);
$redfans = CheckWeiXinLogin($array['redfans'],$weixin_sess['jsessionid_redfans']);
$qr		 = CheckWeiXinLogin($array['qr'],$weixin_sess['jsessionid_qr']);
$mch	 = CheckWeiXinLogin($array['mch'],$weixin_sess['jsessionid_mch']);
$redfans_b	= CheckWeiXinLogin($array['redfans'],$weixin_sess['jsessionid_redfans_beifen']);
$qr_b		= CheckWeiXinLogin($array['qr'],$weixin_sess['jsessionid_qr_beifen']);
$mch_b		= CheckWeiXinLogin($array['mch'],$weixin_sess['jsessionid_mch_beifen']);
if($_GET['check'] == 1)
{
	if($redfans['status'] == 302) echo "<p><h2>redfans过期</h2></p>";
	else echo "<p>redfans正常</p>";
	if($qr['status'] == 302) echo "<p><h2>qr过期</h2></p>";
	else echo "<p>qr正常</p>";
	if($mch['status'] == 302) echo "<p><h2>mch过期</h2></p>";
	else echo "<p>mch正常</p>";
	if($redfans_b['status'] == 302) echo "<p><h2>redfans_beifen过期</h2></p>";
	else echo "<p>redfans_beifen正常</p>";
	if($qr_b['status'] == 302) echo "<p><h2>qr_beifen过期</h2></p>";
	else echo "<p>qr_beifen正常</p>";
	if($mch_b['status'] == 302) echo "<p><h2>mch_beifen过期</h2></p>";
	else echo "<p>mch_beifen正常</p>";
	exit;
}
if($_GET['nagios'] == 1)  //如果输出1，表示都正常，输出2，输出报警，输出3，输出严重错误
{
	if($redfans['status'] == 200 && $qr['status'] == 200 && $mch['status'] == 200)
	{
		if($redfans_b['status'] == 200 && $qr_b['status'] == 200 && $mch_b['status'] == 200)
			echo 1;
		else
			echo 2;
	}
	else
		echo 3;
	exit;
	
}
if($_GET['process'] == 1)
	proceSessExpire($redfans,$qr,$mch,$redfans_b,$qr_b,$mch_b);
function CheckWeiXinLogin($url,$cookie)
{
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_COOKIE,"JSESSIONID=".$cookie);
	curl_setopt($ch, CURLOPT_URL, $url); 
	$output = curl_exec($ch);
	$httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE); 
	curl_close($ch);
	return array('output' => $output,'status' => $httpCode);
}

function proceSessExpire($rf,$q,$m,$rf_b,$q_b,$m_b)
{
	global $weixin_sess,$db;
	if($rf['status'] == 302 && $rf_b['status'] == 200)
	{
		$db->query("UPDATE ecs_genelral_variable SET var_value = '".$weixin_sess['jsessionid_redfans_beifen']."' WHERE var_name = 'jsessionid_redfans'");
		$db->query("UPDATE ecs_genelral_variable SET var_value = '".$weixin_sess['jsessionid_redfans']."' WHERE var_name = 'jsessionid_redfans_beifen'");
		$db->query("INSERT INTO ecs_admin_log(log_time,user_id,log_info,ip_address,type) VALUES(".time().",101,'redfans过期,用redfans_beifen覆盖','127.0.0.1','weixin_check')");
	}
	if($q['status'] == 302 && $q_b['status'] == 200)
	{
		$db->query("UPDATE ecs_genelral_variable SET var_value = '".$weixin_sess['jsessionid_qr_beifen']."' WHERE var_name = 'jsessionid_qr'");
		$db->query("UPDATE ecs_genelral_variable SET var_value = '".$weixin_sess['jsessionid_qr']."' WHERE var_name = 'jsessionid_qr_beifen'");
		$db->query("INSERT INTO ecs_admin_log(log_time,user_id,log_info,ip_address,type) VALUES(".time().",101,'qr过期,用qr_beifen覆盖','127.0.0.1','weixin_check')");
	}
	if($m['status'] == 302 && $m_b['status'] == 200)
	{
		$db->query("UPDATE ecs_genelral_variable SET var_value = '".$weixin_sess['jsessionid_mch_beifen']."' WHERE var_name = 'jsessionid_mch'");
		$db->query("UPDATE ecs_genelral_variable SET var_value = '".$weixin_sess['jsessionid_mch']."' WHERE var_name = 'jsessionid_mch_beifen'");
		$db->query("INSERT INTO ecs_admin_log(log_time,user_id,log_info,ip_address,type) VALUES(".time().",101,'mch过期,用mch_beifen覆盖','127.0.0.1','weixin_check')");
	}
}
?>