<?php defined('BASEPATH') or exit('No direct script access allowed');
class APDoor extends MY_Controller // CI_Controller, MX_Controller MY_Controller
{
	// Controller
	public function __construct()
	{
		parent::__construct();
		$this->load->module('admin_api');
		$this->load->model('meni/Main_model');
		isset($_SESSION['role']) && in_array($_SESSION['role'], ['admin']) ? '' : redirect(BURL . 'backdoor');
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

	function get_client_ip()
	{
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if (isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if (isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if (isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}

	public function delete_user()
	{
		$this->header_json();
		$requesMethod = $_SERVER["REQUEST_METHOD"];
		if ($requesMethod == 'POST') {

			$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : null;
			if (empty($user_id)) {
				$data = array(
					'status' => 'false',
					'message' => 'user_id is empty',
				);
				echo json_encode($data);
				exit;
			}

			$arr_data = array(
				'user_id' => $user_id,
			);
			$check_user_id = $this->Main_model->select_user_by_id($arr_data);
			if (empty($check_user_id)) {
				$data = array(
					'status' => 'false',
					'message' => 'ID is not found',
				);
				echo json_encode($data);
				exit;
			}
			$this->Main_model->delete_user_by_id($arr_data);
			$check_delete = $this->Main_model->select_user_by_id($arr_data);
			if (empty($check_delete)) {
				$data = array(
					'status' => 'true',
					'message' => 'Delete success',
				);
				echo json_encode($data);
				exit;
			} else {
				$data = array(
					'status' => 'false',
					'message' => 'Delete error',
				);
				echo json_encode($data);
				exit;
			}
		} else {
			header("location: " . BURL . "home ");
			// testing('dsad');
			// header("location : " . BURL . 'home');
			exit;
		}
	}

	public function detail_user()
	{
		$this->header_json();
		$requesMethod = $_SERVER["REQUEST_METHOD"];
		if ($requesMethod == 'POST') {

			$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : null;
			if (empty($user_id)) {
				$data = array(
					'status' => 'false',
					'message' => 'user_id is empty',
				);
				echo json_encode($data);
				exit;
			}

			$arr_data = array(
				'user_id' => $user_id,
			);
			$check_user_id = $this->Main_model->select_user_by_id($arr_data);
			if (empty($check_user_id)) {
				$data = array(
					'status' => 'false',
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
	public function update_user()
	{
		$this->header_json();
		$requesMethod = $_SERVER["REQUEST_METHOD"];
		if ($requesMethod == 'POST') {

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

			if (empty($user_id)) {
				$data = array(
					'status' => 'false',
					'message' => 'user_id is empty',
				);
				echo json_encode($data);
				exit;
			}

			if (empty($username)) {
				$data = array(
					'status' => 'false',
					'message' => 'username is empty',
				);
				echo json_encode($data);
				exit;
			}

			if (empty($email)) {
				$data = array(
					'status' => 'false',
					'message' => 'email is empty',
				);
				echo json_encode($data);
				exit;
			}

			if ($status == null) {
				$data = array(
					'status' => 'false',
					'message' => 'status is empty',
				);
				echo json_encode($data);
				exit;
			}

			if (empty($studentID)) {
				$data = array(
					'status' => 'false',
					'message' => 'studentID is empty',
				);
				echo json_encode($data);
				exit;
			}

			if (empty($firstname)) {
				$data = array(
					'status' => 'false',
					'message' => 'firstname is empty',
				);
				echo json_encode($data);
				exit;
			}

			if (empty($lastname)) {
				$data = array(
					'status' => 'false',
					'message' => 'lastname is empty',
				);
				echo json_encode($data);
				exit;
			}

			if (empty($class)) {
				$data = array(
					'status' => 'false',
					'message' => 'class is empty',
				);
				echo json_encode($data);
				exit;
			}

			if (empty($room)) {
				$data = array(
					'status' => 'false',
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
			if (empty($check_user_id)) {
				$data = array(
					'status' => 'false',
					'message' => 'ID is not found',
				);
				echo json_encode($data);
				exit;
			}
			$update_data = $this->Main_model->update_user($arr_data);
			if ($update_data) {
				$data = array(
					'status' => 'true',
					'message' => 'success',
					'data' => $check_user_id,
				);
				echo json_encode($data);
				exit;
			} else {
				$data = array(
					'status' => 'false',
					'message' => 'error',
				);
				echo json_encode($data);
				exit;
			}
		}
	}

	public function changePassword_user()
	{
		$this->header_json();
		$requesMethod = $_SERVER["REQUEST_METHOD"];
		if ($requesMethod == 'POST') {
			$input_in = $_POST;

			$user_id = isset($input_in['user_id']) ? $input_in['user_id'] : null;
			$new_password = isset($input_in['password']) ? $input_in['password'] : null;

			if (empty($user_id)) {
				$data = array(
					'status' => 'false',
					'message' => 'user_id is empty',
				);
				echo json_encode($data);
				exit;
			}

			if (empty($new_password)) {
				$data = array(
					'status' => 'false',
					'message' => 'password is empty',
				);
				echo json_encode($data);
				exit;
			}

			$password = $this->password_hash($new_password);

			$arr_data = array(
				'user_id' => $user_id,
				'user_password' => $password,
			);

			$check_user_id = $this->Main_model->select_user_by_id($arr_data);

			if (empty($check_user_id)) {
				$data = array(
					'status' => 'false',
					'message' => 'ID is not found',
				);
				echo json_encode($data);
				exit;
			}
			$update_data = $this->Main_model->update_user($arr_data);
			if ($update_data) {
				$data = array(
					'status' => 'true',
					'message' => 'เปลี่ยนรหัสผ่านสำเร็จ',
					// 'data' => $check_user_id,
				);
				echo json_encode($data);
				exit;
			} else {
				$data = array(
					'status' => 'false',
					'message' => 'error',
				);
				echo json_encode($data);
				exit;
			}
		}
	}

	public function excel_add_user()
	{
		$this->load->model('user/api/User_model');
		$this->header_json();
		$requesMethod = $_SERVER["REQUEST_METHOD"];
		if ($requesMethod == 'POST') {
			$input_in = $_POST;

			$data_json = isset($input_in['data']) ? $input_in['data'] : null;
			$data = json_decode($data_json, true);

			// testing(count($data));
			for ($i = 2; $i < count($data); $i++) {
				$response[] = $data[$i];
			};
			// testing($value);
			$status = array();
			foreach ($response as $key => $value) {

				$check_student_id = $this->Main_model->select_user_by_student_id($value['1']);

				if (empty($check_student_id)) {

					$arr_data_input = array(
						'user_id' 			=> null,
						'user_code' 		=> random(18),
						'user_name' 		=> $value['0'],
						'student_id' 		=> $value['1'],
						'user_email' 		=> $value['2'],
						'user_firstname' 	=> $value['3'],
						'user_lastname' 	=> $value['4'],
						'user_class' 		=> $value['6'],
						'user_class_room' 	=> $value['7'],
						'user_password' 	=> $this->password_hash($value['5']),
						'user_status' 		=> '1',
						'user_role_code' 	=> 'student',
						'user_create_date' 	=> date('Y-m-d H:i:s'),
						'user_create_ip' 	=> $this->get_client_ip(),
					);

					$check_user_name =  $this->User_model->select_user($arr_data_input);
					// testing($check_user_name);
					// testing($arr_data_input);
					if (!$check_user_name) {
						$this->User_model->user_register($arr_data_input);
						$select_data = $this->User_model->select_user($arr_data_input);
						if (isset($select_data)) {
							$status = 'true';
						}
					}
				} else {
					$status = 'false';
				}
			}
			// testing($status);
			if ($status == 'true') {
				$data = array(
					'status' => 'true',
					'message' => 'success',
				);
				echo json_encode($data);
				exit;
			} else {
				$data = array(
					'status' => 'false',
					'message' => 'มีข้อมูลนี้อยู่ในระบบแล้ว',
				);
				echo json_encode($data);
				exit;
			}
		}
	}
}
	// Controller
