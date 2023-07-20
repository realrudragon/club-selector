<?php defined('BASEPATH') OR exit('No direct script access allowed');
  // home
  $route['club/select'] = 'club/meni/meni/index';
  $route['club/select'] = 'club/meni/meni/meni';
  $route['club/([a-zA-Z0-9]+)'] = 'club/meni/meni/list_club_by_class/$1';
  $route['club/detail/([a-zA-Z0-9]+)'] = 'club/meni/meni/detail_club_by_clubcode/$1';

?>
