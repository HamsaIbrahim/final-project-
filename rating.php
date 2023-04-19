<?php
session_start();
	include 'include/connection.php';
	$star=$_POST['star'];
	$comment=$_POST['comment'];
	$teamid=$_POST['teamId'];
	//$city=$_POST['city'];
    $userId=$_SESSION['id'];
	$sql = "INSERT INTO `rating`(`userId`, `rating`, `comment`, `teamId`) VALUES ('$userId','$star','$comment','$teamid')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>