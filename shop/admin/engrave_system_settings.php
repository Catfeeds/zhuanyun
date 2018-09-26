<?php 
/**
 * ENGRAVE 系统设置
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_system_settings.php 2014-11-17 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_system_settings.php');
require_once (ROOT_PATH  . 'admin/commonhelper/upload_json.php');

if($GLOBALS['_CFG']['certificate_id']  == '')
{
    $certi_id='error';
}
else
{
    $certi_id=$GLOBALS['_CFG']['certificate_id'];
}
/*------------------------------------------------------ */
//-- 列表编辑 
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'set')
{
    /* 检查权限 */
    admin_priv('system_settings');
    /* 可选语言 */
    $dir = opendir('../languages');
    $lang_list = array();
    while (@$file = readdir($dir))
    {
        if ($file != '.' && $file != '..' &&  $file != '.svn' && $file != '_svn' && is_dir('../languages/' .$file))
        {
            $lang_list[] = $file;
        }
    }
    @closedir($dir);
    
//     $upload=new FileUpload();
//      $upload-> test();
    
	$group_list=get_settings(null,array('6'));
    $smarty->assign('lang_list',    $lang_list);
    $smarty->assign('ur_here',      $_LANG['01_system_config']);
    $smarty->assign('group_list',   $group_list);
    
    $smarty->assign('countries',    get_regions());

    if (strpos(strtolower($_SERVER['SERVER_SOFTWARE']), 'iis') !== false)
    {
        $rewrite_confirm = $_LANG['rewrite_confirm_iis'];
    }
    else
    {
        $rewrite_confirm = $_LANG['rewrite_confirm_apache'];
    }
    $smarty->assign('rewrite_confirm', $rewrite_confirm);

    if ($_CFG['shop_country'] > 0)
    {
        $smarty->assign('provinces', get_regions(1, $_CFG['shop_country']));
        if ($_CFG['shop_province'])
        {
            $smarty->assign('cities', get_regions(2, $_CFG['shop_province']));
        }
    }
    $smarty->assign('cfg', $_CFG);

    assign_query_info();
    $smarty->display('engrave_system_settings.htm');
}
/*------------------------------------------------------ */
//-- 提交   ?act=post
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'post')
{
    $type = empty($_POST['type']) ? '' : $_POST['type'];
    /* 检查权限 */
    admin_priv('system_config');

    /* 允许上传的文件类型 */
    $allow_file_types = '|GIF|JPG|PNG|BMP|SWF|DOC|XLS|PPT|MID|WAV|ZIP|RAR|PDF|CHM|RM|TXT|CERT|';

    /* 保存变量值 */
    $count = count($_POST['value']);
    $arr = array();
    $sql = 'SELECT id, value FROM ' . $engrave->table('system_config');
    $res= $engrave_db->query($sql);
    while($row = $engrave_db->fetchRow($res))
    {
        $arr[$row['id']] = $row['value'];
    }
    foreach ($_POST['value'] AS $key => $val)
    {
        if($arr[$key] != $val)
        {
            $sql = "UPDATE " . $engrave->table('system_config') . " SET value = '" . trim($val) . "' WHERE id = '" . $key . "'";
            $engrave_db->query($sql);
        }
    }

    /* 处理上传文件 */
    $file_var_list = array();
    $sql = "SELECT * FROM " . $engrave->table('system_config') . " WHERE parent_id > 0 AND type = 'file'";
    $res = $engrave_db->query($sql);
    while ($row = $engrave_db->fetchRow($res))
    {
        $file_var_list[$row['code']] = $row;
    }
	
    $upload=new FileUpload();
    foreach ($_FILES AS $code => $file)
    {
	    $filename = $upload-> upload($file);
	    if($filename!='')
	    {
		    $sql = "UPDATE " . $engrave->table('system_config') . " SET value = '$filename' WHERE code = '$code'";
		    $engrave_db->query($sql);
	    }
	    else {
	    	sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], $file_var_list[$code]['store_dir']));
	    }
    }

    /* 处理发票类型及税率 */
    if (!empty($_POST['invoice_rate']))
    {
        foreach ($_POST['invoice_rate'] as $key => $rate)
        {
            $rate = round(floatval($rate), 2);
            if ($rate < 0)
            {
                $rate = 0;
            }
            $_POST['invoice_rate'][$key] = $rate;
        }
        $invoice = array(
            'type' => $_POST['invoice_type'],
            'rate' => $_POST['invoice_rate']
        );
        $sql = "UPDATE " . $engrave->table('system_config') . " SET value = '" . serialize($invoice) . "' WHERE code = 'invoice_type'";
        $engrave_db->query($sql);
    }

    /* 记录日志 */
    admin_log('', 'edit', 'system_config');

    /* 清除缓存 */
    clear_all_files();

    $_CFG = load_config();

    $links[] = array('text' => $_LANG['back_engrave_system_settings'], 'href' => 'engrave_system_settings.php?act=set'); 

    sys_msg($_LANG['save_success'], 0, $link[0]);
}
/*------------------------------------------------------ */
//-- 发送测试邮件
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'send_test_email')
{
    /* 检查权限 */
    check_authz_json('system_config');

    /* 取得参数 */
    $email          = trim($_POST['email']);

    /* 更新配置 */
    $_CFG['mail_service'] = intval($_POST['mail_service']);
    $_CFG['smtp_host']    = trim($_POST['smtp_host']);
    $_CFG['smtp_port']    = trim($_POST['smtp_port']);
    $_CFG['smtp_user']    = json_str_iconv(trim($_POST['smtp_user']));
    $_CFG['smtp_pass']    = trim($_POST['smtp_pass']);
    $_CFG['smtp_mail']    = trim($_POST['reply_email']);
    $_CFG['mail_charset'] = trim($_POST['mail_charset']);

    if (send_mail('', $email, $_LANG['test_mail_title'], $_LANG['cfg_name']['email_content'], 0))
    {
        make_json_result('', $_LANG['sendemail_success'] . $email);
    }
    else
    {
        make_json_error(join("\n", $err->_message));
    }
}

