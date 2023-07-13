<?php defined('BASEPATH') OR exit('no direct access allowed.');
  // ------- TH

  $CI =& get_instance();
  $CI->load->helper('file');
  /**
    * [TH Thai ไทย]
    * @return [echo] [lang('xxxx');]
  **/
  $lang['response'] = json_decode(read_file(BASEPATH. 'resource/locale-th.json'),TRUE);

  /**
    * [หน้า ISMS]
    * @return [echo] [lang('xxxx');]
  **/
  $lang['isms_ism'] = 'ระบบ'; //ระบบ

  /**
    * [หน้า Home]
    * @return [echo] [lang('xxxx');]
  **/
  $lang['home_title'] = 'หน้าแรก'; //หน้าแรก

  // ------- TH
?>
