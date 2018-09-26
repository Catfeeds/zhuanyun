<?php date_default_timezone_set("Asia/Shanghai");
	
	$acc_product = $_POST ['ProductName'];
	$acc_name = $_POST ['acc_name'];
	$acc_phone = $_POST ['acc_phone'];
	$acc_tel = $_POST ['acc_tel'];
	$acc_prov = $_POST ['s_prov'];
	$acc_city = $_POST ['s_city'];
	$Price=$_POST['tprice'];
	$acc_area = $_POST ['s_area'];
	$acc_addr = $_POST ['acc_addr'];
	$acc_post = $_POST ['acc_post'];
	$num = $_POST ['num'];
	$shuxing = $_POST ['skuid'];
	$acc_pay = $_POST ['acc_pay'];
	$acc_leaveword=$_POST ['liuyan'];
	$s_province = $_POST ['s_province'];
	$s_city = $_POST ['s_city'];
	$url=$_POST['url'];
	
	$isSubmit=$_POST['submit'];

	 
	try{
	//$realip =getenv("REMOTE_ADDR");// $_SERVER ["REMOTE_ADDR"]; // 客户端IP
    $realip="1.1.1.1 , 123";
	if (getenv("HTTP_CLIENT_IP"))
	$realip = getenv("HTTP_CLIENT_IP");
	else if(getenv("HTTP_X_FORWARDED_FOR"))
	$realip = getenv("HTTP_X_FORWARDED_FOR");
	else if(getenv("REMOTE_ADDR"))
	$realip = getenv("REMOTE_ADDR");
	else $realip = "Unknow";

	$curtime = time ();
	
	// 把当前客户端IP和时间存入到文件中去
	// 先判断ip是否已经存在
	$file = fopen ( "iptime", "r+" ) or exit ( "Unable to open file!" );
    $opt = 0;
	$strs = array ();
	while ( ! feof ( $file ) ) {
		$strs = split ( ',', fgets ( $file ) );
		if (strcmp ( $realip, trim($strs [0] ))==0) {
			// 如果相等则取出时间比较
			if (($curtime - ( int ) trim($strs [1])) > 0*60 ) {
				$opt=2;
				break;
			} else {
				// 替换文件中的内容
				$opt =2;
				break;
			}
		} else {
			$opt = 2;
		}
	}
	fclose ( $file );

	
	if (( int ) $opt == 1) {
		$content = @file_get_contents ( 'iptime' );
		if (! $content) {
			return false;
		}
		$content = str_replace ( $strs [0] . ',' . $strs [1], $strs [0] . ',' . $curtime, $content );
		file_put_contents ( 'iptime', $content );
		
		//重新添加
		
	} else if (( int ) $opt == 2) {
		$handle = fopen ( 'iptime', "a" );
		$str = fwrite ( $handle, $realip . ',' . $curtime . "\n" );
		fclose ( $handle );
	} else {
		echo "<script language='javascript'type='text/javascript'>";
		echo "alert('30分钟内你只能提交一次！');";
		echo "window.location.href=\"/kyyh/taobao\"";
		echo "</script>";
	}
	
	if (( int ) $opt == 1||(int)$opt==2) {
			//设置订单号
		$orderContent = @file_get_contents ( 'orderID' );
		if (! $orderContent) {
			$opt=1;
		}else{
			$orderID=$orderContent;
			file_put_contents ( 'orderID', $orderContent+1 );	
		}
		
		// 发送的内容
		//$con = '选择的产品:' . $acc_product . '</br>';
		//$con = $con . '订单号：' . $orderID . '</br>';
		//$con = $con . '用户名：' . $acc_name . '</br>';
		//$con = $con . '手机：' . $acc_phone . '</br>';
		//$con = $con . '固定电话：' . $acc_tel . '</br>';
		//$con = $con . '所在地区：' . $acc_prov . ',' . $acc_city . ',' . $acc_area . '</br>';
		//$con = $con . '详细地址：' . $acc_addr . '</br>';
		//$con = $con . '邮编：' . $acc_post . '</br>';
		//$con = $con . '付款方式：' . $acc_pay . '</br>';
		//$con = $con . '留言：' . $acc_leaveword . '</br>';
		//$con = $con . 'ip:' . $realip;
		// 获取到的数据发送到邮箱
		//$to = "458485491@qq.com"; // 邮件接受者
		//$subject = "订单"; // 邮件的主题
		
		$con=$con.'<p>【订单编号】：<font color="#BD0000">'.$orderID.'</font></p';
		$con=$con.'<P>【订购产品】：'.$acc_product.'</P>';
		$con=$con.'<P>【数量】：'.$num.'</P>';
		$con=$con.'<P>【总价】：'.$Price.'</P>';
		$con=$con.'<P>【产品属性】：'.$shuxing.'</P>';
		$con=$con.'<P>【收货姓名】：'.$acc_name.'</P>';
		$con=$con.'<P>【所在地区】：'.$acc_prov.$acc_city.$acc_area.'</P>';
		$con=$con.'<P>【详细地址】：'.$s_province.$s_city.$acc_addr.'</P>';
		$con=$con.'<P>【邮政编码】：'.$acc_post.'</P>';
		$con=$con.'<P>【手机号码】：<a href="http://www.baidu.com/s?wd='.$acc_phone.'">'.$acc_phone.'</a></P>';
		$con=$con.'<P>【座机电话】：'.$acc_tel.'</P>';
		$con=$con.'<P>【付款方式】：'.$acc_pay.'</P>';
		$con=$con.'<P>【留言备注】：'.$acc_leaveword.'</P>';
		$con=$con.'<P>【下单页面】：<a href="'.$url.'">'.$url.'</a></P>';
		$con=$con.'<P>【下单人IP】：<a href="http://www.baidu.com/s?wd='.$_SERVER[REMOTE_ADDR].'">'.$_SERVER[REMOTE_ADDR].'</a></P>';
		
		//$headers = "MIME-Version: 1.0" . "\r\n";
		//$headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
		//$headers .= 'From: <c_changke2268@163.com>' . "\r\n";
		//mail ( $to, $subject, $con,$headers);
		
		require("./stmp.php");
		$smtpserver = "smtp.163.com";//SMTP服务器
		$smtpserverport =25;//SMTP服务器端口
		$smtpusermail = "c_changke2268@163.com";//SMTP服务器的用户邮箱
		$smtpemailto = "458485491@qq.com";//发送给谁
		$smtpuser = "c_changke2268@163.com";//SMTP服务器的用户帐号
		$smtppass = "cchangke2268";//SMTP服务器的用户密码
		$mailsubject = "狗粮";//邮件主题
		$mailbody = $con;//邮件内容
		$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
		$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
		$smtp->debug = 0;//是否显示发送的调试信息 1=?ture 0=>faile
		$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
	}
	}catch(Exception $e){
		print $e->getMessage();
		exit();
	}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>购买成功</title>
    <link href="css/global.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>
