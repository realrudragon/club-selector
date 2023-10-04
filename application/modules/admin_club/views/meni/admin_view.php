<?php $usercode = base64_encode('ChoteUserCode'). '-' . base64_encode($_SESSION['usercode']) . '-' . base64_encode('53das4dashdashjkdnasdas,.d4das65da4d5s'); ?>
<input type="text" id="userCode" value="<?= $usercode; ?>"  hidden>
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">รายชื่อชุมนุม</h4>
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
                                        <a href="<?= BURL ?>backdoor/club/add">
                                            <button type="button" class="btn btn-warning btn-sm">เพิ่มชุมนุม</button>                                        
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">edit Contact</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <from class="form-horizontal form-material">
                                                <div class="form-group">
                                                    <div class="col-md-12 mt-2">
                                                        <input type="text" class="form-control" placeholder="ชื่อชุมนุม">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <input type="text" class="form-control" placeholder="ระดับชั้นที่รับ">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <input type="text" class="form-control" placeholder="จำนวนสมาชิก">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <input type="text" class="form-control" placeholder="ห้องสอน">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <input type="text" class="form-control" placeholder="ครูที่ปรึกษาชุมนุม">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <input type="text" class="form-control" placeholder="ครูผู้ร่วมสอน">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                            <option selected="">สถานะ</option>
                                                            <option value="1">ปิด</option>
                                                            <option value="2">เปิด</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </from>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list footable-loaded footable" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th class="footable-sortable">ลำดับ<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ชื่อชุมนุม<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ระดับชั้นที่รับ<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">จำนวนสมาชิก<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ห้องสอน<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ครูที่ปรึกษาชุมนุม<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">กลุ่มสาระ<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">สถานะ<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">แก้ไขข้อมูล<span class="footable-sort-indicator"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($response || $response = ""){ ?>
                                    <?php foreach($response as $key => $value): ?>
                                        <tr class="footable-even" style="">
                                        <td><span class="footable-toggle"></span><?= $key+1 ?></td>
                                        <td>
                                            <a href="<?= BURL ?>backdoor/club/user/<?= $value['clubcode'] ?>"><?= $value['clubname'] ?></a>
                                        </td>
                                        <td><?= $value['clubclass'] ?></td>
                                        <td><?= $value['clubamount'] ?></td>
                                        <td><?= $value['clubplace'] ?></td>
                                        <td><?= $value['clubteacher'] ?></td>
                                        <td><?= $value['clubsubject'] ?></td>
                                        <?php 
                                        if($value['clubstatus'] == 1){
                                            echo '<td class="text-success">อนุมัติแล้ว</td>';
                                        }else if($value['clubstatus'] == 2){
                                            echo '<td class="text-info">รออนุมัติ</td>';
                                        }elseif ($value['clubstatus'] == 3) {
                                            echo '<td class="text-danger">ไม่อนุมัติ</td>';
                                        }else{
                                            echo '<td class="text-warning">ปิดชุมนุม</td>';
                                        }
                                        ?>
                                        <!-- <td class="text-success"></td> -->
                                        <td>
                                            <a href="<?= BURL ?>backdoor/club/edit/<?= $value['clubcode'] ?>"><button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="ti-pencil text-warning" aria-hidden="true"></i></button></a>
                                            <button type="button" onclick="delUser(<?= $value['clubid'] ?>)" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="ti-close text-danger" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php 
                                    }else{
                                    ?>
                                    <tr class="footable-even" style="">
                                        <td colspan="9" class="text-center">ยังไม่มีชุมนนุม</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">
                                        </td>
                                    </tr>
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