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
                        <h1 class="page-header">Current Courses</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="text-center shadow"><i>Add Or Remove Courses</i></h3>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="table-responsive">
                                <table class="table">
                                  <thead class="w3-border-black w3-border-bottom w3-light-blue">
                                    <tr>
                                      <td>ID</td>
                                      <td>courses</td>
                                      <td>Duration</td>
                                      <td>Total Amount</td>

                                      <td>Edit</td>
                                      <td>Delete</td>
                                    </tr>
                                  </thead>
                                          <tbody id="dumpCorses">

                                         </tbody>

                                </table>
                              </div>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <form class="" id="edit_courseform" method="post">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title" id="myModalLabel">Change <span id="regg"></span> </h4>
                                          </div>

                                            <!-- Details  -->
                                            <div class="col-md-12"><br>

                                                  <label>Total Amount For The Course</label> <br>
                                                  <div class="form-group input-group ">
                                                    <span class="input-group-addon">@</span>
                                                    <input class="form-control"  type="number" placeholder="Enter Amount" name="course_totalamnt" min="0">
                                                  </div>
                                                  <label>Duration</label> <br>
                                                  <div class="form-group input-group ">
                                                    <span class="input-group-addon">@</span>
                                                    <input class="form-control"  type="number" placeholder="Enter Duration" name="course_duration" min="0">
                                                  </div>
                                              <!-- </form> -->


                                            </div>
                                            <!--  Details End-->

                                              <div class="modal-footer ">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                              </div>

                                          </form>
                                      </div>
                                      <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                              </div>
                              <!-- /.modal -->
                            </div>
                            <!-- /.panel-body -->
                        </div>

                        <!-- Add course  -->
                        <div class="" style="padding:15%">
                          <form class="" method="post" id="addcourse">
                            <div class="form-group">
                              <h3>Add Course Here</h3> <br> <br>
                              <label >Course Name</label>
                              <input class="form-control" type="text" name="cname" placeholder="Enter course"> <br>
                              <label >Course Type</label>
                              <select class="form-control" name="type">
                                <option disabled selected>Type of Course</option>
                                <option value="CERTIFICATE">CERTIFICATE</option>
                                <option value="DIPLOMA">DIPLOMA</option>
                                <option value="BACHELOR">BACHELOR</option>
                                <option value="MASTERS">MASTERS</option>
                                <option value="PHD">PHD</option>
                              </select> <br>
                              <label for="">Duration</label>
                              <input class="form-control" type="number" name="cduration" placeholder="Enter Durati0n"><br>
                              <label for="">Total Amount To Pay</label>
                              <input class="form-control" type="number" name="course_totalamnt" placeholder="Enter Amount"><br>
                              <button type="submit" style="float:right;margin-right:5%;padding-top:10px" class="btn-success btn-lg" name="csend">Save</button>

                              <p class="help-block text-center" style="padding-top:40px">Just Enter CourseName and Time it will take</p>
                            </div>
                          </form>

                        </div>


                        <div class="col-lg-12"><br> <br>
                          <div class="panel panel-default">

                              <div class="panel-heading">
                                  Add corse descrition for <b></b>
                              </div>
                              <!-- /.panel-heading -->
                              <div class="panel-body">
                                  <div class="">
                                    <div class="row">
                                        <div class="form-group">
                                          <div class="" id="dumptextArea">

                                          </div>



                                          </div>
                                     </div>
                                  </div>
                              </div> <br><br>

                              <!-- /.panel-body -->
                          </div>
                          <!-- /.panel -->
                      </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->

                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
        <div class="">
          <form class="" method="post" id="formdel">
            <input type="hidden" name="iddel" value="">
          </form>

        </div>
        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>
        <script type="text/javascript" src="../../js/dashboard.js"></script>

        <!-- Flot Charts JavaScript -->
        <!-- <script src="../js/flot/excanvas.min.js"></script>
        <script src="../js/flot/jquery.flot.js"></script>
        <script src="../js/flot/jquery.flot.pie.js"></script>
        <script src="../js/flot/jquery.flot.resize.js"></script>
        <script src="../js/flot/jquery.flot.time.js"></script>
        <script src="../js/flot/jquery.flot.tooltip.min.js"></script>
        <script src="../js/flot-data.js"></script> -->

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
        <script type="text/javascript">
          $(document).ready(function () {
              getCourse();
              $("#edit_courseform").submit(function (e) {
                e.preventDefault();
                edit_courseFunc();
              })

                // c_descriptionFunc();

              $("#addcourse").submit(function (e) {
                e.preventDefault();
                addCourse_func();
              })
          })
          function c_descriptionFunc(id) {
            $("#c_description"+id).submit(function (e) {
              e.preventDefault();

            $.ajax({
              url:'php/insertCourseDesc.php',
              method:'post',
              data:$("#c_description"+id).serialize(),
              success:function (data) {
                console.log(data);
              },
              error:function (data) {
                alert(data);
              }

            })
          })
          }
          course = [];
          function getCourse() {
            $.ajax({
              url: 'php/getcourses.php',
              method:'post',
              type: 'json',
              data:'',
              success:function (data) {
                data = JSON.parse(data);
                $.each(data, function (i, val) {
                  course[""+val.id]=val
                  $("#dumpCorses").append('<tr style="cursor:pointer;"  class="odd gradeX">'
                +'    <td>'+val.id+'</td>'
                +'    <td>'+val.name+' </td>'
                +'    <td>'+val.duration+' hrs </td>'
                +'    <td>'+val.course_totalamnt+'  </td>'
                +'    <td><span class="fa fa-edit edit" onclick="view('+val.id+')"  title="edit"></span></td>'
                +'<td><span class="fa fa-trash edit" onclick="delete_course('+val.id+')" title="edit"></span></td>'
                +'    </tr>')

                $("#dumptextArea").append(' <form class="" id="c_description'+val.id+'" method="post">'
                +'<label style="margin-left:10%" for=" Email1msg" id="descrition_course"><h3>'+val.name+'</h3></label>'
                +'<input type="hidden" name="c_desc_id" value="'+val.id+'">'
                + ' <textarea class="form-control" rows="5" name="course_description" id="textarea_c" placeholder="Type descrition">'
                  +'</textarea>'
                  +'<input type="submit" class="input-lg btn-success" name="submit_course_description" onclick="c_descriptionFunc('+val.id+')" value="send" style="float:right;margin-right:5%">'
                  +'</form>')
                })
              },
              error: function (data) {
                console.log(data);
              }
            })
          }
          var currentstudent=0
          function view(id) {
          currentstudent=id
          $("#myModal").modal()

          data=course[id]

          $("#regg").html(data.name+" "
          +'<input type="hidden" name="idcourse" value="'+data.id+'">'
        )


          }
          function edit_courseFunc() {
            $.ajax({
              url:'php/editingcourse.php',
              method:'post',
              data:$("#edit_courseform").serialize(),
              success:function (data) {
                console.log(data);
                $("#edit_courseform")[0].reset();
              },
              error: function (data) {
                alert(data);
              }
            })
          }
          del = [];
          var current_del = 0
          function delete_course(id) {

              $("#formdel").html("hey<input type='text' name='iddel' value='"+id+"'>");

            $.ajax({
              url:'php/deletecourse.php',
              method:'post',
              dataType:'',
              data:$("#formdel").serialize(),
              success:function (data) {
                console.log(data);
                alert(data);
              },
              error: function (data) {
                alert(data);
              }
            })
          }
          function addCourse_func() {
            $.ajax({
              url:'php/addcourse.php',
              method:'post',
              data:$("#addcourse").serialize(),
              success:function (data) {
                console.log(data);
                alert(data);
                $("#addcourse")[0].reset();
              },
              error:function (data) {
                console.log(data);
                alert(data);
              }
            })
          }
        </script>

    </body>
</html>
