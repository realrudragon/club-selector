<?php $usercode = base64_encode('ChoteUserCode'). '-' . base64_encode($_SESSION['usercode']) . '-' . base64_encode('53das4dashdashjkdnasdas,.d4das65da4d5s'); ?>
<input type="text" id="userCode" value="<?= $usercode; ?>"  hidden>
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title"></h4>
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
                                            <a href="<?= BURL ?>backdoor/club/user/<?= $value['clubcode'] ?>" style="width: 11em;word-wrap: break-word;"><?= $value['clubname']?></a>
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
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn btn-success" onclick="appoveClub(<?= $value['clubid'] ?>)"><i class="ti-check mx-1" aria-hidden="true"></i>Appove</button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn btn-danger" onclick="denyClub(<?= $value['clubid'] ?>)"><i class="ti-close mx-1" aria-hidden="true">Cancel</i></button>
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