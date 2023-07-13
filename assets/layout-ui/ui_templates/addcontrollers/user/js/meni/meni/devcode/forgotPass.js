$(document).on('submit', '#forgotPasswordForm', function (e) {
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
    }
  });