<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">import to excel</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">import_excel</li>
                    </ol>
                </nav>
            </div>
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
                        </div>
                        <div class="table-responsive">
                            <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Contact</h4>
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
                                                   
                                                </div>
                                            </from>
                                        </div>
                                        <div class="modal-footer">
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
                                        <th class="footable-sortable">ระดับชั้น<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">จำนวนสมาชิก<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ห้องสอน<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ครูผู้ร่วมสอน<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">สถานะ<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">แก้ไขข้อมูล<span class="footable-sort-indicator"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="footable-even" style="">
                                        <td><span class="footable-toggle"></span>1</td>
                                        <td>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#add-contact"> Make Digital Book</a>
                                        </td>
                                        <td>ม.1</td>
                                        <td>1</td>
                                        <td>625</td>
                                        <td>นางปาริชาติ อุษาวิจิตร์</td>
                                        <td class="text-success">เปิดใช้งาน</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn btn-success" data-toggle="modal" data-target="#add-contact"><i class="ti-check mx-1" aria-hidden="true"></i>Appove</button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn btn-danger"><i class="ti-close mx-1" aria-hidden="true">Cancel</i></button>
                                        </td>
                                    </tr>
                                    <tr class="footable-even" style="">
                                        <td><span class="footable-toggle"></span>2</td>
                                        <td>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#add-contact"> Make Digital Book</a>
                                        </td>
                                        <td>ม.1</td>
                                        <td>1</td>
                                        <td>221(มัลติมีเดีย)</td>
                                        <td>นางปาริชาติ อุษาวิจิตร์</td>
                                        <td class="text-danger">ไม่เปิดใช้งาน</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn btn-success" data-toggle="modal" data-target="#add-contact"><i class="ti-check mx-1" aria-hidden="true"></i>Appove</button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn btn-danger"><i class="ti-close mx-1" aria-hidden="true">Cancel</i></button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
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