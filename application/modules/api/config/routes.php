<?php defined('BASEPATH') OR exit('No direct script access allowed');
  // home
  // $route['home'] = 'home/meni/meni/index';
  // $route['home'] = 'home/meni/meni/meni';
  $route['api'] = 'api/meni/api/index';
  $route['api'] = 'api/meni/api/list_club';
  $route['api/list'] = 'api/meni/api/list_club';
  $route['api/postClub'] = 'api/meni/api/post_club_by_usercode';
  $route['api/club/cancelClub'] = 'api/meni/api/cancel_club';
?>
