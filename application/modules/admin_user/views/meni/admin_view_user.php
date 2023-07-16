<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                        <h4 class="card-title">Default Table</h4>
                        <h6 class="card-subtitle">Using the most basic table markup, here’s how <code>.table</code>-based tables look in Bootstrap. All table styles are inherited in Bootstrap 4, meaning any nested tables will be styled in the same manner as the parent.</h6>
                        <div class="m-t-40">
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <div class="form-group">
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add User</button>
                                        <small>New row will be added in last page.</small>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel1">New message</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Recipient:</label>
                                                        <input type="text" class="form-control" id="recipient-name1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="control-label">Message:</label>
                                                        <textarea class="form-control" id="message-text1"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <div class="form-group">
                                        <input id="demo-input-search2" type="text" placeholder="Search" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Add New Contact</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <from class="form-horizontal form-material">
                                                <div class="form-group">
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Type name">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Phone">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Designation">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Age">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Date of joining">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Salary">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                            <input type="file" class="upload">
                                                        </div>
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
                                        <th class="footable-sortable">เลขที่<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ชื่อขสกุล<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Email<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">เบอร์โทรศัพ<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ชั้นเรียน<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">อายุ<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ปีการศืกษา<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ห้อง<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">Act<span class="footable-sort-indicator"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="footable-even" style="">
                                        <td><span class="footable-toggle"></span>1</td>
                                        <td>
                                            <a href="javascript:void(0)"> Genelia Deshmukh</a>
                                        </td>
                                        <td>genelia@gmail.com</td>
                                        <td>+123 456 789</td>
                                        <td>ไม่ระบุ</td>
                                        <td>23</td>
                                        <td>ไม่ระบุ</td>
                                        <td>ไม่ระบุ</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="ti-pencil text-warning" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close text-danger" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="footable-odd" style="">
                                        <td><span class="footable-toggle"></span>2</td>
                                        <td>
                                            <a href="javascript:void(0)"> Arijit Singh</a>
                                        </td>
                                        <td>arijit@gmail.com</td>
                                        <td>+234 456 789</td>
                                        <td>ไม่ระบุ</td>
                                        <td>23</td>
                                        <td>ไม่ระบุ</td>
                                        <td>ไม่ระบุ</td>
                                        <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="ti-pencil text-warning" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close text-danger" aria-hidden="true"></i></button>
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