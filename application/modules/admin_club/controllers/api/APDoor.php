<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class APDoor extends MY_Controller // CI_Controller, MX_Controller MY_Controller
	{
	// Controller
		public function __construct()
		{
			parent::__construct();
			$this->load->module('admin_club_api');
			$this->load->model('api/apiAdminClub_model');
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

		public function generateRandomString($length) {
			return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
		}

		public function add_club(){
			$requestMethod = $_SERVER["REQUEST_METHOD"];
			$this->header_json();
			if($requestMethod == 'POST'){
				$input_in = $_POST;

				$userCode = isset($input_in['userCode']) ? $input_in['userCode'] : '';

				$club_name = isset($input_in['clubName']) ? $input_in['clubName'] : '';
				$club_class = isset($input_in['clubClass']) ? $input_in['clubClass'] : '';
				$club_amount = isset($input_in['clubAmount']) ? $input_in['clubAmount'] : '';
				$club_place = isset($input_in['clubPlace']) ? $input_in['clubPlace'] : '';
				$club_subject = isset($input_in['clubSubject']) ? $input_in['clubSubject'] : '';
				$club_teacher = isset($input_in['clubTeacher']) ? $input_in['clubTeacher'] : '';
				$club_description = isset($input_in['clubDescription']) ? $input_in['clubDescription'] : '';

				$club_objective = isset($input_in['clubObjective']) ? $input_in['clubObjective'] : '';
				$club_spec = isset($input_in['clubSpec']) ? $input_in['clubSpec'] : '';
				$club_resource = isset($input_in['clubResource']) ? $input_in['clubResource'] : '';
				$club_assessment = isset($input_in['clubAssessment']) ? $input_in['clubAssessment'] : '';
				$club_plan = isset($input_in['clubPlan']) ? $input_in['clubPlan'] : '';

				if(empty($userCode)){
					$arr_data = array(
						'status' => 'false',
						'code' => 300,
						'message' => 'กรุณาเข้าสู่ระบบ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}


				if(empty($club_name)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่ชื่อชุมนุม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_class)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่ระดับชั้น',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_amount)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่จำนวนที่รับ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_place)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่สถานที่เรียน',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_subject)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่กลุ่มสาระการเรียนรู้',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_teacher)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่ครูที่ปรึกษาชุมนุม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_description)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่คำอธิบายกิจกรรม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_objective)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่วัตถุประสงค์',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_spec)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่วัตถุประสงค์',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_resource)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่แหล่งเรียนรู้/สื่อการเรียนรู้/วัสดุอุปกรณ์',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_assessment)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่การวัดผลและประเมินผลกิจกรรม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_plan)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่แผนการดำเนินงาน',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				$club_code = $this->generateRandomString(58);
				$user_code = base64_decode(explode("-",$userCode)[1]);

				$this->load->model('user/api/User_model');

				$data_check = array(
					'user_code' => $user_code,
				);

				$check_usercode = $this->User_model->select_by_usercode($data_check);

				if(empty($check_usercode)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'ไม่พบข้อมูลผู้ใช้งาน',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
				$arr_data_input = array(
					'club_id' => null,
					'club_code' => $club_code,
					'club_name' => $club_name,
					'club_status' => 2,
					'club_class' => $club_class,
					'club_amount' => $club_amount,
					'club_place' => $club_place,
					'club_teacher' => $club_teacher,
					'club_category_subject' => $club_subject,
					'club_objective' => $club_objective,
					'club_spectified' => $club_spec,
					'club_description' => $club_description,
					'club_resource' => $club_resource,
					'club_plan' => $club_plan,
					'club_assessment' => $club_assessment,
					'create_by_usercode' => $user_code,
				);
				$input_club = $this->apiAdminClub_model->insert_club($arr_data_input);
				if(isset($input_club)){
					$arr_data = array(
						'status' => 'true',
						'message' => 'เพิ่มข้อมูลสำเร็จ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}else{
					$arr_data = array(
						'status' => 'false',
						'message' => 'เพิ่มข้อมูลไม่สำเร็จ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
			}
		}

		public function delete_club() {
			$requestMethod = $_SERVER["REQUEST_METHOD"];
			$this->header_json();
			if($requestMethod == 'POST'){
				$input_in = $_POST;
				$club_id = isset($input_in['clubId']) ? $input_in['clubId'] : '';
				$userCode = isset($input_in['userCode']) ? $input_in['userCode'] : '';

				if(empty($club_id)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่ชุมนุม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($userCode)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาเข้าสู่ระบบ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
				// print_r($userCode);

				$user_code = base64_decode(explode("-",$userCode)[1]);

				$this->load->model('user/api/User_model');
				$this->load->model('club/meni/Main_model');

				$data_check = array(
					'user_code' => $user_code,
					'club_id' => $club_id,
				);

				$check_usercode = $this->User_model->select_by_usercode($data_check);
				if(empty($check_usercode)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'ไม่พบข้อมูลผู้ใช้งาน',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				$check_club = $this->apiAdminClub_model->slect_club_by_club_id($data_check);
				if(empty($check_club)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'ไม่พบข้อมูลชุมนุม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
				if($check_club['createbyusercode'] != $user_code){
					$arr_data = array(
						'status' => 'false',
						'message' => 'ไม่สามารถลบข้อมูลชุมนุมได้',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				$del_club = $this->apiAdminClub_model->delete_club_by_club_id($data_check);
				if(empty($del_club)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'ลบข้อมูลไม่สำเร็จ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				$check_club_final = $this->apiAdminClub_model->slect_club_by_club_id($data_check);
				if(empty($check_club_final)){
					$arr_data = array(
						'status' => 'true',
						'message' => 'ลบข้อมูลสำเร็จ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
			}
		}

		public function update_status_club(){
			$requestMethod = $_SERVER["REQUEST_METHOD"];
			$this->header_json();
			if($requestMethod == 'POST'){
				$input_in = $_POST;
				$club_id = isset($input_in['clubId']) ? $input_in['clubId'] : '';	
				$status = isset($input_in['status']) ? $input_in['status'] : '';
			
				if(empty($club_id)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่ชุมนุม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($status)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่สถานะ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				$data_check = array(
					'club_id' => $club_id,
					'club_status' => $status,
				);

				$check_club = $this->apiAdminClub_model->slect_club_by_club_id($data_check);

				if(empty($check_club)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'ไม่พบข้อมูลชุมนุม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				$update_status = $this->apiAdminClub_model->update_club_by_club_id($data_check);

				if(empty($update_status)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'อัพเดทสถานะไม่สำเร็จ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				$check_club_final = $this->apiAdminClub_model->slect_club_by_club_id($data_check);

				if(empty($check_club_final)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'ไม่พบข้อมูลชุมนุม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if($check_club_final['clubstatus'] == $status){
					$arr_data = array(
						'status' => 'true',
						'message' => 'อัพเดทสถานะสำเร็จ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}


			}
		}

		public function update_club(){
			$requestMethod = $_SERVER["REQUEST_METHOD"];
			$this->header_json();
			if($requestMethod == 'POST'){
				$input_in = $_POST;

				$userCode = isset($input_in['userCode']) ? $input_in['userCode'] : '';
				$clubid = isset($input_in['clubId']) ? $input_in['clubId'] : '';

				$club_name = isset($input_in['clubName']) ? $input_in['clubName'] : '';
				$club_class = isset($input_in['clubClass']) ? $input_in['clubClass'] : '';
				$club_amount = isset($input_in['clubAmount']) ? $input_in['clubAmount'] : '';
				$club_place = isset($input_in['clubPlace']) ? $input_in['clubPlace'] : '';
				$club_subject = isset($input_in['clubSubject']) ? $input_in['clubSubject'] : '';
				$club_teacher = isset($input_in['clubTeacher']) ? $input_in['clubTeacher'] : '';
				$club_description = isset($input_in['clubDescription']) ? $input_in['clubDescription'] : '';

				$club_objective = isset($input_in['clubObjective']) ? $input_in['clubObjective'] : '';
				$club_spec = isset($input_in['clubSpec']) ? $input_in['clubSpec'] : '';
				$club_resource = isset($input_in['clubResource']) ? $input_in['clubResource'] : '';
				$club_assessment = isset($input_in['clubAssessment']) ? $input_in['clubAssessment'] : '';
				$club_plan = isset($input_in['clubPlan']) ? $input_in['clubPlan'] : '';

				if(empty($userCode)){
					$arr_data = array(
						'status' => 'false',
						'code' => 300,
						'message' => 'กรุณาเข้าสู่ระบบ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($clubid)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรถณาใส่ชุมนุม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_name)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่ชื่อชุมนุม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_class)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่ระดับชั้น',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_amount)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่จำนวนที่รับ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_place)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่สถานที่เรียน',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_subject)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่กลุ่มสาระการเรียนรู้',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_teacher)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่ครูที่ปรึกษาชุมนุม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_description)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่คำอธิบายกิจกรรม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_objective)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่วัตถุประสงค์',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_spec)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่วัตถุประสงค์',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_resource)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่แหล่งเรียนรู้/สื่อการเรียนรู้/วัสดุอุปกรณ์',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_assessment)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่การวัดผลและประเมินผลกิจกรรม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_plan)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'กรุณาใส่แผนการดำเนินงาน',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				$user_code_decode = base64_decode(explode("-",$userCode)[1]);
				
				$user_code = isset($user_code_decode) ? $user_code_decode : '';
				$club_id_raw = base64_decode(explode("-",$clubid)[2]);
				$club_id = isset($club_id_raw) ? $club_id_raw - 778998985555 : '';

				if(empty($user_code)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'error 403',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				if(empty($club_id)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'error 403.1',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				$this->load->model('user/api/User_model');

				$data_check = array(
					'user_code' => $user_code,
					'club_id' => $club_id,
				);

				$check_usercode = $this->User_model->select_by_usercode($data_check);

				if(empty($check_usercode)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'ไม่พบข้อมูลผู้ใช้งาน',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				$check_club_input = $this->apiAdminClub_model->slect_club_by_club_id($data_check);

				if(empty($check_club_input)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'ไม่พบข้อมูลชุมนุม',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				$arr_data_input = array(
					'club_id' => $club_id,
					'club_name' => $club_name,
					'club_status' => 2,
					'club_class' => $club_class,
					'club_amount' => $club_amount,
					'club_place' => $club_place,
					'club_teacher' => $club_teacher,
					'club_category_subject' => $club_subject,
					'club_objective' => $club_objective,
					'club_spectified' => $club_spec,
					'club_description' => $club_description,
					'club_resource' => $club_resource,
					'club_plan' => $club_plan,
					'club_assessment' => $club_assessment,
				);
				$input_club = $this->apiAdminClub_model->update_club_by_club_id($arr_data_input);
				if(isset($input_club)){
					$arr_data = array(
						'status' => 'true',
						'message' => 'แก้ไขข้อมูลสำเร็จ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}else{
					$arr_data = array(
						'status' => 'false',
						'message' => 'แก้ไขข้อมูลไม่สำเร็จ',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
			}
		}

		public function update_status_club_setting() {
			$requestMethod = $_SERVER["REQUEST_METHOD"];
			$this->header_json();
			if($requestMethod = 'POST'){
				$input_in = $_POST;

				$status = isset($input_in['status']) ? $input_in['status'] : '';
				// testing($status);
				// if(!$status){
				// 	$arr_data = array(
				// 		'status' => 'false',
				// 		'message' => 'กรุณาใส่สถานะ',
				// 		'data' => null,
				// 	);
				// 	echo json_encode($arr_data);
				// 	exit;
				// }

				$update_status = $this->apiAdminClub_model->update_status_club_setting($status);
				if(empty($update_status)){
					$arr_data = array(
						'status' => 'false',
						'message' => 'เกิดข้อผิดพลาด',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}
				
				$check_status = $this->apiAdminClub_model->select_status_club_setting();
				// testing($check_status);
				if($check_status['status'] != $status){
					// print_r($check_status);
					// testing($status);
					$arr_data = array(
						'status' => 'false',
						'message' => 'เกิดข้อผิดพลาด',
						'data' => null,
					);
					echo json_encode($arr_data);
					exit;
				}

				$arr_data = array(
					'status' => 'true',
					'message' => 'success',
					'data' => null,
				);
				echo json_encode($arr_data);
				exit;

			}
		}

	}
