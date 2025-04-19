<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie Point</title>
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
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
	<link rel="stylesheet" type="text/css" href="assets/css/popup.css" />
	<!-- Responsive CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
	<!-- Page loader -->
	<div id="preloader"></div>
	<?php

	error_reporting(0);

	include('conect.php');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$time = $_POST['time'];
	$seat = $_POST['seat'];
	$date = $_POST['date'];
	$theater=$_POST['theater'];

	if (array_key_exists("submit", $_POST)) {

		$select = "INSERT INTO `ticket` (`name`,`email`,`phone`,`time`,`seat`,`date`,`theater`) VALUES ('$name','$email','$phone','$time','$seat','$date','$theater')";

		$result = mysqli_query($connection, $select);

		if ($result) {
			echo "<script>alert('your ticket has been booked'); window.location = 'index.php';</script>";
		} else {
			echo "not implemented";
		}
	}
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		if (isset($_POST["movieId"])) {
			$movieId = mysqli_real_escape_string($connection, $_POST["movieId"]);
			$sql = "SELECT * FROM movies WHERE id = $movieId";
	
			$result = $connection->query($sql);		
		} 
	}
	
	include 'conect.php';

// Query to retrieve options from the database
$query = "SELECT * FROM theater";
$resultss = mysqli_query($connection, $query);

// Check for query success
if (!$resultss) {
    die("Query failed: " . mysqli_error($connection));
}


