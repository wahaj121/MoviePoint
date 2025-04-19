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
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../login.php");
}

include 'conect.php';
$rows = mysqli_query($connection, "SELECT userimage FROM `login` WHERE username = '" . $_SESSION['username'] . "'");

$sqll2 = "SELECT COUNT(*) as total_users FROM `login`";
$result3 = $connection->query($sqll2);
if ($result3->num_rows > 0) {
    $users = $result3->fetch_assoc();
    } else {
    echo "0 users";
    }
    if (isset($_POST['Update'])) {
        $id = $_POST['id'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userType = $_POST['userType'];
    
        // File upload handling
        $userimage = $_FILES['userimage']['name'];
        $temp_name = $_FILES['userimage']['tmp_name'];
        $upload_dir = "../images/";
    
        if (!empty($userimage)) {
            move_uploaded_file($temp_name, $upload_dir . $userimage);
        }
    
        // Perform the update query
        $updateQuery = "UPDATE `login` SET 
                        `username` = '$userName', 
                        `email` = '$email', 
                        `password` = '$password', 
                        `userimage` = '$userimage', 
                        `usertype` = '$userType' 
                        WHERE `id` = $id";
    
        if (mysqli_query($connection, $updateQuery)) {
            echo "<script>alert('User updated successfully!'); window.location = 'Users.php';</script>";
        } else {
            echo "<script>alert('Error updating record: " . mysqli_error($connection) . "');</script>";
        }
    }
    
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
    <link href="css/formcss.css" rel="stylesheet">

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
                <a href="dashboard.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img src="./img/logo.png" alt=""></h3>
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
                    <a href="dashboard.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="Users.php" class="nav-item nav-link  active "><i class="fa fa-user me-2"></i>Users </a>
                    <a href="comments.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Comments</a>
                    <a href="message.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Contact us</a>
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


<?php
$userId = $_GET['id'];
$userQuery = "SELECT * FROM `login` WHERE id = $userId";
$userResult = $connection->query($userQuery);
if ($userResult->num_rows > 0) {
    $userData = $userResult->fetch_assoc();
?>

<div class="form-style-5">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="number" hidden name="id" value="<?php echo $userData['id']; ?>" placeholder="Id">
        <input type="file" name="userimage" placeholder="User Image" style="margin-bottom:1rem;">
        <label for="">User Name</label>
        <input type="text" name="userName" value="<?php echo $userData['username']; ?>" placeholder="User Name">
        <label for="">Email</label>
        <input type="text" name="email" value="<?php echo $userData['email']; ?>" placeholder="Email">
        <label for="">Password</label>
        <input type="text" name="password" value="<?php echo $userData['password']; ?>" placeholder="Password">
        <label for="">User Type</label>
        <input type="text" name="userType" value="<?php echo $userData['usertype']; ?>" placeholder="User Type">
        <input type="submit" name="Update" value="Update">
    </form>
</div>

<?php
} else {
    echo "User not found.";
}
?>




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
</html>