<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">สมาชิกทั้งหมด</h4>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class=".card-group">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="m-t-40">
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <div class="form-group">
                                        <a href="<?= BURL ?>backdoor/user/add"><button type="button" class="btn btn-warning btn">Add User</button></a>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <form method="">

                                        <div class="form-group">
                                            <input id="demo-input-search2" type="text" placeholder="Search" autocomplete="off" name="search">
                                            <button type="submit" class="btn"> Submit </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูล</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal form-material" id="formEditInput">
                                                <input type="text" id="userID" hidden>
                                                <div class="form-group">
                                                    <div class="col-md-12 mt-2">
                                                        <label>ชื่อผู้ใช้</label>
                                                        <input type="text" class="form-control" id="userName" placeholder="ชื่อผู้ใช้">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>เลขประจำตัว</label>
                                                        <input type="text" class="form-control" id="studentID" placeholder="เลขประจำตัวนักเรียน" value="">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>ชื่อ</label>
                                                        <input type="text" class="form-control" id="firstName" placeholder="ชื่อ">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>นามสกุล</label>
                                                        <input type="text" class="form-control" id="lastName" placeholder="นามสกุล">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>อีเมล</label>
                                                        <input type="text" class="form-control" id="email" placeholder="Email">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>ชั้นเรียน</label>
                                                        <input type="text" class="form-control" id="class" placeholder="ชั้นเรียน">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>ห้อง</label>
                                                        <input type="text" class="form-control" id="room" placeholder="ห้อง">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>สถานะ</label>
                                                        <select class="form-control" id="status">
                                                            <option selected="">Choose...</option>
                                                            <option value="0">Inactive</option>
                                                            <option value="1">Active</option>
                                                            <option value="2">Banned</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>บทบาท</label>
                                                        <select class="form-control" id="role"  >
                                                            <option selected>Choose...</option>
                                                            <option value="student">Student</option>
                                                            <option value="teacher">Teacher</option>
                                                            <option value="leaderteacher">Leader Teacher</option>
                                                            <option value="admin">Admin</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" onclick="editUser()" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list footable-loaded footable" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th class="footable-sortable">ลำดับ<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">เลขประจำตัวนักเรียน<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ชื่อ - สกุล<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Email<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ชั้นเรียน/ห้อง<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">บทบาท<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">สถานะ<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Act<span class="footable-sort-indicator"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($response != null) { ?>
                                    <?php foreach ($response as $key => $value) : ?>
                                        <tr class="footable-even" style="">
                                            <td><span class="footable-toggle"></span><?= $key + 1; ?></td>
                                            <td>
                                                <a href="javascript:void(0)"><?= $value['studentID']; ?></a>
                                            </td>
                                            <td><?= $value['firstname']; ?> <?= $value['lastname']; ?></td>
                                            <td><?= $value['email']; ?></td>
                                            <td><?= $value['class']; ?>/<?= $value['room']; ?></td>
                                            <td><?= $value['role']; ?></td>
                                            <?php
                                            if ($value['status'] == 1) {
                                                echo '<td><span class="label label-success">Active</span></td>';
                                            } elseif ($value['status'] == 3) {
                                                echo '<td><span class="label label-warning">Banned</span></td>';
                                            } else {
                                                echo '<td><span class="label label-danger">Inactive</span></td>';
                                            }
                                            ?>
                                            <!-- <td><?= $value['status'] ? 'Active' : 'Inactive'; ?></td> -->
                                            <!-- <td>ไม่ระบุ</td> -->
                                            <td>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-menu mr-1"></i>
                                                เครื่องมือ
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a onclick="detailUser('<?= $value['userid'] ?>')" class="dropdown-item" data-toggle="modal" data-target="#add-contact">
                                                <i class="mdi mdi-table-edit mr-1"></i>    
                                                แก้ไขข้อมูล</a>
                                                <a class="dropdown-item"onclick="change_pass('<?= $value['username'] ?>','<?= $value['userid'] ?>')"><i class="mdi mdi-key-change mr-1"></i>เปลี่ยนรหัสผ่าน</a>
                                                </div>
                                            </div>
                                            </div>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" onclick="delUser('<?= $value['userid']; ?>')" data-original-title="Delete"><i class="ti-close text-danger" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <?php }else{?>
                                        <tr class="footable-even" style="">
                                            <td colspan="8" style="text-align: center;">ไม่พบข้อมูล</td>
                                        </tr>
                                        <?php }?>
                                </tbody>
                                <tfoot>
                                    <!-- <tr>
                                        <td colspan="2">
                                        </td>

                                        <td colspan="7">
                                            <div class="">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-end">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                                                <span aria-hidden="true">«</span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                                                <span aria-hidden="true">»</span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </td>
                                    </tr> -->
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->