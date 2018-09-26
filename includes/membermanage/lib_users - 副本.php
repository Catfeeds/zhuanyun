<?php 

/**

 * ENGRAVE 数据访问：首页

 * ===========================================================

 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。

 * 网站地址: http://www.qdutsoft.com；

 * ----------------------------------------------------------

 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和

 * 使用；不允许对程序代码以任何形式任何目的的再发布。

 * ==========================================================

 * $Author: zhangxingpeng $

 * $Id: lib_user.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $

 */



/**

 * 根据用户ID获取用户

 * @param number $user_id：用户ID

 * @return  array：用户对象

 */

function engrave_users($user_id=0)

{

	$sql = "select user_id,email,user_name,`password`,question,answer,sex,birthday,".

	"user_money,frozen_money,user_jpymoney,user_subsidiarymoney,pay_points,rank_points,address_id,reg_time,last_login,".

	"last_time,last_ip,visit_count,user_rank,is_special,ec_salt,salt,parent_id,flag,".

	"alias,msn,qq,office_phone,home_phone,mobile_phone,is_validated,credit_line,passwd_question,".

	"passwd_answer,recommend_code,reg_ip,storage_code,refencer_recommend_code,isdelete," .

	"user_identitycard,user_country,user_province,user_city,user_address,user_zipcode,".

	"user_taobaowangwang,user_wechat,user_remark,user_isperfect,user_warehouseid,user_headsculpture,".

	" (select rank_name from ". $GLOBALS['engrave_shop']->table('user_rank') .

	" where rank_points >= min_points and rank_points < max_points) as rank_name,".

	" (select ur_color from ". $GLOBALS['engrave_shop']->table('user_rank') .

	" where rank_points >= min_points and rank_points < max_points) as ur_color,".

	" (select ur_icon from ". $GLOBALS['engrave_shop']->table('user_rank') .

	" where rank_points >= min_points and rank_points < max_points) as ur_icon,".

	" (select discount from ". $GLOBALS['engrave_shop']->table('user_rank') .

	" where rank_points >= min_points and rank_points < max_points) as discount".

	" FROM " . $GLOBALS['engrave_shop']->table('users') . ' where user_id = ' .$user_id;



	$res = $GLOBALS['engrave_shop_db']->getRow($sql);

	return $res;

}



/**

 * 根据推荐码获取推荐人信息

 * @param number $recommend：推荐码

 * @return unknown：推荐人对象

 */

function engrave_users_byrecommend($recommend = '')

{

	$sql = "select user_id,email,user_name,`password`,question,answer,sex,birthday,".

	"user_money,frozen_money,user_jpymoney,user_subsidiarymoney,pay_points,rank_points,address_id,reg_time,last_login,".

	"last_time,last_ip,visit_count,user_rank,is_special,ec_salt,salt,parent_id,flag,".

	"alias,msn,qq,office_phone,home_phone,mobile_phone,is_validated,credit_line,passwd_question,".

	"passwd_answer,recommend_code,reg_ip,storage_code,refencer_recommend_code,isdelete," .

	"user_identitycard,user_country,user_province,user_city,user_address,user_zipcode,".

	"user_taobaowangwang,user_wechat,user_remark,user_isperfect,user_warehouseid,user_headsculpture,".

	" (select rank_name from ". $GLOBALS['engrave_shop']->table('user_rank') .

	" where rank_points >= min_points and rank_points < max_points) as rank_name,".

	" (select ur_color from ". $GLOBALS['engrave_shop']->table('user_rank') .

	" where rank_points >= min_points and rank_points < max_points) as ur_color,".

	" (select ur_icon from ". $GLOBALS['engrave_shop']->table('user_rank') .

	" where rank_points >= min_points and rank_points < max_points) as ur_icon,".

	" (select discount from ". $GLOBALS['engrave_shop']->table('user_rank') .

	" where rank_points >= min_points and rank_points < max_points) as discount".

	" FROM " . $GLOBALS['engrave_shop']->table('users') . " where recommend_code = '" .$recommend."'";

	$res = $GLOBALS['engrave_shop_db']->getRow($sql);

	return $res;

}



