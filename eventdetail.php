<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location:login.php");
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
                <h3>Events Detail</h3>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Events Detail</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="contant" class="contant main-heading single-blog">
        <div class="row">
            <div class="container">
                <?php
 $id=$_GET['id'];
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
 $sql = " SELECT * FROM event where id=$id";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>
                <?php while($row=$result->fetch_assoc())
                 {
                         
             ?>
                <div class="col-md-12">
                    <div class="feature-post">
                        <div class="feature-img">
                            <img src="user/event/<?php echo $row['image']; ?>" class="img-responsive" alt="#" width="100%" />
                        </div>
                        <div class="feature-cont">
                            <div class="row">
                                <div class="col-sm-6 mt-2">
                                    <p><b>Location:</b> <?php echo $row['location']; ?></p>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <p><b>Skill:</b> <?php echo $row['skill']; ?></p>
                                </div>
                            </div>
                            <div class="post-people">
                                <div class="left-profile">
                                    <div class="post-info">
                                        <span>
                                            <h5>on <?php echo $row['date']; ?></h5>
                                        </span>
                                    </div>
                                    <span class="share"></span>
                                </div>
                            </div>
                            <div class="post-heading">
                                <h3><?php echo $row['name']; ?></h3>
                                <a href="payment.php?id=<?php echo $row['id']?>">
                                    <p><button class="btn">Attend</button></p>
                                </a>
                            </div>
                        </div>
                        <div class="commant-section" id="testing">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h3>COMMENTS:</h3>
                                <?php
 $id=$_GET['id'];
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
 $sql = " SELECT * FROM comments where event_id=$id";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>
                                <?php while($rating=$result->fetch_assoc())
                 {
                     
                     
                      
                     
             ?>
                                <div class="commant-text row">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-hidden">
                                        <?php 
               include 'include/connection.php';
               $sql1 = " SELECT * FROM player where id=$rating[userId]";
             $user = $conn->query($sql1);
               while($users=$user->fetch_assoc())
             {
             ?>
                                        <div class="profile">
                                            <img class="img-responsive" src="assets2/images/1.jpeg" alt="#" width="50%">
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-hidden">
                                        <h5><?php echo $users['username']?></h5>
                                        <?php }?>
                                        <p class="msg"><?php echo $rating['comment'] ?>
                                        </p>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="commant-section">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h3>Comment</h3>
                                <div class="form-command row">
                                    <form id="fupForm" name="form1" method="post" class="form-horizontal1">
                                        <input type="hidden" id="eventId" value="<?php  echo $row['id'] ?>">
                                        <div class="comment-box-field">
                                            <div class=" col-sm-12 col-xs-12">
                                                <div class="comment-box-full"><textarea id="comment"
                                                        class="form-control4" placeholder="Comments" name="comment"
                                                        cols="45" rows="3" aria-required="true" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="comment-box-submit">
                                                    <input class="btn" value="Submit" type="submit" name="save"
                                                        id="butsave">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-contant">
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
    <script>
    $(document).ready(function() {
        $('#butsave').on('click', function() {
            var comment = $('#comment').val();
            var eventId = $('#eventId').val();
            //alert(teamId);
            if (comment != "") {
                $.ajax({
                    url: "comment.php",
                    type: "POST",
                    data: {

                        comment: comment,
                        eventId: eventId
                    },
                    cache: false,
                    success: function(dataResult) {
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                            $('#testing').load('#testing');
                        } else if (dataResult.statusCode == 201) {
                            alert("Error occured !");
                        }

                    }
                });
            } else {
                alert('Please fill all the field !');
            }
        });
    });
    </script>
</body>

</html>