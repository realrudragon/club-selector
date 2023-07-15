<?php
// print_r($_SESSION);
// exit;
if(isset($_SESSION['usercode'])){

  $curl = curl_init();
 curl_setopt_array($curl, array(
   CURLOPT_URL => BURL . 'user/api/user/select_user_usercode/',
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => '',
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => 'POST',
   CURLOPT_POSTFIELDS =>'usercode='. $_SESSION['usercode'] ,
   CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    'Cookie: PreFix_LangUage_LaNg=th'
  ),
 ));
 
 $response = json_decode(curl_exec($curl),true);
 
 curl_close($curl);
//  print_r($response);
//  exit;
 if($response['status'] == 'false'){
   session_destroy();
    redirect(BURL . 'login');
 }else{
  // print_r($response);
  $_SESSION['usercode'] = $response['data']['usercode'];
  $_SESSION['username'] = $response['data']['username'];
  $_SESSION['studentID'] = $response['data']['studentID'];
  $_SESSION['useremail'] = $response['data']['email'];
  $_SESSION['class'] = $response['data']['class'];
  $_SESSION['firstname'] = $response['data']['firstname'];
  $_SESSION['lastname'] = $response['data']['lastname'];
  $_SESSION['room'] = $response['data']['room'];
  $_SESSION['role'] = $response['data']['role'];
    // print_r($response);
// exit;
  }
}else{
  session_destroy();
  redirect(BURL . 'login');
}
?>
<div class="container">
  <div class=".text-center .title mt-3 mb-3 .section-title bg-blue p-3 text-white shadow rounded">
    <h3 class="p-0 m-0 text-white">การลงทะเบียนเข้าร่วมชมรม</h3>
  </div>
  <div class="bg-white p-4 rounded">
  <div class="d-flex align-items-center justify-content-end">
      <button type="Edit" class="btn btn-danger">ยกเลิกการเลือกชุมนุม</button>
    </div>
    <h5 class="p-0 mt-3 mb-4">ชื่อ-สกุล
      <!-- <span class="text-danger">*</span> -->
    </h5>
    <input class="effect-2" type="text" placeholder="<?= $_SESSION['firstname']?> <?= $_SESSION['lastname']?>" readonly>
    <!-- <span class="focus-border">
    </span> -->
    <h5 class="p-0 mt-5 mb-4">ชั้นมัธยมศึกษาปีที่
      <!-- <span class="text-danger">*</span> -->
    </h5>
    <input class="form-control text-dark" type="text" value="<?= $_SESSION['class']?>/<?= $_SESSION['room']?>" readonly="">
    <h5 class="p-0 mt-5 mb-4 ">เลือกชุมนุม
      <span class="text-danger">*</span>
    </h5>
    <select class="custom-select mr-sm-2"  id="inlineFormCustomSelect">
      <option selected="" readonly>เลือกชุมนุม</option>
      <?php 
     $curl_class = curl_init();
    curl_setopt_array($curl_class, array(
      CURLOPT_URL => BURL . 'api/meni/api/list_club?class='. $_SESSION['class'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Cookie: PreFix_LangUage_LaNg=th'
      ),
    ));
    
    $response = json_decode(curl_exec($curl_class), true);
    
    curl_close($curl_class);

    if($response['status'] == 'false'){
      echo '';
    }else{
      // print_r($response);
      foreach ($response['data'] as $key => $value) {
      echo '<option value="' . $value['clubcode'] . '">'. $value['clubname'] .'</option>';
      }
    }
    ?>
    </select>
    <div class="d-flex align-items-center justify-content-end">
      <button type="Save" class="btn btn-primary mt-4 mb-3">บันทึก</button>
    </div>
  </div>
</div>