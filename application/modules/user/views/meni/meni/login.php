<div class="app">
<div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
        <div class="d-flex flex-column justify-content-between w-100">
            <div class="container d-flex h-100">
                <div class="row align-items-center w-100">
                    <div class="col-md-7 col-lg-5 m-h-auto">
                        <div class="card shadow-lg">
                            <div class="card-body">
                            <?php echo $alert; ?>
                            <div class="d-flex align-items-center justify-content-left m-b-10">
 <img src="https://cdn.discordapp.com/attachments/877530595956244501/1127259617349619852/pp-logo_1_1.png" alt="Logo">                                          
                                    
                                    <p class="text-dark mx-2 mt-2"><strong>โรงเรียนพนัสพิทยาคาร</strong></p>
                                    <br>
                                  </div>
                                <h2 class="m-b-0 text-center">Sign In <span style="font-size: medium;">(เข้าสู่ระบบ)</span></h2>
                                  <center>
                                  <h4 class="text-dark mx-2 mt-2 "><strong>Assembly activities (กิจกรรมชุมนุม)</strong></h4>
                                  </center>
                                <form method="POST">
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="userName">Username:</label>
                                        <div class="input-affix">
                                            <i class="prefix-icon anticon anticon-user"></i>
                                            <input type="text" class="form-control" name="username" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="password">Password:</label>
                                        <div class="input-affix m-b-10">
                                            <i class="prefix-icon anticon anticon-lock"></i>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="font-size-13 text-muted">
                                               หากลืมรหัสติดต่อแอดมิน
                                                <!-- <a class="small" href="sign-up.php"> Signup</a> -->
                                            </span>
                                            <button name="btn" class="btn btn-primary">Sign In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>