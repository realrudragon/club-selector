<div class="app">
    <div class="layout is-side-nav-dark">
        <?php //print_r($_SESSION); exit; ?>
        <!-- Header START -->
        <div class="header">
            <div class="logo logo-dark">
                <a class=".mt-2" href="index.php" style="margin-top: 10px;">
                    <img src="https://cdn.discordapp.com/attachments/877530595956244501/1127259617349619852/pp-logo_1_1.png" alt="Logo">
                    <small class="text-dark"><strong>โงเรียนพนัสพิทยาคาร</strong></small>
                </a>
            </div>
            <div class="logo logo-white">
                <a href="index.php">
                    <img src="https://cdn.discordapp.com/attachments/877530595956244501/1127144218951962655/logo.png" alt="Logo">
                    <img class="logo-fold" src="https://cdn.discordapp.com/attachments/877530595956244501/1127144218951962655/logo.png" alt="Logo">
                </a>
            </div>
            <div class="nav-wrap">
                <ul class="nav-left">
                    <li class="desktop-toggle">
                        <a href="javascript:void(0);">
                            <i class="anticon"></i>
                        </a>
                    </li>
                    <li class="mobile-toggle">
                        <a href="javascript:void(0);">
                            <i class="anticon"></i>
                        </a>
                    </li>
                </ul>

                <ul class="nav-right">
                    <li class="dropdown dropdown-animated scale-left">
                    <li class="dropdown dropdown-animated scale-left">
                        <?php if (isset($_SESSION['usercode'])) : ?>
                    <li class="dropdown dropdown-animated scale-left">
                        <div class="pointer" data-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-icon avatar-lg">
                            <i class="anticon anticon-user"></i>
                        </div>
                        </div>
                        <div class="p-b-15 p-t-20 dropdown-menu pop-profile" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                            <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                <div class="d-flex m-r-50">
                                    <div class="pointer" data-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-icon avatar-lg">
                                        <i class="anticon anticon-user"></i>
                                    </div>
                                    </div>
                                    <div class="m-l-10">
                                        <p class="m-b-0 text-dark font-weight-semibold"><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?></p>
                                        <p class="m-b-0 opacity-07"><?php echo $_SESSION['role'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo BURL . 'user/setting' ?>" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                        <span class="m-l-10">Edit Profile</span>
                                    </div>
                                    <i class="anticon font-size-10"></i>
                                </div>
                            </a>
                            <?php $role = isset($_SESSION['role']) ? $_SESSION['role'] : null; ?>
                            <?php 
              if (isset($_SESSION['role']) && in_array($_SESSION['role'], ['teacher','admin', 'leaderteacher'])):
        ?>
                            <a href="<?php echo BURL . 'backdoor' ?>" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                    <i class="anticon opacity-04 font-size-16 anticon-project"></i>
                                        <span class="m-l-10">ระบบหลังบ้าน</span>
                                    </div>
                                    <i class="anticon font-size-10"></i>
                                </div>
                            </a>
                            <?php endif; ?>
                            <a href="<?php echo BURL . 'user/s  club' ?>" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="anticon opacity-04 font-size-16 anticon-project"></i>
                                        <span class="m-l-10">ชุมนุมที่เลือก</span>
                                    </div>
                                    <i class="anticon font-size-10"></i>
                                </div>
                            </a>
                            <a href="<?php echo BURL . 'logout' ?>" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                        <span class="m-l-10">Logout</span>
                                    </div>
                                    <i class="anticon font-size-10"></i>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown dropdown-animated scale-left">
                        <span class="text-center p-2"><?php echo $_SESSION['firstname'] ?></span>
                    </li>
                <?php else : ?>
                    <a href="<?php echo BURL . 'login' ?>">
                        Login
                    </a>
                <?php endif; ?>
                </li>
                </li>
                </ul>
            </div>
        </div>
        <!-- Header END -->
        <!-- Side Nav START -->
        <?php $this->load->view($this->config->item('app_layout_ui_ff') . 'menu/slide'); ?>
        <!-- Side Nav END -->
        <!-- Page Container START -->
        <div class="page-container">
            <!-- Content Wrapper START -->
            <div class="main-content">
