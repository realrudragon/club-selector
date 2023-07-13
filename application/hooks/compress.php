<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
  // Mr. Somkhane Yuhong
  // Email : somkhane.nea@gmail.com
  // Tel : +66800796564
  // Facebook : https://www.facebook.com/somkhane.sy
  // Line : https://line.me/R/ti/p/%40tbf7649k
**/

function compress()
{
  /* MO Somkhane */
  /* 1.pplication/config/config.php - $config['enable_hooks'] = TRUE; */
  /* 2.application/config/hooks.php - compress output */
  /* 3.application/hooks/compress.php - function compress() */
  $CI =& get_instance();
  $buffer = $CI->output->get_output();
  $search = array(
    '/\n/',			// replace end of line by a space
    '/\>[^\S ]+/s',		// strip whitespaces after tags, except space
    '/[^\S ]+\</s',		// strip whitespaces before tags, except space
    '/(\s)+/s'		// shorten multiple whitespace sequences
  );
  $replace = array(
    ' ',
    '>',
    '<',
    '\\1'
  );
  $buffer = preg_replace($search, $replace, $buffer);
  $CI->output->set_output($buffer);
  $CI->output->_display();
}

/* End of file compress.php */
/* Location: ./system/application/hooks/compress.php */
