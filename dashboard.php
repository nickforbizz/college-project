<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>financing</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">


<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css"  href="css/dashboard.css">
<link rel="stylesheet" type="text/css"  href="css/w3.css">
<link rel="stylesheet" type="text/css" href="fontAwesome/css/font-awesome.min.css">

<!-- Stylesheet
    ================================================== -->
<!-- <link rel="stylesheet" type="text/css"  href="css/style.css"> -->
<!--
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
 -->
<style media="screen">
  .details{
    margin: auto;
  }
</style>

</head>
<body id="body">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html"><i class="fa fa-sun-o"></i> Qwerty College<strong></strong></a> </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">Home</a></li>
        <li><a href="checkDetails.php" >Admin</a></li>
        <li><a href="#" >Dashboard</a></li>
        <li><a href="#about-section" class="page-scroll">About</a></li>
        <li><a href="#" >Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div id="mainContainer">
  <div id="navContainer">
    <nav class="w3-sidenav w3-light-blue w3-card-2" style="display:none" id="mySidenav">
        <a href="javascript:void(0)"
        onclick="w3_close()"
        class="w3-closenav w3-large" id="close"> &times;</a>
        <ul id="AlterDb">
          <li> <a onclick="document.getElementById('comments').scrollIntoView();">comments</a> </li>
          <li><a onclick="document.getElementById('exam-clearance').scrollIntoView();">Exam Clearance </a></li>
          <li> <a  onclick="document.getElementById('set_total_fee').scrollIntoView();">Total Fee</a></li>
          <li> <a  onclick="document.getElementById('student-list').scrollIntoView();">Student List</a></li>
          <li> <a onclick="document.getElementById('units').scrollIntoView();">Units</a></li>
          <li> <a  onclick="document.getElementById('notices').scrollIntoView();">Notices</a></li>
          <li> <a onclick="document.getElementById('comments').scrollIntoView();"> Comments</a></li>
          <li> <a onclick="document.getElementById('comments').scrollIntoView();"> Add Student</a></li>
        </ul>
    </nav>
  </div>
<header class="section-title text-center">
  <h2 id="collegeName"><span>QWERTY COMPUTER COLLEGE</span></h2>
  <hr>
