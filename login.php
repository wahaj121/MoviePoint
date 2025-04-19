<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie Point</title>
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet"> 

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="./assets/css/min.css">


	<!-- Favicons -->
	<link rel="icon" type="image/png" href="assets/img/favcion.png" />
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">

</head>
<body class="body">

	<div class="sign section--bg" data-bg="assets/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form action="" method="post" class="sign__form">
							<a href="index.php" class="sign__logo">
								<img src="assets/img/logo.png" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" name="username" placeholder="Username">
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" name="password" placeholder="Password">
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">Remember Me</label>
							</div>
							
							<input type="submit" class="sign__btn" value="Sign in">

							<span class="sign__text">Don't have an account? <a href="signup.php	">Sign up!</a></span>

							<span class="sign__text"><a href="#">Forgot password?</a></span>
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conect.php';
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * FROM `login` WHERE username='$username' AND password='$password'";
	$result=mysqli_query($connection,$sql);
	$row=mysqli_fetch_array($result);
	
	// $_SESSION['username']=$username;
	// if ($username === 'wahaj' && $password === '123')  { // Replace 'admin@example.com' with the admin's email
	// 	header('location: ./dashboard/index.php'); // Redirect admin to admin dashboard
	//   } 
	//   elseif ($username === 'bilal' && $password === '1234') {
	// 	header('location:./dashboard/index.php'); // Redirect user to user dashboard
	//   }
	//   else{
	// 	header('location: ./index.php');
	//   }
	//   exit;
	  
	if($row['usertype']=="user")
	{
		$_SESSION['username']=$username;
		header("location:./index.php");
	}
	elseif($row['usertype']=="admin")
	{
		$_SESSION['username']=$username;
		header("location:dashboard/dashboard.php");
	}
	else
	{
		echo "Invalid username or password";
	}
}





?>
