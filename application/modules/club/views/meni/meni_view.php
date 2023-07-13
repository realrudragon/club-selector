<div class="container">
  <div class=".text-center .title mt-3 mb-3 .section-title bg-blue p-3 text-white shadow rounded">
    <h3 class="p-0 m-0 text-white">การลงทะเบียนเข้าร่วมชมรม</h3>
  </div>
  <div class="bg-white p-4 rounded">
  <div class="d-flex align-items-center justify-content-end">
      <button type="Edit" class="btn btn-danger">ยกเลิกการเลือกชุมนุม</button>
    </div>
    <h5 class="p-0 mt-3 mb-4">ชื่อ-สกุล
      <!-- <span class="text-danger">*</span> -->
    </h5>
    <input class="effect-2" type="text" placeholder="<?= $_SESSION['firstname']?> <?= $_SESSION['lastname']?>" readonly>
    <!-- <span class="focus-border">
    </span> -->
    <h5 class="p-0 mt-5 mb-4">ชั้นมัธยมศึกษาปีที่
      <!-- <span class="text-danger">*</span> -->
    </h5>
    <input class="form-control text-dark" type="text" placeholder="1" readonly="">
    <h5 class="p-0 mt-5 mb-4 ">เลือกชุมนุม
      <span class="text-danger">*</span>
    </h5>
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
      <option selected="">เลือกชุมนุม</option>
      <option value="1">xxx</option>
      <option value="2">xxx</option>
      <option value="3">xxx</option>
      <option value="4">xxx</option>
    </select>
    <div class="d-flex align-items-center justify-content-end">
      <button type="Save" class="btn btn-primary mt-4 mb-3">บันทึก</button>
    </div>
  </div>
</div>