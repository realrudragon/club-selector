<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends MY_Controller // CI_Controller, MX_Controller MY_Controller
	{
	// Controller
		public function __construct()
		{
			parent::__construct();
			$this->load->model('api/User_model');
			$this->load->module('user');
		}

		public function index()
		{
			// echo $this->password_hash('hellohello');
			// print_r($check);
			// $check = $this->User_model->test_user_model();
			// echo $check;
			// header('location: ' . base_url() . 'user');
		}

		public function header_json()
		{
			header("Access-Control-Allow-Origin: *");
			header("Content-Type: application/json; charset=UTF-8");
			header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
			header("Access-Control-Max-Age: 3600");
			header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
		}

		public function password_hash($password)
		{
			$hash1 = base64_encode(strrev($password)) . strrev(base64_encode($password));
			$hash2 = strrev($hash1 . "CTC2023");
			$hash3 = base64_decode($hash2);
			$hash4 = strrev($hash3);
			$hash5 = md5($hash4);
			$hash6 = strrev(sha1($hash5));
			// $hash7 = substr(strrev(md5($hash6)), 0, -10);
			return $hash6 . $hash2;
		}

		public function generateRandomString($length) {
			return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
		}

		function get_client_ip() {
			$ipaddress = '';
			if (isset($_SERVER['HTTP_CLIENT_IP']))
				$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
			else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
				$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
			else if(isset($_SERVER['HTTP_X_FORWARDED']))
				$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
			else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
				$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
			else if(isset($_SERVER['HTTP_FORWARDED']))
				$ipaddress = $_SERVER['HTTP_FORWARDED'];
			else if(isset($_SERVER['REMOTE_ADDR']))
				$ipaddress = $_SERVER['REMOTE_ADDR'];
			else
				$ipaddress = 'UNKNOWN';
			return $ipaddress;
		}
		
		public function check_username(){

			// $this->header_json();
			
			$requesMethod = $_SERVER["REQUEST_METHOD"];
			if($requesMethod == 'POST'){
			$input_in = $_POST;
			// -- check input
			$username_in = trim($input_in['username']);
			// -- end check input
			if(empty($username_in)){
				echo json_encode([
					'status' => 'false',
					'code' => '400',
					'message' => 'Input username',
					'data' => null
				]);
				exit;
			}
			$username = $username_in;
			$data = array(
				'user_name' => $username
			);
			$check = $this->User_model->select_user($data);
			if($check){
				echo json_encode([
					'status' => 'false',
					'code' => '400',
					'message' => 'username already taken',
					'data' => null
				]);
				exit;
			}else{
				echo json_encode([
					'status' => 'true',
					'code' => '200',
					'message' => 'username available',
					'data' => null
				]);
				exit;
			}
		}else{
			echo json_encode([
				'status' => 'false',
				'code' => '400',
				'message' => 'Bad Request',
				'data' => null
			]);
			exit;
		}

		}

		public function user_register(){

			$this->header_json();
			// print_r($_POST);
			$requesMethod = $_SERVER["REQUEST_METHOD"];
			if($requesMethod == 'POST'){
				$input_in = $_POST;
				// -- check input
				$username_in = isset($input_in['username'])|| $input_in['username'] != null || $input_in['username'] != '' ? trim($input_in['username']) : null;
				$student_id = isset($input_in['studentID'])|| $input_in['studentID'] != null || $input_in['studentID'] != '' ? trim($input_in['studentID']) : null;
				$email_in = isset($input_in['email']) ? trim($input_in['email']) : null;
				$firstname_in = isset($input_in['firstname']) ? trim($input_in['firstname']) : null;
				$lastname_in = isset($input_in['lastname']) ? trim($input_in['lastname']) : null;
				$class_in = isset($input_in['class']) ? trim($input_in['class']) : null;
				$class_room_in = isset($input_in['room']) ? trim($input_in['room']) : null;
				$password_in = isset($input_in['password']) ? trim($input_in['password']) : null;
				$repassword_in = isset($input_in['repassword']) ? $input_in['repassword'] : null;
				$status_in = isset($input_in['status']) ? $input_in['status'] : null;
				// -- end check input
				if(empty($username_in)){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Please input Username',
						'data' => null
					]);
					exit;
				}
				if(empty($student_id)){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Please input Username',
						'data' => null
					]);
					exit;
				}
				if(empty($email_in)){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Please input Email',
						'data' => null
					]);
					exit;
				}
				if(empty($firstname_in)){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Please input Firstname',
						'data' => null
					]);
					exit;
				}
				if(empty($lastname_in)){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Please input Lastname',
						'data' => null
					]);
					exit;
				}
				if(empty($status_in)){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Please input status',
						'data' => null
					]);
					exit;
				}
				if(empty($class_in)){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Please input Class',
						'data' => null
					]);
					exit;
				}
				if(empty($class_room_in)){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Please input Room',
						'data' => null
					]);
					exit;
				}

				if(!preg_match("/^[a-zA-Z0-9 \s]+$/", $username_in)){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Username must be alphanumeric',
						'data' => null
					]);
					exit;
				}
				//check username
				$data = array(
					'user_name' => $username_in
				);
				$check_user = $this->User_model->select_user($data);
				if($check_user){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'username already taken',
						'data' => null
					]);
					exit;
				}
				if(empty($password_in)){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Please input Password',
						'data' => null
					]);
					exit;
				}elseif (empty($repassword_in)) {
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Please input Confirm Password',
						'data' => null
					]);
					exit;
				}elseif ($password_in != $repassword_in) {
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Password not match',
						'data' => null
					]);
					exit;
				}elseif (strlen($password_in) < 6) {
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Password must be at least 6 characters',
						'data' => null
					]);
					exit;
				}
				$user_name = $username_in;
				$user_password = $password_in;
				$user_data = array(
					'user_id' 			=> null,
					'user_code' 		=> random(18),
					'user_name' 		=> $user_name,
					'student_id' 		=> $student_id,
					'user_email' 		=> $email_in,
					'user_firstname' 	=> $firstname_in,
					'user_lastname' 	=> $lastname_in,
					'user_class' 		=> $class_in,
					'user_class_room' 	=> $class_room_in,
					'user_password' 	=> $this->password_hash($user_password),
					'user_status' 		=> '1',
					'user_role_code' 		=> $status_in,
					'user_create_date' 	=> date('Y-m-d H:i:s'),
					'user_create_ip' 	=> $this->get_client_ip(),
				);
				
				$this->User_model->user_register($user_data);
				$select_data = $this->User_model->select_user($data);
				echo json_encode([
					'status' => 'true',
					'code' => '200',
					'message' => 'register success',
					'data' => array(
						'usercode' => $select_data['usercode'],
						'username' => $select_data['username'],
						'studentID' => $select_data['studentID'],
						'useremail' => $select_data['email'],
						'firstname' => $select_data['firstname'],
						'lastname' => $select_data['lastname'],
						'class' => $select_data['class'],
						'room' => $select_data['room'],
						'status' => $select_data['status'],
						'role' => $select_data['role'],
						'date' => $select_data['date'],
					)
				]);
				exit;
			}else{
				echo json_encode([
					'status' => 'false',
					'code' => '405',
					'message' => 'Method Not Allow',
					'data' => null
				]);
			}
		}
		public function user_login(){
			
			$this->header_json();
			$requesMethod = $_SERVER["REQUEST_METHOD"];
			if($requesMethod == 'POST'){
				$input_in = $_POST;
				// -- check input
				$username_in = isset($input_in['username']) ? trim($input_in['username']) : null;
				$password_in = isset($input_in['password']) ? trim($input_in['password']) : null;
				// $username_in = trim($input_in['username']);
				// $password_in = trim($input_in['password']);
				// -- end check input
				// print_r($input_in);
				if(empty($username_in)){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Please input Username',
						'data' => null
					]);
					exit;
				}elseif(empty($password_in)){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Please input Password',
						'data' => null
					]);
					exit;
				}
				$user_data = array(
					'user_name' => $username_in,
					'password'	=> $this->password_hash($password_in),
				);

				$user_name = $user_data['user_name'];
				$user_password = $user_data['password'];

				$login_data = $this->User_model->select_user($user_data);
				$send_data = isset($login_data) ? $login_data : null;
				$get_usercode = isset($send_data['usercode']) ? $send_data['usercode'] : null;
				$get_username = isset($send_data['username']) ? $send_data['username'] : null;
				$get_userpassword = isset($send_data['password']) ? $send_data['password'] : null;
				$get_userrole = isset($send_data['role']) ? $send_data['role'] : null;
				$get_date = isset($send_data['date']) ? $send_data['date'] : null;
				$get_status = isset($send_data['status']) ? $send_data['status'] : null;
				// print_r($send_data);
				if($user_name == $get_username){

					if($user_password == $get_userpassword){
						if($get_status == '0'){
							echo json_encode([
								'status' => 'false',
								'code' => '200',
								'message' => 'Inactive',
								'data' => null
							]);
							exit;
						}elseif ($get_status == 3) {
							echo json_encode([
								'status' => 'false',
								'code' => '200',
								'message' => 'bannded',
								'data' => null
							]);
							exit;
						}elseif ($get_status == 1){
							echo json_encode([
								'status' => 'true',
								'code' => '200',
								'message' => 'login success',
								'data' => array(
									'usercode' => $get_usercode,
									'username' => $get_username,
									'studentID' => $send_data['studentID'],
									'useremail' => $send_data['email'],
									'firstname' => $send_data['firstname'],
									'lastname' => $send_data['lastname'],
									'class' => $send_data['class'],
									'room' => $send_data['room'],
									'status' => $get_status,
									'role' => $get_userrole,
									'date' => $get_date,
								)
							]);
							exit;
						}else{
							echo json_encode([
								'status' => 'false',
								'code' => '400',
								'message' => 'Error',
								'data' => null
							]);
							exit;
					}
					}else{
						echo json_encode([
							'status' => 'false',
							'code' => '400',
							'message' => 'Password incorrect',
							'data' => null
						]);
						exit;
					}

				}else{
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'username incorrect',
						'data' => null
					]);
					exit;
				}

			}else{
				echo json_encode([
					'status' => 'false',
					'code' => '405',
					'message' => 'Method Not Allow',
					'data' => null
				]);
				exit;
			}
		}

		public function changepasss(){
			$this->header_json();
			$requestMethod = $_SERVER["REQUEST_METHOD"];
			if($requestMethod == 'POST'){
				$input_in = $_POST;
				// -- check input
				$usercode = isset($_SESSION['usercode']) ? $_SESSION['usercode'] : null;
				$old_password = isset($input_in['oldPassword']) && $input_in != '' && $input_in != null ? $input_in['oldPassword'] : null;
				$newpassword_in = isset($input_in['newPassword']) && $input_in != '' && $input_in != null ? $input_in['newPassword'] : null;
				$repassword_in = isset($input_in['confirmPassword']) && $input_in != '' && $input_in != null ? $input_in['confirmPassword'] : null;

				if(empty($usercode)){
					$array = array(
						'status' => 'false',
						'code' => '300',
						'message' => 'Please login',
						'data' => null
					);
					echo json_encode($array);
					// header('location: ' . base_url() . 'login');
					exit;
			}else{
				if(empty($old_password)){
					$array = array(
						'status' => 'false',
						'code' => '400',
						'message' => 'Please Input old password',
						'data' => null
					);
					echo json_encode($array);
					exit;
				}
				if(empty($repassword_in)){
					$array = array(
						'status' => 'false',
						'code' => '400',
						'message' => 'Please Input confirm password',
						'data' => null
					);
					echo json_encode($array);
					exit;
				}
				if(empty($newpassword_in)){
					$array = array(
						'status' => 'false',
						'code' => '400',
						'message' => 'Please Input new password',
						'data' => null
					);
					echo json_encode($array);
					exit;
				}
				if($newpassword_in != $repassword_in){
					$array = array(
						'status' => 'false',
						'code' => '400',
						'message' => 'รหัสผ่านไม่ตรงกัน',
						'data' => null
					);
					echo json_encode($array);
					exit;
				}

				$user_data = array(
					'user_code' => $usercode,
					'user_password' => $this->password_hash($old_password),
					'new_password' => $this->password_hash($newpassword_in),
				);
				$select_user = $this->User_model->select_by_usercode($user_data);
				$check = isset($select_user) ? $select_user : null;
				$password_check = isset($check['password']) ? $check['password'] : null;

				// print_r($check['password']);
				// print_r($user_data['user_password']);
				// exit;
				if(!$check || $check = '' || $check = null){
					echo json_encode([
						'status' => 'false',
						'code' => '400',
						'message' => 'Error',
						'data' => null
					]);
					exit;
				}
				if($user_data['user_password'] != $password_check){
					$array = array(
						'status' => 'false',
						'code' => '400',
						'message' => 'รหัสผ่านผิด',
						'data' => null
					);
					echo json_encode($array);
					exit;
				}
					$update_user = $this->User_model->update_password_with_user_code($user_data);
					// print_r($update_user);
					if(!$update_user || $update_user = '' || $update_user = null){
						$array = array(
							'status' => 'false',
							'code' => '400',
							'message' => 'Error',
							'data' => null
						);
						echo json_encode($array);
						exit;
					}
					$array = array(
						'status' => 'true',
						'code' => '200',
						'message' => 'Change Password Success',
						'data' => null
					);
					echo json_encode($array);
					session_destroy();
					exit;
			}
		}else{
			header('location: ' . base_url() . 'login');
			exit;
		}
		}

		public function select_user_usercode() {
			$this->header_json();
			$requestMethod = $_SERVER["REQUEST_METHOD"];
			if($requestMethod == 'POST'){

			$usercode = isset($_POST['usercode']) ? $_POST['usercode'] : null;
			if(empty($usercode)){
				session_destroy();
				header('location: ' . base_url() . 'login');
				exit;
			}
			$user_data = array(
				'user_code' => $usercode,
			);
			$select_user = $this->User_model->select_by_usercode($user_data);
			if(isset($select_user) || $select_user != '' || $select_user != null){
				$array = array(
					'status' => 'true',
					'code' => '200',
					'message' => 'success',
					'data' => $select_user
				);
				echo json_encode($array);
				exit;
			}else{
				$array = array(
					'status' => 'false',
					'code' => '400',
					'message' => 'Error',
					'data' => null
				);
				echo json_encode($array);
				exit;
			}
		}else{
			session_destroy();
			header('location: ' . base_url() . 'login');
			exit;
		}
		}
	// Controller
	}
?>
