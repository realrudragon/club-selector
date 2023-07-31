function appoveClub(clubID){

    Swal.fire({
      title: 'Are you sure?',
      text: "คุณต้องการอนุมัติชุมนุมนี้ไหม!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'ยืนยัน!',
      cancelButtonText: 'ยกเลิก!',
    //   reverseButtons: true
    }).then((result) => {
        // console.log(result);
      if (result.value == true) {
        $.ajax({
            url: burl() + 'api/backdoor/club/update/status',
            method: 'POST',
            headers: {
              "Content-Type": "application/x-www-form-urlencoded",
            },
            data: {
                'clubId' : clubID,
                'status' : '1'
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


      } else if (
        result.dismiss === Swal.DismissReason.cancel
      ) {
        Swal.fire(
          'Cancelled',
          'คุณยกเลิกแล้ว :)',
          'error'
        )
      }
    })
  }

function denyClub(clubID){

    Swal.fire({
      title: 'Are you sure?',
      text: "คุณต้องการไม่อนุมัติชุมนุมนี้ไหม!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'ยืนยัน!',
      cancelButtonText: 'ยกเลิก!',
    //   reverseButtons: true
    }).then((result) => {
        // console.log(result);
      if (result.value == true) {
        $.ajax({
            url: burl() + 'api/backdoor/club/update/status',
            method: 'POST',
            headers: {
              "Content-Type": "application/x-www-form-urlencoded",
            },
            data: {
                'clubId' : clubID,
                'status' : '3'
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


      } else if (
        result.dismiss === Swal.DismissReason.cancel
      ) {
        Swal.fire(
          'Cancelled',
          'คุณยกเลิกแล้ว :)',
          'error'
        )
      }
    })
  }

  function delUser(clubID){

    Swal.fire({
      title: 'Are you sure?',
      text: "คุณต้องการไม่อนุมัติชุมนุมนี้ไหม!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'ยืนยัน!',
      cancelButtonText: 'ยกเลิก!',
    //   reverseButtons: true
    }).then((result) => {
        // console.log(result);
      if (result.value == true) {
        $.ajax({
            url: burl() + 'api/backdoor/club/update/status',
            method: 'POST',
            headers: {
              "Content-Type": "application/x-www-form-urlencoded",
            },
            data: {
                'clubId' : clubID,
                'status' : '3'
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


      } else if (
        result.dismiss === Swal.DismissReason.cancel
      ) {
        Swal.fire(
          'Cancelled',
          'คุณยกเลิกแล้ว :)',
          'error'
        )
      }
    })
  }
