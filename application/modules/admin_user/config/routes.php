<?php defined('BASEPATH') OR exit('No direct script access allowed');
  // home
  $route['backdoor/user/add/excel'] = 'admin_user/meni/admin/index';
  $route['backdoor/user/add/excel'] = 'admin_user/meni/admin/meni';
  $route['backdoor/user'] = 'admin_user/meni/admin/user';
  $route['backdoor/user/add'] = 'admin_user/meni/admin/user_add';
  $route['backdoor/user/add/excel'] = 'admin_user/meni/admin/import_excel';
  // $route['api/backdoor/user/delete'] = 'admin_user/meni/APDoor/delete_user';
  $route['api/backdoor/user/delete'] = 'admin_user/api/APDoor/delete_user';
  $route['api/backdoor/user/detail'] = 'admin_user/api/APDoor/detail_user';
  $route['api/backdoor/user/update'] = 'admin_user/api/APDoor/update_user';
  $route['api/backdoor/user/changePassword'] = 'admin_user/api/APDoor/changePassword_user';
  $route['api/backdoor/user/add/excel'] = 'admin_user/api/APDoor/excel_add_user';
?>
