<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <li class="nav-small-cap">
          <i class="mdi mdi-dots-horizontal"></i>
          <span class="hide-menu">Personal</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= BURL ?>backdoor" aria-expanded="false">
            <i class="mdi mdi-av-timer"></i>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <li class="nav-small-cap">
          <i class="mdi mdi-dots-horizontal"></i>
          <span class="hide-menu">Users</span>
        </li>
        <?php 
              if (isset($_SESSION['role']) && in_array($_SESSION['role'], ['admin'])):
        ?>
        <li class="sidebar-item ">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-account-circle"></i>
            <span class="hide-menu">สมาชิก</span>
          </a>
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a href="<?= BURL ?>backdoor/user" class="sidebar-link">
                <i class="bi-arrow-bar-right"></i>

                <span class="hide-menu">สมาชิกทั้งหมด</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                <i class="bi-arrow-bar-right"></i>
                <i class="mdi mdi-playlist-plus"></i>
                <span class="hide-menu">เพิ่มสมาชิก</span>
              </a>
              <ul aria-expanded="false" class="collapse second-level">
                <li class="sidebar-item">
                  <a href="<?= BURL ?>backdoor/user/add" class="sidebar-link">
                    <i class="bi-arrow-bar-right"></i>
                    <i class="bi-arrow-bar-right"></i>
                    <!-- <i class="mdi mdi-octagram"></i> -->
                    <span class="hide-menu"> เพิ่ม สมาชิก</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= BURL ?>backdoor/user/add/excel" class="sidebar-link">
                    <i class="bi-arrow-bar-right"></i>
                    <i class="bi-arrow-bar-right"></i>
                    <span class="hide-menu"> Import with Excel</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
  <?php endif; ?>

        <li class="nav-small-cap">
        <i class="mdi mdi-dots-horizontal"></i>
          <span class="hide-menu">ชุมนุม</span>
        </li>

        <li class="sidebar-item ">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
          <i class="mdi mdi-home"></i>
            <span class="hide-menu">ชุมนุม</span>
          </a>
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a href="<?= BURL ?>backdoor/club" class="sidebar-link">
              <i class="bi-arrow-bar-right"></i>
                <span class="hide-menu">ชุมนุมทั้งหมด</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="<?= BURL ?>backdoor/club/add" class="sidebar-link">
              <i class="bi-arrow-bar-right"></i>
                <span class="hide-menu">เพิ่มชุมนุม</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="<?= BURL ?>backdoor/club" class="sidebar-link">
              <i class="bi-arrow-bar-right"></i>
                <span class="hide-menu">แก้ไขชุมนุม</span>
              </a>
            </li>
          </ul>
        </li>
        <?php 
                        // print_r($_SESSION['role']);
                        // exit;
              if (isset($_SESSION['role']) && in_array($_SESSION['role'], ['admin', 'leaderteacher'])):
        ?>
        <li class="sidebar-item ">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
          <i class="mdi mdi-home"></i>
            <span class="hide-menu">จัดการชุมนุม</span>
          </a>
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a href="<?= BURL ?>backdoor/club/admin" class="sidebar-link">
              <i class="bi-arrow-bar-right"></i>
                <span class="hide-menu">ชุมนุมทั้งหมด</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="<?= BURL ?>backdoor/club/admin/1" class="sidebar-link">
              <i class="bi-arrow-bar-right"></i>
                <span class="hide-menu">ชุมนุมที่อนุมัติแล้ว</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="<?= BURL ?>backdoor/club/admin/2" class="sidebar-link">
              <i class="bi-arrow-bar-right"></i>
                <span class="hide-menu">ชุมนุมที่รอการอนุมัติ</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="<?= BURL ?>backdoor/club/admin/3" class="sidebar-link">
              <i class="bi-arrow-bar-right"></i>
                <span class="hide-menu">ชุมนุมที่ไม่อนุมัติ</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="<?= BURL ?>backdoor/club/admin/0" class="sidebar-link">
              <i class="bi-arrow-bar-right"></i>
                <span class="hide-menu">ชุมนุมที่ปิดการใช้งาน</span>
              </a>
            </li>
          </ul>
        </li>
      <?php endif; ?>
        <!-- <li class="nav-small-cap">
          <i class="mdi mdi-dots-horizontal"></i>
          <span class="hide-menu">ชมรม</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= BURL ?>backdoor/chekname" aria-expanded="false">
            <i class="mdi mdi-home"></i>
            <span class="hide-menu">เช็คชื่อ</span>
          </a>
        </li> -->
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>