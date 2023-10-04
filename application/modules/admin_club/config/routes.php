<?php defined('BASEPATH') OR exit('No direct script access allowed');
  // home
  $route['backdoor/club'] = 'admin_club/meni/admin/index';
  $route['backdoor/club'] = 'admin_club/meni/admin/meni';
  $route['backdoor/club/add'] = 'admin_club/meni/admin/add_club';
  // $route['backdoor/club/admin'] = 'admin_club/meni/admin/allclub/$i';
  $route['backdoor/club/admin'] = 'admin_club/meni/admin/allclub';

  $route['backdoor/club/list/user'] = 'admin_club/meni/admin/list_all_user_in_club';
  $route['backdoor/club/user/club'] = 'admin_club/meni/admin/list_club_user';

  $route['backdoor/club/user/([a-zA-Z0-9]+)'] = 'admin_club/meni/admin/list_user_by_club/$1';
  $route['backdoor/club/admin/([a-zA-Z0-9]+)'] = 'admin_club/meni/admin/allclub/$1';
  $route['backdoor/club/edit/([a-zA-Z0-9]+)'] = 'admin_club/meni/admin/edit_club/$1';
  // Api
  $route['api/backdoor/club/add'] = 'admin_club/api/apdoor/add_club';
  $route['api/backdoor/club/delete'] = 'admin_club/api/apdoor/delete_club';
  $route['api/backdoor/club/update/status'] = 'admin_club/api/apdoor/update_status_club';
  $route['api/backdoor/club/update'] = 'admin_club/api/apdoor/update_club';
  $route['api/backdoor/club/status'] = 'admin_club/api/apdoor/update_status_club_setting';
?>
