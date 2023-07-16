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
                        <h4 class="card-title">Validation Scenario Table</h4>
                        <h6 class="card-subtitle">Grid supports field values validation for inserting and editing. There are plenty of built-in validators available. Furthermore custom validators can be easily added.</h6>
                        <div id="validation" class="m-t-40 jsgrid" style="position: relative; height: auto; width: 100%;">
                            <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                <table class="jsgrid-table table table-striped table-hover">
                                    <tr class="jsgrid-header-row">
                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Name</th>
                                        <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 50px;">Age</th>
                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 200px;">Address</th>
                                        <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 100px;">Country</th>
                                        <th class="jsgrid-header-cell jsgrid-align-center" style="width: 100px;">Is Married</th>
                                        <th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-mode-button jsgrid-search-mode-button" type="button" title="Switch to searching"></button></th>
                                    </tr>
                                    <tr class="jsgrid-filter-row" style="display: none;">
                                        <td class="jsgrid-cell" style="width: 150px;"><input type="text" class="form-control input-sm"></td>
                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"><input type="number" class="form-control input-sm"></td>
                                        <td class="jsgrid-cell" style="width: 200px;"><input type="text" class="form-control input-sm"></td>
                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><select class="form-control input-sm">
                                                <option value="0"></option>
                                                <option value="1">United States</option>
                                                <option value="2">Canada</option>
                                                <option value="3">United Kingdom</option>
                                                <option value="4">France</option>
                                                <option value="5">Brazil</option>
                                                <option value="6">China</option>
                                                <option value="7">Russia</option>
                                            </select></td>
                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" readonly=""></td>
                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-search-button" type="button" title="Search"></button><button class="jsgrid-button jsgrid-clear-filter-button" type="button" title="Clear filter"></button></td>
                                    </tr>
                                    <tr class="jsgrid-insert-row" style="">
                                        <td class="jsgrid-cell jsgrid-invalid" style="width: 150px;" title="Field is required"><input type="text" class="form-control input-sm"></td>
                                        <td class="jsgrid-cell jsgrid-align-right jsgrid-invalid" style="width: 50px;" title="Field value is out of the defined range"><input type="number" class="form-control input-sm"></td>
                                        <td class="jsgrid-cell jsgrid-invalid" style="width: 200px;" title="Field value length is out of the defined range"><input type="text" class="form-control input-sm"></td>
                                        <td class="jsgrid-cell jsgrid-align-center jsgrid-invalid" style="width: 100px;" title="Country should be specified"><select class="form-control input-sm">
                                                <option value="0"></option>
                                                <option value="1">United States</option>
                                                <option value="2">Canada</option>
                                                <option value="3">United Kingdom</option>
                                                <option value="4">France</option>
                                                <option value="5">Brazil</option>
                                                <option value="6">China</option>
                                                <option value="7">Russia</option>
                                            </select></td>
                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"></td>
                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-insert-button" type="button" title="Insert"></button></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="jsgrid-grid-body">
                                <table class="jsgrid-table table table-striped table-hover">
                                    <tbody>
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Otto Clay</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">61</td>
                                            <td class="jsgrid-cell" style="width: 200px;">Ap #897-1459 Quam Avenue</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">China</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-alt-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Connor Johnston</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">73</td>
                                            <td class="jsgrid-cell" style="width: 200px;">Ap #370-4647 Dis Av.</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Lacey Hess</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">29</td>
                                            <td class="jsgrid-cell" style="width: 200px;">Ap #365-8835 Integer St.</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-alt-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Timothy Henson</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">78</td>
                                            <td class="jsgrid-cell" style="width: 200px;">911-5143 Luctus Ave</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Ramona Benton</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">43</td>
                                            <td class="jsgrid-cell" style="width: 200px;">Ap #614-689 Vehicula Street</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-alt-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Ezra Tillman</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">51</td>
                                            <td class="jsgrid-cell" style="width: 200px;">P.O. Box 738, 7583 Quisque St.</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Dante Carter</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">59</td>
                                            <td class="jsgrid-cell" style="width: 200px;">P.O. Box 976, 6316 Lorem, St.</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-alt-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Christopher Mcclure</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">58</td>
                                            <td class="jsgrid-cell" style="width: 200px;">847-4303 Dictum Av.</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Ruby Rocha</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">62</td>
                                            <td class="jsgrid-cell" style="width: 200px;">5212 Sagittis Ave</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Canada</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-alt-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Imelda Hardin</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">39</td>
                                            <td class="jsgrid-cell" style="width: 200px;">719-7009 Auctor Av.</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Jonah Johns</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">28</td>
                                            <td class="jsgrid-cell" style="width: 200px;">P.O. Box 939, 9310 A Ave</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-alt-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Herman Rosa</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">49</td>
                                            <td class="jsgrid-cell" style="width: 200px;">718-7162 Molestie Av.</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Arthur Gay</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">20</td>
                                            <td class="jsgrid-cell" style="width: 200px;">5497 Neque Street</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-alt-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Xena Wilkerson</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">63</td>
                                            <td class="jsgrid-cell" style="width: 200px;">Ap #303-6974 Proin Street</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Lilah Atkins</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">33</td>
                                            <td class="jsgrid-cell" style="width: 200px;">622-8602 Gravida Ave</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="jsgrid-pager-container" style="">
                                <div class="jsgrid-pager">Pages: <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">First</a></span> <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">Prev</a></span> <span class="jsgrid-pager-page jsgrid-pager-current-page">1</span><span class="jsgrid-pager-page"><a href="javascript:void(0);">2</a></span><span class="jsgrid-pager-page"><a href="javascript:void(0);">3</a></span><span class="jsgrid-pager-page"><a href="javascript:void(0);">4</a></span><span class="jsgrid-pager-page"><a href="javascript:void(0);">5</a></span><span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">...</a></span> <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Next</a></span> <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Last</a></span> &nbsp;&nbsp; 1 of 7 </div>
                            </div>
                            <div class="jsgrid-load-shader" style="display: none; position: absolute; inset: 0px; z-index: 1000;"></div>
                            <div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Email campaign chart -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title m-b-0">จำนวนคนในชมรม</h2>
                    <!-- <h2 class="font-light">35,658 <span class="font-16 text-success font-medium">+23%</span></h2> -->
                    <div class="m-t-20 m-b-10">
                        <ul class="list-style-none m-t-30">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="m-b-0 font-medium">ชมรมxxx<span class="font-normal font-14 text-muted m-l-5 mx-2">250 คน </span></h4>
                                    </div>
                                </div>
                                <div class="progress m-t-10">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 250px" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mt-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="m-b-0 font-medium">ชมรมxxx<span class="font-normal font-14 text-muted m-l-5 mx-2">125 คน </span></h4>
                                    </div>
                                </div>
                                <div class="progress m-t-10">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 125px" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mt-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="m-b-0 font-medium">ชมรมxxx<span class="font-normal font-14 text-muted m-l-5 mx-2">125 คน </span></h4>
                                    </div>
                                </div>
                                <div class="progress m-t-10">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 125px" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 order-lg-2 order-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="card-title">Sales Ratio</h4>
                        </div>
                        <div class="ml-auto">
                            <div class="dl m-b-10">
                                <select class="custom-select border-0 text-muted">
                                    <option value="0" selected="">August 2018</option>
                                    <option value="1">May 2018</option>
                                    <option value="2">March 2018</option>
                                    <option value="3">June 2018</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center no-block">
                        <div>
                            <span class="text-muted">This Week</span>
                            <h3 class="mb-0 text-info font-light">$23.5K <span class="text-muted font-12"><i class="mdi mdi-arrow-up text-success"></i>18.6</span></h3>
                        </div>
                        <div class="ml-4">
                            <span class="text-muted">Last Week</span>
                            <h3 class="mb-0 text-muted font-light">$945 <span class="text-muted font-12"><i class="mdi mdi-arrow-down text-danger"></i>46.3</span></h3>
                        </div>
                    </div>
                    <div class="sales ct-charts mt-5"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 order-lg-3 order-md-2">
            <div class="card">
                <div class="card-body m-b-0">
                    <h4 class="card-title">Thursday <span class="font-14 font-normal text-muted">12th April, 2018</span></h4>
                    <div class="d-flex align-items-center flex-row m-t-30">
                        <h1 class="font-light"><i class="wi wi-day-sleet"></i> <span>35<sup>°</sup></span></h1>
                    </div>
                </div>
                <div class="weather-report" style="height:120px; width:100%;"></div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title m-b-0">Users</h4>
                    <h2 class="font-light">35,658 <span class="font-16 text-success font-medium">+23%</span></h2>
                    <div class="m-t-30">
                        <div class="row text-center">
                            <div class="col-6 border-right">
                                <h4 class="m-b-0">58%</h4>
                                <span class="font-14 text-muted">New Users</span>
                            </div>
                            <div class="col-6">
                                <h4 class="m-b-0">42%</h4>
                                <span class="font-14 text-muted">Repeat Users</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Email campaign chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Ravenue - page-view-bounce rate -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="card-title mb-0">Latest Sales</h4>
                        </div>
                        <div class="ml-auto">
                            <select class="custom-select border-0 text-muted">
                                <option value="0" selected="">August 2018</option>
                                <option value="1">May 2018</option>
                                <option value="2">March 2018</option>
                                <option value="3">June 2018</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-light">
                    <div class="row align-items-center">
                        <div class="col-xs-12 col-md-6">
                            <h3 class="m-b-0 font-light">August 2018</h3>
                            <span class="font-14 text-muted">Sales Report</span>
                        </div>
                        <div class="col-xs-12 col-md-6 align-self-center display-6 text-info text-right">$3,690</div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="border-top-0">NAME</th>
                                <th class="border-top-0">STATUS</th>
                                <th class="border-top-0">DATE</th>
                                <th class="border-top-0">PRICE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td class="txt-oflo">Elite admin</td>
                                <td><span class="label label-success label-rounded">SALE</span> </td>
                                <td class="txt-oflo">April 18, 2017</td>
                                <td><span class="font-medium">$24</span></td>
                            </tr>
                            <tr>

                                <td class="txt-oflo">Real Homes WP Theme</td>
                                <td><span class="label label-info label-rounded">EXTENDED</span></td>
                                <td class="txt-oflo">April 19, 2017</td>
                                <td><span class="font-medium">$1250</span></td>
                            </tr>
                            <tr>

                                <td class="txt-oflo">Ample Admin</td>
                                <td><span class="label label-purple label-rounded">Tax</span></td>
                                <td class="txt-oflo">April 19, 2017</td>
                                <td><span class="font-medium">$1250</span></td>
                            </tr>
                            <tr>

                                <td class="txt-oflo">Medical Pro WP Theme</td>
                                <td><span class="label label-success label-rounded">Sale</span></td>
                                <td class="txt-oflo">April 20, 2017</td>
                                <td><span class="font-medium">-$24</span></td>
                            </tr>
                            <tr>

                                <td class="txt-oflo">Hosting press html</td>
                                <td><span class="label label-success label-rounded">SALE</span></td>
                                <td class="txt-oflo">April 21, 2017</td>
                                <td><span class="font-medium">$24</span></td>
                            </tr>
                            <tr>

                                <td class="txt-oflo">Digital Agency PSD</td>
                                <td><span class="label label-danger label-rounded">Tax</span> </td>
                                <td class="txt-oflo">April 23, 2017</td>
                                <td><span class="font-medium">-$14</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="card-title m-b-0">Top Region Sales</h4>
                        </div>
                        <div class="ml-auto">
                            <div class="dl">
                                <select class="custom-select border-0 text-muted">
                                    <option value="0" selected="">August 2018</option>
                                    <option value="1">May 2018</option>
                                    <option value="2">March 2018</option>
                                    <option value="3">June 2018</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="visitfromworld" style="height: 365px"></div>
                    <!-- row -->
                    <div class="row m-t-40 text-center text-lg-left">
                        <!-- column -->
                        <div class="col-xs-12 col-md-4">
                            <div class="mb-2 mt-2">
                                <span class="label label-success label-rounded">+23%</span>
                                <h5 class="font-normal text-muted m-t-10 m-b-5">United States</h5>
                                <span class="font-20 font-medium">3234 <span class="font-14 font-normal text-muted">($3549.54)</span></span>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-xs-12 col-md-4">
                            <div class="mb-2 mt-2">
                                <span class="label label-info label-rounded">+0.5%</span>
                                <h5 class="font-normal text-muted m-t-10 m-b-5">Europe</h5>
                                <span class="font-20 font-medium">2548 <span class="font-14 font-normal text-muted">($3549.54)</span></span>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-xs-12 col-md-4">
                            <div class="mb-2 mt-2">
                                <span class="label label-danger label-rounded">-18%</span>
                                <h5 class="font-normal text-muted m-t-10 m-b-5">Australia</h5>
                                <span class="font-20 font-medium">1476 <span class="font-14 font-normal text-muted">($3549.54)</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Ravenue - page-view-bounce rate -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Comments</h4>
                </div>
                <div class="comment-widgets scrollable" style="height:430px;">
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row m-t-0">
                        <div class="p-2">
                            <img src="<?= BURL ?>assets/layout-ui/ui_templates/admin_Ui/images/users/1.jpg" alt="user" width="50" class="rounded-circle">
                        </div>
                        <div class="comment-text w-100">
                            <h6 class="font-medium">James Anderson</h6>
                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                            <div class="comment-footer">
                                <span class="text-muted float-right">April 14, 2016</span>
                                <span class="label label-rounded label-primary">Pending</span>
                                <span class="action-icons">
                                    <a href="javascript:void(0)">
                                        <i class="ti-pencil-alt"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-check"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-heart"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2">
                            <img src="<?= BURL ?>assets/layout-ui/ui_templates/admin_Ui/images/users/4.jpg" alt="user" width="50" class="rounded-circle">
                        </div>
                        <div class="comment-text active w-100">
                            <h6 class="font-medium">Michael Jorden</h6>
                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                            <div class="comment-footer ">
                                <span class="text-muted float-right">April 14, 2016</span>
                                <span class="label label-success label-rounded">Approved</span>
                                <span class="action-icons active">
                                    <a href="javascript:void(0)">
                                        <i class="ti-pencil-alt"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon-close"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-heart text-danger"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2">
                            <img src="<?= BURL ?>assets/layout-ui/ui_templates/admin_Ui/images/users/5.jpg" alt="user" width="50" class="rounded-circle">
                        </div>
                        <div class="comment-text w-100">
                            <h6 class="font-medium">Johnathan Doeting</h6>
                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                            <div class="comment-footer">
                                <span class="text-muted float-right">April 14, 2016</span>
                                <span class="label label-rounded label-danger">Rejected</span>
                                <span class="action-icons">
                                    <a href="javascript:void(0)">
                                        <i class="ti-pencil-alt"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-check"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-heart"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row m-t-0">
                        <div class="p-2">
                            <img src="<?= BURL ?>assets/layout-ui/ui_templates/admin_Ui/images/users/2.jpg" alt="user" width="50" class="rounded-circle">
                        </div>
                        <div class="comment-text w-100">
                            <h6 class="font-medium">Steve Jobs</h6>
                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                            <div class="comment-footer">
                                <span class="text-muted float-right">April 14, 2016</span>
                                <span class="label label-rounded label-primary">Pending</span>
                                <span class="action-icons">
                                    <a href="javascript:void(0)">
                                        <i class="ti-pencil-alt"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-check"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="ti-heart"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center p-b-15">
                        <div>
                            <h4 class="card-title m-b-0">To Do List</h4>
                        </div>
                        <div class="ml-auto">
                            <div class="dl">
                                <select class="custom-select border-0 text-muted">
                                    <option value="0" selected="">August 2018</option>
                                    <option value="1">May 2018</option>
                                    <option value="2">March 2018</option>
                                    <option value="3">June 2018</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="todo-widget scrollable" style="height:422px;">
                        <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                            <li class="list-group-item todo-item" data-role="task">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label todo-label" for="customCheck">
                                        <span class="todo-desc">Simply dummy text of the printing and typesetting</span> <span class="badge badge-pill badge-success float-right">Project</span>
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item todo-item" data-role="task">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label todo-label" for="customCheck1">
                                        <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</span><span class="badge badge-pill badge-danger float-right">Project</span>
                                    </label>
                                </div>

                            </li>
                            <li class="list-group-item todo-item" data-role="task">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label todo-label" for="customCheck2">
                                        <span class="todo-desc">Ipsum is simply dummy text of the printing</span> <span class="badge badge-pill badge-info float-right">Project</span>
                                    </label>
                                </div>

                            </li>
                            <li class="list-group-item todo-item" data-role="task">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label todo-label" for="customCheck3">
                                        <span class="todo-desc">Simply dummy text of the printing and typesetting</span> <span class="badge badge-pill badge-info float-right">Project</span>
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item todo-item" data-role="task">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label todo-label" for="customCheck4">
                                        <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</span> <span class="badge badge-pill badge-purple float-right">Project</span>
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item todo-item" data-role="task">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label todo-label" for="customCheck5">
                                        <span class="todo-desc">Ipsum is simply dummy text of the printing</span> <span class="badge badge-pill badge-success float-right">Project</span>
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item todo-item" data-role="task">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label todo-label" for="customCheck6">
                                        <span class="todo-desc">Simply dummy text of the printing and typesetting</span> <span class="badge badge-pill badge-primary float-right">Project</span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->