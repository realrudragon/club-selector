<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class APDoor extends MY_Controller // CI_Controller, MX_Controller MY_Controller
	{
	// Controller
		public function __construct()
		{
			parent::__construct();
			$this->load->module('admin_api');
			$this->load->model('meni/Main_model');
			// $this->load->models('meni/Main_model');
		}

		public function index()
		{
			header("location : " . BURL . 'home');
			exit;
		}

		public function header_json()
		{
			header("Access-Control-Allow-Origin: *");
			header("Content-Type: application/json; charset=UTF-8");
			header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
			header("Access-Control-Max-Age: 3600");
			header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
		}

		public function delete_user(){
			$this->header_json();
			$requesMethod = $_SERVER["REQUEST_METHOD"];
			if($requesMethod == 'POST'){
				
				$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : null;
				if(empty($user_id)){
					$data = array(
						'status' => 'error',
						'message' => 'user_id is empty',
					);
					echo json_encode($data);
					exit;
				}

				$arr_data = array(
					'user_id' => $user_id,
				);
				$check_user_id = $this->Main_model->select_user_by_id($arr_data);
				if(empty($check_user_id)){
					$data = array(
						'status' => 'error',
						'message' => 'ID is not found',
					);
					echo json_encode($data);
					exit;
				}
				$this->Main_model->delete_user_by_id($arr_data);
				$check_delete = $this->Main_model->select_user_by_id($arr_data);
				if(empty($check_delete)){
					$data = array(
						'status' => 'true',
						'message' => 'Delete success',
					);
					echo json_encode($data);
					exit;
				}else{
					$data = array(
						'status' => 'error',
						'message' => 'Delete error',
					);
					echo json_encode($data);
					exit;
				}
			}else{
				header( "location: ". BURL ."home " );
				// testing('dsad');
				// header("location : " . BURL . 'home');
				exit;
			}
		}
		
		public function detail_user(){
			$this->header_json();
			$requesMethod = $_SERVER["REQUEST_METHOD"];
			if($requesMethod == 'POST'){
				
				$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : null;
				if(empty($user_id)){
					$data = array(
						'status' => 'error',
						'message' => 'user_id is empty',
					);
					echo json_encode($data);
					exit;
				}

				$arr_data = array(
					'user_id' => $user_id,
				);
				$check_user_id = $this->Main_model->select_user_by_id($arr_data);
				if(empty($check_user_id)){
					$data = array(
						'status' => 'error',
						'message' => 'ID is not found',
					);
					echo json_encode($data);
					exit;
				}
				$data = array(
					'status' => 'true',
					'message' => 'success',
					'data' => $check_user_id,
				);
				echo json_encode($data);
				exit;
		}
	}
		public function updae_user(){
			$this->header_json();
			$requesMethod = $_SERVER["REQUEST_METHOD"];
			if($requesMethod == 'POST'){
				
				$user_id = isset($_POST['userid']) ? $_POST['userid'] : null;
				$username = isset($_POST['username']) ? $_POST['username'] : null;
				$email = isset($_POST['email']) ? $_POST['email'] : null;
				$status = isset($_POST['status']) ? $_POST['status'] : null;
				$studentID = isset($_POST['studentID']) ? $_POST['studentID'] : null;
				$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
				$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
				$class = isset($_POST['class']) ? $_POST['class'] : null;
				$room = isset($_POST['room']) ? $_POST['room'] : null;
				$role = isset($_POST['role']) ? $_POST['role'] : null;
				
				if(empty($user_id)){
					$data = array(
						'status' => 'error',
						'message' => 'user_id is empty',
					);
					echo json_encode($data);
					exit;
				}

				if(empty($username)){
					$data = array(
						'status' => 'error',
						'message' => 'username is empty',
					);
					echo json_encode($data);
					exit;
				}

				if(empty($email)){
					$data = array(
						'status' => 'error',
						'message' => 'email is empty',
					);
					echo json_encode($data);
					exit;
				}

				if($status == null){
					$data = array(
						'status' => 'error',
						'message' => 'status is empty',
					);
					echo json_encode($data);
					exit;
				}

				if(empty($studentID)){
					$data = array(
						'status' => 'error',
						'message' => 'studentID is empty',
					);
					echo json_encode($data);
					exit;
				}

				if(empty($firstname)){
					$data = array(
						'status' => 'error',
						'message' => 'firstname is empty',
					);
					echo json_encode($data);
					exit;
				}

				if(empty($lastname)){
					$data = array(
						'status' => 'error',
						'message' => 'lastname is empty',
					);
					echo json_encode($data);
					exit;
				}

				if(empty($class)){
					$data = array(
						'status' => 'error',
						'message' => 'class is empty',
					);
					echo json_encode($data);
					exit;
				}

				if(empty($room)){
					$data = array(
						'status' => 'error',
						'message' => 'room is empty',
					);
					echo json_encode($data);
					exit;
				}

				$arr_data = array(
					'user_id' => $user_id,
					'user_name' => $username,
					'user_email' => $email,
					'user_status' => $status,
					'student_id' => $studentID,
					'user_firstname' => $firstname,
					'user_lastname' => $lastname,
					'user_class' => $class,
					'user_class_room' => $room,
					'user_role_code' => $role,
				);
				$check_user_id = $this->Main_model->select_user_by_id($arr_data);
				if(empty($check_user_id)){
					$data = array(
						'status' => 'error',
						'message' => 'ID is not found',
					);
					echo json_encode($data);
					exit;
				}
				$update_data = $this->Main_model->update_user($arr_data);
				if($update_data){
					$data = array(
						'status' => 'true',
						'message' => 'success',
						'data' => $check_user_id,
					);
					echo json_encode($data);
					exit;
				}else{
					$data = array(
						'status' => 'error',
						'message' => 'error',
					);
					echo json_encode($data);
					exit;
				}
				// ----------------
				// $data = array(
				// 	'status' => 'true',
				// 	'message' => 'success',
				// 	'data' => $check_user_id,
				// );
				// echo json_encode($data);
				// exit;
		}
	}
	// Controller
	}
?>
