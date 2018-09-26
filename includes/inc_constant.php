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
 * $Id: cls_constant.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */
if (!defined('IN_ENGRAVE'))
{
    die('Hacking attempt');
}
/* ͼƬ������س��� */
define('ERR_INVALID_IMAGE',         1);
define('ERR_NO_GD',                 2);
define('ERR_IMAGE_NOT_EXISTS',      3);
define('ERR_DIRECTORY_READONLY',    4);
define('ERR_UPLOAD_FAILURE',        5);
define('ERR_INVALID_PARAM',         6);
define('ERR_INVALID_IMAGE_TYPE',    7);
/* �����س��� */
define('ERR_COPYFILE_FAILED',       1);
define('ERR_CREATETABLE_FAILED',    2);
define('ERR_DELETEFILE_FAILED',     3);
/* ��Ʒ�������ͳ��� */
define('ATTR_TEXT',                 0);
define('ATTR_OPTIONAL',             1);
define('ATTR_TEXTAREA',             2);
define('ATTR_URL',                  3);
/* ��Ա�����س��� */
define('ERR_USERNAME_EXISTS',       1); // �û����Ѿ�����
define('ERR_EMAIL_EXISTS',          2); // Email�Ѿ�����
define('ERR_INVALID_USERID',        3); // ��Ч��user_id
define('ERR_INVALID_USERNAME',      4); // ��Ч���û���
define('ERR_INVALID_PASSWORD',      5); // �������
define('ERR_INVALID_EMAIL',         6); // email����
define('ERR_USERNAME_NOT_ALLOW',    7); // �û�������ע��
define('ERR_EMAIL_NOT_ALLOW',       8); // EMAIL������ע��
/* ���빺�ﳵʧ�ܵĴ������ */
define('ERR_NOT_EXISTS',            1); // ��Ʒ������
define('ERR_OUT_OF_STOCK',          2); // ��Ʒȱ��
define('ERR_NOT_ON_SALE',           3); // ��Ʒ���¼�
define('ERR_CANNT_ALONE_SALE',      4); // ��Ʒ���ܵ�������
define('ERR_NO_BASIC_GOODS',        5); // û�л��
define('ERR_NEED_SELECT_ATTR',      6); // ��Ҫ�û�ѡ������
/* ���ﳵ��Ʒ���� */
define('CART_GENERAL_GOODS',        0); // ��ͨ��Ʒ
define('CART_GROUP_BUY_GOODS',      1); // �Ź���Ʒ
define('CART_AUCTION_GOODS',        2); // ������Ʒ
define('CART_SNATCH_GOODS',         3); // �ᱦ���
define('CART_EXCHANGE_GOODS',       4); // ����̳�
/* ����״̬ */
define('OS_UNCONFIRMED',            0); // δȷ��
define('OS_CONFIRMED',              1); // ��ȷ��
define('OS_CANCELED',               2); // ��ȡ��
define('OS_INVALID',                3); // ��Ч
define('OS_RETURNED',               4); // �˻�
define('OS_SPLITED',                5); // �ѷֵ�
define('OS_SPLITING_PART',          6); // ���ֵַ�
/* ֧������ */
define('PAY_ORDER',                 0); // ����֧��
define('PAY_SURPLUS',               1); // ��ԱԤ����
/* ����״̬ */
define('SS_UNSHIPPED',              0); // δ����
define('SS_SHIPPED',                1); // �ѷ���
define('SS_RECEIVED',               2); // ���ջ�
define('SS_PREPARING',              3); // ������
define('SS_SHIPPED_PART',           4); // �ѷ���(������Ʒ)
define('SS_SHIPPED_ING',            5); // ������(����ֵ�)
define('OS_SHIPPED_PART',           6); // �ѷ���(������Ʒ)
/* ֧��״̬ */
define('PS_UNPAYED',                0); // δ����
define('PS_PAYING',                 1); // ������
define('PS_PAYED',                  2); // �Ѹ���
/* �ۺ�״̬ */
define('CS_AWAIT_PAY',              100); // �������������ѷ�����δ����ǻ���������δ����
define('CS_AWAIT_SHIP',             101); // ���������������δ�������ǻ����������Ѹ�����δ����
define('CS_FINISHED',               102); // ����ɣ���ȷ�ϡ��Ѹ���ѷ���
/* ȱ������ */
define('OOS_WAIT',                  0); // �ȴ���ﱸ����ٷ�
define('OOS_CANCEL',                1); // ȡ��
define('OOS_CONSULT',               2); // �����Э��
/* �ʻ���ϸ���� */
define('SURPLUS_SAVE',              0); // Ϊ�ʻ���ֵ
define('SURPLUS_RETURN',            1); // ���ʻ����
/* ����״̬ */
define('COMMENT_UNCHECKED',         0); // δ���
define('COMMENT_CHECKED',           1); // ����˻��ѻظ�(������ʾ)
define('COMMENT_REPLYED',           2); // �����۵��������ڻظ�
/* ���ŵķ�ʽ */
define('SEND_BY_USER',              0); // ���û�����
define('SEND_BY_GOODS',             1); // ����Ʒ����
define('SEND_BY_ORDER',             2); // ����������
define('SEND_BY_PRINT',             3); // ���·���
/* �������� */
define('IMG_AD',                    0); // ͼƬ���
define('FALSH_AD',                  1); // flash���
define('CODE_AD',                   2); // ������
define('TEXT_AD',                   3); // ���ֹ��
/* �Ƿ���Ҫ�û�ѡ������ */
define('ATTR_NOT_NEED_SELECT',      0); // ����Ҫѡ��
define('ATTR_NEED_SELECT',          1); // ��Ҫѡ��
/* �û������������� */
define('M_MESSAGE',                 0); // ����
define('M_COMPLAINT',               1); // Ͷ��
define('M_ENQUIRY',                 2); // ѯ��
define('M_CUSTOME',                 3); // �ۺ�
define('M_BUY',                     4); // ��
define('M_BUSINESS',                5); // �̼�
define('M_COMMENT',                 6); // ����
/* �Ź��״̬ */
define('GBS_PRE_START',             0); // δ��ʼ
define('GBS_UNDER_WAY',             1); // ������
define('GBS_FINISHED',              2); // �ѽ���
define('GBS_SUCCEED',               3); // �Ź��ɹ������Է����ˣ�
define('GBS_FAIL',                  4); // �Ź�ʧ��
/* ����Ƿ����ʼ� */
define('BONUS_NOT_MAIL',            0);
define('BONUS_MAIL_SUCCEED',        1);
define('BONUS_MAIL_FAIL',           2);
/* ��Ʒ����� */
define('GAT_SNATCH',                0);
define('GAT_GROUP_BUY',             1);
define('GAT_AUCTION',               2);
define('GAT_POINT_BUY',             3);
define('GAT_PACKAGE',               4); // ��ֵ���
/* �ʺű䶯���� */
define('ACT_SAVING',                0);     // �ʻ���ֵ
define('ACT_DRAWING',               1);     // �ʻ����
define('ACT_ADJUSTING',             2);     // �����ʻ�
define('ACT_OTHER',                99);     // ��������
/* ������ܷ��� */
define('PWD_MD5',                   1);  //md5���ܷ�ʽ
define('PWD_PRE_SALT',              2);  //ǰ����֤���ļ��ܷ�ʽ
define('PWD_SUF_SALT',              3);  //������֤���ļ��ܷ�ʽ
/* ���·������� */
define('COMMON_CAT',                1); //��ͨ����
define('SYSTEM_CAT',                2); //ϵͳĬ�Ϸ���
define('INFO_CAT',                  3); //�����Ϣ����
define('UPHELP_CAT',                4); //������������
define('HELP_CAT',                  5); //���������
/* �״̬ */
define('PRE_START',                 0); // δ��ʼ
define('UNDER_WAY',                 1); // ������
define('FINISHED',                  2); // �ѽ���
define('SETTLED',                   3); // �Ѵ���
/* ��֤�� */
define('CAPTCHA_REGISTER',          1); //ע��ʱʹ����֤��
define('CAPTCHA_LOGIN',             2); //��¼ʱʹ����֤��
define('CAPTCHA_COMMENT',           4); //����ʱʹ����֤��
define('CAPTCHA_ADMIN',             8); //��̨��¼ʱʹ����֤��
define('CAPTCHA_LOGIN_FAIL',       16); //��¼ʧ�ܺ���ʾ��֤��
define('CAPTCHA_MESSAGE',          32); //����ʱʹ����֤��
/* �Żݻ���Żݷ�Χ */
define('FAR_ALL',                   0); // ȫ����Ʒ
define('FAR_CATEGORY',              1); // ������ѡ��
define('FAR_BRAND',                 2); // ��Ʒ��ѡ��
define('FAR_GOODS',                 3); // ����Ʒѡ��
/* �Żݻ���Żݷ�ʽ */
define('FAT_GOODS',                 0); // ����Ʒ���Żݹ���
define('FAT_PRICE',                 1); // �ֽ����
define('FAT_DISCOUNT',              2); // �۸�����Ż�
/* �������� */
define('COMMENT_LOGIN',             1); //ֻ�е�¼�û���������
define('COMMENT_CUSTOM',            2); //ֻ���й�һ�����Ϲ�����Ϊ���û���������
define('COMMENT_BOUGHT',            3); //ֻ�й��򹻸���Ʒ���˿�������
/* �����ʱ�� */
define('SDT_SHIP',                  0); // ����ʱ
define('SDT_PLACE',                 1); // �¶���ʱ
/* ���ܷ�ʽ */
define('ENCRYPT_ZC',                1); //zc���ܷ�ʽ
define('ENCRYPT_UC',                2); //uc���ܷ�ʽ
/* ��Ʒ��� */
define('G_REAL',                    1); //ʵ����Ʒ
define('G_CARD',                    0); //���⿨
/* ��ֶһ� */
define('TO_P',                      0); //�һ����̳���ѻ��
define('FROM_P',                    1); //���̳���ѻ�ֶһ�
define('TO_R',                      2); //�һ����̳ǵȼ����
define('FROM_R',                    3); //���̳ǵȼ���ֶһ�
/* ֧�����̼��˻� */
define('ALIPAY_AUTH', 'gh0bis45h89m5mwcoe85us4qrwispes0');
define('ALIPAY_ID', '2088002052150939');
/* ���feed�¼���UC��TYPE*/
define('BUY_GOODS',                 1); //������Ʒ
define('COMMENT_GOODS',             2); //�����Ʒ����
/* �ʼ������û� */
define('SEND_LIST', 0);
define('SEND_USER', 1);
define('SEND_RANK', 2);
/* license�ӿ� */
define('LICENSE_VERSION', '1.0');
/* ���ͷ�ʽ */
define('SHIP_LIST', 'cac|city_express|ems|flat|fpd|post_express|post_mail|presswork|sf_express|sto_express|yto|zto');
?>