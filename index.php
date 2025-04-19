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

include "conect.php"; 

$sql = "SELECT * FROM movies";
$result = $connection->query($sql);

if (!$result) {
    die("Query failed: " . $connection->error);
}
 

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
	<!-- [if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif] -->
</head>
	<body>
	<!-- Page loader -->
	<div id="preloader"></div>
	<!-- header section start -->
	<?php  include "header.php"; ?>
	<!-- header section end -->

	
	
	<!-- hero area start -->
	<section class="hero-area" id="home">
		<div class="container">
			<div class="hero-area-slider">
			<?php
                while ($row = $result->fetch_assoc()) {
                ?>
				
				<div class="row hero-area-slide">
					<div class="col-lg-6 col-md-5">
						<div class="hero-area-content">
							<?php echo '<img style="width: 100%;border-radius:none;height: 600px " src="./m_image/' . $row['m_image'] . '" alt="' . $row['m_image'] . '" title="' . $row['m_image'] . '">'; ?>
							<a href="<?php echo $row['y_link']; ?>" class="popup-youtube">
										<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-7">
						<div class="hero-area-content pr-50">
							<h2><?php echo $row['movie_name']; ?></h2>
							<div class="review">
								<div class="author-review">
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
								</div>
								<h4>180k voters</h4>
							</div>
							<p>She is a devil princess from the demon world. She grew up sheltered by her parents and
								doesn't really know how to be evil or any of the common actions, She is unable to cry
								due to Keita's accidental first wish, despite needed for him to wish...</p>
							<h3>Cast:</h3>
							<div class="slide-cast">
								<div class="single-slide-cast">
									<img src="assets/img/cast/cast1.png" alt="about" />
								</div>
								<div class="single-slide-cast">
									<img src="assets/img/cast/cast2.jpg" alt="about" />
								</div>
								<div class="single-slide-cast">
									<img src="assets/img/cast/cast3.png" alt="about" />
								</div>
								<div class="single-slide-cast">
									<img src="assets/img/cast/cast4.png" alt="about" />
								</div>
								<div class="single-slide-cast">
									<img src="assets/img/cast/cast5.png" alt="about" />
								</div>
								<div class="single-slide-cast">
									<img src="assets/img/cast/cast6.png" alt="about" />
								</div>
								<div class="single-slide-cast">
									<img src="assets/img/cast/cast7.png" alt="about" />
								</div>
								<div class="single-slide-cast text-center">
									5+
								</div>
							</div>
							<div class="slide-trailor">
								<h3>Watch Trailer</h3>
								<form action="movie-details.php" method="post">
                                <input type="hidden" name="movieId" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="theme-btn" style="background-color: #eb315a;color: white"><i class="icofont icofont-ticket"></i> BUY TICKET</button>
								</form>

							</div>
						</div>
						<!-- <div class="news ">
				<h2><span>OCT</span> 13</h2>
				<h1>2023</h1>
				</div> -->
					</div> 
				</div>
				<?php
                }
                ?>
				
				
			</div>
			<div class="hero-area-thumb">
				<div class="thumb-prev">
					<div class="row hero-area-slide">
						<div class="col-lg-6">
							<div class="hero-area-content">
								<img src="assets/img/slide3.png" alt="about" />
								<a href="https://www.youtube.com/watch?v=-qSyvnUnfF8" class="popup-youtube">
										<i class="icofont icofont-ui-play"></i></a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="hero-area-content pr-50">
								<h2>Last Avatar</h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>180k voters</h4>
								</div>
								<p>She is a devil princess from the demon world. She grew up sheltered by her parents
									and doesn't really know how to be evil or any of the common actions, She is unable
									to cry due to Keita's accidental first wish, despite needed for him to wish...</p>
								<h3>Cast:</h3>
								<div class="slide-cast">
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast1.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast2.jpg" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast3.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast4.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast5.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast6.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast7.png" alt="about" />
									</div>
									<div class="single-slide-cast text-center">
										5+
									</div>
								</div>
								<div class="slide-trailor">
									<h3>Watch Trailer</h3>
									<form action="" method="post">
										<a href="#" class="theme-btn buy-ticket-btn"><i class="icofont icofont-ticket"></i> BUY TICKET</a>
									</form>


								</div>
							</div>
						</div>
						<!-- <div class="news ">
