<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Meni extends MY_Controller // CI_Controller, MX_Controller MY_Controller
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


	// Controller
	}
?>
