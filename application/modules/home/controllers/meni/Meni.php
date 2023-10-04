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
		}

		public function index()
		{
			self::meni();
			// $this->meni();
		}

		public function meni()
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

		public function form()
		{
			header("location: https://docs.google.com/forms/d/e/1FAIpQLSfB5SUDVqO5tCtTnGo6tESv4R_KQwBO5UyesOAxndZ8W0p0gg/viewform");
		}


	// Controller
	}
?>
