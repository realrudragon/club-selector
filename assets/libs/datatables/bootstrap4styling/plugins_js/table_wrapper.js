$(document).ready(function()
{
	var tablevidrow = $('#table_wrapper').DataTable({
		//"bPaginate": false, /* ลำดับหน้า //true //false */
		//"bInfo": false, /* จำนวนแสดงรายการรายการ //true //false */
		//"bFilter": false, /* ค้นหา //true //false */
		"bLengthChange": false, /* จำนวนแสดง //true //false */
		//"pageLength": 5, /* จำนวนแสดง */
		//scrollY: 300, /* กำหนดความสูงการแสดงผล */
    "language":
    {
      "decimal":        "",
      "emptyTable":     "No data available in table",
      "info":           "Showing _START_ to _END_ of _TOTAL_ entries",
      "infoEmpty":      "Showing 0 to 0 of 0 entries",
      "infoFiltered":   "(filtered from _MAX_ total entries)",
      "infoPostFix":    "",
      "thousands":      ",",
      "lengthMenu":     "Show _MENU_ entries",
      "loadingRecords": "Loading...",
      "processing":     "Processing...",
      "search":         "Search:",
      "zeroRecords":    "ไม่พบระเบียนที่ตรงกัน / No matching records found",
      "paginate":
      {
        "first":      "First",
        "last":       "Last",
        "next":       "Next",
        "previous":   "Previous"
      },
      "aria":
      {
        "sortAscending":  ": activate to sort column ascending",
        "sortDescending": ": activate to sort column descending"
      }
    },
		buttons: [
			{
				text: 'Copy',
				// text: 'คัดลอก',
        extend: 'copy',
      },
			{
				text: 'Excel',
				// text: 'เอ็กเซล',
				title: 'Data export',
        extend: 'excel',
				autoFilter: true,
        sheetName: 'Exported data เอ็กเซล',
				messageBottom: null
      },
			{
				text: 'PDF',
				title: 'Data export',
        extend: 'pdf',
				messageBottom: null
      },
			{
				text: 'Print',
				// text: 'ปริ้น',
				title: 'Data export',
				messageTop: 'This print was produced using the Print button for DataTables',
        extend: 'print',
				autoPrint: true, //true //false
				messageBottom: null
      },
			{
				text: 'Column visibility',
				// text: 'คัดกรอง',
        extend: 'colvis',
      },
		],
	});
	tablevidrow.buttons().container()
	.appendTo( '#table_wrapper .col-md-6:eq(0)');
});
