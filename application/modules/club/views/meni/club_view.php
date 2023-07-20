<div class="container">
  <div class=".text-center .title mt-3 mb-3 .section-title bg-blue p-3 text-white shadow rounded">
    <h3 class="p-0 m-0 text-white">การลงทะเบียนเข้าร่วมชมรม</h3>
  </div>
  <div class="bg-white p-4 rounded">
    <?php //print_r($check_club['status']); ?>
    <?php if($check_club['status'] == 0){ ?>
      <center>
        <h4>ระบบยังไม่เปิดให้เลือกชุมนุม</h4>
        <a href="<?= BURL ?>home">คลิกที่นี่เพื่อกลับไปหน้าหลัก</a>
      </center>
    <?php }elseif($check_club['status'] == 1){ ?>

  <!-- <div class="d-flex align-items-center justify-content-end">
      <button type="Edit" class="btn btn-danger">ยกเลิกการเลือกชุมนุม</button>
    </div> -->
    <form method="POST" id="Formpostclub">
      <input type="text" name="user_code" id="userCode" value="<?= $_SESSION['usercode']?>" hidden>
    <h5 class="p-0 mt-3 mb-4">ชื่อ-สกุล
      <!-- <span class="text-danger">*</span> -->
    </h5>
    <input class="effect-2" type="text" id="userFullName" value="<?= $_SESSION['firstname']?> <?= $_SESSION['lastname']?>" style="background-color: #e9ecef" readonly>
    <!-- <span class="focus-border">
    </span> -->
    <h5 class="p-0 mt-5 mb-4">ชั้นมัธยมศึกษาปีที่
      <!-- <span class="text-danger">*</span> -->
    </h5>
    <input class="form-control text-dark" type="text" value="<?= $_SESSION['class']?>/<?= $_SESSION['room']?>" readonly="">
    <h5 class="p-0 mt-5 mb-4 ">เลือกชุมนุม
      <span class="text-danger">*</span>
    </h5>
    <select class="custom-select mr-sm-2"  name="club_code"  id="clubCode">
      <option selected="" value="0">เลือกชุมนุม</option>
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
    // testing($response);
    if($response['status'] == 'false'){
      echo '';
    }else{
      // print_r($response);
      foreach ($response['data'] as $key => $value) {
        $data = array(
          'club_code' => $value['clubcode'],
        );
        $countmember_by_club_log = $this->Api_model->select_club_log_by_club_code($data) ? count($this->Api_model->select_club_log_by_club_code($data)) : 0;
        print_r($countmember_by_club_log);

        if($countmember_by_club_log < $value['clubamount']){
          if($value['clubstatus'] == 1){
            echo '<option value="' . $value['clubcode'] . '">'. $value['clubname'] .'</option>';
              }
        }
      }
    }
    ?>
    </select>
    <div class="d-flex align-items-center justify-content-end">
      <button type="submit" class="btn btn-primary mt-4 mb-3">บันทึก</button>
    </div>
    </form>

  <?php }else{ ?>
      <center>
        <h4>เกิดข้อผิดพลาด</h4>
        <a href="<?= BURL ?>home">คลิกที่นี่เพื่อกลับไปหน้าหลัก</a>
      </center>
    <?php }?>
  </div>
</div>