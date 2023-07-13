<?php defined('BASEPATH') OR exit('no direct access allowed.');
  // ------- LO

  $CI =& get_instance();
  $CI->load->helper('file');
  /**
    * [lo Laos ลาว]
    * @return [echo] [lang('xxxx');]
  **/
  $lang['response'] = json_decode(read_file(BASEPATH. 'resource/locale-en.json'),TRUE);

  /**
    * [หน้า ISMS]
    * @return [echo] [lang('xxxx');]
  **/
  $lang['isms_ism'] = 'System'; //ระบบ

  /**
    * [หน้า Home]
    * @return [echo] [lang('xxxx');]
  **/
  $lang['home_title'] = 'ເຮືອນ';  //หน้าแรก

  // ------- LO
?>
