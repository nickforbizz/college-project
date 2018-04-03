function admin_func() {
  alert("somer")
  document.getElementById('open_admin').style.display='block'
}
$(document).ready(function (){
  // alert("doc loaded");
  var windowWidth= window.innerWidth + 'px';
  var windowHeight = window.innerHeight;
    $("#body").css({'background-image':'url("../images/22.jpg")','background-height':windowWidth});
    // alert(1);
  // $("#getStudInfo").click(function (e){
    // e.preventDefault();
    //
    // $.ajax({
    //   url:'studDetails.php',
    //   method:'get',
    //   data:$('form').serialize,
    //   dataType:'json',
    //   success:function(strMsg){
          // $("#detailsId").json(strMsg);
  //
  //     }
  //   });
  // });
})

document.getElementById('body').style.backgroundSize = 'windowHeight windowWidth';
// document.getElementById('body').style.'background-width' = 'windowWidth';
// alert(windowWidth);
