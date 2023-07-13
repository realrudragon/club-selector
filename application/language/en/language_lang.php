<?php defined('BASEPATH') OR exit('no direct access allowed.');
  // ------- EN

  $CI =& get_instance();
  $CI->load->helper('file');
  /**
    * [EN English อังกฤษ]
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
  $lang['home_title'] = 'Home'; //หน้าแรก

  // ------- EN
?>
