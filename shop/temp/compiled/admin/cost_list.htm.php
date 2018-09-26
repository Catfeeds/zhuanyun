<!-- $Id: snatch_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<style type="text/css">
    
    .table-header th{
        text-align: left;
    }
    
</style>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<div class="form-div">
    <form action="javascript:searchForm()" name="searchForm">
        <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
        状态： <select name="cost_status">
        <option value="">不限</option>
        <option value="未付">未付</option>
        <option value="已付">已付</option>
    </select>
        &nbsp;成本类型：<select name="cost_type">
        <option value="">不限</option>
        <option value="航空运输">航空运输</option>
        <option value="国外快递">国外快递</option>
        <option value="国际快递">国际快递</option>
        <option value="报关">报关</option>
    </select>
        <br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;航空公司： <select name="cost_airline_id">
                                        <option value="">不限</option>
                                    </select>
        快递公司： <select name="cost_shipment_id">
                            <option value="">不限</option>
                        </select>
        <br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户id：<input type="text" name="cost_user_id"   size="10" />
        <!--订单id：<input type="text" name="cost_order_id"   size="10" />-->
        订单sn：<input type="text" name="cost_order_sn"   size="10" />

        <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />
        <input name="submit" type="button" id="export" value="导出查询" class="button" />
    </form>
</div>