/**

 * 查询我的推荐人

 * @param number $user_id：用户ID

 * @param number $startPage：其实页码

 * @return unknown：用户对象集合

 */

function engrave_users_recommend($user_id = 0,$startPage=0)

{

	$sql="select count(*) from " .

			$GLOBALS['engrave_shop']->table('users').

			" where refencer_recommend_code in (select recommend_code from ".

			$GLOBALS['engrave_shop']->table('users').

			" where user_id=".$user_id.")";

	$row = $GLOBALS['engrave_shop_db']->getOne($sql);

	

	$filter = array();

	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'reg_time' : trim($_REQUEST['sort_by']);

	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'desc' : trim($_REQUEST['sort_order']);

	$filter['record_count'] = $row;

	/* 分页大小 */

	$filter['start'] = $startPage;

	$total = $filter['record_count'];

	$pageSize = $GLOBALS['_CFG']['page_size'];

	

	//根据用户ID，获取用户的推荐码，根据推荐码，获取所有被推荐的用户

	$sql = "select user_id,email,user_name,`password`,question,answer,sex,birthday,".

	"user_money,frozen_money,user_jpymoney,user_subsidiarymoney,pay_points,rank_points,address_id,reg_time,last_login,".

	"last_time,last_ip,visit_count,user_rank,is_special,ec_salt,salt,parent_id,flag,".

	"alias,msn,qq,office_phone,home_phone,mobile_phone,is_validated,credit_line,passwd_question,".

	"passwd_answer,recommend_code,reg_ip,storage_code,refencer_recommend_code,isdelete," .

	"user_identitycard,user_country,user_province,user_city,user_address,user_zipcode,".

	"user_taobaowangwang,user_wechat,user_remark,user_isperfect,".

	" (select rank_name from ". $GLOBALS['engrave_shop']->table('user_rank') .

	" where rank_points >= min_points and rank_points < max_points) as rank_name,".

	" (select discount from ". $GLOBALS['engrave_shop']->table('user_rank') .

	" where rank_points >= min_points and rank_points < max_points) as discount".

	" FROM " . $GLOBALS['engrave_shop']->table('users') . 

	" where refencer_recommend_code in".

	" (select recommend_code from ".$GLOBALS['engrave_shop']->table('users') .

	 "where user_id =" .$user_id.")".

	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .

	" LIMIT " . $filter['start'] . ",".$pageSize;

	

	$users_list = $GLOBALS['engrave_shop_db']->getAll($sql);

	

	foreach ($users_list as $key=>$val)

	{

		$users_list[$key]['reg_time'] = local_date('Y-m-d H:i:s',$val['reg_time']);

	}

	return array('users_list'=>$users_list, 'filter' => $filter, 'page_count' => ceil($total/$pageSize), 'record_count' => $filter['record_count']);

}























function engrave_order_ruku($orderno,$orderstatus,$consigname,$user_id = 0,$startPage=0)

{


   $where = "";

	if($orderstatus!= -1)

	{

		$where = $where . (" and orderstatus = " . $orderstatus);

	}

	if($orderno !='')

	{

		$where = $where . (" and orderno  = " . $orderno);

	}

	

	if($pckg_name != '')

	{

		$where = $where . (" and pckg_name like '%" . $pckg_name."%'");

	}

	$where = $where . " and pck_userid='".$userid."'";

 
	$sql="select count(*) from " .

			$GLOBALS['engrave']->table('order').

			" where  order_userid=".$user_id;

	$row = $GLOBALS['engrave_db']->getOne($sql);

	

	$filter = array();

//	$filter['sort_by']      = order_userid;

	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'desc' : trim($_REQUEST['sort_order']);

	$filter['record_count'] = $row;

	/* 分页大小 */

	$filter['start'] = $startPage;

	$total = $filter['record_count'];

	$pageSize = $GLOBALS['_CFG']['page_size'];

	

	//根据用户ID，获取用户的推荐码，根据推荐码，获取所有被推荐的用户

	$sql = "select * FROM " . $GLOBALS['engrave']->table('order') . "where order_userid=" .$user_id.

	" order by  order_id desc" .

	" LIMIT " . $filter['start'] . ",".$pageSize;

	

	$users_list = $GLOBALS['engrave_db']->getAll($sql);

	

	foreach ($users_list as $key=>$val)

	{

		//$users_list[$key]['reg_time'] = local_date('Y-m-d H:i:s',$val['reg_time']);

	}

	return array('users_list'=>$users_list, 'filter' => $filter, 'page_count' => ceil($total/$pageSize), 'record_count' => $filter['record_count']);

}