<h2><span>OCT</span> 13</h2>
<h1>2023</h1>
</div> -->
					</div>
				</div>
				<div class="thumb-next">
					<div class="row hero-area-slide">
						<div class="col-lg-6">
							<div class="hero-area-content">
								<img src="assets/img/slide1.png" alt="about" />
								<a href="https://www.youtube.com/watch?v=-qSyvnUnfF8" class="popup-youtube">
										<i class="icofont icofont-ui-play"></i></a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="hero-area-content pr-50">
								<h2>The Deer God</h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>180k voters</h4>
								</div>
								<p>She is a devil princess from the demon world. She grew up sheltered by her parents
									and doesn't really know how to be evil or any of the common actions, She is unable
									to cry due to Keita's accidental first wish, despite needed for him to wish...</p>
								<h3>Cast:</h3>
								<div class="slide-cast">
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast1.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast2.jpg" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast3.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast4.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast5.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast6.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast7.png" alt="about" />
									</div>
									<div class="single-slide-cast text-center">
										5+
									</div>
								</div>
								<div class="slide-trailor">
									<h3>Watch Trailer</h3>
									<a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-ticket"></i>Tickets</a>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- hero area end -->
	<!-- portfolio section start -->
	<section class="portfolio-area pt-60">
		<div class="container">
			<div class="row flexbox-center">
				<div class="col-lg-6 text-center text-lg-left">
					<div class="section-title">
						<h1><i class="icofont icofont-movie"></i> Spotlight This Month</h1>
					</div>
				</div>
				<div class="col-lg-6 text-center text-lg-right">
					<div class="portfolio-menu">
						<ul>
							<li data-filter="*" class="active">Latest</li>
							<li data-filter=".soon">Comming Soon</li>
							<li data-filter=".top">Top Rated</li>
							<li data-filter=".released">Recently Released</li>
						</ul>
					</div>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col-lg-9">
					<div class="row portfolio-item">
						<div class="col-md-4 col-sm-6 soon released">
							<div class="single-portfolio">
								<div class="single-portfolio-img">
									<img src="assets/img/portfolio/portfolio1.png" alt="portfolio" />
									<a href="https://www.youtube.com/watch?v=-qSyvnUnfF8" class="popup-youtube">
										<i class="icofont icofont-ui-play"></i>
									</a>
								</div>
								<div class="portfolio-content">
									<!-- <li><a class="theme-btn" href="#"><i class="icofont icofont-ticket"></i>Tickets</a></li> -->
									<h2>Boyz II Men</h2>
									<div class="review">
										<div class="author-review">
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
										</div>
										<h4>180k voters</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 top">
							<div class="single-portfolio">
								<div class="single-portfolio-img">
									<img src="assets/img/portfolio/portfolio2.png" alt="portfolio" />
									<a href="https://www.youtube.com/watch?v=EGK5qtXuc1Q" class="popup-youtube">
										<i class="icofont icofont-ui-play"></i>
									</a>
								</div>
								<div class="portfolio-content">
									<h2>Tale of Revemge</h2>
									<div class="review">
										<div class="author-review">
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
										</div>
										<h4>180k voters</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 soon">
							<div class="single-portfolio">
								<div class="single-portfolio-img">
									<img src="assets/img/portfolio/portfolio3.png" alt="portfolio" />
									<a href="https://www.youtube.com/watch?v=vs1epO_zLG8" class="popup-youtube">
										<i class="icofont icofont-ui-play"></i>
									</a>
								</div>
								<div class="portfolio-content">
									<h2>The Lost City of Z</h2>
									<div class="review">
										<div class="author-review">
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
										</div>
										<h4>180k voters</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 top released">
							<div class="single-portfolio">
								<div class="single-portfolio-img">
									<img src="assets/img/portfolio/portfolio4.png" alt="portfolio" />
									<a href="https://www.youtube.com/watch?v=xy1v0pzMP4g" class="popup-youtube">
										<i class="icofont icofont-ui-play"></i>
									</a>
								</div>
								<div class="portfolio-content">
									<h2>Beast Beauty</h2>
									<div class="review">
										<div class="author-review">
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
										</div>
										<h4>180k voters</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 released">
							<div class="single-portfolio">
								<div class="single-portfolio-img">
									<img src="assets/img/portfolio/portfolio5.png" alt="portfolio" />
									<a href="https://www.youtube.com/watch?v=SzS8Ao0H6Co" class="popup-youtube">
										<i class="icofont icofont-ui-play"></i>
									</a>
								</div>
								<div class="portfolio-content">
									<h2>In The Fade</h2>
									<div class="review">
										<div class="author-review">
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
										</div>
										<h4>180k voters</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 soon top">
							<div class="single-portfolio">
								<div class="single-portfolio-img">
									<img src="assets/img/portfolio/portfolio6.png" alt="portfolio" />
									<a href="https://www.youtube.com/watch?v=cMVBi_e8o-Y" class="popup-youtube">
										<i class="icofont icofont-ui-play"></i>
									</a>
								</div>
								<div class="portfolio-content">
									<h2>Last Hero</h2>
									<div class="review">
										<div class="author-review">
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
										</div>
										<h4>180k voters</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 text-center text-lg-left">
					<div class="portfolio-sidebar">
						<img src="assets/img/sidebar/sidebar1.png" alt="sidebar" />
						<img src="assets/img/sidebar/sidebar2.png" alt="sidebar" />
						<img src="assets/img/sidebar/sidebar3.png" alt="sidebar" />
						<img src="assets/img/sidebar/sidebar4.png" alt="sidebar" />
					</div>
				</div>
			</div>
		</div>
	</section><!-- portfolio section end -->
	<!-- video section start -->
	<section class="video ptb-90">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title pb-20">
						<h1><i class="icofont icofont-film"></i> Trailers & Videos</h1>
					</div>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col-md-9">
					<div class="video-area">
						<img src="assets/img/video/video1.png" alt="video" />
						<a href="https://www.youtube.com/watch?v=HOSmGMHs7ps" class="popup-youtube">
							<i class="icofont icofont-ui-play"></i>
						</a>
						<div class="video-text">
							<h2>Angle of Death</h2>
							<div class="review">
								<div class="author-review">
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
									<i class="icofont icofont-star"></i>
								</div>
								<h4>180k voters</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12 col-sm-6">
							<div class="video-area">
								<img src="assets/img/video/video2.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=PznXx8NHwpc" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
						</div>
						<div class="col-md-12 col-sm-6">
							<div class="video-area">
								<img src="assets/img/video/video3.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=zL2BtTdIuLI" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- video section end -->
	<!-- news section start -->
	<section class="news">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title pb-20">
						<h1><i class="icofont icofont-coffee-cup"></i> Latest News</h1>
					</div>
				</div>
			</div>
			<hr />
		</div>
		<div class="news-slide-area">
			<div class="news-slider">
				<div class="single-news">
					<div class="news-bg-1"></div>
					<div class="news-date">
						<h2><span>NOV</span> 25</h2>
						<h1>2023</h1>
					</div>
					<div class="news-content">
						<h2>The Witch Queen</h2>
						<p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under
							her hat, and teal eyes.</p>
					</div>
					<a href="blog-details.php">Read More</a>
				</div>
				<div class="single-news">
					<div class="news-bg-2"></div>
					<div class="news-date">
						<h2><span>OCT</span> 13</h2>
						<h1>2023</h1>
					</div>
					<div class="news-content">
						<h2>The Witch Queen</h2>
						<p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under
							her hat, and teal eyes.</p>
					</div>
					<a href="blog-details.php">Read More</a>
				</div>
				<div class="single-news">
					<div class="news-bg-3"></div>
					<div class="news-date">
						<h2><span>JAN</span> 20</h2>
						<h1>2023</h1>
					</div>
					<div class="news-content">
						<h2>The Witch Queen</h2>
						<p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under
							her hat, and teal eyes.</p>
					</div>
					<a href="blog-details.php">Read More</a>
				</div>
			</div>
			<div class="news-thumb">
				<div class="news-next">
					<div class="single-news">
						<div class="news-bg-3"></div>
						<div class="news-date">
							<h2><span>NOV</span> 25</h2>
							<h1>2023</h1>
						</div>
						<div class="news-content">
							<h2>The Witch Queen</h2>
							<p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up
								under her hat, and teal eyes.</p>
						</div>
						<a href="blog-details.php">Read More</a>
					</div>
				</div>
				<div class="news-prev">
					<div class="single-news">
						<div class="news-bg-2"></div>
						<div class="news-date">
							<h2><span>NOV</span> 25</h2>
							<h1>2023</h1>
						</div>
						<div class="news-content">
							<h2>The Witch Queen</h2>
							<p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up
								under her hat, and teal eyes.</p>
						</div>
						<a href="blog-details.php">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- news section end -->
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

