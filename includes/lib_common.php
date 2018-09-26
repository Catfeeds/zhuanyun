<?php
/**
 * ENGRAVE
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_common.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */
if (!defined('IN_ENGRAVE'))
{
    die('Hacking attempt');
}
/**
 * 获取邮件模板
 *
 * @access  public
 * @param:  $tpl_name[string]       模板代码
 *
 * @return array
 */
function get_mail_template($tpl_name)
{
	$sql = 'SELECT template_subject, is_html, template_content FROM ' . $GLOBALS['engrave_shop']->table('mail_templates') . " WHERE template_code = '$tpl_name'";
	return $GLOBALS['engrave_shop_db']->GetRow($sql);
}
/**
 * 创建像这样的查询: "IN('a','b')";
 *
 * @access   public
 * @param    mix      $item_list      列表数组或字符串
 * @param    string   $field_name     字段名称
 *
 * @return   void
 */
function db_create_in($item_list, $field_name = '')
{
    if (empty($item_list))
    {
        return $field_name . " IN ('') ";
    }
    else
    {
        if (!is_array($item_list))
        {
            $item_list = explode(',', $item_list);
        }
        $item_list = array_unique($item_list);
        $item_list_tmp = '';
        foreach ($item_list AS $item)
        {
            if ($item !== '')
            {
                $item_list_tmp .= $item_list_tmp ? ",'$item'" : "'$item'";
            }
        }
        if (empty($item_list_tmp))
        {
            return $field_name . " IN ('') ";
        }
        else
        {
            return $field_name . ' IN (' . $item_list_tmp . ') ';
        }
    }
}
/**
 * 验证输入的邮件地址是否合法
 *
 * @access  public
 * @param   string      $email      需要验证的邮件地址
 *
 * @return bool
 */
