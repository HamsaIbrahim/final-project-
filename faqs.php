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
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="js/3dslider.js"></script>
<style>
.card {
    width: 100%;
    height: auto;
    border-radius: 30px;
    background: #e0e0e0;
    box-shadow: 15px 15px 30px #bebebe,
        -15px -15px 30px #ffffff;
}
.collapsible {
        background-color: #016769;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
    }

    .active1,
    .collapsible:hover {
        background-color: white;
        color: black;
    }

    .content {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
    }
</style>
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
                <h3>FAQ'S</h3>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">FAQ'S</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="contant" class="contant main-heading"
        style="padding-bottom:0;margin-bottom:-1px;position:relative;z-index:1;">
        <div class="aboutus">
            <div class="container">
                <div class="row" style="margin-bottom:40px">
                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-6 col-sm-7 col-xs-12">
                            <div class="full">
                                <h3>Have A Question?</h3>
                                <p>Read Our FAQS!
                                </p>
                                <img class="img-responsive" src="assets2/images/ques.png" alt="#"
                                    style="border:1px solid black;border-radius:10px;width: 100%;" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-5 col-xs-12">
                            <div class="full">
                                <h3 style="visibility: hidden;">Have A Question?</h3>
                                <p style="visibility: hidden;">Read Our FAQS!
                                </p>

                                <div class="card">
                                <p style="font-weight: 700;text-align: center;padding-top: 10px; color: #016769;font-size: 20px;">Frequentkly Ask Question</p>
                                    <div class="card-body">
                                        <button type="button" class="collapsible">What is an alley-oop? </button>
                                        <div class="content">
                                            <p>An alley-oop occurs when the ball-handler throws the ball to their teammate who then dunks it in the basket before touching the ground.
                                            </p>
                                        </div>
                                        <button type="button" class="collapsible">What is basketball?</button>
                                        <div class="content">
                                            <p>Basketball is a sport played between two teams, opposing one another on a rectangular court, compete with the primary objective of shooting a basketball through the defender's hoop while preventing the opposing team from shooting through their own hoop. More about .
                                            </p>
                                        </div>
                                        <button type="button" class="collapsible">What is a triple threat position in Basketball ?</button>
                                        <div class="content">
                                            <p>A triple-threat basketball position is a posture where a player can do one of three things: dribble the ball, pass the ball, or shoot the ball.
                                            </p>
                                        </div>
                                        <button type="button" class="collapsible">What is a charge in Basketball ?</button>
                                        <div class="content">
                                            <p>A charge is an offensive foul. When a charge is called, it means that an offensive player has made significant contact with a defender that has an established position.
                                            </p>
                                        </div>
                                        <center>
                                        <nav aria-label="Page navigation example"
                                            style="margin-top: 30px;">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            </center>
                                        </nav>
                                    </div>
                                </div>
                            </div>
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
    <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active1");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
    </script>
</body>

</html>