<form method="post" action="" name="listForm">
    <div class="list-div" id="listDiv">
        <input name="submit" type="button" id="batch-edit" value="批量支付" class="button" />
        <?php endif; ?>

        <table cellpadding="3" cellspacing="1">
            <tr class="table-header">
                <th><input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" /><a href="javascript:listTable.sort('act_id'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_act_id']; ?></th>
                <th><a href="javascript:listTable.sort('cost_user_id'); ">用户</a></th>
                <th><a href="javascript:listTable.sort('cost_order_id'); ">订单号</a><?php echo $this->_var['sort_goods_name']; ?></th>
                <th><a href="javascript:listTable.sort('cost_status'); ">状态</a><?php echo $this->_var['sort_start_time']; ?></th>
                <th><a href="javascript:listTable.sort('cost_add_time'); ">添加时间</a><?php echo $this->_var['sort_end_time']; ?></th>

                <th>类型</th>

                <th>快递公司</th>
                <th>航空</th>

                <th>总额</th>
                <th>操作信息</th>
                <th>操作备注</th>
                <th><?php echo $this->_var['lang']['handler']; ?></th>
            </tr>
            <?php $_from = $this->_var['data_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'data');if (count($_from)):
    foreach ($_from AS $this->_var['data']):
?>
            <tr>
                <td align="right">
                    <label>
                        <?php if ($this->_var['data']['cost_status'] != "已付"): ?>
                        <input type="checkbox" name="checkboxes" value="<?php echo $this->_var['data']['cost_id']; ?>">
                    <?php endif; ?>
                        <?php echo $this->_var['data']['cost_id']; ?>

                    </label></td>
                <td class="first-cell"><?php echo $this->_var['data']['cost_username']; ?></td>
                <td><span><?php echo $this->_var['data']['cost_order_sn']; ?><br>
                运单号: <?php echo $this->_var['data']['cost_order_waybill_id']; ?></span></td>
                <td align="left" style="font-weight:bold;color:
                    <?php if ($this->_var['data']['cost_status'] != "已付"): ?>red
                <?php else: ?>green
                <?php endif; ?>
                "
                >

                    <?php echo $this->_var['data']['cost_status']; ?></td>
                <td align="left">
                    <?php echo $this->_var['data']['cost_add_time']; ?>
                </td>

                <td align="left"><?php echo $this->_var['data']['cost_type']; ?></td>
                <td align="left"><?php echo $this->_var['data']['shipment_name']; ?>(<?php echo $this->_var['data']['shipment_code']; ?>)
                    <?php if ($this->_var['data']['ordw_waybillno']): ?>
                    <br>
                    单号:<a href="http://cha.walatao.com/express/get/hdbao/<?php echo $this->_var['data']['ordw_waybillno']; ?>"
                    target="_blank" title="查运单信息"
                    ><?php echo $this->_var['data']['ordw_waybillno']; ?></a>
                    <?php endif; ?>
                </td>
                <td align="left">
                    <?php if ($this->_var['data']['flight_id']): ?>
                    <?php echo $this->_var['data']['airline_name']; ?>(<?php echo $this->_var['data']['airline_short_name']; ?>)<br>
                    航班：<?php echo $this->_var['data']['flight_no']; ?>(<?php echo $this->_var['data']['leave_date']; ?> <?php echo $this->_var['data']['leave_ampm']; ?>
                    ,<?php echo $this->_var['data']['leave_city']; ?>-><?php echo $this->_var['data']['arrival_city']; ?>)<br>
                    到达:<?php echo $this->_var['data']['flight_arrival_time']; ?>
                    <?php endif; ?>
                </td>

                <td align="left"><?php echo $this->_var['data']['cost_amount']; ?></td>
                <td align="left">
                    <?php if ($this->_var['data']['cost_status'] == "已付"): ?>
                    时间: <?php echo $this->_var['data']['cost_pay_time']; ?><br>
                    操作: <?php echo $this->_var['data']['cost_admin_name']; ?> 于<?php echo $this->_var['data']['cost_pay_change_time']; ?>
                    <?php endif; ?>
                </td>
                <td align="left"><?php echo $this->_var['data']['cost_pay_memo']; ?></td>
                <td align="center">
                    <?php if ($this->_var['data']['cost_status'] != "已付"): ?>
                    <a href="cost.php?act=edit&amp;id=<?php echo $this->_var['data']['cost_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" style="border-radius: 30px; background-color: seagreen; color:#fff; padding: 5px 10px;  ">录入支付</a>
                    <?php else: ?>
                    <a href="cost.php?act=edit&amp;id=<?php echo $this->_var['data']['cost_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" style="border-radius: 30px; background-color: seagreen; color:#fff; padding: 5px 10px;  ">修改支付</a>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; else: ?>
            <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
            <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
                <td align="right" nowrap="true" colspan="12"><?php echo $this->fetch('page.htm'); ?></td>
            </tr>
        </table>

        <?php if ($this->_var['full_page']): ?>
    </div>
</form>
<!-- end article list -->

<script type="text/javascript" language="JavaScript">
    <!--
    listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
    listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

    <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        
        onload = function()
        {
            //document.forms['searchForm'].elements['keyword'].focus();
            // 开始检查订单
            startCheckOrder();
        }
        $(document).on('click', "#batch-edit", function() {
            var ids = check();
            if(!ids) {
                alert("没有选择记录");
                return false;
            }
            location.href = "cost.php?act=edit&id="+ids;
        });
    $(document).on('click', '#export', function() {
        searchForm(true);
    });
        function check()
        {
            var snArray = new Array();
            var eles = document.forms['listForm'].elements;
            for (var i=0; i<eles.length; i++)
            {
                if (eles[i].tagName == 'INPUT' && eles[i].type == 'checkbox' && eles[i].checked && eles[i].value != 'on')
                {
                    snArray.push(eles[i].value);
                }
            }
            if (snArray.length == 0)
            {
                return false;
            }
            else
            {
                return snArray.toString();
            }
        }


        /**
         * 搜索文章
         */
        function searchForm(isExport)
        {
            var cost_status = Utils.trim(document.forms['searchForm'].elements['cost_status'].value);
            var cost_type = Utils.trim(document.forms['searchForm'].elements['cost_type'].value);
            var cost_user_id = Utils.trim(document.forms['searchForm'].elements['cost_user_id'].value);
            //var cost_order_id = Utils.trim(document.forms['searchForm'].elements['cost_order_id'].value);
            var cost_order_sn = Utils.trim(document.forms['searchForm'].elements['cost_order_sn'].value);

            var cost_airline_id = Utils.trim(document.forms['searchForm'].elements['cost_airline_id'].value);

            var cost_shipment_id = Utils.trim(document.forms['searchForm'].elements['cost_shipment_id'].value);

            listTable.filter.cost_status = cost_status;
            listTable.filter.cost_type = cost_type;
            listTable.filter.cost_user_id = cost_user_id;
           // listTable.filter.cost_order_id = cost_order_id;
            listTable.filter.cost_order_sn = cost_order_sn;
            listTable.filter.cost_airline_id = cost_airline_id;
            listTable.filter.cost_shipment_id = cost_shipment_id;

            listTable.filter.page = 1;
            if(isExport) {
                listTable.loadExport('export');
            }  else  listTable.loadList();
        }
        
    //-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>