
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<!-- <link rel="stylesheet" href="css/style.css" /> -->
<!-- Bootstrap Core CSS -->
<link href="./../the_dashboard/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="./../the_dashboard/css/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="./../the_dashboard/css/startmin.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="./../the_dashboard/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<?php
	require('./../the_dashboard/pages/php/conn.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){

			function validateStudent($name){
			  $name = trim($name);
			  $name = stripslashes($name);
			  $name = htmlspecialchars($name);
			  return $name;
			}

			$username = validateStudent($_POST['username']);
		  $password = validateStudent($_POST['password']);

	//Checking is user existing in the database or not
        $query = "select * from admins where username = '$username' and password ='".md5($password)."'";
		$result = $conn2->query($query) or die($conn2->error());
		$rows = $result->num_rows;
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location:./../the_dashboard/pages/index.php"); // Redirect user to index.php
            }else{
				echo "<div class='container' >
							<div class='row'>
							<div class='col-md-4 col-md-offset-4 '>
									<div class='login-panel panel panel-default' id='changeDiv'  style=' box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
											<div class='panel-heading'>
													<h3 class='panel-title'>Username Or Password is Incorrect.</h3>
												</div>
												<div class='panel-body'>
												<h1 class='text-center'>Click Here To <br> <br>
												<a class='btn btn-lg btn-success btn-block' href='login.php'>Login</a><h1>

												</div>
									</div>
									</div>
							</div>
							</div>";
				}
    }else{
?>


<div class="container" >
		<div class="row" >
				<div class="col-md-4 col-md-offset-4">
						<div class="login-panel panel panel-default" id="changeDiv" style=' box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
								<div class="panel-heading">
										<h3 class="panel-title text-center" style="font-weight:bold">Please Log In</h3>
								</div>
								<div class="panel-body">
										<form role="form" name="login" method="post" id="login">
												<!-- <fieldset> -->
														<div class="form-group">
																<input class="form-control " placeholder="Username" name="username" type="text" autofocus>
														</div>
														<div class="form-group">
																<input class="form-control" placeholder="Password" name="password" type="password" value="">
														</div>
														<div class="checkbox">
																<label>
																		<!-- <input name="remember" type="checkbox" value="Remember Me"> Remember Me -->
																</label>
														</div>
														<!-- Change this to a button or input when using this as a form -->
														<button type="submit"  class="btn btn-lg btn-success btn-block">Login</button><br>
												<!-- </fieldset> -->
										</form> <br>
										<div class="well">
											<h3 style="color:blue;" class="text-center">Not Regestered? </h3>
											<a href="registration.php" class="btn btn-lg btn-danger btn-block">Regester</a>

										</div>
								</div>
						</div>
				</div>
		</div>
</div>

<!-- jQuery -->
<script src="./../the_dashboard/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./../the_dashboard/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="./../the_dashboard/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="./../the_dashboard/js/startmin.js"></script>




<!-- <div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p> -->

<br /><br />

</div>
<?php } ?>


</body>
</html>
