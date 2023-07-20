<div class="page-header no-gutters has-tab">
                        <h2 class="font-weight-normal">Setting</h2>
                        <ul class="nav nav-tabs" >
                            <li class="nav-item">
                                <a class="nav-link"  href="<?= BURL ?>user/setting">Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="">ชุมนุมที่เลือก</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">ชุมนุมที่เลือกเอาไว้</h4>
                                    </div>
                                    <div class="card-body">
                                    <?php if($response['status'] == true){ ?>
                                        <div class="d-flex justify-content-end">
                                                <button class="btn btn-tone btn-danger" id="cancelClubButton" data-clubCode="<?= $response['data']['clubcode'] ?>" data-userCode="<?= $_SESSION['usercode'] ?>">ยกเลิกการเลือกชุมนุม</button>
                                            </div>
                                        <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg" style="background-color: #0a0a64;">
                                            <!-- <i class="anticon anticon-user"></i> -->
                                            ชุมนุม 
                                        </div>
                                        
                                            <div class="m-l-20 m-r-20">
                                                <h5 class="m-b-5 font-size-18"><?=$response['data']['clubname']?></h5>
                                            </div>
                                        </div>
                                        <hr class="m-v-25">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="userName">สถานที่เรียยนชุมนุม:</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name" value="<?=$response['data']['clubplace']?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="email">กลุ่มสาระการเรียนรู้:</label>
                                                    <input type="text" class="form-control" id="email" placeholder="email" value="<?=$response['data']['clubsubject']?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <label class="font-weight-semibold" for="phoneNumber">ครูผู้สอน:</label>
                                                    <input type="text" class="form-control" id="phoneNumber" value="<?=$response['data']['clubteacher']?>" readonly >
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="font-weight-semibold" for="dob">ระดับชั้น:</label>
                                                    <input type="text" class="form-control" id="dob" value="ม.<?=$response['data']['clubclass']?>" readonly>
                                                </div>
                                                <!-- <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="dob">Student ID:</label>
                                                    <input type="text" class="form-control" id="dob" value="ม.<?=$_SESSION['studentID']?>" readonly>
                                                </div> -->
                                            </div>
                                        </form>
                                        <?php }else{ ?>
                                            <center>
                                                <h4>ยังไม่ได้เลือกชุมนุม</h4>
                                                <a href="<?= BURL?>club/select">คลิกที่นี่เพื่อเลือกชุมนุม</a>
                                            </center>

                                            <?php }?>
                                    </div>
                                </div>