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
<link rel="stylesheet" type="text/css" href="fontAwesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css"  href="css/updateInfo.css">

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
<body>
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
      <h2>Insert The Data of The Client Down Below.</h2>
    </div>
    <div class="row">
      <!-- <div class="col-md-6"> <img src="img/about.jpg" class="img-responsive"> </div> -->
      <div class="col-md-6 col-lg-12 center">
        <div class="">
          <?php
          require 'connectDb.php';

          ?>
          <div class="jumbotron" id="showSuccess" style = "display:none;">
            <h3 class="text-center">Update Was Succesfully</h3>
          </div>
        <div class="bg-info details well" style="background-color:#ddddee">
                <h3 class="text-center">DETAILS:</h3>
                <h2 class="text-center">Update Student Fee Amount</h2>
                <form class="" enctype="multipart/form-data" method="post" id="form_update">
                    <label class="text-danger">Enter Reg Number to Update: </label><br>
                    <input type="text" class="input-lg" name="regNo1" placeholder="Enter Reg Number" ><br>
                    <label>Amount Paid: </label>
                    <input class="form-control  input-lg" type="number" name="amountPaid" placeholder="Enter amountPaid"><br>
                    <label for="firstName">Payment Mode: </label>
                    <select class="btn-lg" name="select">
                      <option>Mode of Payment</option>
                      <option value="bank">Bank</option>
                      <option value="m-pesa">M-pesa</option>
                    </select><br>
                    <input class="input-lg" type="submit" name="submit1" value="submit" id="updateStudInfo">
                </form>
                <br>
                <div id="detailsId1">
                    <?php include 'updatestudDetails.php';?>
                </div>
                <div class="well text-center" id="getReceipt">
                  <form  method="post" action="pdfdoc.php">
                    <label> Get Receipt for This Student  <span class="fa fa-file-pdf-o" style="font-size:40px;color:red"></span></label><br>
                    <input type="text" class="btn-lg" name="studentReceipt" placeholder="Enter Reg Number" value="<?php if(isset($_POST['regNo1'])){echo $_POST['regNo1'];}?>">
                    <input type="submit" class="btn-lg" name="" value="Get Receipt">
                  </form>
                </div>
                <br>
                <div class="well">
                  <h2 class="well text-center text-danger"> <a href="checkDetails.php"> Check Client Details</a> </h2>
                </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="footer" style="background-color:#80ffe5;">
  <div class="container">
    <div class="fnav well text-center" style="background-color:#80ffe5;">
      <p>Copyright &copy; COLLEGE NAME</p>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript"src="js/updateInfo.js">

</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>

<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="js/main.js">
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
      xmlHttp.open('GET', theFile, true);
      xmlHttp.send();
    }
</script>
</body>
</html>
