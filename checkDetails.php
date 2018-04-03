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
<link rel="stylesheet" type="text/css"  href="css/index.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

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
      <a class="navbar-brand" href="index.html"><i class="fa fa-sun-o"></i>CollegeName<strong></strong></a> </div>

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
<?php

 ?>
<!-- About Section -->
<div id="about-section">
  <div class="container">
    <div class="section-title jumbotron text-center center">
      <h2>HI</h2>
      <hr>
      <div class="clearfix"></div>
      <h2 id="Insert">Insert The Data of The Client Down Below.</h2>
    </div>
    <div class="row">
      <!-- <div class="col-md-6"> <img src="img/about.jpg" class="img-responsive"> </div> -->
      <div class="col-md-6 col-lg-12 center">
        <div class="">
          <?php
          require 'connectDb.php';
          $today = date('d/m/Y');
          echo $today;
          ?>
          <form class="text-center" enctype="multipart/form-data"  method="post" id="form_check">
            <h2 class="text-center text-info">Check Fees Details of the Client</h2>
            <label id="labelRegNo" class="text-center">Enter Regestration Number</label> <br>
            <input class="input-lg" type="text" name="regNo" placeholder="Enter Reg No" onclick="" required>
            <input class="input-lg" type="submit" name="submit" value="send" id="getStudInfo" >
          </form>
          <?php ?>
        </div><br>
        <div id="detailsId">
            <?php include 'studDetails.php'; ?>
        </div>
        <div class="well">
          <h2 class="well text-center"><a href="updateInfo.php"> Update Fee</a><h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="footer" style="background-color:#80ffe5;">
  <div class="container">
    <div class="fnav well text-center" style="background-color:#80ffe5 !important;">
      <p>Copyright &copy; COLLEGE NAME</p>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript"src="js/index.js">

</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>

<!-- Javascripts
    ================================================== -->
<script>
// function loadContentsAsyc(whereToPlaceData, theFile){
//       if (window.XMLHttpRequest) {
//         xmlHttp = new XMLHttpRequest();
//       } else {
//         xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
//       }
//       xmlHttp.onreadystatechange = function () {
//         if ( xmlHttp.readyState == 4 && xmlHttp.status == 200 ){
//           document.getElementById(whereToPlaceData).innerHTML = xmlHttp.responseText;
//         }
//       };
//       xmlHttp.open('GET', theFile, true);
//       xmlHttp.send();
//     }
</script>
</body>
</html>
