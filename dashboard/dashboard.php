<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie Point</title>
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	
    
    <!-- ========================PHP WORK =================================== -->

    <?php 

include "conect.php";
$sqll = "SELECT COUNT(*) as total_comments FROM `messagebox`";
$result2 = $connection->query($sqll);
if ($result2->num_rows > 0) {
    $mes = $result2->fetch_assoc();
    } else {
    echo "0 Comments";
    } 
$sqll2 = "SELECT COUNT(*) as total_users FROM `login`";
$result3 = $connection->query($sqll2);
if ($result3->num_rows > 0) {
    $users = $result3->fetch_assoc();
    } else {
    echo "0 users";
    } 
$sqll3 = "SELECT COUNT(*) as total_comments FROM `comment`";
$result4 = $connection->query($sqll3);
if ($result4->num_rows > 0) {
    $comm = $result4->fetch_assoc();
    } else {
    echo "0 users";
    } 

    
$user = "SELECT * FROM `login` ORDER BY id DESC limit 5";
$result1 = $connection->query($user);

?> 
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../login.php");
}

$rows = mysqli_query($connection, "SELECT userimage FROM `login` WHERE username = '" . $_SESSION['username'] . "'");

?>


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="../index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text"><img src="./img/logo.png" class="t"></h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <?php 
						while ($row = mysqli_fetch_assoc($rows)) {
							echo '<img class="rounded-circle" src="../images/' . $row['userimage'] . '" style="width: 40px;height: 40px; title="' . $row['userimage'] . '">';
						?>
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['username'];?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <a href="Users.php" class="nav-item nav-link  "><i class="fa fa-user me-2"></i>Users </a>
                    <a href="comments.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Comments</a>
                    <a href="message.php" class="nav-item nav-link"><i class="fa fa-address-book me-2"></i>Contact us</a>
					<a href="ticket.php" class="nav-item nav-link"><i class="fa fa-ticket-alt me-2"></i>Tickets</a>
                    <a href="movies.php" class="nav-item nav-link"><i class="fa fa-film me-2"></i>Movies</a>
                    <a href="theater.php" class="nav-item nav-link"><i class="fa fa-video me-2"></i>Theater</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="dashboard.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <?php 
							echo '<img class="rounded-circle" src="../images/' . $row['userimage'] . '" style="width: 40px;height: 40px; title="' . $row['userimage'] . '">';
						?>
                        <?php	} ?>
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['username'];?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
                        
						


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x text-primary"></i>
                            <!-- <i class="fa fa-users" aria-hidden="true"></i> -->
                            <div class="ms-3">
                                <p class="mb-2"> Total Users</p>
                                <h6 class="mb-0"><?php echo "{$users['total_users']}";?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-comment fa-3x text-primary"></i>
                            <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->

                            <div class="ms-3">
                                <p class="mb-2">Comments</p>
                                <h6 class="mb-0"><?php echo "{$comm['total_comments']}";?></h6>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-comment fa-3x text-primary"></i>
                            <!-- <i class="fa fa-comment" aria-hidden="true"></i> -->

                            <div class="ms-3">
                                <p class="mb-2">Contact us</p>
                                <h6 class="mb-0"><?php echo "{$mes['total_comments']}";?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-star fa-2x text-primary"></i>
                            <i class="fa fa-star fa-2x text-primary"></i>
                            <i class="fa fa-star-half-alt fa-2x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Reviews</p>
                                <h6 class="mb-0">11</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Worldwide Viewers</h6>
                                <!-- <a href="">Show All</a> -->
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Salse & Revenue</h6>
                                <!-- <a href="">Show All</a> -->
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Users</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                                <tr class="text-white">
                    <!-- <th scope="col"><img class="rounded-c/ircle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"></th> -->
                                    <th style="text-align: center" scope="col">Id</th>
                                    <th style="text-align: center" scope="col">User image</th>
                                    <th style="text-align: center" scope="col">Name</th>
                                    <th style="text-align: center" scope="col">Email</th>
                                    <th style="text-align: center" scope="col">Password</th>
                                    <th style="text-align: center" scope="col">Users Type</th>
                                    <th style="text-align: center" scope="col">Edit/Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <?php

                                if ($result1->num_rows > 0) {

                                while ($row = $result1->fetch_assoc()) {

                                ?>
                                <tr>
                                <td><?php echo $row['id']; ?></td>

                                <td style="text-align: center"> <?php echo '<img class="rounded-circle" src="../images/' . $row['userimage'] . '" style="width: 40px;height: 40px; title="' . $row['userimage'] . '">'; ?></td>

                                <td><?php echo $row['username']; ?></td>

                                <td><?php echo $row['email']; ?></td>

                                <td><?php echo $row['password']; ?></td>

                                <td><?php echo $row['usertype']; ?></td>

                                <td style="text-align:center;"><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>&table=login">Delete</a></td>
                                </tr>
                                <?php       
                                    }
                                    }
                                ?>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


           

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https:/.phpcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https:/.phpcodex.com".php Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

<.php>