include 'header2.php';
	?>

	

	<section class="breadcrumb-area" style="background:none; margin-bottom:-37rem;">
		<div class="container" style="margin-top:-50rem;">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-area-content">
						<!-- <h1>Movie Detalied Page</h1> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- transformers area start -->
	<section class="transformers-area">
		<div class="container" style="width: 65%;">
			<div class="transformers-box">
				<div class="row flexbox-center">
					<div class="col-lg-5 text-lg-left text-center">
				<?php
				if ($result) {
				$row = $result->fetch_assoc();
				?>
						<div class="transformers-content">
							<?php  echo '<img src="./m_image/' . $row['m_image'] . '" alt="' . $row['m_image'] . '">'; ?>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="transformers-content">
							<h2><?php echo '<h2>' . $row['movie_name'] ?></h2>
							<p>3D | Animation | Action | Sci-Fi</p>
							<ul>
								<li>
									<div class="transformers-left">
										Movie:
									</div>
									<div class="transformers-right">
										<a href="#">Sci-Fic</a>
									</div>
								</li>
								<li>
									<div class="transformers-left">
										Writer:
									</div>
									<div class="transformers-right">
										Stephen McFeely, Christopher Markus
									</div>
								</li>
								<li>
									<div class="transformers-left">
										Director:
									</div>
									<div class="transformers-right">
										Joe Johnston
									</div>
								</li>
								<li>
									<div class="transformers-left">
										Time:
									</div>
									<div class="transformers-right">
										190m
									</div>
								</li>
								<li>
									<div class="transformers-left">
										Release:
									</div>
									<div class="transformers-right">
										2018-07-22
									</div>
								</li>
								<li>
									<div class="transformers-left">
										Language:
									</div>
									<div class="transformers-right">
										English, Russian
									</div>
								</li>
								<li>
									<div class="transformers-left">
										Cinema:
									</div>
									<div class="transformers-right">
										HB Movies | HW Town <a href="#" class="theme-btn">Movies House</a>Grand Seats | HB Max
										<div class="transformers-bottom">
											<p>May 19, 2018 <span>15h47</span></p>
											<p>May 19, 2018 <span>15h47</span></p>
											<p>May 19, 2018 <span>15h47</span></p>
										</div>

									</div>
								</li>
								<li>
									<div class="transformers-left">
										Share:
									</div>
									<div class="transformers-right">
										<a href="#"><i class="icofont icofont-social-facebook"></i></a>
										<a href="#"><i class="icofont icofont-social-twitter"></i></a>
										<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
										<a href="#"><i class="icofont icofont-youtube-play"></i></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<a href="#scroll21" class="theme-btn" style="color:#fff"><i class="icofont icofont-ticket"></i> BUY TICKET</a>
			</div>
		</div>
	</section><!-- transformers area end -->
	<!-- details area start -->
	<section class="details-area" style="height: 15%;">
		<div class="container" style="width: 60%;">
			<div class="row">
				<div class="col-lg-9">
					<div class="details-content">
						<div class="details-overview">
							<h2>Overview</h2>
							<p>Humans are at war with the Transformers, and Optimus Prime is gone. The key to saving the future lies buried in the secrets of the past and the hidden history of Transformers on Earth. Now it's up to the unlikely alliance of inventor Cade Yeager, Bumblebee, a n English lord and an Oxford professor to save the world. Transformers: The Last Knight has a deeper mythos and bigger spectacle than its predecessors, yet still ends up being mostly hollow and cacophonous. The first "Transformers" movie that could actually be characterized as badass. Which isn't a bad thing. It may, in fact, be better.</p>
						</div>
						<div class="details-overview">
							<h2 id="scroll21">Book your Tickets Now</h2>
						</div>
						<!-- form section Start================= -->
						<div class="form-style-5">
							<form action="" method="post">
								<fieldset>
									<input type="text" name="name" hidden value="<?php echo $row['movie_name'] ?>" placeholder="Name">
									<?php	} ?>
									<input type="email" name="email" placeholder="Email">
									<input type="number" name="phone" placeholder="Phone">

									<select style="border-radius: 3px; 	background-color:#1b1c1d; color:white; height: 4.5rem;margin-top: 2.8rem;margin-left: rem;" class="select" name="time">
										<option style=" color:aliceblue;" value="#">Timing</option>
										<option style=" color:aliceblue;" value="9-11">09:00 AM - 11:00 AM</option>
										<option style=" color:aliceblue;" value="11-1">11:00 AM - 01:00 PM</option>
										<option style=" color:aliceblue;" value="2-4">02:00 PM - 04:00 PM</option>
									</select>
									<select style="border-radius: 3px; background-color:#1b1c1d;  color:white; height: 4.5rem;margin-top: 2.7rem;" class="select" name="seat" value="Timing">
										<option style=" color:aliceblue;" value="#">Seats</option>
										<option style=" color:aliceblue;" value="Basic">Basic</option>
										<option style=" color:aliceblue;" value="Primium">Primium</option>
										<option style=" color:aliceblue;" value="Cenimatic">Cenimatic</option>
									</select>	
									<select  style="border-radius: 3px; background-color:#1b1c1d;  color:white; height: 4.5rem;margin-top: 2.7rem;" class="select" name="theater" id="optionSelect">
										<option style=" color:aliceblue;">Theater</option>
            							<?php

           								 while ($row = mysqli_fetch_assoc($resultss)) {
           								     echo "<option style=' color:aliceblue;'>{$row['theater_name']}</option>";
											 }
           								 ?>
       								 </select>
									<label for="job" style="color:white;">Date</label>
									<input type="date" name="date" style="color:white;">
								</fieldset>
								<input type="submit" name="submit" value="Book Ticket" />
							</form>
						</div>

						<div class="details-comment">
						</div>
						<div class="details-thumb">
							<div class="details-thumb-prev">
								<div class="thumb-icon">
									<i class="icofont icofont-simple-left"></i>
								</div>
								<div class="thumb-text">
									<h4>Previous Post</h4>
									<p>Standard Post With Gallery</p>
								</div>
							</div>
							<div class="details-thumb-next">
								<div class="thumb-text">
									<h4>Next Post</h4>
									<p>Standard Post With Preview Image</p>
								</div>
								<div class="thumb-icon">
									<i class="icofont icofont-simple-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 text-center text-lg-left">
					<div class="portfolio-sidebar">
						<!-- <img src="assets/img/sidebar/sidebar1.png" alt="sidebar" />
							<img src="assets/img/sidebar/sidebar2.png" alt="sidebar" />
							<img src="assets/img/sidebar/sidebar4.png" alt="sidebar" /> -->
					</div>
				</div>
			</div>
		</div>
	</section><!-- details area end -->
	<!-- footer section start -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="widget">
						<img src="assets/img/logo.png" alt="about" />
						<p>7th Harley Place, London W1G 8LZ United Kingdom</p>
						<h6><span>Call us: </span>(+880) 111 222 3456</h6>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="widget">
						<h4>Legal</h4>
						<ul>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Security</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="widget">
						<h4>Account</h4>
						<ul>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Watchlist</a></li>
							<li><a href="#">Collections</a></li>
							<li><a href="#">User Guide</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="widget">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter system now to get latest news from us.</p>
						<form action="#">
							<input type="text" placeholder="Enter your email.." />
							<button>SUBSCRIBE NOW</button>
						</form>
					</div>
				</div>
			</div>
			<hr />
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 text-center text-lg-left">
						<div class="copyright-content">
						</div>
					</div>
					<div class="col-lg-6 text-center text-lg-right">
						<div class="copyright-content">
							<a href="#" class="scrollToTop">
								Back to top<i class="icofont icofont-arrow-up"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- footer section end -->
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
	<script> 

class SmoothScroll {
    constructor() {
        this.links = document.querySelectorAll('a[href^="#"]');
        this.addSmoothScrolling();
    }

    addSmoothScrolling() {
        this.links.forEach(link => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                const targetId = link.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                // Check if the target element has the "no-smooth-scroll" class
                if (!targetElement.classList.contains('no-smooth-scroll')) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                } else {
                    targetElement.scrollIntoView();
                }
            });
        });
    }
}

// Initialize the SmoothScroll class
const smoothScroll = new SmoothScroll();
</script>