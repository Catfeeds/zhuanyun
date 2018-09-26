<!DOCTYPE html>
<html lang="zh-CN" class="detail_standard">
<head>
    <meta charset="GBK">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>商品详情</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link href="css/global.css" rel="stylesheet" />
    <link href="css/product.css" rel="stylesheet" />
    
    <link href="cdn.bootcss.com/Swiper/2.7.0/idangerous.swiper.min.css" rel="stylesheet" />
    <script src="static.zcool.com.cn/v1.1.13/scripts/jquery-1.7.2.min.js"></script>
    
    <script src="cdn.bootcss.com/Swiper/2.7.0/idangerous.swiper.min.js"></script>
    <script src="js/product.js"></script>
</head>
<body>



    
<div class="mod_bar" id="header_normal">
    <div class="mod_bar_tit">商品详情</div>
</div>

<div class="mod_slider" id="loopImgDiv">
    <div class="inner">
        <div class="pic_list" id="loopImgUl">
            <div style="height:200px; width:100%;background:#ffffff url(http://img04.taobaocdn.com/imgextra/i4/1021620507/TB2P1IebpXXXXa_XXXXXXXXXXXX_!!1021620507.jpg) no-repeat center center;"></div>
        </div>
    </div>
    <div class="bar_wrap"></div>
