<?php
  defined('BASEPATH') OR exit('no direct access allowed');
 
  if (!function_exists('random'))
  {
    function random($length)
    {
			return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
      exit;
    }
  }

?>
