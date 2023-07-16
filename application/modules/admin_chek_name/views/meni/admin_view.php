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
                                        <th class="footable-sortable">ชื่อ-นามสกุล<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ห้อง<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">มาเรียน<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">ขาดเรียน<span class="footable-sort-indicator"></span></th>
                                        <th class="footable-sortable">เช็คการส่งงาน<span class="footable-sort-indicator"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="footable-even" style="">
                                        <td><span class="footable-toggle"></span>1</td>
                                        <td>
                                            <a href="javascript:void(0)"> Genelia Deshmukh</a>
                                        </td>
                                        <td>2/3</td>
                                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width:60px"></td>
                                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width:60px"></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">บันทึกการส่งงาน
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">ผ่าน</a></li>
                                                    <li><a href="#">ไม่ผ่าน</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="footable-odd" style="">
                                        <td><span class="footable-toggle"></span>1</td>
                                        <td>
                                            <a href="javascript:void(0)"> Genelia Deshmukh</a>
                                        </td>
                                        <td>2/2</td>
                                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width:60px"></td>
                                        <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width:60px"></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">บันทึกการส่งงาน
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">ผ่าน</a></li>
                                                    <li><a href="#">ไม่ผ่าน</a></li>
                                                </ul>
                                            </div>
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