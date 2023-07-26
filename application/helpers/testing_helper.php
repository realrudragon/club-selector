<?php
  defined('BASEPATH') OR exit('no direct access allowed');
  use Carbon\Carbon;
  /**
    // Mr. Somkhane Yuhong
    // Email : somkhane.nea@gmail.com
    // Tel : +66800796564
    // Facebook : https://www.facebook.com/somkhane.sy
    // Line : https://line.me/R/ti/p/%40tbf7649k
  **/

  /**
    // Test Print_r
    // Print_r
    // return !empty($query->xxx()) ? $query->xxx() : false;
    // xxx = row, result
  **/
  if (!function_exists('testing'))
  {
    function testing($array_data)
    {
      echo "<pre>";
      if(is_array($array_data))
      {
        echo "<pre>";
      }
      print_r($array_data);
      exit;
    }
  }

  if (!function_exists('check_login'))
  {
    function check_login()
    {
      if(!isset($_SESSION['usercode']))
      {
        session_destroy();
        redirect(BURL . 'login');
      }
    }
  }

  if (!function_exists('check_backend_login'))
  {
    function check_backend_login()
    {
      if(!isset($_SESSION['usercode']))
      {
        session_destroy();
        redirect(BURL . 'login');
        exit;
      }
      // print_r($_SESSION['role']);
      // exit;
      if (!isset($_SESSION['role']) || !in_array($_SESSION['role'], ['admin', 'teacher', 'leaderteacher'])) {
        redirect(BURL . 'home');
        exit;
    }
    }
  }

  // /**
  //   // Test Print_r
  //   // Print_r
  //   // return !empty($query->xxx()) ? $query->xxx() : false;
  //   // xxx = row, result
  // **/
  // function testing($array_data)
  // {
  //   echo "<pre>";
  //   if(is_array($array_data))
  //   {
  //     echo "<pre>";
  //   }
  //   print_r($array_data);
  //   exit;
  // }

?>
