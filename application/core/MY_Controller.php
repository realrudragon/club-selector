<?php
	(defined('BASEPATH')) OR exit('No direct script access allowed');

	/* load the MX_Controller class */
	require APPPATH."third_party/MX/Controller.php";

	class MY_Controller extends MX_Controller
	{

		public $class;
		public $method;
		public $users = array();
		public $data = array();

		public function __construct()
	  {
	    parent::__construct();
			$this->class = $this->router->fetch_class();
			$this->method = $this->router->fetch_method();
			// load public function
			$this->validation_server();
			$this->ism_cms_language();
			// $this->session->set_userdata('users', 1);
			defined('ISM_CUSTOMERS_GET') OR define('ISM_CUSTOMERS_GET', ($this->session->userdata('users') ? $this->session->userdata('users') : NULL));
			defined('ISM_CUSTOMERS_USER') OR define('ISM_CUSTOMERS_USER', ($this->session->userdata('users') ? $this->session->userdata('users')['mine']['username'] : NULL));
	  }

		public function validation_set_message()
		{
			//form_validation->set_message
			$this->form_validation->set_message('required', 'กรุณาใส่ข้อมูล %s');
			$this->form_validation->set_message('is_unique', '%s มีข้อมูลอยู่แล้ว');
			$this->form_validation->set_message('max_length', '%s ห้ามมีความยาวเกิน %s ตัวอักษร');
			$this->form_validation->set_message('min_length', '%s ต้องมีตัวอักษรมากกว่า %s ตัวอักษร');
			$this->form_validation->set_message('matches', '%s และ %s ไม่ตรงกัน');
			$this->form_validation->set_message('valid_email', 'กรุณาใส่%sให้ถูกต้อง');
			$this->form_validation->set_message('alpha', '%sใช้อักษรสากล a-z , A-Z');
			$this->form_validation->set_message('integer', '%sใช้ตัวเลข 0-9');
			$this->form_validation->set_message('alpha_numeric', '%s ต้องใช้อักษร a-z , A-Z , 0-9 เท่านั้น');
		}

		public function validation_server()
		{
			// testing($_SERVER);
	// 		$_SESSION["Server_WeBISM"] = MIN_SESSION_GET;
    //   if (empty($_SESSION['Server_WeBISM'])) {
	// 			echo "HTTP Code Error 520";
	// 			exit;
	// 		}
	// 		// $_SERVER['HTTP_USER_AGENT']
	// 		$sv_httpuser = explode("/", $_SERVER['HTTP_USER_AGENT']);
    //   if ($sv_httpuser['0'] == 'PostmanRuntime') {
	// 			echo "HTTP Code Error 520 PostmanRuntime";
	// 			exit;
	// 		}

			// $url = "http://" . $_SERVER['HTTP_HOST'];
			// $lines = file($url);
			// if ($lines['1'] == '<html lang="en">') {
			// 	echo "HTTP Code Error 520 PostmanRuntime";
			// 	exit;
			// }

			// $u = "https://www.lipsum.com/";
			// $ch = curl_init($u);
			// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			// curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
			// $newquery = curl_exec($ch);
			// echo $newquery_get = htmlentities($newquery);

			// $page = file_get_contents('http://stackoverflow.com/questions/ask');
			// print_r($page);
			// testing($_SESSION);

			// $indicesServer = array(
		  // 	'PHP_SELF', 'argv', 'argc', 'GATEWAY_INTERFACE', 'SERVER_ADDR', 'SERVER_NAME', 'SERVER_SOFTWARE', 'SERVER_PROTOCOL', 'REQUEST_METHOD', 'REQUEST_TIME', 'REQUEST_TIME_FLOAT',
		  // 	'QUERY_STRING', 'DOCUMENT_ROOT', 'HTTP_ACCEPT', 'HTTP_ACCEPT_CHARSET', 'HTTP_ACCEPT_ENCODING', 'HTTP_ACCEPT_LANGUAGE', 'HTTP_CONNECTION', 'HTTP_HOST', 'HTTP_REFERER',
		  // 	'HTTP_USER_AGENT', 'HTTPS', 'REMOTE_ADDR', 'REMOTE_HOST', 'REMOTE_PORT', 'REMOTE_USER', 'REDIRECT_REMOTE_USER', 'SCRIPT_FILENAME', 'SERVER_ADMIN', 'SERVER_PORT', 'SERVER_SIGNATURE',
		  // 	'PATH_TRANSLATED', 'SCRIPT_NAME', 'REQUEST_URI', 'PHP_AUTH_DIGEST', 'PHP_AUTH_USER', 'PHP_AUTH_PW', 'AUTH_TYPE', 'PATH_INFO', 'ORIG_PATH_INFO'
		  // ) ;
		  // echo '<table cellpadding="10">' ;
		  // foreach ($indicesServer as $arg) {
		  //   if (isset($_SERVER[$arg])) {
		  //     echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
		  //   } else {
		  //     echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
		  //   }
		  // }
		  // echo '</table>' ;
		}

		private function ism_cms_language()
    {
			// V no data
			if (!empty($this->input->cookie('PreFix_LangUage_LaNg'))) {
				// Load File : language > language_lang.php
        $this->lang->load('language_lang', $this->input->cookie('PreFix_LangUage_LaNg'));
      } else {
				// Load File : language > language_lang.php
        $this->lang->load('language_lang', 'th');
        set_cookie(array(
          'name' => 'PreFix_LangUage_LaNg',
          'value' => 'th',
          'expire' =>  (60 * 60 * 24 * 365)
        ));
      }

			// V2
			// $inputLG = $this->input->get('lg');
			// $this->load->model('isms/language/language_model');
			// $dataLG = $this->language_model->language_lang($inputLG);
			// $loadLG = (!empty($dataLG)) ? $dataLG->isml_lang : 'th';
			// if (!empty($this->input->cookie('PreFix_LangUage_LaNg'))) {
			//   $this->lang->load('language_lang', $this->input->cookie('PreFix_LangUage_LaNg'));
			// } else {
			//   $this->lang->load('language_lang', $loadLG);
			//   set_cookie(array(
			//     'name' => 'PreFix_LangUage_LaNg',
			//     'value' => $loadLG,
			//     'expire' =>  (60 * 60 * 24 * 365)
			//   ));
			// }
			// if ($inputLG) {
			// 	$this->lang->load('language_lang', $loadLG);
			// 	set_cookie(array(
			// 		'name' => 'PreFix_LangUage_LaNg',
			// 		'value' => $loadLG,
			// 		'expire' =>  (60 * 60 * 24 * 365)
			// 	));
			// }

			// V1
      // if (!empty($this->input->cookie('PreFix_LangUage_LaNg'))) {
			// 	// Load File : language > language_lang.php
      //   $this->lang->load('language_lang', $this->input->cookie('PreFix_LangUage_LaNg'));
      // } else {
			// 	// Load File : language > language_lang.php
      //   $this->lang->load('language_lang', 'th');
      //   set_cookie(array(
      //     'name' => 'PreFix_LangUage_LaNg',
      //     'value' => 'th',
      //     'expire' =>  (60 * 60 * 24 * 365)
      //   ));
      // }
			// // Test : $this->input->cookie('PreFix_LangUage_LaNg')
    }

		public function response($data, $header_statuce_code = 200)
    // public function response($data)
    {
      // $response = array();
      // $response['token'] = $this->security->get_csrf_hash();
      // foreach ($data as $key => $value) {
      //     $response[$key] = $value;
      // }
      // header('Content-Type: application/json');
      // echo json_encode($response);
      // exit;

			$response = array();
      if ($header_statuce_code == 200 && !isset($response['message'])) {
				// $response['message'] = get_message(20000);
        $response['message'] = 'ทำรายการเรียบร้อย';
      }
    	foreach ($data as $key => $value) {
				$response[$key] = $value;
    		// $response[$key] = 'dwqeqdsdadasxzcsfdaewrhr3249qwufj1uhldsjzxkdjaslbndajh3g418ywhljwiuiuhdfsak';
    	}
      $this->output->set_status_header($header_statuce_code);
      if ($this->security->get_csrf_hash()) {
				$response['token'] = $this->security->get_csrf_hash();
         // $response['token'] = 'dwqeqdsdadasxzcsfdaewrhr3249qwufj1uhldsjzxkdjaslbndajh3g418ywhljwiuiuhdfsak';
      }
      header('Content-Type: application/json');
    	echo json_encode($response);
    	exit;
    }

	}
?>
