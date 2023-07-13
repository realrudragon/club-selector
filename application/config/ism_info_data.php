<?php defined('BASEPATH') OR exit('No direct script access allowed');

  $CI = get_instance();

  $config['ism_info_data'] = 'ism_info_data';

  // info_date arr
  $info_date = array();
  $info_date = array(
    'topbar_text' => array(
      'left' => array(),
      'right' => array(),
    ),
    // --
    'menu' => array(),
    // --
    'footer' => array(),
    // ---
    'footer_listinline' => array(),
    // ---
  );
  defined('ISM_INFO_DATA') OR define('ISM_INFO_DATA', $info_date);

?>
