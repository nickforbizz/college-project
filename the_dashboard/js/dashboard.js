
function delete_course(a) {
   alert(a);
}
function edit_course(a) {
  document.getElementById('editing_course').style.display='block';
}
function enable_submit_defer_continue() {
  var defer_continue = $("#deferContinue option:selected").val();
  if (defer_continue.length < 1) {
    alert ("select Option")
  }else {
      $(".cont_deff").removeAttr('disabled')
  }
}
function enableAmt(){
  var sem = $("#semgender option:selected").val();
  if (sem.length < 1) {
    alert ("select Gender")
  }else {
    return true;
  }

}
function assign() {
  var div = document.getElementById('id');
  div.innerHTML = div.innerHTML
}
function w3_open() {
  document.getElementById("alterContainer").style.marginLeft = "25%";
  document.getElementById("mySidenav").style.width = "25%";
  document.getElementById("mySidenav").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("alterContainer").style.marginLeft = "0%";
  document.getElementById("mySidenav").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
function myFunction(id) {
  // $("#"hidden_"+id").slideDown();
  var x = document.getElementById("hidden_"+id);
  var y = document.getElementById("full_acc_"+id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        // x.previousElementSibling.className += " w3-red";
    } else {
        x.className = x.className.replace(" w3-show", "");
        y.className ='w3-blue';
        y.className.replace(" w3-red", "");
    }
}
function editthisRow(field_id, id) {

  $("#details_"+id+"_"+field_id).fadeOut()
  $("#details_hidden_"+id+"_"+field_id).fadeIn()

    // var hide = document.getElementById(a).style.display = 'none';
    //   hide.onclick(document.getElementById('id' + a).style.display = 'block');
  // var closeForm = document.getElementById('closeForm' + a);
  // closeForm.onClick(document.getElementById('form' + a).style.display = 'none'
  //                   )
}
function hideform(field_id, id) {

  $("#details_hidden_"+id+"_"+field_id).fadeOut()
  $("#details_"+id+"_"+field_id).fadeIn()

  }

  function update_data(c) {
        document.getElementById('dbres').style.display='block'
        $("#form-submit_"+c).on("submit", function (e) {
              e.preventDefault();
              alert()
              $.ajax({
                  url:'update_student.php',
                  data:$("#form-submit_"+c).serialize(),
                  dataType:'text',
                  method:'post',
                  success: function (msg) {
                    alert(msg);
                    $("#info").html(msg);
                  },
                  error:function () {
                    alert("Error Occured")
                  }
              })
        })
      }

$(document).ready(function () {
  var windowWidth= (window.innerWidth/3)-50 +'px';
  var windowHeight = window.innerHeight;
$(".changinged").click(function (e) {
  e.preventDefault();
  $.ajax({
    url:"update_student.php",
    data:$("#delete-row").serialize(),
    dataType:'text',
    method:'post',
    success: function (msg) {
      // $("#info").html(msg);
      alert(msg);
    },
    error:function () {
      alert("Error Occured")
    }
  })
} )
  $(".load_results").load(function () {
    alert("loaded");
    $("#enrollStudRes").show();

  })



  $(".del").click(function () {
    $(".deleting").fadeIn();
    $(".closebtn").click(function () {
      $(".deleting").fadeOut();
    })
  })


      // $("h2").next().css({"color": "red", "border": "2px solid red"});
          // $("#spanii").parentsUntil("div").css({"color": "red", "border": "2px solid red"});


})
