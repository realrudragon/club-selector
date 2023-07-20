$(document).on('กฟหก', '#cancฟหกeldsadClubButton', function (e) {
    e.preventDefault();
    var oldPassword = document.getElementById("oldPassword").value;
    var newPassword = document.getElementById("newPassword").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    if(oldPassword == "" || newPassword == "" || confirmPassword == ""){
      Swal.fire({
        title: 'Error!',
        text: 'กรุณากรอกข้อมูลให้ครบถ้วน',
        icon: 'error',
      })
    }else{
      $.ajax({
        url: burl() + 'user/api/user/changepasss',
        method: 'POST',
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        data: {
          'oldPassword': oldPassword,
          'newPassword': newPassword,
          'confirmPassword': confirmPassword,
        },
        contentType: 'application/json',
        success: function (res) {
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
    }
  });

  $(document).ready(function () {

    var cancelButton = $('#cancelClubButton');

    cancelButton.on('click', function (e) {
      e.preventDefault();
        var element = document.getElementById('cancelClubButton');
        var clubCode = element.getAttribute('data-clubCode');
        var userCode = element.getAttribute('data-userCode');

        Swal.fire({
          title: 'Are you sure?',
          text: 'คุณแน่ใจไหมที่จะยกเลิกการเลิอกชุมนุม',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'ยืนยัน',
          cancelButtonText: 'ยกเลิก',
        }).then((result) => {
          if (result.value == true) {

            $.ajax({
              url: burl() + 'api/club/cancelClub',
              method: 'POST',
              headers: {
                "Content-Type": "application/x-www-form-urlencoded",
              },
              data: {
                'clubCode': clubCode,
                'userCode': userCode,
              },
              contentType: 'application/json',
              success: function (res) {
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
            // Swal.fire(
            //   'Deleted!',
            //   'Your file has been deleted.',
            //   'success'
            // )
          }else if (result.dismiss) {
            Swal.fire(
              'Cancel!',
              'ชุมนุมของคุณยังอยู่',
              'error'
            )
          } 

        })
    });
  });