<?php
require 'php/conn.php';
include("./../../folder_login/auth.php"); //include auth.php file on all secure pages
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>QWERTY Dashboard</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Startmin</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="index.php"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i>Comments
                                        <span class="pull-right text-muted small"> <span id="timeComment"></span> minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> Students
                                        <span class="pull-right text-muted small" id="noofstuds"></span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> Notices
                                        <span class="pull-right text-muted small" id="noofnotices"></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Courses
                                        <span class="pull-right text-muted small" id="noofcourses"></span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> User <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION['username']; ?></a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="./../../folder_login/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                              <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Students<span class="fa arrow"></span></a>
                              <ul class="nav nav-second-level">
                                <li>
                                    <a href="enroll.html">Ennroll students</a>
                                </li>
                                <li>
                                    <a href="./enrollStudents.php">Edit Student Details</a>
                                </li>
                                <li>
                                    <a href="feestatements.php">Fees Statements</a>
                                </li>
                                <li>
                                    <a href="finance.php">Finance</a>
                                </li>
                              </ul>
                                <li>
                                    <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                                </li>
                                <li>
                                    <a href="courses.php"><i class="fa fa-edit fa-fw"></i> Courses</a>
                                </li>
                                <li>
                                    <a href="notices.html"><i class="fa fa-edit fa-fw"></i> Notices</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-wrench fa-fw"></i> Set Basic Info<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="panels-wells.html">Add Fulculties</a>
                                        </li>

                                        <li>
                                            <a href="users.html">USERS</a>
                                        </li>

                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                <!-- /.nav-second-level -->
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>


            <div id="page-wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <h1 class="page-header">Edit Students Details</h1>
                  </div>
                  <!-- /.col-lg-12 -->
              </div>
              <div class="row">   <!-- STUDENTS EDITION -->


          <style media="screen">
          .details{
          margin: auto;
          }
          </style>


          <body id="body">
          <div id="mainContainer">
          <div id="alterContainer" class="w3-container w3-teakl">
          <!-- About Section -->
          <div id="about-section">
          <div class="container">


          <div class="">
          <div id="dbres" class="w3-modal" style="display:none;z-index:2227">
          <div class="w3-modal-content w3-animate-top w3-card-8">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('dbres').style.display='none'"
                class="w3-closebtn">&times;</span>
                <h2 class="text-center">Qwerty College</h2>
            </header>
            <div class="w3-container" id="info">

            </div>
            <footer class="w3-container w3-teal">
              <p class="text-center"> The Education You Want. The Attention You Deserve</p>
            </footer>
          </div>
          </div>
          <!-- end of dbres modal class -->
          </div>
          <div class="jumbotrohn row text-center" id="student-list">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h3>Alter Student List</h3>
          </div>
          <div class="">

               <div class="w3-accordion">
                 <div class="row show-grid w3-grey w3-text-light-blue" style="margin:0">

                 </div>
               </div>



                <!-- End of Hidden Stuff -->




            </div>
          </div>
          </div>
          </div> <br><br>

          <!-- end of Total fee -->
          <div class="col-lg-12">
          <div class="panel panel-default">
           <div class="panel-heading">
               Students Editing Session
           </div>
           <!-- .panel-heading -->
           <div class="panel-body">
             <?php
             require './php/conn.php';
             $getnames1 = $conn->query("SELECT * FROM students");
             $y = 1; $u = 1;
             while ($a = $getnames1->fetch_assoc()) {
               #php loop continues in another area
               ?>
               <div class="panel-group" id="accordion">

                   <div class="panel panel-default">
                       <div class="panel-heading">
                           <div class="panel-title">
                               <div data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="padding:20px">
                                 <div class="w3-grey"  onclick="myFunction('<?php echo $a['id'] ?>')" id="full_acc_<?php echo $y; ?>">
                                   <div class="col-md-4"> Click To Edit
                                       <span class="" > <?php echo $a['fname'].' '.$a['lname']; ?> </span>
                                   </div>
                                   <div class="col-md-4"> Reg No:
                                       <span class="" > <?php echo $a['regnumber'].''; ?> </span>
                                   </div>
                                   <div class="col-md-4">Trash Record:
                                     <span class="fa fa-trash" title="Delete"></span>
                                   </div> <div class="" style=""></div>
                                 </div>
                               </div>
                           </div>
                       </div>
                       <div id="collapseTwo" class="panel-collapse collapse">
                           <div class="panel-body">
                             <div id="hidden_<?php echo $a['id'] ?>" class="w3-accordion-content w3-container" style="color:black;">
                                <p class="well4student-details list headlist"><span class="span1">Key</span> <span class="span2">Value</span><span class="span3">Edit</span> </p>

                                <?php $fields=[
                                  [1,"Names","Name",$a['fname']."".$a['lname']],
                                  [2,"Regno","Course", $a['courses']],
                                  [4,"Telephone","Telephone", $a['telephone']],
                                  [5,"Religion","Religion", $a['religion']],
                                  [6,"Email","Email", $a['email']],
                                  [7,"constituency","constituency", $a['constituency']],
                                  [8,"Town","Town", $a['town']],

                                ];?>

                                <?php foreach ($fields as $key =>$value ): ?>
                                  <?php
                                  $field_id=$value[0];
                                  $field_title=$value[1];
                                  $field_name=$value[2];
                                  $field_value=$value[3];
                                   ?>
                                  <!-- Start of one item -->
                                  <div class="well4student-details list">
                                    <span class="span1"><?php echo $field_title?></span>
                                    <span id="details_<?php echo $a['national_id']?>_<?php echo $field_id; ?>" >
                                          <span class="span2"><?php echo $field_value; ?> </span>
                                          <span class="fa fa-edit edit " onclick="editthisRow('<?php echo $field_id; ?>','<?php echo $a['national_id']  ?>')" id="<?php echo $a['fname']?>" title="edit"></span>
                                    </span>
                                    <span> <?php $a['created_at']  ?> </span>

                                     <div id="details_hidden_<?php echo $a['national_id']  ?>_<?php echo $field_id; ?>" class="rowl" style="display:none;">
                                       <div class="col-s" id="<?php echo 'close'.$a['national_id']  ?>">
                                       <form id="form-submit_<?php echo $field_value; ?>" method="post">
                                           <input type="text" class="input-sm" id="name1" name="<?php echo $field_name?>"  placeholder="<?php echo $field_name  ?>" required>
                                           <?php if ($field_id == 1) {
                                                    echo  '<input class="input-sm" type="text" name="lastname" placeholder="'.$a['lname'].' ">';
                                            } ?>
                                            <input type="hidden" name="reg" value="<?php echo $a['regnumber']  ?>">
                                           <input type="submit" class="input-sm" name="send" value="update" onclick="update_data('<?php echo $field_value; ?>');">
                                           <button  type="button" class="btn-sm" onclick="hideform('<?php echo $field_id; ?>','<?php echo $a['national_id']  ?>')">&times;</button>
                                         </form>
                                         </div>
                                      </div>
                                   </div>
                                  <!-- End of One Item -->


                                <?php endforeach; ?>


                            </div>
                           </div>
                       </div>
                   </div>
                   <?php $y++ ; $u++;} ?>

               </div>
           </div>
           <!-- .panel-body -->
          </div>
          <!-- /.panel -->
          </div>
          <!-- /.col-lg-12                    end of accordion  -->
          <!-- Defer Continue students -->
          <div class="jumbotron row" id="Deffer">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h3>Deffer Continue Students Here</h3>

          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4 class="text-center" style="color:#ff1a1a;">Once Student Appears Click To Deffer or Continue. </h4>
          </div>

          <div class="">
            <h5>Enter Student Reg Number For him to apper.</h5>
            <form class="form-horizontal" id="get_stud_state" method="get">
              <div class="form-group">
                <input class="btn-lg" type="text" id="reval" name="getstudState" placeholder="Type Reg Number">
                <input class="btn-lg btn-success" type="submit" name="submit_getstudState" value="Get Stud">
              </div>
            </form>
          </div>
          <div class="table-responsive">
          <table class="table">
            <thead class="w3-light-blue w3-border-black w3-border-bottom">
              <tr>
                <td>Reg Number</td>
                <td>Student</td>
                <td>State</td>
                <td>Year/Sem</td>
              </tr>
            </thead>
            <tbody id="deffer_res"  >

            </tbody>
          </table>

            <!-- Modal -->
            <div style="display: none;" class="modal fade" id="myModal" style="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">CHANGE STUDENT STATE</h4>
            </div>
            <div class="modal-body" style="background:#f5ebed !important">

              <div class="container row">
                <h2>Select To Declare Student State</h2>
                <form role="form" id="deffer_c">
                  <label class="">Student</label> <br>
                  <div id="details">

                  </div>


              </div>



            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary"  name="submit_defer_continue" id="submitdefcont" disabled>Save changes</button>
          </form>
            </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

          </div>
          </div>
          </div>



          <div class="jumbotron row" id="units">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2 class="text-center shadow"><i>Add Or Remove Courses</i></h2>
          <div class="table-responsive">
          <table class="table">
          <thead class="w3-border-black w3-border-bottom w3-light-blue">
            <tr>
              <td>ID</td>
              <td>corses</td>
              <td>Duration</td>
              <td>Edit</td>
              <td>Delete</td>
            </tr>
          </thead>

            <?php
                $getCourses =  $conn->query("SELECT * FROM courses");
                while ($a = $getCourses->fetch_assoc() ) {  ?>
                  <tbody>
                  <tr>
                            <td><?php echo $a['id'] ?></td>
                            <td><?php echo $a['name'] ?></td>
                            <td><?php echo $a['duration'] ?></td>
                         <td><span class='fa fa-edit edit' onclick='edit_course("<?php echo $a['name'] ?>")' title='edit'></span></td>
                         <td><span class='fa fa-trash edit' onclick='delete_course("<?php echo $a['name'] ?>")' title='edit'></span></td>
                     </tr>
                 </tbody>
               <?php  } ?>
          </table>
          </div>
          <!-- modal for editing  -->
          <div id="editing_course" class="w3-modal" style="z-index:9222">
            <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="margin:10%;">

              <div class="w3-center"><br>
                <span onclick="document.getElementById('editing_course').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
                <!-- <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top"> -->
              </div>

              <form class="w3-container" method="post">
                <div class="w3-section">
                  <label><b>Course Name</b></label>
                  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Coursename" name="crse_name" required>

                  <label><b>Duration</b></label>
                  <input class="w3-input w3-border" type="number" placeholder="Enter Duration" name="course_duration" required>

                  <button class="w3-btn-block w3-green w3-section w3-padding" type="submit">Update</button>
                  <!-- <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me -->
                </div>
              </form>

              <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <button onclick="document.getElementById('editing_course').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
              </div>

            </div>
          </div>

          <div class="container">
              <div class="w3-card-4">

              <div class="w3-container w3-green">
                <h2>Add Course</h2>
              </div> <br>

              <form class="w3-container" method="post" id="add_course">

              <p>
              <input class="w3-input" name="course_name" type="text">
              <div>Course Name</div></p>

              <p>
              <input class="w3-input" name="course_duration" type="number">
              <div>Course Duration</div></p>
              <div style="float:right;margin-right:10%;margin-bottom:15px">
              <input type="submit" class="input-lg" name="submit_add_course" value="Add">
            </div> <br> <br>
              </form>

              </div>
          </div>
          </div> <br> <br>


          </div>
          </div>
          </div>
          </div>
          </div>

          <!-- /#page-wrapper -->

      </div>
      <!-- /#wrapper -->

      <!-- jQuery -->
      <script src="../js/jquery.min.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="../js/bootstrap.min.js"></script>

      <!-- Metis Menu Plugin JavaScript -->
      <script src="../js/metisMenu.min.js"></script>

      <!-- Custom Theme JavaScript -->
      <script src="../js/startmin.js"></script>
      <script src="../js/Dashboard.js"></script>

      <!-- New js  -->

      <!-- <script type="text/javascript" src="js/jquery.1.11.1.js"></script> -->
      <!-- <script type="text/javascript" src="../../js/dashboard.js"></script> -->

      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <!-- <script type="text/javascript" src="js/bootstrap.js"></script> -->

      <!-- End new js -->

      <script type="text/javascript">
      $(document).ready(function () {
        $("#get_stud_state").submit(function (e) {
          e.preventDefault()
          deffer_cont()
        })

        $("#deffer_c").submit(function (e) {
          e.preventDefault()
          deffer_cont_submit()
        })


      })
      students = []
      function deffer_cont() {

        $.ajax({
          url:'./php/deffer_continue.php',
          method:"post",
          data:$("#get_stud_state").serialize(),
          type:"text",
          success:function (data) {
            // $("#deffer_res").html(data);

            data = JSON.parse(data);
            console.log(data);
            if (data.length == 0) {
              alert("   STUDENT WAS NOT FOUND IN THE DATABASE \n  Try Enrolling him/her")
            }
            $.each(data, function (i,val) {
              students[""+val.reg_no]=val
              $("#deffer_res").append('<tr style="cursor:pointer;" onclick="view('+val.reg_no+')" >'
              +'<td>'+val.reg_no+'</td>'
              +'<td>'+val.name+'</td>'
              +'<td>'+val.state+'</td>'
              +'<td>Yr/sem</td>'
              +'</tr>'


            )

            })
          },error:function (e) {
            console.error(e);
          }
        })

      }
      var currentstudent=0
      function view(id) {
      currentstudent=id
      $("#myModal").modal()

      data=students[id]
      $("#details").html("Name : "+data.name
      +'<div class="col-md-6 col-xs-6" >'
      +'<br>  REG no : '+ data.reg_no
      +'<br>  State : '+ data.state
      +'</div>'
      +'<div class="col-md-6 col-xs-6">'
      + '<input type="hidden" name="regsend" value="'+data.reg_no+'">'
      +  '<select class=" btn-lg md-select"  id="deferContinue" name="deferContinue" onchange="enable_submit_defer_continue()">'
          +'<option disabled selected>Defer/Continue</option>'
          +'<option value="DEFFERED">Defer</option>'
          +'<option value="CONTINUING">Continue</option>'
        +'</select>'
        +'</div>'
      )

      }

      function deffer_cont_submit() {

        $.ajax({
          url:'./php/deffer_continue_alter.php',
          method:"post",
          data:$("#deffer_c").serialize(),
          type:"text",
          success:function (data) {
            alert(data);
            // $("#dumpreg").html(data);
            // console.log(data);
          },error:function (e) {
            alert(e);
          }
        })
        // $("#myModal").fadeOut(50000);
      }

      function enable_submit_defer_continue(){
        var deffer = $("#deferContinue option:selected").val();
        if (deffer.length < 1) {
          alert ("select Deffer or Continue")
        }else {
            $(" #submitdefcont").removeAttr('disabled')
        }

      }

      </script>

  </body>
</html>
