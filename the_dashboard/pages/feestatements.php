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
                        <h1 class="page-header"><i class="fa fa-graduation-cap" aria-hidden="true" title="Copy to use 500px"></i> </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                  <h2 class="text-center text-info">Check Fees Details of the Client</h2>
                            </div>
                            <div class="panel-body">

                                <div class="row">

                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                      <div class="">
                                              <?php
                                              require './php/conn.php';
                                              $today = date('d/m/Y');
                                              echo 'Today is: '.$today;
                                              ?>
                                              <br><br>
                                              <form class="form" enctype="multipart/form-data"  method="post" id="form_check">

                                                <label id="labelRegNo" class="text-center">Enter Regestration Number</label> <br>
                                                <input class="form-control input-sm" type="text" name="regNo" placeholder="Enter Reg No" onclick="" required>
                                                <input class="btn input-sm" type="submit" name="submit" value="send" id="getStudInfo" >
                                              </form>

                                              <div class="col-sm-12">
                                                <table aria-describedby="dataTables-example_info" role="grid" class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example">
                                                  </thead>
                                                  <tbody id="dumpfeestate">

                                                  </tbody>
                                                  </table>
                                                </div>


                                                <div class="col-lg-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              Student Payment Table
                          </div>
                          <!-- /.panel-heading -->
                          <div class="panel-body">
                              <div class="dataTable_wrapper">
                                  <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="dataTables-example_wrapper">
                                    <div class="row"><div class="col-sm-6">
                                      <div id="dataTables-example_length" class="dataTables_length">

                                      </div></div><div class="col-sm-6"><div class="dataTables_filter" id="dataTables-example_filter"></div></div></div><div class="row"><div class="col-sm-12">
                                        <table aria-describedby="dataTables-example_info" role="grid" class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example">
                                    <thead>
                                            <tr role="row">
                                              <th >Reg Number</th>
                                              <th >First Name</th>
                                              <th>Last Name</th>
                                              <th>Course</th>
                                              <th>Paid Amount</th>
                                              <th >Credit</th>
                                              <th >Debit</th>
                                              <th>PayMode</th>
                                              <th>Pay Date</th></tr>
                                            </tr>
                                      </thead>
                                      <tbody  id="dump_fee_bal">
                                      </tbody>
                                  </table>
                                </div></div><div class="row"><div class="col-sm-6"><div aria-live="polite" role="status" id="dataTables-example_info" class="dataTables_info">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6">
                                  <!-- <div id="dataTables-example_paginate" class="dataTables_paginate paging_simple_numbers"><ul class="pagination"><li id="dataTables-example_previous" tabindex="0" aria-controls="dataTables-example" class="paginate_button previous disabled"><a href="#">Previous</a></li><li tabindex="0" aria-controls="dataTables-example" class="paginate_button active"><a href="#">1</a></li><li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">2</a></li><li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">3</a></li><li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">4</a></li><li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">5</a></li><li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">6</a></li><li id="dataTables-example_next" tabindex="0" aria-controls="dataTables-example" class="paginate_button next"><a href="#">Next</a></li></ul>
                                  </div> -->
                                </div></div></div>
                              </div>
                              <!-- /.table-responsive -->

                          </div>
                          <!-- /.panel-body -->
                      </div>
                      <!-- /.panel -->
                  </div>


                                              <?php ?>
                                            </div><br>
                                            <div id="detailsId">

                                            </div>


                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="text-center">DETAILS:</h3>
                              <h2 class="text-center">Update Student Fee Amount</h2>
                            </div>
                              <div class="panel-body">
                                  <!-- <div class="jumbotron" id="showSuccess" style = "display:none;">
                                    <h3 class="text-center">Update Was Succesfully</h3>
                                  </div> -->
                                  <div class="bg-info details well" style="background-color:#ddddee">

                                        <form class="" method="post" id="form_update_user_fee">
                                            <label>Year</label><br>
                                            <input type="number" name="yr_date" class="input-lg" min="1900" max="2099" step="1" value="<?php echo date('Y')?>"> <br><br>
                                            <div class="row">
                                              <div class="col-md-4">
                                                <label class="text-danger">Enter Reg Number to Update: </label><br>
                                                <input type="text" class="input-lg" name="regNo1" placeholder="Enter Reg Number" ><br>
                                              </div>
                                              <div class="col-md-4">
                                                <label>Amount Paid: </label>
                                                <input class="form-control  input-lg" type="number" name="amountPaid" min="0" placeholder="Enter amountPaid"><br>
                                              </div>
                                              <div class="col-md-4">
                                                <label for="firstName">Payment Mode: </label> <br>
                                                <select class="btn-lg" name="modeOfPay">
                                                  <option>Mode of Payment</option>
                                                  <option value="bank">Bank</option>
                                                  <option value="m-pesa">M-pesa</option>
                                                </select><br>
                                              </div>
                                              <!-- <div class="col-md-12"> -->
                                            </div><br><br>
                                                <div class="row" id="appendInputs">

                                                </div> <br><br>
                                              <!-- </div> -->

                                                <input class="input-lg" type="submit" name="submit1" value="submit" id="updateStudInfo"><br> <br>
                                                <p>Submit to get option for producing Receipt</p>
                                        </form>
                                        <br>
                                        <div id="detailsId1">

                                        </div>
                                        <div class="well text-center" id="getReceipt" style="display:none">
                                          <form  method="post" action="./php/pdfdoc.php">
                                            <label> Get Receipt for This Student  <span class="fa fa-file-pdf-o" style="font-size:40px;color:red"></span></label><br>

                                            <!-- <input type="text" class="btn-lg" name="studentReceipt" placeholder="Enter Reg Number" value="<?php if(isset($_POST['regNo1'])){echo $_POST['regNo1'];}?>"> -->
                                            <div class="" style="display:none" id="appendDataforReceipt">

                                            </div>
                                            <input type="submit" class="btn-lg" name="" value="Get Receipt">
                                          </form>
                                        </div>
                                        <br>

                                  </div>
                                </div>
                    </div>
                    <!-- /.col-lg-12 -->
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
        <script type="text/javascript">
        $(document).ready(function () {
          get_sem$year();
          get_fee_bal();
          $("#form_update_user_fee").submit(function (e) {
            e.preventDefault()
            update_fee_bal()
          })
          $("#form_check").submit(function (e) {
            e.preventDefault()
            $.ajax({
              url:'php/get_user_bal.php',
              method:'post',
              data:$("#form_check").serialize(),
              success:function (data) {
                console.log(data);
                data = JSON.parse(data);
                $.each(data, function (num, val) {
                  $("#dump_fee_bal").append('<tr>'
                  +'<td>'+val.user_reg+'</td>'
                  +'<td>'+val.fname+'</td>'
                  +'<td>'+val.lname+'</td>'
                  +'<td>'+val.course+'</td>'
                  +'<td>'+val.paid+'</td>'
                  +'<td>'+val.credit+'</td>'
                  +'<td>'+val.debit+'</td>'
                  +'<td>'+val.paymode+'</td>'
                  +'<td>'+val.updated_at+'</td>'
                  +'</tr>')
                })
              },
              error:function (data) {
                console.log(data);
              }
            })
          })
        })
        function get_fee_bal() {
          $.ajax({
            url:'./php/get_user_bal.php',
            method:'post',
            type:'text',
            success:function (msg) {
              // msg = JSON.parse(msg)
              console.log(msg);
              $("#dump_fee_bal").html(msg);
            }, error: function (msg) {
              alert(msg)
            }
          })
        }
        function get_sem$year() {
          $.ajax({
            url:'./php/get_semyear.php',
            method:'post',
            type:'text',
            success:function (msg) {
              // msg = JSON.parse(msg)
              console.log(msg);
              $("#appendInputs").html(msg);
            }, error: function (msg) {
              alert(msg)
            }
          })
        }
        function update_fee_bal() {
          $.ajax({
            url:'./php/update_individual_fee.php',
            method:'post',
            // type:'text',
            data:$("#form_update_user_fee").serialize(),
            success:function (msg) {
              msg = JSON.parse(msg)
              console.log(msg);
              $.each(msg, function (i,val) {
                $("#appendDataforReceipt").append('<input type="hidden" name="course" value="'+val.course+'">'
                +'<input type="hidden" name="year" value="'+val.year+'">'
                +'<input type="text" name="studentReceipt" value="'+val.user_reg+'">'

                +'<input type="hidden" name="yr_date" value="'+val.yr_date+'">'
                +'<input type="hidden" name="semester" value="'+val.semester+'">'
                )
              })
              $("#getReceipt").slideDown();
            }, error: function (msg) {
              alert(msg)
            }
          })
        }
        </script>

    </body>
</html>
