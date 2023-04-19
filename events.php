<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Site Metas -->
<title>Challengers</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="assets2/images/ball.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="assets2/images/ball.png">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="assets2/css/style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="assets2/css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="assets2/css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="assets2/css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="assets2/css/custom.css">
<!-- font family -->
<link
    href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<!-- end font family -->
<link rel="stylesheet" href="assets2/css/3dslider.css" />
<style>
.checked {
    color: orange;
}
</style>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="js/3dslider.js"></script>
</head>

<body class="game_info" data-spy="scroll" data-target=".header">
    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="assets2/images/loader.gif" alt="">
    </div>
    <!-- END LOADER -->
    <section id="top">
        <?php include('include/header.php')?>
        <div class="inner-page-banner">
            <div class="container">
            </div>
        </div>
        <div class="inner-information-text">
            <div class="container">
                <h3>Events</h3>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Events</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">
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
 $sql = " SELECT * FROM event";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>
 <?php while($rows=$result->fetch_assoc())
                 {
             ?>
                <div class="col-md-9">
                    <div class="feature-post small-blog">
                        <div class="col-md-5">
                            <div class="feature-img">
                                <img src="user/event/<?php echo $rows['image']; ?>" class="img-responsive" style="width:350px;height:250px" alt="#" />
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="feature-cont">
                                <div class="post-info">
                                    <span>
                                        <h5>on <?php
                                         echo  $rows['date']; ?></h5>
                                    </span>
                                </div>
                                <div class="post-heading">
                                    <h3><?php echo $rows['name']; ?></h3>
                                    <div class="full" style="margin-top:200px">
                                        <a class="btn" href="eventdetail.php?id=<?php echo $rows['id']?>">Join!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <!-- ALL JS FILES -->
    <script src="assets2/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets2/js/custom.js"></script>
</body>

</html>