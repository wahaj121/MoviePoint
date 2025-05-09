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
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
	<!-- Page loader -->
	<div id="preloader"></div>
	<!-- header section start -->
	<?php include "header.php"; ?>

	<!-- header section end -->
	<!-- breadcrumb area start -->
	<section class="breadcrumb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-area-content">
						<h1>Blog Details Page</h1>
					</div>
				</div>
			</div>
		</div>
	</section><!-- breadcrumb area end -->
	<!-- blog area start -->
	<section class="blog-details">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="news-details">
						<div class="single-news">
							<div class="news-bg-2"></div>
							<div class="news-date">
								<h2><span>NOV</span> 25</h2>
								<h1>2017</h1>
							</div>
						</div>
						<h2>Transformers: The Last Knight</h2>
						<a href="#"><i class="icofont icofont-users"></i>Animation, Movie, Action, Sci-Fi</a>
						<a href="#"><i class="icofont icofont-comment"></i>1k Comments</a>
						<p>Humans are at war with the Transformers, and Optimus Prime is gone. The key to saving the future lies buried in the secrets of the past and the hidden history of Transformers on Earth. Now it's up to the unlikely alliance of inventor Cade Yeager, Bumblebee, an English lord and an Oxford professor to save the world. Transformers: The Last Knight has a deeper mythos and bigger spectacle than its predecessors, yet still ends up being mostly hollow and cacophonous. The first "Transformers" movie that could actually be characterized as badass. Which isn't a bad thing. It may, in fact, be better.</p>
						<div class="detail-author">
							<div class="row flexbox-center">
								<div class="col-lg-6 text-lg-left text-center">
									<div class="details-author">
										<h4>By Admin:</h4>
										<img src="assets/img/author.png" alt="" />
									</div>
								</div>
								<div class="col-lg-6 text-lg-right text-center">
									<div class="details-author">
										<h4>Share:</h4>
										<a href="#"><i class="icofont icofont-social-facebook"></i></a>
										<a href="#"><i class="icofont icofont-social-twitter"></i></a>
										<a href="#"><i class="icofont icofont-social-pinterest"></i></a>
										<a href="#"><i class="icofont icofont-social-linkedin"></i></a>
										<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center">
							<img src="assets/img/blog-detail.png" alt="" />
						</div>
						<div class="details-reply">
							<h2>Leave a Reply</h2>
							<form action="blog-details.php" method="POST">
								<div class="row">
									<div class="col-lg-12">
										<div class="select-container">
											<input type="text" name="email" placeholder="Email"  />
											<i class="icofont icofont-envelope"></i>
										</div>
									</div>
						
									<div class="col-lg-12">
										<div class="textarea-container">
											<textarea name="message" placeholder="Type Here Message" ></textarea>
											<!-- <button><i class="icofont icofont-send-mail"></i></button> -->
										</div>
									</div>
								</div>
								<input type="submit" class="theme-btn theme-btn2" name="submit" value="Post Comment" style="background: #963dad; color:aliceblue;">
							</form>
						</div>
						<div class="details-comment">
							<p  style="color:#eb315a;"><?php   
							$host="localhost";
							$username="root";
							$password="";
							$database="movies";
							
							$connection=mysqli_connect($host,$username,$password,$database);
							// error_reporting(0);
							if (!$connection) {
							  echo "not connected";
							}
							if(array_key_exists("submit",$_POST)){
								$email = $_POST['email'];
								$message = $_POST['message'];
							
								$insert = "INSERT INTO `comment` ( `email`, `message`) VALUES ('$email','$message')";
								$insert_result = mysqli_query($connection, $insert);
							
							}
							if ($insert_result) {
        echo "Comment data inserted successfully";
    }?></p>
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
				<div class="col-lg-3">
					<div class="blog-sidebar">
						<h4>Recent Posts</h4>
						<ul>
							<li><a href="#">Transformers: The Last Knight</a></li>
							<li><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></li>
							<li><a href="#">Nostrud exercitation ullamco laboris</a></li>
							<li><a href="#">Magnam aliquam quaerat voluptatem</a></li>
							<li><a href="#">Magnam aliquam quaerat voluptatem</a></li>
							<li><a href="#">Excepteur sint occaecat cupidatat proi</a></li>
						</ul>
						<h4>Recent Comments</h4>
						<ul>
							<li><a href="#">admin on Justice League</a></li>
							<li><a href="#">admin on Mask Man</a></li>
							<li><a href="#">admin on Angle Pori</a></li>
							<li><a href="#">admin on The Man</a></li>
							<li><a href="#">admin on WP Devil</a></li>
						</ul>
						<h4>Categories</h4>
						<ul>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Feature</a></li>
							<li><a href="#">Media</a></li>
							<li><a href="#">Movie</a></li>
							<li><a href="#">Trailers_video</a></li>
							<li><a href="#">Uncategorized</a></li>
						</ul>
						<h4>Archives</h4>
						<ul>
							<li><a href="#">February 2018</a></li>
							<li><a href="#">January 2018</a></li>
							<li><a href="#">March 2018</a></li>
							<li><a href="#">April 2018</a></li>
						</ul>
						<div class="portfolio-sidebar">
							<img src="assets/img/sidebar/sidebar1.png" alt="sidebar" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- blog area end -->
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


<?php

?>