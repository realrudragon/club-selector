<?php defined('BASEPATH') OR exit('No direct script access allowed');
  /**
    // นาม สมคเน อยู่หงษ์
    // Emuil : somkhane.nea@gmuil.com
    // Tel : 0800796564
    // Facebook : https://www.facebook.com/somkhane.sy
    // Line : https://line.me/R/ti/p/%40tbf7649k
  **/

	class Meni extends MY_Controller // CI_Controller, MX_Controller MY_Controller
	{
	// Controller
	public function __construct()
	{
		parent::__construct();
		$this->load->module('user');
	}

	public function index()
	{
		self::login();
	}
	public function alert($status,$title,$message){
		if($status == 'success'){
			$alert_icon = 'success';
			$icon = 'check';
		}else{
			$alert_icon = 'danger';
			$icon = 'close';
		}
		return '
		<div class="alert alert-'.$alert_icon.'">
		<div class="d-flex justify-content-start">
			<span class="alert-icon m-r-20 font-size-30">
				<i class="anticon anticon-'. $icon .'-circle"></i>
			</span>
			<div>
				<h5 class="alert-heading">'. $title .'</h5>
				<p>'. $message .'</p>
			</div>
		</div>
	</div>
	';
	}

	public function logout()
	{
		session_destroy();
		redirect(BURL . 'login');
	}

	public function login()
	{
		if(isset($_SESSION['usercode'])){
			redirect(BURL . 'home');
		}
		$aler_msg = '';
		$staus = true;
		if(isset($_POST['btn'])) {
			if(empty($_POST['username'])){
				$aler_msg = $this->alert('error','Error','กรุณากรอกชื่อผู้ใช้งาน'); 
				$staus = false;
			}
			if(empty($_POST['password'])){
				$aler_msg = $this->alert('error','Error','กรุณากรอกรหัสผ่าน'); 
				$staus = false;
			}

			if($staus == true){

			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => BURL . 'user/api/user/user_login/',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'username='. $_POST['username'] .'&password='. $_POST['password'] .'',
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/x-www-form-urlencoded',
			),
			));
	
			$response = curl_exec($curl);
	// testing($response);
			curl_close($curl);
			$data = json_decode($response, true);
// testing($data);
			if($data['status'] == 'false'){
				$aler_msg = $this->alert('error','error',$data['message']);
			}else if($data['status'] == 'true'){
				$aler_msg = $this->alert('success','สำเร็จ','เข้าสู่ะบบแล้ว !'); 
				// print_r($data);
				$_SESSION['usercode'] = $data['data']['usercode'];
				$_SESSION['username'] = $data['data']['username'];
				$_SESSION['studentID'] = $data['data']['studentID'];
				$_SESSION['useremail'] = $data['data']['useremail'];
				$_SESSION['class'] = $data['data']['class'];
				$_SESSION['firstname'] = $data['data']['firstname'];
				$_SESSION['lastname'] = $data['data']['lastname'];
				$_SESSION['room'] = $data['data']['room'];
				$_SESSION['role'] = $data['data']['role'];
				// header('Refresh: 1; URL='. BURL .'home');
				redirect(BURL . 'home');
			}else{
				$aler_msg = $this->alert('error','error','เกิดข้อผิดพลาด !');
			}
			}
		}

		$data = array(
			'icon' => '',
			'title' => 'Login',
			'keywords' => 'Login',
			'description' => 'Login',
			'image' => '',
			'control_url' => BURL . 'user',
			// Add URL
			'css_url' => array(),
			'plugins_js_url' => array(),
			'js_url' => array(),
			// Add info
			'css_info' => array(),
			'js_info' => array(),
			'plugins_js_info' => array(),
			// Add file
			'css_add' => array(),
			'js_add' => array(
				'user/js/meni/meni' . MIN_LOAD_FILE . '/meni.js',
				'user/js/meni/meni' . MIN_LOAD_FILE . '/login.js',
			),
			'plugins_js_add' => array(),
			// View
			'script' => "meni/meni/script/testscript",
			'view' => "meni/meni/login",
			'alert' => $aler_msg
		);
		$this->load->view($this->config->item('app_layout_ui_ff').'layout-ui-ff', $data);
	}
	// Controller
	}
?>
