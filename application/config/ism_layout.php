<?php defined('BASEPATH') OR exit('No direct script access allowed');

  $CI = get_instance();

  /* app_layout_ui_main */
  $config['app_layout_ui_ff'] = 'layout/layout-ui-ff/';
  $config['app_title_ui_main'] = 'Terms Game. | NL';
  $config['app_footer_ui_main'] = '&copy;' . date('Y') . ' Terms Game. V100 - <a href="https://worachote.com.com/"><b>Developer</b></a>';
  $config['app_google-site-verification_ui_main'] = 'TmNDQRS8RZqzXcnucXlry32iwt-jjCedsd_aVkEBkY8';
  $config['app_keywords_ui_main'] = 'NL, EpNets, CLOUD';
  $config['app_description_ui_main'] = ' | Terms Game. | NL';
  $config['app_robots_ui_main'] = 'index, follow';
  $config['app_googlebot_ui_main'] = 'index, follow';
  $config['app_author_ui_main'] = 'EpNets NL';
  $config['app_revisit-after_ui_main'] = '1 days';
  $config['app_revisit-after_ui_main'] = '1 days';
  $config['app_content-language_ui_main'] = 'th';
  $config['app_distribution_ui_main'] = 'Global';
  $config['app_content-type_ui_main'] = 'text/html; charset=UTF-8?';

  /* app_layout_ui_blogs */
  $config['app_layout_ui_blogs'] = 'layout/layout-ui-blogs/';
  $config['app_title_ui_blogs'] = 'Terms Game. | NL';
  $config['app_footer_ui_blogs'] = '&copy;' . date('Y') . ' Terms 1111 Game. V100 - <a href="https://worachote.com.com/"><b>Developer</b></a>';
  $config['app_google-site-verification_ui_blogs'] = 'TmNDQRS8RZqzXcnucXlry32iwt-jjCedsd_aVkEBkY8';
  $config['app_keywords_ui_blogs'] = 'NL, EpNets, CLOUD';
  $config['app_description_ui_blogs'] = ' | Terms Game. | NL';
  $config['app_robots_ui_blogs'] = 'index, follow';
  $config['app_googlebot_ui_blogs'] = 'index, follow';
  $config['app_author_ui_blogs'] = 'EpNets NL';
  $config['app_revisit-after_ui_blogs'] = '1 days';
  $config['app_revisit-after_ui_blogs'] = '1 days';
  $config['app_content-language_ui_blogs'] = 'th';
  $config['app_distribution_ui_blogs'] = 'Global';
  $config['app_content-type_ui_blogs'] = 'text/html; charset=UTF-8?';

  // base_url min load file ---------------- //
  defined('MIN_LOAD_FILE') OR define('MIN_LOAD_FILE', ((ENVIRONMENT === 'development') ? '/devcode' : '/proonline'));

  // base_url min load file ---------------- //
  defined('MIN_SESSION_GET') OR define('MIN_SESSION_GET', '_S_e_Ss_Io_N-__WeBhMvcTP');

  // base_url ---------------- //
  $config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
  $config['base_url'] .= "://".$_SERVER['HTTP_HOST'];
  $config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
  $config['bURL'] = $config['base_url'];
  defined('BURL') OR define('BURL', $config['base_url']);

  // Ddatabase ---------------- //
  if ((ENVIRONMENT === 'development') || (ENVIRONMENT === '')) {
    // base_url FURL ---------------- //
    defined('FURL') OR define('FURL', 'http://localhost/CTC-Project/club-selector/');
    defined('FURL_UPLOAD') OR define('FURL_UPLOAD', '/Applications/XAMPP/xamppfiles/htdocs/' . '8-xxxxx/xxxxx-file-xxxxx-v-0-0-5/');
  } else {
    // base_url FURL ---------------- //
    defined('FURL') OR define('FURL', 'https://file.xxxxx.com/');
    defined('FURL_UPLOAD') OR define('FURL_UPLOAD', '/home/xxxxx/domains/' . 'file.xxxxx.com/public_html/');
  }

  // LOGO ---------------- //
  defined('B_LOGO') OR define('B_LOGO', (BURL . 'assets/upload/logo/' . 'logo.png'));
  defined('B_ICON') OR define('B_ICON', (BURL . 'assets/upload/logo/' . 'favicon.png'));

  // BURL ui_templates
  defined('B_UI_TP') OR define('B_UI_TP', (BURL . 'assets/layout-ui/ui_templates/' . ''));

  // Ddatabase ---------------- //
  if ((ENVIRONMENT === 'development') || (ENVIRONMENT === '')) {
    // print_r('development');
    defined('DB_HOSTNAME') OR define('DB_HOSTNAME', 'localhost');
    defined('DB_USERNAME') OR define('DB_USERNAME', 'root');
    defined('DB_PASSWORD') OR define('DB_PASSWORD', '');
    defined('DB_DATABASE') OR define('DB_DATABASE', 'club-selector');
    defined('DB_DBDRIVER') OR define('DB_DBDRIVER', 'mysqli');
  } else {
    // print_r('production');
    defined('DB_HOSTNAME') OR define('DB_HOSTNAME', 'localhost');
    defined('DB_USERNAME') OR define('DB_USERNAME', 'root');
    defined('DB_PASSWORD') OR define('DB_PASSWORD', '');
    defined('DB_DATABASE') OR define('DB_DATABASE', 'club-selector');
    defined('DB_DBDRIVER') OR define('DB_DBDRIVER', 'mysqli');
  }
?>