$(document).on('submit', '#Formpostclub', function (e) {
    e.preventDefault();
    var userCode = document.getElementById("userCode").value;
    var clubCode = document.getElementById("clubCode").value;
    var userFullName = document.getElementById("userFullName").value;
    if(userCode == "" || userCode == null || userCode == undefined){
        window.location.href = burl + "logout";
    }
    if(clubCode == 0){
      Swal.fire({
        title: 'Error!',
        text: 'กรุณาเลือกชุมนุม',
        icon: 'error',
      })
    }else{
      $.ajax({
        url: burl() + 'api/postClub',
        method: 'POST',
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        data: {
          'userCode': userCode,
          'clubCode': clubCode,
          'userFullName': userFullName,
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
              window.location.href = burl()+"user/club";
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