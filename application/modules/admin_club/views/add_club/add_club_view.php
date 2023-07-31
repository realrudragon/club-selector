<?php 
$usercode = base64_encode('ChoteUserCode'). '-' . base64_encode($_SESSION['usercode']) . '-' . base64_encode('53das4dashdashjkdnasdas,.d4das65da4d5s');
?>
<div class="mr-1 ml-1 mt-5 mb-1">
    <div class="card">
        <form id="formAddClub">
            <input type="text" id="userCode" value="<?= $usercode ?>" hidden>
        <div>
            <div class="card-body">
                <h4 class="card-title text-center">สร้างชุมนุม</h4>
                <div class="row pt-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="control-label">ชื่อชุมนุม</label>
                            <input type="text" id="clubName" class="form-control" placeholder="ชื่อชุมนุม">
                            <small class="form-control-feedback">
                            </small>
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="mb-3 has-danger">
                            <label class="control-label">ระดับชั้น</label>
                            <input type="number" id="clubClass" class="form-control form-control-danger" placeholder="ระดับชั้น">
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 has-success">
                            <label class="control-label">จำนวนที่รับ</label>
                            <input type="number" id="clubAmount" class="form-control form-control-danger" placeholder="จำนวนที่รับ">
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="control-label">สถานที่เรียน</label>
                            <input type="text" id="clubPlace" class="form-control" placeholder="สถานที่เรียน">
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="control-label">กลุ่มสาระการเรียนรู้</label>
                            <select class="form-control form-select" data-placeholder="เลือกกลุ่มสาระ" id="clubSubject" tabindex="1">
                                <option selected>โปรดเลือกกลุ่มสาระ</option>
                                <option value="ภาษาไทย">ภาษาไทย</option>
                                <option value="คณิตศาสตร์">คณิตศาสตร์</option>
                                <option value="วิทยาศาสตร์">วิทยาศาสตร์</option>
                                <option value="สังคมศึกษา">สังคมศึกษา</option>
                                <option value="สุขศึกษาและพลศึกษา">สุขศึกษาและพลศึกษา</option>
                                <option value="ศิลปะ">ศิลปะ</option>
                                <option value="การงานอาชีพ">การงานอาชีพ</option>
                                <option value="ภาษาต่างประเทศ">ภาษาต่างประเทศ</option>
                            </select>
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="control-label">ครูที่ปรึกษาชุมนุม</label>
                            <input type="text" id="clubTeacher" class="form-control" placeholder="ครูที่ปรึกษาชุมนุม">
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <div class="mb-3">
                    <label class="control-label">คำอธิบายกิจกรรม</label>
                    <input type="text" id="clubDescription" class="form-control" placeholder="คำอธิบายกิจกรรม">
                </div>
            </div>
            <hr>
            <div class="card-body">
                <!--/row-->
                <h4 class="card-title mb-4 text-center">รายละเอียดชุมนุม</h4>
                <fieldset class="hss repeatable-field" data-component="field-repeater" data-props='
      {
          "maxRows": 10,
          "inputName": "clubObjective",
          "labelText": "objective"
      }' tabindex="0">
                    <legend>
                        วัตถุประสงค์/สิ่งที่ต้องกาพัฒนาให้เกิดแก่ผู้เรียน <span class="repeatable-field__limit-counter" data-ref="limitCounter"></span>
                    </legend>

                    <ol class="repeatable-field__rows" data-ref="rowList"></ol>

                    <div class="repeatable-field__bottom">

                        <button class="repeatable-field__add-button button" data-ref="addButton" type="button">
                            + Add
                        </button>
                    </div>
                </fieldset>
                <br>
                <fieldset class="hss repeatable-field" data-component="field-repeater" data-props='
      {
          "maxRows": 10,
          "inputName": "clubSpec",
          "labelText": "spec"
      }' tabindex="0">
                    <legend>
                        ข้อกำหนดและคุณสมบัติผู้สมัคร <span class="repeatable-field__limit-counter" data-ref="limitCounter"></span>
                    </legend>

                    <ol class="repeatable-field__rows" data-ref="rowList"></ol>

                    <div class="repeatable-field__bottom">

                        <button class="repeatable-field__add-button button" data-ref="addButton" type="button">
                            + Add
                        </button>
                    </div>
                </fieldset>
                <br>

                <fieldset class="hss repeatable-field" data-component="field-repeater" data-props='
      {
          "maxRows": 10,
          "inputName": "clubResource",
          "labelText": "spec"
      }' tabindex="0">
                    <legend>
                        แหล่งเรียนรู้/สื่อการเรียนรู้/วัสดุอุปกรณ์ <span class="repeatable-field__limit-counter" data-ref="limitCounter"></span>
                    </legend>

                    <ol class="repeatable-field__rows" data-ref="rowList"></ol>

                    <div class="repeatable-field__bottom">

                        <button class="repeatable-field__add-button button" data-ref="addButton" type="button">
                            + Add
                        </button>
                    </div>
                </fieldset>
                <fieldset class="hss repeatable-field" data-component="field-repeater" data-props='
      {
          "maxRows": 10,
          "inputName": "clubAssessment",
          "labelText": "spec"
      }' tabindex="0">
                    <legend>
                        การวัดผลและประเมินกิจกรรมชุมนุม <span class="repeatable-field__limit-counter" data-ref="limitCounter"></span>
                    </legend>

                    <ol class="repeatable-field__rows" data-ref="rowList"></ol>

                    <div class="repeatable-field__bottom">

                        <button class="repeatable-field__add-button button" data-ref="addButton" type="button">
                            + Add
                        </button>
                    </div>
                </fieldset>
                <br>
                <center>
                    <p>แผนกำหนดกิจกรรมรายชั่วโมง</p>
                </center>
                <div class="container">
                    <table class="table table-sm mb-0">
                        <thead>
                            <tr>
                                <th scope="col">ชั่วโมงที่</th>
                                <th scope="col">กิจกรรมที่ปฏิบัติ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 20; $i++) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><input type="text" name="clubPlan[]" class="form-control" placeholder="กิจกรรมที่ปฏิบัติ"></td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>


            </div>
            <div class="form-actions">
                <div class="card-body border-top">
                    <button type="submit" class="btn btn-success rounded-pill px-4">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save feather-sm me-1 fill-icon">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                                <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                <polyline points="7 3 7 8 15 8"></polyline>
                            </svg>
                            Save
                        </div>
                    </button>
                    <a href="<?= BURL ?>backdoor/club">
                    <button type="button" class="
                            btn btn-danger
                            rounded-pill
                            px-4
                            ms-2
                            text-white
                          ">
                        Cancel
                    </button>
                </a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>