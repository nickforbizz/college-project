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
                        <h1 class="page-header">Finance</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <?php
                require './php/conn.php';
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Set Total Fee For The Semester
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                              <!-- Total Fee -->
                              <div class="jumbotron row" id="set_total_fee">
                                <div clahss="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                  <div class="" style="position:relative;margin-bottom:15px;">

                                    <h4 class="text-center text-danger cc">Set The Total Amount To be Paid</h4>
                                    <form class="form" method="post" id="form_setfee">

                                      <div class="well text-center">
                                        Select Sem To Enable Field
                                      </div>
                                      <div class="row">
                                        <div class="col-xs-12 col-md-4 col-sm-6">
                                          <label for="">Semester</label><br>
                                          <select class=" btn-lg md-select"  id="semselect" name="semester" onchange="enableAmt()">
                                            <option value="" selected disabled>Select Sem</option>
                                            <option value="1">Semester 1</option>
                                            <option value="2">Semester 2</option>
                                            <option value="3" >Semester 3</option>
                                          </select>

                                        </div>
                                        <div class="col-xs-12 col-md-4 col-sm-6">
                                          <label for="">Year Of Study</label><br>
                                          <select class=" btn-lg md-select"  id="semselect" name="year" onchange="enableAmt()">
                                            <option value="" selected disabled>Select Year</option>
                                            <option value="1">Year 1</option>
                                            <option value="2">Year 2</option>
                                            <option value="3" >Year 3</option>
                                            <option value="4" >Year 4</option>

                                          </select>

                                        </div>
                                        <div class="clearfix visible-xs"></div>
                                        <div class="col-xs-12 col-md-4 col-sm-12">
                                          <label for="">Courses</label> <br>
                                          <select class="btn-lg md-select" name="courses" id="courses">

                                          </select>
                                          <br> <br>
                                        </div>

                                        <div class="col-md-12">
                                          <div class="text-center" style="padding:15px;">
                                            <h3>Enter Amount and Update</h3>
                                          </div>
                                          <input type="number" class="input-lg ttlAmt" name="amount" value="" placeholder="Enter Total Amt" disabled>
                                          <input type="submit" class="input-lg" name="submitTotalAmt" value="Update Fee" id="update" disabled>
                                          <br> <br>
                                          <input type="hidden" name="yr_date" value="<?php echo date('Y')?> ">
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Check Student Clearance
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                              <div class="jumbotron text-center row" id="exam-clearance">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <h3>Check If Student has Cleared</h3>
                                    <form class="" action="index.html" method="post">
                                      <label class="text-center">Search Reg</label><br>
                                      <input type="text"  class="input-lg" name="seachStudent" value="Enter Reg">
                                      <input type="submit" class="input-lg" name="submitSearch" value="search">
                                    </form>
                                    <table class="table table-striped">
                                      <thead class="success">
                                        <tr>
                                          <td>Reg Number</td>
                                          <td>Name</td>
                                          <td>course</td>
                                          <td>Amount Paid</td>
                                          <td>Bal</td>
                                          <td>Fee paid on:</td>
                                          <td>Paymode</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td></td>
                                        </tr>
                                      </tbody>
                                    </table>
                              </div>
                              </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-6 -->

                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../../js/dashboard.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <!-- <script src="../js/morris.min.js"></script> -->
        <!-- <script src="../js/morris-data.js"></script> -->
        <script type="text/javascript">
        $(document).ready(function () {
          $("#form_setfee").submit(function (e) {
            e.preventDefault()
            set_fees()
          })
          insert_rows_courses();
        })
        function insert_rows_courses() {
          $.ajax({
            url:'./php/get_courses.php',
            method:'post',
            type:'text',
            success:function (msg) {
              // msg = JSON.parse(msg)
              console.log(msg);
              $("#courses").html(msg);
            }, error: function (msg) {
              alert(msg)
            }
          })
        }
        function set_fees() {
          $.ajax({
            url:'./php/update_fee.php',
            method:'post',
            type:'text',
            data:$("#form_setfee").serialize(),
            success:function (msg) {
              // msg = JSON.parse(msg)
              console.log(msg);
              alert("Data returned: " + msg)
            }, error: function (msg) {
              alert("Error "+ msg + " Occured.")
            }
          })
        }
        </script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