<!-- ticket work -->
	<div class="buy-ticket">
		<div id="booking" class="section">
			<div class="section-center">
				<div class="container">
					<div class="buy-ticket-area">
						<a href="#" style="color: white ;"><i class="icofont icofont-close"></i></a>
					</div>
					<div class="row">
						<div class="booking-form">
							<div class="form-header">
								<h1>Book Tickets</h1>
							</div>
							<form action="" method="post">
								<div class="form-group">
										
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Name</span>
											<input class="form-control" type="text" name="name" placeholder="Enter your name">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Email</span>
											<input class="form-control" type="email" name="email" placeholder="Enter your email">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Phone</span>
											<input class="form-control" name="phone" type="number" placeholder="Enter your Phone">
										</div>
									</div>
									<div class="col-sm-6">
										<select
											style="border-radius: 3px; height: 4.5rem;margin-top: 2.8rem;margin-left: rem;"
											class="select" name="time" value="Timing">
											<option value="#">Timing</option>
											<option value="9-11">09:00 AM - 11:00 AM</option>
											<option value="11-1">11:00 AM - 01:00 PM</option>
											<option value="2-4">02:00 PM - 04:00 PM</option>
										</select>
										<select
											style="border-radius: 3px; height: 4.5rem;margin-top: 2.7rem;margin-left:2.2rem ;width: 36%;"
											class="select" name="seat" value="Timing">
											<option value="#">Seats</option>
											<option value="9-11">Basic</option>
											<option value="11-1">Primium</option>
											<option value="2-4">Cenimatic</option>
										</select>

									</div>
								</div>

								<div class="row">
									<div class="col-sm-5">
										<div class="form-group">
											<span class="form-label">Date</span>
											<input class="form-control" type="date" required>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Book Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
<!-- ticket work end  -->


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

<!-- Include jQuery -->
