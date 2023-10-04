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
                                <h5>รายชื่อนักเรียนทั้งหมดที่อยู่ในชุมนุม</h5>
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
                                        <th class="footable-sortable">ชุมนุม<span class="footable-sort-indicator"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($response || $response = "") { ?>
                                        <?php foreach ($response as $key => $value) : ?>
                                            <tr class="footable-even" style="">
                                                <td><span class="footable-toggle"></span><?= $key + 1 ?></td>
                                                <td>
                                                    <a href="javascript:void(0)"><?= $value['student_id'] ?></a>
                                                </td>
                                                <td><?= $value['firstname'] ?> <?= $value['lastname'] ?></td>
                                                <td><?= $value['class'] ?>/<?= $value['room'] ?></td>
                                                <td><a href="<?= BURL ?>backdoor/club/user/<?= $value['club_code'] ?>"><?= $value['club_name'] ?></a></td>
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