
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
    // If form submitted, insert values into the database.
		function validateStudent($name){
			$name = trim($name);
			$name = stripslashes($name);
			$name = htmlspecialchars($name);
			return $name;
		}
    if (isset($_REQUEST['username'])){
		$username = validateStudent($_REQUEST['username']); // removes backslashes
		$email = validateStudent($_REQUEST['email']);
		$password = validateStudent($_REQUEST['password']);
		$password_hash = md5($password);
		$admin_userpass = validateStudent($_REQUEST['admin_userpass']);
		$password_hash_admin = md5($admin_userpass);


		$get_admin = $conn2->query("select username, email, password from admins where id = '1'");

		if($aa = $get_admin->fetch_assoc()){
			$aa_user_admin = $aa['username'];
			$aa_admin_email = $aa['email'];
			$aa_admin_pass = $aa['password'];

		}

		if ($aa_admin_pass == $password_hash_admin) {
			# code...
			$trn_date = date("Y-m-d H:i:s");

			$query = "INSERT into `admins` (username, password, email, trn_date) VALUES ('$username', '$password_hash', '$email', '$trn_date')";
			$result = $conn2->query($query);
			if($result){
				 echo '
				<div class="container" >
						<div class="row" >
						<div class="col-md-4 col-md-offset-4">
								<div class="well"  style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-top:25%">
								<h1 class="text-center">Succesfully Regestered</h1> <br><br>
								<h3 style="color:blue;" class="text-center">Enter Your Credentials? </h3>
								<a href="login.php" class="btn btn-lg btn-danger btn-block">Log In.</a>
								</div>
							</div>
							</div>
					</div>';;
			}
		}else {
			echo '
			<div class="container" >
					<div class="row" >
					<div class="col-md-4 col-md-offset-4">
							<div class="well"  style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-top:25%">
							<h1 class="text-center">Get Authorisation From Admin</h1> <br><br>
							<h3 style="color:blue;" class="text-center">Got Authorised? </h3>
							<a href="registration.php" class="btn btn-lg btn-danger btn-block">Regester</a>
							</div>
						</div>
						</div>
				</div>';
		}
	}else{

		?>




<div class="container" >
		<div class="row" >
				<div class="col-md-4 col-md-offset-4">
						<div class="login-panel panel panel-default" id="changeDiv" style=' box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
								<div class="panel-heading">
										<h3 class="panel-title text-center" style="font-weight:bold"> Registration</h3>
								</div>
								<div class="panel-body">
										<form role="form" name="registration" method="post">
												<!-- <fieldset> -->
												<div class="form-group">
														<input class="form-control " placeholder="Enter Admins Key to Authorise" name="admin_userpass" type="password" autofocus required/>
												</div>
														<div class="form-group">
																<input class="form-control " placeholder="Username" name="username" type="text" autofocus required/>
														</div>
														<div class="form-group">
																<input class="form-control " placeholder="E-Mail" name="email" type="email" autofocus required/>
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
														<button type="submit"  class="btn btn-lg btn-success btn-block">Register</button><br>
												<!-- </fieldset> -->
										</form> <br>
										<div class="well">
											<h3 style="color:blue;" class="text-center">Want To Log In? </h3>
											<a href="login.php" class="btn btn-lg btn-danger btn-block">LOG IN</a>

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

<?php } ?>
</body>
</html>
