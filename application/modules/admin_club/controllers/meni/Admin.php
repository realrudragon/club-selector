<?php defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends MY_Controller // CI_Controller, MX_Controller MY_Controller
{
	// Controller
	public function __construct()
	{
		parent::__construct();
		// $this->load->library('layout_ui_lino');
		// $this->load->library('layout_ui_main');
		// $this->load->library('layout_ui_ezon');
		// $this->load->library('layout_ui_elec');
		// $this->load->library('layout_ui_tech');
		// $this->load->model('home/meni/meni_model');
		$this->load->library('layout_ui_ff');
		$this->load->library('admin/meni/meni_library');
		$this->load->module('admin');
		$this->load->model('api/apiAdminClub_model');
		$this->load->model('club/meni/Main_model');
		$this->load->model('user/api/User_model');
	}

	public function index()
	{
		self::meni();
		// $this->meni();
	}

	public function meni()
	{
		$arr_data = array(
			'user_code' => $_SESSION['usercode'],
		);
		$response_data = $this->apiAdminClub_model->slectclub_by_usercode($arr_data);
		// testing($response_data);
		$data = array(
			'icon' => '',
			'title' => 'Home',
			'keywords' => 'Home',
			'description' => 'Home',
			'response' => $response_data,
			'image' => '',
			'control_url' => BURL . 'Home',
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
				'admin/club/js/meni/meni' . MIN_LOAD_FILE . '/club.js',
			),
			'plugins_js_add' => array(
				// 'home/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js'
			),
			// View
			'script' => "meni/script/meni_script",
			'view' => "meni/admin_view",
		);
		$this->load->view($this->config->item('app_layout_ui_admin') . 'layout-ui-admin', $data);
	}

	public function allclub($status_in = null)
	{
		isset($_SESSION['role']) && in_array($_SESSION['role'], ['admin', 'leaderteacher']) ? '' : redirect(BURL . 'backdoor');
		// testing($status_in);
		if ($status_in == null) {
			$response_data = $this->apiAdminClub_model->slect_club_by_club_status(null);
		} else {
			$response_data = $this->apiAdminClub_model->slect_club_by_club_status($status_in);
		}
		// testing($status_in);
		// print_r($code);
		// testing($response_data);
		$data = array(
			'icon' => '',
			'title' => 'Home',
			'keywords' => 'Home',
			'description' => 'Home',
			'image' => '',
			'control_url' => BURL . 'Home',
			'response' => $response_data,
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
				'admin/club/js/meni/meni' . MIN_LOAD_FILE . '/manageclub.js',
			),
			'plugins_js_add' => array(
				// 'home/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js'
			),
			// View
			'script' => "meni/script/meni_script",
			'view' => "meni/admin_view_allclub",
		);
		$this->load->view($this->config->item('app_layout_ui_admin') . 'layout-ui-admin', $data);
	}

	public function add_club()
	{
		$data = array(
			'icon' => '',
			'title' => 'Home',
			'keywords' => 'Home',
			'description' => 'Home',
			'image' => '',
			'control_url' => BURL . 'Home',
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
				'admin/club/css/meni/meni' . MIN_LOAD_FILE . '/meni.css',
			),
			'js_add' => array(
				'admin/club/js/meni/meni' . MIN_LOAD_FILE . '/addclub.js',
			),
			'plugins_js_add' => array(
				// 'home/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js'
			),
			// View
			'script' => "meni/script/meni_script",
			'view' => "add_club/add_club_view",
		);
		$this->load->view($this->config->item('app_layout_ui_admin') . 'layout-ui-admin', $data);
	}

	public function edit_club($club_code)
	{
		if (empty($club_code)) {
			header('Location: ' . BURL . 'backdoor/club');
			exit;
		} else {
			$arr_data = array(
				'club_code' => $club_code,
			);
			$response_data = $this->Main_model->detail_club_by_club_code($arr_data);
		}
		// testing($response_data);
		$data = array(
			'icon' => '',
			'title' => 'Home',
			'keywords' => 'Home',
			'description' => 'Home',
			'image' => '',
			'control_url' => BURL . 'Home',
			// Add URL
			'css_url' => array(),
			'plugins_js_url' => array(),
			'js_url' => array(),
			'response' => $response_data,
			// Add info
			'css_info' => array(),
			'js_info' => array(),
			'plugins_js_info' => array(),
			// Add file
			'css_add' => array(
				'admin/club/css/meni/meni' . MIN_LOAD_FILE . '/meni.css',
			),
			'js_add' => array(
				// 'admin/club/js/meni/meni' . MIN_LOAD_FILE . '/addclub.js',
				'admin/club/js/meni/meni' . MIN_LOAD_FILE . '/editclub.js',
			),
			'plugins_js_add' => array(
				'home/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js'
			),
			// View
			'script' => "meni/script/meni_script",
			'view' => "edit_club/edit_club",
		);
		$this->load->view($this->config->item('app_layout_ui_admin') . 'layout-ui-admin', $data);
	}

	public function list_user_by_club($club_code)
	{
		if (empty($club_code)) {
			header('Location: ' . BURL . 'backdoor/club');
			exit;
		} else {
			$arr_data_input = array(
				'club_code' => $club_code,
			);
			$response_data = $this->apiAdminClub_model->select_club_by_club_code($arr_data_input);
			if ($response_data != '') {
				foreach ($response_data as $key => $value) {
					$arr_user_code_input = array(
						'user_code' => $value['usercode'],
					);
					$arr_data[] = $this->User_model->select_by_usercode($arr_user_code_input);
				}
			} else {
				$arr_data = array();
			}
		}
		
		$club_detail = $this->Main_model->detail_club_by_club_code($arr_data_input);
		// testing($club_detail);

		$data = array(
			'club_code' => $club_detail['clubcode'],
			'club_name' => $club_detail['clubname'],
			'data' => $arr_data,
		);

		
		// testing($data);

		$data = array(
			'icon' => '',
			'title' => 'Home',
			'keywords' => 'Home',
			'description' => 'Home',
			'image' => '',
			'control_url' => BURL . 'Home',
			// Add URL
			'css_url' => array(),
			'plugins_js_url' => array(),
			'js_url' => array(),
			'response' => $data,
			// Add info
			'css_info' => array(),
			'js_info' => array(),
			'plugins_js_info' => array(),
			// Add file
			'css_add' => array(
				'admin/club/css/meni/meni' . MIN_LOAD_FILE . '/meni.css',
			),
			'js_add' => array(
				// 'admin/club/js/meni/meni' . MIN_LOAD_FILE . '/addclub.js',
				'admin/club/js/meni/meni' . MIN_LOAD_FILE . '/editclub.js',
			),
			'plugins_js_add' => array(
				'home/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js'
			),
			// View
			'script' => "meni/script/meni_script",
			'view' => "list_user_club/list_user_club",
		);
		$this->load->view($this->config->item('app_layout_ui_admin') . 'layout-ui-admin', $data);
	}

	public function list_all_user_in_club(){
		$arr_data = array();
		$list_club_log = $this->apiAdminClub_model->list_club_log();
		foreach ($list_club_log as $key => $value) {
			$arr_data_input = array(
				'club_code' => $value['clubcode'],
				'user_code' => $value['usercode'],
			);
			$detail_club = $this->Main_model->detail_club_by_club_code($arr_data_input);
			$select_by_usercode = $this->User_model->select_by_usercode($arr_data_input);

			$arr_data[] = array(
				'club_code' => $detail_club['clubcode'],
				'club_name' => $detail_club['clubname'],
				'user_code' => $select_by_usercode['usercode'],
				'student_id' => $select_by_usercode['studentID'],
				'firstname' => $select_by_usercode['firstname'],
				'lastname' => $select_by_usercode['lastname'],
				'class' => $select_by_usercode['class'],
				'room' => $select_by_usercode['room'],
			);
		}
		// exit;
		$data = array(
			'icon' => '',
			'title' => 'Home',
			'keywords' => 'Home',
			'description' => 'Home',
			'image' => '',
			'control_url' => BURL . 'Home',
			// Add URL
			'css_url' => array(),
			'plugins_js_url' => array(),
			'js_url' => array(),
			'response' => $arr_data,
			// Add info
			'css_info' => array(),
			'js_info' => array(),
			'plugins_js_info' => array(),
			// Add file
			'css_add' => array(
				'admin/club/css/meni/meni' . MIN_LOAD_FILE . '/meni.css',
			),
			'js_add' => array(
				// 'admin/club/js/meni/meni' . MIN_LOAD_FILE . '/addclub.js',
				'admin/club/js/meni/meni' . MIN_LOAD_FILE . '/editclub.js',
			),
			'plugins_js_add' => array(
				'home/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js'
			),
			// View
			'script' => "meni/script/meni_script",
			'view' => "list_all_user_in_club/list_all_user_in_club",
		);
		$this->load->view($this->config->item('app_layout_ui_admin') . 'layout-ui-admin', $data);
		
	}

	// Controller
}