/**

 * 查询我的推荐分成

 * @param number $user_id：用户ID

 * @param number $startPage：其实页码

 * @return unknown：用户对象集合

 */

function engrave_users_recommend_behalf($user_id = 0,$startPage=0)

{

	$sql="select count(*) from " .

			$GLOBALS['engrave_shop']->table('account_log').

			" where change_type in (91) and user_id=".$user_id;

	$row = $GLOBALS['engrave_shop_db']->getOne($sql);

	

	$filter = array();

	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'al.change_time' : trim($_REQUEST['sort_by']);

	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'desc' : trim($_REQUEST['sort_order']);

	$filter['record_count'] = $row;

	/* 分页大小 */

	$filter['start'] = $startPage;

	$total = $filter['record_count'];

	$pageSize = $GLOBALS['_CFG']['page_size'];



	//根据用户ID，获取用户的推荐码，根据推荐码，获取所有被推荐的用户

	$sql = "select al.user_money,al.pay_points,al.change_time,al.change_desc,".

	"email,user_name,`password`,question,answer,sex,birthday,".

	" (select rank_name from ". $GLOBALS['engrave_shop']->table('user_rank') .

	" where us.rank_points >= min_points and us.rank_points < max_points) as rank_name,".

	" (select discount from ". $GLOBALS['engrave_shop']->table('user_rank') .

	" where us.rank_points >= min_points and us.rank_points < max_points) as discount".

	" FROM " . $GLOBALS['engrave_shop']->table('account_log') . " as al" .

	" left join " . $GLOBALS['engrave_shop']->table('users'). " as us".

	" on al.user_id = us.user_id".

	" where change_type in (91) and al.user_id =" .$user_id.

	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .

	" LIMIT " . $filter['start'] . ",".$pageSize;

	" LIMIT " . $filter['start'] . ",".$pageSize;

	

	$users_list = $GLOBALS['engrave_shop_db']->getAll($sql);

	

	foreach ($users_list as $key=>$val)

	{

		$users_list[$key]['change_time'] = local_date('Y-m-d H:i:s',$val['change_time']);

	}

	return array('users_list'=>$users_list, 'filter' => $filter, 'page_count' => ceil($total/$pageSize), 'record_count' => $filter['record_count']);

}



/**

 * 修改会员信息

 * @param unknown $users:会员对象

 * @return boolean：若修改成功，返回true，反之，返回false！

 */

function engrave_users_update($users)

{

	$sql = 'update ' . $GLOBALS['engrave_shop']->table("users") .

	" set email = '".$users['email'].

	"', user_country = '".$users['user_country'].

	"', user_province = '".$users['user_province'].

	"', user_city = '".$users['user_city'].

	"', user_identitycard = '".$users['user_identitycard'].

	"', mobile_phone = '".$users['mobile_phone'].

	"', home_phone = '".$users['home_phone'].

	"', user_address = '".$users['user_address'].

	"', user_zipcode = '".$users['user_zipcode'].

	"', user_taobaowangwang = '".$users['user_taobaowangwang'].

	"', user_wechat = '".$users['user_wechat'].

	"', user_remark = '".$users['user_remark'].

	"', passwd_question = '".$users['passwd_question'].

	"', passwd_answer = '".$users['passwd_answer'].

	"', user_isperfect = '".$users['user_isperfect'].

	"' where user_id=".$users['user_id'];

	$res = $GLOBALS['engrave_shop_db']->query($sql);

	if($res==1)

	{

		return  true;

	}

	else

	{

		return false;

	}

}



/**

 * 

 * 修改头像

 * @param unknown $users：用户对象

 * @return boolean:若修改成功，返回true，反之，返回false！

 */

function engrave_users_update_headculpture($users)