<body>
    <style>
        img {
            max-width: 100%;
            display: block;
            margin: 0 auto;
            border-radius: 3px;
            margin-bottom:10px;
        }
    </style>
    <div class="mod_bar" id="header_normal">
        <a href="http://vip.tea7.com/product/detail/si465413230" class="mod_bar_back" id="back_button">返回</a>
        <div class="mod_bar_tit">购买成功</div>
        <a href="javascript:void(0);" class="mod_bar_share" id="share_button">分享</a>
    </div>
    <div class="pay_tip">
        <i class="icon_success"></i>
        <div class="txt">
            <h2>购买成功</h2>
            <div class="sub_tit">您已成功下单，请保持电话畅通！<br /></div>
            <div class="link_wrap link_wrap_all">
                <a id="goDealList" href="javascript:;">微信服务号: yztea513</a>
            </div>
        </div>
        
    </div>
    <a href="javascript:;" class="shoplk" id="shopUrl"><span class="shoplk_inner" id="shopName">去<b>茶七网旗舰店</b>看看其他好货</span></a>

    <div style="display:none">
        <a href="http://www.51.la/?17581755" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/17581755.asp" style="border:none" /></a>
    </div>
    <script type="text/javascript">
        var _mvq = window._mvq || [];
        window._mvq = _mvq;
        _mvq.push(['$setAccount', 'm-131119-0']);

        _mvq.push(['$setGeneral', 'ordercreate', '', /*用户名*/ '', /*用户id*/ '']);
        _mvq.push(['$logConversion']);
        _mvq.push(['$addOrder',/*订单号*/ '321', /*订单金额*/ '123']);
        _mvq.push(['$addItem', /*订单号*/ '3212', /*商品id*/ '22221', /*商品名称*/ '32123123', /*商品价格*/ '155', /*商品数量*/ '1', /*商品页url*/ 'drtert', /*商品页图片url*/ '123123']);
        _mvq.push(['$logData']);
    </script>

    <script type="text/javascript">
        var _mvq = window._mvq || [];
        window._mvq = _mvq;
        _mvq.push(['$setAccount', 'm-131119-0']);

        _mvq.push(['$logConversion']);
        (function () {
            var mvl = document.createElement('script');
            mvl.type = 'text/javascript'; mvl.async = true;
            mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(mvl, s);
        })();

    </script>
</body>

</html>

