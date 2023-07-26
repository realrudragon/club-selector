 function delUser(userID){

    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
    //   reverseButtons: true
    }).then((result) => {
        // console.log(result);
      if (result.value == true) {
        $.ajax({
            url: burl() + 'api/backdoor/user/delete',
            method: 'POST',
            headers: {
              "Content-Type": "application/x-www-form-urlencoded",
            },
            data: {
                'user_id' : userID,
    
            },
            contentType: 'application/json',
            success: function (res) {
            //   console.log(res.status);
              if (res.status === 'true') { 
                Swal.fire({
                  title: 'Success!',
                  text: res.message,
                  icon: 'success',
                  timer: 2000,
                  timerProgressBar: true,
                }).then((result) => {
                  window.location.href = burl() + "backdoor/user";
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


      } else if (
        result.dismiss === Swal.DismissReason.cancel
      ) {
        Swal.fire(
          'Cancelled',
          'คุณยกเลิกการลบผู้ใช้แล้ว :)',
          'error'
        )
      }
    })
  }

  function detailUser(userID){
    $.ajax({
        url: burl() + 'api/backdoor/user/detail',
        method: 'POST',
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        data: {
            'user_id' : userID,

        },
        contentType: 'application/json',
        success: function (res) {
            // console.log(res);
            if (res.status === 'true') { 
                document.getElementById("userName").value = res.data.username;
                document.getElementById("studentID").value = res.data.studentID;
                document.getElementById("firstName").value = res.data.firstname
                document.getElementById("lastName").value = res.data.lastname
                document.getElementById("email").value = res.data.email
                document.getElementById("class").value = res.data.class
                document.getElementById("room").value = res.data.room
                document.getElementById("userID").value = userID
                
                const selectStatus = document.getElementById('status');
            
                for (let i = 0; i < selectStatus.options.length; i++) {
                  if (selectStatus.options[i].value === res.data.status) {
                    selectStatus.selectedIndex = i;
                    break; 
                  }
                }

                const selectRole = document.getElementById('role');
            
                for (let i = 0; i < selectRole.options.length; i++) {
                  if (selectRole.options[i].value === res.data.role) {
                    selectRole.selectedIndex = i;
                    break; 
                  }
                }
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

function editUser(){
var userNameIN  = document.getElementById("userName").value;
var studentIDIN = document.getElementById("studentID").value;
var firstNameIN = document.getElementById("firstName").value
var lastNameIN = document.getElementById("lastName").value
var emailIN = document.getElementById("email").value
var classIN = document.getElementById("class").value
var roomIN = document.getElementById("room").value
var statusIN = document.getElementById("status").value
var roleIN = document.getElementById("role").value
var userID = document.getElementById("userID").value

if(userNameIN == "" || emailIN == "" || statusIN == "" || studentIDIN == "" || firstNameIN == "" || lastNameIN == "" || classIN == "" || roomIN == "" || roleIN == "" || userID == ""){
    Swal.fire({
    title: 'Error!',
    text: 'กรุณากรอกข้อมูลให้ครบถ้วน',
    icon: 'error',
    })
}else{
  $.ajax({
    url: burl() + 'api/backdoor/user/update',
    method: 'POST',
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    data: {
      'userid' : userID,
      'username' : userNameIN,
      'email' : emailIN,
      'status' : statusIN,
      'studentID' : studentIDIN,
      'firstname' : firstNameIN,
      'lastname' : lastNameIN,
      'class' : classIN,
      'room' : roomIN,
      'role' : roleIN,
    },
    contentType: 'application/json',
    success: function (res) {
    //   console.log(res.status);
      if (res.status === 'true') { 
        Swal.fire({
          title: 'Success!',
          text: res.message,
          icon: 'success',
          timer: 2000,
          timerProgressBar: true,
        }).then((result) => {
          window.location.href = burl() + "backdoor/user";
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
}
