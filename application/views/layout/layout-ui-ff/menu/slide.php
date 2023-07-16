<div class="side-nav">
        <div class="side-nav-inner">
          <ul class="side-nav-menu scrollable">
            <li class="nav-item active">
              <a class="dropdown-toggle" href="<?php echo BURL . 'home'; ?>">
                <span class="icon-holder">
                  <i class="anticon anticon-home "></i>
                </span>
                <span class="title">หน้าแรก</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="anticon anticon-appstore"></i>
                </span>
                <span class="title">รายชื่อชุมนุม</span>
                <span class="arrow">
                  <i class="arrow-icon"></i>
                </span>
              </a>
              <!-- loop club -->
  <?php for ($i=1; $i <= 6; $i++): ?>
    <?php 

     $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => BURL . 'api/meni/api/list_club?class='. $i,
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
    
    // $response = curl_exec($curl);
    $response = json_decode(curl_exec($curl),true);
    // testing($response);
    curl_close($curl);
    ?>
              <ul class="dropdown-menu">
              <li class="nav-item dropdown">
                <a href="javascript:void(0);">
                  <span>ชมรม ม.<?= $i; ?></span>
                  <span class="arrow">
                    <i class="arrow-icon"></i>
                  </span>
                </a>
                <ul class="dropdown-menu">
                <?php 
                // testing($response);
                if($response['status'] == 'false'){
                  echo '';
                }else{
                  // print_r($response);
                  foreach ($response['data'] as $key => $value) {

                    if($value['clubstatus'] == '1'){
                      echo '<li>
                      <a href="' . $value['clubcode'] . '">'. $value['clubname'] .'</a>
                    </li>
                    ';
                    }else{
                      echo '';
                    }
                
                    // $dropdown_menu = '
                    // ';
                  }
                
                }
                ?>
                </ul>
              </li>
            </ul>
            <?php endfor; ?>
              <li class="nav-item ">
              <a class="dropdown-toggle" href="<?php echo BURL . 'club/select'; ?>">
                <span class="icon-holder">
                  <i class="anticon anticon-project "></i>
                </span>
                <span class="title">ลงทะเบียนชุมนุม</span>
              </a>
            </li>
            </li>
          </ul>
        </div>
      </div>