{

	$sql = 'update ' . $GLOBALS['engrave_shop']->table("users") .

	" set user_headsculpture = '".$users['user_headsculpture'].

	"' where user_id=".$users['user_id'];

	$res = $GLOBALS['engrave_shop_db']->query($sql);

	if($res==1)

	{

		return  true;

	}

	else

	{

		return false;

	}

}



/**

 * 修改积分

 * @param number $pay_points：可用积分

 * @param number $rank_points：等级积分

 * @param number $user_id：用户ID

 * @param unknown $conn：数据库连接对象

 * @return boolean：若修改积分成功，返回true，反之，返回false！

 */

function engrave_users_update_points($pay_points = 0,$rank_points = 0,$user_id=0,$conn)

{

	$sql = 'update ' . $GLOBALS['engrave_shop']->table("users");

	$sql .= " set pay_points = pay_points + ".$pay_points;

	$sql .= ", rank_points = rank_points + ".$rank_points;

	$sql .= " where user_id=".$user_id;

	$res = mysql_query($sql,$conn);

	if($res!==false)

	{

		return  true;

	}

	else

	{

		return false;

	}

}



/**

 * 修改账户余额

 * @param number $money：消费金额

 * @param number $user_id：用户ID

 * @param bool $isuse_subsidiary：是否使用副账户余额

 * @param string $conn：数据库连接对象

 * @return boolean：若修改成功，返回true，反之，返回false！

 */

function engrave_users_update_money($money=0,$user_id=0,$isuse_subsidiary=false,$conn)

{

	$sql = 'update ' . $GLOBALS['engrave_shop']->table("users");

	if($isuse_subsidiary)

	{

		$sql .= "set user_money = 0,user_subsidiarymoney = user_subsidiarymoney-".$money;

	}

	else{

		$sql .= " set user_money = user_money-".$money;

	}

	$sql .= " where user_id=".$user_id;

	$res = mysql_query($sql,$conn);

	if($res!==false)

	{

		return  true;

	}

	else

	{

		return false;

	}

}



/**

 * 修改账户余额

 * @param number $money：充值金额

 * @param number $jpy_amount：日元金额

 * @param number $user_id：用户ID

 * @param string $conn：数据库连接对象

 * @return boolean：若修改成功，返回true，反之，返回false！

 */

function engrave_users_updatejpy_money($money=0,$jpy_amount=0,$user_id=0,$conn)

{

	$sql = 'update ' . $GLOBALS['engrave_shop']->table("users").

	" set user_money = user_money-".$money.

	", user_jpymoney = user_jpymoney+".$jpy_amount.

	" where user_id=".$user_id;



	$res = mysql_query($sql,$conn);

	if($res!==false)

	{

		return  true;

	}

	else

	{

		return false;

	}

}



/**

 * 修改账户余额:日元对话默认货币

 * @param number $money：充值金额

 * @param number $jpy_amount：日元金额

 * @param number $user_id：用户ID

 * @param string $conn：数据库连接对象

 * @return boolean：若修改成功，返回true，反之，返回false！

 */

function engrave_users_cancel_exchage($money=0,$jpy_amount=0,$user_id=0,$conn)

{

	$sql = 'update ' . $GLOBALS['engrave_shop']->table("users").

	" set user_money = user_money+".$money.

	", user_jpymoney = user_jpymoney-".$jpy_amount.

	" where user_id=".$user_id;



	$res = mysql_query($sql,$conn);

	if($res!==false)

	{

		return  true;

	}

	else

	{

		return false;

	}

}





/**

 * 支付

 * @param number $pay_money：支付金额

 * @param number $user_money：主账户余额

 * @param number $user_jpymoney：日元账户余额

 * @param number $user_subsidiary：副账户余额

 * @param number $exchageRate：日元汇率

 * @param number $pay_points：积分

 * @param number $user_id：用户ID

 * @param number $order_paymenttype：支付方式；1：日元；2：主账户；3：副账户

 * @param string $conn：数据库连接对象

 * @return boolean：若支付成功，返回true，反之，返回false！

 */

function engrave_users_pay_money($pay_money=0,$user_money=0,$user_jpymoney=0,$user_subsidiary=0,$exchageRate=0,$pay_points=0,$user_id=0,$order_paymenttype=1,$conn)

