<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

    <meta name="viewport" content="width=device-width" />
    <title>ȷ����Ϣ</title>
    <script src="http://static.zcool.com.cn/v1.1.13/scripts/jquery-1.7.2.min.js"></script>
    <link href="css/buy_v2.min.css" rel="stylesheet" />
    <link href="css/global.css" rel="stylesheet" />
    <script src="js/product.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>
<body>
    <div class="mod_bar">
        <a href="http://vip.tea7.com/product/detail/si465413230" id="indexBack" class="mod_bar_back">����</a>
        <div class="mod_bar_tit" id="indexTitle">ȷ����Ϣ</div>
    </div>
<form  action="access.php" method="post">
     <input type="hidden" value="��ɰ���ײ�� ������ ʵľ���� ��ͼ������ ֧�ֻ�������" name="ProductName">
        <input type="hidden" value="si465413230" name="TagName">
        <input type="hidden" value="http://img04.taobaocdn.com/imgextra/i4/1021620507/TB2_DkPbpXXXXarXXXXXXXXXXXX_!!1021620507.jpg" name="CheckoutPicuter">
        <div id="content">
            <div id="c_paipai.address_edit">
                <div class="wx_bar">
                    <div class="wx_bar_back">
                        <a id="back" href="javascript:void(0);"></a>
                    </div>
                </div>
                <div class="wx_wrap">
                    <div class="address_new" id="city">
                        <input type="hidden" id="address_regionId" value=""><input type="hidden" id="adid" value=""> <p>
                            <label for="name">
                                <span class="tit">�ջ���</span><input type="text" id="bname" name="acc_name" value="" placeholder="����">
                            </label>
                        </p> <p>
                            <label for="mobile">
                                <span class="tit">�ֻ�����</span>
                                <input type="number" id="mobile" name="acc_phone" value="" placeholder="�ֻ�����">
                            </label>
                        </p>
                        <p>
                            <label for="adinfo">
                                <span class="tit">��ϸ��ַ</span>
                                <input id="adinfo" name="acc_addr" value="" type="text" placeholder="��ϸ��ַ">
                            </label>
                        </p>
                    </div>

                    <div class="order">
                        <div class="order_hd">
                            <div class="order_shop">
                                <span id="showShopName">Զ��</span>
                            </div>
                        </div><div class="order_bd">
                            <div class="order_glist" id="orderList">
                                <div class="only">
                                    <div class="order_goods">
                                        <div class="order_goods_img">
                                            <img src="http://img04.taobaocdn.com/imgextra/i4/1021620507/TB2_DkPbpXXXXarXXXXXXXXXXXX_!!1021620507.jpg" alt=" ">
                                        </div><div class="order_goods_info">
                                            <div class="order_goods_name">
                                                <span id="tuanLbl">
                                                </span>
                                            </div><div class="order_goods_attr">
                                                <p class="order_goods_attr_item">
                                                    <span style="color:#FF0000; font-weight:600;"><?php echo $_POST['SpecName'];?></span>
                                                    <input id="attr" type="hidden" name="skuid" value="CJA020006ȫ��˫��">
													 <input  type="hidden" name="shuxing" value="<?php echo $_POST['SpecName'];?>">
                                                     <input type="hidden"  name="url" value="<?php echo $_POST['url'];?>">
                                                </p><div class="order_goods_attr_item"><span class="order_goods_attr_tit">������</span><div class="order_goods_num"><span class="minus minus_disabled" id="minus"></span><input maxlength="4" name="num" class="num" type="tel" id="buyNum" max="10" value="1"><span class="plus" id="plus"></span></div><div class="order_goods_price" id="goodsPrice"><i>��</i><?php echo $_POST['Price'];?><i>/��</i></div></div>
                                                <input id="price" type="hidden" name="Price" value="<?php echo $_POST['Price'];?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="order_post" id="shippingList">
                                <div class="order_post_info">
                                    <span class="order_post_tit">���ͷ�ʽ��</span>
                                    <span class="order_post_opt noafter" id="selectedShipping">��ͨ��ݣ����˷�</span>
                                </div>
                                <ul class="order_post_detail" id="shipping"></ul>
                            </div>
                            <div class="order_msg" id="orderMsg">
                                <textarea placeholder="����������" id="message_0" name="liuyan" class="order_msg_textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="pay_area" style="-webkit-transform-origin: 0px 0px; opacity: 1; -webkit-transform: scale(1, 1);">
                        <div class="total">
                            �ܼۣ�<span class="total_price" id="totalPrice">��<?php echo $_POST['Price'];?></span><input id="tprice" type="hidden" value="" name="tprice">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height:55px;"></div>
        <div class="btn_wrap btn_wrap_fixed btn_wrap_nocart btn_wrap_paipai " style="-webkit-transform: translateY(0px); display:block;" id="buyAreaBtm">
            <div class="fixedopt" id="buyAreaBtn_ctl">
               
				<input type="submit" class="fixedopt_buybtn" id="codGoPayFloat" style="background-color: #3884ff" value="ȷ���µ� (��������)">
            </div>
        </div>
</form>    <div style="display:none">
        <a href="http://www.51.la/?17581755" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/17581755.asp" style="border:none" /></a>
    </div>

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
