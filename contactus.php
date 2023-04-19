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
                <h3>Contact Us</h3>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">
                <div class="contact">
                    <!-- <div class="col-md-12">
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.580671926123!2d77.31096031514461!3d28.582351982437654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfcad59dc9d0b%3A0xe4060212422c0b9a!2sLeopedia+Web+Solutions!5e0!3m2!1sen!2sin!4v1511962485065"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div> -->
                    <div class="col-md-6">
                        <div class="contact-info">
                            <div class="kode-section-title">
                                <h3>Contact Info</h3>
                            </div>
                            <div class="kode-forminfo">
                                <p>Contact Us for More Help!</p>
                                <!-- <ul class="kode-form-list">
                                    <li>
                                        <i class="fa fa-home"></i>
                                        <p><strong>Address:</strong> 805 consectetur adipiscing elit, sed do eiusmod
                                            tempor</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <p><strong>Phone:</strong> 123 456 7890</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <p><strong>Email:</strong> Info@sportyleague.com</p>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-us">
                            <form method="post" action="addcontactus.php" >
                                <ul>
                                    <li><input type="text" id="name" name="name" class="required" placeholder="Full Name *">
                                    </li>
                                    <li><input type="text" id="email" name="email" class="required email"
                                            placeholder="Email *"></li>
                                    <li><select class="form-control" name="query" required>
                                    <option value="">Query</option>
                                    <option value="Courts Query">Courts Query</option>
                                    <option value="Events Query">Events Query</option>
                                    <option value="Team Query">Team Query</option>
                                </select>
                            </li>
                                <br>
                                    <li><textarea name="text" id="message" placeholder="Text"></textarea>
                                    </li>
                                    <li><button class="thbg-color" type="submit" style="background-color: white;padding: auto;border: 1px solid black;width: 100px;height: 30px;border-radius: 30px;" name="contactus">Send </button></li>
                                </ul>
                                <div class="hidden-me" id="contact_form_responce">
                                    <p></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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