function is_email($user_email)
{
    $chars = "/^([a-z0-9+_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,6}\$/i";
    if (strpos($user_email, '@') !== false && strpos($user_email, '.') !== false)
    {
        if (preg_match($chars, $user_email))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}
/**
 * 检查是否为一个合法的时间格式
 *
 * @access  public
 * @param   string  $time
 * @return  void
 */
function is_time($time)
{
    $pattern = '/[\d]{4}-[\d]{1,2}-[\d]{1,2}\s[\d]{1,2}:[\d]{1,2}:[\d]{1,2}/';
    return preg_match($pattern, $time);
}
/**
 * 获得查询时间和次数，并赋值给smarty
 *
 * @access  public
 * @return  void
 */
function assign_query_info()
{
    if ($GLOBALS['engrave_db']->queryTime == '')
    {
        $query_time = 0;
    }
    else
    {
        if (PHP_VERSION >= '5.0.0')
        {
            $query_time = number_format(microtime(true) - $GLOBALS['engrave_db']->queryTime, 6);
        }
        else
        {
            list($now_usec, $now_sec)     = explode(' ', microtime());
            list($start_usec, $start_sec) = explode(' ', $GLOBALS['engrave_db']->queryTime);
            $query_time = number_format(($now_sec - $start_sec) + ($now_usec - $start_usec), 6);
        }
    }
    //$GLOBALS['smarty']->assign('query_info', sprintf($GLOBALS['_LANG']['query_info'], $GLOBALS['engrave_db']->queryCount, $query_time));
    /* 内存占用情况 */
    if ($GLOBALS['_LANG']['memory_info'] && function_exists('memory_get_usage'))
    {
        $GLOBALS['smarty']->assign('memory_info', sprintf($GLOBALS['_LANG']['memory_info'], memory_get_usage() / 1048576));
    }
    /* 是否启用了 gzip */
    //$gzip_enabled = gzip_enabled() ? $GLOBALS['_LANG']['gzip_enabled'] : $GLOBALS['_LANG']['gzip_disabled'];
    //$GLOBALS['smarty']->assign('gzip_enabled', $gzip_enabled);
}
/**
 * 载入配置信息
 *
 * @access  public
 * @return  array
 */
function load_config()
{
	$arr = array();
	$data = read_static_cache('system_config');
	if ($data === false)
	{
		$sql = 'SELECT code, value FROM ' . $GLOBALS['engrave']->table('system_config') . ' WHERE parent_id > 0';
		$res = $GLOBALS['engrave_db']->getAll($sql);
		foreach ($res AS $row)
		{
			$arr[$row['code']] = $row['value'];
		}
		/***********************************************基本设置************************************************/
		$arr['timezone'] = '8';//北京时间
		$arr['s_member_register']           = intval($arr['s_member_register']);//会员注册：开放0；关闭1
		$arr['cache_time']           = intval($arr['s_cookies_length']);
		/***********************************************基本设置************************************************/
		/***********************************************会员相关************************************************/
		$arr['s_warehouse_maxusers'] = !empty($arr['s_warehouse_maxusers']) ? intval($arr['s_warehouse_maxusers']) : 0;//仓库人数上限
		//注册赠送积分
		$arr['s_register_integral'] = !empty($arr['s_register_integral']) ? intval($arr['s_register_integral']) : 0;
		/**
		 * 1、奖励机制（0：固定分成 10；1、按价格百分比 10%；2：一次性赠送积分）
		 * 2、推荐人 10
		 * 3、被推荐人 10
		 */
		$arr['s_member_popularize'] = !empty($arr['s_member_popularize']) ? intval($arr['s_member_popularize']) : 3;
		$arr['s_recommend_integral'] = !empty($arr['s_recommend_integral']) ? intval($arr['s_recommend_integral']) : 0;
		$arr['s_recommended_integral'] = !empty($arr['s_recommended_integral']) ? intval($arr['s_recommended_integral']) : 0;
		/***********************************************会员相关************************************************/
		//运单、订单
		$arr['s_ordernumberformat']          = trim($arr['s_ordernumberformat']);
		$arr['s_timeformat']          = trim($arr['s_timeformat']);
		$arr['s_orderwaterlevel']          = !empty($arr['s_orderwaterlevel']) && intval($arr['s_orderwaterlevel']) > 0 ? intval($arr['s_orderwaterlevel'])     : 3;
		
		$arr['s_waybillformat']  = trim($arr['s_waybillformat']);
		$arr['s_waybilltimeformat'] = trim($arr['s_waybilltimeformat']);
		$arr['s_orderwaterlevel'] = !empty($arr['s_orderwaterlevel']) && intval($arr['s_orderwaterlevel']) > 0 ? intval($arr['s_orderwaterlevel']) : 3;
		$arr['s_weightunit']           = !empty($arr['s_weightunit']) ? trim($arr['s_weightunit'])      : 'LBS';
// 		$arr['hot_number']           = !empty($arr['hot_number']) && intval($arr['hot_number']) > 0 ? intval($arr['hot_number'])      : 3;
		$arr['promote_number']       = !empty($arr['promote_number']) && intval($arr['promote_number']) > 0 ? intval($arr['promote_number'])  : 3;
		//货币兑换积分、最大消费积分、积分兑换货币
		$arr['s_integralprice']           = !empty($arr['s_integralprice']) ? floatval($arr['s_integralprice']) : 0;
		$arr['s_maxintegral']       = !empty($arr['s_maxintegral']) ? floatval($arr['s_maxintegral']) : 0;
		$arr['s_priceintegral']      = !empty($arr['s_priceintegral']) ? floatval($arr['s_priceintegral']) : 0;
// 		$arr['article_number']       = intval($arr['article_number'])  > 0 ? intval($arr['article_number'])  : 5;
		$arr['page_size']            = intval($arr['page_size'])       > 0 ? intval($arr['page_size'])       : 10;
// 		$arr['bought_goods']         = intval($arr['bought_goods']);
// 		$arr['goods_name_length']    = intval($arr['goods_name_length']);
		//$arr['top10_time']           = intval($arr['top10_time']);
// 		$arr['s_weightunit'] = intval($arr['goods_gallery_number']) ? intval($arr['goods_gallery_number']) : 5;
		$arr['no_picture']           = !empty($arr['no_picture']) ? str_replace('../', './', $arr['no_picture']) : 'images/no_picture.gif'; // 修改默认商品图片的路径
		$arr['qq']                   = !empty($arr['qq']) ? $arr['qq'] : '';
		$arr['ww']                   = !empty($arr['ww']) ? $arr['ww'] : '';
		$arr['default_storage']      = isset($arr['default_storage']) ? intval($arr['default_storage']) : 1;
		$arr['min_goods_amount']     = isset($arr['min_goods_amount']) ? floatval($arr['min_goods_amount']) : 0;
		$arr['one_step_buy']         = empty($arr['one_step_buy']) ? 0 : 1;
		$arr['invoice_type']         = empty($arr['invoice_type']) ? array('type' => array(), 'rate' => array()) : unserialize($arr['invoice_type']);
		$arr['show_order_type']      = isset($arr['show_order_type']) ? $arr['show_order_type'] : 0;    // 显示方式默认为列表方式
		$arr['help_open']            = isset($arr['help_open']) ? $arr['help_open'] : 1;    // 显示方式默认为列表方式
		
		$arr['shop_name']                   = !empty($arr['shop_name']) ? $arr['shop_name'] : ''; //商城名称
		$arr['mail_charset']                   = !empty($arr['mail_charset']) ? $arr['mail_charset'] : ''; //编码方式
		$arr['s_smtpserver']                   = !empty($arr['s_smtpserver']) ? $arr['s_smtpserver'] : ''; //邮箱服务
		$arr['s_smtpmail']                   = !empty($arr['s_smtpmail']) ? $arr['s_smtpmail'] : ''; //SMTP服务邮箱
		$arr['s_smtpmailaccount']                   = !empty($arr['s_smtpmailaccount']) ? $arr['s_smtpmailaccount'] : ''; //邮箱帐号
		$arr['s_smtpmailpwd']                   = !empty($arr['s_smtpmailpwd']) ? $arr['s_smtpmailpwd'] : ''; //邮箱密码
		$arr['s_smtpport']                   = !empty($arr['s_smtpport']) ? $arr['s_smtpport'] : ''; //发送端口
		$arr['s_smtpsendmail']                   = !empty($arr['s_smtpsendmail']) ? $arr['s_smtpsendmail'] : ''; //接受邮箱
		
		//隐藏区域
		//默认日元账户ID
		$arr['s_currecy_jpyid'] = !empty($arr['s_currecy_jpyid']) ? intval($arr['s_currecy_jpyid']) : 1;
		if (!isset($GLOBALS['_CFG']['ecs_version']))
		{
			/* 如果没有版本号则默认为2.0.5 */
			$GLOBALS['_CFG']['ecs_version'] = 'v2.0.5';
		}
		//限定语言项
		$lang_array = array('zh_cn', 'zh_tw', 'en_us');
		if (empty($arr['lang']) || !in_array($arr['lang'], $lang_array))
		{
			$arr['lang'] = 'zh_cn'; // 默认语言为简体中文
		}
		$arr['integrate_code']="";
		echo  $arr['integrate_code'];
		if (empty($arr['integrate_code']))
		{
			$arr['integrate_code'] = 'engrave'; // 默认的会员整合插件为 engrave
		}
		//write_static_cache('system_config', $arr);
	}
	else
	{
		$arr = $data;
	}
	return $arr;
}

/**
 * 载入商城配置信息
 *
 * @access  public
 * @return  array
 */
function load_shop_config()
{
	$arr = array();
	$data = read_static_cache('shop_config');
	if ($data === false)
	{
		$sql = 'SELECT code, value FROM ' . $GLOBALS['engrave_shop']->table('shop_config') . ' WHERE parent_id > 0';
		$res = $GLOBALS['engrave_shop_db']->getAll($sql);
		foreach ($res AS $row)
		{
			$arr[$row['code']] = $row['value'];
		}
		/* 对数值型设置处理 */
		$arr['watermark_alpha']      = intval($arr['watermark_alpha']);
		$arr['market_price_rate']    = floatval($arr['market_price_rate']);
		$arr['integral_scale']       = floatval($arr['integral_scale']);
		//$arr['integral_percent']     = floatval($arr['integral_percent']);
		$arr['cache_time']           = intval($arr['cache_time']);
		$arr['thumb_width']          = intval($arr['thumb_width']);
		$arr['thumb_height']         = intval($arr['thumb_height']);
		$arr['image_width']          = intval($arr['image_width']);
		$arr['image_height']         = intval($arr['image_height']);
		$arr['best_number']          = !empty($arr['best_number']) && intval($arr['best_number']) > 0 ? intval($arr['best_number'])     : 3;
		$arr['new_number']           = !empty($arr['new_number']) && intval($arr['new_number']) > 0 ? intval($arr['new_number'])      : 3;
		$arr['hot_number']           = !empty($arr['hot_number']) && intval($arr['hot_number']) > 0 ? intval($arr['hot_number'])      : 3;
		$arr['promote_number']       = !empty($arr['promote_number']) && intval($arr['promote_number']) > 0 ? intval($arr['promote_number'])  : 3;
		$arr['top_number']           = intval($arr['top_number'])      > 0 ? intval($arr['top_number'])      : 10;
		$arr['history_number']       = intval($arr['history_number'])  > 0 ? intval($arr['history_number'])  : 5;
		$arr['comments_number']      = intval($arr['comments_number']) > 0 ? intval($arr['comments_number']) : 5;
		$arr['article_number']       = intval($arr['article_number'])  > 0 ? intval($arr['article_number'])  : 5;
		$arr['page_size']            = intval($arr['page_size'])       > 0 ? intval($arr['page_size'])       : 10;
		$arr['bought_goods']         = intval($arr['bought_goods']);
		$arr['goods_name_length']    = intval($arr['goods_name_length']);
		$arr['top10_time']           = intval($arr['top10_time']);
		$arr['goods_gallery_number'] = intval($arr['goods_gallery_number']) ? intval($arr['goods_gallery_number']) : 5;
		$arr['no_picture']           = !empty($arr['no_picture']) ? str_replace('../', './', $arr['no_picture']) : 'images/no_picture.gif'; // 修改默认商品图片的路径
		$arr['qq']                   = !empty($arr['qq']) ? $arr['qq'] : '';
		$arr['ww']                   = !empty($arr['ww']) ? $arr['ww'] : '';
		$arr['default_storage']      = isset($arr['default_storage']) ? intval($arr['default_storage']) : 1;
		$arr['min_goods_amount']     = isset($arr['min_goods_amount']) ? floatval($arr['min_goods_amount']) : 0;
		$arr['one_step_buy']         = empty($arr['one_step_buy']) ? 0 : 1;
		$arr['invoice_type']         = empty($arr['invoice_type']) ? array('type' => array(), 'rate' => array()) : unserialize($arr['invoice_type']);
		$arr['show_order_type']      = isset($arr['show_order_type']) ? $arr['show_order_type'] : 0;    // 显示方式默认为列表方式
		$arr['help_open']            = isset($arr['help_open']) ? $arr['help_open'] : 1;    // 显示方式默认为列表方式
		
		$arr['mail_charset']         = !empty($arr['mail_charset']) ? $arr['mail_charset'] : '';//编码方式
		$arr['smtp_host']            = !empty($arr['smtp_host']) ? $arr['smtp_host'] : '';//SMTP服务
		$arr['smtp_port']            = !empty($arr['smtp_port']) ? $arr['smtp_port'] : '';//邮箱端口
		$arr['smtp_user']            = !empty($arr['smtp_user']) ? $arr['smtp_user'] : '';//邮箱帐号
		$arr['smtp_pass']            = !empty($arr['smtp_pass']) ? $arr['smtp_pass'] : '';//邮箱密码
		$arr['smtp_mail']            = !empty($arr['smtp_mail']) ? $arr['smtp_mail'] : '';//回复邮件
		$arr['mail_service']         = intval($arr['mail_service']); //发送邮件方式
		$arr['smtp_ssl']         = intval($arr['smtp_ssl']); //是否开启SSL
		if (!isset($GLOBALS['_CFG']['ecs_version']))
		{
			/* 如果没有版本号则默认为2.0.5 */
			$GLOBALS['_CFG']['ecs_version'] = 'v2.0.5';
		}
		//限定语言项
		$lang_array = array('zh_cn', 'zh_tw', 'en_us');
		if (empty($arr['lang']) || !in_array($arr['lang'], $lang_array))
		{
			$arr['lang'] = 'zh_cn'; // 默认语言为简体中文
		}
		if (empty($arr['integrate_code']))
		{
			$arr['integrate_code'] = 'ecshop'; // 默认的会员整合插件为 ecshop
		}
		write_static_cache('shop_config', $arr);
	}
	else
	{
		$arr = $data;
	}
	return $arr;
}
/**
 * 初始化会员数据整合类
 *
 * @access  public
 * @return  object
 */
function &init_users()
{
	$set_modules = false;
	static $cls = null;
	if ($cls != null)
	{
		return $cls;
	}
	include_once(ROOT_PATH . 'includes/modules/integrates/' . $GLOBALS['_CFG']['integrate_code'] . '.php');
	$cfg = unserialize($GLOBALS['_CFG']['integrate_config']);
	$cls = new $GLOBALS['_CFG']['integrate_code']($cfg);
	return $cls;
}

?>