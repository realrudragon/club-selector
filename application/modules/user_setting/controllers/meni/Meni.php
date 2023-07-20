<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Meni extends MY_Controller // CI_Controller, MX_Controller MY_Controller
	{
	// Controller
		public function __construct()
		{
			parent::__construct();
			$this->load->library('layout_ui_ff');
			$this->load->library('home/meni/meni_library');
			$this->load->module('home');
			check_login();

		}

		public function index()
		{
			self::meni();
		}

		public function meni()
		{
			// print_r($_SESSION);
			// exit;
			$data = array(
				'icon' => '',
				'title' => 'User Setting',
				'keywords' => 'Setting',
				'description' => 'Setting',
				'image' => '',
				'control_url' => BURL . 'User_Setting',
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
					'user/js/meni/meni' . MIN_LOAD_FILE . '/forgotPass.js',
				),
				'plugins_js_add' => array(
					// 'home/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js'
				),
				// View
				'script' => "meni/script/meni_script",
				'view' => "meni/meni_view",
			);
			$this->load->view($this->config->item('app_layout_ui_ff').'layout-ui-ff', $data);
			// $this->load->view($this->config->item('app_layout_ui_fu').'layout-ui-fu', $data);
			// $this->load->view($this->config->item('app_layout_ui_su').'layout-ui-su', $data);
		}

		public function user_club()
		{
			$this->load->model('api/meni/Api_model');
			$this->load->model('club/meni/Main_model');
			$arr_data = array(
				'user_code' => $_SESSION['usercode'],
			);
			$data = $this->Api_model->select_club_log_by_user_code($arr_data);
			if($data == null || $data == '' || empty($data)){
			$response_arr = array(
				'status' => false,
				'message' => 'ยังไม่ได้เลือกชุมนุม',
				'data' => null,
			);
			}else{
				$club_arrr = array(
					'club_code' => $data['clubcode'],
				);
				$select_club = $this->Main_model->detail_club_by_club_code($club_arrr);
				$response_arr = array(
					'status' => true,
					'message' => 'เลือกชุมนุมแล้ว',
					'data' => $select_club,
				);
			}
			
			$data = array(
				'icon' => '',
				'title' => 'User Setting',
				'keywords' => 'Setting',
				'description' => 'Setting',
				'image' => '',
				'control_url' => BURL . 'User_Setting',
				'response' => $response_arr,
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
					'user_setting/js/meni/meni' . MIN_LOAD_FILE . '/club.js',
				),
				'plugins_js_add' => array(
					// 'home/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js'
				),
				// View
				'script' => "meni/script/meni_script",
				'view' => "meni/club_view",
			);
			$this->load->view($this->config->item('app_layout_ui_ff').'layout-ui-ff', $data);
			// $this->load->view($this->config->item('app_layout_ui_fu').'layout-ui-fu', $data);
			// $this->load->view($this->config->item('app_layout_ui_su').'layout-ui-su', $data);
		}


	// Controller
	}
?>