{

	/**

	 * 1：先使用日元账户：需要将日元金额转化为默认货币下

	 * 2：再使用主账户

	 * 3：最后使用副账户

	 */

	$sql = 'update ' . $GLOBALS['engrave_shop']->table("users").' set pay_points=pay_points-'.$pay_points;

	switch ($order_paymenttype)

	{

		case 1:

			//日元账户金额不足

			if($user_jpymoney < round(($pay_money*$exchageRate),2))

			{

				$pay_money = $pay_money - $user_jpymoney;

				$sql .= ", user_jpymoney = 0";

				/**

				 * 主账户金额不足

				 */

				if($user_money < $pay_money)

				{

					$pay_money = $pay_money - $user_money;

					$sql .= ",user_money = 0";

					/**

					 * 副账户余额不足：此时前端出现问题，正常情况下不会出现余额不足

					 */

					if($user_subsidiary < $pay_money)

					{

						return false;

					}

					else{

						$sql .= ",user_subsidiarymoney = user_subsidiarymoney-".$pay_money;

					}

				}

				else{

					$sql .= ",user_money = user_money-".$pay_money;

				}

			}

			/**

			 * 日元账户金额足够

			 */

			else{

				$sql .= " , user_jpymoney = user_jpymoney-".round(($pay_money*$exchageRate),2);

			}

			break;

		case 2:

			//主账户金额不足

			if($user_money < $pay_money)

			{

				$pay_money = $pay_money - $user_money;

				$sql .= ", user_money = 0";

				/**

				 * 日元账户金额不足

				 */

				if($user_jpymoney < round(($pay_money*$exchageRate),2))

				{

					$pay_money = $pay_money - $user_jpymoney;

					$sql .= ",user_jpymoney = 0";

					/**

					 * 副账户余额不足：此时前端出现问题，正常情况下不会出现余额不足

					 */

					if($user_subsidiary < $pay_money)

					{

						return false;

					}

					else{

						$sql .= ",user_subsidiarymoney = user_subsidiarymoney-".$pay_money;

					}

				}

				/**

				 * 日元账户足够

				 */

				else{

					$sql .= ",user_jpymoney = user_jpymoney-".round(($pay_money*$exchageRate),2);

				}

			}

			/**

			 * 主账户金额足够

			 */

			else{

				$sql .= " , user_money = user_money-".$pay_money;

			}

			break;

		case 3:

			//副账户金额不足

			if($user_subsidiary < $pay_money)

			{

				$pay_money = $pay_money - $user_subsidiary;

				$sql .= ", user_subsidiarymoney = 0";

				/**

				 * 日元账户金额不足

				 */

				if($user_jpymoney < round(($pay_money*$exchageRate),2))

				{

					$pay_money = $pay_money - $user_jpymoney;

					$sql .= ",user_jpymoney = 0";

					/**

					 * 主账户余额不足：此时前端出现问题，正常情况下不会出现余额不足

					 */

					if($user_money < $pay_money)

					{

						return false;

					}

					else{

						$sql .= ",user_money = user_money-".$pay_money;

					}

				}

				/**

				 * 日元账户足够

				 */

				else{

					$sql .= ",user_jpymoney = user_jpymoney-".round(($pay_money*$exchageRate),2);

				}

			}

			/**

			 * 副账户金额足够

			 */

			else{

				$sql .= " , user_subsidiarymoney = user_subsidiarymoney-".$pay_money;

			}

			break;

	}



	$sql .= " where user_id=".$user_id;

	//echo $sql;

	$res = mysql_query($sql,$conn);

	if($res!==false)

	{

		return  true;

	}

	else

	{

		return false;

	}

}



/**

 * 获得 注册协议

 *

 * @access  public

 * @params  integer $isdelete

 * @params  integer $real_goods

 * @params  integer $conditions

 * @return  array

 */

function engrave_system_register($isdelete = 1, $conditions = '')

{

	$sql = "SELECT id,parent_id,code,type,store_range,store_dir,value,sort_order " .

			" FROM " . $GLOBALS['engrave']->table('system_config') . ' where 1=1 ' .$conditions;



	$row = $GLOBALS['engrave_db']->getAll($sql);

	return array('register' => $row);

}



