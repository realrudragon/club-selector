$(document).on('submit', '#formAdduser', function (e) {
    e.preventDefault();
    var userNameIN = document.getElementById("__username").value;
    var emailIN = document.getElementById("__email").value;
    var passwordIN = document.getElementById("__pass").value;
    var rePasswordIN = document.getElementById("__repass").value;
    var statusIN = document.getElementById("__status").value;
    var studentIDIN = document.getElementById("__studentId").value;
    var firstNameIN = document.getElementById("__firstName").value;
    var lastNameIN = document.getElementById("__lastName").value;
    var classIN = document.getElementById("__class").value;
    var roomIN = document.getElementById("__room").value;

    if(userNameIN == "" || emailIN == "" || passwordIN == "" || rePasswordIN == "" || statusIN == "" || studentIDIN == "" || firstNameIN == "" || lastNameIN == "" || classIN == "" || roomIN == ""){
      Swal.fire({
        title: 'Error!',
        text: 'กรุณากรอกข้อมูลให้ครบถ้วน',
        icon: 'error',
      })
    }else{
      $.ajax({
        url: burl() + 'user/api/user/user_register',
        method: 'POST',
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        data: {
            'username' : userNameIN,
            'email' : emailIN,
            'password' : passwordIN,
            'repassword' : rePasswordIN,
            'status' : statusIN,
            'studentID' : studentIDIN,
            'firstname' : firstNameIN,
            'lastname' : lastNameIN,
            'class' : classIN,
            'room' : roomIN,

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