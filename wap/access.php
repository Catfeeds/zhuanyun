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
	//$realip =getenv("REMOTE_ADDR");// $_SERVER ["REMOTE_ADDR"]; // �ͻ���IP
    $realip="1.1.1.1 , 123";
	if (getenv("HTTP_CLIENT_IP"))
	$realip = getenv("HTTP_CLIENT_IP");
	else if(getenv("HTTP_X_FORWARDED_FOR"))
	$realip = getenv("HTTP_X_FORWARDED_FOR");
	else if(getenv("REMOTE_ADDR"))
	$realip = getenv("REMOTE_ADDR");
	else $realip = "Unknow";

	$curtime = time ();
	
	// �ѵ�ǰ�ͻ���IP��ʱ����뵽�ļ���ȥ
	// ���ж�ip�Ƿ��Ѿ�����
	$file = fopen ( "iptime", "r+" ) or exit ( "Unable to open file!" );
    $opt = 0;
	$strs = array ();
	while ( ! feof ( $file ) ) {
		$strs = split ( ',', fgets ( $file ) );
		if (strcmp ( $realip, trim($strs [0] ))==0) {
			// ��������ȡ��ʱ��Ƚ�
			if (($curtime - ( int ) trim($strs [1])) > 0*60 ) {
				$opt=2;
				break;
			} else {
				// �滻�ļ��е�����
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
		
		//�������
		
	} else if (( int ) $opt == 2) {
		$handle = fopen ( 'iptime', "a" );
		$str = fwrite ( $handle, $realip . ',' . $curtime . "\n" );
		fclose ( $handle );
	} else {
		echo "<script language='javascript'type='text/javascript'>";
		echo "alert('30��������ֻ���ύһ�Σ�');";
		echo "window.location.href=\"/kyyh/taobao\"";
		echo "</script>";
	}
	
	if (( int ) $opt == 1||(int)$opt==2) {
			//���ö�����
		$orderContent = @file_get_contents ( 'orderID' );
		if (! $orderContent) {
			$opt=1;
		}else{
			$orderID=$orderContent;
			file_put_contents ( 'orderID', $orderContent+1 );	
		}
		
		// ���͵�����
		//$con = 'ѡ��Ĳ�Ʒ:' . $acc_product . '</br>';
		//$con = $con . '�����ţ�' . $orderID . '</br>';
		//$con = $con . '�û�����' . $acc_name . '</br>';
		//$con = $con . '�ֻ���' . $acc_phone . '</br>';
		//$con = $con . '�̶��绰��' . $acc_tel . '</br>';
		//$con = $con . '���ڵ�����' . $acc_prov . ',' . $acc_city . ',' . $acc_area . '</br>';
		//$con = $con . '��ϸ��ַ��' . $acc_addr . '</br>';
		//$con = $con . '�ʱࣺ' . $acc_post . '</br>';
		//$con = $con . '���ʽ��' . $acc_pay . '</br>';
		//$con = $con . '���ԣ�' . $acc_leaveword . '</br>';
		//$con = $con . 'ip:' . $realip;
		// ��ȡ�������ݷ��͵�����
		//$to = "458485491@qq.com"; // �ʼ�������
		//$subject = "����"; // �ʼ�������
		
		$con=$con.'<p>��������š���<font color="#BD0000">'.$orderID.'</font></p';
		$con=$con.'<P>��������Ʒ����'.$acc_product.'</P>';
		$con=$con.'<P>����������'.$num.'</P>';
		$con=$con.'<P>���ܼۡ���'.$Price.'</P>';
		$con=$con.'<P>����Ʒ���ԡ���'.$shuxing.'</P>';
		$con=$con.'<P>���ջ���������'.$acc_name.'</P>';
		$con=$con.'<P>�����ڵ�������'.$acc_prov.$acc_city.$acc_area.'</P>';
		$con=$con.'<P>����ϸ��ַ����'.$s_province.$s_city.$acc_addr.'</P>';
		$con=$con.'<P>���������롿��'.$acc_post.'</P>';
		$con=$con.'<P>���ֻ����롿��<a href="http://www.baidu.com/s?wd='.$acc_phone.'">'.$acc_phone.'</a></P>';
		$con=$con.'<P>�������绰����'.$acc_tel.'</P>';
		$con=$con.'<P>�����ʽ����'.$acc_pay.'</P>';
		$con=$con.'<P>�����Ա�ע����'.$acc_leaveword.'</P>';
		$con=$con.'<P>���µ�ҳ�桿��<a href="'.$url.'">'.$url.'</a></P>';
		$con=$con.'<P>���µ���IP����<a href="http://www.baidu.com/s?wd='.$_SERVER[REMOTE_ADDR].'">'.$_SERVER[REMOTE_ADDR].'</a></P>';
		
		//$headers = "MIME-Version: 1.0" . "\r\n";
		//$headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
		//$headers .= 'From: <c_changke2268@163.com>' . "\r\n";
		//mail ( $to, $subject, $con,$headers);
		
		require("./stmp.php");
		$smtpserver = "smtp.163.com";//SMTP������
		$smtpserverport =25;//SMTP�������˿�
		$smtpusermail = "c_changke2268@163.com";//SMTP���������û�����
		$smtpemailto = "458485491@qq.com";//���͸�˭
		$smtpuser = "c_changke2268@163.com";//SMTP���������û��ʺ�
		$smtppass = "cchangke2268";//SMTP���������û�����
		$mailsubject = "����";//�ʼ�����
		$mailbody = $con;//�ʼ�����
		$mailtype = "HTML";//�ʼ���ʽ��HTML/TXT��,TXTΪ�ı��ʼ�
		$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤.
		$smtp->debug = 0;//�Ƿ���ʾ���͵ĵ�����Ϣ 1=?ture 0=>faile
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
    <title>����ɹ�</title>
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
        <a href="http://vip.tea7.com/product/detail/si465413230" class="mod_bar_back" id="back_button">����</a>
        <div class="mod_bar_tit">����ɹ�</div>
        <a href="javascript:void(0);" class="mod_bar_share" id="share_button">����</a>
    </div>
    <div class="pay_tip">
        <i class="icon_success"></i>
        <div class="txt">
            <h2>����ɹ�</h2>
            <div class="sub_tit">���ѳɹ��µ����뱣�ֵ绰��ͨ��<br /></div>
            <div class="link_wrap link_wrap_all">
                <a id="goDealList" href="javascript:;">΢�ŷ����: yztea513</a>
            </div>
        </div>
        
    </div>
    <a href="javascript:;" class="shoplk" id="shopUrl"><span class="shoplk_inner" id="shopName">ȥ<b>�������콢��</b>���������û�</span></a>

    <div style="display:none">
        <a href="http://www.51.la/?17581755" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/17581755.asp" style="border:none" /></a>
    </div>
    <script type="text/javascript">
        var _mvq = window._mvq || [];
        window._mvq = _mvq;
        _mvq.push(['$setAccount', 'm-131119-0']);

        _mvq.push(['$setGeneral', 'ordercreate', '', /*�û���*/ '', /*�û�id*/ '']);
        _mvq.push(['$logConversion']);
        _mvq.push(['$addOrder',/*������*/ '321', /*�������*/ '123']);
        _mvq.push(['$addItem', /*������*/ '3212', /*��Ʒid*/ '22221', /*��Ʒ����*/ '32123123', /*��Ʒ�۸�*/ '155', /*��Ʒ����*/ '1', /*��Ʒҳurl*/ 'drtert', /*��ƷҳͼƬurl*/ '123123']);
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