/**

 * 获得 会员是否注册

 * @param string $username:用户名称

 * @param string $email：用户邮箱

 * @param string $tel：手机号

 * @return boolean：若已注册，则返回true，反之，返回false！

 */

function member_registered($username='',$email='',$tel='')

{

	$conditions='';

	if($username!='')

	{

		$conditions=$conditions . ' and user_name = \'' . $username.'\'';

	}

	if($email != '')

	{

		$conditions= $conditions . " and email = '" . $email."'";

	}

	if($tel != '')

	{

		$conditions= $conditions . " and mobile_phone = '" . $tel."'";

	}

	$sql = "SELECT count(*) " .

			" FROM " . $GLOBALS['engrave_shop']->table('users') . ' where 1=1 ' .$conditions;

	$res = $GLOBALS['engrave_shop_db']->getOne($sql);

	if($res==0)

	{

		return false;

	}

	else

	{

		return true;

	}

}



/**

 * 获得 推荐码是否存在

 * @param string $refencer_recommend_code:推荐码是否存在

 * @return boolean：若已注册，则返回true，反之，返回false！

 */

function member_exist_referencecode($refencer_recommend_code = '')

{

	$conditions = ' and recommend_code = \'' . $refencer_recommend_code.'\'';

	

	$sql = "SELECT count(*) " .

			" FROM " . $GLOBALS['engrave_shop']->table('users') . ' where 1=1 ' .$conditions;



	$res = $GLOBALS['engrave_shop_db']->getOne($sql);

	

	

	if($res==0)

	{

		return false;

	}

	else

	{

		return true;

	}

}



/**

 * 会员注册：生成推荐码、入库码

 * @return multitype:unknown Ambigous <string, unknown>：recommend_code；storage_code

 */

function member_register_recommend_code()

{

    //随机生成入库码

    $config_sql="select code,value from " . 

    $GLOBALS['engrave']->table("system_config") .

    " where code in ('s_recommend_code','s_recommend_code_length','s_storage','s_random')";

    $config_value = $GLOBALS['engrave_db']->getAll($config_sql);

	//推荐码生成规则

	$s_recommend_code = '';

	$s_recommend_code_length = '';

	$s_storage = '';

	$s_random = '';

	foreach ($config_value as $key=>$value)

	{

		if($value['code']=='s_recommend_code')

		{

			$s_recommend_code=$value['value'];

		}

		elseif($value['code']=='s_recommend_code_length')

		{

			$s_recommend_code_length=$value['value'];

		}

		elseif($value['code']=='s_storage')

		{

			$s_storage=$value['value'];

		}

		elseif($value['code']=='s_random')

		{

			$s_random=$value['value'];

		}

	}

	//推荐码

	$recommend_code = GetRandom($s_recommend_code,$s_recommend_code_length,false);

	while (ValidateRecommendCode($recommend_code)!=0)

	{

		$recommend_code = GetRandom($s_recommend_code,$s_recommend_code_length,false);

	}

	//验证推荐码是否唯一，如果不唯一，重新生成

	//入库码

	$storage_code = GetRandom($s_storage,$s_random,true);

	while (ValidateStorageCode($storage_code)!=0)

	{

		$storage_code = GetRandom($s_storage,$s_random,true);

	}

	

	return array("recommend_code"=>$recommend_code,"storage_code"=>$storage_code);

}



/**

 * 会员注册:注册时需要要推荐码、入库码，可调用member_register_recommend_code（）函数

 * @param unknown $user

 * @param unknown $conn:数据库连接对象

 * @return unknown

 */

function member_register($user,$recommend_code='',$storage_code='',$conn)

