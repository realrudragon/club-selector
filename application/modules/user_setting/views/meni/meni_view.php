                    <div class="page-header no-gutters has-tab">
                        <h2 class="font-weight-normal">Setting</h2>
                        <ul class="nav nav-tabs" >
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="<?= BURL ?>user/setting">Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BURL ?>user/club">ชุมนุมที่เลือก</a>
                            </li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="tab-content m-t-15">
                            <div class="tab-pane fade show active" id="tab-account" >
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Basic Infomation</h4>
                                    </div>
                                    <div class="card-body">

                                        <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg">
                                            <i class="anticon anticon-user"></i>
                                        </div>
                                            <div class="m-l-20 m-r-20">
                                                <h5 class="m-b-5 font-size-18"><?=$_SESSION['username']?></h5>
                                                <!-- <p class="opacity-07 font-size-13 m-b-0">
                                                    Recommended Dimensions: <br>
                                                    120x120 Max fil size: 5MB
                                                </p> -->
                                            </div>
                                            <!-- <div>
                                                <button class="btn btn-tone btn-primary">Upload</button>
                                            </div> -->
                                        </div>
                                        <hr class="m-v-25">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="userName">Full Name:</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name" value="<?=$_SESSION['firstname']?> <?=$_SESSION['lastname']?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="email">Email:</label>
                                                    <input type="text" class="form-control" id="email" placeholder="email" value="<?=$_SESSION['useremail']?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="phoneNumber">Class:</label>
                                                    <input type="text" class="form-control" id="phoneNumber" value="M.<?=$_SESSION['class']?>/<?=$_SESSION['room']?>" readonly >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="dob">Role:</label>
                                                    <input type="text" class="form-control" id="dob" value="<?=$_SESSION['role']?>" readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="dob">Student ID:</label>
                                                    <input type="text" class="form-control" id="dob" value="<?=$_SESSION['studentID']?>" readonly>
                                                </div>
                                                <!-- <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="language">Language</label>
                                                    <select id="language" class="form-control">
                                                        <option>English</option>
                                                        <option>France</option>
                                                        <option>German</option>
                                                    </select>
                                                </div> -->
                                            </div>
                                        </form>
                                   
                                    </div>
                                </div>
                                <?php $this->load->view('forms/info.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>