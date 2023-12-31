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
		}

		public function index()
		{
			self::meni();
			// $this->meni();
		}

		public function meni()
		{
			// echo 'Hello';
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
				'view' => "meni/admin_view",
			);
			$this->load->view($this->config->item('app_layout_ui_admin').'layout-ui-admin', $data);
		}

		public function user()
		{
			// echo 'Hello';
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
				// Add info
				'css_info' => array(),
				'js_info' => array(),
				'plugins_js_info' => array(),
				// Add file
				'css_add' => array(
					// 'libs/jsgrid/dist/jsgrid-theme.min.css',
					// $this->layout_ui_ff->css('ui_templates' . '/' . 'admin_Ui' . '/' . 'libs/morris.js/morris.css');
				),
				'js_add' => array(
					// 'home/js/meni/meni' . MIN_LOAD_FILE . '/meni.js',
				),
				'plugins_js_add' => array(
					// 'home/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js'
				),
				// View
				'script' => "meni/script/meni_script",
				'view' => "meni/admin_view_user",
			);
			$this->load->view($this->config->item('app_layout_ui_admin').'layout-ui-admin', $data);
		}
		

	// Controller
	}
?>
