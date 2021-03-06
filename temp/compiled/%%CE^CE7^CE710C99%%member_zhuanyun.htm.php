<?php /* Smarty version 2.6.26, created on 2018-10-04 16:05:52
         compiled from member_zhuanyun.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_user.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
    var rate_data = <?php echo $this->_tpl_vars['rate_data']; ?>
;
    var user_payment_type="<?php echo $_SESSION['user_payment_type']; ?>
";
</script>
<?php echo '
<style>
    input,select,textarea {
        border :1px solid #ddd;
        border-radius: 5px;
        line-height: 30px;
        height: 30px;
    }
    /* Table Head */
    input[type=radio],input[type=checkbox]{
        vertical-align: middle;margin-right: 10px;
    }
    #package_list_table，#wuliu_choose_table {
        width: 100%;
    }
    #package_list_table thead th,#wuliu_choose_table thead th{
        background-color: rgb(156, 186, 95);
        color: #fff;
        border-bottom-width: 0;
        padding : 5px 10px;
    }
    #wuliu_choose_table tbody td {
        font-size: 14px;
        padding :5px 0 ;
        text-align: center;
    }
    .w200 {
        width :200px !important;
    }

    /* Column Style */
    #package_list_table td {
        color: #000;
    }
    /* Heading and Column Style */
    #package_list_table tr, #table-5 th {
        border-width: 1px;
        border-style: solid;
        border-color: rgb(156, 186, 95);
    }

    /* Padding and font style */
    #package_list_table td, #table-5 th {
        padding: 5px 10px;
        font-size: 12px;
        font-family: Verdana;
        font-weight: bold;
    }
    .wuliu_choose  {
        margin-top:20px;
        width: 800px;
    }
    .wuliu_choose td {
        border-bottom:1px solid #ddd2c0;
    }
    .wuliu_choose li{
        float:left;
        width:100%;
        line-height: 30px;
        height: 30px;
    }
    .wuliu_choose li label {
        font-weight: bold
    }
    .wuliu_tipshow {
        padding-left: 30px;
        font-size :18px;
        padding: 10px 0 ;
        color :green;
    }
    .tb_left_detils {
        width:100px
    }
    #cal_info {
        margin-left: 40px;
        margin-top:30px
    }
    #cal_info td {
        padding :10px 0
    }
</style>
'; ?>

<div  class="conter">
    <div   class="member">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "member_menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <div  class="conter_right">
        <div id="tjfh">

            <div id="hyzxddgl_title">
                <div id="hyzxddgl_title_left">订单管理</div>
                <div id="hyzxddgl_title_right">物流优化</div>
                <div id="clear"></div>
            </div>
        </div>
        <div align="center">
            <button type="button" class="btn btn-primary input" style="margin: 40px;" title="点击开始处理数据！" data-toggle="modal" data-target="#ordInfoInput">输入</button>
            <button type="button" class="btn btn-success" title="点击查看优化结果！" data-toggle="modal" data-target="#ordInfoOut">输出</button>
        </div>

    </div>
</div>
<script type="text/javascript" src="themes/default/js/logisticssystem/utils.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/member_ordersubmit.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/main.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/baoxiang.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/boxing.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/taxrate.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/service.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/goods.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/warehouse.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/package.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/price.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/payment.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/coupon.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/points.js"></script>
<script type="text/javascript" src="themes/default/js/logisticssystem/invoice.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
<div class="modal fade" id="ordInfoInput" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-id="">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="product_list_container">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary" id="_j_btn_save_products" data-oid="" data-dismiss="modal">确认选择</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ordInfoOut" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-id="">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">优化结果</h4>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <th>航班信息</th>
                            <th>总重量</th>
                            <th>总体积</th>
                            <th>包裹数</th>
                            <th>总成本</th>
                            <th>清单</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>上海-欧洲</td>
                                <td>200kg</td>
                                <td>3m<sup>3</sup></td>
                                <td>10</td>
                                <td>
                                    <input type="checkbox" checked disabled><span class="red">DHL</span> 30元<br>
                                    <span class="red">EMS</span> 300元<br>
                                    <span class="red">中国邮政</span> 3000元<br>
                                </td>
                                <td><button class="btn btn-success">下载</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary" data-oid="" data-dismiss="modal">确认选择</button>
            </div>
        </div>
    </div>
</div>