/*------------------------------------------------------ */
//-- 删除上传文件
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'del')
{
    /* 检查权限 */
    check_authz_json('system_config');

    /* 取得参数 */
    $code          = trim($_GET['code']);

    $filename = $_CFG[$code];

    //删除文件
    @unlink($filename);

    //更新设置
    update_configure($code, '');

    /* 记录日志 */
    admin_log('', 'edit', 'system_config');

    /* 清除缓存 */
    clear_all_files();

    sys_msg($_LANG['save_success'], 0);

}
/**
 * 邮件测试
 */
elseif($_REQUEST['act'] == 'post_test')
{
	/* 检查权限 */
    check_authz_json('system_config');

    /* 取得参数 */
    $email          = trim($_POST['email']);

    /* 更新配置 */
    $_CFG['mail_service'] = intval($_POST['mail_service']);
    $_CFG['smtp_host']    = trim($_POST['smtp_host']);
    $_CFG['smtp_port']    = trim($_POST['smtp_port']);
    $_CFG['smtp_user']    = json_str_iconv(trim($_POST['smtp_user']));
    $_CFG['smtp_pass']    = trim($_POST['smtp_pass']);
    $_CFG['smtp_mail']    = trim($_POST['reply_email']);
    $_CFG['mail_charset'] = trim($_POST['mail_charset']);

    if (send_mail('', $email, $_LANG['test_mail_title'], $_LANG['cfg_name']['email_content'], 0))
    {
        make_json_result('', $_LANG['sendemail_success'] . $email);
    }
    else
    {
        make_json_error(join("\n", $err->_message));
    }
}

/**
 * 设置系统设置
 *
 * @param   string  $key
 * @param   string  $val
 *
 * @return  boolean
 */
function update_configure($key, $val='')
{
    if (!empty($key))
    {
        $sql = "UPDATE " . $GLOBALS['engrave']->table('system_config') . " SET value='$val' WHERE code='$key'";

        return $GLOBALS['engrave_db']->query($sql);
    }

    return true;
}

/**
 * 获得设置信息
 *
 * @param   array   $groups     需要获得的设置组
 * @param   array   $excludes   不需要获得的设置组
 *
 * @return  array
 */
function get_settings($groups=null, $excludes=null)
{
    global $engrave_db, $engrave, $_LANG;

    $config_groups = '';
    $excludes_groups = '';

    if (!empty($groups))
    {
        foreach ($groups AS $key=>$val)
        {
            $config_groups .= " AND (id='$val' OR parent_id='$val')";
        }
    }

    if (!empty($excludes))
    {
        foreach ($excludes AS $key=>$val)
        {
            $excludes_groups .= " AND (parent_id<>'$val' AND id<>'$val')";
        }
    }
    
    /* 取出全部数据：分组和变量 */
    $sql = "SELECT * FROM " . $engrave->table('system_config') .
            " WHERE type<>'hidden' $config_groups $excludes_groups ORDER BY parent_id, sort_order, id";
    $item_list = $engrave_db->getAll($sql);

    /* 整理数据 */
    $group_list = array();
    foreach ($item_list AS $key => $item)
    {
        $pid = $item['parent_id'];
        $item['name'] = isset($_LANG['cfg_name'][$item['code']]) ? $_LANG['cfg_name'][$item['code']] : $item['code'];
        $item['desc'] = isset($_LANG['cfg_desc'][$item['code']]) ? $_LANG['cfg_desc'][$item['code']] : '';
		
        if ($item['code'] == 'sms_shop_mobile')
        {
            $item['url'] = 1;
        }
        if ($pid == 0)
        {
            /* 分组 */
            if ($item['type'] == 'group')
            {
                $group_list[$item['id']] = $item;
            }
        }
        else
        {
            /* 变量 */
            if (isset($group_list[$pid]))
            {
                if ($item['store_range'])
                {
                    $item['store_options'] = explode(',', $item['store_range']);

                    foreach ($item['store_options'] AS $k => $v)
                    {
                        $item['display_options'][$k] = isset($_LANG['cfg_range'][$item['code']][$v]) ?
                                $_LANG['cfg_range'][$item['code']][$v] : $v;
                    }
                }
                $group_list[$pid]['vars'][] = $item;
            }
        }
    }

    return $group_list;
}

?>