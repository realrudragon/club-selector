
// JavaScript for label effects only
$(window).load(function(){
    // $(".col-3 input").val("");
    
    $(".input-effect input").focusout(function(){
        if($(this).val() != ""){
            $(this).addClass("has-content");
        }else{
            $(this).removeClass("has-content");
        }
    })
});


function getClubs(club) {
    var myHeaders = new Headers();
    myHeaders.append("Cookie", "PreFix_LangUage_LaNg=th; ci_session=lvuol89u87uu08oudu1hs5dm57i8fb5f");
    
    var requestOptions = {
      method: 'GET',
      headers: myHeaders,
      redirect: 'follow'
    };
     
    fetch(burl() + "api/meni/api/list_club?class=" + club, requestOptions)
      .then(response => response.text())
      .then(result => {
        // console.log(result);
        var obj = JSON.parse(result);
        // console.log(obj);
        
      })
      .catch(error => console.log('error', error));


}