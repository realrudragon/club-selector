<?php defined('BASEPATH') OR exit('No direct script access allowed');
  // home
  $route['backdoor/user/add/excel'] = 'admin_user/meni/admin/index';
  $route['backdoor/user/add/excel'] = 'admin_user/meni/admin/meni';
  $route['backdoor/user'] = 'admin_user/meni/admin/user';
  $route['backdoor/user/add'] = 'admin_user/meni/admin/user_add';
  // $route['api/backdoor/user/delete'] = 'admin_user/meni/APDoor/delete_user';
  $route['api/backdoor/user/delete'] = 'admin_user/api/APDoor/delete_user';
  $route['api/backdoor/user/detail'] = 'admin_user/api/APDoor/detail_user';
  $route['api/backdoor/user/update'] = 'admin_user/api/APDoor/updae_user';
?>
