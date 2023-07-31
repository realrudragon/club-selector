 <?php //testing($response);?>
<div class="container card-body">
<div class="container">
    <center>
<img src="https://cdn.discordapp.com/attachments/962055951341486190/1133345112907333663/pp-logo.png" class="img-fluid" style="max-height: 95px;" alt="Responsive Image">
</center>  
</div>
    <br>
    <br>
    <h5 class="text-center">ชื่อกิจกรรมชุมนุม :  <?= $response['clubname'] ?></h5> 
    <div class="d-flex">
    <div class="p-2"><h5 class=" justify-content-start">ระดับชั้นชั้นมัธยมศึกษาปีที่ :  <?= $response['clubclass'] ?></h5> </div>
  <div class="ml-auto p-2"><h5 class=" justify-content-end">จำนวนที่รับ :  <?= $response['clubamount'] ?> คน</h5> </div>
</div>
<div class="d-flex">
    <div class="p-2"><h5>สถานที่เรียน : <span><?= $response['clubplace'] ?></h5></div>
  <div class="ml-auto p-2"><h5 class=" justify-content-end">กลุ่มสาระ  :  <?= $response['clubsubject'] ?></h5> </div>
</div>
            <div id="accordion">
      <div class="title mt-5 mb-3 .section-title bg-blue p-3 text-white shadow" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        <h3 class="p-0 m-0 text-white">วัตถุประสงค์/สิ่งที่ต้องการพัฒนาให้เกิดแก่ผู้เรียน</h3>
      </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
    <div class=" py-2 px-1">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-lg-6 my-1">
                        <?php foreach(json_decode($response['clubobjective'] ,true) as $key_obj => $value_obj): ?>
                            <div class="bg-white  py-2 px-2 text-center">
                                <p class="p-0 m-0 text-dark"><u><?= $value_obj ?></u></p>
                            </div>
                            <?php endforeach; ?>
                        <!-- </a> -->
                    </div>
                </div>
            </div>
    </div>
</div>
            <div id="accordion">
      <div class="title mt-5 mb-3 .section-title bg-blue p-3 text-white shadow" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <h3 class="p-0 m-0 text-white">ข้อกำหนดและคุณสมบัติผู้สมัคร</h3>
      </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
    <div class=" py-2 px-1">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-lg-6 my-1">
                        <?php foreach(json_decode($response['clubspectified'] ,true) as $key_spec => $value_spec): ?>
                            <div class="bg-white  py-2 px-2 text-center">
                                <p class="p-0 m-0 text-dark"><u><?= $value_spec ?></u></p>
                            </div>
                            <?php endforeach; ?>
                        <!-- </a> -->
                    </div>
                </div>
            </div>
    </div>
</div>
            <div id="accordion">
      <div class="title mt-5 mb-3 .section-title bg-blue p-3 text-white shadow" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <h3 class="p-0 m-0 text-white">คำอธิบายกิจกรรม</h3>
      </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
    <div class=" py-2 px-1">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-lg-6 my-1">
                            <div class="bg-white  py-2 px-2 text-center">
                                <p class="p-0 m-0 text-dark"><u><?= $response['clubdescription']; ?></u></p>
                            </div>
                        <!-- </a> -->
                    </div>
                </div>
            </div>
    </div>
</div>
<div id="accordion">
      <div class="title mt-5 mb-3 .section-title bg-blue p-3 text-white shadow" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <h3 class="p-0 m-0 text-white">แหล่งเรียนรู้/สื่อการเรียนรู้/วัสดุอุปกรณ์</h3>
      </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
    <div class=" py-2 px-1">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-lg-6 my-1">
                        <?php foreach(json_decode($response['clubresource'] ,true) as $key_spec => $value_spec): ?>
                            <div class="bg-white  py-2 px-2 text-center">
                                <p class="p-0 m-0 text-dark"><u><?= $value_spec ?></u></p>
                            </div>
                            <?php endforeach; ?>
                        <!-- </a> -->
                    </div>
                </div>
            </div>
    </div>
</div>
<div id="accordion">
      <div class="title mt-5 mb-3 .section-title bg-blue p-3 text-white shadow" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        <h3 class="p-0 m-0 text-white">แผนกำหนดการจัดกิจกรรมรายชั่วโมง</h3>
      </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
    <div class=" py-2 px-1">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-lg-6 my-1">
                    <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ชั่วโมงที่</th>
                <th scope="col">กิจกรรมที่ปฏิบัติ</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach(json_decode($response['clubplan'] ,true) as $key_plan => $value_plan): ?>
            <tr>
                <th scope="row"><?= $key_plan+1 ?></th>
                <td><?= $value_plan ?></td>
            </tr>
                            <?php endforeach; ?>

        </tbody>
    </table>
</div>
                    </div>
                </div>
            </div>
    </div>
</div>
<div id="accordion">
      <div class="title mt-5 mb-3 .section-title bg-blue p-3 text-white shadow" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        <h3 class="p-0 m-0 text-white">การวัดผลและประเมินกิจกรรม</h3>
      </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
    <div class=" py-2 px-1">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-lg-6 my-1">
                        <?php foreach(json_decode($response['clubresource'] ,true) as $key_spec => $value_spec): ?>
                            <div class="bg-white  py-2 px-2 text-center">
                                <p class="p-0 m-0 text-dark"><u><?= $value_spec ?></u></p>
                            </div>
                            <?php endforeach; ?>
                        <!-- </a> -->
                    </div>
                </div>
            </div>
    </div>
</div>
</div>