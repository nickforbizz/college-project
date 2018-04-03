$(document).ready(function(){
  // alert(1)
  $("#updateStudInfo").click(function (){
    $.ajax({
        url:'pdfdoc.php',
        method:'post',
        data:$('form').serialize,
        dataType:'text',
    });


    $("#getReceipt").show();
    // return false;
    // event.preventDefault();
  })

})
