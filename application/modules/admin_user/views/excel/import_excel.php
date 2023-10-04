
<center class="mt-5">
  <!-- <div class="container"> -->

    <input type="file" id="fileInput">
    <button class="btn btn-outline-succes" onclick="uploadExcel()">Upload</button>

  <!-- </div> -->
</center>

<div class="container-fluid">

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <a href="https://worachote.com/fl/Template-%E0%B9%83%E0%B8%AA%E0%B9%88%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%A1%E0%B8%B9%E0%B8%A5.xlsx"><strong>คลิกที่นี่!</strong></a> เพื่อดาว์นโหลดไฟล์.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

  <div class=".card-group">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list footable-loaded footable" data-page-size="10">
                <thead>
                  <tr>
                    <th class="footable-sortable">ลำดับ<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">username<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">Student ID<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">Email<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">Full Name<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">Password<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">Class<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">Room<span class="footable-sort-indicator"></span></th>
                  </tr>
                </thead>
                <tbody id="Result">



                </tbody>
              </table>
            </div>
            <div class="d-flex justify-content-end" id="acceptButton">
                    
                  </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>