<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie Point</title>
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	
    
    <!-- ========================PHP WORK =================================== -->
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
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/bootstrap.min.css"
      media="all"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/1bootstrap.min.css"
      media="all"
    />
    <!-- Slick nav CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/slicknav.min.css"
      media="all"
    />
    <!-- Iconfont CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/icofont.css"
      media="all"
    />
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css" />
    <!-- Popup CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/magnific-popup.css"
    />
    <!-- Main style CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/style.css"
      media="all"
    />
    <!-- Responsive CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/responsive.css"
      media="all"
    />
    <title></title>
  </head>
  <style>
    /* Basic styling for the profile menu */
    .profile-menu {
      position: relative;
      display: inline-block;
      left: 10%;
    }

    .profile-button {
      background-color: transparent;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
    }

    .profile-image {
      width: 30px; /* Adjust the image size as needed */
      height: 30px;
      border-radius: 50%;
      margin-right: 10px;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background: #13151f;
      /* color: #ffffff; */
      min-width: 250px;
      z-index: 1;
      right: 100%; /* Shift the menu to the right */
      top: 100%; /* Display the dropdown below the button */
    }
    /* Styling for individual menu items */
    .dropdown-content a {
      color: #ffffff;
      padding: 12px 16px;
      text-align: center;
      text-decoration: none;
      display: block;
    }

    /* Change color on hover */
    .dropdown-content a:hover {
      /* background-color: #f1f1f1; */
      color: #eb315a;
    }

  </style>
  <body>
    <header class="header">
      <div class="container">
        <div class="header-area">
          <div class="logo">
            <a href="index.php"><img src="assets/img/logo.png" alt="logo" /></a>
          </div>
          <div class="header-right">
            <form action="#">
              <input type="text" placeholder="Search" />
              <button><i class="icofont icofont-search"></i></button>
            </form>

            <div class="profile-menu">
              <button class="profile-button" onclick="toggleDropdown()">
                <?php 
	while ($row = mysqli_fetch_assoc($rows)) {
		echo '<img src="images/' . $row['userimage'] . '" style="width: 40px;height: 40px;border-radius: 50%; title="' . $row['userimage'] . '">';
                ?>
              </button>
              <div class="dropdown-content" id="dropdown-content" style="width: 300px; height: 200px; border-radius:20px; ">
                <?php echo '<img src="images/' . $row['userimage'] . '" style="width:60px; height: 60px; margin-right: 12rem; margin-top: 2rem; border-radius: 50%; title="' . $row['userimage'] . '">';} ?><br>
                <a href="#"><?php echo $_SESSION['username']; ?></a>
                <a href="logout.php">Logout</a>
              </div>
            </div>
          </div>
          <div class="menu-area">
            <div class="responsive-menu"></div>
            <div class="mainmenu">
              <ul id="primary-menu">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="celebrities.php">CelebritiesList</a></li>
                <li><a href="top-movies.php">Top Movies</a></li>
                <li><a href="blog.php">News</a></li>
                <li>
                  <a href="#"
                    >Pages <i class="icofont icofont-simple-down"></i
                  ></a>
                  <ul>
                    <li><a href="blog-details.php">Blog Details</a></li>
                    <li><a href="contact.php">Contact Us </a></li>
                  </ul>
                </li>
                <!-- <li><a class="theme-btn" href="#"><i class="icofont icofont-ticket"></i>Tickets</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>
<script>
  // JavaScript for handling the dropdown
  function toggleDropdown() {
    var dropdown = document.getElementById("dropdown-content");
    if (dropdown.style.display === "block") {
      dropdown.style.display = "none";
    } else {
      dropdown.style.display = "block";
      setTimeout(function () {
        dropdown.style.display = "none";
      }, 10000); // Close the dropdown after 10 seconds (10000 milliseconds)
    }
  }
</script>
</body>
</html>