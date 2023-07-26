<div class="page-breadcrumb">
  <div class="row pagetitles">
    <div class="col-lg-7 col-md-7 col-ms-7 col-7 mt-0 text-left .text-center .text-right .mt-3 .mb-2">
      <div class="btn-group .ml-2">
        <h3 class="t-c-danger desc_text weight-700">
          <i class="mdi mdi-account-circle"></i>
          เพิ่ม สมาชิก         </h3>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <form class="formAdduser" id="formAdduser" method="post" accept-charset="utf-8" novalidate="novalidate">
  <div class="row">
    <div class="col-12 form-group">
      <h5>รายละเอียด</h5>
      <hr class="mb-0">
    </div>
    <div class="col-lg-4 col-md-6 col-ms-12 col-12 form-group">
      <label class="weight-500">ผู้ใช้งาน</label>
      <input type="text" name="__username" value="" id="__username" placeholder="ผู้ใช้งาน(username)" class="form-control .no-border">
    </div>
    <div class="col-lg-4 col-md-6 col-ms-12 col-12 form-group">
      <label class="weight-500">อีเมล<small class="text-danger">*</small></label>
      <input type="email" name="__email" value="" id="__email" placeholder="อีเมล" class="form-control .no-border" required="">
    </div>
    <div class="col-lg-4 col-md-6 col-ms-12 col-12 form-group">
      <label class="weight-500">เลขประจำตัวนักเรียน<small class="text-danger">*</small></label>
      <input type="tel" name="__studentId" value="" id="__studentId" placeholder="เลขประจำตัวนักเรียน" class="form-control .no-border" required="" maxlength="10">
    </div>
    <div class="col-lg-3 col-md-6 col-ms-12 col-12 form-group">
      <label class="weight-500">ชื่อ<small class="text-danger">*</small></label>
      <input type="text" name="__firstName" value="" id="__firstName" placeholder="ชื่อ" class="form-control .no-border" required="">
    </div>
    <div class="col-lg-3 col-md-6 col-ms-12 col-12 form-group">
      <label class="weight-500">นามสกุล<small class="text-danger">*</small></label>
      <input type="text" name="__lastName" value="" id="__lastName" placeholder="นามสกุล" class="form-control .no-border" required="">
    </div>
    <div class="col-lg-3 col-md-6 col-ms-12 col-12 form-group">
      <label class="weight-500">ระดับชั้น<small class="text-danger">*</small></label>
      <input type="text" name="__class" value="" id="__class" placeholder="ระดับชั้น" class="form-control .no-border" required="">
    </div>
    <div class="col-lg-3 col-md-6 col-ms-12 col-12 form-group">
      <label class="weight-500">ห้อง<small class="text-danger">*</small></label>
      <input type="text" name="__room" value="" id="__room" placeholder="ระดับชั้น" class="form-control .no-border" required="">
    </div>
    <div class="col-lg-5 col-md-6 col-ms-12 col-12 form-group">
      <label class="weight-500">รหัสผ่าน<small class="text-danger">*</small></label>
      <input type="password" name="__pass" value="" id="__pass" placeholder="รหัสผ่าน" class="form-control .no-border" required="">
    </div>
    <div class="col-lg-5 col-md-6 col-ms-12 col-12 form-group">
      <label class="weight-500">ยืนยันรหัสผ่น<small class="text-danger">*</small></label>
      <input type="password" name="__repass" value="" id="__repass" placeholder="ยืนยันรหัสผ่น" class="form-control .no-border" required="">
    </div>
    <div class="col-lg-2 col-md-6 col-ms-12 col-12 form-group">
      <label class="weight-500">บทบาท<small class="text-danger">*</small></label>
      <select class="custom-select my-1 mr-sm-2" id="__status" name="__status" require>
        <option selected>Choose...</option>
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
        <option value="leaderteacher">Leader Teacher</option>
        <option value="admin">Admin</option>
  </select>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-2 col-12 mb-3">
      <button type="submit" class="btn btn-info btn-sm btn-block">
        <i class="mdi mdi-content-save mr-1"></i>บันทึก
      </button>
    </div>
    <div class="col-md-2 col-6 mb-3">
        <a href="<?= BURL ?>backdoor/user">
      <button type="button" class="btn btn-danger btn-sm btn-block">
        <i class="mdi mdi-close-circle mr-1"></i>ยกเลิก
      </button>
      </a>
    </div>
  </div>
</form>        </div>
      </div>
    </div>
  </div>
</div>