</div>
<form action="checkout.php" id="checkout" method="post">    <div class="buy_area">
        <div class="fn_wrap fn_wrap_fav">
            <h1 class="fn" id="itemName">
                紫砂整套茶具 功夫茶具 实木茶盘 含图中所有 支持货到付款
            </h1>
            <a class="fav_wrap" id="fav" href="javascript:;">
                <div class="btn_pp"></div>
                <div class="txt">关注</div>
            </a>
        </div>
        <div class="buyinfo" id="buyinfoCount">
            <div class="buyinfo_price">
                <span class="buyinfo_price_tit" id="priceTitle">活动价：</span>
                <span class="buyinfo_price_now" id="priceSale">￥199.00</span>
                <span class="buyinfo_price_count"> /件</span>
                <del class="buyinfo_price_old"><em id="priceMarket">￥398</em></del><br />
            </div>
            <div class="buyinfo_sale">
                <span class="buyinfo_sale_item"><i>销量：</i><b id="saleNo">12832</b>件</span>
            </div>
            <div class="buyinfo_post">
                <span class="buyinfo_post_item" id="postPrice"><i>邮费：</i>免运费</span>
            </div>
        </div>
        <div class="promolist">
            <p style="padding-left:10px; height:25px;line-height:25px;"><span id="skuStock" data-seconds="2914"></span></p>
        </div>
        <div class="sku" id="skuCont">
            <div class="skuselect" id="skuEnter">
                <span class="skuselect_txt" id="skuTitle">选择颜色</span>
            </div>
            <div class="sku_container">
                <div class="sku_wrap">
                    <div id="propertyDiv">
                        <div class="sku_item">
                            <h3>颜色</h3>
                            <div class="sku_list" data-propname="颜色">
                                    <span class="option option_selected" data="CJA020006全黑双用">紫砂全黑</span>
                                    <span class="option " data="CJA020006内白双用">紫砂内白</span>
                                    <span class="option " data="CJA020006茶圣双用">玉瓷茶圣</span>
                            </div>
                        </div>
                    </div>
                    <div class="sku sku_num">
                        <h3>数量:</h3>
                        <div class="num_wrap">
                            <span class="minus" id="minus"></span>
                            <input class="num" id="buyNum" name="Num" type="tel" value="1">
                            <span class="plus" id="plus"></span>
                        </div>
                        <div class="stock_num">
                            <div class="inner">
                                <div id="buyLimit"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sku_tip" id="skuNotice" style="display:none">
            <span id="skuTitle2"></span>
        </div>
        <div class="btn_wrap btn_wrap_static" style="display:none">
            <a class="btn btn_buy" id="buyBtn1" href="javascript:;" style="width:100%">立即购买</a>
        </div>
    </div>
    <div class="shop_info_wrap" id="shop_into_btn">
        <div class="name_wrap">
            <a class="shop_name" id="shopName">茶七网旗舰店</a><span style="padding-left:10px;">热线:</span><a href="wtai://wp/mc;4009993513"> 400-9993-513</a>
            <div class="credit_wrap">
                <span class="credit" id="dsrP"><span style="width: 95%"></span></span>
                <span class="num" id="dsrNum">4.9</span>
            </div>
        </div>
        <div class="shop_info_btn">
            <a class="btn btn_shop" href="#" id="shopUrl">进入店铺<i class="arr_r_s"></i></a>
        </div>
    </div>
    <div class="mod_tab_wrap">
        <div class="mod_tab" id="detailTab">
            <span class="cur" id="tab1">商品介绍</span>
            <span class="" id="tab2">商品参数</span>
            <span class="" id="tab3">评价(<em id="evalNum">2834</em>)</span>
        </div>
    </div>
    <div class="detail_info_wrap">
        <div class="detail_list" id="detailCont">
            <div class="detail_item p_desc" id="detail_tab1">
                <div id="commDesc" class="detail_pc">
                    <!-- 商品介绍 开始-->
                    <img src="img03.taobaocdn.com/imgextra/i3/1021620507/TB2id2NbpXXXXXBXpXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img03.taobaocdn.com/imgextra/i3/1021620507/TB2oGfObpXXXXc1XXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img02.taobaocdn.com/imgextra/i2/1021620507/TB2Ha6QbpXXXXcXXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img04.taobaocdn.com/imgextra/i4/1021620507/TB2LfbObpXXXXXuXpXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img02.taobaocdn.com/imgextra/i2/1021620507/TB20X6PbpXXXXcJXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img04.taobaocdn.com/imgextra/i4/1021620507/TB2cBfObpXXXXc.XXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img02.taobaocdn.com/imgextra/i2/1021620507/TB2W3LNbpXXXXXIXpXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img03.taobaocdn.com/imgextra/i3/1021620507/TB2GfzSbpXXXXaQXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img04.taobaocdn.com/imgextra/i4/1021620507/TB2HXzMbpXXXXXTXpXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img04.taobaocdn.com/imgextra/i4/1021620507/TB2E22RbpXXXXbzXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img03.taobaocdn.com/imgextra/i3/1021620507/TB2Eu_WbpXXXXXwXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img01.taobaocdn.com/imgextra/i1/1021620507/TB2N3HVbpXXXXX7XXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img01.taobaocdn.com/imgextra/i1/1021620507/TB2DWbObpXXXXXjXpXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img02.taobaocdn.com/imgextra/i2/1021620507/TB2ujfTbpXXXXa7XXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img04.taobaocdn.com/imgextra/i4/1021620507/TB2yxvQbpXXXXb_XXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img02.taobaocdn.com/imgextra/i2/1021620507/TB2HSbLbpXXXXaIXpXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img03.taobaocdn.com/imgextra/i3/1021620507/TB2V_fUbpXXXXaqXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img01.taobaocdn.com/imgextra/i1/1021620507/TB2_y6MbpXXXXXSXpXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img01.taobaocdn.com/imgextra/i1/1021620507/TB2rUzUbpXXXXadXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img01.taobaocdn.com/imgextra/i1/1021620507/TB26ZLPbpXXXXcGXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img04.taobaocdn.com/imgextra/i4/1021620507/TB2.QDWbpXXXXXfXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img01.taobaocdn.com/imgextra/i1/1021620507/TB2CvHTbpXXXXa7XXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img03.taobaocdn.com/imgextra/i3/1021620507/TB2IGbMbpXXXXaGXpXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img03.taobaocdn.com/imgextra/i3/1021620507/TB2tL6UbpXXXXayXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img02.taobaocdn.com/imgextra/i2/1021620507/TB2elYQbpXXXXbDXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img04.taobaocdn.com/imgextra/i4/1021620507/TB2IjYUbpXXXXalXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img01.taobaocdn.com/imgextra/i1/1021620507/TB2voYTbpXXXXaMXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img03.taobaocdn.com/imgextra/i3/1021620507/TB2UtDMbpXXXXadXpXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img01.taobaocdn.com/imgextra/i1/1021620507/TB2jVHObpXXXXXHXpXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img03.taobaocdn.com/imgextra/i3/1021620507/TB2wqYRbpXXXXbJXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img03.taobaocdn.com/imgextra/i3/1021620507/TB2VOnQbpXXXXb0XXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img02.taobaocdn.com/imgextra/i2/1021620507/TB2eZnPbpXXXXb4XXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img02.taobaocdn.com/imgextra/i2/1021620507/TB2t86WbpXXXXcPXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img01.taobaocdn.com/imgextra/i1/1021620507/TB2XdbObpXXXXc8XXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img04.taobaocdn.com/imgextra/i4/1021620507/TB2EInLbpXXXXaMXpXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img04.taobaocdn.com/imgextra/i4/1021620507/TB2FC6HbpXXXXb3XpXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img02.taobaocdn.com/imgextra/i2/1021620507/TB20xLMbpXXXXadXpXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img01.taobaocdn.com/imgextra/i1/1021620507/TB27sHRbpXXXXbCXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img01.taobaocdn.com/imgextra/i1/1021620507/TB2Ek_PbpXXXXclXXXXXXXXXXXX_!!1021620507.jpg" /><br />
                    <img src="img04.taobaocdn.com/imgextra/i4/1021620507/TB28L2UbpXXXXaIXXXXXXXXXXXX_!!1021620507.jpg" />
                    <!-- 商品介绍 结束-->
                </div>
            </div>
            <!-- 商品参数 -->
            <div class="detail_item p_prop" id="detail_tab2">
                <table class="param_table">
                    <tbody id="detParam">
                            <tr>
                                    <td>品牌</td>
                                    <td>远致</td>
                            </tr>
                            <tr>
                                    <td>产地</td>
                                    <td>宜兴</td>
                            </tr>
                            <tr>
                                    <td>茶具材质</td>
                                    <td>陶瓷/紫砂</td>
                            </tr>
                            <tr>
                                    <td>茶盘材质</td>
                                    <td>实木</td>
                            </tr>
                            <tr>
                                    <td>内件清单</td>
                                    <td>电茶壶x1、实木茶盘x1、茶壶x1、盖碗x1、公道杯x1、品茗杯x10、闻香杯x4、茶宠x1、茶叶罐x1、茶叶x1包、养壶笔x1、茶巾x1、杯叉x1、茶滤组x1、尿童x2、茶洗x1、茶夹x1</td>
                            </tr>
                            <tr>
                                    <td>货到付款</td>
                                    <td>支持</td>
                            </tr>
                            <tr>
                                    <td>破损包赔</td>
                                    <td>支持</td>
                            </tr>
                </table>
            </div>
            <!-- 评论 -->
            <div class="detail_item p_cmt" id="detail_tab3">
                <ul class="cmt_list" id="evalDet">
                        <li>
                            <h3 class="cmt_cnt">茶具实物很不错，非常的漂亮，很精致，质量也好，颜色正，和图片描述一致，赞！</h3>
                            <div class="cmt_sku">
                                <span>紫砂内白</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">鲍****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">包装得很好 没有破损 非常满意</h3>
                            <div class="cmt_sku">
                                <span>紫砂全黑</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">尹****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">质量非常好，跟图片一模一样，卖家也非常热情，很满意的一次购物</h3>
                            <div class="cmt_sku">
                                <span>紫砂全黑</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">苗****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">不好意思确认晚了，东西很好很喜欢没有破碎，非常漂亮物流很快，满意！</h3>
                            <div class="cmt_sku">
                                <span>紫砂全黑</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">昌****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">茶具刚刚收到，打开一看非常惊喜，质量非常的好 非常满意</h3>
                            <div class="cmt_sku">
                                <span>紫砂内白</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">平****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">快递很给力，拍下后客服马上就电话跟我确认订单，当天就发货了</h3>
                            <div class="cmt_sku">
                                <span>紫砂全黑</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">吕****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">茶具很满意，非常的漂亮，质量也好</h3>
                            <div class="cmt_sku">
                                <span>紫砂全黑</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">何****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">大赞，满意！壶的封闭性很好，一套都很满意，强烈推荐，下次再介绍朋友来</h3>
                            <div class="cmt_sku">
                                <span>紫砂内白</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">潘****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">茶具很不错，东西齐全，质量也好，非常喜欢</h3>
                            <div class="cmt_sku">
                                <span>紫砂内白</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">韩****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">很不错的茶具，外观漂亮，质量也很好，这个价钱买到非常值得，礼物更是漂亮，服务也好，很不错的店铺，谢谢店家</h3>
                            <div class="cmt_sku">
                                <span>紫砂内白</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">朱****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">不错，物有所值，很漂亮的茶具，很喜欢，跟图片一模一样！</h3>
                            <div class="cmt_sku">
                                <span>紫砂内白</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">方****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">买来送给客人的，非常满意，茶具很好没异味，高端大气上档次</h3>
                            <div class="cmt_sku">
                                <span>紫砂内白</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">鲍****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">用了几天茶具没问题，质量好，也挺漂亮，和图片描述一模一样，有档次，摆客厅里很有范儿</h3>
                            <div class="cmt_sku">
                                <span>紫砂内白</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">戚****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">这个价格买到这套茶具真心实惠啊，快递包装严实，茶具精美，推荐！</h3>
                            <div class="cmt_sku">
                                <span>紫砂内白</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">唐****</span>
                                <span class="date">2015/6/29</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">感觉这个价钱能买到这样的东西非常值得，质量非常的好，跟图片的一模一样，价格也便宜，下次送人再来买，感觉大气，非常满意</h3>
                            <div class="cmt_sku">
                                <span>紫砂内白</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">雷****</span>
                                <span class="date">2015/6/28</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">送朋友的，质量很好，很齐全，朋友很喜欢，赞一个</h3>
                            <div class="cmt_sku">
                                <span>紫砂内白</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">卫****</span>
                                <span class="date">2015/6/28</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">茶具很精美，这个价钱购买真心值！朋友看到也入手了，店家很热情</h3>
                            <div class="cmt_sku">
                                <span>紫砂全黑</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">傅****</span>
                                <span class="date">2015/6/28</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">很不错的茶具，质量相当好，这个价钱值了，下次肯定再来</h3>
                            <div class="cmt_sku">
                                <span>紫砂内白</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">孟***</span>
                                <span class="date">2015/6/28</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">一套很齐全，很满意，性价比高，无异味，有档次，服务真心的好</h3>
                            <div class="cmt_sku">
                                <span>紫砂全黑</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">计****</span>
                                <span class="date">2015/6/28</span>
                            </div>
                        </li>
                        <li>
                            <h3 class="cmt_cnt">好评！</h3>
                            <div class="cmt_sku">
                                <span>紫砂内白</span>
                            </div>
                            <div class="cmt_user">
                                <span class="user">水****</span>
                                <span class="date">2015/6/28</span>
                            </div>
                        </li>
                </ul>
                <div id="eveaLoading"></div>
                <br><br><br><br><br>
            </div>
        </div>
    </div>
    <input type="hidden" value="199" name="Price">
    <input type="hidden" value="紫砂全黑" name="SpecName">
    <input type="hidden" value="CJA020006全黑双用" name="SkuId">
    <input type="hidden" value="<?php echo $_GET['id'];?>" name="CheckoutPicuter">
    <input type="hidden" value="紫砂整套茶具 功夫茶具 实木茶盘 含图中所有 支持货到付款" name="ProductName">
    <input type="hidden" value="si465413230" name="TagName">
    <input type="hidden"  name="url" value="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];?>">
    <div class="btn_wrap btn_wrap_fixed btn_wrap_nocart btn_wrap_paipai " style="-webkit-transform: translateY(0px); display:block;" id="buyAreaBtm">
        <div class="fixedopt" id="buyAreaBtn_ctl">
            <a class="fixedopt_buybtn" id="buyBtn2" href="javascript:document.getElementById('checkout').submit();">立即购买</a>
        </div>
    </div>
</form><div style="display:none">
    <a href="http://www.51.la/?17581755" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="img.users.51.la/17581755.asp.html" style="border:none" /></a>
</div>
<script>
    $(function () {
        //var headHeight = 200;  //这个高度其实有更好的办法的。使用者根据自己的需要可以手工调整。
        var headHeight = $('#detailTab').offset().top;
        var nav = $("#detailTab");
        $(window).scroll(function () {
            if ($(this).scrollTop() > headHeight) {
                nav.addClass("mod_tab_fixed");
            }
            else {
                nav.removeClass("mod_tab_fixed");
            }
        })
    })
</script>


<script language="javascript" type="text/javascript" src="js.users.51.la/17581755.js"></script>
<noscript><a href="http://www.51.la/?17581755" target="_blank" style="display:none;"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="img.users.51.la/17581755.asp.html" style="border:none" /></a></noscript>
</body>
</html>