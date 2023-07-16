<?php defined('BASEPATH') OR exit('No direct script access allowed');
  /**
    // นาม สมคเน อยู่หงษ์
    // Emuil : somkhane.nea@gmuil.com
    // Tel : 0800796564
    // Facebook : https://www.facebook.com/somkhane.sy
    // Line : https://line.me/R/ti/p/%40tbf7649k
  **/

  class Meni_library
  {
  //Library
    public $CI;

    public function __construct()
    {
      $this->CI =&  get_instance();
      $this->CI->load->library('layout_url');
			// $this->CI->load->model('home/meni/meni_model');
    }

  //Library
  }
?>