</header>

  <div id="alterContainer" class="w3-container w3-teakl">
     <span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</span>
      <!-- About Section -->
      <div id="about-section">
        <div class="container">
          <div class="text-center">
            <h3>intro div</h3>
          </div>
          <span class="fa fa-search">search</span>
          <span class="fa fa-dashboard">dashboard</span>
          <span class="fa fa-comments">comments</span>
          <span class="fa fa-edit">edit</span>

          <span class="fa fa-send">send</span>
          <span class="fa fa-trash">trash</span>
          <span class="fa fa-upload">upload</span>

          <div class="">
            <div id="dbres" class="w3-modal">
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
                <div class="">
                  <!-- <div class="deleting w3-card-4" style="width:50%;">
                      <header class="w3-container w3-blue">
                        <p style="float:right;margin-bottom:20px;"><button class="w3-btn w3-blue btn-lg closebtn" style="font-size:40px;font-weight:bold;color:red;margin-left:20px">&times;</button></p>
                        <h1>Remove From Students Database </h1>
                      </header>
                      <div class="w3-container">
                        <p>Are You sure you Want to Delete</p>
                        <button class="w3-btn w3-dark-grey btn-lg"  name="cancel"  style="padding:20px;margin:20px;">Cancel</button><button class="w3-btn w3-dark-grey btn-lg" name="ok" style="padding:20px;margin:20px;">ok</button>
                      </div>
                      <footer class="w3-container w3-blue">
                        <h5>Qwerty Way</h5>
                      </footer>
                      </div> -->

                      <!-- <div class="deleting w3-card-4" style="width:50%;">
                          <header class="w3-container w3-blue">
                            <p style="float:right;margin-bottom:20px;"><button class="w3-btn w3-blue btn-lg closebtn" style="font-size:40px;font-weight:bold;color:red;margin-left:20px">&times;</button></p>
                            <h1>Remove From Students Database </h1>
                          </header>
                          <div class="w3-container">
                            <form class="form" method="post"> -->
                                <?php
                                  function getVal($value)
                                  {
                                    echo '<div class="deleting w3-card-4" style="width:50%;"> ';
                                      echo '<header class="w3-container w3-blue"> ';
                                      echo '<p style="float:right;margin-bottom:20px;"><button class="w3-btn w3-blue btn-lg closebtn" style="font-size:40px;font-weight:bold;color:red;margin-left:20px">&times;</button></p> ';
                                      echo ' <h1>Edit Students Database </h1>';
                                      echo '</header>';
                                      echo '<div class="w3-container">';
                                        echo '<form class="form" method="post">';
                                          echo '<label>Enter Your New Value</label> <br>';
                                          echo '<input type="text" name="" value="'.$value.'">';
                                        echo '</form>';
                                        echo '<button class="w3-btn w3-dark-grey btn-lg"  name="cancel"  style="padding:20px;margin:20px;">Cancel</button><button class="w3-btn w3-dark-grey btn-lg" name="ok" style="padding:20px;margin:20px;">ok</button>';
                                      echo '</div>';
                                      echo '<footer class="w3-container w3-blue"> ';
                                      echo '<h5>Qwerty Way</h5> ';
                                      echo '</footer> ';
                                    echo ' </div>';
                                  }
                                 ?>
                                <!-- <label>Enter Your New Value</label> <br>
                                <label></label>
                                <input type="text" name="" value="">
                            </form>
                            <button class="w3-btn w3-dark-grey btn-lg"  name="cancel"  style="padding:20px;margin:20px;">Cancel</button><button class="w3-btn w3-dark-grey btn-lg" name="ok" style="padding:20px;margin:20px;">ok</button>
                          </div>
                          <footer class="w3-container w3-blue">
                            <h5>Qwerty Way</h5>
                          </footer>
                      </div> -->
                </div>
                <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
                <div class="">
                  <?php
                      require 'connectDb.php';
                      $getnames1 = $connDb->query("SELECT * FROM enrolled_studs");
                      $y = 1; $u = 1;
                      while ($a = $getnames1->fetch_assoc()) {
                        #php loop continues in another area
                   ?>
                   <div class="w3-accordion w3-light-blue">
                      <div
                      onclick="myFunction('<?php echo $a['id'] ?>')" id="full_acc_<?php echo $y; ?>"
                       class=" w3-left-align w3-light-green w3-bottombar w3-border-green w3-border"
                       style="padding-left:20px; padding-top:20px;margin:2px !important;text-align:left !important;  " >

                                <div class="row" style="position:relative">
                                  <span id="oner" class="col-sm-6 col-md-4 w3-hide-small">
                                    <span class="trash"> Click To Edit
                                        <span class="trashIn" > <?php echo $a['fname'].' '.$a['lname']; ?> </span>
                                    </span>
                                  </span>
                                  <span id="twor" class="col-sm-6 col-md-4 w3-hide-small">
                                    <span class="trash "> Reg No:
                                        <span class="trashIn" > <?php echo $a['regNumber'].''; ?> </span>
                                     </span>
                                  </span>
                                  <span id="threer" class="col-sm-4 col-md-4 w3-hide-small">
                                    <span class=" trash ">Trash Record:
                                      <span class="fa fa-trash trashIn " title="Delete"></span>
                                    </span>
                                  </span>
                                </div>
                          <div class="row  w3-hide-large w3-hide-medium">  <!-- small Navs -->
                        <span id="on" style="margin-bottom:15px" class="col-xs-12">
                          <span> Click To Edit </span>
                          <span id="namefetched1" > <?php echo $a['fname'].' '.$a['lname']; ?> </span>
                        </span> <br>
                        <span id="tw" class="col-xs-12">
                          <span>Reg No: </span>
                          <span id="regFetched1" > <?php #echo $a['regNumber'].''; ?> </span>
                        </span> <br>
                        <span id="thr" class="col-xs-12">
                          <span class=" trash1 changinged" >Trash Record:
                            <form id="delete-row" method="post">
                              <input type="hidden" name="del" value="<?php echo $a['regNumber']; ?>">
                              <input class="fa fa-trash trashIn changingede" type="submit" value="Delete" title="Delete" >
                            </form>
                          </span>
                        </span>
                      </div>
                      </div>


                       <div id="hidden_<?php echo $a['id'] ?>" class="w3-accordion-content w3-container" style="none">

                          <p class="well4student-details list headlist"><span class="span1">Key</span> <span class="span2">Value</span><span class="span3">Edit</span><span class="span4">Del</span> </p>

                          <?php $fields=[
                            [1,"Names","Name",$a['fname']."".$a['lname']],
                            [2,"Regno","Reg Number", $a['regNumber']],
                            [4,"Telephone","Telephone", $a['telephone']],
                            [5,"Religion","Religion", $a['religion']],
                            [6,"Email","Email", $a['email']],
                            [7,"constituency","constituency", $a['constituency']],
                            [8,"Town","Town", $a['town']],
                            [9,"Kin(s)","Kin", $a['kin']]
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

                                 <span id="details_<?php echo $a['idNo']?>_<?php echo $field_id; ?>" >
                                    <span class="span2"><?php echo $field_value; ?> </span>
                                    <span class="fa fa-edit edit " onclick="editthisRow('<?php echo $field_id; ?>','<?php echo $a['idNo']  ?>')" id="<?php echo $a['fname']?>" title="edit"></span>
                                 </span>
                                <span> <?php $a['enrollDate']  ?> </span>

                               <div id="details_hidden_<?php echo $a['idNo']  ?>_<?php echo $field_id; ?>" class="rowl" style="display:none;">
                                 <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                                   <form id="form-submit_<?php echo $field_value; ?>" method="post">
                                     <input type="text" class="input-sm" id="name1" name="<?php echo $field_name?>"  placeholder="<?php echo $field_name  ?>" required>
                                     <?php if ($field_id == 1) {
                                              echo  '<input class="input-sm" type="text" name="lastname" placeholder="'.$a['lname'].' ">';
                                     } ?>
                                     <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                    <input type="submit" class="input-sm" name="send" value="update" onclick="update_data('<?php echo $field_value; ?>');">
                                    <button  type="button" class="btn-sm" onclick="hideform('<?php echo $field_id; ?>','<?php echo $a['idNo']  ?>')">&times;</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <!-- End of One Item -->


                          <?php endforeach; ?>


                      </div>

                      <!-- End of Hidden Stuff -->




                  </div>
                <?php $y++ ; $u++;} ?>
                </div>
              </div>
          </div>
          <!-- Total Fee -->
          <div class="jumbotron row" id="set_total_fee">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="well">
                <h4 class="text-center text-danger cc">Set The Total Amount To be Paid</h4>
                <form class="form" enctype="multipart/form-data" method="post" id="form_totalFee">
                  <div class="cc">Select Sem To Enable Field</div><br>
                  <select class=" btn-lg md-select"  id="semselect" name="semester" onchange="enableAmt()">
                    <option value="" disabled selected>Select Sem</option>
                    <option value="sem2">Semester 1</option>
                    <option value="sem2">Semester 2</option>
                    <option value="sem3" >Semester 3</option>
                  </select><br><br>
                  <div class="cc">
                    SELECT Sem First
                  </div>
                  <input type="number" class="input-lg ttlAmt" name="totalamt" value="" placeholder="Enter Total Amt" disabled>
                  <input type="submit" class="input-lg" name="submitTotalAmt" value="Update Fee" id="update" disabled>
                  <br> <br>
                  <?php include 'totalFee.php'; ?>
                </form>
              </div>
            </div>
          </div>
          <!-- end of Total fee -->
          <!-- Defer Continue students -->
          <div class="jumbotron row" id="Deffer">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h3>Deffer Continue Students Here</h3>
              <div class="">
                <div>Enter Student Reg Number.</div><br><br>
                <form class="form-horizontal" method="get">
                    <div class="form-group">
                        <input class="btn-lg" type="text" name="getstudState" placeholder="Type Reg Number">
                        <input class="btn-lg" type="submit" name="submit_getstudState" value="Get Stud">
                    </div> <br><br>
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
                </table>
            </div>
            <div class="container">
                <h2>Select To Declare Student State</h2>
                <form role="form">
                  <select class=" btn-lg md-select"  id="deferContinue" name="deferContinue" onchange="enable_submit_defer_continue()">
                    <option value=""  disabled selected>Select To Defer/Continue</option>
                    <option value="Defer">Defer</option>
                    <option value="Continue">Continue</option>
                  </select>
                  <input class="input-lg cont_deff" type="submit" name="submit_defer_continue" value="Send" disabled> <br><br>
                </form>
          </div>
            </div>
          </div>

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
          <div class="jumbotron row" id="notices">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Notices</h3>
                <div class="">
                  <h4>headline</h4>
                  <div id="textbox">
                		<textarea class="tinymce">
                		</textarea>
                		<input type="submit" name="submitBlog" value="send">
                	</div>
                  <pre>the notices</pre>
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
                      $getCourses =  $connDb->query("SELECT * FROM courses");
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
              <div id="editing_course" class="w3-modal">
                  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

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
          <div class="jumbotron row" >
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="comments">
              <h2 class="text-center shadow"><i>Comments</i></h2>
              <div class="container">
                    <div class="w3-card-4">
                    <div class=""  style="float:right;margin-right:10%;margin-bottom:15px">
                    posted by <u><i>Email and name</i></u>
                    </div> <br>
                    <div class="" style="padding:15px">
                    <div class="text-center">
                      comments here
                        somehing great

                    </div>
                    </div>
                    <div>
                    <span class='fa fa-trash edit' style="float:right;margin-right:10%;margin-bottom:15px;font-size:10px;" onclick='editthisRow()' title='edit'>  Trash</span> <br>
                  </div> <br>
                    </div>
              </div> <br>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <h3 class="text-center">Enroll Students</h3>
              <div id="container_students">
                  <form class="form" method="post">
                    <div class="list_inputs">
                      <label class="w3-label w3-validate">First Name</label> <br>
                      <input type="text" name="fname" class="input-lg" required> <span id="required">*</span> <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label w3-validate">Last Name</label> <br>
                      <input type="text" name="lname" class="input-lg" required> <span id="required">*</span> <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label">Reg Number</label> <br>
                      <input type="text" name="regNumber" class="input-lg" required> <span id="required">*</span> <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label w3-validate">Age</label> <br>
                      <input type="number" name="age" class="input-lg"> <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label w3-validate">Postal Address</label> <br>
                      <input type="text" name="pAddress" class="input-lg" required> <span id="required">*</span> <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label">Postal Code</label> <br>
                      <input type="number" name="pCode" class="input-lg"> <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label w3-validate">Town/City</label> <br>
                      <input type="text" name="town" class="input-lg"> <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label w3-validate">constituency</label> <br>
                      <input type="text" name="constituency" class="input-lg"> <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label w3-validate">County</label> <br>
                      <input type="text" name="county" class="input-lg" required>  <span id="required">*</span><br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label w3-validate">Country</label> <br>
                      <select class=" btn-sm md-select"  name="country" aria-labelledby="select-label">
                          <option value=""  disabled selected> Select Country</option>

                            <option value="KE">
                              Kenya
                            </option>

                            <option value="DZ">
                              Algeria
                            </option>

                            <option value="AO">
                              Angola
                            </option>

                            <option value="ZM">
                              Zambia
                            </option>

                            <option value="ZW">
                              Zimbabwe
                            </option>
                          <template is="dom-repeat"></template>
                        </select>
                      <!-- <input type="text" name="country" class="input-lg" > <br> -->
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label w3-validate">Course</label> <br>
                      <select class="btn-lg" name="courses">
                        <option  disabled selected>Select Course</option>
                        <option value="IT">IT</option>
                        <option value="ORACLE">ORACLE</option>
                        <option value="COMPUTER">COMPUTER</option>
                        <option value="LINUX">LINUX</option>
                      </select> <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label w3-validate">Telephone</label> <br>
                      <input type="number" name="telephone" class="input-lg" required> <span id="required">*</span> <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label w3-validate">Email</label> <br>
                      <input type="email" name="email" class="input-lg" > <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label">Date Of Birth</label> <br>
                      <input type="text" name="bornday" class="input-lg" required> <span id="required">*</span> <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label">Gender</label> <br>
                      <select class="btn-lg" name="gender">
                        <option  disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                      <!-- <input type="text" name="gender" class="input-lg" required> <span id="required">*</span> <br> -->
                    </div>
                    <div class="list_inputs" style="clear:left;">
                      <label class="w3-label">Marital Status</label> <br>
                      <input type="text" name="mstatus" class="input-lg"> <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label">Religion</label> <span id="required">*</span> <br>
                      <select class="btn-lg" name="religion">
                        <option disabled selected>Select Religion</option>
                        <option value="Christianity">Christianity</option>
                        <option value="Islamic">Islamic</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budhism">Budhism</option>
                      </select>
                      <!-- <input type="text" name="religion" class="input-lg" required> <span id="required">*</span> <br> -->
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label w3-validate">Nationality</label> <br>
                      <input type="text" name="nationality" class="input-lg"> <br>
                    </div>
                    <div class="list_inputs" style="clear:left;">
                      <label class="w3-label w3-validate">ID Number</label> <br>
                      <input type="number" name="idNo" class="input-lg" required> <span id="required">*</span> <br>
                    </div>
                    <div class="list_inputs">
                      <label class="w3-label w3-validate">Next Of Kin</label> <br>
                      <input type="text" name="kin" class="input-lg"> <br>
                    </div>
                    <br> <br>
                    <p style="clear:both;"></p>
                    <div class="" style="margin-left: 70%;">
                      <input type="submit" class="input-lg" name="submit_student" value="Submit" onclick="loadContentsAsyc('enrollStudRes', 'enrollStudents.php')">
                    </div>
                    <p style="clear:both"></p>
                    <br>
                  </form>
              </div> <br> <!-- End of container_students -->
              <div class="jumbotron text-center" id="enrollStudRes">
                <h3 class="w3-black">Enroll student Results</h3>

              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<div>
</div>

<div id="footer" style="background-color:#009688;">
  <div class="container">
    <div class="fnav well text-center" style="background-color:#80ffe5 !important;">
      <h4 id="Insert">The Education You Want. The Attention You Deserve</h4>
      <p>Copyright &copy; COLLEGE NAME</p>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type ="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type ="text/javascript" src="js/tinymce/init-tinymce.js"></script>

<!-- Javascripts
    ================================================== -->
<script>



// function loadPhp() {
//   <?php #include 'update_student.php';?>
// }
function loadContentsAsyc(whereToPlaceData, theFile){
      if (window.XMLHttpRequest) {
        xmlHttp = new XMLHttpRequest();
      } else {
        xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
      }
      xmlHttp.onreadystatechange = function () {
        if ( xmlHttp.readyState == 4 && xmlHttp.status == 200 ){
          document.getElementById(whereToPlaceData).innerHTML = xmlHttp.responseText;
        }
      };
      xmlHttp.open('POST', theFile, true);
      xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
      xmlHttp.send("fname=$_POST['fname'] & lname=$_POST['lname'] & regNumber=$_POST['regNumber'] & age=$_POST['age'] & pAddress=$_POST['pAddress'] & pCode=$_POST['pCode'] & town=$_POST['town'] & constituency=$_POST['constituency'] & county=$_POST['county'] & country=$_POST['country'] & course=$_POST['course'] & telephone=$_POST['telephone'] & email=$_POST['email'] & bornday=$_POST['bornday'] & gender=$_POST['gender'] & mstatus=$_POST['mstatus'] & religion=$_POST['religion'] & nationality=$_POST['nationality'] & idNo=$_POST['idNo'] & kin=$_POST['kin']");
    }
</script>
</script>
</body>
</html>
