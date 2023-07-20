<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Meni extends MY_Controller // CI_Controller, MX_Controller MY_Controller
	{
	// Controller
		public function __construct()
		{
			parent::__construct();
			$this->load->model('club/meni/Main_model');
			$this->load->model('api/meni/Api_model');
			$this->load->library('layout_ui_ff');
			$this->load->library('club/meni/meni_library');
			$this->load->module('club');
			check_login();
		}

		public function index()
		{
			self::meni();
			// redirect(BURL . 'club/select');
		}

		public function meni()
		{
			if(isset($_SESSION['usercode'])){

				$curl = curl_init();
			   curl_setopt_array($curl, array(
				 CURLOPT_URL => BURL . 'user/api/user/select_user_usercode/',
				 CURLOPT_RETURNTRANSFER => true,
				 CURLOPT_ENCODING => '',
				 CURLOPT_MAXREDIRS => 10,
				 CURLOPT_TIMEOUT => 0,
				 CURLOPT_FOLLOWLOCATION => true,
				 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				 CURLOPT_CUSTOMREQUEST => 'POST',
				 CURLOPT_POSTFIELDS =>'usercode='. $_SESSION['usercode'] ,
				 CURLOPT_HTTPHEADER => array(
				  'Content-Type: application/x-www-form-urlencoded',
				  'Cookie: PreFix_LangUage_LaNg=th'
				),
			   ));
			   
			   $response = json_decode(curl_exec($curl),true);
			   
			   curl_close($curl);
			  //  print_r($response);
			  //  exit;
			   if($response['status'] == 'false'){
				 session_destroy();
				  redirect(BURL . 'login');
			   }else{
				// print_r($response);
				$_SESSION['usercode'] = $response['data']['usercode'];
				$_SESSION['username'] = $response['data']['username'];
				$_SESSION['studentID'] = $response['data']['studentID'];
				$_SESSION['useremail'] = $response['data']['email'];
				$_SESSION['class'] = $response['data']['class'];
				$_SESSION['firstname'] = $response['data']['firstname'];
				$_SESSION['lastname'] = $response['data']['lastname'];
				$_SESSION['room'] = $response['data']['room'];
				$_SESSION['role'] = $response['data']['role'];
				  // print_r($response);
			  // exit;
				}
			  }else{
				session_destroy();
				redirect(BURL . 'login');
			  }
			  $arr_input = array(
				'user_code' => $_SESSION['usercode'],
			  );
			$club_log_usercode = $this->Api_model->select_club_log_by_user_code($arr_input);
			// print_r($club_log_usercode);
			// testing($club_log_usercode);
			if($club_log_usercode){
				echo '<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>';
				echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
				//echo "<script>Swal.fire('Any fool can use a computer');<script>";
				echo 's';
				echo "
				<script>
				Swal.fire({
					title : 'คุณเลือกชุมนุมแล้ว!',
					text : 'หากต้องการเลือกใหม่กรุณายกเลิกการเลือกก่อน!',
					icon : 'error'
				}).then((result) => {
					window.location.href = '". BURL . "user/club';
				  })
				</script>";
				// redirect(BURL . 'user/club');
				// exit;
			}
			$check_status_club = $this->Main_model->check_club() ? $this->Main_model->check_club() : 3;
			$data = array(
				'icon' => '',
				'title' => 'Club Select',
				'keywords' => 'เลือกชุมนุม',
				'description' => 'เลือกชุมนุม',
				'image' => '',
				'control_url' => BURL . 'club_select',
				'check_club' => $check_status_club,
				'clubm_amount' => '',
				// Add URL
				'css_url' => array(),
				'plugins_js_url' => array(),
				'js_url' => array(),
				// Add info
				'css_info' => array(),
				'js_info' => array(),
				'plugins_js_info' => array(),
				// Add file
				'css_add' => array(
					// 'home/css/meni/meni' . MIN_LOAD_FILE . '/meni.css'
				),
				'js_add' => array(
					'club/js/meni/meni' . MIN_LOAD_FILE . '/meni.js',
				),
				'plugins_js_add' => array(
					// 'home/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js'
				),
				// View
				'script' => "meni/script/meni_script",
				'view' => "meni/club_view",
			);
			$this->load->view($this->config->item('app_layout_ui_ff').'layout-ui-ff', $data);
		}

		public function list_club_by_class($class)
		{	
			// testing($class);
			if(empty($class)){
				redirect(BURL . 'home');
				exit;
			}
			$arr_data = array(
				'club_class' => $class,
			);
			$data_response = $this->Main_model->detail_club_by_club_class($arr_data);
			// print_r($data_response);
			// exit;
			if($data_response == null || $data_response == '' || empty($data_response)){
				$response = array();
				// redirect(BURL . 'home');
				// exit;
			}else{
				$response = array();
				foreach($data_response as $key => $value){
					// print_r($value);
					if($value['clubstatus'] == '1'){
						$response[] = $value;
					}
				}
			}
			$data_arr = array(
				'class' => $class,
				'data' => $response,
			);
			// echo json_encode($response);
			// exit;
			$data = array(
				'icon' => '',
				'title' => 'รายชื่อชุมนุมม.' . $class,
				'keywords' => 'ชุมนุม ม.' . $class,
				'description' => 'เลือกชุมนุม',
				'image' => '',
				'response' => $data_arr,
				'control_url' => BURL . 'club_select',
				// Add URL
				'css_url' => array(),
				'plugins_js_url' => array(),
				'js_url' => array(),
				// Add info
				'css_info' => array(),
				'js_info' => array(),
				'plugins_js_info' => array(),
				// Add file
				'css_add' => array(
					// 'home/css/meni/meni' . MIN_LOAD_FILE . '/meni.css'
				),
				'js_add' => array(
					// 'home/js/meni/meni' . MIN_LOAD_FILE . '/meni.js',
				),
				'plugins_js_add' => array(
					// 'home/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js'
				),
				// View
				'script' => "meni/script/meni_script",
				'view' => "listclub/club_view",
			);
			$this->load->view($this->config->item('app_layout_ui_ff').'layout-ui-ff', $data);
		}

		public function detail_club_by_clubcode($code)
		{
			if(empty($code)){
				redirect(BURL . 'home');
				exit;
			}
			$arr_data = array(
				'club_code' => $code,
			);
			$data_response = $this->Main_model->detail_club_by_club_code($arr_data);
			if($data_response == null || $data_response == '' || empty($data_response)){
				redirect(BURL . 'home');
				exit;
			}
			//testing($data_response);
			$data = array(
				'icon' => '',
				'title' => 'รายละเอียดชุมนุม.',
				'keywords' => 'Detail Club',
				'description' => 'รายละเอียดชุมนุม',
				'image' => '',
				'response' => $data_response,
				'control_url' => BURL . 'club/detail/' . $code,
				// Add URL
				'css_url' => array(),
				'plugins_js_url' => array(),
				'js_url' => array(),
				// Add info
				'css_info' => array(),
				'js_info' => array(),
				'plugins_js_info' => array(),
				// Add file
				'css_add' => array(
					// 'home/css/meni/meni' . MIN_LOAD_FILE . '/meni.css'
				),
				'js_add' => array(
					// 'home/js/meni/meni' . MIN_LOAD_FILE . '/meni.js',
				),
				'plugins_js_add' => array(
					// 'home/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js'
				),
				// View
				'script' => "meni/script/meni_script",
				'view' => "detailclub/detail_club_view",
			);
			$this->load->view($this->config->item('app_layout_ui_ff').'layout-ui-ff', $data);
		}
	// Controller
	}
?>
