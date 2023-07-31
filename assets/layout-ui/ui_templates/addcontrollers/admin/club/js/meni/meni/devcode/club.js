function delUser(clubId){
var userCode = document.getElementById("userCode").value;
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
            url: burl() + 'api/backdoor/club/delete',
            method: 'POST',
            headers: {
              "Content-Type": "application/x-www-form-urlencoded",
            },
            data: { 
                'userCode' : userCode,
                'clubId' : clubId,
    
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
                  window.location.href = burl() + "backdoor/club";
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
          'คุณยกเลิกการลบชุมนุมแล้ว :)',
          'error'
        )
      }
    })
  }