{

	$username=$user['username'];

	$email=$user['e_mail'];

	$password=$user['password'];

	$qq=$user['qq'];

	$tel=$user['tel'];

	$password_question=$user['password_question'];

	$password_answer=$user['password_answer'];

	$refencer_recommend_code=$user['refencer_recommend_code'];

    $reg_date = time();//获取系统时间

    $ip = real_ip();//获取IP地址



    //随机生成salt

    $salt=rand(1000, 9999);

	$post_password = compile_password(array('md5password'=>$password,'type'=>PWD_SUF_SALT,'salt'=>$salt));

	

	$sql = 'INSERT INTO ' . $GLOBALS['engrave_shop']->table("users") . 

	"(`email`, `user_name`, `password`, `reg_time`, `last_login`, `last_ip`,`salt`," .

	"`recommend_code`,`storage_code`,`user_storage_code`,`qq`,`mobile_phone`,`passwd_question`,".

	"`passwd_answer`,`refencer_recommend_code`,`reg_ip`,".

	"user_identitycard,user_country,user_province,user_city,user_address,user_zipcode,".

	"user_taobaowangwang,user_wechat,user_remark,user_isperfect,user_warehouseid,user_headsculpture) VALUES".

	" ('$email', '$username', '$post_password', '$reg_date', '$reg_date', '$ip','$salt'," .

	"'$recommend_code','$storage_code','$storage_code','$qq','$tel','$password_question',".

	"'$password_answer','$refencer_recommend_code','$ip','',0,0,0,'','','','','',0,".$user['user_warehouseid'].",'themes/default/images/m_acc12.jpg')";



	$res = mysql_query($sql,$conn);

	if($res !== false)

	{

		return true;

	}

	else

	{

		return false;

	}

}



/**

 * 登陆

 * @param unknown $username

 * @param unknown $password

 */

function Login($username,$password)

{

	//根据 用户姓名（唯一）获取salt

	$selbyname='select user_id,user_name,user_money,frozen_money,pay_points,rank_points,password,salt,'.

	'email,mobile_phone,storage_code,refencer_recommend_code,'.

	"user_identitycard,user_country,user_province,user_city,user_address,user_zipcode,".

	"user_taobaowangwang,user_wechat,user_remark,user_isperfect".

	' from '. 

	$GLOBALS['engrave_shop']->table("users").

	' where user_name = '."'$username'" .

	' or mobile_phone = '."'$username'" .

	' or email = '."'$username'";

	$res=$GLOBALS['engrave_shop_db']->getRow($selbyname);

	//定义数据库取出的密码、salt

	$dbpassword='';

	$dbsalt='';

	//获取密码、salt

	$dbsalt= $res['salt'];

	$dbpassword=$res['password'];

	

	if($dbpassword=='')

	{

		return '';

	}

	//密码加密

	$compile_password = compile_password(array('md5password'=>$password,'type'=>PWD_SUF_SALT,'salt'=>$dbsalt));

	

	if($compile_password==$dbpassword)

	{

		return $res;

	}

	else 

	{

		return '';

	}

}



/**

 * 修改密码

 * @param number $userid：用户ID

 * @param unknown $userpassword：用户密码

 */

function Update_Password($userid=0,$userpassword)

{

	//根据 用户ID（唯一）获取salt

	$selbyname='select user_id,user_name,user_money,frozen_money,pay_points,rank_points,password,salt,'.

	'email,mobile_phone,storage_code,refencer_recommend_code from '. 

	$GLOBALS['engrave_shop']->table("users").

	' where user_id = '."'$userid'";

	$res=$GLOBALS['engrave_shop_db']->getRow($selbyname);

	//获取密码、salt

	$dbsalt= $res['salt'];

	//密码加密

	$compile_password = compile_password(array('md5password'=>$userpassword,'type'=>PWD_SUF_SALT,'salt'=>$dbsalt));

	

	

	$sql = 'update ' . $GLOBALS['engrave_shop']->table("users") . 

	" set password = '".$compile_password.

	"' where user_id=".$userid;



	$res = $GLOBALS['engrave_shop_db']->query($sql);

	if($res==1)

	{

		return  true;

	}

	else

	{

		return false;

	}

}



/**

 * 获取随机值

 * @param 类型 $type

 * @param 长度 $length

 * @param 是否验证  $isvalidate

 */

function GetRandom($type='',$length=0,$isvalidate=false)

