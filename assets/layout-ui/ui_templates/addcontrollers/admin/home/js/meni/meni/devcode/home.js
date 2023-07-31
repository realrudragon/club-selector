function update_status_club(){
    var status = document.getElementById("statusClub").value;
    if(status || status === ''){
        $.ajax({
            url: burl() + 'api/backdoor/club/status',
            method: 'POST',
            headers: {
              "Content-Type": "application/x-www-form-urlencoded",
            },
            data: { 
                'status' : status,
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
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'You must select a status!',
        })
    }
}