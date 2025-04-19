
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
	<link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="./assets/css/min.css">
	<link rel="stylesheet" href="./assets/css/select_image.css">
	<link rel="stylesheet" href="./assets/css/change_image.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="assets/img/favcion.png" />
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<!-- <title>Moviepoint</title> -->

</head>

<body class="body">
	
	<!-- ========================================================= -->
	<div class="body2">
	<div class="sign section--bg" data-bg="assets/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form action="" method="post" enctype="multipart/form-data" class="sign__form">
							<a href="#" class="sign__logo">
								<img src="assets/img/logo.png" alt="">
							</a>

								<label class="select_image">
								<input type="file" name="img" hidden id="img" required>
								<img src="./assets/img/user-image1.png" alt="">
							</label>
							<br>
							<div class="sign__group">
								<input type="text" class="sign__input" name="name" placeholder="Name">
							</div>

							<div class="sign__group">
								<input type="text" class="sign__input" name="email" placeholder="Email">
							</div>

							<div class="sign__group">
								<span class="sign__text"> <a href="#">Enter 8 digit strong Password</a></span><br>
								<br>
								<input type="password" class="sign__input" name="password" placeholder="Password">
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
							</div>

							<input type="submit" class="sign__btn" name="submit" value="Sign up">

							<span class="sign__text">Already have an account? <a href="login.php">Sign in!</a></span>
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>
	
	</div>
	<!-- JS -->
	<!-- <script src="js/jquery-3.3.1.min.js"></script>
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
	 -->
	<!-- jquery main JS -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick nav JS -->
	<script src="assets/js/jquery.slicknav.min.js"></script>
	<!-- owl carousel JS -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Popup JS -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Isotope JS -->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- main JS -->
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php
// error_reporting(0);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conect.php';
session_start();
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$imgname = $_FILES['img']['name'];
$tmp = $_FILES['img']['tmp_name'];
$des = 'images/' . $imgname;
// $des = 'dashboard/images/' . $imgname;
// $_SESSION['img'] = 'images/' . $imgname;


print_r($imgname);
if(move_uploaded_file($tmp,$des)){
	$_SESSION['img'] = $des;
}
else{
	"<script> alert('Please select an image'); </script>";
}

$select1 = " SELECT * FROM `login` WHERE username = '$name' && email = '$email'";
	
$result = mysqli_query($connection, $select1);
	
	if (mysqli_num_rows($result) > 0) {
		echo "<script>alert('User already exists!');</script>";
	} else {
		$insert = "INSERT INTO `login` (`id`, `username`, `email`, `password`, `userimage`) VALUES (NULL, '$name', '$email', '$password', '$imgname')";
		$insert_result = mysqli_query($connection, $insert);
		

		if ($insert_result) {
			echo "<script>alert('Successfully registered!'); window.location = 'login.php';</script>";
		} else {
			echo "Error while inserting data.";
		}
	}
}
?>