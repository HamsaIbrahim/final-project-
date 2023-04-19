<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Chellengers</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Reveal
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
    .heade {
        background-color: #016769;
        width: 100%;
        height: 140px;
    }

    .heade h3 {
        margin-top: 114px;
        position: relative;
        color: white;
        margin-left: 90px;
        font-weight: bold;
    }

    .bootom {
        background-color: aliceblue;
        height: auto;
        width: 100%;
    }

    #main {
        margin-left: 20%;
    }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <?php include('include/header.php') ?>
    <!-- End Header -->

    <!-- ======= hero Section ======= -->
    <div class="heade">
        <h3>Events</h3>
    </div>
    <div class="bootom">
        <h2 style="padding: 60px;color: #016769;font-weight: bold;">Challengers was the best <br>  Courts of the Year</h2>

        <div class="container">
            <div class="row mb-3">
            <?php
 
 // Username is root
 $user = 'root';
 $password = '';
 // Database name is geeksforgeeks
 $database = 'basketball';
 
 // Server is localhost with
 // port number 3306
 $servername='localhost';
 $mysqli = new mysqli($servername, $user,
                 $password, $database);
 
 // Checking for connections
 if ($mysqli->connect_error) {
     die('Connect Error (' .
     $mysqli->connect_errno . ') '.
     $mysqli->connect_error);
 }
 
 // SQL query to select data from database
 $sql = " SELECT * FROM courts";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>
 <?php while($rows=$result->fetch_assoc())
                 {
                     
                     
                      
                     
             ?>
                <div class="col-sm-4 mt-2">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="admin/courts/<?php echo $rows['image']; ?>" alt="Card image cap" style="width:100%;height:300px;">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['name']; ?></h5>
                            Location:<?php echo $rows['location']; ?>
                            
                            
                        </div>
                    </div>
                </div>
<?php }?>
            </div>
        </div>
        <!-- End Hero Section -->
    </div>
    <!-- End Hero Section -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>