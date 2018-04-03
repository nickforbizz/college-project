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
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge" ><span id="commentsNo"></span></div>
                                        <div>Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><span id="noticesNo"></span></div>
                                        <div>Notices!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="notices.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> <span id="courseNo"></span> </div>
                                        <div>Courses!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="courses.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><span id="studentsNo"></span></div>
                                        <div>Students!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="enrollStudents.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                                data-toggle="dropdown">
                                            Actions
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> About
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                                data-toggle="dropdown">
                                            Actions
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                          <h3 class="well" style="margin-bottom:0!important">Courses</h3>
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Time Taken</th>
                                                    <th>Course Type</th>
                                                </tr>
                                                </thead>
                                                <tbody id="tableanalyse">

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                          <h3 class="well" style="margin-bottom:0!important">STUDENTS</h3>
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Notice</th>
                                                    <th>By:-</th>
                                                </tr>
                                                </thead>
                                                <tbody id="tableanalysenotice">

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->
                                    <div class="col-lg-8">
                                        <div id="morris-bar-chart"></div>
                                    </div>
                                    <!-- /.col-lg-8 (nested) -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->

                    </div>
                    <!-- /.col-lg-8 -->
                    <div class="row">

                        <!-- /.panel -->
                        <div class="col-lg-4 col-md-4 col-sm-4">

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Representation
                            </div>
                            <div class="panel-body">
                              <div id="morris-donut-chart"></div>
                              <a href="#" class="btn btn-default btn-block">View Details</a>
                            </div>
                            <!-- /.panel-body -->
                          </div>
                        </div>
                        <!-- /.panel -->
                        <div class="col-lg-8 col-md-8 col-sm-8">

                          <div class="chat-panel panel panel-default">
                            <div class="panel-heading">
                              <i class="fa fa-comments fa-fw"></i>
                              Chat
                              <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                data-toggle="dropdown">
                                <i class="fa fa-chevron-down"></i>
                              </button>
                              <ul class="dropdown-menu slidedown">
                                <li>
                                  <a href="#">
                                    <i class="fa fa-refresh fa-fw"></i> Refresh
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="fa fa-check-circle fa-fw"></i> Available
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="fa fa-times fa-fw"></i> Busy
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="fa fa-clock-o fa-fw"></i> Away
                                  </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                  <a href="#">
                                    <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <!-- /.panel-heading -->
                          <div class="panel-body">
                            <ul class="chat">
                              <li class="left clearfix">
                                <span class="chat-img pull-left">
                                  <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                                  class="img-circle"/>
                                </span>

                                <div class="chat-body clearfix">
                                  <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <small class="pull-right text-muted">
                                      <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                    </small>
                                  </div>
                                  <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                  </p>
                                </div>
                              </li>
                              <li class="right clearfix">
                                <span class="chat-img pull-right">
                                  <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar"
                                  class="img-circle"/>
                                </span>

                                <div class="chat-body clearfix">
                                  <div class="header">
                                    <small class=" text-muted">
                                      <i class="fa fa-clock-o fa-fw"></i> 13 mins ago
                                    </small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                  </div>
                                  <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                  </p>
                                </div>
                              </li>
                              <li class="left clearfix">
                                <span class="chat-img pull-left">
                                  <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                                  class="img-circle"/>
                                </span>

                                <div class="chat-body clearfix">
                                  <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <small class="pull-right text-muted">
                                      <i class="fa fa-clock-o fa-fw"></i> 14 mins ago
                                    </small>
                                  </div>
                                  <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                  </p>
                                </div>
                              </li>
                              <li class="right clearfix">
                                <span class="chat-img pull-right">
                                  <img src="" alt="User Avatar"
                                  class="img-circle"/>
                                </span>

                                <div class="chat-body clearfix">
                                  <div class="header">
                                    <small class=" text-muted">
                                      <i class="fa fa-clock-o fa-fw"></i> 15 mins ago
                                    </small>
                                    <strong class="pull- right primary-font">Bhaumik Patel</strong>
                                  </div>
                                  <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                  </p>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <!-- /.panel-body -->
                          <div class="panel-footer">
                            <div class="input-group">
                              <input id="btn-input" type="text" class="form-control input-sm"
                              placeholder="Type your message here..."/>
                              <span class="input-group-btn">
                                <button class="btn btn-warning btn-sm" id="btn-chat">
                                  Send
                                </button>
                              </span>
                            </div>
                          </div>
                          <!-- /.panel-footer -->
                        </div>
                        </div>
                        <!-- /.panel .chat-panel -->
                    </div>
                    <!-- /.col-lg-4 -->
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

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
        <script type="text/javascript">
          $(document).ready(function () {
            $.ajax({
              url:'php/graphs.php',
              method:'post',
              success:function (data) {
                data = JSON.parse(data);
                console.log(data);
                $.each(data[0], function(i, val){
                  console.log(val);
                  $("#tableanalyse").append('<tr>'
                  +'<td> '+val.id+'</td>'
                  +'<td> '+val.name+'</td>'
                  +'<td> '+val.duration+' hrs</td>'
                  +'<td> '+val.type+'</td>'
                  +'</tr>'

                  );
                })
                $.each(data[2], function(i, val){
                  console.log(val.notice);
                  $("#tableanalysenotice").append('<tr>'
                  +'<td> '+val.id+'</td>'
                  +'<td> '+val.title+'</td>'
                  +'<td> '+val.notice+'</td>'
                  +'<td> '+val.posted_by+'</td>'
                  +'</tr>'

                  );
                })

              }
            })
            $.ajax({
              url:'php/noCorses.php',
              method:'post',
              success:function (data) {
                // data = JSON.parse(data);
                console.log(data);
                $("#courseNo").html(data);

              }
            })
            $.ajax({
              url:'php/noNotices.php',
              method:'post',
              success:function (data) {
                // data = JSON.parse(data);
                console.log(data);
                $("#noticesNo").html(data);
              }
            })
            $.ajax({
              url:'php/noComments.php',
              method:'post',
              success:function (data) {
                // data = JSON.parse(data);
                console.log(data);
                $("#commentsNo").html(data);
              }
            })
            $.ajax({
              url:'php/noStudents.php',
              method:'post',
              success:function (data) {
                // data = JSON.parse(data);
                console.log(data);
                $("#studentsNo").html(data);
              }
            })
          })
        </script>

    </body>
</html>
