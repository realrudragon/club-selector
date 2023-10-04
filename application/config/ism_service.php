<?php defined('BASEPATH') OR exit('No direct script access allowed');

  $CI = get_instance();

  $config['ism_service'] = 'ism_service';

  // base_url SAPIURL ---------------- //
  if ((ENVIRONMENT === 'development') || (ENVIRONMENT === '')) {
    defined('SAPIURL') OR define('SAPIURL', 'http://localhost/8-xx/xx-see-v-0-0-5/');
  } else {
    defined('SAPIURL') OR define('SAPIURL', 'https://club.worachote.com');
  }

  defined('KEYTOKENCTC') OR define('KEYTOKENCTC', '1234567');
?>
