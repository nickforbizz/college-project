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
                            <li><a href="#"><i class="fa fa-user fa-fw"></i></a>
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
                                        <li>
                                            <a href="exams.php">EXAMS</a>
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
                        <h1 class="page-header">Users</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">

                  <div class="panel panel-default">
                          <div class="panel-heading">
                              <h3 class="text-center shadow"><i>Alter Users </i></h3>
                          </div>
                          <!-- /.panel-heading -->
                          <div class="panel-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <div class="table-responsive">
                              <table class="table">
                                <thead class="w3-border-black w3-border-bottom w3-light-blue">
                                  <tr>
                                    <td>ID</td>
                                    <td>UserName</td>
                                    <td>E-mail</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                  </tr>
                                </thead>
                                        <tbody id="dumpexams">
                                        </tbody>

                              </table>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          <form class="" id="edit_user" method="post">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Change <span id="regg">Users </span> </h4>
                                        </div>
                                          <div class="text-center">

                                            <label><b>UserName</b></label> <br>
                                            <input class="input-lg" type="text" placeholder="Enter New Username" name="user_name" required> <br>

                                            <label><b>E-mail</b></label> <br>

                                            <input class="input-lg" type="email" placeholder="Enter New E-mail" name="user_email" required>
                                          </div>

                                          <div class="modal-footer">
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

                      <!-- /.panel -->
                  </div>
                </div>
                <!-- /.row -->

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

        <!-- Page-Level Demo Scripts - Notifications - Use for reference -->
        <script>
            // tooltip demo
            $("#edit_user").submit(function (e) {
              e.preventDefault()
              changeUser();
            })
            function changeUser() {
              $.ajax({
                url:'php/editingUsers.php',
                method:'post',
                data:$("#edit_user").serialize(),
                success:function (data) {
                  alert(data);
                },error:function (data) {
                  console.log(data);
                }
              })
            }
            $('.tooltip-demo').tooltip({
                selector: "[data-toggle=tooltip]",
                container: "body"
            })

            getCourse()
            // popover demo
            $("[data-toggle=popover]").popover()
            course = [];
            function getCourse() {
              $.ajax({
                url: 'php/get_exams.php',
                method:'post',
                // type: 'json',
                data:'',
                success:function (data) {
                  // data = JSON.parse(data);
                  alert(data)
                  console.log(data);
                  $.each(data, function (i, val) {
                    course[""+val.id]=val

                       $("#1").hide()

                    $("#dumpexams").append('<tr style="cursor:pointer;"  class="odd gradeX">'
                  +'    <td>'+val.id+'</td>'
                  +'    <td>'+val.username+' </td>'
                  +'    <td>'+val.email+'  </td>'
                  +'    <td><span class="fa fa-edit edit" onclick="view('+val.id+')"  title="edit"></span></td>'
                  +'<td><span id="'+val.id+'" class="fa fa-trash edit" onclick="delete_course('+val.id+')" title="Delete"></span></td>'
                  +'    </tr>')

                  })
                },
                error: function (data) {
                  alert(data)
                  console.log(data);
                }
              })
            }
            var currentstudent=0
            function view(id) {
            currentstudent=id
            $("#myModal").modal()

            data=course[id]

            $("#regg").html(data.username+" "
            +'<input type="hidden" name="idUser" value="'+data.id+'">'
          )


            }
        </script>

    </body>
</html>
