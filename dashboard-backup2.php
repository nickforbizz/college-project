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
          <div class="dbresw">

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
                       class=" w3-left-align w3-light-green heaederp-edit"
                       style="padding-left:20px; padding-top:20px;margin:2px !important;text-align:left !important;  " >

                        <div class="row">
                        <span id="one" class="w3-hide-small">
                          <span> Click To Edit </span>
                          <span id="namefetched" > <?php echo $a['fname'].' '.$a['lname']; ?> </span>
                        </span>
                        <span id="two" class="w3-hide-small">
                          <span>Reg No: </span>
                          <span id="regFetched" > <?php echo $a['regNumber'].''; ?> </span>
                        </span>
                        <span id="three" class="w3-hide-small">
                          <span class=" trash changinged">Trash Record:
                            <span class="fa fa-trash trashIn changingede" title="Delete"></span>
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
                        <hr>
                      </div>
                       <div id="hidden_<?php echo $a['id'] ?>" class="w3-accordion-content w3-container" style="none">
                         <?php#  include 'update_student.php';
                          ?>

                          <p class="well4student-details list headlist"><span class="span1">Key</span> <span class="span2">Value</span><span class="span3">Edit</span><span class="span4">Del</span> </p>
                          <div class="well4student-details list">
                            <span class="span1">Name</span>
                               <span id="<?php echo $a['idNo']?>" >
                                  <span class="span2"><?php echo $a['fname'].' '.$a['lname'].'<br>'; ?> </span>
                                  <span class="fa fa-edit edit " onclick="editthisRow(<?php echo $a['idNo']  ?>)" id="<?php echo $a['fname']?>" title="edit"></span>
                               </span>
                              <span> <?php $a['enrollDate']  ?> </span>
                             <div id="<?php echo 'id'.$a['idNo']  ?>" class="rowl" style="display:none;">
                               <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                                 <form id="form-submit" method="post">
                                   <input type="text" id="name1" name="name1"  placeholder="<?php echo $a['fname'] ?>" required>
                                   <input type="text" name="name2"  placeholder="<?php echo $a['lname'] ?>" required>
                                   <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                  <input type="submit" name="send1" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                  <button  type="button" class="exitEdit1" onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                                </form>
                              </div>
                            </div>
                        <!-- <span class="span2"><?php #echo $a['fname'].' '.$a['lname'].'<br>'; ?> </span> <span id="alter"><span class="fa fa-edit edit" title="edit"></span><span class="fa fa-trash del" title="delete"></span></span> -->
                          </div>

                          <div class="well4student-details list">
                            <span class="span1">Reg Number</span>
                            <span  id="<?php echo $a['telephone']?>" >
                             <span class="span2"> <?php echo $a['regNumber'].'<br>'; ?> </span>
                             <span class="fa fa-edit edit changingedit2 " onclick="editthisRow(<?php echo $a['telephone']  ?>)" title="edit"></span>
                           </span>
                             <span> <?php $a['enrollDate']  ?> </span>
                            <div id="editing2" class="rowl">
                              <div class="col-s"  id="<?php echo 'close'.$a['idNo']  ?>">
                                <form id="form-submit" method="post">
                                  <input type="text" id="name2" name="name2"  placeholder="<?php echo $a['regNumber'] ?>" required>
                                  <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                 <input type="submit" name="send2" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                 <button type="button" class="exitEdit2"  onclick="hideform('<?php echo $a['telephone']  ?>')">&times;</button>
                               </form>
                             </div>
                           </div>
                           </div>
                          <div class="well4student-details list">
                            <span class="span1">course</span>
                            <span id="<?php echo $a['idNo']?>" >
                               <span class="span2"><?php echo $a['course'].'<br>'; ?></span>
                               <span class="fa fa-edit edit changingedit3" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit"></span>
                           </span>
                             <span> <?php $a['enrollDate']  ?> </span>
                            <div id="editing3" class="rowl">
                              <div class="col-s"  id="<?php echo 'close'.$a['idNo']  ?>">
                                <form id="form-submit" method="post">
                                  <input type="text" id="name2" name="name2"  placeholder="<?php echo $a['course'] ?>" required>
                                  <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                 <input type="submit" name="send2" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                 <button type="button" class="exitEdit3"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                               </form>
                             </div>
                           </div>
                           </div>
                          <div class="well4student-details list">
                            <span class="span1">postal address</span>
                            <span id="<?php echo $a['idNo']?>" >
                             <span class="span2"><?php echo $a['pAddress'].'<br>'; ?></span>
                             <span class="fa fa-edit edit changingedit4" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit"></span>
                           </span>
                             <span> <?php $a['enrollDate']  ?> </span>
                            <div id="editing4" class="rowl">
                              <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                                <form id="form-submit" method="post">
                                  <input type="text" id="name3" name="name3"  placeholder="<?php echo $a['pAddress'] ?>" required>
                                 <input type="submit" name="send3" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                 <button type="button" class="exitEdit4"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                               </form>
                             </div>
                           </div>
                           </div>
                          <div class="well4student-details list">
                            <span class="span1">postal code</span>
                            <span id="<?php echo $a['idNo']?>" >
                            <span class="span2"><?php echo $a['pCode'].'<br>'; ?></span>
                            <span class="fa fa-edit edit changingedit5" title="edit"></span>
                          </span>
                            <span> <?php $a['enrollDate']  ?> </span>
                           <div id="editing5" class="rowl">
                             <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                               <form id="form-submit" method="post">
                                 <input type="text" id="name4" name="name4"  placeholder="<?php echo $a['pCode'] ?>" required>
                                 <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                <input type="submit" name="send4" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                <button type="button" class="exitEdit5"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                              </form>
                            </div>
                          </div>
                          </div>
                          <div class="well4student-details list">
                            <span class="span1">Town or City</span>
                            <span id="<?php echo $a['idNo']?>" >
                             <span class="span2"><?php echo $a['town'].'<br>'; ?></span>
                             <span class="fa fa-edit edit changingedit6" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit"></span>
                           </span>
                             <span> <?php $a['enrollDate']  ?> </span>
                            <div id="editing6" class="rowl">
                              <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                                <form id="form-submit" method="post">
                                  <input type="text" id="name5" name="name5"  placeholder="<?php echo $a['town'] ?>" required>
                                  <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                 <input type="submit" name="send5" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                 <button type="button" class="exitEdit6"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                               </form>
                             </div>
                           </div>
                          </div>
                          <div class="well4student-details list">
                            <span class="span1">constituency</span>
                            <span id="<?php echo $a['idNo']?>" >
                               <span class="span2"><?php echo $a['constituency'].'<br>'; ?></span>
                               <span class="fa fa-edit edit changingedit7" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit">
                             </span>
                               <span> <?php $a['enrollDate']  ?> </span>
                              <div id="editing7" class="rowl">
                                <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                                  <form id="form-submit" method="post">
                                    <input type="text" id="name6" name="name6"  placeholder="<?php echo $a['constituency'] ?>" required>
                                    <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                   <input type="submit" name="send6" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                   <button type="button" class="exitEdit7"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                                 </form>
                               </div>
                             </div>
                          </div>
                          <div class="well4student-details list">
                            <span class="span1">county</span>
                            <span id="<?php echo $a['idNo']?>" >
                               <span class="span2"><?php echo $a['county'].'<br>'; ?></span>
                               <span class="fa fa-edit edit changingedit8" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit"></span>
                             </span>
                             <span> <?php $a['enrollDate']  ?> </span>
                            <div id="editing8" class="rowl">
                              <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                                <form id="form-submit" method="post">
                                  <input type="text" id="name7" name="name7"  placeholder="<?php echo $a['county'] ?>" required>
                                  <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                 <input type="submit" name="send7" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                 <button type="button" class="exitEdit8"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                               </form>
                             </div>
                           </div>
                          </div>
                          <div class="well4student-details list">
                            <span class="span1">country</span>
                            <span id="<?php echo $a['idNo']?>" >
                              <span class="span2"><?php echo $a['country'].'<br>'; ?></span>
                              <span class="fa fa-edit edit changingedit9" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit"></span>
                            </span>
                            <span> <?php $a['enrollDate']  ?> </span>
                           <div id="editing9" class="rowl">
                             <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                               <form id="form-submit" method="post">
                                 <input type="text" id="name8" name="name8"  placeholder="<?php echo $a['country'] ?>" required>
                                 <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                <input type="submit" name="send8" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                <button type="button" class="exitEdit9"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                              </form>
                            </div>
                          </div>
                          </div>
                          <div class="well4student-details list">
                            <span class="span1">Telephone</span>
                            <span id="<?php echo $a['idNo']?>" >
                              <span class="span2"><?php echo $a['telephone'].'<br>'; ?></span>
                              <span class="fa fa-edit edit changingedit10" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit"></span>
                           </span>
                            <span> <?php $a['enrollDate']  ?> </span>
                           <div id="editing10" class="rowl">
                             <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                               <form id="form-submit" method="post">
                                 <input type="text" id="name9" name="name9"  placeholder="<?php echo $a['telephone'] ?>" required>
                                 <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                <input type="submit" name="send9" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                <button type="button" class="exitEdit10"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                              </form>
                            </div>
                          </div>
                          </div>
                          <div class="well4student-details list">
                            <span class="span1">Email</span>
                            <span id="<?php echo $a['idNo']?>" >
                               <span class="span2"><?php echo $a['email'].'<br>'; ?></span>
                               <span class="fa fa-edit edit changingedit11" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit"></span>
                             </span>
                             <span> <?php $a['enrollDate']  ?> </span>
                            <div id="editing11" class="rowl">
                              <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                                <form id="form-submit" method="post">
                                  <input type="text" id="name10" name="name10"  placeholder="<?php echo $a['email'] ?>" required>
                                  <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                 <input type="submit" name="send10" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                 <button type="button" class="exitEdit11"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                               </form>
                             </div>
                           </div>
                          </div>
                          <div class="well4student-details list">
                            <span class="span1">Birth Date</span>
                            <span id="<?php echo $a['idNo']?>" >
                               <span class="span2"><?php echo $a['bornday'].'<br>'; ?></span>
                                <span class="fa fa-edit edit changingedit12" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit">
                              </span>
                             <span> <?php $a['enrollDate']  ?> </span>
                            <div id="editing12" class="rowl">
                              <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                                <form id="form-submit" method="post">
                                  <input type="text" id="name11" name="name11"  placeholder="<?php echo $a['bornday'] ?>" required>
                                  <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                 <input type="submit" name="send11" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                 <button type="button" class="exitEdit12"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                               </form>
                             </div>
                           </div>
                          </div>
                          <div class="well4student-details list">
                            <span class="span1">Gender</span>
                            <span id="<?php echo $a['idNo']?>" >
                               <span class="span2"><?php echo $a['gender'].'<br>'; ?></span>
                               <span class="fa fa-edit edit changingedit13" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit"></span>
                            </span>
                             <span> <?php $a['enrollDate']  ?> </span>
                            <div id="editing13" class="rowl">
                              <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                                <form id="form-submit" method="post">
                                  <input type="text" id="name12" name="name12"  placeholder="<?php echo $a['gender'] ?>" required>
                                  <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                 <input type="submit" name="send12" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                 <button type="button" class="exitEdit13"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                               </form>
                             </div>
                           </div>
                          </div>
                          <div class="well4student-details list">
                            <span class="span1">Marital Status</span>
                            <span id="<?php echo $a['idNo']?>" >
                              <span class="span2"><?php echo $a['mstatus'].'<br>'; ?></span>
                               <span class="fa fa-edit edit changingedit14" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit"></span>
                             </span>
                            <span> <?php $a['enrollDate']  ?> </span>
                           <div id="editing14" class="rowl">
                             <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                               <form id="form-submit" method="post">
                                 <input type="text" id="name13" name="name13"  placeholder="<?php echo $a['mstatus'] ?>" required>
                                 <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                <input type="submit" name="send13" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                <button type="button" class="exitEdit14"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                              </form>
                            </div>
                          </div>
                          </div>
                          <div class="well4student-details list">
                            <span class="span1">Religion</span>
                            <span id="<?php echo $a['idNo']?>" >
                              <span class="span2"><?php echo $a['religion'].'<br>'; ?></span>
                              <span class="fa fa-edit edit changingedit15" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit"></span>
                            </span>
                            <span> <?php $a['enrollDate']  ?> </span>
                           <div id="editing15" class="rowl">
                             <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                               <form id="form-submit" method="post">
                                 <input type="text" id="name14" name="name14"  placeholder="<?php echo $a['religion'] ?>" required>
                                 <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                <input type="submit" name="send14" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                <button type="button" class="exitEdit15"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                              </form>
                            </div>
                          </div>
                          </div>
                          <div class="well4student-details list">
                            <span class="span1">Nationality</span>
                            <span id="<?php echo $a['idNo']?>" >
                              <span class="span2"><?php echo $a['nationality'].'<br>'; ?></span>
                              <span class="fa fa-edit edit changingedit16" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit"></span>
                            </span>
                            <span> <?php $a['enrollDate']  ?> </span>
                           <div id="editing16" class="rowl">
                             <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                               <form id="form-submit" method="post">
                                 <input type="text" id="name15" name="name15"  placeholder="<?php echo $a['nationality'] ?>" required>
                                 <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                <input type="submit" name="send15" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                <button type="button" class="exitEdit16"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                              </form>
                            </div>
                          </div>
                          </div>
                          <div class="well4student-details list">
                            <span class="span1">ID Number</span>
                            <span id="<?php echo $a['idNo']?>" >
                              <span class="span2"><?php echo $a['idNo'].'<br>'; ?></span>
                              <span class="fa fa-edit edit changingedit17" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit"></span>
                            </span>
                             <span> <?php $a['enrollDate']  ?> </span>
                            <div id="editing17" class="rowl">
                              <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                                <form id="form-submit" method="post">
                                  <input type="text" id="name16" name="name16"  placeholder="<?php echo $a['idNo'] ?>" required>
                                  <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                 <input type="submit" name="send16" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                 <button type="button" class="exitEdit17"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                               </form>
                             </div>
                           </div>
                           </div>
                          <div class="well4student-details list">
                            <span class="span1">Next Of Kin</span>
                            <span id="<?php echo $a['idNo']?>" >
                               <span class="span2"><?php echo $a['kin'].'<br>'; ?></span>
                               <span class="fa fa-edit edit changingedit18" onclick="editthisRow(<?php echo $a['idNo']  ?>)" title="edit"></span>
                             </span>
                             <span> <?php $a['enrollDate']  ?> </span>
                            <div id="editing18" class="rowl">
                              <div class="col-s" id="<?php echo 'close'.$a['idNo']  ?>">
                                <form id="form-submit" method="post">
                                  <input type="text" id="name17" name="name17"  placeholder="<?php echo $a['kin'] ?>" required>
                                  <input type="hidden" name="reg" value="<?php echo $a['regNumber']  ?>">
                                 <input type="submit" name="send17" value="update" onclick="document.getElementById('dbres').style.display='block'">
                                 <button type="button" class="exitEdit18"  onclick="hideform('<?php echo $a['idNo']  ?>')">&times;</button>
                               </form>
                             </div>
                           </div>
                          </div>
                      </div>
                      <!-- <script type="text/javascript">
                      document.getElementById()
                      a = $("span").attr('id');
                      alert(a)
                      $("fname").click(function () {
                        // var parent = this.parentElement;
                        $("#alter1").hide();
                        $("#editing1").fadeIn();
                      })
                      $(".exitEdit1").click(function () {
                        $("#editing1").fadeOut();
                        $("#alter1").show();
                      })

                      $(".changingedit2").click(function () {
                        var parent = this.parentElement;
                        $("#alter2").hide();
                        $("#editing2").fadeIn();
                      })
                      $(".exitEdit2").click(function () {
                        $("#editing2").fadeOut();
                        $("#alter2").show();
                      })

                      $(".changingedit3").click(function () {
                        var parent = this.parentElement;
                        $("#alter3").hide();
                        $("#editing3").fadeIn();
                      })
                      $(".exitEdit3").click(function () {
                        $("#editing3").fadeOut();
                        $("#alter3").show();
                      })

                      $(".changingedit4").click(function () {
                        var parent = this.parentElement;
                        $("#alter4").hide();
                        $("#editing4").fadeIn();
                      })
                      $(".exitEdit4").click(function () {
                        $("#editing4").fadeOut();
                        $("#alter4").show();
                      })
                      </script> -->
                  </div>
                <?php $y++ ; $u++;} ?>
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
                  <pre>the notices</pre>
                </div>
            </div>
          </div>
          <div class="jumbotron row" id="units">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h3>Units</h3>
              <table>
                <thead>
                  <tr>
                    <td>ID</td>
                    <td>units</td>
                    <td>Duration</td>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <div class="jumbotron row" id="comments">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h3>comments</h3>
              <div class="">
                <pre>comments here</pre>
              </div>
              <div class="">
                <p>posted by Email and name</p>
              </div>
            </div>
          </div>
          <div class="jumbotron row text-center" id="set_total_fee">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="well">
                <h4 class="text-center text-danger">Set The Total Amount To be Paid</h4>
                <form class="text-center" enctype="multipart/form-data" method="post" id="form_totalFee">
                  <input type="number" class="input-lg" name="totalamt" value="" placeholder="Enter Total Amt" disabled>
                  <input type="submit" class="input-lg" name="submitTotalAmt" value="Update Fee" id="update">
                  <?php include 'totalFee.php'; ?>
                </form>
              </div>
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
                          <option value=""></option>

                            <option value="KE">
                              Kenya
                            </option>

                            <option disabled="" value="SPACER">
                              ------
                            </option>

                            <option value="AF">
                              Afghanistan
                            </option>

                            <option value="AX">
                              Åland Islands
                            </option>

                            <option value="AL">
                              Albania
                            </option>

                            <option value="DZ">
                              Algeria
                            </option>

                            <option value="AS">
                              American Samoa
                            </option>

                            <option value="AD">
                              Andorra
                            </option>

                            <option value="AO">
                              Angola
                            </option>

                            <option value="AI">
                              Anguilla
                            </option>

                            <option value="AQ">
                              Antarctica
                            </option>

                            <option value="AG">
                              Antigua &amp; Barbuda
                            </option>

                            <option value="AR">
                              Argentina
                            </option>

                            <option value="AM">
                              Armenia
                            </option>

                            <option value="AW">
                              Aruba
                            </option>

                            <option value="AC">
                              Ascension Island
                            </option>

                            <option value="AU">
                              Australia
                            </option>

                            <option value="AT">
                              Austria
                            </option>

                            <option value="AZ">
                              Azerbaijan
                            </option>

                            <option value="BS">
                              Bahamas
                            </option>

                            <option value="BH">
                              Bahrain
                            </option>

                            <option value="BD">
                              Bangladesh
                            </option>

                            <option value="BB">
                              Barbados
                            </option>

                            <option value="BY">
                              Belarus
                            </option>

                            <option value="BE">
                              Belgium
                            </option>

                            <option value="BZ">
                              Belize
                            </option>

                            <option value="BJ">
                              Benin
                            </option>

                            <option value="BM">
                              Bermuda
                            </option>

                            <option value="BT">
                              Bhutan
                            </option>

                            <option value="BO">
                              Bolivia
                            </option>

                            <option value="BA">
                              Bosnia &amp; Herzegovina
                            </option>

                            <option value="BW">
                              Botswana
                            </option>

                            <option value="BV">
                              Bouvet Island
                            </option>

                            <option value="BR">
                              Brazil
                            </option>

                            <option value="IO">
                              British Indian Ocean Territory
                            </option>

                            <option value="VG">
                              British Virgin Islands
                            </option>

                            <option value="BN">
                              Brunei
                            </option>

                            <option value="BG">
                              Bulgaria
                            </option>

                            <option value="BF">
                              Burkina Faso
                            </option>

                            <option value="BI">
                              Burundi
                            </option>

                            <option value="KH">
                              Cambodia
                            </option>

                            <option value="CM">
                              Cameroon
                            </option>

                            <option value="CA">
                              Canada
                            </option>

                            <option value="CV">
                              Cape Verde
                            </option>

                            <option value="BQ">
                              Caribbean Netherlands
                            </option>

                            <option value="KY">
                              Cayman Islands
                            </option>

                            <option value="CF">
                              Central African Republic
                            </option>

                            <option value="TD">
                              Chad
                            </option>

                            <option value="CL">
                              Chile
                            </option>

                            <option value="CN">
                              China
                            </option>

                            <option value="CX">
                              Christmas Island
                            </option>

                            <option value="CC">
                              Cocos [Keeling] Islands
                            </option>

                            <option value="CO">
                              Colombia
                            </option>

                            <option value="KM">
                              Comoros
                            </option>

                            <option value="CG">
                              Congo - Brazzaville
                            </option>

                            <option value="CD">
                              Congo - Kinshasa
                            </option>

                            <option value="CK">
                              Cook Islands
                            </option>

                            <option value="CR">
                              Costa Rica
                            </option>

                            <option value="CI">
                              Côte d’Ivoire
                            </option>

                            <option value="HR">
                              Croatia
                            </option>

                            <option value="CW">
                              Curaçao
                            </option>

                            <option value="CY">
                              Cyprus
                            </option>

                            <option value="CZ">
                              Czechia
                            </option>

                            <option value="DK">
                              Denmark
                            </option>

                            <option value="DJ">
                              Djibouti
                            </option>

                            <option value="DM">
                              Dominica
                            </option>

                            <option value="DO">
                              Dominican Republic
                            </option>

                            <option value="EC">
                              Ecuador
                            </option>

                            <option value="EG">
                              Egypt
                            </option>

                            <option value="SV">
                              El Salvador
                            </option>

                            <option value="GQ">
                              Equatorial Guinea
                            </option>

                            <option value="ER">
                              Eritrea
                            </option>

                            <option value="EE">
                              Estonia
                            </option>

                            <option value="ET">
                              Ethiopia
                            </option>

                            <option value="FK">
                              Falkland Islands [Islas Malvinas]
                            </option>

                            <option value="FO">
                              Faroe Islands
                            </option>

                            <option value="FJ">
                              Fiji
                            </option>

                            <option value="FI">
                              Finland
                            </option>

                            <option value="FR">
                              France
                            </option>

                            <option value="GF">
                              French Guiana
                            </option>

                            <option value="PF">
                              French Polynesia
                            </option>

                            <option value="TF">
                              French Southern Territories
                            </option>

                            <option value="GA">
                              Gabon
                            </option>

                            <option value="GM">
                              Gambia
                            </option>

                            <option value="GE">
                              Georgia
                            </option>

                            <option value="DE">
                              Germany
                            </option>

                            <option value="GH">
                              Ghana
                            </option>

                            <option value="GI">
                              Gibraltar
                            </option>

                            <option value="GR">
                              Greece
                            </option>

                            <option value="GL">
                              Greenland
                            </option>

                            <option value="GD">
                              Grenada
                            </option>

                            <option value="GP">
                              Guadeloupe
                            </option>

                            <option value="GU">
                              Guam
                            </option>

                            <option value="GT">
                              Guatemala
                            </option>

                            <option value="GG">
                              Guernsey
                            </option>

                            <option value="GN">
                              Guinea
                            </option>

                            <option value="GW">
                              Guinea-Bissau
                            </option>

                            <option value="GY">
                              Guyana
                            </option>

                            <option value="HT">
                              Haiti
                            </option>

                            <option value="HM">
                              Heard &amp; McDonald Islands
                            </option>

                            <option value="HN">
                              Honduras
                            </option>

                            <option value="HK">
                              Hong Kong
                            </option>

                            <option value="HU">
                              Hungary
                            </option>

                            <option value="IS">
                              Iceland
                            </option>

                            <option value="IN">
                              India
                            </option>

                            <option value="ID">
                              Indonesia
                            </option>

                            <option value="IR">
                              Iran
                            </option>

                            <option value="IQ">
                              Iraq
                            </option>

                            <option value="IE">
                              Ireland
                            </option>

                            <option value="IM">
                              Isle of Man
                            </option>

                            <option value="IL">
                              Israel
                            </option>

                            <option value="IT">
                              Italy
                            </option>

                            <option value="JM">
                              Jamaica
                            </option>

                            <option value="JP">
                              Japan
                            </option>

                            <option value="JE">
                              Jersey
                            </option>

                            <option value="JO">
                              Jordan
                            </option>

                            <option value="KZ">
                              Kazakhstan
                            </option>

                            <option value="KE">
                              Kenya
                            </option>

                            <option value="KI">
                              Kiribati
                            </option>

                            <option value="XK">
                              Kosovo
                            </option>

                            <option value="KW">
                              Kuwait
                            </option>

                            <option value="KG">
                              Kyrgyzstan
                            </option>

                            <option value="LA">
                              Laos
                            </option>

                            <option value="LV">
                              Latvia
                            </option>

                            <option value="LB">
                              Lebanon
                            </option>

                            <option value="LS">
                              Lesotho
                            </option>

                            <option value="LR">
                              Liberia
                            </option>

                            <option value="LY">
                              Libya
                            </option>

                            <option value="LI">
                              Liechtenstein
                            </option>

                            <option value="LT">
                              Lithuania
                            </option>

                            <option value="LU">
                              Luxembourg
                            </option>

                            <option value="MO">
                              Macau
                            </option>

                            <option value="MK">
                              Macedonia [FYROM]
                            </option>

                            <option value="MG">
                              Madagascar
                            </option>

                            <option value="MW">
                              Malawi
                            </option>

                            <option value="MY">
                              Malaysia
                            </option>

                            <option value="MV">
                              Maldives
                            </option>

                            <option value="ML">
                              Mali
                            </option>

                            <option value="MT">
                              Malta
                            </option>

                            <option value="MH">
                              Marshall Islands
                            </option>

                            <option value="MQ">
                              Martinique
                            </option>

                            <option value="MR">
                              Mauritania
                            </option>

                            <option value="MU">
                              Mauritius
                            </option>

                            <option value="YT">
                              Mayotte
                            </option>

                            <option value="MX">
                              Mexico
                            </option>

                            <option value="FM">
                              Micronesia
                            </option>

                            <option value="MD">
                              Moldova
                            </option>

                            <option value="MC">
                              Monaco
                            </option>

                            <option value="MN">
                              Mongolia
                            </option>

                            <option value="ME">
                              Montenegro
                            </option>

                            <option value="MS">
                              Montserrat
                            </option>

                            <option value="MA">
                              Morocco
                            </option>

                            <option value="MZ">
                              Mozambique
                            </option>

                            <option value="MM">
                              Myanmar [Burma]
                            </option>

                            <option value="NA">
                              Namibia
                            </option>

                            <option value="NR">
                              Nauru
                            </option>

                            <option value="NP">
                              Nepal
                            </option>

                            <option value="NL">
                              Netherlands
                            </option>

                            <option value="NC">
                              New Caledonia
                            </option>

                            <option value="NZ">
                              New Zealand
                            </option>

                            <option value="NI">
                              Nicaragua
                            </option>

                            <option value="NE">
                              Niger
                            </option>

                            <option value="NG">
                              Nigeria
                            </option>

                            <option value="NU">
                              Niue
                            </option>

                            <option value="NF">
                              Norfolk Island
                            </option>

                            <option value="MP">
                              Northern Mariana Islands
                            </option>

                            <option value="NO">
                              Norway
                            </option>

                            <option value="OM">
                              Oman
                            </option>

                            <option value="PK">
                              Pakistan
                            </option>

                            <option value="PW">
                              Palau
                            </option>

                            <option value="PS">
                              Palestine
                            </option>

                            <option value="PA">
                              Panama
                            </option>

                            <option value="PG">
                              Papua New Guinea
                            </option>

                            <option value="PY">
                              Paraguay
                            </option>

                            <option value="PE">
                              Peru
                            </option>

                            <option value="PH">
                              Philippines
                            </option>

                            <option value="PN">
                              Pitcairn Islands
                            </option>

                            <option value="PL">
                              Poland
                            </option>

                            <option value="PT">
                              Portugal
                            </option>

                            <option value="PR">
                              Puerto Rico
                            </option>

                            <option value="QA">
                              Qatar
                            </option>

                            <option value="RE">
                              Réunion
                            </option>

                            <option value="RO">
                              Romania
                            </option>

                            <option value="RU">
                              Russia
                            </option>

                            <option value="RW">
                              Rwanda
                            </option>

                            <option value="WS">
                              Samoa
                            </option>

                            <option value="SM">
                              San Marino
                            </option>

                            <option value="ST">
                              São Tomé &amp; Príncipe
                            </option>

                            <option value="SA">
                              Saudi Arabia
                            </option>

                            <option value="SN">
                              Senegal
                            </option>

                            <option value="RS">
                              Serbia
                            </option>

                            <option value="SC">
                              Seychelles
                            </option>

                            <option value="SL">
                              Sierra Leone
                            </option>

                            <option value="SG">
                              Singapore
                            </option>

                            <option value="SX">
                              Sint Maarten
                            </option>

                            <option value="SK">
                              Slovakia
                            </option>

                            <option value="SI">
                              Slovenia
                            </option>

                            <option value="SB">
                              Solomon Islands
                            </option>

                            <option value="SO">
                              Somalia
                            </option>

                            <option value="ZA">
                              South Africa
                            </option>

                            <option value="GS">
                              South Georgia &amp; South Sandwich Islands
                            </option>

                            <option value="KR">
                              South Korea
                            </option>

                            <option value="SS">
                              South Sudan
                            </option>

                            <option value="ES">
                              Spain
                            </option>

                            <option value="LK">
                              Sri Lanka
                            </option>

                            <option value="BL">
                              St. Barthélemy
                            </option>

                            <option value="SH">
                              St. Helena
                            </option>

                            <option value="KN">
                              St. Kitts &amp; Nevis
                            </option>

                            <option value="LC">
                              St. Lucia
                            </option>

                            <option value="MF">
                              St. Martin
                            </option>

                            <option value="PM">
                              St. Pierre &amp; Miquelon
                            </option>

                            <option value="VC">
                              St. Vincent &amp; Grenadines
                            </option>

                            <option value="SR">
                              Suriname
                            </option>

                            <option value="SJ">
                              Svalbard &amp; Jan Mayen
                            </option>

                            <option value="SZ">
                              Swaziland
                            </option>

                            <option value="SE">
                              Sweden
                            </option>

                            <option value="CH">
                              Switzerland
                            </option>

                            <option value="TW">
                              Taiwan
                            </option>

                            <option value="TJ">
                              Tajikistan
                            </option>

                            <option value="TZ">
                              Tanzania
                            </option>

                            <option value="TH">
                              Thailand
                            </option>

                            <option value="TL">
                              Timor-Leste
                            </option>

                            <option value="TG">
                              Togo
                            </option>

                            <option value="TK">
                              Tokelau
                            </option>

                            <option value="TO">
                              Tonga
                            </option>

                            <option value="TT">
                              Trinidad &amp; Tobago
                            </option>

                            <option value="TA">
                              Tristan da Cunha
                            </option>

                            <option value="TN">
                              Tunisia
                            </option>

                            <option value="TR">
                              Turkey
                            </option>

                            <option value="TM">
                              Turkmenistan
                            </option>

                            <option value="TC">
                              Turks &amp; Caicos Islands
                            </option>

                            <option value="TV">
                              Tuvalu
                            </option>

                            <option value="UM">
                              U.S. Outlying Islands
                            </option>

                            <option value="VI">
                              U.S. Virgin Islands
                            </option>

                            <option value="UG">
                              Uganda
                            </option>

                            <option value="UA">
                              Ukraine
                            </option>

                            <option value="AE">
                              United Arab Emirates
                            </option>

                            <option value="GB">
                              United Kingdom
                            </option>

                            <option value="US">
                              United States
                            </option>

                            <option value="UY">
                              Uruguay
                            </option>

                            <option value="UZ">
                              Uzbekistan
                            </option>

                            <option value="VU">
                              Vanuatu
                            </option>

                            <option value="VA">
                              Vatican City
                            </option>

                            <option value="VE">
                              Venezuela
                            </option>

                            <option value="VN">
                              Vietnam
                            </option>

                            <option value="WF">
                              Wallis &amp; Futuna
                            </option>

                            <option value="EH">
                              Western Sahara
                            </option>

                            <option value="YE">
                              Yemen
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
                      <input type="text" name="course" class="input-lg"> <br>
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
                        <option >Select Gender</option>
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
                        <option>Select Religion</option>
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
<div>div (parent)
  <p>p</p>
  <span id="spanii">span</span>
  <h2>h2</h2>
  <h3>h3</h3>
  <p>p</p>
</div>
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

<!-- Javascripts
    ================================================== -->
<script>



function loadPhp() {
  <?php include 'update_student.php';?>
}
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
