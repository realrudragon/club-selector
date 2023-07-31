function uploadExcel() {
  const fileInput = document.getElementById('fileInput');
  const file = fileInput.files[0];
  if (!file) {
Swal.fire({
  title: 'Error!',
  text: 'กรุณาเลือกไฟล์',
  icon: 'error',
})
    return;
  }

  const reader = new FileReader();

  reader.onload = function (e) {
    const data = e.target.result;
    const workbook = XLSX.read(data, { type: 'binary' });
    const firstSheetName = workbook.SheetNames[0];
    const worksheet = workbook.Sheets[firstSheetName];

    // Convert the worksheet data to an array of objects
    const records = XLSX.utils.sheet_to_json(worksheet, { header: 1 });
// console.log(records);

document.getElementById("Result").innerHTML = '';
//  console.log(records[42])
var count = 0;
for (let i = 2; i < records.length; i++) {
  // console.log(i);
  count = count + 1;
  document.getElementById("Result").innerHTML += (`
<tr class="footable-even" style="">
<td><span class="footable-toggle"></span>`+ count +`</td>
<td>
 `+ records[i][0] +`
</td>
<td>`+ records[i][1] +`</td>
<td>`+ records[i][2] +`</td>
<td>`+ records[i][3] + ' ' + records[i][4] + `</td>
<td>`+ records[i][5] +`</td>
<td>`+ records[i][6] +`</td>
<td>`+ records[i][7] +`</td>
</tr>
`);
}

document.getElementById("acceptButton").innerHTML = `
<button type="button" id="appoveButton" class="btn btn-success">ยืนยันการเพิ่มข้อมูล</button>
`
const appoveButton = document.getElementById('appoveButton');
appoveButton.addEventListener('click', function() {

  // console.log( JSON.stringify(records));
  $.ajax({
    url: burl() + 'api/backdoor/user/add/excel',
    method: 'POST',
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    data: { data: JSON.stringify(records) },
    contentType: 'application/json',
    success: function (res) {
      console.log(res.status);
      if (res.status === 'true') { 
        Swal.fire({
          title: 'Success!',
          text: res.message,
          icon: 'success',
          timer: 2000,
          timerProgressBar: true,
        }).then((result) => {
          location.reload();
        })
          // window.location.href = "home";
      } else {
        if(res.code == "300"){
          window.location.href = "login";
        }else{
        Swal.fire({
          title: 'Error!',
          text: res.message,
          icon: 'error',
        })
      }
      }
    },

  }); 

});

  };
  reader.readAsBinaryString(file);
}
