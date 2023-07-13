<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Layout_url
  {
    //Layout_layout-part URL  base_url() // str_replace('----url f ----/', '', base_url())
    public function url($path_and_filename)
    {
      return ''. str_replace('layout-part/', '', base_url()) . '' . $path_and_filename .'';
    }
    public function uri($path_and_filename)
    {
      return ''. str_replace('layout-part/', '', base_url()) . 'assets/layout-part/' . $path_and_filename .'';
    }
    public function upload($path_and_filename)
    {
      return ''. $_SERVER['DOCUMENT_ROOT'] . 'uploads/layout-part/' . $path_and_filename .'';
    }
    public function uploadshow($path_and_filename)
    {
      return ''. str_replace('layout-part/', '', base_url()) . 'uploads/layout-part/' . $path_and_filename .'';
    }
  }
?>
