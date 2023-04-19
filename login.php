<?php
// Start the session
session_start();
if(isset($_SESSION['username'])) {
    header("Location:user/index.php");
    exit;
}
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
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<style>
    .error {

        background: #F2DEDE;

        color: #0c0101;

        padding: 7px;

        width: 15%;

        border-radius: 5px;

        margin: 20px auto;

    }
    </style>
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
                <h3>Login</h3>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Login</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="contant" class="contant main-heading single-blog">
            <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

            <?php } ?>
            <center>
                <form action="logincheck.php" method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">User Name</label>
                        <input type="text" id="form2Example1" class="form-control" style="width:25%" name="uname" />

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Password</label>
                        <input type="password" id="form2Example2" class="form-control" style="width:25%"
                            name="password" />

                    </div>
                    <br>
                    <!-- Submit button -->
                    <button type="submit" class="btn" style="width:25%;margin-left:37.5%">Sign in</button>
                </form>
            </center>
    </section>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <!-- ALL JS FILES -->
    <script src="assets2/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets2/js/custom.js"></script>
</body>

</html>