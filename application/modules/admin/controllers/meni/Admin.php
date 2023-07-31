<?php defined('BASEPATH') OR exit('No direct script access allowed');
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
			$this->load->model('meni/Meni_model');
		}

		public function index()
		{
			self::meni();
			// $this->meni();
		}

		public function meni()
		{
			$count_member = $this->Meni_model->count_member();
			$list_all_club = $this->Meni_model->list_all_club(null,null);
			$count_club_log = $this->Meni_model->count_club_log();
			$club_appove = $this->Meni_model->list_all_club('club_status', '1');
			$club_pending = $this->Meni_model->list_all_club('club_status', '2');
			$club_cancel = $this->Meni_model->list_all_club('club_status', '3');
			$club_setting = $this->Meni_model->status_club_setting();
			// testing($club_setting);
			$response_data = array(
				'count_member' => $count_member,
				'count_all_club' => count($list_all_club),
				'count_club_log' => $count_club_log,
				'count_club_appove' => count($club_appove),
				'count_club_pending' => count($club_pending),
				'count_club_cancel' => count($club_cancel),
				'club_setting' => $club_setting,
			);
			// echo 'Hello';
			// exit;
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
					'admin/home/js/meni/meni' . MIN_LOAD_FILE . '/home.js',
				),
				'plugins_js_add' => array(
					// 'home/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js'
				),
				// View
				'script' => "meni/script/meni_script",
				'view' => "meni/admin_view",
			);
			$this->load->view($this->config->item('app_layout_ui_admin').'layout-ui-admin', $data);
		}

		

	// Controller
	}
?>
