<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Api extends MY_Controller // CI_Controller, MX_Controller MY_Controller
	{
	// Controller
		public function __construct()
		{
			parent::__construct();
			$this->load->model('meni/Api_model');
			$this->load->module('api');
		}

		public function index()
		{
			echo "Blank 404 Pages";
			// self::meni();
			// $this->meni();
		}

		public function header_json()
		{
			header("Access-Control-Allow-Origin: *");
			header("Content-Type: application/json; charset=UTF-8");
			header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
			header("Access-Control-Max-Age: 3600");
			header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
		}


		public function list_club()
		{
			$requesMethod = $_SERVER["REQUEST_METHOD"];
			$this->header_json();
			if($requesMethod == 'GET'){
				$input_in = $_GET;
				$class_input = isset($input_in['class']) ? $this->security->xss_clean($input_in['class']) : '';
				if($class_input == ''){
					$data = array(
						'club_class' => null,
					);
					$data = $this->Api_model->list_club($data);
					// print_r($data);
					// exit;
					$arr_data = array(
						'status' => 'true',
						'message' => 'success',
						'data' => $data,
					);
					echo json_encode($arr_data);
					exit;
				}else{
					$data = array(
						'club_class' => $class_input,
					);
					$data = $this->Api_model->list_club($data);
					// print_r($data);
					// exit;
					// echo json_encode($data);
					if($data == false){
						$arr_data = array(
							'status' => 'false',
							'message' => 'No data',
							'data' => null,
						);
						echo json_encode($arr_data);
						exit;
					}

					$arr_data = array(
						'status' => 'true',
						'message' => 'success',
						'data' => $data,
					);
					echo json_encode($arr_data);

				}
				}
		}


	// Controller
	}
?>
