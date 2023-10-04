<?php $usercode = base64_encode('ChoteUserCode') . '-' . base64_encode($_SESSION['usercode']) . '-' . base64_encode('53das4dashdashjkdnasdas,.d4das65da4d5s'); ?>
<?php //print_r($response); ?>
<input type="text" id="userCode" value="<?= $usercode; ?>" hidden>
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
                            <center>
                                <p>รายชื่อนักเรียนชุมนุม : <?= $response['club_name'] ?></p>
                            </center>
                        </div>
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list footable-loaded footable" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th class="footable-sortable">ลำดับ<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">เลขประจำตัวนักเรียน<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ชื่อ-สกุล<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ชั้น<span class="footable-sort-indicator"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($response['data'] || $response['data'] = "") { ?>
                                        <?php foreach ($response['data'] as $key => $value) : ?>
                                            <tr class="footable-even" style="">
                                                <td><span class="footable-toggle"></span><?= $key + 1 ?></td>
                                                <td>
                                                    <a href="javascript:void(0)"><?= $value['studentID'] ?></a>
                                                </td>
                                                <td><?= $value['firstname'] ?> <?= $value['lastname'] ?></td>
                                                <td><?= $value['class'] ?>/<?= $value['room'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php
                                    } else {
                                    ?>
                                        <tr class="footable-even" style="">
                                            <td colspan="9" class="text-center">ยังไม่มีคนเข้าชุมนุม</td>
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
