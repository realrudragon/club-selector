$(document).ready( function ()
{
	$('#example').DataTable();
});
var table = $('#example').DataTable({
	//"bPaginate": false, /* ลำดับหน้า //true //false */
	//"bInfo": false, /* จำนวนแสดงรายการรายการ //true //false */
	//"bFilter": false, /* ค้นหา //true //false */
	//"bLengthChange": false, /* จำนวนแสดง //true //false */
	//"pageLength": 5  /* จำนวนแสดง */
	//scrollY: 300, /* กำหนดความสูงการแสดงผล */
});

$(document).ready(function()
{
	var table = $('#example').DataTable({

		//"bPaginate": false, /* ลำดับหน้า //true //false */
		//"bInfo": false, /* จำนวนแสดงรายการรายการ //true //false */
		//"bFilter": false, /* ค้นหา //true //false */
		//"bLengthChange": false, /* จำนวนแสดง //true //false */
		//"pageLength": 5  /* จำนวนแสดง */
		//scrollY: 300, /* กำหนดความสูงการแสดงผล */

		lengthChange: false,
		buttons: [
			{
				text: 'คัดลอก',
        extend: 'copy',
      },
			{
				text: 'เอ็กเซล',
				title: 'Data export',
        extend: 'excel',
				autoFilter: true,
        sheetName: 'Exported data เอ็กเซล',
				messageBottom: null
      },
			{
				text: '<i class="fa fa-file-pdf-o"></i>',
				title: 'Data export',
        extend: 'pdf',
				messageBottom: null
      },
			{
				text: 'ปริ้น',
				title: 'Data export',
				messageTop: 'This print was produced using the Print button for DataTables',
        extend: 'print',
				autoPrint: true, //true //false
				messageBottom: null
      },
			{
				text: 'คัดกรอง',
        extend: 'colvis',
      },
		]

	});

	table.buttons().container()
	.appendTo( '#example_wrapper .col-md-6:eq(0)' );

});