{

	switch ($type) 

	{

		case "{Random}":

			$string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 

		break;

		case "{Number}":

			$string = '0123456789'; 

		break;

		case "{Random}{Number}":

			$string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

		break;

		case "{Number}{Random}":

			$string = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

		break;

	}

	

	$validate_value=0;

	$index=0;

	$random='';

	while(strlen($random)<$length)

	{

		$index++;

		$random_value = rand(0, strlen($string)-1);

		$validate_value = $validate_value+($index*($random_value+1));

		$random .= $string[$random_value]; //从$s中随机产生一个字符

	}

	if($isvalidate)

	{

		$validate_value = $validate_value % strlen($string);

		$random .= $string[$validate_value-1];

	}

	return $random;

}



/**

 * 验证：入库码是否唯一

 * @param unknown $recommend_code：推荐码

 * @param unknown $conn：数据库连接对象

 */

function ValidateStorageCode($storage_code)

{

	$sql= 'select count(*) from '. $GLOBALS['engrave_shop']->table("users").

	" where storage_code="."'$storage_code'";



	$row = $GLOBALS['engrave_shop_db']->getOne($sql);

	return $row;

}



/**

 * 验证：推荐码是否唯一

 * @param unknown $recommend_code：推荐码

 * @param unknown $conn：数据库连接对象

 */

function ValidateRecommendCode($recommend_code)

{

	$sql= 'select count(*) from '. $GLOBALS['engrave_shop']->table("users").

	" where recommend_code="."'$recommend_code'";



	$row = $GLOBALS['engrave_shop_db']->getOne($sql);

	return $row;

}



/**

 *  编译密码函数

 *

 * @access  public

 * @param   array   $cfg 包含参数为 $password, $md5password, $salt, $type

 *

 * @return void

 */

function compile_password ($cfg)

{

	if (isset($cfg['password']))

	{

		$cfg['md5password'] = md5($cfg['password']);

	}

	if (empty($cfg['type']))

	{

		$cfg['type'] = PWD_MD5;

	}



	switch ($cfg['type'])

	{

		case PWD_MD5 :

			if(!empty($cfg['ec_salt']))

			{

				return md5($cfg['md5password'].$cfg['ec_salt']);

			}

			else

			{

				return $cfg['md5password'];

			}



		case PWD_PRE_SALT :

			if (empty($cfg['salt']))

			{

				$cfg['salt'] = '';

			}



			return md5($cfg['salt'] . $cfg['md5password']);



		case PWD_SUF_SALT :

			if (empty($cfg['salt']))

			{

				$cfg['salt'] = '';

			}



			return md5($cfg['md5password'] . $cfg['salt']);



		default:

			return '';

	}

}

/**

 * 通过邮箱或者用户名获取该用户的ID

 *

 * @access  public

 * @access  $expressNumber 用户的user_id

 */

function get_user_id($username='',$email='')

{

	$sql='';

	$conditions = '';

	if($username!='')

	{

		$conditions= $conditions . " and user_name = '" . $username."'";

     	$sql = "SELECT user_id " .

			   " FROM " . $GLOBALS['engrave_shop']->table('users') . ' where 1=1 ' . $conditions;

	}

	if($email != '')

	{

		$conditions= $conditions . " and email = '" . $email."'";

		$sql = "SELECT user_id " .

			   " FROM " . $GLOBALS['engrave_shop']->table('users') . ' where 1=1 ' . $conditions;

	}

	$user_id = $GLOBALS['engrave_shop_db']->getOne($sql);

	return $user_id;

}



/*获取邮箱*/

function get_user_name($email='')

{

	$conditions = '';

	if($email != '')

	{

		$conditions= $conditions . " and email = '" . $email."'";

	}

	$sql = "SELECT user_name " .

			" FROM " . $GLOBALS['engrave_shop']->table('users') . ' where 1=1 ' . $conditions;

	return $GLOBALS['engrave_shop_db']->getOne($sql);

}

/*获取用户名*/

function get_user_email($username='')

{

	$conditions = '';

	if($username != '')

	{

		$conditions= $conditions . " and user_name = '" . $username."'";

	}

	$sql = "SELECT email " .

			" FROM " . $GLOBALS['engrave_shop']->table('users') . ' where 1=1 ' . $conditions;

	return $GLOBALS['engrave_shop_db']->getOne($sql);

}





?>