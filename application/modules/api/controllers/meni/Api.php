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
				$class_input = isset($input_in['class']) ? $input_in['class'] : '';
				// testing()
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
		
		public function post_club_by_usercode()
		{
			$this->load->model('user/api/User_model');
			$this->header_json();
			$requesMethod = $_SERVER["REQUEST_METHOD"];
			if($requesMethod == 'POST'){
				$input_in = $_POST;
				$userfullname_input = isset($input_in['userFullName']) ? $input_in['userFullName'] : '';
				$usercode_input = isset($input_in['userCode']) ? $input_in['userCode'] : '';
				$club_code_input = isset($input_in['clubCode']) ? $input_in['clubCode'] : '';
				if($usercode_input == ''){
					$arr_data = array(
						'status' => 'false',
						'message' => 'No usercode',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
				if($userfullname_input == ''){
					$arr_data = array(
						'status' => 'false',
						'message' => 'No userfullname',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
				if($club_code_input == ''){
					$arr_data = array(
						'status' => 'false',
						'message' => 'No clubcode',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}


				$data = array(
					'user_code' => $usercode_input,
					'club_code' => $club_code_input,
				);
				$check_user_code = $this->User_model->select_by_usercode($data);
				// testing($check_user_code);
				$user_class = $check_user_code['class'];
				if($userfullname_input != $check_user_code['firstname'] . ' ' . $check_user_code['lastname']){
					$arr_data = array(
						'status' => 'false',
						'message' => 'fullname not match',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				$check_club = $this->Api_model->select_club_by_clubcode($data);
				if($check_club == false){
					$arr_data = array(
						'status' => 'false',
						'message' => 'No club',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
				$check_club_join = $this->Api_model->select_club_log_by_user_code($data);

				if($check_club_join != false){
					$arr_data = array(
						'status' => 'false',
						'message' => 'You have joined this club',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
				$countmember_by_club_log = $this->Api_model->select_club_log_by_club_code($data);
				$member_amount = $countmember_by_club_log ? count($countmember_by_club_log) : 0;
				if($member_amount >= $check_club['clubamount']){
					$arr_data = array(
						'status' => 'false',
						'message' => 'Club full',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
				// testing($check_club);
				// print_r($check_club);
				// exit;
				if($user_class != $check_club['clubclass']){
					$arr_data = array(
						'status' => 'false',
						'message' => 'Class not match',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
				if($check_club['clubstatus'] == '0'){
					$arr_data = array(
						'status' => 'false',
						'message' => 'Club not active',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}	
				// print_r($input_in);
				// exit;
				$data_input = array(
					'club_log_id' => null,
					'club_code' => $club_code_input,
					'user_code' => $usercode_input,
					'club_log_date' => date('Y-m-d H:i:s'),
				);
				$this->Api_model->post_club_by_usercode($data_input);
				$check_post_club = $this->Api_model->select_club_log_by_user_code($data);
				if($check_post_club == false){
					$arr_data = array(
						'status' => 'false',
						'message' => 'error',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}else{
					$arr_data = array(
						'status' => 'true',
						'message' => 'You have joined this club',
						'data' => $check_post_club,
					);
					echo json_encode($arr_data);
					exit;
				}
				}
		}

		public function cancel_club(){
			$this->header_json();
			$requesMethod = $_SERVER["REQUEST_METHOD"];
			if($requesMethod == 'POST'){
				$input_in = $_POST;
				$usercode_input = isset($input_in['userCode']) ? $input_in['userCode'] : '';
				$club_code_input = isset($input_in['clubCode']) ? $input_in['clubCode'] : '';
				if($usercode_input == ''){
					$arr_data = array(
						'status' => 'false',
						'code' => 300,
						'message' => 'No usercode',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
				if($club_code_input == ''){
					$arr_data = array(
						'status' => 'false',
						'message' => 'No clubcode',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
				$data = array(
					'user_code' => $usercode_input,
					'club_code' => $club_code_input,
				);
				$check_club_join = $this->Api_model->select_club_log_by_user_code($data);
				if($check_club_join == false){
					$arr_data = array(
						'status' => 'false',
						'message' => 'You have not joined this club',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
				$this->Api_model->cancel_club_by_usercode($data);
				$check_club_join = $this->Api_model->select_club_log_by_user_code($data);
				if($check_club_join != false){
					$arr_data = array(
						'status' => 'false',
						'message' => 'error',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}else{
					$arr_data = array(
						'status' => 'true',
						'message' => 'You have canceled this club',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
			}
		}

	// Controller
	}
?>
