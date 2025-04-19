<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie Point</title>
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION['username'])) {
    header("location: ./login.php");
}

include 'conect.php';
$rows = mysqli_query($connection, "SELECT userimage FROM `login` WHERE username = '" . $_SESSION['username'] . "'");

?>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="assets/css/1bootstrap.min.css" media="all" />
	<!-- Slick nav CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
	<!-- Iconfont CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
	<!-- Owl carousel CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<!-- Popup CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<!-- Main style CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
	<!-- Responsive CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
    <title></title>
</head>
<body>
<header class="header">
		<div class="container">
			<div class="header-area">
				<div class="logo">
					<a href="index.php"><img src="assets/img/logo.png" alt="logo" /></a>
				</div>
                
				<div class="header-right">
                <form action="#">
						<select>
							<option value="Movies">Movies</option>
							<option value="Movies">Tralers</option>
							<!-- <option value="Movies"> </option> -->
						</select>
						<input type="text" />
						<button><i class="icofont icofont-search"></i></button>
					</form>
                <ul style="color: white;margin-left: 20px">
						<a href="#">
							<?php 
						while ($row = mysqli_fetch_assoc($rows)) {
							echo '<img src="images/' . $row['userimage'] . '" style="width: 40px;height: 40px;border-radius: 50%; title="' . $row['userimage'] . '">';
						}
						?>
						</a>
						&nbsp;&nbsp;
						<?php echo $_SESSION['username']; ?>
						<li><a class="" href="logout.php"></i>Logout</a></li>
					</ul>  

				</div>
				<div class="menu-area">
                    <div class="responsive-menu"></div>
					<div class="mainmenu">
						<ul id="primary-menu">
                            <li><a class="active" href="index.php">Home</a></li>
							<li><a href="movies.php">Movies</a></li>
							<li><a href="celebrities.php">CelebritiesList</a></li>
							<li><a href="top-movies.php">Top Movies</a></li>
							<li><a href="blog.php">News</a></li>
                            <li><a href="#">Dashboard</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	
</body>
</html>