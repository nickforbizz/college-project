  <?php
require 'php/conn.php';

$id=$_GET['id'];
// echo $id;

$res=$conn->query("select * from students where id=$id ");
$array=array();
while($row=$res->fetch_assoc()){
  array_push($array,$row);
}


$conn2 = new MySQli('localhost', 'root', '', "finance");
$array2=array();
if ($conn2) {
  # code...
  $res=$conn2->query("select * from stud$id ");
  while($row=$res->fetch_assoc()){
    array_push($array2,$row);
  }
}else {
  # code...
  echo $conn2->error;
  echo "conn2 didnt execute";
}

//  Do calculation for generation of Pdf.



 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
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
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
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
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="flot.html">Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href="morris.html">Morris.js Charts</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                            <li>
                                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="panels-wells.html">Panels and Wells</a>
                                    </li>
                                    <li>
                                        <a href="buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="icons.html"> Icons</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Grid</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li class="active">
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="active" href="blank.html">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login Page</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">

                  <div class="row">
                      <div class="col-lg-12">
                          <h1 class="page-header">Profile</h1>
                      </div>
                      <!-- /.col-lg-12 -->
                  </div>
                  <div class="row">
                      <div class="col-lg-4">
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  Profile
                              </div>
                              <div class="panel-body" id="profile">
                                <img src="img/avatar.png" alt="" style="width:100px;border-radius:100px;margin-left:calc(50% - 50px);"><br><br>


                              </div>
                              <!-- /.panel-body -->
                          </div>
                          <!-- /.panel -->
                        </div>

<div class="col-lg-8">

                      <div class="panel-body">
                          <div class="dataTable_wrapper">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>
                                      <tr>
                                          <th>id</th>
                                          <th>date</th>
                                          <th>payment type</th>
                                          <th>Reg</th>
                                          <th>amount</th>
                                          <th>Receipt</th>

                                      </tr>
                                  </thead>
                                  <tbody id="studentlist">

                                  </tbody>
                              </table>
                          </div>
                          <!-- /.table-responsive -->
                      </div>
                    </div>
                  </div>

                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
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
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">

var user=<?php
echo json_encode($array);
 ?>
// console.log("heee")
 var finance=<?php
 echo json_encode($array2);
  ?>

$(document).ready(function () {

      for(x in finance){
          val=finance[x]
          date=new Date(val.time)
          var dt=date.toISOString().replace("T"," ").replace(/\-/g,'/')
          var dt=dt.substr(0,dt.indexOf("."))
            $("#studentlist").append('<tr style="cursor:pointer;" class="odd gradeX">'
          +'    <td>'+val.id+'</td>'
          +'    <td>'+dt+'</td>'
          +'    <td>'+val.type+'</td>'
          +'    <td>'+val.regnumber+'</td>'
          +'    <td>'+val.amount.toLocaleString()+'</td>'
          +'    <td> <button class="btn-lg btn-success" onclick ="pdf_func('+val.id+')">Print</button> </td>'

          +'    </tr>')

      }
      $('#dataTables-example').DataTable({
              responsive: true
      });

      user=user[0]
      for (x in user) {
        if(x !="id" && x !="user_fees"){
        console.log(x);
        val=user[x]

        $("#profile").append('<div> <div style="display:inline-block;text-align:right;color:gray;padding:5px;width:105px;"><b>'+x+' </b></div>   <div style="display:inline-block;text-align:right;color:gray;padding:5px">'+val+'</div> </div>')

        }
      }
      })
function pdf_func(id){
  user_id = user.id;
  user_course = user.courses;
  user_regnumber  = user.regnumber;
  // alert(user_regnumber);
  $.ajax({
    url:'./php/update_individual_fee.php',
    method:"post",
    data:"user_id="+ user_id +"&user_course="+user_course+"&user_regnumber="+user_regnumber,
    success: function (data) {
      // alert("successfully"+data);
      data = JSON.parse(data)
      if (data) {
        var user1;
        $.each(data, function(i,val){user1=val.user; the_reg=val.the_reg; user_amount=val.amount;
          console.log(user1);
        })
        console.log(data);
        $.ajax({
          url:'./php/pdfdoc.php',
          method:'post',
          data:'user='+user1+'&regNo1='+the_reg+'&user_amount='+user_amount,
          success:function (data) {
            console.log(data);
          }
        })
        // location.href="./php/pdfdoc.php";
      }else {
        alert("ggg")
      }
    },
    error:function (data) {
      alert("this happened <br>"+data)
    }
  })
}

</script>

    </body>
</html>
