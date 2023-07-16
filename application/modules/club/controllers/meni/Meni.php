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
			$data = array(
				'icon' => '',
				'title' => 'Club Select',
				'keywords' => 'เลือกชุมนุม',
				'description' => 'เลือกชุมนุม',
				'image' => '',
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
				'view' => "meni/meni_view",
			);
			$this->load->view($this->config->item('app_layout_ui_ff').'layout-ui-ff', $data);
		}

		public function list_club_by_class($class)
		{
			$data = array(
				'icon' => '',
				'title' => 'รายชื่อชุมนุมม.' . $class,
				'keywords' => 'ชุมนุม ม.' . $class,
				'description' => 'เลือกชุมนุม',
				'image' => '',
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
				'view' => "meni/meni_view",
			);
			$this->load->view($this->config->item('app_layout_ui_ff').'layout-ui-ff', $data);
		}


	// Controller
	}
?>
