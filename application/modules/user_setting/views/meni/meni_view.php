                    <div class="page-header no-gutters has-tab">
                        <h2 class="font-weight-normal">Setting</h2>
                        <ul class="nav nav-tabs" >
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-account">Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-network">Network</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-notification">Notification</a>
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
                            <div class="tab-pane fade" id="tab-network">
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Network Integration</h4>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #4267b1; background: rgba(66, 103, 177, 0.1)">
                                                                    <i class="anticon anticon-facebook"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Facebook</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <label class="m-b-0">https://facebook.com</label>
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-fb" checked="">
                                                                    <label for="switch-fb"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #fff; background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%)">
                                                                    <i class="anticon anticon-instagram"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Instagram</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-inst">
                                                                    <label for="switch-inst"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #1ca1f2; background: rgba(28, 161, 242, 0.1)">
                                                                    <i class="anticon anticon-twitter"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Twitter</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <label class="m-b-0">https://twitter.com</label>
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-tw" checked="">
                                                                    <label for="switch-tw"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #d8487e; background: rgba(216, 72, 126, 0.1)">
                                                                    <i class="anticon anticon-dribbble"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Dribbble</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-dr">
                                                                    <label for="switch-dr"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #323131; background: rgba(50, 49, 49, 0.1)">
                                                                    <i class="anticon anticon-github"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Github</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <label class="m-b-0">https://github.com</label>
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-gh" checked="">
                                                                    <label for="switch-gh"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #0174af; background: rgba(1, 116, 175, 0.1)">
                                                                    <i class="anticon anticon-linkedin"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Linkedin</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <label class="m-b-0">https://linkedin.com</label>
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-ln" checked="">
                                                                    <label for="switch-ln"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #005ef7; background: rgba(0, 94, 247, 0.1)">
                                                                    <i class="anticon anticon-dropbox"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Dropbox</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-db">
                                                                    <label for="switch-db"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-notification">
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Notification Config</h4>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-blue">
                                                                    <i class="anticon anticon-user"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Everyone can look me up</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow people found on your public.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-1" checked>
                                                                    <label for="switch-config-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-cyan">
                                                                    <i class="anticon anticon-mobile"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Everyone can contact me</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow any peole to contact.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-2" checked> 
                                                                    <label for="switch-config-2"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-gold">
                                                                    <i class="anticon anticon-environment"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Show my location</h5>
                                                                    <p class="m-b-0 font-weight-normal">Turning on Location lets you explore what's around you.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-3">
                                                                    <label for="switch-config-3"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-purple">
                                                                    <i class="anticon anticon-mail"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Email Notifications</h5>
                                                                    <p class="m-b-0 font-weight-normal">Receive daily email notifications.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-4" checked>
                                                                    <label for="switch-config-4"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-red">
                                                                    <i class="anticon anticon-question"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Unknow Source</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow all downloads from unknow source.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-5">
                                                                    <label for="switch-config-5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-green">
                                                                    <i class="anticon anticon-swap"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Data Synchronization</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow data synchronize with cloud server.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-6" checked>
                                                                    <label for="switch-config-6"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-orange">
                                                                    <i class="anticon anticon-usergroup-add"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Groups Invitation</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow any groups invitation</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-7" checked>
                                                                    <label for="switch-config-7"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>