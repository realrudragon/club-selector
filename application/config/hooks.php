<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

/* MO Somkhane */
/* 1.pplication/config/config.php - $config['enable_hooks'] = TRUE; */
/* 2.application/config/hooks.php - compress output */
/* 3.application/hooks/compress.php - function compress() */
// compress output
$hook['display_override'][] = array(
  'class' => '',
  'function' => 'compress',
  'filename' => 'compress.php',
  'filepath' => 'hooks'
);
